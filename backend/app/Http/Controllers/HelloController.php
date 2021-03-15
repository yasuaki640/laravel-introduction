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
        $items = DB::table('people')->get();
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

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->input('name'),
            'mail' => $request->input('mail'),
            'age' => $request->input('age'),
        ];
        DB::insert('insert into people (name,mail,age) values (:name,:mail,:age)', $param);
        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        $param = ['id' => $request->input('id')];
        $item = DB::select('select * from people where id = :id', $param);
        return view('hello.edit', ['form' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'mail' => $request->input('mail'),
            'age' => $request->input('age'),
        ];
        DB::update('update people set name =:name,mail=:mail,age=:age where id = :id');
        return redirect('/hello');
    }

    public function show(Request $request)
    {
        $min = $request->query('min');
        $max = $request->query('max');
        $items = DB::table('people')
            ->whereRaw('age >= ? and age <= ?', [$min, $max])
            ->get();
        return view('hello.show', ['items' => $items]);
    }
}
