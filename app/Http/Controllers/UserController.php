<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'telephone' => 'required|numeric|unique:users',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:8',
            'document_type' => 'required|in:CC,TI,CE,PA',
            'document_number' => 'required|numeric',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name' => strtoupper($request->name),
            'last_name' => strtoupper($request->last_name),
            'telephone' => $request->telephone,
            'email' => strtolower($request->email),
            'password' => Hash::make($request->password),
            'document_type' => $request->document_type,
            'document_number' => $request->document_number,
            'role_id' => $request->role_id,
        ]);
        
        return redirect()->route('user.index')->with('success', 'User created successfully');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('user.index')->with('success', 'User updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User successfully deleted');
    }
}
