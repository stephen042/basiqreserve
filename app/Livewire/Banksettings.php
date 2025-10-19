<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Banksettings extends Component
{
   public $bank;
    public $support_link;

    public function mount()
    {
        $user = Auth::user();

        // Load existing values from DB
        $this->bank = $user->bank ?? '';
        $this->support_link = $user->support_link ?? '';
    }

    protected $rules = [
        'bank' => 'required|string|max:255',
        'support_link' => 'required|string|max:255',
    ];

    public function saveBank()
    {
        $this->validateOnly('bank');

        $user_id = Auth::user()->id;
        User::where('id', $user_id)->update(['bank' => $this->bank]);

        $this->dispatch('notify', 'Bank name saved successfully!', 'success');
    }

    public function saveSupportLink()
    {
        $this->validateOnly('support_link');

        $user_id = Auth::user()->id;
        User::where('id', $user_id)->update(['support_link' => $this->support_link]);

        $this->dispatch('notify', 'Support link saved successfully!', 'success');
    }

    public function render()
    {
        return view('livewire.banksettings');
    }

}
