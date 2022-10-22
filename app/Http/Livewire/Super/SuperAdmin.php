<?php

namespace App\Http\Livewire\Super;

use Livewire\Component;

class SuperAdmin extends Component
{
    public function render()
    {
        return view('livewire.super.home-controller')->layout('layouts.super');
    }
}
