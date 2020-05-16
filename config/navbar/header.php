<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",
 
    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Rapporter",
            "url" => "rapport",
            "title" => "Rapporter i kursen design",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Färgschema",
                        "url" => "rapport/fargschema",
                        "title" => "Färgschema för kmom04",
                    ],
                    [
                        "text" => "Laddningstid",
                        "url" => "rapport/laddningstid",
                        "title" => "Laddningstid för kmom05",
                    ],
                ],
            ],
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                    [
                        "text" => "Kmom10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för kmom10.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Blogg: dagens bild",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Utsikt över Gifu, Japan",
                        "url" => "blogg/utsikt-over-gifu-japan",
                        "title" => "Utsikt över Gifu, Japan",
                    ],
                    [
                        "text" => "Food Sample",
                        "url" => "blogg/food-sample",
                        "title" => "Food Sample",
                    ],
                    [
                        "text" => "Matsumoto slott",
                        "url" => "blogg/matsumoto-slott",
                        "title" => "Matsumoto slott",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Introduktion",
                        "url" => "verktyg/index",
                        "title" => "",
                    ],
                    [
                        "text" => "Kmom01",
                        "url" => "verktyg/kmom01",
                        "title" => "",
                    ],
                    [
                        "text" => "Markdown",
                        "url" => "verktyg/markdown",
                        "title" => "",
                    ],
                    [
                        "text" => "Shortcode",
                        "url" => "verktyg/shortcode",
                        "title" => "",
                    ],
                    [
                        "text" => "Frontmatter",
                        "url" => "verktyg/frontmatter",
                        "title" => "",
                    ],
                    [
                        "text" => "Styleväljare",
                        "url" => "verktyg/stylevaljare",
                        "title" => "",
                    ],
                    [
                        "text" => "Vyer och templatefiler",
                        "url" => "verktyg/vyer-och-templatefiler",
                        "title" => "",
                    ],
                    [
                        "text" => "Layout och regioner",
                        "url" => "verktyg/layout-och-regioner",
                        "title" => "",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "verktyg/kmom02",
                        "title" => "",
                    ],
                    [
                        "text" => "Font Awesome",
                        "url" => "verktyg/font-awesome",
                        "title" => "",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "verktyg/kmom03",
                        "title" => "",
                    ],
                    [
                        "text" => "Viewport",
                        "url" => "verktyg/viewport",
                        "title" => "",
                    ],
                    [
                        "text" => "Vertikalt grid",
                        "url" => "verktyg/vertikalt-grid",
                        "title" => "",
                    ],
                    [
                        "text" => "Horisontellt (typografiskt) grid",
                        "url" => "verktyg/horisontellt-grid",
                        "title" => "",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "verktyg/kmom05",
                        "title" => "",
                    ],
                    [
                        "text" => "Bildhantering med Cimage",
                        "url" => "verktyg/bildhantering-med-cimage",
                        "title" => "",
                    ],
                    [
                        "text" => "Shortcode FIGURE",
                        "url" => "verktyg/shortcode-figure",
                        "title" => "",
                    ],
                    [
                        "text" => "LESS modul för FIGURE",
                        "url" => "verktyg/less-modul-for-figure",
                        "title" => "",
                    ],
                    [
                        "text" => "Bilder i text",
                        "url" => "verktyg/bilder-i-text",
                        "title" => "",
                    ],
                    [
                        "text" => "Övrigt",
                        "url" => "verktyg/ovrigt",
                        "title" => "",
                    ],
                    [
                        "text" => "Styla en route",
                        "url" => "verktyg/styla-en-route",
                        "title" => "",
                    ],
                ],
            ],
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "Testa olika konstruktioner i MarkDown",
        ],
    ],
];