<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('hello.index');
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        return view('hello.index', ['msg' => $request->msg]);
    }
}
