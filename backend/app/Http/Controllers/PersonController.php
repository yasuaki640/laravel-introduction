<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }

    public function find(Request $request)
    {
        return view('person.find', ['id' => '']);
    }

    public function search(Request $request)
    {
        $item = Person::find($request->input('id'));
        $param = [
            'id' => $request->input('id'),
            'item' => $item
        ];
        return view('person.find', $param);
    }
}
