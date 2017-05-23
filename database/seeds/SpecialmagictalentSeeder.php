<?php

use App\Specialmagictalent;
use Illuminate\Database\Seeder;

class SpecialmagictalentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialmagictalent::create([
            'name' => 'Aura verbergen',
            'description' => 'Der Zauberkundige kann seine magische Aura so verhüllen,
dass seine magische Befähigung durch Hellsichtzauber
und andere magische Wahrnehmung erschwert
oder gar nicht entdeckt werden kann.',
            'rules' => 'Hierzu ist eine erfolgreiche Probe auf das Talent
Willenskraft nötig. Proben auf Liturgien oder Hellsichtzauber,
die direkt auf den Zauberkundigen gewirkt
werden, um ein magisches Potenzial zu erkennen, sind
um QS der Probe auf Willenskraft erschwert. Vor ungerichteter
magischer Wahrnehmung ist sein magisches
Talent komplett verborgen. So lange der Zauberkundige
seine Aura verhüllt, kann er weder zaubern, noch
bereits gewirkte Zauber aufrechterhalten. Aura verbergen
ist kombinierbar mit dem Vorteil Verhüllte Aura.
Die Aktivierung der Sonderfertigkeit erfordert 1 Aktion
und kann während des Wirkungszeitraums bewusst
aus- und eingeschaltet werden. Dies erfordert ebenfalls
1 Aktion. Durch Ausschalten erleidet der Anwender jedes
Mal eine Stufe Verwirrung. Der Wirkungszeitraum
endet, bis der Zauberer die verborgene Aura freiwillig
aufgibt, er schläft oder den Status Bewusstlos erhält.',
            'ap' => '20',

        ]);
        Specialmagictalent::create([
            'name' => 'Merkmalskenntnis',
            'description' => 'Die Kenntnis eines Merkmals umfasst das tiefere Verständnis
einer bestimmten Ausprägung der Magie.',
            'rules' => 'Nur mit dem Erwerb einer bestimmten Merkmalskenntnis
ist es dem Zauberkundigen möglich,
Zauber über einen Fertigkeitswert von 14 hinaus zu
steigern. Außerdem kann der Zauberkundige jetzt
auch Zauber einer fremden Tradition mit dem entsprechenden
Merkmal modifizieren. Der Zauberkundige
muss zum Erlernen einer Merkmalskenntnis
drei Zauber des gewünschten Merkmals auf 10 beherrschen
und sich eingehend mit den Besonderheiten
des Merkmals beschäftigt haben, beispielsweise
durch einige Jahre Forschung an einer Magierakademie,
in der speziell dieses Merkmal gelehrt wird,
oder durch andere in diesem Merkmal erfahrene
Lehrmeister.
Nachdem das Merkmal erworben wurde, gibt es für
Zauber mit diesem Merkmal keine weitere spezielle
Grenze (außer die der normalen
Höchstwerte für
Fertigkeiten).',
            'ap' => '10',//20,40

        ]);
        Specialmagictalent::create([
            'name' => 'Starke Zaubertricks',
            'description' => 'Die Zaubertricks des Helden sind besonders stark.',
            'rules' => 'Zaubertricks gelten als mit 2 QS bestanden.',
            'ap' => '2',

        ]);
        Specialmagictalent::create([
            'name' => 'Verbotene Pforten',
            'description' => 'Der Zauberkundige kann seine Lebensenergie als
Ersatz für Astralenergie verwenden.',
            'rules' => 'Ein Zauberer kann Anstelle von AsP auch LeP
für die Zauberkosten aufwenden. Es muss jedoch pro
Zauber mindestens 1 AsP aufgewendet werden.
Dies ist ausgesprochen schmerzhaft und erfordert
daher eine Probe auf das Talent Selbstbeherrschung.
Misslingt diese, misslingt auch der Zauber. Der
Zauberkundige muss dann wie sonst die Hälfte der
Kosten aufbringen, wobei diese zuerst von den AsP
und, sollten diese nicht ausreichen, dann von seinen
LE abgezogen werden.',
            'ap' => '10',

        ]);
        Specialmagictalent::create([
            'name' => 'Zauberzeichen',
            'description' => 'Um Bann- und Schutzkreise und Zauberglyphen erlernen
und korrekt zeichnen zu können, benötigt man
diese Sonderfertigkeit.',
            'rules' => 'Der Held verfügt durch diese Sonderfertigkeit im
Talent Malen & Zeichnen über das neue Anwendungsgebiet
Zauberzeichen malen',
            'ap' => '10',

        ]);
        Specialmagictalent::create([
            'name' => 'Tradition (Gildenmagier)',
            'description' => '',
            'rules' => '',
        ]);
        Specialmagictalent::create([
            'name' => 'Bindung des Stabes',
            'description' => '',
            'rules' => '',
        ]);
        Specialmagictalent::create([
            'name' => 'Ewige Flamme',
            'description' => '',
            'rules' => '',
        ]);
        Specialmagictalent::create([
            'name' => 'Hammer des Adepten',
            'description' => '',
            'rules' => '',
        ]);
        //        Specialmagictalent::create([
//            'name' => '',
//            'description' => '',
//            'rules' => '',
//            'level' => '',
//            'ap' => '',
//        ]);
    }
}
