@if (!is_null($character->purses->first()))
    <div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
        <h3 class="text-center text-lg font-medium">Geldbeutel:</h3>
        @foreach ($character->purses as $purse)
            <div class=" bg-gray-200 p-10 mt-5 rounded">
                <h5 class="text-center p-2">{{ $purse->name }}</h5>
                <table class="table-auto">
                    <thead>
                        <th class="p-5">Währung</th>
                        <th class="p-5">Wert</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-2 border-2">Dukaten:&nbsp;</td>
                            <td class="px-5 py-2 border-2">{{ $purse->dukaten }}</td>
                        </tr>
                        <tr>
                            <td class="px-5 py-2 border-2">Silber:</td>
                            <td class="px-5 py-2 border-2">{{ $purse->silber }}</td>
                        </tr>
                        <tr>
                            <td class="px-5 py-2 border-2">Kreuzer:</td>
                            <td class="px-5 py-2 border-2">{{ $purse->kreuzer }}</td>
                        </tr>
                        <tr>
                            <td class="px-5 py-2 border-2">Heller:</td>
                            <td class="px-5 py-2 border-2">{{ $purse->heller }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
@endif
