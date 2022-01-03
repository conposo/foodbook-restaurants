<?php

use Carbon\Carbon;

$restaurants = [

    [
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "pasta": [
                ["", "papardele", "Папарделе", "10,50", "300", ""],
["", "papardele-al-ragu-neapoletana", "Папарделе ал рагу неаполетана", "9,10", "300", ""],
["", "taliateli-ss-skaridi-cheri-domati-i-parmezan", "Талиатели със скариди, чери домати и пармезан", "10,50", "300", ""],
["", "taliolini-karbonara", "Талиолини Карбонара", "7,00", "300", ""],
["", "penne-arabiata", "Пенне арабиата", "6,30", "300", ""],
["", "fusili-s-pancheta", "Фусили с панчета", "7,00", "300", ""],
["", "pakeri-s-pancheta-sushen-domat-i-presen-spanak", "Пакери с панчета, сушен домат и пресен спанак", "10,50", "350", ""],
["", "spageti-vongole", "Спагети Вонголе", "10,50", "300", ""],
["", "tortelini", "Тортелини", "9,80", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "6,30", "450", ""],
["", "burata", "Бурата", "9,80", "450", ""],
["", "vegetariana", "Вегетариана", "10,50", "450", ""],
["", "kaprichoza", "Капричоза", "9,10", "450", ""],
["", "salami", "Салами", "10,50", "450", ""],
["", "polo", "Поло", "9,10", "450", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "10,50", "450", ""],
["", "puliya", "Пулия", "9,10", "450", ""],
["", "tonno-chipola", "Тонно чипола", "10,50", "450", ""],
["", "neapolitana", "Неаполитана", "9,80", "450", ""],
["", "verdure", "Вердуре", "10,50", "450", ""],
["", "salsiche", "Салсиче", "10,50", "450", ""],
["", "peperoni", "Пеперони", "10,50", "450", ""],
["", "picza-s-krushi", "Пица с круши", "10,50", "450", ""],
["", "kuatro-stadzhoni", "Куатро стаджони", "9,80", "450", ""],
["", "verona", "Верона", "10,50", "450", ""],
["", "trentina", "Трентина", "10,50", "450", ""],
["", "proshuto-krudo", "Прошуто крудо", "10,50", "450", ""]

            ],

            "risotto": [
                ["", "rizoto-s-manatarki-i-pasta-ot-leten-tryufel-s-parmezan", "Ризото с манатарки и паста от летен трюфел с пармезан", "10,50", "350", ""],
["", "rizoto-ss-skaridi-fermersko-maslo-parmezan-domaten-sos", "Ризото със скариди, фермерско масло, пармезан, доматен сос", "11,20", "350", ""],
["", "rizoto-a-la-sorentina", "Ризото а ла Сорентина", "11,20", "350", ""]

            ]
        }', 
        'slug' => 'pizza-billy',
        'business_name' => 'Пица Billy',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ул. Св. Иван Рилски 75',
        'address_additional' => '',
        'coords_x' => '42.2631501',
        'coords_y' => '23.1101316',
        'phone' => '+359897667688',
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
            
            "Пици с продукти от Италия": [
                ["", "picza-khalapeno", "Пица Халапеньо", "12,60", "", ""],
["", "neapolitana", "Неаполитана", "8,40", "", ""],
["", "picza-tuna", "Пица Туна", "9,10", "", ""]

            ],

            "pizza": [
                ["", "picza-karbonara", "Пица Карбонара", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/1010955.jpg?width=302"],
["", "picza-chorizo", "Пица Чоризо", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/1010956.jpg?width=302"],
["", "picza-mr--mrs", "Пица MR & MRS", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/1010957.jpg?width=302"],
["", "picza-chetiri-sirena", "Пица Четири Сирена", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/1010958.jpg?width=302"],
["", "picza-meksikana", "Пица Мексикана", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/1010959.jpg?width=302"],
["", "picza-margarita", "Пица Маргарита", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/1010960.jpg?width=302"],
["", "picza-kalczone", "Пица Калцоне", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/1010961.jpg?width=302"]

            ],

            "Детско Меню": [
                ["", "malka-picza-stefi", "Малка пица Стефи", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/1058842.jpg?width=302"],
["", "khrupkavo-pileshko-file", "Хрупкаво пилешко филе", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/1058843.jpg?width=302"]

            ],

            "Coca-Cola  напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1011186.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1011187.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1011188.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1011189.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1011190.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1011191.jpg?width=302"]

            ],

            "drinks": [
                ["", "studen-chaj", "Студен чай", "1,40", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""]

            ],

            "Фрешове": [
                ["", "fresh-portokal", "Фреш портокал", "2,10", "300", ""],
["", "fresh-portokal", "Фреш портокал", "2,80", "500", ""],
["", "fresh-grejpfrut", "Фреш Грейпфрут", "2,10", "300", ""],
["", "fresh-grejpfrut", "Фреш Грейпфрут", "2,80", "500", ""]

            ],

            "beer": [
                ["", "kamenicza", "Каменица", "0,70", "500", ""],
["", "astika", "Астика", "0,70", "500", ""],
["", "staropramen", "Старопрамен", "1,40", "500", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""],
["", "burgasko", "Бургаско", "0,70", "500", ""],
["", "beks", "Бекс", "1,40", "500", ""],
["", "korona", "Корона", "2,10", "330", ""]

            ]
        }', 
        'slug' => 'mr-and-mrs-pizza',
        'business_name' => 'Mr and Mrs Pizza',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Gabrovo',
        'region' => 'Gabrovo',
        'postal_code' => '5300',
        'address' => 'ул. Янтра 2',
        'address_additional' => '',
        'coords_x' => '42.8725599',
        'coords_y' => '25.3187724',
        'phone' => '+359877494749',
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
                ["", "picza-s-kolbas-kashkaval-i-domateno-pyure", "Пица с колбас, кашкавал и доматено пюре", "1,40", "220", ""],
["", "picza-s-domati-moczarela-sirene-domateno-pyure-i-kashkaval", "Пица с домати, моцарела, сирене, доматено пюре и кашкавал", "1,40", "260", ""],
["", "picza-s-shunka-gbi-chushki-domateno-pyure-i-kashkaval", "Пица с шунка, гъби, чушки, доматено пюре и кашкавал", "1,40", "220", ""],
["", "picza-s-pileshko-file-topeno-sirene-czarevicza-domateno-pyure-i-kashkaval", "Пица с пилешко филе, топено сирене, царевица, доматено пюре и кашкавал", "1,40", "260", ""],
["", "picza-s-lukanka-topeno-sirene-kiseli-krastavichki-domateno-pyure-i-kashkaval", "Пица с луканка, топено сирене, кисели краставички, доматено пюре и кашкавал", "2,10", "260", ""],
["", "picza-s-kolbas-chushki-topeno-sirene-kashkaval-i-domateno-pyure", "Пица с колбас  чушки, топено сирене, кашкавал и доматено пюре", "1,40", "220", ""]

            ]
        }', 
        'slug' => 'vkusna-pica',
        'business_name' => 'Вкусна пица',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ж.к. Бистрица',
        'address_additional' => '',
        'coords_x' => '42.25213294',
        'coords_y' => '23.12836562',
        'phone' => '+359899983687 /  +35999836891',
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
                ["", "pileshki-dyuner", "Пилешки дюнер", "1,40", "", ""],
["", "teleshki-dyuner", "Телешки дюнер", "2,80", "", ""]

            ],

            "burgers": [
                ["", "pileshki-burger", "Пилешки бургер", "2,10", "", ""],
["", "dvoen-pileshki-burger-s-yajcze-i-kashkaval", "Двоен пилешки бургер с яйце и кашкавал", "3,50", "450", ""],
["", "teleshki-burger", "Телешки бургер", "2,80", "", ""],
["", "dvoen-teleshki-burger-s-kashkaval-i-yajcze", "Двоен телешки бургер с кашкавал и яйце", "4,20", "450", ""]

            ],

            "others": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "falafel-dyuner", "Фалафел дюнер", "1,40", "300", ""],
["", "falafel", "Фалафел", "0,00", "", ""],
["", "dyuner-v-pitka", "Дюнер в питка", "2,80", "380", ""],
["", "falafel", "Фалафел", "2,10", "300", ""]

            ]
        }', 
        'slug' => 'duner-ramzi',
        'business_name' => 'Duner Ramzi',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ул. &quot;Княз Борис I&quot; 26',
        'address_additional' => '',
        'coords_x' => '42.26299729',
        'coords_y' => '23.1165533',
        'phone' => '+359876071788',
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
                ["", "salata-kadife", "Салата Кадифе", "4,90", "350", ""],
["", "czezar-s-khrupkavo-pile", "Цезар с хрупкаво пиле", "4,90", "350", ""],
["", "salmon-di-parma", "Салмон Ди Парма", "4,90", "350", ""],
["", "fresh-griin", "Фреш Гриин", "3,50", "300", ""],
["", "shopska", "Шопска", "2,80", "400", ""],
["", "salata-s-avokado-i-riba-ton", "Салата с авокадо и риба тон", "4,90", "350", ""]

            ],

            "starters": [
                ["", "khrupkavi-pileshki-fileta", "Хрупкави пилешки филета", "4,20", "220", ""],
["", "grilovani-kartofi", "Гриловани картофи", "2,80", "250", ""],
["", "khrupkavi-pileshki-krilcza", "Хрупкави пилешки крилца", "3,50", "200", ""],
["", "przheni-kartofki", "Пържени картофки", "1,40", "250", ""],
["", "khrupkavi-kalmari", "Хрупкави калмари", "8,40", "200", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,90", "", ""],
["", "peperoni", "Пеперони", "4,90", "", ""],
["", "picza-proshuto", "Пица Прошуто", "4,90", "", ""]

            ],

            "pasta": [
                ["", "spageti-s-domaten-sos-riba-ton-i-chedr", "Спагети с доматен сос, риба тон и чедър", "4,20", "450", ""],
["", "spageti-s-domaten-sos-i-chedr", "Спагети с доматен сос и чедър", "2,80", "360", ""],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "400", ""],
["", "spageti-kuatro-formadzhi", "Спагети Куатро Формаджи", "3,50", "400", ""],
["", "spageti-s-pileshko-file-gbi-i-smetana", "Спагети с пилешко филе, гъби и сметана", "3,50", "450", ""],
["", "spageti-s-domaten-sos-midi-i-maslini", "Спагети с доматен сос, миди и маслини", "4,90", "400", ""]

            ],

            "burgers": [
                ["", "burger-klasik", "Бургер Класик", "4,20", "", ""],
["", "burger-pile", "Бургер Пиле", "4,20", "", ""],
["", "burger-vege", "Бургер Веге", "4,20", "", ""]

            ],

            "Основни ястия": [
                ["", "pushen-svinski-vrat-na-skara", "Пушен свински врат на скара", "4,90", "250", ""],
["", "svinsko-bon-file-na-skara", "Свинско бон филе на скара", "5,60", "250", ""],
["", "shpikovan-svinski-vrat-s-kartofeno-pyure-i-sos-demi-glas", "Шпикован свински врат с картофено пюре и сос Деми Глас", "4,90", "300", ""],
["", "teleshki-ribaj-stek-s-pepr-sos", "Телешки Рибай стек с пепър сос", "11,90", "", ""],
["", "pile-teriyaki-ss-svezha-salata", "Пиле Терияки със свежа салата", "4,90", "300", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "4,90", "250", ""],
["", "pileshko-role-s-proshuto-pesto-spanak-i-moczarela", "Пилешко роле с прошуто, песто, спанак и моцарела", "5,60", "300", ""]

            ],

            "Риби и морски дарове": [
                ["", "pstrva-na-skara", "Пъстърва на скара", "5,60", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "8,40", "350", ""],
["", "przhen-safrid", "Пържен сафрид", "3,50", "200", ""],
["", "shishcheta-s-midi-i-marinovani-lukcheta-na-skara", "Шишчета с миди и мариновани лукчета на скара", "5,60", "150", ""],
["", "oktopod-na-skara", "Октопод на скара", "16,10", "200", ""],
["", "pipala-ot-kalmari-na-skara", "Пипала от калмари на скара", "9,80", "200", ""]

            ],

            "garnish": [
                ["", "sotirani-zelenchuczi", "Сотирани зеленчуци", "1,40", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "150", ""],
["", "miks-domati-i-krastaviczi", "Микс домати и краставици", "1,40", "150", ""]

            ],

            "Пърленки": [
                ["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "150", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "200", ""]

            ]
        }', 
        'slug' => 'kadife-bar-dinner',
        'business_name' => 'Кадифе Bar &amp; Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3700',
        'address' => 'ул. Търговска 2',
        'address_additional' => '',
        'coords_x' => '43.9871485',
        'coords_y' => '22.87646137',
        'phone' => '+359885840023 ; 359888324415',
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
            
            "Бургер меню": [
                ["", "menyu-kyuftencza-ot-black-angus", "Меню кюфтенца от Black Angus", "9,80", "", ""]

            ],

            "salads": [
                ["", "salata-czezar", "Салата Цезар", "6,30", "350", ""]

            ],

            "Основни ястия": [
                ["", "svinski-rebra", "Свински ребра", "8,40", "400", ""]

            ],

            "sauces": [
                ["", "medena-gorchicza", "Медена горчица", "0,70", "40", ""],
["", "burger-sos", "Бургер сос", "0,70", "40", ""],
["", "ketchup", "Кетчуп", "0,70", "40", ""],
["", "majoneza", "Майонеза", "0,70", "40", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "40", ""],
["", "sladko-chili", "Сладко чили", "0,70", "40", ""],
["", "gorchicza", "Горчица", "0,70", "40", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "40", ""]

            ],

            "Coca-Cola  напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1077296.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1077298.jpg?width=302"]

            ]
        }', 
        'slug' => 'americano-burgers-grill-vidin',
        'business_name' => 'Americano Burgers &amp; Grill (Видин)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3703',
        'address' => 'ул. Уилям Гладстон 27',
        'address_additional' => '',
        'coords_x' => '43.9918921',
        'coords_y' => '22.8780436',
        'phone' => '+359885277588',
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
                ["", "shopska-salata", "Шопска салата", "4,20", "", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,90", "350", ""],
["", "picza-chetiri-sirena", "Пица четири сирена", "4,90", "400", ""],
["", "picza-karbonara", "Пица Карбонара", "5,60", "400", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,80", "250", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "200", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "200", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "200", ""],
["", "khavaj", "Хавай", "6,30", "400", ""],
["", "kalczone", "Калцоне", "7,00", "400", ""],
["", "byagashho-pile", "Бягащо пиле", "6,30", "400", ""],
["", "brothers-house", "Brothers House", "7,00", "500", ""],
["", "peperoni", "Пеперони", "6,30", "400", ""],
["", "proshuto-fungi", "Прошуто фунги", "6,30", "400", ""]

            ],

            "burgers": [
                ["", "chijz-burger", "Чийз бургер", "4,90", "300", ""],
["", "brothers-house-burger", "Brother’s House бургер", "4,90", "350", ""],
["", "burger-s-pileshko", "Бургер с пилешко", "4,90", "300", ""],
["", "gorgonzola-bijf-burger", "Горгонзола Бийф Бургер", "4,90", "350", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "2,10", "250", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,10", "250", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "2,80", "250", ""],
["", "caprese-burger", "Caprese бургер", "4,90", "300", ""]

            ],

            "others": [
                ["", "pileshki-prchiczi-v-kornflejks", "Пилешки пръчици в корнфлейкс", "4,90", "", ""],
["", "presni-kartofi", "Пресни картофи", "2,10", "", ""],
["", "presni-kartofi-ss-sirene", "Пресни картофи със сирене", "2,80", "", ""]

            ],

            "desserts": [
                ["", "chijzkejk", "Чийзкейк", "2,80", "", ""],
["", "biskvitena-torta-s-shokoladov-mus-i-nutela", "Бисквитена торта с шоколадов мус и Нутела", "2,80", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/869670.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/869671.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/869677.jpg?width=302"]

            ],

            "Бири": [
                ["", "beks-bezalkokholen", "Бекс безалкохолен", "2,10", "", ""]

            ]
        }', 
        'slug' => 'the-brothers-house',
        'business_name' => 'The brothers house',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8804',
        'address' => 'ул. Георги Икономов №24',
        'address_additional' => '',
        'coords_x' => '42.67896701',
        'coords_y' => '26.30903381',
        'phone' => '+359889022210',
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
            
            "Китайска кухня": [
                ["", "pile-ss-zelenchuczi", "Пиле със зеленчуци", "1,40", "", ""],
["", "pile-s-bambuk-i-gbi", "Пиле с бамбук и гъби", "2,10", "", ""],
["", "khapki-ss-susam", "Хапки със сусам", "2,10", "", ""],
["", "khapki-v-sladko-kisel-sos", "Хапки в сладко кисел сос", "1,40", "", ""],
["", "orizovi-spageti-s-pile-i-zelenchuczi", "Оризови спагети с пиле и зеленчуци", "1,40", "", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "0,70", "", ""],
["", "oriz-s-pile-i-zelenchuczi", "Ориз с пиле и зеленчуци", "1,40", "", ""],
["", "spageti-s-pile-i-zelenchuczi", "Спагети с пиле и зеленчуци", "1,40", "", ""]

            ],

            "sauces": [
                ["", "sladko-kisel-sos", "Сладко кисел сос", "0,70", "200", ""],
["", "soev-sos", "Соев сос", "0,70", "200", ""],
["", "lyut-sos", "Лют сос", "0,70", "30", ""]

            ]
        }', 
        'slug' => 'kitayska-brza-hrana',
        'business_name' => 'Китайска Бърза Храна',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'бул. Стефан Стамболов 50',
        'address_additional' => '',
        'coords_x' => '42.68855885',
        'coords_y' => '26.34132814',
        'phone' => '+35897261599',
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
                ["", "picza-proshuto", "Пица Прошуто", "4,20", "", ""],
["", "picza-margarita", "Пица Маргарита", "3,50", "", ""],
["", "picza-amigo", "Пица Амиго", "4,90", "", ""],
["", "picza-deluks", "Пица Делукс", "4,20", "", ""],
["", "picza-vega", "Пица Вега", "4,90", "", ""],
["", "picza-bekona", "Пица Бекона", "4,90", "", ""],
["", "picza-karibi", "Пица Кариби", "4,90", "", ""],
["", "picza-peperoni", "Пица Пеперони", "4,90", "", ""],
["", "picza-napoli", "Пица Наполи", "4,90", "", ""],
["", "picza-salami", "Пица Салами", "4,90", "", ""],
["", "picza-mafiozo", "Пица Мафиозо", "4,20", "", ""],
["", "picza-sicziliyana", "Пица Сицилияна", "4,90", "", ""],
["", "picza-roma", "Пица Рома", "4,20", "", ""],
["", "picza-vegetariya", "Пица Вегетария", "4,20", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,20", "", ""],
["", "picza-kuatro-formadzhi", "Пица Куатро Формаджи", "4,90", "", ""],
["", "picza-kuatro-stadzhoni", "Пица Куатро Стаджони", "4,90", "", ""],
["", "picza-kasteliyana", "Пица Кастелияна", "4,90", "", ""],
["", "picza-khavaj", "Пица Хавай", "4,90", "", ""],
["", "picza-tono", "Пица Тоно", "4,90", "", ""],
["", "picza-sinya-margarita", "Пица Синя Маргарита", "3,50", "", ""]

            ],

            "pasta": [
                ["", "spageti-napoli", "Спагети Наполи", "3,50", "400", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "400", ""],
["", "spageti-mama-miya", "Спагети Мама Мия", "4,20", "400", ""],
["", "spageti-kuatro-formadzhi", "Спагети Куатро Формаджи", "4,20", "400", ""]

            ],

            "Фамилни пици": [
                ["", "xl-amigo", "XL Амиго", "7,70", "1200", ""],
["", "xl-vegetariya", "XL Вегетария", "7,00", "1200", ""],
["", "xl-kuatro-stadzhoni", "XL Куатро Стаджони", "7,70", "1200", ""],
["", "xl-kuatro-formadzhi", "XL Куатро Формаджи", "7,70", "1200", ""],
["", "xl-margarita", "XL Маргарита", "7,00", "1200", ""],
["", "xl-bekon", "XL Бекон", "7,00", "1200", ""],
["", "xl-vega", "XL Вега", "7,70", "1200", ""],
["", "xl-kaprichoza", "XL Капричоза", "7,70", "1200", ""],
["", "xl-salami", "XL Салами", "7,00", "1200", ""],
["", "xl-proshuto", "XL Прошуто", "7,00", "1200", ""],
["", "tava-picza-2xl", "Тава пица 2XL", "13,30", "2200", ""]

            ]
        }', 
        'slug' => 'pizza-amigo',
        'business_name' => 'Pizza Amigo',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dimitrovgrad',
        'region' => 'Dimitrovgrad',
        'postal_code' => '6404',
        'address' => 'ул. 3-ти Март 9',
        'address_additional' => '',
        'coords_x' => '42.05243939',
        'coords_y' => '25.58653021',
        'phone' => '+359039125302',
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
                ["", "picza", "Пица", "16,80", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1108259.jpg?width=302"],
["", "fuzetea-mango-i-ananas-studen-chaj", "Fuzetea Манго и ананас, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1108260.jpg?width=302"],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1108261.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1108262.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/1108263.jpg?width=302"]

            ]
        }', 
        'slug' => 'harna-pekarna',
        'business_name' => 'Харна пекарна',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8801',
        'address' => 'ул. Петко Каравелов 23',
        'address_additional' => '',
        'coords_x' => '42.68253137',
        'coords_y' => '26.32306431',
        'phone' => '+359885456440',
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
            
            "Цяла пица": [
                ["", "picza-kaprichoza", "Пица Капричоза", "8,40", "", ""],
["", "picza-shunka-i-kashkaval", "Пица шунка и кашкавал", "8,40", "", ""],
["", "picza-shunka-i-czarevicza", "Пица шунка и царевица", "8,40", "", ""],
["", "picza-proshuto", "Пица Прошуто", "8,40", "", ""],
["", "picza-pile-i-gbi", "Пица пиле и гъби", "8,40", "", ""],
["", "picza-margarita", "Пица Маргарита", "8,40", "", ""]

            ],

            "Пица на парче": [
                ["", "parche-picza-kaprichoza", "Парче пица Капричоза", "0,70", "", ""],
["", "parche-picza-shunka-i-kashkaval", "Парче пица шунка и кашкавал", "0,70", "", ""],
["", "parche-picza-shunka-i-czarevicza", "Парче пица шунка и царевица", "0,70", "", ""],
["", "parche-picza-proshuto", "Парче пица Прошуто", "0,70", "", ""],
["", "parche-picza-pile-i-gbi", "Парче пица пиле и гъби", "0,70", "", ""],
["", "parche-picza-margarita", "Парче пица Маргарита", "0,70", "", ""]

            ]
        }', 
        'slug' => 'burger-point-pizza',
        'business_name' => 'Burger Point Pizza',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'бул.Цар Освободител 3А',
        'address_additional' => '',
        'coords_x' => '42.68070604',
        'coords_y' => '26.31703082',
        'phone' => '+359895546622',
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
            
            "Торти": [
                ["", "torta-shoko-leshnik", "Торта шоко лешник", "2,10", "", ""],
["", "torta-mona-liza", "Торта Мона Лиза", "2,10", "", ""],
["", "torta-monako", "Торта Монако", "2,10", "", ""],
["", "torta-beki", "Торта Беки", "2,10", "", ""]

            ],

            "Свещи": [
                ["", "iskryashhi-sveshhi---fontan", "Искрящи свещи - фонтан", "1,40", "", ""],
["", "sveshh-czifra", "Свещ цифра", "1,40", "", ""]

            ]
        }', 
        'slug' => 'sladkarnica-char-sliven',
        'business_name' => 'Сладкарница Чар (Сливен)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'ул. Мур 2',
        'address_additional' => '',
        'coords_x' => '42.67848172',
        'coords_y' => '26.32741725',
        'phone' => '+359877786646',
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
                ["", "salata-rustel", "Салата Рустел", "4,90", "350", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "zelena-salata", "Зелена салата", "2,80", "400", ""],
["", "czezar", "Цезар", "4,20", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "kapreze", "Капрезе", "4,20", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "400", ""]

            ],

            "appetizer": [
                ["", "sirene-po-kasapski", "Сирене по касапски", "2,10", "100", ""],
["", "dip-ss-sirene-feta", "Дип със сирене фета", "2,80", "400", ""],
["", "lyutivka", "Лютивка", "2,80", "100", ""]

            ],

            "Студени предястия": [
                ["", "lukanka", "Луканка", "4,20", "100", ""],
["", "kashkaval", "Кашкавал", "2,80", "100", ""],
["", "file-elena", "Филе Елена", "4,90", "100", ""]

            ],

            "Топли предястия": [
                ["", "khrupkavi-sirencza", "Хрупкави сиренца", "2,80", "200", ""],
["", "panirani-topeni-sirencza-s-borovinkovo-sladko", "Панирани топени сиренца с боровинково сладко", "3,50", "180", ""],
["", "gbi-v-maslo-i-chesn", "Гъби в масло и чесън", "2,80", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "250", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "1,40", "300", ""],
["", "kartofi-uedzhis", "Картофи уеджис", "1,40", "250", ""],
["", "pileshki-drob-s-gbi-i-kashkaval", "Пилешки дроб с гъби и кашкавал", "2,80", "350", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "2,80", "350", ""],
["", "przheni-kozhichki", "Пържени кожички", "2,10", "300", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "2,80", "330", ""],
["", "uklej", "Уклей", "2,80", "250", ""],
["", "pileshki-krilcza-ss-sos-barbekyu", "Пилешки крилца със сос Барбекю", "3,50", "250", ""],
["", "khapki-rustel", "Хапки Рустел", "4,20", "400", ""],
["", "glazirani-krilcza-s-med", "Глазирани крилца с мед", "3,50", "270", ""],
["", "domashen-chips", "Домашен чипс", "2,10", "280", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,80", "300", ""],
["", "kashkavaleni-prchiczi", "Кашкавалени пръчици", "2,80", "200", ""],
["", "kashkavalcheta-v-bekon", "Кашкавалчета в бекон", "4,20", "250", ""],
["", "topeni-sirencza-v-bekon", "Топени сиренца в бекон", "4,20", "260", ""],
["", "sirene-po-sofijski", "Сирене по Софийски", "2,80", "300", ""],
["", "pileshki-vodenichki-pane", "Пилешки воденички пане", "2,80", "330", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "2,80", "250", ""],
["", "svinski-cheren-drob-na-skara", "Свински черен дроб на скара", "2,80", "400", ""],
["", "skumriya-na-skara", "Скумрия на скара", "4,90", "", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-kartofi-smetana-shunka-i-kashkaval", "Запеканка с картофи, сметана, шунка и кашкавал", "3,50", "400", ""],
["", "zapekanka-s-pileshko-bekon-gbi-i-kashkaval", "Запеканка с пилешко, бекон, гъби и кашкавал", "3,50", "400", ""],
["", "zapekanka-ss-sino-sirene-topeno-sirene-smetana-i-kashkaval", "Запеканка със синьо сирене, топено сирене, сметана и кашкавал", "4,20", "400", ""]

            ],

            "Основни ястия": [
                ["", "pileshka-przhola-s-miks-ot-zeleni-salati", "Пилешка пържола с микс от зелени салати", "4,20", "350", ""],
["", "pileshki-kscheta-ss-smetana-emental-i-brokoli", "Пилешки късчета със сметана, ементал и броколи", "4,90", "300", ""],
["", "bon-file-ss-sos-demiglas-garnirano-s-kartofki-uedzhis", "Бон филе със сос Демиглас, гарнирано с картофки Уеджис", "6,30", "250", ""],
["", "svinska-vratna-przhola-s-gben-sos-garnirana-s-kartofki-uedzhis", "Свинска вратна пържола с гъбен сос, гарнирана с картофки Уеджис", "4,90", "300", ""]

            ],

            "grill": [
                ["", "svinski-sochni-rebra-glazirani-s-barbekyu-sos-podneseni-s-kartofki", "Свински сочни ребра, глазирани с барбекю сос, поднесени с картофки", "7,70", "500", ""],
["", "tri-kebapcheta-s-garnitura-kartofi", "Три кебапчета с гарнитура картофи", "2,80", "310", ""],
["", "tri-kyufteta-s-garnitura-kartofi", "Три кюфтета с гарнитура картофи", "2,80", "310", ""],
["", "chorbadzhijski-sach", "Чорбаджийски сач", "11,20", "1000", ""]

            ],

            "desserts": [
                ["", "dva-broya-palachinki-s-shokolad-i-banan", "Два броя палачинки с шоколад и банан", "2,10", "", ""]

            ],

            "bread": [
                ["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "bageta-s-maslo-i-chesn", "Багета с масло и чесън", "1,40", "", ""],
["", "prlenka-s-kashkaval-i-sharena-sol", "Пърленка с кашкавал и шарена сол", "2,10", "", ""]

            ]
        }', 
        'slug' => 'rustel',
        'business_name' => 'Рустел',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3700',
        'address' => 'ул. Свети Методий 12',
        'address_additional' => '',
        'coords_x' => '43.98064602',
        'coords_y' => '22.87235853',
        'phone' => '+359894409250',
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
            
            "Хот Дог": [
                ["", "khot-dog", "Хот дог", "0,70", "200", ""],
["", "amerikanski-khot-dog", "Американски хот дог", "1,40", "300", ""]

            ],

            "burgers": [
                ["", "burger-s-pileshko-kyufte", "Бургер с пилешко кюфте", "1,40", "", ""],
["", "burger-ss-svinsko-kyufte", "Бургер със свинско кюфте", "2,10", "", ""],
["", "burger-s-teleshko-kyufte", "Бургер с телешко кюфте", "2,10", "", ""],
["", "burger-s-bekon", "Бургер с бекон", "2,10", "", ""],
["", "burger-s-shunka", "Бургер с шунка", "2,10", "", ""],
["", "burger-s-pileshko-file", "Бургер с пилешко филе", "2,10", "", ""]

            ],

            "dunners": [
                ["", "dyuner", "Дюнер", "2,10", "", ""]

            ],

            "Пържени картофи": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "", ""]

            ],

            "Палачинки": [
                ["", "palachinka-s-shokolad", "Палачинка с шоколад", "0,70", "", ""],
["", "palachinka-s-konfityur", "Палачинка с конфитюр", "0,70", "", ""]

            ],

            "drinks": [
                ["", "pepsi", "Пепси", "0,70", "", ""],
["", "mirinda-portokal", "Миринда портокал", "0,70", "", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна Баня", "0,70", "", ""]

            ]
        }', 
        'slug' => 'burger-time',
        'business_name' => 'Burger Time',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ул. Гоце Делчев 6',
        'address_additional' => '',
        'coords_x' => '42.26600046',
        'coords_y' => '23.12145547',
        'phone' => '+359894912502',
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
            
            "burgers": [
                ["", "khamburger", "Хамбургер", "0,70", "100", ""],
["", "yamburger", "Ямбургер", "0,70", "100", ""],
["", "chijz-tost", "Чийз тост", "0,70", "80", ""],
["", "pileshki-burger", "Пилешки бургер", "0,70", "120", ""],
["", "chijz-burger", "Чийз бургер", "0,70", "120", ""],
["", "dvoen-chijz-burger", "Двоен чийз бургер", "1,40", "180", ""],
["", "big-burger", "Биг бургер", "2,80", "250", ""],
["", "bejkn-strijt", "Бейкън стрийт", "2,10", "180", ""],
["", "mega-burger", "Мега бургер", "2,10", "200", ""],
["", "maks-pepr", "Макс пепър", "2,10", "180", ""],
["", "premium-burger", "Премиум бургер", "2,80", "200", ""],
["", "gurme-burger", "Гурме бургер", "3,50", "200", ""],
["", "patato-burger", "Патато бургер", "2,10", "180", ""],
["", "chikn-burger", "Чикън бургер", "2,10", "180", ""],
["", "kntri-chijz-burger", "Кънтри чийз бургер", "2,80", "180", ""]

            ],

            "Меню бургери": [
                ["", "dvoen-chijz-burger-menyu", "Двоен чийз бургер меню", "2,80", "", ""],
["", "big-burger-menyu", "Биг бургер меню", "4,20", "", ""],
["", "bejkn-strijt-menyu", "Бейкън стрийт  меню", "3,50", "", ""],
["", "mega-burger-menyu", "Мега бургер меню", "3,50", "", ""],
["", "maks-pepr-menyu", "Макс пепър меню", "3,50", "", ""],
["", "premium-burger-menyu", "Премиум бургер меню", "4,20", "", ""],
["", "gurme-burger-menyu", "Гурме бургер меню", "4,90", "", ""],
["", "patato-burger-menyu", "Патато бургер меню", "3,50", "", ""],
["", "chikn-burger-menyu", "Чикън бургер меню", "3,50", "", ""],
["", "kntri-chijz-burger-menyu", "Кънтри чийз бургер меню", "4,20", "", ""]

            ],

            "Промоции": [
                ["", "pileshki-burger-i-pepsi", "Пилешки бургер и пепси", "1,40", "", ""],
["", "pileshki-burger-i-kartofki", "Пилешки бургер и картофки", "1,40", "", ""],
["", "chijz-burger-i-pepsi", "Чийз бургер и пепси", "1,40", "", ""],
["", "chijz-burger-i-kartofki", "Чийз бургер и картофки", "1,40", "", ""],
["", "khamburger-i-kartofki", "Хамбургер и картофки", "1,40", "", ""],
["", "mega-burger-i-pepsi", "Мега бургер и пепси", "2,80", "", ""],
["", "dvoen-chijz-burger-i-kartofi", "Двоен чийз бургер и картофи", "2,10", "", ""],
["", "dvoen-chijz-burger-i-pepsi", "Двоен чийз бургер и пепси", "2,10", "", ""],
["", "chijz-burger-s-pepsi-i-kartofki", "Чийз бургер с пепси и картофки", "2,10", "", ""],
["", "pileshki-burger-s-pepsi-i-kartofki", "Пилешки бургер с пепси и картофки", "2,10", "", ""],
["", "big-burger", "Биг бургер", "4,20", "", ""],
["", "mega-burger", "Мега бургер", "3,50", "", ""],
["", "khamburger", "Хамбургер", "4,20", "", ""]

            ],

            "garnish": [
                ["", "malki-kartofki", "Малки картофки", "0,70", "70", ""],
["", "sredni-kartofki", "Средни картофки", "1,40", "120", ""],
["", "golemi-kartofki", "Големи картофки", "1,40", "160", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "0,70", "", ""]

            ],

            "dunners": [
                ["", "malk-dyuner", "Малък дюнер", "1,40", "", ""],
["", "dvoen-malk-dyuner", "Двоен малък дюнер", "2,10", "", ""],
["", "sreden-dyuner", "Среден дюнер", "2,80", "", ""],
["", "golyam-dyuner", "Голям дюнер", "3,50", "", ""],
["", "malk-giros", "Малък гирос", "2,10", "300", ""],
["", "golyam-giros", "Голям гирос", "2,80", "400", ""],
["", "nemski-dyuner", "Немски дюнер", "2,80", "400", ""],
["", "grczki-dzhob", "Гръцки джоб", "2,80", "350", ""],
["", "tortila-dyuner-s-khrupkavo-pile", "Тортила дюнер с хрупкаво пиле", "2,80", "300", ""],
["", "tortila-dyuner-ss-sochno-pileshko", "Тортила дюнер със сочно пилешко", "2,80", "300", ""],
["", "tortila-dyuner-s-pile-na-gril", "Тортила дюнер с пиле на грил", "2,80", "300", ""]

            ],

            "salads": [
                ["", "gradinska-salata", "Градинска салата", "1,40", "250", ""],
["", "salata-pile", "Салата пиле", "3,50", "300", ""],
["", "salata-riba-ton", "Салата риба тон", "3,50", "300", ""]

            ],

            "drinks": [
                ["", "pepsi", "Пепси", "0,70", "", ""],
["", "mirinda", "Миринда", "0,70", "", ""],
["", "7up", "7up", "0,70", "", ""]

            ]
        }', 
        'slug' => 'burger-point-centr',
        'business_name' => 'Burger Point (Център)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'бул.Цар Освободител 5А',
        'address_additional' => '',
        'coords_x' => '42.681024',
        'coords_y' => '26.3177543',
        'phone' => '+359895343326',
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
            
            "Баница": [
                ["", "golyama-vita-banicza-s-yajcza-i-sirene", "Голяма вита баница с яйца и сирене", "9,80", "", ""],
["", "vita-banicza-s-yajcza-i-sirene", "Вита баница с яйца и сирене", "2,80", "450", ""],
["", "banicza-s-yajcza-i-sirene", "Баница с яйца и сирене", "0,70", "200", ""]

            ],

            "Закуски": [
                ["", "krenvirshka", "Кренвиршка", "1,40", "200", ""],
["", "kashkavalka", "Кашкавалка", "1,40", "200", ""],
["", "rulcze-s-shunka-i-kashkaval", "Рулце с шунка и кашкавал", "1,40", "200", ""]

            ]
        }', 
        'slug' => 'pekarna-zhelev',
        'business_name' => 'Пекарна Желев',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'ул. Дели Ради 5',
        'address_additional' => '',
        'coords_x' => '42.67164766',
        'coords_y' => '26.33021399',
        'phone' => '+359887698093',
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
            
            "maindishes": [
                ["", "kebapche", "Кебапче", "0,00", "60", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "150", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "2,80", "300", ""],
["", "pileshko-file", "Пилешко филе", "2,80", "300", ""],
["", "kyufte", "Кюфте", "0,00", "60", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""]

            ],

            "garnish": [
                ["", "lyutenicza", "Лютеница", "0,70", "200", ""],
["", "zele", "Зеле", "0,70", "200", ""],
["", "kartofi", "Картофи", "0,70", "200", ""],
["", "bob", "Боб", "0,70", "200", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "200", ""],
["", "khlyab-chetvrtinka", "Хляб четвъртинка", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "schweppes-biter-limon", "Schweppes Битер Лимон", "0,70", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "czitrus-miks", "Цитрус микс", "0,70", "500", ""],
["", "pirinsko-ken", "Пиринско кен", "0,70", "500", ""],
["", "voda-devin", "Вода Девин", "0,00", "500", ""]

            ]
        }', 
        'slug' => 'ranko',
        'business_name' => 'Ранко',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2602',
        'address' => 'ул. Орлинска 72',
        'address_additional' => '',
        'coords_x' => '42.27452825',
        'coords_y' => '23.13087186',
        'phone' => '+359894387866',
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
                ["", "kashkavaleni-khapki", "Кашкавалени хапки", "4,90", "200", ""],
["", "pileshki-filencza", "Пилешки филенца", "4,90", "200", ""],
["", "bejbi-moczarela", "Бейби моцарела", "4,90", "200", ""],
["", "sireni-khapki", "Сирени хапки", "2,80", "200", ""],
["", "przheni-kartofki", "Пържени картофки", "2,10", "250", ""],
["", "topeni-sirencza-s-borovinki", "Топени сиренца с боровинки", "4,90", "200", ""],
["", "khrupkavi-kalmari", "Хрупкави калмари", "7,00", "180", ""],
["", "khrupkavi-kalmari-ss-sladko-lyut-sos-i-susam", "Хрупкави калмари със сладко лют сос и сусам", "7,70", "220", ""]

            ],

            "salads": [
                ["", "salata-czezar-s-pile", "Салата Цезар с пиле", "5,60", "350", ""],
["", "salata-s-proshuto", "Салата с прошуто", "5,60", "350", ""],
["", "salata-s-pecheno-sirene", "Салата с печено сирене", "4,20", "350", ""],
["", "salata-s-avokado", "Салата с авокадо", "5,60", "350", ""],
["", "salata-s-riba-ton", "Салата с риба тон", "5,60", "350", ""],
["", "salata-fines", "Салата Финес", "3,50", "300", ""],
["", "krejzi-chikn", "Крейзи чикън", "7,00", "500", ""],
["", "norvezhka-gora", "Норвежка гора", "8,40", "500", ""],
["", "sunomono", "Суномоно", "5,60", "300", ""],
["", "moczarela-s-avokado-i-rukola", "Моцарела с авокадо и рукола", "5,60", "350", ""],
["", "salata-czezar-s-khrupkavi-kalmari", "Салата Цезар с хрупкави калмари", "5,60", "350", ""]

            ],

            "Японски салати": [
                ["", "ika-sansaj", "Ика сансай", "5,60", "100", ""],
["", "uakame", "Уакаме", "4,20", "100", ""]

            ],

            "starters": [
                ["", "khrupkavi-skaridi-s-drakon-sos", "Хрупкави скариди с дракон сос", "5,60", "100", ""],
["", "proletni-rulcza-s-drakon-sos", "Пролетни рулца с дракон сос", "2,10", "100", ""]

            ],

            "Урамаки": [
                ["", "zelen-drakon", "Зелен дракон", "5,60", "110", ""],
["", "kaliforniya-surimi", "Калифорния сурими", "4,90", "110", ""],
["", "gejsha", "Гейша", "5,60", "100", ""],
["", "salmon-rol", "Салмон рол", "5,60", "110", ""],
["", "dga", "Дъга", "5,60", "110", ""],
["", "ognen-drakon", "Огнен дракон", "5,60", "110", ""],
["", "kalifornia-red", "Калифорниа ред", "4,90", "90", ""],
["", "shogun", "Шогун", "5,60", "75", ""],
["", "samr-rol", "Самър рол", "5,60", "75", ""],
["", "godzila", "Годзила", "5,60", "75", ""]

            ],

            "Тортила": [
                ["", "toster-s-pileshko-file", "Тостер с пилешко филе", "2,10", "250", ""],
["", "tortila-s-riba-ton", "Тортила с риба тон", "3,50", "250", ""],
["", "tortila-somga-i-avokado", "Тортила сьомга и авокадо", "3,50", "250", ""],
["", "tortila-s-khrupkavo-pile", "Тортила с хрупкаво пиле", "3,50", "300", ""],
["", "kombinirana-tortila", "Комбинирана тортила", "3,50", "300", ""],
["", "klub-sandvich", "клуб сандвич", "4,20", "", ""],
["", "tortila-s-khrupkavo-pile-s-kartofki", "Тортила с хрупкаво пиле с картофки", "4,20", "350", ""]

            ],

            "Сетове": [
                ["", "mini-set-deluks", "Мини сет Делукс", "12,60", "", ""],
["", "chikn-kombo", "Чикън комбо", "11,20", "", ""],
["", "mini-set-spajsi", "Мини сет Спайси", "15,40", "", ""],
["", "dzhmbo-set-gest", "Джъмбо сет гест", "43,40", "", ""]

            ],

            "Комбо": [
                ["", "khosomaki-kombo", "Хосомаки комбо", "12,60", "", ""],
["", "nigiri-kombo", "Нигири комбо", "16,10", "", ""],
["", "salmon-klasik-kombo", "Салмон класик комбо", "12,60", "", ""],
["", "kombo-vulkan", "Комбо Вулкан", "16,80", "", ""],
["", "fites-kombo", "Фитес комбо", "12,60", "", ""],
["", "filadelfiya-kombo", "Филаделфия Комбо", "18,90", "", ""],
["", "salmon-kombo", "Салмон комбо", "19,60", "", ""],
["", "gest", "Гест", "19,60", "", ""],
["", "salmon-feshn", "Салмон фешън", "23,80", "", ""],
["", "drijm", "Дрийм", "27,30", "", ""]

            ],

            "Хосомаки": [
                ["", "khosomaki-krastavicza", "Хосомаки краставица", "2,80", "120", ""],
["", "khosomaki-avokado", "Хосомаки авокадо", "2,80", "120", ""],
["", "khosomaki-somga", "Хосомаки сьомга", "4,90", "120", ""],
["", "khosomaki-ton", "Хосомаки тон", "5,60", "120", ""],
["", "khosomaki-vulkan", "Хосомаки вулкан", "4,90", "120", ""],
["", "khosomaki-filadelfiya-i-avokado", "Хосомаки филаделфия и авокадо", "2,80", "120", ""],
["", "khosomaki-pushena-somga", "Хосомаки пушена сьомга", "4,20", "120", ""],
["", "khosomaki-zmiorka", "Хосомаки змиорка", "4,20", "120", ""]

            ],

            "Сашими": [
                ["", "sashimi-somga", "Сашими сьомга", "5,60", "80", ""],
["", "sashimi-ton", "Сашими тон", "7,70", "80", ""]

            ],

            "Нигири": [
                ["", "nigiri-somga", "Нигири Сьомга", "2,80", "65", ""],
["", "nnigiri-skarida", "Ннигири Скарида", "2,80", "50", ""],
["", "nigiri-ton", "Нигири тон", "3,50", "65", ""],
["", "nigiri-somga-teriaki", "Нигири Сьомга Териаки", "3,50", "75", ""],
["", "nigiri-spajsi-somga", "Нигири Спайси Сьомга", "4,20", "75", ""],
["", "nigiri-skarida", "Нигири Скарида", "2,80", "50", ""],
["", "nigiri-zmiorka", "Нигири Змиорка", "3,50", "50", ""],
["", "nigiri-khamachi", "Нигири Хамачи", "2,80", "75", ""],
["", "nigiri-spajsi-ton", "Нигири Спайси Тон", "4,20", "75", ""]

            ],

            "Филаделфия": [
                ["", "filadelfiya-ton", "Филаделфия тон", "5,60", "100", ""],
["", "filadelfiya-khrupkavo-pile", "Филаделфия хрупкаво пиле", "3,50", "90", ""],
["", "norvezhka-gora", "Норвежка гора", "4,90", "110", ""],
["", "kaliforniya-skarida", "Калифорния скарида", "4,20", "100", ""],
["", "krejzi-chukn", "Крейзи чукън", "4,20", "75", ""],
["", "filadelfiya-pushena-somga", "Филаделфия пушена сьомга", "4,90", "90", ""],
["", "kleopatra", "Клеопатра", "4,90", "130", ""],
["", "feshn-tempura", "Фешън темпура", "5,60", "160", ""],
["", "tokio", "Токио", "5,60", "120", ""]

            ],

            "Футомаки": [
                ["", "futomaki-somga-i-avokado", "Футомаки Сьомга и авокадо", "4,90", "150", ""],
["", "cherna-nindzha", "Черна нинджа", "5,60", "150", ""],
["", "futomaki-ekzotik", "Футомаки Екзотик", "6,30", "190", ""],
["", "fresh-rol", "Фреш рол", "5,60", "190", ""],
["", "futomaki-somga-i-skarida-tempura", "Футомаки сьомга и скарида темпура", "6,30", "160", ""]

            ],

            "Мочи": [
                ["", "mochi-s-fstcheno-sladko", "Мочи с фъстъчено сладко", "0,70", "30", ""],
["", "mochi-s-pasta-ot-cherven-bob", "Мочи с паста от червен боб", "0,70", "30", ""],
["", "mochi-ss-sladko-ot-susam", "Мочи със сладко от сусам", "0,70", "30", ""]

            ],

            "Бири": [
                ["", "kirin-ichiban", "Кирин ичибан", "4,20", "", ""],
["", "saporo", "Сапоро", "4,20", "", ""],
["", "asakhi", "Асахи", "4,20", "", ""],
["", "singa", "Синга", "4,20", "", ""],
["", "ozeki-sake", "Озеки саке", "8,40", "180", ""]

            ]
        }', 
        'slug' => 'japanese-sushi-bar-guest',
        'business_name' => 'Japanese Sushi bar Guest',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'ул. Сливница 6А',
        'address_additional' => '',
        'coords_x' => '42.68065209',
        'coords_y' => '26.32159075',
        'phone' => '+359988206033',
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
            
            "Сладки": [
                ["", "lokma-s-oreo-i-yagodi", "Локма с Орео и Ягоди", "3,50", "", ""],
["", "lokma", "Локма", "2,10", "", ""],
["", "trileche", "Трилече", "2,80", "", ""],
["", "krem-profiterol", "Крем Профитерол", "3,50", "", ""],
["", "krem-supangle", "Крем Супангле", "3,50", "", ""],
["", "mini-eklercheta", "Мини еклерчета", "0,00", "", ""],
["", "tartaletki", "Тарталетки", "0,00", "", ""],
["", "shekherezada-krem", "Шехерезада крем", "2,80", "", ""],
["", "domashna-baklava-s-orekhi", "Домашна баклава с орехи", "16,80", "", ""],
["", "shekerpare", "Шекерпаре", "11,20", "", ""],
["", "kadaif-s-orekhi", "Кадаиф с орехи", "14,00", "", ""],
["", "domashna-baklava-s-orekhi", "Домашна баклава с орехи", "1,40", "", ""],
["", "shekerpare", "Шекерпаре", "0,70", "", ""],
["", "shoko-shekerpare", "Шоко Шекерпаре", "0,70", "", ""],
["", "istanbul", "Истанбул", "0,70", "", ""],
["", "kadaif-s-orekhi", "Кадаиф с Орехи", "0,70", "", ""]

            ],

            "Пасти": [
                ["", "pasta-malina", "Паста Малина", "4,20", "", ""],
["", "pasta-shoko-leshnik", "Паста Шоко-лешник", "4,20", "", ""],
["", "pasta-shokoladova", "Паста Шоколадова", "4,20", "", ""],
["", "pasta-kalinka", "Паста Калинка", "4,20", "", ""],
["", "shekherezada-krem", "Шехерезада крем", "3,50", "", ""]

            ],

            "Торти": [
                ["", "torta-kalinka", "Торта Калинка", "17,50", "", ""],
["", "plodova-torta", "Плодова торта", "17,50", "", ""],
["", "torta-srcze", "Торта Сърце", "18,20", "", ""],
["", "shokoladova-torta", "Шоколадова торта", "18,20", "", ""],
["", "chijzkejk", "Чийзкейк", "3,50", "", ""]

            ]
        }', 
        'slug' => 'sladkarnica-lokmada',
        'business_name' => 'Сладкарница Локмада',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'ул.Георги Раковски 27',
        'address_additional' => '',
        'coords_x' => '42.6826152',
        'coords_y' => '26.31861693',
        'phone' => '+359897061673',
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
            
            "burgers": [
                ["", "burger-s-teleshko-meso-na-bbq", "Бургер с телешко месо на BBQ", "6,30", "400", ""],
["", "burger-ss-svinsko-meso-i-bekon-na-bbq", "Бургер със свинско месо и бекон на BBQ", "5,60", "400", ""],
["", "burger-s-pileshko-file-na-bbq", "Бургер с пилешко филе на BBQ", "6,30", "400", ""],
["", "chijzburger", "Чийзбургер", "4,90", "", ""],
["", "burger-s-drpano-svinsko", "Бургер с дърпано свинско", "4,90", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "10", ""],
["", "majoneza", "Майонеза", "0,00", "10", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "10", ""]

            ],

            "bread": [
                ["", "selska-pitka", "Селска питка", "0,70", "100", ""]

            ],

            "barbecue": [
                ["", "pileshko-file-na-bbq", "Пилешко филе на BBQ", "4,20", "250", ""],
["", "pileshka-przhola-ot-but-na-bbq", "Пилешка пържола от бут на BBQ", "3,50", "250", ""],
["", "bekon-na-bbq", "Бекон на BBQ", "4,20", "250", ""],
["", "svinsko-kyufte-na-bbq", "Свинско кюфте на BBQ", "0,70", "100", ""],
["", "pusheni-pikantni-nadenichki-na-bbq", "Пушени пикантни наденички на BBQ", "3,50", "", ""],
["", "svinska-vratna-przhola-na-bbq", "Свинска вратна пържола на BBQ", "4,20", "250", ""],
["", "svinski-rebra-na-bbq", "Свински ребра на BBQ", "6,30", "300", ""],
["", "teleshki-kyufteta-na-bbq", "Телешки кюфтета на BBQ", "1,40", "100", ""],
["", "przheni-kartofki", "Пържени картофки", "1,40", "200", ""],
["", "przheni-kartofki-lodka", "Пържени картофки лодка", "2,10", "200", ""],
["", "boks-svezha-salata", "Бокс свежа салата", "2,10", "200", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta-s-nutela-i-maskarpone", "Бисквитена торта с нутела и маскарпоне", "2,80", "", ""]

            ],

            "Порции": [
                ["", "sochno-pileshko-file-na-bbq", "Сочно пилешко филе на BBQ", "5,60", "480", ""],
["", "krekhka-pileshna-przhola-ot-but-na-bbq", "Крехка пилешна пържола от бут на BBQ", "4,90", "480", ""],
["", "bekon-na-bbq", "Бекон на BBQ", "6,30", "480", ""],
["", "domashni-kyufteta-na-bbq", "Домашни кюфтета на BBQ", "4,20", "", ""],
["", "svinska-vratna-przhola-na-bbq", "Свинска вратна пържола на BBQ", "4,90", "480", ""],
["", "pusheni-pikantni-nadenichki-na-bbq", "Пушени пикантни наденички на BBQ", "4,90", "", ""],
["", "svinski-rebra-na-bbq-s-barbekyu-sos", "Свински ребра на BBQ с барбекю сос", "7,70", "530", ""],
["", "teleshki-kyufteta-na-bbq", "Телешки кюфтета на BBQ", "5,60", "430", ""]

            ]
        }', 
        'slug' => 'bbq-time',
        'business_name' => 'BBQ Time',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8802',
        'address' => 'ул. Георги С. Раковски 87',
        'address_additional' => '',
        'coords_x' => '42.68478255',
        'coords_y' => '26.32295649',
        'phone' => '+359895503195',
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
            
            "Обедно меню 1": [
                ["", "domati", "Домати", "1,40", "", ""],
["", "zelenchukovo-rulo", "Зеленчуково руло", "2,80", "", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "0,70", "", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,10", "", ""],
["", "krastaviczi", "Краставици", "1,40", "", ""],
["", "mish-mash", "Миш Маш", "2,10", "", ""],
["", "musaka-s-makaroni", "Мусака с макарони", "2,10", "", ""],
["", "pastrva", "Пастърва", "3,50", "", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "skumriya-s-garnitura", "Скумрия с гарнитура", "2,80", "", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "", ""],
["", "tarator", "Таратор", "2,80", "", ""],
["", "tikvichki", "Тиквички", "2,10", "", ""],
["", "chushka-byurek", "Чушка бюрек", "2,10", "", ""],
["", "chushki-s-domaten-sos", "Чушки с доматен сос", "1,40", "", ""]

            ],

            "Обедно меню 2": [
                ["", "bob-ss-svinsko", "Боб със свинско", "0,70", "", ""],
["", "kyufte", "Кюфте", "2,80", "", ""],
["", "makaroni-na-furna", "Макарони на фурна", "1,40", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "2,80", "", ""],
["", "panirana-shunka", "Панирана шунка", "0,70", "", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "2,80", "", ""],
["", "svinsko-ss-zele", "Свинско със зеле", "2,80", "", ""],
["", "tikveno-kyufte", "Тиквено кюфте", "2,10", "", ""],
["", "shhrudel", "Щрудел", "0,70", "", ""],
["", "yajcze-v-gnezdo", "Яйце в гнездо", "2,10", "", ""]

            ],

            "additives": [
                ["", "rezen-limon", "Резен лимон", "0,00", "", ""]

            ]
        }', 
        'slug' => 'restorant-bar-corner',
        'business_name' => 'Ресторант-бар Corner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'пл. Свобода 1',
        'address_additional' => '',
        'coords_x' => '42.26513676',
        'coords_y' => '23.11837363',
        'phone' => '+359876545346',
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
                ["", "shopska-salata", "Шопска салата", "5,60", "300", ""],
["", "grczka-salata", "Гръцка салата", "5,60", "300", ""],
["", "vitaminoza", "Витаминоза", "5,60", "300", ""],
["", "slavyanska-salata", "Славянска салата", "5,60", "300", ""],
["", "kapreze", "Капрезе", "7,00", "300", ""],
["", "czezar-salata", "Цезар салата", "7,70", "300", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "6,30", "350", ""],
["", "zele-s-morkovi", "Зеле с моркови", "4,20", "250", ""],
["", "zelena-salata", "Зелена салата", "4,20", "220", ""],
["", "snezhanka", "Снежанка", "4,90", "220", ""]

            ],

            "starters": [
                ["", "przheni-kartofi", "Пържени картофи", "2,80", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "3,50", "250", ""],
["", "panirani-sirencza", "Панирани сиренца", "4,90", "200", ""],
["", "panirani-pileshki-khapki", "Панирани пилешки хапки", "6,30", "220", ""],
["", "pileshki-krilcza", "Пилешки крилца", "5,60", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,80", "200", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "5,60", "220", ""]

            ],

            "barbecue": [
                ["", "kyufte", "Кюфте", "1,40", "", ""],
["", "kebapche", "Кебапче", "1,40", "", ""],
["", "domashen-sudzhuk-na-zhar", "Домашен суджук на жар", "7,70", "250", ""],
["", "svinski-vrat", "Свински врат", "8,40", "250", ""],
["", "panczeta", "Панцета", "9,80", "350", ""],
["", "svinski-rebrcza", "Свински ребърца", "9,10", "400", ""],
["", "pileshko-shishche", "Пилешко шишче", "3,50", "130", ""],
["", "svinsko-shishche", "Свинско шишче", "3,50", "130", ""],
["", "shishche-po-rodopski", "Шишче по Родопски", "4,20", "130", ""],
["", "pileshko-file-na-zhar", "Пилешко филе на жар", "7,70", "250", ""]

            ],

            "Ястия от риба": [
                ["", "pstrva-na-zhar", "Пъстърва на жар", "11,20", "350", ""],
["", "somga-file", "Сьомга филе", "15,40", "220", ""],
["", "gavros", "Гаврос", "5,60", "250", ""],
["", "kalmari-na-plocha", "Калмари на плоча", "13,30", "200", ""],
["", "kalmari-pane", "Калмари пане", "13,30", "200", ""],
["", "oktopod-na-skara", "Октопод на скара", "16,10", "150", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "6,30", "", ""],
["", "vegetariana", "Вегетариана", "7,70", "", ""],
["", "formadzho", "Формаджо", "9,80", "", ""],
["", "kaprichosa", "Капричоса", "9,80", "", ""],
["", "ton", "Тон", "10,50", "", ""],
["", "proshuto", "Прошуто", "10,50", "", ""],
["", "karbonara", "Карбонара", "10,50", "", ""],
["", "dyavola", "Дявола", "9,80", "", ""],
["", "fruti-di-mare", "Фрути ди маре", "11,90", "", ""]

            ],

            "pasta": [
                ["", "pasta-s-pesto-i-brokoli", "Паста с песто и броколи", "9,10", "300", ""],
["", "pasta-karbonara", "Паста Карбонара", "9,10", "300", ""],
["", "pasta-boloneze", "Паста Болонезе", "9,80", "300", ""],
["", "pasta-s-morski-darove", "Паста с морски дарове", "11,20", "300", ""],
["", "pasta-s-proshuto", "Паста с прошуто", "10,50", "300", ""],
["", "pasta-s-chesn-i-zekhtin", "Паста с чесън и зехтин", "8,40", "300", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "3,50", "150", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "5,60", "150", ""],
["", "chijzkejk", "Чийзкейк", "4,90", "150", ""],
["", "shokoladova-torta-lind", "Шоколадова торта Линд", "4,90", "150", ""]

            ]
        }', 
        'slug' => 'massa-pool-day-club',
        'business_name' => 'Massa Pool &amp; Day Club',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sandanski',
        'region' => 'Sandanski',
        'postal_code' => '2800',
        'address' => 'село Поленица Балкански път 2',
        'address_additional' => '',
        'coords_x' => '41.5665549',
        'coords_y' => '23.2943911',
        'phone' => '+359886070754',
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
                ["", "fungi", "Фунги", "2,10", "", ""],
["", "kuatro-stadzhioni", "Куатро Стаджиони", "2,10", "", ""],
["", "italiya", "Италия", "2,80", "", ""],
["", "peperoni", "Пеперони", "2,80", "", ""],
["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "parcheto", "Парчето", "2,80", "", ""],
["", "karuzo", "Карузо", "2,80", "", ""],
["", "picza-s-bekon", "Пица с бекон", "2,80", "", ""],
["", "picza-chetiri-sirena", "Пица Четири сирена", "3,50", "", ""],
["", "milano", "Милано", "2,80", "", ""],
["", "ternera", "Тернера", "2,80", "", ""],
["", "sueta", "Суета", "2,80", "", ""],
["", "kalczone-otvorena", "Калцоне отворена", "3,50", "", ""],
["", "bmw", "BMW", "3,50", "", ""],
["", "the-boss", "The Boss", "3,50", "", ""],
["", "proshuto", "Прошуто", "2,10", "", ""],
["", "picza-s-shunka", "Пица с шунка", "2,10", "", ""],
["", "picza-s-pileshko", "Пица с пилешко", "2,80", "", ""],
["", "zelenchukova", "Зеленчукова", "2,10", "", ""],
["", "margarita", "Маргарита", "2,10", "", ""]

            ],

            "Семейни пици": [
                ["", "picza-s-lukanka", "Пица с луканка", "14,70", "", ""],
["", "picza-s-krenvirsh", "Пица с кренвирш", "14,70", "", ""],
["", "picza-s-kashkaval", "Пица с кашкавал", "14,70", "", ""],
["", "picza-ss-sirene", "Пица със сирене", "14,70", "", ""],
["", "picza-s-shunka", "Пица с шунка", "14,70", "", ""]

            ],

            "Свежи салати": [
                ["", "salata-fantaziya", "Салата Фантазия", "4,90", "500", ""],
["", "shopska-salata", "Шопска салата", "2,80", "500", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "650", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/579935.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/579936.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/579937.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/579939.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/579940.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/579941.jpg?width=302"],
["", "rosa-izvorna-voda", "Роса изворна вода", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/762953.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1072644.jpg?width=302"],
["", "fanta-limon", "Fanta Лимон", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1072645.jpg?width=302"],
["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1072646.jpg?width=302"],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1072647.jpg?width=302"],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1072648.jpg?width=302"],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1072649.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajran-balkan", "Айран Балкан", "0,70", "330", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "", ""],
["", "staropramen", "Старопрамен", "1,40", "", ""],
["", "beks", "Бекс", "1,40", "", ""],
["", "kamenicza", "Каменица", "1,40", "500", ""],
["", "bugasko", "Бугаско", "1,40", "", ""],
["", "astika", "Астика", "1,40", "", ""],
["", "corona-extra-355ml", "Corona Extra (355мл)", "2,10", "", ""],
["", "hell", "Hell", "0,70", "", ""],
["", "mineralna-voda-rosa", "Минерална вода Роса", "0,70", "", ""]

            ]
        }', 
        'slug' => 'picariya-parcheto',
        'business_name' => 'Пицария Парчето',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ул. Христо Ботев 3',
        'address_additional' => '',
        'coords_x' => '42.2610275',
        'coords_y' => '23.12171',
        'phone' => '+359898822323',
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
            
            "burgers": [
                ["", "khamburger", "Хамбургер", "0,70", "100", ""],
["", "yamburger", "Ямбургер", "0,70", "100", ""],
["", "chijz-tost", "Чийз тост", "0,70", "80", ""],
["", "pileshki-burger", "Пилешки бургер", "0,70", "120", ""],
["", "chijz-burger", "Чийз бургер", "0,70", "120", ""],
["", "dvoen-chijz-burger", "Двоен чийз бургер", "1,40", "180", ""],
["", "big-burger", "Биг бургер", "2,80", "250", ""],
["", "bejkn-strijt", "Бейкън стрийт", "2,10", "180", ""],
["", "mega-burger", "Мега бургер", "2,10", "200", ""],
["", "maks-pepr", "Макс пепър", "2,10", "180", ""],
["", "premium-burger", "Премиум бургер", "2,80", "200", ""],
["", "gurme-burger", "Гурме бургер", "3,50", "200", ""],
["", "patato-burger", "Патато бургер", "2,10", "180", ""],
["", "chikn-burger", "Чикън бургер", "2,10", "180", ""],
["", "kntri-chijz-burger", "Кънтри чийз бургер", "2,80", "180", ""]

            ],

            "Меню бургери": [
                ["", "dvoen-chijz-burger-menyu", "Двоен чийз бургер меню", "2,80", "", ""],
["", "big-burger-menyu", "Биг бургер меню", "4,20", "", ""],
["", "bejkn-strijt-menyu", "Бейкън стрийт  меню", "3,50", "", ""],
["", "mega-burger-menyu", "Мега бургер меню", "3,50", "", ""],
["", "maks-pepr-menyu", "Макс пепър меню", "3,50", "", ""],
["", "premium-burger-menyu", "Премиум бургер меню", "4,20", "", ""],
["", "gurme-burger-menyu", "Гурме бургер меню", "4,90", "", ""],
["", "patato-burger-menyu", "Патато бургер меню", "3,50", "", ""],
["", "chikn-burger-menyu", "Чикън бургер меню", "3,50", "", ""],
["", "kntri-chijz-burger-menyu", "Кънтри чийз бургер меню", "4,20", "", ""]

            ],

            "Промоции": [
                ["", "pileshki-burger-i-pepsi", "Пилешки бургер и пепси", "1,40", "", ""],
["", "pileshki-burger-i-kartofki", "Пилешки бургер и картофки", "1,40", "", ""],
["", "chijz-burger-i-pepsi", "Чийз бургер и пепси", "1,40", "", ""],
["", "chijz-burger-i-kartofki", "Чийз бургер и картофки", "1,40", "", ""],
["", "khamburger-i-kartofki", "Хамбургер и картофки", "1,40", "", ""],
["", "mega-burger-i-pepsi", "Мега бургер и пепси", "2,80", "", ""],
["", "dvoen-chijz-burger-i-kartofi", "Двоен чийз бургер и картофи", "2,10", "", ""],
["", "dvoen-chijz-burger-i-pepsi", "Двоен чийз бургер и пепси", "2,10", "", ""],
["", "chijz-burger-s-pepsi-i-kartofki", "Чийз бургер с пепси и картофки", "2,10", "", ""],
["", "pileshki-burger-s-pepsi-i-kartofki", "Пилешки бургер с пепси и картофки", "2,10", "", ""],
["", "big-burger", "Биг бургер", "4,20", "", ""],
["", "mega-burger", "Мега бургер", "3,50", "", ""],
["", "khamburger", "Хамбургер", "4,20", "", ""]

            ],

            "garnish": [
                ["", "malki-kartofki", "Малки картофки", "0,70", "70", ""],
["", "sredni-kartofki", "Средни картофки", "1,40", "120", ""],
["", "golemi-kartofki", "Големи картофки", "1,40", "160", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "0,70", "", ""]

            ],

            "dunners": [
                ["", "malk-dyuner", "Малък дюнер", "1,40", "", ""],
["", "dvoen-malk-dyuner", "Двоен малък дюнер", "2,10", "", ""],
["", "sreden-dyuner", "Среден дюнер", "2,80", "", ""],
["", "golyam-dyuner", "Голям дюнер", "3,50", "", ""],
["", "malk-giros", "Малък гирос", "2,10", "300", ""],
["", "golyam-giros", "Голям гирос", "2,80", "400", ""],
["", "nemski-dyuner", "Немски дюнер", "2,80", "400", ""],
["", "grczki-dzhob", "Гръцки джоб", "2,80", "350", ""],
["", "tortila-dyuner-s-khrupkavo-pile", "Тортила дюнер с хрупкаво пиле", "2,80", "300", ""],
["", "tortila-dyuner-ss-sochno-pileshko", "Тортила дюнер със сочно пилешко", "2,80", "300", ""],
["", "tortila-dyuner-s-pile-na-gril", "Тортила дюнер с пиле на грил", "2,80", "300", ""]

            ],

            "salads": [
                ["", "gradinska-salata", "Градинска салата", "1,40", "250", ""],
["", "salata-pile", "Салата пиле", "3,50", "300", ""],
["", "salata-riba-ton", "Салата риба тон", "3,50", "300", ""]

            ],

            "drinks": [
                ["", "pepsi", "Пепси", "0,70", "", ""],
["", "mirinda", "Миринда", "0,70", "", ""],
["", "7up", "7up", "0,70", "", ""]

            ]
        }', 
        'slug' => 'burger-point-pizza',
        'business_name' => 'Burger Point Billa',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8801',
        'address' => 'бул. „Цар Освободител“ 3А',
        'address_additional' => '',
        'coords_x' => '42.680579',
        'coords_y' => '26.317009',
        'phone' => '+359899878519',
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
                ["", "klasicheska-salata-s-riba-ton", "Класическа салата с риба тон", "4,90", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "300", ""],
["", "vitamina", "Витамина", "3,50", "300", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "300", ""],
["", "kapreze", "Капрезе", "4,20", "300", ""],
["", "italianska-salata", "Италианска салата", "4,20", "300", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "teleshki-gulash", "Телешки гулаш", "2,80", "200", ""]

            ],

            "starters": [
                ["", "pileshki-khapki-s-chesnov-sos", "Пилешки хапки с чеснов сос", "4,20", "250", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,90", "200", ""],
["", "domashni-przheni-kartofi-ss-sirene", "Домашни пържени картофи със сирене", "2,80", "250", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "zapecheno-sirene-s-med-i-orekhi", "Запечено сирене с мед и орехи", "3,50", "200", ""],
["", "domashni-przheni-kartofi", "Домашни пържени картофи", "2,10", "250", ""]

            ],

            "Основни ястия": [
                ["", "teleshki-rotsbif-ss-zelenchuczi", "Телешки Ротсбиф със зеленчуци", "9,80", "300", ""]

            ],

            "Барбекю на дървени въглища": [
                ["", "kyufte", "Кюфте", "1,40", "80", ""],
["", "kebapche", "Кебапче", "1,40", "80", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "300", ""],
["", "teleshko-kyufte-1br--", "Телешко кюфте (1бр -", "2,80", "100", ""],
["", "pileshko-file", "Пилешко филе", "5,60", "250", ""],
["", "pleskavicza", "Плескавица", "4,20", "300", ""],
["", "shashlik-ss-zelenchuczi", "Шашлик със зеленчуци", "7,00", "350", ""],
["", "svinska-przhola-ot-vrat", "Свинска пържола от врат", "5,60", "300", ""],
["", "svinski-drob", "Свински дроб", "4,20", "250", ""]

            ],

            "Ястия на пещ": [
                ["", "dzholan", "Джолан", "8,40", "500", ""],
["", "vlcha-zapekanka", "Вълча запеканка", "4,90", "300", ""],
["", "teleshki-rebra", "Телешки ребра", "9,80", "300", ""],
["", "svinski-rebra", "Свински ребра", "7,00", "300", ""],
["", "agneshko-rulo", "Агнешко руло", "9,80", "300", ""]

            ],

            "Морски ястия": [
                ["", "tarama-khajver", "Тарама хайвер", "2,80", "200", ""],
["", "marinovan-palamud", "Маринован паламуд", "4,20", "200", ""],
["", "midi-natyur", "Миди натюр", "4,20", "600", ""],
["", "midi-s-devesil", "Миди с девесил", "4,90", "600", ""],
["", "midi-po-sredizemnomorski", "Миди по средиземноморски", "4,90", "600", ""],
["", "oktopod-po-grczki", "Октопод по гръцки", "10,50", "150", ""],
["", "pstrva-na-peshh-ss-zelenchuczi", "Пъстърва на пещ със зеленчуци", "7,70", "300", ""],
["", "czipura-na-bbq-ss-sotirani-zelenchuczi", "Ципура на BBQ със сотирани зеленчуци", "9,80", "300", ""],
["", "lavrak-na-bbq-ss-sotirani-zelenchuczi", "Лаврак на BBQ със сотирани зеленчуци", "9,80", "300", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "450", ""],
["", "peperoni", "Пеперони", "5,60", "450", ""],
["", "kaprichoza", "Капричоза", "4,90", "450", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,90", "450", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "5,60", "450", ""],
["", "lukeze", "Лукезе", "5,60", "450", ""],
["", "neapolitana", "Неаполитана", "5,60", "450", ""],
["", "shumen", "Шумен", "6,30", "450", ""],
["", "prlenka-kombinirana", "Пърленка комбинирана", "2,10", "300", ""],
["", "prlenka-s-maslo", "Пърленка с масло", "1,40", "200", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "1,40", "200", ""],
["", "selska", "Селска", "6,30", "450", ""],
["", "picza-s-pile", "Пица с пиле", "4,90", "450", ""]

            ],

            "pasta": [
                ["", "pasta-boloneze", "Паста Болонезе", "4,90", "300", ""],
["", "pasta-pile", "Паста Пиле", "4,90", "300", ""],
["", "karbonara", "Карбонара", "4,90", "300", ""]

            ],

            "risotto": [
                ["", "rizoto-s-manatarka-i-tryufel", "Ризото с  манатарка и трюфел", "4,90", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "300", ""]

            ],

            "garnish": [
                ["", "bob-s-lyutenicza", "Боб с лютеница", "1,40", "200", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "1,40", "200", ""],
["", "sotirani-zelenchuczi", "Сотирани зеленчуци", "1,40", "200", ""],
["", "pecheni-kartofi", "Печени картофи", "1,40", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""]

            ],

            "Сухи мезета": [
                ["", "plato-khamoni", "Плато Хамони", "7,00", "200", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "150", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,10", "150", ""]

            ]
        }', 
        'slug' => 'restorant-picariya-shumen',
        'business_name' => 'Ресторант - Пицария Шумен',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Shumen',
        'region' => 'Shumen',
        'postal_code' => '9701',
        'address' => 'бул. „Плиска“ 1',
        'address_additional' => '',
        'coords_x' => '43.2720744',
        'coords_y' => '26.9386945',
        'phone' => '+359899936486',
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
                ["", "salata-czezar", "Салата Цезар", "4,20", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "650", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "zeleva-salata", "Зелева салата", "2,10", "300", ""],
["", "zelena-salata", "Зелена салата", "2,80", "300", ""]

            ],

            "soups": [
                ["", "shkembe", "Шкембе", "1,40", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "alaminuti": [
                ["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "250", ""],
["", "omlet-asorti", "Омлет асорти", "2,80", "300", ""],
["", "omlet-s-gbi", "Омлет с гъби", "2,10", "250", ""]

            ],

            "Топли предястия": [
                ["", "khrupkavi-pileshki-khapki", "Хрупкави пилешки хапки", "4,20", "", ""],
["", "kashkaval-pane-khapki", "Кашкавал пане хапки", "3,50", "", ""],
["", "sirene-khapki", "Сирене хапки", "2,80", "", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,90", "300", ""],
["", "pileshki-drobcheta-v-maslo", "Пилешки дробчета в масло", "2,80", "200", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "3,50", "200", ""],
["", "svinski-ushi-na-skara", "Свински уши на скара", "4,90", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "400", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "450", ""]

            ],

            "Основни ястия": [
                ["", "pile-zhulien", "Пиле Жулиен", "4,90", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,20", "300", ""],
["", "pileshki-sach", "Пилешки сач", "14,70", "1000", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,20", "300", ""],
["", "svinski-dzholan-s-zhareni-kartofi", "Свински джолан с жарени картофи", "9,80", "1200", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "7,70", "400", ""],
["", "svinski-sach", "Свински сач", "14,70", "1000", ""],
["", "dska-s-topli-predyastiya", "Дъска с топли предястия", "15,40", "1000", ""],
["", "dska-ss-svinsko-meso", "Дъска със свинско месо", "38,50", "3000", ""],
["", "dska-s-pileshko-meso", "Дъска с пилешко месо", "29,40", "2800", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "300", ""],
["", "svinska-przhola-ot-kontrafile", "Свинска пържола от контрафиле", "5,60", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "150", ""],
["", "svinski-shashlik", "Свински шашлик", "9,10", "700", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "300", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "320", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "8,40", "700", ""]

            ],

            "fish": [
                ["", "byala-riba-pane", "Бяла риба пане", "4,20", "250", ""]

            ],

            "garnish": [
                ["", "kombinirana", "Комбинирана", "1,40", "150", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "0,70", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "lyutenicza", "Лютеница", "0,70", "70", ""]

            ],

            "bread": [
                ["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "250", ""],
["", "krem-karamel", "Крем карамел", "1,40", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "150", ""]

            ]
        }', 
        'slug' => 'pri-krasi',
        'business_name' => 'При Краси',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2601',
        'address' => 'ул. Никола Малашевски 9',
        'address_additional' => '',
        'coords_x' => '42.2569087',
        'coords_y' => '23.0981395',
        'phone' => '+359889454590',
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
            
            "Смути": [
                ["", "bio-smuti", "Био Смути", "3,50", "330", ""],
["", "smuti-spanak-a", "Смути Спанак (А)", "2,10", "330", ""],
["", "smuti-spanak-b", "Смути Спанак (Б)", "2,80", "330", ""],
["", "detsko-smuti", "Детско Смути", "2,10", "330", ""],
["", "yablkovo-smuti", "Ябълково Смути", "2,10", "330", ""],
["", "tarator-miks", "Таратор микс", "2,10", "330", ""],
["", "oranzheva-naslada", "Оранжева наслада", "2,10", "330", ""],
["", "manila", "Манила", "2,80", "330", ""],
["", "tropichesko-vlshebstvo", "Тропическо вълшебство", "2,10", "330", ""],
["", "yagodovo-smuti", "Ягодово смути", "2,10", "330", ""],
["", "borovinkovo-smuti-", "Боровинково смути (", "2,10", "", ""],
["", "ananasovo-smuti", "Ананасово смути", "2,80", "330", ""]

            ],

            "lemonade": [
                ["", "limonada-bz", "Лимонада Бъз", "2,10", "500", ""],
["", "bz-i-dzhindzhifil", "Бъз и Джинджифил", "2,10", "500", ""],
["", "limonada-ot-malina", "Лимонада от Малина", "2,10", "500", ""],
["", "limonada-ot-yagodi", "Лимонада от Ягоди", "2,10", "500", ""],
["", "limonada-ot-gorski", "Лимонада от Горски", "2,10", "", ""],
["", "limonada-ot-lajm", "Лимонада от Лайм", "2,10", "500", ""],
["", "limonada-ot-dzhindzhifil", "Лимонада от Джинджифил", "2,10", "500", ""],
["", "limonada-ot-aroniya", "Лимонада от Арония", "2,10", "500", ""]

            ],

            "Шейкове": [
                ["", "shokoladov-shejk", "Шоколадов шейк", "2,80", "330", ""],
["", "shejk-oreo-i-nutela", "Шейк Орео и Нутела", "2,80", "", ""],
["", "shejk-s-plod-po-izbor", "Шейк с плод по избор", "2,80", "", ""],
["", "bananov-shejk", "Бананов Шейк", "2,80", "330", ""]

            ],

            "Фрешове": [
                ["", "limon", "Лимон", "3,50", "", ""],
["", "morkov", "Морков", "1,40", "", ""],
["", "grejpfrut", "Грейпфрут", "2,10", "", ""],
["", "portokal", "Портокал", "2,10", "", ""],
["", "yablka", "Ябълка", "1,40", "", ""],
["", "czveklo", "Цвекло", "1,40", "", ""],
["", "yablka-i-morkov", "Ябълка и морков", "1,40", "", ""],
["", "yablka-i-portokal", "Ябълка и портокал", "2,10", "", ""],
["", "yablka-i-czveklo", "Ябълка и цвекло", "1,40", "", ""],
["", "yablka-i-kivi", "Ябълка и киви", "2,80", "", ""],
["", "portokal-i-czveklo", "Портокал и цвекло", "2,10", "", ""],
["", "portokal-i-morkov", "Портокал и морков", "2,10", "", ""],
["", "portokal-i-grejpfrut", "Портокал и грейпфрут", "2,80", "", ""],
["", "portokal-i-kivi", "Портокал и киви", "2,80", "", ""],
["", "portokal-i-limon", "Портокал и лимон", "2,80", "", ""],
["", "portokal-i-ananas", "Портокал и ананас", "2,80", "", ""],
["", "morkov-i-czveklo", "Морков и цвекло", "1,40", "", ""],
["", "yablka-morkov-i-czveklo", "Ябълка, морков и цвекло", "1,40", "", ""],
["", "yablka-morkov-i-portokal", "Ябълка, морков и портокал", "2,10", "", ""],
["", "yablka-portokal-i-czveklo", "Ябълка, портокал и цвекло", "1,40", "", ""],
["", "portokal-grejpfrut-i-limon", "Портокал, грейпфрут и лимон", "2,80", "", ""]

            ]
        }', 
        'slug' => 'bar-a-k-a-summer-time-sliven',
        'business_name' => 'Bar.a.k.a. Summer Time Сливен',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8804',
        'address' => 'бул. Георги данчев 35',
        'address_additional' => '',
        'coords_x' => '42.6806142',
        'coords_y' => '26.3332797',
        'phone' => '+359883307039',
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
            
            "Винени и брънч предложения": [
                ["", "plato-ss-sirena-kolbasi-plodove-i-krakeri", "Плато със сирена, колбаси, плодове и кракери", "12,60", "300", ""],
["", "brusketi-asorti", "Брускети асорти", "8,40", "", ""],
["", "brusketi-s-pryasna-moczarela", "Брускети с прясна моцарела", "4,90", "", ""]

            ],

            "salads": [
                ["", "tradiczionna-balkanska-salata-s-pukano-lyuto-chushle", "Традиционна балканска салата с пукано люто чушле", "4,90", "380", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "350", ""],
["", "miks-listni-salatki-s-pushena-somga-avokado-cheridomati-krastavichki-sumak-i-dresing-s-yablkov-oczet", "Микс листни салатки с пушена сьомга, авокадо, черидомати, краставички, сумак и дресинг с ябълков оцет", "9,80", "290", ""],
["", "salata-s-kinoa-pecheni-zelenchuczi-grilovano-pileshkosirene-bri-i-dresing-toskana", "Салата с киноа, печени зеленчуци, гриловано пилешко,сирене Бри и дресинг Тоскана", "8,40", "450", ""],
["", "salata-czezar-s-khrupkava-parmezanova-kupichka-ajsberggrilovano-pileshko-chips-ot-bekon-i-domashen-sos-czezar", "Салата Цезар с хрупкава пармезанова купичка, айсберг,гриловано пилешко, чипс от бекон и домашен сос Цезар", "6,30", "350", ""]

            ],

            "Основни предложения": [
                ["", "teleshki-burger-s-kinoa", "Телешки бургер с киноа", "7,70", "", ""],
["", "opusheno-grilovano-pileshko-file-s-blanshiran-spanak", "Опушено гриловано пилешко филе с бланширан спанак", "9,80", "320", ""],
["", "pileshki-medaloni-v-proshuto-s-moczarela-i-susheni-domati", "Пилешки медальони в прошуто с моцарела и сушени домати", "9,10", "350", ""],
["", "pasta-karbonara", "Паста Карбонара", "7,70", "300", ""],
["", "pasta-bolozene", "Паста Болозене", "8,40", "300", ""],
["", "pasta-primavera", "Паста Примавера", "6,30", "300", ""],
["", "teleshki-kyuftencza", "Телешки кюфтенца", "6,30", "320", ""],
["", "pileshki-filencza", "Пилешки филенца", "5,60", "320", ""]

            ],

            "sandwiches": [
                ["", "plnozrnesta-chabata-s-pushena-somga-domatki-krema-sirene-rukola-i-krastavichki", "Пълнозърнеста чабата с пушена сьомга, доматки, крема сирене, рукола и краставички", "6,30", "", ""],
["", "chabata-kapreze-s-pryasna-moczarela-domati-i-domashenpesto-sos", "Чабата Капрезе с прясна моцарела, домати и домашенпесто сос", "5,60", "", ""],
["", "chabata-s-pileshko-file-sino-sirene-presen-spanak-domat-i-medeno-gorchichen-sos", "Чабата с пилешко филе, синьо сирене, пресен спанак, домат и медено-горчичен сос", "4,20", "", ""]

            ],

            "Палачинково меню": [
                ["", "solena-palachinka-s-khumus-avokado-pileshko-file-i-sladko-ot-karameliziran-luk", "Солена палачинка с хумус, авокадо, пилешко филе и сладко от карамелизиран лук", "4,20", "", ""],
["", "solena-palachinka-s-pileshko-file-krema-sirene-i-krastavichki", "Солена палачинка с пилешко филе, крема сирене и краставички", "4,20", "", ""],
["", "sladko--kisela-palachinka-ss-sladko-ot-smokini-krema-i-krave-sirene", "Сладко – кисела палачинка със сладко от смокини, крема и краве сирене", "3,50", "", ""],
["", "sladka-palachinka-ss-sladko-ot-borovinki", "Сладка палачинка със сладко от боровинки", "2,10", "", ""],
["", "sladka-palachinka-s-pchelen-med", "Сладка палачинка с пчелен мед", "2,10", "", ""],
["", "sladka-palachinka-ss-sladko-ot-smokini", "Сладка палачинка със сладко от смокини", "2,10", "", ""],
["", "sladka-palachinka-s-shokolad", "Сладка палачинка с шоколад", "2,10", "", ""]

            ],

            "desserts": [
                ["", "morkovena-torta", "Морковена торта", "4,20", "", ""],
["", "kurabijka-ot-oveseni-yadki", "Курабийка от овесени ядки", "0,70", "", ""],
["", "domashna-granola-ss-semena-i-yadki-kiselo-mlyako-i-plodove", "Домашна гранола със семена и ядки, кисело мляко и плодове", "2,80", "", ""]

            ]
        }', 
        'slug' => '100-lipi',
        'business_name' => '100 липи',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8801',
        'address' => 'ул. Генерал Столипин 18А',
        'address_additional' => '',
        'coords_x' => '42.68089462',
        'coords_y' => '26.3210748',
        'phone' => '+359889991203',
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
            
            "Хосомаки": [
                ["", "khosomaki-krastavicza", "Хосомаки краставица", "2,80", "120", ""],
["", "khosomaki-filadelfiya-i-avokato", "Хосомаки филаделфия и авокато", "2,80", "120", ""],
["", "khosomaki-somga-i-avokado", "Хосомаки сьомга и авокадо", "4,90", "120", ""],
["", "khosomaki-ton", "Хосомаки тон", "5,60", "120", ""],
["", "khosomaki-pushena-somga", "Хосомаки пушена сьомга", "4,90", "120", ""],
["", "khosomaki-vulkan", "Хосомаки Вулкан", "5,60", "120", ""]

            ],

            "Филаделфия": [
                ["", "filadelfiya-khrupkava-skarida", "Филаделфия хрупкава скарида", "4,90", "100", ""],
["", "filadelfiya-somga-avokado-i-khrupkava-tempura", "Филаделфия сьомга, авокадо и хрупкава темпура", "4,90", "100", ""],
["", "norvezhka-gora", "Норвежка гора", "4,90", "100", ""],
["", "kleopatra", "Клеопатра", "4,90", "120", ""],
["", "filadelfiya-somga", "Филаделфия сьомга", "4,90", "100", ""]

            ],

            "Калифорния": [
                ["", "kaliforniya-red-skarida-tampura", "Калифорния ред скарида тампура", "5,60", "90", ""],
["", "snou-rol", "Сноу рол", "5,60", "100", ""],
["", "kaliforniya-skarida-i-avokado", "Калифорния скарида и авокадо", "4,90", "90", ""],
["", "kaliforniya-krab", "Калифорния краб", "5,60", "90", ""]

            ],

            "Чикън суши": [
                ["", "filadelfiya-khrupkavo-pile", "Филаделфия хрупкаво пиле", "3,50", "100", ""],
["", "klub-chikn", "Клуб чикън", "4,20", "110", ""],
["", "feshn-pile", "Фешън пиле", "4,90", "100", ""]

            ],

            "Комбо": [
                ["", "chikn-kombo", "Чикън Комбо", "10,50", "", ""],
["", "smouki-kombo", "Смоуки Комбо", "10,50", "", ""],
["", "kombo-best", "Комбо бест", "10,50", "", ""],
["", "evridej-kombo", "Евридей Комбо", "9,10", "", ""],
["", "kombo-maksi", "Комбо макси", "33,60", "", ""]

            ],

            "desserts": [
                ["", "frenska-selska-torta", "Френска селска торта", "2,80", "150", ""],
["", "biskvitena-torta-s-maskarpone-i-nutela", "Бисквитена торта с маскарпоне и нутела", "3,50", "150", ""],
["", "chijzkejk-s-gorski-plodove", "Чийзкейк с  горски плодове", "2,80", "150", ""],
["", "torta-lind", "Торта Линд", "3,50", "150", ""],
["", "torta-rafaelo", "Торта Рафаело", "2,80", "150", ""]

            ],

            "drinks": [
                ["", "domashna-plodova-limonada", "Домашна плодова лимонада", "2,10", "", ""],
["", "fresh-portokal", "Фреш портокал", "2,80", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "pepsi", "Пепси", "1,40", "", ""],
["", "vino-afuzov", "Вино Афузов", "2,10", "187", ""],
["", "vino-afuzov-misteri", "Вино Афузов Мистери", "13,30", "750", ""]

            ]
        }', 
        'slug' => 'monti-sushi',
        'business_name' => 'Monti Sushi',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8808',
        'address' => 'ж.к. Сини Камъни бл.19',
        'address_additional' => '',
        'coords_x' => '42.68613738',
        'coords_y' => '26.34316663',
        'phone' => '+359876300519',
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
            
            "Грил и шиш": [
                ["", "pecheni-kartofki-na-gril", "Печени картофки на грил", "0,00", "100", ""],
["", "ppecheni-tikvichki-na-skara", "Ппечени тиквички на скара", "0,70", "100", ""],
["", "ppecheni-chushki-na-gril", "Ппечени чушки на грил", "0,70", "100", ""],
["", "pecheni-gbki-na-skara", "Печени гъбки на скара", "0,70", "100", ""],
["", "pechen-patladzhan-na-skara", "Печен патладжан на скара", "0,70", "100", ""],
["", "pechen-luk-na-gril", "Печен лук на грил", "0,70", "100", ""],
["", "pechena-tikva-na-furna", "Печена тиква на фурна", "0,00", "100", ""],
["", "pecheno-pile-na-gril", "Печено пиле на грил", "6,30", "", ""],
["", "pecheno-butche-na-gril", "Печено бутче на грил", "1,40", "250", ""],
["", "pecheno-krilcze-na-gril", "Печено крилце на грил", "0,00", "", ""],
["", "pecheni-trtki-na-gril", "Печени трътки на грил", "0,70", "100", ""],
["", "pecheni-pateshki-srcza-na-gril", "Печени патешки сърца на грил", "0,70", "100", ""],
["", "pileshki-khapki-domashni", "Пилешки хапки домашни", "0,70", "100", ""]

            ]
        }', 
        'slug' => 'zlatnoto-pile',
        'business_name' => 'Златното Пиле',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dimitrovgrad',
        'region' => 'Dimitrovgrad',
        'postal_code' => '6400',
        'address' => 'ул. „Петър Берон“ 1',
        'address_additional' => '',
        'coords_x' => '42.06046145',
        'coords_y' => '25.58280492',
        'phone' => '+359898988875',
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
                ["", "dyavola", "Дявола", "6,30", "", ""],
["", "kaprichoza", "Капричоза", "6,30", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "rustika", "Рустика", "7,00", "", ""],
["", "kalczone", "Калцоне", "8,40", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "6,30", "", ""],
["", "vegetariana", "Вегетариана", "6,30", "", ""],
["", "kuatro-stadzhoni", "Куатро стаджони", "6,30", "", ""],
["", "napoli", "Наполи", "6,30", "", ""],
["", "romana", "Романа", "6,30", "", ""],
["", "proshuto-e-fungi", "Прошуто е фунги", "6,30", "", ""],
["", "dzola", "Дзола", "5,60", "", ""],
["", "krudo", "Крудо", "7,00", "", ""],
["", "salsicha", "Салсича", "6,30", "", ""]

            ],

            "Панини": [
                ["", "bageta", "Багета", "3,50", "", ""]

            ]
        }', 
        'slug' => 'vkusove-ot-italiya',
        'business_name' => 'Вкусове от Италия',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ж.к.Пейо Яворов бл. 3',
        'address_additional' => '',
        'coords_x' => '42.2636608',
        'coords_y' => '23.1081559',
        'phone' => '+359892057373',
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
                ["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "kartofena-salata", "Картофена салата", "2,10", "300", ""],
["", "salata-zele-s-morkovi", "Салата зеле с моркови", "2,10", "300", ""],
["", "salata-mlechna", "Салата Млечна", "2,10", "300", ""]

            ],

            "Основни ястия": [
                ["", "khrupkavi-tikvichki-s-mlechen-sos", "Хрупкави тиквички с млечен сос", "4,20", "300", ""],
["", "topeni-sirencza-ss-sladko", "Топени сиренца със сладко", "4,20", "300", ""],
["", "sirene-pane", "Сирене пане", "2,80", "250", ""],
["", "kashkaval-pane-s-mlechen-sos", "Кашкавал пане с млечен сос", "4,20", "250", ""],
["", "pileshki-khapki-s-mlechen-sos", "Пилешки хапки с млечен сос", "3,50", "250", ""],
["", "teleshki-ezik-v-maslo-s-domaten-sos", "Телешки език в масло с доматен сос", "4,90", "250", ""],
["", "panirani-kalmari", "Панирани калмари", "4,90", "300", ""],
["", "czacza", "Цаца", "2,10", "200", ""]

            ],

            "grill": [
                ["", "kyufte-na-skara", "Кюфте на скара", "0,70", "80", ""],
["", "kebapche-na-skara", "Кебапче на скара", "0,70", "80", ""],
["", "svinski-rebra-na-skara-s-prlenka", "Свински ребра на скара с пърленка", "5,60", "300", ""],
["", "svinski-vrat-na-skara-s-prlenka", "Свински врат на скара с пърленка", "5,60", "300", ""],
["", "pileshka-przhola-na-skara-s-prlenka", "Пилешка пържола на скара с пърленка", "4,90", "300", ""],
["", "plnena-pstrva", "Пълнена пъстърва", "8,40", "300", ""],
["", "pechen-svinski-dzholan-s-garnitua", "Печен свински джолан с гарнитуа", "11,20", "600", ""],
["", "teleshki-nadenichki-na-skara", "Телешки наденички на скара", "2,80", "200", ""],
["", "krilcza-na-skara", "Крилца на скара", "2,80", "300", ""],
["", "pileshki-shishcheta-na-skara", "Пилешки шишчета на скара", "3,50", "240", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "kartofi-sote-s-kopr-i-chesn", "Картофи соте с копър и чесън", "2,80", "300", ""],
["", "kartofi-maks", "Картофи макс", "3,50", "450", ""],
["", "kartofi-malcho", "Картофи Малчо", "3,50", "400", ""],
["", "kartofi-po-selski", "Картофи по селски", "2,80", "300", ""],
["", "lucheni-krgcheta-s-mlechen-sos", "Лучени кръгчета с млечен сос", "2,80", "300", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-zekhtin", "Пърленка със зехтин", "0,70", "200", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "0,70", "200", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "250", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "250", ""],
["", "prlenka-kombinirana", "Пърленка комбинирана", "1,40", "250", ""],
["", "prlenka-ss-susam", "Пърленка със сусам", "1,40", "220", ""]

            ],

            "desserts": [
                ["", "desert-na-bobi", "Десерт на Боби", "1,40", "130", ""]

            ]
        }', 
        'slug' => 'ketring-mona-lisa',
        'business_name' => 'Кетъринг Mona Lisa',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Gabrovo',
        'region' => 'Gabrovo',
        'postal_code' => '5300',
        'address' => 'ул. Константин Иречек 3',
        'address_additional' => '',
        'coords_x' => '42.87146392',
        'coords_y' => '25.31843027',
        'phone' => '+359878270222',
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
            
            "sandwiches": [
                ["", "tost-s-shunka", "Тост с шунка", "2,80", "", ""],
["", "tost-s-krenvirsh", "Тост с кренвирш", "2,80", "", ""],
["", "tost-s-lukanka", "Тост с луканка", "2,80", "", ""],
["", "tost-s-kashkaval", "Тост с кашкавал", "2,80", "", ""],
["", "tost-v-dlga-pitka", "Тост в дълга питка", "2,80", "", ""],
["", "burito", "Бурито", "3,50", "", ""],
["", "khot-dog", "Хот дог", "2,10", "", ""]

            ],

            "Принцеси": [
                ["", "princzesa-s-kajma-i-przheni-kartofi", "Принцеса с кайма и пържени картофи", "2,80", "", ""]

            ],

            "Картофки": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "", ""]

            ]
        }', 
        'slug' => 'hamburgeri-shakliyan',
        'business_name' => 'Хамбургери Шаклиян',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8808',
        'address' => 'ул. Българка 67',
        'address_additional' => '',
        'coords_x' => '42.684773',
        'coords_y' => '26.342156',
        'phone' => '+359897904827',
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
            
            "Торти на парче": [
                ["", "frenska-selska-torta", "Френска селска торта", "2,80", "", ""],
["", "torta-lind", "Торта Линд", "2,80", "", ""],
["", "biskvitena-torta-s-maskarpone-i-nutela", "Бисквитена торта с маскарпоне и Нутела", "2,80", "", ""],
["", "torta-rafaelo", "Торта Рафаело", "2,80", "", ""]

            ],

            "Цели торти": [
                ["", "frenska-selska-torta", "Френска селска торта", "32,20", "", ""],
["", "torta-lind", "Торта Линд", "21,00", "", ""],
["", "biskvitena-torta-s-maskarpone-i-nutela", "Бисквитена торта с маскарпоне и Нутела", "21,00", "", ""],
["", "torta-rafaelo", "Торта Рафаело", "21,00", "", ""],
["", "torta-ferero", "Торта Фереро", "23,10", "", ""],
["", "tiramisu", "Тирамису", "21,00", "", ""],
["", "borovinkov-chijzkejk", "Боровинков чийзкейк", "19,60", "", ""],
["", "yagodov-chijzkejk", "Ягодов чийзкейк", "19,60", "", ""],
["", "orekhova-keto-torta", "Орехова кето торта", "24,50", "", ""]

            ],

            "others": [
                ["", "sveshh-czifra", "Свещ цифра", "1,40", "", ""],
["", "iskryashha-sveshh", "Искряща свещ", "1,40", "", ""]

            ]
        }', 
        'slug' => 'monti-cakes',
        'business_name' => 'Monti Cakes &amp; Catering',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8808',
        'address' => 'Цар Освободител 5',
        'address_additional' => '',
        'coords_x' => '42.681022',
        'coords_y' => '26.317855',
        'phone' => '+359876300519',
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
            
            "Парче торта": [
                ["", "rimski-noshhi", "Римски нощи", "2,80", "", ""],
["", "shakliyan", "Шаклиян", "2,80", "", ""],
["", "gari", "Гари", "2,80", "", ""],
["", "krisi", "Криси", "2,80", "", ""],
["", "garash", "Гараш", "2,80", "", ""]

            ],

            "Цяла торта": [
                ["", "shokolina", "Шоколина", "17,50", "", ""],
["", "shokolina", "Шоколина", "28,70", "", ""],
["", "bryule", "Брюле", "16,80", "", ""],
["", "rimski-noshhi", "Римски нощи", "16,80", "", ""],
["", "rimski-noshhi", "Римски нощи", "30,80", "", ""],
["", "plodova", "Плодова", "21,00", "", ""],
["", "krokant", "Крокант", "16,10", "", ""],
["", "shakliyan", "Шаклиян", "19,60", "", ""],
["", "shakliyan", "Шаклиян", "32,90", "", ""],
["", "garash", "Гараш", "35,70", "", ""],
["", "krisi", "Криси", "32,20", "", ""]

            ],

            "За празника": [
                ["", "fojerverki", "Фойерверки", "1,40", "", ""],
["", "zakharna-ukrasa", "Захарна украса", "0,70", "", ""]

            ]
        }', 
        'slug' => 'torti-shakliyan',
        'business_name' => 'Торти Шаклиян',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'ул. Георги С. Раковски 40',
        'address_additional' => '',
        'coords_x' => '42.6826471',
        'coords_y' => '26.3202906',
        'phone' => '+35944623637',
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
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "proshuto-koto", "Прошуто Кото", "5,60", "", ""],
["", "kuatro-stadzhone", "Куатро Стаджоне", "6,30", "", ""],
["", "kalczone", "Калцоне", "4,90", "", ""],
["", "kalczone-speczial", "Калцоне Специал", "5,60", "", ""],
["", "san-marko", "Сан Марко", "5,60", "", ""],
["", "nepolitana", "Неполитана", "6,30", "", ""],
["", "rustika", "Рустика", "5,60", "", ""],
["", "klasik", "Класик", "6,30", "", ""],
["", "rozko", "Розко", "5,60", "", ""],
["", "detsko-menyu-1", "Детско меню 1", "5,60", "1", ""],
["", "detsko-menyu-2", "Детско меню 2", "6,30", "2", ""],
["", "porketa", "Поркета", "5,60", "", ""],
["", "multo-perfekto", "Мулто Перфекто", "6,30", "", ""],
["", "kuatro-di-karne", "Куатро ди карне", "7,00", "", ""]

            ],

            "Пици с прясна моцарела": [
                ["", "margarita-neapolitana", "Маргарита неаполитана", "6,30", "500", ""],
["", "dyavola", "Дявола", "7,00", "500", ""],
["", "proshuto-i-rukola", "Прошуто и рукола", "7,70", "500", ""]

            ],

            "Семейни пици": [
                ["", "semejna-margarita", "Семейна Маргарита", "10,50", "", ""],
["", "semejna-kaprichoza", "Семейна Капричоза", "13,30", "", ""],
["", "semejna-klasik", "Семейна Класик", "16,10", "", ""],
["", "semejna-rozko", "Семейна Розко", "15,40", "", ""],
["", "semejna-san-marko", "Семейна Сан Марко", "15,40", "", ""],
["", "semejna-kuatro-di-karne", "Семейна Куатро ди карне", "16,10", "", ""]

            ],

            "sauces": [
                ["", "domaten-lyut", "Доматен лют", "0,00", "", ""],
["", "domaten-s-chesn", "Доматен с чесън", "0,00", "", ""],
["", "italianski", "Италиански", "0,00", "", ""],
["", "byal-sos", "Бял сос", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "", ""],
["", "chili-sos", "Чили сос", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "ketchup", "Кетчуп", "0,00", "", ""]

            ]
        }', 
        'slug' => 'picariya-klasik',
        'business_name' => 'Пицария Класик',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3700',
        'address' => 'ул. Цар Александър II 25',
        'address_additional' => '',
        'coords_x' => '43.9833185',
        'coords_y' => '22.8767018',
        'phone' => '+359887738615',
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
                ["", "grczka-salata", "Гръцка салата", "2,80", "400", ""],
["", "grilovana-salata", "Грилована салата", "3,50", "400", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "francheze", "Франчезе", "5,60", "370", ""],
["", "czezar", "Цезар", "4,90", "400", ""],
["", "svezha-salata-s-domashno-marinovana-somga", "Свежа салата с домашно маринована сьомга", "4,90", "350", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "salata-s-pryasno-sirene", "Салата с прясно сирене", "3,50", "450", ""],
["", "zdravoslovna-salata", "Здравословна салата", "3,50", "500", ""],
["", "salata-ss-sino-sirene", "Салата със синьо сирене", "4,20", "300", ""]

            ],

            "starters": [
                ["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,90", "270", ""],
["", "panirani-krilcza-s-kornflejks", "Панирани крилца с корнфлейкс", "3,50", "350", ""],
["", "panirani-kashkavaleni-prchiczi", "Панирани кашкавалени пръчици", "3,50", "200", ""],
["", "panirani-kalmari-ss-sladko-lyut-sos", "Панирани калмари със сладко-лют сос", "5,60", "250", ""]

            ],

            "Домашно приготвена паста": [
                ["", "taliateli-karbonara", "Талиатели Карбонара", "4,90", "400", ""],
["", "taliateli-morksi-dar", "Талиатели моркси дар", "8,40", "400", ""]

            ],

            "Основни ястия": [
                ["", "zdravoslovno-pileshko-role", "Здравословно пилешко роле", "6,30", "400", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "350", ""],
["", "bavno-pecheni-svinski-rebrcza-glazirani-s-barbekyu-sos", "Бавно печени свински ребърца глазирани с барбекю сос", "7,70", "600", ""],
["", "pile-kuatro-formadzhi", "Пиле Куатро Формаджи", "5,60", "", ""]

            ],

            "garnish": [
                ["", "miks-salata", "Микс салата", "1,40", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "kartofi-uedzhis", "Картофи Уеджис", "1,40", "150", ""],
["", "sirene", "Сирене", "0,70", "100", ""]

            ],

            "Сандвичи и Бургери": [
                ["", "plnozrnesta-chabata-s-domashno-marinovana-somga", "Пълнозърнеста чабата с домашно маринована сьомга", "5,60", "450", ""],
["", "sandvich-s-pileshko-file", "Сандвич с пилешко филе", "4,90", "400", ""],
["", "sandvich-ss-svinsko-pecheno-role-porketa", "Сандвич със свинско печено роле Поркета", "4,90", "450", ""]

            ],

            "Пица на пещ": [
                ["", "margarita", "Маргарита", "4,90", "400", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "7,00", "450", ""],
["", "proshuto-i-rukola", "Прошуто и рукола", "8,40", "450", ""],
["", "peperoni", "Пеперони", "6,30", "450", ""],
["", "picza-moczarela-i-rukola", "Пица Моцарела и рукола", "5,60", "450", ""],
["", "picza-s-pileshko-i-topeno-sirene", "Пица с пилешко и топено сирене", "7,00", "450", ""],
["", "khlebche-na-peshh-ss-zekhtin", "Хлебче на пещ със зехтин", "0,70", "200", ""],
["", "khlebche-s-kashkaval-i-chesn-na-peshh", "Хлебче с кашкавал и чесън на пещ", "1,40", "230", ""],
["", "kaprichoza", "Капричоза", "6,30", "450", ""]

            ],

            "desserts": [
                ["", "amerikanski-palachinki-s-shokolad-i-banan", "Американски палачинки с шоколад и банан", "2,10", "200", ""],
["", "domashna-torta-s-maskarpone-i-bejlis", "Домашна торта с маскарпоне и бейлис", "2,80", "250", ""]

            ]
        }', 
        'slug' => 'chef-s-family',
        'business_name' => 'Chef&#039;s Family',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3700',
        'address' => 'ул. Уилям Гладстон 27',
        'address_additional' => '',
        'coords_x' => '43.9917577',
        'coords_y' => '22.87892808',
        'phone' => '+359876509696',
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
            
            "dunner": [
                ["", "dyuner-s-pileshko-meso", "Дюнер с пилешко месо", "1,40", "200", ""],
["", "dyuner-s-pileshko-meso", "Дюнер с пилешко месо", "2,10", "300", ""],
["", "dyuner-s-pileshko-meso", "Дюнер с пилешко месо", "3,50", "400", ""],
["", "pepsi-ken", "Пепси кен", "0,70", "", ""]

            ],

            "drinks": [
                ["", "ajryan-nasi", "Айрян Наси", "0,00", "", ""]

            ]
        }', 
        'slug' => 'lezzet-stop-duner',
        'business_name' => 'Lezzet Stop Duner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'ул. 6-ти Септември 1',
        'address_additional' => '',
        'coords_x' => '42.6794809',
        'coords_y' => '26.311051',
        'phone' => '+359877568345',
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
                ["", "lyatna-vila-vilekula", "Лятна Вила Вилекула", "5,60", "360", ""],
["", "zelena-salata-s-repichki-krastavichki-i-dresing-sent-klemens", "Зелена салата с репички, краставички и дресинг Сент Клеменс", "4,20", "250", ""],
["", "kapreze", "Капрезе", "5,60", "300", ""],
["", "shopska-salata", "Шопска салата", "4,20", "370", ""],
["", "grczka-salata", "Гръцка салата", "4,90", "380", ""],
["", "brkana-selska-salata", "Бъркана селска салата", "4,90", "400", ""]

            ],

            "Пърленки": [
                ["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "200", ""],
["", "kashkavalena-prlenka", "Кашкавалена пърленка", "2,10", "260", ""],
["", "zatvorena-prlenka", "Затворена пърленка", "2,80", "280", ""]

            ],

            "starters": [
                ["", "grilovano-khalumi-s-domati-konkase-ss-sumak", "Гриловано халуми с домати конкасе със сумак", "4,90", "160", ""],
["", "tatkovo-meze", "Татково мезе", "6,30", "250", ""],
["", "pileshki-prchiczi", "Пилешки пръчици", "5,60", "220", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "3,50", "250", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "3,50", "280", ""],
["", "przheni-kartofi-s-gben-sos", "Пържени картофи с гъбен сос", "2,80", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "280", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "", ""],
["", "kuatro", "Куатро", "5,60", "", ""],
["", "picza-formadzhi", "Пица Формаджи", "6,30", "", ""],
["", "picza-vilekula", "Пица Вилекула", "6,30", "", ""],
["", "lyatna-picza", "Лятна пица", "4,90", "", ""]

            ],

            "burgers": [
                ["", "klasicheski-chijzburger", "Класически чийзбургер", "5,60", "380", ""],
["", "bostn-burger", "Бостън бургер", "6,30", "320", ""],
["", "pueshki-burger", "Пуешки бургер", "7,00", "340", ""],
["", "fuul-chijzburger", "Фуул чийзбургер", "5,60", "350", ""]

            ],

            "Основни ястия": [
                ["", "pileshko-file-kapreze-s-miks-salata", "Пилешко филе Капрезе с микс салата", "7,00", "320", ""],
["", "svinsko-bonfile", "Свинско бонфиле", "9,10", "380", ""],
["", "domashni-kyufteta", "Домашни кюфтета", "6,30", "390", ""],
["", "teleshki-mini-kyuftencza", "Телешки мини кюфтенца", "7,00", "390", ""]

            ],

            "desserts": [
                ["", "frenska-nuga", "Френска Нуга", "2,80", "100", ""],
["", "palachinkova-torta-pipi", "Палачинкова торта Пипи", "3,50", "150", ""],
["", "biskvitena-torta-vilekula-s-nutela", "Бисквитена торта Вилекула с Нутела", "2,80", "140", ""]

            ],

            "Детско меню": [
                ["", "pileshko-file", "Пилешко филе", "3,50", "230", ""],
["", "mini-margarita", "Мини Маргарита", "3,50", "", ""],
["", "mini-picza", "Мини пица", "3,50", "", ""],
["", "mini-teleshki-burger-s-krastavichki", "Мини телешки бургер с краставички", "4,20", "250", ""]

            ]
        }', 
        'slug' => 'vila-vilekula',
        'business_name' => 'Вила Вилекула',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'ул. Генерал Драгомиров 13',
        'address_additional' => '',
        'coords_x' => '42.6787054',
        'coords_y' => '26.316126',
        'phone' => '+359887865250',
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
            
            "Тост": [
                ["", "s-shunka-kashkaval-i-salata", "С шунка, кашкавал и салата", "1,40", "", ""],
["", "s-pileshko-file-kashkaval-i-salata", "С пилешко филе, кашкавал и салата", "1,40", "", ""],
["", "s-lukanka-kashkaval-i-salata", "С луканка, кашкавал и салата", "1,40", "", ""],
["", "ss-salam-kashkaval-i-salata", "Със салам, кашкавал и салата", "1,40", "", ""],
["", "s-kashkaval-i-salata", "С кашкавал и салата", "1,40", "", ""],
["", "khot-dog", "Хот дог", "0,70", "", ""],
["", "dobavki", "Добавки", "0,00", "", ""],
["", "kartofki", "Картофки", "0,70", "", ""]

            ],

            "Тост - филия": [
                ["", "s-shunka-i-kashkaval", "С шунка и кашкавал", "1,40", "", ""],
["", "s-pileshko-file-i-kashkaval", "С пилешко филе и кашкавал", "1,40", "", ""],
["", "s-lukanka-i-kashkaval", "С луканка и кашкавал", "2,10", "", ""]

            ],

            "Принцеси": [
                ["", "s-shunka-i-kashkaval", "С шунка и кашкавал", "1,40", "", ""],
["", "s-pileshko-file-i-kashkaval", "С пилешко филе и кашкавал", "1,40", "", ""],
["", "s-lukanka-i-kashkaval", "С луканка и кашкавал", "1,40", "", ""],
["", "s-kajma-i-kashkaval", "С кайма и кашкавал", "1,40", "", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "", ""],
["", "krem-karamel", "Крем карамел", "0,70", "", ""]

            ]
        }', 
        'slug' => 'parcheto-fast-fuud',
        'business_name' => 'Парчето Фаст Фууд',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ж.к. Бистрица',
        'address_additional' => '',
        'coords_x' => '42.251477',
        'coords_y' => '23.128135',
        'phone' => '+359876822999',
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
                ["", "shopska-salata", "Шопска салата", "3,50", "", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "", ""]

            ],

            "Омлети": [
                ["", "omlet-s-shunka-i-kashkaval", "Омлет с шунка и кашкавал", "3,50", "", ""],
["", "omlet-ss-zelenchuczi", "Омлет със зеленчуци", "3,50", "", ""]

            ],

            "Основни ястия": [
                ["", "lavrak-s-pryasna-garnitura", "Лаврак с прясна гарнитура", "11,20", "", ""],
["", "czipura-s-pryasna-garnitura", "Ципура с прясна гарнитура", "11,20", "", ""],
["", "pstrva-s-pryasna-garnitura", "Пъстърва с прясна гарнитура", "11,20", "", ""],
["", "svinska-vratna-przhola-s-pryasna-garnitura", "Свинска вратна пържола с прясна гарнитура", "7,00", "", ""],
["", "pileshka-przhola-s-pryasna-garnitura", "Пилешка пържола с прясна гарнитура", "7,00", "", ""]

            ],

            "pasta": [
                ["", "pasta-karbonara", "Паста Карбонара", "7,00", "", ""],
["", "pasta-s-chetiri-sirena", "Паста с четири сирена", "7,00", "", ""]

            ],

            "pizza": [
                ["", "picza-margarita", "Пица Маргарита", "4,20", "", ""],
["", "picza-s-shunka-i-moczarela", "Пица с шунка и моцарела", "4,20", "", ""],
["", "zelenchukova-picza", "Зеленчукова пица", "4,20", "", ""]

            ],

            "desserts": [
                ["", "torta-fani", "Торта Фани", "2,80", "", ""],
["", "torta-garash", "Торта Гараш", "2,80", "", ""],
["", "orekhova-torta", "Орехова торта", "2,80", "", ""]

            ]
        }', 
        'slug' => 'park-hotel-central',
        'business_name' => 'Парк Хотел Централ',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'бул. Цар Освободител 6',
        'address_additional' => '',
        'coords_x' => '42.680263',
        'coords_y' => '26.315627',
        'phone' => '+359877100959',
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
            
            "Летни предложения": [
                ["", "salata-fragola", "Салата Фрагола", "4,20", "350", ""],
["", "salata-foresta", "Салата Фореста", "4,20", "400", ""],
["", "damska-salata", "Дамска салата", "4,20", "400", ""],
["", "pileshki-burger", "Пилешки бургер", "4,20", "", ""],
["", "svinski-burger", "Свински бургер", "4,20", "", ""],
["", "teleshki-burger", "Телешки бургер", "4,90", "", ""],
["", "mini-ekleri-s-yagodi-i-shokolad", "Мини еклери с ягоди и шоколад", "2,80", "200", ""],
["", "yagodi-s-shokolad", "Ягоди с шоколад", "2,80", "210", ""],
["", "plato-ppesh", "Плато пъпеш", "2,80", "250", ""],
["", "plato-dinya", "Плато диня", "2,80", "250", ""],
["", "czacza", "Цаца", "2,10", "250", ""],
["", "salaka", "Салака", "3,50", "250", ""],
["", "popcheta", "Попчета", "4,90", "500", ""],
["", "safrid", "Сафрид", "4,90", "300", ""]

            ],

            "Табиетлийски салати за ракийка": [
                ["", "salata-nazdrave", "Салата Наздраве", "2,80", "400", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "pastirska-salata", "Пастирска салата", "3,50", "500", ""],
["", "mekhandzhijska-salata", "Механджийска салата", "3,50", "400", ""],
["", "rodopska-salata", "Родопска салата", "2,80", "400", ""],
["", "pechen-piper-s-chesnche-i-magdanoz", "Печен пипер с чесънче и магданоз", "2,80", "300", ""],
["", "ti-cherpish", "Ти черпиш", "3,50", "400", ""],
["", "blaga-salatka", "Блага салатка", "3,50", "400", ""],
["", "dyadova-salata", "Дядова салата", "2,80", "400", ""],
["", "babina-salata", "Бабина салата", "3,50", "400", ""],
["", "balkanska-salata", "Балканска салата", "3,50", "450", ""],
["", "mominska-salata", "Моминска салата", "3,50", "350", ""],
["", "snezhanka", "Снежанка", "2,80", "300", ""]

            ],

            "Салати за ценители": [
                ["", "salata-vitamina", "Салата Витамина", "2,80", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "350", ""],
["", "salata-czezar-s-khrupkavo-pile", "Салата Цезар с хрупкаво пиле", "4,20", "400", ""]

            ],

            "Мераклийски глезотийки и мезалъци за табиетлии": [
                ["", "krchmarska-razyadka", "Кръчмарска разядка", "6,30", "400", ""],
["", "pileshki-srcza-v-luk", "Пилешки сърца в лук", "3,50", "350", ""],
["", "pileshki-srcza-s-luk-gbi-i-smetana", "Пилешки сърца с лук, гъби и сметана", "4,20", "400", ""],
["", "pileshki-drobcheta-v-maslo-i-luk", "Пилешки дробчета в масло и лук", "3,50", "350", ""],
["", "svinski-srcza-s-luk", "Свински сърца с лук", "3,50", "350", ""],
["", "svinski-ushi", "Свински уши", "4,20", "300", ""],
["", "przhen-svinski-drob-na-skara", "Пържен свински дроб на скара", "2,80", "300", ""],
["", "teleshko-eziche-v-maslcze-s-chesn", "Телешко езиче в масълце с чесън", "5,60", "200", ""],
["", "teleshki-ezik-po-bolyarski", "Телешки език по болярски", "6,30", "350", ""],
["", "teleshko-shkembe-v-maslo", "Телешко шкембе в масло", "4,90", "200", ""],
["", "shkembe-na-khadzhiyata", "Шкембе на хаджията", "5,60", "350", ""],
["", "selsko-shkembe", "Селско шкембе", "4,90", "250", ""],
["", "chorbadzhijsko-meze", "Чорбаджийско мезе", "6,30", "400", ""],
["", "agneshka-glava-v-maslo-s-luk", "Агнешка глава в масло с лук", "5,60", "", ""]

            ],

            "Предястия за стройни люде": [
                ["", "tarama-khajver", "Тарама хайвер", "2,80", "200", ""],
["", "ovcharski-katk", "Овчарски катък", "2,80", "300", ""],
["", "gabrovska-topenicza", "Габровска топеница", "2,80", "300", ""],
["", "khrupkavi-tikvichki-s-mlechen-sos", "Хрупкави тиквички с млечен сос", "3,50", "350", ""],
["", "zelenchuczi-na-skara-s-bosilkovo-pesto-za-momite", "Зеленчуци на скара с босилково песто за момите", "4,20", "350", ""],
["", "lucheni-krgcheta-s-chesnov-sos", "Лучени кръгчета с чеснов сос", "2,80", "250", ""],
["", "gbi-v-maslcze-s-chesn-i-byalo-vino", "Гъби в масълце с чесън и бяло вино", "2,80", "300", ""],
["", "topeno-sirene-v-kornflejks-ss-sladko-ot-borovinki", "Топено сирене в корнфлейкс със сладко от боровинки", "4,20", "300", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "3,50", "300", ""],
["", "pileshki-khapki-v-chesnov-sos", "Пилешки хапки в чеснов сос", "4,20", "300", ""],
["", "pileshki-filencza-v-kornflejks", "Пилешки филенца в корнфлейкс", "4,20", "300", ""]

            ],

            "Картофено царство": [
                ["", "presni-przheni-kartofi", "Пресни пържени картофи", "1,40", "300", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "350", ""],
["", "selski-pikantni-kartofi", "Селски пикантни картофи", "2,10", "300", ""],
["", "kartofi-sote-s-kopr-i-chesn", "Картофи соте с копър и чесън", "2,80", "350", ""],
["", "kartofi-sote-s-pile-kiseli-krastaviczi-i-kashkaval", "Картофи соте с пиле, кисели краставици и кашкавал", "4,20", "350", ""],
["", "ogreten-v-keremida", "Огретен в керемида", "3,50", "500", ""],
["", "zelenchukova-keremida", "Зеленчукова керемида", "4,20", "550", ""],
["", "fantaziya-v-keremida", "Фантазия в керемида", "4,90", "550", ""],
["", "lovdzhijska-keremida", "Ловджийска керемида", "4,90", "550", ""],
["", "chorbadzhijska-keremida", "Чорбаджийска керемида", "4,90", "550", ""],
["", "khajdushko-meze-na-keremida", "Хайдушко мезе на керемида", "6,30", "550", ""],
["", "sirene-po-shopski", "Сирене по шопски", "3,50", "350", ""],
["", "gyuveche-yunak", "Гювече Юнак", "4,90", "450", ""]

            ],

            "pizza": [
                ["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "balkanska", "Балканска", "4,20", "", ""],
["", "salami", "Салами", "4,20", "", ""],
["", "palermo", "Палермо", "4,90", "", ""],
["", "polo", "Поло", "4,90", "", ""],
["", "dyavola", "Дявола", "4,90", "", ""],
["", "rimini", "Римини", "4,90", "", ""],
["", "gradska", "Градска", "4,90", "", ""],
["", "kalczone", "Калцоне", "4,20", "", ""],
["", "redzhino", "Реджино", "4,90", "", ""],
["", "yunak", "Юнак", "4,90", "", ""],
["", "karibiya", "Карибия", "4,90", "", ""],
["", "korleone", "Корлеоне", "4,90", "", ""],
["", "margarita-s-presni-domati", "Маргарита с пресни домати", "2,80", "", ""],
["", "vegan", "Веган", "3,50", "", ""],
["", "kapreze", "Капрезе", "3,50", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,90", "", ""]

            ],

            "Скара за гладни и приятели": [
                ["", "sofra-za-dvama", "Софра за двама", "18,90", "1200", ""],
["", "khajdushka-skara-za-druzhina", "Хайдушка скара за дружина", "33,60", "", ""],
["", "svinski-kyufteta-s-garnitura-i-lyutenicza", "Свински кюфтета с гарнитура и лютеница", "4,20", "", ""],
["", "svinski-kebapcheta-s-garnitura-i-lyutenicza", "Свински кебапчета с гарнитура и лютеница", "4,20", "", ""],
["", "teleshki-kyufteta-s-garnitura-i-bbq-sos", "Телешки кюфтета с гарнитура и BBQ сос", "4,90", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "120", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "120", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "250", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "4,20", "300", ""],
["", "svinska-przhola-ot-vrat", "Свинска пържола от врат", "5,60", "300", ""],
["", "pileshki-shish-na-sabya", "Пилешки шиш на сабя", "7,70", "500", ""],
["", "svinski-shish-na-sabya", "Свински шиш на сабя", "8,40", "500", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "4,90", "", ""],
["", "svinski-rebrcza", "Свински ребърца", "7,70", "650", ""],
["", "svinska-meshana-skara", "Свинска мешана скара", "7,00", "600", ""],
["", "srbski-nadeniczi", "Сръбски наденици", "6,30", "", ""],
["", "ushhipczi-s-garnitura-i-sos", "Ущипци с гарнитура и сос", "5,60", "450", ""]

            ],

            "pasta": [
                ["", "boloneze", "Болонезе", "3,50", "500", ""],
["", "karbonara", "Карбонара", "3,50", "500", ""],
["", "fetuchini", "Фетучини", "4,20", "500", ""]

            ],

            "fish": [
                ["", "sharan", "Шаран", "4,90", "300", ""],
["", "skumriya-s-garnitura", "Скумрия с гарнитура", "4,90", "300", ""],
["", "pstrva-na-skara-s-garnitura", "Пъстърва на скара с гарнитура", "6,30", "300", ""],
["", "czipura-na-skara-s-garnitura", "Ципура на скара с гарнитура", "9,10", "300", ""],
["", "lavrak-na-skara-s-garnitura", "Лаврак на скара с гарнитура", "9,10", "300", ""]

            ],

            "Димящи сачове": [
                ["", "sach-s-pileshko-meso", "Сач с пилешко месо", "12,60", "950", ""],
["", "sach-ss-svinsko-meso", "Сач със свинско месо", "13,30", "950", ""],
["", "mekhandzhijski-sach", "Механджийски сач", "14,00", "1200", ""]

            ],

            "Гозби на гладни люде": [
                ["", "yunashki-kscheta-s-garnitura", "Юнашки късчета с гарнитура", "5,60", "400", ""],
["", "pile-zhulien", "Пиле Жулиен", "6,30", "450", ""],
["", "krekhki-karencza-s-pecheni-zelenchuczi", "Крехки каренца с печени зеленчуци", "6,30", "450", ""],
["", "pile-fantaziya", "Пиле Фантазия", "6,30", "450", ""],
["", "svinsko-dzholanche", "Свинско джоланче", "7,70", "400", ""],
["", "tropashhi-khapki", "Тропащи хапки", "6,30", "400", ""],
["", "svinska-przhola-fantaziya", "Свинска пържола Фантазия", "7,00", "450", ""],
["", "kasapsko-meze", "Касапско мезе", "7,70", "500", ""],
["", "teleshki-kscheta-ss-zelenchuczi", "Телешки късчета със зеленчуци", "9,10", "450", ""]

            ],

            "garnish": [
                ["", "topla-garnitura", "Топла гарнитура", "1,40", "200", ""],
["", "studena-garnitura", "Студена гарнитура", "1,40", "200", ""]

            ],

            "Пърленки": [
                ["", "obiknovena-prlenka", "Обикновена пърленка", "1,40", "250", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "300", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "350", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "2,10", "250", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "300", ""]

            ],

            "sauces": [
                ["", "soev-sos", "Соев сос", "0,70", "", ""],
["", "tartar", "Тартар", "0,70", "", ""],
["", "ketchup", "Кетчуп", "0,70", "", ""],
["", "majoneza", "Майонеза", "0,70", "", ""],
["", "chili", "Чили", "0,70", "", ""],
["", "gorchicza", "Горчица", "0,70", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "", ""],
["", "zekhtin", "Зехтин", "0,70", "", ""]

            ],

            "Нещо за замезване": [
                ["", "lukanka", "Луканка", "1,40", "50", ""],
["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""]

            ],

            "desserts": [
                ["", "czedeno-mlyako-ss-sladko", "Цедено мляко със сладко", "2,10", "200", ""],
["", "torta", "Торта", "2,10", "180", ""],
["", "czedeno-mlyako-s-med-i-orekhi", "Цедено мляко с мед и орехи", "2,10", "200", ""]

            ]
        }', 
        'slug' => 'restorant-yunak',
        'business_name' => 'Ресторант Юнак',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Shumen',
        'region' => 'Shumen',
        'postal_code' => '9700',
        'address' => 'ул. Илия Блъсков 17',
        'address_additional' => '',
        'coords_x' => '43.2724553',
        'coords_y' => '26.9196187',
        'phone' => '+359899884574',
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
                ["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "mlechna-salata-snezhanka-s-domashna-prlenka-ss-semena-orekhi-i-maslini", "Млечна салата Снежанка с домашна пърленка със семена, орехи и маслини", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "450", ""],
["", "salata-blgarska", "Салата Българска", "3,50", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "400", ""],
["", "salata-s-riba-ton", "Салата с  риба тон", "4,90", "350", ""],
["", "salata-s-beleni-domati-i-pecheno-sirene", "Салата с белени домати и печено сирене", "4,90", "400", ""],
["", "salata-s-bivolsko-sirene", "Салата с биволско сирене", "6,30", "450", ""],
["", "salata-s-kinoa", "Салата с киноа", "4,90", "300", ""],
["", "salata-s-pecheno-sirene-i-zeleni-salati", "Салата с печено сирене и зелени салати", "4,20", "350", ""],
["", "salata-svezhest", "Салата Свежест", "4,90", "350", ""],
["", "salata-sen-trope", "Салата Сен Тропе", "4,90", "300", ""],
["", "salata-ss-sino-sirene", "Салата със синьо сирене", "4,90", "350", ""],
["", "salata-ss-skaridi", "Салата със скариди", "7,70", "350", ""],
["", "salata-czezar-s-pecheni-pileshki-filencza-i-khrupkav-bekon", "Салата Цезар с печени пилешки филенца и хрупкав бекон", "5,60", "350", ""],
["", "salata-czezar-s-khrupkavi-kalmari", "Салата Цезар с хрупкави калмари", "6,30", "350", ""],
["", "salata-czezar-s-khrupkavo-pile", "Салата Цезар с хрупкаво пиле", "4,90", "350", ""],
["", "selska-salata", "Селска салата", "3,50", "400", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""]

            ],

            "starters": [
                ["", "bireni-kyuftencza", "Бирени кюфтенца", "7,00", "550", ""],
["", "bireno-plato", "Бирено плато", "16,10", "", ""],
["", "domashni-presni-kartofi", "Домашни пресни картофи", "2,10", "", ""],
["", "kartofi-uedzhis", "Картофи уеджис", "2,80", "", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "4,90", "250", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "4,20", "350", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "4,20", "350", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,90", "400", ""],
["", "pileshki-khapki-s-mlechno-chesnov-sos", "Пилешки хапки с млечно-чеснов сос", "5,60", "250", ""],
["", "plata-sirena", "Плата Сирена", "15,40", "480", ""],
["", "plato-mezeta", "Плато Мезета", "13,30", "300", ""],
["", "plato-pileshki-khapki-s-mlechno-chesnov-i-sladko-kisel-sos", "Плато пилешки хапки с млечно-чеснов и сладко кисел сос", "14,70", "700", ""],
["", "plato-sireni-khapki-ss-sos-gorski-plodove", "Плато сирени хапки със сос горски плодове", "14,70", "700", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""],
["", "sireni-khapki", "Сирени хапки", "4,90", "250", ""],
["", "tikvichki-po-grczki-s-mlechno-chesnov-sos", "Тиквички по гръцки с млечно-чеснов сос", "3,50", "250", ""],
["", "topeni-sirencza-v-khrupkava-panirovka-ss-sos-gorski-plodove", "Топени сиренца в хрупкава панировка със сос горски плодове", "5,60", "250", ""],
["", "khrupkavi-pileshki-purichki-s-dva-vida-sos", "Хрупкави пилешки пурички с два вида сос", "5,60", "300", ""]

            ],

            "sachs": [
                ["", "brokoli-ss-sirena", "Броколи със сирена", "7,00", "", ""],
["", "zapekanka-bekon", "Запеканка Бекон", "7,00", "", ""],
["", "zapekanka-pile", "Запеканка Пиле", "7,00", "", ""],
["", "kasapski-sach", "Касапски сач", "18,90", "", ""],
["", "katino-meze", "Катино мезе", "10,50", "", ""],
["", "kombiniran-sach", "Комбиниран сач", "15,40", "", ""],
["", "pile-monti", "Пиле Монти", "7,70", "", ""],
["", "pileshki-sach", "Пилешки сач", "9,10", "", ""],
["", "svinski-sach", "Свински сач", "9,10", "", ""]

            ],

            "maindishes": [
                ["", "babini-kyuftencza-s-gben-sos-i-machkani-kartofi", "Бабини кюфтенца с гъбен сос и мачкани картофи", "7,00", "450", ""],
["", "karencza-dizhone-s-kartofi-na-plocha", "Каренца Дижоне с картофи на плоча", "7,70", "400", ""],
["", "karencza-kapreze", "Каренца Капрезе", "7,70", "400", ""],
["", "monti-kscheta", "Монти късчета", "7,00", "400", ""],
["", "pateshko-magre-s-portokalov-sos", "Патешко магре с портокалов сос", "11,90", "220", ""],
["", "pileshki-ruladin", "Пилешки руладин", "7,70", "400", ""],
["", "svinski-medaloni", "Свински медальони", "7,70", "350", ""]

            ],

            "pizza": [
                ["", "byagashho-pile", "Бягащо пиле", "5,60", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "venecziya", "Венеция", "5,60", "", ""],
["", "vlcha", "Вълча", "6,30", "", ""],
["", "karbonara", "Карбонара", "5,60", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "5,60", "", ""],
["", "mama-miya", "Мама Мия", "5,60", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "monti", "Монти", "5,60", "", ""],
["", "nicza", "Ница", "5,60", "", ""],
["", "picza-klasik", "Пица Класик", "5,60", "", ""],
["", "picza-roma", "Пица Рома", "5,60", "", ""],
["", "picza-s-artishok", "Пица с артишок", "5,60", "", ""],
["", "picza-s-kajma", "Пица с кайма", "5,60", "", ""],
["", "picza-ton", "Пица Тон", "6,30", "", ""]

            ],

            "Паста и ризото": [
                ["", "pasta-boloneze", "Паста Болонезе", "4,90", "400", ""],
["", "pasta-karbonara", "Паста Карбонара", "4,90", "400", ""],
["", "pasta-kuatro-formadzhi", "Паста Куатро Формаджи", "5,60", "400", ""],
["", "pasta-morski-darove", "Паста Морски дарове", "7,70", "400", ""],
["", "rizoto-morski-darove", "Ризото Морски дарове", "7,70", "400", ""],
["", "rizoto-s-pile-i-gbki", "Ризото с пиле и гъбки", "5,60", "400", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "400", ""]

            ],

            "Рибни ястия": [
                ["", "kalmari-v-khrupkava-tempura", "Калмари в хрупкава темпура", "7,70", "300", ""],
["", "kalmari-na-plocha", "Калмари на плоча", "7,00", "200", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "7,00", "200", ""],
["", "lavrak", "Лаврак", "13,30", "450", ""],
["", "oktopod-po-grczki-ss-svezha-salata", "Октопод по гръцки със свежа салата", "21,00", "200", ""],
["", "skaridi-v-khrupkava-tempura", "Скариди в хрупкава темпура", "9,80", "250", ""],
["", "skaridi-monti", "Скариди Монти", "13,30", "250", ""],
["", "czipura", "Ципура", "13,30", "450", ""]

            ],

            "barbecue": [
                ["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "4,90", "400", ""],
["", "kasapski-kyufteta", "Касапски кюфтета", "6,30", "400", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "pileshka-przhola", "Пилешка пържола", "6,30", "220", ""],
["", "plato-barbekyu", "Плато Барбекю", "15,40", "", ""],
["", "presen-domashen-sudzhuk", "Пресен домашен суджук", "7,00", "220", ""],
["", "svinska-przhola", "Свинска пържола", "6,30", "220", ""],
["", "svinski-rebrcza-s-presni-kartofki-i-barbekyu-sos", "Свински ребърца с пресни картофки и барбекю сос", "8,40", "500", ""],
["", "teleshki-kyuftencza", "Телешки кюфтенца", "5,60", "400", ""],
["", "shareno-mescze", "Шарено месце", "7,70", "550", ""]

            ],

            "bread": [
                ["", "pide-ss-sirene-kashkaval-i-yajcze", "Пиде със сирене, кашкавал и яйце", "3,50", "300", ""],
["", "prlenka-naturalna", "Пърленка натурална", "1,40", "200", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,80", "250", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "2,80", "250", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "1,40", "200", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "2,80", "220", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,10", "220", ""],
["", "turski-khlyab-s-maslo-i-sharena-sol", "Турски хляб с масло и шарена сол", "3,50", "250", ""],
["", "fokacha-ss-semena", "Фокача със семена", "2,10", "200", ""],
["", "fokacha-ss-susheni-domati-rozmarin-i-maslini", "Фокача със сушени домати, розмарин и маслини", "2,10", "200", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta-s-maskarpone-i-nutela", "Бисквитена торта с маскарпоне и нутела", "3,50", "150", ""],
["", "chijzkejk-s-gorski-plodove", "Чийзкейк с горски плодове", "2,80", "150", ""],
["", "frenska-selska-torta", "Френска селска торта", "2,80", "150", ""],
["", "torta-lind", "Торта Линд", "3,50", "150", ""]

            ],

            "drinks": [
                ["", "domashna-plodova-limonada", "Домашна плодова лимонада", "1,40", "", ""],
["", "fresh-portokal", "Фреш портокал", "2,10", "", ""],
["", "fresh-portokal-i-grejpfrut", "Фреш портокал и грейпфрут", "2,10", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "330", ""],
["", "mineralna-voda", "Минерална вода", "1,40", "", ""],
["", "ajryan", "Айрян", "0,70", "", ""],
["", "pepsi", "Пепси", "1,40", "330", ""],
["", "pepsi", "Пепси", "1,40", "500", ""],
["", "mirinda", "Миринда", "1,40", "330", ""],
["", "sevn-p", "Севън Ъп", "1,40", "330", ""],
["", "studen-chaj-liptn-limon", "Студен чай Липтън лимон", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'monti',
        'business_name' => 'Monti',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8808',
        'address' => 'ж.к. Сини камъни бл. 19',
        'address_additional' => '',
        'coords_x' => '42.6861175',
        'coords_y' => '26.3430709',
        'phone' => '+359877554455',
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
                ["", "margarita", "Маргарита", "2,80", "", ""],
["", "formadzhi", "Формаджи", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "roma", "Рома", "4,20", "", ""],
["", "piperone", "Пипероне", "4,20", "", ""],
["", "kalczone---zatvorena", "Калцоне - затворена", "4,90", "", ""],
["", "khajdushka", "Хайдушка", "4,90", "", ""],
["", "polo-loko", "Поло Локо", "4,90", "", ""],
["", "shunka-i-bekon", "Шунка и бекон", "4,20", "", ""],
["", "rimini", "Римини", "3,50", "", ""],
["", "lukanka-i-topeno-sirene", "Луканка и топено сирене", "4,20", "", ""],
["", "picza-maks", "Пица Макс", "5,60", "", ""],
["", "bbq", "BBQ", "4,90", "", ""],
["", "shunka-i-czarevicza", "Шунка и царевица", "4,20", "", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-zekhtin", "Пърленка със зехтин", "0,70", "200", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "0,70", "200", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "250", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "250", ""],
["", "prlenka-kombinirana", "Пърленка комбинирана", "1,40", "250", ""],
["", "prlenka-ss-susam", "Пърленка със сусам", "1,40", "220", ""]

            ],

            "others": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "pileshki-khapki-s-mlechen-sos", "Пилешки хапки с млечен сос", "3,50", "250", ""]

            ],

            "sauces": [
                ["", "mlechno-chesnov-sos", "Млечно-чеснов сос", "0,70", "60", ""],
["", "gorchicza", "Горчица", "0,00", "10", ""],
["", "majoneza", "Майонеза", "0,00", "10", ""],
["", "ketchup", "Кетчуп", "0,00", "10", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "60", ""],
["", "marinara-sos", "Маринара сос", "0,70", "60", ""]

            ]
        }', 
        'slug' => 'picariya-vkusna-pica',
        'business_name' => 'Пицария Вкусна пица',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Gabrovo',
        'region' => 'Gabrovo',
        'postal_code' => '5300',
        'address' => 'ул. Константин Иречек 3',
        'address_additional' => '',
        'coords_x' => '42.8714748',
        'coords_y' => '25.3183743',
        'phone' => '+359878270222',
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
                ["", "meshana-salata---redena", "Мешана салата - редена", "3,50", "400", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "snezhanka", "Снежанка", "3,50", "300", ""],
["", "pecheni-piperki-s-katk", "Печени пиперки с катък", "3,50", "300", ""]

            ],

            "dry-appetizer": [
                ["", "lukanka", "Луканка", "2,10", "50", ""],
["", "pastrma---file-elena-50gr", "Пастърма - Филе Елена (50гр)", "2,80", "", ""],
["", "sirene-natyur", "Сирене натюр", "1,40", "100", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "2,10", "100", ""]

            ],

            "alaminuti": [
                ["", "panirano-topeno-sirene", "Панирано топено сирене", "4,20", "250", ""],
["", "pileshki-zhulieni-s-kornflejks", "Пилешки жулиени с корнфлейкс", "4,20", "300", ""],
["", "panirani-maslini", "Панирани маслини", "3,50", "200", ""],
["", "sirene-khapki", "Сирене хапки", "3,50", "200", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "4,20", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "350", ""],
["", "kartofen-chips-s-chesn-i-kopr", "Картофен чипс с чесън и копър", "2,80", "150", ""],
["", "svinski-krak", "Свински крак", "3,50", "", ""],
["", "svinsko-ukho", "Свинско ухо", "3,50", "150", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,20", "230", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "230", ""],
["", "svinski-drob-przhen", "Свински дроб пържен", "4,20", "300", ""],
["", "pileshki-drob-v-maslo", "Пилешки дроб в масло", "4,20", "250", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "4,90", "350", ""],
["", "agneshka-glavichka---obezkostena", "Агнешка главичка - обезкостена", "4,20", "", ""],
["", "aromatni-gbi-v-maslo", "Ароматни гъби в масло", "3,50", "200", ""]

            ],

            "grill": [
                ["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "250", ""],
["", "pileshka-przhola-ot-file", "Пилешка пържола от филе", "4,90", "250", ""],
["", "svinska-przhola-vrat", "Свинска пържола врат", "5,60", "250", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""]

            ],

            "Сръбска/Турска скара": [
                ["", "byala-veshalicza---svinsko-kontra-file", "Бяла вешалица - свинско контра филе", "6,30", "280", ""],
["", "ushhipczi", "Ущипци", "3,50", "250", ""],
["", "pleskavicza", "Плескавица", "2,10", "140", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "4,90", "300", ""],
["", "rebra-na-skara", "Ребра на скара", "4,90", "400", ""],
["", "adana-kebap", "Адана кебап", "3,50", "240", ""]

            ],

            "sachs": [
                ["", "zelenchukov-sach", "Зеленчуков сач", "7,00", "650", ""],
["", "pileshki-sach", "Пилешки сач", "9,80", "650", ""],
["", "svinski-sach", "Свински сач", "11,20", "650", ""],
["", "meshan-sach", "Мешан сач", "10,50", "650", ""]

            ],

            "Пици на пещ": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "khaleesi", "Халееси", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "pompej", "Помпей", "4,90", "", ""],
["", "chorizo", "Чоризо", "4,90", "", ""],
["", "akapulko", "Акапулко", "4,90", "", ""],
["", "meksikana", "Мексикана", "4,90", "", ""],
["", "ludo-pile", "Лудо пиле", "4,90", "", ""],
["", "kuatro-formadzh", "Куатро Формадж", "4,90", "", ""],
["", "kuatro-stadzhone", "Куатро Стаджоне", "5,60", "", ""],
["", "redvino", "Редвино", "5,60", "", ""],
["", "mirena", "Мирена", "5,60", "", ""],
["", "kalczone", "Калцоне", "4,20", "", ""]

            ],

            "desserts": [
                ["", "torta-frenska-selska", "Торта Френска селска", "2,10", "150", ""],
["", "czedeno-mlyako-s-borovinki", "Цедено мляко с боровинки", "2,10", "200", ""],
["", "torta-garash", "Торта Гараш", "2,10", "150", ""],
["", "torta-cherveno-kadife", "Торта Червено кадифе", "2,10", "150", ""]

            ]
        }', 
        'slug' => 'mehana-bay-dancho',
        'business_name' => 'Механа бай Данчо',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Shumen',
        'region' => 'Shumen',
        'postal_code' => '9704',
        'address' => 'ул.Дедегач 30',
        'address_additional' => '',
        'coords_x' => '43.27209281',
        'coords_y' => '26.95624987',
        'phone' => '+359887753355',
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
                ["", "sveti-nikola", "Свети Никола", "7,70", "", ""],
["", "oktopodcheta-s-podpravki-v-buket-ot-svezhi-lista-domat-kubcheta-kartofi-na-para-maslini-kalamata", "Октоподчета с подправки в букет от свежи листа, домат кубчета, картофи на пара, маслини Каламата", "7,00", "", ""],
["", "frize-radicho-finesa-rukola-spanak-cheri-tikveni-semki-i-kedrovi-yadki-parmezan-balsamiko", "Фризе, радичо, финеса, рукола, спанак, чери, тиквени семки и кедрови ядки, пармезан, балсамико", "6,30", "", ""],
["", "krekhki-marulki-pileshko-file-bekon-sos-stiltn-kedrovi-yadki-tikveni-semki-parmezan-chesnova-brusketa", "Крехки марулки, пилешко филе, бекон, сос Стилтън, кедрови ядки, тиквени семки, пармезан, чеснова брускета", "7,00", "", ""],
["", "kapreze", "Капрезе", "4,90", "", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "", ""]

            ],

            "soups": [
                ["", "nasiten-zelenchukov-bulon-mescze-ot-nyakolko-vida-riba-aromatni-presni-podpravki", "Наситен зеленчуков бульон, месце от няколко вида риба, ароматни пресни подправки", "4,20", "", ""],
["", "krem-supa-ot-brokoli", "Крем супа от броколи", "3,50", "", ""],
["", "tarama-khajver", "Тарама хайвер", "6,30", "100", ""]

            ],

            "Италианска кухня": [
                ["", "presni-taliateli-s-mini-skaridki-brokoli-goprgonzola-parmezan", "Пресни талиатели с мини скаридки, броколи, гопргонзола, пармезан", "7,70", "", ""],
["", "taliateli-s-morski-darove-limonchelo-parmezan", "Талиатели с морски дарове, лимончело, пармезан", "9,10", "", ""],
["", "papardele-s-pileshko-file-pechurki-domaten-sos-bosilek", "Папарделе с пилешко филе, печурки, доматен сос, босилек", "5,60", "", ""],
["", "arabiata-s-pryasna-pasta", "Арабиата с прясна паста", "5,60", "", ""],
["", "linguini-s-domaten-sos", "Лингуини с доматен сос", "4,90", "", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "", ""],
["", "pene-ss-somga-file-kapersi-cheri-sos-ot-pushena-somga", "Пене със сьомга филе, каперси, чери, сос от пушена сьомга", "9,10", "", ""]

            ],

            "Мекотели": [
                ["", "kralski-skaridi-s-rozmarin-chesn-zekhtin", "Кралски скариди с розмарин, чесън, зехтин", "14,00", "", ""],
["", "khrupkavi-pipala-ot-kalmari-s-chesnov-sos", "Хрупкави пипала от калмари с чеснов сос", "10,50", "", ""],
["", "kalmari-na-plocha-s-buket-ot-bilki-pesto-kopr-chesn", "Калмари на плоча с букет от билки, песто, копър, чесън", "12,60", "", ""],
["", "temperirani-kalmari-s-khrlupkava-korichka-sos-tartar", "Темперирани калмари с хрлупкава коричка, сос Тартар", "14,00", "", ""]

            ],

            "Риби": [
                ["", "sharan-przhen", "Шаран пържен", "9,10", "", ""],
["", "sharan-file-na-plocha", "Шаран филе на плоча", "11,20", "", ""],
["", "som-kotlet-przhen", "Сом котлет пържен", "9,10", "", ""],
["", "sulka-file-ss-sladki-kartofi-i-limonov-sos", "Сулка филе със сладки картофи и лимонов сос", "11,90", "", ""],
["", "safrid-przhen", "Сафрид пържен", "8,40", "", ""],
["", "chernokop-na-skara", "Чернокоп на скара", "9,10", "", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "9,10", "", ""],
["", "czipura-na-plocha", "Ципура на плоча", "11,90", "", ""],
["", "lavrak-na-plocha", "Лаврак на плоча", "12,60", "", ""],
["", "somga-file-na-plocha", "Сьомга филе  на плоча", "12,60", "", ""]

            ],

            "Месни ястия": [
                ["", "svinski-bon-filencza-s-domashen-sudzhuk-pushen-bekon-pechurki-demi-sos", "Свински бон филенца с домашен суджук, пушен бекон, печурки, деми сос", "14,00", "", ""],
["", "pileshka-przhola-s-oriz-i-maslo", "Пилешка пържола с ориз и масло", "7,70", "", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "7,70", "", ""],
["", "svinska-vratna-przhola-na-skara", "Свинска вратна пържола на скара", "9,10", "", ""]

            ],

            "desserts": [
                ["", "shokoladovo-tiramisu", "Шоколадово тирамису", "4,20", "", ""]

            ],

            "Притурки": [
                ["", "kartofi-sote", "Картофи соте", "2,80", "", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "3,50", "", ""]

            ]
        }', 
        'slug' => 'sveti-nikola-restorant',
        'business_name' => 'Свети Никола ресторант',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'ул. Банско шосе 3',
        'address_additional' => '',
        'coords_x' => '42.6412612',
        'coords_y' => '26.3051851',
        'phone' => '+359889102121',
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
                ["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "salata-fantaziya", "Салата Фантазия", "4,20", "550", ""]

            ],

            "starters": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "300", ""],
["", "pileshki-krilcza-s-kartofki-i-sos-barbekyu", "Пилешки крилца с картофки и сос барбекю", "4,20", "550", ""],
["", "pileshki-khapki-v-kornflejks", "Пилешки хапки в корнфлейкс", "4,20", "300", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "3,50", "250", ""],
["", "pileshki-khapki-v-parmezan", "Пилешки хапки в пармезан", "4,20", "300", ""],
["", "khapki-v-kashkaval", "Хапки в кашкавал", "3,50", "250", ""],
["", "khapki-sirene", "Хапки сирене", "2,80", "250", ""],
["", "topeni-sirencza-pane-ss-sladko-ot-borovinki", "Топени сиренца пане със сладко от боровинки", "3,50", "270", ""],
["", "topeni-sirencza-v-kornflejks-pane-ss-sladko-ot-borovinki", "Топени сиренца в корнфлейкс пане със сладко от боровинки", "3,50", "270", ""]

            ],

            "Бургери и сандвичи": [
                ["", "klub-sandvich-malk", "Клуб сандвич малък", "2,80", "500", ""],
["", "klub-sandvich-sreden", "Клуб сандвич среден", "4,90", "600", ""],
["", "klub-sandvich-golyam", "Клуб сандвич голям", "6,30", "700", ""],
["", "parcheto-sandvich", "Парчето сандвич", "4,20", "700", ""],
["", "pileshki-burger", "Пилешки бургер", "2,80", "400", ""],
["", "svinski-burger", "Свински бургер", "2,80", "400", ""],
["", "teleshki-burger", "Телешки бургер", "2,80", "400", ""],
["", "burger-ss-sirene-i-pileshko-kyufte", "Бургер със сирене и пилешко кюфте", "2,80", "550", ""],
["", "burger-ss-sirene-i-svinsko-kyufte", "Бургер със сирене и свинско кюфте", "2,80", "550", ""],
["", "burger-s-yajcze-i-pileshko-kyufte", "Бургер с яйце и пилешко кюфте", "2,80", "450", ""],
["", "burger-s-yajcze-i-svinsko-kyufte", "Бургер с яйце и свинско кюфте", "2,80", "450", ""],
["", "burger-s-pileshka-przhola", "Бургер с пилешка пържола", "2,80", "500", ""],
["", "tost-sandvich-s-shunka-i-kashkaval", "Тост сандвич с шунка и кашкавал", "2,10", "450", ""],
["", "tost-sandvich-ss-svinsko-file-i-kashkaval", "Тост сандвич със свинско филе и кашкавал", "2,10", "450", ""],
["", "tost-sandvich-s-lukanka-i-kashkaval", "Тост сандвич с луканка и кашкавал", "2,10", "450", ""],
["", "tost-sandvich-s-kashkaval", "Тост сандвич с кашкавал", "2,10", "450", ""],
["", "tost-sandvich-s-kashkaval-sirene-i-domat", "Тост сандвич с кашкавал, сирене и домат", "2,10", "450", ""],
["", "tost-sandvich-s-pileshka-przhola-i-kashkaval", "Тост сандвич с пилешка пържола и кашкавал", "2,80", "450", ""]

            ],

            "beer": [
                ["", "staropramen", "Старопрамен", "1,40", "", ""],
["", "astika", "Астика", "0,70", "", ""],
["", "kamenicza", "Каменица", "0,70", "", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "", ""],
["", "beks", "Бекс", "1,40", "", ""],
["", "burgasko", "Бургаско", "0,70", "", ""],
["", "kamenicza-grejpfrut", "Каменица грейпфрут", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/788240.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/788241.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/788243.jpg?width=302"],
["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/788244.jpg?width=302"],
["", "fanta-byala-praskova", "Fanta Бяла Праскова", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/788245.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/788248.jpg?width=302"],
["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "0,70", "330", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/788250.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/788252.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/788253.jpg?width=302"]

            ],

            "drinks": [
                ["", "hell-classic", "Hell Classic", "0,70", "", ""],
["", "hell-active", "Hell Active", "0,70", "", ""],
["", "hell-strong-focus", "Hell Strong Focus", "0,70", "", ""],
["", "monster-energy-black-ultra", "Monster Energy Black Ultra", "1,40", "", ""],
["", "monster-energy-export", "Monster Energy Export", "1,40", "", ""],
["", "predator-energy-gold-strike", "Predator Energy Gold Strike", "0,70", "", ""],
["", "predator-energy-mean-green", "Predator Energy Mean Green", "0,70", "", ""]

            ]
        }', 
        'slug' => 'fast-food-parcheto',
        'business_name' => 'Fast Food Парчето',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ул. Николаевска 10',
        'address_additional' => '',
        'coords_x' => '42.26593649',
        'coords_y' => '23.12103309',
        'phone' => '+359897938074 ; 0895430591',
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
                ["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "500", ""],
["", "zelena-salata", "Зелена салата", "3,50", "400", ""],
["", "pikantna-pileshka-salata", "Пикантна пилешка салата", "4,20", "", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "300", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "350", ""],
["", "morkovi-s-czveklo", "Моркови с цвекло", "2,80", "350", ""],
["", "bavarska-salata", "Баварска салата", "2,80", "400", ""]

            ],

            "Топли предястия": [
                ["", "lucheni-krgcheta", "Лучени кръгчета", "1,40", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "170", ""],
["", "sirene-pane", "Сирене пане", "2,80", "170", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "280", ""],
["", "chips-po-selski", "Чипс по селски", "2,10", "400", ""],
["", "topeni-panirani-sirencza-s-kornflejks", "Топени панирани сиренца с корнфлейкс", "4,20", "400", ""],
["", "pileshki-filencza-s-kornflejks-i-mlechen-chesnov-sos", "Пилешки филенца с корнфлейкс и млечен чеснов сос", "4,20", "250", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "2,10", "300", ""],
["", "pileshki-srcza", "Пилешки сърца", "2,80", "300", ""],
["", "pileshki-vodenichki", "Пилешки воденички", "2,80", "250", ""],
["", "pileshki-kozhichki", "Пилешки кожички", "2,10", "500", ""],
["", "pileshki-drob-s-gbi-i-kashkaval", "Пилешки дроб с гъби и кашкавал", "2,80", "300", ""]

            ],

            "Основно": [
                ["", "dska-za-dvama", "Дъска за двама", "9,10", "", ""],
["", "aromatni-karencza", "Ароматни каренца", "4,20", "300", ""],
["", "svinski-dzholan-s-kopr-i-chesn-vrkhu-sach", "Свински джолан с копър и чесън върху сач", "7,00", "400", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "6,30", "300", ""],
["", "svinski-vrat-na-skara-s-gben-sos", "Свински врат на скара с гъбен сос", "5,60", "350", ""],
["", "pileshko-vreteno", "Пилешко вретено", "5,60", "350", ""],
["", "pile-pilar", "Пиле Пилар", "4,90", "350", ""],
["", "svinski-sach", "Свински сач", "9,10", "292", ""],
["", "pileshki-sach", "Пилешки сач", "8,40", "296", ""]

            ],

            "grill": [
                ["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "300", ""],
["", "domashen-sudzhuk-na-skara", "Домашен суджук на скара", "4,20", "200", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "150", ""],
["", "svinski-vrat", "Свински врат", "4,90", "300", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "3,50", "250", ""]

            ],

            "fish": [
                ["", "som", "Сом", "7,70", "300", ""],
["", "byal-amur", "Бял Амур", "4,90", "300", ""],
["", "pstrva", "Пъстърва", "5,60", "350", ""]

            ]
        }', 
        'slug' => 'restorant-eos',
        'business_name' => 'Ресторант ЕОС',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3700',
        'address' => 'бул. Панония 64',
        'address_additional' => '',
        'coords_x' => '44.00132017',
        'coords_y' => '22.87241944',
        'phone' => '+359898656219',
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
            
            "Класическа пица на пещ": [
                ["", "picza-vegetariana", "Пица Вегетариана", "4,20", "", ""],
["", "picza-verona", "Пица Верона", "5,60", "", ""],
["", "picza-jork", "Пица Йорк", "5,60", "", ""],
["", "picza-kalabreze", "Пица Калабрезе", "5,60", "", ""],
["", "picza-kalczone", "Пица Калцоне", "6,30", "", ""],
["", "picza-kapreze", "Пица Капрезе", "5,60", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "5,60", "", ""],
["", "picza-kuatro-di-karne", "Пица Куатро ди Карне", "5,60", "", ""],
["", "picza-kuatro-stadzhone", "Пица Куатро Стаджоне", "6,30", "", ""],
["", "picza-kuatro-formadzho", "Пица Куатро Формаджо", "5,60", "", ""],
["", "picza-margarita", "Пица Маргарита", "3,50", "", ""],
["", "picza-patilanczi", "Пица Патиланци", "4,90", "", ""],
["", "picza-piperone", "Пица Пипероне", "5,60", "", ""],
["", "picza-proshuto-i-rukola", "Пица Прошуто и Рукола", "7,00", "", ""],
["", "picza-rimini", "Пица Римини", "5,60", "", ""],
["", "picza-s-lukanka", "Пица с луканка", "5,60", "", ""],
["", "picza-salsiche", "Пица Салсиче", "5,60", "", ""],
["", "picza-tempo", "Пица Темпо", "6,30", "", ""],
["", "picza-toskana", "Пица Тоскана", "5,60", "", ""],
["", "picza-francziskana", "Пица Францискана", "5,60", "", ""],
["", "picza-fruti-di-mare", "Пица Фрути ди Маре", "7,00", "", ""]

            ],

            "Пърленки": [
                ["", "gola-prlenka", "Гола Пърленка", "1,40", "", ""],
["", "prlenka-kombinirana", "Пърленка комбинирана", "3,50", "", ""],
["", "prlenka-s-bekon-i-kashkaval", "Пърленка с бекон и кашкавал", "4,20", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,80", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,80", "", ""],
["", "chesnova-prlenka", "Чеснова Пърленка", "1,40", "", ""]

            ],

            "salads": [
                ["", "vareni-kartofi", "Варени картофи", "3,50", "", ""],
["", "vegan-salata-s-limecz", "Веган салата с лимец", "5,60", "", ""],
["", "vrachanska-salata", "Врачанска салата", "4,90", "", ""],
["", "gradinska-pstra-salata", "Градинска пъстра салата", "4,90", "", ""],
["", "grczka-selska-salata", "Гръцка селска салата", "4,90", "", ""],
["", "zele", "Зеле", "3,50", "", ""],
["", "zelena-salata", "Зелена салата", "4,20", "", ""],
["", "karakachanska-salata", "Каракачанска салата", "4,90", "", ""],
["", "meshana-redena-salata", "Мешана редена салата", "4,90", "", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "", ""],
["", "proletna-salata-s-limecz", "Пролетна салата с лимец", "4,90", "", ""],
["", "salata-beleni-domati", "Салата белени домати", "4,90", "", ""],
["", "salata-vitamina", "Салата Витамина", "3,50", "", ""],
["", "salata-zdrave", "Салата здраве", "4,90", "", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "", ""],
["", "salata-nakhut-s-avokado-i-kinoa", "Салата нахут с авокадо и киноа", "6,30", "", ""],
["", "salata-s-rukola", "Салата с рукола", "5,60", "", ""],
["", "salata-sicziliana", "Салата Сицилиана", "4,90", "", ""],
["", "salata-snezhanka", "Салата Снежанка", "4,20", "", ""],
["", "salata-spanak-s-kinoa", "Салата спанак с киноа", "5,60", "", ""],
["", "salata-czezar-s-pile", "Салата Цезар с пиле", "6,30", "", ""],
["", "svezha-salata-s-miks-ot-sirena", "Свежа салата с микс от сирена", "6,30", "", ""],
["", "tabule-s-kinoa", "Табуле с киноа", "4,90", "", ""],
["", "shef-salata", "Шеф салата", "6,30", "", ""],
["", "shopska-salata", "Шопска салата", "4,90", "", ""]

            ],

            "pasta": [
                ["", "lazanya-na-peshh", "Лазаня на пещ", "5,60", "", ""],
["", "piperone-s-pileshko-meso", "Пипероне с пилешко месо", "6,30", "", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "", ""],
["", "spageti-vegetariana", "Спагети Вегетариана", "4,90", "", ""],
["", "spageti-karbonara", "Спагети Карбонара", "5,60", "", ""],
["", "spageti-fruti-di-mare", "Спагети Фрути ди Маре", "6,30", "", ""],
["", "fuzili-viktoriya", "Фузили Виктория", "5,60", "", ""],
["", "fuzili-s-klczano-meso", "Фузили с кълцано месо", "4,90", "", ""],
["", "fuzili-s-riba-ton", "Фузили с риба тон", "6,30", "", ""]

            ],

            "risotto": [
                ["", "zelenchukovo-rizoto", "Зеленчуково ризото", "6,30", "", ""],
["", "rizoto-s-morski-dar-i-somga", "Ризото с морски дар и сьомга", "9,10", "", ""],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "7,00", "", ""],
["", "rizoto-ss-spanak-i-manatarki", "Ризото със спанак и манатарки", "7,00", "", ""]

            ],

            "Безместни": [
                ["", "zapecheno-koze-sirene-s-med-i-orekhi", "Запечено козе сирене с мед и орехи", "7,00", "", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,90", "", ""],
["", "kyuftencza-viagra", "Кюфтенца Виагра", "4,90", "", ""],
["", "kyuftencza-ot-kinoa", "Кюфтенца от киноа", "6,30", "", ""],
["", "kyufteta-s-bob-i-nakhut", "Кюфтета с боб и нахут", "4,90", "", ""],
["", "nakhut-ss-zelenchuczi", "Нахут със зеленчуци", "5,60", "", ""]

            ],

            "alaminuti": [
                ["", "kashkaval-na-plocha", "Кашкавал на плоча", "4,20", "", ""],
["", "kashkaval-orli", "Кашкавал Орли", "4,90", "", ""],
["", "panirani-pileshki-prchiczi-korni", "Панирани пилешки пръчици Корни", "5,60", "", ""],
["", "pileshki-khapki", "Пилешки хапки", "5,60", "", ""],
["", "sirene-orli", "Сирене Орли", "4,90", "", ""],
["", "topeni-sirencza-ss-sladko-ot-borovinki", "Топени сиренца със сладко от боровинки", "5,60", "", ""],
["", "khrupkavi-pileshki-filencza-i-sos", "Хрупкави пилешки филенца и сос", "5,60", "", ""]

            ],

            "fish": [
                ["", "kalmari-na-plocha", "Калмари на плоча", "9,80", "", ""],
["", "kalmari-przheni", "Калмари пържени", "9,80", "", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "7,00", "", ""],
["", "ribni-kscheta-s-kri-i-dzhindzhifil", "Рибни късчета с къри и джинджифил", "8,40", "", ""],
["", "ribni-filencza-s-parmezanova-panirovka-i-kinoa", "Рибни филенца с пармезанова панировка и киноа", "7,70", "", ""],
["", "skaridi-po-grczki", "Скариди по гръцки", "9,80", "", ""],
["", "file-ot-somga-s-brokoli-i-kinoa", "Филе от сьомга с броколи и киноа", "14,00", "", ""],
["", "file-ot-somga-ss-sotirani-zelenchuczi-i-kinoa", "Филе от сьомга със сотирани зеленчуци и киноа", "14,00", "", ""],
["", "khrupkavi-ribni-filencza-s-kartofi", "Хрупкави рибни филенца с картофи", "6,30", "", ""]

            ],

            "Скара на жарава": [
                ["", "kasapski-kyufteta", "Касапски кюфтета", "6,30", "", ""],
["", "kashkaval-v-bekon", "Кашкавал в бекон", "4,20", "", ""],
["", "kebapcheta", "Кебапчета", "6,30", "", ""],
["", "kyufteta", "Кюфтета", "6,30", "", ""],
["", "marinovani-pileshki-krilcza", "Мариновани пилешки крилца", "4,90", "", ""],
["", "nervozni-kyufteta", "Нервозни кюфтета", "6,30", "", ""],
["", "pileshki-filencza-s-kopr-i-chesn", "Пилешки филенца с копър и чесън", "5,60", "", ""],
["", "pileshki-shishcheta", "Пилешки шишчета", "4,90", "", ""],
["", "pileshko-przhola-ot-but", "Пилешко пържола от бут", "6,30", "", ""],
["", "svinska-przhola-ot-vrat", "Свинска пържола от врат", "7,00", "", ""],
["", "svinski-rebra", "Свински ребра", "7,70", "", ""],
["", "svinski-shishcheta", "Свински шишчета", "4,90", "", ""],
["", "shareno-mesencze", "Шарено месенце", "7,70", "", ""]

            ],

            "Специалитети от пилешко месо": [
                ["", "ekzotichni-kscheta", "Екзотични късчета", "7,70", "", ""],
["", "pile-alfredo-s-manatarki", "Пиле Алфредо с манатарки", "7,70", "", ""],
["", "pile-bearnez", "Пиле Беарнез", "7,70", "", ""],
["", "pile-po-ruski", "Пиле по руски", "8,40", "", ""],
["", "pileshki-kareta-s-manatarki", "Пилешки карета с манатарки", "7,70", "", ""],
["", "pileshki-kscheta-s-brokoli-i-kri", "Пилешки късчета с броколи и къри", "7,70", "", ""],
["", "pileshki-kscheta-s-gbi-i-maslo", "Пилешки късчета с гъби и масло", "6,30", "", ""],
["", "pileshki-kscheta-tempo", "Пилешки късчета Темпо", "7,00", "", ""],
["", "pileshko-bon-file-na-plocha-s-parmezan", "Пилешко бон филе на плоча с пармезан", "7,70", "", ""]

            ],

            "Специалитети от свинско месо": [
                ["", "vienski-shniczel", "Виенски шницел", "8,40", "", ""],
["", "medaloni-formadzho-ss-spanak-i-sino-sirene", "Медальони Формаджо със спанак и синьо сирене", "9,80", "", ""],
["", "meksikanski-kscheta", "Мексикански късчета", "9,10", "", ""],
["", "svinski-kareta-samuraj", "Свински карета Самурай", "8,40", "", ""],
["", "svinski-kscheta-tempo", "Свински късчета Темпо", "8,40", "", ""],
["", "svinsko-bon-file-s-manatarki", "Свинско бон филе с манатарки", "9,80", "", ""],
["", "shniczel-san-marko", "Шницел Сан Марко", "8,40", "", ""]

            ],

            "Специалитети от телешко месо": [
                ["", "teleshki-bifteczi-s-pepr-sos", "Телешки бифтеци с Пепър сос", "14,70", "", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "7,70", "", ""],
["", "teleshki-ezik-s-gbi", "Телешки език с гъби", "8,40", "", ""],
["", "teleshko-file-s-pepr-sos", "Телешко филе с Пепър сос", "14,70", "", ""],
["", "file-alakrema", "Филе Алакрема", "14,70", "", ""]

            ],

            "Специалитети на пещ": [
                ["", "gabrovski-kareta", "Габровски карета", "7,70", "", ""],
["", "gbi-s-kashkaval", "Гъби с кашкавал", "4,90", "", ""],
["", "kartofi-po-selski", "Картофи по селски", "3,50", "", ""],
["", "kartofi-s-bekon-i-kashkaval", "Картофи с бекон и кашкавал", "4,90", "", ""],
["", "pikantni-kartofi", "Пикантни картофи", "3,50", "", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,90", "", ""],
["", "svinski-vrat-na-peshh", "Свински врат на пещ", "9,10", "", ""],
["", "svinski-rebra-na-peshh", "Свински ребра на пещ", "7,70", "", ""]

            ],

            "Сачета": [
                ["", "brokoli-dzhenoveze", "Броколи Дженовезе", "6,30", "", ""],
["", "zelenchuczi-s-chetiri-vida-sirena", "Зеленчуци с четири вида сирена", "8,40", "", ""],
["", "mesno-asorti", "Месно асорти", "11,20", "", ""],
["", "pileshki-kareta-po-italianski", "Пилешки карета по италиански", "8,40", "", ""]

            ],

            "desserts": [
                ["", "domashna-torta", "Домашна торта", "2,80", "", ""],
["", "italianska-torta", "Италианска торта", "3,50", "", ""],
["", "ovesena-torta", "Овесена торта", "3,50", "", ""],
["", "palachinka", "Палачинка", "2,80", "", ""]

            ]
        }', 
        'slug' => 'tempo-pizza',
        'business_name' => 'Tempo Pizzeria',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Gabrovo',
        'region' => 'Gabrovo',
        'postal_code' => '5300',
        'address' => 'ул. Пенчо Славейков 1',
        'address_additional' => '',
        'coords_x' => '42.871665',
        'coords_y' => '25.3202158',
        'phone' => '+359066806920',
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
            
            "Сладки палачинки": [
                ["", "palachinka-s-konfityur-ot-gorski-plodove", "Палачинка с конфитюр от горски плодове", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-s-med", "Палачинка с мед", "1,40", "", ""],
["", "palachinka-s-konfityur-ot-yagodi", "Палачинка с конфитюр от ягоди", "1,40", "", ""]

            ],

            "Солени палачинки": [
                ["", "palachinka-ss-sirene-i-kashkaval", "Палачинка със сирене и кашкавал", "2,10", "", ""],
["", "palachinka-s-shunka-i-kashkaval", "Палачинка с шунка и кашкавал", "2,10", "", ""],
["", "palachinka-s-dyuner-meso-i-kashkaval", "Палачинка с дюнер месо и кашкавал", "2,80", "", ""]

            ],

            "Дюнери и Хамбургери": [
                ["", "khamburger-s-kashkaval", "Хамбургер с кашкавал", "2,10", "", ""],
["", "khamburger-s-shunka-i-kashkaval", "Хамбургер с шунка и кашкавал", "2,10", "", ""],
["", "khamburger-s-lukanka-i-kashkaval", "Хамбургер с луканка и кашкавал", "2,10", "", ""]

            ],

            "Панини": [
                ["", "panini-s-kashkaval", "Панини с кашкавал", "2,10", "", ""],
["", "panini-s-shunka-i-kashkaval", "Панини с шунка и кашкавал", "2,10", "", ""],
["", "panini-s-lukanka-i-kashkaval", "Панини с луканка и кашкавал", "2,80", "", ""],
["", "panini-s-bekon-i-kashkaval", "Панини с бекон и кашкавал", "2,80", "", ""],
["", "panini-s-pileshko-pusheno-meso-i-kashkaval", "Панини с пилешко пушено месо и кашкавал", "2,80", "", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,80", "", ""],
["", "neapolitana", "Неаполитана", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "3,50", "", ""],
["", "polo-formadzhi", "Поло формаджи", "3,50", "", ""],
["", "primavera", "Примавера", "3,50", "", ""],
["", "salami", "Салами", "3,50", "", ""],
["", "toskana", "Тоскана", "3,50", "", ""],
["", "kalczone", "Калцоне", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "2,80", "", ""],
["", "prlenka", "Пърленка", "3,50", "", ""]

            ],

            "others": [
                ["", "przheni-kartofi-malki", "Пържени картофи малки", "0,70", "150", ""],
["", "przheni-kartofi-golemi", "Пържени картофи големи", "1,40", "200", ""],
["", "zapekanka-s-sirene-i-kashkaval", "Запеканка с сирене и кашкавал", "3,50", "", ""],
["", "zapekanka-s-pileshko-pusheno-file-i-kashkaval", "Запеканка с пилешко пушено филе и кашкавал", "3,50", "", ""],
["", "zapekanka-s-bekon-i-kashkaval", "Запеканка с бекон и кашкавал", "3,50", "", ""],
["", "pitka-s-maslo-i-sharena-sol", "Питка с масло и шарена сол", "0,00", "", ""],
["", "pitka-s-maslo-sharena-sol-i-chesnov-sos", "Питка с масло, шарена сол и чеснов сос", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/912572.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/912573.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajryan-meggle", "Айрян Meggle", "0,70", "330", ""],
["", "mlechna-plodova-napitka-yagoda", "Млечна плодова напитка ягода", "0,70", "330", ""],
["", "mlechna-plodova-napitka-gorski-plod", "Млечна плодова напитка горски плод", "0,70", "330", ""],
["", "mlechna-plodova-napitka-ppesh", "Млечна плодова напитка пъпеш", "0,70", "330", ""],
["", "ajryan-rikas", "Айрян Рикас", "0,00", "250", ""],
["", "ajryan-rikas", "Айрян Рикас", "0,70", "500", ""],
["", "energijna-napitka-monstr", "Енергийна напитка Монстър", "2,10", "330", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "bira-kamenicza", "Бира Каменица", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'panini',
        'business_name' => 'ПАНИНИ',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8801',
        'address' => 'бул. Цар Освободител 46',
        'address_additional' => '',
        'coords_x' => '42.6787144',
        'coords_y' => '26.3234266',
        'phone' => '+359988901062',
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
                ["", "1-zele-po-kitajski---lyuta", "1. Зеле по китайски - люта", "2,10", "250", ""],
["", "2-zelenchukova-salata---topla", "2. Зеленчукова салата - топла", "3,50", "300", ""],
["", "3-salata-kitajski-kt", "3. Салата Китайски кът", "3,50", "400", ""],
["", "4-orizova-salata", "4. Оризова салата", "3,50", "300", ""],
["", "5salata-po-kitajski", "5.Салата по китайски", "3,50", "300", ""],
["", "6-shopska-salata", "6. Шопска салата", "3,50", "400", ""],
["", "7-salata-khong-kong", "7. Салата Хонг Конг", "4,20", "300", ""],
["", "8-kiselo-lyutiva-salata", "8. Кисело-лютива салата", "3,50", "300", ""],
["", "9-zelena-salata-s-riba-ton", "9. Зелена салата с риба тон", "4,20", "350", ""],
["", "10-salata-s-gbi", "10. Салата с гъби", "4,20", "300", ""],
["", "12-salata-s-meso", "12. Салата с месо", "4,20", "300", ""],
["", "13-salata-zlatna-igla-250gr", "13. Салата Златна игла (250гр)", "4,20", "", ""],
["", "15-salata-ot-vodorasli", "15. Салата от водорасли", "4,20", "300", ""],
["", "16-krastaviczi-s-chesn", "16. Краставици с чесън", "3,50", "300", ""],
["", "17-morska-salata", "17. Морска салата", "7,00", "550", ""]

            ],

            "Топли предястия": [
                ["", "18-pileshki-vodenichki-po-kitajski", "18. Пилешки воденички по китайски", "3,50", "200", ""],
["", "23-panirani-zelenchuczi", "23. Панирани зеленчуци", "3,50", "250", ""],
["", "24-przheni-kartofi", "24. Пържени картофи", "2,80", "", ""],
["", "25-proletni-rulcza", "25. Пролетни рулца", "4,20", "", ""],
["", "28-przheni-yajcza-s-luk-i-bekon", "28. Пържени яйца с лук и бекон", "3,50", "250", ""],
["", "29-chips-s-vkus-na-skaridi", "29. Чипс с вкус на скариди", "3,50", "200", ""],
["", "30-rebrcza-s-chesnov-vkus-zlaten-medal", "30. Ребърца с чеснов вкус Златен медал", "7,00", "350", ""],
["", "31-krilcza-s-chesnov-vkus-zlaten-medal", "31. Крилца с чеснов вкус Златен медал", "4,20", "", ""],
["", "32-panirani-pechurki", "32. Панирани печурки", "3,50", "200", ""],
["", "33-sirencza-pane", "33. Сиренца пане", "3,50", "200", ""],
["", "34-sladko-lyutivi-pileshki-krilcza-ss-susam", "34. Сладко-лютиви пилешки крилца със сусам", "4,20", "", ""],
["", "35-panirano-racheshko", "35. Панирано рачешко", "3,50", "250", ""]

            ],

            "Зеленчукови ястия": [
                ["", "44-przheni-domati-s-yajcza", "44. Пържени домати с яйца", "3,50", "300", ""],
["", "45-przheni-gbi-i-bambuk-v-sos-ot-stridi", "45. Пържени гъби и бамбук в сос от стриди", "4,90", "300", ""],
["", "46-tikvichki-s-chesn", "46. Тиквички с чесън", "3,50", "450", ""],
["", "47-brokoli-s-chesn", "47. Броколи с чесън", "3,50", "200", ""],
["", "48-przheni-cherni-i-beli-kitajski-gbi", "48. Пържени черни и бели китайски гъби", "4,90", "300", ""]

            ],

            "Ястия от свинско": [
                ["", "49-svinsko-ss-zelenchuczi", "49. Свинско със зеленчуци", "6,30", "600", ""],
["", "50khrupkavo-panirano-svinsko", "50.Хрупкаво панирано свинско", "6,30", "450", ""],
["", "51-svinsko-s-luk", "51. Свинско с лук", "6,30", "600", ""],
["", "52-lyutivo-chesnovi-rebra", "52. Лютиво чеснови ребра", "7,70", "450", ""],
["", "53-svinsko-s-praz-luk-i-pekinski-sos", "53. Свинско с праз лук и пекински сос", "7,00", "500", ""],
["", "54-zadusheno-svinsko-s-kartofi", "54. Задушено свинско с картофи", "6,30", "600", ""],
["", "55-svinsko-s-kimion-i-chili", "55. Свинско с кимион и чили", "7,00", "400", ""],
["", "56-svinsko-po-schuanski", "56. Свинско по съчуански", "7,00", "600", ""],
["", "57-svinsko-s-cherni-gbi-i-bambuk", "57. Свинско с черни гъби и бамбук", "7,00", "600", ""],
["", "58-khapki-ss-sladko-kisel-sos", "58. Хапки със сладко-кисел сос", "6,30", "500", ""],
["", "59-panirano-file-na-plocha-ss-soev-sos", "59. Панирано филе на плоча със соев сос", "7,00", "450", ""],
["", "60-lyuto-svinsko-s-fstczi---khua-dzhau", "60. Люто свинско с фъстъци - хуа джау", "6,30", "600", ""],
["", "61-svinsko-s-chetiri-vida-gbi", "61. Свинско с четири вида гъби", "7,00", "600", ""]

            ],

            "Ястия от пилешко": [
                ["", "63-pileshko-ss-zelenchuczi", "63. Пилешко със зеленчуци", "6,30", "600", ""],
["", "64-lyuto-pileshko-s-fstczi", "64. Люто пилешко с фъстъци", "6,30", "600", ""],
["", "65-pileshko-po-schuanski", "65. Пилешко по съчуански", "6,30", "600", ""],
["", "66-pileshko-s-kashu", "66. Пилешко с кашу", "7,70", "600", ""],
["", "67-pileshko-s-ananas-i-domaten-sos", "67. Пилешко с ананас и доматен сос", "7,00", "500", ""],
["", "68-zadusheno-pileshko-s-kartofi", "68. Задушено пилешко с картофи", "7,00", "600", ""],
["", "69-khapki-ss-sladko-kisel-sos", "69. Хапки със сладко-кисел сос", "7,00", "500", ""],
["", "70-khapki-v-soev-sos", "70. Хапки в соев сос", "6,30", "400", ""],
["", "71-lyutivi-pileshki-kscheta", "71. Лютиви пилешки късчета", "7,70", "450", ""],
["", "72-pileshko-s-cherni-gbi-i-bambuk", "72. Пилешко с черни гъби и бамбук", "7,00", "600", ""],
["", "73-panirano-pileshko-v-limonov-sos", "73. Панирано пилешко в лимонов сос", "7,00", "500", ""],
["", "74-khrupkavo-panirano-file-ss-susam", "74. Хрупкаво панирано филе със сусам", "7,00", "400", ""],
["", "75-osem-skrovishha", "75. Осем съкровища", "7,00", "600", ""]

            ],

            "Ястия от телешко": [
                ["", "76-teleshko-ss-zelenchuczi", "76. Телешко със зеленчуци", "7,70", "600", ""],
["", "77-zadusheno-teleshko-s-kartofi", "77. Задушено телешко с картофи", "8,40", "600", ""],
["", "79-teleshko-s-cherni-gbi-i-bambuk", "79. Телешко с черни гъби и бамбук", "8,40", "600", ""],
["", "81-lyuto-teleshko", "81. Люто телешко", "8,40", "600", ""],
["", "82-teleshko-po-schuanski", "82. Телешко по съчуански", "8,40", "600", ""]

            ],

            "Ястия от патешко": [
                ["", "83-pateshko-s-cherni-gbi-i-bambuk", "83. Патешко с черни гъби и бамбук", "7,70", "600", ""],
["", "84-paticza-na-plocha", "84. Патица на плоча", "7,70", "450", ""],
["", "85-khrupkavo-panirano-pateshko", "85. Хрупкаво панирано патешко", "7,70", "450", ""],
["", "86-lyutivo-pateshko", "86. Лютиво патешко", "7,70", "600", ""]

            ],

            "Ястия от риба и морски деликатеси": [
                ["", "87-panirana-riba-ss-zelenchuczi", "87. Панирана риба със зеленчуци", "7,00", "600", ""],
["", "88-panirana-riba-s-bambuk-i-cherni-gbi", "88. Панирана риба с бамбук и черни гъби", "7,00", "600", ""],
["", "89-panirana-na-plocha-ss-soev-sos", "89. Панирана на плоча със соев сос", "7,00", "450", ""],
["", "90-khrupkavo-panirano-file-ot-riba", "90. Хрупкаво панирано филе от риба", "7,00", "400", ""],
["", "91-panirana-riba-ss-sladko-kisel-sos", "91. Панирана риба със сладко-кисел сос", "7,00", "500", ""],
["", "93-panirani-kalmari", "93. Панирани калмари", "8,40", "300", ""],
["", "94-kalmari-s-cherni-gbi-i-bambuk", "94. Калмари с черни гъби и бамбук", "8,40", "400", ""],
["", "95-kalmari-po-schuanski", "95. Калмари по съчуански", "8,40", "400", ""],
["", "96-panirani-skaridi", "96. Панирани скариди", "9,80", "250", ""],
["", "97-skaridi-s-grakh-i-czarevicza", "97. Скариди с грах и царевица", "9,80", "350", ""],
["", "98-skaridi-s-kashu", "98. Скариди с кашу", "11,20", "400", ""],
["", "99-panirani-skaridi-ss-sladko0kisel-sis", "99. Панирани скариди със сладко0кисел сис", "10,50", "350", ""]

            ],

            "Ястия от ориз и спагети": [
                ["", "101-przhen-oriz-ss-zelenchuczi", "101. Пържен ориз със зеленчуци", "4,20", "700", ""],
["", "102-przhen-oriz-s-pileshko-meso-gbi-i-soev-sos", "102. Пържен ориз с пилешко месо, гъби и соев сос", "4,90", "700", ""],
["", "103-przhen-oriz-ss-skaridi", "103. Пържен ориз със скариди", "5,60", "700", ""],
["", "104-przhen-oriz-kitajski-kt", "104. Пържен ориз Китайски кът", "4,90", "700", ""],
["", "105-przhen-oriz-s-tri-vida-meso", "105. Пържен ориз с три вида месо", "4,90", "700", ""],
["", "106-meso-i-zelenchuczi-vrkhu-oriz", "106. Месо и зеленчуци върху ориз", "5,60", "700", ""],
["", "107-byal-oriz", "107. Бял ориз", "2,10", "300", ""],
["", "108-przhen-oriz-s-pileshko", "108. Пържен ориз с пилешко", "4,90", "700", ""],
["", "109-przhenm-oriz-s-lyutivo-teleshko", "109. Пърженм ориз с лютиво телешко", "5,60", "700", ""],
["", "110-przhen-oriz-ss-svinsko", "110. Пържен ориз със свинско", "4,90", "700", ""],
["", "111-przhen-oriz-s-bekon-i-racheshko", "111. Пържен ориз с бекон и рачешко", "5,60", "700", ""],
["", "112-przheni-spageti-ss-zelenchuczi", "112. Пържени спагети със зеленчуци", "4,20", "700", ""],
["", "113-przheni-spageti-s-pileshko", "113. Пържени спагети с пилешко", "4,90", "600", ""],
["", "114-przheni-spageti-ss-skaridi", "114. Пържени спагети със скариди", "5,60", "700", ""],
["", "115-przheni-spageti-s-tri-vida-meso", "115. Пържени спагети с три вида месо", "4,90", "700", ""],
["", "117-przheni-spageti-ss", "117. Пържени спагети със", "4,90", "", ""],
["", "118-przheni-spageti-s-lyutivo-teleshko", "118. Пържени спагети с лютиво телешко", "5,60", "700", ""],
["", "119-przheno-orizovo-fide-ss-zelenchuczi", "119. Пържено оризово фиде със зеленчуци", "4,90", "700", ""]

            ],

            "sauces": [
                ["", "120-lyutiv-sos", "120. Лютив сос", "0,70", "", ""],
["", "121-sladko-kisel-sos", "121. Сладко-кисел сос", "0,70", "", ""],
["", "123-sos-po-schuanski", "123. Сос по съчуански", "0,70", "", ""],
["", "129-kitajsko-khlebche", "129. Китайско хлебче", "0,70", "", ""]

            ],

            "desserts": [
                ["", "125-przhen-sladoled", "125. Пържен сладолед", "2,80", "200", ""],
["", "127-panirani-banani-s-med", "127. Панирани банани с мед", "2,10", "200", ""],
["", "128-paniran-ananas", "128. Паниран ананас", "2,10", "200", ""]

            ]
        }', 
        'slug' => 'chinese-corner',
        'business_name' => 'Chinese Corner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Gabrovo',
        'region' => 'Gabrovo',
        'postal_code' => '5300',
        'address' => 'ул. Осми март 19',
        'address_additional' => '',
        'coords_x' => '42.88492775',
        'coords_y' => '25.32555763',
        'phone' => '+359885641298',
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
                ["", "margarita", "Маргарита", "4,20", "", ""],
["", "napoli", "Наполи", "6,30", "", ""],
["", "romana", "Романа", "6,30", "", ""],
["", "pulieze", "Пулиезе", "6,30", "", ""],
["", "sicziliana", "Сицилиана", "6,30", "", ""],
["", "proshuto", "Прошуто", "6,30", "", ""],
["", "proshuto-e-fungi", "Прошуто е фунги", "6,30", "", ""],
["", "kaprichoza", "Капричоза", "7,70", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "7,00", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "6,30", "", ""],
["", "dzola", "Дзола", "6,30", "", ""],
["", "dzola-s-orekhi", "Дзола с орехи", "7,00", "", ""],
["", "krudo", "Крудо", "7,00", "", ""],
["", "tonno-i-luk", "Тонно и лук", "6,30", "", ""],
["", "dzhenoveze", "Дженовезе", "6,30", "", ""],
["", "marinara", "Маринара", "2,80", "", ""],
["", "princhipe", "Принчипе", "7,00", "", ""],
["", "primavera", "Примавера", "5,60", "", ""],
["", "redzhina", "Реджина", "6,30", "", ""],
["", "smrf", "Смърф", "7,00", "", ""],
["", "amerika", "Америка", "6,30", "", ""],
["", "salmone", "Салмоне", "6,30", "", ""],
["", "dyavolo", "Дяволо", "6,30", "", ""],
["", "rustika", "Рустика", "7,70", "", ""],
["", "salame-dolche", "Саламе Долче", "6,30", "", ""],
["", "salam-pikante", "Салам Пиканте", "6,30", "", ""],
["", "mista", "Миста", "6,30", "", ""],
["", "monte-bianko", "Монте Бианко", "5,60", "", ""],
["", "gambereti", "Гамберети", "6,30", "", ""],
["", "salsicha", "Салсича", "6,30", "", ""],
["", "al-kastelo", "Ал Кастело", "8,40", "", ""],
["", "karbonara", "Карбонара", "6,30", "", ""],
["", "vegetariana", "Вегетариана", "5,60", "", ""],
["", "sarbi---vegetarianska", "Сарби - Вегетарианска", "6,30", "", ""],
["", "bismark", "Бисмарк", "7,00", "", ""],
["", "porchini", "Порчини", "7,00", "", ""],
["", "radzhi-di-sole", "Раджи ди соле", "7,00", "", ""],
["", "proteinov-shejk", "Протеинов шейк", "7,70", "", ""],
["", "meksiko", "Мексико", "6,30", "", ""],
["", "meksiko---lyuto", "Мексико - люто", "7,00", "", ""],
["", "princhipesa", "Принчипеса", "6,30", "", ""],
["", "kapreze", "Капрезе", "6,30", "", ""],
["", "char", "Чар", "6,30", "", ""],
["", "pino", "Пино", "7,00", "", ""],
["", "bavareze", "Баварезе", "6,30", "", ""],
["", "mare-e-monti", "Маре е Монти", "7,00", "", ""],
["", "chicho", "Чичо", "7,00", "", ""],
["", "milaneze", "Миланезе", "6,30", "", ""],
["", "korte", "Корте", "7,00", "", ""],
["", "tiroleze", "Тиролезе", "7,00", "", ""],
["", "bulgarograso", "Булгарограсо", "7,00", "", ""]

            ],

            "Калцони": [
                ["", "kalczone---zatvorena", "Калцоне - затворена", "6,30", "", ""],
["", "kalczone-farchito", "Калцоне Фарчито", "6,30", "", ""],
["", "kalczone-neapolitano", "Калцоне Неаполитано", "7,00", "", ""],
["", "kalczone-kastelo", "Калцоне Кастело", "7,00", "", ""],
["", "rotolino-rustiko", "Ротолино рустико", "6,30", "", ""]

            ],

            "Фокаче - Бяла пица": [
                ["", "bianka-neve", "Бианка Неве", "4,20", "", ""],
["", "rosa", "Роса", "3,50", "", ""],
["", "mediteranea", "Медитеранеа", "5,60", "", ""],
["", "chiko-byala", "Чико бяла", "5,60", "", ""],
["", "tarikat", "Тарикат", "5,60", "", ""]

            ],

            "pasta": [
                ["", "spageti-karbonara", "Спагети Карбонара", "5,60", "", ""],
["", "spageti-boloneze", "Спагети Болонезе", "5,60", "", ""],
["", "ale-vongule---midi", "Але Вонгуле - миди", "5,60", "", ""],
["", "spageti-tonno", "Спагети Тонно", "4,90", "", ""],
["", "spageti-al-kastelo", "Спагети Ал Кастело", "5,60", "", ""],
["", "pesto---dzhenoveze", "Песто - Дженовезе", "5,60", "", ""]

            ],

            "Пенне": [
                ["", "penne-al-salmone", "Пенне ал Салмоне", "5,60", "", ""],
["", "penne-spek", "Пенне Спек", "5,60", "", ""],
["", "penne-ala-matrichana", "Пенне ала Матричана", "5,60", "", ""],
["", "penne-ala-rabiyata", "Пенне ала Рабията", "5,60", "", ""]

            ],

            "Тортелини": [
                ["", "tortelini-s-bekon-domati-luk-podpravki-i-parmidzhano", "Тортелини с бекон, домати, лук, подправки и пармиджано", "6,30", "", ""],
["", "tortelini-ss-smetana-orekhi-parmidzhano-i-podpravki", "Тортелини със сметана, орехи, пармиджано и подправки", "6,30", "", ""],
["", "tortelini-s-domati-smetana-manatarki-bekon-parmidzhano-i-podpravki", "Тортелини с домати, сметана, манатарки, бекон, пармиджано и подправки", "6,30", "", ""],
["", "taliateli-porchini", "Талиатели порчини", "6,30", "", ""],
["", "lazanya", "Лазаня", "6,30", "", ""]

            ],

            "Ястия с пилешко": [
                ["", "pileshko-s-4-vida-sirena", "Пилешко с 4 вида сирена", "6,30", "", ""],
["", "pile-kastelo", "Пиле Кастело", "5,60", "", ""],
["", "pile-milano", "Пиле Милано", "5,60", "", ""],
["", "pile-kalabriya", "Пиле Калабрия", "5,60", "", ""],
["", "pile-sos-myuselin-i-gbi", "Пиле сос Мюселин и гъби", "5,60", "", ""],
["", "pile-maltez", "Пиле Малтез", "5,60", "", ""],
["", "pile-shoron", "Пиле Шорон", "5,60", "", ""],
["", "pile-s-med-i-gorchicza", "Пиле с мед и горчица", "5,60", "", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "6,30", "", ""]

            ],

            "Ястия със свинско": [
                ["", "svinska-tabakera-v-sos", "Свинска табакера в сос", "6,30", "", ""],
["", "svinsko-roma", "Свинско Рома", "6,30", "", ""],
["", "skalopini-milaneze", "Скалопини Миланезе", "7,00", "", ""],
["", "pechen-svinski-dzholan", "Печен свински джолан", "8,40", "300", ""],
["", "svinsko-bearnez-s-manatarki", "Свинско Беарнез с манатарки", "7,70", "", ""],
["", "svinsko-rokfor", "Свинско Рокфор", "7,70", "", ""],
["", "svinski-zhulien-s-maslo-chesn-i-lyuti-chushki", "Свински жулиен с масло, чесън и люти чушки", "5,60", "", ""],
["", "svinska-vratna-przhola-na-tigan", "Свинска вратна пържола на тиган", "4,90", "", ""],
["", "svinsko-file-s-manatarka-i-garnitura", "Свинско филе с манатарка и гарнитура", "7,70", "", ""],
["", "svinska-kavrma", "Свинска кавърма", "7,00", "", ""],
["", "svinski-zhulieni-ala-romana", "Свински жулиени ала Романа", "7,00", "", ""],
["", "svinsko-v-tmen-sos-s-bejbi-kartofi-i-gbi", "Свинско в тъмен сос с бейби картофи и гъби", "7,00", "", ""]

            ],

            "Ястия от телешко": [
                ["", "teleshko-s-manatarki", "Телешко с манатарки", "12,60", "", ""],
["", "teleshki-medaloni-s-gshi-drob-manatarka-i-garnitura", "Телешки медальони с гъши дроб, манатарка и гарнитура", "16,10", "", ""],
["", "teleshko-bon-file-v-tmen-sos-s-garnitura", "Телешко бон филе в тъмен сос с гарнитура", "14,00", "", ""],
["", "pechen-teleshki-dzholan-na-peshh", "Печен телешки джолан на пещ", "10,50", "", ""]

            ],

            "salads": [
                ["", "domati", "Домати", "2,10", "300", ""],
["", "krastaviczi", "Краставици", "2,10", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "500", ""],
["", "ruska-salata", "Руска салата", "4,20", "200", ""],
["", "mlechna-salata", "Млечна салата", "4,20", "200", ""],
["", "kombinirana-salata", "Комбинирана салата", "4,20", "300", ""],
["", "zele-i-morkovi", "Зеле и Моркови", "2,80", "300", ""],
["", "akapulko", "Акапулко", "4,90", "400", ""],
["", "frenska-salata", "Френска салата", "5,60", "400", ""],
["", "venecziya", "Венеция", "5,60", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "300", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "300", ""],
["", "italianska", "Италианска", "5,60", "350", ""],
["", "piratska-salata", "Пиратска салата", "4,90", "400", ""],
["", "katk", "Катък", "5,60", "300", ""],
["", "toskana", "Тоскана", "5,60", "300", ""],
["", "vip", "ВИП", "5,60", "250", ""],
["", "zhtvarska-salata", "Жътварска салата", "4,90", "400", ""],
["", "salata-na-shefa", "Салата на шефа", "5,60", "300", ""],
["", "domati-rokfor", "Домати Рокфор", "4,90", "300", ""],
["", "bordo", "Бордо", "4,20", "300", ""],
["", "salata-tonno-s-kashkaval", "Салата Тонно с кашкавал", "6,30", "350", ""],
["", "salata", "Салата", "4,90", "400", ""],
["", "salata-tuniziya", "Салата Тунизия", "4,90", "400", ""],
["", "chechi", "Чечи", "5,60", "400", ""],
["", "morkovena", "Морковена", "4,20", "350", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/977641.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/977642.jpg?width=302"]

            ],

            "drinks": [
                ["", "studen-chaj-san-benedeto", "Студен чай Сан Бенедето", "1,40", "500", ""],
["", "energijna-napitka-red-bul", "Енергийна напитка Ред Бул", "3,50", "250", ""]

            ]
        }', 
        'slug' => 'al-castello',
        'business_name' => 'Al Castello',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ж.к. Яворов бл.4',
        'address_additional' => '',
        'coords_x' => '42.2640373',
        'coords_y' => '23.1073348',
        'phone' => '+359895808484; 070147240',
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
                ["", "italiya", "Италия", "6,30", "", ""],
["", "fokacha-s-rozmarin-i-chesn", "Фокача с розмарин и чесън", "2,80", "", ""],
["", "napoli", "Наполи", "7,00", "", ""],
["", "peperoni", "Пеперони", "6,30", "", ""],
["", "proshuto-e-fungi", "Прошуто e фунги", "8,40", "", ""],
["", "dyavola", "Дявола", "6,30", "", ""],
["", "salami", "Салами", "7,00", "", ""],
["", "proshuto-krudo", "Прошуто крудо", "7,00", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "formadzhi", "Формаджи", "6,30", "", ""],
["", "polo", "Поло", "4,90", "", ""],
["", "salsicha", "Салсича", "3,50", "", ""],
["", "pancheta", "Панчета", "5,60", "", ""],
["", "milanzane", "Миланзане", "4,20", "", ""]

            ]
        }', 
        'slug' => 'klasicheska-italianska-pica-vidin',
        'business_name' => 'Класическа Италианска Пица (Видин)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3703',
        'address' => 'ул. Уилям Гладстон 27',
        'address_additional' => '',
        'coords_x' => '43.99184226',
        'coords_y' => '22.87817291',
        'phone' => '+359885277588',
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
                ["", "ragaczi", "Рагаци", "8,40", "700", ""],
["", "czezar-s-pile", "Цезар с пиле", "4,90", "450", ""],
["", "kapreze", "Капрезе", "4,20", "450", ""],
["", "vitamina", "Витамина", "3,50", "300", ""],
["", "morisn", "Морисън", "4,90", "600", ""],
["", "grczka", "Гръцка", "4,90", "500", ""],
["", "rigoleto", "Риголето", "4,90", "400", ""],
["", "gradinarska", "Градинарска", "4,20", "400", ""],
["", "meksikanska-s-khlebna-razyadka", "Мексиканска с хлебна разядка", "4,90", "500", ""],
["", "salata-pecheno-sirene", "Салата печено сирене", "4,20", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "600", ""],
["", "shopska-salata", "Шопска салата", "3,50", "450", ""]

            ],

            "Фамилна пица": [
                ["", "ragaczi", "Рагаци", "20,30", "", ""],
["", "margarita", "Маргарита", "14,00", "", ""],
["", "fungi", "Фунги", "16,10", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "17,50", "", ""],
["", "primavera", "Примавера", "18,20", "", ""],
["", "fantaziya", "Фантазия", "19,60", "", ""],
["", "byagashho-pile", "Бягащо пиле", "17,50", "", ""],
["", "marko-polo", "Марко Поло", "17,50", "", ""],
["", "selska", "Селска", "17,50", "", ""],
["", "roma", "Рома", "17,50", "", ""],
["", "pasionara", "Пасионара", "18,90", "", ""],
["", "vegitariana", "Вегитариана", "16,10", "", ""],
["", "amerikano-pikante", "Американо Пиканте", "17,50", "", ""],
["", "kalczone-toskani", "Калцоне Тоскани", "18,20", "", ""],
["", "kalczone", "Калцоне", "18,20", "", ""],
["", "khavaj", "Хавай", "18,20", "", ""],
["", "kaprichosa", "Капричоса", "19,60", "", ""],
["", "formadzhio", "Формаджио", "16,80", "", ""],
["", "po-khajdushki", "По Хайдушки", "18,20", "", ""],
["", "roko", "Роко", "17,50", "", ""],
["", "fortuna", "Фортуна", "18,20", "", ""],
["", "salami", "Салами", "16,10", "", ""]

            ],

            "Запечени картофи": [
                ["", "zapecheni-kartofi-s-bekon", "Запечени картофи с бекон", "4,90", "600", ""],
["", "zapecheni-kartofi-s-shunka", "Запечени картофи с шунка", "4,20", "600", ""],
["", "zapecheni-kartofi-s-pile", "Запечени картофи с пиле", "4,90", "600", ""],
["", "zapecheni-kartofi-ss-sirene", "Запечени картофи със сирене", "4,20", "400", ""],
["", "zapecheni-kartofi-ss-spanak-i-sirene", "Запечени картофи със спанак и сирене", "4,20", "600", ""]

            ],

            "pasta": [
                ["", "parmezan", "Пармезан", "4,90", "600", ""],
["", "boloneze", "Болонезе", "4,90", "600", ""],
["", "vegitarianski", "Вегитариански", "4,20", "600", ""],
["", "s-maslo-i-sirene", "С масло и сирене", "3,50", "400", ""],
["", "alfredo", "Алфредо", "4,90", "600", ""]

            ],

            "barbecue": [
                ["", "svinsko-shishche", "Свинско шишче", "2,10", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "3,50", "250", ""],
["", "sochni-pileshki-grdi", "Сочни пилешки гърди", "5,60", "250", ""],
["", "svinsko-file", "Свинско филе", "6,30", "200", ""],
["", "svinska-przhola", "Свинска пържола", "6,30", "250", ""],
["", "rebrcza-na-zhar", "Ребърца на жар", "4,20", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "250", ""],
["", "meshana-skara-ragaczi", "Мешана скара Рагаци", "18,20", "", ""],
["", "kartofi-na-zhar", "Картофи на жар", "2,80", "250", ""],
["", "sirene-vv-folio", "Сирене във фолио", "3,50", "250", ""],
["", "riba-ss-zelenchuczi-vv-folio", "Риба със зеленчуци във фолио", "6,30", "300", ""],
["", "czipura", "Ципура", "13,30", "400", ""],
["", "skumriya-na-zhar", "Скумрия на жар", "4,20", "400", ""],
["", "kalmari-pane", "Калмари пане", "8,40", "250", ""],
["", "czacza", "Цаца", "2,80", "250", ""],
["", "svinska-pleskavicza", "Свинскa плескавица", "4,20", "300", ""],
["", "svinski-kareta-s-luk", "Свински карета с лук", "5,60", "300", ""],
["", "svinski-kareta-ss-sos-braten", "Свински карета със сос Братен", "6,30", "300", ""],
["", "svinski-ushi-na-zhar", "Свински уши на жар", "4,20", "300", ""],
["", "pikantni-krilcza-na-zhar", "Пикантни крилца на жар", "3,50", "300", ""],
["", "sudzhuk", "Суджук", "4,20", "250", ""],
["", "meshano-plato", "Мешано плато", "11,90", "500", ""],
["", "lavrak", "Лаврак", "12,60", "400", ""],
["", "pstrva", "Пъстърва", "10,50", "400", ""],
["", "file-ot-byala-riba-pane", "Филе от бяла риба пане", "5,60", "300", ""],
["", "svinski-shashlik", "Свински шашлик", "6,30", "", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "5,60", "", ""],
["", "pileshki-bon-filencza-vrkhu-kanape-ot-spanak", "Пилешки бон филенца върху канапе от спанак", "5,60", "300", ""],
["", "lovdzhijski-sos", "Ловджийски сос", "0,70", "80", ""],
["", "sos-za-barbekyu", "Сос за барбекю", "0,70", "80", ""]

            ],

            "Сосове за печено месо": [
                ["", "sos---chetiri-sezona-80gr", "Сос - Четири сезона (80гр)", "0,70", "", ""],
["", "sos-gbi", "Сос гъби", "0,70", "80", ""],
["", "sos-bearnez", "Сос Беарнез", "0,70", "80", ""]

            ],

            "Хлебчета": [
                ["", "pechena-prlenka-na-zhar", "Печена пърленка на жар", "0,70", "200", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "1,40", "250", ""],
["", "chesnovo-khlebche-ss-sirene", "Чесново хлебче със сирене", "1,40", "250", ""],
["", "chesnovo-khlebche-s-kashkaval", "Чесново хлебче с кашкавал", "1,40", "250", ""],
["", "chesnovo-khlebche-ss-sirene-i-kashkaval", "Чесново хлебче със сирене и кашкавал", "2,10", "250", ""],
["", "filijki-na-zhar-s-chesnova-pasta", "Филийки на жар с чеснова паста", "0,70", "", ""]

            ],

            "Топли Предястия": [
                ["", "ezik-v-maslo", "Език в Масло", "4,20", "200", ""],
["", "kartofi-sote-s-bekon", "Картофи соте с бекон", "3,50", "400", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "350", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "350", ""],
["", "kartofi-po-selski", "Картофи по селски", "2,10", "300", ""],
["", "gbi-s-maslo", "Гъби с масло", "2,80", "250", ""],
["", "sireni-khapki", "Сирени хапки", "3,50", "200", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "4,20", "200", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "2,80", "300", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "2,80", "300", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "3,50", "300", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "3,50", "300", ""],
["", "pileshki-vodenichki-po-selski", "Пилешки воденички по селски", "3,50", "300", ""],
["", "pileshki-chesnovi-khapki", "Пилешки чеснови хапки", "4,20", "250", ""],
["", "khrupkavi-svinski-karencza-s-chesnov-sos", "Хрупкави свински каренца с чеснов сос", "5,60", "300", ""],
["", "panirani-topeni-sirencza", "Панирани топени сиренца", "4,20", "250", ""],
["", "pileshki-prchiczi-s-chesnov-sos", "Пилешки пръчици с чеснов сос", "4,90", "300", ""]

            ],

            "Омлети": [
                ["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "400", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "3,50", "300", ""],
["", "omlet-s-gbi", "Омлет с гъби", "3,50", "350", ""],
["", "omlet-s-kolbas", "Омлет с колбас", "3,50", "350", ""],
["", "omlet-asorti", "Омлет Асорти", "4,20", "300", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "3,50", "300", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,80", "", ""],
["", "mish-mash", "Миш Маш", "3,50", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "4,20", "300", ""],
["", "sirene-po-tarikatski", "Сирене по тарикатски", "4,90", "300", ""]

            ],

            "Специалитен на готвача": [
                ["", "pileshki-bon-filencza-s-aromatni-svezhi-podpravki", "Пилешки бон филенца  с ароматни свежи подправки", "8,40", "500", ""],
["", "trakijski-przholi-v-gondola", "Тракийски пържоли  в гондола", "9,10", "500", ""],
["", "speczialitet-ragaczi-v-gondola", "Специалитет Рагаци в гондола", "11,90", "600", ""]

            ],

            "Основни Ястия": [
                ["", "vienski-shniczel", "Виенски шницел", "5,60", "400", ""],
["", "svinsko-po-lovdzhijski", "Свинско по Ловджийски", "8,40", "500", ""],
["", "pile-syurpriz", "Пиле Сюрприз", "6,30", "500", ""],
["", "kasapsko-meze", "Касапско Мезе", "8,40", "500", ""],
["", "pile-zhulien", "Пиле жулиен", "8,40", "400", ""],
["", "pileshki-kscheta-s-pile-i-smetana", "Пилешки късчета с пиле и сметана", "4,90", "350", ""],
["", "pile-s-brokoli", "Пиле с броколи", "4,90", "300", ""],
["", "brokoli-s-topeno-sirene", "Броколи с топено сирене", "4,20", "300", ""],
["", "pileshki-kscheta-ragaczi", "Пилешки късчета Рагаци", "4,90", "500", ""],
["", "kombinirano-plato---kashkavaleni-i-sireni-khapki", "Комбинирано Плато - Кашкавалени и Сирени хапки", "12,60", "750", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "300", ""]

            ],

            "sachs": [
                ["", "kombiniran-sach", "Комбиниран сач", "17,50", "1000", ""],
["", "khadzhi-petko", "Хаджи Петко", "17,50", "1000", ""],
["", "zapecheni-zelenchuczi-na-plocha", "Запечени зеленчуци на плоча", "5,60", "500", ""],
["", "pileshki-sach", "Пилешки сач", "10,50", "", ""],
["", "svinski-sach", "Свински сач", "13,30", "", ""]

            ],

            "sauces": [
                ["", "sos-apoli", "Сос Аполи", "0,70", "60", ""],
["", "sos-madejra", "Сос Мадейра", "0,70", "60", ""],
["", "sos-tartar", "Сос Тартар", "0,70", "60", ""],
["", "sosandaluzki", "СосАндалузки", "0,70", "60", ""],
["", "sos-majoneza", "Сос Майонеза", "0,70", "60", ""],
["", "sos-ketchup", "Сос Кетчуп", "0,70", "60", ""],
["", "sos-lyutenicza", "Сос Лютеница", "0,70", "60", ""],
["", "sos-gorchicza", "Сос Горчица", "0,70", "60", ""]

            ],

            "dry-appetizer": [
                ["", "kashkaval-natyur", "Кашкавал натюр", "2,10", "100", ""],
["", "sirene-natyur", "Сирене натюр", "1,40", "100", ""],
["", "lukanka", "Луканка", "2,10", "100", ""],
["", "sudzhuk", "Суджук", "3,50", "100", ""],
["", "pastrma", "Пастърма", "4,20", "100", ""]

            ],

            "garnish": [
                ["", "kombinirana-200gr", "Комбинирана (200гр)", "1,40", "", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "1,40", "200", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "200", ""],
["", "domati-i-krastaviczi-200gr", "Домати и краставици (200гр)", "1,40", "", ""],
["", "przheni-kartofi-200gr", "Пържени картофи (200гр)", "1,40", "", ""]

            ],

            "desserts": [
                ["", "czedeno-mlyako-s-borovinkovo-sladko", "Цедено мляко с боровинково сладко", "2,10", "200", ""]

            ]
        }', 
        'slug' => 'pizza-ragazzi-sliven',
        'business_name' => 'Pizza Ragazzi (Сливен)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8801',
        'address' => 'ул. Д. Цанков 2',
        'address_additional' => '',
        'coords_x' => '42.6807217',
        'coords_y' => '26.32040202',
        'phone' => '+35944623535',
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
                ["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "500", ""],
["", "zelena-salata", "Зелена салата", "2,80", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "350", ""],
["", "katk-domati-krastaviczi", "Катък, домати, краставици", "3,50", "350", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "450", ""],
["", "slavyanska-salata", "Славянска салата", "4,20", "400", ""],
["", "salata-leonardo", "Салата Леонардо", "4,20", "500", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "400", ""],
["", "sredizemnomorska-salata", "Средиземноморска салата", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "salata-fresh", "Салата Фреш", "3,50", "350", ""],
["", "salata-kntri", "Салата Кънтри", "2,80", "500", ""],
["", "salata-kinoa", "Салата Киноа", "4,20", "450", ""],
["", "salata-vitamina", "Салата Витамина", "3,50", "450", ""],
["", "salata-amigo", "Салата Амиго", "4,90", "700", ""],
["", "salata-pile-amigo", "Салата пиле Амиго", "4,90", "500", ""]

            ],

            "starters": [
                ["", "gbi-na-tigan", "Гъби на тиган", "2,80", "200", ""],
["", "zapecheni-kartofi-s-bekon-smetana-kashkaval-i-sirene", "Запечени картофи с бекон, сметана, кашкавал и сирене", "3,50", "380", ""],
["", "zapecheni-kartofi-s-brokoli-smetana-kashkaval-i-sino-sirene", "Запечени картофи с броколи, сметана, кашкавал и синьо сирене", "3,50", "380", ""],
["", "brokoli-ss-sos-ot-sino-sirene", "Броколи със сос от синьо сирене", "3,50", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "280", ""],
["", "przheni-tikvichki", "Пържени тиквички", "3,50", "300", ""],
["", "pileshki-khapki-s-kornfleks", "Пилешки хапки с корнфлекс", "3,50", "270", ""],
["", "khapki-sirene", "Хапки сирене", "2,80", "250", ""],
["", "khapki-kashkaval", "Хапки кашкавал", "3,50", "250", ""],
["", "khapki-topeno-sirene", "Хапки топено сирене", "3,50", "250", ""],
["", "pateshki-srcza-s-gbi-i-kashkaval", "Патешки сърца с гъби и кашкавал", "4,20", "280", ""],
["", "pateshki-srcza", "Патешки сърца", "3,50", "250", ""],
["", "shkembe-s-gbi-bekon-i-kashkaval", "Шкембе с гъби, бекон и кашкавал", "4,20", "260", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,80", "400", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,80", "400", ""],
["", "pecheni-zelenchuczi", "Печени зеленчуци", "4,20", "430", ""]

            ],

            "Ястия от пиле": [
                ["", "pileshki-zhulieni", "Пилешки жулиени", "4,90", "370", ""],
["", "pileshko-file-ss-sos-ot-chetiri-sirena", "Пилешко филе със сос от четири сирена", "4,90", "350", ""],
["", "pileshki-shniczel-s-brokoli-i-sos-ot-chetiri-sirena", "Пилешки шницел с броколи и сос от четири сирена", "4,90", "350", ""],
["", "pileshki-shniczel-s-kartofi-i-sos", "Пилешки шницел с картофи и сос", "4,90", "350", ""],
["", "pileshka-przhola-amigo", "Пилешка пържола Амиго", "4,90", "300", ""],
["", "pileshki-khapki-s-kornfleks", "Пилешки хапки с корнфлекс", "3,50", "270", ""],
["", "rizoto-s-pile", "Ризото с пиле", "3,50", "350", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "4,20", "270", ""],
["", "pileshka-przhola-na-skara", "Пилешка пържола на скара", "3,50", "270", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshki-stek", "Пилешки стек", "4,90", "270", ""],
["", "pileshki-drob", "Пилешки дроб", "3,50", "200", ""],
["", "flinstoun-pileshki", "Флинстоун пилешки", "12,60", "800", ""],
["", "barni-pileshki", "Барни пилешки", "11,20", "600", ""]

            ],

            "Ястия от свинско": [
                ["", "svinski-medalon-s-bekon-kashkaval-i-topeno-sirene", "Свински медальон с бекон кашкавал и топено сирене", "4,20", "280", ""],
["", "svinski-khapki-s-luk", "Свински хапки с лук", "3,50", "280", ""],
["", "svinski-shniczel-s-brokoli-i-sos-ot-chetiri-sirena", "Свински шницел с броколи и сос от четири сирена", "5,60", "350", ""],
["", "svinski-shniczel-s-kartofi-i-sos", "Свински шницел с картофи и сос", "5,60", "350", ""],
["", "ushi-na-sach", "Уши на сач", "3,50", "250", ""],
["", "odrinski-drop", "Одрински дроп", "3,50", "270", ""],
["", "obezkosteni-svinski-grdi", "Обезкостени свински гърди", "4,90", "500", ""],
["", "svinski-medalon-na-skara", "Свински медальон на скара", "4,20", "250", ""],
["", "svinski-karencza-na-skara", "Свински каренца на скара", "2,10", "120", ""],
["", "svinska-przhola", "Свинска пържола", "4,20", "280", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "svinska-veshavicza", "Свинска вешавица", "4,90", "250", ""],
["", "svinski-rebra", "Свински ребра", "5,60", "400", ""],
["", "khajdushka-svinska-przhola-s-oriz-i-pechen-luk", "Хайдушка свинска пържола с ориз и печен лук", "4,90", "450", ""],
["", "babekovi-kyuftencza", "Бабекови кюфтенца", "3,50", "350", ""],
["", "aromaten-petrukhanski-sudzhuk-s-ovkuseni-kartofi", "Ароматен петрухански суджук с овкусени картофи", "4,20", "420", ""],
["", "sochen-domashen-sudzhuk", "Сочен домашен суджук", "4,20", "420", ""],
["", "sochna-lukankova-nadenicza-garnirana-s-domati-i-przheni-kartofi", "Сочна луканкова наденица гарнирана с домати и пържени картофи", "4,90", "450", ""],
["", "czvrchashhi-aromatni-nadenichki-3br-garnirani-s-domati-luk-i-lyuti-chushki", "Цвърчащи ароматни наденички 3бр, гарнирани с домати, лук и люти чушки", "4,20", "380", ""],
["", "aromatni-nadenichki-s-vkus-na-gbi-3br-garnirani-s-przheni-kartofki-i-majoneza", "Ароматни наденички с вкус на гъби 3бр, гарнирани с пържени картофки и майонеза", "4,20", "380", ""],
["", "slavyanska-nadenicza-izpechena-na-drveni-vglishha-i-garnirana-s-vkusni-przheni-kartofki-i-ketchup", "Славянска наденица изпечена на дървени въглища и гарнирана с вкусни пържени картофки и кетчуп", "4,20", "450", ""],
["", "klczani-sochni-nadenichki-3br-garnirani-s-marula-i-przheni-kartofki", "Кълцани сочни наденички 3бр, гарнирани с марула и пържени картофки", "4,20", "380", ""],
["", "selska-tradiczionna-blgarska-nadenicza-izpechena-na-drveni-vglishha-i-garnirana-ss-svezhi-domati-luk-i-magdanoz", "Селска традиционна българска наденица изпечена на дървени въглища и гарнирана със свежи домати, лук и магданоз", "4,20", "450", ""],
["", "sochni-domashni-kyuftencza", "Сочни домашни кюфтенца", "0,70", "", ""],
["", "krekhki-shishcheta-ot-shareno-svinsko-meso-garnirani-s-przheni-kartofki-i-ketchup", "Крехки шишчета от шарено свинско месо гарнирани с пържени картофки и кетчуп", "4,20", "350", ""]

            ],

            "Рибни ястия": [
                ["", "sharan-przhen", "Шаран пържен", "4,90", "300", ""],
["", "som-przhen", "Сом пържен", "6,30", "300", ""],
["", "rulcza-ot-raczi", "Рулца от раци", "2,80", "300", ""],
["", "kalmari-pane", "Калмари пане", "4,20", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "4,90", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "8,40", "300", ""],
["", "somga-na-skara", "Сьомга на скара", "9,80", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "8,40", "300", ""],
["", "skumriya-na-skara", "Скумрия на скара", "3,50", "300", ""]

            ],

            "Ястия на сач": [
                ["", "pateshki-srcza-na-sach", "Патешки сърца на сач", "3,50", "250", ""],
["", "pileshki-drob-s-gbi-i-kashkaval-na-sach", "Пилешки дроб с гъби и кашкавал на сач", "2,80", "280", ""],
["", "pateshki-srcza-s-gbi-i-kashkaval-na-sach", "Патешки сърца с гъби и кашкавал на сач", "4,20", "280", ""],
["", "svinski-grdi-po-selski", "Свински гърди по селски", "3,50", "280", ""],
["", "flinstoun-svinski", "Флинстоун свински", "13,30", "800", ""],
["", "barni-svinski", "Барни свински", "11,20", "600", ""]

            ],

            "sauces": [
                ["", "mlechen-sos", "Млечен сос", "0,70", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "ketchup", "Кетчуп", "0,70", "50", ""],
["", "majoneza", "Майонеза", "0,70", "50", ""],
["", "pikanten-sos", "Пикантен сос", "0,70", "50", ""]

            ],

            "Пърленки": [
                ["", "pitka-s-kashkaval", "Питка с кашкавал", "0,70", "", ""],
["", "pitka-ss-sirene", "Питка със сирене", "0,70", "", ""],
["", "chesnova-pitka", "Чеснова питка", "0,70", "", ""],
["", "pitka-s-maslo", "Питка с масло", "0,70", "", ""],
["", "kombinirana-pitka", "Комбинирана питка", "1,40", "", ""]

            ],

            "desserts": [
                ["", "palachinki", "Палачинки", "1,40", "200", ""]

            ]
        }', 
        'slug' => 'bistro-amigo',
        'business_name' => 'Бистро Amigo',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dimitrovgrad',
        'region' => 'Dimitrovgrad',
        'postal_code' => '6400',
        'address' => 'ул. Сава Доброплодни 3',
        'address_additional' => '',
        'coords_x' => '42.0545684',
        'coords_y' => '25.57937173',
        'phone' => '+359895723776',
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
                ["", "turshiya", "Туршия", "2,10", "300", ""],
["", "selska-salata", "Селска салата", "3,50", "550", ""],
["", "bobena-salata", "Бобена салата", "2,80", "470", ""],
["", "melnicharska-salata", "Мелничарска салата", "2,80", "400", ""],
["", "domati", "Домати", "2,10", "300", ""],
["", "domati-ss-sirene", "Домати със сирене", "2,10", "350", ""],
["", "krastaviczi", "Краставици", "2,10", "300", ""],
["", "krastaviczi-ss-sirene", "Краставици със сирене", "2,10", "350", ""],
["", "domat-shmerkeze", "Домат Шмеркезе", "2,80", "330", ""],
["", "meshana-salata", "Мешана салата", "2,10", "350", ""],
["", "meshana-salata-ss-sirene", "Мешана салата със сирене", "2,80", "400", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "550", ""],
["", "pstra-salata", "Пъстра салата", "2,80", "550", ""],
["", "ruska-salata", "Руска салата", "2,10", "300", ""],
["", "snezhanka", "Снежанка", "2,10", "250", ""],
["", "yajchena-salata", "Яйчена салата", "2,80", "350", ""],
["", "manastirska-salata", "Манастирска салата", "4,20", "450", ""],
["", "sirene-po-kasapski", "Сирене по касапски", "2,10", "180", ""],
["", "bolyarska-salata", "Болярска салата", "4,20", "550", ""],
["", "vlashka-salata", "Влашка салата", "2,80", "350", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "500", ""],
["", "bismark", "Бисмарк", "2,80", "400", ""],
["", "urnebez", "Урнебез", "2,80", "500", ""],
["", "salata-na-gotvacha", "Салата на готвача", "4,90", "600", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "150", ""],
["", "zele", "Зеле", "2,10", "300", ""],
["", "tri-rakii", "Три ракии", "4,20", "500", ""],
["", "rodopska-salata", "Родопска салата", "3,50", "500", ""],
["", "czarevicza-s-majoneza", "Царевица с майонеза", "2,80", "350", ""],
["", "pecheni-piperki-s-chesn", "Печени пиперки с чесън", "2,10", "300", ""],
["", "katk", "Катък", "2,80", "300", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "300", ""],
["", "kapreze", "Капрезе", "4,20", "500", ""],
["", "tikvichki-s-chesn", "Тиквички с чесън", "2,80", "300", ""],
["", "razyadka", "Разядка", "2,10", "250", ""],
["", "domati-s-pecheno-sirene", "Домати с печено сирене", "2,80", "400", ""],
["", "kiseli-krastavichki", "Кисели краставички", "1,40", "250", ""],
["", "kartofena-salata", "Картофена салата", "2,10", "300", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "400", ""],
["", "ribena-chorba", "Рибена чорба", "1,40", "400", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "400", ""],
["", "tarator", "Таратор", "1,40", "400", ""],
["", "zhtvarsko-kiselo", "Жътварско кисело", "1,40", "400", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-shunka", "Сандвич с шунка", "1,40", "", ""],
["", "sandvich-s-file", "Сандвич с филе", "1,40", "", ""],
["", "sandvich-s-lukanka", "Сандвич с луканка", "1,40", "", ""],
["", "sandvich-s-shpek", "Сандвич с шпек", "1,40", "", ""],
["", "detski-sandvich", "Детски сандвич", "0,70", "", ""]

            ],

            "Студени мезета": [
                ["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""],
["", "kajzer", "Кайзер", "2,80", "50", ""],
["", "shunka", "Шунка", "1,40", "100", ""],
["", "pusheno-file", "Пушено филе", "2,10", "100", ""],
["", "shpek", "Шпек", "2,10", "100", ""],
["", "sirene-natyur", "Сирене натюр", "1,40", "150", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "2,10", "150", ""]

            ],

            "Предястия и Гарнитури": [
                ["", "pikantni-kartofi", "Пикантни картофи", "1,40", "300", ""],
["", "topla-garnitura", "Топла гарнитура", "1,40", "", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "300", ""],
["", "lyutenicza-s-luk", "Лютеница с лук", "1,40", "150", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "2,10", "300", ""],
["", "kartofi-bez-sirene", "Картофи без сирене", "1,40", "250", ""],
["", "kartofi-ss-sirene", "Картофи със сирене", "1,40", "300", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "300", ""],
["", "pryasna-garnitura", "Прясна гарнитура", "2,10", "200", ""],
["", "garnitura-ot-domati", "Гарнитура от домати", "1,40", "150", ""],
["", "garnitura-ot-krastaviczi", "Гарнитура от краставици", "1,40", "150", ""],
["", "garnitura-ot-zele", "Гарнитура от зеле", "1,40", "150", ""],
["", "vareno-yajcze", "Варено яйце", "0,70", "", ""],
["", "lyuto-chushle", "Люто чушле", "0,00", "", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "500", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "500", ""],
["", "babini-kartofi", "Бабини картофи", "2,10", "500", ""]

            ],

            "Топли предястия от яйца": [
                ["", "yajcza-na-ochi", "Яйца на очи", "0,70", "", ""],
["", "omlet-natyur", "Омлет натюр", "2,10", "", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "", ""],
["", "omlet-asorti", "Омлет Асорти", "3,50", "200", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "400", ""],
["", "mish-mash", "Миш Маш", "2,80", "400", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "150", ""],
["", "solena-palachinka", "Солена палачинка", "1,40", "300", ""],
["", "palachinka-s-bekon", "Палачинка с бекон", "2,10", "300", ""]

            ],

            "Топли предястия от млечни продукти": [
                ["", "kashkaval-pane", "Кашкавал пане", "2,80", "200", ""],
["", "kashkaval-orli", "Кашкавал Орли", "4,20", "250", ""],
["", "kashkavalcheta-v-bekon", "Кашкавалчета в бекон", "4,20", "300", ""],
["", "sirene-pane", "Сирене пане", "2,10", "250", ""],
["", "sirene-orli", "Сирене Орли", "2,80", "250", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,80", "300", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "250", ""],
["", "sirene-po-trakijski", "Сирене по тракийски", "2,80", "330", ""],
["", "khrupkavi-topeni-sirencza", "Хрупкави топени сиренца", "4,20", "", ""],
["", "chushka-byurek", "Чушка бюрек", "2,80", "", ""]

            ],

            "Топли предястия от зеленчуци": [
                ["", "khrupkavi-tikvichki", "Хрупкави тиквички", "3,50", "300", ""],
["", "presni-gbi-v-maslo", "Пресни гъби в масло", "2,80", "250", ""],
["", "presni-gbi-na-skara", "Пресни гъби на скара", "2,10", "250", ""],
["", "plneni-presni-gbi", "Пълнени пресни гъби", "3,50", "300", ""],
["", "rodopski-czrvul", "Родопски цървул", "2,80", "400", ""]

            ],

            "Топли предястия от пилешко месо": [
                ["", "pileshki-drob-przhen", "Пилешки дроб пържен", "2,10", "400", ""],
["", "pileshki-drob-na-skara", "Пилешки дроб на скара", "2,10", "400", ""],
["", "pileshki-drob-s-gbi", "Пилешки дроб с гъби", "2,80", "450", ""],
["", "pileshki-drob-s-gbi-i-kashkaval", "Пилешки дроб с гъби и кашкавал", "2,80", "500", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "2,80", "600", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "2,80", "400", ""],
["", "pileshki-vodenichki-v-maslo", "Пилешки воденички в масло", "2,80", "300", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "500", ""],
["", "pileshki-krilcza-pane", "Пилешки крилца пане", "4,20", "550", ""],
["", "pileshki-srchicza-przheni", "Пилешки сърчица пържени", "2,80", "350", ""],
["", "pileshki-srchicza-na-skara", "Пилешки сърчица на скара", "2,80", "350", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "300", ""],
["", "pileshki-khapki-s-gbi-i-kashkaval", "Пилешки хапки с гъби и кашкавал", "3,50", "350", ""],
["", "pileshki-kozhichki-przheni", "Пилешки кожички пържени", "2,10", "500", ""],
["", "pileshki-kozhichki-na-skara", "Пилешки кожички на скара", "2,10", "500", ""],
["", "pileshki-trtki", "Пилешки трътки", "2,10", "300", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,20", "250", ""],
["", "khrupkavi-pileshki-filencza", "Хрупкави пилешки филенца", "4,20", "250", ""]

            ],

            "Топли предястия от свинско месо": [
                ["", "svinski-drob-przhen", "Свински дроб пържен", "2,80", "300", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "2,80", "300", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "3,50", "400", ""],
["", "bbreczi-zadusheni", "Бъбреци задушени", "3,50", "350", ""],
["", "svinski-kracheta---pacha", "Свински крачета - пача", "3,50", "250", ""]

            ],

            "Аламинути за броени минути": [
                ["", "pileshka-przhola-file-pane", "Пилешка пържола филе пане", "4,90", "350", ""],
["", "pileshko-file-s-gben-sos", "Пилешко филе с гъбен сос", "4,90", "400", ""],
["", "pileshko-vreteno-s-gbi-i-kashkaval", "Пилешко вретено с гъби и кашкавал", "4,90", "400", ""],
["", "pileshka-przhola-monte-karlo", "Пилешка пържола Монте Карло", "4,90", "450", ""],
["", "pile-po-trakijski", "Пиле по тракийски", "5,60", "600", ""],
["", "kachamak-ss-sirene-i-bekon", "Качамак със сирене и бекон", "2,10", "330", ""]

            ],

            "Ордьоври": [
                ["", "kolbasarski-ordovr", "Колбасарски ордьовър", "4,90", "250", ""],
["", "mlechen-ordovr", "Млечен ордьовър", "2,80", "250", ""],
["", "kombiniran-ordovr", "Комбиниран ордьовър", "3,50", "330", ""],
["", "golyamo-kolbasarsko-plato", "Голямо колбасарско плато", "13,30", "600", ""]

            ],

            "Запеканки": [
                ["", "zapekanki-s-kashkaval", "Запеканки с кашкавал", "2,80", "500", ""],
["", "zapekanka-ss-sirene", "Запеканка със сирене", "2,80", "450", ""],
["", "zapekanka-ss-zelenchuczi", "Запеканка със зеленчуци", "2,80", "450", ""],
["", "zapekanka-s-topeno-sirene", "Запеканка с топено сирене", "3,50", "450", ""]

            ],

            "Национална кухня": [
                ["", "bob-s-lovdzhijska-nadenicza-v-grne", "Боб с ловджийска наденица в гърне", "3,50", "450", ""],
["", "kavrma", "Кавърма", "4,20", "400", ""],
["", "kavrma-radomir", "Кавърма Радомир", "4,20", "450", ""],
["", "kavrma-vidin", "Кавърма Видин", "4,20", "450", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,20", "450", ""],
["", "kavrma-reviera", "Кавърма Ревиера", "4,90", "500", ""],
["", "drusan-kebap", "Друсан кебап", "3,50", "300", ""],
["", "pileshko-gyuveche", "Пилешко гювече", "4,90", "450", ""],
["", "svinsko-gyuveche", "Свинско гювече", "4,90", "450", ""]

            ],

            "specialties": [
                ["", "speczialitet-riviera", "Специалитет Ривиера", "8,40", "600", ""],
["", "speczialitet-na-gotvacha", "Специалитет на готвача", "11,20", "950", ""],
["", "svinski-shashlik", "Свински шашлик", "8,40", "600", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "7,00", "600", ""],
["", "kartofen-shashlik", "Картофен шашлик", "4,20", "650", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,20", "650", ""],
["", "zadushen-dzholan", "Задушен джолан", "7,70", "", ""],
["", "speczialitet-antonio", "Специалитет Антонио", "7,00", "650", ""]

            ],

            "Свинско месо": [
                ["", "svinska-przhola-s-gben-sos", "Свинска пържола с гъбен сос", "4,90", "450", ""],
["", "meksikanski-rebrcza", "Мексикански ребърца", "4,90", "400", ""],
["", "file-na-skara", "Филе на скара", "4,90", "300", ""],
["", "file-s-gbi", "Филе с гъби", "4,90", "350", ""],
["", "file-po-lovdzhijski", "Филе по ловджийски", "4,90", "420", ""],
["", "file-zingara", "Филе Зингара", "5,60", "470", ""],
["", "file-vreteno-s-gbi", "Филе вретено с гъби", "5,60", "470", ""],
["", "przhola-po-lovdzhijski", "Пържола по ловджийски", "4,90", "420", ""],
["", "przhola-zingara", "Пържола Зингара", "4,90", "470", ""],
["", "medalon-s-gben-sos", "Медальон с гъбен сос", "4,90", "400", ""],
["", "kareta-natyur", "Карета натюр", "4,20", "250", ""],
["", "vienski-shniczel", "Виенски шницел", "4,20", "500", ""],
["", "biftek-s-yajcze", "Бифтек с яйце", "4,90", "400", ""]

            ],

            "fish": [
                ["", "som-przhen", "Сом пържен", "6,30", "250", ""],
["", "som-pane", "Сом пане", "7,00", "300", ""],
["", "som-na-skara", "Сом на скара", "6,30", "250", ""],
["", "yak-balk-przhen", "Як Балък пържен", "6,30", "250", ""],
["", "bel-amur-przhen", "Бел Амур пържен", "4,90", "250", ""],
["", "bel-amur-na-skara", "Бел Амур на скара", "4,90", "250", ""],
["", "skumriya-na-skara", "Скумрия на скара", "3,50", "", ""],
["", "czacza", "Цаца", "1,40", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "5,60", "", ""],
["", "pstrva-v-pergament", "Пъстърва в пергамент", "6,30", "350", ""]

            ],

            "Балканска скара": [
                ["", "kyufte", "Кюфте", "0,70", "90", ""],
["", "kebapche", "Кебапче", "0,70", "90", ""],
["", "svinska-przhola-ot-vrat", "Свинска пържола от врат", "4,90", "300", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "karnache", "Карначе", "1,40", "150", ""],
["", "svinski-bekon-na-skara", "Свински бекон на скара", "5,60", "400", ""],
["", "svinski-bekon-na-tigan", "Свински бекон на тиган", "5,60", "400", ""],
["", "pileshka-przhola-ot-file", "Пилешка пържола от филе", "4,20", "300", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "300", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "150", ""],
["", "svinska-przhola-vrat-na-zhar", "Свинска пържола врат на жар", "4,90", "300", ""],
["", "svinsko-bon-file", "Свинско бон филе", "5,60", "300", ""],
["", "byala-veshalicza", "Бяла вешалица", "5,60", "300", ""],
["", "pushena-byala-veshalicza", "Пушена бяла вешалица", "6,30", "400", ""],
["", "svinski-rebra", "Свински ребра", "6,30", "500", ""],
["", "svinski-cherva", "Свински черва", "4,90", "300", ""],
["", "lukankova-nadenicza-na-skara", "Луканкова наденица на скара", "4,20", "300", ""],
["", "selski-sudzhuk-na-skara", "Селски суджук на скара", "4,90", "350", ""],
["", "pleskavicza", "Плескавица", "2,80", "230", ""]

            ],

            "sachs": [
                ["", "sach-ot-svinsko-meso", "Сач от свинско месо", "10,50", "600", ""],
["", "sach-ot-pileshko-meso", "Сач от пилешко месо", "10,50", "600", ""],
["", "sach-ot-zelenchuczi", "Сач от зеленчуци", "7,70", "400", ""],
["", "vchli-sach", "Въчли сач", "12,60", "750", ""]

            ],

            "Домашни пици": [
                ["", "chetiri-sirena", "Четири сирена", "2,80", "350", ""],
["", "kalczone", "Калцоне", "2,80", "350", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta", "Бисквитена торта", "2,10", "200", ""],
["", "palachinka-s-konfityur", "Палачинка с конфитюр", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-kiki", "Палачинка Кики", "1,40", "", ""],
["", "palachinka-denis", "Палачинка Денис", "1,40", "", ""],
["", "palachinka-kironti", "Палачинка Киронти", "1,40", "", ""],
["", "palachinka-rozaliya", "Палачинка Розалия", "1,40", "", ""],
["", "palachinka-mimoza", "Палачинка Мимоза", "1,40", "150", ""],
["", "plodova-salata", "Плодова салата", "1,40", "200", ""],
["", "erotichen-banan", "Еротичен банан", "2,10", "200", ""],
["", "czedeno-mlyako-s-med-i-orekhi", "Цедено мляко с мед и орехи", "1,40", "200", ""],
["", "czedeno-mlyako-s-konfityur", "Цедено мляко с конфитюр", "1,40", "200", ""]

            ],

            "sauces": [
                ["", "soev-sos", "Соев сос", "0,70", "100", ""],
["", "sos-majoneza", "Сос майонеза", "0,70", "100", ""],
["", "sos-ketchup", "Сос Кетчуп", "0,70", "100", ""],
["", "zekhtin", "Зехтин", "0,70", "100", ""],
["", "mlechno-chesnov-sos", "Млечно чеснов сос", "0,70", "100", ""],
["", "sos-grejvi", "Сос Грейви", "0,70", "100", ""],
["", "chili-sos", "Чили сос", "0,70", "100", ""]

            ],

            "bread": [
                ["", "prlenka", "Пърленка", "0,70", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "0,70", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "1,40", "", ""],
["", "srbska-filijka", "Сръбска филийка", "0,00", "", ""],
["", "khlyab---toster", "Хляб - тостер", "0,00", "", ""]

            ]
        }', 
        'slug' => 'restorant-riviera',
        'business_name' => 'Ресторант Ривиера',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3703',
        'address' => 'ул. Баба Вида 17',
        'address_additional' => '',
        'coords_x' => '43.98864025',
        'coords_y' => '22.88318027',
        'phone' => '+359878817640',
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
                ["", "zele-s-morkovi", "Зеле с моркови", "0,70", "150", ""],
["", "zelena-salata", "Зелена салата", "0,70", "150", ""],
["", "kartofena-salata", "Картофена салата", "0,70", "200", ""],
["", "salata-vitaminoza", "Салата Витаминоза", "0,70", "150", ""],
["", "selska-salata", "Селска салата", "1,40", "200", ""]

            ],

            "soups": [
                ["", "agneshka-supa", "Агнешка супа", "0,70", "300", ""],
["", "kartofena-supa", "Картофена супа", "0,70", "300", ""],
["", "pileshka-supa", "Пилешка супа", "0,70", "300", ""],
["", "supa-svinsko", "Супа свинско", "1,40", "300", ""],
["", "supa-spanak", "Супа спанак", "0,70", "300", ""],
["", "supa-topcheta", "Супа топчета", "0,70", "300", ""],
["", "tarator", "Таратор", "0,70", "300", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "300", ""]

            ],

            "starters": [
                ["", "vegetarianski-shniczel-pane", "Вегетариански шницел пане", "0,70", "", ""],
["", "zapekanka", "Запеканка", "2,10", "300", ""],
["", "zelenchukov-borsh", "Зеленчуков борш", "0,70", "300", ""],
["", "kartofeni-kyufteta", "Картофени кюфтета", "0,70", "", ""],
["", "kartofeni-kyufteta-ss-zelenchuczi", "Картофени кюфтета със зеленчуци", "0,70", "", ""],
["", "kartofeni-kyufteta-ss-spanak", "Картофени кюфтета със спанак", "0,70", "", ""],
["", "kashkaval-pane", "Кашкавал пане", "0,70", "", ""],
["", "makaroni-na-furna", "Макарони на фурна", "0,70", "160", ""],
["", "ogreten", "Огретен", "1,40", "300", ""],
["", "postno-zele", "Постно зеле", "0,70", "300", ""],
["", "postni-plneni-chushki", "Постни пълнени чушки", "1,40", "300", ""],
["", "plneni-chushki-s-kajma", "Пълнени чушки с кайма", "2,10", "300", ""],
["", "shniczel-ot-kajma", "Шницел от кайма", "1,40", "", ""],
["", "yajcze-po-panagyurski", "Яйце по панагюрски", "0,70", "150", ""]

            ],

            "Основни ястия": [
                ["", "agneshka-drob-srma", "Агнешка дроб сърма", "2,10", "300", ""],
["", "bob-yakhniya", "Боб яхния", "1,40", "300", ""],
["", "grakh-yakhniya", "Грах яхния", "1,40", "300", ""],
["", "gbi-s-oriz", "Гъби с ориз", "1,40", "300", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "kyufteta-po-czarigradski", "Кюфтета по цариградски", "1,40", "300", ""],
["", "kyufteta-po-chirpanski", "Кюфтета по Чирпански", "2,10", "300", ""],
["", "kyufteta-frikase", "Кюфтета фрикасе", "2,10", "300", ""],
["", "lazanya-s-kajma", "Лазаня с кайма", "2,10", "300", ""],
["", "lazanya-ss-spanak", "Лазаня със спанак", "2,10", "300", ""],
["", "leshha-yakhniya", "Леща яхния", "1,40", "300", ""],
["", "mish-mash", "Миш маш", "1,40", "300", ""],
["", "musaka", "Мусака", "2,10", "300", ""],
["", "nadenicza-ss-zele", "Наденица със зеле", "2,10", "300", ""],
["", "przheno-kyufte", "Пържено кюфте", "0,70", "", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,10", "300", ""],
["", "rulo-stefani", "Руло Стефани", "2,10", "300", ""],
["", "skumriya-pechena", "Скумрия печена", "0,70", "", ""],
["", "slavyanski-gyuvech", "Славянски гювеч", "1,40", "300", ""],
["", "spanak-s-oriz", "Спанак с ориз", "1,40", "300", ""],
["", "parche-picza", "Парче пица", "0,70", "", ""]

            ],

            "Ястия със свинско": [
                ["", "svinska-kavrma", "Свинска кавърма", "2,10", "350", ""],
["", "svinski-vinen-kebap", "Свински винен кебап", "2,10", "300", ""],
["", "svinsko-po-selski", "Свинско по селски", "2,10", "300", ""],
["", "svinsko-s-grakh", "Свинско с грах", "2,10", "300", ""],
["", "svinsko-s-kartofi", "Свинско с картофи", "2,10", "300", ""],
["", "svinsko-s-oriz", "Свинско с ориз", "2,10", "300", ""],
["", "svinsko-slavyanski-gyuvech", "Свинско славянски гювеч", "2,10", "300", ""],
["", "svinsko-ss-zele", "Свинско със зеле", "2,10", "300", ""]

            ],

            "Ястия с пилешко": [
                ["", "pile-po-gradinarski", "Пиле по градинарски", "2,10", "300", ""],
["", "pile-s-grakh", "Пиле с грах", "2,10", "300", ""],
["", "pile-s-kartofi", "Пиле с картофи", "2,10", "300", ""],
["", "pileshko-panirano-file", "Пилешко панирано филе", "1,40", "250", ""],
["", "pile-s-oriz", "Пиле с ориз", "2,10", "300", ""],
["", "pile-s-oriz-gbi-i-domati", "Пиле с ориз, гъби и домати", "2,10", "300", ""],
["", "pile-s-chili", "Пиле с чили", "2,10", "300", ""],
["", "pile-ss-zele", "Пиле със зеле", "2,10", "300", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "2,10", "350", ""],
["", "pileshka-przhola", "Пилешка пържола", "2,10", "", ""],
["", "pileshko-file-pane", "Пилешко филе пане", "1,40", "", ""],
["", "pileshko-file-ss-smetana-i-zelenchuczi", "Пилешко филе със сметана и зеленчуци", "2,80", "350", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "", ""]

            ],

            "Тестени изделия": [
                ["", "mekicza", "Мекица", "0,00", "", ""],
["", "mlechna-banicza", "Млечна баница", "0,70", "160", ""],
["", "prlenka", "Пърленка", "0,00", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "baklava", "Баклава", "0,70", "160", ""],
["", "biskvitena-torta", "Бисквитена торта", "0,70", "160", ""],
["", "grische", "Грисче", "0,70", "120", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "250", ""],
["", "krem-karamel", "Крем карамел", "0,70", "120", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "120", ""],
["", "salata-domati", "Салата Домати", "1,40", "200", ""]

            ]
        }', 
        'slug' => 'bulkitchen',
        'business_name' => 'Bulkitchen',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Gabrovo',
        'region' => 'Gabrovo',
        'postal_code' => '5300',
        'address' => 'ул. „Константин Иречек“ 3',
        'address_additional' => '',
        'coords_x' => '42.87149714',
        'coords_y' => '25.31842468',
        'phone' => '+359878270222',
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
                ["", "czezar-s-khrupkavo-pile", "Цезар с хрупкаво пиле", "5,60", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "400", ""],
["", "slavyanska-salata", "Славянска салата", "4,90", "400", ""],
["", "salata-blgarche", "Салата Българче", "4,90", "400", ""],
["", "gradinarska-salata-za-dvama", "Градинарска салата за двама", "4,90", "400", ""],
["", "salata-vitamina", "Салата Витамина", "4,90", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "svezha-salata", "Свежа салата", "4,20", "350", ""],
["", "salata-s-riba-ton", "Салата с риба тон", "5,60", "400", ""],
["", "tabietlijska-salata", "Табиетлийска салата", "4,90", "400", ""],
["", "roka-s-moczarela", "Рока с моцарела", "5,60", "400", ""],
["", "frenska-salata", "Френска салата", "5,60", "400", ""]

            ],

            "soups": [
                ["", "vidinska-ribna-salamura", "Видинска рибна саламура", "2,10", "350", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "350", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "350", ""],
["", "tarator", "Таратор", "1,40", "350", ""]

            ],

            "appetizer": [
                ["", "sirene-po-kasapski", "Сирене по касапски", "3,50", "100", ""],
["", "brusketi", "Брускети", "3,50", "100", ""],
["", "lyutivka", "Лютивка", "2,80", "100", ""],
["", "razyadka-s-riba-ton", "Разядка с риба тон", "3,50", "100", ""],
["", "razyadka-s-bejgl", "Разядка с бейгъл", "3,50", "100", ""]

            ],

            "Закуски": [
                ["", "detsko-menyu", "Детско меню", "4,90", "", ""],
["", "mekiczi", "Мекици", "2,10", "", ""],
["", "burger-champion", "Бургер Champion", "5,60", "300", ""],
["", "pileshki-burger", "Пилешки бургер", "5,60", "400", ""],
["", "tortilya-s-pile", "Тортиля с пиле", "4,20", "400", ""],
["", "kesadiya", "Кесадия", "4,90", "400", ""],
["", "piczeta-kapreze", "Пицета Капрезе", "2,80", "", ""],
["", "piczeta-peperoni", "Пицета Пеперони", "3,50", "", ""]

            ],

            "Студени предястия": [
                ["", "plato-sirena", "Плато сирена", "21,00", "500", ""],
["", "plato-s-kolbasi-i-razyadki", "Плато с колбаси и разядки", "21,00", "700", ""],
["", "lukanka", "Луканка", "4,20", "100", ""],
["", "pastrma", "Пастърма", "5,60", "100", ""],
["", "file-elena", "Филе Елена", "5,60", "100", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-lukanka-i-bekon", "Запеканка с луканка и бекон", "4,90", "300", ""],
["", "zapekanka-s-bekon-kashkaval-i-kiseli-krastavichki", "Запеканка с бекон, кашкавал и кисели краставички", "4,90", "300", ""],
["", "zapekanka-ss-sirena", "Запеканка със сирена", "4,90", "300", ""],
["", "zapenka-s-pile-i-spanak", "Запенка с пиле и спанак", "4,90", "300", ""],
["", "pikanten-selski-bob-na-peshh", "Пикантен селски боб на пещ", "2,80", "300", ""],
["", "zapekanka-svinsko-po-lovdzhijski", "Запеканка свинско по ловджийски", "5,60", "300", ""],
["", "zapekanka-pile-po-lovdzhijski", "Запеканка пиле по ловджийски", "5,60", "300", ""],
["", "pile-s-manatarki-i-kartofeno-pyure", "Пиле с манатарки и картофено пюре", "6,30", "300", ""]

            ],

            "Топли предястия": [
                ["", "presni-przheni-kartofki", "Пресни пържени картофки", "1,40", "250", ""],
["", "presni-przheni-kartofki-ss-sirene", "Пресни пържени картофки със сирене", "2,10", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "domashen-chips", "Домашен чипс", "2,80", "200", ""],
["", "panirano-topeno-sirene-ss-sladko-ot-borovinki", "Панирано топено сирене със сладко от боровинки", "4,20", "250", ""],
["", "khrupkavi-kashkavalcheta", "Хрупкави кашкавалчета", "4,20", "250", ""],
["", "khrupkavi-sirencza", "Хрупкави сиренца", "3,50", "250", ""],
["", "pileshki-kozhichki", "Пилешки кожички", "2,80", "250", ""],
["", "miks-ot-sirencza-s-khrupkava-korichka-i-sos-ot-borovinki", "Микс от сиренца с хрупкава коричка и сос от боровинки", "4,90", "400", ""],
["", "gbki-na-tigan", "Гъбки на тиган", "4,20", "300", ""],
["", "filencza-champion", "Филенца Champion", "4,90", "400", ""],
["", "pileshki-khapki-s-gbi-bekon-i-kashkaval", "Пилешки хапки с гъби, бекон и кашкавал", "4,90", "300", ""],
["", "zelenchuczi-na-plocha", "Зеленчуци на плоча", "4,90", "400", ""],
["", "pileshki-drobcheta-s-gbi-i-kashkaval", "Пилешки дробчета с гъби и кашкавал", "4,20", "250", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "2,80", "300", ""],
["", "fish--chips", "Фиш & Чипс", "4,90", "400", ""],
["", "pileshki-chesnovi-khapki", "Пилешки чеснови хапки", "4,90", "300", ""],
["", "teleshki-mozk", "Телешки мозък", "5,60", "250", ""]

            ],

            "Дунавски риби": [
                ["", "som", "Сом", "9,80", "300", ""]

            ],

            "Паста и ризото": [
                ["", "taliateli-karbonara", "Талиатели Карбонара", "4,90", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "350", ""],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "4,90", "350", ""]

            ],

            "Ястия от пиле": [
                ["", "pileshko-vreteno-s-przheni-kartofki", "Пилешко вретено с пържени картофки", "7,00", "400", ""],
["", "pile-alfredo", "Пиле Алфредо", "7,00", "400", ""],
["", "pile-kordon-blo", "Пиле Кордон бльо", "7,00", "400", ""]

            ],

            "Ястия от свинско": [
                ["", "roshava-przhola", "Рошава пържола", "7,00", "300", ""],
["", "shpikovan-svinski-dzholan-ss-zadusheni-kartofi", "Шпикован свински джолан със задушени картофи", "8,40", "450", ""],
["", "marinovan-svinski-kotlet-s-bilki", "Маринован свински котлет с билки", "7,70", "400", ""],
["", "svinski-rebrcza", "Свински ребърца", "7,70", "300", ""]

            ],

            "Грил": [
                ["", "kombiniran-sach", "Комбиниран сач", "17,50", "", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "250", ""],
["", "pileshko-shishche", "Пилешкo шишче", "4,20", "", ""],
["", "svinsko-shishche", "Свинско шишче", "4,20", "", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "250", ""],
["", "domashni-kyuftencza-s-garnitura", "Домашни кюфтенца с гарнитура", "4,90", "350", ""],
["", "nadenicza-s-praz", "Наденица с праз", "5,60", "300", ""],
["", "plato-skara-ss-zelenchuczi", "Плато скара със зеленчуци", "8,40", "700", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "proshuto-koto", "Прошуто Кото", "4,20", "", ""],
["", "peperoni", "Пеперони", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "5,60", "", ""],
["", "shampion", "Шампион", "5,60", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "mama-mia", "Мама Миа", "5,60", "", ""],
["", "salsiche", "Салсиче", "5,60", "", ""],
["", "kuatro-stradzhoni", "Куатро Страджони", "5,60", "", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "1,40", "150", ""],
["", "krastaviczi", "Краставици", "1,40", "150", ""],
["", "kombinirana", "Комбинирана", "2,10", "150", ""],
["", "zele-i-morkovi", "Зеле и моркови", "1,40", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "150", ""],
["", "lyuta-chushka", "Лютa чушкa", "0,00", "", ""],
["", "prchiczi", "Пръчици", "2,10", "", ""]

            ],

            "Хлбя": [
                ["", "khlebche-na-denya", "Хлебче на деня", "0,70", "", ""],
["", "prlenka", "Пърленка", "2,10", "", ""],
["", "khlebche-s-parmezan", "Хлебче с пармезан", "2,10", "", ""],
["", "italiansko-khlebche", "Италианско хлебче", "2,10", "", ""]

            ],

            "Безалкохолни напитки": [
                ["", "red-bull", "Red Bull", "2,80", "250", ""],
["", "limonada", "Лимонада", "0,70", "250", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""]

            ],

            "beer": [
                ["", "leffe", "Leffe", "3,50", "330", ""],
["", "corona-extra", "Corona Extra", "3,50", "355", ""],
["", "hoegaarden", "Hoegaarden", "2,10", "330", ""],
["", "sajder-carling", "Сайдер Carling", "2,10", "330", ""],
["", "hoegaarden", "Hoegaarden", "3,50", "330", ""]

            ],

            "white-wine": [
                ["", "strazhite-mrv-borovicza", "Стражите МРВ Боровица", "17,50", "750", ""],
["", "rizling-lo-fotograf", "Ризлинг Льо Фотограф", "19,60", "750", ""]

            ],

            "red-wine": [
                ["", "gmza-novoselska-gmza", "Гъмза Новоселска Гъмза", "9,80", "", ""],
["", "merlo-dvete-topoli-negovanovczi", "Мерло Двете Тополи Неговановци", "9,80", "750", ""],
["", "rubin-dvete-topoli-negovanovczi", "Рубин Двете Тополи Неговановци", "9,80", "750", ""],
["", "cycle-sira--vionie", "Cycle Сира & Вионие", "9,80", "750", ""],
["", "four-cycle", "Four Cycle", "9,80", "750", ""],
["", "kaberne-sovinon-trgovishhe", "Каберне Совиньон Търговище", "9,80", "750", ""],
["", "buket-borovicza", "Букет Боровица", "13,30", "750", ""],
["", "sensum-borovicza", "Сенсум Боровица", "17,50", "750", ""],
["", "gmza-barik-vidinska-gmza", "Гъмза Барик Видинска Гъмза", "17,50", "750", ""],
["", "kaberne-fran-lo-fotograf", "Каберне Фран Льо Фотограф", "19,60", "750", ""],
["", "kokuun-zinfandel", "Кокуун Зинфандел", "17,50", "750", ""]

            ]
        }', 
        'slug' => 'champions-sports-bar',
        'business_name' => 'Champions Sports Bar &amp; Restaurant',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3700',
        'address' => 'бул. Цар Алексадър 2, 90',
        'address_additional' => '',
        'coords_x' => '43.9800493',
        'coords_y' => '22.8728445',
        'phone' => '+359886090010',
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
                ["", "zelena", "Зелена", "4,20", "250", ""],
["", "rio-mare", "Рио маре", "5,60", "250", ""],
["", "panczanela", "Панцанела", "4,90", "250", ""]

            ],

            "Антипасти": [
                ["", "pileshki-filencza", "Пилешки филенца", "5,60", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "300", ""],
["", "sandvich-romana-s-koto", "Сандвич Романа с кото", "4,20", "400", ""],
["", "sandvich-romana-s-krudo", "Сандвич Романа с крудо", "4,20", "400", ""],
["", "italianski-sandvich-piadina", "Италиански сандвич Пиадина", "3,50", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,90", "", ""],
["", "diavola", "Диавола", "7,70", "", ""],
["", "primavera", "Примавера", "7,00", "", ""],
["", "kaprichoza", "Капричоза", "7,70", "", ""],
["", "koto", "Кото", "7,00", "", ""],
["", "proshuto-fungi", "Прошуто фунги", "7,00", "", ""],
["", "peperoni", "Пеперони", "7,70", "", ""],
["", "proshuto-krudo", "Прошуто крудо", "7,70", "", ""],
["", "da-stefano", "Да стефано", "9,10", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "9,10", "", ""]

            ],

            "pasta": [
                ["", "boloneze", "Болонезе", "5,60", "350", ""],
["", "karbonara", "Карбонара", "5,60", "350", ""],
["", "alio-i-olio", "Алио и олио", "4,90", "350", ""],
["", "amatrichana", "Аматричана", "5,60", "350", ""]

            ],

            "risotto": [
                ["", "rizoto-milaneze", "Ризото Миланезе", "5,60", "300", ""],
["", "rizoto-monczeze", "Ризото Монцезе", "7,70", "300", ""]

            ],

            "maindishes": [
                ["", "sotirano-pileshko-ss-zelenchuczi", "Сотирано пилешко със зеленчуци", "5,60", "400", ""],
["", "skalopini-s-gben-sos-i-kartofeno-pyure", "Скалопини с гъбен сос и картофено пюре", "6,30", "400", ""],
["", "fish--chips", "Fish & Chips", "5,60", "400", ""],
["", "pileshki-filencza-s-chetiri-sirena-i-kartofeno-pyure", "Пилешки филенца с четири сирена и картофено пюре", "6,30", "400", ""]

            ]
        }', 
        'slug' => 'pizzeria-da-stefano',
        'business_name' => 'Pizzeria Da Stefano',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ул. Христо Ботев 24',
        'address_additional' => '',
        'coords_x' => '42.2640871',
        'coords_y' => '23.1183369',
        'phone' => '+359895038088',
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
                ["", "salata-dunav", "Салата Дунавъ", "5,60", "400", ""],
["", "salata-ss-skaridi-i-bekon", "Салата със скариди и бекон", "6,30", "400", ""],
["", "frenska-salata", "Френска салата", "6,30", "400", ""],
["", "gradinarska-salata", "Градинарска салата", "5,60", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "400", ""],
["", "slavyanska-salata", "Славянска салата", "5,60", "400", ""],
["", "salata-blgarche", "Салата Българче", "5,60", "400", ""],
["", "shopska-salata", "Шопска салата", "4,20", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,90", "400", ""],
["", "czezar-s-khrupkavo-pile--somga", "Цезар с хрупкаво пиле / сьомга", "5,60", "400", ""],
["", "salata-popaj", "Салата Попай", "5,60", "400", ""],
["", "listna-salata-grana-padano", "Листна салата Грана Падано", "5,60", "400", ""],
["", "roka-s-moczarela", "Рока с моцарела", "6,30", "400", ""]

            ],

            "soups": [
                ["", "vidinska-ribna-salamura", "Видинска рибна саламура", "2,10", "350", ""],
["", "dunavska-ribena-chorba", "Дунавска рибена чорба", "2,10", "350", ""],
["", "pileshka-supa", "Пилешка супа", "2,10", "350", ""],
["", "tarator", "Таратор", "1,40", "350", ""]

            ],

            "appetizer": [
                ["", "brusketi", "Брускети", "3,50", "200", ""],
["", "razyadka-s-riba-ton", "Разядка с риба тон", "4,20", "200", ""],
["", "tarama-khajver", "Тарама хайвер", "3,50", "150", ""],
["", "pukani-lyuti-chushki", "Пукани люти чушки", "2,10", "150", ""]

            ],

            "Закуски": [
                ["", "kesadiya", "Кесадия", "5,60", "400", ""],
["", "tortilya-s-pile", "Тортиля с пиле", "4,90", "400", ""],
["", "detski-burger", "Детски бургер", "4,20", "300", ""],
["", "teleshki-burger-s-bekon", "Телешки бургер с бекон", "6,30", "400", ""]

            ],

            "Топли предястия": [
                ["", "presni-przheni-kartofki", "Пресни пържени картофки", "2,10", "250", ""],
["", "presni-przheni-kartofki-ss-sirene", "Пресни пържени картофки със сирене", "2,80", "300", ""],
["", "kartofi-sote", "Картофи соте", "3,50", "300", ""],
["", "panirano-topeno-sirene-ss-sladko-ot-borovinki", "Панирано топено сирене със сладко от боровинки", "4,90", "250", ""],
["", "zapecheno-koze-sirene-s-med-i-orekhi", "Запечено козе сирене с мед и орехи", "4,90", "200", ""],
["", "miks-ot-sirencza-sos-ot-borovinki", "Микс от сиренца сос от боровинки", "5,60", "400", ""],
["", "khrupkavi-kashkavalcheta", "Хрупкави кашкавалчета", "4,20", "250", ""],
["", "khrupkavi-sirencza", "Хрупкави сиренца", "3,50", "250", ""],
["", "filencza-dunav", "Филенца Дунавъ", "5,60", "400", ""],
["", "zelenchuczi-na-plocha", "Зеленчуци на плоча", "5,60", "350", ""],
["", "pileshki-khapki-s-gbi-i-bekon", "Пилешки хапки с гъби и бекон", "5,60", "400", ""],
["", "fish--chips", "Фиш & Чипс", "4,90", "400", ""]

            ],

            "Дунавски риби": [
                ["", "som", "Сом", "10,50", "300", ""]

            ],

            "Други риби": [
                ["", "lavrak-na-skara", "Лаврак на скара", "10,50", "", ""],
["", "czipura-na-skara", "Ципура на скара", "10,50", "", ""],
["", "byala-riba-pane", "Бяла риба пане", "5,60", "300", ""],
["", "skumriya", "Скумрия", "5,60", "", ""],
["", "pstrva-na-plocha", "Пъстърва на плоча", "8,40", "", ""]

            ],

            "Морски дарове": [
                ["", "oktopod", "Октопод", "16,80", "200", ""],
["", "fritirani-kalmari-s-limonovo-chesnova-salcza", "Фритирани калмари с лимоново-чеснова салца", "9,80", "200", ""],
["", "sredizemnomorski-skaridi-s-czitrusov-dresing", "Средиземноморски скариди с цитрусов дресинг", "12,60", "200", ""],
["", "midi-s-byalo-vino", "Миди с бяло вино", "4,90", "400", ""],
["", "pipala-ot-kalmari-s-masleno-limonov-sos", "Пипала от калмари с маслено лимонов сос", "12,60", "250", ""],
["", "plneni-kalmari", "Пълнени калмари", "12,60", "200", ""]

            ],

            "Паста и Ризото": [
                ["", "rizoto-s-pile-i-gorski-gbi", "Ризото с пиле и горски гъби", "5,60", "350", ""],
["", "spageti-boloneze-s-teleshko", "Спагети болонезе с телешко", "5,60", "350", ""],
["", "taliateli-karbonara", "Талиатели Карбонара", "5,60", "350", ""],
["", "taliateli-s-manatarki", "Талиатели с манатарки", "5,60", "350", ""]

            ],

            "Ястия от свинско": [
                ["", "marinovan-svinski-kotlet-s-bilki", "Маринован свински котлет с билки", "9,10", "450", ""],
["", "krekhko-bon-file-s-presen-luk", "Крехко бон филе с пресен лук", "10,50", "450", ""],
["", "svisnki-vrat-s-bejbi-lukcheta", "Свиснки врат с бейби лукчета", "9,10", "450", ""]

            ],

            "Ястия от пиле": [
                ["", "pile-kordon-blo-s-pushen-demi-glas-450gr", "Пиле Кордон бльо с пушен деми глас (450гр)", "8,40", "", ""],
["", "pile-alfredo-s-kartofeno-pyure-provans-i-gben-sos", "Пиле Алфредо с картофено пюре прованс и гъбен сос", "8,40", "450", ""]

            ],

            "Грил": [
                ["", "domashni-kyuftencza-s-garnitura", "Домашни кюфтенца с гарнитура", "5,60", "300", ""],
["", "srbska-pleskavicza-s-garnitura", "Сръбска плескавица с гарнитура", "5,60", "300", ""],
["", "trojka-kebapcheta-s-garnitura", "Тройка кебапчета с гарнитура", "4,20", "", ""],
["", "pileshka-przhola---file", "Пилешкa пържола - филе", "5,60", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "250", ""],
["", "miks-gril-ss-zelenchuczi", "Микс грил със зеленчуци", "8,40", "550", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "1,40", "150", ""],
["", "krastaviczi", "Краставици", "1,40", "150", ""],
["", "kombinirana", "Комбинирана", "2,80", "150", ""],
["", "zele-i-morkovi", "Зеле и моркови", "1,40", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "150", ""],
["", "lyuti-chushki", "Люти чушки", "0,00", "", ""]

            ],

            "beer": [
                ["", "stela-artoa", "Стела Артоа", "2,10", "330", ""],
["", "leffe", "Леффе", "3,50", "330", ""],
["", "korona", "Корона", "3,50", "355", ""],
["", "khyugardn", "Хюгардън", "3,50", "330", ""],
["", "samrsbi", "Самърсби", "2,10", "330", ""]

            ]
        }', 
        'slug' => 'fish-and-grill-dunava',
        'business_name' => 'Fish and Grill Dunava',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3700',
        'address' => 'Крайбрежна алея, Понтон 6',
        'address_additional' => '',
        'coords_x' => '43.9847402',
        'coords_y' => '22.8798825',
        'phone' => '+359889088673',
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
            
            "Нови Предложения": [
                ["", "svinski-kscheta-ss-sos-bbq-i-kartofeno-pyure", "Свински късчета със сос BBQ и картофено пюре", "3,50", "350", ""],
["", "svinski-kscheta-po-bavarski", "Свински късчета по баварски", "3,50", "400", ""],
["", "svinski-kscheta-ala-krem", "Свински късчета ала крем", "3,50", "400", ""],
["", "svinski-kscheta-ss-soev-sos", "Свински късчета със соев сос", "3,50", "400", ""],
["", "svinski-kscheta-s-brokoli-i-moczarela", "Свински късчета с броколи и  моцарела", "3,50", "300", ""],
["", "pile-s-yablki-i-smetana", "Пиле с ябълки и сметана", "2,80", "400", ""],
["", "pile-s-gbi-i-smetana", "Пиле с гъби и сметана", "2,80", "350", ""],
["", "pileshki-kscheta-ss-sladko-kisel-sos", "Пилешки късчета със сладко-кисел сос", "2,80", "350", ""],
["", "pile-zhulien", "Пиле Жулиен", "2,80", "350", ""],
["", "medeno-pile", "Медено пиле", "2,80", "350", ""],
["", "zapekanka-miks", "Запеканка микс", "2,80", "400", ""],
["", "zapekanka-ss-zelenchuczi", "Запеканка със зеленчуци", "2,10", "350", ""],
["", "zapekanka-s-pusheno-pile", "Запеканка с пушено пиле", "2,10", "350", ""],
["", "chushki-na-tigan-s-yajcza-i-sirene", "Чушки на тиган с яйца и сирене", "2,80", "350", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "300", ""],
["", "oriz-s-gbi-i-kashkaval", "Ориз с гъби и кашкавал", "2,10", "350", ""],
["", "pasta-boloneze", "Паста Болонезе", "2,10", "350", ""],
["", "pasta-karbonara", "Паста Карбонара", "2,10", "350", ""],
["", "pasta-vegan-stroganov", "Паста веган строганов", "2,10", "350", ""],
["", "salata-zelena-ss-sirena", "Салата зелена със сирена", "4,20", "300", ""],
["", "salata-zhtvarska", "Салата Жътварска", "2,80", "400", ""],
["", "teleshki-ezik-po-kasapski", "Телешки език по касапски", "5,60", "400", ""],
["", "zapecheno-koze-sirene", "Запечено козе сирене", "6,30", "200", ""],
["", "svinski-medaloni", "Свински медальони", "7,70", "550", ""],
["", "pileshki-shniczel-san-marko", "Пилешки шницел Сан Марко", "5,60", "550", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "500", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "500", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "czezar", "Цезар", "4,20", "350", ""]

            ],

            "starters": [
                ["", "aromatno-svinsko-s-khrupkav-luk", "Ароматно свинско с хрупкав лук", "4,90", "300", ""],
["", "khrupkavi-pileshki-filencza-s-mlechno-chesnov-sos", "Хрупкави пилешки филенца с млечно чеснов сос", "4,20", "250", ""],
["", "khrupkavi-topeni-sirencza-s-borovinkov-sos", "Хрупкави топени сиренца с боровинков сос", "4,20", "250", ""],
["", "khrupkavi-kashkavalcheta", "Хрупкави кашкавалчета", "3,50", "200", ""],
["", "khrupkavi-sirencza", "Хрупкави сиренца", "2,80", "250", ""],
["", "kashkavalcheta-v-bekon-na-skara", "Кашкавалчета в бекон на скара", "3,50", "250", ""],
["", "sirencza-v-bekon-na-skara", "Сиренца в бекон на скара", "3,50", "300", ""],
["", "plneni-gbi-s-bekon", "Пълнени гъби с бекон", "2,80", "250", ""],
["", "plneni-gbi-s-topeno-sirene", "Пълнени гъби с топено сирене", "3,50", "250", ""],
["", "zapecheni-kartofi-s-mlechno-chesnov-sos", "Запечени картофи с млечно чеснов сос", "2,10", "350", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "200", ""],
["", "khrupkav-luk-s-mlechno-chesnov-sos", "Хрупкав лук с млечно чеснов сос", "2,10", "150", ""],
["", "domashni-przheni-kartofi-s-kopr-i-chesn", "Домашни пържени картофи с копър и чесън", "1,40", "200", ""],
["", "przheni-kartofi-s-ketchup", "Пържени картофи с кетчуп", "1,40", "200", ""],
["", "domashni-przheni-kartofi-ss-sirene", "Домашни пържени картофи със сирене", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "200", ""]

            ],

            "Студени предястия": [
                ["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""],
["", "pushen-bekon", "Пушен бекон", "0,70", "50", ""],
["", "pusheno-pileshko-file", "Пушено пилешко филе", "0,70", "50", ""],
["", "moczarela", "Моцарела", "2,10", "125", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "krave-sirene", "Краве сирене", "0,70", "50", ""]

            ],

            "Спагети и Ризото": [
                ["", "spageti-karbonara", "Спагети Карбонара", "4,20", "400", ""],
["", "spageti-ss-zelenchuczi", "Спагети със зеленчуци", "4,20", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "400", ""],
["", "rizoto-s-pile-i-gbi", "Ризото с пиле и гъби", "4,20", "350", ""],
["", "rizoto-vegan", "Ризото веган", "3,50", "400", ""],
["", "rizoto-s-bekon-i-gbi", "Ризото с бекон и гъби", "3,50", "350", ""]

            ],

            "pizza": [
                ["", "impuls", "Импулс", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "3,50", "", ""],
["", "fungi", "Фунги", "3,50", "", ""],
["", "proshuto-fungi", "Прошуто фунги", "2,80", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "3,50", "", ""],
["", "chikn", "Чикън", "3,50", "", ""],
["", "kalabreze", "Калабрезе", "4,20", "", ""],
["", "neapolitana", "Неаполитана", "4,20", "", ""],
["", "margarita", "Маргарита", "2,80", "", ""],
["", "detsko-menyu", "Детско меню", "4,90", "", ""],
["", "picza-na-majstora", "Пица на майстора", "3,50", "400", ""]

            ],

            "Ястия с риба": [
                ["", "file-ot-lavrak-s-portokalov-sos", "Филе от лаврак с портокалов сос", "8,40", "500", ""],
["", "khrupkavo-file-ot-lavrak", "Хрупкаво филе от лаврак", "8,40", "500", ""],
["", "pstrva-na-furna", "Пъстърва на фурна", "7,00", "500", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "6,30", "500", ""],
["", "przhena-pstrva", "Пържена пъстърва", "6,30", "500", ""],
["", "midi-v-maslo-s-presni-bilki", "Миди в масло с пресни билки", "6,30", "400", ""],
["", "kalmari-po-grczki-s-pikanten-sos-i-zelenchuczi-na-plocha", "Калмари по гръцки с пикантен сос и зеленчуци на плоча", "7,70", "300", ""],
["", "kalmari-po-grczki-s-mlechno-chesnov-sos-i-przheni-kartofi", "Калмари по гръцки с млечно чеснов сос и пържени картофи", "7,00", "300", ""]

            ],

            "Ястия с пиле": [
                ["", "khrupkavo-pile-s-domatena-salcza", "Хрупкаво пиле с доматена салца", "4,90", "400", ""],
["", "pileshki-sach", "Пилешки сач", "9,80", "800", ""],
["", "pile-impuls", "Пиле Импулс", "7,00", "500", ""],
["", "pileshko-file-ss-zelenchuczi", "Пилешко филе със зеленчуци", "5,60", "450", ""],
["", "pileshko-file-s-topeno-sirene", "Пилешко филе с топено сирене", "5,60", "450", ""]

            ],

            "Ястия със свинско": [
                ["", "svinski-sach", "Свински сач", "9,10", "800", ""],
["", "svinsko-bon-file-s-gorski-gbi", "Свинско бон филе с горски гъби", "7,70", "450", ""],
["", "svinski-dzholan", "Свински джолан", "7,00", "600", ""],
["", "svinski-pecheni-rebra-s-bbq-sos", "Свински печени ребра с BBQ сос", "7,70", "500", ""],
["", "svinski-vratni-karencza-s-bbq-sos", "Свински вратни каренца с BBQ сос", "5,60", "450", ""]

            ],

            "grill": [
                ["", "svinski-stek-ot-bon-file", "Свински стек от бон филе", "4,20", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "3,50", "250", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "0,70", "100", ""],
["", "pileshko-shishche-ot-file", "Пилешко шишче от филе", "1,40", "100", ""],
["", "anglijski-nadenichki", "Английски наденички", "4,20", "200", ""]

            ],

            "garnish": [
                ["", "khrupkavi-zelenchuczi", "Хрупкави зеленчуци", "2,10", "200", ""],
["", "mini-svezha-salata", "Мини свежа салата", "1,40", "150", ""],
["", "oriz-s-manatarki", "Ориз с манатарки", "1,40", "150", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "150", ""],
["", "zele-i-morkovi", "Зеле и моркови", "0,70", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "200", ""],
["", "kartofi-sote", "Картофи соте", "0,70", "200", ""],
["", "lyuta-chushka-marinovana", "Люта чушка маринована", "0,00", "", ""]

            ],

            "additives": [
                ["", "dobavka-bita-smetana", "Добавка Бита сметана", "0,00", "30", ""],
["", "dobavka-sladoled", "Добавка Сладолед", "0,70", "80", ""],
["", "dobavka-gotvarska-smetana", "Добавка Готварска сметана", "0,00", "50", ""],
["", "dobavka-sos-boloneze", "Добавка Сос Болонезе", "0,00", "50", ""],
["", "dobavka-sos-za-picza", "Добавка Сос за Пица", "0,00", "50", ""],
["", "dobavka-spageti", "Добавка Спагети", "0,70", "200", ""],
["", "dobavka-testo", "Добавка Тесто", "0,00", "50", ""],
["", "dobavka-techen-shokolad", "Добавка Течен шоколад", "0,00", "50", ""],
["", "dobavka-tikvichki", "Добавка Тиквички", "0,00", "50", ""],
["", "dobavka-file-elena", "Добавка Филе Елена", "2,10", "50", ""],
["", "dobavka-czarevicza", "Добавка Царевица", "0,00", "50", ""],
["", "dobavka-chesn", "Добавка Чесън", "0,00", "30", ""],
["", "dobavka-pecheni-chushki", "Добавка Печени чушки", "0,00", "50", ""],
["", "dobavka-presni-chushki", "Добавка Пресни чушки", "0,70", "50", ""],
["", "dobavka-shunka", "Добавка Шунка", "0,00", "50", ""],
["", "dobavka-yablki-50gr", "Добавка Ябълки (50гр)", "0,00", "", ""],
["", "dobavka-yajcze", "Добавка Яйце", "0,00", "", ""],
["", "dobavka-banan", "Добавка банан", "0,00", "50", ""],
["", "dobavka-bekon", "Добавка бекон", "0,70", "50", ""],
["", "dobavka-bob-khajncz", "Добавка боб Хайнц", "0,00", "50", ""],
["", "dobavka-brokoli", "Добавка броколи", "0,00", "50", ""],
["", "dobavka-gorchicza", "Добавка горчица", "0,70", "50", ""],
["", "dobavka-grakh", "Добавка грах", "0,00", "50", ""],
["", "dobavka-demiglas", "Добавка Демиглас", "0,00", "10", ""],
["", "dobavka-domati-presni", "Добавка домати пресни", "0,00", "50", ""],
["", "dobavka-domati-susheni", "Добавка домати сушени", "1,40", "30", ""],
["", "dobavka-domati-cheri", "Добавка домати чери", "0,00", "50", ""],
["", "dobavka-zadusheni-zelenchuczi", "Добавка задушени зеленчуци", "0,00", "50", ""],
["", "dobavka-kajma-svinska", "Добавка кайма свинска", "0,00", "50", ""],
["", "dobavka-kartofi", "Добавка картофи", "0,00", "50", ""],
["", "dobavka-kashkaval", "Добавка кашкавал", "0,70", "50", ""],
["", "dobavka-ketchup", "Добавка кетчуп", "0,00", "50", ""],
["", "dobavka-kiselo-mlyako", "Добавка кисело мляко", "0,00", "50", ""],
["", "dobavka-klenov-sirop", "Добавка кленов сироп", "2,80", "30", ""],
["", "dobavka-kornflejks", "Добавка корнфлейкс", "0,00", "50", ""],
["", "dobavka-krastaviczi", "Добавка краставици", "0,00", "50", ""],
["", "dobavka-krastaviczi-kiseli", "Добавка краставици кисели", "0,00", "50", ""],
["", "dobavka-limon", "Добавка лимон", "0,00", "50", ""],
["", "dobavka-luk-zelen", "Добавка лук зелен", "0,00", "30", ""],
["", "dobavka-luk-kromid", "Добавка лук кромид", "0,00", "50", ""],
["", "dobavka-luk-lilav", "Добавка лук лилав", "0,00", "50", ""],
["", "dobavka-lukanka", "Добавка луканка", "1,40", "50", ""],
["", "dobavka-majoneza", "Добавка майонеза", "0,00", "50", ""],
["", "dobavka-pasta-fusili", "Добавка паста Фусили", "0,00", "100", ""],
["", "dobavka-manatarki", "Добавка манатарки", "3,50", "50", ""],
["", "dobavka-margarin", "Добавка маргарин", "0,00", "50", ""],
["", "dobavka-maslini", "Добавка маслини", "0,00", "50", ""],
["", "dobavka-med", "Добавка мед", "0,70", "50", ""],
["", "dobavka-morkovi", "Добавка моркови", "0,00", "50", ""],
["", "dobavka-orekhi", "Добавка орехи", "0,00", "30", ""],
["", "dobavka-oriz", "Добавка ориз", "0,00", "80", ""],
["", "dobavka-parmezan", "Добавка пармезан", "0,70", "30", ""],
["", "dobavka-pastrma", "Добавка пастърма", "2,10", "50", ""],
["", "dobavka-pechurki", "Добавка печурки", "0,00", "50", ""],
["", "dobavka-pileshko-file", "Добавка пилешко филе", "1,40", "100", ""],
["", "dobavka-pileshko-file-pusheno", "Добавка пилешко филе пушено", "0,70", "50", ""],
["", "dobavka-portokali", "Добавка портокали", "0,00", "50", ""],
["", "dobavka-riba-ton", "Добавка риба тон", "2,10", "80", ""],
["", "dobavka-rukola", "Добавка рукола", "2,10", "50", ""],
["", "dobavka-zelena-salata", "Добавка зелена салата", "0,00", "50", ""],
["", "dobavka-frensko-koze-sirene", "Добавка френско козе сирене", "2,10", "50", ""],
["", "dobavka-krave-sirene", "Добавка краве сирене", "0,70", "50", ""],
["", "dobavka-sirene-moczarela", "Добавка сирене моцарела", "2,10", "125", ""],
["", "dobavka-sirene-pusheno-topeno", "Добавка сирене пушено топено", "0,00", "50", ""],
["", "dobavka-sino-sirene", "Добавка синьо сирене", "1,40", "50", ""],
["", "dobavka-sirene-topeno", "Добавка сирене топено", "0,00", "", ""],
["", "dobavka-sirene-chedr", "Добавка сирене чедър", "0,70", "50", ""],
["", "dobavka-sladko", "Добавка сладко", "0,00", "50", ""]

            ],

            "sauces": [
                ["", "medeno-gorchichen", "Медено-горчичен", "0,00", "50", ""],
["", "mlechno-chesnov", "Млечно-чеснов", "0,00", "50", ""],
["", "svezh-sos", "Свеж сос", "0,00", "50", ""],
["", "bbq-sos", "BBQ сос", "0,70", "50", ""],
["", "chili-sos", "Чили сос", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,70", "50", ""]

            ],

            "bread": [
                ["", "arabsko-khlebche", "Арабско хлебче", "0,70", "", ""],
["", "prlenka", "Пърленка", "0,70", "", ""],
["", "tost-filiya", "Тост филия", "0,00", "", ""],
["", "mesena-pitka", "Месена питка", "0,70", "", ""]

            ],

            "desserts": [
                ["", "amerikanski-palachinki-s-klenov-sirop", "Американски палачинки с кленов сироп", "2,10", "", ""],
["", "amerikanski-palachinki-s-shokolad-i-banan", "Американски палачинки с шоколад и банан", "2,10", "", ""],
["", "amerikanski-palachinki-s-borovinkovo-sladko", "Американски палачинки с боровинково сладко", "2,10", "", ""],
["", "plodova-torta-banan", "Плодова торта банан", "1,40", "", ""]

            ]
        }', 
        'slug' => 'restorant-impuls',
        'business_name' => 'Ресторант Impuls',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3700',
        'address' => 'Южна промишлена зона',
        'address_additional' => '',
        'coords_x' => '43.9672881',
        'coords_y' => '22.865567',
        'phone' => '+359889201031',
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
                ["", "domati-na-shajbi-s-pecheno-sirene", "Домати на шайби с печено сирене", "5,60", "300", ""],
["", "kalmari-s-khrupkava-korichka", "Калмари с хрупкава коричка", "8,40", "250", ""],
["", "miks-ot-svezhi-salatki-s-riba-ton", "Микс от свежи салатки с риба тон", "4,90", "350", ""],
["", "file-ot-treska-po-provanski", "Филе от треска по Провански", "7,70", "300", ""],
["", "kralski-skaridi-na-tigan-s-cheren-oriz", "Кралски скариди на тиган с черен ориз", "11,90", "300", ""],
["", "zapecheno-krave-sirene-ss-smokini-i-orekhi", "Запечено краве сирене със смокини и орехи", "4,20", "200", ""],
["", "pileshki-karencza-ss-sos-ot-frenski-sirena", "Пилешки каренца със сос от френски сирена", "7,00", "300", ""],
["", "svinski-bon-filencza-s-gbeno-ragu", "Свински бон филенца с гъбено рагу", "9,10", "300", ""],
["", "teleshko-bon-file-s-brat-i-kartofi", "Телешко бон филе с брат и картофи", "16,10", "400", ""],
["", "picza-s-proshuto-i-parmezan", "Пица с прошуто и пармезан", "7,70", "", ""],
["", "picza-s-cheri-domati-i-bejbi-spanak", "Пица с чери домати и бейби спанак", "6,30", "", ""]

            ],

            "salads": [
                ["", "grczka-salata", "Гръцка салата", "4,20", "350", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "350", ""],
["", "shopska-salata", "Шопска салата", "4,20", "350", ""],
["", "salata-snezhanka", "Салата Снежанка", "3,50", "250", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "450", ""],
["", "katk-s-chesn-i-sirene", "Катък с чесън и сирене", "4,20", "250", ""],
["", "zelena-salata-s-pecheno-sirene", "Зелена салата с печено сирене", "4,90", "350", ""],
["", "salata-czezar-s-domashen-dresing", "Салата Цезар с домашен дресинг", "5,60", "400", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "kartofena-salata", "Картофена салата", "2,10", "350", ""],
["", "zelena-salata", "Зелена салата", "2,80", "250", ""],
["", "salata-italiana", "Салата Италиана", "5,60", "300", ""]

            ],

            "Топли предястия": [
                ["", "khrupkavo-pileshko-file-s-kornflejks", "Хрупкаво пилешко филе с корнфлейкс", "6,30", "250", ""],
["", "brokoli-ss-sirena", "Броколи със сирена", "4,90", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "khapki-topeno-sirene-s-borovinkovo-sladko", "Хапки топено сирене с боровинково сладко", "6,30", "400", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "kartofi-po-selski", "Картофи по селски", "2,80", "300", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "4,90", "350", ""],
["", "khapki-sirene", "Хапки сирене", "4,20", "250", ""],
["", "khapki-kashkaval", "Хапки кашкавал", "4,90", "250", ""],
["", "khapki-pileshko-file", "Хапки пилешко филе", "5,60", "250", ""],
["", "zapekanka-s-pileshko-meso", "Запеканка с пилешко месо", "5,60", "400", ""],
["", "domat-s-mus-ot-sirena-i-grilovani-tikvichki", "Домат с мус от сирена и гриловани тиквички", "4,20", "300", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "300", ""],
["", "zapekanka-s-bekon-ili-shunka", "Запеканка с бекон или шунка", "5,60", "400", ""],
["", "brusketi-s-krema-sirene-i-shunka", "Брускети с крема сирене и шунка", "2,80", "", ""],
["", "brusketi-s-domat-moczarela-i-sos-pesto", "Брускети с домат, моцарела и сос Песто", "2,80", "", ""]

            ],

            "alaminuti": [
                ["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "", ""],
["", "omlet-s-shunka-i-kashkaval", "Омлет с шунка и кашкавал", "3,50", "", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,80", "", ""],
["", "omlet-natyur", "Омлет натюр", "2,10", "", ""],
["", "mish-mash", "Миш маш", "3,50", "", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "", ""]

            ],

            "burgers": [
                ["", "pileshki-burger", "Пилешки бургер", "5,60", "400", ""],
["", "teleshki-burger", "Телешки бургер", "5,60", "400", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,10", "", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "2,10", "", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "", ""],
["", "chetiri-sirena", "Четири сирена", "7,00", "", ""],
["", "byagashho-pile", "Бягащо пиле", "7,00", "", ""],
["", "kariola", "Кариола", "7,00", "", ""],
["", "kalczone", "Калцоне", "7,00", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "6,30", "", ""],
["", "tropikana", "Тропикана", "7,00", "", ""],
["", "prlenka-s-chesnovo-maslo", "Пърленка с чесново масло", "1,40", "200", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "2,10", "200", ""]

            ],

            "Ястия от пилешко": [
                ["", "pile-zhulien", "Пиле Жулиен", "6,30", "300", ""],
["", "pileshko-milaneze-ss-zadusheni-zelenchuczi", "Пилешко миланезе със задушени зеленчуци", "7,70", "350", ""],
["", "pile-s-luk-i-gbi", "Пиле с лук и гъби", "7,70", "350", ""],
["", "pileshki-chesnovi-kscheta", "Пилешки чеснови късчета", "5,60", "250", ""],
["", "pileshki-flejki-ss-sos-ot-mashherka", "Пилешки флейки със сос от мащерка", "7,70", "350", ""],
["", "rizoto-s-pile", "Ризото с пиле", "5,60", "350", ""]

            ],

            "Ястия от свинско": [
                ["", "vienski-shniczel", "Виенски шницел", "8,40", "350", ""],
["", "file-minon", "Филе миньон", "7,70", "200", ""]

            ],

            "Ястия от телешко": [
                ["", "pikanten-teleshki-shashlik-s-przheni-kartofi", "Пикантен телешки шашлик с пържени картофи", "7,00", "400", ""],
["", "teleshki-flejki-s-pepr-sos-i-pasta", "Телешки флейки с пепър сос и паста", "9,80", "400", ""]

            ],

            "Ястия от риба": [
                ["", "pastrva-na-gril-s-mentov-limonet-i-zadusheni-zelenchuczi", "Пастърва на грил с ментов лимонет и задушени зеленчуци", "11,20", "400", ""],
["", "byala-riba-pane", "Бяла риба пане", "5,60", "200", ""],
["", "file-ot-somga-v-pergament-i-zadusheni-zelenchuczi", "Филе от сьомга в пергамент и задушени зеленчуци", "12,60", "300", ""]

            ],

            "Скара и барбекю": [
                ["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "5,60", "200", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "200", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "5,60", "200", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "80", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "3,50", "200", ""],
["", "srbska-meshana-skara", "Сръбска мешана скара", "11,20", "700", ""],
["", "pikantni-pileshki-krilcza", "Пикантни пилешки крилца", "4,20", "300", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "80", ""]

            ],

            "pasta": [
                ["", "spageti-boloneze", "Спагети Болонезе", "4,90", "450", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "450", ""],
["", "vegetarianski-spageti", "Вегетариански спагети", "3,50", "400", ""]

            ],

            "sachs": [
                ["", "sach-vintidzh", "Сач Винтидж", "15,40", "800", ""],
["", "pileshki-sach", "Пилешки сач", "11,90", "600", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "7,70", "500", ""],
["", "svinski-sach", "Свински сач", "11,90", "600", ""]

            ],

            "dry-appetizer": [
                ["", "lukanka", "Луканка", "1,40", "50", ""],
["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "kashkaval", "Кашкавал", "1,40", "100", ""],
["", "pastrma", "Пастърма", "2,80", "50", ""],
["", "file-elena", "Филе Елена", "2,80", "50", ""],
["", "sirene", "Сирене", "1,40", "100", ""]

            ],

            "garnish": [
                ["", "oriz", "Ориз", "0,70", "150", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "1,40", "150", ""],
["", "kombinirana", "Комбинирана", "1,40", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "150", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "chili-sos", "Чили сос", "0,00", "50", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""]

            ],

            "additives": [
                ["", "gbi", "Гъби", "0,00", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "domat", "Домат", "0,00", "50", ""],
["", "lukanka", "Луканка", "0,70", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "2,10", "", ""],
["", "gofreta-s-shokolad-banan-i-sladoled", "Гофрета с шоколад, банан и сладолед", "2,80", "350", ""],
["", "gofreta-ss-sladko-plodove-i-sladoled", "Гофрета със сладко, плодове и сладолед", "2,80", "350", ""],
["", "gofreta-s-banan-domashen-med-i-orekhi", "Гофрета с банан, домашен мед и орехи", "2,80", "", ""]

            ]
        }', 
        'slug' => 'vintage-bar',
        'business_name' => 'Vintage bar &amp; Diner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8800',
        'address' => 'ул. Генерал Столипин 2',
        'address_additional' => '',
        'coords_x' => '42.68119118',
        'coords_y' => '26.31809668',
        'phone' => '+359886147445',
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
            
            "Студени напитки": [
                ["", "byalo-frape", "Бяло фрапе", "1,40", "250", ""],
["", "cherno-frape", "Черно фрапе", "1,40", "250", ""],
["", "chokofredo", "Чокофредо", "2,80", "330", ""],
["", "chokochino", "Чокочино", "2,80", "330", ""],
["", "kafetino", "Кафетино", "2,80", "330", ""],
["", "vanila-ajs", "Ванила айс", "2,80", "330", ""],
["", "jogurt", "Йогурт", "2,80", "330", ""],
["", "studen-chaj-zhasmin", "Студен чай жасмин", "2,10", "250", ""],
["", "studen-chaj-nar", "Студен чай нар", "2,10", "250", ""],
["", "limonada-s-vkus", "Лимонада с вкус", "2,10", "250", ""],
["", "domashna-limonada", "Домашна лимонада", "1,40", "250", ""],
["", "fresh", "Фреш", "2,10", "200", ""]

            ],

            "Торти": [
                ["", "rafaelo", "Рафаело", "2,10", "180", ""],
["", "krusha-i-karamel", "Круша и карамел", "2,10", "180", ""],
["", "gorski-plod", "Горски плод", "2,10", "180", ""],
["", "garash", "Гараш", "2,80", "120", ""],
["", "chijzkejk-s-borovinka", "Чийзкейк с боровинка", "2,10", "180", ""],
["", "chijzkekhk-filadelfiya", "Чийзкехк Филаделфия", "2,10", "120", ""],
["", "chijzkejk-smokinya", "Чийзкейк смокиня", "2,10", "120", ""],
["", "amore", "Аморе", "2,80", "150", ""],
["", "oreo", "Орео", "2,10", "180", ""],
["", "kestenova-torta", "Кестенова торта", "2,10", "100", ""],
["", "syurpriz", "Сюрприз", "2,10", "180", ""],
["", "tiramisu", "Тирамису", "2,10", "120", ""]

            ]
        }', 
        'slug' => 'dolce-amore',
        'business_name' => 'Dolce Amore',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dupnitsa',
        'region' => 'Dupnitsa',
        'postal_code' => '2600',
        'address' => 'ул. Княз Борис I 2',
        'address_additional' => '',
        'coords_x' => '42.2640971',
        'coords_y' => '23.1150725',
        'phone' => '+359877060824',
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
                ["", "ovcharska-salata", "Овчарска салата", "5,60", "450", ""],
["", "shopska-salata", "Шопска салата", "4,20", "400", ""],
["", "chorbadzhijska-salata", "Чорбаджийска салата", "5,60", "350", ""],
["", "zelena-salata", "Зелена салата", "4,20", "350", ""],
["", "vitaminozna", "Витаминозна", "4,90", "300", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "350", ""],
["", "salata-kapreze-s-kedrovi-yadki", "Салата Капрезе с кедрови ядки", "5,60", "350", ""],
["", "grczka-salata", "Гръцка салата", "5,60", "400", ""],
["", "salata-snezhanka", "Салата Снежанка", "4,20", "300", ""],
["", "vrachanska-salata", "Врачанска салата", "4,90", "400", ""],
["", "sredizemnomorska-salata", "Средиземноморска салата", "5,60", "350", ""]

            ],

            "Приятели на бирата": [
                ["", "przheni-kartofi---blanshirani", "Пържени картофи - бланширани", "2,80", "250", ""],
["", "domashni-przheni-kartofi---chips", "Домашни пържени картофи - чипс", "2,80", "340", ""],
["", "domashni-przheni-kartofi-ss-sirene---chips", "Домашни пържени картофи със сирене - чипс", "3,50", "390", ""],
["", "domashni-przheni-kartofi---prchiczi", "Домашни пържени картофи - пръчици", "2,80", "340", ""],
["", "domashni-przheni-kartofi-ss-sirene---prchiczi", "Домашни пържени картофи със сирене - пръчици", "3,50", "390", ""],
["", "kashkavalcheta-pane-s-chesnov-sos", "Кашкавалчета пане с чеснов сос", "5,60", "250", ""],
["", "pileshki-khapki-pane-s-chesnov-sos", "Пилешки хапки пане с чеснов сос", "5,60", "250", ""],
["", "pileshki-khapki-s-kornflejks-s-chesnov-sos", "Пилешки хапки с корнфлейкс с чеснов сос", "5,60", "250", ""],
["", "pileshki-khapki-ss-susam-pane-i-chesnov-sos", "Пилешки хапки със сусам пане и чеснов сос", "5,60", "250", ""],
["", "pileshki-krilcza-pane-s-bbq-sos-7br", "Пилешки крилца пане с BBQ сос (7бр", "4,90", "350", ""],
["", "pileshki-kscheta-la-scalla", "Пилешки късчета La Scalla", "6,30", "350", ""],
["", "pileshki-drob-na-tigan-s-luk", "Пилешки дроб на тиган с лук", "5,60", "300", ""],
["", "svinski-drob-na-tigan-s-luk", "Свински дроб на тиган с лук", "5,60", "300", ""],
["", "panirani-ribni-khapki-la-scalla", "Панирани рибни хапки La Scalla", "7,00", "250", ""],
["", "topeni-sirencza-s-kornflejks-i-sladko-ot-borovinki", "Топени сиренца с корнфлейкс и сладко от боровинки", "5,60", "250", ""]

            ],

            "Основни ястия": [
                ["", "pile-zhulien", "Пиле Жулиен", "7,70", "350", ""],
["", "pile-marko-polo", "Пиле Марко Поло", "8,40", "400", ""],
["", "pileshki-bon-filencza-s-kornflejks", "Пилешки бон филенца с корнфлейкс", "7,70", "350", ""],
["", "plnena-palachinka", "Пълнена палачинка", "7,70", "250", ""],
["", "zapekanka-s-kartofi-i-sirene", "Запеканка с картофи и сирене", "4,90", "450", ""],
["", "czarska-zapekanka", "Царска запеканка", "8,40", "450", ""],
["", "zapecheni-kartofi-s-pileshko", "Запечени картофи с пилешко", "7,00", "500", ""],
["", "zapekanka-s-bekon-i-kartofi", "Запеканка с бекон и картофи", "6,30", "450", ""],
["", "zapecheni-brokoli-ss-smetana-i-chetiri-vida-sirena", "Запечени броколи със сметана и четири вида сирена", "7,00", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "6,30", "450", ""],
["", "svinski-kscheta-po-staroblgarski", "Свински късчета по старобългарски", "9,80", "450", ""],
["", "svinski-vrat-s-luk-i-gbi", "Свински врат с лук и гъби", "7,00", "450", ""]

            ],

            "Пици без месо": [
                ["", "picza-margarita", "Пица Маргарита", "3,50", "", ""],
["", "picza-formadzho", "Пица Формаджо", "4,20", "", ""],
["", "picza-kuatro-formadzhi", "Пица Куатро Формаджи", "4,90", "", ""],
["", "picza-rafaelo", "Пица Рафаело", "4,20", "", ""],
["", "vegan---bez-kashkaval", "Веган - Без кашкавал", "4,90", "", ""]

            ],

            "Пикантни пици с месо": [
                ["", "picza-etna", "Пица Етна", "4,90", "", ""],
["", "picza-peperone", "Пица Пепероне", "5,60", "", ""],
["", "picza-sicziliana", "Пица Сицилиана", "5,60", "", ""],
["", "picza-kardinale", "Пица Кардинале", "6,30", "", ""]

            ],

            "Пици с месо": [
                ["", "picza-francziskana", "Пица Францискана", "4,90", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,90", "", ""],
["", "picza-dzhordzho", "Пица Джорджо", "5,60", "", ""],
["", "picza-polo", "Пица Поло", "5,60", "", ""],
["", "picza-primavera", "Пица Примавера", "5,60", "", ""],
["", "picza-verdi", "Пица Верди", "6,30", "", ""],
["", "picza-italiana", "Пица Италиана", "6,30", "", ""],
["", "kalczone---zatvorena-picza", "Калцоне - затворена пица", "6,30", "", ""],
["", "picza-piachencza", "Пица Пиаченца", "6,30", "", ""],
["", "picza-marinara", "Пица Маринара", "6,30", "", ""],
["", "picza-valentino", "Пица Валентино", "6,30", "", ""],
["", "picza-udine", "Пица Удине", "6,30", "", ""],
["", "picza-piza", "Пица Пиза", "6,30", "", ""],
["", "picza-akapulko", "Пица Акапулко", "6,30", "", ""],
["", "picza-bekon", "Пица Бекон", "6,30", "", ""],
["", "picza-bari", "Пица Бари", "6,30", "", ""],
["", "picza-alabama", "Пица Алабама", "7,00", "", ""],
["", "picza-amerikana", "Пица Американа", "7,00", "", ""],
["", "picza-mankhatn", "Пица Манхатън", "7,00", "", ""],
["", "picza-dzhmp", "Пица Джъмп", "7,00", "", ""],
["", "picza-trubadur", "Пица Трубадур", "7,00", "", ""],
["", "picza-chara", "Пица Чара", "7,00", "", ""],
["", "picza-la-skalla", "Пица Ла Скалла", "7,70", "", ""],
["", "picza-neptun", "Пица Нептун", "7,70", "", ""]

            ],

            "Пици със сметана": [
                ["", "picza-metropoliten", "Пица Метрополитен", "5,60", "", ""],
["", "picza-kodomore", "Пица Кодоморе", "6,30", "", ""],
["", "picza-roma", "Пица Рома", "6,30", "", ""],
["", "picza-khavaj", "Пица Хавай", "6,30", "", ""],
["", "picza-rimini", "Пица Римини", "7,00", "", ""]

            ],

            "pasta": [
                ["", "spageti-karbonara", "Спагети Карбонара", "4,90", "400", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "400", ""],
["", "spageti-vegetariana", "Спагети Вегетариана", "4,90", "400", ""],
["", "spageti-la-scalla-zapecheni-na-peshh", "Спагети La Scalla запечени на пещ", "7,00", "400", ""],
["", "spageti-don-korleone", "Спагети Дон Корлеоне", "5,60", "400", ""],
["", "spageti-felichita", "Спагети Феличита", "5,60", "400", ""],
["", "spageti-belisima", "Спагети Белисима", "5,60", "400", ""],
["", "taliateli-s-tikvichka-i-bekon", "Талиатели с тиквичка и бекон", "5,60", "400", ""],
["", "taliateli-s-chetiri-sirena", "Талиатели с четири сирена", "6,30", "400", ""],
["", "taliateli-la-scalla", "Талиатели La Scalla", "7,00", "400", ""]

            ],

            "Ла Скара": [
                ["", "pileshki-filencza-s-garnitura-i-pitka", "Пилешки филенца с гарнитура и питка", "7,70", "400", ""],
["", "pileshka-przhola-ot-but-s-garnitura-i-pitka", "Пилешка пържола от бут с гарнитура и питка", "7,00", "400", ""],
["", "svinski-drob-s-garnitura-i-pitka", "Свински дроб с гарнитура и питка", "6,30", "400", ""],
["", "svinska-vratna-przhola-s-garnitura-i-pitka", "Свинска вратна пържола с гарнитура и питка", "8,40", "350", ""],
["", "kyufteta-ot-meso-3br-s-garnitura-i-pitka", "Кюфтета от месо 3бр с гарнитура и питка", "7,00", "400", ""],
["", "kebapcheta-ot-meso-3br-s-garnitura-i-pitka", "Кебапчета от месо 3бр с гарнитура и питка", "7,00", "400", ""],
["", "meshana-skara-s-garnitura-i-pitka", "Мешана скара с гарнитура и питка", "11,20", "600", ""],
["", "sudzhuk-na-skara-s-garnitura-i-pitka", "Суджук на скара с гарнитура и питка", "9,10", "400", ""],
["", "pstrva-na-skara-s-garnitura-i-pitka", "Пъстърва на скара с гарнитура и питка", "7,70", "400", ""],
["", "skumriya-na-skara-s-garnitura-i-pitka", "Скумрия на скара с гарнитура и питка", "6,30", "400", ""],
["", "rebra-na-skara-s-garnitura-i-pitka", "Ребра на скара с гарнитура и питка", "9,80", "450", ""],
["", "pileshka-przhola-ot-file-s-garnitura-i-pitka", "Пилешка пържола от филе с гарнитура и питка", "7,70", "400", ""]

            ],

            "additives": [
                ["", "kajma", "Кайма", "0,70", "", ""],
["", "kashkaval", "Кашкавал", "1,40", "", ""],
["", "bekon", "Бекон", "0,70", "", ""],
["", "parmezan", "Пармезан", "1,40", "", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "", ""],
["", "topeno-sirene", "Топено сирене", "0,70", "", ""],
["", "czarevicza", "Царевица", "0,70", "", ""],
["", "pileshko-meso", "Пилешко месо", "0,70", "", ""],
["", "pechena-chushka", "Печена чушка", "0,70", "", ""],
["", "morski-darove", "Морски дарове", "1,40", "", ""],
["", "lyuti-chushki", "Люти чушки", "0,00", "", ""],
["", "lukankov-salam", "Луканков салам", "0,70", "", ""],
["", "shpekov-salam", "Шпеков салам", "0,70", "", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,70", "", ""],
["", "luk", "Лук", "0,00", "", ""],
["", "maslini", "Маслини", "0,70", "", ""],
["", "ananas", "Ананас", "0,70", "", ""],
["", "krema-sirene", "Крема сирене", "0,70", "", ""],
["", "pushen-but", "Пушен бут", "0,70", "", ""],
["", "yajcze", "Яйце", "0,70", "", ""],
["", "gbi", "Гъби", "0,70", "", ""]

            ],

            "Пърленки и Хлебчета": [
                ["", "prlenka-s-krave-maslo", "Пърленка с краве масло", "2,10", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,80", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,80", "", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "2,80", "", ""],
["", "kombinirana-prlenka-ss-sirene-i-kashkaval", "Комбинирана пърленка със сирене и кашкавал", "3,50", "", ""],
["", "prlenka-s-rigan-bosilek-i-magdanoz", "Пърленка с риган, босилек и магданоз", "2,10", "", ""],
["", "prlenka-s-kopr-i-chesn", "Пърленка с копър и чесън", "2,80", "", ""],
["", "pitka", "Питка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "domashna-palachinka", "Домашна палачинка", "2,10", "", ""],
["", "palachinka-belisima", "Палачинка Белисима", "4,20", "", ""],
["", "krem-karamel", "Крем карамел", "2,10", "", ""],
["", "biskvitena-torta", "Бисквитена торта", "2,80", "", ""],
["", "maskarpone", "Маскарпоне", "2,80", "", ""],
["", "chijzkejk-s-borovinki", "Чийзкейк с боровинки", "3,50", "", ""]

            ],

            "Детско меню": [
                ["", "detska-picza-trolche--sokche--igrachka", "Детска пица Тролче + сокче + играчка", "7,70", "", ""],
["", "detska-picza-spajdrmen--sokche--igrachka", "Детска пица Спайдърмен + сокче + играчка", "8,40", "", ""],
["", "detska-picza-pepelyashka--sokche--igrachka", "Детска пица Пепеляшка + сокче + играчка", "8,40", "", ""],
["", "detska-picza-khari-potr-vegetarianska--sokche--igrachka", "Детска пица Хари Потър /вегетарианска/ + сокче + играчка", "7,70", "", ""],
["", "detska-picza-shrek--sokche--igrachka", "Детска пица Шрек + сокче + играчка", "8,40", "", ""]

            ]
        }', 
        'slug' => 'la-scalla',
        'business_name' => 'La Scalla',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Gabrovo',
        'region' => 'Gabrovo',
        'postal_code' => '5300',
        'address' => 'пл. 10-ти Юли',
        'address_additional' => '',
        'coords_x' => '42.87245722',
        'coords_y' => '25.32006273',
        'phone' => '+359899803382',
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
                ["", "salata-domati", "Салата домати", "2,10", "350", ""],
["", "salata-krastaviczi", "Салата краставици", "2,10", "350", ""],
["", "salata-domati-pechen-piper-i-sirene", "Салата домати, печен пипер и сирене", "2,80", "350", ""],
["", "salata-pechen-piper", "Салата печен пипер", "2,80", "250", ""],
["", "salata-zele-i-morkovi", "Салата зеле и моркови", "2,10", "300", ""],
["", "salata-vareni-kartofi", "Салата варени картофи", "2,10", "350", ""],
["", "meshana-salata", "Мешана салата", "2,80", "400", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "selska-salata", "Селска салата", "2,80", "400", ""],
["", "nashenska-salata", "Нашенска салата", "2,10", "400", ""],
["", "salata-snezhanka", "Салата Снежанка", "2,80", "250", ""],
["", "czarevicza-s-kopr", "Царевица с копър", "2,10", "200", ""],
["", "shumenska-salata", "Шуменска салата", "2,80", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "400", ""],
["", "sharena-salata", "Шарена салата", "3,50", "350", ""],
["", "zhtvarska-salata", "Жътварска салата", "2,80", "400", ""],
["", "pileshki-sach", "Пилешки сач", "9,80", "800", ""]

            ],

            "appetizer": [
                ["", "katk", "Катък", "2,10", "150", ""],
["", "urnabes", "Урнабес", "2,10", "150", ""]

            ],

            "Пилешки предястия": [
                ["", "pileshki-krilcza", "Пилешки крилца", "2,80", "400", ""],
["", "pileshki-drob-v-maslo", "Пилешки дроб в масло", "2,80", "300", ""],
["", "pileshki-drob-s-luk", "Пилешки дроб с лук", "2,80", "330", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "2,80", "", ""],
["", "pileshki-drob-v-bulo", "Пилешки дроб в було", "2,80", "330", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "2,80", "330", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "2,80", "350", ""],
["", "pileshki-srcza-na-skara", "Пилешки сърца на скара", "2,80", "300", ""],
["", "pileshki-vodenichki-po-shumensko", "Пилешки воденички по шуменско", "2,80", "350", ""],
["", "pileshki-vodenichki-s-maslo", "Пилешки воденички с масло", "2,80", "300", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "2,80", "330", ""],
["", "pileshki-vodenichki-po-selski", "Пилешки воденички по селски", "2,80", "400", ""],
["", "pileshki-trtchiczi", "Пилешки трътчици", "2,10", "300", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "2,80", "250", ""],
["", "pileshki-khapki-s-konflejks", "Пилешки хапки с конфлейкс", "2,80", "250", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "2,80", "250", ""],
["", "pileshki-khapki-s-gbi", "Пилешки хапки с гъби", "2,80", "300", ""]

            ],

            "Свински предястия": [
                ["", "katino-meze", "Катино мезе", "4,90", "350", ""],
["", "svinski-drob-v-maslo", "Свински дроб в масло", "2,80", "300", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "2,80", "300", ""],
["", "svinski-drob-s-luk", "Свински дроб с лук", "2,80", "300", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "3,50", "400", ""],
["", "svinski-drob-v-bulo", "Свински дроб в було", "2,80", "330", ""],
["", "svinsko-ukho-na-skara", "Свинско ухо на скара", "4,20", "", ""],
["", "przheno-pikantno-svinsko-ushencze", "Пържено пикантно свинско ушенце", "4,20", "250", ""]

            ],

            "Телешки предястия": [
                ["", "ezik-v-maslo", "Език в масло", "4,90", "200", ""],
["", "ezik-pane", "Език пане", "5,60", "250", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,90", "200", ""],
["", "shkembe-v-kashkaval", "Шкембе в кашкавал", "4,90", "250", ""],
["", "shkembe-na-shefa", "Шкембе на шефа", "4,90", "250", ""],
["", "dyavolsko-shkembe", "Дяволско шкембе", "4,90", "250", ""],
["", "teleshka-meshavicza", "Телешка мешавица", "5,60", "300", ""]

            ],

            "Агнешки предястия": [
                ["", "agneshka-glavichka", "Агнешка главичка", "4,20", "", ""]

            ],

            "Постни предястия": [
                ["", "khapki-kashkaval", "Хапки кашкавал", "2,80", "200", ""],
["", "khapki-kashkaval-s-konrfleks", "Хапки кашкавал с конрфлекс", "3,50", "200", ""],
["", "khapki-sirene", "Хапки сирене", "2,80", "200", ""],
["", "topeno-sirene-pane-s-toping", "Топено сирене пане с топинг", "3,50", "200", ""],
["", "brokoli-ss-smetana", "Броколи със сметана", "2,10", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "350", ""],
["", "kartofi-na-skara", "Картофи на скара", "2,10", "300", ""],
["", "kartofi-sote-s-chesn-i-kopr", "Картофи Соте с чесън и копър", "2,10", "300", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,10", "250", ""],
["", "gbi-s-kashkaval", "Гъби с кашкавал", "2,80", "300", ""],
["", "gbi-na-skara", "Гъби на скара", "2,10", "250", ""],
["", "plneni-gbi-na-skara", "Пълнени гъби на скара", "2,80", "300", ""]

            ],

            "Основни ястия": [
                ["", "pile-po-frenski", "Пиле по френски", "4,90", "400", ""],
["", "kareta-po-shumenski", "Карета по шуменски", "4,90", "400", ""],
["", "svinsko-ili-pileshko-po-bolyarski", "Свинско или пилешко по болярски", "4,90", "400", ""]

            ],

            "fish": [
                ["", "pstrva-na-skara", "Пъстърва на скара", "4,90", "", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "lyuto-kyufte", "Люто кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "svinsko-kare", "Свинско каре", "1,40", "80", ""],
["", "svinska-przhola", "Свинска пържола", "4,90", "300", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "rebra-na-skara", "Ребра на скара", "8,40", "500", ""],
["", "svinski-bekon", "Свински бекон", "4,20", "250", ""],
["", "svinska-meshana-skara", "Свинска мешана скара", "4,90", "360", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshko-kare", "Пилешко каре", "1,40", "80", ""],
["", "kombinirana-pshaga", "Комбинирана пшага", "7,00", "600", ""],
["", "pileshka-shpaga", "Пилешка шпага", "6,30", "600", ""],
["", "dvojna-shpaga-na-plato", "Двойна шпага на плато", "14,70", "1200", ""],
["", "shisha-na-khitr-petr", "Шиша на Хитър Петър", "5,60", "400", ""]

            ],

            "sachs": [
                ["", "vegetarianski-sach", "Вегетариански сач", "5,60", "800", ""],
["", "svinski-sach", "Свински сач", "11,20", "800", ""],
["", "kombiniran-sach", "Комбиниран сач", "10,50", "800", ""],
["", "sach-kumcho-vlcho", "Сач Кумчо Вълчо", "11,20", "950", ""],
["", "kasapski-sach", "Касапски сач", "16,80", "1200", ""],
["", "dzholan-na-sach", "Джолан на сач", "7,00", "500", ""],
["", "sacha-na-nastradin-khodzha", "Сача на Настрадин Ходжа", "8,40", "550", ""]

            ],

            "Гювечета": [
                ["", "zapekanka-ss-sirene", "Запеканка със сирене", "2,10", "", ""],
["", "zapekanka-s-kashkaval", "Запеканка с кашкавал", "2,80", "350", ""],
["", "zapekanka-s-shunka", "Запеканка с шунка", "2,80", "350", ""],
["", "zapekanka-s-pileshko-meso", "Запеканка с пилешко месо", "2,80", "350", ""],
["", "svinska-ili-pileshka-kavrma", "Свинска или пилешка кавърма", "3,50", "350", ""],
["", "meshana-skara-v-gyuveche", "Мешана скара в гювече", "4,90", "400", ""]

            ],

            "beer": [
                ["", "korona-ekstra", "Корона екстра", "2,80", "355", ""],
["", "lefe", "Лефе", "2,10", "330", ""]

            ],

            "Вина": [
                ["", "vina-seriya-etno", "Вина серия Етно", "6,30", "750", ""],
["", "vina-seriya-deja-vu", "Вина серия Deja Vu", "9,80", "750", ""],
["", "vinarska-izba-domejn-bojar", "Винарска изба Домейн Бойар", "6,30", "750", ""],
["", "cherveni-vina-seriya-cycle", "Червени вина серия Cycle", "9,80", "750", ""],
["", "beli-vina-cycle", "Бели вина Cycle", "9,80", "750", ""]

            ]
        }', 
        'slug' => 'mehana-hitr-petr',
        'business_name' => 'Механа Хитър Петър',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Shumen',
        'region' => 'Shumen',
        'postal_code' => '9710',
        'address' => 'ул. „Самара“ 1',
        'address_additional' => '',
        'coords_x' => '43.27577269',
        'coords_y' => '26.90773908',
        'phone' => '+359898301708',
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
            
            "Промоции": [
                ["", "porcziya-dyuner-s-koka-kola-ken", "Порция дюнер с Кока Кола кен", "7,70", "", ""],
["", "nemski-dyuner-s-koka-kola-ken", "Немски дюнер с Кока Кола кен", "5,60", "", ""]

            ],

            "dunners": [
                ["", "klasicheski-dyuner", "Класически дюнер", "2,80", "", ""],
["", "dyuner-s-pileshki-shniczel", "Дюнер с пилешки шницел", "3,50", "", ""],
["", "nemski-dyuner", "Немски дюнер", "4,20", "", ""],
["", "porcziya-dyuner", "Порция дюнер", "7,00", "", ""],
["", "giros-dyuner", "Гирос дюнер", "3,50", "", ""]

            ],

            "drinks": [
                ["", "ajran", "Айран", "0,70", "", ""]

            ]
        }', 
        'slug' => 'dyuner-shakliyan',
        'business_name' => 'Дюнер ШАКЛИЯН',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sliven',
        'region' => 'Sliven',
        'postal_code' => '8808',
        'address' => 'ул. Българка 67',
        'address_additional' => '',
        'coords_x' => '42.68696622',
        'coords_y' => '26.34140003',
        'phone' => '+359897904827',
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
                ["", "amore", "Аморе", "4,90", "", ""],
["", "bianka", "Бианка", "4,90", "", ""],
["", "vegetariana", "Вегетариана", "4,20", "", ""],
["", "kalczone", "Калцоне", "5,60", "", ""],
["", "kaprichoza", "Капричоза", "5,60", "", ""],
["", "kuatro-di-karne", "Куатро Ди карне", "5,60", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "mis-kapriz", "Мис Каприз", "4,20", "", ""],
["", "picza-pm", "Пица ПМ", "5,60", "", ""],
["", "polo", "Поло", "4,90", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "6,30", "", ""],
["", "ramaczoti", "Рамацоти", "5,60", "", ""]

            ],

            "salads": [
                ["", "bambino", "Бамбино", "4,20", "", ""],
["", "vitamina", "Витамина", "4,20", "", ""],
["", "gradinarska", "Градинарска", "4,20", "", ""],
["", "grczka-salata", "Гръцка салата", "4,90", "", ""],
["", "zelena-salata", "Зелена салата", "4,90", "", ""],
["", "zelena-salata-s-pileshko-file", "Зелена салата с пилешко филе", "5,60", "", ""],
["", "zelena-salata-s-chetiri-sirena", "Зелена салата с четири сирена", "5,60", "", ""],
["", "salata-kapreze", "Салата Капрезе", "6,30", "", ""],
["", "katk", "Катък", "3,50", "", ""],
["", "latina", "Латина", "4,90", "", ""],
["", "mlechna", "Млечна", "3,50", "", ""],
["", "ovcharska", "Овчарска", "5,60", "", ""],
["", "parizh", "Париж", "4,90", "", ""],
["", "pikantna-razyadka-s-raczi", "Пикантна разядка с раци", "4,20", "", ""],
["", "primavera", "Примавера", "4,90", "", ""],
["", "redena-salata", "Редена салата", "6,30", "", ""],
["", "salata-listni-zelenchuczi", "Салата листни зеленчуци", "5,60", "", ""],
["", "svezha-salata-s-kinoa", "Свежа салата с киноа", "5,60", "", ""],
["", "sirena", "Сирена", "5,60", "", ""],
["", "spanachena-salata-ss-soevi-klnove", "Спаначена салата със соеви кълнове", "5,60", "", ""],
["", "tono", "Тоно", "5,60", "", ""],
["", "trakijska-salata", "Тракийска салата", "5,60", "", ""],
["", "czezar", "Цезар", "5,60", "350", ""],
["", "shopska-salata", "Шопска салата", "4,20", "370", ""]

            ],

            "starters": [
                ["", "czarevicza-s-kopr-i-maslo", "Царевица с копър и масло", "2,10", "", ""],
["", "prchiczi-ot-tikvichki-i-morkovi", "Пръчици от тиквички и моркови", "4,20", "", ""]

            ],

            "Морски Специалитети": [
                ["", "kalmari-na-tuch-s-dresing", "Калмари на туч с дресинг", "6,30", "200", ""],
["", "kalmari-pane", "Калмари пане", "6,30", "200", ""],
["", "lavrak-na-skara-s-dresing", "Лаврак на скара с дресинг", "8,40", "", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "7,00", "", ""],
["", "safrid-przhen", "Сафрид пържен", "7,00", "", ""],
["", "somga-s-kapersi-i-riben-dresing", "Сьомга с каперси и рибен дресинг", "9,80", "", ""],
["", "czupura-na-skara-s-dresing", "Цупура на скара с дресинг", "9,10", "", ""]

            ],

            "Основни Ястия": [
                ["", "glazirani-svinski-rebrcza-na-skara", "Глазирани свински ребърца на скара", "7,00", "450", ""],
["", "zapekanka-pm", "Запеканка ПМ", "6,30", "380", ""],
["", "zapekanka-amore", "Запеканка Аморе", "5,60", "450", ""],
["", "zapekanka-venecziya", "Запеканка Венеция", "5,60", "450", ""],
["", "zapekanka-grande", "Запеканка Гранде", "6,30", "", ""],
["", "kasapsko-meze", "Касапско мезе", "6,30", "450", ""],
["", "kontra-file-s-gbi-i-smetana", "Контра филе с гъби и сметана", "7,00", "400", ""],
["", "kontra-file-s-pechen-sos", "Контра филе с печен сос", "7,00", "350", ""],
["", "kscheta-smetanov-sos", "Късчета сметанов сос", "6,30", "450", ""],
["", "medaloni-s-pepr-sos", "Медальони с пепър сос", "10,50", "450", ""],
["", "panirani-filencza-ss-sos", "Панирани филенца със сос", "6,30", "", ""],
["", "pile-alfredo-s-manatarki", "Пиле Алфредо с манатарки", "7,00", "400", ""],
["", "pile-kolumbiya", "Пиле Колумбия", "6,30", "400", ""],
["", "pile-luchiya", "Пиле Лучия", "6,30", "400", ""],
["", "pile-na-shefa", "Пиле на шефа", "7,00", "400", ""],
["", "pile-parmidzhano", "Пиле Пармиджано", "7,00", "400", ""],
["", "pileshka-przhola-s-gben-sos", "Пилешка пържола с гъбен сос", "6,30", "450", ""],
["", "svinsko-ss-sotirani-zelenchuczi", "Свинско със сотирани зеленчуци", "7,00", "450", ""],
["", "shpikovan-vrat-s-pechen-sos", "Шпикован врат с печен сос", "6,30", "450", ""]

            ],

            "grill": [
                ["", "domashen-sudzhuk", "Домашен суджук", "5,60", "250", ""],
["", "krekhki-pileshki-kareta", "Крехки пилешки карета", "6,30", "200", ""],
["", "pileshka-przhola", "Пилешка пържола", "6,30", "200", ""],
["", "pileshki-shish", "Пилешки шиш", "2,80", "100", ""],
["", "pileshko-file", "Пилешко филе", "5,60", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "200", ""],
["", "svinski-shish", "Свински шиш", "3,50", "100", ""],
["", "svinsko-kyufte", "Свинско кюфте", "1,40", "80", ""],
["", "agneshki-kotleti-na-skara-ss-speczialna-marinata", "Агнешки котлети на скара със специална марината", "16,10", "", ""],
["", "agneshki-kyufteta-s-bulgur-na-skara", "Агнешки кюфтета с булгур на скара", "7,00", "", ""],
["", "kofta-kebap", "Кофта кебап", "9,10", "", ""],
["", "adana-kebap", "Адана кебап", "7,70", "", ""],
["", "teleshki-grdichki-na-skara-ss-speczialna-marinata", "Телешки гърдички на скара със специална марината", "8,40", "", ""]

            ],

            "specialties": [
                ["", "ezik-s-manatarki", "Език с манатарки", "7,70", "500", ""],
["", "meze-na-greben", "Мезе на гребен", "10,50", "400", ""],
["", "pateshki-srcza-na-skara", "Патешки сърца на скара", "6,30", "350", ""],
["", "pecheno-dzholanche", "Печено джоланче", "8,40", "", ""],
["", "svinski-rebrcza-na-shashlik", "Свински ребърца на шашлик", "8,40", "", ""],
["", "speczialitet-pm", "Специалитет ПМ", "7,00", "", ""]

            ],

            "pasta": [
                ["", "boloneze", "Болонезе", "5,60", "450", ""],
["", "karbonara", "Карбонара", "5,60", "450", ""],
["", "chetiri-sirena", "Четири сирена", "6,30", "450", ""],
["", "taliateli-ss-svinsko", "Талиатели със свинско", "6,30", "450", ""]

            ],

            "Пърленки": [
                ["", "kombinirana-prlenka", "Комбинирана пърленка", "3,50", "", ""],
["", "obiknovena-prlenka", "Обикновена пърленка", "1,40", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,80", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,80", "", ""],
["", "prlenka-ss-susam", "Пърленка със сусам", "2,10", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "", ""]

            ],

            "sauces": [
                ["", "1000-ostrova", "1000 Oстрова", "0,70", "", ""],
["", "barbekyu", "Барбекю", "0,70", "", ""],
["", "gorchicza", "Горчица", "0,70", "", ""],
["", "ketchup", "Кетчуп", "0,70", "", ""],
["", "majoneza", "Майонеза", "0,70", "", ""],
["", "pikanten-sos", "Пикантен сос", "0,70", "", ""],
["", "riben-dresing", "Рибен дресинг", "0,70", "", ""],
["", "sos-pm", "Сос ПМ", "0,70", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "", ""]

            ],

            "desserts": [
                ["", "bananov-split", "Бананов сплит", "4,20", "270", ""],
["", "biskvitena-torta", "Бисквитена торта", "2,10", "270", ""],
["", "palachinka-2br", "Палачинка 2бр.", "3,50", "300", ""]

            ],

            "wine": [
                ["", "mezek-shardone-katarzhina-estejt", "МЕЗЕК, Шардоне, Катаржина Естейт", "11,20", "", ""],
["", "mezek-sovinon-blan--pino-gri-katarzhina-estejt", "МЕЗЕК, Совиньон Блан & Пино Гри, Катаржина Естейт", "11,20", "", ""],
["", "kuantum-sovinon-blan-domejn-boyar", "КУАНТУМ, Совиньон. Блан, Домейн Бояр", "10,50", "", ""],
["", "kuantum-shardone-domejn-boyar", "КУАНТУМ, Шардоне, Домейн Бояр", "10,50", "", ""],
["", "kuantum-traminer-domejn-boyar", "КУАНТУМ, Траминер, Домейн Бояр", "11,20", "", ""],
["", "mezek-roze-ot-merlo--malbek--sira-katrazhina-estejt", "МЕЗЕК, Розе от Мерло & Малбек & Сира, Катражина Естейт", "11,20", "", ""],
["", "kuantum-roze-ot-pino-noar--sira", "КУАНТУМ, Розе от Пино Ноар & Сира", "11,20", "", ""],
["", "mezek-merlo-katarzhina-estejt", "МЕЗЕК, Мерло, Катаржина Естейт", "12,60", "", ""],
["", "mezek-sira-katarzhina-estejt", "МЕЗЕК, Сира, Катаржина Естейт", "12,60", "750", ""],
["", "mezek-mavrud-katarzhina-estejt", "МЕЗЕК, Мавруд, Катаржина Естейт", "12,60", "750", ""],
["", "mezek-kab-sovinon--mavrud-katarzhina-estejt", "МЕЗЕК, Каб. Совиньон & Мавруд, Катаржина Естейт", "12,60", "", ""],
["", "mezek-kab-sovinon-katarzhina-estejt", "МЕЗЕК, Каб. Совиньон Катаржина Естейт", "6,30", "", ""],
["", "bagra-merlo--kab-sovinon--kab-fran-koncherto-uajnri", "БАГРА, Мерло & Каб. Совиньон & Каб. Фран, Кончерто Уайнъри", "6,30", "", ""],
["", "kuantum-merlo-domejn-boyar", "КУАНТУМ, Мерло, Домейн Бояр", "11,20", "750", ""],
["", "kuantum-kab-sovinon-domej-boyar", "КУАНТУМ, Каб. Совиньон, Домей Бояр", "11,20", "750", ""],
["", "kuantum-sira--kab-sovinon-domejn-boyar", "КУАНТУМ, Сира & Каб. Совиньон, Домейн Бояр", "11,20", "750", ""],
["", "inpresione-koncherto-uajnri", "ИНПРЕСИОНЕ, Кончерто Уайнъри", "10,50", "750", ""]

            ],

            "drinks": [
                ["", "mineralna-voda-devin", "Минерална вода Девин", "0,70", "", ""],
["", "red-bul", "Ред Бул", "2,80", "", ""]

            ]
        }', 
        'slug' => 'pm-grill-and-pizza',
        'business_name' => 'PM Grill and Pizza',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Shumen',
        'region' => 'Shumen',
        'postal_code' => '9703',
        'address' => 'Парк &quot; Студентски&quot;',
        'address_additional' => '',
        'coords_x' => '43.27596571',
        'coords_y' => '26.9376859',
        'phone' => '+359886408698',
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
            
            "Летни предложения": [
                ["", "salata-briz", "Салата Бриз", "4,20", "350", ""],
["", "chesnovi-brusketi-s-patladzhanena-razyadka", "Чеснови брускети с патладжанена разядка", "0,00", "", ""],
["", "pecheni-chushki-s-domateno-chesnov-sos", "Печени чушки с доматено чеснов сос", "2,80", "300", ""],
["", "kachamak-s-koze-sirene-i-parchencza-sudzhuk", "Качамак с козе сирене и парченца суджук", "3,50", "400", ""],
["", "zapekanka-melanzaniya", "Запеканка Меланзания", "3,50", "300", ""],
["", "oriz-po-sredizemnomorski-s-mideni-yadki", "Ориз по средиземноморски с мидени ядки", "4,20", "300", ""],
["", "zadusheni-svinski-dreboliki-s-luk-sukhi-chushki-vrkhu-kanape-ot-brkani-yajcza", "Задушени свински дреболики с лук, сухи чушки върху канапе от бъркани яйца", "4,90", "350", ""],
["", "przheni-kartofi-s-yajcza-sirene-bekon-i-chesnov-sos", "Пържени картофи с яйца, сирене, бекон и чеснов сос", "3,50", "400", ""],
["", "taliateli-s-pileshko-file-cheri-domati-parmezan-presen-bosilek-i-smetana", "Талиатели с пилешко филе, чери домати, пармезан, пресен босилек и сметана", "4,20", "500", ""],
["", "svinski-vrat-s-med-i-yablki-i-pecheni-kartofi", "Свински врат с мед и ябълки и печени картофи", "6,30", "400", ""],
["", "ribni-filencza-s-parmezan-i-svezha-salata", "Рибни филенца с пармезан и свежа салата", "4,20", "350", ""],
["", "przhen-safrid-s-pstra-salata", "Пържен сафрид с пъстра салата", "2,80", "400", ""],
["", "stekcheta-ot-tolstolob-s-kartofena-salata", "Стекчета от толстолоб с картофена салата", "4,90", "400", ""],
["", "yunashko-meshano-plato", "Юнашко мешано плато", "31,50", "2300", ""]

            ],

            "lunch": [
                ["", "shkembe-chorba", "Шкембе чорба", "1,40", "", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "", ""],
["", "bob-s-nadenicza", "Боб с наденица", "2,10", "", ""],
["", "kashkaval-pane-s-garnitura-domati-i-krastaviczi", "Кашкавал пане с гарнитура домати и краставици", "2,80", "350", ""],
["", "byala-riba-pane", "Бяла риба-пане", "2,80", "200", ""],
["", "kartofeni-kyufteta-ss-sos", "Картофени кюфтета със сос", "2,10", "300", ""],
["", "svinski-shniczel-s-garnitura-kartofena-salata", "Свински шницел с гарнитура картофена салата", "2,80", "300", ""],
["", "tarator", "Таратор", "0,70", "", ""],
["", "zelena-salata", "Зелена салата", "2,10", "", ""],
["", "golyam-vlchi-sach", "Голям Вълчи сач", "11,90", "1000", ""]

            ],

            "salads": [
                ["", "domashna-salata", "Домашна салата", "2,80", "350", ""],
["", "manastirska-salata", "Манастирска салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "450", ""],
["", "shopska-salata", "Шопска салата", "2,10", "400", ""],
["", "nashenska-salata", "Нашенска салата", "2,80", "350", ""],
["", "zimna-salata", "Зимна салата", "2,10", "400", ""],
["", "vitaminozna-salata", "Витаминозна салата", "2,80", "300", ""],
["", "salata-tunna", "Салата Тунна", "3,50", "350", ""],
["", "czezar-s-pileshko", "Цезар с пилешко", "4,20", "400", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "400", ""],
["", "chukorovska-salata", "Чукоровска салата", "2,80", "350", ""],
["", "snezhanka", "Снежанка", "2,10", "250", ""],
["", "meraklijska-salata", "Мераклийска салата", "4,20", "400", ""],
["", "krchmarska-razyadka", "Кръчмарска разядка", "4,20", "650", ""],
["", "vlcha-salata", "Вълча салата", "4,20", "400", ""]

            ],

            "Сухи мезета": [
                ["", "pushena-slanina", "Пушена сланина", "2,10", "", ""],
["", "lukanka", "Луканка", "3,50", "", ""],
["", "sudzhuk", "Суджук", "3,50", "", ""],
["", "pusheno-svinsko-file", "Пушено свинско филе", "2,10", "", ""],
["", "kolbasarsko-ploto", "Колбасарско плото", "14,00", "", ""],
["", "file-elena", "Филе елена", "4,20", "", ""],
["", "pastrma-kajzer", "Пастърма Кайзер", "4,20", "", ""]

            ],

            "Топли предястия": [
                ["", "plneni-gbi-s-bekon-i-kashkaval", "Пълнени гъби с бекон и кашкавал", "3,50", "350", ""],
["", "panirani-lucheni-krgcheta-s-barbekyu-sos", "Панирани лучени кръгчета с барбекю сос", "2,80", "280", ""],
["", "kalmari-pane", "Калмари пане", "4,20", "250", ""],
["", "kachamak-ss-sirene-i-maslo", "Качамак със сирене и масло", "2,80", "300", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "350", ""],
["", "medeni-pileshki-krilcza", "Медени пилешки крилца", "3,50", "", ""],
["", "pileshki-filencza-s-kashkaval-i-gbi", "Пилешки филенца с кашкавал и гъби", "4,90", "350", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "kartofi-po-selski-s-kopr-i-chesn", "Картофи по селски с копър и чесън", "2,10", "250", ""],
["", "rakieni-khapki", "Ракиени хапки", "4,20", "300", ""],
["", "petchni-parti-butcheta-s-barbekyu-sos", "Петъчни парти бутчета с барбекю сос", "6,30", "1000", ""],
["", "khapki-snrajz", "Хапки сънрайз", "3,50", "300", ""],
["", "svezha-zapekanka", "Свежа запеканка", "3,50", "400", ""],
["", "bob-po-turlashki", "Боб по турлашки", "4,90", "600", ""],
["", "pileshki-zhulieni-s-limonov-dresing", "Пилешки жулиени с лимонов дресинг", "4,20", "", ""]

            ],

            "Клуб Хапки": [
                ["", "khapki-kapriz", "Хапки Каприз", "4,20", "300", ""],
["", "khapki-paradajz", "Хапки Парадайз", "3,50", "300", ""],
["", "roshavo-pile", "Рошаво пиле", "4,20", "300", ""],
["", "topcheta-ot-kashkaval-s-yajchena-korichka", "Топчета от кашкавал с яйчена коричка", "2,80", "250", ""],
["", "sirencza-sgusheni-v-czarevichni-lyuspi", "Сиренца сгушени в царевични люспи", "2,80", "250", ""],
["", "khapki-asorti", "Хапки Асорти", "9,80", "750", ""]

            ],

            "Дреболийки": [
                ["", "pileshki-drobcheta-po-lovdzhijski", "Пилешки дробчета по Ловджийски", "4,20", "400", ""],
["", "svinski-cheren-drob-na-skara", "Свински черен дроб на скара", "2,80", "300", ""],
["", "agneshki-drebolijki-s-presen-luk-i-maslo-na-tigan", "Агнешки дреболийки с пресен лук и масло на тиган", "4,20", "300", ""],
["", "svinski-dzholan-s-kopr-i-chesn-na-tigan", "Свински джолан с копър и чесън на тиган", "3,50", "250", ""],
["", "svinski-ushencza-na-skara", "Свински ушенца на скара", "3,50", "300", ""],
["", "topla-pacha", "Топла пача", "3,50", "300", ""],
["", "svinski-bbreczi-zadusheni-na-tigan", "Свински бъбреци задушени на тиган", "3,50", "250", ""],
["", "svinski-cherva-na-skara", "Свински черва на скара", "3,50", "300", ""],
["", "pileshki-srcza-v-maslo-s-kopr-i-chesn", "Пилешки сърца в масло с копър и чесън", "3,50", "250", ""],
["", "svinski-srcza-s-kopr-i-chesn", "Свински сърца с копър и чесън", "3,50", "250", ""],
["", "agneshka-glavichka-s-presen-luk-i-maslo-na-tigan", "Агнешка главичка с пресен лук и масло на тиган", "4,20", "250", ""],
["", "pileshki-vodenichki-po-selski", "Пилешки воденички по селски", "4,20", "400", ""],
["", "pileshki-trtki", "Пилешки трътки", "2,80", "", ""],
["", "teleshko-shkembe", "Телешко шкембе", "4,20", "", ""],
["", "svinski-ezik", "Свински език", "3,50", "", ""],
["", "pileshki-srcza-po-shopski", "Пилешки сърца по шопски", "4,20", "", ""]

            ],

            "Майсторлъшки ястия от пилешко": [
                ["", "pile-lyutika", "Пиле Лютика", "3,50", "400", ""],
["", "pile-gorgonzola", "Пиле Горгонзола", "5,60", "400", ""],
["", "pile-pilar", "Пиле Пилар", "4,90", "350", ""],
["", "pecheno-pile-ss-sotirani-zelenchuczi", "Печено пиле със сотирани зеленчуци", "8,40", "", ""],
["", "medeni-filencza", "Медени филенца", "5,60", "450", ""],
["", "rodopska-topenicza", "Родопска топеница", "4,90", "500", ""],
["", "drusano-pile", "Друсано пиле", "4,90", "400", ""],
["", "pile-fantaziya", "Пиле Фантазия", "4,90", "", ""]

            ],

            "Майторлъшки ястия от свинско": [
                ["", "drusan-kebap", "Друсан Кебап", "4,20", "350", ""],
["", "svinska-przhenicza", "Свинска пърженица", "4,20", "400", ""],
["", "iznenadata-na-baba", "Изненадата на баба", "5,60", "400", ""],
["", "svinski-kotlet-s-gben-dip", "Свински котлет с гъбен дип", "4,90", "350", ""],
["", "svinski-dzholan-po-majstorlshki", "Свински джолан по майсторлъшки", "7,70", "450", ""],
["", "svinsko-meso-po-vidinski", "Свинско месо по Видински", "6,30", "350", ""],
["", "svinski-grdi-po-siromashki", "Свински гърди по сиромашки", "6,30", "", ""],
["", "svinski-kotlet-po-gorski", "Свински котлет по горски", "5,60", "", ""],
["", "svinski-kotlet-s-gorski-dip", "Свински котлет с горски дип", "5,60", "", ""],
["", "velingradski-drusan-kebap", "Велинградски друсан кебап", "4,20", "", ""],
["", "svinsko-dzholanche-s-kopr", "Свинско джоланче с копър", "4,20", "", ""]

            ],

            "Майсторлъшки ястия от телешко и агнешко": [
                ["", "shniczel-po-vienski", "Шницел по Виенски", "6,30", "300", ""],
["", "meshanicza", "Мешаница", "4,90", "600", ""]

            ],

            "Вкусна скара и барбекю": [
                ["", "svinska-vratna-przhola-bez-kost", "Свинска вратна пържола без кост", "4,20", "250", ""],
["", "pusheni-nadenichki", "Пушени наденички", "3,50", "300", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "svinsko-krnache", "Свинско кърначе", "1,40", "150", ""],
["", "svinski-bekon", "Свински бекон", "4,90", "300", ""],
["", "pleskavicza", "Плескавица", "3,50", "300", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "250", ""],
["", "meshana-skara", "Мешана скара", "9,80", "660", ""],
["", "gyuveche-fantaziya", "Гювече фантазия", "4,90", "350", ""],
["", "svinski-rebra", "Свински ребрa", "6,30", "400", ""],
["", "svinski-grdi", "Свински гърди", "6,30", "400", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "", ""],
["", "stek-platinena-skara", "Стек платинена скара", "6,30", "", ""],
["", "yambolska-razkhodka", "Ямболска разходка", "5,60", "", ""],
["", "lyubovno-sache", "Любовно саче", "4,90", "", ""],
["", "selsko-kotlencze", "Селско котленце", "6,30", "", ""],
["", "kavrma-po-radomirski", "Кавърма по радомирски", "4,90", "", ""]

            ],

            "Сачове и шашлици": [
                ["", "vlchi-sach", "Вълчи сач", "7,00", "", ""],
["", "babina-gradina", "Бабина градина", "5,60", "500", ""],
["", "svinski-shashlik", "Свински шашлик", "10,50", "800", ""],
["", "khanski-trizbecz", "Хански тризъбец", "14,00", "", ""]

            ],

            "garnish": [
                ["", "studena-garnitura", "Студена гарнитура", "0,70", "150", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "1,40", "150", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "150", ""],
["", "kartofena-salata", "Картофена салата", "1,40", "150", ""],
["", "kartofi-s-shunka-i-bekon", "Картофи с шунка и бекон", "3,50", "", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "", ""]

            ],

            "Рибни блюда": [
                ["", "pstrva-na-skara-s-limon-i-kopr", "Пъстърва на скара с лимон и копър", "5,60", "350", ""],
["", "skumriya-na-skara", "Скумрия на скара", "3,50", "350", ""],
["", "przhen-khek", "Пържен хек", "3,50", "300", ""],
["", "dunavska-riba", "Дунавска риба", "4,90", "300", ""],
["", "czacza", "Цаца", "2,10", "250", ""],
["", "czipura-na-plocha-s-limon-zekhtin-i-rigan", "Ципура на плоча с лимон зехтин и риган", "6,30", "", ""],
["", "lavrak-na-skara-s-limon-zekhtin-i-rigan", "Лаврак на скара с лимон зехтин и риган", "6,30", "", ""]

            ],

            "bread": [
                ["", "prepechena-filijka", "Препечена филийка", "0,00", "", ""],
["", "chesnova-bageta", "Чеснова багета", "1,40", "", ""],
["", "prlenka", "Пърленка", "0,00", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "150", ""]

            ],

            "Пици и спагети": [
                ["", "dyavolo", "Дяволо", "2,80", "", ""],
["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "verdi", "Верди", "2,80", "", ""],
["", "kalczone", "Калцоне", "2,80", "", ""],
["", "picza-na-zavedenieto", "Пица на заведението", "5,60", "", ""],
["", "detsko-menyu", "Детско меню", "4,20", "", ""],
["", "semejna-picza-10", "Семейна пица (10", "13,30", "", ""],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "500", ""],
["", "spageti-karbonara", "Спагети Карбонара", "3,50", "500", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "", ""],
["", "palachinka", "Палачинка", "1,40", "", ""]

            ],

            "sauces": [
                ["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "italianski-sos", "Италиански сос", "0,70", "150", ""],
["", "ketchup", "Кетчуп", "0,70", "150", ""],
["", "majoneza", "Майонеза", "0,70", "150", ""],
["", "gorchicza", "Горчица", "0,70", "150", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "chili-sos", "Чили сос", "0,00", "50", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "50", ""],
["", "zekhtin", "Зехтин", "0,70", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""]

            ]
        }', 
        'slug' => 'restorant-pri-miro',
        'business_name' => 'Ресторант При Миро',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vidin',
        'region' => 'Vidin',
        'postal_code' => '3700',
        'address' => 'ул. „Вела Пеева“ 16',
        'address_additional' => '',
        'coords_x' => '43.99712599',
        'coords_y' => '22.88098669',
        'phone' => '+359878418200',
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
                ["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "prezident", "Президент", "2,80", "", ""],
["", "marta-bela", "Марта бела", "2,80", "", ""],
["", "salami", "Салами", "2,80", "", ""],
["", "polo", "Поло", "2,80", "", ""],
["", "proletna", "Пролетна", "2,80", "", ""],
["", "mastrshef", "Мастършеф", "3,50", "", ""],
["", "giros", "Гирос", "13,30", "", ""],
["", "margarita", "Маргарита", "2,80", "", ""],
["", "vegetariana", "Вегетариана", "9,80", "", ""],
["", "kalczone-zatvorena", "Калцоне затворена", "2,10", "", ""]

            ]
        }', 
        'slug' => 'picariya-mama-mia',
        'business_name' => 'Пицария Mama Mia',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Silistra',
        'region' => 'Silistra',
        'postal_code' => '7500',
        'address' => 'пл. Свобода 2',
        'address_additional' => '',
        'coords_x' => '44.1197597',
        'coords_y' => '27.2622365',
        'phone' => '+359889370154',
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
                ["", "zdravoslovna-salata", "Здравословна салата", "4,90", "", ""],
["", "miks-salatki-s-kinoa", "Микс салатки с киноа", "4,90", "", ""],
["", "svezhi-salatki-ss-somga", "Свежи салатки със сьомга", "4,90", "", ""],
["", "svezhi-salatki-ss-sino-sirene-i-cheri-domati", "Свежи салатки със синьо сирене и чери домати", "4,90", "", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "", ""],
["", "shopska-salata", "Шопска салата", "4,20", "", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "", ""],
["", "makedonska-salata", "Македонска салата", "4,20", "", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "", ""]

            ],

            "starters": [
                ["", "pileshki-purichki", "Пилешки пурички", "4,90", "250", ""],
["", "pileshki-filencza-ss-susam", "Пилешки филенца със сусам", "4,90", "", ""],
["", "bejbi-moczarelki-ss-sladko-ot-borovinki", "Бейби моцарелки със сладко от боровинки", "4,90", "250", ""],
["", "kartofeni-usmivki", "Картофени усмивки", "3,50", "250", ""],
["", "kartofeni-noazeti", "Картофени ноазети", "2,80", "250", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "3,50", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,90", "250", ""],
["", "sirene-pane", "Сирене пане", "4,20", "250", ""],
["", "topeni-sirencza-ss-sladko-ot-borovinki", "Топени сиренца със сладко от боровинки", "4,90", "250", ""],
["", "czarigradski-kyuftencza", "Цариградски кюфтенца", "4,90", "", ""],
["", "zapecheni-kartofki-ss-shunka-i-sirene", "Запечени картофки със шунка и сирене", "4,20", "", ""],
["", "zapecheni-kartofi-s-bekon-i-yajcze", "Запечени картофи с бекон и яйце", "4,90", "", ""],
["", "kartofi-uedzhis", "Картофи Уеджис", "2,80", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "", ""],
["", "kartofen-chips", "Картофен чипс", "2,80", "", ""]

            ],

            "Бургери и сандвичи": [
                ["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "1,40", "", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "1,40", "", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "1,40", "", ""],
["", "sandvich-s-kajma-i-kashkaval", "Сандвич с кайма и кашкавал", "1,40", "", ""],
["", "pileshki-burger", "Пилешки бургер", "4,90", "", ""],
["", "teleshki-burger", "Телешки бургер", "5,60", "", ""]

            ],

            "pizza": [
                ["", "brazeola", "Бразеола", "6,30", "", ""],
["", "napoli", "Наполи", "4,90", "", ""],
["", "fantaziya", "Фантазия", "6,30", "", ""],
["", "byagashho-pile", "Бягащо пиле", "4,90", "", ""],
["", "primavera", "Примавера", "4,90", "", ""],
["", "kapreze", "Капрезе", "4,20", "", ""],
["", "chorizo", "Чоризо", "5,60", "", ""],
["", "peperoni", "Пеперони", "4,20", "", ""],
["", "toskana", "Тоскана", "4,20", "", ""],
["", "feshn", "Фешън", "4,90", "", ""],
["", "margarita", "Маргарита", "2,80", "", ""],
["", "dyavolska", "Дяволска", "4,20", "", ""],
["", "picza-krenvirsh", "Пица кренвирш", "3,50", "", ""],
["", "salsiche", "Салсиче", "4,20", "", ""],
["", "korsikano", "Корсикано", "4,90", "", ""],
["", "ali-baba", "Али баба", "4,90", "", ""],
["", "chetiri-sirena", "Четири сирена", "4,90", "", ""],
["", "proshuto-krudo", "Прошуто крудо", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "moryashka", "Моряшка", "5,60", "", ""],
["", "byala-picza", "Бяла пица", "4,20", "", ""],
["", "meri-cheri", "Мери чери", "4,90", "", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "", ""],
["", "chili-sos", "Чили сос", "0,00", "", ""],
["", "sladko---lyutiv-sos", "Сладко - лютив сос", "0,00", "", ""],
["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "gorchicza", "Горчица", "0,00", "", ""]

            ],

            "desserts": [
                ["", "krem-panakota", "Крем панакота", "1,40", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/977362.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/977363.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajryan", "Айрян", "1,40", "500", ""],
["", "samrsbi", "Самърсби", "2,10", "330", ""],
["", "red-bul", "Ред Бул", "2,10", "255", ""],
["", "bira-tuborg", "Бира Туборг", "1,40", "500", ""],
["", "bira-shumen", "Бира Шумен", "1,40", "500", ""],
["", "vino-kvantum", "Вино Квантум", "4,90", "375", ""]

            ]
        }', 
        'slug' => 'fashion-cafe',
        'business_name' => 'Fashion Cafe &amp; Pizza',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Velingrad',
        'region' => 'Velingrad',
        'postal_code' => '4600',
        'address' => 'ул. Юндола 33',
        'address_additional' => '',
        'coords_x' => '42.02764219',
        'coords_y' => '23.9816955',
        'phone' => '+359894639640',
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
            
            "soups": [
                ["", "bob-chorba", "Боб чорба", "1,40", "", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "", ""],
["", "leshha", "Леща", "0,70", "", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "1,40", "", ""],
["", "zelenchukova-krem-supa", "Зеленчукова крем супа", "1,40", "", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "", ""],
["", "teleshki-kurban", "Телешки курбан", "1,40", "", ""],
["", "pileshka-supa", "Пилешка супа", "0,70", "", ""],
["", "svinski-kurban", "Свински курбан", "1,40", "", ""],
["", "spanachena-supa", "Спаначена супа", "0,70", "", ""],
["", "krem-supa-ot-chervena-leshha", "Крем супа от червена леща", "1,40", "", ""]

            ],

            "maindishes": [
                ["", "kyufteta-po-chirpanski", "Кюфтета по чирпански", "2,10", "", ""],
["", "rizoto-s-pile", "Ризото с пиле", "3,50", "", ""],
["", "plneno-butche-s-oriz-i-gbi", "Пълнено бутче с ориз и гъби", "3,50", "", ""],
["", "omlet-ss-sirene-i-kashkaval", "Омлет със сирене и кашкавал", "2,10", "", ""],
["", "pile-sote", "Пиле соте", "3,50", "", ""],
["", "rulo-stefani-s-garnitura", "Руло стефани с гарнитура", "2,10", "", ""],
["", "slavyanski-gyuvech", "Славянски гювеч", "2,80", "", ""],
["", "butche-s-oriz", "Бутче с ориз", "2,10", "", ""],
["", "butche-s-kartofi", "Бутче с картофи", "2,10", "", ""],
["", "pile-zhulien", "Пиле жулиен", "3,50", "", ""],
["", "pile-v-palachinka", "Пиле в палачинка", "2,80", "", ""],
["", "ogreten", "Огретен", "2,10", "", ""],
["", "zelenchukov-gyuvech", "Зеленчуков гювеч", "2,10", "", ""],
["", "pileshko-file-v-gben-sos-s-garnitura-pyure", "Пилешко филе в гъбен сос с гарнитура пюре", "3,50", "", ""],
["", "panirano-pileshko-rulo-s-shunka-i-kashkaval", "Панирано пилешко руло с шунка и кашкавал", "2,80", "", ""],
["", "svinska-przhola-v-gben-sos-s-garnitura-pyure", "Свинска пържола в гъбен сос с гарнитура пюре", "3,50", "", ""],
["", "svinski-przhki-s-luk-i-gbi", "Свински пръжки с лук и гъби", "3,50", "", ""],
["", "musaka", "Мусака", "2,10", "", ""],
["", "pasta-boloneze", "Паста Болонезе", "2,10", "", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "", ""],
["", "svinsko-ss-zele", "Свинско със зеле", "2,10", "", ""],
["", "svinsko-s-kartofi", "Свинско с картофи", "2,80", "", ""],
["", "svinsko-po-manastirski", "Свинско по манастирски", "2,80", "", ""],
["", "skumriya-na-furna", "Скумрия на фурна", "1,40", "", ""],
["", "pstrva-na-furna", "Пъстърва на фурна", "4,20", "", ""],
["", "teleshki-dzholan-s-kartofi", "Телешки джолан с картофи", "3,50", "", ""],
["", "teleshko-s-grakh", "Телешко с грах", "3,50", "", ""],
["", "teleshki-kebap", "Телешки кебап", "2,80", "", ""],
["", "svinski-tas-kebap", "Свински тас кебап", "2,10", "", ""],
["", "svinski-vinen-kebap", "Свински винен кебап", "2,10", "", ""],
["", "svinski-flejki-na-skara-s-garnitura", "Свински флейки на скара с гарнитура", "3,50", "", ""],
["", "vratna-przhola-na-skara-s-garnitura", "Вратна пържола на скара с гарнитура", "2,80", "", ""],
["", "oriz-ss-spanak", "Ориз със спанак", "1,40", "", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "1,40", "", ""],
["", "oriz-s-gbi", "Ориз с гъби", "2,10", "", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "2,10", "", ""],
["", "solena-palachinka-ss-sirene-i-kashkaval", "Солена палачинка със сирене и кашкавал", "2,10", "", ""],
["", "marinovani-rebrcza-s-kartofi", "Мариновани ребърца с картофи", "3,50", "", ""],
["", "teleshko-zadusheno", "Телешко задушено", "2,80", "", ""],
["", "zadusheni-kartofi", "Задушени картофи", "1,40", "", ""],
["", "kartofi-s-gbi", "Картофи с гъби", "2,10", "", ""],
["", "svinski-dzholan-s-kartofi", "Свински джолан с картофи", "3,50", "", ""],
["", "pecheni-kartofki", "Печени картофки", "1,40", "", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "0,70", "", ""],
["", "plnen-patladzhan-s-kajma-zapechen-s-kashkaval", "Пълнен патладжан с кайма запечен с кашкавал", "2,10", "", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,10", "", ""],
["", "svinsko-s-oriz", "Свинско с ориз", "2,80", "", ""],
["", "svinski-dzholan-s-oriz", "Свински джолан с ориз", "2,80", "", ""],
["", "mesno-gnezdo-s-garnitura", "Месно гнездо с гарнитура", "2,10", "", ""],
["", "kyuftencza-po-czarigradski", "Кюфтенца по цариградски", "2,10", "", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "2,80", "", ""],
["", "pileshki-drobcheta-v-maslo", "Пилешки дробчета в масло", "2,80", "", ""],
["", "drobcheta-kavrma", "Дробчета кавърма", "2,80", "", ""],
["", "krilcza-na-furna-ss-zadusheni-kartofki", "Крилца на фурна със задушени картофки", "2,80", "", ""],
["", "svinska-kavrma", "Свинска кавърма", "3,50", "", ""],
["", "gyuveche-po-rodopski", "Гювече по родопски", "2,10", "", ""],
["", "gyuveche-po-shopski", "Гювече по шопски", "2,10", "", ""],
["", "kavrdisano-svinsko-meso", "Кавърдисано свинско месо", "3,50", "", ""],
["", "przheni-kyuftencza-s-kartofi", "Пържени кюфтенца с картофи", "2,10", "", ""],
["", "kapama", "Капама", "3,50", "", ""],
["", "plneni-chushki-s-oriz", "Пълнени чушки с ориз", "2,10", "", ""],
["", "plneni-chushki-s-kajma-i-oriz", "Пълнени чушки с кайма и ориз", "2,80", "", ""],
["", "bob-s-kyufteta", "Боб с кюфтета", "2,80", "", ""],
["", "chushka-byurek", "Чушка бюрек", "0,70", "", ""],
["", "plnen-kartof-ss-sirene-zapechen-s-kashkaval", "Пълнен картоф със сирене запечен с кашкавал", "2,10", "", ""],
["", "lozovi-sarmi", "Лозови сарми", "0,00", "", ""],
["", "zelevi-sarmi", "Зелеви сарми", "0,00", "", ""],
["", "flejki-s-kartofi", "Флейки с картофи", "2,80", "", ""],
["", "agneshka-drob-sarma", "Агнешка дроб сарма", "3,50", "", ""],
["", "teleshko-s-oriz", "Телешко с ориз", "2,80", "", ""],
["", "pile-po-gradinarski", "Пиле по градинарски", "2,80", "", ""],
["", "pileshko-vreteno", "Пилешко вретено", "3,50", "", ""],
["", "pileshka-przhola-v-smetanov-sos-i-pyure", "Пилешка пържола в сметанов сос и пюре", "3,50", "", ""],
["", "flejki-s-oriz", "Флейки с ориз", "2,10", "", ""],
["", "butche-po-zlatogradski", "Бутче по златоградски", "3,50", "", ""],
["", "agneshko-s-oriz", "Агнешко с ориз", "3,50", "", ""],
["", "svinski-medaloni-s-pecheni-zellenchuczi", "Свински медальони с печени зелленчуци", "1,40", "", ""],
["", "kartofi-po-selski", "Картофи по селски", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "kebapche", "Кебапче", "2,80", "", ""],
["", "svinska-vratna-przhola-na-skara", "Свинска вратна пържола на скара", "2,10", "", ""],
["", "przhola-ot-but", "Пържола от бут", "1,40", "", ""],
["", "pleskavicza", "Плескавица", "0,70", "", ""]

            ]
        }', 
        'slug' => 'nevrokopska-kuhnya',
        'business_name' => 'Неврокопска кухня',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Gotse Delchev',
        'region' => 'Gotse Delchev',
        'postal_code' => '2900',
        'address' => 'ул. „Дунав“ 11',
        'address_additional' => '',
        'coords_x' => '41.57099692',
        'coords_y' => '23.73763372',
        'phone' => '+359876966766',
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
            
            "Тостери": [
                ["", "tost-s-shunka", "Тост с шунка", "1,40", "200", ""],
["", "tost-s-pileshka-shunka", "Тост с пилешка шунка", "1,40", "200", ""],
["", "tost-s-shpek-salam", "Тост с шпек салам", "1,40", "200", ""],
["", "tost-s-bekon", "Тост с бекон", "1,40", "200", ""]

            ],

            "Солени палачинки": [
                ["", "palachinka-s-borovinki-i-sirene", "Палачинка с боровинки и сирене", "0,70", "200", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "0,70", "180", ""],
["", "palachinka-s-lyutenicza-i-sirene", "Палачинка с лютеница и сирене", "0,70", "200", ""],
["", "palachinka-s-med-i-sirene", "Палачинка с мед и сирене", "0,70", "200", ""],
["", "palachinka-s-ruska-salata", "Палачинка с руска салата", "0,70", "180", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "0,70", "180", ""],
["", "palachinka-s-kashkaval-i-shunka", "Палачинка с кашкавал и шунка", "0,70", "180", ""],
["", "palachinka-s-kashkaval-i-pileshko-file", "Палачинка с кашкавал и пилешко филе", "1,40", "180", ""]

            ],

            "pizza": [
                ["", "kapreze", "Капрезе", "2,10", "", ""],
["", "margarita", "Маргарита", "1,40", "", ""],
["", "vegetariana", "Вегетариана", "2,10", "", ""],
["", "italianska", "Италианска", "2,10", "", ""],
["", "chetiri-sirena", "Четири сирена", "2,10", "", ""],
["", "oliveti", "Оливети", "2,80", "", ""],
["", "proshuto", "Прошуто", "2,10", "", ""],
["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "karbonare", "Карбонаре", "2,10", "", ""],
["", "chetiri-sezona", "Четири сезона", "2,10", "", ""],
["", "peperoni", "Пеперони", "2,10", "", ""],
["", "napoli", "Наполи", "2,10", "", ""],
["", "roma", "Рома", "2,10", "", ""],
["", "laczio", "Лацио", "2,10", "", ""],
["", "chiken-speczial", "Чикен специал", "2,80", "", ""],
["", "kalczone", "Калцоне", "2,80", "", ""],
["", "bianka", "Бианка", "2,10", "", ""],
["", "khavaj", "Хавай", "2,10", "", ""],
["", "alfredo", "Алфредо", "2,10", "", ""],
["", "gbena-picza", "Гъбена пица", "1,40", "", ""],
["", "picza-ton", "Пица тон", "2,80", "", ""],
["", "detsko-menyu", "Детско меню", "2,80", "", ""]

            ],

            "Фамилни пици": [
                ["", "margarita", "Маргарита", "7,00", "1500", ""],
["", "kapreze", "Капрезе", "11,90", "1500", ""],
["", "chetiri-sirena", "Четири сирена", "10,50", "1500", ""],
["", "italianska", "Италианска", "11,20", "1500", ""],
["", "vegetariana", "Вегетариана", "10,50", "1500", ""],
["", "oliveti", "Оливети", "11,20", "1500", ""],
["", "proshuto", "Прошуто", "9,80", "1500", ""],
["", "kaprichoza", "Капричоза", "11,90", "1500", ""],
["", "karbonare", "Карбонаре", "10,50", "1500", ""],
["", "chetiri-sezona", "Четири сезона", "10,50", "1500", ""],
["", "peperoni", "Пеперони", "9,80", "1500", ""],
["", "napoli", "Наполи", "9,80", "1500", ""],
["", "kalczone", "Калцоне", "11,20", "1500", ""],
["", "laczio", "Лацио", "11,20", "1500", ""],
["", "roma", "Рома", "10,50", "1500", ""],
["", "chiken-speczial", "Чикен специал", "11,20", "1500", ""],
["", "bianka", "Бианка", "10,50", "1500", ""],
["", "khavaj", "Хавай", "9,80", "1500", ""],
["", "alfredo", "Алфредо", "11,90", "1500", ""],
["", "gbena-picza", "Гъбена пица", "10,50", "1500", ""],
["", "picza-ton", "Пица тон", "11,20", "1500", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "200", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "200", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "0,70", "240", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,00", "150", ""]

            ],

            "Сладки палачинки": [
                ["", "palachinka-s-shokolad", "Палачинка с шоколад", "0,70", "180", ""],
["", "palachinka-s-shokolad-i-yagodi", "Палачинка с шоколад и ягоди", "0,70", "230", ""],
["", "palachinka-s-med", "Палачинка с мед", "0,70", "180", ""],
["", "palachinka-s-byal-shokolad", "Палачинка с бял шоколад", "0,70", "180", ""],
["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "0,70", "230", ""],
["", "palachinka-ss-sladko-ot-chereshi", "Палачинка със сладко от череши", "0,70", "200", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "0,70", "200", ""],
["", "palachinka-ss-sladko-ot-gorski-plodove", "Палачинка със сладко от горски плодове", "0,70", "200", ""],
["", "palachinka-s-byal-shokolad-i-banan", "Палачинка с бял шоколад и банан", "0,70", "230", ""],
["", "palachinka-ss-sladko-ot-yagodi", "Палачинка със сладко от ягоди", "0,70", "200", ""]

            ],

            "sauces": [
                ["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "pikanten-sos", "Пикантен сос", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "sladko-chili", "Сладко чили", "0,00", "30", ""],
["", "barbekyu-meden-sos", "Барбекю меден сос", "0,00", "40", ""],
["", "barbekyu-klasik-sos", "Барбекю класик сос", "0,00", "40", ""],
["", "majoneza-s-podpravki", "Майонеза с подправки", "0,00", "50", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "0,70", "330", ""],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "0,70", "330", ""]

            ],

            "beer": [
                ["", "kamenicza-ken", "Каменица кен", "0,70", "500", ""],
["", "astika-ken", "Астика кен", "0,70", "500", ""],
["", "burgasko-ken", "Бургаско кен", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'pizza-home',
        'business_name' => 'Pizza Home',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Razgrad',
        'region' => 'Razgrad',
        'postal_code' => '7200',
        'address' => 'ул. Марица 3',
        'address_additional' => '',
        'coords_x' => '43.52668308',
        'coords_y' => '26.52137489',
        'phone' => '+3590898988944',
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
            
            "Менюта": [
                ["", "kebapcheta-3br--garnitura", "Кебапчета (3бр) + гарнитура", "3,50", "", ""],
["", "teleshki-kyufteta-3br--garnitura", "Телешки кюфтета (3бр) + гарнитура", "3,50", "", ""],
["", "pileshka-przhola-but--garnitura", "Пилешка пържола бут + гарнитура", "3,50", "", ""],
["", "svinska-vratna-przhola--garnitura", "Свинска вратна пържола + гарнитура", "4,20", "", ""],
["", "adana-2br--garnitura", "Адана (2бр) + гарнитура", "4,20", "", ""],
["", "pileshki-shishcheta-2br--garnitura", "Пилешки шишчета (2бр) + гарнитура", "4,20", "", ""],
["", "svinski-shishcheta-2br--garnitura", "Свински шишчета (2бр) + гарнитура", "4,20", "", ""]

            ]
        }', 
        'slug' => 'istinski-dzhebelski-kebabcheta-i-kyufteta-pri-kasim',
        'business_name' => 'Истински Джeбелски Кебапчета и Кюфтета при Касим',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6609',
        'address' => 'бул. Христо Ботев до блок ОЦК',
        'address_additional' => '',
        'coords_x' => '41.6316297',
        'coords_y' => '25.3579138',
        'phone' => '+359876129799',
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
                ["", "shopska-salata", "Шопска салата", "2,80", "250", ""],
["", "zelena-salata", "Зелена салата", "2,10", "250", ""],
["", "snezhanka", "Снежанка", "2,80", "200", ""],
["", "zele-i-morkovi", "Зеле и моркови", "2,10", "200", ""],
["", "domati-s-pechen-piper", "Домати с печен пипер", "3,50", "300", ""],
["", "krastavichki-s-kopr", "Краставички с копър", "1,40", "200", ""],
["", "domati-ss-sirene", "Домати със сирене", "2,10", "250", ""]

            ],

            "Мезенца за биричка и вино": [
                ["", "panirani-sirencza", "Панирани сиренца", "3,50", "250", ""],
["", "przheni-tikvichki", "Пържени тиквички", "2,80", "200", ""],
["", "zelenchuczi-na-gril", "Зеленчуци на грил", "2,80", "200", ""],
["", "svinski-ezik-v-maslo-i-chesn", "Свински език в масло и чесън", "4,20", "200", ""],
["", "pateshki-srcza-na-skara", "Патешки сърца на скара", "4,20", "200", ""],
["", "svinski-mozk", "Свински мозък", "4,20", "200", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "4,20", "250", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "200", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "4,20", "250", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "250", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "1,40", "200", ""],
["", "svinski-ushichki", "Свински ушички", "4,20", "200", ""],
["", "svinski-krachka", "Свински крачка", "4,20", "400", ""],
["", "svinski-cheren-drob", "Свински черен дроб", "4,20", "200", ""],
["", "svinsko-shkembe-s-kashkaval-i-chesn", "Свинско шкембе с кашкавал и чесън", "3,50", "250", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "3,50", "250", ""],
["", "pateshki-ezicheta", "Патешки езичета", "5,60", "200", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "250", ""],
["", "agneshka-glavichka-obezkostena", "Агнешка главичка обезкостена", "3,50", "200", ""],
["", "ruska-ruletka", "Руска рулетка", "2,80", "150", ""],
["", "sirencza-s-bekon", "Сиренца с бекон", "4,20", "250", ""],
["", "kartofki-s-chesn-i-kopr", "Картофки с чесън и копър", "2,80", "250", ""],
["", "kartofki-s-chesn-kopr-i-bekon", "Картофки с чесън, копър и бекон", "3,50", "250", ""],
["", "tarama-khajver-s-pechena-brusketka", "Тарама хайвер с печена брускетка", "2,80", "150", ""]

            ],

            "Ястия на скара": [
                ["", "pileshki-krilcza", "Пилешки крилца", "4,90", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "120", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""],
["", "svinski-grdichki", "Свински гърдички", "4,90", "200", ""],
["", "pileshka-przhola", "Пилешка пържола", "3,50", "250", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "120", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,90", "200", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "svinska-kotletna-przholka-s-kost", "Свинска котлетна пържолка с кост", "4,90", "250", ""]

            ],

            "Риба и морски продукти": [
                ["", "midi", "Миди", "4,20", "600", ""]

            ],

            "Пърленки и хляб": [
                ["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "", ""],
["", "naturalna-prlenka", "Натурална пърленка", "0,70", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", ""],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "250", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "250", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "250", ""],
["", "fanta-limon", "Fanta Лимон", "0,70", "250", ""],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "250", ""],
["", "schweppes-mandarina", "Schweppes Мандарина", "0,70", "250", ""]

            ],

            "Безалкохолни напитки": [
                ["", "ajryan", "Айрян", "0,70", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "gazirana-voda", "Газирана вода", "0,70", "250", ""]

            ],

            "beer": [
                ["", "shumensko", "Шуменско", "1,40", "500", ""],
["", "mlado-pivo", "Младо пиво", "1,40", "330", ""],
["", "pirinsko", "Пиринско", "1,40", "500", ""],
["", "ledeno-pivo", "Ледено пиво", "1,40", "500", ""],
["", "shumensko", "Шуменско", "1,40", "330", ""],
["", "karlsberg", "Карлсберг", "2,10", "500", ""],
["", "budvajzer", "Будвайзер", "2,10", "500", ""],
["", "zhateczki-khus", "Жатецки хус", "1,40", "500", ""],
["", "samrsbi", "Самърсби", "2,10", "330", ""]

            ],

            "wine": [
                ["", "via-vinera-cherveno", "Виа Винера червено", "10,50", "750", ""],
["", "via-vinera-byalo", "Виа Винера бяло", "10,50", "750", ""],
["", "kvantum-byalo", "Квантум бяло", "10,50", "750", ""],
["", "kvantum-cherveno", "Квантум червено", "10,50", "750", ""]

            ]
        }', 
        'slug' => 'bistro-kolumbiya',
        'business_name' => 'Бистро Колумбия',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Silistra',
        'region' => 'Silistra',
        'postal_code' => '7500',
        'address' => 'ул. Петър Бояджиев 9',
        'address_additional' => '',
        'coords_x' => '44.11223451',
        'coords_y' => '27.26690791',
        'phone' => '+359877013357',
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
            
            "Комбо предложения": [
                ["", "krilcza-12br--porcziya-kartofki", "Крилца (12бр) + порция картофки", "5,60", "", ""],
["", "khrupkavi-pileshki-krilcza-20br--porcziya-kartofki", "Хрупкави пилешки крилца (20бр) + порция картофки", "9,80", "", ""],
["", "khrupkavi-pileshki-krilcza-6br--kartofi", "Хрупкави пилешки крилца (6бр) + картофи", "3,50", "", ""],
["", "khrupkavi-pileshki-butcheta-3br--porcziya-przheni-kartofi", "Хрупкави пилешки бутчета (3бр) + порция пържени картофи", "4,20", "", ""],
["", "khrupkavi-pileshki-butcheta-6br--porcziya-przheni-kartofi", "Хрупкави пилешки бутчета (6бр) + порция пържени картофи", "7,00", "", ""],
["", "khrupkavi-pileshki-butcheta-12br--porcziya-przheni-kartofi", "Хрупкави пилешки бутчета (12бр) + порция пържени картофи", "13,30", "", ""],
["", "khrupkavi-pileshki-filencza--porcziya-kartofki", "Хрупкави пилешки филенца + порция картофки", "4,20", "", ""]

            ],

            "Римски пици на лопата": [
                ["", "picza-roma", "Пица Рома", "2,80", "", ""],
["", "picza-maestro", "Пица Маестро", "2,80", "", ""],
["", "picza-blgari", "Пица Българи", "2,80", "", ""],
["", "picza-chetiri-mesa", "Пица Четири меса", "2,80", "", ""],
["", "picza-asorti", "Пица Асорти", "2,80", "", ""],
["", "picza-garibaldi", "Пица Гарибалди", "2,80", "", ""]

            ],

            "Италиански дюнер": [
                ["", "dyuner-polo", "Дюнер Поло", "2,80", "", ""],
["", "dyuner-popaj", "Дюнер Попай", "2,80", "", ""],
["", "dyuner-tuna", "Дюнер Туна", "2,80", "", ""],
["", "dyuner-chetiri-sirena", "Дюнер Четири сирена", "2,80", "", ""],
["", "dyuner-s-koto", "Дюнер с Кото", "2,80", "", ""],
["", "dyuner-s-chorizo", "Дюнер с Чоризо", "2,80", "", ""]

            ],

            "pizza": [
                ["", "picza-rikotina", "Пица Рикотина", "2,80", "", ""],
["", "picza-tuna", "Пица Туна", "2,80", "", ""],
["", "picza-vegan", "Пица Веган", "2,80", "", ""],
["", "picza-popaj", "Пица Попай", "2,80", "", ""]

            ],

            "salads": [
                ["", "kapreze", "Капрезе", "3,50", "200", ""],
["", "czezar-s-pileshko", "Цезар с пилешко", "3,50", "250", ""],
["", "salata-s-czveklo-spanak-i-sirene", "Салата с цвекло, спанак и сирене", "2,10", "300", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "250", ""]

            ],

            "Стартери": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "250", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "250", ""],
["", "kashkavalcheta-pane", "Кашкавалчета пане", "3,50", "220", ""],
["", "sirencza-pane", "Сиренца пане", "2,80", "220", ""],
["", "topeno-sirene-ss-sladko-ot-borovinki", "Топено сирене със сладко от боровинки", "3,50", "220", ""],
["", "pileshki-filencza-s-chesnov-sos", "Пилешки филенца с чеснов сос", "4,20", "300", ""],
["", "pikantni-khrupkavi-filencza", "Пикантни хрупкави филенца", "4,20", "300", ""],
["", "khrupkavi-pileshki-butcheta", "Хрупкави пилешки бутчета", "4,90", "", ""],
["", "khrupkavi-pileshki-krilcza", "Хрупкави пилешки крилца", "4,20", "", ""]

            ],

            "pasta": [
                ["", "boloneze", "Болонезе", "2,80", "400", ""],
["", "karbonara", "Карбонара", "3,50", "400", ""],
["", "polo", "Поло", "3,50", "200", ""]

            ],

            "Бургер": [
                ["", "amerikanski-burger", "Американски бургер", "4,20", "", ""],
["", "teleshki-burger", "Телешки бургер", "4,20", "", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "3,50", "", ""]

            ],

            "Хлебни изделия": [
                ["", "grczka-pitka-s-maslinova-pasta", "Гръцка питка с маслинова паста", "0,70", "", ""],
["", "prlenka-s-sharena-sol", "Пърленка с шарена сол", "0,70", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "", ""],
["", "prlenka-s-chesnche", "Пърленка с чесънче", "0,70", "", ""]

            ],

            "desserts": [
                ["", "plodov-chijzkejk", "Плодов чийзкейк", "1,40", "130", ""],
["", "torta-s-byal-shokolad-i-malini", "Торта с бял шоколад и малини", "2,80", "130", ""],
["", "torta-s-maskarpone-i-borovinki", "Торта с маскарпоне и  боровинки", "2,80", "130", ""],
["", "torta-s-shokolad-lind", "Торта с шоколад Линд", "2,80", "120", ""]

            ]
        }', 
        'slug' => 'kafe-bar-skandal',
        'business_name' => 'Кафе Бар Скандал',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Razgrad',
        'region' => 'Razgrad',
        'postal_code' => '7200',
        'address' => 'бул. България 13',
        'address_additional' => '',
        'coords_x' => '43.5249962',
        'coords_y' => '26.5244099',
        'phone' => '+359893519001',
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
            
            "fish": [
                ["", "czacza", "Цаца", "1,40", "200", ""],
["", "safrid", "Сафрид", "3,50", "200", ""],
["", "kalmari", "Калмари", "3,50", "200", ""],
["", "midi-pane", "Миди пане", "4,20", "250", ""],
["", "pstrva", "Пъстърва", "4,20", "", ""],
["", "skumriya", "Скумрия", "3,50", "", ""],
["", "lavrak", "Лаврак", "9,80", "", ""],
["", "czipura", "Ципура", "7,70", "", ""],
["", "khek-pane", "Хек пане", "2,80", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "300", ""],
["", "kartofi-s-kopr-i-chesn", "Картофи с копър и чесън", "1,40", "300", ""]

            ]
        }', 
        'slug' => 'bistro-ribkata',
        'business_name' => 'Бистро Рибката',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Velingrad',
        'region' => 'Velingrad',
        'postal_code' => '4600',
        'address' => 'бул. Съединение 183',
        'address_additional' => '',
        'coords_x' => '42.041175',
        'coords_y' => '23.9878458',
        'phone' => '+359894461679',
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
                ["", "shopska", "Шопска", "3,50", "400", ""],
["", "ovcharska", "Овчарска", "4,20", "450", ""],
["", "czezar", "Цезар", "4,90", "400", ""],
["", "snezhanka", "Снежанка", "2,80", "300", ""],
["", "svezha-salata-s-plodove", "Свежа салата с плодове", "4,90", "350", ""],
["", "salata-na-majstora", "Салата на майстора", "4,20", "450", ""],
["", "kapreze", "Капрезе", "4,20", "400", ""],
["", "domat-s-domashno-sirene", "Домат с домашно сирене", "4,20", "450", ""],
["", "tasos", "Тасос", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "domashen-katk", "Домашен катък", "2,10", "300", ""],
["", "pecheni-piperki", "Печени пиперки", "2,80", "250", ""]

            ],

            "starters": [
                ["", "brokoli-s-chetiri-vida-sirena", "Броколи с четири вида сирена", "3,50", "300", ""],
["", "pecheni-piperki-v-domaten-sos", "Печени пиперки в доматен сос", "2,80", "350", ""],
["", "manatarki-v-maslo", "Манатарки в масло", "4,90", "200", ""],
["", "spanacheni-kyufteta-s-ovche-sirene", "Спаначени кюфтета с овче сирене", "3,50", "300", ""],
["", "khrupkavo-topeno-sirene", "Хрупкаво топено сирене", "4,20", "200", ""],
["", "pileshki-filencza", "Пилешки филенца", "4,90", "400", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "3,50", "300", ""],
["", "teleshki-ezik", "Телешки език", "5,60", "150", ""],
["", "khrupkavi-tikvichki", "Хрупкави тиквички", "3,50", "300", ""],
["", "patladzhan-po-grczki", "Патладжан по гръцки", "3,50", "360", ""],
["", "pechurki-v-maslo", "Печурки в масло", "2,80", "200", ""],
["", "kyufteta-ot-kino", "Кюфтета от кино", "3,50", "300", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "150", ""]

            ],

            "barbecue": [
                ["", "svinsko-kontra-file", "Свинско контра филе", "6,30", "420", ""],
["", "svinsko-bon-file", "Свинско бон филе", "7,00", "420", ""],
["", "svinski-rebrcza-s-barbekyu-sos", "Свински ребърца  с барбекю сос", "6,30", "450", ""],
["", "svinsko-vratle", "Свинско вратле", "6,30", "420", ""],
["", "bekon", "Бекон", "4,90", "300", ""],
["", "svinski-drob", "Свински дроб", "4,20", "200", ""],
["", "kyufte-agneshko", "Кюфте агнешко", "4,90", "400", ""],
["", "adana-kebap", "Адана кебап", "5,60", "380", ""],
["", "agenshki-kotlet", "Агеншки котлет", "10,50", "550", ""],
["", "nadenicza-ot-teleshko-i-svinsko-meso", "Наденица от телешко и свинско месо", "6,30", "400", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "4,90", "400", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "400", ""],
["", "klasichesko-kebapche", "Класическо кебапче", "0,70", "100", ""],
["", "svinsko-kyufte", "Свинско кюфте", "4,20", "", ""],
["", "svinsko-teleshko-kyufte", "Свинско телешко кюфте", "4,90", "", ""],
["", "teleshko-kyufte", "Телешко кюфте", "4,90", "", ""],
["", "svinsko-shishche", "Свинско шишче", "5,60", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "4,90", "", ""]

            ],

            "Основни ястия": [
                ["", "svinski-kareta-s-manatarki", "Свински карета с манатарки", "6,30", "350", ""],
["", "kasapsko-meze", "Касапско мезе", "8,40", "400", ""],
["", "babeni-kyuftencza", "Бабени кюфтенца", "4,90", "400", ""],
["", "teleshki-pepr-stek", "Телешки пепър стек", "16,10", "400", ""],
["", "teleshki-zhulieni", "Телешки жулиени", "10,50", "350", ""],
["", "pile-kasrova-kshha", "Пиле Касърова къща", "6,30", "350", ""],
["", "katino-meze-na-sach", "Катино мезе на сач", "5,60", "300", ""],
["", "svinsko-dzholanche", "Свинско джоланче", "7,70", "500", ""],
["", "kombiniran-sach", "Комбиниран сач", "11,90", "700", ""],
["", "svinski-sach", "Свински сач", "8,40", "700", ""],
["", "pileshki-sach", "Пилешки сач", "7,70", "700", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "4,90", "700", ""],
["", "pileshki-kscheta-s-brokoli-i-spanak", "Пилешки късчета с броколи и спанак", "5,60", "350", ""]

            ],

            "Риба и морки дарове": [
                ["", "tigrovi-skaridi-po-grczki", "Тигрови скариди по гръцки", "9,80", "250", ""],
["", "kalmari-na-plocha", "Калмари на плоча", "8,40", "250", ""],
["", "kalmari-pane", "Калмари пане", "8,40", "250", ""],
["", "kotlet-ot-somga", "Котлет от сьомга", "9,10", "350", ""],
["", "czipura", "Ципура", "9,10", "", ""],
["", "lavrak", "Лаврак", "9,10", "", ""],
["", "pstrva-otglezhdana-v-bio-ferma", "Пъстърва отглеждана в био ферма", "7,00", "350", ""],
["", "czipura-file-ss-svezhi-bilki", "Ципура филе със свежи билки", "9,80", "350", ""],
["", "chernomorski-midi", "Черноморски миди", "7,00", "1000", ""]

            ],

            "От пекарната": [
                ["", "fokacha", "Фокача", "2,10", "250", ""],
["", "stromboli", "Стромболи", "5,60", "500", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "400", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,80", "400", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "3,50", "450", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "0,70", "120", ""],
["", "kolbasarska-fokacha", "Колбасарска фокача", "3,50", "250", ""]

            ],

            "dry-appetizer": [
                ["", "domashno-koze-sirene", "Домашно козе сирене", "2,10", "100", ""],
["", "domashno-ovche-sirene", "Домашно овче сирене", "2,10", "100", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""],
["", "sudzhuk-teleshki", "Суджук телешки", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "200", ""],
["", "torta-nutela", "Торта Нутела", "2,80", "200", ""],
["", "czedeno-mlyako-s-domashno-sladko", "Цедено мляко с домашно сладко", "1,40", "150", ""],
["", "sladoled", "Сладолед", "2,10", "150", ""],
["", "krem-fantaziya", "Крем Фантазия", "2,10", "150", ""]

            ],

            "Coca-Cola напитки": [
                ["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "", ""]

            ],

            "Безалкохолни напитки": [
                ["", "studen-chaj-san-benedeto", "Студен чай Сан Бенедето", "1,40", "500", ""],
["", "red-bul", "Ред Бул", "2,80", "250", ""],
["", "ajryan", "Айрян", "0,70", "", ""]

            ]
        }', 
        'slug' => 'kasrova-kshcha',
        'business_name' => 'Касърова къща',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Targovishte',
        'region' => 'Targovishte',
        'postal_code' => '7700',
        'address' => 'ул. Полковник Карганов 2',
        'address_additional' => '',
        'coords_x' => '43.24279517',
        'coords_y' => '26.56908765',
        'phone' => '+359879297705',
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
                ["", "rakiena-salatka", "Ракиена салатка", "4,20", "400", ""],
["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "salata-kolorado", "Салата Колорадо", "4,20", "400", ""],
["", "kartofena-salata", "Картофена салата", "3,50", "400", ""],
["", "zeleva-salata", "Зелева салата", "2,10", "350", ""],
["", "rodopski-kalpak", "Родопски калпак", "3,50", "350", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "400", ""],
["", "salata-nicza", "Салата Ница", "4,90", "400", ""],
["", "botevgradska-topenicza", "Ботевградска топеница", "3,50", "350", ""],
["", "salata-na-shefa", "Салата на Шефа", "4,90", "400", ""]

            ],

            "Студени Предястия": [
                ["", "kashkaval-natyur", "Кашкавал Натюр", "2,10", "100", ""],
["", "pusheno-file", "Пушено филе", "2,80", "100", ""],
["", "lukanka", "Луканка", "2,80", "100", ""],
["", "sudzhuk", "Суджук", "2,80", "100", ""],
["", "sirene-natyur", "Сирене Натюр", "1,40", "100", ""]

            ],

            "Топли Предястия": [
                ["", "sirene-po-shopski", "Сирене по шопски", "2,80", "", ""],
["", "chushka-byurek", "Чушка бюрек", "3,50", "", ""],
["", "yajcza-po-panagyurski", "Яйца по Панагюрски", "2,80", "300", ""],
["", "omlet-natyur", "Омлет натюр", "2,10", "200", ""],
["", "omlet-asorti", "Омлет Асорти", "2,10", "300", ""],
["", "domashen-chips", "Домашен чипс", "2,10", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "gbki-v-maslcze", "Гъбки в масълце", "2,80", "250", ""],
["", "khrupkavi-tikvichki", "Хрупкави тиквички", "3,50", "250", ""],
["", "kashkaval-orli", "Кашкавал орли", "3,50", "250", ""],
["", "topeni-sirencza-ss-sladko-ot-borovinki", "Топени сиренца със сладко от боровинки", "3,50", "300", ""],
["", "pileshki-khapki-ss-sino-sirene-i-smetana", "Пилешки хапки със синьо сирене и сметана", "4,20", "400", ""],
["", "pileshki-zhulieni-s-mlechen-sos", "Пилешки жулиени с млечен сос", "3,50", "250", ""],
["", "pileshki-drob-v-maslo", "Пилешки дроб в масло", "2,80", "250", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "3,50", "200", ""],
["", "domashni-przheni-kartofki", "Домашни пържени картофки", "1,40", "", ""],
["", "kachamak-s-maslo-i-sirene", "Качамак с масло и сирене", "2,80", "350", ""],
["", "khrupkavo-bon", "Хрупкаво бон", "3,50", "", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "3,50", "350", ""],
["", "teleshki-srcza-v-maslo", "Телешки сърца в масло", "2,80", "250", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "4,90", "250", ""]

            ],

            "Основни Ястия": [
                ["", "plnena-pileshka-przhola-s-varen-kartof", "Пълнена пилешка пържола с варен картоф", "5,60", "550", ""],
["", "pile-trakiya-s-podlucheni-kartofki", "Пиле Тракия с подлучени картофки", "5,60", "550", ""],
["", "pileshka-kavrma-s-yajcze", "Пилешка кавърма с яйце", "4,20", "450", ""],
["", "svinski-kareta-s-gben-sos", "Свински карета с гъбен сос", "4,90", "350", ""],
["", "drusan-kebap", "Друсан кебап", "4,20", "350", ""],
["", "svinska-kavrma-s-yajcze", "Свинска кавърма с яйце", "4,20", "350", ""],
["", "pile-po-lovdzhijski", "Пиле по ловджийски", "5,60", "500", ""],
["", "svinsko-po-lovdzhijski", "Свинско по ловджийски", "5,60", "450", ""],
["", "pileshko-meso-s-ananasche-v-sladko-kisel-sos", "Пилешко месо с ананасче в сладко кисел сос", "5,60", "550", ""],
["", "pecheno-dzholanche-s-garnitura", "Печено джоланче с гарнитура", "8,40", "700", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "karnache", "Карначе", "2,10", "250", ""],
["", "sudzhuk", "Суджук", "4,20", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "3,50", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "250", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "3,50", "250", ""],
["", "meshana-skara", "Мешана скара", "8,40", "660", ""],
["", "svinski-ushi-na-skara", "Свински уши на скара", "3,50", "250", ""],
["", "rebrcza-na-skara", "Ребърца на скара", "4,20", "250", ""]

            ],

            "sachs": [
                ["", "svinski-sach", "Свински сач", "7,70", "650", ""],
["", "makedonski-sach", "Македонски сач", "11,90", "1000", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "6,30", "500", ""],
["", "pileshki-sach", "Пилешки сач", "7,00", "650", ""]

            ],

            "pizza": [
                ["", "picza-margarita", "Пица Маргарита", "2,80", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,20", "", ""],
["", "picza-bonifacho", "Пица Бонифачо", "4,90", "", ""],
["", "picza-elinor", "Пица Елинор", "4,90", "", ""],
["", "piczata-na-shefa", "Пицата на Шефа", "4,90", "", ""],
["", "picza-kuatro-formadzhi", "Пица Куатро Формаджи", "4,20", "", ""],
["", "byala-picza", "Бяла Пица", "4,90", "", ""],
["", "picza-don-vito", "Пица Дон Вито", "4,90", "", ""],
["", "picza-salsiche", "Пица Салсиче", "4,20", "", ""],
["", "picza-byagashho-pile", "Пица Бягащо пиле", "4,20", "", ""],
["", "picza-peperoni", "Пица Пеперони", "4,20", "", ""]

            ],

            "Паста и Ризото": [
                ["", "spageti-elinor", "Спагети Елинор", "4,20", "450", ""],
["", "rizoto-s-pile-i-gben-sos", "Ризото с пиле и гъбен сос", "4,20", "450", ""],
["", "spageti-ala-karbonara", "Спагети Ала Карбонара", "4,20", "450", ""]

            ],

            "fish": [
                ["", "pstrva", "Пъстърва", "6,30", "400", ""],
["", "arzhentinsko-file-ss-sos-bristol", "Аржентинско филе със сос Бристол", "4,20", "300", ""],
["", "przhen-sharan-s-garnitura", "Пържен шаран с гарнитура", "11,20", "", ""]

            ],

            "bread": [
                ["", "prlenka-kombinirana", "Пърленка комбинирана", "2,10", "", ""],
["", "prlenka-s-maslo", "Пърленка с масло", "0,70", "", ""],
["", "prlenka---chesnova", "Пърленка - чеснова", "0,70", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "filijka-khlyab---prepechena", "Филийка хляб - препечена", "0,00", "", ""]

            ],

            "desserts": [
                ["", "palachinka-s-shokolad", "Палачинка с шоколад", "0,70", "", ""],
["", "gofreta-s-shokolad", "Гофрета с шоколад", "1,40", "", ""],
["", "czedeno-kiselo-mlyako-ss-sladko", "Цедено кисело мляко със сладко", "2,10", "150", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "0,70", "", ""],
["", "gofreta-ss-sladko", "Гофрета със сладко", "1,40", "", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,10", "150", ""],
["", "czedeno-kiselo-mlyako-s-shokolad-150gr", "Цедено кисело мляко с шоколад (150гр)", "2,10", "", ""]

            ],

            "garnish": [
                ["", "gben-sos", "Гъбен сос", "0,70", "100", ""],
["", "lyuti-chushleta", "Люти чушлета", "0,00", "", ""],
["", "domashni-przheni-kartofki", "Домашни пържени картофки", "0,70", "150", ""],
["", "domashni-vareni-kartofi", "Домашни варени картофи", "0,70", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "0,70", "150", ""],
["", "zele-i-morkovi", "Зеле и моркови", "0,70", "150", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "150", ""],
["", "zelena-salata", "Зелена салата", "0,70", "150", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "zadushen-oriz", "Задушен ориз", "0,70", "150", ""]

            ]
        }', 
        'slug' => 'restorant-elinor',
        'business_name' => 'Ресторант Елинор',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Botevgrad',
        'region' => 'Botevgrad',
        'postal_code' => '1303',
        'address' => 'бул.Христо Ботев 111',
        'address_additional' => '',
        'coords_x' => '42.904321',
        'coords_y' => '23.8003164',
        'phone' => '+359898616516',
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
                ["", "salata-czezar", "Салата Цезар", "3,50", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "350", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "350", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "salata-marulya", "Салата маруля", "3,50", "350", ""]

            ],

            "soups": [
                ["", "supa-leshha", "Супа леща", "1,40", "300", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "300", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "1,40", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "tarator", "Таратор", "0,70", "250", ""]

            ],

            "alaminuti": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "panirani-sirencza", "Панирани сиренца", "4,20", "300", ""],
["", "pileshki-khapki-ss-sos", "Пилешки хапки със сос", "3,50", "300", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "4,20", "300", ""],
["", "toplo-plato", "Топло плато", "12,60", "900", ""],
["", "brkani-yajcze", "Бъркани яйце", "2,10", "350", ""],
["", "omlet", "Омлет", "2,10", "300", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "drobcheta-s-luk", "Дробчета с лук", "2,80", "350", ""],
["", "drobcheta-po-selski", "Дробчета по селски", "2,80", "300", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-yajcze-i-sirene", "Сандвич с яйце и сирене", "1,40", "250", ""],
["", "sandvich-s-kashkaval-i-sirene", "Сандвич с кашкавал и сирене", "1,40", "220", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "1,40", "250", ""],
["", "sandvich-s-kashkava", "Сандвич с кашкава", "1,40", "200", ""],
["", "princzesa", "Принцеса", "1,40", "200", ""],
["", "klub-sandvich", "Клуб сандвич", "2,80", "400", ""],
["", "pileshki-burger", "Пилешки бургер", "2,80", "300", ""],
["", "pileshki-burger-s-yajcze-i-kartofi", "Пилешки бургер с яйце и картофи", "2,80", "500", ""]

            ],

            "Основни ястия": [
                ["", "pileshka-przhola", "Пилешка пържола", "3,50", "450", ""],
["", "pileshka-przhola", "Пилешка пържола", "3,50", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "2,80", "400", ""],
["", "svinska-przhola", "Свинска пържола", "4,20", "300", ""],
["", "bob-s-nadenicza", "Боб с наденица", "2,80", "350", ""],
["", "svinska-przhola-s-garnitura", "Свинска пържола с гарнитура", "4,20", "500", ""],
["", "oriz-ss-spanak", "Ориз със спанак", "2,10", "300", ""],
["", "pileshki-butcheta-s-oriz", "Пилешки бутчета с ориз", "2,80", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "400", ""],
["", "kyufteta-s-garnitura", "Кюфтета с гарнитура", "2,80", "350", ""],
["", "svinsko-ss-zele", "Свинско със зеле", "2,80", "350", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "3,50", "400", ""],
["", "kyufteta-po-czarigradski", "Кюфтета по цариградски", "2,80", "350", ""],
["", "sirene-pane-s-garnitura", "Сирене пане с гарнитура", "2,80", "400", ""],
["", "pile-frikase", "Пиле фрикасе", "2,80", "350", ""],
["", "vinen-kebap", "Винен кебап", "2,80", "350", ""],
["", "nadenicza-s-garnitura", "Наденица с гарнитура", "3,50", "400", ""],
["", "kyufteta-po-chirpanski", "Кюфтета по чирпански", "2,80", "350", ""],
["", "mish-mash", "Миш-маш", "2,10", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "2,80", "350", ""],
["", "musaka", "Мусака", "2,80", "400", ""],
["", "tikvichki-s-yajcze-sirene-i-kashkaval", "Тиквички с яйце, сирене и кашкавал", "2,10", "300", ""],
["", "lazanya-boloneze", "Лазаня Болонезе", "3,50", "400", ""],
["", "svinska-kavrma-po-rodopski", "Свинска кавърма по родопски", "2,80", "350", ""],
["", "zapekanka", "Запеканка", "2,80", "350", ""],
["", "kyufteta-s-byal-sos", "Кюфтета с бял сос", "2,80", "350", ""],
["", "gnezdo-s-pyure", "Гнездо с пюре", "2,80", "300", ""],
["", "plneni-chushki-s-kajma-i-oriz", "Пълнени чушки с кайма и ориз", "2,10", "300", ""],
["", "plneni-chushki-s-yajcze-i-sirene", "Пълнени чушки с яйце и сирене", "2,10", "300", ""]

            ],

            "И нещо друго": [
                ["", "medena-torta", "Медена торта", "1,40", "", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "1,40", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "", ""],
["", "melba", "Мелба", "2,10", "", ""],
["", "krem-bryule", "Крем брюле", "0,70", "", ""],
["", "krem-karamel", "Крем карамел", "0,70", "", ""],
["", "plodova-salata", "Плодова салата", "2,80", "", ""],
["", "tiramisu", "Тирамису", "2,10", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "1,40", "", ""],
["", "chijzkejk", "Чийзкейк", "2,10", "", ""]

            ],

            "additives": [
                ["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "dobavka-kartofi", "Добавка картофи", "0,00", "", ""],
["", "gorchicza", "Горчица", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "dobavka-yajcze", "Добавка яйце", "0,00", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "pitka", "Питка", "0,00", "", ""],
["", "prepechena-filijka", "Препечена филийка", "0,00", "", ""],
["", "med", "Мед", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "", ""]

            ]
        }', 
        'slug' => 'bistro-bar',
        'business_name' => 'Bistro Bar &amp; Dinner Mechkata',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Botevgrad',
        'region' => 'Botevgrad',
        'postal_code' => '2140',
        'address' => 'ул. Захари Стоянов 17',
        'address_additional' => '',
        'coords_x' => '42.90049124',
        'coords_y' => '23.79066681',
        'phone' => '+359878785983 ; 0898432123',
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
            
            "Комбо предложения": [
                ["", "krilcza-12br--porcziya-kartofki", "Крилца (12бр) + порция картофки", "5,60", "", ""],
["", "khrupkavi-pileshki-krilcza-20br--porcziya-kartofki", "Хрупкави пилешки крилца (20бр) + порция картофки", "9,80", "", ""],
["", "khrupkavi-pileshki-krilcza-6br--kartofi", "Хрупкави пилешки крилца (6бр) + картофи", "3,50", "", ""],
["", "khrupkavi-pileshki-butcheta-3br--porcziya-przheni-kartofi", "Хрупкави пилешки бутчета (3бр) + порция пържени картофи", "4,20", "", ""],
["", "khrupkavi-pileshki-butcheta-6br--porcziya-przheni-kartofi", "Хрупкави пилешки бутчета (6бр) + порция пържени картофи", "7,00", "", ""],
["", "khrupkavi-pileshki-butcheta-12br--porcziya-przheni-kartofi", "Хрупкави пилешки бутчета (12бр) + порция пържени картофи", "13,30", "", ""],
["", "khrupkavi-pileshki-filencza--porcziya-kartofki", "Хрупкави пилешки филенца + порция картофки", "4,20", "", ""]

            ],

            "Римски пици на лопата": [
                ["", "picza-roma", "Пица Рома", "2,80", "", ""],
["", "picza-maestro", "Пица Маестро", "2,80", "", ""],
["", "picza-blgari", "Пица Българи", "2,80", "", ""],
["", "picza-chetiri-mesa", "Пица Четири меса", "2,80", "", ""],
["", "picza-asorti", "Пица Асорти", "2,80", "", ""],
["", "picza-garibaldi", "Пица Гарибалди", "2,80", "", ""]

            ],

            "pizza": [
                ["", "picza-rikotina", "Пица Рикотина", "2,80", "", ""],
["", "picza-tuna", "Пица Туна", "2,80", "", ""],
["", "picza-vegan", "Пица Веган", "2,80", "", ""],
["", "picza-popaj", "Пица Попай", "2,80", "", ""]

            ],

            "Италиански дюнер": [
                ["", "dyuner-polo", "Дюнер Поло", "2,80", "", ""],
["", "dyuner-popaj", "Дюнер Попай", "2,80", "", ""],
["", "dyuner-tuna", "Дюнер Туна", "2,80", "", ""],
["", "dyuner-chetiri-sirena", "Дюнер Четири сирена", "2,80", "", ""],
["", "dyuner-s-koto", "Дюнер с Кото", "2,80", "", ""],
["", "dyuner-s-chorizo", "Дюнер с Чоризо", "2,80", "", ""]

            ],

            "salads": [
                ["", "kapreze", "Капрезе", "3,50", "200", ""],
["", "czezar-s-pileshko", "Цезар с пилешко", "3,50", "250", ""],
["", "salata-s-czveklo-spanak-i-sirene", "Салата с цвекло, спанак и сирене", "2,10", "300", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "250", ""]

            ],

            "Стартери": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "250", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "250", ""],
["", "kashkavalcheta-pane", "Кашкавалчета пане", "3,50", "220", ""],
["", "sirencza-pane", "Сиренца пане", "2,80", "220", ""],
["", "topeno-sirene-ss-sladko-ot-borovinki", "Топено сирене със сладко от боровинки", "3,50", "220", ""],
["", "pileshki-filencza-s-chesnov-sos", "Пилешки филенца с чеснов сос", "4,20", "300", ""],
["", "pikantni-khrupkavi-filencza", "Пикантни хрупкави филенца", "4,20", "300", ""],
["", "khrupkavi-pileshki-butcheta", "Хрупкави пилешки бутчета", "4,90", "", ""],
["", "khrupkavi-pileshki-krilcza", "Хрупкави пилешки крилца", "4,20", "", ""]

            ],

            "pasta": [
                ["", "boloneze", "Болонезе", "2,80", "400", ""],
["", "karbonara", "Карбонара", "3,50", "400", ""],
["", "polo", "Поло", "3,50", "200", ""]

            ],

            "Бургер": [
                ["", "amerikanski-burger", "Американски бургер", "4,20", "", ""],
["", "teleshki-burger", "Телешки бургер", "4,20", "", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "3,50", "", ""]

            ],

            "Хлебни изделия": [
                ["", "grczka-pitka-s-maslinova-pasta", "Гръцка питка с маслинова паста", "0,70", "", ""],
["", "prlenka-s-sharena-sol", "Пърленка с шарена сол", "0,70", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "", ""],
["", "prlenka-s-chesnche", "Пърленка с чесънче", "0,70", "", ""]

            ],

            "desserts": [
                ["", "plodov-chijzkejk", "Плодов чийзкейк", "1,40", "130", ""],
["", "torta-s-byal-shokolad-i-malini", "Торта с бял шоколад и малини", "2,80", "130", ""],
["", "torta-s-maskarpone-i-borovinki", "Торта с маскарпоне и  боровинки", "2,80", "130", ""],
["", "torta-s-shokolad-lind", "Торта с шоколад Линд", "2,80", "120", ""]

            ]
        }', 
        'slug' => 'restorant-ulicata',
        'business_name' => 'Ресторант Улицата',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Razgrad',
        'region' => 'Razgrad',
        'postal_code' => '7219',
        'address' => 'ул. Цар Асен 10',
        'address_additional' => '',
        'coords_x' => '43.5442615',
        'coords_y' => '26.4738492',
        'phone' => '+359893519001',
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
            
            "lunch": [
                ["", "pileshka-supa", "Пилешка супа", "0,70", "400", "https://images.deliveryhero.io/image/fd-bg/Products/941304.jpg?width=302"],
["", "plneni-chushki-s-kajma-i-oriz", "Пълнени чушки с кайма и ориз", "2,80", "300", ""],
["", "bob-chorba", "Боб чорба", "0,70", "400", "https://images.deliveryhero.io/image/fd-bg/Products/941311.jpg?width=302"],
["", "tarator", "Таратор", "0,70", "300", ""],
["", "omlet-ss-sirene-garnitura-domati-i-krastaviczi", "Омлет със сирене гарнитура домати и краставици", "2,10", "200", ""],
["", "shniczel-s-garnitura-domati-i-krastaviczi", "Шницел с гарнитура домати и краставици", "2,80", "300", ""],
["", "omlet-s-kashkaval-garnitura-domati-i-krastaviczi", "Омлет с кашкавал гарнитура домати и краставици", "2,10", "200", ""],
["", "omlet-asorti-s-garnitura-domati-i-krastaviczi", "Омлет Асорти с гарнитура домати и краставици", "2,80", "200", ""],
["", "kyufteta-2br-s-garnitura-domati-i-krastaviczi", "Кюфтета 2бр с гарнитура домати и краставици", "2,80", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941371.jpg?width=302"],
["", "kebapcheta-2br-s-garnitura-domati-i-krastaviczi", "Кебапчета 2бр с гарнитура домати и краставици", "2,80", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941372.jpg?width=302"]

            ],

            "salads": [
                ["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/941253.jpg?width=302"],
["", "tabule-s-kinoa", "Табуле с киноа", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941254.jpg?width=302"],
["", "czezar-s-pile", "Цезар с пиле", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941255.jpg?width=302"],
["", "kapreze", "Капрезе", "4,20", "360", "https://images.deliveryhero.io/image/fd-bg/Products/941256.jpg?width=302"],
["", "zelena-salata-s-godzhi-beri-i-filiran-badem", "Зелена салата с годжи бери и филиран бадем", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/941257.jpg?width=302"],
["", "zdrave", "Здраве", "2,80", "250", "https://images.deliveryhero.io/image/fd-bg/Products/941258.jpg?width=302"],
["", "shopska", "Шопска", "2,80", "500", "https://images.deliveryhero.io/image/fd-bg/Products/941259.jpg?width=302"]

            ],

            "starters": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,10", "390", "https://images.deliveryhero.io/image/fd-bg/Products/941260.jpg?width=302"],
["", "rizoto-s-manatarki", "Ризото с манатарки", "3,50", "390", "https://images.deliveryhero.io/image/fd-bg/Products/941261.jpg?width=302"],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "3,50", "390", "https://images.deliveryhero.io/image/fd-bg/Products/941262.jpg?width=302"],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "3,50", "190", "https://images.deliveryhero.io/image/fd-bg/Products/941263.jpg?width=302"],
["", "pileshki-filencza-ss-susam", "Пилешки филенца със сусам", "4,20", "190", "https://images.deliveryhero.io/image/fd-bg/Products/941264.jpg?width=302"],
["", "panirani-pileshki-filencza", "Панирани пилешки филенца", "3,50", "190", "https://images.deliveryhero.io/image/fd-bg/Products/941265.jpg?width=302"],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", "https://images.deliveryhero.io/image/fd-bg/Products/941266.jpg?width=302"],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", "https://images.deliveryhero.io/image/fd-bg/Products/941267.jpg?width=302"],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "200", "https://images.deliveryhero.io/image/fd-bg/Products/941268.jpg?width=302"],
["", "kartofi-sote", "Картофи соте", "2,80", "250", "https://images.deliveryhero.io/image/fd-bg/Products/941269.jpg?width=302"],
["", "kartofi-po-italianski", "Картофи по италиански", "3,50", "250", "https://images.deliveryhero.io/image/fd-bg/Products/941270.jpg?width=302"],
["", "zapecheno-koze-sirene-s-borovinkov-toping", "Запечено козе сирене с боровинков топинг", "4,20", "100", "https://images.deliveryhero.io/image/fd-bg/Products/941271.jpg?width=302"],
["", "panirani-topeni-sirencza-s-kornflejks", "Панирани топени сиренца с корнфлейкс", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/941272.jpg?width=302"]

            ],

            "pasta": [
                ["", "pasta-boloneze", "Паста Болонезе", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941294.jpg?width=302"],
["", "pasta-karbonara", "Паста Карбонара", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941295.jpg?width=302"],
["", "pasta-rustikana", "Паста Рустикана", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941296.jpg?width=302"],
["", "pasta-kuatro-formadzhi", "Паста Куатро Формаджи", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941297.jpg?width=302"],
["", "pasta-arabiata---pikantna", "Паста Арабиата - пикантна", "3,50", "380", "https://images.deliveryhero.io/image/fd-bg/Products/941298.jpg?width=302"],
["", "pasta-s-riba-ton", "Паста с риба тон", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941299.jpg?width=302"],
["", "pasta-s-tryufel", "Паста с трюфел", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941300.jpg?width=302"],
["", "pasta-ss-somga", "Паста със сьомга", "8,40", "400", "https://images.deliveryhero.io/image/fd-bg/Products/941301.jpg?width=302"]

            ],

            "pizza": [
                ["", "picza-piperoni", "Пица Пиперони", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941383.jpg?width=302"],
["", "picza-margarita", "Пица Маргарита", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941384.jpg?width=302"],
["", "picza-proshuto-i-maskarpone", "Пица Прошуто и маскарпоне", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941385.jpg?width=302"],
["", "picza-bekon-i-gbi", "Пица Бекон и гъби", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941386.jpg?width=302"]

            ],

            "sauces": [
                ["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", "https://images.deliveryhero.io/image/fd-bg/Products/941391.jpg?width=302"],
["", "sladko-kisel-sos", "Сладко-кисел сос", "0,70", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "50", "https://images.deliveryhero.io/image/fd-bg/Products/941393.jpg?width=302"],
["", "limonov-dresing", "Лимонов дресинг", "0,70", "50", "https://images.deliveryhero.io/image/fd-bg/Products/941394.jpg?width=302"],
["", "czezar-dresing", "Цезар дресинг", "0,70", "50", "https://images.deliveryhero.io/image/fd-bg/Products/941395.jpg?width=302"],
["", "barbekyu", "Барбекю", "0,70", "50", "https://images.deliveryhero.io/image/fd-bg/Products/941396.jpg?width=302"],
["", "gorchicza", "Горчица", "0,70", "50", "https://images.deliveryhero.io/image/fd-bg/Products/941397.jpg?width=302"],
["", "sladko-ot-borovinki", "Сладко от боровинки", "1,40", "50", "https://images.deliveryhero.io/image/fd-bg/Products/941398.jpg?width=302"]

            ],

            "grill": [
                ["", "kebapche-2br-s-garnitura-domati-i-krastaviczi", "Кебапче 2бр с гарнитура домати и краставици", "2,80", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941428.jpg?width=302"],
["", "kyufte-2br-s-garnitura", "Кюфте 2бр с гарнитура", "2,80", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941429.jpg?width=302"],
["", "pileshka-przhola-ot-but-s-garnitura-przheni-kartofi", "Пилешка пържола от бут с гарнитура пържени картофи", "2,80", "300", ""],
["", "pileshko-file-s-garnitura-zadusheni-zelenchuczi", "Пилешко филе с гарнитура задушени зеленчуци", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941431.jpg?width=302"],
["", "svinska-vratna-przhola-s-garnitura-przheni-kartofi", "Свинска вратна пържола с гарнитура пържени картофи", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941432.jpg?width=302"],
["", "svinska-kotletna-przhola-s-garnitura-zadusheni-zelenchuczi", "Свинска котлетна пържола с гарнитура задушени зеленчуци", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941433.jpg?width=302"],
["", "svinski-kareta-s-garnitura-pikantni-kartofi", "Свински карета с гарнитура пикантни картофи", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941434.jpg?width=302"],
["", "domashna-klczana-nadenicza-s-garnitura-pikantni-kartofi", "Домашна кълцана наденица с гарнитура  пикантни картофи", "2,80", "400", "https://images.deliveryhero.io/image/fd-bg/Products/941435.jpg?width=302"]

            ],

            "burgers": [
                ["", "vegetarianski-burger-s-przheni-kartofi", "Вегетариански бургер с пържени картофи", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/947160.jpg?width=302"],
["", "agneshki-burger-s-przheni-kartofi", "Агнешки бургер с пържени картофи", "7,00", "350", "https://images.deliveryhero.io/image/fd-bg/Products/947161.jpg?width=302"],
["", "burger-ss-svinsko-meso-i-przheni-kartofi", "Бургер със свинско месо и пържени картофи", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/947162.jpg?width=302"],
["", "chiken-burger-s-przheni-kartofi", "Чикен бургер с пържени картофи", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/947166.jpg?width=302"],
["", "pork-burger-s-przheni-kartofi", "Порк бургер с пържени картофи", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/947167.jpg?width=302"],
["", "fish-burger-s-przheni-kartofi", "Фиш бургер с пържени картофи", "6,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/947168.jpg?width=302"],
["", "burger-s-shunka-filadelfiya-i-przheni-kartofi", "Бургер с шунка, филаделфия и пържени картофи", "4,90", "350", ""]

            ],

            "fish": [
                ["", "pstrva-na-skara-ss-zadusheni-zelenchuczi", "Пъстърва на скара със задушени зеленчуци", "6,30", "450", "https://images.deliveryhero.io/image/fd-bg/Products/941463.jpg?width=302"],
["", "lavrak-na-skara", "Лаврак на скара", "7,70", "350", "https://images.deliveryhero.io/image/fd-bg/Products/941464.jpg?width=302"],
["", "czipura-na-skara", "Ципура на скара", "11,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/941465.jpg?width=302"],
["", "kalmari-po-grczki", "Калмари по гръцки", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/941466.jpg?width=302"]

            ],

            "maindishes": [
                ["", "pileshki-shniczel-s-przheni-kartofi", "Пилешки шницел с пържени картофи", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/941446.jpg?width=302"],
["", "pile-zhulien", "Пиле Жулиен", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/941447.jpg?width=302"],
["", "svinski-dzholan-s-kartofi-sote", "Свински джолан с картофи соте", "7,70", "600", "https://images.deliveryhero.io/image/fd-bg/Products/941448.jpg?width=302"],
["", "svinsko-bon-file-s-moczarela-susheni-domati-i-oriz", "Свинско бон филе с моцарела, сушени домати и ориз", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/941449.jpg?width=302"],
["", "teleshko-pecheno-ss-zadusheni-zelenchuczi", "Телешко печено със задушени зеленчуци", "7,70", "400", "https://images.deliveryhero.io/image/fd-bg/Products/941450.jpg?width=302"],
["", "pechen-svinski-vrat-s-pikantni-kartofi", "Печен свински врат с пикантни картофи", "7,70", "400", "https://images.deliveryhero.io/image/fd-bg/Products/941451.jpg?width=302"],
["", "agneshko-pecheno-s-drob-sarma", "Агнешко печено с дроб сарма", "10,50", "400", ""]

            ],

            "desserts": [
                ["", "kyunefe", "Кюнефе", "4,90", "150", "https://images.deliveryhero.io/image/fd-bg/Products/941467.jpg?width=302"],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "160", "https://images.deliveryhero.io/image/fd-bg/Products/941468.jpg?width=302"],
["", "krem-karamel", "Крем карамел", "0,70", "100", ""],
["", "palachinka-s-med-i-orekhi", "Палачинка с мед и орехи", "1,40", "", ""],
["", "palachinka-s-techen-shokolad-nutela", "Палачинка с течен шоколад Нутела", "1,40", "", ""],
["", "palachinka-s-domashno-sladko-ot-borovinki", "Палачинка с домашно сладко от боровинки", "2,10", "", ""]

            ],

            "bread": [
                ["", "zemel", "Земел", "0,00", "", ""],
["", "filiya-byal-khlyab", "Филия бял хляб", "0,00", "", ""],
["", "filiya-plnozrnest-khlyab", "Филия пълнозърнест хляб", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/941477.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/941478.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm-330ml", "Sprite с вкус на лимон и лайм (330мл)", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/941479.jpg?width=302"]

            ],

            "drinks": [
                ["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "bezalkokholen-khajneken", "Безалкохолен Хайнекен", "2,10", "330", ""],
["", "korona", "Корона", "2,80", "300", ""],
["", "jegerkhof", "Йегерхоф", "4,20", "", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""],
["", "beks", "Бекс", "1,40", "500", ""],
["", "burgasko", "Бургаско", "0,70", "500", ""],
["", "astika", "Астика", "0,70", "500", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна Баня", "0,70", "500", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна Баня", "1,40", "", ""],
["", "ajryan", "Айрян", "1,40", "400", ""],
["", "red-bul", "Ред Бул", "3,50", "250", ""]

            ]
        }', 
        'slug' => 'restorant-paradise',
        'business_name' => 'Ресторант Парадайс',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6600',
        'address' => 'ул. Пирин 7',
        'address_additional' => '',
        'coords_x' => '41.63739305',
        'coords_y' => '25.36936661',
        'phone' => '+359879300666',
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
                ["", "1-kitajska-salata-s-cherni-i-beli-gbi-ss-zelenchuczi", "1. Китайска салата с черни и бели гъби със зеленчуци", "4,20", "400", ""],
["", "2-salata-asorti", "2. Салата Асорти", "3,50", "400", ""],
["", "3-salata-ot-krastaviczi-i-rolcza-ot-raczi", "3. Салата от краставици и ролца от раци", "4,20", "400", ""],
["", "5-salata-ot-morkovi-i-chesn", "5. Салата от моркови и чесън", "2,80", "350", ""],
["", "6-panirani-khrupkavi-zelenchuczi", "6. Панирани хрупкави зеленчуци", "4,20", "350", ""],
["", "7-kitajska-salata-s-pileshko-i-pet-vkusa", "7. Китайска салата с пилешко и пет вкуса", "5,60", "450", ""],
["", "8-kiseli-krastavichki-s-pileshko-i-chesn", "8. Кисели краставички с пилешко и чесън", "4,90", "400", ""],
["", "9-przheni-peleti-ot-skaridi", "9. Пържени пелети от скариди", "2,10", "", ""],
["", "10-salata-ot-krastaviczi-czarevicza-i-morkovi", "10. Салата от краставици, царевица и моркови", "3,50", "400", ""],
["", "11-vodorasli-s-chesn-sol-i-kitajski-podpravki", "11. Водорасли с чесън, сол и китайски подправки", "3,50", "400", ""],
["", "12-zadusheni-zelenchuczi-asorti", "12. Задушени зеленчуци асорти", "3,50", "400", ""],
["", "13-salata-zele-morkovi-krastaviczi-i-chesn", "13. Салата зеле, моркови, краставици и чесън", "3,50", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "redena-salata-domati-krastaviczi-i-plochka-sirene", "Редена салата домати, краставици и плочка сирене", "4,20", "350", ""],
["", "15-salata-ot-krastaviczi-i-soevo-chesnov-sos", "15. Салата от краставици и соево чеснов сос", "4,20", "300", ""],
["", "17-kitajska-salata", "17. Китайска салата", "4,20", "450", ""],
["", "22-salata-lyutivo-zele", "22. Салата Лютиво зеле", "2,80", "350", ""],
["", "20-przheni-kartofki-ss-sirene", "20. Пържени картофки със сирене", "2,80", "360", ""],
["", "21-przheni-kartofi", "21. Пържени картофи", "2,10", "300", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "2,10", "300", ""],
["", "25-supa-pile-s-pechurki", "25. Супа пиле с печурки", "2,10", "300", ""],
["", "26-supa-czarevicza-s-pile", "26. Супа царевица с пиле", "1,40", "300", ""],
["", "27-supa-czarevicza-i-pile", "27. Супа царевица и пиле", "2,10", "300", ""],
["", "29-lyuto-kisela-supa", "29. Люто кисела супа", "2,10", "300", ""]

            ],

            "Ориз и Спагети": [
                ["", "34-oriz-ss-zelenchuczi-luk-i-yajcza", "34. Ориз със зеленчуци, лук и яйца", "3,50", "800", ""],
["", "36-oriz-s-tri-vida-meso-i-yajcza", "36. Ориз с три вида месо и яйца", "4,90", "800", ""],
["", "37-oriz-po-kantonski", "37. Ориз по Кантонски", "4,90", "800", ""],
["", "38-oriz-ss-zelenchuczi-i-yajcza", "38. Ориз със зеленчуци и яйца", "3,50", "800", ""],
["", "39-oriz-ss-zelenchuczi-kri-i-yajcza", "39. Ориз със зеленчуци, къри и яйца", "3,50", "800", ""],
["", "40-oriz-ss-skaridi-i-yajcza", "40. Ориз със скариди и яйца", "5,60", "800", ""],
["", "41-oriz-s-pileshko-i-yajcza", "41. Ориз с пилешко и яйца", "4,90", "800", ""],
["", "43-oriz-na-para", "43. Ориз на пара", "1,40", "600", ""],
["", "44-oriz-s-lyut-sos", "44. Ориз с лют сос", "3,50", "800", ""],
["", "45-oriz-s-bambuk-i-cherni-gbi", "45. Ориз с бамбук и черни гъби", "4,20", "800", ""],
["", "46-oriz-ss-svinsko-i-zelenchuczi", "46. Ориз със свинско и зеленчуци", "4,90", "800", ""],
["", "47-orizovi-spageti-ss-zelenchuczi-i-yajcza", "47. Оризови спагети със зеленчуци и яйца", "4,20", "600", ""],
["", "48-mi-fen-na-metalna-plocha---orizovi-spageti-s-morski-delikatesi-i-yajcza", "48. Ми Фен на метална плоча - оризови спагети с морски деликатеси и яйца", "7,00", "600", ""],
["", "49-orizovi-spageti-s-pileshko-i-yajcza", "49. Оризови спагети с пилешко и яйца", "5,60", "600", ""],
["", "50-orizovi-spageti-s-tri-vida-meso-i-yajcza", "50. Оризови спагети с три вида месо и яйца", "5,60", "600", ""],
["", "51-spageti-ss-zelenchuczi-i-yajcza", "51. Спагети със зеленчуци и яйца", "3,50", "600", ""],
["", "52-spageti-s-pileshko-i-yajcza", "52. Спагети с пилешко и яйца", "4,90", "600", ""],
["", "53-spageti-s-tri-vida-meso-i-yajcza", "53. Спагети с три вида месо и яйца", "4,90", "600", ""],
["", "54-spageti-na-metalna-plocha-s-morski-delikatesi-i-yajcza", "54. Спагети на метална плоча с морски деликатеси и яйца", "5,60", "600", ""],
["", "55-spageti-s-lyut-sos-i-yajcza", "55. Спагети с лют сос и яйца", "3,50", "600", ""],
["", "56-kitajsko-przheni-khlebche", "56. Китайско пържени хлебче", "0,70", "", ""]

            ],

            "pork": [
                ["", "57-svinsko-pette-vkusa", "57. Свинско Петте вкуса", "7,70", "600", ""],
["", "58-svinsko-v-sladko-kisel-sos", "58. Свинско в сладко-кисел сос", "7,70", "600", ""],
["", "60-svinsko-ss-zelenchuczi", "60. Свинско със зеленчуци", "7,00", "700", ""],
["", "61-svinsko-s-bambuk-i-cherni-gbi", "61. Свинско с бамбук и  черни гъби", "7,70", "700", ""],
["", "62-svinsko-s-luk", "62. Свинско с лук", "7,70", "700", ""],
["", "63-svinsko-s-pechurki", "63. Свинско с печурки", "8,40", "700", ""],
["", "64-rebrcza-v-soev-sos", "64. Ребърца в соев сос", "9,10", "700", ""],
["", "65-khrupkavi-rebrcza", "65. Хрупкави ребърца", "9,10", "700", ""],
["", "67-svinsko-s-kartofi", "67. Свинско с картофи", "7,70", "700", ""],
["", "68-svinsko-po-imperatorski-s-fstczi-i-lyut-sos", "68. Свинско по императорски с фъстъци и лют сос", "7,70", "700", ""],
["", "70-svinsko-na-metalna-plocha", "70. Свинско на метална плоча", "7,70", "700", ""],
["", "71-svinsko-yusian-s-lyuto-kiselo-sladk-sos-ss-zelenchuczi", "71. Свинско Юсиан с люто-кисело-сладък сос със зеленчуци", "7,70", "700", ""],
["", "72-svinsko-pileshko-teleshko-i-zelenchuczi", "72. Свинско, Пилешко, телешко и зеленчуци", "7,70", "700", ""],
["", "73-svinsko-s-cherni-gbi-krastaviczi-bambuk-i-yajcza", "73. Свинско с черни гъби, краставици, бамбук и яйца", "7,70", "700", ""],
["", "74-svinsko-s-chushki", "74. Свинско с чушки", "7,70", "700", ""],
["", "75-svinsko-vrkhu-byal-oriz", "75. Свинско върху бял ориз", "6,30", "700", ""]

            ],

            "Пилешко": [
                ["", "76-pileshki-przholki-5br", "76. Пилешки пържолки 5бр", "5,60", "400", ""],
["", "77-panirano-khripkavo-pileshko", "77. Панирано хрипкаво пилешко", "7,70", "500", ""],
["", "78-khrupkavo-pileshki-khapki-ss-susam", "78. Хрупкаво пилешки хапки със сусам", "7,00", "400", ""],
["", "80-pileshko-yusian-s-lyuto-kisel-sladk-sos", "80. Пилешко Юсиан с люто-кисел-сладък сос", "7,70", "700", ""],
["", "81-pileshko-s-pechurki", "81. Пилешко с печурки", "8,40", "700", ""],
["", "82-pileshko-pette-vkusa", "82. Пилешко Петте вкуса", "7,70", "600", ""],
["", "83-pileshko-po-imperatorski-s-fstczi-i-lyut-sos", "83. Пилешко по императорски с фъстъци и лют сос", "8,40", "700", ""],
["", "84-sladko-kiselo-pile", "84. Сладко-кисело пиле", "7,70", "600", ""],
["", "85-pileshko-vrkhu-byal-oriz", "85. Пилешко върху бял ориз", "6,30", "700", ""],
["", "86-pileshko-s-kashu", "86. Пилешко с кашу", "9,80", "700", ""],
["", "87-pileshko-ss-zelenchuczi", "87. Пилешко със зеленчуци", "7,70", "700", ""],
["", "88-pileshko-s-bambuk-i-cherni-gbi", "88. Пилешко с бамбук и черни гъби", "7,70", "700", ""],
["", "89-pileshko-ss-zelenchuczi-i-kri", "89. Пилешко със зеленчуци и къри", "7,70", "700", ""],
["", "90-khrupkavo-pileshko-s-limon", "90. Хрупкаво пилешко с лимон", "7,70", "600", ""],
["", "91-pileshko-s-ananas", "91. Пилешко с ананас", "7,70", "700", ""],
["", "92-pileshko-na-metalna-plocha", "92. Пилешко на метална плоча", "8,40", "700", ""],
["", "94-pileshko-s-kartofi", "94. Пилешко с картофи", "7,70", "700", ""],
["", "95-khrupkavi-pileshki-krilcza", "95. Хрупкави пилешки крилца", "5,60", "", ""]

            ],

            "veal": [
                ["", "96-teleshko-v-lyut-sos", "96. Телешко в лют сос", "9,10", "700", ""],
["", "97-teleshko-ss-zelenchuczi", "97. Телешко със зеленчуци", "9,10", "700", ""],
["", "98-teleshko-s-chushki", "98. Телешко с чушки", "9,10", "700", ""],
["", "99-teleshko-s-luk", "99. Телешко с лук", "9,10", "700", ""],
["", "100-teleshko-s-kartofi", "100. Телешко с картофи", "9,10", "700", ""],
["", "101-teleshko-s-pechurki", "101. Телешко с печурки", "9,80", "700", ""],
["", "102-teleshko-s-bambuk-i-cherni-gbi", "102. Телешко с бамбук и черни гъби", "9,80", "700", ""],
["", "103-teleshko-na-metalna-plocha", "103. Телешко на метална плоча", "9,80", "700", ""]

            ],

            "fish": [
                ["", "124-khrupkavi-ribeni-khapki", "124. Хрупкави рибени хапки", "7,00", "350", ""],
["", "126-riba-v-sladko-kisel-sos", "126. Риба в сладко-кисел сос", "7,70", "500", ""],
["", "127-riba-v-lyut-sos", "127. Риба в лют сос", "7,70", "650", ""],
["", "128-riba-ss-zelenchuczi", "128. Риба със зеленчуци", "7,70", "650", ""],
["", "129-riba-s-bambuk-i-cherni-gbi", "129. Риба с бамбук и черни гъби", "7,70", "650", ""],
["", "130-riba-pette-vkusa", "130. Риба Петте вкуса", "7,70", "600", ""],
["", "136-kalmari-s-lyut-sos", "136. Калмари с лют сос", "12,60", "600", ""],
["", "137-kalmari-ss-zelenchuczi", "137. Калмари със зеленчуци", "12,60", "600", ""],
["", "138-kalmari-s-bambuk-i-cherni-gbi", "138. Калмари с бамбук и черни гъби", "12,60", "600", ""]

            ],

            "pizza": [
                ["", "dzhenzano", "Джензано", "4,90", "", ""],
["", "olimp", "Олимп", "6,30", "", ""],
["", "asorti", "Асорти", "6,30", "", ""],
["", "grczka", "Гръцка", "5,60", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "margarita-s-pileshko-file", "Маргарита с пилешко филе", "4,90", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "chetiri-sirena", "Четири сирена", "5,60", "", ""],
["", "byagashho-pile", "Бягащо пиле", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "khavaj", "Хавай", "4,90", "", ""],
["", "peperoni", "Пеперони", "5,60", "", ""],
["", "picza-po-izbor", "Пица по избор", "7,00", "", ""]

            ],

            "desserts": [
                ["", "149-paniran-sladoled", "149. Паниран сладолед", "2,80", "", ""],
["", "150-paniran-banan", "150. Паниран банан", "2,80", "150", ""],
["", "151-paniran-ananas", "151. Паниран ананас", "2,80", "150", ""],
["", "152-panirani-plodove-asorti", "152. Панирани плодове асорти", "2,80", "150", ""],
["", "kitajski-klechki", "Китайски клечки", "0,00", "", ""]

            ],

            "sauces": [
                ["", "soev-sos", "Соев сос", "0,70", "150", ""],
["", "sladko-kisel-sos", "Сладко кисел сос", "0,70", "150", ""]

            ]
        }', 
        'slug' => 'kitayski-restorant-olimp',
        'business_name' => 'Китайски ресторант Олимп',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Botevgrad',
        'region' => 'Botevgrad',
        'postal_code' => '2140',
        'address' => 'кв.Изток',
        'address_additional' => '',
        'coords_x' => '42.9029026',
        'coords_y' => '23.7997303',
        'phone' => '+359899333253',
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
                ["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "zhtvarska-salata", "Жътварска салата", "2,80", "350", ""],
["", "gradinarska-salata", "Градинарска салата", "3,50", "350", ""],
["", "lyatna-salata", "Лятна салата", "3,50", "350", ""],
["", "czezar-salata", "Цезар салата", "4,20", "350", ""],
["", "salata-kinoa-v-zeleno", "Салата киноа в зелено", "4,90", "300", ""],
["", "salata-nicza", "Салата Ница", "4,20", "400", ""],
["", "salata-ot-tikvichki-domati-i-moczarela", "Салата от тиквички, домати и моцарела", "3,50", "300", ""],
["", "salata-riba-ton", "Салата риба тон", "3,50", "350", ""],
["", "salata-lionez", "Салата Лионез", "4,20", "300", ""],
["", "salata-ot-spanak-i-pushena-riba-s-dresing", "Салата от спанак и пушена риба с дресинг", "4,90", "350", ""],
["", "tabule-s-morski-dar", "Табуле с морски дар", "4,20", "350", ""],
["", "salata-ot-cherveno-czveklo-i-yablki", "Салата от червено цвекло и ябълки", "3,50", "350", ""],
["", "beleni-domati-s-katk-i-pecheni-chushki", "Белени домати с катък и печени чушки", "3,50", "350", ""],
["", "kapreze-salata", "Капрезе салата", "4,20", "350", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "svezha-salata-medeni-yajcza", "Свежа салата медени яйца", "4,20", "350", ""],
["", "salata-target", "Салата Таргет", "3,50", "400", ""],
["", "salata-ot-fusili-s-cheri-domati-i-moczarela", "Салата от фусили с чери домати и моцарела", "3,50", "400", ""],
["", "salata-ot-bulgur-s-marinovani-zelenchuczi-v-orizovi-kori", "Салата от булгур с мариновани зеленчуци в оризови кори", "4,20", "280", ""],
["", "salata-ss-sirene-khalumi", "Салата със сирене халуми", "3,50", "350", ""],
["", "salata-ot-bulgur-ss-somga", "Салата от булгур със сьомга", "4,90", "350", ""]

            ],

            "dry-appetizer": [
                ["", "lukanka", "Луканка", "4,20", "100", ""],
["", "pastrma", "Пастърма", "3,50", "50", ""],
["", "file-elena", "Филе Елена", "3,50", "50", ""],
["", "pusheno-pateshko-file", "Пушено патешко филе", "2,80", "50", ""],
["", "proshuto", "Прошуто", "2,80", "50", ""],
["", "sirene", "Сирене", "2,10", "100", ""],
["", "kashkaval", "Кашкавал", "2,10", "100", ""]

            ],

            "starters": [
                ["", "spanacheni-kyufteta", "Спаначени кюфтета", "4,20", "250", ""],
["", "brokoli-ss-sos-sirena", "Броколи със сос сирена", "3,50", "250", ""],
["", "pecheni-zelenchuczi-na-plocha", "Печени зеленчуци на плоча", "2,80", "250", ""],
["", "chushka-byurek", "Чушка бюрек", "2,80", "200", ""],
["", "polenta", "Полента", "3,50", "220", ""],
["", "kroketi-ot-nakhut-s-khumus", "Крокети от нахут с хумус", "4,90", "280", ""],
["", "khumus-s-avokado-i-pita-chips", "Хумус с авокадо и пита чипс", "4,90", "220", ""],
["", "panirani-moczareleni-stikcheta-s-ragu-ot-gbi", "Панирани моцарелени стикчета с рагу от гъби", "4,90", "300", ""],
["", "bryukselsko-zele-bolonez", "Брюкселско зеле Болонез", "3,50", "250", ""],
["", "sufle-ss-sirene", "Суфле със сирене", "3,50", "180", ""],
["", "zapecheno-sirene-v-kora-s-med-i-susam", "Запечено сирене в кора с мед и сусам", "3,50", "180", ""],
["", "gbi-zapecheni-s-bekon-i-kashkaval", "Гъби запечени с бекон и кашкавал", "3,50", "150", ""],
["", "gbi-zapecheni-s-moczarela-i-sushen-domat", "Гъби запечени с моцарела и сушен домат", "4,90", "150", ""],
["", "kamember-v-borovinkov-sos", "Камембер в боровинков сос", "7,00", "150", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "200", ""],
["", "khrupkavi-pileshki-filencza-ss-susam-ili-kornflejks", "Хрупкави пилешки филенца със сусам или корнфлейкс", "3,50", "250", ""],
["", "przheni-pileshki-krilcza-s-barbekyu-sos", "Пържени пилешки крилца с барбекю сос", "3,50", "200", ""],
["", "pileshki-filencza-parmedzhano", "Пилешки филенца Пармеджано", "4,20", "300", ""],
["", "zapecheni-kartofi-s-proshuto-i-svezha-salata", "Запечени картофи с прошуто и свежа салата", "4,90", "250", ""],
["", "gshi-drob", "Гъши дроб", "14,70", "180", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "2,80", "220", ""],
["", "shishcheta-ot-pileshki-drobcheta-bekon-i-gbi", "Шишчета от пилешки дробчета, бекон и гъби", "4,90", "220", ""],
["", "svinski-drob", "Свински дроб", "3,50", "220", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "180", ""],
["", "banski-starecz-v-sakhanche", "Бански Старец в саханче", "4,20", "150", ""],
["", "krekhki-svinski-zhuliencheta-s-gbi", "Крехки свински жулиенчета с гъби", "4,90", "250", ""]

            ],

            "burgers": [
                ["", "teleshki-stek-burger", "Телешки стек бургер", "7,00", "", ""],
["", "teleshki-stek-burger-abrdin-angs", "Телешки стек бургер Абърдин Ангъс", "8,40", "", ""],
["", "pileshki-chijz-burger", "Пилешки чийз бургер", "7,00", "", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "300", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "1,40", "300", ""],
["", "krem-supa-ot-brokoli", "Крем супа от броколи", "2,10", "300", ""],
["", "frenska-luchena-supa", "Френска лучена супа", "2,80", "300", ""],
["", "krem-supa-ot-tikvichki-s-pushena-somga", "Крем супа от тиквички с пушена сьомга", "2,80", "300", ""],
["", "krem-supa-ot-czarevicza-s-khrupkav-sudzhuk", "Крем супа от царевица с хрупкав суджук", "2,80", "300", ""],
["", "krem-supa-ot-grakh-s-mentovo-pesto", "Крем супа от грах с ментово песто", "2,80", "300", ""],
["", "spanachena-supa", "Спаначена супа", "2,10", "300", ""],
["", "domatena-supa", "Доматена супа", "2,10", "300", ""]

            ],

            "pasta": [
                ["", "spageti-bolonez", "Спагети Болонез", "3,50", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "3,50", "350", ""],
["", "taliatele-s-pileshko-i-asperzhi", "Талиателе с пилешко и аспержи", "4,20", "350", ""],
["", "pene-s-pikantni-nadenichki-i-brokoli", "Пене с пикантни наденички и броколи", "3,50", "350", ""],
["", "pasta-peskatore-s-morski-dar", "Паста Пескаторе с морски дар", "3,50", "350", ""]

            ],

            "Основни ястия": [
                ["", "zelena-kapama", "Зелена капама", "4,20", "300", ""],
["", "vegetarianski-stek", "Вегетариански стек", "5,60", "350", ""],
["", "rizoto-s-pileshko-zelenchuczi-i-gbi", "Ризото с пилешко, зеленчуци и гъби", "3,50", "350", ""],
["", "rizoto-s-praz-i-maskarpone", "Ризото с праз и маскарпоне", "3,50", "300", ""],
["", "rizoto-ss-somga-i-maskarpone", "Ризото със сьомга и маскарпоне", "6,30", "300", ""],
["", "pileshko-file-s-rozmarin", "Пилешко филе с розмарин", "4,20", "280", ""],
["", "pile-nyu-jork", "Пиле Ню Йорк", "4,90", "350", ""],
["", "pileshko-role", "Пилешко Роле", "5,60", "350", ""],
["", "pile-fakhitas", "Пиле Фахитас", "5,60", "400", ""],
["", "fakhitas-s-teleshko", "Фахитас с телешко", "7,00", "400", ""],
["", "fakhitas-miks", "Фахитас Микс", "7,00", "400", ""],
["", "pile-kri", "Пиле Къри", "4,90", "400", ""],
["", "pile-zhulien", "Пиле Жулиен", "4,90", "350", ""],
["", "pile-parma", "Пиле Парма", "7,00", "300", ""],
["", "pileshko-s-orizovi-nudli", "Пилешко с оризови нудъли", "5,60", "300", ""],
["", "pile-pesto", "Пиле Песто", "7,00", "300", ""],
["", "pileshka-tika-masala", "Пилешка Тика Масала", "7,00", "300", ""],
["", "pile-s-gorchicza-i-estragon", "Пиле с горчица и естрагон", "4,90", "350", ""],
["", "pile-putaneska", "Пиле Путанеска", "4,90", "300", ""],
["", "pile-fresh", "Пиле Фреш", "4,90", "280", ""],
["", "pileshi-shishcheta-s-ananas", "Пилеши шишчета с ананас", "4,90", "350", ""],
["", "pileshki-klki-barbekyu", "Пилешки кълки барбекю", "5,60", "400", ""],
["", "pateshko-magre-s-ananas", "Патешко магре с ананас", "10,50", "300", ""],
["", "aromatno-svinsko-vrkhu-tortila", "Ароматно свинско върху тортила", "9,10", "400", ""],
["", "prazhka-shunka", "Пражка шунка", "6,30", "350", ""],
["", "svinski-medaloni", "Свински медальони", "7,70", "350", ""],
["", "svinski-rolcza-kapreze", "Свински ролца Капрезе", "7,00", "300", ""],
["", "svinska-przhola", "Свинска пържола", "4,90", "300", ""],
["", "svinska-przhola-bedrok", "Свинска пържола Бедрок", "9,80", "380", ""],
["", "svinski-t-bon-stek", "Свински Т-бон Стек", "7,70", "330", ""],
["", "shish-xxl", "Шиш XXL", "7,00", "300", ""],
["", "tajlandska-gozba-ss-svinsko-i-nudli", "Тайландска гозба със свинско и нудли", "6,30", "300", ""],
["", "svinsko-bon-file-s-gben-sos-i-oriz", "Свинско бон филе с гъбен сос и ориз", "8,40", "300", ""],
["", "krekhki-svinski-filencza-ss-pepr-sos", "Крехки свински филенца със пепър сос", "5,60", "300", ""],
["", "pecheni-svinski-rebra-natyur", "Печени свински ребра натюр", "4,20", "300", ""],
["", "pecheni-svinski-rebra-ss-soev-sos-i-med", "Печени свински ребра със соев сос и мед", "4,90", "330", ""],
["", "svinski-shishcheta", "Свински шишчета", "4,20", "", ""],
["", "svinski-pechen-dzholan", "Свински печен джолан", "7,70", "400", ""],
["", "teleshki-zhuliencheta-ss-sos-bearnez", "Телешки жулиенчета със сос Беарнез", "9,80", "350", ""],
["", "teleshki-filencza-s-kanape-ot-oriz-i-gbi", "Телешки филенца с канапе от ориз и гъби", "9,80", "350", ""],
["", "chili-konkarne", "Чили конкарне", "5,60", "400", ""],
["", "teleshko-pecheno-vrkhu-rizoto-ss-spanak", "Телешко печено върху ризото със спанак", "9,80", "300", ""],
["", "krekhki-agneshki-t-bon-stekcheta", "Крехки агнешки Т-бон стекчета", "13,30", "300", ""],
["", "agneshki-stek-ot-but-vrkhu-aromaten-khlyab", "Агнешки стек от бут върху ароматен хляб", "12,60", "300", ""],
["", "agneshki-french-rak-korona", "Агнешки Френч рак-корона", "25,90", "300", ""],
["", "agneshki-pechen-dzholan", "Агнешки печен джолан", "13,30", "500", ""],
["", "khrupkavi-agneshki-kotletcheta-s-bilkova-korichka", "Хрупкави агнешки котлетчета с билкова коричка", "13,30", "350", ""],
["", "agneshki-kotletcheta-v-lyuto-vinen-sos", "Агнешки котлетчета в люто винен сос", "13,30", "280", ""],
["", "agneshki-koftas", "Агнешки Кофтас", "6,30", "300", ""]

            ],

            "Стекове": [
                ["", "teleshki-ribaj-stek", "Телешки Рибай Стек", "20,30", "280", ""],
["", "teleshki-t-bon-stek", "Телешки Т-бон Стек", "20,30", "350", ""]

            ],

            "Риби": [
                ["", "kotlet-ot-somga-ss-spanak-a-lakrem", "Котлет от сьомга със спанак А ла’крем", "11,90", "300", ""],
["", "pstrva-pechena-s-filirani-bademi", "Пъстърва печена с филирани бадеми", "6,30", "350", ""],
["", "file-ot-pastrva-vrkhu-kanape-ot-oriz-i-limonena-kora", "Филе от пастърва върху канапе от ориз и лимонена кора", "7,70", "350", ""],
["", "czipura-na-skara", "Ципура на скара", "9,80", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "9,80", "300", ""],
["", "somga-file-s-maslinova-pasta-i-moczarela", "Сьомга филе с маслинова паста и моцарела", "15,40", "280", ""],
["", "riba-treska", "Риба Треска", "9,10", "300", ""],
["", "stek-ot-riba-ton-vrkhu-talietele-pesto-i-guakamole", "Стек от риба тон върху талиетеле песто и гуакамоле", "16,80", "300", ""]

            ],

            "Морски дар": [
                ["", "plato-midi-natyur-s-cherupka", "Плато миди натюр с черупка", "10,50", "500", ""],
["", "przheni-kalmari", "Пържени калмари", "6,30", "220", ""],
["", "kalmari-pesto", "Калмари песто", "7,00", "280", ""],
["", "pipala-ot-kalmar-v-siczilianska-marinata", "Пипала от калмар в сицилианска марината", "7,00", "220", ""],
["", "tigrovi-skaridi-s-limonov-sos", "Тигрови скариди с лимонов сос", "21,00", "", ""],
["", "kralski-skaridi-s-perno", "Кралски скариди с перно", "12,60", "180", ""],
["", "kralski-skaridi-s-limonov-sos", "Кралски скариди с лимонов сос", "9,80", "250", ""],
["", "sushi", "Суши", "7,00", "200", ""]

            ],

            "sachs": [
                ["", "zelenchukov-sach", "Зеленчуков сач", "6,30", "400", ""],
["", "pileshki-sach", "Пилешки сач", "11,90", "480", ""],
["", "svinski-sach", "Свински сач", "13,30", "480", ""]

            ],

            "Плата": [
                ["", "meshana-skara", "Мешана скара", "11,90", "400", ""],
["", "pileshka-koshnicza-za-dvama", "Пилешка кошница за двама", "12,60", "600", ""],
["", "svinska-koshnicza-za-dvama", "Свинска кошница за двама", "14,00", "600", ""],
["", "agneshka-koshnicza", "Агнешка кошница", "24,50", "500", ""],
["", "plato-sirena", "Плато Сирена", "7,00", "", ""]

            ],

            "Добавки и гарнитури": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "", ""],
["", "pikantni-przheni-kartofi", "Пикантни пържени картофи", "1,40", "", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "", ""],
["", "oriz", "Ориз", "0,70", "150", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "2,10", "150", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "", ""]

            ],

            "bread": [
                ["", "bageta", "Багета", "1,40", "110", ""],
["", "chabata", "Чабата", "0,70", "90", ""],
["", "giros", "Гирос", "1,40", "100", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "1,40", "200", ""],
["", "domashen-chijzkejk", "Домашен чийзкейк", "2,80", "250", ""],
["", "domashno-morkoveno-rulo-s-maskrpone", "Домашно морковено руло с маскрпоне", "2,10", "150", ""],
["", "yablkov-paj", "Ябълков пай", "2,80", "150", ""],
["", "chereshov-paj", "Черешов пай", "2,80", "150", ""],
["", "krem-karamel", "Крем карамел", "1,40", "100", ""],
["", "czedeno-kiselo-mlyako-s-borovinki", "Цедено кисело мляко с боровинки", "1,40", "150", ""],
["", "plodova-salata", "Плодова салата", "2,80", "200", ""],
["", "krem-dzhuliya", "Крем Джулия", "2,10", "150", ""],
["", "krem-bryule", "Крем брюле", "2,10", "120", ""],
["", "shokoladov-fondan-s-topka-sladoled", "Шоколадов фондан с топка сладолед", "2,80", "250", ""]

            ],

            "drinks": [
                ["", "sok-bbb", "Сок BBB", "0,70", "200", ""],
["", "pryasno-izczeden-sok-ot-portokal", "Прясно изцеден сок от портокал", "2,10", "200", ""],
["", "pryasno-izczeden-sok-ot-grejpfrut", "Прясно изцеден сок от грейпфрут", "2,10", "200", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "330", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "studen-chaj-nestea", "Студен чай Nestea", "1,40", "500", ""],
["", "energijna-napitka", "Енергийна напитка", "2,80", "330", ""]

            ],

            "Сайдери": [
                ["", "samrsbi", "Самърсби", "2,10", "330", ""],
["", "kradeczt-na-yablki", "Крадецът на ябълки", "2,10", "500", ""]

            ]
        }', 
        'slug' => 'bar-target',
        'business_name' => 'Bar &amp; Restaurant Target',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Samokov',
        'region' => 'Samokov',
        'postal_code' => '2000',
        'address' => 'ул. Тодор Пеев 18',
        'address_additional' => '',
        'coords_x' => '42.33404174',
        'coords_y' => '23.56388961',
        'phone' => '+359876407434',
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
                ["", "shopska-salata", "Шопска салата", "2,10", "350", ""],
["", "zelena-salata", "Зелена салата", "1,40", "350", ""]

            ],

            "Риби": [
                ["", "sharan-porcziya", "Шаран порция", "4,20", "320", ""],
["", "gavros", "Гаврос", "2,80", "250", ""],
["", "skumriya", "Скумрия", "3,50", "300", ""],
["", "pstrva", "Пъстърва", "4,20", "300", ""],
["", "czacza", "Цаца", "1,40", "250", ""],
["", "czacza", "Цаца", "2,10", "330", ""],
["", "czipura", "Ципура", "6,30", "300", ""],
["", "lavrak", "Лаврак", "6,30", "300", ""],
["", "kalmari", "Калмари", "3,50", "250", ""],
["", "safrid", "Сафрид", "3,50", "300", ""],
["", "sardina", "Сардина", "3,50", "300", ""],
["", "barbun", "Барбун", "3,50", "300", ""],
["", "vatos", "Ватос", "6,30", "300", ""],
["", "tilapiya-file", "Тилапия филе", "3,50", "300", ""],
["", "skaridi", "Скариди", "6,30", "250", ""],
["", "czyal-sharan", "Цял шаран", "10,50", "", ""]

            ],

            "garnish": [
                ["", "vareni-krtofi", "Варени кртофи", "1,40", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "150", ""],
["", "domati", "Домати", "0,70", "150", ""],
["", "krastaviczi", "Краставици", "0,70", "150", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ]
        }', 
        'slug' => 'riben-kt',
        'business_name' => 'Рибен кът',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6609',
        'address' => 'бул. Христо Ботев',
        'address_additional' => '',
        'coords_x' => '41.63102359',
        'coords_y' => '25.35876979',
        'phone' => '+359888220998',
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
                ["", "fiesta", "Фиеста", "2,80", "550", ""],
["", "ole-ole", "Оле оле", "2,80", "500", ""],
["", "italiano", "Италиано", "2,80", "500", ""],
["", "vegetariana", "Вегетариана", "2,80", "500", ""],
["", "don-domat", "Дон Домат", "2,80", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "500", ""],
["", "siem", "Сием", "2,80", "430", ""],
["", "czezar", "Цезар", "3,50", "400", ""],
["", "parmedzhano", "Пармеджано", "2,80", "450", ""],
["", "kapreze", "Капрезе", "3,50", "450", ""],
["", "buket", "Букет", "2,80", "450", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "480", ""],
["", "meksikanska-salata", "Мексиканска салата", "2,10", "280", ""],
["", "pile-gbi-i-majoneza", "Пиле, гъби и майонеза", "2,80", "2700", ""],
["", "selska-salata", "Селска салата", "2,80", "450", ""],
["", "shopska", "Шопска", "2,80", "", ""],
["", "domati", "Домати", "2,10", "320", ""],
["", "domati-na-skara", "Домати на скара", "2,10", "300", ""],
["", "domati-ss-sirene", "Домати със сирене", "2,10", "370", ""],
["", "beleni-domati", "Белени домати", "2,10", "300", ""],
["", "beleni-domati-ss-sirene", "Белени домати със сирене", "2,80", "350", ""],
["", "krastaviczi", "Краставици", "2,10", "300", ""],
["", "krastaviczi-ss-sirene", "Краставици със сирене", "2,10", "350", ""],
["", "meshana", "Мешана", "2,10", "370", ""],
["", "salata-zele", "Салата зеле", "2,10", "200", ""],
["", "rodopska-salata", "Родопска салата", "2,10", "400", ""],
["", "kalugerska-salata", "Калугерска салата", "2,80", "450", ""],
["", "zelena-salata", "Зелена салата", "2,10", "300", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "400", ""],
["", "pecheni-chushki", "Печени чушки", "2,80", "250", ""],
["", "salata-ot-morkovi", "Салата от моркови", "2,10", "300", ""],
["", "varen-fasul", "Варен фасул", "2,10", "250", ""],
["", "varen-fasul-s-bekon", "Варен фасул с бекон", "2,80", "320", ""],
["", "varen-fasul-s-lyutenicza", "Варен фасул с лютеница", "2,10", "300", ""],
["", "vareni-kartofi", "Варени картофи", "2,10", "500", ""],
["", "vareni-kartofi-s-majoneza", "Варени картофи с майонеза", "2,10", "400", ""],
["", "lyutenicza-s-luk", "Лютеница с лук", "2,10", "200", ""],
["", "maslini-s-luk", "Маслини с лук", "1,40", "150", ""],
["", "kopoolu", "Кьопоолу", "2,80", "250", ""],
["", "yajchena-salata", "Яйчена салата", "2,80", "200", ""],
["", "patladzhan-s-chesn", "Патладжан с чесън", "2,10", "250", ""],
["", "tikvichki-s-chesn", "Тиквички с чесън", "2,10", "250", ""],
["", "kiseli-krastaviczi", "Кисели краставици", "1,40", "200", ""],
["", "vareno-yajcze", "Варено яйце", "0,00", "", ""]

            ],

            "starters": [
                ["", "chushka-byurek", "Чушка бюрек", "2,80", "200", ""],
["", "pileshko-file-s-chushki-i-gbi-na-tigan", "Пилешко филе с чушки и гъби на тиган", "4,20", "350", ""],
["", "teleshko-sukalche-s-chushki-i-gbi-na-tigan", "Телешко сукалче с чушки и гъби на тиган", "10,50", "350", ""],
["", "svinska-przhola-s-chushki-i-gbi-na-tigan", "Свинска пържола с чушки и гъби на тиган", "5,60", "350", ""],
["", "svinski-dzholan-s-chushki-i-gbi", "Свински джолан с чушки и гъби", "4,90", "350", ""],
["", "pileshki-khapki", "Пилешки хапки", "2,80", "250", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "3,50", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "3,50", "300", ""],
["", "sino-sirene-pane", "Синьо сирене пане", "3,50", "150", ""],
["", "sirene-pane", "Сирене пане", "2,10", "150", ""],
["", "sirene-pane-pod-kapak", "Сирене пане под капак", "2,10", "150", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "200", ""],
["", "topeno-sirene-ss-susam", "Топено сирене със сусам", "2,80", "200", ""],
["", "brokoli", "Броколи", "2,10", "200", ""],
["", "brokoli-pane", "Броколи пане", "2,80", "250", ""],
["", "brokoli-ss-sino-sirene-i-kashkaval", "Броколи със синьо сирене и кашкавал", "4,20", "300", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "300", ""],
["", "milano", "Милано", "4,90", "350", ""],
["", "khavaj", "Хавай", "4,90", "400", ""],
["", "sicziliya", "Сицилия", "4,90", "350", ""],
["", "katerina", "Катерина", "5,60", "350", ""],
["", "kaprichoza", "Капричоза", "4,90", "400", ""],
["", "kalczone-zatvoreno", "Калцоне затворено", "4,90", "400", ""],
["", "palermo", "Палермо", "4,90", "450", ""],
["", "arda", "Арда", "5,60", "450", ""],
["", "polo-tritati", "Поло Тритати", "5,60", "400", ""],
["", "bari", "Бари", "4,90", "450", ""],
["", "vegetariana", "Вегетариана", "5,60", "450", ""],
["", "fiola", "Фиола", "5,60", "450", ""],
["", "napoli", "Наполи", "5,60", "450", ""],
["", "spinachi-450gr", "Спиначи (450гр", "6,30", "", ""],
["", "rila", "Рила", "5,60", "450", ""],
["", "benechi", "Бенечи", "5,60", "500", ""],
["", "venecziya", "Венеция", "5,60", "450", ""],
["", "bleko", "Блеко", "5,60", "400", ""],
["", "formadzho", "Формаджо", "6,30", "450", ""],
["", "roma", "Рома", "5,60", "450", ""],
["", "yamajka", "Ямайка", "5,60", "400", ""],
["", "siem", "Сием", "5,60", "500", ""],
["", "chao-chao-zatvorena", "Чао-чао затворена", "5,60", "450", ""],
["", "kebap-picza", "Кебап пица", "5,60", "500", ""],
["", "dyavolo", "Дяволо", "6,30", "500", ""],
["", "gormet", "Гормет", "5,60", "500", ""],
["", "disko", "Диско", "5,60", "500", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "5,60", "500", ""],
["", "frudi-di-mare", "Фруди ди маре", "6,30", "450", ""],
["", "chorizo", "Чоризо", "6,30", "450", ""],
["", "pestone", "Пестоне", "6,30", "450", ""],
["", "peperoni-s-turski-sudzhuk", "Пеперони с турски суджук", "5,60", "450", ""],
["", "pide-s-turski-sudzhuk", "Пиде с турски суджук", "5,60", "450", ""],
["", "pide-s-teleshka-kajma", "Пиде с телешка кайма", "5,60", "450", ""],
["", "prlenka", "Пърленка", "2,80", "", ""],
["", "khlyab-na-zavedenieto", "Хляб на заведението", "0,70", "150", ""]

            ],

            "pasta": [
                ["", "boloneze", "Болонезе", "3,50", "450", ""],
["", "karbonara", "Карбонара", "4,20", "450", ""],
["", "napoli-350gr0", "Наполи (350гр0", "2,80", "", ""]

            ],

            "pasta": [
                ["", "taliatele-boloneze", "Талиателе Болонезе", "4,20", "350", ""],
["", "taliatele-s-gbi-i-smetana", "Талиателе с гъби и сметана", "4,20", "350", ""],
["", "lazanya-formadzho", "Лазаня Формаджо", "5,60", "400", ""],
["", "lazanya-boloneze-s-teleshka-kajma", "Лазаня Болонезе с телешка кайма", "5,60", "400", ""]

            ],

            "sauces": [
                ["", "pesto-dzhenoveze", "Песто Дженовезе", "1,40", "40", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""]

            ],

            "Ястия с картофи": [
                ["", "noazeti", "Ноазети", "2,10", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "przheni-kartofi-s-kashkaval", "Пържени картофи с кашкавал", "2,10", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "200", ""],
["", "pikantni-kartofi-ss-sirene", "Пикантни картофи със сирене", "2,10", "250", ""],
["", "pikantni-kartofi-s-kashkaval", "Пикантни картофи с кашкавал", "2,10", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "350", ""],
["", "patatnik", "Пататник", "3,50", "500", ""],
["", "zapecheni-kartofi-na-furna-ss-sirene", "Запечени картофи на фурна със сирене", "2,80", "450", ""],
["", "zapecheni-kartofi-na-furna-s-kashkaval", "Запечени картофи на фурна с кашкавал", "2,80", "450", ""],
["", "zapecheni-kartofi-na-furna-s-shunka", "Запечени картофи на фурна с шунка", "2,80", "450", ""],
["", "zapecheni-kartofi-na-furna-asorti-450gr", "Запечени картофи на фурна асорти (450гр)", "3,50", "", ""],
["", "zapecheni-kartofi-na-furna-s-kashkaval-i-sirene", "Запечени картофи на фурна с кашкавал и сирене", "3,50", "450", ""]

            ],

            "additives": [
                ["", "zelnchukova", "Зелнчукова", "0,70", "", ""],
["", "mesna", "Месна", "0,70", "", ""]

            ],

            "alaminuti": [
                ["", "shniczel", "Шницел", "2,80", "220", ""],
["", "omlet", "Омлет", "1,40", "", ""],
["", "gbi-v-maslo", "Гъби в масло", "1,40", "200", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "250", ""],
["", "sirene-po-trakijski", "Сирене по тракийски", "2,80", "260", ""],
["", "yajcza-na-ochi", "Яйца на очи", "1,40", "", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "200", ""],
["", "kavrma-v-gyuvech", "Кавърма в гювеч", "4,90", "", ""]

            ],

            "Ястия на скара": [
                ["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "teleshko-kyufte", "Телешко кюфте", "1,40", "70", ""],
["", "nevrozno-kyufte", "Неврозно кюфте", "1,40", "150", ""],
["", "tatarkos-kyufte", "Татаркос кюфте", "2,80", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "120", ""],
["", "pileshka-przhola", "Пилешка пържола", "3,50", "250", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "200", ""],
["", "pileshki-krilcza", "Пилешки крилца", "0,70", "", ""],
["", "shashlk-pileshki", "Шашлък пилешки", "3,50", "200", ""],
["", "teleshko-sukalche", "Телешко сукалче", "9,10", "300", ""],
["", "teleshko-shishche", "Телешко шишче", "2,80", "120", ""],
["", "shashlk-teleshki", "Шашлък телешки", "6,30", "200", ""],
["", "rebra-ot-sukalche", "Ребра от сукалче", "4,90", "350", ""],
["", "agneshki-karencza", "Агнешки каренца", "9,80", "", ""],
["", "agneshko-shishche", "Агнешко шишче", "4,20", "120", ""],
["", "shashlk-agneshki", "Шашлък агнешки", "6,30", "200", ""],
["", "svinska-przhola", "Свинска пържола", "4,20", "200", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "shashlk-svinski", "Шашлък свински", "3,50", "200", ""],
["", "svinski-grdi", "Свински гърди", "3,50", "250", ""],
["", "svinski-rebrcza", "Свински ребърца", "3,50", "300", ""],
["", "karnache", "Карначе", "2,10", "150", ""],
["", "gbi-s-kashkaval", "Гъби с кашкавал", "2,80", "250", ""]

            ],

            "Дреболии": [
                ["", "teleshki-drob", "Телешки дроб", "2,80", "250", ""],
["", "teleshki-drob-po-odrinski", "Телешки дроб по одрински", "2,80", "300", ""],
["", "teleshki-bbreczi", "Телешки бъбреци", "2,80", "250", ""],
["", "ezik-natyur", "Език натюр", "4,90", "200", ""],
["", "ezik-v-maslo", "Език в масло", "5,60", "250", ""],
["", "ezik-pane", "Език пане", "5,60", "250", ""],
["", "teleshko-shkembe-natyur", "Телешко шкембе натюр", "4,20", "200", ""],
["", "teleshko-shkembe-v-maslo", "Телешко шкембе в масло", "4,20", "220", ""],
["", "teleshko-shkembe-pane", "Телешко шкембе пане", "4,90", "250", ""],
["", "teleshko-shkembe-s-kashkaval", "Телешко шкембе с кашкавал", "5,60", "250", ""],
["", "pateshki-srcza", "Патешки сърца", "2,80", "250", ""],
["", "pateshki-srcza-po-selski", "Патешки сърца по селски", "3,50", "250", ""],
["", "pileshki-srcza", "Пилешки сърца", "2,80", "250", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "2,80", "300", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "2,10", "250", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "2,80", "300", ""],
["", "pileshki-drebolii", "Пилешки дреболии", "2,80", "250", ""],
["", "pileshki-drebolii-po-selski", "Пилешки дреболии по селски", "2,80", "300", ""],
["", "pileshki-vodenichki", "Пилешки воденички", "2,80", "200", ""],
["", "pileshki-vodenichki-po-selski", "Пилешки воденички по селски", "2,80", "250", ""]

            ],

            "Рибни специалитети": [
                ["", "sharan", "Шаран", "5,60", "", ""],
["", "skumriya-na-skara", "Скумрия на скара", "4,20", "300", ""],
["", "pstrva", "Пъстърва", "4,90", "", ""],
["", "somga-kotlet", "Сьомга котлет", "12,60", "300", ""],
["", "czipura", "Ципура", "11,90", "450", ""],
["", "lavrak", "Лаврак", "11,90", "450", ""],
["", "rolcza-ot-raczi", "Ролца от раци", "2,10", "", ""],
["", "rolcza-ot-raczi-pane", "Ролца от раци пане", "2,80", "", ""],
["", "kalmari", "Калмари", "5,60", "130", ""],
["", "kalmari-pane", "Калмари пане", "2,80", "150", ""],
["", "midi-pane", "Миди пане", "3,50", "150", ""],
["", "kralski-skaridi", "Кралски скариди", "11,20", "150", ""],
["", "koktejlni-skaridi", "Коктейлни скариди", "5,60", "150", ""]

            ]
        }', 
        'slug' => 'siem-rili',
        'business_name' => 'Siem Rili',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6600',
        'address' => 'ул. Стефан Караджа 17',
        'address_additional' => '',
        'coords_x' => '41.64084214',
        'coords_y' => '25.372433',
        'phone' => '+35936165869',
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
                ["", "shniczel-po-vienski", "Шницел по Виенски", "5,60", "450", ""],
["", "meze-za-chetirima", "Мезе за четирима", "13,30", "1200", ""],
["", "gbi-s-tri-vida-sirena", "Гъби с три вида сирена", "4,20", "300", ""],
["", "zapechen-varen-kartof-plnen-s-shunka-kashkaval", "Запечен варен картоф пълнен с шунка, кашкавал", "3,50", "300", ""],
["", "ovcharski-paj", "Овчарски пай", "5,60", "300", ""],
["", "svinsko-meso-ss-sezonni-zelenchuczi-vrkhu-kanape-ot-pryasno-izpechena-pitka", "Свинско месо със сезонни зеленчуци върху канапе от прясно изпечена питка", "6,30", "300", ""]

            ],

            "Сухи мезета": [
                ["", "lukanka", "Луканка", "1,40", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,80", "50", ""],
["", "plato-sukhi-mezeta", "Плато сухи мезета", "8,40", "300", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "plato-sirena", "Плато сирена", "10,50", "500", ""]

            ],

            "salads": [
                ["", "salata-s-marulya-rukola-i-cheri-domati", "Салата с маруля, рукола и чери домати", "4,20", "300", ""],
["", "vitaminna-salata", "Витаминна салата", "2,80", "300", ""],
["", "salata-tono", "Салата Тоно", "3,50", "350", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,80", "300", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "450", ""],
["", "plnen-kartof-ss-mlechna-salata", "Пълнен картоф със млечна салата", "2,80", "300", ""],
["", "katk-s-pecheni-chushki", "Катък с печени чушки", "2,80", "300", ""],
["", "domati-s-moczarela", "Домати с моцарела", "3,50", "400", ""],
["", "salata-vertu", "Салата Верту", "6,30", "800", ""],
["", "salata-orfej", "Салата Орфей", "3,50", "350", ""],
["", "ruska-salata", "Руска салата", "2,80", "300", ""],
["", "zhtvarska-salata", "Жътварска салата", "3,50", "350", ""],
["", "salata-drijms", "Салата дриймс", "4,20", "400", ""],
["", "pileshka-salata", "Пилешка салата", "2,80", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "300", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "350", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,10", "300", ""]

            ],

            "Топли предястия": [
                ["", "pileshki-srcza", "Пилешки сърца", "2,80", "300", ""],
["", "pileshki-drob", "Пилешки дроб", "2,80", "300", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "3,50", "300", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "3,50", "300", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,20", "250", ""],
["", "agneshka-glavichka", "Агнешка главичка", "4,20", "350", ""],
["", "agneshki-drebolii-s-presen-luk", "Агнешки дреболии с пресен лук", "4,90", "", ""],
["", "topeni-sirencza-ss-susam-i-sladko-ot-borovinki", "Топени сиренца със сусам и сладко от боровинки", "3,50", "300", ""],
["", "sirene-khapki-pane", "Сирене хапки пане", "2,80", "300", ""],
["", "kashkaval-khapki-pane", "Кашкавал хапки пане", "3,50", "300", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "300", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "3,50", "300", ""],
["", "pileshki-prchiczi-s-kornflejks", "Пилешки пръчици с корнфлейкс", "3,50", "300", ""],
["", "kartofena-zapekanka", "Картофена запеканка", "3,50", "300", ""],
["", "zapekanka-s-pileshko", "Запеканка с пилешко", "4,90", "350", ""],
["", "tikvichki-po-grczki-ss-sos-dzadziki", "Тиквички по гръцки със сос дзадзики", "3,50", "300", ""],
["", "topeni-sirencza-ss-kornflejks-i-sladko", "Топени сиренца със корнфлейкс и сладко", "3,50", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "patatnik-ss-sirene", "Пататник със сирене", "3,50", "400", ""],
["", "kachamak-ss-sirene", "Качамак със сирене", "2,80", "350", ""],
["", "kachamak-ss-meso-i-sirene", "Качамак със месо и сирене", "4,20", "350", ""],
["", "omlet-natyur", "Омлет натюр", "2,10", "300", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "300", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "300", ""],
["", "omlet-zelenchukov", "Омлет зеленчуков", "2,10", "300", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "5,60", "300", ""],
["", "teleshki-mozk-pane", "Телешки мозък пане", "4,20", "200", ""],
["", "teleshki-ezik-s-luk-i-gbi", "Телешки език с лук и гъби", "6,30", "300", ""],
["", "shkembe-s-teleshki-ezik-i-gbi", "Шкембе с телешки език и гъби", "5,60", "300", ""],
["", "brokoli-ss-smetana-i-sino-sirene", "Броколи със сметана и синьо сирене", "4,20", "300", ""],
["", "chushka-byurek", "Чушка бюрек", "2,80", "250", ""],
["", "panirani-brokoli", "Панирани броколи", "3,50", "250", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "200", ""],
["", "manatarki-s-maslo", "Манатарки с масло", "6,30", "200", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "300", ""],
["", "kartofeno-gnezdo-s-pileshko-meso", "Картофено гнездо с пилешко месо", "4,90", "400", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,80", "", ""],
["", "kuatro-stadzhone", "Куатро Стаджоне", "4,20", "", ""],
["", "salami", "Салами", "4,20", "", ""],
["", "byagashho-pile", "Бягащо пиле", "4,90", "", ""],
["", "peperoni", "Пеперони", "4,20", "", ""],
["", "kalczone-zatvorena", "Калцоне затворена", "4,20", "", ""],
["", "khavaj", "Хавай", "4,20", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "4,20", "", ""],
["", "diablo", "Диабло", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,20", "", ""],
["", "prlenka-kombinirana", "Пърленка комбинирана", "2,10", "350", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "1,40", "200", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "prepechena-filiya-khlyab", "Препечена филия хляб", "0,00", "", ""]

            ],

            "pasta": [
                ["", "spageti-karbonara", "Спагети Карбонара", "3,50", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "350", ""],
["", "spageti-s-pileshko-meso", "Спагети с пилешко месо", "3,50", "350", ""],
["", "spageti-vegetariana", "Спагети вегетариана", "2,80", "350", ""],
["", "taliateli-ss-somga", "Талиатели със сьомга", "9,10", "300", ""],
["", "taliateli-s-pileshko-i-smetana", "Талиатели с пилешко и сметана", "4,20", "300", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,80", "350", ""],
["", "rizoto-s-pile-i-spanak", "Ризото с пиле и спанак", "3,50", "350", ""],
["", "rizoto-s-manatarki", "Ризото с манатарки", "4,20", "350", ""],
["", "rizoto-s-brokoli-i-sirene", "Ризото с броколи и сирене", "3,50", "350", ""],
["", "lazanya-boloneze", "Лазаня Болонезе", "3,50", "300", ""],
["", "lazanya-4-vida-sirena", "Лазаня 4 вида сирена", "3,50", "300", ""]

            ],

            "fish": [
                ["", "safrid", "Сафрид", "4,20", "300", ""],
["", "skumriya", "Скумрия", "4,20", "300", ""],
["", "czipura", "Ципура", "9,10", "350", ""],
["", "lavrak", "Лаврак", "9,80", "350", ""],
["", "przhen-sharan", "Пържен шаран", "4,90", "300", ""],
["", "pstrva", "Пъстърва", "5,60", "300", ""],
["", "czyal-sharan", "Цял шаран", "8,40", "1000", ""],
["", "kalmari-pane", "Калмари пане", "7,00", "250", ""],
["", "skaridi", "Скариди", "6,30", "250", ""],
["", "kralski-skaridi", "Кралски скариди", "8,40", "250", ""],
["", "somga-kotlet", "Сьомга котлет", "13,30", "250", ""],
["", "gavros", "Гаврос", "4,20", "300", ""]

            ],

            "desserts": [
                ["", "domashna-shokoladova-torta", "Домашна шоколадова торта", "2,10", "150", ""],
["", "domashna-torta-s-maskarpone-i-filadelfiya", "Домашна торта с маскарпоне и филаделфия", "2,10", "150", ""],
["", "chijzkejk-s-borovinki-ili-yagodi", "Чийзкейк с боровинки или ягоди", "2,10", "150", ""],
["", "palachinka", "Палачинка", "1,40", "200", ""],
["", "kyunefe", "Кюнефе", "4,20", "250", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "4,20", "200", ""],
["", "plodova-salata", "Плодова салата", "2,80", "250", ""],
["", "krem-bryule", "Крем брюле", "2,10", "150", ""],
["", "panakota", "Панакота", "2,10", "150", ""]

            ],

            "barbecue": [
                ["", "shashlk-ot-gbi", "Шашлък от гъби", "3,50", "300", ""],
["", "teleshki-shashlk", "Телешки шашлък", "10,50", "450", ""],
["", "agneshki-kotlet", "Агнешки котлет", "12,60", "300", ""],
["", "t-bon-stek", "Т-бон стек", "20,30", "300", ""],
["", "ribaj-stek", "Рибай стек", "12,60", "300", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "300", ""],
["", "porcziya-kasap-kyufte", "Порция касап кюфте", "4,20", "250", ""],
["", "teleshko-kebapche", "Телешко кебапче", "0,70", "100", ""],
["", "teleshko-kyufte", "Телешко кюфте", "0,70", "100", ""],
["", "svinski-ushi", "Свински уши", "3,50", "300", ""],
["", "teleshko-bon-file", "Телешко бон филе", "14,00", "300", ""],
["", "pileshki-shashlk", "Пилешки шашлък", "5,60", "450", ""],
["", "svinski-shashlk", "Свински шашлък", "6,30", "450", ""],
["", "kombiniran-shashlk", "Комбиниран шашлък", "7,00", "450", ""],
["", "zelenchukov-shashlk", "Зеленчуков шашлък", "4,20", "350", ""],
["", "barbekyu-zelenchuczi", "Барбекю зеленчуци", "4,20", "250", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "120", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "karnache", "Карначе", "0,70", "120", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,10", "250", ""],
["", "meshana-skara", "Мешана скара", "9,80", "680", ""],
["", "teleshki-drob", "Телешки дроб", "4,90", "250", ""],
["", "drob-po-odrinski", "Дроб по одрински", "5,60", "250", ""],
["", "pateshki-srcza", "Патешки сърца", "3,50", "300", ""],
["", "svinski-vrat", "Свински врат", "4,90", "300", ""],
["", "pileshka-przhola", "Пилешка пържола", "3,50", "300", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "300", ""],
["", "svinski-rebra", "Свински ребра", "4,90", "350", ""],
["", "siromashko-plato", "Сиромашко плато", "17,50", "", ""],
["", "teleshko-nevrozno-kyufte", "Телешко неврозно кюфте", "0,70", "", ""]

            ],

            "Основни ястия": [
                ["", "teleshki-medalon-s-manatarki", "Телешки медальон с манатарки", "13,30", "350", ""],
["", "teleshko-sukalche-s-kartofi-sote", "Телешко сукалче с картофи соте", "9,80", "450", ""],
["", "pechen-dzholan-s-bilkovi-kartofi", "Печен джолан с билкови картофи", "6,30", "450", ""],
["", "mesoto-na-baba-ot-teleshko", "Месото на баба от телешко", "5,60", "300", ""],
["", "kavrma-v-gyuveche-ss-svinsko", "Кавърма в гювече със свинско", "4,20", "", ""],
["", "kavrma-v-gyuveche-s-pileshko", "Кавърма в гювече с пилешко", "4,20", "", ""],
["", "kavrma-v-gyuveche-s-teleshko", "Кавърма в гювече с телешко", "4,90", "", ""],
["", "svinska-przhenicza-s-luk-i-gbi", "Свинска пърженица с лук и гъби", "4,90", "300", ""],
["", "pileshko-file-s-brokoli", "Пилешко филе с броколи", "4,90", "350", ""],
["", "pileshko-file-s-gben-sos", "Пилешко филе с гъбен сос", "4,90", "350", ""],
["", "pile-s-brokoli", "Пиле с броколи", "4,90", "350", ""],
["", "pile-zapecheno-s-3-vida-sirena", "Пиле запечено с 3 вида сирена", "5,60", "350", ""],
["", "pile-zhulien", "Пиле Жулиен", "4,20", "350", ""],
["", "pile-kri", "Пиле къри", "4,90", "350", ""],
["", "pileshki-dzhob-ss-spanak-i-topeno-sirene", "Пилешки джоб със спанак и топено сирене", "4,90", "350", ""]

            ],

            "sachs": [
                ["", "svinski-sach", "Свински сач", "11,20", "800", ""],
["", "teleshki-sach", "Телешки сач", "13,30", "800", ""],
["", "kombiniran-sach", "Комбиниран сач", "11,90", "800", ""],
["", "rodopski-sach", "Родопски сач", "12,60", "1000", ""],
["", "pileshki-sach", "Пилешки сач", "10,50", "800", ""],
["", "pileshki-drebolii-na-sach", "Пилешки дреболии на сач", "8,40", "700", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "150", ""],
["", "rizi-bizi", "Ризи Бизи", "0,70", "150", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "150", ""],
["", "kartofi-sote", "Картофи соте", "0,70", "150", ""],
["", "zele-s-morkovi", "Зеле с моркови", "0,70", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "0,70", "150", ""]

            ]
        }', 
        'slug' => 'barbar-dinner-vertu',
        'business_name' => 'Bar &amp; Dinner Vertu',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6609',
        'address' => 'бул. Христо Ботев 15',
        'address_additional' => '',
        'coords_x' => '41.63206791',
        'coords_y' => '25.35739085',
        'phone' => '+359895887787',
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
            
            "sandwiches": [
                ["", "sandvich-s-riba-ton", "Сандвич с риба тон", "2,80", "300", ""],
["", "sandvich-ss-somga", "Сандвич със сьомга", "2,80", "270", ""],
["", "sandvich-s-pileshko-file", "Сандвич с пилешко филе", "2,80", "280", ""],
["", "sandvich-s-pueshko-meso", "Сандвич с пуешко месо", "2,80", "290", ""],
["", "sandvich-ss-svinska-shunka", "Сандвич със свинска шунка", "2,80", "280", ""],
["", "sandvich-s-moczarela", "Сандвич с моцарела", "2,80", "290", ""],
["", "sandvich-s-khamon", "Сандвич с хамон", "3,50", "230", ""]

            ],

            "salads": [
                ["", "vitaminoza", "Витаминоза", "2,80", "350", ""],
["", "fitnes-salata-s-kscheta-pileshko-meso", "Фитнес салата с късчета пилешко месо", "4,20", "300", ""],
["", "kapreze", "Капрезе", "3,50", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "350", ""],
["", "salata-s-kinoa-i-pileshko-file", "Салата с киноа и пилешко филе", "4,20", "350", ""],
["", "salata-s-kinoa", "Салата с киноа", "3,50", "350", ""],
["", "salata-s-domati-i-nakhut", "Салата с домати и нахут", "2,80", "350", ""],
["", "salata-s-limecz", "Салата с лимец", "3,50", "350", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "300", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "omega-3", "Омега 3", "4,20", "320", ""],
["", "salata-s-czveklo-i-spanak", "Салата с цвекло и спанак", "2,80", "350", ""],
["", "salata-s-ajsberg-i-khamon", "Салата с айсберг и хамон", "4,90", "300", ""],
["", "plodova-salata-ot-sezonni-plodove", "Плодова салата от сезонни плодове", "2,80", "300", ""]

            ],

            "alaminuti": [
                ["", "sotirani-kartofi", "Сотирани картофи", "2,80", "350", ""],
["", "omlet---klasicheski", "Омлет - класически", "2,10", "", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "", ""],
["", "omlet-ss-svinska-shunka-i-kashkaval", "Омлет със свинска шунка и кашкавал", "2,80", "", ""],
["", "omlet-s-pueshko-meso", "Омлет с пуешко месо", "2,80", "", ""],
["", "pileshko-file", "Пилешко филе", "1,40", "120", ""],
["", "teleshki-kyufteta---1-broj", "Телешки кюфтета - 1 брой", "0,70", "60", ""]

            ],

            "Кашу": [
                ["", "kashu", "Кашу", "2,80", "100", ""],
["", "bademi", "Бадеми", "2,10", "100", ""],
["", "leshniczi", "Лешници", "2,10", "100", ""]

            ],

            "Фрешове": [
                ["", "portokal", "Портокал", "1,40", "250", ""],
["", "portokal-i-yablka", "Портокал и ябълка", "1,40", "250", ""],
["", "portokal-i-grejpfrut", "Портокал и грейпфрут", "2,10", "250", ""],
["", "grejpfrut-i-yablka", "Грейпфрут и ябълка", "2,10", "250", ""],
["", "ananas-i-portokal", "Ананас и портокал", "2,10", "250", ""],
["", "grejpfrut", "Грейпфрут", "2,80", "250", ""],
["", "limon", "Лимон", "2,80", "250", ""],
["", "dinya", "Диня", "1,40", "250", ""],
["", "nar", "Нар", "4,20", "250", ""],
["", "ananas", "Ананас", "3,50", "250", ""],
["", "kivi", "Киви", "3,50", "250", ""],
["", "portokal-i-morkov", "Портокал и морков", "1,40", "250", ""],
["", "yablka-i-morkov", "Ябълка и морков", "1,40", "250", ""],
["", "morkov-yablka-i-portokal", "Морков, ябълка и портокал", "2,10", "250", ""],
["", "yablka-i-ananas", "Ябълка и ананас", "2,10", "250", ""],
["", "yablka-i-czveklo", "Ябълка и цвекло", "2,10", "250", ""],
["", "morkov-i-czveklo", "Морков и цвекло", "2,10", "250", ""],
["", "morkov-yablka-i-czveklo", "Морков, ябълка и цвекло", "2,10", "250", ""],
["", "morkov", "Морков", "2,10", "250", ""],
["", "ananas-kivi-i-yablka", "Ананас, киви и ябълка", "2,80", "250", ""],
["", "grejpfrut-limon-i-portokal", "Грейпфрут, лимон и портокал", "2,10", "250", ""],
["", "korenoploden-fresh", "Кореноплоден фреш", "2,80", "250", ""]

            ],

            "Шейкове": [
                ["", "banan-kakao-i-mlyako-po-izbor", "Банан, какао и мляко по избор", "2,10", "250", ""],
["", "proteinov-shejk", "Протеинов шейк", "2,10", "250", ""],
["", "yagodov-shejk", "Ягодов шейк", "2,10", "250", ""],
["", "shejk-vitamin-s", "Шейк Витамин С", "2,10", "250", ""],
["", "mlechen-shejk", "Млечен шейк", "2,10", "250", ""]

            ],

            "Смути": [
                ["", "borovinkovo-smuti", "Боровинково смути", "3,50", "400", ""],
["", "yagodovo-smuti", "Ягодово смути", "3,50", "400", ""],
["", "zeleno-smuti", "Зелено смути", "2,80", "400", ""],
["", "zhivot-v-zeleno", "Живот в зелено", "4,20", "400", ""],
["", "super-sila", "Супер сила", "3,50", "400", ""],
["", "bademovo-smuti", "Бадемово смути", "4,20", "400", ""]

            ],

            "Топли напитки": [
                ["", "kafe", "Кафе", "0,70", "", ""],
["", "kafe-s-mlyako", "Кафе с мляко", "0,70", "", ""],
["", "late", "Лате", "1,40", "", ""],
["", "kapuchino", "Капучино", "1,40", "", ""],
["", "frape", "Фрапе", "1,40", "", ""],
["", "goreshh-shokolad", "Горещ шоколад", "1,40", "", ""],
["", "chaj", "Чай", "0,70", "", ""],
["", "mlyako-s-nes", "Мляко с нес", "0,70", "", ""],
["", "toplo-mlyako", "Топло мляко", "0,70", "", ""],
["", "mlyako-s-kakao", "Мляко с какао", "0,70", "", ""],
["", "neskafe", "Нескафе", "0,70", "", ""],
["", "kafe-bez-kofein", "Кафе без кофеин", "0,70", "", ""],
["", "kapuchino-bez-kofein", "Капучино без кофеин", "1,40", "", ""],
["", "late-bez-kofein", "Лате без кофеин", "1,40", "", ""],
["", "3-v-1", "3 в 1", "0,70", "1", ""]

            ],

            "Био топли напитки": [
                ["", "bio-kafe", "Био кафе", "0,70", "", ""],
["", "bio-kafe-s-bio-mlyako", "Био кафе с био мляко", "1,40", "", ""],
["", "bio-kapuchino", "Био капучино", "1,40", "", ""],
["", "bio-late", "Био лате", "1,40", "", ""],
["", "bio-mlyako-s-bio-kakao", "Био мляко с био какао", "1,40", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/982559.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/982560.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/982561.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/982562.jpg?width=302"]

            ],

            "Безалкохолни напитки": [
                ["", "tonik", "Тоник", "0,70", "250", ""],
["", "studen-chaj", "Студен чай", "1,40", "250", ""],
["", "soda", "Сода", "0,70", "250", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "ajryan", "Айрян", "0,70", "250", ""]

            ],

            "beer": [
                ["", "staropramen", "Старопрамен", "1,40", "500", ""],
["", "stela-artoa", "Стела Артоа", "2,10", "330", ""],
["", "beks", "Бекс", "1,40", "500", ""],
["", "burgasko", "Бургаско", "1,40", "500", ""],
["", "kamenicza", "Каменица", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'fresh-bar-vitality',
        'business_name' => 'Fresh Bar Vitality',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Velingrad',
        'region' => 'Velingrad',
        'postal_code' => '4600',
        'address' => 'бул. Съединение 99',
        'address_additional' => '',
        'coords_x' => '42.0268216',
        'coords_y' => '23.9911422',
        'phone' => '+359988992080',
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
                ["", "shopska-salata", "Шопска салата", "1,40", "200", ""],
["", "zeleva-salata", "Зелева салата", "0,70", "200", ""],
["", "kartofena-salata", "Картофена салата", "1,40", "200", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "0,70", "400", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "400", ""]

            ],

            "Ястия": [
                ["", "teleshko-s-oriz", "Телешко с ориз", "2,80", "400", ""],
["", "pecheno-pileshko-butche", "Печено пилешко бутче", "2,10", "", ""],
["", "teleshko-s-kartofi", "Телешко с картофи", "2,80", "450", ""],
["", "musaka-s-tikvichki", "Мусака с тиквички", "2,80", "450", ""],
["", "czarigradski-kyufteta", "Цариградски кюфтета", "2,10", "400", ""],
["", "pilaf", "Пилаф", "1,40", "300", ""],
["", "tatarski-kyufteta", "Татарски кюфтета", "0,70", "160", ""],
["", "kyufte", "Кюфте", "0,00", "70", ""],
["", "kebapche", "Кебапче", "0,00", "70", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,70", "150", ""],
["", "sutlyash", "Сутляш", "0,70", "150", ""],
["", "portokalovo-revane", "Портокалово реване", "0,70", "150", ""],
["", "negrche", "Негърче", "0,70", "150", ""]

            ]
        }', 
        'slug' => 'prestizh-blgarska-nacionalna-kuhnya',
        'business_name' => 'Престиж - Българска национална кухня',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6600',
        'address' => 'бул. Беломорски 53',
        'address_additional' => '',
        'coords_x' => '41.64633',
        'coords_y' => '25.3753522',
        'phone' => '+359878776316',
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
            
            "drinks": [
                ["", "energijna-napitka-hell", "Енергийна напитка Hell", "0,70", "250", ""],
["", "byalo-frape", "Бяло фрапе", "1,40", "", ""],
["", "cherno-frape", "Черно фрапе", "0,70", "", ""],
["", "plodov-shejk", "Плодов шейк", "1,40", "", ""],
["", "shokoladov-shejk", "Шоколадов шейк", "1,40", "", ""]

            ],

            "Сувлаки": [
                ["", "suvlaki-s-pileshko-meso", "Сувлаки с пилешко месо", "2,10", "", ""],
["", "suvlaki-ss-svinsko-shishche", "Сувлаки със свинско шишче", "2,80", "", ""],
["", "suvlaki-s-grczki-kebap", "Сувлаки с гръцки кебап", "2,80", "", ""],
["", "suvlaki-s-pileshko-kyufte", "Сувлаки с пилешко кюфте", "2,80", "600", ""],
["", "suvlaki-ss-svinsko-kyufte", "Сувлаки със свинско кюфте", "3,50", "600", ""],
["", "suvlaki-s-teleshko-kyufte", "Сувлаки с телешко кюфте", "3,50", "600", ""]

            ],

            "Вегетарианско сувлаки": [
                ["", "vegetariansko-suvlaki", "Вегетарианско сувлаки", "1,40", "", ""],
["", "vegetariansko-suvlaki-s-topeno-sirene-i-yajcze", "Вегетарианско сувлаки с топено сирене и яйце", "2,10", "", ""]

            ],

            "Гръцки хот дог": [
                ["", "grczki-khot-dog", "Гръцки хот дог", "1,40", "", ""]

            ],

            "burgers": [
                ["", "burger-s-pileshko-kyufte", "Бургер с пилешко кюфте", "2,10", "500", ""],
["", "burger-ss-svinsko-kyufte", "Бургер със свинско кюфте", "2,80", "500", ""],
["", "burger-s-teleshko-kyufte", "Бургер с телешко кюфте", "2,80", "500", ""]

            ],

            "Порция": [
                ["", "pileshko-kyufte", "Пилешко кюфте", "4,90", "", ""],
["", "svinsko-kyufte", "Свинско кюфте", "7,00", "", ""],
["", "teleshko-kyufte", "Телешко кюфте", "7,70", "", ""],
["", "pileshko-meso", "Пилешко месо", "4,90", "", ""],
["", "svinsko-shishche", "Свинско шишче", "7,00", "", ""],
["", "grczki-kebap", "Гръцки кебап", "7,00", "", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "fanta-limon", "Fanta Лимон", "0,70", "500", ""],
["", "fanta-byala-praskova", "Fanta Бяла Праскова", "0,70", "500", ""],
["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "0,70", "500", ""],
["", "fanta-grozde", "Fanta Грозде", "0,70", "500", ""],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "0,70", "500", ""],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "0,70", "500", ""],
["", "fuzetea-mango-i-ananas-studen-chaj", "Fuzetea Манго и ананас, студен чай", "0,70", "500", ""],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "0,70", "500", ""],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "0,70", "330", ""],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "0,70", "330", ""],
["", "cappy-pulpy-praskova", "Cappy Pulpy Праскова", "0,70", "330", ""]

            ]
        }', 
        'slug' => 'cantina-social',
        'business_name' => 'Cantina Social',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Botevgrad',
        'region' => 'Botevgrad',
        'postal_code' => '2140',
        'address' => 'Център, Ботевград',
        'address_additional' => '',
        'coords_x' => '42.9074142',
        'coords_y' => '23.7898099',
        'phone' => '+359879809542',
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
                ["", "salata-sinema", "Салата Синема", "2,80", "350", ""],
["", "salata-shopska", "Салата Шопска", "2,80", "300", ""],
["", "salata-ovcharska", "Салата Овчарска", "3,50", "350", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "1,40", "250", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "250", ""],
["", "zele-s-morkovi", "Зеле с моркови", "1,40", "300", ""],
["", "salata-italianska", "Салата Италианска", "2,80", "250", ""],
["", "salata-pile", "Салата пиле", "2,80", "250", ""],
["", "domati-s-riba-ton", "Домати с риба тон", "2,10", "250", ""],
["", "salata-karpacho", "Салата Карпачо", "2,80", "200", ""],
["", "meshana-salata", "Мешана салата", "2,10", "200", ""]

            ],

            "dry-appetizer": [
                ["", "lukanka", "Луканка", "2,10", "100", ""],
["", "kashkaval", "Кашкавал", "1,40", "100", ""],
["", "sirene", "Сирене", "0,70", "100", ""],
["", "file", "Филе", "1,40", "100", ""]

            ],

            "starters": [
                ["", "kashkavaleni-khapki", "Кашкавалени хапки", "2,80", "200", ""],
["", "pileshki-krilcza-v-soev-sos", "Пилешки крилца в соев сос", "2,80", "250", ""],
["", "solena-palachinka", "Солена палачинка", "2,10", "220", ""],
["", "palachinka-sinema", "Палачинка Синема", "2,10", "220", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "170", ""],
["", "gbi-s-maslo", "Гъби с масло", "2,10", "200", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "2,80", "250", ""],
["", "pileshki-drob", "Пилешки дроб", "2,80", "200", ""],
["", "pileshki-khapki-s-kashkaval", "Пилешки хапки с кашкавал", "3,50", "300", ""],
["", "khrupkavi-topeni-sirencza-s-kornflejks", "Хрупкави топени сиренца с корнфлейкс", "3,50", "200", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "0,70", "300", ""],
["", "pileshka-supa", "Пилешка супа", "0,70", "300", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "300", ""]

            ],

            "Аламинути / Скара": [
                ["", "pileshki-pikantni-fileta-v-gyuveche", "Пилешки пикантни филета в гювече", "3,50", "300", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "3,50", "250", ""],
["", "pileshki-fileta-ss-susam", "Пилешки филета със сусам", "3,50", "250", ""],
["", "pikantni-pileshki-filencza", "Пикантни пилешки филенца", "3,50", "200", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "3,50", "200", ""],
["", "svinsko-kontra-file-s-presni-gbi", "Свинско контра филе с пресни гъби", "4,90", "250", ""],
["", "svinski-rebrcza-na-skara", "Свински ребърца на скара", "3,50", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "200", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "80", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "3,50", "200", ""],
["", "pileshki-fileta-ss-smetanov-sos-v-gyuveche", "Пилешки филета със сметанов сос в гювече", "3,50", "300", ""],
["", "panirana-pileshka-przhola-s-kornflejks", "Панирана пилешка пържола с корнфлейкс", "4,20", "250", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "4,90", "350", ""]

            ],

            "fish": [
                ["", "byala-riba-pane", "Бяла риба пане", "2,80", "250", ""],
["", "pstrva-na-tigan", "Пъстърва на тиган", "3,50", "250", ""],
["", "pstrva-vv-folio", "Пъстърва във фолио", "4,20", "250", ""],
["", "skumriya-na-skara", "Скумрия на скара", "2,80", "250", ""]

            ],

            "pizza": [
                ["", "picza-sinema", "Пица Синема", "4,20", "", ""],
["", "picza-kalczone", "Пица Калцоне", "3,50", "", ""],
["", "picza-margarita", "Пица Маргарита", "2,10", "", ""],
["", "picza-vegetariana", "Пица Вегетариана", "2,10", "", ""],
["", "picza-chetiri-sezona", "Пица Четири сезона", "2,80", "", ""],
["", "picza-formadzho", "Пица Формаджо", "2,80", "", ""],
["", "picza-sicziliana", "Пица Сицилиана", "3,50", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "2,80", "", ""],
["", "picza-byagashho-pile", "Пица Бягащо пиле", "3,50", "", ""],
["", "picza-mafiozo", "Пица Мафиозо", "3,50", "", ""],
["", "picza-al-kapone", "Пица Ал Капоне", "2,80", "", ""],
["", "picza-popaj", "Пица Попай", "2,80", "", ""],
["", "picza-piperoni", "Пица Пиперони", "2,80", "", ""],
["", "picza-korsikano", "Пица Корсикано", "2,10", "", ""],
["", "picza-rustika", "Пица Рустика", "2,10", "", ""],
["", "picza-napoli", "Пица Наполи", "2,80", "", ""],
["", "picza-natasha", "Пица Наташа", "3,50", "", ""],
["", "picza-khavaj", "Пица Хавай", "2,10", "", ""],
["", "picza-dzhendzano", "Пица Джендзано", "2,80", "", ""],
["", "picza-kalabreze", "Пица Калабрезe", "2,10", "", ""],
["", "picza-bravo", "Пица Браво", "3,50", "", ""],
["", "picza-marko-polo", "Пица Марко Поло", "2,80", "", ""],
["", "picza-kariola", "Пица Кариола", "2,80", "", ""]

            ],

            "pasta": [
                ["", "spageti-karbonara", "Спагети Карбонара", "2,80", "300", ""],
["", "spageti-boloneze", "Спагети Болонезе", "2,80", "300", ""],
["", "spageti-primavera", "Спагети Примавера", "3,50", "300", ""],
["", "spageti-kuatro-formadzhi", "Спагети Куатро Формаджи", "3,50", "300", ""],
["", "spageti-pilar", "Спагети Пилар", "3,50", "300", ""],
["", "spageti-zintara", "Спагети Зинтара", "3,50", "300", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "1,40", "120", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "1,40", "120", ""],
["", "sandvich-s-lyutenicza-i-lukanka", "Сандвич с лютеница и луканка", "1,40", "120", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "0,70", "120", ""]

            ],

            "sauces": [
                ["", "domaten-sos", "Доматен сос", "0,70", "50", ""],
["", "majonezen-sos", "Майонезен сос", "0,70", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "speczialen-sos", "Специален сос", "0,70", "50", ""],
["", "pikanten-sos", "Пикантен сос", "0,70", "50", ""],
["", "mlechen-sos", "Млечен сос", "0,70", "50", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "200", ""],
["", "przheni-kartofi-na-tigan", "Пържени картофи на тиган", "1,40", "200", ""],
["", "kartofi-sote", "Картофи Соте", "1,40", "200", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "200", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "200", ""],
["", "pikantni-kartofi-po-selski", "Пикантни картофи по селски", "1,40", "200", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "1,40", "200", ""],
["", "zadusheni-kartofi", "Задушени картофи", "1,40", "200", ""],
["", "lyutenicza", "Лютеница", "0,70", "50", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""]

            ],

            "bread": [
                ["", "filiya-khlyab", "Филия хляб", "0,00", "40", ""],
["", "turski-khlyab", "Турски хляб", "2,10", "200", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "0,70", "110", ""],
["", "chesnovo-khlebche-s-kashkaval", "Чесново хлебче с кашкавал", "0,70", "150", ""]

            ],

            "desserts": [
                ["", "plodova-salata", "Плодова салата", "1,40", "200", ""],
["", "biskvitena-torta", "Бисквитена торта", "1,40", "200", ""]

            ]
        }', 
        'slug' => 'bistro-picariya-sinema',
        'business_name' => 'Бистро-Пицария Синема',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Samokov',
        'region' => 'Samokov',
        'postal_code' => '2000',
        'address' => 'ул. Македония 33',
        'address_additional' => '',
        'coords_x' => '42.33718551',
        'coords_y' => '23.55988744',
        'phone' => '+359898677298',
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
            
            "dunner": [
                ["", "malk-dyuner", "Малък Дюнер", "0,70", "130", ""],
["", "sreden-dyuner", "Среден Дюнер", "1,40", "300", ""],
["", "golyam-dyuner", "Голям Дюнер", "2,10", "350", ""],
["", "xxl-dyuner", "XXL Дюнер", "2,80", "400", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "300", ""]

            ],

            "Хамбургери": [
                ["", "khamburger-s-teleshko-kyufte", "Хамбургер с телешко кюфте", "1,40", "350", ""],
["", "khamburger-s-kyufte", "Хамбургер с кюфте", "1,40", "200", ""],
["", "khamburger-s-2-kyufteta", "Хамбургер с 2 кюфтета", "2,10", "250", ""],
["", "khamburger-s-meso-ot-dyuner", "Хамбургер с месо от дюнер", "1,40", "200", ""],
["", "dyuner-v-pitka", "Дюнер в питка", "1,40", "200", ""]

            ],

            "Порции": [
                ["", "porcziya-dyuner-golyama", "Порция дюнер голяма", "4,20", "400", ""],
["", "porcziya-dyuner-malka", "Порция дюнер малка", "2,80", "300", ""],
["", "porcziya-kartofi", "Порция картофи", "0,70", "150", ""]

            ],

            "Гирос": [
                ["", "giros-malk", "Гирос малък", "1,40", "300", ""],
["", "giros-golyam", "Гирос голям", "2,10", "350", ""]

            ],

            "Джоб": [
                ["", "dzhob-s-shunka-i-kashkaval--kyufte", "Джоб с шунка и кашкавал + кюфте", "2,10", "", ""]

            ],

            "pizza": [
                ["", "picza-gbi-i-bekon", "Пица Гъби и бекон", "7,70", "", ""],
["", "picza-gbi-i-pile", "Пица Гъби и пиле", "7,70", "", ""],
["", "picza-gbi-i-shunka", "Пица Гъби и шунка", "7,70", "", ""],
["", "picza-bekon-i-czarevicza", "Пица Бекон и царевица", "7,70", "", ""],
["", "picza-shunka-i-czarevicza", "Пица Шунка и царевица", "7,70", "", ""],
["", "picza-pileshko-i-czarevicza", "Пица Пилешко и царевица", "7,70", "", ""],
["", "picza-peperoni-ss-sirene", "Пица Пеперони със сирене", "7,70", "", ""],
["", "picza-margarita", "Пица Маргарита", "7,70", "", ""]

            ],

            "Пърленки": [
                ["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "", ""],
["", "prlenka-s-shunka-i-kashkaval", "Пърленка с шунка и кашкавал", "1,40", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/939435.jpg?width=302"],
["", "fanta-limon", "Fanta Лимон", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/939437.jpg?width=302"],
["", "fanta-grozde", "Fanta Грозде", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/939438.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/939439.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/939440.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/939464.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/939465.jpg?width=302"],
["", "cappy-pulpy-mango-i-ananas", "Cappy Pulpy Манго и Ананас", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/939499.jpg?width=302"],
["", "cappy-pulpy-praskova", "Cappy Pulpy Праскова", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/939501.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/939548.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "750", "https://images.deliveryhero.io/image/fd-bg/Products/939549.jpg?width=302"]

            ],

            "drinks": [
                ["", "studen-chaj-nestea---limon", "Студен чай Nestea - лимон", "0,70", "", ""],
["", "studen-chaj-nestea---praskova", "Студен чай Nestea - праскова", "0,70", "", ""],
["", "studen-chaj-nestea---portokal", "Студен чай Nestea - портокал", "0,70", "", ""],
["", "ajryan-balkan", "Айрян Балкан", "0,70", "330", ""],
["", "ajryan-balkan", "Айрян Балкан", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'sindbad',
        'business_name' => 'Синдбад',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kazanlak',
        'region' => 'Kazanlak',
        'postal_code' => '6100',
        'address' => 'пл.Севтополис 5',
        'address_additional' => '',
        'coords_x' => '42.6186663',
        'coords_y' => '25.3927556',
        'phone' => '+359893793224',
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
            
            "soups": [
                ["", "agneshka-drob-chorba", "Агнешка дроб чорба", "1,40", "300", ""],
["", "pileshka-supa", "Пилешка супа", "0,70", "300", ""],
["", "supa-topcheta", "Супа топчета", "0,70", "300", ""],
["", "tarator", "Таратор", "0,70", "300", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "300", ""]

            ],

            "Готвени ястия": [
                ["", "kachamak-ss-sirene", "Качамак със сирене", "2,10", "350", ""],
["", "pecheno-pile", "Печено пиле", "5,60", "", ""],
["", "pecheno-pile-12", "Печено пиле 1/2", "2,80", "", ""],
["", "kebapche-s-garnitura", "Кебапче с гарнитура", "2,80", "350", ""],
["", "kyufte-s-garnitura", "Кюфте с гарнитура", "2,80", "350", ""],
["", "yajcza-na-ochi-s-kashkaval", "Яйца на очи с кашкавал", "2,10", "350", ""],
["", "pileshko-shishche-s-garnitura", "Пилешко шишче  с гарнитура", "2,80", "350", ""],
["", "pileshko-shishche-malko", "Пилешко шишче малко", "0,70", "", ""],
["", "svinski-przhola-s-pileshka-drob-i-gbi", "Свински пържола с пилешка дроб и гъби", "6,30", "350", ""],
["", "przheni-kyufteta-s-garnitura", "Пържени кюфтета с гарнитура", "2,10", "350", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "2,10", "350", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "350", ""],
["", "przheno-kyufte", "Пържено кюфте", "0,70", "", ""],
["", "patladzhan-s-domaten-sos", "Патладжан с доматен сос", "2,10", "350", ""],
["", "bob-s-kyufteta", "Боб с кюфтета", "2,10", "350", ""],
["", "rulo-stefani", "Руло Стефани", "2,10", "350", ""]

            ],

            "salads": [
                ["", "varen-bob-s-luk-i-lyutenicza", "Варен боб с лук и лютеница", "2,80", "250", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,10", "250", ""],
["", "zelena-salata", "Зелена салата", "2,80", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "450", ""],
["", "zimna-salata", "Зимна салата", "3,50", "300", ""],
["", "katk-po-zlatogradski", "Катък по Златоградски", "2,80", "200", ""],
["", "meshana-selska-salata", "Мешана селска салата", "4,20", "450", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "salata-domati", "Салата домати", "2,10", "250", ""],
["", "salata-zele-s-morkovi", "Салата зеле с моркови", "2,10", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "350", ""],
["", "salata-krastaviczi", "Салата краставици", "2,10", "200", ""],
["", "salata-morkovi", "Салата моркови", "2,10", "300", ""],
["", "salata-pechen-piper", "Салата печен пипер", "2,80", "200", ""],
["", "salata-prolet", "Салата пролет", "3,50", "300", ""],
["", "smesena-salata", "Смесена салата", "2,80", "300", ""],
["", "snezhanka", "Снежанка", "2,10", "200", ""],
["", "chiflikchijska-salata", "Чифликчийска салата", "3,50", "300", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""]

            ],

            "Сухи мезета": [
                ["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-kajma", "Сандвич с кайма", "1,40", "", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "1,40", "", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "1,40", "", ""]

            ],

            "starters": [
                ["", "paalachinka-s-shunka-i-kashkaval", "Паалачинка с шунка и кашкавал", "2,80", "", ""],
["", "pile-byurek", "Пиле бюрек", "2,10", "", ""],
["", "pile-v-palachinka", "Пиле в палачинка", "2,80", "", ""]

            ],

            "Ястия от яйца": [
                ["", "omlet-asorti", "Омлет Асорти", "2,80", "300", ""],
["", "omlet-naturalen", "Омлет натурален", "2,10", "250", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "300", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "300", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "300", ""],
["", "khemendeks-s-lukanka-ili-bekon", "Хемендекс с луканка или бекон", "2,80", "300", ""],
["", "yajcza-na-ochi-s-kashkaval", "Яйца на очи с кашкавал", "2,10", "300", ""],
["", "yajcza-na-ochi-ss-sirene", "Яйца на очи със сирене", "2,10", "300", ""]

            ],

            "pork": [
                ["", "medalon-s-vinen-sos", "Медальон с винен сос", "4,20", "300", ""],
["", "svinska-przhola-s-pileshki-drob-i-gbi", "Свинска пържола с пилешки дроб и гъби", "4,20", "300", ""],
["", "svinsko-meso-s-praz", "Свинско месо с праз", "2,10", "300", ""],
["", "stomna-kebap", "Стомна кебап", "3,50", "3300", ""],
["", "shishcheta-po-kavkavzki", "Шишчета по кавкавзки", "4,20", "200", ""]

            ],

            "grill": [
                ["", "karnache", "Карначе", "2,10", "150", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kolbasarsko-kyufte", "Колбасарско кюфте", "2,80", "200", ""],
["", "kombiniran-sach", "Комбиниран сач", "13,30", "820", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "nadenicza", "Наденица", "2,10", "80", ""],
["", "pechen-luk-na-skara", "Печен лук на скара", "2,10", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "200", ""],
["", "pileshka-przhola-ot-file", "Пилешка пържола от филе", "3,50", "200", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "200", ""],
["", "pileshki-srcza-na-skara", "Пилешки сърца на скара", "3,50", "300", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "150", ""],
["", "pileshko-shishche-v-bekon", "Пилешко шишче в бекон", "3,50", "250", ""],
["", "rebra-na-skara", "Ребра на скара", "4,90", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "200", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "2,10", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,80", "200", ""],
["", "teleshko-kyufte", "Телешко кюфте", "1,40", "80", ""],
["", "shish-sirene-i-bekon", "Шиш сирене и бекон", "3,50", "200", ""]

            ],

            "maindishes": [
                ["", "gbi-po-rodopski", "Гъби по Родопски", "2,80", "300", ""],
["", "gbi-s-topeno-sirene", "Гъби с топено сирене", "2,10", "250", ""],
["", "gyuveche-po-strandzhanski", "Гювече по Странджански", "2,10", "250", ""],
["", "gyuveche-po-troyanski", "Гювече по Троянски", "2,10", "350", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "0,70", "", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "200", ""],
["", "kyufteta-ot-tikvichki", "Кюфтета от тиквички", "2,10", "350", ""],
["", "pileshka-ili-svinska-kavrma", "Пилешка или свинска кавърма", "3,50", "250", ""],
["", "pileshki-karencza-ss-sino-sirene", "Пилешки каренца със синьо сирене", "4,20", "300", ""],
["", "pileshko-kare-s-gbi-i-kashkaval", "Пилешко каре с гъби и кашкавал", "3,50", "300", ""],
["", "svinska-przhola-na-tigan", "Свинска пържола на тиган", "3,50", "250", ""],
["", "svinski-karencza-ss-sino-sirene", "Свински каренца със синьо сирене", "4,90", "300", ""],
["", "svinsko-kare-s-gbi-i-kashkaval", "Свинско каре с гъби и кашкавал", "4,20", "300", ""],
["", "tikvichki-byurek", "Тиквички бюрек", "2,10", "350", ""],
["", "topeno-sirene-ss-susam", "Топено сирене със сусам", "3,50", "280", ""]

            ],

            "Рибно меню": [
                ["", "pstrva-na-skara", "Пъстърва на скара", "5,60", "350", ""],
["", "ribni-khapki", "Рибни хапки", "2,80", "200", ""],
["", "skumriya-na-skara", "Скумрия на скара", "4,20", "400", ""],
["", "tolostolob", "Толостолоб", "4,20", "300", ""],
["", "file-ot-byala-riba", "Филе от бяла риба", "3,50", "250", ""],
["", "czacza", "Цаца", "1,40", "200", ""],
["", "sharan", "Шаран", "4,90", "300", ""]

            ],

            "bread": [
                ["", "malka-prlenka", "Малка пърленка", "0,70", "", ""],
["", "prepechen-khlyab", "Препечен хляб", "0,00", "", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "2,80", "", ""],
["", "khlyab", "Хляб", "0,00", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "2,80", "", ""]

            ],

            "garnish": [
                ["", "varen-bob", "Варен боб", "0,70", "100", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "100", ""],
["", "gben-sos", "Гъбен сос", "0,70", "150", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "100", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "150", ""],
["", "zele-s-morkovi", "Зеле с моркови", "0,00", "100", ""],
["", "zelena-salata", "Зелена салата", "0,70", "100", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,10", "100", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "100", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,70", "100", ""],
["", "kiselo-mlyako", "Кисело мляко", "0,00", "100", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "lyutenicza", "Лютеница", "0,00", "70", ""],
["", "lyutennicza-s-luk", "Лютенница с лук", "0,70", "100", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "obshha-garnitura", "Обща гарнитура", "1,40", "100", ""],
["", "oriz", "Ориз", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""]

            ],

            "desserts": [
                ["", "domashna-italianska-torta", "Домашна италианска торта", "1,40", "150", ""],
["", "krem-karamel", "Крем карамел", "0,70", "150", ""],
["", "palachinki", "Палачинки", "1,40", "", ""]

            ]
        }', 
        'slug' => 'gostilnica-nasi',
        'business_name' => 'Гостилница Наси',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Targovishte',
        'region' => 'Targovishte',
        'postal_code' => '7700',
        'address' => 'ул. Никола Петков 1',
        'address_additional' => '',
        'coords_x' => '43.24648363',
        'coords_y' => '26.57554223',
        'phone' => '+359899342655',
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
            
            "Наш’та скара": [
                ["", "rebra", "Ребра", "4,20", "250", ""],
["", "adana", "Адана", "2,10", "80", ""],
["", "kraski-kotlet", "Краски котлет", "4,90", "350", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "domashna-nadenicza", "Домашна наденица", "2,80", "280", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "2,80", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "2,80", "250", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "2,80", "250", ""],
["", "pileshki-shish", "Пилешки шиш", "2,80", "280", ""],
["", "svinski-shish", "Свински шиш", "2,80", "280", ""],
["", "domashni-przheni-kartofi-v-meden-kazan-ss-sirene", "Домашни пържени картофи в меден казан със сирене", "2,10", "350", ""],
["", "domashna-lyutenicza-v-meden-kazan", "Домашна лютеница в меден казан", "0,70", "50", ""],
["", "zele-s-chetiri-vida-meso-v-meden-kazan", "Зеле с четири вида месо в меден казан", "2,80", "400", ""],
["", "pechen-piper", "Печен пипер", "0,70", "", ""],
["", "shopska", "Шопска", "2,80", "300", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "pecheni-zelenchuczi", "Печени зеленчуци", "2,80", "200", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "100", ""],
["", "plato-mesa", "Плато меса", "21,00", "", ""],
["", "plato-salati", "Плато салати", "8,40", "", ""],
["", "midi", "Миди", "4,90", "500", ""],
["", "dzholan", "Джолан", "7,00", "650", ""],
["", "czacza", "Цаца", "2,10", "250", ""]

            ]
        }', 
        'slug' => 'nashta-skara',
        'business_name' => 'Наш&#039;та скара',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Razgrad',
        'region' => 'Razgrad',
        'postal_code' => '7200',
        'address' => 'бул. Васил Левски 43, стадион Хювефарма Арена, сектор А',
        'address_additional' => '',
        'coords_x' => '43.5326854',
        'coords_y' => '26.5259838',
        'phone' => '+359886665655',
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
            
            "Закуски": [
                ["", "banicza-ss-sirene", "Баница със сирене", "0,70", "300", ""],
["", "tutmanik-ss-sirene", "Тутманик със сирене", "0,70", "250", ""],
["", "milinka", "Милинка", "0,70", "250", ""],
["", "malka-milinka", "Малка милинка", "0,00", "130", ""],
["", "mini-milinka", "Мини милинка", "0,00", "30", ""],
["", "kifla-s-shokolad", "Кифла с шоколад", "0,70", "200", ""],
["", "kifla-s-marmalad", "Кифла с мармалад", "0,70", "200", ""],
["", "malka-kifla-s-shokolaf", "Малка кифла с шоколаф", "0,00", "40", ""],
["", "picza", "Пица", "0,70", "300", ""],
["", "krenvirshka", "Кренвиршка", "0,70", "280", ""],
["", "grczka-banicza", "Гръцка баница", "0,00", "50", ""],
["", "mekicza", "Мекица", "0,00", "100", ""]

            ],

            "drinks": [
                ["", "ajryan-golyam", "Айрян голям", "0,70", "500", ""],
["", "ajryan-malk", "Айрян малък", "0,00", "330", ""],
["", "boza-malka", "Боза малка", "0,00", "330", ""],
["", "boza-sredna", "Боза средна", "0,00", "500", ""],
["", "boza-golyama", "Боза голяма", "0,70", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "pepsi-kola", "Пепси кола", "0,70", "330", ""],
["", "mirinda", "Миринда", "0,70", "330", ""],
["", "pepsi-tuist", "Пепси Туист", "0,70", "330", ""],
["", "pepsi-lajm", "Пепси Лайм", "0,70", "330", ""],
["", "7up", "7up", "0,70", "330", ""],
["", "lipton-studen-chaj-s-portokal-i-limon", "Lipton студен чай с портокал и лимон", "0,70", "330", ""]

            ]
        }', 
        'slug' => 'banicharnica-karchkovi',
        'business_name' => 'Баничарница Каръкови',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Velingrad',
        'region' => 'Velingrad',
        'postal_code' => '4601',
        'address' => 'пл. Македония',
        'address_additional' => '',
        'coords_x' => '42.00564487',
        'coords_y' => '23.98386767',
        'phone' => '+359877200135',
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
                ["", "salata-ot-domati-nakhut-i-pecheni-patladzhani", "Салата от домати, нахут и печени патладжани", "4,20", "300", ""],
["", "sredizemnomorska-salata-s-pileshko-file-i-moczarela", "Средиземноморска салата с пилешко филе и моцарела", "4,90", "400", ""],
["", "pstra-salata-s-kinoa", "Пъстра салата с киноа", "4,90", "400", ""],
["", "lyatna-salata-ss-zapecheno-sirene-khalumi", "Лятна салата със запечено сирене Халуми", "4,90", "400", ""],
["", "svezha-salata-s-repichki-i-takhanov-dresing", "Свежа салата с репички и таханов дресинг", "4,20", "300", ""],
["", "domashna-salata", "Домашна салата", "4,20", "300", ""],
["", "domati-s-grilovani-tikvichki-i-moczarela", "Домати с гриловани тиквички и моцарела", "4,90", "450", ""],
["", "salata-s-pileshko-file-i-brkani-yajcza", "Салата с пилешко филе и бъркани яйца", "4,20", "450", ""],
["", "vitaminozna-salata", "Витаминозна салата", "3,50", "300", ""],
["", "salata-santorini", "Салата Санторини", "4,90", "450", ""],
["", "salata-czezar-s-pile", "Салата Цезар с пиле", "4,90", "400", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "salata-ss-zapecheno-sirene-khalumi", "Салата със запечено сирене Халуми", "5,60", "400", ""],
["", "zelena-salata-s-bulgur-i-riba-ton", "Зелена салата с булгур и риба тон", "4,90", "400", ""],
["", "toskana", "Тоскана", "5,60", "400", ""]

            ],

            "soups": [
                ["", "kartofena-kren-supa", "Картофена крен супа", "2,10", "", ""],
["", "tarator", "Таратор", "2,10", "", ""]

            ],

            "starters": [
                ["", "zapecheno-koze-sirene-s-domati-rigan-i-zekhtin", "Запечено козе сирене с домати, риган и зехтин", "4,90", "200", ""],
["", "topla-razyadka-ss-sirena-i-pechena-chushka", "Топла разядка със сирена и печена чушка", "4,20", "200", ""],
["", "zapechen-kamember-s-orekhi-i-smokini", "Запечен камембер с орехи и смокини", "5,60", "200", ""],
["", "pileshki-kyuftencza-v-smetanov-sos-s-parmezan", "Пилешки кюфтенца в сметанов сос с пармезан", "5,60", "250", ""],
["", "brusketi-ss-sino-sirene-proshuto-i-rukola", "Брускети със синьо сирене, прошуто и рукола", "3,50", "200", ""],
["", "brusketi-s-bosilkovo-pesto-domat-i-moczarela", "Брускети с босилково песто, домат и моцарела", "2,80", "200", ""],
["", "brusketi-s-pastet-ot-riba-ton-vareno-yajcze-i-majoneza", "Брускети с пастет от риба тон, варено яйце и майонеза", "2,80", "200", ""],
["", "brusketi-s-domati-sirene-i-bosilek", "Брускети с домати, сирене и босилек", "2,10", "200", ""],
["", "czarigradski-kyuftencza-na-tigan", "Цариградски кюфтенца на тиган", "4,20", "250", ""],
["", "zapecheno-bivolsko-sirene-s-med-susam-i-mashherka", "Запечено биволско сирене с мед, сусам и мащерка", "3,50", "250", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "rizoto-s-pile-i-chedr", "Ризото с пиле и чедър", "4,20", "300", ""],
["", "rizoto-s-gbi-i-parmezan", "Ризото с гъби и пармезан", "4,20", "300", ""],
["", "teleshki-drob-na-skara", "Телешки дроб на скара", "3,50", "250", ""]

            ],

            "Запечени картофи": [
                ["", "zapecheni-kartofi-ss-sirene", "Запечени картофи със сирене", "4,90", "350", ""],
["", "zapecheni-kartofi-s-shunka", "Запечени картофи с шунка", "4,90", "350", ""],
["", "zapecheni-brokoli-ss-sino-sirene-i-parmezan", "Запечени броколи със синьо сирене и пармезан", "4,90", "350", ""]

            ],

            "pasta": [
                ["", "taliateli-s-cheri-domati", "Талиатели с чери домати", "4,20", "350", ""],
["", "taliateli-formadzhi", "Талиатели формаджи", "4,20", "350", ""],
["", "taliateli-sicziliana", "Талиатели сицилиана", "4,20", "350", ""],
["", "spageti-s-pile", "Спагети с пиле", "4,20", "350", ""],
["", "spageti-karbonara", "Спагети карбонара", "4,20", "350", ""],
["", "spageti-boloneze", "Спагети болонезе", "4,90", "350", ""],
["", "spageti-po-gradinarski", "Спагети по градинарски", "4,20", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "proshuto", "Прошуто", "3,50", "", ""],
["", "proshuto-fungi", "Прошуто фунги", "4,20", "", ""],
["", "kalczone", "Калцоне", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "mesno-izkushenie", "Месно изкушение", "5,60", "", ""],
["", "vegetarianska", "Вегетарианска", "4,20", "", ""],
["", "rokfor", "Рокфор", "4,90", "", ""],
["", "venecziya", "Венеция", "4,90", "", ""],
["", "peperoni", "Пеперони", "4,20", "", ""],
["", "verdi", "Верди", "4,20", "", ""],
["", "formadzhi", "Формаджи", "4,20", "", ""],
["", "amerikano", "Американо", "4,90", "", ""],
["", "palermo", "Палермо", "4,90", "", ""],
["", "riba-ton", "Риба тон", "4,90", "", ""],
["", "grczka", "Гръцка", "4,90", "", ""],
["", "meksikana", "Мексикана", "4,90", "", ""],
["", "iznenada", "Изненада", "4,20", "", ""],
["", "mondo", "Мондо", "4,90", "", ""],
["", "bondzhorno", "Бонджорно", "4,90", "", ""],
["", "domashna-pitka-ss-susam", "Домашна питка със сусам", "0,70", "", ""],
["", "sicziliansko-khlebche", "Сицилианско хлебче", "2,80", "", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "1,40", "", ""],
["", "chesnovo-khlebche-s-kashkaval-i-sirene", "Чесново хлебче с кашкавал и сирене", "2,10", "", ""]

            ],

            "Основни ястия": [
                ["", "plneni-pileshki-grdi-ss-sirene-bri", "Пълнени пилешки гърди със сирене Бри", "7,70", "400", ""],
["", "svinski-kotleti-s-gorchichen-sos", "Свински котлети с горчичен сос", "9,10", "400", ""],
["", "teleshko-bon-file-s-manatarki-i-mashherka", "Телешко бон филе с манатарки и мащерка", "10,50", "200", ""],
["", "nadenichki-s-pryasno-izpecheno-khlebche-i-gorchichen-sos", "Наденички с прясно изпечено хлебче и горчичен сос", "5,60", "400", ""],
["", "svinski-vrat-na-skara-ss-zapecheni-zelenchuczi", "Свински врат на скара със запечени зеленчуци", "5,60", "400", ""],
["", "pleskavicza-s-pushen-kashkaval", "Плескавица с пушен кашкавал", "5,60", "450", ""],
["", "kyufteta-na-skara-s-garnitura", "Кюфтета на скара с гарнитура", "5,60", "450", ""],
["", "agneshki-kotleti-na-tigan-s-garnitura-sotiran-spanak", "Агнешки котлети на тиган с гарнитура сотиран спанак", "11,20", "400", ""],
["", "teleshki-stek-na-plocha", "Телешки стек на плоча", "9,80", "400", ""],
["", "pileshki-kareta-na-plocha", "Пилешки карета на плоча", "5,60", "400", ""],
["", "kesadiya-s-pile-i-zelenchuczi", "Кесадия с пиле и зеленчуци", "4,90", "400", ""],
["", "pstrva-s-bilkovo-maslo-na-skara", "Пъстърва с билково масло на скара", "6,30", "400", ""],
["", "czipura-na-skara", "Ципура на скара", "9,80", "400", ""]

            ],

            "sandwiches": [
                ["", "teleshki-burger", "Телешки бургер", "7,70", "500", ""],
["", "klub-sandvich", "Клуб сандвич", "7,00", "500", ""],
["", "tost-s-shunka-i-kashkaval", "Тост с шунка и кашкавал", "4,20", "400", ""],
["", "tost-s-lukanka-i-kashkaval", "Тост с луканка и кашкавал", "4,20", "400", ""],
["", "tost-ss-sirene-i-kashkaval", "Тост със сирене и кашкавал", "3,50", "400", ""]

            ],

            "desserts": [
                ["", "chijzkejk-ss-sladko-ot-borovinki", "Чийзкейк със сладко от боровинки", "2,80", "200", ""],
["", "biskvitena-torta-kakao", "Бисквитена торта Какао", "2,80", "200", ""],
["", "shhokoladovo-sufle", "Щоколадово суфле", "4,90", "200", ""],
["", "kyunefe", "Кюнефе", "4,90", "200", ""]

            ],

            "drinks": [
                ["", "soda", "Сода", "0,70", "250", ""],
["", "minerala-voda", "Минерала вода", "1,40", "500", ""],
["", "minerala-voda", "Минерала вода", "0,70", "1500", ""],
["", "studen-chaj", "Студен чай", "1,40", "250", ""],
["", "fresh", "Фреш", "2,80", "", ""],
["", "red-bull", "Red Bull", "3,50", "250", ""],
["", "czitronada", "Цитронада", "2,10", "250", ""],
["", "naturalen-sok", "Натурален сок", "1,40", "200", ""]

            ],

            "beer": [
                ["", "zagorka", "Загорка", "2,10", "500", ""],
["", "khajneken", "Хайнекен", "2,10", "500", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "ariana", "Ариана", "2,80", "500", ""],
["", "corona-extra", "Corona Extra", "3,50", "250", ""],
["", "strongbow", "Strongbow", "2,10", "250", ""],
["", "sommersby", "Sommersby", "2,10", "250", ""]

            ],

            "Бяло вино": [
                ["", "mezek-sovinon-blan-i-pino-grizho-katarzhina-estejt", "Мезек Совиньон Блан и Пино Грижо, Катаржина Естейт", "6,30", "375", ""],
["", "silvr-ejndzhl-sovinczon-blan-midalidare-estejt", "Силвър Ейнджъл, совинцон блан, Мидалидаре Естейт", "9,10", "375", ""],
["", "sheval-de-katarzhina-shardone", "Шевал Де Катаржина, Шардоне", "11,90", "750", ""],
["", "sheval-de-katarzhina-vionie", "Шевал Де Катаржина, Вионие", "11,90", "750", ""],
["", "sheval-de-katarzhina-sovinon-blan", "Шевал Де Катаржина, Совиньон Блан", "11,90", "750", ""]

            ],

            "Червено вино": [
                ["", "mezek-merlo", "Мезек Мерло", "6,30", "375", ""],
["", "mezek-kaberne-sovinon", "Мезек Каберне Совиньон", "6,30", "375", ""],
["", "sheval-de-katarzhina-merlo", "Шевал Де Катаржина Мерло", "11,90", "750", ""],
["", "sheval-de-katarzhina-kaberne-sovinon", "Шевал Де Катаржина Каберне Совиньон", "11,90", "750", ""],
["", "la-bella", "Ла Белла", "16,10", "750", ""],
["", "midalidare-merlo", "Мидалидаре Мерло", "18,90", "750", ""]

            ],

            "Вино Розе": [
                ["", "mezek-roze", "Мезек Розе", "6,30", "375", ""],
["", "roe-ot-murvedar", "Рое от Мурведар", "19,60", "750", ""],
["", "kontemplejshns-roze", "Контемплейшънс Розе", "16,10", "750", ""],
["", "le-roze-sira-i-malbek", "Ле Розе, Сира и Малбек", "18,90", "750", ""],
["", "sheval-de-katarzhina-roze", "Шевал Де Катаржина Розе", "11,90", "750", ""]

            ]
        }', 
        'slug' => 'friends-bar',
        'business_name' => 'Friends Bar&amp;Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6600',
        'address' => 'бул. България 49',
        'address_additional' => '',
        'coords_x' => '41.63857737',
        'coords_y' => '25.37066897',
        'phone' => '+359899949499',
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
            
            "Промо меню": [
                ["", "pileshko-file-menyu", "Пилешко филе меню", "3,50", "", ""],
["", "pileshki-but-menyu", "Пилешки бут меню", "3,50", "", ""],
["", "konski-kyufteta-menyu", "Конски кюфтета меню", "4,20", "", ""],
["", "svinska-vratna-przhola-menyu", "Свинска вратна пържола меню", "3,50", "", ""],
["", "svinsko-kontra-file-menyu", "Свинско контра филе меню", "3,50", "", ""],
["", "teleshka-pleskavicza-menyu", "Телешка плескавица меню", "3,50", "", ""],
["", "teleshka-gurmanska-pleskavicza-menyu", "Телешка гурманска плескавица меню", "3,50", "", ""],
["", "konski-sudzhuk-menyu", "Конски суджук меню", "3,50", "", ""]

            ],

            "Моно меню": [
                ["", "pileshko-file", "Пилешко филе", "2,80", "200", ""],
["", "pileshki-but", "Пилешки бут", "2,10", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "2,80", "200", ""],
["", "svinsko-kontra-file", "Свинско контра филе", "2,80", "200", ""],
["", "teleshka-pleskavicza", "Телешка плескавица", "2,10", "200", ""],
["", "konski-kyufteta", "Конски кюфтета", "0,70", "200", ""],
["", "konski-sudzhuk", "Конски суджук", "2,10", "200", ""],
["", "gurmanska-pleskavicza", "Гурманска плескавица", "2,10", "200", ""]

            ],

            "Бургер меню": [
                ["", "pileshki-burger", "Пилешки бургер", "2,80", "", ""],
["", "svinski-burger", "Свински бургер", "2,80", "", ""],
["", "teleshki-burger", "Телешки бургер", "2,10", "", ""],
["", "konski-burger", "Конски бургер", "2,80", "", ""],
["", "gril-burger", "Грил бургер", "2,80", "", ""],
["", "boom-burger", "BOOM бургер", "3,50", "", ""],
["", "chijzburger", "Чийзбургер", "2,80", "", ""],
["", "sandvich-s-arabsko-khlebche", "Сандвич с арабско хлебче", "3,50", "", ""]

            ],

            "Комбо меню": [
                ["", "miks-mesa", "Микс меса", "16,80", "", ""],
["", "konski-kyufteta", "Конски кюфтета", "11,20", "", ""],
["", "konski-sudzhuk", "Конски суджук", "10,50", "", ""]

            ],

            "salads": [
                ["", "vitamina", "Витамина", "0,70", "100", ""],
["", "morkov-czelina-i-pechena-chushka", "Морков, целина и печена чушка", "0,70", "100", ""],
["", "katk", "Катък", "0,70", "100", ""],
["", "urnabez", "Урнабез", "0,70", "100", ""],
["", "sirene-ss-susam", "Сирене със сусам", "0,70", "100", ""],
["", "domati", "Домати", "0,70", "100", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "pyure", "Пюре", "0,70", "100", ""],
["", "bob-s-lyutenicza", "Боб с лютеница", "0,70", "100", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "porcziya-kartofi", "Порция картофи", "1,40", "200", ""],
["", "porcziya-kartofi-ss-sirene", "Порция картофи със сирене", "1,40", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/977623.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/977624.jpg?width=302"]

            ],

            "drinks": [
                ["", "soda", "Сода", "0,70", "250", ""],
["", "energijna-napitka-monster", "Енергийна напитка Monster", "1,40", "500", ""]

            ],

            "beer": [
                ["", "khajniken", "Хайникен", "1,40", "330", ""],
["", "shumensko-bombichka", "Шуменско бомбичка", "0,70", "330", ""],
["", "shumensko-belgijski-stil", "Шуменско белгийски стил", "0,70", "330", ""],
["", "burgasko", "Бургаско", "0,70", "500", ""],
["", "staropramen", "Старопрамен", "0,70", "500", ""],
["", "pirinsko", "Пиринско", "0,70", "500", ""],
["", "ariana-ken", "Ариана кен", "0,70", "500", ""],
["", "pirinsko-ken", "Пиринско кен", "0,70", "500", ""],
["", "pirinsko", "Пиринско", "0,70", "1200", ""]

            ]
        }', 
        'slug' => 'grill-bar',
        'business_name' => 'Grill Bar',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Samokov',
        'region' => 'Samokov',
        'postal_code' => '2000',
        'address' => 'ул. Васил Левски',
        'address_additional' => '',
        'coords_x' => '42.3369469',
        'coords_y' => '23.5571987',
        'phone' => '+359883220366',
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
                ["", "shopska-klasika", "Шопска класика", "3,50", "250", ""],
["", "kapreze", "Капрезе", "4,90", "300", ""],
["", "zapecheno-koze-sirene", "Запечено козе сирене", "5,60", "300", ""]

            ],

            "Омлети с три вида яйца": [
                ["", "natyur-s-podpravki", "Натюр с подправки", "2,80", "180", ""],
["", "ss-sirene-i-kashkaval", "Със сирене и кашкавал", "2,80", "250", ""],
["", "omlet-po-selski", "Омлет по селски", "3,50", "300", ""],
["", "bekon-s-yajcza", "Бекон с яйца", "3,50", "250", ""]

            ],

            "pasta": [
                ["", "fusili-s-domaten-sos", "Фусили с доматен сос", "3,50", "250", ""],
["", "penne-rigate-s-tri-vida-sirena", "Пенне ригате с три вида сирена", "4,20", "250", ""],
["", "spageti-s-gbi-bekon-ili-shunka-po-izbor", "Спагети с гъби, бекон или шунка по избор", "4,20", "300", ""],
["", "karbonara", "Карбонара", "4,20", "300", ""],
["", "talyatele-ss-spanak-ili-brokoli-sino-sirene-smetanov-sos", "Талятеле със спанак или броколи, синьо сирене, сметанов сос", "4,20", "300", ""],
["", "pasta-na-furna", "Паста на фурна", "4,90", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "margarita-s-maslini", "Маргарита с маслини", "4,20", "", ""],
["", "prima-vera", "Прима вера", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "salsicziya", "Салсиция", "5,60", "", ""],
["", "samokov", "Самоков", "5,60", "", ""],
["", "kuatro-fromadzho", "Куатро фромаджо", "5,60", "", ""],
["", "chorizo", "Чоризо", "6,30", "", ""],
["", "proshuto-krudo", "Прошуто крудо", "6,30", "", ""]

            ],

            "Фамилни пици": [
                ["", "familna-kuatro-fromadzho", "Фамилна Куатро фромаджо", "23,10", "", ""],
["", "familna-chorizo", "Фамилна Чоризо", "25,20", "", ""],
["", "familna-proshuto-krudo", "Фамилна Прошуто крудо", "25,20", "", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "2,10", "", ""],
["", "prlenka-ss-zekhtin-i-chesn", "Пърленка със зехтин и чесън", "1,40", "", ""]

            ],

            "sauces": [
                ["", "domaten-sos", "Доматен сос", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "", ""],
["", "sos-majoneza-s-gorchicza", "Сос майонеза с горчица", "0,00", "", ""],
["", "sos-vinegret", "Сос винегрет", "0,00", "", ""],
["", "sos-sino-sirene", "Сос синьо сирене", "0,00", "", ""]

            ],

            "desserts": [
                ["", "klasichesko-tiramisu", "Класическо тирамису", "2,80", "", ""],
["", "domashni-mini-eklercheta", "Домашни мини-еклерчета", "1,40", "", ""],
["", "yablkov-paj", "Ябълков пай", "1,40", "", ""]

            ]
        }', 
        'slug' => 'sweet-and-salty',
        'business_name' => 'Sweet and Salty',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Samokov',
        'region' => 'Samokov',
        'postal_code' => '2000',
        'address' => 'село Бели Искър',
        'address_additional' => '',
        'coords_x' => '42.2747114',
        'coords_y' => '23.5379244',
        'phone' => '+359887559769',
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
                ["", "butik", "Бутик", "4,20", "350", ""],
["", "tabule-s-kinoa", "Табуле с киноа", "3,50", "300", ""],
["", "spanak-i-avokado", "Спанак и авокадо", "4,20", "250", ""],
["", "rukola-s-parmezan", "Рукола с пармезан", "3,50", "200", ""],
["", "zelena-s-rukola-cheri-domati-i-sino-sirene", "Зелена с рукола, чери домати и синьо сирене", "4,20", "300", ""],
["", "chetiri-sirena", "Четири сирена", "4,20", "300", ""],
["", "italianska", "Италианска", "2,80", "350", ""],
["", "shefska", "Шефска", "3,50", "350", ""],
["", "czezar", "Цезар", "4,20", "300", ""]

            ],

            "Студени предястия": [
                ["", "sirene-natyur", "Сирене натюр", "0,70", "100", ""],
["", "sirene-natyur-ovche", "Сирене натюр овче", "1,40", "100", ""],
["", "sirene-natyur-koze", "Сирене натюр козе", "1,40", "100", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "1,40", "100", ""],
["", "teleshka-lukanka", "Телешка луканка", "2,10", "100", ""],
["", "sudzhuk", "Суджук", "2,80", "100", ""],
["", "file-elena", "Филе Елена", "3,50", "100", ""],
["", "kajzer", "Кайзер", "3,50", "100", ""]

            ],

            "Топли предястия": [
                ["", "zelenchuczi-na-barbekyu", "Зеленчуци на барбекю", "3,50", "300", ""],
["", "presni-kartofki-na-barbekyu", "Пресни картофки на барбекю", "2,10", "250", ""],
["", "zapecheni-kartofki-s-kashkaval-ili-sirene", "Запечени картофки с кашкавал или сирене", "2,10", "250", ""],
["", "avokado-na-barbekyu", "Авокадо на барбекю", "4,20", "250", ""],
["", "lucheni-krgcheta-s-avokado", "Лучени кръгчета с авокадо", "4,20", "200", ""],
["", "khrupkavi-topeni-sirencza-ss-sladko", "Хрупкави топени сиренца със сладко", "3,50", "200", ""],
["", "khrupkava-moczarela-ss-sladko", "Хрупкава моцарела със сладко", "3,50", "200", ""],
["", "khrupkavi-pileshki-prchiczi-s-mlechen-sos", "Хрупкави пилешки пръчици с млечен сос", "2,80", "200", ""],
["", "orizovi-kyuftencza-s-mlechen-sos", "Оризови кюфтенца с млечен сос", "2,80", "200", ""],
["", "spanachni-kyuftencza-s-mlechen-sos", "Спаначни кюфтенца с млечен сос", "2,80", "200", ""],
["", "lozovi-sarmichki", "Лозови сармички", "2,80", "200", ""],
["", "zelevi-sarmichki", "Зелеви сармички", "2,80", "200", ""],
["", "zapecheni-gbki-s-kashkaval", "Запечени гъбки с кашкавал", "3,50", "250", ""],
["", "zadusheni-kartofki-sote", "Задушени картофки соте", "2,10", "250", ""],
["", "brokoli-ss-sos-ot-sirena", "Броколи със сос от сирена", "2,80", "250", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "2,80", "200", ""],
["", "sirene-pane", "Сирене пане", "2,10", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,10", "200", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,10", "150", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,20", "150", ""],
["", "teleshki-drob-na-skara", "Телешки дроб на скара", "2,80", "200", ""]

            ],

            "dry-appetizer": [
                ["", "ofdeo", "Офдео", "3,50", "350", ""],
["", "ksr", "Късър", "2,10", "300", ""],
["", "avokado", "Авокадо", "2,80", "300", ""],
["", "jogurt", "Йогурт", "2,10", "300", ""],
["", "khajdari", "Хайдари", "2,10", "300", ""],
["", "kopoolu", "Кьопоолу", "2,10", "300", ""],
["", "abukanush", "Абукануш", "2,10", "300", ""],
["", "bodrum", "Бодрум", "2,80", "300", ""],
["", "morkovi-s-katk", "Моркови с катък", "2,10", "300", ""],
["", "ezme", "Езме", "2,10", "300", ""],
["", "antep", "Антеп", "2,10", "300", ""],
["", "zejtin-piyaz", "Зейтин пияз", "2,80", "300", ""],
["", "patladzhan-soslu", "Патладжан сослу", "2,80", "300", ""],
["", "shak-shuka", "Шак шука", "2,80", "300", ""],
["", "imam-bajld", "Имам байълдъ", "3,50", "350", ""],
["", "chervena-kapiya", "Червена капия", "2,10", "300", ""],
["", "plneni-tikvichki-s-kiselo-mlyako", "Пълнени тиквички с кисело мляко", "2,10", "300", ""],
["", "zelen-fasul", "Зелен фасул", "2,80", "300", ""],
["", "spanak-s-oriz", "Спанак с ориз", "2,10", "300", ""],
["", "praz-s-morkovi", "Праз с моркови", "2,10", "300", ""]

            ],

            "specialties": [
                ["", "speczialitet-butik", "Специалитет Бутик", "8,40", "400", ""],
["", "teleshki-filencza-na-tigan", "Телешки филенца на тиган", "8,40", "400", ""],
["", "teleshki-ramstek-s-luk", "Телешки рамстек с лук", "8,40", "400", ""],
["", "teleshko-file-s-gbi", "Телешко филе с гъби", "8,40", "400", ""],
["", "ali-nazik", "Али Назик", "8,40", "350", ""],
["", "agneshko-v-keremida", "Агнешко в керемида", "7,00", "350", ""],
["", "pateshko-magre", "Патешко магре", "8,40", "400", ""],
["", "gshi-drob-s-karamelizirani-yablki", "Гъши дроб с карамелизирани ябълки", "11,20", "200", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "250", ""],
["", "pileshko-file-ss-sos-kholandez", "Пилешко филе със сос холандез", "4,20", "350", ""],
["", "pileshko-file-ss-sos-bearnez", "Пилешко филе със сос беарнез", "4,20", "350", ""],
["", "pileshko-file-ss-sos-kri", "Пилешко филе със сос къри", "4,20", "350", ""],
["", "pileshko-rulo", "Пилешко руло", "4,20", "350", ""],
["", "pile-vreteno", "Пиле вретено", "4,20", "350", ""],
["", "pileshko-file-na-tigan", "Пилешко филе на тиган", "4,20", "350", ""],
["", "pile-zhulien", "Пиле жулиен", "4,20", "350", ""],
["", "pileshki-shniczel", "Пилешки шницел", "3,50", "350", ""],
["", "pile-v-keremida", "Пиле в керемида", "4,20", "350", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "2,10", "250", ""]

            ],

            "Баници по поръчка": [
                ["", "domashna-banicza-s-praz", "Домашна баница с праз", "7,00", "", ""],
["", "domashna-kpana-banicza", "Домашна къпана баница", "9,10", "", ""],
["", "domashna-banicza-s-kartofi", "Домашна баница с картофи", "7,00", "", ""],
["", "domashna-banicza-s-pileshko-meso", "Домашна баница с пилешко месо", "9,10", "", ""]

            ],

            "Кебапи": [
                ["", "adana", "Адана", "7,70", "400", ""],
["", "urfa", "Урфа", "7,70", "400", ""],
["", "bejti", "Бейти", "7,70", "400", ""],
["", "sarma-bejti", "Сарма бейти", "8,40", "400", ""],
["", "mlechen", "Млечен", "7,70", "400", ""],
["", "domaten", "Доматен", "7,00", "450", ""],
["", "patladzhanen", "Патладжанен", "7,00", "450", ""],
["", "ezmeli", "Езмели", "7,70", "400", ""],
["", "dyurum", "Дюрум", "4,20", "250", ""],
["", "smesen-kebap", "Смесен кебап", "20,30", "", ""]

            ],

            "grill": [
                ["", "chop-shish", "Чоп шиш", "9,80", "350", ""],
["", "teleshko-sukalche", "Телешко сукалче", "9,80", "350", ""],
["", "agneshki-shish", "Агнешки шиш", "8,40", "350", ""],
["", "agneshka-przhola", "Агнешка пържола", "9,80", "400", ""],
["", "meshena-skara", "Мешена скара", "11,90", "450", ""],
["", "pileshki-shish", "Пилешки шиш", "4,90", "350", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,20", "350", ""],
["", "pileshka-przhola-na-skara", "Пилешка пържола на скара", "4,20", "350", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "4,90", "350", ""],
["", "kasap-kyufte", "Касап кюфте", "4,20", "350", ""],
["", "usta-kyufte", "Уста кюфте", "4,20", "350", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "250", ""],
["", "nervozno-kyufte", "Нервозно кюфте", "1,40", "100", ""],
["", "teleshko-kyufte", "Телешко кюфте", "0,70", "100", ""],
["", "teleshko-kebapche", "Телешко кебапче", "0,70", "100", ""],
["", "pileshko-kyufte", "Пилешко кюфте", "0,70", "100", ""],
["", "pileshko-kebapche", "Пилешко кебапче", "0,70", "100", ""]

            ],

            "fish": [
                ["", "file-ot-somga-ss-spanak", "Филе от сьомга със спанак", "13,30", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "5,60", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "9,10", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "9,10", "300", ""],
["", "przhen-sharan", "Пържен шаран", "4,90", "300", ""]

            ],

            "Пидета": [
                ["", "pitka", "Питка", "0,00", "100", ""],
["", "prlenka", "Пърленка", "2,10", "140", ""],
["", "prlenka-s-plnka", "Пърленка с плънка", "2,10", "140", ""],
["", "picza-butik", "Пица Бутик", "4,20", "350", ""],
["", "lakhmadzhun", "Лахмаджун", "2,10", "250", ""],
["", "pide-s-kashkaval", "Пиде с кашкавал", "2,80", "300", ""],
["", "pide-ss-sirene", "Пиде със сирене", "2,80", "300", ""],
["", "pide-ss-spanak", "Пиде със спанак", "2,80", "300", ""],
["", "pide-ss-zelenchuczi", "Пиде със зеленчуци", "2,80", "300", ""],
["", "pide-ss-sudzhuk", "Пиде със суджук", "3,50", "300", ""],
["", "pide-s-pileshko-meso", "Пиде с пилешко месо", "3,50", "300", ""],
["", "pide-kushbash", "Пиде Кушбашъ", "3,50", "300", ""],
["", "pide-s-kajma", "Пиде с кайма", "3,50", "300", ""]

            ],

            "garnish": [
                ["", "oriz", "Ориз", "0,70", "150", ""],
["", "pilaf", "Пилаф", "0,70", "150", ""],
["", "lyutenicza", "Лютеница", "0,00", "50", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "0,70", "150", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "0,70", "200", ""],
["", "zelenchuczi-na-barbekyu", "Зеленчуци на барбекю", "1,40", "150", ""],
["", "zapecheni-kartofki", "Запечени картофки", "0,70", "150", ""]

            ],

            "Десертни сирена": [
                ["", "plato-delikatesni-sirena", "Плато деликатесни сирена", "7,00", "100", ""],
["", "sirene-rokfor", "Сирене рокфор", "9,10", "100", ""],
["", "sirene-bri", "Сирене бри", "5,60", "100", ""],
["", "sirene-kamember", "Сирене камембер", "5,60", "100", ""],
["", "sino-sirene", "Синьо сирене", "2,80", "100", ""]

            ],

            "desserts": [
                ["", "palachinka-s-plnezh", "Палачинка с пълнеж", "2,10", "200", ""],
["", "shokoladovo-fondyu", "Шоколадово фондю", "2,80", "250", ""],
["", "plodova-salata", "Плодова салата", "2,80", "200", ""],
["", "melba", "Мелба", "2,80", "200", ""],
["", "sladoled-s-toping", "Сладолед с топинг", "2,10", "150", ""],
["", "topka-sladoled", "Топка сладолед", "0,00", "50", ""],
["", "bishkoti-s-domashen-krem", "Бишкоти с домашен крем", "1,40", "", ""],
["", "dinya", "Диня", "0,70", "", ""],
["", "ppesh", "Пъпеш", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1001794.jpg?width=302"]

            ],

            "Безалкохолни напитки": [
                ["", "red-bul", "Ред бул", "3,50", "250", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""]

            ],

            "white-wine": [
                ["", "shampansko-mont-royal", "Шампанско Mont Royal", "6,30", "750", ""],
["", "chateu-karnobat-shardone", "Chateu Karnobat шардоне", "10,50", "750", ""],
["", "chateu-karnobat-muskat", "Chateu Karnobat мускат", "10,50", "750", ""],
["", "chateu-karnobat-traminer", "Chateu Karnobat траминер", "10,50", "750", ""],
["", "angel-roze", "Angel розе", "16,80", "750", ""],
["", "angel-traminer", "Angel траминер", "16,80", "750", ""],
["", "angel-shardone-i-sovinon-blan", "Angel шардоне и совиньон блан", "16,80", "750", ""],
["", "khan-krum-shardone", "Khan Krum шардоне", "12,60", "750", ""],
["", "khan-krum-traminer", "Khan Krum траминер", "14,00", "750", ""],
["", "chateau-tcherga-byalo", "Chateau Tcherga бяло", "15,40", "750", ""],
["", "chateau-tcherga-roze", "Chateau Tcherga розе", "15,40", "750", ""],
["", "minkov-brothers-cycle-traminer", "Minkov Brothers Cycle траминер", "15,40", "750", ""],
["", "minkov-brothers-cycle-sovinon-blan", "Minkov Brothers Cycle совиньон блан", "15,40", "750", ""],
["", "minkov-brothers-cycle-shardone", "Minkov Brothers Cycle шардоне", "24,50", "750", ""],
["", "katarzyna-contemplation", "Katarzyna Contemplation", "19,60", "750", ""]

            ],

            "red-wine": [
                ["", "chateu-karnobat-sira", "Chateu Karnobat сира", "10,50", "750", ""],
["", "chateu-karnobat-mavrud", "Chateu Karnobat мавруд", "10,50", "750", ""],
["", "chateu-karnobat-merlo", "Chateu Karnobat мерло", "10,50", "750", ""],
["", "chateu-karnobat-kaberne", "Chateu Karnobat каберне", "10,50", "750", ""],
["", "khan-krum-kaberne", "Khan Krum каберне", "10,50", "750", ""],
["", "mezzek-merlo", "Mezzek мерло", "15,40", "750", ""],
["", "mezzek-kaberne", "Mezzek каберне", "15,40", "750", ""],
["", "mezzek-mavrud", "Mezzek мавруд", "15,40", "750", ""],
["", "merlo-stambolovo", "Мерло Стамболово", "11,90", "750", ""],
["", "mavrud-asenovgrad", "Мавруд Асеновград", "13,30", "750", ""],
["", "mavrud-asenovgrad-speczialna-rezerva", "Мавруд Асеновград специална резерва", "16,80", "750", ""],
["", "chateau-tcherga", "Chateau Tcherga", "16,80", "750", ""],
["", "katarzyna-contemplation", "Katarzyna Contemplation", "19,60", "750", ""],
["", "angel-merlo", "Angel мерло", "16,80", "750", ""],
["", "angel-kaberne-sovinon", "Angel каберне совиньон", "16,80", "750", ""],
["", "enira", "Enira", "37,80", "750", ""],
["", "stallion-classic", "Stallion Classic", "37,80", "750", ""]

            ]
        }', 
        'slug' => 'butikov-restorant-behi',
        'business_name' => 'Бутиков ресторант Бехи',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6600',
        'address' => 'ул. Георги Кондолов 12',
        'address_additional' => '',
        'coords_x' => '41.6397136',
        'coords_y' => '25.3726456',
        'phone' => '+359889666822',
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
            
            "Пици на пещ": [
                ["", "marinara", "Маринара", "2,10", "", ""],
["", "margarita", "Маргарита", "2,10", "", ""],
["", "kaprichoza", "Капричоза", "3,50", "", ""],
["", "montanara", "Монтанара", "4,20", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,20", "", ""],
["", "kuatro-salumi", "Куатро Салуми", "4,20", "", ""],
["", "peperone", "Пепероне", "4,20", "", ""],
["", "milano", "Милано", "3,50", "", ""],
["", "proshuto-krudo", "Прошуто Крудо", "4,20", "", ""],
["", "polo", "Поло", "3,50", "", ""],
["", "detsko-menyu", "Детско меню", "6,30", "", ""]

            ],

            "Брускети и хляб": [
                ["", "prlenka-s-chesn", "Пърленка с чесън", "1,40", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,70", "30", ""],
["", "majoneza", "Майонеза", "0,70", "30", ""],
["", "pikanten-sos", "Пикантен сос", "0,70", "30", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "30", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "30", ""],
["", "gorchicza", "Горчица", "0,70", "30", ""]

            ]
        }', 
        'slug' => 'bonita-pizzeria',
        'business_name' => 'Bonita Pizzeria &amp; Restaurant',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Samokov',
        'region' => 'Samokov',
        'postal_code' => '2000',
        'address' => 'yл. Житна чаршия 1',
        'address_additional' => '',
        'coords_x' => '42.33772571',
        'coords_y' => '23.55551398',
        'phone' => '+359889714990',
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
                ["", "shopska-salata", "Шопска салата", "1,40", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "2,10", "300", ""],
["", "grczka-salata", "Гръцка салата", "2,10", "300", ""],
["", "salata-zele-i-morkovi", "Салата зеле и моркови", "1,40", "300", ""],
["", "zelena-salata", "Зелена салата", "2,10", "300", ""]

            ],

            "soups": [
                ["", "shkembe-chorba", "Шкембе чорба", "1,40", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "teleshka-pacha-supa", "Телешка пача супа", "1,40", "300", ""]

            ],

            "Основни ястия": [
                ["", "pile-s-oriz", "Пиле с ориз", "2,80", "300", ""],
["", "teleshki-tas-kebap", "Телешки тас кебап", "3,50", "300", ""],
["", "sultan-kebap-s-pileshko-file", "Султан кебап с пилешко филе", "4,20", "400", ""]

            ],

            "Кебапи": [
                ["", "urfa-dyuryum", "Урфа дюрюм", "2,80", "200", ""],
["", "adana-dyuryum", "Адана дюрюм", "2,80", "200", ""],
["", "urga-kebap", "Урга кебап", "5,60", "500", ""],
["", "adana-kebap", "Адана кебап", "5,60", "500", ""],
["", "kokorech-v-pitka", "Кокореч в питка", "3,50", "200", ""],
["", "kokorech-v-palachinka", "Кокореч в палачинка", "3,50", "150", ""],
["", "porcziya-kokorech-s-oriz", "Порция Кокореч с ориз", "7,00", "400", ""],
["", "kokorech-v-14-khlyab", "Кокореч в 1/4 хляб", "5,60", "230", ""],
["", "iskender-kebap", "Искендер кебап", "7,00", "400", ""],
["", "porcziya-teleshki-dyuner", "Порция телешки дюнер", "7,00", "400", ""],
["", "teleshki-dyuner-v-pitka", "Телешки дюнер в питка", "4,20", "300", ""],
["", "teleshki-dyuner-v-palachinka", "Телешки дюнер в палачинка", "4,20", "250", ""]

            ],

            "Пидета": [
                ["", "lakhmandzhun", "Лахманджун", "2,10", "300", ""],
["", "pide-s-kajma", "Пиде с кайма", "4,90", "350", ""],
["", "pide-s-pileshko-meso", "Пиде с пилешко месо", "4,90", "350", ""],
["", "pide-miks", "Пиде Микс", "6,30", "400", ""],
["", "pide-s-kashkaval", "Пиде с кашкавал", "4,90", "350", ""],
["", "pide-s-kartofi", "Пиде с картофи", "3,50", "350", ""],
["", "pide-ss-spanak", "Пиде със спанак", "3,50", "350", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,70", "150", ""],
["", "baklava", "Баклава", "1,40", "100", ""],
["", "kyunefe", "Кюнефе", "2,80", "150", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", ""],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "ajryan-rodopchanka", "Айрян Родопчанка", "0,00", "", ""],
["", "izvorna-voda-baldaran", "Изворна вода Балдаран", "0,70", "500", ""],
["", "bira-kamenicza-ken", "Бира Каменица кен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'zad-teatra',
        'business_name' => 'Зад Театъра',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6600',
        'address' => 'ул. Булаир 1',
        'address_additional' => '',
        'coords_x' => '41.639411',
        'coords_y' => '25.36808508',
        'phone' => '+35936159992',
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
            
            "pasta": [
                ["", "spageti-ss-sirene", "Спагети със сирене", "2,10", "400", ""],
["", "spageti-s-pile-i-spanak", "Спагети с пиле и спанак", "2,80", "400", ""],
["", "spageti-boloneze", "Спагети Болонезе", "2,80", "400", ""],
["", "spageti-genua", "Спагети Генуа", "2,80", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "400", ""],
["", "spageti-4-sirena", "Спагети 4 сирена", "2,80", "400", ""],
["", "vegetarianski-spageti", "Вегетариански спагети", "2,80", "400", ""],
["", "spageti-s-pile-i-zelenchuczi", "Спагети с пиле и зеленчуци", "3,50", "400", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "naturalen-sok-banan", "Натурален сок банан", "1,40", "250", ""]

            ],

            "white-wine": [
                ["", "pomorie-pentagram-shardone", "Поморие Пентаграм шардоне", "10,50", "", ""],
["", "pomorie-pentagram-traminer", "Поморие Пентаграм траминер", "10,50", "", ""],
["", "pomorie-pentagram-sovinon-blan", "Поморие Пентаграм совиньон блан", "10,50", "", ""],
["", "pomorie-zlaten-ritm-shardone", "Поморие Златен ритъм шардоне", "12,60", "", ""],
["", "babich-sovinon-blan-byal-etiket", "Бабич Совиньон блан бял етикет", "31,50", "", ""],
["", "babich-sovinon-blan-cheren-etiket", "Бабич Совиньон блан черен етикет", "37,80", "", ""],
["", "cycle---chadonnaycolombard", "Cycle - Chadonnay&Colombard", "11,20", "", ""],
["", "cycle---gewurztraminer", "Cycle - Gewurztraminer", "11,20", "", ""],
["", "cycle---gewurzraminer", "Cycle - Gewurzraminer", "4,90", "375", ""],
["", "trgovishhe---muskat", "Търговище - Мускат", "9,10", "", ""],
["", "trgovishhe---shardone", "Търговище - шардоне", "9,10", "", ""],
["", "trgovishhe---traminer", "Търговище - траминер", "10,50", "", ""],
["", "byala-cherga---menada", "Бяла черга - Менада", "13,30", "", ""],
["", "khan-krum---preslav---traminer", "Хан Крум - Преслав - траминер", "11,20", "", ""],
["", "mezzek---shardone", "Mezzek - шардоне", "11,20", "", ""],
["", "mezzek---sovinon-blan", "Mezzek - совиньон блан", "12,60", "", ""],
["", "varna---sovinon-blan", "Варна - Совиньон блан", "12,60", "", ""],
["", "varna---rizling", "Варна - ризлинг", "12,60", "", ""],
["", "shampansko-iskra", "Шампанско Искра", "5,60", "", ""]

            ],

            "red-wine": [
                ["", "pomorijska-izba---roze-sira", "Поморийска изба - розе сира", "10,50", "", ""],
["", "pomorijska-izba---kaberne", "Поморийска изба - каберне", "10,50", "", ""],
["", "pomorijska-izba---sira", "Поморийска изба - сира", "10,50", "", ""],
["", "pomorijska-izba---merlo", "Поморийска изба - мерло", "10,50", "", ""],
["", "zlaten-ritm---roze", "Златен Ритъм - розе", "12,60", "", ""],
["", "zlaten-ritm---kaberne", "Златен Ритъм - каберне", "12,60", "", ""],
["", "cycle---kaberne-sovinon-fran-i-merlo", "Cycle - каберне совиньон Фран и мерло", "10,50", "", ""],
["", "cycle---pino-noar-i-merlo", "Cycle - пино ноар и мерло", "10,50", "", ""],
["", "cycle---pino-noar-i-merlo", "Cycle - пино ноар и мерло", "4,90", "375", ""]

            ],

            "salads": [
                ["", "piratska", "Пиратска", "4,20", "400", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "ordovr-kapitan-bld", "Ордьовър Капитан Блъд", "4,20", "400", ""],
["", "ruska-salata", "Руска салата", "2,80", "250", ""],
["", "kapitan-bld", "Капитан Блъд", "3,50", "400", ""],
["", "randevu", "Рандеву", "2,80", "350", ""],
["", "rodopska", "Родопска", "3,50", "500", ""],
["", "shef-salata", "Шеф Салата", "3,50", "350", ""],
["", "salata-midi-s-luk-i-kopr", "Салата миди с лук и копър", "3,50", "150", ""],
["", "snezhanka", "Снежанка", "2,80", "250", ""],
["", "selska", "Селска", "3,50", "400", ""],
["", "ovcharska", "Овчарска", "3,50", "400", ""],
["", "kajlshka", "Кайлъшка", "3,50", "500", ""],
["", "gradinarska", "Градинарска", "2,80", "400", ""],
["", "apolon", "Аполон", "4,20", "350", ""],
["", "karakachanska", "Каракачанска", "3,50", "400", ""],
["", "kapanska", "Капанска", "2,80", "400", ""],
["", "sicziliana", "Сицилиана", "3,50", "400", ""],
["", "grczka", "Гръцка", "3,50", "400", ""],
["", "chocharka", "Чочарка", "3,50", "400", ""],
["", "italiana", "Италиана", "3,50", "500", ""],
["", "viktoriya", "Виктория", "3,50", "400", ""],
["", "4-sirena", "4 Сирена", "4,20", "450", ""],
["", "spanak-s-kinoa", "Спанак с киноа", "4,20", "400", ""],
["", "czezar-s-pile", "Цезар с пиле", "4,20", "400", ""],
["", "marta", "Марта", "3,50", "400", ""],
["", "naslada", "Наслада", "3,50", "400", ""],
["", "shopska", "Шопска", "2,80", "400", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "2,10", "250", ""],
["", "domati-i-krastaviczi-ss-sirene", "Домати и краставици със сирене", "2,80", "300", ""],
["", "pechen-piper-s-luk", "Печен пипер с лук", "3,50", "250", ""],
["", "pechen-piper-ss-sirene", "Печен пипер със сирене", "3,50", "300", ""],
["", "maslini-s-luk", "Маслини с лук", "1,40", "150", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,10", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "350", ""],
["", "zele-s-morkovi", "Зеле с моркови", "1,40", "250", ""],
["", "zele-s-majoneza", "Зеле с майонеза", "2,10", "300", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,10", "400", ""],
["", "vareni-kartofi-s-majoneza", "Варени картофи с майонеза", "2,80", "400", ""],
["", "tabule-s-kinoa", "Табуле с киноа", "3,50", "300", ""],
["", "adriatika", "Адриатика", "3,50", "400", ""],
["", "vitamina", "Витамина", "2,10", "300", ""],
["", "salaten-bob-s-luk", "Салатен боб с лук", "2,10", "200", ""]

            ],

            "Топли предястия": [
                ["", "lozovi-sarmi", "Лозови сарми", "2,10", "", ""],
["", "piperka-byurek", "Пиперка бюрек", "3,50", "250", ""],
["", "topeno-sirene-v-kornflejks", "Топено сирене в корнфлейкс", "4,20", "200", ""],
["", "pileshki-khrupkavi-filencza-ss-susam", "Пилешки хрупкави филенца със сусам", "4,90", "200", ""],
["", "kyufteta-viagra", "Кюфтета Виагра", "3,50", "300", ""],
["", "sirene-po-trakijski", "Сирене по Тракийски", "3,50", "", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "3,50", "300", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,20", "300", ""],
["", "przheni-tikvichki", "Пържени тиквички", "2,80", "250", ""],
["", "gbi-s-kashkaval", "Гъби с кашкавал", "3,50", "250", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "2,80", "150", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "200", ""],
["", "ezik-natyur", "Език натюр", "3,50", "150", ""],
["", "ezik-v-maslo", "Език в масло", "3,50", "150", ""],
["", "ezik-pane", "Език пане", "4,20", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "150", ""],
["", "kashkavalcheta-khapki-pane", "Кашкавалчета хапки пане", "2,80", "200", ""],
["", "sirencza-khapki-pane", "Сиренца хапки пане", "2,80", "200", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "200", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "3,50", "200", ""],
["", "shkembe-v-maslo-zapecheno-s-kashkaval-i-chesn", "Шкембе в масло, запечено с кашкавал и чесън", "4,20", "250", ""],
["", "przheno-sirene", "Пържено сирене", "2,10", "150", ""],
["", "pileshki-khrupkavi-filencza", "Пилешки хрупкави филенца", "4,20", "", ""],
["", "sirene-po-shopksi", "Сирене по шопкси", "2,80", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "180", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "230", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "200", ""],
["", "chesnovi-kartofi", "Чеснови картофи", "2,10", "200", ""],
["", "kartofi-po-rumnski", "Картофи по румънски", "3,50", "300", ""],
["", "pile-v-palachinka", "Пиле в палачинка", "3,50", "300", ""],
["", "brokoli-dzhenoveze", "Броколи Дженовезе", "4,20", "250", ""],
["", "brokoli-s-kashkaval", "Броколи с кашкавал", "3,50", "250", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,80", "200", ""],
["", "kashkaval-v-pergament", "Кашкавал в пергамент", "2,80", "200", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "", ""],
["", "pileshki-drob-s-bekon-i-gbi", "Пилешки дроб с бекон и гъби", "4,20", "300", ""],
["", "pileshki-dobcheta-pane", "Пилешки добчета пане", "2,80", "200", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "2,80", "250", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "4,20", "250", ""],
["", "pileshki-vodenichki-po-selski", "Пилешки воденички по селски", "3,50", "250", ""],
["", "brusketi", "Брускети", "2,10", "", ""]

            ],

            "grill": [
                ["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "200", ""],
["", "pileshki-krilcza-marinovani", "Пилешки крилца мариновани", "2,80", "250", ""],
["", "sirencza-v-bekon-", "Сиренца в бекон (", "2,10", "", ""],
["", "pileshki-filencza", "Пилешки филенца", "4,20", "200", ""],
["", "pileshko-shishche-v-bekon", "Пилешко шишче в бекон", "2,80", "150", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,10", "200", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "4,20", "200", ""],
["", "teleshko-file", "Телешко филе", "8,40", "200", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "2,80", "150", ""],
["", "khajdushki-pileshki-shish", "Хайдушки пилешки шиш", "4,90", "500", ""],
["", "nervozno-kyufte", "Нервозно кюфте", "2,10", "160", ""],
["", "teleshko-kyufte", "Телешко кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "3,50", "200", ""],
["", "meshana-skara", "Мешана скара", "9,10", "450", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "200", ""],
["", "svinski-kareta", "Свински карета", "4,90", "200", ""],
["", "plato-vlchi-glad", "Плато Вълчи глад", "14,00", "600", ""],
["", "svinski-rebra", "Свински ребра", "4,90", "250", ""],
["", "kashkavalcheta-v-bekon", "Кашкавалчета в бекон", "2,80", "150", ""],
["", "khajdushki-shashlik", "Хайдушки шашлик", "5,60", "500", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""]

            ],

            "Сачета": [
                ["", "kombiniran-sach", "Комбиниран сач", "11,90", "400", ""],
["", "kajlshka-kavrma", "Кайлъшка кавърма", "8,40", "400", ""],
["", "mesno-asorti", "Месно асорти", "8,40", "400", ""],
["", "piyano-pile", "Пияно пиле", "8,40", "400", ""],
["", "bks-bni", "Бъкс Бъни", "8,40", "400", ""],
["", "zelenchuczi-na-sach", "Зеленчуци на сач", "5,60", "400", ""],
["", "agneshki-sach", "Агнешки сач", "13,30", "400", ""],
["", "srcza-i-vodenichki", "Сърца и воденички", "8,40", "400", ""],
["", "pileshko-ss-zelenchuczi", "Пилешко със зеленчуци", "8,40", "400", ""],
["", "svinsko-ss-zelenchuczi", "Свинско със зеленчуци", "9,10", "400", ""],
["", "pileshki-drobcheta-srcza-i-vodenichki", "Пилешки дробчета сърца и воденички", "8,40", "400", ""]

            ],

            "Запеканки": [
                ["", "kartofi-s-bekon", "Картофи с бекон", "3,50", "350", ""],
["", "bernardi", "Бернарди", "3,50", "400", ""],
["", "pileshki-zhulien", "Пилешки Жулиен", "5,60", "400", ""],
["", "bonifacho", "Бонифачо", "3,50", "400", ""],
["", "kareta-kapitan-bld", "Карета Капитан Блъд", "5,60", "400", ""],
["", "ogreten-na-keremida", "Огретен на керемида", "3,50", "350", ""],
["", "zelenchukova-zapekanka", "Зеленчукова запеканка", "3,50", "350", ""],
["", "belinda", "Белинда", "3,50", "400", ""]

            ],

            "specialties": [
                ["", "pile-marimo", "Пиле Маримо", "5,60", "350", ""],
["", "pile-fantaziya", "Пиле Фантазия", "7,00", "", ""],
["", "svinski-kareta-fantaziya", "Свински карета Фантазия", "7,70", "", ""],
["", "teleshko-file-ala-krema", "Телешко филе ала крема", "9,80", "400", ""],
["", "svinski-kscheta", "Свински късчета", "5,60", "350", ""],
["", "katino-meze", "Катино мезе", "6,30", "400", ""],
["", "khajdushka-klczanicza", "Хайдушка кълцаница", "4,90", "300", ""],
["", "svinsko-po-lovdzhijski", "Свинско по ловджийски", "6,30", "400", ""],
["", "speczialitet-kapitann-bld", "Специалитет Капитанн Блъд", "9,10", "750", ""],
["", "svinski-dzholan", "Свински джолан", "4,90", "500", ""]

            ],

            "fish": [
                ["", "skumriya-na-skara", "Скумрия на скара", "4,20", "250", ""],
["", "przhen-sharan", "Пържен шаран", "4,20", "200", ""],
["", "pstrva", "Пъстърва", "5,60", "250", ""],
["", "rulcza-ot-raczi-pane", "Рулца от раци пане", "2,80", "200", ""],
["", "somga-na-skara", "Сьомга на скара", "9,80", "200", ""],
["", "safrid", "Сафрид", "4,90", "200", ""],
["", "khek-pane", "Хек пане", "3,50", "200", ""],
["", "akula-pane", "Акула пане", "4,20", "200", ""],
["", "przheni-kalmari", "Пържени калмари", "5,60", "150", ""],
["", "grenlandski-skaridi", "Гренландски скариди", "4,20", "100", ""],
["", "rulcza-ot-raczi", "Рулца от раци", "2,10", "", ""],
["", "midi-pane", "Миди пане", "3,50", "100", ""],
["", "czacza", "Цаца", "2,10", "100", ""],
["", "czipura", "Ципура", "7,70", "250", ""]

            ],

            "pizza": [
                ["", "meksikana", "Мексикана", "2,10", "", ""],
["", "remini", "Ремини", "2,10", "", ""],
["", "kuatro-formadzho", "Куатро Формаджо", "2,10", "", ""],
["", "dyavolo", "Дяволо", "2,10", "", ""],
["", "proshuto-fungi", "Прошуто фунги", "2,10", "", ""],
["", "toskana", "Тоскана", "2,10", "", ""],
["", "bianka", "Бианка", "2,10", "", ""],
["", "czrvulki", "Цървулки", "2,10", "", ""],
["", "salami", "Салами", "2,80", "", ""],
["", "francziskana", "Францискана", "2,10", "", ""],
["", "salsiche", "Салсиче", "2,10", "", ""],
["", "kaprichoza", "Капричоза", "2,10", "", ""],
["", "kalabreze", "Калабрезе", "2,10", "", ""],
["", "vegetariana", "Вегетариана", "2,10", "", ""],
["", "kuatro-stadzhone", "Куатро Стаджоне", "2,10", "", ""],
["", "margarita", "Маргарита", "2,10", "", ""],
["", "ala-mama", "Ала Мама", "2,10", "", ""],
["", "asorti", "Асорти", "2,80", "", ""],
["", "piperone", "Пипероне", "2,10", "", ""],
["", "kalczone", "Калцоне", "2,10", "", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "1,40", "200", ""],
["", "sandvich-s-kajma", "Сандвич с кайма", "1,40", "200", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "1,40", "200", ""],
["", "sandvich-ss-salam-i-kashkaval", "Сандвич със салам и кашкавал", "1,40", "200", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "1,40", "200", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "1,40", "200", ""],
["", "sandvich-s-pileshko-pusheno-i-kashkaval", "Сандвич с пилешко пушено и кашкавал", "1,40", "200", ""]

            ],

            "bread": [
                ["", "prepechena-filiya", "Препечена филия", "0,00", "", ""],
["", "prepechena-filiya-s-maslo", "Препечена филия с масло", "0,00", "", ""],
["", "prepechena-chesnova-filiya", "Препечена чеснова филия", "0,00", "", ""],
["", "cherna-filijka", "Черна филийка", "0,00", "", ""],
["", "prlenka", "Пърленка", "0,70", "100", ""],
["", "cherna-prlenka", "Черна пърленка", "0,70", "100", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "150", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "150", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "150", ""]

            ],

            "garnish": [
                ["", "studeni-garnitura", "Студени гарнитура", "1,40", "200", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "200", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,80", "350", ""],
["", "lyutenicza-s-luk", "Лютеница с лук", "0,00", "50", ""],
["", "topka-oriz", "Топка ориз", "0,70", "100", ""],
["", "topka-kartofeno-pyure", "Топка картофено пюре", "0,70", "100", ""],
["", "lyuti-chushki", "Люти чушки", "0,00", "", ""],
["", "zelenchuczi-sote", "Зеленчуци соте", "2,80", "350", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,10", "350", ""]

            ],

            "sauces": [
                ["", "chesnov", "Чеснов", "0,70", "60", ""],
["", "mlechen", "Млечен", "0,70", "60", ""],
["", "chili-sos", "Чили сос", "0,70", "60", ""],
["", "gben-sos", "Гъбен сос", "0,70", "200", ""],
["", "smetanov-sos", "Сметанов сос", "1,40", "200", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "60", ""],
["", "sladko-ot-borovinki", "Сладко от боровинки", "0,70", "", ""]

            ],

            "dry-appetizer": [
                ["", "sirene-natyur", "Сирене натюр", "0,70", "100", ""],
["", "kashkaval", "Кашкавал", "1,40", "100", ""],
["", "sudzhuk", "Суджук", "2,80", "100", ""],
["", "lukanka", "Луканка", "3,50", "100", ""],
["", "pastrma", "Пастърма", "3,50", "100", ""],
["", "file-elena", "Филе Елена", "3,50", "100", ""],
["", "moczarela", "Моцарела", "2,10", "100", ""],
["", "sino-sirene", "Синьо сирене", "2,80", "100", ""]

            ],

            "desserts": [
                ["", "palachinka-s-konfityur", "Палачинка с конфитюр", "0,70", "", ""],
["", "palachinka-s-med", "Палачинка с мед", "0,70", "", ""],
["", "palachinka-s-med-i-orekhi", "Палачинка с мед и орехи", "1,40", "", ""],
["", "palachinka-s-techen-shokolad", "Палачинка с течен шоколад", "0,70", "", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "0,70", "", ""],
["", "plodova-salata", "Плодова салата", "2,80", "250", ""],
["", "czedeno-mlyako", "Цедено мляко", "2,10", "150", ""],
["", "torta-garash", "Торта Гараш", "2,10", "100", ""],
["", "biskvitena-torta", "Бисквитена торта", "1,40", "200", ""]

            ]
        }', 
        'slug' => 'restorant-kapitan-bld',
        'business_name' => 'Ресторант Капитан Блъд',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Razgrad',
        'region' => 'Razgrad',
        'postal_code' => '7200',
        'address' => 'ул. Георги С. Раковски 14',
        'address_additional' => '',
        'coords_x' => '43.5264479',
        'coords_y' => '26.53116563',
        'phone' => '+35984661250',
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
            
            "Промо меню": [
                ["", "shopska-salata", "Шопска салата", "2,10", "450", ""],
["", "pileshko-file-pane", "Пилешко филе пане", "4,20", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "300", ""]

            ],

            "salads": [
                ["", "domati", "Домати", "2,10", "400", ""],
["", "domati-ss-sirene", "Домати със сирене", "2,10", "450", ""],
["", "domati-pncheta", "Домати пънчета", "4,20", "400", ""],
["", "domati-s-bosilek-i-sirene", "Домати с босилек и сирене", "2,80", "400", ""],
["", "krastaviczi", "Краставици", "2,10", "400", ""],
["", "krastaviczi-ss-sirene", "Краставици със сирене", "2,10", "450", ""],
["", "meshana", "Мешана", "2,10", "400", ""],
["", "selska", "Селска", "2,80", "450", ""],
["", "ovcharska", "Овчарска", "3,50", "500", ""],
["", "zhtvarska", "Жътварска", "3,50", "450", ""],
["", "buket", "Букет", "5,60", "500", ""],
["", "mersi", "Мерси", "4,90", "350", ""],
["", "beleni-domati-s-katk", "Белени домати с катък", "4,20", "450", ""],
["", "beleni-domati-ss-sirene", "Белени домати със сирене", "2,80", "400", ""],
["", "trakijska", "Тракийска", "3,50", "400", ""],
["", "grczka", "Гръцка", "2,80", "450", ""],
["", "lovdzhijska", "Ловджийска", "4,20", "450", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "350", ""],
["", "morkovi-s-limon", "Моркови с лимон", "2,80", "300", ""],
["", "smilyanski-bob-s-luk", "Смилянски боб с лук", "2,10", "300", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,10", "400", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "200", ""],
["", "mlechna", "Млечна", "2,10", "250", ""],
["", "katk", "Катък", "2,80", "250", ""],
["", "katk-po-rodopski", "Катък по родопски", "2,80", "300", ""],
["", "katk-ss-sirene", "Катък със сирене", "2,80", "280", ""],
["", "zelena", "Зелена", "2,10", "350", ""],
["", "pecheni-chushki-s-chesn", "Печени чушки с чесън", "2,80", "200", ""],
["", "kiseli-krastavichki", "Кисели краставички", "2,10", "250", ""],
["", "turshiya", "Туршия", "2,10", "300", ""],
["", "svezha", "Свежа", "2,80", "400", ""],
["", "tono", "Тоно", "4,90", "450", ""],
["", "kapreze", "Капрезе", "5,60", "350", ""],
["", "czezar", "Цезар", "6,30", "400", ""],
["", "esenna-salata", "Есенна салата", "4,20", "450", ""],
["", "pechen-patladzhan-s-chesn", "Печен патладжан с чесън", "2,80", "200", ""]

            ],

            "Сухи мезета": [
                ["", "sino-sirene-natyur", "Синьо сирене натюр", "3,50", "100", ""],
["", "sirene-natyur", "Сирене натюр", "1,40", "150", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "2,80", "150", ""],
["", "lukanka", "Луканка", "3,50", "100", ""],
["", "file-elena", "Филе елена", "5,60", "100", ""],
["", "kajzer-pastrma", "Кайзер пастърма", "5,60", "100", ""],
["", "koze-sirene-natyur", "Козе сирене натюр", "2,80", "150", ""]

            ],

            "alaminuti": [
                ["", "sirene-pane", "Сирене пане", "2,10", "200", ""],
["", "sirene-pane-khapki", "Сирене пане хапки", "2,80", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "200", ""],
["", "kashkaval-pane-khapki", "Кашкавал пане хапки", "3,50", "200", ""],
["", "topeno-sirene-s-kornflejks", "Топено сирене с корнфлейкс", "4,20", "200", ""],
["", "tabakera-s-shunka", "Табакера с шунка", "4,20", "300", ""],
["", "tabakera-s-lukanka", "Табакера с луканка", "4,20", "300", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "300", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,20", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,20", "250", ""],
["", "pileshki-kscheta-s-gbi-i-chesn", "Пилешки късчета с гъби и чесън", "4,20", "250", ""],
["", "chushka-byurek", "Чушка бюрек", "2,80", "250", ""],
["", "domat-byurek", "Домат бюрек", "4,20", "250", ""],
["", "kartofeno-pyure-ss-sirene-i-maslko", "Картофено пюре със сирене и маслко", "3,50", "350", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "350", ""],
["", "presni-pechurki-s-chesn-i-magdanoz", "Пресни печурки с чесън и магданоз", "2,80", "200", ""],
["", "presni-pechurki-v-maslo", "Пресни печурки в масло", "2,80", "200", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,80", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-s-kashkaval", "Пържени картофи с кашкавал", "2,80", "300", ""],
["", "brokoli-pane", "Броколи пане", "3,50", "300", ""],
["", "zadusheni-brokoli", "Задушени броколи", "2,80", "300", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,80", "250", ""]

            ],

            "Ястия с яйца": [
                ["", "vareno-yajcze", "Варено яйце", "0,00", "60", ""],
["", "omlet-natyur", "Омлет натюр", "1,40", "180", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "230", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "230", ""],
["", "omlet-s-gbi", "Омлет с гъби", "2,10", "230", ""],
["", "omlet-asorti", "Омлет асорти", "2,80", "350", ""],
["", "yajcza-na-ochi", "Яйца на очи", "1,40", "180", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "380", ""],
["", "mish-mash", "Миш-Маш", "2,80", "350", ""],
["", "khemendeks", "Хемендекс", "3,50", "380", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "karnache", "Карначе", "2,80", "300", ""],
["", "nadenicza", "Наденица", "3,50", "300", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "250", ""],
["", "svinski-srcza", "Свински сърца", "2,80", "300", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,20", "300", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "200", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "svinsko-file", "Свинско филе", "5,60", "200", ""],
["", "svinski-karencza", "Свински каренца", "6,30", "200", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "120", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "350", ""],
["", "pileshki-shish-v-bekon", "Пилешки шиш в бекон", "3,50", "230", ""],
["", "kasapsko-plato", "Касапско плато", "22,40", "", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "6,30", "500", ""]

            ],

            "Дреболии": [
                ["", "pileshki-drob-przhen", "Пилешки дроб пържен", "2,80", "300", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "4,20", "450", ""],
["", "pileshki-drob-s-bekon-i-luk", "Пилешки дроб с бекон и лук", "4,20", "450", ""],
["", "pileshki-drob-s-luk-i-gbi", "Пилешки дроб с лук и гъби", "3,50", "450", ""],
["", "pileshki-srcza-przheni", "Пилешки сърца пържени", "2,80", "300", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "4,20", "450", ""],
["", "pileshki-srcza-s-gbi-i-luk", "Пилешки сърца с гъби и лук", "4,20", "450", ""],
["", "pileshki-srcza-na-skara", "Пилешки сърца на скара", "2,80", "300", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "4,20", "450", ""],
["", "svinski-drob-przhen", "Свински дроб пържен", "2,80", "300", ""],
["", "svinski-drob-po-cziganski", "Свински дроб по цигански", "3,50", "450", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "2,80", "300", ""],
["", "agneshki-drebolii-s-luk-i-gbi", "Агнешки дреболии с лук и гъби", "5,60", "450", ""],
["", "agneshki-drebolii-v-maslo", "Агнешки дреболии в масло", "4,90", "400", ""],
["", "ezik-natyur", "Език натюр", "2,80", "120", ""],
["", "przheni-svinski-bbreczi", "Пържени свински бъбреци", "2,80", "300", ""],
["", "ezik-pane", "Език пане", "4,20", "200", ""],
["", "ezik-v-maslko", "Език в маслко", "3,50", "120", ""],
["", "ezik-s-gbi", "Език с гъби", "4,20", "250", ""],
["", "agneshki-chrevcza-v-maslko", "Агнешки чревца в маслко", "4,90", "300", ""],
["", "pileshki-vodenichki-v-maslko", "Пилешки воденички в маслко", "3,50", "300", ""],
["", "pileshki-vodenichki-s-gbi-i-kashkaval", "Пилешки воденички с гъби и кашкавал", "4,20", "400", ""],
["", "shkembe-v-maslko", "Шкембе в маслко", "3,50", "250", ""],
["", "teleshki-opashki", "Телешки опашки", "4,20", "200", ""]

            ],

            "pizza": [
                ["", "remini-500gr", "Ремини  (500гр)", "7,00", "", ""],
["", "roma-500gr", "Рома (500гр)", "6,30", "", ""],
["", "khavaj-500gr", "Хавай (500гр)", "6,30", "", ""],
["", "verdi-500gr", "Верди (500гр)", "6,30", "", ""],
["", "kariola-500gr", "Кариола (500гр)", "6,30", "", ""],
["", "paskara-500gr", "Паскара (500гр)", "6,30", "", ""],
["", "tono-500gr", "Тоно (500гр)", "6,30", "", ""],
["", "primavera-500gr", "Примавера (500гр)", "6,30", "", ""],
["", "parma-500gr", "Парма  (500гр)", "6,30", "", ""],
["", "vegetariana-500gr", "Вегетариана  (500гр)", "5,60", "", ""],
["", "salami-500gr", "Салами  (500гр)", "6,30", "", ""],
["", "katali-500gr", "Катали (500гр)", "6,30", "", ""],
["", "kalczone-500gr", "Калцоне (500гр)", "6,30", "", ""],
["", "paradizo-500gr", "Парадизо (500гр)", "7,00", "", ""],
["", "margarita-500gr", "Маргарита (500гр)", "4,90", "", ""],
["", "kuatro-dikarne-500gr", "Куатро дикарне (500гр)", "7,00", "", ""],
["", "kaprichoza-500gr", "Капричоза (500гр)", "6,30", "", ""],
["", "proshuto-fungi-500gr", "Прошуто фунги (500гр)", "5,60", "", ""],
["", "kuatro-formadzho-500gr", "Куатро формаджо (500гр)", "7,70", "", ""],
["", "milaneza-500gr", "Миланеза (500гр)", "6,30", "", ""],
["", "proshuto-500gr", "Прошуто (500гр)", "4,90", "", ""],
["", "byala-picza-500gr", "Бяла пица (500гр)", "6,30", "", ""]

            ],

            "Зеленчукови зепеканки": [
                ["", "brokoli-smetana-topeno-sirene-sino-sirene-kashkaval", "Броколи, сметана, топено, сирене, синьо сирене, кашкавал", "5,60", "450", ""],
["", "brokoli-kartofi-gbi-pileshko-pusheno-kashkaval", "Броколи, картофи, гъби, пилешко пушено, кашкавал", "5,60", "450", ""],
["", "pile-brokoli-topeno-sirene-sino-sirene-smetana-kashkaval", "Пиле, броколи, топено сирене, синьо сирене, сметана, кашкавал", "7,00", "450", ""],
["", "morkovi-grakh-czarevicza-brokoli-smetana-kashkaval", "Моркови, грах, царевица, броколи, сметана, кашкавал", "5,60", "450", ""]

            ],

            "Запеканки с картофи": [
                ["", "kuatro", "Куатро", "4,90", "400", ""],
["", "parma", "Парма", "4,90", "400", ""],
["", "vegetariana", "Вегетариана", "4,20", "400", ""],
["", "panagyurska", "Панагюрска", "4,90", "400", ""],
["", "chijz", "Чийз", "4,20", "400", ""],
["", "bejbi", "Бейби", "4,20", "400", ""],
["", "bernardi", "Бернарди", "4,90", "400", ""],
["", "ogreten", "ОГретен", "4,20", "400", ""]

            ],

            "Запеканки със свинско": [
                ["", "napoleon", "Наполеон", "7,00", "400", ""],
["", "svinsko-dzholanche-s-kiseli-krastavichki", "Свинско джоланче с кисели краставички", "6,30", "400", ""],
["", "svinsko-dzholanche-s-pechurki", "Свинско джоланче с печурки", "5,60", "400", ""],
["", "svinsko-dzholanche-s-gbi", "Свинско джоланче с гъби", "6,30", "400", ""],
["", "svinsko-dzholanche-v-maslo", "Свинско джоланче в масло", "4,90", "300", ""]

            ],

            "Ястия със свинско": [
                ["", "svinsko-file-na-tigan", "Свинско филе на тиган", "5,60", "200", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "7,00", "450", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "6,30", "350", ""],
["", "svinski-khapki-s-gbi", "Свински хапки с гъби", "5,60", "450", ""],
["", "svinska-kavrma-v-omlet", "Свинска кавърма в омлет", "6,30", "450", ""],
["", "svinski-khapki-po-cziganski", "Свински хапки по цигански", "5,60", "450", ""],
["", "file-vreteno", "Филе вретено", "8,40", "400", ""],
["", "sochni-svinski-khapki-400gr0", "Сочни свински хапки (400гр0", "7,00", "", ""]

            ],

            "Ястия с пилешко": [
                ["", "pileshko-file-na-tigan", "Пилешко филе на тиган", "3,50", "200", ""],
["", "pileshko-file-s-topeno-sirene-i-smetana", "Пилешко филе с топено сирене и сметана", "5,60", "300", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "7,00", "350", ""],
["", "pile-atliman", "Пиле Атлиман", "6,30", "400", ""],
["", "pile-zhulien", "Пиле Жулиен", "6,30", "400", ""],
["", "pileshka-kavrma-v-omlet", "Пилешка кавърма в омлет", "6,30", "400", ""],
["", "sochni-pileshki-khapki", "Сочни пилешки хапки", "5,60", "400", ""],
["", "pile-po-siromashki", "Пиле по сиромашки", "5,60", "400", ""],
["", "pileshki-zhuliencheta-ss-zelenchuczi", "Пилешки жулиенчета със зеленчуци", "5,60", "400", ""],
["", "pileshki-ruladin", "Пилешки руладин", "6,30", "350", ""],
["", "pile-marsali", "Пиле Марсали", "5,60", "350", ""],
["", "file-po-khajdushki", "Филе по хайдушки", "4,90", "350", ""],
["", "piyano-pile", "Пияно пиле", "6,30", "400", ""],
["", "pile-khavaj", "Пиле Хавай", "6,30", "400", ""]

            ],

            "Ястия на пещ": [
                ["", "zapecheni-sirena", "Запечени сирена", "5,60", "400", ""],
["", "koze-sirene-s-orekhi-i-med", "Козе сирене с орехи и мед", "3,50", "280", ""],
["", "mlechna-zapekanka", "Млечна запеканка", "4,20", "400", ""],
["", "yajchena-zapekanka", "Яйчена запеканка", "2,80", "350", ""]

            ],

            "sachs": [
                ["", "pileshki-sach", "Пилешки сач", "11,20", "600", ""],
["", "svinski-sach", "Свински сач", "12,60", "600", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "8,40", "600", ""],
["", "smesen-sach", "Смесен сач", "14,70", "800", ""],
["", "sach-zelenoto", "Сач Зеленото", "2,80", "800", ""]

            ],

            "fish": [
                ["", "czipura", "Ципура", "12,60", "350", ""],
["", "lavrak", "Лаврак", "10,50", "350", ""],
["", "pstrva", "Пъстърва", "7,00", "350", ""]

            ],

            "Гювечета": [
                ["", "sierene-po-shopski", "Сиерене по шопски", "3,50", "350", ""],
["", "sirene-po-trakijski", "Сирене по тракийски", "4,20", "350", ""],
["", "pile-po-rodopski", "Пиле по родопски", "5,60", "400", ""],
["", "ezik-v-gyuveche", "Език в гювече", "5,60", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,90", "350", ""],
["", "svinska-kavrma", "Свинска кавърма", "5,60", "350", ""],
["", "mekhandzhijsko-gyuveche", "Механджийско гювече", "4,20", "400", ""]

            ],

            "Пърленки": [
                ["", "prlenka-s-maslko", "Пърленка с маслко", "2,10", "170", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "2,80", "250", ""],
["", "prlenka-s-kashkaval-i-susam", "Пърленка с кашкавал и сусам", "2,80", "250", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "100", ""],
["", "domati-krastaviczi", "Домати, краставици", "0,70", "150", ""],
["", "zele", "Зеле", "0,70", "150", ""],
["", "kombinirana", "Комбинирана", "2,80", "200", ""],
["", "lyutenicza", "Лютеница", "0,70", "50", ""],
["", "lyuti-chushki", "Люти чушки", "0,00", "5", ""]

            ],

            "desserts": [
                ["", "czedeno-mlyako-s-borovinki", "Цедено мляко с боровинки", "1,40", "180", ""]

            ]
        }', 
        'slug' => 'mehana-zelenoto',
        'business_name' => 'Механа Зеленото',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6600',
        'address' => 'ул. Отец Паисий 7',
        'address_additional' => '',
        'coords_x' => '41.6433143',
        'coords_y' => '25.3696054',
        'phone' => '+359885239160',
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
            
            "Гофрети пици": [
                ["", "picza-peperoni", "Пица Пеперони", "2,10", "280", ""],
["", "picza-proshuto", "Пица Прошуто", "2,10", "280", ""],
["", "picza-kuatro-fomadzhi", "Пица Куатро Фомаджи", "3,50", "300", ""],
["", "picza-shunka", "Пица Шунка", "2,80", "330", ""],
["", "picza-kapreze", "Пица Капрезе", "2,10", "280", ""],
["", "picza-miks", "Пица Микс", "3,50", "350", ""]

            ],

            "salads": [
                ["", "zelenchukova-salata", "Зеленчукова салата", "2,10", "350", ""],
["", "salata-czezar", "Салата Цезар", "2,80", "340", ""],
["", "salata-s-riba-ton", "Салата с риба тон", "2,80", "380", ""],
["", "salata-s-pileshko-file", "Салата с пилешко филе", "2,80", "370", ""],
["", "salata-kapreze", "Салата Капрезе", "2,80", "320", ""],
["", "salata-proshuto", "Салата Прошуто", "2,80", "460", ""]

            ],

            "sandwiches": [
                ["", "sandvich-kapreze", "Сандвич Капрезе", "1,40", "", ""],
["", "sandvich-proshuto", "Сандвич Прошуто", "1,40", "", ""],
["", "sandvich-svinsko-file", "Сандвич Свинско филе", "1,40", "", ""],
["", "sandvich-bekon", "Сандвич Бекон", "1,40", "", ""],
["", "sandvich-shunka", "Сандвич Шунка", "1,40", "", ""],
["", "sandvich-peperoni", "Сандвич Пеперони", "1,40", "", ""],
["", "sandvich-riba-ton", "Сандвич Риба тон", "1,40", "", ""],
["", "sandvich-miks", "Сандвич Микс", "2,10", "", ""]

            ],

            "Принцеси": [
                ["", "khot-dog", "Хот Дог", "0,70", "180", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "1,40", "200", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "1,40", "180", ""],
["", "princzesa-s-peperoni-i-kashkaval", "Принцеса с пеперони и кашкавал", "1,40", "180", ""],
["", "princzesa-s-kashkaval-i-topeno-sirene", "Принцеса с кашкавал и топено сирене", "1,40", "200", ""]

            ],

            "Гофрети": [
                ["", "gofreta-s-shokolad", "Гофрета с шоколад", "1,40", "70", ""],
["", "gofreta-s-nutela", "Гофрета с Нутела", "1,40", "70", ""],
["", "gofreta-ss-sezonni-plodove", "Гофрета със сезонни плодове", "0,70", "80", ""]

            ]
        }', 
        'slug' => 'zan-zan',
        'business_name' => 'Zan Zan',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kazanlak',
        'region' => 'Kazanlak',
        'postal_code' => '6100',
        'address' => 'ул. Искра 14',
        'address_additional' => '',
        'coords_x' => '42.62048845',
        'coords_y' => '25.3933505',
        'phone' => '+359898594003',
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
                ["", "avokado-kapreze", "Авокадо Капрезе", "4,20", "300", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "250", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "350", ""],
["", "zelena-salata-s-kinoa-yajcze-i-proshuto", "Зелена салата с киноа, яйце и прошуто", "4,90", "300", ""],
["", "zelena-salata-s-pushena-somga", "Зелена салата с пушена сьомга", "4,90", "250", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""]

            ],

            "pasta": [
                ["", "spageti-karbonara", "Спагети Карбонара", "4,20", "250", ""],
["", "taliateli-s-pushena-somga", "Талиатели с пушена сьомга", "4,90", "250", ""],
["", "taliateli-s-pile", "Талиатели с пиле", "4,20", "250", ""],
["", "studena-pasta-s-riba-ton", "Студена паста с риба тон", "3,50", "250", ""],
["", "studena-pasta", "Студена паста", "2,80", "250", ""]

            ],

            "Пълнена прясна паста": [
                ["", "tortelini-s-proshuto", "Тортелини с прошуто", "4,20", "250", ""],
["", "tortelini-ss-spanak-i-rikota", "Тортелини със спанак и рикота", "4,20", "250", ""],
["", "ravioli-s-chetiri-sirena", "Равиоли с четири сирена", "4,20", "250", ""],
["", "ravioli-s-manatarki", "Равиоли с манатарки", "4,20", "250", ""]

            ],

            "Бургери и сандвичи": [
                ["", "burger-ss-svinsko-meso", "Бургер със свинско месо", "4,90", "250", ""],
["", "sandvich-s-pile", "Сандвич с пиле", "2,80", "200", ""],
["", "burger-s-pileshko-file", "Бургер с пилешко филе", "4,90", "250", ""],
["", "teleshki-burger", "Телешки бургер", "4,90", "250", ""],
["", "sandvich", "Сандвич", "2,80", "200", ""],
["", "sandvich-ss-sirena", "Сандвич със сирена", "2,80", "200", ""]

            ],

            "sauces": [
                ["", "barbekyu-sos", "Барбекю сос", "0,00", "50", ""],
["", "mlechno-majonezen-sos", "Млечно-майонезен сос", "0,00", "50", ""]

            ],

            "desserts": [
                ["", "chijzkejk", "Чийзкейк", "2,80", "150", ""],
["", "kajzershman", "Кайзершман", "4,20", "250", ""],
["", "lava-kejk", "Лава кейк", "3,50", "180", ""]

            ]
        }', 
        'slug' => 'bistro-iglika',
        'business_name' => 'Бистро Иглика',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Velingrad',
        'region' => 'Velingrad',
        'postal_code' => '4600',
        'address' => 'ул. Александър Стамболийски 7',
        'address_additional' => '',
        'coords_x' => '42.02566385',
        'coords_y' => '23.99406778',
        'phone' => '+359888492290',
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
            
            "Промо меню": [
                ["", "2-br-khot-dog-s-kebapche--koka-kola-ken", "2 бр. Хот Дог с кебапче + Кока Кола кен", "2,10", "", ""],
["", "5-kebapcheta--5-kyufteta", "5 кебапчета + 5 кюфтета", "5,60", "", ""],
["", "khot-dog-s-krenvirsh", "Хот Дог с кренвирш", "1,40", "160", ""],
["", "10-kebapcheta", "10 кебапчета", "5,60", "", ""],
["", "10-kyufteta", "10 кюфтета", "5,60", "", ""],
["", "khot-dog-s-kebapche", "Хот Дог с кебапче", "0,70", "140", ""],
["", "menyu-meshana-skara", "Меню мешана скара", "3,50", "", ""],
["", "menyu-kebapcheta", "Меню кебапчета", "2,80", "", ""],
["", "menyu-kyufteta", "Меню кюфтета", "2,80", "", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,00", "60", ""],
["", "kyufte", "Кюфте", "0,00", "60", ""],
["", "teleshka-nadenichka", "Телешка наденичка", "0,70", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "0,70", "100", ""],
["", "svinska-przhola", "Свинска пържола", "1,40", "100", ""],
["", "rebrcza", "Ребърца", "1,40", "100", ""],
["", "klczana-nadenicza", "Кълцана наденица", "0,70", "100", ""]

            ],

            "garnish": [
                ["", "kartofki", "Картофки", "0,70", "150", ""],
["", "khlebche", "Хлебче", "0,00", "80", ""],
["", "lyutenicza", "Лютеница", "0,00", "70", ""],
["", "majoneza", "Майонеза", "0,00", "70", ""],
["", "ketchup", "Кетчуп", "0,00", "70", ""],
["", "gorchicza", "Горчица", "0,00", "70", ""],
["", "chili", "Чили", "0,00", "70", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/999807.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/999804.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/999805.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/999810.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/999809.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/999821.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/999808.jpg?width=302"],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/999815.jpg?width=302"],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/999803.jpg?width=302"],
["", "cappy-banan", "Cappy Банан", "0,00", "200", "https://images.deliveryhero.io/image/fd-bg/Products/999817.jpg?width=302"],
["", "cappy-praskova", "Cappy Праскова", "0,00", "200", "https://images.deliveryhero.io/image/fd-bg/Products/999820.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/999816.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/999806.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajryan-megle", "Айрян Мегле", "0,70", "330", ""]

            ],

            "beer": [
                ["", "kamenicza", "Каменица", "0,70", "500", ""],
["", "stela", "Стела", "1,40", "500", ""],
["", "beks", "Бекс", "1,40", "500", ""],
["", "staropramen", "Старопрамен", "1,40", "500", ""],
["", "astika", "Астика", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'blgarska-skara',
        'business_name' => 'ВЕРИГА БЪЛГАРСКА СКАРА (Разград 2)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Razgrad',
        'region' => 'Razgrad',
        'postal_code' => '7205',
        'address' => 'кв.Орел ул. Юмрукалал',
        'address_additional' => '',
        'coords_x' => '43.5175953',
        'coords_y' => '26.5206023',
        'phone' => '+359893024242',
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
            
            "Понеделник": [
                ["", "picza-s-pile-shunka-bekon-i-zelenchuczi-klasicheska", "Пица с пиле, шунка, бекон и зеленчуци класическа", "2,80", "", ""],
["", "spanachena-supa", "Спаначена супа", "0,70", "350", ""],
["", "domashna-pileshka-supa", "Домашна пилешка супа", "1,40", "350", ""],
["", "tarator-s-orekhi-i-kopr-bez-chesn", "Таратор с орехи и копър, без чесън", "0,70", "350", ""],
["", "porcziya-tri-lyuti-marinovani-chushleta", "Порция три люти мариновани чушлета", "1,40", "100", ""],
["", "zelena-salata-s-domati-i-krastaviczi", "Зелена салата с домати и краставици", "1,40", "250", ""],
["", "salata-zele-i-morkovi-s-kopr", "Салата зеле и моркови с копър", "0,70", "300", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "300", ""],
["", "oriz-na-furna", "Ориз на фурна", "1,40", "250", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "2,10", "300", ""],
["", "przheni-kyufteta-s-garnitura-zele", "Пържени кюфтета с гарнитура зеле", "2,10", "350", ""],
["", "kyufteta-na-shefa-s-garnitura", "Кюфтета на шефа с гарнитура", "2,10", "", ""],
["", "kebapcheta-s-garnitura", "Кебапчета с гарнитура", "2,10", "", ""],
["", "svinski-kyufteta-s-garnitura", "Свински кюфтета с гарнитура", "2,10", "", ""],
["", "pileshka-przhola-but-s-garnitura", "Пилешка пържола бут с гарнитура", "2,80", "350", ""],
["", "pecheni-kartofi-na-furna", "Печени картофи на фурна", "1,40", "250", ""],
["", "pileshko-butche-ss-studena-garnitura", "Пилешко бутче със студена гарнитура", "2,10", "350", ""],
["", "pileshko-butche-s-kartofi-na-furna", "Пилешко бутче с картофи на фурна", "2,10", "350", ""],
["", "pileshko-butche-s-oriz-na-furna", "Пилешко бутче с ориз на фурна", "2,10", "350", ""],
["", "spageti-ss-sirene", "Спагети със сирене", "1,40", "250", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "350", ""],
["", "vegetarianski-spageti", "Вегетариански спагети", "2,80", "350", ""],
["", "spageti-dukesa", "Спагети Дукеса", "2,80", "350", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "brkani-yajcza", "Бъркани яйца", "2,10", "", ""],
["", "omlet-asorti", "Омлет Асорти", "2,80", "350", ""],
["", "omlet-natyur", "Омлет Натюр", "2,10", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "250", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "250", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "2,10", "350", ""],
["", "shunkova-zapekanka", "Шункова запеканка", "2,10", "350", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "1,40", "", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "1,40", "", ""],
["", "palachinka-ss-sirene-i-shunka", "Палачинка със сирене и шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "1,40", "", ""],
["", "palachinka-ss-sladko-i-yagodi", "Палачинка със сладко и ягоди", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""],
["", "krem-bolyarki", "Крем Болярки", "1,40", "200", ""],
["", "czedeno-kiselo-mlyako-ss-sladko-ot-borovinki", "Цедено кисело мляко със сладко от боровинки", "2,10", "250", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "1,40", "250", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,10", "250", ""],
["", "krem-pita-mayami", "Крем пита Маями", "2,80", "200", ""],
["", "palachinka-s-kashkaval-i-shunka", "Палачинка с кашкавал и шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval-i-sirene", "Палачинка с кашкавал и сирене", "1,40", "", ""]

            ],

            "Вторник": [
                ["", "domashna-pileshka-supa", "Домашна пилешка супа", "1,40", "350", ""],
["", "oriz-na-furna", "Ориз на фурна", "1,40", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "300", ""],
["", "pileshko-butche-s-oriz-na-furna", "Пилешко бутче с ориз на фурна", "2,10", "350", ""],
["", "pileshko-butche-ss-studena-garnitura", "Пилешко бутче със студена гарнитура", "2,10", "350", ""],
["", "pecheni-kartofi-na-furna", "Печени картофи на фурна", "1,40", "250", ""],
["", "tarator-s-orekhi-i-kopr-bez-chesn", "Таратор с орехи и копър, без чесън", "0,70", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "2,10", "350", ""],
["", "pileshko-butche-s-kartofi-na-furna", "Пилешко бутче с картофи на фурна", "2,10", "350", ""],
["", "pileshka-przhola-but-s-garnitura", "Пилешка пържола бут с гарнитура", "2,80", "350", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "2,10", "300", ""],
["", "przheni-kyufteta-s-garnitura", "Пържени кюфтета с гарнитура", "2,10", "350", ""],
["", "vegetarianski-spageti", "Вегетариански спагети", "2,80", "350", ""],
["", "spageti-dukesa", "Спагети Дукеса", "2,80", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "350", ""],
["", "spageti-sicziliya", "Спагети Сицилия", "2,80", "350", ""],
["", "porcziya-tri-lyuti-marinovani-chushleta", "Порция три люти мариновани чушлета", "1,40", "100", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "2,10", "350", ""],
["", "shunkova-zapekanka", "Шункова запеканка", "2,10", "350", ""],
["", "kyufteta-na-shefa-s-garnitura", "Кюфтета на шефа с гарнитура", "2,10", "", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "1,40", "", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "1,40", "", ""],
["", "palachinka-ss-sirene-i-shunka", "Палачинка със сирене и шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "1,40", "", ""],
["", "palachinka-ss-sirene-i-med", "Палачинка със сирене и мед", "1,40", "", ""],
["", "palachinka-ss-sladko-i-yagodi", "Палачинка със сладко и ягоди", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "picza-s-pile-shunka-bekon-i-zelenchuczi-klasicheska", "Пица с пиле, шунка, бекон и зеленчуци класическа", "2,80", "", ""],
["", "salata-zele-i-morkovi-s-kopr", "Салата зеле и моркови с копър", "0,70", "300", ""],
["", "salata-s-domati-i-krastaviczi", "Салата с домати и краставици", "1,40", "250", ""],
["", "spageti-ss-sirene", "Спагети със сирене", "1,40", "250", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "svinski-kyufteta-s-garnitura", "Свински кюфтета с гарнитура", "2,10", "", ""],
["", "kebapcheta-s-garnitura", "Кебапчета с гарнитура", "2,10", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""],
["", "krem-pita-mayami", "Крем пита Маями", "2,80", "200", ""],
["", "krem-bolyarki", "Крем Болярки", "1,40", "200", ""],
["", "czedeno-kiselo-mlyako-ss-sladko-ot-borovinki", "Цедено кисело мляко със сладко от боровинки", "2,10", "250", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "1,40", "250", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,10", "250", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "250", ""],
["", "omlet-natyur", "Омлет Натюр", "2,10", "200", ""],
["", "brkani-yajcza", "Бъркани яйца", "2,10", "", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "250", ""],
["", "palachinka-s-kashkaval-i-shunka", "Палачинка с кашкавал и шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval-i-sirene", "Палачинка с кашкавал и сирене", "1,40", "", ""]

            ],

            "Сряда": [
                ["", "palachinka-s-kashkaval-i-sirene", "Палачинка с кашкавал и сирене", "1,40", "", ""],
["", "palachinka-s-kashkaval-i-shunka", "Палачинка с кашкавал и шунка", "1,40", "", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "250", ""],
["", "omlet-natyur", "Омлет Натюр", "2,10", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "250", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,10", "250", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "1,40", "250", ""],
["", "czedeno-kiselo-mlyako-ss-sladko-ot-borovinki", "Цедено кисело мляко със сладко от боровинки", "2,10", "250", ""],
["", "krem-bolyarki", "Крем Болярки", "1,40", "200", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""],
["", "kebapcheta-s-garnitura", "Кебапчета с гарнитура", "2,10", "", ""],
["", "svinski-kyufteta-s-garnitura", "Свински кюфтета с гарнитура", "2,10", "", ""],
["", "kyufteta-na-shefa-s-garnitura", "Кюфтета на шефа с гарнитура", "2,10", "", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "palachinka-ss-sirene-i-med", "Палачинка със сирене и мед", "1,40", "", ""],
["", "palachinka-ss-sirene-i-shunka", "Палачинка със сирене и шунка", "1,40", "", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "1,40", "", ""],
["", "palachinka-ss-sladko-i-yagodi", "Палачинка със сладко и ягоди", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "", ""],
["", "krem-pita-mayami", "Крем пита Маями", "2,80", "200", ""],
["", "shunkova-zapekanka", "Шункова запеканка", "2,10", "350", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "2,10", "350", ""],
["", "salata-s-domati-i-krastaviczi", "Салата с домати и краставици", "1,40", "250", ""],
["", "salata-zele-i-morkovi-s-kopr", "Салата зеле и моркови с копър", "0,70", "300", ""],
["", "pileshko-butche-s-kartofi-na-furna", "Пилешко бутче с картофи на фурна", "2,10", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "2,10", "350", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "2,10", "300", ""],
["", "przheni-kyufteta-s-garnitura", "Пържени кюфтета с гарнитура", "2,10", "350", ""],
["", "spageti-ss-sirene", "Спагети със сирене", "1,40", "250", ""],
["", "porcziya-tri-lyuti-marinovani-chushleta", "Порция три люти мариновани чушлета", "1,40", "100", ""],
["", "spageti-dukesa", "Спагети Дукеса", "2,80", "350", ""],
["", "spageti-sicziliya", "Спагети Сицилия", "2,80", "350", ""],
["", "vegetarianski-spageti", "Вегетариански спагети", "2,80", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "350", ""],
["", "pileshka-przhola-but-s-garnitura", "Пилешка пържола бут с гарнитура", "2,80", "350", ""],
["", "pileshko-butche-ss-studena-garnitura", "Пилешко бутче със студена гарнитура", "2,10", "350", ""],
["", "pileshko-butche-s-oriz-na-furna", "Пилешко бутче с ориз на фурна", "2,10", "350", ""],
["", "pecheni-kartofi-na-furna", "Печени картофи на фурна", "1,40", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "300", ""],
["", "tarator-s-orekhi-i-kopr-bez-chesn", "Таратор с орехи и копър, без чесън", "0,70", "350", ""],
["", "domashna-pileshka-supa", "Домашна пилешка супа", "1,40", "350", ""],
["", "zelenchukova-supa", "Зеленчукова супа", "0,70", "350", ""],
["", "brkani-yajcza", "Бъркани яйца", "2,10", "", ""]

            ],

            "thursday": [
                ["", "krem-bolyarki", "Крем Болярки", "1,40", "200", ""],
["", "czedeno-kiselo-mlyako-ss-sladko-ot-borovinki", "Цедено кисело мляко със сладко от боровинки", "2,10", "250", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,10", "250", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "250", ""],
["", "palachinka-s-kashkaval-i-shunka", "Палачинка с кашкавал и шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval-i-sirene", "Палачинка с кашкавал и сирене", "1,40", "", ""],
["", "brkani-yajcza", "Бъркани яйца", "2,10", "", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "250", ""],
["", "krem-pita-mayami", "Крем пита Маями", "2,80", "200", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "1,40", "250", ""],
["", "omlet-natyur", "Омлет Натюр", "2,10", "200", ""],
["", "picza-s-pile-shunka-bekon-i-zelenchuczi-klasicheska", "Пица с пиле, шунка, бекон и зеленчуци класическа", "2,80", "", ""],
["", "palachinka-ss-sirene-i-med", "Палачинка със сирене и мед", "1,40", "", ""],
["", "palachinka-ss-sirene-i-shunka", "Палачинка със сирене и шунка", "1,40", "", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "1,40", "", ""],
["", "palachinka-ss-sladko-i-yagodi", "Палачинка със сладко и ягоди", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "", ""],
["", "salata-zele-i-morkovi-s-kopr", "Салата зеле и моркови с копър", "0,70", "300", ""],
["", "porcziya-tri-lyuti-marinovani-chushleta", "Порция три люти мариновани чушлета", "1,40", "100", ""],
["", "shunkova-zapekanka", "Шункова запеканка", "2,10", "350", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "2,10", "350", ""],
["", "kebapcheta-s-garnitura", "Кебапчета с гарнитура", "2,10", "", ""],
["", "kyufteta-na-shefa-s-garnitura", "Кюфтета на шефа с гарнитура", "2,10", "", ""],
["", "svinski-kyufteta-s-garnitura", "Свински кюфтета с гарнитура", "2,10", "", ""],
["", "pileshka-przhola-but-s-garnitura", "Пилешка пържола бут с гарнитура", "2,80", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "2,10", "350", ""],
["", "spageti-ss-sirene", "Спагети със сирене", "1,40", "250", ""],
["", "vegetarianski-spageti", "Вегетариански спагети", "2,80", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "350", ""],
["", "spageti-sicziliya", "Спагети Сицилия", "2,80", "350", ""],
["", "spageti-dukesa", "Спагети Дукеса", "2,80", "350", ""],
["", "pileshko-butche-s-kartofi-na-furna", "Пилешко бутче с картофи на фурна", "2,10", "350", ""],
["", "pileshko-butche-s-oriz-na-furna", "Пилешко бутче с ориз на фурна", "2,10", "350", ""],
["", "pileshko-butche-ss-studena-garnitura", "Пилешко бутче със студена гарнитура", "2,10", "350", ""],
["", "pecheni-kartofi-na-furna", "Печени картофи на фурна", "1,40", "250", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "2,10", "300", ""],
["", "przheni-kyufteta-s-garnitura", "Пържени кюфтета с гарнитура", "2,10", "350", ""],
["", "oriz-na-furna", "Ориз на фурна", "1,40", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "300", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "2,10", "350", ""],
["", "tarator-s-orekhi-i-kopr-bez-chesn", "Таратор с орехи и копър, без чесън", "0,70", "350", ""],
["", "zelenchukova-supa", "Зеленчукова супа", "0,70", "350", ""],
["", "domashna-pileshka-supa", "Домашна пилешка супа", "1,40", "350", ""]

            ],

            "friday": [
                ["", "domashna-pileshka-supa", "Домашна пилешка супа", "1,40", "350", ""],
["", "tarator-s-orekhi-i-kopr-bez-chesn", "Таратор с орехи и копър, без чесън", "0,70", "350", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "2,10", "350", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "300", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "2,10", "300", ""],
["", "pileshko-butche-ss-studena-garnitura", "Пилешко бутче със студена гарнитура", "2,10", "350", ""],
["", "pileshko-butche-s-oriz-na-furna", "Пилешко бутче с ориз на фурна", "2,10", "350", ""],
["", "pileshko-butche-s-kartofi-na-furna", "Пилешко бутче с картофи на фурна", "2,10", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "2,10", "350", ""],
["", "spanachena-supa", "Спаначена супа", "0,70", "350", ""],
["", "kartofeni-kroketi-s-mlechen-sos", "Картофени крокети с млечен сос", "2,10", "350", ""],
["", "oriz-na-furna", "Ориз на фурна", "1,40", "250", ""],
["", "przheni-kyufteta-s-garnitura", "Пържени кюфтета с гарнитура", "2,10", "350", ""],
["", "vegetarianski-spageti", "Вегетариански спагети", "2,80", "350", ""],
["", "pileshka-przhola-but-s-garnitura", "Пилешка пържола бут с гарнитура", "2,80", "350", ""],
["", "kyufteta-na-shefa-s-garnitura", "Кюфтета на шефа с гарнитура", "2,10", "", ""],
["", "porcziya-tri-lyuti-marinovani-chushleta", "Порция три люти мариновани чушлета", "1,40", "100", ""],
["", "picza-s-pile-shunka-bekon-i-zelenchuczi-klasicheska", "Пица с пиле, шунка, бекон и зеленчуци класическа", "2,80", "", ""],
["", "zelena-salata-s-domati-i-krastaviczi", "Зелена салата с домати и краставици", "1,40", "250", ""],
["", "pecheni-kartofi-na-furna", "Печени картофи на фурна", "1,40", "250", ""],
["", "spageti-dukesa", "Спагети Дукеса", "2,80", "350", ""],
["", "spageti-sicziliya", "Спагети Сицилия", "2,80", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "350", ""],
["", "svinski-kyufteta-s-garnitura", "Свински кюфтета с гарнитура", "2,10", "", ""],
["", "kebapcheta-s-garnitura", "Кебапчета с гарнитура", "2,10", "", ""],
["", "shunkova-zapekanka", "Шункова запеканка", "2,10", "350", ""],
["", "salata-zele-i-morkovi-s-kopr", "Салата зеле и моркови с копър", "0,70", "300", ""],
["", "krem-pita-mayami", "Крем пита Маями", "2,80", "200", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "2,10", "350", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "1,40", "", ""],
["", "palachinka-ss-sladko-i-yagodi", "Палачинка със сладко и ягоди", "1,40", "", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "1,40", "", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "1,40", "", ""],
["", "palachinka-ss-sirene-i-shunka", "Палачинка със сирене и шунка", "1,40", "", ""],
["", "palachinka-ss-sirene-i-med", "Палачинка със сирене и мед", "1,40", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,10", "250", ""],
["", "krem-bolyarki", "Крем Болярки", "1,40", "200", ""],
["", "czedeno-kiselo-mlyako-ss-sladko-ot-borovinki", "Цедено кисело мляко със сладко от боровинки", "2,10", "250", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "1,40", "250", ""],
["", "spageti-ss-sirene", "Спагети със сирене", "1,40", "250", ""],
["", "omlet-natyur", "Омлет Натюр", "2,10", "200", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "250", ""],
["", "brkani-yajcza", "Бъркани яйца", "2,10", "", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "250", ""],
["", "palachinka-s-kashkaval-i-shunka", "Палачинка с кашкавал и шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval-i-sirene", "Палачинка с кашкавал и сирене", "1,40", "", ""]

            ],

            "Събота": [
                ["", "spageti-karbonara", "Спагети Карбонара", "2,80", "350", ""],
["", "spageti-sicziliya", "Спагети Сицилия", "2,80", "350", ""],
["", "spageti-dukesa", "Спагети Дукеса", "2,80", "350", ""],
["", "porcziya-tri-lyuti-marinovani-chushleta", "Порция три люти мариновани чушлета", "1,40", "100", ""],
["", "kyufteta-na-shefa-s-garnitura", "Кюфтета на шефа с гарнитура", "2,10", "", ""],
["", "pileshka-przhola-but-s-garnitura", "Пилешка пържола бут с гарнитура", "2,80", "350", ""],
["", "vegetarianski-spageti", "Вегетариански спагети", "2,80", "350", ""],
["", "przheni-kyufteta-s-garnitura", "Пържени кюфтета с гарнитура", "2,10", "350", ""],
["", "pileshko-butche-ss-studena-garnitura", "Пилешко бутче със студена гарнитура", "2,10", "350", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "2,10", "300", ""],
["", "tarator-s-orekhi-i-kopr-bez-chesn", "Таратор с орехи и копър, без чесън", "0,70", "350", ""],
["", "domashna-pileshka-supa", "Домашна пилешка супа", "1,40", "350", ""],
["", "spageti-ss-sirene", "Спагети със сирене", "1,40", "250", ""],
["", "krem-pita-mayami", "Крем пита Маями", "2,80", "200", ""],
["", "pecheni-kartofi-na-furna", "Печени картофи на фурна", "1,40", "250", ""],
["", "oriz-na-furna", "Ориз на фурна", "1,40", "250", ""],
["", "pileshko-butche-s-kartofi-na-furna", "Пилешко бутче с картофи на фурна", "2,10", "350", ""],
["", "pileshko-butche-s-oriz-na-furna", "Пилешко бутче с ориз на фурна", "2,10", "350", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "300", ""],
["", "shunkova-zapekanka", "Шункова запеканка", "2,10", "350", ""],
["", "zapekanka-s-bekon", "Запеканка с бекон", "2,10", "350", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "1,40", "", ""],
["", "palachinka-ss-sladko-i-yagodi", "Палачинка със сладко и ягоди", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "2,10", "350", ""],
["", "salata-zele-i-morkovi-s-kopr", "Салата зеле и моркови с копър", "0,70", "300", ""],
["", "kebapcheta-s-garnitura", "Кебапчета с гарнитура", "2,10", "", ""],
["", "svinski-kyufteta-s-garnitura", "Свински кюфтета с гарнитура", "2,10", "", ""],
["", "zelena-salata-s-domati-i-krastaviczi", "Зелена салата с домати и краставици", "1,40", "250", ""],
["", "brkani-yajcza", "Бъркани яйца", "2,10", "", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "250", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "omlet-natyur", "Омлет Натюр", "2,10", "200", ""],
["", "czedeno-kiselo-mlyako-ss-sladko-ot-borovinki", "Цедено кисело мляко със сладко от боровинки", "2,10", "250", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,10", "250", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval-i-sirene", "Палачинка с кашкавал и сирене", "1,40", "", ""],
["", "palachinka-s-kashkaval-i-shunka", "Палачинка с кашкавал и шунка", "1,40", "", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "250", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "1,40", "250", ""],
["", "krem-bolyarki", "Крем Болярки", "1,40", "200", ""]

            ],

            "Неделя": [
                ["", "omlet-s-shunka", "Омлет с шунка", "2,80", "250", ""],
["", "palachinka-s-kashkaval-i-shunka", "Палачинка с кашкавал и шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval-i-sirene", "Палачинка с кашкавал и сирене", "1,40", "", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "1,40", "", ""],
["", "omlet-natyur", "Омлет Натюр", "2,10", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "250", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "1,40", "", ""],
["", "palachinka-ss-sladko-i-yagodi", "Палачинка със сладко и ягоди", "1,40", "", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "1,40", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,10", "250", ""],
["", "czedeno-kiselo-mlyako-ss-sladko-ot-borovinki", "Цедено кисело мляко със сладко от боровинки", "2,10", "250", ""],
["", "zelena-salata-s-domati-i-krastaviczi", "Зелена салата с домати и краставици", "1,40", "250", ""],
["", "salata-zele-i-morkovi-s-kopr", "Салата зеле и моркови с копър", "0,70", "300", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "2,10", "350", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "300", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "2,80", "400", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "1,40", "250", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "brkani-yajcza", "Бъркани яйца", "2,10", "", ""],
["", "svinski-kyufteta-s-garnitura", "Свински кюфтета с гарнитура", "2,10", "", ""],
["", "zapekanka-s-bekon", "Запеканка с бекон", "2,10", "350", ""],
["", "shunkova-zapekanka", "Шункова запеканка", "2,10", "350", ""],
["", "krem-bolyarki", "Крем Болярки", "1,40", "200", ""],
["", "kyufteta-na-shefa-s-garnitura", "Кюфтета на шефа с гарнитура", "2,10", "", ""],
["", "pileshko-butche-s-kartofi-na-furna", "Пилешко бутче с картофи на фурна", "2,10", "350", ""],
["", "oriz-na-furna", "Ориз на фурна", "1,40", "250", ""],
["", "pecheni-kartofi-na-furna", "Печени картофи на фурна", "1,40", "250", ""],
["", "spageti-ss-sirene", "Спагети със сирене", "1,40", "250", ""],
["", "tarator-s-orekhi-i-kopr-bez-chesn", "Таратор с орехи и копър, без чесън", "0,70", "350", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "2,10", "300", ""],
["", "przheni-kyufteta-s-garnitura", "Пържени кюфтета с гарнитура", "2,10", "350", ""],
["", "pileshka-przhola-but-s-garnitura", "Пилешка пържола бут с гарнитура", "2,80", "350", ""],
["", "porcziya-tri-lyuti-marinovani-chushleta", "Порция три люти мариновани чушлета", "1,40", "100", ""],
["", "pileshko-butche-s-oriz-na-furna", "Пилешко бутче с ориз на фурна", "2,10", "350", ""],
["", "vegetarianski-spageti", "Вегетариански спагети", "2,80", "350", ""],
["", "spageti-dukesa", "Спагети Дукеса", "2,80", "350", ""],
["", "spageti-sicziliya", "Спагети Сицилия", "2,80", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "350", ""],
["", "pileshko-butche-ss-studena-garnitura", "Пилешко бутче със студена гарнитура", "2,10", "350", ""],
["", "krem-pita-mayami", "Крем пита Маями", "2,80", "200", ""],
["", "domashna-pileshka-supa", "Домашна пилешка супа", "1,40", "350", ""],
["", "spanachena-supa", "Спаначена супа", "0,70", "350", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "2,10", "350", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "zelena-salata", "Зелена салата", "2,80", "380", ""],
["", "salata-czezar-s-riba-ton", "Салата Цезар с риба тон", "4,20", "400", ""],
["", "salata-czezar-s-pile", "Салата Цезар с пиле", "4,20", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "250", ""],
["", "salata-snezhanka-s-presni-krastaviczi", "Салата Снежанка с пресни краставици", "2,80", "200", ""],
["", "salata-snezhanka-s-kiseli-krastaviczi", "Салата Снежанка с кисели краставици", "2,80", "200", ""],
["", "salata-zele-i-morkovi-s-kopr", "Салата зеле и моркови с копър", "2,10", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""]

            ],

            "starters": [
                ["", "pileshki-filencza", "Пилешки филенца", "4,90", "350", ""],
["", "khrupkavi-filencza-s-kornflejks", "Хрупкави филенца с корнфлейкс", "4,90", "250", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "300", ""],
["", "panirano-topeno-sirene", "Панирано топено сирене", "5,60", "250", ""],
["", "pileshki-krilcza-v-maslo-i-chesn", "Пилешки крилца в масло и чесън", "4,20", "450", ""],
["", "kashkavaleni-pukhcheta", "Кашкавалени пухчета", "3,50", "200", ""],
["", "kartofeni-pikant-shajbi", "Картофени пикант шайби", "2,10", "200", ""],
["", "panirani-sirencza", "Панирани сиренца", "2,80", "200", ""],
["", "kartof-po-selski", "Картоф по селски", "2,10", "200", ""],
["", "panirani-lucheni-krgcheta", "Панирани лучени кръгчета", "3,50", "200", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,90", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "gbi-v-maslo-i-chesn", "Гъби в масло и чесън", "3,50", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "200", ""]

            ],

            "Омлети Аламинути": [
                ["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "omlet-s-kashkaval-i-sirene", "Омлет с кашкавал и сирене", "2,80", "300", ""],
["", "omlet-ss-zelenchuczi", "Омлет със зеленчуци", "2,10", "300", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "250", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "250", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "250", ""],
["", "omlet-natyur", "Омлет Натюр", "2,10", "200", ""],
["", "omlet-asorti", "Омлет Асорти", "2,80", "350", ""],
["", "brkani-yajcza", "Бъркани яйца", "2,10", "", ""]

            ],

            "pasta": [
                ["", "spageti-boloneze", "Спагети Болонезе", "2,80", "350", ""],
["", "spageti-sicziliya", "Спагети Сицилия", "2,80", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "350", ""],
["", "spageti-dukesa", "Спагети Дукеса", "2,80", "350", ""],
["", "vegetarianski-spageti", "Вегетариански спагети", "2,80", "350", ""],
["", "spageti-ss-sirene", "Спагети със сирене", "1,40", "250", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-bekon", "Запеканка с бекон", "3,50", "450", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "3,50", "450", ""],
["", "shunkova-zapekanka", "Шункова запеканка", "3,50", "450", ""],
["", "vegetarianska-zapekanka", "Вегетарианска запеканка", "3,50", "450", ""],
["", "mandradzhijska-zapekanka", "Мандраджийска запеканка", "3,50", "450", ""],
["", "zapekanka-boloneze", "Запеканка Болонезе", "4,90", "450", ""],
["", "zapekanka-po-selski", "Запеканка по селски", "4,20", "450", ""],
["", "shunkova-zapekanka", "Шункова запеканка", "2,10", "350", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "2,10", "350", ""]

            ],

            "sandwiches": [
                ["", "przheni-filijki", "Пържени филийки", "2,10", "", ""],
["", "sandvich-s-lukanka", "Сандвич с луканка", "2,10", "", ""],
["", "sandvich-s-kashkaval-i-sirene", "Сандвич с кашкавал и сирене", "2,10", "", ""],
["", "sandvich-ss-sirene", "Сандвич със сирене", "2,10", "", ""],
["", "sandvich-s-yajcze-i-sirene", "Сандвич с яйце и сирене", "2,10", "", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "2,10", "", ""],
["", "sandvich-s-kajma", "Сандвич с кайма", "2,10", "", ""],
["", "sandvich-s-kashkaval-i-bekon", "Сандвич с кашкавал и бекон", "2,10", "", ""],
["", "sandvich-s-kashkaval-i-shunka", "Сандвич с кашкавал и шунка", "2,10", "", ""],
["", "sandvich-s-kashkaval-i-kajma", "Сандвич с кашкавал и кайма", "2,10", "", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "2,10", "", ""]

            ],

            "pizza": [
                ["", "picza-kaprichoza", "Пица Капричоза", "4,20", "", ""],
["", "picza-karbonara", "Пица Карбонара", "4,90", "", ""],
["", "picza-oliveti", "Пица Оливети", "4,20", "", ""],
["", "picza-gustozo", "Пица Густозо", "4,20", "", ""],
["", "familna-picza-khamburg", "Фамилна Пица Хамбург", "7,00", "1500", ""],
["", "familna-picza-ss-zelenchuczi", "Фамилна пица със зеленчуци", "7,00", "1500", ""],
["", "familna-picza-al-kapone", "Фамилна пица Ал Капоне", "7,00", "1500", ""],
["", "familna-picza-lki-luchiano", "Фамилна пица Лъки Лучиано", "7,00", "1500", ""],
["", "picza-s-shpekov-salam-klasik", "Пица с Шпеков салам Класик", "2,80", "", ""],
["", "picza-s-lukanka-klasik", "Пица с луканка Класик", "2,80", "", ""],
["", "picza-ss-zelenchuczi-klasik", "Пица със зеленчуци Класик", "2,80", "", ""],
["", "picza-s-shunka-klasik", "Пица с шунка Класик", "2,80", "", ""],
["", "picza-s-bekon-klasik", "Пица с бекон Класик", "2,80", "", ""],
["", "picza-braziliya", "Пица Бразилия", "2,80", "", ""],
["", "picza-s-pile-shunka-bekon-i-zelenchuczi-klasicheska", "Пица с пиле, шунка, бекон и зеленчуци класическа", "2,80", "", ""],
["", "picza-margarita", "Пица Маргарита", "2,80", "", ""],
["", "picza-el-maf", "Пица Ел Маф", "4,20", "", ""],
["", "picza-meksikana", "Пица Мексикана", "4,20", "", ""],
["", "picza-don-korleone", "Пица Дон Корлеоне", "4,90", "", ""],
["", "picza-chetiri-sezona", "Пица четири сезона", "4,20", "", ""],
["", "picza-figaro", "Пица Фигаро", "4,20", "", ""],
["", "picza-venecziyana", "Пица Венецияна", "3,50", "", ""],
["", "picza-salsiche", "Пица Салсиче", "3,50", "", ""],
["", "picza-vegetariana", "Пица Вегетариана", "3,50", "", ""],
["", "picza-italiya", "Пица Италия", "3,50", "", ""],
["", "picza-sirenata", "Пица Сиренатa", "4,20", "", ""],
["", "picza-veritas", "Пица Веритас", "4,20", "", ""],
["", "picza-luchiana", "Пица Лучиана", "3,50", "", ""],
["", "picza-gbena", "Пица Гъбена", "2,80", "", ""],
["", "picza-kalczone-zatvorena", "Пица Калцоне затворена", "4,20", "", ""],
["", "picza-selena", "Пица Селена", "4,20", "", ""],
["", "picza-chiken", "Пица Чикен", "4,20", "", ""],
["", "picza-neapolitana", "Пица Неаполитана", "3,50", "", ""],
["", "picza-proshuto", "Пица Прошуто", "4,20", "", ""],
["", "picza-kastelo", "Пица Кастело", "4,20", "", ""],
["", "picza-toskana", "Пица Тоскана", "4,20", "", ""],
["", "picza-verona", "Пица Верона", "4,20", "", ""],
["", "picza-morski-dar", "Пица Морски дар", "4,20", "", ""],
["", "picza-khavaj", "Пица Хавай", "3,50", "", ""],
["", "picza-salami", "Пица Салами", "3,50", "", ""],
["", "picza-liberta", "Пица Либерта", "4,20", "", ""],
["", "picza-piperoni", "Пица Пиперони", "4,20", "", ""],
["", "dve-klasicheski-familni-piczi-po-izbor", "Две класически фамилни пици по избор", "16,80", "3000", ""]

            ],

            "sachs": [
                ["", "sach-s-pileshko-meso-i-zelenchuczi", "Сач с пилешко месо и зеленчуци", "7,00", "600", ""],
["", "sach-ss-svinsko-meso-i-zelenchuczi", "Сач със свинско месо и зеленчуци", "7,70", "600", ""],
["", "sach-ss-zelenchuczi-i-kashkaval", "Сач със зеленчуци и кашкавал", "4,90", "550", ""]

            ],

            "specialties": [
                ["", "ludogorski-kebap", "Лудогорски кебап", "7,00", "320", ""],
["", "svinska-przhola-s-gben-sos", "Свинска пържола с гъбен сос", "7,00", "400", ""],
["", "svinski-kareta-s-gben-sos", "Свински карета с гъбен сос", "7,00", "300", ""],
["", "svinska-przhola-po-lovdzhijska", "Свинска пържола по ловджийскa", "7,00", "320", ""],
["", "svinski-khapki-v-smetanov-sos", "Свински хапки в сметанов сос", "6,30", "320", ""],
["", "pileshki-khapki-v-smetanov-sos", "Пилешки хапки в сметанов сос", "6,30", "320", ""],
["", "pileshki-khapki-v-sos-chetiri-sirena", "Пилешки хапки в сос четири сирена", "5,60", "400", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "5,60", "350", ""],
["", "bolyarska-torbichka", "Болярска торбичка", "6,30", "500", ""]

            ],

            "grill": [
                ["", "kebapcheta-s-garnitura", "Кебапчета с гарнитура", "2,10", "", ""],
["", "pileshka-przhola-but-s-garnitura", "Пилешка пържола бут с гарнитура", "2,80", "350", ""],
["", "kyufteta-na-shefa-s-garnitura", "Кюфтета на шефа с гарнитура", "2,10", "", ""],
["", "svinski-rebra", "Свински ребра", "6,30", "400", ""],
["", "meshani-mesa", "Мешани меса", "16,80", "", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "230", ""],
["", "pileshki-krilcza-na-skara", "Пилешки крилца на скара", "4,20", "450", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "4,90", "230", ""],
["", "svinski-kareta", "Свински карета", "6,30", "230", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "110", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "4,90", "230", ""],
["", "kyufteto-na-shefa", "Кюфтето на шефа", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "60", ""],
["", "kyufte", "Кюфте", "0,70", "60", ""]

            ],

            "Хлебчета": [
                ["", "grczka-pita", "Гръцка пита", "0,70", "70", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "0,70", "200", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "180", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "180", ""],
["", "prlenka", "Пърленка", "0,70", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "150", ""],
["", "prepechena-chesnova-filiya-khlyab", "Препечена чеснова филия хляб", "0,00", "", ""],
["", "prepechena-filiya-khlyab-s-maslo", "Препечена филия хляб с масло", "0,00", "", ""],
["", "prlenka-s-maslo", "Пърленка с масло", "0,70", "150", ""],
["", "prepechena-filiya-s-khlyab", "Препечена филия с хляб", "0,00", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "Допълнителни продукти": [
                ["", "gbi", "Гъби", "0,00", "50", ""],
["", "zelen-piper", "Зелен пипер", "0,00", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""],
["", "bekon", "Бекон", "0,70", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "krave-sirene", "Краве сирене", "0,70", "50", ""],
["", "limon", "Лимон", "0,00", "50", ""],
["", "orekhi", "Орехи", "0,70", "50", ""],
["", "zelenchuczi", "Зеленчуци", "0,00", "50", ""],
["", "lyuta-marinovana-chushka", "Люта маринована чушка", "0,00", "", ""],
["", "techen-shokolad", "Течен шоколад", "0,00", "50", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "50", ""],
["", "rulcza-ot-raczi", "Рулца от раци", "0,70", "50", ""],
["", "riba-ton", "Риба тон", "0,70", "50", ""],
["", "parmezan", "Пармезан", "1,40", "20", ""],
["", "sladko-ot-borovinki", "Сладко от боровинки", "0,00", "50", ""],
["", "sladko-ot-yagodi", "Сладко от ягоди", "0,00", "50", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""],
["", "sirene-chedr", "Сирене чедър", "1,40", "50", ""],
["", "lukanka", "Луканка", "0,70", "50", ""],
["", "zele", "Зеле", "0,00", "100", ""],
["", "vareni-kartofi", "Варени картофи", "0,00", "50", ""],
["", "tikvichka", "Тиквичка", "0,00", "50", ""],
["", "cherven-luk", "Червен лук", "0,00", "50", ""],
["", "presen-luk", "Пресен лук", "0,00", "50", ""],
["", "brokoli", "Броколи", "0,00", "50", ""],
["", "krastavicza", "Краставица", "0,00", "50", ""],
["", "domati", "Домати", "0,00", "50", ""],
["", "luk", "Лук", "0,00", "50", ""],
["", "morkovi", "Моркови", "0,00", "50", ""],
["", "grakh", "Грах", "0,00", "50", ""],
["", "maslini", "Маслини", "0,00", "50", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "vareno-yajcze", "Варено яйце", "0,00", "", ""],
["", "nadenicza", "Наденица", "0,70", "50", ""],
["", "smetana", "Сметана", "0,00", "50", ""],
["", "topeno-sirene", "Топено сирене", "0,70", "50", ""],
["", "sirene-dunaviya", "Сирене Дунавия", "1,40", "100", ""],
["", "sirene-moczarela", "Сирене моцарела", "0,70", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "sudzhuk", "Суджук", "2,10", "50", ""],
["", "shpekov-salam", "Шпеков салам", "0,70", "50", ""],
["", "pastrma", "Пастърма", "2,80", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""]

            ],

            "sauces": [
                ["", "domaten-sos", "Доматен сос", "0,00", "60", ""],
["", "majonezen-sos", "Майонезен сос", "0,00", "60", ""],
["", "ketchup", "Кетчуп", "0,00", "60", ""],
["", "sos-barbekyu", "Сос барбекю", "0,70", "50", ""],
["", "majoneza", "Майонеза", "0,00", "60", ""],
["", "gorchicza", "Горчица", "0,00", "60", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "50", ""],
["", "sladko-lyutiv-sos", "Сладко лютив сос", "0,00", "50", ""],
["", "soev-sos", "Соев сос", "0,70", "50", ""],
["", "sos-pesto-dzhenoveze", "Сос песто дженовезе", "0,70", "50", ""],
["", "gben-sos", "Гъбен сос", "1,40", "100", ""],
["", "sos-vinegret", "Сос винегрет", "0,70", "60", ""],
["", "chili-sos", "Чили сос", "0,00", "60", ""],
["", "sos-1000-ostrova", "Сос 1000 острова", "0,00", "50", ""],
["", "pikanten-sos", "Пикантен сос", "0,00", "60", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "60", ""],
["", "zekhtin", "Зехтин", "0,00", "60", ""]

            ],

            "Палачинки": [
                ["", "palachinka-s-med", "Палачинка с мед", "1,40", "", ""],
["", "palachinka-s-med-i-orekhi", "Палачинка с мед и орехи", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sladko-i-yagodi", "Палачинка със сладко и ягоди", "1,40", "", ""],
["", "palachinka-ss-sirene-i-med", "Палачинка със сирене и мед", "1,40", "", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "1,40", "", ""],
["", "palachinka-ss-sirene-i-shunka", "Палачинка със сирене и шунка", "1,40", "", ""],
["", "palachinka-s-kashkaval-i-sirene", "Палачинка с кашкавал и сирене", "1,40", "", ""],
["", "palachinka-s-kashkaval-i-shunka", "Палачинка с кашкавал и шунка", "1,40", "", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "1,40", "", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "", ""]

            ],

            "desserts": [
                ["", "krem-pita-mayami", "Крем пита Маями", "2,80", "200", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,10", "250", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "1,40", "250", ""],
["", "czedeno-kiselo-mlyako-ss-sladko-ot-borovinki", "Цедено кисело мляко със сладко от боровинки", "2,10", "250", ""],
["", "krem-bolyarki", "Крем Болярки", "1,40", "200", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""]

            ]
        }', 
        'slug' => 'pica-salon-bolyarki',
        'business_name' => 'Пица Салон Болярки',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Razgrad',
        'region' => 'Razgrad',
        'postal_code' => '7002',
        'address' => 'ул. Марица 15',
        'address_additional' => '',
        'coords_x' => '43.52696256',
        'coords_y' => '26.51876888',
        'phone' => '+35984621106',
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
                ["", "salata-czezar", "Салата Цезар", "2,80", "300", ""],
["", "atum-miks", "Атум микс", "2,80", "200", ""],
["", "frango-miks", "FranGo Микс", "2,80", "300", ""],
["", "shorizo-miks", "Шоризо микс", "2,80", "", ""],
["", "porko-miks", "Порко микс", "2,80", "", ""],
["", "miks-do-mar", "Микс до мар", "3,50", "", ""],
["", "svezh-miks---vegan", "Свеж микс - веган", "2,10", "", ""]

            ],

            "soups": [
                ["", "pileshka-krem-supa-kaldo-verde", "Пилешка крем супа Калдо-Верде", "1,40", "", ""],
["", "shorizo-krem-supa-kaldo-verde", "Шоризо крем супа Калдо-Верде", "1,40", "", ""],
["", "skaridi-krem-supa-kaldo-verde", "Скариди крем супа Калдо-Верде", "2,10", "", ""],
["", "porko-krem-supa-kaldo-verde", "Порко крем супа Калдо-Верде", "1,40", "", ""],
["", "krem-supa-kaldo-verde---vegan", "Крем супа Калдо-Верде - веган", "1,40", "", ""]

            ],

            "Бургери и сандвичи": [
                ["", "sb-pile", "Съб пиле", "2,80", "350", ""],
["", "sb-shorizo", "Съб шоризо", "2,80", "350", ""],
["", "sb-frango", "Съб Франго", "2,80", "380", ""],
["", "sb-bifana", "Съб Бифана", "3,50", "400", ""],
["", "sb-porko", "Съб Порко", "3,50", "400", ""],
["", "troen-chijz-burger-almondegash", "Троен чийз бургер Алмондегаш", "3,50", "420", ""],
["", "vegan-burger", "Веган бургер", "3,50", "400", ""],
["", "sb-sandvich-3-v-1", "Съб сандвич 3 в 1", "2,10", "1", ""],
["", "sb-sandvich-2-v-1", "Съб сандвич 2 в 1", "0,70", "1", ""],
["", "sb-do-mar", "Съб до мар", "4,20", "", ""],
["", "burger-2-v-1", "Бургер 2 в 1", "0,70", "1", ""],
["", "burger-3-v-1", "Бургер 3 в 1", "2,10", "1", ""],
["", "troen-burger-almondegash", "Троен бургер Алмондегаш", "3,50", "", ""],
["", "vegetarianski-chijzburger", "Вегетариански чийзбургер", "3,50", "", ""]

            ],

            "Дюнер на жар": [
                ["", "pileshki-dyuner", "Пилешки дюнер", "2,10", "", ""],
["", "svinski-dyuner", "Свински дюнер", "2,10", "", ""],
["", "vegan-dyuner", "Веган дюнер", "2,10", "", ""],
["", "wrap-kebab-3-v-1", "Wrap kebab 3 в 1", "2,10", "1", ""],
["", "wrap-kebab-2-v-1", "Wrap kebab 2 в 1", "0,70", "1", ""],
["", "vegetarianski-dyuner-s-chedr", "Вегетариански дюнер с чедър", "2,10", "", ""]

            ],

            "На жар": [
                ["", "czyalo-pile", "Цяло пиле", "6,30", "", ""],
["", "polovin-pile", "Половин пиле", "4,20", "", ""],
["", "chetvrt-pile", "Четвърт пиле", "2,10", "", ""],
["", "kyufte-almondega", "Кюфте Алмондега", "2,10", "", ""],
["", "kontra-file-bifana", "Контра филе Бифана", "2,80", "150", ""],
["", "vratna-przhola-porko", "Вратна пържола Порко", "2,80", "200", ""],
["", "przhola-ot-but", "Пържола от бут", "2,80", "200", ""],
["", "przhola-ot-grdi", "Пържола от гърди", "2,80", "200", ""]

            ],

            "Ориз, картофки и хляб": [
                ["", "chist-oriz", "Чист ориз", "2,10", "350", ""],
["", "oriz-s-shorizo", "Ориз с шоризо", "2,10", "400", ""],
["", "oriz-ss-svinski-kscheta", "Ориз със свински късчета", "2,80", "400", ""],
["", "przheni-kartofki", "Пържени картофки", "1,40", "200", ""],
["", "portugalska-khlebche-papo-seko", "Португалска хлебче Папо секо", "0,00", "100", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,10", "400", ""],
["", "oriz-s-pileshki-kscheta-i-zelenchuczi", "Ориз с пилешки късчета и зеленчуци", "2,80", "450", ""],
["", "oriz-s-pileshki-kscheta", "Ориз с пилешки късчета", "2,10", "400", ""],
["", "oriz-s-shorizo-i-zelenchuczi", "Ориз с шоризо и зеленчуци", "2,80", "450", ""],
["", "oriz-ss-svinski-kscheta-i-zelenchuczi", "Ориз със свински късчета и зеленчуци", "2,80", "450", ""],
["", "oriz-ss-skaridi", "Ориз със скариди", "2,80", "400", ""],
["", "oriz-ss-skaridi-i-zelenchuczi", "Ориз със скариди и зеленчуци", "3,50", "450", ""]

            ],

            "sauces": [
                ["", "med-i-gorchicza", "Мед и горчица", "0,70", "60", ""],
["", "czezar-sos", "Цезар сос", "0,70", "60", ""],
["", "mango-s-limon", "Манго с лимон", "0,70", "60", ""],
["", "soev-sos", "Соев сос", "0,70", "60", ""],
["", "pikantno-piri-piri", "Пикантно Пири Пири", "0,70", "60", ""],
["", "limon-i-bilki", "Лимон и билки", "0,70", "60", ""],
["", "chesnova-pasta", "Чеснова паста", "0,70", "60", ""],
["", "salcza", "Салца", "0,70", "60", ""]

            ]
        }', 
        'slug' => 'frango-original-portuguese-grill',
        'business_name' => 'FranGo Original Portuguese grill',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Samokov',
        'region' => 'Samokov',
        'postal_code' => '2000',
        'address' => 'ул. Абаджийска 1К',
        'address_additional' => '',
        'coords_x' => '42.3380924',
        'coords_y' => '23.55672635',
        'phone' => '+359886409784',
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
            
            "Промоция": [
                ["", "kombo-menyu-1", "Комбо меню 1", "14,00", "1", ""],
["", "kombo-menyu-2", "Комбо меню 2", "14,00", "2", ""]

            ],

            "Пица направи си сам": [
                ["", "tatko-picza-s-italiansko-testo", "Татко пица с италианско тесто", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/995080.jpg?width=302"],
["", "tatko-tortila", "Татко тортила", "2,10", "", ""]

            ],

            "pizza": [
                ["", "picza-italiya", "Пица Италия", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/999961.jpg?width=302"],
["", "picza-blgariya", "Пица България", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/999962.jpg?width=302"],
["", "picza-latino", "Пица Latino", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/999963.jpg?width=302"],
["", "picza-francziya", "Пица Франция", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/999964.jpg?width=302"],
["", "picza-ispaniya", "Пица Испания", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/999965.jpg?width=302"],
["", "picza-amerika", "Пица Америка", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/999966.jpg?width=302"],
["", "picza-greek", "Пица Greek", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/999967.jpg?width=302"],
["", "picza-meksiko", "Пица Мексико", "2,10", "", ""]

            ],

            "Наш’та скара": [
                ["", "rebra", "Ребра", "4,20", "250", ""],
["", "adana", "Адана", "2,10", "80", ""],
["", "kraski-kotlet", "Краски котлет", "4,90", "350", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "domashna-nadenicza", "Домашна наденица", "2,80", "280", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "2,80", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "2,80", "250", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "2,80", "250", ""],
["", "pileshki-shish", "Пилешки шиш", "2,80", "280", ""],
["", "svinski-shish", "Свински шиш", "2,80", "280", ""],
["", "domashni-przheni-kartofi-v-meden-kazan-ss-sirene", "Домашни пържени картофи в меден казан със сирене", "2,10", "350", ""],
["", "domashna-lyutenicza-v-meden-kazan", "Домашна лютеница в меден казан", "0,70", "50", ""],
["", "zele-s-chetiri-vida-meso-v-meden-kazan", "Зеле с четири вида месо в меден казан", "2,80", "400", ""],
["", "pechen-piper", "Печен пипер", "0,70", "", ""],
["", "shopska", "Шопска", "2,80", "300", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "pecheni-zelenchuczi", "Печени зеленчуци", "2,80", "200", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "100", ""],
["", "plato-mesa", "Плато меса", "21,00", "", ""],
["", "plato-salati", "Плато салати", "8,40", "", ""]

            ],

            "Картофи": [
                ["", "pechen-kartof-s-4-dobavki", "Печен картоф с 4 добавки", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/995083.jpg?width=302"],
["", "pechen-kartof-s-6-dobavki", "Печен картоф с 6 добавки", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/995084.jpg?width=302"],
["", "istanbul", "Истанбул", "2,10", "", ""]

            ],

            "salads": [
                ["", "svezha-salata-s-4-dobavki", "Свежа салата с 4 добавки", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/995076.jpg?width=302"],
["", "svezha-salata-s-6-dobavki", "Свежа салата с 6 добавки", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/995077.jpg?width=302"],
["", "italianska", "Италианска", "2,80", "", ""],
["", "svezha", "Свежа", "2,10", "", ""],
["", "riba-ton", "Риба тон", "2,80", "", ""],
["", "czezar", "Цезар", "2,10", "", ""],
["", "toskana", "Тоскана", "2,10", "", ""],
["", "solun", "Солун", "2,10", "", ""]

            ],

            "sandwiches": [
                ["", "sofiya", "София", "2,10", "", ""],
["", "parizh", "Париж", "2,10", "", ""],
["", "meksiko", "Мексико", "2,10", "", ""],
["", "berlin", "Берлин", "2,10", "", ""],
["", "braziliya", "Бразилия", "2,10", "", ""],
["", "barselona", "Барселона", "2,10", "", ""],
["", "belgrad", "Белград", "2,10", "", ""],
["", "chikago", "Чикаго", "2,10", "", ""],
["", "akapulko", "Акапулко", "2,10", "", ""],
["", "brajtn", "Брайтън", "2,10", "", ""],
["", "myunkhen", "Мюнхен", "2,10", "", ""]

            ],

            "Сандвич - Багета": [
                ["", "zapechen-sandvich-bageta", "Запечен сандвич багета", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/995078.jpg?width=302"],
["", "zapechena-tortila", "Запечена тортила", "1,40", "", ""]

            ],

            "Начос": [
                ["", "nachos", "Начос", "1,40", "200", ""]

            ],

            "Гофрета": [
                ["", "babl-gofreta-s-4-dobavki", "Бабъл гофрета с 4 добавки", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/995085.jpg?width=302"],
["", "babl-gofreta-s-6-dobavki", "Бабъл гофрета с 6 добавки", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/995086.jpg?width=302"]

            ],

            "sauces": [
                ["", "chesnov", "Чеснов", "0,00", "", ""],
["", "med-majoneza-i-gorchicza", "Мед, майонеза и горчица", "0,00", "", ""],
["", "barbekyu", "Барбекю", "0,00", "", ""],
["", "ketchup", "Kетчуп", "0,00", "", ""],
["", "majoneza", "Mайонеза", "0,00", "", ""],
["", "sladko-kisel", "Сладко-кисел", "0,00", "", ""]

            ],

            "Гофрети": [
                ["", "tropik", "Тропик", "2,10", "250", ""],
["", "biskit", "Бискит", "2,10", "250", ""],
["", "oreo", "Орео", "2,10", "250", ""],
["", "mango", "Манго", "2,10", "250", ""],
["", "kometa", "Комета", "2,10", "250", ""],
["", "mlechen-pt", "Млечен път", "2,10", "250", ""]

            ]
        }', 
        'slug' => 'tatko-pizza',
        'business_name' => 'TATKO PIZZA',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Razgrad',
        'region' => 'Razgrad',
        'postal_code' => '7200',
        'address' => 'бул. Васил Левски 6',
        'address_additional' => '',
        'coords_x' => '43.5292326',
        'coords_y' => '26.52451467',
        'phone' => '+359879233000',
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
            
            "soups": [
                ["", "tarator", "Таратор", "2,10", "300", ""],
["", "pileshka-supa", "Пилешка супа", "2,10", "300", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "300", ""]

            ],

            "Веган меню": [
                ["", "zapechen-karfiol-s-vegan-parmezan", "Запечен карфиол с веган пармезан", "3,50", "200", ""],
["", "kyuftencza-ot-nakhut-ss-zeleni-salati-i-czitrusov-dresing-s-kashu", "Кюфтенца от нахут със зелени салати и цитрусов дресинг с кашу", "4,20", "300", ""],
["", "kinoa-s-divi-gbi-i-zelenchuczi", "Киноа с диви гъби и зеленчуци", "4,90", "250", ""],
["", "sirene-ot-kashu-s-bilkovi-khlebcheta", "Сирене от кашу с билкови хлебчета", "4,90", "50", ""]

            ],

            "salads": [
                ["", "kapreze", "Капрезе", "4,20", "300", ""],
["", "selska-salata", "Селска салата", "4,20", "350", ""],
["", "shopska-salata", "Шопска салата", "4,20", "300", ""],
["", "czvetna-salata", "Цветна салата", "3,50", "300", ""],
["", "krastaviczi-s-orekh", "Краставици с орех", "3,50", "300", ""],
["", "czezar", "Цезар", "4,90", "300", ""],
["", "miks-svezhi-salati-ss-spanak", "Микс свежи салати със спанак", "4,20", "300", ""],
["", "zelena-salata-s-proshuto-i-ppesh", "Зелена салата с прошуто и пъпеш", "4,90", "300", ""],
["", "zelena-salata-s-ananas-koze-sirene-i-meden-dresing", "Зелена салата с ананас, козе сирене и меден дресинг", "4,90", "300", ""],
["", "salata-midi-s-cherven-luk-i-limonov-dresing", "Салата миди с червен лук и лимонов дресинг", "4,90", "200", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "300", ""],
["", "salata-tabule", "Салата Табуле", "4,90", "250", ""]

            ],

            "starters": [
                ["", "pikantni-kalmari", "Пикантни калмари", "6,30", "180", ""],
["", "manatarki-s-maslo", "Манатарки с масло", "6,30", "180", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "7,00", "200", ""],
["", "panirani-topeni-sirencza-s-borovinki", "Панирани топени сиренца с боровинки", "4,90", "200", ""],
["", "selekcziya-sirena", "Селекция сирена", "17,50", "300", ""],
["", "mish-mash", "Миш-маш", "3,50", "250", ""],
["", "przheni-chushki-s-domaten-sos", "Пържени чушки с доматен сос", "4,20", "300", ""],
["", "kartofeni-kroketi-ss-zele-morkovi-i-sumak", "Картофени крокети със зеле, моркови и сумак", "3,50", "250", ""],
["", "kyuftencza-ot-tikvichki-s-chesnov-sos", "Кюфтенца от тиквички с чеснов сос", "3,50", "200", ""],
["", "kyuftencza-ot-brokoli-chedr-i-domateno-pesto-s-bademi", "Кюфтенца от броколи, чедър и доматено песто с бадеми", "4,90", "250", ""],
["", "zapechen-karfiol-s-parmezan", "Запечен карфиол с пармезан", "3,50", "220", ""],
["", "plnen-patladzhan-s-gbi-i-zelenchuczi", "Пълнен патладжан с гъби и зеленчуци", "4,90", "250", ""],
["", "pileshki-khapki-s-kornflejks-i-mlechen-sos", "Пилешки хапки с корнфлейкс и млечен сос", "4,90", "200", ""],
["", "pushena-somga-s-krema-sirene", "Пушена сьомга с крема сирене", "4,90", "100", ""],
["", "khrupkavi-kalmari-s-chesnov-sos", "Хрупкави калмари с чеснов сос", "7,00", "250", ""],
["", "bejbi-oktopodi-s-cheri-domati-i-maslini", "Бейби октоподи с чери домати и маслини", "9,10", "180", ""],
["", "midi-ss-smetana-parmezan-i-devesil", "Миди със сметана, пармезан и девесил", "5,60", "250", ""],
["", "midi-s-karamel-yablka-i-lyut-piper", "Миди с карамел, ябълка и лют пипер", "5,60", "250", ""]

            ],

            "maindishes": [
                ["", "rizoto-s-gbi-i-zelenchuczi", "Ризото с гъби и зеленчуци", "4,20", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "300", ""],
["", "cheren-oriz-ss-skaridi", "Черен ориз със скариди", "7,00", "300", ""],
["", "pasta-karbonara", "Паста Карбонара", "4,90", "300", ""],
["", "pecheni-pileshki-krilcza", "Печени пилешки крилца", "3,50", "200", ""],
["", "pileshko-file-ss-sos-chetiri-sirena", "Пилешко филе със сос четири сирена", "6,30", "250", ""],
["", "pileshko-file-ss-sos-kri-i-oriz", "Пилешко филе със сос Къри и ориз", "6,30", "250", ""],
["", "svinsko-bon-file-ss-sladko-kisel-sos", "Свинско бон филе със сладко кисел сос", "6,30", "250", ""],
["", "przhki-s-luk", "Пръжки с лук", "5,60", "250", ""],
["", "teleshki-kscheta-s-cherven-luk-i-rozmarin", "Телешки късчета с червен лук и розмарин", "6,30", "250", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "8,40", "400", ""],
["", "teleshki-dzholan-na-shajbi-ss-sini-slivi-i-dyuli", "Телешки джолан на шайби със сини сливи и дюли", "10,50", "300", ""],
["", "mlechno-teleshko-bon-file-s-glazirani-asperzhi-i-grilovana-czarevicza", "Млечно телешко бон филе с глазирани аспержи и грилована царевица", "19,60", "350", ""]

            ],

            "fish": [
                ["", "pstrva", "Пъстърва", "7,70", "250", ""],
["", "lavrak", "Лаврак", "9,80", "250", ""],
["", "nilski-kostur", "Нилски костур", "9,10", "200", ""],
["", "file-ot-somga", "Филе от сьомга", "11,90", "200", ""]

            ],

            "barbecue": [
                ["", "pileshko-file", "Пилешко филе", "4,20", "220", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "4,20", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "220", ""],
["", "svinsko-bon-file", "Свинско бон филе", "6,30", "200", ""],
["", "svinski-kralski-kotlet", "Свински кралски котлет", "10,50", "500", ""],
["", "domashen-sudzhuk", "Домашен суджук", "5,60", "250", ""],
["", "kyufte-niko", "Кюфте Нико", "3,50", "160", ""],
["", "kebapche", "Кебапче", "1,40", "", ""],
["", "kyufte", "Кюфте", "1,40", "", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "lionski-kartofi", "Лионски картофи", "2,80", "250", ""],
["", "oriz", "Ориз", "2,10", "150", ""],
["", "grilovana-czarevicza-s-maslo-i-pushen-cherven-piper", "Грилована царевица с масло и пушен червен пипер", "2,80", "150", ""],
["", "glazirani-asperzhi", "Глазирани аспержи", "4,20", "150", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "1,40", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "200", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "2,80", "200", ""],
["", "domashna-lyutenicza", "Домашна лютеница", "1,40", "150", ""],
["", "marinovani-lyuti-chushki", "Мариновани люти чушки", "1,40", "150", ""],
["", "domashen-teleshki-pastet", "Домашен телешки пастет", "2,10", "100", ""],
["", "domashen-konski-pastet", "Домашен конски пастет", "2,10", "100", ""],
["", "guakamole", "Гуакамоле", "2,10", "150", ""],
["", "maslinova-pasta", "Маслинова паста", "2,10", "150", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,70", "", ""],
["", "lyut-sos", "Лют сос", "0,70", "", ""],
["", "grejvi-sos", "Грейви сос", "0,70", "", ""],
["", "gben-sos", "Гъбен сос", "0,70", "", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "", ""],
["", "sos-chetiri-sirena", "Сос Четири Сирена", "0,70", "", ""],
["", "khni-gorchicza", "Хъни Горчица", "0,70", "", ""]

            ],

            "bread": [
                ["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,80", "", ""],
["", "prlenka-s-kopr-maslo-i-chesn", "Пърленка с копър, масло и чесън", "1,40", "", ""]

            ],

            "desserts": [
                ["", "chijzkejk-s-maskarpone-yagodi-i-malini", "Чийзкейк с маскарпоне, ягоди и малини", "2,80", "", ""],
["", "rikota-chijzkejk-s-shokolad-nutela", "Рикота чийзкейк с шоколад Нутела", "2,80", "", ""],
["", "sezonen-paj-niko", "Сезонен пай Нико", "2,80", "", ""]

            ]
        }', 
        'slug' => 'restorant-niko',
        'business_name' => 'Ресторант Нико',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Samokov',
        'region' => 'Samokov',
        'postal_code' => '2000',
        'address' => 'ул. Македония 30',
        'address_additional' => '',
        'coords_x' => '42.3375079',
        'coords_y' => '23.561622',
        'phone' => '+359877620006',
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
                ["", "zelena-s-riba-ton", "Зелена с риба тон", "4,90", "350", ""],
["", "grczka", "Гръцка", "3,50", "350", ""],
["", "shopska", "Шопска", "3,50", "350", ""],
["", "tabule", "Табуле", "3,50", "290", ""],
["", "ovcharska", "Овчарска", "4,20", "450", ""],
["", "kapreze", "Капрезе", "4,90", "300", ""],
["", "selska", "Селска", "3,50", "350", ""],
["", "frenska", "Френска", "4,90", "350", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "250", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,80", "300", ""],
["", "morkovi", "Моркови", "2,80", "300", ""],
["", "zdravecz", "Здравец", "3,50", "250", ""],
["", "czezar", "Цезар", "3,50", "", ""]

            ],

            "starters": [
                ["", "presni-kalmari-s-limonov-sos", "Пресни калмари с лимонов сос", "7,00", "200", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "180", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "5,60", "200", ""],
["", "drobcheta-miks", "Дробчета микс", "4,90", "350", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "kartofi-pikant", "Картофи пикант", "2,80", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "200", ""],
["", "palachinka-ss-sirene-i-kashkaval", "Палачинка със сирене и кашкавал", "1,40", "150", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-brokoli", "Запеканка с броколи", "4,20", "300", ""],
["", "zapekanka-ss-spanak", "Запеканка със спанак", "4,20", "250", ""],
["", "zapekanka-ss-svinsko", "Запеканка със свинско", "5,60", "300", ""],
["", "zapekanka-s-pileshko", "Запеканка с пилешко", "4,90", "300", ""],
["", "zelenchukova-zapekanka", "Зеленчукова запеканка", "3,50", "250", ""],
["", "zelenchukova-zapekanka-s-kashkaval", "Зеленчукова запеканка с кашкавал", "4,20", "300", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "5,60", "", ""],
["", "proshuto", "Прошуто", "5,60", "", ""],
["", "neapolitana", "Неаполитана", "6,30", "", ""],
["", "bekon", "Бекон", "6,30", "", ""],
["", "rustika", "Рустика", "6,30", "", ""],
["", "italiya", "Италия", "7,00", "", ""],
["", "chetiri-sezona", "Четири сезона", "6,30", "", ""],
["", "misisipi", "Мисисипи", "7,00", "", ""],
["", "kalczone---zatvorena", "Калцоне - затворена", "6,30", "", ""],
["", "chetiri-sirena", "Четири сирена", "7,00", "", ""],
["", "montelo", "Монтело", "6,30", "", ""],
["", "ekstravaganza", "Екстраваганза", "6,30", "", ""],
["", "polo", "Поло", "6,30", "", ""],
["", "amatrichana", "Аматричана", "7,00", "", ""],
["", "khavaj", "Хавай", "6,30", "", ""],
["", "vegetariana", "Вегетариана", "6,30", "", ""],
["", "belisima", "Белисима", "6,30", "", ""],
["", "real-mexican", "Real Mexican", "5,60", "", ""],
["", "chikago", "Чикаго", "6,30", "", ""],
["", "tonichi", "Тоничи", "6,30", "", ""],
["", "florentina", "Флорентина", "6,30", "", ""],
["", "venecziya", "Венеция", "6,30", "", ""],
["", "sisi", "Сиси", "7,00", "", ""]

            ],

            "Ястия от пиле": [
                ["", "pile-kri", "Пиле къри", "5,60", "350", ""],
["", "pile-filadelfiya", "Пиле Филаделфия", "5,60", "300", ""],
["", "pile-s-limonov-sos", "Пиле с лимонов сос", "5,60", "350", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "4,20", "160", ""],
["", "pileshka-przhola-ot-butche-na-tigan-s-gben-sos", "Пилешка пържола от бутче на тиган с гъбен сос", "4,90", "250", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "4,20", "160", ""],
["", "pileshko-meshano-mezencze", "Пилешко мешано мезенце", "9,10", "600", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""]

            ],

            "Ястия от свинско": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "200", ""],
["", "svinska-vratna-przhola-na-tigan-s-gben-sos", "Свинска вратна пържола на тиган с гъбен сос", "6,30", "250", ""],
["", "svinski-presen-bekon-na-skara", "Свински пресен бекон на скара", "6,30", "300", ""],
["", "svinski-rebrcza-na-skara", "Свински ребърца на скара", "6,30", "350", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "domashni-kyuftencza", "Домашни кюфтенца", "3,50", "400", ""],
["", "meshano-mezencze", "Мешано мезенце", "10,50", "550", ""],
["", "svinski-skalopini", "Свински скалопини", "7,00", "300", ""]

            ],

            "pasta": [
                ["", "spageti-karbonara", "Спагети карбонара", "4,20", "350", ""],
["", "pene-pasta---5-sirena", "Пене паста - 5 сирена", "4,90", "400", ""],
["", "tortolini", "Тортолини", "4,90", "300", ""],
["", "pene-fiesta", "Пене Фиеста", "4,20", "300", ""],
["", "fusili", "Фусили", "4,90", "300", ""],
["", "taliateli-ss-skaridi", "Талиатели със скариди", "4,90", "300", ""],
["", "taliateli-ss-somga", "Талиатели със сьомга", "4,90", "300", ""]

            ],

            "Гурме сандвичи": [
                ["", "klub-sandvich-s-przheni-kartofi", "Клуб сандвич с пържени картофи", "4,20", "200", ""],
["", "meksikanska-kesadiya-s-przheni-kartofi", "Мексиканска кесадия с пържени картофи", "4,90", "250", ""],
["", "amerikanski-burger", "Американски бургер", "6,30", "400", ""],
["", "rap-wrap-sandvich-s-pikantni-kartofi", "Рап (wrap) сандвич с пикантни картофи", "4,90", "300", ""]

            ],

            "Рибен специалитет": [
                ["", "file-ot-somga", "Филе от сьомга", "10,50", "300", ""],
["", "pstrva", "Пъстърва", "6,30", "300", ""]

            ],

            "Пърленки": [
                ["", "prlenka-s-maslo", "Пърленка с масло", "0,70", "200", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "18,90", "250", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "250", ""],
["", "prlenka-kombinirana", "Пърленка комбинирана", "2,10", "270", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "0,70", "200", ""],
["", "prlenka-foldet", "Пърленка Foldet", "2,80", "250", ""]

            ],

            "garnish": [
                ["", "topla-garnitura", "Топла гарнитура", "0,70", "", ""],
["", "studena-garnitura", "Студена гарнитура", "0,70", "", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "150", ""]

            ],

            "sauces": [
                ["", "chesnov", "Чеснов", "0,00", "50", ""],
["", "chili", "Чили", "0,00", "50", ""],
["", "sladko-lyutiv", "Сладко-лютив", "0,70", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""]

            ],

            "Домашно приготвени десерти": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,80", "250", ""],
["", "sladoledena-torta", "Сладоледена торта", "2,80", "150", ""],
["", "chijzkejk", "Чийзкейк", "3,50", "150", ""],
["", "krem-karamel", "Крем карамел", "1,40", "150", ""],
["", "sladoled", "Сладолед", "0,00", "", ""],
["", "tropikana", "Тропикана", "3,50", "250", ""],
["", "palachinka", "Палачинка", "1,40", "150", ""]

            ]
        }', 
        'slug' => 'picariya-iskra',
        'business_name' => 'Пицария Искра',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kazanlak',
        'region' => 'Kazanlak',
        'postal_code' => '6100',
        'address' => 'ул. Искра 18',
        'address_additional' => '',
        'coords_x' => '42.620682',
        'coords_y' => '25.393347',
        'phone' => '+35943159901',
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
                ["", "shopska-salata", "Шопска салата", "3,50", "450", ""],
["", "rozovi-domati-s-domashno-sirene", "Розови домати с домашно сирене", "5,60", "400", ""],
["", "grczka", "Гръцка", "3,50", "400", ""],
["", "selska", "Селска", "3,50", "450", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "550", ""],
["", "salata-na-shefa", "Салата на шефа", "4,20", "450", ""],
["", "kapreze", "Капрезе", "4,20", "400", ""],
["", "salata-olimpiecz", "Салата Олимпиец", "4,20", "450", ""],
["", "velikdenska-salata", "Великденска салата", "3,50", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "450", ""],
["", "czezar", "Цезар", "4,90", "450", ""],
["", "ajsberg-s-riba-ton", "Айсберг с риба тон", "4,90", "400", ""],
["", "snezhanka", "Снежанка", "3,50", "300", ""],
["", "katk", "Катък", "3,50", "350", ""],
["", "pechen-piper-ss-sirene-i-chesn", "Печен пипер със сирене и чесън", "4,90", "350", ""],
["", "zele-i-morkovi-s-magdanoz", "Зеле и моркови с магданоз", "2,10", "350", ""]

            ],

            "Топли предястия": [
                ["", "panirani-sirencza", "Панирани сиренца", "3,50", "250", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "3,50", "300", ""],
["", "sirene-na-plocha-s-med-i-orekhi", "Сирене на плоча с мед и орехи", "3,50", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,90", "350", ""],
["", "panirani-topeni-sirencza-ss-sladko-ot-borovinki", "Панирани топени сиренца със сладко от боровинки", "4,90", "250", ""],
["", "gbi-v-maslo-i-kopr", "Гъби в масло и копър", "4,20", "350", ""],
["", "zelenchuczi-na-barbekyu", "Зеленчуци на барбекю", "4,90", "200", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "200", ""],
["", "ezik-pane", "Език пане", "4,90", "250", ""],
["", "ezik-s-gbi-i-kashkaval", "Език с гъби и кашкавал", "4,90", "300", ""],
["", "pateshki-srcza", "Патешки сърца", "4,90", "200", ""],
["", "mozk-pane", "Мозък пане", "4,20", "200", ""],
["", "pileshki-miks", "Пилешки микс", "5,60", "350", ""],
["", "vodenichki-s-luk", "Воденички с лук", "4,20", "300", ""],
["", "pileshki-krila-s-med-i-soev-sos", "Пилешки крила с мед и соев сос", "4,90", "300", ""],
["", "pileshki-zhulieni-s-kornflejks", "Пилешки жулиени с корнфлейкс", "4,90", "300", ""],
["", "panirani-pileshki-khapki", "Панирани пилешки хапки", "4,90", "300", ""],
["", "svinski-grdi-s-med-i-soev-sos", "Свински гърди с мед и соев сос", "4,90", "300", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "300", ""],
["", "sochni-vratni-przholi-na-tigan", "Сочни вратни пържоли на тиган", "5,60", "300", ""],
["", "midi-cherupka", "Миди черупка", "6,30", "300", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "3,50", "250", ""],
["", "kralski-skaridi", "Кралски скариди", "9,80", "200", ""],
["", "kalmari", "Калмари", "6,30", "200", ""]

            ],

            "Картофеню меню": [
                ["", "kartofi-syurpriz", "Картофи Сюрприз", "4,90", "400", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,80", "300", ""],
["", "babini-kartofi", "Бабини картофи", "2,80", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "250", ""],
["", "kartofi-olimpiecz", "Картофи Олимпиец", "2,80", "250", ""]

            ],

            "Сръбски и български меса на барбекю": [
                ["", "pushena-veshalicza-ot-svinski-vrat", "Пушена вешалица от свински врат", "6,30", "250", ""],
["", "svinsko-shishche-ss-zelenchuczi", "Свинско шишче със зеленчуци", "2,10", "150", ""],
["", "svinski-kareta", "Свински карета", "5,60", "300", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "250", ""],
["", "pusheni-svinski-rebra", "Пушени свински ребра", "7,00", "350", ""],
["", "svinski-grdi", "Свински гърди", "4,90", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "250", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "250", ""],
["", "pileshko-shishche-ss-zelenchuczi", "Пилешко шишче със зеленчуци", "2,10", "150", ""],
["", "svinski-rebra", "Свински ребра", "7,00", "350", ""],
["", "ushi-na-barbekyu", "Уши на барбекю", "4,20", "300", ""],
["", "svinski-shashlk-ss-zelenchuczi-i-kartofi", "Свински шашлък със зеленчуци и картофи", "11,90", "", ""],
["", "pileshki-shashlk-ss-zelenchuczi-i-kartofi", "Пилешки шашлък със зеленчуци и картофи", "11,90", "", ""],
["", "srbska-meshana-skara", "Сръбска мешана скара", "16,10", "", ""],
["", "gurmansko-plato", "Гурманско плато", "29,40", "", ""],
["", "bireno-plato", "Бирено плато", "12,60", "", ""],
["", "blgarska-meshana-skara", "Българска мешана скара", "11,90", "", ""]

            ],

            "Мляно месо на барбекю": [
                ["", "bolyarsko-kyufte", "Болярско кюфте", "4,90", "300", ""],
["", "ushhipczi", "Ущипци", "4,90", "", ""],
["", "pleskavicza-s-magdanoz-i-luk", "Плескавица с магданоз и лук", "4,90", "280", ""],
["", "michita", "Мичита", "0,70", "", ""],
["", "srbski-teleshki-kebapcheta", "Сръбски телешки кебапчета", "4,90", "", ""],
["", "adana-kebap", "Адана кебап", "4,90", "300", ""],
["", "agneshki-kyuftencza-s-velikdenska-salata", "Агнешки кюфтенца с Великденска салата", "5,60", "", ""],
["", "svinsko-kyufte", "Свинско кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "5,60", "350", ""]

            ],

            "Основни ястия": [
                ["", "svinsko-meze-olimpiecz", "Свинско мезе Олимпиец", "6,30", "450", ""],
["", "chesnovo-pile", "Чесново пиле", "6,30", "500", ""],
["", "pileshko-meze-olimpiecz", "Пилешко мезе Олимпиец", "6,30", "450", ""],
["", "svinski-kareta-s-bekon", "Свински карета с бекон", "6,30", "400", ""],
["", "pileshki-langeti", "Пилешки лангети", "6,30", "400", ""],
["", "pileshki-sach", "Пилешки сач", "10,50", "800", ""],
["", "kombiniran-sach", "Комбиниран сач", "10,50", "800", ""],
["", "svinski-sach", "Свински сач", "10,50", "800", ""]

            ],

            "fish": [
                ["", "oblecz", "Облец", "4,20", "300", ""],
["", "chiroz-skumriya", "Чироз Скумрия", "6,30", "500", ""],
["", "byala-riba", "Бяла риба", "7,70", "300", ""],
["", "safrid", "Сафрид", "6,30", "300", ""],
["", "czacza", "Цаца", "2,80", "300", ""],
["", "sharan", "Шаран", "6,30", "300", ""],
["", "som", "Сом", "7,70", "300", ""],
["", "tolstolob", "Толстолоб", "4,20", "300", ""]

            ],

            "pizza": [
                ["", "olimpiecz", "Олимпиец", "4,90", "300", ""],
["", "vegetariana", "Вегетариана", "4,20", "300", ""],
["", "piperone", "Пипероне", "4,90", "300", ""],
["", "margarita", "Маргарита", "3,50", "300", ""],
["", "kaprichoza", "Капричоза", "4,90", "300", ""],
["", "salami", "Салами", "5,60", "300", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,20", "300", ""],
["", "blgariya", "България", "4,90", "300", ""],
["", "chiken", "Чикен", "4,90", "300", ""]

            ],

            "Фамилна пица": [
                ["", "kaprichoza", "Капричоза", "12,60", "1300", ""],
["", "margarita", "Маргарита", "9,10", "1000", ""],
["", "piperone", "Пипероне", "13,30", "1300", ""],
["", "vegetariana", "Вегетариана", "11,20", "1300", ""],
["", "olimpiecz", "Олимпиец", "13,30", "1500", ""],
["", "salami", "Салами", "13,30", "1300", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "11,20", "1200", ""],
["", "blgariya", "България", "13,30", "1500", ""],
["", "chiken", "Чикен", "12,60", "1300", ""]

            ],

            "Хлебни изделия": [
                ["", "grczka-pitka", "Гръцка питка", "0,70", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "", ""],
["", "cziganska-banicza", "Циганска баница", "0,00", "", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta-s-maskarpone", "Домашна бисквитена торта с маскарпоне", "2,10", "", ""],
["", "shokoladova-torta-den-i-noshh", "Шоколадова торта Ден и нощ", "2,80", "", ""]

            ]
        }', 
        'slug' => 'bistro-olimpiec',
        'business_name' => 'Бистро Олимпиец',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Silistra',
        'region' => 'Silistra',
        'postal_code' => '7504',
        'address' => 'Ул. Богдан Войвода 1',
        'address_additional' => '',
        'coords_x' => '44.11867398',
        'coords_y' => '27.27446662',
        'phone' => '+359878433467',
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
                ["", "salata-oliv", "Салата  Олив", "4,90", "", ""],
["", "salata-olivejra-150gr", "Салата Оливейра (150гр)", "2,80", "", ""],
["", "salata-shopska", "Салата Шопска", "2,80", "300", ""],
["", "salata-snezhanka", "Салата Снежанка", "2,10", "180", ""],
["", "salata-yajchna", "Салата Яйчна", "2,80", "200", ""],
["", "salata-bardema", "Салата Бардема", "4,20", "", ""],
["", "zelena-salata-s-yajcze-i-krastaviczi", "Зелена салата с яйце и краставици", "2,80", "250", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "350", ""],
["", "zelena-salata-s-gbi-pileshko-file-i-luk", "Зелена салата с гъби, пилешко филе и лук", "4,20", "", ""],
["", "salata-miks", "Салата Микс", "0,00", "", ""],
["", "salata-za-uzo", "Салата за узо", "2,10", "180", ""],
["", "salata-tiro", "Салата Тиро", "2,10", "180", ""],
["", "salata-zele-s-morkovi", "Салата зеле с моркови", "2,80", "300", ""],
["", "turshiya", "Туршия", "2,10", "300", ""],
["", "redena", "Редена", "2,80", "250", ""],
["", "ovcharska", "Овчарска", "4,20", "400", ""],
["", "salata-grczka", "Салата Гръцка", "2,80", "300", ""],
["", "evropejska", "Европейска", "4,20", "300", ""],
["", "salata-rukola", "Салата Рукола", "4,90", "300", ""],
["", "salata-ajsberg", "Салата Айсберг", "4,90", "", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "", ""]

            ],

            "Студени предястия": [
                ["", "krave-sirene", "Краве сирене", "1,40", "", ""],
["", "domati-s-moczaela-i-sos", "Домати с моцаела и сос", "4,90", "", ""],
["", "pecheni-chushki-s-chesn", "Печени чушки с чесън", "2,10", "150", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "100", ""],
["", "kartofi-s-praz", "Картофи с праз", "2,10", "250", ""],
["", "kopoolu", "Кьопоолу", "1,40", "180", ""],
["", "kashkaval", "Кашкавал", "2,80", "", ""],
["", "koze-sirene", "Козе сирене", "2,80", "", ""],
["", "ovche-sirene", "Овче сирене", "2,80", "", ""],
["", "feta-sirene", "Фета сирене", "2,80", "", ""],
["", "sino-sirene", "Синьо сирене", "4,90", "", ""],
["", "plato-sirena", "Плато сирена", "7,00", "", ""],
["", "plnena-chushka-s-krema-sirene", "Пълнена чушка с крема сирене", "2,80", "", ""],
["", "plnen-domat-s-krema-sirene", "Пълнен домат с крема сирене", "2,80", "", ""],
["", "lukanka", "Луканка", "3,50", "", ""],
["", "starecz", "Старец", "4,20", "", ""],
["", "file-elena", "Филе Елена", "4,90", "", ""],
["", "kajzer-pastrma", "Кайзер Пастърма", "6,30", "", ""],
["", "plato-mezeta", "Плато мезета", "14,00", "250", ""],
["", "domati-krastaviczi-zele", "Домати, краставици ,зеле", "1,40", "", ""],
["", "domati-krastaviczi-kartofi-zele", "Домати, краставици, картофи, зеле", "1,40", "", ""],
["", "lyutenicza", "Лютеница", "1,40", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,10", "", ""],
["", "lyuti-chushki", "Люти чушки", "0,00", "", ""],
["", "khlyab", "Хляб", "0,00", "", ""],
["", "khlyab-pechen", "Хляб  Печен", "0,00", "", ""]

            ],

            "alaminuti": [
                ["", "yajcza-vareni", "Яйца варени", "0,00", "", ""],
["", "yajcza-na-ochi", "Яйца на очи", "1,40", "", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "", ""],
["", "omlet-naturalen", "Омлет Натурален", "1,40", "", ""],
["", "omlet-ss-sirene", "Омлет със Сирене", "2,10", "", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "", ""],
["", "omlet-s-zelenchuczi", "Омлет с зеленчуци", "2,80", "", ""],
["", "omlet-asorti", "Омлет Асорти", "3,50", "", ""]

            ],

            "Топли предястия": [
                ["", "sirene-v-pargament", "Сирене в паргамент", "2,80", "100", ""],
["", "sirene-na-khapki", "Сирене на хапки", "2,80", "100", ""],
["", "topeno-sirene-s-kornflejks-i-sladko-ot-borovinki", "Топено сирене с корнфлейкс и сладко от боровинки", "4,20", "", ""],
["", "kashkaval-na-khapki", "Кашкавал на хапки", "2,80", "100", ""],
["", "chushki-pane", "Чушки пане", "2,10", "", ""],
["", "przheni-tikvichki", "Пържени тиквички", "2,80", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "200", ""],
["", "kartofi-s-gbi-i-bekon", "Картофи с гъби и бекон", "3,50", "250", ""],
["", "khopl-popl", "Хопъл попъл", "4,90", "", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "250", ""],
["", "pileshki-flejki-pane", "Пилешки флейки пане", "4,20", "200", ""],
["", "chushki-byurek", "Чушки бюрек", "2,80", "", ""],
["", "pileshki-panirani-khapki", "Пилешки панирани хапки", "4,20", "200", ""],
["", "pileshki-khrupkavi-flejki", "Пилешки хрупкави флейки", "4,90", "200", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,90", "200", ""],
["", "pile-sote", "Пиле соте", "4,90", "250", ""],
["", "pileshki-drebolii-zadusheni", "Пилешки дреболии задушени", "3,50", "250", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,10", "100", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "2,80", "130", ""],
["", "shkembe-pane", "Шкембе пане", "3,50", "130", ""],
["", "shkembe-sote", "Шкембе соте", "4,20", "200", ""],
["", "shkembe-s-gbi-i-kashkaval", "Шкембе с гъби и кашкавал", "4,20", "200", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "130", ""],
["", "ezik-pane", "Език пане", "4,90", "130", ""],
["", "brokoli-v-maslo", "Броколи в масло", "3,50", "130", ""],
["", "brokoli-pane", "Броколи пане", "3,50", "130", ""]

            ],

            "soups": [
                ["", "supa-topcheta", "Супа топчета", "1,40", "300", ""],
["", "shkembe", "Шкембе", "1,40", "300", ""],
["", "kurban", "Курбан", "1,40", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "2,10", "", ""],
["", "sandvich-s-kashkaval-i-shunka", "Сандвич с кашкавал и шунка", "2,10", "", ""],
["", "sandvich-s-kashkaval-i-bekon", "Сандвич с кашкавал и бекон", "2,10", "", ""],
["", "sandvich-s-kashkaval-i-lukanka", "Сандвич с кашкавал и луканка", "2,10", "", ""],
["", "sandvich-s-kashkaval-i-kajma", "Сандвич с кашкавал и кайма", "2,10", "", ""]

            ],

            "barbecue": [
                ["", "malki-kebapcheta", "Малки кебапчета", "0,00", "30", ""],
["", "kyufte", "Кюфте", "0,70", "60", ""],
["", "nevrozno-kyufte", "Неврозно Кюфте", "0,70", "60", ""],
["", "tatarsko-kyufte", "Татарско Кюфте", "2,10", "120", ""],
["", "pleskavicza", "Плескавица", "1,40", "100", ""],
["", "shishche-pileshko", "Шишче пилешко", "2,10", "100", ""],
["", "shishche-svinsko", "Шишче свинско", "2,10", "100", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "180", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "180", ""],
["", "sudzhuk", "Суджук", "4,20", "180", ""],
["", "svinski-kareta", "Свински карета", "4,90", "180", ""],
["", "panseta", "Пансета", "4,90", "", ""],
["", "svinski-vrat", "Свински врат", "4,90", "200", ""],
["", "svinsko-file", "Свинско филе", "6,30", "180", ""],
["", "golyam-shish", "Голям шиш", "7,00", "330", ""],
["", "teleshko-file", "Телешко филе", "10,50", "180", ""],
["", "plato-za-chetirima", "Плато за четирима", "0,00", "", ""]

            ],

            "Гювечета": [
                ["", "gyuveche-oliv", "Гювече Олив", "5,60", "", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "", ""],
["", "sirene-po-trakijski", "Сирене по тракийски", "3,50", "", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,90", "", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,90", "", ""]

            ],

            "pizza": [
                ["", "picza-oliv", "Пица  Олив", "4,90", "", ""],
["", "prlenka", "Пърленка", "2,10", "", ""],
["", "picza-margarita", "Пица Маргарита", "3,50", "", ""],
["", "picza-vegetariana", "Пица Вегетариана", "4,90", "", ""],
["", "picza-kuatro-formadzhi-luks", "Пица Куатро формаджи лукс", "4,90", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,90", "", ""]

            ],

            "pasta": [
                ["", "spageti-boloneze", "Спагети Болонезе", "4,90", "", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "", ""]

            ],

            "Основни ястия": [
                ["", "shniczel", "Шницел", "2,10", "150", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "8,40", "300", ""],
["", "pile-v-palachinka", "Пиле в палачинка", "4,90", "250", ""],
["", "pile-s-ananas", "Пиле с ананас", "5,60", "250", ""],
["", "pile-rokfor", "Пиле рокфор", "5,60", "250", ""],
["", "katino-meze", "Катино мезе", "4,90", "250", ""],
["", "svinski-dzholan", "Свински джолан", "7,00", "", ""],
["", "svinsko-meso-s-gbi-i-luk", "Свинско месо с гъби и лук", "7,00", "250", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "7,00", "250", ""],
["", "ram-stek-s-luk", "Рам стек с лук", "7,00", "230", ""],
["", "teleshki-dzholan", "Телешки джолан", "7,70", "", ""],
["", "teleshko-file-s-gbi", "Телешко филе с гъби", "11,90", "250", ""],
["", "mozajka-ot-meso", "Мозайка от месо", "7,00", "350", ""]

            ],

            "Рибени ястия": [
                ["", "kalmari", "Калмари", "9,80", "250", ""],
["", "kalmari-na-skara", "Калмари на скара", "11,90", "250", ""],
["", "oktopod", "Октопод", "12,60", "100", ""],
["", "byala-riba-pane", "Бяла риба пане", "2,80", "150", ""],
["", "pastrva", "Пастърва", "7,00", "200", ""],
["", "czipura-200--", "Ципура (200 -", "10,50", "400", ""],
["", "czipura-400--", "Ципура (400 -", "13,30", "600", ""],
["", "czipura-600--", "Ципура (600 -", "18,20", "900", ""],
["", "lavrak-200--", "Лаврак (200 -", "10,50", "400", ""],
["", "lavrak-400--", "Лаврак (400 -", "13,30", "600", ""],
["", "lavrak-600--", "Лаврак (600 -", "18,20", "800", ""],
["", "morski-darove-miks", "Морски дарове микс", "13,30", "", ""],
["", "somga-kotlet", "Сьомга котлет", "12,60", "", ""],
["", "skaridi-saganaki", "Скариди саганаки", "13,30", "", ""],
["", "skaridi-na-tigan", "Скариди на тиган", "11,90", "", ""],
["", "midi-saganaki", "Миди саганаки", "7,00", "", ""],
["", "midi-na-tigan", "Миди на тиган", "7,00", "", ""]

            ],

            "garnish": [
                ["", "kartofeno-pyure", "Картофено пюре", "1,40", "", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""]

            ],

            "desserts": [
                ["", "krem---karamel", "Крем - карамел", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "1,40", "", ""],
["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "2,10", "", ""],
["", "palachinka-s-med-i-orekhi", "Палачинка с мед и орехи", "1,40", "", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,10", "", ""],
["", "biskvitena-torta-s-techen-shokolad-i-krem-maskarpone", "Бисквитена торта с течен шоколад и крем маскарпоне", "2,10", "", ""],
["", "biskvitena-torta-s-byal-shokolad-i-krem-maskarpone", "Бисквитена торта с бял шоколад и крем маскарпоне", "2,10", "", ""],
["", "plodova-salata", "Плодова салата", "2,10", "", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,80", "", ""],
["", "czedeno-kiselo-mlyako-ss-sladko", "Цедено кисело мляко със сладко", "2,80", "", ""],
["", "plato-plodove", "Плато плодове", "10,50", "", ""]

            ]
        }', 
        'slug' => 'restorant-olive',
        'business_name' => 'Ресторант Olive',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Gotse Delchev',
        'region' => 'Gotse Delchev',
        'postal_code' => '2900',
        'address' => 'ул. Царица Йоанна 1',
        'address_additional' => '',
        'coords_x' => '41.5732427',
        'coords_y' => '23.7333192',
        'phone' => '+35975161515',
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
                ["", "shopska-salata", "Шопска салата", "3,50", "350", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "350", ""],
["", "salata-na-mama", "Салата на мама", "3,50", "350", ""],
["", "chorbadzhijska-salata", "Чорбаджийска салата", "4,20", "350", ""],
["", "salata-tabule", "Салата табуле", "4,20", "350", ""],
["", "velikdenska-salata", "Великденска салата", "3,50", "350", ""],
["", "tiro-salata", "Тиро салата", "3,50", "350", ""],
["", "mlechna-salata-s-presni-ili-kiseli-krastavichki", "Млечна салата с пресни или кисели краставички", "2,80", "350", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "salata-ajsberg-s-parmezan", "Салата айсберг с пармезан", "4,20", "350", ""],
["", "sredizemnomorska-salata", "Средиземноморска салата", "4,90", "350", ""],
["", "gorska-salata", "Горска салата", "4,20", "350", ""]

            ],

            "starters": [
                ["", "plato-ot-kolbasi-i-sirena", "Плато от колбаси и сирена", "11,20", "300", ""],
["", "plato-pikantni-brusketi-s-proshuto-parmezan-i-rukola", "Плато пикантни брускети с прошуто, пармезан и рукола", "8,40", "", ""],
["", "italianski-brusketi", "Италиански брускети", "4,90", "", ""],
["", "pileshki-khapki-s-kornflejks-i-chesnov-sos", "Пилешки хапки с корнфлейкс и чеснов сос", "4,90", "250", ""],
["", "tava-dzhiger", "Тава джигер", "4,90", "250", ""],
["", "teleshki-ezik-s-kapersi-i-susheni-domati", "Телешки език с каперси и сушени домати", "5,60", "200", ""],
["", "gshi-drob-vrkhu-kanape-ot-karamelizirani-yablki", "Гъши дроб върху канапе от карамелизирани ябълки", "11,20", "", ""],
["", "pateshki-srcza", "Патешки сърца", "4,90", "250", ""],
["", "topeni-sirencza-ss-sladko", "Топени сиренца със сладко", "4,90", "200", ""],
["", "plato-ot-pecheni-zelenchuczi", "Плато от печени зеленчуци", "4,90", "350", ""],
["", "tikvichki-po-grczki-s-mlechen-sos", "Тиквички по гръцки с млечен сос", "4,20", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "150", ""],
["", "sotirani-kartofi-s-kopr-i-chesn", "Сотирани картофи с копър и чесън", "2,80", "150", ""]

            ],

            "Домашни ястия и предястия": [
                ["", "patladzhan-khadzhi-gencho", "Патладжан Хаджи Генчо", "4,90", "250", ""],
["", "plato-ot-chushki-i-patladzhan-s-domaten-sos", "Плато от чушки и патладжан с доматен сос", "4,90", "300", ""],
["", "domashen-mish-mash", "Домашен миш-маш", "3,50", "250", ""],
["", "domashen-chips", "Домашен чипс", "2,80", "200", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "4,20", "280", ""],
["", "svinsko-kavrdisano-s-luk-i-gbi", "Свинско кавърдисано с лук и гъби", "5,60", "280", ""],
["", "selsko-meze", "Селско мезе", "4,90", "250", ""],
["", "shishche-ot-agneshki-drebolii-zavito-v-bulo", "Шишче от агнешки дреболии, завито в було", "2,80", "140", ""],
["", "dvojka-przheni-kyuftencza-s-kartofki", "Двойка пържени кюфтенца с картофки", "4,90", "", ""],
["", "trojka-teleshki-kyuftencza-s-kartofki", "Тройка телешки кюфтенца с картофки", "5,60", "", ""],
["", "domashna-teleshka-sazdrma-s-yajcza-na-tigan", "Домашна телешка саздърма с яйца на тиган", "5,60", "250", ""]

            ],

            "Рибни ястия и предястия": [
                ["", "plneni-midi-s-oriz-i-morski-darove", "Пълнени миди с ориз и морски дарове", "5,60", "250", ""],
["", "oktopod-na-plocha", "Октопод на плоча", "17,50", "250", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "9,10", "250", ""],
["", "czipura", "Ципура", "12,60", "", ""],
["", "lavrak", "Лаврак", "12,60", "", ""],
["", "fagri", "Фагри", "12,60", "", ""],
["", "kalkan", "Калкан", "17,50", "300", ""],
["", "chernokop", "Чернокоп", "9,80", "300", ""],
["", "barbun", "Барбун", "12,60", "300", ""],
["", "przhen-sharan", "Пържен шаран", "7,00", "280", ""],
["", "gavros", "Гаврос", "7,00", "250", ""],
["", "sardina-na-plocha-s-limonov-dresing", "Сардина на плоча с лимонов дресинг", "7,00", "250", ""],
["", "shishcheta-ot-skaridi", "Шишчета от скариди", "12,60", "250", ""],
["", "zadusheni-skaridi-s-maslo-i-sos-ekzotik", "Задушени скариди с масло и сос екзотик", "12,60", "200", ""],
["", "kotelt-ot-somga", "Котелт от сьомга", "4,90", "100", ""],
["", "plnen-kalmar", "Пълнен калмар", "11,20", "350", ""]

            ],

            "Основни ястия": [
                ["", "svinski-rebra-s-bbq-sos", "Свински ребра с BBQ сос", "7,00", "350", ""],
["", "tradiczionna-vratna-przhola", "Традиционна вратна пържола", "7,00", "350", ""],
["", "svinski-kotlet-flinstoun", "Свински котлет Флинстоун", "8,40", "350", ""],
["", "shniczel-po", "Шницел по", "7,70", "", ""],
["", "svinski-karencza-glazirani-s-dizhonska-gorchicza", "Свински каренца, глазирани с дижонска горчица", "7,70", "350", ""],
["", "pileshki-grdi-glazirani-s-maslo-vino-i-sos-ekzotik", "Пилешки гърди, глазирани с масло, вино и сос екзотик", "6,30", "350", ""],
["", "pile-khit", "Пиле Хит", "7,00", "", ""],
["", "teleshki-stek-s-rozmarin-glaziran-s-maslo", "Телешки стек с розмарин, глазиран с масло", "12,60", "350", ""],
["", "agneshki-kotletcheta", "Агнешки котлетчета", "11,90", "350", ""],
["", "shishcheta-ot-pikantni-kyuftencza---smes-ot-agneshko-i-teleshko-meso", "Шишчета от пикантни кюфтенца - смес от агнешко и телешко месо", "6,30", "", ""],
["", "trojka-agneshki-kyuftencza-s-garnitura", "Тройка агнешки кюфтенца с гарнитура", "6,30", "350", ""],
["", "zhareni-svinski-buzi", "Жарени свински бузи", "5,60", "230", ""],
["", "sudzhuk-kyufte", "Суджук кюфте", "6,30", "300", ""],
["", "teleshki-bejti-shish", "Телешки бейти шиш", "4,20", "100", ""],
["", "teleshki-kotlet", "Телешки котлет", "4,20", "100", ""],
["", "agneshki-bejti-shish", "Агнешки бейти шиш", "4,20", "100", ""],
["", "agneshko-kolbast", "Агнешко колбастъ", "4,20", "100", ""],
["", "teleshko-sukalche-na-plocha", "Телешко сукалче на плоча", "9,80", "250", ""]

            ],

            "Паста и ризото": [
                ["", "spageti-alio-e-olio", "Спагети алио е олио", "4,20", "300", ""],
["", "spageti-s-morski-darove", "Спагети с морски дарове", "7,00", "300", ""],
["", "spageti-milano", "Спагети Милано", "4,90", "300", ""],
["", "spageti-boloneze", "Спагети болонезе", "4,90", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "300", ""],
["", "rizoto-s-manatarki-i-parmezan", "Ризото с манатарки и пармезан", "5,60", "300", ""],
["", "rizoto-ss-skaridi-i-tikvichki", "Ризото със скариди и тиквички", "9,10", "300", ""]

            ],

            "desserts": [
                ["", "pandzhialo-s-maskarpone", "Панджиало с маскарпоне", "3,50", "200", ""],
["", "shokoladovo-sufle-s-vanilov-sladoled", "Шоколадово суфле с ванилов сладолед", "3,50", "200", ""],
["", "krem-bryule", "Крем брюле", "2,80", "200", ""],
["", "krem-panakota", "Крем панакота", "2,80", "200", ""],
["", "krem-karamel", "Крем карамел", "2,10", "200", ""],
["", "kyunefe", "Кюнефе", "4,20", "200", ""],
["", "sladoled", "Сладолед", "2,80", "200", ""]

            ]
        }', 
        'slug' => 'restorant-gradina-krdzhali',
        'business_name' => 'Ресторант Градина (Кърджали)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6600',
        'address' => 'ул. Пирин 3',
        'address_additional' => '',
        'coords_x' => '41.6371391',
        'coords_y' => '25.3697144',
        'phone' => '+359888705806',
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
                ["", "patladzhan-s-khalumi", "Патладжан с халуми", "4,20", "350", ""],
["", "riba-ton", "Риба тон", "5,60", "280", ""],
["", "kapreze", "Капрезе", "4,90", "350", ""],
["", "salata-ss-zapecheno-koze-sirene-i-yagodi", "Салата със запечено козе сирене и ягоди", "5,60", "800", ""],
["", "spanachena-salata-s-kinoa", "Спаначена салата с киноа", "5,60", "280", ""],
["", "rozov-domat-s-bivolsko-sirene-i-pechen-piper", "Розов домат с биволско сирене и печен пипер", "4,20", "350", ""],
["", "czezar", "Цезар", "4,20", "280", ""],
["", "tradicziona-blgarska-salata", "Традициона българска салата", "3,50", "350", ""],
["", "variacziya-na-grczka-salata", "Вариация на гръцка салата", "4,20", "350", ""],
["", "kinoa", "Киноа", "4,20", "350", ""],
["", "salata-arpezos", "Салата Арпезос", "5,60", "450", ""],
["", "dzadziki", "Дзадзики", "3,50", "280", ""],
["", "salata-ss-somga", "Салата със сьомга", "5,60", "280", ""],
["", "parmidzhana", "Пармиджана", "6,30", "280", ""]

            ],

            "starters": [
                ["", "brusketi-filadelfiya-ss-somga-i-kapersi", "Брускети Филаделфия със сьомга и каперси", "4,90", "150", ""],
["", "brusketi-domateno-konkase-moczarela-i-maslini", "Брускети доматено конкасе, моцарела и маслини", "2,10", "150", ""],
["", "brusketi-proshuto-i-salam-milano", "Брускети Прошуто и салам милано", "2,80", "", ""],
["", "plato-brusketi", "Плато брускети", "4,90", "", ""],
["", "selekcziya-sirena-i-kolbasi", "Селекция сирена и колбаси", "12,60", "240", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "3,50", "200", ""],
["", "pushirani-chesnovi-skaridi", "Пуширани чеснови скариди", "8,40", "150", ""],
["", "panirani-topeni-sirencza-s-borovinki", "Панирани топени сиренца с боровинки", "4,20", "200", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "5,60", "150", ""],
["", "sotirani-kalmari", "Сотирани калмари", "5,60", "150", ""],
["", "khrupkavi-pileshki-filencza", "Хрупкави пилешки филенца", "4,90", "200", ""],
["", "pile-teriaki", "Пиле териаки", "4,20", "180", ""],
["", "melandzane", "Меландзане", "4,20", "280", ""],
["", "khalumi-s-pesto-i-cheri-domati", "Халуми с песто и чери домати", "5,60", "200", ""],
["", "drobcheta-po-toskanski-s-chesnovi-krustini", "Дробчета по тоскански с чеснови крустини", "3,50", "280", ""],
["", "kapunata-s-koze-sirene", "Капуната с козе сирене", "6,30", "280", ""],
["", "sotirani-manatarki", "Сотирани манатарки", "7,00", "150", ""]

            ],

            "risotto": [
                ["", "rizoto-s-brokoli-i-skaridi-300gr", "Ризото с броколи и скариди (300гр)", "5,60", "", ""],
["", "rizoto-s-divi-gbi-i-susheni-domati-300gr", "Ризото с диви гъби и сушени домати (300гр)", "4,90", "", ""],
["", "rizoto-s-pileshko-file-i-shafran-300gr", "Ризото с пилешко филе и шафран (300гр)", "3,50", "", ""],
["", "rizoto-delmatino-ss-somga-300gr", "Ризото делматино със сьомга (300гр)", "7,00", "", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "300", ""],
["", "polo", "Поло", "4,90", "400", ""],
["", "peperoni", "Пеперони", "4,90", "300", ""],
["", "proshuto", "Прошуто", "7,70", "400", ""],
["", "verde", "Верде", "4,90", "300", ""],
["", "diablo", "Диабло", "5,60", "300", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "4,90", "300", ""],
["", "proshuto-fungi", "Прошуто фунги", "4,20", "400", ""],
["", "kiara", "Киара", "5,60", "400", ""],
["", "tre-karne", "Тре карне", "6,30", "400", ""]

            ],

            "Фокача": [
                ["", "fokacha-s-rozmarin-i-chesn-200gr", "Фокача с розмарин и чесън (200гр)", "2,10", "", ""],
["", "fokacha-ss-susheni-domati-i-maslini-200gr", "Фокача със сушени домати и маслини (200гр)", "2,10", "", ""],
["", "fokacha-s-moczarela-200gr", "Фокача с моцарела (200гр)", "2,10", "", ""],
["", "chesnova-fokacha-200gr", "Чеснова Фокача (200гр)", "2,10", "", ""]

            ],

            "Ястия": [
                ["", "pile-filadelfiya-podneseno-s-rizoto-nero", "Пиле Филаделфия  поднесено с ризото неро", "5,60", "300", ""],
["", "limonovo-pile-garnirano-s-bilkovi-kartofki", "Лимоново пиле гарнирано с билкови картофки", "4,90", "350", ""],
["", "pileshko-file-ss-spanak-i-sos-parmidzhana", "Пилешко филе със спанак и сос пармиджана", "6,30", "280", ""],
["", "file-ot-svinsko-s-chushki-i-peperonchino", "Филе от свинско с чушки и пеперончино", "6,30", "380", ""],
["", "svinsko-bon-file-s-divi-gbi-i-domashno-kartofeno-pyure", "Свинско бон филе с диви гъби и домашно картофено пюре", "7,70", "350", ""],
["", "teleshki-stek-s-brbn-sos", "Телешки стек с бърбън сос", "16,10", "300", ""],
["", "file-ot-somga-s-limonovo-rizoto", "Филе от сьомга с лимоново ризото", "10,50", "330", ""],
["", "file-ot-lavrak-ss-skaridi", "Филе от лаврак със скариди", "12,60", "280", ""],
["", "teleshki-kscheta-s-rizoto-delmatino", "Телешки късчета с ризото делматино", "11,20", "350", ""],
["", "teleshki-stek-s-divi-gbi-i-kartofeno-pyure", "Телешки стек с диви гъби и картофено пюре", "16,10", "400", ""]

            ],

            "Грил": [
                ["", "mlechno-teleshko", "Млечно телешко", "11,20", "", ""],
["", "drob-ot-mlechno-teleshko", "Дроб от млечно телешко", "7,70", "200", ""],
["", "agneshki-kyuftencza-s-menta", "Агнешки кюфтенца с мента", "6,30", "", ""],
["", "teleshki-kyuftencza", "Телешки кюфтенца", "3,50", "", ""],
["", "svinski-kotlet", "Свински котлет", "6,30", "300", ""],
["", "agneshki-kotletcheta", "Агнешки котлетчета", "10,50", "200", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "250", ""],
["", "lavrak-file", "Лаврак филе", "10,50", "180", ""],
["", "czipura-file", "Ципура филе", "9,80", "180", ""],
["", "file-ot-somga", "Филе от сьомга", "11,20", "180", ""]

            ],

            "garnish": [
                ["", "zadushen-spanak-150gr", "Задушен спанак (150гр)", "1,40", "", ""],
["", "domashno-kartofeno-pyure-150gr", "Домашно картофено пюре (150гр)", "1,40", "", ""],
["", "limonovo-rizoto-150gr", "Лимоново ризото  (150гр)", "1,40", "", ""],
["", "rizo-delmatino-150gr", "Ризо делматино (150гр)", "1,40", "", ""],
["", "presni-domashni-kartofki-150gr", "Пресни домашни картофки (150гр)", "1,40", "", ""],
["", "zadusheni-zelenchuczi-150gr", "Задушени зеленчуци (150гр)", "1,40", "", ""],
["", "pecheni-kartofi-na-gril-150gr", "Печени картофи на грил  (150гр)", "1,40", "", ""],
["", "svezha-garnitura-150gr", "Свежа гарнитура (150гр)", "1,40", "", ""]

            ],

            "desserts": [
                ["", "domashna-pita-s-maskarpone-120gr", "Домашна пита с маскарпоне (120гр)", "2,80", "", ""],
["", "domashna-shokoladova-torta-120gr", "Домашна шоколадова торта (120гр)", "2,80", "", ""],
["", "chizkejk-s-byal-shokolad-i-domashno-sladko-120gr", "Чизкейк с бял шоколад и домашно сладко (120гр)", "2,80", "", ""]

            ]
        }', 
        'slug' => 'restorant-arpezos',
        'business_name' => 'Ресторант Арпезос',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6600',
        'address' => 'ул. Републиканска 61',
        'address_additional' => '',
        'coords_x' => '41.6370414',
        'coords_y' => '25.3677609',
        'phone' => '+359885919601',
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
                ["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,10", "400", ""],
["", "salata-czveklo", "Салата цвекло", "2,10", "300", ""],
["", "salata-ot-pecheni-chushki", "Салата от печени чушки", "2,80", "300", ""],
["", "salata-ot-kiseli-krastavichki", "Салата от кисели краставички", "2,10", "200", ""],
["", "salata-ot-maslini-s-luk", "Салата от маслини с лук", "2,10", "200", ""],
["", "salata-czarevicza-s-majoneza", "Салата царевица с майонеза", "2,10", "250", ""],
["", "snezhanka", "Снежанка", "2,10", "200", ""],
["", "katk-ss-sirene", "Катък със сирене", "2,10", "250", ""],
["", "mlechna-s-pecheni-chushki-i-orekhi", "Млечна с печени чушки и орехи", "2,80", "250", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "zele-s-morkovi-i-majoneza", "Зеле с моркови и майонеза", "2,80", "350", ""],
["", "salata-morkovi", "Салата моркови", "2,10", "300", ""],
["", "salata-domati", "Салата Домати", "2,10", "300", ""],
["", "salata-krastaviczi", "Салата Краставици", "2,10", "300", ""],
["", "salata-smilyanski-bob-s-luk", "Салата Смилянски боб с лук", "2,10", "200", ""]

            ],

            "Студени мезета": [
                ["", "file-elena", "Филе Елена", "4,20", "100", ""],
["", "kajzer", "Кайзер", "4,20", "100", ""],
["", "lukanka", "Луканка", "2,10", "100", ""],
["", "sudzhuk", "Суджук", "2,10", "100", ""]

            ],

            "Комбинирани салати": [
                ["", "salata-tonu", "Салата Тону", "2,80", "500", ""],
["", "chorbadzhijska-salata", "Чорбаджийска салата", "3,50", "500", ""],
["", "bob-po-rodopski", "Боб по Родопски", "2,10", "300", ""],
["", "salata-starata-kshha", "Салата Старата Къща", "4,90", "700", ""],
["", "salata-babina", "Салата Бабина", "2,80", "450", "https://images.deliveryhero.io/image/fd-bg/Products/977689.jpg?width=302"],
["", "salata-khandzhijska", "Салата Ханджийска", "2,80", "500", ""],
["", "rodopska-razyadka", "Родопска разядка", "3,50", "500", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "450", "https://images.deliveryhero.io/image/fd-bg/Products/977694.jpg?width=302"],
["", "salata-ajsberg", "Салата Айсберг", "3,50", "400", ""],
["", "salata-tabule", "Салата Табуле", "4,20", "500", ""],
["", "salata-domati-rukola-i-ovche-sirene", "Салата домати, рукола и овче сирене", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/977794.jpg?width=302"],
["", "bolyarska-salata", "Болярска Салата", "3,50", "600", "https://images.deliveryhero.io/image/fd-bg/Products/977795.jpg?width=302"],
["", "meshana-salata", "Мешана Салата", "2,10", "350", ""],
["", "ovcharska-salata", "Овчарска Салата", "2,80", "600", ""],
["", "salata-moczarela", "Салата Моцарела", "4,20", "500", ""],
["", "zhtvarska-salata", "Жътварска Салата", "2,80", "500", ""],
["", "selska-salata", "Селска Салата", "2,80", "500", ""],
["", "grczka-salata", "Гръцка Салата", "3,50", "700", "https://images.deliveryhero.io/image/fd-bg/Products/977843.jpg?width=302"],
["", "salata-buket", "Салата Букет", "4,20", "900", "https://images.deliveryhero.io/image/fd-bg/Products/991690.jpg?width=302"]

            ],

            "starters": [
                ["", "przheni-tikvichki", "Пържени тиквички", "2,80", "200", ""],
["", "brokoli-ss-sirene-i-smetana", "Броколи със сирене и сметана", "4,20", "400", ""],
["", "zapekanka-s-bekon", "Запеканка с бекон", "3,50", "400", ""],
["", "patatnik-po-rodopski", "Пататник по родопски", "4,20", "500", ""],
["", "patatnik-po-rodopski-ss-sirene", "Пататник по родопски със сирене", "4,90", "500", ""],
["", "panirani-pileshki-khapki", "Панирани пилешки хапки", "2,80", "200", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "2,80", "200", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "3,50", "200", ""],
["", "kartofeni-czrvuli", "Картофени цървули", "4,20", "400", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "zhareni-kartofi", "Жарени картофи", "2,10", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "350", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "400", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "200", ""],
["", "manatarki-v-maslo", "Манатарки в масло", "8,40", "200", ""]

            ],

            "Предястия от млечни продукти": [
                ["", "sirene-pod-kapak", "Сирене под капак", "2,10", "200", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,10", "200", ""],
["", "panirano-sirene", "Панирано сирене", "2,10", "200", ""],
["", "kashkaval-pod-kapak", "Кашкавал под капак", "2,80", "200", ""],
["", "paniran-kashkaval", "Паниран кашкавал", "2,80", "200", ""],
["", "sirenacheta", "Сиреначета", "2,80", "250", ""],
["", "panirano-sirene-ss-susam", "Панирано сирене със сусам", "2,80", "200", ""],
["", "sirene-s-med-i-orekhi", "Сирене с мед и орехи", "2,80", "200", ""],
["", "topeno-sirene-panirano", "Топено сирене панирано", "2,80", "200", ""],
["", "topeno-sirene", "Топено сирене", "2,80", "200", ""],
["", "sirene-natyur", "Сирене натюр", "0,70", "100", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "1,40", "100", ""],
["", "sino-sirene", "Синьо сирене", "3,50", "100", ""],
["", "ovche-sirene", "Овче сирене", "1,40", "100", ""],
["", "sirene-moczarela", "Сирене моцарела", "2,80", "125", ""]

            ],

            "Предястия от субпродукти": [
                ["", "svinski-drebolii", "Свински дреболии", "2,80", "200", ""],
["", "svinski-drebolii", "Свински дреболии", "3,50", "350", ""],
["", "svinski-ushichki", "Свински ушички", "3,50", "300", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "3,50", "200", ""],
["", "ezik-natyur", "Език натюр", "4,20", "200", ""],
["", "ezik-maslo", "Език масло", "4,90", "200", ""],
["", "ezik-pane", "Език пане", "4,90", "250", ""],
["", "agneshki-drebolijki", "Агнешки дреболийки", "2,80", "200", ""],
["", "agleshki-drebolijki-po-selski", "Аглешки дреболийки по селски", "3,50", "400", ""],
["", "agneshki-chrevcza", "Агнешки чревца", "2,80", "200", ""],
["", "agneshka-glavichka", "Агнешка главичка", "4,20", "300", ""],
["", "pateshki-srcza", "Патешки сърца", "3,50", "300", ""],
["", "pateshki-srcza-po-selski", "Патешки сърца по селски", "4,20", "400", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "2,80", "400", ""],
["", "pileshki-drob", "Пилешки дроб", "2,10", "200", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "2,80", "400", ""],
["", "teleshki-drob", "Телешки дроб", "2,80", "300", ""]

            ],

            "Основни ястия": [
                ["", "svinska-przhola-s-gbi", "Свинска пържола с гъби", "5,60", "400", ""],
["", "svinsko-vreteno", "Свинско вретено", "7,00", "300", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "6,30", "350", ""],
["", "kavrma-po-radomirski", "Кавърма по радомирски", "4,90", "", ""],
["", "sirene-po-shopski", "Сирене по шопски", "3,50", "300", ""],
["", "sirene-po-trakijski", "Сирене по тракийски", "4,20", "400", ""],
["", "kavrma-v-omlet", "Кавърма в омлет", "5,60", "500", ""],
["", "rodopska-topenicza", "Родопска топеница", "3,50", "400", ""],
["", "selska-brkanicza", "Селска бърканица", "3,50", "400", ""],
["", "svinsko-dzholanche", "Свинско джоланче", "7,70", "500", ""],
["", "agneshko-pecheno", "Агнешко печено", "8,40", "400", ""],
["", "teleshko-pecheno", "Телешко печено", "8,40", "600", "https://images.deliveryhero.io/image/fd-bg/Products/982838.jpg?width=302"],
["", "teleshko-bonfile", "Телешко бонфиле", "11,90", "300", ""],
["", "svinsko-pecheno-s-manatarki", "Свинско печено с манатарки", "10,50", "350", ""],
["", "svinsko-pecheno", "Свинско печено", "7,70", "600", ""],
["", "svinsko-po-selski", "Свинско по селски", "4,90", "300", ""],
["", "rodopska-klczanicza", "Родопска кълцаница", "4,90", "400", ""],
["", "file-po-lovdzhijski", "Филе по ловджийски", "7,00", "400", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "4,90", "400", ""],
["", "pileshka-przhola-s-gbi", "Пилешка пържола с гъби", "4,90", "400", ""],
["", "pileshko-vreteno", "Пилешко вретено", "5,60", "300", ""],
["", "pile-zhulien", "Пиле Жулиен", "4,90", "300", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "7,00", "400", ""]

            ],

            "Основни ястия от Яйца": [
                ["", "omlet-natyur", "Омлет натюр", "1,40", "200", ""],
["", "omlet-asorti", "Омлет асорти", "2,10", "300", ""],
["", "brkani-yajcza-ss-sirene", "Бъркани яйца със сирене", "2,10", "300", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "300", ""],
["", "yajcza-na-ochi", "Яйца на очи", "1,40", "200", ""],
["", "mish-mash", "Миш-маш", "2,80", "300", ""]

            ],

            "Ястия от Царевично брашно": [
                ["", "kachamak-ss-sirene", "Качамак със сирене", "4,20", "600", ""],
["", "kachamak-s-teleshko-meso-i", "Качамак с телешко месо и", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/983351.jpg?width=302"],
["", "kachamak-ss-svinsko-meso-i-sirene", "Качамак със свинско месо и сирене", "5,60", "800", "https://images.deliveryhero.io/image/fd-bg/Products/983352.jpg?width=302"],
["", "kachamak-s-agneshko-meso-i", "Качамак с агнешко месо и", "11,20", "", ""],
["", "kachamak-s-pileshko-meso-i-sirene", "Качамак с пилешко месо и сирене", "5,60", "800", "https://images.deliveryhero.io/image/fd-bg/Products/983354.jpg?width=302"]

            ],

            "grill": [
                ["", "veshavicza", "Вешавица", "6,30", "400", ""],
["", "pletenicza", "Плетеница", "7,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/982457.jpg?width=302"],
["", "meshana-skara", "Мешана скара", "9,80", "800", ""],
["", "kavkazki-shish", "Кавказки шиш", "9,80", "400", ""],
["", "shashlk---svinski", "Шашлък - свински", "9,10", "500", "https://images.deliveryhero.io/image/fd-bg/Products/982461.jpg?width=302"],
["", "shashlk---pileshki", "Шашлък - пилешки", "8,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/982463.jpg?width=302"],
["", "selska-nadenicza", "Селска наденица", "4,20", "300", ""],
["", "teleshko-bonfile", "Телешко бонфиле", "9,80", "200", ""],
["", "teleshko-sukalche", "Телешко сукалче", "7,70", "250", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "250", ""],
["", "svinsko-file", "Свинско филе", "5,60", "200", ""],
["", "svinski-rebrcza", "Свински ребърца", "5,60", "400", ""],
["", "pleskavicza", "Плескавица", "4,90", "400", ""],
["", "krnache", "Кърначе", "3,50", "250", ""],
["", "teleshko-kyufte", "Телешко кюфте", "0,70", "100", ""],
["", "agneshko-kyufte", "Агнешко кюфте", "1,40", "100", ""],
["", "nevrozno-kyufte", "Неврозно кюфте", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "300", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,90", "600", "https://images.deliveryhero.io/image/fd-bg/Products/982798.jpg?width=302"],
["", "svinska-przhola", "Свинска пържола", "4,90", "200", ""],
["", "svinsko-shishche-100gr", "Свинско шишче (100гр", "2,10", "", ""]

            ],

            "fish": [
                ["", "som", "Сом", "9,10", "400", ""],
["", "pstrva", "Пъстърва", "6,30", "400", ""],
["", "sharan", "Шаран", "5,60", "400", ""],
["", "file-ot-byala-riba", "Филе от бяла риба", "4,20", "300", ""],
["", "czipura", "Ципура", "9,80", "400", ""],
["", "gavros", "Гаврос", "10,50", "300", ""],
["", "skumriya", "Скумрия", "3,50", "400", ""],
["", "lavrak", "Лаврак", "10,50", "400", ""]

            ],

            "Морски дарове": [
                ["", "midi-s-luk", "Миди с лук", "4,90", "300", ""],
["", "kalmari", "Калмари", "6,30", "200", ""],
["", "skaridi", "Скариди", "10,50", "200", ""]

            ],

            "Ястия на сач": [
                ["", "slaviyanski-sach", "Славиянски сач", "11,20", "900", ""],
["", "teleshki-sach", "Телешки сач", "10,50", "900", ""],
["", "agneshko-sache", "Агнешко саче", "11,20", "900", ""],
["", "drusan-kebap-na-sach", "Друсан кебап на сач", "9,80", "900", ""],
["", "katino-meze", "Катино мезе", "11,20", "900", ""],
["", "teleshko-sote", "Телешко соте", "10,50", "900", ""],
["", "kavrma-po-rodopski", "Кавърма по родопски", "10,50", "900", ""],
["", "kasapsko-sache", "Касапско саче", "11,20", "900", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "5,60", "900", ""],
["", "rodopski-sach-ss-svinsko-meso", "Родопски сач със свинско месо", "10,50", "900", ""],
["", "rodopski-sach-s-pileshko-meso", "Родопски сач с пилешко месо", "10,50", "900", ""]

            ],

            "garnish": [
                ["", "krastaviczi", "Краставици", "0,70", "150", ""],
["", "domati", "Домати", "0,70", "150", ""],
["", "zele-i-morkovi", "Зеле и Моркови", "0,70", "150", ""],
["", "zelena-salata", "Зелена салата", "1,40", "125", ""],
["", "lyutenicza", "Лютеница", "0,70", "150", ""],
["", "domashna-lyutenicza", "Домашна лютеница", "1,40", "200", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""],
["", "oriz", "Ориз", "0,70", "150", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "0,70", "100", ""]

            ],

            "Питки": [
                ["", "prlenka", "Пърленка", "0,70", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "150", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "200", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "200", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "200", ""],
["", "khlyab-filiya", "Хляб Филия", "0,00", "", ""]

            ],

            "additives": [
                ["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "chili-sos", "Чили сос", "0,00", "50", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "50", ""],
["", "kiselo-mlyako", "Кисело мляко", "1,40", "400", ""],
["", "limon", "Лимон", "0,70", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "160", ""],
["", "plodova-salata", "Плодова салата", "2,80", "300", ""],
["", "palachinka", "Палачинка", "1,40", "200", ""],
["", "czedeno-mlyako", "Цедено мляко", "2,10", "250", ""]

            ]
        }', 
        'slug' => 'starata-kshcha',
        'business_name' => 'Старата къща',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kardzhali',
        'region' => 'Kardzhali',
        'postal_code' => '6600',
        'address' => 'ул. Георги Бенковски 2',
        'address_additional' => '',
        'coords_x' => '41.6421454',
        'coords_y' => '25.3700971',
        'phone' => '+35936162884',
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
                ["", "grczka", "Гръцка", "3,50", "380", ""],
["", "ovcharska", "Овчарска", "3,50", "480", ""],
["", "bolyarki", "Болярки", "4,20", "500", ""],
["", "kapreze", "Капрезе", "4,20", "400", ""],
["", "manastirska", "Манастирска", "3,50", "450", ""],
["", "rzkosh", "Рзкош", "3,50", "420", ""],
["", "czezar-s-pile", "Цезар с пиле", "3,50", "330", ""],
["", "czezar", "Цезар", "3,50", "330", ""],
["", "nashenska", "Нашенска", "4,20", "380", ""],
["", "salata-ekzotik", "Салата Екзотик", "4,20", "380", ""],
["", "ajsberg-s-pile", "Айсберг с пиле", "4,20", "350", ""],
["", "ajsberg-s-rolcza-ot-raczi-i-maslinova-pasta", "Айсберг с ролца от раци и маслинова паста", "4,90", "350", ""],
["", "salata-tre-kolori", "Салата Тре Колори", "4,20", "390", ""],
["", "salata-viktoriya", "Салата Виктория", "4,20", "350", ""],
["", "dobrudzhanska", "Добруджанска", "3,50", "420", ""],
["", "zhtvraska", "Жътвраска", "3,50", "450", ""],
["", "zelena-salata", "Зелена салата", "2,80", "300", ""],
["", "shopska-salata", "Шопска салата", "2,80", "380", ""],
["", "selska-salata", "Селска салата", "2,80", "380", ""],
["", "snezhanka", "Снежанка", "2,10", "200", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "meshana", "Мешана", "2,10", "250", ""],
["", "zimna-prikazka", "Зимна приказка", "2,80", "200", ""],
["", "vzdushna", "Въздушна", "2,80", "400", ""],
["", "vitaminozna", "Витаминозна", "2,80", "400", ""],
["", "ajsberg-s-byal-tryufel", "Айсберг с бял трюфел", "4,90", "250", ""],
["", "salata-s-chervena-kinoa", "Салата с червена киноа", "4,90", "350", ""],
["", "imperator", "Император", "4,90", "300", ""],
["", "piza", "Пиза", "4,20", "350", ""]

            ],

            "Сухи мезета": [
                ["", "sudzhuk", "Суджук", "3,50", "100", ""],
["", "pastrma", "Пастърма", "4,90", "100", ""],
["", "file-elena", "Филе Елена", "4,20", "100", ""],
["", "kashkaval", "Кашкавал", "2,10", "100", ""],
["", "sirene", "Сирене", "1,40", "100", ""]

            ],

            "Топли предястия и мезета": [
                ["", "panirani-pileshki-prchki-ss-sirene-i-maslini", "Панирани пилешки пръчки със сирене и маслини", "4,90", "400", ""],
["", "pileshki-zhulieni-s-kornflejks", "Пилешки жулиени с корнфлейкс", "4,90", "400", ""],
["", "pileshki-filencza-ss-susam", "Пилешки филенца със сусам", "4,90", "360", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,90", "350", ""],
["", "pileshki-krilcza-s-maslko-i-chesn", "Пилешки крилца с маслко и чесън", "4,90", "450", ""],
["", "pateshki-srcza-na-skara", "Патешки сърца на скара", "3,50", "200", ""],
["", "shunka-s-kashkaval-pane", "Шунка с кашкавал пане", "3,50", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "150", ""],
["", "kashkavalcheta-pane", "Кашкавалчета пане", "4,20", "250", ""],
["", "sirencza-v-panirovka", "Сиренца в панировка", "3,50", "280", ""],
["", "khrupkavi-topeni-sirencza", "Хрупкави топени сиренца", "2,80", "180", ""],
["", "ezik-natyur", "Език натюр", "3,50", "150", ""],
["", "ezik-pane", "Език пане", "4,20", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "300", ""],
["", "gbi-v-maslo-i-chesn", "Гъби в масло и чесън", "2,80", "200", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "230", ""],
["", "kartofi-na-baba", "Картофи на баба", "2,10", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "zapechen-bekon-s-gbi-i-topeno-sirene", "Запечен бекон с гъби и топено сирене", "3,50", "300", ""],
["", "khrupkavi-khapki-bri-ss-sladko-ot-borovinki", "Хрупкави хапки Бри със сладко от боровинки", "4,90", "250", ""],
["", "kamember-v-panirovka-i-sladko-ot-smokini", "Камембер в панировка и сладко от смокини", "4,90", "260", ""],
["", "zeleni-asperzhi-v-maslko-i-parmezan", "Зелени аспержи в маслко и пармезан", "5,60", "170", ""],
["", "tarama-khajver", "Тарама хайвер", "2,80", "150", ""],
["", "set-ot-tri-razyadki", "Сет от три разядки", "4,90", "350", ""]

            ],

            "Ястия по автентични рецепти": [
                ["", "spageti-karbonara", "Спагети Карбонара", "4,90", "450", ""],
["", "taliateli-s-artishok-i-pryasna-nadenicza", "Талиатели с артишок и прясна наденица", "4,90", "420", ""],
["", "picza-margarita", "Пица Маргарита", "3,50", "400", ""],
["", "picza-s-artishok", "Пица с артишок", "4,90", "500", ""],
["", "picza-dzhenoveze", "Пица Дженовезе", "4,90", "500", ""],
["", "picza-salmone", "Пица Салмоне", "5,60", "500", ""],
["", "picza-s-proshuto-krudo", "Пица с прошуто крудо", "6,30", "500", ""],
["", "picza-s-karameliziran-luk", "Пица с карамелизиран лук", "4,90", "420", ""],
["", "picza-s-chorizo", "Пица с чоризо", "5,60", "500", ""]

            ],

            "grill": [
                ["", "svinska-przhola", "Свинска пържола", "5,60", "200", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,90", "400", ""],
["", "bolyarsko-kyufte", "Болярско кюфте", "2,80", "200", ""],
["", "pryasna-nadenicza", "Прясна наденица", "2,80", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "110", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "kyufte", "Кюфте", "0,70", "90", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "4,90", "200", ""],
["", "srbski-kebapcheta", "Сръбски кебапчета", "5,60", "400", ""],
["", "ushhipczi", "Ущипци", "5,60", "400", ""]

            ],

            "Меню за приятели": [
                ["", "krchmarska-salata", "Кръчмарска салата", "8,40", "1100", ""],
["", "asorti", "Асорти", "7,70", "980", ""],
["", "menyu-bolyarki", "Меню Болярки", "11,90", "930", ""],
["", "meshani-mesa", "Мешани меса", "17,50", "1100", ""],
["", "kasapski-shashlik", "Касапски шашлик", "8,40", "450", ""],
["", "petlov-shashlik", "Петльов шашлик", "7,00", "450", ""],
["", "plato-ot-sirena", "Плато от сирена", "10,50", "400", ""]

            ],

            "Сачове, запеканки, ястия на фурна": [
                ["", "sach-zelenchuczi", "Сач-зеленчуци", "3,50", "400", ""],
["", "sach-shkembe-s-kashkaval", "Сач-шкембе с кашкавал", "3,50", "300", ""],
["", "sach-agneshka-glavichka", "Сач-агнешка главичка", "4,20", "", ""],
["", "sach-gbi-s-kashkaval", "Сач-гъби с кашкавал", "4,20", "300", ""],
["", "sach-pileshki-filencza-s-bekon-i-zelenchuczi", "Сач-пилешки филенца с бекон и зеленчуци", "6,30", "400", ""],
["", "sach-ss-svinsko-meso-i-zelenchuczi", "Сач със свинско месо и зеленчуци", "6,30", "400", ""],
["", "sach-pileshki", "Сач-пилешки", "6,30", "450", ""],
["", "sach-svinski", "Сач-свински", "6,30", "450", ""],
["", "pileshka-zapekanka", "Пилешка запеканка", "2,80", "400", ""],
["", "shunkova-zapekanka", "Шункова запеканка", "2,80", "400", ""],
["", "vegetarianska-zapekanka", "Вегетарианска запеканка", "2,80", "400", ""],
["", "mandradzhijska-zapekanka", "Мандраджийска запеканка", "2,80", "400", ""],
["", "zapekanka-s-kajma", "Запеканка с кайма", "2,80", "400", ""],
["", "zapekanka-ss-svinski-ezik", "Запеканка със свински език", "3,50", "400", ""],
["", "ladijki", "Ладийки", "2,80", "300", ""],
["", "pileshko-file-s-gbi-i-kashkaval", "Пилешко филе с гъби и кашкавал", "4,90", "300", ""],
["", "pileshko-file-khavaj", "Пилешко филе Хавай", "4,90", "300", ""],
["", "pileshko-file-s-gorchicza-i-kashkaval", "Пилешко филе с горчица и кашкавал", "4,90", "300", ""],
["", "speczialitet-naslada", "Специалитет наслада", "6,30", "600", ""],
["", "pileshki-khapki-v-smetanov-sos-s-gbi-i-kashkaval", "Пилешки хапки в сметанов сос с гъби и кашкавал", "5,60", "400", ""],
["", "soleni-palachinki", "Солени палачинки", "4,90", "", ""],
["", "bolyarska-torbichka", "Болярска торбичка", "6,30", "450", ""],
["", "pileshki-khapki-svezhest", "Пилешки хапки свежест", "6,30", "500", ""]

            ],

            "specialties": [
                ["", "pile-teriyaki", "Пиле терияки", "5,60", "390", ""],
["", "bolyarska-mogila", "Болярска могила", "5,60", "480", ""],
["", "pileshki-pncheta-podneseni-vrkhu-zadusheni-zelenchuczi", "Пилешки пънчета, поднесени върху задушени зеленчуци", "6,30", "480", ""],
["", "katino-meze", "Катино мезе", "5,60", "400", ""],
["", "pile-bis", "Пиле Бис", "5,60", "380", ""],
["", "pile-khudini", "Пиле Худини", "5,60", "400", ""],
["", "khrupkavo-pile", "Хрупкаво пиле", "6,30", "350", ""],
["", "kebap-po-silistrenski", "Кебап по Силистренски", "5,60", "450", ""],
["", "obezkosten-svinski-dzholan-v-sobsven-sos", "Обезкостен свински джолан в собсвен сос", "5,60", "360", ""],
["", "svinska-przhola-na-tigan-v-gben-sos", "Свинска пържола на тиган в гъбен сос", "5,60", "300", ""],
["", "svinski-kareta-na-tigan-v-gben-sos", "Свински карета на тиган в гъбен сос", "5,60", "300", ""],
["", "burger", "Бургер", "4,20", "430", ""],
["", "chijzburger", "Чийзбургер", "4,90", "450", ""],
["", "burger-s-teleshko-kyufte-i-bekon", "Бургер с телешко кюфте и бекон", "4,90", "450", ""],
["", "burger-chikn", "Бургер чикън", "4,90", "450", ""],
["", "paelya", "Паеля", "6,30", "350", ""],
["", "paelya-s-pileshko-file", "Паеля с пилешко филе", "6,30", "350", ""]

            ],

            "pizza": [
                ["", "domenika", "Доменика", "4,20", "", ""],
["", "margarita", "Маргарита", "2,80", "", ""],
["", "gbena", "Гъбена", "2,80", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "luchiana", "Лучиана", "3,50", "", ""],
["", "sirenata", "Сирената", "4,20", "", ""],
["", "chetiri-sezona", "Четири сезона", "3,50", "", ""],
["", "figaro", "Фигаро", "4,20", "", ""],
["", "kalczone", "Калцоне", "4,20", "", ""],
["", "selena", "Селена", "3,50", "", ""],
["", "italiya", "Италия", "3,50", "", ""],
["", "chiken", "Чикен", "3,50", "", ""],
["", "asorti", "Асорти", "3,50", "", ""],
["", "venecziyana", "Венецияна", "3,50", "", ""],
["", "neapolitana", "Неаполитана", "3,50", "", ""],
["", "salsiche", "Салсиче", "3,50", "", ""],
["", "milana", "Милана", "2,80", "", ""],
["", "proshuto", "Прошуто", "3,50", "", ""],
["", "veritas", "Веритас", "4,20", "", ""],
["", "kastelo", "Кастело", "3,50", "", ""],
["", "gustozo", "Густозо", "3,50", "", ""],
["", "el-maf", "Ел Маф", "4,20", "", ""],
["", "toskana", "Тоскана", "3,50", "", ""],
["", "verona", "Верона", "3,50", "", ""],
["", "morski-dar", "Морски дар", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "marinara", "Маринара", "4,20", "", ""],
["", "khavaj", "Хавай", "3,50", "", ""],
["", "salami", "Салами", "3,50", "", ""],
["", "liberta", "Либерта", "3,50", "", ""],
["", "piperoni", "Пиперони", "3,50", "", ""],
["", "prolet", "Пролет", "3,50", "", ""],
["", "alfredo", "Алфредо", "4,20", "", ""]

            ],

            "Паста, ризото, лазаня": [
                ["", "milanski-spageti", "Милански спагети", "4,20", "500", ""],
["", "spageti-karbonare", "Спагети Карбонаре", "4,90", "500", ""],
["", "vegetarianski-spagei", "Вегетариански спагеи", "4,20", "500", ""],
["", "spageti-bolyarki", "Спагети Болярки", "4,90", "500", ""],
["", "spageti-sicziliya", "Спагети Сицилия", "4,20", "500", ""],
["", "spageti-dukesa", "Спагети Дукеса", "4,90", "500", ""],
["", "spageti-chetiri-sirena", "Спагети четири сирена", "4,20", "500", ""],
["", "spageti-marcziliya", "Спагети Марцилия", "4,90", "500", ""],
["", "spageti-v-pikanten-sos", "Спагети в пикантен сос", "4,90", "500", ""],
["", "spageti-s-kyuftencza-ot-patladzhan-i-teleshka-kajma", "Спагети с кюфтенца от патладжан и телешка кайма", "5,60", "530", ""],
["", "taliateli-sochno-pile", "Талиатели сочно пиле", "4,90", "600", ""],
["", "taliateli-ss-spanak", "Талиатели със спанак", "4,90", "500", ""],
["", "kasareche-s-moczarela", "Касарече с моцарела", "4,90", "450", ""],
["", "kasareche-s-pileshko-file", "Касарече с пилешко филе", "6,30", "550", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "3,50", "400", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,20", "400", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "4,20", "300", ""],
["", "rizoto-nero", "Ризото Неро", "5,60", "300", ""],
["", "rizoto-ss-skaridi", "Ризото със скариди", "6,30", "320", ""],
["", "tradiczionna-lazanya", "Традиционна лазаня", "4,20", "500", ""],
["", "lazanya-bolyarki", "Лазаня Болярки", "4,20", "500", ""]

            ],

            "Дарове от морето": [
                ["", "midi-natyur", "Миди натюр", "5,60", "750", ""],
["", "midi-v-maslo", "Миди в масло", "6,30", "750", ""],
["", "midi-s-oriz", "Миди с ориз", "4,90", "700", ""],
["", "skaridi-v-maslo", "Скариди в масло", "7,70", "170", ""],
["", "skaridi-v-pikanten-sos", "Скариди в пикантен сос", "8,40", "170", ""],
["", "panirani-kalmari", "Панирани калмари", "5,60", "200", ""],
["", "panirani-kalmari-s-mango-sos-i-susam", "Панирани калмари с манго сос и сусам", "7,00", "220", ""]

            ],

            "garnish": [
                ["", "bob-s-lyutenicza", "Боб с лютеница", "0,70", "150", ""],
["", "oriz", "Ориз", "0,70", "150", ""]

            ],

            "sauces": [
                ["", "chesnov", "Чеснов", "0,70", "80", ""],
["", "majonezen", "Майонезен", "0,70", "80", ""],
["", "pikanten", "Пикантен", "0,70", "80", ""],
["", "domaten", "Доматен", "0,70", "80", ""],
["", "burger-sos", "Бургер сос", "0,70", "80", ""]

            ],

            "Пърленки и хляб": [
                ["", "prlenka", "Пърленка", "1,40", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "150", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "180", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "2,10", "200", ""],
["", "prlenka-s-chesn-sirene-i-kashkaval", "Пърленка с чесън, сирене и кашкавал", "2,10", "210", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "chesnova-filiya-khlyab", "Чеснова филия хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "150", ""],
["", "frenska-palachinak", "Френска палачинак", "2,80", "350", ""],
["", "sladoledena-torta", "Сладоледена торта", "2,10", "350", ""],
["", "plodova-salata-pireya", "Плодова салата Пирея", "2,10", "250", ""],
["", "czedeno-mlyako", "Цедено мляко", "2,10", "250", ""],
["", "torta-provans-v-burkanche", "Торта Прованс в бурканче", "3,50", "280", ""]

            ],

            "additives": [
                ["", "shunka", "шунка", "0,00", "50", ""],
["", "kashkaval", "кашкавал", "0,00", "50", ""],
["", "shpek-salam", "шпек салам", "0,00", "50", ""],
["", "bekon", "бекон", "0,00", "50", ""],
["", "pusheno-pile", "пушено пиле", "0,00", "50", ""],
["", "topeno-sirene", "топено сирене", "0,00", "50", ""],
["", "nadenichka", "наденичка", "0,00", "50", ""],
["", "yajcze", "яйце", "0,00", "50", ""],
["", "lyuta-chushka", "люта чушка", "0,00", "50", ""],
["", "lukanka", "луканка", "0,00", "50", ""],
["", "zelenchuczi", "зеленчуци", "0,00", "50", ""],
["", "sirene-chedr", "сирене чедър", "0,00", "50", ""],
["", "sino-sirene", "синьо сирене", "0,00", "50", ""],
["", "riba-ton", "риба тон", "0,00", "50", ""],
["", "rolcza-ot-raczi", "ролца от раци", "0,00", "50", ""],
["", "skaridi", "скариди", "0,00", "50", ""],
["", "sirene", "сирене", "0,00", "50", ""],
["", "parmezan", "пармезан", "0,00", "50", ""],
["", "moczarela", "моцарела", "0,00", "50", ""],
["", "zekhtin-s-byal-tryufel", "зехтин с бял трюфел", "0,00", "30", ""]

            ],

            "Ядки": [
                ["", "bademi", "Бадеми", "3,50", "100", ""],
["", "fstczi", "Фъстъци", "1,40", "100", ""]

            ]
        }', 
        'slug' => 'restorant-picariya-bolyarki',
        'business_name' => 'Ресторант-Пицария Болярки',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Silistra',
        'region' => 'Silistra',
        'postal_code' => '7504',
        'address' => 'ул. Янко Тодоров 7',
        'address_additional' => '',
        'coords_x' => '44.11959044',
        'coords_y' => '27.27222275',
        'phone' => '+359884533276',
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
