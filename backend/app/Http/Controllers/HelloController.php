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
        $validation = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150'
        ];
        $this->validate($request, $validation);
        return view('hello.index', ['msg' => 'validation success']);
    }
}
