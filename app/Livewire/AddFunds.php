<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddFunds extends Component
{
    public $balance = 0;
    public float $amount = 0;

    protected $rules = [
        'amount' => 'required|numeric|min:1',
    ];

    public function mount()
    {
        $this->balance = Auth::user()->balance;
    }

    public function addFunds()
    {
        $this->validate();

        $user = Auth::user();

        try {
            // Increment user's balance
            User::where('id', $user->id)->increment('balance', $this->amount);

            // Refresh user balance immediately
            $this->balance = User::find($user->id)->balance;

            // Reset amount input
            $this->amount = 0;

            // Dispatch success notification
            $this->dispatch('notify', 'Funds added successfully!', 'success');
        } catch (\Exception $e) {
            // Dispatch error notification
            $this->dispatch('notify', 'Failed to add funds. Please try again.', 'error');
        }
    }

    public function render()
    {
        return view('livewire.add-funds');
    }
}
