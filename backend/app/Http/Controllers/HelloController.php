<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id = 'noid', $pass = 'unknown'): string
    {
        return HelloController::class . ' s index action id : '
            . $id
            . ' and pass :'
            . $pass;
    }
}
