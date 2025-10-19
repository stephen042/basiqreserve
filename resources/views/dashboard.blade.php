<x-layouts.app :title="__('Dashboard')">
    <div class="container mx-auto p-2">
        <div class="w-full mt-1 rounded-3xl border border-gray-200 dark:border-gray-800 p-6 transition duration-300 
            hover:-translate-y-1 hover:shadow-xl dark:hover:shadow-blue-500/10
            bg-[linear-gradient(135deg,#ffffff_0%,#f9fafb_100%)] 
            dark:bg-[linear-gradient(145deg,#0b0b0b_0%,#171717_100%)]
            shadow-[0_4px_20px_rgba(0,0,0,0.05)] 
            dark:shadow-[0_4px_20px_rgba(0,0,0,0.6)]" style="border-radius:20px; margin-bottom: 20px;">

            <!-- Title -->
            <h2 class="text-lg font-medium text-gray-600 dark:text-gray-400 tracking-wide uppercase mb-2">
                Balance
            </h2>

            <!-- Amount with toggle -->
            <div class="flex items-center gap-2">
                <p id="balance"
                    class="text-5xl font-extrabold text-gray-900 dark:text-gray-100 flex items-center gap-2">
                    <span style="font-size: 20px;font-weight: 600;">$</span>
                    <span style="font-size: 20px;font-weight: 600">
                        {{ number_format(auth()->user()->balance, 2) }}
                    </span>
                </p>
                <!-- Toggle button -->
                <button id="toggleBalance"
                    class="text-gray-400 dark:text-gray-300 hover:text-gray-600 dark:hover:text-gray-100 transition">
                    <!-- Heroicon Eye -->
                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </button>
            </div>

            <!-- Account Number -->
            <div class="mt-5 flex items-center justify-between text-sm">
                <span class="text-gray-500 dark:text-gray-400 font-medium">Account Number -</span>
                <span class="font-semibold text-blue-600 dark:text-blue-400 tracking-wide" style="font-size: 18px">
                    {{ auth()->user()->account_number }}
                </span>
            </div>

            <!-- Gradient Accent -->
            <div class="mt-6 h-1.5 w-full rounded-full"
                style="background: linear-gradient(to right, #3b82f6, #8b5cf6, #ec4899); opacity: 0.9;"></div>
        </div>
        <hr style="border: 2px solid #aec7ef; border-radius: 5px;">
        <h3 class="text-1xl font-semibold text-gray-900 dark:text-gray-100 mt-6">Quick Actions</h3>
        <div style="display:flex; flex-wrap:wrap; gap:20px; margin-top:20px;">
            <!-- Transfer Card -->
            <a href="/transfers" style="
                flex: 1 1 calc(50% - 20px);
                max-width: calc(33.333% - 20px);
                padding:20px;
                border-radius:20px;
                border:1px solid #e5e7eb;
                background: linear-gradient(135deg,#e0f2fe 0%,#bae6fd 100%);
                box-shadow:0 4px 20px rgba(0,0,0,0.05);
                transition: all 0.3s ease;
                text-decoration:none;
                color:#111;
                font-size:18px;
                "
                onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.15)';"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.05)';">
                <div style="display:flex; align-items:center; gap:10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width:32px;height:32px; color:#2563eb;" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                    </svg>
                    <span style="font-weight:600;">Transfer</span>
                </div>
            </a>

            <!-- Add Funds Card -->
            <a href="/add_funds" style="
                flex: 1 1 calc(50% - 20px);
                max-width: calc(33.333% - 20px);
                padding:20px;
                border-radius:20px;
                border:1px solid #e5e7eb;
                background: linear-gradient(135deg,#dcfce7 0%,#bbf7d0 100%);
                box-shadow:0 4px 20px rgba(0,0,0,0.05);
                transition: all 0.3s ease;
                text-decoration:none;
                color:#111;
                font-size:18px;
                "
                onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.15)';"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.05)';">
                <div style="display:flex; align-items:center; gap:10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width:32px;height:32px; color:#16a34a;" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span style="font-weight:600;">Add Funds</span>
                </div>
            </a>

            <!-- Transactions Card -->
            <a href="/history" style="
                flex: 1 1 calc(50% - 20px);
                max-width: calc(33.333% - 20px);
                padding:20px;
                border-radius:20px;
                border:1px solid #e5e7eb;
                background: linear-gradient(135deg,#f5d0fe 0%,#f0abfc 100%);
                box-shadow:0 4px 20px rgba(0,0,0,0.05);
                transition: all 0.3s ease;
                text-decoration:none;
                color:#111;
                font-size:18px;
                "
                onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.15)';"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.05)';">
                <div style="display:flex; align-items:center; gap:10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width:32px;height:32px; color:#9333ea;" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                    </svg>
                    <span style="font-weight:600;">Transactions</span>
                </div>
            </a>

            <!-- Settings Card -->
            <a href="/details_settings" style="
                flex: 1 1 calc(50% - 20px);
                max-width: calc(33.333% - 20px);
                padding:20px;
                border-radius:20px;
                border:1px solid #e5e7eb;
                background: linear-gradient(135deg,#fee2e2 0%,#fecaca 100%);
                box-shadow:0 4px 20px rgba(0,0,0,0.05);
                transition: all 0.3s ease;
                text-decoration:none;
                color:#111;
                font-size:18px;
                "
                onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.15)';"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.05)';">
                <div style="display:flex; align-items:center; gap:10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width:32px;height:32px; color:#db2777;"
                        class="w-6 h-6 text-gray-700 dark:text-gray-300 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-all duration-300 group-hover:rotate-90 group-hover:scale-110"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.591 1.066c1.49-.862 3.146.794 2.284 2.284a1.724 1.724 0 001.066 2.591c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.591c.862 1.49-.794 3.146-2.284 2.284a1.724 1.724 0 00-2.591 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.591-1.066c-1.49.862-3.146-.794-2.284-2.284a1.724 1.724 0 00-1.066-2.591c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.591c-.862-1.49.794-3.146 2.284-2.284a1.724 1.724 0 002.591-1.066z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                    <span style="font-weight:600;">Settings</span>
                </div>
            </a>
        </div>

        <h3 class="text-1xl font-semibold text-gray-900 dark:text-gray-100 mt-6">Recent Transactions</h3>
        <livewire:transaction-list />

    </div>

    <style>
        /* Medium screens */
        @media (max-width: 1024px) {
            a[style*="flex: 1 1 calc(50% - 20px)"] {
                max-width: calc(50% - 20px);
                padding: 15px;
                font-size: 16px;
            }

            a[style*="flex: 1 1 calc(50% - 20px)"] svg {
                width: 28px !important;
                height: 28px !important;
            }
        }

        /* Small screens - phones */
        @media (max-width: 640px) {
            a[style*="flex: 1 1 calc(50% - 20px)"] {
                flex: 1 1 100% !important;
                /* full width */
                max-width: 100% !important;
                padding: 12px;
                font-size: 14px;
            }

            a[style*="flex: 1 1 calc(50% - 20px)"] svg {
                width: 24px !important;
                height: 24px !important;
            }
        }
    </style>

    {{-- Script --}}
    <script>
        const toggleBtn = document.getElementById('toggleBalance');
            const balanceText = document.getElementById('balance');
            const eyeIcon = document.getElementById('eyeIcon');

            let hidden = false;

            toggleBtn.addEventListener('click', () => {
                if(!hidden) {
                    // Hide balance
                    balanceText.querySelectorAll('span')[1].textContent = '************';
                    eyeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.05 10.05 0 012.238-3.386M6.223 6.614A9.969 9.969 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.97 9.97 0 01-4.438 5.237M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    `;
                    hidden = true;
                } else {
                    // Show balance
                    balanceText.querySelectorAll('span')[1].textContent = '300,000';
                    eyeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    `;
                    hidden = false;
                }
            });
    </script>
</x-layouts.app>