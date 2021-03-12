<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = ['kayako', 'tsubasa', 'riho', 'mio', 'nashiko', 'yume'];
        return view('hello.index', ['data' => $data]);
    }
}
