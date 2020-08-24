<div class="bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Sprachen</h4>
    <div class="flex flex-col bg-gray-200 p-10 mt-5 md:mx-4 rounded">
        @foreach ($character->languages as $language)
            <div class="">
                {{ $language->name }}&nbsp;</>{{ $language->pivot->value }}
            </div>
        @endforeach
    </div>
</div
