<x-filament-panels::page>
    <div>
        <table class="w-full ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
            <thead class="bg-gray-50 dark:bg-white/5">
                <tr class="border-b">
                    <th class="text-left text-sm py-4 ps-3" style="width: 250px">Name</th>
                    <th class="text-center text-sm w-32">Placement</th>
                    <th class="text-center text-sm w-20">pog</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    {{-- @livewire('product-form', ['product' => $product]) --}}
                    <tr class="border-b">
                        <td class="px-3 py-2">
                            <p class="text-sm">{{ $product->name }}</p>
                            <p class="text-xs">{{ $product->pivot->type }}</p>
                            <p class="text-xs">{{ $product->pivot->budget }}</p>
                        </td>
                        <td class="px-3 py-2">{{ $product->pivot->placement }}</td>
                        <td class="px-3 py-2">{{ $product->pivot->pog }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-filament-panels::page>
