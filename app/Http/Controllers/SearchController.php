<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class SearchController extends Controller
{
    public function show()
    {
        //$data = User::where('name', 'user1')->value('email');
        return view('home');
    }
}
