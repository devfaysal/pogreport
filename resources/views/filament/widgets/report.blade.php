<x-filament-widgets::widget>
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
    @endforeach
    <table class="mb-4 w-full ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
        <thead>
            <tr class="border-b">
                <th class="ps-4 pe-4 py-2 text-left"></th>
                <th class="ps-4 pe-4 py-2 text-left">Budget</th>
                <th class="ps-4 pe-4 py-2 text-left">Placement</th>
                <th class="ps-4 pe-4 py-2 text-left">POG</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b">
                <th class="ps-4 pe-4 py-2 text-left">Hybrid Rice</th>
                <td class="ps-4 pe-4 py-2">{{ $hybridRiceSum['budget'] }}</td>
                <td class="ps-4 pe-4 py-2">{{ $hybridRiceSum['placement'] }}</td>
                <td class="ps-4 pe-4 py-2">{{ $hybridRiceSum['pog'] }}</td>
            </tr>
            <tr class="border-b">
                <th class="ps-4 pe-4 py-2 text-left">Inbred Rice</th>
                <td class="ps-4 pe-4 py-2">{{ $inbredRiceSum['budget'] }}</td>
                <td class="ps-4 pe-4 py-2">{{ $inbredRiceSum['placement'] }}</td>
                <td class="ps-4 pe-4 py-2">{{ $inbredRiceSum['pog'] }}</td>
            </tr>
            <tr class="border-b">
                <th class="ps-4 pe-4 py-2 text-left">Maize</th>
                <td class="ps-4 pe-4 py-2">{{ $hybridMaizeSum['budget'] }}</td>
                <td class="ps-4 pe-4 py-2">{{ $hybridMaizeSum['placement'] }}</td>
                <td class="ps-4 pe-4 py-2">{{ $hybridMaizeSum['pog'] }}</td>
            </tr>
        </tbody>
    </table>
</x-filament-widgets::widget>
