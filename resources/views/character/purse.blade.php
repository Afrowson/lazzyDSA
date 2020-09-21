@if (!is_null($character->purses->first()))
<div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h3 class="text-center text-lg font-medium">Geldbeutel</h3>
    @foreach ($character->purses as $purse)
    <h3 class="text-center">{{ $purse->name }}</h3>
    <img src="/images/purse3.jpg" alt="" class="h-16 object-contain">
    <div class="bg-gray-200 p-10 mt-3 rounded">      
        <div class="flex">
            <div class="text-right pr-1 w-1/3">
                <div>{{ $purse->dukaten }}</div>
                <div>{{ $purse->silber }}</div>
                <div>{{ $purse->kreuzer }}</div>
                <div>{{ $purse->heller }}</div>
            </div>
            <div class="w-2/3 pl-3">
                <div>Dukaten</div>
                <div>Silber</div>
                <div>Kreuzer</div>
                <div>Heller</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif