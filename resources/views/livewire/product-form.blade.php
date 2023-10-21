<tr class="border-b">
    <form wire:submit="updateProduct">
        <td class="text-sm ps-3 py-3">
            <div>
                <p class="text-2xl">
                    {{ $product->name }} 
                    <x-filament::badge color="success">
                        {{ $type }}
                    </x-filament::badge>
                    </p>
                <div style="width: 120px">
                    ({{ $budget }} kg)
                </div>
            </div>
            <div class="flex items-end pt-2">
                <div class="pe-2">
                    <p class="pb-1">Placement</p>
                    <p class="pb-1">{{ $placement }} Kg</p>
                    <x-filament::input.wrapper class="mt-1">
                        <x-filament::input
                            type="number"
                            wire:model="placement"
                            class=""
                            min="1"
                            required
                        />
                    </x-filament::input.wrapper>
                </div>
                <div class="pe-2">
                    <p class="pb-1">POG</p>
                    <p class="pb-1">{{ $pog }} Kg</p>
                    <x-filament::input.wrapper class="mt-1">
                        <x-filament::input
                            type="number"
                            wire:model="todays_pog"
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
