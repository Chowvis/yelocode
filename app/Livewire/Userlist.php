<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Userlist extends Component
{
    use WithPagination;
    #[On('user-created')]
    public function updateList($user = null){

    }
    public function render()
    {
        $users = User::latest()->paginate(10);
        return view('livewire.userlist',[
            'users' => $users,
        ]);
    }
}
