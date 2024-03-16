<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class NavigationMenu extends Component
{
    public function index()
    {
        $users = User::all();
        return view('navigation-menu', compact('users'));
    }
    
    public function render()
    {
        return view('livewire.navigation-menu');
    }
}
