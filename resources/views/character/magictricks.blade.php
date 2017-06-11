<div class="clearfix magictrick-container">
    @if($character->magictricks->first())
        <h4>Zaubertricks</h4>
        <table class=" clearfix magictrick-block">
            <tr class="weapons-table-cell">
                <th style="width: 50px">Name</th>
                <th style="width: 50px">Reichweite</th>
                <th style="width: 80px">Dauer</th>
                <th style="width: 50px">Ziel</th>
                <th style="width: 50px">Merkmal</th>
            </tr>
            @foreach($character->magictricks as $magictrick)
                <tr>
                    <td class="weapons-table-cell">{{$magictrick->name}}</td>
                    <td class="weapons-table-cell">{{$magictrick->range}}</td>
                    <td class="weapons-table-cell">{{$magictrick->duration}}</td>
                    <td class="weapons-table-cell">{{$magictrick->target}}</td>
                    <td class="weapons-table-cell">{{$magictrick->trait}}</td>
                </tr>
            @endforeach
        </table>
    @endif
</div>
