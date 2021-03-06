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

    public function add(Request $request)
    {
        return view('person.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $form = $request->all();
        unset($form['__token']);

        $person = new Person;
        $person->fill($form)->save();

        return redirect('/person');
    }

    public function edit(Request $request)
    {
        $person = Person::find($request->query('id'));
        return view('person.edit', ['form' => $person]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $form = $request->all();
        unset($form['__token']);

        $person = Person::find($request->input('id'));
        $person->fill($form)->save();

        return redirect('/person');
    }

    public function remove(Request $request)
    {
        Person::find($request->query('id'))->delete();
        return redirect('/person');
    }
}
