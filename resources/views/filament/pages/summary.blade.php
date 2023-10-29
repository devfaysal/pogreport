<x-filament-panels::page>
    <div class="px-1 py-1" style="overflow-x: scroll">
        <table class="mb-4 w-full ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
            <thead>
                <x-table.tr>
                    <x-table.th>Zone/Region Name</x-table.th>
                    <x-table.th class="text-center" style="width: 270px">
                        Hybrid Rice
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">Budget</p>
                            <p class="text-sm text-center" style="width: 90px">Placement</p>
                            <p class="text-sm text-center" style="width: 90px">POG</p>
                        </div>
                    </x-table.th>
                    <x-table.th class="text-center" style="width: 270px">
                        Inbred Rice
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">Budget</p>
                            <p class="text-sm text-center" style="width: 90px">Placement</p>
                            <p class="text-sm text-center" style="width: 90px">POG</p>
                        </div>
                    </x-table.th>
                    <x-table.th class="text-center" style="width: 270px">
                        Maize
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">Budget</p>
                            <p class="text-sm text-center" style="width: 90px">Placement</p>
                            <p class="text-sm text-center" style="width: 90px">POG</p>
                        </div>
                    </x-table.th>
                    <x-table.th class="text-center" style="width: 270px">
                        Total
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">Budget</p>
                            <p class="text-sm text-center" style="width: 90px">Placement</p>
                            <p class="text-sm text-center" style="width: 90px">POG</p>
                        </div>
                    </x-table.th>
                </x-table.tr>
            </thead>
            @php
                $hybridRiceSum = ['budget'=>0,'placement'=>0,'pog'=>0];
                $inbredRiceSum = ['budget'=>0,'placement'=>0,'pog'=>0];
                $hybridMaizeSum = ['budget'=>0,'placement'=>0,'pog'=>0];
            @endphp
            @foreach ($zones as $zone)
                @php
                    $hybridRiceSum['budget'] += $zone->hybridRice()['budget'];
                    $hybridRiceSum['placement'] += $zone->hybridRice()['placement'];
                    $hybridRiceSum['pog'] += $zone->hybridRice()['pog'];
                    $inbredRiceSum['budget'] += $zone->inbredRice()['budget'];
                    $inbredRiceSum['placement'] += $zone->inbredRice()['placement'];
                    $inbredRiceSum['pog'] += $zone->inbredRice()['pog'];
                    $hybridMaizeSum['budget'] += $zone->hybridMaize()['budget'];
                    $hybridMaizeSum['placement'] += $zone->hybridMaize()['placement'];
                    $hybridMaizeSum['pog'] += $zone->hybridMaize()['pog'];
                @endphp
                @foreach ($zone->regions as $region)
                    <x-table.tr>
                        <x-table.td>{{ $region->name }}</x-table.td>
                        <x-table.td>
                            <div class="flex">
                                <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.budget') }}</p>
                                <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.placement') }}</p>
                                <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.pog') }}</p>
                            </div>
                        </x-table.td>
                        <x-table.td>
                            <div class="flex">
                                <p class="text-sm text-center" style="width: 90px">{{ $region->inbredRice->sum('pivot.budget') }}</p>
                                <p class="text-sm text-center" style="width: 90px">{{ $region->inbredRice->sum('pivot.placement') }}</p>
                                <p class="text-sm text-center" style="width: 90px">{{ $region->inbredRice->sum('pivot.pog') }}</p>
                            </div>
                        </x-table.td>
                        <x-table.td>
                            <div class="flex">
                                <p class="text-sm text-center" style="width: 90px">{{ $region->hybridMaize->sum('pivot.budget') }}</p>
                                <p class="text-sm text-center" style="width: 90px">{{ $region->hybridMaize->sum('pivot.placement') }}</p>
                                <p class="text-sm text-center" style="width: 90px">{{ $region->hybridMaize->sum('pivot.pog') }}</p>
                            </div>
                        </x-table.td>
                        <x-table.td>
                            <div class="flex">
                                <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.budget') + $region->inbredRice->sum('pivot.budget') + $region->hybridMaize->sum('pivot.budget') }}</p>
                                <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.placement') + $region->inbredRice->sum('pivot.placement') + $region->hybridMaize->sum('pivot.placement') }}</p>
                                <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.pog') + $region->inbredRice->sum('pivot.pog') + $region->hybridMaize->sum('pivot.pog') }}</p>
                            </div>
                        </x-table.td>
                    </x-table.tr>
                @endforeach
                <x-table.tr class="bg-primary-500">
                    <x-table.td>{{ $zone->name }}</x-table.td>
                    <x-table.td>
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['budget'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['placement'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['pog'] }}</p>
                        </div>
                    </x-table.td>
                    <x-table.td>
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->inbredRice()['budget'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->inbredRice()['placement'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->inbredRice()['pog'] }}</p>
                        </div>
                    </x-table.td>
                    <x-table.td>
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridMaize()['budget'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridMaize()['placement'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridMaize()['pog'] }}</p>
                        </div>
                    </x-table.td>
                    <x-table.td>
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['budget'] + $zone->inbredRice()['budget'] + $zone->hybridMaize()['budget'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['placement'] + $zone->inbredRice()['placement'] + $zone->hybridMaize()['placement'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['pog'] + $zone->inbredRice()['pog'] + $zone->hybridMaize()['pog'] }}</p>
                        </div>
                    </x-table.td>
                </x-table.tr>
            @endforeach
            <tfoot>
                <x-table.tr class="border-b-0">
                    <x-table.td class="font-bold">Total</x-table.td>
                    <x-table.td>
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['budget'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['placement'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['pog'] }}</p>
                        </div>
                    </x-table.td>
                    <x-table.td>
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $inbredRiceSum['budget'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $inbredRiceSum['placement'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $inbredRiceSum['pog'] }}</p>
                        </div>
                    </x-table.td>
                    <x-table.td>
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $hybridMaizeSum['budget'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $hybridMaizeSum['placement'] }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $hybridMaizeSum['pog'] }}</p>
                        </div>
                    </x-table.td>
                    <x-table.td>
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['budget'] + $inbredRiceSum['budget'] + $hybridMaizeSum['budget']}}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['placement'] + $inbredRiceSum['placement'] + $hybridMaizeSum['placement']}}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['pog'] + $inbredRiceSum['pog'] + $hybridMaizeSum['pog']}}</p>
                        </div>
                    </x-table.td>
                </x-table.tr>
            </tfoot>
        </table>
    </div>
</x-filament-panels::page>
