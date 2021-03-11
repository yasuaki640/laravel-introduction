<?php
declare(strict_types=1);

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function index()
    {
        $data = ['msg' => 'this value gained at controller'];
        return view('hello.index', $data);
    }
}
