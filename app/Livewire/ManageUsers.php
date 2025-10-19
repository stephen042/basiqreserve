<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public $users;
    public $selectedUser;
    public $showModal = false;

    public $name, $email, $bank, $account_number, $status;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'bank' => 'nullable|string|max:255',
        'account_number' => 'nullable|string|max:255',
        'status' => 'required|in:pending,approved,declined',
    ];

    public function mount()
    {
        $this->loadUsers();
    }

    public function loadUsers()
    {
        // $this->users = User::where('role', 1)->latest()->get();
        $this->users = User::latest()->get();
    }

    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 'approved']);
        session()->flash('success', 'User approved successfully.');
        $this->loadUsers();
    }

    public function decline($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 'declined']);
        session()->flash('error', 'User declined.');
        $this->loadUsers();
    }

    public function edit($id)
    {
        $this->selectedUser = User::findOrFail($id);
        $this->name = $this->selectedUser->name;
        $this->email = $this->selectedUser->email;
        $this->bank = $this->selectedUser->bank;
        $this->account_number = $this->selectedUser->account_number;
        $this->status = $this->selectedUser->status;
        $this->showModal = true;
    }

    public function update()
    {
        $this->validate();

        $this->selectedUser->update([
            'name' => $this->name,
            'email' => $this->email,
            'bank' => $this->bank,
            'account_number' => $this->account_number,
            'status' => $this->status,
        ]);

        $this->showModal = false;
        session()->flash('success', 'User updated successfully.');
        $this->loadUsers();
    }

    public function deleteUser()
    {
        $userId = $this->selectedUser ? $this->selectedUser->id : null;
        if (!$userId) return;

        $user = User::findOrFail($userId);
        $user->delete();

        session()->flash('success', 'User deleted successfully!');
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.manage-users');
    }
}
