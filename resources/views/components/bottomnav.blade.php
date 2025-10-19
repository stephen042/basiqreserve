<!-- Bottom Navigation Bar -->
<nav style="position: fixed; bottom: 0; left: 0; width: 100%; z-index: 50; background-color: #f3f3f3; box-shadow: 0 -2px 10px rgba(0,0,0,0.15);" class="mobile-nav">
    <div style="padding: 12px 24px;">
        <div style="display: flex; justify-content: space-between; align-items: center; max-width: 480px; margin: 0 auto;">

            <!-- Transfer -->
            <a href="/send-funds" style="display: flex; flex-direction: column; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 16px; text-decoration: none; transition: transform 0.2s;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" style="width: 24px; height: 24px; color: #374151;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>
                <span style="font-size: 11px; font-weight: 600; color: #374151;">Transfer</span>
            </a>

            <!-- Add Funds -->
            <a href="/add-funds" style="display: flex; flex-direction: column; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 16px; text-decoration: none; transition: transform 0.2s;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" style="width: 24px; height: 24px; color: #374151;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span style="font-size: 11px; font-weight: 600; color: #374151;">Add</span>
            </a>

            <!-- Transactions -->
            <a href="/history" style="display: flex; flex-direction: column; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 16px; text-decoration: none; transition: transform 0.2s;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" style="width: 24px; height: 24px; color: #374151;">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                </svg>
                <span style="font-size: 11px; font-weight: 600; color: #374151;">Transactions</span>
            </a>

            <!-- Settings -->
            <a href="/settings" style="display: flex; flex-direction: column; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 16px; text-decoration: none; transition: transform 0.2s;">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px; color: #374151;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.591 1.066c1.49-.862 3.146.794 2.284 2.284a1.724 1.724 0 001.066 2.591c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.591c.862 1.49-.794 3.146-2.284 2.284a1.724 1.724 0 00-2.591 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.591-1.066c-1.49.862-3.146-.794-2.284-2.284a1.724 1.724 0 00-1.066-2.591c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.591c-.862-1.49.794-3.146 2.284-2.284a1.724 1.724 0 002.591-1.066z"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
                <span style="font-size: 11px; font-weight: 600; color: #374151;">Settings</span>
            </a>

        </div>
    </div>
</nav>

<style>
    /* Only show on screens smaller than 768px */
    @media (max-width: 767px) {
        .mobile-nav {
            display: block;
        }
    }
    @media (min-width: 768px) {
        .mobile-nav {
            display: none;
        }
    }
    nav a:hover {
        transform: scale(0.95);
    }
</style>
