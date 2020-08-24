<div class="flex flex-col bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Nachteile</h4>
    <div class="bg-gray-200 p-10 mt-5 rounded">
        <table class="table-auto">
            <tbody>
                @foreach ($character->handicaps as $handicap)
                    <tr>
                        <td class="px-2 py-2 border-2 font-bold">
                            {{ $handicap->name }}&nbsp;{{ $handicap->pivot->value }}&nbsp;</td>
                        <td class="px-2 py-2 border-2">{{ $handicap->pivot->type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
