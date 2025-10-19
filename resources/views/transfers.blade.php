<x-layouts.app :title="__('Transfers')">
    <div class="p-6 bg-gray-300 dark:bg-gray-900 rounded-2xl shadow-sm border border-gray-500 dark:border-gray-700 w-full max-w-4xl mx-auto"
        style="border-radius: 20px;border: 1px solid #6b7280;">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="flex items-center gap-2 text-gray-800 dark:text-gray-100 text-lg font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25M22.5 12H1.5" />
                </svg>
                Transfer Money
            </h2>
        </div>
        
        <!-- Sender Details -->
        <div class="mb-6 p-4 border border-green-200 dark:border-green-800 rounded-xl bg-green-50 dark:bg-green-900/20">
            <h3 class="text-green-700 dark:text-green-400 font-semibold mb-4 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M12 11c2.21 0 4-1.79 4-4S14.21 3 12 3 8 4.79 8 7s1.79 4 4 4zm0 2c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4z" />
                </svg>
                Sender Details
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm text-gray-600 dark:text-gray-300">Your Name</label>
                    <input type="text" value="{{ auth()->user()->name }}"
                        class="mt-1 w-full border border-gray-300 dark:border-gray-700 rounded-lg px-3 py-2 text-sm bg-white dark:bg-gray-800"
                        readonly>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 dark:text-gray-300">Your Email</label>
                    <input type="email" value="{{ auth()->user()->email }}"
                        class="mt-1 w-full border border-gray-300 dark:border-gray-700 rounded-lg px-3 py-2 text-sm bg-white dark:bg-gray-800"
                        readonly>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm text-gray-600 dark:text-gray-300">Your Account Number</label>
                <input type="text" value="{{ auth()->user()->account_number }}"
                    class="mt-1 w-full border border-gray-300 dark:border-gray-700 rounded-lg px-3 py-2 text-sm bg-white dark:bg-gray-800"
                    readonly>
            </div>
        </div>

        <livewire:transfer-funds />

        <!-- Balance Info -->
        <div class="text-sm bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-400 rounded-lg px-4 py-3 mt-4">
            <p style="font-size: 16px"><strong>Available Balance:</strong> $ 5,000,000,000</p>
        </div>

        <!-- Submit Button -->
        <button disabled
            class="w-full bg-gray-300 dark:bg-gray-700 text-gray-600 dark:text-gray-400 py-2 rounded-lg font-medium cursor-not-allowed">
            {{-- for over all error --}}
        </button>
    </div>

</x-layouts.app>