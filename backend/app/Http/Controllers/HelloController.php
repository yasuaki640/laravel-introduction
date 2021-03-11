<?php
declare(strict_types=1);

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function index($id = 'none')
    {
        $data = [
            'msg' => 'this value gained at controller',
            'id' => $id
        ];
        return view('hello.index', $data);
    }
}
