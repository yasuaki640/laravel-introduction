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
        $rules = [
            'id' => 'required',
            'pass' => 'required'
        ];
        $validation_msg = [
            'name.required' => '名前必須',
            'mail.email' => 'メルアド形式でうて',
        ];
        $validator = Validator::make($request->query(), $rules, $validation_msg);
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
