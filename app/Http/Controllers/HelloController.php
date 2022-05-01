<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Console\ControllerMakeCommand;

class HelloController extends Controller
{
    //
    public function index()
    {
        return view('hello');
    }

    public function create(Request $request)
    {

        //フォーム入力値を受け取って変数に代入する
        $text = $request->input('text');

        //変数をviewに渡す
        return view('hello')->with([
            "text" => $text,
        ]);
    }

    public function hello_done(Request $request)
    {

        $text2 = $request->input('text2');

        return view('hello_done')->with([
            "text2" => $text2,
        ]);
    }

}
