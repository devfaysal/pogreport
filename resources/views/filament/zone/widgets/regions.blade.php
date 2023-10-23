<x-filament-widgets::widget>
    @foreach ($regions as $region)
    @php
        $hybrid_rice_budgets = $region->products->where('pivot.type', 'Hybrid Rice')->sum('pivot.budget');
        $inbred_rice_budgets = $region->products->where('pivot.type', 'Inbred Rice')->sum('pivot.budget');
        $hybrid_maize_budgets = $region->products->where('pivot.type', 'Hybrid Maize')->sum('pivot.budget');
        $hybrid_rice_placements = $region->products->where('pivot.type', 'Hybrid Rice')->sum('pivot.placement');
        $inbred_rice_placements = $region->products->where('pivot.type', 'Inbred Rice')->sum('pivot.placement');
        $hybrid_maize_placements = $region->products->where('pivot.type', 'Hybrid Maize')->sum('pivot.placement');
        $hybrid_rice_pogs = $region->products->where('pivot.type', 'Hybrid Rice')->sum('pivot.pog');
        $inbred_rice_pogs = $region->products->where('pivot.type', 'Inbred Rice')->sum('pivot.pog');
        $hybrid_maize_pogs = $region->products->where('pivot.type', 'Hybrid Maize')->sum('pivot.pog');
    @endphp
        <a href="/zone/regions/{{ $region->id }}">
            <div class="fi-section rounded-xl bg-primary-600 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10" style="margin-bottom:10px; ">
                <p class="text-center text-white font-bold p-4 text-2xl">{{ $region->name }}</p>
            </div>
        </a>
        <table class="mb-4 w-full ring-1 ring-gray-950/5 dark:ring-white/10 rounded-xl bg-white dark:bg-gray-900">
            <thead>
                <tr class="border-b">
                    <th class="text-left text-sm ps-2 py-1" style="width: 25%"></th>
                    <th class="text-left text-xs ps-2 py-1" style="width: 25%">Budget</th>
                    <th class="text-left text-xs ps-2 py-1" style="width: 25%">Placement</th>
                    <th class="text-left text-xs ps-2 py-1" style="width: 25%">POG</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <th class="text-xs ps-2 py-1 text-left">Hybrid Rice</th>
                    <td class="text-xs font-bold ps-2 py-1">{{ $hybrid_rice_budgets }}</td>
                    <td class="text-xs font-bold ps-2 py-1">{{ $hybrid_rice_placements }}</td>
                    <td class="text-xs font-bold ps-2 py-1">{{ $hybrid_rice_pogs }}</td>
                </tr>
                <tr class="border-b">
                    <th class="text-xs ps-2 py-1 text-left">Inbred Rice</th>
                    <td class="text-xs font-bold ps-2 py-1">{{ $inbred_rice_budgets }}</td>
                    <td class="text-xs font-bold ps-2 py-1">{{ $inbred_rice_placements }}</td>
                    <td class="text-xs font-bold ps-2 py-1">{{ $inbred_rice_pogs }}</td>
                </tr>
                <tr class="border-b">
                    <th class="text-xs ps-2 py-1 text-left">Maize</th>
                    <td class="text-xs font-bold ps-2 py-1">{{ $hybrid_maize_budgets }}</td>
                    <td class="text-xs font-bold ps-2 py-1">{{ $hybrid_maize_placements }}</td>
                    <td class="text-xs font-bold ps-2 py-1">{{ $hybrid_maize_pogs }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach
</x-filament-widgets::widget>
