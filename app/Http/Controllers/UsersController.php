<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use \Illuminate\View\View;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['show']]);
    }

    /**
     * @param User $user
     * @return Factory|View
     * @author zesai
     * @date 2020/7/15
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * @param User $user
     * @return Factory|View
     * @throws AuthorizationException
     * @author zesai
     * @date 2020/7/15
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    /**
     * @param UserRequest $Request
     * @param User $user
     * @param ImageUploadHandler $uploader
     * @return RedirectResponse
     * @throws AuthorizationException
     * @author zesai
     * @date 2020/7/15
     */
    public function update(UserRequest $Request, User $user, ImageUploadHandler $uploader)
    {
        $this->authorize('update', $user);

        $data = $Request->all();

        if ($Request->avatar){
            $result = $uploader->save($Request->avatar,'avatars', $user->id, 416);
            if ($result){
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);

        return redirect()->route('users.show',$user->id)->with('success','您的个人资料更新成功');
    }

}
