<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithFileUploads;
    use WithPagination;
    #[Rule('required|min:2|max:20')]
    public $name;
    #[Rule('required|email|unique:users')]
    public $email;
    #[Rule('required|min:5')]
    public $password;
    #[Rule('nullable|sometimes|image|max:1024')]
    public $image;
    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.clicker',[
            'users' => $users,
        ]);
    }
    public function createUser(){

        $validate = $this->validate();
        if($this->image){
            $validate['image'] = $this->image->store('uploads','public');
        }
        User::create([
            $validate,
        ]);
        $this->reset(['name','email','password']);
        session()->flash('success','User has been created');
    }
}
