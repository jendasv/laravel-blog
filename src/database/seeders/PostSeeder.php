<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = Post::create(['slug' => 'my-first-post']);

        PostTranslation::create([
            'post_id' => $post->id,
            'locale' => 'cs',
            'title' => 'Jak začít s TailwindCSS',
            'content' => 'TailwindCSS je moderní utility-first framework, který umožňuje rychle vytvářet responzivní a elegantní UI bez psaní vlastního CSS od nuly. V tomto článku se podíváme na základní principy a jak začít s jednoduchou strukturou projektu.
Prvním krokem je instalace TailwindCSS do vašeho projektu. To můžete provést přes npm, yarn, nebo CDN pro rychlé testování. Dále je vhodné nastavit konfigurační soubor tailwind.config.js, kde definujete barvy, fonty a další možnosti přizpůsobení vašeho designu.
Nakonec se podíváme na tvorbu komponent a layoutů pomocí Tailwind utility classes. Například header, sidebar nebo článkové bloky mohou být vytvořeny během několika minut, s plnou kontrolou nad mezery, velikostí, barvami a responsivitou. Tailwind vám umožňuje pracovat rychle a konzistentně.'
        ]);

        PostTranslation::create([
            'post_id' => $post->id,
            'locale' => 'en',
            'title' => 'How to Get Started with TailwindCSS',
            'content' => 'TailwindCSS is a modern utility-first framework that allows you to quickly build responsive and elegant UIs without writing custom CSS from scratch. In this article, we’ll explore the basic principles and how to get started with a simple project structure.

The first step is installing TailwindCSS into your project. This can be done via npm, yarn, or a CDN for quick testing. Next, it’s recommended to set up the tailwind.config.js configuration file, where you define colors, fonts, and other customization options for your design.

Finally, we’ll look at creating components and layouts using Tailwind utility classes. For example, headers, sidebars, or article blocks can be built in just a few minutes, with full control over spacing, sizing, colors, and responsiveness. Tailwind allows you to work quickly and consistently.'
        ]);

        PostTranslation::create([
            'post_id' => $post->id,
            'locale' => 'de',
            'title' => 'Wie man mit TailwindCSS beginnt',
            'content' => 'TailwindCSS ist ein modernes Utility-First-Framework, das es ermöglicht, schnell responsive und elegante Benutzeroberflächen zu erstellen, ohne eigenes CSS von Grund auf neu schreiben zu müssen. In diesem Artikel werfen wir einen Blick auf die grundlegenden Prinzipien und darauf, wie man mit einer einfachen Projektstruktur beginnt.

Der erste Schritt ist die Installation von TailwindCSS in Ihr Projekt. Dies kann über npm, yarn oder über ein CDN für schnelles Testen erfolgen. Anschließend empfiehlt es sich, die Konfigurationsdatei tailwind.config.js einzurichten, in der Sie Farben, Schriftarten und weitere Anpassungsmöglichkeiten für Ihr Design definieren.

Zum Schluss schauen wir uns die Erstellung von Komponenten und Layouts mithilfe der Tailwind-Utility-Klassen an. Zum Beispiel können Header, Sidebars oder Inhaltsblöcke innerhalb weniger Minuten erstellt werden – mit voller Kontrolle über Abstände, Größen, Farben und Responsivität. Tailwind ermöglicht es Ihnen, schnell und konsistent zu arbeiten.'
        ]);
    }
}
