<div class="{{-- box is-clearfix is-pulled-right m-r-10 --}} flex flex-col bg-gray-400 px-5 py-4 mx-2 rounded">
    <h4 class="{{-- title is-4 --}} text-center text-lg font-medium">Inventare</h4>
    @foreach($character->inventories as $inventory)
        @php
            $weight=0;$value=0; $amount=0;
        @endphp
        <div class="{{-- box is-pulled-left --}} bg-gray-200 p-10 mt-5 rounded">
            <h5 class="{{-- title is-5 --}} text-center pb-5">{{$inventory->name}}</h5>
            <table class='{{-- table is-narrow --}} table-auto'>
                <thead>
                <tr>
                    <th style="width: 150px" class="p-5">Name</th>
                    <th style="width: 60px" class="p-5">Gewicht</th>
                    <th style="width: 45px" class="p-5">Wert</th>
                    <th style="width: 10px" class="p-5">Anzahl</th>
                </tr>
                </thead>
                <tbody>
                @foreach($inventory->items as $item)
                    @php
                        $weight+=($item->item->weight * $item->amount);
                        $value+=($item->item->value * $item->amount);
                        $amount+= $item->amount;
                    @endphp
                    <tr>
                        <td class="{{-- table-cell --}} pl-2 py-2 border-2">{{$item->item->name}}</td>
                        <td class="{{-- table-cell --}} px-5 py-2 border-2">{{$item->item->weight}}</td>
                        <td class="{{-- table-cell --}} px-5 py-2 border-2">{{$item->item->value}}</td>
                        <td class="{{-- table-cell --}} px-5 py-2 border-2">{{$item->amount}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot class="rounded">
                <tr>
                    <td class="{{-- table-cell-dark --}} bg-green-200 border-2 px-5 py-2">Gesamt</td>
                    <td class="{{-- table-cell-dark --}} bg-green-200 border-2 px-5 py-2">{{$weight}}</td>
                    <td class="{{-- table-cell-dark --}} bg-green-200 border-2 px-5 py-2">{{$value}}</td>
                    <td class="{{-- table-cell-dark --}} bg-green-200 border-2 px-5 py-2">{{$amount}}</td>
                </tr>
                </tfoot>
            </table>
        </div>
    @endforeach
</div>
