<div class="flex justify-between items-center bg-green-600  h-10 sm:h-12 md:h-16 lg:h-16 m-0">

    <div>
        <p class="pl-2">{{$character->race}}&nbsp;{{$character->culture}},&nbsp;{{$character->profession}}</p>
        <p class="pl-2">{{$character->ap_total}}&nbsp;AP  <b>{{$character->name}}</b></p>
    </div>
    @include('character.skills')

    @include('character.energy')

</div>
