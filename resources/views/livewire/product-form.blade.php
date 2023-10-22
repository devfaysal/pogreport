<div class="mt-3 w-full px-3 py-2 pb-4 ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
    <form wire:submit="updateProduct">
        <div class="flex items-center">
            <p class="text-2xl pe-2">{{ $product->name }} </p>
        </div>
        <div class="flex pt-2">
            <div class="px-1.5 py-2 border rounded-xl me-1">
                <p class="font-bold text-sm">Budget <span class="text-xs font-normal">(kg)</span></p>
                <div class="flex items-center">
                   <p class="text-sm">{{ $budget }}</p>
                    <x-filament::modal>
                        <x-slot name="trigger">
                            <x-filament::icon-button icon="heroicon-m-circle-stack" size="xs"/>
                        </x-slot>
                        <ul>
                            @forelse ($budget_log as $log)
                                <li>
                                    Updated to {{ $log['amount'] }}kg {{ \Carbon\Carbon::parse($log['added'])->diffForHumans() }}
                                </li>
                            @empty
                                <li>No logs found</li>
                            @endforelse
                        </ul>
                    </x-filament::modal>
                </div>
            </div>
            <div class="px-1.5 py-2 border rounded-xl me-1">
                <p class="font-bold text-sm">Placement <span class="text-xs font-normal">(kg)</span></p>
                <div class="flex items-center">
                    <p class="text-sm">{{ $placement }}</p>
                    <x-filament::modal>
                        <x-slot name="trigger">
                            <x-filament::icon-button icon="heroicon-m-circle-stack" size="xs"/>
                        </x-slot>
                        <ul>
                            @forelse ($placement_log as $log)
                                <li>
                                    {{ $log['amount'] }}kg added {{ \Carbon\Carbon::parse($log['added'])->diffForHumans() }}
                                </li>
                            @empty
                                <li>No logs found</li>
                            @endforelse
                        </ul>
                    </x-filament::modal>
                </div>
            </div>
            <div class="px-1.5 py-2 border rounded-xl">
                <p class="font-bold text-sm">POG <span class="text-xs font-normal">(kg)</span></p>
                <div class="flex items-center">
                   <p class="text-sm">{{ $pog }}</p>
                    <x-filament::modal>
                        <x-slot name="trigger">
                            <x-filament::icon-button icon="heroicon-m-circle-stack" size="xs"/>
                        </x-slot>
                        <ul>
                            @forelse ($pog_log as $log)
                                <li>
                                    {{ $log['amount'] }}kg added {{ \Carbon\Carbon::parse($log['added'])->diffForHumans() }}
                                </li>
                            @empty
                                <li>No logs found</li>
                            @endforelse
                        </ul>
                    </x-filament::modal>
                </div>
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