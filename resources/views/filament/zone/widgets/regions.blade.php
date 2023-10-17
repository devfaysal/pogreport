<x-filament-widgets::widget>
    @foreach ($regions as $region)
    <a href="/zone/regions/{{ $region->id }}">
        <div class="fi-section rounded-xl bg-primary-600 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10" style="margin-bottom:10px; ">
            <p class="text-center text-white font-bold p-4 text-2xl">{{ $region->name }}</p>
        </div>
    </a>
    @endforeach
</x-filament-widgets::widget>
