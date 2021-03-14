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
        if ($request->hasCookie('msg')) {
            $msg = 'Cookie: ' . $request->cookie('msg');
        } else {
            $msg = '※No cookie exists';
        }
        return view('hello.index', ['msg' => $msg]);
    }

    public function post(Request $request)
    {
        $validate_rule = ['msg' => 'required'];
        $this->validate($request, $validate_rule);

        $msg = $request->msg;
        $response = response()->view('hello.index', ['msg' => "{$msg} was saved in Cookie"]);
        $response->cookie('msg', $msg, 100);
        return $response;
    }
}
