<tr class="border-b">
    <form wire:submit="updateProduct">
        <td class="text-sm ps-3 py-3">
            <p class="text-2xl">{{ $product->name }} </p>
            <div class="flex pt-4">
                <div class="px-4 py-2 border rounded-xl me-1">
                    <p class="font-bold">Budget</p>
                    <p>{{ $budget }} kg</p>
                </div>
                <div class="px-4 py-2 border rounded-xl me-1">
                    <p class="font-bold">Placement</p>
                    <p>{{ $placement }} kg</p>
                </div>
                <div class="px-4 py-2 border rounded-xl">
                    <p class="font-bold">POG</p>
                    <p>{{ $pog }} kg</p>
                </div>
            </div>
            <div class="flex items-end pt-4">
                <div class="pe-2">
                    <p class="pb-1">Placement</p>
                    <x-filament::input.wrapper class="mt-1">
                        <x-filament::input
                            type="number"
                            wire:model="add_placement"
                            class=""
                            min="1"
                        />
                    </x-filament::input.wrapper>
                </div>
                <div class="pe-2">
                    <p class="pb-1">POG</p>
                    <x-filament::input.wrapper class="mt-1">
                        <x-filament::input
                            type="number"
                            wire:model="add_pog"
                            class=""
                            min="1"
                            required
                        />
                    </x-filament::input.wrapper>
                </div>
                <div class="pe-2">
                    <x-filament::button type="submit" size="md">
                        <span wire:loading.remove wire.target="updateProduct">Save</span>
                        <span wire:loading wire.target="updateProduct">Saving..</span>
                    </x-filament::button>
                </div>
            </div>
            <p class="text-xs mt-2">Updated: {{ $updated_at }}</p>
        </td>
    </form>
</tr>
