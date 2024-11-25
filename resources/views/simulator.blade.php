<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Simulador') }}
        </h2>
    </x-slot>

    <x-turbidimeter />
    <x-painel-control></x-painel-control>

    <x-slot name="specificScripts">
        <script>
            function updateTurbidityValue(rangeInputValue) {
                const containerWithWater = document.getElementById("container-with-wather");
                const decimalRepresentation = rangeInputValue / 100;
                containerWithWater.style.backgroundColor = `rgba(191, 219, 254, ${decimalRepresentation})`;
            }
        </script>
    </x-slot>
</x-app-layout>
