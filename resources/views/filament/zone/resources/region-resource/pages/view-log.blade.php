<x-filament-panels::page>
    <div>
        <x-filament::button href="/zone/regions/{{ $region->id }}" tag="a" class="mb-2">
            Back
        </x-filament::button>
    </div>
    <div>
        <h2 class="text-xl">Placements</h2>
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-start">Amount</th>
                    <th class="text-start">Added/Updated</th>
                </tr>
            </thead>
            @forelse ($placement_log as $log)
                <tr class="border-b">
                    <td class="text-sm">
                        {{ $log['amount'] }} kg
                    </td>
                    <td class="text-sm">
                        @if(isset($log['updated']))
                            {{ \Carbon\Carbon::parse($log['updated'])->diffForHumans() }} (Updated)
                        @else
                            {{ \Carbon\Carbon::parse($log['added'])->diffForHumans() }}
                        @endif
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="2">No logs found</td>
            </tr>
            @endforelse
        </table> 
        {{-- @if($updateable_placement_key)
            <form class="mt-3" wire:submit="updatePlacementLog">
                <div class="flex">
                    <x-filament::input.wrapper class="mb-2">
                        <x-filament::input
                            type="number"
                            wire:model="updateable_placement_amount"
                            class="text-xs"
                            required
                        />
                    </x-filament::input.wrapper>
                    <div class="ps-2">
                        <x-filament::button type="submit" size="xs">
                            <span wire:loading.remove wire.target="updatePlacementLog">Update</span>
                            <span wire:loading wire.target="updatePlacementLog">Updating..</span>
                        </x-filament::button>
                    </div>
                </div>
            </form>
        @endif --}}
    </div>
    <div>
        <h2 class="text-xl">Pog</h2>
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-start">Amount</th>
                    <th class="text-start">Added/Updated</th>
                </tr>
            </thead>
            @forelse ($pog_log as $log)
                <tr class="border-b">
                    <td class="text-sm">
                        {{ $log['amount'] }} kg
                    </td>
                    <td class="text-sm">
                        @if(isset($log['updated']))
                            {{ \Carbon\Carbon::parse($log['updated'])->diffForHumans() }} (Updated)
                        @else
                            {{ \Carbon\Carbon::parse($log['added'])->diffForHumans() }}
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">No logs found</td>
                </tr>
            @endforelse
        </table>
        {{-- @if($updateable_pog_key)
            <form class="mt-3" wire:submit="updatePogLog">
                <div class="flex">
                    <x-filament::input.wrapper class="mb-2">
                        <x-filament::input
                            type="number"
                            wire:model="updateable_pog_amount"
                            class="text-xs"
                            required
                        />
                    </x-filament::input.wrapper>
                    <div class="ps-2">
                        <x-filament::button type="submit" size="xs">
                            <span wire:loading.remove wire.target="updatePogLog">Update</span>
                            <span wire:loading wire.target="updatePogLog">Updating..</span>
                        </x-filament::button>
                    </div>
                </div>
            </form>
        @endif --}}
    </div>
</x-filament-panels::page>
