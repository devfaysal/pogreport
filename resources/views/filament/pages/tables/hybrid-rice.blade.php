<div class="px-1 py-1" style="overflow-x: scroll">
    <table class="mb-4 w-full ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
        <thead>
            <x-table.tr>
                <x-table.th rowspan="2" style="white-space: nowrap;">Zone/Region Name</x-table.th>
                @foreach ($products as $product)
                    <x-table.th colspan="3">{{ $product->name }}</x-table.th>
                @endforeach
                <x-table.th colspan="3">Total</x-table.th>
            </x-table.tr>
            <x-table.tr>
                @foreach ($products as $product)
                    <x-table.td>Budget</x-table.td>
                    <x-table.td>Placement</x-table.td>
                    <x-table.td>POG</x-table.td>
                @endforeach
                <x-table.td>Budget</x-table.td>
                <x-table.td>Placement</x-table.td>
                <x-table.td>POG</x-table.td>
            </x-table.tr>
        </thead>
        <tbody>
            @php
                $budgetSum = 0;
                $placementSum = 0;
                $pogSum = 0;
                foreach($products as $product){
                    $productBudgetSum[$product->id] = 0;
                    $productPlacementSum[$product->id] = 0;
                    $productPogSum[$product->id] = 0;
                }
            @endphp
            @foreach ($zones as $zone)
                @php
                foreach($products as $product){
                    $zoneBudget[$product->id] = 0;
                    $zonePlacement[$product->id] = 0;
                    $zonePog[$product->id] = 0;
                }
                @endphp
                @foreach ($zone->regions as $region)
                    <x-table.tr>
                        <x-table.td style="white-space: nowrap;">{{ $region->name }}</x-table.td>
                        @foreach ($products as $product)
                            @php
                                $zoneBudget[$product->id] += $product->regions->find($region->id)->pivot->budget;    
                                $zonePlacement[$product->id] += $product->regions->find($region->id)->pivot->placement;    
                                $zonePog[$product->id] += $product->regions->find($region->id)->pivot->pog;    
                            @endphp
                            <x-table.td>{{ $product->regions->find($region->id)->pivot->budget }}</x-table.td>
                            <x-table.td>{{ $product->regions->find($region->id)->pivot->placement }}</x-table.td>
                            <x-table.td>{{ $product->regions->find($region->id)->pivot->pog }}</x-table.td>
                        @endforeach
                        <x-table.td>{{ $region->hybridRice->sum('pivot.budget') }}</x-table.td>
                        <x-table.td>{{ $region->hybridRice->sum('pivot.placement') }}</x-table.td>
                        <x-table.td>{{ $region->hybridRice->sum('pivot.pog') }}</x-table.td>
                    </x-table.tr>
                @endforeach
            <x-table.tr class="bg-primary-500">
                <x-table.td style="white-space: nowrap;">{{ $zone->name }}</x-table.td>
                @foreach ($products as $product)
                    @php
                        $productBudgetSum[$product->id] += $zoneBudget[$product->id];
                        $productPlacementSum[$product->id] += $zonePlacement[$product->id];
                        $productPogSum[$product->id] += $zonePog[$product->id];
                    @endphp
                    <x-table.td>{{ $zoneBudget[$product->id] }}</x-table.td>
                    <x-table.td>{{ $zonePlacement[$product->id] }}</x-table.td>
                    <x-table.td>{{ $zonePog[$product->id] }}</x-table.td>
                @endforeach
                @php
                    $budgetSum += $zone->hybridRice()['budget'];
                    $placementSum += $zone->hybridRice()['placement'];
                    $pogSum += $zone->hybridRice()['pog'];
                @endphp
                <x-table.td>{{ $zone->hybridRice()['budget'] }}</x-table.td>
                <x-table.td>{{ $zone->hybridRice()['placement'] }}</x-table.td>
                <x-table.td>{{ $zone->hybridRice()['pog'] }}</x-table.td>
            </x-table.tr>
            @endforeach
            <x-table.tr class="border-b-0">
                <x-table.th style="width: 300px">Total</x-table.th>
                @foreach ($products as $product)
                    <x-table.td>{{ $productBudgetSum[$product->id] }}</x-table.td>
                    <x-table.td>{{ $productPlacementSum[$product->id] }}</x-table.td>
                    <x-table.td>{{ $productPogSum[$product->id] }}</x-table.td>
                @endforeach
                <x-table.td>{{ $budgetSum }}</x-table.td>
                <x-table.td>{{ $placementSum }}</x-table.td>
                <x-table.td>{{ $pogSum }}</x-table.td>
            </x-table.tr>
        </tbody>
    </table>
</div>
