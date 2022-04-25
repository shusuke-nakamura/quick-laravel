<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // アクションメソッドの定義
    public function index()
    {
        return 'こんにちは、世界！';
    }

    public function view()
    {
        $data = [
            'msg' => 'こんにちは、世界！'
        ];

        return view('hello.view', $data);
    }
}
