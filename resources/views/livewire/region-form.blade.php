<tr class="border-b">
    <form wire:submit="updateProduct">
        <td class="text-sm ps-3 py-3">
            <p class="text-sm">{{ $product->name }}</p>
        </td>
        <td class="text-sm ps-3 py-3">
            <p class="text-xs">{{ $type }}</p>
        </td>
        <td class="px-3">
            <x-filament::input.wrapper>
                <x-filament::input
                    type="number"
                    wire:model="budget"
                    class="text-xs"
                    required
                />
            </x-filament::input.wrapper>
        </td>
        <td class="px-3">
            <x-filament::input.wrapper>
                <x-filament::input
                    type="number"
                    wire:model="placement"
                    class="text-xs"
                    required
                />
            </x-filament::input.wrapper>
        </td>
        <td class="text-center py-3 pe-3">
            <x-filament::button type="submit" size="xs">
                <span wire:loading.remove wire.target="updateProduct">Save</span>
                <span wire:loading wire.target="updateProduct">Saving..</span>
            </x-filament::button>
        </td>
    </form>
</tr>