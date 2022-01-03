<?php

use Carbon\Carbon;

$restaurants = [

    [
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Царевица": [
                ["", "malka-czarevicza", "Малка царевица", "0,70", "140", ""],
["", "golyama-czarevicza", "Голяма царевица", "1,40", "260", ""]

            ],

            "Желирани бонбони": [
                ["", "zhelirani-bonboni-mecheta", "Желирани бонбони мечета", "1,40", "100", ""],
["", "zhelirani-bonboni-tvrda-malina-i-kpina", "Желирани бонбони твърда малина и къпина", "1,40", "100", ""],
["", "zhelirani-bonboni-kola", "Желирани бонбони Кола", "1,40", "100", ""],
["", "zhelirani-bonboni-chervejcheta", "Желирани бонбони червейчета", "1,40", "100", ""],
["", "zhelirani-bonboni-marshmelou", "Желирани бонбони маршмелоу", "1,40", "100", ""],
["", "zhelirani-bonboni-miks", "Желирани бонбони микс", "1,40", "100", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "fanta-limon", "Fanta Лимон", "0,70", "500", ""],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "energijna-napitka-monster", "Енергийна напитка Monster", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'siti-centr-sladk-kt',
        'business_name' => 'Сити център - Сладък кът',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул. Търговска 45',
        'address_additional' => '',
        'coords_x' => '43.1357047',
        'coords_y' => '24.7170909',
        'phone' => '+359896673139',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "salads": [
                ["", "salata-ajsberg-s-pileshko-meso-i-mlechno-majonezen-sos", "Салата айсберг с пилешко месо и млечно майонезен сос", "4,20", "350", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "450", ""],
["", "salata-ajsberg-s-domati-i-krastaviczi", "Салата айсберг с домати и краставици", "3,50", "350", ""],
["", "salata-s-grilovani-zelenchuczi", "Салата с гриловани зеленчуци", "4,20", "350", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "morska-pyana", "Морска пяна", "3,50", "350", ""]

            ],

            "alaminuti": [
                ["", "parti-butcheta-s-barbekyu-sos-i-przheni-kartofki", "Парти бутчета с барбекю сос и пържени картофки", "5,60", "400", ""],
["", "parti-butcheta-s-gben-sos-i-przheni-kartofki", "Парти бутчета с гъбен сос и пържени картофки", "6,30", "400", ""],
["", "kyuftencza-przheni-s-gben-sos-i-przheni-kartofi", "Кюфтенца пържени с гъбен сос и пържени картофи", "4,20", "400", ""],
["", "pileshki-filencza-s-gben-sos-i-przheni-kartofki", "Пилешки филенца с гъбен сос и пържени картофки", "5,60", "400", ""],
["", "svinski-filencza-s-gben-sos-i-przheni-katofki-300gr0", "Свински филенца с гъбен сос и пържени катофки (300гр0", "6,30", "", ""],
["", "panirani-pileshki-khapki", "Панирани пилешки хапки", "4,20", "250", ""],
["", "panirani-svinski-zhulieni", "Панирани свински жулиени", "4,90", "250", ""],
["", "panirano-pileshko-file-s-przheni-kartofki", "Панирано пилешко филе с пържени картофки", "3,50", "300", ""],
["", "panirano-svinsko-file-s-przheni-kartofki", "Панирано свинско филе с пържени картофки", "3,50", "300", ""],
["", "kashkaval-pane-s-przheni-kartofki", "Кашкавал пане с пържени картофки", "3,50", "300", ""],
["", "kashkaval-na-plocha-s-przheni-kartofki", "Кашкавал на плоча с пържени картофки", "4,20", "350", ""],
["", "topeni-sirencza-ss-susam-i-sladko-ot-borovinki", "Топени сиренца със сусам и сладко от боровинки", "4,20", "220", ""],
["", "presni-przheni-kartofki", "Пресни пържени картофки", "2,80", "200", ""],
["", "presni-przheni-kartofki-ss-sirene", "Пресни пържени картофки със сирене", "3,50", "250", ""],
["", "zakuska-revyu", "Закуска Ревю", "4,20", "450", ""]

            ],

            "burgers": [
                ["", "burger-s-bekon-yajcze-i-chedr", "Бургер с бекон, яйце и чедър", "4,90", "500", ""],
["", "burger-s-teleshko-kyufte-yajcze-i-chedr", "Бургер с телешко кюфте, яйце и чедър", "4,90", "500", ""],
["", "burger-s-shniczel-yajcze-i-chedr", "Бургер с шницел, яйце и чедър", "4,20", "500", ""],
["", "burger-s-pileshko-file-yajcze-i-chedr", "Бургер с пилешко филе, яйце и чедър", "4,90", "500", ""],
["", "burger-svinsko-file-yajcze-i-chedr", "Бургер свинско филе, яйце и чедър", "6,30", "500", ""],
["", "burger-ss-svinsko-kyufte-yajcze-i-chedr", "Бургер със свинско кюфте, яйце и чедър", "4,20", "500", ""],
["", "riben-burger", "Рибен бургер", "4,90", "500", ""],
["", "burger-s-teleshko-kyufte-kamember-konfityur-ot-borovinki-yajcze-i-chedr", "Бургер с телешко кюфте, камембер, конфитюр от боровинки, яйце и чедър", "8,40", "500", ""],
["", "burger-ss-svinsko-kyufte-i-kamember-yajcze-i-chedr", "Бургер със свинско кюфте и камембер, яйце и чедър", "7,70", "", ""],
["", "chijzburger-s-kamember-sirene-yajcze-konfityur-ot-borovinki-i-chedr", "Чийзбургер с камембер, сирене, яйце, конфитюр от боровинки и чедър", "7,00", "", ""],
["", "burger-s-panirano-pileshko-file-yajcze-i-chedr", "Бургер с панирано пилешко филе, яйце и чедър", "4,90", "500", ""],
["", "pitka", "Питка", "0,00", "", ""]

            ]
        }', 
        'slug' => 'kafe-revyu',
        'business_name' => 'Кафе Ревю',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул. Академик Иширков 10',
        'address_additional' => '',
        'coords_x' => '43.13792619',
        'coords_y' => '24.71813912',
        'phone' => '+359876600327',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "dunners": [
                ["", "malk-dyuner", "Малък дюнер", "2,10", "150", ""],
["", "sreden-dyuner", "Среден дюнер", "2,80", "250", ""],
["", "golyam-dyuner", "Голям дюнер", "4,20", "350", ""],
["", "porcziya-dyuner", "Порция дюнер", "5,60", "400", ""]

            ],

            "burgers": [
                ["", "burger-s-yajcze-i-sirene", "Бургер с яйце и сирене", "2,80", "250", ""],
["", "burger-s-kashkaval-i-sirene", "Бургер с кашкавал и сирене", "2,80", "250", ""],
["", "burger-s-meso-ot-dyuner", "Бургер с месо от дюнер", "2,80", "280", ""],
["", "burger-ss-svinsko-meso", "Бургер със свинско месо", "2,80", "280", ""],
["", "burger-s-teleshko-meso", "Бургер с телешко месо", "3,50", "280", ""],
["", "burger-ss-svinsko-meso-xl", "Бургер със свинско месо XL", "4,20", "360", ""],
["", "burger-s-teleshko-meso-xl", "Бургер с телешко месо XL", "4,90", "360", ""]

            ],

            "Тостове": [
                ["", "tost-s-shunka", "Тост с шунка", "2,10", "220", ""],
["", "tost-s-shunka-i-sirene", "Тост с шунка и сирене", "2,10", "260", ""],
["", "tost-s-shunka-i-kashkaval", "Тост с шунка и кашкавал", "2,80", "260", ""],
["", "tost-s-kolbas-i-sirene", "Тост с колбас и сирене", "2,10", "260", ""],
["", "tost-s-kolbas-i-kashkaval", "Тост с колбас и кашкавал", "2,80", "260", ""]

            ],

            "pizza": [
                ["", "picza-vegi", "Пица Веги", "2,80", "250", ""],
["", "picza-goreshho", "Пица Горещо", "2,80", "250", ""],
["", "picza-momento", "Пица Моменто", "2,80", "250", ""]

            ],

            "Фалафел": [
                ["", "falafel-s-grczka-pitka", "Фалафел с гръцка питка", "2,80", "", ""],
["", "falafel-s-arabska-pitka-malka", "Фалафел с арабска питка малка", "2,10", "", ""],
["", "falafel-s-arabska-pitka-sreden", "Фалафел с арабска питка среден", "2,80", "", ""],
["", "falafel-s-arabska-pitka-golyam", "Фалафел с арабска питка голям", "2,80", "", ""],
["", "falafel", "Фалафел", "0,70", "", ""],
["", "porcziya-falafel-s-przheni-kartofi-i-garnitura", "Порция Фалафел с пържени картофи и гарнитура", "4,90", "", ""]

            ],

            "others": [
                ["", "khot-dog-klasik", "Хот Дог класик", "1,40", "200", ""],
["", "khot-dog-goreshho", "Хот Дог Горещо", "2,80", "230", ""],
["", "przheni-kartofki", "Пържени картофки", "1,40", "120", ""],
["", "przheni-kartofki-xl", "Пържени картофки XL", "2,10", "240", ""]

            ],

            "Coca-Cola  напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1001868.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1001869.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1001870.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1001871.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1001872.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1001873.jpg?width=302"]

            ],

            "drinks": [
                ["", "iso-sport", "Исо спорт", "0,70", "250", ""],
["", "ajryan", "Айрян", "0,70", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'goreshcho',
        'business_name' => 'Горещо',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул. Търговска 42',
        'address_additional' => '',
        'coords_x' => '43.13797987',
        'coords_y' => '24.71799049',
        'phone' => '+0878797222',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "salads": [
                ["", "salata-czezar", "Салата Цезар", "5,60", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "400", ""],
["", "proletna-salata", "Пролетна салата", "4,90", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "400", ""],
["", "salata-shef", "Салата Шеф", "5,60", "500", ""],
["", "morska-pyana", "Морска пяна", "4,20", "400", ""]

            ],

            "Традиционни салати": [
                ["", "shopska-salata", "Шопска салата", "3,50", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "lyutika-400gr", "Лютика (400гр)", "3,50", "", ""]

            ],

            "starters": [
                ["", "kashkaval-na-plocha", "Кашкавал на плоча", "3,50", "150", ""],
["", "panirani-sirencza-ss-sladko-ot-borovinki", "Панирани сиренца със сладко от боровинки", "4,20", "200", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "250", ""],
["", "teleshki-ezik-s-manatarki-i-chesn", "Телешки език с манатарки и чесън", "8,40", "200", ""],
["", "kalmari-ss-sladko-chili-i-susam", "Калмари със сладко чили и сусам", "8,40", "250", ""]

            ],

            "fish": [
                ["", "czipura", "Ципура", "11,90", "", ""],
["", "file-ot-somga-s-brokoli-i-limon", "Филе от сьомга с броколи и лимон", "12,60", "250", ""],
["", "pstrva-po-zhelanie-pechena-ili-przhena", "Пъстърва по желание печена или пържена", "7,00", "", ""],
["", "przhen-sharan", "Пържен шаран", "7,00", "300", ""]

            ],

            "Ястия от пилешко": [
                ["", "pile-parmidzhano", "Пиле Пармиджано", "7,70", "400", ""],
["", "pile-toskana", "Пиле Тоскана", "7,70", "300", ""]

            ],

            "Ястия от свинско": [
                ["", "dzholan-s-pikantni-kartofi-i-morkovi", "Джолан с пикантни картофи и моркови", "7,70", "500", ""],
["", "pecheni-rebra-s-medena-korichka-garnirani-ss-zadusheni-kartofi", "Печени ребра с медена коричка, гарнирани със задушени картофи", "7,00", "400", ""],
["", "mecha-lapa-stratesh", "Меча лапа Стратеш", "9,10", "400", ""]

            ],

            "Традиционна скара": [
                ["", "pileshko-file", "Пилешко филе", "4,90", "200", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "4,90", "200", ""],
["", "svinski-kotlet", "Свински котлет", "4,90", "200", ""],
["", "sudzhuk-na-skara", "Суджук на скара", "4,90", "250", ""],
["", "mekhandzhijsko-kyufte", "Механджийско кюфте", "2,10", "130", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "kebabche-1br", "Кебабче (1бр)", "0,70", "", ""]

            ],

            "Пържени и печени зеленчуци": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "180", ""],
["", "khrupkavi-tikvichki", "Хрупкави тиквички", "3,50", "250", ""],
["", "zelechuczi-na-plocha", "Зелечуци на плоча", "4,90", "500", ""]

            ],

            "desserts": [
                ["", "palachinka-s-shokolad-med-ili-sladko-po-izbor", "Палачинка /с шоколад, мед или сладко по избор/", "1,40", "", ""]

            ]
        }', 
        'slug' => 'restorant-stratesh',
        'business_name' => 'Ресторант Стратеш',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'Парк Стратеш, Парк Хотел',
        'address_additional' => '',
        'coords_x' => '43.13626683',
        'coords_y' => '24.72188486',
        'phone' => '+359888251616',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "grill": [
                ["", "pileshko-shishche", "Пилешко шишче", "1,40", "130", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "130", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "2,80", "250", ""],
["", "svinska-przhola-vrat", "Свинска пържола врат", "3,50", "250", ""],
["", "svinski-grdi", "Свински гърди", "4,20", "350", ""],
["", "presen-sudzhuk", "Пресен суджук", "3,50", "250", ""]

            ],

            "salads": [
                ["", "shopska", "Шопска", "2,10", "350", ""],
["", "ovcharska", "Овчарска", "2,80", "450", ""],
["", "grczka", "Гръцка", "3,50", "450", ""],
["", "kapreze", "Капрезе", "3,50", "550", ""]

            ],

            "Топли предястия": [
                ["", "kashkaval-khapki", "Кашкавал хапки", "2,80", "200", ""],
["", "kashkaval-s-kornflejks-i-sladko-ot-borovinki", "Кашкавал с корнфлейкс и сладко от боровинки", "3,50", "400", ""],
["", "pileshki-khapki", "Пилешки хапки", "2,80", "200", ""],
["", "pileshki-zhulien-ss-susam-i-mlechen-sos", "Пилешки жулиен със сусам и млечен сос", "3,50", "260", ""],
["", "pileshki-zhulieni-s-kornflejks-i-mlechen-sos", "Пилешки жулиени с корнфлейкс и млечен сос", "3,50", "260", ""],
["", "pileshki-zhulieni-s-khrupkava-panirovka-i-mlechen-sos", "Пилешки жулиени с хрупкава панировка и млечен сос", "3,50", "260", ""],
["", "sirene-khapki", "Сирене хапки", "2,10", "200", ""],
["", "topeno-sirene-s-khrupkava-panirovka-i-sladko-ot-borovinki", "Топено сирене с хрупкава панировка и сладко от боровинки", "3,50", "280", ""],
["", "topeno-sirene-s-kornflejks-i-sladko-ot-borovinki", "Топено сирене с корнфлейкс и сладко от боровинки", "3,50", "280", ""],
["", "pryasno-przheni-kartofi", "Прясно пържени картофи", "1,40", "250", ""],
["", "pryasno-przheni-kartofi-ss-sirene", "Прясно пържени картофи със сирене", "2,10", "300", ""],
["", "pileshki-drob-s-luk", "Пилешки дроб с лук", "2,80", "300", ""],
["", "svinski-drob-s-luk", "Свински дроб с лук", "2,80", "300", ""],
["", "zadusheni-pileshki-srcza", "Задушени пилешки сърца", "2,80", "250", ""],
["", "mlechno-chesnov-sos", "Млечно чеснов сос", "0,00", "100", ""],
["", "sladko-ot-borovinki", "Сладко от боровинки", "0,70", "100", ""]

            ],

            "Основни ястия": [
                ["", "pileshka-przhola-s-gben-sos-i-kartofeno-pyure", "Пилешка пържола с гъбен сос и картофено пюре", "4,90", "480", ""],
["", "svinska-przhola-s-gben-sos-i-kartofeno-pyure", "Свинска пържола с гъбен сос и картофено пюре", "4,90", "480", ""],
["", "pile-na-gril--przheni-kartofi--prlenka--sos", "Пиле на грил + пържени картофи + пърленка + сос", "9,10", "", ""],
["", "svinski-grdi-na-gril--przhni-kartofi--prlenka--sos", "Свински гърди на грил + пържни картофи + пърленка + сос", "8,40", "850", ""],
["", "sach-ss-zelenchuczi-i-svinsko-meso", "Сач със зеленчуци и свинско месо", "4,90", "500", ""],
["", "sach-ss-zelenchuczi-i-pileshko-meso", "Сач със зеленчуци и пилешко месо", "4,90", "500", ""]

            ],

            "Рибни ястия": [
                ["", "sharan-na-tigan", "Шаран на тиган", "5,60", "300", ""],
["", "pstrva-na-tigan", "Пъстърва на тиган", "6,30", "350", ""]

            ],

            "Домашно приготвени пърленки": [
                ["", "prlenka-s-maslo", "Пърленка с масло", "0,70", "150", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "0,70", "150", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "190", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "190", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "140", ""],
["", "czedeno-mlyako", "Цедено мляко", "1,40", "150", ""],
["", "frenska-selska-torta", "Френска селска торта", "1,40", "130", ""]

            ]
        }', 
        'slug' => 'color-club',
        'business_name' => 'Color club',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул.Търговска 70',
        'address_additional' => '',
        'coords_x' => '43.14490418',
        'coords_y' => '24.7191444',
        'phone' => '+359899840079',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "salads": [
                ["", "zelena-salata-s-czarevicza", "Зелена салата с царевица", "3,50", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "350", ""],
["", "domati", "Домати", "2,10", "300", ""],
["", "krastaviczi", "Краставици", "2,10", "300", ""],
["", "meshana-salata", "Мешана салата", "2,10", "350", ""],
["", "buraniya", "Бурания", "2,80", "200", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "200", ""],
["", "oranzheva-salata", "Оранжева салата", "2,10", "300", ""],
["", "zele-s-majoneza", "Зеле с майонеза", "2,10", "300", ""],
["", "bogata-salata", "Богата салата", "5,60", "550", ""],
["", "kombinirana-salata", "Комбинирана салата", "2,80", "350", ""],
["", "tikvichki-s-mlyako", "Тиквички с мляко", "2,10", "200", ""],
["", "tikvichki-podlucheni", "Тиквички подлучени", "2,10", "150", ""],
["", "kartofi-s-majoneza", "Картофи с майонеза", "2,10", "250", ""],
["", "lyutika", "Лютика", "2,80", "300", ""],
["", "salata-kartofi", "Салата картофи", "2,10", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "", ""],
["", "shopska-salata", "Шопска салата", "2,80", "", ""]

            ],

            "dry-appetizer": [
                ["", "vodenichki-s-luk-v-maslo", "Воденички с лук в масло", "3,50", "200", ""],
["", "pileshki-srcza", "Пилешки сърца", "3,50", "200", ""],
["", "kashkaval-khapki", "Кашкавал хапки", "2,80", "200", ""],
["", "shunka-khapki", "Шунка хапки", "2,10", "200", ""],
["", "topeno-sirene-pane", "Топено сирене пане", "2,80", "150", ""],
["", "kartofi", "Картофи", "1,40", "100", ""],
["", "kartofi-ss-sirene", "Картофи със сирене", "2,10", "200", ""],
["", "sirene-khapki", "Сирене хапки", "2,10", "200", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,80", "150", ""],
["", "pileshki-khashki-v-kornflejks", "Пилешки хашки в корнфлейкс", "3,50", "200", ""],
["", "chesnovi-kartofki", "Чеснови картофки", "2,10", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "300", ""],
["", "ezik-natyur", "Език натюр", "3,50", "100", ""]

            ],

            "alaminuti": [
                ["", "shunka-pane", "Шунка пане", "2,10", "150", ""],
["", "omlet-natyur", "Омлет натюр", "1,40", "150", ""],
["", "omlet-po-selski", "Омлет по селски", "2,80", "150", ""],
["", "omlet-po-izbor", "Омлет по избор", "2,10", "150", ""],
["", "yajcza-na-ochi", "Яйца на очи", "1,40", "", ""],
["", "yajcza-po-panagyurski", "Яйца по Панагюрски", "2,10", "300", ""],
["", "yajcza-po-chirpanski", "Яйца по Чирпански", "2,10", "300", ""],
["", "mish-mash", "Миш-маш", "2,80", "250", ""],
["", "shniczel", "Шницел", "2,80", "150", ""],
["", "ezik-pane", "Език пане", "4,90", "150", ""],
["", "ezik-v-maslo", "Език в масло", "4,20", "120", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "150", ""],
["", "chushki-byurek", "Чушки бюрек", "2,80", "150", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "150", ""],
["", "sirene-po-trakijski", "Сирене по Тракийски", "3,50", "150", ""],
["", "sirene-pane", "Сирене пане", "2,80", "200", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "2,80", "250", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "200", ""]

            ],

            "Ястия от пилешко": [
                ["", "pileshka-przhola---file", "Пилешка пържола - филе", "3,50", "200", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,90", "300", ""],
["", "pileshki-shish", "Пилешки шиш", "1,40", "100", ""],
["", "pileshka-przhola-s-gbi", "Пилешка пържола с гъби", "4,90", "250", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "4,90", "250", ""],
["", "pileshko-file-pane", "Пилешко филе пане", "4,20", "200", ""],
["", "pileshka-przhola---butche", "Пилешка пържола - бутче", "3,50", "200", ""],
["", "pileshka-kavrma-v-omlet", "Пилешка кавърма в омлет", "5,60", "", ""]

            ],

            "Ястия от свинско и телешко": [
                ["", "svinska-przhola-s-luk-i-yajcze", "Свинска пържола с лук и яйце", "4,90", "300", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,90", "300", ""],
["", "drusan-kebap", "Друсан кебап", "4,90", "300", ""],
["", "drusan-kebap-po-starozagorski", "Друсан кебап по Старозагорски", "4,90", "330", ""],
["", "shniczel-meso", "Шницел месо", "4,20", "250", ""],
["", "shniczel-kajma", "Шницел кайма", "2,80", "200", ""],
["", "svinska-przhola-s-gbi", "Свинска пържола с гъби", "4,90", "250", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "svinski-shish", "Свински шиш", "1,40", "100", ""],
["", "svinska-przhola-vratna", "Свинска пържола вратна", "4,20", "100", ""],
["", "kareta-s-limon", "Карета с лимон", "4,90", "150", ""],
["", "kavrma-kebap", "Кавърма кебап", "4,90", "", ""],
["", "kavrma-kebap-v-omlet", "Кавърма кебап в омлет", "5,60", "", ""]

            ],

            "Рибни ястия": [
                ["", "sharan", "Шаран", "5,60", "200", ""],
["", "czacza", "Цаца", "2,10", "200", ""],
["", "som", "Сом", "7,00", "200", ""],
["", "medzhit", "Меджит", "4,20", "200", ""],
["", "byala-riba-pane", "Бяла риба пане", "3,50", "150", ""],
["", "kalmari-pane", "Калмари пане", "5,60", "150", ""],
["", "skumriya-na-skara", "Скумрия на скара", "3,50", "", ""],
["", "salaka", "Салака", "4,20", "", ""]

            ],

            "lunch": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "300", ""],
["", "teleshka-supa", "Телешка супа", "1,40", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""],
["", "bobena-supa", "Бобена супа", "0,70", "300", ""],
["", "cherveno-teleshko", "Червено телешко", "3,50", "400", ""],
["", "panirana-byala-riba", "Панирана бяла риба", "3,50", "400", ""],
["", "pile-ss-zele", "Пиле със зеле", "2,80", "400", ""],
["", "yajcza-po-pangyurski", "Яйца по пангюрски", "2,10", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "400", ""],
["", "bob-s-nadenicza", "Боб с наденица", "2,80", "400", ""],
["", "prlenka", "Пърленка", "0,70", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "palachinka", "Палачинка", "1,40", "", ""],
["", "tikvichki-s-yajcze-i-sirene", "Тиквички с яйце и сирене", "2,10", "400", ""]

            ],

            "Ганитури": [
                ["", "pryasna-garnitura", "Прясна гарнитура", "2,10", "", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "2,10", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""],
["", "prlenka-bulgaro", "Пърленка Булгаро", "2,10", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "", ""],
["", "prlenka-s-kajma-i-kashkaval", "Пърленка с кайма и кашкавал", "2,10", "", ""],
["", "prlenka-s-kajma", "Пърленка с кайма", "2,10", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""]

            ]
        }', 
        'slug' => 'snek-bar-bulgaro',
        'business_name' => 'Снек Бар Булгаро',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'Ул. Търговска 55',
        'address_additional' => '',
        'coords_x' => '43.13803304',
        'coords_y' => '24.71755047',
        'phone' => '+359895410495',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Салатки": [
                ["", "shopska-salata", "Шопска салата", "3,50", "350", ""],
["", "kalugerska-salata", "Калугерска салата", "4,20", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "400", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "350", ""],
["", "morska-pyana", "Морска пяна", "3,50", "350", ""],
["", "selska-salata", "Селска салата", "4,20", "400", ""],
["", "salata-kompoze", "Салата Композе", "4,20", "350", ""],
["", "salata-amante", "Салата Аманте", "4,20", "400", ""],
["", "topla-salata", "Топла салата", "4,90", "400", ""],
["", "salata-doli", "Салата Доли", "5,60", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "350", ""]

            ],

            "Мезелъци": [
                ["", "sirene-natyur", "Сирене натюр", "2,10", "150", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "2,80", "150", ""],
["", "sudzhuk", "Суджук", "4,20", "100", ""],
["", "lukanka", "Луканка", "4,20", "100", ""],
["", "file-elena", "Филе Елена", "6,30", "100", ""],
["", "pastrma", "Пастърма", "7,00", "100", ""]

            ],

            "Топли мезелъци и предястия": [
                ["", "kashkaval-na-plocha", "Кашкавал на плоча", "4,90", "200", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "200", ""],
["", "magdanozeni-kyuftencza", "Магданозени кюфтенца", "3,50", "200", ""],
["", "spanacheni-kyuftencza", "Спаначени кюфтенца", "3,50", "200", ""],
["", "gbi-v-maslo", "Гъби в масло", "3,50", "200", ""],
["", "kartofi-s-luk-i-bekon", "Картофи с лук и бекон", "2,80", "350", ""],
["", "chips-topl", "Чипс топъл", "3,50", "150", ""],
["", "tikvichki-podlucheni", "Тиквички подлучени", "3,50", "150", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "400", ""],
["", "mish-mash-po-selski", "Миш-маш по селски", "4,20", "400", ""],
["", "predyastie-drakata", "Предястие Драката", "4,90", "300", ""],
["", "sirene-s-med-v-sakhanche", "Сирене с мед в саханче", "3,50", "200", ""],
["", "kachamak-ss-sirene", "Качамак със сирене", "4,20", "350", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,90", "250", ""],
["", "panirani-sirencza-ss-susam", "Панирани сиренца със сусам", "3,50", "250", ""],
["", "panirani-kashkavaleni-khapki", "Панирани кашкавалени хапки", "5,60", "250", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,90", "300", ""],
["", "pileshki-flejki-s-kornflejks", "Пилешки флейки с корнфлейкс", "4,90", "200", ""],
["", "przheni-kalmari", "Пържени калмари", "9,10", "200", ""],
["", "shkembe-v-sakhanche", "Шкембе в саханче", "4,90", "200", ""],
["", "svinski-kracheta", "Свински крачета", "4,90", "200", ""],
["", "svinski-ushi", "Свински уши", "4,90", "200", ""],
["", "przheni-skaridi", "Пържени скариди", "9,10", "150", ""],
["", "okhlyuvi-po-burgundski", "Охлюви по бургундски", "8,40", "80", ""]

            ],

            "sachs": [
                ["", "zelenchukov-sach", "Зеленчуков сач", "6,30", "600", ""],
["", "sach-s-pileshko-meso", "Сач с пилешко месо", "9,10", "750", ""],
["", "sach-ss-svinsko-meso", "Сач със свинско месо", "10,50", "750", ""],
["", "kombiniran-sach", "Комбиниран сач", "13,30", "750", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "1,40", "120", ""],
["", "kebapche", "Кебапче", "1,40", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "125", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "125", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "9,10", "500", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "300", ""],
["", "svinski-shashlik", "Свински шашлик", "11,20", "500", ""],
["", "svinski-grdi", "Свински гърди", "7,00", "450", ""],
["", "pileshko-file", "Пилешко филе", "6,30", "240", ""],
["", "shashlik-drakata", "Шашлик Драката", "14,70", "500", ""],
["", "pileshka-przhola", "Пилешка пържола", "5,60", "300", ""],
["", "meshani-mesa-v-plato", "Мешани меса в плато", "33,60", "1500", ""]

            ],

            "Пилешки ястия": [
                ["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "7,70", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "7,70", "450", ""],
["", "pile-ss-spanak-i-sos-ot-chetiri-sirena", "Пиле със спанак и сос от четири сирена", "9,10", "350", ""],
["", "pileshki-kscheta", "Пилешки късчета", "8,40", "220", ""]

            ],

            "Свински ястия": [
                ["", "svinski-dzholan", "Свински джолан", "8,40", "400", ""],
["", "svinski-rebra-s-pikanten-sos", "Свински ребра с пикантен сос", "9,10", "400", ""],
["", "svinski-kscheta", "Свински късчета", "9,10", "220", ""],
["", "svinska-przhola-s-luk-i-yajcze", "Свинска пържола с лук и яйце", "9,10", "400", ""],
["", "przhola-barni", "Пържола Барни", "7,70", "300", ""],
["", "svinska-kavrma", "Свинска кавърма", "9,10", "450", ""],
["", "svinsko-file-saragosa", "Свинско филе Сарагоса", "9,80", "300", ""]

            ],

            "Рибни ястия": [
                ["", "file-ot-pstrva-na-plocha", "Филе от пъстърва на плоча", "8,40", "250", ""],
["", "sharan-przhen", "Шаран пържен", "7,70", "300", ""]

            ],

            "Телешки ястия": [
                ["", "teleshko-s-tri-vida-piper", "Телешко с три вида пипер", "21,00", "350", ""],
["", "teleshki-kscheta", "Телешки късчета", "16,80", "230", ""]

            ],

            "Варошлийска кухня": [
                ["", "kasapsko-meze", "Касапско мезе", "7,00", "200", ""],
["", "brkana-salata", "Бъркана салата", "3,50", "300", ""],
["", "pile-salamura", "Пиле саламура", "2,80", "400", ""],
["", "bob-ss-slanina", "Боб със сланина", "3,50", "400", ""]

            ],

            "Гарнитури и притурки": [
                ["", "przheni-kartofki", "Пържени картофки", "2,10", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "zelenchuczi-pecheni-na-skara", "Зеленчуци печени на скара", "3,50", "300", ""],
["", "zadushen-oriz", "Задушен ориз", "1,40", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""],
["", "kartofi-pikantni", "Картофи пикантни", "2,80", "200", ""],
["", "przheni-kartofki-ss-sirene", "Пържени картофки със сирене", "2,80", "250", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,80", "250", ""]

            ],

            "bread": [
                ["", "prlenka", "Пърленка", "0,70", "", ""],
["", "pitka", "Питка", "0,00", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "vezuvij-s-med-i-orekhi", "Везувий с мед и орехи", "2,80", "200", ""],
["", "krem-bryule", "Крем Брюле", "3,50", "150", ""],
["", "shokoladovo-famozo", "Шоколадово фамозо", "3,50", "160", ""],
["", "vezuvij-ss-sladko-ot-borovinki", "Везувий със сладко от боровинки", "2,80", "200", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "160", ""],
["", "palachinki", "Палачинки", "2,10", "", ""],
["", "baklava", "Баклава", "2,10", "150", ""]

            ],

            "Coca-Cola напитки": [
                ["", "schweppes-tonik", "Schweppes Тоник", "0,70", "250", ""],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "250", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "250", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "250", ""]

            ],

            "beer": [
                ["", "stela-artoa", "Стела Артоа", "2,10", "500", ""],
["", "shumensko", "Шуменско", "1,40", "", ""],
["", "karlsberg", "Карлсберг", "2,10", "500", ""],
["", "tuborg", "Туборг", "1,40", "", ""],
["", "budvajzer", "Будвайзер", "2,10", "500", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,70", "330", ""],
["", "mineralna-voda", "Минерална вода", "1,40", "", ""],
["", "red-bul", "Ред Бул", "4,20", "250", ""]

            ]
        }', 
        'slug' => 'restorant-drakata',
        'business_name' => 'Ресторант Драката',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'пл. Тодор Кирков 36',
        'address_additional' => '',
        'coords_x' => '43.1318443',
        'coords_y' => '24.7171969',
        'phone' => '+35968604020',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "salads": [
                ["", "shopska-salata", "Шопска салата", "4,20", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "500", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "500", ""],
["", "belen-domat-s-pechena-chushka-i-sirene-dekorirano-s-pesto", "Белен домат с печена чушка и сирене декорирано с песто", "4,20", "400", ""],
["", "salata-ala-kapreze", "Салата Ала Капрезе", "4,90", "400", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "450", ""],
["", "salata-burata", "Салата Бурата", "7,00", "400", ""]

            ],

            "Топли предястия": [
                ["", "kashkaval-pane", "Кашкавал пане", "4,20", "220", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,20", "220", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "220", ""],
["", "teleshki-khapki-s-gbi-i-presen-luk", "Телешки хапки с гъби и пресен лук", "9,80", "250", ""],
["", "sotirani-gbi-v-maslo", "Сотирани гъби в масло", "3,50", "220", ""],
["", "kalmari-pane", "Калмари пане", "7,00", "220", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "pryasno-przheni-kartofi", "Прясно пържени картофи", "2,80", "250", ""],
["", "svinski-khapki-s-gbi-i-presen-luk", "Свински хапки с гъби и пресен лук", "6,30", "250", ""]

            ],

            "Бургер": [
                ["", "big-max", "Big Max", "6,30", "350", ""],
["", "big-bobby", "Big Bobby", "6,30", "350", ""],
["", "big-mad-chicken", "Big Mad Chicken", "6,30", "350", ""],
["", "big-fish-criminal", "Big Fish Criminal", "9,80", "350", ""],
["", "mexican-karnitas", "Mexican Karnitas", "6,30", "350", ""],
["", "porcziya-dyuner-s-drpano-svinsko-karnitas", "Порция дюнер с дърпано свинско Карнитас", "5,60", "", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,90", "", ""],
["", "peperone", "Пепероне", "7,00", "", ""],
["", "kaprichoza", "Капричоза", "5,60", "", ""],
["", "proshuto-fungi", "Прошуто фунги", "5,60", "", ""],
["", "polo", "Поло", "5,60", "", ""],
["", "alfredo", "Алфредо", "5,60", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "5,60", "", ""],
["", "uovo", "Уово", "5,60", "", ""],
["", "krokante", "Кроканте", "6,30", "", ""],
["", "vegetariana", "Вегетариана", "5,60", "", ""],
["", "maksi", "Макси", "7,70", "", ""],
["", "bobo", "Бобо", "6,30", "", ""],
["", "kalabreze", "Калабрезе", "7,00", "", ""],
["", "freska", "Фреска", "7,00", "", ""]

            ],

            "Паста и Ризото": [
                ["", "papardele-boloneze", "Папарделе Болонезе", "5,60", "400", ""],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "5,60", "400", ""],
["", "rizoto-s-divi-gbi", "Ризото с диви гъби", "5,60", "400", ""],
["", "pasta-s-manatarka", "Паста с манатарка", "8,40", "400", ""]

            ],

            "Основни ястия": [
                ["", "teleshki-stek-maksi", "Телешки стек Макси", "20,30", "450", ""]

            ],

            "BBQ": [
                ["", "svinski-rebra-s-barbekyu-sos-i-zapechen-kartof", "Свински ребра с барбекю сос и запечен картоф", "7,70", "550", ""],
["", "teleshko-kyufte-s-przheni-kartofi", "Телешко кюфте с пържени картофи", "6,30", "450", ""],
["", "svinski-vratni-kareta-ss-zapechen-kartof", "Свински вратни карета със запечен картоф", "6,30", "650", ""],
["", "svinski-rebra-ss-zapechen-kartof", "Свински ребра със запечен картоф", "7,70", "550", ""],
["", "pileshka-przhola-s-kartofi-po-selski", "Пилешка пържола с картофи по селски", "6,30", "450", ""],
["", "pileshko-file-s-przheni-kartofi", "Пилешко филе с пържени картофи", "6,30", "450", ""]

            ],

            "sauces": [
                ["", "mango-sos", "Манго сос", "0,70", "30", ""],
["", "khajncz-ketchup", "Хайнц кетчуп", "0,70", "30", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "30", ""],
["", "sladko-chili", "Сладко чили", "0,70", "30", ""],
["", "lyuto-chili", "Люто чили", "0,70", "30", ""],
["", "medena-gorchicza", "Медена горчица", "0,70", "30", ""]

            ],

            "bread": [
                ["", "fokacha-s-edra-sol-i-rozmarin", "Фокача с едра сол и розмарин", "1,40", "250", ""],
["", "fokacha-s-chesnovo-maslo", "Фокача с чесново масло", "1,40", "250", ""],
["", "fokacha-natyur", "Фокача натюр", "1,40", "250", ""],
["", "fokacha-s-parmezan", "Фокача с пармезан", "1,40", "250", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta-s-nutela", "Бисквитена торта с нутела", "2,80", "150", ""],
["", "chijzkejk-s-portokalovo-sladko", "Чийзкейк с портокалово сладко", "2,80", "150", ""]

            ],

            "drinks": [
                ["", "khajneken", "Хайнекен", "2,10", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1097152.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1097153.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1097154.jpg?width=302"]

            ]
        }', 
        'slug' => 'pizza-bbq-maxi',
        'business_name' => 'Pizza &amp; BBQ Maxi',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул. Тракийска 19',
        'address_additional' => '',
        'coords_x' => '43.13331086',
        'coords_y' => '24.71151542',
        'phone' => '+359895070705',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "salads": [
                ["", "shopska-salata", "Шопска салата", "4,20", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "tabule", "Табуле", "5,60", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "400", ""],
["", "lyutika", "Лютика", "4,90", "400", ""],
["", "salata-ponte", "Салата Понте", "9,10", "320", ""],
["", "pstra-salata", "Пъстра салата", "5,60", "350", ""],
["", "salata-kareze", "Салата Карезе", "7,00", "400", ""],
["", "salata-rukola-ss-sushen-domat-i-bejbo-moczarela", "Салата рукола със сушен домат и бейбо моцарела", "6,30", "250", ""],
["", "salata-czezar", "Салата Цезар", "6,30", "400", ""],
["", "salata-pile", "Салата Пиле", "4,90", "400", ""],
["", "salata-vitamina", "Салата Витамина", "4,20", "350", ""]

            ],

            "Супи и Сандвичи": [
                ["", "sandvich-s-pile", "Сандвич с пиле", "5,60", "400", ""],
["", "anglijska-zakuska", "Английска закуска", "5,60", "450", ""],
["", "teleshki-burger-s-kartofi-i-s-burger-sos", "Телешки бургер с картофи и с бургер сос", "8,40", "400", ""],
["", "bageta-s-guakamole-i-yajcze", "Багета с гуакамоле и яйце", "5,60", "250", ""]

            ],

            "Домашни брускети": [
                ["", "brusketi-s-guakamole", "Брускети с гуакамоле", "4,90", "250", ""],
["", "brusketi-s-maslinova-pasta-parmezan-i-cheri-domati", "Брускети с маслинова паста, пармезан и чери домати", "4,90", "250", ""],
["", "brusketi-s-domat-i-moczarela", "Брускети с домат и моцарела", "3,50", "250", ""],
["", "brusketi-s-maskarpone-i-pushena-somga", "Брускети с маскарпоне и пушена сьомга", "6,30", "", ""]

            ],

            "appetizer": [
                ["", "kompozicziya-ot-razyadki", "Композиция от Разядки", "4,20", "250", ""],
["", "domashen-katk", "Домашен катък", "4,20", "200", ""],
["", "lukanka", "Луканка", "2,10", "50", ""],
["", "teleshki-sudzhuk", "Телешки суджук", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "3,50", "50", ""],
["", "kashkaval", "Кашкавал", "3,50", "100", ""],
["", "krave-sirene", "Краве сирене", "2,10", "100", ""],
["", "bivolsko-sirene", "Биволско сирене", "3,50", "100", ""],
["", "maslini-kalamata", "Маслини Каламата", "3,50", "200", ""],
["", "tirokafteri", "Тирокафтери", "3,50", "250", ""],
["", "ovche-sirene", "Овче сирене", "2,80", "100", ""]

            ],

            "starters": [
                ["", "spanacheni-kyuftencza-podneseni-s-mlechen-sos-300g", "Спаначени кюфтенца поднесени с млечен сос (300г", "2,80", "", ""],
["", "tikvichki-na-skara-s-bivolsko-sirene-i-pesto-sos", "Тиквички на скара с биволско сирене и песто сос", "4,20", "300", ""],
["", "zapecheno-ovche-sirene-s-med-i-orekhi", "Запечено овче сирене с мед и орехи", "4,90", "200", ""],
["", "zapecheno-krave-sirene-s-med-i-orekhi", "Запечено краве сирене с мед и орехи", "3,50", "200", ""],
["", "teleshki-ezik", "Телешки език", "5,60", "180", ""],
["", "panirani-frenski-sirencza-ss-sladko-ot-borovinki", "Панирани френски сиренца със сладко от боровинки", "5,60", "300", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "240", ""],
["", "spanachena-palachinka-s-pushena-somga-i-krem-maskarpone-krema-sireen-i-avokado", "Спаначена палачинка с пушена сьомга и крем маскарпоне, крема сиреен и авокадо", "5,60", "280", ""],
["", "marinovani-pecheni-zelenchuczi-na-skara", "Мариновани печени зеленчуци на скара", "3,50", "350", ""],
["", "chips-ot-tikvichki-i-cherveno-czveklo", "Чипс от тиквички и червено цвекло", "3,50", "250", ""],
["", "brokoli-ss-sino-sirene", "Броколи със синьо сирене", "3,50", "350", ""],
["", "pileshki-flejki-s-aromatna-korichka-ot-bilki-i-parmezan", "Пилешки флейки с ароматна коричка от билки и пармезан", "5,60", "240", ""],
["", "przheni-pileshki-krilcza-ss-sladk-chili-sos", "Пържени пилешки крилца със сладък чили сос", "3,50", "300", ""],
["", "khrupkavi-kalmari", "Хрупкави калмари", "8,40", "200", ""],
["", "plneni-kalmari-ss-sirena", "Пълнени калмари със сирена", "10,50", "400", ""],
["", "skaridi-v-dzhindzhifilovo-maslo-i-chesn", "Скариди в джинджифилово масло и чесън", "14,00", "200", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "4,90", "200", ""],
["", "pileshki-filencza-s-parmezan", "Пилешки филенца с пармезан", "5,60", "240", ""]

            ],

            "Италиански антипасти": [
                ["", "proshuto-parmezan-piperoni-salam-moczarela", "Прошуто, пармезан, пиперони салам, моцарела", "8,40", "300", ""],
["", "presni-przheniu-kartofi", "Пресни пържениу картофи", "2,80", "200", ""],
["", "blanshirani-przheni-kartofi", "Бланширани пържени картофи", "2,10", "200", ""],
["", "kartofi-po-selski-s-kopr-i-chesn", "Картофи по селски с копър и чесън", "2,10", "300", ""],
["", "plato-italianski-sirena-podneseni-s-plod-i-yadki", "Плато италиански сирена, поднесени с плод и ядки", "11,20", "350", ""]

            ],

            "pasta": [
                ["", "spageti-s-manatarki-cheri-domati-parmezan-i-chesn", "Спагети с манатарки, чери домати, пармезан и чесън", "5,60", "380", ""],
["", "spageti-s-teleshko-meso", "Спагети с телешко месо", "6,30", "380", ""],
["", "pryasna-pasta-nero-di-sepia-ss-skaridi-cheri-domatii-chesn", "Прясна паста nero di sepia със скариди, чери доматии чесън", "8,40", "380", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "380", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "380", ""]

            ],

            "risotto": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,90", "380", ""],
["", "rizoto-ss-somga", "Ризото със сьомга", "5,60", "380", ""],
["", "rizoto-s-manatarki-lajm-i-maskarpone", "Ризото с манатарки, лайм и маскарпоне", "4,90", "380", ""],
["", "rizoto-s-pile-i-presni-zelenchiczi", "Ризото с пиле и пресни зеленчици", "4,20", "380", ""],
["", "rizoto-s-teleshko-meso-i-artishok", "Ризото с телешко месо и артишок", "6,30", "380", ""]

            ],

            "Пица на пещ": [
                ["", "picza-ponte", "Пица Понте", "5,60", "400", ""],
["", "picza-margarita", "Пица Маргарита", "4,20", "400", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,20", "400", ""],
["", "formadzhi", "Формаджи", "5,60", "400", ""],
["", "picza-polo", "Пица Поло", "4,90", "400", ""],
["", "speshl", "Спешъл", "4,90", "400", ""],
["", "piperone", "Пипероне", "5,60", "400", ""]

            ],

            "sauces": [
                ["", "sos-chetiri-sirena", "Сос четири сирена", "1,40", "100", ""],
["", "pikanten-sos", "Пикантен сос", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""]

            ],

            "Основни ястия": [
                ["", "pile-stiltn", "Пиле Стилтън", "8,40", "400", ""],
["", "pile-meksiko", "Пиле Мексико", "9,10", "400", ""],
["", "medeno-pile-s-brokoli-i-susam", "Медено пиле с броколи и сусам", "8,40", "400", ""],
["", "chikn-brest", "Чикън брест", "8,40", "400", ""],
["", "svinski-medaloni-s-manatarki-i-kartofeno-pyure", "Свински медальони с манатарки и картофено пюре", "9,10", "400", ""],
["", "svinsko-dzholanche-s-pechen-sos-i-zadusheni-kartofi", "Свинско джоланче с печен сос и задушени картофи", "11,20", "500", ""],
["", "svinski-kotlet-s-kartofeno-pyure-i-mashherka", "Свински котлет с картофено пюре и мащерка", "9,80", "450", ""],
["", "svinski-kscheta-v-smetanov-sos-i-rozmarin-podneseni-s-div-oriz", "Свински късчета в сметанов сос и розмарин, поднесени  с див ориз", "9,10", "350", ""],
["", "marinovani-svinski-kontra-filencza-na-tigan-s-chili-i-lajm-podneseni-ss-sotirani-kartofi", "Мариновани свински контра филенца на тиган с чили и лайм, поднесени със сотирани картофи", "9,10", "350", ""],
["", "domashni-karnacheta-podneseni-ss-zelenchukov-shish-i-kartofi-po-selski", "Домашни карначета, поднесени със зеленчуков шиш и картофи по селски", "8,40", "350", ""],
["", "stek-serviran-s-plnen-kartof-s-manatarka-i-sos-braten-dzhus", "Стек, сервиран с пълнен картоф с манатарка и сос Братен Джус", "25,20", "550", ""],
["", "teleshko-burginon", "Телешко Бургиньон", "21,70", "400", ""],
["", "teleshko-bof-stroganov", "Телешко Бьоф Строганов", "21,00", "400", ""],
["", "teleshko-s-gbi-pachi-krak-i-vid-oriz-basmati", "Телешко с гъби пачи крак и вид ориз Басмати", "21,70", "400", ""],
["", "pepr-stek-s-tri-vida-piper", "Пепър стек с три вида пипер", "21,00", "250", ""],
["", "pileshki-kscheta-ss-sushen-domat-manatarki-i-kartofeno-pyure", "Пилешки късчета със сушен домат, манатарки и картофено пюре", "8,40", "400", ""]

            ],

            "Ястия от риба": [
                ["", "file-ot-somga-na-tigan-s-div-oriz-basmati-ili-kartofi", "Филе от сьомга на тиган с див ориз басмати или картофи", "16,80", "400", ""]

            ],

            "barbecue": [
                ["", "domashna-nadenichka-na-gril-podnesena-s-przheni-kartofki-i-domashno-prigotvena-lyutenichka", "Домашна наденичка на грил, поднесена с пържени картофки и домашно приготвена лютеничка", "6,30", "450", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "5,60", "400", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "400", ""],
["", "pikantni-svinski-rebrcza", "Пикантни свински ребърца", "9,80", "400", ""],
["", "teleshko-bolyarsko-kyufte", "Телешко болярско кюфте", "7,70", "400", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "180", ""]

            ],

            "bread": [
                ["", "fokacha", "Фокача", "0,70", "200", ""],
["", "fokacha-s-chesn", "Фокача с чесън", "0,70", "200", ""],
["", "fokacha-s-parmezan-i-rigan", "Фокача с пармезан и риган", "1,40", "200", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "200", ""],
["", "bageta", "Багета", "0,70", "", ""],
["", "filiya-khlyab-s-krave-maslo-i-sharena-sol", "Филия хляб с краве масло и шарена сол", "0,00", "", ""],
["", "filiya-cheren-khlyab", "Филия черен хляб", "0,00", "", ""]

            ]
        }', 
        'slug' => 'ponte',
        'business_name' => 'Ponte',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул. Тодор Кирков 1',
        'address_additional' => '',
        'coords_x' => '43.13257182',
        'coords_y' => '24.71770942',
        'phone' => '+359885601111',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Нови предложения": [
                ["", "uzo-meze", "Узо мезе", "5,60", "300", ""],
["", "skaridi", "Скариди", "11,20", "200", ""],
["", "pasta-s-morski-darove", "Паста с морски дарове", "4,90", "320", ""],
["", "krekhki-svinski-rebrcza", "Крехки свински ребърца", "9,10", "600", ""],
["", "teleshki-rebrcza", "Телешки ребърца", "11,20", "650", ""],
["", "teleshki-buzi", "Телешки бузи", "9,80", "250", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "200", ""],
["", "salata-ss-spanak-i-limecz", "Салата със спанак и лимец", "3,50", "340", ""],
["", "salata-ss-spanak-i-czveklo", "Салата със спанак и цвекло", "3,50", "230", ""],
["", "turshiya", "Туршия", "2,80", "300", ""],
["", "teleshki-dzholan-s-lovdzhijski-sos", "Телешки джолан с ловджийски сос", "21,00", "", ""],
["", "zapechena-teleshka-opashka", "Запечена телешка опашка", "9,80", "550", ""],
["", "krekhko-teleshko-s-pechen-sos-i-presni-gbi", "Крехко телешко с печен сос и пресни гъби", "7,00", "450", ""],
["", "krekhko-svinsko-s-pechen-sos-i-presni-gbi", "Крехко свинско с печен сос и пресни гъби", "6,30", "450", ""]

            ],

            "Избрано за Вас": [
                ["", "salata-ss-spanak-i-kinoa", "Салата със спанак и киноа", "2,80", "300", ""],
["", "pushena-nadenichka-ss-zepecheni-kartofki", "Пушена наденичка със зепечени картофки", "5,60", "380", ""],
["", "picza-proshuto-s-manatarki", "Пица Прошуто с манатарки", "3,50", "", ""],
["", "picza-ss-sushen-domat", "Пица със сушен домат", "3,50", "", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "6,30", "200", ""]

            ],

            "dry-appetizer": [
                ["", "kashkaval", "Кашкавал", "1,40", "100", ""],
["", "sirene", "Сирене", "1,40", "100", ""],
["", "sudzhuk", "Суджук", "2,80", "100", ""]

            ],

            "salads": [
                ["", "czezar-s-pile", "Цезар с пиле", "4,20", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "550", ""],
["", "panzanela", "Панзанела", "2,80", "400", ""],
["", "kapreze", "Капрезе", "3,50", "430", ""]

            ],

            "alaminuti": [
                ["", "omlet", "Омлет", "2,80", "170", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "100", ""],
["", "kashkavalcheta", "Кашкавалчета", "3,50", "130", ""],
["", "topeno-sirene-prezident-s-kornflejks-i-sladko-ot-borovinki", "Топено сирене президент с корнфлейкс и сладко от боровинки", "5,60", "150", ""],
["", "sirencza", "Сиренца", "2,80", "130", ""],
["", "panirani-brokoli", "Панирани броколи", "2,80", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "180", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "200", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "200", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,20", "130", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "2,10", "200", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "3,50", "150", ""],
["", "oriz-baldi", "Ориз Балди", "2,80", "350", ""],
["", "fiesta-provato", "Фиеста Провато", "2,80", "340", ""],
["", "pileshki-drobcheta-ss-smetana", "Пилешки дробчета със сметана", "3,50", "290", ""],
["", "sos-bbq", "Сос BBQ", "0,70", "50", ""]

            ],

            "Паста и Лазаня": [
                ["", "pasta-s-pile-i-moczarela", "Паста с пиле и моцарела", "4,90", "350", ""],
["", "lazanya-boloneze", "Лазаня Болонезе", "4,20", "440", ""],
["", "spageti-karbonara", "Спагети Карбонара", "3,50", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "2,10", "350", ""]

            ],

            "pizza": [
                ["", "picza-kon-karne", "Пица Кон Карне", "3,50", "", ""],
["", "picza-stela", "Пица Стела", "3,50", "", ""],
["", "picza-dzhordzhi", "Пица Джорджи", "2,80", "", ""],
["", "picza-toskana", "Пица Тоскана", "2,80", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "2,10", "", ""],
["", "picza-margarita", "Пица Маргарита", "3,50", "", ""],
["", "picza-polo", "Пица Поло", "2,10", "", ""],
["", "picza-ali-baba", "Пица Али Баба", "3,50", "", ""],
["", "picza-kalczone", "Пица Калцоне", "2,10", "", ""],
["", "picza-chetiri-sirena", "Пица Четири Сирена", "2,80", "", ""]

            ],

            "rice": [
                ["", "oriz-mambo", "Ориз Мамбо", "2,10", "330", ""],
["", "oriz-baldi", "Ориз Балди", "2,80", "350", ""]

            ],

            "grill": [
                ["", "pileshko-file", "Пилешко филе", "3,50", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "2,80", "200", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "4,20", "300", ""],
["", "pile-orient", "Пиле Ориент", "5,60", "400", ""],
["", "pileshki-kscheta-s-manatarki", "Пилешки късчета с манатарки", "6,30", "380", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""]

            ],

            "bread": [
                ["", "prlenka", "Пърленка", "0,70", "", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""]

            ],

            "garnish": [
                ["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "150", ""],
["", "zele-i-morkovi", "Зеле и моркови", "0,70", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "150", ""],
["", "oriz", "Ориз", "0,70", "150", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "lyut-sos", "Лют сос", "0,00", "50", ""],
["", "leko-lyut-sos", "Леко лют сос", "0,00", "50", ""]

            ],

            "desserts": [
                ["", "palachinki", "Палачинки", "0,70", "120", ""],
["", "domashna-torta-s-biskviti-i-maskapone", "Домашна торта с бисквити и маскапоне", "3,50", "200", ""]

            ]
        }', 
        'slug' => 'picariya-arsis',
        'business_name' => 'Пицария Arsis',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул. Търговска 22',
        'address_additional' => '',
        'coords_x' => '43.13436575',
        'coords_y' => '24.71749619',
        'phone' => '+359886621131',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Пици на пещ Романа": [
                ["", "lappetto", "Lappetto", "6,30", "1000", ""],
["", "kham", "Хам", "5,60", "1000", ""],
["", "khit", "Хит", "5,60", "1000", ""],
["", "familiya", "Фамилия", "6,30", "1000", ""],
["", "salami", "Салами", "5,60", "1000", ""],
["", "kaprichoza", "Капричоза", "6,30", "1000", ""],
["", "margarita", "Маргарита", "4,90", "1000", ""],
["", "chetiri-sirena", "Четири сирена", "6,30", "1000", ""],
["", "picza-s-pileshko-i-smetana", "Пица с пилешко и сметана", "6,30", "1000", ""],
["", "karbonara", "Карбонара", "6,30", "1000", ""],
["", "meksikana", "Мексикана", "6,30", "1000", ""]

            ],

            "Пици Ф60": [
                ["", "meksikana", "Мексикана", "13,30", "", ""],
["", "karbonara", "Карбонара", "13,30", "", ""],
["", "picza-s-pileshko-i-smetana", "Пица с пилешко и сметана", "13,30", "", ""],
["", "chetiri-sirena", "Четири сирена", "12,60", "", ""],
["", "margarita", "Маргарита", "9,80", "", ""],
["", "kaprichoza", "Капричоза", "13,30", "", ""],
["", "salami", "Салами", "11,90", "", ""],
["", "familiya", "Фамилия", "13,30", "", ""],
["", "khit", "Хит", "10,50", "", ""],
["", "kham", "Хам", "11,90", "", ""],
["", "lappetto", "Lappetto", "13,30", "", ""]

            ],

            "sauces": [
                ["", "ketchup-heinz", "Кетчуп Heinz", "0,00", "20", ""],
["", "majoneza-heinz", "Майонеза Heinz", "0,00", "20", ""],
["", "gorchicza-heinz", "Горчица Heinz", "0,00", "20", ""],
["", "chili-sos", "Чили сос", "0,00", "20", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "20", ""]

            ],

            "drinks": [
                ["", "ajran-megle", "Айран Мегле", "0,70", "300", ""],
["", "ajran-megle---plodov", "Айран Мегле - плодов", "0,70", "300", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/563163.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/563164.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/563165.jpg?width=302"],
["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/563166.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/563167.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/563168.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/563169.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1097347.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/1097348.jpg?width=302"],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1097349.jpg?width=302"],
["", "cappy-pulpy-praskova", "Cappy Pulpy Праскова", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1097350.jpg?width=302"],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1097351.jpg?width=302"],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1097352.jpg?width=302"],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1097353.jpg?width=302"],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1097354.jpg?width=302"]

            ],

            "additives": [
                ["", "kashkaval", "Кашкавал", "0,00", "50", ""],
["", "moczarela", "Моцарела", "0,70", "60", ""],
["", "topeno-sirene", "Топено сирене", "0,00", "50", ""],
["", "krave-sirene", "Краве сирене", "0,00", "50", ""],
["", "shunka", "Шунка", "0,00", "50", ""],
["", "shpek-salam", "Шпек салам", "0,00", "50", ""],
["", "peperoni", "Пеперони", "0,00", "50", ""],
["", "chorizo", "Чоризо", "0,00", "50", ""],
["", "bekon", "Бекон", "0,00", "50", ""],
["", "lukankov-slajs", "Луканков слайс", "0,00", "50", ""],
["", "smetana", "Сметана", "0,00", "50", ""],
["", "zeleni-chushki", "Зелени чушки", "0,00", "50", ""],
["", "maslini", "Маслини", "0,00", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""],
["", "cherven-luk", "Червен лук", "0,00", "50", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "gbi", "Гъби", "0,00", "30", ""],
["", "razbito-yajcze", "Разбито яйце", "0,00", "", ""],
["", "vareno-yajcze", "Варено яйце", "0,00", "", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "30", ""]

            ]
        }', 
        'slug' => 'picariya-lappetto',
        'business_name' => 'Пицария Lappetto',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ж.к. Младост , до блок 301',
        'address_additional' => '',
        'coords_x' => '43.13448665',
        'coords_y' => '24.7006542',
        'phone' => '+359885116656',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Домашни лимонади": [
                ["", "limon", "Лимон", "2,10", "400", ""],
["", "yagoda", "Ягода", "2,80", "400", ""],
["", "malina", "Малина", "2,80", "400", ""],
["", "gorski-plod", "Горски плод", "2,80", "400", ""],
["", "ppesh", "Пъпеш", "2,80", "400", ""],
["", "yablka", "Ябълка", "2,80", "400", ""],
["", "lajm", "Лайм", "2,80", "400", ""],
["", "dinya", "Диня", "2,80", "400", ""],
["", "dzhindzhifil", "Джинджифил", "2,80", "400", ""],
["", "bz", "Бъз", "2,80", "400", ""],
["", "nar", "Нар", "2,80", "400", ""],
["", "mango", "Манго", "2,80", "400", ""],
["", "kasis", "Касис", "2,80", "400", ""],
["", "bosilek", "Босилек", "2,80", "400", ""],
["", "aloe-vera", "Алое вера", "2,80", "400", ""],
["", "czitronada", "Цитронада", "2,80", "400", ""]

            ],

            "Белгийска вафла": [
                ["", "techen-shokolad-biskviti-toping-shokolad", "Течен шоколад, бисквити, топинг шоколад", "4,20", "400", ""],
["", "byal-shokolad-toping-yagoda", "Бял шоколад, топинг ягода", "3,50", "400", ""],
["", "byal-shokolad-toping-karamel-natrosheni-biskviti", "Бял шоколад, топинг карамел, натрошени бисквити", "4,20", "400", ""],
["", "pudra-zakhar-med-orekhi-kanela", "Пудра захар, мед, орехи, канела", "4,20", "400", ""],
["", "byal-shokolad-kokosovi-strgotini-toping-kokos", "Бял шоколад, кокосови стърготини, топинг кокос", "5,60", "400", ""],
["", "techen-shokolad-banani-bademi-toping-shokolad", "Течен шоколад, банани, бадеми, топинг шоколад", "5,60", "400", ""],
["", "byal-shokolad-banani-bademi-toping-shokolad", "Бял шоколад, банани, бадеми, топинг шоколад", "5,60", "400", ""],
["", "med-banan-yagoda-yablka-smetana", "Мед, банан, ягода, ябълка, сметана", "7,00", "400", ""],
["", "techen-shokolad-smetana-toping-shokolad", "Течен шоколад, сметана, топинг шоколад", "4,20", "400", ""],
["", "fstcheno-maslo-banani-sirop-mejpl", "Фъстъчено масло, банани, сироп Мейпъл", "7,00", "400", ""],
["", "maskarpone-yagoda-bademi-toping-karamel", "Маскарпоне, ягода, бадеми, топинг карамел", "7,00", "400", ""],
["", "byal-i-kafyal-techen-shokolad-shokoladovi-prchiczi-toping", "Бял и кафял течен шоколад, шоколадови пръчици, топинг", "4,20", "400", ""],
["", "puding-vaniliya-yagoda-toping-vaniliya", "Пудинг ванилия, ягода, топинг ванилия", "5,60", "400", ""],
["", "puding-shokolad-banani-toping-shokolad", "Пудинг шоколад, банани, топинг шоколад", "5,60", "400", ""],
["", "kinder-bueno-s-yagodi", "Киндер буено с ягоди", "7,00", "400", ""],
["", "kinder-bueno-s-malini", "Киндер буено с малини", "7,00", "400", ""],
["", "kinder-bueno-s-banan", "Киндер буено с банан", "7,00", "400", ""],
["", "kinder-bueno-s-ananas", "Киндер буено с Ананас", "7,70", "400", ""],
["", "krem-tofi-i-yagodi", "Крем тофи и ягоди", "7,70", "400", ""],
["", "krem-tofi-i-malini", "Крем тофи и малини", "7,70", "400", ""],
["", "krem-tofi-i-portokal", "Крем тофи и портокал", "7,00", "400", ""],
["", "krem-tofi-i-ananas", "Крем тофи и ананас", "7,70", "400", ""],
["", "krem-tofi-i-banan", "Крем тофи и банан", "7,00", "400", ""],
["", "kit-kat", "Кит-кат", "7,70", "400", ""],
["", "rafaelo", "Рафаело", "8,40", "400", ""],
["", "ferero-roshe", "Фереро Роше", "8,40", "400", ""],
["", "shokolad-banan", "Шоколад банан", "7,00", "400", ""],
["", "shokolad-limon", "Шоколад лимон", "7,00", "400", ""],
["", "makaron", "Макарон", "8,40", "400", ""]

            ],

            "Специален чай": [
                ["", "rojbos-aromaten-chaj", "Ройбос ароматен чай", "2,10", "300", ""],
["", "rojbos-spajsi", "Ройбос спайси", "2,10", "300", ""],
["", "cheren-chaj-irish-dream", "Черен чай Irish Dream", "2,10", "300", ""],
["", "cheren-chaj-marczipan", "Черен чай Марципан", "2,10", "300", ""],
["", "byal-chaj-yablka-i-kanela", "Бял чай ябълка и канела", "2,10", "300", ""],
["", "diva-orkhideya", "Дива орхидея", "2,10", "300", ""],
["", "zelen-chaj-ananas-i-nektarina-pure-energy", "Зелен чай ананас и нектарина Pure Energy", "2,10", "300", ""],
["", "yagoda", "Ягода", "2,10", "300", ""],
["", "plodova-smes-barbados", "Плодова смес Барбадос", "2,80", "300", ""],
["", "plodova-smes-yagoda-i-smetana", "Плодова смес ягода и сметана", "2,10", "300", ""],
["", "zelen-rojbos-serengeti", "Зелен ройбос Серенгети", "2,10", "300", ""],
["", "khnibush-malajka", "Хънибуш Малайка", "2,80", "300", ""]

            ],

            "Студени кафета": [
                ["", "ledeno-freddo-espreso", "Ледено Freddo Еспресо", "1,40", "180", ""],
["", "ledeno-freddo-kapuchino", "Ледено Freddo Капучино", "2,10", "250", ""],
["", "nes-kafe-frape", "Нес кафе фрапе", "1,40", "300", ""],
["", "nes-kafe-frape-monin", "Нес кафе фрапе Монин", "2,10", "300", ""],
["", "nes-kafe-frape-ss-sladoled", "Нес кафе фрапе със сладолед", "2,80", "300", ""],
["", "late-s-topka-sladoled", "Лате с топка сладолед", "3,50", "400", ""],
["", "late", "лате", "2,80", "400", ""],
["", "moka", "Мока", "2,80", "400", ""],
["", "moka-s-topka-sladoled", "Мока с топка сладолед", "3,50", "400", ""],
["", "late-amereti", "Лате Амерети", "2,80", "400", ""],
["", "late-shokoladov-sn", "Лате шоколадов сън", "2,80", "400", ""],
["", "late-karameleni-spomeni", "Лате карамелени спомени", "2,80", "400", ""],
["", "late-kokosova-naslada", "Лате кокосова наслада", "2,80", "400", ""],
["", "fredochino", "Фредочино", "2,80", "400", ""],
["", "frapuchino", "Фрапучино", "2,80", "400", ""],
["", "frapuchino-ss-sladoled", "Фрапучино със сладолед", "3,50", "400", ""],
["", "fredochino-ss-sladoled", "Фредочино със сладолед", "3,50", "400", ""]

            ],

            "Смути": [
                ["", "portokal", "Портокал", "2,80", "500", ""],
["", "banan", "Банан", "2,80", "500", ""],
["", "kivi", "Киви", "2,80", "500", ""],
["", "ananas", "Ананас", "3,50", "500", ""],
["", "yablka", "Ябълка", "2,80", "500", ""],
["", "praskova", "Праскова", "2,80", "500", ""],
["", "dinya", "Диня", "2,80", "500", ""],
["", "ppesh", "Пъпеш", "2,80", "500", ""],
["", "yagoda", "Ягода", "2,80", "500", ""],
["", "malina", "Малина", "2,80", "500", ""],
["", "grejpfrut", "Грейпфрут", "2,80", "500", ""],
["", "banan-i-yagoda", "Банан и ягода", "2,80", "500", ""],
["", "yablka-i-krusha", "Ябълка и круша", "2,80", "500", ""],
["", "banan-i-praskova", "Банан и праскова", "2,80", "500", ""],
["", "yablka-i-kivi", "Ябълка и киви", "2,80", "500", ""],
["", "banan-i-ppesh", "Банан и пъпеш", "2,80", "500", ""],
["", "avokado-i-banan", "Авокадо и банан", "2,80", "500", ""],
["", "portokal-i-yablka", "Портокал и ябълка", "2,80", "500", ""],
["", "portokal-i-limon", "Портокал и лимон", "2,80", "500", ""],
["", "portokal-i-banan", "Портокал и банан", "2,80", "500", ""],
["", "portokal-i-kivi", "Портокал и киви", "2,80", "500", ""],
["", "portokal-i-ananas", "Портокал и ананас", "3,50", "500", ""],
["", "portokal-i-dinya", "Портокал и диня", "2,80", "500", ""],
["", "yablka-i-morkov", "Ябълка и морков", "2,80", "500", ""],
["", "banan-i-kivi", "Банан и киви", "2,80", "500", ""],
["", "banan-i-malina", "Банан и малина", "2,80", "500", ""],
["", "ppesh-i-malina", "Пъпеш и малина", "2,80", "500", ""],
["", "ppesh-i-yagoda", "Пъпеш и ягода", "2,80", "500", ""],
["", "ppesh-i-praskova", "Пъпеш и праскова", "2,80", "500", ""],
["", "gorski-plod", "Горски плод", "2,80", "500", ""]

            ],

            "Фрешове": [
                ["", "portokal", "Портокал", "2,80", "250", ""],
["", "banan", "Банан", "2,80", "250", ""],
["", "kivi", "Киви", "2,80", "250", ""],
["", "ananas", "Ананас", "3,50", "250", ""],
["", "yablka", "Ябълка", "2,80", "250", ""],
["", "morkov", "Морков", "2,80", "250", ""],
["", "dinya", "Диня", "2,80", "250", ""],
["", "ppesh", "Пъпеш", "2,80", "250", ""],
["", "grejpfrut", "Грейпфрут", "2,80", "250", ""],
["", "portokal-i-yablka", "Портокал и ябълка", "2,80", "250", ""],
["", "portokal-i-limon", "Портокал и лимон", "2,80", "250", ""],
["", "portokal-i-banan", "Портокал и банан", "2,80", "250", ""],
["", "portokal-i-kivi", "Портокал и киви", "2,80", "250", ""],
["", "portokal-i-ananas", "Портокал и ананас", "3,50", "250", ""],
["", "portokal-i-grejpfrut", "Портокал и грейпфрут", "2,80", "250", ""],
["", "portokal-i-mango", "Портокал и манго", "4,20", "250", ""],
["", "yablka-i-morkov", "Ябълка и морков", "2,80", "250", ""],
["", "grejpfrut-i-limon", "Грейпфрут и лимон", "4,20", "250", ""],
["", "gorski-plod", "Горски плод", "2,80", "250", ""]

            ],

            "Специални смутита": [
                ["", "zelena-prokhlada", "Зелена прохлада", "4,20", "350", ""],
["", "cherveno-priklyuchenie", "Червено приключение", "4,20", "350", ""],
["", "zelena-prikazka", "Зелена приказка", "4,20", "350", ""],
["", "oranzhev-bum", "Оранжев бум", "4,20", "350", ""],
["", "zelen-tropikal", "Зелен тропикал", "4,20", "350", ""]

            ],

            "Безалкохолни напитки": [
                ["", "soda-portokal-ken", "Сода портокал кен", "0,70", "330", ""],
["", "soda-limon-ken", "Сода лимон кен", "1,40", "330", ""],
["", "soda-grejpfrut-ken", "Сода грейпфрут кен", "1,40", "330", ""],
["", "aloe-vera-ken", "Алое вера кен", "2,10", "240", ""],
["", "aloe-vera-yagoda", "Алое вера ягода", "2,10", "240", ""],
["", "aloe-vera-ananas", "Алое вера ананас", "2,10", "240", ""],
["", "aloe-vera-mango", "Алое вера манго", "2,10", "240", ""],
["", "energijna-napitka-red-bull", "Енергийна напитка Red Bull", "4,20", "350", ""],
["", "energijna-napitka-isosport", "Енергийна напитка Isosport", "0,70", "250", ""],
["", "blendiran-studen-chaj-yablka", "Блендиран студен чай ябълка", "2,10", "400", ""],
["", "blendiran-studen-chaj-praskova", "Блендиран студен чай праскова", "2,10", "400", ""],
["", "blendiran-studen-chaj-limon", "Блендиран студен чай лимон", "2,10", "400", ""]

            ],

            "Милкшейк със сладолед": [
                ["", "karamel", "Карамел", "3,50", "400", ""],
["", "yagoda", "Ягода", "3,50", "400", ""],
["", "vaniliya", "Ванилия", "3,50", "400", ""],
["", "shokolad", "Шоколад", "3,50", "400", ""],
["", "banan", "Банан", "3,50", "400", ""],
["", "ppesh", "Пъпеш", "3,50", "400", ""],
["", "violetka", "Виолетка", "3,50", "400", ""],
["", "miks", "Микс", "3,50", "400", ""]

            ],

            "Милкшейк с плодове": [
                ["", "yagoda", "Ягода", "2,80", "300", ""],
["", "malina", "Малина", "2,80", "300", ""],
["", "gorski-plod", "Горски плод", "2,80", "300", ""],
["", "banan", "Банан", "2,80", "300", ""],
["", "ppesh", "Пъпеш", "2,80", "300", ""]

            ],

            "Специален милкшейк": [
                ["", "byal-shokolad", "Бял шоколад", "4,20", "400", ""],
["", "techen-shokolad", "Течен шоколад", "4,20", "400", ""],
["", "kremona-biskvitka", "Кремона бисквитка", "4,20", "400", ""],
["", "karamel-orekh", "Карамел орех", "4,20", "400", ""],
["", "in-yan", "Ин-ян", "5,60", "400", ""],
["", "milkshejk-mango", "Милкшейк манго", "4,20", "400", ""]

            ],

            "Фрозен йогурт милкшейк": [
                ["", "yagoda", "Ягода", "3,50", "400", ""],
["", "malina", "Малина", "3,50", "400", ""],
["", "gorski-plod", "Горски плод", "3,50", "400", ""],
["", "kivi", "Киви", "3,50", "400", ""],
["", "banan", "Банан", "3,50", "400", ""]

            ],

            "Топли шоколади": [
                ["", "shokolad-mlechen", "Шоколад млечен", "1,40", "250", ""],
["", "shokolad-mlechen-byal", "Шоколад млечен бял", "1,40", "250", ""],
["", "shokolad-ss-smetana", "Шоколад със сметана", "2,10", "280", ""],
["", "bananovo-mokachino", "Бананово мокачино", "2,10", "450", ""],
["", "marochino", "Марочино", "2,10", "450", ""],
["", "frapuchino", "Фрапучино", "2,10", "450", ""],
["", "oreo", "Орео", "2,10", "450", ""],
["", "rozovi-snishha", "Розови сънища", "2,10", "450", ""],
["", "tropicheska-mechta", "Тропическа мечта", "2,80", "450", ""],
["", "amareti", "Амарети", "2,80", "280", ""],
["", "yagoda", "Ягода", "3,50", "450", ""],
["", "banan", "Банан", "3,50", "450", ""],
["", "violetka", "Виолетка", "3,50", "280", ""],
["", "khot-meri", "Хот Мери", "4,20", "280", ""],
["", "karibska-mechta", "Карибска мечта", "4,20", "280", ""],
["", "monakh", "Монах", "4,20", "280", ""],
["", "kardamon", "Кардамон", "2,10", "280", ""],
["", "spajsi", "Спайси", "2,10", "280", ""],
["", "kalua", "Калуа", "4,20", "280", ""],
["", "shokoladovo-smuti-s-monin", "Шоколадово смути с Монин", "2,80", "400", ""]

            ]
        }', 
        'slug' => 'iron-fe-26',
        'business_name' => 'IRON - FE 26',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'пл.Тодор Кирков, ул.Мостова 1',
        'address_additional' => '',
        'coords_x' => '43.13211987',
        'coords_y' => '24.71693782',
        'phone' => '+359877131466',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "pizza": [
                ["", "khavana", "Хавана", "2,10", "", ""],
["", "roma", "Рома", "2,10", "", ""],
["", "redzhina", "Реджина", "2,10", "", ""],
["", "rosso", "Россо", "2,10", "", ""],
["", "kaprichoza", "Капричоза", "2,10", "", ""],
["", "rio-mare", "Рио Маре", "2,10", "", ""],
["", "vegetariana", "Вегетариана", "2,80", "", ""],
["", "margarita", "Маргарита", "2,80", "", ""],
["", "milano", "Милано", "2,80", "", ""],
["", "roko", "Роко", "2,80", "", ""],
["", "santini", "Сантини", "2,80", "", ""],
["", "toskana", "Тоскана", "2,80", "", ""],
["", "la-skala", "Ла Скала", "2,80", "", ""],
["", "ludzhi", "Луджи", "2,80", "", ""],
["", "czentral", "Централ", "2,80", "", ""],
["", "proshuto", "Прошуто", "3,50", "", ""],
["", "kuatro-formadzho", "Куатро Формаджо", "3,50", "", ""],
["", "rodopska", "Родопска", "2,80", "", ""],
["", "mama-miya", "Мама Мия", "2,80", "", ""],
["", "kham", "Хам", "1,40", "", ""]

            ],

            "pasta": [
                ["", "karbonara", "Карбонара", "2,80", "450", ""],
["", "boloneze", "Болонезе", "2,80", "400", ""],
["", "vegetarianski", "Вегетариански", "2,10", "300", ""]

            ],

            "salads": [
                ["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "450", ""],
["", "snezhanka", "Снежанка", "2,80", "300", ""],
["", "buraniya", "Бурания", "2,80", "300", ""],
["", "domati-s-moczarela", "Домати с моцарела", "3,50", "320", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "420", ""],
["", "salata-czezar", "Салата Цезар", "2,80", "300", ""],
["", "gradinarska-salata-s-katk", "Градинарска салата с катък", "2,80", "420", ""],
["", "selska-pstra-salata", "Селска пъстра салата", "2,80", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "2,80", "400", ""],
["", "lyutika", "Лютика", "2,80", "400", ""],
["", "shopska-salata", "Шопска салата", "2,10", "400", ""],
["", "domati-krastaviczi-luk-mus-ot-sirene", "Домати, краставици, лук, мус от сирене", "2,80", "400", ""]

            ],

            "Сухи мезета": [
                ["", "pastrma", "Пастърма", "2,80", "50", ""],
["", "sudzhuk", "Суджук", "2,10", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""]

            ],

            "Предястия и мезета": [
                ["", "drobcheta-s-luk", "Дробчета с лук", "2,10", "300", ""],
["", "drobcheta-s-bekon-med-i-soev-sos", "Дробчета с бекон, мед и соев сос", "3,50", "350", ""],
["", "pileshki-srchicza", "Пилешки сърчица", "2,80", "250", ""],
["", "brokoli-na-plocha-s-parmezanova-panada", "Броколи на плоча с пармезанова панада", "2,80", "300", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "2,80", "250", ""],
["", "khrupkavi-topeni-sirencza-ss-sladko-ot-borovinki", "Хрупкави топени сиренца със сладко от боровинки", "3,50", "230", ""],
["", "plneni-gbi-s-moczarela-i-kashkaval", "Пълнени гъби с моцарела и кашкавал", "3,50", "300", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "2,80", "300", ""],
["", "pileshki-vodenichki-pane", "Пилешки воденички пане", "2,80", "330", ""],
["", "khrupkavi-pileshki-flejki", "Хрупкави пилешки флейки", "2,80", "230", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "2,80", "220", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "200", ""],
["", "przhena-czacza", "Пържена цаца", "2,10", "200", ""],
["", "kasapsko-meze", "Касапско мезе", "4,90", "300", ""],
["", "vlcho-plato", "Вълчо плато", "17,50", "", ""],
["", "rodopski-sach", "Родопски сач", "11,20", "", ""],
["", "zapekanka", "Запеканка", "2,80", "400", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshka-przhola-po-trakijski", "Пилешка пържола по тракийски", "4,20", "350", ""],
["", "pile-na-plocha-s-miks-ot-zelenchuczi", "Пиле на плоча с микс от зеленчуци", "4,90", "400", ""],
["", "dyavolsko-pile", "Дяволско пиле", "4,20", "350", ""],
["", "pileshki-grdi-s-moczarela", "Пилешки гърди с моцарела", "4,20", "350", ""],
["", "pileshki-kscheta-czentral", "Пилешки късчета Централ", "4,20", "350", ""]

            ],

            "Ястия от свинско месо": [
                ["", "svinski-vrat-s-maslo-do-pari", "Свински врат с масло Дьо Пари", "5,60", "400", ""],
["", "svinski-vrat-zapechen-s-moczarela", "Свински врат запечен с моцарела", "7,00", "400", ""],
["", "svinski-rebrcza-ss-zapecheni-zelenchuczi", "Свински ребърца със запечени зеленчуци", "5,60", "450", ""],
["", "svinski-shniczel-po-zhenevski", "Свински шницел по женевски", "5,60", "400", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "svinski-grdi", "Свински гърди", "4,20", "300", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "3,50", "250", ""],
["", "pilesha-przhola-file", "Пилеша пържола филе", "3,50", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "3,50", "250", ""],
["", "presen-sudzhuk", "Пресен суджук", "3,50", "250", ""]

            ],

            "Гарнитури и сосове": [
                ["", "domashni-przheni-kartofi", "Домашни пържени картофи", "1,40", "150", ""],
["", "domashni-przheni-kartofi-ss-sirene", "Домашни пържени картофи със сирене", "2,10", "200", ""],
["", "blanshirani-przheni-kartofi", "Бланширани пържени картофи", "1,40", "150", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "300", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "150", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "150", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "50", ""],
["", "mlechno-smetanov-sos", "Млечно-сметанов сос", "0,00", "50", ""],
["", "mlechno-chesnov-sos", "Млечно-чеснов сос", "0,00", "50", ""],
["", "chili-sos", "Чили сос", "0,00", "50", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""]

            ],

            "Добавки за пица": [
                ["", "parmezan", "Пармезан", "1,40", "50", ""],
["", "moczarela", "Моцарела", "0,70", "50", ""],
["", "topeno-sirene", "Топено сирене", "0,70", "50", ""],
["", "riba-ton", "Риба тон", "1,40", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "50", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "proshuto", "Прошуто", "1,40", "50", ""],
["", "salam", "Салам", "0,70", "50", ""],
["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""],
["", "maslini", "Маслини", "0,00", "50", ""],
["", "pryasna-chushka", "Прясна чушка", "0,00", "", ""],
["", "gbi", "Гъби", "0,00", "50", ""],
["", "ananas", "Ананас", "0,70", "50", ""],
["", "pileshko-meso", "Пилешко месо", "0,70", "50", ""],
["", "smetana", "Сметана", "0,00", "50", ""],
["", "pechena-chushka", "Печена чушка", "0,00", "", ""],
["", "grakh", "Грах", "0,00", "50", ""]

            ],

            "bread": [
                ["", "filijka", "Филийка", "0,00", "", ""],
["", "filijka-s-maslo", "Филийка с масло", "0,00", "", ""],
["", "franzelka", "Франзелка", "0,00", "100", ""],
["", "prlenka", "Пърленка", "0,70", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "150", ""],
["", "prlenka-s-yajcze-i-sirene", "Пърленка с яйце и сирене", "1,40", "200", ""],
["", "prlenka-s-yajcze-i-kashkaval", "Пърленка с яйце и кашкавал", "1,40", "200", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "200", ""]

            ],

            "desserts": [
                ["", "palachinka-ss-sladko", "Палачинка със сладко", "0,70", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,00", "", ""],
["", "kamenicza", "Каменица", "1,40", "", ""],
["", "beks", "Бекс", "1,40", "", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "330", ""],
["", "staropramen", "Старопрамен", "1,40", "500", ""],
["", "shark", "Shark", "2,80", "250", ""]

            ]
        }', 
        'slug' => 'restorant-central',
        'business_name' => 'Ресторант Central',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул.Академик Атанас Иширков 10',
        'address_additional' => '',
        'coords_x' => '43.13783505',
        'coords_y' => '24.71835583',
        'phone' => '+359895192100; +359884404080,',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Специални предложения": [
                ["", "burger", "Бургер", "1,40", "360", ""],
["", "burger-360gr-i-koka-kola", "Бургер (360гр) и Кока Кола", "2,80", "500", ""],
["", "chijzburger", "Чийзбургер", "2,10", "380", ""],
["", "chijzburger-380gr-i-koka-kola", "Чийзбургер (380гр) и Кока Кола", "3,50", "500", ""]

            ],

            "Багета или тостер по избор": [
                ["", "posten", "Постен", "1,40", "255", ""],
["", "sirene", "Сирене", "2,10", "335", ""],
["", "kashkaval", "Кашкавал", "2,10", "295", ""],
["", "bekon", "Бекон", "1,40", "295", ""],
["", "pueshko", "Пуешко", "1,40", "295", ""],
["", "lukanka", "Луканка", "2,10", "275", ""],
["", "pueshko-bekon-i-topeno-sirene", "Пуешко, бекон и топено сирене", "2,10", "370", ""],
["", "kashkaval-i-sirene", "Кашкавал и сирене", "2,80", "375", ""],
["", "shunka-i-kashkaval", "Шунка и кашкавал", "2,10", "325", ""],
["", "shunka-i-sirene", "Шунка и сирене", "2,10", "365", ""],
["", "shunka-kashkaval-i-sirene", "Шунка, кашкавал и сирене", "2,80", "405", ""],
["", "lukanka-i-sirene", "Луканка и сирене", "2,80", "370", ""],
["", "lukanka-kashkaval-i-sirene", "Луканка, кашкавал и сирене", "3,50", "400", ""],
["", "lukanka-shunka-i-kashkval", "Луканка, шунка и кашквал", "3,50", "350", ""],
["", "lukanka-shunka-i-sirene", "Луканка, шунка и сирене", "3,50", "390", ""],
["", "lukanka-shunka-kashkaval-i-sirene", "Луканка, шунка, кашкавал и сирене", "4,20", "430", ""],
["", "pileshka-przhola-i-kashkaval", "Пилешка пържола и кашкавал", "3,50", "395", ""],
["", "pileshka-przhola-i-sirene", "Пилешка пържола и сирене", "3,50", "435", ""],
["", "pileshka-przhola-kashkaval-i-sirene", "Пилешка пържола, кашкавал и сирене", "4,20", "475", ""],
["", "sandvich-s-krenvirsh", "Сандвич с кренвирш", "2,10", "355", ""],
["", "khot-dog", "Хот дог", "1,40", "245", ""],
["", "burger", "Бургер", "1,40", "360", ""],
["", "chijzburger", "Чийзбургер", "2,10", "280", ""],
["", "shunka", "Шунка", "1,40", "285", ""],
["", "bekon-i-topeno-sirene", "Бекон и топено сирене", "2,10", "330", ""],
["", "pueshko-i-topeno-sirene", "Пуешко и топено сирене", "2,10", "330", ""],
["", "lukanka-i-kashkaval", "Луканка и кашкавал", "2,80", "320", ""],
["", "pileshka-przhola", "Пилешка пържола", "2,80", "355", ""],
["", "mini-khot-dog", "Мини хот дог", "0,70", "120", ""]

            ],

            "Комбинации": [
                ["", "sandvich-s-bekon--koka-kola", "Сандвич с бекон + Кока Кола", "2,10", "500", ""],
["", "sandvich-s-lukanka--koka-kola", "Сандвич с луканка + Кока Кола", "2,80", "500", ""],
["", "sandvich-s-pileshka-przhola--koka-kola", "Сандвич с пилешка пържола + Кока Кола", "3,50", "500", ""],
["", "sandvich-s-bekon", "Сандвич с бекон", "1,40", "", ""],
["", "sandvich-s-lukanka", "Сандвич с луканка", "2,10", "", ""],
["", "sandvich-s-pileshka-przhola", "Сандвич с пилешка пържола", "2,80", "", ""]

            ],

            "additives": [
                ["", "shunka", "Шунка", "0,00", "", ""],
["", "bekon", "Бекон", "0,00", "", ""],
["", "pueshko", "Пуешко", "0,00", "", ""],
["", "lukanka", "Луканка", "0,70", "", ""],
["", "krenvirsh", "Кренвирш", "0,70", "", ""],
["", "kashkaval", "Кашкавал", "0,70", "", ""],
["", "sirene", "Сирене", "0,70", "", ""],
["", "przheni-kartofi", "Пържени картофи", "0,00", "", ""],
["", "pileshka-przhola", "Пилешка пържола", "1,40", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "krenvirsh-mini", "Кренвирш мини", "0,00", "", ""],
["", "sirene-gauda", "Сирене Гауда", "0,00", "", ""],
["", "pitka", "Питка", "0,00", "", ""],
["", "mini-bageta", "Мини Багета", "0,00", "", ""],
["", "topeno-sirene", "Топено сирене", "0,00", "", ""]

            ],

            "drinks": [
                ["", "monster", "Monster", "1,40", "500", ""],
["", "ajran-balkan", "Айран Балкан", "0,70", "500", ""]

            ],

            "Кока Кола продукти": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/507535.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/507536.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/507537.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/507538.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/507539.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/507540.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/507544.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1094729.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1094730.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1094731.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1094732.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1094733.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/1094734.jpg?width=302"]

            ]
        }', 
        'slug' => 'alaminut',
        'business_name' => 'Аламинут',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул.Търговска 56',
        'address_additional' => '',
        'coords_x' => '43.14038977',
        'coords_y' => '24.71821107',
        'phone' => '+359878203028',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "salads": [
                ["", "lyutika", "Лютика", "4,20", "400", ""],
["", "domashna-salata", "Домашна салата", "4,20", "450", ""],
["", "panczanela", "Панцанела", "4,90", "400", ""],
["", "shopska-salata", "Шопска салата", "4,20", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "morkovi-ss-sino-sirene-i-orekhi", "Моркови със синьо сирене и орехи", "4,90", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "450", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "350", ""],
["", "zelena-salata", "Зелена салата", "4,90", "350", ""],
["", "zelena-s-riba-ton", "Зелена с риба тон", "5,60", "350", ""],
["", "grczka-salata", "Гръцка салата", "4,90", "450", ""],
["", "domati-s-mus-ot-sirena-i-grilovani-tikvichki", "Домати с мус от сирена и гриловани тиквички", "5,60", "400", ""],
["", "frenska-salata", "Френска салата", "5,60", "450", ""],
["", "salata-dyavolo", "Салата Дяволо", "5,60", "450", ""],
["", "selska-salata", "Селска салата", "4,20", "400", ""],
["", "salata-antipasti-450gr-", "Салата Антипасти (450гр) (", "4,90", "", ""]

            ],

            "starters": [
                ["", "tarator", "Таратор", "2,80", "270", ""],
["", "pileshki-khapki", "Пилешки хапки", "5,60", "250", ""],
["", "pileshki-flejki-s-kornflejks", "Пилешки флейки с корнфлейкс", "6,30", "250", ""],
["", "pileshki-filencza-s-parmezan-i-sos", "Пилешки филенца с пармезан и сос", "7,00", "250", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "6,30", "200", ""],
["", "topeni-sirencza-s-borovinki", "Топени сиренца с боровинки", "6,30", "270", ""],
["", "pecheni-frenski-sirena-s-konfityur-ot-yagodi", "Печени френски сирена с конфитюр от ягоди", "7,00", "280", ""],
["", "pikantni-kartofi-s-chesnov-sos", "Пикантни картофи с чеснов сос", "4,20", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "3,50", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "3,50", "250", ""],
["", "grilovani-zelenchuczi-s-tri-vida-sirenea", "Гриловани зеленчуци с три вида сиренеа", "6,30", "300", ""],
["", "pileshki-drobcheta-v-maslo-s-luk", "Пилешки дробчета в масло с лук", "4,90", "250", ""],
["", "sirene-natyur", "Сирене натюр", "3,50", "200", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "5,60", "200", ""],
["", "lukanka", "Луканка", "7,00", "100", ""],
["", "pastrma", "Пастърма", "8,40", "100", ""],
["", "file-elena", "Филе елена", "8,40", "100", ""]

            ],

            "pizza": [
                ["", "dzhenoveze", "Дженовезе", "6,30", "", ""],
["", "don-fredo", "Дон Фредо", "6,30", "", ""],
["", "rigoleto", "Риголето", "6,30", "", ""],
["", "parmedzhano", "Пармеджано", "6,30", "", ""],
["", "alimento", "Алименто", "6,30", "", ""],
["", "margarita", "Маргарита", "4,90", "", ""],
["", "la-fungi", "Ла фунги", "4,90", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "5,60", "", ""],
["", "kapreze", "Капрезе", "5,60", "", ""],
["", "vegetariana", "Вегетариана", "5,60", "", ""],
["", "bejbi", "Бейби", "5,60", "", ""],
["", "kuatro-stadzhoni", "Куатро стаджони", "6,30", "", ""],
["", "kalczone", "Калцоне", "5,60", "", ""],
["", "toskana", "Тоскана", "5,60", "", ""],
["", "tono", "Тоно", "5,60", "", ""],
["", "fruti-di-mare", "Фрути ди маре", "6,30", "", ""],
["", "peperoni", "Пеперони", "5,60", "", ""],
["", "fiorentina", "Фиорентина", "6,30", "", ""],
["", "khavaj", "Хавай", "5,60", "", ""],
["", "kuatro-di-karne", "Куатро ди карне", "6,30", "", ""],
["", "proshuto", "Прошуто", "5,60", "", ""],
["", "kaprichoza", "Капричоза", "6,30", "", ""],
["", "bbq", "BBQ", "6,30", "", ""],
["", "italiya", "Италия", "6,30", "", ""]

            ],

            "Паста и ризото": [
                ["", "taliateli-madzhiko", "Талиатели Маджико", "7,00", "400", ""],
["", "taliateli-milaneze", "Талиатели Миланезе", "7,00", "400", ""],
["", "taliateli-fruti-di-mare", "Талиатели Фрути Ди Маре", "7,70", "400", ""],
["", "taliateli-boloneze", "Талиатели болонезе", "6,30", "400", ""],
["", "taliateli-karbonara", "Талиатели карбонара", "7,00", "400", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "6,30", "350", ""],
["", "rizoto-s-gbi-i-shunka", "Ризото с гъби и шунка", "7,00", "350", ""],
["", "rizoto-s-gbi-i-pile", "Ризото с гъби и пиле", "7,00", "350", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "7,70", "350", ""]

            ],

            "barbecue": [
                ["", "domashen-sudzhuk", "Домашен суджук", "7,00", "250", ""],
["", "pleskavicza", "Плескавица", "5,60", "200", ""],
["", "pileshki-shish", "Пилешки шиш", "5,60", "200", ""],
["", "pileshko-file", "Пилешко филе", "7,00", "200", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "7,00", "250", ""],
["", "pileshko-plato", "Пилешко плато", "23,80", "700", ""],
["", "svinski-shish", "Свински шиш", "6,30", "200", ""],
["", "svinski-rebrcza", "Свински ребърца", "7,70", "300", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "7,70", "250", ""],
["", "svinsko-plato", "Свинско плато", "28,00", "700", ""]

            ],

            "Гарнитури и сосове": [
                ["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,80", "250", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "2,80", "250", ""],
["", "kartofeno-pyure", "Картофено пюре", "2,80", "250", ""],
["", "vareni-kartofi", "Варени картофи", "2,80", "250", ""],
["", "oriz", "Ориз", "2,80", "250", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "2,80", "250", ""],
["", "chili-sos", "Чили сос", "0,70", "50", ""],
["", "mlechen-sos", "Млечен сос", "0,70", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "sos-peperoni", "Сос пеперони", "0,70", "50", ""],
["", "soev-sos", "Соев сос", "0,70", "50", ""],
["", "pesto", "Песто", "0,70", "50", ""],
["", "sos-rokfor", "Сос Рокфор", "0,70", "50", ""],
["", "sos-barbekyu", "Сос барбекю", "0,70", "50", ""]

            ],

            "Хлебчета": [
                ["", "chesnovo-khlebche-s-maslo", "Чесново хлебче с масло", "2,10", "150", ""],
["", "susameno-khlebche", "Сусамено хлебче", "2,80", "170", ""],
["", "khlebche-s-yajcze-i-srene", "Хлебче с яйце и срене", "3,50", "250", ""],
["", "italiansko-khlebche", "Италианско хлебче", "3,50", "250", ""]

            ],

            "desserts": [
                ["", "gofreta", "Гофрета", "4,20", "350", ""]

            ]
        }', 
        'slug' => 'picariya-versay-bar-i-gril',
        'business_name' => 'Пицария Версай Бар и Грил',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул. „Търговска“ 2',
        'address_additional' => '',
        'coords_x' => '43.13152215',
        'coords_y' => '24.71501165',
        'phone' => '+359889873387',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", ""]

            ],

            "drinks": [
                ["", "izosport", "Изоспорт", "1,40", "", ""],
["", "smrsbi", "Съмърсби", "2,10", "330", ""],
["", "studen-chaj-nesti", "Студен чай Нести", "1,40", "500", ""],
["", "khajniken", "Хайникен", "2,80", "330", ""],
["", "studen-chaj-san-benedeto", "Студен чай Сан Бенедето", "1,40", "500", ""],
["", "khajniken-bezalkokholen", "Хайникен безалкохолен", "2,80", "330", ""],
["", "erdinger", "Ердингер", "3,50", "500", ""]

            ],

            "salads": [
                ["", "kalugerska", "Калугерска", "4,20", "300", ""],
["", "morska-pyana", "Морска пяна", "4,20", "400", ""],
["", "tropikana", "Тропикана", "4,90", "400", ""],
["", "ambasador", "Амбасадор", "4,20", "300", ""],
["", "salata-iv", "Салата Ив", "6,30", "450", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "400", ""],
["", "salata-prestizh", "Салата Престиж", "6,30", "500", ""],
["", "zelena-salata", "Зелена салата", "4,20", "350", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "600", ""],
["", "salata-spirito", "Салата Спирито", "5,60", "450", ""],
["", "salata-spanacho", "Салата Спаначо", "5,60", "450", ""],
["", "morkovi-ss-sino-sirene", "Моркови със синьо сирене", "4,20", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "350", ""],
["", "ispanska-salata", "Испанска салата", "5,60", "550", ""],
["", "salata-s-limecz-i-pileshko-file", "Салата с лимец и пилешко филе", "6,30", "450", ""],
["", "salata-ot-spanak-s-morkovi-i-pecheni-chushki", "Салата от спанак с моркови и печени чушки", "4,90", "400", ""],
["", "salata-lyutika", "Салата лютика", "4,20", "350", ""],
["", "meshana-salata", "Мешана салата", "5,60", "400", ""]

            ],

            "Топли мезета": [
                ["", "kashkavaleni-khapki", "Кашкавалени хапки", "4,90", "200", ""],
["", "topeni-sirencza-ss-sladko-ot-borovinki", "Топени сиренца със сладко от боровинки", "4,20", "200", ""],
["", "pileshki-flejki-s-kornflejks", "Пилешки флейки с корнфлейкс", "4,90", "250", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "5,60", "200", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "5,60", "200", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "5,60", "200", ""],
["", "zapecheno-sirene-s-med-i-orekhi", "Запечено сирене с мед и орехи", "4,20", "200", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "350", ""],
["", "pileshki-vodenichki", "Пилешки воденички", "2,80", "250", ""],
["", "srcza-s-luk", "Сърца с лук", "3,50", "300", ""],
["", "drobcheta-s-luk", "Дробчета с лук", "2,80", "300", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,20", "250", ""],
["", "manatarki-v-zekhtin", "Манатарки в зехтин", "10,50", "300", ""],
["", "pechurki-v-maslo", "Печурки в масло", "2,10", "300", ""],
["", "sirencza-na-khapki", "Сиренца на хапки", "4,90", "200", ""],
["", "panirana-moczarela-s-domaten-sos", "Панирана моцарела с доматен сос", "4,20", "250", ""]

            ],

            "Ястия от пилешко": [
                ["", "pile-prestizh", "Пиле Престиж", "8,40", "500", ""],
["", "pile-fantaziya", "Пиле Фантазия", "6,30", "400", ""],
["", "limonov-pile", "Лимонов пиле", "7,00", "500", ""],
["", "pile-zhulien", "Пиле Жулиен", "8,40", "500", ""],
["", "chesnovi-pileshki-filencza", "Чеснови пилешки филенца", "7,00", "450", ""],
["", "pileshki-kscheta-ss-zadusheni-zelenchuczi", "Пилешки късчета със задушени зеленчуци", "5,60", "350", ""],
["", "arabski-khapki", "Арабски хапки", "6,30", "450", ""]

            ],

            "Ястия от свинско": [
                ["", "svinsko-dzholanche-ss-zadusheni-kartofi", "Свинско джоланче със задушени картофи", "7,00", "600", ""],
["", "svinsko-pecheno", "Свинско печено", "7,00", "500", ""],
["", "svinski-rebra-s-meden-sos-i-zelenchuczi-na-skara", "Свински ребра с меден сос и зеленчуци на скара", "9,10", "500", ""],
["", "karamelizirani-svinski-karencza-s-luk-i-gbi", "Карамелизирани свински каренца с лук и гъби", "9,10", "500", ""],
["", "svinski-kotlet-s-rebro-i-zelenchuczi-na-skara", "Свински котлет с ребро и зеленчуци на скара", "11,90", "600", ""],
["", "svinski-kscheta-ss-zadusheni-zelenchuczi", "Свински късчета със задушени зеленчуци", "7,70", "350", ""],
["", "svinsko-meso-v-gben-sos", "Свинско месо в гъбен сос", "7,70", "550", ""],
["", "svinsko-drusano-s-gbi-i-gbi", "Свинско друсано с гъби и гъби", "8,40", "450", ""],
["", "svinski-dizhone", "Свински Дижоне", "7,00", "450", ""],
["", "svinski-grdi", "Свински гърди", "5,60", "300", ""],
["", "svinski-ushencza", "Свински ушенца", "4,90", "300", ""],
["", "svinski-kracheta", "Свински крачета", "4,20", "300", ""]

            ],

            "Ястия от телешко": [
                ["", "teleshki-stek-s-manatarki", "Телешки стек с манатарки", "24,50", "450", ""],
["", "pikanten-teleshki-stek", "Пикантен телешки стек", "22,40", "500", ""],
["", "teleshki-peprstek", "Телешки пепърстек", "22,40", "400", ""],
["", "govezhdi-ti-bon-s-presni-kartofi", "Говежди Ти-бон с пресни картофи", "28,70", "500", ""],
["", "teleshki-kscheta-ss-zadusheni-zelenchuczi", "Телешки късчета със задушени зеленчуци", "10,50", "250", ""]

            ],

            "Ястия от агнешко": [
                ["", "agneshki-kotlet-ss-sezonna-salata", "Агнешки котлет със сезонна салата", "18,20", "500", ""],
["", "agnepko-po-gergovski", "Агнепко по Гергьовски", "18,90", "500", ""],
["", "agneshka-glavichka-na-razsol", "Агнешка главичка на разсол", "7,70", "300", ""]

            ],

            "Спагети и Ризото": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "380", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "7,70", "380", ""],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "5,60", "400", ""],
["", "spageti-milano", "Спагети Милано", "5,60", "400", ""]

            ],

            "pizza": [
                ["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "5,60", "", ""],
["", "sirena", "Сирена", "5,60", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "dzhordzhiya", "Джорджия", "6,30", "", ""],
["", "san-dzhusto", "Сан Джусто", "4,90", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "picza-luchiya", "Пица Лучия", "5,60", "", ""]

            ],

            "grill": [
                ["", "pileshko-file", "Пилешко филе", "4,90", "250", ""],
["", "pileshko-przhelo-ot-but", "Пилешко пържело от бут", "4,90", "250", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "7,70", "450", ""],
["", "shishche-pileshko-ss-zelenchuczi", "Шишче пилешко със зеленчуци", "2,10", "150", ""],
["", "svinsko-kontrafile", "Свинско контрафиле", "5,60", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "300", ""],
["", "svinski-kareta", "Свински карета", "7,00", "300", ""],
["", "svinski-rebra-na-skara", "Свински ребра на скара", "7,00", "450", ""],
["", "svinski-shashlik", "Свински шашлик", "9,10", "450", ""],
["", "svinsko-shishche-ss-zelenchuczi", "Свинско шишче със зеленчуци", "2,80", "150", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kyufte-s-bekon-i-kashkaval", "Кюфте с бекон и кашкавал", "4,90", "", ""],
["", "pleskavicza", "Плескавица", "2,10", "150", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "krnache", "Кърначе", "3,50", "250", ""],
["", "sudzhuk-na-divech-na-greben", "Суджук на дивеч на гребен", "7,00", "350", ""],
["", "surov-sudzhuk-na-greben", "Суров суджук на гребен", "4,90", "250", ""],
["", "surova-nadenicza", "Сурова наденица", "1,40", "110", ""],
["", "meshana-mesa", "Мешана меса", "31,50", "1900", ""]

            ],

            "fish": [
                ["", "kalmari-po-grczki", "Калмари по Гръцки", "10,50", "300", ""],
["", "skaridi-po-sredizemnomorski", "Скариди по Средиземноморски", "7,70", "200", ""],
["", "przhen-sharan", "Пържен Шаран", "8,40", "400", ""]

            ],

            "dry-appetizer": [
                ["", "staroplaninski-sudzhuk-boni", "Старопланински суджук Бони", "2,80", "50", ""],
["", "pastrma-boni", "Пастърма Бони", "3,50", "50", ""],
["", "karlovska-lukanka", "Карловска луканка", "2,10", "50", ""],
["", "file-elena-boni", "Филе Елена Бони", "3,50", "", ""],
["", "plato-ss-sirena", "Плато със сирена", "11,20", "350", ""],
["", "sudzhuk-ot-divech", "Суджук от дивеч", "4,20", "50", ""],
["", "pastrma-ot-divech", "Пастърма от дивеч", "4,20", "50", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "220", ""],
["", "presni-kartofi", "Пресни картофи", "2,80", "200", ""],
["", "presni-kartofi-ss-sirene", "Пресни картофи със сирене", "3,50", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "250", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "3,50", "300", ""],
["", "kartofi-po-selski", "Картофи по селски", "2,80", "300", ""],
["", "lyuti-chushki", "Люти чушки", "1,40", "100", ""]

            ],

            "sauces": [
                ["", "mlechno-majonezen-sos", "Млечно-майонезен сос", "0,70", "100", ""],
["", "domaten-sos", "Доматен сос", "0,70", "100", ""],
["", "grejvi-sos", "Грейви сос", "1,40", "100", ""],
["", "gben-sos", "Гъбен сос", "1,40", "100", ""],
["", "barbekyu-sos", "Барбекю сос", "1,40", "100", ""]

            ],

            "bread": [
                ["", "pitka", "Питка", "0,00", "", ""],
["", "prlenka", "Пърленка", "0,70", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "", ""],
["", "pitka-ss-sirene", "Питка със сирене", "2,10", "", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "180", ""],
["", "frenska-selska-torta", "Френска селска торта", "3,50", "120", ""],
["", "chijzkejk", "Чийзкейк", "3,50", "120", ""],
["", "torta", "Торта", "3,50", "180", ""]

            ]
        }', 
        'slug' => 'bar-and-dinner-prestige',
        'business_name' => 'Bar and Dinner Prestige',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Lovech',
        'region' => 'Lovech',
        'postal_code' => '5500',
        'address' => 'ул. Търговска 2',
        'address_additional' => '',
        'coords_x' => '43.13175269',
        'coords_y' => '24.71480279',
        'phone' => '+359887984444',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],


];
