<?php
declare(strict_types=1);

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
        return view('person.find', ['name' => '']);
    }

    public function search(Request $request)
    {
        $item = Person::nameEqual($request->input('name'))->first();
        $param = [
            'name' => $request->input('name'),
            'item' => $item
        ];
        return view('person.find', $param);
    }
}
