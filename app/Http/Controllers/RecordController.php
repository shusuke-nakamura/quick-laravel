<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function find()
    {
        return Book::find(1)->title;
    }

    public function where()
    {
        $result = Book::where('publisher', '走跳社')->get();
        // $result = Book::where('publisher', '走跳社')->first();
        // $result = Book::where('price', '<', 3000)->get();
        // $result = Book::where('title', 'LIKE', '%Java%')->get();
        // $result = Book::whereIn('publisher', ['ジャパンIT', '走跳社', 'IT Emotion'])->get();
        // $result = Book::whereBetween('price', [1000, 3000])->get();


        // $result = Book::published()->get();
        // $result = Book::publisher('走跳社')->get();
        return view('hello.list', ['records' => $result]);
    }
}
