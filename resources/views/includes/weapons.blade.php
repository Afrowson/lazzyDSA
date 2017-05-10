<div>
    <div class='weapons-block'>
        @foreach($character->weapons as $weapon)
            <p>{{$weapon->name}}</p>
            <p>{{$weapon->dice}}W6+{{$weapon->bonus_dmg}}</p>
        @endforeach
    </div>
    <div class='weapons-block'>
        @foreach($character->shields as $shield)
            <p>{{$shield->name}}</p>
            <p>{{$shield->dice}}W6+{{$shield->bonus_dmg}}</p>
            <p>{{$shield->pa_mod}}</p>
        @endforeach
    </div>
    <div class='weapons-block'>
        @foreach($character->rangeweapons as $rangeweapon)
            <p>{{$rangeweapon->name}}</p>
            <p>{{$rangeweapon->dice}}W6+{{$rangeweapon->bonus_dmg}}</p>
        @endforeach
    </div>
    <div class='weapons-block'>
        @foreach($character->armors as $armor)
            <p>{{$armor->name}}</p>
            <p>{{$armor->RS}} RS</p>
            <p>{{$armor->BE}} BE</p>
            <p>{{($armor->weight)}} Stein</p>

        @endforeach
    </div>
</div>