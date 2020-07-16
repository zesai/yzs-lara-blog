<?php

namespace App\Http\Controllers;

class NotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //获取登陆用户的所有通知
        $notifications = \Auth::user()->notifications()->paginate(20);
        //查看通知后 标记为已读
        \Auth::user()->markAsRead();
        return view('notifications.index', compact('notifications'));
    }
}
