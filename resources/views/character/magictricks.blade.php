@if(!is_null($character->magictricks->first()))
    <div class="box is-pulled-left m-r-10">
        <h4 class="title is-4">Zaubertricks</h4>
        <table class="table is-narrow">
            <tr>
                <th style="width: 50px">Name</th>
                <th style="width: 50px">Reichweite</th>
                <th style="width: 105px">Dauer</th>
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
    </div>
@endif
