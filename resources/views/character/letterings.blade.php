<span class="bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Schriften</h4>
    <div class="flex flex-col bg-gray-200 p-10 mt-5 md:mx-4 rounded">
        @foreach ($character->letterings as $lettering)
            <div class="font-bold">{{ $lettering->name }}</div>
        @endforeach
    </div>
</span>
