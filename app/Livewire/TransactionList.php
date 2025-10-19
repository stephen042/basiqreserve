<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transactions as Transaction;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class TransactionList extends Component
{
    use WithPagination;

    public $perPage = 5;

    // Optional: styling pagination with Tailwind
    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $userId = Auth::id(); // get logged-in user ID

        // Get transactions for logged-in user, latest first
        $transactions = Transaction::where('user_id', $userId)
                            ->orderBy('created_at', 'desc')
                            ->paginate($this->perPage);

        return view('livewire.transaction-list', [
            'transactions' => $transactions
        ]);
    }
}
