<div>
    <!-- Bank Name -->
    <div class="card p-6 my-6">
        <div class="flex items-center mb-4 space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600 dark:text-blue-400 mr-2" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
            <h2 class="text-lg font-semibold">Custom Bank Name</h2>
        </div>

        <input type="text" placeholder="e.g., MyBank International, GlobalTrust Bank" wire:model.defer="bank"
            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-blue-500" style="color: rgb(123, 120, 120)" />

        @error('bank') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror

        <p class="text-sm mt-2">
            This name will appear on receipts and email notifications instead of
            <span class="font-semibold text-[var(--text-primary)]">“{{ config('app.name') }}”</span>.
        </p>

        <button wire:click.prevent="saveBank" class="btn btn-blue mt-4 flex justify-center items-center p-2">
            Save Bank Name
        </button>
    </div>

    <!-- Support Link -->
    <div class="card card-green p-6">
        <div class="flex items-center mb-4 space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600 dark:text-green-400 mr-2" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                    d="M7 8h10M7 12h4m1 8l-5-5H6a2 2 0 01-2-2V7a2 2 0 012-2h12a2 2 0 012 2v6a2 2 0 01-2 2h-3l-5 5z" />
            </svg>
            <h2 class="text-lg font-semibold">Support Contact</h2>
        </div>

        <input type="text" placeholder="https://wa.me/123456789 or mailto:support@bank.com"
            wire:model.defer="support_link"
            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-700 rounded-lg bg-white dark:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-green-500" />
        @error('support_link') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror

        <p class="text-sm mt-2">
            Recipients will see a <strong>“Contact Support”</strong> button in email receipts linking to this contact.
        </p>
        <div class="mt-4 text-sm space-y-1">
            <p class="font-semibold text-[var(--text-primary)]">Examples:</p>
            <ul class="list-disc list-inside space-y-1">
                <li>WhatsApp: https://wa.me/1234567890</li>
                <li>Telegram: https://t.me/yourusername</li>
                <li>Email: mailto:support@yourbank.com</li>
                <li>Phone: tel:+1234567890</li>
            </ul>
        </div>

        <button wire:click.prevent="saveSupportLink" class="btn btn-green mt-4 flex justify-center items-center p-2">
            Save Support Contact
        </button>
    </div>


</div>