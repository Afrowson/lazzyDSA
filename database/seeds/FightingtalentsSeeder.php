<?php

use App\Fightingtalent;
use Illuminate\Database\Seeder;

class FightingtalentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fightingtalent::create([
            'name' => 'Dolche',
            'description' => 'Mit dieser Technik werden alle Klingenwaffen geführt, die kürzer als ein Kurzschwert sind. Dazu zählen sowohl beidseitig als auch einseitig geschliffene Klingen und kurze Stichwaffen, also alles vom einfachen Besteckmesser bis zum Langdolch.',
            'specials' => 'Mit Dolchen können Kettenwaffen, Stangenwaffen, Zweihandhiebwaffen und Zweihandschwerter nicht pariert werden.',
            'primary_skill' => 'GE',
            'increase_factor' => '1',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Fechtwaffen',
            'description' => 'Besonders im Horasreich sind diese leichten und eleganten Waffen sehr beliebt. Sie sind zwar kaum in der Lage, schwere Rüstungen zu durchstoßen, erfahrene Fechter können mit ihnen jedoch sehr gezielt empfindliche Stellen des Gegners angreifen.',
            'specials' => 'Mit Fechtwaffen können Kettenwaffen, Stangenwaffen, Zweihandhiebwaffen und Zweihandschwerter nicht pariert werden. Proben auf Verteidigung gegen Fechtwaffen-Attacken sind um 1 erschwert.',
            'primary_skill' => 'GE',
            'increase_factor' => '2',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Hiebwaffen',
            'description' => 'In diese Kategorie fallen vom einfachen Knüppel bis zum meisterlich geschmiedeten Rabenschnabel alle einhändig geführten Wuchtwaffen, egal ob stumpf oder mit Axtblatt.',
            'specials' => '-',
            'primary_skill' => 'KK',
            'increase_factor' => '2',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Kettenwaffen',
            'description' => 'Aufgrund ihrer durchschlagenden Wirkung beliebt und wegen ihrer Unberechenbarkeit gefürchtet, sind Kettenwaffen mittlerweile bei vielen ritterlichen Turnieren verboten. Unter dieser Technik werden vor allem der Morgenstern und die berüchtigte Ochsenherde, ein Morgenstern mit drei Kugeln, geführt.',
            'specials' => 'Da sie wegen der nur schwer kontrollierbaren Kugeln kaum abzuwehren sind, ist die Parade gegen Kettenwaffen um 2 erschwert. Schilde können darüber hinaus gegen Kettenwaffen nur ihren einfachen Bonus auf die Verteidigung nutzen. Angriffe mit Kettenwaffe gelten bereits ab einem Ergebnis von 19 als Patzer. Mit Kettenwaffen ist keine Parade möglich.',
            'primary_skill' => 'KK',
            'increase_factor' => '2',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Lanzen',
            'description' => 'Besonders von den Panzerreitern des nördlichen Mittelreiches geführt, ist die Lanze eine besonders gefürchtete Waffe. Zu Pferd wird sie üblicherweise einhändig geführt, während Infanteristen sie zweihändig als recht unhandliche Pike führen können.',
            'specials' => '-',
            'primary_skill' => 'KK',
            'increase_factor' => '1',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Raufen',
            'description' => 'Bei der sicher ältesten Methode des Kampfes traktieren sich die unbewaffneten Kontrahenten mit Schlägen und Tritten, versuchen sich gegenseitig zu würgen, zu Fall zu bringen oder festzuhalten.',
            'specials' => 'Unbewaffnete erleiden bei einer erfolgreichen Parade mit Raufen gegen Bewaffnete trotzdem den vollen Schaden (und sollten stattdessen besser ausweichen). Wird eine Raufenattacke mit einer Waffe abgewehrt, erleidet der Angreifer den halben Waffenschaden der Waffe des Gegners. Mittels Raufen richtet ein Kämpfer grundsätzlich einen Schaden von 1W6 TP an, der aber wie üblich über die Leiteigenschaft modifiziert werden kann.',
            'primary_skill' => 'GE',
            'primary_skill_2' => 'KK',
            'increase_factor' => '1',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Schilde',
            'description' => 'Einige Kämpfer verwenden Schilde zum Schutz vor Nahkampfangriffen, aber auch vor Beschuss. Unter diese Technik fallen Schilde aus Leder, Holz, Metall und auch aus Flechtwerk. Man kann zwar mit Schilden auch angreifen, sie sind dafür jedoch meist nur bedingt geeignet.',
            'specials' => 'Der Attacke- und Paradewert von Schilden wird wie bei allen anderen Kampftechniken auch berechnet. Die Parade mit der Kampftechnik Schilde ist jedoch um den doppelten Parade-Bonus des jeweiligen Schildes modifiziert und erleidet keine Abzüge durch das Führen mit der falschen Hand. Fernkampfangriffe und Attacken großer Gegner können mit einem Schild geblockt werden. Ein zweiter Schild erhöht diesen Bonus nicht. Um Fernkampfangriffe abzuwehren muss aktiv mit dem Schild pariert werden, eine Parade mit der Hauptwaffe reicht nicht aus. Mit einem Schild kann man auch angreifen.',
            'primary_skill' => 'KK',
            'increase_factor' => '2',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Schwerter',
            'description' => 'Als treuen Begleiter schätzen Krieger und Ritter das Schwert, und für viele ist es ein Symbol für Kampf und Herrschaft. Unter diese Kampftechnik fallen einhändig geführte Klingenwaffen ab der Länge eines Kurzschwertes, mit Ausnahme von Fechtwaffen, egal ob gerade oder gebogen oder mit einseitig oder beidseitig geschliffener Klinge.',
            'specials' => '-',
            'primary_skill' => 'GE',
            'primary_skill_2' => 'KK',
            'increase_factor' => '2',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Stangenwaffen',
            'description' => 'Speere, Stäbe und die verschiedenen Spieße der Landwehr sowie vieler Söldnereinheiten fallen unter diese Kampftechnik. Allen gemein ist ein langer Schaft, mit dem sich Gegner auf Abstand halten lassen.',
            'specials' => '-',
            'primary_skill' => 'GE',
            'primary_skill_2' => 'KK',
            'increase_factor' => '2',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Zweihand-hiebwaffen',
            'description' => 'Besonders bei primitiven Kulturen werden die unausgewogenen Zweihandwaffen gerne im Kampf geführt, da sie oft ein abschreckendes Äußeres mit einer tödlichen Wuchtwirkung verbinden. Zu den Zweihandhiebwaffen gehören u.a. der Kriegshammer oder der zwergische Felsspalter.',
            'specials' => '-',
            'primary_skill' => 'KK',
            'increase_factor' => '2',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Zweihand-schwerter',
            'description' => 'Alle Klingenwaffen, die mit zwei Händen gehalten werden, vom klassischen Zweihänder bis zum Doppelkhunchomer, fallen unter diese Kampftechnik. Auch Anderthalbhänder werden mit dieser Kampftechnik geführt.',
            'specials' => '-',
            'primary_skill' => 'KK',
            'increase_factor' => '2',
            'melee' => '1'
        ]);
        Fightingtalent::create([
            'name' => 'Armbrüste',
            'description' => 'Viele behaupten, die Zwerge hätten die Armbrust erfunden, während einige vermuten, dass sie von güldenländischen Siedlern nach Aventurien gebracht wurde. Die Armbrust ist bei den Zwergen, aber auch bei den Bürgern der großen Städte beliebt und wird bisweilen für die Jagd verwendet. Der Umgang mit ihr ist leicht zu erlernen, es ist jedoch mit Aufwand verbunden, sie nachzuladen.',
            'specials' => '-',
            'primary_skill' => 'FF',
            'increase_factor' => '1',
            'melee' => '0'
        ]);
        Fightingtalent::create([
            'name' => 'Bögen',
            'description' => 'Der Bogen ist eine der ältesten Schusswaffen Aventuriens und erfreut sich besonders bei den Völkern der Elfen, den Reitern der Novadis und den Schwarzpelzen der Orksteppe großer Beliebtheit. Bögen verfügen über eine große Reichweite und sind schnell zu spannen. Allerdings bedarf ihr Gebrauch einiger Übung.',
            'specials' => '-',
            'primary_skill' => 'FF',
            'increase_factor' => '2',
            'melee' => '0'
        ]);
        Fightingtalent::create([
            'name' => 'Wurfwaffen',
            'description' => 'Neben Steinen fallen vor allem alle Arten von Speeren, Wurfdolchen und -beilen unter diese Kampftechnik.',
            'specials' => '-',
            'primary_skill' => 'FF',
            'increase_factor' => '1',
            'melee' => '0'
        ]);
    }
}
