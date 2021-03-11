<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = ['msg' => 'Enter your name.'];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        return view('hello.index', ['msg' => "hello {$msg}!!!"]);
    }
}
