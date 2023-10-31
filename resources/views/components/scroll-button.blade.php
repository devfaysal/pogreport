<div class="w-full">
    <x-filament::button id="scrollLeft">Scroll Left</x-filament::button>
    <x-filament::button id="scrollRight">Scroll Right</x-filament::button>
    <script>
        const buttonRight = document.getElementById('scrollRight');
        const buttonLeft = document.getElementById('scrollLeft');
        buttonRight.onclick = function () {
            document.getElementById('container-scroll').scrollLeft += 300;
        };
        buttonLeft.onclick = function () {
            document.getElementById('container-scroll').scrollLeft -= 300;
        };
    </script>
</div>