<div class="bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Inventare</h4>
    <div class="flex flex-col lg:flex-row">
        @foreach ($character->inventories as $inventory)
            @php
            $weight=0;$value=0; $amount=0;
            @endphp
            <div class="bg-gray-200 p-10 mt-5 lg:mx-3 rounded">
                <h5 class="text-center pb-5">{{ $inventory->name }}</h5>
                <table class='table-auto'>
                    <thead>
                        <tr>
                            <th class="p-5">Name</th>
                            <th class="p-5">Gewicht</th>
                            <th class="p-5">Wert</th>
                            <th class="p-5">Anzahl</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inventory->items as $item)
                            @php
                            $weight+=($item->item->weight * $item->amount);
                            $value+=($item->item->value * $item->amount);
                            $amount+= $item->amount;
                            @endphp
                            <tr>
                                <td class="px-2 py-2 border-2">{{ $item->item->name }}</td>
                                <td class="px-5 py-2 border-2">{{ $item->item->weight }}</td>
                                <td class="px-5 py-2 border-2">{{ $item->item->value }}</td>
                                <td class="px-5 py-2 border-2">{{ $item->amount }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="rounded">
                        <tr>
                            <td class=" bg-green-200 border-2 px-5 py-2">Gesamt</td>
                            <td class=" bg-green-200 border-2 px-5 py-2">{{ $weight }}</td>
                            <td class=" bg-green-200 border-2 px-5 py-2">{{ $value }}</td>
                            <td class=" bg-green-200 border-2 px-5 py-2">{{ $amount }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        @endforeach
    </div>
</div>
