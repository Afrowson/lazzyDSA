@if(!is_null($character->magictricks->first()))
<div class="bg-gray-400 px-5 py-4 mx-2 rounded">
    <h4 class="text-center text-lg font-medium">Zaubertricks</h4>
        <div class="flex flex-col lg:flex-row">
            <div class="bg-gray-200 p-10 mt-5 lg:mx-3 rounded">
                <table class="table-auto">
                    <thead>
                        <th class="px-5 py-2" style="width: 50px">Name</th>
                        <th class="px-5 py-2" style="width: 50px">Reichweite</th>
                        <th class="px-5 py-2" style="width: 105px">Dauer</th>
                        <th class="px-5 py-2" style="width: 50px">Ziel</th>
                        <th class="px-5 py-2" style="width: 50px">Merkmal</th>
                    </thead>
                    <tbody>
                        @foreach($character->magictricks as $magictrick)
                            <tr class="hover:bg-gray-400 hover:shadow-lg border-l-4 border-gray-300">
                                <td class="px-5 py-2 border-2">{{$magictrick->name}}</td>
                                <td class="px-5 py-2 border-2">{{$magictrick->range}}</td>
                                <td class="px-5 py-2 border-2">{{$magictrick->duration}}</td>
                                <td class="px-5 py-2 border-2">{{$magictrick->target}}</td>
                                <td class="px-5 py-2 border-2">{{$magictrick->trait}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endif
