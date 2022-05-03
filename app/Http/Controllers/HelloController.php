<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function list()
    {
        // $data = [
        //     'records' => Book::all()
        // ];
        $data = [
            'records' => DB::select('SELECT * FROM books')
        ];

        return view('hello.list', $data);
    }
}
