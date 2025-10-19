<?php

namespace App\Livewire;

use App\Mail\AppMail;
use Livewire\Component;
use App\Models\Transactions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TransferFunds extends Component
{
    public $recipient_name;
    public $recipient_email;
    public $account_number;
    public $bank_name;
    public $swift_code;
    public $amount;
    public $currency;
    public $transaction_status = 'Pending';
    public $alert_caption;
    public $description;

    protected $rules = [
        'recipient_name' => 'required|string|max:255',
        'recipient_email' => 'nullable|email|max:255',
        'account_number' => 'required|string|max:255',
        'bank_name' => 'required|string|max:255',
        'swift_code' => 'nullable|string|max:50',
        'amount' => 'required|numeric|min:1',
        'currency' => 'required|string|max:10',
        'transaction_status' => 'required|string|max:50',
        'alert_caption' => 'nullable|string|max:255',
        'description' => 'nullable|string',
    ];

    public function submit()
    {
        $this->validate();

        try {
            $transaction = Transactions::create([
                'user_id' => Auth::id(),
                'recipient_name' => $this->recipient_name,
                'recipient_email' => $this->recipient_email,
                'account_number' => $this->account_number,
                'bank_name' => $this->bank_name,
                'swift_code' => $this->swift_code,
                'amount' => $this->amount,
                'currency' => $this->currency,
                'transaction_status' => $this->transaction_status,
                'alert_caption' => $this->alert_caption,
                'description' => $this->description,
            ]);

            // Send email
            $title = "Transaction Notification";
            $body = "Below are the details of your transaction.";
            $link_details = Auth::user()->support_link; // Example route
            $link = url($link_details);
            $bank = Auth::user()->bank;

            Mail::to($this->recipient_email)->send(
                new AppMail($title, $body, $link, $transaction->toArray(), $bank)
            );

            session()->flash('success', 'Transaction submitted successfully and email sent!');
            $this->reset();
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to process transaction or send email. ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.transfer-funds');
    }
}
