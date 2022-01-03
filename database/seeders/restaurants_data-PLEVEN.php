<?php

use Carbon\Carbon;

$restaurants = [

    [
        'creator_id' => 1,
        'dishes_ids' => '{
            
        }', 
        'slug' => 'snek-bar-pri-tochev',
        'business_name' => 'Снек бар При Точев',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Дойран 160',
        'address_additional' => '',
        'coords_x' => '43.40697459',
        'coords_y' => '24.61679792',
        'phone' => '+359879284128',
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
["", "salata-kapreze", "Салата Капрезе", "3,50", "300", ""],
["", "balkandzhijska-redena-salata", "Балканджийска редена салата", "4,90", "350", ""],
["", "dzadziki", "Дзадзики", "2,80", "150", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/578919.jpg?width=302"],
["", "zelena-salata", "Зелена салата", "3,50", "300", ""],
["", "salata-kula", "Салата Кула", "4,20", "350", ""]

            ],

            "starters": [
                ["", "pileshki-filencza-s-kornflejks-i-chesnov-sos", "Пилешки филенца с корнфлейкс и чеснов сос", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/578925.jpg?width=302"],
["", "panirani-topeni-sirencza-ss-sladko-ot-borovinki", "Панирани топени сиренца със сладко от боровинки", "3,50", "200", ""],
["", "khapki-sirene-pane", "Хапки сирене пане", "3,50", "200", ""],
["", "khapki-kashkaval-pane", "Хапки кашкавал пане", "3,50", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,80", "200", "https://images.deliveryhero.io/image/fd-bg/Products/578931.jpg?width=302"],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", "https://images.deliveryhero.io/image/fd-bg/Products/578932.jpg?width=302"],
["", "kartofen-chips-s-chesnov-sos", "Картофен чипс с чеснов сос", "2,80", "200", ""],
["", "chupeni-kartofi-s-bilkov-dresing-i-tryufelov-zekhtin", "Чупени картофи с билков дресинг и трюфелов зехтин", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/578934.jpg?width=302"],
["", "brokoli-ss-sos-chetiri-sirena", "Броколи със сос Четири сирена", "4,90", "300", ""],
["", "panirani-ribni-filencza-s-kartofen-chips-i-sos-tartar", "Панирани рибни филенца с картофен чипс и сос Тартар", "4,90", "300", ""],
["", "panirani-kalmari-ss-sladko-chili-i-susam", "Панирани калмари със сладко чили и сусам", "6,30", "250", ""],
["", "przhen-safrid", "Пържен сафрид", "6,30", "300", ""],
["", "panirani-lucheni-krgcheta-s-chesnov-sos", "Панирани лучени кръгчета с чеснов сос", "2,80", "300", "https://images.deliveryhero.io/image/fd-bg/Products/912792.jpg?width=302"],
["", "glazirani-pikantni-krilcza-s-med-div-luk-i-susam", "Глазирани пикантни крилца с мед, див лук и сусам", "4,90", "350", ""]

            ],

            "pasta": [
                ["", "pasta-rustikana", "Паста Рустикана", "5,60", "330", ""],
["", "pasta-boloneze", "Паста Болонезе", "5,60", "330", ""],
["", "pasta-karbonara", "Паста Карбонара", "5,60", "330", ""],
["", "pasta-s-manatarki", "Паста с манатарки", "5,60", "330", ""]

            ],

            "risotto": [
                ["", "rizoto-s-pile", "Ризото с пиле", "5,60", "330", "https://images.deliveryhero.io/image/fd-bg/Products/578956.jpg?width=302"],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "6,30", "330", ""]

            ],

            "Основни ястия": [
                ["", "domashni-teleshki-kyufteta-na-skara-s-garnitura-chupeni-kartofi-i-domashna-lyutenicza", "Домашни телешки кюфтета на скара с гарнитура чупени картофи и домашна лютеница", "6,30", "400", ""],
["", "konski-sudzhuk-na-greben-s-garnitura-kartofeno-pyure-s-manatarki-i-zelena-salata", "Конски суджук на гребен с гарнитура картофено пюре с манатарки и зелена салата", "8,40", "400", ""],
["", "marinovana-pileshka-przhola-ot-but-s-garnitura-chupeni-kartofi", "Маринована пилешка пържола от бут с гарнитура чупени картофи", "5,60", "350", ""],
["", "pile-zhulien", "Пиле Жулиен", "6,30", "350", ""],
["", "svinska-vratna-przhola-s-khrupkav-luk-i-sotirani-gbi", "Свинска вратна пържола с хрупкав лук и сотирани гъби", "7,00", "350", ""],
["", "svinski-rebra-s-bejbi-czarevichka-khrupkav-luk-i-sos-barbekyu", "Свински ребра с бейби царевичка, хрупкав лук и сос барбекю", "8,40", "400", "https://images.deliveryhero.io/image/fd-bg/Products/578968.jpg?width=302"],
["", "svinski-grdi-na-skara-s-khrupkav-luk-i-sos-barbekyu", "Свински гърди на скара с хрупкав лук и сос барбекю", "6,30", "350", ""],
["", "pile-moczarela", "Пиле моцарела", "6,30", "350", ""],
["", "balkanska-pstrva-na-skara", "Балканска пъстърва на скара", "7,00", "300", ""]

            ],

            "additives": [
                ["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "topeno-sirene", "Топено сирене", "0,00", "50", ""],
["", "gbi", "Гъби", "0,00", "50", ""],
["", "maslini", "Маслини", "0,00", "50", ""],
["", "yajcze---vareno", "Яйце - варено", "0,00", "", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "50", ""],
["", "khalapenos", "Халапеньос", "0,00", "50", ""]

            ],

            "burgers": [
                ["", "riben-burger", "Рибен бургер", "5,60", "350", ""],
["", "burgert-na-elvis-presli", "Бургерът на Елвис Пресли", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/912758.jpg?width=302"],
["", "teleshki-burger", "Телешки бургер", "4,90", "350", ""],
["", "pileshki-burger", "Пилешки бургер", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/578998.jpg?width=302"]

            ],

            "Сухи мезета": [
                ["", "kashkaval-natyur", "Кашкавал натюр", "1,40", "50", ""],
["", "sirene-natyur", "Сирене натюр", "1,40", "50", ""]

            ]
        }', 
        'slug' => 'refresh',
        'business_name' => 'ReFresh',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Шипка 22',
        'address_additional' => '',
        'coords_x' => '43.40442424',
        'coords_y' => '24.62255771',
        'phone' => '+359877176217',
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
                ["", "banichka-ss-sirene", "Баничка със сирене", "0,70", "170", ""],
["", "balaton", "Балатон", "0,70", "250", ""],
["", "kajlshka", "Кайлъшка", "0,70", "250", ""],
["", "picza-miks", "Пица микс", "0,70", "250", ""],
["", "picza-pleven", "Пица Плевен", "1,40", "250", ""],
["", "picza-premium-miks", "Пица премиум микс", "0,70", "250", ""],
["", "role", "Роле", "0,70", "200", ""],
["", "picza-miks-xl", "Пица микс XL", "9,10", "1600", ""],
["", "picza-premium-miks-xl", "Пица премиум микс XL", "9,10", "1600", ""]

            ],

            "desserts": [
                ["", "baklava", "Баклава", "0,70", "", ""],
["", "orekhovka", "Ореховка", "0,70", "", ""],
["", "dont", "Донът", "0,70", "", ""],
["", "mfini", "Мъфини", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/933394.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/933395.jpg?width=302"]

            ],

            "drinks": [
                ["", "boza", "Боза", "0,00", "300", ""],
["", "ajryan-danone", "Айрян Danone", "0,70", "290", ""],
["", "ajryan-danone", "Айрян Danone", "0,70", "480", ""],
["", "dzp-danone", "ДЗП Danone", "0,70", "290", ""]

            ]
        }', 
        'slug' => 'pekarna-shatra',
        'business_name' => 'Пекарна Шатра',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5801',
        'address' => 'бул. Данаил Попов 18',
        'address_additional' => '',
        'coords_x' => '43.41347',
        'coords_y' => '24.616495',
        'phone' => '+359887580333',
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
                ["", "dyuner-malk", "Дюнер Mалък", "2,10", "", ""],
["", "dyuner-sreden", "Дюнер Среден", "2,10", "", ""],
["", "dyuner-golyam", "Дюнер Голям", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/858684.JPG?width=302"],
["", "dyuner-boks", "Дюнер Бокс", "3,50", "", ""]

            ],

            "burgers": [
                ["", "royal-burger", "Роял бургер", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/858765.JPG?width=302"],
["", "dyuner-burger", "Дюнер бургер", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/858766.JPG?width=302"]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/858768.JPG?width=302"],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/858769.JPG?width=302"]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,80", "350", "https://images.deliveryhero.io/image/fd-bg/Products/858772.JPG?width=302"],
["", "grczka-salata", "Гръцка салата", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/858773.JPG?width=302"]

            ],

            "alaminuti": [
                ["", "topeni-sirencza-ss-sladko", "Топени сиренца със сладко", "3,50", "200", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "3,50", "200", ""],
["", "pileshki-drobcheta-s-gbi-i-luk", "Пилешки дробчета с гъби и лук", "2,80", "300", "https://images.deliveryhero.io/image/fd-bg/Products/858779.JPG?width=302"],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", "https://images.deliveryhero.io/image/fd-bg/Products/858783.JPG?width=302"],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""]

            ]
        }', 
        'slug' => 'pitaa-skepasti',
        'business_name' => 'Fresh - Non Stop',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'Димитър Константинов 23',
        'address_additional' => '',
        'coords_x' => '43.40932722',
        'coords_y' => '24.62016674',
        'phone' => '+359877882111',
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
            
            "Фрешове": [
                ["", "ananas-portokal-i-nar", "Ананас, портокал и нар", "3,50", "250", ""],
["", "ppesh", "Пъпеш", "1,40", "250", ""],
["", "dinya", "Диня", "1,40", "250", ""],
["", "krusha-i-nar", "Круша и нар", "2,80", "250", ""],
["", "grejpfrut-morkov-i-yablka", "Грейпфрут, морков и ябълка", "2,80", "250", ""],
["", "portokal-grejpfrut-i-ananas", "Портокал, грейпфрут и ананас", "2,80", "250", ""],
["", "banan-yablka-i-portokal", "Банан, ябълка и портокал", "2,10", "250", ""],
["", "yablka-limon-i-dzhindzhifil", "Ябълка, лимон и джинджифил", "1,40", "250", ""],
["", "grejpfrut-i-portokal", "Грейпфрут и портокал", "2,10", "250", ""],
["", "praskova-i-portokal", "Праскова и портокал", "2,80", "250", ""],
["", "czveklo-yablka-i-portokal", "Цвекло, ябълка и портокал", "2,10", "250", ""],
["", "nar-i-yablka", "Нар и ябълка", "2,80", "250", ""],
["", "czelina-morkov-i-yablka", "Целина, морков и ябълка", "2,80", "250", ""],
["", "nar-i-grejpfrut-250ml", "Нар и грейпфрут (250мл).", "3,50", "", ""],
["", "yablka-i-praskova", "Ябълка и праскова", "2,10", "250", ""],
["", "nar-i-ananas", "Нар и ананас", "3,50", "250", ""],
["", "praskova-banan-i-portokal", "Праскова, банан и портокал", "2,10", "250", ""],
["", "yablka-nar-i-portokal", "Ябълка, нар и портокал", "2,80", "250", ""],
["", "nar-yablka-i-ananas", "Нар, ябълка и ананас", "2,80", "250", ""],
["", "lajm-i-portokal", "Лайм и портокал", "3,50", "250", ""],
["", "nar-yablka-i-grejpfrut", "Нар, ябълка и грейпфрут", "2,80", "250", ""],
["", "limon", "Лимон", "4,20", "250", ""],
["", "lajm-i-limon", "Лайм и лимон", "4,20", "250", ""],
["", "yablka-i-praskova", "Ябълка и праскова", "2,10", "250", ""],
["", "lajm-czveklo-i-czelina", "Лайм, цвекло и целина", "4,20", "250", ""],
["", "ananas-i-mango", "Ананас и манго", "4,90", "250", ""],
["", "ananas-i-portokal", "Ананас и портокал", "3,50", "250", ""],
["", "krastavicza-czelina-i-lajm", "Краставица, целина и лайм", "4,20", "250", ""],
["", "ananas-yablka-i-portokal", "Ананас, ябълка и портокал", "2,10", "250", ""],
["", "grejpfrut-i-morkov", "Грейпфрут и морков", "2,80", "250", ""],
["", "grejpfrut-limon-i-portokal", "Грейпфрут, лимон и портокал", "2,80", "", ""],
["", "grejpfrut-i-yablka", "Грейпфрут и ябълка", "2,80", "250", ""],
["", "grejpfrut-i-limon", "Грейпфрут и лимон", "3,50", "250", ""],
["", "czveklo-morkov-i-limon", "Цвекло, морков и лимон", "2,10", "250", ""],
["", "portokal-i-limon", "Портокал и лимон", "2,80", "250", ""],
["", "nar", "Нар", "3,50", "250", ""],
["", "yablka-i-morkov", "Ябълка и морков", "2,10", "250", ""],
["", "portokal-i-morkov", "Портокал и морков", "2,10", "250", ""],
["", "yablka-i-portokal", "Ябълка и портокал", "2,10", "250", ""],
["", "morkov-i-czveklo", "Морков и цвекло", "2,10", "250", ""],
["", "yablka-i-czveklo", "Ябълка и цвекло", "2,10", "250", ""],
["", "czveklo-i-portokal", "Цвекло и портокал", "2,10", "250", ""],
["", "morkov-yablka-i-czveklo", "Морков, ябълка и цвекло", "2,10", "250", ""],
["", "grejpfrut-i-portokal", "Грейпфрут и портокал", "2,80", "250", ""],
["", "morkov-yablka-i-portokal", "Морков, ябълка и портокал", "1,40", "250", ""],
["", "yablka-i-ananas", "Ябълка и ананас", "2,10", "250", ""],
["", "nar-i-portokal", "Нар и портокал", "2,80", "250", ""],
["", "limon", "Лимон", "4,20", "250", ""],
["", "ananas", "Ананас", "2,80", "250", ""],
["", "portokal", "Портокал", "2,10", "250", ""],
["", "krusha", "Круша", "2,80", "250", ""],
["", "morkov", "Морков", "1,40", "250", ""],
["", "yablka", "Ябълка", "1,40", "250", ""],
["", "grejpfrut", "Грейпфрут", "3,50", "250", ""],
["", "praskova", "Праскова", "2,10", "250", ""],
["", "czveklo", "Цвекло", "1,40", "250", ""],
["", "domat", "Домат", "2,10", "250", ""]

            ]
        }', 
        'slug' => 'brza-zakuska-pri-neli',
        'business_name' => 'Свежи фрешове',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'улица „Неофит Рилски“ 23а',
        'address_additional' => '',
        'coords_x' => '43.41549814',
        'coords_y' => '24.62383232',
        'phone' => '+359882646495',
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
                ["", "svezha-salata-ot-krastaviczi", "Свежа салата от краставици", "0,00", "100", ""],
["", "svezha-salata-ot-domati", "Свежа салата от домати", "0,00", "100", ""],
["", "svezha-salata-ot-zele", "Свежа салата от зеле", "0,00", "100", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,00", "", ""],
["", "kyufte", "Кюфте", "0,00", "", ""],
["", "pikantno-kyufte", "Пикантно кюфте", "0,00", "", ""],
["", "pushena-nadenicza", "Пушена наденица", "2,10", "", ""],
["", "pusheno-karnache", "Пушено карначе", "0,70", "", ""],
["", "domashen-sudzhuk", "Домашен суджук", "1,40", "", ""],
["", "mecha-stpka", "Меча стъпка", "1,40", "", ""],
["", "shniczel", "Шницел", "0,70", "", ""],
["", "barbekyu-karnache", "Барбекю карначе", "0,70", "", ""],
["", "barbekyu-nadenicza", "Барбекю наденица", "2,10", "", ""]

            ],

            "others": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "domashna-pitka", "Домашна питка", "0,00", "", ""],
["", "teleshki-burger", "Телешки бургер", "2,80", "", ""]

            ]
        }', 
        'slug' => 'cr-pr-2',
        'business_name' => 'Цър Пър 2',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5805',
        'address' => 'ул. Гренадерска 3',
        'address_additional' => '',
        'coords_x' => '43.4177831',
        'coords_y' => '24.6144426',
        'phone' => '+359899985181',
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
                ["", "banicza-ss-sirene", "Баница със сирене", "0,70", "200", ""],
["", "banicza-s-maya", "Баница с мая", "0,70", "250", ""],
["", "role", "Роле", "0,70", "200", ""],
["", "kajlshka", "Кайлъшка", "0,70", "250", ""],
["", "nadenicza", "Наденица", "0,70", "250", ""],
["", "shapka", "Шапка", "0,70", "250", ""],
["", "picza-krgla", "Пица Кръгла", "0,70", "250", ""],
["", "balaton", "Балатон", "0,70", "200", ""],
["", "oktopod", "Октопод", "1,40", "250", ""],
["", "gondola", "Гондола", "1,40", "250", ""],
["", "gevrek", "Геврек", "0,00", "100", ""],
["", "kashkavalka", "Кашкавалка", "0,70", "200", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "0,70", "", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "1,40", "", ""],
["", "princzesa-s-kashkaval-sirene-i-yajcze", "Принцеса с кашкавал, сирене и яйце", "1,40", "", ""],
["", "kurabiya", "Курабия", "0,00", "100", ""],
["", "kozunak", "Козунак", "0,70", "250", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926213.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926214.jpg?width=302"],
["", "fanta-byala-praskova", "Fanta Бяла Праскова", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926215.jpg?width=302"],
["", "fanta-grozde", "Fanta Грозде", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926216.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926217.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926218.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926219.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajryan-vereya", "Айрян Верея", "0,70", "500", ""],
["", "ajryan-vereya", "Айрян Верея", "0,70", "300", ""],
["", "boza-zdravecz", "Боза Здравец", "0,70", "500", ""],
["", "boza-zdravecz", "Боза Здравец", "0,00", "300", ""]

            ]
        }', 
        'slug' => 'sladkopekarna-gevrek',
        'business_name' => 'Сладкопекарна Геврек',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Сан Стефано 42',
        'address_additional' => '',
        'coords_x' => '43.40114332',
        'coords_y' => '24.62178224',
        'phone' => '+359885637782',
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
                ["", "salata-czezar-400gr--domatena-tortila-s-pileshki-grdi--coca-cola-original-taste", "Салата Цезар (400гр) + Доматена тортила с пилешки гърди + Coca-Cola Original Taste", "6,30", "500", ""]

            ],

            "salads": [
                ["", "grczka-salata", "Гръцка салата", "1,40", "350", "https://images.deliveryhero.io/image/fd-bg/Products/546301.JPG?width=302"],
["", "salata-shef", "Салата Шеф", "2,10", "450", "https://images.deliveryhero.io/image/fd-bg/Products/546302.JPG?width=302"],
["", "salata-riba-ton", "Салата риба тон", "2,10", "300", "https://images.deliveryhero.io/image/fd-bg/Products/546304.JPG?width=302"],
["", "salata-czezar", "Салата Цезар", "2,80", "400", "https://images.deliveryhero.io/image/fd-bg/Products/849709.JPG?width=302"]

            ],

            "Тортили": [
                ["", "domatena-tortila-s-pileshki-grdi", "Доматена Тортила с пилешки гърди", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/710749.jpg?width=302"],
["", "domatena-tortila-s-shunka", "Доматена Тортила с шунка", "1,40", "350", "https://images.deliveryhero.io/image/fd-bg/Products/546311.JPG?width=302"],
["", "domatena-tortila-s-pileshko", "Доматена Тортила с пилешко", "1,40", "350", ""],
["", "domatena-tortila-s-pueshko", "Доматена Тортила с пуешко", "1,40", "350", ""],
["", "domatena-tortila-ss-svinsko", "Доматена Тортила със свинско", "1,40", "350", "https://images.deliveryhero.io/image/fd-bg/Products/546314.JPG?width=302"],
["", "domatena-tortila-s-lukankov-salam", "Доматена Тортила с луканков салам", "1,40", "350", ""],
["", "domatena-tortila-s-riba-ton", "Доматена Тортила с риба тон", "2,10", "350", "https://images.deliveryhero.io/image/fd-bg/Products/546316.JPG?width=302"],
["", "obiknovena-tortila-s-pileshki-grdi", "Обикновена Тортила с пилешки гърди", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/831972.JPG?width=302"],
["", "obiknovena-tortila-s-riba-ton", "Обикновена Тортила с риба тон", "2,10", "350", "https://images.deliveryhero.io/image/fd-bg/Products/831973.JPG?width=302"],
["", "obiknovena-tortila-s-lukankov-salam", "Обикновена Тортила с луканков салам", "1,40", "350", ""],
["", "obiknovena-tortila-ss-svinsko", "Обикновена Тортила със свинско", "1,40", "350", "https://images.deliveryhero.io/image/fd-bg/Products/831975.JPG?width=302"],
["", "obiknovena-tortila-s-pueshko", "Обикновена Тортила с пуешко", "1,40", "350", ""],
["", "obiknovena-tortila-s-pileshko", "Обикновена Тортила с пилешко", "1,40", "350", ""],
["", "obiknovena-tortila-s-shunka", "Обикновена Тортила с шунка", "1,40", "350", "https://images.deliveryhero.io/image/fd-bg/Products/831978.JPG?width=302"]

            ],

            "sandwiches": [
                ["", "sandvich-s-pileshki-grdi", "Сандвич с Пилешки гърди", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1072849.jpg?width=302"],
["", "shunka-i-kashkaval", "Шунка и кашкавал", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/546317.JPG?width=302"],
["", "pileshko-i-kashkaval", "Пилешко и кашкавал", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/546318.JPG?width=302"],
["", "svinsko-i-kashkaval", "Свинско и кашкавал", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/546319.JPG?width=302"],
["", "pueshko-i-kashkaval", "Пуешко и кашкавал", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/546320.JPG?width=302"],
["", "riba-ton", "Риба тон", "2,10", "250", "https://images.deliveryhero.io/image/fd-bg/Products/546322.JPG?width=302"],
["", "lukankov-salam-i-kashkaval", "Луканков салам и кашкавал", "1,40", "250", ""],
["", "vegetarianska-plnozrnesta-bageta", "Вегетарианска пълнозърнеста багета", "1,40", "300", "https://images.deliveryhero.io/image/fd-bg/Products/546323.JPG?width=302"]

            ],

            "Млечни изкушения": [
                ["", "obezmasleno-kiselo-mlyako-ananas-myusli-med", "Обезмаслено кисело мляко, ананас, мюсли, мед", "1,40", "350", "https://images.deliveryhero.io/image/fd-bg/Products/546326.JPG?width=302"],
["", "obezmasleno-kiselo-mlyako-yagoda-banan-myusli-i-med", "Обезмаслено кисело мляко, ягода, банан, мюсли и мед", "1,40", "350", "https://images.deliveryhero.io/image/fd-bg/Products/546327.JPG?width=302"],
["", "czedeno-kiselo-mlyako-kivi-myusli-i-toping", "Цедено кисело мляко, киви, мюсли и топинг", "1,40", "320", "https://images.deliveryhero.io/image/fd-bg/Products/546329.JPG?width=302"],
["", "czedeno-kiselo-mlyako-techen-shokolad-shokoladovi-biskviti-i-toping", "Цедено кисело мляко, течен шоколад, шоколадови бисквити и топинг", "1,40", "320", "https://images.deliveryhero.io/image/fd-bg/Products/546330.JPG?width=302"],
["", "czedeno-kiselo-mlyako-orekhi-med-i-myusli", "Цедено кисело мляко, орехи, мед и мюсли", "1,40", "320", "https://images.deliveryhero.io/image/fd-bg/Products/546331.JPG?width=302"],
["", "czedeno-mlyako-s-biskviti-i-sladko-ot-borovinka", "Цедено мляко с бисквити и сладко от боровинка", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/634627.JPG?width=302"]

            ],

            "desserts": [
                ["", "ponichka-s-techen-shokolad", "Поничка с течен шоколад", "0,70", "100", "https://images.deliveryhero.io/image/fd-bg/Products/546332.JPG?width=302"],
["", "ponichka-s-yajchen-krem", "Поничка с яйчен крем", "0,70", "100", "https://images.deliveryhero.io/image/fd-bg/Products/546333.JPG?width=302"]

            ],

            "drinks": [
                ["", "ajran-megle", "Айран Мегле", "0,70", "300", ""],
["", "fresh", "Фреш", "1,40", "500", ""],
["", "ajran-balkan", "Айран Балкан", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1069159.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1069160.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1069161.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1069162.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1069163.jpg?width=302"],
["", "cappy-pulpy-praskova", "Cappy Pulpy Праскова", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1069164.jpg?width=302"],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1069165.jpg?width=302"],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1069166.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", ""]

            ]
        }', 
        'slug' => 'dreams-food-coffee',
        'business_name' => 'Dreams Food &amp; Coffee',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Иван Миндилков 1 Панорама Мол',
        'address_additional' => '',
        'coords_x' => '43.4196956',
        'coords_y' => '24.6136384',
        'phone' => '+359876803292',
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
                ["", "salata-ot-domati-s-bivolsko-sirene", "Салата от домати с биволско сирене", "5,60", "350", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "350", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "350", ""],
["", "salata-tuna", "Салата Туна", "5,60", "350", ""],
["", "salata-koze-sirene", "Салата Козе сирене", "7,70", "400", ""],
["", "pstra-salata", "Пъстра салата", "7,70", "350", ""],
["", "salata-s-asperzhi-proshuto-domati-i-bivolska-moczarela", "Салата с аспержи, прошуто, домати и биволска моцарела", "8,40", "350", ""],
["", "salata-ot-bejbi-spanak-ss-sino-sirene", "Салата от бейби спанак със синьо сирене", "8,40", "350", ""],
["", "salata-s-kalmari", "Салата с калмари", "8,40", "350", ""],
["", "salata-burata", "Салата Бурата", "9,80", "350", ""],
["", "vitaminozna-salata", "Витаминозна салата", "3,50", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "tradiczionna-shopska-salata", "Традиционна шопска салата", "2,80", "350", ""],
["", "mlechna-salata", "Млечна салата", "2,10", "200", ""]

            ],

            "Студени предястия": [
                ["", "brusketi-s-proshuto-i-filadelfiya", "Брускети с прошуто и филаделфия", "4,90", "150", ""],
["", "brusketi-s-terin-ot-gshi-drob", "Брускети с терин от гъши дроб", "5,60", "150", ""],
["", "brusketi-s-marinovana-somga-i-filadelfiya", "Брускети с маринована сьомга и филаделфия", "6,30", "150", ""],
["", "plato-ryazadki", "Плато рязадки", "8,40", "350", ""],
["", "pastet-ot-pushena-somga-s-brusketi", "Пастет от пушена сьомга с брускети", "4,90", "150", ""],
["", "edamame-s-anshoa-i-brusketi", "Едамаме с аншоа и брускети", "4,20", "150", ""],
["", "domashen-khumus", "Домашен хумус", "3,50", "150", ""],
["", "tarama-khajver-s-brusketi", "Тарама хайвер с брускети", "3,50", "150", ""],
["", "domashno-marinovana-somga", "Домашно маринована сьомга", "7,70", "100", ""],
["", "teleshki-tartar-s-brusketi", "Телешки тартар с брускети", "9,80", "200", ""],
["", "duo-ot-riba-ton", "Дуо от риба тон", "11,20", "250", ""],
["", "plato-evropejski-sirena", "Плато европейски сирена", "8,40", "200", ""],
["", "plato-kolbasi", "Плато колбаси", "11,20", "200", ""]

            ],

            "Топли предястия": [
                ["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,20", "300", ""],
["", "panirani-topeni-sirencza", "Панирани топени сиренца", "4,20", "200", ""],
["", "zapecheni-kartofi-s-moczarela-i-bekon", "Запечени картофи с моцарела и бекон", "4,90", "300", ""],
["", "spanacheni-kyuftencza", "Спаначени кюфтенца", "5,60", "250", ""],
["", "manatarki-na-tigan", "Манатарки на тиган", "7,70", "200", ""],
["", "spanak-na-furna-s-yajcze", "Спанак на фурна с яйце", "8,40", "250", ""],
["", "asperzhi-s-proshuto", "Аспержи с прошуто", "11,20", "200", ""],
["", "pileshki-khapki-s-mashherka-i-chesn", "Пилешки хапки с мащерка и чесън", "4,90", "200", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,90", "250", ""],
["", "teleshki-ezik-na-josper", "Телешки език на Josper", "6,30", "150", ""],
["", "gshi-drob", "Гъши дроб", "13,30", "200", ""],
["", "khrupkavi-kalmari", "Хрупкави калмари", "9,10", "200", ""],
["", "skaridi-v-perno", "Скариди в перно", "13,30", "250", ""],
["", "oktopod", "Октопод", "18,20", "200", ""],
["", "domashno-przheni-kartofi", "Домашно пържени картофи", "1,40", "200", ""],
["", "domashno-przheni-kartofi-ss-sirene", "Домашно пържени картофи със сирене", "2,10", "250", ""]

            ],

            "Прясна паста и ризото": [
                ["", "spageti-boloneze", "Спагети Болонезе", "5,60", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "6,30", "350", ""],
["", "linguini-arabiata", "Лингуини Арабиата", "5,60", "350", ""],
["", "ravioli-ss-spanak-i-rikota", "Равиоли със спанак и рикота", "6,30", "350", ""],
["", "taliateli-rustikana", "Талиатели Рустикана", "6,30", "350", ""],
["", "taliateli-nero", "Талиатели Неро", "8,40", "350", ""],
["", "rizoto-s-gorski-gbi", "Ризото с горски гъби", "6,30", "350", ""],
["", "rizoto-s-grilovano-pile-i-shafran", "Ризото с гриловано пиле и шафран", "6,30", "350", ""],
["", "rizoto-s-khrupkavi-kalmari", "Ризото с хрупкави калмари", "8,40", "350", ""],
["", "rizoto-nero-s-cheren-oriz-manatarki-cheri-domati-i-parmezan", "Ризото Неро с черен ориз, манатарки, чери домати и пармезан", "8,40", "350", ""]

            ],

            "Италиански пици на пещ": [
                ["", "margarita", "Маргарита", "4,20", "500", ""],
["", "vegetariana", "Вегетариана", "4,20", "500", ""],
["", "proshuto-fungi", "Прошуто фунги", "5,60", "500", ""],
["", "polo", "Поло", "5,60", "500", ""],
["", "verona", "Верона", "5,60", "500", ""],
["", "kalczone-zatvorena", "Калцоне /затворена/", "5,60", "500", ""],
["", "peperoni", "Пеперони", "6,30", "500", ""],
["", "chorizo", "Чоризо", "6,30", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "6,30", "500", ""],
["", "diavola", "Диавола", "7,70", "500", ""],
["", "kaprichoza", "Капричоза", "7,70", "500", ""],
["", "fiesta", "Фиеста", "7,70", "500", ""],
["", "machelajo", "Мачелайо", "8,40", "500", ""]

            ],

            "Фокачи": [
                ["", "fokacha-obiknovena", "Фокача обикновена", "2,10", "250", ""],
["", "fokacha-chesnova", "Фокача чеснова", "2,10", "250", ""],
["", "fokacha-s-kashkaval-i-sirene", "Фокача с кашкавал и сирене", "2,80", "350", ""],
["", "fokacha-s-proshuto-i-moczarela", "Фокача с прошуто и моцарела", "4,90", "350", ""]

            ],

            "Основни ястия": [
                ["", "pileshki-ruladini-s-emental-i-kri", "Пилешки руладини с ементал и къри", "9,80", "400", ""],
["", "pileshki-karencza-s-manatarki", "Пилешки каренца с манатарки", "9,80", "400", ""],
["", "pateshko-file-s-mango-sos", "Патешко филе с манго сос", "13,30", "350", ""],
["", "svinski-dzholan", "Свински джолан", "10,50", "400", ""],
["", "svinski-kareta-s-gorski-gbi", "Свински карета с горски гъби", "11,20", "400", ""],
["", "pileshki-burger", "Пилешки Бургер", "8,40", "", ""],
["", "teleshki-burger", "Телешки бургер", "11,20", "", ""],
["", "teleshki-dzholan", "Телешки джолан", "11,90", "400", ""],
["", "mlechno-teleshko", "Млечно телешко", "15,40", "400", ""],
["", "teleshko-saltinboka", "Телешко Салтинбока", "16,80", "400", ""],
["", "teleshki-stek-marsala", "Телешки стек Марсала", "20,30", "400", ""],
["", "agneshko-pecheno-ss-zelena-salata", "Агнешко печено със зелена салата", "15,40", "400", ""],
["", "file-ot-pstrva-s-bademi", "Филе от пъстърва с бадеми", "11,20", "350", ""],
["", "file-ot-lavrak", "Филе от лаврак", "16,80", "350", ""],
["", "somga-s-asperzhi", "Сьомга с аспержи", "18,20", "350", ""],
["", "file-ot-cherven-ton", "Филе от червен тон", "18,20", "350", ""]

            ],

            "BBQ на дървени въглища - JOSPER": [
                ["", "pileshka-przhola", "Пилешка пържола", "4,20", "250", ""],
["", "pileshko-file", "Пилешко филе", "5,60", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,20", "350", ""],
["", "pileshki-kyufteta", "Пилешки кюфтета", "4,20", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "250", ""],
["", "svinski-rebra", "Свински ребра", "8,40", "300", ""],
["", "svinski-t-bon-stek", "Свински Т-бон стек", "10,50", "350", ""],
["", "svinski-kotlet", "Свински котлет", "11,20", "300", ""],
["", "teleshki-kyufteta", "Телешки кюфтета", "4,90", "250", ""],
["", "kotlet-ot-mlado-tele", "Котлет от младо теле", "20,30", "300", ""],
["", "teleshki-t-bon-stek", "Телешки т-бон стек", "27,30", "300", ""],
["", "ribaj-stek", "Рибай стек", "34,30", "250", ""],
["", "pstrva", "Пъстърва", "8,40", "300", ""],
["", "lavrak", "Лаврак", "15,40", "300", ""],
["", "czipura", "Ципура", "15,40", "300", ""],
["", "somga-file", "Сьомга филе", "16,80", "250", ""]

            ],

            "garnish": [
                ["", "byal-oriz", "Бял ориз", "1,40", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "2,10", "150", ""],
["", "domashni-kartofi", "Домашни картофи", "2,10", "200", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "200", ""],
["", "cheren-oriz", "Черен ориз", "3,50", "150", ""],
["", "zelenchuczi-na-josper", "Зеленчуци на Josper", "3,50", "200", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta-s-bavarski-krem-i-gorski-plodove", "Бисквитена торта с баварски крем и горски плодове", "2,10", "150", ""],
["", "chijzkejk-mokhito", "Чийзкейк Мохито", "2,10", "150", ""],
["", "shokoladova-polusfera-s-malinovo-kuli", "Шоколадова полусфера с малиново кули", "2,80", "150", ""],
["", "surov-vegan-desert", "Суров веган десерт", "2,80", "150", ""],
["", "tiramisu", "Тирамису", "2,10", "200", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "200", ""]

            ],

            "beer": [
                ["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "khajneken-0", "Хайнекен 0%", "2,10", "330", ""],
["", "stolichno-ambr", "Столично Амбър", "2,10", "400", ""],
["", "stolichno-bock", "Столично Bock", "2,10", "400", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/646623.jpg?width=302"]

            ],

            "Безалкохолни напитки": [
                ["", "mineralna-voda-akva-pana", "Минерална вода Аква Пана", "2,10", "250", ""],
["", "fresh-portokal-i-grejpfrut", "Фреш портокал и грейпфрут", "2,10", "200", ""],
["", "fresh-grejpfrut", "Фреш грейпфрут", "2,10", "200", ""],
["", "fresh-yablka", "Фреш ябълка", "2,10", "200", ""],
["", "studen-chaj-san-benedeto-praskova", "Студен чай Сан Бенедето праскова", "2,10", "500", ""],
["", "energijni-napitki", "Енергийни напитки", "2,10", "250", ""],
["", "fresh-portokal", "Фреш портокал", "2,10", "200", ""],
["", "mineralna-voda-perie", "Минерална вода перие", "2,10", "330", ""]

            ],

            "Топли напитки": [
                ["", "lavacza-espreso", "Лаваца еспресо", "1,40", "60", ""],
["", "lavacza-espreso-bez-kofein", "Лаваца еспресо без кофеин", "1,40", "60", ""],
["", "illi-kapsula", "Илли капсула", "1,40", "60", ""],
["", "viensko-kafe", "Виенско кафе", "1,40", "100", ""],
["", "lavacza-kapuchino", "Лаваца капучино", "1,40", "200", ""],
["", "lavacza-kapuchino-bez-kofein", "Лаваца капучино без кофеин", "1,40", "200", ""],
["", "illi-kapuchino", "Илли капучино", "2,10", "150", ""],
["", "illi-kapuchino-bez-kofein", "Илли капучино без кофеин", "2,10", "150", ""],
["", "chaj-twinings", "Чай Twinings", "0,70", "200", ""],
["", "chaj-ronefeld", "Чай Ронефелд", "1,40", "200", ""]

            ],

            "Тонизиращи напитки": [
                ["", "czitronada", "Цитронада", "2,10", "400", ""],
["", "oranzhada", "Оранжада", "2,10", "400", ""],
["", "grejpfrut", "Грейпфрут", "2,10", "400", ""]

            ],

            "white-wine": [
                ["", "mezek-sovinon", "Мезек (Совиньон", "6,30", "", ""],
["", "piksels-sovinon", "Пикселс (Совиньон", "8,40", "", ""],
["", "ejndzhl", "Ейнджъл", "8,40", "", ""],
["", "babich-marlboro-sovinon", "Бабич Марлборо (Совиньон", "15,40", "", ""]

            ],

            "Розе Вина": [
                ["", "piksels-roze-ot", "Пикселс (розе от", "8,40", "", ""],
["", "mezek-roze-merlo-malbek", "Мезек Розе (мерло, малбек,", "6,30", "", ""],
["", "ejndzhl-sira-kaberne-i", "Ейнджъл (сира, каберне и", "8,40", "", ""],
["", "alma-187ml", "Алма (187мл)", "3,50", "", ""]

            ],

            "Червена вина": [
                ["", "mezek-kaberne", "Мезек (Каберне", "6,30", "", ""],
["", "piksels", "Пикселс", "8,40", "", ""],
["", "ejndzhl", "Ейнджъл", "8,40", "", ""],
["", "midalidare-merlo-i-kaberne", "Мидалидаре (мерло и каберне", "10,50", "", ""],
["", "alma-187ml-kaberne", "Алма (187мл) (каберне", "3,50", "", ""]

            ],

            "sushi": [
                ["", "eda-mame", "Еда Маме", "2,10", "150", ""],
["", "goma-uakame", "Гома Уакаме", "4,20", "150", ""],
["", "miks-goma-uakame", "Микс Гома Уакаме", "4,90", "200", ""],
["", "king-tartar-ton", "Кинг Тартар Тон", "7,00", "200", ""],
["", "tartar-somga", "Тартар сьомга", "7,00", "200", ""],
["", "sushi-khosomaki-krastavicza-i-filadelfiya", "Суши Хосомаки краставица и филаделфия", "2,80", "", ""],
["", "sushi-khosomaki-avokado-i-filadelfiya", "Суши Хосомаки авокадо и филаделфия", "3,50", "", ""],
["", "sushi-khosomaki-ton", "Суши Хосомаки тон", "4,20", "", ""],
["", "sushi-khosomaki-somga", "Суши Хосомаки сьомга", "4,20", "", ""],
["", "sushi-khosomaki-somga-i-avokado", "Суши Хосомаки сьомга и авокадо", "4,90", "", ""],
["", "sushi-futomaki-ika-mastr", "Суши Футомаки ика Мастър", "4,20", "", ""],
["", "sushi-futomaki-norvegiya", "Суши Футомаки Норвегия", "4,90", "", ""],
["", "sushi-futomaki-somga-i-avokado", "Суши Футомаки сьомга и авокадо", "4,90", "", ""],
["", "sushi-futomaki-ton-i-avokado", "Суши Футомаки тон и авокадо", "4,90", "", ""],
["", "sushi-filadelfiya-khrupkavo-pile", "Суши Филаделфия хрупкаво пиле", "2,80", "", ""],
["", "sushi-filadelfiya-khrupkavo-pile-paradajs", "Суши Филаделфия хрупкаво пиле парадайс", "3,50", "", ""],
["", "sushi-filadelfiya-norvegiya", "Суши Филаделфия Норвегия", "4,20", "", ""],
["", "sushi-filadelfiya-skarida", "Суши Филаделфия скарида", "3,50", "", ""],
["", "sushi-filadelfiya-skarida-paradajs", "Суши Филаделфия скарида парадайс", "4,20", "", ""],
["", "sushi-filadelfiya-ton-i-avokado", "Суши Филаделфия тон и авокадо", "4,20", "", ""],
["", "sushi-filadelfiya-pushena-somga-i-krastavicza", "Суши Филаделфия пушена сьомга и краставица", "4,20", "", ""],
["", "sushi-filadelfiya-sake", "Суши Филаделфия Саке", "4,90", "", ""],
["", "sushi-kaliforniya-krab", "Суши Калифорния краб", "2,80", "", ""],
["", "sushi-kaliforniya-vedzhi", "Суши Калифорния веджи", "2,80", "", ""],
["", "sushi-kaliforniya-red", "Суши Калифорния ред", "3,50", "", ""],
["", "sushi-kaliforniya-ton-i-avokado", "Суши Калифорния тон и авокадо", "4,90", "", ""],
["", "sushi-kaliforniya-somga-i-avokado", "Суши Калифорния сьомга и авокадо", "4,90", "", ""],
["", "sushi-barok-krab", "Суши Барок Краб", "2,80", "", ""],
["", "sushi-uakame-miks", "Суши Уакаме Микс", "2,80", "", ""],
["", "sushi-barok-somga", "Суши Барок сьомга", "3,50", "", ""],
["", "sushi-barok-ton", "Суши Барок тон", "3,50", "", ""],
["", "sushi-uramaki-white-tiger", "Суши Урамаки White tiger", "7,00", "", ""],
["", "sushi-uramaki-vulkan", "Суши Урамаки Вулкан", "7,00", "", ""],
["", "sushi-uramaki-colorful-dragon", "Суши Урамаки Colorful dragon", "7,70", "", ""],
["", "sushi-uramaki-kanape-rol", "Суши Урамаки Канапе рол", "7,70", "", ""],
["", "sushi-sashimi-somga", "Суши Сашими сьомга", "4,90", "80", ""],
["", "sushi-sashimi-ton", "Суши Сашими тон", "4,90", "80", ""],
["", "sushi-nigiri-skarida", "Суши Нигири скарида", "2,80", "", ""],
["", "sushi-nigiri-somga", "Суши Нигири сьомга", "2,80", "", ""],
["", "sushi-nigiri-tilapiya", "Суши Нигири тилапия", "2,80", "", ""],
["", "sushi-nigiri-ton", "Суши Нигири тон", "3,50", "", ""],
["", "sushi-gunkan-goma-uakame-miks", "Суши Гункан Гома Уакаме микс", "2,80", "", ""],
["", "sushi-gunkan-tobiko", "Суши Гункан Тобико", "3,50", "", ""],
["", "sushi-gunkan-khajver-somga", "Суши Гункан Хайвер сьомга", "7,00", "", ""],
["", "sushi-kombo-best-seller", "Суши Комбо best seller", "9,10", "", ""],
["", "sushi-kombo-rainbow", "Суши Комбо Rainbow", "21,70", "650", ""],
["", "sushi-kombo-salmon", "Суши Комбо Salmon", "21,70", "750", ""],
["", "sushi-kombo-maki-paradajs", "Суши Комбо маки парадайс", "27,30", "", ""]

            ]
        }', 
        'slug' => 'kanape-food-club',
        'business_name' => 'Kanape Food # Club',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5801',
        'address' => 'ул. Васил Левски 192',
        'address_additional' => '',
        'coords_x' => '43.41072901',
        'coords_y' => '24.61647022',
        'phone' => '+359888212123',
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
            
            "Бири": [
                ["", "g-n-khops-pale-ale", "Г-н Хопс Pale ale", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/968134.jpg?width=302"],
["", "g-n-khops-neipa", "Г-н Хопс Neipa", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/968135.jpg?width=302"],
["", "g-n-khops-coconut-milk-porter", "Г-н Хопс Coconut milk porter", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/968136.jpg?width=302"]

            ]
        }', 
        'slug' => 'meltum-brewery-pleven',
        'business_name' => 'Пивоварна Мелтум (Плевен)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5502',
        'address' => 'Ул Кара Кольо 26',
        'address_additional' => '',
        'coords_x' => '43.42427064',
        'coords_y' => '24.60948682',
        'phone' => '+359887216851',
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
            
            "Мини торти": [
                ["", "mini-torta-s-yagoda-maskarpone-i-shokolad", "Мини торта с ягода, маскарпоне и шоколад", "3,50", "", ""],
["", "mini-torta-cherveno-kadife", "Мини торта Червено кадифе", "3,50", "", ""],
["", "mini-torta-oreo", "Мини торта Орео", "3,50", "", ""],
["", "mini-torta-bejlis", "Мини торта Бейлис", "3,50", "", ""],
["", "mini-torta-dvoen-shokolad", "Мини торта Двоен шоколад", "3,50", "", ""],
["", "mini-torta-ss-spanak-maskarpone-i-yagodi", "Мини торта със спанак, маскарпоне и ягоди", "3,50", "", ""],
["", "mini-torta-yagodovo-oreo", "Мини торта Ягодово Орео", "3,50", "", ""]

            ]
        }', 
        'slug' => 'sladkarska-kshcha-gaby-s-kitchen',
        'business_name' => 'Сладкарска Къща Gaby’s Kitchen',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'бул. Христо Ботев 38',
        'address_additional' => '',
        'coords_x' => '43.41165033',
        'coords_y' => '24.62663623',
        'phone' => '+359877642043',
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
                ["", "grczka-salata", "Гръцка салата", "4,90", "400", ""],
["", "barba-yani", "Барба Яни", "4,20", "400", ""],
["", "midena-salata-s-maslini", "Мидена салата с маслини", "4,90", "400", ""],
["", "salata-krit", "Салата Крит", "5,60", "400", ""],
["", "czezar", "Цезар", "6,30", "450", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "350", ""],
["", "salata-kacziti", "Салата Кацити", "4,90", "350", ""],
["", "salata-manastiraki", "Салата Манастираки", "4,90", "400", ""],
["", "salata-randevu", "Салата Рандеву", "4,90", "400", ""]

            ],

            "appetizer": [
                ["", "tarama-khajver", "Тарама хайвер", "4,20", "250", ""],
["", "khumus", "Хумус", "4,20", "250", ""],
["", "dzadziki", "Дзадзики", "3,50", "200", ""],
["", "tirorazyadka", "Тироразядка", "3,50", "200", ""],
["", "agioritiki-razyadka", "Агиоритики разядка", "4,20", "300", ""],
["", "buyurdi", "Буюрди", "4,90", "380", ""],
["", "patladzhan-po-solunski", "Патладжан по Солунски", "4,90", "380", ""],
["", "gbi-ala-grek", "Гъби Ала Грек", "4,20", "300", ""],
["", "pareshh-pukhkav-kachamak-s-maslo-sirene-i-smetana", "Парещ пухкав качамак с масло, сирене и сметана", "4,20", "450", ""]

            ],

            "dry-appetizer": [
                ["", "przheni-tikvichki-podneseni-s-dzadziki", "Пържени тиквички поднесени с дзадзики", "4,90", "350", ""],
["", "przheni-kartofki-ss-sino-sirene-i-malinova-redukcziya", "Пържени картофки със синьо сирене и малинова редукция", "2,80", "300", ""],
["", "midi-sote", "Миди соте", "6,30", "200", ""],
["", "teleshki-sudzhuk-na-skara", "Телешки суджук на скара", "5,60", "280", ""]

            ],

            "soups": [
                ["", "midena-krem-supa", "Мидена Крем супа", "2,10", "400", ""]

            ],

            "Ястия със свинско": [
                ["", "tradiczionno-grczko-suvlaki", "Традиционно гръцко сувлаки", "7,70", "", ""],
["", "tiganya", "Тиганя", "6,30", "350", ""],
["", "krekhko-svinsko-dzholanche-prigotveno-na-baven-ogn", "Крехко свинско джоланче приготвено на бавен огън", "8,40", "500", ""],
["", "svinsko-bon-file-po-kiprski", "Свинско бон филе по Кипърски", "10,50", "450", ""],
["", "svinski-giros", "Свински гирос", "9,80", "700", ""],
["", "svinski-nadenichki", "Свински наденички", "7,70", "600", ""]

            ],

            "Ястия от пилешко": [
                ["", "pile-khubavata-elena", "Пиле Хубавата Елена", "8,40", "450", ""],
["", "kiprsko-pile", "Кипърско пиле", "9,10", "450", ""],
["", "file-limonato", "Филе лимонато", "5,60", "250", ""],
["", "pile-ala-karbonara", "Пиле ала Карбонара", "7,70", "450", ""],
["", "sredizemnomorsko-pile", "Средиземноморско пиле", "6,30", "450", ""]

            ],

            "Ястия от телешко": [
                ["", "solunski-kyuftencza-na-skara-podneseni-s-przheni-kartofi-i-svezha-salata-sukh-tarator", "Солунски кюфтенца на скара поднесени с пържени картофи и свежа салата, сух таратор", "7,70", "450", ""],
["", "teleshki-shniczel-s-parmezan-podnesen-s-przheni-kartofki", "Телешки шницел с пармезан поднесен с пържени картофки", "9,10", "450", ""]

            ],

            "Ястия от агнешко": [
                ["", "agneshko-dzholanche-na-baven-ogn-podneseno-s-kartofki-i-sos", "Агнешко джoланче на бавен огън, поднесено с картофки и сос", "11,20", "500", ""],
["", "agneshki-kotleti-podneseni-ss-spanachen-oriz-i-sukh-tarator", "Агнешки котлети поднесени със спаначен ориз и сух таратор", "16,80", "450", ""]

            ],

            "Риба и морски дарове": [
                ["", "midi-saganaki", "Миди Саганаки", "9,10", "400", ""],
["", "midi-cherupka-s-maslo-smetana-kopr-i-chesn", "Миди черупка с масло, сметана, копър и чесън", "9,10", "700", ""],
["", "kalmari-na-skara", "Калмари на скара", "9,80", "380", ""],
["", "oktopod-na-skara", "Октопод на скара", "15,40", "130", ""],
["", "oktopod-na-tiganche-v-maslo-soev-sos-i-cheri-domati-s-chesn", "Октопод на тиганче в масло, соев сос и чери домати с чесън", "16,10", "150", ""],
["", "tigrovi-skaridi-przheni", "Тигрови скариди пържени", "15,40", "200", ""],
["", "midi-cherupka-s-byalo-vino-maslo-kopr", "Миди черупка с бяло вино, масло, копър", "9,10", "700", ""],
["", "czipura-na-skara", "Ципура на скара", "9,80", "", ""],
["", "lavrak", "Лаврак", "11,20", "", ""],
["", "safrid-przhen", "Сафрид пържен", "7,00", "350", ""],
["", "pstrva", "Пъстърва", "8,40", "", ""],
["", "palamud-na-skara-ladolemono-podnesen-s-domateno-chesnova-salcza", "Паламуд на скара, ладолемоно поднесен с доматено чеснова салца", "9,10", "", ""],
["", "skumriya", "Скумрия", "6,30", "", ""],
["", "kalmari-przheni-s-khrupkava-korichka-s-limon-i-rigan", "Калмари пържени с хрупкава коричка с лимон и риган", "7,70", "220", ""],
["", "kalmari-ss-sos-s-tri-vkusa---piroglikosines-podneseni-s-oriz", "Калмари със сос с три вкуса - пирогликосинес поднесени с ориз", "10,50", "400", ""],
["", "midi---rizoto-s-anason-susheni-domati-parmezan", "Миди - ризото с анасон, сушени домати, пармезан", "7,00", "", ""]

            ],

            "desserts": [
                ["", "borovinkov-chijzkejk", "Боровинков чийзкейк", "2,80", "220", ""],
["", "domashna-orekhova-torta-s-shokolad-i-smokini", "Домашна орехова торта с шоколад и смокини", "2,80", "220", ""],
["", "desert-ala-grek", "Десерт ала Грек", "2,10", "250", ""]

            ],

            "bread": [
                ["", "grczka-prlenka-ss-zekhtin-i-bilki", "Гръцка пърленка със зехтин и билки", "0,70", "", ""],
["", "panerche-s-prepechen-khlyab", "Панерче с препечен хляб", "0,70", "", ""]

            ]
        }', 
        'slug' => 'grcki-restorant-yamas',
        'business_name' => 'Гръцка кухня в Национал',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5809',
        'address' => 'ул. Петко Р. Славейков 21',
        'address_additional' => '',
        'coords_x' => '43.41612393',
        'coords_y' => '24.61795744',
        'phone' => '+359888806807',
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
                ["", "supa-pile", "Супа пиле", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/809620.JPG?width=302"],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/809621.JPG?width=302"],
["", "supa-topcheta", "Супа топчета", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/809623.JPG?width=302"],
["", "tarator", "Таратор", "2,10", "400", ""]

            ],

            "Ястия с пилешко": [
                ["", "pile-s-oriz", "Пиле с ориз", "2,80", "360", "https://images.deliveryhero.io/image/fd-bg/Products/809231.JPG?width=302"]

            ],

            "Основни ястия": [
                ["", "slavyanski-gyuvech", "Славянски гювеч", "2,80", "400", ""],
["", "zapecheni-kartofi-s-krenvirsh-i-kashkaval", "Запечени картофи с кренвирш и кашкавал", "2,80", "400", ""],
["", "przheno-kyufte", "Пържено кюфте", "0,70", "90", ""]

            ],

            "grill": [
                ["", "kyufte-na-skara", "Кюфте на скара", "0,70", "100", "https://images.deliveryhero.io/image/fd-bg/Products/809558.JPG?width=302"]

            ],

            "garnish": [
                ["", "dobavka-oczet-i-chesn", "Добавка оцет и чесън", "0,00", "", ""],
["", "dobavka-lyut-piper", "Добавка лют пипер", "0,00", "", ""],
["", "sirene-natyur", "Сирене натюр", "0,70", "100", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "1,40", "200", "https://images.deliveryhero.io/image/fd-bg/Products/809591.JPG?width=302"],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "180", "https://images.deliveryhero.io/image/fd-bg/Products/809592.JPG?width=302"],
["", "makaroni-na-furna", "Макарони на фурна", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/809594.JPG?width=302"],
["", "biskvitena-torta", "Бисквитена торта", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/809595.JPG?width=302"],
["", "krem-fantaziya", "Крем Фантазия", "1,40", "150", ""]

            ],

            "drinks": [
                ["", "ajryan", "Айрян", "0,70", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "prisan", "Присан", "1,40", "250", ""],
["", "aloe", "Алое", "2,80", "500", ""],
["", "red-bul", "Ред Бул", "2,80", "250", ""],
["", "pepsi", "Пепси", "1,40", "500", ""],
["", "mirinda", "Миринда", "1,40", "500", ""],
["", "studen-chaj", "Студен чай", "1,40", "500", ""],
["", "gazirana-voda", "Газирана вода", "0,70", "500", ""]

            ],

            "beer": [
                ["", "bira-astika", "Бира Астика", "1,40", "500", ""],
["", "bira-korona", "Бира Корона", "3,50", "330", ""],
["", "bira-kamenicza", "Бира Каменица", "1,40", "500", ""],
["", "bira-staropramen", "Бира Старопрамен", "2,10", "500", ""],
["", "bira-stela-artoa", "Бира Стела Артоа", "2,10", "500", ""],
["", "bira-khyugarden", "Бира Хюгарден", "2,80", "330", ""],
["", "bira-beks-bezalkokholna", "Бира Бекс безалкохолна", "2,80", "330", ""]

            ],

            "Прибори": [
                ["", "lzhicza", "Лъжица", "0,00", "", ""],
["", "komplekt-plastmasovi-pribori", "Комплект пластмасови прибори", "0,00", "", ""]

            ]
        }', 
        'slug' => 'zavoy-klub',
        'business_name' => 'Завой Клуб Гренадерска',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Васил Априлов 8',
        'address_additional' => '',
        'coords_x' => '43.4175601',
        'coords_y' => '24.6200077',
        'phone' => '+359877747610',
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
            
        }', 
        'slug' => 'kulinaren-magazin-dilema',
        'business_name' => 'Кулинарен магазин Дилема',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5802',
        'address' => 'ул. Копривщица 30',
        'address_additional' => '',
        'coords_x' => '43.4125323',
        'coords_y' => '24.6272131',
        'phone' => '+359886439103',
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
                ["", "salata-kapreze", "Салата Капрезе", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/769362.JPG?width=302"],
["", "salata-tuna", "Салата Туна", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/769363.JPG?width=302"],
["", "klasicheska-salata-czezar", "Класическа салата Цезар", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/769364.JPG?width=302"],
["", "svezha-salata-ss-zapecheno-sirene", "Свежа салата със запечено сирене", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/769365.JPG?width=302"],
["", "tradiczionna-proletna-salata", "Традиционна пролетна салата", "2,80", "300", ""],
["", "domati-s-mus-ot-sirena", "Домати с мус от сирена", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/769367.JPG?width=302"],
["", "zdravoslovna-salata", "Здравословна салата", "2,80", "300", ""],
["", "salata-ot-patladzhan-pechena-chushka-i-sirene-vrkhu-svezhi-domati", "Салата от патладжан, печена чушка и сирене върху свежи домати", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/769369.JPG?width=302"],
["", "salata-snezhanka", "Салата Снежанка", "2,80", "200", ""],
["", "krokmach", "Крокмач", "3,50", "200", ""],
["", "grczka-salata-s-marinovana-feta", "Гръцка салата с маринована фета", "2,80", "400", ""],
["", "gradinarska-salata-s-marinovan-patladzhan", "Градинарска салата с маринован патладжан", "3,50", "400", ""],
["", "salata-czezar-s-kalmari", "Салата Цезар с калмари", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/769374.JPG?width=302"],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "meshana-salata-s-plochka-sirene", "Мешана салата с плочка сирене", "2,80", "350", ""],
["", "salata-parmidzhano", "Салата Пармиджано", "4,20", "300", ""]

            ],

            "Стартери": [
                ["", "skaridi-v-maslo", "Скариди в масло", "10,50", "200", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/769382.JPG?width=302"],
["", "pileshki-prchiczi-ss-susam", "Пилешки пръчици със сусам", "4,20", "250", ""],
["", "pileshki-khapki-s-italianski-sos", "Пилешки хапки с Италиански сос", "4,20", "250", ""],
["", "parmezanovi-bon-filencza", "Пармезанови бон филенца", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/769385.JPG?width=302"],
["", "chesnovi-pileshki-krilcza", "Чеснови пилешки крилца", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/769386.JPG?width=302"],
["", "panirani-kalmari", "Панирани калмари", "7,00", "250", "https://images.deliveryhero.io/image/fd-bg/Products/769387.JPG?width=302"],
["", "kalmar-na-plocha", "Калмар на плоча", "6,30", "250", ""],
["", "kalmari-ss-sladko-chili-i-susam", "Калмари със сладко чили и сусам", "7,00", "250", ""],
["", "panirani-topeni-sirencza", "Панирани топени сиренца", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/769390.JPG?width=302"],
["", "khrupkavo-sirene-s-kornflejks", "Хрупкаво сирене с корнфлейкс", "2,80", "250", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/769392.JPG?width=302"],
["", "tikvichki-po-grczki", "Тиквички по Гръцки", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/769393.JPG?width=302"],
["", "presni-przheni-kartofki", "Пресни пържени картофки", "2,80", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""]

            ],

            "risotto": [
                ["", "rizoto-s-pile", "Ризото с пиле", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/769399.JPG?width=302"],
["", "rizoto-di-mare", "Ризото ди Маре", "5,60", "300", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "300", ""],
["", "rizoto-ss-spanak-i-gbi", "Ризото със спанак и гъби", "4,20", "300", ""]

            ],

            "Прясна паста": [
                ["", "spageti-karbonara", "Спагети Карбонара", "4,20", "300", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "300", ""],
["", "spageti-di-mare", "Спагети ди Маре", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/769404.JPG?width=302"]

            ],

            "burgers": [
                ["", "pileshki-burger", "Пилешки бургер", "4,20", "450", ""],
["", "teleshki-burger", "Телешки бургер", "4,20", "450", ""],
["", "vegetaryanski-burger", "Вегетарянски бургер", "4,20", "400", ""]

            ],

            "pizza": [
                ["", "toskana", "Тоскана", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/769405.JPG?width=302"],
["", "margarita", "Маргарита", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/769406.JPG?width=302"],
["", "vegetariana", "Вегетариана", "4,20", "", ""],
["", "proshuto-fungi", "Прошуто фунги", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/769409.JPG?width=302"],
["", "fruti-di-mare", "Фрути ди Маре", "4,90", "", ""],
["", "kuatro-formadzhio", "Куатро Формаджио", "4,90", "", ""],
["", "polo", "Поло", "4,90", "", ""],
["", "kuatro-di-karne", "Куатро ди Карне", "5,60", "", ""],
["", "specziale", "Специале", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/769415.JPG?width=302"],
["", "peperone", "Пепероне", "4,90", "", ""],
["", "khavaj", "Хавай", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/769417.JPG?width=302"],
["", "kalabriya", "Калабрия", "4,90", "", ""],
["", "al-tono", "Ал Тоно", "4,90", "", ""],
["", "meksikana", "Мексикана", "4,90", "", ""],
["", "firencza", "Фиренца", "4,90", "", ""],
["", "brioza", "Бриоза", "4,20", "", ""],
["", "karina", "Карина", "4,90", "", ""]

            ],

            "Грил": [
                ["", "pileshka-przhola---but", "Пилешка пържола - бут", "4,90", "250", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "120", ""],
["", "svinsko-bon-file", "Свинско бон филе", "5,60", "250", ""],
["", "svinski-rebra", "Свински ребра", "7,70", "400", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""]

            ],

            "Рибни ястия": [
                ["", "czipura", "Ципура", "9,80", "300", ""],
["", "lavrak", "Лаврак", "9,80", "300", ""],
["", "pstrva", "Пъстърва", "5,60", "300", ""],
["", "safrid", "Сафрид", "4,20", "250", ""]

            ],

            "Запеканки": [
                ["", "moczarela-i-spanak", "Моцарела и спанак", "3,50", "300", ""],
["", "kartofi-gbi-topeno-pusheno-sirene-bekon-kashkaval", "Картофи, гъби, топено пушено сирене, бекон, кашкавал", "3,50", "300", ""],
["", "formadzho", "Формаджо", "3,50", "300", ""]

            ],

            "Основни ястия": [
                ["", "krekhki-pileshki-filencza-dizhon", "Крехки пилешки филенца Дижон", "6,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/769430.JPG?width=302"],
["", "pile-s-gbi-topeno-sirene-i-smetana", "Пиле с гъби, топено сирене и сметана", "6,30", "350", ""],
["", "pile-s-brokoli-i-rokfor", "Пиле с броколи и Рокфор", "7,00", "350", "https://images.deliveryhero.io/image/fd-bg/Products/769432.JPG?width=302"],
["", "svinski-medaloni-s-borovinkov-sos", "Свински медальони с боровинков сос", "8,40", "350", "https://images.deliveryhero.io/image/fd-bg/Products/769433.JPG?width=302"],
["", "svinsko-bon-file-s-luchen-chips", "Свинско бон филе с лучен чипс", "8,40", "350", "https://images.deliveryhero.io/image/fd-bg/Products/769434.JPG?width=302"],
["", "shniczel-po-vienski", "Шницел по виенски", "8,40", "350", ""],
["", "svinski-dzholan-s-kartofi-sote", "Свински джолан с картофи соте", "6,30", "400", "https://images.deliveryhero.io/image/fd-bg/Products/769438.JPG?width=302"],
["", "pile-ananas", "Пиле ананас", "6,30", "350", ""],
["", "svinsko-file-kapreze", "Свинско филе Капрезе", "7,70", "350", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "italianski-sos", "Италиански сос", "0,70", "50", ""],
["", "sos-pesto", "Сос песто", "0,70", "50", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "50", ""],
["", "chili-sos", "Чили сос", "0,70", "50", ""]

            ],

            "garnish": [
                ["", "zadusheni-kartofi", "Задушени картофи", "1,40", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", "https://images.deliveryhero.io/image/fd-bg/Products/769447.JPG?width=302"],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "2,80", "200", ""],
["", "pryasna-garnitura", "Прясна гарнитура", "1,40", "180", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "150", ""],
["", "zadushen-oriz", "Задушен ориз", "1,40", "180", ""]

            ],

            "dry-appetizer": [
                ["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,80", "50", ""],
["", "sudzhuk", "Суджук", "2,10", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "1,40", "50", ""]

            ],

            "Пърленки": [
                ["", "naturalna-prlenka", "Натурална пърленка", "0,70", "300", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "300", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "300", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "200", ""],
["", "domashen-chijz-kejk", "Домашен чийз кейк", "3,50", "180", "https://images.deliveryhero.io/image/fd-bg/Products/769462.JPG?width=302"]

            ],

            "Детско меню": [
                ["", "detsko-menyu", "Детско меню", "4,90", "", ""],
["", "pileshki-khapki-s-kornfkejks-naturalen-sok-palachinka-i-podark-iznenada", "Пилешки хапки с корнфкейкс, натурален сок, палачинка и подарък изненада", "4,90", "", ""],
["", "burger-tip-makdonalds-natualen-sok-palachinka-i-podark-iznenanda", "Бургер тип МакДоналдс, натуален сок, палачинка и подарък изненанда", "4,90", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/855085.jpg?width=302"]

            ],

            "drinks": [
                ["", "zagorka-ken", "Загорка кен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'picariya-dzhunir',
        'business_name' => 'Пицария Джуниър',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'бул. България 20',
        'address_additional' => '',
        'coords_x' => '43.40377833',
        'coords_y' => '24.63869868',
        'phone' => '+359879037650',
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
                ["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "tarator", "Таратор", "0,70", "", ""],
["", "dzholan-ss-zelenchuczi", "Джолан със зеленчуци", "2,80", "", ""],
["", "drusan-kebap", "Друсан кебап", "2,80", "", ""],
["", "kavrma", "Кавърма", "2,10", "", ""],
["", "kavrma-v-omlet", "Кавърма в омлет", "2,80", "", ""],
["", "kartofeni-kyufteta", "Картофени кюфтета", "2,10", "", ""],
["", "pile-arzhentina", "Пиле Аржентина", "2,80", "", ""],
["", "pile-po-lovdzhijski", "Пиле по ловджийски", "2,80", "", ""],
["", "przhen-sharan", "Пържен шаран", "2,80", "", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "2,80", "", ""],
["", "kyufteta-s-garnitura", "Кюфтета с гарнитура", "2,80", "", ""],
["", "omlet-asorti", "Омлет Асорти", "2,10", "", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "1,40", "", ""],
["", "omlet", "Омлет", "1,40", "", ""],
["", "aromatni-pileshki-filencza", "Ароматни пилешки филенца", "3,50", "", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "1,40", "", ""],
["", "biskvitena-torta", "Бисквитена торта", "1,40", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "0,70", "", ""],
["", "katino-meze", "Катино мезе", "2,80", "", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "", ""]

            ],

            "barbecue": [
                ["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "teleshko-kyufte", "Телешко кюфте", "1,40", "100", ""],
["", "agneshki-shish-kebap", "Агнешки шиш кебап", "3,50", "200", ""],
["", "pikantno-kyufte", "Пикантно кюфте", "0,70", "100", ""],
["", "bolyarsko-kyufte", "Болярско кюфте", "2,80", "300", ""],
["", "karnache", "Карначе", "2,10", "120", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "2,80", "240", ""],
["", "pileshko-sochno-file", "Пилешко сочно филе", "3,50", "240", ""],
["", "marinovano-pile", "Мариновано пиле", "5,60", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "120", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "8,40", "550", ""],
["", "pileshki-marinovani-trtki", "Пилешки мариновани трътки", "2,10", "200", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,20", "", ""],
["", "pileshki-filencza-s-bekon", "Пилешки филенца с бекон", "4,20", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""],
["", "svinski-grdi", "Свински гърди", "5,60", "300", ""],
["", "svinski-rebrcza", "Свински ребърца", "5,60", "350", ""],
["", "svinski-ushi", "Свински уши", "2,80", "200", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "svinski-shashlik", "Свински шашлик", "9,80", "550", ""],
["", "bekon-na-skara", "Бекон на скара", "5,60", "200", ""],
["", "kombiniran-shashlik", "Комбиниран шашлик", "10,50", "550", ""],
["", "bekon-s-kashkaval", "Бекон с кашкавал", "4,90", "360", ""],
["", "svinski-drob", "Свински дроб", "3,50", "250", ""],
["", "teleshki-presen-sudzhuk", "Телешки пресен суджук", "5,60", "280", ""],
["", "pusheni-svinski-grdi", "Пушени свински гърди", "4,20", "250", ""],
["", "pushena-slanina", "Пушена сланина", "2,80", "200", ""],
["", "kombinirana-dska", "Комбинирана дъска", "18,90", "", ""],
["", "mescza-za-meze", "Месца за мезе", "9,10", "500", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "5,60", "300", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "300", ""],
["", "meshana-salata", "Мешана салата", "2,80", "300", ""],
["", "selska-salata", "Селска салата", "2,80", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "300", ""],
["", "kapreze", "Капрезе", "4,20", "300", ""],
["", "domati", "Домати", "2,10", "250", ""],
["", "krastaviczi", "Краставици", "2,10", "250", ""],
["", "zele-i-morkovi", "Зеле и моркови", "2,10", "300", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "200", ""],
["", "snezhanka", "Снежанка", "2,80", "250", ""],
["", "katk-s-chushki", "Катък с чушки", "2,80", "250", ""],
["", "pecheni-chushki-s-chesn", "Печени чушки с чесън", "2,80", "200", ""],
["", "zelena-salata-s-vareno-yajcze", "Зелена салата с варено яйце", "2,80", "300", ""]

            ],

            "Топли предястия": [
                ["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "250", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "250", ""],
["", "kashkavalcheta-pane", "Кашкавалчета пане", "4,90", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "200", ""],
["", "sirencza-pane", "Сиренца пане", "2,80", "250", ""],
["", "vkusni-khapki-pane", "Вкусни хапки пане", "4,20", "220", ""],
["", "topeni-sirencza-s-borovinki", "Топени сиренца с боровинки", "3,50", "250", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "2,80", "250", ""],
["", "pileshki-drobcheta-s-kashkaval-i-gbi", "Пилешки дробчета с кашкавал и гъби", "3,50", "250", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "3,50", "250", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "3,50", "250", ""],
["", "pileshki-trtki", "Пилешки трътки", "2,10", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,20", "", ""],
["", "svinski-drob-s-luk", "Свински дроб с лук", "3,50", "250", ""],
["", "svinski-khapki-pane", "Свински хапки пане", "4,20", "250", ""],
["", "svinski-ushi", "Свински уши", "2,80", "200", ""],
["", "svinski-kracheta", "Свински крачета", "2,80", "200", ""],
["", "teleshki-ezik", "Телешки език", "4,20", "200", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "200", ""]

            ],

            "Картофени предястия": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,10", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "zapekanka-s-bekon", "Запеканка с бекон", "4,20", "300", ""],
["", "zapekanka-ss-sirene", "Запеканка със сирене", "3,50", "300", ""]

            ],

            "Пици и Пърленки": [
                ["", "margarita", "Маргарита", "4,20", "550", ""],
["", "kaprichoza", "Капричоза", "5,60", "650", ""],
["", "specziale", "Специале", "5,60", "670", ""],
["", "prlenka-s-maslo", "Пърленка с масло", "0,70", "", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "0,70", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "", ""],
["", "pitka", "Питка", "0,00", "", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""]

            ],

            "fish": [
                ["", "czacza", "Цаца", "2,10", "250", ""],
["", "sharan-przhen", "Шаран пържен", "3,50", "250", ""],
["", "skumriya", "Скумрия", "2,80", "250", ""],
["", "pstrva", "Пъстърва", "4,20", "250", ""]

            ],

            "sachs": [
                ["", "pileshki-sach", "Пилешки сач", "8,40", "650", ""],
["", "svinski-sach", "Свински сач", "9,80", "650", ""],
["", "kombiniran-sach", "Комбиниран сач", "10,50", "650", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "6,30", "550", ""],
["", "czyal-dzholan", "Цял джолан", "8,40", "650", ""],
["", "pileshko-file-ss-smetana-i-gbi", "Пилешко филе със сметана и гъби", "6,30", "370", ""]

            ],

            "Гарнитури и сосове": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "150", ""],
["", "kartofi-sote", "Картофи соте", "0,70", "150", ""],
["", "lyutenicza-s-luk", "Лютеница с лук", "1,40", "150", ""],
["", "pukani-chushleta", "Пукани чушлета", "0,70", "100", ""],
["", "presni-chushleta", "Пресни чушлета", "0,00", "", ""],
["", "apetit", "Апетит", "1,40", "200", ""],
["", "mlechen-sos", "Млечен сос", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "100", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "0,70", "150", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "250", ""]

            ],

            "Сухи мезета": [
                ["", "lukanka", "Луканка", "2,80", "50", ""],
["", "sudzhuk", "Суджук", "2,80", "50", ""],
["", "pastrma", "Пастърма", "2,80", "50", ""],
["", "file-elena", "Филе Елена", "2,80", "50", ""],
["", "sirene", "Сирене", "1,40", "100", ""],
["", "kashkaval", "Кашкавал", "2,10", "100", ""],
["", "kombinirano-plato", "Комбинирано плато", "11,90", "300", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "220", ""],
["", "mitnicharska-palachinka", "Митничарска палачинка", "2,10", "300", ""],
["", "chijzkejk", "Чийзкейк", "2,80", "200", ""]

            ]
        }', 
        'slug' => 'skara-na-zhar',
        'business_name' => 'Скара на жар',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5802',
        'address' => 'ж.к. Сторгозия срещу блок 21скара',
        'address_additional' => '',
        'coords_x' => '43.42092889',
        'coords_y' => '24.59826407',
        'phone' => '+359876031414',
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
            
            "Еспресо": [
                ["", "espreso", "Еспресо", "0,70", "50", ""],
["", "bezkofeinovo-espreso", "Безкофеиново еспресо", "0,70", "50", ""],
["", "espreso-s-mlyako", "Еспресо с мляко", "0,70", "70", ""],
["", "amerikano", "Американо", "0,70", "100", ""]

            ],

            "specialties": [
                ["", "kapuchino", "Капучино", "1,40", "250", ""],
["", "kapuchino-vegan", "Капучино веган", "1,40", "250", ""],
["", "late", "Лате", "1,40", "250", ""],
["", "goreshh-shokolad", "Горещ шоколад", "1,40", "300", ""],
["", "mlyako-s-kakao", "Мляко с какао", "0,70", "300", ""],
["", "chaj", "Чай", "0,70", "300", ""]

            ],

            "Студени": [
                ["", "byalo-frape", "Бяло Фрапе", "1,40", "350", ""],
["", "cherno-frape", "Черно Фрапе", "0,70", "350", ""],
["", "fredo-kapuchino", "Фредо капучино", "1,40", "350", ""],
["", "fredo-late", "Фредо лате", "1,40", "350", ""]

            ],

            "Детски": [
                ["", "studeno-detsko-mlyako", "Студено детско мляко", "0,70", "300", ""]

            ],

            "Фреш": [
                ["", "fresh-portokal", "Фреш Портокал", "1,40", "250", ""]

            ]
        }', 
        'slug' => 'coffee-express-37-dom-na-knigata',
        'business_name' => 'Coffee Express 37 - Дом на книгата',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5801',
        'address' => 'Бул. Данаил Попов 16',
        'address_additional' => '',
        'coords_x' => '43.41420574',
        'coords_y' => '24.61625648',
        'phone' => '+359899286044',
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
                ["", "salata-lajf", "Салата Лайф", "4,90", "400", ""],
["", "salata-mare", "Салата Маре", "12,60", "350", ""],
["", "salata-parmezan", "Салата Пармезан", "10,50", "350", ""],
["", "salata-bivolsko-sirene", "Салата Биволско сирене", "5,60", "400", ""],
["", "salata-burata", "Салата Бурата", "9,80", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "7,00", "400", ""],
["", "salata-emental", "Салата Ементал", "8,40", "400", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "300", ""],
["", "orientalska-salata", "Ориенталска салата", "9,10", "400", ""]

            ],

            "soups": [
                ["", "ribena-chorba", "Рибена чорба", "4,20", "300", ""],
["", "krem-supa-ot-tikvichki", "Крем супа от тиквички", "2,10", "300", ""],
["", "domashna-pileshka-supa", "Домашна пилешка супа", "2,80", "300", ""]

            ],

            "Стартери": [
                ["", "taramichka", "Тарамичка", "4,20", "150", ""],
["", "plato-kolbasi", "Плато колбаси", "20,30", "300", ""],
["", "plato-sirena", "Плато сирена", "15,40", "250", ""],
["", "kalmar-v-grczki-stil", "Калмар в гръцки стил", "9,80", "250", ""],
["", "presni-skaridi-na-tigan", "Пресни скариди на тиган", "18,20", "250", ""],
["", "przheni-perki-ot-vatos", "Пържени перки от ватос", "9,80", "300", ""],
["", "oktopod-na-plocha", "Октопод на плоча", "15,40", "250", ""],
["", "biftek-tartar", "Бифтек Тартар", "11,20", "300", ""],
["", "gshi-drob", "Гъши дроб", "20,30", "300", ""],
["", "khrupkavo-sirene-strakino", "Хрупкаво сирене Стракино", "8,40", "200", ""],
["", "khrupkavi-pileshki-filencza-s-kornflejks", "Хрупкави пилешки филенца с корнфлейкс", "6,30", "300", ""],
["", "khrupkavi-tikvichki", "Хрупкави тиквички", "6,30", "300", ""],
["", "manatarki", "Манатарки", "13,30", "350", ""],
["", "kalmar", "Калмар", "9,80", "250", ""],
["", "topenicza", "Топеница", "5,60", "300", ""],
["", "midi", "Миди", "9,10", "700", ""],
["", "skaridi-na-josper", "Скариди на Josper", "19,60", "300", ""],
["", "safrid", "Сафрид", "7,00", "300", ""],
["", "govezhdi-ezik", "Говежди език", "10,50", "300", ""]

            ],

            "Прясна паста и ризото": [
                ["", "spageti-proshuto-di-parma", "Спагети Прошуто ди Парма", "8,40", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "7,70", "350", ""],
["", "rizoto", "РизоТО", "8,40", "350", ""],
["", "krem-rizo", "Крем ризо", "8,40", "350", ""],
["", "fetuchini", "Фетучини", "16,80", "350", ""],
["", "spageti-pomodoro", "Спагети Помодоро", "7,00", "350", ""]

            ],

            "Пица на пещ": [
                ["", "shunka", "Шунка", "7,00", "550", ""],
["", "margarita", "Маргарита", "4,90", "550", ""],
["", "kuatro-formadzho", "Куатро Формаджо", "11,20", "600", ""],
["", "bekon", "Бекон", "7,70", "600", ""],
["", "lukanka", "Луканка", "8,40", "600", ""],
["", "peperoni", "Пеперони", "9,10", "550", ""],
["", "vegetariana", "Вегетариана", "4,90", "550", ""],
["", "picza-xxl-za-semejstvo-i-priyateli", "Пица XXL за семейство и приятели", "18,20", "1500", ""],
["", "khlebche-na-peshh", "Хлебче на пещ", "1,40", "280", ""],
["", "fokacha-na-peshh", "Фокача на пещ", "2,10", "280", ""],
["", "pile", "Пиле", "8,40", "600", ""],
["", "koze-sirene", "Козе сирене", "8,40", "600", ""]

            ],

            "От балкана и полето, до реката и морето": [
                ["", "mlechen-teleshki-t-bon", "Млечен телешки Т-бон", "27,30", "400", ""],
["", "somga-file", "Сьомга филе", "19,60", "450", ""],
["", "file-div-lavrak", "Филе див лаврак", "25,20", "450", ""],
["", "file-ot-fagri", "Филе от фагри", "20,30", "400", ""],
["", "pstrva", "Пъстърва", "9,10", "400", ""],
["", "otvoren-lavrak", "Отворен лаврак", "17,50", "400", ""],
["", "svinsko-bon-file", "Свинско бон филе", "11,20", "400", ""],
["", "svinski-vrat", "Свински врат", "9,80", "400", ""],
["", "svinski-rebrcza", "Свински ребърца", "9,10", "400", ""],
["", "pileshki-grdi", "Пилешки гърди", "10,50", "400", ""],
["", "pileshka-przhola", "Пилешка пържола", "7,70", "400", ""],
["", "teleshki-stek", "Телешки стек", "20,30", "300", ""],
["", "burger-lajf", "Бургер Лайф", "11,90", "", ""],
["", "pateshko-magre", "Патешко магре", "22,40", "400", ""],
["", "svinski-tomakhouk", "Свински Томахоук", "10,50", "600", ""],
["", "flejki-ot-svinsko-file", "Флейки от свинско филе", "8,40", "400", ""],
["", "stek-ot-riba-ton", "Стек от риба тон", "19,60", "400", ""],
["", "lokum-file", "Локум филе", "24,50", "400", ""],
["", "govezhdi-antrakot", "Говежди антракот", "27,30", "400", ""],
["", "svinski-grdi-dyurok", "Свински гърди Дюрок", "9,80", "400", ""],
["", "stek-dyurok", "Стек Дюрок", "11,90", "400", ""],
["", "kyuftencza", "Кюфтенца", "13,30", "400", ""],
["", "kyufteta-ot-black-angus", "Кюфтета от Black Angus", "9,10", "400", ""],
["", "fish-and-chips", "Fish and Chips", "10,50", "400", ""]

            ],

            "Асистенции": [
                ["", "grilovan-zelenchuk", "Грилован зеленчук", "2,80", "300", ""],
["", "kartoft", "Картофът", "2,10", "", ""],
["", "parmezanov-oriz", "Пармезанов ориз", "4,20", "150", ""],
["", "cheren-oriz", "Черен ориз", "4,90", "150", ""],
["", "sotiran-spanak", "Сотиран спанак", "2,10", "200", ""],
["", "zadushen-oriz", "Задушен ориз", "2,10", "200", ""],
["", "grilovani-asperzhi", "Гриловани аспержи", "4,90", "", ""]

            ],

            "От нашата Сладкарничка": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "3,50", "200", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "4,20", "180", ""],
["", "krem-maskarpone", "Крем маскарпоне", "3,50", "150", ""],
["", "vulkan", "Вулкан", "5,60", "200", ""],
["", "bademova-torta-s-kajsii", "Бадемова торта с кайсии", "4,20", "180", ""],
["", "orekhovo-tiramisu", "Орехово тирамису", "3,50", "180", ""],
["", "brauni-pchelin", "Брауни пчелин", "3,50", "180", ""]

            ],

            "Суши Меню": [
                ["", "edamame", "Едамаме", "3,50", "180", ""],
["", "khosomaki-somga", "Хосомаки Сьомга", "4,90", "", ""],
["", "norvezhka-gora", "Норвежка гора", "8,40", "", ""],
["", "uramaki-filadelfiya", "Урамаки филаделфия", "4,20", "", ""],
["", "vulkan", "Вулкан", "10,50", "", ""],
["", "cherven-drakon", "Червен дракон", "10,50", "", ""],
["", "tigr", "Тигър", "7,00", "", ""],
["", "nigiri-set-plyus", "Нигири Сет Плюс", "27,30", "", ""],
["", "fyuzhn-set", "Фюжън сет", "18,20", "", ""],
["", "nigiri-ton", "Нигири тон", "4,20", "", ""],
["", "nigiri-somga", "Нигири сьомга", "3,50", "", ""],
["", "khosomaki-avokado-i-filadelfiya", "Хосомаки Авокадо и Филаделфия", "4,20", "", ""],
["", "khosomaki-pushena-somga-i-goma-uakame", "Хосомаки пушена сьомга и гома уакаме", "5,60", "", ""],
["", "khosomaki-pikantna-riba-ton-s-majoneza-i-togarashi", "Хосомаки пикантна риба тон с майонеза и тогараши", "6,30", "", ""],
["", "khosomaki-krastavicza-i-filadelfiya", "Хосомаки краставица и филаделфия", "3,50", "", ""],
["", "gsenicza", "Гъсеница", "5,60", "", ""],
["", "rejnbou", "Рейнбоу", "10,50", "", ""],
["", "tortila-rol", "Тортила рол", "9,80", "", ""],
["", "vegan", "Веган", "3,50", "", ""],
["", "khrupkavo-pile", "Хрупкаво пиле", "4,20", "", ""],
["", "samuraj", "Самурай", "6,30", "", ""],
["", "filadelfiya-set", "Филаделфия сет", "25,20", "", ""],
["", "somga-set", "Сьомга сет", "22,40", "", ""],
["", "lajf-best-selr", "Лайф бест селър", "37,80", "", ""],
["", "khosomaki-pikantna-somga", "Хосомаки пикантна сьомга", "4,90", "", ""],
["", "khosomaki-riba-ton", "Хосомаки риба тон", "5,60", "", ""],
["", "khosomaki-skarida-i-avokado", "Хосомаки скарида и авокадо", "5,60", "", ""],
["", "khosomaki-asperzhi-i-filadelfiya", "Хосомаки аспержи и филаделфия", "4,20", "", ""],
["", "nigiri-sardinela", "Нигири Сардинела", "3,50", "", ""],
["", "nigiri-avokado", "Нигири авокадо", "2,10", "", ""],
["", "pecheni-somga-i-filadelfiya", "Печени Сьомга и филаделфия", "4,20", "", ""],
["", "pecheni-riba-ton-s-majoneza-i-togarashi", "Печени Риба тон с майонеза и тогараши", "4,90", "", ""],
["", "pecheni-teleshko", "Печени Телешко", "4,90", "", ""],
["", "pecheni-zmiorka", "Печени Змиорка", "5,60", "", ""],
["", "gunkan-tobiko", "Гункан Тобико", "6,30", "", ""],
["", "gunkan-khajver-somga", "Гункан Хайвер сьомга", "4,90", "", ""],
["", "goma-uakame", "Гома Уакаме", "5,60", "130", ""],
["", "pompej", "Помпей", "3,50", "", ""],
["", "vezuvij", "Везувий", "4,20", "", ""],
["", "toplo-futo-kaliforniya", "Топло Футо Калифорния", "4,20", "", ""],
["", "khrupkav-raj", "Хрупкав рай", "5,60", "", ""],
["", "somga-i-avokado", "Сьомга и авокадо", "4,90", "", ""],
["", "byalo-siyanie", "Бяло сияние", "13,30", "", ""],
["", "eksplouz", "Експлоуз", "4,90", "", ""],
["", "bijf", "Бийф", "6,30", "", ""],
["", "ton-i-avokado", "Тон и авокадо", "5,60", "", ""],
["", "ekzotik", "Екзотик", "4,90", "", ""],
["", "pile", "Пиле", "5,60", "", ""],
["", "skarida", "Скарида", "7,00", "", ""],
["", "sashimi-somga", "Сашими Сьомга", "4,90", "90", ""],
["", "sashimi-ton", "Сашими Тон", "6,30", "90", ""],
["", "tataki-somga", "Татаки Сьомга", "8,40", "130", ""],
["", "tataki-ton", "Татаки Тон", "9,10", "110", ""],
["", "tataki-teleshko", "Татаки Телешко", "9,10", "130", ""],
["", "avokado-tempura", "Авокадо темпура", "9,10", "", ""],
["", "tartar-ot-somga-avokado-i-goma-uakame", "Тартар от сьомга, авокадо и гома уакаме", "8,40", "220", ""],
["", "nigiri-khoso-set", "Нигири хосо сет", "16,80", "", ""],
["", "gunkan-goma-uakame", "Гункан Гома Уакаме", "2,80", "", ""],
["", "kaliforniya-krispi", "Калифорния Криспи", "5,60", "", ""]

            ]
        }', 
        'slug' => 'life-restaurant-pizzeria-wine-bar',
        'business_name' => 'Life restaurant, pizzeria &amp; wine bar',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Трети Март 35',
        'address_additional' => '',
        'coords_x' => '43.40415103',
        'coords_y' => '24.63060512',
        'phone' => '+064843844',
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
                ["", "salata-vinegret", "Салата Винегрет", "0,70", "200", ""],
["", "salata-gris-khajver", "Салата грис хайвер", "0,70", "200", ""],
["", "grczka-salata", "Гръцка салата", "1,40", "250", ""],
["", "salata-zele-morkovi-i-krastavichki", "Салата зеле, моркови и краставички", "0,70", "200", ""],
["", "salata-morkovi-ss-zekhtin", "Салата моркови със зехтин", "0,70", "200", ""],
["", "salata-tabule", "Салата Табуле", "1,40", "200", ""],
["", "salata-snezhanka", "Салата Снежанка", "0,70", "200", ""],
["", "salata-tikvichki-s-mlechen-sos", "Салата тиквички с млечен сос", "0,70", "200", ""]

            ],

            "soups": [
                ["", "bobena-chorbichka", "Бобена чорбичка", "0,70", "400", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "400", ""]

            ],

            "Ястия без месо": [
                ["", "kashkaval-pane", "Кашкавал пане", "2,10", "150", ""],
["", "zelevi-sarmichki-s-oriz", "Зелеви сармички с ориз", "1,40", "200", ""],
["", "kartofeni-kyufteta", "Картофени кюфтета", "0,00", "100", ""],
["", "lozovi-sarmichki", "Лозови сармички", "1,40", "200", ""],
["", "mish-mash", "Миш маш", "2,10", "350", ""],
["", "chushchiczi-s-oriz", "Чушчици с ориз", "2,10", "400", ""]

            ],

            "Ястия с месо": [
                ["", "pecheno-pileshko-butche", "Печено пилешко бутче", "1,40", "250", ""],
["", "pecheno-pileshko-butche-s-oriz-i-zelenchuczi", "Печено пилешко бутче с ориз и зеленчуци", "1,40", "350", ""],
["", "plneni-chushchiczi-s-kajma", "Пълнени чушчици с кайма", "2,10", "400", ""],
["", "pile-s-oriz-i-zelenchuczi", "Пиле с ориз и зеленчуци", "2,10", "300", ""],
["", "sladko-kiselo-pile-ss-zelenchuczi", "Сладко-кисело пиле със зеленчуци", "3,50", "400", ""]

            ],

            "Ястия с риба": [
                ["", "pechena-pstrva-s-oriz-i-zelenchuczi", "Печена пъстърва с ориз и зеленчуци", "3,50", "400", ""]

            ],

            "grill": [
                ["", "pechena-pileshka-przhola-ot-butche-s-kozha", "Печена пилешка пържола от бутче с кожа", "2,10", "200", ""],
["", "kyufte-na-skara", "Кюфте на скара", "0,00", "60", ""],
["", "kebapche-na-skara", "Кебапче на скара", "0,00", "60", ""],
["", "pechen-pushen-bekon-na-skara", "Печен пушен бекон на скара", "1,40", "120", ""],
["", "pileshko-karnache-na-skara", "Пилешко карначе на скара", "0,70", "100", ""],
["", "srbska-pleskavicza-na-skara", "Сръбска плескавица на скара", "1,40", "200", ""]

            ],

            "bread": [
                ["", "khlyab-khlebozavod-pleven-tipov-naryazan", "Хляб Хлебозавод Плевен типов нарязан", "0,70", "500", ""],
["", "khlyab-khlebozavod-pleven-byal-naryazan", "Хляб Хлебозавод Плевен бял нарязан", "0,70", "650", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,70", "150", ""],
["", "mlyako-s-gris", "Мляко с грис", "0,70", "200", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "", ""],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "0,70", "500", ""],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "2,10", "", ""],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "2,10", "", ""],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "0,70", "500", ""],
["", "fuzetea-mango-i-ananas-studen-chaj", "Fuzetea Манго и ананас, студен чай", "2,10", "", ""],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "0,70", "500", ""],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "2,10", "", ""]

            ],

            "beer": [
                ["", "ariana-ken", "Ариана кен", "0,70", "500", ""],
["", "pirinsko-svetlo", "Пиринско светло", "2,10", "", ""],
["", "bira-ariana", "бира Ариана", "1,40", "", ""],
["", "bira-ariana-svetlo", "бира Ариана Светло", "1,40", "", ""],
["", "stela-artoa-ken", "Стела Артоа кен", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "1,40", "500", ""],
["", "pirinsko-svetlo", "Пиринско светло", "0,70", "500", ""]

            ],

            "wine": [
                ["", "ejndzhl-kaberne-sovinon", "Ейнджъл Каберне Совиньон", "8,40", "750", ""],
["", "ejndzhl-roze", "Ейнджъл Розе", "8,40", "750", ""],
["", "ejndzhl-merlo", "Ейнджъл Мерло", "8,40", "750", ""],
["", "ejndzhl-kaberne-fran-i-kaberne-sovinon", "Ейнджъл Каберне Фран и Каберне Совиньон", "8,40", "750", ""],
["", "ejndzhl-sira-i-merlo", "Ейнджъл Сира и Мерло", "8,40", "750", ""],
["", "ejndzhl-sovinon-blan", "Ейнджъл Совиньон Блан", "8,40", "750", ""],
["", "sajkl-kaberne-sovinon", "Сайкъл Каберне Совиньон", "7,00", "750", ""],
["", "sajkl-merlo", "Сайкъл Мерло", "7,00", "750", ""],
["", "sajkl-roze", "Сайкъл Розе", "7,00", "750", ""],
["", "sajkl-sira", "Сайкъл Сира", "7,00", "750", ""]

            ],

            "others": [
                ["", "pribori-za-khrana-fantaziya", "Прибори за храна Фантазия", "0,00", "", ""]

            ]
        }', 
        'slug' => 'gourmet-corner',
        'business_name' => 'Gourmet Corner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Димитър Константинов 21',
        'address_additional' => '',
        'coords_x' => '43.4104658',
        'coords_y' => '24.61983453',
        'phone' => '+359878743065 ; 0877677547',
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
                ["", "picza-maestro", "Пица Маестро", "4,20", "", ""],
["", "picza-viktoriya", "Пица Виктория", "4,90", "", ""],
["", "picza-tono", "Пица Тоно", "4,90", "", ""],
["", "picza-fruti-di-mare", "Пица Фрути Ди Маре", "4,90", "", ""],
["", "picza-redzhina", "Пица Реджина", "4,90", "", ""],
["", "picza-belisima", "Пица Белисима", "4,90", "", ""],
["", "picza-san-marino", "Пица Сан Марино", "4,90", "", ""],
["", "kalczone", "Калцоне", "4,90", "", ""],
["", "picza-khit---s-plnen-bord", "Пица Хит - с пълнен борд", "5,60", "", ""],
["", "picza-maniya---s-plnen-bord", "Пица Мания - с пълнен борд", "5,60", "", ""],
["", "picza-kombo---chetiri-piczi-v-edna", "Пица Комбо - четири пици в една", "13,30", "1500", ""],
["", "picza-fiore", "Пица Фиоре", "4,90", "", ""],
["", "picza-margarita", "Пица Маргарита", "4,20", "", ""],
["", "picza-vegetariana", "Пица Вегетариана", "4,20", "", ""],
["", "picza-bonifacho", "Пица Бонифачо", "4,20", "", ""],
["", "picza-chetiri-sirena", "Пица Четири сирена", "4,20", "", ""],
["", "picza-don-domat", "Пица Дон Домат", "4,20", "", ""],
["", "picza-byala", "Пица Бяла", "4,20", "", ""],
["", "picza-kham", "Пица Хам", "4,20", "", ""],
["", "picza-khavaj", "Пица Хавай", "4,20", "", ""],
["", "picza-klasika", "Пица Класика", "4,20", "", ""],
["", "picza-specziale", "Пица Специале", "4,20", "", ""],
["", "picza-salami", "Пица Салами", "4,20", "", ""],
["", "picza-miks", "Пица Микс", "4,20", "", ""],
["", "picza-meksikana", "Пица Мексикана", "4,20", "", ""],
["", "picza-polo", "Пица Поло", "4,90", "", ""],
["", "picza-roma", "Пица Рома", "4,20", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,90", "", ""],
["", "picza-bel-vyu", "Пица Бел Вю", "4,20", "", ""],
["", "picza-dyavolo", "Пица Дяволо", "4,20", "", ""],
["", "picza-proshuto", "Пица Прошуто", "4,90", "", ""],
["", "picza-chorizo", "Пица Чоризо", "4,90", "", ""],
["", "picza-peperone", "Пица Пепероне", "4,90", "", ""],
["", "picza-grczka", "Пица Гръцка", "4,20", "", ""],
["", "picza-rafaele", "Пица Рафаеле", "4,20", "", ""]

            ],

            "salads": [
                ["", "salata-fiore", "Салата Фиоре", "4,90", "350", ""],
["", "salata-vitamina", "Салата Витамина", "3,50", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "300", ""],
["", "salata-czezar-s-pile", "Салата Цезар с пиле", "4,90", "300", ""],
["", "salata-altono", "Салата АлТоно", "4,90", "350", ""],
["", "salata-nerone", "Салата Нероне", "4,90", "350", ""],
["", "salata-rimini", "Салата Римини", "4,90", "450", ""],
["", "salata-meksikana", "Салата Мексикана", "4,20", "400", ""],
["", "salata-kapiya", "Салата Капия", "3,50", "350", ""],
["", "salata-domati-ss-sirene", "Салата Домати със сирене", "3,50", "300", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "salata-snezhanka", "Салата Снежанка", "2,80", "250", ""],
["", "salata-maroko", "Салата Мароко", "4,20", "300", ""],
["", "salata-sicziliya", "Салата Сицилия", "4,20", "300", ""],
["", "salata-krokante", "Салата Кроканте", "4,20", "350", ""],
["", "salata-ekzotik", "Салата Екзотик", "5,60", "350", ""],
["", "salata-kapri", "Салата Капри", "3,50", "300", ""],
["", "salata-tino", "Салата Тино", "4,20", "300", ""],
["", "salata-milano", "Салата Милано", "4,20", "300", ""],
["", "salata-nicza", "Салата Ница", "4,90", "300", ""],
["", "salata-seviliya", "Салата Севилия", "4,20", "300", ""],
["", "salata-tivoli", "Салата Тиволи", "4,20", "280", ""],
["", "salata-sona", "Салата Сона", "4,90", "300", ""]

            ],

            "dry-appetizer": [
                ["", "pastrma", "Пастърма", "4,90", "100", ""],
["", "file-elena", "Филе Елена", "4,90", "100", ""],
["", "lukanka", "Луканка", "3,50", "100", ""],
["", "sirene", "Сирене", "1,40", "150", ""],
["", "kashkaval", "Кашкавал", "2,10", "150", ""],
["", "plato-sirena", "Плато сирена", "6,30", "250", ""],
["", "plato-kolbasi", "Плато колбаси", "7,00", "250", ""],
["", "kombinirano-plato", "Комбинирано плато", "7,70", "250", ""]

            ],

            "starters": [
                ["", "topeni-sirencza", "Топени сиренца", "4,20", "200", ""],
["", "khrupkavi-kalmari", "Хрупкави калмари", "4,20", "200", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,90", "350", ""],
["", "gbi-s-bekon-i-kashkaval", "Гъби с бекон и кашкавал", "3,50", "250", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "300", ""],
["", "pileshki-filencza-ss-soev-sos", "Пилешки филенца със соев сос", "4,20", "250", ""],
["", "pileshki-kscheta", "Пилешки късчета", "4,20", "350", ""],
["", "zapecheni-kartofki", "Запечени картофки", "3,50", "300", ""],
["", "zapecheni-kartofki-s-bekon", "Запечени картофки с бекон", "3,50", "350", ""],
["", "brokoli-kambozola", "Броколи Камбозола", "4,20", "300", ""],
["", "sirencza-v-bekon", "Сиренца в бекон", "4,20", "300", ""],
["", "kamember-s-bademova-korichka", "Камембер с бадемова коричка", "5,60", "250", ""],
["", "asperzhi-s-parmezan-i-moczarela", "Аспержи с пармезан и моцарела", "4,90", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "300", ""],
["", "kartofki-fiore", "Картофки Фиоре", "2,80", "300", ""],
["", "panirani-sirencza", "Панирани сиренца", "2,80", "200", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "3,50", "200", ""],
["", "panirana-moczarela-s-kornflejks", "Панирана моцарела с корнфлейкс", "4,20", "200", ""],
["", "bireni-vurstcheta", "Бирени вурстчета", "5,60", "500", ""]

            ],

            "Ястия с пилешко месо": [
                ["", "pile-neapol", "Пиле Неапол", "7,00", "350", ""],
["", "pile-toskana", "Пиле Тоскана", "7,70", "350", ""],
["", "pile-fiore", "Пиле Фиоре", "6,30", "350", ""],
["", "pile-tropikana", "Пиле Тропикана", "5,60", "350", ""],
["", "pile-velino", "Пиле Велино", "5,60", "350", ""],
["", "pile-siena", "Пиле Сиена", "5,60", "350", ""],
["", "pile-kokos", "Пиле Кокос", "5,60", "350", ""],
["", "pile-kri", "Пиле Къри", "5,60", "350", ""],
["", "grczko-pile", "Гръцко Пиле", "6,30", "350", ""],
["", "limonovo-pile", "Лимоново Пиле", "5,60", "350", ""],
["", "pile-formadzho", "Пиле Формаджо", "6,30", "350", ""],
["", "pile-saltinboka", "Пиле Салтинбока", "5,60", "350", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "120", ""],
["", "pileshka-przhola", "Пилешка пържола", "3,50", "200", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "200", ""]

            ],

            "Ястия със свинско месо": [
                ["", "svinsko-tore", "Свинско Торе", "8,40", "350", ""],
["", "svinsko-fiore", "Свинско Фиоре", "6,30", "350", ""],
["", "svinsko-dyavolo", "Свинско Дяволо", "6,30", "350", ""],
["", "svinsko-rejn", "Свинско Рейн", "6,30", "350", ""],
["", "svinsko-rikota", "Свинско Рикота", "6,30", "350", ""],
["", "svinsko-porchini", "Свинско Порчини", "6,30", "350", ""],
["", "svinsko-karlos", "Свинско Карлос", "6,30", "350", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "120", ""],
["", "svinska-przhola", "Свинска пържола", "4,20", "220", ""],
["", "plato-ot-mesa-na-plocha", "Плато от меса на плоча", "17,50", "1000", ""]

            ],

            "Ястия с телешко месо": [
                ["", "teleshko-vitelo", "Телешко Витело", "10,50", "300", ""],
["", "teleshko-subiyani", "Телешко Субияни", "10,50", "300", ""],
["", "teleshko-ribes-nero", "Телешко Рибес Неро", "10,50", "300", ""],
["", "teleshki-shish", "Телешки шиш", "7,00", "200", ""]

            ],

            "Ястия с риба и морски дарове": [
                ["", "somga-sicziliana", "Сьомга Сицилиана", "9,10", "300", ""],
["", "lavrak-lefkada", "Лаврак Лефкада", "10,50", "300", ""],
["", "lavrak-malta", "Лаврак Малта", "11,90", "300", ""],
["", "pstrva-mesna", "Пъстърва Месѝна", "7,00", "300", ""],
["", "kalmar-po-sredizemnomorski", "Калмар по Средиземноморски", "5,60", "200", ""]

            ],

            "Паста и ризото": [
                ["", "pasta-mona-liza", "Паста Мона Лиза", "4,90", "300", ""],
["", "pasta-lion", "Паста Лион", "5,60", "300", ""],
["", "pasta-karbonara", "Паста Карбонара", "4,90", "300", ""],
["", "pasta-salsiche", "Паста Салсиче", "4,90", "300", ""],
["", "pasta-boloneze", "Паста Болонезе", "4,90", "300", ""],
["", "pasta-bordo", "Паста Бордо", "4,90", "300", ""],
["", "rizoto-polo", "Ризото Поло", "4,90", "300", ""],
["", "rizoto-del-mare", "Ризото Дел Маре", "6,30", "300", ""],
["", "rizoto-primavera", "Ризото Примавера", "4,20", "300", ""],
["", "rizoto-di-koko", "Ризото Ди Коко", "4,20", "300", ""],
["", "rizoto-kalabriya", "Ризото Калабрия", "4,90", "300", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "chili-sos", "Чили сос", "0,70", "50", ""],
["", "sos-apetit", "Сос Апетит", "0,70", "50", ""],
["", "italianski-sos", "Италиански сос", "0,70", "50", ""],
["", "sos-ajoli", "Сос Айоли", "0,70", "50", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "1,40", "180", ""],
["", "krastaviczi", "Краставици", "1,40", "180", ""],
["", "kombinirana", "Комбинирана", "1,40", "180", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "180", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "180", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "180", ""],
["", "oriz", "Ориз", "1,40", "130", ""],
["", "plochka-sirene", "Плочка сирене", "0,70", "80", ""],
["", "limon", "Лимон", "0,70", "40", ""]

            ],

            "Тестени изделия": [
                ["", "prlenka", "Пърленка", "0,70", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "150", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "200", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "200", ""],
["", "kombinirana-prlenka---sirene-i-kashkaval", "Комбинирана пърленка - сирене и кашкавал", "2,10", "200", ""],
["", "turski-khlyab", "Турски хляб", "1,40", "150", ""]

            ],

            "desserts": [
                ["", "czedeno-mlyako-ss-sladko-ot-borovinki", "Цедено мляко със сладко от боровинки", "1,40", "200", ""],
["", "maskarpone-pita", "Маскарпоне пита", "2,80", "150", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,10", "150", ""],
["", "gofreta-fiore", "Гофрета Фиоре", "2,10", "220", ""],
["", "palachinka", "Палачинка", "1,40", "150", ""],
["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "1,40", "150", ""],
["", "sladka-picza", "Сладка Пица", "3,50", "300", ""]

            ]
        }', 
        'slug' => 'restorant-fiore',
        'business_name' => 'Ресторант Fiore',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Цанко Церковски 18',
        'address_additional' => '',
        'coords_x' => '43.41105256',
        'coords_y' => '24.61704265',
        'phone' => '+359899558864',
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
                ["", "malk-dyuner", "Малък дюнер", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/700758.jpg?width=302"],
["", "sreden-dyuner", "Среден дюнер", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/700759.jpg?width=302"],
["", "golyam-dyuner", "Голям дюнер", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/700760.jpg?width=302"],
["", "dyuner-menyu", "Дюнер меню", "3,50", "600", "https://images.deliveryhero.io/image/fd-bg/Products/700761.jpg?width=302"]

            ],

            "burgers": [
                ["", "burger-chikn", "Бургер Чикън", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/700773.jpg?width=302"],
["", "burger-bijf", "Бургер Бийф", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/700774.jpg?width=302"],
["", "burger-pork", "Бургер Порк", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/700775.jpg?width=302"]

            ],

            "Крилца": [
                ["", "krilcza", "Крилца", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/700777.jpg?width=302"],
["", "krilcza-s-garnitura-i-pitka", "Крилца с гарнитура и питка", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/709927.jpg?width=302"]

            ],

            "others": [
                ["", "przheni-kartofki", "Пържени картофки", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/700776.jpg?width=302"]

            ],

            "Солени палачинки": [
                ["", "solena-palachinka-s-kashkaval", "Солена палачинка с кашкавал", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/700762.jpg?width=302"],
["", "solena-palachinka-ss-sirene", "Солена палачинка със сирене", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/700763.jpg?width=302"],
["", "solena-palachinka-s-shunka-i-kashkaval", "Солена палачинка с шунка и кашкавал", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/700765.jpg?width=302"],
["", "solena-palachinka-s-lukanka-i-kashkaval", "Солена палачинка с луканка и кашкавал", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/700766.jpg?width=302"],
["", "solena-palachinka-ss-svinsko-file-i-kashkaval", "Солена палачинка със свинско филе и кашкавал", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/700768.jpg?width=302"],
["", "solena-palachinka-dyuner", "Солена палачинка Дюнер", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/700772.jpg?width=302"]

            ],

            "Сладки палачинки": [
                ["", "palachinka-s-shokolad", "Палачинка с Шоколад", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/700810.jpg?width=302"],
["", "palachika-s-shokolad-nutella", "Палачика с Шоколад Nutella", "2,10", "", ""],
["", "palachinka-s-med", "Палачинка с мед", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-yagodi", "Палачинка със сладко от ягоди", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-smokinya", "Палачинка със сладко от смокиня", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "1,40", "", ""],
["", "palachinka-s-krem-maskarpone", "Палачинка с крем Маскарпоне", "2,10", "", ""],
["", "palachinka-s-krem-oreo", "Палачинка с крем Орео", "2,10", "", ""],
["", "palachinka-ss-sladko-ot-malini", "Палачинка със сладко от малини", "1,40", "", ""],
["", "palachinka-ss-sladko-ot-gorski-plodove", "Палачинка със сладко от горски плодове", "1,40", "", ""]

            ],

            "Гофрети": [
                ["", "gofreta-ss-shokolad", "Гофрета със  шоколад", "2,80", "", ""],
["", "gofreta-s-maskarpone", "Гофрета с маскарпоне", "3,50", "", ""],
["", "gofreta-s-krem-oreo", "Гофрета с крем Орео", "3,50", "", ""],
["", "gofreta-s-nutela", "Гофрета с Нутела", "3,50", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/709941.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/709942.jpg?width=302"]

            ],

            "drinks": [
                ["", "studen-chaj", "Студен чай", "1,40", "", ""],
["", "soda", "Сода", "0,70", "", ""],
["", "ajryan", "Айрян", "0,70", "", ""]

            ]
        }', 
        'slug' => 'dyuner-pikant',
        'business_name' => 'Дюнер Пикант',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Иван Миндиликов 1',
        'address_additional' => '',
        'coords_x' => '43.4195567',
        'coords_y' => '24.6136196',
        'phone' => '+359879456216',
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
            
            "Цели торти": [
                ["", "torta-cherveno-kadife-12", "Торта червено кадифе (12", "34,30", "", ""],
["", "torta-oreo-12", "Торта Орео (12", "35,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/829920.JPG?width=302"],
["", "torta-jogurt-s-vishni-12", "Торта йогурт с вишни (12", "24,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/829922.JPG?width=302"],
["", "belgijski-shokolad-i-yagodi-12", "Белгийски шоколад и ягоди (12", "35,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/829926.JPG?width=302"]

            ],

            "Торти на парче": [
                ["", "frenska-selska-torta-1", "Френска селска торта (1", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/814889.JPG?width=302"],
["", "torta-garash-1", "Торта Гараш (1", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/814894.JPG?width=302"],
["", "plodova-torta-s-maskarpone-1", "Плодова торта с маскарпоне (1", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/814895.JPG?width=302"],
["", "belgijski-shokolad-i-yagodi-1", "Белгийски шоколад и ягоди (1", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/814896.JPG?width=302"],
["", "torta-rafaelo-1", "Торта Рафаело (1", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/814899.JPG?width=302"],
["", "torta-cherveno-kadife-1", "Торта червено кадифе (1", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/814900.JPG?width=302"],
["", "torta-oreo-1", "Торта Орео (1", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/814902.JPG?width=302"],
["", "torta-snikrs-1", "Торта сникърс (1", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/814904.JPG?width=302"],
["", "torta-jogurt-s-vishni-1", "Торта йогурт с вишни (1", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/814906.JPG?width=302"],
["", "torta-strachetela-1", "Торта Страчетела (1", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/814909.JPG?width=302"],
["", "torta-kuba-1", "Торта Куба (1", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/824710.JPG?width=302"]

            ],

            "Други сладки изделия": [
                ["", "baklava", "Баклава", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/814921.JPG?width=302"],
["", "taralezhche", "Таралежче", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/814928.JPG?width=302"],
["", "frenski-makaroni", "Френски макарони", "0,70", "", ""],
["", "orekhovka", "Ореховка", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/814942.JPG?width=302"]

            ],

            "Прибори": [
                ["", "plastmasov-pribor", "Пластмасов прибор", "0,00", "", ""]

            ]
        }', 
        'slug' => 'sladkarnica-henzel-i-gretel-panorama-mol',
        'business_name' => 'Сладкарница Hansel and Gretel Panorama Mall',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5805',
        'address' => 'ул. Иван Миндиликов 1',
        'address_additional' => '',
        'coords_x' => '43.41975866',
        'coords_y' => '24.61275872',
        'phone' => '+359878690859 / 0878647182',
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
            
            "Грил сандвичи": [
                ["", "kham-2br-400gr-", "Хам (2бр-400гр +", "4,90", "400", ""],
["", "pancheta-2br-400gr-", "Панчета (2бр-400гр +", "4,90", "400", ""],
["", "pusheno-pueshko-2br-400gr-", "Пушено пуешко (2бр-400гр +", "4,90", "400", ""],
["", "kuatro-formadzhi-2br-400gr-", "Куатро Формаджи (2бр-400гр +", "4,90", "400", ""],
["", "vegetarianski-2br-400gr-", "Вегетариански (2бр-400гр +", "4,90", "400", ""]

            ],

            "pizza": [
                ["", "venecziya", "Венеция", "8,40", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "7,70", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "7,70", "", ""],
["", "belisima", "Белисима", "7,70", "", ""],
["", "kham", "Хам", "7,70", "", ""],
["", "krema-fungi", "Крема Фунги", "8,40", "", ""],
["", "vegetariana", "Вегетариана", "7,70", "", ""],
["", "kuatro-salami", "Куатро Салами", "8,40", "", ""],
["", "diabolo", "Диаболо", "8,40", "", ""],
["", "polo", "Поло", "8,40", "", ""],
["", "proshuto", "Прошуто", "8,40", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "12", ""],
["", "majoneza", "Майонеза", "0,00", "12", ""],
["", "gorchicza", "Горчица", "0,00", "12", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "chili-sos", "Чили сос", "0,00", "50", ""],
["", "bbq-sos---pushen", "BBQ сос - пушен", "0,00", "50", ""],
["", "domateno-majonezen", "Доматено-майонезен", "0,00", "50", ""],
["", "domateno-pikanten", "Доматено-пикантен", "0,00", "50", ""],
["", "majonezeno-pikanten", "Майонезено-пикантен", "0,00", "50", ""]

            ],

            "additives": [
                ["", "kashkaval", "Кашкавал", "0,70", "100", ""],
["", "moczarela", "Моцарела", "1,40", "100", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "100", ""],
["", "sirene-bri", "Сирене Бри", "1,40", "100", ""],
["", "topeno-sirene", "Топено сирене", "1,40", "100", ""],
["", "maslini", "Маслини", "0,70", "100", ""],
["", "gbi", "Гъби", "0,70", "100", ""],
["", "presen-domat", "Пресен домат", "0,70", "100", ""],
["", "shunka", "Шунка", "1,40", "100", ""],
["", "pusheno-pueshko-meso", "Пушено-пуешко месо", "1,40", "100", ""],
["", "bekon", "Бекон", "1,40", "100", ""],
["", "czarevicza", "Царевица", "0,70", "100", ""],
["", "smetana", "Сметана", "0,70", "100", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,70", "100", ""]

            ],

            "drinks": [
                ["", "energijna-napitka-monstr", "Енергийна напитка Монстър", "1,40", "500", ""],
["", "ariana", "Ариана", "0,70", "500", ""],
["", "zagorka", "Загорка", "0,70", "500", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/697505.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/697507.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/697514.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1061433.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1061434.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1061435.jpg?width=302"]

            ]
        }', 
        'slug' => 'cantonata-express-center',
        'business_name' => 'Cantonata Express Center',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Васил Левски 174',
        'address_additional' => '',
        'coords_x' => '43.41110245',
        'coords_y' => '24.61628141',
        'phone' => '+359887830330',
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
                ["", "ovcharska", "Овчарска", "3,50", "400", "https://images.deliveryhero.io/image/fd-bg/Products/1157225.jpg?width=302"],
["", "shopska", "Шопска", "2,80", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157226.jpg?width=302"],
["", "grczka", "Гръцка", "3,50", "400", "https://images.deliveryhero.io/image/fd-bg/Products/1157227.jpg?width=302"],
["", "domati-s-moczarela", "Домати с моцарела", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1157230.jpg?width=302"],
["", "gradinarska", "Градинарска", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157231.jpg?width=302"],
["", "laguna", "Лагуна", "3,50", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1157232.jpg?width=302"],
["", "svezha", "Свежа", "4,20", "300", ""],
["", "aida", "Аида", "4,20", "300", ""],
["", "czezar", "Цезар", "4,90", "300", ""],
["", "czvetna", "Цветна", "2,80", "250", ""],
["", "salata-s-pecheni-orekhi-i-sirene-kotidzh", "Салата с печени орехи и сирене котидж", "4,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/1157237.jpg?width=302"],
["", "salata-s-bejbi-spanak-i-pileshko-file-na-plocha", "Салата с бейби спанак и пилешко филе на плоча", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157238.jpg?width=302"],
["", "salata-rigoleto-s-riba-ton", "Салата риголето с риба тон", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157239.jpg?width=302"],
["", "snezhanka", "Снежанка", "2,80", "250", ""],
["", "yajchena", "Яйчена", "2,80", "250", ""],
["", "salata-perfeto-s-avokado-i-kinoa", "Салата Перфето с авокадо и киноа", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157244.jpg?width=302"],
["", "fantaziya", "Фантазия", "4,20", "300", ""],
["", "svezha-salata-s-koze-sirene", "Свежа салата с козе сирене", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1157246.jpg?width=302"],
["", "miks-ot-svezha-salata-somga-sushena-kajsiya-yadki-dresing", "Микс от свежа салата, сьомга, сушена кайсия, ядки, дресинг", "6,30", "", ""]

            ],

            "starters": [
                ["", "parmezanovi-filencza", "Пармезанови филенца", "4,90", "200", ""],
["", "khrupkavi-pileshki-prchiczi-ss-susam", "Хрупкави пилешки пръчици със сусам", "4,20", "250", ""],
["", "khrupkavi-filencza", "Хрупкави филенца", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1157563.jpg?width=302"],
["", "pileshki-prchiczi", "Пилешки пръчици", "4,90", "250", "https://images.deliveryhero.io/image/fd-bg/Products/1157564.jpg?width=302"],
["", "pileshki-khapki", "Пилешки хапки", "4,20", "200", ""],
["", "panirani-topeni-sirencza-ss-sladko-ot-borovinki", "Панирани топени сиренца със сладко от боровинки", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1157566.jpg?width=302"],
["", "kashkavalcheta", "Кашкавалчета", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1157567.jpg?width=302"],
["", "sirencza-s-kornflejks", "Сиренца с корнфлейкс", "3,50", "200", ""],
["", "gbi-i-tikvichki-na-tigan", "Гъби и тиквички на тиган", "4,20", "300", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,20", "400", ""],
["", "zapecheni-kartofi-asorti", "Запечени картофи Асорти", "4,20", "450", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "", ""],
["", "khrupkavi-kalmari-s-chesnov-sos", "Хрупкави калмари с чеснов сос", "6,30", "200", ""],
["", "zepecheni-brokoli", "Зепечени броколи", "4,20", "350", ""],
["", "kyuftencza-ot-kinoa-s-mlechen-sos", "Кюфтенца от киноа с млечен сос", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1157585.jpg?width=302"],
["", "zadusheni-brokoli", "Задушени броколи", "4,20", "250", ""],
["", "kyuftencza-ot-riba-ton-i-grilovani-zelenchuczi-mlechen-sos", "Кюфтенца от риба тон и гриловани зеленчуци, млечен сос", "4,90", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1157587.jpg?width=302"]

            ],

            "pizza": [
                ["", "pikola-italiya", "Пикола Италия", "3,50", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "gbena", "Гъбена", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "picza-ss-sladko-chili", "Пица със сладко чили", "5,60", "", ""],
["", "zelenchukova", "Зеленчукова", "3,50", "", ""],
["", "picza-ss-sos-barbekyu", "Пица със сос Барбекю", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157523.jpg?width=302"],
["", "chara", "Чара", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157524.jpg?width=302"],
["", "salami", "Салами", "4,20", "", ""],
["", "kham", "Хам", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157526.jpg?width=302"],
["", "kham-s-luk", "Хам с лук", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157527.jpg?width=302"],
["", "khit", "Хит", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157528.jpg?width=302"],
["", "pepes", "Пепес", "4,20", "", ""],
["", "meksikana", "Мексикана", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157530.jpg?width=302"],
["", "specziale", "Специале", "4,90", "", ""],
["", "napoli", "Наполи", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157532.jpg?width=302"],
["", "bolero", "Болеро", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157533.jpg?width=302"],
["", "chetiri-sirena", "Четири сирена", "4,20", "", ""],
["", "sicziliana", "Сицилиана", "4,90", "", ""],
["", "prezident", "Президент", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157536.jpg?width=302"],
["", "maestro", "Маестро", "4,20", "", ""],
["", "palermo", "Палермо", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157538.jpg?width=302"],
["", "torino", "Торино", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157546.jpg?width=302"],
["", "viktoriya", "Виктория", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157547.jpg?width=302"],
["", "toskana", "Тоскана", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157553.jpg?width=302"],
["", "kombi", "Комби", "4,90", "", ""],
["", "peperone", "Пепероне", "4,90", "", ""],
["", "morski-svyat", "Морски свят", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157556.jpg?width=302"],
["", "tono", "Тоно", "4,90", "", ""],
["", "miks", "Микс", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157558.jpg?width=302"],
["", "anzhelina", "Анжелина", "4,20", "", ""],
["", "rafaele", "Рафаеле", "4,90", "", ""],
["", "tropikana", "Тропикана", "4,20", "", ""],
["", "proshuto", "Прошуто", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157621.jpg?width=302"],
["", "venecziya", "Венеция", "4,90", "", ""],
["", "khavaj", "Хавай", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157623.jpg?width=302"],
["", "milano", "Милано", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/1157624.jpg?width=302"],
["", "byala-picza", "Бяла пица", "4,90", "", ""],
["", "kalczone", "Калцоне", "4,90", "", ""],
["", "fantaziya", "Фантазия", "7,00", "", ""]

            ],

            "Паста, Лазаня, Ризото": [
                ["", "spageti-karbonaro", "Спагети Карбонаро", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1157720.jpg?width=302"],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1157721.jpg?width=302"],
["", "fetuchini-s-pile", "Фетучини с пиле", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1157722.jpg?width=302"],
["", "spageti-napoli", "Спагети Наполи", "4,20", "450", "https://images.deliveryhero.io/image/fd-bg/Products/1157723.jpg?width=302"],
["", "zelenchukovi-spageti", "Зеленчукови спагети", "4,20", "350", ""],
["", "fetuchini-ss-sirena", "Фетучини със сирена", "4,90", "300", ""],
["", "fetuchini-s-teleshko-bon-file-i-manatarki", "Фетучини с телешко бон филе и манатарки", "7,00", "400", ""],
["", "fetuchini-ss-somga-cheri-domati-bosilekovo-pesto-i-parmezan", "Фетучини със сьомга, чери домати, босилеково песто и пармезан", "6,30", "300", ""],
["", "lazanya", "Лазаня", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157739.jpg?width=302"],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "3,50", "300", ""],
["", "lazanya-ss-spanak", "Лазаня със спанак", "3,50", "350", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "6,30", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,20", "300", ""],
["", "pene-ss-sirene-i-spanak", "Пене със сирене и спанак", "4,20", "300", ""],
["", "pene-s-pileshko-i-bekon", "Пене с пилешко и бекон", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1157745.jpg?width=302"],
["", "pene-s-teleshka-kajma", "Пене с телешка кайма", "4,20", "350", ""]

            ],

            "Основни ястия": [
                ["", "pileshki-krilcza", "Пилешки крилца", "4,20", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "200", ""],
["", "pile-verdi", "Пиле Верди", "5,60", "350", ""],
["", "pileshki-flejki", "Пилешки флейки", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157671.jpg?width=302"],
["", "pile-miks", "Пиле Микс", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157674.jpg?width=302"],
["", "pile-chedr", "Пиле чедър", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157680.jpg?width=302"],
["", "filencza-karibi", "Филенца Кариби", "4,90", "350", ""],
["", "pile-ss-spanak-i-parmezan", "Пиле със спанак и пармезан", "4,90", "400", ""],
["", "kombinirani-shishcheta", "Комбинирани шишчета", "4,20", "260", ""],
["", "pileshki-kscheta-s-pechena-chushka-bejbi-spanak-smetana-i-chesn", "Пилешки късчета с печена чушка, бейби спанак, сметана и чесън", "5,60", "380", ""],
["", "pileshki-gril-nadenichki-s-pikantni-kartofki", "Пилешки грил наденички с пикантни картофки", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157689.jpg?width=302"],
["", "pileshki-drobcheta", "Пилешки дробчета", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1157690.jpg?width=302"],
["", "mini-kyuftencza", "Мини кюфтенца", "3,50", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1157691.jpg?width=302"],
["", "rimski-khapki", "Римски хапки", "6,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157692.jpg?width=302"],
["", "krekhki-svinski-filencza", "Крехки свински филенца", "6,30", "450", "https://images.deliveryhero.io/image/fd-bg/Products/1157693.jpg?width=302"],
["", "svinski-rebra", "Свински ребра", "5,60", "250", "https://images.deliveryhero.io/image/fd-bg/Products/1157694.jpg?width=302"],
["", "shishcheta-s-pileshko-i-svinsko-bon-file-s-garnitura", "Шишчета с пилешко и свинско бон филе с гарнитура", "6,30", "400", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "250", ""],
["", "svinsko-file-karuzo", "Свинско филе Карузо", "6,30", "350", ""],
["", "svinsko-bon-file-s-medeno-gorchichen-sos-i-garnitura-kartofeno-pyure-s-brokoli", "Свинско бон филе с медено-горчичен сос и гарнитура картофено пюре с броколи", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1157704.jpg?width=302"],
["", "svinski-bon-filencza-s-manatarki", "Свински бон филенца с манатарки", "7,70", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157705.jpg?width=302"],
["", "sudzhuk-v-sakhanche", "Суджук в саханче", "4,20", "200", ""],
["", "filencza-verona", "Филенца Верона", "6,30", "400", ""],
["", "rulcza-kapreze", "Рулца Капрезе", "6,30", "300", ""],
["", "teleshko-pepr-sos", "Телешко Пепър сос", "9,10", "350", "https://images.deliveryhero.io/image/fd-bg/Products/1157710.jpg?width=302"],
["", "teleshki-gril-kyuftencza-s-pikantni-kartofi", "Телешки грил кюфтенца с пикантни картофи", "4,90", "300", ""],
["", "teleshko-kyufte", "Телешко кюфте", "1,40", "100", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "grilovana-somga-ss-sos-shampansko-i-garnitura-sotirani-zelenchuczi", "Грилована сьомга със сос шампанско и гарнитура сотирани зеленчуци", "13,30", "350", ""],
["", "czipura-na-skara", "Ципура на скара", "8,40", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "8,40", "300", ""],
["", "pstrva", "Пъстърва", "7,00", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1157718.jpg?width=302"]

            ],

            "Детско меню": [
                ["", "malka-picza-po-izbor-naturalen-sok-i-shokoladovo-yajcze", "Малка пица по избор, натурален сок и шоколадово яйце", "6,30", "", ""]

            ],

            "garnish": [
                ["", "topla-garnitura", "Топла гарнитура", "2,10", "150", ""],
["", "studena-garnitura", "Студена гарнитура", "1,40", "150", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "110", ""],
["", "torta-troen-shokolad", "Торта троен шоколад", "2,80", "200", ""],
["", "krem-napoli", "Крем Наполи", "2,10", "150", ""],
["", "biskvitena-torta-na-topki-s-maskarpone-i-presni-plodove", "Бисквитена торта на топки с маскарпоне и пресни плодове", "2,80", "200", ""],
["", "krem-napoli-ss-sladoled", "Крем Наполи със сладолед", "2,10", "180", ""],
["", "biskvitena-torta-s-nutela", "Бисквитена торта с нутела", "2,80", "150", ""]

            ],

            "Хлебчета": [
                ["", "italiyansko-khlebche-ss-susheni-domati-i-parmezan", "Италиянско хлебче със сушени домати и пармезан", "2,10", "200", ""],
["", "prlenka", "Пърленка", "0,70", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "italiyansko-khlebche-s-moczarela-maslini-i-rigan", "Италиянско хлебче с моцарела, маслини и риган", "2,10", "200", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "1,40", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", ""]

            ],

            "drinks": [
                ["", "korona", "Корона", "3,50", "", ""],
["", "ariana-ken", "Ариана кен", "1,40", "", ""],
["", "khajneken", "Хайнекен", "1,40", "330", ""],
["", "red-bul", "Ред Бул", "2,80", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "khajneken-0", "Хайнекен 0%", "1,40", "330", ""],
["", "studen-chaj-san-benedeto", "Студен чай Сан Бенедето", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'pizzeria-napoli',
        'business_name' => 'Pizzeria Napoli (Христо Ботев)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5803',
        'address' => 'Ул. Христо Ботев 48',
        'address_additional' => '',
        'coords_x' => '43.41055842',
        'coords_y' => '24.62619789',
        'phone' => '+35964846299',
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
                ["", "grczka-salata", "Гръцка салата", "4,20", "450", "https://images.deliveryhero.io/image/fd-bg/Products/697332.jpg?width=302"],
["", "zelena-s-riba-ton", "Зелена с риба тон", "4,20", "450", "https://images.deliveryhero.io/image/fd-bg/Products/697333.jpg?width=302"]

            ],

            "burgers": [
                ["", "teleshki-burger", "Телешки бургер", "4,20", "500", "https://images.deliveryhero.io/image/fd-bg/Products/697334.jpg?width=302"],
["", "teleshki-burger-s-bekon", "Телешки бургер с бекон", "4,90", "550", "https://images.deliveryhero.io/image/fd-bg/Products/697335.jpg?width=302"],
["", "burger-ss-svinsko-drpano-meso", "Бургер със свинско дърпано месо", "4,90", "500", "https://images.deliveryhero.io/image/fd-bg/Products/697338.jpg?width=302"],
["", "burger-s-khrupkavo-pile", "Бургер с хрупкаво пиле", "4,90", "450", "https://images.deliveryhero.io/image/fd-bg/Products/748292.jpg?width=302"],
["", "vedzhi-moczarela-burger", "Веджи-Моцарела бургер", "4,20", "450", "https://images.deliveryhero.io/image/fd-bg/Products/748293.jpg?width=302"],
["", "pileshki-burger", "Пилешки бургер", "4,20", "500", ""],
["", "dvoen-khrupkavo-pile", "Двоен Хрупкаво пиле", "7,70", "700", ""],
["", "dvoen-teleshki", "Двоен телешки", "7,00", "750", ""]

            ],

            "Кесадия": [
                ["", "kesadiya-s-pileshko-meso", "Кесадия с пилешко месо", "3,50", "450", ""],
["", "vegetarianska-kesadiya", "Вегетарианска кесадия", "3,50", "400", "https://images.deliveryhero.io/image/fd-bg/Products/697342.jpg?width=302"],
["", "kesadiya-ss-svinsko-meso", "Кесадия със свинско месо", "4,20", "450", ""]

            ],

            "Хот Дог": [
                ["", "khot-dog", "Хот Дог", "2,80", "300", "https://images.deliveryhero.io/image/fd-bg/Products/697343.jpg?width=302"],
["", "khot-dog-s-bekon", "Хот Дог с бекон", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/697344.jpg?width=302"]

            ],

            "others": [
                ["", "pileshki-przheni-krilcza", "Пилешки пържени крилца", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/697345.jpg?width=302"],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "przheni-kartofi-s-bekon-i-kashkaval", "Пържени картофи с бекон и кашкавал", "3,50", "300", ""],
["", "moczarela-stiks", "Моцарела стикс", "3,50", "250", ""]

            ],

            "additives": [
                ["", "yajcze", "Яйце", "0,00", "", ""],
["", "bekon", "Бекон", "0,00", "", ""],
["", "lyuta-chushka-khalapeno", "Люта чушка Халапеньо", "0,00", "", ""],
["", "sirene-chedr", "Сирене чедър", "0,00", "", ""],
["", "kashkaval", "Кашкавал", "0,00", "", ""],
["", "rezen-domat", "Резен Домат", "0,00", "", ""],
["", "kisela-krastavicza", "Кисела краставица", "0,00", "", ""],
["", "cherven-marinovan-luk", "Червен маринован лук", "0,00", "", ""],
["", "przhen-luk", "Пържен лук", "0,00", "", ""]

            ],

            "sauces": [
                ["", "barbekyu", "Барбекю", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "chili", "Чили", "0,00", "50", ""],
["", "sladko-chili", "Сладко чили", "0,00", "50", ""],
["", "medena-gorchicza", "Медена горчица", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "chedr-sos", "Чедър сос", "0,70", "50", ""]

            ],

            "beer": [
                ["", "ariana", "Ариана", "1,40", "500", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/706407.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/706410.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/706412.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajran", "Айран", "0,70", "294", ""]

            ],

            "desserts": [
                ["", "shokoladov-mfin", "Шоколадов мъфин", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/706481.jpg?width=302"]

            ]
        }', 
        'slug' => 'dg-burgers-coffee',
        'business_name' => 'DG Burgers coffee &amp; snacks',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5803',
        'address' => 'ул. Фридрих Енгелс 4А',
        'address_additional' => '',
        'coords_x' => '43.40929101',
        'coords_y' => '24.62675424',
        'phone' => '+359877898098',
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
                ["", "ovcharska-salata", "Овчарска салата", "4,20", "", ""],
["", "selska-salata-s-aromatni-podpravki", "Селска салата с ароматни подправки", "3,50", "", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "", ""]

            ],

            "Хапки и аламинути": [
                ["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "", ""],
["", "topeni-sirencza-ss-sladko-ot-borovinki", "Топени сиренца със сладко от боровинки", "4,20", "", ""],
["", "omlet-asorti", "Омлет асорти", "2,80", "", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "", ""],
["", "omlet-ss-spanak", "Омлет със спанак", "2,80", "", ""]

            ],

            "Пилешки специалитети": [
                ["", "pile-v-smetanov-sos-gbi-i-czarevicza", "Пиле в сметанов сос, гъби и царевица", "5,60", "", ""],
["", "pile-kapreze", "Пиле Капрезе", "6,30", "", ""]

            ],

            "Свински специалитети": [
                ["", "grilovan-svinski-vrat-s-bilkovo-maslo", "Грилован свински врат с билково масло", "7,70", "", ""],
["", "svinsko-s-portokali-v-meden-sos", "Свинско с портокали в меден сос", "8,40", "", ""]

            ],

            "Ястия от риба": [
                ["", "somga-ss-sos-ot-limon-smetana-i-kopr", "Сьомга със сос от лимон, сметана и копър", "9,80", "", ""],
["", "file-ot-pstrva-s-bilkova-korichka", "Филе от пъстърва с билкова коричка", "7,00", "", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,80", "550", ""],
["", "kham", "Хам", "3,50", "550", ""],
["", "vegetariana", "Вегетариана", "3,50", "550", ""],
["", "kaprichoza", "Капричоза", "5,60", "550", ""],
["", "chetiri-sirena", "Четири сирена", "5,60", "550", ""],
["", "kalczone", "Калцоне", "4,90", "550", ""],
["", "salami", "Салами", "4,90", "550", ""]

            ],

            "bread": [
                ["", "prlenka-v-maslo", "Пърленка в масло", "1,40", "100", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "100", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "100", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta-s-dva-vida-krem", "Домашна бисквитена торта с два вида крем", "2,80", "", ""],
["", "palachinka", "Палачинка", "2,10", "", ""],
["", "plodov-chijzkejk-s-maskarpone", "Плодов чийзкейк с маскарпоне", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'restorant-teodoros',
        'business_name' => 'Ресторант Теодорос',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5802',
        'address' => 'ж.к. Сторгозия к-с Теодорос',
        'address_additional' => '',
        'coords_x' => '43.4233388',
        'coords_y' => '24.5980007',
        'phone' => '+359889260553',
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
                ["", "kapreze", "Капрезе", "4,90", "400", ""],
["", "czezar", "Цезар", "5,60", "300", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "burata", "Бурата", "9,10", "500", ""],
["", "ovche-sirene", "Овче сирене", "5,60", "400", ""],
["", "razyadka-za-rakijka", "Разядка за ракийка", "3,50", "300", ""],
["", "nasheto-dori", "Нашето Дори", "9,80", "500", ""],
["", "salata-blgarche", "Салата Българче", "6,30", "500", ""],
["", "salata-lukanka", "Салата Луканка", "7,00", "400", ""],
["", "salata-koze-sirene", "Салата козе сирене", "8,40", "400", ""],
["", "tarama", "Тарама", "2,80", "250", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "2,10", "400", ""],
["", "brokoli", "Броколи", "2,10", "400", ""]

            ],

            "pasta": [
                ["", "taliateli-dori", "Талиатели Дори", "9,80", "350", ""],
["", "pasta-pene", "Паста пене", "7,00", "350", ""],
["", "pasta-karbonara", "Паста Карбонара", "5,60", "350", ""],
["", "pasta-boloneze", "Паста Болонезе", "5,60", "350", ""],
["", "rizoto", "Ризото", "7,70", "350", ""],
["", "orizovi-spageti", "Оризови спагети", "10,50", "350", ""]

            ],

            "starters": [
                ["", "pileshki-krilcza", "Пилешки крилца", "3,50", "250", ""],
["", "khrupkavi-topki-s-kornflejks", "Хрупкави топки с корнфлейкс", "7,00", "300", ""],
["", "pileshki-filencza", "Пилешки филенца", "4,90", "250", ""],
["", "pileshki-pukanki", "Пилешки пуканки", "4,90", "250", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,20", "250", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "9,10", "220", ""],
["", "khrupkavi-bejbi-kalmari", "Хрупкави бейби калмари", "9,10", "300", ""],
["", "miks-frenski-sirena", "Микс френски сирена", "13,30", "200", ""],
["", "midi-v-maslo", "Миди в масло", "9,10", "700", ""],
["", "presni-skaridi", "Пресни скариди", "13,30", "300", ""],
["", "przhen-chernomorski-safrid", "Пържен черноморски сафрид", "7,00", "300", ""],
["", "oktopod", "Октопод", "23,10", "250", ""],
["", "pusheni-topeni-sirencza-s-kornflejks", "Пушени топени сиренца с корнфлейкс", "5,60", "250", ""],
["", "govezhdi-ezik", "Говежди език", "8,40", "300", ""],
["", "miks-blgarski-kolbasi", "Микс български колбаси", "13,30", "200", ""],
["", "kalmari-na-plocha", "Калмари на плоча", "9,10", "250", ""],
["", "khrupkavi-skaridi", "Хрупкави скариди", "7,00", "350", ""],
["", "chernomorski-popcheta", "Черноморски попчета", "4,20", "300", ""],
["", "sredizemnomorski-gavros", "Средиземноморски гаврос", "7,00", "250", ""],
["", "presni-pechurki", "Пресни печурки", "5,60", "300", ""],
["", "khrupkavi-kyufteta", "Хрупкави кюфтета", "7,00", "300", ""],
["", "domashni-nadenichki", "Домашни наденички", "9,10", "300", ""]

            ],

            "Картофите": [
                ["", "kartofeni-roshhi", "Картофени рьощи", "2,80", "200", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "200", ""],
["", "kartofeni-reshetki-s-kashkaval", "Картофени решетки с кашкавал", "2,80", "350", ""],
["", "pryasno-przheni-kartofi", "Прясно пържени картофи", "2,10", "300", ""],
["", "pryasno-przheni-kartofi-ss-sirene", "Прясно пържени картофи със сирене", "2,10", "350", ""]

            ],

            "maindishes": [
                ["", "svinska-vratna-przhola-na-bbq", "Свинска вратна пържола на BBQ", "7,00", "450", ""],
["", "bon-file", "Бон филе", "9,80", "400", ""],
["", "file-ot-div-lavrak", "Филе от див лаврак", "17,50", "400", ""],
["", "pstrva", "Пъстърва", "9,10", "400", ""],
["", "zhareni-grdichki-na-bbq", "Жарени гърдички на BBQ", "7,70", "450", ""],
["", "svinski-rebrcza-na-bbq", "Свински ребърца на BBQ", "7,00", "400", ""],
["", "stekcheta-na-bbq", "Стекчета на BBQ", "9,10", "400", ""],
["", "pileshko-file-na-bbq", "Пилешко филе на BBQ", "7,00", "400", ""],
["", "pileshka-przhola-ot-but-na-bbq", "Пилешка пържола от бут на BBQ", "5,60", "400", ""],
["", "parmezanovi-filencza", "Пармезанови филенца", "9,10", "400", ""],
["", "teleshki-kyufteta", "Телешки кюфтета", "8,40", "400", ""],
["", "teleshki-stek", "Телешки стек", "18,20", "400", ""],
["", "govezhdi-ribaj", "Говежди рибай", "24,50", "400", ""],
["", "file-ot-somga", "Филе от сьомга", "16,10", "400", ""],
["", "pile-shandon", "Пиле Шандон", "8,40", "400", ""],
["", "pateshki-flejki", "Патешки флейки", "10,50", "400", ""],
["", "teleshki-kebap", "Телешки кебап", "9,80", "400", ""],
["", "kyufteta-na-bbq", "Кюфтета на BBQ", "7,00", "400", ""],
["", "shish-bbq", "Шиш BBQ", "9,10", "500", ""],
["", "kotlet-xxl", "Котлет XXL", "9,10", "500", ""],
["", "suvlaki-shish", "Сувлаки шиш", "8,40", "450", ""],
["", "srbski-sudzhuk", "Сръбски суджук", "8,40", "450", ""],
["", "przhen-lavrak", "Пържен лаврак", "16,10", "400", ""]

            ],

            "Хлебче на пещ": [
                ["", "khlebche-na-peshh", "Хлебче на пещ", "1,40", "280", ""],
["", "tursko-khlebche-ss-susam", "Турско хлебче със сусам", "1,40", "220", ""],
["", "khlebche-s-moczarela-cheri-domat-rozmarin", "Хлебче с моцарела, чери домат, розмарин", "2,10", "250", ""]

            ],

            "burgers": [
                ["", "burger-drpano-tele", "Бургер дърпано теле", "10,50", "450", ""],
["", "burger-drpano-prase", "Бургер дърпано прасе", "9,10", "450", ""],
["", "dvoen-chijzburger", "Двоен чийзбургер", "9,10", "450", ""],
["", "dyuner-ot-orient", "Дюнер от Ориент", "9,10", "450", ""],
["", "burger-blek-angs", "Бургер Блек Ангъс", "9,80", "450", ""],
["", "burger-krispi-pile", "Бургер Криспи пиле", "8,40", "450", ""],
["", "teleshki-burger", "Телешки бургер", "7,70", "450", ""]

            ],

            "sauces": [
                ["", "mlechen-sos", "Млечен сос", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "majonezena-salsa", "Майонезена салса", "0,70", "100", ""],
["", "sos-rodeo", "Сос Родео", "1,40", "100", ""],
["", "sos-chili-pili", "Сос Чили-Пили", "1,40", "100", ""],
["", "sos-chili", "Сос Чили", "0,70", "100", ""],
["", "majoneza", "Майонеза", "0,00", "100", ""],
["", "ketchup", "Кетчуп", "0,00", "100", ""],
["", "gorchicza", "Горчица", "0,00", "100", ""],
["", "sos-bbq", "Сос BBQ", "0,70", "100", ""],
["", "soev-sos", "Соев сос", "2,10", "100", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "600", ""],
["", "peperoni", "Пеперони", "7,00", "600", ""],
["", "maestro", "Маестро", "9,10", "600", ""],
["", "specziale", "Специале", "8,40", "600", ""],
["", "bbq", "BBQ", "7,70", "600", ""],
["", "vegetariana", "Вегетариана", "4,20", "600", ""],
["", "shunka", "Шунка", "5,60", "600", ""],
["", "trio", "Трио", "6,30", "600", ""],
["", "salami", "Салами", "9,10", "600", ""],
["", "familna-picza-kuatro-salami", "Фамилна пица Куатро салами", "20,30", "1680", ""],
["", "familiya", "Фамилия", "17,50", "1680", ""],
["", "karbonara", "Карбонара", "7,00", "600", ""],
["", "chorizo", "Чоризо", "7,00", "600", ""],
["", "fileto-di-polo", "Филето Ди Поло", "7,00", "600", ""],
["", "shpek", "Шпек", "9,10", "600", ""],
["", "khavaj", "Хавай", "5,60", "600", ""],
["", "kaprichoza", "Капричоза", "6,30", "600", ""],
["", "lukanka", "Луканка", "7,00", "600", ""],
["", "byalo-chorizo", "Бяло Чоризо", "8,40", "600", ""],
["", "francziya", "Франция", "8,40", "600", ""],
["", "balkanika", "Балканика", "8,40", "600", ""],
["", "bekon", "Бекон", "6,30", "600", ""],
["", "brokoli", "Броколи", "7,00", "600", ""],
["", "kalczone", "Калцоне", "7,00", "600", ""],
["", "pile", "Пиле", "5,60", "600", ""]

            ],

            "За Детето": [
                ["", "picza-s-shunka", "Пица с шункa", "8,40", "500", ""],
["", "khrupkavi-filencza", "Хрупкави филенца", "7,70", "300", ""],
["", "burger", "Бургер", "6,30", "400", ""]

            ],

            "desserts": [
                ["", "torta-blansh", "Торта Бланш", "3,50", "180", ""],
["", "shokoladov-garash", "Шоколадов Гараш", "2,80", "180", ""],
["", "chijzkejk-violetka", "Чийзкейк Виолетка", "3,50", "180", ""],
["", "krem-maskarpone", "Крем Маскарпоне", "3,50", "150", ""],
["", "krem-dori", "Крем Дори", "4,20", "150", ""]

            ]
        }', 
        'slug' => 'dory-cafe-food-games',
        'business_name' => 'Dory cafe, food &amp; games',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Цар Самуил 138',
        'address_additional' => '',
        'coords_x' => '43.40207653',
        'coords_y' => '24.61143101',
        'phone' => '+359877870087',
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
                ["", "200oriz-ss-zelenchuczi--pile-ss-zelenchuczi", "200.Ориз със зеленчуци + Пиле със зеленчуци", "5,60", "", ""],
["", "201oriz-ss-zelenchuczi--pile-po-imperatorski", "201.Ориз със зеленчуци + пиле по  императорски", "5,60", "", ""],
["", "202oriz-ss-zelenchuczi-sladko--kiselo-pileshko", "202.Ориз със зеленчуци +сладко -кисело пилешко", "5,60", "", ""],
["", "203oriz-ss-zelenchuczi--pile-yu-kesiyang", "203.Ориз със зеленчуци + пиле Ю Кесиянг", "5,60", "", ""],
["", "204oriz-ss-zelenchuczi--svinsko-ss-zelenchuczi", "204.Ориз със зеленчуци + свинско със зеленчуци", "5,60", "", ""],
["", "205oriz-guang-dong--pile-ss-zelenchuczi", "205.Ориз Гуанг донг + пиле със зеленчуци", "5,60", "", ""],
["", "206oriz-guang-dong--pile-po-imperatorski", "206.Ориз Гуанг донг + пиле по императорски", "5,60", "", ""],
["", "207oriz-guang-dong--sladko-kiselo-pileshko", "207.Ориз Гуанг донг + Сладко кисело пилешко", "5,60", "", ""],
["", "208oriz-guang-dong-svinsko-yu-ksiang", "208.Ориз Гуанг донг +свинско ю ксианг", "5,60", "", ""],
["", "209oriz-guang-dong--svinsko-ss-zelenchuczi", "209.Ориз Гуанг донг + свинско със зеленчуци", "5,60", "", ""],
["", "210oriz-ss-zelenchuczi--pile-s-bambuk-i-gbi", "210.Ориз със зеленчуци + пиле с бамбук и гъби", "5,60", "", ""]

            ],

            "soups": [
                ["", "26supa-ot-skaridi-i-meso", "26.Супа от скариди и месо", "2,10", "300", ""],
["", "27supa-ot-meso-i-zelenchuczi", "27.Супа от месо и зеленчуци", "1,40", "300", ""],
["", "28lyutivo---kisela-supa", "28.Лютиво - кисела супа", "2,10", "300", ""],
["", "29supa-ot-morski-vodorasli", "29.Супа от морски водорасли", "1,40", "", ""],
["", "30supa-ot-meso-i-czarevicza", "30.Супа от месо и царевица", "1,40", "300", ""],
["", "31supa-ot-meso-i-presni-gbi", "31.Супа от месо и пресни гъби", "1,40", "300", ""]

            ],

            "starters": [
                ["", "1proletni-rolcza", "1.Пролетни ролца", "2,10", "200", ""],
["", "2kitajski-khlyab", "2.Китайски Хляб", "1,40", "200", ""],
["", "3panirani-zelenchuczi", "3.Панирани зеленчуци", "3,50", "300", ""],
["", "4przhen-polufabrikat-ot-skaridi", "4.Пържен полуфабрикат от скариди", "2,10", "100", ""],
["", "5przheni-pileshki-krilcza250gr", "5.Пържени пилешки крилца(250гр)", "2,80", "", ""],
["", "6przheni-kartofi", "6.Пържени картофи", "2,10", "300", ""],
["", "6aprzheni-kartofi---presni", "6А.Пържени картофи - пресни", "2,80", "300", ""],
["", "7panirani-rolcza-ot-raczi", "7.Панирани ролца от раци", "2,80", "200", ""],
["", "7apanirano-sirene", "7А.Панирано сирене", "2,80", "200", ""],
["", "8kitajska-turshiya-ot-zele", "8.Китайска туршия от зеле", "2,80", "350", ""],
["", "9salata-ot-kitajski-gbi", "9.Салата от китайски гъби", "3,50", "300", ""],
["", "9asalata-ot-kitajski-bambuk", "9А.Салата от китайски бамбук", "3,50", "", ""],
["", "10salata-ot-kitajski-gbi-i-bambuk", "10.Салата от китайски гъби и бамбук", "3,50", "300", ""],
["", "11salata---zele-morkovi-i-majoneza", "11.Салата - зеле, моркови и майонеза", "2,80", "300", ""],
["", "12kitajska-salata", "12.Китайска Салата", "3,50", "350", ""],
["", "13salata-domati-i-krastaviczi", "13.Салата домати и краставици", "2,80", "300", ""],
["", "13ashopska-salata", "13А.Шопска салата", "2,80", "330", ""],
["", "13bovcharska-salata", "13Б.Овчарска салата", "3,50", "400", ""],
["", "14salata-ot-soevi-klnove", "14.Салата от соеви кълнове", "2,80", "300", ""],
["", "15salata-ot-morski-vodorasli", "15.Салата от морски водорасли", "2,80", "300", ""],
["", "16salata-ot-zelenchuczi-asorti", "16.Салата от зеленчуци асорти", "2,10", "350", ""],
["", "17salata-ot-kitajsko-fide---lyuto", "17.Салата от китайско фиде - люто", "2,80", "330", ""],
["", "18salata-ot-pileshko", "18.Салата от пилешко", "3,50", "350", ""],
["", "19salata-ot-morski-delikatesi", "19.Салата от морски деликатеси", "11,20", "400", ""],
["", "20przheni-zelenchuczi-asorti", "20.Пържени зеленчуци асорти", "4,20", "600", ""],
["", "21przhen-bambuk-i-kitajski-gbi", "21.Пържен бамбук и китайски гъби", "4,20", "500", ""],
["", "22przheni-yajcza-s-domati", "22.Пържени Яйца с домати", "3,50", "330", ""],
["", "24przhena-czarevicza", "24.Пържена царевица", "3,50", "400", ""],
["", "25kartofi-lo-uaj-lo", "25.Картофи Ло Уай Ло", "4,20", "400", ""]

            ],

            "Ястия от ориз": [
                ["", "32oriz-s-yajcze-grakh-i-czarevicza", "32.Ориз с яйце, грах и царевица", "3,50", "800", ""],
["", "33oriz-s-yajcze-i-tri-vida-meso", "33.Ориз с яйце и три вида месо", "4,90", "800", ""],
["", "35oriz-guan-dong-s-yajcze-grakh-i-shunka", "35.Ориз Гуан Донг с яйце, грах и шунка", "3,50", "800", ""],
["", "37oriz-ss-zelenchuczi-i-lyut-sos", "37.Ориз със зеленчуци и Лют сос", "3,50", "800", ""],
["", "38oriz-s-bambukovi-strkcheta-i-gbi", "38.Ориз с бамбукови стръкчета и гъби", "4,90", "800", ""],
["", "39przhen-oriz-s-yajcza-i-kri", "39.Пържен ориз с яйца и къри", "3,50", "800", ""],
["", "40oriz-ss-skaridi-yajcza-i-shunka", "40.Ориз със скариди, яйца  и шунка", "5,60", "800", ""],
["", "41byal-oriz", "41.Бял ориз", "1,40", "330", ""],
["", "38a-oriz-s-pileshko-luk-soev-sos-i-gbi", "38А. Ориз с пилешко лук, соев сос и гъби", "4,90", "800", ""],
["", "34oriz-s-yajcze-i-pile", "34.Ориз с яйце и пиле", "4,90", "800", ""],
["", "36przhen-oriz-ss-zelenchuczi", "36.Пържен ориз със зеленчуци", "3,50", "800", ""]

            ],

            "Ястия със Спагети": [
                ["", "47spageti-ss-zelenchuczi", "47.Спагети със зеленчуци", "3,50", "750", ""],
["", "48aspageti-s-pileshko-i-kashkaval", "48А.Спагети с пилешко и кашкавал", "5,60", "750", ""],
["", "49spageti-ss-svinsko-meso-i-zelenchuczi", "49.Спагети със свинско месо и зеленчуци", "4,90", "750", ""],
["", "50aspageti-s-pileshko-i-lyuto", "50А.Спагети с пилешко и люто", "4,20", "500", ""],
["", "48spageti-s-pileshko-meso-i-zelenchuczi", "48.Спагети с пилешко месо и зеленчуци", "4,90", "750", ""],
["", "50spageti-s-tri-vida-meso-i-zelenchuczi", "50.Спагети с три вида месо и зеленчуци", "5,60", "750", ""]

            ],

            "Китайски спагети Ми Фен": [
                ["", "42mi-fen-ss-zelenchuczi-i-yajcze", "42.Ми Фен със зеленчуци и яйце", "4,90", "600", ""],
["", "43mi-fen-ss-svinsko-i-zelenchuczi", "43.Ми Фен със свинско и зеленчуци", "5,60", "700", ""],
["", "44mi-fen-s-pileshko-meso-i-zelenchuczi", "44.Ми Фен с пилешко месо и зеленчуци", "5,60", "700", ""],
["", "45mi-fen-na-tigan-s-morski-delikatesi", "45.Ми Фен на тиган с морски деликатеси", "6,30", "700", ""],
["", "46mi-fen-s-kri-i-zelenchuczi", "46.Ми Фен с къри и зеленчуци", "4,90", "700", ""],
["", "46ami-fen-s-tri-vida-meso", "46А.Ми Фен с три вида месо", "6,30", "700", ""]

            ],

            "Ястия с пилешко месо": [
                ["", "51pileshko-meso-s-mnogo-vkusove---lyuto", "51.Пилешко месо с много вкусове - люто", "7,70", "700", ""],
["", "52osemte-dragoczennosti---lyuto", "52.Осемте драгоценности - люто", "10,50", "800", ""],
["", "53pileshko-meso-po-imperatorski---lyuto", "53.Пилешко месо по императорски - люто", "7,00", "800", ""],
["", "55kubcheta-pileshko-meso-s-kashu", "55.Кубчета пилешко месо с кашу", "10,50", "550", ""],
["", "56pile-na-lenti-ss-susam", "56.Пиле на ленти със сусам", "7,00", "630", ""],
["", "56apile-s-kashkaval", "56А.Пиле с кашкавал", "7,00", "500", ""],
["", "57pile-s-bambukovi-strkcheta-i-skaridi", "57.Пиле с бамбукови стръкчета и скариди", "7,70", "800", ""],
["", "58pileshko-meso-s-kri", "58.Пилешко месо с къри", "7,00", "800", ""],
["", "60pileshko-meso-s-limonov-sos", "60.Пилешко месо с лимонов сос", "7,00", "650", ""],
["", "61pile-s-ananas", "61.Пиле с ананас", "7,70", "800", ""],
["", "63pile-s-pryasna-chushka", "63.Пиле с прясна чушка", "7,70", "800", ""],
["", "64pile-s-kartofi", "64.Пиле с картофи", "7,70", "800", ""],
["", "66pile-ss-zelenchuczi-na-tigan", "66.Пиле със зеленчуци на тиган", "7,70", "800", ""],
["", "67pile-s-presni-gbi", "67.Пиле с пресни гъби", "7,70", "800", ""],
["", "68pile-gan-su-na-tigan", "68.Пиле Ган Су на тиган", "7,70", "800", ""],
["", "69apile-s-kitajski-aromatni-gbi-i-zelenchuczi", "69А.Пиле с китайски ароматни гъби и зеленчуци", "8,40", "800", ""],
["", "62pile-s-bambuk-i-kitajski-gbi", "62.Пиле с бамбук и китайски гъби", "7,70", "800", ""],
["", "65pile-ss-zelenchuczi", "65.Пиле със зеленчуци", "7,00", "700", ""],
["", "69pile-yu-ksiang", "69.Пиле Ю Ксианг", "7,70", "800", ""],
["", "54sladko---kiselo-pileshko-meso", "54.Сладко - кисело пилешко месо", "7,00", "700", ""]

            ],

            "Ястия с телешко месо": [
                ["", "71teleshko-s-luk-i-gbi", "71.Телешко с лук и гъби", "9,10", "800", ""],
["", "72teleshko-s-presni-chushki", "72.Телешко с пресни чушки", "9,10", "800", ""],
["", "73teleshko-s-lyutiv-sos", "73.Телешко с лютив сос", "9,10", "800", ""],
["", "74teleshko-ss-zelenchuczi", "74.Телешко със зеленчуци", "9,10", "800", ""],
["", "75teleshko-s-kartofi", "75.Телешко с картофи", "9,80", "800", ""],
["", "76teleshko-s-kitajski-aromati", "76.Телешко с китайски аромати", "10,50", "700", ""],
["", "77teleshko-na-tigan", "77.Телешко на тиган", "9,80", "800", ""],
["", "79teleshko-s-kitajski-aromatni-gbi-i-zelenchuczi", "79.Телешко с китайски ароматни гъби и зеленчуци", "10,50", "800", ""],
["", "70teleshko-s-bambuk-i-kitajski-gbi", "70.Телешко с бамбук и китайски гъби", "9,10", "800", ""]

            ],

            "Ястия с месо от патица": [
                ["", "92paticza-ss-zelenchuczi", "92.Патица със зеленчуци", "8,40", "700", ""],
["", "93paticza-s-bambuk-i-kitajski-gbi", "93.Патица с бамбук и китайски гъби", "9,10", "700", ""],
["", "94przhena-pikantna-paticza", "94.Пържена пикантна патица", "8,40", "700", ""],
["", "96sladko-kisela-paticza", "96.Сладко-кисела патица", "8,40", "700", ""],
["", "97paticza-na-tigan", "97.Патица на тиган", "9,10", "700", ""],
["", "99paticza-aromatni-kitajski-gbi-i-zelenchuczi", "99.Патица ароматни китайски гъби и зеленчуци", "9,80", "700", ""]

            ],

            "Ястия със свинско месо": [
                ["", "81svinsko-s-kartofi", "81.Свинско с картофи", "7,70", "800", ""],
["", "83svinsko-s-presni-chushki", "83.Свинско с пресни чушки", "7,70", "800", ""],
["", "84svinsko-v-sladko---kisel-sos", "84.Свинско в сладко - кисел сос", "7,70", "600", ""],
["", "85svinsko-ss-zelenchuczi", "85.Свинско със зеленчуци", "7,70", "800", ""],
["", "86svinsko-s-presni-gbi", "86.Свинско с пресни гъби", "7,70", "800", ""],
["", "89svinsko-na-tigan", "89.Свинско на тиган", "7,70", "800", ""],
["", "90lyuto-svinsko-meso", "90.Люто свинско месо", "7,70", "800", ""],
["", "91tri-vida-meso-ss-zelenchuczi", "91.Три вида месо със зеленчуци", "7,70", "", ""],
["", "91ari-vida-meso-s-bambukovi-strkcheta-i-kitajski-gbi", "91А.ри вида месо с бамбукови стръкчета и китайски гъби", "7,70", "800", ""],
["", "80-svinsko-yu-ksiang", "80. Свинско Ю Ксианг", "7,70", "800", ""],
["", "82svinsko-s-bambuk-i-kitajski-gbi", "82.Свинско с бамбук и китайски гъби", "7,70", "800", ""]

            ],

            "Риба - Хек Филе": [
                ["", "100riba-s-kitajski-soev-sos", "100.Риба с китайски соев сос", "8,40", "600", ""],
["", "101khrupkava-riba-na-parcheta", "101.Хрупкава риба на парчета", "8,40", "550", ""],
["", "102riba-v-sladko---kisel-sos", "102.Риба в сладко - кисел сос", "8,40", "700", ""],
["", "103lyutiva-riba", "103.Лютива риба", "8,40", "700", ""],
["", "104riba-s-bambuk-i-kitajski-gbi", "104.Риба с Бамбук и китайски гъби", "8,40", "730", ""]

            ],

            "Морски Деликатеси": [
                ["", "105preprzheni-kalmari", "105.Препържени калмари", "13,30", "400", ""],
["", "106kalmari-ss-zelenchuczi", "106.Калмари със зеленчуци", "12,60", "500", ""],
["", "107kalmari-s-bambuk-i-kitajski-gbi", "107..Калмари с бамбук и китайски гъби", "13,30", "500", ""],
["", "108preprzheni-skaridi", "108.Препържени скариди", "16,10", "400", ""],
["", "109skaridi-v-sladko-kisel-sos", "109.Скариди в сладко-кисел сос", "13,30", "450", ""],
["", "110skaridi-ss-zelenchuczi", "110.Скариди със зеленчуци", "13,30", "500", ""],
["", "111kralski-skaridi-s-kitajski-soev-sos", "111.Кралски скариди с китайски соев сос", "21,70", "400", ""],
["", "112morski-skaridi-na-tigan", "112.Морски скариди на тиган", "24,50", "400", ""],
["", "113morski-delikatesi-na-tigan", "113.Морски деликатеси на тиган", "25,90", "500", ""]

            ],

            "sauces": [
                ["", "301-lyutiv-sos", "301. Лютив сос", "0,00", "80", ""],
["", "302sladko---kisel-sos", "302.Сладко - кисел сос", "0,00", "80", ""],
["", "303soev-sos", "303.Соев сос", "0,00", "80", ""],
["", "304chesnov-sos", "304.Чеснов сос", "0,00", "80", ""],
["", "305lyutiv-i-sladko---kisel", "305.Лютив и сладко - кисел", "0,00", "", ""]

            ],

            "additives": [
                ["", "306skaridi", "306.Скариди", "2,10", "100", ""],
["", "307pileshko-meso", "307.Пилешко месо", "1,40", "100", ""],
["", "308svinsko-meso", "308.Свинско месо", "1,40", "100", ""],
["", "309teleshko-meso", "309.Телешко месо", "2,10", "100", ""],
["", "310zelenchuczi", "310.Зеленчуци", "0,00", "100", ""],
["", "311kitajski-gbi", "311.Китайски Гъби", "1,40", "100", ""],
["", "312bambuk", "312.Бамбук", "1,40", "100", ""],
["", "313-klechki", "313. Клечки", "0,00", "", ""]

            ],

            "desserts": [
                ["", "114przheno-rulo", "114.Пържено руло", "2,10", "200", ""],
["", "115presni-plodove", "115.Пресни плодове", "2,10", "250", ""],
["", "116przheni-plodove", "116.Пържени плодове", "2,10", "200", ""],
["", "117przhena-yablka", "117.Пържена ябълка", "2,10", "200", ""],
["", "118przhen-ananas", "118.Пържен ананас", "2,10", "250", ""],
["", "119przhen-banan", "119.Пържен банан", "2,10", "200", ""],
["", "120przhen-sladoled", "120.Пържен сладолед", "2,10", "250", ""],
["", "122czedeno-mlyako-s-borovinki", "122.Цедено мляко с боровинки", "2,10", "200", ""]

            ]
        }', 
        'slug' => 'kitayski-restorant-lo-uay-lo-pleven',
        'business_name' => 'Китайски ресторант Ло Уай Ло',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5803',
        'address' => 'бул.Русе 31',
        'address_additional' => '',
        'coords_x' => '43.41210608',
        'coords_y' => '24.62643123',
        'phone' => '+359886580155',
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
            
            "Салати и разядки": [
                ["", "salata-zlatnata-skara", "Салата Златната скара", "6,30", "500", ""],
["", "czarski-urnabes", "Царски урнабес", "2,80", "300", ""],
["", "domati-shmerkeze", "Домати Шмеркезе", "2,80", "300", ""],
["", "klczana-lyutika", "Кълцана лютика", "2,80", "250", ""],
["", "pechena-piperka-s-kopr-i-chesn", "Печена пиперка с копър и чесън", "2,80", "250", ""],
["", "apetit-s-domati-i-lyuto-chushle", "Апетит с домати и люто чушле", "2,10", "250", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "250", ""],
["", "czarska-turshiya", "Царска туршия", "2,80", "300", ""],
["", "pukani-lyuti-chushki-s-kopr-i-chesn", "Пукани люти чушки с копър и чесън", "0,70", "", ""],
["", "srbska-salata", "Сръбска салата", "2,80", "350", ""],
["", "kapreze", "Капрезе", "4,20", "300", ""],
["", "czezar", "Цезар", "4,20", "350", ""],
["", "vitamina", "Витамина", "2,80", "300", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "300", ""],
["", "tuczana-salata", "Туцана салата", "2,80", "250", ""],
["", "zeleva-salata-s-morkovi", "Зелева салата с моркови", "2,80", "300", ""],
["", "tabietlijska-salata", "Табиетлийска салата", "3,50", "250", ""],
["", "klasicheska-snezhanka-s-presni-krastaviczi-i-orekhi", "Класическа Снежанка с пресни краставици и орехи", "2,80", "250", ""],
["", "kombinirana-salata", "Комбинирана салата", "2,80", "300", ""],
["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "350", ""]

            ],

            "starters": [
                ["", "shunka-po-moskovski", "Шунка по московски", "2,10", "150", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "250", ""],
["", "pileshki-khapki-v-kornflejks", "Пилешки хапки в корнфлейкс", "4,20", "250", ""],
["", "pileshki-khapki-v-susam", "Пилешки хапки в сусам", "4,20", "250", ""],
["", "sirencza-pane", "Сиренца пане", "4,20", "250", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "4,20", "250", ""],
["", "khrupkavi-topeni-sirencza-v-borovinki", "Хрупкави топени сиренца в боровинки", "4,20", "300", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "2,80", "300", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "3,50", "300", ""],
["", "domashno-izprzheni-kartofi", "Домашно изпържени картофи", "1,40", "200", ""],
["", "domashno-izprzheni-kartofi-ss-sirene", "Домашно изпържени картофи със сирене", "2,10", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "250", ""],
["", "chushka-byurek", "Чушка бюрек", "2,80", "", ""],
["", "rolcza-ot-raczi", "Ролца от раци", "2,80", "", ""],
["", "palachinka-s-pileshko-meso-zapechena-s-kashkaval", "Палачинка с пилешко месо запечена с кашкавал", "2,10", "200", ""]

            ],

            "specialties": [
                ["", "leskovatski-plamk-za-dvama", "Лесковатски пламък за двама", "16,80", "1000", ""],
["", "toplo-plato-miks", "Топло плато микс", "17,50", "1000", ""],
["", "meshano-meso-na-zhar", "Мешано месо на жар", "9,80", "500", ""],
["", "svinski-medalon", "Свински медальон", "6,30", "300", ""],
["", "pileshki-medalon", "Пилешки медальон", "6,30", "300", ""],
["", "pileshka-gondola", "Пилешка гондола", "4,20", "300", ""],
["", "muchkalicza", "Мучкалица", "4,20", "300", ""],
["", "teleshko-bon-file-na-zhar", "Телешко бон филе на жар", "12,60", "300", ""],
["", "pileshki-sach", "Пилешки сач", "10,50", "500", ""],
["", "svinski-sach", "Свински сач", "11,90", "500", ""],
["", "kombiniran-sach", "Комбиниран сач", "13,30", "550", ""]

            ],

            "Ястия от лесковатска кайма": [
                ["", "teleshko-kyufte", "Телешко кюфте", "1,40", "", ""],
["", "leskovatska-pleskavicza", "Лесковатска плескавица", "4,20", "300", ""],
["", "polovin-leskovatska-pleskavicza", "Половин лесковатска плескавица", "2,10", "150", ""],
["", "leskovatski-chebapcheta", "Лесковатски чебапчета", "2,10", "", ""],
["", "leskovatski-chebapcheta", "Лесковатски чебапчета", "4,20", "", ""],
["", "gurmanska-pleskavicza", "Гурманска плескавица", "4,20", "300", ""],
["", "polovin-gurmanska-pleskavicza", "Половин гурманска плескавица", "2,10", "150", ""],
["", "ushhipczi", "Ущипци", "2,10", "", ""],
["", "ushhipczi", "Ущипци", "4,90", "", ""],
["", "plnen-leskovachki-kebap", "Пълнен лесковачки кебап", "4,90", "300", ""],
["", "snya-na-devojkata", "Съня на девойката", "4,90", "350", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""]

            ],

            "Ястия в гювече": [
                ["", "pileshka-kavrma", "Пилешка кавърма", "4,20", "300", ""],
["", "kavrma-po-vodenicharski", "Кавърма по воденичарски", "4,90", "300", ""],
["", "kavrma-po-radomirski", "Кавърма по радомирски", "4,90", "300", ""],
["", "lovdzhinsko-gyuveche", "Ловджинско гювече", "4,20", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "4,20", "250", ""]

            ],

            "pan": [
                ["", "pile-rokfor", "Пиле Рокфор", "5,60", "300", ""],
["", "pile-ss-zadusheni-zelenchuczi", "Пиле със задушени зеленчуци", "4,90", "300", ""],
["", "pileshki-bon-filencza-v-soev-sos", "Пилешки бон филенца в соев сос", "4,20", "300", ""],
["", "pasarelski-kebap-s-pileshko-meso", "Пасарелски кебап с пилешко месо", "4,20", "300", ""],
["", "damski-kapriz", "Дамски каприз", "5,60", "400", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,20", "300", ""],
["", "pasarelski-kebap-ot-svinsko-meso", "Пасарелски кебап от свинско месо", "4,20", "300", ""]

            ],

            "Ястия от свинско месо": [
                ["", "rebra-na-zhar", "Ребра на жар", "4,90", "300", ""],
["", "svinsko-bon-file-na-zhar", "Свинско бон филе на жар", "7,70", "300", ""],
["", "svinska-vratna-przhola-na-zhar", "Свинска вратна пържола на жар", "4,90", "300", ""],
["", "svinski-kareta-na-zhar", "Свински карета на жар", "6,30", "300", ""],
["", "byala-veshalicza", "Бяла вешалица", "5,60", "300", ""],
["", "svinski-dzhob-na-zhar", "Свински джоб на жар", "6,30", "300", ""],
["", "stek-zlatna-skara-na-zhar", "Стек Златна скара на жар", "8,40", "350", ""],
["", "plnena-byala-veshalicza", "Пълнена бяла вешалица", "6,30", "350", ""],
["", "domashna-nadenicza", "Домашна наденица", "4,90", "300", ""],
["", "polovin-domashna-nadenicza", "Половин домашна наденица", "2,10", "150", ""],
["", "karadzhorzhevski-roladini", "Караджоржевски роладини", "8,40", "350", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "", ""],
["", "svinsko-shishche", "Свинско шишче", "4,90", "", ""],
["", "bekon-na-zhar", "Бекон на жар", "3,50", "200", ""],
["", "dzhigericza", "Джигерица", "3,50", "300", ""],
["", "svinski-vienski-shniczel-ot-bon-file-vrkhu-kanape-ot-domashni-kartofi", "Свински виенски шницел от бон филе върху канапе от домашни картофи", "7,00", "", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshka-przhola-na-zhar", "Пилешка пържола на жар", "3,50", "", ""],
["", "pileshki-dzhob", "Пилешки джоб", "4,90", "300", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "4,20", "", ""],
["", "pile-arzhentina", "Пиле Аржентина", "4,90", "300", ""],
["", "pileshki-krila-v-speczialna-marinata", "Пилешки крила в специална марината", "3,50", "300", ""],
["", "pileshki-vienski-shniczel", "Пилешки виенски шницел", "4,90", "400", ""]

            ],

            "Безместни ястия": [
                ["", "grafche-na-tafche", "Графче на тафче", "2,80", "300", ""],
["", "gbi-na-zhar", "Гъби на жар", "3,50", "200", ""],
["", "zelenchukova-palitra-na-zhar", "Зеленчукова палитра на жар", "5,60", "500", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "250", ""]

            ],

            "Табиетлийски гъдели": [
                ["", "pateshki-srcza-na-zhar", "Патешки сърца на жар", "5,60", "300", ""],
["", "pateshki-drobcheta", "Патешки дробчета", "3,50", "300", ""],
["", "teleshki-ezik-natyur", "Телешки език натюр", "5,60", "200", ""],
["", "teleshki-ezik-s-krave-maslcze-i-cherven-piper", "Телешки език с краве масълце и червен пипер", "5,60", "200", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "5,60", "250", ""],
["", "teleshki-suduzhuk-na-greben", "Телешки судужук на гребен", "4,20", "100", ""],
["", "plneni-gbi-na-zhar", "Пълнени гъби на жар", "3,50", "300", ""],
["", "khajdushko-meze", "Хайдушко мезе", "7,70", "450", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "3,50", "250", ""]

            ],

            "Подбрани мезета и сирена": [
                ["", "pryasno-sirene", "Прясно сирене", "0,70", "50", ""],
["", "krave-sirene", "Краве сирене", "0,70", "50", ""],
["", "bivolsko-sirene", "Биволско сирене", "0,70", "50", ""],
["", "koze-sirene", "Козе сирене", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "teleshka-pastrma", "Телешка пастърма", "2,10", "50", ""],
["", "teleshki-sudzhuk", "Телешки суджук", "2,10", "50", ""],
["", "teleshka-lukanka", "Телешка луканка", "2,10", "50", ""],
["", "vareno-yajcze", "Варено яйце", "0,00", "", ""]

            ],

            "Хляб и пърленки": [
                ["", "obiknovena-prlenka", "Обикновена пърленка", "0,70", "120", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "120", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "150", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "150", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "170", ""],
["", "prlenka-ss-zekhtin-i-rigan", "Пърленка със зехтин и риган", "0,70", "120", ""]

            ],

            "Гарнитури и сосове": [
                ["", "vareni-kartofi", "Варени картофи", "1,40", "250", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "250", ""],
["", "domashno-izprzheni-kartofi", "Домашно изпържени картофи", "1,40", "200", ""],
["", "domashno-izprzheni-kartofi-ss-sirene", "Домашно изпържени картофи със сирене", "1,40", "250", ""],
["", "przheni-pikantni-kartofi", "Пържени пикантни картофи", "1,40", "250", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "250", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "1,40", "200", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "2,10", "300", ""],
["", "bob-s-lyutenicza", "Боб с лютеница", "0,70", "200", ""],
["", "lyuto-chushle", "Люто чушле", "0,00", "", ""],
["", "gben-sos", "Гъбен сос", "1,40", "100", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "soev-sos", "Соев сос", "0,70", "100", ""],
["", "majoneza", "Майонеза", "0,70", "100", ""],
["", "ketchup", "Кетчуп", "0,70", "100", ""],
["", "chili-sos", "Чили сос", "0,70", "100", ""]

            ]
        }', 
        'slug' => 'zlatna-skara',
        'business_name' => 'Златна Скара',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Александър Стамболийски 6',
        'address_additional' => '',
        'coords_x' => '43.40739417',
        'coords_y' => '24.61587542',
        'phone' => '+359887604621',
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
                ["", "salata-violet", "Салата Виолет", "4,90", "350", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "selska-salata", "Селска салата", "3,50", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "350", ""],
["", "redena-salata", "Редена салата", "3,50", "350", ""],
["", "salata-sino-sirene", "Салата Синьо сирене", "4,90", "350", ""]

            ],

            "starters": [
                ["", "panirani-pileshki-khapki", "Панирани пилешки хапки", "4,20", "220", ""],
["", "panirani-khapki-ot-sirene", "Панирани хапки от сирене", "3,50", "220", ""],
["", "panirani-khapki-ot-topeno-sirene", "Панирани хапки от топено сирене", "4,20", "220", ""],
["", "panirani-khapki-ot-kashkaval", "Панирани хапки от кашкавал", "4,20", "220", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "220", ""],
["", "presni-gbki-v-maslo", "Пресни гъбки в масло", "2,10", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "230", ""],
["", "przheni-karotfi", "Пържени каротфи", "1,40", "250", ""],
["", "kartofi-po-selski", "Картофи по селски", "2,10", "200", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,90", "150", ""],
["", "skaridi-na-tigan", "Скариди на тиган", "8,40", "150", ""]

            ],

            "Брускети": [
                ["", "chorizo-filadelfiya-domat", "Чоризо, филаделфия, домат", "4,20", "", ""],
["", "moczarela-domat-bosilek", "Моцарела, домат, босилек", "4,20", "", ""],
["", "proshuto-rukola-domat", "Прошуто, рукола, домат", "4,90", "", ""],
["", "pushena-somga-filadelfiya-kapersi", "Пушена сьомга, филаделфия, каперси", "5,60", "", ""]

            ],

            "sandwiches": [
                ["", "klub-sandvich", "Клуб сандвич", "2,80", "400", ""],
["", "tortila-s-teleshka-kajma", "Тортила с телешка кайма", "3,50", "400", ""],
["", "teleshki-burger", "Телешки бургер", "4,20", "400", ""],
["", "sandvich-na-toster", "Сандвич на тостер", "2,10", "250", ""],
["", "tortila-s-pileshko", "Тортила с пилешко", "3,50", "400", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-pile", "Запеканка с пиле", "4,20", "400", ""],
["", "zapekanka-s-bekon", "Запеканка с бекон", "4,20", "400", ""],
["", "trio-sirena", "Трио сирена", "4,20", "400", ""]

            ],

            "pasta": [
                ["", "boloneze", "Болонезе", "4,90", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,90", "650", ""],
["", "kham", "Хам", "5,60", "650", ""],
["", "chorizo", "Чоризо", "5,60", "650", ""],
["", "polo", "Поло", "6,30", "750", ""],
["", "tijn", "Тийн", "6,30", "750", ""],
["", "formadzhi", "Формаджи", "6,30", "700", ""],
["", "trite-prasencza", "Трите прасенца", "6,30", "800", ""],
["", "picza-violet", "Пица Виолет", "5,60", "700", ""]

            ],

            "Добавка за пица": [
                ["", "dobavka-yajcze", "Добавка Яйце", "0,00", "", ""],
["", "dobavka-presni-gbi", "Добавка Пресни гъби", "0,00", "", ""],
["", "dobavka-maslini", "Добавка Маслини", "0,00", "", ""],
["", "dobavka-czarevicza", "Добавка Царевица", "0,00", "", ""],
["", "dobavka-kiseli-krastavichki", "Добавка Кисели краставички", "0,00", "", ""],
["", "dobavka-chushka", "Добавка Чушка", "0,00", "", ""],
["", "dobavka-pechena-chushka", "Добавка Печена чушка", "0,00", "", ""],
["", "dobavka-sirene", "Добавка Сирене", "0,70", "", ""],
["", "dobavka-kashkaval", "Добавка Кашкавал", "0,70", "", ""],
["", "dobavka-moczarela", "Добавка Моцарела", "0,70", "", ""],
["", "dobavka-topeno-sirene", "Добавка Топено сирене", "0,70", "", ""],
["", "dobavka-lukanka", "Добавка Луканка", "0,70", "", ""],
["", "dobavka-bekon", "Добавка Бекон", "0,70", "", ""]

            ],

            "maindishes": [
                ["", "violet-kscheta", "Виолет късчета", "4,20", "350", ""],
["", "pileshki-zhulieni-ss-sos-4-sirena", "Пилешки жулиени със сос 4 сирена", "4,90", "350", ""],
["", "svinski-dzholan-s-pechen-sos", "Свински джолан с печен сос", "5,60", "450", ""],
["", "svinski-rebrcza", "Свински ребърца", "7,00", "450", ""],
["", "kyufteta-na-skara-3br--", "Кюфтета на скара (3бр -", "4,20", "400", ""]

            ],

            "Основни на плоча": [
                ["", "pileshko-file", "Пилешко филе", "4,90", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "250", ""],
["", "svinski-vrat-i-sos-bbq", "Свински врат и сос BBQ", "4,90", "280", ""],
["", "zelenchuczi-na-plocha", "Зеленчуци на плоча", "2,80", "350", ""]

            ],

            "garnish": [
                ["", "zelenchuczi", "Зеленчуци", "0,70", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "kartofi-po-selski", "Картофи по селски", "0,70", "100", ""],
["", "kartofi-sote", "Картофи соте", "0,70", "100", ""],
["", "domashna-lyutenicza", "Домашна лютеница", "0,70", "100", ""]

            ],

            "Хляб и пърленки": [
                ["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "dry-appetizer": [
                ["", "sirene", "Сирене", "1,40", "100", ""],
["", "kashkaval", "Кашкавал", "2,80", "100", ""],
["", "sudzhuk", "Суджук", "3,50", "100", ""],
["", "pastrma", "Пастърма", "4,20", "100", ""],
["", "file-elena", "Филе Елена", "4,20", "100", ""],
["", "lukanka", "Луканка", "3,50", "100", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,10", "200", ""],
["", "gofreta-s-shokolad", "Гофрета с шоколад", "2,10", "120", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "150", ""],
["", "czedeno-kiselo-mlyako", "Цедено кисело мляко", "1,40", "150", ""]

            ],

            "drinks": [
                ["", "red-bull", "Red Bull", "2,10", "250", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1097384.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1097385.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1097386.jpg?width=302"]

            ]
        }', 
        'slug' => 'violet-caffe-bar',
        'business_name' => 'Violet Caffe Bar',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'кв. Мара Денчева бл.20',
        'address_additional' => '',
        'coords_x' => '43.40028518',
        'coords_y' => '24.62282876',
        'phone' => '+359878154888',
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
                ["", "tuna", "Туна", "5,60", "300", ""],
["", "kapreze-s-avokado", "Капрезе с авокадо", "6,30", "350", ""],
["", "czezar", "Цезар", "6,30", "300", ""],
["", "koze-sirene", "Козе сирене", "6,30", "300", ""],
["", "salata-klasika", "Салата Класика", "4,90", "300", ""],
["", "salata-s-bejbi-spanak", "Салата с бейби спанак", "6,30", "350", ""],
["", "salata-s-morski-darove", "Салата с морски дарове", "6,30", "300", ""]

            ],

            "starters": [
                ["", "kalmari-po-grczki", "Калмари по гръцки", "9,10", "250", ""],
["", "skaridi-s-maslo-kopr-i-chesn", "Скариди с масло, копър и чесън", "9,80", "200", ""],
["", "kalmari-na-gril", "Калмари на грил", "9,10", "250", ""],
["", "plnen-kalmar-ss-sirene-susheni-domati-i-chesn", "Пълнен калмар със сирене, сушени домати и чесън", "9,10", "250", ""],
["", "oktopod-na-gril-s-pechen-kartof-i-bosilekovo-pesto", "Октопод на грил с печен картоф и босилеково песто", "12,60", "300", ""],
["", "brusketi-s-pushena-somga-filadelfiya-i-kapersi", "Брускети с пушена сьомга, Филаделфия и каперси", "8,40", "", ""],
["", "brusketi-s-proshuto-salatena-moczarela-susheni-domati-i-bosilekovo-pesto", "Брускети с прошуто, салатена моцарела, сушени домати и босилеково песто", "7,00", "", ""],
["", "brusketi-s-filadelfiya-avokado-cheri-domati-i-bosilekovo-pesto", "Брускети с Филаделфия, авокадо, чери домати и босилеково песто", "6,30", "", ""],
["", "pileshki-khapki-v-kornflejks-s-chesnov-sos", "Пилешки хапки в корнфлейкс с чеснов сос", "4,90", "250", ""],
["", "khrupkavi-pileshki-krilcza-s-bbq-sos", "Хрупкави пилешки крилца с BBQ сос", "4,90", "300", ""],
["", "przhen-chips-ot-kartofi-s-chesnov-sos", "Пържен чипс от картофи с чеснов сос", "2,80", "300", ""],
["", "zapecheno-koze-sirene-s-proshuto-med-i-orekhi", "Запечено козе сирене с прошуто, мед и орехи", "6,30", "200", ""],
["", "miks-maslini", "Микс маслини", "4,20", "200", ""],
["", "plato-mezeta", "Плато мезета", "7,00", "150", ""],
["", "plato-sirena", "Плато сирена", "7,00", "200", ""]

            ],

            "Основни ястия": [
                ["", "file-ot-somga-na-gril-ss-sos-ajoli-garnitura-po-izbor", "Филе от сьомга на грил със сос айоли, гарнитура по избор", "11,90", "350", ""],
["", "svinski-stekcheta-s-ajvar", "Свински стекчета с айвар", "7,00", "400", ""],
["", "miks-gril", "Микс грил", "15,40", "750", ""],
["", "pileshko-bonfile-s-teriyaki-sos-plyus-garnitura-po-izbor", "Пилешко бонфиле с терияки сос, плюс гарнитура по избор", "7,00", "400", ""],
["", "teleshki-kyuftencza-s-ajvar-plyus-garnitura-po-izbor", "Телешки кюфтенца с айвар, плюс гарнитура по избор", "7,70", "400", ""],
["", "teleshki-burger-s-chedr-luk-domati-i-parmezanov-chips", "Телешки бургер с чедър, лук, домати и пармезанов чипс", "6,30", "400", ""]

            ],

            "garnish": [
                ["", "domat", "Домат", "2,10", "120", ""],
["", "krastavicza", "Краставица", "2,10", "120", ""],
["", "zelena-salata", "Зелена салата", "2,10", "120", ""],
["", "pechen-kartof", "Печен картоф", "2,10", "120", ""],
["", "oriz", "Ориз", "2,10", "120", ""]

            ],

            "pizza": [
                ["", "picza-napravi-si-sam", "Пица Направи си сам", "7,70", "400", ""],
["", "margarita", "Маргарита", "4,90", "400", ""],
["", "picza-kapreze", "Пица Капрезе", "6,30", "400", ""],
["", "chikn", "Чикън", "6,30", "400", ""],
["", "chetiri-sirena", "Четири сирена", "6,30", "400", ""],
["", "momento", "Моменто", "7,00", "400", ""],
["", "vegetariana", "Вегетариана", "5,60", "400", ""],
["", "peperoni", "Пеперони", "6,30", "400", ""],
["", "proshuto", "Прошуто", "7,00", "400", ""],
["", "kalczone---zatvorena", "Калцоне - затворена", "6,30", "400", ""],
["", "salami", "Салами", "7,00", "400", ""],
["", "tryufel", "Трюфел", "7,00", "400", ""],
["", "kham", "Хам", "6,30", "400", ""],
["", "tursko-khlebche-ss-susam", "Турско хлебче със сусам", "2,10", "200", ""],
["", "khlebche-ss-zekhtin", "Хлебче със зехтин", "2,10", "200", ""],
["", "khlebche-s-moczarela", "Хлебче с моцарела", "2,10", "200", ""],
["", "khlebche-s-chesn", "Хлебче с чесън", "2,10", "200", ""]

            ],

            "Паста и ризото": [
                ["", "taliateli-s-pileshko-file-spanak-smetana-i-parmezan", "Талиатели с пилешко филе, спанак, сметана и пармезан", "4,90", "350", ""],
["", "taliateli-s-manatarki-tryufel-pasta-i-parmezan", "Талиатели с манатарки, трюфел паста и пармезан", "4,90", "350", ""],
["", "taliateli-s-morski-darove-susheni-domati-bosilkovo-pesto", "Талиатели с морски дарове, сушени домати, босилково песто", "7,00", "350", ""],
["", "taliateli-ss-somga-kapersi-smetana-parmezan", "Талиатели със сьомга, каперси, сметана, пармезан", "7,00", "350", ""],
["", "rizoto-s-pile-i-parmezan", "Ризото с пиле и пармезан", "4,90", "350", ""],
["", "rizoto-s-manatarki-i-pechurki", "Ризото с манатарки и печурки", "4,90", "350", ""],
["", "rizoto-s-morski-darove-susheni-domati-bosilekovo-pesto", "Ризото с морски дарове, сушени домати, босилеково песто", "7,00", "350", ""],
["", "rizoto-ss-somga-tikvichki-kapersi-parmezan", "Ризото със сьомга, тиквички, каперси, пармезан", "7,00", "350", ""]

            ]
        }', 
        'slug' => 'momento-bar',
        'business_name' => 'Momento bar &amp; pizza',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'пл. Свободата 9',
        'address_additional' => '',
        'coords_x' => '43.40927906',
        'coords_y' => '24.61852892',
        'phone' => '+359878312031',
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
                ["", "shopska", "Шопска", "3,50", "350", ""],
["", "ovcharska", "Овчарска", "4,20", "400", ""],
["", "selska", "Селска", "3,50", "350", ""],
["", "snezhanka", "Снежанка", "3,50", "200", ""],
["", "katk", "Катък", "3,50", "200", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "zele-i-morkovi", "Зеле и моркови", "3,50", "250", ""],
["", "salata-pecheni-chushki", "Салата печени чушки", "3,50", "250", ""],
["", "chushle", "Чушле", "0,00", "", ""]

            ],

            "Топли предястия и разядки": [
                ["", "kashkaval-pane", "Кашкавал пане", "4,20", "200", ""],
["", "khrupkavi-pileshki-filencza", "Хрупкави пилешки филенца", "4,90", "250", ""],
["", "ezik-pane", "Език пане", "7,70", "200", ""],
["", "ezik-v-maslo", "Език в масло", "7,00", "150", ""],
["", "topeni-sirencza-pane", "Топени сиренца пане", "4,20", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "180", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "180", ""],
["", "drobcheta-s-luk", "Дробчета с лук", "3,50", "250", ""],
["", "drobcheta-s-gbi-i-kashkaval", "Дробчета с гъби и кашкавал", "4,20", "300", ""],
["", "drobcheta-za-priyateli", "Дробчета за приятели", "4,20", "300", ""],
["", "gbi-v-maslo", "Гъби в масло", "4,20", "200", ""],
["", "kachamak", "Качамак", "4,20", "300", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,90", "250", ""]

            ],

            "Пица на пещ": [
                ["", "venecziya", "Венеция", "4,90", "600", ""],
["", "gracziya", "Грация", "4,20", "550", ""],
["", "miks", "Микс", "6,30", "700", ""],
["", "chetiri-sirena", "Четири сирена", "4,90", "600", ""],
["", "kaprichoza", "Капричоза", "4,90", "650", ""],
["", "nadya", "Надя", "4,90", "550", ""],
["", "riba-ton", "Риба тон", "4,90", "550", ""],
["", "daliya", "Далия", "4,20", "600", ""],
["", "torino", "Торино", "4,20", "550", ""],
["", "vegetariana", "Вегетариана", "4,20", "600", ""]

            ],

            "Ястия в гювече": [
                ["", "sirene-po-shopski", "Сирене по Шопски", "4,20", "250", ""],
["", "chorbadzhijsko-gyuveche", "Чорбаджийско гювече", "4,90", "300", ""],
["", "kavrma-ot-svinsko-meso", "Кавърма от свинско месо", "5,60", "300", ""],
["", "kavrma-ot-pileshko-meso", "Кавърма от пилешко месо", "5,60", "300", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "2,10", "350", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "350", ""],
["", "tarator", "Таратор", "1,40", "350", ""]

            ],

            "Ястия от пилешко": [
                ["", "pile-arzhentina", "Пиле Аржентина", "6,30", "300", ""],
["", "pile-riviera", "Пиле Ривиера", "6,30", "300", ""],
["", "pileshki-kareta-s-kashkaval", "Пилешки карета с кашкавал", "5,60", "300", ""]

            ],

            "Ястия от свинско": [
                ["", "dzholan-bez-kost-s-garnitura", "Джолан без кост с гарнитура", "7,70", "500", ""],
["", "drusan-kebap", "Друсан кебап", "5,60", "250", ""],
["", "svinski-drob-przhen-s-luk", "Свински дроб пържен с лук", "4,20", "250", ""]

            ],

            "grill": [
                ["", "svinski-shashlik", "Свински шашлик", "5,60", "250", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "5,60", "250", ""],
["", "srbska-pleskavicza-plnena", "Сръбска плескавица пълнена", "4,90", "250", ""],
["", "srbska-pleskavicza", "Сръбска плескавица", "4,20", "200", ""],
["", "srbski-kebapcheta", "Сръбски кебапчета", "4,20", "200", ""],
["", "svinski-rebrcza", "Свински ребърца", "5,60", "250", ""],
["", "nevrozno-kyufte", "Неврозно кюфте", "1,40", "100", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "karnache", "Карначе", "4,20", "180", ""],
["", "nadenicza-orekha", "Наденица Ореха", "4,20", "180", ""],
["", "svinski-cherva-na-skara", "Свински черва на скара", "4,20", "250", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "4,90", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "pileshka-przhola-butche", "Пилешка пържола бутче", "4,20", "200", ""],
["", "svinski-kareta", "Свински карета", "5,60", "180", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "3,50", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "200", ""],
["", "mezeto-na-kompaniyata", "Мезето на компанията", "34,30", "", ""]

            ],

            "fish": [
                ["", "skumriya-na-skara", "Скумрия на скара", "6,30", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "8,40", "300", ""]

            ],

            "sauces": [
                ["", "gben", "Гъбен", "1,40", "150", ""],
["", "chesnov", "Чеснов", "0,70", "80", ""],
["", "soev-sos", "Соев сос", "0,70", "40", ""],
["", "apetit", "Апетит", "1,40", "200", ""]

            ],

            "dry-appetizer": [
                ["", "sudzhuk", "Суджук", "2,10", "50", ""],
["", "lukanka", "Луканка", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "3,50", "50", ""],
["", "sirene-natyur", "Сирене натюр", "2,10", "50", ""]

            ],

            "desserts": [
                ["", "czedeno-mlyako", "Цедено мляко", "2,10", "200", ""],
["", "palachinka", "Палачинка", "1,40", "200", ""]

            ],

            "garnish": [
                ["", "meshana", "Мешана", "2,10", "150", ""],
["", "bob-s-lyutenicza", "Боб с лютеница", "1,40", "120", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "120", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "150", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "zele-i-morkovi", "Зеле и моркови", "1,40", "150", ""]

            ],

            "bread": [
                ["", "prlenka-orekha", "Пърленка Ореха", "0,70", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "120", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "180", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "180", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "200", ""]

            ],

            "drinks": [
                ["", "trapezna-voda", "Трапезна вода", "0,70", "500", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/837755.jpg?width=302"]

            ],

            "beer": [
                ["", "shumensko", "Шуменско", "2,10", "500", ""]

            ]
        }', 
        'slug' => 'mehana-blgari-pleven',
        'business_name' => 'Механа Българи (Плевен)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Дойран 63А',
        'address_additional' => '',
        'coords_x' => '43.4102281',
        'coords_y' => '24.616198',
        'phone' => '+359878922547',
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
                ["", "zelenchukova-bistra-supa-miks", "Зеленчукова бистра супа микс", "1,40", "350", ""],
["", "krem-supa-ot-chervena-leshha", "Крем супа от червена леща", "2,10", "350", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "2,10", "350", ""],
["", "grakhova-krem-supa-s-menta", "Грахова крем супа с мента", "2,10", "350", ""],
["", "vegetarianska-shkembe-chorba", "Вегетарианска Шкембе чорба", "2,10", "350", "https://images.deliveryhero.io/image/fd-bg/Products/599706.jpg?width=302"],
["", "eldena-supa-popaj", "Елдена супа Попай", "2,10", "350", ""],
["", "krem-supa-verde", "Крем Супа Верде", "2,10", "350", ""]

            ],

            "Пица меню": [
                ["", "selska-picza", "Селска пица", "6,30", "", ""],
["", "aromatna-picza", "Ароматна пица", "6,30", "", ""],
["", "byal-khavaj", "Бял Хавай", "5,60", "", ""],
["", "verde", "Верде", "6,30", "", ""],
["", "picza-margarita", "Пица Маргарита", "4,20", "", ""],
["", "kapreze", "Капрезе", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/532722.jpg?width=302"],
["", "meksikana", "Мексикана", "6,30", "", ""],
["", "patladzhano", "Патладжано", "6,30", "", ""],
["", "picza-detstvo-moe", "Пица Детство мое", "6,30", "", ""],
["", "picza-ali-baba", "Пица Али Баба", "6,30", "", ""]

            ],

            "additives": [
                ["", "kiseli-krastavichki", "Кисели краставички", "0,00", "", ""],
["", "czarevicza", "Царевица", "0,00", "", ""],
["", "cherven-bob", "Червен боб", "0,00", "", ""],
["", "grakh", "Грах", "0,00", "", ""],
["", "maslini", "Маслини", "0,00", "", ""],
["", "gbi", "Гъби", "0,00", "", ""],
["", "moczarela", "Моцарела", "1,40", "", ""],
["", "parmezan", "Пармезан", "1,40", "", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "", ""],
["", "sirene-bri", "Сирене Бри", "1,40", "", ""],
["", "krave-sirene", "Краве сирене", "0,70", "", ""],
["", "avokado", "Авокадо", "0,70", "", ""],
["", "yajcze", "Яйце", "0,00", "", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "vitamina", "Витамина", "2,80", "300", "https://images.deliveryhero.io/image/fd-bg/Products/532742.jpg?width=302"],
["", "morkovena-salata-orient", "Морковена салата Ориент", "2,10", "300", ""],
["", "salata-kapriz", "Салата Каприз", "4,20", "400", ""],
["", "salata-zhelyaznata-lejdi", "Салата  Желязната Лейди", "4,20", "350", ""],
["", "tabule-arabiya", "Табуле Арабия", "3,50", "300", ""],
["", "salata-za-shampioni", "Салата за Шампиони", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/532747.jpg?width=302"],
["", "salata-el-toro", "Салата Ел Торо", "4,20", "400", ""],
["", "salata-mung-dal", "Салата Мунг дал", "3,50", "400", ""],
["", "salata-domatino", "Салата Доматино", "4,20", "350", ""]

            ],

            "Хлебчета": [
                ["", "chapati", "Чапати", "0,70", "", ""],
["", "khlebche-tip-kalczone-s-maslini-domat", "Хлебче тип Калцоне с маслини, домат", "1,40", "", ""],
["", "khlebche-tip-kalczone-s-kartofi-i-podpravki", "Хлебче тип калцоне с картофи и подправки", "1,40", "", ""],
["", "khlebche-tip-kalczone-s-kartof-domat-i-maslini", "Хлебче тип калцоне с картоф, домат и маслини", "2,10", "", ""],
["", "khlebche-tip-kalczone-s-kartofi-i-kashkaval", "Хлебче тип Калцоне с картофи и кашкавал", "2,10", "", ""],
["", "khlebche-tip-kalczone-s-kashkaval-i-sirene", "Хлебче тип Калцоне с кашкавал и сирене", "2,10", "", ""],
["", "khlebche-tip-kalczone-s-maslini-i-sirene", "Хлебче тип Калцоне с маслини и сирене", "2,10", "", ""],
["", "khlebche-tip-kalczone-s-gbi-luk-i-kashkaval", "Хлебче тип Калцоне с гъби, лук и кашкавал", "2,10", "", ""],
["", "khlebche-tip-kalczone-ss-sotiran-spanak-sirena-i-kashkaval", "Хлебче тип Калцоне със сотиран спанак, сирена и кашкавал", "2,10", "", ""],
["", "kesadiya-s-presen-domat-i-sirene", "Кесадия с пресен домат и сирене", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/532763.jpg?width=302"],
["", "kesadiya-ss-zadushen-spanak-i-sirena", "Кесадия със задушен спанак и сирена", "2,80", "", ""],
["", "kesadiya-s-meksikanska-plnka-i-sirena", "Кесадия с мексиканска плънка и сирена", "2,80", "", ""],
["", "meksikanska-enchilada", "Мексиканска Енчилада", "4,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/532761.jpg?width=302"],
["", "vegetarianski-dyuner", "Вегетариански дюнер", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/532762.jpg?width=302"],
["", "yajchen-dyuner", "Яйчен дюнер", "3,50", "", ""]

            ],

            "Деликатесни разядки": [
                ["", "klasicheski-khumus", "Класически хумус", "2,10", "150", ""],
["", "khumus-s-maslina", "Хумус с маслина", "2,10", "150", ""],
["", "khumus-s-morkov", "Хумус с морков", "2,10", "150", ""],
["", "khumus-s-chushka-i-kri", "Хумус с чушка и къри", "2,10", "150", ""],
["", "khumus-s-pesto", "Хумус с песто", "2,10", "150", ""],
["", "khumus-s-patladzhan", "Хумус  с патладжан", "2,10", "150", ""],
["", "czveten-khumus--plnozrnesta-prlenka-s-kvas", "Цветен хумус + пълнозърнеста пърленка с квас", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/532772.jpg?width=302"],
["", "yajchena-razyadka", "Яйчена разядка", "3,50", "", ""]

            ],

            "Вегетариански кюфтенца": [
                ["", "czvetni-kyuftencza-s-kashkaval-i-sino-sirene", "Цветни кюфтенца с кашкавал и синьо сирене", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/532776.jpg?width=302"],
["", "kartofeni-kyuftencza", "Картофени кюфтенца", "3,50", "", ""],
["", "kyuftenczata-na-popaj", "Кюфтенцата на Попай", "3,50", "", ""],
["", "oblachno-s-kyufteta", "Облачно с кюфтета", "3,50", "350", ""],
["", "falafeli-s-beshamelov-sos", "Фалафели с бешамелов сос", "4,20", "400", ""],
["", "falafeli-ss-zadushen-spanak-i-oriz-basmati", "Фалафели със задушен спанак и ориз Басмати", "4,20", "400", ""],
["", "falafeli", "Фалафели", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/928849.jpg?width=302"],
["", "falafel-kesadiya", "Фалафел кесадия", "4,20", "", ""]

            ],

            "Основни специалитети": [
                ["", "domashen-mish-mash", "Домашен миш-маш", "3,50", "400", ""],
["", "ratatuj", "Рататуй", "4,20", "", ""],
["", "rizoto-moto", "Ризото Мото", "4,20", "400", ""],
["", "bezglutenovo-eldeno-rizoto", "Безглутеново Елдено Ризото", "4,20", "400", ""],
["", "polenta-po-italianski", "Полента по Италиански", "4,20", "400", ""],
["", "chervena-leshha", "Червена леща", "3,50", "400", ""],
["", "aziatsko-kri", "Азиатско къри", "4,90", "400", ""],
["", "kri-yazh-i-tichaj", "Къри Яж и Тичай", "3,50", "400", ""],
["", "brokoli-formadzhi", "Броколи Формаджи", "4,90", "370", ""],
["", "brokoli-khummus-khaus", "Броколи Хуммус Хаус", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/532791.jpg?width=302"],
["", "aromatni-kartofi-sote", "Ароматни картофи соте", "2,80", "350", ""],
["", "polenta-ala-provans", "Полента ала Прованс", "4,20", "400", ""]

            ],

            "Паста меню": [
                ["", "spageti-po-aziatski", "Спагети по азиатски", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/532799.jpg?width=302"],
["", "spageti-don-domat", "Спагети Дон Домат", "4,20", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,20", "400", ""],
["", "spageti-verde", "Спагети Верде", "4,20", "400", ""]

            ],

            "Яйчени деликатеси": [
                ["", "yajcza-po-panagyurski", "Яйца по Панагюрски", "2,80", "", ""],
["", "omlet-asorti", "Омлет Асорти", "2,80", "", ""],
["", "omlet-dzhuli", "Омлет Джули", "2,80", "", ""],
["", "omlet-kombo", "Омлет Комбо", "2,80", "", ""]

            ],

            "Панирани деликатеси": [
                ["", "shniczel-ot-gba-kladnicza", "Шницел от гъба кладница", "4,90", "250", ""],
["", "pakori", "Пакори", "4,20", "250", ""],
["", "panirani-brokoli", "Панирани броколи", "4,20", "300", ""],
["", "przheni-kartofki", "Пържени картофки", "1,40", "250", ""],
["", "przheni-kartofki-ss-sirene", "Пържени картофки със сирене", "2,10", "250", ""]

            ],

            "desserts": [
                ["", "domashen-snikrs", "Домашен сникърс", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/599715.jpg?width=302"],
["", "byal-shokolad-snikrs", "Бял шоколад сникърс", "0,70", "", ""],
["", "plneni-banani-s-takhan-stafidi-i-cheren-shokolad", "Пълнени банани с тахан, стафиди и черен шоколад", "1,40", "", ""],
["", "flap-dzhak", "Флап Джак", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/599718.jpg?width=302"],
["", "ladu", "Ладу", "0,70", "", ""],
["", "desert-lady-fingers", "Десерт Lady Fingers", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/946900.jpg?width=302"],
["", "bonboni-afrodita", "Бонбони Афродита", "0,70", "", ""],
["", "vegan-surova-shokoladova-torta-s-3-vida-yadki-brain-storm", "Веган, сурова шоколадова торта с 3 вида ядки Brain Storm", "3,50", "", ""],
["", "energijni-susamki", "Енергийни сусамки", "0,70", "", ""],
["", "kokosovi-bonboni", "Кокосови бонбони", "0,70", "", ""],
["", "arabski-tryufeli", "Арабски трюфели", "0,70", "", ""],
["", "oreo-mini-sandvich", "Oрео мини сандвич", "0,70", "", ""]

            ],

            "sauces": [
                ["", "mlechno-chesnov-sos", "Млечно-чеснов сос", "0,00", "50", ""],
["", "domateno-sosche", "Доматено сосче", "0,00", "50", ""],
["", "mlechen-sos-s-khryan", "Млечен сос с хрян", "0,00", "50", ""],
["", "mlechen-sos-ss-susamov-takhan", "Млечен сос със сусамов тахан", "0,00", "50", ""],
["", "lyutiv-sos", "Лютив сос", "0,00", "50", ""],
["", "takhini-mus", "Тахини мус", "0,00", "50", ""],
["", "sos-medena-gorchicza", "Сос Медена горчица", "0,00", "50", ""]

            ]
        }', 
        'slug' => 'humus-haus',
        'business_name' => 'Хумус Хаус',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Христо Ботев 48',
        'address_additional' => '',
        'coords_x' => '43.41096408',
        'coords_y' => '24.62638075',
        'phone' => '+359877670170',
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
                ["", "domati-i-krastaviczi", "Домати и краставици", "1,40", "300", ""],
["", "zeleva-salata", "Зелева салата", "0,70", "200", ""],
["", "kartofena-salata", "Картофена салата", "0,70", "200", ""]

            ],

            "soups": [
                ["", "supa-pile", "Супа пиле", "0,70", "400", ""],
["", "tarator", "Таратор", "0,70", "", ""]

            ],

            "Основни ястия": [
                ["", "bob-yakhniya", "Боб яхния", "1,40", "", ""],
["", "bob-s-przheni-kyufteta", "Боб с пържени кюфтета", "2,10", "", ""],
["", "chushki-s-kajma", "Чушки с кайма", "2,80", "", ""],
["", "chushki-s-oriz", "Чушки с ориз", "2,10", "", ""],
["", "pile-s-oriz", "Пиле с ориз", "2,10", "", ""],
["", "pile-kasha", "Пиле каша", "2,10", "", ""],
["", "svinski-vinen-kebap", "Свински винен кебап", "2,80", "", ""]

            ],

            "Скара и пържени": [
                ["", "pileshko-file-na-skara-i-garnitura-po-izbor", "Пилешко филе на скара и гарнитура по избор", "2,10", "", ""],
["", "przheni-kyufteta-s-krastaviczi-i-domati", "Пържени кюфтета с краставици и домати", "2,10", "", ""],
["", "kebapcheta-na-skara-i-zeleva-salata", "Кебапчета на скара и зелева салата", "2,80", "", ""],
["", "kyufteta-na-skara-i-zeleva-salata", "Кюфтета на скара и зелева салата", "2,80", "", ""],
["", "pikantni-kyufteta-ss-salata-domati-i-krastavicza", "Пикантни кюфтета със салата домати и краставица", "2,10", "", ""],
["", "gril-nadenichki-s-kartofena-salata", "Грил наденички с картофена салата", "2,10", "", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,70", "100", ""]

            ]
        }', 
        'slug' => 'razkosh-hrana-za-doma',
        'business_name' => 'Разкош храна за дома',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5809',
        'address' => 'ул. Георги Кочев 39',
        'address_additional' => '',
        'coords_x' => '43.4155775',
        'coords_y' => '24.6269052',
        'phone' => '+359878646423',
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
                ["", "domashni-przheni-filijki", "Домашни пържени филийки", "2,80", "300", "https://images.deliveryhero.io/image/fd-bg/Products/637350.jpg?width=302"],
["", "omlet-ss-zelenchuczi", "Омлет със зеленчуци", "2,80", "300", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "3,50", "250", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "3,50", "250", ""],
["", "omlet-asorti", "Омлет асорти", "3,50", "300", ""],
["", "yajcza-benedikt", "Яйца Бенедикт", "3,50", "300", "https://images.deliveryhero.io/image/fd-bg/Products/637355.jpg?width=302"],
["", "anglijska-zakuska", "Английска закуска", "4,20", "450", "https://images.deliveryhero.io/image/fd-bg/Products/637356.jpg?width=302"]

            ],

            "salads": [
                ["", "grczka-salata", "Гръцка салата", "4,20", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/637361.jpg?width=302"],
["", "kapreze", "Капрезе", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/637362.jpg?width=302"],
["", "czezar", "Цезар", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/637363.jpg?width=302"]

            ],

            "appetizer": [
                ["", "brusketi-s-yajcze-i-bekon", "Брускети с яйце и бекон", "3,50", "250", "https://images.deliveryhero.io/image/fd-bg/Products/637370.jpg?width=302"],
["", "brusketi-s-proshuto-i-moczarela", "Брускети с прошуто и моцарела", "4,90", "250", "https://images.deliveryhero.io/image/fd-bg/Products/637372.jpg?width=302"],
["", "khrupkavi-topeni-sirencza", "Хрупкави топени сиренца", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/637374.jpg?width=302"]

            ],

            "Паста и Ризото": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "400", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "400", ""],
["", "rizoto-s-pile-i-spanak", "Ризото с пиле и спанак", "4,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/637394.jpg?width=302"],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,20", "400", ""],
["", "taliateli-s-gbi", "Талиатели с гъби", "4,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/649790.jpg?width=302"],
["", "taliateli-s-pile", "Талиатели с пиле", "4,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/637398.jpg?width=302"],
["", "rizoto-s-manatarki", "Ризото с манатарки", "5,60", "400", "https://images.deliveryhero.io/image/fd-bg/Products/706498.jpg?width=302"],
["", "taliateli-ss-sirena", "Талиатели със сирена", "4,90", "400", ""]

            ],

            "Принцеси": [
                ["", "princzesi-s-yajcze-i-kashkaval", "Принцеси с яйце и кашкавал", "2,80", "250", ""],
["", "domashni-princzesi", "Домашни принцеси", "2,80", "250", "https://images.deliveryhero.io/image/fd-bg/Products/637347.jpg?width=302"],
["", "princzesi-s-shunka-i-kashkaval", "Принцеси с шунка и кашкавал", "2,80", "250", "https://images.deliveryhero.io/image/fd-bg/Products/637348.jpg?width=302"],
["", "princzesi-s-kajma-i-kashkaval", "Принцеси с кайма и кашкавал", "2,80", "250", ""]

            ],

            "others": [
                ["", "pileshki-burger-s-chedr-i-przheni-kartofi", "Пилешки бургер с чедър и пържени картофи", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/637438.jpg?width=302"],
["", "teleshki-burger-s-bekon-i-przheni-kartofi", "Телешки бургер с бекон и пържени картофи", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/637439.jpg?width=302"],
["", "pileshko-file-na-plocha", "Пилешко филе на плоча", "4,20", "220", ""],
["", "pileshki-filencza-ss-smetanov-sos", "Пилешки филенца със сметанов сос", "5,60", "400", "https://images.deliveryhero.io/image/fd-bg/Products/637444.jpg?width=302"],
["", "tortila", "Тортила", "4,20", "300", ""],
["", "svinsko-s-manatarki", "Свинско с манатарки", "8,40", "350", ""],
["", "tortila-s-pile-kornflejks", "Тортила с пиле корнфлейкс", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/706500.jpg?width=302"]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "110", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "150", "https://images.deliveryhero.io/image/fd-bg/Products/637414.jpg?width=302"],
["", "chijzkejk", "Чийзкейк", "2,10", "180", ""]

            ],

            "additives": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "zadushen-oriz", "Задушен ориз", "0,70", "150", ""],
["", "domati", "Домати", "0,70", "150", ""],
["", "krastaviczi", "Краставици", "0,70", "150", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "200", ""],
["", "zapecheni-zelenchuczi", "Запечени зеленчуци", "2,10", "250", ""],
["", "filiya-khlyab-s-kvas", "Филия хляб с квас", "0,00", "", ""],
["", "mlechno-chesnov-sos", "Млечно чеснов сос", "0,70", "", ""],
["", "chili-sos", "Чили сос", "0,70", "", ""],
["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/917188.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/917189.jpg?width=302"]

            ]
        }', 
        'slug' => 'corner-pleven',
        'business_name' => 'Corner (Плевен)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5803',
        'address' => 'ул. Христо Ботев 68',
        'address_additional' => '',
        'coords_x' => '43.4101623',
        'coords_y' => '24.6260297',
        'phone' => '+359878744648',
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
                ["", "sasso", "Sasso", "4,20", "200", ""],
["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "300", ""],
["", "kapreze", "Капрезе", "4,20", "280", ""],
["", "snezhanka", "Снежанка", "2,80", "250", ""],
["", "czezar", "Цезар", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/511773.JPG?width=302"],
["", "tuna", "Туна", "4,90", "270", ""],
["", "vitamina", "Витамина", "3,50", "300", "https://images.deliveryhero.io/image/fd-bg/Products/511781.JPG?width=302"],
["", "koze-sirene-s-proshuto", "Козе сирене с прошуто", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/538365.JPG?width=302"],
["", "rukola-di-aranchiya", "Рукола ди Аранчия", "4,90", "300", ""],
["", "zlatna-esen", "Златна есен", "4,90", "300", ""],
["", "salata-etazhi", "Салата Етажи", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/786382.JPG?width=302"],
["", "salata-s-kinoa", "Салата с киноа", "4,90", "280", "https://images.deliveryhero.io/image/fd-bg/Products/786383.JPG?width=302"],
["", "sredizemnomorska-salata", "Средиземноморска салата", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/786384.JPG?width=302"]

            ],

            "starters": [
                ["", "khrupaki-topeni-sirencza-s-borovinki", "Хрупаки топени сиренца с боровинки", "4,20", "180", ""],
["", "zapecheni-brokoli", "Запечени броколи", "4,20", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "350", "https://images.deliveryhero.io/image/fd-bg/Products/511789.JPG?width=302"],
["", "pileshki-filencza-s-kornflejks-i-chesnov-sos", "Пилешки филенца с корнфлейкс и чеснов сос", "4,20", "200", ""],
["", "pileshki-susameni-filencza-s-chesnov-sos", "Пилешки сусамени филенца с чеснов сос", "4,20", "200", ""],
["", "brusketi-italiya", "Брускети Италия", "3,50", "250", "https://images.deliveryhero.io/image/fd-bg/Products/538401.JPG?width=302"],
["", "brusketi-norvegiya", "Брускети Норвегия", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/538402.JPG?width=302"],
["", "zapecheno-koze-sirene-na-khartiya", "Запечено козе сирене на хартия", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/538403.JPG?width=302"],
["", "kalmari-pane-s-chesnov-sos", "Калмари пане с чеснов сос", "5,60", "250", "https://images.deliveryhero.io/image/fd-bg/Products/538404.JPG?width=302"],
["", "kalmari-po-grczki", "Калмари по Гръцки", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/538405.JPG?width=302"],
["", "grilovani-zelenchuczi-s-kopr", "Гриловани зеленчуци с копър", "4,20", "300", ""],
["", "pileshki-prchiczi", "Пилешки пръчици", "4,90", "250", "https://images.deliveryhero.io/image/fd-bg/Products/786385.JPG?width=302"],
["", "paniran-kamember-s-filirani-bademi-i-sladko-ot-borovinki-200gr", "Паниран камембер с филирани бадеми и сладко от боровинки (200гр)", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/786386.JPG?width=302"],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "4,20", "200", ""],
["", "zelenchukov-ratatuj", "Зеленчуков рататуй", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/786388.JPG?width=302"],
["", "svinski-ushi-na-skara", "Свински уши на скара", "3,50", "250", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "5,60", "200", ""],
["", "domashni-przheni-kartofi-po-selski", "Домашни пържени картофи по селски", "2,80", "300", ""],
["", "domashni-przheni-kartofi-po-selski-ss-sirene", "Домашни пържени картофи по селски със сирене", "2,80", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "", ""],
["", "kham", "Хам", "4,90", "", ""],
["", "vegetariana", "Вегетариана", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/511647.JPG?width=302"],
["", "kuatro-formadzhi", "Куатро Формаджи", "5,60", "", ""],
["", "kaprichoza", "Капричоза", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/511649.JPG?width=302"],
["", "sicziliya", "Сицилия", "5,60", "", ""],
["", "avanti", "Аванти", "4,90", "", ""],
["", "polo", "Поло", "5,60", "", ""],
["", "kalczone", "Калцоне", "5,60", "560", ""],
["", "chorizo", "Чоризо", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/511655.JPG?width=302"],
["", "proshuto-fungi", "Прошуто Фунги", "5,60", "", ""],
["", "korleone", "Корлеоне", "6,30", "", ""],
["", "pikantna", "Пикантна", "6,30", "", ""],
["", "miks", "Микс", "5,60", "", ""],
["", "asorti", "Асорти", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/511660.JPG?width=302"],
["", "kalabreze", "Калабрезе", "4,90", "", ""],
["", "toskana", "Тоскана", "4,90", "", ""],
["", "bianka", "Бианка", "5,60", "", ""],
["", "palermo", "Палермо", "5,60", "", ""],
["", "salami", "Салами", "5,60", "", ""],
["", "margarita-po-originalna-reczepta", "Маргарита по оригинална рецепта", "4,90", "500", ""],
["", "byala-picza-chorizo", "Бяла пица Чоризо", "6,30", "640", ""]

            ],

            "Паста и ризото": [
                ["", "pasta-boloneze", "Паста Болонезе", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/511743.JPG?width=302"],
["", "pasta-karbonara", "Паста Карбонара", "4,20", "350", ""],
["", "pasta-s-pileshko-meso", "Паста с пилешко месо", "4,90", "350", ""],
["", "pasta-del-mar", "Паста Дел Мар", "6,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/538389.JPG?width=302"],
["", "pasta-chetiri-sirena", "Паста четири сирена", "4,20", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,20", "350", "https://images.deliveryhero.io/image/fd-bg/Products/538392.JPG?width=302"],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "3,50", "350", ""],
["", "galisijsko-rizoto", "Галисийско ризото", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/538394.JPG?width=302"],
["", "pasta-s-pile-i-bekon", "Паста с пиле и бекон", "5,60", "300", ""],
["", "pasta-tono", "Паста Тоно", "6,30", "350", ""],
["", "rizoto-s-tri-vida-gbi-smetana-i-parmezan", "Ризото с три вида гъби, сметана и пармезан", "5,60", "300", ""]

            ],

            "Основни ястия от пилешко": [
                ["", "pile-s-med-i-kri", "Пиле с мед и къри", "5,60", "350", ""],
["", "pile-chetiri-sirena", "Пиле четири сирена", "5,60", "350", ""],
["", "pile-sasso", "Пиле Сассо", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/692923.JPG?width=302"],
["", "pile-benedikt", "Пиле Бенедикт", "6,30", "380", "https://images.deliveryhero.io/image/fd-bg/Products/692924.JPG?width=302"],
["", "plneno-pileshko-file", "Пълнено пилешко филе", "6,30", "400", "https://images.deliveryhero.io/image/fd-bg/Products/786462.JPG?width=302"],
["", "pileshki-filencza-s-karameliziran-ananas", "Пилешки филенца с карамелизиран ананас", "5,60", "350", ""],
["", "pile-sataj", "Пиле Сатай", "5,60", "350", ""],
["", "pile-meksiko", "Пиле Мексико", "7,00", "400", "https://images.deliveryhero.io/image/fd-bg/Products/786465.JPG?width=302"]

            ],

            "Основни ястия от свинско": [
                ["", "svinsko-pepr", "Свинско Пепър", "7,70", "350", "https://images.deliveryhero.io/image/fd-bg/Products/538416.JPG?width=302"],
["", "vienski-shniczel", "Виенски шницел", "7,00", "400", ""],
["", "svinsko-bon-file-s-manatarki-i-kartofeno-pyure", "Свинско бон филе с манатарки и картофено пюре", "7,00", "400", ""],
["", "svinski-kscheta", "Свински късчета", "6,30", "400", ""]

            ],

            "Основни ястия от телешко": [
                ["", "teleshko-uelingtn", "Телешко Уелингтън", "11,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/786469.JPG?width=302"],
["", "teleshko-s-pepr-sos-pechen-kartof-i-presen-luk", "Телешко с пепър сос, печен картоф и пресен лук", "9,80", "350", ""],
["", "teleshki-kscheta-s-teriyaki-sos", "Телешки късчета с терияки сос", "9,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/786471.JPG?width=302"],
["", "teleshki-kscheta-s-manatarki-i-kartofeno-pyure-ss-spanak", "Телешки късчета с манатарки и картофено пюре със спанак", "9,80", "400", ""]

            ],

            "Меса приготвени на Лава грил": [
                ["", "byala-veshalicza", "Бяла Вешалица", "5,60", "250", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "300", ""],
["", "teleshka-nadenicza", "Телешка наденица", "6,30", "250", ""],
["", "teleshki-kyufteta-2br--", "Телешки кюфтета (2бр -", "4,90", "350", ""],
["", "trojka-kebapcheta-s-przheni-kartofi-i-lyutenicza", "Тройка кебапчета с пържени картофи и лютеница", "4,90", "400", ""],
["", "sochna-pileshka-przhola-ot-but", "Сочна пилешка пържола от бут", "4,90", "400", ""]

            ],

            "Риба и морски дарове": [
                ["", "somga-file-s-makovo-seme-i-bilkov-sos", "Сьомга филе с маково семе и билков сос", "13,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/538434.JPG?width=302"],
["", "czipura", "Ципура", "11,20", "400", ""],
["", "lavrak", "Лаврак", "11,20", "400", ""],
["", "pstrva", "Пъстърва", "7,70", "350", "https://images.deliveryhero.io/image/fd-bg/Products/538437.JPG?width=302"],
["", "skaridi-po-sredizemnomorski", "Скариди по средиземноморски", "14,70", "300", ""],
["", "oktopod-s-cheri-domati-i-maslo", "Октопод с чери домати и масло", "15,40", "200", "https://images.deliveryhero.io/image/fd-bg/Products/786478.JPG?width=302"]

            ],

            "burgers": [
                ["", "byal-klasicheski-chijz-burger", "Бял класически чийз бургер", "5,60", "600", "https://images.deliveryhero.io/image/fd-bg/Products/538440.JPG?width=302"],
["", "byal-pileshki-burger", "Бял пилешки бургер", "5,60", "600", ""],
["", "byal-riben-burger", "Бял рибен бургер", "5,60", "550", ""]

            ],

            "garnish": [
                ["", "zadusheni-zelenchuczi---miks", "Задушени зеленчуци - микс", "1,40", "150", ""],
["", "svezhi-zelenchuczi", "Свежи зеленчуци", "1,40", "150", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "2,10", "150", ""],
["", "sharen-oriz", "Шарен ориз", "1,40", "150", ""],
["", "kartofi-sote-s-kopr-i-chesn", "Картофи соте с копър и чесън", "1,40", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "150", ""],
["", "selski-kartofi", "Селски картофи", "1,40", "200", ""]

            ],

            "dry-appetizer": [
                ["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "teleshki-sudzhuk", "Телешки суджук", "2,10", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "domashno-ovche-sirene-porseno-s-cherven-piper-i-zekhtin", "Домашно овче сирене поръсено с червен пипер и зехтин", "0,70", "50", ""],
["", "plato-sirena", "Плато сирена", "6,30", "200", ""]

            ],

            "Пърленки и Чабата": [
                ["", "khrupkava-chiabata-klasik", "Хрупкава чиабата класик", "0,70", "110", ""],
["", "khrupkava-chiabata-s-maslini", "Хрупкава чиабата с маслини", "0,70", "110", ""],
["", "khrupkava-chiabata-ss-sirenekashkaval", "Хрупкава чиабата със сирене/кашкавал", "1,40", "120", ""],
["", "khrupkava-kombinirana-chiabata", "Хрупкава комбинирана чиабата", "1,40", "130", ""],
["", "domashna-prlenka", "Домашна Пърленка", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/700335.JPG?width=302"],
["", "domashna-chesnova-prlenka", "Домашна чеснова пърленка", "0,70", "250", ""],
["", "domashna-prlenka-ss-sirene", "Домашна пърленка със сирене", "1,40", "280", ""],
["", "domashna-prlenka-s-kashkaval", "Домашна пърленка с кашкавал", "1,40", "280", ""],
["", "domashna-prlenka-ss-sirene-i-kashkaval", "Домашна пърленка със сирене и кашкавал", "2,10", "300", ""]

            ],

            "desserts": [
                ["", "pandzhialo-s-maskarpone", "Панджиало с маскарпоне", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/511841.JPG?width=302"],
["", "shokoladova-torta-nutela", "Шоколадова торта Нутела", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/511843.JPG?width=302"]

            ],

            "drinks": [
                ["", "khajneken", "Хайнекен", "2,10", "330", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/561929.jpg?width=302"]

            ],

            "Нови предложения": [
                ["", "salata-s-khrupkavi-kalmari-rulcza-ot-raczi-miks-bejbi-salatki-cheri-domati-parmezan-na-lyuspi-speczialen-dresing-i-pechen-susam", "Салата с хрупкави калмари, рулца от раци, микс бейби салатки, чери домати, пармезан на люспи, специален дресинг и печен сусам", "5,60", "300", ""],
["", "pileshki-drobcheta-s-luk-gbi-i-kashkaval", "Пилешки дробчета с лук, гъби и кашкавал", "4,20", "300", ""],
["", "teleshki-stekcheta-s-chesn-cheri-domati-pechen-kartof-rigan-i-rukola", "Телешки стекчета с чесън, чери домати, печен картоф, риган и рукола", "9,10", "350", ""]

            ]
        }', 
        'slug' => 'sasso-pizza-and-pasta',
        'business_name' => 'Sasso Pizza and Pasta',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Неофит Рилски 11',
        'address_additional' => '',
        'coords_x' => '43.41623169',
        'coords_y' => '24.62447665',
        'phone' => '+359879366552',
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
                ["", "shopska-salata", "Шопска салата", "3,50", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "meshana-salata", "Мешана салата", "3,50", "300", ""],
["", "selska-salata", "Селска салата", "3,50", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696181.jpg?width=302"],
["", "pecheni-piperki-s-kopr-i-chesn", "Печени пиперки с копър и чесън", "3,50", "300", ""],
["", "domateno-patladzhanena-salata", "Доматено патладжанена салата", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696183.jpg?width=302"],
["", "salata-za-uzo-paraliya", "Салата за узо паралия", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696184.jpg?width=302"],
["", "pstra-salata-ss-skaridi", "Пъстра салата със скариди", "7,00", "300", ""],
["", "svezha-salata-s-morski-darove", "Свежа салата с морски дарове", "7,00", "300", ""],
["", "tikvichki-s-kopr-i-oczet", "Тиквички с копър и оцет", "3,50", "300", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696188.jpg?width=302"],
["", "tarama-khajver", "Тарама хайвер", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/696189.jpg?width=302"]

            ],

            "soups": [
                ["", "ribena-chorba", "Рибена чорба", "1,40", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696190.jpg?width=302"],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "Морски изкушения": [
                ["", "midi-v-cherupka", "Миди в черупка", "8,40", "800", "https://images.deliveryhero.io/image/fd-bg/Products/696194.jpg?width=302"],
["", "midi-v-maslo-pane", "Миди в масло пане", "5,60", "300", ""],
["", "skaridi", "Скариди", "8,40", "200", "https://images.deliveryhero.io/image/fd-bg/Products/696196.jpg?width=302"],
["", "kalmari-po-grczki", "Калмари по гръцки", "7,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/696197.jpg?width=302"],
["", "kalmari-na-plocha", "Калмари на плоча", "7,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/696198.jpg?width=302"],
["", "kalmari-pane", "Калмари пане", "5,60", "200", ""],
["", "khrupkav-bejbi-oktopod", "Хрупкав бейби октопод", "11,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696200.jpg?width=302"],
["", "okhlyuvi-po-burgunski", "Охлюви по бургунски", "5,60", "200", "https://images.deliveryhero.io/image/fd-bg/Products/696201.jpg?width=302"],
["", "zhabeshki-butcheta", "Жабешки бутчета", "11,90", "200", "https://images.deliveryhero.io/image/fd-bg/Products/696202.jpg?width=302"]

            ],

            "Печени рибки-пържени": [
                ["", "amur", "Амур", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696205.jpg?width=302"],
["", "uklej", "Уклей", "3,50", "200", ""],
["", "som", "Сом", "8,40", "400", "https://images.deliveryhero.io/image/fd-bg/Products/696207.jpg?width=302"],
["", "kostur", "Костур", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696208.jpg?width=302"],
["", "smadok", "Смадок", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696209.jpg?width=302"],
["", "shhuka", "Щука", "5,60", "300", ""],
["", "pstrva", "Пъстърва", "7,00", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696211.jpg?width=302"],
["", "safrid-przhen", "Сафрид пържен", "4,20", "300", ""],
["", "popcheta-przheni", "Попчета пържени", "4,20", "300", ""],
["", "zargan", "Зарган", "7,00", "300", ""],
["", "lavrak", "Лаврак", "10,50", "400", "https://images.deliveryhero.io/image/fd-bg/Products/696215.jpg?width=302"],
["", "czipura", "Ципура", "11,20", "400", ""],
["", "somga", "Сьомга", "12,60", "300", ""],
["", "kalkan-przhen", "Калкан пържен", "19,60", "300", ""],
["", "fagri", "Фагри", "16,80", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696219.jpg?width=302"],
["", "esetra", "Есетра", "12,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696220.jpg?width=302"],
["", "chiga", "Чига", "12,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696221.jpg?width=302"],
["", "chips-ot-sharan", "Чипс от шаран", "6,30", "200", ""],
["", "czyal-pechen-sharan", "Цял печен шаран", "30,80", "2000", "https://images.deliveryhero.io/image/fd-bg/Products/696204.jpg?width=302"],
["", "ribno-plato", "Рибно плато", "47,60", "3000", ""]

            ],

            "alaminuti": [
                ["", "panirani-sirencza", "Панирани сиренца", "3,50", "250", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "4,20", "250", ""],
["", "panirani-topeni-sirencza-s-borovinki", "Панирани топени сиренца с боровинки", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696226.jpg?width=302"],
["", "frensko-sirene-kamember-s-filirani-bademi-italiansko-sirene-kasteli-s-filiran-badem-i-ananas", "Френско сирене Камембер с филирани бадеми, италианско сирене Кастели с филиран бадем и ананас", "5,60", "200", "https://images.deliveryhero.io/image/fd-bg/Products/696227.jpg?width=302"],
["", "zapecheno-sirene-s-med-i-orekhi", "Запечено сирене с мед и орехи", "4,90", "200", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/696229.jpg?width=302"],
["", "ezika-pane", "Езика пане", "4,90", "200", ""],
["", "mozk-ot-mlechno-tele", "Мозък от млечно теле", "11,90", "400", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "300", ""],
["", "pileshki-drobcheta-s-gbi-i-kashkaval", "Пилешки дробчета с гъби и кашкавал", "4,20", "300", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "3,50", "300", ""],
["", "pileshki-srcza-s-gbi-i-kashkaval", "Пилешки сърца с гъби и кашкавал", "4,20", "300", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "2,80", "200", ""],
["", "svinski-chrevcza", "Свински чревца", "3,50", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "350", "https://images.deliveryhero.io/image/fd-bg/Products/696239.jpg?width=302"],
["", "presni-kartofi", "Пресни картофи", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/696240.jpg?width=302"],
["", "kartofi-sote", "Картофи соте", "2,80", "400", ""],
["", "domashen-chips", "Домашен чипс", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/696242.jpg?width=302"],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "4,20", "400", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "250", "https://images.deliveryhero.io/image/fd-bg/Products/696244.jpg?width=302"],
["", "pileshka-przhola-ot-file", "Пилешка пържола от филе", "4,90", "250", "https://images.deliveryhero.io/image/fd-bg/Products/696245.jpg?width=302"],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", "https://images.deliveryhero.io/image/fd-bg/Products/696246.jpg?width=302"],
["", "marinovani-svinski-rebrcza", "Мариновани свински ребърца", "6,30", "400", "https://images.deliveryhero.io/image/fd-bg/Products/696247.jpg?width=302"],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "kebapche", "Кебапче", "0,70", "", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "150", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "2,10", "150", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "2,10", "150", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "", ""],
["", "apetitka", "Апетитка", "2,10", "", ""],
["", "plato-ot-sukhi-mezeta", "Плато от сухи мезета", "10,50", "300", ""],
["", "prlenka", "Пърленка", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/696257.jpg?width=302"],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "", ""]

            ],

            "desserts": [
                ["", "frenska-selska-torta", "Френска селска торта", "2,80", "", ""],
["", "bukhtite-na-baba", "Бухтите на баба", "4,90", "", ""]

            ],

            "drinks": [
                ["", "tuborg", "Туборг", "2,10", "330", ""],
["", "karlsberg", "Карлсберг", "1,40", "500", ""],
["", "birel---bezalkokholna-bira", "Бирел - безалкохолна бира", "1,40", "500", ""],
["", "samrsbi", "Самърсби", "1,40", "330", ""]

            ]
        }', 
        'slug' => 'nasluka',
        'business_name' => 'Рибен Ресторант Наслука',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'м. Мъртва долина',
        'address_additional' => '',
        'coords_x' => '43.3949224',
        'coords_y' => '24.6049013',
        'phone' => '+359878646479',
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
            
            "Индийски коктейли": [
                ["", "mango-lassi", "Mango Lassi", "2,80", "200", ""],
["", "rose-alzo", "Rose Alzo", "2,80", "200", ""]

            ],

            "starters": [
                ["", "samosa-s-pile", "Самоса с пиле", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/732695.jpg?width=302"],
["", "vegetarianska-samosa", "Вегетарианска самоса", "2,80", "200", "https://images.deliveryhero.io/image/fd-bg/Products/732696.jpg?width=302"],
["", "papadms-ss-sosove", "Пападъмс със сосове", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/732697.jpg?width=302"],
["", "vegetarianska-pakora", "Вегетарианска пакора", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/732698.jpg?width=302"],
["", "koktejl-skaridi", "Коктейл Скариди", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/732699.jpg?width=302"],
["", "samosa-s-teleshko", "Самоса с телешко", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/747353.jpg?width=302"],
["", "pakora-s-pileshko", "Пакора с пилешко", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/743661.jpg?width=302"],
["", "bkhai-s-luk", "Бхаи с лук", "4,90", "350", ""]

            ],

            "Основни ястия": [
                ["", "vinadlu", "Винадлу", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/732711.jpg?width=302"],
["", "madras", "Мадрас", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/732712.jpg?width=302"],
["", "korma", "Корма", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/732713.jpg?width=302"],
["", "dzhalfrezi", "Джалфрези", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/732714.jpg?width=302"],
["", "biriyani", "Бирияни", "7,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/732715.jpg?width=302"],
["", "kri-s-batr-sos", "Къри с батър сос", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/732716.jpg?width=302"],
["", "pileshko-shishche", "Пилешко шишче", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/743658.jpg?width=302"],
["", "pileshki-krilcza-prigotveni-v-tanduri-furna", "Пилешки крилца, приготвени в тандури фурна", "8,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/743659.jpg?width=302"],
["", "teleshko-samosa", "Телешко Самоса", "4,20", "200", ""],
["", "tikka-masala", "Тикка Масала", "4,90", "400", ""]

            ],

            "rice": [
                ["", "byal-oriz", "Бял ориз", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/732717.jpg?width=302"],
["", "pilou-oriz", "Пилоу ориз", "2,80", "400", "https://images.deliveryhero.io/image/fd-bg/Products/732718.jpg?width=302"]

            ],

            "Индийски хляб": [
                ["", "naan", "Наан", "2,10", "150", "https://images.deliveryhero.io/image/fd-bg/Products/732719.jpg?width=302"],
["", "naan-s-maslo-kokos-i-med", "Наан с масло, кокос и мед", "2,80", "150", "https://images.deliveryhero.io/image/fd-bg/Products/732720.jpg?width=302"],
["", "naan-s-maslo", "Наан с масло", "2,10", "150", "https://images.deliveryhero.io/image/fd-bg/Products/732721.jpg?width=302"],
["", "naan-s-maslo-i-chesn", "Наан с масло и чесън", "2,10", "150", "https://images.deliveryhero.io/image/fd-bg/Products/732722.jpg?width=302"],
["", "chapati", "Чапати", "2,10", "", ""]

            ],

            "Вегетариански ястия": [
                ["", "tarka-daal", "Тарка Даал", "5,60", "400", "https://images.deliveryhero.io/image/fd-bg/Products/732723.jpg?width=302"],
["", "chola", "Чола", "5,60", "400", "https://images.deliveryhero.io/image/fd-bg/Products/732724.jpg?width=302"],
["", "alu-gobi", "Алу Гоби", "6,30", "400", "https://images.deliveryhero.io/image/fd-bg/Products/732725.jpg?width=302"]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,70", "", ""],
["", "mentov-sos", "Ментов сос", "0,70", "", ""],
["", "mango-chtni-sos", "Манго чътни сос", "0,70", "", ""],
["", "lyuti-chushki-chtni", "Люти чушки чътни", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/838385.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/838386.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/838387.jpg?width=302"]

            ],

            "wine": [
                ["", "indijsko-tadzh-makhal-roze", "Индийско Тадж Махал Розе", "11,20", "750", ""],
["", "indijsko-tadzh-makhal-byalo-vino", "Индийско Тадж Махал Бяло вино", "11,20", "750", ""]

            ]
        }', 
        'slug' => 'indiyski-restorant-taj-mahal-pleven',
        'business_name' => 'Индийски ресторант Taj Mahal (Плевен)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Георги С. Раковски 45',
        'address_additional' => '',
        'coords_x' => '43.41213921',
        'coords_y' => '24.62272955',
        'phone' => '+359877173353',
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
            
            "Гръцко меню": [
                ["", "lyatna-grczka-salata", "Лятна гръцка салата", "4,20", "350", ""],
["", "melidzana", "Мелидзана", "4,20", "410", ""],
["", "afentiko", "Афентико", "3,50", "440", ""],
["", "pechen-piper-domati-i-sirene-s-kopr-i-chesnov-zekhtin-330gr", "Печен пипер, домати и сирене с копър и чеснов зехтин (330гр", "3,50", "", ""],
["", "ajsberg-s-riba-ton", "Айсберг с риба тон", "4,90", "350", ""],
["", "krit", "Крит", "4,20", "320", ""],
["", "grczka", "Гръцка", "3,50", "330", ""],
["", "tirokafteri", "Тирокафтери", "3,50", "250", ""],
["", "domashna-tarama", "Домашна тарама", "2,80", "200", ""],
["", "buyurdi", "Буюрди", "3,50", "220", ""],
["", "skaridi-mikonos", "Скариди Миконос", "7,70", "300", ""],
["", "kyuftencza-ot-tikvichki-s-dzadziki", "Кюфтенца от тиквички с дзадзики", "4,20", "220", ""],
["", "khrupkavi-skaridi-i-kalmari", "Хрупкави скариди и калмари", "11,20", "240", ""],
["", "khrupkav-lavrak", "Хрупкав лаврак", "9,80", "480", ""],
["", "safrid", "Сафрид", "5,60", "250", ""]

            ],

            "salads": [
                ["", "salata-budapeshha", "Салата Будапеща", "4,20", "450", ""],
["", "snezhanka", "Снежанка", "2,80", "200", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "rukola-s-kinoa", "Рукола с киноа", "4,20", "250", ""],
["", "salata-czezar", "Салата Цезар", "6,30", "350", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "300", ""],
["", "salata-korenoplodni", "Салата Кореноплодни", "3,50", "250", ""],
["", "shopska-salata", "Шопска салата", "3,50", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""]

            ],

            "Рязадки": [
                ["", "tarama", "Тарама", "3,50", "150", ""],
["", "balkanska", "Балканска", "3,50", "150", ""],
["", "meze-za-uzo", "Мезе за Узо", "7,70", "300", ""]

            ],

            "Брускети": [
                ["", "filadelfiya-i-somga", "Филаделфия и сьомга", "5,60", "200", ""]

            ],

            "starters": [
                ["", "skaridi-v-maslo-ss-zekhtinov-sos", "Скариди в масло със зехтинов сос", "8,40", "200", ""],
["", "kornflejks-kashkavalcheta-ss-sladko-ot-yagodi", "Корнфлейкс кашкавалчета със сладко от ягоди", "3,50", "180", ""],
["", "spanacheni-kyuftencza-s-mlechen-sos", "Спаначени кюфтенца с млечен сос", "3,50", "220", ""],
["", "kamember-v-khrupkava-korichka-s-malinov-konfityur-i-cheren-piper", "Камембер в хрупкава коричка с малинов конфитюр и черен пипер", "7,00", "130", ""],
["", "panirani-topeni-sirencza-ss-sladko-ot-borovinki", "Панирани топени сиренца със сладко от боровинки", "4,20", "150", ""],
["", "manatarki-v-bilkovo-maslo", "Манатарки в  билково масло", "6,30", "180", ""],
["", "pileshki-filencza-v-kornflejks-s-mlechen-sos", "Пилешки филенца в корнфлейкс с млечен сос", "4,90", "200", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,90", "150", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "4,90", "150", ""],
["", "pileshki-drobcheta-s-gbi-i-kashkaval", "Пилешки дробчета с гъби и кашкавал", "3,50", "300", ""],
["", "pileshki-srcza-s-gbi-i-kashkaval", "Пилешки сърца с гъби и кашкавал", "4,20", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "kartofki-budapeshha", "Картофки Будапеща", "2,80", "250", ""],
["", "tikvichki-po-grczki-s-mlechen-sos", "Тиквички по гръцки с млечен сос", "3,50", "180", ""],
["", "teleshki-ezik-natyur", "Телешки език натюр", "4,90", "150", ""],
["", "panirani-brokoli-s-topeno-sirene-i-mlechen-sos", "Панирани броколи с топено сирене и млечен сос", "4,20", "180", ""]

            ],

            "Основни ястия": [
                ["", "pile-budapeshha", "Пиле Будапеща", "7,00", "400", ""],
["", "pile-po-provansalski", "Пиле по провансалски", "7,00", "400", ""],
["", "pileshki-kscheta", "Пилешки късчета", "7,00", "400", ""],
["", "svinski-stekcheta-s-gbi", "Свински стекчета с гъби", "8,40", "400", ""],
["", "teleshko-s-manatarki", "Телешко с манатарки", "10,50", "400", ""],
["", "teleshko-po-burgundski", "Телешко по бургундски", "10,50", "400", ""],
["", "teleshko-bearnez", "Телешко Беарнез", "10,50", "400", ""],
["", "bavno-pechen-svinski-dzholan-po-bavarski", "Бавно печен свински джолан по Баварски", "9,10", "450", ""],
["", "svinsko-s-borovinki", "Свинско с боровинки", "8,40", "350", ""],
["", "svinski-shniczel-po-vienski", "Свински шницел по Виенски", "8,40", "400", ""]

            ],

            "Сачове и ястия на скара": [
                ["", "meshana-skara-na-sach", "Мешана скара на сач", "23,80", "1400", ""],
["", "balkandzhijsko-kyufte", "Балканджийско кюфте", "2,10", "200", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "240", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "110", ""],
["", "pileshko-shishche-s-bekon", "Пилешко шишче с бекон", "2,80", "150", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,20", "350", ""],
["", "pileshki-sach", "Пилешки сач", "8,40", "450", ""],
["", "svinski-sach", "Свински сач", "9,10", "450", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "240", ""],
["", "svinsko-bon-file", "Свинско бон филе", "5,60", "230", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "110", ""],
["", "svinski-rebrcza", "Свински ребърца", "6,30", "400", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "4,90", "180", ""],
["", "domashna-nadenicza", "Домашна наденица", "2,10", "150", ""],
["", "svinski-drob", "Свински дроб", "3,50", "300", ""]

            ],

            "risotto": [
                ["", "rizoto-s-pile", "Ризото с пиле", "4,90", "350", ""],
["", "rizoto-s-manatarki", "Ризото с манатарки", "6,30", "350", ""]

            ],

            "Клуб сандвичи": [
                ["", "klub-sandvich-s-shunka-i-kashkaval", "Клуб сандвич с шунка и кашкавал", "4,20", "650", ""],
["", "klub-sandvich-s-lukanka-i-chedr", "Клуб сандвич с луканка и чедър", "4,90", "650", ""]

            ],

            "fish": [
                ["", "pstrva", "Пъстърва", "6,30", "300", ""],
["", "sharan", "Шаран", "5,60", "300", ""],
["", "kotlet-ot-somga", "Котлет от сьомга", "9,10", "250", ""]

            ],

            "garnish": [
                ["", "presni-zelenchuczi", "Пресни зеленчуци", "1,40", "180", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "180", ""],
["", "zadusheni-kartofi", "Задушени картофи", "1,40", "180", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "180", ""],
["", "lyutenicza", "Лютеница", "1,40", "180", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "180", ""]

            ],

            "dry-appetizer": [
                ["", "sudzhuk", "Суджук", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "lukanka", "Луканка", "2,10", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""],
["", "pushena-somga", "Пушена сьомга", "2,10", "50", ""],
["", "plato-sirene", "Плато сирене", "6,30", "150", ""]

            ],

            "desserts": [
                ["", "palachinki", "Палачинки", "1,40", "200", ""],
["", "domashna-pita-s-maskarpone", "Домашна пита с маскарпоне", "2,10", "150", ""]

            ]
        }', 
        'slug' => 'restorant-budapeshcha',
        'business_name' => 'Ресторант Будапеща',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Васил Левски 192',
        'address_additional' => '',
        'coords_x' => '43.41060334',
        'coords_y' => '24.61645246',
        'phone' => '+359878387819',
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
            
            "starters": [
                ["", "omlet-s-shunka-i-kashkaval", "Омлет с шунка и кашкавал", "2,10", "350", ""],
["", "brkani-yajcza", "Бъркани яйца", "1,40", "350", ""]

            ],

            "soups": [
                ["", "supa-topcheta", "Супа топчета", "0,70", "300", ""],
["", "pileshka-supa", "Пилешка супа", "0,70", "300", ""],
["", "supa-ot-dzholan", "Супа от джолан", "1,40", "300", ""]

            ],

            "Готвени": [
                ["", "svinsko-s-kartofi", "Свинско с картофи", "2,10", "350", ""],
["", "svinski-shniczel", "Свински шницел", "1,40", "", ""],
["", "piperki-s-domaten-sos", "Пиперки с доматен сос", "1,40", "350", ""],
["", "musaka", "Мусака", "2,10", "350", ""],
["", "leshha-yakhniya", "Леща яхния", "1,40", "", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "0,70", "", ""],
["", "zadushen-dzholan", "Задушен джолан", "3,50", "350", ""],
["", "vinen-kebap", "Винен кебап", "2,80", "350", ""],
["", "bob-yakhniya-s-nadenicza", "Боб яхния с наденица", "2,10", "350", ""],
["", "bob-yakhniya", "Боб яхния", "1,40", "350", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "180", ""]

            ],

            "grill": [
                ["", "pileshko-file-na-skara", "Пилешко филе на скара", "2,10", "", ""],
["", "pileshka-przhola-na-skara", "Пилешка пържола на скара", "2,10", "", ""],
["", "kyufteta-na-skara", "Кюфтета на скара", "0,70", "100", ""],
["", "kebapche-na-skara", "Кебапче на скара", "0,70", "100", ""],
["", "domashna-nadenicza-na-skara", "Домашна наденица на скара", "1,40", "", ""]

            ],

            "garnish": [
                ["", "zele-s-morkovi", "Зеле с моркови", "0,70", "100", ""],
["", "snezhanka", "Снежанка", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "lyuto-chushle", "Люто чушле", "0,00", "", ""],
["", "domati-s-krastaviczi", "Домати с краставици", "0,70", "100", ""],
["", "domashna-byala-pitka", "Домашна бяла питка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "", ""],
["", "maskarpone-s-shokolad", "Маскарпоне с шоколад", "0,70", "", ""],
["", "shokoladova-torta", "Шоколадова торта", "1,40", "", ""]

            ],

            "Алкохолни напитки": [
                ["", "shumensko", "Шуменско", "0,70", "500", ""],
["", "pirinsko", "Пиринско", "0,70", "500", ""]

            ],

            "Безалкохолни напитки": [
                ["", "studen-chaj", "Студен чай", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/852469.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/852471.jpg?width=302"]

            ]
        }', 
        'slug' => 'snek-bar-koleloto',
        'business_name' => 'Снек Бар Колелото',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5809',
        'address' => 'улица ,,Кара Колю“ 24',
        'address_additional' => '',
        'coords_x' => '43.4238674',
        'coords_y' => '24.6098523',
        'phone' => '+359885703255',
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
            
            "Гофрети": [
                ["", "bbl-gofreta", "Бъбъл гофрета", "3,50", "", ""],
["", "gofreta-na-klechka", "Гофрета на клечка", "4,20", "", ""],
["", "torta-ot-gofreti", "Торта от гофрети", "14,00", "", ""]

            ],

            "Шейкове": [
                ["", "mlechen-shejk", "Млечен шейк", "2,80", "", ""]

            ]
        }', 
        'slug' => 'vkusotii-na-kolela',
        'business_name' => 'Вкусотии на колела',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Кирил и Методий 13',
        'address_additional' => '',
        'coords_x' => '43.40902914',
        'coords_y' => '24.621949',
        'phone' => '+359882196731',
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
                ["", "golyam-dyuner--koka-kola", "Голям дюнер + Кока кола", "2,80", "500.", ""]

            ],

            "dunner": [
                ["", "malk-dyuner", "Малък дюнер", "1,40", "300", ""],
["", "sreden-dyuner", "Среден дюнер", "2,10", "350", ""],
["", "golyam-dyuner", "Голям дюнер", "2,80", "450", ""],
["", "porcziya-dyuner", "Порция дюнер", "2,80", "450", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/646754.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/646755.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/646756.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/646757.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/646758.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/646759.jpg?width=302"],
["", "fanta-grozde", "Fanta Грозде", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/851780.jpg?width=302"],
["", "fanta-byala-praskova", "Fanta Бяла Праскова", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/851779.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1072195.jpg?width=302"]

            ],

            "Choices": [
                ["", "porcziya-przheni-kartofi", "Порция пържени картофи", "0,70", "200", ""],
["", "dobavka-meso", "Добавка месо", "0,70", "50", ""],
["", "sos", "Сос", "0,70", "240", ""]

            ],

            "drinks": [
                ["", "ajryan-vereya", "Айрян Верея", "0,00", "", ""],
["", "boza-zdravecz", "Боза Здравец", "0,00", "", ""]

            ]
        }', 
        'slug' => 'dyuner-pri-taslaka',
        'business_name' => 'Дюнер При Таслака',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5805',
        'address' => 'пл. Иван Мендиликов 2',
        'address_additional' => '',
        'coords_x' => '43.4195386',
        'coords_y' => '24.61603164',
        'phone' => '+359878746008',
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
            
            "Добре дошли": [
                ["", "salata-shopska", "Салата Шопска", "2,80", "350", ""],
["", "miks-svezhi-salatki-s-koze-sirene", "Микс свежи салатки с козе сирене", "5,60", "350", ""],
["", "domati-s-pryasna-moczarela", "Домати с прясна моцарела", "5,60", "350", ""],
["", "salata-s-tri-semena", "Сaлата с три семена", "4,90", "350", ""],
["", "domati-s-moczarela-i-pesto", "Домати с моцарела и песто", "5,60", "350", ""],
["", "eli---top-table", "Ели - Top Table", "4,20", "350", ""],
["", "salata-panczanela", "Салата Панцанела", "5,60", "350", ""],
["", "borata", "Бората", "8,40", "350", ""],
["", "klasicheska-salata-czezar-s-pileshko-file", "Класическа салата Цезар с пилешко филе", "5,60", "300", ""],
["", "selski-shedovr", "Селски шедьовър", "5,60", "450", ""],
["", "khrupkavi-salatki-ss-susheni-domati", "Хрупкави салатки със сушени домати", "5,60", "350", ""],
["", "salata-ovcharska", "Салата Овчарска", "2,80", "400", ""],
["", "salata-snezhanka", "Салата снежанка", "2,10", "250", ""]

            ],

            "Да видим сега": [
                ["", "khrupkavi-kalmari-po-grczki-ss-sos-ajoli", "Хрупкави калмари по гръцки със сос Айоли", "8,40", "300", ""],
["", "temperiran-oktopod-s-cheri-domatki", "Темпериран октопод с чери доматки", "15,40", "250", ""],
["", "skaridi-s-kopr-i-chesn", "Скариди с копър и чесън", "13,30", "250", ""],
["", "kinoa-kyuftencza-s-mlad-spanak", "Киноа кюфтенца с млад спанак", "4,90", "250", ""],
["", "tiganche-ot-moreto-ss-skaridi", "Тиганче от морето със скариди", "13,30", "350", ""],
["", "kalmar-na-plocha", "Калмар на плоча", "8,40", "250", ""],
["", "zapecheno-sirene-kamember", "Запечено сирене Камембер", "7,00", "250", ""],
["", "sotiran-teleshki-ezik", "Сотиран телешки език", "7,70", "300", ""],
["", "gretenirani-pileshki-krilcza", "Гретенирани пилешки крилца", "4,90", "350", ""],
["", "khrupkavi-pileshki-khapki", "Хрупкави пилешки хапки", "4,90", "300", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "200", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "250", ""]

            ],

            "Няма да сгрешиш": [
                ["", "pileshka-przhola-ot-but-na-skara", "Пилешка пържола от бут на скара", "4,20", "250", ""],
["", "pileshko-file-na-gril-s-grilovani-zelenchuczi", "Пилешко филе на грил с гриловани зеленчуци", "7,00", "450", ""],
["", "pileshki-stek-kapreze", "Пилешки стек Капрезе", "9,10", "450", ""],
["", "zapechena-przhola-ot-pileshko-butche", "Запечена пържола от пилешко бутче", "9,80", "450", ""],
["", "tiganche-s-pileshki-nanizanki", "Тиганче с пилешки Нанизанки", "8,40", "450", ""]

            ],

            "Точно попадение": [
                ["", "french-stek-ot-svinsko-bonfile", "Френч-стек от свинско бонфиле", "11,20", "450", ""],
["", "bavno-pechen-svinski-dzholan", "Бавно печен свински джолан", "9,80", "450", ""],
["", "ozhulenki-ot-svinsko-bonfile", "Ожуленки от свинско бонфиле", "11,20", "450", ""],
["", "svinski-rebra", "Свински ребра", "9,80", "450", ""],
["", "srf-end-trf", "Сърф енд търф", "12,60", "450", ""],
["", "domashni-svinski-kyuftencza", "Домашни свински кюфтенца", "6,30", "450", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "7,00", "450", ""]

            ],

            "Иска ли ти се?": [
                ["", "tiganche-s-domashen-teleshki-sudzhuk", "Тиганче с домашен телешки суджук", "9,10", "500", ""]

            ],

            "Защо пък не?": [
                ["", "czipura-na-plocha-s-grilovani-zelenchuczi-i-byal-oriz", "Ципура на плоча с гриловани зеленчуци и бял ориз", "15,40", "500", ""],
["", "pstrva-na-skara-s-rost-kartofi-s-bilki", "Пъстърва на скара с Рост картофи с билки", "7,00", "500", ""],
["", "zapecheno-file-ot-somga", "Запечено филе от сьомга", "16,80", "400", ""],
["", "krekhki-filencza-ot-lavrak", "Крехки филенца от лаврак", "15,40", "400", ""]

            ],

            "Ааа... да, да": [
                ["", "taliateli-s-morski-darove-i-cheri-domati-s-bosilek", "Талиатели с морски дарове и чери домати с босилек", "11,20", "350", ""],
["", "taliateli-boloneze", "Талиатели Болонезе", "5,60", "350", ""],
["", "rizoto-s-presni-gbi-i-zelenchuczi", "Ризото с пресни гъби и зеленчуци", "4,90", "350", ""],
["", "klasichesko-rizoto-s-pileshko-file-i-parmezan", "Класическо ризото с пилешко филе и пармезан", "7,00", "350", ""],
["", "rizoto-ss-somga-i-kapersi-s-parmezan-grana-padano", "Ризото със сьомга и каперси с пармезан Грана Падано", "11,20", "350", ""]

            ],

            "От фурната": [
                ["", "prlenka", "Пърленка", "1,40", "200", ""],
["", "bilkovi-brusketi-s-tarama-khajver", "Билкови брускети с тарама хайвер", "3,50", "250", ""],
["", "brusketi-s-filadelfiya-i-pushena-somga", "Брускети с Филаделфия и пушена сьомга", "6,30", "250", ""],
["", "brusketi-s-filadelfiya-i-proshuto", "Брускети с Филаделфия и прошуто", "5,60", "250", ""]

            ],

            "Не, не. Ааа... няма не": [
                ["", "chijzkejk", "Чийзкейк", "2,80", "150", ""],
["", "shokoladovo-sufle-s-techen-czentr-i-topka-sladoled", "Шоколадово суфле с течен център и топка сладолед", "3,50", "150", ""],
["", "palachinka-top-table", "Палачинка Top Table", "2,80", "180", ""],
["", "plodova-salata", "Плодова салата", "2,80", "250", ""],
["", "torta-nutela", "Торта Нутела", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'top-table',
        'business_name' => 'Top Table',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Цар Борис III 10 к-с Благоев',
        'address_additional' => '',
        'coords_x' => '43.41090242',
        'coords_y' => '24.61837332',
        'phone' => '+359877729888',
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
                ["", "malk-pileshki-dyuner", "Малък пилешки дюнер", "2,10", "", ""],
["", "sreden-pileshki-dyuner", "Среден пилешки дюнер", "2,10", "", ""],
["", "golyam-pileshki-dyuner", "Голям пилешки дюнер", "2,80", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "150", ""]

            ],

            "Бургер": [
                ["", "burger-kebap-13", "Бургер Кебап 13", "3,50", "13", ""],
["", "double-xx-burger", "Double XX Burger", "2,80", "", ""],
["", "teleshki-burger", "Телешки бургер", "2,80", "", ""],
["", "chikn-burger", "Чикън бургер", "2,80", "", ""]

            ],

            "Порции": [
                ["", "sreden-dyuner-v-kutiya", "Среден дюнер в кутия", "2,80", "480", ""],
["", "porcziya-dyuner", "Порция дюнер", "3,50", "600", ""]

            ],

            "Промо": [
                ["", "burger-kebap-13--koka-kola", "Бургер Кебап 13 + Кока Кола", "4,20", "500", ""],
["", "double-xx-burger--malki-kartofki", "Double XX Burger + малки картофки", "2,80", "", ""],
["", "sreden-pileshki-dyuner--malk-ajryan", "Среден пилешки дюнер + малък айрян", "2,80", "", ""],
["", "4-sredni-dyunera--koka-kola", "4 средни дюнера + Кока Кола", "9,80", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/942456.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/942457.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/942459.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/942460.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/942463.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajryan-balkan-malk", "Айрян Балкан малък", "0,70", "", ""],
["", "ajryan-balkan-golyam", "Айрян Балкан голям", "0,70", "", ""]

            ],

            "beer": [
                ["", "kamenicza-ken", "Каменица кен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'kebap-13',
        'business_name' => 'Кебап 13 (Плевен)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул.Васил Левски 183 А',
        'address_additional' => '',
        'coords_x' => '43.40917222',
        'coords_y' => '24.61851417',
        'phone' => '+359883277883',
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
            
            "Бургери и Кесадия": [
                ["", "teleshki-burger", "Телешки бургер", "4,90", "500", ""],
["", "burger-ss-svinsko-drpano-meso", "Бургер със свинско дърпано месо", "4,90", "500", ""],
["", "burger-s-khrupkavo-pile-czezar", "Бургер с хрупкаво пиле Цезар", "4,90", "500", ""]

            ],

            "salads": [
                ["", "domashna-salata", "Домашна салата", "4,20", "350", ""],
["", "vitaminozna-salata", "Витаминозна салата", "3,50", "350", ""],
["", "salata-gril-bar", "Салата Грил Бар", "4,90", "450", ""],
["", "salata-czezar", "Салата Цезар", "6,30", "400", ""],
["", "italianska-salata", "Италианска салата", "6,30", "350", ""]

            ],

            "Традиционни салати": [
                ["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "450", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "350", ""]

            ],

            "soups": [
                ["", "pateshka-supa", "Патешка супа", "1,40", "300", ""]

            ],

            "appetizer": [
                ["", "balkanska-razyadka", "Балканска разядка", "2,10", "200", ""],
["", "lyutivka", "Лютивка", "2,10", "200", ""],
["", "kopoolu", "Кьопоолу", "2,80", "200", ""]

            ],

            "Топли предястия": [
                ["", "teleshki-ezik-v-maslo-i-chesn", "Телешки език в масло и чесън", "6,30", "200", ""],
["", "plneni-gbi-s-bekon-i-kashkaval", "Пълнени гъби с бекон и кашкавал", "4,20", "200", ""],
["", "domashen-kashkaval-na-zhar", "Домашен кашкавал на жар", "4,90", "200", ""],
["", "pechen-kartof-s-maslo-chesn-bekon-i-kashkaval", "Печен картоф с масло, чесън, бекон и кашкавал", "4,20", "200", ""],
["", "khrupkavi-filencza-s-chesnov-sos", "Хрупкави филенца с чеснов сос", "4,90", "200", ""],
["", "pateshki-drob-na-zhar", "Патешки дроб на жар", "4,20", "250", ""],
["", "bekon-na-zhar", "Бекон на жар", "4,90", "250", ""],
["", "pateshki-srcza-na-zhar", "Патешки сърца на жар", "4,90", "250", ""],
["", "panirani-topeni-sirencza-s-borovinki", "Панирани топени сиренца с боровинки", "4,20", "200", ""],
["", "manatarki-v-maslo", "Манатарки в масло", "7,70", "200", ""],
["", "pryasno-przheni-kartofi", "Прясно пържени картофи", "2,80", "300", ""],
["", "pryasno-przheni-kartofi-ss-sirene", "Прясно пържени картофи със сирене", "2,80", "350", ""],
["", "khrupkav-kartofen-chips", "Хрупкав картофен чипс", "2,80", "300", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "3,50", "300", ""]

            ],

            "Препоръчано": [
                ["", "variaczii-ot-mesa-prigotveni-na-zhar", "Вариации от меса, приготвени на жар", "28,70", "1500", ""],
["", "domashni-przheni-kyuftencza---sochni-i-pukhkavi-kato-na-baba", "Домашни пържени кюфтенца - сочни и пухкави като на баба", "5,60", "350", ""],
["", "teleshki-medaloni-na-zhar", "Телешки медальони на жар", "11,20", "300", ""],
["", "svinski-rebrcza-s-med-i-chesn", "Свински ребърца с мед и чесън", "6,30", "300", ""],
["", "sache-pateshki-drob", "Саче патешки дроб", "6,30", "400", ""],
["", "sache-pateshki-srcza", "Саче патешки сърца", "7,00", "400", ""]

            ],

            "barbecue": [
                ["", "pileshka-przhola-file", "Пилешка пържола филе", "5,60", "250", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "6,30", "300", ""],
["", "svinska-przhola-vrat", "Свинска пържола врат", "6,30", "250", ""],
["", "svinski-rebrcza", "Свински ребърца", "6,30", "300", ""],
["", "svinski-shashlik", "Свински шашлик", "6,30", "300", ""],
["", "teleshki-sudzhuk", "Телешки суджук", "5,60", "250", ""],
["", "svinsko-kyufte", "Свинско кюфте", "1,40", "150", ""],
["", "pateshko-file-na-zhar", "Патешко филе на жар", "8,40", "300", ""],
["", "teleshka-nadenicza", "Телешка наденица", "5,60", "250", ""],
["", "teleshko-kyufte", "Телешко кюфте", "2,10", "150", ""],
["", "ushhipczi", "Ущипци", "5,60", "400", ""]

            ],

            "fish": [
                ["", "som-kotlet", "Сом котлет", "7,70", "350", ""],
["", "pstrva-na-zhar", "Пъстърва на жар", "6,30", "350", ""],
["", "tarama-khajver", "Тарама хайвер", "3,50", "250", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "6,30", "200", ""],
["", "skaridi-na-tigan", "Скариди на тиган", "8,40", "", ""],
["", "presni-midi", "Пресни миди", "4,90", "500", ""],
["", "przhen-safrid", "Пържен сафрид", "6,30", "300", ""]

            ],

            "garnish": [
                ["", "svezhi-zelenchuczi-na-gril", "Свежи зеленчуци на грил", "2,80", "200", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "200", ""],
["", "svezha-garnitura", "Свежа гарнитура", "2,10", "200", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,70", "", ""]

            ],

            "bread": [
                ["", "prlenka-na-zhar", "Пърленка на жар", "1,40", "", ""],
["", "byal-khlyab", "Бял хляб", "0,00", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "", ""]

            ],

            "desserts": [
                ["", "domashna-torta-prigotvena-na-nasha-reczepta", "Домашна торта приготвена на наша рецепта", "2,80", "200", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "4,20", "200", ""],
["", "krem-bryule", "Крем Брюле", "2,80", "200", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'gril-bar',
        'business_name' => 'Грил Бар',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5804',
        'address' => 'ул. Александър Стамболийски 1',
        'address_additional' => '',
        'coords_x' => '43.4070216',
        'coords_y' => '24.61517649',
        'phone' => '+359879103266',
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
                ["", "shopska-salata", "Шопска салата", "3,50", "300", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "6,30", "350", ""],
["", "salata-avokado", "Салата Авокадо", "4,90", "300", ""],
["", "rozov-domat-luk-pechena-chushka-i-sirene", "Розов домат, лук, печена чушка и сирене", "4,90", "300", ""]

            ],

            "starters": [
                ["", "kartofi-s-bekon-i-smetanov-sos", "Картофи с бекон и сметанов сос", "4,20", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "250", ""],
["", "vlcho-meze", "Вълчо мезе", "8,40", "300", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "brusketi---miks-razyadki", "Брускети - микс разядки", "6,30", "200", ""],
["", "pileshki-drobcheta-s-dobavki", "Пилешки дробчета с добавки", "4,20", "250", ""]

            ],

            "pasta": [
                ["", "spageti-s-anshoa-zekhtin-chesn-i-magdanoz", "Спагети с аншоа, зехтин, чесън и магданоз", "7,70", "350", ""],
["", "pasta-putaneska", "Паста Путанеска", "8,40", "350", ""],
["", "pasta-karbonara", "Паста Карбонара", "5,60", "350", ""]

            ],

            "Основни ястия": [
                ["", "pile-s-brokoli", "Пиле с броколи", "6,30", "350", ""],
["", "marinovano-pileshko-file-s-garnitura", "Мариновано пилешко филе с гарнитура", "5,60", "380", ""],
["", "pileshki-filencza-ss-soev-sos", "Пилешки филенца със соев сос", "4,90", "300", ""],
["", "teleshki-skalopini-s-gbi-i-sos-brendi-s-garnitura-ot-kartofi-s-bilki", "Телешки скалопини с гъби и сос Бренди с гарнитура от картофи с билки", "12,60", "380", ""],
["", "teleshki-sudzhuk-s-garnitura", "Телешки суджук с гарнитура", "7,70", "380", ""],
["", "svinski-kotlet-uorchestr-s-gbi-i-zadusheni-zelenchuczi-v-maslo", "Свински котлет Уорчестър с гъби и задушени зеленчуци в масло", "10,50", "500", ""],
["", "medaloni-ot-svinsko-bon-file-s-moczarel-chedr-kartofeno-pyure-i-sos-demiglas", "Медальони от свинско бон филе с моцарел, чедър, картофено пюре и сос Демиглас", "9,80", "380", ""],
["", "stek-ot-svinski-vrat-s-chupeni-kartofi-i-razyadka", "Стек от свински врат с чупени картофи и разядка", "6,30", "350", ""],
["", "svinski-kyufteta-s-khrupkavi-kartofi-i-lyutenicza", "Свински кюфтета с хрупкави картофи и лютеница", "5,60", "350", ""],
["", "svinski-rebra-glaze", "Свински ребра Глазе", "7,70", "400", ""]

            ],

            "Риба и морски дарове": [
                ["", "kalmar-na-plocha-s-cheri-domati", "Калмар на плоча с чери домати", "8,40", "250", ""],
["", "khrupkavi-kalmari-ss-sos-tartar", "Хрупкави калмари със сос Тартар", "7,70", "250", ""],
["", "oktopod-po-sredizemnomorski-s-pechen-domat-kapersi-maslini-i-artishok", "Октопод по средиземноморски с печен домат, каперси, маслини и артишок", "14,70", "200", ""],
["", "lavrak---grilovan", "Лаврак - грилован", "11,20", "300", ""],
["", "fish-end-chips-ot-pstrva", "Фиш енд Чипс от пъстърва", "9,10", "300", ""],
["", "stek-ot-somga", "Стек от сьомга", "15,40", "300", ""],
["", "sotirani-skaridi-ss-sos-bisk", "Сотирани скариди със сос Биск", "13,30", "200", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "200", ""],
["", "torta-popitaj", "Торта Попитай", "3,50", "150", ""]

            ],

            "bread": [
                ["", "prlenka-s-maslo", "Пърленка с масло", "1,40", "", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "1,40", "", ""],
["", "byal-khlyab---filijka", "Бял хляб - филийка", "0,00", "", ""]

            ],

            "Coca-Cola  напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/538840.jpg?width=302"]

            ],

            "drinks": [
                ["", "mineralna-voda-devin-kristal", "Минерална вода Девин кристал", "0,70", "300", ""],
["", "mineralna-voda-devin-kristal", "Минерална вода Девин кристал", "2,10", "750", ""],
["", "karlsberg", "Карлсберг", "2,10", "500", ""],
["", "shark", "Shark", "2,80", "250", ""],
["", "stela-artoa", "Стела Артоа", "2,10", "330", ""],
["", "korona", "Корона", "3,50", "330", ""],
["", "lefe", "Лефе", "2,80", "330", ""],
["", "sajder-smrsbi", "Сайдер Съмърсби", "2,10", "330", ""],
["", "studen-chaj-san-benedeto---ken", "Студен чай Сан Бенедето - кен", "2,10", "250", ""],
["", "energijna-napitka-shark", "Енергийна напитка Shark", "2,80", "", ""],
["", "energijna-napitka-red-bull", "Енергийна напитка Red Bull", "2,80", "", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "tuborg", "Туборг", "1,40", "330", ""]

            ]
        }', 
        'slug' => 'garden',
        'business_name' => 'Garden',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Битоля 8',
        'address_additional' => '',
        'coords_x' => '43.41643621',
        'coords_y' => '24.62190822',
        'phone' => '+359878569469',
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
                ["", "picza-dzhunir-1000", "Пица Джуниър (1000", "9,80", "", ""]

            ],

            "starters": [
                ["", "vegetarianski-kyufteta-ss-sos-fresh", "Вегетариански кюфтета със сос фреш", "3,50", "250", "https://images.deliveryhero.io/image/fd-bg/Products/185939.JPG?width=302"],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "3,50", "200", ""],
["", "fungi", "Фунги", "4,20", "200", ""],
["", "topeni-sirencza-s-kornflejks-i-borovinkovo-sladko", "Топени сиренца с корнфлейкс и боровинково сладко", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/185943.JPG?width=302"],
["", "pikantni-pileshki-krilcza", "Пикантни пилешки крилца", "3,50", "350", ""],
["", "panirani-sirencza", "Панирани сиренца", "3,50", "200", ""],
["", "sirencza-s-kornflejks-i-borovinkovo-sladko", "Сиренца с корнфлейкс и боровинково сладко", "3,50", "200", ""],
["", "racheshki-puri", "Рачешки пури", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/185947.JPG?width=302"],
["", "susameni-pileshki-filencza", "Сусамени пилешки филенца", "4,20", "200", ""],
["", "pileshki-khapki-v-maslo-i-chesn", "Пилешки хапки в масло и чесън", "4,20", "200", ""],
["", "pileshki-khapki-s-rokfor", "Пилешки хапки с рокфор", "4,20", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "kartofi-po-selski", "Картофи по селски", "2,10", "250", ""],
["", "kartofi-zapecheni-s-bekon-i-shunka", "Картофи запечени с бекон и шунка", "4,20", "450", ""],
["", "kartofi-zapecheni-s-brokoli-i-sino-sirene", "Картофи запечени с броколи и синьо сирене", "4,20", "400", ""],
["", "sirene-s-med-i-orekhi", "Сирене с мед и орехи", "2,80", "150", ""],
["", "bireno-meze", "Бирено мезе", "5,60", "500", "https://images.deliveryhero.io/image/fd-bg/Products/416355.JPG?width=302"],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/185951.JPG?width=302"],
["", "svinski-filencza-s-kartofi-sote-i-sos-knor", "Свински филенца с картофи соте и сос Кнор", "5,60", "300", ""],
["", "chesnovi-svinski-filencza-ss-sos-knor", "Чеснови свински филенца със сос Кнор", "4,90", "200", ""]

            ],

            "pizza": [
                ["", "semejna", "Семейна", "12,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/185907.JPG?width=302"],
["", "grande", "Гранде", "4,90", "", ""],
["", "dzhordzhiya", "Джорджия", "4,90", "", ""],
["", "bianko", "Бианко", "4,90", "", ""],
["", "don-domat", "Дон Домат", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "niki", "Ники", "3,50", "", ""],
["", "verona", "Верона", "4,20", "", ""],
["", "karuzo", "Карузо", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/185918.JPG?width=302"],
["", "diavolo", "Диаволо", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/185919.JPG?width=302"],
["", "meksikana", "Мексикана", "4,20", "", ""],
["", "detska", "Детска", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/185921.JPG?width=302"],
["", "gabi", "Габи", "3,50", "", ""],
["", "specziale", "Специале", "4,20", "", ""],
["", "roma", "Рома", "4,20", "", ""],
["", "belisima", "Белисима", "4,20", "", ""],
["", "fruti-di-mare", "Фрути ди Маре", "5,60", "", ""],
["", "palermo", "Палермо", "4,20", "", ""],
["", "simoneli", "Симонели", "4,20", "", ""],
["", "katerina", "Катерина", "5,60", "", ""],
["", "brusketa", "Брускета", "3,50", "", ""],
["", "salami", "Салами", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "don-kastilio", "Дон Кастилио", "5,60", "", ""],
["", "piza", "Пиза", "4,90", "", ""],
["", "toskana", "Тоскана", "4,20", "", ""],
["", "kham", "Хам", "3,50", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "selska-picza", "Селска пица", "4,20", "", ""],
["", "pikantina", "Пикантина", "4,20", "", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "meshana-salata", "Мешана салата", "2,80", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", "https://images.deliveryhero.io/image/fd-bg/Products/185888.JPG?width=302"],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "chervena-salata", "Червена салата", "2,80", "350", "https://images.deliveryhero.io/image/fd-bg/Products/185891.JPG?width=302"],
["", "vitamina", "Витамина", "2,10", "300", ""],
["", "meksikana", "Мексикана", "3,50", "350", ""],
["", "katk", "Катък", "2,80", "300", ""],
["", "zhtvarska-salata", "Жътварска салата", "3,50", "400", ""],
["", "salata-roko", "Салата Роко", "3,50", "450", ""],
["", "salata-krastaviczi", "Салата Краставици", "2,80", "400", ""],
["", "salata-morkovi", "Салата Моркови", "2,10", "300", ""],
["", "salata-domati", "Салата домати", "2,80", "400", ""]

            ],

            "pasta": [
                ["", "spageti-boloneze", "Спагети Болонезе", "3,50", "450", ""],
["", "spageti-martichano", "Спагети Мартичано", "4,20", "450", ""],
["", "spageti-karbonara", "Спагети Карбонара", "3,50", "400", ""],
["", "spageti-marko-polo", "Спагети Марко Поло", "4,20", "350", ""],
["", "lazanya", "Лазаня", "4,20", "450", ""],
["", "spageti-vegetariana", "Спагети Вегетариана", "3,50", "400", ""]

            ],

            "sauces": [
                ["", "frono---topl", "Фроно - топъл", "0,70", "100", ""],
["", "kombiniran", "Комбиниран", "0,00", "50", ""],
["", "boloneze", "Болонезе", "0,00", "50", ""],
["", "diavolo", "Диаволо", "0,00", "50", ""],
["", "bianko", "Бианко", "0,00", "50", ""],
["", "fresh", "Фреш", "0,00", "50", ""],
["", "formadzho---topl", "Формаджо - топъл", "0,70", "100", ""],
["", "majoneza", "Майонеза", "0,00", "15", ""],
["", "ketchup", "Кетчуп", "0,00", "15", ""],
["", "gorchicza", "Горчица", "0,00", "15", ""]

            ],

            "Добавки и Мезета": [
                ["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "byalo-sirene", "Бяло сирене", "0,70", "50", ""],
["", "topeno-sirene", "Топено сирене", "0,00", "50", ""],
["", "pusheno-sirene", "Пушено сирене", "0,00", "50", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "lukankov-salam", "Луканков салам", "0,70", "50", ""],
["", "bekon", "Бекон", "0,70", "50", ""],
["", "shpek", "Шпек", "0,70", "50", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "zelenchuk-po-izbor", "Зеленчук по избор", "0,00", "50", ""],
["", "riba-ton", "Риба тон", "0,70", "50", ""],
["", "svinsko-file", "Свинско филе", "0,70", "50", ""],
["", "pileshko-file", "Пилешко филе", "0,70", "50", ""]

            ],

            "desserts": [
                ["", "panirani-plodove-s-topka-sladoled", "Панирани плодове с топка сладолед", "2,80", "", ""],
["", "plodova-salata", "Плодова салата", "2,10", "200", ""],
["", "palachinka", "Палачинка", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/185976.JPG?width=302"],
["", "czedeno-kiselo-mlyako", "Цедено кисело мляко", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/185977.JPG?width=302"],
["", "domashen-techen-shokolad", "Домашен течен шоколад", "1,40", "100", "https://images.deliveryhero.io/image/fd-bg/Products/660354.JPG?width=302"]

            ],

            "Пърленки": [
                ["", "prlenka-ss-sirena", "Пърленка със сирена", "1,40", "230", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "230", ""],
["", "kashkavalena-prlenka", "Кашкавалена пърленка", "1,40", "230", ""],
["", "prlenka-natyur", "Пърленка натюр", "0,70", "180", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "180", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/853729.jpg?width=302"]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "staropramen-ken", "Старопрамен кен", "2,10", "", ""],
["", "stela-ken", "Стела кен", "2,10", "", ""],
["", "kamenicza-ken", "Каменица кен", "1,40", "", ""],
["", "burgasko-ken", "Бургаско кен", "1,40", "", ""]

            ]
        }', 
        'slug' => 'pizza-bar-simonelli',
        'business_name' => 'Pizza - Bar Simonelli',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'бул. Христо Ботев 158',
        'address_additional' => '',
        'coords_x' => '43.4023193',
        'coords_y' => '24.62559164',
        'phone' => '+35964830003',
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
                ["", "picza-24sm--picza-40sm", "Пица 24см + Пица 40см", "13,30", "", ""],
["", "picza-30sm--picza-40sm", "Пица 30см + Пица 40см", "15,40", "", ""],
["", "picza-40sm--picza-40sm", "Пица 40см + Пица 40см", "18,20", "", ""],
["", "picza-24sm--picza-24sm", "Пица 24см + Пица 24см", "7,00", "", ""],
["", "przhen-oriz-s-zelenchuczi-yajcze-i-pile--torta-po-izbor", "Пържен ориз с зеленчуци, яйце и пиле + торта по избор", "4,90", "", ""],
["", "yajchen-nudls-s-zelenchuczi-yajcze-i-pile--torta-po-izbor", "Яйчен нудълс с зеленчуци, яйце и пиле + торта по избор", "4,90", "", ""],
["", "picza-24sm--picza-30sm", "Пица 24см + Пица 30см", "9,10", "", ""],
["", "picza-30sm--picza-30sm", "Пица 30см + Пица 30см", "11,90", "", ""]

            ],

            "Нови предложения": [
                ["", "przhen-oriz-skaridi", "Пържен ориз скариди", "4,90", "700", ""],
["", "przhen-oriz-s-pile", "Пържен ориз с пиле", "4,20", "700", ""],
["", "przhen-oriz-s-zelenchuczi-700gr", "Пържен ориз с зеленчуци 700гр", "3,50", "", ""],
["", "spageti-s-zelenchuczi", "Спагети с зеленчуци", "3,50", "700", ""],
["", "spageti-s-pile", "Спагети с пиле", "4,20", "700", ""],
["", "spageti-ss-skaridi", "Спагети със скариди", "4,90", "700", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "3,50", "500", "https://images.deliveryhero.io/image/fd-bg/Products/564446.jpg?width=302"],
["", "cherikula-salata", "Черикула салата", "4,20", "350", ""],
["", "salata-zdrave", "Салата здраве", "4,20", "400", ""],
["", "tribagreknik-salata", "Трибагрекник салата", "4,20", "500", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "500", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "450", ""],
["", "meshana-salata", "Мешана салата", "4,20", "450", ""],
["", "salata-sandokan", "Салата Сандокан", "4,90", "450", ""],
["", "salata-ariya", "Салата Ария", "5,60", "400", ""]

            ],

            "starters": [
                ["", "panirani-topeni-sirencza-ss-sladko-ot-borovinki", "Панирани топени сиренца със сладко от боровинки", "4,90", "200", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/564443.jpg?width=302"],
["", "susameni-pileshki-prchiczi", "Сусамени пилешки пръчици", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/564444.jpg?width=302"],
["", "panirani-kalmari-s-mlechen-chesnov-sos", "Панирани калмари с млечен чеснов сос", "5,60", "250", "https://images.deliveryhero.io/image/fd-bg/Products/616498.jpg?width=302"],
["", "presni-khlebni-topcheta", "Пресни хлебни топчета", "2,10", "300", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "3,50", "250", ""],
["", "kartofeni-rezanki", "Картофени резанки", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/564435.jpg?width=302"],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "250", "https://images.deliveryhero.io/image/fd-bg/Products/564440.jpg?width=302"],
["", "pileshki-khapki-s-medena-gorchicza", "Пилешки хапки с медена горчица", "4,20", "200", ""],
["", "kri-pileshki-khapki", "Къри пилешки хапки", "4,20", "200", ""],
["", "khrupkavi-pileshki-bonfilencza", "Хрупкави пилешки бонфиленца", "4,20", "250", "https://images.deliveryhero.io/image/fd-bg/Products/564445.jpg?width=302"],
["", "mamini-kyuftencza-s-kartofi-pecheni-a-gril", "Мамини кюфтенца с картофи печени а грил", "4,20", "350", ""],
["", "pecheni-kartofi-ss-sirene-i-kashkaval", "Печени картофи със сирене и кашкавал", "4,20", "500", ""],
["", "zapecheni-kartofi-s-pile", "Запечени картофи с пиле", "4,20", "500", ""],
["", "proletni-rulcza", "Пролетни рулца", "2,80", "150", ""],
["", "kartofi-sote", "Картофи Соте", "2,10", "300", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "margarita-de-luks", "Маргарита де лукс", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564349.jpg?width=302"],
["", "chinkue-paczoni", "Чинкуе пацони", "4,20", "", ""],
["", "vege", "Веге", "4,20", "", ""],
["", "balkanska-picza", "Балканска пица", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564353.jpg?width=302"],
["", "tribagra-picza", "Трибагра пица", "4,20", "", ""],
["", "gabriela-picza", "Габриела пица", "4,20", "", ""],
["", "shopska-picza", "Шопска пица", "4,20", "", ""],
["", "vegana-picza", "Вегана пица", "4,20", "", ""],
["", "staroselska-picza", "Староселска пица", "4,20", "", ""],
["", "selska-picza", "Селска пица", "4,20", "", ""],
["", "khavajska-picza", "Хавайска пица", "4,20", "", ""],
["", "meksiko-picza", "Мексико пица", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564364.jpg?width=302"],
["", "peperoni-maks", "Пеперони Макс", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564365.jpg?width=302"],
["", "mestna-mesna-picza", "Местна месна пица", "4,20", "", ""],
["", "mestna-mesna-2-picza", "Местна месна 2 пица", "4,20", "", ""],
["", "mesni-topki", "Месни топки", "4,20", "", ""],
["", "anglijska-zakuska-picza", "Английска закуска пица", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564369.jpg?width=302"],
["", "amerikanski-burger-picza", "Американски бургер пица", "4,20", "", ""],
["", "vulkano-picza", "Вулкано пица", "4,20", "", ""],
["", "ispanska-picza", "Испанска пица", "4,20", "", ""],
["", "princzesa-picza", "Принцеса пица", "4,20", "", ""],
["", "rancho-picza", "Ранчо пица", "4,20", "", ""],
["", "nikulden-picza", "Никулден пица", "4,20", "", ""],
["", "moyata-paczo-picza", "Моята Пацо пица", "4,20", "", ""],
["", "kashkavalena-picza", "Кашкавалeнa пица", "3,50", "", ""],
["", "brusketicza", "Брускетица", "4,20", "", ""],
["", "indijsko-pile-picza", "Индийско пиле пица", "4,20", "", ""],
["", "byalo-pile-picza", "Бяло пиле пица", "4,20", "", ""],
["", "okeana-picza", "Океана пица", "4,20", "", ""],
["", "vege-vulkano", "Веге Вулкано", "4,20", "", ""],
["", "brokolina", "Броколина", "4,20", "", ""],
["", "falafelina", "Фалафелина", "4,20", "", ""],
["", "falavegana", "Фалавегана", "4,20", "", ""],
["", "nyu-jork-khot-dog", "Ню Йорк Хот Дог", "4,20", "", ""],
["", "teksasko-bbq", "Тексаско BBQ", "4,20", "", ""],
["", "picza-koko", "Пица Коко", "4,20", "", ""]

            ],

            "Специални пици": [
                ["", "proshuto", "Прошуто", "4,90", "", ""],
["", "somga-picza", "Сьомга пица", "4,90", "", ""],
["", "pekinska-paticza", "Пекинска патица", "4,90", "", ""],
["", "pushena-pujka", "Пушена Пуйка", "4,90", "", ""],
["", "picza-manatarka", "Пица Манатарка", "4,90", "", ""]

            ],

            "sandwiches": [
                ["", "pileshki-sandvich", "Пилешки сандвич", "5,60", "500", "https://images.deliveryhero.io/image/fd-bg/Products/646455.jpg?width=302"],
["", "delikatesen-sandvich", "Деликатесен сандвич", "4,90", "500", ""],
["", "vege-sandvich", "Веге сандвич", "4,90", "500", ""],
["", "sandvich-s-bekon", "Сандвич с бекон", "4,90", "500", ""]

            ],

            "Двойни бургери": [
                ["", "vegetarianski-burger", "Вегетариански бургер", "4,90", "450", "https://images.deliveryhero.io/image/fd-bg/Products/564428.jpg?width=302"],
["", "teleshki-burger", "Телешки бургер", "4,90", "450", "https://images.deliveryhero.io/image/fd-bg/Products/564429.jpg?width=302"],
["", "pile-kri-burger", "Пиле къри бургер", "4,90", "450", ""],
["", "pileshki-burger", "Пилешки бургер", "4,90", "450", ""],
["", "khrupkavo-pile", "Хрупкаво пиле", "5,60", "450", ""]

            ],

            "Основни ястия": [
                ["", "przhena-pushena-nadenichka-s-kartofeni-dyukseli-i-selska-razyadka", "Пържена пушена наденичка с картофени дюксели и селска разядка", "4,90", "350", ""]

            ],

            "sushi": [
                ["", "khoso-maki-krastavicza", "Хосо Маки Краставица", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/564387.jpg?width=302"],
["", "khoso-maki-avokado", "Хосо Маки Авокадо", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/564388.jpg?width=302"],
["", "epik-sushi-rol", "Епик суши рол", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/564389.jpg?width=302"],
["", "sushi-burito-s-pileshko", "Суши бурито с пилешко", "7,00", "", ""],
["", "sushi-sandvich", "Суши сандвич", "7,00", "", ""],
["", "filadelfiya-rol", "Филаделфия рол", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564392.jpg?width=302"],
["", "kaliforniya-rol", "Калифорния рол", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/564393.jpg?width=302"],
["", "bostn-sushi-rol", "Бостън суши рол", "4,20", "", ""],
["", "unagi-sushi-rol", "Унаги суши рол", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564395.jpg?width=302"],
["", "futo-maki-somga", "Футо Маки Сьомга", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564396.jpg?width=302"],
["", "khoso-maki-somga", "Хосо Маки Сьомга", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564397.jpg?width=302"],
["", "khoso-maki-skarida", "Хосо Маки Скарида", "4,20", "", ""],
["", "nigiri-somga", "Нигири Сьомга", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/564399.jpg?width=302"],
["", "nigiri-skarida", "Нигири Скарида", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/564400.jpg?width=302"],
["", "nigiri-zmiorka", "Нигири Змиорка", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/564401.jpg?width=302"],
["", "futo-maki-filadelfiya", "Футо Маки Филаделфия", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564403.jpg?width=302"],
["", "somga-rol", "Сьомга рол", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/646434.jpg?width=302"],
["", "uramaki-khrupkavo-pile", "Урамаки хрупкаво пиле", "4,90", "", ""],
["", "krispi-skarida", "Криспи скарида", "4,90", "", ""],
["", "futo-krispi", "Футо Криспи", "5,60", "", ""]

            ],

            "Суши сетове": [
                ["", "sushi-miks", "Суши микс", "18,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/564404.jpg?width=302"],
["", "set-za-dvama", "Сет за двама", "12,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/564405.jpg?width=302"],
["", "filadelfiya-set", "Филаделфия сет", "12,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/564406.jpg?width=302"],
["", "somga-set", "Сьомга Сет", "16,10", "", ""]

            ],

            "Добавки за суши": [
                ["", "soev-sos", "Соев сос", "0,70", "", ""],
["", "unagi-sos", "Унаги сос", "0,70", "", ""],
["", "pikantna-majoneza", "Пикантна майонеза", "0,70", "", ""],
["", "drakon-sos", "Дракон сос", "0,70", "", ""],
["", "usabi", "Усаби", "0,70", "", ""],
["", "dzhindzhifil", "Джинджифил", "0,70", "", ""]

            ],

            "Тайландска кухня": [
                ["", "przhen-oriz-s-presni-zelenchuczi-i-yajcze", "Пържен ориз с пресни зеленчуци и яйце", "4,90", "500", "https://images.deliveryhero.io/image/fd-bg/Products/564408.jpg?width=302"],
["", "yajchen-nudls-s-presni-zelenchuczi-i-yajcze", "Яйчен нудълс с пресни зеленчуци и яйце", "4,90", "500", ""],
["", "orizovi-spageti-s-presni-zelenchuczi-i-yajcze", "Оризови спагети с пресни зеленчуци и яйце", "4,90", "500", "https://images.deliveryhero.io/image/fd-bg/Products/564410.jpg?width=302"],
["", "pile-s-kashu", "Пиле с кашу", "7,00", "600", "https://images.deliveryhero.io/image/fd-bg/Products/564424.jpg?width=302"],
["", "teleshko-s-luk", "Телешко с лук", "7,00", "600", "https://images.deliveryhero.io/image/fd-bg/Products/564426.jpg?width=302"],
["", "miks-uok-pileshko-i-teleshko", "Микс уок пилешко и телешко", "7,00", "600", "https://images.deliveryhero.io/image/fd-bg/Products/564427.jpg?width=302"],
["", "teleshko-s-bambuk-i-gbi", "Телешко с бамбук и гъби", "7,00", "600", "https://images.deliveryhero.io/image/fd-bg/Products/646439.jpg?width=302"],
["", "teleshko-s-bosilek", "Телешко с босилек", "7,00", "600", ""],
["", "pileshko-s-bosilek", "Пилешко с босилек", "7,00", "600", ""],
["", "skaridi-s-bosilek", "Скариди с босилек", "7,00", "600", ""],
["", "udon-spageti-s-khrupkavo-pileshko-i-yakiniko-sos", "Удон Спагети с Хрупкаво Пилешко и Якинико сос", "7,00", "550", ""]

            ],

            "Комбо меню": [
                ["", "yajchen-nudls-s-pile--przhen-oriz-s-pile--proletni-rulcza-ili-khrupkavi-triguni-s-kri", "Яйчен нудълс с пиле + Пържен ориз с пиле + Пролетни рулца или хрупкави тригуни с къри", "10,50", "", ""],
["", "yajchen-nudls-s-pile--filadelfiya-rol-ili-kaliforniya-rol-4br", "Яйчен нудълс с пиле + Филаделфия рол  или калифорния рол (4бр)", "7,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/564471.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/564472.jpg?width=302"]

            ],

            "sauces": [
                ["", "medena-gorchicza", "Медена горчица", "0,70", "70", ""],
["", "chesnov-sos-bbq", "Чеснов сос BBQ", "0,70", "70", ""],
["", "chili-sos", "Чили сос", "0,70", "70", ""],
["", "domaten-sos", "Доматен сос", "0,70", "70", ""],
["", "ketchup-heinz", "Кетчуп Heinz", "0,70", "70", ""],
["", "salaten-krem", "Салатен крем", "0,70", "70", ""],
["", "chesnov-mlechen-sos", "Чеснов Млечен сос", "0,70", "70", ""],
["", "sashe-majoneza", "Саше Майонеза", "0,00", "12", ""],
["", "sashe-gorchicza", "Саше Горчица", "0,00", "12", ""],
["", "sashe-katchup", "Саше Катчуп", "0,00", "12", ""],
["", "sriracha-chili", "Срирача чили", "0,70", "70", ""],
["", "sambal-chili", "Самбал чили", "0,70", "70", ""],
["", "soev-sos", "Соев сос", "0,70", "70", ""]

            ],

            "wine": [
                ["", "pizza-pasta-wine---byalo", "Pizza pasta wine - бяло", "10,50", "750", ""],
["", "pizza-pasta-wine---cherveno", "Pizza pasta wine - червено", "10,50", "750", ""],
["", "pizza-pasta-wine---roze", "Pizza pasta wine - розе", "10,50", "750", ""],
["", "kvantum-sovinon-blan", "Квантум Совиньон блан", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/905001.jpg?width=302"],
["", "kvantum-roze-pino-noar-i-sira", "Квантум Розе Пино Ноар и Сира", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/905002.jpg?width=302"],
["", "kvantum-sira-i-kaberne-sovinon", "Квантум Сира и Каберне Совиньон", "10,50", "750", "https://images.deliveryhero.io/image/fd-bg/Products/905003.jpg?width=302"],
["", "paradiso-mediteraneo-roze-ot-grenash-noar-francziya", "Парадисо Медитеранео Розе от Гренаш Ноар Франция", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/905004.jpg?width=302"],
["", "paradiso-mediteraneo-sira-francziya", "Парадисо Медитеранео Сира Франция", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/905005.jpg?width=302"],
["", "montekampo-zonin-pino-gridzho-italiya", "Монтекампо Зонин Пино Гриджо Италия", "14,00", "750", "https://images.deliveryhero.io/image/fd-bg/Products/905008.jpg?width=302"],
["", "montekampo-montepulchano-dabruczo-italiya", "Монтекампо Монтепулчано д’Абруцо Италия", "14,00", "750", "https://images.deliveryhero.io/image/fd-bg/Products/905009.jpg?width=302"],
["", "nelsn-klifs-sovinon-blan-nova-zelandiya", "Нелсън Клифс Совиньон Блан Нова Зеландия", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/905010.jpg?width=302"],
["", "domejn-bojar-roze", "Домейн Бойар Розе", "8,40", "750", ""]

            ]
        }', 
        'slug' => 'pizza-pazzo',
        'business_name' => 'Pizza Pazzo',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'ул. Георги Кочев 13',
        'address_additional' => '',
        'coords_x' => '43.4139086',
        'coords_y' => '24.6315893',
        'phone' => '+35964801999',
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
                ["", "pile-v-smetanov-sos", "Пиле в сметанов сос", "5,60", "400", ""],
["", "pile-czezar", "Пиле Цезар", "5,60", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "khrupkavi-moczareleni-prchiczi-s-mlechen-sos", "Хрупкави моцарелени пръчици с млечен сос", "4,20", "250", ""],
["", "kalmari-na-skara-s-limonov-dresing", "Калмари на скара с лимонов дресинг", "4,90", "150", ""],
["", "pileshki-shishcheta-s-garnitura-domati", "Пилешки шишчета с гарнитура домати", "5,60", "", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "2,80", "200", ""]

            ],

            "salads": [
                ["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "selska-salata", "Селска салата", "2,80", "360", ""],
["", "meshana-salata", "Мешана салата", "2,80", "300", ""],
["", "salata-atina", "Салата Атина", "3,50", "280", "https://images.deliveryhero.io/image/fd-bg/Products/487829.jpg?width=302"],
["", "salata-don-domat", "Салата Дон домат", "2,80", "300", ""],
["", "salata-snezhanka", "Салата Снежанка", "2,80", "260", ""],
["", "katk", "Катък", "2,80", "260", ""],
["", "pecheni-piperki-s-chesn", "Печени пиперки с чесън", "2,80", "200", ""],
["", "domati-s-chesn-i-sirene", "Домати с чесън и сирене", "2,10", "250", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "morkovi-s-limon", "Моркови с лимон", "2,10", "200", ""],
["", "zelena-salata", "Зелена салата", "2,80", "300", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "150", ""],
["", "pstra-salata", "Пъстра салата", "3,50", "350", ""],
["", "salata-tono", "Салата Тоно", "3,50", "400", ""],
["", "pileshka-mozajka", "Пилешка мозайка", "3,50", "350", ""],
["", "salata-marinela", "Салата Маринела", "3,50", "350", ""],
["", "iskam-oshhe", "Искам още", "2,80", "300", "https://images.deliveryhero.io/image/fd-bg/Products/487846.jpg?width=302"],
["", "jo-kho-kho", "Йо-Хо-Хо", "2,80", "360", ""],
["", "midi-s-luk", "Миди с лук", "2,80", "150", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "salata-morski-dar", "Салата Морски дар", "8,40", "400", ""],
["", "meksikanska-salata", "Мексиканска салата", "2,80", "300", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "400", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "400", ""],
["", "tarator", "Таратор", "1,40", "400", ""],
["", "zelenchukova-supichka-ss-smetana-i-sirene", "Зеленчукова супичка със сметана и сирене", "1,40", "400", ""]

            ],

            "starters": [
                ["", "zapecheno-sirene-s-med-i-orekhi", "Запечено сирене с мед и орехи", "2,10", "130", ""],
["", "topeni-sirencza-s-borovinki", "Топени сиренца с боровинки", "3,50", "200", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,10", "150", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,80", "180", ""],
["", "brokoli-pane", "Броколи пане", "2,80", "200", ""],
["", "sirene-orli", "Сирене орли", "3,50", "200", ""],
["", "kashkaval-orli", "Кашкавал орли", "3,50", "200", ""],
["", "rolcza-ot-raczi-pane", "Ролца от раци пане", "2,80", "200", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "200", ""],
["", "khrupkavi-filencza", "Хрупкави филенца", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/487859.jpg?width=302"],
["", "pileshki-khapki-v-susam", "Пилешки хапки в сусам", "4,20", "200", "https://images.deliveryhero.io/image/fd-bg/Products/487860.jpg?width=302"],
["", "svinski-ushi", "Свински уши", "4,20", "200", ""],
["", "svinski-ezik-v-maslo", "Свински език в масло", "2,80", "100", ""],
["", "svinski-ezik-pane", "Свински език пане", "3,50", "150", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,20", "100", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "4,90", "150", ""],
["", "pileshki-krilcza-s-barbekyu-sos", "Пилешки крилца с барбекю сос", "3,50", "300", ""],
["", "omlet-asorti", "Омлет асорти", "3,50", "300", "https://images.deliveryhero.io/image/fd-bg/Products/487867.jpg?width=302"],
["", "solena-palachinka", "Солена палачинка", "2,10", "200", ""]

            ],

            "Картофки": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "220", ""],
["", "przheni-kartofi-po-selski", "Пържени картофи по селски", "2,10", "200", ""],
["", "przheni-kartofi-po-selski-ss-sirene", "Пържени картофи по селски със сирене", "2,10", "220", ""],
["", "pikantni-przheni-kartofi", "Пикантни пържени картофи", "2,10", "200", ""],
["", "pikantni-przheni-kartofi-ss-sirene", "Пикантни пържени картофи със сирене", "2,10", "220", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "2,80", "150", ""]

            ],

            "Запеканки": [
                ["", "kartofi-zapecheni-s-pileshko-meso", "Картофи, запечени с пилешко месо", "2,80", "400", ""],
["", "kartofi-zapecheni-ss-sirene", "Картофи, запечени със сирене", "2,80", "400", ""],
["", "kartofen-paj", "Картофен пай", "4,20", "400", ""],
["", "kartofeno-izkushenie", "Картофено изкушение", "4,20", "500", ""],
["", "brokoli-zapecheni-ss-sirene-i-kashkaval", "Броколи, запечени със сирене и кашкавал", "2,80", "400", "https://images.deliveryhero.io/image/fd-bg/Products/487880.jpg?width=302"],
["", "brokoli-zapecheni-ss-sino-sirene-smetana-i-kashkaval", "Броколи, запечени със синьо сирене, сметана и кашкавал", "4,20", "400", ""]

            ],

            "Ризото и Спагети": [
                ["", "rizoto-s-pileshko-file-i-parmezan", "Ризото с пилешко филе и пармезан", "4,20", "300", ""],
["", "rizoto-s-morski-darove-i-parmezan", "Ризото с морски дарове и пармезан", "4,90", "300", ""],
["", "rizoto-s-gorski-gbi-i-parmezan", "Ризото с горски гъби и пармезан", "4,20", "300", ""],
["", "rizoto-ss-zelenchuczi-i-parmezan", "Ризото със зеленчуци и пармезан", "3,50", "300", "https://images.deliveryhero.io/image/fd-bg/Products/487886.jpg?width=302"],
["", "spageti-bavariya", "Спагети Бавария", "4,20", "430", "https://images.deliveryhero.io/image/fd-bg/Products/487888.jpg?width=302"],
["", "spageti-piza", "Спагети Пиза", "4,20", "430", ""],
["", "spageti-vegetariana", "Спагети Вегетариана", "3,50", "430", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,20", "430", ""],
["", "linguini-s-riba-ton", "Лингуини с риба тон", "3,50", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "430", ""],
["", "linguini-ss-spanak-susheni-domati-i-rokota", "Лингуини със спанак, сушени домати и рокота", "3,50", "350", ""]

            ],

            "pizza": [
                ["", "picza-bavariya", "Пица Бавария", "5,60", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "gbena-picza", "Гъбена пица", "3,50", "", ""],
["", "kapreze", "Капрезе", "4,20", "", ""],
["", "khavaj", "Хавай", "4,20", "", ""],
["", "meksikana", "Мексикана", "4,20", "", ""],
["", "delmare", "Делмаре", "5,60", "", ""],
["", "dyavolo", "Дяволо", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/487903.jpg?width=302"],
["", "vlcho", "Вълчо", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/487904.jpg?width=302"],
["", "zelenchukova", "Зеленчукова", "3,50", "", ""],
["", "chetiri-sirena", "Четири сирена", "4,90", "", ""],
["", "laskala", "Ласкала", "4,20", "", ""],
["", "proshuto", "Прошуто", "4,90", "", ""],
["", "pollo", "Полло", "4,90", "", ""],
["", "korleone", "Корлеоне", "4,20", "", ""],
["", "zrncho", "Зрънчо", "3,50", "", ""],
["", "rio", "Рио", "4,90", "", ""],
["", "salami", "Салами", "4,20", "", ""],
["", "primavera", "Примавера", "3,50", "", ""],
["", "toskana", "Тоскана", "4,20", "", ""],
["", "khami", "Хами", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/487897.jpg?width=302"],
["", "sicziliana", "Сицилиана", "5,60", "", ""]

            ],

            "Добавки и сосове": [
                ["", "kiseli-krastavichki", "Кисели Краставички", "0,00", "50", ""],
["", "gbi", "Гъби", "0,00", "50", ""],
["", "riba-ton", "Риба тон", "1,40", "50", ""],
["", "rolcza-ot-raczi", "Ролца от раци", "0,70", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "yajcze", "Яйце", "0,00", "60", ""],
["", "bekon", "Бекон", "0,70", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "maslini", "Маслини", "0,70", "50", ""],
["", "topeno-sirene", "Топено сирене", "0,70", "50", ""],
["", "chushki", "Чушки", "0,00", "50", ""],
["", "domat", "Домат", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "gben-sos", "Гъбен сос", "0,70", "100", ""],
["", "sos-chetiri-sirena", "Сос Четири сирена", "1,40", "100", ""],
["", "chili", "Чили", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""]

            ],

            "Ястия": [
                ["", "svinsko-kontra-file", "Свинско контра филе", "7,00", "300", "https://images.deliveryhero.io/image/fd-bg/Products/487944.jpg?width=302"],
["", "svinsko-bon-file", "Свинско бон филе", "7,00", "300", ""],
["", "svinsko-majorka", "Свинско Майорка", "7,00", "300", ""],
["", "svinski-drob", "Свински дроб", "3,50", "200", ""],
["", "speczialitet-bavariya", "Специалитет Бавария", "9,80", "450", "https://images.deliveryhero.io/image/fd-bg/Products/487931.jpg?width=302"],
["", "balkanska-meshanicza", "Балканска мешаница", "7,00", "350", ""],
["", "pile-po-grczki", "Пиле по гръцки", "5,60", "350", ""],
["", "pile-s-bilki", "Пиле с билки", "5,60", "380", ""],
["", "pileshko-file-s-pyure-ot-brokoli-i-sos-ot-sirena", "Пилешко филе с пюре от броколи и сос от сирена", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/487937.jpg?width=302"],
["", "pile-italiya", "Пиле Италия", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/487938.jpg?width=302"],
["", "pileshko-bon-file-s-bilkova-korichka-i-sotirani-gbi", "Пилешко бон филе с билкова коричка и сотирани гъби", "5,60", "300", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "2,80", "200", ""],
["", "svinsko-po-bavarski", "Свинско по баварски", "7,00", "350", ""],
["", "svinsko-s-gorski-gbi", "Свинско с горски гъби", "7,00", "350", ""],
["", "pile-zhulien", "Пиле Жулиен", "5,60", "320", ""],
["", "pile-popaj", "Пиле Попай", "5,60", "400", ""],
["", "pile-dizhon", "Пиле Дижон", "5,60", "350", ""]

            ],

            "Ястия в гювече": [
                ["", "sirene-po-shopski", "Сирене по шопски", "2,80", "250", ""],
["", "sirene-po-trakijski", "Сирене по тракийски", "4,20", "300", ""],
["", "bolyarsko-gyuveche", "Болярско гювече", "4,20", "350", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/487952.jpg?width=302"],
["", "kavrma-v-omlet", "Кавърма в омлет", "4,90", "400", ""],
["", "katino-meze", "Катино мезе", "4,90", "300", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,20", "300", ""]

            ],

            "Ястия на сач": [
                ["", "pileshki-sach", "Пилешки сач", "9,80", "", ""],
["", "svinski-sach", "Свински сач", "9,80", "", ""],
["", "tri-vida-meso-sach", "Три вида месо сач", "11,20", "", ""],
["", "pile-tropikana", "Пиле Тропикана", "7,70", "550", ""],
["", "riben-sach", "Рибен сач", "8,40", "400", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "5,60", "500", ""],
["", "sach-fantaziya", "Сач Фантазия", "7,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/487962.jpg?width=302"]

            ],

            "fish": [
                ["", "byala-riba-pane", "Бяла риба пане", "3,50", "200", ""],
["", "midi-pane", "Миди пане", "2,80", "150", ""],
["", "kalmari-pane-s-riben-sos", "Калмари пане с рибен сос", "4,90", "200", ""],
["", "kalmari-pipala", "Калмари пипала", "4,90", "200", ""],
["", "sharan", "Шаран", "4,20", "200", ""],
["", "somgova-pstrva-file-v-pergament", "Сьомгова пъстърва филе в пергамент", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/487969.jpg?width=302"],
["", "pstrva-file", "Пъстърва филе", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/487970.jpg?width=302"],
["", "safrid", "Сафрид", "3,50", "200", ""],
["", "czacza", "Цаца", "2,10", "200", "https://images.deliveryhero.io/image/fd-bg/Products/487973.jpg?width=302"],
["", "somgova-pstrva-file", "Сьомгова пъстърва филе", "5,60", "200", ""],
["", "somgova-pstrva-file-ss-sotirani-kartofi-i-koprov-sos", "Сьомгова пъстърва филе със сотирани картофи и копъров сос", "7,70", "350", ""]

            ],

            "grill": [
                ["", "svinska-przhola---vrat", "Свинска пържола - врат", "4,90", "200", ""],
["", "svinski-grdi", "Свински гърди", "4,90", "200", ""],
["", "trojka-kyufteta", "Тройка Кюфтета", "4,20", "340", ""],
["", "trojka-kebapcheta", "Тройка Кебапчета", "4,20", "340", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "2,80", "100", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,80", "200", ""],
["", "dvoen-shashlik", "Двоен шашлик", "11,20", "800", ""],
["", "golyam-shashlik", "Голям шашлик", "8,40", "500", ""],
["", "pileshki-kareta-s-kashkaval", "Пилешки карета с  кашкавал", "5,60", "330", ""],
["", "pileshka-przhola---butche", "Пилешка пържола - бутче", "4,90", "200", ""],
["", "pileshka-przhola---file", "Пилешка пържола - филе", "4,90", "200", ""],
["", "svinski-kareta", "Свински карета", "6,30", "200", ""],
["", "svinsko-bon-file-na-skara", "Свинско бон филе на скара", "6,30", "300", ""]

            ],

            "Детско меню": [
                ["", "detsko-menyu", "Детско меню", "6,30", "", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "domati", "Домати", "0,70", "100", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "zele-i-mokrovi", "Зеле и мокрови", "0,70", "100", ""],
["", "lyutenicza-s-luk", "Лютеница с лук", "0,70", "100", ""],
["", "brokoli", "Броколи", "0,70", "100", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "0,70", "150", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "0,70", "150", ""],
["", "varen-oriz", "Варен ориз", "0,70", "100", ""],
["", "apetitka", "Апетитка", "1,40", "150", ""]

            ],

            "bread": [
                ["", "prlenka", "Пърленка", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/488002.jpg?width=302"],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "", ""],
["", "bageta-s-chesnovo-maslo", "Багета с чесново масло", "1,40", "", ""],
["", "fokacha-s-podpravki", "Фокача с подправки", "1,40", "", ""]

            ],

            "Сухи мезета": [
                ["", "sirene", "Сирене", "1,40", "100", ""],
["", "kashkaval", "Кашкавал", "1,40", "100", ""],
["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""]

            ],

            "desserts": [
                ["", "palachinki-po-izbor", "Палачинки по избор", "1,40", "", ""],
["", "parche-torta", "Парче торта", "2,10", "", ""],
["", "venecziya", "Венеция", "2,10", "250", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/642672.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/902213.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/642673.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/642674.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/902214.jpg?width=302"]

            ],

            "drinks": [
                ["", "mineralna-voda-baldaran", "Минерална вода Балдаран", "0,70", "", ""],
["", "stela-artoa", "Стела Артоа", "2,10", "330", ""],
["", "tuborg", "Туборг", "2,10", "330", ""],
["", "beks", "Бекс", "2,10", "330", ""],
["", "beks-000", "Бекс 0.00%", "2,10", "330", ""],
["", "khajneken", "Хайнекен", "2,10", "", ""],
["", "khajneken-000", "Хайнекен 0.00%", "2,10", "330", ""],
["", "stolichno-weiss", "Столично Weiss", "2,10", "400", ""],
["", "stolichno-bock", "Столично Bock", "2,10", "400", ""],
["", "zagorka-ipa", "Загорка IPA", "1,40", "330", ""],
["", "ariana-radler-ken", "Ариана радлер кен", "1,40", "330", ""],
["", "radeberger", "Radeberger", "2,10", "330", ""],
["", "erdinger", "Erdinger", "4,20", "500", ""],
["", "corona", "Corona", "3,50", "355", ""],
["", "budweiser", "Budweiser", "2,10", "330", ""],
["", "schofferhofer", "Schofferhofer", "3,50", "500", ""]

            ]
        }', 
        'slug' => 'restorant-picariya-bavariya',
        'business_name' => 'Ресторант-Пицария Бавария',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pleven',
        'region' => 'Pleven',
        'postal_code' => '5800',
        'address' => 'бул. Христо Ботев 48',
        'address_additional' => '',
        'coords_x' => '43.41079719',
        'coords_y' => '24.62627061',
        'phone' => '+359878464603; 359064831559',
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
