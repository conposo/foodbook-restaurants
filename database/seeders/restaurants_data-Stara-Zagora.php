<?php

use Carbon\Carbon;

$restaurants = [

    [
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "bread": [
                ["", "pitka", "Питка", "0,00", "", ""]

            ],

            "Аламинути и глезотийки": [
                ["", "panirano-file-khapki", "Панирано филе хапки", "2,80", "240", ""],
["", "przheni-tikvichki", "Пържени тиквички", "2,10", "200", ""],
["", "przheni-panirani-lukcheta", "Пържени панирани лукчета", "2,10", "200", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "przhola-svinska-vrat", "Пържола свинска врат", "4,20", "200", ""],
["", "bekon", "Бекон", "3,50", "200", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от Бут", "3,50", "", ""]

            ],

            "Бургери и Сандвичи": [
                ["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "2,10", "", ""],
["", "klub-sandvich-s-shunka-i-kashkaval--przheni-kartofi", "Клуб сандвич с шунка и кашкавал + пържени картофи", "2,80", "", ""],
["", "chijzburger-ss-svinsko", "Чийзбургер със свинско", "2,10", "", ""],
["", "chijzburger-s-teleshko", "Чийзбургер с телешко", "2,80", "", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "1,40", "", ""]

            ],

            "garnish": [
                ["", "przheni-kartofeni-topcheta", "Пържени картофени топчета", "2,10", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,80", "250", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", ""]

            ],

            "drinks": [
                ["", "mineralna-voda-kom", "Минерална вода Ком", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'skara-adonay',
        'business_name' => 'Скара Адонай',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'Ул. Любен Каравелов 78',
        'address_additional' => '',
        'coords_x' => '42.42707503',
        'coords_y' => '25.63766243',
        'phone' => '+359897927009',
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
["", "zelena-salata", "Зелена салата", "2,80", "300", ""],
["", "zele-i-morkovi", "Зеле и моркови", "2,10", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "350", ""],
["", "czezar", "Цезар", "4,90", "350", ""]

            ],

            "Принцеси": [
                ["", "s-kajma", "С кайма", "1,40", "180", ""],
["", "s-kajma-i-kashkaval", "С кайма и кашкавал", "1,40", "200", ""],
["", "s-kashkaval", "С кашкавал", "1,40", "180", ""],
["", "s-shunka-i-kashkaval", "С шунка и кашкавал", "1,40", "200", ""]

            ],

            "dunner": [
                ["", "sreden", "Среден", "2,10", "250", ""],
["", "golyam", "Голям", "2,80", "350", ""]

            ],

            "Тостери": [
                ["", "s-shunka-i-kashkaval", "С шунка и кашкавал", "2,10", "250", ""],
["", "s-bekon-i-kashkaval", "С бекон и кашкавал", "2,10", "250", ""],
["", "s-lukanka-i-kashkaval", "С луканка и кашкавал", "2,10", "250", ""]

            ],

            "Хамбургери": [
                ["", "s-pileshko", "С пилешко", "2,80", "350", ""],
["", "ss-svinsko", "Със свинско", "2,80", "350", ""],
["", "s-teleshko", "С телешко", "2,80", "350", ""]

            ],

            "Хот дог": [
                ["", "s-obiknoven-krenvirsh", "С обикновен кренвирш", "1,40", "200", ""],
["", "s-lukankov-krenvirsh", "С луканков кренвирш", "1,40", "200", ""]

            ],

            "others": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "pileshki-khapki", "Пилешки хапки", "5,60", "250", ""]

            ],

            "Солени катми": [
                ["", "ss-sirene", "Със сирене", "1,40", "200", ""],
["", "s-kashkaval", "С кашкавал", "2,10", "200", ""],
["", "ss-sirene-i-kashkaval", "Със сирене и кашкавал", "2,10", "200", ""],
["", "s-shunka-i-kashkaval", "С шунка и кашкавал", "2,10", "200", ""],
["", "s-shunka-i-topeno-sirene", "С шунка и топено сирене", "2,10", "200", ""]

            ],

            "Сладки катми": [
                ["", "s-shokolad", "С шоколад", "1,40", "200", ""],
["", "s-shokolad-i-banan", "С шоколад и банан", "1,40", "200", ""],
["", "ss-sladko", "Със сладко", "1,40", "200", ""],
["", "s-med", "С мед", "1,40", "180", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", ""],
["", "fanta-byala-praskova", "Fanta Бяла Праскова", "1,40", "500", ""],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "1,40", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""]

            ],

            "Безалкохолни напитки": [
                ["", "ajran", "Айран", "0,70", "", ""]

            ]
        }', 
        'slug' => 'maroni',
        'business_name' => 'Maroni',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'кв. Железник, ул. Младост 25',
        'address_additional' => '',
        'coords_x' => '42.4128354',
        'coords_y' => '25.5908034',
        'phone' => '+359899936696',
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
            
            "Гироси": [
                ["", "giros-s-pileshko-meso", "Гирос с пилешко месо", "1,40", "", ""],
["", "vegetarianski-giros", "Вегетариански гирос", "1,40", "350", ""],
["", "porcziya-giros-s-pileshko-meso", "Порция гирос с пилешко месо", "4,20", "500", ""],
["", "porcziya-giros-ss-svinsko-meso", "Порция гирос със свинско месо", "4,20", "500", ""],
["", "giros-kiprsko-khlebche-s-pileshko-meso", "Гирос Кипърско хлебче с пилешко месо", "2,10", "350", ""],
["", "giros-kiprsko-khlebche-ss-svinsko-meso", "Гирос Кипърско хлебче със свинско месо", "2,10", "350", ""],
["", "giros-ss-svinsko-meso", "Гирос със свинско месо", "1,40", "", ""]

            ],

            "others": [
                ["", "porcziya-kartofi-ss-sirene", "Порция картофи със сирене", "1,40", "240", ""],
["", "porcziya-kartofi-bez-sirene", "Порция картофи без сирене", "1,40", "200", ""],
["", "klub-sandvich", "Клуб Сандвич", "2,10", "300", ""]

            ],

            "drinks": [
                ["", "tonik-ken", "Тоник кен", "0,70", "330", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610019.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610020.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610035.jpg?width=302"],
["", "rosa-izvorna-voda", "Роса изворна вода", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610036.jpg?width=302"],
["", "rosa-izvorna-voda", "Роса изворна вода", "0,70", "750", "https://images.deliveryhero.io/image/fd-bg/Products/610038.jpg?width=302"],
["", "fanta-portokal", "Фанта Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610021.jpg?width=302"],
["", "fanta-byala-praskova", "Fanta Бяла Праскова", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610022.jpg?width=302"],
["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610023.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610025.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/610028.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/610029.jpg?width=302"],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610031.jpg?width=302"],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610032.jpg?width=302"],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610033.jpg?width=302"],
["", "fuzetea-mango-i-ananas-studen-chaj", "Fuzetea Манго и ананас, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/610034.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "750", "https://images.deliveryhero.io/image/fd-bg/Products/610037.jpg?width=302"]

            ],

            "beer": [
                ["", "ariana-ken", "Ариана кен", "0,70", "500", ""],
["", "zagorka-ken", "Загорка кен", "0,70", "500", ""],
["", "kamenicza-ken", "Каменица кен", "0,70", "500", ""],
["", "shumensko-ken", "Шуменско кен", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'gyros-stara-zagora',
        'business_name' => 'Gyros (Стара Загора)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул Пазарска 2',
        'address_additional' => '',
        'coords_x' => '42.42546245',
        'coords_y' => '25.62972333',
        'phone' => '+359899204500',
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
["", "kapreze", "Капрезе", "5,60", "350", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "salata-czezar", "Салата Цезар", "6,30", "350", ""],
["", "zelena-salata", "Зелена салата", "4,20", "300", ""],
["", "salata-domati-s-mus-ot-sirena", "Салата домати с мус от сирена", "3,50", "350", ""],
["", "svezha-salata-ss-zapecheno-sirene", "Свежа салата със запечено сирене", "4,20", "350", ""],
["", "miks-ot-zeleni-salati-s-khrupkav-kalmar", "Микс от зелени салати с хрупкав калмар", "5,60", "300", ""]

            ],

            "starters": [
                ["", "spanacheni-kyuftencza", "Спаначени кюфтенца", "4,90", "250", ""],
["", "svinski-rebra-s-lucheni-krgcheta", "Свински ребра с лучени кръгчета", "7,00", "350", ""],
["", "panirani-pileshki-khapki-s-topeno-sirene", "Панирани пилешки хапки с топено сирене", "6,30", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "khrupkavi-kalmari-s-limonov-dresing", "Хрупкави калмари с лимонов дресинг", "8,40", "300", ""],
["", "glazirani-svinski-khapki-s-fritirani-kartofi", "Глазирани свински хапки с фритирани картофи", "6,30", "350", ""],
["", "glazirani-pileshki-khapki-s-kartofi-i-pesto", "Глазирани пилешки хапки с картофи и песто", "6,30", "350", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "4,90", "300", ""],
["", "zapecheni-presni-kartofi-s-chesn-i-bilki", "Запечени пресни картофи с чесън и билки", "2,80", "300", ""],
["", "kalmari-s-uzo-i-kopr", "Калмари с узо и копър", "8,40", "250", ""]

            ],

            "pizza": [
                ["", "kalczone-zatvorena", "Калцоне-затворена", "5,60", "440", ""],
["", "picza-s-pileshko-role", "Пица с пилешко роле", "7,00", "400", ""],
["", "picza-ss-sirena", "Пица със сирена", "7,00", "450", ""],
["", "picza-beroe", "Пица Берое", "7,00", "500", ""],
["", "picza-s-pikanten-salam", "Пица с пикантен салам", "7,70", "450", ""],
["", "picza-s-lukanka", "Пица с луканка", "7,70", "450", ""],
["", "picza-ss-zelenchuczi", "Пица със зеленчуци", "6,30", "400", ""],
["", "picza-s-manatarki-rukola-i-proshuto", "Пица с манатарки, рукола и прошуто", "8,40", "400", ""],
["", "picza-la-kaza", "Пица Ла Каза", "7,00", "400", ""],
["", "margarita", "Маргарита", "4,90", "380", ""],
["", "kaprichoza", "Капричоза", "5,60", "440", ""],
["", "picza-ss-salam-chorizo", "Пица със салам Чоризо", "7,00", "400", ""],
["", "picza-polo", "Пица Поло", "7,00", "400", ""],
["", "picza-stela", "Пица Стела", "10,50", "400", ""],
["", "picza-chipola", "Пица Чипола", "7,00", "400", ""],
["", "picza-salami", "Пица Салами", "7,00", "400", ""],
["", "detsko-menyu", "Детско меню", "6,30", "280", ""]

            ],

            "Паста и Ризото": [
                ["", "pasta-boloneze", "Паста Болонезе", "5,60", "400", ""],
["", "pasta-karbonara", "Паста Карбонара", "5,60", "400", ""],
["", "pasta-s-pesto-i-cheri-domati", "Паста с песто и чери домати", "4,90", "350", ""],
["", "pasta-ss-somga-i-sos-alfredo", "Паста със сьомга и сос Алфредо", "6,30", "400", ""],
["", "krem-rizoto-s-pile", "Крем ризото с пиле", "5,60", "400", ""],
["", "rizoto-s-brokoli-i-manatarki", "Ризото с броколи и манатарки", "5,60", "350", ""]

            ],

            "fish": [
                ["", "file-ot-pstrva-s-garnitura-sotirani-presni-zelenchuczi", "Филе от пъстърва с гарнитура сотирани пресни зеленчуци", "8,40", "300", ""],
["", "file-ot-somga-ss-zadusheni-brokoli", "Филе от сьомга със задушени броколи", "11,90", "300", ""]

            ],

            "Основни ястия": [
                ["", "pile-kapreze", "Пиле Капрезе", "6,30", "400", ""],
["", "svinsko-bon-file-s-gorski-gbi", "Свинско бон филе с горски гъби", "7,00", "350", ""],
["", "teleshki-kyufteta-vrkhu-malka-prlenka-s-garnitura-domat-luk-i-razyadka", "Телешки кюфтета върху малка пърленка с гарнитура домат, лук и разядка", "6,30", "350", ""]

            ],

            "grill": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "300", ""],
["", "pileshko-file", "Пилешко филе", "5,60", "300", ""]

            ],

            "sauces": [
                ["", "mlechen-sos", "Млечен сос", "0,70", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "", ""],
["", "majoneza", "Майонеза", "0,70", "", ""],
["", "sladko-chili", "Сладко чили", "0,70", "", ""]

            ],

            "bread": [
                ["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,80", "", ""]

            ],

            "desserts": [
                ["", "chijzkejk", "Чийзкейк", "2,80", "", ""],
["", "biskvitena-torta-s-yagodi", "Бисквитена торта с ягоди", "2,80", "", ""],
["", "palachinka", "Палачинка", "2,10", "", ""],
["", "picza-nutela", "Пица Нутела", "2,80", "", ""]

            ]
        }', 
        'slug' => 'la-casa-di-amici',
        'business_name' => 'La Casa di Amici',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'Бул. “Цар Симеон Велики” 162',
        'address_additional' => '',
        'coords_x' => '42.426302',
        'coords_y' => '25.639336',
        'phone' => '+359884805090',
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
            
            "Хот дог Кен": [
                ["", "klasicheski", "Класически", "1,40", "", ""],
["", "krenvirsh-s-topeno-sirene", "Кренвирш с топено сирене", "2,10", "", ""],
["", "lukankov-krenvirsh", "Луканков кренвирш", "2,10", "", ""],
["", "makedonska-nadenicza-12", "Македонска наденица 1/2", "2,10", "", ""],
["", "lionska-nadenicza-12", "Лионска наденица 1/2", "2,10", "", ""],
["", "srbska-nadenicza-ss-sirene-12", "Сръбска наденица със сирене 1/2", "2,10", "", ""],
["", "amerikanski-khot-dog-s-krenvirsh", "Американски хот дог с кренвирш", "2,10", "", ""],
["", "amerikanski-khot-dog-s-krenvirsh-s-topeno-sirene", "Американски хот дог с кренвирш с топено сирене", "2,10", "", ""],
["", "amerikanski-khot-dog-s-lukankov-krenvirsh", "Американски хот дог с луканков кренвирш", "2,10", "", ""],
["", "amerikanski-khot-dog-s-makedonska-nadenicza", "Американски хот дог с македонска наденица", "2,10", "", ""],
["", "amerikanski-khot-dog-s-lionska-nadenicza", "Американски хот дог с лионска наденица", "2,10", "", ""],
["", "amerikanski-khot-dog-ss-srbska-nadenicza", "Американски хот дог със сръбска наденица", "2,10", "", ""],
["", "amerikanski-khot-dog-s-krenvirsh-i-zelenchuczi", "Американски хот дог с кренвирш и зеленчуци", "2,10", "", ""],
["", "amerikanski-khot-dog-s-krenvirsh-topeno-sirene-i-zelenchuczi", "Американски хот дог с кренвирш, топено сирене и зеленчуци", "2,10", "", ""],
["", "amerikanski-khot-dog-s-lukankov-krenvirsh-i-zelenchuczi", "Американски хот дог с луканков кренвирш и зеленчуци", "2,80", "", ""],
["", "amerikanski-khot-dog-s-makedonska-nadenicza-i-zelenchuczi", "Американски хот дог с македонска наденица и зеленчуци", "2,80", "", ""],
["", "amerikanski-khot-dog-s-lionska-nadenicza-i-zelenchuczi", "Американски хот дог с лионска наденица и зеленчуци", "2,80", "", ""],
["", "amerikanski-ss-srbska-nadenicza-i-zelenchuczi", "Американски със сръбска наденица и зеленчуци", "2,80", "", ""],
["", "bejbi", "Бейби", "0,70", "", ""]

            ],

            "Coca-Cola  напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/916622.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/916623.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/916624.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/916627.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926738.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926739.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926740.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/926741.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "750", "https://images.deliveryhero.io/image/fd-bg/Products/926742.jpg?width=302"]

            ],

            "drinks": [
                ["", "mineralna-voda-sevtopolis", "Минерална вода Севтополис", "0,00", "", ""],
["", "ajryan-balkan", "Айрян Балкан", "0,70", "330", ""],
["", "studen-chaj-xixo", "Студен чай Xixo", "0,00", "250", ""],
["", "energijna-napitka-hell", "Енергийна напитка Hell", "0,70", "250", ""],
["", "ajryan-balkan", "Айрян Балкан", "0,70", "500", ""],
["", "nektar-florina", "Нектар Флорина", "0,70", "250", ""],
["", "studen-chaj-san-benedeto", "Студен чай Сан Бенедето", "0,70", "500", ""],
["", "voda-sevtopolis", "Вода Севтополис", "0,70", "", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-shunka-i-kashkaval-domat-krastavicza", "Сандвич с шунка и кашкавал, домат, краставица", "1,40", "", ""],
["", "sandvich-lukanka-i-kashkaval-domat-krastavicza", "Сандвич луканка и кашкавал, домат, краставица", "1,40", "", ""],
["", "xxl-sandvich-s-lukanka-shunka-kashkaval-domat-krastavicza", "XXL сандвич с луканка, шунка, кашкавал, домат, краставица", "2,10", "", ""]

            ],

            "Хамбургери и джобове": [
                ["", "kashkaval", "Кашкавал", "1,40", "", ""],
["", "shunka-i-kashkaval", "Шунка и кашкавал", "2,10", "", ""],
["", "lukanka-i-kashkaval", "Луканка и кашкавал", "2,10", "", ""]

            ],

            "bread": [
                ["", "franzela", "Франзела", "0,00", "100", ""],
["", "pitka", "Питка", "0,00", "100", ""]

            ],

            "Скара Кен": [
                ["", "krenvirsh", "Кренвирш", "0,70", "", ""],
["", "krenvirsh-s-topeno-sirene", "Кренвирш с топено сирене", "0,70", "", ""],
["", "lukankov-krenvirsh", "Луканков кренвирш", "1,40", "", ""],
["", "12-makedonska-nadenicza", "1/2 Македонска наденица", "1,40", "", ""],
["", "12-lionska-nadenicza", "1/2 Лионска наденица", "1,40", "", ""],
["", "12-srbska-nadenicza", "1/2 Сръбска наденица", "1,40", "", ""]

            ]
        }', 
        'slug' => 'hot-dog-ken-zheleznik',
        'business_name' => 'Хот дог Кен (Железник)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6014',
        'address' => 'ул. Младост 23',
        'address_additional' => '',
        'coords_x' => '42.4131027',
        'coords_y' => '25.5899341',
        'phone' => '+359889464456',
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
            
            "Кафе": [
                ["", "espreso-klasiko", "Еспресо класико", "0,70", "35", ""],
["", "espreso-lungo-dlgo", "Еспресо лунго дълго", "0,70", "70", ""],
["", "espreso-ristreto-kso", "Еспресо ристрето късо", "0,70", "20", ""],
["", "espreso-dopio-dvojno", "Еспресо допио двойно", "0,70", "70", ""],
["", "kortado", "Кортадо", "0,70", "220", ""],
["", "kapuchino", "Капучино", "1,40", "220", ""],
["", "flet-uajt", "Флет уайт", "2,10", "220", ""],
["", "viensko-kafe", "Виенско кафе", "2,10", "220", ""],
["", "amerikano", "Американо", "0,70", "150", ""],
["", "marochino", "Марочино", "2,10", "220", ""],
["", "late", "Лате", "2,10", "330", ""],
["", "kapuchino-double", "Капучино double", "2,10", "330", ""],
["", "mokko", "Мокко", "2,10", "300", ""],
["", "oreo-kafe", "Орео кафе", "2,10", "300", ""],
["", "kokosovo-kafe", "Кокосово кафе", "2,10", "300", ""],
["", "raf-kafe", "Раф кафе", "2,10", "300", ""],
["", "kakao-s-mlyako", "Какао с мляко", "0,70", "220", ""],
["", "goreshh-shokolad", "Горещ шоколад", "1,40", "220", ""],
["", "matcha-late", "Матча лате", "2,10", "220", ""],
["", "frape", "Фрапе", "1,40", "300", ""],
["", "frapuchino", "Фрапучино", "2,10", "300", ""],
["", "ajs-late", "Айс лате", "2,10", "300", ""],
["", "ajs-matcha-late", "Айс матча лате", "2,80", "300", ""],
["", "ajs-mokko", "Айс мокко", "2,10", "300", ""],
["", "ajs-kokos", "Айс кокос", "2,10", "300", ""],
["", "ajs-oreo", "Айс орео", "2,80", "300", ""],
["", "vanila-ajs", "Ванила айс", "2,10", "300", ""],
["", "ajs-shokolad", "Айс шоколад", "2,10", "300", ""],
["", "oreo-shejk", "Орео шейк", "2,10", "300", ""],
["", "mlechen-shejk", "Млечен шейк", "2,80", "300", ""]

            ]
        }', 
        'slug' => 'the-cofee-room',
        'business_name' => 'The Cofee room',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Поп Минчо Кънчев 87',
        'address_additional' => '',
        'coords_x' => '42.4229975',
        'coords_y' => '25.6223208',
        'phone' => '+359895101186',
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
                ["", "domati-s-mus-ot-sirena", "Домати с мус от сирена", "4,20", "500", ""],
["", "grczka", "Гръцка", "4,20", "400", ""]

            ],

            "Барбeкю": [
                ["", "obezkosteni-svinski-grdichki", "Обезкостени свински гърдички", "8,40", "350", ""],
["", "kyufte-ot-klczano-meso", "Кюфте от кълцано месо", "1,40", "100", ""],
["", "kebapche", "Кебапче", "1,40", "100", ""],
["", "pleskavicza-ot-mlyano-meso", "Плескавица от мляно месо", "4,90", "300", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "300", ""]

            ],

            "fish": [
                ["", "sharan", "Шаран", "7,70", "300", ""],
["", "panirana-byala-riba", "Панирана бяла риба", "7,70", "300", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "kalczone", "Калцоне", "4,20", "", ""],
["", "riko", "Рико", "4,90", "", ""],
["", "di-karne", "Ди карне", "4,90", "", ""],
["", "diablo", "Диабло", "5,60", "", ""],
["", "galiano", "Галиано", "4,90", "", ""],
["", "la-fungi", "Ла фунги", "4,90", "", ""],
["", "korsika", "Корсика", "4,90", "", ""],
["", "nashenczi", "Нашенци", "8,40", "640", ""],
["", "nashenczi--peperoni", "Нашенци + пеперони", "9,80", "670", ""],
["", "kuatroformadzhio", "Куатроформаджио", "4,90", "", ""],
["", "kapreze", "Капрезе", "6,30", "400", ""],
["", "neapol", "Неапол", "5,60", "", ""],
["", "napoli", "Наполи", "4,90", "", ""]

            ],

            "Хляб и пъленки": [
                ["", "prlenka-s-chesnova-pasta-i-magdanoz", "Пърленка с чеснова паста и магданоз", "1,40", "170", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "200", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "200", ""],
["", "zatvorena-prlenka-ss-sirene-i-kashkaval", "Затворена пърленка със сирене и кашкавал", "2,10", "200", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "prepechena-filiya", "Препечена филия", "0,00", "", ""],
["", "chesnova-prepechena-filiya", "Чеснова препечена филия", "0,00", "", ""]

            ],

            "starters": [
                ["", "obezkostena-agneshka-glavichka", "Обезкостена агнешка главичка", "7,70", "", ""],
["", "pileshki-drobcheta-s-mashherka", "Пилешки дробчета с мащерка", "4,90", "350", ""],
["", "ushhipczi-ot-mlyano-meso", "Ущипци от мляно месо", "6,30", "250", ""],
["", "przhen-svinski-drob-po-selski", "Пържен свински дроб по селски", "4,90", "300", ""],
["", "pileshki-kscheta-s-gbi-smetana-i-kartofeno-pyure", "Пилешки късчета с гъби, сметана и картофено пюре", "5,60", "300", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,80", "280", ""],
["", "presni-przheni-kartofi--chips", "Пресни пържени картофи – чипс", "2,80", "250", ""],
["", "zapecheno-khalumi-na-tigan-vrkhu-prlenka", "Запечено халуми на тиган върху пърленка", "6,30", "500", ""]

            ],

            "specialties": [
                ["", "speczialitet-nashenczi-s-pile", "Специалитет Нашенци с пиле", "9,10", "500", ""],
["", "svinsko-dzholanche-s-kartofi-i-grejvi-sos", "Свинско джоланче с картофи и грейви сос", "9,80", "", ""],
["", "svinsko-bon-file-v-sos-ot-piperki-i-topeni-sirena", "Свинско бон филе в сос от пиперки и топени сирена", "9,80", "400", ""],
["", "teleshki-stek-s-div-oriz-i-sos-ot-manatarki", "Телешки стек с  див ориз и сос от манатарки", "15,40", "400", ""]

            ]
        }', 
        'slug' => 'restorant-nashenci',
        'business_name' => 'Ресторант Нашенци',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Митрополит Методи Кусев 9',
        'address_additional' => '',
        'coords_x' => '42.42288012',
        'coords_y' => '25.62679867',
        'phone' => '+359885162427',
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
            
            "bread": [
                ["", "khlyab-s-aktiven-vglen", "Хляб с активен въглен", "0,70", "350", ""],
["", "khlyab-zdrave", "Хляб Здраве", "0,70", "350", ""],
["", "plnozrnest-khlyab", "Пълнозърнест хляб", "0,70", "350", ""],
["", "testo", "Тесто", "0,70", "650", ""],
["", "rodopski-khlyab", "Родопски хляб", "0,70", "350", ""]

            ],

            "Закуски": [
                ["", "kozunachena-kifla-s-marmalad", "Козуначена кифла с мармалад", "0,70", "200", ""],
["", "kozunachena-kifla-s-lokum", "Козуначена кифла с локум", "0,70", "200", ""],
["", "kozunak-s-shokolad", "Козунак с шоколад", "2,10", "400", ""],
["", "kozunak-ss-stafidi", "Козунак със стафиди", "2,10", "400", ""],
["", "kozunak-s-lokum", "Козунак с локум", "2,10", "400", ""],
["", "kozunak-s-klasik", "Козунак с класик", "2,10", "400", ""],
["", "medeni-biskviti", "Медени бисквити", "1,40", "200", ""],
["", "bezglutenovi-biskviti", "Безглутенови бисквити", "2,10", "200", ""]

            ],

            "desserts": [
                ["", "oveseni-biskviti-s-myusli-i-shokolad", "Овесени бисквити с мюсли и шоколад", "1,40", "200", ""],
["", "chijzkejk", "Чийзкейк", "2,10", "", ""],
["", "shokoladovi-mfini-s-shokolad", "Шоколадови мъфини с шоколад", "0,70", "", ""],
["", "vanilovi-mfini-s-shokolad", "Ванилови мъфини с шоколад", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "ajryan", "Айрян", "0,70", "", ""]

            ]
        }', 
        'slug' => 'pekarna-zhar',
        'business_name' => 'Пекарна жар',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6001',
        'address' => 'ул. Цар Симеон Велики 153',
        'address_additional' => '',
        'coords_x' => '42.42723827',
        'coords_y' => '25.64337284',
        'phone' => '+359886104197',
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
            
            "Хот-дог": [
                ["", "klasicheski-khot-dog-s-obiknoven-krenvirsh", "Класически хот-дог с обикновен кренвирш", "1,40", "", ""],
["", "klasicheski-khot-dog-s-krenvirsh-s-topeno-sirene", "Класически хот-дог с кренвирш с топено сирене", "1,40", "", ""],
["", "klasicheski-khot-dog-s-lukankov-krenvirsh", "Класически хот-дог с луканков кренвирш", "1,40", "", ""],
["", "amerikanski-khot-dog-s-obiknoven-krenvirsh", "Американски хот-дог с обикновен кренвирш", "2,10", "", ""],
["", "amerikanski-khot-dog-s-krenvirsh-s-topeno-sirene", "Американски хот-дог с кренвирш с топено сирене", "2,10", "", ""]

            ],

            "Сандвичи Кен": [
                ["", "sandvich-ken-ss-srbska-nadenicza", "Сандвич Кен със сръбска наденица", "2,10", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/793911.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/793912.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/793913.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1103470.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1103471.jpg?width=302"]

            ]
        }', 
        'slug' => 'hot-dog-ken-bulbank',
        'business_name' => 'Хот-Дог Кен (Булбанк)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'между ул.Пазарска и ул.Кольо Ганчев',
        'address_additional' => '',
        'coords_x' => '42.42595',
        'coords_y' => '25.632761',
        'phone' => '+359895451923',
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
            
            "Джоб": [
                ["", "dzhob-s-shunka-i-kashkaval", "Джоб с шунка и кашкавал", "2,10", "320", ""],
["", "dzhob-s-lukanka-i-kashkaval", "Джоб с луканка и кашкавал", "2,10", "320", ""],
["", "dzhob-s-shpekov-salam-i-kashkaval", "Джоб с шпеков салам и кашкавал", "2,10", "320", ""],
["", "dzhob-ss-svinsko-file-i-kashkaval", "Джоб със свинско филе и кашкавал", "2,10", "320", ""],
["", "dzhob-ss-sirene-i-kashkaval", "Джоб със сирене и кашкавал", "2,10", "320", ""]

            ],

            "Солени Катми": [
                ["", "katma-ss-sirene", "Катма със сирене", "0,70", "280", ""],
["", "katma-s-kashkaval", "Катма с кашкавал", "1,40", "280", ""],
["", "katma-s-topeno-sirene", "Катма с топено сирене", "1,40", "280", ""],
["", "katma-s-krenvirsh-i-sirene", "Катма с кренвирш и сирене", "1,40", "310", ""],
["", "katma-s-krenvirsh-i-kashkaval", "Катма с кренвирш и кашкавал", "1,40", "310", ""],
["", "katma-ss-sirene-i-kashkaval", "Катма със сирене и кашкавал", "1,40", "320", ""],
["", "katma-s-krenvirsh-sirene-i-kashkaval", "Катма с кренвирш, сирене и кашкавал", "1,40", "380", ""],
["", "katma-s-shunka-i-sirene", "Катма с шунка и сирене", "1,40", "300", ""],
["", "katma-s-shunka-i-kashkaval", "Катма с шунка и кашкавал", "1,40", "300", ""],
["", "katma-s-shunka-sirene-i-kashkaval", "Катма с шунка, сирене и кашкавал", "2,10", "350", ""],
["", "katma-s-shunka-i-topeno-sirene", "Катма с шунка и топено сирене", "1,40", "300", ""],
["", "katma-s-lukanka-i-sirene", "Катма с луканка и сирене", "1,40", "300", ""],
["", "katma-s-lukanka-i-kashkaval", "Катма с луканка и кашкавал", "2,10", "300", ""],
["", "katma-s-lukanka-sirene-i-kashkaval", "Катма с луканка, сирене и кашкавал", "2,10", "350", ""],
["", "katma-s-lukanka-i-topeno-sirene", "Катма с луканка и топено сирене", "2,10", "300", ""],
["", "katma-ss-svinsko-file-i-sirene", "Катма със свинско филе и сирене", "1,40", "300", ""],
["", "katma-ss-svinsko-i-kashkaval", "Катма със свинско и кашкавал", "2,10", "300", ""],
["", "katma-ss-svinsko-file-sirene-i-kashkaval", "Катма със свинско филе, сирене и кашкавал", "2,10", "350", ""],
["", "katma-ss-svinsko-file-i-topeno-sirene", "Катма със свинско филе и топено сирене", "2,10", "300", ""],
["", "katma-s-krenvirsh-i-topeno-sirene", "Катма с кренвирш и топено сирене", "1,40", "310", ""]

            ],

            "Сладки Катми": [
                ["", "katma-s-kafyav-shokolad", "Катма с кафяв шоколад", "1,40", "270", ""],
["", "katma-s-byal-shokolad", "Катма с бял шоколад", "1,40", "270", ""],
["", "katma-ss-smesen-shokolad", "Катма със смесен шоколад", "1,40", "270", ""],
["", "katma-s-shokolad-i-banan", "Катма с шоколад и банан", "2,10", "370", ""],
["", "katma-s-shokolad-i-biskvitka-oreo", "Катма с шоколад и бисквитка Oreo", "2,10", "290", ""],
["", "katma-s-shokolad-i-orekhi", "Катма с шоколад и орехи", "2,10", "300", ""],
["", "katma-s-nutella-banan-i-biskvitka-oreo", "Катма с Nutella, банан и бисквитка Oreo", "2,80", "390", ""],
["", "katma-ss-sladko-i-sirene", "Катма със сладко и сирене", "2,10", "300", ""],
["", "katma-s-med", "Катма с мед", "1,40", "270", ""],
["", "katma-s-med-i-orekhi", "Катма с мед и орехи", "2,10", "300", ""],
["", "katma-s-med-i-banan", "Катма с мед и банан", "2,10", "370", ""]

            ],

            "Тостове и принцеси": [
                ["", "tost-s-kashkaval", "Тост с кашкавал", "1,40", "270", ""],
["", "tost-ss-sirene-i-kashkaval", "Тост със сирене и кашкавал", "2,10", "290", ""],
["", "tost-s-shunka-i-kashkaval", "Тост с шунка и кашкавал", "2,10", "290", ""],
["", "tost-ss-svinsko-file-i-kashkaval", "Тост със свинско филе и кашкавал", "2,10", "290", ""],
["", "tost-s-lukanka-i-kashkaval", "Тост с луканка и кашкавал", "2,10", "290", ""],
["", "tost-s-shpek-salam-i-kashkaval", "Тост с шпек салам и кашкавал", "2,10", "290", ""],
["", "princzesa-s-kashkaval", "Принцеса с кашкавал", "0,70", "170", ""],
["", "princzesa-ss-sirene-i-kashkaval", "Принцеса със сирене и кашкавал", "0,70", "190", ""],
["", "princzesa-ss-sirene-i-yajcze", "Принцеса със сирене и яйце", "0,70", "190", ""],
["", "princzesa-s-kajma", "Принцеса с кайма", "0,70", "170", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "1,40", "190", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "1,40", "190", ""],
["", "khot-dog-s-krenvirsh", "Хот дог с кренвирш", "1,40", "270", ""],
["", "khot-dog-s-lukankov-krenvirsh", "Хот дог с луканков кренвирш", "1,40", "270", ""]

            ],

            "Хамбургер": [
                ["", "khamburger-s-shunka-i-kashkaval", "Хамбургер с шунка и кашкавал", "2,10", "320", ""],
["", "khamburger-s-lukanka-i-kashkaval", "Хамбургер с луканка и кашкавал", "2,10", "320", ""],
["", "khamburger-s-shpek-salam-i-kashkaval", "Хамбургер с шпек салам и кашкавал", "2,10", "320", ""],
["", "khamburger-ss-svinsko-file-i-kashkaval", "Хамбургер със свинско филе и кашкавал", "2,10", "320", ""],
["", "khamburger-ss-sirene-i-kashkaval", "Хамбургер със сирене и кашкавал", "1,40", "320", ""]

            ],

            "Coca-Cola напитки": [
                ["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/867349.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1097955.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/867348.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1097954.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajryan", "Айрян", "0,70", "300", ""],
["", "redbull", "RedBull", "2,10", "250", ""],
["", "shark", "Shark", "2,10", "250", ""],
["", "hell", "Hell", "0,70", "250", ""]

            ],

            "beer": [
                ["", "zagorka-speczialno", "Загорка специално", "1,40", "500", ""],
["", "zagorka-maks-0", "Загорка Макс 0%", "1,40", "500", ""],
["", "ariana", "Ариана", "0,70", "500", ""],
["", "khajneken", "Хайнекен", "2,10", "500", ""]

            ]
        }', 
        'slug' => 'insomnia-fast-food',
        'business_name' => 'Insomnia Fast food',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Гурго 90',
        'address_additional' => '',
        'coords_x' => '42.42385196',
        'coords_y' => '25.63274901',
        'phone' => '+359893355799',
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
                ["", "sandvich-s-pleskavicza", "Сандвич с плескавица", "2,10", "450", ""],
["", "sandvich-s-shunka", "Сандвич с шунка", "2,10", "450", ""],
["", "sandvich-s-bekon", "Сандвич с бекон", "2,10", "450", ""],
["", "sandvich-s-pileshko", "Сандвич с пилешко", "2,10", "450", ""],
["", "sandvich-ss-sirene", "Сандвич със сирене", "2,10", "450", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "2,10", "450", ""]

            ],

            "dunners": [
                ["", "malk-dyuner", "Малък дюнер", "1,40", "200", ""],
["", "sreden-dyuner", "Среден дюнер", "2,10", "300", ""],
["", "golyam-dyuner", "Голям дюнер", "2,80", "400", ""]

            ],

            "Гюзлеми": [
                ["", "gyuzlemi-ss-sirene", "Гюзлеми със сирене", "0,70", "", ""],
["", "gyuzlemi-ss-sirene-i-kashkaval", "Гюзлеми със сирене и кашкавал", "1,40", "", ""],
["", "gyuzlemi-s-shunka-i-kashkaval", "Гюзлеми с шунка и кашкавал", "1,40", "", ""]

            ],

            "Принцеси": [
                ["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "1,40", "230", ""],
["", "princzesa-s-kashkaval", "Принцеса с кашкавал", "1,40", "200", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "1,40", "230", ""],
["", "princzesa-s-bekon-i-kashkaval", "Принцеса с бекон и кашкавал", "1,40", "230", ""],
["", "princzesa-s-lukanka-i-kashkaval", "Принцеса с луканка и кашкавал", "1,40", "230", ""]

            ],

            "Палачинки": [
                ["", "palachinka-s-shokolad", "Палачинка с шоколад", "0,70", "250", ""],
["", "palachinka-ss-sladko-ot-yagoda", "Палачинка със сладко от ягода", "0,70", "250", ""],
["", "palachinka-ss-sladko-ot-gorski-plod", "Палачинка със сладко от горски плод", "0,70", "250", ""],
["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "1,40", "250", ""],
["", "palachinka-s-med", "Палачинка с мед", "0,70", "250", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "0,70", "250", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "0,70", "250", ""],
["", "palachinka-ss-sirene-i-kashkaval", "Палачинка със сирене и кашкавал", "0,70", "250", ""],
["", "palachinka-s-shunka-i-kashkaval", "Палачинка с шунка и кашкавал", "0,70", "250", ""]

            ],

            "others": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "1,40", "100", ""],
["", "domashno-kebapche", "Домашно кебапче", "0,70", "100", ""],
["", "domashno-kyufte", "Домашно кюфте", "0,70", "100", ""]

            ],

            "Форнети": [
                ["", "forneti-ss-sirene-i-kashkaval", "Форнети със сирене и кашкавал", "0,70", "150", ""],
["", "forneti-s-topeno-sirene", "Форнети с топено сирене", "0,70", "150", ""],
["", "forneti-picza", "Форнети пица", "0,70", "150", ""],
["", "forneti-s-yagoda", "Форнети с ягода", "0,70", "150", ""],
["", "forneti-s-kajsiya", "Форнети с кайсия", "0,70", "150", ""],
["", "forneti-s-shokolad", "Форнети с шоколад", "0,70", "150", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/927849.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/927850.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/927851.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/927852.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/927853.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/927854.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/927855.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/927856.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/927857.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "500", ""],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/927859.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/927860.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "750", "https://images.deliveryhero.io/image/fd-bg/Products/927861.jpg?width=302"]

            ],

            "drinks": [
                ["", "trapezna-voda-velena", "Трапезна вода Велена", "0,00", "500", ""],
["", "trapezna-voda", "Трапезна вода", "0,70", "", ""],
["", "naturalen-sok-kuains", "Натурален сок Куаинс", "0,70", "250", ""],
["", "studen-chaj-khikho", "Студен чай Хихо", "0,00", "250", ""],
["", "energijna-napitka-hell", "Енергийна напитка Hell", "0,70", "250", ""],
["", "ariana", "Ариана", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'black-and-gold',
        'business_name' => 'Black and Gold',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6001',
        'address' => 'ул. Граф Игнатиев 14А',
        'address_additional' => '',
        'coords_x' => '42.42711744',
        'coords_y' => '25.62893674',
        'phone' => '+359988808387',
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
                ["", "shopska", "Шопска", "2,80", "450", ""],
["", "ovcharska", "Овчарска", "3,50", "500", ""],
["", "meshena", "Мешена", "3,50", "450", ""],
["", "kapreze", "Капрезе", "4,20", "400", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "3,50", "450", ""],
["", "vitaminozma-salata", "Витаминозма салата", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "450", ""],
["", "nashenska-salata", "Нашенска салата", "4,20", "450", ""],
["", "selska-salata", "Селска салата", "3,50", "450", ""],
["", "domati-s-natrosheno-sirene-i-pesto", "Домати с натрошено сирене и песто", "3,50", "450", ""],
["", "rozovi-domati-s-mus-ot-4-vida-sirena", "Розови домати с мус от 4 вида сирена", "4,20", "450", ""],
["", "trakijska-salata", "Тракийска салата", "2,80", "300", ""],
["", "przheni-chushki-s-domati-i-sirene", "Пържени чушки с домати и сирене", "4,20", "450", ""],
["", "pecheni-piperki", "Печени пиперки", "3,50", "300", ""],
["", "meshana-salata-po-selski", "Мешана салата по селски", "4,20", "450", ""]

            ],

            "Сухи мезета": [
                ["", "lukanka", "Луканка", "4,20", "100", ""],
["", "file-elena", "Филе Елена", "5,60", "100", ""],
["", "pastrma", "Пастърма", "5,60", "100", ""],
["", "plochka-sirene", "Плочка сирене", "1,40", "100", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "2,10", "100", ""]

            ],

            "Топли предястия": [
                ["", "kashkavaleni-khapki", "Кашкавалени хапки", "4,20", "300", ""],
["", "sirene-khapki", "Сирене хапки", "4,20", "300", ""],
["", "topeni-sirencza-s-borovinkovo-sladko", "Топени сиренца с боровинково сладко", "4,20", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "350", ""],
["", "kartofi-s-bekon-i-smetana", "Картофи с бекон и сметана", "3,50", "400", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "4,20", "300", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "300", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "300", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,80", "300", ""],
["", "kartofena-zapekanka", "Картофена запеканка", "3,50", "400", ""],
["", "khrupkavi-pileshki-filencza", "Хрупкави пилешки филенца", "4,90", "300", ""],
["", "aromatno-pileshko-s-chesn-i-kopr", "Ароматно пилешко с чесън и копър", "4,90", "250", ""],
["", "pileshki-kscheta-ss-smetana-i-topeno-sirene", "Пилешки късчета със сметана и топено сирене", "4,90", "300", ""],
["", "pileshki-khapki-ss-sladko-lyutiv-sos", "Пилешки хапки със сладко-лютив сос", "4,90", "250", ""],
["", "gbi-v-maslo", "Гъби в масло", "3,50", "300", ""],
["", "svinski-drob-przhen", "Свински дроб пържен", "3,50", "300", ""],
["", "svinski-ezik-v-maslo", "Свински език в масло", "4,90", "200", ""],
["", "khrupkavi-pileshki-filencza-s-parmezan", "Хрупкави пилешки филенца с пармезан", "5,60", "300", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,90", "300", ""],
["", "aromatni-kartofi-s-presni-bilki", "Ароматни картофи с пресни билки", "3,50", "300", ""],
["", "chorbadzhijsko-meze", "Чорбаджийско мезе", "7,00", "400", ""],
["", "plneni-gbi-s-4-vida-sirena", "Пълнени гъби с 4 вида сирена", "4,20", "300", ""]

            ],

            "sachs": [
                ["", "pileshki-sach-na-majstora", "Пилешки сач на майстора", "13,30", "", ""],
["", "kombiniran-sach-na-majstora", "Комбиниран сач на майстора", "13,30", "", ""]

            ],

            "grill": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "kasapsko-meze", "Касапско мезе", "5,60", "400", ""],
["", "nashensko-meze", "Нашенско мезе", "6,30", "400", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "120", ""],
["", "domashno-kyufte", "Домашно кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "svinski-karencza", "Свински каренца", "5,60", "300", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "6,30", "400", ""],
["", "svinski-shashlik", "Свински шашлик", "7,00", "400", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,90", "300", ""],
["", "svinski-bekon", "Свински бекон", "5,60", "300", ""],
["", "svinski-ushi", "Свински уши", "4,20", "300", ""],
["", "khajdushko-plato", "Хайдушко плато", "10,50", "600", ""]

            ],

            "fish": [
                ["", "skumriya-na-skara", "Скумрия на скара", "4,20", "250", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "6,30", "300", ""],
["", "panirani-kalmari", "Панирани калмари", "6,30", "300", ""],
["", "panirani-midi", "Панирани миди", "6,30", "300", ""]

            ],

            "garnish": [
                ["", "krastaviczi-i-domati", "Краставици и домати", "1,40", "150", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "sladko-lyutiv-sos", "Сладко-лютив сос", "0,70", "50", ""],
["", "chili-sos", "Чили сос", "0,70", "50", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "50", ""]

            ],

            "bread": [
                ["", "domashna-chesnova-prlenka", "Домашна чеснова пърленка", "0,70", "150", ""],
["", "pitka-s-maslo-i-chesn", "Питка с масло и чесън", "0,70", "150", ""],
["", "domashna-prlenka", "Домашна пърленка", "0,70", "150", ""],
["", "domashna-prlenka-s-kashkaval-i-sirene", "Домашна пърленка с кашкавал и сирене", "1,40", "200", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta", "Бисквитена торта", "2,10", "", ""],
["", "palachinka", "Палачинка", "0,70", "", ""]

            ],

            "wine": [
                ["", "shardone-i-semijon-i-sovinon-blan---villa-yustina", "Шардоне и Семийон и Совиньон Блан - Villa Yustina", "6,30", "", ""],
["", "sira-i-kaberne-fran---villa-yustina", "Сира и Каберне Фран - Villa Yustina", "6,30", "", ""],
["", "ruzh---villa-yustina", "Руж - Villa Yustina", "6,30", "", ""],
["", "sovinon-blan-i-semijon---4-seasons-wines", "Совиньон Блан и Семийон - 4 Seasons wines", "17,50", "750", ""],
["", "pino-noar---4-seasons-wines", "Пино Ноар - 4 Seasons wines", "17,50", "750", ""],
["", "kaberne-fran---4-seasons-wines", "Каберне Фран - 4 Seasons wines", "17,50", "750", ""],
["", "roze-rubin", "Розе Рубин", "17,50", "750", ""],
["", "soleni-khlmove---shardone-vionie-i-sovinon-blan", "Солени хълмове - Шардоне, Вионие и Совиньон Блан", "21,00", "750", ""],
["", "soleni-khlmove---roze-ot-kaberne-sovinon-sira-i-kaberne-fran", "Солени хълмове -  Розе от Каберне Совиньон, Сира и Каберне Фран", "21,00", "750", ""],
["", "soleni-khlmove---keberne-sovinon-merlo-keberne-fran-i-sira", "Солени хълмове - Кеберне Совиньон, Мерло, Кеберне Фран и Сира", "21,00", "750", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "1,40", "", ""],
["", "ariana", "Ариана", "1,40", "500", ""],
["", "zagorka", "Загорка", "1,40", "500", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/765489.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/765491.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/765492.jpg?width=302"]

            ]
        }', 
        'slug' => 'mehana-balgari',
        'business_name' => 'Механа Българи',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Генерал Столетов 129',
        'address_additional' => '',
        'coords_x' => '42.42918248',
        'coords_y' => '25.63134154',
        'phone' => '+359899182636',
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
            
            "Букети от рози": [
                ["", "pstri-rozi", "Пъстри рози", "112,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/850020.JPG?width=302"],
["", "15-beli-rozi", "15 бели рози", "52,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/850021.JPG?width=302"],
["", "mini-rozi", "Мини рози", "23,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/850022.JPG?width=302"],
["", "rozi-miks", "Рози микс", "55,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/850023.JPG?width=302"],
["", "7-rozovi-rozi", "7 розови рози", "27,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/850025.JPG?width=302"],
["", "3-rozovi-rozi", "3 розови рози", "15,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/850026.JPG?width=302"],
["", "31-cherveni-rozi", "31 червени рози", "112,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/850027.JPG?width=302"],
["", "15-cherveni-rozi", "15 червени рози", "55,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/850028.JPG?width=302"],
["", "buket-7-cherveni-rozi", "Букет 7 червени рози", "27,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/850029.JPG?width=302"],
["", "buket-5-cherveni-rozi", "Букет 5 червени рози", "23,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/850030.JPG?width=302"],
["", "buket-3-cherveni-rozi", "Букет 3 червени рози", "16,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/850031.JPG?width=302"]

            ],

            "Букети": [
                ["", "vanda", "Ванда", "23,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/850033.JPG?width=302"],
["", "czimbidium", "Цимбидиум", "22,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/850034.JPG?width=302"],
["", "khrizantemi", "Хризантеми", "18,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/850037.JPG?width=302"],
["", "buket-khrizantemi", "Букет Хризантеми", "14,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/850038.JPG?width=302"],
["", "czvetni-khrizantemi", "Цветни Хризантеми", "24,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/850039.JPG?width=302"]

            ],

            "Аранжировки": [
                ["", "sladka-lyubov", "Сладка любов", "68,60", "", ""],
["", "sfera", "Сфера", "29,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/850047.JPG?width=302"],
["", "ladiya-s-czvetya", "Ладия с цветя", "40,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/850048.JPG?width=302"],
["", "czvetna-gradina", "Цветна градина", "40,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/850049.JPG?width=302"],
["", "oranzhevi-slncza", "Оранжеви слънца", "25,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/850053.JPG?width=302"],
["", "kutiya-s-rozi", "Кутия с рози", "62,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/850054.JPG?width=302"],
["", "svezhest", "Свежест", "27,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/850055.JPG?width=302"],
["", "koshnichka-lilium", "Кошничка лилиум", "26,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/850058.JPG?width=302"],
["", "chantichka-luks", "Чантичка лукс", "23,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/850059.JPG?width=302"],
["", "sfera-s-rozi", "Сфера с рози", "29,40", "", ""]

            ],

            "Цъфтящи": [
                ["", "ekhmeya", "Ехмея", "25,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/850063.JPG?width=302"],
["", "anturium-v-saksiya", "Антуриум в саксия", "27,30", "", ""],
["", "orkhideya-falenopsis-lilava", "Орхидея фаленопсис лилава", "32,90", "", ""]

            ]
        }', 
        'slug' => 'magazin-za-cvetya-magnoliya',
        'business_name' => 'Магазин за цветя Магнолия',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Цар Симеон Велики 90',
        'address_additional' => '',
        'coords_x' => '42.42356268',
        'coords_y' => '25.62348393',
        'phone' => '+359882005580',
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
            
            "Аеро гофрети": [
                ["", "gofreta", "Гофрета", "1,40", "100", ""],
["", "gofreta-s-domashno-sladko", "Гофрета с домашно сладко", "2,10", "150", "https://images.deliveryhero.io/image/fd-bg/Products/1071342.jpg?width=302"],
["", "gofreta-s-med-i-natroshen-leshnik", "Гофрета с мед и натрошен лешник", "2,80", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1071343.jpg?width=302"],
["", "nutela-s-banan", "Нутела с банан", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1071344.jpg?width=302"],
["", "nutela-s-yagoda", "Нутела с ягода", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1071345.jpg?width=302"],
["", "rafaelo", "Рафаело", "2,80", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1071346.jpg?width=302"],
["", "chijzkejk", "Чийзкейк", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1071347.jpg?width=302"],
["", "nutela-shokolad-shokoladovi-purichki", "Нутела, шоколад, шоколадови пурички", "2,80", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1071374.jpg?width=302"]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1071349.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1071348.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1071352.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1071353.jpg?width=302"],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1071430.jpg?width=302"],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1071428.jpg?width=302"],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1071429.jpg?width=302"],
["", "cappy-yablka-nektar", "Cappy Ябълка нектар", "0,00", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1071436.jpg?width=302"],
["", "cappy-portokal-nektar", "Cappy Портокал нектар", "0,00", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1071437.jpg?width=302"],
["", "cappy-praskova", "Cappy Праскова", "0,00", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1071438.jpg?width=302"],
["", "cappy-vishna", "Cappy Вишна", "0,00", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1071439.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1071350.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajran-meggle", "Айран Meggle", "0,70", "", ""]

            ],

            "beer": [
                ["", "ariana", "Ариана", "0,70", "500", ""],
["", "zagorka", "Загорка", "1,40", "500", ""],
["", "zagorka-retro-ken", "Загорка Ретро кен", "0,70", "", ""],
["", "korona", "Корона", "3,50", "", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "khajneken", "Хайнекен", "2,10", "500", ""],
["", "khajneken-0", "Хайнекен 0%", "2,10", "330", ""]

            ]
        }', 
        'slug' => 'aero-waffle',
        'business_name' => 'Aero waffle',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Никола Петков 52',
        'address_additional' => '',
        'coords_x' => '42.4278108',
        'coords_y' => '25.6624019',
        'phone' => '+359878659959',
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
["", "grczka-salata", "Гръцка салата", "4,20", "350", ""]

            ],

            "burgers": [
                ["", "burger-pileshki-premium", "Бургер пилешки премиум", "2,80", "350", ""],
["", "burger-s-pileshka-przhola", "Бургер с пилешка пържола", "2,80", "325", ""],
["", "burger-svinski-premium", "Бургер свински премиум", "3,50", "350", ""],
["", "burger-ss-svinsko-kontra-file", "Бургер със свинско контра филе", "2,80", "325", ""],
["", "burger-s-teleshko-kyufte", "Бургер с телешко кюфте", "2,80", "325", ""],
["", "burger-teleshki-premium", "Бургер телешки премиум", "3,50", "350", ""],
["", "dvoen-teleshki-premium", "Двоен телешки Премиум", "5,60", "480", ""],
["", "dvoen-teleshki-burger", "Двоен телешки бургер", "4,90", "440", ""]

            ],

            "Порции": [
                ["", "pecheni-na-zhar-bekoncheta-ili-rebrcza", "Печени на жар бекончета или ребърца", "2,10", "100", ""],
["", "porcziya-rebrcza-malka", "Порция ребърца малка", "5,60", "", ""],
["", "porcziya-bekon-golyama", "Порция бекон голяма", "9,10", "", ""],
["", "porcziya-bekon-malka", "Порция бекон малка", "5,60", "", ""],
["", "porcziya-rebrcza-golyama", "Порция ребърца голяма", "9,10", "", ""],
["", "pitka", "Питка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "gofreta-s-1-dobavka", "Гофрета с 1 добавка", "2,10", "", ""],
["", "gofreta-s-2-dobavki", "Гофрета с 2 добавки", "2,10", "", ""],
["", "gofreta-s-3-dobavki", "Гофрета с 3 добавки", "2,80", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", ""],
["", "schweppes-tonik", "Schweppes Тоник", "1,40", "500", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "domashen-ajryan", "Домашен айрян", "0,70", "330", ""],
["", "fresh", "Фреш", "2,10", "250", ""],
["", "domashen-ajryan", "Домашен айрян", "1,40", "500", ""],
["", "fresh", "Фреш", "2,80", "400", ""],
["", "domashen-studen-chaj-bz", "Домашен студен чай Бъз", "0,70", "330", ""],
["", "domashen-studen-chaj-diva-menta", "Домашен студен чай Дива Мента", "0,70", "330", ""],
["", "domashen-studen-chaj-bz", "Домашен студен чай Бъз", "1,40", "500", ""],
["", "domashen-studen-chaj-diva-menta", "Домашен студен чай Дива Мента", "1,40", "500", ""],
["", "shejk-malina", "Шейк малина", "1,40", "350", ""],
["", "shejk-yagoda", "Шейк ягода", "1,40", "350", ""],
["", "shejk-kpina", "Шейк къпина", "1,40", "350", ""],
["", "shejk-gorski-plod", "Шейк горски плод", "1,40", "350", ""]

            ],

            "beer": [
                ["", "zagorka-speczialno-ken", "Загорка специално кен", "1,40", "500", ""],
["", "khajniken-ken", "Хайникен кен", "2,10", "330", ""],
["", "khajniken-ken", "Хайникен кен", "2,80", "500", ""],
["", "amstel-ken", "Амстел кен", "2,80", "500", ""],
["", "kradecza-na-yablki", "Крадеца на ябълки", "2,10", "500", ""],
["", "ariana-ken", "Ариана кен", "1,40", "500", ""],
["", "starobrno-ken", "Старобърно кен", "1,40", "500", ""],
["", "stolichno-vajs-bok", "Столично Вайс Бок", "2,80", "500", ""],
["", "stela-artoa-ken", "Стела Артоа кен", "2,80", "500", ""]

            ]
        }', 
        'slug' => 'hamburgland',
        'business_name' => 'Hamburgland',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Свети Княз Борис 100',
        'address_additional' => '',
        'coords_x' => '42.42575562',
        'coords_y' => '25.62890441',
        'phone' => '+359897478948',
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
                ["", "rogcheta", "Рогчета", "2,10", "350", ""]

            ],

            "drinks": [
                ["", "boza", "Боза", "0,00", "250", ""],
["", "boza", "Боза", "0,00", "500", ""],
["", "ajryan", "Айрян", "0,00", "250", ""],
["", "ajryan", "Айрян", "0,00", "330", ""],
["", "ajryan", "Айрян", "0,70", "500", ""],
["", "soda", "Сода", "0,70", "500", ""]

            ],

            "Coca-Cola  напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/956500.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/956501.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/956502.jpg?width=302"]

            ]
        }', 
        'slug' => 'pekarna-zhasmina',
        'business_name' => 'Пекарна Жасмина',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Генерал Гурко 91',
        'address_additional' => '',
        'coords_x' => '42.42437581',
        'coords_y' => '25.63386152',
        'phone' => '+359897808981',
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
["", "domati-s-krema-sirene", "Домати с крема сирене", "4,90", "400", ""],
["", "salata-zaara", "Салата Заара", "5,60", "400", ""],
["", "lyatna-salata-zaara", "Лятна салата Заара", "5,60", "400", ""],
["", "salata-milfoj", "Салата Милфьой", "5,60", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "400", ""],
["", "domati-s-marinovano-ovche-sirene", "Домати с мариновано овче сирене", "7,00", "400", ""],
["", "mlechna-salata", "Млечна салата", "4,90", "300", ""],
["", "salata-czezar-s-pileshko-file", "Салата Цезар с пилешко филе", "6,30", "350", ""],
["", "salata-czezar-s-khrupkavo-pile", "Салата Цезар с хрупкаво пиле", "6,30", "350", ""],
["", "salata-czezar-s-pechen-bekon", "Салата Цезар с печен бекон", "6,30", "350", ""],
["", "salata-s-ajsberg-i-ovche-sirene-zaara", "Салата с айсберг и овче сирене Заара", "6,30", "350", ""],
["", "salata-ss-spanak-sirene-kotidzh-i-matcha", "Салата със спанак, сирене Котидж и матча", "6,30", "300", ""],
["", "miks-ot-listni-zelenchuczi-s-riba-ton", "Микс от листни зеленчуци с риба тон", "8,40", "350", ""],
["", "miks-ot-listni-zelenchuczi-s-khrupkavi-kalmari-chiperone", "Микс от листни зеленчуци с хрупкави калмари Чипероне", "8,40", "350", ""]

            ],

            "starters": [
                ["", "khrupkavi-kori-zaara-s-dva-vida-chijz-krem", "Хрупкави кори Заара с два вида чийз крем", "7,00", "200", ""],
["", "selekcziya-sirena-ot-mlekarnicza-zaara", "Селекция сирена от млекарница Заара", "8,40", "200", ""],
["", "selekcziya-blgarski-sukhi-mezeta", "Селекция български сухи мезета", "10,50", "200", ""],
["", "teleshka-pastrma", "Телешка пастърма", "8,40", "100", ""]

            ],

            "Топли предястия": [
                ["", "orizovi-kyuftencza", "Оризови кюфтенца", "6,30", "200", ""],
["", "svinski-ushichki", "Свински ушички", "5,60", "300", ""],
["", "khrupkavi-lenti-bekon-na-skara", "Хрупкави ленти бекон на скара", "8,40", "150", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "11,20", "200", ""],
["", "teleshki-ezik-s-manatarki", "Телешки език с манатарки", "12,60", "250", ""],
["", "zadusheni-manatarki-v-maslo", "Задушени манатарки в масло", "9,10", "200", ""],
["", "kartofeni-prchiczi", "Картофени пръчици", "2,10", "200", ""],
["", "kartofeni-prchiczi-ss-sirene", "Картофени пръчици със сирене", "2,80", "250", ""],
["", "domashen-kartofen-chips-ss-samardala", "Домашен картофен чипс със самардала", "3,50", "200", ""],
["", "kartofeni-shajbi-s-bilki", "Картофени шайби с билки", "4,20", "200", ""],
["", "kyuftencza-s-izvara-dzhidzhifil-i-magdanoz", "Кюфтенца с извара, джиджифил и магданоз", "7,00", "200", ""],
["", "zapechen-kashkaval-zaara-na-plocha", "Запечен кашкавал Заара на плоча", "7,70", "200", ""],
["", "zapecheno-sirene-zaara-v-bananovo-listo-s-domat-zekhtin-i-svezhi-podpravki", "Запечено сирене Заара в бананово листо с домат, зехтин и свежи подправки", "6,30", "200", ""],
["", "zapecheno-sirene-zaara-v-banano-listo-s-nasheto-sladko-ot-malini", "Запечено сирене Заара в банано листо с нашето сладко от малини", "6,30", "200", ""],
["", "panirani-zhabeshki-butcheta", "Панирани жабешки бутчета", "13,30", "250", ""],
["", "kalmari-s-khrupkava-korichka", "Калмари с хрупкава коричка", "9,10", "200", ""],
["", "khrupkavi-kalmari-chiperone", "Хрупкави калмари Чипероне", "11,20", "200", ""],
["", "beleni-skaridi-v-bilkovo-maslo", "Белени скариди в билково масло", "12,60", "200", ""],
["", "beleni-skaridi-v-chesnov-chili-sos", "Белени скариди в чеснов чили сос", "12,60", "200", ""]

            ],

            "Основни ястия с пилешко": [
                ["", "pileshko-file-na-skara-s-gorchicheno-medena-glazura", "Пилешко филе на скара с горчичено-медена глазура", "6,30", "250", ""],
["", "pileshki-zhulieni-na-tigan-s-kri-i-soev-sos", "Пилешки жулиени на тиган с къри и соев сос", "7,00", "250", ""],
["", "pileshko-role-s-bekon-i-kashkaval-zaara", "Пилешко роле с бекон и кашкавал Заара", "9,80", "300", ""],
["", "pileshka-ruladina-s-izvara-i-kashkaval-zaara", "Пилешка руладина с извара и кашкавал Заара", "9,10", "300", ""]

            ],

            "Основни ястия със свинско": [
                ["", "domashni-kyuftencza-na-skara", "Домашни кюфтенца на скара", "6,30", "300", ""],
["", "przheni-domashni-kyuftencza", "Пържени домашни кюфтенца", "6,30", "300", ""],
["", "bekon-na-skara-ss-sos-remulad", "Бекон на скара със сос Ремулад", "7,00", "300", ""],
["", "glazirani-svinski-rebrcza", "Глазирани свински ребърца", "9,10", "450", ""],
["", "nashata-vratna-przholka-s-shajbi-i-zapechen-luk", "Нашата вратна пържолка с шайби и запечен лук", "8,40", "250", ""],
["", "svinski-karencza-na-skara", "Свински каренца на скара", "8,40", "250", ""],
["", "pikantni-svinski-karencza-na-tigan", "Пикантни свински каренца на тиган", "9,10", "350", ""],
["", "svinsko-drpano", "Свинско дърпано", "9,10", "350", ""],
["", "aromatno-svinsko-s-glazirani-taj-zelenchuczi", "Ароматно свинско с глазирани тай зеленчуци", "9,10", "350", ""],
["", "kralski-kotlet-s-bilkovi-kartofi-i-salcza-arabiata", "Кралски котлет с билкови картофи и салца Арабиата", "11,90", "450", ""]

            ],

            "veal": [
                ["", "shishcheta-churrasco-black-angus-ss-sos-remulad", "Шишчета Churrasco Black Angus със сос Ремулад", "16,10", "280", ""],
["", "tenderloin-steak-ot-mlechno-teleshko-s-tryufel-sos", "Tenderloin steak от млечно телешко с трюфел сос", "25,20", "200", ""],
["", "teleshki-medaloni-s-uiski-sos", "Телешки медальони с уиски сос", "18,20", "250", ""],
["", "teleshki-kscheta-s-manatarki-v-pepr-sos", "Телешки късчета с манатарки в пепър сос", "16,10", "250", ""]

            ],

            "Агнешко от нашата ферма": [
                ["", "agneshko-pecheno", "Агнешко печено", "16,10", "300", ""],
["", "agneshko-role-ss-spanak-ala-krem", "Агнешко роле със спанак ала крем", "15,40", "300", ""],
["", "agneshki-t-bon-stek-s-rozmarin-i-masli-gkhi", "Агнешки Т-бон стек с розмарин и масли ГХИ", "19,60", "300", ""]

            ],

            "fish": [
                ["", "pstrva-na-skara", "Пъстърва на скара", "7,00", "300", ""],
["", "rulcza-ot-pstrva-s-avokado-krem", "Рулца от пъстърва с авокадо крем", "9,80", "300", ""],
["", "panirano-file-ot-pstrva-s-bilkovi-kartofki", "Панирано филе от пъстърва с билкови картофки", "9,10", "300", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-pechen-bekon-s-kartofeni-prchiczi", "Сандвич с печен бекон с картофени пръчици", "4,90", "300", ""],
["", "klub-sandvich-s-shunka-i-kashkaval-s-kartofeni-prchiczi", "Клуб сандвич с шунка и кашкавал с картофени пръчици", "4,20", "300", ""],
["", "klub-vegetarianski-sandvich-s-kartofeni-prchiczi", "Клуб вегетариански сандвич с картофени пръчици", "3,50", "300", ""],
["", "burger-zaara", "Бургер Заара", "12,60", "300", ""],
["", "vegan-burger-zaara", "Веган бургер Заара", "9,10", "300", ""]

            ],

            "Безалкохолни напитки": [
                ["", "czitronada", "Цитронада", "2,80", "300", ""],
["", "portokalada", "Портокалада", "2,80", "300", ""],
["", "domashna-limonada", "Домашна лимонада", "3,50", "300", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "ajran", "Айран", "0,70", "200", ""],
["", "red-bull", "Red Bull", "2,80", "250", ""]

            ],

            "beer": [
                ["", "heineken", "Heineken", "2,10", "330", ""],
["", "heineken-bezalkokholna", "Heineken безалкохолна", "2,10", "330", ""],
["", "stolichno-vajs", "Столично Вайс", "2,10", "400", ""],
["", "stolichno-bok", "Столично Бок", "2,10", "400", ""],
["", "zagorka-retro", "Загорка Ретро", "1,40", "500", ""],
["", "amstel", "Амстел", "1,40", "500", ""],
["", "starobrno", "Старобърно", "2,10", "500", ""]

            ]
        }', 
        'slug' => 'restaurant-zaara-stara-zagora',
        'business_name' => 'Restaurant Zaarа (Стара Загора)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Цар Симеон Велики 85',
        'address_additional' => '',
        'coords_x' => '42.423834',
        'coords_y' => '25.6229282',
        'phone' => '+359887881434',
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
                ["", "salata-strgaloto", "Салата Стъргалото", "7,70", "800", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "500", ""],
["", "zhtvarska-salta", "Жътварска салта", "2,80", "500", ""],
["", "salata-ajsberg", "Салата Айсберг", "3,50", "500", ""],
["", "proletna-salata", "Пролетна салата", "2,80", "500", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "500", ""],
["", "salata-shpionin", "Салата Шпионин", "4,20", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "400", ""],
["", "rodopska-salata", "Родопска салата", "2,80", "500", ""],
["", "salata-stara-zagora", "Салата Стара Загора", "2,80", "500", ""],
["", "vlcha-salata", "Вълча салата", "4,20", "400", ""],
["", "salta-kapreze", "Салта Капрезе", "3,50", "400", ""],
["", "razyadka", "Разядка", "2,80", "400", ""],
["", "salata-shushana", "Салата Шушана", "2,10", "400", ""],
["", "salata-shmerkeze", "Салата Шмеркезе", "3,50", "500", ""],
["", "mlechna-s-presni-krastaviczi", "Млечна с пресни краставици", "2,80", "400", ""],
["", "katk-s-orekhi", "Катък с орехи", "2,80", "300", ""],
["", "redena-salata", "Редена салата", "2,80", "400", ""],
["", "meshana-salata-s-topka-katk", "Мешана салата с топка катък", "2,80", "400", ""],
["", "meshana-salata-s-plochka-sirene", "Мешана салата с плочка сирене", "2,80", "400", ""],
["", "pecheni-chushki-s-plochka-sirene", "Печени чушки с плочка сирене", "2,80", "350", ""],
["", "morkovi-ss-zekhtin", "Моркови със зехтин", "2,10", "300", ""],
["", "salata-zele-i-morkovi", "Салата зеле и моркови", "2,10", "400", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,10", "350", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "350", ""],
["", "salata-krastaviczi", "Салата Краставици", "2,10", "350", ""],
["", "salata-domati", "Салата Домати", "2,10", "350", ""],
["", "salata-beleni-domati", "Салата Белени домати", "2,80", "400", ""],
["", "vareno-yajcze", "Варено яйце", "0,00", "", ""],
["", "topka-katk", "Топка катък", "0,00", "50", ""],
["", "pechena-chushka", "Печена чушка", "0,00", "", ""]

            ],

            "pasta": [
                ["", "karbonara", "Карбонара", "4,20", "400", ""],
["", "boloneze", "Болонезе", "4,90", "400", ""]

            ],

            "Топли предястия": [
                ["", "zapekanka-strgloto", "Запеканка Стърглото", "4,90", "700", ""],
["", "sirene-khapki-pane", "Сирене хапки пане", "3,50", "400", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "4,20", "300", ""],
["", "kashkavaleni-purichki-ss-susam", "Кашкавалени пурички със сусам", "4,90", "300", ""],
["", "khrupkavi-topeni-sirencza-ss-sladko-ot-borovinki", "Хрупкави топени сиренца със сладко от боровинки", "4,20", "350", ""],
["", "kashkvaleni-taralezhcheta", "Кашквалени таралежчета", "4,20", "250", ""],
["", "panirani-sirencza-prezident-s-yagodovo-sladko", "Панирани сиренца Президент с ягодово сладко", "4,90", "180", ""],
["", "kamember-s-borovinki", "Камембер с боровинки", "4,90", "180", ""],
["", "kashkaval-na-teflon", "Кашкавал на тефлон", "4,20", "200", ""],
["", "kashkavaleni-purichki-s-kornflejks", "Кашкавалени пурички с корнфлейкс", "4,20", "250", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "250", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "pikantni-kartofi-po-selski", "Пикантни картофи по селски", "2,10", "250", ""],
["", "shkembe-s-maslo", "Шкембе с масло", "3,50", "300", ""],
["", "ezik-s-maslo", "Език с масло", "4,20", "200", ""],
["", "ezik-natyur", "Език натюр", "4,90", "200", ""],
["", "ezik-pane", "Език пане", "4,90", "300", ""],
["", "agneshki-drebolii-v-maslo", "Агнешки дреболии в масло", "4,90", "300", ""],
["", "sirene-po-shopski", "Сирене по шопски", "3,50", "300", ""],
["", "sirene-po-trakijski", "Сирене по тракийски", "4,20", "350", ""],
["", "gyuveche-po-ovcharski", "Гювече по Овчарски", "3,50", "350", ""],
["", "gyuveche-po-irlandski", "Гювече по Ирландски", "3,50", "350", ""],
["", "pastrma-s-luk", "Пастърма с лук", "4,90", "300", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "2,80", "200", ""],
["", "gbi-s-maslo", "Гъби с масло", "3,50", "200", ""],
["", "plnenite-gbki-na-baba", "Пълнените гъбки на баба", "5,60", "300", ""],
["", "brokoli-s-tri-vida-sirena-i-smetana", "Броколи с три вида сирена и сметана", "4,90", "300", ""],
["", "zapecheni-kartofki-po-veneczianski", "Запечени картофки по Венециански", "4,20", "400", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "4,20", "400", ""],
["", "svinski-drob", "Свински дроб", "3,50", "300", ""],
["", "domashen-chips", "Домашен чипс", "2,80", "300", ""],
["", "rizoto", "Ризото", "3,50", "500", ""]

            ],

            "Ястия с пилешко месо": [
                ["", "pileshko-file-s-brokoli-i-sino-sirene", "Пилешко филе с броколи и синьо сирене", "4,90", "400", ""],
["", "pileshki-zhulieni-s-gbi-i-kiseli-krastavichki", "Пилешки жулиени с гъби и кисели краставички", "4,90", "300", ""],
["", "pileshki-zhulieni-ss-zelenchuczi", "Пилешки жулиени със зеленчуци", "4,90", "400", ""],
["", "pileshka-kavrma-po-radomirski", "Пилешка кавърма по Радомирски", "4,90", "450", ""],
["", "pile-kavrma", "Пиле кавърма", "4,20", "400", ""],
["", "pileshko-file-s-lovdzhijski-sos", "Пилешко филе с ловджийски сос", "4,90", "400", ""],
["", "pileshki-filencza-s-meden-dresing", "Пилешки филенца с меден дресинг", "4,90", "250", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,90", "350", ""],
["", "pikantni-pileshki-filencza", "Пикантни пилешки филенца", "4,20", "350", ""],
["", "rizoto-s-pileshko-meso", "Ризото с пилешко месо", "4,20", "400", ""],
["", "pileshki-filencza-s-gbi", "Пилешки филенца с гъби", "4,90", "300", ""],
["", "pileshki-przholki-s-gben-sos", "Пилешки пържолки с гъбен сос", "5,60", "350", ""],
["", "pileshki-przholki-ot-but-ss-smetana-i-yajcze", "Пилешки пържолки от бут със сметана и яйце", "5,60", "400", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "400", ""],
["", "khrupkavi-pileshki-khapki-s-chesnov-sos", "Хрупкави пилешки хапки с чеснов сос", "4,20", "350", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,90", "350", ""],
["", "pikantni-pileshki-khapki", "Пикантни пилешки хапки", "4,20", "300", ""],
["", "khrupkavi-pileshki-filencza-s-chili-sos", "Хрупкави пилешки филенца с чили сос", "4,90", "400", ""],
["", "pileshki-khapki-s-gbi-i-kashkaval", "Пилешки хапки с гъби и кашкавал", "4,90", "350", ""],
["", "pileshki-khapki-s-luk-i-gbi", "Пилешки хапки с лук и гъби", "4,20", "400", ""],
["", "pileshki-khapki-s-luk", "Пилешки хапки с лук", "4,20", "500", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "400", ""],
["", "pileshki-drobcheta-s-maslo", "Пилешки дробчета с масло", "3,50", "200", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "4,20", "400", ""],
["", "panirani-pileshki-drobcheta", "Панирани пилешки дробчета", "4,20", "350", ""],
["", "pileshki-khapki-s-topeno-sirene---pikantni", "Пилешки хапки с топено сирене - пикантни", "4,90", "400", ""],
["", "khrupkavi-pileshki-krilcza", "Хрупкави пилешки крилца", "3,50", "500", ""]

            ],

            "Ястия със свинско месо": [
                ["", "svinski-khapki-pane-ss-sladk-chili-sos", "Свински хапки пане със сладък чили сос", "4,90", "350", ""],
["", "svinski-khapki-s-luk", "Свински хапки с лук", "4,20", "350", ""],
["", "svinski-khapki-s-luk-i-chili", "Свински хапки с лук и чили", "4,20", "350", ""],
["", "svinski-khapki-s-gbi-i-kashkaval", "Свински хапки с гъби и кашкавал", "4,90", "350", ""],
["", "shniczel-po-vienski", "Шницел по Виенски", "4,90", "400", ""],
["", "shniczel-pane-s-garnitura", "Шницел пане с гарнитура", "3,50", "400", ""],
["", "svinski-filencza-po-lovdzhijski", "Свински филенца по ловджийски", "4,90", "400", ""],
["", "svinski-filencza-s-gben-sos", "Свински филенца с гъбен сос", "6,30", "350", ""],
["", "svinski-filencza-s-tri-vida-sirena", "Свински филенца с три вида сирена", "5,60", "350", ""],
["", "svinski-khapki-s-gbi", "Свински хапки с гъби", "4,20", "350", ""],
["", "kasapsko-meze", "Касапско мезе", "4,90", "400", ""],
["", "svinski-karencza-s-luk", "Свински каренца с лук", "4,90", "350", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,90", "350", ""],
["", "aromatni-vratni-przholki-s-pikanten-sos", "Ароматни вратни пържолки с пикантен сос", "5,60", "400", ""],
["", "svinski-dyavolski-kebap", "Свински дяволски кебап", "4,90", "400", ""]

            ],

            "grill": [
                ["", "svinski-vratni-przholki", "Свински вратни пържолки", "4,90", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "svinski-karencza-na-skara", "Свински каренца на скара", "4,90", "300", ""],
["", "svinski-i-pileshki-filencza-v-diva-mashherka", "Свински и пилешки филенца в дива мащерка", "8,40", "500", ""],
["", "pileshki-przholki", "Пилешки пържолки", "4,90", "250", ""],
["", "pileshka-przhola-ot-but-na-skara", "Пилешка пържола от бут на скара", "4,90", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "svinski-rebrcza-bez-kost", "Свински ребърца без кост", "4,20", "300", ""],
["", "pikantni-svinski-grdi-s-meden-dresing", "Пикантни свински гърди с меден дресинг", "4,90", "300", ""],
["", "svinski-rebra-na-skara", "Свински ребра на скара", "4,20", "400", ""],
["", "svinski-ushi-na-skara", "Свински уши на скара", "4,20", "300", ""],
["", "nadenichki-s-praz-na-shishche", "Наденички с праз на шишче", "1,40", "100", ""],
["", "bolyarski-kyuftencza-na-shishche", "Болярски кюфтенца на шишче", "1,40", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,10", "200", ""],
["", "pikantno-kyufte", "Пикантно кюфте", "0,70", "100", ""],
["", "domashen-sudzhuk", "Домашен суджук", "4,90", "250", ""],
["", "chirpanska-nadenicza", "Чирпанска наденица", "3,50", "250", ""],
["", "meshana-skara", "Мешана скара", "13,30", "600", ""],
["", "grczka-pajdaki---svinski-kotletcheta", "Гръцка пайдаки - свински котлетчета", "10,50", "550", ""],
["", "topeni-sirencza-v-bekon", "Топени сиренца в бекон", "4,90", "200", ""]

            ],

            "Пърленки": [
                ["", "obiknovena-prlenka", "Обикновена пърленка", "0,70", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "2,10", "", ""]

            ]
        }', 
        'slug' => 'bistro-klasiko',
        'business_name' => 'Бистро Класико',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'кв.Три Чучура Юг, ул.Димитър Драгиев 35',
        'address_additional' => '',
        'coords_x' => '42.417887',
        'coords_y' => '25.6053696',
        'phone' => '+359879343814',
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
            
            "Торти (8 парчета)": [
                ["", "princz-regent", "Принц Регент", "14,00", "800", ""],
["", "garash", "Гараш", "14,00", "800", ""]

            ],

            "Парче торта": [
                ["", "princz-regent", "Принц Регент", "2,80", "150", ""],
["", "garash", "Гараш", "2,80", "150", ""],
["", "kontesa", "Контеса", "2,80", "150", ""],
["", "orekhova", "Орехова", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'sladkarnica-adonay',
        'business_name' => 'Сладкарница Адонай',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Любен Каравелов 78',
        'address_additional' => '',
        'coords_x' => '42.42708046',
        'coords_y' => '25.63769533',
        'phone' => '+359897927009',
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
            
            "Дюнери и хамбургери": [
                ["", "dyuner", "Дюнер", "0,70", "", ""],
["", "dvoen-dyuner", "Двоен дюнер", "1,40", "300", ""],
["", "teleshki-dyuner", "Телешки дюнер", "2,80", "450", ""],
["", "porcziya-dyuner", "Порция дюнер", "3,50", "", ""],
["", "dyuner-v-pitka", "Дюнер в питка", "2,10", "400", ""],
["", "khamburger", "Хамбургер", "2,10", "350", ""],
["", "arabski-khamburger", "Арабски хамбургер", "2,80", "400", ""],
["", "khamburger-s-teleshko", "Хамбургер с телешко", "2,10", "350", ""],
["", "rok-burger", "Рок бургер", "2,80", "300", ""]

            ],

            "Сандвичи и джобове": [
                ["", "sudzhu", "Суджу", "2,10", "350", ""],
["", "dzhob-s-shunka-i-kashkaval", "Джоб с шунка и кашкавал", "2,10", "400", ""]

            ],

            "pizza": [
                ["", "picza-gbi-i-bekon", "Пица гъби и бекон", "0,70", "", ""],
["", "picza-gbi-i-shunka", "Пица гъби и шунка", "0,70", "", ""],
["", "picza-shunka-i-czarevicza", "Пица шунка и царевица", "0,70", "", ""],
["", "picza-peperoni-ss-sirene", "Пица пеперони със сирене", "0,70", "", ""],
["", "picza-gbi-i-pile", "Пица гъби и пиле", "0,70", "", ""],
["", "picza-bekon-i-czarevicza", "Пица бекон и царевица", "0,70", "", ""],
["", "picza-pileshko-i-czarevicza", "Пица пилешко и царевица", "0,70", "", ""],
["", "picza-margarita", "Пица маргарита", "0,70", "", ""]

            ],

            "others": [
                ["", "porcziya-pileshki-filencza", "Порция пилешки филенца", "4,20", "500", ""],
["", "porcziya-kartofi", "Порция картофи", "1,40", "150", ""],
["", "golyam-sos", "Голям сос", "0,70", "300", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1042639.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1042640.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1042641.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1042642.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1042643.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1042644.jpg?width=302"]

            ],

            "drinks": [
                ["", "monstr", "Монстър", "1,40", "355", ""],
["", "monstr", "Монстър", "2,10", "500", ""],
["", "ajryan", "Айрян", "0,70", "300", ""],
["", "ajryan", "Айрян", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'sindbad-stara-zagora',
        'business_name' => 'Синдбад (Стара Загора)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Цар Симеон Велики 104',
        'address_additional' => '',
        'coords_x' => '42.42423103',
        'coords_y' => '25.62762642',
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
            
            "salads": [
                ["", "salata-czezar", "Салата Цезар", "5,60", "350", ""],
["", "salata-ribler", "Салата Риблер", "6,30", "300", ""],
["", "salata-viento", "Салата Виенто", "5,60", "250", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle-ss-sladoled", "Шоколадово суфле със сладолед", "3,50", "150", ""],
["", "biskvitena-torta", "Бисквитена торта", "2,10", "150", ""]

            ]
        }', 
        'slug' => 'viento-bar',
        'business_name' => 'Viento Bar &amp; Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Симеон Велики 105А',
        'address_additional' => '',
        'coords_x' => '42.42417654',
        'coords_y' => '25.62502288',
        'phone' => '+359883306080',
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
                ["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "domashno-kyufte", "Домашно кюфте", "0,70", "100", ""],
["", "svinska-pleskavicza", "Свинска плескавица", "0,70", "150", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "300", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "300", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,10", "", ""],
["", "pileshki-trtki", "Пилешки трътки", "2,10", "300", ""],
["", "svinski-grdichki", "Свински гърдички", "4,90", "350", ""],
["", "svinski-bekon", "Свински бекон", "3,50", "", ""],
["", "svinski-ushi", "Свински уши", "3,50", "", ""],
["", "svinski-buzki", "Свински бузки", "2,80", "", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "zele-s-morkovi", "Зеле с моркови", "0,00", "100", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "100", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "50", ""]

            ],

            "beer": [
                ["", "zagorka-speczialno-500ml---ken", "Загорка Специално (500мл) - кен", "0,70", "", ""],
["", "zagorka-retro-330ml---ken", "Загорка Ретро (330мл) - кен", "0,70", "", ""],
["", "ariana-500ml---ken", "Ариана (500мл) - кен", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/999870.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/999872.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/999873.jpg?width=302"]

            ],

            "Безалкохолни напитки": [
                ["", "mineralna-voda-velingrad", "Минерална вода Велинград", "0,00", "", ""],
["", "ajryan", "Айрян", "0,00", "250", ""],
["", "studen-chaj-nestea", "Студен чай Nestea", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'balkanska-skara-stara-zagora',
        'business_name' => 'Балканска скара (Стара Загора)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Славянски 1',
        'address_additional' => '',
        'coords_x' => '42.4185122',
        'coords_y' => '25.6211927',
        'phone' => '+359876825993',
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
            
            "bread": [
                ["", "tipova-pitka", "Типова питка", "0,00", "100", ""],
["", "byala-filijka", "Бяла филийка", "0,00", "", ""],
["", "tipova-filijska", "Типова филийска", "0,00", "40", ""],
["", "byala-pitka", "Бяла питка", "0,00", "100", ""]

            ],

            "soups": [
                ["", "supa-topcheta", "Супа топчета", "1,40", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "agneshka-supa", "Агнешка супа", "2,10", "300", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "300", ""],
["", "pacha-chorba", "Пача чорба", "2,10", "300", ""],
["", "tarator", "Таратор", "0,70", "300", ""]

            ],

            "Салати - Гарнитури": [
                ["", "salata-zele", "Салата зеле", "0,70", "", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "100", ""]

            ],

            "desserts": [
                ["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""],
["", "krem-karamel", "Крем карамел", "0,70", "200", ""]

            ],

            "additives": [
                ["", "lyuta-chushka", "Люта чушка", "0,00", "5", ""],
["", "kiselo-mlyako", "Кисело мляко", "0,00", "30", ""],
["", "sirene", "Сирене", "0,00", "60", ""]

            ],

            "Coca-Cola напитки": [
                ["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/1104711.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1104712.jpg?width=302"]

            ],

            "drinks": [
                ["", "zagorka", "Загорка", "0,70", "", ""],
["", "kamenicza", "Каменица", "0,70", "", ""],
["", "khajniken", "Хайникен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'zakusvalnya-blgariya',
        'business_name' => 'Закусвалня България',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Цар Иван Шишман 53',
        'address_additional' => '',
        'coords_x' => '42.42407572',
        'coords_y' => '25.62985533',
        'phone' => '+359879381862',
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
                ["", "teleshka-pleskavicza", "Телешка плескавица", "2,80", "330", ""],
["", "teleshka-sharska-pleskavicza", "Телешка шарска плескавица", "3,50", "335", ""],
["", "pileshki-stek", "Пилешки стек", "2,80", "325", ""],
["", "pileshki-batak", "Пилешки батак", "2,10", "325", ""],
["", "svinska-bela-veshalicza", "Свинска бела вешалица", "2,80", "325", ""],
["", "svinska-plnena-veshalicza", "Свинска пълнена вешалица", "3,50", "335", ""]

            ],

            "Питки": [
                ["", "pitka", "Питка", "0,00", "", ""]

            ],

            "drinks": [
                ["", "ajryan-balkan", "Айрян Балкан", "0,70", "330", ""],
["", "ajryan-balkan", "Айрян Балкан", "1,40", "500", ""],
["", "voda-s-vitamini-life-stream", "Вода с витамини Life stream", "1,40", "", ""],
["", "energijna-napitka-bighorn", "Енергийна напитка Bighorn", "0,70", "250", ""],
["", "khajneken-ken", "Хайнекен кен", "2,10", "330", ""],
["", "zagorka-speczialno-ken", "Загорка специално кен", "1,40", "500", ""],
["", "ariana-svetlo-ken", "Ариана светло кен", "1,40", "500", ""],
["", "amstel-ken", "Амстел кен", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "2,80", "330", ""],
["", "korona", "Корона", "4,20", "", ""],
["", "khajneken", "Хайнекен", "2,80", "500", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/924531.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/924532.jpg?width=302"],
["", "coca-cola-cheresha", "Coca-Cola Череша", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/924533.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/924534.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/924535.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/924537.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/924538.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/924539.jpg?width=302"],
["", "fanta-grozde", "Fanta Грозде", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/924540.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/924541.jpg?width=302"]

            ]
        }', 
        'slug' => 'sandvicharnica',
        'business_name' => 'Сандвичарница',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Иван Шишман 56',
        'address_additional' => '',
        'coords_x' => '42.425679',
        'coords_y' => '25.6295393',
        'phone' => '+35942210100',
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
            
            "Сачета": [
                ["", "kombiniran-sach", "Комбиниран сач", "9,80", "", ""],
["", "kombiniran-sach-s-3-vida-meso", "Комбиниран сач с 3 вида месо", "9,80", "", ""],
["", "pileshki-sach", "Пилешки сач", "10,50", "", ""],
["", "teleshki-sach", "Телешки сач", "8,40", "", ""],
["", "svinski-sach--2-broya-pitka-i-sos", "Свински сач + 2 броя питка и сос", "8,40", "", ""],
["", "domashna-torta", "Домашна торта", "1,40", "", ""]

            ],

            "bread": [
                ["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "pitka-chabata", "Питка чабата", "0,00", "", ""],
["", "pitka", "Питка", "0,00", "", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "400", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "400", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "400", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "400", ""],
["", "kurban", "Курбан", "2,10", "400", ""]

            ],

            "Принцеси": [
                ["", "princzesa-s-kajma", "Принцеса с кайма", "1,40", "", ""],
["", "princzesi-s-kajma-i-kashkaval", "Принцеси с кайма и кашкавал", "1,40", "", ""],
["", "princzesa-s-kashkaval", "Принцеса с кашкавал", "1,40", "", ""],
["", "sandvich-s-shunka", "Сандвич с шунка", "1,40", "", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,10", "", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "2,10", "", ""],
["", "khamburger-s-kyufte", "Хамбургер с кюфте", "2,10", "", ""],
["", "khamburger-s-shunka", "Хамбургер с шунка", "2,10", "", ""],
["", "khamburger-klub-sandvich", "Хамбургер Клуб сандвич", "3,50", "", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "4,20", "500", ""],
["", "meshana-salata", "Мешана салата", "3,50", "400", ""],
["", "birena-salata", "Бирена салата", "3,50", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "5,60", "600", ""],
["", "mlechna-salata", "Млечна салата", "2,10", "200", ""],
["", "zele-i-morkovi", "Зеле и моркови", "2,80", "500", ""],
["", "domati-s-katk", "Домати с катък", "4,20", "450", ""],
["", "domati-s-plochka-sirene", "Домати с плочка сирене", "4,20", "500", ""],
["", "zelena-salata", "Зелена салата", "3,50", "500", ""],
["", "czezar-salata", "Цезар салата", "5,60", "500", ""],
["", "vareni-yajcza", "Варени яйца", "2,10", "", ""],
["", "salata-vareni-kartofi", "Салата Варени картофи", "2,80", "400", ""],
["", "rizoto", "Ризото", "2,80", "300", ""]

            ],

            "Хапки": [
                ["", "kashkavaleni-khapki", "Кашкавалени хапки", "4,90", "400", ""],
["", "sirene-na-khapki", "Сирене на хапки", "4,90", "400", ""],
["", "topeni-sirencza", "Топени сиренца", "4,90", "450", ""],
["", "kashkaval-pane-s-shunka", "Кашкавал пане с шунка", "4,90", "400", ""],
["", "khapki-miks", "Хапки микс", "8,40", "450", ""]

            ],

            "Ястия от пилешко": [
                ["", "pileshki-khapki-pane", "Пилешки хапки пане", "5,60", "400", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "5,60", "400", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "5,60", "400", ""],
["", "pileshki-rebrcza", "Пилешки ребърца", "4,90", "400", ""],
["", "pileshki-krilcza-pane", "Пилешки крилца пане", "4,90", "400", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "350", ""],
["", "pileshki-miks-ot-drebolii", "Пилешки микс от дреболии", "4,20", "350", ""],
["", "pileshko-vreteno", "Пилешко вретено", "7,00", "450", ""],
["", "pileshki-khapki-s-gbi-i-kashkaval", "Пилешки хапки с гъби и кашкавал", "5,60", "450", ""],
["", "pileshki-dobcheta", "Пилешки добчета", "4,20", "350", ""],
["", "pileshki-vodenichki", "Пилешки воденички", "4,20", "350", ""],
["", "pileshki-srcza", "Пилешки сърца", "4,20", "350", ""]

            ],

            "Ястия от свинско": [
                ["", "svinski-ushi", "Свински уши", "4,90", "400", ""],
["", "svinski-rebrcza", "Свински ребърца", "7,00", "400", ""],
["", "svinski-bekon", "Свински бекон", "7,00", "400", ""],
["", "svinska-przhola", "Свинска пържола", "5,60", "350", ""],
["", "rulo-stefani", "Руло Стефани", "4,90", "350", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "4,20", "550", ""],
["", "svinski-drob-przhen", "Свински дроб пържен", "4,20", "450", ""],
["", "przheno-kyufte", "Пържено кюфте", "1,40", "100", ""],
["", "svinski-khapki-s-gbi-i-luk", "Свински хапки с гъби и лук", "5,60", "450", ""]

            ],

            "Ястоя от картофи": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "200", ""],
["", "pikantni-przheni-kartofi", "Пикантни пържени картофи", "1,40", "200", ""],
["", "vareni-kartofi", "Варени картофи", "2,80", "400", ""],
["", "pikantni-przheni-kartofi-ss-sirene", "Пикантни пържени картофи със сирене", "1,40", "200", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "200", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "1,40", "200", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "1,40", "100", ""],
["", "kyufte", "Кюфте", "1,40", "100", ""],
["", "karnache", "Карначе", "1,40", "100", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "4,20", "450", ""],
["", "sudzhuk", "Суджук", "8,40", "400", ""],
["", "nadenicza", "Наденица", "6,30", "400", ""],
["", "nadenicza-s-praz", "Наденица с праз", "6,30", "400", ""],
["", "meshana-sakara", "Мешана сакара", "17,50", "1100", ""],
["", "kasapsko-meze", "Касапско мезе", "6,30", "600", ""]

            ],

            "fish": [
                ["", "czacza", "Цаца", "0,70", "100", ""],
["", "kalmari", "Калмари", "7,70", "400", ""],
["", "khajver", "Хайвер", "3,50", "350", ""]

            ],

            "Плата": [
                ["", "pileshko-plato", "Пилешко плато", "9,80", "600", ""],
["", "svinsko-plato", "Свинско плато", "8,40", "670", ""],
["", "kombinirano-plato", "Комбинирано плато", "10,50", "890", ""],
["", "ribno-plato", "Рибно плато", "10,50", "650", ""],
["", "pile-na-gril-czyalo", "Пиле на грил цяло", "7,70", "", ""],
["", "pile-na-gril-polovin", "Пиле на грил половин", "3,50", "", ""],
["", "butche-na-gril", "Бутче на грил", "2,80", "", ""]

            ],

            "Сухи мезета": [
                ["", "lukanka", "Луканка", "2,80", "100", ""],
["", "file-elena", "Филе Елена", "3,50", "100", ""],
["", "pastrma", "Пастърма", "3,50", "100", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "1,40", "100", ""],
["", "sirene-natyur", "Сирене натюр", "1,40", "100", ""]

            ],

            "garnish": [
                ["", "garnitura-przheni-kartofi", "Гарнитура пържени картофи", "0,70", "100", ""],
["", "garnitura-przheni-kartofi-ss-sirene", "Гарнитура пържени картофи със сирене", "0,70", "100", ""],
["", "garnitura-domati-i-krastaviczi", "Гарнитура домати и краставици", "1,40", "100", ""],
["", "garnitura-zele-s-morkovi", "Гарнитура зеле с моркови", "0,70", "100", ""],
["", "garnitura-vareni-kartofi", "Гарнитура варени картофи", "0,70", "150", ""],
["", "garnitura-rizoto", "Гарнитура ризото", "1,40", "100", ""],
["", "garnitura-zelena-salata", "Гарнитура зелена салата", "0,70", "", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "1,40", "", ""],
["", "domashna-torta", "Домашна торта", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""]

            ],

            "Безалкохолни": [
                ["", "energijna-napitka-hell", "Енергийна напитка Hell", "0,70", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "330", ""],
["", "ajran", "Айран", "0,70", "200", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/574717.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/574718.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/574719.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/682871.jpg?width=302"],
["", "schweppes-biter-limon", "Schweppes Битер Лимон", "1,40", "500", ""],
["", "schweppes-mandarina", "Schweppes Мандарина", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1124111.jpg?width=302"]

            ]
        }', 
        'slug' => 'caca-pod-lipata',
        'business_name' => 'Цаца под Липата',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6001',
        'address' => 'бул. Цар Симеон Велики 168',
        'address_additional' => '',
        'coords_x' => '42.4261392',
        'coords_y' => '25.6408091',
        'phone' => '+359893824925',
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
                ["", "tradicziona-shopska-salata", "Традициона шопска салата", "3,50", "300", ""],
["", "salata-ot-ivichki-pecheni-piperki-i-rezeni-domat-po-selski", "Салата от ивички печени пиперки и резени домат по селски", "3,50", "300", ""],
["", "ovcharska-salata-s-ovche-sirene", "Овчарска салата с овче сирене", "4,90", "600", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "500", ""],
["", "salata-ot-domati-s-ovche-sirene", "Салата от домати с овче сирене", "4,20", "400", ""],
["", "salata-tabule-s-kinoa", "Салата табуле с киноа", "4,20", "400", ""],
["", "razyadka-ot-pechena-chushka-roneno-sirene-czedeno-mlyako-pecheni-orekhi-i-chesn", "Разядка от печена чушка, ронено сирене, цедено мляко, печени орехи и чесън", "3,50", "300", ""],
["", "salata-ot-czveklo-morkovi-chesn-orekhi-i-czedeno-kiselo-mlyako", "Салата oт цвекло, моркови, чесън, орехи и цедено кисело мляко", "4,20", "350", ""],
["", "ovcharska-salata-s-krave-sirene", "Овчарска салата с краве сирене", "4,20", "500", ""],
["", "salata-ot-beleni-domati-sirene-moczarela-i-bosilekovo-pesto", "Салата от белени домати, сирене моцарела и босилеково песто", "4,20", "500", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "350", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "300", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "400", ""],
["", "zelena-salata-ss-sino-sirene-i-pechen-susam", "Зелена салата със синьо сирене и печен сусам", "4,20", "300", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "3,50", "300", ""],
["", "morkovi-ss-zeleni-maslini-orekhovi-yadki-i-lek-czitrusov-sos", "Моркови със зелени маслини, орехови ядки и лек цитрусов сос", "3,50", "300", ""]

            ],

            "Студени мезета": [
                ["", "file-elena", "Филе Елена", "4,90", "100", ""],
["", "pastrma", "Пастърма", "4,90", "100", ""],
["", "plato-sirena", "Плато сирена", "9,80", "200", ""],
["", "kashkaval", "Кашкавал", "2,10", "100", ""],
["", "krave-sirene", "Краве сирене", "1,40", "100", ""],
["", "sino-sirene", "Синьо сирене", "4,90", "100", ""]

            ],

            "dry-appetizer": [
                ["", "pileshki-khapki-s-gbi-porseni-s-kashkaval", "Пилешки хапки с гъби, поръсени с кашкавал", "5,60", "350", ""],
["", "pileshki-bon-filencza-ss-susam-ili-kornflejks", "Пилешки бон филенца със сусам или корнфлейкс", "5,60", "300", ""],
["", "pileshki-khapki-s-leka-panirovka", "Пилешки хапки с лека панировка", "4,90", "300", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "5,60", "300", ""],
["", "kalmari-na-shajbi-s-leka-panirovka", "Калмари на шайби с лека панировка", "7,00", "300", ""],
["", "katino-meze", "Катино мезе", "5,60", "500", ""],
["", "teleshki-ezik-s-malko", "Телешки език с малко", "5,60", "200", ""],
["", "pileshki-krilcza-na-barbekyu", "Пилешки крилца на барбекю", "4,20", "300", ""]

            ],

            "Топли предястия": [
                ["", "marinovano-sirene-zapecheno-na-plocha-s-domati-chervena-i-zelena-chushka", "Мариновано сирене, запечено на плоча с домати, червена и зелена чушка", "4,90", "300", ""],
["", "gshi-drob", "Гъши дроб", "13,30", "150", ""],
["", "plneni-tikvichki", "Пълнени тиквички", "4,90", "300", ""],
["", "presni-pechurki-v-maslo", "Пресни печурки в масло", "4,20", "400", ""]

            ],

            "Безмесни ястия": [
                ["", "kartofen-ogreten-s-pikantni-sirena", "Картофен огретен с пикантни сирена", "5,60", "400", ""],
["", "zapekanka-ot-tikvichki-i-kartofi-s-kashkaval", "Запеканка от тиквички и картофи с кашкавал", "5,60", "350", ""],
["", "pecheni-zelenchuczi-na-zhar-s-chesn-limon-i-zekhtin", "Печени зеленчуци на жар с чесън, лимон и зехтин", "4,90", "300", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,90", "250", ""],
["", "brokoli-na-para-ss-smetanov-krem-sos-i-pecheni-yadki", "Броколи на пара със сметанов крем-сос и печени ядки", "4,90", "300", ""],
["", "rizoto-s-manatarki", "Ризото с манатарки", "5,60", "300", ""],
["", "zelenchukov-ratatuj-s-kinoa-i-maskarpone", "Зеленчуков рататуй с киноа и маскарпоне", "5,60", "300", ""],
["", "przhen-patladzhan-s-domatena-salcza-zapechen-ss-sirene-moczerela", "Пържен патладжан с доматена салца, запечен със сирене моцерела", "5,60", "300", ""],
["", "kartofeni-kyufteta-s-ovche-sirene-garnirani-ss-zelena-salata-i-kiselo-mlyako", "Картофени кюфтета с овче сирене, гарнирани със зелена салата и кисело мляко", "4,20", "500", ""],
["", "mish-mash", "Миш-маш", "4,20", "350", ""],
["", "omlet-ss-sirene-garniran-ss-svezha-salata", "Омлет със сирене, гарниран със свежа салата", "3,50", "400", ""]

            ],

            "soups": [
                ["", "tradicziona-shkembe-chorba", "Традициона шкембе чорба", "2,10", "", ""],
["", "gbena-supa", "Гъбена супа", "2,80", "", ""],
["", "frenska-luchena-supa-ss-zapechen-kashkaval", "Френска лучена супа със запечен кашкавал", "2,80", "", ""],
["", "domatena-krem-supa", "Доматена крем супа", "2,80", "", ""]

            ],

            "barbecue": [
                ["", "svinski-vratni-przholki", "Свински вратни пържолки", "5,60", "300", ""],
["", "svinski-bekon", "Свински бекон", "6,30", "500", ""],
["", "svinsko-bon-file", "Свинско бон филе", "5,60", "250", ""],
["", "domashno-marinovani-svinski-rebrcza", "Домашно мариновани свински ребърца", "6,30", "400", ""],
["", "teleshko-bon-file", "Телешко бон филе", "10,50", "250", ""],
["", "pileshko-bon-file", "Пилешко бон филе", "4,90", "300", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "250", ""],
["", "svinski-kotlet", "Свински котлет", "4,20", "200", ""],
["", "shishche-s-luk", "Шишче с лук", "2,10", "100", ""],
["", "kebapche", "Кебапче", "1,40", "100", ""],
["", "kyufte", "Кюфте", "1,40", "100", ""],
["", "kyufte-ot-klczana-kajma", "Кюфте от кълцана кайма", "1,40", "100", ""],
["", "kyufte-ot-teleshka-kajma", "Кюфте от телешка кайма", "1,40", "100", ""]

            ],

            "Ястия от риба": [
                ["", "balkanski-sharan-na-zhar-vrkhu-salata-ot-peche-luk", "Балкански шаран на жар върху салата от пече лук", "6,30", "300", ""],
["", "przhen-vatos", "Пържен ватос", "7,00", "300", ""]

            ],

            "Основни ястия": [
                ["", "svinski-rebrcza-na-zhar-ss-sos-barbekyu", "Свински ребърца на жар със сос барбекю", "6,30", "600", ""],
["", "panirani-topeni-sirencza-s-borovinkovo-sladko", "Панирани топени сиренца с боровинково сладко", "4,20", "250", ""],
["", "sotirani-pileshki-kscheta-s-dva-vida-gbi", "Сотирани пилешки късчета с два вида гъби", "8,40", "500", ""],
["", "krekhko-pileshko-file", "Крехко пилешко филе", "9,80", "500", ""],
["", "rulo-ot-pileshko-file-s-orekhovi-yadki-i-bekon", "Руло от пилешко филе с орехови ядки и бекон", "9,80", "500", ""],
["", "rizoto-s-pileshko-file-sotirani-presni-zelenchuczi-i-parmezan", "Ризото с пилешко филе, сотирани пресни зеленчуци и пармезан", "6,30", "350", ""],
["", "sochni-pateshki-grdi-na-tigan", "Сочни патешки гърди на тиган", "12,60", "500", ""],
["", "pecheno-svinsko-bon-file-v-sos-ot-manatarki", "Печено свинско бон филе в сос от манатарки", "9,80", "500", ""],
["", "sotirano-svinsko-bon-file", "Сотирано свинско бон филе", "9,80", "500", ""],
["", "rulo-ot-teleshko-mlyano-meso", "Руло от телешко мляно месо", "8,40", "500", ""],
["", "pepr-stek", "Пепър стек", "17,50", "500", ""],
["", "pechena-obezkostena-agneshka-glavichka-ss-zadushen-oriz-i-salata", "Печена обезкостена агнешка главичка със задушен ориз и салата", "6,30", "500", ""]

            ],

            "sachs": [
                ["", "svinski-vratni-przholki-na-zhar", "Свински вратни пържолки на жар", "18,20", "", ""],
["", "pileshko-bon-file-na-zhar", "Пилешко бон филе на жар", "16,80", "", ""],
["", "svinsko-bon-file-na-zhar", "Свинско бон филе на жар", "20,30", "", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "350", ""],
["", "brokoli-na-para", "Броколи на пара", "2,80", "200", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "2,10", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "sotirani-presni-zelenchuczi-ss-zadushen-oriz", "Сотирани пресни зеленчуци със задушен ориз", "3,50", "200", ""],
["", "przheni-manatarki", "Пържени манатарки", "2,80", "100", ""],
["", "marinovan-pechen-luk-na-zhar", "Маринован печен лук на жар", "2,10", "100", ""],
["", "smetanovi-kartofi", "Сметанови картофи", "3,50", "250", ""]

            ],

            "bread": [
                ["", "grczka-pitka-s-maslo", "Гръцка питка с масло", "0,70", "", ""],
["", "filijka-selski-khlyab", "Филийка селски хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,80", "200", ""],
["", "yablkov-paj-s-topka-sladoled", "Ябълков пай с топка сладолед", "2,80", "200", ""],
["", "shokoladovo-sufle-s-topka-sladoled", "Шоколадово суфле с топка сладолед", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'buhchevata-kshcha',
        'business_name' => 'Бухчевата къща',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Цар Иван Шишман 52',
        'address_additional' => '',
        'coords_x' => '42.42418552',
        'coords_y' => '25.63011304',
        'phone' => '+359892480649',
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
                ["", "salata-zele-i-morkovi", "Салата зеле и моркови", "0,00", "100", ""],
["", "salata-vitamina", "Салата витамина", "0,00", "100", ""],
["", "salata-kartofi-s-luk", "Салата картофи с лук", "0,00", "100", ""],
["", "salata-kapreze", "Салата капрезе", "0,70", "100", ""],
["", "domashna-lyutenicza", "Домашна лютеница", "0,00", "100", ""],
["", "salata-bob-s-luk", "Салата боб с лук", "0,00", "100", ""],
["", "selska-salata", "Селска салата", "0,70", "100", ""],
["", "salata-tiro", "Салата тиро", "0,70", "100", ""],
["", "salata-tzatziki", "Салата Тзатзики", "0,70", "100", ""],
["", "salata-melidzhano", "Салата Мелиджано", "0,70", "100", ""]

            ],

            "barbecue": [
                ["", "pileshka-przhola", "Пилешка пържола", "2,10", "150", ""],
["", "svinska-przhola", "Свинска пържола", "2,10", "150", ""],
["", "svinsko-kyufte", "Свинско кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "150", ""],
["", "svinski-bekon", "Свински бекон", "1,40", "80", ""],
["", "skumriya-na-zhar-czyala", "Скумрия на жар цяла", "4,20", "300", ""]

            ],

            "burgers": [
                ["", "teleshki-burger", "Телешки бургер", "3,50", "350", ""],
["", "svinski-burger", "Свински бургер", "2,80", "350", ""],
["", "pileshki-burger", "Пилешки бургер", "2,80", "350", ""]

            ],

            "others": [
                ["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "0,00", "100", ""],
["", "pecheni-gbi", "Печени гъби", "0,70", "100", ""],
["", "kartofeni-kyufte", "Картофени кюфте", "0,70", "120", ""],
["", "przheni-chushki", "Пържени чушки", "0,00", "100", ""],
["", "kashkaval-pane", "Кашкавал пане", "1,40", "150", ""]

            ],

            "drinks": [
                ["", "pepsi", "Pepsi", "0,70", "330", ""],
["", "pepsi", "Pepsi", "0,70", "500", ""],
["", "seven-up", "Seven up", "0,70", "330", ""],
["", "seven-up", "Seven up", "0,70", "500", ""],
["", "mirinda-portokal", "Миринда портокал", "0,70", "330", ""],
["", "mirinda-portokal", "Миринда портокал", "0,70", "500", ""],
["", "studen-chaj-lipton-limon", "Студен чай липтон лимон", "0,70", "500", ""],
["", "studen-chaj-lipton-praskova", "Студен чай липтон праскова", "0,70", "500", ""],
["", "ajryan-vereya", "Айрян Верея", "0,70", "300", ""],
["", "mineralna-voda-devin", "Минерална вода Девин", "0,70", "500", ""]

            ],

            "beer": [
                ["", "bira-stela-artoa", "Бира Стела Артоа", "1,40", "330", ""],
["", "bira-kamenicza", "Бира Каменица", "1,40", "500", ""],
["", "bira-korona", "Бира Корона", "2,80", "355", ""]

            ]
        }', 
        'slug' => 'barbekyuto-hrana-za-vkshchi',
        'business_name' => 'Барбекюто храна за вкъщи',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6006',
        'address' => 'бул. Руски 32',
        'address_additional' => '',
        'coords_x' => '42.42418668',
        'coords_y' => '25.62845498',
        'phone' => '+359879939370',
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
                ["", "grczka-salata", "Гръцка салата", "3,50", "300", ""],
["", "gradinarska-salata", "Градинарска салата", "3,50", "300", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "300", ""],
["", "salata-tabule---podpravena", "Салата Табуле - подправена", "4,20", "300", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "0,70", "300", ""]

            ],

            "Ястия с месо": [
                ["", "pile-zhulien", "Пиле Жулиен", "4,20", "300", ""],
["", "kachatore", "Качаторе", "4,20", "300", ""],
["", "pileshko-i-svinsko", "Пилешко и свинско", "4,20", "300", ""],
["", "tepanaki", "Тепанаки", "4,20", "300", ""],
["", "svinsko-s-luk", "Свинско с лук", "4,20", "300", ""],
["", "musaka", "Мусака", "3,50", "300", ""]

            ],

            "Ястия без месо": [
                ["", "rizoto", "Ризото", "2,80", "300", ""]

            ],

            "desserts": [
                ["", "arabski-noshhi", "Арабски нощи", "2,10", "150", ""]

            ],

            "Хляб и добавки": [
                ["", "chabata", "Чабата", "0,00", "", ""],
["", "kiselo-mlyako", "Кисело мляко", "0,00", "100", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", ""],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", ""],
["", "fanta-limon", "Fanta Лимон", "1,40", "500", ""],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", ""],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "1,40", "500", ""],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "1,40", "500", ""],
["", "fuzetea-mango-i-ananas-studen-chaj", "Fuzetea Манго и ананас, студен чай", "1,40", "500", ""],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "1,40", "500", ""],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "1,40", "330", ""],
["", "cappy-portokal-nektar", "Cappy Портокал нектар", "0,70", "200", ""],
["", "cappy-praskova", "Cappy Праскова", "0,70", "200", ""],
["", "cappy-banan", "Cappy Банан", "0,70", "200", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "ariana---ken", "Ариана - кен", "1,40", "500", ""],
["", "zagorka---ken", "Загорка - кен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'zahir-hrana-za-vkshchi',
        'business_name' => 'Захир Храна за вкъщи',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Никола Петков 52',
        'address_additional' => '',
        'coords_x' => '42.426982',
        'coords_y' => '25.6624293',
        'phone' => '+359878669244',
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
            
            "Салати и гарнитури": [
                ["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "", ""],
["", "zele-i-morkovi", "Зеле и моркови", "0,70", "", ""],
["", "kartofi-na-furna", "Картофи на фурна", "0,70", "", ""],
["", "chushka-lyuta-marinovana", "Чушка люта маринована", "0,00", "", ""]

            ],

            "soups": [
                ["", "supa-topcheta", "Супа топчета", "1,40", "400", ""],
["", "agneshka-supa", "Агнешка супа", "2,10", "400", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "400", ""],
["", "bob-yakhniya", "Боб яхния", "1,40", "400", ""]

            ],

            "Постни ястия": [
                ["", "bob-yakhniya", "Боб яхния", "1,40", "400", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,10", "", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "1,40", "100", ""],
["", "kyufte", "Кюфте", "1,40", "100", ""],
["", "przheno-kyufte", "Пържено кюфте", "0,70", "80", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "400", ""]

            ],

            "Ястия с месо": [
                ["", "krem-karamel", "Крем карамел", "1,40", "100", ""],
["", "svinsko-ss-zele", "Свинско със зеле", "3,50", "400", ""],
["", "pileshko-butche-pecheno", "Пилешко бутче печено", "2,10", "200", ""],
["", "pile-ss-zele", "Пиле със зеле", "2,80", "400", ""],
["", "pile-s-oriz", "Пиле с ориз", "2,80", "400", ""],
["", "pile-s-kartofi-cherveni", "Пиле с картофи червени", "2,80", "400", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "3,50", "350", ""]

            ],

            "desserts": [
                ["", "makaroni-na-furna", "Макарони на фурна", "0,70", "180", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "180", ""],
["", "krem-nisheste", "Крем нишесте", "0,70", "180", ""]

            ],

            "additives": [
                ["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "kiselo-mlyako", "Кисело мляко", "0,70", "200", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "1500", ""]

            ]
        }', 
        'slug' => 'zakusvalnya-trakiya',
        'business_name' => 'Закусвалня Тракия',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6003',
        'address' => 'бул. Цар Симеон 77',
        'address_additional' => '',
        'coords_x' => '42.42356191',
        'coords_y' => '25.62135245',
        'phone' => '+359886226429',
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
                ["", "kyufte--kebabche-shishchesalata-po-izbor", "Кюфте + кебабче +шишче+салата по избор", "4,90", "200", ""],
["", "przheni-kyufteta-3brsalata-po-izbor", "Пържени кюфтета 3бр.+салата по избор", "4,20", "200", ""],
["", "vienski-shniczelsalata-po-izbor", "Виенски шницел+салата по избор", "3,50", "200", ""]

            ],

            "salads": [
                ["", "kartofena-salata", "Картофена салата", "1,40", "300", ""],
["", "zeleva-salata", "Зелева салата", "1,40", "300", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "1,40", "300", ""]

            ],

            "Панирани ястия": [
                ["", "kashkaval-pane", "Кашкавал пане", "2,10", "", ""],
["", "shniczel-ot-kajma", "Шницел от кайма", "2,80", "", ""],
["", "vienski-shniczel", "Виенски шницел", "1,40", "", ""]

            ],

            "Ястия": [
                ["", "kiselo-zele-s-oriz", "Кисело зеле с ориз", "2,10", "500", ""],
["", "bob-s-kiselo-zele", "Боб с кисело зеле", "2,10", "500", ""],
["", "spanak-s-oriz", "Спанак с ориз", "2,10", "500", ""],
["", "bob-yakhniya", "Боб яхния", "1,40", "500", ""],
["", "svinsko-meso-s-kiselo-zele-i-oriz", "Свинско месо с кисело зеле и ориз", "4,20", "500", ""],
["", "svinsko-meso-s-byal-oriz", "Свинско месо с бял ориз", "4,20", "500", ""],
["", "mish-mash", "Миш Маш", "4,20", "500", ""]

            ],

            "fish": [
                ["", "skumriya-file--salata-po-izbor-150gr", "Скумрия филе  + салата по избор (150гр)", "3,50", "150", ""],
["", "khek--salata-po-izbor-150gr", "Хек  + салата по избор (150гр)", "3,50", "150", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte-100gr", "Кюфте (100гр)", "0,70", "", ""],
["", "shishche-1-broj", "Шишче 1 брой", "1,40", "", ""]

            ],

            "additives": [
                ["", "kartofena-salata", "Картофена салата", "0,70", "150", ""],
["", "zeleva-salata", "Зелева салата", "0,70", "150", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "150", ""]

            ]
        }', 
        'slug' => 'kulinarni-izkusheniya',
        'business_name' => 'Кулинарни Изкушения',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'улица пазарска 31',
        'address_additional' => '',
        'coords_x' => '42.4260235',
        'coords_y' => '25.6324112',
        'phone' => '+359898430348',
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
                ["", "agneshko-pecheno-s-kartofi-na-furna", "Агнешко печено с картофи на фурна", "10,50", "400", ""],
["", "brkani-yajcza-s-pileshko-file", "Бъркани яйца с пилешко филе", "3,50", "", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "3,50", "350", ""],
["", "domashna-torta-s-maskarpone", "Домашна торта с маскарпоне", "2,10", "", ""],
["", "domashni-przheni-kyufteta-s-pryasna-salata", "Домашни пържени кюфтета с прясна салата", "4,20", "400", ""],
["", "evropejski-som-s-vareni-kartofi", "Европейски сом с варени картофи", "4,90", "300", ""],
["", "kartofeni-kyufteta", "Картофени кюфтета", "2,80", "350", ""],
["", "kashkaval-pane-s-przheni-kartofi", "Кашкавал пане с пържени картофи", "3,50", "350", ""],
["", "krem-bryule-s-borovinki", "Крем брюле с боровинки", "1,40", "", ""],
["", "krekhki-svinski-karencza-s-pikantni-kartofki", "Крехки свински каренца с пикантни картофки", "4,90", "", ""],
["", "lazanya-boloneze", "Лазаня Болонезе", "4,20", "", ""],
["", "obezkosten-svinski-dzholan-s-kartofi-na-furna", "Обезкостен свински джолан с картофи на фурна", "4,90", "400", ""],
["", "omlet-po-selski", "Омлет по селски", "2,80", "", ""],
["", "oriz-s-pile-i-zelenchuczi", "Ориз с пиле и зеленчуци", "3,50", "400", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,80", "350", ""],
["", "patladzhan-s-domaten-sos", "Патладжан с доматен сос", "2,80", "350", ""],
["", "pileshka-przhola-s-pryasna-salata", "Пилешка пържола с прясна салата", "4,20", "400", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "pileshki-filencza-na-barbekyu-ss-zelena-salata", "Пилешки филенца на барбекю със зелена салата", "4,20", "", ""],
["", "pileshki-khapki-s-luk-i-gbi", "Пилешки хапки с лук и гъби", "4,90", "", ""],
["", "pileshko-s-lovdzhijski-sos", "Пилешко с ловджийски сос", "4,20", "400", ""],
["", "plnena-pleskavicza-s-przheni-kartofi", "Пълнена плескавица с пържени картофи", "4,20", "400", ""],
["", "przhen-svinski-drob", "Пържен свински дроб", "4,20", "", ""],
["", "przhen-sharan-s-vareni-kartofi", "Пържен шаран с варени картофи", "4,90", "300", ""],
["", "przheni-tikvichki-s-mlechen-sos", "Пържени тиквички с млечен сос", "2,80", "350", ""],
["", "pstrva-ss-svezha-salata", "Пъстърва със свежа салата", "4,90", "300", ""],
["", "svinska-przhola-po-lovdzhijski", "Свинска пържола по ловджийски", "4,90", "", ""],
["", "svinski-vratni-przholki-s-pryasna-salata", "Свински вратни пържолки с прясна салата", "4,20", "400", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "4,20", "", ""],
["", "svinski-karencza-s-gbi", "Свински каренца с гъби", "4,90", "400", ""],
["", "svinski-ushi-na-skara", "Свински уши на скара", "4,90", "", ""],
["", "spanacheni-kyufteta", "Спаначени кюфтета", "3,50", "350", ""],
["", "tarator", "Таратор", "1,40", "300", ""],
["", "teleshki-kyufteta-ss-svezha-salata", "Телешки кюфтета със свежа салата", "4,20", "400", ""],
["", "teleshko-limonato-s-pecheni-kartofi", "Телешко Лимонато с печени картофи", "4,90", "400", ""],
["", "ushhipczi-s-przheni-kartofi", "Ущипци с пържени картофи", "3,50", "400", ""],
["", "chijzkejk-s-borovinki", "Чийзкейк с боровинки", "2,10", "", ""],
["", "chushki-byurek", "Чушки бюрек", "3,50", "", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "300", ""],
["", "shniczel-ot-mlyano-meso-ss-zelena-salata", "Шницел от мляно месо със зелена салата", "3,50", "400", ""]

            ],

            "salads": [
                ["", "vitaminozna", "Витаминозна", "2,80", "350", ""],
["", "grczka", "Гръцка", "3,50", "400", ""],
["", "domati-s-bivolsko-sirene-i-maslini", "Домати с биволско сирене и маслини", "3,50", "400", ""],
["", "zhtvarska-salata", "Жътварска салата", "3,50", "400", ""],
["", "zelena-s-avokado", "Зелена с авокадо", "4,20", "400", ""],
["", "zelena-s-kinoa", "Зелена с киноа", "3,50", "400", ""],
["", "zelena-s-riba-ton", "Зелена с риба тон", "3,50", "400", ""],
["", "zelena-s-khamon", "Зелена с хамон", "4,20", "400", ""],
["", "zelena-ss-selodka", "Зелена със сельодка", "4,20", "400", ""],
["", "kapreze", "Капрезе", "4,20", "400", ""],
["", "miksta", "Микста", "4,20", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "pecheni-piperki-s-bivolsko-sirene-i-orekhi", "Печени пиперки с биволско сирене и орехи", "3,50", "350", ""],
["", "rambla", "Рамбла", "4,90", "600", ""],
["", "salata-s-patladzhan", "Салата с патладжан", "3,50", "400", ""],
["", "salmon", "Салмон", "4,20", "400", ""],
["", "selska-salata", "Селска салата", "4,20", "400", ""],
["", "slavyanska-salata", "Славянска салата", "3,50", "400", ""],
["", "sredizemnomorska", "Средиземноморска", "6,30", "400", ""],
["", "czezar", "Цезар", "4,20", "400", ""],
["", "chetiri-sirena", "Четири сирена", "4,20", "400", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""]

            ],

            "Сухи мезета": [
                ["", "lukanka", "Луканка", "1,40", "50", ""],
["", "pastrma", "Пастърма", "2,80", "50", ""],
["", "selekcziya-sukhi-mezeta", "Селекция сухи мезета", "8,40", "200", ""],
["", "teleshki-sudzhuk", "Телешки суджук", "1,40", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "khamon-serano", "Хамон Серано", "2,80", "50", ""]

            ],

            "Сирена": [
                ["", "bivolsko-sirene", "Биволско сирене", "1,40", "50", ""],
["", "bri", "Бри", "1,40", "50", ""],
["", "kamember", "Камембер", "1,40", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "krave-sirene", "Краве сирене", "0,70", "50", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""],
["", "chedr", "Чедър", "1,40", "50", ""]

            ],

            "Безмесни предястия": [
                ["", "brokoli-ss-smetana-i-sino-sirene", "Броколи със сметана и синьо сирене", "3,50", "300", ""],
["", "gorski-gbi-s-bosilekov-sos", "Горски гъби с босилеков сос", "4,20", "300", ""],
["", "gbi-na-zhar-s-plnezh-ot-sirene", "Гъби на жар с пълнеж от сирене", "3,50", "300", ""],
["", "zapecheni-zelenchuczi-s-bivolsko-sirene", "Запечени зеленчуци с биволско сирене", "4,90", "300", ""],
["", "zelenchuczi-na-keremida-s-moczarela", "Зеленчуци на керемида с моцарела", "4,20", "350", ""],
["", "kamember-s-borovinki", "Камембер с боровинки", "3,50", "200", ""],
["", "kartofen-chips", "Картофен чипс", "2,80", "250", ""],
["", "kyuftencza-ot-tikvichki-s-mlechen-sos", "Кюфтенца от тиквички с млечен сос", "3,50", "300", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "3,50", "300", ""],
["", "panirani-topeni-sirencza-ss-sladko-ot-borovinki", "Панирани топени сиренца със сладко от боровинки", "3,50", "250", ""],
["", "pikantni-kartofi-s-mlechen-sos", "Пикантни картофи с млечен сос", "2,80", "250", ""],
["", "przheni-tikvichki-s-kopr-i-chesnov-sos", "Пържени тиквички с копър и чеснов сос", "3,50", "300", ""],
["", "rizoto-s-brokoli-i-maskarpone", "Ризото с броколи и маскарпоне", "3,50", "300", ""],
["", "rulcza-ot-patladzhan", "Рулца от патладжан", "4,20", "350", ""],
["", "selski-kartofi", "Селски картофи", "2,10", "250", ""],
["", "spanacheni-kyufteta", "Спаначени кюфтета", "3,50", "300", ""],
["", "khrupkavi-zelenchuczi", "Хрупкави зеленчуци", "4,20", "400", ""]

            ],

            "Морски предястия": [
                ["", "kalmari-na-skara", "Калмари на скара", "8,40", "200", ""],
["", "kalmari-po-sredizemnomorski", "Калмари по средиземноморски", "7,70", "250", ""],
["", "midi-v-maslo", "Миди в масло", "4,20", "250", ""],
["", "pipala-ot-kalmari", "Пипала от калмари", "7,70", "250", ""],
["", "razyadka-ss-somga", "Разядка със сьомга", "4,20", "150", ""],
["", "skaridi-na-plocha", "Скариди на плоча", "9,10", "250", ""],
["", "khrupkavi-kalmari", "Хрупкави калмари", "8,40", "300", ""],
["", "khrupkavi-ribni-filencza-ss-susam", "Хрупкави рибни филенца със сусам", "4,90", "300", ""]

            ],

            "barbecue": [
                ["", "bolyarsko-plato", "Болярско плато", "23,80", "1500", ""],
["", "byala-veshalicza", "Бяла вешалица", "6,30", "400", ""],
["", "domashen-sudzhuk", "Домашен суджук", "4,90", "350", ""],
["", "zhulieni-ot-svinski-vrat", "Жулиени от свински врат", "6,30", "400", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "krekhki-pileshki-filencza", "Крехки пилешки филенца", "4,20", "300", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kyufteta-ot-mlado-teleshko", "Кюфтета от младо телешко", "6,30", "400", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "5,60", "400", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "150", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "350", ""],
["", "svinski-kotletcheta", "Свински котлетчета", "6,30", "500", ""],
["", "svinski-rebrcza", "Свински ребърца", "6,30", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "selekcziya-sirena", "Селекция сирена", "9,80", "350", ""],
["", "sochni-mini-kyuftencza", "Сочни мини кюфтенца", "4,20", "350", ""],
["", "fakhitas", "Фахитас", "8,40", "500", ""],
["", "shareni-svinski-flejki", "Шарени свински флейки", "5,60", "400", ""],
["", "yunashko-meze", "Юнашко мезе", "9,80", "700", ""]

            ],

            "Предястия с месо": [
                ["", "borito-s-pile", "Борито с пиле", "4,20", "350", ""],
["", "gshi-drob-na-skara", "Гъши дроб на скара", "9,80", "200", ""],
["", "gshi-drob-s-karamelizirani-yablki", "Гъши дроб с карамелизирани ябълки", "10,50", "250", ""],
["", "zapekanka-s-pile", "Запеканка с пиле", "4,90", "350", ""],
["", "kamember-v-khamon", "Камембер в хамон", "4,90", "250", ""],
["", "kashkavalcheta-v-bekon", "Кашкавалчета в бекон", "4,20", "250", ""],
["", "krekhko-mescze-ot-svinsko-file-vrkhu-kartofeno-pyure", "Крехко месце от свинско филе върху картофено пюре", "4,90", "350", ""],
["", "pileshki-soleti-ss-susam", "Пилешки солети със сусам", "3,50", "300", ""],
["", "pileshki-filencza-v-bekon", "Пилешки филенца в бекон", "3,50", "250", ""],
["", "pileshki-filencza-v-kornflejks", "Пилешки филенца в корнфлейкс", "4,20", "300", ""],
["", "pileshki-filencza-s-parmezan", "Пилешки филенца с пармезан", "4,20", "300", ""],
["", "razyadka-s-khamon", "Разядка с хамон", "4,20", "150", ""],
["", "svinski-kscheta-s-luk-i-bekon", "Свински късчета с лук и бекон", "4,90", "350", ""],
["", "teleshka-tava-dzhiger", "Телешка тава джигер", "4,90", "400", ""],
["", "teleshki-drob-na-skara", "Телешки дроб на скара", "4,20", "350", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "5,60", "200", ""]

            ],

            "Ястия със свинско": [
                ["", "zadushena-vratna-przhola", "Задушена вратна пържола", "5,60", "350", ""],
["", "medalon-ot-svinsko-bon-file-s-manatarki", "Медальон от свинско бон филе с манатарки", "7,00", "350", ""],
["", "plnen-svinski-kotlet", "Пълнен свински котлет", "6,30", "350", ""],
["", "svinski-dzholan-na-keremida", "Свински джолан на керемида", "8,40", "500", ""],
["", "svinski-dzholan-s-chesnovi-kartofki", "Свински джолан с чеснови картофки", "5,60", "400", ""],
["", "svinski-rebra-na-furna", "Свински ребра на фурна", "6,30", "450", ""],
["", "svinsko-bon-file", "Свинско бон филе", "7,00", "400", ""],
["", "svinsko-bon-file-s-topeno-sirene", "Свинско бон филе с топено сирене", "6,30", "400", ""],
["", "file-saltinboka", "Филе салтинбока", "5,60", "350", ""]

            ],

            "Ястия с риба": [
                ["", "pstrva", "Пъстърва", "5,60", "350", ""],
["", "rulcza-ot-tilapiya", "Рулца от тилапия", "7,00", "350", ""],
["", "som", "Сом", "6,30", "300", ""],
["", "stek-ot-somga-s-karamelizirana-korichka", "Стек от сьомга с карамелизирана коричка", "11,90", "350", ""],
["", "tilapiya-na-plocha", "Тилапия на плоча", "5,60", "300", ""],
["", "file-ot-somga-ss-sos-kholandes", "Филе от сьомга със сос холандес", "10,50", "350", ""],
["", "sharan", "Шаран", "4,90", "300", ""]

            ],

            "Ястия с телешко": [
                ["", "agneshko-pecheno", "Агнешко печено", "9,80", "400", ""],
["", "zadusheni-teleshki-filencza", "Задушени телешки филенца", "10,50", "350", ""],
["", "klasicheski-burger", "Класически бургер", "6,30", "350", ""],
["", "krekhko-teleshko-v-speczialen-sos", "Крехко телешко в специален сос", "11,20", "400", ""],
["", "teleshki-biftek-s-pikantni-kartofi", "Телешки бифтек с пикантни картофи", "6,30", "350", ""],
["", "teleshki-stek-s-pechen-sos", "Телешки стек с печен сос", "12,60", "400", ""],
["", "teleshko-limonato", "Телешко лимонато", "6,30", "350", ""]

            ],

            "Ястия с пилешко": [
                ["", "pateshko-magre-s-marinovani-zelenchuczi", "Патешко магре с мариновани зеленчуци", "10,50", "400", ""],
["", "pile-v-proshuto", "Пиле в прошуто", "6,30", "350", ""],
["", "pile-rokfor", "Пиле Рокфор", "5,60", "400", ""],
["", "pile-s-moczarela", "Пиле с моцарела", "5,60", "400", ""],
["", "pile-tryufel", "Пиле Трюфел", "5,60", "400", ""],
["", "pileshki-filencza-s-brokoli-i-parmezan", "Пилешки филенца с броколи и пармезан", "4,90", "350", ""],
["", "pileshko-role-ss-spanak-i-sirene", "Пилешко роле със спанак и сирене", "5,60", "350", ""],
["", "plnena-pileshka-przhola", "Пълнена пилешка пържола", "5,60", "400", ""],
["", "plneni-pileshki-grdi", "Пълнени пилешки гърди", "5,60", "400", ""]

            ],

            "pizza": [
                ["", "picza-bianko-polo", "Пица Бианко поло", "4,90", "600", ""],
["", "picza-di-karne", "Пица Ди Карне", "4,90", "600", ""],
["", "picza-margarita", "Пица Маргарита", "4,20", "600", ""],
["", "picza-proshuto-krudo", "Пица Прошуто крудо", "5,60", "600", ""],
["", "picza-salsiche", "Пица Салсиче", "4,90", "600", ""],
["", "picza-toskana", "Пица Тоскана", "4,90", "600", ""],
["", "picza-chetiri-sirena", "Пица Четири сирена", "4,90", "600", ""]

            ],

            "Пица и паста": [
                ["", "lazanya", "Лазаня", "4,20", "300", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "350", ""],
["", "taliateli-karbonara", "Талиатели Карбонара", "4,90", "400", ""],
["", "taliateli-s-brokoli-i-smetana", "Талиатели с броколи и сметана", "4,90", "400", ""]

            ],

            "bread": [
                ["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "", ""]

            ],

            "sauces": [
                ["", "domaten-sos", "Доматен сос", "0,70", "80", ""],
["", "sos-ajoli", "Сос айоли", "0,70", "80", ""],
["", "sos-barbekyu", "Сос барбекю", "0,70", "80", ""],
["", "sos-pesto", "Сос песто", "0,70", "80", ""],
["", "sos-sirena", "Сос сирена", "1,40", "80", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "80", ""],
["", "chili-sos", "Чили сос", "0,70", "80", ""]

            ],

            "garnish": [
                ["", "byal-oriz", "Бял ориз", "0,70", "150", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "150", ""],
["", "domati", "Домати", "0,70", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "150", ""],
["", "kartofi-sote", "Картофи соте", "0,70", "150", ""],
["", "krastaviczi", "Краставици", "0,70", "150", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "1,40", "150", ""]

            ],

            "desserts": [
                ["", "domashna-torta-s-maskarpone", "Домашна торта с маскарпоне", "2,10", "180", ""],
["", "krem-bryule", "Крем брюле", "1,40", "200", ""],
["", "chijzkejk-s-borovinki", "Чийзкейк с боровинки", "2,80", "240", ""]

            ]
        }', 
        'slug' => 'rambla-bar-grill',
        'business_name' => 'Rambla Bar &amp; Grill',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Цар Иван Шишман 64',
        'address_additional' => '',
        'coords_x' => '42.42882141',
        'coords_y' => '25.62867779',
        'phone' => '+359899856080',
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
                ["", "tarator", "Таратор", "0,70", "", ""]

            ],

            "salads": [
                ["", "salata-czezar", "Салата Цезар", "3,50", "400", ""],
["", "salata-arizona", "Салата Аризона", "3,50", "400", ""],
["", "salata-bg", "Салата БГ", "2,80", "400", ""],
["", "salata-kapreze-300gr", "Салата Капрезе (300гр)", "3,50", "", ""],
["", "salata-proshuto-400gr", "Салата Прошуто (400гр)", "4,20", "", ""],
["", "sino-zelena-salata-400gr", "Синьо зелена салата (400гр)", "3,50", "", ""]

            ],

            "starters": [
                ["", "khrupkavi-topeni-sirencza", "Хрупкави топени сиренца", "3,50", "200", ""],
["", "khrupkavi-tikvichki", "Хрупкави тиквички", "2,80", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,20", "300", ""],
["", "rebrcza-bfalo", "Ребърца Бъфало", "6,30", "400", ""],
["", "brusketki", "Брускетки", "2,80", "200", ""],
["", "svinski-ushi", "Свински уши", "3,50", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""]

            ],

            "sandwiches": [
                ["", "tomato-sandvich", "Томато сандвич", "3,50", "450", ""],
["", "sandvich-maks", "Сандвич Макс", "3,50", "450", ""],
["", "sandvich-khaplo", "Сандвич Хапльо", "3,50", "450", ""],
["", "sandvich-monte-kristo", "Сандвич Монте Кристо", "2,80", "450", ""]

            ],

            "Wrap сандвичи": [
                ["", "czezar-wrap-sandvich", "Цезар wrap сандвич", "3,50", "300", ""],
["", "teleshki-wrap-sandvich", "Телешки wrap сандвич", "4,20", "300", ""]

            ],

            "Касадиас": [
                ["", "kasadias-s-pile", "Касадиас с пиле", "2,80", "400", ""],
["", "kasadias-s-teleshko-ragu", "Касадиас с телешко рагу", "4,90", "400", ""]

            ],

            "burgers": [
                ["", "teleshki-burger", "Телешки бургер", "4,20", "420", ""]

            ],

            "Паста и ризото": [
                ["", "kapelini-boloneze", "Капелини Болонезе", "4,20", "450", ""],
["", "kapelini-karbonara", "Капелини Карбонара", "4,20", "450", ""],
["", "kapelini-la-valeta", "Капелини Ла Валета", "4,20", "450", ""],
["", "rizoto-s-teleshko", "Ризото с телешко", "4,20", "400", ""]

            ],

            "specialties": [
                ["", "svinski-karencza", "Свински каренца", "5,60", "400", ""],
["", "svinsko-shogun", "Свинско Шогун", "5,60", "400", ""]

            ],

            "desserts": [
                ["", "frenska-selska-torta", "Френска селска торта", "2,10", "", ""],
["", "biskvitena-torta-s-maskarpone", "Бисквитена торта с маскарпоне", "2,10", "", ""],
["", "krem-khaus-s-vishni", "Крем хаус с вишни", "2,10", "", ""],
["", "krem-khaus-s-shokolad", "Крем хаус с шоколад", "2,10", "", ""],
["", "gofreta-s-maskarpone-i-shokolad", "Гофрета с маскарпоне и шоколад", "2,80", "", ""]

            ],

            "drinks": [
                ["", "izvorna-voda-baldaran", "Изворна вода Балдаран", "0,00", "500", ""],
["", "izvorna-voda-baldaran", "Изворна вода Балдаран", "0,70", "850", ""],
["", "ajryan", "Айрян", "0,70", "300", ""]

            ],

            "Прибори": [
                ["", "komplekt-pribori", "Комплект прибори", "0,00", "", ""]

            ]
        }', 
        'slug' => 'restorant-smile',
        'business_name' => 'Ресторант Smile',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6003',
        'address' => 'ул. Света Троица 99',
        'address_additional' => '',
        'coords_x' => '42.425067',
        'coords_y' => '25.6200442',
        'phone' => '+359895397220',
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
            
            "Палачинки": [
                ["", "palachinka-s-nutela", "Палачинка с Нутела", "1,40", "200", ""],
["", "palachinka-ss-sladko-po-izbor", "Палачинка със сладко по избор", "1,40", "200", ""],
["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "1,40", "250", ""],
["", "palachinka-ss-sirene-i-kashkaval", "Палачинка със сирене и кашкавал", "1,40", "250", ""],
["", "palachinka-s-shunka-kashkaval-i-domat", "Палачинка с шунка, кашкавал и домат", "2,10", "270", ""],
["", "palachinka-s-bekon-kashkaval-i-domat", "Палачинка с бекон, кашкавал и домат", "2,10", "270", ""],
["", "palachinka-s-pileshko-i-sos-bonita", "Палачинка с пилешко и сос Бонита", "2,10", "270", ""]

            ],

            "Bubble Гофрети": [
                ["", "s-med", "С мед", "1,40", "200", ""],
["", "s-shokolad-nutela", "С шоколад Нутела", "1,40", "200", ""],
["", "s-banan-i-shokolad", "С банан и шоколад", "2,10", "250", ""],
["", "ss-sladko-po-izbor", "Със сладко по избор", "1,40", "200", ""]

            ],

            "Фреш": [
                ["", "grejpfrut", "Грейпфрут", "1,40", "300", ""]

            ],

            "Лимонади": [
                ["", "domashna-limonada", "Домашна лимонада", "1,40", "300", ""]

            ]
        }', 
        'slug' => 'palachinkarnica',
        'business_name' => 'Палачинкарница',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Граф Игнатиев 33',
        'address_additional' => '',
        'coords_x' => '42.4289185',
        'coords_y' => '25.6358502',
        'phone' => '+359879893207',
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
                ["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "500", ""],
["", "trakijska-salata", "Тракийска салата", "3,50", "400", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "500", ""],
["", "salata-tuna", "Салата Туна", "4,20", "350", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "salata-ss-sino-sirene", "Салата със синьо сирене", "4,20", "300", ""]

            ],

            "starters": [
                ["", "topeni-sirencza-s-borovinkovo-sladko", "Топени сиренца с боровинково сладко", "4,20", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,20", "300", ""],
["", "khrupkavi-pileshki-krilcza", "Хрупкави пилешки крилца", "3,50", "400", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "350", ""],
["", "svinski-drob", "Свински дроб", "2,80", "300", ""],
["", "zapekanka-s-bekon", "Запеканка с бекон", "3,50", "350", ""],
["", "plneni-gbi-ss-sirena", "Пълнени гъби със сирена", "3,50", "500", ""],
["", "brokoli-ss-smetana", "Броколи със сметана", "4,20", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "350", ""],
["", "svinski-ushi-na-skara", "Свински уши на скара", "4,20", "350", ""],
["", "koledarsko-meze", "Коледарско мезе", "3,50", "450", ""],
["", "selska-pitka-s-maslo", "Селска питка с масло", "0,70", "", ""]

            ],

            "Ястия от пилешко": [
                ["", "pile-formadzho", "Пиле Формаджо", "9,10", "400", ""],
["", "pileshki-kscheta-s-brokoli-i-smetana", "Пилешки късчета с броколи и сметана", "6,30", "400", ""],
["", "pileshko-file-v-sos-ot-manatarki", "Пилешко филе в сос от манатарки", "9,10", "400", ""],
["", "pileshka-przhola-po-bolyarski", "Пилешка пържола по Болярски", "5,60", "400", ""]

            ],

            "Ястия от свинско": [
                ["", "shniczel-po-vienski", "Шницел по Виенски", "7,70", "350", ""],
["", "svinsko-file-s-gben-sos", "Свинско филе с гъбен сос", "8,40", "400", ""],
["", "svinsko-file-v-sos-ot-manatarki-s-khrupkav-kartof", "Свинско филе в сос от манатарки с хрупкав картоф", "9,10", "400", ""],
["", "svinski-filencza-s-bekon-i-gbi-v-sos", "Свински филенца с бекон и гъби в сос", "7,00", "400", ""]

            ],

            "grill": [
                ["", "tatarsko-kyufte", "Татарско кюфте", "3,50", "200", ""],
["", "kyufte", "Кюфте", "1,40", "100", ""],
["", "kotletcheta-na-skara", "Котлетчета на скара", "4,90", "250", ""],
["", "svinski-karencza-na-skara", "Свински каренца на скара", "5,60", "250", ""]

            ],

            "fish": [
                ["", "przheno-file-ot-pstrva-s-garnitura", "Пържено филе от пъстърва с гарнитура", "8,40", "300", ""],
["", "pstrva", "Пъстърва", "8,40", "300", ""],
["", "lavrak-na-skara-s-garnitura", "Лаврак на скара с гарнитура", "8,40", "300", ""],
["", "file-somga-s-garnitura", "Филе сьомга с гарнитура", "9,10", "300", ""],
["", "byala-riba-pane-s-garnitura", "Бяла риба пане с гарнитура", "6,30", "350", ""],
["", "kalamri-pane", "Каламри пане", "6,30", "200", ""]

            ],

            "desserts": [
                ["", "nutela", "Нутела", "2,10", "150", ""],
["", "frenska-selska-torta", "Френска селска торта", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'restorant-diamant',
        'business_name' => 'Ресторант Диамант',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6003',
        'address' => 'ул. Цар Симеон Велики 59',
        'address_additional' => '',
        'coords_x' => '42.42266253',
        'coords_y' => '25.6165461',
        'phone' => '+359888434962',
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
                ["", "9kitajska-turshiya", "9.Китайска туршия", "2,80", "350", ""],
["", "10salata-ot-cherni-i-beli-kitajski-gbi", "10.Салата от черни и бели китайски гъби", "3,50", "350", ""],
["", "11bambukova-salata", "11.Бамбукова салата", "3,50", "350", ""],
["", "13kitajska-salata", "13.Китайска салата", "4,20", "350", ""],
["", "14zlatni-iglichki", "14.Златни иглички", "3,50", "350", ""],
["", "15morski-darove", "15.Морски дарове", "5,60", "350", ""],
["", "16shopska-salata", "16.Шопска салата", "3,50", "350", ""],
["", "17ovcharska-salata", "17.Овчарска салата", "4,20", "350", ""]

            ],

            "soups": [
                ["", "1lyuto-kisela-supa", "1.Люто кисела супа", "2,10", "250", ""],
["", "2pileshka-supa-s-pechurki", "2.Пилешка супа с печурки", "2,10", "250", ""],
["", "4supa-domati-s-yajcze", "4.Супа домати с яйце", "2,10", "250", ""],
["", "7morski-darove", "7.Морски дарове", "3,50", "250", ""],
["", "8pileshka-supa-s-czarevicza", "8.Пилешка супа с царевица", "2,10", "250", ""],
["", "5krem-supa-ot-brokoli", "5.Крем супа от броколи", "2,80", "250", ""],
["", "6kartofena-krem-supa", "6.Картофена крем супа", "2,10", "250", ""]

            ],

            "starters": [
                ["", "41kartofi-v-soev-sos", "41.Картофи в соев сос", "4,20", "600", ""],
["", "42pechurki-v-soev-sos", "42.Печурки в соев сос", "4,90", "400", ""],
["", "43patladzhan-v-lyuto-sladko-kisel-sos", "43.Патладжан в люто-сладко-кисел сос", "4,90", "400", ""],
["", "44przheni-zelenchuczi-asorti", "44.Пържени зеленчуци асорти", "4,90", "600", ""],
["", "46pechurki-s-aromatni-gbi-i-bambuk", "46.Печурки с ароматни гъби и бамбук", "4,90", "400", ""],
["", "47przheni-kartofi", "47.Пържени картофи", "2,80", "300", ""],
["", "48chips-skaridi", "48.Чипс скариди", "2,10", "80", ""],
["", "49pileshki-drobcheta-s-luk", "49.Пилешки дробчета с лук", "3,50", "400", ""],
["", "50pileshki-srcza-s-luk", "50.Пилешки сърца с лук", "3,50", "400", ""],
["", "52przheni-pileshki-krilcza-po-kitajski", "52.Пържени пилешки крилца по китайски", "4,90", "", ""],
["", "53pileshki-krilcza-v-soev-sos", "53.Пилешки крилца в соев сос", "4,90", "", ""],
["", "56przhen-kitajski-khlyab", "56.Пържен китайски хляб", "0,70", "", ""]

            ],

            "duck": [
                ["", "93paticza-ss-zelenchuczi", "93.Патица със зеленчуци", "9,10", "600", ""],
["", "94paticza-s-bambuk-i-kitajski-gbi", "94.Патица с бамбук и китайски гъби", "9,10", "600", ""],
["", "95paticza-s-pechurki", "95.Патица с печурки", "9,10", "600", ""],
["", "96lyuta-paticza", "96.Люта патица", "9,10", "600", ""],
["", "97khrupkava-paticza", "97.Хрупкава патица", "9,10", "300", ""],
["", "98pateshko-s-ananas", "98.Патешко с ананас", "9,10", "600", ""],
["", "99pateshko-v-sladko-kisel-sos", "99.Патешко в сладко-кисел сос", "9,10", "600", ""]

            ],

            "rice": [
                ["", "19przhen-oriz-ss-zelenchuczi", "19.Пържен ориз със зеленчуци", "4,20", "800", ""],
["", "20przhen-oriz-ss-pileshko-meso", "20.Пържен ориз със пилешко месо", "4,90", "800", ""],
["", "21przhen-oriz-s-tri-vida-meso", "21.Пържен ориз с три вида месо", "4,90", "800", ""],
["", "22przhen-oriz-s-bambuk-i-kitajski-gbi", "22.Пържен ориз с бамбук и китайски гъби", "4,90", "800", ""],
["", "23oriz-s-morski-darove", "23.Ориз с морски дарове", "6,30", "800", ""],
["", "24oriz-po-guandonski", "24.Ориз по Гуандонски", "4,90", "800", ""],
["", "25oriz-ss-skarida", "25.Ориз със скарида", "6,30", "800", ""],
["", "26oriz-ss-kri-i-zelenchuczi", "26.Ориз със къри и зеленчуци", "4,90", "800", ""],
["", "27przhen-oriz-s-pechurki", "27.Пържен ориз с печурки", "4,90", "800", ""],
["", "28przhen-oriz-ss-svinsko", "28.Пържен ориз със свинско", "4,90", "800", ""],
["", "29byal-oriz", "29.Бял ориз", "2,10", "300", ""]

            ],

            "Оризови спагети": [
                ["", "37orizovi-spageti-ss-zelenchuczi", "37.Оризови спагети със зеленчуци", "4,90", "600", ""],
["", "38orizovi-spageti-ss-pile", "38.Оризови спагети със пиле", "5,60", "600", ""],
["", "39orizovi-spageti-s-tri-vida-meso", "39.Оризови спагети с три вида месо", "5,60", "600", ""],
["", "40orizovi-spageti-ss-skaridi", "40.Оризови спагети със скариди", "6,30", "600", ""]

            ],

            "pasta": [
                ["", "30spageti-ss-zelenchuczi", "30.Спагети със зеленчуци", "4,20", "700", ""],
["", "31spageti-s-pileshko", "31.Спагети с пилешко", "4,90", "700", ""],
["", "32spageti-s-tri-vida-meso", "32.Спагети с три вида месо", "4,90", "700", ""],
["", "33spageti-s-bambuk-i-kitajski-gbi", "33.Спагети с бамбук и китайски гъби", "4,90", "700", ""],
["", "34morski-darove", "34.Морски дарове", "6,30", "700", ""],
["", "35spageti-ss-svinsko", "35.Спагети със свинско", "4,90", "700", ""],
["", "36spageti-ss-skaridi", "36.Спагети със скариди", "6,30", "700", ""]

            ],

            "Морски деликатеси": [
                ["", "100-riba-ss-zelenchuczi", "100. Риба със зеленчуци", "7,70", "600", ""],
["", "101riba-s-bambuk-i-kitajski-gbi", "101.Риба с бамбук и китайски гъби", "7,70", "600", ""],
["", "102riba-v-sladko-kisel-sos", "102.Риба в сладко кисел сос", "7,70", "600", ""],
["", "103khrupkava-riba", "103.Хрупкава риба", "7,70", "400", ""],
["", "104kalmari-ss-zelenchuczi", "104.Калмари със зеленчуци", "9,10", "500", ""],
["", "105skaridi-ss-zelenchuczi", "105.Скариди със зеленчуци", "11,20", "500", ""],
["", "106skaridi-s-kashu", "106.Скариди с кашу", "14,00", "400", ""],
["", "107panirani-kalmari", "107.Панирани калмари", "10,50", "300", ""]

            ],

            "Ястия с пиле": [
                ["", "57pile-ss-zelenchuczi", "57.Пиле със зеленчуци", "6,30", "700", ""],
["", "58pile-s-bambuk-i-kitajska-gba", "58.Пиле с бамбук и китайска гъба", "6,30", "700", ""],
["", "59pile-s-pechurki", "59.Пиле с печурки", "6,30", "500", ""],
["", "60pile-v-lyuto-sladko-kisel-sos", "60.Пиле в люто-сладко-кисел-сос", "6,30", "700", ""],
["", "61shankhaj-sladko-kiselo-pile", "61.Шанхай сладко-кисело пиле", "7,00", "700", ""],
["", "62pile-v-sladko-kisel-sos", "62.Пиле в сладко кисел сос", "7,00", "600", ""],
["", "63khrupkavo-pile", "63.Хрупкаво пиле", "6,30", "400", ""],
["", "64pile-s-aromatni-gbi", "64.Пиле с ароматни гъби", "6,30", "500", ""],
["", "65pile-ss-susam", "65.Пиле със сусам", "7,00", "400", ""],
["", "66pile-s-ananas", "66.Пиле с ананас", "7,00", "700", ""],
["", "67pile-gunbao", "67.Пиле гунбао", "7,00", "700", ""],
["", "68pile-kashu", "68.Пиле кашу", "10,50", "400", ""],
["", "69pile-s-kartofi", "69.Пиле с картофи", "6,30", "700", ""],
["", "70pile-s-czarevicza", "70.Пиле с царевица", "6,30", "400", ""]

            ],

            "Свинско месо": [
                ["", "71svinsko-meso-ss-zelenchuczi", "71.Свинско месо със зеленчуци", "6,30", "700", ""],
["", "72svinsko-s-bambuk-i-kitajski-gbi", "72.Свинско с бамбук и китайски гъби", "7,00", "700", ""],
["", "73svinsko-s-pechurki", "73.Свинско с печурки", "7,00", "500", ""],
["", "74svinsko-v-lyuto-sladko-kisel-sos", "74.Свинско в люто-сладко-кисел сос", "7,00", "700", ""],
["", "75shankhaj-sladko-kiselo-svinsko", "75.Шанхай сладко-кисело свинско", "7,00", "700", ""],
["", "76svinsko-v-sladko-kisel-sos", "76.Свинско в сладко-кисел сос", "6,30", "600", ""],
["", "77kotletna-przhola-v-galeta", "77.Котлетна пържола в галета", "7,00", "", ""],
["", "78svinsko-v-aromatni-gbi", "78.Свинско в ароматни гъби", "6,30", "500", ""],
["", "79svinski-rebra-po-shankhajski", "79.Свински ребра по Шанхайски", "8,40", "400", ""],
["", "80svinski-rebra-s-cheren-piper", "80.Свински ребра с черен пипер", "8,40", "400", ""],
["", "81lyuto-svinsko", "81.Люто свинско", "7,00", "700", ""],
["", "82aromatno-khrupkavo-svinsko", "82.Ароматно хрупкаво свинско", "6,30", "400", ""],
["", "83przheno-svinsko-s-luk", "83.Пържено свинско с лук", "6,30", "500", ""],
["", "85svinsko-s-kartofi", "85.Свинско с картофи", "6,30", "700", ""]

            ],

            "Телешко месо": [
                ["", "86teleshko-ss-zelenchuczi", "86.Телешко със зеленчуци", "7,00", "600", ""],
["", "87teleshko-s-bambuk-i-kitajski-gbi", "87.Телешко с бамбук и китайски гъби", "7,00", "600", ""],
["", "88teleshko-s-pechurki", "88.Телешко с печурки", "7,00", "500", ""],
["", "89lyuto-teleshko", "89.Люто телешко", "7,00", "600", ""],
["", "90teleshko-s-kri", "90.Телешко с къри", "7,00", "600", ""],
["", "91teleshko-s-aromatni-gbi", "91.Телешко с ароматни гъби", "7,70", "500", ""],
["", "92teleshko-s-kartofi", "92.Телешко с картофи", "7,70", "700", ""]

            ],

            "desserts": [
                ["", "108przhen-banan", "108.Пържен банан", "1,40", "200", ""],
["", "109przhen-ananas", "109.Пържен ананас", "1,40", "200", ""],
["", "110przhena-yablka", "110.Пържена ябълка", "1,40", "200", ""],
["", "113plodova-salata", "113.Плодова салата", "2,10", "200", ""]

            ]
        }', 
        'slug' => 'kitayski-restorant-shanhay-stara-zagora',
        'business_name' => 'Китайски ресторант Шанхай (Стара Загора)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Света Троица 81',
        'address_additional' => '',
        'coords_x' => '42.42397716',
        'coords_y' => '25.62028808',
        'phone' => '+359883526666',
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
                ["", "salata-czezar", "Салата Цезар", "4,20", "300", ""]

            ],

            "burgers": [
                ["", "blek-angs", "Блек Ангъс", "7,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/701341.jpg?width=302"],
["", "the-grill", "The Grill", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/701342.jpg?width=302"],
["", "pig", "PIG", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/701343.jpg?width=302"],
["", "piggy", "Piggy", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/701344.jpg?width=302"],
["", "beyond-burger", "Beyond Burger", "11,90", "113", ""],
["", "cheap-burger", "Cheap Burger", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1047380.jpg?width=302"]

            ],

            "Грил": [
                ["", "kebapche", "Кебапче", "1,40", "100", ""],
["", "kyufte", "Кюфте", "1,40", "100", ""],
["", "shishche", "Шишче", "1,40", "100", ""],
["", "svinski-karencza-2br--", "Свински каренца (2бр -", "5,60", "350", ""]

            ],

            "The Grill Combo": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "250", "https://images.deliveryhero.io/image/fd-bg/Products/701350.jpg?width=302"],
["", "kebapche-3br-po", "Кебапче (3бр по", "4,20", "100", ""],
["", "kyufte-3br-po", "Кюфте (3бр по", "4,20", "100", ""],
["", "pileshki-shishcheta", "Пилешки шишчета", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/701353.jpg?width=302"],
["", "kombo-yajcze-na-plocha", "Комбо яйце на плоча", "2,80", "", ""],
["", "kombo-svinski-karencza", "Комбо свински каренца", "7,00", "", ""]

            ],

            "The Grill Box": [
                ["", "kebapche-10br-po", "Кебапче (10бр по", "10,50", "80", ""],
["", "kyufte-10br-po", "Кюфте (10бр по", "10,50", "80", ""],
["", "shishche-10br-po", "Шишче (10бр по", "12,60", "100", "https://images.deliveryhero.io/image/fd-bg/Products/701358.jpg?width=302"]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,70", "100", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "zelena-salata-s-repichki-i-krastaviczi", "Зелена салата с репички и краставици", "0,70", "100", ""],
["", "lyutenicza", "Лютеница", "0,70", "50", ""],
["", "tiro-salata", "Тиро салата", "0,70", "50", ""],
["", "tikvichki-s-kiselo-mlyako", "Тиквички с кисело мляко", "0,70", "50", ""],
["", "dzadziki", "Дзадзики", "0,70", "50", ""],
["", "pecheni-chushki-lyuti", "Печени чушки люти", "0,00", "", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "300", ""],
["", "tiro-salata-ss-sirencza", "Тиро салата със сиренца", "0,70", "50", ""],
["", "tiro-salata-ss-sirencza-i-chushka", "Тиро салата със сиренца и чушка", "0,70", "50", ""],
["", "kombo-yajcze-na-plocha", "Комбо яйце на плоча", "2,80", "", ""]

            ],

            "bread": [
                ["", "toku-shho-izpecheno-khlebche-s-maslo", "Току що изпечено хлебче с масло", "0,00", "50", ""]

            ],

            "Аеро гофрети": [
                ["", "nutela-shokolad-shokoladovi-purichki", "Нутела, шоколад, шоколадови пурички", "2,80", "200", ""],
["", "rafaelo", "Рафаело", "2,80", "200", ""],
["", "chijzkejk", "Чийзкейк", "3,50", "200", ""],
["", "med-i-natroshen-leshnik", "Мед и натрошен лешник", "2,80", "200", ""],
["", "domashno-sladko", "Домашно сладко", "2,10", "150", ""],
["", "gofreta", "Гофрета", "1,40", "100", ""],
["", "nutela-s-yagoda", "Нутела с ягода", "2,80", "", ""],
["", "nutela-s-banan", "Нутела с банан", "2,80", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/701376.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/701377.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/701378.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/701379.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/701380.jpg?width=302"]

            ],

            "drinks": [
                ["", "studen-chaj", "Студен чай", "1,40", "500", ""],
["", "ajran-meggle", "Айран Meggle", "0,70", "", ""]

            ],

            "beer": [
                ["", "korona", "Корона", "2,10", "", ""],
["", "zagorka-retro-ken", "Загорка Ретро кен", "0,70", "", ""],
["", "zagorka", "Загорка", "0,70", "500", ""],
["", "ariana", "Ариана", "0,70", "500", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "1,40", "330", ""],
["", "khajneken-0", "Хайнекен 0%", "1,40", "330", ""]

            ]
        }', 
        'slug' => 'the-grill',
        'business_name' => 'The Grill',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Никола Петков 52',
        'address_additional' => '',
        'coords_x' => '42.42702475',
        'coords_y' => '25.66019671',
        'phone' => '+359894343494',
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
                ["", "agneshka-supa", "Агнешка супа", "1,40", "", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "", ""],
["", "tarator", "Таратор", "0,70", "", ""],
["", "agneshpka-drob-srma", "Агнешпка дроб сърма", "2,80", "", ""],
["", "musaka", "Мусака", "2,80", "", ""],
["", "svinska-kavrma", "Свинска кавърма", "2,80", "", ""],
["", "bob-yakhniya-s-kyufteta", "Боб яхния с кюфтета", "2,80", "", ""],
["", "pileshki-palachinki", "Пилешки палачинки", "2,80", "", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "2,80", "", ""],
["", "chushki-s-domaten-sos", "Чушки с доматен сос", "2,80", "", ""],
["", "patladzhan-s-domaten-sos", "Патладжан с доматен сос", "2,80", "", ""],
["", "mish-mash", "Миш Маш", "2,80", "", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "", ""],
["", "omlet-asorti", "Омлет Асорти", "2,80", "", ""],
["", "bob-yakhniya", "Боб яхния", "2,80", "", ""],
["", "svinsko-po-lovdzhijski", "Свинско по ловджийски", "2,80", "", ""],
["", "kartofeni-kyufteta-s-shunka", "Картофени кюфтета с шунка", "2,80", "", ""],
["", "kartofeni-kyufteta", "Картофени кюфтета", "2,80", "", ""],
["", "domashni-kyufteta-s-garnitura", "Домашни кюфтета с гарнитура", "2,80", "", ""],
["", "pasta-chetiri-sirena", "Паста четири сирена", "2,80", "", ""],
["", "kordon-blo", "Кордон бльо", "2,80", "", ""]

            ],

            "salads": [
                ["", "shopska", "Шопска", "2,80", "450", ""],
["", "ovcharska", "Овчарска", "4,20", "550", ""],
["", "zhtvarska", "Жътварска", "4,20", "550", ""],
["", "czezar", "Цезар", "3,50", "350", ""],
["", "svezha-salata", "Свежа салата", "2,80", "350", ""],
["", "mlechna", "Млечна", "2,80", "300", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "500", ""],
["", "zelena-salata", "Зелена салата", "2,80", "400", ""],
["", "pecheni-chushki-s-katk", "Печени чушки с катък", "3,50", "300", ""],
["", "domati-kapreze", "Домати Капрезе", "4,20", "450", ""],
["", "krastaviczi-s-katk", "Краставици с катък", "3,50", "350", ""],
["", "meshana-s-katk", "Мешана с катък", "3,50", "450", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "200", ""],
["", "kartofena", "Картофена", "2,10", "350", ""],
["", "turshiya", "Туршия", "2,10", "250", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,80", "400", ""]

            ],

            "Безмесни аламинути": [
                ["", "lucheni-krgcheta", "Лучени кръгчета", "2,10", "300", ""],
["", "presni-kartofi", "Пресни картофи", "1,40", "300", ""],
["", "presni-kartofi-ss-sirene", "Пресни картофи със сирене", "1,40", "350", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "300", ""],
["", "domashen-chips", "Домашен чипс", "2,10", "300", ""],
["", "chushka-byurek", "Чушка бюрек", "2,10", "250", ""],
["", "gbi-s-maslo", "Гъби с масло", "2,10", "200", ""],
["", "zadusheni-pechurki", "Задушени печурки", "2,80", "250", ""],
["", "sirene-po-shopski", "Сирене по Шопски", "2,10", "350", ""],
["", "sirene-khapki", "Сирене хапки", "2,80", "300", ""],
["", "kashkaval-khapki", "Кашкавал хапки", "2,80", "300", ""],
["", "topeni-sirene", "Топени сирене", "3,50", "300", ""],
["", "tikvichki-po-grczki", "Тиквички по Гръцки", "2,80", "300", ""],
["", "kashkavaleni-tikvichki", "Кашкавалени тиквички", "3,50", "300", ""]

            ],

            "specialties": [
                ["", "rebra-nik-naj", "Ребра Ник-Най", "6,30", "400", ""],
["", "dzholan-s-kartofi", "Джолан с картофи", "5,60", "400", ""],
["", "chorbadzhijsko-meze", "Чорбаджийско мезе", "16,10", "1200", ""],
["", "sach-za-chetirima", "Сач за четирима", "12,60", "1200", ""],
["", "sacheta-pileshki", "Сачета пилешки", "7,00", "600", ""],
["", "sacheta-svinski", "Сачета свински", "7,00", "600", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-bekon", "Запеканка с бекон", "3,50", "400", ""],
["", "zapekanka-s-pileshko", "Запеканка с пилешко", "3,50", "400", ""]

            ],

            "risotto": [
                ["", "rizoto-s-pile-i-gbi", "Ризото с пиле и гъби", "4,90", "300", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,80", "300", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "5,60", "300", ""]

            ],

            "pizza": [
                ["", "domashna-picza-s-shunka", "Домашна пица с шунка", "4,20", "500", ""]

            ],

            "Риба и морски деликатеси": [
                ["", "kalmari-pane", "Калмари пане", "5,60", "250", ""],
["", "midi-pane", "Миди пане", "4,20", "250", ""],
["", "midi-kopr-i-chesn", "Миди копър и чесън", "4,20", "250", ""],
["", "czacza", "Цаца", "2,10", "250", ""],
["", "sharan", "Шаран", "4,20", "300", ""],
["", "skumriya", "Скумрия", "3,50", "300", ""]

            ],

            "Пилешки аламинути": [
                ["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "400", ""],
["", "pileshki-khapki-susam", "Пилешки хапки сусам", "4,90", "350", ""],
["", "pileshki-khapki-kornflejks", "Пилешки хапки корнфлейкс", "4,90", "400", ""],
["", "pileshki-chesnovi-khapki", "Пилешки чеснови хапки", "4,90", "400", ""],
["", "pileshki-glezeni-khapki", "Пилешки глезени хапки", "4,90", "350", ""],
["", "taralezhki", "Таралежки", "5,60", "400", ""],
["", "pileshko-bon-file-ss-smetana", "Пилешко бон филе със сметана", "5,60", "400", ""],
["", "pile-zhulien", "Пиле Жулиен", "5,60", "400", ""],
["", "pileshki-zalcza-s-gbi-i-kashkaval", "Пилешки залца с гъби и кашкавал", "4,90", "350", ""],
["", "pile-balkan", "Пиле Балкан", "4,90", "400", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "2,80", "350", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "2,80", "350", ""],
["", "srcza-s-luk", "Сърца с лук", "4,20", "300", ""],
["", "pileshki-srcza-s-gbi-i-kashkaval", "Пилешки сърца с гъби и кашкавал", "4,20", "350", ""],
["", "pileshki-trtki", "Пилешки трътки", "2,80", "300", ""],
["", "pateshki-srcza", "Патешки сърца", "4,20", "300", ""]

            ],

            "Свински аламинути": [
                ["", "svinsko-kontra-file-ss-smetana", "Свинско контра филе със сметана", "5,60", "350", ""],
["", "svinsko-po-lovdzhijski", "Свинско по ловджийски", "4,90", "400", ""],
["", "svinski-khapki-s-praz", "Свински хапки с праз", "4,90", "350", ""],
["", "svinski-khapki-balkan", "Свински хапки Балкан", "4,90", "400", ""],
["", "svinski-pikantni-khapki", "Свински пикантни хапки", "4,90", "350", ""],
["", "svinski-dzholan-s-maslo", "Свински джолан с масло", "4,90", "300", ""],
["", "svinski-khapki-s-gbi-i-kashkaval", "Свински хапки с гъби и кашкавал", "4,90", "350", ""],
["", "agneshki-drebolii-s-luk", "Агнешки дреболии с лук", "4,90", "300", ""],
["", "shkembe-s-gbi-i-kashkaval", "Шкембе с гъби и кашкавал", "4,20", "300", ""],
["", "svinski-drob-selski", "Свински дроб селски", "3,50", "350", ""],
["", "svinski-drob-przhen", "Свински дроб пържен", "3,50", "300", ""],
["", "ezik-v-maslo", "Език в масло", "5,60", "300", ""],
["", "ezik-pane", "Език пане", "5,60", "300", ""],
["", "czarigradski-kyufteta", "Цариградски кюфтета", "4,20", "300", ""]

            ],

            "grill": [
                ["", "pileshko-shishche", "Пилешко шишче", "2,10", "", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "", ""],
["", "pileshki-trtki", "Пилешки трътки", "2,80", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "", ""],
["", "ushi", "Уши", "3,50", "300", ""],
["", "bekon", "Бекон", "4,90", "300", ""],
["", "kasapsko-meze", "Касапско мезе", "4,90", "", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "", ""],
["", "meshana-skara", "мешана скара", "7,70", "", ""]

            ],

            "dry-appetizer": [
                ["", "domashno-sirene", "Домашно сирене", "2,10", "100", ""],
["", "lukanka", "Луканка", "3,50", "100", ""],
["", "pastrma", "Пастърма", "3,50", "100", ""]

            ],

            "Сандичи и пърленки": [
                ["", "shunka-i-kashkaval", "Шунка и кашкавал", "2,10", "", ""],
["", "kajma-i-kashkaval", "Кайма и кашкавал", "2,10", "", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "0,70", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "chesnova-filiya", "Чеснова филия", "0,00", "", ""]

            ],

            "additives": [
                ["", "topka-katk", "Топка катък", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "", ""],
["", "limon-12", "Лимон 1/2", "0,70", "", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta", "Бисквитена торта", "0,70", "", ""],
["", "palachinka", "Палачинка", "0,70", "", ""]

            ]
        }', 
        'slug' => 'bistro-nik-nay',
        'business_name' => 'Бистро Ник Най',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6003',
        'address' => 'бул. Славянски 2',
        'address_additional' => '',
        'coords_x' => '42.41781399',
        'coords_y' => '25.62223957',
        'phone' => '+359892990691 - +359899225772',
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
["", "selska-salata", "Селска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "350", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "400", ""],
["", "zelena-salata-s-krastavichki-i-repichki", "Зелена салата с краставички, и репички", "3,50", "250", ""],
["", "salata-snezhanka", "Салата Снежанка", "2,10", "200", ""],
["", "balkanska-salata", "Балканска салата", "3,50", "450", ""],
["", "salata-antipasti", "Салата Антипасти", "4,20", "450", ""],
["", "salata-domati-s-mus-ot-sirena", "Салата домати с мус от сирена", "4,90", "450", ""],
["", "topenicza", "Топеница", "4,90", "500", ""],
["", "frenska-salata", "Френска салата", "4,90", "450", ""],
["", "svezha-salata-ss-zapecheno-sirene", "Свежа салата със запечено сирене", "5,60", "450", ""],
["", "pstra-salata-s-malinov-vinegret", "Пъстра салата с малинов винегрет", "5,60", "450", ""],
["", "salata-midi", "Салата Миди", "3,50", "350", ""],
["", "salata-vitamina", "Салата Витамина", "4,20", "250", ""]

            ],

            "Безмесни предястия": [
                ["", "brokoli-v-smetanov-sos-i-sino-sirene", "Броколи в сметанов сос и синьо сирене", "4,20", "250", ""],
["", "grilovani-tikvichki-s-moczarela", "Гриловани тиквички с моцарела", "4,20", "250", ""],
["", "tikvichki-po-grczki-s-chesnov-sos", "Тиквички по гръцки с чеснов сос", "4,20", "200", ""],
["", "topeni-sirencza-ss-sladko-ot-borovinki", "Топени сиренца със сладко от боровинки", "3,50", "200", ""],
["", "kashkaval-pane-khapki", "Кашкавал пане хапки", "3,50", "200", ""],
["", "sirene-pane-na-khapki", "Сирене пане на хапки", "2,80", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "marinovani-zelenchuczi-na-gril", "Мариновани зеленчуци на грил", "4,20", "500", ""],
["", "zapechen-kamember-s-borovinki", "Запечен камембер с боровинки", "4,20", "200", ""],
["", "moczarela-s-filirani-bademi", "Моцарела с филирани бадеми", "3,50", "200", ""],
["", "kyuftencza-ot-kinoa", "Кюфтенца от киноа", "3,50", "200", ""],
["", "magdanozeni-kyufteta", "Магданозени кюфтета", "2,80", "200", ""],
["", "kartofena-zapekanka", "Картофена запеканка", "3,50", "300", ""]

            ],

            "Месни предястия": [
                ["", "pileshki-khapki-s-gbi-i-kashkaval", "Пилешки хапки с гъби и кашкавал", "4,90", "350", ""],
["", "pileshki-khapki-s-kartofeni-strgotini", "Пилешки хапки с картофени стърготини", "4,90", "350", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "350", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,90", "350", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "300", ""],
["", "pileshki-drobcheta-s-luk-pane", "Пилешки дробчета с лук пане", "2,80", "300", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "3,50", "300", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "4,20", "300", ""],
["", "pileshki-drebolii-s-luk", "Пилешки дреболии с лук", "4,20", "350", ""],
["", "svinski-ezik-s-maslo", "Свински език с масло", "4,90", "250", ""],
["", "svinski-ezik-pane", "Свински език пане", "4,90", "250", ""],
["", "svinski-drob", "Свински дроб", "2,80", "300", ""],
["", "pile-pataya", "Пиле Патая", "3,50", "350", ""],
["", "pileshki-bon-filencza-s-parmezan", "Пилешки бон филенца с пармезан", "5,60", "300", ""],
["", "bolyarsko-meze", "Болярско мезе", "4,20", "500", ""],
["", "srcza-po-khajdushki", "Сърца по хайдушки", "4,20", "400", ""]

            ],

            "Ястия с месо": [
                ["", "babinite-kyuftencza", "Бабините кюфтенца", "6,30", "400", ""],
["", "zhulieni-ot-pileshko-ili-svinsko-meso", "Жулиени от пилешко или свинско месо", "5,60", "350", ""],
["", "rizoto-s-pile", "Ризото с пиле", "5,60", "450", ""],
["", "pileshki-pikantni-kscheta", "Пилешки пикантни късчета", "4,90", "550", ""],
["", "aromatno-pile", "Ароматно пиле", "5,60", "450", ""],
["", "pileshko-file-s-bekon-i-zelenchuczi", "Пилешко филе с бекон и зеленчуци", "5,60", "660", ""],
["", "pile-bearnez", "Пиле Беарнез", "4,90", "550", ""],
["", "pile-sos-kri", "Пиле сос Къри", "4,90", "550", ""],
["", "bireno-meze", "Бирено мезе", "6,30", "400", ""],
["", "pikantno-svinsko", "Пикантно свинско", "6,30", "500", ""],
["", "svinski-pechen-dzholan-pikanten", "Свински печен джолан пикантен", "7,00", "500", ""],
["", "svinsko-s-gorski-gbi", "Свинско с горски гъби", "7,70", "400", ""],
["", "svinsko-bon-file-s-borovinki", "Свинско бон филе с боровинки", "7,70", "500", ""],
["", "bolyarska-keremida", "Болярска керемида", "7,70", "500", ""],
["", "svinski-skalopini-sinya-kshha", "Свински скалопини Синя къща", "8,40", "500", ""]

            ],

            "Риба и морски дарове": [
                ["", "rulcza-ot-raczi", "Рулца от раци", "3,50", "200", ""],
["", "kalmari", "Калмари", "5,60", "200", ""],
["", "kalmari-ss-zelenchuczi", "Калмари със зеленчуци", "8,40", "200", ""],
["", "midi-pane", "Миди пане", "3,50", "200", ""],
["", "midi-ss-sos-kri", "Миди със сос къри", "5,60", "450", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "5,60", "450", ""],
["", "skaridi-s-maslo-i-kopr", "Скариди с масло и копър", "9,10", "300", ""],
["", "skaridi-ss-susheni-domati", "Скариди със сушени домати", "9,10", "350", ""],
["", "safrid", "Сафрид", "5,60", "300", ""],
["", "przhena-czacza", "Пържена цаца", "3,50", "300", ""],
["", "przhen-sharan", "Пържен шаран", "6,30", "400", ""],
["", "filirana-pstrva-s-portokal", "Филирана пъстърва с портокал", "7,70", "450", ""]

            ],

            "grill": [
                ["", "svinski-ushi", "Свински уши", "4,20", "300", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "svinska-przhola", "Свинска пържола", "5,60", "250", ""],
["", "svinski-rebrcza", "Свински ребърца", "6,30", "400", ""],
["", "svinski-bekoncheta", "Свински бекончета", "6,30", "400", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "250", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "120", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kasapsko-meze", "Касапско мезе", "5,60", "400", ""],
["", "mesna-dska-1", "Месна дъска 1", "7,70", "650", ""],
["", "mesna-dska-2", "Месна дъска 2", "8,40", "750", ""],
["", "mesna-dska-3", "Месна дъска 3", "10,50", "950", ""]

            ],

            "Студени мезета": [
                ["", "sirene", "Сирене", "0,70", "100", ""],
["", "kashkaval", "Кашкавал", "1,40", "100", ""],
["", "lukanka", "Луканка", "3,50", "100", ""],
["", "sudzhuk", "Суджук", "3,50", "100", ""],
["", "pastrma", "Пастърма", "4,90", "100", ""],
["", "file-elena", "Филе Елена", "4,90", "100", ""]

            ],

            "Хлебчета": [
                ["", "pitka", "Питка", "0,00", "", ""],
["", "pitka-s-maslo-na-skara", "Питка с масло на скара", "0,00", "", ""],
["", "chesnova-pitka", "Чеснова питка", "0,00", "", ""],
["", "prlenka-s-maslo", "Пърленка с масло", "1,40", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "", ""],
["", "bilkova-bageta", "Билкова багета", "1,40", "", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "150", ""],
["", "chijzkej", "Чийзкей", "1,40", "", ""],
["", "shvedska-shokoladova-torta", "Шведска шоколадова торта", "2,80", "", ""]

            ],

            "drinks": [
                ["", "energijna-napitka-monstr", "Енергийна напитка Монстър", "4,20", "500", ""]

            ]
        }', 
        'slug' => 'sinyata-kshcha',
        'business_name' => 'Синята къща',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Петко Р. Славейков 60',
        'address_additional' => '',
        'coords_x' => '42.42484336',
        'coords_y' => '25.63672039',
        'phone' => '+359884599590',
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
                ["", "panirani-moczarelki-s-domashno-sladko-ot-borovinki", "Панирани моцарелки с домашно сладко от боровинки", "5,60", "350", ""],
["", "panirani-moczarelki-ss-susam", "Панирани моцарелки със сусам", "5,60", "350", ""],
["", "panirani-moczarelki-s-kornflejks", "Панирани моцарелки с корнфлейкс", "5,60", "350", ""],
["", "khrupkavi-pileshki-krilcza-ss-barbekyu-sos", "Хрупкави пилешки крилца със барбекю сос", "3,50", "350", ""]

            ],

            "salads": [
                ["", "kartofena-salata", "Картофена салата", "2,80", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "350", ""],
["", "zelena-salata", "Зелена салата", "3,50", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "zelena-salata-ss-susamov-takhan", "Зелена салата със сусамов тахан", "3,50", "350", ""],
["", "grczka-salata-400gr", "Гръцка салата (400гр)", "4,20", "", ""],
["", "zhtvarska-salata", "Жътварска салата", "4,20", "450", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "salata-ot-pecheni-chushki-i-domashno-sirene", "Салата от печени чушки и домашно сирене", "4,20", "350", ""],
["", "salata-s-beleni-domati-i-domashno-sirene", "Салата с белени домати и домашно сирене", "4,20", "400", ""],
["", "salata-kapreze-350gr", "Салата Капрезе (350гр)", "4,20", "", ""],
["", "zelena-salata-ss-zapecheno-sirene", "Зелена салата със запечено сирене", "4,20", "400", ""],
["", "zelena-salata-ss-sino-sirene", "Зелена салата със синьо сирене", "3,50", "400", ""],
["", "zelena-salata-s-chips-ot-bekon", "Зелена салата с чипс от бекон", "4,90", "400", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "400", ""],
["", "zelena-salata-ss-zapecheno-khalumi", "Зелена салата със запечено Халуми", "4,90", "400", ""]

            ],

            "starters": [
                ["", "khrupkavi-topeni-pusheni-sirencza-s-domashno-sladko-ot-borovinki", "Хрупкави топени пушени сиренца с домашно сладко от боровинки", "4,90", "350", ""],
["", "panirani-topeni-pusheni-sirencza", "Панирани топени пушени сиренца", "4,90", "350", ""],
["", "bireno-meze", "Бирено мезе", "4,90", "350", ""],
["", "zapecheno-sirene-khalumi", "Запечено сирене Халуми", "4,90", "350", ""],
["", "zapecheno-sirene-khalumi-s-domashno-sladko-ot-borovinki", "Запечено сирене Халуми с домашно сладко от боровинки", "5,60", "250", ""]

            ],

            "alaminuti": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,80", "300", ""],
["", "domashen-chips", "Домашен чипс", "2,80", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "350", ""],
["", "kartofi-s-bekon-i-kashkaval", "Картофи с бекон и кашкавал", "3,50", "350", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,80", "200", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "300", ""],
["", "omlet-asorti", "Омлет Асорти", "2,80", "300", ""],
["", "brokoli-ss-smetanov-sos", "Броколи със сметанов сос", "3,50", "300", ""],
["", "svinski-drob-s-luk", "Свински дроб с лук", "3,50", "350", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "3,50", "350", ""],
["", "svinski-ezik-v-maslo", "Свински език в масло", "4,20", "200", ""],
["", "plnena-tikvichka-ss-spanak-i-sirena", "Пълнена тиквичка със спанак и сирена", "3,50", "350", ""],
["", "plnena-tikvichka-s-pileshko-file-gbi-i-kashkaval", "Пълнена тиквичка с пилешко филе, гъби и кашкавал", "4,20", "350", ""],
["", "panirani-sirencza", "Панирани сиренца", "3,50", "300", ""],
["", "panirani-sirencza-ss-susam", "Панирани сиренца със сусам", "3,50", "300", ""],
["", "sirene-na-tigan-ss-zelenchuczi", "Сирене на тиган със зеленчуци", "4,20", "350", ""],
["", "panirani-kashkavaleni-khapki", "Панирани кашкавалени хапки", "4,90", "300", ""],
["", "kashkavaleni-bukhti", "Кашкавалени бухти", "4,90", "300", ""],
["", "sirenovi-bukhti", "Сиренови бухти", "4,20", "300", ""],
["", "panirani-topeni-pusheni-sirencza", "Панирани топени пушени сиренца", "4,90", "350", ""]

            ],

            "Аламинути с пилешко": [
                ["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "350", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "350", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,90", "300", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,90", "300", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "300", ""],
["", "pileshki-khapki-s-gbi-i-kashkaval", "Пилешки хапки с гъби и кашкавал", "4,90", "350", ""],
["", "pileshki-zhuliencheta-v-maslo", "Пилешки жулиенчета в масло", "4,90", "350", ""],
["", "plato-pileshki-khapki", "Плато пилешки хапки", "9,10", "600", ""],
["", "plato-khapki-miks", "Плато хапки микс", "9,10", "600", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,80", "", ""],
["", "vegetarianska-picza", "Вегетарианска пица", "2,80", "", ""],
["", "picza-ss-spanak-i-smetana", "Пица със спанак и сметана", "3,50", "", ""],
["", "picza-s-pet-vida-sirena", "Пица с пет вида сирена", "3,50", "", ""],
["", "picza-s-shunka", "Пица с шунка", "3,50", "", ""],
["", "picza-s-kajma", "Пица с кайма", "3,50", "", ""],
["", "peperone", "Пепероне", "3,50", "", ""],
["", "picza-s-bekon", "Пица с бекон", "3,50", "", ""],
["", "picza-s-proshuto", "Пица с прошуто", "3,50", "", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-shunka", "Сандвич с шунка", "1,40", "", ""],
["", "sandvich-s-lukanka", "Сандвич с луканка", "1,40", "", ""],
["", "sandvich-s-bekon", "Сандвич с бекон", "1,40", "", ""],
["", "klub-sandvich-s-shunka", "Клуб сандвич с шунка", "3,50", "", ""],
["", "klub-sandvich-s-lukanka", "Клуб сандвич с луканка", "3,50", "", ""],
["", "klub-sandvich-s-bekon", "Клуб сандвич с бекон", "3,50", "", ""]

            ],

            "Принцеси": [
                ["", "princzesa-s-kashkaval", "Принцеса с кашкавал", "1,40", "", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "1,40", "", ""],
["", "princzesa-s-lukanka-i-kashkaval", "Принцеса с луканка и кашкавал", "1,40", "", ""],
["", "princzesa-s-bekon-i-kashkaval", "Принцеса с бекон и кашкавал", "1,40", "", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "1,40", "", ""]

            ],

            "Солени палачинки": [
                ["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "1,40", "", ""],
["", "palachinka-ss-spanak-i-topeno-sirene", "Палачинка със спанак и топено сирене", "2,10", "", ""],
["", "palachinka-s-kashkaval-i-sirene", "Палачинка с кашкавал и сирене", "1,40", "", ""],
["", "palachinka-s-shunka-i-kashkaval", "Палачинка с шунка и кашкавал", "1,40", "", ""],
["", "palachinka-s-shunka-i-topeno-sirene", "Палачинка с шунка и топено сирене", "2,10", "", ""],
["", "palachinka-s-pileshko-file-smetana-i-topeno-sirene", "Палачинка с пилешко филе, сметана и топено сирене", "2,10", "", ""]

            ],

            "bread": [
                ["", "filijka", "Филийка", "0,00", "", ""],
["", "prepechena-filijka", "Препечена филийка", "0,00", "", ""],
["", "chesnova-filijka", "Чеснова филийка", "0,00", "", ""],
["", "prepechena-filijka-s-maslo", "Препечена филийка с масло", "0,00", "", ""],
["", "prlenka", "Пърленка", "1,40", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "", ""]

            ]
        }', 
        'slug' => 'restorant-florid',
        'business_name' => 'Ресторант Florid',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Граф Игнатиев 30a',
        'address_additional' => '',
        'coords_x' => '42.42808996',
        'coords_y' => '25.63505373',
        'phone' => '+35942625122',
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
            
            "Бурито": [
                ["", "burito", "Бурито", "2,80", "", ""],
["", "vegetariansko-burito", "Вегетарианско бурито", "2,10", "", ""],
["", "burito-bol", "Бурито бол", "4,20", "", ""],
["", "plato-burito", "Плато бурито", "6,30", "700", ""],
["", "promocziya---sredno-burito--koka-kola", "Промоция - Средно бурито + Кока Кола", "4,20", "500", ""]

            ],

            "Кесадия": [
                ["", "kesadiya", "Кесадия", "2,80", "", ""],
["", "vegetarianska-kesadiya", "Вегетарианска кесадия", "4,20", "", ""],
["", "promocziya---malka-kesadiya--napitka", "Промоция - Малка кесадия + напитка", "3,50", "", ""]

            ],

            "Бургер": [
                ["", "promocziya---meksikanski-burger--koka-kola", "Промоция - Мексикански бургер + Кока Кола", "3,50", "500", ""]

            ],

            "Бързо хранене и салати": [
                ["", "takos", "Такос", "1,40", "", ""],
["", "chips-i-salsa", "Чипс и салса", "1,40", "", ""],
["", "nachos", "Начос", "2,10", "", ""],
["", "teks-meks-nachos", "Текс мекс начос", "2,10", "", ""],
["", "teks-meks-nachos-s-pileshko-meso", "Текс мекс начос с пилешко месо", "2,80", "", ""],
["", "plato-fakhitas", "Плато Фахитас", "5,60", "", ""],
["", "gorditas", "Гордитас", "0,70", "", ""],
["", "salata-akapulko", "Салата Акапулко", "3,50", "300", ""],
["", "salata-piko", "Салата Пико", "3,50", "", ""]

            ],

            "additives": [
                ["", "guakamole", "Гуакамоле", "1,40", "100", ""],
["", "svezha-salsa", "Свежа салса", "1,40", "250", ""],
["", "salsa-meksikana", "Салса мексикана", "0,70", "80", ""],
["", "smetanov-sos", "Сметанов сос", "0,70", "80", ""],
["", "tortila-pitka", "Тортила питка", "0,70", "", ""],
["", "pitka", "Питка", "0,00", "", ""],
["", "porcziya-zelenchuczi", "Порция зеленчуци", "0,70", "", ""],
["", "porcziya-oriz", "Порция ориз", "0,70", "", ""],
["", "porcziya-bob", "Порция боб", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/770331.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/770332.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/770333.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/770334.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/770335.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/770337.jpg?width=302"]

            ],

            "drinks": [
                ["", "monstr", "Монстър", "2,10", "500", ""],
["", "ajryan", "Айрян", "0,70", "330", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""],
["", "beks", "Бекс", "1,40", "500", ""],
["", "zagorka", "Загорка", "1,40", "", ""],
["", "ariana", "Ариана", "1,40", "500", ""],
["", "amstel", "Амстел", "2,10", "500", ""],
["", "heineken", "Heineken", "2,10", "500", ""],
["", "zagorka-retro", "Загорка Ретро", "2,10", "330", ""]

            ]
        }', 
        'slug' => 'fernando-s',
        'business_name' => 'Fernando&#039;s',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6003',
        'address' => 'бул. Цар Симеон Велики 74A',
        'address_additional' => '',
        'coords_x' => '42.42311476',
        'coords_y' => '25.62151699',
        'phone' => '+35942250707',
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
                ["", "kartofena-krem-supa-s-chips-ot-bekon", "Картофена крем супа с чипс от бекон", "2,10", "300", "https://images.deliveryhero.io/image/fd-bg/Products/223685.jpg?width=302"],
["", "ribena-chorba", "Рибена чорба", "3,50", "300", "https://images.deliveryhero.io/image/fd-bg/Products/223687.jpg?width=302"],
["", "krem-supa-ot-morkovi-i-koriandr", "Крем супа от моркови и кориандър", "2,10", "300", ""]

            ],

            "Прясно изпечен хляб": [
                ["", "chesnova-chabata", "Чеснова чабата", "1,40", "90", ""],
["", "chabata-s-maslini", "Чабата с маслини", "0,70", "100", ""],
["", "plnozrnesta-mini-bageta", "Пълнозърнеста мини багета", "0,70", "110", ""],
["", "kajzer-zemel", "Кайзер земел", "0,00", "60", ""],
["", "chesnova-chabata-pryasno-izpechena", "Чеснова чабата прясно изпечена", "0,70", "90", ""]

            ],

            "Салати & закуски": [
                ["", "salata-czezar", "Салата Цезар", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/223696.jpg?width=302"],
["", "grczka-salata", "Гръцка салата", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/223698.png?width=302"],
["", "salata-vitamina", "Салата Витамина", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/223700.jpg?width=302"],
["", "salata-s-kinoa-moczarela-i-cheri-domati", "Салата с киноа, моцарела и чери домати", "4,90", "350", ""],
["", "anglijska-zakuska", "Английска закуска", "4,90", "450", ""]

            ],

            "Бургери & грил": [
                ["", "mini-kyuftencza", "Мини кюфтенца", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/223701.jpg?width=302"],
["", "dabl-chijz-i-bejkn-burger", "Дабъл чийз и бейкън бургер", "7,70", "400", "https://images.deliveryhero.io/image/fd-bg/Products/223704.jpg?width=302"],
["", "kyufteta-po-selski", "Кюфтета по селски", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/223705.jpg?width=302"],
["", "svinski-rebra-po-meksikanski", "Свински ребра по мексикански", "10,50", "700", ""],
["", "semejno-plato-za-dvama", "Семейно плато за двама", "14,70", "980", ""]

            ],

            "Рибни ястия": [
                ["", "somga-kotlet-na-plocha", "Сьомга котлет на плоча", "11,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/223706.jpg?width=302"],
["", "somga-file-na-plocha", "Сьомга филе на плоча", "11,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/223708.jpg?width=302"],
["", "panirano-file-ot-treska", "Панирано филе от треска", "6,30", "380", ""],
["", "file-ot-pstrva-na-plocha", "Филе от пъстърва на плоча", "7,70", "350", ""]

            ],

            "Паста и ризото": [
                ["", "spageti-boloneze", "Спагети Болонезе", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/223710.jpg?width=302"],
["", "rizoto-s-divi-gbi-i-parmezan", "Ризото с диви гъби и пармезан", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/223711.jpg?width=302"],
["", "shpeczle-ss-sirene", "Шпецле със сирене", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/223712.jpg?width=302"],
["", "pene-ss-spanak-i-pileshko-file", "Пене със спанак и пилешко филе", "6,30", "450", "https://images.deliveryhero.io/image/fd-bg/Products/223713.jpg?width=302"],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/223714.png?width=302"],
["", "pene-ss-spanak", "Пене със спанак", "4,90", "350", ""]

            ],

            "Основни ястия": [
                ["", "pileshki-kscheta", "Пилешки късчета", "4,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/223723.jpg?width=302"],
["", "svinski-karencza", "Свински каренца", "6,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/223717.jpg?width=302"],
["", "xxxl-shniczel-po-selski", "XXXL Шницел по селски", "9,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/223721.jpg?width=302"],
["", "pileshko-file", "Пилешко филе", "5,60", "450", "https://images.deliveryhero.io/image/fd-bg/Products/223722.jpg?width=302"],
["", "pileshko-file-v-parmezanova-korichka", "Пилешко филе в пармезанова коричка", "5,60", "350", ""],
["", "xxxl-shniczel-po-vienski", "XXXL Шницел по виенски", "7,70", "400", ""],
["", "ungarski-gulash", "Унгарски гулаш", "5,60", "360", ""],
["", "svinski-kscheta-v-pikanten-sladkokisel-sos", "Свински късчета в пикантен сладкокисел сос", "5,60", "400", ""],
["", "svinski-dzholan", "Свински джолан", "9,80", "600", ""]

            ],

            "Детски ястия": [
                ["", "shniczel-ot-pileshki-grdi", "Шницел от пилешки гърди", "3,50", "240", "https://images.deliveryhero.io/image/fd-bg/Products/223725.jpg?width=302"],
["", "spageti-boloneze-za-decza", "Спагети Болонезе за деца", "3,50", "180", "https://images.deliveryhero.io/image/fd-bg/Products/223726.jpg?width=302"],
["", "vlshebni-vurstcheta", "Вълшебни вурстчета", "3,50", "250", "https://images.deliveryhero.io/image/fd-bg/Products/223724.jpg?width=302"]

            ],

            "desserts": [
                ["", "chijzkejk", "Чийзкейк", "3,50", "180", "https://images.deliveryhero.io/image/fd-bg/Products/223729.png?width=302"],
["", "tiramisu", "Тирамису", "4,20", "110", ""],
["", "yablkov-shhrudel", "Ябълков щрудел", "2,80", "180", "https://images.deliveryhero.io/image/fd-bg/Products/223732.jpg?width=302"]

            ],

            "Coca-Cola  напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/736775.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/736776.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/736777.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/736778.jpg?width=302"]

            ],

            "drinks": [
                ["", "naturalen-sok-rauch", "Натурален сок Rauch", "1,40", "200", ""],
["", "studen-chaj", "Студен чай", "1,40", "250", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "gazirana-voda", "Газирана вода", "0,70", "250", ""]

            ],

            "Пиво и вино": [
                ["", "sajder", "Сайдер", "1,40", "330", ""],
["", "khajneken-00", "Хайнекен 0.0%", "2,10", "330", ""],
["", "byalo-vino-shardone-angel", "Бяло вино Шардоне Angel", "6,30", "375", ""],
["", "roze-angel", "Розе Angel", "6,30", "375", ""],
["", "cherveno-vino-merlo-angel", "Червено вино Мерло Angel", "6,30", "375", ""],
["", "cherveno-vino-kaberne-sovinon-angel", "Червено вино Каберне Совиньон Angel", "6,30", "375", ""],
["", "khajneken", "Хайнекен", "2,10", "500", ""],
["", "amstel", "Амстел", "2,10", "500", ""],
["", "zagorka", "Загорка", "1,40", "500", ""],
["", "zagorka-retro", "Загорка Ретро", "1,40", "500", ""]

            ],

            "Допълнително гарнитура": [
                ["", "kartofi-sote", "Картофи соте", "0,70", "100", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "sos-tartar", "Сос Тартар", "0,70", "30", ""],
["", "sos-barbekyu", "Сос Барбекю", "0,70", "30", ""],
["", "mlechen-sos", "Млечен сос", "0,70", "30", ""],
["", "gorchicza", "Горчица", "0,70", "30", ""],
["", "majoneza", "Майонеза", "0,70", "30", ""],
["", "ketchup", "Кетчуп", "0,70", "30", ""],
["", "grejvi-sos", "Грейви сос", "0,70", "30", ""]

            ]
        }', 
        'slug' => 'restorant-aiko',
        'business_name' => 'Ресторант АИКО (Бургас)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Burgas',
        'region' => 'Burgas',
        'postal_code' => '8000',
        'address' => 'бул.Янко Комитов 8',
        'address_additional' => '',
        'coords_x' => '42.51447491',
        'coords_y' => '27.45357799',
        'phone' => '+359885639008; +35956989696, 0883445255',
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
                ["", "kapreze", "Капрезе", "4,90", "350", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "salata-vareni-kartofi", "Салата варени картофи", "2,80", "400", ""],
["", "tabietlijska-salata", "Табиетлийска салата", "3,50", "400", ""],
["", "domashna-pechena-sivriya", "Домашна печена сиврия", "3,50", "250", ""],
["", "domati-s-pryasno-krave-sirene", "Домати с прясно краве сирене", "4,90", "400", ""],
["", "salata-s-avokado", "Салата с авокадо", "4,20", "350", ""],
["", "svezha-zelena-salatka", "Свежа зелена салатка", "4,90", "250", ""],
["", "afrodita", "Афродита", "7,70", "350", ""],
["", "salatata-na-shefkata", "Салатата на Шефката", "5,60", "300", ""],
["", "piknik", "Пикник", "4,90", "400", ""],
["", "domati-po-selski-s-ovche-sirene", "Домати по селски с овче сирене", "4,90", "400", ""],
["", "nashenska-selska-salata-s-katk", "Нашенска селска салата с катък", "4,90", "350", ""],
["", "morski-briz", "Морски бриз", "7,00", "300", ""],
["", "fresh-salmon", "Фреш салмон", "9,10", "350", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "350", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "250", ""]

            ],

            "appetizer": [
                ["", "meraklijski-chushleta", "Мераклийски чушлета", "2,10", "150", ""],
["", "paprika-u-pavlaczi", "Паприка у павлаци", "4,20", "200", ""],
["", "domashen-katk", "Домашен катък", "2,10", "150", ""],
["", "domashen-ajvar-blag", "Домашен айвар благ", "4,90", "250", ""],
["", "domashen-ajvar-lyut", "Домашен айвар лют", "4,90", "250", ""],
["", "pukani-chorbadzhijski-chushki", "Пукани Чорбаджийски чушки", "2,10", "150", ""],
["", "pikantno-domashno-tirokafteri", "Пикантно домашно Тирокафтери", "3,50", "200", ""],
["", "razyadka-pushena-somga-s-mus-ot-sirena", "Разядка пушена сьомга с мус от сирена", "6,30", "200", ""],
["", "tarama-khajver", "Тарама хайвер", "4,20", "300", ""]

            ],

            "Безмесни ястия": [
                ["", "grilovani-zelenchuczi-s-bilki", "Гриловани зеленчуци с билки", "4,90", "600", ""],
["", "sirene-saganaki", "Сирене Саганаки", "7,70", "200", ""],
["", "sirene-pane-s-med-orekhi-i-furmi", "Сирене пане с мед, орехи и фурми", "4,20", "200", ""],
["", "sotirani-kartofki-s-maslcze-chesnche-i-kopr", "Сотирани картофки с масълце, чесънче и копър", "2,10", "300", ""],
["", "presni-przheni-kartofki-s-chesn-i-kopr", "Пресни пържени картофки с чесън и копър", "2,80", "350", ""],
["", "khrupkavi-tikvichki-s-mlechno---chesnov-sos", "Хрупкави тиквички с млечно - чеснов сос", "4,20", "350", ""],
["", "shniczel-ot-patladzhan-s-domatena-salcza-ot-avokado", "Шницел от патладжан с доматена салца от авокадо", "6,30", "300", ""],
["", "khrupkavi-prchiczi-topeno-sirene-s-kornflejks", "Хрупкави пръчици топено сирене с корнфлейкс", "5,60", "250", ""],
["", "zelenchukov-chips-ss-sos-skordalya", "Зеленчуков чипс със сос скордаля", "7,70", "500", ""],
["", "pikantni-khrupkavi-kartofki-krispi", "Пикантни хрупкави картофки криспи", "2,10", "250", ""],
["", "chips-ot-domashni-kartofi", "Чипс от домашни картофи", "2,10", "200", ""],
["", "domashni-kartofki-dijprs", "Домашни картофки Дийпърс", "2,10", "250", ""],
["", "domashni-kartofki-dijprs-s-mlechno---chesnov-sos", "Домашни картофки Дийпърс с млечно - чеснов сос", "2,80", "300", ""],
["", "domashni-kartofki-dijprs-ss-sirene", "Домашни картофки Дийпърс със сирене", "2,80", "300", ""],
["", "ogreten-kuatro-formadzhi", "Огретен Куатро Формаджи", "4,20", "400", ""]

            ],

            "Риби и морски дарове": [
                ["", "minokop-kotlet-josper", "Минокоп котлет Josper", "12,60", "300", ""],
["", "kalmari-pane", "Калмари пане", "6,30", "200", ""],
["", "khrupkavi-bejbi-kalmari", "Хрупкави бейби калмари", "7,70", "200", ""]

            ],

            "Ястия със свинско": [
                ["", "uviachi-podneseno-s-chili-sos", "Увиачи, поднесено с чили сос", "8,40", "350", ""],
["", "vratna-przholka", "Вратна пържолка", "6,30", "300", ""],
["", "svinski-rebrcza-bez-kost", "Свински ребърца без кост", "6,30", "350", ""],
["", "glaziran-svinski-kotlet-podnesen-s-chili-sos", "Глазиран свински котлет, поднесен с чили сос", "9,80", "500", ""],
["", "lukankova-nadeniczapodnesena-s-katk-i-chili-sos", "Луканкова наденица,поднесена с катък и чили сос", "6,30", "350", ""],
["", "gurmanska-pleskavicza-po-nasha-reczepta", "Гурманска плескавица по наша рецепта", "4,90", "300", ""],
["", "ushhipczi-po-nasha-reczepta", "Ущипци по наша рецепта", "4,90", "300", ""],
["", "strumishki-kebapchencza-po-nasha-reczepta", "Струмишки кебапченца по наша рецепта", "4,20", "300", ""],
["", "nadenicza-ot-klczano-meso-podnesena-s-chili-sos", "Наденица от кълцано месо, поднесена с чили сос", "6,30", "300", ""],
["", "domashni-kyufteta-po-nasha-reczepta", "Домашни кюфтета по наша рецепта", "4,20", "300", ""],
["", "pikantno-pajdaki-s-przheni-kartofki-krispi", "Пикантно Пайдаки с пържени картофки криспи", "6,30", "350", ""],
["", "svinski-zhuliencheta-s-maslo", "Свински жулиенчета с масло", "5,60", "250", ""],
["", "shniczel-po-vienski-s-przheni-kartofki-krispi", "Шницел по Виенски с пържени картофки криспи", "7,70", "350", ""],
["", "svinski-grdichki-ss-zelen-luk", "Свински гърдички със зелен лук", "6,30", "300", ""],
["", "svinski-vrat-s-gbi-i-luk", "Свински врат с гъби и лук", "7,00", "300", ""],
["", "przheni-kyuftencza-s-topeno-sirene", "Пържени кюфтенца с топено сирене", "4,90", "300", ""],
["", "shefska-przhenicza", "Шефска пърженица", "6,30", "400", ""],
["", "kapriz-po-zaralijski", "Каприз по заралийски", "6,30", "450", ""],
["", "ushichki-po-zaralijski", "Ушички по заралийски", "4,90", "350", ""],
["", "svinski-drob", "Свински дроб", "4,20", "300", ""]

            ],

            "Ястия с пиле": [
                ["", "przhola-ot-but", "Пържола от бут", "4,90", "250", ""],
["", "pile-ss-smetana-i-miks-ot-sirena-na-tigan", "Пиле със сметана и микс от сирена на тиган", "5,60", "300", ""],
["", "pile-s-khrupkavi-sotirani-zelenchuczi", "Пиле с хрупкави сотирани зеленчуци", "5,60", "300", ""],
["", "pile-s-avokado-v-sos-filadelfiya-i-parmezan", "Пиле с авокадо в сос филаделфия и пармезан", "5,60", "300", ""],
["", "pileshki-khrupkavi-butcheta", "Пилешки хрупкави бутчета", "4,90", "300", ""],
["", "khrupkavi-pileshki-filencza-s-kartofen-chips-i-mlechno-chesnov-sos", "Хрупкави пилешки филенца с картофен чипс и млечно-чеснов сос", "5,60", "250", ""]

            ],

            "Ястия с телешко и агнешко": [
                ["", "duo-teleshki-biftek-black-angus-po-sredizemnomorski", "Дуо телешки бифтек Black Angus по средиземноморски", "11,20", "400", ""],
["", "drob-po-komshijski-tava-dzhiger", "Дроб по комшийски тава джигер", "6,30", "250", ""],
["", "agneshko-dzholanche-podneseno-s-kartofi-sote", "Агнешко джоланче, поднесено с картофи соте", "10,50", "400", ""],
["", "agneshka-glavichka-obezkostena", "Агнешка главичка обезкостена", "6,30", "300", ""],
["", "mezeto-na-gotvacha", "Мезето на готвача", "7,70", "500", ""]

            ],

            "pasta": [
                ["", "taliateli-po-rimski", "Талиатели по Римски", "4,90", "250", ""],
["", "taliateli-ss-smetana-i-miks-ot-sirena", "Талиатели със сметана и микс от сирена", "4,90", "250", ""]

            ],

            "Детско меню": [
                ["", "detsko-menyu-s-pileshki-filencza", "Детско меню с пилешки филенца", "5,60", "300", ""]

            ],

            "Сухи мезета": [
                ["", "pstrma", "Пъстърма", "4,90", "100", ""],
["", "file-elena", "Филе Елена", "4,90", "100", ""],
["", "drpan-kashkaval", "Дърпан кашкавал", "2,80", "100", ""],
["", "kashkaval", "Кашкавал", "2,10", "100", ""],
["", "sino-sirene", "Синьо сирене", "4,90", "100", ""]

            ],

            "bread": [
                ["", "selska-pita-s-domashno-maslo-i-merudiya", "Селска пита с домашно масло и мерудия", "1,40", "150", ""],
["", "prepecheni-filijki-cheren-khlyab-s-miks-ot-podpravki", "Препечени филийки черен хляб с микс от подправки", "1,40", "150", ""],
["", "brusketi-s-miks-ot-podpravki", "Брускети с микс от подправки", "1,40", "100", ""]

            ],

            "desserts": [
                ["", "chijzkejk-s-borovinki", "Чийзкейк с боровинки", "2,80", "150", ""],
["", "torta-krnch-karamel", "Торта Крънч карамел", "3,50", "150", ""],
["", "brauni-s-krem-maskarpone", "Брауни с крем маскарпоне", "3,50", "150", ""],
["", "torta-shokolada", "Торта Шоколада", "4,20", "150", ""],
["", "krem-bryule", "Крем Брюле", "3,50", "150", ""],
["", "plodova-feeriya-s-maskarpone", "Плодова феерия с маскарпоне", "4,90", "300", ""]

            ]
        }', 
        'slug' => 'restorant-leon',
        'business_name' => 'Ресторант Leon',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Цар Иван Шишман 60',
        'address_additional' => '',
        'coords_x' => '42.4270048',
        'coords_y' => '25.6291763',
        'phone' => '+359888707455',
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
                ["", "brokoli-s-topeno-sirene-i-smetana", "Броколи с топено сирене и сметана", "3,50", "400", ""],
["", "brkani-yajcza-s-bekon", "Бъркани яйца с бекон", "2,80", "400", ""],
["", "kartofeni-kyufteta-s-zelena-garnitura", "Картофени кюфтета с зелена гарнитура", "2,80", "400", ""],
["", "kartofeni-kyufteta-s-topeno-sirene", "Картофени кюфтета с топено сирене", "2,80", "400", ""],
["", "kartofi-s-shunka-i-smetana", "Картофи с шунка и сметана", "2,80", "400", ""],
["", "kartofi-s-rozmarin", "Картофи с розмарин", "2,80", "400", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "400", ""],
["", "kashkaval-pane-s-kartofi", "Кашкавал пане с картофи", "3,50", "400", ""],
["", "kashkaval-pane-ss-zelena-garnitura", "Кашкавал пане със зелена гарнитура", "3,50", "400", ""],
["", "kordon-blo-s-garnitura", "Кордон бльо с гарнитура", "4,20", "400", ""],
["", "kyufteta-po-czarigradski", "Кюфтета по цариградски", "3,50", "400", ""],
["", "lazanya-s-shunka", "Лазаня с шунка", "3,50", "400", ""],
["", "ovcharski-paj", "Овчарски пай", "3,50", "400", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,80", "400", ""],
["", "panirani-pileshki-prchiczi-s-przheni-kartofki", "Панирани пилешки пръчици с пържени картофки", "3,50", "400", ""],
["", "panirano-pileshko-file-s-zelena-garnitura", "Панирано пилешко филе с зелена гарнитура", "3,50", "400", ""],
["", "pasta-vegetariana", "Паста Вегетариана", "3,50", "400", ""],
["", "pile-s-oriz-i-zelenchuczi", "Пиле с ориз и зеленчуци", "3,50", "400", ""],
["", "pile-s-bekon-i-sirena", "Пиле с бекон и сирена", "4,20", "400", ""],
["", "pile-s-pasta-i-sirena", "Пиле с паста и сирена", "3,50", "400", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "400", ""],
["", "pileshki-ruladini-ss-spanak", "Пилешки руладини със спанак", "4,20", "400", ""],
["", "pileshki-filencza-v-bekon-ss-zelena-garnitura", "Пилешки филенца в бекон със зелена гарнитура", "3,50", "400", ""],
["", "pileshki-shishcheta-s-bekon-i-zelena-garnitura", "Пилешки шишчета с бекон и зелена гарнитура", "4,20", "400", ""],
["", "pileshki-flejki-s-med", "Пилешки флейки с мед", "3,50", "400", ""],
["", "pileshki-shniczel-po-vienski", "Пилешки шницел по виенски", "3,50", "400", ""],
["", "pileshko-bonfile-s-bekon", "Пилешко бонфиле с бекон", "4,20", "400", ""],
["", "pileshko-butche-ss-spanak-i-oriz", "Пилешко бутче със спанак и ориз", "3,50", "400", ""],
["", "pileshko-role-ss-smetana-i-kartofeno-pyure", "Пилешко роле със сметана и картофено пюре", "3,50", "400", ""],
["", "pileshko-s-brokoli-i-smetana", "Пилешко с броколи и сметана", "4,20", "400", ""],
["", "pileshko-file-na-skara-ss-zelena-garnitura", "Пилешко филе на скара със зелена гарнитура", "3,50", "400", ""],
["", "pileshko-file-s-gbi-i-kartofeno-pyure", "Пилешко филе с  гъби и картофено пюре", "4,20", "400", ""],
["", "pileshko-file-ss-smetana-i-kartofeno-pyure", "Пилешко филе със сметана и картофено пюре", "4,90", "400", ""],
["", "pileshko-file-ss-susam-i-zelena-garnitura", "Пилешко филе със сусам и зелена гарнитура", "4,20", "400", ""],
["", "plneni-rebrcza-ss-zapecheni-kartofki", "Пълнени ребърца със запечени картофки", "3,50", "400", ""],
["", "plneno-pileshko-file-s-garnitura", "Пълнено пилешко филе с гарнитура", "4,20", "400", ""],
["", "przhena-skumriya-s-kartofena-salata-garnitura", "Пържена скумрия с картофена салата гарнитура", "3,50", "400", ""],
["", "przheni-kyufteta-ss-zelena-garnitura", "Пържени кюфтета със зелена гарнитура", "3,50", "400", ""],
["", "przheni-tikvichki-s-chesnov-sos", "Пържени тиквички с чеснов сос", "3,50", "400", ""],
["", "ratatuj", "Рататуй", "3,50", "400", ""],
["", "svinski-vinen-kebap", "Свински винен кебап", "3,50", "400", ""],
["", "svinski-dzholan-s-zapecheni-kartofki", "Свински джолан с запечени картофки", "4,20", "400", ""],
["", "svinski-kareta-s-kopr-i-chesn-i-kartofeno-pyure", "Свински карета с копър и чесън и картофено пюре", "4,20", "400", ""],
["", "svinski-rebrcza-s-kartofki-na-furna", "Свински ребърца с картофки на фурна", "3,50", "400", ""],
["", "svinski-shishcheta-ss-zelena-garnitura", "Свински шишчета със зелена гарнитура", "4,20", "400", ""],
["", "svinski-shniczel-po-vienski", "Свински шницел по виенски", "3,50", "400", ""],
["", "svinsko-kontra-file-na-skara-ss-zelena-garnitura", "Свинско контра филе на скара със зелена гарнитура", "4,20", "400", ""],
["", "svinsko-file-s-gben-sos-i-kartofeno-pyure", "Свинско филе с гъбен сос и картофено пюре", "4,90", "400", ""],
["", "skara-kyufte-i-kebapche-ss-zelena-garnitura", "Скара /кюфте и кебапче/ със зелена гарнитура", "2,80", "400", ""],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "400", ""],
["", "spageti-karbonara", "Спагети карбонара", "3,50", "400", ""],
["", "spanak-s-oriz-i-kiselo-mlyako", "Спанак с ориз и кисело мляко", "2,10", "400", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "400", ""],
["", "tarator", "Таратор", "1,40", "400", ""],
["", "teleshki-kyufteta-na-skara-ss-zelena-garnitura", "Телешки кюфтета на скара със зелена гарнитура", "4,20", "400", ""],
["", "teleshko-vareno", "Телешко варено", "2,80", "400", ""],
["", "khrupkavo-pileshko-file-s-garnitura", "Хрупкаво пилешко филе с гарнитура", "3,50", "400", ""],
["", "khrupkav-kashkaval-pane-s-garnitura", "Хрупкав кашкавал пане с гарнитура", "3,50", "400", ""],
["", "khrupkavi-kashkavaleni-prchiczi-ss-zelena-garnitura", "Хрупкави кашкавалени пръчици със зелена гарнитура", "3,50", "400", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "400", ""],
["", "shniczel-pane-ss-zelena-garnitura", "Шницел пане със зелена гарнитура", "3,50", "400", ""],
["", "shniczel-s-kashkaval-ss-zelena-garnitura", "Шницел с кашкавал със зелена гарнитура", "3,50", "400", ""]

            ],

            "salads": [
                ["", "salata-karuchkata", "Салата Каручката", "10,50", "1000", ""],
["", "shopska-salata", "Шопска салата", "4,20", "450", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "520", ""],
["", "kalugerska-salata", "Калугерска салата", "4,90", "450", ""],
["", "karuczarska-salata", "Каруцарска салата", "4,90", "450", ""],
["", "salata-czezar-s-pile", "Салата Цезар с пиле", "5,60", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "450", ""],
["", "kapreze", "Капрезе", "4,90", "400", ""],
["", "salata-ajsberg-ss-skaridi-i-rukola", "Салата айсберг със скариди и рукола", "5,60", "400", ""],
["", "svezha-salata-ss-sino-sirene", "Свежа салата със синьо сирене", "5,60", "400", ""],
["", "beleni-domati-s-katk-rukola-i-brusketi-s-bosilek", "Белени домати с катък, рукола и брускети с босилек", "4,90", "450", ""],
["", "unikalna-salata", "Уникална салата", "5,60", "450", ""],
["", "pecheni-piperki-s-katk-ili-sirene", "Печени пиперки с катък или сирене", "4,20", "360", ""],
["", "proletna-salata-s-yajcze", "Пролетна салата с яйце", "3,50", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "400", ""],
["", "meshana-salata-ss-sirene-ili-katk", "Мешана салата със сирене или катък", "3,50", "450", ""],
["", "bio-salata-s-morkovi", "Био салата с моркови", "3,50", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "300", ""],
["", "selska-salata", "Селска салата", "4,20", "450", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "400", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "400", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "400", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "400", ""],
["", "zelenchukova-krem-supa-s-krutoni", "Зеленчукова крем супа с крутони", "2,10", "400", ""]

            ],

            "Топли предястия": [
                ["", "plato-sirencza-karuchkata", "Плато сиренца Каручката", "11,90", "600", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчетa", "4,90", "300", ""],
["", "panirani-sirencza", "Панирани сиренцa", "4,20", "300", ""],
["", "topeni-sirencza-s-kornflejks", "Топени сиренца с корнфлейкс", "4,90", "300", ""],
["", "topeni-sirencza-ss-susam", "Топени сиренца със сусам", "4,90", "300", ""],
["", "panirani-lucheni-krgcheta-s-chesnov-sos", "Панирани лучени кръгчета с чеснов сос", "3,50", "300", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,90", "300", ""],
["", "khrupkav-kashkaval-pane", "Хрупкав кашкавал пане", "4,90", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofki-ss-sirene", "Пържени картофки със сирене", "2,80", "300", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,80", "250", ""],
["", "pikantni-kartofi-s-kashkaval", "Пикантни картофи с кашкавал", "3,50", "300", ""],
["", "chushki-byurek", "Чушки бюрек", "4,20", "", ""],
["", "kartofi-s-bekon-i-smetana", "Картофи с бекон и сметана", "3,50", "350", ""],
["", "gbi-s-maslo", "Гъби с масло", "4,20", "200", ""],
["", "gbi-po-milanski", "Гъби по Милански", "4,90", "350", ""],
["", "plneni-gbki-s-bekon-i-kashkaval", "Пълнени гъбки с бекон и кашкавал", "4,90", "300", ""],
["", "plneni-gbki-s-buket-sirena", "Пълнени гъбки с букет сирена", "4,90", "300", ""]

            ],

            "Пилешки мезенца": [
                ["", "pileshki-khapki-karuchkata", "Пилешки хапки Каручката", "11,90", "600", ""],
["", "pileshki-filencza-s-parmezanova-korichka", "Пилешки филенца с пармезанова коричка", "6,30", "300", ""],
["", "khrupkavi-pileshki-bon-filencza-s-chesnov-sos", "Хрупкави пилешки бон филенца с чеснов сос", "5,60", "350", ""],
["", "sladki-aromatni-pileshki-krilcza-s-przheni-kartofki", "Сладки ароматни пилешки крилца с пържени картофки", "6,30", "500", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,90", "350", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "300", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "5,60", "300", ""],
["", "pileshki-khapki-s-filirani-bademi", "Пилешки хапки с филирани бадеми", "5,60", "300", ""],
["", "pileshki-khapki-s-gbi-i-kashkaval", "Пилешки хапки с гъби и кашкавал", "4,90", "300", ""],
["", "pileshki-filencza-s-kri-sos", "Пилешки филенца с къри сос", "5,60", "300", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "4,20", "300", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "4,90", "400", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "4,20", "300", ""],
["", "pile-oriz-i-zelenchuczi", "Пиле, ориз и зеленчуци", "4,20", "400", ""],
["", "chikn-i-chips", "Чикън и чипс", "5,60", "500", ""]

            ],

            "Свински и телешки мезета": [
                ["", "vlcho-meze", "Вълчо мезе", "14,70", "750", ""],
["", "plato-vratni-kareta", "Плато Вратни карета", "12,60", "650", ""],
["", "khajdushka-sofra-na-dska", "Хайдушка софра на дъска", "19,60", "1000", ""],
["", "karuczarsko-meze-na-dska", "Каруцарско мезе на дъска", "19,60", "1000", ""],
["", "teleshka-sofra-na-dska", "Телешка софра на дъска", "12,60", "700", ""],
["", "domashni-kyuftencza-na-dska-s-kartofki-i-lyutenicza", "Домашни кюфтенца на дъска с картофки и лютеница", "6,30", "550", ""],
["", "kasapsko-meze", "Касапско мезe", "7,00", "600", ""],
["", "katino-meze", "Катино мезе", "6,30", "450", ""],
["", "meraklijsko-meze", "Мераклийско мезе", "9,80", "600", ""],
["", "pikantni-rebrcza-s-med", "Пикантни ребърца с мед", "7,00", "400", ""],
["", "svinski-rebrcza-s-barbekyu-sos", "Свински ребърца с барбекю сос", "7,00", "400", ""],
["", "stefkova-prishhyavka", "Стефковa прищявка", "7,00", "400", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "4,20", "300", ""],
["", "svinski-drob-przhen", "Свински дроб пържен", "4,20", "300", ""],
["", "svinski-khapki-s-luk", "Свински хапки с лук", "5,60", "300", ""],
["", "svinski-khapki-s-gbi-i-kashkaval", "Свински хапки с гъби и кашкавал", "5,60", "300", ""],
["", "teleshki-ezik-s-maslo", "Телешки език с масло", "5,60", "200", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "5,60", "300", ""],
["", "svinski-ushi-na-skara", "Свински уши на скара", "4,90", "300", ""],
["", "svinski-ushi-na-tigan", "Свински уши на тиган", "4,90", "300", ""]

            ],

            "Постно меню": [
                ["", "kartofi-sote", "Картофи соте", "2,80", "350", ""],
["", "kartofi-s-chesn-i-smetana", "Картофи с чесън и сметана", "2,80", "350", ""],
["", "przheni-chushki-s-domaten-sos", "Пържени чушки с доматен сос", "3,50", "350", ""],
["", "przheni-tikvichki-s-chesnov-sos", "Пържени тиквички с чеснов сос", "4,20", "350", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "3,50", "400", ""]

            ],

            "Ястия на пещ в гювечета и гондоли": [
                ["", "sirene-po-shopski", "Сирене по шопски", "3,50", "300", ""],
["", "sirene-po-trakijski", "Сирене по тракийски", "3,50", "330", ""],
["", "pileshka-kavrma-v-gyuveche", "Пилешка кавърма в гювече", "6,30", "400", ""],
["", "svinska-kavrma-v-gyuveche", "Свинска кавърма в гювече", "6,30", "400", ""],
["", "gyuveche-po-lovdzhijski", "Гювече по ловджийски", "6,30", "500", ""],
["", "gyuvecheto-na-majstora", "Гювечето на майстора", "7,00", "500", ""],
["", "gondola-ss-shunka", "Гондола със шунка", "4,90", "450", ""],
["", "gondola-pileshki-zhulieni", "Гондола Пилешки жулиени", "5,60", "450", ""],
["", "gondola-svinski-dzholan-na-peshh", "Гондола свински джолан на пещ", "6,30", "450", ""],
["", "gondola-svinski-zhulieni", "Гондола Свински жулиени", "5,60", "450", ""],
["", "gondola-pileshki-filencza", "Гондола Пилешки филенца", "5,60", "450", ""],
["", "gondola-s-brokoli-i-sirena", "Гондола с броколи и сирена", "5,60", "450", ""],
["", "gondola-s-pileshko-brokoli-i-sirena", "Гондола с пилешко броколи и сирена", "5,60", "450", ""],
["", "zelenchukova-gondola", "Зеленчукова гондола", "5,60", "450", ""]

            ],

            "Основни ястия": [
                ["", "pile-moczarela", "Пиле Моцарела", "8,40", "550", ""],
["", "plneni-pileshki-grdi-ss-susheni-domati-i-moczarela-s-garnitura", "Пълнени пилешки гърди със сушени домати и моцарела с гарнитура", "8,40", "450", ""],
["", "stek-karuchkata", "Стек Каручката", "7,70", "500", ""],
["", "svinsko-bonfile-s-manatarki-i-garnitura-pikantni-kartofi", "Свинско бонфиле с манатарки и гарнитура пикантни картофи", "9,10", "500", ""],
["", "svinski-dzholan-na-peshh-ss-zelenchuczi-i-sobstven-sos", "Свински джолан на пещ със зеленчуци и собствен сос", "7,00", "600", ""],
["", "svinsko-pecheno-s-garnitura-kartofeno-pyure", "Свинско печено с гарнитура картофено пюре", "7,00", "450", ""],
["", "agneshko-pecheno-s-garnitura", "Агнешко печено с гарнитура", "18,20", "450", ""],
["", "pileshki-shniczel-po-vienski-vrkhu-kanape-ot-przheni-kartofi", "Пилешки шницел по виенски върху канапе от пържени картофи", "6,30", "480", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "6,30", "450", ""],
["", "svinski-shniczel-po-vienski-s-garnitura", "Свински шницел по виенски с гарнитура", "7,00", "480", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "7,70", "450", ""],
["", "svinsko-file-ss-smetana", "Свинско филе със сметана", "7,70", "500", ""],
["", "pileshko-file-ss-smetana", "Пилешко филе със сметана", "7,70", "500", ""]

            ],

            "Цвърчащи сачове": [
                ["", "sach-karuchkata", "Сач Каручката", "13,30", "1000", ""],
["", "khajdushki-sach", "Хайдушки сач", "13,30", "1000", ""],
["", "pileshko-sache", "Пилешко саче", "6,30", "", ""],
["", "svinsko-sache", "Свинско саче", "6,30", "", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "6,30", "400", ""],
["", "agneshki-drebolijki-na-sach", "Агнешки дреболийки на сач", "6,30", "250", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "4,20", "", ""],
["", "kariola", "Кариола", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "mamma-mia", "Мамма миа", "4,90", "", ""],
["", "kuatro-stadzhione", "Куатро стаджионе", "4,20", "", ""],
["", "kuatro-formadzhio", "Куатро формаджио", "4,20", "", ""],
["", "proshuto-krudo", "Прошуто крудо", "4,90", "", ""]

            ],

            "fish": [
                ["", "przhen-sharan-s-kartofi-s-maslo", "Пържен шаран с картофи с масло", "6,30", "450", ""],
["", "lavrak-na-skara-s-garnitura", "Лаврак на скара с гарнитура", "10,50", "500", ""],
["", "midi-s-maslo", "Миди с масло", "5,60", "250", ""],
["", "kalmari-na-plocha-v-koprov-sos", "Калмари на плоча в копъров сос", "7,70", "200", ""],
["", "kalmari-pane", "Калмари пане", "7,70", "300", ""],
["", "pstrva-przhena-s-garnitura", "Пъстърва пържена с гарнитура", "6,30", "450", ""],
["", "pstrva-na-skara-s-garnitura", "Пъстърва на скара с гарнитура", "6,30", "450", ""],
["", "skumriya-przhena-s-garnitura", "Скумрия пържена с гарнитура", "4,90", "450", ""],
["", "skumriya-na-skara-s-garnitura", "Скумрия на скара с гарнитура", "4,90", "450", ""],
["", "przhen-safrid", "Пържен сафрид", "4,90", "300", ""]

            ],

            "Балканска скара": [
                ["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "karnache", "Карначе", "2,80", "200", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "250", ""],
["", "nevrozno-kyufte", "Неврозно кюфте", "1,40", "100", ""],
["", "teleshki-sudzhuk-na-greben", "Телешки суджук на гребен", "5,60", "", ""],
["", "teleshko-kyufte", "Телешко кюфте", "2,10", "100", ""],
["", "svinski-bekon-na-skara", "Свински бекон на скара", "6,30", "400", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "svinski-rebra-na-skara", "Свински ребра на скара", "6,30", "400", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "300", ""],
["", "svinsko-bonfile-na-skara", "Свинско бонфиле на скара", "5,60", "200", ""],
["", "svinsko-kontrafile-na-skara", "Свинско контрафиле на скара", "5,60", "300", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "300", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "120", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "7,00", "500", ""],
["", "svinski-shashlik", "Свински шашлик", "7,00", "500", ""],
["", "meshana-skara", "Мешана скара", "12,60", "750", ""]

            ],

            "Сухи мезета": [
                ["", "plato-sukhi-mezeta-karuchkata", "Плато сухи мезета Каручката", "19,60", "550", ""],
["", "sudzhuk", "Суджук", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "lukanka", "Луканка", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "bekon", "Бекон", "0,70", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "sirene", "Сирене", "0,00", "50", ""],
["", "sirene-moczarela", "Сирене Моцарела", "1,40", "50", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""]

            ],

            "Аламинути от яйца": [
                ["", "omlet-natyur", "Омлет натюр", "2,10", "180", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "230", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "230", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "280", ""],
["", "omlet-s-bekon", "Омлет с бекон", "2,80", "280", ""],
["", "omlet-asorti", "Омлет асорти", "2,80", "280", ""],
["", "mish-mash", "Миш-маш", "2,80", "300", ""],
["", "yajcza-po-panagyurski", "Яйца по Панагюрски", "2,80", "250", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi-garnitura", "Пържени картофи гарнитура", "1,40", "180", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "150", ""],
["", "studena-garnitura", "Студена гарнитура", "0,70", "150", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "200", ""],
["", "topka-oriz", "Топка ориз", "0,00", "50", ""],
["", "topka-katk", "Топка катък", "0,70", "50", ""],
["", "czarevicza", "Царевица", "1,40", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "200", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta-s-maskarpone", "Домашна бисквитена торта с маскарпоне", "2,80", "150", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "", ""],
["", "palachinka", "Палачинка", "3,50", "", ""],
["", "krem-karamel", "Крем карамел", "1,40", "", ""]

            ],

            "Хляб и пърленки": [
                ["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "prepechena-filijka", "Препечена филийка", "0,00", "", ""],
["", "prepechena-filijka-s-maslo-i-chesn", "Препечена филийка с масло и чесън", "0,00", "", ""],
["", "chesnova-prlenka-s-sharena-sol-na-peshh", "Чеснова пърленка с шарена сол на пещ", "1,40", "", ""],
["", "prlenka-s-rozmarin-na-peshh", "Пърленка с розмарин на пещ", "1,40", "", ""],
["", "prlenka-ss-sirencze-na-peshh", "Пърленка със сиренце на пещ", "1,40", "", ""],
["", "prlenka-s-kashkaval-na-peshh", "Пърленка с кашкавал на пещ", "1,40", "", ""],
["", "kombinirana-prlenka-na-peshh", "Комбинирана пърленка на пещ", "2,10", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,70", "80", ""],
["", "majoneza", "Майонеза", "0,70", "80", ""],
["", "chili", "Чили", "0,70", "80", ""],
["", "lyutenicza", "Лютеница", "0,70", "80", ""],
["", "gben-sos", "Гъбен сос", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "80", ""],
["", "zekhtin", "Зехтин", "0,70", "40", ""],
["", "mlechen-sos", "Млечен сос", "0,70", "80", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "80", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/696896.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "2,10", "", ""]

            ],

            "drinks": [
                ["", "redbull", "RedBull", "3,50", "250", ""],
["", "shark", "Shark", "3,50", "250", ""]

            ],

            "beer": [
                ["", "khajniken-0", "Хайникен 0%", "2,10", "330", ""],
["", "stolichno-tmno", "Столично тъмно", "2,10", "400", ""],
["", "smrsbi", "Съмърсби", "2,10", "300", ""],
["", "corona", "Corona", "4,20", "355", ""],
["", "karlsberg", "Карлсберг", "2,10", "500", ""],
["", "budvajzer", "Будвайзер", "2,10", "500", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""]

            ],

            "Винен лист": [
                ["", "byalo-vino-le-photographe-sovinon-blan", "Бяло вино: Le photographe совиньон блан", "24,50", "700", ""],
["", "byalo-vino-minkov-brothers-kyuve", "Бяло вино: Minkov brothers кюве", "19,60", "700", ""],
["", "byalo-vino-dj-vu-shardone", "Бяло вино: Déjà vu шардоне", "16,80", "700", ""],
["", "roze-le-photographe-grenash-i-kaberne-fran", "Розе: Le photographe гренаш и каберне фран", "24,50", "700", ""],
["", "roze-cycle-kaberne-sovinon-i-sira", "Розе: Cycle каберне совиньон и сира", "14,00", "700", ""],
["", "chervino-vino-le-photographe-sira", "Червино вино: Le photographe сира", "24,50", "700", ""],
["", "chervino-vino-minkov-brothers", "Червино вино: Minkov brothers", "19,60", "700", ""],
["", "chervino-vino-stallion-classic", "Червино вино: Stallion classic", "28,00", "700", ""]

            ]
        }', 
        'slug' => 'mehana-karuchkata',
        'business_name' => 'Механа Каручката',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Петър Парчевич 46',
        'address_additional' => '',
        'coords_x' => '42.42473901',
        'coords_y' => '25.63184359',
        'phone' => '+359877567358',
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
                ["", "morkov--300-ml", "Морков | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "morkov--500-ml", "Морков | 500 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "morkov--1-l", "Морков | 1 L", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "czveklo--300-ml", "Цвекло | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "czveklo--500-ml", "Цвекло | 500 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "czveklo--1-l", "Цвекло | 1 L", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal--300-ml", "Портокал | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal--500-ml", "Портокал | 500 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal--1-l", "Портокал | 1 L", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut--300-ml", "Грейпфрут | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut--500-ml", "Грейпфрут | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut--1-l", "Грейпфрут | 1 L", "9,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "morkov-yablka-i-czveklo--300-ml", "Морков, Ябълка и Цвекло | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "morkov-yablka-i-czveklo--500-ml", "Морков, Ябълка и Цвекло | 500 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "morkov-yablka-i-czveklo--1-l", "Морков, Ябълка и Цвекло | 1 L", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-czveklo--300-ml", "Портокал и Цвекло | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-czveklo--500-ml", "Портокал и Цвекло | 500 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-czveklo--1-l", "Портокал и Цвекло | 1 L", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "chervena-yablka--300-ml", "Червена Ябълка | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "chervena-yablka--500-ml", "Червена Ябълка | 500 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "chervena-yablka--1-l", "Червена Ябълка | 1 L", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka--300-ml", "Зелена Ябълка | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka--500-ml", "Зелена Ябълка | 500 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka--1-l", "Зелена Ябълка | 1 L", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-i-chervena-yablka--300-ml", "Зелена и Червена Ябълка | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-i-chervena-yablka--500-ml", "Зелена и Червена Ябълка | 500 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-i-chervena-yablka--1-l", "Зелена и Червена Ябълка | 1 L", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "slnchev-den--300-ml", "Слънчев ден | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "slnchev-den--500-ml", "Слънчев ден | 500 ml", "4,20", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "slnchev-den--1-l", "Слънчев ден | 1 L", "7,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "cila--300-ml", "Cила | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "cila--500-ml", "Cила | 500 ml", "4,20", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "cila--1-l", "Cила | 1 L", "7,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "osvezhavashh--300-ml", "Освежаващ | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "osvezhavashh--500-ml", "Освежаващ | 500 ml", "4,20", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "osvezhavashh--1-l", "Освежаващ | 1 L", "7,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-lajm--300-ml", "Портокал и Лайм | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-lajm--500-ml", "Портокал и Лайм | 500 ml", "4,90", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-lajm--1-l", "Портокал и Лайм | 1 L", "7,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-yagoda--300-ml", "Портокал и Ягода | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-yagoda--500-ml", "Портокал и Ягода | 500 ml", "4,90", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-yagoda--1-l", "Портокал и Ягода | 1 L", "9,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-yagoda-i-lajm--300-ml", "Портокал, Ягода и Лайм | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-yagoda-i-lajm--500-ml", "Портокал, Ягода и Лайм | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-yagoda-i-lajm--1-l", "Портокал, Ягода и Лайм | 1 L", "9,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-yagoda-i-menta--300-ml", "Портокал, Ягода и Мента | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-yagoda-i-menta--500-ml", "Портокал, Ягода и Мента | 500 ml", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-yagoda-i-menta--1-l", "Портокал, Ягода и Мента | 1 L", "9,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-kivi--300-ml", "Портокал и Киви | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-kivi--500-ml", "Портокал и Киви | 500 ml", "4,90", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-kivi--1-l", "Портокал и Киви | 1 L", "9,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-zelena-yablka--300-ml", "Портокал и Зелена ябълка | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-zelena-yablka--500-ml", "Портокал и Зелена ябълка | 500 ml", "4,90", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-zelena-yablka--1-l", "Портокал и Зелена ябълка | 1 L", "7,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-grozde-i-lajm--300-ml", "Портокал, Грозде и Лайм | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-grozde-i-lajm--500-ml", "Портокал, Грозде и Лайм | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-grozde-i-lajm--1-l", "Портокал, Грозде и Лайм | 1 L", "9,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-bosilek--300-ml", "Портокал и Босилек | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-bosilek--500-ml", "Портокал и Босилек | 500 ml", "4,20", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-bosilek--1-l", "Портокал и Босилек | 1 L", "7,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-mango--300-ml", "Портокал и Манго | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-mango--500-ml", "Портокал и Манго | 500 ml", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-mango--1-l", "Портокал и Манго | 1 L", "9,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-morkov--300-ml", "Портокал и Морков | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-morkov--500-ml", "Портокал и Морков | 500 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-morkov--1-l", "Портокал и Морков | 1 L", "7,00", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-grejpfrut--300-ml", "Портокал и Грейпфрут | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-grejpfrut--500-ml", "Портокал и Грейпфрут | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-i-grejpfrut--1-l", "Портокал и Грейпфрут | 1 L", "9,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-zelena-yablka-i-nar--300-ml", "Портокал, Зелена ябълка и нар | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-zelena-yablka-i-nar--500-ml", "Портокал, Зелена ябълка и нар | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "portokal-zelena-yablka-i-nar--1-l", "Портокал, Зелена ябълка и нар | 1 L", "9,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-i-yagoda--300-ml", "Зелена ябълка и Ягода | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-i-yagoda--500-ml", "Зелена ябълка и Ягода | 500 ml", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-i-yagoda--1-l", "Зелена ябълка и Ягода | 1 L", "9,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-i-kivi--300-ml", "Зелена ябълка и Киви | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-i-kivi--500-ml", "Зелена ябълка и Киви | 500 ml", "4,90", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-i-kivi--1-l", "Зелена ябълка и Киви | 1 L", "9,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-kivi-i-spanak--300-ml", "Зелена ябълка, Киви и Спанак | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-kivi-i-spanak--500-ml", "Зелена ябълка, Киви и Спанак | 500 ml", "4,90", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-kivi-i-spanak--1-l", "Зелена ябълка, Киви и Спанак | 1 L", "9,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-i-nar--300-ml", "Зелена ябълка и нар | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-i-nar--500-ml", "Зелена ябълка и нар | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-i-nar--1-l", "Зелена ябълка и нар | 1 L", "9,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-spanak-i-magdanoz--300-ml", "Зелена ябълка, спанак и магданоз | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-spanak-i-magdanoz--500-ml", "Зелена ябълка, спанак и магданоз | 500 ml", "4,90", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-spanak-i-magdanoz--1-l", "Зелена ябълка, спанак и магданоз | 1 L", "9,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-limon-i-med--300-ml", "Зелена ябълка, лимон и мед | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-limon-i-med--500-ml", "Зелена ябълка, лимон и мед | 500 ml", "4,90", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "zelena-yablka-limon-i-med--1-l", "Зелена ябълка, лимон и мед | 1 L", "9,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut-i-yablka--300-ml", "Грейпфрут и Ябълка | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut-i-yablka--500-ml", "Грейпфрут и Ябълка | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut-i-yablka--1-l", "Грейпфрут и Ябълка | 1 L", "9,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut-i-nar--300-ml", "Грейпфрут и Нар | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut-i-nar--500-ml", "Грейпфрут и Нар | 500 ml", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut-i-nar--1-l", "Грейпфрут и Нар | 1 L", "9,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut-i-yagoda--300-ml", "Грейпфрут и Ягода | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut-i-yagoda--500-ml", "Грейпфрут и Ягода | 500 ml", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "grejpfrut-i-yagoda--1-l", "Грейпфрут и Ягода | 1 L", "9,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas--300-ml", "Ананас | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas--500-ml", "Ананас | 500 ml", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-yagoda--300-ml", "Ананас и Ягода | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-yagoda--500-ml", "Ананас и Ягода | 500 ml", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-mango--300-ml", "Ананас и  Манго | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-mango--500-ml", "Ананас и  Манго | 500 ml", "6,30", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-portokal--300-ml", "Ананас и Портокал | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-portokal--500-ml", "Ананас и Портокал | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-portokal-i-morkov--300-ml", "Ананас, Портокал и Морков | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-portokal-i-morkov--500-ml", "Ананас, Портокал и Морков | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-morkov--300-ml", "Ананас и Морков | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-morkov--500-ml", "Ананас и Морков | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-yablka--300-ml", "Ананас и Ябълка | 300 ml", "2,80", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-yablka--500-ml", "Ананас и Ябълка | 500 ml", "4,90", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-krusha--300-ml", "Ананас и Круша | 300 ml", "3,50", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ananas-i-krusha--500-ml", "Ананас и Круша | 500 ml", "5,60", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"]

            ],

            "Шейкове": [
                ["", "zakuska--300-ml", "Закуска | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "banan-i-yagoda--300-ml", "Банан и Ягода | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "banan-i-ananas--300-ml", "Банан и Ананас | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "naturalen-proteinov-shejk--300-ml", "Натурален протеинов шейк | 300 ml", "2,10", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"]

            ],

            "Смути": [
                ["", "smuti-shokolad", "Смути Шоколад", "2,80", "", ""],
["", "smuti-shokolad-i-kokos", "Смути Шоколад и кокос", "3,50", "", ""],
["", "smuti-portol", "Смути Портол", "2,80", "", ""],
["", "banana-moka-smuti", "Банана мока смути", "3,50", "", ""],
["", "smuti-yagoda-i-menta", "Смути Ягода и Мента", "3,50", "", ""],
["", "smuti-ananas-i-kokos", "Смути Ананас и кокос", "2,80", "", ""],
["", "smuti-yagoda-mango-i-ananas", "Смути Ягода, манго и ананас", "3,50", "", ""]

            ]
        }', 
        'slug' => 'juice-bar',
        'business_name' => 'Juice Bar',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Кольо Ганчев 52',
        'address_additional' => '',
        'coords_x' => '42.424232',
        'coords_y' => '25.633284',
        'phone' => '+359895380072',
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
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "salads": [
                ["", "mlechna-salata", "Млечна салата", "3,50", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "450", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "4,20", "400", ""],
["", "meshana-salata-redena", "Мешана салата редена", "4,20", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "kapreze", "Капрезе", "4,90", "400", ""],
["", "salata-czezar-s-riba-ton", "Салата Цезар с риба тон", "6,30", "400", ""],
["", "salata-czezar-s-pileshko-file", "Салата Цезар с пилешко филе", "5,60", "400", ""],
["", "meraklijska-salata", "Мераклийска салата", "4,90", "400", ""],
["", "salata-nicza", "Салата Ница", "5,60", "400", ""],
["", "salata-tasos", "Салата Тасос", "5,60", "400", ""],
["", "salata-kuatro-formadzhi", "Салата Куатро Формаджи", "5,60", "400", ""],
["", "salata-gracziya", "Салата Грация", "5,60", "400", ""],
["", "salata-italiya", "Салата Италия", "5,60", "400", ""],
["", "salata-melidzhano", "Салата Мелиджано", "5,60", "400", ""],
["", "salata-czezar-s-kalmari", "Салата Цезар с калмари", "6,30", "400", ""],
["", "salata-vitamina", "Салата Витамина", "4,20", "400", ""]

            ],

            "Топли предястия": [
                ["", "khrupkavi-tikvichki-s-chesnov-sos", "Хрупкави тиквички с чеснов сос", "4,90", "200", ""],
["", "domashni-kartofi", "Домашни картофи", "2,80", "200", ""],
["", "domashni-kartofi-ss-sirene", "Домашни картофи със сирене", "3,50", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,80", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "sirenovi-khapki", "Сиренови хапки", "4,20", "300", ""],
["", "panirani-topeni-sirencza-s-borovinkovo-sladko", "Панирани топени сиренца с боровинково сладко", "4,90", "250", ""],
["", "panirani-kashkavaleni-khapki", "Панирани кашкавалени хапки", "4,90", "300", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,90", "300", ""],
["", "gbi-s-maslo", "Гъби с масло", "4,20", "250", ""],
["", "zapekanka-s-buket-sirena", "Запеканка с букет сирена", "5,60", "450", ""],
["", "zapekanka-s-bekon-i-gbi", "Запеканка с бекон и гъби", "5,60", "450", ""],
["", "zapekanka-s-pile-i-krastavichki", "Запеканка с пиле и краставички", "5,60", "450", ""],
["", "svinski-ezik-v-maslo", "Свински език в масло", "4,90", "200", ""],
["", "zapekanka-s-brokoli-sino-sirene-i-smetana", "Запеканка с броколи, синьо сирене и сметана", "5,60", "450", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "7,70", "400", ""]

            ],

            "Вкусотийки от пилешко месо": [
                ["", "mezeto-na-shefa", "Мезето на шефа", "6,30", "550", ""],
["", "gyuveche-lindo-s-pileshko-meso", "Гювече Lindo с пилешко месо", "7,00", "400", ""],
["", "pileshki-zhulieni", "Пилешки жулиени", "5,60", "300", ""],
["", "pileshki-khapki-s-luk", "Пилешки хапки с лук", "5,60", "300", ""],
["", "pileshki-khapki-s-gbi-luk-i-kashkaval", "Пилешки хапки с гъби, лук и кашкавал", "7,00", "400", ""],
["", "pileshki-khapki-pane-s-chesnov-sos", "Пилешки хапки пане с чеснов сос", "5,60", "350", ""],
["", "pileshki-susamki-s-chesnov-sos", "Пилешки сусамки с чеснов сос", "5,60", "350", ""],
["", "pileshki-khapki-s-ananas", "Пилешки хапки с ананас", "7,00", "400", ""],
["", "pileshki-khapki-s-topeno-sirene", "Пилешки хапки с топено сирене", "6,30", "400", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "6,30", "400", ""],
["", "pileshki-khapki-po-ovcharski", "Пилешки хапки по овчарски", "6,30", "350", ""],
["", "pileshko-file-s-gben-sos-i-kartofeno-pyure-400gr", "Пилешко филе с гъбен сос и картофено пюре (400гр", "7,00", "", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "4,90", "350", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "5,60", "400", ""],
["", "pikantni-pileshki-krilcza", "Пикантни пилешки крилца", "4,20", "300", ""],
["", "pile-kapreze", "Пиле Капрезе", "6,30", "350", ""],
["", "pile-lindo", "Пиле Lindo", "6,30", "350", ""],
["", "speczialitet-lindo-s-pileshko-meso", "Специалитет Lindo с пилешко месо", "6,30", "350", ""],
["", "pileshki-kscheta-s-manatarki", "Пилешки късчета с манатарки", "7,00", "350", ""],
["", "pileshko-bonfile-vrkhu-shafranovo-rizoto", "Пилешко бонфиле върху шафраново ризото", "7,00", "350", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "6,30", "300", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "5,60", "300", ""]

            ],

            "Вкусотийки от свинско месо": [
                ["", "makedonska-przhenicza", "Македонска пърженица", "7,70", "500", ""],
["", "gyuveche-lindo-ss-svinsko-meso", "Гювече Lindo със свинско месо", "7,00", "450", ""],
["", "svinsko-file-s-gben-sos-i-kartofeno-pyure", "Свинско филе с гъбен сос и картофено пюре", "7,70", "400", ""],
["", "svinski-khapki-s-luk", "Свински хапки с лук", "7,00", "300", ""],
["", "svinski-khapki-s-gbi-kashkaval-i-luk", "Свински хапки с гъби, кашкавал и лук", "7,70", "400", ""],
["", "svinska-kavrma", "Свинска кавърма", "7,00", "400", ""],
["", "svinski-przhen-drob", "Свински пържен дроб", "4,20", "400", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "5,60", "400", ""],
["", "pikantni-rebrcza-lindo", "Пикантни ребърца Линдо", "7,70", "350", ""],
["", "kasapsko-meze", "Касапско мезе", "6,30", "350", ""],
["", "domashen-sudzhuk-s-garnitura-przheni-kartofi", "Домашен суджук с гарнитура пържени картофи", "7,00", "300", ""],
["", "meshana-skara", "Мешана скара", "14,00", "850", ""],
["", "kombiniran-sach", "Комбиниран сач", "9,10", "", ""],
["", "svinski-kscheta-s-manatarki", "Свински късчета с манатарки", "8,40", "350", ""],
["", "svinski-rebra", "Свински ребра", "6,30", "350", ""],
["", "svinski-stek-lindo", "Свински стек Lindo", "7,00", "400", ""],
["", "speczialitet-lindo", "Специалитет Lindo", "8,40", "450", ""],
["", "bekon-na-skara", "Бекон на скара", "7,00", "350", ""],
["", "svinski-karencza", "Свински каренца", "7,00", "300", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "7,00", "300", ""],
["", "svinski-ushi-na-skara", "Свински уши на скара", "4,90", "300", ""],
["", "vlcho-meze", "Вълчо мезе", "16,80", "1000", ""],
["", "katino-meze", "Катино мезе", "8,40", "450", ""],
["", "svinski-medaloni", "Свински медальони", "7,00", "400", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "7,00", "", ""],
["", "luchano", "Лучано", "5,60", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "5,60", "", ""],
["", "polo", "Поло", "5,60", "", ""],
["", "diablo", "Диабло", "4,90", "", ""],
["", "salsiche", "Салсиче", "5,60", "", ""],
["", "bianko-polo", "Бианко Поло", "5,60", "", ""],
["", "lindo", "Линдо", "7,00", "", ""],
["", "sezoni-500gr--", "Сезони (500гр -", "7,70", "", ""],
["", "vavilon-500gr--", "Вавилон (500гр -", "7,00", "", ""],
["", "vegetarianata", "Вегетарианата", "5,60", "", ""],
["", "proshuto", "Прошуто", "6,30", "", ""],
["", "peperoni", "Пеперони", "5,60", "", ""],
["", "kapreze", "Капрезе", "5,60", "", ""],
["", "fruti-di-mare", "Фрути Ди Маре", "9,80", "", ""],
["", "detsko-menyu", "Детско меню", "7,70", "", ""]

            ],

            "fish": [
                ["", "midi-na-tigan", "Миди на тиган", "6,30", "200", ""],
["", "safrid", "Сафрид", "4,90", "300", ""],
["", "lavrak-na-skara-s-garnitura", "Лаврак на скара с гарнитура", "11,20", "350", ""],
["", "byala-riba-pane-ss-sotirani-kartofi", "Бяла риба пане със сотирани картофи", "5,60", "300", ""],
["", "czipura-na-skara-s-garnitura", "Ципура на скара с гарнитура", "11,20", "350", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "7,00", "350", ""],
["", "skaridi-na-tigan", "Скариди на тиган", "11,20", "200", ""],
["", "sharan", "Шаран", "5,60", "300", ""],
["", "czacza", "Цаца", "3,50", "200", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "7,70", "200", ""],
["", "kostur-pane-s-garnitura-i-sotirani-kartofi", "Костур пане с гарнитура и сотирани картофи", "8,40", "300", ""],
["", "somga-kotlet-s-garnitura-grilovani-zelenchuczi", "Сьомга котлет с гарнитура гриловани зеленчуци", "11,90", "350", ""]

            ],

            "bread": [
                ["", "naturalno-khlebche-s-maslo", "Натурално хлебче с масло", "1,40", "", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "1,40", "", ""],
["", "kombinirano-khlebche", "Комбинирано хлебче", "2,80", "", ""],
["", "khlebche-s-kashkaval", "Хлебче с кашкавал", "2,80", "", ""],
["", "khlebche-ss-sirene", "Хлебче със сирене", "2,10", "", ""],
["", "bageta", "Багета", "2,10", "175", ""]

            ],

            "Ризото, паста и тортили": [
                ["", "pasta-aziya", "Паста Азия", "5,60", "450", ""],
["", "pasta-boloneze", "Паста Болонезе", "4,90", "400", ""],
["", "pasta-karbonara", "Паста Карбонара", "7,00", "400", ""],
["", "rizoto-parma", "Ризото Парма", "7,00", "400", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "400", ""],
["", "rizoto-fruti-di-mare", "Ризото Фрути ди Маре", "7,00", "400", ""],
["", "tortila-s-pileshko-meso", "Тортила с пилешко месо", "4,90", "450", ""],
["", "tortila-s-riba-ton", "Тортила с риба тон", "4,90", "450", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "2,10", "", ""],
["", "desert-lindo", "Десерт Линдо", "2,10", "150", ""],
["", "shokoladovo-sufle-s-topka-sladoled", "Шоколадово суфле с топка сладолед", "2,80", "200", ""],
["", "shokoladovo-brauni-s-topka-sladoled", "Шоколадово брауни с топка сладолед", "2,80", "250", ""]

            ],

            "sauces": [
                ["", "mlechen-sos", "Млечен сос", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "100", ""],
["", "soev-sos", "Соев сос", "0,70", "100", ""],
["", "chili-sos", "Чили сос", "0,70", "100", ""],
["", "ketchup-sos", "Кетчуп сос", "0,70", "100", ""],
["", "majoneza", "Майонеза", "0,70", "100", ""],
["", "sos-czezar", "Сос Цезар", "0,70", "100", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,70", "150", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "150", ""],
["", "zele-i-morkovi", "Зеле и моркови", "0,70", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "150", ""],
["", "topka-katk", "Топка катък", "0,00", "50", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "150", ""],
["", "kartofi-sote", "Картофи соте", "0,70", "150", ""],
["", "krastaviczi", "Краставици", "0,70", "150", ""],
["", "marulya", "Маруля", "0,70", "150", ""],
["", "lyutenicza", "Лютеница", "0,70", "150", ""]

            ],

            "Coca-Cola  напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "", ""],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "1,40", "", ""],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "1,40", "", ""],
["", "schweppes-tonik", "Schweppes Тоник", "1,40", "", ""],
["", "cappy-portokal", "Cappy Портокал", "1,40", "", ""],
["", "cappy-praskova", "Cappy Праскова", "1,40", "", ""]

            ],

            "beer": [
                ["", "pirinsko-ken", "Пиринско кен", "0,70", "500", ""],
["", "zagorka-ken", "Загорка кен", "0,70", "500", ""],
["", "karlsberg-0-bezalkokholna", "Карлсберг 0% безалкохолна", "1,40", "330", ""]

            ]
        }', 
        'slug' => 'bar-dinner-lindo',
        'business_name' => 'Bar &amp; Dinner Lindo',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ж.к. Самара 3',
        'address_additional' => '',
        'coords_x' => '42.43537936',
        'coords_y' => '25.6442766',
        'phone' => '+359886223244',
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
                ["", "topeni-sirencza-ss-susam", "Топени сиренца със сусам", "4,20", "250", ""],
["", "pileshki-khapki-s-filirani-yadki", "Пилешки хапки с филирани ядки", "4,90", "300", ""],
["", "pileshki-filencza-ss-presni-zelenchuczi", "Пилешки филенца със пресни зеленчуци", "5,60", "350", ""],
["", "pile-rizoto-ss-zelenchuczi", "Пиле ризото със зеленчуци", "3,50", "300", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "4,20", "200", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "4,20", "300", ""]

            ],

            "salads": [
                ["", "salata-pagane", "Салата Пагане", "7,00", "600", ""],
["", "arzhentina", "Аржентина", "4,20", "450", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,80", "300", ""],
["", "vareni-kartofi-s-majoneza", "Варени картофи с майонеза", "2,80", "300", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "450", ""],
["", "salata-domati", "Салата Домати", "2,80", "400", ""],
["", "domati-s-katk", "Домати с катък", "3,50", "400", ""],
["", "domati-s-katk-pecheni-piperki-i-maslini", "Домати с катък, печени пиперки и маслини", "4,20", "450", ""],
["", "ovcharska", "Овчарска", "4,20", "450", ""],
["", "zhtvarska", "Жътварска", "4,20", "450", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,80", "300", ""],
["", "krastaviczi", "Краставици", "2,80", "400", ""],
["", "krastaviczi-s-katk", "Краставици с катък", "3,50", "400", ""],
["", "salata-katk", "Салата катък", "2,80", "200", ""],
["", "salata-meshana", "Салата мешана", "2,80", "400", ""],
["", "meshana-katk", "Мешана катък", "3,50", "400", ""],
["", "mlechna", "Млечна", "2,80", "250", ""],
["", "salata-italianska", "Салата Италианска", "3,50", "300", ""],
["", "shopska", "Шопска", "3,50", "450", ""],
["", "pecheni-piperki", "Печени пиперки", "3,50", "300", ""],
["", "pecheni-piperki-s-katk", "Печени пиперки с катък", "3,50", "300", ""],
["", "pecheni-piperki-s-chesnov-sos", "Печени пиперки с чеснов сос", "3,50", "300", ""],
["", "zelena-salata", "Зелена салата", "4,20", "400", ""],
["", "bob-po-manastirski", "Боб по манастирски", "3,50", "300", ""],
["", "beleni-domati-s-moczarela", "Белени домати с моцарела", "4,90", "400", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "400", ""],
["", "morkovi-s-czedeno-mlyako-i-orekhi", "Моркови с цедено мляко и орехи", "2,80", "300", ""],
["", "razyadka-s-chushki-katk-i-chesn", "Разядка с чушки, катък и чесън", "2,80", "250", ""],
["", "salata-morkovi", "Салата Моркови", "2,80", "250", ""],
["", "vitamina", "Витамина", "3,50", "300", ""],
["", "salata-raya", "Салата Рая", "4,20", "400", ""],
["", "selska-salata", "Селска салата", "4,20", "450", ""]

            ],

            "Топли предястия": [
                ["", "sirene-pane", "Сирене пане", "3,50", "300", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "300", ""],
["", "topeni-sirencza-s-borovinkovo-sladko", "Топени сиренца с боровинково сладко", "4,20", "250", ""],
["", "gbi-s-maslo", "Гъби с масло", "2,80", "250", ""],
["", "ezik-pane", "Език пане", "6,30", "300", ""],
["", "pastrma-s-luk", "Пастърма с лук", "4,90", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "300", ""],
["", "kartofi-sote", "Картофи Соте", "2,80", "350", ""],
["", "kartofi-s-bekon-i-kashkaval", "Картофи с бекон и кашкавал", "2,80", "300", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,80", "250", ""],
["", "khapki-po-tarikatski", "Хапки по Тарикатски", "3,50", "300", ""],
["", "zadusheni-brokoli", "Задушени броколи", "2,80", "300", ""],
["", "brokoli-ss-smetana", "Броколи със сметана", "3,50", "300", ""],
["", "pekani-zelenchuczi", "Пекани зеленчуци", "3,50", "300", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "250", ""],
["", "kashkaval-khapki", "Кашкавал хапки", "3,50", "200", ""],
["", "sirene-pane", "Сирене пане", "2,80", "250", ""],
["", "sirene-khapki", "Сирене хапки", "3,50", "200", ""],
["", "ushi-na-tigan", "Уши на тиган", "4,90", "350", ""],
["", "przheni-tikvichki-ss-chesnov-sos", "Пържени тиквички със чеснов сос", "2,80", "300", ""],
["", "czacza", "Цаца", "2,80", "250", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "Омлети": [
                ["", "omlet-asorti", "Омлет Асорти", "2,10", "350", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,10", "300", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "300", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "300", ""],
["", "yajcza-na-ochi", "Яйца на очи", "1,40", "250", ""],
["", "mish-mash", "Миш-маш", "2,10", "300", ""],
["", "brkani-yajcza-s-lukanka", "Бъркани яйца с луканка", "2,80", "300", ""]

            ],

            "Аламинути от свинско": [
                ["", "svinski-drob-przhen", "Свински дроб пържен", "3,50", "300", ""],
["", "svinski-drob-s-luk", "Свински дроб с лук", "4,20", "300", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "4,20", "350", ""],
["", "svinski-khapki-s-gbi-i-kashkaval", "Свински хапки с гъби и кашкавал", "6,30", "350", ""],
["", "przheni-kyufteta", "Пържени кюфтета", "3,50", "", ""],
["", "arabski-kyufteta", "Арабски кюфтета", "2,80", "250", ""]

            ],

            "Аламинути от пилешко": [
                ["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "350", ""],
["", "pileshki-drobcheta-s-maslo", "Пилешки дробчета с масло", "2,80", "200", ""],
["", "vodenichki-s-maslo", "Воденички с масло", "3,50", "300", ""],
["", "vodenichki-s-luk", "Воденички с лук", "3,50", "350", ""],
["", "vodenichki-s-luk-gbi-i-kashkaval", "Воденички с лук, гъби и кашкавал", "3,50", "350", ""],
["", "pileshki-khapki-s-maslo", "Пилешки хапки с масло", "4,20", "250", ""],
["", "pileshko-pane-khapki", "Пилешко пане хапки", "4,90", "350", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,90", "350", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "350", ""],
["", "pileshki-khapki-s-luk", "Пилешки хапки с лук", "4,90", "350", ""],
["", "pileshki-khapki-taralezhki", "Пилешки хапки Таралежки", "4,90", "350", ""],
["", "pileshki-khapki-s-med-i-maslo", "Пилешки хапки с мед и масло", "4,20", "300", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "300", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,90", "350", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,90", "300", ""]

            ],

            "Скара пилешка": [
                ["", "pileshki-trtki", "Пилешки трътки", "3,50", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "300", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "300", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "150", ""],
["", "krilcza-na-skara", "Крилца на скара", "3,50", "300", ""]

            ],

            "Скара свинско": [
                ["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "przhola-vratna", "Пържола вратна", "4,90", "250", ""],
["", "karnache", "Карначе", "0,70", "100", ""],
["", "svinski-karencza", "Свински каренца", "5,60", "250", ""],
["", "svinski-drob", "Свински дроб", "2,80", "300", ""],
["", "svinski-ushi", "Свински уши", "4,20", "350", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "250", ""],
["", "svinski-bekon", "Свински бекон", "5,60", "350", ""],
["", "kasapsko-meze", "Касапско мезе", "5,60", "350", ""],
["", "meshana-skara", "Мешана скара", "12,60", "700", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshko-file-na-tigan", "Пилешко филе на тиган", "4,90", "300", ""],
["", "pileshko-file-s-gben-sos", "Пилешко филе с гъбен сос", "4,90", "350", ""],
["", "pileshko-file-s-kashkaval", "Пилешко филе с кашкавал", "4,90", "350", ""],
["", "pileshko-file-ss-smetana", "Пилешко филе със сметана", "4,90", "350", ""],
["", "pileshko-file-s-chesn-i-mashherka", "Пилешко филе с чесън и мащерка", "4,90", "300", ""],
["", "pileshko-file-pane", "Пилешко филе пане", "4,90", "350", ""],
["", "pile-zhulien", "Пиле Жулиен", "5,60", "350", ""]

            ],

            "Ястия от свинско месо": [
                ["", "svinsko-file-na-tigan", "Свинско филе на тиган", "6,30", "300", ""],
["", "svinsko-file-s-gben-sos", "Свинско филе с гъбен сос", "6,30", "350", ""],
["", "svinsko-file-ss-smetana", "Свинско филе със сметана", "6,30", "300", ""],
["", "svinsko-file-s-kopr-i-chesn", "Свинско филе с копър и чесън", "6,30", "300", ""],
["", "vratna-przhola-na-tigan", "Вратна пържола на тиган", "4,90", "300", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "7,00", "300", ""],
["", "svinski-khapki-s-presni-zelenchuczi", "Свински хапки с пресни зеленчуци", "6,30", "350", ""]

            ],

            "Топла гарнитура": [
                ["", "miks", "Микс", "1,40", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "150", ""]

            ],

            "Студени гарнитури": [
                ["", "lukanka", "Луканка", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""]

            ],

            "desserts": [
                ["", "domashna-torta", "Домашна торта", "2,10", "150", ""],
["", "chijzkejk", "Чийзкейк", "2,10", "100", ""],
["", "palachinka", "Палачинка", "2,10", "", ""]

            ],

            "drinks": [
                ["", "zagorka-ken", "Загорка кен", "1,40", "500", ""],
["", "mineralna-voda", "Минерална вода", "1,40", "500", ""],
["", "naturalen-sok", "Натурален сок", "1,40", "250", ""],
["", "ariana-ken", "Ариана кен", "1,40", "500", ""],
["", "studen-chaj", "Студен чай", "1,40", "250", ""],
["", "ariana-radled-ken", "Ариана Радлед кен", "1,40", "500", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "gben-sos", "Гъбен сос", "0,00", "50", ""],
["", "sos-pagane", "Сос Пагане", "0,00", "50", ""]

            ],

            "additives": [
                ["", "khlyab", "Хляб", "0,00", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "limon", "Лимон", "0,00", "", ""],
["", "prlenka-s-maslo-i-merudiya", "Пърленка с масло и мерудия", "1,40", "", ""]

            ]
        }', 
        'slug' => 'pagane',
        'business_name' => 'Pagane',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Цар.Иван Шишман 97',
        'address_additional' => '',
        'coords_x' => '42.4298669',
        'coords_y' => '25.6280702',
        'phone' => '+359897746374; +359898755252',
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
                ["", "teleshki-kencheta", "Телешки кенчета", "7,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/1163929.jpg?width=302"],
["", "trojno-kombo", "Тройно комбо", "7,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/1163930.jpg?width=302"],
["", "picza-za-plazha", "Пица за плажа", "13,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/1163931.jpg?width=302"]

            ],

            "Специални предложение": [
                ["", "2br-pileshki-dyuner-classic-i-2br-pileshki-burger-classic", "2бр Пилешки дюнер Classic и 2бр Пилешки Бургер Classic", "9,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/497615.jpg?width=302"],
["", "3br-pileshki-dyuner-classic", "3бр Пилешки дюнер Classic", "8,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/497617.jpg?width=302"],
["", "4br-veggie-dyuner-classic", "4бр Veggie дюнер Classic", "7,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/497618.jpg?width=302"],
["", "tava-picza-3br-butcheta-3br-krilcza-sos-aladin-200gr-i-ketchup-150gr", "Тава пица, 3бр Бутчета, 3бр Крилца, Сос Аладин 200гр и Кетчуп 150гр", "14,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/497625.jpg?width=302"],
["", "tava-picza-12br-falafel-4br-ajran-200ml-sos-aladin-200gr-i-ketchup-150gr", "Тава пица, 12бр Фалафел, 4бр Айран 200мл, Сос Аладин 200гр и Кетчуп 150гр", "14,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/497626.jpg?width=302"],
["", "picza--2br-ajran-500ml-sos-aladin-480gr", "Пица + 2бр Айран 500мл, сос Аладин 480гр", "10,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/497635.jpg?width=302"],
["", "10br-khrupkavi-krila-i-sos-aladin-200gr", "10бр Хрупкави крила и сос Аладин 200гр", "7,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/497621.jpg?width=302"],
["", "2br-hard-burger-i-2br-teleshki-burger", "2бр Hard Бургер и 2бр Телешки Бургер", "11,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/497611.jpg?width=302"]

            ],

            "Менюта": [
                ["", "roller-menyu", "ROLLER меню", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/615071.jpg?width=302"],
["", "dyuner-light-menyu", "Дюнер Light меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/615072.jpg?width=302"],
["", "bonfilencza-menyu", "Бонфиленца меню", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/615075.jpg?width=302"],
["", "file-menyu", "Филе меню", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/615076.jpg?width=302"],
["", "hard-burger-menyu", "Hard бургер меню", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/615073.jpg?width=302"]

            ],

            "dunner": [
                ["", "abox", "A!Box", "3,50", "390", "https://images.deliveryhero.io/image/fd-bg/Products/497537.jpg?width=302"],
["", "roller", "Roller", "2,80", "260", "https://images.deliveryhero.io/image/fd-bg/Products/497538.jpg?width=302"],
["", "pileshki-dyuner-grand", "Пилешки дюнер Grand", "4,20", "490", "https://images.deliveryhero.io/image/fd-bg/Products/497534.jpg?width=302"],
["", "pileshki-dyuner-classic", "Пилешки дюнер Classic", "2,80", "370", "https://images.deliveryhero.io/image/fd-bg/Products/497533.jpg?width=302"],
["", "pileshki-dyuner-slim", "Пилешки дюнер Slim", "2,10", "300", "https://images.deliveryhero.io/image/fd-bg/Products/497532.jpg?width=302"],
["", "dyuner-light-classic", "Дюнер Light Classic", "2,80", "380", "https://images.deliveryhero.io/image/fd-bg/Products/497535.jpg?width=302"],
["", "porcziya-pileshki-dyuner-s-kartofi", "Порция пилешки дюнер с картофи", "4,20", "540", "https://images.deliveryhero.io/image/fd-bg/Products/497536.jpg?width=302"],
["", "porcziya-pileshki-dyuner-s-oriz", "Порция Пилешки Дюнер с Ориз", "4,20", "540", "https://images.deliveryhero.io/image/fd-bg/Products/634532.jpg?width=302"],
["", "doplnitelno-pileshko-meso-ot-dyuner", "Допълнително пилешко месо от дюнер", "0,70", "50", "https://images.deliveryhero.io/image/fd-bg/Products/497542.jpg?width=302"]

            ],

            "Бургер": [
                ["", "teleshki-dyuner-v-pitka", "Телешки дюнер в питка", "3,50", "390", "https://images.deliveryhero.io/image/fd-bg/Products/1103669.jpg?width=302"],
["", "hard-burger", "Hard Бургер", "3,50", "340", "https://images.deliveryhero.io/image/fd-bg/Products/497544.jpg?width=302"],
["", "pileshki-burger-classic", "Пилешки бургер Classic", "2,10", "420", "https://images.deliveryhero.io/image/fd-bg/Products/497546.jpg?width=302"],
["", "pileshki-burger-double", "Пилешки бургер Double", "2,80", "540", "https://images.deliveryhero.io/image/fd-bg/Products/497547.jpg?width=302"],
["", "dyuner-v-pitka", "Дюнер в питка", "2,80", "370", "https://images.deliveryhero.io/image/fd-bg/Products/497548.jpg?width=302"],
["", "veggie-burger", "Veggie Бургер", "2,10", "390", "https://images.deliveryhero.io/image/fd-bg/Products/497549.jpg?width=302"],
["", "doplnitelno-yajcze", "Допълнително яйце", "0,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/497550.jpg?width=302"],
["", "doplnitelno-kashkaval", "Допълнително кашкавал", "0,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/497551.jpg?width=302"],
["", "2-kh-pop-burger", "2 х Поп Бургер", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/524381.jpg?width=302"],
["", "teleshki-burger", "Телешки бургер", "3,50", "400", "https://images.deliveryhero.io/image/fd-bg/Products/497545.jpg?width=302"]

            ],

            "pizza": [
                ["", "picza-riviera-50sm---8", "Пица Ривиера (50см - 8", "15,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/1181358.jpg?width=302"],
["", "picza-asorti-50sm---8", "Пица Асорти (50см - 8", "12,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/497563.jpg?width=302"],
["", "picza-vlcha-50sm---8", "Пица Вълча (50см - 8", "9,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/497562.jpg?width=302"],
["", "picza-bbq-50sm---8", "Пица BBQ (50см - 8", "9,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/550429.jpg?width=302"],
["", "picza-khot-dog-50sm---8", "Пица Хот-Дог (50см - 8", "9,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/785414.jpg?width=302"],
["", "picza-margarita---chervena-50sm---8", "Пица Маргарита - червена (50см - 8", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497552.jpg?width=302"],
["", "picza-margarita---byala-50sm---8", "Пица Маргарита - бяла (50см - 8", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497553.jpg?width=302"],
["", "picza-peperoni-50sm---8", "Пица Пеперони (50см - 8", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497555.jpg?width=302"],
["", "picza-gorska-50sm---8", "Пица Горска (50см - 8", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497556.jpg?width=302"],
["", "picza-sirena-50sm---8", "Пица Сирена (50см - 8", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497557.jpg?width=302"],
["", "picza-karbonara-50sm---8", "Пица Карбонара (50см - 8", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497558.jpg?width=302"],
["", "picza-polo-50sm---8", "Пица Поло (50см - 8", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497559.jpg?width=302"],
["", "picza-bianka-50sm---8", "Пица Бианка (50см - 8", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497560.jpg?width=302"],
["", "picza-kaprichoza-50sm---8", "Пица Капричоза (50см - 8", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497561.jpg?width=302"],
["", "picza-pile-50sm---8", "Пица Пиле (50см - 8", "9,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497554.jpg?width=302"]

            ],

            "chicken": [
                ["", "porcziya-file-s-oriz", "Порция филе с ориз", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/497564.jpg?width=302"],
["", "file", "Филе", "2,80", "140", "https://images.deliveryhero.io/image/fd-bg/Products/497566.jpg?width=302"],
["", "2br-khrupkavi-pileshki-butcheta-s-kartofki", "2бр хрупкави пилешки бутчета с картофки", "2,80", "140", "https://images.deliveryhero.io/image/fd-bg/Products/497570.jpg?width=302"],
["", "2br-khrupkavi-pileshki-butcheta-s-oriz", "2бр хрупкави пилешки бутчета с ориз", "2,80", "250", "https://images.deliveryhero.io/image/fd-bg/Products/497571.jpg?width=302"],
["", "khrupkavo-butche", "Хрупкаво бутче", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/497568.jpg?width=302"],
["", "3br-khrupkavi-pileshki-krila-s-kartofki", "3бр хрупкави пилешки крила с картофки", "2,80", "140", "https://images.deliveryhero.io/image/fd-bg/Products/497572.jpg?width=302"],
["", "3br-khrupkavi-pileshki-krila-s-oriz", "3бр хрупкави пилешки крила с ориз", "2,80", "250", "https://images.deliveryhero.io/image/fd-bg/Products/497573.jpg?width=302"],
["", "khrupkavo-krilcze", "Хрупкаво крилце", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/497569.jpg?width=302"],
["", "bonfilencza", "Бонфиленца", "2,10", "160", "https://images.deliveryhero.io/image/fd-bg/Products/497567.jpg?width=302"],
["", "6br-pileshki-khapki--sos-po-izbor", "6бр пилешки хапки + сос по избор", "1,40", "120", "https://images.deliveryhero.io/image/fd-bg/Products/1181073.jpg?width=302"],
["", "12br-pileshki-khapki--2br-sos-po-izbor", "12бр пилешки хапки + 2бр сос по избор", "2,10", "240", "https://images.deliveryhero.io/image/fd-bg/Products/1181074.jpg?width=302"]

            ],

            "Фалафел": [
                ["", "porcziya-falafel", "Порция Фалафел", "2,80", "470", "https://images.deliveryhero.io/image/fd-bg/Products/497580.jpg?width=302"],
["", "veggie-dyuner-classic", "Veggie дюнер Classic", "2,10", "430", "https://images.deliveryhero.io/image/fd-bg/Products/497581.jpg?width=302"],
["", "veggie-dyuner-mini", "Veggie дюнер Mini", "1,40", "240", "https://images.deliveryhero.io/image/fd-bg/Products/497582.jpg?width=302"],
["", "veggie-khumus", "Veggie Хумус", "2,10", "390", "https://images.deliveryhero.io/image/fd-bg/Products/537673.jpg?width=302"],
["", "20br-falafel-ss-sos-aladin", "20бр Фалафел със сос Аладин", "5,60", "200", "https://images.deliveryhero.io/image/fd-bg/Products/497583.jpg?width=302"],
["", "10br-falafel-ss-sos-aladin", "10бр Фалафел със сос Аладин", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/497584.jpg?width=302"],
["", "5br-falafel", "5бр Фалафел", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/497585.jpg?width=302"],
["", "1br-falafel", "1бр Фалафел", "0,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/497586.jpg?width=302"]

            ],

            "salads": [
                ["", "salata-pile", "Салата Пиле", "2,10", "300", "https://images.deliveryhero.io/image/fd-bg/Products/526500.jpg?width=302"],
["", "amerikanska-salata", "Американска салата", "1,40", "150", "https://images.deliveryhero.io/image/fd-bg/Products/497587.jpg?width=302"]

            ],

            "garnish": [
                ["", "kartofi-classic", "Картофи Classic", "1,40", "220", "https://images.deliveryhero.io/image/fd-bg/Products/497588.jpg?width=302"],
["", "kartofi-mini", "Картофи Mini", "0,70", "140", "https://images.deliveryhero.io/image/fd-bg/Products/497589.jpg?width=302"],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/497590.jpg?width=302"],
["", "paket-arabska-pitka-classic", "Пакет Арабска питка Classic", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/497592.jpg?width=302"],
["", "arabska-pitka-classic", "Арабска питка Classic", "0,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/497591.jpg?width=302"]

            ],

            "sauces": [
                ["", "sos-aladin", "Сос Аладин", "2,80", "480", "https://images.deliveryhero.io/image/fd-bg/Products/537679.jpg?width=302"],
["", "sos-aladin", "Сос Аладин", "0,70", "200", "https://images.deliveryhero.io/image/fd-bg/Products/497593.jpg?width=302"],
["", "sos-ketchup", "Сос Кетчуп", "0,70", "150", "https://images.deliveryhero.io/image/fd-bg/Products/497594.jpg?width=302"],
["", "sos-majoneza", "Сос Майонеза", "0,00", "50", "https://images.deliveryhero.io/image/fd-bg/Products/497595.jpg?width=302"],
["", "sos-barbekyu", "Сос Барбекю", "0,00", "50", "https://images.deliveryhero.io/image/fd-bg/Products/575486.jpg?width=302"],
["", "sos-sladko-kisel", "Сос Сладко-Кисел", "0,00", "50", "https://images.deliveryhero.io/image/fd-bg/Products/497597.jpg?width=302"],
["", "sos-pikanten", "Сос Пикантен", "0,00", "50", "https://images.deliveryhero.io/image/fd-bg/Products/497596.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajran", "Айран", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/508671.jpg?width=302"],
["", "ajran", "Айран", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/497599.jpg?width=302"],
["", "mineralna-voda", "Минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/497603.jpg?width=302"],
["", "mineralna-voda", "Минерална вода", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/508678.jpg?width=302"],
["", "studen-chaj", "Студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/497604.jpg?width=302"],
["", "energijna-napitka-monstr", "Енергийна напитка Монстър", "1,40", "355", "https://images.deliveryhero.io/image/fd-bg/Products/547608.jpg?width=302"]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/657723.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/687288.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/497600.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/497601.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/497602.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/592817.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/592819.jpg?width=302"]

            ],

            "Детско меню": [
                ["", "super-menyu-dyuner", "Супер меню дюнер", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/497608.jpg?width=302"],
["", "super-menyu-bonfilencza", "Супер меню бонфиленца", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/497607.jpg?width=302"]

            ],

            "desserts": [
                ["", "mfin-yablki-karamel-i-kanela", "Мъфин Ябълки, карамел и канела", "2,10", "112", "https://images.deliveryhero.io/image/fd-bg/Products/858315.jpg?width=302"]

            ]
        }', 
        'slug' => 'aladin-foods',
        'business_name' => 'Aladin foods (Захарна фабрика)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sofia',
        'region' => 'Sofia',
        'postal_code' => '1000',
        'address' => 'бул. Сливница 58',
        'address_additional' => '',
        'coords_x' => '42.71054613',
        'coords_y' => '23.29190034',
        'phone' => '+35970044744; 359882797689',
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
            
            "Дневно меню": [
                ["", "salata-domati-s-katk", "Салата домати с катък", "1,40", "300", ""],
["", "salata-ajsberg-s-krastaviczi-i-domati", "Салата айсберг с краставици и домати", "1,40", "200", ""],
["", "shopska-salata", "Шопска салата", "0,70", "150", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "300", ""],
["", "tarator", "Таратор", "0,70", "300", ""],
["", "file-ot-somga-na-skara-s-garnitura", "Филе от сьомга на скара с гарнитура", "9,10", "400", ""],
["", "pileshko-file-s-rigan-i-garnitura", "Пилешко филе  с риган и гарнитура", "3,50", "300", ""],
["", "przhena-sardela-s-garnitura", "Пържена сардела с гарнитура", "3,50", "300", ""],
["", "skumriya-na-skara-s-garnitura", "Скумрия на скара с гарнитура", "3,50", "350", ""],
["", "svinsko-vinen-kebap", "Свинско винен кебап", "2,80", "300", ""],
["", "pile-vladajski-kebap", "Пиле владайски кебап", "2,80", "300", ""],
["", "pasticzio-ili-musaka-ot-makaroni-s-kajma", "Пастицио или мусака от макарони с кайма", "2,80", "350", ""],
["", "picza-margarita", "Пица Маргарита", "2,80", "300", ""],
["", "brkani-yajcza-ss-sirene", "Бъркани яйца със сирене", "2,10", "250", ""],
["", "domati-s-oriz", "Домати с ориз", "1,40", "300", ""],
["", "grczka-chesnova-pitka", "Гръцка чеснова питка", "0,00", "90", ""],
["", "plnozrnesta-pitka", "Пълнозърнеста питка", "0,00", "100", ""],
["", "marinovani-lyuti-chushleta", "Мариновани люти чушлета", "0,00", "50", ""],
["", "pileshki-shniczel", "Пилешки шницел", "3,50", "250", ""],
["", "shniczel-pane-s-garnitura", "Шницел пане с гарнитура", "3,50", "350", ""],
["", "omlet", "Омлет", "2,10", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "300", ""],
["", "zadushen-oriz-ss-zelenchuczi", "Задушен ориз със зеленчуци", "2,10", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "250", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "200", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "pileshka-przhola", "Пилешкa пържола", "2,80", "200", ""],
["", "tatarsko-kyufte-s-garnitura", "Татарско кюфте с гарнитура", "2,80", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "kartofi-sote", "Картофи соте", "0,70", "100", ""],
["", "zele-s-morkovi", "Зеле с моркови", "0,70", "150", ""],
["", "lyutenicza-s-luk", "Лютеница с лук", "0,70", "100", ""],
["", "domashen-nuga-sladoled", "Домашен нуга сладолед", "1,40", "120", ""],
["", "krem-panakota-s-borovinkova-zalivka", "Крем панакота с боровинкова заливка", "1,40", "100", ""]

            ],

            "salads": [
                ["", "salata-tifani---za-czeniteli", "Салата Тифани - за ценители", "5,60", "500", ""],
["", "salata-asorti", "Салата Асорти", "3,50", "450", ""],
["", "grczka-salata-atika", "Гръцка салата Атика", "3,50", "400", ""],
["", "salata-bizhu", "Салата Бижу", "2,80", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "350", ""],
["", "salata-domati-s-riba-ton", "Салата Домати с риба тон", "3,50", "350", ""],
["", "frenska-salata-merilen", "Френска салата Мерилен", "3,50", "400", ""],
["", "salata-czezar", "Салата Цезар", "3,50", "400", ""],
["", "pstra-salata", "Пъстра салата", "2,80", "300", ""],
["", "salata-ot-domati-s-tri-vida-sirena", "Салата от домати с три вида сирена", "3,50", "250", ""],
["", "domashna-salta", "Домашна салта", "2,80", "400", ""],
["", "mandradzhijska-salata", "Мандраджийска салата", "2,80", "250", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "selska-salata", "Селска салата", "2,80", "350", ""],
["", "mlechna-salata-snezhanka", "Млечна салата Снежанка", "2,80", "250", ""],
["", "salata-morkovi-s-limon-i-zekhtin", "Салата моркови с лимон и зехтин", "2,80", "300", ""]

            ],

            "Студени ордьоври": [
                ["", "vip-plato", "VIP плато", "11,90", "400", ""],
["", "plato-ot-delikatesni-sirena", "Плато от деликатесни сирена", "10,50", "300", ""],
["", "marinovan-oktopod", "Маринован октопод", "9,10", "100", ""],
["", "drob-ot-treska-podnesen-vrkhu-sukhari-s-limon-i-kopr", "Дроб от треска, поднесен върху сухари с лимон и копър", "7,00", "150", ""]

            ],

            "Студени мезета": [
                ["", "sirene-chedr", "Сирене Чедър", "2,10", "50", ""],
["", "sirene-bri", "Сирене Бри", "2,10", "50", ""],
["", "sirene-kamamber", "Сирене Камамбер", "2,10", "50", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""],
["", "sirene-natyur", "Сирене натюр", "0,70", "50", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "0,70", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""]

            ],

            "Топли предястия": [
                ["", "pileshki-filencza-ss-susam", "Пилешки филенца със сусам", "3,50", "250", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "3,50", "250", ""],
["", "pileshki-filencza-pane", "Пилешки филенца пане", "3,50", "250", ""],
["", "pileshki-drobcheta-przheni", "Пилешки дробчета пържени", "2,10", "250", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "2,10", "250", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "2,10", "250", ""],
["", "zadushen-gshi-drob-s-yablki-brendi-med-i-muskat", "Задушен гъши дроб с ябълки, бренди, мед и мускат", "9,80", "200", ""],
["", "zadusheni-teleshki-dzholancheta-s-chesn", "Задушени телешки джоланчета с чесън", "6,30", "300", ""],
["", "domashno-prigotveni-kalmari-pane-ss-speczialen-sos", "Домашно приготвени калмари пане със специален сос", "7,00", "200", ""],
["", "ragu-ot-manatarki-v-gyuveche", "Рагу от манатарки в гювече", "7,70", "200", ""],
["", "sirene-v-pergament-ss-susheni-domati-i-bosilikum-pesto", "Сирене в пергамент със сушени домати и босиликум песто", "2,80", "200", ""],
["", "kartofki-s-bekon-i-buket-ot-sirena", "Картофки с бекон и букет от сирена", "3,50", "350", ""],
["", "oktopod-i-skaridi-sotiran-s-chesn", "Октопод и скариди сотиран с чесън", "10,50", "200", ""],
["", "zadushen-oktopod-s-maslo-byalo-vino-i-sredizemnomorski-podpravki", "Задушен октопод с масло, бяло вино и средиземноморски подправки", "10,50", "150", ""],
["", "sotirani-tigrovi-skaridi", "Сотирани тигрови скариди", "8,40", "200", ""]

            ],

            "Ястия от птиче месо": [
                ["", "pile-tifani", "Пиле Тифани", "10,50", "400", ""],
["", "pileshko-file-podneseno-vrkhu-kartofeno-pyure-s-chedr-pusheno-sirene-i-smetanov-sos-podluchen-s-praz-garnirano-s-khrupkav-bekon", "Пилешко филе, поднесено върху картофено пюре с чедър, пушено сирене и сметанов сос, подлучен с праз, гарнирано с хрупкав бекон", "10,50", "400", ""],
["", "pileshko-file-s-plnezh-ot-sino-sirene-i-susheni-plodove-oblecheno-v-bekon-servirano-vrkhu-kartofeno-pyure", "Пилешко филе с пълнеж от синьо сирене и сушени плодове, облечено в бекон, сервирано върху картофено пюре", "9,80", "400", ""],
["", "krekhki-pileshki-filencza-ss-sos-ot-shampansko-smetana-gbi-i-kashkaval", "Крехки пилешки филенца със сос от шампанско, сметана, гъби и кашкавал", "7,70", "350", ""],
["", "pile-po-prazhki", "Пиле по Пражки", "8,40", "300", ""],
["", "pile-shato-valon", "Пиле Шато Валон", "8,40", "400", ""],
["", "pileshki-filencza-s-brokoli-i-malki-kartofi-podneseno-ss-sos-ot-sino-sirene-i-smetana-400gr", "Пилешки филенца с броколи и малки картофи, поднесено със сос от синьо сирене и сметана (400гр)", "9,10", "", ""],
["", "pileshko-file-na-tigan-podneseno-ss-sotirani-presni-gbi-i-kartofi", "Пилешко филе на тиган, поднесено със сотирани пресни гъби и картофи", "8,40", "350", ""],
["", "rizoto-ot-pile-ss-zelenchuczi", "Ризото от пиле със зеленчуци", "5,60", "400", ""]

            ],

            "Ястия от свинско месо": [
                ["", "speczialitet-tifani", "Специалитет Тифани", "12,60", "450", ""],
["", "svinski-medaloni-vrkhu-pyure-ovkuseno-ss-zaprzhen-luk-i-bekon-podneseni-s-brendi-sos", "Свински медальони върху пюре, овкусено със запържен лук и бекон, поднесени с бренди сос", "10,50", "450", ""],
["", "svinski-vratni-przholki-ss-sos-ot-gbki-plnozrnesta-gorchicza-byalo-vino-i-smetana", "Свински вратни пържолки със сос от гъбки, пълнозърнеста горчица, бяло вино и сметана", "9,10", "350", ""],
["", "svinski-filencza-s-khrupkava-aromatna-korichka-podneseni-s-rozmarinovi-kartofki", "Свински филенца с хрупкава ароматна коричка, поднесени с розмаринови картофки", "9,10", "450", ""],
["", "svinski-vratni-przholki-polyati-s-bilkovo-maslo", "Свински вратни пържолки поляти с билково масло", "8,40", "300", ""],
["", "svinsko-bonfile-ss-sos-ot-salvia-i-portokal", "Свинско бонфиле със сос от салвиа и портокал", "9,80", "300", ""],
["", "svinski-mastrstek-s-pikanten-sos", "Свински мастърстек с пикантен сос", "9,80", "300", ""]

            ],

            "Ястия от телешко месо": [
                ["", "teleshko-file-glazirano-s-dzhak-daniels-sos-servirano-ss-zadusheni-zelenchuczi", "Телешко филе, глазирано с Джак Даниелс сос, сервирано със задушени зеленчуци", "17,50", "350", ""],
["", "teleshki-stek-podnesen-s-pejpr-korn-sos-pecheni-gbi-i-domat", "Телешки стек, поднесен с пейпър корн сос, печени гъби и домат", "16,10", "300", ""],
["", "pikantni-teleshki-zhulieni-s-brokoli-i-parmezan", "Пикантни телешки жулиени с броколи и пармезан", "16,10", "350", ""],
["", "teleshki-biftek-s-manatarki", "Телешки бифтек с манатарки", "17,50", "350", ""],
["", "teleshko-file-vrkhu-leglo-ot-zelenchuczi-i-smetana", "Телешко филе върху легло от зеленчуци и сметана", "17,50", "350", ""],
["", "teleshki-ramstek-s-luk", "Телешки рамстек с лук", "16,10", "350", ""]

            ],

            "Постни ястия": [
                ["", "zadusheni-kartofki-ss-spanak-natrosheno-sirene-i-smetana", "Задушени картофки със спанак, натрошено сирене и сметана", "3,50", "400", ""],
["", "topirani-kartofki-s-aromatni-sirena-i-gbi", "Топирани картофки с ароматни сирена и гъби", "4,20", "400", ""],
["", "pecheni-kartofki-topirani-s-kashkaval", "Печени картофки топирани с кашкавал", "2,80", "350", ""],
["", "przheni-aromatni-kartofki", "Пържени ароматни картофки", "2,80", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "250", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "3,50", "400", ""],
["", "rizoto-s-pechurki-i-spanak", "Ризото с печурки и спанак", "3,50", "400", ""],
["", "kartofeno-pyure-s-chetiri-vida-sirena", "Картофено пюре с четири вида сирена", "3,50", "300", ""],
["", "kartofeno-pyure-s-gben-sos", "Картофено пюре с гъбен сос", "2,80", "300", ""]

            ],

            "grill": [
                ["", "kombiniran-shashlik-ss-zelenchuczi", "Комбиниран шашлик със зеленчуци", "9,80", "300", ""],
["", "svinski-shashlik-ss-zelenchuczi", "Свински шашлик със зеленчуци", "9,80", "300", ""],
["", "pileshki-shashlik-ss-zelenchuczi", "Пилешки шашлик със зеленчуци", "9,80", "300", ""],
["", "svinska-meshana-skara", "Свинска мешана скара", "9,10", "500", ""],
["", "svinsko-file-na-skara", "Свинско филе на скара", "7,00", "250", ""],
["", "teleshko-file", "Телешко филе", "13,30", "250", ""],
["", "pileshko-file", "Пилешко филе", "6,30", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""]

            ],

            "Ястия от риба": [
                ["", "plnen-lavrak-v-pergament", "Пълнен лаврак в пергамент", "15,40", "450", ""],
["", "zapechena-pstrva-podnesena-s-bademov-sos", "Запечена пъстърва, поднесена с бадемов сос", "9,80", "400", ""],
["", "kotlet-ot-somga-vrkhu-leglo-ot-natrosheni-kartofi-s-luk-i-limonov-kholandski-sos", "Котлет от сьомга, върху легло от натрошени картофи с лук и лимонов холандски сос", "13,30", "350", ""],
["", "czipura-na-skara-ss-sos-vera-kruz", "Ципура на скара със сос Вера Круз", "13,30", "450", ""],
["", "pecheno-file-ot-skumriya-podneseno-s-aromatni-kartofi-sote", "Печено филе от скумрия, поднесено с ароматни картофи соте", "6,30", "450", ""],
["", "skumriya-na-skara-s-pyure-ot-morkovi", "Скумрия на скара с пюре от моркови", "6,30", "350", ""],
["", "filencza-ot-byala-riba-pane-s-bosilikum-pesto", "Филенца от бяла риба пане с босиликум песто", "8,40", "350", ""],
["", "pstrva", "Пъстърва", "7,70", "250", ""]

            ],

            "garnish": [
                ["", "vip-garnitura", "VIP гарнитура", "4,20", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "zadusheni-brokoli-s-maslo-i-parmezan", "Задушени броколи с масло и пармезан", "3,50", "150", ""],
["", "zadusheni-zelenchuczi-s-maslo", "Задушени зеленчуци с масло", "2,80", "150", ""],
["", "kartofi-sote-s-maslo-i-kopr", "Картофи соте с масло и копър", "2,10", "250", ""],
["", "sladka-czarevicza-s-maslo-i-kopr", "Сладка царевица с масло и копър", "2,10", "150", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,80", "250", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "2,10", "250", ""],
["", "kartofeno-pyure", "Картофено пюре", "2,10", "200", ""],
["", "zekhtin", "Зехтин", "0,00", "50", ""],
["", "balsamov-oczet", "Балсамов оцет", "0,00", "50", ""]

            ],

            "Хлебчета": [
                ["", "prlenka", "Пърленка", "1,40", "150", ""],
["", "prepechena-pitka", "Препечена питка", "0,00", "120", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "0,00", "120", ""],
["", "pitka", "Питка", "0,00", "120", ""]

            ],

            "desserts": [
                ["", "plodova-salata-tifani", "Плодова салата Тифани", "2,80", "300", ""],
["", "palachinka", "Палачинка", "1,40", "200", ""]

            ],

            "drinks": [
                ["", "mineralna-voda-perie", "Минерална вода Перие", "2,10", "", ""],
["", "mineralna-voda-devin", "Минерална вода Девин", "0,70", "", ""],
["", "gazirana-mineralna-voda-devin", "Газирана минерална вода Девин", "1,40", "500", ""],
["", "energijna-napitka-red-bull", "Енергийна напитка Red Bull", "3,50", "250", ""],
["", "zagorka", "Загорка", "1,40", "500", ""],
["", "zagorka-retro", "Загорка Ретро", "1,40", "500", ""],
["", "zagorka-maxx", "Загорка Maxx", "1,40", "330", ""],
["", "ariana", "Ариана", "1,40", "500", ""],
["", "ariana-radler", "Ариана Радлер", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "khajneken", "Хайнекен", "1,40", "500", ""],
["", "stolichno-bock", "Столично Bock", "1,40", "400", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""],
["", "staropramen", "Старопрамен", "1,40", "500", ""],
["", "kamenicza", "Каменица", "1,40", "500", ""],
["", "shumensko", "Шуменско", "1,40", "500", ""],
["", "kradeczt-na-yablki", "Крадецът на ябълки", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'restorant-tifani',
        'business_name' => 'Ресторант Тифани',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Цар Симеон Велики 1',
        'address_additional' => '',
        'coords_x' => '42.42006962',
        'coords_y' => '25.60911406',
        'phone' => '+359878636363',
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
            
            "Бурито": [
                ["", "burito", "Бурито", "2,80", "", ""],
["", "vegetariansko-burito", "Вегетарианско бурито", "2,80", "", ""],
["", "burito-bol", "Бурито бол", "4,20", "", ""],
["", "plato-burito", "Плато бурито", "6,30", "700", ""],
["", "promocziya---sredno-burito--koka-kola", "Промоция - Средно бурито + Кока Кола", "3,50", "500", ""]

            ],

            "Кесадия": [
                ["", "kesadiya", "Кесадия", "2,80", "", ""],
["", "vegetarianska-kesadiya", "Вегетарианска кесадия", "4,20", "", ""],
["", "promocziya---malka-kesadiya--napitka", "Промоция - Малка кесадия + напитка", "3,50", "", ""]

            ],

            "Бургер": [
                ["", "meksikanski-burger", "Мексикански бургер", "2,80", "", ""],
["", "promocziya---meksikanski-burger--koka-kola", "Промоция - Мексикански бургер + Кока Кола", "3,50", "500", ""]

            ],

            "Бързо хранене и салати": [
                ["", "takos", "Такос", "1,40", "", ""],
["", "chips-i-salsa", "Чипс и салса", "1,40", "", ""],
["", "nachos", "Начос", "2,10", "", ""],
["", "teks-meks-nachos", "Текс мекс начос", "2,10", "", ""],
["", "teks-meks-nachos-s-pileshko-meso", "Текс мекс начос с пилешко месо", "2,80", "", ""],
["", "plato-fakhitas", "Плато Фахитас", "5,60", "", ""],
["", "gorditas", "Гордитас", "0,70", "", ""],
["", "salata-akapulko", "Салата Акапулко", "3,50", "300", ""],
["", "salata-piko", "Салата Пико", "3,50", "", ""]

            ],

            "additives": [
                ["", "guakamole", "Гуакамоле", "1,40", "100", ""],
["", "svezha-salsa", "Свежа салса", "1,40", "250", ""],
["", "salsa-meksikana", "Салса мексикана", "0,70", "80", ""],
["", "smetanov-sos", "Сметанов сос", "0,70", "80", ""],
["", "ekstra-meso", "Екстра месо", "1,40", "160", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/770461.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/770462.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/770463.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/770464.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/770467.jpg?width=302"]

            ],

            "drinks": [
                ["", "monstr", "Монстър", "2,10", "500", ""],
["", "ajryan", "Айрян", "0,70", "330", ""],
["", "kamenicza", "Каменица", "1,40", "500", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""],
["", "beks", "Бекс", "1,40", "500", ""],
["", "zagorka", "Загорка", "1,40", "", ""],
["", "ariana", "Ариана", "1,40", "500", ""],
["", "amstel", "Амстел", "2,10", "500", ""],
["", "heineken", "Heineken", "2,10", "500", ""]

            ]
        }', 
        'slug' => 'fernando-s-mall-galeria',
        'business_name' => 'Fernando&#039;s (Mall Galeria)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Хан Аспарух 30',
        'address_additional' => '',
        'coords_x' => '42.43800424',
        'coords_y' => '25.63233886',
        'phone' => '+359878516978',
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
                ["", "salata-unikato", "Салата Уникато", "4,20", "400", ""],
["", "salata-panczanela", "Салата Панцанела", "4,20", "400", ""],
["", "aziatska-salata", "Азиатска салата", "5,60", "400", ""],
["", "zelena-salata-s-kedrovi-yadki", "Зелена салата с кедрови ядки", "4,90", "400", ""],
["", "zelena-salata-s-pastrma-ot-somga", "Зелена салата с пастърма от сьомга", "5,60", "400", ""],
["", "salata-kolore", "Салата Колоре", "4,90", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "400", ""],
["", "salata-verdura", "Салата Вердура", "4,20", "300", ""],
["", "salata-italiya", "Салата Италия", "4,20", "400", ""],
["", "salata-vitamina", "Салата Витамина", "4,20", "400", ""],
["", "lyatna-salata", "Лятна салата", "4,20", "400", ""],
["", "salata-esen", "Салата Есен", "4,20", "400", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "250", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "500", ""],
["", "salata-ot-pecheni-chushki-s-katk", "Салата от печени чушки с катък", "4,20", "400", ""],
["", "salata-bio", "Салата Био", "3,50", "400", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "350", ""],
["", "domati-s-riba-ton-i-moczarela", "Домати с риба тон и моцарела", "4,90", "400", ""],
["", "salata-enerdzhi", "Салата Енерджи", "4,90", "400", ""],
["", "salata-s-avokado-i-limecz", "Салата с авокадо и лимец", "4,90", "350", ""]

            ],

            "Дърпани пици": [
                ["", "kapreze", "Капрезе", "7,00", "", ""],
["", "vichencza", "Виченца", "7,00", "", ""],
["", "fruti-di-bosko", "Фрути ди Боско", "7,00", "", ""],
["", "tropikana", "Тропикана", "7,00", "", ""],
["", "vikos", "Викос", "7,70", "", ""],
["", "san-vito", "Сан Вито", "7,00", "", ""],
["", "napoli", "Наполи", "7,70", "", ""],
["", "bolonya", "Болоня", "7,00", "", ""],
["", "milano", "Милано", "8,40", "", ""],
["", "rivoli", "Риволи", "7,00", "", ""],
["", "felini", "Фелини", "8,40", "", ""],
["", "palermo", "Палермо", "7,00", "", ""]

            ],

            "Класическа пица на пещ": [
                ["", "rustika", "Рустика", "6,30", "", ""],
["", "salsiche", "Салсиче", "5,60", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "peperoni", "Пеперони", "6,30", "", ""],
["", "di-karne", "Ди Карне", "5,60", "", ""],
["", "salerno", "Салерно", "6,30", "", ""],
["", "verona", "Верона", "6,30", "", ""],
["", "bonifacho", "Бонифачо", "6,30", "", ""],
["", "selena", "Селена", "8,40", "", ""],
["", "proshuto-krudo", "Прошуто крудо", "7,70", "", ""],
["", "unikato", "Уникато", "5,60", "", ""],
["", "toskana", "Тоскана", "5,60", "", ""],
["", "marchela", "Марчела", "6,30", "", ""],
["", "francheska", "Франческа", "6,30", "", ""],
["", "detsko-menyu", "Детско меню", "7,00", "", ""]

            ],

            "Плата и студени предястия": [
                ["", "plato-selekcziya-sirena", "Плато селекция сирена", "13,30", "300", ""],
["", "plato-sukhi-mezeta", "Плато сухи мезета", "13,30", "350", ""],
["", "plato-selekcziya-blgarski-sirena", "Плато селекция български сирена", "11,90", "300", ""],
["", "plato-razyadki", "Плато разядки", "8,40", "250", ""],
["", "pastrma-ot-somga", "Пастърма от сьомга", "9,80", "150", ""],
["", "rulcza-ot-tikvichki-s-pastrma-ot-somga", "Рулца от тиквички с пастърма от сьомга", "9,10", "200", ""],
["", "guakamole-unikato", "Гуакамоле Уникато", "6,30", "350", ""]

            ],

            "Топли предястия": [
                ["", "zapechen-kamember", "Запечен Камембер", "5,60", "200", ""],
["", "skaridi-v-kartofena-korichka", "Скариди в картофена коричка", "7,00", "250", ""],
["", "pile-pekorino", "Пиле Пекорино", "7,70", "300", ""],
["", "bivolsko-sirene", "Биволско сирене", "6,30", "230", ""],
["", "filo-skaridi", "Фило скариди", "9,10", "200", ""],
["", "plneni-pechurki", "Пълнени печурки", "6,30", "250", ""],
["", "kalmari", "Калмари", "9,10", "200", ""],
["", "sirencza-v-kornflejks-i-sladko-ot-kornflejks", "Сиренца в корнфлейкс и сладко от корнфлейкс", "7,00", "250", ""],
["", "koktejl-morski-dar", "Коктейл Морски дар", "9,80", "200", ""],
["", "gshi-drob", "Гъши дроб", "20,30", "200", ""],
["", "przheni-kalmari", "Пържени калмари", "9,10", "300", ""],
["", "tigrovi-skaridi", "Тигрови скариди", "12,60", "200", ""]

            ],

            "soups": [
                ["", "domatena-krem-supa", "Доматена крем супа", "2,80", "300", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "2,80", "300", ""],
["", "krem-supa-ot-somga", "Крем супа от сьомга", "4,20", "300", ""]

            ],

            "Хляб на пещ": [
                ["", "chesnovo-khlebche", "Чесново хлебче", "2,10", "", ""],
["", "khlebche-ss-susam", "Хлебче със сусам", "2,10", "", ""],
["", "khlebche-s-kashkaval", "Хлебче с кашкавал", "2,10", "", ""],
["", "khlebche-s-kashkaval-i-sirene", "Хлебче с кашкавал и сирене", "2,10", "", ""],
["", "khlebche-s-domashno-bosilekovo-pesto-i-chesn", "Хлебче с домашно босилеково песто и чесън", "2,10", "", ""],
["", "plnozrnesto-khlebche-s-fibri", "Пълнозърнесто хлебче с фибри", "2,10", "", ""],
["", "marinara-s-domaten-sos-i-chesn", "Маринара с доматен сос и чесън", "2,10", "", ""],
["", "khlebche-ss-sino-sirene-i-susheni-domati", "Хлебче със синьо сирене и сушени домати", "3,50", "", ""]

            ],

            "Прясна паста": [
                ["", "taliateli-neapolitana", "Талиатели Неаполитана", "6,30", "500", ""],
["", "taliateli-de-la-kroche", "Талиатели Де ла Кроче", "7,70", "450", ""],
["", "taliateli-nero", "Талиатели Неро", "9,80", "350", ""],
["", "taliateli-s-tikvichki", "Талиатели с тиквички", "7,00", "500", ""],
["", "taliateli-s-pileshko-file", "Талиатели с пилешко филе", "8,40", "500", ""],
["", "taliateli-s-teleshki-kyuftencza", "Талиатели с телешки кюфтенца", "9,80", "500", ""],
["", "taliateli-karbonara", "Талиатели Карбонара", "7,70", "500", ""],
["", "spageti-karbonara", "Спагети Карбонара", "7,70", "500", ""],
["", "taliateli-boloneze", "Талиатели Болонезе", "7,70", "500", ""],
["", "spageti-boloneze", "Спагети Болонезе", "7,70", "500", ""],
["", "taliateli-s-rukola-i-spanak", "Талиатели с рукола и спанак", "10,50", "450", ""],
["", "taliateli-formadzho", "Талиатели Формаджо", "8,40", "400", ""],
["", "taliateli-ss-salam-peperoni", "Талиатели със салам Пеперони", "9,10", "400", ""],
["", "tortelini-boloneze", "Тортелини Болонезе", "7,70", "450", ""],
["", "ravioli", "Равиоли", "7,70", "400", ""],
["", "foki", "Фьоки", "7,70", "400", ""],
["", "lunete-s-tryufel", "Лунете с трюфел", "10,50", "400", ""]

            ],

            "Безмесни ястия": [
                ["", "kyuftencza-ot-patladzhan", "Кюфтенца от патладжан", "6,30", "380", ""],
["", "ratatui-s-frensko-koze-sirene", "Рататуи с френско козе сирене", "6,30", "400", ""],
["", "kinoa", "Киноа", "5,60", "350", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "5,60", "400", ""],
["", "zadusheni-manatarki", "Задушени манатарки", "12,60", "300", ""],
["", "brokoli", "Броколи", "5,60", "400", ""],
["", "proletna-lazanya", "Пролетна лазаня", "5,60", "360", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "4,90", "500", ""],
["", "ogreten-s-tikvichki-i-kartofi-na-peshh", "Огретен с тиквички и картофи на пещ", "4,90", "400", ""],
["", "zelenchuczi-na-peshh", "Зеленчуци на пещ", "5,60", "450", ""]

            ],

            "Ястия от рибa": [
                ["", "czipura-na-plocha", "Ципура на плоча", "11,90", "400", ""],
["", "lavrak-na-plocha", "Лаврак на плоча", "12,60", "400", ""],
["", "kotlet-ot-somgova-pstrva", "Котлет от сьомгова пъстърва", "10,50", "350", ""],
["", "pstrva-na-peshh", "Пъстърва на пещ", "7,70", "400", ""],
["", "file-ot-czipura", "Филе от ципура", "16,80", "350", ""],
["", "file-ot-lavrak", "Филе от лаврак", "16,80", "350", ""],
["", "oktopod-na-plocha", "Октопод на плоча", "20,30", "320", ""],
["", "file-ot-somga-ss-sos-sirena-i-cheren-oriz", "Филе от сьомга със сос сирена и черен ориз", "14,00", "400", ""],
["", "file-ot-somga-s-asperzhi-i-sos-kholandez", "Филе от сьомга с аспержи и сос Холандез", "14,00", "350", ""],
["", "file-ot-riba-perka-na-plocha", "Филе от риба Перка на плоча", "14,70", "400", ""],
["", "file-ot-svetipetrova-riba", "Филе от Светипетрова риба", "16,80", "350", ""],
["", "pstrva-na-plocha", "Пъстърва на плоча", "6,30", "300", ""]

            ],

            "Ястия от птиче месо": [
                ["", "pile-unikato", "Пиле Уникато", "9,80", "350", ""],
["", "panirani-pileshki-filencza", "Панирани пилешки филенца", "7,70", "300", ""],
["", "pateshko-magre", "Патешко магре", "13,30", "400", ""],
["", "pileshki-khapki-ot-butche", "Пилешки хапки от бутче", "9,10", "500", ""],
["", "pileshko-file-na-peshh", "Пилешко филе на пещ", "9,10", "400", ""],
["", "pileshko-file", "Пилешко филе", "9,10", "250", ""],
["", "pileshko-file-ss-sirena-brokoli-i-smetanov-sos", "Пилешко филе със сирена, броколи и сметанов сос", "8,40", "400", ""],
["", "pileshki-khapki-ot-butche-s-bejbi-morkovi", "Пилешки хапки от бутче с бейби моркови", "9,10", "500", ""]

            ],

            "Ястия от телешко месо": [
                ["", "mlechen-teleshki-ribaj-stek-black-angus", "Млечен телешки рибай стек Black Angus", "27,30", "200", ""],
["", "teleshki-kscheta", "Телешки късчета", "14,00", "360", ""],
["", "oso-buko", "Осо Буко", "17,50", "330", ""],
["", "teleshki-stek-s-pepr-sos-i-marinovan-zelen-piper", "Телешки стек с пепър сос и маринован зелен пипер", "20,30", "400", ""],
["", "teleshki-stek-ss-sos-merlo-i-pecheni-kartofi", "Телешки стек със сос Мерло и печени картофи", "21,00", "400", ""],
["", "chikago-stek-black-angus", "Чикаго стек Black Angus", "37,80", "350", ""]

            ],

            "Ястия от свинско месо": [
                ["", "svinsko-bon-file", "Свинско бон филе", "11,20", "450", ""],
["", "svinski-stekcheta", "Свински стекчета", "11,20", "450", ""],
["", "svinsko-bon-file-s-asperzhi-i-bekon", "Свинско бон филе с аспержи и бекон", "10,50", "450", ""],
["", "svinski-medaloni", "Свински медальони", "9,80", "350", ""],
["", "svinski-vrat", "Свински врат", "10,50", "350", ""],
["", "svinski-karencza", "Свински каренца", "9,80", "350", ""],
["", "svinsko-bon-file-s-kanape-ot-sotirani-tikvichki", "Свинско бон филе с канапе от сотирани тиквички", "10,50", "450", ""]

            ],

            "grill": [
                ["", "pileshki-krilcza", "Пилешки крилца", "6,30", "300", ""],
["", "pikantna-italianska-nadenicza---chirozo", "Пикантна италианска наденица - Чирозо", "11,20", "450", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "5,60", "350", ""],
["", "pileshko-shishche-s-luk-i-chushka", "Пилешко шишче с лук и чушка", "2,80", "200", ""],
["", "pikantni-pileshki-karencza", "Пикантни пилешки каренца", "7,00", "300", ""],
["", "vratni-przholki", "Вратни пържолки", "9,80", "300", ""],
["", "svinski-medaloni", "Свински медальони", "9,80", "360", ""],
["", "svinski-grdi-s-kost", "Свински гърди с кост", "7,00", "300", ""],
["", "pikantni-svinski-rebrcza", "Пикантни свински ребърца", "9,80", "550", ""],
["", "svinsko-shishche-s-luk-i-chushka", "Свинско шишче с лук и чушка", "2,80", "200", ""],
["", "sochen-svinski-kotlet", "Сочен свински котлет", "11,20", "350", ""],
["", "svinsko-bon-file", "Свинско бон филе", "8,40", "250", ""],
["", "teleshki-kyuftencza-na-plocha-s-gradinarska-salata", "Телешки кюфтенца на плоча с градинарска салата", "11,20", "400", ""]

            ],

            "garnish": [
                ["", "brokoli-s-maslo-i-filirani-bademi", "Броколи с масло и филирани бадеми", "2,80", "200", ""],
["", "smetanovi-kartofki-ss-svezhi-podpravki", "Сметанови картофки със свежи подправки", "2,80", "260", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "asperzhi-s-maslo", "Аспержи с масло", "4,90", "150", ""],
["", "przheni-kartofi---presni", "Пържени картофи - пресни", "4,20", "300", ""],
["", "przheni-kartofi-ss-sirene---presni", "Пържени картофи със сирене - пресни", "4,90", "350", ""],
["", "przheni-kartofi---blanshirani", "Пържени картофи - бланширани", "2,80", "300", ""],
["", "przheni-kartofi-ss-sirene---blanshirani", "Пържени картофи със сирене - бланширани", "3,50", "350", ""],
["", "pikantni-kartofi-s-kozhichka-na-peshh", "Пикантни картофи с кожичка на пещ", "3,50", "300", ""],
["", "czarevicza-s-kopr-i-maslo", "Царевица с копър и масло", "2,80", "200", ""],
["", "zadushen-oriz", "Задушен ориз", "2,80", "200", ""],
["", "zadushen-cheren-oriz", "Задушен черен ориз", "4,90", "200", ""]

            ],

            "Сосове - приготвени на място": [
                ["", "mlechen-sos", "Млечен сос", "0,70", "80", ""],
["", "mlechno-chesnov-sos", "Млечно-чеснов сос", "0,70", "80", ""],
["", "italianski-domaten-sos", "Италиански доматен сос", "2,10", "120", ""],
["", "smetanov-sos-ss-buket-ot-sirena", "Сметанов сос със букет от сирена", "2,10", "120", ""],
["", "sos-ot-cherveni-chushki", "Сос от червени чушки", "2,10", "120", ""]

            ],

            "sauces": [
                ["", "majonezeno-gorchichen-sos", "Майонезено-горчичен сос", "0,70", "80", ""],
["", "sos-barbekyu", "Сос Барбекю", "0,70", "80", ""],
["", "sladko-chili---piri-piri-sos", "Сладко Чили - Пири-Пири сос", "0,70", "80", ""]

            ],

            "desserts": [
                ["", "torta-s-filadelfiya-i-domashno-sladko-ot-krushi", "Торта с Филаделфия и домашно сладко от круши", "4,90", "150", ""],
["", "domashen-paj-podnesen-s-vanilov-krem", "Домашен пай, поднесен с ванилов крем", "4,20", "240", ""],
["", "plneni-praskovi-v-zakharen-sirop", "Пълнени праскови в захарен сироп", "6,30", "200", ""],
["", "krem-bryule", "Крем Брюле", "3,50", "150", ""],
["", "karamelizirana-koshnichka-ot-filirani-bademi-s-krem-rikota", "Карамелизирана кошничка от филирани бадеми с крем Рикота", "4,90", "150", ""],
["", "portokalova-torta-s-byal-shokolad", "Портокалова торта с бял шоколад", "4,20", "150", ""],
["", "shokoladova-torta-s-orekhi", "Шоколадова торта с орехи", "4,20", "150", ""],
["", "torta-tiramisu", "Торта Тирамису", "4,20", "160", ""],
["", "chijzkejk-s-borovinki", "Чийзкейк с боровинки", "4,20", "200", ""],
["", "krem-panakota-s-malini", "Крем Панакота с малини", "3,50", "150", ""],
["", "plodova-salata", "Плодова салата", "4,20", "400", ""]

            ],

            "beer": [
                ["", "stolichno-tmno", "Столично тъмно", "2,10", "400", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "beks", "Бекс", "1,40", "330", ""],
["", "grolsh", "Гролш", "4,90", "473", ""],
["", "bezalkokholna-bira-khajneken", "Безалкохолна бира Хайнекен", "2,10", "330", ""],
["", "ariana-radler-ken", "Ариана Радлер кен", "2,10", "500", ""],
["", "stela-artoa", "Стела Артоа", "2,10", "330", ""]

            ],

            "Безалкохолни напитки": [
                ["", "red-bul", "Ред Бул", "4,20", "250", ""]

            ]
        }', 
        'slug' => 'uniqato',
        'business_name' => 'Uniqato',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Сава Силов 36',
        'address_additional' => '',
        'coords_x' => '42.42302157',
        'coords_y' => '25.62449153',
        'phone' => '+359882641164',
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
            
            "Сандвичи, тостери, хамбургери": [
                ["", "khamburger-s-pileshko-file-i-topeno-sirene", "Хамбургер с пилешко филе и топено сирене", "2,10", "300", ""],
["", "khamburger-s-shniczel-i-topeno-sirene", "Хамбургер с шницел и топено сирене", "2,10", "300", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "1,40", "200", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "1,40", "200", ""],
["", "khamburege-s-teleshko-kyufte-i-topeno-sirene", "Хамбуреге с телешко кюфте и топено сирене", "2,80", "300", ""],
["", "tortila-s-riba-ton", "Тортила с риба тон", "2,10", "220", ""],
["", "tortila-s-pileshko-file-i-salata", "Тортила с пилешко филе и салата", "2,10", "220", ""]

            ],

            "Принцеси": [
                ["", "princzesa-s-kajma", "Принцеса с кайма", "0,70", "150", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "0,70", "150", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "1,40", "180", ""],
["", "princzesa-s-lukanka-i-kashkaval", "Принцеса с луканка и кашкавал", "0,70", "150", ""]

            ],

            "grill": [
                ["", "krenvirsh-s-kashkaval-na-skara", "Кренвирш с кашкавал на скара", "0,70", "130", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "1,40", "150", ""],
["", "kyufte", "Кюфте", "0,00", "70", ""],
["", "krenvirsh-na-skara", "Кренвирш на скара", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,00", "70", ""],
["", "khot-dog", "Хот-дог", "0,70", "220", ""],
["", "domashen-sudzhuk-na-skara", "Домашен суджук на скара", "3,50", "220", ""]

            ],

            "garnish": [
                ["", "krastaviczi", "Краставици", "0,00", "100", ""],
["", "mlechna-salata", "Млечна салата", "0,70", "100", ""],
["", "domati", "Домати", "0,00", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,00", "100", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "0,70", "130", ""],
["", "bob-s-lyutenicza", "Боб с лютеница", "0,70", "100", ""]

            ],

            "bread": [
                ["", "pitka-byala", "Питка бяла", "0,00", "", ""],
["", "pitka-pide-byala", "Питка пиде бяла", "0,00", "", ""],
["", "franzela-byala", "Франзела бяла", "0,00", "", ""],
["", "selski-samun-ss-shaneran-sol", "Селски самун със шанеран сол", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", ""],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "500", ""],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,00", "", ""],
["", "studen-chaj", "Студен чай", "1,40", "500", ""],
["", "ajryan", "Айрян", "0,00", "", ""],
["", "energijna-napitka-monster", "Енергийна напитка Monster", "1,40", "500", ""],
["", "bira-ariana-ken", "Бира Ариана кен", "0,70", "500", ""],
["", "bira-zagorka-speczialno-ken", "Бира Загорка Специално кен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'brza-zakuska-aiko',
        'business_name' => 'Бърза Закуска Аико',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Патриарх Евтимий 50',
        'address_additional' => '',
        'coords_x' => '42.4134598',
        'coords_y' => '25.6400506',
        'phone' => '+359897475897',
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
                ["", "ovcharska", "Овчарска", "4,20", "450", ""],
["", "riba-ton", "Риба тон", "5,60", "450", ""],
["", "zigi", "Зиги", "4,20", "380", ""],
["", "grczka", "Гръцка", "4,20", "420", ""],
["", "shopska", "Шопска", "3,50", "450", ""],
["", "czezar", "Цезар", "6,30", "450", ""],
["", "kapreze", "Капрезе", "4,20", "400", ""],
["", "khrupkava-skarida", "Хрупкава скарида", "8,40", "430", ""],
["", "belen-domat-s-mus-ot-sirena", "Белен домат с мус от сирена", "4,20", "390", ""],
["", "avokado", "Авокадо", "5,60", "450", ""],
["", "selska-s-prlenka", "Селска с пърленка", "4,20", "450", ""],
["", "vitaminozna", "Витаминозна", "4,20", "400", ""],
["", "vitaminozna-ss-zapecheno-koze-sirene", "Витаминозна със запечено козе сирене", "4,90", "450", ""],
["", "somga", "Сьомга", "8,40", "400", ""]

            ],

            "Разядки и Брускети": [
                ["", "avokado-s-brusketi", "Авокадо с брускети", "3,50", "150", ""],
["", "tarama-khajver-s-brusketi", "Тарама хайвер с брускети", "3,50", "150", ""],
["", "khumus-s-brusketi", "Хумус с брускети", "2,80", "150", ""],
["", "maslinova-pasta-s-brusketi", "Маслинова паста с брускети", "2,80", "150", ""],
["", "brusketi-s-pushena-somga", "Брускети с пушена сьомга", "7,00", "250", ""],
["", "brusketi-s-avokado", "Брускети с авокадо", "3,50", "250", ""],
["", "brusketi-s-maslinova-pasta", "Брускети с маслинова паста", "2,80", "250", ""]

            ],

            "Топли предястия": [
                ["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,90", "300", ""],
["", "pileshki-khapki-s-bilkova-panirovka", "Пилешки хапки с билкова панировка", "4,90", "300", ""],
["", "kashkavaleni-khapki-pane", "Кашкавалени хапки пане", "4,20", "300", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "300", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,90", "300", ""],
["", "sirene-khapki-pane", "Сирене хапки пане", "3,50", "300", ""],
["", "khrupkavi-topeni-sirencza-ss-sladko-ot-borovinki", "Хрупкави топени сиренца със сладко от боровинки", "4,20", "300", ""],
["", "khrupkavi-panirani-brokoli-ss-susam-i-mlechen-sos", "Хрупкави панирани броколи със сусам и млечен сос", "4,20", "350", ""],
["", "zapekanka-s-bekon-kartofi-kiseli-krastavichki-smetana-topeno-sirene-kashkaval", "Запеканка с бекон, картофи, кисели краставички, сметана, топено сирене, кашкавал", "4,20", "400", ""],
["", "khrupkavi-tikvichki-po-grczki-s-mlechen-sos", "Хрупкави тиквички по гръцки с млечен сос", "3,50", "300", ""],
["", "grilovani-zelenchuczi-s-razyadki-khumus-i-brusketi", "Гриловани зеленчуци с разядки хумус и брускети", "5,60", "400", ""],
["", "khrupkav-patladzhan-s-domaten-sos-moczarela-bosilekovo-pesto-i-kedrovi-yadki", "Хрупкав патладжан с доматен сос, моцарела, босилеково песто и кедрови ядки", "6,30", "400", ""],
["", "kyuftencza-ot-kinoa-s-miks-ot-salatki-i-cheri-domati", "Кюфтенца от киноа с микс от салатки и чери домати", "5,60", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "300", ""],
["", "domashen-kartofen-chips", "Домашен картофен чипс", "2,80", "200", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "300", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "300", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "300", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "300", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "svinsko-file", "Свинско филе", "5,60", "300", ""],
["", "svinski-bekoncheta-s-bbq-sos-i-grilovan-luk", "Свински бекончета с BBQ сос и грилован лук", "7,00", "400", ""],
["", "svinski-ushi", "Свински уши", "4,20", "350", ""]

            ],

            "Ястия с пилешко": [
                ["", "pile-kapreze", "Пиле Капрезе", "7,00", "400", ""],
["", "pileshki-zhulien-ss-zelenchuczi", "Пилешки Жулиен със зеленчуци", "6,30", "400", ""],
["", "pile-fransoa", "Пиле Франсоа", "6,30", "400", ""],
["", "pileshka-przhola-ot-but-s-gben-sos", "Пилешка пържола от бут с гъбен сос", "5,60", "400", ""],
["", "pileshki-zhulieni-v-smetana", "Пилешки Жулиени в сметана", "7,70", "400", ""],
["", "pileshki-shishcheta-v-bekon", "Пилешки шишчета в бекон", "6,30", "400", ""],
["", "pileshki-filencza-s-mashherka", "Пилешки филенца с мащерка", "7,70", "400", ""],
["", "pile-bearnez", "Пиле Беарнез", "7,70", "400", ""]

            ],

            "Ястия със свинско": [
                ["", "svinski-zhulien-v-smetana", "Свински Жулиен в сметана", "8,40", "400", ""],
["", "krekhki-svinski-rebra-na-peshh", "Крехки свински ребра на пещ", "7,00", "500", ""],
["", "svinsko-dzholanche-s-kost", "Свинско джоланче с кост", "11,90", "800", ""],
["", "svinski-zhulien-ss-zelenchuczi", "Свински Жулиен със зеленчуци", "6,30", "400", ""],
["", "svinski-filencza-s-mashherka", "Свински филенца с мащерка", "6,30", "400", ""],
["", "svinski-filencza-v-chesnovo-kopren-sos", "Свински филенца в чесново-копърен сос", "6,30", "400", ""],
["", "svinska-vratna-przhola-s-gben-sos", "Свинска вратна пържола с гъбен сос", "6,30", "400", ""],
["", "khrupkav-svinski-drob", "Хрупкав свински дроб", "4,20", "350", ""]

            ],

            "Ястия с телешко": [
                ["", "domashni-teleshki-kyufteta", "Домашни телешки кюфтета", "5,60", "400", ""],
["", "teleshki-kyuftencza-ss-susam-i-khumus", "Телешки кюфтенца със сусам и хумус", "5,60", "400", ""],
["", "teleshki-filencza-s-manatarki-i-mashherka", "Телешки филенца с манатарки и мащерка", "13,30", "350", ""],
["", "teleshki-ezik-s-manatarka-i-kapersi", "Телешки език с манатарка и каперси", "9,10", "350", ""]

            ],

            "Риби и калмари": [
                ["", "somga-kotlet", "Сьомга котлет", "11,20", "350", ""],
["", "bejbi-kalmari-s-pipala-pane", "Бейби калмари с пипала пане", "9,10", "200", ""],
["", "przhen-sharan", "Пържен шаран", "4,90", "350", ""],
["", "kalmari-na-plocha-s-bilki", "Калмари на плоча с билки", "9,80", "200", ""],
["", "kalmari-pane", "Калмари пане", "9,10", "250", ""]

            ],

            "Паста и Ризото": [
                ["", "rizoto-ss-somga-kopr-i-sirene", "Ризото със сьомга, копър и сирене", "9,10", "350", ""],
["", "spageti-ss-zelenchuczi-i-avokado", "Спагети със зеленчуци и авокадо", "5,60", "350", ""],
["", "rizoto-ss-zelenchuczi-avokado-i-filadelfiya", "Ризото със зеленчуци, авокадо и филаделфия", "5,60", "350", ""],
["", "spageti-s-teleshki-kyuftencza", "Спагети с телешки кюфтенца", "6,30", "350", ""],
["", "karbonara", "Карбонара", "5,60", "350", ""],
["", "rizoto-s-pile-tikvichka-bekon-i-sirene", "Ризото с пиле, тиквичка, бекон и сирене", "6,30", "350", ""],
["", "rizoto-s-teleshko-manatarki-i-sirene", "Ризото с телешко, манатарки и сирене", "11,20", "350", ""]

            ],

            "Закуски": [
                ["", "omlet-asorti", "Омлет асорти", "3,50", "350", ""],
["", "mish-mash", "Миш-маш", "3,50", "350", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "350", ""],
["", "brkani-yajcza-s-bekon", "Бъркани яйца с бекон", "2,80", "350", ""],
["", "brkani-yajcza-ss-sirene", "Бъркани яйца със сирене", "2,10", "300", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "350", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "350", ""],
["", "omlet-s-shunka-i-kashkaval", "Омлет с шунка и кашкавал", "3,50", "350", ""]

            ],

            "Палачинки": [
                ["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "150", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "2,10", "150", ""],
["", "palachinka-s-shunka-i-kashkaval", "Палачинка с шунка и кашкавал", "2,10", "150", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "2,10", "130", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "2,10", "130", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,10", "250", ""],
["", "sandvich-pitka-s-pushena-somga-i-filadelfiya", "Сандвич питка с пушена сьомга и филаделфия", "4,90", "300", ""],
["", "sandvich-pitka-s-pileshko-i-filadelfiya", "Сандвич питка с пилешко и филаделфия", "4,20", "300", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "2,10", "250", ""],
["", "sandvich-pitka-s-shunka-i-kashkaval", "Сандвич питка с шунка и кашкавал", "3,50", "300", ""]

            ],

            "beer": [
                ["", "ariana", "Ариана", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "1,40", "500", ""],
["", "zagorka-retro", "Загорка Ретро", "1,40", "500", ""],
["", "zagorka", "Загорка", "1,40", "500", ""],
["", "amstel", "Амстел", "1,40", "500", ""],
["", "khajneken-0", "Хайнекен 0%", "2,10", "330", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "stolichno-amber-pils", "Столично Amber Pils", "2,10", "400", ""],
["", "stolichno-weiss", "Столично Weiss", "2,10", "400", ""],
["", "stolichno-bock", "Столично Bock", "2,10", "400", ""],
["", "starobrno", "Старобърно", "1,40", "500", ""]

            ],

            "Coca-Cola напитки": [
                ["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "250", ""],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "250", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "250", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "250", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "330", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "", ""]

            ]
        }', 
        'slug' => 'rayska-yablka',
        'business_name' => 'Райска ябълка',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. Цар Симеон Велики 127',
        'address_additional' => '',
        'coords_x' => '42.4260132',
        'coords_y' => '25.6356885',
        'phone' => '+359887810021',
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
                ["", "grczka", "Гръцка", "3,50", "600", ""],
["", "shopska", "Шопска", "2,80", "", ""],
["", "ovcharska", "Овчарска", "3,50", "", ""],
["", "beleni-domati-ss-sirene", "Белени домати със сирене", "3,50", "400", ""],
["", "kapreze", "Капрезе", "3,50", "350", ""],
["", "zelena-salata", "Зелена салата", "2,80", "300", ""],
["", "tono-salata", "Тоно салата", "3,50", "400", ""],
["", "bozhidara", "Божидара", "4,20", "400", ""],
["", "aleksandra", "Александра", "4,20", "400", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,80", "350", ""],
["", "rajska-salata", "Райска салата", "3,50", "600", ""],
["", "vareni-kartofi", "Варени картофи", "2,80", "300", ""],
["", "mlechna-salata", "Млечна салата", "2,10", "200", ""],
["", "snezhanka", "Снежанка", "2,10", "200", ""],
["", "svezha-salata", "Свежа салата", "2,80", "350", ""],
["", "nashenska-salata", "Нашенска салата", "3,50", "400", ""],
["", "vareni-brokoli", "Варени броколи", "2,80", "400", ""],
["", "brokoli-ss-smetana-i-sirena", "Броколи със сметана и сирена", "4,20", "450", ""],
["", "brokoli-ss-smetanova-zalivka", "Броколи със сметанова заливка", "3,50", "400", ""],
["", "vitaminozna-salata", "Витаминозна салата", "2,80", "300", ""],
["", "domati-s-katk", "Домати с катък", "2,80", "400", ""],
["", "salata-domati", "Салата домати", "2,80", "350", ""],
["", "domati-ss-sirene", "Домати със сирене", "2,80", "400", ""],
["", "katk", "Катък", "2,80", "200", ""],
["", "kiseli-krastavichki", "Кисели краставички", "2,10", "200", ""],
["", "krastaviczi-s-piperki", "Краставици с пиперки", "2,80", "400", ""],
["", "krastaviczi-salata", "Краставици салата", "2,80", "350", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "200", ""],
["", "meshana-salata", "Мешана салата", "2,80", "400", ""],
["", "meshana-salata-s-katk", "Мешана салата с катък", "2,80", "400", ""],
["", "meshana-salata-ss-sirene", "Мешана салата със сирене", "2,80", "400", ""],
["", "morkovi", "Моркови", "2,10", "300", ""],
["", "morkovi-i-czveklo", "Моркови и цвекло", "2,80", "300", ""],
["", "morkovi-czedeno-mlyako-i-orekhi", "Моркови, цедено мляко и орехи", "2,80", "350", ""],
["", "pecheni-piperki-s-katk", "Печени пиперки с катък", "2,80", "350", ""],
["", "pecheni-piperki-s-chesnov-sos-i-maslini", "Печени пиперки с чеснов сос и маслини", "2,80", "350", ""],
["", "salata-berga", "Салата Берга", "3,50", "400", ""],
["", "skaridena-salata", "Скаридена салата", "3,50", "400", ""],
["", "chesnova-salata", "Чеснова салата", "3,50", "400", ""]

            ],

            "Студени предястия": [
                ["", "sirene-natyur", "Сирене натюр", "0,00", "50", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "0,70", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "lukanka", "Луканка", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,80", "50", ""],
["", "shunka", "Шунка", "1,40", "50", ""],
["", "sudzhuk", "Суджук", "2,80", "50", ""],
["", "dzadziki", "Дзадзики", "3,50", "200", ""]

            ],

            "Топли предястия": [
                ["", "przheni-kartofi-presni", "Пържени картофи пресни", "2,80", "300", ""],
["", "przheni-kartofi-presni-ss-sirene", "Пържени картофи пресни със сирене", "2,80", "350", ""],
["", "przheni-kartofi-s-bekon-i-chedr", "Пържени картофи с бекон и чедър", "3,50", "350", ""],
["", "kartofi-sote", "Картофи соте", "3,50", "350", ""],
["", "kartofeno-pyure", "Картофено пюре", "2,80", "300", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,80", "300", ""],
["", "przheni-kartofi-blanshirani", "Пържени картофи бланширани", "2,10", "250", ""],
["", "przheni-kartofi-blanshirani-ss-sirene", "Пържени картофи бланширани със сирене", "2,80", "350", ""],
["", "vodenichki-s-luk", "Воденички с лук", "4,20", "350", ""],
["", "vodenichki-s-luk-i-kashkaval", "Воденички с лук и кашкавал", "4,90", "350", ""],
["", "vodenichki-s-maslo", "Воденички с масло", "4,20", "300", ""],
["", "gbi-na-skara", "Гъби на скара", "3,50", "250", ""],
["", "gbi-v-maslo", "Гъби в масло", "4,20", "300", ""],
["", "kasapsko-meze", "Касапско мезе", "5,60", "450", ""],
["", "kashkavaleni-khapki-s-kartofeno-pyure", "Кашкавалени хапки с картофено пюре", "4,20", "300", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "4,20", "350", ""],
["", "kroketi", "Крокети", "4,20", "300", ""],
["", "panirani-svinski-srcza", "Панирани свински сърца", "4,90", "400", ""],
["", "pecheni-zelenchuczi", "Печени зеленчуци", "4,90", "300", ""],
["", "pileshki-drob-s-luk-i-kashkaval", "Пилешки дроб с лук и кашкавал", "4,90", "350", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "4,90", "400", ""],
["", "pileshki-drob-s-maslo", "Пилешки дроб с масло", "4,20", "250", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "4,20", "350", ""],
["", "przhen-drob", "Пържен дроб", "4,20", "300", ""],
["", "svinski-zurli", "Свински зурли", "4,90", "350", ""],
["", "svinski-ushi", "Свински уши", "4,90", "350", ""],
["", "svinski-ushi-na-tigan", "Свински уши на тиган", "4,90", "350", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "5,60", "400", ""],
["", "selski-kartofi-s-topeno-sirene", "Селски картофи с топено сирене", "4,20", "350", ""],
["", "sirene-na-plocha", "Сирене на плоча", "3,50", "250", ""],
["", "sirene-pane-s-med-i-orekhi", "Сирене пане с мед и орехи", "4,90", "300", ""],
["", "sirene-khapki-s-kartofeno-pyure", "Сирене хапки с картофено пюре", "3,50", "300", ""],
["", "sirene-khapki", "Сирене хапки", "3,50", "300", ""],
["", "teleshki-ezik-na-skara-s-chesnov-sos", "Телешки език на скара с чеснов сос", "7,00", "250", ""],
["", "teleshki-ezik-ss-smetana", "Телешки език със сметана", "8,40", "300", ""],
["", "teleshki-ezik-s-maslo", "Телешки език с масло", "7,70", "200", ""],
["", "topeni-sirencza", "Топени сиренца", "4,90", "300", ""]

            ],

            "alaminuti": [
                ["", "kashkaval-na-plocha", "Кашкавал на плоча", "4,20", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,90", "300", ""],
["", "mish-mash", "Миш маш", "2,80", "250", ""],
["", "omlet-natyur", "Омлет натюр", "2,10", "200", ""],
["", "omlet-s-chushki-i-sirene", "Омлет с чушки и сирене", "2,10", "300", ""],
["", "omlet-s-shunka-i-kashkaval", "Омлет с шунка и кашкавал", "2,80", "300", ""],
["", "przhen-patladzhan", "Пържен патладжан", "4,90", "300", ""],
["", "przheni-tikvichki", "Пържени тиквички", "4,90", "300", ""],
["", "sirene-po-trakijski", "Сирене по Тракийски", "4,90", "350", ""],
["", "sirene-po-shopski", "Сирене по шопски", "4,90", "350", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "300", ""]

            ],

            "Пилешко": [
                ["", "pileshka-giros-porcziya", "Пилешка гирос порция", "9,10", "500", ""],
["", "kyufteta-po-domashna-reczepta", "Кюфтета по домашна рецепта", "1,40", "100", ""],
["", "pileshka-przhola-ot-file", "Пилешка пържола от филе", "4,90", "300", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "250", ""],
["", "shishche", "Шишче", "2,80", "150", ""],
["", "pileshki-medaloncheta", "Пилешки медальончета", "5,60", "300", ""],
["", "pileshki-rolcza-s-plnezh-na-majstora", "Пилешки ролца с пълнеж на майстора", "8,40", "400", ""],
["", "pileshko-file-ss-smetanov-sos", "Пилешко филе със сметанов сос", "6,30", "350", ""],
["", "pileshki-khapki-s-kashkaval", "Пилешки хапки с кашкавал", "4,90", "350", ""],
["", "pileshki-khapki-ss-zelenchuczi", "Пилешки хапки със зеленчуци", "5,60", "400", ""],
["", "pileshki-khapki-s-shunka-i-kiseli-krastavichki", "Пилешки хапки с шунка и кисели краставички", "7,00", "450", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,20", "300", ""],
["", "pileshki-khapki-s-gbi", "Пилешки хапки с гъби", "5,60", "400", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "5,60", "350", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,90", "400", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "5,60", "350", ""],
["", "pileshki-sach", "Пилешки сач", "11,90", "", ""],
["", "trakijska-meshanicza", "Тракийска мешаница", "5,60", "300", ""]

            ],

            "pork": [
                ["", "kyufte", "Кюфте", "1,40", "100", ""],
["", "kebapche", "Кебапче", "1,40", "100", ""],
["", "selska-nadenicza", "Селска наденица", "4,90", "300", ""],
["", "shishche", "Шишче", "2,80", "150", ""],
["", "rebra-na-metr-400gr", "Ребра на метър (400гр)", "7,00", "", ""],
["", "pajdaki", "Пайдаки", "5,60", "", ""],
["", "karencza", "Каренца", "7,00", "", ""],
["", "vratna-przhola", "Вратна пържола", "7,00", "350", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "4,90", "300", ""],
["", "karnache", "Карначе", "1,40", "100", ""],
["", "agneshki-drebolijki-s-maslo", "Агнешки дреболийки с масло", "5,60", "250", ""],
["", "dzholan-meze", "Джолан мезе", "6,30", "300", ""],
["", "giros-porcziya-svinsko-meso", "Гирос порция свинско месо", "10,50", "500", ""],
["", "kombiniran-sach", "Комбиниран сач", "14,70", "", ""],
["", "sach-svinsko", "Сач свинско", "14,00", "", ""],
["", "svinski-dzholan-s-presni-zelenchuczi", "Свински джолан с пресни зеленчуци", "6,30", "400", ""],
["", "svinski-karencza-ss-sirene", "Свински каренца със сирене", "7,00", "350", ""],
["", "svinski-khapki-ss-zelenchuczi", "Свински хапки със зеленчуци", "7,00", "500", ""],
["", "svinski-khapki-s-shunka-i-kiseli-krastavichki", "Свински хапки с шунка и кисели краставички", "7,00", "500", ""],
["", "teleshki-biftek", "Телешки бифтек", "1,40", "100", ""],
["", "shashlik-s-bekon-i-zelenchuczi", "Шашлик с бекон и зеленчуци", "9,80", "400", ""]

            ],

            "Телешки и агнешки мезенца": [
                ["", "teleshko-kyufte", "Телешко кюфте", "1,40", "100", ""],
["", "agneshki-drebolii-s-maslo", "Агнешки дреболии с масло", "5,60", "250", ""],
["", "teleshki-ezik-s-maslo", "Телешки език с масло", "6,30", "200", ""],
["", "teleshki-ezik-na-skara-s-chesnov-sos", "Телешки език на скара с чеснов сос", "6,30", "250", ""]

            ],

            "risotto": [
                ["", "rizoto-s-patladzhan", "Ризото с патладжан", "4,90", "450", ""],
["", "rizoto-s-pileshko-meso", "Ризото с пилешко месо", "4,90", "450", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "6,30", "450", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "450", ""]

            ],

            "fish": [
                ["", "rulcza-ot-raczi", "Рулца от раци", "2,80", "200", ""],
["", "khajver-s-chesn", "Хайвер с чесън", "2,10", "200", ""],
["", "przhen-sharan", "Пържен шаран", "5,60", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "7,00", "300", ""],
["", "przhena-pastrva", "Пържена пастърва", "7,00", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "9,80", "300", ""],
["", "skumriya-na-skara", "Скумрия на скара", "4,90", "300", ""],
["", "kalmari-pane", "Калмари пане", "10,50", "250", ""],
["", "oktopod-na-skara", "Октопод на скара", "9,10", "200", ""],
["", "midi-na-tigan-po-grczka-reczepta", "Миди на тиган по гръцка рецепта", "6,30", "200", ""],
["", "kalmari-na-skara", "Калмари на скара", "10,50", "200", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "10,50", "250", ""],
["", "midi-pane", "Миди пане", "6,30", "200", ""],
["", "oktopod-po-grczki", "Октопод по гръцки", "9,10", "200", ""],
["", "taramosalata", "Тарамосалата", "3,50", "200", ""]

            ],

            "sauces": [
                ["", "chesnov", "Чеснов", "0,70", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "lyutenicza", "Лютеница", "0,70", "50", ""],
["", "mlechen", "Млечен", "0,70", "50", ""],
["", "tanchi", "Танчи", "0,70", "50", ""],
["", "gben", "Гъбен", "1,40", "100", ""],
["", "gorchicza", "Горчица", "0,70", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "borovinkovo-sladko", "Боровинково сладко", "0,70", "50", ""],
["", "chili-sos", "Чили сос", "0,70", "50", ""]

            ],

            "garnish": [
                ["", "chesnova-filijka", "Чеснова филийка", "0,00", "", ""],
["", "prepechena-filijka", "Препечена филийка", "0,00", "", ""],
["", "khlyab-filijka", "Хляб филийка", "0,00", "", ""],
["", "grczka-pitka", "Гръцка питка", "0,70", "", ""],
["", "grczka-pitka-ss-sirene", "Гръцка питка със сирене", "1,40", "", ""],
["", "grczka-pitka-s-kashkaval", "Гръцка питка с кашкавал", "1,40", "", ""],
["", "grczka-pitka-s-kashkaval-i-sirene", "Гръцка питка с кашкавал и сирене", "1,40", "", ""],
["", "chesnova-grczka-pitka", "Чеснова гръцка питка", "0,70", "", ""],
["", "garnitura-blanshirani-kartofi", "Гарнитура бланширани картофи", "1,40", "150", ""],
["", "garnitura-vareni-kartofi", "Гарнитура варени картофи", "1,40", "150", ""],
["", "garnitura-domati-i-krastaviczi", "Гарнитура домати и краставици", "1,40", "150", ""],
["", "garnitura-domati", "Гарнитура домати", "1,40", "150", ""],
["", "garnitura-zele-i-morkovi", "Гарнитура зеле и моркови", "1,40", "150", ""],
["", "garnitura-zelena-salata", "Гарнитура зелена салата", "1,40", "150", ""],
["", "garnitura-krastaviczi", "Гарнитура краставици", "1,40", "150", ""],
["", "garnitura-przheni-kartofi", "Гарнитура пържени картофи", "1,40", "150", ""],
["", "dobavka-katk", "Добавка катък", "0,70", "", ""],
["", "dobavka-limon", "Добавка лимон", "0,70", "", ""],
["", "dobavka-luk", "Добавка лук", "0,70", "", ""],
["", "dobavka-maslini", "Добавка маслини", "0,70", "", ""],
["", "dobavka-med", "Добавка мед", "0,70", "", ""],
["", "dobavka-praz", "Добавка праз", "0,70", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "2,10", "", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "1,40", "", ""]

            ],

            "desserts": [
                ["", "palachinka-s-konfityur", "Палачинка с конфитюр", "2,10", "150", ""],
["", "palachinka-ss-shokolad", "Палачинка със шоколад", "2,10", "150", ""],
["", "palachinka-s-med-i-orekhi", "Палачинка с мед и орехи", "2,10", "150", ""],
["", "grczko-edeno-mlyako-i-s-med-i-orekhi", "Гръцко едено мляко и с мед и орехи", "2,10", "250", ""]

            ]
        }', 
        'slug' => 'salabashevata-kushta',
        'business_name' => 'Салабашевата къща',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'бул. &quot;Цар Симеон Велики&quot; 134',
        'address_additional' => '',
        'coords_x' => '42.42550278',
        'coords_y' => '25.63536835',
        'phone' => '+359898465468',
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
            
            "Бургери и принцеси": [
                ["", "burger-s-pileshko", "Бургер с пилешко", "2,10", "", ""],
["", "burger-ss-svinska-przhola", "Бургер със свинска пържола", "2,10", "", ""],
["", "burger-s-pleskavicza", "Бургер с плескавица", "2,10", "", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "1,40", "", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "1,40", "", ""],
["", "gyuzlema", "Гюзлема", "0,70", "", ""]

            ],

            "desserts": [
                ["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "0,70", "", ""],
["", "palachinka-ss-sladko-i-sirene", "Палачинка със сладко и сирене", "1,40", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/775135.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/775134.jpg?width=302"]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,00", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "hell", "Hell", "0,70", "250", ""],
["", "hell", "Hell", "0,70", "500", ""],
["", "studen-chaj-xixo", "Студен чай Xixo", "0,70", "250", ""],
["", "ajran", "Айран", "0,70", "300", ""],
["", "ajran", "Айран", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'zvezdata',
        'business_name' => 'Звездата',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Цар Иван Шишман 60',
        'address_additional' => '',
        'coords_x' => '42.42675041',
        'coords_y' => '25.62942582',
        'phone' => '+359876417710',
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
                ["", "picza-margarita", "Пица Маргарита", "1,40", "120", ""],
["", "picza-rimini", "Пица Римини", "2,10", "140", ""],
["", "picza-proshuto-krudo", "Пица Прошуто Крудо", "2,10", "160", ""],
["", "picza-proshuto-koto", "Пица Прошуто Кото", "2,10", "160", ""],
["", "picza-chorizo", "Пица Чоризо", "2,10", "160", ""],
["", "picza-salam-milano", "Пица салам Милано", "2,10", "160", ""],
["", "picza-kaprichoza", "Пица Капричоза", "2,10", "160", ""],
["", "picza-krenvirsh", "Пица кренвирш", "2,10", "160", ""],
["", "picza-nadenicza-i-gbi", "Пица наденица и гъби", "2,10", "160", ""],
["", "picza-nadenicza-zelenchuczi-i-luk", "Пица наденица, зеленчуци и лук", "2,10", "160", ""],
["", "picza-vegetarianska-s-gbi", "Пица Вегетарианска с гъби", "2,10", "", ""],
["", "picza-vegetarianska-s-maslini", "Пица Вегетарианска с маслини", "2,10", "", ""],
["", "picza-vegetarianska-ss-zelenchuczi", "Пица Вегетарианска със зеленчуци", "2,10", "", ""]

            ],

            "Фокачи": [
                ["", "fokacha-s-mortadela", "Фокача с мортадела", "2,10", "160", ""],
["", "fokacha-s-pikanten-salam", "Фокача с пикантен салам", "2,10", "160", ""]

            ],

            "Ротоли": [
                ["", "rotolo-salam-milano", "Ротоло салам Милано", "2,10", "130", ""],
["", "rotolo-proshuto-krudo", "Ротоло прошуто крудо", "2,10", "130", ""],
["", "rotolo-czezar", "Ротоло Цезар", "2,10", "130", ""]

            ],

            "pasta": [
                ["", "makaroni-pomodoro", "Макарони Помодоро", "5,60", "400", ""],
["", "makaroni-arabyata", "Макарони Арабята", "5,60", "400", ""],
["", "makaroni-boloneze", "Макарони Болонезе", "7,00", "400", ""],
["", "talyateli-pomodoro", "Талятели Помодоро", "5,60", "400", ""],
["", "taliateli-arabyata", "Талиатели Арабята", "5,60", "400", ""],
["", "taliateli-boloneze", "Талиатели Болонезе", "7,00", "400", ""]

            ],

            "desserts": [
                ["", "pana-kota", "Пана кота", "2,80", "150", ""],
["", "tiramisu", "Тирамису", "2,80", "150", ""],
["", "sorizo", "Соризо", "2,10", "250", ""],
["", "torta-krostata", "Торта Кростата", "2,80", "", ""],
["", "studen-chaj-fuze-tea", "Студен чай Fuze Tea", "2,10", "330", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/831083.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/831084.jpg?width=302"],
["", "fanta-grozde", "Fanta Грозде", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/831085.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/831086.jpg?width=302"],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/831087.jpg?width=302"],
["", "cappy-pulpy-praskova", "Cappy Pulpy Праскова", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/831089.jpg?width=302"],
["", "fuzetea-mango-i-ananas-studen-chaj", "Fuzetea Манго и ананас, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1085508.jpg?width=302"],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1085509.jpg?width=302"],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1085510.jpg?width=302"],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1085511.jpg?width=302"],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1085512.jpg?width=302"],
["", "cappy-pulpy-mango-i-ananas", "Cappy Pulpy Манго и Ананас", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1085513.jpg?width=302"]

            ],

            "drinks": [
                ["", "bira-zagorka", "Бира Загорка", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "2,10", "500", ""],
["", "stolichno", "Столично", "2,10", "500", ""],
["", "vino-kabileangelverano-azur", "Вино Кабиле,Ангел,Верано Азур", "14,00", "750", ""],
["", "ajryan", "Айрян", "1,40", "500", ""],
["", "drik-lajf", "Дрик лайф", "2,10", "500", ""]

            ]
        }', 
        'slug' => 'picariya-amo',
        'business_name' => 'Пицария Амо',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Свети Княз Борис 79',
        'address_additional' => '',
        'coords_x' => '42.42608111',
        'coords_y' => '25.62915995',
        'phone' => '+359883276777',
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
                ["", "khajlajf", "Хайлайф", "4,90", "", ""],
["", "ekstravagancza", "Екстраваганца", "4,90", "", ""],
["", "deluks", "Делукс", "5,60", "", ""],
["", "vegas", "Вегас", "5,60", "", ""],
["", "bruklin", "Бруклин", "4,90", "", ""],
["", "amigo", "Амиго", "5,60", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "4,20", "", ""],
["", "peperoni", "Пеперони", "4,90", "", ""],
["", "kholivud", "Холивуд", "4,90", "", ""],
["", "asorti", "Асорти", "4,90", "", ""],
["", "ekzotika", "Екзотика", "4,90", "", ""],
["", "ekstazi", "Екстази", "5,60", "", ""],
["", "al-kapone", "Ал Капоне", "4,90", "", ""],
["", "sezoni", "Сезони", "4,90", "", ""],
["", "sentrl-park", "Сентръл Парк", "4,90", "", ""],
["", "variete", "Вариете", "4,90", "", ""],
["", "speczialna", "Специална", "5,60", "", ""],
["", "malibu", "Малибу", "4,90", "", ""],
["", "gurme", "Гурме", "4,90", "", ""],
["", "imperiya", "Империя", "4,90", "", ""],
["", "an-amur", "Ан Амур", "4,90", "", ""],
["", "al-katraz", "Ал Катраз", "5,60", "", ""],
["", "latino", "Латино", "4,90", "", ""],
["", "bevrli-khils", "Бевърли Хилс", "4,90", "", ""],
["", "nordik", "Нордик", "4,90", "", ""],
["", "khavajska", "Хавайска", "4,90", "", ""],
["", "kentki", "Кентъки", "4,90", "", ""],
["", "kalczone", "Калцоне", "4,90", "400", ""],
["", "prlenka", "Пърленка", "2,10", "", ""]

            ],

            "Добавки за пица": [
                ["", "presni-domati", "Пресни домати", "0,00", "50", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "50", ""],
["", "pecheni-chushki", "Печени чушки", "0,00", "50", ""],
["", "presni-chushki", "Пресни чушки", "0,00", "50", ""],
["", "lyuta-chushka", "Люта чушка", "0,70", "50", ""],
["", "presni-gbi", "Пресни гъби", "0,00", "50", ""],
["", "spanak", "Спанак", "0,00", "50", ""],
["", "kapersi", "Каперси", "1,40", "50", ""],
["", "brokoli", "Броколи", "0,70", "50", ""],
["", "cheri-domati", "Чери домати", "0,70", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""],
["", "maslini", "Маслини", "0,70", "50", ""],
["", "pechen-luk", "Печен лук", "0,00", "50", ""],
["", "star-luk", "Стар лук", "0,00", "50", ""],
["", "tikvichki", "Тиквички", "0,00", "50", ""],
["", "byalo-sirene", "Бяло сирене", "0,70", "50", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""],
["", "pryasna-moczarela", "Прясна моцарела", "1,40", "50", ""],
["", "izvara", "Извара", "0,70", "50", ""],
["", "chedr", "Чедър", "1,40", "50", ""],
["", "moczarela", "Моцарела", "0,70", "50", ""],
["", "parmezan", "Пармезан", "0,70", "5", ""],
["", "topeno-sirene", "Топено сирене", "0,70", "50", ""],
["", "svinska-shunka", "Свинска шунка", "0,70", "50", ""],
["", "bekon", "Бекон", "0,70", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""],
["", "teleshka-kajma", "Телешка кайма", "0,70", "50", ""],
["", "kajma", "Кайма", "0,70", "50", ""],
["", "pileshko-file", "Пилешко филе", "0,70", "50", ""],
["", "krenvirsh", "Кренвирш", "0,70", "50", ""],
["", "chorizo", "Чоризо", "0,70", "50", ""],
["", "salchichon", "Салчичон", "0,70", "50", ""],
["", "nadenicza", "Наденица", "0,70", "50", ""],
["", "peperoni", "Пеперони", "0,70", "50", ""],
["", "shpekov-salam", "Шпеков салам", "0,70", "50", ""],
["", "proshuto", "Прошуто", "2,10", "50", ""],
["", "anshoa", "Аншоа", "1,40", "25", ""],
["", "asperzhi", "Аспержи", "1,40", "50", ""],
["", "artishok", "Артишок", "1,40", "50", ""],
["", "ananas", "Ананас", "0,70", "50", ""],
["", "yajcze", "Яйце", "0,00", "50", ""],
["", "rukola", "Рукола", "0,70", "25", ""]

            ],

            "salads": [
                ["", "ovcharska-salata", "Овчарска салата", "4,20", "390", ""],
["", "salata-czezar-pile", "Салата Цезар пиле", "4,20", "350", ""],
["", "shopska-salata", "Шопска салата", "3,50", "330", ""],
["", "speczialna-kob-salata", "Специална Коб салата", "4,90", "350", ""],
["", "salata-vitaminoza", "Салата Витаминоза", "4,20", "320", ""],
["", "salata-sezoni", "Салата Сезони", "4,20", "350", ""]

            ],

            "starters": [
                ["", "frenski-kyuftencza", "Френски кюфтенца", "3,50", "250", ""],
["", "kartofi-sote-s-kopr-i-chesn", "Картофи соте с копър и чесън", "2,10", "250", ""],
["", "pikantni-pileshki-filencza-s-mlechno-chesnov-sos", "Пикантни пилешки филенца с млечно-чеснов сос", "4,20", "250", ""],
["", "moczareleni-prchiczi-s-domaten-sos", "Моцарелени пръчици с доматен сос", "4,20", "250", ""],
["", "przheni-kartofki-s-ketchup", "Пържени картофки с кетчуп", "1,40", "250", ""],
["", "pikantni-kartofki-s-mlechno-chesnov-sos", "Пикантни картофки с млечно чеснов сос", "2,80", "250", ""],
["", "razyadka-miks", "Разядка микс", "6,30", "350", ""],
["", "topeni-sirencza-s-borovinkovo-sladko", "Топени сиренца с боровинково сладко", "4,20", "200", ""]

            ],

            "Основни ястия": [
                ["", "svinska-vratna-przhola-na-skara", "Свинска вратна пържола на скара", "7,00", "400", ""],
["", "pile-pikata", "Пиле Пиката", "6,30", "400", ""],
["", "pile-dglas", "Пиле Дъглас", "7,70", "400", ""],
["", "pileshki-fileta-s-medena-gorchicza", "Пилешки филета с медена горчица", "7,00", "400", ""],
["", "plneni-svinski-karencza", "Пълнени свински каренца", "7,70", "400", ""],
["", "svinski-kotlet-ss-sos-zhu", "Свински котлет със сос Жу", "6,30", "400", ""],
["", "svinsko-bon-file-s-pepr-sos", "Свинско бон филе с пепър сос", "6,30", "400", ""],
["", "pstrva-na-plocha", "Пъстърва на плоча", "7,70", "400", ""],
["", "kotlet-ot-somga-ss-sos-bearnez", "Котлет от сьомга със сос Беарнез", "9,10", "400", ""],
["", "rebra-po-teksaski", "Ребра по Тексаски", "8,40", "500", ""]

            ],

            "pasta": [
                ["", "linguini-karbonara", "Лингуини Карбонара", "6,30", "350", ""],
["", "linguini-boloneze", "Лингуини Болонезе", "5,60", "350", ""]

            ],

            "desserts": [
                ["", "torta-miso-maskarpone", "Торта Мисо Маскарпоне", "2,80", "150", ""],
["", "chijzkejk-s-borovinkovo-sladko", "Чийзкейк с боровинково сладко", "2,80", "150", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "110", ""],
["", "domashno-tiramisu", "Домашно тирамису", "2,80", "150", ""]

            ],

            "sauces": [
                ["", "domaten-picza-sos", "Доматен пица сос", "0,00", "70", ""],
["", "mlechno-chesnov-sos", "Млечно-чеснов сос", "0,00", "70", ""],
["", "lyutiv-domaten-sos", "Лютив доматен сос", "0,00", "70", ""],
["", "chili-sos", "Чили сос", "0,00", "70", ""],
["", "czezar-dresing", "Цезар дресинг", "0,00", "70", ""],
["", "mlechen-kob-dresing", "Млечен Коб дресинг", "0,00", "70", ""],
["", "majoneza", "Майонеза", "0,00", "70", ""],
["", "gorchicza", "Горчица", "0,00", "70", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "", ""]

            ],

            "Choices": [
                ["", "nyu-jorkski-blat-domaten-sos", "Ню Йоркски блат (доматен сос,", "0,00", "", ""],
["", "kalifornijski-blat-mlechno-chesnov-sos", "Калифорнийски блат (млечно-чеснов сос,", "0,00", "", ""]

            ]
        }', 
        'slug' => 'pizzamerica',
        'business_name' => 'PizzAmerica',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Цар Калоян 50',
        'address_additional' => '',
        'coords_x' => '42.42634257',
        'coords_y' => '25.62425079',
        'phone' => '+359877474992',
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
            
            "alaminuti": [
                ["", "sirene-po-shopski", "Сирене по шопски", "2,80", "200", ""],
["", "sirene-pod-kapak", "Сирене под капак", "2,10", "200", ""],
["", "gbi-s-maslo", "Гъби с масло", "2,80", "200", ""],
["", "gbi-po-mandradzhijski", "Гъби по мандраджийски", "3,50", "350", ""],
["", "chushki-byurek", "Чушки бюрек", "1,40", "", ""],
["", "mish-mash", "Миш Маш", "1,40", "300", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "1,40", "", ""],
["", "trakijsko-gyuveche", "Тракийско гювече", "2,80", "250", ""],
["", "shkembe-maslo", "Шкембе масло", "2,80", "250", ""],
["", "pastrma-s-luk", "Пастърма с лук", "3,50", "150", ""],
["", "ezik-paniran", "Език паниран", "2,80", "200", ""],
["", "ezik-maslo", "Език масло", "2,80", "150", ""],
["", "zapekanka-po-selski", "Запеканка по селски", "3,50", "380", ""],
["", "przheni-kartofi-s-gbi-i-kashkaval", "Пържени картофи с гъби и кашкавал", "2,80", "300", ""],
["", "kartofi-po-nashenski", "Картофи по нашенски", "2,10", "400", ""],
["", "kartofi-sote-s-kashkaval-i-smetana", "Картофи соте с кашкавал и сметана", "2,10", "450", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "250", ""],
["", "kartofi-s-3-vida-sirena", "Картофи с 3 вида сирена", "3,50", "300", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "0,70", "300", ""],
["", "bob-chorba", "Боб чорба", "0,70", "300", ""],
["", "topcheta", "Топчета", "1,40", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "shkembe", "Шкембе", "1,40", "300", ""],
["", "supa-ot-riba", "Супа от риба", "2,10", "300", ""],
["", "teleshko-vareno", "Телешко варено", "2,10", "300", ""]

            ],

            "salads": [
                ["", "ovcharska-salata", "Овчарска салата", "2,80", "500", ""],
["", "mekhandzhijska-salata", "Механджийска салата", "2,80", "500", ""],
["", "kalugerska-salata", "Калугерска салата", "2,80", "500", ""],
["", "zhtvarska-salata", "Жътварска салата", "2,80", "500", ""],
["", "trakijska-salata", "Тракийска салата", "2,80", "500", ""],
["", "zelenchukova-salata-asorti", "Зеленчукова салата Асорти", "2,80", "500", ""],
["", "selska-salata", "Селска салата", "2,10", "450", ""],
["", "salata-po-nashenski", "Салата по нашенски", "2,80", "450", ""],
["", "popska-salata", "Попска салата", "2,10", "500", ""],
["", "chobanska-salata", "Чобанска салата", "2,80", "500", ""],
["", "kukerska-salata", "Кукерска салата", "2,80", "500", ""],
["", "lovdzhijska-salata", "Ловджийска салата", "3,50", "500", ""],
["", "krali-marko", "Крали Марко", "2,80", "500", ""],
["", "bolyarska-salata", "Болярска салата", "2,80", "500", ""],
["", "czarska-salata", "Царска салата", "2,80", "500", ""],
["", "manastirska-salata", "Манастирска салата", "2,80", "500", ""],
["", "baj-gano", "Бай Ганьо", "2,10", "450", ""],
["", "salata-sezoni-ss-semena", "Салата Сезони със семена", "2,80", "500", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "550", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "2,80", "400", ""],
["", "morska-salata", "Морска салата", "3,50", "500", ""],
["", "salata-midi-s-luk", "Салата миди с лук", "2,80", "280", ""],
["", "salata-s-rolcza-ot-raczi", "Салата с ролца от раци", "2,80", "500", ""],
["", "salata-tiro", "Салата Тиро", "2,10", "300", ""],
["", "kasapska-salata", "Касапска салата", "6,30", "600", ""],
["", "shopska-salata", "Шопска салата", "2,10", "350", ""],
["", "krastaviczi", "Краставици", "2,10", "350", ""],
["", "domati", "Домати", "2,10", "350", ""],
["", "plneni-domati", "Пълнени домати", "2,80", "350", ""],
["", "katk", "Катък", "2,10", "350", ""],
["", "rodopski-katk", "Родопски катък", "2,10", "350", ""],
["", "mlechna-salata", "Млечна салата", "2,10", "300", ""],
["", "ruska-salata", "Руска салата", "2,10", "350", ""],
["", "vareni-kartofi-ss-sirene-i-zelen-luk", "Варени картофи със сирене и зелен лук", "2,10", "400", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "350", ""],
["", "vareni-kartofi-s-majoneza", "Варени картофи с майонеза", "1,40", "350", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "300", ""],
["", "kartofi-pile-majoneza", "Картофи, пиле, майонеза", "2,10", "350", ""],
["", "zele-morkovi", "Зеле, моркови", "1,40", "350", ""],
["", "zele-morkovi-majoneza", "Зеле, моркови, майонеза", "1,40", "400", ""],
["", "salata-morkovi-s-katk", "Салата моркови с катък", "2,10", "300", ""],
["", "pecheni-piperki", "Печени пиперки", "2,10", "280", ""],
["", "kopoolu", "Кьопоолу", "2,10", "350", ""],
["", "varen-bob-s-lyutenicza", "Варен боб с лютеница", "1,40", "300", ""],
["", "yajcza-s-majoneza", "Яйца с майонеза", "1,40", "250", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "300", ""],
["", "marulya-kiselo-mlyako-yajcze", "Маруля, кисело мляко, яйце", "2,10", "350", ""],
["", "chanovete", "Чановете", "6,30", "1000", ""],
["", "kombinirana-salata", "Комбинирана салата", "2,80", "500", ""]

            ],

            "Омлети": [
                ["", "omlet-natyur", "Омлет натюр", "1,40", "150", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "1,40", "170", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "1,40", "170", ""],
["", "omlet-s-gbi", "Омлет с гъби", "1,40", "170", ""],
["", "omlet-s-shunka", "Омлет с шунка", "1,40", "170", ""],
["", "omlet-asorti", "Омлет Асорти", "2,10", "200", ""],
["", "yajcza-na-ochi", "Яйца на очи", "1,40", "120", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "1,40", "160", ""],
["", "brkani-yajcza", "Бъркани яйца", "1,40", "120", ""]

            ],

            "Готвени ястия": [
                ["", "popska-yakhniya", "Попска яхния", "2,10", "350", ""],
["", "svinsko-ss-zelenchuczi", "Свинско със зеленчуци", "2,80", "350", ""],
["", "pileshko-ss-zelenchuczi", "Пилешко със зеленчуци", "2,80", "350", ""],
["", "vinen-kebap", "Винен кебап", "2,80", "350", ""],
["", "bob-po-khajdushki", "Боб по хайдушки", "2,80", "350", ""],
["", "zaek-po-lovdzhijski", "Заек по ловджийски", "4,20", "350", ""],
["", "pile-s-oriz", "Пиле с ориз", "2,80", "300", ""],
["", "svinsko-ss-zele", "Свинско със зеле", "2,80", "300", ""]

            ],

            "Месни ястия": [
                ["", "speczialitet-chanovete", "Специалитет Чановете", "16,80", "", ""],
["", "zapekanka-ss-svinsko-meso", "Запеканка със свинско месо", "7,00", "500", ""],
["", "svinska-przhola-s-manatarka-i-gben-sos", "Свинска пържола с манатарка и гъбен сос", "6,30", "300", ""],
["", "svinsko-v-smetanovo---kashkavalen-sos-s-gbi", "Свинско в сметаново - кашкавален сос с гъби", "6,30", "300", ""],
["", "file-na-tigan-svinsko-", "Филе на тиган (свинско )", "5,60", "200", ""],
["", "svinsko-file-po-lovdzhijski", "Свинско филе по ловджийски", "7,70", "500", ""],
["", "svinsko-file-po-trakijski", "Свинско филе по тракийски", "7,00", "500", ""],
["", "svinska-vratna-przhola-na-tigan", "Свинска вратна пържола на тиган", "5,60", "200", ""],
["", "svinsko-file-slncze", "Свинско филе Слънце", "7,00", "500", ""],
["", "chorbadzhijsko-meze-za-dvama", "Чорбаджийско мезе за двама", "11,20", "800", ""],
["", "meraklijsko-meze", "Мераклийско мезе", "10,50", "600", ""],
["", "mekhandzhijsko-meze-ss-svinsko-meso", "Механджийско мезе със свинско месо", "7,70", "400", ""],
["", "meze-po-khajdushki-za-dvama", "Мезе по хайдушки за двама", "9,80", "700", ""],
["", "vreteno", "Вретено", "8,40", "500", ""],
["", "kavrma-po-vodenicharski", "Кавърма по воденичарски", "7,70", "400", ""],
["", "kavrma-po-radomirski", "Кавърма по радомирски", "7,00", "400", ""],
["", "kavrma-v-omlet", "Кавърма в омлет", "7,70", "400", ""],
["", "svinska-kavrma", "Свинска кавърма", "5,60", "300", ""],
["", "sach-kavrma-za-dvama", "Сач кавърма за двама", "12,60", "900", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "8,40", "500", ""],
["", "shniczel-pane", "Шницел пане", "2,80", "200", ""],
["", "pikantni-svinski-kscheta", "Пикантни свински късчета", "6,30", "450", ""],
["", "ramstek-s-luk", "Рамстек с лук", "5,60", "300", ""],
["", "selska-bokhcha", "Селска бохча", "7,00", "400", ""],
["", "medalon-s-gbi", "Медальон с гъби", "6,30", "400", ""],
["", "drusan-kebat", "Друсан кебат", "4,20", "300", ""],
["", "chorbadzhijsko-sache-za-dvama", "Чорбаджийско саче за двама", "13,30", "900", ""]

            ],

            "grill": [
                ["", "svinsko-file", "Свинско филе", "4,90", "200", ""],
["", "marinovano-svinsko-file", "Мариновано свинско филе", "4,90", "200", ""],
["", "svinsko-file-ss-smetanov-sos", "Свинско филе със сметанов сос", "5,60", "350", ""],
["", "svinsko-file-ss-zelenchuczi-i-smetana", "Свинско филе със зеленчуци и сметана", "5,60", "530", ""],
["", "svinski-kareta-na-skara", "Свински карета на скара", "4,90", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "200", ""],
["", "marinovana-vratna-przhola", "Маринована вратна пържола", "4,90", "200", ""],
["", "svinska-vratna-przhola-s-topeno-sirene-smetana-i-luk", "Свинска вратна пържола с топено сирене, сметана и лук", "5,60", "320", ""],
["", "tpkani-kyuftencza-s-iznenada", "Тъпкани кюфтенца с изненада", "4,90", "400", ""],
["", "mecha-lapa", "Меча лапа", "4,90", "300", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "4,20", "300", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "krnache", "Кърначе", "1,40", "120", ""],
["", "shishche", "Шишче", "1,40", "100", ""],
["", "meshana-skara", "Мешана скара", "12,60", "800", ""],
["", "kasapsko-meze", "Касапско мезе", "8,40", "600", ""],
["", "tatarski-shish", "Татарски шиш", "9,80", "500", ""],
["", "svinski-shashlik", "Свински шашлик", "10,50", "500", ""],
["", "klczana-nadenicza", "Кълцана наденица", "4,20", "300", ""],
["", "rebra-na-skara", "Ребра на скара", "4,90", "300", ""]

            ],

            "Рибни ястия и деликатеси": [
                ["", "skumriya-na-skara", "Скумрия на скара", "4,90", "", ""],
["", "przhen-sharan", "Пържен шаран", "6,30", "300", ""],
["", "panirana-byala-riba", "Панирана бяла риба", "4,90", "200", ""],
["", "som-na-skara", "Сом на скара", "6,30", "250", ""],
["", "safrid", "Сафрид", "5,60", "300", ""],
["", "pastrva-na-skara", "Пастърва на скара", "6,30", "", ""],
["", "file-ot-somga-na-skara", "Филе от сьомга на скара", "12,60", "300", ""],
["", "panirani-midi", "Панирани миди", "4,20", "200", ""],
["", "rulcza-ot-raczi", "Рулца от раци", "2,10", "", ""],
["", "kalmari-pane", "Калмари пане", "10,50", "", ""],
["", "skaridi-v-maslo", "Скариди в масло", "7,00", "150", ""],
["", "lavrak", "Лаврак", "9,80", "", ""],
["", "czipura", "Ципура", "9,80", "", ""],
["", "zhabeshki-butcheta-pane", "Жабешки бутчета пане", "5,60", "150", ""],
["", "czacza", "Цаца", "2,80", "250", ""]

            ],

            "appetizer": [
                ["", "khapki-chanovete", "Хапки чановете", "4,20", "400", ""],
["", "cziganska-banicza", "Циганска баница", "1,40", "", ""],
["", "khapki-sirene-i-kashkaval", "Хапки сирене и кашкавал", "4,20", "190", ""],
["", "khapki-sirene", "Хапки сирене", "2,10", "180", ""],
["", "sirene-s-med-i-orekhi", "Сирене с мед и орехи", "4,20", "180", ""],
["", "khapki-kashkaval", "Хапки кашкавал", "2,10", "180", ""],
["", "topeno-sirene-s-kornflejks-i-borovinkovo-sladko", "Топено сирене с корнфлейкс и боровинково сладко", "4,20", "250", ""],
["", "magdanozeni-kyuftencza-ss-sos", "Магданозени кюфтенца със сос", "2,80", "250", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,20", "300", ""],
["", "pileshki-khapki-s-kornflejks-i-sos", "Пилешки хапки с корнфлейкс и сос", "4,20", "300", ""],
["", "pileshki-zhulien-s-maslo", "Пилешки жулиен с масло", "4,20", "250", ""],
["", "pileshki-khapki-s-tri-vida-sirena", "Пилешки хапки с три вида сирена", "5,60", "300", ""],
["", "sochni-pileshki-khapki-s-maslini-i-smetana", "Сочни пилешки хапки с маслини и сметана", "5,60", "350", ""],
["", "pileshki-khapki-s-parmezan", "Пилешки хапки с пармезан", "4,90", "300", ""],
["", "pileshki-khapki-s-kashkaval-i-gbi", "Пилешки хапки с кашкавал и гъби", "4,90", "300", ""],
["", "pileshki-khapki-s-topeno-sirene-smetana-i-luk", "Пилешки хапки с топено сирене, сметана и лук", "4,90", "370", ""],
["", "pikantni-pileshki-khapki", "Пикантни пилешки хапки", "6,30", "400", ""],
["", "pileshki-khapki-s-gben-sos-kartofi-i-kashkaval", "Пилешки хапки с гъбен сос, картофи и кашкавал", "5,60", "400", ""],
["", "pileshki-drob-s-luk", "Пилешки дроб с лук", "4,20", "300", ""],
["", "pileshki-kscheta-s-gbi-kashkaval-i-topeno-sirene", "Пилешки късчета с гъби, кашкавал и топено сирене", "4,90", "300", ""],
["", "pileshki-trtki-pane", "Пилешки трътки пане", "3,50", "300", ""],
["", "pileshki-trtki-na-skara", "Пилешки трътки на скара", "3,50", "300", ""],
["", "pileshki-trtki-przheni", "Пилешки трътки пържени", "3,50", "300", ""],
["", "khrupkavi-pileshki-krilcza", "Хрупкави пилешки крилца", "3,50", "250", ""],
["", "pileshki-vodenichki---panirani", "Пилешки воденички - панирани", "3,50", "250", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "3,50", "300", ""],
["", "pileshki-vodenichki", "Пилешки воденички", "3,50", "300", ""],
["", "vodenichki-po-selski", "Воденички по селски", "4,90", "350", ""],
["", "pileshki-srcza---panirani", "Пилешки сърца - панирани", "3,50", "250", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "3,50", "250", ""],
["", "smeseni-pileshki-drebolii", "Смесени пилешки дреболии", "4,20", "300", ""],
["", "svinski-khapki-s-luk", "Свински хапки с лук", "4,90", "300", ""],
["", "smeseni-khapki-s-tri-vida-sirena", "Смесени хапки с три вида сирена", "5,60", "300", ""],
["", "smeseni-khapki-s-bekon", "Смесени хапки с бекон", "5,60", "300", ""],
["", "svinski-khapki", "Свински хапки", "5,60", "300", ""],
["", "svinski-khapki-ss-sos", "Свински хапки със сос", "5,60", "350", ""],
["", "svinski-ushi", "Свински уши", "4,20", "250", ""],
["", "svinski-bekon-s-kozhichka", "Свински бекон с кожичка", "4,20", "250", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "4,20", "250", ""],
["", "svinski-drob-przhen", "Свински дроб пържен", "4,20", "250", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "4,20", "300", ""]

            ],

            "Пилешки специалитети": [
                ["", "pileshko-file-s-nezhen-smetanov-sos", "Пилешко филе с нежен сметанов сос", "6,30", "300", ""],
["", "pileshko-vreteno", "Пилешко вретено", "7,70", "400", ""],
["", "pileshko-po-lovdzhijski", "Пилешко по ловджийски", "6,30", "450", ""],
["", "pile-po-selski", "Пиле по селски", "4,90", "400", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "5,60", "300", ""],
["", "pileshka-mozajka", "Пилешка мозайка", "5,60", "400", ""],
["", "chorbadzhijski-sach-za-dvama", "Чорбаджийски сач за двама", "12,60", "800", ""],
["", "speczialitet-s-pileshka-przhola", "Специалитет с пилешка пържола", "6,30", "350", ""],
["", "pileshko-file-na-tigan", "Пилешко филе на тиган", "4,90", "200", ""],
["", "pileshko-file-ss-zelenchuczi", "Пилешко филе със зеленчуци", "6,30", "400", ""],
["", "khrupkavi-pileshki-filencza", "Хрупкави пилешки филенца", "5,60", "300", ""],
["", "pile-fantaziya", "Пиле Фантазия", "5,60", "350", ""],
["", "pileshka-przhola-na-tigan", "Пилешка пържола на тиган", "4,90", "200", ""],
["", "pile-zhulien-s-gbi-kiseli-krastavichki-shunka-i-smetana", "Пиле жулиен с гъби, кисели краставички, шунка и сметана", "6,30", "450", ""],
["", "pile-s-dzhindzhifil", "Пиле с джинджифил", "5,60", "250", ""]

            ],

            "Пилешки ястия на скара": [
                ["", "pileshko-file", "Пилешко филе", "4,20", "200", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "200", ""],
["", "marinovano-pileshko-file", "Мариновано пилешко филе", "4,20", "200", ""],
["", "pileshko-file-s-topeno-sirene-smetana-i-luk", "Пилешко филе с топено сирене, сметана и лук", "4,90", "300", ""],
["", "marinovana-pileshka-przhola", "Маринована пилешка пържола", "4,90", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "shashlik", "Шашлик", "9,10", "400", ""],
["", "pileshko-file-na-skara-plneno-s-topeno-sirene", "Пилешко филе на скара, пълнено с топено сирене", "5,60", "350", ""]

            ],

            "garnish": [
                ["", "yajcze", "Яйце", "0,00", "", ""],
["", "katk", "Катък", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "0,00", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "2,80", "", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "150", ""],
["", "studena-garnitura", "Студена гарнитура", "0,70", "120", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "120", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "120", ""],
["", "varen-bob-s-lyutenicza", "Варен боб с лютеница", "0,70", "120", ""],
["", "czarevicza", "Царевица", "0,70", "100", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "limon", "Лимон", "0,70", "", ""]

            ],

            "sauces": [
                ["", "gben-sos", "Гъбен сос", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "mlechno-majonezen-sos", "Млечно-майонезен сос", "0,70", "100", ""],
["", "soev-sos", "Соев сос", "0,00", "80", ""]

            ],

            "dry-appetizer": [
                ["", "sirene", "Сирене", "0,00", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""]

            ],

            "desserts": [
                ["", "solena-palachinka", "Солена палачинка", "1,40", "", ""],
["", "sladka-palachinka", "Сладка палачинка", "1,40", "", ""],
["", "domashna-torta-s-maskarpone", "Домашна торта с маскарпоне", "2,10", "150", ""],
["", "biskvitena-torta", "Бисквитена торта", "1,40", "150", ""],
["", "sladk-salam", "Сладък салам", "1,40", "150", ""],
["", "krem-karamel", "Крем карамел", "0,70", "", ""]

            ],

            "wine": [
                ["", "enira-rezerva", "Енира резерва", "38,50", "", ""],
["", "enira", "Енира", "25,20", "", ""],
["", "midalidare-merlo", "Мидалидаре Мерло", "21,00", "", ""],
["", "midalidare-akrobaleno", "Мидалидаре Акробалено", "16,10", "", ""],
["", "bratya-minkovi---kaberne", "Братя Минкови - Каберне", "16,10", "", ""],
["", "bratya-minkovi---sira", "Братя Минкови - Сира", "16,10", "", ""],
["", "stambolovo-metalen-etiket-2007", "Стамболово метален етикет 2007", "30,10", "", ""],
["", "stambolovo-estejt-merlo--mavrud", "Стамболово Естейт Мерло & Мавруд", "12,60", "", ""],
["", "stambolovo-estejt-merlo--sira", "Стамболово Естейт Мерло & Сира", "12,60", "", ""],
["", "mavrud-speczialna-rezerva-ikona", "Мавруд специална резерва Икона", "11,20", "", ""],
["", "asenovgrad-mavrud-rezerva", "Асеновград Мавруд резерва", "9,80", "", ""],
["", "asenovgrad-mavrud", "Асеновград Мавруд", "9,10", "", ""],
["", "sajkl-pino-noar", "Сайкъл Пино Ноар", "9,80", "", ""],
["", "sajkl-merlo--pino-noar", "Сайкъл Мерло & Пино Ноар", "9,80", "", ""],
["", "sajkl-sira--merlo--kaberne", "Сайкъл Сира & Мерло & Каберне", "9,80", "", ""],
["", "sajkl-kaberne-sovinon--kaberne-fran--merlo", "Сайкъл Каберне Совиньон & Каберне Фран & Мерло", "9,80", "", ""],
["", "sajkl-etno-merlo", "Сайкъл Етно Мерло", "7,70", "", ""],
["", "sajkl-etno-kaberne--mavrud", "Сайкъл Етно Каберне & Мавруд", "7,70", "", ""],
["", "shato-karnobat-kaberne-sovinon", "Шато Карнобат Каберне Совиньон", "7,70", "", ""],
["", "shato-karnobat-merlo", "Шато Карнобат Мерло", "7,70", "", ""],
["", "shato-karnobat-mavrud", "Шато Карнобат Мавруд", "7,70", "", ""],
["", "shato-karnobat-sira", "Шато Карнобат Сира", "7,70", "", ""]

            ],

            "beer": [
                ["", "kamenicza", "Каменица", "1,40", "500", ""],
["", "becks", "Beck’s", "1,40", "500", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""],
["", "staropramen", "Старопрамен", "1,40", "500", ""],
["", "burgasko-svetlo", "Бургаско светло", "1,40", "500", ""],
["", "kamenicza-tmno", "Каменица тъмно", "1,40", "500", ""],
["", "staropramen-tmno", "Старопрамен тъмно", "1,40", "500", ""],
["", "lefe", "Лефе", "2,80", "330", ""],
["", "korona", "Корона", "2,80", "350", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/838364.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/838365.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/838366.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/838367.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/838368.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/838370.jpg?width=302"]

            ],

            "drinks": [
                ["", "prechistena-voda-czepter", "Пречистена вода Цептер", "0,00", "250", ""],
["", "prechistena-voda-czepter", "Пречистена вода Цептер", "1,40", "1000", ""],
["", "studen-chaj", "Студен чай", "1,40", "250", ""],
["", "domaten-sok", "Доматен сок", "0,70", "250", ""],
["", "fresh", "Фреш", "1,40", "200", ""],
["", "mineralna-voda-devin", "Минерална вода Девин", "0,70", "500", ""],
["", "mineralna-voda-devin", "Минерална вода Девин", "1,40", "1500", ""],
["", "ajryan", "Айрян", "0,70", "250", ""]

            ]
        }', 
        'slug' => 'mehana-chanovete-stara-zagora',
        'business_name' => 'Механа Чановете (Стара Загора)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Поп Минчо Кънчев 137',
        'address_additional' => '',
        'coords_x' => '42.42669',
        'coords_y' => '25.62139',
        'phone' => '+359888649140; +359895601533',
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
                ["", "salata-kosharite", "Салата Кошарите", "8,40", "700", ""],
["", "shopska-salata", "Шопска салата", "3,50", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "zhtvarska-salata", "Жътварска салата", "3,50", "350", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "rodopska-salata-s-pileshko", "Родопска салата с пилешко", "4,20", "400", ""],
["", "redena-salata", "Редена салата", "3,50", "350", ""],
["", "redena-salata-s-plochka-sirene-ili-katk", "Редена салата с плочка сирене или катък", "3,50", "400", ""],
["", "salata-domati", "Салата домати", "2,80", "350", ""],
["", "salata-krastaviczi", "Салата краставици", "2,80", "350", ""],
["", "domati-s-katk", "Домати с катък", "3,50", "350", ""],
["", "domati-ss-sirene", "Домати със сирене", "3,50", "350", ""],
["", "krastaviczi-s-katk", "Краставици с катък", "2,80", "400", ""],
["", "krastaviczi-ss-sirene", "Краставици със сирене", "2,80", "400", ""],
["", "kapreze", "Капрезе", "4,90", "350", ""],
["", "pecheni-piperki", "Печени пиперки", "2,80", "350", ""],
["", "pecheni-piperki-s-katk", "Печени пиперки с катък", "3,50", "400", ""],
["", "pecheni-piperki-ss-sirene", "Печени пиперки със сирене", "3,50", "400", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "250", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,80", "300", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "300", ""],
["", "zelena-salata-s-pileshko-file", "Зелена салата с пилешко филе", "4,20", "350", ""],
["", "zele-i-morkovi", "Зеле и моркови", "2,80", "350", ""],
["", "zele-morkovi-i-majoneza", "Зеле, моркови и майонеза", "3,50", "450", ""],
["", "maslini-s-luk", "Маслини с лук", "2,80", "200", ""],
["", "kiseli-krastavichki", "Кисели краставички", "2,80", "250", ""],
["", "salata-vareni-kartofi-s-luk", "Салата варени картофи с лук", "2,80", "300", ""],
["", "salata-czveklo-morkovi-i-yablka", "Салата цвекло, моркови и ябълка", "3,50", "300", ""]

            ],

            "Топли предястия": [
                ["", "presni-kartofki", "Пресни картофки", "2,10", "250", ""],
["", "presni-kartofki-ss-sirene", "Пресни картофки със сирене", "2,10", "300", ""],
["", "przheni-kartofki", "Пържени картофки", "2,10", "250", ""],
["", "przheni-kartofki-ss-sirene", "Пържени картофки със сирене", "2,10", "300", ""],
["", "przheni-kartofki-s-kashkaval", "Пържени картофки с кашкавал", "2,10", "300", ""],
["", "khrupkavi-kartofki", "Хрупкави картофки", "2,10", "250", ""],
["", "pikanti-kartofki-po-selski", "Пиканти картофки по селски", "2,10", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "panirani-sirencza", "Панирани сиренца", "3,50", "300", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "4,20", "300", ""],
["", "panirani-topeni-sirencza", "Панирани топени сиренца", "3,50", "300", ""],
["", "panirani-topeni-sirencza-s-kornflejks", "Панирани топени сиренца с корнфлейкс", "3,50", "300", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "300", ""],
["", "sirene-na-plocha-s-med-i-orekhi", "Сирене на плоча с мед и орехи", "3,50", "300", ""],
["", "chushka-byurek", "Чушка бюрек", "2,80", "", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "3,50", "400", ""],
["", "oriz-ss-zadusheni-zelenchuczi", "Ориз със задушени зеленчуци", "4,20", "300", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "1,40", "200", ""],
["", "kalmari", "Калмари", "4,20", "250", ""],
["", "gbki-v-maslcze", "Гъбки в масълце", "3,50", "300", ""],
["", "gbki-s-bekon-i-kashkaval", "Гъбки с бекон и кашкавал", "4,20", "300", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "3,50", "300", ""],
["", "svinski-ezik-v-maslo", "Свински език в масло", "4,20", "200", ""],
["", "svinski-ezik-natyur", "Свински език натюр", "4,20", "200", ""],
["", "agneshki-drebolijki-v-maslo", "Агнешки дреболийки в масло", "3,50", "300", ""],
["", "agneshki-drebolijki-ss-zadusheni-zelenchuczi", "Агнешки дреболийки със задушени зеленчуци", "4,20", "400", ""]

            ],

            "Гювечета и запеканки": [
                ["", "sirene-po-shopski", "Сирене по Шопски", "3,50", "300", ""],
["", "gyuveche-po-trakijski", "Гювече по Тракийски", "4,20", "300", ""],
["", "gyuveche-po-ovcharski", "Гювече по Овчарски", "4,20", "300", ""],
["", "zapekanka-s-pileshko-meso", "Запеканка с пилешко месо", "4,20", "300", ""],
["", "zapekanka-ss-svinsko-meso", "Запеканка със свинско месо", "4,20", "300", ""],
["", "vegetarianska-zapekanka", "Вегетарианска запеканка", "3,50", "300", ""]

            ],

            "Вкусотийки от пилешко месце": [
                ["", "pileshki-zhuliencheta", "Пилешки жулиенчета", "4,20", "350", ""],
["", "pileshki-khapki-s-luk", "Пилешки хапки с лук", "4,20", "350", ""],
["", "pileshki-khapki-s-gbi-i-kashkaval", "Пилешки хапки с гъби и кашкавал", "4,20", "350", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,20", "350", ""],
["", "pileshki-susamki", "Пилешки сусамки", "4,20", "350", ""],
["", "pileshka-iznenada", "Пилешка изненада", "5,60", "350", ""],
["", "pileshki-khapki-s-topeno-sirene-i-smetana", "Пилешки хапки с топено сирене и сметана", "4,20", "300", ""],
["", "pileshki-khapki-ss-smetana-po-ovcharski", "Пилешки хапки със сметана по Овчарски", "4,90", "350", ""],
["", "pileshko-plato", "Пилешко плато", "5,60", "450", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,20", "350", ""],
["", "plato-khapki-miks", "Плато хапки микс", "5,60", "450", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "350", ""],
["", "pileshki-drobcheta-pane", "Пилешки дробчета пане", "3,50", "350", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "4,20", "350", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "4,20", "350", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "4,20", "300", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "4,20", "350", ""],
["", "pileshki-drebolijki-s-luk", "Пилешки дреболийки с лук", "4,20", "350", ""],
["", "pileshki-drebolijki-ss-zadusheni-zelenchuczi", "Пилешки дреболийки със задушени зеленчуци", "4,90", "350", ""],
["", "pileshki-trtki", "Пилешки трътки", "3,50", "300", ""]

            ],

            "Вкусотийки от свинско месце": [
                ["", "svinski-khapki-s-luk", "Свински хапки с лук", "4,20", "350", ""],
["", "svinski-khapki-s-gbi-i-kashkaval", "Свински хапки с гъби и кашкавал", "4,90", "350", ""],
["", "ezik-v-maslo", "Език в масло", "4,20", "200", ""],
["", "svinska-kavrma", "Свинска кавърма", "5,60", "350", ""],
["", "kasapsko-meze", "Касапско мезе", "4,90", "400", ""],
["", "svinski-drob", "Свински дроб", "4,20", "300", ""],
["", "svinski-drob-s-luk", "Свински дроб с лук", "4,20", "350", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "4,20", "350", ""],
["", "shniczel-pane-ot-svinsko-meso-s-garnitura-przheni-kartofi", "Шницел пане от свинско месо с гарнитура пържени картофи", "5,60", "300", ""],
["", "svinski-khapki-ot-file-s-luk", "Свински хапки от филе с лук", "5,60", "350", ""],
["", "svinski-khapki-s-gbi-i-luk", "Свински хапки с гъби и лук", "4,90", "350", ""],
["", "svinski-ushi", "Свински уши", "4,20", "300", ""]

            ],

            "specialties": [
                ["", "speczialitet-kosharite", "Специалитет Кошарите", "12,60", "700", ""],
["", "pileshko-file-s-gben-sos-i-kartofeno-pyure", "Пилешко филе с гъбен сос и картофено пюре", "6,30", "350", ""],
["", "svinsko-file-s-gben-sos-i-kartofeno-pyure", "Свинско филе с гъбен сос и картофено пюре", "7,00", "350", ""]

            ],

            "Сачета": [
                ["", "sach-kosharite", "Сач Кошарите", "15,40", "800", ""],
["", "khanski-sach-ot-svinsko-meso", "Хански сач от свинско месо", "11,20", "700", ""],
["", "khanski-sach-ot-pileshko-meso", "Хански сач от пилешко месо", "11,20", "700", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "7,00", "400", ""]

            ],

            "Балканска скара": [
                ["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "nervozno-kyufte", "Нервозно кюфте", "2,10", "100", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,10", "200", ""],
["", "nadenichka", "Наденичка", "1,40", "150", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "150", ""],
["", "kombinirano-shishche", "Комбинирано шишче", "2,10", "150", ""],
["", "pushen-svinski-bekon-na-skara", "Пушен свински бекон на скара", "4,90", "300", ""],
["", "svinski-rebra", "Свински ребра", "4,90", "350", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "300", ""],
["", "svinski-karencza-na-skara", "Свински каренца на скара", "5,60", "300", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "300", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "4,90", "300", ""],
["", "meshana-skara", "Мешана скара", "12,60", "700", ""],
["", "svinski-shashlik", "Свински шашлик", "14,70", "1000", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "14,00", "", ""],
["", "smesen-shashlik", "Смесен шашлик", "14,70", "1000", ""],
["", "sudzhuk-na-skara", "Суджук на скара", "7,00", "", ""]

            ],

            "fish": [
                ["", "pstrva", "Пъстърва", "7,00", "400", ""],
["", "czipura-na-skara", "Ципура на скара", "9,80", "400", ""],
["", "lavrak-na-skara", "Лаврак на скара", "10,50", "400", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "300", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "300", ""],
["", "agneshka-chorba", "Агнешка чорба", "1,40", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "1,40", "", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,10", "", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "2,10", "", ""],
["", "sandvich-s-kajma", "Сандвич с кайма", "2,10", "", ""],
["", "sandvich-s-kajma-i-kashkaval", "Сандвич с кайма и кашкавал", "2,10", "", ""]

            ],

            "Ястия с яйца": [
                ["", "omlet-natyur", "Омлет натюр", "1,40", "200", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "1,40", "250", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "250", ""],
["", "omlet-s-kashkaval-i-sirene", "Омлет с кашкавал и сирене", "2,10", "250", ""],
["", "omlet-s-shunka-i-kashkaval", "Омлет с шунка и кашкавал", "2,10", "250", ""],
["", "omlet-s-shunka-i-sirene", "Омлет с шунка и сирене", "2,10", "250", ""],
["", "omlet-asorti", "Омлет асорти", "2,80", "300", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "250", ""],
["", "mish-mash", "Миш-маш", "2,10", "200", ""],
["", "brkani-yajcza", "Бъркани яйца", "1,40", "150", ""],
["", "vareno-yajcze", "Варено яйце", "0,00", "", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,70", "150", ""],
["", "krastaviczi", "Краставици", "0,70", "150", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "1,40", "150", ""],
["", "zele-i-morkovi", "Зеле и моркови", "0,70", "150", ""],
["", "przheni-kartofki", "Пържени картофки", "0,70", "150", ""],
["", "przheni-kartofki-ss-sirene", "Пържени картофки със сирене", "1,40", "180", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "150", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "150", ""],
["", "oriz-ss-zadusheni-zelenchuczi", "Ориз със задушени зеленчуци", "2,10", "150", ""],
["", "czarevicza", "Царевица", "0,70", "150", ""],
["", "marulya", "Маруля", "0,70", "150", ""],
["", "lyutenicza", "Лютеница", "0,70", "150", ""],
["", "kiseli-krastavichki", "Кисели краставички", "1,40", "150", ""],
["", "topka-oriz", "Топка ориз", "0,00", "50", ""],
["", "topka-katk", "Топка катък", "0,70", "50", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "vareno-yajcze", "Варено яйце", "0,00", "", ""],
["", "rezen-limon", "Резен лимон", "0,00", "", ""]

            ],

            "Сухи мезета": [
                ["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "lukanka", "Луканка", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "plato-studeni-mezeta", "Плато студени мезета", "10,50", "250", ""]

            ],

            "bread": [
                ["", "filijka", "Филийка", "0,00", "", ""],
["", "prlenka", "Пърленка", "1,40", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "1,40", "", ""]

            ],

            "sauces": [
                ["", "gben-sos", "Гъбен сос", "0,70", "100", ""],
["", "mlechen-sos", "Млечен сос", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "ketchup", "Кетчуп", "0,70", "100", ""],
["", "majoneza", "Майонеза", "0,70", "100", ""],
["", "chili-sos", "Чили сос", "0,70", "100", ""],
["", "kiselo-mlyako", "Кисело мляко", "0,00", "100", ""],
["", "sladko-ot-borovinki", "Сладко от боровинки", "0,70", "100", ""],
["", "zekhtin", "Зехтин", "0,70", "50", ""],
["", "oczet-balsamiko", "Оцет Балсамико", "0,70", "50", ""]

            ],

            "desserts": [
                ["", "plodova-salata", "Плодова салата", "2,10", "250", ""],
["", "palachinka", "Палачинка", "0,70", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "1,40", "", ""],
["", "palachinka-s-med", "Палачинка с мед", "1,40", "", ""],
["", "palachinka-ss-sirene-i-kashkaval", "Палачинка със сирене и кашкавал", "1,40", "", ""],
["", "palachinka-s-shunka-i-kashkaval", "Палачинка с шунка и кашкавал", "1,40", "", ""],
["", "palachinka-s-shunka-i-sirene", "Палачинка с шунка и сирене", "1,40", "", ""],
["", "biskvitena-torta", "Бисквитена торта", "1,40", "", ""],
["", "czedeno-mlyako-ss-sladko-ot-borovinki", "Цедено мляко със сладко от боровинки", "0,70", "", ""]

            ]
        }', 
        'slug' => 'mehana-kosharite',
        'business_name' => 'Механа Кошарите',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6014',
        'address' => 'ул. Загорка 35',
        'address_additional' => '',
        'coords_x' => '42.41188425',
        'coords_y' => '25.59307824',
        'phone' => '+359899869905',
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
                ["", "salata-chervenata-cheshma", "Салата Червената чешма", "6,30", "600", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "600", ""],
["", "zhtvarska-salata", "Жътварска салата", "3,50", "400", ""],
["", "salata-retro", "Салата Ретро", "3,50", "400", ""],
["", "salata-kapriz", "Салата Каприз", "3,50", "400", ""],
["", "morska-salata", "Морска салата", "3,50", "300", ""],
["", "salata-slnchogled", "Салата Слънчоглед", "5,60", "300", ""],
["", "selska-salata", "Селска салата", "3,50", "450", ""],
["", "shefska-slata", "Шефска слата", "6,30", "500", ""],
["", "bolyarska-salata", "Болярска салата", "4,20", "500", ""],
["", "pileshka-salata", "Пилешка салата", "3,50", "350", ""],
["", "salata-solomon", "Салата Соломон", "4,20", "350", ""],
["", "shopska-salata", "Шопска салата", "3,50", "450", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "450", ""],
["", "zelena-salata", "Зелена салата", "3,50", "400", ""],
["", "salata-pecheni-piperki", "Салата печени пиперки", "2,80", "300", ""],
["", "pecheni-piperki-s-katk", "Печени пиперки с катък", "3,50", "350", ""],
["", "piperki-ss-sirene", "Пиперки със сирене", "3,50", "350", ""],
["", "czarevicza-s-majoneza", "Царевица с майонеза", "2,10", "200", ""],
["", "salata-ot-kartofi-bekon-i-kiseli-krastavichki", "Салата от картофи, бекон и кисели краставички", "3,50", "400", ""],
["", "meksikanska-slata", "Мексиканска слата", "2,80", "400", ""],
["", "meshana-s-katk", "Мешана с катък", "3,50", "450", ""],
["", "meshana-ss-sirene", "Мешана със сирене", "3,50", "450", ""],
["", "snezhanka", "Снежанка", "2,80", "250", ""],
["", "katk", "Катък", "2,80", "250", ""],
["", "zele-s-morkovi-300gr0", "Зеле с моркови (300гр0", "2,10", "", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,10", "350", ""],
["", "salata-kartofi-s-majoneza", "Салата картофи с майонеза", "2,10", "350", ""],
["", "salata-maslini-s-luk", "Салата маслини с лук", "2,10", "200", ""],
["", "meshana-salata", "Мешана салата", "2,80", "400", ""],
["", "salata-domati", "Салата домати", "2,80", "400", ""],
["", "salata-krastaviczi", "Салата краставици", "2,80", "400", ""],
["", "domati-s-katk", "Домати с катък", "3,50", "450", ""],
["", "domati-ss-sirene", "Домати със сирене", "3,50", "450", ""],
["", "krastaviczi-s-katk", "Краставици с катък", "3,50", "450", ""],
["", "krastaviczi-ss-sirene", "Краставици със сирене", "3,50", "450", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "450", ""],
["", "salata-morkovi", "Салата моркови", "2,10", "300", ""],
["", "zele-s-majoneza", "Зеле с майонеза", "2,10", "300", ""],
["", "vitaminoza", "Витаминоза", "2,80", "500", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "350", ""],
["", "razyadka", "Разядка", "3,50", "350", ""]

            ],

            "Студени предястия": [
                ["", "pastrma", "Пастърма", "2,80", "50", ""],
["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "sirene", "Сирене", "0,00", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "ezik-natyur", "Език натюр", "2,80", "150", ""]

            ],

            "Топли предястия": [
                ["", "vlcho-sakhanche", "Вълчо саханче", "7,70", "300", ""],
["", "drobcheta-po-strandzhanski", "Дробчета по странджански", "3,50", "400", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "pileshki-krilcza-pane", "Пилешки крилца пане", "3,50", "500", ""],
["", "ezik-s-maslo", "Език с масло", "4,20", "150", ""],
["", "ezik-pane", "Език пане", "4,20", "200", ""],
["", "pileshki-trtki-na-skara", "Пилешки трътки на скара", "2,80", "200", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "450", ""],
["", "vodenichki-s-luk", "Воденички с лук", "3,50", "300", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "300", ""],
["", "svinski-drob-przhen", "Свински дроб пържен", "3,50", "300", ""],
["", "svinski-drob-s-luk", "Свински дроб с лук", "3,50", "350", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "3,50", "350", ""],
["", "svinski-ushi-na-skara", "Свински уши на скара", "4,90", "350", ""],
["", "pastrma-s-luk", "Пастърма с лук", "7,00", "150", ""],
["", "shkembe-s-maslo", "Шкембе с масло", "3,50", "150", ""],
["", "gbi-s-maslo", "Гъби с масло", "2,80", "150", ""],
["", "chushka-byurek", "Чушка бюрек", "3,50", "250", ""],
["", "pileshki-khapki-s-luk-i-gbi", "Пилешки хапки с лук и гъби", "4,20", "350", ""],
["", "pileshki-khapki-s-gbi-kashkaval-i-luk", "Пилешки хапки с гъби, кашкавал и лук", "4,90", "350", ""],
["", "katino-meze", "Катино мезе", "6,30", "600", ""],
["", "agneshki-drebolii-na-sach", "Агнешки дреболии на сач", "7,70", "400", ""],
["", "agneshka-glavichka-s-maslo-obezkostena", "Агнешка главичка с масло обезкостена", "6,30", "150", ""],
["", "plneni-gbi-s-tri-vida-sirena", "Пълнени гъби с три вида сирена", "5,60", "300", ""],
["", "khrupkavi-przheni-tikvichki", "Хрупкави пържени тиквички", "3,50", "300", ""],
["", "brokoli-ss-sino-sirene-i-smetana", "Броколи със синьо сирене и сметана", "4,90", "300", ""],
["", "kavrma-po-radomirski", "Кавърма по радомирски", "6,30", "300", ""],
["", "kavrma-po-belopolski", "Кавърма по белополски", "6,30", "300", ""],
["", "kavrma-v-omlet", "Кавърма в омлет", "7,00", "350", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "6,30", "300", ""],
["", "pikantni-przholi", "Пикантни пържоли", "6,30", "450", ""],
["", "przhola-palas", "Пържола палас", "7,00", "350", ""],
["", "svinski-khapki-s-luk", "Свински хапки с лук", "4,90", "250", ""],
["", "svinsko-file-s-gbi-i-kashkaval", "Свинско филе с гъби и кашкавал", "6,30", "350", ""],
["", "svinsko-file-natyur", "Свинско филе натюр", "4,90", "200", ""],
["", "svinski-zhulien", "Свински Жулиен", "5,60", "250", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "5,60", "350", ""],
["", "svinsko-file-ss-smetana-i-pusheno-sirene", "Свинско филе със сметана и пушено сирене", "7,00", "250", ""],
["", "svinski-khapki-s-gbi-i-kashkaval", "Свински хапки с гъби и кашкавал", "6,30", "350", ""],
["", "svinski-khapki-s-pusheno-sirene-i-kiseli-krastavichki", "Свински хапки с пушено сирене и кисели краставички", "10,50", "600", ""],
["", "svinski-stek", "Свински стек", "7,00", "350", ""],
["", "pajdaki-ot-svinsko-kontra-file", "Пайдаки от свинско контра филе", "6,30", "300", ""]

            ],

            "Аламинути от пиле": [
                ["", "sombredo", "Сомбредо", "6,30", "400", ""],
["", "pileshki-khapki-ss-smetana-pusheno-sirene-i-kiseli-krastavichki", "Пилешки хапки със сметана, пушено сирене и кисели краставички", "9,10", "600", ""],
["", "plneni-pileshki-grdi", "Пълнени пилешки гърди", "6,30", "400", ""],
["", "pileshko-file-ss-smetana-i-topeno-sirene", "Пилешко филе със сметана и топено сирене", "7,00", "400", ""],
["", "pilesh-file-s-majoneza-i-kashkaval", "Пилеш филе с майонеза и кашкавал", "5,60", "400", ""],
["", "pileshki-khapki-s-chushka-i-smetana", "Пилешки хапки с чушка и сметана", "6,30", "400", ""],
["", "pileshko-file-vreteno", "Пилешко филе вретено", "6,30", "400", ""],
["", "pile-po-meksikanski", "Пиле по мексикански", "5,60", "350", ""],
["", "pile-po-provanski", "Пиле по провански", "5,60", "350", ""],
["", "pile-pasta", "Пиле паста", "4,90", "600", ""],
["", "pileshki-purichki", "Пилешки пурички", "4,20", "350", ""],
["", "pileshki-kareta-na-skara", "Пилешки карета на скара", "3,50", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "130", ""],
["", "pileshka-przhola-s-gben-sos", "Пилешка пържола с гъбен сос", "4,90", "300", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "4,90", "300", ""],
["", "pileshki-zhulien", "Пилешки Жулиен", "4,20", "400", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,20", "350", ""],
["", "pileshki-drob-pane", "Пилешки дроб пане", "3,50", "350", ""],
["", "pileshki-vodenichki-pane", "Пилешки воденички пане", "3,50", "350", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,20", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,90", "300", ""]

            ],

            "Аламинути от свинско": [
                ["", "stek-kordon-blo", "Стек кордон бльо", "7,00", "250", ""],
["", "svinsko-file-vreteno", "Свинско филе вретено", "7,00", "250", ""],
["", "kavrma-v-gyuveche", "Кавърма в гювече", "5,60", "200", ""]

            ],

            "Аламинути от млечни продукти": [
                ["", "sirene-po-trakijski", "Сирене по тракийски", "3,50", "250", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "200", ""],
["", "kashkaval-po-chorbadzhijski", "Кашкавал по чорбаджийски", "4,20", "350", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "150", ""],
["", "sirene-pane", "Сирене пане", "2,80", "150", ""],
["", "khrupkavi-sirencza", "Хрупкави сиренца", "3,50", "250", ""],
["", "khrupkavi-kashkavalcheta", "Хрупкави кашкавалчета", "4,90", "250", ""],
["", "sirene-na-kapak", "Сирене на капак", "2,10", "150", ""],
["", "kashkavaleni-prchiczi", "Кашкавалени пръчици", "4,90", "250", ""],
["", "topeni-sirencza", "Топени сиренца", "4,20", "220", ""]

            ],

            "Аламинути от риба": [
                ["", "skumriya-na-skara", "Скумрия на скара", "3,50", "", ""],
["", "file-khek-pane", "Филе хек пане", "4,90", "300", ""],
["", "pstrva-przhena", "Пъстърва пържена", "6,30", "", ""],
["", "rulcza-ot-raczi-pane", "Рулца от раци пане", "2,10", "", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "6,30", "", ""],
["", "czipura-na-skara", "Ципура на скара", "10,50", "", ""],
["", "lavrak-na-skara", "Лаврак на скара", "11,20", "", ""],
["", "khrupkavi-kalmari", "Хрупкави калмари", "9,10", "250", ""]

            ],

            "Аламинути от яйца": [
                ["", "omlet-asorti", "Омлет асорти", "2,80", "200", ""],
["", "omlet-natyur", "Омлет натюр", "2,10", "150", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "170", ""],
["", "omlet-s-gbi", "Омлет с гъби", "2,10", "170", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,10", "170", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "170", ""],
["", "mish-mash", "Миш-маш", "2,80", "200", ""],
["", "omlet-ss-sirene-i-kashkaval", "Омлет със сирене и кашкавал", "2,80", "170", ""]

            ],

            "Национална кухня": [
                ["", "speczialitet-chervena-cheshma", "Специалитет Червена чешма", "9,80", "700", ""],
["", "pileshki-krilcza-pikant", "Пилешки крилца пикант", "3,50", "500", ""],
["", "przhola-s-yajcze-i-luk", "Пържола с яйце и лук", "5,60", "350", ""],
["", "speczialitet-na-majstora", "Специалитет на майстора", "9,10", "600", ""]

            ],

            "Атракция на заведението": [
                ["", "pileshko-sache", "Пилешко саче", "9,80", "750", ""],
["", "svinsko-sache", "Свинско саче", "11,20", "750", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "svinsko-shishche", "Свинско Шишче", "2,10", "120", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "220", ""],
["", "nervozno-kyufte", "Нервозно кюфте", "0,70", "115", ""],
["", "shashlik-po-kukerski", "Шашлик по кукерски", "4,90", "300", ""],
["", "kasapsko-meze", "Касапско мезе", "6,30", "500", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""],
["", "svinski-rebra", "Свински ребра", "7,00", "500", ""],
["", "svinski-grdi-bez-kost", "Свински гърди без кост", "5,60", "400", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "5,60", "", ""],
["", "meshana-skara", "Мешана скара", "9,80", "700", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-pileshko-file-i-kashkaval", "Запеканка с пилешко филе и кашкавал", "4,90", "400", ""],
["", "zapekanka-s-bekon", "Запеканка с бекон", "4,90", "400", ""],
["", "zelenchukova-zapekanka-s-brokoli-i-kashkaval", "Зеленчукова запеканка с броколи и кашкавал", "4,90", "400", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "300", ""],
["", "kartofi-ss-sirene", "Картофи със сирене", "2,10", "350", ""],
["", "przheni-kartofi-s-kashkaval-i-sirene", "Пържени картофи с кашкавал и сирене", "2,10", "350", ""],
["", "przheni-kartofi-s-kashkaval", "Пържени картофи с кашкавал", "2,10", "350", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""],
["", "rizoto", "Ризото", "2,10", "200", ""],
["", "zadusheni-kartofi", "Задушени картофи", "2,10", "250", ""],
["", "rezen-limon", "Резен лимон", "0,00", "", ""],
["", "limon-12", "Лимон 1/2", "0,70", "", ""],
["", "topka-katk", "Топка катък", "0,00", "", ""],
["", "topka-mlechna-salata", "Топка млечна салата", "0,00", "", ""],
["", "riba-ton", "Риба тон", "1,40", "", ""],
["", "topka-majoneza", "Топка майонеза", "0,70", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "vareno-yajcze", "Варено яйце", "0,00", "", ""],
["", "chesnova-filijka", "Чеснова филийка", "0,00", "", ""],
["", "presni-kartofi", "Пресни картофи", "2,10", "400", ""],
["", "presni-kartofi-ss-sirene", "Пресни картофи със сирене", "2,80", "450", ""]

            ],

            "Пърленки": [
                ["", "prlenka", "Пърленка", "0,70", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "", ""],
["", "prlenka-kombinirana", "Пърленка комбинирана", "2,10", "", ""]

            ],

            "sauces": [
                ["", "gben-sos", "Гъбен сос", "0,70", "", ""],
["", "ketchup", "Кетчуп", "0,70", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "", ""],
["", "zekhtin", "Зехтин", "0,00", "", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "2,80", "", ""],
["", "maskarpone", "Маскарпоне", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'mehana-chervenata-cheshma',
        'business_name' => 'Механа Червената чешма',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6003',
        'address' => 'ул. Свети Княз Борис 35А',
        'address_additional' => '',
        'coords_x' => '42.4241867',
        'coords_y' => '25.6187347',
        'phone' => '+359885339001',
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
                ["", "malk-dyuner", "Малък дюнер", "2,10", "", ""],
["", "sreden-dyuner", "Среден дюнер", "2,80", "", ""],
["", "golyam-dyuner", "Голям дюнер", "3,50", "", ""],
["", "malk-dyuner-s-dvojno-meso", "Малък дюнер с двойно месо", "2,80", "", ""],
["", "sreden-dyuner-s-dvojno-meso", "Среден дюнер с двойно месо", "4,20", "", ""],
["", "golyam-dyuner-s-dvojno-meso", "Голям дюнер с двойно месо", "5,60", "", ""],
["", "shish-tauk", "Шиш таук", "3,50", "", ""],
["", "shish-tauk-porcziya", "Шиш таук порция", "7,00", "900", ""],
["", "porcziya-dyuner", "Порция дюнер", "6,30", "900", ""]

            ],

            "Бургери и тостове": [
                ["", "burger-ss-svinsko-kyufte", "Бургер със свинско кюфте", "2,80", "", ""],
["", "pileshki-burger-s-kyufte", "Пилешки бургер с кюфте", "2,80", "", ""],
["", "tost-s-bekon", "Тост с бекон", "2,80", "", ""],
["", "khot-dog", "Хот дог", "2,10", "", ""],
["", "dyuner-v-pitka", "Дюнер в питка", "2,80", "", ""]

            ],

            "Специални предложения": [
                ["", "malk-dyuner-s-kapi-plpi-portokal", "Малък дюнер с Капи Плъпи портокал", "3,50", "330", ""],
["", "sreden-dyuner-s-koka-kola", "Среден дюнер с Кока Кола", "4,20", "500", ""],
["", "dva-sredni-dyunera-i-dva-ajrana-megle", "Два средни дюнера и два айрана Мегле", "7,70", "300", ""],
["", "golyam-dyuner-s-koka-kola", "Голям дюнер с Кока Кола", "4,90", "500", ""],
["", "burger-ss-svinsko-kyufte-i-ajran-megle", "Бургер със свинско кюфте и айран Мегле", "3,50", "300", ""],
["", "tost-s-bekon-i-koka-kola", "Тост с бекон и Кока Кола", "4,20", "500", ""],
["", "khot-dog-s-ajran-megle", "Хот дог с айран Мегле", "2,80", "300", ""],
["", "pileshki-burger-s-kyufte-i-koka-kola", "Пилешки бургер с кюфте и Кока Кола", "4,20", "500", ""]

            ],

            "Сосове и гарнитури": [
                ["", "domashen-lyut-sos", "Домашен лют сос", "0,00", "30", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "90", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "pitka-sredna", "Питка средна", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1091715.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1091716.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1091717.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1091718.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1091719.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1091720.jpg?width=302"],
["", "fanta-grozde", "Fanta Грозде", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1091721.jpg?width=302"],
["", "fanta-baobab-malina-i-lajm", "Fanta Баобаб, малина и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1091722.jpg?width=302"],
["", "fanta-byala-praskova", "Fanta Бяла Праскова", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1091723.jpg?width=302"],
["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1091724.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1091725.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1091726.jpg?width=302"],
["", "schweppes-biter-limon", "Schweppes Битер Лимон", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1091727.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1091728.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1091729.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "750", "https://images.deliveryhero.io/image/fd-bg/Products/1091730.jpg?width=302"],
["", "cappy-pulpy-praskova", "Cappy Pulpy Праскова", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1091731.jpg?width=302"],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1091732.jpg?width=302"],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1091733.jpg?width=302"]

            ],

            "drinks": [
                ["", "monster", "Monster", "1,40", "330", ""],
["", "hell-classic", "Hell Classic", "0,70", "250", ""],
["", "ajran-megle", "Айран Мегле", "0,70", "300", ""],
["", "studen-chaj-praskova", "Студен чай праскова", "1,40", "500", ""],
["", "studen-chaj-limon", "Студен чай лимон", "1,40", "500", ""],
["", "studen-chaj-gorski-plod", "Студен чай горски плод", "1,40", "500", ""],
["", "studen-chaj-mango-i-ananas", "Студен чай манго и ананас", "1,40", "500", ""]

            ],

            "beer": [
                ["", "astika-ken", "Астика кен", "1,40", "500", ""],
["", "stela-artoa-ken", "Стела Артоа кен", "1,40", "500", ""],
["", "kamenicza-svetlo-ken", "Каменица светло кен", "1,40", "500", ""],
["", "staropramen-ken", "Старопрамен кен", "1,40", "500", ""],
["", "burgasko-ken", "Бургаско кен", "1,40", "500", ""],
["", "zagorka-speczialno-ken", "Загорка специално кен", "1,40", "500", ""],
["", "shumensko-ken", "Шуменско кен", "1,40", "500", ""],
["", "amstel-ken", "Амстел кен", "1,40", "500", ""],
["", "khajniken-ken", "Хайникен кен", "1,40", "500", ""],
["", "stolichno-tmno-ken", "Столично тъмно кен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'mr-donner',
        'business_name' => 'Mr.Donner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Хан Аспарух 30',
        'address_additional' => '',
        'coords_x' => '42.43762097',
        'coords_y' => '25.63221847',
        'phone' => '+35942994299',
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
                ["", "srbska-salata", "Сръбска салата", "3,50", "500", ""],
["", "shopska-salata", "Шопска салата", "3,50", "500", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "500", ""],
["", "meshana-salata", "Мешана салата", "3,50", "500", ""],
["", "domati-ss-sirene-po-selski", "Домати със сирене по селски", "3,50", "500", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "500", ""],
["", "domati-s-magdanoz", "Домати с магданоз", "3,50", "500", ""],
["", "krastaviczi-s-kopr-500gr", "Краставици с копър (500гр)", "3,50", "", ""],
["", "kapreze-500gr", "Капрезе (500гр)", "5,60", "", ""],
["", "gradinarska-salata", "Градинарска салата", "5,60", "400", ""],
["", "ajsberg-s-avokado", "Айсберг с авокадо", "5,60", "400", ""],
["", "zele-s-morkovi-i-zekhtinov-dresing", "Зеле с моркови и зехтинов дресинг", "2,80", "300", ""],
["", "zelena-salata-s-riba-ton-sezonna", "Зелена салата с риба тон сезонна", "4,90", "400", ""],
["", "zelena-salata---sezonna", "Зелена салата - сезонна", "3,50", "400", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "400", ""],
["", "salata-eliya", "Салата Елия", "5,60", "400", ""],
["", "maslini-kalamata-s-luk-i-zekhtin-250gr", "Маслини Каламата с лук и зехтин (250гр)", "2,80", "", ""],
["", "snezhanka", "Снежанка", "3,50", "250", ""],
["", "avtentichen-srbski-ajvar", "Автентичен сръбски Айвар", "4,90", "250", ""],
["", "urnebes---lyut", "Урнебес - лют", "3,50", "250", ""],
["", "trlyanicza", "Търляница", "3,50", "250", ""],
["", "paprika-u-pavlaku", "Паприка у павлаку", "4,20", "250", ""],
["", "salata-vitamina", "Салата Витамина", "3,50", "300", ""],
["", "salata-kleopatra", "Салата Клеопатра", "5,60", "400", ""],
["", "kartofena-salata", "Картофена салата", "2,80", "500", ""],
["", "presni-pecheni-lyuti-chushki-s-kopr-i-chesn", "Пресни печени люти чушки с копър и чесън", "1,40", "150", ""],
["", "presni-pecheni-chushki-s-magdanoz-i-chesn", "Пресни печени чушки с магданоз и чесън", "4,20", "350", ""],
["", "tradiczionni-srbski-razyadki", "Традиционни сръбски разядки", "4,90", "250", ""]

            ],

            "Сухи мезета": [
                ["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""],
["", "pirotski-kashkaval", "Пиротски кашкавал", "2,10", "100", ""],
["", "krave-sirene", "Краве сирене", "1,40", "100", ""],
["", "ovche-sirene", "Овче сирене", "1,40", "100", ""],
["", "koze-sirene", "Козе сирене", "1,40", "100", ""],
["", "avtentichen-srbski-kulen", "Автентичен сръбски Кулен", "2,10", "50", ""],
["", "avtentichna-peglana-kolbasicza", "Автентична пеглана колбасица", "2,10", "50", ""],
["", "avtentichna-chaena-kolbasicza", "Автентична чаена колбасица", "2,10", "50", ""],
["", "plato-asorti", "Плато Асорти", "14,70", "300", ""]

            ],

            "Топли предястия": [
                ["", "tavche-na-grafche---postno", "Тавче на графче - постно", "2,80", "300", ""],
["", "tavche-na-grafche-s-pusheni-rebra", "Тавче на графче с пушени ребра", "3,50", "400", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "250", ""],
["", "sirene-pane", "Сирене пане", "3,50", "250", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "250", ""],
["", "plneni-gbi-ss-sino-sirene", "Пълнени гъби със синьо сирене", "3,50", "250", ""],
["", "plneni-gbi-s-bekon-i-kashkaval", "Пълнени гъби с бекон и кашкавал", "4,20", "250", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,90", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "300", ""],
["", "panirani-sirencza-ss-sladko-ot-borovinki", "Панирани сиренца със сладко от боровинки", "4,90", "250", ""],
["", "zapekanka-s-bekon-i-kashkaval", "Запеканка с бекон и кашкавал", "4,20", "300", ""],
["", "zapekanka-s-kartofi-brokoli-i-kashkaval", "Запеканка с картофи, броколи и кашкавал", "3,50", "300", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,80", "300", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "3,50", "350", ""],
["", "presni-przheni-kartofi-s-kashkaval", "Пресни пържени картофи с кашкавал", "3,50", "350", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "300", ""],
["", "zadusheni-kartofi-s-kopr-i-chesn", "Задушени картофи с копър и чесън", "2,10", "300", ""],
["", "zadusheni-manatarki-s-kopr-i-chesn", "Задушени манатарки с копър и чесън", "9,80", "200", ""]

            ],

            "Месо на жар": [
                ["", "teleshki-kotlet-s-kost-ot-vrat", "Телешки котлет с кост от врат", "14,70", "300", ""],
["", "agneshki-kotleti", "Агнешки котлети", "13,30", "300", ""],
["", "agneshki-kyuftencza", "Агнешки кюфтенца", "7,00", "300", ""],
["", "agneshki-chop", "Агнешки чоп", "13,30", "350", ""],
["", "selska-pleskavicza", "Селска плескавица", "4,90", "300", ""],
["", "srbski-kebapcheta", "Сръбски кебапчета", "4,90", "300", ""],
["", "pleskavicza-s-kashkaval", "Плескавица с кашкавал", "4,90", "300", ""],
["", "ushhipczi", "Ущипци", "5,60", "300", ""],
["", "meraklijskata-pleskavicza-300gr", "Мераклийската плескавица (300гр)", "4,90", "", ""],
["", "pushena-kolbasicza", "Пушена колбасица", "5,60", "300", ""],
["", "agneshka-pleskavicza", "Агнешка плескавица", "6,30", "300", ""],
["", "agneshki-kebapcheta", "Агнешки кебапчета", "5,60", "300", ""],
["", "gurmanska-pleskavicza", "Гурманска плескавица", "5,60", "300", ""],
["", "pleskavicza-s-kajmak", "Плескавица с каймак", "6,30", "300", ""],
["", "kebapcheta-s-kajmak", "Кебапчета с каймак", "6,30", "300", ""],
["", "byala-veshalicza", "Бяла вешалица", "6,30", "300", ""],
["", "byala-veshalicza-v-bulo", "Бяла вешалица в було", "7,00", "300", ""],
["", "pletenicza-v-chesnov-sos", "Плетеница в чеснов сос", "7,00", "300", ""],
["", "presni-svinski-rebra-bez-kost-s-chesnov-sos", "Пресни свински ребра без кост с чеснов сос", "6,30", "300", ""],
["", "pileshko-byalo-v-bulo", "Пилешко бяло в було", "6,30", "300", ""],
["", "pushena-svinska-veshalicza", "Пушена свинска вешалица", "7,70", "300", ""],
["", "pileshki-krilcza-na-zhar", "Пилешки крилца на жар", "4,90", "300", ""],
["", "selska-sushenicza-ot-svinski-but-300gr", "Селска сушеница от свински бут (300гр)", "7,70", "", ""],
["", "teleshki-stek", "Телешки стек", "15,40", "300", ""],
["", "pileshka-veshalicza", "Пилешка вешалица", "7,00", "300", ""],
["", "pileshka-pletenicza-v-gben-sos", "Пилешка плетеница в гъбен сос", "7,00", "350", ""],
["", "pileshki-shishcheta-s-limon", "Пилешки шишчета с лимон", "5,60", "300", ""],
["", "pileshko-file-na-zhar", "Пилешко филе на жар", "5,60", "300", ""],
["", "pusheni-svinski-rebra", "Пушени свински ребра", "7,00", "300", ""],
["", "pileshko-na-majstor-vlado", "Пилешко на майстор Владо", "9,80", "450", ""],
["", "pusheno-svinsko-bon-file", "Пушено свинско бон филе", "9,10", "300", ""],
["", "pileshki-drobcheta-ss-svinski-bekon", "Пилешки дробчета със свински бекон", "5,60", "300", ""],
["", "pileshko-shishche-s-bekon", "Пилешко шишче с бекон", "6,30", "300", ""],
["", "teleshki-medaloni-s-kajmak", "Телешки медальони с каймак", "15,40", "300", ""],
["", "lovachka-veshalicza", "Ловачка вешалица", "7,70", "300", ""],
["", "svinska-vratna-veshalicza", "Свинска вратна вешалица", "7,00", "300", ""],
["", "adana-kebap", "Адана кебап", "6,30", "300", ""],
["", "svinski-kotlet-s-med", "Свински котлет с мед", "8,40", "450", ""],
["", "svinski-ushichki-po-zaralijski", "Свински ушички по заралийски", "4,90", "350", ""],
["", "zelenchuczi-na-skara-500gr", "Зеленчуци на скара (500гр)", "4,90", "", ""]

            ],

            "fish": [
                ["", "pstrva-na-zhar-s-garnitura", "Пъстърва на жар с гарнитура", "7,00", "", ""],
["", "czipura-na-zhar-s-garnitura", "Ципура на жар с гарнитура", "9,80", "", ""],
["", "lavrak-na-zhar-s-garnitura", "Лаврак на жар с гарнитура", "9,80", "", ""],
["", "przhena-pstrva-s-filetiran-badem", "Пържена пъстърва с филетиран бадем", "9,10", "", ""],
["", "somga-na-zhar-s-kanape-ot-svezhi-salati", "Сьомга на жар с канапе от свежи салати", "14,70", "350", ""],
["", "pechen-kalmar-na-skara", "Печен калмар на скара", "9,80", "250", ""],
["", "przheni-kalmari", "Пържени калмари", "9,80", "250", ""],
["", "plnen-kalmar-na-skara", "Пълнен калмар на скара", "10,50", "300", ""]

            ],

            "burgers": [
                ["", "pileshki-burger", "Пилешки бургер", "4,90", "380", ""],
["", "brger-ss-srbska-pleskavicza", "Бъргер със сръбска плескавица", "4,90", "380", ""]

            ],

            "Хлебни изделия": [
                ["", "pryasna-srbska-pogacha", "Прясна сръбска погача", "2,80", "300", ""],
["", "khlyab---filiya", "Хляб - филия", "0,00", "", ""]

            ],

            "garnish": [
                ["", "presni-przheni-kartofi", "Пресни пържени картофи", "1,40", "150", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "150", ""],
["", "zadusheni-kartofi-s-kopr-i-chesn", "Задушени картофи с копър и чесън", "1,40", "150", ""],
["", "kartofeno-pyure-150gr", "Картофено пюре (150гр)", "1,40", "", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "150", ""],
["", "czarevicza-v-maslo", "Царевица в масло", "1,40", "150", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,80", "250", ""],
["", "srbska-orekhovka", "Сръбска ореховка", "1,40", "", ""],
["", "palachinka", "Палачинка", "2,10", "", ""],
["", "chijzkejk-s-borovinki", "Чийзкейк с боровинки", "2,80", "", ""],
["", "torta-nutela", "Торта Нутела", "2,80", "250", ""],
["", "krem-karamel", "Крем карамел", "2,10", "", ""]

            ]
        }', 
        'slug' => 'zlatna-srbska-skara-pri-vlado',
        'business_name' => 'Златна сръбска скара - при Владо',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Свети Отец Паисий 146',
        'address_additional' => '',
        'coords_x' => '42.4286915',
        'coords_y' => '25.6202884',
        'phone' => '+359876123480',
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
            
            "Салати и Предястия": [
                ["", "1-kitajski-khlyab", "1. Китайски хляб", "0,70", "130", ""],
["", "2-przhen-luk", "2. Пържен лук", "2,10", "200", ""],
["", "3-rulcze-speczialitet", "3. Рулце специалитет", "2,80", "200", ""],
["", "4-przheni-selski-kartofi-ss-sirene", "4. Пържени селски картофи със сирене", "3,50", "330", ""],
["", "5-przheni-selski-kartofi", "5. Пържени селски картофи", "2,80", "300", ""],
["", "6-panirani-zelenchuczi", "6 Панирани зеленчуци", "2,10", "300", ""],
["", "7-chips-ot-skaridi", "7. Чипс от скариди", "2,10", "50", ""],
["", "8-lyutivo-zele-po-kitajski", "8. Лютиво зеле по китайски", "2,10", "350", ""],
["", "9-salata-ot-vodorasli-i-krastaviczi", "9. Салата от водорасли и краставици", "2,80", "350", ""],
["", "10-salata-ot-domati-ss-sirene", "10. Салата от домати със сирене", "2,80", "450", ""],
["", "11-salata-ot-kristalno-fide", "11. Салата от кристално фиде", "2,80", "350", ""],
["", "12-zelenchukova-salata", "12. Зеленчукова салата", "2,10", "350", ""],
["", "14-salata-ot-pileshko-na-lentichki-s-krastaviczi", "14. Салата от пилешко на лентички с краставици", "2,80", "350", ""],
["", "15-shopska-salata", "15. Шопска салата", "2,80", "350", ""],
["", "16-salata-ot-pileshko-i-pateshko-na-lentichki-s-krastaviczi", "16. Салата от пилешко и патешко на лентички с краставици", "2,80", "350", ""],
["", "30-ovcharska-salata", "30. Овчарска салата", "3,50", "350", ""],
["", "17-salata-ot-soevi-filizi", "17. Салата от соеви филизи", "2,80", "350", ""],
["", "18-salata-ot-cherni-gbi-muar", "18. Салата от черни гъби Муар", "2,80", "300", ""],
["", "19-morski-darove-s-krastavichki-na-lentichki", "19. Морски дарове с краставички на лентички", "5,60", "350", ""],
["", "29-salata-ot-krastaviczi-ss-soev-sos-i-chesn", "29. Салата от краставици със соев сос и чесън", "2,80", "350", ""],
["", "211-przheni-gbi-pechurki-v-soev-sos-i-chesn", "211. Пържени гъби печурки в соев сос и чесън", "3,50", "350", ""],
["", "212-paniran-kashkaval---khapki", "212. Паниран кашкавал - хапки", "4,90", "200", ""],
["", "213-panirano-sirene---khapki", "213. Панирано сирене - хапки", "4,90", "200", ""],
["", "214-zelena-salata", "214. Зелена салата", "3,50", "350", ""],
["", "215-kitajska-meshana", "215. Китайска мешана", "3,50", "350", ""],
["", "216-zelena-salata-s-riba-ton", "216. Зелена салата с риба тон", "4,90", "350", ""],
["", "218-salata-ot-zele-i-morkovi", "218. Салата от зеле и моркови", "2,10", "350", ""],
["", "220-orizovo-fide-s-morski-darove-i-krastavicza", "220. Оризово фиде с морски дарове и краставица", "5,60", "350", ""],
["", "221-orizovo-fide-ss-skaridi-i-krastavicza", "221. Оризово фиде със скариди и краставица", "6,30", "350", ""],
["", "222-salata-bambuk-s-krastavicza", "222. Салата Бамбук с краставица", "4,20", "350", ""],
["", "223-kitajski-chin-czn-ku-s-krastavicza", "223. Китайски Чин Цън Ку с краставица", "4,20", "350", ""],
["", "224-salata-s-avokado-skaridi-krastavicza-i-czarevicza", "224. Салата с авокадо, скариди, краставица и царевица", "6,30", "350", ""],
["", "225-salata-s-avokado-domat-krastavicza-yajcza-i-luk", "225. Салата с авокадо, домат, краставица, яйца и лук", "4,20", "350", ""]

            ],

            "specialties": [
                ["", "304-svinsko-kkreshho-vrkhu-metalna-plocha-ss-zelenchuczi", "304. Свинско къкрещо върху метална плоча със зеленчуци", "7,70", "700", ""],
["", "305-teleshko-kkreshho-vrkhu-metalna-plocha-ss-zelenchuczi", "305. Телешко къкрещо върху метална плоча със зеленчуци", "8,40", "700", ""],
["", "306-tri-vida-meso-kkreshho-vrkhu-metalna-plocha-ss-zelenchuczi", "306. Три вида месо къкрещо върху метална плоча със зеленчуци", "7,70", "700", ""],
["", "307-pateshko-s-luk-kkreshho-vrkhu-metalna-plocha", "307. Патешко с лук къкрещо върху метална плоча", "11,20", "600", ""],
["", "308-pileshko-kkreshho-vrkhu-metalna-plocha-ss-zelenchuczi", "308. Пилешко къкрещо върху метална плоча със зеленчуци", "7,70", "700", ""],
["", "309-pateshko-speczialitet-na-zavedenieto-vrkhu-metalna-plocha", "309. Патешко специалитет на заведението върху метална плоча", "11,20", "700", ""],
["", "310-osem-skrovishha-s-morski-darove-vrkhu-metalna-plocha", "310. Осем съкровища с морски дарове върху метална плоча", "11,90", "700", ""],
["", "311-osem-skrovishha---svinsko-pileshko-teleshko-shunka-i-zelenchuczi-vrkhu-metalna-plocha", "311. Осем съкровища - свинско, пилешко, телешко, шунка и зеленчуци върху метална плоча", "8,40", "700", ""],
["", "312-morski-delikatesi-kkreshhi-vrkhu-metalna-plocha-ss-zelenchuczi", "312. Морски деликатеси къкрещи върху метална плоча със зеленчуци", "11,20", "650", ""],
["", "313-panirani-kalmari-ss-sladko-kisel-sos", "313. Панирани калмари със сладко кисел сос", "9,80", "650", ""],
["", "314-panirani-midi-ss-sladko-kisel-sos", "314. Панирани миди със сладко кисел сос", "6,30", "500", ""],
["", "315-panirani-midi-kalmari-i-skaridi-ss-sladko-kisel-sos", "315. Панирани миди, калмари и скариди със сладко кисел сос", "11,20", "500", ""],
["", "301-detsko-menyu", "301. Детско меню", "5,60", "500", ""],
["", "302-panirani-pileshki-krilcza-i-sladko-kisel-sos", "302. Панирани пилешки крилца и сладко-кисел сос", "4,90", "500", ""],
["", "303-przhena-pstrva-i-sladko-kisel-sos", "303. Пържена пъстърва и сладко кисел сос", "8,40", "400", ""]

            ],

            "Ястия с пилешко": [
                ["", "67-pileshko-meso-s-pechurki-bambuk-morkovi-i-gbi-shanku", "67. Пилешко месо с печурки, бамбук, моркови и гъби Шанку", "7,00", "700", ""],
["", "68-pileshko-s-kashu", "68. Пилешко с кашу", "10,50", "700", ""],
["", "69-panirano-pileshko-ss-sladko-kisel-sos", "69. Панирано пилешко със сладко кисел сос", "7,00", "700", ""],
["", "70-pileshko-s-ananas", "70. Пилешко с ананас", "7,00", "700", ""],
["", "71-pileshko-s-limon", "71. Пилешко с лимон", "7,00", "700", ""],
["", "72-khrupkavo-aromatno-pileshko-meso-ss-sladko-kisel-sos", "72. Хрупкаво ароматно пилешко месо със сладко кисел сос", "7,00", "550", ""],
["", "73-pileshko-s-kartofi", "73. Пилешко с картофи", "6,30", "700", ""],
["", "74-pileshki-khapki-ss-susam", "74. Пилешки хапки със сусам", "6,30", "300", ""],
["", "75-pileshko-s-gbi-muar", "75. Пилешко с гъби Муар", "6,30", "600", ""],
["", "76-khrupkavi-pileshki-khapki", "76. Хрупкави пилешки хапки", "7,00", "300", ""],
["", "61-pileshko-ss-zelenchuczi", "61. Пилешко със зеленчуци", "6,30", "700", ""],
["", "62-pileshko-s-pechurki-morkovi-i-bambuk", "62. Пилешко с печурки, моркови и бамбук", "7,00", "700", ""],
["", "63-pileshko-s-pechurki-i-morkovi", "63. Пилешко с печурки и моркови", "7,00", "700", ""],
["", "64-pileshko-s-fstczi-i-zelenchuczi--imperatorski-speczialitet", "64. Пилешко с фъстъци и зеленчуци -Императорски специалитет", "7,00", "700", ""],
["", "65-pileshko-ss-soev-sos", "65. Пилешко със соев сос", "7,00", "500", ""],
["", "66-pileshko-s-kri", "66. Пилешко с къри", "7,00", "700", ""]

            ],

            "Ястия със свинско": [
                ["", "31-svinsko-ss-zelenchuczi", "31. Свинско със зеленчуци", "6,30", "700", ""],
["", "32-svinsko-s-pechurki-morkovi-i-bambuk", "32. Свинско с печурки, моркови и бамбук", "7,00", "700", ""],
["", "33-svinski-grdi-ss-soev-sos-i-byal-oriz", "33. Свински гърди със соев сос и бял ориз", "7,00", "650", ""],
["", "34-svinsko-po-schuanski", "34. Свинско по съчуански", "7,00", "800", ""],
["", "35-svinsko-s-kri", "35. Свинско с къри", "7,00", "800", ""],
["", "36-svinsko-s-pechurki-bambuk-i-gubi-shanku", "36. Свинско с печурки, бамбук и губи Шанку", "7,00", "650", ""],
["", "37-svinsko---speczialitet-na-gotvacha", "37. Свинско - специалитет на готвача", "7,00", "750", ""],
["", "38-svinsko-na-lentichki-s-morkovi-chushki-luk-bambuk-i-gbi-muar", "38. Свинско на лентички с моркови, чушки, лук, бамбук и гъби Муар", "7,00", "800", ""],
["", "39-svinsko-s-gbi-muar", "39. Свинско с гъби Муар", "7,00", "700", ""],
["", "41-khrupkavi-aromatni-svinski-rebrcza-ss-sladko-kisel-sos", "41. Хрупкави ароматни свински ребърца със сладко кисел сос", "7,00", "650", ""]

            ],

            "Ястия с телешко": [
                ["", "51-teleshko-ss-zelenchuczi", "51. Телешко със зеленчуци", "7,00", "700", ""],
["", "52-teleshko-s-pechurki-morkovi-i-bambuk", "52 Телешко с печурки, моркови и бамбук", "7,70", "700", ""],
["", "53-teleshko-s-pechurki-morkovi-bambuk-i-gbi-shanku", "53. Телешко с печурки, моркови, бамбук и гъби Шанку", "7,70", "700", ""],
["", "54-teleshko-po-schuanski", "54. Телешко по съчуански", "7,70", "700", ""],
["", "55-teleshko-speczialitet-na-zavedenieto", "55. Телешко специалитет на заведението", "7,70", "700", ""],
["", "56-teleshko-s-kri", "56. Телешко с къри", "7,70", "700", ""]

            ],

            "Ястия с патешко": [
                ["", "81-paticza-ss-zelenchuczi", "81. Патица със зеленчуци", "9,10", "700", ""],
["", "82-paticza-s-pechurki-morkovi-i-bambuk", "82. Патица с печурки, моркови и бамбук", "9,80", "700", ""],
["", "83-paticza-s-pechurki-morkovi-bambuk-i-gbi-shanku", "83. Патица с печурки, моркови, бамбук и гъби Шанку", "9,80", "700", ""],
["", "84-paticza-po-schuanski", "84. Патица по съчуански", "9,80", "700", ""],
["", "85-khrupkava-aromatna-paticza-ss-sladko-kisel-sos", "85. Хрупкава ароматна патица със сладко кисел сос", "9,80", "500", ""]

            ],

            "Ястия с риба": [
                ["", "91-byala-riba-ss-zelenchuczi", "91. Бяла риба със зеленчуци", "7,70", "700", ""],
["", "92-byala-riba-s-pechurki-morkovi-bambuk-i-gbi-shanku", "92. Бяла риба с печурки, моркови, бамбук и гъби Шанку", "7,70", "700", ""],
["", "93-paniran-sharan-ss-sladko-kisel-sos", "93. Паниран шаран със сладко-кисел сос", "7,70", "700", ""],
["", "94-byala-riba-po-schuanski", "94. Бяла риба по съчуански", "7,70", "700", ""],
["", "95-panirana-byala-riba-ss-sladko-kisel-sos", "95. Панирана бяла риба със сладко кисел сос", "7,70", "700", ""],
["", "96-khrupkava-aromatna-riba-i-sladko-kisel-sos", "96. Хрупкава ароматна риба и сладко кисел сос", "7,70", "500", ""],
["", "97-panirana-byala-riba-ss-susam-i-sladko-kisel-sos", "97. Панирана бяла риба със сусам и сладко кисел сос", "7,70", "650", ""],
["", "98-kalmari-ss-zelenchuczi-vrkhu-metalna-plocha", "98. Калмари със зеленчуци върху метална плоча", "9,10", "700", ""],
["", "99-przheni-kalmari-ss-zelenchuczi-vrkhu-metalna-plocha", "99. Пържени калмари със зеленчуци върху метална плоча", "9,10", "700", ""],
["", "90-przhen-safrid-ss-sladk-kisel-sos", "90. Пържен сафрид със сладк-кисел сос", "6,30", "400", ""]

            ],

            "Ястия със скариди": [
                ["", "101-skaridi-ss-zelenchuczi-vrkhu-metalna-plocha", "101. Скариди със зеленчуци върху метална плоча", "10,50", "600", ""],
["", "102-skaridi-s-gbi-morkovi-bambuk-i-gbi-shanku-vrkhu-metalna-plocha", "102. Скариди с гъби, моркови, бамбук и гъби Шанку върху метална плоча", "10,50", "600", ""],
["", "104-skaridi-po-schuanski-vrkhu-metalna-plocha", "104. Скариди по съчуански върху метална плоча", "10,50", "600", ""],
["", "105-skaridi-ss-sladko-kisel-sos", "105. Скариди със сладко кисел сос", "10,50", "600", ""],
["", "106-panirani-skaridi-s-pikanten-sos", "106. Панирани скариди с пикантен сос", "10,50", "500", ""],
["", "107-edri-skaridi-przheni-v-soev-sos", "107. Едри скариди пържени в соев сос", "17,50", "500", ""]

            ],

            "Ястия със спагети": [
                ["", "131-przheni-spageti-ss-zelenchuczi-i-yajcza", "131. Пържени спагети със зеленчуци и яйца", "4,20", "800", ""],
["", "132-przheni-spageti-s-morski-delikatesi-i-yajcza", "132. Пържени спагети с морски деликатеси и яйца", "6,30", "800", ""],
["", "133-przheni-spageti-s-midi", "133. Пържени спагети с миди", "5,60", "800", ""],
["", "134-przheni-spageti-s-pileshko", "134. Пържени спагети с пилешко", "4,90", "800", ""],
["", "135-przheni-spageti-s-tri-vida-meso", "135. Пържени спагети с три вида месо", "4,90", "800", ""],
["", "136-przheni-spageti-s-teleshko-i-kri", "136. Пържени спагети с телешко и къри", "4,90", "800", ""],
["", "137-przheni-spageti-ss-skaridi", "137. Пържени спагети със скариди", "6,30", "800", ""],
["", "138-przheni-spageti-s-pateshko", "138. Пържени спагети с патешко", "4,90", "800", ""]

            ],

            "Ястия с оризово фиде": [
                ["", "141-przheno-orizovo-fide-ss-zelenchuczi-yajcza-i-luk", "141. Пържено оризово фиде със зеленчуци, яйца и лук", "4,90", "600", ""],
["", "142-orizovo-fide-s-morski-delikatesi-i-luk", "142. Оризово фиде с морски деликатеси и лук", "6,30", "600", ""],
["", "143-przheno-orizovo-fide-s-midi-i-luk", "143. Пържено оризово фиде с миди и лук", "6,30", "600", ""],
["", "144-przheno-orizovo-fide-s-pileshko-i-luk", "144. Пържено оризово фиде с пилешко и лук", "5,60", "600", ""],
["", "145-przheno-orizovo-fide-s-tri-vid-meso-i-luk", "145. Пържено оризово фиде с три вид месо и лук", "5,60", "600", ""],
["", "146-przheno-orizovo-fide-s-pileshko-kri-i-luk", "146. Пържено оризово фиде с пилешко, къри и лук", "5,60", "600", ""],
["", "147-przheno-orizovo-fide-ss-skaridi-i-luk", "147. Пържено оризово фиде със скариди и лук", "6,30", "600", ""],
["", "148-przheno-orizovo-fide-s-pateshko-i-luk", "148. Пържено оризово фиде с патешко и лук", "5,60", "600", ""]

            ],

            "Ястия с ориз": [
                ["", "120-przhen-oriz-s-shunka-grakh-i-czarevicza", "120. Пържен ориз с шунка, грах и царевица", "4,90", "800", ""],
["", "121-przhen-oriz-ss-zelenchuczi-i-yajcza", "121. Пържен ориз със зеленчуци и яйца", "4,20", "800", ""],
["", "122-przhen-oriz-s-morski-darove", "122. Пържен ориз с морски дарове", "6,30", "800", ""],
["", "123-przhen-oriz-s-midi", "123. Пържен ориз с миди", "5,60", "800", ""],
["", "124-przhen-oriz-s-pileshko", "124. Пържен ориз с пилешко", "4,90", "800", ""],
["", "125-przhen-oriz-s-tri-vida-meso", "125. Пържен ориз с три вида месо", "4,90", "800", ""],
["", "126-przhen-oriz-s-teleshko-i-kri", "126. Пържен ориз с телешко и къри", "4,90", "800", ""],
["", "127-przhen-oriz-ss-skaridi", "127. Пържен ориз със скариди", "6,30", "800", ""],
["", "128-przhen-oriz-s-yajcza", "128. Пържен ориз с яйца", "3,50", "800", ""],
["", "129-oriz-s-pileshko-i-zelenchuczi---lyuto", "129. Ориз с пилешко и зеленчуци - люто", "4,90", "800", ""],
["", "130-oriz-s-pileshko-i-zelenchuczi", "130. Ориз с пилешко и зеленчуци", "4,90", "800", ""],
["", "139-oriz-s-pileshko-i-soev-sos", "139. Ориз с пилешко и соев сос", "4,90", "800", ""],
["", "140-przhen-oriz-s-pateshko", "140. Пържен ориз с патешко", "4,90", "800", ""]

            ],

            "Постни ястия": [
                ["", "111-postite-na-budistkiya-monakh---smes-ot-zadusheni-zelenchuczi", "111. Постите на будисткия монах - смес от задушени зеленчуци", "4,20", "700", ""],
["", "112-przheni-gbi-morkovi-cherni-gbi-i-bambuk", "112. Пържени гъби, моркови, черни гъби и бамбук", "4,90", "700", ""],
["", "113-kartofi-po-selski", "113. Картофи по селски", "4,20", "700", ""],
["", "114-przheni-kitajski-cherni-gbi-muar", "114. Пържени китайски черни гъби Муар", "5,60", "500", ""]

            ],

            "soups": [
                ["", "21-lyutivo-kisela-supa", "21. Лютиво кисела супа", "2,10", "350", ""],
["", "22-supa-ot-gbi-shanku-i-yajcza", "22. Супа от гъби Шанку и яйца", "2,10", "350", ""],
["", "23-zelenchukova-supa", "23. Зеленчукова супа", "2,10", "350", ""],
["", "24-supa-ot-pileshko-na-lentichki-i-fide", "24. Супа от пилешко на лентички и фиде", "2,10", "350", ""],
["", "25-supa-ot-gbi-bambuk-i-teleshko", "25. Супа от гъби, бамбук и телешко", "2,80", "350", ""],
["", "26-supa-ot-pileshko-na-lentichki-i-bambukovi-filizi", "26. Супа от пилешко на лентички и бамбукови филизи", "2,10", "350", ""],
["", "27-supa-ot-morski-darove", "27. Супа от морски дарове", "3,50", "350", ""],
["", "429-supa-morski-vodorasli-s-yajcza", "429. Супа морски водорасли с яйца", "2,10", "350", ""]

            ],

            "Нови предложения": [
                ["", "164-sushi-ss-somga", "164. Суши със сьомга", "6,30", "300", ""],
["", "165-sushi-ss-zelenchuczi", "165. Суши със зеленчуци", "4,90", "300", ""],
["", "166-sushi-ss-skaridi", "166. Суши със скариди", "5,60", "300", ""],
["", "167-sushi-s-rulcza-ot-raczi", "167. Суши с рулца от раци", "4,90", "300", ""],
["", "169-yaponski-vodorasli", "169. Японски водорасли", "6,30", "250", ""]

            ],

            "desserts": [
                ["", "151-przheno-plodovo-asorti-s-med-i-topki-sladoled", "151. Пържено плодово асорти с мед и топки сладолед", "2,10", "300", ""],
["", "152-przhen-banan-s-med-i-topki-sladoled", "152. Пържен банан с мед и топки сладолед", "2,10", "300", ""],
["", "153-przhena-yablka-s-med-i-topki-sladoled", "153. Пържена ябълка с мед и топки сладолед", "2,10", "300", ""],
["", "154-przhena-ananas-s-med-i-topki-sladoled", "154. Пържена ананас с мед и топки сладолед", "2,10", "300", ""],
["", "155-przhen-sladoled-s-med", "155. Пържен сладолед с мед", "2,10", "300", ""]

            ],

            "drinks": [
                ["", "415-mineralna-voda", "415. Минерална вода", "0,70", "500", ""],
["", "414-mineralna-voda", "414. Минерална вода", "1,40", "", ""]

            ],

            "sauces": [
                ["", "s1-pikanten-sos", "С1. Пикантен сос", "0,70", "130", ""],
["", "s2-lyutiva-dobavka---smes", "С2. Лютива добавка - смес", "0,70", "30", ""],
["", "s3-sladko-kisel-sos", "С3. Сладко кисел сос", "0,70", "130", ""],
["", "s4-sos-ot-kri", "С4. Сос от къри", "0,70", "130", ""],
["", "s5-sladko-kiselo---lyutiv-sos", "С5. Сладко кисело - лютив сос", "0,70", "130", ""]

            ]
        }', 
        'slug' => 'kitayski-restorant-yaziya',
        'business_name' => 'Китайски ресторант Язия',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Хаджи Димитър Асенов 70',
        'address_additional' => '',
        'coords_x' => '42.42452621',
        'coords_y' => '25.62482834',
        'phone' => '+35942620256',
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
            
            "Мекици": [
                ["", "mekicza", "Мекица", "0,00", "", ""],
["", "mekicza-s-pudra-zakhar", "Мекица с пудра захар", "0,00", "", ""]

            ],

            "Закуски": [
                ["", "zatvorena-prlenka-s-pusheno-pileshko-i-topeno-sirene", "Затворена пърленка с пушено пилешко и топено сирене", "1,40", "180", ""],
["", "zatvorena-prlenka-s-pushen-bekon-i-topeno-sirene", "Затворена пърленка с пушен бекон и топено сирене", "1,40", "180", ""],
["", "zatvorena-prlenka-s-shunka-i-kashkaval", "Затворена пърленка с шунка и кашкавал", "1,40", "180", ""],
["", "zatvorena-prlenka-s-kashkaval-i-sirene", "Затворена пърленка с кашкавал и сирене", "1,40", "180", ""],
["", "khot-dog-s-czyal-krenvirsh-i-lyutenicza", "Хот-дог с цял кренвирш и лютеница", "1,40", "160", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "1,40", "180", ""]

            ],

            "drinks": [
                ["", "ajryan-balkan", "Айрян Балкан", "0,70", "", ""],
["", "ajryan-vereya", "Айрян Верея", "0,70", "", ""],
["", "boza-bomaks", "Боза Бомакс", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1097387.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1097388.jpg?width=302"]

            ]
        }', 
        'slug' => 'puhkavi-mekici',
        'business_name' => 'Пухкави мекици',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Георги Сава Раковски 54',
        'address_additional' => '',
        'coords_x' => '42.429646',
        'coords_y' => '25.6307267',
        'phone' => '+359877511626',
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
                ["", "ariana-ken--pileshki-krilcza", "Ариана кен + пилешки крилца", "4,20", "", ""],
["", "ariana-ken--przheni-kartofi", "Ариана кен + пържени картофи", "2,80", "", ""],
["", "ariana-ken-2br--svinski-ushi", "Ариана кен (2бр) + свински уши", "6,30", "", ""],
["", "ariana-ken--svinski-drob-przhen", "Ариана кен + свински дроб пържен", "4,20", "", ""],
["", "ariana-ken--svinski-ushi", "Ариана кен + свински уши", "5,60", "", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "meshana-salata", "Мешана салата", "2,80", "300", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "250", ""],
["", "katk", "Катък", "2,80", "250", ""],
["", "kapreze", "Капрезе", "4,20", "300", ""],
["", "turshiya", "Туршия", "2,80", "300", ""],
["", "tarator", "Таратор", "0,70", "300", ""],
["", "pecheni-piperki", "Печени пиперки", "2,80", "", ""]

            ],

            "Принцеси": [
                ["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "0,70", "", ""],
["", "princzesa-s-kashkaval", "Принцеса с кашкавал", "0,70", "", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с Шунка и кашкавал", "0,70", "", ""],
["", "princzesa-s-lukanka-i-kashkaval", "Принцеса с Луканка и кашкавал", "1,40", "", ""]

            ],

            "Топли предястия": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "panirani-pileshki-khapki", "Панирани пилешки хапки", "4,90", "300", ""],
["", "pileshki-prchiczi", "Пилешки пръчици", "4,90", "300", ""],
["", "pileshki-krilcza-s-barbekyu-sos", "Пилешки крилца с барбекю сос", "3,50", "", ""],
["", "ezik-v-maslo", "Език в масло", "5,60", "250", ""],
["", "topeni-sirencza", "Топени сиренца", "4,90", "250", ""]

            ],

            "Студени предястия": [
                ["", "lukanka", "Луканка", "0,70", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""]

            ],

            "grill": [
                ["", "svinski-grdichki", "Свински Гърдички", "5,60", "300", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "svinski-ushi", "Свински Уши", "4,90", "300", ""]

            ],

            "beer": [
                ["", "zagora-ken", "Загора Кен", "1,40", "500", ""],
["", "ariana-ken", "Ариана Кен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'bistro-amur',
        'business_name' => 'Бистро Амур',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Руси Аргов 11',
        'address_additional' => '',
        'coords_x' => '42.4332312',
        'coords_y' => '25.6276615',
        'phone' => '+359899802854',
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
            
            "ПРОМОЦИИ - ПРОМО ПАКЕТИ": [
                ["", "ot-cherno-more-do-gradinata-na-baba-500-gr", "От Черно море до градината на Баба /500 гр./", "11,90", "", ""],
["", "naslada-za-nebczeto-600-gr", "Наслада за небцето /600 гр./", "11,90", "", ""],
["", "sudzhuczite-na-dyado-1100-gr", "Суджуците на дядо /1100 гр./", "14,00", "", ""],
["", "sto-patrona-1700-gr", "Сто патрона /1700 гр./", "17,50", "", ""],
["", "da-khvrlim-mrezhata-650-gr", "Да хвърлим мрежата /650 гр./", "9,10", "", ""],
["", "kuczoto-pile-1400-gr", "Куцото пиле /1400 гр./", "17,50", "", ""],
["", "mecht-na-artur-1400-gr", "Мечът на Артур /1400 гр./", "14,00", "", ""],
["", "mis-pigi-1150-gr", "Мис Пиги /1150 гр./", "16,80", "", ""],
["", "nasluka-650-ml", "Наслука /650 мл./", "7,00", "", ""],
["", "petk-trinadeseti-1600-ml", "Петък тринадесети /1600 мл./", "15,40", "", ""],
["", "czeluvkata-na-gotvacha-1400-ml", "Целувката на готвача /1400 мл./", "21,00", "", ""],
["", "sheft-cherpi-1400-gr", "Шефът черпи /1400 гр./", "18,90", "", ""]

            ],

            "ДЕТСКО МЕНЮ": [
                ["", "detsko-menyu---edno-800-gr", "Детско меню - едно /800 гр./", "4,90", "", ""],
["", "detsko-menyu--dve-600-gr", "Детско меню – две /600 гр./", "3,50", "", ""],
["", "detsko-menyu--tri-700-gr", "Детско меню – три /700 гр./", "4,20", "", ""],
["", "detsko-menyu--chetiri-560-gr", "Детско меню – четири /560 гр./", "3,50", "", ""],
["", "detsko-menyu--pet-800-gr", "Детско меню – пет /800 гр./", "4,90", "", ""],
["", "detsko-menyu--shest-700-gr", "Детско меню – шест /700 гр./", "6,30", "", ""],
["", "detsko-menyu--sedem-680-gr", "Детско меню – седем /680 гр./", "4,90", "", ""]

            ],

            "alaminuti": [
                ["", "akula-kotlet-ss-zelena-salata-garnitura-330-gr", "Акула котлет със зелена салата гарнитура /330 гр./", "4,20", "", ""],
["", "akula-kotlet-s-przheni-kartofi-garnitura-330-gr", "Акула котлет с пържени картофи гарнитура /330 гр./", "4,20", "", ""],
["", "akula-kotlet-s-morkovi-i-zele-garnitura-330-gr", "Акула котлет с моркови и зеле гарнитура /330 гр./", "4,20", "", ""],
["", "vita-nadenicza-s-vareni-kartofi-garnitura-330-gr", "Вита наденица с варени картофи гарнитура /330 гр./", "2,80", "", ""],
["", "kebapcheta-na-bbq-ss-zelena-salata-garnitura-330-gr", "Кебапчета на BBQ със зелена салата гарнитура /330 гр./", "2,10", "", ""],
["", "kashkaval-pane-s-vareni-kartofi-garnitura-350-gr", "Кашкавал пане с варени картофи гарнитура /350 гр./", "3,50", "", ""],
["", "byala-riba-file-ss-zelena-salata-garnitura-320-gr", "Бяла риба филе със зелена салата гарнитура /320 гр./", "3,50", "", ""],
["", "omlet-asorti-300-gr", "Омлет Асорти /300 гр./", "2,80", "", ""],
["", "kyufteta-na-bbq-ss-zelena-salata-garnitura-330-gr", "Кюфтета на BBQ със зелена салата гарнитура /330 гр./", "2,10", "", ""],
["", "kyufteta-na-bbq-s-domati-i-krastaviczi-garnitura-330-gr", "Кюфтета на BBQ с домати и краставици гарнитура /330 гр./", "2,10", "", ""],
["", "kebapcheta-na-bbq-s-morkovi-i-zele-garnitura-330-gr", "Кебапчета на BBQ с моркови и зеле гарнитура /330 гр./", "2,10", "", ""],
["", "kebapcheta-na-bbq-s-przheni-kartofi-garnitura-330-gr", "Кебапчета на BBQ с пържени картофи гарнитура /330 гр./", "2,10", "", ""],
["", "kyufteta-na-bbq-s-przheni-kartofi-garnitura-330-gr", "Кюфтета на BBQ с пържени картофи гарнитура /330 гр./", "2,10", "", ""],
["", "akula-kotlet-s-vareni-kartofi-garnitura-330-gr", "Акула котлет с варени картофи гарнитура /330 гр./", "4,20", "", ""],
["", "kebapcheta-na-bbq-s-domati-i-krastaviczi-garnitura-330-gr", "Кебапчета на BBQ с домати и краставици гарнитура /330 гр./", "2,10", "", ""],
["", "vita-nadenicza-s-domati-i-krastaviczi-garnitura-330-gr", "Вита наденица с домати и краставици гарнитура /330 гр./", "2,80", "", ""],
["", "byala-riba-file-s-vareni-kartofi-garnitura-320-gr", "Бяла риба филе с варени картофи гарнитура /320 гр./", "3,50", "", ""],
["", "omlet-s-kashkaval-s-vareni-kartofi-garnitura-350-gr", "Омлет с кашкавал с варени картофи гарнитура /350 гр./", "2,10", "", ""],
["", "akula-kotlet-s-domati-i-krastaviczi-garnitura-330-gr", "Акула котлет с домати и краставици гарнитура /330 гр./", "4,20", "", ""],
["", "kyufteta-na-bbq-s-vareni-kartofi-garnitura-330-gr", "Кюфтета на BBQ с варени картофи гарнитура /330 гр./", "2,10", "", ""],
["", "byala-riba-file-s-domati-i-krastaviczi-garnitura-320-gr", "Бяла риба филе с домати и краставици гарнитура /320 гр.", "3,50", "", ""],
["", "omlet-s-kashkaval-s-przheni-kartofi-garnitura-350-gr", "Омлет с кашкавал с пържени картофи гарнитура /350 гр./", "2,10", "", ""],
["", "teleshki-kyufteta-na-bbq-s-vareni-kartofi-garnitura-330-gr", "Телешки кюфтета на BBQ с варени картофи гарнитура /330 гр./", "3,50", "", ""],
["", "omlet-250-gr", "Омлет /250 гр./", "2,10", "", ""],
["", "svinska-vratna-przhola-na-bbq-s-vareni-kartofi-350-gr", "Свинска вратна пържола на BBQ с варени картофи /350 гр./", "3,50", "", ""],
["", "pileshko-file-na-bbq-s-morkovi-i-zele-garnitura-330-gr", "Пилешко филе на BBQ с моркови и зеле гарнитура /330 гр./", "3,50", "", ""],
["", "pileshka-przhola-ot-but-na-bbq-s-morkovi-i-zele-garnitura--350-gr", "Пилешка пържола от бут на BBQ с моркови и зеле гарнитура / 350 гр./", "3,50", "", ""],
["", "svinsko-file-na-bbq-s-domati-i-krastaviczi-garnitura-330-gr", "Свинско филе на BBQ с домати и краставици гарнитура /330 гр./", "3,50", "", ""],
["", "svinska-vratna-przhola-na-bbq-s-przheni-kartofi-350-gr", "Свинска вратна пържола на BBQ с пържени картофи /350 гр./", "3,50", "", ""],
["", "pileshko-file-na-bbq-ss-zelena-salata-garnitura-330-gr", "Пилешко филе на BBQ със зелена салата гарнитура /330 гр./", "3,50", "", ""],
["", "svinsko-file-na-bbq-ss-zelena-salata-garnitura-330-gr", "Свинско филе на BBQ със зелена салата гарнитура /330 гр./", "3,50", "", ""],
["", "sirenovi-khapki-200-gr", "Сиренови хапки /200 гр./", "2,80", "", ""],
["", "svinsko-file-na-bbq-s-vareni-kartofi-garnitura-330-gr", "Свинско филе на BBQ с варени картофи гарнитура /330 гр./", "3,50", "", ""],
["", "omlet-s-przheni-kartofi-garnitura-350-gr", "Омлет с пържени картофи гарнитура /350 гр./", "2,10", "", ""],
["", "svinska-vratna-przhola-na-bbq-s-domati-i-krastaviczi350-gr", "Свинска вратна пържола на BBQ с домати и краставици/350 гр./", "3,50", "", ""],
["", "kashkaval-pane-250-gr", "Кашкавал пане /250 гр./", "2,80", "", ""],
["", "vita-nadenicza-ss-zelena-salata-garnitura-330-gr", "Вита наденица със зелена салата гарнитура /330 гр./", "2,80", "", ""],
["", "teleshki-kyufteta-na-bbq-s-przheni-kartofi-garnitura-330-gr", "Телешки кюфтета на BBQ с пържени картофи гарнитура /330 гр./", "3,50", "", ""],
["", "omlet-s-kashkaval-s-domati-i-krastaviczi-garnitura-350-gr", "Омлет с кашкавал с домати и краставици гарнитура /350 гр./", "2,10", "", ""],
["", "kashkaval-pane-ss-zelena-salata-garnitura-350-gr", "Кашкавал пане със зелена салата гарнитура /350 гр./", "3,50", "", ""],
["", "omlet-ss-zelena-salata-garnitura-350-gr", "Омлет със зелена салата гарнитура /350 гр./", "2,10", "", ""],
["", "vita-nadenicza-s-przheni-kartofi-garnitura-330-gr", "Вита наденица с пържени картофи гарнитура /330 гр./", "2,80", "", ""],
["", "yajcza-brkani-ss-sirene-330-gr", "Яйца бъркани със сирене /330 гр./", "2,10", "", ""],
["", "yajcza-na-ochi-s-flejki-slajs-330-gr", "Яйца на очи с флейки слайс /330 гр./", "2,80", "", ""],
["", "byala-riba-file-s-przheni-kartofi-garnitura-320-gr", "Бяла риба филе с пържени картофи гарнитура /320 гр./", "3,50", "", ""],
["", "omlet-s-kashkaval-ss-zelena-salata-garnitura-350-gr", "Омлет с кашкавал със зелена салата гарнитура /350 гр./", "2,10", "", ""],
["", "pileshko-file-na-bbq-s-domati-i-krastyaviczi-garnitura-330-gr", "Пилешко филе на BBQ с домати и крастявици гарнитура /330 гр./", "3,50", "", ""],
["", "kashkavaleni-khapki-200-gr", "Кашкавалени хапки /200 гр./", "3,50", "", ""],
["", "byala-riba-file-s-morkovi-i-zele-garnitura-320-gr", "Бяла риба филе с моркови и зеле гарнитура /320 гр./", "3,50", "", ""],
["", "vita-nadenicza-s-morkovi-i-zele-garnitura-330-gr", "Вита наденица с моркови и зеле гарнитура /330 гр./", "2,80", "", ""],
["", "svinsko-file-na-bbq-s-morkovi-i-zele-garnitura-330-gr", "Свинско филе на BBQ с моркови и зеле гарнитура /330 гр./", "3,50", "", ""],
["", "pileshka-przhola-ot-but-na-bbq-s-vareni-kartofi-garnitura--350-gr", "Пилешка пържола от бут на BBQ с варени картофи гарнитура / 350 гр./", "3,50", "", ""],
["", "omlet-s-domati-i-krastaviczi-garnitura-350-gr", "Омлет с домати и краставици гарнитура /350 гр./", "2,10", "", ""],
["", "pileshko-file-na-bbq-s-vareni-kartofi-garnitura-330-gr", "Пилешко филе на BBQ с варени картофи гарнитура /330 гр./", "3,50", "", ""],
["", "kashkaval-pane-s-morkovi-i-zele-garnitura-350-gr", "Кашкавал пане с моркови и зеле гарнитура /350 гр./", "3,50", "", ""],
["", "kalmari-pane-250-gr", "Калмари пане /250 гр./", "5,60", "", ""],
["", "omlet-s-morkovi-i-zele-garnitura-350-gr", "Омлет с моркови и зеле гарнитура /350 гр./", "2,10", "", ""],
["", "svinska-vratna-przhola-na-bbq-s-morkovi-i-zele-350-gr", "Свинска вратна пържола на BBQ с моркови и зеле /350 гр./", "3,50", "", ""],
["", "khrupkavi-tikvichki-s-chesnov-sos-250-gr", "Хрупкави тиквички с чеснов сос /250 гр./", "3,50", "", ""],
["", "teleshki-kyufteta-na-bbq-ss-zelena-salata-garnitura-330-gr", "Телешки кюфтета на BBQ със зелена салата гарнитура /330 гр./", "3,50", "", ""],
["", "pileshko-file-na-bbq-s-przheni-kartofi-garnitura-330-gr", "Пилешко филе на BBQ с пържени картофи гарнитура /330 гр./", "3,50", "", ""],
["", "pileshka-przhola-ot-but-na-bbq-s-przheni-kartofi-garnitura--350-gr", "Пилешка пържола от бут на BBQ с пържени картофи гарнитура / 350 гр./", "3,50", "", ""],
["", "yajcza-po-panagyurski-300-gr", "Яйца по панагюрски /300 гр./", "2,10", "", ""],
["", "gbi-v-maslo-250-gr", "Гъби в масло /250 гр./", "2,80", "", ""],
["", "kebapcheta-na-bbq-s-vareni-kartofi-garnitura-330-gr", "Кебапчета на BBQ с варени картофи гарнитура /330 гр./", "2,10", "", ""],
["", "kashkaval-pane-s-przheni-kartofi-garnitura-350-gr", "Кашкавал пане с пържени картофи гарнитура /350 гр./", "3,50", "", ""],
["", "teleshki-kyufteta-na-bbq-s-domati-i-krastaviczi-garnitura-330-gr", "Телешки кюфтета на BBQ с домати и краставици гарнитура /330 гр./", "3,50", "", ""],
["", "svinsko-file-na-bbq-s-przheni-kartofi-garnitura-330-gr", "Свинско филе на BBQ с пържени картофи гарнитура /330 гр./", "3,50", "", ""],
["", "topeni-sirencza-s-borovinkovo-sladko-200-gr", "Топени сиренца с боровинково сладко /200 гр./", "3,50", "", ""],
["", "svinska-vratna-przhola-na-bbq-ss-zelena-salata-350-gr", "Свинска вратна пържола на BBQ със зелена салата /350 гр./", "3,50", "", ""],
["", "omlet-s-vareni-kartofi-garnitura-350-gr", "Омлет с варени картофи гарнитура /350 гр./", "2,10", "", ""],
["", "omlet-s-kashkaval-s-morkovi-i-zele-garnitura-350-gr", "Омлет с кашкавал с моркови и зеле гарнитура /350 гр./", "2,10", "", ""],
["", "pileshka-przhola-ot-but-na-bbq-ss-zelena-salata-garnitura--350-gr", "Пилешка пържола от бут на BBQ със зелена салата гарнитура / 350 гр./", "3,50", "", ""],
["", "pileshka-przhola-ot-but-na-bbq-s-domati-i-krastaviczigarnitura--350-gr", "Пилешка пържола от бут на BBQ с домати и краставицигарнитура / 350 гр./", "3,50", "", ""],
["", "teleshki-kyufteta-na-bbq-s-morkovi-i-zele-garnitura-330-gr", "Телешки кюфтета на BBQ с моркови и зеле гарнитура /330 гр./.", "3,50", "", ""]

            ],

            "САЛАТИ И ГАРНИТУРИ": [
                ["", "salata-bob-s-lyutenicza-200-gr", "Салата боб с лютеница /200 гр./", "1,40", "", ""],
["", "salata-bob-s-lyutenicza-350-gr", "Салата боб с лютеница  /350 гр./", "2,10", "", ""],
["", "salata-bob-s-lyutenicza-1000-gr", "Салата боб с лютеница /1000 гр./", "6,30", "", ""],
["", "salata-bob-ss-zelen-luk-200-gr", "Салата боб със зелен лук /200 гр./", "0,70", "", ""],
["", "salata-bob-ss-zelen-luk-350-gr", "Салата боб със зелен лук /350 гр./", "2,10", "", ""],
["", "salata-bob-ss-zelen-luk-1000-gr", "Салата боб със зелен лук /1000 гр./", "4,90", "", ""],
["", "salata-varen-oriz-200-gr", "Салата варен ориз /200 гр./", "0,70", "", ""],
["", "salata-varen-oriz-350-gr", "Салата варен ориз /350 гр./", "1,40", "", ""],
["", "salata-varen-oriz-1000-gr", "Салата варен ориз /1000 гр./", "4,90", "", ""],
["", "salata-domati-200-gr", "Салата домати /200 гр./", "1,40", "", ""],
["", "salata-domati-350-gr", "Салата домати /350 гр./", "2,80", "", ""],
["", "salata-domati-1000-gr", "Салата домати /1000 гр./", "7,70", "", ""],
["", "salata-domati-i-krastaviczi-200-gr", "Салата домати и краставици /200 гр./", "1,40", "", ""],
["", "salata-domati-i-krastaviczi-350-gr", "Салата домати и краставици /350 гр./", "2,10", "", ""],
["", "salata-domati-i-krastaviczi-1000-gr", "Салата домати и краставици /1000 гр./", "6,30", "", ""],
["", "salata-domashna-lyutenicza-200-gr", "Салата домашна лютеница /200 гр./", "1,40", "", ""],
["", "salata-domashna-lyutenicza-350-gr", "Салата домашна лютеница /350 гр./", "2,10", "", ""],
["", "salata-domashna-lyutenicza-1000-gr", "Салата домашна лютеница /1000 гр./", "7,70", "", ""],
["", "salata-zele-i-morkovi-200-gr", "Салата зеле и моркови /200 гр./", "0,70", "", ""],
["", "salata-zele-i-morkovi-350-gr", "Салата зеле и моркови /350 гр./", "1,40", "", ""],
["", "salata-zele-i-morkovi-1000-gr", "Салата зеле и моркови /1000 гр./", "4,20", "", ""],
["", "salata-zelena-200-gr", "Салата зелена /200 гр./", "1,40", "", ""],
["", "salata-zelena-350-gr", "Салата зелена /350 гр./", "2,10", "", ""],
["", "salata-zelena-1000-gr", "Салата зелена /1000 гр./", "7,00", "", ""],
["", "salata-zelena-s-riba-ton-200-gr", "Салата зелена с риба тон /200 гр./", "2,10", "", ""],
["", "salata-zelena-s-riba-ton-350-gr", "Салата зелена с риба тон /350 гр./", "2,80", "", ""],
["", "salata-zelena-s-riba-ton-1000-gr", "Салата зелена с риба тон /1000 гр./", "9,80", "", ""],
["", "salata-kartofeno-pyure-200-gr", "Салата картофено пюре /200 гр./", "1,40", "", ""],
["", "salata-kartofeno-pyure-350-gr", "Салата картофено пюре /350 гр./", "2,10", "", ""],
["", "salata-kartofeno-pyure-1000-gr", "Салата картофено пюре /1000 гр./", "6,30", "", ""],
["", "salata-kartofi-vareni-ss-zelen-luk-200-gr", "Салата картофи варени със зелен лук /200 гр./", "0,70", "", ""],
["", "salata-kartofi-vareni-ss-zelen-luk-350-gr", "Салата картофи варени със зелен лук /350 гр./", "1,40", "", ""],
["", "salata-kartofi-vareni-ss-zelen-luk-1000-gr", "Салата картофи варени със зелен лук /1000 гр./", "4,90", "", ""],
["", "salata-kartofi-na-furna-200-gr", "Салата картофи на фурна /200 гр./", "0,70", "", ""],
["", "salata-kartofi-na-furna-350-gr", "Салата картофи на фурна /350 гр./", "2,10", "", ""],
["", "salata-kartofi-na-furna-1000-gr", "Салата картофи на фурна /1000 гр./", "5,60", "", ""],
["", "salata-kartofi-przheni-200-gr", "Салата картофи пържени /200 гр./", "1,40", "", ""],
["", "salata-kartofi-przheni-350-gr", "Салата картофи пържени /350 гр./", "2,10", "", ""],
["", "salata-kartofi-przheni-1000-gr", "Салата картофи пържени /1000 гр./", "6,30", "", ""],
["", "salata-kartofi-sote-200-gr", "Салата картофи соте /200 гр./", "1,40", "", ""],
["", "salata-kartofi-sote-350-gr", "Салата картофи соте /350 гр./", "2,10", "", ""],
["", "salata-kartofi-sote-1000-gr", "Салата картофи соте /1000 гр./", "6,30", "", ""],
["", "salata-katk-200-gr", "Салата катък /200 гр./", "0,70", "", ""],
["", "salata-katk-350-gr", "Салата катък /350 гр./", "2,10", "", ""],
["", "salata-katk-1000-gr", "Салата катък /1000 гр./", "6,30", "", ""],
["", "salata-krastaviczi-200-gr", "Салата краставици /200 гр./", "1,40", "", ""],
["", "salata-krastaviczi-350-gr", "Салата краставици /350 гр./", "2,80", "", ""],
["", "salata-krastaviczi-1000-gr", "Салата краставици /1000 гр./", "7,70", "", ""],
["", "mlechna-salata-200-gr", "Млечна салата /200 гр./", "1,40", "", ""],
["", "mlechna-salata-350-gr", "Млечна салата /350 гр./", "2,10", "", ""],
["", "mlechna-salata-1000-gr", "Млечна салата /1000 гр./", "6,30", "", ""],
["", "salata-morkovi-zele-i-majoneza-200-gr", "Салата моркови, зеле и майонеза /200 гр./", "0,70", "", ""],
["", "salata-morkovi-zele-i-majoneza-350-gr", "Салата моркови, зеле и майонеза /350 гр./", "1,40", "", ""],
["", "salata-morkovi-zele-i-majoneza-1000-gr", "Салата моркови, зеле и майонеза /1000 гр./", "5,60", "", ""],
["", "salata-ovcharska-200-gr", "Салата овчарска /200 гр./", "1,40", "", ""],
["", "salata-ovcharska-350-gr", "Салата овчарска /350 гр./", "2,80", "", ""],
["", "salata-ovcharska-1000-gr", "Салата овчарска /1000 гр./", "8,40", "", ""],
["", "salata-tikvichki-s-mlechen-sos-200-gr", "Салата тиквички с млечен сос /200 гр./", "1,40", "", ""],
["", "salata-tikvichki-s-mlechen-sos-350-gr", "Салата тиквички с млечен сос /350 гр./", "2,80", "", ""],
["", "salata-tikvichki-s-mlechen-sos-1000-gr", "Салата тиквички с млечен сос /1000 гр./", "8,40", "", ""],
["", "salata-czarevicza-zele-i-majoneza-200-gr", "Салата царевица, зеле и майонеза /200 гр./", "0,70", "", ""],
["", "salata-czarevicza-zele-i-majoneza-350-gr", "Салата царевица, зеле и майонеза /350 гр./", "1,40", "", ""],
["", "salata-czarevicza-zele-i-majoneza-1000-gr", "Салата царевица, зеле и майонеза /1000 гр./", "5,60", "", ""],
["", "salata-czezar-200-gr", "Салата Цезар /200 гр./", "1,40", "", ""],
["", "salata-czezar-350-gr", "Салата Цезар /350 гр./", "3,50", "", ""],
["", "salata-czezar-1000-gr", "Салата Цезар /1000 гр./", "9,80", "", ""],
["", "salata-chushki-pecheni-200-gr", "Салата чушки печени /200 гр./", "1,40", "", ""],
["", "salata-chushki-pecheni-350-gr", "Салата чушки печени /350 гр./", "2,10", "", ""],
["", "salata-chushki-pecheni-1000-gr", "Салата чушки печени /1000 гр./", "7,00", "", ""],
["", "salata-chushki-s-katk-200-gr", "Салата чушки с катък /200 гр./", "1,40", "", ""],
["", "salata-chushki-s-katk", "Салата чушки с катък", "2,80", "350", ""],
["", "salata-chushki-s-katk-1000-gr", "Салата чушки с катък /1000 гр./", "8,40", "", ""],
["", "salata-shopska-200-gr", "Салата шопска /200 гр./", "1,40", "", ""],
["", "salata-shopska-350-gr", "Салата шопска /350 гр./", "2,10", "", ""],
["", "salata-shopska-1000-gr", "Салата шопска /1000 гр./", "7,70", "", ""],
["", "salata-shunka-zele-i-majoneza-200-gr", "Салата шунка, зеле и майонеза /200 гр./", "0,70", "", ""],
["", "salata-shunka-zele-i-majoneza-350-gr", "Салата шунка, зеле и майонеза /350 гр./", "2,10", "", ""],
["", "salata-shunka-zele-i-majoneza-1000-gr", "Салата шунка, зеле и майонеза /1000 гр./", "6,30", "", ""],
["", "sarmi-zelevi-postni-140-gr", "Сарми зелеви постни /140 гр./", "0,70", "", ""],
["", "sarmi-lozovi-postni-140-gr", "Сарми лозови постни /140 гр./", "0,70", "", ""]

            ],

            "СУПИ И ЧОРБИ": [
                ["", "krem-supa-ot-kartofi-330-ml", "Крем супа от картофи /330 мл./", "0,70", "", ""],
["", "supa-pileshka-330-ml", "Супа пилешка /330 мл./", "0,70", "", ""],
["", "supa-topcheta-330-ml", "Супа топчета /330 мл./", "0,70", "", ""],
["", "tarator-330-ml", "Таратор /330 мл./", "0,70", "", ""]

            ],

            "СКАРА И BBQ": [
                ["", "vita-nadenicza-125-gr", "Вита наденица /125 гр./", "0,70", "", ""],
["", "vita-nadenicza-250-gr", "Вита наденица /250 гр./", "2,10", "", ""],
["", "vita-nadenicza-500-gr", "Вита наденица /500 гр./", "4,90", "", ""],
["", "vita-nadenicza-750-gr", "Вита наденица /750 гр./", "7,70", "", ""],
["", "vita-nadenicza-1000-gr", "Вита наденица /1000 гр./", "12,60", "", ""],
["", "kebapche-100-gr", "Кебапче /100 гр./", "0,70", "", ""],
["", "kebapche-300-gr", "Кебапче /300 гр./", "2,10", "", ""],
["", "kebapche-500-gr", "Кебапче /500 гр./", "3,50", "", ""],
["", "kebapche-700-gr", "Кебапче /700 гр./", "5,60", "", ""],
["", "kebapche-1000-gr", "Кебапче /1000 гр./", "7,70", "", ""],
["", "kyufte-100-gr", "Кюфте /100 гр./", "0,70", "", ""],
["", "kyufte-300-gr", "Кюфте /300 гр./", "2,10", "", ""],
["", "kyufte-500-gr", "Кюфте /500 гр./", "3,50", "", ""],
["", "kyufte-700-gr", "Кюфте /700 гр./", "5,60", "", ""],
["", "kyufte-1000-gr", "Кюфте /1000 гр./", "7,70", "", ""],
["", "mecha-lapa-300-gr", "Меча лапа /300 гр./", "3,50", "", ""],
["", "pile-na-zhar---polovin-450-gr", "Пиле на жар - половин /450 гр./", "4,20", "", ""],
["", "pile-na-zhar-900-gr", "Пиле на жар /900 гр./", "7,70", "", ""],
["", "pile-pecheno---polovin-450-gr", "Пиле печено - половин /450 гр./", "2,80", "", ""],
["", "pile-pecheno-900-gr", "Пиле печено /900 гр./", "4,90", "", ""],
["", "pileshka-przhola-ot-but-300-gr", "Пилешка пържола от бут /300 гр./", "3,50", "", ""],
["", "pileshki-krilcza-250-gr", "Пилешки крилца /250 гр./", "3,50", "", ""],
["", "pileshko-file-300-gr", "Пилешко филе /300 гр./", "4,20", "", ""],
["", "pileshko-shishche-100-gr", "Пилешко шишче /100 гр./", "1,40", "", ""],
["", "pileshko-shishche-300-gr", "Пилешко шишче /300 гр./", "4,20", "", ""],
["", "pileshko-shishche-500gr", "Пилешко шишче /500гр./", "7,00", "", ""],
["", "pileshko-shishche-700-gr", "Пилешко шишче /700 гр./", "10,50", "", ""],
["", "pileshko-shishche-1000-gr", "Пилешко шишче /1000 гр./", "14,70", "", ""],
["", "pleskavicza-300-gr", "Плескавица /300 гр./", "2,10", "", ""],
["", "pleskavicza-gurmanska-350-gr", "Плескавица гурманска /350 гр./", "2,80", "", ""],
["", "pleskavicza-meraklijska-300-gr", "Плескавица мераклийска /300 гр./", "2,80", "", ""],
["", "pleskavicza-s-kashkaval-300-gr", "Плескавица с кашкавал /300 гр./", "2,80", "", ""],
["", "svinska-vratna-przhola-300-gr", "Свинска вратна пържола /300 гр./", "4,20", "", ""],
["", "svinski-rebrcza-400-gr", "Свински ребърца /400 гр./", "4,90", "", ""],
["", "svinski-sudzhuk-300-gr", "Свински суджук /300 гр./", "4,20", "", ""],
["", "svinski-ushi-300-gr", "Свински уши /300 гр./", "3,50", "", ""],
["", "svinsko-file-300-gr", "Свинско филе /300 гр./", "4,20", "", ""],
["", "svinski-flejki-300-gr", "Свински флейки /300 гр./", "4,20", "", ""],
["", "svinsko-shishche-100-gr", "Свинско шишче /100 гр./", "1,40", "", ""],
["", "svinsko-shishche-300-gr", "Свинско шишче /300 гр./", "4,20", "", ""],
["", "svinsko-shishche-500-gr", "Свинско шишче /500 гр./", "7,00", "", ""],
["", "svinsko-shishche-700-gr", "Свинско шишче /700 гр./", "10,50", "", ""],
["", "svinsko-shishche-1000-gr", "Свинско шишче /1000 гр./", "14,70", "", ""],
["", "teleshko-kyufte-100-gr", "Телешко кюфте /100 гр./", "1,40", "", ""],
["", "teleshko-kyufte-300-gr", "Телешко кюфте /300 гр./", "4,20", "", ""],
["", "teleshko-kyufte-500-gr", "Телешко кюфте /500 гр./", "7,00", "", ""],
["", "teleshko-kyufte-700-gr", "Телешко кюфте /700 гр./", "10,50", "", ""],
["", "teleshko-kyufte-1000-gr", "Телешко кюфте /1000 гр./", "14,70", "", ""],
["", "teleshko-shishche-100-gr", "Телешко шишче /100 гр./", "1,40", "", ""],
["", "teleshko-shishche-300-gr", "Телешко шишче /300 гр./", "6,30", "", ""],
["", "teleshko-shishche-500-gr", "Телешко шишче /500 гр./", "9,80", "", ""],
["", "teleshko-shishche-700-gr", "Телешко шишче /700 гр./", "14,00", "", ""],
["", "teleshko-shishche-1000-gr", "Телешко шишче /1000 гр./", "20,30", "", ""],
["", "ushhipczi-300-gr", "Ущипци /300 гр./", "2,80", "", ""]

            ],

            "ПИЛЕШКИ ЯСТИЯ": [
                ["", "pile-rokfor-350-gr", "Пиле Рокфор /350 гр./", "4,90", "", ""],
["", "pileshki-khapki-s-brokoli-i-smetana-300-gr", "Пилешки хапки с броколи и сметана /300 гр./", "4,90", "", ""],
["", "pileshki-khapki-s-gbi-i-kashkaval-350-gr", "Пилешки хапки с гъби и кашкавал /350 гр./", "4,20", "", ""],
["", "pileshki-khapki-ss-susam-300-gr", "Пилешки хапки със сусам /300 гр./", "3,50", "", ""],
["", "pileshki-khapki-pane-300-gr", "Пилешки хапки пане /300 гр./", "3,50", "", ""],
["", "pileshki-khapki-s-kornflejks-300-gr", "Пилешки хапки с корнфлейкс /300 гр./", "3,50", "", ""]

            ],

            "СВИНСКИ ЯСТИЯ": [
                ["", "eskalibur-450-gr", "Ескалибур /450 гр./", "5,60", "", ""],
["", "mezeto-na-shefa-450-gr", "Мезето на шефа /450 гр./", "6,30", "", ""],
["", "svinsko-na-majstora-450-gr", "Свинско на майстора /450 гр./", "7,70", "", ""]

            ],

            "РИБНИ ЯСТИЯ": [
                ["", "byala-riba-file-260-gr---320-gr", "Бяла риба филе /260 гр. - 320 гр./", "4,20", "", ""],
["", "lavrak-270-gr---350-gr", "Лаврак /270 гр. - 350 гр./", "7,00", "", ""],
["", "pstrva-270-gr---350-gr", "Пъстърва /270 гр. - 350 гр./", "5,60", "", ""],
["", "skumriya-310-gr---390-gr", "Скумрия /310 гр. - 390 гр./", "2,80", "", ""],
["", "czacza-230-gr---280-gr", "Цаца /230 гр. - 280 гр./", "2,80", "", ""],
["", "czipura-270-gr---350-gr", "Ципура /270 гр. - 350 гр./", "7,00", "", ""]

            ],

            "ИТАЛИАНСКИ ЯСТИЯ": [
                ["", "spageti-boloneze-300-gr", "Спагети Болонезе /300 гр./", "4,20", "", ""],
["", "spageti-di-polo-300-gr", "Спагети Ди Поло /300 гр./", "4,20", "", ""],
["", "spageti-karbonara-300-gr", "Спагети Карбонара /300 гр./", "4,20", "", ""],
["", "spageti-fruti-di-mare-350-gr", "Спагети Фрути ди маре /350 гр./", "6,30", "", ""],
["", "tortelini-zelenchukovi-300-gr", "Тортелини зеленчукови /300 гр./", "3,50", "", ""],
["", "tortelini-s-meso-300-gr", "Тортелини с месо /300 гр./", "4,20", "", ""],
["", "fetuchini-pomodoro-300-gr", "Фетучини Помодоро /300 гр./", "4,20", "", ""],
["", "fetuchini-s-gbi-300-gr", "Фетучини с гъби /300 гр./", "3,50", "", ""],
["", "fetuchini-s-pileshko-file-300-gr", "Фетучини с пилешко филе /300 гр./", "4,20", "", ""]

            ],

            "КАРТОФЕНИ ЯСТИЯ": [
                ["", "kartofi-presni-pikantni-selski-250-gr", "Картофи пресни пикантни селски /250 гр./", "1,40", "", ""],
["", "kartofi-presni-przheni-200-gr", "Картофи пресни пържени /200 гр./", "0,70", "", ""],
["", "kartofi-presni-ss-kashkaval-250-gr", "Картофи пресни със кашкавал /250 гр./", "1,40", "", ""],
["", "kartofi-presni-ss-sirene-250-gr", "Картофи пресни със сирене /250 гр./", "1,40", "", ""]

            ],

            "ЗАПЕКАНКИ": [
                ["", "zapekanka-s-bekon-i-smetana-300-gr", "Запеканка с бекон и сметана /300 гр./", "3,50", "", ""],
["", "zapekanka-s-pileshko-file-smetana-i-sino-sirene-300-gr", "Запеканка с пилешко филе, сметана и синьо сирене /300 гр./", "4,90", "", ""],
["", "zapekanka-s-chetiri-vida-sirena-300-gr", "Запеканка с четири вида сирена /300 гр./", "4,20", "", ""],
["", "zapekanka-s-shunka-kashkaval-i-smetana-300-gr", "Запеканка с шунка, кашкавал и сметана /300 гр./", "3,50", "", ""]

            ],

            "dunners": [
                ["", "dyuner-malk-200-gr", "Дюнер малък /200 гр./", "1,40", "", ""],
["", "dyuner-malk---vegetarianski-200-gr", "Дюнер малък - вегетариански /200 гр./", "1,40", "", ""],
["", "dyuner-sreden-280-gr", "Дюнер среден /280 гр./", "2,10", "", ""],
["", "dyuner-sreden---vegetarianski-280-gr", "Дюнер среден - вегетариански /280 гр./", "1,40", "", ""],
["", "dyuner-golyam-480-gr", "Дюнер голям /480 гр./", "2,80", "", ""],
["", "dyuner-golyam---vegetarianski-480-gr", "Дюнер голям - вегетариански /480 гр./", "2,10", "", ""],
["", "dyuner---porcziya-500-gr", "Дюнер - порция /500 гр./", "3,50", "", ""],
["", "czarski-dyuner-420-gr", "Царски дюнер /420 гр./", "4,20", "", ""]

            ],

            "ХОТ ДОГ": [
                ["", "khot-dog-200-gr", "Хот дог /200 гр./", "0,70", "", ""],
["", "khot-dog-little-plus-300-gr", "Хот дог Little Plus /300 гр./", "1,40", "", ""]

            ],

            "ТОСТЕРИ": [
                ["", "toster-little-plus-400-gr", "Тостер Little Plus /400 гр./", "2,80", "", ""],
["", "toster-s-gurmanska-pleskavicza-350-gr", "Тостер с гурманска плескавица /350 гр./", "2,10", "", ""],
["", "toster-s-pileshko-file-300-gr", "Тостер с пилешко филе /300 гр./", "2,10", "", ""],
["", "toster-s-pleskavicza-350-gr", "Тостер с плескавица /350 гр./", "2,10", "", ""],
["", "toster-s-sharska-pleskavicza-350-gr", "Тостер с шарска плескавица /350 гр./", "2,10", "", ""],
["", "toster-ss-sirene-i-kashkaval-300-gr", "Тостер със сирене и кашкавал /300 гр./", "2,10", "", ""],
["", "toster-czarski-s-bekon-420-gr", "Тостер царски с бекон /420 гр./", "3,50", "", ""],
["", "toster-czarski-s-lukanka-420-gr", "Тостер царски с луканка /420 гр./", "3,50", "", ""],
["", "toster-czarski-s-chorizo-420-gr", "Тостер царски с чоризо /420 гр./", "3,50", "", ""],
["", "toster-czarski-s-shunka-420-gr", "Тостер царски с шунка /420 гр./", "2,80", "", ""],
["", "toster-czarski-kombiniran-420-gr", "Тостер царски комбиниран /420 гр./", "3,50", "", ""]

            ],

            "ПРИНЦЕСИ": [
                ["", "princzesa-s-kajma-180gr", "Принцеса с кайма /180гр./", "0,70", "", ""],
["", "princzesa-s-kajma-i-kashkaval-200-gr", "Принцеса с кайма и кашкавал /200 гр./", "0,70", "", ""],
["", "princzesa-s-kashkaval-180-gr", "Принцеса с кашкавал /180 гр./", "0,70", "", ""],
["", "princzesa-s-lukanka-i-kashkaval-200-gr", "Принцеса с луканка и кашкавал /200 гр./", "1,40", "", ""],
["", "princzesa-s-shunka-i-kashkaval-200-gr", "Принцеса с шунка и кашкавал /200 гр./", "0,70", "", ""]

            ],

            "ПИЦИ - ФАМИЛНИ": [
                ["", "picza-little-plus-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА LITTLE PLUS С ДОМАТЕНА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "10,50", "", ""],
["", "picza-little-plus-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА LITTLE PLUS С МЛЕЧНО – ЧЕСНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "10,50", "", ""],
["", "picza-little-plus-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА LITTLE PLUS СЪС СМЕТАНОВА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "10,50", "", ""],
["", "picza-gorska-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА ГОРСКА С ДОМАТЕНА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-gorska-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА ГОРСКА С МЛЕЧНО – ЧЕСНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-gorska-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА ГОРСКА СЪС СМЕТАНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-margarita-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА МАРГАРИТА С ДОМАТЕНА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-margarita-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА МАРГАРИТА С МЛЕЧНО – ЧЕСНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-margarita-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА МАРГАРИТА СЪС СМЕТАНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-s-bekon-i-topeno-sirene-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С БЕКОН И ТОПЕНО СИРЕНЕ С ДОМАТЕНА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "8,40", "", ""],
["", "picza-s-bekon-i-topeno-sirene-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С БЕКОН И ТОПЕНО СИРЕНЕ С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "8,40", "", ""],
["", "picza-s-bekon-i-topeno-sirene-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С БЕКОН И ТОПЕНО СИРЕНЕ СЪС СМЕТАНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "8,40", "", ""],
["", "picza-s-krenvirsh-i-kashkaval-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С КРЕНВИРШ И КАШКАВАЛ С ДОМАТЕНА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "7,00", "", ""],
["", "picza-s-krenvirsh-i-kashkaval-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С КРЕНВИРШ И КАШКАВАЛ С МЛЕЧНО – ЧЕСНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,00", "", ""],
["", "picza-s-krenvirsh-i-kashkaval-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С КРЕНВИРШ И КАШКАВАЛ СЪС СМЕТАНОВА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "7,00", "", ""],
["", "picza-s-lukanka-i-kashkaval-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЛУКАНКА И КАШКАВАЛ С ДОМАТЕНА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "9,80", "", ""],
["", "picza-s-lukanka-i-kashkaval-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЛУКАНКА И КАШКАВАЛ С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "9,80", "", ""],
["", "picza-s-lukanka-i-kashkaval-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЛУКАНКА И КАШКАВАЛ СЪС СМЕТАНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "9,80", "", ""],
["", "picza-s-lukanka-kashkaval-czarevicza-i-kiseli-krastavichki-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЛУКАНКА, КАШКАВАЛ, ЦАРЕВИЦА И КИСЕЛИ КРАСТАВИЧКИ С ДОМАТЕНА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "10,50", "", ""],
["", "picza-s-lukanka-kashkaval-czarevicza-i-kiseli-krastavichki-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЛУКАНКА, КАШКАВАЛ, ЦАРЕВИЦА И КИСЕЛИ КРАСТАВИЧКИ С МЛЕЧНО – ЧЕСНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "10,50", "", ""],
["", "picza-s-lukanka-kashkaval-czarevicza-i-kiseli-krastavichki-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЛУКАНКА, КАШКАВАЛ, ЦАРЕВИЦА И КИСЕЛИ КРАСТАВИЧКИ СЪС СМЕТАНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "10,50", "", ""],
["", "picza-s-pileshko-file-kashkaval-i-czarevicza-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ПИЛЕШКО ФИЛЕ, КАШКАВАЛ И ЦАРЕВИЦА С ДОМАТЕНА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "9,80", "", ""],
["", "picza-s-pileshko-file-kashkaval-i-czarevicza-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ПИЛЕШКО ФИЛЕ, КАШКАВАЛ И ЦАРЕВИЦА С МЛЕЧНО – ЧЕСНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "9,80", "", ""],
["", "picza-s-pileshko-file-kashkaval-i-czarevicza-ss-smetanova-osnova---60sm", "ПИЦА С ПИЛЕШКО ФИЛЕ, КАШКАВАЛ И ЦАРЕВИЦА СЪС СМЕТАНОВА ОСНОВА - 60см", "9,80", "", ""],
["", "picza-s-czarevicza-i-shunka-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЦАРЕВИЦА И ШУНКА С  ДОМАТЕНА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-s-czarevicza-i-shunka-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЦАРЕВИЦА И ШУНКА С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-s-czarevicza-i-shunka-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЦАРЕВИЦА И ШУНКА СЪС СМЕТАНОВА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-s-chorizo-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЧОРИЗО С ДОМАТЕНА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "9,10", "", ""],
["", "picza-s-chorizo-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЧОРИЗО С МЛЕЧНО – ЧЕСНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "9,10", "", ""],
["", "picza-s-chorizo-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ЧОРИЗО СЪС СМЕТАНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "9,10", "", ""],
["", "picza-s-shunka-i-kashkaval-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ШУНКА И КАШКАВАЛ С ДОМАТЕНА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "7,00", "", ""],
["", "picza-s-shunka-i-kashkaval-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ШУНКА И КАШКАВАЛ С МЛЕЧНО – ЧЕСНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,00", "", ""],
["", "picza-s-shunka-i-kashkaval-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ШУНКА И КАШКАВАЛ СЪС СМЕТАНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,00", "", ""],
["", "picza-s-shunka-kashkaval-i-maslini-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ШУНКА, КАШКАВАЛ И МАСЛИНИ С ДОМАТЕНА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-s-shunka-kashkaval-i-maslini-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ШУНКА, КАШКАВАЛ И МАСЛИНИ С МЛЕЧНО – ЧЕСНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-s-shunka-kashkaval-i-maslini-ss-smetanova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ШУНКА, КАШКАВАЛ И МАСЛИНИ СЪС СМЕТАНОВА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-s-shunka-kiseli-krastavichki-i-kashkaval-s-domatena-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ШУНКА, КИСЕЛИ КРАСТАВИЧКИ И КАШКАВАЛ С ДОМАТЕНА ОСНОВА -  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-s-shunka-kiseli-krastavichki-i-kashkaval-s-mlechno--chesnova-osnova---60-sm-1460-gr---1630-gr", "ПИЦА С ШУНКА, КИСЕЛИ КРАСТАВИЧКИ И КАШКАВАЛ С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 60 см. /1460 гр. - 1630 гр./", "7,70", "", ""],
["", "picza-s-shunka-kiseli-krastavichki-i-kashkaval-ss-smetanova-osnova-60-sm-1460-gr---1630-gr", "ПИЦА С ШУНКА, КИСЕЛИ КРАСТАВИЧКИ И КАШКАВАЛ СЪС СМЕТАНОВА ОСНОВА  60 см. /1460 гр. - 1630 гр./", "7,70", "", ""]

            ],

            "ПИЦИ - МАЛКИ И ГОЛЕМИ": [
                ["", "picza-salsiche-s-mlechno--chesnova-osnova---30-sm-460-gr---550-gr", "ПИЦА САЛСИЧЕ С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "5,60", "", ""],
["", "picza-salsiche-ss-smetanova-osnova---30-sm-460-gr---550-gr", "ПИЦА САЛСИЧЕ СЪС СМЕТАНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "5,60", "", ""],
["", "picza-salsiche-s-domatena-osnova---40-sm-840-gr---960-gr", "ПИЦА САЛСИЧЕ С ДОМАТЕНА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-salsiche-s-mlechno--chesnova-osnova---40-sm-840-gr---960-gr", "ПИЦА САЛСИЧЕ С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-salsiche-ss-smetanova-osnova---40-sm-840-gr---960-gr", "ПИЦА САЛСИЧЕ СЪС СМЕТАНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-sicziliana-s-domatena-osnova---30-sm-460-gr---550-gr", "ПИЦА СИЦИЛИАНА С ДОМАТЕНА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-sicziliana-s-mlechno--chesnova-osnova---30-sm-460-gr---550-gr", "ПИЦА СИЦИЛИАНА С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-sicziliana-ss-smetanova-osnova---30-sm-460-gr---550-gr", "ПИЦА СИЦИЛИАНА СЪС СМЕТАНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-sicziliana-s-domatena-osnova---40-sm-840-gr---960-gr", "ПИЦА СИЦИЛИАНА С ДОМАТЕНА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-sicziliana-s-mlechno--chesnova-osnova---40-sm-840-gr---960-gr", "ПИЦА СИЦИЛИАНА С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-sicziliana-ss-smetanova-osnova---40-sm-840-gr---960-gr", "ПИЦА СИЦИЛИАНА СЪС СМЕТАНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-toskana-s-domatena-osnova---30-sm-460-gr---550-gr", "ПИЦА ТОСКАНА С ДОМАТЕНА ОСНОВА - 30 см. /460 гр. - 550 гр./", "5,60", "", ""],
["", "picza-toskana-s-mlechno--chesnova-osnova---30-sm-460-gr---550-gr", "ПИЦА ТОСКАНА С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "5,60", "", ""],
["", "picza-toskana-ss-smetanova-osnova---30-sm-460-gr---550-gr", "ПИЦА ТОСКАНА СЪС СМЕТАНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "5,60", "", ""],
["", "picza-toskana-s-domatena-osnova---40-sm-840-gr---960-gr", "ПИЦА ТОСКАНА С ДОМАТЕНА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,10", "", ""],
["", "picza-toskana-s-mlechno--chesnova-osnova---40-sm-840-gr---960-gr", "ПИЦА ТОСКАНА С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,10", "", ""],
["", "picza-toskana-ss-smetanova-osnova---40-sm-840-gr---960-gr", "ПИЦА ТОСКАНА СЪС СМЕТАНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,10", "", ""],
["", "picza-tuna-s-domatena-osnova---30-sm-460-gr---550-gr", "ПИЦА ТУНА С ДОМАТЕНА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-tuna-s-mlechno--chesnova-osnova---30-sm-460-gr---550-gr", "ПИЦА ТУНА С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-tuna-ss-smetanova-osnova---30-sm-460-gr---550-gr", "ПИЦА ТУНА СЪС СМЕТАНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-tuna-s-domatena-osnova---40-sm-840-gr---960-gr", "ПИЦА ТУНА С ДОМАТЕНА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-tuna-s-mlechno--chesnova-osnova---40-sm-840-gr---960-gr", "ПИЦА ТУНА С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-tuna-ss-smetanova-osnova---40-sm-840-gr---960-gr", "ПИЦА ТУНА СЪС СМЕТАНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-formadzho-s-domatena-osnova---30-sm-460-gr---550-gr", "ПИЦА ФОРМАДЖО С ДОМАТЕНА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-formadzho-s-mlechno--chesnova-osnova---30-sm-460-gr---550-gr", "ПИЦА ФОРМАДЖО С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-formadzho-ss-smetanova-osnova---30-sm-460-gr---550-gr", "ПИЦА ФОРМАДЖО СЪС СМЕТАНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-formadzho-s-domatena-osnova---40-sm-840-gr---960-gr", "ПИЦА ФОРМАДЖО С ДОМАТЕНА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-formadzho-s-mlechno--chesnova-osnova---40-sm-840-gr---960-gr", "ПИЦА ФОРМАДЖО С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-formadzho-ss-smetanova-osnova---40-sm-840-gr---960-gr", "ПИЦА ФОРМАДЖО СЪС СМЕТАНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-francziskana-s-domatena-osnova---30-sm-460-gr---550-gr", "ПИЦА ФРАНЦИСКАНА С ДОМАТЕНА ОСНОВА - 30 см. /460 гр. - 550 гр./", "4,90", "", ""],
["", "picza-francziskana-s-mlechno--chesnova-osnova---30-sm-460-gr---550-gr", "ПИЦА ФРАНЦИСКАНА С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "4,90", "", ""],
["", "picza-francziskana-ss-smetanova-osnova---30-sm-460-gr---550-gr", "ПИЦА ФРАНЦИСКАНА СЪС СМЕТАНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "4,90", "", ""],
["", "picza-francziskana-domatena-osnova---40-sm-840-gr---960-gr", "ПИЦА ФРАНЦИСКАНА ДОМАТЕНА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-francziskana-s-mlechno--chesnova-osnova---40-sm-840-gr---960-gr", "ПИЦА ФРАНЦИСКАНА С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-francziskana-ss-smetanova-osnova---40-sm-840-gr---960-gr", "ПИЦА ФРАНЦИСКАНА СЪС СМЕТАНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-fruti-di-mare-s-domatena-osnova---30-sm-460-gr---550-gr", "ПИЦА ФРУТИ ДИ МАРЕ С ДОМАТЕНА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-fruti-di-mare-s-mlechno--chesnova-osnova--30-sm-460-gr---550-gr", "ПИЦА ФРУТИ ДИ МАРЕ С МЛЕЧНО – ЧЕСНОВА ОСНОВА -30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-fruti-di-mare-ss-smetanova-osnova---30-sm-460-gr---550-gr", "ПИЦА ФРУТИ ДИ МАРЕ СЪС СМЕТАНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-fruti-di-mare-s-domatena-osnova---40-sm-840-gr---960-gr", "ПИЦА ФРУТИ ДИ МАРЕ С ДОМАТЕНА ОСНОВА - 40 см. /840 гр. - 960 гр./", "12,60", "", ""],
["", "picza-fruti-di-mare-s-mlechno--chesnova-osnova---40-sm-840-gr---960-gr", "ПИЦА ФРУТИ ДИ МАРЕ С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "12,60", "", ""],
["", "picza-fruti-di-mare-ss-smetanova-osnova---40-sm-840-gr---960-gr", "ПИЦА ФРУТИ ДИ МАРЕ СЪС СМЕТАНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "12,60", "", ""],
["", "picza-khavaj-s-domatena-osnova---30-sm-460-gr---550-gr", "ПИЦА ХАВАЙ С ДОМАТЕНА ОСНОВА - 30 см. /460 гр. - 550 гр./", "4,20", "", ""],
["", "picza-khavaj-s-mlechno--chesnova-osnova---30-sm-460-gr---550-gr", "ПИЦА ХАВАЙ С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "4,20", "", ""],
["", "picza-khavaj-ss-smetanova-osnova---30-sm-460-gr---550-gr", "ПИЦА ХАВАЙ СЪС СМЕТАНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "4,20", "", ""],
["", "picza-khavaj-s-domatena-osnova---40-sm-840-gr---960-gr", "ПИЦА ХАВАЙ  С ДОМАТЕНА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-khavaj-s-mlechno--chesnova-osnova---40-sm-840-gr---960-gr", "ПИЦА ХАВАЙ С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-khavaj-ss-smetanova-osnova---40-sm-840-gr---960-gr", "ПИЦА ХАВАЙ СЪС СМЕТАНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-kherkules-s-domatena-osnova---30-sm-460-gr---550-gr", "ПИЦА ХЕРКУЛЕС С ДОМАТЕНА ОСНОВА - 30 см. /460 гр. - 550 гр./", "4,90", "", ""],
["", "picza-kherkules-s-mlechno--chesnova-osnova---30-sm-460-gr---550-gr", "ПИЦА ХЕРКУЛЕС С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "4,90", "", ""],
["", "picza-kherkules-ss-smetanova-osnova---30-sm-460-gr---550-gr", "ПИЦА ХЕРКУЛЕС СЪС СМЕТАНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "4,90", "", ""],
["", "picza-kherkules-s-domatena-osnova---40-sm-840-gr---960-gr", "ПИЦА ХЕРКУЛЕС С ДОМАТЕНА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-kherkules-s-mlechno--chesnova-osnova---40-sm-840-gr---960-gr", "ПИЦА ХЕРКУЛЕС С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-kherkules-ss-smetanova-osnova---40-sm-840-gr---960-gr", "ПИЦА ХЕРКУЛЕС СЪС СМЕТАНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "8,40", "", ""],
["", "picza-chioto-s-domatena-osnova--30-sm-460-gr---550-gr", "ПИЦА ЧИОТО С ДОМАТЕНА ОСНОВА -30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-chioto-s-mlechno--chesnova-osnova---30-sm-460-gr---550-gr", "ПИЦА ЧИОТО С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-chioto-ss-smetanova-osnova---30-sm-460-gr---550-gr", "ПИЦА ЧИОТО СЪС СМЕТАНОВА ОСНОВА - 30 см. /460 гр. - 550 гр./", "6,30", "", ""],
["", "picza-chioto-s-domatena-osnova---40-sm-840-gr---960-gr", "ПИЦА ЧИОТО С ДОМАТЕНА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-chioto-s-mlechno--chesnova-osnova---40-sm-840-gr---960-gr", "ПИЦА ЧИОТО С МЛЕЧНО – ЧЕСНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""],
["", "picza-chioto-ss-smetanova-osnova---40-sm-840-gr---960-gr", "ПИЦА ЧИОТО  СЪС СМЕТАНОВА ОСНОВА - 40 см. /840 гр. - 960 гр./", "9,80", "", ""]

            ],

            "ПИЦИ - ПАРЧЕ": [
                ["", "parche-picza-s-bekon-i-topeno-sirene-150-gr", "ПАРЧЕ ПИЦА С БЕКОН И ТОПЕНО СИРЕНЕ /150 гр./", "0,70", "", ""],
["", "parche-picza-s-lukanka-i-kashkaval-150-gr", "ПАРЧЕ ПИЦА С ЛУКАНКА И КАШКАВАЛ /150 гр./", "0,70", "", ""]

            ],

            "ПЪРЛЕНКИ": [
                ["", "prlenka-kombinirana", "Пърленка комбинирана", "1,40", "250", ""],
["", "prlenka-prlenka", "Пърленка пърленка", "1,40", "180", ""],
["", "prlenka-s-lukanka-topeno-sirene-i-kashkaval", "Пърленка с луканка, топено сирене и кашкавал", "2,10", "280", ""],
["", "prlenka-s-shunka-i-kashkaval-250-gr", "Пърленка с шунка и кашкавал /250 гр./", "2,10", "", ""],
["", "prlenka-chesnova-190-gr", "Пърленка чеснова /190 гр./", "1,40", "", ""]

            ],

            "ХЛЯБ И ХЛЕБНИ ИЗДЕЛИЯ": [
                ["", "krutoni-30-gr", "Крутони /30 гр./", "0,00", "", ""],
["", "krutoni-v-opakovka-30-gr", "Крутони в опаковка /30 гр./", "0,00", "", ""],
["", "pitka-130-gr", "Питка /130 гр./", "0,00", "", ""],
["", "pitka-chesnova-prepechena-140-gr", "Питка чеснова препечена /140 гр./", "0,00", "", ""],
["", "filijka-khlyab-40-gr", "Филийка хляб /40 гр./", "0,00", "", ""],
["", "filijka-khlyab-prepechena-30-gr", "Филийка хляб препечена /30 гр./", "0,00", "", ""],
["", "filijka-khlyab-prepechena-chesnova-35-gr", "Филийка хляб препечена чеснова /35 гр./", "0,00", "", ""],
["", "franzela-130-gr", "Франзела /130 гр./", "0,00", "", ""],
["", "khlyab-czyal-dobrudzha-600-gr", "Хляб цял добруджа /600 гр./", "0,70", "", ""],
["", "khlyab-czyal-cheren-600-gr", "Хляб цял черен /600 гр./", "0,70", "", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta-150-gr", "Бисквитена торта /150 гр./", "1,40", "", ""],
["", "gris-khalva-150-gr", "Грис халва /150 гр./", "0,70", "", ""],
["", "domashen-chijzkejk-130-gr", "Домашен чийзкейк /130 гр./", "1,40", "", ""],
["", "torta-rafaelo-150-gr", "Торта рафаело /150 гр./", "1,40", "", ""],
["", "chia-s-plodove-i-czedeno-mlyako-160-gr", "Чиа с плодове и цедено мляко /160 гр./", "1,40", "", ""],
["", "krem-magnoliya-s-banani-200-gr", "Крем Магнолия с банани /200 гр./", "1,40", "", ""],
["", "krem-magnoliya-s-praskovi-200-gr", "Крем Магнолия с праскови /200 гр./", "1,40", "", ""]

            ],

            "ГОФРЕТИ": [
                ["", "gofreta-110-gr", "Гофрета /110 гр./", "0,70", "", ""],
["", "gofreta-s-byal-shokolad-150-gr", "Гофрета с бял шоколад /150 гр./", "0,70", "", ""],
["", "gofreta-s-med-i-orekhi-150-gr", "Гофрета с мед и орехи /150 гр./", "1,40", "", ""],
["", "gofreta-s-shokolad-150-gr", "Гофрета с шоколад /150 гр./", "0,70", "", ""],
["", "gofreta-ss-sladko-ot-borovinki-150-gr", "Гофрета със сладко от боровинки /150 гр./", "0,70", "", ""],
["", "gofreta-ss-sladko-ot-gorski-plodove-150-gr", "Гофрета със сладко от горски плодове /150 гр./", "0,70", "", ""],
["", "gofreta-ss-sladko-ot-malini-150-gr", "Гофрета със сладко от малини /150 гр./", "0,70", "", ""],
["", "gofreta-ss-sladko-ot-yagodi-150-gr", "Гофрета със сладко от ягоди /150 гр./", "0,70", "", ""]

            ],

            "ПАЛАЧИНКИ": [
                ["", "palachinka-110-gr", "Палачинка /110 гр./", "0,70", "", ""],
["", "palachinka-s-byal-shokolad-150-gr", "Палачинка с бял шоколад /150 гр./", "0,70", "", ""],
["", "palachinka-s-kashkaval-150-gr", "Палачинка с кашкавал /150 гр./", "0,70", "", ""],
["", "palachinka-s-med-150-gr", "Палачинка с мед /150 гр./", "0,70", "", ""],
["", "palachinka-s-med-i-orekhi-170-gr", "Палачинка с мед и орехи /170 гр./", "1,40", "", ""],
["", "palachinka-s-shokolad-150-gr", "Палачинка с шоколад /150 гр./", "0,70", "", ""],
["", "palachinka-s-shunka-i-kashkaval-160-gr", "Палачинка с шунка и кашкавал /160 гр./", "0,70", "", ""],
["", "palachinka-ss-sirene-i-kashkaval-160-gr", "Палачинка със сирене и кашкавал /160 гр./", "0,70", "", ""],
["", "palachinka-ss-sladko-ot-borovinki-150-gr", "Палачинка със сладко от боровинки /150 гр./", "0,70", "", ""],
["", "palachinka-ss-sladko-ot-gorski-plodove-150-gr", "Палачинка със сладко от горски плодове /150 гр./", "0,70", "", ""],
["", "palachinka-ss-sladko-ot-malini-150-gr", "Палачинка със сладко от малини /150 гр./", "0,70", "", ""],
["", "palachinka-ss-sladko-ot-yagodi-150-gr", "Палачинка със сладко от ягоди /150 гр./", "0,70", "", ""]

            ],

            "ДОБАВКИ И СОСОВЕ": [
                ["", "dobavka-ananas-50-gr", "Добавка ананас /50 гр./", "0,70", "", ""],
["", "dobavka-ananas-70-gr", "Добавка ананас /70 гр./", "0,70", "", ""],
["", "dobavka-bekon-50-gr", "Добавка бекон /50 гр./", "0,00", "", ""],
["", "dobavka-bekon-70-gr", "Добавка бекон /70 гр./", "0,70", "", ""],
["", "dobavka-gorchicza-50-ml", "Добавка горчица /50 мл./", "0,00", "", ""],
["", "dobavka-gorchicza-70-ml", "Добавка горчица /70 мл./", "0,70", "", ""],
["", "dobavka-gbi-50-gr", "Добавка гъби /50 гр./", "0,00", "", ""],
["", "dobavka-gbi-70-gr", "Добавка гъби /70 гр./", "0,00", "", ""],
["", "dobavka-domati-50-gr", "Добавка домати /50 гр./", "0,00", "", ""],
["", "dobavka-domati-70-gr", "Добавка домати /70 гр./", "0,00", "", ""],
["", "dobavka-dresing-salata-czezar-50-ml", "Добавка дресинг салата Цезар /50 мл./", "0,70", "", ""],
["", "dobavka-dresing-salata-czezar-70-ml", "Добавка дресинг салата Цезар /70 мл./", "0,70", "", ""],
["", "dobavka-kajma-smes-50-gr", "Добавка кайма смес /50 гр./", "0,00", "", ""],
["", "dobavka-kajma-smes-70-gr", "Добавка кайма смес /70 гр./", "0,70", "", ""],
["", "dobavka-kashkaval-50-gr", "Добавка кашкавал /50 гр./", "0,70", "", ""],
["", "dobavka-kashkaval-70-gr", "Добавка кашкавал /70 гр./", "0,70", "", ""],
["", "dobavka-ketchup-50-ml", "Добавка кетчуп /50 мл./", "0,00", "", ""],
["", "dobavka-ketchup-70-ml", "Добавка кетчуп /70 мл./", "0,70", "", ""],
["", "dobavka-kiselo-mlyako-100-gr", "Добавка кисело мляко /100 гр./", "0,00", "", ""],
["", "dobavka-kiselo-mlyako-400-gr", "Добавка кисело мляко /400 гр./", "0,70", "", ""],
["", "dobavka-kiseli-krastavichki-50-gr", "Добавка кисели краставички /50 гр./", "0,00", "", ""],
["", "dobavka-kiseli-krastavichki-70-gr", "Добавка кисели краставички /70 гр./", "0,00", "", ""],
["", "dobavka-krastaviczi-presni-50-gr", "Добавка краставици пресни /50 гр./", "0,00", "", ""],
["", "dobavka-krastaviczi-presni-70-gr", "Добавка краставици пресни /70 гр./", "0,00", "", ""],
["", "dobavka-luk-cherven-50-gr", "Добавка лук червен /50 гр./", "0,00", "", ""],
["", "dobavka-luk-cherven-70-gr", "Добавка лук червен /70 гр./", "0,00", "", ""],
["", "dobavka-lukanka-50-gr", "Добавка луканка /50 гр./", "0,70", "", ""],
["", "dobavka-lukanka-70-gr", "Добавка луканка /70 гр./", "1,40", "", ""],
["", "dobavka-lyutenicza-50-gr", "Добавка лютеница /50 гр./", "0,00", "", ""],
["", "dobavka-lyutenicza-70-gr", "Добавка лютеница /70 гр./", "0,70", "", ""],
["", "dobavka-majoneza-50-ml", "Добавка майонеза /50 мл./", "0,00", "", ""],
["", "dobavka-majoneza-70-ml", "Добавка майонеза /70 мл./", "0,70", "", ""],
["", "dobavka-maslini-50-gr", "Добавка маслини /50 гр./", "0,70", "", ""],
["", "dobavka-maslini-70-gr", "Добавка маслини /70 гр./", "0,70", "", ""],
["", "dobavka-moczarela-50-gr", "Добавка моцарела /50 гр./", "0,70", "", ""],
["", "dobavka-moczarela-70-gr", "Добавка моцарела /70 гр./", "0,70", "", ""],
["", "dobavka-pileshko-file-50-gr", "Добавка пилешко филе /50 гр./", "0,00", "", ""],
["", "dobavka-pileshko-file-70-gr", "Добавка пилешко филе /70 гр./", "0,70", "", ""],
["", "dobavka-riba-ton-50-gr", "Добавка риба тон /50 гр./", "1,40", "", ""],
["", "dobavka-riba-ton-70-gr", "Добавка риба тон /70 гр./", "1,40", "", ""],
["", "dobavka-sirene-50-gr", "Добавка сирене /50 гр./", "0,00", "", ""],
["", "dobavka-sirene-70-gr", "Добавка сирене /70 гр./", "0,70", "", ""],
["", "dobavka-sirene-plochka-100-gr", "Добавка сирене плочка /100 гр./", "0,70", "", ""],
["", "dobavka-sirene-sino-50-gr", "Добавка сирене синьо /50 гр./", "0,70", "", ""],
["", "dobavka-sirene-sino-70-gr", "Добавка сирене синьо /70 гр./", "1,40", "", ""],
["", "dobavka-sirene-topeno-50-gr", "Добавка сирене топено /50 гр./", "0,70", "", ""],
["", "dobavka-sirene-topeno-70-gr", "Добавка сирене топено /70 гр./", "0,70", "", ""],
["", "sos-barbekyu-50-ml", "Сос барбекю /50 мл./", "0,70", "", ""],
["", "sos-barbekyu-70-ml", "Сос барбекю /70 мл./", "0,70", "", ""],
["", "sos-arabski-50-ml", "Сос арабски /50 мл./", "0,70", "", ""],
["", "sos-arabski-70-ml", "Сос арабски /70 мл./", "0,70", "", ""],
["", "sos-picza-domaten-50-ml", "Сос пица доматен /50 мл./", "0,00", "", ""],
["", "sos-picza-domaten-70-ml", "Сос пица доматен /70 мл./", "0,70", "", ""],
["", "sos-soev-50-ml", "Сос соев /50 мл./", "0,70", "", ""],
["", "sos-soev-70-ml", "Сос соев /70 мл./", "0,70", "", ""],
["", "sos-chesnov-50-ml", "Сос чеснов /50 мл./", "0,00", "", ""],
["", "sos-chesnov-70-ml", "Сос чеснов /70 мл./", "0,70", "", ""],
["", "sos-chili-50-ml", "Сос чили /50 мл./", "0,70", "", ""],
["", "sos-chili-70-ml", "Сос чили /70 мл./", "0,70", "", ""],
["", "dobavka-czarevicza-50-gr", "Добавка царевица /50 гр./", "0,00", "", ""],
["", "dobavka-czarevicza-70-gr", "Добавка царевица /70 гр./", "0,00", "", ""],
["", "dobavka-chedar-50-gr", "Добавка чедар /50 гр./", "0,70", "", ""],
["", "dobavka-chedar-70-gr", "Добавка чедар /70 гр./", "1,40", "", ""],
["", "dobavka-chorizo-50-gr", "Добавка чоризо /50 гр./", "0,70", "", ""],
["", "dobavka-chorizo-70-gr", "Добавка чоризо /70 гр./", "1,40", "", ""],
["", "dobavka-chushka-lyuta-8-gr", "Добавка чушка люта /8 гр./", "0,00", "", ""],
["", "dobavka-chushki-presni-50-gr", "Добавка чушки пресни /50 гр./", "0,00", "", ""],
["", "dobavka-chushki-presni-70-gr", "Добавка чушки пресни /70 гр./", "0,00", "", ""],
["", "dobavka-shunka-50-gr", "Добавка шунка /50 гр./", "0,00", "", ""],
["", "dobavka-shunka-70-gr", "Добавка шунка /70 гр./", "0,70", "", ""],
["", "dobavka-yajcze-vareno-50-gr---65-gr", "Добавка яйце варено /50 гр. - 65 гр./", "0,00", "", ""],
["", "dobavka-yajcze-przheno-50-gr---65-gr", "Добавка яйце пържено /50 гр. - 65 гр./", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", ""],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "0,70", "500", ""],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "0,70", "500", ""]

            ],

            "НАПИТКИ - АЙРАНИ": [
                ["", "ajran-500-ml", "Айран /500 мл./", "0,70", "", ""],
["", "ajran-1000-ml", "Айран /1000 мл./", "0,70", "", ""]

            ],

            "НАПИТКИ - БИРИ": [
                ["", "bira-ariana-500-ml", "Бира Ариана /500 мл./", "0,70", "", ""],
["", "bira-ariana-1000-ml", "Бира Ариана /1000 мл./", "1,40", "", ""],
["", "bira-zagorka-500-ml", "Бира Загорка /500 мл./", "0,70", "", ""],
["", "bira-zagorka-1000-ml", "Бира Загорка /1000 мл./", "1,40", "", ""],
["", "bira-kamenicza-500-ml", "Бира Каменица /500 мл./", "0,70", "", ""],
["", "bira-stela-artoa-500-ml", "Бира Стела артоа /500 мл./", "1,40", "", ""]

            ],

            "НАПИТКИ - ГАЗИРАНИ ВОДИ": [
                ["", "gazirana-voda-gorna-banya-1500-ml", "Газирана вода Горна Баня /1500 мл./", "0,70", "", ""]

            ],

            "НАПИТКИ - МИНЕРАЛНИ ВОДИ": [
                ["", "mineralna-voda-baldaran-500-ml", "Минерална вода Балдаран /500 мл./", "0,00", "", ""],
["", "mineralna-voda-velingrad-500-ml", "Минерална вода Велинград /500 мл./", "0,00", "", ""],
["", "mineralna-voda-velingrad-1500-ml", "Минерална вода Велинград /1500 мл./", "0,70", "", ""],
["", "mineralna-voda-devin-500-ml", "Минерална вода Девин /500 мл./", "0,00", "", ""],
["", "mineralna-voda-devin-1500-ml", "Минерална вода Девин /1500 мл./", "0,70", "", ""]

            ],

            "НАПИТКИ - ЕНЕРГИЙНИ НАПИТКИ": [
                ["", "energijna-napitka-hell-250-ml", "Енергийна напитка Hell /250 мл./", "0,70", "", ""]

            ],

            "НАПИТКИ - НАТУРАЛНИ СОКОВЕ": [
                ["", "kuins-banan-250-ml", "Куинс банан /250 мл./", "0,70", "", ""],
["", "kuins-banan-i-yagoda-250-ml", "Куинс банан и ягода /250 мл./", "0,70", "", ""],
["", "kuins-vishna-250-ml", "Куинс вишна /250 мл./", "0,70", "", ""],
["", "kuins-portokal-250-ml", "Куинс портокал /250 мл./", "0,70", "", ""],
["", "kuins-praskova-250-ml", "Куинс праскова /250 мл./", "0,70", "", ""]

            ],

            "НАПИТКИ - ЛИМОНАДИ": [
                ["", "limonada-bzko-aroniya-500-ml", "Лимонада Бъзко арония /500 мл./", "1,40", "", ""],
["", "limonada-bzko-aroniya-1000-ml", "Лимонада Бъзко арония /1000 мл./", "2,80", "", ""],
["", "limonada-bzko-borovinka-500-ml", "Лимонада Бъзко боровинка /500 мл./", "1,40", "", ""],
["", "limonada-bzko-borovinka-1000-ml", "Лимонада Бъзко боровинка /1000 мл./", "2,80", "", ""],
["", "limonada-bzko-vishna-500-ml", "Лимонада Бъзко вишна /500 мл./", "1,40", "", ""],
["", "limonada-bzko-vishna-1000-ml", "Лимонада Бъзко вишна /1000 мл./", "2,80", "", ""],
["", "limonada-bzko-kasis-500-ml", "Лимонада Бъзко касис /500 мл./", "1,40", "", ""],
["", "limonada-bzko-kasis-1000-ml", "Лимонада Бъзко касис  /1000 мл./", "2,80", "", ""],
["", "limonada-bzko-kasis-i-aroniya-500-ml", "Лимонада Бъзко касис и арония /500 мл./", "1,40", "", ""],
["", "limonada-bzko-kasis-i-aroniya-1000-ml", "Лимонада Бъзко касис и арония /1000 мл./", "2,80", "", ""],
["", "limonada-bzko-kpina-500-ml", "Лимонада Бъзко къпина /500 мл./", "1,40", "", ""],
["", "limonada-bzko-kpina-1000-ml", "Лимонада Бъзко къпина /1000 мл./", "2,80", "", ""],
["", "limonada-bzko-menta-500-ml", "Лимонада Бъзко мента /500 мл./", "1,40", "", ""],
["", "limonada-bzko-menta-1000-ml", "Лимонада Бъзко мента /1000 мл./", "2,80", "", ""],
["", "limonada-bzko-plod-ot-bz-i-dzhindzhifil-500-ml", "Лимонада Бъзко плод от бъз и джинджифил /500 мл./", "1,40", "", ""],
["", "limonada-bzko-plod-ot-bz-i-dzhindzhifil-1000-ml", "Лимонада Бъзко плод от бъз и джинджифил /1000 мл./", "2,80", "", ""],
["", "limonada-bzko-praskova-500-ml", "Лимонада Бъзко праскова /500 мл./", "1,40", "", ""],
["", "limonada-bzko-praskova-1000-ml", "Лимонада Бъзко праскова /1000 мл./", "2,80", "", ""]

            ],

            "НАПИТКИ - ФРЕШОВЕ": [
                ["", "fresh-bzko-gorski-plod-250-ml", "Фреш Бъзко горски плод /250 мл./", "1,40", "", ""],
["", "fresh-bzko-kpina-250-ml", "Фреш Бъзко къпина /250 мл./", "1,40", "", ""],
["", "fresh-bzko-malina-250-ml", "Фреш Бъзко малина /250 мл./", "1,40", "", ""],
["", "fresh-bzko-cheresha-250-ml", "Фреш Бъзко череша /250 мл./", "1,40", "", ""],
["", "fresh-bzko-yagoda-250-ml", "Фреш Бъзко ягода /250 мл./", "1,40", "", ""],
["", "fresh-grejpfurt-500-ml", "Фреш грейпфурт /500 мл./", "2,10", "", ""],
["", "fresh-portokal-500-ml", "Фреш портокал /500 мл./", "2,10", "", ""],
["", "fresh-portokal-i-grejpfrut-500-ml", "Фреш портокал и грейпфрут /500 мл./", "2,10", "", ""]

            ],

            "ФИТНЕС МЕНЮ - ХРАНИ": [
                ["", "akula-kotlet-s-vareni-kartofi-garnitura-350-gr", "Акула котлет с варени картофи гарнитура /350 гр./", "4,20", "", ""],
["", "byala-riba-file-s-varen-oriz-garnitura-320-gr", "Бяла риба филе с варен ориз гарнитура /320 гр./", "3,50", "", ""],
["", "byala-riba-file-s-vareni-kartofi-garnitura-320-gr", "Бяла риба филе с варени картофи гарнитура /320 гр./", "4,20", "", ""],
["", "byala-riba-file-s-morkovi-i-brokoli-garnitura-320-gr", "Бяла риба филе с моркови и броколи гарнитура /320 гр./", "4,20", "", ""],
["", "zadusheni-zelenchuczi-200-gr", "Задушени зеленчуци /200 гр./", "2,10", "", ""],
["", "pileshki-shishcheta-na-bbq-s-varen-oriz-garnitura-320-gr", "Пилешки шишчета на BBQ с варен ориз гарнитура /320 гр./", "3,50", "", ""],
["", "pileshki-shishcheta-na-bbq-s-vareni-kartofi-garnitura320-gr", "Пилешки шишчета на BBQ с варени картофи гарнитура/320 гр./", "3,50", "", ""],
["", "pileshki-shishcheta-na-bbq-s-morkovi-i-brokoli-garnitura-320-gr", "Пилешки шишчета на BBQ с моркови и броколи гарнитура /320 гр./", "4,20", "", ""],
["", "pileshko-file-na-bbq-s-varen-oriz-garnitura-300-gr", "Пилешко филе на BBQ с варен ориз гарнитура /300 гр./", "3,50", "", ""],
["", "pileshko-file-na-bbq-s-vareni-kartofi-garnitura-300-gr", "Пилешко филе на BBQ с варени картофи гарнитура /300 гр./", "3,50", "", ""],
["", "pileshko-file-na-bbq-s-krastaviczi-garnitura-300-gr", "Пилешко филе на BBQ с краставици гарнитура /300 гр./", "4,20", "", ""],
["", "pileshko-file-na-bbq-s-morkovi-i-brokoli-garnitura-300-gr", "Пилешко филе на BBQ с моркови и броколи гарнитура /300 гр./", "4,20", "", ""],
["", "pleskavicza-teleshka-na-bbq-s-varen-oriz-garnitura-360-gr", "Плескавица телешка на BBQ с варен ориз гарнитура /360 гр./", "3,50", "", ""],
["", "pleskavicza-teleshka-na-bbq-s-vareni-kartofi-garnitura-360-gr", "Плескавица телешка на BBQ с варени картофи гарнитура /360 гр./", "3,50", "", ""],
["", "pleskavicza-teleshka-na-bbq-s-morkovi-i-brokoli-garnitura-360-gr", "Плескавица телешка на BBQ с моркови и броколи гарнитура /360 гр./", "4,20", "", ""],
["", "pleskavicza-teleshka-na-bbq-s-pecheni-kartofi-garnitura-360-gr", "Плескавица телешка на BBQ с печени картофи гарнитура /360 гр./", "3,50", "", ""],
["", "pleskavicza-teleshka-na-bbq-s-krastaviczi-garnitura-360-gr", "Плескавица телешка на BBQ с краставици гарнитура /360 гр./", "3,50", "", ""],
["", "pstrva-na-bbq-s-vareni-kartofi-garnitura-380-gr", "Пъстърва на BBQ с варени картофи гарнитура /380 гр./", "4,90", "", ""],
["", "pstrva-na-bbq-s-vareni-oriz-garnitura-380-gr", "Пъстърва на BBQ с варени ориз гарнитура /380 гр./", "4,20", "", ""],
["", "pstrva-na-bbq-s-morkovi-i-brokoli-garnitura-380-gr", "Пъстърва на BBQ с моркови и броколи гарнитура /380 гр./", "4,90", "", ""],
["", "svinsko-file-na-bbq-s-vareni-kartofi-garnitura-380-gr", "Свинско филе на BBQ с варени картофи гарнитура /380 гр./", "3,50", "", ""],
["", "svinsko-file-na-bbq-s-vareni-oriz-garnitura-380-gr", "Свинско филе на BBQ с варени ориз гарнитура /380 гр./", "3,50", "", ""],
["", "svinsko-file-na-bbq-s-morkovi-i-brokoli-garnitura-380-gr", "Свинско филе  на BBQ с моркови и броколи гарнитура /380 гр./", "4,20", "", ""],
["", "svinsko-file-na-bbq-ss-zelena-salata-garnitura-380-gr", "Свинско филе  на BBQ със зелена салата гарнитура /380 гр./", "4,20", "", ""],
["", "skumriya-na-bbq-s-vareni-kartofi-garnitura-380-gr", "Скумрия на BBQ с варени картофи гарнитура /380 гр./", "3,50", "", ""],
["", "skumriya-na-bbq-s-vareni-oriz-garnitura-380-gr", "Скумрия на BBQ с варени ориз гарнитура /380 гр./", "3,50", "", ""],
["", "skumriya-na-bbq-s-morkovi-i-brokoli-garnitura-380-gr", "Скумрия на BBQ с моркови и броколи гарнитура /380 гр./", "4,20", "", ""],
["", "teleshki-kyufteta-na-bbq-s-vareni-kartofi-garnitura-320-gr", "Телешки кюфтета на BBQ с варени картофи гарнитура /320 гр./", "3,50", "", ""],
["", "teleshki-kyufteta-na-bbq-s-vareni-oriz-garnitura-320-gr", "Телешки кюфтета на BBQ с варени ориз гарнитура /320 гр./", "3,50", "", ""],
["", "teleshki-kyufteta-na-bbq-s-morkovi-i-brokoli-garnitura-320-gr", "Телешки кюфтета на BBQ с моркови и броколи гарнитура /320 гр./", "4,20", "", ""],
["", "teleshki-shishcheta-na-bbq-s-vareni-kartofi-garnitura-320-gr", "Телешки шишчета на BBQ с варени картофи гарнитура /320 гр./", "4,20", "", ""],
["", "teleshki-shishcheta-na-bbq-s-vareni-oriz-garnitura-320-gr", "Телешки шишчета на BBQ с варени ориз гарнитура /320 гр./", "4,20", "", ""],
["", "teleshki-shishcheta-na-bbq-s-morkovi-i-brokoli-garnitura-320-gr", "Телешки шишчета на BBQ с моркови и броколи гарнитура /320 гр./", "4,20", "", ""],
["", "yajcze-przheno-s-chubricza-i-kri-85-gr", "Яйце пържено с чубрица и къри /85 гр./", "0,70", "", ""]

            ],

            "ФИТНЕС МЕНЮ - НАПИТКИ": [
                ["", "bcaa-kasis-330-ml", "BCAA касис /330 мл./", "0,70", "", ""],
["", "bcaa-lajm-i-limon-330-ml", "BCAA лайм и лимон /330 мл./", "0,70", "", ""]

            ],

            "ФИТНЕС МЕНЮ - ДЕСЕРТИ": [
                ["", "proteinova-palachinka-s-banan-i-shokolad-140-gr", "Протеинова палачинка с банан и шоколад /140 гр./", "1,40", "", ""],
["", "proteinova-palachinka-s-kpini-i-malini-140-gr", "Протеинова палачинка с къпини и малини /140 гр./", "1,40", "", ""],
["", "proteinova-palachinka-s-portokal-i-shokolad-140-gr", "Протеинова палачинка с портокал и шоколад /140 гр./", "1,40", "", ""],
["", "proteinova-palachinka-s-chia-i-shokolad-140-gr", "Протеинова палачинка с чиа и шоколад /140 гр./", "1,40", "", ""],
["", "proteinova-palachinka-s-yablka-i-leshniczi-140-gr", "Протеинова палачинка с ябълка и лешници /140 гр./", "1,40", "", ""],
["", "proteinovi-palachinki-s-banan-i-shokolad-280-gr", "Протеинови палачинки с банан и шоколад /280 гр./", "2,80", "", ""],
["", "proteinovi-palachinki-s-kpini-i-malini-280-gr", "Протеинови палачинки с къпини и малини /280 гр./", "2,80", "", ""],
["", "proteinovi-palachinki-s-portokal-i-shokolad-280-gr", "Протеинови палачинки с портокал и шоколад /280 гр./", "2,80", "", ""],
["", "proteinovi-palachinki-s-chia-i-shokolad-280-gr", "Протеинови палачинки с чиа и шоколад /280 гр./", "2,80", "", ""],
["", "proteinovi-palachinki-s-yablka-i-leshniczi-280-gr", "Протеинови палачинки с ябълка и лешници /280 гр./", "2,80", "", ""]

            ],

            "ПРИБОРИ И КОНСУМАТИВИ": [
                ["", "pvc-vilicza-1-br", "PVC вилица /1 бр./", "0,00", "", ""],
["", "pvc-lzhicza-1-br", "PVC лъжица /1 бр./", "0,00", "", ""],
["", "pvc-nozh-1-br", "PVC нож /1 бр./", "0,00", "", ""],
["", "mokra-krpa-1-br", "Мокра кърпа /1 бр./", "0,00", "", ""],
["", "pomoshhna-chiniya-1-br", "Помощна чиния /1 бр./", "0,00", "", ""],
["", "salfetka-i-lzhicza-1-br", "Салфетка и лъжица /1 бр./", "0,00", "", ""],
["", "salfetka-nazh-i-vilicza-1-br", "Салфетка, наж и вилица /1 бр./", "0,00", "", ""],
["", "torbichka-1-br", "Торбичка /1 бр./", "0,00", "", ""],
["", "torbichka-khartiena-1-br", "Торбичка хартиена /1 бр./", "0,00", "", ""],
["", "chasha-golyama-1-br", "Чаша голяма /1 бр./", "0,00", "", ""],
["", "chasha-malka-1-br", "Чаша малка /1 бр./", "0,00", "", ""]

            ],

            "ГОТВЕНИ ЯСТИЯ ЗА ДЕНЯ": [
                ["", "kyufte-ot-tikvichki-80-gr", "Кюфте от тиквички /80 гр./", "0,70", "", ""],
["", "kyufteta-po-czarigradski-330-gr", "Кюфтета по цариградски /330 гр./", "2,10", "", ""],
["", "mish-mash-300-gr", "Миш маш /300 гр./", "2,10", "", ""],
["", "musaka-350-gr", "Мусака /350 гр./", "2,10", "", ""],
["", "pile-po-kitajski-330-gr", "Пиле по китайски /330 гр./", "2,10", "", ""],
["", "pileshko-file-s-gben-sos-300-gr", "Пилешко филе с гъбен сос /300 гр./", "2,80", "", ""],
["", "picza-peperoni-420-gr---510-gr", "Пица Пеперони /420 гр. - 510 гр./", "3,50", "", ""],
["", "rulo-stefani-300-gr", "Руло Стефани /300 гр./", "2,10", "", ""],
["", "rulo-stefani-s-gben-sos-330-gr", "Руло Стефани с гъбен сос /330 гр./", "2,80", "", ""],
["", "sarmi-zelevi-postni-280-gr", "Сарми зелеви постни /280 гр./", "2,10", "", ""],
["", "sarmi-lozovi-postni-280-gr", "Сарми лозови постни /280 гр./", "2,10", "", ""],
["", "svinsko-s-oriz", "Свинско с ориз", "2,80", "330", ""],
["", "svinsko-s-pryasno-zele", "Свинско с прясно зеле", "2,80", "330", ""],
["", "tikvichki-s-chesnov-sos", "Тиквички с чеснов сос", "2,10", "280", ""],
["", "chushki-plneni-s-yajcze-i-sirene", "Чушки пълнени с яйце и сирене", "2,10", "330", ""],
["", "kyufteta-ot-tikvichki-s-mlechno---chesnov-sos-250-gr", "Кюфтета от тиквички с млечно - чеснов сос /250 гр./", "2,10", "", ""]

            ],

            "ГОТВЕНИ ПРИ ПОРЪЧКА": [
                ["", "akula-kotlet-s-garnitura-vareni-kartofi-330-gr", "Акула котлет с гарнитура варени картофи /330 гр./", "4,20", "", ""],
["", "akula-kotlet-s-garnitura-domati-i-krastaviczi-330-gr", "Акула котлет с гарнитура домати и краставици /330 гр./", "4,20", "", ""],
["", "akula-kotlet-s-garnitura-morkovi-i-zele-330-gr", "Акула котлет с гарнитура моркови и зеле /330 гр./", "4,20", "", ""],
["", "akula-kotlet-s-garnitura-przheni-kartofi-330-gr", "Акула котлет с гарнитура пържени картофи /330 гр./", "4,20", "", ""],
["", "akula-kotlet-s-garnitura-zelena-salata-330-gr", "Акула котлет с гарнитура зелена салата /330 гр./", "4,20", "", ""],
["", "byala-riba-file-s-garnitura-vareni-kartofi-320-gr", "Бяла риба филе с гарнитура варени картофи /320 гр./", "3,50", "", ""],
["", "byala-riba-file-s-garnitura-domati-i-krastaviczi-320-gr", "Бяла риба филе с гарнитура домати и краставици /320 гр./", "3,50", "", ""],
["", "byala-riba-file-s-garnitura-morkovi-i-zele-320-gr", "Бяла риба филе с гарнитура моркови и зеле /320 гр./", "3,50", "", ""],
["", "byala-riba-file-s-garnitura-przheni-kartofi-320-gr", "Бяла риба филе с гарнитура пържени картофи /320 гр./", "3,50", "", ""],
["", "byala-riba-file-s-garnitura-zelena-salata-320-gr", "Бяла риба филе с гарнитура зелена салата /320 гр./", "3,50", "", ""],
["", "vita-nadenicza-s-garnitura-vareni-kartofi-320-gr", "Вита наденица с гарнитура варени картофи /320 гр./", "2,80", "", ""],
["", "vita-nadenicza-s-garnitura-domati-i-krastaviczi-330-gr", "Вита наденица с гарнитура домати и краставици /330 гр./", "2,80", "", ""],
["", "vita-nadenicza-s-garnitura-morkovi-i-zele-330-gr", "Вита наденица с гарнитура моркови и зеле /330 гр./", "2,80", "", ""],
["", "vita-nadenicza-s-garnitura-przheni-kartofi-330-gr", "Вита наденица с гарнитура пържени картофи /330 гр./", "2,80", "", ""],
["", "vita-nadenicza-s-garnitura-zelena-salata-330-gr", "Вита наденица с гарнитура зелена салата /330 гр./", "2,80", "", ""],
["", "gbi-v-maslo-250-gr", "Гъби в масло /250 гр./", "2,80", "", ""],
["", "kalmari-pane-250-gr", "Калмари пане /250 гр./", "5,60", "", ""],
["", "kashkaval-pane-250-gr", "Кашкавал пане /250 гр./", "2,80", "", ""],
["", "kashkaval-pane-s-garnitura-vareni-kartofi-350-gr", "Кашкавал пане с гарнитура варени картофи /350 гр./", "3,50", "", ""],
["", "kashkaval-pane-s-garnitura-domati-i-krastaviczi-350-gr", "Кашкавал пане с гарнитура домати и краставици /350 гр./", "3,50", "", ""],
["", "kashkaval-pane-s-garnitura-morkovi-i-zele-350-gr", "Кашкавал пане с гарнитура моркови и зеле /350 гр./", "3,50", "", ""],
["", "kashkaval-pane-s-garnitura-przhen-kartofi-350-gr", "Кашкавал пане с гарнитура пържен картофи /350 гр./", "3,50", "", ""],
["", "kashkaval-pane-s-garnitura-zelena-salata-350-gr", "Кашкавал пане с гарнитура зелена салата /350 гр./", "3,50", "", ""],
["", "kashkavaleni-khapki-200-gr", "Кашкавалени хапки /200 гр./", "3,50", "", ""],
["", "kebapcheta-na-bbq-s-garnitura-vareni-kartofi-330-gr", "Кебапчета на BBQ с гарнитура варени картофи /330 гр./", "2,10", "", ""],
["", "kebapcheta-na-bbq-s-garnitura-domati-i-krastaviczi-330-gr", "Кебапчета на BBQ с гарнитура домати и краставици /330 гр./", "2,10", "", ""],
["", "kebapcheta-na-bbq-s-garnitura-morkovi-i-zele-330-gr", "Кебапчета на BBQ с гарнитура моркови и зеле /330 гр./", "2,10", "", ""],
["", "kebapcheta-na-bbq-s-garnitura-przheni-kartofi-330-gr", "Кебапчета на BBQ с гарнитура пържени картофи /330 гр./", "2,10", "", ""],
["", "kebapcheta-na-bbq-s-garnitura-zelena-salata-330-gr", "Кебапчета на BBQ с гарнитура зелена салата /330 гр./", "2,10", "", ""],
["", "kyufteta-na-bbq-s-garnitura-vareni-kartofi-330-gr", "Кюфтета на BBQ с гарнитура варени картофи /330 гр./", "2,10", "", ""],
["", "kyufteta-na-bbq-s-garnitura-domati-i-krastaviczi-330-gr", "Кюфтета на BBQ с гарнитура домати и краставици /330 гр./", "2,10", "", ""],
["", "kyufteta-na-bbq-s-garnitura-morkovi-i-zele-330-gr", "Кюфтета на BBQ с гарнитура моркови и зеле /330 гр./", "2,10", "", ""],
["", "kyufteta-na-bbq-s-garnitura-przheni-kartofi-330-gr", "Кюфтета на BBQ с гарнитура пържени картофи /330 гр./", "2,10", "", ""],
["", "kyufteta-na-bbq-s-garnitura-zelena-salata-330-gr", "Кюфтета на BBQ с гарнитура зелена салата /330 гр./", "2,10", "", ""],
["", "omlet-250-gr", "Омлет /250 гр./", "2,10", "", ""],
["", "omlet-asorti-300-gr", "Омлет асорти /300 гр./", "2,80", "", ""],
["", "omlet-s-garnitura-vareni-kartofi-350-gr", "Омлет с гарнитура варени картофи /350 гр./", "2,10", "", ""],
["", "omlet-s-garnitura-domati-i-krastaviczi-350-gr", "Омлет с гарнитура домати и краставици /350 гр./", "2,10", "", ""],
["", "omlet-s-garnitura-morkovi-i-zele-350-gr", "Омлет с гарнитура моркови и зеле /350 гр./", "2,10", "", ""],
["", "omlet-s-garnitura-przheni-kartofi-350-gr", "Омлет с гарнитура пържени картофи /350 гр./", "2,10", "", ""],
["", "omlet-s-garnitura-zelena-salata-350-gr", "Омлет с гарнитура зелена салата /350 гр./", "2,10", "", ""],
["", "omlet-s-garnitura-kashkaval-s-vareni-kartofi-350-gr", "Омлет с гарнитура кашкавал с варени картофи /350 гр./", "2,10", "", ""],
["", "omlet-s-kashkaval-s-garnitura-domati-i-krastaviczi-350-gr", "Омлет с кашкавал с гарнитура домати и краставици /350 гр./", "2,10", "", ""],
["", "omlet-s-kashkaval-s-garnitura-morkovi-i-zele-350-gr", "Омлет с кашкавал с гарнитура моркови и зеле /350 гр./", "2,10", "", ""],
["", "omlet-s-kashkaval-s-garnitura-przheni-kartofi-350-gr", "Омлет с кашкавал с гарнитура пържени картофи /350 гр./", "2,10", "", ""],
["", "omlet-s-kashkaval-s-garnitura-zelena-salata-350-gr", "Омлет с кашкавал с гарнитура зелена салата /350 гр./", "2,10", "", ""],
["", "pileshka-przhola-ot-but-na-bbq-s-garnitura-vareni-kartofi-350-gr", "Пилешка пържола от бут на BBQ с гарнитура варени картофи /350 гр./", "3,50", "", ""],
["", "pileshka-przhola-ot-but-na-bbq-s-garnitura-domati-i-krastaviczi-350-gr", "Пилешка пържола от бут на BBQ с гарнитура домати и краставици /350 гр./", "3,50", "", ""],
["", "pileshka-przhola-ot-but-na-bbq-s-garnitura-morkovi-i-zele-350-gr", "Пилешка пържола от бут на BBQ с гарнитура моркови и зеле /350 гр./", "3,50", "", ""],
["", "pileshka-przhola-ot-but-na-bbq-s-garnitura-przheni-kartofi-350-gr", "Пилешка пържола от бут на BBQ с гарнитура пържени картофи /350 гр./", "3,50", "", ""],
["", "pileshka-przhola-ot-but-na-bbq-s-garnitura-zelena-salata-350-gr", "Пилешка пържола от бут на BBQ с гарнитура зелена салата /350 гр./", "3,50", "", ""],
["", "pileshko-file-na-bbq-s-garnitura-vareni-kartofi-330-gr", "Пилешко филе на BBQ с гарнитура варени картофи /330 гр./", "3,50", "", ""],
["", "pileshko-file-na-bbq-s-garnitura-domati-i-krastaviczi-330-gr", "Пилешко филе на BBQ с гарнитура домати и краставици /330 гр./", "3,50", "", ""],
["", "pileshko-file-na-bbq-s-garnitura-morkovi-i-zele-330-gr", "Пилешко филе на BBQ с гарнитура моркови и зеле /330 гр./", "3,50", "", ""],
["", "pileshko-file-na-bbq-s-garnitura-przheni-kartofi-330-gr", "Пилешко филе на BBQ с гарнитура пържени картофи /330 гр./", "3,50", "", ""],
["", "pileshko-file-na-bbq-s-garnitura-zelena-salata-330-gr", "Пилешко филе на BBQ с гарнитура зелена салата /330 гр./", "3,50", "", ""],
["", "svinska-vratna-przhola-na-bbq-s-garnitura-vareni-kartofi-350-gr", "Свинска вратна пържола на BBQ с гарнитура варени картофи /350 гр./", "3,50", "", ""],
["", "svinska-vratna-przhola-na-bbq-s-garnitura-domati-i-krastaviczi-350-gr", "Свинска вратна пържола на BBQ с гарнитура домати и краставици /350 гр./", "3,50", "", ""],
["", "svinska-vratna-przhola-na-bbq-s-garnitura-zelena-salata", "Свинска вратна пържола на BBQ с гарнитура зелена салата", "3,50", "350", ""],
["", "svinska-vratna-przhola-na-bbq-s-garnitura-przheni-kartofi-350-gr", "Свинска вратна пържола на BBQ с гарнитура пържени картофи /350 гр./", "3,50", "", ""],
["", "svinska-vratna-przhola-na-bbq-s-garnitura-zele-i-morkovi-350-gr", "Свинска вратна пържола на BBQ с гарнитура зеле и моркови /350 гр./", "3,50", "", ""],
["", "svinsko-file-na-bbq-s-garnitura-vareni-kartofi-330-gr", "Свинско филе на BBQ с гарнитура варени картофи /330 гр./", "3,50", "", ""],
["", "svinsko-file-na-bbq-s-garnitura-domati-i-krastaviczi-330-gr", "Свинско филе на BBQ с гарнитура домати и краставици /330 гр./", "3,50", "", ""],
["", "svinsko-file-na-bbq-s-garnitura-morkovi-i-zele-330-gr", "Свинско филе на BBQ с гарнитура моркови и зеле /330 гр./", "3,50", "", ""],
["", "svinsko-file-na-bbq-s-garnitura-przheni-kartofi-330-gr", "Свинско филе на BBQ с гарнитура пържени картофи /330 гр./", "3,50", "", ""],
["", "svinsko-file-na-bbq-s-garnitura-zelena-salata-330-gr", "Свинско филе на BBQ с гарнитура зелена салата /330 гр./", "3,50", "", ""],
["", "sirenovi-khapki-200-gr", "Сиренови хапки /200 гр./", "2,80", "", ""],
["", "teleshki-kyufteta-na-bbq-s-garnitura-vareni-kartofi-330-gr", "Телешки кюфтета на BBQ с гарнитура варени картофи /330 гр./", "3,50", "", ""],
["", "teleshki-kyufteta-na-bbq-s-garnitura-domati-i-krastaviczi-330-gr", "Телешки кюфтета на BBQ с гарнитура домати и краставици /330 гр./", "3,50", "", ""],
["", "teleshki-kyufteta-na-bbq-s-garnitura-morkovi-i-zele-330-gr", "Телешки кюфтета на BBQ с гарнитура моркови и зеле /330 гр./", "3,50", "", ""],
["", "teleshki-kyufteta-na-bbq-s-garnitura-przheni-kartofi-330-gr", "Телешки кюфтета на BBQ с гарнитура пържени картофи /330 гр./", "3,50", "", ""],
["", "teleshki-kyufteta-na-bbq-s-garnitura-zelena-salata-330-gr", "Телешки кюфтета на BBQ с гарнитура зелена салата /330 гр./", "3,50", "", ""],
["", "topeni-sirencza-s-borovinkovo-sladko-200-gr", "Топени сиренца с боровинково сладко /200 гр./", "3,50", "", ""],
["", "khrupkavi-tikvichki-s-chesnov-sos-250-gr", "Хрупкави тиквички с чеснов сос /250 гр./", "3,50", "", ""],
["", "yajcza-brkani-ss-sirene-330-gr", "Яйца бъркани със сирене /330 гр./", "2,10", "", ""],
["", "yajcza-na-ochi-s-flejki-slajs-330-gr", "Яйца на очи с флейки слайс /330 гр./", "2,80", "", ""],
["", "yajcza-po-panagyurski-300-gr", "Яйца по панагюрски /300 гр./", "2,10", "", ""]

            ]
        }', 
        'slug' => 'little-plus',
        'business_name' => 'Little Plus',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Stara Zagora',
        'region' => 'Stara Zagora',
        'postal_code' => '6000',
        'address' => 'ул. Веселин Ханчев 9',
        'address_additional' => '',
        'coords_x' => '42.43481205',
        'coords_y' => '25.63459119',
        'phone' => '+359887266074',
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
