<?php

namespace App\Http\Livewire\Page\Auth;

use Livewire\Component;

class LoginPage extends Component
{
    public function render()
    {
        return view('livewire.page.auth.login-page')->extends('layouts.app')->section('content');
    }
}
