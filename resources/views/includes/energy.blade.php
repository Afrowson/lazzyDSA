<div class="clearfix enrgy-container">
    <div class="pull-left clearfix energy-block">
        <p class="pull-left energy-name">LeP</p>
        <p class="pull-left energy-value value-box azure">{{$character->lep}}/{{$character->lep_max}}</p>
    </div>
    @if($character->asp_max >= 1)
        <div class="pull-left clearfix energy-block">
            <p class="pull-left energy-name">AsP</p>
            <p class="pull-left energy-value value-box azure">{{$character->asp}}/{{$character->asp_max}}</p>
        </div>
    @endif
    @if($character->ksp_max >= 1)
        <div class="pull-left clearfix energy-block">
            <p class="pull-left energy-name">KsP</p>
            <p class="pull-left energy-value value-box azure">{{$character->ksp}}/{{$character->ksp_max}}</p>
        </div>
    @endif
    <div class="pull-left clearfix energy-block">
        <p class="pull-left energy-name">Schicksalspunkte</p>
        <p class="pull-left energy-value value-box azure">{{$character->SP}}/3</p>
    </div>

</div>