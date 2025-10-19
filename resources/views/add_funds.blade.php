<x-layouts.app :title="__('Add Funds')">
    <div class="p-6 bg-gray-300 dark:bg-gray-900 rounded-2xl shadow-sm border border-gray-500 dark:border-gray-700 w-full max-w-4xl mx-auto"
        style="border-radius: 20px;border: 1px solid #6b7280;">

        <!-- Header -->
        <div class="flex items-center gap-2 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Add Funds</h2>
        </div>
        <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm">
            Add funds to your account balance for transfers and transactions.
        </p>


        <livewire:add-funds />
    </div>
</x-layouts.app>