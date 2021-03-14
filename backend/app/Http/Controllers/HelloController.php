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
        $validator = Validator::make($request->query(), [
            'id' => 'required',
            'pass' => 'required'
        ]);
        $msg = $validator->fails() ? 'failure' : 'success';
        return view('hello.index', ['msg' => $msg]);
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150'
        ]);
        if ($validator->fails()) {
            return redirect('/hello')
                ->withErrors($validator)
                ->withInput();
        }
        return view('hello.index', ['msg' => 'validation success']);
    }
}
