<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class CertificationController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function certification(Request $request)
    {
        //フォーム入力値を受け取って変数に代入する
        $email = $request->input('email');
        $password = $request->input('password');

        //Membersテーブルのレコードと照合
        foreach(Member::all() as $member) {
            if($email === $member->email && $password === $member->password) {
                $message = "ようこそ". $member->name . "さん！";
                return view('login_success')->with([
                    "message" => $message,
                ]);
            }
        }
        
        $message = "ログインに失敗しました";
        return view('login')->with([
            "message" => $message,
        ]);
    }
}
