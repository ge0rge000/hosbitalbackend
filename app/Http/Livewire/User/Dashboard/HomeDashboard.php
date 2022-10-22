<?php

namespace App\Http\Livewire\User\Dashboard;

use Livewire\Component;

class HomeDashboard extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard.home-dashboard')->layout('layouts.userdashboard');
    }
}
