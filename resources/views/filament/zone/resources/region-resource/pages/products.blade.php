<x-filament-panels::page>
    <x-filament::tabs label="Content tabs">
        <x-filament::tabs.item href="?type=Hybrid Rice" tag="a" :active="$type === 'Hybrid Rice'">
            Hybrid Rice
        </x-filament::tabs.item>
        <x-filament::tabs.item href="?type=Inbred Rice" tag="a" :active="$type === 'Inbred Rice'">
            Inbred Rice
        </x-filament::tabs.item>
        <x-filament::tabs.item href="?type=Hybrid Maize" tag="a" :active="$type === 'Hybrid Maize'">
            Maize
        </x-filament::tabs.item>
    </x-filament::tabs>
    <div>
        <x-filament::button href="/zone" tag="a" class="mb-2">
            Back
        </x-filament::button>
        <div>
            @forelse ($products as $product)
                @livewire('product-form', ['region' => $region, 'product' => $product])
            @empty
                <div class="mt-3 w-full px-3 py-2 ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
                    No Products Found
                </div>
            @endforelse
        </div>
    </div>
</x-filament-panels::page>
