<div class="box is-clearfix is-pulled-right m-r-10">
    <h4 class="title is-4">Inventare</h4>
    @foreach($character->inventories as $inventory)
        @php
            $weight=0;$value=0; $amount=0;
        @endphp
        <div class="box is-pulled-left m-r-10">
            <h5 class="title is-5">{{$inventory->name}}</h5>
            <table class='table is-narrow'>
                <thead>
                <tr>
                    <th style="width: 150px">Name</th>
                    <th style="width: 60px">Gewicht</th>
                    <th style="width: 45px">Wert</th>
                    <th style="width: 10px">Anzahl</th>
                </tr>
                </thead>
                @foreach($inventory->items as $item)
                    @php
                        $weight+=($item->item->weight * $item->amount);
                        $value+=($item->item->value * $item->amount);
                        $amount+= $item->amount;
                    @endphp
                    <tr>
                        <td>{{$item->item->name}}</td>
                        <td>{{$item->item->weight}}</td>
                        <td>{{$item->item->value}}</td>
                        <td>{{$item->amount}}</td>
                    </tr>
                @endforeach
                <tfoot>
                <tr>
                    <td>Gesamt</td>
                    <td>{{$weight}}</td>
                    <td>{{$value}}</td>
                    <td>{{$amount}}</td>
                </tr>
                </tfoot>
            </table>
        </div>
    @endforeach
</div>
