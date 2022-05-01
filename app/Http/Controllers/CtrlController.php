<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    public function plain()
    {
        return response('こんにちは、世界！', 200)->header('Content-Type', 'text/plain');
    }

    public function header()
    {
        // return response()->view('ctrl.header', ['msg' => 'こんにちは、世界！'], 200)->header('Content-Type', 'text/xml');
        return response()->view('ctrl.header', ['msg' => 'こんにちは、世界！'], 200)->withHeaders([
            'Content-Type' => 'text/xml',
            'X-Powered-FW' => 'Laravel/9'
        ]);
    }

    public function outJson()
    {
        return response()->json([
            'name' => 'Yoshihiro, YAMADA',
            'sex' => 'male',
            'age' => 18
        ])->withCallback('callback');
    }

    public function outFile()
    {
        $csv_file = dirname(dirname(dirname(dirname(__FILE__)))) . "/download.csv";
        return response()->download($csv_file, 'download.csv', ['Content-Type' => 'text/csv']);
    }

    public function outCsv()
    {
        return response()->streamDownload(function () {
            print("1,2022/10/1,123\n" .
                "2,2022/10/2,116\n" .
                "3,2022/10/3,98\n" .
                "4,2022/10/4,102\n" .
                "5,2022/10/5,134\n"
            );
        }, 'donwload.csv', ['Content-Type' => 'text/csv']);
    }

    public function outImage()
    {
        $img_file = dirname(dirname(dirname(dirname(__FILE__)))) . "/hamu.png";
        return response()->file($img_file, ['Content-Type' => 'image/png']);
    }

    public function redirectBasic()
    {
        return redirect('hello/list');
        // return redirect()->route('list');
        // return redirect()->route('param', ['id' => 108]);
        // return redirect()->away('https://wings.msn.to/');
    }

    public function index(Request $req)
    {
        return 'リクエストパス:' . $req->path();
    }

    public function form()
    {
        return view('ctrl.form', ['result' => '']);
    }

    public function result(Request $req)
    {
        $name = $req->name;
        // $name = $req->input('hoge', '名無権兵衛');
        // $dt = $req->date('name', 'Y-m-d', 'Asia/Tokyo');
        return view('ctrl.form', [
            'result' => 'こんにちは、' . $name . 'さん!'
        ]);
    }

    public function upload()
    {
        return view('ctrl.upload', ['result' => '']);
    }

    public function uploadfile(Request $req)
    {
        if (!$req->hasFile('upfile')) {
            return 'ファイルを指定してください。';
        }

        $file = $req->upfile;

        if (!$file->isValid()) {
            return 'アップロードに失敗しました。';
        }

        $name = $file->getClientOriginalName();
        $file->storeAs('files', $name);

        return view('ctrl.upload', [
            'result' => $name . 'をアップロードしました。'
        ]);
    }
}
