<div class="bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Steckbrief</h4>
    <div class="flex flex-col">
        <div class="flex flex-row bg-gray-200 p-10 mt-5 rounded">
            <div>
                <div class="font-bold">Alter&nbsp;</div>
                <div class="font-bold">Geburtsort&nbsp;</div>
                <div class="font-bold">Sozialstatus&nbsp;</div>
                <div class="font-bold">Titel&nbsp;</div>
            </div>
            <div>
                <p>{{ $character->age }}</p>
                <p>{{ $character->place_of_birth }}</p>
                <p>{{ $character->social }}</p>
                <p>{{ $character->title }}</p>
            </div>

        </div>

        <div class="flex flex-row bg-gray-200 p-10 mt-5 rounded">
            <div>
                <div class="font-bold">Haarfarbe&nbsp;</div>
                <div class="font-bold">Augenfarbe&nbsp;</div>
                <div class="font-bold">Höhe&nbsp;</div>
                <div class="font-bold">Gewicht&nbsp;</div>
            </div>
            <div>
                <div>{{ $character->hair }}</div>
                <div>{{ $character->eyes }}</div>
                <div>{{ $character->height }}</div>
                <div>{{ $character->weight }}</div>
            </div>
        </div>

        <div class="flex flex-row bg-gray-200 p-10 mt-5 rounded">
            <div>
                <div class="font-bold">Seelenkraft</div>
                <div class="font-bold">Zähigkeit</div>
                <div class="font-bold">Ausweichen</div>
                <div class="font-bold">Initiative</div>
                <div class="font-bold">Geschwindigkeit&nbsp&nbsp;</div>
            </div>
            <div>
                <p>{{ $character->SK }}</p>
                <p>{{ $character->ZK }}</p>
                <p>{{ $character->AW }}</p>
                <p>{{ $character->IT }}</p>
                <p>{{ $character->GW }}</p>
            </div>
        </div>
    </div>
</div>
