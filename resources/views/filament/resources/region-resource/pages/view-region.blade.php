<x-filament-panels::page>
    <div>
        <x-filament::button href="/admin/regions" tag="a" class="mb-2">
            Back
        </x-filament::button>
        <table class="w-full ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
            <thead class="bg-gray-50 dark:bg-white/5">
                <tr class="border-b">
                    <th class="text-left text-sm py-4 ps-3">Name</th>
                    <th class="text-left text-sm py-4 ps-3">Type</th>
                    <th class="text-center text-sm">Budget</th>
                    <th class="text-center text-sm" style="width: 75px"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    @livewire('region-form', ['region' => $region, 'product' => $product])
                @endforeach
            </tbody>
        </table>
    </div>
</x-filament-panels::page>
