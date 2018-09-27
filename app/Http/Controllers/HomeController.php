<?php

namespace App\Http\Controllers;

use App\Jobs\SendDeployEmail;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * 分发任务，发送邮件
     */
    public function email(Request $request)
    {
        $user = auth()->user();

        if (!$user) {
            dd('没有用户');
        }

        $this->dispatch(new SendDeployEmail($user));
        dd('加入队列成功');

    }
}
