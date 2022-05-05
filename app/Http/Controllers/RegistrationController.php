<?php

namespace App\Http\Controllers;

use App\Models\Member;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function index()
    {
        return view('registration');
    }

    //入力値をUsersテーブルに追加
    public function add(Request $request)
    {
        $member = new Member;

        $member->name = $request->name;
        $member->email = $request->email;
        $member->password = $request->password;

        $member->save();

        $message = "会員登録が完了しました";
            return view('registration')->with([
                "message" => $message,
            ]);
    }
}
