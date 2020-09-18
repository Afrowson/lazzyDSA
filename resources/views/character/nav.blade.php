<div class="flex justify-between items-center bg-green-400  h-10 sm:h-12 md:h-16 lg:h-16 m-0">

    <div>
        <p>{{$character->race}}&nbsp;{{$character->culture}},&nbsp;{{$character->profession}}</p>
        <p>{{$character->ap_total}}&nbsp;AP  <b>{{$character->name}}</b></p>
    </div>
    @include('character.skills')

    @include('character.energy')

</div>
