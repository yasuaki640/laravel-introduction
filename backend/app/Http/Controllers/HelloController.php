<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => 'this value gained at controller',
            'id' => $request->id
        ];
        return view('hello.index', $data);
    }
}
