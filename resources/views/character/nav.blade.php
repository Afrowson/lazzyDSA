<div class="flex justify-between items-center bg-green-400  h-10 sm:h-12 md:h-16 lg:h-16 m-0">

    <a href="/index" class="float-left bg-green-600 p-2 mx-2 text-xs sm:text-sm md:text-base  text-black rounded">Zurück</a>

    <div>
        <p>{{$character->race}}&nbsp;{{$character->culture}},&nbsp;{{$character->profession}}</p>
        <p>{{$character->ap_total}}&nbsp;AP</p>
    </div>

    @include('character.energy')

    @include('character.skills')
</div>
