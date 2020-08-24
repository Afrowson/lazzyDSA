<div class="bg-gray-400 px-5 py-4 mx-2 my-2 rounded">
    <h4 class="text-center text-lg font-medium">Steckbrief</h4>
    <div class="flex flex-col md:flex-row">
        <div class="flex flex-row bg-gray-200 p-10 mt-5 md:mx-4 rounded">
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
    </div>
</div>
