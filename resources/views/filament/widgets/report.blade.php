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
            </tr>
        </thead>
        @foreach ($zones as $zone)
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
            </tr>
        @endforeach
    </table>
</x-filament-widgets::widget>
