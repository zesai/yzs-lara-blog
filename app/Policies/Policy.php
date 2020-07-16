<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Policy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param $ability
     * @return bool
     * @author zesai
     * @date 2020/7/16
     */
    public function before($user, $ability)
	{
        // 如果用户拥有管理内容的权限的话，即授权通过
	     if ($user->can('manage_contents')) {
	     		return true;
	     }
	}
}
