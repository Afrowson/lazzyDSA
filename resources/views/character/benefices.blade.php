<div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Vorteile</h4>
    <div class="bg-gray-200 p-10 mt-5 rounded">
        <table class="table-auto">
            <tbody>
                @foreach ($character->benefices as $benefice)
                    <tr class="hover:bg-gray-400 hover:border-l-4 hover:border-gray-600 border-gray-300">
                        <td class="px-2 py-2 border-2 font-bold">
                            {{ $benefice->name }}&nbsp;{{ $benefice->pivot->value }}
                        </td>
                        <td class="px-2 py-2 border-2">{{ $benefice->pivot->type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
