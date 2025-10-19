<div>
    <!-- Current Balance -->
    <div class="p-4 rounded-xl mb-6 border border-green-300"
        style="background: linear-gradient(135deg, #d1fae5 0%, #86efac 100%);color: #065f46;">
        <h3 class=" text-sm font-medium">Current Balance</h3>
        <p class="text-2xl font-bold  mt-1">$ {{ number_format(auth()->user()->balance, 2)}}</p>
    </div>

    <form wire:submit.prevent="addFunds">
        @csrf
        <div class="mb-4">
            <label class="block text-sm text-gray-600 dark:text-gray-300 mb-1">Amount to Add</label>
            <div
                class="flex items-center border border-gray-300 dark:border-gray-700 rounded-lg px-3 py-2 bg-white dark:bg-gray-800">
                <span class="text-gray-500 dark:text-gray-400 mr-2">$</span>
                <input type="number" wire:model.defer="amount" placeholder="0.00"
                    class="w-full bg-transparent focus:outline-none text-gray-800 dark:text-gray-100"
                    style="margin: 6px">
            </div>
            @error('amount') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full py-3 rounded-lg font-medium text-white mt-3 transition-all duration-300"
            style="background: linear-gradient(135deg, #86efac 0%, #4ade80 100%); border: 1px solid #22c55e;"
            onmouseover="this.style.background='linear-gradient(135deg, #4ade80 0%, #22c55e 100%)'"
            onmouseout="this.style.background='linear-gradient(135deg, #86efac 0%, #4ade80 100%)'">
            + Add Funds to Account
        </button>
    </form>

</div>