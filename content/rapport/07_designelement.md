---
views:
    byline:
        region: main
        template: anax/v2/block/default
        sort: 3
        data:
            meta: 
                type: single
                route: block/byline
---
Designelement
=========================

<p class="author">Uppdaterad<time datetime="2020-05-22"> 22 maj 2020
</time> av Christoffer Lymalm</p>

## Innehållsförteckning

1. [Sammandrag](#summary)

2. [Design](#design)

[Referenser](#references)

<h2 id="summary">1. Sammandrag</h2>

Jag redogör för designelementen som jag använder i temat kmom06-designelement.

<h2 id="design">2. Design</h2>

Temat kmom06-designelement baserade jag på temat kmom05. Utöver de designelement som redan används i detta tema, arbetade jag vidare med texturer, former, bilder, färger samt gradients. 

### Texturer
Jag ändrade bakgrunden i bodyn från vit till ljusgrå textur i trä. För att skapa ett stilrent intryck utan att påverka läsbarheten ändrade jag opaciteten till 0,9 i klassen inner-wrap-main. Jag ville behålla samma mörkgrå färg i mobilmenyn och footern, så jag ändrade bakgrunden till en textur med mörkgrå prickar i footern och mörkgrå textur i trä i mobilmenyn.

### Gradients
Jag använde linear gradient för att göra texturen i footern mörkare och skapa nyanser.

### Bilder
Jag ändrade bilderna i byline, index, about och flash samt lade till nya bilder i test, rapport, redovisning och blogg. Innan jag lade till bilderna, redigerade jag dem i Paint så att proportioner och upplösning anpassades. För vissa bilder använder jag två olika upplösningar. Vilken bild som används beräknas av funktionen changeImageSize i htdocs/js/main.js beroende på webbläsarfönstrets bredd. Jag baserade valet av bilder på vilken känsla bilden skapar, vad bilden förmedlar, om bilden är relevant i förhållande till texten på webbsidan samt om bildens färger passar till webbsidan. Jag gjorde en avvägning mellan liten filstorlek och hög upplösning på bilderna med tanke på webbsidans laddningstid.

### Former
Jag ändrade utseendet på till-toppen-knappen (längst ned till höger) från en kvadrat med texten "upp" till en cirkel med en pil. Jag lade till symboler för menyn och rubriker i footern. Alla symboler skapade jag med Font Awesome.

### Färger
Jag ändrade hover-färgen till blå för länkar i klassen breadcrumb-list och till-toppen-knappen då blå används som accentfärg. Rubriker i h1 och h2 ändrade jag från svart till blå för att skapa mer variation i texten.

<h2 id="references">Referenser</h2>

Dokumentation av designelement baserades på en artikel i *[Wikipedia, Visual Design Elements and Principles](https://en.wikipedia.org/wiki/Visual_design_elements_and_principles)*.
