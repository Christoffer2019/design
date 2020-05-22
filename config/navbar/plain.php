<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "class" => "my-navbar",
 
    // Here comes the menu items/structure
    "items" => [
        [
            "text" => "<i class='fas fa-home'></i>",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "<i class='fas fa-book'></i> Rapporter",
            "url" => "rapport",
            "title" => "Rapporter i kursen design",
        ],
        [
            "text" => "<i class='fas fa-book'></i> Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
        ],
        [
            "text" => "<i class='fas fa-camera'></i> Blogg",
            "url" => "blogg",
            "title" => "Blogg: dagens bild",
        ],
        [
            "text" => "<i class='fas fa-info'></i> Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "<i class='fas fa-font'></i> Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "<i class='fas fa-cogs'></i> Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "<i class='fab fa-markdown'></i> Test",
            "url" => "test",
            "title" => "Testa olika konstruktioner i MarkDown",
        ],
    ],
];
