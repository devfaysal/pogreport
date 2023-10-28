<x-filament-panels::page>
    <table class="mb-4 w-full ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
        <thead>
            <x-table.tr>
                <x-table.th style="width: 25%">Zone/Region Name</x-table.th>
                <x-table.th style="width: 25%">Budget (kg)</x-table.th>
                <x-table.th style="width: 25%">Placement (kg)</x-table.th>
                <x-table.th style="width: 25%">POG (kg)</x-table.th>
            </x-table.tr>
        </thead>
        <tbody>
            @php
                $budgetSum = 0;
                $placementSum = 0;
                $pogSum = 0;
            @endphp
            @foreach ($zones as $zone)
                @php
                    $budgetSum += $zone->hybridMaize()['budget'];
                    $placementSum += $zone->hybridMaize()['placement'];
                    $pogSum += $zone->hybridMaize()['pog'];
                @endphp
                @foreach ($zone->regions as $region)
                    <x-table.tr>
                        <x-table.td>{{ $region->name }}</x-table.td>
                        <x-table.td>{{ $region->hybridMaize->sum('pivot.budget') }}</x-table.td>
                        <x-table.td>{{ $region->hybridMaize->sum('pivot.placement') }}</x-table.td>
                        <x-table.td>{{ $region->hybridMaize->sum('pivot.pog') }}</x-table.td>
                    </x-table.tr>
                @endforeach
                <x-table.tr class="bg-primary-500">
                    <x-table.td>{{ $zone->name }}</x-table.td>
                    <x-table.td>{{ $zone->hybridMaize()['budget'] }}</x-table.td>
                    <x-table.td>{{ $zone->hybridMaize()['placement'] }}</x-table.td>
                    <x-table.td>{{ $zone->hybridMaize()['pog'] }}</x-table.td>
                </x-table.tr>
            @endforeach
            <x-table.tr class="border-b-0">
                <x-table.th>Total</x-table.th>
                <x-table.th>{{ $budgetSum }}</x-table.th>
                <x-table.th>{{ $placementSum }}</x-table.th>
                <x-table.th>{{ $pogSum }}</x-table.th>
            </x-table.tr>
        </tbody>
    </table>
</x-filament-panels::page>
