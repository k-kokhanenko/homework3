<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('userinfo', [
            'user' => auth()->user()
        ]);
    }
}
