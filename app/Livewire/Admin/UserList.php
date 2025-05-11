<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public function render()
    {
        $users = User::where('role', 'regular')->get();
        return view('livewire.admin.user-list', ['users' => $users]);
    }
}
