<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(Request $request)
    {
        return view('board.index', ['items' => Board::all()]);
    }

    public function add(Request $request)
    {
        return view('board.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Board::$rules);
        $form = $request->all();
        unset($form['__token']);

        $board = new Board();
        $board->fill($form)->save();

        return redirect('/board');
    }
}
