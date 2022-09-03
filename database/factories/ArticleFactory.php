<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'title' => "Serverseitiges Rendern in einem Javascript bassiertem Content Management System",
            'author' => "Jonathan Klinger",
            'text' => "In dieser Arbeit soll untersucht werden, wie sich das hinzufügen von Ser-
            verseitigem Rendern in einem Content-Management-System unter moder-
            nen JavaScript Frameworks einbringen lässt. Dabei ist es wichtig, auf die
            Performance von Server und Client achten, sowie auf die Suchmaschinen-
            optimierung. Diese drei Eckpunkte bilden ein Spannungsdreieck, welches
            ausbalanciert bleiben sollte. Will beispielsweise eine besser Suchmaschinen-
            optimierung erzielt werden muss der Server dafür extra Prozesse einführen,
            welche die Performance drücken. Andererseits muss dadurch der Client mit
            dem Content, welcher für Suchmschienen optimiert wurde Arbeiten. Da-
            durch entstehen Spannungen, welche anhand einer Einbindung in einem
            CMS untersucht werden soll. Weiterhin soll als Resultat dieser Arbeit ein
            Konzept entstehen, welcher auf die verschiedenen Rendermethoden in ei-
            nem Content-Management-System eingesetzt werden können unter Beach-
            tung des Spannungsdreiecks. Zu dieser Anforderung wurde folgende For-
            schungsfrage formuliert: Wie lassen sich Javascript-Rendermethoden ein-
            setzten, um das Spannungsdreieck aus Serverperformance, Clientperfor-
            mance und Suchmaschinenoptimierung möglichst zu entlasten?
            Weiterführend wird ein Konzept erstellt, welches den Einsatz verschie-
            dener Rendermethoden in einem Content-Management-System ermöglicht,
            unter Beachtung des Spannungsdreiecks. Es soll ein Entscheidungsbaum de-
            finiert werden, welcher die Wahl der passenden Rendermethode, für ver-
            schiedene Anwendungsfälle bestimmt. Mittels dieses Konzepts werden Mes-
            sungen vorgenommen, um den Einfluss des Einsatzes von Serverseitigem
            Rendern zu bestimmen. Diese Messungen werden anhand verschiedener
            Testszenarien erfolgen und mit zum Spannungsdreieck passenden Kriterien
            gemessen. Für dieses Ziel wurde die folgende Forschungsfrage formuliert:
            Wie lassen sich verschieden Javascript-Rendermethoden in einem Web
            Content-Management-Systems, unter Achtung des Spannungsdreiecks in-
            tegrieren?",
            'image' => fake()->imageUrl(640, 480, "CMS"),
        ];
    }
}
