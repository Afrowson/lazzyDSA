<div class="inventory-container is-clearfix">
    
    <h4>Inventare</h4>
    @foreach($character->inventories as $inventory)
        @php
            $weight=0;$value=0; $amount=0;
        @endphp
        <div class="inventory-block is-pulled-left">
            <h5>Ort: {{$inventory->name}}</h5>
            <table class='inventory-table'>
                <tr class="inventory-table-cell">
                    <th style="width: 150px">Name</th>
                    <th style="width: 60px">Gewicht</th>
                    <th style="width: 45px">Wert</th>
                    <th style="width: 10px">Anzahl</th>
                </tr>
    
                @foreach($inventory->items as $item)
                    @php
                        $weight+=($item->item->weight * $item->amount);
                        $value+=($item->item->value * $item->amount);
                        $amount+= $item->item->amount;
                    @endphp
        
                    <tr class="inventory-table-cell">
                        <td class="">{{$item->item->name}} </td>
                        <td class="">{{$item->item->weight}} </td>
                        <td class="">{{$item->item->value}} </td>
                        <td class="">{{$item->item->amount}}</td>
                    </tr>
                @endforeach
    
                <tr class="inventory-bottom inventory-table-cell">
                    <td>Gesamt</td>
                    <td>{{$weight}}</td>
                    <td>{{$value}}</td>
                    <td>{{$amount}}</td>
                </tr>
            </table>
        </div>
    @endforeach
</div>
