<x-filament-widgets::widget>
    <table class="mb-4 w-full ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
        <thead>
            <tr class="border-b">
                <th class="ps-4 pe-4 py-2 text-left">Name</th>
                <th class="ps-4 pe-4 py-2" style="width: 270px">
                    Hybrid Rice
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">Budget</p>
                        <p class="text-sm text-center" style="width: 90px">Placement</p>
                        <p class="text-sm text-center" style="width: 90px">POG</p>
                    </div>
                </th>
                <th class="ps-4 pe-4 py-2" style="width: 270px">
                    Inbred Rice
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">Budget</p>
                        <p class="text-sm text-center" style="width: 90px">Placement</p>
                        <p class="text-sm text-center" style="width: 90px">POG</p>
                    </div>
                </th>
                <th class="ps-4 pe-4 py-2" style="width: 270px">
                    Maize
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">Budget</p>
                        <p class="text-sm text-center" style="width: 90px">Placement</p>
                        <p class="text-sm text-center" style="width: 90px">POG</p>
                    </div>
                </th>
                <th class="ps-4 pe-4 py-2" style="width: 270px">
                    Total
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">Budget</p>
                        <p class="text-sm text-center" style="width: 90px">Placement</p>
                        <p class="text-sm text-center" style="width: 90px">POG</p>
                    </div>
                </th>
            </tr>
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
                <tr class="border-b">
                    <td class="ps-4 pe-4 py-2">{{ $region->name }}</td>
                    <td class="ps-4 pe-4 py-2">
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.budget') }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.placement') }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.pog') }}</p>
                        </div>
                    </td>
                    <td class="ps-4 pe-4 py-2">
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $region->inbredRice->sum('pivot.budget') }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $region->inbredRice->sum('pivot.placement') }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $region->inbredRice->sum('pivot.pog') }}</p>
                        </div>
                    </td>
                    <td class="ps-4 pe-4 py-2">
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $region->hybridMaize->sum('pivot.budget') }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $region->hybridMaize->sum('pivot.placement') }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $region->hybridMaize->sum('pivot.pog') }}</p>
                        </div>
                    </td>
                    <td class="ps-4 pe-4 py-2">
                        <div class="flex">
                            <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.budget') + $region->inbredRice->sum('pivot.budget') + $region->hybridMaize->sum('pivot.budget') }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.placement') + $region->inbredRice->sum('pivot.placement') + $region->hybridMaize->sum('pivot.placement') }}</p>
                            <p class="text-sm text-center" style="width: 90px">{{ $region->hybridRice->sum('pivot.pog') + $region->inbredRice->sum('pivot.pog') + $region->hybridMaize->sum('pivot.pog') }}</p>
                        </div>
                    </td>
                </tr>
            @endforeach
            <tr class="border-b bg-primary-500">
                <td class="ps-4 pe-4 py-2">{{ $zone->name }}</td>
                <td class="ps-4 pe-4 py-2">
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['budget'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['placement'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['pog'] }}</p>
                    </div>
                </td>
                <td class="ps-4 pe-4 py-2">
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->inbredRice()['budget'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->inbredRice()['placement'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->inbredRice()['pog'] }}</p>
                    </div>
                </td>
                <td class="ps-4 pe-4 py-2">
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridMaize()['budget'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridMaize()['placement'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridMaize()['pog'] }}</p>
                    </div>
                </td>
                <td class="ps-4 pe-4 py-2">
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['budget'] + $zone->inbredRice()['budget'] + $zone->hybridMaize()['budget'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['placement'] + $zone->inbredRice()['placement'] + $zone->hybridMaize()['placement'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $zone->hybridRice()['pog'] + $zone->inbredRice()['pog'] + $zone->hybridMaize()['pog'] }}</p>
                    </div>
                </td>
            </tr>
        @endforeach
        <tfoot>
            <tr class="border-b">
                <td class="ps-4 pe-4 py-2 font-bold">Total</td>
                <td class="ps-4 pe-4 py-2">
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['budget'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['placement'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['pog'] }}</p>
                    </div>
                </td>
                <td class="ps-4 pe-4 py-2">
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">{{ $inbredRiceSum['budget'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $inbredRiceSum['placement'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $inbredRiceSum['pog'] }}</p>
                    </div>
                </td>
                <td class="ps-4 pe-4 py-2">
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">{{ $hybridMaizeSum['budget'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $hybridMaizeSum['placement'] }}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $hybridMaizeSum['pog'] }}</p>
                    </div>
                </td>
                <td class="ps-4 pe-4 py-2">
                    <div class="flex">
                        <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['budget'] + $inbredRiceSum['budget'] + $hybridMaizeSum['budget']}}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['placement'] + $inbredRiceSum['placement'] + $hybridMaizeSum['placement']}}</p>
                        <p class="text-sm text-center" style="width: 90px">{{ $hybridRiceSum['pog'] + $inbredRiceSum['pog'] + $hybridMaizeSum['pog']}}</p>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</x-filament-widgets::widget>
