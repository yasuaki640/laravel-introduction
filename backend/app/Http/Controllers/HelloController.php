<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
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
