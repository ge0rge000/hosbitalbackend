<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserHome extends Component
{
    public function render()
    {
        return view('livewire.user.hoemcomponent')->layout('layouts.user');
    }
}


