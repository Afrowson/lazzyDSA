@if (!is_null($character->purses->first()))
<div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h3 class="text-center text-lg font-medium">Geldbeutel:</h3>
    <img src="/images/purse3.jpg" alt="" class="h-16 object-contain">
    @foreach ($character->purses as $purse)
    <div class=" bg-gray-200 p-10 mt-3 rounded">
        <h5 class="text-center p-2">{{ $purse->name }}</h5>
        <div class="grid grid-cols-2">
            <div class="text-right px-4">
                <div>{{ $purse->dukaten }}</div>
                <div>{{ $purse->silber }}</div>
                <div>{{ $purse->kreuzer }}</div>
                <div>{{ $purse->heller }}</div>
            </div>
            <div>
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