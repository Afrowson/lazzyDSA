<div class="bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h1 class="text-center text-lg font-medium">Kampftechnik</h1>
    <div class="bg-gray-200 p-10 mt-5 rounded">
        <div class="grid grid-cols-3">

            <div class="flex col-span-2">
                <div class="font-bold">Name</div>
            </div>
            <div class="flex flex-row">
                <div class="w-8 ml-2 text-center font-bold">Ktw</div>
                <div class="w-8 ml-2 text-center font-bold">AT</div>
                <div class="w-8 ml-2 text-center font-bold">PA</div>
            </div>

            @foreach($character->fightingtalents as $i=> $fightingtalent)
            <div class="flex flex-col col-span-2 py-1">
                <div>{{$fightingtalent->name}}</div>
            </div>
            <div class="flex flex-row justify-end py-1">
                <div class="border-gray-700 bg-green-300 w-8 ml-2 border rounded text-center">
                    {{$fightingtalent->pivot->value}}</div>
                <div class="border-gray-700 bg-yellow-300 w-8 ml-2 border rounded text-center">
                    {{$character->fightvalues[$i]['at']}}</div>
                <div class="border-gray-700 bg-red-300 w-8 ml-2 border rounded text-center">
                    {{$character->fightvalues[$i]['pa']}}</div>
            </div>
            @endforeach

        </div>
    </div>
</div>