<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('hello.index', ['msg' => 'input to form']);
    }

    public function post(HelloRequest $request)
    {
        return view('hello.index', ['msg' => 'validation success']);
    }
}
