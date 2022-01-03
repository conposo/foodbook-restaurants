<?php

use Carbon\Carbon;
$restaurants = [



    [
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "350", ""],
["", "krem-supa-ot-kartofi-i-morkov", "Крем супа от картофи и морков", "1,40", "350", ""]

            ],

            "salads": [
                ["", "salata-po-izbor-s-3-dobavki", "Салата по избор с 3 добавки", "2,80", "", ""],
["", "salata-po-izbor-s-5-dobavki", "Салата по избор с 5 добавки", "3,50", "", ""],
["", "salata-po-izbor-s-7-dobavki", "Салата по избор с 7 добавки", "4,20", "", ""],
["", "salata-czezar", "Салата Цезар", "2,80", "320", ""],
["", "frenska-salata", "Френска салата", "2,80", "250", ""],
["", "svezha-salata", "Свежа салата", "2,80", "300", ""],
["", "salata-s-ajsberg-i-riba-ton", "Салата с айсберг и риба тон", "2,80", "320", ""],
["", "zelena-salata", "Зелена салата", "2,80", "320", ""]

            ],

            "pizza": [
                ["", "picza-po-svoj-izbor", "Пица по свой избор", "3,50", "", ""],
["", "margarita", "Маргарита", "2,10", "", ""],
["", "parizh", "Париж", "3,50", "", ""],
["", "madrid", "Мадрид", "3,50", "", ""],
["", "sofiya", "София", "3,50", "", ""],
["", "meksiko", "Мексико", "3,50", "", ""],
["", "atina", "Атина", "3,50", "", ""],
["", "nyu-jork", "Ню Йорк", "3,50", "", ""],
["", "vedzhi", "Веджи", "3,50", "", ""],
["", "teramo", "Терамо", "3,50", "", ""],
["", "milano", "Милано", "3,50", "", ""]

            ],

            "desserts": [
                ["", "krem-s-bishkoti", "Крем с бишкоти", "1,40", "120", ""],
["", "shokoladov-mus", "Шоколадов мус", "1,40", "170", ""],
["", "chiya-zakuska", "Чия закуска", "1,40", "250", ""],
["", "krem-maskarpone-s-gorski-plodove", "Крем маскарпоне с горски плодове", "1,40", "180", ""]

            ],

            "Безалкохолни": [
                ["", "ajran", "Айран", "0,70", "500", ""]

            ],

            "beer": [
                ["", "beks", "Бекс", "1,40", "500", ""],
["", "staropramen", "Старопрамен", "1,40", "500", ""],
["", "amstel", "Амстел", "1,40", "500", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/639591.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/639592.jpg?width=302"],
["", "coca-cola-cheresha", "Coca-Cola Череша", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/639593.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/639594.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/639595.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/639596.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/639598.jpg?width=302"],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1058501.jpg?width=302"],
["", "cappy-pulpy-praskova", "Cappy Pulpy Праскова", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1058502.jpg?width=302"],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1058503.jpg?width=302"]

            ],

            "Фреш": [
                ["", "portokal", "Портокал", "1,40", "", ""],
["", "yablka", "Ябълка", "1,40", "", ""],
["", "morkov", "Морков", "1,40", "", ""],
["", "grejpfrut", "Грейпфрут", "1,40", "", ""],
["", "czveklo", "Цвекло", "1,40", "", ""]

            ]
        }', 
        'slug' => 'pizza-place',
        'business_name' => 'Pizza Place',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pernik',
        'region' => 'Pernik',
        'postal_code' => '2300',
        'address' => 'ул. Струма 26',
        'address_additional' => '',
        'coords_x' => '42.602176',
        'coords_y' => '23.0247238',
        'phone' => '+359899378888',
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
        
        "Комбо меню": [
            ["", "raffy-classic-burger-menyu", "Raffy classic бургер меню", "5,60", "", ""],
["", "raffy-chicken-burger-menyu", "Raffy chicken бургер меню", "6,30", "", ""],
["", "tortila-menyu", "Тортила Меню", "5,60", "", ""],
["", "raffy-sandwich-menu", "Raffy sandwich menu", "4,20", "", ""],
["", "picza-menyu-1", "Пица меню 1", "4,90", "1", ""],
["", "picza-menyu-2", "Пица меню 2", "6,30", "2", ""],
["", "picza-menyu-3", "Пица меню 3", "7,70", "3", ""],
["", "picza-menyu-4", "Пица меню 4", "6,30", "4", ""]

        ],

        "Лятно меню": [
            ["", "belen-rozov-domat-s-koze-sirene-i-lista-bosilek", "Белен розов домат с козе сирене и листа босилек", "3,50", "350", ""],
["", "khajver-ot-patladzhan-s-orekhi-i-takhan", "Хайвер от патладжан с орехи и тахан", "2,80", "200", ""],
["", "skumriya-na-plocha-ss-salata-miks", "Скумрия на плоча със салата микс", "5,60", "350", ""],
["", "khumus", "Хумус", "4,90", "250", ""],
["", "tarama-khajver-s-prepechen-khlyab", "Тарама хайвер с препечен хляб", "2,80", "200", ""],
["", "safrid-pane-ss-sos-ot-aromatni-bilki", "Сафрид пане със сос от ароматни билки", "5,60", "280", ""],
["", "pstrva-v-khartiya-s-maslini-i-zapechen-kartof", "Пъстърва в хартия с маслини и запечен картоф", "6,30", "400", ""],
["", "pileshko-shishche", "Пилешко шишче", "4,90", "", ""],
["", "pileshki-panirani-khapki-s-mlechen-sos", "Пилешки панирани хапки с млечен сос", "4,20", "200", ""],
["", "domashen-kartofen-chips", "Домашен картофен чипс", "2,80", "150", ""],
["", "torta-s-lajm-i-bz", "Торта с лайм и бъз", "1,40", "160", ""]

        ],

        "Ice Cream Weekend -30%": [
            ["", "rikota-s-malini", "Рикота с Малини", "6,30", "", ""],
["", "miks-byal-i-kafyav-techen-shokolad", "Микс бял и кафяв течен шоколад", "6,30", "", ""],
["", "kafyav-techen-shokolad", "Кафяв течен шоколад", "6,30", "", ""],
["", "byal-techen-shokolad", "Бял течен шоколад", "6,30", "", ""]

        ],

        "Pizza Day -30%": [
            ["", "picza-khavaj", "Пица Хавай", "4,20", "", ""],
["", "picza-meksikana", "Пица Мексикана", "4,20", "", ""],
["", "picza-pile-i-smetana", "Пица Пиле и сметана", "4,20", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "peperoni", "Пеперони", "4,20", "", ""]

        ],

        "Промо меню": [
            ["", "futomaki-pile", "Футомаки пиле", "2,80", "", ""],
["", "set-somga-sushi", "Сет Сьомга суши", "14,00", "", ""],
["", "futomaki-somga-i-krastavicza", "Футомаки сьомга и краставица", "4,90", "", ""],
["", "futomaki-fresh", "Футомаки фреш", "3,50", "", ""],
["", "futomaki-surimi", "Футомаки сурими", "2,80", "", ""],
["", "futomaki-set", "Футомаки сет", "14,00", "", ""]

        ],

        "sushi": [
            ["", "nigiri-pushena-somga", "Нигири пушена сьомга", "4,20", "", ""],
["", "nigiri-somga", "Нигири сьомга", "4,20", "", ""],
["", "nigiri-ton", "Нигири тон", "4,20", "", ""],
["", "tigr", "Тигър", "9,80", "", ""],
["", "fyuzhn", "Фюжън", "9,80", "", ""],
["", "set-somga-sushi", "Сет Сьомга суши", "19,60", "", ""],
["", "set-khosomaki", "Сет Хосомаки", "13,30", "", ""],
["", "set-kaliforniya", "Сет Калифорния", "13,30", "", ""],
["", "set-samuraj", "Сет Самурай", "17,50", "", ""],
["", "set-raffy", "Сет Raffy", "15,40", "", ""],
["", "uramaki-filadelfiya-surimi", "Урамаки филаделфия сурими", "3,50", "", ""],
["", "khrupkava-tempura", "Хрупкава темпура", "4,20", "", ""],
["", "uramaki-filadelfiya-ton", "Урамаки филаделфия тон", "3,50", "", ""],
["", "kaliforniya-skarida-tempura", "Калифорния скарида темпура", "3,50", "", ""],
["", "norvezhka-gora", "Норвежка гора", "4,20", "", ""],
["", "uramaki-filadelfiya-i-somga", "Урамаки филаделфия и сьомга", "3,50", "", ""],
["", "khosomaki-somga-i-krastavicza", "Хосомаки сьомга и краставица", "4,90", "", ""],
["", "khosomaki-filadelfiya-i-krastavicza", "Хосомаки филаделфия и краставица", "3,50", "", ""],
["", "khosomaki-filadelfiya-i-avokado", "Хосомаки филаделфия и авокадо", "3,50", "", ""],
["", "khosomaki-krastavicza", "Хосомаки краставица", "2,80", "", ""],
["", "khosomaki-ton-i-krastavicza", "Хосомаки тон и краставица", "4,90", "", ""],
["", "futomaki-fish", "Футомаки фиш", "9,80", "", ""],
["", "futomaki-somga-i-avokado", "Футомаки сьомга и авокадо", "7,00", "", ""],
["", "khameleon", "Хамелеон", "9,80", "", ""],
["", "oshi-filadelfiya-i-avokado", "Оши филаделфия и авокадо", "4,20", "", ""],
["", "futomaki-pink", "Футомаки пинк", "4,90", "", ""],
["", "futo-pikantno-pile", "Футо пикантно пиле", "4,20", "", ""],
["", "uramaki-vulkan", "Урамаки Вулкан", "2,80", "", ""],
["", "uramaki-sepiya", "Урамаки сепия", "2,80", "", ""],
["", "nigiri-zmiorka", "Нигири змиорка", "3,50", "", ""],
["", "khosomaki-pushena-somga-i-krastavicza", "Хосомаки пушена сьомга и краставица", "4,90", "", ""],
["", "set-khroma", "Сет Хрома", "41,30", "", ""],
["", "salata-uakame", "Салата уакаме", "4,90", "200", ""],
["", "chirashi-skaridi", "Чираши скариди", "6,30", "250", ""],
["", "nindzha-set", "Нинджа сет", "21,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/845769.JPG?width=302"],
["", "uramaki-furikake-s-pushena-somga", "Урамаки Фурикаке с пушена сьомга", "6,30", "", ""],
["", "nigiri-somga-tataki-i-unagi", "Нигири сьомга татаки и унаги", "4,90", "", ""],
["", "nigiri-surimi-i-drakon-sos", "Нигири сурими и дракон сос", "4,20", "", ""],
["", "uramaki-filadelfiya-i-pushena-somga", "Урамаки филаделфия и пушена сьомга", "3,50", "", ""],
["", "set-ronin", "Сет Ронин", "21,70", "", ""]

        ],

        "Тортила и Бургери": [
            ["", "vegetarianska-tortila-s-nakhut-i-vegan-majoneza", "Вегетарианска тортила с нахут и веган майонеза", "6,30", "320", "https://images.deliveryhero.io/image/fd-bg/Products/598684.jpg?width=302"],
["", "tortila-s-pileshko", "Тортила с пилешко", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/598693.jpg?width=302"],
["", "teleshki-burger", "Телешки бургер", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/598695.JPG?width=302"],
["", "dvoen-stek-burger", "Двоен стек бургер", "9,80", "500", "https://images.deliveryhero.io/image/fd-bg/Products/598698.jpg?width=302"],
["", "dvoen-teksas-burger", "Двоен Тексас бургер", "11,20", "500", ""],
["", "khrupkav-pileshki-burger", "Хрупкав пилешки бургер", "5,60", "400", ""],
["", "burger-pile-i-moczarela", "Бургер пиле и моцарела", "4,90", "400", ""]

        ],

        "Fitness food": [
            ["", "byala-riba-na-plocha-ss-zelenchuczi-i-oriz", "Бяла риба на плоча със зеленчуци и ориз", "6,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/963454.jpg?width=302"],
["", "krekhka-somgova-pstrva-ss-zeleni-zelenchuczi-i-pryasna-pasta", "Крехка сьомгова пъстърва със зелени зеленчуци и прясна паста", "9,80", "430", "https://images.deliveryhero.io/image/fd-bg/Products/963460.jpg?width=302"],
["", "somgova-pstrva-na-plocha-s-pechena-czarevicza-i-kinoa", "Сьомгова пъстърва на плоча с печена царевица и киноа", "10,50", "400", "https://images.deliveryhero.io/image/fd-bg/Products/963463.jpg?width=302"],
["", "pueshko-file-su-vid-s-razyadka-tabule-i-oriz", "Пуешко филе Су Вид с разядка Табуле и ориз", "7,70", "420", "https://images.deliveryhero.io/image/fd-bg/Products/963456.jpg?width=302"],
["", "rizoto-s-teleshki-kyuftencza-i-bosilkovo-pesto", "Ризото с телешки кюфтенца и босилково песто", "4,90", "340", "https://images.deliveryhero.io/image/fd-bg/Products/963457.jpg?width=302"],
["", "pileshki-kyufteta", "Пилешки кюфтета", "7,00", "470", "https://images.deliveryhero.io/image/fd-bg/Products/963459.jpg?width=302"],
["", "teleshko-s-oriz", "Телешко с ориз", "13,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/963461.jpg?width=302"]

        ],

        "Веган салати": [
            ["", "zelenchukov-tartar", "Зеленчуков тартар", "7,00", "450", ""],
["", "ispanska-salata-morski-dar", "Испанска салата Морски дар", "10,50", "480", ""]

        ],

        "salads": [
            ["", "salata-czezar", "Салата Цезар", "7,00", "480", "https://images.deliveryhero.io/image/fd-bg/Products/598665.jpg?width=302"],
["", "salata-kapreze", "Салата Капрезе", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/598667.jpg?width=302"],
["", "salata-nicza", "Салата Ница", "9,10", "480", "https://images.deliveryhero.io/image/fd-bg/Products/598669.jpg?width=302"],
["", "salata-raffy", "Салата Raffy", "7,00", "300", "https://images.deliveryhero.io/image/fd-bg/Products/598670.jpg?width=302"],
["", "salata-s-pile-i-yajcze", "Салата с пиле и яйце", "6,30", "330", "https://images.deliveryhero.io/image/fd-bg/Products/598672.jpg?width=302"],
["", "salata-parma", "Салата Парма", "9,10", "300", "https://images.deliveryhero.io/image/fd-bg/Products/598674.jpg?width=302"],
["", "grczka-salata", "Гръцка салата", "6,30", "450", ""],
["", "salata-etazhi", "Салата Етажи", "6,30", "630", "https://images.deliveryhero.io/image/fd-bg/Products/598676.jpg?width=302"],
["", "salata-ss-spanak-i-kinoa", "Салата със спанак и киноа", "7,00", "330", "https://images.deliveryhero.io/image/fd-bg/Products/598677.jpg?width=302"],
["", "salata-kob", "Салата Коб", "11,20", "400", ""]

        ],

        "pasta": [
            ["", "taliateli-karbonara", "Талиатели Карбонара", "7,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/598711.jpg?width=302"],
["", "pene-s-pile", "Пене с пиле", "7,70", "520", ""],
["", "pene-baziliko", "Пене Базилико", "5,60", "430", ""],
["", "pene-kuatro-formadzhi", "Пене Куатро формаджи", "5,60", "490", ""],
["", "pene-tono", "Пене Тоно", "7,00", "500", ""],
["", "spageti-boloneze", "Спагети Болонезе", "6,30", "550", "https://images.deliveryhero.io/image/fd-bg/Products/598718.jpg?width=302"],
["", "pene-ss-svinsko", "Пене със свинско", "7,70", "450", "https://images.deliveryhero.io/image/fd-bg/Products/701423.JPG?width=302"],
["", "spageti-ss-skaridi", "Спагети със скариди", "7,70", "350", "https://images.deliveryhero.io/image/fd-bg/Products/701422.JPG?width=302"],
["", "taliateli-rustikana", "Талиатели Рустикана", "9,10", "600", "https://images.deliveryhero.io/image/fd-bg/Products/598710.jpg?width=302"],
["", "rizoto-pile", "Ризото пиле", "6,30", "600", "https://images.deliveryhero.io/image/fd-bg/Products/598721.jpg?width=302"],
["", "rizoto-zelenchuczi", "Ризото зеленчуци", "5,60", "500", "https://images.deliveryhero.io/image/fd-bg/Products/598722.JPG?width=302"],
["", "imperatorski-oriz-ss-somga", "Императорски ориз със сьомга", "11,90", "480", "https://images.deliveryhero.io/image/fd-bg/Products/598723.jpg?width=302"],
["", "pene-arabiata", "Пене Арабиата", "7,00", "470", ""],
["", "vegan-fusili-s-tofu", "Веган фусили с тофу", "6,30", "370", ""]

        ],

        "Топли предястия": [
            ["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "6,30", "350", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "2,80", "220", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "3,50", "300", ""],
["", "domashen-kartofen-chips", "Домашен картофен чипс", "2,80", "150", ""]

        ],

        "chicken": [
            ["", "pile-kapreze", "Пиле Капрезе", "9,10", "480", ""],
["", "pile-ss-sladka-gorchicza-i-smetana", "Пиле със сладка горчица и сметана", "7,00", "470", "https://images.deliveryhero.io/image/fd-bg/Products/598727.JPG?width=302"],
["", "pile-moczarela", "Пиле Моцарела", "9,10", "450", ""],
["", "pile-shafran", "Пиле Шафран", "9,10", "430", ""],
["", "pile-s-topeno-sirene-i-zelenchuczi", "Пиле с топено сирене и зеленчуци", "7,00", "330", ""],
["", "pile-s-brokoli-i-karfiol", "Пиле с броколи и карфиол", "7,70", "350", ""],
["", "pileshki-kyufteta", "Пилешки кюфтета", "7,00", "500", ""],
["", "pile-teriyaki", "Пиле Терияки", "7,00", "480", ""]

        ],

        "pizza": [
            ["", "shunka-i-gbi", "Шунка и гъби", "4,90", "", ""],
["", "moczarela-s-ventrichina", "Моцарела с Вентричина", "7,00", "450", ""],
["", "picza-vetrilo", "Пица Ветрило", "4,20", "", ""],
["", "picza-proshuto-krudo", "Пица Прошуто крудо", "4,20", "", ""],
["", "peperoni", "Пеперони", "4,20", "", ""],
["", "chetiri-sirena", "Четири сиренa", "4,20", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "raffy--speczialna", "Raffy – специална", "4,90", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,20", "", ""]

        ],

        "fish": [
            ["", "somga-s-imperatorski-oriz", "Сьомга с императорски ориз", "13,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/701434.JPG?width=302"],
["", "kyufteta-ot-somga-s-fusili", "Кюфтета от сьомга с фусили", "11,20", "450", ""],
["", "byala-riba-s-bejbi-morkovi-i-zelen-fasul", "Бяла риба с бейби моркови и зелен фасул", "7,00", "350", ""]

        ],

        "veal": [
            ["", "teleshko-s-gbi-i-imperatorski-oriz", "Телешко с гъби и императорски ориз", "21,00", "480", "https://images.deliveryhero.io/image/fd-bg/Products/701438.JPG?width=302"],
["", "teleshko-bon-file-s-cheri-i-rukola", "Телешко бон филе с чери и рукола", "17,50", "280", ""],
["", "teleshko-s-oriz", "Телешко с ориз", "13,30", "300", ""],
["", "teriyaki-s-teleshko", "Терияки с телешко", "14,00", "380", ""],
["", "klasicheski-teleshki-shniczel-s-kartofena-salata", "Класически телешки шницел с картофена салата", "9,10", "", ""],
["", "teleshki-kyufteta-s-kartofeni-kroketi-i-domashna-salcza", "Телешки кюфтета с картофени крокети и домашна салца", "8,40", "460", ""],
["", "teleshko-s-oriz", "Телешко с ориз", "19,60", "500", ""],
["", "teleshki-kyufteta-s-oriz-i-zelenchuczi", "Телешки кюфтета с ориз и зеленчуци", "8,40", "320", ""],
["", "teleshki-kyufteta-ss-sladk-kartof-i-bryukselsko-zele", "Телешки кюфтета със сладък картоф и брюкселско зеле", "10,50", "410", ""]

        ],

        "Плата и студени и предястия": [
            ["", "brusketi-pushena-somga-i-filadelfiya", "Брускети пушена сьомга и филаделфия", "10,50", "", ""],
["", "plato-rosini", "Плато Росини", "13,30", "490", ""],
["", "brusketi-pomodoro-ss-somga", "Брускети помодоро със сьомга", "5,60", "", ""],
["", "brusketi-moczarela", "Брускети моцарела", "5,60", "", ""],
["", "brusketi-s-proshuto", "Брускети с прошуто", "7,70", "", ""],
["", "plato-brusketi-ss-susheni-domati-i-katk", "Плато брускети със сушени домати и катък", "7,00", "350", ""],
["", "vegan-plato-kharmoniya", "Веган плато Хармония", "5,60", "", ""]

        ],

        "Wok": [
            ["", "zhlto-taj-kri-s-pile", "Жълто тай къри с пиле", "10,50", "450", "https://images.deliveryhero.io/image/fd-bg/Products/598818.jpg?width=302"],
["", "nudli-ss-skaridi", "Нудли със скариди", "13,30", "400", ""]

        ],

        "pork": [
            ["", "svinsko-s-borovinkov-dresing", "Свинско с боровинков дресинг", "9,10", "", ""],
["", "svinski-karencza-s-kartofena-salata", "Свински каренца с картофена салата", "7,70", "", ""]

        ],

        "BBQ": [
            ["", "nashensko-plato", "Нашенско плато", "14,70", "", ""],
["", "svinski-kotlet-tip-bedrok-s-pecheni-kartofi", "Свински котлет тип Бедрок с печени картофи", "9,80", "500", ""]

        ],

        "additives": [
            ["", "somga", "Сьомга", "3,50", "60", ""],
["", "proshuto", "Прошуто", "1,40", "40", ""],
["", "bekon", "Бекон", "0,70", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "parmezan", "Пармезан", "0,70", "25", ""],
["", "moczarela", "Моцарела", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "25", ""],
["", "maslini", "Маслини", "0,00", "60", ""],
["", "domati", "Домати", "0,00", "60", ""],
["", "chushki", "Чушки", "0,00", "50", ""],
["", "sirene", "Сирене", "0,70", "80", ""]

        ],

        "Сладоледи": [
            ["", "sladoled-yagoda", "Сладолед Ягода", "2,10", "", ""],
["", "sladoled-menta-s-shokolad", "Сладолед Мента с шоколад", "2,10", "", ""],
["", "sladoled-strachiatela", "Сладолед Страчиатела", "2,10", "", ""],
["", "sladoled-gorski-plodove", "Сладолед Горски плодове", "2,10", "", ""],
["", "sladoled-kafyav-techen-shokolad", "Сладолед Кафяв течен шоколад", "2,10", "", ""],
["", "sladoled-byal-techen-shokolad", "Сладолед Бял течен шоколад", "2,10", "", ""],
["", "sladoled-maskarpone-s-praskovi", "Сладолед Маскарпоне с праскови", "2,10", "", ""],
["", "sladoled-rikota-s-malini", "Сладолед Рикота с малини", "2,10", "", ""]

        ],

        "desserts": [
            ["", "krem-maskarpone-s-yagodi", "Крем маскарпоне с ягоди", "2,80", "170", ""],
["", "krem-oreo-s-maskarpone", "Крем орео с маскарпоне", "2,80", "170", ""],
["", "sufle-s-mlechen-shokolad", "Суфле с млечен шоколад", "4,20", "250", ""],
["", "palachinki-noazet", "Палачинки Ноазет", "4,90", "", ""],
["", "bostnski-chijzkejk", "Бостънски чийзкейк", "2,10", "", ""],
["", "domashna-biskvitena-torta-s-nutela", "Домашна бисквитена торта с Нутела", "2,80", "", ""],
["", "frenska-selska-torta-s-borovinki", "Френска селска торта с боровинки", "2,10", "", ""],
["", "gofreta-shoko-nts", "Гофрета шоко нътс", "7,00", "500", ""]

        ],

        "sauces": [
            ["", "chesnov-s-majoneza", "Чеснов с майонеза", "0,70", "50", ""],
["", "chesnov-mlechen", "Чеснов млечен", "0,70", "50", ""]

        ],

        "drinks": [
            ["", "mineralna-voda", "Минерална вода", "0,70", "330", ""],
["", "red-bull", "Red Bull", "3,50", "250", ""],
["", "fresh-yablka", "Фреш Ябълка", "3,50", "500", ""],
["", "fresh-morkovi", "Фреш Моркови", "3,50", "500", ""],
["", "fresh-yablki--morkovi--dzhindzhifil", "Фреш Ябълки & Моркови & Джинджифил", "3,50", "500", ""],
["", "fresh-morkovi--spanak--czveklo", "Фреш Моркови & Спанак & Цвекло", "3,50", "500", ""],
["", "mineralna-voda-perrier", "Минерална вода Perrier", "2,80", "330", ""],
["", "mineralna-voda-perrier", "Минерална вода Perrier", "7,00", "750", ""],
["", "limonada-mango", "Лимонада Манго", "4,20", "400", ""],
["", "limonada-cheri", "Лимонада Чери", "4,20", "400", ""],
["", "limonada-yagoda", "Лимонада Ягода", "4,20", "400", ""],
["", "limonada-dinya", "Лимонада Диня", "4,20", "400", ""]

        ],

        "Coca-Cola напитки": [
            ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/779898.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/779899.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/779900.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/779901.jpg?width=302"],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/779902.jpg?width=302"],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1058351.jpg?width=302"]

        ],

        "beer": [
            ["", "stela-artoa", "Стела Артоа", "2,10", "330", ""],
["", "staropramen", "Старопрамен", "2,10", "330", ""],
["", "beks", "Бекс", "2,10", "330", ""],
["", "kamenicza", "Каменица", "1,40", "330", ""],
["", "m", "М", "2,80", "330", ""],
["", "korona", "Корона", "4,20", "355", ""],
["", "lefe", "Лефе", "2,80", "330", ""],
["", "lefe-tmno", "Лефе тъмно", "2,80", "330", ""],
["", "francziskaner", "Францисканер", "4,20", "500", ""],
["", "khukhardn", "Хухардън", "2,80", "330", ""],
["", "stela-artoa-bezalkokholen", "Стела Артоа безалкохолен", "2,10", "330", ""],
["", "stela-artoa-ken", "Стела Артоа кен", "2,10", "500", ""],
["", "beks-ken", "Бекс кен", "1,40", "500", ""],
["", "staropramen-ken", "Старопрамен кен", "1,40", "500", ""],
["", "kamenicza-ken", "Каменица кен", "1,40", "500", ""]

        ],

        "wine": [
            ["", "edoardo-mirolio-em", "Едоардо Миролио ЕМ", "24,50", "750", ""],
["", "katarzhina-estejt-contemplations", "Катаржина Естейт Contemplations", "20,30", "750", ""],
["", "katarzhina-estejt-contemplations", "Катаржина Естейт Contemplations", "8,40", "375", ""],
["", "edoardo-mirolio-bio-vino", "Eдоардо Миролио Био вино", "18,90", "750", ""],
["", "edoardo-mirolio-soli", "Едоардо Миролио Соли", "14,70", "750", ""],
["", "katarzhina-estejt-le", "Катаржина Естейт LE", "25,90", "750", ""],
["", "katarzhina-estejt-mezek", "Катаржина Естейт Мезек", "14,70", "750", ""],
["", "new-bloom-pixels", "New Bloom Pixels", "16,80", "750", ""],
["", "new-bloom-verano-azur", "New Bloom Verano Azur", "13,30", "750", ""],
["", "elegans-sira-zhozef-kastan-pej-dok-francziya", "Елеганс Сира, Жозеф Кастан, Пей д‘Ок, Франция", "17,50", "750", ""],
["", "frontera-koncha-i-toro-chili", "Фронтера, Конча и Торо, Чили", "17,50", "750", ""],
["", "sajkl", "Сайкъл", "13,30", "750", ""],
["", "sajkl", "Сайкъл", "7,70", "375", ""],
["", "le-fyume-blansh-sovinon-blan", "Ле Фюме Бланш Совиньон Блан", "14,70", "", ""],
["", "fotograf", "Фотограф", "25,20", "750", ""],
["", "zhame-vyu", "Жаме Вю", "28,70", "750", ""],
["", "fotograf", "Фотограф", "13,30", "375", ""]

        ],

        "bread": [
            ["", "chesnovi-prchiczi-s-rigan-i-chesnov-sos", "Чеснови пръчици с риган и чеснов сос", "3,50", "220", ""],
["", "fokacha-s-kashkaval", "Фокача с кашкавал", "2,10", "370", ""],
["", "fokacha-s-maslini-i-cheri-domati", "Фокача с маслини и чери домати", "2,10", "370", ""]

        ]
    }', 
    'slug' => 'raffy-bar',
    'business_name' => 'Raffy Bar &amp; Gelato',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Sofia',
    'region' => 'Sofia',
    'postal_code' => '1000',
    'address' => 'ул. Шипка 9',
    'address_additional' => '',
    'coords_x' => '42.69356821',
    'coords_y' => '23.34019987',
    'phone' => '+359877311111',
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
        
        "Меню": [
            ["", "khamburger-menyu", "Хамбургер меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/640214.jpg?width=302"],
["", "chijztost-menyu", "Чийзтост меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/640215.jpg?width=302"],
["", "chijzburger-menyu", "Чийзбургер меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/640217.jpg?width=302"],
["", "pileshki-burger-menyu", "Пилешки бургер меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/640218.jpg?width=302"],
["", "big-tejsti-menyu", "Биг Тейсти™ меню", "9,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/640225.jpg?width=302"],
["", "chikn-maknagets-menyu", "Чикън МакНагетс™ меню", "9,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/640226.jpg?width=302"],
["", "pileshki-krilcza-menyu", "Пилешки крилца меню", "10,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/640227.jpg?width=302"],
["", "troen-chijzburger-menyu", "Троен чийзбургер меню", "7,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/640234.jpg?width=302"],
["", "file-o-fish-menyu", "Филе-О-Фиш™ меню", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/640221.jpg?width=302"],
["", "chikn-maknagets-menyu", "Чикън МакНагетс™ меню", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/640223.jpg?width=302"],
["", "pileshki-krilcza-menyu", "Пилешки крилца меню", "7,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/640224.jpg?width=302"],
["", "klasik-bijf-makrap-menyu", "Класик бийф МакРап™ меню", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/640228.jpg?width=302"],
["", "krispi-chikn-makrap-menyu", "Криспи чикън МакРап™ меню", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/640229.jpg?width=302"],
["", "dvoen-chijzburger-menyu", "Двоен Чийзбургер меню", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/640219.jpg?width=302"],
["", "big-mak-menyu", "Биг Мак™ меню", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/640220.jpg?width=302"],
["", "makchikn-menyu", "МакЧикън™ меню", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/640222.jpg?width=302"],
["", "nyu-jork-speshl-bijf-makmenyu", "Ню Йорк Спешъл Бийф МакМеню", "10,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1007027.jpg?width=302"],
["", "chikago-chikn-klasik-makmenyu", "Чикаго Чикън Класик МакМеню", "10,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1007028.jpg?width=302"],
["", "maktost-menyu", "МакТост Меню", "4,90", "", ""]

        ],

        "burgers": [
            ["", "khamburger", "Хамбургер", "1,40", "105", "https://images.deliveryhero.io/image/fd-bg/Products/602530.jpg?width=302"],
["", "chijzburger", "Чийзбургер", "2,10", "115", "https://images.deliveryhero.io/image/fd-bg/Products/602531.jpg?width=302"],
["", "pileshki-burger", "Пилешки бургер", "2,10", "110", "https://images.deliveryhero.io/image/fd-bg/Products/602532.jpg?width=302"],
["", "dvoen-chijzburger", "Двоен чийзбургер", "4,90", "170", "https://images.deliveryhero.io/image/fd-bg/Products/602534.jpg?width=302"],
["", "big-mak", "Биг Мак™", "4,90", "217", "https://images.deliveryhero.io/image/fd-bg/Products/602535.jpg?width=302"],
["", "file-o-fish", "Филе-О-Фиш™", "4,90", "137", "https://images.deliveryhero.io/image/fd-bg/Products/602536.jpg?width=302"],
["", "makchikn", "МакЧикън™", "4,90", "178", "https://images.deliveryhero.io/image/fd-bg/Products/602537.jpg?width=302"],
["", "bigtejsti", "БигТейсти™", "7,00", "341", "https://images.deliveryhero.io/image/fd-bg/Products/602538.jpg?width=302"],
["", "chijztost", "ЧийзТост", "1,40", "80", "https://images.deliveryhero.io/image/fd-bg/Products/602539.jpg?width=302"],
["", "klasik-bijf-makrap", "Класик бийф МакРап™", "6,30", "207", "https://images.deliveryhero.io/image/fd-bg/Products/640246.jpg?width=302"],
["", "krispi-chikn-makrap", "Криспи чикън МакРап™", "6,30", "208", "https://images.deliveryhero.io/image/fd-bg/Products/602542.jpg?width=302"],
["", "troen-chijzburger", "Троен чийзбургер", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/626031.jpg?width=302"],
["", "nyu-jork-speshl-bijf", "Ню Йорк Спешъл Бийф", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/1007016.jpg?width=302"],
["", "chikago-chikn-klasik", "Чикаго Чикън Класик", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/1007017.jpg?width=302"],
["", "maktost", "МакТост™", "2,10", "100", ""]

        ],

        "Сочно пилешко": [
            ["", "chikn-maknagets-9br--", "Чикън МакНагетс™ (9бр -", "7,00", "161", "https://images.deliveryhero.io/image/fd-bg/Products/602547.jpg?width=302"],
["", "sharebox-s-5br-nagets-3br-krilcza-2br-mali-kartofki-i-1br-malka-napitka", "Sharebox с 5бр Нагетс, 3бр крилца, 2бр мали картофки и 1бр малка напитка", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/640257.jpg?width=302"]

        ],

        "Салати и картофки": [
            ["", "sredni-kartofki", "Средни картофки", "2,80", "114", "https://images.deliveryhero.io/image/fd-bg/Products/602562.jpg?width=302"],
["", "mlechen-sos", "Млечен сос", "0,70", "50", ""],
["", "vinegret-sos", "Винегрет сос", "0,70", "50", ""],
["", "sos-sino-sirene", "Сос Синьо сирене", "0,70", "50", ""]

        ],

        "sauces": [
            ["", "mlechen-sos", "Млечен сос", "0,70", "25", "https://images.deliveryhero.io/image/fd-bg/Products/602605.jpg?width=302"],
["", "ketchup", "Кетчуп", "0,70", "10", "https://images.deliveryhero.io/image/fd-bg/Products/602597.jpg?width=302"],
["", "uestrn-sos---lyut", "Уестърн сос - лют", "0,70", "10", "https://images.deliveryhero.io/image/fd-bg/Products/602599.jpg?width=302"],
["", "majoneza", "Майонеза", "0,70", "20", "https://images.deliveryhero.io/image/fd-bg/Products/602600.jpg?width=302"],
["", "sos-barbekyu", "Сос Барбекю", "0,70", "30", "https://images.deliveryhero.io/image/fd-bg/Products/602601.jpg?width=302"],
["", "sladko-kisel-sos", "Сладко-кисел сос", "0,70", "30", "https://images.deliveryhero.io/image/fd-bg/Products/602602.jpg?width=302"],
["", "gorchicza", "Горчица", "0,70", "28", "https://images.deliveryhero.io/image/fd-bg/Products/602603.jpg?width=302"],
["", "kri", "Къри", "0,70", "25", "https://images.deliveryhero.io/image/fd-bg/Products/602604.jpg?width=302"]

        ],

        "Шейкове": [
            ["", "shejk-shokolad", "Шейк Шоколад", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/675980.jpg?width=302"],
["", "shejk-vaniliya", "Шейк Ванилия", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/675981.jpg?width=302"],
["", "shejk-yagoda", "Шейк Ягода", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/675982.jpg?width=302"]

        ],

        "drinks": [
            ["", "liptn-limon", "Липтън лимон", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/640274.jpg?width=302"],
["", "mineralna-voda", "Минерална вода", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "2,80", "330", ""],
["", "soda-gorna-banya", "Сода Горна баня", "1,40", "500", ""],
["", "zagorka", "Загорка", "3,50", "500", ""],
["", "red-bul", "Ред Бул", "4,20", "250", ""],
["", "kapuchino", "Капучино", "2,10", "200", ""],
["", "espreso", "Еспресо", "1,40", "200", ""]

        ],

        "Coca-Cola напитки": [
            ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/640269.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/640270.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/640271.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/640272.jpg?width=302"]

        ],

        "desserts": [
            ["", "mfin-s-nutella", "Мъфин с Nutella®", "3,50", "110", "https://images.deliveryhero.io/image/fd-bg/Products/602780.jpg?width=302"],
["", "yablkov-paj", "Ябълков пай", "2,10", "80", "https://images.deliveryhero.io/image/fd-bg/Products/602776.jpg?width=302"],
["", "dont-s-shokolad", "Донът с шоколад", "1,40", "65", "https://images.deliveryhero.io/image/fd-bg/Products/602781.jpg?width=302"],
["", "parti-dont", "Парти донът", "1,40", "65", "https://images.deliveryhero.io/image/fd-bg/Products/602782.jpg?width=302"],
["", "speczialen-paj", "Специален пай", "2,10", "80", ""],
["", "speczialen-paj-s-vishna", "Специален пай с вишна", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/788308.jpg?width=302"],
["", "mfin-oreo", "Мъфин OREO®", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/788288.jpg?width=302"]

        ],

        "Детско меню": [
            ["", "detsko-menyu---happy-meal-s-khamburger", "Детско меню - Happy Meal™ с хамбургер", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/640289.jpg?width=302"],
["", "detsko-menyu---happy-meal-s-chijzburger", "Детско меню - Happy Meal™  с Чийзбургер", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/640290.jpg?width=302"],
["", "detsko-menyu---happy-meal-s-chikn-maknagets", "Детско меню - Happy Meal™  с Чикън МакНагетс™", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/640291.jpg?width=302"],
["", "detsko-menyu---happy-meal-s-pileshki-burger", "Детско меню - Happy Meal™  с пилешки бургер", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/640293.jpg?width=302"],
["", "detsko-menyu---happy-meal-s-chijztost", "Детско меню - Happy Meal™  с Чийзтост", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/640294.jpg?width=302"],
["", "detsko-menyu---happy-meal-s-mak-tost", "Детско меню - Happy Meal™  с Мак Тост", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/976869.jpg?width=302"]

        ]
    }', 
    'slug' => 'mcdonald-s',
    'business_name' => 'McDonald&#039;s™ (Rock &amp; Roll)',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Sofia',
    'region' => 'Sofia',
    'postal_code' => '1000',
    'address' => 'бул. България 1',
    'address_additional' => '',
    'coords_x' => '42.68246554',
    'coords_y' => '23.31938672',
    'phone' => '+359884000305',
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
        
        "Пици на пещ": [
            ["", "vegetarianska-picza", "Вегетарианска пица", "4,90", "", ""],
["", "picza-s-bekon-shunka-i-pusheno-pile", "Пица с бекон, шунка и пушено пиле", "6,30", "", ""],
["", "picza-s-pusheno-pile-i-czarevicza", "Пица с пушено пиле и царевица", "7,00", "", ""],
["", "picza-s-shunka", "Пица с шунка", "6,30", "", ""],
["", "picza-ss-sudzhuk-shunka-i-bekon", "Пица със суджук, шунка и бекон", "7,00", "", ""],
["", "stroga-vegetarianska-picza", "Строга вегетарианска пица", "4,90", "", ""],
["", "miks-sukhi-mezeta", "Микс сухи мезета", "8,40", "", ""],
["", "picza-s-morski-darove", "Пица с морски дарове", "11,20", "", ""],
["", "picza-s-pikantno-pileshko-file-pikanten-salam-i-emental", "Пица с пикантно пилешко филе, пикантен салам и Ементал", "8,40", "", ""]

        ],

        "Класическа италианска пица на пещ": [
            ["", "gradinarska", "Градинарска", "8,40", "", ""],
["", "dyavolska", "Дяволска", "6,30", "", ""],
["", "kalczone-binokl", "Калцоне Бинокъл", "7,00", "", ""],
["", "kapriz", "Каприз", "7,70", "", ""],
["", "kombinirana-chesnova-pitka", "Комбинирана чеснова питка", "3,50", "", ""],
["", "margerita", "Маргерита", "4,90", "", ""],
["", "napolitana", "Наполитана", "10,50", "", ""],
["", "pitka-marinara", "Питка Маринара", "2,10", "", ""],
["", "picza-s-proshuto-krudo-rukola-i-cheri-domatki", "Пица с прошуто крудо, рукола и чери доматки", "7,00", "", ""],
["", "sofiya", "София", "7,00", "", ""],
["", "chetiri-sezona", "Четири сезона", "7,00", "", ""],
["", "chetiri-sirena", "Четири сирена", "6,30", "", ""],
["", "picza-s-proshuto-krudo-i-gbi", "Пица с Прошуто крудо и гъби", "7,00", "", ""],
["", "byalo-ili-plnozrnesto-khlebche-s-rozmarin-aromaten-zekhtin-i-morska-sol", "Бяло или пълнозърнесто хлебче с розмарин, ароматен зехтин и морска сол", "1,40", "200", ""],
["", "prlenka-s-parmezan-i-rozmarin", "Пърленка с пармезан и розмарин", "3,50", "", ""],
["", "kalczone-s-bekon", "Калцоне с бекон", "7,00", "", ""]

        ],

        "salads": [
            ["", "shopska-salata", "Шопска салата", "5,60", "300", ""],
["", "sredizemnomorska-salata", "Средиземноморска салата", "7,00", "250", ""],
["", "salata-czezar-v-nash-stil", "Салата Цезар в наш стил", "6,30", "350", ""],
["", "orientalska-salata-s-bulgur", "Ориенталска салата с булгур", "7,00", "350", ""],
["", "lyatna-salata-ot-svezhi-zelenchuczi-s-mlechno-gorchichen-dresing-i-limon-v-stil-uoldorf", "Лятна салата от свежи зеленчуци с млечно-горчичен дресинг и лимон в стил Уолдорф", "5,60", "300", ""],
["", "przheni-chorbadzhijski-chushki-s-chesn-i-krem-s-feta-sirene", "Пържени чорбаджийски чушки с чесън и крем с Фета сирене", "6,30", "250", ""],
["", "miks-ot-zeleni-salatki-s-marinovani-presni-pechurki-i-tryufel-razyadka", "Микс от зелени салатки с мариновани пресни печурки и трюфел разядка", "7,00", "300", ""],
["", "gradinska-salata", "Градинска салата", "6,30", "400", ""],
["", "grczka-salata-s-rozovi-domati-kornishoni-i-feta-mus", "Гръцка салата с розови домати, корнишони и фета мус", "7,00", "450", ""],
["", "salata-ot-beleni-domati-s-pechena-chushka-i-sirene-po-izbor", "Салата от белени домати с печена чушка и сирене по избор", "6,30", "300", ""],
["", "ovcharska-salata-ss-sirene-i-domashen-sukh-sudzhuk", "Овчарска салата със сирене и домашен сух суджук", "7,00", "380", ""],
["", "vegan-salata-ot-domati-dva-vida-kinoa-rukola-maslini-i-orekhi", "Веган салата от домати, два вида киноа, рукола, маслини и орехи", "7,00", "300", ""],
["", "salata-s-praskovi-i-zapecheno-frensko-koze-sirene-s-med-i-pikantni-yadki", "Салата с праскови и запечено френско козе сирене с мед и пикантни ядки", "10,50", "300", ""],
["", "stara-severnyashka-salata---razyadka", "Стара северняшка салата - разядка", "5,60", "250", ""]

        ],

        "appetizer": [
            ["", "razyadka-ot-meko-krave-sirene-s-tryufeli", "Разядка от меко краве сирене с трюфели", "6,30", "200", ""],
["", "50-grama-ot-nasheto-meze-i-50-grama-domashen-katk-s-maslo-i-med", "50 грама от нашето мезе и 50 грама домашен катък с масло и мед", "6,30", "120", ""],
["", "tarama-khajver", "Тарама хайвер", "5,60", "120", ""],
["", "proletna-razyadka-s-avokado-krema-sirene-i-orekhi", "Пролетна разядка с авокадо, крема сирене и орехи", "6,30", "140", ""],
["", "plato-ot-nashite-mezeta-zanayatchijski-kashkaval-i-domashni-razyadki", "Плато от нашите мезета, занаятчийски кашкавал и домашни разядки", "16,10", "250", ""],
["", "selekcziya-ot-zanayatchijski-kashkaval-ot-s-smilyan", "Селекция от занаятчийски кашкавал от с. Смилян", "8,40", "200", ""]

        ],

        "starters": [
            ["", "kyuftencza-ot-tikvichki-s-meko---krem-sirene-i-pushen-kashkaval", "Кюфтенца от тиквички с меко - крем сирене и пушен кашкавал", "7,70", "250", ""],
["", "teleshki-ezik-v-maslo-s-pechurka-i-manatarka", "Телешки език в масло с печурка и манатарка", "11,90", "200", ""],
["", "kyuftencza-ot-spanak-s-kinoa-i-sirena", "Кюфтенца от спанак с киноа и сирена", "7,70", "250", ""],
["", "khrupkavi-parmezanovi-kyuftencza-ot-somga-ss-zanayatchijski-pushen-kashkaval", "Хрупкави пармезанови кюфтенца от сьомга със занаятчийски пушен кашкавал", "9,80", "250", ""],
["", "plnena-piperka-byurek-s-razyadka-ot-sirene-kashkaval-i-tryufel", "Пълнена пиперка, бюрек с разядка от сирене, кашкавал и трюфел", "7,00", "200", ""],
["", "zapecheno-frenko-koze-sirene-s-presni-praskovi-i-domashen-praskoven-marmalad-v-medena-smetan-s-pecheni-leshniczi", "Запечено френко козе сирене с пресни праскови и домашен прасковен мармалад в медена сметан с печени лешници", "10,50", "300", ""],
["", "zapecheno-sirene-bri-v-krem-sos-i-domashen-kozunak-ss-stafidi-i-bademi", "Запечено сирене бри в крем сос и домашен козунак със стафиди и бадеми", "8,40", "200", ""],
["", "gshi-drob-s-glazirani-praskovi-v-meden-likor-i-meko-krem-sirene-s-bademi", "Гъши дроб с глазирани праскови в меден ликьор и меко крем сирене с бадеми", "16,80", "250", ""],
["", "zapechen-stek-ot-karfiol-v-kokosovo-maslo-i-pecheni-orekhi-vrkhu-bulgur-ot-zelenchuczi", "Запечен стек от карфиол в кокосово масло и печени орехи върху булгур от зеленчуци", "10,50", "400", ""],
["", "patladzhan-kapreze", "Патладжан Капрезе", "10,50", "350", ""],
["", "khrupkavi-kyuftencza-ot-cherveno-czveklo-i-leshha", "Хрупкави кюфтенца от червено цвекло и леща", "7,00", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "6,30", "200", ""],
["", "zapecheno-stekche-ot-czelina", "Запечено стекче от целина", "10,50", "350", ""]

        ],

        "Ястия на скара и грил тава": [
            ["", "dvojka-teleshki-kyufteta", "Двойка телешки кюфтета", "9,80", "200", ""],
["", "domashni-nadenichki", "Домашни наденички", "7,00", "200", ""],
["", "meshena-skara-na-gril-tava-za-kompaniyata", "Мешена скара на грил тава за компанията", "26,60", "", ""],
["", "svinsko-shareno-meso-na-skara---smenka", "Свинско шарено месо на скара - сменка", "9,80", "200", ""],
["", "pileshko-file-ili-svinski-kareta-na-gril-tava", "Пилешко филе или свински карета на грил тава", "9,80", "350", ""],
["", "tradiczionni-domashni-kebapcheta-s-garnitura", "Традиционни домашни кебапчета с гарнитура", "9,80", "390", ""],
["", "orientalski-pileshki-przholki-na-shish", "Ориенталски пилешки пържолки на шиш", "9,80", "400", ""],
["", "suvlaki-s-pecheni-zelenchuczi", "Сувлаки с печени зеленчуци", "11,20", "300", ""],
["", "selska-tava-s-meso-za-kompaniya", "Селска тава с месо за компания", "26,60", "", ""]

        ],

        "Гарнитура към скарата": [
            ["", "pecheni-kartofi-po-selski-ss-zelen-luk-chesn-i-magdanoz", "Печени картофи по селски със зелен лук, чесън и магданоз", "3,50", "200", ""],
["", "domashno-kopoolu-i-domatki-s-chesn-i-magdanoz", "Домашно кьопоолу и доматки с чесън и магданоз", "3,50", "200", ""]

        ],

        "Бургери в наш стил": [
            ["", "teleshki-burger-black-angus-ss-sirene-chedr", "Телешки бургер Black Angus със сирене чедър", "11,90", "300", ""],
["", "burger-s-khrupkavo-pile-czezar", "Бургер с хрупкаво пиле Цезар", "9,80", "300", ""],
["", "chijz-burger", "Чийз бургер", "9,10", "300", ""]

        ],

        "Ястия с риба и морски дарове": [
            ["", "morski-darove-v-czitrusov-dresing-s-chesn-i-kopr", "Морски дарове в цитрусов дресинг с чесън и копър", "11,90", "200", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "11,90", "200", ""],
["", "przhen-safrid", "Пържен сафрид", "7,00", "250", ""],
["", "zapecheno-file-skumriya-s-pesto-ot-susheni-domati-i-kapersi", "Запечено филе скумрия с песто от сушени домати и каперси", "8,40", "320", ""],
["", "przheni-kalmari-si", "Пържени калмари СИ", "11,90", "220", ""],
["", "pikantni-morski-darove-s-domashno-pesto-ot-susheni-domati-i-kapersi", "Пикантни морски дарове с домашно песто от сушени домати и каперси", "15,40", "200", ""],
["", "przhen-sharan", "Пържен шаран", "7,70", "250", ""],
["", "somga-file-vrkhu-limonovo-rizoto-s-borkoli", "Сьомга филе върху лимоново ризото с борколи", "12,60", "280", ""],
["", "ribni-filencza-s-parmezanova-korichka-vrkhu-cheren-oriz-i-sos-ot-sirena-s-tikvichki", "Рибни филенца с пармезанова коричка върху черен ориз и сос от сирена с тиквички", "11,90", "300", ""]

        ],

        "Фитнес предложения": [
            ["", "omlet-ss-spanak", "Омлет със спанак", "5,60", "200", ""],
["", "pecheni-teleshki-kyufteta-na-skara", "Печени телешки кюфтета на скара", "7,00", "200", ""],
["", "file-ot-pstrvalavrak-na-tigan-s-czitrusov-dresing", "Филе от пъстърва/лаврак на тиган с цитрусов дресинг", "9,10", "180", ""],
["", "pileshko-ili-pueshko-file-na-tigan-ili-skara-s-kokosovo-maslo", "Пилешко или пуешко филе на тиган или скара с кокосово масло", "6,30", "150", ""],
["", "fitnes-salata-s-riba-ton", "Фитнес салата с риба тон", "7,00", "350", ""],
["", "otvoren-burger-ot-somga-s-yajcze-i-svezhi-zeleni-podpravkivrzhu-zhasminov-oriz-i-salatka-ot-bejbi-spanak", "Отворен бургер от сьомга с яйце и свежи зелени подправки,вържу жасминов ориз и салатка от бейби спанак", "9,80", "250", ""],
["", "svinsko-bon-file-na-skara", "Свинско бон филе на скара", "7,70", "200", ""],
["", "svinsko-bon-file-na-tigan-ss-susamovo-olio", "Свинско бон филе на тиган със сусамово олио", "7,70", "200", ""]

        ],

        "Фитнес гарнитури": [
            ["", "zhasminov-oriz", "Жасминов ориз", "1,40", "100", ""],
["", "cheren-oriz", "Черен ориз", "1,40", "100", ""],
["", "zadusheni-brokoli-s-kokosovo-maslo-chesn-i-kopr", "Задушени броколи с кокосово масло, чесън и копър", "3,50", "150", ""],
["", "sotiran-spanak-ss-zelen-luk-i-chesn", "Сотиран спанак със зелен лук и чесън", "3,50", "100", ""],
["", "pecheni-sladki-kartofi-s-rozmarin", "Печени сладки картофи с розмарин", "2,80", "200", ""],
["", "pecheni-tikvichki-na-skara-s-magdanozeno-pesto", "Печени тиквички на скара с магданозено песто", "1,40", "150", ""],
["", "pecheni-cherveni-kartofi-s-pryasna-mashherka", "Печени червени картофи с прясна мащерка", "2,80", "200", ""],
["", "presni-krastavichki-kopr-i-limon", "Пресни краставички, копър и лимон", "1,40", "150", ""]

        ],

        "Вегетариански и веган ястия": [
            ["", "paniran-zanayatchijski-kashkaval-v-tiganche-ss-svezha-salata-ot-cherveno-zele", "Паниран занаятчийски кашкавал в тиганче със свежа салата от червено зеле", "7,70", "250", ""],
["", "zapechen-mish-mash", "Запечен Миш-маш", "7,70", "300", ""],
["", "vegetarianski-greten", "Вегетариански гретен", "9,10", "350", ""]

        ],

        "Традиционни и сезонни ястия в наш стил": [
            ["", "brkani-yajcza-zapecheni-ss-zelen-luk-pushen-kashkaval-i-nasheto-meze", "Бъркани яйца запечени със зелен лук, пушен кашкавал и нашето мезе", "7,70", "200", ""],
["", "nashite-plneni-chushki", "Нашите пълнени чушки", "8,40", "300", ""],
["", "khrupkavi-shniczeli-v-tiganche-ss-zapecheno-kartofeno-pyure", "Хрупкави шницели в тиганче със запечено картофено пюре", "8,40", "400", ""],
["", "zapechena-tnka-nadenichka-krnache-s-pusheno-topeno-sirene", "Запечена тънка наденичка Кърначе с пушено топено сирене", "9,80", "350", ""],
["", "zapechena-domashna-lukanka-ot-svinsko-i-teleshko-meso-s-garnitura", "Запечена домашна луканка от свинско и телешко месо с гарнитура", "11,90", "400", ""],
["", "katino-meze-zapecheno-ss-zanayatchijski-kashkaval", "Катино мезе, запечено със занаятчийски кашкавал", "9,80", "280", ""],
["", "golyamo-kasapsko-kyufte-s-chesn-pushen-kashkaval-i-nashite-mezeta", "Голямо касапско кюфте с чесън, пушен кашкавал и нашите мезета", "9,10", "250", ""],
["", "plneno-pileshko-file-s-tryufel-krem-i-pryasna-pechurka-v-sos-ot-sirena-i-pecheni-kartofki", "Пълнено пилешко филе с трюфел крем и прясна печурка в сос от сирена и печени картофки", "10,50", "350", ""],
["", "svinsko-bon-file-s-tryufel-krem-i-pryasna-pechurka-v-sos-ot-sirena-i-pecheni-kartofki", "Свинско бон филе с трюфел крем и прясна печурка в сос от сирена и печени картофки", "11,90", "350", ""],
["", "prikazka-pod-shipkoviya-khrast", "Приказка Под шипковия храст", "12,60", "300", ""],
["", "medaloni-ot-svinsko-bon-file-s-pechurki-i-manatarki", "Медальони от свинско бон филе с печурки и манатарки", "11,90", "300", ""],
["", "svinski-zhulieni", "Свински жулиени", "11,90", "400", ""]

        ],

        "Ястия с пилешко и пуешко": [
            ["", "plneno-pileshko-file-s-pesto-s-kapersi-i-susheni-domati-v-czitrusov-sos", "Пълнено пилешко филе с песто, с каперси и сушени домати в цитрусов сос", "11,20", "350", ""],
["", "pileshki-filencza-zapechni-s-bri-sino-sirene-krem-filadelfiya-i-bademi", "Пилешки филенца, запечни с бри, синьо сирене, крем филаделфия и бадеми", "11,20", "400", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "9,80", "300", ""],
["", "pileshko-ili-pueshko-file-ss-spanachen-sos-i-parmezan", "Пилешко или Пуешко филе със спаначен сос и пармезан", "10,50", "400", ""],
["", "pileshki-khapki-s-mashherka-i-chesnovi-kartofi", "Пилешки хапки с мащерка и чеснови картофи", "9,10", "350", ""],
["", "pileshki-kscheta-s-tikvichki-po-grczki", "Пилешки късчета с тиквички по гръцки", "10,50", "350", ""]

        ],

        "Ястия със свинско месо": [
            ["", "vlchi-khapki", "Вълчи хапки", "11,20", "350", ""],
["", "svinski-dzholan-s-gben-sos-i-malki-kartofki-bez-kost", "Свински джолан с гъбен сос и малки картофки /без кост/", "10,50", "350", ""],
["", "svinski-karencza-na-tigan-s-maslo-chesn-i-mashherka", "Свински каренца на тиган с масло, чесън и мащерка", "11,20", "350", ""],
["", "svinski-vrat-zapechen-s-pusheni-grdi-i-chesnov-kartof", "Свински врат запечен с пушени гърди и чеснов картоф", "12,60", "350", ""]

        ],

        "Ястия с патешко месо": [
            ["", "khrupkavi-pateshki-drobcheta-s-presen-zelen-luk-chesn-i-magdanoz", "Хрупкави патешки дробчета с пресен зелен лук, чесън и магданоз", "8,40", "300", ""],
["", "pateshki-bon-filencza-s-pepr-sos-i-limonovo-rizoto-s-presni-brokoli-i-parmezan", "Патешки бон филенца с пепър сос и лимоново ризото с пресни броколи и пармезан", "13,30", "360", ""],
["", "pateshki-bon-filencza-s-medeni-praskovi-maskarpone-i-smetna", "Патешки бон филенца с медени праскови, маскарпоне и сметна", "15,40", "350", ""]

        ],

        "Ястия с телешко месо": [
            ["", "ribaj-stek---black-angus-usa-nebraska", "Рибай стек - Black Angus USA Nebraska", "34,30", "300", ""],
["", "teleshki-dzholan-bez-kost-s-gben-sos-i-malki-kartofki", "Телешки джолан без кост с гъбен сос и малки картофки", "12,60", "350", ""],
["", "selektirano-teleshko-bon-file-na-skara-ss-zelenchuczi", "Селектирано телешко бон филе на скара със зеленчуци", "18,20", "250", ""]

        ],

        "Ястия с агнешко месо": [
            ["", "adana-kebap-na-skara", "Адана кебап на скара", "10,50", "300", ""],
["", "pecheno-agneshko-bez-kost-s-gben-sos-i-proletni-malki-kartofki", "Печено агнешко без кост, с гъбен сос и пролетни малки картофки", "18,20", "350", ""]

        ],

        "Паста и ризото": [
            ["", "lazanya-boloneze-v-nash-stil", "Лазаня Болонезе в наш стил", "9,10", "350", ""],
["", "lazanya-ss-spanak-i-sirena", "Лазаня със спанак и сирена", "9,10", "350", ""],
["", "leko-pikantno-domateno-rizoto-s-khrupkavi-kalmari", "Леко пикантно доматено ризото с хрупкави калмари", "9,80", "350", ""],
["", "pasta-s-manatarki-i-parmezan", "Паста с манатарки и пармезан", "8,40", "300", ""],
["", "zapacheni-kaneloni-s-pile-i-tryufel-krem", "Запачени канелони с пиле и трюфел крем", "9,10", "350", ""],
["", "pasta-s-tikvichki-i-parmezanov-sos", "Паста с тиквички и пармезанов сос", "6,30", "300", ""],
["", "pasta-ss-sos-boloneze", "Паста със сос Болонезе", "9,10", "300", ""],
["", "rizoto-s-manatarki-i-parmezan", "Ризото с манатарки и пармезан", "8,40", "300", ""],
["", "krem-rizoto-s-morski-darove", "Крем ризото с морски дарове", "13,30", "350", ""],
["", "krem-pasta-s-morski-darove", "Крем паста с морски дарове", "13,30", "350", ""]

        ],

        "garnish": [
            ["", "sotirani-brokoli-s-maslo-kopr-czelina-i-chesn", "Сотирани броколи с масло, копър, целина и чесън", "5,60", "150", ""],
["", "chips-ot-przheni-domashni-kartofi", "Чипс от пържени домашни картофи", "3,50", "200", ""],
["", "pecheni-malki-kartofi-s-maslo-chesn-i-kopr", "Печени малки картофи с масло, чесън и копър", "3,50", "200", ""],
["", "domashno-pyure-ot-pashhrnak", "Домашно пюре от пащърнак", "2,80", "200", ""],
["", "zapecheno-kartofeno-pyure-s-parmezan", "Запечено картофено пюре с пармезан", "2,80", "200", ""]

        ],

        "desserts": [
            ["", "variacziya-na-biskvitena-torta-shhastlivecza", "Вариация на бисквитена торта Щастливеца", "4,20", "180", ""],
["", "stara-frenska-selska-torta-s-mlechen-krem-i-khrupkavi-masleni-kori", "Стара френска селска торта с млечен крем и хрупкави маслени кори", "4,90", "200", ""],
["", "domashen-yajchen-krem-na-shhastlivecza", "Домашен яйчен крем на Щастливеца", "3,50", "280", ""],
["", "shokoladova-torta-garash-v-nash-stil", "Шоколадова торта Гараш в наш стил", "4,90", "150", ""],
["", "malinov-chijz-kejk-s-byal-shokolad", "Малинов чийз кейк с бял шоколад", "4,20", "150", ""]

        ],

        "sauces": [
            ["", "chili-sos", "Чили сос", "0,70", "100.", ""],
["", "smetanovo-majonezen-sos-s-rigan-i-chesn", "Сметаново-майонезен сос с риган и чесън", "1,40", "100", ""]

        ],

        "drinks": [
            ["", "red-bul", "Ред Бул", "3,50", "330", ""],
["", "bio-studen-chaj", "Био студен чай", "2,10", "", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна Баня", "1,40", "", ""],
["", "mineralna-voda-spelegrino", "Минерална вода S.Pelegrino", "2,80", "", ""],
["", "mineralna-voda-akva-pana", "Минерална вода Аква Пана", "2,80", "", ""],
["", "ajran", "Айран", "1,40", "300", ""],
["", "studen-chaj-san-benedetto", "Студен чай San Benedetto", "2,10", "500", ""]

        ],

        "Бутилирана бира": [
            ["", "shumensko-speczialno", "Шуменско специално", "1,40", "", ""],
["", "pirinsko-svetlo", "Пиринско светло", "1,40", "330", ""],
["", "tuborg", "Туборг", "2,10", "", ""],
["", "karlsberg", "Карлсберг", "2,10", "", ""],
["", "erdinger", "Ердингер", "4,20", "500", ""],
["", "budvajzer", "Будвайзер", "2,80", "", ""],
["", "vajs", "Вайс", "3,50", "330", ""],
["", "san-migel", "Сан Мигел", "3,50", "330", ""],
["", "bernard", "Бернард", "4,90", "500", ""]

        ]
    }', 
    'slug' => 'shchastliveca',
    'business_name' => 'Щастливеца',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Sofia',
    'region' => 'Sofia',
    'postal_code' => '1000',
    'address' => 'бул. &quot;Витоша&quot; 27',
    'address_additional' => '',
    'coords_x' => '42.69327164',
    'coords_y' => '23.32058144',
    'phone' => '+359888681880 ; 35924411155',
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









// Stara Zagora

[
    'creator_id' => 1,
    'dishes_ids' => '{
        
        "Крилца": [
            ["", "4-pileshki-krilcza-wing-it-ovalyani-vv-vkusen-sos", "4 Пилешки крилца Wing It оваляни във вкусен сос", "3,50", "160", "https://images.deliveryhero.io/image/fd-bg/Products/822365.JPG?width=302"],
["", "8-pileshki-krilcza-wing-it-ovalyani-vv-vkusen-sos", "8 Пилешки крилца Wing It оваляни във вкусен сос", "6,30", "320", "https://images.deliveryhero.io/image/fd-bg/Products/1084047.JPG?width=302"],
["", "12-pileshki-krilcza-wing-it-ovalyani-vv-vkusen-sos", "12 Пилешки крилца Wing It оваляни във вкусен сос", "7,70", "480", "https://images.deliveryhero.io/image/fd-bg/Products/1084048.JPG?width=302"],
["", "16-pileshki-krilcza-wing-it-ovalyani-vv-vkusen-sos---porcziya-za-priyateli", "16 Пилешки крилца Wing It оваляни във вкусен сос - порция за приятели", "9,10", "640", "https://images.deliveryhero.io/image/fd-bg/Products/1084049.JPG?width=302"]

        ],

        "Пилешки филенца": [
            ["", "4-panirani-pileshki-filencza-wing-it-ovalyani-vv-vkusen-sos", "4 Панирани пилешки филенца Wing It оваляни във вкусен сос", "7,00", "200", "https://images.deliveryhero.io/image/fd-bg/Products/822366.JPG?width=302"],
["", "7-panirani-pileshki-filencza-wing-it-ovalyani-vv-vkusen-sos", "7 Панирани пилешки филенца Wing It оваляни във вкусен сос", "9,10", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1084056.JPG?width=302"],
["", "10-panirani-pileshki-filencza-wing-it-ovalyani-vv-vkusen-sos---porcziya-za-priyateli", "10 Панирани пилешки филенца Wing It оваляни във вкусен сос - порция за приятели", "10,50", "450", "https://images.deliveryhero.io/image/fd-bg/Products/1084057.JPG?width=302"]

        ],

        "Меню Крилца": [
            ["", "menyu-8-pileshki-krilcza-wing-it-ovalyani-vv-vkusen-sos", "Меню 8 пилешки крилца Wing It оваляни във вкусен сос", "10,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/822367.JPG?width=302"],
["", "menyu-12-pileshki-krilcza-wing-it-ovalyani-vv-vkusen-sos", "Меню 12 пилешки крилца Wing It оваляни във вкусен сос", "11,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/1084045.JPG?width=302"]

        ],

        "Меню Пилешки филенца": [
            ["", "menyu-5-pileshki-filencza-wing-it-ovalyani-vv-vkusen-sos", "Меню 5 пилешки филенца Wing It оваляни във вкусен сос", "11,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/822368.JPG?width=302"],
["", "menyu-8-pileshki-filencza-wing-it-ovalyani-vv-vkusen-sos", "Меню 8 пилешки филенца Wing It оваляни във вкусен сос", "14,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/1084046.JPG?width=302"]

        ],

        "Пържени картофи": [
            ["", "przheni-kartofki-wing-it", "Пържени картофки Wing It", "1,40", "150", ""]

        ],

        "sauces": [
            ["", "zakachlivo-lyut", "Закачливо лют", "0,00", "60", ""],
["", "buket-ot-bbq", "Букет от BBQ", "0,00", "60", ""],
["", "sladka-skara", "Сладка скара", "0,00", "60", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "60", ""]

        ]
    }', 
    'slug' => 'wing-it',
    'business_name' => 'Wing it! Centre',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Sofia',
    'region' => 'Sofia',
    'postal_code' => '1000',
    'address' => 'ул. Поп Богомил 2Б',
    'address_additional' => '',
    'coords_x' => '42.70391706',
    'coords_y' => '23.32869009',
    'phone' => '+359876681422 0893290869',
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
        
        "Промо": [
            ["", "peperino", "Пеперино", "2,80", "", ""],
["", "margarita", "Маргарита", "2,80", "", ""],
["", "verona", "Верона", "2,80", "", ""],
["", "polo", "Поло", "2,80", "", ""]

        ],

        "pizza": [
            ["", "golyama-picza", "Голяма пица", "7,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/192284.jpg?width=302"],
["", "sredna-picza", "Средна пица", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/192285.jpg?width=302"],
["", "malka-picza", "Малка пица", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/192286.jpg?width=302"]

        ],

        "sauces": [
            ["", "chesnov-sos", "Чеснов сос", "0,00", "50", "https://images.deliveryhero.io/image/fd-bg/Products/192354.jpg?width=302"],
["", "ketchup", "Кетчуп", "0,00", "50", "https://images.deliveryhero.io/image/fd-bg/Products/192352.jpg?width=302"],
["", "majoneza", "Майонеза", "0,00", "50", "https://images.deliveryhero.io/image/fd-bg/Products/192353.jpg?width=302"],
["", "chili-sos", "Чили сос", "0,00", "50", "https://images.deliveryhero.io/image/fd-bg/Products/192355.jpg?width=302"],
["", "barbekyu", "Барбекю", "0,00", "50", "https://images.deliveryhero.io/image/fd-bg/Products/192351.jpg?width=302"]

        ],

        "drinks": [
            ["", "studen-chaj-nestea", "Студен чай Nestea", "1,40", "", ""],
["", "danon-ajryan", "Данон айрян", "0,70", "500", ""],
["", "staropramen", "Старопрамен", "1,40", "500", ""],
["", "kamenicza", "Каменица", "0,70", "500", ""]

        ],

        "Coca-Cola напитки": [
            ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/192356.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/192357.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/192358.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/192360.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1085217.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1085218.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1085219.jpg?width=302"]

        ]
    }', 
    'slug' => 'pizzio',
    'business_name' => 'Pizzio',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Sofia',
    'region' => 'Sofia',
    'postal_code' => '1000',
    'address' => 'бул.Ситняково 48(МОЛ Сердика)',
    'address_additional' => '',
    'coords_x' => '42.6917594',
    'coords_y' => '23.353267',
    'phone' => '+359896050205 ; 35924390233',
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
        
        "Меню": [
            ["", "khamburger-menyu", "Хамбургер меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/640214.jpg?width=302"],
["", "chijztost-menyu", "Чийзтост меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/640215.jpg?width=302"],
["", "chijzburger-menyu", "Чийзбургер меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/640217.jpg?width=302"],
["", "pileshki-burger-menyu", "Пилешки бургер меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/640218.jpg?width=302"],
["", "big-tejsti-menyu", "Биг Тейсти™ меню", "9,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/640225.jpg?width=302"],
["", "chikn-maknagets-menyu", "Чикън МакНагетс™ меню", "9,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/640226.jpg?width=302"],
["", "pileshki-krilcza-menyu", "Пилешки крилца меню", "10,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/640227.jpg?width=302"],
["", "troen-chijzburger-menyu", "Троен чийзбургер меню", "7,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/640234.jpg?width=302"],
["", "file-o-fish-menyu", "Филе-О-Фиш™ меню", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/640221.jpg?width=302"],
["", "chikn-maknagets-menyu", "Чикън МакНагетс™ меню", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/640223.jpg?width=302"],
["", "pileshki-krilcza-menyu", "Пилешки крилца меню", "7,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/640224.jpg?width=302"],
["", "klasik-bijf-makrap-menyu", "Класик бийф МакРап™ меню", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/640228.jpg?width=302"],
["", "krispi-chikn-makrap-menyu", "Криспи чикън МакРап™ меню", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/640229.jpg?width=302"],
["", "dvoen-chijzburger-menyu", "Двоен Чийзбургер меню", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/640219.jpg?width=302"],
["", "big-mak-menyu", "Биг Мак™ меню", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/640220.jpg?width=302"],
["", "makchikn-menyu", "МакЧикън™ меню", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/640222.jpg?width=302"],
["", "nyu-jork-speshl-bijf-makmenyu", "Ню Йорк Спешъл Бийф МакМеню", "10,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1007027.jpg?width=302"],
["", "chikago-chikn-klasik-makmenyu", "Чикаго Чикън Класик МакМеню", "10,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1007028.jpg?width=302"],
["", "maktost-menyu", "МакТост Меню", "4,90", "", ""]

        ],

        "burgers": [
            ["", "khamburger", "Хамбургер", "1,40", "105", "https://images.deliveryhero.io/image/fd-bg/Products/602530.jpg?width=302"],
["", "chijzburger", "Чийзбургер", "2,10", "115", "https://images.deliveryhero.io/image/fd-bg/Products/602531.jpg?width=302"],
["", "pileshki-burger", "Пилешки бургер", "2,10", "110", "https://images.deliveryhero.io/image/fd-bg/Products/602532.jpg?width=302"],
["", "dvoen-chijzburger", "Двоен чийзбургер", "4,90", "170", "https://images.deliveryhero.io/image/fd-bg/Products/602534.jpg?width=302"],
["", "big-mak", "Биг Мак™", "4,90", "217", "https://images.deliveryhero.io/image/fd-bg/Products/602535.jpg?width=302"],
["", "file-o-fish", "Филе-О-Фиш™", "4,90", "137", "https://images.deliveryhero.io/image/fd-bg/Products/602536.jpg?width=302"],
["", "makchikn", "МакЧикън™", "4,90", "178", "https://images.deliveryhero.io/image/fd-bg/Products/602537.jpg?width=302"],
["", "bigtejsti", "БигТейсти™", "7,00", "341", "https://images.deliveryhero.io/image/fd-bg/Products/602538.jpg?width=302"],
["", "chijztost", "ЧийзТост", "1,40", "80", "https://images.deliveryhero.io/image/fd-bg/Products/602539.jpg?width=302"],
["", "klasik-bijf-makrap", "Класик бийф МакРап™", "6,30", "207", "https://images.deliveryhero.io/image/fd-bg/Products/640246.jpg?width=302"],
["", "krispi-chikn-makrap", "Криспи чикън МакРап™", "6,30", "208", "https://images.deliveryhero.io/image/fd-bg/Products/602542.jpg?width=302"],
["", "troen-chijzburger", "Троен чийзбургер", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/626031.jpg?width=302"],
["", "nyu-jork-speshl-bijf", "Ню Йорк Спешъл Бийф", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/1007016.jpg?width=302"],
["", "chikago-chikn-klasik", "Чикаго Чикън Класик", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/1007017.jpg?width=302"],
["", "maktost", "МакТост™", "2,10", "100", ""]

        ],

        "Сочно пилешко": [
            ["", "chikn-maknagets-9br--", "Чикън МакНагетс™ (9бр -", "7,00", "161", "https://images.deliveryhero.io/image/fd-bg/Products/602547.jpg?width=302"],
["", "sharebox-s-5br-nagets-3br-krilcza-2br-mali-kartofki-i-1br-malka-napitka", "Sharebox с 5бр Нагетс, 3бр крилца, 2бр мали картофки и 1бр малка напитка", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/640257.jpg?width=302"]

        ],

        "Салати и картофки": [
            ["", "sredni-kartofki", "Средни картофки", "2,80", "114", "https://images.deliveryhero.io/image/fd-bg/Products/602562.jpg?width=302"],
["", "mlechen-sos", "Млечен сос", "0,70", "50", ""],
["", "vinegret-sos", "Винегрет сос", "0,70", "50", ""],
["", "sos-sino-sirene", "Сос Синьо сирене", "0,70", "50", ""]

        ],

        "sauces": [
            ["", "mlechen-sos", "Млечен сос", "0,70", "25", "https://images.deliveryhero.io/image/fd-bg/Products/602605.jpg?width=302"],
["", "ketchup", "Кетчуп", "0,70", "10", "https://images.deliveryhero.io/image/fd-bg/Products/602597.jpg?width=302"],
["", "uestrn-sos---lyut", "Уестърн сос - лют", "0,70", "10", "https://images.deliveryhero.io/image/fd-bg/Products/602599.jpg?width=302"],
["", "majoneza", "Майонеза", "0,70", "20", "https://images.deliveryhero.io/image/fd-bg/Products/602600.jpg?width=302"],
["", "sos-barbekyu", "Сос Барбекю", "0,70", "30", "https://images.deliveryhero.io/image/fd-bg/Products/602601.jpg?width=302"],
["", "sladko-kisel-sos", "Сладко-кисел сос", "0,70", "30", "https://images.deliveryhero.io/image/fd-bg/Products/602602.jpg?width=302"],
["", "gorchicza", "Горчица", "0,70", "28", "https://images.deliveryhero.io/image/fd-bg/Products/602603.jpg?width=302"],
["", "kri", "Къри", "0,70", "25", "https://images.deliveryhero.io/image/fd-bg/Products/602604.jpg?width=302"]

        ],

        "Шейкове": [
            ["", "shejk-shokolad", "Шейк Шоколад", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/675980.jpg?width=302"],
["", "shejk-vaniliya", "Шейк Ванилия", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/675981.jpg?width=302"],
["", "shejk-yagoda", "Шейк Ягода", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/675982.jpg?width=302"]

        ],

        "drinks": [
            ["", "liptn-limon", "Липтън лимон", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/640274.jpg?width=302"],
["", "mineralna-voda", "Минерална вода", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "2,80", "330", ""],
["", "soda-gorna-banya", "Сода Горна баня", "1,40", "500", ""],
["", "zagorka", "Загорка", "3,50", "500", ""],
["", "red-bul", "Ред Бул", "4,20", "250", ""],
["", "kapuchino", "Капучино", "2,10", "200", ""],
["", "espreso", "Еспресо", "1,40", "200", ""]

        ],

        "Coca-Cola напитки": [
            ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/640269.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/640270.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/640271.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/640272.jpg?width=302"]

        ],

        "desserts": [
            ["", "mfin-s-nutella", "Мъфин с Nutella®", "3,50", "110", "https://images.deliveryhero.io/image/fd-bg/Products/602780.jpg?width=302"],
["", "yablkov-paj", "Ябълков пай", "2,10", "80", "https://images.deliveryhero.io/image/fd-bg/Products/602776.jpg?width=302"],
["", "dont-s-shokolad", "Донът с шоколад", "1,40", "65", "https://images.deliveryhero.io/image/fd-bg/Products/602781.jpg?width=302"],
["", "parti-dont", "Парти донът", "1,40", "65", "https://images.deliveryhero.io/image/fd-bg/Products/602782.jpg?width=302"],
["", "speczialen-paj", "Специален пай", "2,10", "80", ""],
["", "speczialen-paj-s-vishna", "Специален пай с вишна", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/788308.jpg?width=302"],
["", "mfin-oreo", "Мъфин OREO®", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/788288.jpg?width=302"]

        ],

        "Детско меню": [
            ["", "detsko-menyu---happy-meal-s-khamburger", "Детско меню - Happy Meal™ с хамбургер", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/640289.jpg?width=302"],
["", "detsko-menyu---happy-meal-s-chijzburger", "Детско меню - Happy Meal™  с Чийзбургер", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/640290.jpg?width=302"],
["", "detsko-menyu---happy-meal-s-chikn-maknagets", "Детско меню - Happy Meal™  с Чикън МакНагетс™", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/640291.jpg?width=302"],
["", "detsko-menyu---happy-meal-s-pileshki-burger", "Детско меню - Happy Meal™  с пилешки бургер", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/640293.jpg?width=302"],
["", "detsko-menyu---happy-meal-s-chijztost", "Детско меню - Happy Meal™  с Чийзтост", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/640294.jpg?width=302"],
["", "detsko-menyu---happy-meal-s-mak-tost", "Детско меню - Happy Meal™  с Мак Тост", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/976869.jpg?width=302"]

        ]
    }', 
    'slug' => 'mcdonald-s',
    'business_name' => 'McDonald&#039;s™ (Rock &amp; Roll)',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Sofia',
    'region' => 'Sofia',
    'postal_code' => '1000',
    'address' => 'бул. България 1',
    'address_additional' => '',
    'coords_x' => '42.68246554',
    'coords_y' => '23.31938672',
    'phone' => '+359884000305',
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
        
        "Промо Меню": [
            ["", "kebap-burger-menyu", "Кебап бургер  меню", "3,50", "", ""],
["", "kebap-burger", "Кебап бургер", "2,10", "", ""]

        ],

        "burgers": [
            ["", "burger-s-bekon", "Бургер с бекон", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604095.jpg?width=302"],
["", "chijzburger", "Чийзбургер", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604097.jpg?width=302"],
["", "khamburger", "Хамбургер", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604098.jpg?width=302"],
["", "pileshki-burger", "Пилешки бургер", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604100.jpg?width=302"],
["", "mini-pileshki-burger", "Мини пилешки бургер", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604101.jpg?width=302"],
["", "tortila-s-pile", "Тортила с пиле", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604145.jpg?width=302"],
["", "soeva-tortila", "Соева тортила", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604146.jpg?width=302"],
["", "megaburger", "Мегабургер", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/679413.jpg?width=302"],
["", "dvoen-chijzburger", "Двоен Чийзбургер", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604096.jpg?width=302"],
["", "barbekyu-burger", "Барбекю бургер", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/858194.jpg?width=302"]

        ],

        "Меню": [
            ["", "khesburger-menyu", "Хесбургер меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/604160.jpg?width=302"],
["", "dvoen-chijzburger-menyu", "Двоен Чийзбургер меню", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604157.jpg?width=302"],
["", "detsko-menyu", "Детско меню", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604147.jpg?width=302"],
["", "soeva-tortila-menyu", "Соева тортила меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/604149.jpg?width=302"],
["", "tortila-s-pile-menyu", "Тортила с пиле меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/604150.jpg?width=302"],
["", "mini-pileshki-burger-menyu", "Мини пилешки бургер меню", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604152.jpg?width=302"],
["", "pileshki-burger-menyu", "Пилешки бургер меню", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604153.jpg?width=302"],
["", "khamburger-menyu", "Хамбургер меню", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604155.jpg?width=302"],
["", "chijzburger-menyu", "Чийзбургер меню", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604156.jpg?width=302"],
["", "burger-s-bekon-menyu", "Бургер с бекон меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/604158.jpg?width=302"],
["", "megaburger-menyu", "Мегабургер меню", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/679412.jpg?width=302"],
["", "barbekyu-burger-menyu", "Барбекю бургер Меню", "4,90", "", ""]

        ],

        "salads": [
            ["", "salata-pile", "Салата пиле", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604532.jpg?width=302"],
["", "burger-salata", "Бургер салата", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604533.jpg?width=302"],
["", "topla-salata-ss-soya", "Топла салата със соя", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604534.jpg?width=302"],
["", "mini-salata-s-dresing-po-izbor", "Мини салата с дресинг по избор", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604535.jpg?width=302"]

        ],

        "Пържени картофи и Хрупкави предложения": [
            ["", "normalni-kartofki", "Нормални картофки", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604536.jpg?width=302"],
["", "golemi-kartofki", "Големи картофки", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604537.jpg?width=302"],
["", "pileshki-khapki--sos", "Пилешки хапки + сос", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604539.jpg?width=302"],
["", "pileshki-khapki--sos", "Пилешки хапки + сос", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604540.jpg?width=302"],
["", "pileshki-khapki--sos", "Пилешки хапки + сос", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604541.jpg?width=302"],
["", "soevi-prchiczi--sos", "Соеви пръчици + сос", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604542.jpg?width=302"],
["", "soevi-prchiczi--sos", "Соеви пръчици + сос", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604543.jpg?width=302"],
["", "soevi-prchiczi--sos", "Соеви пръчици + сос", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604544.jpg?width=302"],
["", "kutiya-s-pileshki-khapki", "Кутия с пилешки хапки", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604545.jpg?width=302"]

        ],

        "sauces": [
            ["", "majoneza-s-chushki", "Майонеза с чушки", "0,00", "38", "https://images.deliveryhero.io/image/fd-bg/Products/613300.jpg?width=302"],
["", "majoneza-s-krastavichki", "Майонеза с краставички", "0,00", "38", "https://images.deliveryhero.io/image/fd-bg/Products/613301.jpg?width=302"],
["", "sladko-kisel-sos", "Сладко-кисел сос", "0,00", "32", "https://images.deliveryhero.io/image/fd-bg/Products/613302.jpg?width=302"],
["", "barbekyu-sos", "Барбекю сос", "0,00", "32", "https://images.deliveryhero.io/image/fd-bg/Products/613303.jpg?width=302"],
["", "chesnova-majoneza", "Чеснова майонеза", "0,00", "32", "https://images.deliveryhero.io/image/fd-bg/Products/613304.jpg?width=302"]

        ],

        "desserts": [
            ["", "ponichka-s-byal-shokolad", "Поничка с бял шоколад", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604614.jpg?width=302"],
["", "ponichka-s-mlechen-shokolad", "Поничка с млечен шоколад", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604615.jpg?width=302"],
["", "biskvitka-s-dvoen-shokolad", "Бисквитка с двоен шоколад", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604616.jpg?width=302"],
["", "biskvitka-s-byal-shokolad", "Бисквитка с бял шоколад", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604617.jpg?width=302"]

        ],

        "Coca-Cola напитки": [
            ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604590.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604591.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604592.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604593.jpg?width=302"],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/818481.jpg?width=302"],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/818482.jpg?width=302"]

        ],

        "drinks": [
            ["", "mineralna-voda", "Минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/604612.jpg?width=302"],
["", "gazirana-voda", "Газирана вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/604613.jpg?width=302"],
["", "ajran", "Айран", "0,70", "", ""]

        ]
    }', 
    'slug' => 'hesburger',
    'business_name' => 'Hesburger (Тодор Александров)',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Sofia',
    'region' => 'Sofia',
    'postal_code' => '1000',
    'address' => 'на ъгъла на бул. Константин Величков и бул. Тодор Александров',
    'address_additional' => '',
    'coords_x' => '42.70230093',
    'coords_y' => '23.29724245',
    'phone' => '+359876821168',
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
            ["", "salata-krastaviczi", "Салата краставици", "1,40", "250", ""],
["", "salata-domati", "Салата домати", "2,10", "250", ""],
["", "salata-morkovi", "Салата моркови", "1,40", "250", ""],
["", "salata-czveklo", "Салата цвекло", "1,40", "250", ""],
["", "salata-morkovi-i-czveklo", "Салата моркови и цвекло", "1,40", "250", ""],
["", "lyatna-salata", "Лятна салата", "1,40", "250", ""],
["", "salata-zele-i-morkovi", "Салата зеле и моркови", "1,40", "250", ""],
["", "salata-spanak", "Салата спанак", "2,10", "250", ""],
["", "proletna-salata", "Пролетна салата", "2,10", "250", ""],
["", "zhtvarska-salata", "Жътварска салата", "2,10", "250", ""],
["", "salata-serdika", "Салата Сердика", "2,10", "250", ""],
["", "trakijska-salata", "Тракийска салата", "2,10", "250", ""],
["", "stradzhanska-salata", "Страджанска салата", "2,10", "250", ""],
["", "selska-salata", "Селска салата", "2,10", "350", ""],
["", "vrachanska-salata", "Врачанска салата", "2,80", "250", ""],
["", "shopska-salata", "Шопска салата", "2,10", "250", ""],
["", "proletna-zelena-salata", "Пролетна зелена салата", "2,10", "150", ""],
["", "salata-na-shefa", "Салата на шефа", "2,80", "200", ""],
["", "planinska-salata", "Планинска салата", "2,80", "200", ""],
["", "salata-svareno-czveklo", "Салата сварено цвекло", "1,40", "250", ""],
["", "salata-snezhanka", "Салата снежанка", "2,10", "200", ""],
["", "tikvichki-s-mlechen-sos", "Тиквички с млечен сос", "2,10", "250", ""]

        ],

        "soups": [
            ["", "gbena-supa", "Гъбена супа", "1,40", "450", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "450", ""]

        ],

        "Безмесни ястия": [
            ["", "tarator", "Таратор", "1,40", "400", ""],
["", "leshha-yakhniya", "Леща яхния", "2,10", "350", ""],
["", "magdanozeno-kyufte", "Магданозено кюфте", "0,70", "", ""],
["", "przheni-tikvichki", "Пържени тиквички", "2,10", "200", ""],
["", "kyufte-ss-spanak", "Кюфте със спанак", "0,70", "70", ""],
["", "kyufte-s-tikvichka-bms", "Кюфте с тиквичка БМС", "0,70", "70", ""],
["", "musaka-s-patladzhan", "Мусака с патладжан", "2,80", "350", ""],
["", "tikvichka-beshamel", "Тиквичка бешамел", "2,10", "300", ""],
["", "bezmesen-plen-piper", "Безмесен пълен пипер", "2,10", "300", ""],
["", "zadusheni-kartofi", "Задушени картофи", "2,10", "300", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "300", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "150", ""],
["", "rulo-s-tikvichki", "Руло с тиквички", "2,10", "200", ""]

        ],

        "Ястия от свинско и телешко": [
            ["", "krekhko-zadusheno-meso-s-kartofeno-pyure", "Крехко задушено месо с картофено пюре", "4,90", "260", ""],
["", "svinsko-pecheno-meso", "Свинско печено месо", "4,20", "150", ""],
["", "kyufte-na-skara", "Кюфте на скара", "0,70", "60", ""],
["", "kebapche-na-skara", "Кебапче на скара", "0,70", "60", ""],
["", "shniczel-pane", "Шницел пане", "2,10", "160", ""],
["", "kyufteta-po-chirpanski", "Кюфтета по чирпански", "2,80", "350", ""],
["", "kyufteta-po-czarigradski", "Кюфтета по цариградски", "2,80", "300", ""],
["", "musaka-klasik", "Мусака класик", "3,50", "400", ""]

        ],

        "Ястия от пилешко": [
            ["", "pile-zhulien", "Пиле Жулиен", "4,20", "300", ""],
["", "pileshki-but-s-oriz", "Пилешки бут с ориз", "3,50", "450", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "3,50", "350", ""],
["", "pileshki-prchiczi", "Пилешки пръчици", "3,50", "150", ""],
["", "pileshko-kare", "Пилешко каре", "1,40", "70", ""],
["", "pileshko-file-ot-przhola", "Пилешко филе от пържола", "3,50", "140", ""]

        ],

        "garnish": [
            ["", "oriz", "Ориз", "0,00", "100", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "kiselo-mlyako", "Кисело мляко", "0,00", "100", ""],
["", "sirene", "Сирене", "0,00", "50", ""],
["", "morkovi-garnitura", "Моркови гарнитура", "0,70", "100", ""],
["", "brokoli-garnitura", "Броколи гарнитура", "0,70", "100", ""],
["", "gbi-garnitura", "Гъби гарнитура", "0,70", "100", ""],
["", "kartofi-garnitura", "Картофи гарнитура", "0,70", "100", ""]

        ],

        "bread": [
            ["", "kajzer", "Кайзер", "0,00", "", ""],
["", "rzhena-pitka", "Ръжена питка", "0,00", "", ""],
["", "selska-bageta", "Селска багета", "0,00", "100", ""]

        ],

        "desserts": [
            ["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""],
["", "krem-kakao", "Крем какао", "0,70", "200", ""],
["", "kakaov-fch", "Какаов фъч", "1,40", "80", ""]

        ],

        "drinks": [
            ["", "mirinda-limon", "Миринда лимон", "1,40", "500", ""],
["", "pepsi-kola", "Пепси кола", "1,40", "500", ""],
["", "pepsi-kola", "Пепси кола", "1,40", "330", ""],
["", "pepsi-maks", "Пепси макс", "1,40", "500", ""],
["", "pepsi-tuist", "Пепси туист", "1,40", "500", ""],
["", "sevn-p", "Севън Ъп", "1,40", "500", ""],
["", "sevn-p", "Севън Ъп", "1,40", "330", ""],
["", "mirinda-portokal", "Миринда портокал", "1,40", "500", ""],
["", "mirinda-portokal", "Миринда портокал", "1,40", "330", ""],
["", "pepsi-lajm", "Пепси лайм", "1,40", "500", ""],
["", "pepsi-lajm", "Пепси лайм", "1,40", "330", ""],
["", "ajryan", "Айрян", "0,70", "300", ""],
["", "liptn-zelen-chaj", "Липтън зелен чай", "1,40", "500", ""],
["", "liptn-limon", "Липтън лимон", "1,40", "500", ""],
["", "liptn-malina", "Липтън малина", "1,40", "500", ""],
["", "liptn-praskova", "Липтън праскова", "1,40", "500", ""],
["", "devin-mineralna-voda", "Девин минерална вода", "0,70", "500", ""],
["", "devin-izvorna-voda", "Девин изворна вода", "0,70", "500", ""]

        ],

        "beer": [
            ["", "shumensko-svetlo-ken", "Шуменско светло кен", "1,40", "500", ""],
["", "pirinsko-svetlo-ken", "Пиринско светло кен", "1,40", "500", ""],
["", "tuborg-ken", "Туборг кен", "1,40", "500", ""],
["", "karlsberg-ken", "Карлсберг кен", "1,40", "500", ""],
["", "budvajzer-ken", "Будвайзер кен", "1,40", "500", ""],
["", "erdinger-vajs", "Ердингер вайс", "2,10", "330", ""],
["", "samrsbi-yablka", "Самърсби ябълка", "1,40", "330", ""],
["", "samrsbi-krusha", "Самърсби круша", "1,40", "330", ""],
["", "samrsbi-borovinka", "Самърсби боровинка", "1,40", "330", ""],
["", "zhateczki-khus-ken", "Жатецки хус кен", "1,40", "500", ""]

        ]
    }', 
    'slug' => 'bms-blgarska-kuhnya',
    'business_name' => 'БМС Българска кухня (The Mall)',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Sofia',
    'region' => 'Sofia',
    'postal_code' => '1000',
    'address' => 'бул. Цариградско шосе 115 (Тhe Mall)',
    'address_additional' => '',
    'coords_x' => '42.66031038',
    'coords_y' => '23.38234619',
    'phone' => '+359885207205',
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
            ["", "blt", "BLT", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/572443.jpg?width=302"],
["", "pikantno-veggy-patty", "Пикантно Veggy Patty", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/572437.jpg?width=302"],
["", "italian-bmt", "Italian B.M.T.®", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/572439.jpg?width=302"],
["", "riba-ton", "Риба тон", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/572438.jpg?width=302"],
["", "pile-teriyaki", "Пиле Терияки", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/572452.jpg?width=302"],
["", "veggie-delite-", "Veggie Delite ®", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/572456.jpg?width=302"],
["", "shunka", "Шунка", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/572454.jpg?width=302"],
["", "pikanten-italianski", "Пикантен Италиански", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/572441.jpg?width=302"],
["", "pileshko-pecheno", "Пилешко печено", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/752325.jpg?width=302"],
["", "big-beef-melt", "Big Beef Melt", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/752328.jpg?width=302"],
["", "poshirano-yajcze-s-topeno-sirene", "Поширано яйце с топено сирене", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/752333.jpg?width=302"],
["", "poshirano-yajcze-s-topeno-sirene-i-bekon", "Поширано яйце с топено сирене и бекон", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/752334.jpg?width=302"],
["", "pile-barbekyu", "Пиле Барбекю", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/752330.jpg?width=302"],
["", "troen-bekon", "Троен бекон", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/752324.jpg?width=302"],
["", "poshirano-yajcze-s-topeno-sirene-i-shunka", "Поширано яйце с топено сирене и шунка", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/752335.jpg?width=302"],
["", "picza-pikante", "Пица Пиканте", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/752322.jpg?width=302"],
["", "stek-s-topeno-sirene", "Стек с топено сирене", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/572442.jpg?width=302"]

        ],

        "salads": [
            ["", "salata-italian-bmt-", "Салата Italian B.M.T. ®", "4,90", "", ""],
["", "salata-veggie-delite", "Салата Veggie Delite™", "4,20", "", ""],
["", "salata-pikanten-italianski", "Салата Пикантен Италиански", "4,90", "", ""],
["", "salata-pile-teriyaki", "Салата Пиле Терияки", "4,90", "", ""],
["", "salata-riba-ton", "Салата Риба Тон", "4,90", "", ""],
["", "salata-stek-s-topeno-sirene", "Салата Стек с топено сирене", "4,90", "", ""],
["", "salata-shunka", "Салата Шунка", "3,50", "", ""],
["", "salata-blt", "Салата BLT", "4,20", "", ""],
["", "salata-pikantno-veggy-patty", "Салата Пикантно Veggy Patty", "4,90", "", ""],
["", "salata-picza-pikante", "Салата Пица Пиканте", "4,20", "", ""],
["", "salata-troen-bekon", "Салата Троен бекон", "4,20", "", ""],
["", "salata-pileshko-pecheno", "Салата Пилешко печено", "4,90", "", ""],
["", "salata-mango-pile-tika", "Салата Манго Пиле Тика", "4,90", "", ""],
["", "salata-big-beef-melt", "Салата Big Beef Melt", "4,90", "", ""],
["", "salata-pile-barbekyu", "Салата Пиле Барбекю", "5,60", "", ""],
["", "salata-barbekyu-rebra", "Салата Барбекю ребра", "5,60", "", ""],
["", "salata-poshirano-yajcze-s-topeno-sirene-i-shunka", "Салата Поширано яйце с топено сирене и шунка", "5,60", "", ""],
["", "salata-poshirano-yajcze-s-topeno-sirene", "Салата Поширано яйце с топено сирене", "4,90", "", ""],
["", "salata-poshirano-yajcze-s-topeno-sirene-i-bekon", "Салата Поширано яйце с топено сирене и бекон", "4,90", "", ""],
["", "pueshko-salata", "Пуешко салата", "4,20", "", ""],
["", "salata-subway-melt", "Салата Subway Melt", "4,90", "", ""]

        ],

        "Тортили": [
            ["", "tortila-blt", "Тортила BLT", "3,50", "", ""],
["", "tortila-shunka", "Тортила Шунка", "4,20", "", ""],
["", "tortila-pile-teriyaki", "Тортила Пиле Терияки", "4,20", "", ""],
["", "tortila-pikantno-veggy-patty", "Тортила Пикантно Veggy Patty", "4,20", "", ""],
["", "tortila-riba-ton", "Тортила Риба тон", "4,20", "", ""],
["", "tortila-picza-pikante", "Тортила Пица Пиканте", "3,50", "", ""],
["", "tortila-moczarela-chedr-miks-i-luk", "Тортила Моцарела, Чедър микс и лук", "3,50", "", ""],
["", "tortila-pileshko-pecheno", "Тортила Пилешко печено", "4,20", "", ""],
["", "tortila-mango-pile-tika", "Тортила Манго Пиле Тика", "4,20", "", ""],
["", "tortila-big-beef-melt", "Тортила Big Beef Melt", "4,20", "", ""],
["", "tortila-pile-barbekyu", "Тортила Пиле Барбекю", "4,20", "", ""],
["", "tortila-barbekyu-rebra", "Тортила Барбекю ребра", "4,20", "", ""],
["", "pileshka-kesadiya", "Пилешка кесадия", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/752368.jpg?width=302"],
["", "vegetarianska-kesadiya", "Вегетарианска кесадия", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/752369.jpg?width=302"],
["", "tortila-troen-bekon", "Тортила Троен бекон", "3,50", "", ""],
["", "tortila-poshirano-yajcze-s-topeno-sirene-i-shunka", "Тортила Поширано яйце с топено сирене и шунка", "4,20", "", ""],
["", "tortila-italian-bmt-", "Тортила Italian B.M.T. ®", "4,20", "", ""],
["", "tortila-veggie-delite", "Тортила Veggie Delite™", "2,80", "", ""],
["", "tortila-pikanten-italianski", "Тортила Пикантен Италиански", "3,50", "", ""],
["", "tortila-poshirano-yajcze-s-topeno-sirene", "Тортила Поширано яйце с топено сирене", "4,20", "", ""],
["", "tortila-poshirano-yajcze-s-topeno-sirene-i-bekon", "Тортила Поширано яйце с топено сирене и бекон", "4,20", "", ""],
["", "tortila-pueshko", "Тортила пуешко", "3,50", "", ""],
["", "tortila-subway-melt", "Тортила Subway Melt", "4,20", "", ""],
["", "shunka-kesadiya", "Шунка кесадия", "1,40", "", ""],
["", "pueshka-kesadiya", "Пуешка кесадия", "1,40", "", ""]

        ],

        "Меню Сандвичи": [
            ["", "menyu-veggie-delite", "Меню Veggie Delite™", "5,60", "", ""],
["", "menyu-blt", "Меню BLT", "5,60", "", ""],
["", "menyu-pile-teriyaki", "Меню Пиле Терияки", "7,00", "", ""],
["", "menyu-pikanto-veggy-patty", "Меню Пиканто Veggy Patty", "7,00", "", ""],
["", "menyu-pikanten-italianski", "Меню Пикантен Италиански", "6,30", "", ""],
["", "menyu-riba-ton", "Меню Риба тон", "6,30", "", ""],
["", "menyu-pileshko-pecheno", "Меню Пилешко печено", "6,30", "", ""],
["", "menyu-big-beef-melt", "Меню Big Beef Melt", "7,00", "", ""],
["", "menyu-italian-bmt-", "Меню Italian B.M.T. ®", "6,30", "", ""],
["", "menyu-shunka", "Меню Шунка", "6,30", "", ""],
["", "menyu-pile-barbekyu", "Меню Пиле Барбекю", "7,00", "", ""],
["", "menyu-troen-bekon", "Меню Троен бекон", "6,30", "", ""],
["", "menyu-poshirano-yajcze-s-topeno-sirene", "Меню Поширано яйце с топено сирене", "6,30", "", ""],
["", "menyu-poshirano-yajcze-s-topeno-sirene-i-bekon", "Меню Поширано яйце с топено сирене и бекон", "6,30", "", ""],
["", "menyu-poshirano-yajcze-s-topeno-sirene-i-shunka", "Меню Поширано яйце с топено сирене и шунка", "7,00", "", ""],
["", "menyu-barbekyu-rebra", "Меню Барбекю ребра", "7,00", "", ""],
["", "menyu-picza-pikante", "Меню Пица Пиканте", "6,30", "", ""]

        ],

        "Меню Тортили": [
            ["", "menyu-tortila-italian-bmt", "Меню Тортилa Italian B.M.T.®", "6,30", "", ""],
["", "menyu-tortila-veggie-delite", "Меню Тортилa Veggie Delite™", "5,60", "", ""],
["", "menyu-tortila-blt", "Меню Тортилa BLT", "5,60", "", ""],
["", "menyu-tortila-shunka", "Меню Тортилa Шунка", "6,30", "", ""],
["", "menyu-tortila-pikanten-italianski", "Меню Тортилa Пикантен Италиански", "6,30", "", ""],
["", "menyu-tortila-pile-teriyaki", "Меню Тортилa Пиле Терияки", "7,00", "", ""],
["", "menyu-tortila-riba-ton", "Меню Тортилa Риба тон", "6,30", "", ""],
["", "menyu-tortila-pikantno-veggy-patty", "Меню Тортила Пикантно Veggy Patty", "7,00", "", ""],
["", "menyu-tortila-picza-pikante", "Меню Тортилa Пица Пиканте", "6,30", "", ""],
["", "menyu-tortila-moczarela-chedr-miks-i-luk", "Меню Тортилa Моцарела, Чедър микс и лук", "6,30", "", ""],
["", "menyu-tortila-troen-bekon", "Меню Тортилa Троен бекон", "6,30", "", ""],
["", "menyu-tortila-pileshko-pecheno", "Меню Тортилa Пилешко печено", "6,30", "", ""],
["", "menyu-tortila-mango-pile-tika", "Меню Тортилa Манго Пиле Тика", "7,00", "", ""],
["", "menyu-tortila-big-beef-melt", "Меню Тортилa Big Beef Melt", "7,00", "", ""],
["", "menyu-tortila-pile-barbekyu", "Меню Тортилa Пиле Барбекю", "7,00", "", ""],
["", "menyu-tortila-barbekyu-rebra", "Меню Тортилa Барбекю ребра", "7,00", "", ""],
["", "menyu-tortila-poshirano-yajcze-s-topeno-sirene", "Меню Тортилa Поширано яйце с топено сирене", "6,30", "", ""],
["", "menyu-tortila-poshirano-yajcze-s-topeno-sirene-i-bekon", "Меню Тортилa Поширано яйце с топено сирене и бекон", "6,30", "", ""],
["", "menyu-tortila-poshirano-yajcze-s-topeno-sirene-i-shunka", "Меню Тортилa Поширано яйце с топено сирене и шунка", "7,00", "", ""],
["", "menyu-tortila-pueshko", "Меню Тортила пуешко", "6,30", "", ""],
["", "menyu-tortila-subway-melt", "Меню Тортила Subway Melt", "6,30", "", ""]

        ],

        "Меню Салати": [
            ["", "menyu-salata-shunka", "Меню салата Шунка", "7,00", "", ""],
["", "menyu-salata-blt", "Меню салата BLT", "7,00", "", ""],
["", "menyu-salata-veggie-delite", "Меню салата Veggie Delite™", "6,30", "", ""],
["", "menyu-salata-pikanten-italianski", "Меню салата Пикантен Италиански", "7,00", "", ""],
["", "menyu-salata-pikatno-veggy-patty", "Меню салата Пикатно Veggy Patty", "7,70", "", ""],
["", "menyu-salata-picza-pikante", "Меню салата Пица Пиканте", "7,00", "", ""],
["", "menyu-salata-troen-bekon", "Меню салата Троен бекон", "7,00", "", ""],
["", "menyu-salata-pileshko-pecheno", "Меню салата Пилешко печено", "7,00", "", ""],
["", "menyu-salata-italian-bmt", "Меню салата Italian B.M.T.®", "7,70", "", ""],
["", "menyu-salata-riba-ton", "Меню салата Риба тон", "7,70", "", ""],
["", "menyu-salata-mango-pile-tika", "Меню салата Манго Пиле Тика", "7,70", "", ""],
["", "menyu-salata-pile-teriyaki", "Меню салата Пиле Терияки", "7,70", "", ""],
["", "menyu-salata-big-beef-melt", "Меню салата Big Beef Melt", "7,70", "", ""],
["", "menyu-salata-pile-barbekyu", "Меню салата Пиле Барбекю", "7,70", "", ""],
["", "menyu-salata-barbekyu-rebra", "Меню салата Барбекю ребра", "7,70", "", ""],
["", "menyu-salata-poshirano-yajcze-s-topeno-sirene", "Меню салата Поширано яйце с топено сирене", "7,70", "", ""],
["", "menyu-salata-poshirano-yajcze-s-topeno-sirene-i-bekon", "Меню салата Поширано яйце с топено сирене и бекон", "7,70", "", ""],
["", "menyu-salata-poshirano-yajcze-s-topeno-sirene-i-shunka", "Меню салата Поширано яйце с топено сирене и шунка", "7,70", "", ""],
["", "menyu-salata-pueshko", "Меню салата пуешко", "7,00", "", ""],
["", "menyu-subway-melt-salata", "Меню Subway Melt салата", "7,70", "", ""]

        ],

        "Easy sub": [
            ["", "lesen-sandvich-vegetarianski-15sm", "Лесен сандвич Вегетариански 15см.", "2,10", "", ""],
["", "lesen-sandvich-shunka-15sm", "Лесен сандвич Шунка 15см.", "2,10", "", ""],
["", "lesen-sandvich-peperoni-15sm", "Лесен сандвич Пеперони 15см.", "2,10", "", ""]

        ],

        "Snacks": [
            ["", "malka-salata", "Малка салата", "1,40", "92", "https://images.deliveryhero.io/image/fd-bg/Products/752449.jpg?width=302"]

        ],

        "Нови салати": [
            ["", "new-salata-s-riba-ton", "NEW Салата с Риба тон", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/752439.jpg?width=302"],
["", "new-grczka-salata", "NEW Гръцка салата", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/752440.jpg?width=302"],
["", "new-salata-pile-czezar", "NEW Салата Пиле Цезар", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/752441.jpg?width=302"]

        ],

        "Бисквитки и чипс": [
            ["", "biskvitka-s-malinov-chijzkejk", "Бисквитка с малинов чийзкейк", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/572509.jpg?width=302"],
["", "byala-biskvitka-s-yadki-makadamiya", "Бяла бисквитка с ядки макадамия", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/76702.jpg?width=302"],
["", "cherna-biskvitka-s-kafyav-shokolad", "Черна бисквитка с кафяв шоколад", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/188231.jpg?width=302"],
["", "chips-ruffles-ketchup", "Чипс Ruffles кетчуп", "0,70", "", ""],
["", "chips-ruffles-sol", "Чипс Ruffles сол", "0,70", "", ""],
["", "chips-ruffles-barbekyu", "Чипс Ruffles барбекю", "0,70", "", ""],
["", "biskvitka-s-oveseni-yadki-i-stafidi", "Бисквитка с овесени ядки и стафиди", "0,70", "", ""]

        ],

        "drinks": [
            ["", "bira-heineken", "Бира Heineken", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/76734.jpg?width=302"],
["", "aloe-naturalno", "Алое натурално", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/185609.jpg?width=302"],
["", "studen-chaj-s-gorski-plodove", "Студен чай с Горски плодове", "2,10", "", ""],
["", "studen-chaj-limon", "Студен чай лимон", "2,10", "", ""],
["", "studen-chaj-praskova", "Студен чай праскова", "2,10", "", ""],
["", "aloe-s-nar", "Алое с Нар", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/185610.png?width=302"]

        ],

        "Coca-Cola напитки": [
            ["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/76722.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/76723.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/76724.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/76732.jpg?width=302"],
["", "cappy-praskova", "Cappy Праскова", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/76729.jpg?width=302"],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/76730.jpg?width=302"],
["", "cappy-portokal", "Cappy Портокал", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/76731.jpg?width=302"]

        ],

        "Кетъринг": [
            ["", "plato-biskviti", "Плато бисквити", "30,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/76719.png?width=302"],
["", "plato-pir-ot-mesa", "Плато Пир от меса", "34,30", "", ""],
["", "plato-za-zakuska", "Плато за закуска", "34,30", "", ""],
["", "vegetariansko-plato", "Вегетарианско плато", "34,30", "", ""],
["", "zdravoslovno-plato", "Здравословно плато", "34,30", "", ""]

        ]
    }', 
    'slug' => 'subway',
    'business_name' => 'Subway',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Varna',
    'region' => 'Varna',
    'postal_code' => '9000',
    'address' => 'бул. &quot;Сливница&quot; 41',
    'address_additional' => '',
    'coords_x' => '43.20574188',
    'coords_y' => '27.91913986',
    'phone' => '+359885799229',
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



// Dobrich

[
    'creator_id' => 1,
    'dishes_ids' => '{
        
        "Промо Меню": [
            ["", "kebap-burger-menyu", "Кебап бургер  меню", "3,50", "", ""],
["", "kebap-burger", "Кебап бургер", "2,10", "", ""]

        ],

        "burgers": [
            ["", "burger-s-bekon", "Бургер с бекон", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604095.jpg?width=302"],
["", "chijzburger", "Чийзбургер", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604097.jpg?width=302"],
["", "khamburger", "Хамбургер", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604098.jpg?width=302"],
["", "pileshki-burger", "Пилешки бургер", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604100.jpg?width=302"],
["", "mini-pileshki-burger", "Мини пилешки бургер", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604101.jpg?width=302"],
["", "tortila-s-pile", "Тортила с пиле", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604145.jpg?width=302"],
["", "soeva-tortila", "Соева тортила", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604146.jpg?width=302"],
["", "megaburger", "Мегабургер", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/679413.jpg?width=302"],
["", "dvoen-chijzburger", "Двоен Чийзбургер", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604096.jpg?width=302"],
["", "barbekyu-burger", "Барбекю бургер", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/858194.jpg?width=302"]

        ],

        "Меню": [
            ["", "khesburger-menyu", "Хесбургер меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/604160.jpg?width=302"],
["", "dvoen-chijzburger-menyu", "Двоен Чийзбургер меню", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604157.jpg?width=302"],
["", "detsko-menyu", "Детско меню", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604147.jpg?width=302"],
["", "soeva-tortila-menyu", "Соева тортила меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/604149.jpg?width=302"],
["", "tortila-s-pile-menyu", "Тортила с пиле меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/604150.jpg?width=302"],
["", "mini-pileshki-burger-menyu", "Мини пилешки бургер меню", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604152.jpg?width=302"],
["", "pileshki-burger-menyu", "Пилешки бургер меню", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604153.jpg?width=302"],
["", "khamburger-menyu", "Хамбургер меню", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604155.jpg?width=302"],
["", "chijzburger-menyu", "Чийзбургер меню", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604156.jpg?width=302"],
["", "burger-s-bekon-menyu", "Бургер с бекон меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/604158.jpg?width=302"],
["", "megaburger-menyu", "Мегабургер меню", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/679412.jpg?width=302"],
["", "barbekyu-burger-menyu", "Барбекю бургер Меню", "4,90", "", ""]

        ],

        "salads": [
            ["", "salata-pile", "Салата пиле", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604532.jpg?width=302"],
["", "burger-salata", "Бургер салата", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604533.jpg?width=302"],
["", "topla-salata-ss-soya", "Топла салата със соя", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/604534.jpg?width=302"],
["", "mini-salata-s-dresing-po-izbor", "Мини салата с дресинг по избор", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604535.jpg?width=302"]

        ],

        "Пържени картофи и Хрупкави предложения": [
            ["", "normalni-kartofki", "Нормални картофки", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604536.jpg?width=302"],
["", "golemi-kartofki", "Големи картофки", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604537.jpg?width=302"],
["", "pileshki-khapki--sos", "Пилешки хапки + сос", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604539.jpg?width=302"],
["", "pileshki-khapki--sos", "Пилешки хапки + сос", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604540.jpg?width=302"],
["", "pileshki-khapki--sos", "Пилешки хапки + сос", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604541.jpg?width=302"],
["", "soevi-prchiczi--sos", "Соеви пръчици + сос", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604542.jpg?width=302"],
["", "soevi-prchiczi--sos", "Соеви пръчици + сос", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/604543.jpg?width=302"],
["", "soevi-prchiczi--sos", "Соеви пръчици + сос", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604544.jpg?width=302"],
["", "kutiya-s-pileshki-khapki", "Кутия с пилешки хапки", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/604545.jpg?width=302"]

        ],

        "sauces": [
            ["", "majoneza-s-chushki", "Майонеза с чушки", "0,00", "38", "https://images.deliveryhero.io/image/fd-bg/Products/613300.jpg?width=302"],
["", "majoneza-s-krastavichki", "Майонеза с краставички", "0,00", "38", "https://images.deliveryhero.io/image/fd-bg/Products/613301.jpg?width=302"],
["", "sladko-kisel-sos", "Сладко-кисел сос", "0,00", "32", "https://images.deliveryhero.io/image/fd-bg/Products/613302.jpg?width=302"],
["", "barbekyu-sos", "Барбекю сос", "0,00", "32", "https://images.deliveryhero.io/image/fd-bg/Products/613303.jpg?width=302"],
["", "chesnova-majoneza", "Чеснова майонеза", "0,00", "32", "https://images.deliveryhero.io/image/fd-bg/Products/613304.jpg?width=302"]

        ],

        "desserts": [
            ["", "ponichka-s-byal-shokolad", "Поничка с бял шоколад", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604614.jpg?width=302"],
["", "ponichka-s-mlechen-shokolad", "Поничка с млечен шоколад", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604615.jpg?width=302"],
["", "biskvitka-s-dvoen-shokolad", "Бисквитка с двоен шоколад", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604616.jpg?width=302"],
["", "biskvitka-s-byal-shokolad", "Бисквитка с бял шоколад", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/604617.jpg?width=302"]

        ],

        "Coca-Cola напитки": [
            ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604590.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604591.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604592.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/604593.jpg?width=302"],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/818481.jpg?width=302"],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/818482.jpg?width=302"]

        ],

        "drinks": [
            ["", "mineralna-voda", "Минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/604612.jpg?width=302"],
["", "gazirana-voda", "Газирана вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/604613.jpg?width=302"],
["", "ajran", "Айран", "0,70", "", ""]

        ]
    }', 
    'slug' => 'hesburger',
    'business_name' => 'Hesburger (Тодор Александров)',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Sofia',
    'region' => 'Sofia',
    'postal_code' => '1000',
    'address' => 'на ъгъла на бул. Константин Величков и бул. Тодор Александров',
    'address_additional' => '',
    'coords_x' => '42.70230093',
    'coords_y' => '23.29724245',
    'phone' => '+359876821168',
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



// Pleven

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



// Pazardghic / Yambol / Montanta / Haskovo

[
    'creator_id' => 1,
    'dishes_ids' => '{
        
        "Комбо меню": [
            ["", "plato-bbq", "Плато BBQ", "11,90", "", ""],
["", "2br-kyufteta---kombo", "2бр кюфтета - КОМБО", "4,90", "", ""],
["", "2br-kebapcheta---kombo", "2бр кебапчета - КОМБО", "4,90", "", ""],
["", "svinski-rebra---kombo", "Свински ребра - КОМБО", "9,10", "", ""],
["", "2br-svinski-shishcheta---kombo", "2бр свински шишчета - КОМБО", "6,30", "", ""],
["", "pileshka-przhola-ot-but---kombo", "Пилешка пържола от бут - КОМБО", "5,60", "", ""],
["", "adana-kebap---kombo", "Адана кебап - КОМБО", "6,30", "", ""],
["", "meraklijsko-kyufte---kombo", "Мераклийско кюфте - КОМБО", "5,60", "", ""],
["", "pileshko-file---kombo", "Пилешко филе - КОМБО", "5,60", "", ""],
["", "biftek", "Бифтек", "6,30", "", ""]

        ],

        "Салати и разядки": [
            ["", "shopska-salata", "Шопска салата", "1,40", "200", ""],
["", "zele-i-morkovi", "Зеле и моркови", "0,70", "150", ""],
["", "kartofena-salata", "Картофена салата", "1,40", "200", ""],
["", "lyutenicza-ss-sirene-i-luk", "Лютеница със сирене и лук", "0,70", "100", "https://images.deliveryhero.io/image/fd-bg/Products/351915.JPG?width=302"],
["", "urnebes", "Урнебес", "0,70", "100", "https://images.deliveryhero.io/image/fd-bg/Products/351917.JPG?width=302"],
["", "babina-salata", "Бабина салата", "0,70", "100", "https://images.deliveryhero.io/image/fd-bg/Products/351918.JPG?width=302"],
["", "snezhanka", "Снежанка", "0,70", "100", ""],
["", "razyadka-s-pechen-patladzhan", "Разядка с печен патладжан", "0,70", "100", ""],
["", "plnen-domat-ss-salata-tabule-i-krem-ot-tikvichki", "Пълнен домат със салата табуле и крем от тиквички", "2,80", "350", "https://images.deliveryhero.io/image/fd-bg/Products/483266.JPG?width=302"],
["", "maslinova-pasta", "Маслинова паста", "1,40", "100", ""]

        ],

        "alaminuti": [
            ["", "khrupkavi-pileshki-filencza-s-chesnov-sos", "Хрупкави пилешки филенца с чеснов сос", "2,80", "250", "https://images.deliveryhero.io/image/fd-bg/Products/351921.JPG?width=302"],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "1,40", "", ""],
["", "przheni-kartofi", "Пържени картофи", "5,60", "", ""]

        ],

        "BBQ меню": [
            ["", "svinsko-shishche", "Свинско шишче", "1,40", "100", "https://images.deliveryhero.io/image/fd-bg/Products/351932.JPG?width=302"],
["", "svinski-rebra", "Свински ребра", "4,20", "200", ""],
["", "meraklijsko-kyufte", "Мераклийско кюфте", "2,10", "200", "https://images.deliveryhero.io/image/fd-bg/Products/351935.JPG?width=302"],
["", "kyufte", "Кюфте", "0,70", "100", "https://images.deliveryhero.io/image/fd-bg/Products/351936.JPG?width=302"],
["", "adana-kebap", "Адана кебап", "2,80", "200", "https://images.deliveryhero.io/image/fd-bg/Products/351938.JPG?width=302"],
["", "pitka", "Питка", "0,00", "120", ""],
["", "lyutiva-chushka", "Лютива чушка", "0,00", "", ""],
["", "pileshki-krilcza-s-chesnov-sos", "Пилешки крилца с чеснов сос", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/351939.JPG?width=302"],
["", "kebapche", "Кебапче", "0,70", "100", "https://images.deliveryhero.io/image/fd-bg/Products/352423.JPG?width=302"],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "2,10", "200", "https://images.deliveryhero.io/image/fd-bg/Products/352424.JPG?width=302"],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshko-file", "Пилешко филе", "2,10", "200", "https://images.deliveryhero.io/image/fd-bg/Products/351937.JPG?width=302"],
["", "drpano-svinsko-na-baven-ogn-s-domashni-przheni-kartofi", "Дърпано свинско на бавен огън с домашни пържени картофи", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/584808.JPG?width=302"],
["", "balkanski-biftek", "Балкански бифтек", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/789383.JPG?width=302"],
["", "teleshko-drpano-na-baven-ogn", "Телешко дърпано на бавен огън", "4,90", "400", ""]

        ],

        "BBQ Бургери": [
            ["", "burger-s-kyufte", "Бургер с кюфте", "2,80", "", ""],
["", "burger-s-pileshka-przhola", "Бургер с пилешка пържола", "3,50", "", ""],
["", "burger-s-meraklijsko-kyufte", "Бургер с мераклийско кюфте", "4,20", "", ""],
["", "burger-s-teleshko-kyufte", "Бургер с телешко кюфте", "4,20", "", ""],
["", "burger-s-pileshko-file", "Бургер с пилешко филе", "3,50", "", ""],
["", "burger-s-balkanski-biftek", "Бургер с Балкански Бифтек", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/507508.JPG?width=302"],
["", "burger-s-drpano-svinsko", "Бургер с дърпано свинско", "4,90", "600", ""],
["", "burger-s-drpano-teleshko", "Бургер с дърпано телешко", "5,60", "600", ""],
["", "burger-s-konski-biftek", "Бургер с конски бифтек", "4,90", "600", ""],
["", "burger-ss-svinski-vrat", "Бургер със свински врат", "4,90", "500", ""]

        ],

        "Картофи на жар": [
            ["", "pechen-kartof-na-zhar", "Печен картоф на жар", "2,10", "", ""],
["", "pechen-kartof-na-zhar-s-pile", "Печен картоф на жар с пиле", "2,80", "", ""],
["", "pechen-kartof-na-zhar-ss-svinsko-drpano-meso", "Печен картоф на жар със свинско дърпано месо", "2,80", "", ""]

        ],

        "Тортила сандвичи": [
            ["", "pileshki-tortila-sandvich", "Пилешки тортила сандвич", "2,80", "350", ""],
["", "svinski-tortila-sandvich", "Свински тортила сандвич", "2,80", "350", ""],
["", "teleshki-tortila-sandvich", "Телешки тортила сандвич", "2,80", "350", ""],
["", "vegetarianski-tortila-sandvich", "Вегетариански тортила сандвич", "2,10", "350", ""],
["", "zatvorena-tortila-s-drpano-svinsko-meso-chedr-kiseli-krastavichki-karameliziran-luk-gorchicza-przheni-kartofi", "Затворена тортила с дърпано свинско месо, чедър, кисели краставички, карамелизиран лук, горчица, пържени картофи", "3,50", "450", "https://images.deliveryhero.io/image/fd-bg/Products/584810.JPG?width=302"],
["", "trotila-s-3-vida-meso", "Тротила с 3 вида месо", "3,50", "", ""],
["", "zatvorena-tortila-s-drpano-teleshko", "Затворена тортила с дърпано телешко", "4,20", "450", ""]

        ],

        "Coca-Cola напитки": [
            ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/506779.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/506780.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/506781.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/506782.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/506783.jpg?width=302"],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/506784.jpg?width=302"]

        ],

        "drinks": [
            ["", "staropramen", "Staropramen", "1,40", "", ""],
["", "budweiser", "Budweiser", "1,40", "", ""]

        ]
    }', 
    'slug' => 'bbq',
    'business_name' => 'BBQ',
    'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
    'city' => 'Sofia',
    'region' => 'Sofia',
    'postal_code' => '1000',
    'address' => 'бул.княз Александър Дондуков 15',
    'address_additional' => '',
    'coords_x' => '42.69801712',
    'coords_y' => '23.32810974',
    'phone' => '+359897941090',
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