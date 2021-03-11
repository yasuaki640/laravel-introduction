<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(): string
    {
        return HelloController::class . ' s index action';
    }
}
