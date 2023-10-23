<x-filament-widgets::widget>
    @php
        $hybrid_rice_budgets = 0;
        $inbred_rice_budgets = 0;
        $hybrid_maize_budgets = 0;
        $hybrid_rice_placements = 0;
        $inbred_rice_placements = 0;
        $hybrid_maize_placements = 0;
        $hybrid_rice_pogs = 0;
        $inbred_rice_pogs = 0;
        $hybrid_maize_pogs = 0;
    @endphp
    @foreach ($regions as $region)
    @php
        $hybrid_rice_budgets += $region->products->where('pivot.type', 'Hybrid Rice')->sum('pivot.budget');
        $inbred_rice_budgets += $region->products->where('pivot.type', 'Inbred Rice')->sum('pivot.budget');
        $hybrid_maize_budgets += $region->products->where('pivot.type', 'Hybrid Maize')->sum('pivot.budget');
        $hybrid_rice_placements += $region->products->where('pivot.type', 'Hybrid Rice')->sum('pivot.placement');
        $inbred_rice_placements += $region->products->where('pivot.type', 'Inbred Rice')->sum('pivot.placement');
        $hybrid_maize_placements += $region->products->where('pivot.type', 'Hybrid Maize')->sum('pivot.placement');
        $hybrid_rice_pogs += $region->products->where('pivot.type', 'Hybrid Rice')->sum('pivot.pog');
        $inbred_rice_pogs += $region->products->where('pivot.type', 'Inbred Rice')->sum('pivot.pog');
        $hybrid_maize_pogs += $region->products->where('pivot.type', 'Hybrid Maize')->sum('pivot.pog');
    @endphp
        <a href="/zone/regions/{{ $region->id }}">
            <div class="fi-section rounded-xl bg-primary-600 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10" style="margin-bottom:10px; ">
                <p class="text-center text-white font-bold p-4 text-2xl">{{ $region->name }}</p>
            </div>
        </a>
    @endforeach
    <div>
        <h2 class="text-center text-xl pt-4 mb-1">Hybrid Rice</h2>
        <div class="flex justify-between">
            <div class="border px-2 py-1 rounded-lg" style="width: 30%">
                <p>Budget</p>
                {{ $hybrid_rice_budgets }}
            </div>
            <div class="border px-2 py-1 rounded-lg" style="width: 30%">
                <p>Placement</p>
                {{ $hybrid_rice_placements }}
            </div>
            <div class="border px-2 py-1 rounded-lg" style="width: 30%">
                <p>POG</p>
                {{ $hybrid_rice_pogs }}
            </div>
        </div>
    </div>
    <div>
        <h2 class="text-center text-xl pt-4 mb-1">Inbred Rice</h2>
        <div class="flex justify-between">
            <div class="border px-2 py-1 rounded-lg" style="width: 30%">
                <p>Budget</p>
                {{ $inbred_rice_budgets }}
            </div>
            <div class="border px-2 py-1 rounded-lg" style="width: 30%">
                <p>Placement</p>
                {{ $inbred_rice_placements }}
            </div>
            <div class="border px-2 py-1 rounded-lg" style="width: 30%">
                <p>POG</p>
                {{ $inbred_rice_pogs }}
            </div>
        </div>
    </div>
    <div>
        <h2 class="text-center text-xl pt-4 mb-1">Hybrid Maize</h2>
        <div class="flex justify-between">
            <div class="border px-2 py-1 rounded-lg" style="width: 30%">
                <p>Budget</p>
                {{ $hybrid_maize_budgets }}
            </div>
            <div class="border px-2 py-1 rounded-lg" style="width: 30%">
                <p>Placement</p>
                {{ $hybrid_maize_placements }}
            </div>
            <div class="border px-2 py-1 rounded-lg" style="width: 30%">
                <p>POG</p>
                {{ $hybrid_maize_pogs }}
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
