<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        <!-- Main content wrapper -->
        <div style="padding-bottom: 6rem;">
            {{ $slot }}
            <x-alert />
        </div>
        {{-- bottom navigation --}}
        <x-bottomnav />
    </flux:main>
</x-layouts.app.sidebar>