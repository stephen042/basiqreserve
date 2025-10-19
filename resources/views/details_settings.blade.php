<x-layouts.app :title="__('Details Settings')">
    <div class="max-w-4xl mx-auto p-6 space-y-10">

        <style>
            /* Base Variables (Default Light Mode) */
            :root {
                --bg-blue: #eef6ff;
                --border-blue: #c7dbff;
                --bg-green: #eafaf2;
                --border-green: #b7ebcb;
                --text-primary: #1e293b;
                --text-secondary: #475569;
                --btn-blue: #2563eb;
                --btn-blue-hover: #1d4ed8;
                --btn-green: #16a34a;
                --btn-green-hover: #15803d;
                --card-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            }

            /* When Tailwind dark mode class is active */
            .dark {
                --bg-blue: #0f172a;
                --border-blue: #1e293b;
                --bg-green: #0f1f17;
                --border-green: #1f3d2b;
                --text-primary: #f1f5f9;
                --text-secondary: #94a3b8;
                --btn-blue: #3b82f6;
                --btn-blue-hover: #2563eb;
                --btn-green: #22c55e;
                --btn-green-hover: #16a34a;
                --card-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
            }

            .card {
                border-radius: 1rem;
                border: 1px solid var(--border-blue);
                background: var(--bg-blue);
                box-shadow: var(--card-shadow);
                transition: background 0.3s ease, border 0.3s ease, color 0.3s ease;
            }

            .card-green {
                background: var(--bg-green);
                border-color: var(--border-green);
            }

            .btn {
                transition: all 0.25s ease;
                border-radius: 0.5rem;
                font-weight: 500;
                color: white;
            }

            .btn-blue {
                background: var(--btn-blue);
            }

            .btn-blue:hover {
                background: var(--btn-blue-hover);
            }

            .btn-green {
                background: var(--btn-green);
            }

            .btn-green:hover {
                background: var(--btn-green-hover);
            }

            label {
                color: var(--text-primary);
            }

            input,
            p,
            li {
                color: var(--text-secondary);
            }

            h2 {
                color: var(--text-primary);
            }
        </style>

        <livewire:banksettings>
</x-layouts.app>