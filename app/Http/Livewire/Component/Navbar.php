<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.component.navbar');
    }

    public function logout()
    {
        auth()->logout();

        redirect()->to('login');
    }
}
