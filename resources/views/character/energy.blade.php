<div>
    <form action="/character/{{$character->id}}/energy" method="POST">
        {{csrf_field()}}
        <div class="flex items-center">
            <div class="flex flex-col ml-2" style="width: 47px">
                <span>LeP</span>
                <div class="flex">
                    <input class="appearance-none bg-transparent focus:outline-none text-gray-700 -mr-4"
                           style="width: 38px; height: 17px"
                           max="{{$character->lep_max}}"
                           min="-10"
                           name="lep"
                           type="number"
                           value="{{$character->lep}}">
                    <span class="-m-1"> /{{$character->lep_max}}</span>
                </div>
            </div>
            @if($character->asp_max > 0)
                <div class="flex flex-col ml-2" style="width: 47px">
                    <span>AsP</span>
                    <div class="flex">
                        <input class="appearance-none bg-transparent focus:outline-none text-gray-700 -mr-4"
                               style="width: 38px; height: 16px"
                               max="{{$character->asp_max}}"
                               min="0"
                               name="asp"
                               type="number"
                               value="{{$character->asp}}">
                        <span class="-m-1">/{{$character->asp_max}}</span>
                    </div>
                </div>
            @endif
            @if($character->kap_max > 0)
                <div class="flex flex-col ml-2" style="width: 47px">
                    <span>KaP:</span>
                    <div class="flex">
                        <input class="appearance-none bg-transparent  focus:outline-none text-gray-700 -mr-4"
                               style="width: 38px; height: 16px"
                               max="{{$character->kap_max}}"
                               min="0"
                               name="kap"
                               type="number"
                               value="{{$character->kap}}">
                        <span class="-m-1">/{{$character->kap_max}}</span>
                    </div>
                </div>
            @endif
            <div class="flex flex-col ml-2" style="width: 47px">
                <span>SP</span>
                <div class="flex">
                    <input class="appearance-none bg-transparent focus:outline-none text-gray-700 -mr-4"
                           style="width: 38px; height: 16px"
                           max="{{$character->kap_max}}"
                           min="0"
                           type="number"
                           name="sp"
                           value="{{$character->sp}}">
                    <span class="-m-1">/3</span>
                </div>
            </div>
            <button class="bg-yellow-600 py-2 px-4 mx-2 text-xs sm:text-sm md:text-base text-black rounded">Update
            </button>
        </div>
    </form>
</div>