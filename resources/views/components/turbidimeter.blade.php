<div class="flex justify-center p-5 items-center border border-black">
    <div class="h-[350px] w-[300px] border flex flex-col items-center justify-center gap-5 ">
        <div class="bg-red w-full top-0 left-0 text-center p-2 font-semibold">
            Fonte luminosa
        </div>
        <!-- Imagem Invertida -->
        <img src="{{ asset('img/image.png') }}" alt="Imagem Invertida" class="-scale-x-100" width="250">
    </div>
    <div class="h-[350px] w-[300px] border flex flex-col items-center justify-center gap-5">
        <h3 class="w-full top-0 left-0 text-center p-2 font-semibold">
            Recipente com água
        </h3>
        <div id="container-with-wather" class="w-[200px] h-[250px] rounded-2xl bg-blue-200 border"></div>
    </div>
    <div class="h-[350px] w-[300px] border flex flex-col items-center justify-center">
        <div class="bg-red w-full top-0 left-0 text-center p-2 font-semibold">
            Sensor LDR
        </div>
        <!-- Imagem Invertida -->
        <img src="{{ asset('img/ldr-sensor.png') }}" alt="Imagem Invertida" width="100">
    </div>
</div>
