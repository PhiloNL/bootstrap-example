<?php

namespace App\Http\Livewire;

use WireElements\Pro\Components\Modal\Modal;

class UsersOverview extends Modal
{
    public function render()
    {
        return view('livewire.users-overview');
    }
}
