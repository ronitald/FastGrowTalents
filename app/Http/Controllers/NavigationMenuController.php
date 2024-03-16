<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NavigationMenuController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('navigation-menu', compact('users'));
    }
}
