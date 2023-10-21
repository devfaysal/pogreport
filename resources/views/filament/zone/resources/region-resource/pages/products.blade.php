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
            @foreach ($products as $product)
                @if($product->pivot->budget > 0)
                    @livewire('product-form', ['region' => $region, 'product' => $product])
                @endif
            @endforeach
        </div>
    </div>
</x-filament-panels::page>
