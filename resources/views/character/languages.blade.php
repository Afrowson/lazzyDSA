<div class="col-span-8 row-span-1 m-2">
    <div class="bg-gray-400 px-5 py-4 rounded h-full">

        <h4 class="text-center text-lg font-medium">Schriften & Sprachen</h4>

        <div class="flex justify-between bg-gray-200 p-10 mt-5 md:mx-4 rounded h-auto">
            <div></div>

            <div class=" pr-2">
                @foreach ($character->letterings as $lettering)
                    <div class="font-bold">{{ $lettering->name }}</div>
                @endforeach
            </div>
            <div class="border-r-2"></div>

            <div class="pl-2">
                @foreach ($character->languages as $language)
                    <div class="font-bold">
                        {{ $language->name }}&nbsp;{{ $language->pivot->value }}
                    </div>
                @endforeach

            </div>

            <div></div>
        </div>

    </div>
</div>