<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public function mount($user)
    {
        $findedUser = User::find($user);
        $this->userId = $findedUser->id;
        $this->name = $findedUser->name;
        $this->email = $findedUser->email;
    }

    public function update()
    {
        User::find($this->userId)->fill([
            'name' => $this->name,
            'email' => $this->email
        ])->save();

        return redirect()->to('/user');
    }

    public function render()
    {
        return view('livewire.edit-user');
    }
}
