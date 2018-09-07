<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $name = '杨志傲';
        // Mail::send()的返回值为空，所以可以其他方法进行判断
        Mail::send('emails.test',['name'=>$name],function($message){
            $to = '284973767@qq.com';
            $message->to($to)->subject('2018年9月7号');
        });
        // 返回的一个错误数组，利用此可以判断是否发送成功
        dd(Mail::failures());
    }

}