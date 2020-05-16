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
Laddningstid
=========================

<p class="author">Uppdaterad<time datetime="2020-05-10"> 10 maj 2020
</time> av Christoffer Lymalm</p>

## Innehållsförteckning

1. [Sammandrag](#summary)

2. [Urval](#selection)

3. [Metod](#method)

4. [Resultat](#result)

    1. [Allt om mat](#result-allt-om-mat)

        1. [Startsida](#result-allt-om-mat-startsida)

        2. [Recept](#result-allt-om-mat-recept)

        3. [Fridas bakblogg](#result-allt-om-mat-fridas-bakblogg)

        4. [Förslag på förbättringar](#result-allt-om-mat-forslag-pa-forbattringar)

    2. [Köket](#result-koket)

        1. [Startsida](#result-koket-startsida)

        2. [Recept](#result-koket-recept)

        3. [Mattias blogg](#result-koket-mattias-blogg)

        4. [Förslag på förbättringar](#result-koket-forslag-pa-forbattringar)

    3. [Arla](#result-arla)

        1. [Startsida](#result-arla-startsida)

        2. [Recept](#result-arla-recept)

        3. [Inspiration](#result-arla-inspiration)

        4. [Förslag på förbättringar](#result-arla-forslag-pa-forbattringar)

5. [Diskussion av resultat](#discussion)

    1. [Jämförelse av mobil- och desktopversion](#discussion-jamforelse-av-mobil-och-desktopversion)

    2. [Jämförelse av webbplatser](#discussion-jamforelse-av-webbplatser)

    3. [Slutsats](#discussion-slutsats)

[Referenser](#references)

[Diverse](#miscellaneous)

<h2 id="summary">1. Sammandrag</h2>

Jag har analyserat laddningstider för tre webbplatser inom matlagning och recept.

<h2 id="selection">2. Urval</h2>

Jag valde att analysera de tre mest populära webbplatserna i Sverige inom matlagning och recept enligt webbplatsen *[SimilarWeb](https://www.similarweb.com/top-websites/sweden/category/food-and-drink/cooking-and-recipes)*: *[Allt om mat](https://alltommat.se/)*, *[Köket](https://www.koket.se/)* samt *[Arla](https://www.arla.se/)*.

<h2 id="method">3. Metod</h2>

Dokumentation av statistik för webbsidor genomförde jag med verktyget *[PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)* både för mobil- och desktopversion. Mätningar för laddningstid, antal resurser samt total mängd data för webbsidor genomförde jag med verktyget *Devtools* (F12) under fliken network och kommandot ctrl + shift + r i Google Chrome. Mätningar gjorde jag tre gånger både för mobil- och desktopversion då statistiken varierar för dessa faktorer. Totalt dokumenterade jag nio webbsidor (tre webbsidor för varje webbplats). 

När jag gjorde mätningar för antal resurser och total mängd data för webbsidor, märkte jag att dessa värden ökade långsamt under lång tid och det var svårt att uppskatta när webbsidan hade laddat klart. Då en större andel av webbsidans resurser hade laddats efter tio sekunder, valde jag att mäta dessa värden efter detta tidsmått för alla webbsidor. All statistik dokumenterade jag i detta [kalkylark](https://drive.google.com/open?id=10ED-qiNIdpH7VIn_V1FnvO0--sixiyu16W6BBUesy-E).

<h2 id="result">4. Resultat</h2>

Statistik finns i detta [kalkylark](https://drive.google.com/open?id=10ED-qiNIdpH7VIn_V1FnvO0--sixiyu16W6BBUesy-E).

<h3 id="result-allt-om-mat">4.1 Allt om mat</h3>

![Allt om mat](img/kmom05/allt-om-mat.png "Allt om mat")

<h4 id="result-allt-om-mat-startsida"><a href="https://alltommat.se/">4.1.1 Startsida</a></h4>

##### Mobilversion

* Poäng: 25/100
* Laddningstid: 1,27 sekunder
* Antal resurser laddade efter tio sekunder: 176 resurser
* Total mängd data laddad efter tio sekunder: 12,9 MB

##### Desktopversion

* Poäng: 74/100
* Laddningstid: 0,944 sekunder
* Antal resurser laddade efter tio sekunder: 175 resurser
* Total mängd data laddad efter tio sekunder: 13,7 MB

<h4 id="result-allt-om-mat-recept"><a href="https://alltommat.se/recept/">4.1.2 Recept</a></h4>

##### Mobilversion

* Poäng: 60/100
* Laddningstid: 1,31 sekunder
* Antal resurser laddade efter tio sekunder: 139 resurser
* Total mängd data laddad efter tio sekunder: 7,9 MB

##### Desktopversion

* Poäng: 88/100
* Laddningstid: 1,07 sekunder
* Antal resurser laddade efter tio sekunder: 105 resurser
* Total mängd data laddad efter tio sekunder: 7,8 MB

<h4 id="result-allt-om-mat-fridas-bakblogg"><a href="https://blogg.alltommat.se/fridasbakblogg/2020/05/04/veckans-bakverk-10-smakakor/">4.1.3 Fridas bakblogg</a></h4>

##### Mobilversion

* Poäng: 35/100
* Laddningstid: 0,758 sekunder
* Antal resurser laddade efter tio sekunder: 119 resurser
* Total mängd data laddad efter tio sekunder: 6,3 MB

##### Desktopversion

* Poäng: 92/100
* Laddningstid: 0,581 sekunder
* Antal resurser laddade efter tio sekunder: 104 resurser
* Total mängd data laddad efter tio sekunder: 4,2 MB

<h4 id="
result-allt-om-mat-forslag-pa-forbattringar">4.1.4 Förslag på förbättringar</h4>

Enligt *PageSpeed Insights* är de vanligaste förslagen på förbättringar för *[Allt om mat](https://alltommat.se/)* anpassning av bildformat, animationer i videoformat samt borttagning av resurser som blockerar webbplatsens rendering.

<h3 id="result-koket">4.2 Köket</h3>

![Köket](img/kmom05/koket.png "Köket")

<h4 id="result-koket-startsida"><a href="https://www.koket.se/">4.2.1 Startsida</a></h4>

##### Mobilversion

* Poäng: 20/100
* Laddningstid: 1,04 sekunder
* Antal resurser laddade efter tio sekunder: 190 resurser
* Total mängd data laddad efter tio sekunder: 4,9 MB

##### Desktopversion

* Poäng: 49/100
* Laddningstid: 1,07 sekunder
* Antal resurser laddade efter tio sekunder: 205 resurser
* Total mängd data laddad efter tio sekunder: 5,5 MB

<h4 id="result-koket-recept"><a href="https://www.koket.se/recept">4.2.2 Recept</a></h4>

##### Mobilversion

* Poäng: 11/100
* Laddningstid: 1,28 sekunder
* Antal resurser laddade efter tio sekunder: 211 resurser
* Total mängd data laddad efter tio sekunder: 6,2 MB

##### Desktopversion

* Poäng: 45/100
* Laddningstid: 1,09 sekunder
* Antal resurser laddade efter tio sekunder: 230 resurser
* Total mängd data laddad efter tio sekunder: 5,9 MB

<h4 id="result-koket-mattias-blogg"><a href="http://mattias.koket.se/">4.2.3 Mattias blogg</a></h4>

##### Mobilversion

* Poäng: 55/100
* Laddningstid: 0,893 sekunder
* Antal resurser laddade efter tio sekunder: 88 resurser
* Total mängd data laddad efter tio sekunder: 4,9 MB

##### Desktopversion

* Poäng: 90/100
* Laddningstid: 1,09 sekunder
* Antal resurser laddade efter tio sekunder: 94 resurser
* Total mängd data laddad efter tio sekunder: 6,7 MB

<h4 id="result-koket-forslag-pa-forbattringar">4.2.4 Förslag på förbättringar</h4>

Enligt *PageSpeed Insights* är det vanligaste förslaget på förbättring för *[Köket](https://www.koket.se/)* minskning av svarstiderna från servern.

<h3 id="result-arla">4.3 Arla</h3>

![Arla](img/kmom05/arla.png "Arla")

<h4 id="result-arla-startsida"><a href="https://www.arla.se/">4.3.1 Startsida</a></h4>

##### Mobilversion

* Poäng: 26/100
* Laddningstid: 1,54 sekunder
* Antal resurser laddade efter tio sekunder: 131 resurser
* Total mängd data laddad efter tio sekunder: 10,6 MB

##### Desktopversion

* Poäng: 55/100
* Laddningstid: 1,18 sekunder
* Antal resurser laddade efter tio sekunder: 122 resurser
* Total mängd data laddad efter tio sekunder: 8,9 MB

<h4 id="result-arla-recept"><a href="https://www.arla.se/recept/">4.3.2 Recept</a></h4>

##### Mobilversion

* Poäng: 16/100
* Laddningstid: 1,8 sekunder
* Antal resurser laddade efter tio sekunder: 100 resurser
* Total mängd data laddad efter tio sekunder: 8,1 MB

##### Desktopversion

* Poäng: 70/100
* Laddningstid: 2,26 sekunder
* Antal resurser laddade efter tio sekunder: 104 resurser
* Total mängd data laddad efter tio sekunder: 8,7 MB

<h4 id="result-arla-inspiration"><a href="https://www.arla.se/recept/inspiration/">4.3.3 Inspiration</a></h4>

##### Mobilversion

* Poäng: 30/100
* Laddningstid: 1,36 sekunder
* Antal resurser laddade efter tio sekunder: 120 resurser
* Total mängd data laddad efter tio sekunder: 9,8 MB

##### Desktopversion

* Poäng: 72/100
* Laddningstid: 1,5 sekunder
* Antal resurser laddade efter tio sekunder: 124 resurser
* Total mängd data laddad efter tio sekunder: 13,5 MB

<h4 id="result-arla-forslag-pa-forbattringar">4.3.4 Förslag på förbättringar</h4>

Enligt *PageSpeed Insights* är de vanligaste förslagen på förbättringar för *[Arla](https://www.arla.se/)* uppskjutning av inläsning av bilder som inte visas på skärmen samt borttagning av oanvänd CSS.

<h2 id="discussion">5. Diskussion av resultat</h2>

<h3 id="discussion-jamforelse-av-mobil-och-desktopversion">5.1 Jämförelse av mobil- och desktopversion</h3>

##### Resultat från PageSpeed Insights

Desktopversionen hade mycket högre poäng och mycket snabbare laddningstid än mobilversionen i alla webbsidor.

##### Resultat från Devtools

Enligt mätningar med *Devtools* hade desktopversionen snabbare laddningstid i fem webbsidor och långsammare laddningstid i fyra webbsidor. Desktopversionen hade färre resurser laddade efter tio sekunder än mobilversionen i fyra webbsidor och fler resurser än mobilversionen i fem webbsidor. Desktopversionen hade större mängd data laddad efter tio sekunder än mobilversionen i fem webbsidor och mindre mängd data i fyra webbsidor.

##### De vanligaste förbättringsåtgärderna

De vanligaste förslagen på förbättringsåtgärder för mobilversionen enligt *PageSpeed Insights* är borttagning av oanvänd CSS samt modernare bildformat. För desktopversionen är det vanligaste förslaget anpassning av bildstorlek. För både mobil- och desktopversionen ges förslaget uppskjutning av inläsning av bilder som inte visas på skärmen.

<h3 id="discussion-jamforelse-av-webbplatser">5.2 Jämförelse av webbplatser</h3>

##### Resultat från PageSpeed Insights

*Allt om mat* hade i genomsnitt högre poäng för både mobil- och desktopversionen jämfört med *Köket* och *Arla*.

##### Resultat från Devtools

*Köket* hade snabbare laddningstid för mobilversionen jämfört med *Allt om mat* och *Arla* medan *Allt om mat* hade snabbare laddningstid för desktopversionen. *Arla* hade färre resurser laddade efter tio sekunder för både mobil- och desktopversionen jämfört med de andra webbplatserna. *Köket* hade mindre mängd data laddad efter tio sekunder för både mobil- och desktopversionen.

##### De vanligaste förbättringsåtgärderna

De vanligaste förslagen på förbättringsåtgärder för *Allt om mat* enligt *PageSpeed Insights* är anpassning av bildstorlek, animationer i videoformat samt borttagning av resurser som blockerar rendering. För *Köket* är det vanligaste förslaget minskning av svarstider från servern och för *Arla* uppskjutning av inläsning av bilder som inte visas på skärmen samt borttagning av oanvänd CSS.

<h3 id="discussion-slutsats">5.3 Slutsats</h3>

Desktopversionen hade mycket högre poäng och mycket snabbare laddningstid, men baserat på mina mätningar med *Devtools* kunde jag inte se något samband med resultatet i *PageSpeed Insights* då desktopversionen var ungefär lika ofta långsammare som snabbare än mobilversionen.

Jag anser att *Allt om mat* har bäst mätvärden då den hade högst poäng och snabbast laddningstid enligt *PageSpeed Insights* samt snabbast laddningstid för desktop enligt mina mätningar med *Devtools*.

Webbplatser som har laddningstider på mindre än en sekund och absoluta laddningstider på mindre än fem sekunder uppfattar jag som snabba. Webbplatserna jag undersökte hade en laddningstid på en till två sekunder, vilket jag tycker är lite för långsamt. Eftersom jag gjorde mätningar för antal resurser och total mängd data efter tio sekunder, kunde jag inte veta hur lång den absoluta laddningstiden var.

Varför skiljde sig resultatet i PageSpeed Insights mot Devtools? Med Devtools genomförde jag tre mätningar för varje webbsida och baserade resultatet på ett meddelvärde. Om jag hade genomfört fler mätningar, hade resultatet förmodligen varit mer likt resultatet i PageSpeed Insights.

<h2 id="references">Referenser</h2>

1. *[SimilarWeb](https://www.similarweb.com/top-websites/sweden/category/food-and-drink/cooking-and-recipes)* - 
Denna referens användes för att undersöka de mest populära webbplatserna i Sverige inom matlagning och recept.
2. Nio webbsidor användes i denna undersökning:
    1. *Allt om mat*
        1. [Startsida](https://alltommat.se/)
        2. [Recept](https://alltommat.se/recept/)
        3. [Fridas bakblogg](https://blogg.alltommat.se/fridasbakblogg/2020/05/04/veckans-bakverk-10-smakakor/)
    2. *Köket*
        1. [Startsida](https://www.koket.se/)
        2. [Recept](https://www.koket.se/recept)
        3. [Mattias blogg](http://mattias.koket.se/)
    3. *Arla*
        1. [Startsida](https://www.arla.se/)
        2. [Recept](https://www.arla.se/recept/)
        3. [Inspiration](https://www.arla.se/recept/inspiration/)
5. Verktyget *[PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/)* användes för dokumentation av statistik för webbplatser.

<h2 id="miscellaneous">Diverse</h2>

Denna rapport skapades av Christoffer Lymalm. 