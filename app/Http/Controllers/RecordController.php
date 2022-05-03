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
        // $result = Book::whereNull('publisher')->get();
        // $result = Book::whereYear('published', '2022')->get();
        // $result = Book::whereYear('published', '<', '2022')->get();
        // $result = Book::where('publisher', '走跳社')->where('price', '<', '3000')->get();
        // $result = Book::where('publisher', '走跳社')->orWhere('price', '<', '2500')->get();
        // $result = Book::whereRaw('publisher=? AND price < ?', ['走跳社', '3000'])->get();
        // $result = Book::orderBy('price', 'desc')->orderBy('published', 'asc')->get();
        // $result = Book::orderBy('published', 'desc')->offset(2)->limit(3)->get();
        // $result = Book::select('title', 'publisher')->get();

        // $result = Book::published()->get();
        // $result = Book::publisher('走跳社')->get();
        return view('hello.list', ['records' => $result]);

        // $result = Book::groupBy('publisher')->selectRaw('publisher, AVG(price) AS price_avg')->get();
        // $result = Book::groupBy('publisher')->having('price_avg', '<', 2500)->selectRaw('publisher, AVG(price) AS price_avg')->get();
        // $result = Book::groupBy('publisher')->having('price_avg', '<', '5000')->selectRaw('publisher, AVG(price) AS price_avg')->dump()->get();
        // return view('record.where', ['records' => $result]);

        // $result = Book::where('publisher', '走跳社')->max('price');
        // return $result;

    }

    public function hasMany()
    {
        return view('record.hasmany', [
            'book' => Book::find(1)
        ]);
    }
}
