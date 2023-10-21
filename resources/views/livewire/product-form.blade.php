<div class="mt-3 w-full px-3 py-2 ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
    <form wire:submit="updateProduct">
        <p class="text-2xl">{{ $product->name }} </p>
        <p class="text-xs mt-1">Updated {{ $updated_at }}</p>
        <div class="flex pt-2">
            <div class="px-2 py-2 border rounded-xl me-1">
                <p class="font-bold">Budget <span class="text-xs font-normal">(kg)</span></p>
                <p class="text-sm">{{ $budget }}</p>
            </div>
            <div class="px-2 py-2 border rounded-xl me-1">
                <p class="font-bold">Placement <span class="text-xs font-normal">(kg)</span></p>
                <p class="text-sm">{{ $placement }}</p>
            </div>
            <div class="px-2 py-2 border rounded-xl">
                <p class="font-bold">POG <span class="text-xs font-normal">(kg)</span></p>
                <p class="text-sm">{{ $pog }}</p>
            </div>
        </div>
        <div class="flex items-end pt-2">
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
    </form>
</div>