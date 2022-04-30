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
        // return redirect('hello/list');
        return redirect()->route('list');
    }
}
