<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificationController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function certification(Request $request)
    {
        //正解のemail & password
        $c_email = "correct_email";
        $c_password = "correct_password";

        //フォーム入力値を受け取って変数に代入する
        $email = $request->input('email');
        $password = $request->input('password');

        //変数をviewに渡す
        if($email === $c_email && $password === $c_password) {
            $message = "ログインに成功しました";
            return view('login_success')->with([
                "message" => $message,
            ]);
        } else {
            $message = "ログインに失敗しました";
            return view('login')->with([
                "message" => $message,
            ]);
        }

    }
}
