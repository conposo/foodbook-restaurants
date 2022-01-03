<?php

use Carbon\Carbon;

$restaurants = [

    [
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "salads": [
                ["", "salata-czezar-s-pile", "Салата Цезар с пиле", "5,60", "300", ""],
["", "nasheto-dori", "Нашето Дори", "9,80", "500", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "400", ""],
["", "salata-blgarche", "Салата Българче", "6,30", "500", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "2,10", "350", ""]

            ],

            "starters": [
                ["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,90", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "250", ""]

            ],

            "maindishes": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "7,00", "450", ""],
["", "teleshki-kyufteta", "Телешки кюфтета", "8,40", "400", ""],
["", "zhareni-grdichki", "Жарени гърдички", "7,70", "450", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "5,60", "400", ""]

            ],

            "pasta": [
                ["", "spageri-boloneze", "Спагери Болонезе", "5,60", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "5,60", "350", ""]

            ],

            "burgers": [
                ["", "burger-blek-angs", "Бургер Блек Ангъс", "9,80", "450", ""],
["", "klub-sandvich", "Клуб сандвич", "4,90", "350", ""]

            ],

            "Картофите": [
                ["", "pryasno-izprzheni-kartofi", "Прясно изпържени картофи", "2,10", "300", ""],
["", "pryasno-izprzheni-kartofi-ss-sirene", "Прясно изпържени картофи със сирене", "2,10", "350", ""]

            ],

            "pizza": [
                ["", "kaprichoza", "Капричоза", "6,30", "", ""],
["", "pile", "Пиле", "5,60", "", ""],
["", "shunka", "Шунка", "5,60", "", ""],
["", "maestro", "Маестро", "9,10", "", ""],
["", "lukanka", "Луканка", "7,00", "", ""],
["", "peperoni", "Пеперони", "7,00", "", ""]

            ]
        }', 
        'slug' => 'restorant-picariya-dori',
        'business_name' => 'Ресторант Пицария Дори',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Troyan',
        'region' => 'Troyan',
        'postal_code' => '5600',
        'address' => 'ул. Димитър Икономов-Димитриката 53',
        'address_additional' => '',
        'coords_x' => '42.87779295',
        'coords_y' => '24.7121415',
        'phone' => '+359878373878',
        'email' => '',
        'website' => '',
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
                ["", "ovcharska-salata", "Овчарска салата", "4,90", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "300", ""],
["", "selska-salata", "Селска салата", "4,90", "300", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,80", "300", ""],
["", "shopska-salata", "Шопска салата", "4,20", "300", ""],
["", "snezhanka", "Снежанка", "4,20", "250", ""],
["", "velikdenska-salata", "Великденска салата", "4,20", "300", ""]

            ],

            "Топли предястия": [
                ["", "teleshko-shkembe-v-maslo", "Телешко шкембе в масло", "6,30", "200", ""],
["", "sirene-po-shopski", "Сирене по шопски", "4,20", "300", ""],
["", "gbi-v-maslo", "Гъби в масло", "3,50", "200", ""],
["", "sirene-pane", "Сирене пане", "4,20", "200", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "200", ""],
["", "susamovi-topeni-sirencza-pane-ss-sladko-ot-borovinki", "Сусамови топени сиренца пане със сладко от боровинки", "4,90", "200", ""],
["", "zelenchuczi-na-gril-s-dresing", "Зеленчуци на грил с дресинг", "7,00", "300", ""]

            ],

            "Основни ястия": [
                ["", "agneshko-pecheno-s-drob-srma", "Агнешко печено с дроб сърма", "18,90", "500", ""],
["", "kasapsko-plato", "Касапско плато", "42,70", "", ""],
["", "svinski-dzholan-s-kartofi-sote", "Свински джолан с картофи соте", "11,90", "500", ""],
["", "sach-ket-balu", "Сач Кет Балу", "25,20", "800", ""],
["", "sach-bolyarski", "Сач Болярски", "21,70", "600", ""],
["", "krekhki-karencza-s-orekhov-sos", "Крехки каренца с орехов сос", "11,90", "300", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "8,40", "300", ""]

            ],

            "grill": [
                ["", "pileshki-shish", "Пилешки шиш", "2,80", "120", ""],
["", "kyufte", "Кюфте", "1,40", "70", ""],
["", "kebapche", "Кебапче", "1,40", "70", ""],
["", "svinski-shish", "Свински шиш", "2,80", "120", ""],
["", "pileshko-file", "Пилешко филе", "5,60", "300", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "7,00", "300", ""],
["", "kombiniran-shish", "Комбиниран шиш", "20,30", "600", ""],
["", "meshana-skara", "Мешана скара", "18,90", "400", ""]

            ],

            "fish": [
                ["", "pstrva", "Пъстърва", "7,00", "250", ""],
["", "byala-riba-ket-balu", "Бяла риба Кет Балу", "14,00", "300", ""],
["", "skumriya-file", "Скумрия филе", "5,60", "250", ""]

            ],

            "Пърленки": [
                ["", "chesnova-prlenka", "Чеснова пърленка", "2,10", "160", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,80", "200", ""],
["", "naturalna-prlenka", "Натурална пърленка", "2,10", "160", ""]

            ],

            "garnish": [
                ["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "200", ""],
["", "kartofi-sote", "Картофи соте", "3,50", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""]

            ],

            "desserts": [
                ["", "segafredo-yaniche", "Сегафредо Яниче", "4,90", "180", ""],
["", "tiramisu", "Тирамису", "2,80", "180", ""],
["", "domashna-torta", "Домашна торта", "1,40", "180", ""],
["", "palachinka", "Палачинка", "1,40", "", ""],
["", "czedeno-kiselo-mlyako-s-borovinki-med-i-orekhi", "Цедено кисело мляко с боровинки, мед и орехи", "2,80", "250", ""],
["", "chijzkejk", "Чийзкейк", "3,50", "150", ""]

            ],

            "Coca-cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "1,40", "330", ""],
["", "schweppes-tonik", "Schweppes Тоник", "1,40", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "330", ""],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "330", ""]

            ],

            "drinks": [
                ["", "gazirana-napitka-bbb", "Газирана напитка БББ", "0,70", "500", ""],
["", "studen-chaj-parti", "Студен чай Парти", "2,10", "500", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна баня", "1,40", "", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна баня", "0,70", "500", ""],
["", "bezalkokholno-parti", "Безалкохолно Парти", "0,70", "250", ""],
["", "energijna-napitka", "Енергийна напитка", "1,40", "330", ""],
["", "soda", "Сода", "0,70", "300", ""]

            ],

            "beer": [
                ["", "staropramen", "Старопрамен", "2,10", "500", ""],
["", "stela-artoa", "Стела Артоа", "2,80", "500", ""],
["", "kamenicza-1881", "Каменица 1881", "2,10", "500", ""],
["", "kamenicza-fresh", "Каменица Фреш", "2,10", "500", ""],
["", "burgasko", "Бургаско", "1,40", "500", ""]

            ],

            "Бяло вино": [
                ["", "verano-azur", "Верано Азур", "12,60", "750", ""],
["", "vila-yambol-muskat", "Вила Ямбол Мускат", "8,40", "750", ""],
["", "domejn-peshhera-muskat", "Домейн Пещера Мускат", "10,50", "750", ""],
["", "vila-yambol-shardone", "Вила Ямбол Шардоне", "8,40", "750", ""],
["", "domejn-peshhera-shardone", "Домейн Пещера Шардоне", "10,50", "750", ""],
["", "pixels-sovinon-blan", "Pixels Совиньон Блан", "14,00", "", ""]

            ],

            "Червено вино": [
                ["", "vila-yambol-mavrud", "Вила Ямбол Мавруд", "10,50", "750", ""],
["", "domejn-peshhera-kaberne-sovinon", "Домейн Пещера Каберне Совиньон", "10,50", "750", ""],
["", "domejn-peshhera-merlo", "Домейн Пещера Мерло", "10,50", "750", ""],
["", "vila-yambol-merlo", "Вила Ямбол Мерло", "10,50", "750", ""],
["", "vila-yambol-kaberne-sovinon", "Вила Ямбол Каберне Совиньон", "10,50", "750", ""],
["", "verano-azur-sira-i-marselan", "Верано Азур Сира и Марселан", "12,60", "750", ""],
["", "pixels-kaberne-sovinon", "Pixels Каберне Совиньон", "14,00", "750", ""],
["", "mezek-kaberne-sovinon", "Мезек Каберне Совиньон", "12,60", "750", ""],
["", "mezek-merlo", "Мезек Мерло", "12,60", "750", ""]

            ],

            "rose": [
                ["", "vila-yambol-roze", "Вила Ямбол Розе", "8,40", "750", ""],
["", "verano-azur-roze-ot-kaberne-sovinon", "Верано Азур Розе от Каберне Совиньон", "8,40", "750", ""],
["", "malinovo-vino", "Малиново вино", "9,10", "", ""]

            ]
        }', 
        'slug' => 'cat-ballou',
        'business_name' => 'Cat Ballou',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Bansko',
        'region' => 'Bansko',
        'postal_code' => '2770',
        'address' => 'Ул. Цар Симеон 41',
        'address_additional' => '',
        'coords_x' => '41.8397887',
        'coords_y' => '23.48710789',
        'phone' => '+359898633669',
        'email' => '',
        'website' => '',
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
                ["", "kartofena-salata", "Картофена салата", "2,80", "380", ""],
["", "shopska-salata", "Шопска салата", "3,50", "380", ""],
["", "vitamina", "Витамина", "2,80", "", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "", ""],
["", "pileshka-supa", "Пилешка супа", "2,10", "", ""],
["", "supa-topcheta", "Супа топчета", "2,10", "", ""],
["", "agneshka-supa", "Агнешка супа", "2,10", "", ""]

            ],

            "Готвени ястия": [
                ["", "drob-sarma", "Дроб сарма", "3,50", "", ""],
["", "przheni-kartofi", "Пържени картофи", "2,80", "", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "4,20", "", ""],
["", "bob-s-nadenicza", "Боб с наденица", "3,50", "", ""],
["", "drob-srma", "Дроб сърма", "3,50", "", ""],
["", "pile-pecheno-czyalo", "Пиле печено цяло", "7,00", "", ""]

            ],

            "dunner": [
                ["", "xl-dyuner", "XL дюнер", "5,60", "", ""],
["", "golyam-dyuner", "Голям дюнер", "3,50", "", ""],
["", "sreden-dyuner", "Среден дюнер", "2,80", "", ""]

            ],

            "grill": [
                ["", "pileshka-przhola-s-garnitura", "Пилешка пържола с гарнитура", "4,20", "", ""],
["", "kebapcheta-3br-s-garnitura", "Кебапчета (3бр) с гарнитура", "3,50", "", ""],
["", "svinska-przhola-s-garnitura", "Свинска пържола с гарнитура", "4,90", "", ""],
["", "kyufteta-3br-s-garnitura", "Кюфтета (3бр) с гарнитура", "3,50", "", ""],
["", "pile-pecheno", "Пиле печено", "7,00", "", ""]

            ],

            "fish": [
                ["", "czacza", "Цаца", "2,80", "", ""],
["", "skumriya-s-garnitura", "Скумрия с гарнитура", "3,50", "", ""],
["", "midi-pane", "Миди пане", "5,60", "", ""],
["", "khek-pane-s-garnitura", "Хек пане с гарнитура", "3,50", "", ""],
["", "lavrak", "Лаврак", "10,50", "", ""],
["", "czipura", "Ципура", "9,10", "", ""],
["", "lefer", "Лефер", "11,90", "", ""],
["", "palamud", "Паламуд", "6,30", "", ""]

            ],

            "pizza": [
                ["", "kaprichoza", "Капричоза", "6,30", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "6,30", "", ""],
["", "kalczone", "Калцоне", "6,30", "", ""],
["", "proshuto", "Прошуто", "6,30", "", ""],
["", "margarita", "Маргарита", "5,60", "", ""],
["", "picza-dyuner", "Пица дюнер", "6,30", "", ""]

            ],

            "Хляб и добавки": [
                ["", "khlyab", "Хляб", "0,00", "", ""],
["", "marinovani-lyuti-chushki", "Мариновани люти чушки", "0,00", "", ""]

            ],

            "desserts": [
                ["", "torta", "Торта", "1,40", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "ajryan", "Айрян", "1,40", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""]

            ]
        }', 
        'slug' => 'bistro-hapka-i-halba',
        'business_name' => 'Бистро Хапка и Халба',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sozopol',
        'region' => 'Sozopol',
        'postal_code' => '8130',
        'address' => 'ул. Аполония 50А',
        'address_additional' => '',
        'coords_x' => '42.42462916',
        'coords_y' => '27.69576622',
        'phone' => '+359895514030',
        'email' => '',
        'website' => '',
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
                ["", "domati-s-patladzhan", "Домати с патладжан", "4,20", "350", ""],
["", "salata-s-kinoa-i-borovinka", "Салата с киноа и боровинка", "4,90", "350", ""],
["", "tabule-s-kus-kus", "Табуле с кус-кус", "4,20", "350", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "450", ""],
["", "pecheni-zelenchuczi", "Печени зеленчуци", "4,20", "350", ""],
["", "salata-s-kinoa-i-avokado", "Салата с киноа и авокадо", "4,90", "400", ""],
["", "domati-s-moczarela", "Домати с моцарела", "4,90", "350", ""],
["", "kolslo-teatro", "Колсло Театро", "4,90", "400", ""],
["", "miks-ot-zeleni-salati", "Микс от зелени салати", "4,90", "350", ""],
["", "salata-veleshana", "Салата Велешана", "5,60", "350", ""],
["", "salata-zdravka", "Салата Здравка", "4,90", "400", ""],
["", "salata-toni", "Салата Тони", "4,90", "300", ""],
["", "salata-s-koze-sirene-i-czveklo", "Салата с козе сирене и цвекло", "6,30", "400", ""],
["", "salata-panczanela", "Салата Панцанела", "5,60", "350", ""],
["", "salata-ss-sino-sirene", "Салата със синьо сирене", "5,60", "300", ""],
["", "salata-s-bri", "Салата с Бри", "6,30", "300", ""]

            ],

            "starters": [
                ["", "lucheni-krgcheta", "Лучени кръгчета", "3,50", "300", ""],
["", "khapki-somga", "Хапки сьомга", "6,30", "200", ""],
["", "plato-antipasti", "Плато Антипасти", "9,10", "250", ""],
["", "tostada-s-khamon", "Тостада с хамон", "5,60", "", ""],
["", "pechen-kamember", "Печен камембер", "6,30", "200", ""],
["", "pileshki-filencza-s-parmezanova-korichka", "Пилешки филенца с пармезанова коричка", "5,60", "220", ""],
["", "pileshki-filencza-s-khamon-i-moczarela", "Пилешки филенца с хамон и моцарела", "5,60", "220", ""],
["", "krilcza-bbq", "Крилца BBQ", "4,20", "350", ""],
["", "krilcza-bfalo", "Крилца Бъфало", "4,20", "350", ""],
["", "sladko-lyuti-krilcza", "Сладко-люти крилца", "4,20", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "2,80", "300", ""],
["", "foa-gra", "Фоа Гра", "14,70", "180", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "350", ""],
["", "pikantni-kartofki-uedzhis", "Пикантни картофки уеджис", "2,80", "300", ""],
["", "aziatski-pileshki-shishcheta", "Азиатски пилешки шишчета", "6,30", "200", ""],
["", "pikantni-kri-kartofki", "Пикантни къри картофки", "2,80", "300", ""],
["", "khrupkavi-skaridi-v-tikvichki", "Хрупкави скариди в тиквички", "11,20", "180", ""]

            ],

            "Основни ястия": [
                ["", "svinski-kotlet-sus-sos-ot-luk", "Свински котлет сус сос от лук", "6,30", "350", ""],
["", "file-pikata", "Филе Пиката", "5,60", "250", ""],
["", "svinski-vrat-na-tigan", "Свински врат на тиган", "5,60", "300", ""],
["", "rizoto-ss-skaridi", "Ризото със скариди", "7,00", "300", ""],
["", "svinsko-tonkatczu", "Свинско Тонкатцу", "6,30", "300", ""],
["", "teleshki-stek-s-manatarki", "Телешки стек с манатарки", "19,60", "280", ""],
["", "marokanski-kus-kus", "Марокански кус-кус", "4,90", "350", ""],
["", "svinski-stekcheta-s-bekon-i-asperzhi", "Свински стекчета с бекон и аспержи", "7,00", "300", ""],
["", "krekhki-svinski-karencza-na-plocha", "Крехки свински каренца на плоча", "6,30", "400", ""],
["", "bbq-rebrcza", "BBQ ребърца", "8,40", "400", ""],
["", "skalopini-s-rozmarin-i-chesn", "Скалопини с розмарин и чесън", "6,30", "300", ""],
["", "teleshko-bonfile-s-bilki", "Телешко бонфиле с билки", "13,30", "220", ""],
["", "teleshki-kyuftencza", "Телешки кюфтенца", "8,40", "350", ""],
["", "churasko-s-pecheni-zelenchuczi-i-salcza", "Чураско с печени зеленчуци и салца", "8,40", "250", ""],
["", "khrupkav-pileshki-kiev", "Хрупкав пилешки Киев", "7,70", "500", ""],
["", "rizoto-s-divi-gbi-i-bilki", "Ризото с диви гъби и билки", "7,00", "300", ""]

            ],

            "pizza": [
                ["", "picza-vedzhi", "Пица Веджи", "5,60", "400", ""],
["", "picza-teatro", "Пица Театро", "6,30", "400", ""],
["", "detska-picza", "Детска пица", "5,60", "400", ""],
["", "neapolitanska-picza-margarita", "Неаполитанска пица Маргарита", "4,90", "350", ""],
["", "picza-salami", "Пица Салами", "5,60", "400", ""],
["", "picza-s-rukola-i-khamon", "Пица с рукола и хамон", "5,60", "300", ""],
["", "picza-amerikana", "Пица Американа", "5,60", "400", ""],
["", "picza-blanca-s-pancheta-ili-bekon", "Пица Blanca с панчета или бекон", "6,30", "400", ""],
["", "picza-bbq", "Пица BBQ", "6,30", "400", ""],
["", "picza-blanca-s-pile", "Пица Blanca с пиле", "6,30", "400", ""],
["", "picza-blanca-ss-spanak", "Пица Blanca със спанак", "6,30", "400", ""],
["", "prlenka", "Пърленка", "2,10", "180", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,80", "220", ""]

            ],

            "Бургери и сандвичи": [
                ["", "burito-s-khrupkavo-pile", "Бурито с хрупкаво пиле", "5,60", "450", ""],
["", "klasicheski-teleshki-burger", "Класически телешки бургер", "5,60", "400", ""],
["", "chudovishhen-burger", "Чудовищен бургер", "7,00", "500", ""],
["", "teleshki-burger-black-angus", "Телешки бургер Black Angus", "7,70", "350", ""],
["", "pile-giros", "Пиле гирос", "6,30", "350", ""],
["", "klub-sandvich", "Клуб сандвич", "6,30", "400", ""],
["", "blt", "BLT", "4,90", "300", ""]

            ],

            "Рибни и морски деликатеси": [
                ["", "somga", "Сьомга", "13,30", "250", ""],
["", "czipura", "Ципура", "9,80", "300", ""],
["", "lavrak", "Лаврак", "9,80", "300", ""],
["", "bejbi-kalmari", "Бейби калмари", "10,50", "200", ""],
["", "skaridi", "Скариди", "10,50", "200", ""],
["", "marinovani-khrupkavi-kalmari", "Мариновани хрупкави калмари", "10,50", "350", ""],
["", "oktopod", "Октопод", "10,50", "200", ""]

            ],

            "pasta": [
                ["", "karbonara", "Карбонара", "5,60", "400", ""],
["", "arabiata-ss-skaridi", "Арабиата със скариди", "6,30", "400", ""],
["", "sorentina", "Сорентина", "5,60", "400", ""]

            ],

            "desserts": [
                ["", "oreo-chijzkejk", "Орео чийзкейк", "3,50", "150", ""],
["", "shokoladovo-gato", "Шоколадово Гато", "2,80", "150", ""],
["", "profiterol", "Профитерол", "2,80", "150", ""],
["", "domashna-orekhova-torta", "Домашна орехова торта", "3,50", "150", ""],
["", "domashna-yablkova-torta", "Домашна ябълкова торта", "3,50", "150", ""],
["", "borovinkov-chijzkejk", "Боровинков чийзкейк", "3,50", "150", ""],
["", "mango-chijzkejk", "Манго чийзкейк", "3,50", "150", ""],
["", "frenska-selska-torta", "Френска селска торта", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'teatro-bar',
        'business_name' => 'Teatro Bar &amp; Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Smolyan',
        'region' => 'Smolyan',
        'postal_code' => '4700',
        'address' => 'бул. България 10',
        'address_additional' => '',
        'coords_x' => '41.57505609',
        'coords_y' => '24.71360596',
        'phone' => '+359878936196',
        'email' => '',
        'website' => '',
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
                ["", "meksikana", "Мексикана", "2,10", "", ""],
["", "chetiri-sirena", "Четири сирена", "2,80", "", ""],
["", "margarita", "Маргарита", "1,40", "", ""],
["", "proshuto", "Прошуто", "1,40", "", ""],
["", "chik", "Чик", "2,80", "", ""],
["", "koza-nostra", "Коза Ностра", "2,80", "", ""],
["", "vegeta", "Вегета", "1,40", "", ""],
["", "okean", "Океан", "2,80", "", ""],
["", "mali", "Мали", "2,80", "", ""],
["", "specziale", "Специале", "2,80", "", ""],
["", "picza-parche", "Пица парче", "0,70", "", ""]

            ],

            "Бургери и дюнери": [
                ["", "malk-dyuner", "Малък дюнер", "1,40", "", ""],
["", "sreden-dyuner", "Среден дюнер", "1,40", "", ""],
["", "dyuner-pitka", "Дюнер питка", "2,10", "", ""],
["", "golyam-dyuner", "Голям дюнер", "2,80", "", ""],
["", "burger", "Бургер", "2,10", "", ""]

            ],

            "desserts": [
                ["", "torta-mali", "Торта Мали", "1,40", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "", ""],
["", "makaroni-na-furna", "Макарони на фурна", "1,40", "", ""]

            ]
        }', 
        'slug' => 'mali-fantasy-food',
        'business_name' => 'Mali fantasy Food',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vratsa',
        'region' => 'Vratsa',
        'postal_code' => '3000',
        'address' => 'Ул.Полковник Кетхудов 1',
        'address_additional' => '',
        'coords_x' => '43.20226835',
        'coords_y' => '23.54915561',
        'phone' => '+359879950717',
        'email' => '',
        'website' => '',
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
                ["", "ventrichina", "Вентричина", "3,50", "350", ""],
["", "milano", "Милано", "3,50", "350", ""],
["", "kapreze", "Капрезе", "3,50", "400", ""],
["", "grilovani-zelenchuczi-s-moczarela", "Гриловани зеленчуци с моцарела", "4,20", "400", ""],
["", "selektirani-frenski-i-italianski-sirena", "Селектирани френски и италиански сирена", "3,50", "400", ""],
["", "mortadela", "Мортадела", "3,50", "350", ""],
["", "somga", "Сьомга", "3,50", "350", ""],
["", "proshuto", "Прошуто", "3,50", "350", ""],
["", "ton", "Тон", "3,50", "350", ""],
["", "sirena", "Сирена", "3,50", "350", ""],
["", "vegetariana", "Вегетариана", "3,50", "350", ""]

            ],

            "Фрапе": [
                ["", "byalo-frape", "Бяло Фрапе", "1,40", "300", ""],
["", "cherno-frape", "Черно Фрапе", "1,40", "300", ""],
["", "ajs-frape", "Айс Фрапе", "2,10", "300", ""],
["", "davidoff", "Davidoff", "2,10", "300", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta", "Бисквитена торта", "2,10", "200", ""],
["", "torta-dolche-vita", "Торта Долче Вита", "2,10", "150", ""],
["", "torta-maskarpone", "Торта Маскарпоне", "2,10", "150", ""],
["", "torta-nutela", "Торта Нутела", "2,10", "150", ""],
["", "orekhova-torta", "Орехова торта", "2,10", "150", ""],
["", "palachinka-s-shokolad-nutela", "Палачинка с шоколад Нутела", "2,10", "150", ""],
["", "palachinka-s-byal-belgijski-shokolad", "Палачинка с бял белгийски шоколад", "2,10", "150", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "2,10", "150", ""],
["", "palachinka-ss-sicziliansko-sladko", "Палачинка със сицилианско сладко", "3,50", "150", ""],
["", "palachinka-s-domashno-sladko-ot-gorski-plodove", "Палачинка с домашно сладко от горски плодове", "3,50", "150", ""],
["", "gofreta", "Гофрета", "2,10", "150", ""]

            ],

            "Солени палачинки": [
                ["", "palachinka-s-moczarela", "Палачинка с моцарела", "2,80", "180", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "2,80", "180", ""],
["", "kombinirana-palachinka", "Комбинирана палачинка", "2,80", "220", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "3,50", "220", ""]

            ],

            "Фрешове": [
                ["", "domat", "Домат", "2,10", "250", ""],
["", "portokal", "Портокал", "2,10", "250", ""],
["", "grejpfrut", "Грейпфрут", "2,10", "250", ""],
["", "limon", "Лимон", "2,80", "250", ""],
["", "yagoda", "Ягода", "2,80", "250", ""],
["", "ppesh", "Пъпеш", "2,80", "250", ""],
["", "dinya", "Диня", "2,80", "250", ""],
["", "banan", "Банан", "2,80", "250", ""],
["", "yablka", "Ябълка", "2,80", "250", ""],
["", "morkov", "Морков", "2,80", "250", ""],
["", "nar", "Нар", "4,20", "250", ""],
["", "mandarina", "Мандарина", "2,80", "250", ""],
["", "yablka-i-portokal", "Ябълка и портокал", "2,80", "250", ""],
["", "yablka-i-morkov", "Ябълка и морков", "2,80", "250", ""],
["", "yablka-i-magadanoz", "Ябълка и магаданоз", "2,80", "250", ""],
["", "yablka-i-dzhindzhifil", "Ябълка и джинджифил", "2,80", "250", ""],
["", "yablka-morkov-magdanoz-i-spanak", "Ябълка, морков, магданоз и спанак", "2,80", "250", ""],
["", "banan-i-yagoda", "Банан и ягода", "2,80", "250", ""],
["", "mandarina-i-nar", "Мандарина и нар", "3,50", "250", ""],
["", "ananas", "Ананас", "3,50", "250", ""],
["", "mango-i-ananas", "Манго и ананас", "4,20", "250", ""],
["", "yagoda-i-ananas", "Ягода и ананас", "4,20", "250", ""],
["", "mango", "Манго", "6,30", "250", ""]

            ],

            "Смути": [
                ["", "plodovo-smuti", "Плодово смути", "2,80", "350", ""],
["", "zelenchukovo-smuti", "Зеленчуково смути", "2,80", "350", ""]

            ],

            "Шейкове": [
                ["", "mlechen-shejk", "Млечен шейк", "2,80", "250", ""],
["", "shokoladov-shejk", "Шоколадов шейк", "2,80", "250", ""],
["", "karamelen-shejk", "Карамелен шейк", "2,80", "250", ""],
["", "plodov-shejk", "Плодов шейк", "2,80", "250", ""]

            ],

            "Прясна Лимонада": [
                ["", "naturalna-limonada", "Натурална Лимонада", "1,40", "", ""],
["", "yagodova-limonada", "Ягодова Лимонада", "1,40", "", ""]

            ]
        }', 
        'slug' => 'cafe-flora',
        'business_name' => 'Cefe Flora',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kyustendil',
        'region' => 'Kyustendil',
        'postal_code' => '2500',
        'address' => 'бул. България 8',
        'address_additional' => '',
        'coords_x' => '42.28205898',
        'coords_y' => '22.68736048',
        'phone' => '+359888200208',
        'email' => '',
        'website' => '',
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
["", "salata-czezar", "Салата Цезар", "6,30", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "6,30", "350", ""],
["", "salata-morkovi-s-riba-ton", "Салата моркови с риба тон", "4,20", "350", ""],
["", "selska-salata", "Селска салата", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "zelena-salata-ss-zapecheno-sirene", "Зелена салата със запечено сирене", "4,20", "380", ""],
["", "salata-snezhanka", "Салата Снежанка", "4,20", "250", ""],
["", "salata-morski-dar", "Салата морски дар", "6,30", "300", ""],
["", "salata-midi-s-luk", "Салата миди с лук", "4,20", "150", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "350", ""]

            ],

            "soups": [
                ["", "ribena-supa", "Рибена супа", "2,10", "280", ""],
["", "midena-supa", "Мидена супа", "2,10", "280", ""],
["", "tarator", "Таратор", "2,10", "280", ""]

            ],

            "starters": [
                ["", "gbi-v-maslo", "Гъби в масло", "5,60", "200", ""],
["", "przheni-tikvichki", "Пържени тиквички", "4,90", "250", ""],
["", "panirani-pileshki-krilcza", "Панирани пилешки крилца", "5,60", "250", ""],
["", "zelenchuczi-na-gril", "Зеленчуци на грил", "5,60", "300", ""],
["", "brusketi-s-domati-i-moczarela", "Брускети с домати и моцарела", "5,60", "250", ""],
["", "sirene-pane", "Сирене пане", "4,90", "200", ""],
["", "pileshki-khapki", "Пилешки хапки", "5,60", "200", ""],
["", "teleshki-ezik-na-tigan", "Телешки език на тиган", "7,00", "200", ""],
["", "mamaliga-ss-sirene", "Мамалига със сирене", "4,20", "300", ""],
["", "kashkaval-na-plocha-s-med-i-orekhi", "Кашкавал на плоча с мед и орехи", "5,60", "250", ""],
["", "zapecheno-sirene-s-med-i-orekhi", "Запечено сирене с мед и орехи", "4,90", "200", ""],
["", "brusketi-ss-somga", "Брускети със сьомга", "5,60", "250", ""]

            ],

            "Морски предястия": [
                ["", "tarama-khajver", "Тарама хайвер", "4,20", "150", ""],
["", "rapani-v-maslo", "Рапани в масло", "9,10", "200", ""],
["", "kalmari-pane", "Калмари пане", "9,10", "200", ""],
["", "skaridi-s-chesn", "Скариди с чесън", "11,90", "200", ""],
["", "midi-natyur", "Миди натюр", "6,30", "550", ""],
["", "midi-s-oriz", "Миди с ориз", "7,70", "500", ""],
["", "oktopod-na-tigan", "Октопод на тиган", "16,10", "200", ""],
["", "midi-s-lyut-sos", "Миди с лют сос", "6,30", "550", ""],
["", "morski-sach", "Морски сач", "19,60", "500", ""],
["", "midi-ss-smetana", "Миди със сметана", "6,30", "550", ""]

            ],

            "Риби": [
                ["", "chernokop-na-skara", "Чернокоп на скара", "9,10", "280", ""],
["", "karagoz-na-skara", "Карагьоз на скара", "7,70", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "14,70", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "7,70", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "14,70", "300", ""],
["", "przhena-czacza", "Пържена цаца", "4,20", "300", ""],
["", "somga-file-na-skara", "Сьомга филе на скара", "14,70", "250", ""],
["", "przhen-safrid", "Пържен Сафрид", "7,00", "280", ""],
["", "przhen-kalkan", "Пържен калкан", "19,60", "300", ""],
["", "przheni-popcheta", "Пържени попчета", "4,90", "300", ""],
["", "akula-pane", "Акула пане", "6,30", "250", ""]

            ],

            "Основни ястия": [
                ["", "kavrma", "Кавърма", "9,80", "250", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "9,10", "450", ""],
["", "kombiniran-sach", "Комбиниран сач", "16,10", "500", ""],
["", "dzholan-na-furna-s-pecheni-kartofi", "Джолан на фурна с печени картофи", "16,10", "500", ""],
["", "gondola-pile", "Гондола пиле", "10,50", "350", ""],
["", "svinsko-bon-file-s-gbi", "Свинско бон филе с гъби", "9,80", "350", ""],
["", "agneshka-stomna", "Агнешка стомна", "11,20", "350", ""],
["", "pateshko-magre", "Патешко магре", "16,80", "350", ""],
["", "teleshki-pepr-stek", "Телешки пепър стек", "23,80", "350", ""],
["", "teleshki-zhulien", "Телешки Жулиен", "10,50", "350", ""],
["", "pile-rokfor", "Пиле Рокфор", "9,10", "350", ""],
["", "pile-ss-spanak", "Пиле със спанак", "9,10", "350", ""],
["", "pileshki-shniczel", "Пилешки шницел", "9,10", "300", ""],
["", "svinski-kareta-s-kartofeno-pyure", "Свински карета с картофено пюре", "9,10", "350", ""],
["", "picza-dyuner-kebap", "Пица дюнер кебап", "7,70", "300", ""]

            ],

            "grill": [
                ["", "pileshki-shashlik", "Пилешки шашлик", "10,50", "400", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "vratna-przhola", "Вратна пържола", "7,70", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "7,00", "220", ""],
["", "svinski-shashlik", "Свински шашлик", "10,50", "400", ""],
["", "svinski-rebra", "Свински ребра", "8,40", "350", ""],
["", "pileshko-file", "Пилешко филе", "7,00", "220", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "meshana-skara", "Мешана скара", "20,30", "900", ""],
["", "teleshki-stek", "Телешки стек", "21,70", "280", ""]

            ],

            "Пица и паста": [
                ["", "picza-peperoni", "Пица Пеперони", "7,70", "300", "https://images.deliveryhero.io/image/fd-bg/Products/991835.jpg?width=302"],
["", "picza-vegetariana", "Пица Вегетариана", "7,00", "300", "https://images.deliveryhero.io/image/fd-bg/Products/991836.jpg?width=302"],
["", "picza-kuatro-formadzhi", "Пица Куатро Формаджи", "8,40", "300", "https://images.deliveryhero.io/image/fd-bg/Products/991838.jpg?width=302"],
["", "picza-tika-masala", "Пица Тика-масала", "7,70", "300", "https://images.deliveryhero.io/image/fd-bg/Products/991839.jpg?width=302"],
["", "spageti-boloneze", "Спагети Болонезе", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/991840.jpg?width=302"],
["", "picza-kaprichoza", "Пица Капричоза", "7,70", "300", "https://images.deliveryhero.io/image/fd-bg/Products/991841.jpg?width=302"],
["", "spageti-karbonara", "Спагети Карбонара", "5,60", "350", ""],
["", "picza-khavaj", "Пица Хавай", "7,70", "300", ""],
["", "picza-margarita", "Пица Маргарита", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/991844.jpg?width=302"]

            ],

            "bread": [
                ["", "prlenka-kombinirana", "Пърленка комбинирана", "2,80", "150", ""],
["", "prlenka-ss-susheni-domati", "Пърленка със сушени домати", "2,80", "150", ""],
["", "chista-prlenka", "Чиста пърленка", "2,80", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "2,80", "150", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "4,20", "150", ""],
["", "palachinka", "Палачинка", "2,80", "150", ""],
["", "chijzkejk", "Чийзкейк", "4,20", "150", ""]

            ]
        }', 
        'slug' => 'restorant-selena',
        'business_name' => 'Ресторант Селена',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Balchik',
        'region' => 'Balchik',
        'postal_code' => '9600',
        'address' => 'ул. Приморска 18',
        'address_additional' => '',
        'coords_x' => '43.40558481',
        'coords_y' => '28.16331415',
        'phone' => '+359887776107',
        'email' => '',
        'website' => '',
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
        'slug' => 'restorant-pataya',
        'business_name' => 'Ресторант Pataya',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kiten',
        'region' => 'Kiten',
        'postal_code' => '8183',
        'address' => 'ул. Атлиман 28',
        'address_additional' => '',
        'coords_x' => '42.23788568',
        'coords_y' => '27.77416033',
        'phone' => '+359888400162',
        'email' => '',
        'website' => '',
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
            
            "Свежи салати": [
                ["", "retro", "Ретро", "5,60", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "350", ""],
["", "apetitna-razyadka", "Апетитна разядка", "4,90", "250", ""]

            ],

            "starters": [
                ["", "przheni-kartofi", "Пържени картофи", "2,80", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "3,50", "300", ""],
["", "kdravi-tikvichki-po-grczki", "Къдрави тиквички по гръцки", "4,20", "250", ""],
["", "khrupkavi-pileshki-khapki-s-mlechen-sos", "Хрупкави пилешки хапки с млечен сос", "5,60", "250", ""],
["", "teleshki-ezik-v-chesnovo-maslo-s-gorski-gbi-i-tryufel", "Телешки език в чесново масло с горски гъби и трюфел", "7,70", "250", ""]

            ],

            "Прясна риба": [
                ["", "safrid", "Сафрид", "6,30", "250", ""],
["", "vatos", "Ватос", "6,30", "250", ""],
["", "czipura", "Ципура", "14,00", "350", ""],
["", "lavrak", "Лаврак", "12,60", "350", ""],
["", "pstrva", "Пъстърва", "12,60", "500", ""],
["", "midi-s-cherupki", "Миди с черупки", "7,00", "", ""]

            ],

            "Морски изкушения": [
                ["", "kalmari-pane", "Калмари пане", "8,40", "250", ""],
["", "chiroz-ot-sushen-vatos", "Чироз от сушен Ватос", "5,60", "100", ""],
["", "safrid", "Сафрид", "6,30", "250", ""],
["", "vatos", "Ватос", "7,00", "250", ""]

            ],

            "Грил": [
                ["", "pileshko-file", "Пилешко филе", "6,30", "400", ""],
["", "svinski-vrat", "Свински врат", "7,00", "400", ""],
["", "kyuftencza", "Кюфтенца", "4,90", "", ""]

            ],

            "Ястия": [
                ["", "bavno-pechen-svinski-dzholan", "Бавно печен свински джолан", "7,70", "350", ""],
["", "pile-s-kinoa", "Пиле с киноа", "7,00", "350", ""],
["", "aziatski-sandvich-s-drpano-svinsko", "Азиатски сандвич с дърпано свинско", "6,30", "400", ""],
["", "kebapcheta-3br-s-garnitura-przheni-kartofi", "Кебапчета (3бр) с гарнитура пържени картофи", "4,90", "400", ""]

            ],

            "Домашни десерти": [
                ["", "banofi-tart", "Банофи тарт", "4,20", "150", ""],
["", "mini-domashen-sladoled-na-klechka", "Мини домашен сладолед на клечка", "3,50", "150", ""],
["", "kupol-ot-shokoladov-mus", "Купол от шоколадов мус", "4,20", "200", ""]

            ],

            "sushi": [
                ["", "khosomaki-somga", "Хосомаки сьомга", "3,50", "", ""],
["", "khosomaki-pushena-somga", "Хосомаки пушена сьомга", "3,50", "", ""],
["", "khosomaki-ton", "Хосомаки Тон", "4,20", "", ""],
["", "uramaki-somga", "Урамаки сьомга", "3,50", "", ""],
["", "uramaki-pushena-somga", "Урамаки пушена сьомга", "3,50", "", ""],
["", "uramaki-riba-ton", "Урамаки Риба тон", "3,50", "", ""],
["", "uramaki-olimpiya", "Урамаки Олимпия", "4,90", "", ""],
["", "uramaki-drijmr", "Урамаки Дриймър", "4,90", "", ""],
["", "sushi-set-klasik", "Суши сет Класик", "12,60", "", ""],
["", "nigiri-miks", "Нигири Микс", "4,90", "", ""],
["", "uramaki-ton-s-majo", "Урамаки тон с майо", "3,50", "", ""],
["", "uramaki-mango-drakon", "Урамаки Манго дракон", "4,90", "", ""]

            ],

            "bread": [
                ["", "pryasno-izpechen-khlyab", "Прясно изпечен хляб", "0,70", "100", ""]

            ],

            "Безалкохолни напитки": [
                ["", "ajryan", "Айрян", "0,70", "200", ""],
["", "energijna-napitka-red-bull", "Енергийна напитка Red Bull", "4,20", "250", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "250", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "250", ""],
["", "fanta-limon", "Fanta Лимон", "1,40", "250", ""],
["", "schweppes-tonik", "Schweppes Тоник", "1,40", "250", ""],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "250", ""],
["", "cappy-portokal-nektar", "Cappy Портокал нектар", "1,40", "200", ""],
["", "cappy-praskova", "Cappy Праскова", "1,40", "200", ""],
["", "cappy-vishna", "Cappy Вишна", "1,40", "200", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "", ""]

            ],

            "beer": [
                ["", "shumensko-svetlo", "Шуменско светло", "2,10", "500", ""],
["", "shumensko-speczialno", "Шуменско Специално", "1,40", "330", ""],
["", "bdvajzr", "Бъдвайзър", "2,80", "500", ""],
["", "tuborg", "Туборг", "2,10", "500", ""],
["", "pirinsko", "Пиринско", "2,10", "500", ""],
["", "mlado-pivo", "Младо пиво", "1,40", "350", ""]

            ],

            "wine": [
                ["", "pentagram-chernomorsko-zlato-traminer", "Пентаграм Черноморско Злато Траминер", "15,40", "750", ""],
["", "pentagram-chernomorsko-zlato-sovinon-blan", "Пентаграм Черноморско Злато Совиньон Блан", "15,40", "750", ""],
["", "zlaten-ritm-chernomorsko-zlato", "Златен Ритъм Черноморско Злато", "21,00", "750", ""],
["", "soleni-khlmove-chernomorsko-zlato", "Солени хълмове Черноморско Злато", "24,50", "750", ""]

            ]
        }', 
        'slug' => 'restorant-zevs',
        'business_name' => 'Ресторант Зевс',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pomorie',
        'region' => 'Pomorie',
        'postal_code' => '8200',
        'address' => 'ул. Раковски 9',
        'address_additional' => '',
        'coords_x' => '42.55623866',
        'coords_y' => '27.64325368',
        'phone' => '+359886228447',
        'email' => '',
        'website' => '',
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
["", "ovcharska-salata", "Овчарска салата", "3,50", "300", ""],
["", "rozovi-domati-s-bivolsko-sirene-i-magdanozeno-pesto", "Розови домати с биволскo сирене и магданозено песто", "4,20", "350", ""],
["", "kombinirana-salata", "Комбинирана салата", "4,20", "350", ""],
["", "kapreze", "Капрезе", "4,20", "280", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "300", ""]

            ],

            "starters": [
                ["", "pileshki-krilcza-ss-soev-sos", "Пилешки крилца със соев сос", "4,20", "300", ""],
["", "melanzanya-di-parmidzhano", "Меланзаня ди пармиджано", "4,20", "300", ""],
["", "selski-brusketi", "Селски брускети", "4,20", "", ""],
["", "brusketi-kapreze", "Брускети Капрезе", "4,20", "", ""],
["", "panirani-topeni-sirena-s-borovinka", "Панирани топени сирена с боровинка", "4,20", "200", ""],
["", "pileshki-filencza-s-kornflejks-i-mlechen-sos", "Пилешки филенца с корнфлейкс и млечен сос", "4,20", "200", ""]

            ],

            "Основни ястия": [
                ["", "teleshka-glava-na-furna", "Телешка глава на фурна", "7,00", "300", ""],
["", "shniczel-po-vienski", "Шницел по Виенски", "7,00", "300", ""],
["", "domashen-sudzhuk-s-brkani-yajcza", "Домашен суджук с бъркани яйца", "5,60", "400", ""],
["", "svinski-mrvki-s-luk", "Свински мръвки с лук", "4,90", "300", ""],
["", "kachamak-ss-sirene-i-maslo", "Качамак със сирене и масло", "2,80", "300", ""],
["", "kachamak-ss-svinski-vrat", "Качамак със свински врат", "4,20", "300", ""],
["", "pikanten-svinski-drob-na-tigan", "Пикантен свински дроб на тиган", "4,20", "350", ""],
["", "pile-po-kievski", "Пиле по Киевски", "7,70", "300", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "300", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "4,20", "350", ""],
["", "burger-s-teleshko-", "Бургер с телешко (", "4,90", "", ""]

            ],

            "На скара": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""],
["", "domashen-sudzhuk", "Домашен суджук", "4,90", "300", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,90", "250", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "4,90", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "250", ""],
["", "svinsko-kyufte", "Свинско кюфте", "1,40", "100", ""],
["", "teleshko-kyufte", "Телешко кюфте", "1,40", "100", ""]

            ],

            "Морски дарове и риба": [
                ["", "khrupkavi-kalmari", "Хрупкави калмари", "5,60", "200", ""],
["", "pikantni-kalmari", "Пикантни калмари", "6,30", "200", ""],
["", "skaridi-na-tigan-s-maslo", "Скариди на тиган с масло", "9,10", "200", ""],
["", "safrid", "Сафрид", "4,90", "300", ""],
["", "midi-na-para-s-vino", "Миди на пара с вино", "5,60", "400", ""],
["", "file-ot-lavrak-na-furna-s-orekhova-korichka", "Филе от лаврак на фурна с орехова коричка", "9,80", "300", ""],
["", "pstrva", "Пъстърва", "6,30", "300", ""],
["", "fish-end-chips", "Фиш енд чипс", "6,30", "300", ""]

            ],

            "garnish": [
                ["", "domashni-przheni-kartofki", "Домашни пържени картофки", "2,10", "200", ""],
["", "domashni-przheni-kartofki-ss-sirene", "Домашни пържени картофки със сирене", "2,80", "250", ""],
["", "selski-kartofki-s-kopr-i-chesn", "Селски картофки с копър и чесън", "2,10", "200", ""],
["", "chips-ot-presni-kartofki", "Чипс от пресни картофки", "2,80", "250", ""],
["", "sezonni-zelenchuczi-na-gril", "Сезонни зеленчуци на грил", "2,10", "300", ""],
["", "sotirani-zelenchuczi-v-maslo", "Сотирани зеленчуци в масло", "2,80", "300", ""],
["", "basmati-oriz", "Басмати ориз", "1,40", "150", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "250", ""],
["", "fanta-limon", "Fanta Лимон", "0,70", "250", ""],
["", "schweppes-mandarina", "Schweppes Мандарина", "0,70", "250", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "330", ""]

            ],

            "drinks": [
                ["", "soda", "Сода", "0,70", "250", ""],
["", "mineralna-voda-devin", "Минерална вода Девин", "1,40", "", ""]

            ]
        }', 
        'slug' => 'bistro-gradinata',
        'business_name' => 'Бистро Градината',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vratsa',
        'region' => 'Vratsa',
        'postal_code' => '3000',
        'address' => 'ул. Георги Пенчев 3',
        'address_additional' => '',
        'coords_x' => '43.20384817',
        'coords_y' => '23.55002318',
        'phone' => '+359878790606',
        'email' => '',
        'website' => '',
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
                ["", "svinsko-kebapche", "Свинско кебапче", "0,70", "70", ""],
["", "svinsko-kyufte", "Свинско кюфте", "0,70", "70", ""],
["", "teleshko-kyufte", "Телешко кюфте", "0,70", "100", ""],
["", "svinska-plnena-pleskavicza", "Свинска пълнена плескавица", "1,40", "200", ""],
["", "svinsko-karnache", "Свинско карначе", "1,40", "150", ""],
["", "svinska-nadenicza", "Свинска наденица", "1,40", "180", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "svinska-przhola", "Свинска пържола", "3,50", "200", ""],
["", "pileshka-przhola", "Пилешка пържола", "3,50", "180", ""],
["", "pitki", "Питки", "0,00", "150", ""],
["", "riba-na-zhar", "Риба на жар", "4,90", "350", ""]

            ],

            "garnish": [
                ["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "150", ""],
["", "zele-i-morkovi", "Зеле и моркови", "0,70", "150", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "0,70", "150", ""],
["", "zelena-salata", "Зелена салата", "0,70", "150", ""],
["", "kartofena-salata", "Картофена салата", "0,70", "150", ""],
["", "kartofi-po-selski", "Картофи по селски", "0,70", "150", ""]

            ]
        }', 
        'slug' => 'bbq-jar',
        'business_name' => 'BBQ Jar',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vratsa',
        'region' => 'Vratsa',
        'postal_code' => '3000',
        'address' => 'ул. Спортна 4',
        'address_additional' => '',
        'coords_x' => '43.2027413',
        'coords_y' => '23.5648636',
        'phone' => '+359886861821',
        'email' => '',
        'website' => '',
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
                ["", "yajchena-salata", "Яйчена салата", "4,20", "400", ""],
["", "oranzheva-ss-sino-sirene", "Оранжева със синьо сирене", "4,20", "300", ""],
["", "kralev-dvor", "Кралев Двор", "6,30", "300", ""],
["", "salata-kapreze", "Салата капрезе", "4,90", "300", ""],
["", "shopska", "Шопска", "4,90", "300", ""],
["", "snezhanka", "Снежанка", "2,80", "400", ""],
["", "oskar", "Оскар", "6,30", "400", ""],
["", "domashna-turshiya", "Домашна туршия", "2,80", "250", ""]

            ],

            "soups": [
                ["", "shkembe", "Шкембе", "2,10", "350", ""],
["", "pileshka-supa", "Пилешка супа", "2,10", "350", ""],
["", "zelenchukova-krem-supa", "Зеленчукова крем супа", "2,10", "350", ""],
["", "bob-chorba", "Боб чорба", "2,10", "350", ""],
["", "tarator-s-orekhi", "Таратор с орехи", "1,40", "350", ""]

            ],

            "maindishes": [
                ["", "brkani-yajcza-s-cherveni-chushki-sirene-presen-luk-sharena-sol", "Бъркани яйца с червени чушки, сирене, пресен лук, шарена сол", "4,90", "350", ""],
["", "teleshki-kyufteta-s-lyutenicza-i-salata-domati-zele-cherveni-i-zeleni-chushki", "Телешки кюфтета с лютеница и салата домати, зеле, червени и зелени чушки", "7,00", "360", ""],
["", "machkani-kartofi-s-yajcza-i-gorski-gbi", "Мачкани картофи с яйца и горски гъби", "4,20", "360", ""],
["", "pileshki-drobcheta-s-med-i-susam", "Пилешки дробчета с мед и сусам", "4,90", "200", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "4,90", "350", ""],
["", "sirene-na-plocha-s-med-i-orekhi", "Сирене на плоча с мед и орехи", "4,20", "200", ""],
["", "przheni-domashni-kartofi", "Пържени домашни картофи", "2,10", "300", ""],
["", "pstrva-s-maslinova-pasta-i-limonov-dresing-s-chesn", "Пъстърва с маслинова паста и лимонов дресинг с чесън", "11,20", "400", ""]

            ],

            "grill": [
                ["", "vratna-przhola", "Вратна пържола", "5,60", "200", ""],
["", "pileshko-file", "Пилешко филе", "5,60", "200", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kotletna-przhola", "Котлетна пържола", "5,60", "200", ""],
["", "svinski-rebra-bavno-gotveni", "Свински ребра бавно готвени", "6,30", "300", ""],
["", "banska-krvavicza", "Банска кървавица", "5,60", "250", ""],
["", "banski-sudzhuk", "Бански суджук", "5,60", "250", ""]

            ],

            "Гарнитури към скарата": [
                ["", "zelena-salata-ss-susam-balsamiko-i-zekhtin", "Зелена салата със сусам, балсамико и зехтин", "2,10", "150", ""],
["", "sotirani-korenoplodni-zelenchuczi-vinen-sos-s-kanela-i-dzhindzhifil", "Сотирани кореноплодни зеленчуци, винен сос с канела и джинджифил", "2,10", "150", ""],
["", "prlenka", "Пърленка", "1,40", "100", ""],
["", "prlenka-s-chesn-zekhtin-i-kashkaval", "Пърленка с чесън зехтин и кашкавал", "1,40", "100", ""],
["", "prlenka-s-chesn-i-zekhtin", "Пърленка с чесън и зехтин", "1,40", "100", ""]

            ]
        }', 
        'slug' => 'kralev-dvor',
        'business_name' => 'Кралев двор',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Bansko',
        'region' => 'Bansko',
        'postal_code' => '2770',
        'address' => 'Ул. Терзи Никола 3',
        'address_additional' => '',
        'coords_x' => '41.83304544',
        'coords_y' => '23.48190208',
        'phone' => '+359894632066',
        'email' => '',
        'website' => '',
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
        'slug' => 'pri-kmeta',
        'business_name' => 'При Кмета',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Troyan',
        'region' => 'Troyan',
        'postal_code' => '5600',
        'address' => 'пл. Възраждане 1',
        'address_additional' => '',
        'coords_x' => '42.8846333',
        'coords_y' => '24.7098676',
        'phone' => '+359878123108',
        'email' => '',
        'website' => '',
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
                ["", "czezar", "Цезар", "4,20", "350", ""],
["", "grczka", "Гръцка", "2,80", "350", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "kapreze", "Капрезе", "4,90", "350", ""],
["", "grilovana-salata", "Грилована салата", "3,50", "350", ""],
["", "domati-s-dresing-ot-sino-sirene", "Домати с дресинг от синьо сирене", "2,80", "350", ""],
["", "tabule", "Табуле", "2,80", "250", ""],
["", "salata-s-ajsberg-rukola-yablki-i-orekhi", "Салата с айсберг, рукола, ябълки и орехи", "3,50", "350", ""],
["", "miks-ot-zeleni-salati-s-avokado-susheni-domati-i-yadki", "Микс от зелени салати с авокадо, сушени домати и ядки", "5,60", "300", ""]

            ],

            "Студени мезета": [
                ["", "file-elena", "Филе Елена", "4,90", "100", ""],
["", "govezhda-pastrma", "Говежда пастърма", "4,90", "100", ""],
["", "lukanka", "Луканка", "3,50", "100", ""],
["", "sudzhuk", "Суджук", "3,50", "100", ""]

            ],

            "Топли предястия": [
                ["", "pechen-kamember-ss-sladko-ot-smokini-i-yadki", "Печен камембер със сладко от смокини и ядки", "5,60", "200", ""],
["", "paketi-s-koze-sirene", "Пакети с козе сирене", "5,60", "280", ""],
["", "teleshki-ezik-s-manatarki", "Телешки език с манатарки", "6,30", "250", ""],
["", "omlet-s-divi-gbi", "Омлет с диви гъби", "2,80", "200", ""],
["", "manatarki-v-maslo", "Манатарки в масло", "8,40", "170", ""],
["", "przhen-kachamak-s-maslo-i-sirene", "Пържен качамак с масло и сирене", "2,80", "250", ""]

            ],

            "Основни ястия": [
                ["", "pileshko-file-s-bademova-korichka", "Пилешко филе с бадемова коричка", "6,30", "350", ""],
["", "rulcza-ot-teleshki-stek-na-gril", "Рулца от телешки стек на грил", "11,90", "400", ""],
["", "teleshki-stek-s-karameliziran-luk", "Телешки стек с карамелизиран лук", "11,20", "400", ""],
["", "agneshki-kyuftencza-s-bulgur", "Агнешки кюфтенца с булгур", "5,60", "350", ""],
["", "svinski-marinovani-rebra-na-skara", "Свински мариновани ребра на скара", "5,60", "400", ""],
["", "svinski-kareta-na-tigan", "Свински карета на тиган", "4,90", "300", ""],
["", "khrupkavi-svinski-przholi", "Хрупкави свински пържоли", "7,70", "350", ""],
["", "marinovan-svinski-vrat-na-skara", "Маринован свински врат на скара", "5,60", "350", ""],
["", "svinsko-bon-file-s-med-i-mashherka-na-tigan", "Свинско бон филе с мед и мащерка на тиган", "7,00", "350", ""],
["", "kyuftencza-ot-nakhut", "Кюфтенца от нахут", "3,50", "300", ""],
["", "rizoto-s-manatarki", "Ризото с манатарки", "4,20", "300", ""],
["", "teleshki-burger", "Телешки бургер", "4,20", "450", ""],
["", "patatnik", "Пататник", "3,50", "400", ""],
["", "zapecheni-kartofi-ss-sirena-i-mlechen-sos", "Запечени картофи със сирена и млечен сос", "2,80", "350", ""],
["", "kartofen-chips-s-chesnov-sos", "Картофен чипс с чеснов сос", "2,10", "350", ""]

            ],

            "desserts": [
                ["", "paniran-banan-ss-sos-dulse-de-leche", "Паниран банан със сос Дулсе де Лече", "1,40", "200", ""],
["", "limeczova-palachinka-s-shokolad", "Лимецова палачинка с шоколад", "2,10", "300", ""],
["", "limeczova-palachinka-s-med-i-orekhi", "Лимецова палачинка с мед и орехи", "2,10", "300", ""],
["", "lava-kejk", "Лава кейк", "2,10", "200", ""],
["", "shokoladov-fch", "Шоколадов фъч", "2,10", "200", ""]

            ],

            "Coca Cola напитки": [
                ["", "cappy-portokal-nektar", "Cappy Портокал Нектар", "0,70", "250", ""],
["", "cappy-yablka-nektar", "Cappy Ябълка Нектар", "0,70", "250", ""],
["", "cappy-kajsiya-plodova-napitka", "Cappy Кайсия Плодова напитка", "0,70", "250", ""]

            ],

            "Безалкохолни напитки": [
                ["", "studen-chaj-san-benedeto-limon", "Студен чай Сан Бенедето лимон", "1,40", "500", ""],
["", "studen-chaj-san-benedeto-praskova", "Студен чай Сан Бенедето праскова", "1,40", "500", ""],
["", "mineralna-voda-perie", "Минерална вода Перие", "2,10", "330", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна баня", "0,70", "", ""],
["", "gazirana-voda-mikhalkovo", "Газирана вода Михалково", "0,70", "300", ""],
["", "izvorna-voda-mikhalkovo", "Изворна вода Михалково", "0,70", "300", ""],
["", "red-bul", "Ред Бул", "2,80", "250", ""]

            ],

            "beer": [
                ["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "khajneken-bezalkokholna-bira", "Хайнекен безалкохолна бира", "2,10", "330", ""],
["", "starobrno", "Старобърно", "1,40", "500", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""],
["", "staropramen-svetlo", "Старопрамен светло", "1,40", "500", ""],
["", "staropramen-tmno", "Старопрамен тъмно", "1,40", "500", ""],
["", "budvajzer", "Будвайзер", "1,40", "500", ""],
["", "kamenicza-svetlo", "Каменица светло", "1,40", "500", ""],
["", "kamenicza-svetlo", "Каменица светло", "0,70", "330", ""],
["", "stolichno-vajs", "Столично Вайс", "1,40", "400", ""],
["", "san-migel", "Сан мигел", "2,80", "330", ""]

            ],

            "wine": [
                ["", "katarzhina-bio-merlo-i-sira", "Катаржина Био Мерло и Сира", "23,80", "750", ""],
["", "katarzhina-bio-roze", "Катаржина Био Розе", "23,80", "750", ""],
["", "katarzhina-le-roze", "Катаржина Ле Розе", "19,60", "750", ""],
["", "katarzhina-le-voyage-sovinon-blan", "Катаржина Le Voyage Совиньон Блан", "18,90", "750", ""],
["", "katarzhina-le-voyage-kaberne-i-sira", "Катаржина Le Voyage Каберне и Сира", "23,80", "750", ""],
["", "enira-kaberne-sovinon", "Енира Каберне Совиньон", "16,10", "750", ""],
["", "enira-merlo", "Енира Мерло", "16,10", "750", ""]

            ]
        }', 
        'slug' => 'restorant-eko',
        'business_name' => 'Ресторант Еко',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Smolyan',
        'region' => 'Smolyan',
        'postal_code' => '4700',
        'address' => 'ул. Полковник Дичо Петров 16',
        'address_additional' => '',
        'coords_x' => '41.5783695',
        'coords_y' => '24.710511',
        'phone' => '+359889399919',
        'email' => '',
        'website' => '',
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
            
            "Дюнери и Гироси": [
                ["", "dyuner", "Дюнер", "1,40", "", ""],
["", "giros", "Гирос", "2,10", "", ""]

            ],

            "burgers": [
                ["", "teleshki-burger", "Телешки бургер", "2,80", "400", ""],
["", "svinski-burger", "Свински бургер", "2,80", "400", ""],
["", "chijzburger", "Чийзбургер", "2,80", "400", ""],
["", "pileshki-chijz", "Пилешки чийз", "2,10", "360", ""],
["", "pileshki-shniczel", "Пилешки шницел", "2,10", "360", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "1,40", "360", ""],
["", "juicy-jane", "Juicy Jane", "4,90", "680", ""],
["", "roshhi-teleshki", "Рьощи телешки", "2,80", "", ""],
["", "roshhi-pileshki", "Рьощи пилешки", "2,10", "", ""],
["", "roshhi-vegetarinaski", "Рьощи вегетаринаски", "2,10", "400", ""]

            ],

            "Сандвичи и хот-дог": [
                ["", "sandvich-s-lukanka", "Сандвич с луканка", "2,10", "300", ""],
["", "sandvich-s-pueshko-file", "Сандвич с пуешко филе", "2,10", "300", ""],
["", "sandvich-s-shunka", "Сандвич с шунка", "1,40", "300", ""],
["", "sandvich-s-bekon", "Сандвич с бекон", "2,10", "300", ""],
["", "vegetarianski-sandvich", "Вегетариански сандвич", "1,40", "300", ""],
["", "khot-dog", "Хот-Дог", "1,40", "300", ""]

            ],

            "additives": [
                ["", "porcziya-kartofi", "Порция картофи", "1,40", "300", ""]

            ]
        }', 
        'slug' => 'burger-duner-central',
        'business_name' => 'Burger &amp; Duner Central',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Troyan',
        'region' => 'Troyan',
        'postal_code' => '5600',
        'address' => 'ул. Васил Левски 28',
        'address_additional' => '',
        'coords_x' => '42.8854732',
        'coords_y' => '24.7117577',
        'phone' => '+359879372277',
        'email' => '',
        'website' => '',
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
                ["", "grczka-salata", "Гръцка салата", "2,80", "350", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "350", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "300", ""],
["", "italianska-salata", "Италианска салата", "4,90", "250", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "400", ""]

            ],

            "alaminuti": [
                ["", "topeni-sirencza-ss-sos-ot-borovinki", "Топени сиренца със сос от боровинки", "3,50", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "panirano-sirene", "Панирано сирене", "2,80", "200", ""],
["", "paniran-kashkaval", "Паниран кашкавал", "3,50", "200", ""],
["", "pileshki-filencza-s-kornflejks-i-mlechen-sos", "Пилешки филенца с корнфлейкс и млечен сос", "4,20", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "kartofeni-noazeti", "Картофени ноазети", "1,40", "200", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "150", ""]

            ],

            "pizza": [
                ["", "peperoni", "Пеперони", "5,60", "480", ""],
["", "kaprichoza", "Капричоза", "4,90", "500", ""],
["", "margarita", "Маргарита", "3,50", "430", ""],
["", "neapolitana", "Неаполитана", "5,60", "480", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "5,60", "490", ""],
["", "proshuto", "Прошуто", "6,30", "500", ""],
["", "picza-ragazzi", "Пица Ragazzi", "5,60", "500", ""],
["", "da-vinchi", "Да Винчи", "4,90", "500", ""],
["", "polo", "Поло", "4,90", "550", ""],
["", "picza-s-shunka", "Пица с шунка", "4,20", "480", ""]

            ],

            "Прясна паста": [
                ["", "pasta-karbonara", "Паста Карбонара", "5,60", "350", ""],
["", "pasta-matrichana", "Паста Матричана", "5,60", "350", ""],
["", "pasta-boloneze", "Паста Болонезе", "4,90", "350", ""],
["", "pasta-putaneska", "Паста Путанеска", "4,90", "350", ""]

            ],

            "risotto": [
                ["", "rizoto-s-pileshko-i-gbi", "Ризото с пилешко и гъби", "7,70", "350", ""],
["", "rizoto-milaneze", "Ризото Миланезе", "6,30", "300", ""]

            ],

            "Чабата сандвичи": [
                ["", "chabata-kapreze", "Чабата Капрезе", "4,20", "450", ""],
["", "chabata-napoli", "Чабата Наполи", "4,20", "460", ""],
["", "chabata-proshuto", "Чабата Прошуто", "4,90", "440", ""],
["", "chabata-pikante", "Чабата Пиканте", "4,20", "460", ""]

            ],

            "sauces": [
                ["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "pesto", "Песто", "0,70", "30", ""],
["", "chili-sos", "Чили сос", "0,00", "30", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "sos-ot-borovinki", "Сос от боровинки", "0,00", "50", ""]

            ]
        }', 
        'slug' => 'ragazzi-bar',
        'business_name' => 'Ragazzi Bar &amp; Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Petrich',
        'region' => 'Petrich',
        'postal_code' => '2850',
        'address' => 'ул. Бългaрия 20',
        'address_additional' => '',
        'coords_x' => '41.39260342',
        'coords_y' => '23.20525304',
        'phone' => '+359876407270',
        'email' => '',
        'website' => '',
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
                ["", "margarita", "Маргарита", "7,00", "430", ""],
["", "napoletana", "Наполетана", "9,10", "430", ""],
["", "diavola", "Диавола", "9,10", "420", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "9,80", "420", ""],
["", "kaprichoza", "Капричоза", "9,80", "500", ""],
["", "tono", "Тоно", "9,80", "500", ""],
["", "parma", "Парма", "10,50", "420", ""],
["", "proshuto-fungi", "Прошуто фунги", "10,50", "430", ""]

            ],

            "Безалкохолни напитки": [
                ["", "studen-chaj-liptn", "Студен чай Липтън", "2,10", "350", ""],
["", "fresh", "Фреш", "3,50", "300", ""],
["", "limonada", "Лимонада", "3,50", "", ""],
["", "czitronada", "Цитронада", "3,50", "", ""]

            ],

            "beer": [
                ["", "shumensko", "Шуменско", "1,40", "330", ""],
["", "shumensko", "Шуменско", "2,10", "500", ""],
["", "pirinsko", "Пиринско", "2,10", "330", ""],
["", "pirinsko-mlado-pivo", "Пиринско младо пиво", "1,40", "330", ""],
["", "pirinsko-radler", "Пиринско Радлер", "2,10", "500", ""],
["", "zhateczki-khus", "Жатецки хус", "2,10", "500", ""],
["", "budvajzer", "Будвайзер", "2,80", "500", ""],
["", "tuborg", "Туборг", "2,10", "500", ""],
["", "karlsberg", "Карлсберг", "2,80", "500", ""],
["", "samrsbi", "Самърсби", "3,50", "330", ""]

            ],

            "desserts": [
                ["", "banofiti", "Банофити", "4,20", "150", ""],
["", "shokolad-s-malini", "Шоколад с малини", "4,20", "170", ""],
["", "cherveno-kadife", "Червено кадифе", "4,20", "150", ""],
["", "torta-tiramisu", "Торта тирамису", "4,20", "150", ""],
["", "morkovena-torta", "Морковена торта", "3,50", "150", ""],
["", "tartaleta-s-shokolad", "Тарталета с шоколад", "3,50", "", ""],
["", "tartaleta-s-plodove", "Тарталета с плодове", "3,50", "", ""],
["", "torta-pistakio", "Торта пистакио", "4,90", "170", ""],
["", "chijzkejk", "Чийзкейк", "4,20", "160", ""]

            ]
        }', 
        'slug' => 'macaron-pizza-caffe',
        'business_name' => 'MacarOn Pizza &amp; Caffe',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Balchik',
        'region' => 'Balchik',
        'postal_code' => '9600',
        'address' => 'ул. Самара 3',
        'address_additional' => '',
        'coords_x' => '43.4056996',
        'coords_y' => '28.1593898',
        'phone' => '+359896840745',
        'email' => '',
        'website' => '',
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
                ["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "shopska-salata", "Шопска салата", "2,10", "300", ""],
["", "selska", "Селска", "2,10", "300", ""],
["", "zhtvarska", "Жътварска", "2,80", "400", ""],
["", "redena", "Редена", "2,80", "400", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "450", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "domati", "Домати", "2,10", "250", ""],
["", "krastaviczi", "Краставици", "2,10", "250", ""],
["", "pecheni-chushki", "Печени чушки", "2,10", "250", ""],
["", "starosofijska", "Старософийска", "2,10", "350", ""],
["", "zelena-salata", "Зелена салата", "2,10", "300", ""],
["", "salata-tono", "Салата Тоно", "2,80", "300", ""],
["", "salata-asorti", "Салата Асорти", "4,90", "500", ""],
["", "salata-elegans", "Салата Елеганс", "4,90", "500", ""],
["", "salata-na-shefa", "Салата на шефа", "3,50", "400", ""],
["", "czezar", "Цезар", "3,50", "350", ""],
["", "turshiya", "Туршия", "2,10", "300", ""],
["", "nashenska-salata", "Нашенска салата", "2,10", "350", ""],
["", "salata-fatush", "Салата Фатуш", "3,50", "350", ""],
["", "salata-meksiko", "Салата Мексико", "4,20", "450", ""]

            ],

            "Студени предястия": [
                ["", "sirene-natyur", "Сирене натюр", "0,70", "100", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "0,70", "100", ""],
["", "sudzhuk", "Суджук", "2,10", "100", ""],
["", "lukanka", "Луканка", "2,80", "100", ""],
["", "file-elena", "Филе Елена", "3,50", "100", ""],
["", "pastrma", "Пастърма", "3,50", "100", ""],
["", "mesno-plato", "Месно плато", "7,00", "200", ""],
["", "mlechno-plato", "Млечно плато", "6,30", "400", ""],
["", "toplo-kombinirano-plato", "Топло комбинирано плато", "9,10", "600", ""]

            ],

            "Топли предястия": [
                ["", "sirene-pane", "Сирене пане", "2,10", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "250", ""],
["", "sirene-s-med-i-orekhi", "Сирене с мед и орехи", "2,80", "300", ""],
["", "mandradzhijska-razyadka", "Мандраджийска разядка", "3,50", "350", ""],
["", "topeni-sirencza-ss-sladko", "Топени сиренца със сладко", "2,80", "200", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "200", ""],
["", "czarevicza-v-maslo", "Царевица в масло", "2,10", "300", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "2,80", "250", ""],
["", "pileshki-khapki-kornflejks", "Пилешки хапки корнфлейкс", "3,50", "250", ""],
["", "pileshko-file-s-maslo-i-chesn", "Пилешко филе с масло и чесън", "3,50", "250", ""],
["", "pileshki-drobcheta-s-luk-i-bekon", "Пилешки дробчета с лук и бекон", "2,80", "300", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "350", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "4,20", "200", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,20", "200", ""],
["", "svinski-ezik-meze", "Свински език мезе", "4,90", "260", ""],
["", "mezelk", "Мезелък", "3,50", "300", ""],
["", "rolcza-ot-raczi-pane", "Ролца от раци пане", "2,10", "240", ""],
["", "kalmari-pane", "Калмари пане", "3,50", "200", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "2,80", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "220", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "250", ""],
["", "kachamak", "Качамак", "2,10", "300", ""],
["", "zapekanka-s-kartofi-i-bekon", "Запеканка с картофи и бекон", "2,80", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,10", "", ""],
["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "toskana", "Тоскана", "3,50", "", ""],
["", "kuatro-formadzho", "Куатро формаджо", "3,50", "", ""],
["", "salami", "Салами", "3,50", "", ""],
["", "bela-dona", "Бела Дона", "2,80", "", ""],
["", "proshuto-fungi", "Прошуто фунги", "3,50", "", ""],
["", "elegans", "Елеганс", "4,20", "", ""],
["", "martineli", "Мартинели", "4,20", "", ""]

            ],

            "Основни ястия": [
                ["", "pile-trakiya", "Пиле Тракия", "3,50", "350", ""],
["", "pile-syurpriz", "Пиле Сюрприз", "4,20", "400", ""],
["", "pile-rozmarin", "Пиле Розмарин", "4,20", "400", ""],
["", "pile-tapanyaki", "Пиле Тапаняки", "3,50", "380", ""],
["", "pokhlupeno-pile", "Похлупено пиле", "4,90", "450", ""],
["", "svinsko-pikantno", "Свинско пикантно", "4,20", "350", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "4,20", "380", ""],
["", "svinski-pechen-dzholan", "Свински печен джолан", "5,60", "420", ""],
["", "svinsko-dezhavyu", "Свинско Дежавю", "4,20", "360", ""],
["", "vienski-shniczel", "Виенски шницел", "4,20", "450", ""],
["", "agneshko-mekhandzhiya", "Агнешко механджия", "5,60", "350", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "nevrozno-kyufte", "Неврозно кюфте", "1,40", "160", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "2,80", "250", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "3,50", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "300", ""],
["", "svinski-kareta", "Свински карета", "4,20", "250", ""],
["", "svinski-cheren-drob", "Свински черен дроб", "2,80", "250", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,10", "220", ""],
["", "svinski-rebrcza", "Свински ребърца", "2,80", "350", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "meshana-skara", "Мешана скара", "7,70", "560", ""]

            ],

            "Гювечета": [
                ["", "sirene-po-shopski", "Сирене по шопски", "2,10", "300", ""],
["", "trakijsko-gyuveche", "Тракийско гювече", "2,80", "300", ""],
["", "babina-mandzhicza-v-gyuveche", "Бабина манджица в гювече", "3,50", "400", ""]

            ],

            "Сач": [
                ["", "pileshki-sach", "Пилешки сач", "8,40", "600", ""],
["", "svinski-sach", "Свински сач", "10,50", "600", ""],
["", "kombiniran-sach", "Комбиниран сач", "12,60", "800", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "6,30", "600", ""],
["", "majstorsko-meze-na-sach", "Майсторско мезе на сач", "8,40", "400", ""],
["", "yunashki-sach", "Юнашки сач", "8,40", "400", ""]

            ],

            "risotto": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,80", "400", ""],
["", "rizoto-gbi-i-pile", "Ризото гъби и пиле", "3,50", "400", ""],
["", "rizoto-pile-i-topeno-sirene", "Ризото пиле и топено сирене", "3,50", "400", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "3,50", "400", ""]

            ],

            "fish": [
                ["", "czipura", "Ципура", "6,30", "300", ""],
["", "skumriya", "Скумрия", "3,50", "250", ""],
["", "pstrva", "Пъстърва", "4,20", "300", ""],
["", "lavrak", "Лаврак", "6,30", "300", ""],
["", "somga-kotlet", "Сьомга котлет", "7,00", "200", ""],
["", "byala-riba-pane", "Бяла риба пане", "2,80", "200", ""]

            ],

            "Омлети": [
                ["", "omlet-natyur", "Омлет натюр", "1,40", "150", ""],
["", "omlet-sirene", "Омлет сирене", "2,10", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "200", ""],
["", "omlet-asorti", "Омлет асорти", "2,80", "250", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "150", ""],
["", "mish-mash", "Миш маш", "2,10", "300", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "260", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "0,70", "180", ""],
["", "zadusheni-kartofi-s-chesn", "Задушени картофи с чесън", "1,40", "300", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "0,70", "250", ""],
["", "svezhi-zelenchuczi", "Свежи зеленчуци", "1,40", "300", ""]

            ],

            "bread": [
                ["", "filijka", "Филийка", "0,00", "", ""],
["", "prepechena-filijka", "Препечена филийка", "0,00", "", ""],
["", "chesnova-pitka", "Чеснова питка", "0,00", "", ""],
["", "pryasno-izpechena-pitka", "Прясно изпечена питка", "0,00", "", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "", ""],
["", "chesnova-prlenka-ss-sirene-i-kashkaval", "Чеснова пърленка със сирене и кашкавал", "1,40", "", ""]

            ],

            "desserts": [
                ["", "palachinka-s-shokolad", "Палачинка с шоколад", "0,70", "", ""],
["", "palachinka-s-konfityur", "Палачинка с конфитюр", "0,70", "", ""],
["", "palachinka-s-med-i-orekhi", "Палачинка с мед и орехи", "0,70", "", ""],
["", "beluchi", "Белучи", "1,40", "", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,10", "", ""]

            ]
        }', 
        'slug' => 'restorant-gabriela-elegance',
        'business_name' => 'Ресторант Gabriela Elegance',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Radomir',
        'region' => 'Radomir',
        'postal_code' => '2403',
        'address' => 'ул. Александър Ботев 5',
        'address_additional' => '',
        'coords_x' => '42.5459651',
        'coords_y' => '22.9589243',
        'phone' => '+359897666097',
        'email' => '',
        'website' => '',
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
            
            "beer": [
                ["", "samrsbi", "Самърсби", "1,40", "330", ""],
["", "karlsberg", "Карлсберг", "2,10", "500", ""],
["", "pirinsko---bezalkokholna", "Пиринско - безалкохолна", "1,40", "500", ""],
["", "tuborg", "Туборг", "1,40", "330", ""],
["", "tuborg", "Туборг", "1,40", "500", ""],
["", "budvajzer", "Будвайзер", "2,80", "500", ""],
["", "san-migel", "Сан Мигел", "2,10", "330", ""]

            ],

            "Безалкохолни напитки": [
                ["", "pepsi", "Пепси", "1,40", "330", ""],
["", "mirinda", "Миринда", "1,40", "330", ""],
["", "studen-chaj-san-benedeto", "Студен чай Сан Бенедето", "1,40", "500", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-grozde", "Fanta Грозде", "1,40", "330", ""]

            ],

            "Нови предложения": [
                ["", "chicken-run", "Chicken Run", "6,30", "450", ""],
["", "bbq", "BBQ", "7,00", "420", ""]

            ],

            "burgers": [
                ["", "crispy-little-chicken", "Crispy Little chicken", "4,20", "400", ""],
["", "double-team", "Double team", "9,10", "550", ""],
["", "the-godfather", "The Godfather", "10,50", "650", ""],
["", "wild-wild-west", "Wild, wild west", "5,60", "400", ""],
["", "road-house", "Road House", "7,00", "450", ""],
["", "bacon--cheese", "Bacon & Cheese", "5,60", "450", ""],
["", "single", "Single", "5,60", "400", ""],
["", "beef", "Beef", "4,90", "350", ""]

            ],

            "starters": [
                ["", "khrupkavi-pileshki-filencza", "Хрупкави пилешки филенца", "4,20", "200", ""],
["", "pileshki-krilcza-ss-soev-sos", "Пилешки крилца със соев сос", "3,50", "250", ""],
["", "domashni-przheni-kartofi", "Домашни пържени картофи", "1,40", "250", ""],
["", "domashni-przheni-kartofi-ss-sirene", "Домашни пържени картофи със сирене", "2,10", "300", ""],
["", "kartofki-bankya-sport", "Картофки Банкя спорт", "3,50", "380", ""]

            ]
        }', 
        'slug' => 'kompleks-bankya-sport',
        'business_name' => 'Комплекс Банкя Спорт',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Bankya',
        'region' => 'Bankya',
        'postal_code' => '1320',
        'address' => 'ул. Иванянско шосе 3б',
        'address_additional' => '',
        'coords_x' => '42.71341113',
        'coords_y' => '23.17484576',
        'phone' => '+359895759985',
        'email' => '',
        'website' => '',
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
                ["", "grczka", "Гръцка", "4,20", "500", ""],
["", "turshiya", "Туршия", "3,50", "400", ""],
["", "shopska", "Шопска", "3,50", "400", ""],
["", "snezhanka", "Снежанка", "2,80", "250", ""],
["", "ovcharska", "Овчарска", "4,90", "500", ""],
["", "zele-i-morkovi", "Зеле и моркови", "3,50", "400", ""],
["", "zelena-salata", "Зелена салата", "3,50", "400", ""]

            ],

            "Сухи мезета": [
                ["", "file-elena", "Филе Елена", "4,20", "100", ""],
["", "banski-starecz", "Бански старец", "4,20", "100", ""],
["", "plato-mezeta", "Плато мезета", "8,40", "200", ""],
["", "pastrma", "Пастърма", "4,90", "100", ""],
["", "lukanka", "Луканка", "3,50", "100", ""],
["", "sino-sirene", "Синьо сирене", "3,50", "100", ""]

            ],

            "starters": [
                ["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "350", ""],
["", "sirene-pane-khapki", "Сирене пане хапки", "4,20", "200", ""],
["", "kashkaval-pane-khapki", "Кашкавал пане хапки", "4,20", "250", ""],
["", "zapecheni-kartofi-ss-smetana-i-kashkaval", "Запечени картофи със сметана и кашкавал", "4,20", "500", ""],
["", "selski-kartofi", "Селски картофи", "2,80", "300", ""],
["", "sirene-po-shopski", "Сирене по шопски", "4,20", "250", ""],
["", "panirani-topeni-sirencza-s-borovinki-i-susam", "Панирани топени сиренца с боровинки и сусам", "4,90", "250", ""],
["", "mish-mash", "Миш маш", "3,50", "500", ""],
["", "tikvichki-s-mlechen-sos", "Тиквички с млечен сос", "3,50", "350", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "4,20", "400", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "350", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,90", "300", ""],
["", "pile-v-kornflejks-s-chesnov-sos", "Пиле в корнфлейкс с чеснов сос", "4,90", "300", ""],
["", "chesnov-banski-starecz", "Чеснов Бански Старец", "5,60", "150", ""]

            ],

            "Селски гозби": [
                ["", "selska-salata", "Селска салата", "4,20", "350", ""],
["", "salata-ot-pecheni-chushki", "Салата от печени чушки", "3,50", "", ""],
["", "salata-vitamina", "Салата Витамина", "3,50", "", ""],
["", "panirani-chushki", "Панирани чушки", "3,50", "", ""],
["", "chushka-byurek", "Чушка бюрек", "3,50", "", ""],
["", "gyuveche-po-selski", "Гювече по селски", "4,90", "", ""],
["", "gbi-v-maslo", "Гъби в масло", "3,50", "", ""],
["", "srcza-po-selski", "Сърца по селски", "4,90", "", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,20", "", ""],
["", "svinsko-po-pirinski", "Свинско по пирински", "5,60", "", ""],
["", "kachamak-s-przhki", "Качамак с пръжки", "3,50", "", ""],
["", "shupla-s-maslo-i-sirene", "Шупла с масло и сирене", "2,10", "", ""]

            ],

            "maindishes": [
                ["", "shniczel-po-vienski", "Шницел по виенски", "6,30", "500", ""],
["", "svinski-dzholan", "Свински джолан", "19,60", "1100", ""],
["", "katino-meze", "Катино мезе", "4,90", "350", ""],
["", "svinsko-po-lovdzhijski", "Свинско по ловджийски", "5,60", "400", ""],
["", "svinski-medaloni-s-gben-sos", "Свински медальони с гъбен сос", "5,60", "400", ""],
["", "svinski-sach", "Свински сач", "11,20", "800", ""],
["", "pileshki-flejki-s-gbi-i-kashkaval", "Пилешки флейки с гъби и кашкавал", "5,60", "300", ""],
["", "pileshki-sach", "Пилешки сач", "11,20", "800", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,20", "300", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "krvavicza", "Кървавица", "4,90", "250", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "svinsko-shishche", "Свинско шишче", "2,80", "100", ""],
["", "sudzhuk", "Суджук", "4,90", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,80", "100", ""],
["", "meshana-skara-na-dska", "Мешана скара на дъска", "21,70", "1140", ""],
["", "svinski-rebra", "Свински ребра", "5,60", "400", ""]

            ],

            "garnish": [
                ["", "kartofeno-pyure", "Картофено пюре", "0,70", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "150", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "turshiya", "Туршия", "0,70", "150", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,10", "", ""],
["", "sladka-banicza", "Сладка баница", "2,10", "200", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "4,20", "", ""],
["", "czedeno-mlyako-s-med-orekhi-i-borovinki", "Цедено мляко с мед, орехи и боровинки", "2,80", "200", ""],
["", "palachinki", "Палачинки", "2,10", "", ""]

            ],

            "Десерти по селски": [
                ["", "krem-karamel", "Крем карамел", "1,40", "", ""],
["", "ovche-kiselo-mlyako", "Овче кисело мляко", "2,80", "", ""]

            ],

            "drinks": [
                ["", "mtenicza", "Мътеница", "0,70", "200", ""],
["", "fresh", "Фреш", "2,80", "200", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "330", ""],
["", "redbul", "Редбул", "3,50", "250", ""]

            ],

            "beer": [
                ["", "smrsbi", "Съмърсби", "1,40", "330", ""],
["", "stela-artoa", "Стела Артоа", "2,10", "500", ""],
["", "staropramen", "Старопрамен", "2,10", "500", ""],
["", "kamenicza", "Каменица", "1,40", "500", ""],
["", "bezalkokholna-beks", "Безалкохолна Бекс", "2,10", "330", ""]

            ]
        }', 
        'slug' => 'mehana-ropchov-han',
        'business_name' => 'Механа Ропчов Хан',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Razlog',
        'region' => 'Razlog',
        'postal_code' => '2778',
        'address' => 'с. Баня, ул. Двадесет и втора 7',
        'address_additional' => '',
        'coords_x' => '41.88263837',
        'coords_y' => '23.52589266',
        'phone' => '+359882214118',
        'email' => '',
        'website' => '',
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
                ["", "balkanska-salata", "Балканска салата", "4,90", "350", ""],
["", "salata-s-belen-rozov-domat", "Салата с белен розов домат", "4,20", "300", ""],
["", "zelena-salata-s-cheri-domati", "Зелена салата с чери домати", "3,50", "350", ""],
["", "salata-polo", "Салата Поло", "4,90", "350", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "250", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "350", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,80", "350", ""],
["", "proletna-salata", "Пролетна салата", "3,50", "400", ""],
["", "sredizemnomorska-salata", "Средиземноморска салата", "5,60", "350", ""],
["", "salata-venecziya", "Салата Венеция", "4,20", "300", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "350", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "salata-s-midi-i-presen-luk", "Салата с миди и пресен лук", "3,50", "200", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "300", ""],
["", "salata-tropikana", "Салата Тропикана", "5,60", "500", ""]

            ],

            "alaminuti": [
                ["", "domashen-kartofen-chips-s-kopr-i-chesn", "Домашен картофен чипс с копър и чесън", "2,80", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,80", "200", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "3,50", "250", ""],
["", "domashni-kartofi-s-mlechen-sos", "Домашни картофи с млечен сос", "3,50", "250", ""],
["", "kartofi-sote-s-kopr-i-chesn", "Картофи соте с копър и чесън", "2,80", "200", ""],
["", "panirani-sirencza-s-konfityur", "Панирани сиренца с конфитюр", "4,20", "300", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "4,20", "250", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "3,50", "200", ""],
["", "pileshki-vodenichki", "Пилешки воденички", "3,50", "200", ""],
["", "pileshki-srcza", "Пилешки сърца", "3,50", "200", ""],
["", "pileshki-filencza-s-kornflejks-i-mlechen-sos", "Пилешки филенца с корнфлейкс и млечен сос", "4,90", "250", ""],
["", "chesnovi-pileshki-khapki", "Чеснови пилешки хапки", "4,90", "250", ""],
["", "svinski-khapki-ot-bon-file", "Свински хапки от бон филе", "5,60", "200", ""],
["", "svinski-ezik-v-maslo-zapechen-s-kashkaval", "Свински език в масло запечен с кашкавал", "5,60", "200", ""],
["", "pileshko-plato-tropikana", "Пилешко плато Тропикана", "9,10", "500", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "Основни ястия": [
                ["", "sudzhuk-s-manatarki-i-cheri-domati-250gr-sudzhuk-manatarki-cheri-domati-lyuta-chushka-chesn", "Суджук с манатарки и чери домати (250гр) суджук, манатарки, чери домати, люта чушка, чесън", "7,00", "", ""],
["", "strandzhanski-kebap-400gr-pileshko-file-krekhki-khapki-ot-svinsko-kontra-file-svinska-satlenka-manatarki-luk-magdanoz", "Странджански кебап (400гр) пилешко филе, крехки хапки от свинско контра филе, свинска сатленка, манатарки, лук, магданоз", "11,90", "", ""],
["", "svinski-dzholan-s-kartofki", "Свински джолан с картофки", "7,70", "700", ""],
["", "speczialitet-tropikana", "Специалитет Тропикана", "11,20", "400", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "7,70", "350", ""],
["", "svinsko-po-bolyarski", "Свинско по болярски", "9,10", "350", ""],
["", "svinski-stekcheta-po-burgundski", "Свински стекчета по бургундски", "9,10", "350", ""],
["", "svinsko-s-bilkovi-kartofki", "Свинско с билкови картофки", "9,80", "350", ""],
["", "svinski-rebrcza-po-khanski", "Свински ребърца по хански", "7,70", "350", ""],
["", "pile-blanko", "Пиле Бланко", "7,70", "350", ""],
["", "pile-po-italianski", "Пиле по италиански", "7,70", "300", ""],
["", "pile-zhulien", "Пиле Жулиен", "7,00", "300", ""],
["", "pile-ss-sos-sirena", "Пиле със сос сирена", "7,70", "350", ""]

            ],

            "BBQ": [
                ["", "svinsko-kyufte", "Свинско кюфте", "0,70", "80", ""],
["", "svinsko-kebapche", "Свинско кебапче", "0,70", "80", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "marinovani-svinski-vratni-kareta", "Мариновани свински вратни карета", "6,30", "200", ""],
["", "marinovani-svinski-rebra", "Мариновани свински ребра", "6,30", "200", ""],
["", "svinski-shashlik", "Свински шашлик", "9,80", "400", ""],
["", "svinska-veshalicza", "Свинска вешалица", "7,00", "200", ""],
["", "svinsko-bon-file", "Свинско бон филе", "7,00", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""],
["", "pileshko-file", "Пилешко филе", "5,60", "200", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "9,80", "400", ""],
["", "domashna-nadenicza", "Домашна наденица", "4,90", "250", ""],
["", "zelenchuczi-na-bbq", "Зеленчуци на BBQ", "4,20", "400", ""],
["", "mashana-skara", "Машана скара", "12,60", "460", ""]

            ],

            "sachs": [
                ["", "svinski-sach", "Свински сач", "12,60", "400", ""],
["", "pileshki-sach", "Пилешки сач", "12,60", "400", ""],
["", "khajdushki-sach", "Хайдушки сач", "12,60", "400", ""]

            ],

            "fish": [
                ["", "zargan", "Зарган", "7,70", "200", ""],
["", "przhen-skorpid", "Пържен скорпид", "5,60", "200", ""],
["", "chesnovi-tigrovi-skaridi", "Чеснови тигрови скариди", "11,20", "150", ""],
["", "przhena-czacza", "Пържена цаца", "2,80", "200", ""],
["", "przheni-popcheta", "Пържени попчета", "4,20", "200", ""],
["", "przhen-safrid", "Пържен сафрид", "4,90", "200", ""],
["", "przhen-barbun", "Пържен барбун", "4,90", "200", ""],
["", "chernokop-na-bbq", "Чернокоп на BBQ", "9,80", "200", ""],
["", "lavrak-na-bbq", "Лаврак на BBQ", "11,20", "250", ""],
["", "czipura-na-bbq", "Ципура на BBQ", "11,20", "250", ""],
["", "skumriya-na-bbq", "Скумрия на BBQ", "5,60", "250", ""],
["", "pstrva-na-bbq", "Пъстърва на BBQ", "7,70", "250", ""],
["", "kalmari-przheni-s-mlechen-sos", "Калмари пържени с млечен сос", "7,70", "150", ""],
["", "kalmari-s-maslo", "Калмари с масло", "7,70", "150", ""],
["", "kalmari-na-bbq", "Калмари на BBQ", "7,70", "150", ""],
["", "pikantni-pipala-ot-kalmari", "Пикантни пипала от калмари", "7,70", "150", ""],
["", "skaridi-przheni", "Скариди пържени", "5,60", "150", ""],
["", "midi-s-cherupka", "Миди с черупка", "5,60", "500", ""],
["", "chiroz", "Чирoз", "6,30", "100", ""]

            ],

            "Паста и ризото": [
                ["", "spageti-tropikana", "Спагети Тропикана", "4,90", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,20", "400", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "400", ""],
["", "rizoto-ss-zelenchuczi-300gr", "Ризото със зеленчуци 300гр", "3,50", "", ""],
["", "rizoto-s-pile-i-zelenchuczi-300gr", "Ризото с пиле и зеленчуци 300гр", "4,20", "", ""]

            ],

            "Пици на пещ": [
                ["", "picza-margarita", "Пица Маргарита", "4,90", "", ""],
["", "picza-vegetariana", "Пица Вегетариана", "5,60", "", ""],
["", "picza-proshuto", "Пица Прошуто", "6,30", "", ""],
["", "picza-khavaj", "Пица Хавай", "7,00", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "7,00", "", ""],
["", "picza-sirena", "Пица Сирена", "7,00", "", ""],
["", "picza-polo", "Пица Поло", "7,00", "", ""],
["", "picza-venecziya", "Пица Венеция", "7,00", "", ""],
["", "picza-mafiozo", "Пица Мафиозо", "7,00", "", ""],
["", "picza-roma", "Пица Рома", "7,70", "", ""],
["", "picza-tropikana", "Пица Тропикана", "7,70", "", ""]

            ],

            "Запеканки": [
                ["", "kartofi-s-bekon-na-peshh", "Картофи с бекон на пещ", "4,20", "400", ""],
["", "kartofi-s-shunka-i-smetana-na-peshh", "Картофи с шунка и сметана на пещ", "4,20", "400", ""],
["", "kartofi-s-brokoli-i-smetana-na-peshh", "Картофи с броколи и сметана на пещ", "4,20", "400", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,70", "100", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "studena-garnitura", "Студена гарнитура", "1,40", "150", ""],
["", "lyutenicza", "Лютеница", "0,70", "50", ""]

            ],

            "bread": [
                ["", "prlenka", "Пърленка", "2,80", "250", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "60", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "150", ""]

            ]
        }', 
        'slug' => 'bistro-tropikana',
        'business_name' => 'Бистро Тропикана',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kiten',
        'region' => 'Kiten',
        'postal_code' => '8183',
        'address' => 'ул. Крайбрежна',
        'address_additional' => '',
        'coords_x' => '42.2417044',
        'coords_y' => '27.773215',
        'phone' => '+359887782178',
        'email' => '',
        'website' => '',
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
["", "grczka-salata", "Гръцка салата", "2,80", "400", ""],
["", "salata-s-ajsberg-i-rukola", "Салата с айсберг и рукола", "3,50", "400", ""],
["", "kapreze-s-parmezan", "Капрезе с пармезан", "3,50", "400", ""],
["", "salata-zele-i-morkovi", "Салата зеле и моркови", "2,80", "400", ""],
["", "sirene", "Сирене", "2,10", "100", ""],
["", "kashkaval", "Кашкавал", "2,10", "100", ""]

            ],

            "Топла кухня": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "350", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "350", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "pileshka-przhola", "Пилешка пържола", "2,80", "250", ""],
["", "svinska-przhola", "Свинска пържола", "2,80", "250", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,90", "350", ""],
["", "svinski-shishcheta", "Свински шишчета", "2,10", "200", ""],
["", "czacza-400gr", "Цаца (400гр(", "2,80", "", ""]

            ],

            "burgers": [
                ["", "big-bugi", "Биг Буги", "4,90", "500", ""],
["", "italiya", "Италия", "3,50", "350", ""],
["", "grcziya", "Гърция", "3,50", "350", ""],
["", "aziya-chikn", "Азия чикън", "3,50", "350", ""]

            ],

            "Гарнитури и сосове": [
                ["", "topla-garnitura", "Топла гарнитура", "0,70", "150", ""],
["", "studena-garnitura", "Студена гарнитура", "0,70", "150", ""],
["", "mlechen-sos", "Млечен сос", "0,70", "", ""],
["", "sos-bbq", "Сос BBQ", "0,70", "", ""],
["", "pitka-1br0", "Питка (1бр0", "0,00", "", ""]

            ],

            "beer": [
                ["", "pirinsko", "Пиринско", "1,40", "500", ""],
["", "pirin-mlado", "Пирин младо", "1,40", "500", ""],
["", "pirinsko-ledeno", "Пиринско ледено", "1,40", "", ""],
["", "shumensko", "Шуменско", "1,40", "", ""],
["", "tuborg", "Туборг", "1,40", "500", ""],
["", "karlsberg", "Карлсберг", "2,10", "500", ""],
["", "budvajzer", "Будвайзер", "2,10", "500", ""],
["", "samrsbi", "Самърсби", "1,40", "330", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,70", "", ""]

            ]
        }', 
        'slug' => 'beer-park',
        'business_name' => 'Beer Park',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kyustendil',
        'region' => 'Kyustendil',
        'postal_code' => '2500',
        'address' => 'ул. Васил Левски 2',
        'address_additional' => '',
        'coords_x' => '42.2786524',
        'coords_y' => '22.6861545',
        'phone' => '+359988736395 0897540550',
        'email' => '',
        'website' => '',
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
                ["", "salata-czezar-s-pile", "Салата Цезар с пиле", "6,30", "300", ""],
["", "grczka-salata-ss-sirene-feta", "Гръцка салата със сирене фета", "4,90", "300", ""],
["", "salata-kapreze-s-presen-bosilek", "Салата Капрезе с пресен босилек", "5,60", "300", ""],
["", "salata-bejbi-spanak-s-kinoa-i-svezh-susamov-dresing", "Салата бейби спанак с киноа и свеж сусамов дресинг", "5,60", "350", ""],
["", "tradiczionna-shopska-salata", "Традиционна Шопска салата", "2,80", "300", ""],
["", "salata-tabule-s-presni-bilki", "Салата Табуле с пресни билки", "5,60", "300", ""],
["", "svezhi-zeleni-salatki-podneseni-ss-zapecheno-koze-sirene-i-karamelizirani-orekhi", "Свежи зелени салатки, поднесени със запечено козе сирене и карамелизирани орехи", "7,70", "400", ""]

            ],

            "Брускети": [
                ["", "s-krema-sirene-i-pushena-somga", "С крема сирене и пушена сьомга", "7,00", "200", ""],
["", "s-krema-sirene-i-domatki-konkase", "С крема сирене и доматки конкасе", "4,20", "200", ""],
["", "s-proshuto-krudo", "С прошуто крудо", "4,90", "200", ""],
["", "s-maslinova-pasta", "С маслинова паста", "4,20", "150", ""]

            ],

            "starters": [
                ["", "presni-przheni-kartofki-ss-sirene", "Пресни пържени картофки със сирене", "2,80", "250", ""],
["", "domashen-tarama-khajver-podnesen-s-prepecheno-khlebche-i-cherven-luk", "Домашен Тарама хайвер, поднесен с препечено хлебче и червен лук", "4,20", "200", ""],
["", "presni-przheni-kartofki", "Пресни пържени картофки", "2,10", "200", ""],
["", "khrupkavi-tikvichki-po-grczki-podneseni-ss-sos-ajoli", "Хрупкави тиквички по гръцки, поднесени със сос айоли", "4,90", "220", ""],
["", "khrupkava-moczarela-s-domashen-plodov-konfityur", "Хрупкава моцарела с домашен плодов конфитюр", "4,90", "240", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "3,50", "300", ""],
["", "presni-midi-na-para-ss-svezhi-bilki", "Пресни миди на пара със свежи билки", "5,60", "", ""],
["", "plato-sirena", "Плато сирена", "10,50", "200", ""],
["", "kalmari-po-grczki-ss-sladko-kisel-sos", "Калмари по гръцки със сладко-кисел сос", "9,10", "250", ""]

            ],

            "maindishes": [
                ["", "pileshki-ruladini-s-planinski-bilki", "Пилешки руладини с планински билки", "7,70", "400", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "8,40", "400", ""],
["", "pileshki-kscheta-v-smetanov-sos-i-manatarki", "Пилешки късчета в сметанов сос и манатарки", "7,70", "380", ""],
["", "marinovana-pileshka-przhola-s-rozmarin-i-mashherka", "Маринована пилешка пържола с розмарин и мащерка", "6,30", "400", ""],
["", "teleshki-kyufteta-s-garnitura-ot-presni-przheni-kartofi-i-sos-barbekyu", "Телешки кюфтета с гарнитура от пресни пържени картофи и сос барбекю", "7,00", "350", ""]

            ],

            "fish": [
                ["", "safrid", "Сафрид", "5,60", "200", ""],
["", "chernokop", "Чернокоп", "7,70", "200", ""],
["", "kalkan", "Калкан", "22,40", "200", ""],
["", "lavrak-na-skara", "Лаврак на скара", "12,60", "350", ""],
["", "somga-s-khrupkava-korichka", "Сьомга с хрупкава коричка", "13,30", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "12,60", "350", ""]

            ],

            "pasta": [
                ["", "linguini-s-pileshko-file-susheni-domati-spanak-presen-bosilek", "Лингуини с пилешко филе, сушени домати, спанак, пресен босилек", "5,60", "350", ""],
["", "linguini-karbonara", "Лингуини Карбонара", "4,90", "350", ""],
["", "pene-al-arabiata", "Пене ал’ Арабиата", "4,90", "300", ""]

            ],

            "pizza": [
                ["", "peperoni", "Пеперони", "6,30", "500", ""],
["", "margarita", "Маргарита", "4,20", "400", ""],
["", "proshuto-s-rukola", "Прошуто с рукола", "8,40", "500", ""]

            ],

            "Пърленки": [
                ["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "110", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "140", ""],
["", "prlenka", "Пърленка", "1,40", "110", ""]

            ],

            "desserts": [
                ["", "domashen-chijzkejk", "Домашен чийзкейк", "3,50", "150", ""]

            ]
        }', 
        'slug' => 'mena-north-dock',
        'business_name' => 'Mena North Dock',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Nessebar',
        'region' => 'Nessebar',
        'postal_code' => '8231',
        'address' => 'ул. Жана Чимбулева 6',
        'address_additional' => '',
        'coords_x' => '42.6594767',
        'coords_y' => '27.7329745',
        'phone' => '+359988771887',
        'email' => '',
        'website' => '',
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
                ["", "zelena-salata", "Зелена салата", "2,10", "350", ""],
["", "makedonska-skara", "Македонска скара", "2,80", "450", ""],
["", "kapreze", "Капрезе", "4,20", "400", ""],
["", "czezar", "Цезар", "3,50", "450", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "350", ""],
["", "selska-salata", "Селска салата", "2,10", "400", ""],
["", "redena-salata", "Редена салата", "2,10", "", ""],
["", "shopska-salata", "Шопска салата", "2,10", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "450", ""],
["", "snezhanka", "Снежанка", "2,10", "300", ""],
["", "pecheni-piperki-s-chesnov-sos", "Печени пиперки с чеснов сос", "2,10", "300", ""],
["", "salata-domati", "Салата домати", "2,10", "300", ""],
["", "meraklijska", "Мераклийска", "9,80", "", ""],
["", "maslini-s-luk", "Маслини с лук", "2,80", "250", ""],
["", "salata-krastaviczi", "Салата краставици", "2,10", "300", ""],
["", "salata-vitamina", "Салата Витамина", "2,10", "350", ""],
["", "zelena-salata-s-morski-darove", "Зелена салата с морски дарове", "4,20", "350", ""],
["", "zele-s-morkovi", "Зеле с моркови", "1,40", "300", ""]

            ],

            "appetizer": [
                ["", "miks-razyadki", "Микс разядки", "2,80", "300", ""],
["", "razyadkata-na-shefa", "Разядката на шефа", "2,80", "300", ""],
["", "ajvar", "Айвар", "2,10", "300", ""],
["", "katk", "Катък", "2,80", "300", ""]

            ],

            "starters": [
                ["", "topeni-sirencza-v-kornflejks-i-borovinkovo-sladko", "Топени сиренца в корнфлейкс и боровинково сладко", "2,80", "200", ""],
["", "sirene-na-plocha-pane", "Сирене на плоча пане", "2,80", "200", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "3,50", "200", ""],
["", "kashkaval-na-plocha-pane", "Кашкавал на плоча пане", "4,20", "200", ""],
["", "sirene-na-plocha", "Сирене на плоча", "2,10", "200", ""],
["", "pileshki-khapki-s-chesnov-sos", "Пилешки хапки с чеснов сос", "3,50", "250", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "2,10", "400", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "2,80", "400", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "2,10", "400", ""],
["", "pileshki-miks", "Пилешки микс", "2,80", "400", ""],
["", "agneshka-glavichka-obezkostena", "Агнешка главичка обезкостена", "2,80", "200", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,90", "250", ""],
["", "shkembe-s-kashkaval", "Шкембе с кашкавал", "5,60", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "przheni-kartofki-po-selski", "Пържени картофки по селски", "1,40", "300", ""],
["", "svinski-ezik", "Свински език", "4,90", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "300", ""],
["", "przheni-piperki", "Пържени пиперки", "2,10", "300", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "300", ""],
["", "svinski-drob-s-luk", "Свински дроб с лук", "2,10", "400", ""],
["", "kasapsko-meze", "Касапско мезе", "2,10", "400", ""],
["", "apetitni-kartofi", "Апетитни картофи", "2,80", "350", ""],
["", "przheni-pileshki-rebra-ss-sos", "Пържени пилешки ребра със сос", "2,80", "250", ""]

            ],

            "grill": [
                ["", "svinsko-kebapche", "Свинско кебапче", "0,70", "90", ""],
["", "kyufte-pileshko", "Кюфте пилешко", "0,70", "100", ""],
["", "svinsko-kyufte", "Свинско кюфте", "0,70", "90", ""],
["", "kyufte-teleshko", "Кюфте телешко", "0,70", "100", ""],
["", "kyufte-agneshko", "Кюфте агнешко", "0,70", "100", ""],
["", "sudzhuk-klczan", "Суджук кълцан", "2,80", "250", ""],
["", "nadenicza-klczana", "Наденица кълцана", "3,50", "150", ""],
["", "pleskavicza-kapriz", "Плескавица Каприз", "2,10", "250", ""],
["", "gril-nadenichki", "Грил наденички", "1,40", "100", ""],
["", "adana-kebap", "Адана кебап", "2,10", "100", ""],
["", "svinski-rebra", "Свински ребра", "0,70", "500", ""],
["", "pileshki-krilcza", "Пилешки крилца", "6,30", "500", ""],
["", "petlovi-meraczi", "Петльови мераци", "3,50", "300", ""],
["", "svinski-ushi-s-chesn", "Свински уши с чесън", "1,40", "300", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "2,80", "200", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "2,80", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "200", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "zelenchuczi---grilovani", "Зеленчуци - гриловани", "2,80", "300", ""],
["", "svinski-shashlik", "Свински шашлик", "3,50", "200", ""],
["", "svinski-drob", "Свински дроб", "2,10", "300", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "2,10", "200", ""],
["", "teleshki-drob", "Телешки дроб", "2,10", "300", ""],
["", "pileshki-rebra", "Пилешки ребра", "4,90", "500", ""]

            ],

            "От Мастър Шеф": [
                ["", "shniczel-naturlen", "Шницел натурлен", "3,50", "250", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,20", "350", ""],
["", "pileshko-drusano", "Пилешко друсано", "2,80", "300", ""],
["", "svinsko-drusano", "Свинско друсано", "4,90", "300", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "3,50", "350", ""],
["", "pileshko-bon-file-pane", "Пилешко бон филе пане", "2,10", "400", ""],
["", "svinski-kareta-na-tigan", "Свински карета на тиган", "3,50", "300", ""],
["", "agneshko-pecheno", "Агнешко печено", "7,70", "300", ""],
["", "svinski-dzholan", "Свински джолан", "5,60", "300", ""]

            ],

            "sachs": [
                ["", "kombiniran-sach-za-dvama", "Комбиниран сач за двама", "9,10", "750", ""],
["", "pileshki", "Пилешки", "4,90", "550", ""],
["", "svinski", "Свински", "6,30", "550", ""]

            ],

            "pasta": [
                ["", "boloneze", "Болонезе", "2,80", "500", ""],
["", "karbonara", "Карбонара", "2,80", "500", ""]

            ],

            "fish": [
                ["", "skumriya", "Скумрия", "3,50", "", ""],
["", "som", "Сом", "7,00", "250", ""],
["", "lavrak", "Лаврак", "10,50", "", ""],
["", "pstrva", "Пъстърва", "4,90", "300", ""],
["", "smadok", "Смадок", "7,00", "250", ""],
["", "polovin-skumriya", "Половин скумрия", "2,10", "", ""],
["", "uklej", "Уклей", "2,10", "250", ""],
["", "sharan", "Шаран", "5,60", "250", ""],
["", "czacza", "Цаца", "1,40", "250", ""],
["", "skaridi-s-kopr-i-chesn", "Скариди с копър и чесън", "9,10", "250", ""],
["", "kalmari", "Калмари", "7,70", "200", ""],
["", "amur", "Амур", "5,60", "250", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,10", "400", ""],
["", "amerikana", "Американа", "2,80", "500", ""],
["", "kalczone", "Калцоне", "3,50", "500", ""],
["", "diablo", "Диабло", "3,50", "500", ""],
["", "bella", "Белла", "4,20", "600", ""],
["", "kaprichoza", "Капричоза", "5,60", "550", ""],
["", "piczata-na-shefkata", "Пицата на шефката", "4,90", "550", ""],
["", "piczata-na-shefa", "Пицата на шефа", "4,90", "500", ""],
["", "makedonska-skara", "Македонска скара", "4,90", "550", ""],
["", "vegetariana", "Вегетариана", "4,20", "500", ""],
["", "morski-dar", "Морски дар", "4,90", "600", ""],
["", "detska-picza-kloun", "Детска пица клоун", "2,80", "400", ""]

            ],

            "garnish": [
                ["", "krastaviczi", "Краставици", "0,00", "100", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,00", "100", ""],
["", "zele", "Зеле", "0,00", "100", ""],
["", "domati", "Домати", "0,00", "100", ""],
["", "zelena-salata", "Зелена салата", "0,70", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "kartofi-po-selski", "Картофи по селски", "0,70", "150", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "bob-s-lyutenicza", "Боб с лютеница", "0,70", "100", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "0,70", "150", ""]

            ],

            "Пърленки": [
                ["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "200", ""],
["", "prlenka", "Пърленка", "0,00", "150", ""]

            ],

            "others": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "40", ""],
["", "pitka", "Питка", "0,00", "", ""],
["", "prepechena-filiya", "Препечена филия", "0,00", "", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "40", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta", "Бисквитена торта", "1,40", "350", ""],
["", "tiramisu", "Тирамису", "2,10", "200", ""],
["", "desert-zdrave", "Десерт Здраве", "1,40", "350", ""],
["", "bishkotena-torta", "Бишкотена торта", "1,40", "350", ""],
["", "chijzkejk", "Чийзкейк", "2,80", "300", ""],
["", "shokoladova-torta", "Шоколадова торта", "2,10", "200", ""],
["", "palachinka", "Палачинка", "0,70", "200", ""]

            ],

            "Coca-Cola напитки": [
                ["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""]

            ],

            "drinks": [
                ["", "sajkl-sovinon-blan", "Сайкъл Совиньон блан", "11,20", "750", ""],
["", "sajkl-sovinon-blan", "Сайкъл Совиньон блан", "6,30", "375", ""],
["", "vila-mariya", "Вила Мария", "19,60", "375", ""],
["", "vila-mariya", "Вила Мария", "34,30", "750", ""],
["", "malboro-babich", "Малборо Бабич", "15,40", "375", ""],
["", "malboro-babich", "Малборо Бабич", "27,30", "750", ""],
["", "pirinsko-ken", "Пиринско кен", "0,70", "500", ""],
["", "shumensko-ken", "Шуменско кен", "0,70", "500", ""],
["", "ajryan-balkan", "Айрян Балкан", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'makedonska-skara',
        'business_name' => 'Македонска скара',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Svishtov',
        'region' => 'Svishtov',
        'postal_code' => '5250',
        'address' => 'Ул. Димитър Анев 20',
        'address_additional' => '',
        'coords_x' => '43.61977302',
        'coords_y' => '25.34521874',
        'phone' => '+359885282128',
        'email' => '',
        'website' => '',
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
            
            "sushi": [
                ["", "khosomaki-krastavicza-i-susam", "Хосомаки краставица и сусам", "2,10", "", ""],
["", "khosomaki-avokado", "Хосомаки авокадо", "2,80", "", ""],
["", "khosomaki-somga", "Хосомаки сьомга", "2,80", "", ""],
["", "khosomaki-somga-i-avokado", "Хосомаки сьомга и авокадо", "2,80", "", ""],
["", "khosomaki-pushena-somga", "Хосомаки пушена сьомга", "3,50", "", ""],
["", "khosomaki-ton", "Хосомаки тон", "3,50", "", ""],
["", "khosomaki-pikanten-ton", "Хосомаки пикантен тон", "3,50", "", ""],
["", "uramaki-somga", "Урамаки сьомга", "2,10", "", ""],
["", "uramaki-somga-i-avokado", "Урамаки сьомга и авокадо", "2,80", "", ""],
["", "uramaki-pushena-somga", "Урамаки пушена сьомга", "2,80", "", ""],
["", "uramaki-pushena-somga-i-avokado", "Урамаки пушена сьомга и авокадо", "2,80", "", ""],
["", "uramaki-ton", "Урамаки тон", "3,50", "", ""],
["", "uramaki-khrupkavo-pile", "Урамаки хрупкаво пиле", "2,10", "", ""],
["", "uramaki-meso-ot-raczi", "Урамаки месо от раци", "2,10", "", ""],
["", "uramaki-vege", "Урамаки веге", "2,80", "", ""],
["", "futomaki-somga", "Футомаки сьомга", "4,20", "", ""],
["", "futomaki-ton-i-mango", "Футомаки тон и манго", "5,60", "", ""],
["", "futomaki-pikanten-ton", "Футомаки пикантен тон", "4,90", "", ""],
["", "futomaki-skarida-tempura", "Футомаки скарида темпура", "4,90", "", ""],
["", "futomaki-surimi", "Футомаки сурими", "3,50", "", ""],
["", "nigiri-somga", "Нигири сьомга", "1,40", "", ""],
["", "nigiri-pushena-somga-i-filadelfiya", "Нигири пушена сьомга и филаделфия", "1,40", "", ""],
["", "nigiri-ton", "Нигири тон", "2,10", "", ""],
["", "nigiri-skaridi", "Нигири скариди", "0,70", "", ""]

            ],

            "salads": [
                ["", "shopska-salata-flora", "Шопска салата Flora", "3,50", "400", ""],
["", "salata-s-midi", "Салата с миди", "4,90", "400", ""],
["", "pryasno-koze-sirene", "Прясно козе сирене", "5,60", "400", ""],
["", "salata-czezar", "Салата Цезар", "6,30", "450", ""],
["", "paniran-kamember", "Паниран Камембер", "7,70", "390", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "300", ""],
["", "bogata-selska-ribena-chorba", "Богата селска рибена чорба", "2,80", "300", ""]

            ],

            "Домашни разядки и мезета": [
                ["", "panirani-sirencza-s-domashno-sladko", "Панирани сиренца с домашно сладко", "3,50", "200", ""],
["", "panirani-kashkavalcheta-s-domashno-sladko", "Панирани кашкавалчета с домашно сладко", "3,50", "200", ""],
["", "khrupkavi-pileshki-prchiczi-s-domashna-majoneza", "Хрупкави пилешки пръчици с домашна майонеза", "3,50", "200", ""],
["", "tarama-khajver-s-limon-i-kopr", "Тарама хайвер с лимон и копър", "3,50", "200", ""],
["", "domashen-khumus", "Домашен хумус", "3,50", "200", ""],
["", "domashno-kopoolu", "Домашно кьопоолу", "3,50", "200", ""],
["", "domashna-edrosmlyana-lyutenicza", "Домашна едросмляна лютеница", "3,50", "200", ""],
["", "plato-razyadki", "Плато разядки", "13,30", "500", ""]

            ],

            "Суши специални": [
                ["", "byal-drakon", "Бял дракон", "8,40", "", ""],
["", "cheren-drakon", "Черен дракон", "7,00", "", ""],
["", "lyatna-fiesta", "Лятна фиеста", "8,40", "", ""]

            ],

            "Месни предложения": [
                ["", "pikantni-svinski-kyuftencza", "Пикантни свински кюфтенца", "4,90", "300", ""],
["", "domashen-sudzhuk-na-tigan", "Домашен суджук на тиган", "6,30", "300", ""],
["", "krekhka-pileshka-przhola", "Крехка пилешка пържола", "5,60", "300", ""],
["", "karamelizirani-svinski-rebrcza", "Карамелизирани свински ребърца", "13,30", "600", ""],
["", "stek-ot-svinski-vrat", "Стек от свински врат", "7,00", "300", ""]

            ],

            "От морето и океана": [
                ["", "midi-natyur", "Миди Натюр", "5,60", "600", ""],
["", "midi-v-byal-vinen-sos-chesn-i-bilki", "Миди в бял винен сос, чесън и билки", "6,30", "600", ""],
["", "marinovana-khamsiya", "Маринована хамсия", "4,90", "220", ""],
["", "safrid-na-plocha", "Сафрид на плоча", "6,30", "220", ""],
["", "kalmari-na-plocha", "Калмари на плоча", "9,80", "250", ""],
["", "tigrovi-skaridi-na-plocha", "Тигрови скариди на плоча", "11,20", "200", ""],
["", "stek-ot-somga", "Стек от сьомга", "11,20", "180", ""],
["", "czipura-na-plocha-czyala", "Ципура на плоча цяла", "11,20", "350", ""],
["", "oktopod-na-plocha", "Октопод на плоча", "15,40", "150", ""]

            ],

            "burgers": [
                ["", "flora-burger", "Flora бургер", "13,30", "600", ""],
["", "sochno-pileshko-burger", "Сочно пилешко бургер", "6,30", "600", ""],
["", "drpano-svinsko-burger", "Дърпано свинско бургер", "7,00", "600", ""],
["", "teleshki-burger", "Телешки бургер", "7,70", "600", ""],
["", "paniran-kamember-burger", "Паниран Камембер бургер", "8,40", "600", ""],
["", "somga-burger", "Сьомга бургер", "8,40", "600", ""],
["", "kalmari-burger", "Калмари бургер", "8,40", "600", ""],
["", "tigrovi-skaridi-burger", "Тигрови скариди бургер", "13,30", "600", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "220", ""],
["", "przheni-kartofi-s-kopr-i-chesn", "Пържени картофи с копър и чесън", "2,10", "220", ""],
["", "pikantni-sotirani-kartofki", "Пикантни сотирани картофки", "2,10", "220", ""],
["", "sotirani-zelenchuczi-v-limonov-zekhtin", "Сотирани зеленчуци в лимонов зехтин", "2,10", "220", ""],
["", "kremoobrazen-domashen-kachamak", "Кремообразен домашен качамак", "2,10", "220", ""],
["", "sotirani-gbki-s-luk-i-tryufel-olio", "Сотирани гъбки с лук и трюфел олио", "2,10", "220", ""]

            ],

            "sauces": [
                ["", "domashna-majoneza", "Домашна майонеза", "0,70", "70", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "70", ""],
["", "limonov-zekhtin", "Лимонов зехтин", "0,70", "70", ""],
["", "czezar-dresing", "Цезар дресинг", "0,70", "70", ""]

            ],

            "bread": [
                ["", "polovin-chabata", "Половин чабата", "1,40", "", ""],
["", "czyala-chabata", "Цяла чабата", "2,10", "", ""]

            ],

            "desserts": [
                ["", "krem-bryule", "Крем Брюле", "2,80", "250", ""],
["", "shokoladov-kejk", "Шоколадов кейк", "4,20", "", ""]

            ]
        }', 
        'slug' => 'restaurant-flora-garden',
        'business_name' => 'Restaurant Flora garden',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Balchik',
        'region' => 'Balchik',
        'postal_code' => '9600',
        'address' => 'ул. Акад. Даки Йорданов 5',
        'address_additional' => '',
        'coords_x' => '43.407013',
        'coords_y' => '28.1492505',
        'phone' => '+359879034848',
        'email' => '',
        'website' => '',
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
            
            "Сезонно меню": [
                ["", "salata-s-avokado", "Салата с авокадо", "3,50", "350", ""],
["", "miks-zeleni-salati-350gr", "Микс зелени салати (350гр)", "3,50", "", ""],
["", "selska-domatena-salata", "Селска доматена салата", "3,50", "350", ""],
["", "ppesh-s-proshuto-parmezan-i-rukola", "Пъпеш с прошуто, пармезан и рукола", "5,60", "250", ""],
["", "bademovo-pileshko-file-s-rizoto", "Бадемово пилешко филе с ризото", "9,10", "350", ""],
["", "svinsko-role-s-proshuto-i-parmezan", "Свинско роле с прошуто и пармезан", "9,80", "350", ""],
["", "svinski-stek-s-bilkova-korichka", "Свински стек с билкова коричка", "9,10", "350", ""],
["", "filetiran-lavrak-s-ravioli", "Филетиран лаврак с равиоли", "14,70", "350", ""],
["", "filetirana-czipura-s-kartofeni-kyuftencza", "Филетирана ципура с картофени кюфтенца", "14,70", "350", ""],
["", "somga-s-taliateli-pesto", "Сьомга с талиатели песто", "16,10", "350", ""],
["", "agneshki-kotleti-s-bilkova-khrupkava-korichka", "Агнешки котлети с билкова хрупкава коричка", "23,10", "350", ""],
["", "brza-picza-proshuto", "Бърза пица Прошуто", "3,50", "250", ""],
["", "panakota-s-malinovo-kuli", "Панакота с малиново кули", "2,10", "150", ""],
["", "torta-leva", "Торта Лева", "2,80", "150", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "3,50", "380", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "350", ""],
["", "balkanska-salata", "Балканска салата", "4,20", "380", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "300", ""],
["", "czezar-s-pile", "Цезар с пиле", "4,90", "350", ""],
["", "czezar-ss-skaridi", "Цезар със скариди", "7,00", "350", ""],
["", "kapreze-s-moczarela", "Капрезе с моцарела", "4,90", "380", ""],
["", "kapreze-s-burata", "Капрезе с бурата", "7,00", "380", ""],
["", "vitaminozna", "Витаминозна", "3,50", "350", ""],
["", "miks-zeleni-salati-s-pdpdchi-yajcza-300gr", "Микс зелени салати с пъдпъдъчи яйца (300гр)", "4,20", "", ""],
["", "plnen-domat", "Пълнен домат", "5,60", "380", ""]

            ],

            "Студени предястия": [
                ["", "tapenada-ot-maslini-kalamata", "Тапенада от маслини Каламата", "4,90", "200", ""],
["", "khumus-serviran-s-prepechen-byal-i-cheren-khlyab", "Хумус, сервиран с препечен бял и черен хляб", "4,20", "200", ""],
["", "brusketi-s-domat-i-pesto", "Брускети с домат и песто", "4,20", "250", ""],
["", "asortiment-evropejski-kolbasi", "Асортимент европейски колбаси", "13,30", "200", ""],
["", "asortiment-evropejski-sirena", "Асортимент европейски сирена", "11,90", "200", ""],
["", "lukanka", "Луканка", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "3,50", "50", ""],
["", "pastrma", "Пастърма", "3,50", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "blgarsko-sirene", "Българско сирене", "0,70", "50", ""]

            ],

            "Топли предястия": [
                ["", "panirani-kashkavaleni-khapki", "Панирани кашкавалени хапки", "4,20", "200", ""],
["", "panirani-sirencza", "Панирани сиренца", "3,50", "200", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "250", ""],
["", "panirani-topeni-sirencza-prezident", "Панирани топени сиренца Президент", "6,30", "300", ""],
["", "frensko-koze-sirene-na-plocha", "Френско козе сирене на плоча", "9,10", "250", ""],
["", "brokoli-kuatro-formadzhi", "Броколи куатро формаджи", "7,00", "250", ""],
["", "przheni-kalmari", "Пържени калмари", "12,60", "200", ""],
["", "sotirani-kalmari", "Сотирани калмари", "11,20", "200", ""],
["", "pateshki-drob-s-karamelizirana-yablka-i-mashherka", "Патешки дроб с карамелизирана ябълка и мащерка", "25,90", "250", ""]

            ],

            "pasta": [
                ["", "spageti-boloneze", "Спагети Болонезе", "5,60", "350", ""],
["", "spageti-aliolio-e-peperonchino", "Спагети Алиолио е пеперончино", "4,90", "350", ""],
["", "taliateli-boskajola", "Талиатели Боскайола", "6,30", "350", ""],
["", "ravioli-buro-e-salviya", "Равиоли буро е салвия", "5,60", "350", ""]

            ],

            "risotto": [
                ["", "rizoto-pomodoro", "Ризото Помодоро", "4,20", "350", ""],
["", "rizoto-s-manatarki", "Ризото с манатарки", "7,00", "350", ""],
["", "rizoto-pile-i-brokoli", "Ризото пиле и броколи", "6,30", "350", ""],
["", "rizoto-milaneze", "Ризото Миланезе", "7,00", "350", ""]

            ],

            "Роял грил на вулканични камъни": [
                ["", "pileshko-file", "Пилешко филе", "5,60", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "5,60", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "250", ""],
["", "svinski-rebra", "Свински ребра", "8,40", "350", ""],
["", "marinovani-svinski-grdi", "Мариновани свински гърди", "9,80", "350", ""],
["", "krekhki-agneshki-kotletcheta", "Крехки агнешки котлетчета", "22,40", "300", ""]

            ],

            "Основни ястия": [
                ["", "pile-saltimboka", "Пиле Салтимбока", "9,80", "350", ""],
["", "plneno-pileshko-file-s-rikota-i-spanak", "Пълнено пилешко филе с рикота и спанак", "9,10", "350", ""],
["", "pile-gorgonzola", "Пиле горгонзола", "10,50", "350", ""],
["", "skalopini-ot-svinsko-bonfile", "Скалопини от свинско бонфиле", "11,20", "350", ""],
["", "rulovano-svinsko-bonfile-s-pancheta", "Руловано свинско бонфиле с панчета", "13,30", "350", ""],
["", "svinski-kareta-s-gorchichen-sos-i-grilovani-zelenchuczi", "Свински карета с горчичен сос и гриловани зеленчуци", "9,80", "350", ""],
["", "teleshki-kareta-s-mantarki", "Телешки карета с мантарки", "22,40", "350", ""],
["", "pepr-stek", "Пепър стек", "19,60", "350", ""],
["", "teleshki-stek-ss-sos-ot-tryufel-i-cherveno-porto", "Телешки стек със сос от трюфел и червено порто", "22,40", "350", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "7,70", "350", ""],
["", "file-ot-somga-zapecheno-s-tapenada-ot-maslini", "Филе от сьомга, запечено с тапенада от маслини", "12,60", "300", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,90", "350", ""],
["", "kapreze", "Капрезе", "5,60", "350", ""],
["", "vegetariana", "Вегетариана", "4,90", "350", ""],
["", "peperoni", "Пеперони", "7,70", "400", ""],
["", "kaprichoza", "Капричоза", "8,40", "400", ""],
["", "proshuto-krudo", "Прошуто крудо", "8,40", "400", ""],
["", "kuatro-di-karne", "Куатро ди карне", "8,40", "400", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "9,10", "400", ""],
["", "polo", "Поло", "7,70", "400", ""],
["", "kalczone", "Калцоне", "7,70", "400", ""]

            ],

            "Ястия от шаран": [
                ["", "przhen-borovanski-sharan", "Пържен боровански шаран", "6,30", "350", ""],
["", "pechen-borovanski-sharan-na-vulkanichni-vglishha", "Печен боровански шаран на вулканични въглища", "6,30", "350", ""]

            ],

            "garnish": [
                ["", "zelenchuczi-na-barbekyu", "Зеленчуци на барбекю", "2,80", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "200", ""],
["", "sotirani-presni-zelenchuczi", "Сотирани пресни зеленчуци", "2,80", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "200", ""]

            ],

            "bread": [
                ["", "fokacha-s-maslini-i-susheni-domati", "Фокача с маслини и сушени домати", "2,10", "200", ""],
["", "grizini", "Гризини", "2,10", "150", ""],
["", "prlenka", "Пърленка", "1,40", "150", ""],
["", "filiya-byal-khlyab", "Филия бял хляб", "0,00", "", ""],
["", "filiya-dietichen-khlyab", "Филия диетичен хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "variacziya-na-biskvitena-torta", "Вариация на бисквитена торта", "2,80", "150", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "150", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "250", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "250", ""]

            ],

            "Безалкохолни напитки": [
                ["", "mineralna-voda-san-benedeto", "Минерална вода Сан Бенедето", "0,70", "500", ""],
["", "mineralna-voda-borzhomi", "Минерална вода Боржоми", "2,80", "500", ""],
["", "mineralna-voda-san-pelegrino", "Минерална вода Сан Пелегрино", "3,50", "750", ""],
["", "naturalna-voda-san-benedeto", "Натурална вода Сан Бенедето", "2,10", "", ""],
["", "fresh", "Фреш", "2,10", "200", ""],
["", "ajryan", "Айрян", "0,70", "200", ""],
["", "energijna-napitka-red-bull", "Енергийна напитка Red Bull", "4,20", "250", ""]

            ],

            "beer": [
                ["", "zagorka-speczialno", "Загорка Специално", "1,40", "500", ""],
["", "khajneken-0-alkokhol", "Хайнекен 0% алкохол", "2,10", "330", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "korona-ekstra", "Корона Екстра", "2,80", "355", ""]

            ]
        }', 
        'slug' => 'restorant-leva',
        'business_name' => 'Ресторант Лева',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vratsa',
        'region' => 'Vratsa',
        'postal_code' => '3000',
        'address' => 'ул. Георги Бенковски 33',
        'address_additional' => '',
        'coords_x' => '43.2041777',
        'coords_y' => '23.54569',
        'phone' => '+359888498707',
        'email' => '',
        'website' => '',
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
                ["", "salata-blgariya", "Салата България", "4,20", "400", ""],
["", "salata-razkosh", "Салата Разкош", "4,20", "400", ""],
["", "salata-fatush", "Салата Фатуш", "3,50", "450", ""],
["", "miks-salati-s-medeno-limonov-dresing", "Микс салати с медено-лимонов дресинг", "2,80", "350", ""],
["", "salata-ot-kinoa", "Салата от киноа", "4,20", "350", ""],
["", "lyutika-po-selski-s-pechen-luk", "Лютика по селски с печен лук", "2,80", "350", ""],
["", "selska-salata", "Селска салата", "2,80", "400", ""],
["", "salata-ot-nakhut", "Салата от нахут", "3,50", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "300", ""],
["", "salata-pecheni-chushki-s-nastrgano-sirene", "Салата печени чушки с настъргано сирене", "2,80", "300", ""],
["", "salata-vitamina", "Салата Витамина", "2,80", "300", ""]

            ],

            "Традиционни салати": [
                ["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "klasicheska-zelena-salata", "Класическа зелена салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,10", "200", ""],
["", "katk-s-pecheni-chushki", "Катък с печени чушки", "2,10", "200", ""]

            ],

            "Студени предястия": [
                ["", "khrupkavi-biskviti-s-krema-sirene-i-pushena-somga", "Хрупкави бисквити с крема сирене и пушена сьомга", "4,20", "150", ""],
["", "tarama-khajver", "Тарама хайвер", "2,80", "200", ""],
["", "plato-delikatesni-sirena", "Плато деликатесни сирена", "7,70", "200", ""],
["", "sudzhuk", "Суджук", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "krave-sirene-natyur", "Краве сирене натюр", "0,70", "50", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "0,70", "50", ""]

            ],

            "Топли предястия": [
                ["", "gbi-pechurki-v-maslo", "Гъби печурки в масло", "2,80", "250", ""],
["", "manatarki-v-maslo", "Манатарки в масло", "6,30", "150", ""],
["", "plneni-gbi-s-delikatesni-sirena", "Пълнени гъби с деликатесни сирена", "3,50", "200", ""],
["", "pileshko-izkushenie-za-dvama", "Пилешко изкушение за двама", "3,50", "400", ""],
["", "shishcheta-susheni-slivi-v-bekon-na-skara", "Шишчета сушени сливи в бекон на скара", "3,50", "230", ""],
["", "shishcheta-susheni-kajsii-v-bekon-na-skara", "Шишчета сушени кайсии в бекон на скара", "3,50", "230", ""],
["", "panirani-v-kornflejks-topeni-sirencza-s-borovinki", "Панирани в корнфлейкс топени сиренца с боровинки", "4,20", "230", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "3,50", "200", ""],
["", "panirani-sirencza", "Панирани сиренца", "3,50", "200", ""],
["", "marinovani-przheni-krilcza-s-miks-salatki", "Мариновани пържени крилца с микс салатки", "4,20", "400", ""],
["", "panirani-pileshki-khapki", "Панирани пилешки хапки", "3,50", "200", ""],
["", "pileshki-drobcheta-v-maslo", "Пилешки дробчета в масло", "2,80", "200", ""],
["", "drusani-pileshki-drobcheta", "Друсани пилешки дробчета", "3,50", "350", ""],
["", "vodenichki-v-maslo", "Воденички в масло", "2,80", "300", ""],
["", "drusana-pileshka-przhola-s-luk-i-gbi", "Друсана пилешка пържола с лук и гъби", "4,20", "200", ""],
["", "drusana-svinska-przhola-s-luk-i-gbi", "Друсана свинска пържола с лук и гъби", "4,90", "200", ""],
["", "svinski-ezik-v-maslo", "Свински език в масло", "3,50", "250", ""],
["", "przheni-presni-kartofi", "Пържени пресни картофи", "2,80", "300", ""],
["", "przheni-presni-kartofi-ss-sirene", "Пържени пресни картофи със сирене", "2,80", "330", ""],
["", "kartofki-po-selski", "Картофки по селски", "2,10", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "230", ""]

            ],

            "burgers": [
                ["", "pileshki-burger", "Пилешки бургер", "4,20", "450", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "3,50", "450", ""],
["", "teleshki-burger", "Телешки бургер", "4,90", "450", ""],
["", "burger-s-pushena-somga", "Бургер с пушена сьомга", "4,90", "430", ""]

            ],

            "Безмесни ястия": [
                ["", "przheni-tikvichki-s-mlechen-sos", "Пържени тиквички с млечен сос", "3,50", "300", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "3,50", "400", ""],
["", "toplo-tabule", "Топло табуле", "2,80", "250", ""],
["", "sotirani-brokoli-ss-smetana-i-topeno-sirene", "Сотирани броколи със сметана и топено сирене", "3,50", "350", ""],
["", "kachamak-ss-sirene", "Качамак със сирене", "2,80", "350", ""],
["", "kashkaval-pane-ili-na-plocha", "Кашкавал пане или на плоча", "2,80", "180", ""],
["", "kartofeni-kyufteta", "Картофени кюфтета", "3,50", "300", ""]

            ],

            "Месни ястия": [
                ["", "pileshka-ruladina-v-bekon", "Пилешка руладина в бекон", "5,60", "200", ""],
["", "limonovo-pile-s-khrupkava-parmezanova-korichka", "Лимоново пиле с хрупкава пармезанова коричка", "4,90", "200", ""],
["", "pileshko-fyuzhn-file-ss-sotirani-zelenchuczi", "Пилешко фюжън филе със сотирани зеленчуци", "4,90", "300", ""],
["", "pileshki-zhulieni-s-brokoli-topeno-sirene-i-smetana", "Пилешки жулиени с броколи, топено сирене и сметана", "4,90", "300", ""],
["", "svinsko-bon-file-s-manatark-i-i-sos-grejvi", "Свинско бон филе с манатарк и и сос грейви", "6,30", "250", ""],
["", "pecheni-medeni-rebrcza-s-barbekyu-sos", "Печени медени ребърца с барбекю сос", "6,30", "350", ""],
["", "zadushen-svinski-dzholan-s-aromatni-koreni-i-sini-slivi", "Задушен свински джолан с ароматни корени и сини сливи", "7,70", "350", ""],
["", "teleshki-stek-natyur-ss-sos-grejvi", "Телешки стек натюр със сос грейви", "12,60", "300", ""],
["", "vienski-shniczel-ot-teleshka-kajma", "Виенски шницел от телешка кайма", "5,60", "220", ""]

            ],

            "grill": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "200", ""],
["", "pikantno-shareno-svinsko-mescze-na-skara-s-chili-sos", "Пикантно шарено свинско месце на скара с чили сос", "6,30", "300", ""],
["", "svinsko-kebapche", "Свинско кебапче", "0,70", "60", ""],
["", "svinsko-kyufte", "Свинско кюфте", "0,70", "60", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "200", ""],
["", "teleshki-surov-sudzhuk-na-skara", "Телешки суров суджук на скара", "6,30", "300", ""]

            ],

            "fish": [
                ["", "pstrva-na-skara-ili-na-tigan", "Пъстърва на скара или на тиган", "6,30", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "2,80", "100", ""],
["", "somga-na-plocha-s-aromatni-bilki-i-sos-kholandez", "Сьомга на плоча с ароматни билки и сос Холандез", "8,40", "250", ""],
["", "sotirani-skaridi", "Сотирани скариди", "7,70", "200", ""],
["", "kalmari-po-grczki-ss-zekhtinov-sos", "Калмари по гръцки със зехтинов сос", "5,60", "200", ""]

            ],

            "garnish": [
                ["", "kartofena-salata", "Картофена салата", "1,40", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "kartofi-sote-s-kopr-i-chesn", "Картофи соте с копър и чесън", "1,40", "180", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "150", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "0,70", "150", ""],
["", "miks-brokoli-i-bejbi-morkovi", "Микс броколи и бейби моркови", "1,40", "150", ""],
["", "lyutenicza-po-selski", "Лютеница по селски", "0,70", "100", ""]

            ],

            "bread": [
                ["", "khlyab---filijka", "Хляб - филийка", "0,00", "15", ""],
["", "prlenka", "Пърленка", "0,70", "150", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "180", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "180", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "0,70", "200", ""]

            ],

            "additives": [
                ["", "pukani-marinovani-lyuti-chushleta", "Пукани мариновани люти чушлета", "0,00", "", ""],
["", "pikanten-barbekyu-sos-blgariya", "Пикантен барбекю сос България", "0,00", "30", ""],
["", "chili-sos", "Чили сос", "0,00", "30", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "30", ""],
["", "soev-sos", "Соев сос", "0,00", "30", ""],
["", "majoneza", "Майонеза", "0,00", "30", ""],
["", "ketchup", "Кетчуп", "0,00", "30", ""],
["", "sladko-kisel-sos", "Сладко-кисел сос", "0,00", "30", ""],
["", "med", "Мед", "0,00", "30", ""],
["", "sladko-ot-borovinki", "Сладко от боровинки", "0,00", "30", ""]

            ],

            "desserts": [
                ["", "portokalovo-sufle", "Портокалово суфле", "2,80", "150", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "150", ""],
["", "palachinka-po-izbor", "Палачинка по избор", "1,40", "150", ""],
["", "czedeno-mlyako-ss-ot-borovinki", "Цедено мляко със от боровинки", "1,40", "150", ""],
["", "frenska-nuga", "Френска Нуга", "2,10", "150", ""],
["", "chijzkejk-ss-sladko-po-izbor", "Чийзкейк със сладко по избор", "2,10", "150", ""]

            ]
        }', 
        'slug' => 'restorant-blgariya',
        'business_name' => 'Ресторант България',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Troyan',
        'region' => 'Troyan',
        'postal_code' => '5600',
        'address' => 'площад Възраждане 1',
        'address_additional' => '',
        'coords_x' => '42.8848532',
        'coords_y' => '24.7098694',
        'phone' => '+359879433743 ; +359879433743',
        'email' => '',
        'website' => '',
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
                ["", "redena-salata", "Редена салата", "2,10", "400", ""],
["", "shopska-salata", "Шопска салата", "2,10", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "350", ""],
["", "zelena-salata", "Зелена салата", "2,80", "250", ""],
["", "moryashka-salata", "Моряшка салата", "3,50", "300", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "400", ""],
["", "czezar-salata", "Цезар салата", "3,50", "350", ""],
["", "salata-snezhanka", "Салата Снежанка", "2,10", "250", ""],
["", "svezha-salata", "Свежа салата", "2,80", "250", ""],
["", "salata-pecheni-chushki-ss-sirene", "Салата печени чушки със сирене", "2,10", "250", ""],
["", "topla-mekhandzhijska-salata", "Топла механджийска салата", "3,50", "450", ""]

            ],

            "appetizer": [
                ["", "nevrozna-razyadka", "Неврозна разядка", "2,10", "220", ""],
["", "orekhova-razyadka", "Орехова разядка", "2,80", "220", ""],
["", "marinovani-lyuti-chushleta", "Мариновани люти чушлета", "0,70", "150", ""]

            ],

            "dry-appetizer": [
                ["", "lukanka", "Луканка", "1,40", "50", ""],
["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "sukho-plato", "Сухо плато", "7,70", "200", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "sino-sirene", "Синьо сирене", "2,10", "50", ""]

            ],

            "Топли мезета": [
                ["", "pileshki-khapki-v-kornflejks", "Пилешки хапки в корнфлейкс", "3,50", "350", ""],
["", "pileshki-khapki-s-kartofeni-lyuspi", "Пилешки хапки с картофени люспи", "3,50", "350", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "2,80", "250", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "3,50", "200", ""],
["", "topeni-sirencza-ss-sladko-ot-borovinki", "Топени сиренца със сладко от боровинки", "3,50", "200", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,10", "250", ""],
["", "sirene-pane", "Сирене пане", "2,10", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "200", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "3,50", "450", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "3,50", "300", ""],
["", "pileshki-drobcheta-v-maslo", "Пилешки дробчета в масло", "2,10", "300", ""],
["", "czarevicza-v-maslo", "Царевица в масло", "2,10", "250", ""],
["", "yunashko-meze", "Юнашко мезе", "5,60", "400", ""],
["", "pikantni-pileshki-krila", "Пикантни пилешки крила", "2,10", "300", ""]

            ],

            "Постни ястия": [
                ["", "omlet-s-gbi", "Омлет с гъби", "2,10", "300", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "300", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "300", ""],
["", "omlet-asorti", "Омлет Асорти", "2,80", "300", ""],
["", "zelenchuczi-na-skara-s-aromatno-bosilkovo-pesto", "Зеленчуци на скара с ароматно босилково песто", "3,50", "300", ""],
["", "mish-mash", "Миш маш", "2,10", "350", ""],
["", "brokoli-ss-sino-sirene", "Броколи със синьо сирене", "4,90", "280", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "280", ""],
["", "przheni-kartofi-s-chesnov-dresing", "Пържени картофи с чеснов дресинг", "1,40", "250", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "350", ""],
["", "selski-kartofi", "Селски картофи", "2,10", "250", ""]

            ],

            "Гозби от пилешко месо": [
                ["", "pile-zhulien", "Пиле Жулиен", "5,60", "350", ""],
["", "pile-pod-pokhlupak", "Пиле под похлупак", "4,90", "300", ""],
["", "trakijska-przhola", "Тракийска пържола", "4,20", "350", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "3,50", "250", ""],
["", "pileshka-przhola-ot-but-na-skara", "Пилешка пържола от бут на скара", "2,80", "250", ""],
["", "pileshka-przhola-ot-but-na-skara-s-gben-sos", "Пилешка пържола от бут на скара с гъбен сос", "3,50", "350", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "120", ""]

            ],

            "Гозби от риба": [
                ["", "pstrva-na-skara-ili-przhena", "Пъстърва на скара или пържена", "1,40", "100", ""],
["", "skumriya-na-skara", "Скумрия на скара", "2,80", "260", ""],
["", "akula-pane", "Акула пане", "3,50", "250", ""],
["", "khrupkavi-ribni-filencza", "Хрупкави рибни филенца", "3,50", "300", ""],
["", "byala-riba-pane", "Бяла риба пане", "3,50", "300", ""],
["", "kalmari-pane", "Калмари пане", "4,90", "200", ""],
["", "safrid", "Сафрид", "3,50", "250", ""],
["", "midi-v-maslo", "Миди в масло", "4,20", "250", ""]

            ],

            "Гозби от свинско месо": [
                ["", "svinski-dzholan-po-stara-reczepta", "Свински джолан по стара рецепта", "7,70", "500", ""],
["", "svinski-dzholan-po-melnishki", "Свински джолан по мелнишки", "5,60", "350", ""],
["", "vienski-shniczel", "Виенски шницел", "4,20", "350", ""],
["", "medeni-svinski-rebra", "Медени свински ребра", "6,30", "350", ""],
["", "svinski-medaloni-s-manatarki", "Свински медальони с манатарки", "8,40", "350", ""],
["", "sharena-pekanicza", "Шарена пеканица", "4,90", "300", ""]

            ],

            "grill": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "250", ""],
["", "kebapche", "Кебапче", "0,00", "80", ""],
["", "kyufte", "Кюфте", "0,00", "80", ""],
["", "svinski-kareta-na-skara", "Свински карета на скара", "4,20", "250", ""]

            ],

            "risotto": [
                ["", "rizoto-s-pile", "Ризото с пиле", "3,50", "400", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "2,10", "400", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,10", "400", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "200", ""],
["", "zeleva-salata", "Зелева салата", "0,70", "200", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "200", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "200", ""],
["", "zelena-salata", "Зелена салата", "0,70", "200", ""]

            ],

            "desserts": [
                ["", "domashno-prigotveno-shokoladovo-sufle-s-topka-sladoled", "Домашно приготвено шоколадово суфле с топка сладолед", "2,10", "180", ""],
["", "czedeno-mlyako-ss-sladko-ot-borovinki", "Цедено мляко със сладко от боровинки", "1,40", "250", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/1042916.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/1042917.jpg?width=302"],
["", "fanta-limon", "Fanta Лимон", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/1042918.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/1042919.jpg?width=302"],
["", "schweppes-mandarina", "Schweppes Мандарина", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/1042921.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/1042922.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/1042923.jpg?width=302"]

            ],

            "Безалкохолни напитки": [
                ["", "studen-chaj", "Студен чай", "0,70", "250", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""]

            ],

            "beer": [
                ["", "pirinsko", "Пиринско", "0,70", "500", ""],
["", "shumensko", "Шуменско", "1,40", "500", ""],
["", "shumensko", "Шуменско", "0,70", "330", ""]

            ]
        }', 
        'slug' => 'restorant-smokinite',
        'business_name' => 'Ресторант Смокините',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Radomir',
        'region' => 'Radomir',
        'postal_code' => '5600',
        'address' => 'ул.Бенковски 6',
        'address_additional' => '',
        'coords_x' => '42.5449571',
        'coords_y' => '22.9660551',
        'phone' => '+359894358858',
        'email' => '',
        'website' => '',
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
                ["", "przhola-tomakhouk-ot-8-mesechno-teleshko-meso", "Пържола Томахоук от 8 месечно телешко месо", "24,50", "330", ""],
["", "sochni-teleshki-kyuftencza", "Сочни телешки кюфтенца", "9,80", "", ""],
["", "kebapcheta-ot-konsko-mlyano-meso", "Кебапчета от конско мляно месо", "7,70", "", ""],
["", "kyufteta-ot-konska-i-svinska-kajma", "Кюфтета от конска и свинска кайма", "7,70", "", ""]

            ],

            "salads": [
                ["", "domashno-kopoolu", "Домашно кьопоолу", "4,90", "250", ""],
["", "krastaviczi-s-czedeno-mlyako-i-dzhodzhen", "Краставици с цедено мляко и джоджен", "4,90", "250", ""],
["", "tradiczionna-zelena-salata", "Традиционна зелена салата", "4,90", "300", ""],
["", "pryasno-pecheni-chushki-ss-zekhtin-chesn-i-magdanozz", "Прясно печени чушки със зехтин, чесън и магданозз", "4,90", "300", ""],
["", "byalo-zele-ss-selri-chesn-i-magdanoz", "Бяло зеле със селъри, чесън и магданоз", "4,90", "350", ""],
["", "antichen-kladenecz", "Античен кладенец", "9,80", "600", ""]

            ],

            "soups": [
                ["", "krem-supa-ot-tikvichki-i-skaridi", "Крем супа от тиквички и скариди", "4,20", "350", ""],
["", "pileshka-supa", "Пилешка супа", "3,50", "350", ""],
["", "tarator", "Таратор", "2,10", "350", ""],
["", "krem-supa-ot-chervena-leshha", "Крем супа от червена леща", "3,50", "350", ""]

            ],

            "Арменски салати": [
                ["", "karn-salad", "Карнъ салад", "6,30", "300", ""],
["", "lolig-salad", "Лолиг салад", "6,30", "300", ""],
["", "nakhut", "Нахут", "4,90", "250", ""],
["", "plato-armenski-razyadki", "Плато арменски разядки", "7,70", "400", ""],
["", "salata-ot-presni-tikvichki-s-kopr-limon-zekhtin", "Салата от пресни тиквички с копър, лимон, зехтин", "6,30", "300", ""],
["", "tabuli", "Табули", "6,30", "250", ""],
["", "khajgukhi", "Хайгухи", "7,00", "350", ""],
["", "miteryan", "Митерян", "5,60", "350", ""],
["", "plato-armenski-salati-5-vida", "Плато арменски салати 5 вида", "17,50", "700", ""],
["", "spanachena-salata", "Спаначена  салата", "9,10", "300", ""],
["", "topenicza", "Топеница", "5,60", "250", ""]

            ],

            "Арменски предястия": [
                ["", "kajgana", "Кайгана", "6,30", "300", ""],
["", "skhtoracz", "Схторац", "4,90", "250", ""],
["", "postno-mant", "Постно мантъ", "5,60", "250", ""],
["", "mesno-mant", "Месно мантъ", "6,30", "250", ""],
["", "keshkek", "Кешкек", "5,60", "250", ""],
["", "armenski-lozovi-sarmichki", "Арменски лозови сармички", "4,90", "250", ""],
["", "zelevi-sarmi-s-klczano-meso-i-praz", "Зелеви сарми с кълцано месо и праз", "7,00", "400", ""],
["", "lozovi-srmi-s-klczano-meso", "Лозови сърми с кълцано месо", "6,30", "250", ""],
["", "pikantni-kyuftencza", "Пикантни кюфтенца", "8,40", "250", ""],
["", "plato-armenski-predyastiya", "Плато арменски предястия", "18,90", "800", ""],
["", "postni-zelevi-sarmi", "Постни зелеви сарми", "5,60", "400", ""]

            ],

            "starters": [
                ["", "patladzhan-psiti", "Патладжан псити", "7,00", "500", ""],
["", "khrupkavi-tikvichki-s-mlechen-sos", "Хрупкави тиквички с млечен сос", "6,30", "350", ""],
["", "khrupkav-patladzhan-s-domaten-sos", "Хрупкав патладжан с доматен сос", "7,00", "350", ""],
["", "khrupkavi-pileshki-filencza-s-kornflejks", "Хрупкави пилешки филенца с корнфлейкс", "9,10", "500", ""],
["", "domashno-przheni-kartofi", "Домашно пържени картофи", "3,50", "300", ""],
["", "sotirani-kartofi-s-maslo-chesn-i-kopr", "Сотирани картофи с масло, чесън и копър", "3,50", "300", ""],
["", "pateshki-srcza-s-maslko-na-tigan", "Патешки сърца с маслко на тиган", "7,00", "300", ""],
["", "zapecheno-koze-sirene-ss-sladko-ot-borovinki", "Запечено козе сирене със сладко от боровинки", "13,30", "120", ""],
["", "manatarki-sote", "Манатарки соте", "16,10", "250", ""],
["", "khalumi-na-plocha", "Халуми на плоча", "7,00", "150", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "7,00", "150", ""],
["", "idianska-teleshka-pastrma", "Идианска телешка пастърма", "7,70", "50", ""]

            ],

            "Наши морски предложения": [
                ["", "safrid-przhen", "Сафрид пържен", "8,40", "330", ""],
["", "barbun-przhen", "Барбун пържен", "8,40", "330", ""],
["", "midzhit-przhen", "Миджит пържен", "8,40", "330", ""],
["", "pirzhena-khamsiya", "Пиржена хамсия", "6,30", "330", ""],
["", "vatos-przhen", "Ватос пържен", "11,20", "330", ""],
["", "kalkan-przhen", "Калкан пържен", "30,80", "400", ""],
["", "lavrak-na-skara", "Лаврак на скара", "16,80", "", ""],
["", "czipura-na-skara", "Ципура на скара", "13,30", "", ""],
["", "ishkhan-po-sevanski", "Ишхан по севански", "13,30", "350", ""],
["", "somga-file-v-lavash", "Сьомга филе в лаваш", "16,80", "350", ""],
["", "ribena-chorba", "Рибена чорба", "3,50", "350", ""]

            ],

            "Основни ястия": [
                ["", "pile-khajtukhi", "Пиле Хайтухи", "13,30", "400", ""],
["", "krnyarik", "Кърнъярик", "9,80", "350", ""],
["", "domashno-przheni-kyufteta", "Домашно пържени кюфтета", "8,40", "", ""],
["", "pateshki-drob-egur", "Патешки  дроб Егур", "25,20", "350", ""],
["", "paticza-egur", "Патица Егур", "16,80", "300", ""],
["", "pateshko-file-s-manatarki", "Патешко филе с манатарки", "17,50", "300", ""],
["", "pateshko-magre", "Патешко магре", "20,30", "300", ""],
["", "svinski-dzholan-prigotven-po-bavarska-reczepta-s-kiselo-zele", "Свински джолан приготвен по баварска рецепта с кисело зеле", "18,90", "700", ""],
["", "grczka-musaka", "Гръцка мусака", "9,80", "350", ""]

            ],

            "Пици и бургери": [
                ["", "margarita", "Маргарита", "7,00", "390", ""],
["", "chetiri-sirena", "Четири сирена", "9,10", "450", ""],
["", "proshuto", "Прошуто", "9,10", "460", ""],
["", "kaprichoza", "Капричоза", "8,40", "490", ""],
["", "peperoni", "Пеперони", "8,40", "460", ""],
["", "klasicheski-burger", "Класически бургер", "8,40", "350", ""],
["", "burger-s-bekon", "Бургер с бекон", "9,80", "400", ""],
["", "dvoen-chijzburger", "Двоен чийзбургер", "13,30", "600", ""]

            ],

            "barbecue": [
                ["", "khavi-khorovacz", "Хави хоровац", "17,50", "450", ""],
["", "pileshki-krilcza", "Пилешки крилца", "6,30", "500", ""],
["", "pileshki-trtki", "Пилешки трътки", "6,30", "300", ""],
["", "teleshki-kebashchencza", "Телешки кебашченца", "9,80", "", ""],
["", "lyulya-kebap", "Люля кебап", "15,40", "350", ""],
["", "kebapcheta-ot-konsko-mlyako", "Кебапчета от конско мляко", "7,70", "", ""],
["", "kyufteta-ot-konska-i-svinska-kajma", "Кюфтета от конска и свинска кайма", "7,70", "", ""],
["", "agneshki-kotletcheta", "Агнешки котлетчета", "22,40", "300", ""],
["", "khozi-kharovacz", "Хози харовац", "17,50", "450", ""],
["", "svinska-vratna-pzhola", "Свинска вратна пъжола", "9,10", "250", ""],
["", "svinski-rebrcza", "Свински ребърца", "17,50", "500", ""],
["", "pikantni-kyuftencza", "Пикантни кюфтенца", "8,40", "", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "6,30", "300", ""],
["", "stek-fiorentina", "Стек фиорентина", "9,10", "100", ""],
["", "ribaj-stek-ot-mlechno-telencze", "Рибай стек от млечно теленце", "24,50", "350", ""]

            ],

            "risotto": [
                ["", "rizoto-s-morski-darove", "Ризото с морски дарове", "13,30", "350", ""],
["", "rizoto-vegetariana", "Ризото вегетариана", "7,70", "350", ""]

            ],

            "pasta": [
                ["", "karbonara", "Карбонара", "7,70", "350", ""],
["", "boloneze", "Болонезе", "7,70", "350", ""],
["", "aliolio", "Алиолио", "7,00", "350", ""],
["", "pene-arabiata", "Пене арабиата", "7,00", "350", ""]

            ],

            "Морски дарове": [
                ["", "przheni-kalmari", "Пържени калмари", "9,80", "300", ""],
["", "skaridi", "Скариди", "10,50", "300", ""],
["", "midi-bryuksel", "Миди Брюксел", "7,70", "800", ""],
["", "midi-s-oriz-arborio", "Миди с ориз арборио", "9,80", "800", ""],
["", "panirani-midi", "Панирани миди", "8,40", "350", ""],
["", "midi-s-chesnov-sos", "Миди с чеснов сос", "8,40", "350", ""],
["", "midi-saganaki", "Миди саганаки", "9,80", "400", ""],
["", "pulpo-ala-galega", "Пулпо ала галега", "17,50", "250", ""],
["", "tarama-khajver", "Тарама хайвер", "2,10", "160", ""]

            ],

            "Люто": [
                ["", "pecheni-lyuti-chushleta-s-chesn-i-magdanoz", "Печени люти чушлета с чесън и магданоз", "2,80", "", ""],
["", "armenska-lyutiva-pasta", "Арменска лютива паста", "2,80", "50", ""],
["", "presni-lyuti-chushki", "Пресни люти чушки", "2,10", "", ""]

            ],

            "bread": [
                ["", "koshnichka-lavash", "Кошничка лаваш", "1,40", "110", ""],
["", "domashno-pechena-chesnova-pitka", "Домашно печена чеснова питка", "1,40", "160", ""]

            ],

            "Традиционни арменски десерти": [
                ["", "anush-abur", "Ануш Абур", "3,50", "180", ""],
["", "armenska-gris-khalva", "Арменска грис халва", "3,50", "150", ""],
["", "sladk-salam", "Сладък салам", "4,20", "140", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "4,20", "190", ""],
["", "domashno-sladko-ot-zleni-smokini", "Домашно сладко от злени смокини", "2,80", "120", ""],
["", "armenska-baklava-s-orekhi", "Арменска баклава с орехи", "3,50", "160", ""],
["", "torta-garash", "Торта Гараш", "4,20", "", ""],
["", "armenska-medena-torta", "Арменска медена торта", "4,20", "130", ""]

            ]
        }', 
        'slug' => 'antichen-kladenec',
        'business_name' => 'Античен кладенец',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sozopol',
        'region' => 'Sozopol',
        'postal_code' => '8130',
        'address' => 'ул. Кирил и Методий 35',
        'address_additional' => '',
        'coords_x' => '42.4249923',
        'coords_y' => '27.6967547',
        'phone' => '+359889383300',
        'email' => '',
        'website' => '',
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
                ["", "grczka-salata", "Гръцка салата", "4,20", "300", ""],
["", "tabule-s-avokado", "Табуле с авокадо", "4,20", "300", ""],
["", "kolslou", "Колслоу", "4,20", "300", ""],
["", "salata-czezar-s-pileshko-file", "Салата Цезар с пилешко филе", "4,90", "300", ""],
["", "gradinska-salata", "Градинска салата", "4,20", "300", ""],
["", "blgarska-salata", "Българска салата", "4,20", "300", ""]

            ],

            "Стартери": [
                ["", "domatena-salcza-fresko", "Доматена салца Фреско", "3,50", "150", ""],
["", "avokado-mus", "Авокадо мус", "3,50", "150", ""],
["", "khumus", "Хумус", "3,50", "150", ""]

            ],

            "Закуски": [
                ["", "tost-s-bob-i-yajcze-i-anglijski-nadenichki", "Тост с боб и яйце и английски наденички", "4,90", "450", ""],
["", "belgijski-gofreti-ss-smetana-i-domashno-sladko", "Белгийски гофрети със сметана и домашно сладко", "4,20", "250", ""],
["", "frenski-tost-ss-shunka-i-emental", "Френски тост със шунка и ементал", "3,50", "300", ""],
["", "plnozrnest-tost-s-pastet-ot-avokado-i-yajcza", "Пълнозърнест тост с пастет от авокадо и яйца", "4,90", "450", ""],
["", "yajcza-na-ochi-ss-anglijski-bekon", "Яйца на очи със английски бекон", "4,90", "300", ""],
["", "ovesena-kasha-s-med-i-orekhi-ili-s-domashno-sladko", "Овесена каша с мед и орехи или с домашно сладко", "2,80", "400", ""]

            ],

            "Веган меню": [
                ["", "gbena-krem-supa-s-kopr", "Гъбена крем супа с копър", "2,10", "", ""],
["", "spanachena-krem-supa", "Спаначена крем супа", "2,10", "", ""],
["", "domatena-salcza-fresko", "Доматена салца фреско", "3,50", "", ""],
["", "khumus", "Хумус", "3,50", "", ""],
["", "domatena-supa-s-bosilek", "Доматена супа с босилек", "2,10", "", ""],
["", "tabule-s-avokado", "Табуле с авокадо", "4,20", "", ""],
["", "rzhen-tost-s-khajver-ot-avokado-i-domati", "Ръжен тост с хайвер от авокадо и домати", "4,90", "", ""],
["", "khrupkava-bageta-s-khumus-i-pecheni-korenoplodni", "Хрупкава багета с хумус и печени кореноплодни", "4,20", "", ""],
["", "przheni-kartofki", "Пържени картофки", "1,40", "", ""],
["", "sladki-przheni-kartofi", "Сладки пържени картофи", "2,10", "", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "2,80", "", ""],
["", "pechena-czarevicza-ss-zekhtin-i-kopr", "Печена царевица със зехтин и копър", "2,10", "", ""]

            ],

            "Специални предложения": [
                ["", "burito-s-pikantna-riba-ton", "Бурито с пикантна риба тон", "6,30", "", ""],
["", "vegan-chili-s-kinoa-sladki-kartofi-i-guakamole", "Веган чили с киноа, сладки картофи и гуакамоле", "6,30", "", ""],
["", "burger-s-flet-ajrn-abrdijn-stek", "Бургер с флет айрън абърдийн стек", "15,40", "", ""],
["", "pechena-czarevicza-ss-zekhtin-i-kopr", "Печена царевица със зехтин и копър", "13,30", "", ""],
["", "burito-s-chili-ot-kinoa-sladki-kartofi-i-guakamole", "Бурито с чили от киноа, сладки картофи и гуакамоле", "6,30", "", ""],
["", "tex-mex-burito-s-brkani-yajcza-avokado-i-chedr", "Tex-mex бурито с бъркани яйца, авокадо и чедър", "6,30", "", ""],
["", "pile-burito-s-cheri-domati-avokado-i-chedr", "Пиле бурито с чери домати, авокадо и чедър", "6,30", "", ""]

            ],

            "sandwiches": [
                ["", "bageta-s-peperoni-mus-ot-sirena-rukola", "Багета с пеперони, мус от сирена, рукола", "4,20", "300", ""],
["", "bageta-s-shunka-emental-i-lucheni-krgcheta", "Багета с шунка, ементал и лучени кръгчета", "4,20", "300", ""],
["", "sandvich-s-riba-ton", "Сандвич с риба тон", "6,30", "400", ""],
["", "blt-sandvich", "BLT сандвич", "4,90", "350", ""],
["", "bageta-s-omlet-zelenchuczi-i-krem-fresh", "Багета с омлет, зеленчуци и крем фреш", "4,20", "300", ""],
["", "brazilski-sandvich-ss-svinsko-pecheno", "Бразилски сандвич със свинско печено", "6,30", "350", ""],
["", "khrupkava-bageta-s-grilovani-korenoplodni-khumus-i-moczarela", "Хрупкава багета с гриловани кореноплодни, хумус и моцарела", "4,20", "300", ""],
["", "italianski-sandvich-s-proshuto", "Италиански сандвич с прошуто", "6,30", "300", ""]

            ],

            "Хот-дог": [
                ["", "corn-dog-ss-sos-khryan-i-smetana", "Corn dog със сос хрян и сметана", "4,20", "300", ""],
["", "street-dogzz-s-bekon-karameliziran-luk-i-gorchicza-heinz", "Street dogzz с бекон, карамелизиран лук и горчица Heinz", "4,20", "300", ""]

            ],

            "burgers": [
                ["", "veggie-burger", "Veggie бургер", "7,00", "450", ""],
["", "burger-s-pileshko-file", "Бургер с пилешко филе", "7,00", "450", ""],
["", "pulled-pork-burger", "Pulled pork бургер", "7,00", "450", ""],
["", "premium-burger-s-black-angus-usda", "Премиум бургер с Black Angus USDA", "9,10", "500", ""],
["", "klasicheski-chijzburger-s-yajcze", "Класически чийзбургер с яйце", "7,00", "450", ""],
["", "premium-shefs-burger-s-black-angus-usda", "Премиум шеф’с бургер с Black Angus USDA", "9,10", "500", ""],
["", "fermerski-burger-s-irlandsko-agneshko", "Фермерски бургер с ирландско агнешко", "9,80", "500", ""],
["", "riben-burger", "Рибен бургер", "8,40", "450", ""]

            ],

            "BBQ и други": [
                ["", "pileshko-file-s-kartofki-i-svezha-salata", "Пилешко филе с картофки и свежа салата", "7,00", "300", ""],
["", "khrupkavi-pileshki-krilcza", "Хрупкави пилешки крилца", "7,00", "300", ""],
["", "grczko-suvlaki", "Гръцко сувлаки", "9,80", "400", ""],
["", "svinski-rebrcza-s-teriyaki-sos", "Свински ребърца с терияки сос", "8,40", "300", ""],
["", "svinsko-pecheno-na-baven-ogn-s-kolslou-i-kartofki", "Свинско печено на бавен огън с колслоу и картофки", "8,40", "300", ""],
["", "nadenichki-ot-teleshko-meso", "Наденички от телешко месо", "7,70", "300", ""],
["", "riba-treska-v-panko-galeta-susam-i-kartofki", "Риба треска в панко галета, сусам и картофки", "8,40", "300", ""]

            ],

            "others": [
                ["", "sladki-przheni-kartofi", "Сладки пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "2,80", "200", ""],
["", "pechena-czarevicza-s-maslo", "Печена царевица с масло", "2,10", "250", ""]

            ],

            "Сладки палачинки": [
                ["", "palachinka-s-shokolad-portokali-i-svezha-menta", "Палачинка с шоколад, портокали и свежа мента", "3,50", "350", ""],
["", "palachinka-s-med-orekhi-i-yablki-s-kanela", "Палачинка с мед, орехи и ябълки с канела", "3,50", "350", ""],
["", "palachinka-ss-zakvasena-smetana-i-domashno-sladko", "Палачинка със заквасена сметана и домашно сладко", "3,50", "350", ""],
["", "palachinka-syukre", "Палачинка Сюкре", "3,50", "350", ""]

            ],

            "Солени палачинки": [
                ["", "palachinka-kapreze-s-domati-moczarela-i-bosilek", "Палачинка Капрезе с домати, моцарела и босилек", "3,50", "350", ""],
["", "palachinka-s-pileshko-file-emental-sladka-czarevicza-i-sladko-chili-sos", "Палачинка с пилешко филе, ементал, сладка царевица и сладко чили сос", "3,50", "350", ""],
["", "palachinka-s-pueshka-shunka-chedr-i-krem-fresh", "Палачинка с пуешка шунка, чедър и крем фреш", "3,50", "350", ""],
["", "palachinka-kuatro-formadzhi-s-rukola", "Палачинка куатро формаджи с рукола", "3,50", "350", ""]

            ]
        }', 
        'slug' => 'happy-food-burger-house',
        'business_name' => 'Happy Food Burger House',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Bansko',
        'region' => 'Bansko',
        'postal_code' => '2770',
        'address' => 'ул. Найден Геров 3',
        'address_additional' => '',
        'coords_x' => '41.82857688',
        'coords_y' => '23.47777488',
        'phone' => '+359888719516',
        'email' => '',
        'website' => '',
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
                ["", "domati-ss-sirene", "Домати със сирене", "2,80", "400", ""],
["", "salata-morkovi", "Салата моркови", "1,40", "300", ""],
["", "shopska", "Шопска", "2,80", "400", ""],
["", "mlechna", "Млечна", "1,40", "200", ""],
["", "ovcharska", "Овчарска", "4,20", "600", ""],
["", "krastaviczi-ss-sirene", "Краставици със сирене", "2,80", "400", ""],
["", "maslini", "Маслини", "2,10", "200", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "450", ""],
["", "selska-salata", "Селска салата", "2,80", "450", ""],
["", "zele", "Зеле", "1,40", "300", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "350", ""],
["", "zelena-salata", "Зелена салата", "2,10", "300", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,10", "350", ""]

            ],

            "Топли предястия": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""],
["", "sirene-pane", "Сирене пане", "2,80", "200", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "250", ""],
["", "topeno-sirene-pane", "Топено сирене пане", "3,50", "", ""],
["", "noazeti", "Ноазети", "2,10", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "200", ""],
["", "naturalni-pileshki-drobcheta", "Натурални пилешки дробчета", "2,80", "300", ""],
["", "rulcza-ot-raczi", "Рулца от раци", "2,80", "200", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "2,80", "350", ""],
["", "chushki-byurek", "Чушки бюрек", "0,70", "", ""],
["", "ezik-v-maslo", "Език в масло", "4,20", "200", ""],
["", "pileshki-srcza", "Пилешки сърца", "2,80", "250", ""],
["", "svinski-drob", "Свински дроб", "2,80", "300", ""],
["", "svinski-drob-v-bulo", "Свински дроб в було", "2,80", "250", ""],
["", "svinski-drobcheta-po-selski", "Свински дробчета по селски", "2,80", "350", ""],
["", "spanacheno-kyufte", "Спаначено кюфте", "1,40", "", ""]

            ],

            "Ястия от месо": [
                ["", "speczialitet-bistro", "Специалитет Бистро", "4,90", "350", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "130", ""],
["", "naturalni-pileshki-khapki", "Натурални пилешки хапки", "4,20", "300", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "3,50", "", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "4,20", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "350", ""],
["", "pileshki-sudzhuk-s-kashkaval", "Пилешки суджук с кашкавал", "4,20", "250", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,20", "450", ""],
["", "svisnki-khapki", "Свиснки хапки", "4,90", "", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "130", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,20", "450", ""],
["", "svinska-przhola", "Свинска пържола", "4,20", "250", ""],
["", "sudzhuk", "Суджук", "4,20", "250", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "flejki", "Флейки", "4,20", "250", ""],
["", "pileshki-khapki-ss-zelenchuczi", "Пилешки хапки със зеленчуци", "4,20", "250", ""],
["", "pileshko-rulo-s-koze-sirene-i-bosilek", "Пилешко руло с козе сирене и босилек", "4,20", "250", ""],
["", "pileshki-khapki-ot-czyalo-byalo-meso", "Пилешки хапки от цяло бяло месо", "4,20", "250", ""],
["", "mecha-lapa", "Меча лапа", "4,20", "300", ""],
["", "rulcze-ot-pileshko-file-v-bekon", "Рулце от пилешко филе в бекон", "1,40", "100", ""],
["", "pirinska-klczanicza", "Пиринска кълцаница", "3,50", "", ""],
["", "pileshki-dzhob-fantaziya", "Пилешки джоб Фантазия", "3,50", "250", ""],
["", "srbska-pleskavicza", "Сръбска плескавица", "2,80", "200", ""],
["", "pileshko-vreteno", "Пилешко вретено", "4,20", "250", ""],
["", "mamini-kyuftencza", "Мамини кюфтенца", "2,10", "250", ""],
["", "pileshki-prchiczi-ss-susam", "Пилешки пръчици със сусам", "4,20", "300", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "200", ""],
["", "karnache-na-shish", "Карначе на шиш", "2,10", "", ""]

            ],

            "fish": [
                ["", "skaridi", "Скариди", "3,50", "200", ""],
["", "skumriya", "Скумрия", "4,20", "", ""],
["", "czacza", "Цаца", "2,10", "250", ""],
["", "pstrva", "Пъстърва", "6,30", "", ""]

            ]
        }', 
        'slug' => 'bistro-stadiona',
        'business_name' => 'Бистро Стадиона',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Petrich',
        'region' => 'Petrich',
        'postal_code' => '2850',
        'address' => 'Ул. България 77',
        'address_additional' => '',
        'coords_x' => '41.3905541',
        'coords_y' => '23.19939923',
        'phone' => '+359878191942',
        'email' => '',
        'website' => '',
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
["", "selska-lyutika", "Селска лютика", "2,80", "400", ""],
["", "redena-salata", "Редена салата", "2,80", "400", ""],
["", "rozov-domat-s-ovche-sirene", "Розов домат с овче сирене", "3,50", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,10", "250", ""],
["", "katk-s-pechena-chushka", "Катък с печена чушка", "2,10", "250", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "400", ""]

            ],

            "starters": [
                ["", "kasapsko-meze", "Касапско мезе", "7,00", "500", ""],
["", "ezik-v-maslko", "Език в маслко", "4,90", "200", ""],
["", "svinski-grdi-na-skara-s-glazura-ot-sos-teriyaki", "Свински гърди на скара с глазура от сос Терияки", "5,60", "450", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "5,60", "450", ""],
["", "gbi-asorti", "Гъби асорти", "5,60", "300", ""],
["", "zadusheni-manatarki-s-kopr-i-chesn", "Задушени манатарки с копър и чесън", "5,60", "200", ""],
["", "zadusheni-pechurki-s-kopr-i-chesn", "Задушени печурки с копър и чесън", "2,80", "250", ""],
["", "tikvichki-s-mlechen-sos", "Тиквички с млечен сос", "2,80", "300", ""],
["", "sudzhuk-na-greben-s-razyadka-i-prlenka", "Суджук на гребен с разядка и пърленка", "4,20", "250", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "2,80", "150", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "3,50", "300", ""],
["", "pileshki-pikantni-khapki", "Пилешки пикантни хапки", "4,90", "250", ""],
["", "drusana-pileshka", "Друсана пилешка", "3,50", "", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "350", ""],
["", "pileshki-drusan-drob", "Пилешки друсан дроб", "4,20", "300", ""],
["", "pileshki-drobcheta-s-gbi-bekon-i-kashkaval", "Пилешки дробчета с гъби, бекон и кашкавал", "3,50", "400", ""],
["", "zadusheni-pileshki-srcza-s-luk", "Задушени пилешки сърца с лук", "2,80", "300", ""],
["", "vodenichki-s-gbi-i-luk", "Воденички с гъби и лук", "3,50", "450", ""],
["", "selsko-meze", "Селско мезе", "7,00", "800", ""],
["", "svinska-drusana-przhola", "Свинска друсана пържола", "5,60", "400", ""],
["", "svinski-drusan-drob", "Свински друсан дроб", "2,80", "350", ""],
["", "panirani-sirenacza", "панирани сиренаца", "2,80", "250", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "2,80", "250", ""],
["", "panirani-topeni-sirencza-v-koshnichka-ot-kashkaval-ss-sladko-ot-borovinki", "Панирани топени сиренца в кошничка от кашкавал със сладко от боровинки", "4,20", "350", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "300", ""],
["", "pileshki-filencza-ss-susam", "Пилешки филенца със сусам", "3,50", "300", ""]

            ],

            "Гюведжета": [
                ["", "sirene-po-shopski", "Сирене по шопски", "2,80", "300", ""],
["", "sirene-po-trakijski", "Сирене по тракийски", "3,50", "350", ""],
["", "svinska-kavrma-po-radomirski", "Свинска кавърма по радомирски", "4,90", "350", ""],
["", "pileshka-kavrma-po-radomirski", "Пилешка кавърма по радомирски", "4,90", "350", ""]

            ],

            "Паста и ризото": [
                ["", "spageti-boloneze", "Спагети Болонезе", "3,50", "300", ""],
["", "spageti-karbonara", "Спагети Карбонара", "3,50", "300", ""],
["", "spageti-amatrichana", "Спагети Аматричана", "3,50", "300", ""],
["", "rizoto-s-manatarki", "Ризото с манатарки", "4,20", "350", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "svonska-przhola-250gr0", "Свонска пържола (250гр0", "4,90", "", ""],
["", "svinsko-bon-file", "Свинско бон филе", "4,90", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "250", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "120", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshki-bon-filencza-s-grilovani-zelenchuczi", "Пилешки бон филенца с гриловани зеленчуци", "5,60", "400", ""],
["", "pile-po-madzharski", "Пиле по маджарски", "4,90", "400", ""],
["", "pileshki-shniczel-po-vienski", "Пилешки шницел по виенски", "5,60", "300", ""],
["", "pileshki-filencza-s-gbi-brokoli-i-smetana", "Пилешки филенца с гъби, броколи и сметана", "4,90", "450", ""],
["", "shipcheta-ot-pileshko-butche-s-presen-luk-glazura-ot-sos-teriyaki-i-imperatorski-oriz", "Шипчета от пилешко бутче с пресен лук, глазура от сос Терияки и императорски ориз", "4,90", "", ""]

            ],

            "Ястия от свинско месо": [
                ["", "svinsko-bon-file-s-manatarki", "Свинско бон филе с манатарки", "6,30", "350", ""],
["", "svinsko-bon-file-ss-sos-rokfor", "Свинско бон филе със сос Рокфор", "6,30", "350", ""],
["", "svinski-shniczel-po-vienski", "Свински шницел по виенски", "6,30", "350", ""],
["", "svinsko-bon-file-s-pechurki", "Свинско бон филе с печурки", "6,30", "350", ""]

            ],

            "Ястия от риба": [
                ["", "pstrva", "Пъстърва", "6,30", "300", ""],
["", "file-ot-pstrva", "Филе от пъстърва", "6,30", "250", ""],
["", "pstrva-vv-folio-s-gbi-bekon-i-mashherka", "Пъстърва във фолио с гъби, бекон и мащерка", "6,30", "350", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "280", ""],
["", "kartofi-po-selski", "Картофи по селски", "1,40", "250", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "250", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,00", "50", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "1,40", "200", ""],
["", "lyuti-chushleta", "Люти чушлета", "0,70", "100", ""]

            ],

            "bread": [
                ["", "filijka", "Филийка", "0,00", "", ""],
["", "chesnova-filijka", "Чеснова филийка", "0,00", "", ""],
["", "prlenka", "Пърленка", "0,70", "", ""],
["", "pitka", "Питка", "0,00", "", ""]

            ],

            "sauces": [
                ["", "mlechen-sos", "Млечен сос", "0,00", "100", ""],
["", "gben-sos", "Гъбен сос", "0,70", "100", ""],
["", "chili", "Чили", "0,00", "50", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "rokfor", "Рокфор", "3,50", "100", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,70", "150", ""],
["", "krem-bryule", "Крем Брюле", "1,40", "150", ""],
["", "torta", "Торта", "2,10", "200", ""]

            ]
        }', 
        'slug' => 'restorant-303',
        'business_name' => 'Ресторант 303',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Troyan',
        'region' => 'Troyan',
        'postal_code' => '5600',
        'address' => 'ул. Васил Левски 238',
        'address_additional' => '',
        'coords_x' => '42.89440956',
        'coords_y' => '24.71304962',
        'phone' => '+359878123955',
        'email' => '',
        'website' => '',
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
                ["", "czezar-s-pile", "Цезар с пиле", "5,60", "400", ""],
["", "shopska-salata", "Шопска салата", "3,50", "", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "350", ""],
["", "verde-s-avokado", "Верде с авокадо", "5,60", "350", ""],
["", "zelena-salata-ss-somga", "Зелена салата със сьомга", "5,60", "300", ""],
["", "salata-morelli", "Салата Morelli", "5,60", "300", ""],
["", "svezha-salata-s-kinoa", "Свежа салата с киноа", "5,60", "250", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "300", ""]

            ],

            "Сухи мезета": [
                ["", "plato-sukhi-mezeta", "Плато сухи мезета", "7,70", "", ""],
["", "plato-sirena", "Плато сирена", "10,50", "", ""]

            ],

            "Топли предястия": [
                ["", "paniran-kashkaval", "Паниран кашкавал", "4,90", "250", ""],
["", "khrupkavi-topeni-sirencza-s-borovinki", "Хрупкави топени сиренца с боровинки", "5,60", "250", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,90", "250", ""],
["", "khrupkavi-kashkavalcheta", "Хрупкави кашкавалчета", "5,60", "250", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "4,90", "200", ""],
["", "khrupkavi-sirencza", "Хрупкави сиренца", "4,90", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "selski-kartofi", "Селски картофи", "2,80", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "200", ""],
["", "gbi-v-maslo", "Гъби в масло", "5,60", "200", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "3,50", "200", ""],
["", "grilovani-marinovani-zelenchuczi", "Гриловани, мариновани зеленчуци", "5,60", "300", ""],
["", "teleshki-ezik", "Телешки език", "7,00", "150", ""]

            ],

            "pizza": [
                ["", "sicziliana", "Сицилиана", "4,90", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "5,60", "", ""],
["", "vegetarianska", "Вегетарианска", "4,90", "", ""],
["", "pikola", "Пикола", "4,90", "", ""],
["", "meksikana", "Мексикана", "5,60", "", ""],
["", "maestro", "Маестро", "5,60", "", ""],
["", "roma", "Рома", "5,60", "", ""],
["", "kaprichoza", "Капричоза", "5,60", "", ""],
["", "salsidzhe", "Салсидже", "5,60", "", ""],
["", "neapol", "Неапол", "5,60", "", ""],
["", "salami", "Салами", "5,60", "", ""],
["", "proshuto", "Прошуто", "6,30", "", ""],
["", "italiana", "Италиана", "5,60", "", ""],
["", "florencziya", "Флоренция", "5,60", "", ""],
["", "khavaj", "Хавай", "5,60", "", ""],
["", "popaj", "Попай", "5,60", "", ""],
["", "kalczone", "Калцоне", "5,60", "", ""]

            ],

            "Топли ястия от пилешко месо": [
                ["", "pileshki-but-przhola-s-garnitura", "Пилешки бут пържола с гарнитура", "7,00", "350", ""],
["", "pileshko-shishche", "Пилешко шишче", "5,60", "350", ""],
["", "pile-morelli", "Пиле Morelli", "7,70", "350", ""],
["", "pile-ss-smetana-i-gbi", "Пиле със сметана и гъби", "6,30", "350", ""],
["", "pileshko-file", "Пилешко филе", "7,00", "350", ""],
["", "pile-v-sladko-kisel-sos", "Пиле в сладко кисел сос", "6,30", "350", ""],
["", "pile-ss-spanak", "Пиле със спанак", "6,30", "300", ""]

            ],

            "Топли ястия със свинско месо": [
                ["", "svinski-shish", "Свински шиш", "5,60", "300", ""],
["", "svinski-kareta-s-garnitura", "Свински карета с гарнитура", "7,00", "350", ""],
["", "svinsko-kontrafile-s-gben-sos", "Свинско контрафиле с гъбен сос", "7,00", "350", ""],
["", "svinska-vratna-przhola-s-garnitura", "Свинска вратна пържола с гарнитура", "7,70", "400", ""],
["", "svinski-rebrcza-s-garnitura", "Свински ребърца с гарнитура", "7,70", "400", ""],
["", "svinsko-file-s-gradinski-zelenchuczi", "Свинско филе с градински зеленчуци", "7,00", "350", ""],
["", "svinsko-v-sladko-kisel-sos", "Свинско в сладко кисел сос", "7,00", "350", ""],
["", "domashni-babini-kyuftencza", "Домашни бабини кюфтенца", "7,00", "", ""]

            ],

            "Морски ястия": [
                ["", "pstrva", "Пъстърва", "9,80", "400", ""],
["", "pikantni-midi", "Пикантни миди", "5,60", "500", ""],
["", "midi-natyur", "Миди натюр", "4,90", "500", ""],
["", "lavrak", "Лаврак", "11,90", "400", ""],
["", "panirani-kalmari", "Панирани калмари", "7,70", "150", ""],
["", "czacza", "Цаца", "3,50", "300", ""],
["", "skaridi-v-maslo", "Скариди в масло", "8,40", "150", ""]

            ],

            "risotto": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "5,60", "350", ""],
["", "rizoto-s-gbi-i-pile", "Ризото с гъби и пиле", "5,60", "350", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "5,60", "350", ""]

            ],

            "pasta": [
                ["", "spageti-karbonara", "Спагети Карбонара", "4,90", "400", ""],
["", "taliateli-ss-spanak-i-chetiri-sirena", "Талиатели със спанак и четири сирена", "4,90", "400", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "400", ""],
["", "spageti-vegetariana", "Спагети Вегетариана", "4,90", "400", ""],
["", "lazanya-boloneze", "Лазаня Болонезе", "4,90", "400", ""],
["", "pene-arabiata", "Пене Арабиата", "4,90", "400", ""]

            ],

            "garnish": [
                ["", "domati-i-krastaviczi", "Домати и краставици", "1,40", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "150", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "150", ""],
["", "selski-kartofi", "Селски картофи", "2,10", "150", ""]

            ],

            "Пърленки": [
                ["", "bilkova-bageta", "Билкова багета", "1,40", "", ""],
["", "naturalna-prlenka", "Натурална пърленка", "1,40", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "", ""],
["", "chabata", "Чабата", "0,70", "", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""]

            ],

            "sauces": [
                ["", "pikanten-sos", "Пикантен сос", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "50", ""]

            ],

            "desserts": [
                ["", "chijzkejk", "Чийзкейк", "3,50", "150", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "150", ""],
["", "domashna-torta", "Домашна торта", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'pizza-dinner-morelli',
        'business_name' => 'Pizza &amp; Dinner Morelli',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kavarna',
        'region' => 'Kavarna',
        'postal_code' => '9650',
        'address' => 'ул. Добротица 39',
        'address_additional' => '',
        'coords_x' => '43.43607466',
        'coords_y' => '28.33919245',
        'phone' => '+359892232230',
        'email' => '',
        'website' => '',
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
                ["", "2-piczi-margarita-2kh28sm--bira-ariana", "2 пици Маргарита (2х28см) + бира Ариана", "8,40", "", ""]

            ],

            "lunch": [
                ["", "przheno-kyufte", "Пържено кюфте", "0,00", "", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "0,00", "", ""],
["", "chushka-byurek", "Чушка бюрек", "3,50", "300", ""],
["", "evropejska-salata", "Европейска салата", "1,40", "300", ""],
["", "salata-snezhanka-s-presni-krastaviczi", "Салата снежанка с пресни краставици", "1,40", "300", ""],
["", "bob-yakhniya", "Боб яхния", "1,40", "300", ""]

            ],

            "soups": [
                ["", "leshha", "Леща", "0,70", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "pizza": [
                ["", "picza-margarita", "Пица Маргарита", "4,20", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "lyutenicza", "Лютеница", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""]

            ],

            "salads": [
                ["", "salata-domati", "Салата домати", "2,10", "300", ""],
["", "salata-krastaviczi", "Салата краставици", "2,10", "300", ""],
["", "shopska-salata", "Шопска салата", "2,10", "380", ""],
["", "meshana-salata", "Мешана салата", "2,10", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "rodopska-salata", "Родопска салата", "2,80", "300", ""],
["", "zeleva-salata", "Зелева салата", "2,10", "200", ""],
["", "vareni-kartofi", "Варени картофи", "2,10", "350", ""],
["", "snezhanka", "Снежанка", "2,10", "300", ""]

            ],

            "Топли предястия": [
                ["", "sirene-pane", "Сирене пане", "4,20", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "200", ""],
["", "pileshki-drobcheta-s-maslo", "Пилешки дробчета с масло", "2,80", "250", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "380", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,20", "200", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,20", "200", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "200", ""],
["", "przheni-ribki", "Пържени рибки", "1,40", "250", ""]

            ],

            "grill": [
                ["", "pileshko-shishche", "Пилешко шишче", "2,10", "130", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "200", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "130", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "200", ""],
["", "svinsko-pecheno", "Свинско печено", "2,80", "300", ""]

            ],

            "Ястия от яйца": [
                ["", "sirene-po-shopski", "Сирене по шопски", "2,80", "280", ""],
["", "yajcza-po-panagyurski", "Яйца по Панагюрски", "2,10", "280", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "220", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "220", ""],
["", "omlet-asorti", "Омлет Асорти", "3,50", "260", ""]

            ],

            "bread": [
                ["", "pitka-prlenka", "Питка Пърленка", "0,70", "200", ""],
["", "pitka-prlenka-s-kashkaval-i-sirene", "Питка Пърленка с кашкавал и сирене", "1,40", "260", ""],
["", "prepechena-filiya-khlyab", "Препечена филия хляб", "0,00", "", ""],
["", "bageta-byala", "Багета бяла", "0,00", "", ""],
["", "bageta-plnozrnesta", "Багета пълнозърнеста", "0,00", "", ""]

            ],

            "desserts": [
                ["", "palachinka-s-med", "Палачинка с мед", "1,40", "100", ""],
["", "palachinka-s-konfityur", "Палачинка с конфитюр", "1,40", "100", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "100", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "bira-ariana", "Бира Ариана", "1,40", "", ""],
["", "bira-pirinsko", "Бира Пиринско", "1,40", "", ""],
["", "mineralna", "Минерална", "0,70", "", ""]

            ]
        }', 
        'slug' => 'restorant-savana',
        'business_name' => 'Ресторант Савана',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vratsa',
        'region' => 'Vratsa',
        'postal_code' => '3000',
        'address' => 'ул. Околчица 49',
        'address_additional' => '',
        'coords_x' => '43.21904586',
        'coords_y' => '23.54668853',
        'phone' => '+35992650000',
        'email' => '',
        'website' => '',
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
["", "selska-salata", "Селска салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "350", ""],
["", "meshana-salata", "Мешана салата", "2,80", "300", ""],
["", "salata-maslini-s-luk", "Салата маслини с лук", "2,80", "200", ""],
["", "kartofena-salata-s-luk", "Картофена салата  с лук", "2,80", "300", ""],
["", "pikantna-kartofena-salata", "Пикантна картофена салата", "2,80", "350", ""],
["", "tarator", "Таратор", "0,70", "", ""],
["", "salata-zele-i-morkovi", "Салата зеле и моркови", "2,10", "300", ""],
["", "salata-s-riba-ton", "Салата с риба тон", "3,50", "300", ""],
["", "katk-pikanten-s-chushki", "Катък пикантен с чушки", "2,80", "300", ""],
["", "snezhanka-s-pryasna-krastavicza", "Снежанка с прясна краставица", "2,80", "300", ""],
["", "snezhanka-s-kisela-krastavichka", "Снежанка с кисела краставичка", "2,80", "300", ""],
["", "sezonna-salata", "Сезонна салата", "2,80", "300", ""],
["", "salata-star", "Салата Стар", "3,50", "350", ""],
["", "yajchena-salata", "Яйчена салата", "2,80", "300", ""]

            ],

            "Топли предястия": [
                ["", "pileshki-srcza-v-maslo-i-luk", "Пилешки сърца в масло и лук", "2,80", "300", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "2,80", "300", ""],
["", "pileshki-vodenichki-v-maslo-i-luk", "Пилешки воденички в масло и лук", "2,80", "300", ""],
["", "pileshki-vodenichki-v-maslo", "Пилешки воденички в масло", "2,80", "300", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "180", ""],
["", "kashkaval-orli", "Кашкавал Орли", "3,50", "200", ""],
["", "shunka-pane", "Шунка пане", "2,10", "180", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "200", ""],
["", "przheni-kartofi-selski", "Пържени картофи селски", "2,10", "200", ""],
["", "przheni-kartofi-selski-ss-sirene", "Пържени картофи селски със сирене", "2,10", "200", ""],
["", "sirencza-s-kopr-i-maslini-pane", "Сиренца с копър и маслини пане", "2,80", "300", ""],
["", "kralski-sirencza-s-maslini-i-shunka", "Кралски сиренца с маслини и шунка", "3,50", "00", ""],
["", "topeni-sirencza-pane", "Топени сиренца пане", "2,80", "200", ""],
["", "topeni-sirencza-pane-ss-sladko", "Топени сиренца пане със сладко", "2,80", "200", ""],
["", "panirani-pileshki-khapki-s-kornflejks", "Панирани пилешки хапки с корнфлейкс", "3,50", "300", ""],
["", "panirani-pileshki-khapki-ss-susam", "Панирани пилешки хапки със сусам", "3,50", "300", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "2,80", "300", ""],
["", "panirani-pileshki-drobcheta", "Панирани пилешки дробчета", "2,80", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "200", ""],
["", "gbi-v-maslo-i-kashkaval", "Гъби в масло и кашкавал", "2,80", "200", ""],
["", "pileshki-krilcza-pane", "Пилешки крилца пане", "2,80", "250", ""],
["", "pileshki-trtki-pane", "Пилешки трътки пане", "2,80", "200", ""],
["", "pileshki-trtki-na-skara", "Пилешки трътки на скара", "2,80", "200", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "2,80", "200", ""],
["", "shkembe-v-maslo-i-kashkaval", "Шкембе в масло и кашкавал", "3,50", "200", ""],
["", "panirana-czacza", "Панирана цаца", "2,80", "200", ""],
["", "khek-pane", "Хек пане", "3,50", "250", ""],
["", "belovar", "Беловар", "3,50", "200", ""],
["", "pstrva", "Пъстърва", "4,20", "300", ""],
["", "prstencheta-ot-kalmari-pane", "Пръстенчета от калмари пане", "3,50", "180", ""],
["", "svinski-cheren-drob-na-skara", "Свински черен дроб на скара", "2,80", "300", ""],
["", "svinski-cheren-drob-po-selski", "Свински черен дроб по селски", "2,80", "350", ""]

            ],

            "Основни ястия": [
                ["", "svinski-shniczel-kajma", "Свински шницел /кайма/", "2,80", "200", ""],
["", "vienski-shniczel", "Виенски шницел", "4,20", "280", ""],
["", "svinsko-vreteno", "Свинско вретено", "6,30", "500", ""],
["", "svinski-sach", "Свински сач", "8,40", "700", ""],
["", "pileshki-sach", "Пилешки сач", "8,40", "700", ""],
["", "kombiniran-sach", "Комбиниран сач", "10,50", "900", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,20", "400", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,20", "400", ""],
["", "svinska-kavrma-v-omlet", "Свинска кавърма в омлет", "4,90", "400", ""],
["", "pileshka-kavrma-v-omlet", "Пилешка кавърма в омлет", "4,90", "400", ""],
["", "sirene-po-shopki", "Сирене по шопки", "2,80", "300", ""],
["", "sirene-po-vrachanski", "Сирене по врачански", "2,80", "300", ""],
["", "kachamak-ss-sirene-i-maslo", "Качамак със сирене и масло", "2,10", "300", ""],
["", "kachamak-v-omlet", "Качамак в омлет", "2,80", "320", ""],
["", "speczialitet-na-zavedenie-star", "Специалитет на заведение Стар", "11,20", "850", ""],
["", "kavrma-po-radomirski", "Кавърма по радомирски", "4,90", "400", ""],
["", "kavrma-po-vodenicharski", "Кавърма по воденичарски", "4,90", "400", ""],
["", "pile-po-cziganski", "Пиле по цигански", "4,90", "300", ""],
["", "pile-palas", "Пиле Палас", "5,60", "300", ""]

            ],

            "Скара пилешко месо": [
                ["", "pileshka-przhola-but", "Пилешка пържола бут", "3,50", "280", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "3,50", "280", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "130", ""]

            ],

            "Скара свинско месо": [
                ["", "svinska-przhola", "Свинска пържола", "3,50", "280", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "130", ""],
["", "svinsko-kyufte", "Свинско кюфте", "0,70", "80", ""],
["", "nervozno-kyufte", "Нервозно кюфте", "0,70", "80", ""],
["", "svinsko-kebapche", "Свинско кебапче", "0,70", "80", ""],
["", "svinski-rebrcza-na-skara", "Свински ребърца на скара", "3,50", "300", ""]

            ],

            "garnish": [
                ["", "zele-i-morkovi", "Зеле и моркови", "1,40", "", ""],
["", "kartofena-salata-s-luk", "Картофена салата с лук", "1,40", "", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "1,40", "", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "200", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "", ""]

            ],

            "Ястия с яйца": [
                ["", "omlet-natyur", "Омлет натюр", "1,40", "", ""],
["", "omlet-asorti", "Омлет Асорти", "2,10", "", ""],
["", "yajcza-na-ochi", "Яйца на очи", "1,40", "", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "", ""]

            ],

            "pizza": [
                ["", "picza-margarita", "Пица Маргарита", "2,10", "", ""],
["", "picza-proshuto", "Пица Прошуто", "2,80", "", ""],
["", "picza-meksikana", "Пица Мексикана", "2,80", "", ""],
["", "picza-vegetariana", "Пица Вегетариана", "2,80", "", ""],
["", "picza-okean", "Пица Океан", "2,80", "", ""],
["", "picza-star", "Пица Стар", "3,50", "", ""],
["", "detska-picza-meche", "Детска пица Мече", "2,80", "", ""],
["", "picza-kalczone", "Пица Калцоне", "3,50", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "3,50", "", ""]

            ]
        }', 
        'slug' => 'bistro-star',
        'business_name' => 'Bistro Star',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vratsa',
        'region' => 'Vratsa',
        'postal_code' => '3002',
        'address' => 'ул. Генерал Скобелев 25',
        'address_additional' => '',
        'coords_x' => '43.20272248',
        'coords_y' => '23.55632185',
        'phone' => '+359889892969',
        'email' => '',
        'website' => '',
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
["", "rozov-domat-s-ovche-sirene", "Розов домат с овче сирене", "3,50", "350", ""],
["", "rozov-domat-s-pryasno-sirene", "Розов домат с прясно сирене", "3,50", "350", ""],
["", "selska-salata", "Селска салата", "2,80", "400", ""],
["", "troyanska-lyutika", "Троянска лютика", "2,80", "350", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "400", ""],
["", "zelena-salata", "Зелена салата", "2,80", "400", ""],
["", "salata-rusalka", "Салата Русалка", "2,80", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "350", ""],
["", "kalugerska-salata", "Калугерска салата", "2,80", "400", ""],
["", "bobena-salata", "Бобена салата", "3,50", "350", ""],
["", "mlechna-salata", "Млечна салата", "2,10", "250", ""],
["", "katk-s-pecheni-piperki", "Катък с печени пиперки", "2,10", "250", ""],
["", "podlucheni-piperki", "Подлучени пиперки", "2,10", "250", ""],
["", "salata-morkovi", "Салата моркови", "2,10", "300", ""]

            ],

            "Безмесни предястия": [
                ["", "zelenchuczi-na-skara-v-zekhtinov-sos-i-susheni-domati", "Зеленчуци на скара в зехтинов сос и сушени домати", "3,50", "500", ""],
["", "tikvichki-podlucheni", "Тиквички подлучени", "2,80", "300", ""],
["", "mish-mash", "Миш-маш", "2,80", "300", ""],
["", "pecheni-chushki-s-domaten-sos", "Печени чушки с доматен сос", "2,80", "350", ""],
["", "byurek", "Бюрек", "2,80", "200", ""],
["", "panirani-domati-s-topeno-sirene", "Панирани домати с топено сирене", "2,80", "300", ""],
["", "gorski-manatarki-zadusheni-v-maslo", "Горски манатарки задушени в масло", "6,30", "200", ""],
["", "pechurki-zapecheni-s-maslo", "Печурки запечени с масло", "2,80", "200", ""],
["", "panirani-sirencza-v-kashkavalena-koshnichka-s-med-orekhi-i-borovinki", "Панирани сиренца в кашкавалена кошничка с мед, орехи и боровинки", "3,50", "400", ""],
["", "topeni-sirencza-s-med-orekhi-i-borovinki", "Топени сиренца с мед, орехи и боровинки", "4,20", "400", ""],
["", "khapki-panirani-sirencza", "Хапки панирани сиренца", "2,80", "250", ""],
["", "barbekyu", "Барбекю", "0,70", "100", ""]

            ],

            "Месни предястия": [
                ["", "gbi-s-bekon-i-kashkaval", "Гъби с бекон и кашкавал", "3,50", "300", ""],
["", "pileshki-drobcheta-s-bekon", "Пилешки дробчета с бекон", "3,50", "350", ""],
["", "drusan-drob", "Друсан дроб", "2,80", "250", ""],
["", "khrupkavi-pileshki-purichki", "Хрупкави пилешки пурички", "3,50", "350", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "250", ""],
["", "pileshki-filencza-v-susam-med-i-chesn", "Пилешки филенца в сусам, мед и чесън", "3,50", "300", ""],
["", "veseli-pileshki-filencza", "Весели пилешки филенца", "4,20", "400", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,20", "250", ""],
["", "shkembe-zapecheno-s-topeno-sirene-i-domati", "Шкембе запечено с топено сирене и домати", "4,20", "350", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,90", "200", ""]

            ],

            "sachs": [
                ["", "ot-svinsko-meso", "От свинско месо", "7,70", "600", ""],
["", "ot-teleshko-meso", "От телешко месо", "13,30", "600", ""],
["", "ot-pileshko-meso", "От пилешко месо", "7,70", "600", ""],
["", "kasabski-sach", "Касабски сач", "8,40", "600", ""],
["", "selski-sach", "Селски сач", "7,00", "600", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "domashna-nadenicza-na-skara", "Домашна наденица на скара", "4,20", "400", ""],
["", "surov-sudzhuk", "Суров суджук", "4,90", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""],
["", "staroplaninski-shashlik", "Старопланински шашлик", "7,70", "450", ""],
["", "balkandzhijski-shashlik", "Балканджийски шашлик", "7,70", "450", ""],
["", "shashlik-na-gotvacha", "Шашлик на готвача", "11,20", "600", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "meshana-skara", "Мешана скара", "9,10", "500", ""]

            ],

            "Гювече": [
                ["", "sirene-po-shopski", "Сирене по Шопски", "3,50", "250", ""],
["", "kavrma-po-radomirski", "Кавърма по Радомирски", "5,60", "350", ""],
["", "gyuvech-po-trakijski", "Гювеч по Тракийски", "4,20", "350", ""],
["", "gyuvech-po-rodopski", "Гювеч по Родопски", "5,60", "350", ""],
["", "gyuvech-po-troyanski", "Гювеч по Троянски", "5,60", "350", ""]

            ],

            "Ястия от свинско": [
                ["", "svinsko-bon-file-s-manatarki", "Свинско бон филе с манатарки", "8,40", "400", ""],
["", "svinski-vrat-s-gbi-topeno-sirene-i-kashkaval", "Свински врат с гъби, топено сирене и кашкавал", "7,00", "450", ""],
["", "svinski-medalon-s-gben-sos-i-kartofeno-pyure", "Свински медальон с гъбен сос и картофено пюре", "7,70", "350", ""],
["", "svinski-dzholan-s-manatarkov-sos-i-zadusheni-kartofi", "Свински джолан с манатарков сос и задушени картофи", "8,40", "800", ""],
["", "svinska-drusana-przhola-s-gbi-i-luk", "Свинска друсана пържола с гъби и лук", "6,30", "400", ""],
["", "svinski-shniczel-po-vienski", "Свински шницел по Виенски", "5,60", "300", ""],
["", "svinski-rebra-ss-sos-barbekyu", "Свински ребра със сос барбекю", "5,60", "400", ""]

            ],

            "Ястия от телешко": [
                ["", "teleshki-stek", "Телешки стек", "9,80", "250", ""],
["", "teleshko-bon-file-na-skara", "Телешко бон филе на скара", "9,80", "250", ""],
["", "teleshko-starata-kshha", "Телешко Старата къща", "11,20", "400", ""],
["", "teleshko-po-troyanski", "Телешко по Троянски", "10,50", "450", ""],
["", "zadushen-teleshki-ezikv-khryanov-sos", "Задушен телешки езикв хрянов сос", "5,60", "250", ""]

            ],

            "Ястия от птица": [
                ["", "pileshko-file-s-manatarki", "Пилешко филе с манатарки", "7,00", "400", ""],
["", "pileshki-filencza-vrkhu-oriz-s-gben-sos", "Пилешки филенца върху ориз с гъбен сос", "5,60", "450", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "5,60", "350", ""],
["", "pileshki-filencza-s-gbi-i-brokoli-v-smetana", "Пилешки филенца с гъби и броколи в сметана", "5,60", "500", ""],
["", "pile-syurpriz", "Пиле Сюрприз", "5,60", "300", ""],
["", "pile-starata-kshha", "Пиле Старата къща", "5,60", "650", ""],
["", "pileshka-przhola-po-lovdzhijski", "Пилешка пържола по Ловджийски", "5,60", "450", ""],
["", "pileshka-drusana-przhola-s-gbi-i-luk", "Пилешка друсана пържола с гъби и лук", "5,60", "400", ""],
["", "pileshki-shniczel-po-vienski", "Пилешки шницел по Виенски", "4,90", "300", ""],
["", "tateshko-magre-s-dyuli-i-pyure-ot-grakh-i-menta", "Татешко магре с дюли и пюре от грах и мента", "10,50", "350", ""],
["", "pateshki-drob-s-praskovi", "Патешки дроб с праскови", "13,30", "350", ""]

            ],

            "Рибни ястия": [
                ["", "pstrva", "Пъстърва", "5,60", "250", ""],
["", "file-ot-pstrva", "Филе от пъстърва", "7,70", "250", ""],
["", "plnena-pstrva-vv-folio", "Пълнена пъстърва във фолио", "5,60", "300", ""],
["", "panirano-file-ot-byala-riba", "Панирано филе от бяла риба", "4,20", "300", ""],
["", "byala-riba-po-melnicharski", "Бяла риба по Мелничарски", "4,90", "400", ""],
["", "somga-ss-susam-i-zadusheni-zelenchuczi", "Сьомга със сусам и задушени зеленчуци", "11,20", "200", ""],
["", "czipura-ss-zadusheni-kartofi", "Ципура със задушени картофи", "8,40", "300", ""],
["", "lavrak-ss-zelenchuczi-na-skara", "Лаврак със зеленчуци на скара", "11,20", "250", ""],
["", "panirano-file-ot-som-sfiliran-badem-i-brokoli", "Панирано филе от сом сфилиран бадем и броколи", "9,10", "200", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "150", ""],
["", "kartofi-po-selski", "Картофи по селски", "1,40", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,00", "50", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "150", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "1,40", "200", ""],
["", "oriz", "Ориз", "0,00", "50", ""],
["", "lyutenicza-s-luk", "Лютеница с лук", "0,00", "50", ""]

            ],

            "sauces": [
                ["", "mlechen", "Млечен", "0,70", "100", ""],
["", "gben", "Гъбен", "0,70", "100", ""],
["", "chili", "Чили", "0,70", "100", ""],
["", "soev", "Соев", "0,70", "50", ""]

            ],

            "dry-appetizer": [
                ["", "sudzhuk", "Суджук", "4,20", "100", ""],
["", "pastrma", "Пастърма", "5,60", "100", ""],
["", "file-elena", "Филе Елена", "4,20", "100", ""],
["", "sirene", "Сирене", "1,40", "100", ""],
["", "kashkaval", "Кашкавал", "2,10", "100", ""],
["", "pryasno-sirene", "Прясно сирене", "2,10", "100", ""],
["", "sino-sirene", "Синьо сирене", "2,80", "100", ""],
["", "pitka", "Питка", "0,00", "120", ""]

            ],

            "bread": [
                ["", "prlenka-obiknovena", "Пърленка обикновена", "0,70", "120", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "0,70", "120", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "170", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "170", ""],
["", "prlenka-asorti", "Пърленка Асорти", "2,10", "200", ""]

            ],

            "desserts": [
                ["", "domashna-orekhova-torta-s-vanilov-krem", "Домашна орехова торта с ванилов крем", "2,10", "200", ""],
["", "domashna-torta-garash", "Домашна торта Гараш", "2,10", "200", ""],
["", "czedeno-kiselo-mlyako", "Цедено кисело мляко", "2,10", "250", ""],
["", "shokoladovo-sfle", "Шоколадово съфле", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'mehana-starata-kshcha',
        'business_name' => 'Механа Старата къща',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Troyan',
        'region' => 'Troyan',
        'postal_code' => '5600',
        'address' => 'ул. Ген. Карцов 86',
        'address_additional' => '',
        'coords_x' => '42.8794363',
        'coords_y' => '24.7091678',
        'phone' => '+359878123108',
        'email' => '',
        'website' => '',
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
                ["", "salata-shopska", "Салата Шопска", "3,50", "350", ""],
["", "salata-ovcharska", "Салата Овчарска", "4,20", "390", ""],
["", "salata-redena", "Салата Редена", "3,50", "360", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "350", ""],
["", "salata-frenska", "Салата Френска", "4,20", "390", ""],
["", "salata-grczka", "Салата Гръцка", "4,20", "380", ""],
["", "salata-rokfor", "Салата Рокфор", "4,20", "360", ""],
["", "salata-zelena", "Салата Зелена", "3,50", "350", ""],
["", "salata-riba-ton", "Салата Риба Тон", "4,20", "380", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "380", ""],
["", "salata-kartofena", "Салата Картофена", "2,80", "350", ""],
["", "salata-zele-s-morkovi", "Салата Зеле с моркови", "2,80", "350", ""],
["", "salata-midi", "Салата Миди", "4,20", "230", ""],
["", "salata-s-rulcza-ot-raczi", "Салата с рулца от раци", "4,20", "340", ""],
["", "salata-katk-s-pechena-chervena-chushka", "Салата Катък с печена червена чушка", "3,50", "300", ""],
["", "salata-snezhanka-s-czedeno-kiselo-mlyako-i-krastaviczi", "Салата Снежанка с цедено кисело мляко и краставици", "3,50", "300", ""]

            ],

            "Топли и студени предястия": [
                ["", "przheni-kartofi", "Пържени картофи", "2,80", "300", ""],
["", "domashen-chips", "Домашен чипс", "3,50", "300", ""],
["", "domashni-przheni-kartofi", "Домашни пържени картофи", "2,80", "300", ""],
["", "kartofi-sote-s-kopr-i-chesn", "Картофи Соте с копър и чесън", "3,50", "320", ""],
["", "khrupkavi-topeni-sirencza-ss-sladko-ot-borovinki", "Хрупкави топени сиренца със сладко от боровинки", "4,90", "260", ""],
["", "khrupkavi-pileshki-filencza-s-kornflejks-s-chesnov-sos-300gr", "Хрупкави пилешки филенца с корнфлейкс с чеснов сос (300гр)", "4,90", "", ""],
["", "marinovani-pileshki-krilcza", "Мариновани пилешки крилца", "4,20", "370", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "4,20", "200", ""],
["", "pileshki-drobcheto-po-selski-300gr", "Пилешки дробчето по селски (300гр)", "4,90", "", ""],
["", "svinski-drob-s-luk", "Свински дроб с лук", "4,20", "300", ""],
["", "gbi-v-maslo-miks", "Гъби в масло микс", "5,60", "220", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,90", "200", ""],
["", "teleshki-ezik-220gr", "Телешки език (220гр)", "6,30", "", ""],
["", "omlet-asorti", "Омлет асорти", "3,50", "280", ""],
["", "omlet-natyur", "Омлет натюр", "2,80", "250", ""],
["", "midi", "Миди", "5,60", "230", ""],
["", "rulcza-ot-raczi", "Рулца от раци", "4,90", "250", ""],
["", "kalmari-pane", "Калмари пане", "5,60", "250", ""],
["", "skaridi-po-sredizemnomorski", "Скариди по средиземноморски", "9,80", "250", ""],
["", "midi-v-cherupka", "Миди в черупка", "6,30", "400", ""],
["", "pipala-ot-kalmari-v-maslo", "Пипала от калмари в масло", "9,80", "220", ""],
["", "lukanka", "Луканка", "3,50", "100", ""],
["", "sudzhuk", "Суджук", "3,50", "10", ""],
["", "pastrma", "Пастърма", "4,20", "100", ""],
["", "file-elena", "филе Елена", "4,20", "100", ""],
["", "sirene", "Сирене", "2,10", "100", ""]

            ],

            "maindishes": [
                ["", "kashkaval-pane", "Кашкавал пане", "3,50", "220", ""],
["", "svinski-vienski-shniczel-s-kartofi-450gr", "Свински Виенски шницел с картофи (450гр)", "8,40", "", ""],
["", "sirene-po-shopski-380gr", "Сирене по Шопски (380гр)", "3,50", "", ""],
["", "gyuveche-po-chorbadzhijski-370gr", "Гювече по Чорбаджийски (370гр)", "4,20", "", ""],
["", "kavrma-v-gyuveche-ot-pileshko-meso", "Кавърма в гювече от пилешко месо", "4,90", "420", ""],
["", "kavrma-ot-gyuveche-ot-svinsko-meso", "Кавърма от гювече от свинско месо", "4,90", "420", ""],
["", "zapekanka-s-vareni-kartofi-smetana-pileshko-meso-i-kashkaval", "Запеканка с варени картофи, сметана, пилешко месо и кашкавал", "4,20", "420", ""],
["", "pile-rokfor", "Пиле Рокфор", "5,60", "400", ""],
["", "pile-zhulien", "Пиле Жулиен", "5,60", "400", ""],
["", "pile-piperone-400gr", "Пиле Пипероне (400гр)", "5,60", "", ""],
["", "okrekhkoteno-svinsko-meso-s-gbi-i-luk-400gr", "Окрехкотено свинско месо с гъби и лук (400гр)", "6,30", "", ""],
["", "sach-chorbadzhijski-s-tri-vida-mesa", "Сач Чорбаджийски с три вида меса", "11,90", "800", ""],
["", "sach-ss-svinsko-dzholanche-i-zelenchuczi", "Сач със свинско джоланче и зеленчуци", "11,90", "800", ""]

            ],

            "fish": [
                ["", "popcheta", "Попчета", "3,50", "200", ""],
["", "chernokop", "Чернокоп", "4,20", "200", ""],
["", "skumriya-na-skara", "Скумрия на скара", "4,20", "300", ""],
["", "skumriya-v-gondola", "Скумрия в гондола", "4,90", "400", ""],
["", "safrid", "Сафрид", "4,90", "200", ""],
["", "lavrak", "Лаврак", "9,10", "300", ""],
["", "czipura-300gr", "Ципура (300гр)", "9,10", "", ""],
["", "somga", "Сьомга", "11,20", "250", ""],
["", "akula-pane", "Акула пане", "6,30", "200", ""],
["", "khek-pane", "Хек пане", "5,60", "200", ""],
["", "pstrva", "Пъстърва", "6,30", "300", ""]

            ],

            "pasta": [
                ["", "spageti-karbonara", "Спагети Карбонара", "4,20", "420", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "420", ""],
["", "spageti-formadzho", "Спагети Формаджо", "4,20", "420", ""],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "4,20", "420", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,10", "", ""],
["", "nevrozno-kyufte", "Неврозно кюфте", "1,40", "", ""],
["", "svinsko-shishche", "Свинско шишче", "3,50", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "3,50", "", ""],
["", "svinski-kareta", "Свински карета", "5,60", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "220", ""],
["", "svinsko-bon-file", "Свинско бон филе", "7,70", "200", ""],
["", "svinski-rebra", "Свински ребра", "6,30", "350", ""],
["", "meshana-skara-ot-svinski-mesa", "Мешана скара от свински меса", "9,10", "540", ""],
["", "meshana-skara-ot-pileshki-mesa", "Мешана скара от пилешки меса", "9,80", "540", ""],
["", "shashlik-ot-sinsko-meso", "Шашлик от синско месо", "11,90", "400", ""],
["", "shashlik-ot-pileshko-meso", "Шашлик от пилешко месо", "11,90", "400", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "4,90", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "200", ""],
["", "pileshki-karencza", "Пилешки каренца", "4,20", "200", ""],
["", "pleskavicza", "Плескавица", "3,50", "200", ""],
["", "plnena-pleskavicza", "Пълнена плескавица", "4,20", "300", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "3,50", "300", ""],
["", "srbska-nadenicza", "Сръбска наденица", "3,50", "180", ""]

            ],

            "garnish": [
                ["", "sotirani-kartofi", "Сотирани картофи", "1,40", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "200", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "1,40", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""],
["", "varen-oriz", "Варен ориз", "1,40", "200", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "1,40", "", ""],
["", "palachinki", "Палачинки", "2,80", "", ""],
["", "biskvitena-torta", "Бисквитена торта", "2,10", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "1,40", "", ""],
["", "chijz-kejk", "Чийз кейк", "2,80", "", ""]

            ],

            "Coca-cola напитки": [
                ["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "1,40", "500", ""],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "1,40", "500", ""]

            ],

            "Безалкохолни напитки": [
                ["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "mineralna-voda", "Минерална вода", "1,40", "", ""],
["", "energijna-napitka-red-bul", "Енергийна напитка Ред Бул", "2,80", "250", ""]

            ],

            "Бутилирана бира": [
                ["", "zagorka", "Загорка", "1,40", "500", ""],
["", "zagorka-retro", "Загорка Ретро", "1,40", "500", ""],
["", "ariana", "Ариана", "1,40", "500", ""],
["", "ariana-radler", "Ариана Радлер", "1,40", "500", ""],
["", "shumensko", "Шуменско", "1,40", "500", ""],
["", "pirinsko", "Пиринско", "1,40", "500", ""],
["", "burgasko", "Бургаско", "1,40", "500", ""],
["", "khajniken", "Хайникен", "2,10", "500", ""]

            ],

            "Бутилирано вино": [
                ["", "verano-azur---sauvignon-blanc-byalo", "Verano Azur - Sauvignon Blanc Бяло", "11,90", "", ""],
["", "verano-azur-sauvignon-blanc-byalo", "Verano Azur Sauvignon Blanc бяло", "5,60", "", ""],
["", "verano-azur-roze", "Verano Azur Розе", "5,60", "", ""],
["", "cycle-cherveno", "Cycle червено", "4,90", "", ""]

            ]
        }', 
        'slug' => 'restorant-stil',
        'business_name' => 'Ресторант Стил',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kiten',
        'region' => 'Kiten',
        'postal_code' => '8183',
        'address' => 'Ул. Пирин 1',
        'address_additional' => '',
        'coords_x' => '42.23479129',
        'coords_y' => '27.77236846',
        'phone' => '+359897338974',
        'email' => '',
        'website' => '',
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
                ["", "zele-s-morkovi", "Зеле с моркови", "2,10", "350", ""],
["", "vrachanska-salata", "Врачанска салата", "2,10", "400", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "meshena-salata", "Мешена салата", "2,10", "350", ""],
["", "morkovi", "Моркови", "1,40", "300", ""],
["", "domati", "Домати", "2,10", "350", ""],
["", "domati-ss-sirene", "Домати със сирене", "2,10", "400", ""],
["", "krastaviczi", "Краставици", "2,10", "350", ""],
["", "krastaviczi-ss-sirene", "Краставици със сирене", "2,10", "400", ""],
["", "snezhanka", "Снежанка", "2,80", "300", ""],
["", "ruska-salata", "Руска салата", "2,10", "300", ""],
["", "svezha-salata", "Свежа салата", "2,80", "450", ""],
["", "salata-miks", "Салата Микс", "3,50", "500", ""],
["", "francheska", "Франческа", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "450", ""],
["", "italianska-salata", "Италианска салата", "2,80", "550", ""],
["", "salata-s-topeno-sirene", "Салата с топено сирене", "2,80", "360", ""],
["", "marchelo", "Марчело", "2,80", "400", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "350", ""],
["", "salata-ajsberg", "Салата Айсберг", "4,20", "450", ""],
["", "salata-trakijska", "Салата Тракийска", "2,80", "250", ""],
["", "salata-balkanska", "Салата Балканска", "2,80", "390", ""],
["", "salata-vitamina", "Салата Витамина", "2,10", "370", ""],
["", "salata-svishhovska", "Салата Свищовска", "2,80", "250", ""],
["", "salata-pile", "Салата Пиле", "2,80", "250", ""],
["", "salata-dezhavyu", "Салата Дежавю", "4,20", "700", ""],
["", "salata-teksas", "Салата Тексас", "2,80", "500", ""],
["", "salata-moczarela", "Салата Моцарела", "4,20", "350", ""],
["", "kashkavalcheta-v-bekon-na-skara", "Кашкавалчета в бекон на скара", "2,10", "300", ""],
["", "pileshki-drobcheta-po-lovdzhijski", "Пилешки дробчета по ловджийски", "2,80", "300", ""],
["", "zapecheno-avokado-s-moczarela-i-sladko-ot-borovinki", "Запечено авокадо с моцарела и сладко от боровинки", "4,90", "350", ""],
["", "teleshki-ezik-s-gbi-i-chesn-v-speczialen-sos", "Телешки език с гъби и чесън в специален сос", "4,90", "250", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "4,90", "250", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,80", "300", ""]

            ],

            "starters": [
                ["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "panirani-sirencza", "Панирани сиренца", "2,80", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "sirencza-v-bekon-na-skara", "Сиренца в бекон на скара", "2,10", "350", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "350", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "3,50", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "200", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshki-karencza-s-parmezan", "Пилешки каренца с пармезан", "5,60", "700", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "300", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "250", ""],
["", "pileshki-zhulieni-ss-susam", "Пилешки жулиени със сусам", "4,20", "350", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "300", ""],
["", "pileshki-karencza-na-skara", "Пилешки каренца на скара", "4,20", "250", ""],
["", "pile-ss-sladko-kisel-sos", "Пиле със сладко кисел сос", "4,90", "300", ""],
["", "pile-chetiri-sirena", "Пиле Четири сирена", "4,90", "300", ""],
["", "pile-naslada", "Пиле Наслада", "4,90", "300", ""],
["", "pile-s-gben-sos", "Пиле с гъбен сос", "4,90", "300", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "140", ""],
["", "pileshka-przhola", "Пилешка пържола", "3,50", "250", ""],
["", "pileshki-krilcza-na-skara", "Пилешки крилца на скара", "3,50", "500", ""],
["", "panirani-krilcza", "Панирани крилца", "4,20", "500", ""],
["", "shish-tauk", "Шиш таук", "4,90", "400", ""]

            ],

            "Ястия от свинско месо": [
                ["", "krnache", "Кърначе", "1,40", "250", ""],
["", "vratna-przhola", "Вратна пържола", "4,90", "250", ""],
["", "shishche", "Шишче", "1,40", "140", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "svinski-karencza", "Свински каренца", "4,90", "450", ""],
["", "pepr", "Пепър", "4,90", "350", ""],
["", "dejzi", "Дейзи", "4,90", "350", ""],
["", "dezhavyu", "Дежавю", "4,90", "350", ""],
["", "svinski-kareta-s-gben-sos", "Свински карета с гъбен сос", "4,90", "300", ""]

            ],

            "Спагети и Ризото": [
                ["", "makaronada", "Макаронада", "3,50", "450", ""],
["", "karbonara", "Карбонара", "4,20", "450", ""],
["", "spageti-natyur", "Спагети натюр", "1,40", "300", ""],
["", "razkosh", "Разкош", "2,80", "550", ""],
["", "boloneze", "Болонезе", "3,50", "450", ""],
["", "aliolio", "Алиолио", "3,50", "450", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "350", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,90", "350", ""]

            ],

            "Омлети": [
                ["", "omlet-s-bekon-gbi-i-kashkaval", "Омлет с бекон, гъби и кашкавал", "2,80", "400", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "300", ""],
["", "omlet-s-shunka-i-kashkaval", "Омлет с шунка и кашкавал", "2,80", "350", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "", ""],
["", "omlet-natyur", "Омлет натюр", "1,40", "250", ""],
["", "omlet-ss-sirene-shunka-bekon-i-kashkaval", "Омлет със сирене, шунка, бекон и кашкавал", "2,80", "450", ""]

            ],

            "Принцеси": [
                ["", "princzesa-s-lukanka-i-kashkaval", "Принцеса с луканка и кашкавал", "2,80", "310", ""],
["", "princzesa-s-kashkval", "Принцеса с кашквал", "2,10", "240", ""],
["", "princzesa-s-yajcze-i-sirene", "Принцеса с яйце и сирене", "2,10", "200", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "2,80", "320", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "2,10", "300", ""],
["", "princzesa-s-bekon-shunka-i-kashkaval", "Принцеса с бекон, шунка и кашкавал", "2,80", "320", ""]

            ],

            "Солени палачинки": [
                ["", "palachinka-ss-sirene", "Палачинка със сирене", "2,10", "350", ""],
["", "palachinka-s-lukanka-i-kashkaval", "Палачинка с луканка и кашкавал", "2,10", "350", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "2,10", "350", ""],
["", "palachinka-s-shunka-i-kashkaval", "Палачинка с шунка и кашкавал", "2,10", "350", ""],
["", "palachinka-ss-sirene-i-kashkaval", "Палачинка със сирене и кашкавал", "2,10", "350", ""],
["", "palachinka-s-shunka-bekon-i-kashkaval", "Палачинка с шунка, бекон и кашкавал", "2,80", "400", ""]

            ],

            "Сладки палачинки": [
                ["", "palachinka-s-banani-i-shokolad", "Палачинка с банани и шоколад", "3,50", "700", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "2,80", "700", ""],
["", "palachinka-s-med", "Палачинка с мед", "2,80", "700", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "2,80", "700", ""]

            ],

            "sauces": [
                ["", "pikanten", "Пикантен", "0,00", "30", ""],
["", "mlechen", "Млечен", "0,00", "40", ""],
["", "chesnov", "Чеснов", "0,00", "40", ""]

            ],

            "Рибни предложения": [
                ["", "lavrak-na-skara", "Лаврак на скара", "5,60", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "4,90", "300", ""],
["", "balkanska-pstrva", "Балканска пъстърва", "4,20", "300", ""],
["", "file-ot-byala-riba-pane", "Филе от бяла риба пане", "2,10", "300", ""]

            ],

            "pizza": [
                ["", "kalczone", "Калцоне", "4,20", "", ""],
["", "dezhavyu", "Дежавю", "4,90", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "vegetarianska", "Вегетарианска", "4,20", "", ""],
["", "roma", "Рома", "4,20", "", ""],
["", "toskana", "Тоскана", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "proshuto", "Прошуто", "4,20", "", ""],
["", "stela", "Стела", "4,20", "", ""],
["", "bari", "Бари", "4,20", "", ""],
["", "milano", "Милано", "4,20", "", ""],
["", "peperoni", "Пеперони", "4,20", "", ""],
["", "mikele", "Микеле", "4,20", "", ""],
["", "kaprizniya-shef", "Капризния шеф", "3,50", "", ""],
["", "bili", "Били", "4,20", "", ""],
["", "kariola", "Кариола", "3,50", "", ""],
["", "kuoko", "Куоко", "3,50", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "4,90", "", ""],
["", "khavaj", "Хавай", "4,20", "", ""],
["", "chetiri-sezona", "Четири сезона", "4,20", "", ""]

            ],

            "garnish": [
                ["", "svezha-garnitura", "Свежа гарнитура", "2,10", "300", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,10", "250", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "250", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "2,10", "300", ""],
["", "studena-garnitura", "Студена гарнитура", "1,40", "300", ""],
["", "zele-s-morkovi", "Зеле с моркови", "1,40", "300", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "1,40", "300", ""]

            ],

            "Гювечета": [
                ["", "ogreten", "Огретен", "2,80", "600", ""],
["", "gyuveche-po-ovcharski", "Гювече по овчарски", "2,80", "400", ""],
["", "bolyarsko-gyuveche", "Болярско гювече", "3,50", "400", ""],
["", "pile-v-gyuveche", "Пиле в гювече", "4,20", "500", ""],
["", "brokoli-s-bekon", "Броколи с бекон", "3,50", "500", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "300", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "1,40", "200", ""],
["", "prlenka-obiknovena", "Пърленка обикновена", "1,40", "200", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "400", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "300", ""],
["", "pitka", "Питка", "0,00", "150", ""],
["", "filiya", "Филия", "0,00", "", ""]

            ]
        }', 
        'slug' => 'gostilnica-deja-vu',
        'business_name' => 'Гостилница Deja Vu',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Svishtov',
        'region' => 'Svishtov',
        'postal_code' => '5250',
        'address' => 'Ул. Димитър Хадживасилев 14',
        'address_additional' => '',
        'coords_x' => '43.61748125',
        'coords_y' => '25.34736145',
        'phone' => '+359878936568',
        'email' => '',
        'website' => '',
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
                ["", "italianska-zakuska", "Италианска закуска", "0,70", "", ""],
["", "selska-zakuska", "Селска закуска", "0,70", "", ""],
["", "mariachi", "Мариачи", "0,70", "", ""],
["", "milinka", "Милинка", "0,70", "", ""],
["", "kashkavalka", "Кашкавалка", "0,70", "", ""],
["", "tofunka", "Тофунка", "0,70", "", ""]

            ],

            "Баници": [
                ["", "klasicheska-banichka", "Класическа баничка", "0,70", "", ""],
["", "malka-vita-banicza-ss-sirene-i-maslo", "Малка вита баница със сирене и масло", "4,20", "", ""],
["", "golyama-vita-banicza-ss-sirene-i-maslo", "Голяма вита баница със сирене и масло", "9,10", "", ""],
["", "banichka-s-maslo-i-sirene", "Баничка с масло и сирене", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "ajryan-balkan", "Айрян Балкан", "0,70", "330", ""],
["", "ajryan-balkan-plodov", "Айрян Балкан плодов", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1082500.jpg?width=302"],
["", "boza-yavor-m-komers", "Боза Явор М Комерс", "0,00", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1082502.jpg?width=302"],
["", "boza-yavor-m-komers", "Боза Явор-М Комерс", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1082503.jpg?width=302"],
["", "mineralna-voda", "Минерална вода", "0,00", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "queens", "Queens", "0,70", "", ""]

            ]
        }', 
        'slug' => 'banicharnica-banichki-s-lyubov',
        'business_name' => 'Баничарница Банички с любов',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vratsa',
        'region' => 'Vratsa',
        'postal_code' => '3000',
        'address' => 'ул. Иванка Ботева 21',
        'address_additional' => '',
        'coords_x' => '43.20620396',
        'coords_y' => '23.54995387',
        'phone' => '+359876752310',
        'email' => '',
        'website' => '',
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
                ["", "salata-roka", "Салата Рока", "3,50", "250", ""],
["", "salata-krit", "Салата Крит", "2,80", "350", ""],
["", "salata-kobb", "Салата Кобб", "2,80", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "kapreze", "Капрезе", "4,90", "400", ""],
["", "vitamina", "Витамина", "2,80", "330", ""],
["", "czezar", "Цезар", "4,20", "350", ""],
["", "ajsberg-s-rukola", "Айсберг с рукола", "3,50", "250", ""]

            ],

            "starters": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "200", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "0,70", "200", ""],
["", "kntri-kartofki", "Кънтри картофки", "1,40", "220", ""],
["", "kouslou", "Коуслоу", "0,70", "200", ""]

            ],

            "burgers": [
                ["", "klasik-burger", "Класик бургер", "3,50", "300", ""],
["", "chijz-burger", "Чийз бургер", "4,20", "320", ""],
["", "nizza-burger", "Nizza бургер", "4,20", "400", ""],
["", "pileshki-burger", "Пилешки бургер", "3,50", "280", ""],
["", "krispi-burger", "Криспи бургер", "4,20", "300", ""],
["", "toro-burger", "Торо бургер", "4,20", "350", ""],
["", "smouki-burger", "Смоуки бургер", "4,20", "340", ""],
["", "puld-pork-burger", "Пулд Порк бургер", "4,20", "350", ""],
["", "kaliforniya-burger-350gr0", "Калифорния бургер (350гр0", "4,90", "", ""],
["", "mistr-big-burger", "Мистър Биг бургер", "7,00", "620", ""],
["", "spajsi-najsi-burger", "Спайси Найси бургер", "4,20", "320", ""],
["", "riben-burger", "Рибен бургер", "5,60", "300", ""],
["", "vedzhi-burger", "Веджи бургер", "3,50", "330", ""],
["", "detski-burger-menyu", "Детски бургер меню", "4,20", "400", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,80", "", ""],
["", "polo", "Поло", "3,50", "", ""],
["", "alfredo", "Алфредо", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,90", "", ""],
["", "nicza", "Ница", "4,90", "", ""],
["", "peperoni", "Пеперони", "4,90", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "7,00", "", ""],
["", "kuatro-di-karne", "Куатро Ди Карне", "5,60", "", ""],
["", "diavolo", "Диаволо", "4,90", "", ""],
["", "italiya", "Италия", "5,60", "", ""],
["", "karbonara", "Карбонара", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "3,50", "", ""],
["", "amerikano-bbq", "Американо BBQ", "4,90", "", ""],
["", "salami", "Салами", "4,90", "", ""],
["", "meksikana", "Мексикана", "4,90", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "кетчуп", "0,00", "50", ""],
["", "majoneza", "майонеза", "0,00", "50", ""],
["", "gorchicza", "горчица", "0,00", "50", ""],
["", "chili-sos", "чили сос", "0,00", "50", ""],
["", "chesnov-sos", "чеснов сос", "0,00", "50", ""],
["", "barbekyu-sos", "барбекю сос", "0,00", "30", ""],
["", "pesto", "песто", "1,40", "30", ""],
["", "sladko-chili", "сладко чили", "0,00", "300", ""]

            ],

            "desserts": [
                ["", "chijz-kejk", "Чийз Кейк", "2,10", "", ""],
["", "blek-forest", "Блек Форест", "2,10", "", ""],
["", "krem-vaniliya", "Крем Ванилия", "2,10", "", ""]

            ],

            "Фрешове": [
                ["", "fresh-grejpfrut", "Фреш Грейпфрут", "2,10", "", ""],
["", "fresh-portokal", "Фреш Портокал", "2,10", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "soda", "Сода", "0,70", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,00", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "ajryan", "Айрян", "0,70", "400", ""],
["", "zagorka", "Загорка", "1,40", "500", ""],
["", "ariana", "Ариана", "1,40", "500", ""],
["", "khajniken", "Хайникен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'pizza-burgers-nizza',
        'business_name' => 'Pizza &amp; Burgers Nizza',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Petrich',
        'region' => 'Petrich',
        'postal_code' => '2850',
        'address' => 'площад Възраждане 2',
        'address_additional' => '',
        'coords_x' => '41.3920403',
        'coords_y' => '23.2082603',
        'phone' => '+359884840412',
        'email' => '',
        'website' => '',
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
                ["", "mlechna-salata", "Млечна салата", "4,90", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "350", ""],
["", "grczka-salata", "Гръцка салата", "4,90", "400", ""],
["", "shopska-salata", "Шопска салата", "4,20", "400", ""],
["", "salata-czezar", "Салата Цезар", "6,30", "350", ""],
["", "ajsberg-s-ovche-sirene-zaara", "Айсберг с овче сирене Заара", "6,30", "350", ""],
["", "zelenchukov-milfoj", "Зеленчуков милфьой", "5,60", "400", ""],
["", "salata-zaara", "Салата Заара", "5,60", "350", ""],
["", "miks-ot-zeleni-salatiki-s-riba-ton", "Микс от зелени салатики с риба тон", "5,60", "350", ""]

            ],

            "soups": [
                ["", "domatena-krem-supa-s-parmezan", "Доматена крем супа с пармезан", "2,80", "300", ""],
["", "pileshka-supa", "Пилешка супа", "2,80", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "Омлети": [
                ["", "omlet-ss-sirene-i-kashkaval", "Омлет със сирене и кашкавал", "3,50", "350", ""],
["", "omlet-s-shunka-i-kashkaval", "Омлет с шунка и кашкавал", "3,50", "350", ""],
["", "naturalen-omlet", "Натурален омлет", "2,10", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "250", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "250", ""],
["", "zelenchukov-omlet", "Зеленчуков омлет", "3,50", "300", ""],
["", "yajcza-obedna-zakuska", "Яйца обедна закуска", "4,20", "300", ""]

            ],

            "starters": [
                ["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "300", ""],
["", "khrupkavi-pileshki-filencza", "Хрупкави пилешки филенца", "5,60", "300", ""],
["", "sotirani-kalmari-ss-zekhtin-kopr-i-chesn", "Сотирани калмари със зехтин, копър и чесън", "8,40", "200", ""],
["", "panirani-kalmari-vrkhu-zeleni-salatki", "Панирани калмари върху зелени салатки", "9,10", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "3,50", "250", ""],
["", "bilkovi-kartofeni-shajbi", "Билкови картофени шайби", "3,50", "250", ""],
["", "khrupkav-kartofen-chips", "Хрупкав картофен чипс", "3,50", "250", ""]

            ],

            "fish": [
                ["", "pstrva-na-skara", "Пъстърва на скара", "9,10", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "10,50", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "10,50", "300", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshko-file-v-sladko-chili", "Пилешко филе в сладко чили", "7,00", "220", ""],
["", "pile-latino", "Пиле Латино", "7,70", "350", ""],
["", "pileshko-file-ss-gorski-gbi-i-sirene-bri", "Пилешко филе със горски гъби и сирене Бри", "9,10", "350", ""],
["", "pile-ss-sos-ot-sirena", "Пиле със сос от сирена", "7,70", "350", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "6,30", "220", ""],
["", "pileshko-file-s-medena-glazura", "Пилешко филе с медена глазура", "6,30", "220", ""]

            ],

            "Ястия от свинско месо": [
                ["", "pikantni-svinski-karencza", "Пикантни свински каренца", "9,10", "350", ""],
["", "svinska-vratna-przhola-v-pikantna-marinata", "Свинска вратна пържола в пикантна марината", "5,60", "200", ""],
["", "glazirani-rebrcza-v-barbekyu-sos", "Глазирани ребърца в барбекю сос", "9,80", "500", ""],
["", "svinsko-file-na-skara", "Свинско филе на скара", "5,60", "200", ""],
["", "obezkosteno-svinsko-dzholanche", "Обезкостено свинско джоланче", "8,40", "350", ""],
["", "kebapche-na-skara", "Кебапче на скара", "0,70", "80", ""],
["", "kyufte-na-skara", "Кюфте на скара", "0,70", "80", ""]

            ],

            "Вегетариански ястия": [
                ["", "rizoto-ss-zelenchuczi-i-kri", "Ризото със зеленчуци и къри", "4,90", "300", ""],
["", "rizoto-s-gorski-gbi", "Ризото с горски гъби", "5,60", "300", ""]

            ],

            "pizza": [
                ["", "picza-s-shunka", "Пица с шунка", "6,30", "350", ""],
["", "picza-margarita", "Пица Маргарита", "4,90", "350", ""],
["", "picza-s-lukankov-salam", "Пица с луканков салам", "6,30", "350", ""]

            ],

            "pasta": [
                ["", "taliateli-s-pile-i-brokoli", "Талиатели с пиле и броколи", "6,30", "300", ""],
["", "spageti-s-pileshko-file-i-miks-gorski-gbi", "Спагети с пилешко филе и микс горски гъби", "6,30", "300", ""],
["", "taliateli-anatra", "Талиатели Анатра", "6,30", "300", ""],
["", "spageti-s-bosilkovo-pesto-domaten-sos-i-parmezan", "Спагети с босилково песто, доматен сос и пармезан", "4,90", "300", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-pechen-bekon-i-przheni-kartofi", "Сандвич с печен бекон и пържени картофи", "4,90", "", ""],
["", "sandvich-s-shunka-i-przheni-kartofi", "Сандвич с шунка и пържени картофи", "4,90", "", ""]

            ],

            "bread": [
                ["", "soft-bageta", "Софт багета", "1,40", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "chabata", "Чабата", "1,40", "", ""],
["", "bageta-s-maslo-i-chesnov-krem", "Багета с масло и чеснов крем", "1,40", "", ""],
["", "grczka-pitka", "Гръцка питка", "0,70", "", ""]

            ],

            "desserts": [
                ["", "chijzkejk-s-plodove", "Чийзкейк с плодове", "2,80", "150", ""],
["", "biskvitena-torta-s-techen-shokolad", "Бисквитена торта с течен шоколад", "3,50", "150", ""]

            ],

            "drinks": [
                ["", "fresh-s-portokal-i-grejpfrut", "Фреш с портокал и грейпфрут", "2,80", "150", ""],
["", "fresh-s-portokal", "Фреш с портокал", "2,80", "150", ""],
["", "fresh-s-portokal-i-morkov", "Фреш с портокал и морков", "2,80", "150", ""],
["", "czitronada", "Цитронада", "2,80", "200", ""],
["", "ajryan", "Айрян", "0,70", "200", ""],
["", "energijna-napitka-monstr", "Енергийна напитка Монстър", "2,80", "500", ""],
["", "energijna-napitka-red-bul", "Енергийна напитка Ред Бул", "2,80", "250", ""],
["", "energijna-napitka-khel", "Енергийна напитка Хел", "1,40", "250", ""]

            ],

            "Coca-Cola напитки": [
                ["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "2,10", "1500", ""]

            ],

            "beer": [
                ["", "beks", "Бекс", "1,40", "500", ""],
["", "shumensko", "Шуменско", "1,40", "500", ""],
["", "kamenicza", "Каменица", "1,40", "500", ""],
["", "zagorka-retro", "Загорка Ретро", "1,40", "500", ""],
["", "beks", "Бекс", "2,10", "330", ""],
["", "beks-bezalkokholna", "Бекс безалкохолна", "2,10", "330", ""],
["", "stela-artoa", "Стела Артоа", "2,10", "500", ""],
["", "stela-artoa", "Стела Артоа", "2,10", "330", ""],
["", "staropramen", "Старопрамен", "1,40", "500", ""],
["", "korona", "Корона", "4,20", "355", ""],
["", "mlado-pivo", "Младо пиво", "1,40", "330", ""],
["", "samrsbi", "Самърсби", "2,10", "330", ""]

            ]
        }', 
        'slug' => 'restaurant-zaara',
        'business_name' => 'Restaurant Zaara',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Slanchev Bryag',
        'region' => 'Slanchev Bryag',
        'postal_code' => '8230',
        'address' => 'Фрегата, Хотел Заара',
        'address_additional' => '',
        'coords_x' => '42.67667593',
        'coords_y' => '27.70614268',
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
            
            "sandwiches": [
                ["", "sandvich-s-leberkez", "Сандвич с леберкез", "1,40", "", ""],
["", "sandvich-s-pileshko-role", "Сандвич с пилешко роле", "2,10", "", ""],
["", "sandvich-s-shunka", "Сандвич с шунка", "2,10", "", ""],
["", "sandvich-s-file", "Сандвич с филе", "2,10", "", ""],
["", "sandvich-s-lukanka", "Сандвич с луканка", "2,10", "", ""],
["", "sandvich-ss-sirene", "Сандвич със сирене", "1,40", "", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "2,10", "", ""],
["", "sandvich-s-pusheno-topeno-sirene", "Сандвич с пушено топено сирене", "2,10", "", ""]

            ],

            "Хамбургери": [
                ["", "khamburger-s-pileshko-meso", "Хамбургер с пилешко месо", "2,10", "", ""],
["", "khamburger-ss-svinsko-meso", "Хамбургер със свинско месо", "2,10", "", ""]

            ],

            "Солени палачинки": [
                ["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "2,10", "", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "1,40", "", ""],
["", "palachinka-ss-sirene-i-kashkaval", "Палачинка със сирене и кашкавал", "2,10", "", ""],
["", "palachinka-s-shunka-i-kashkaval", "Палачинка с шунка и кашкавал", "2,10", "", ""]

            ],

            "Сладки палачинки": [
                ["", "palachinka-s-yagodi", "Палачинка с ягоди", "1,40", "", ""],
["", "palachinka-s-borovinki", "Палачинка с боровинки", "1,40", "", ""],
["", "palachinka-s-malini", "Палачинка с малини", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""]

            ],

            "drinks": [
                ["", "studen-chaj", "Студен чай", "1,40", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'flora-burger',
        'business_name' => 'Flora Burger',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kyustendil',
        'region' => 'Kyustendil',
        'postal_code' => '2503',
        'address' => 'бул. България 6',
        'address_additional' => '',
        'coords_x' => '42.28192903',
        'coords_y' => '22.6875576',
        'phone' => '+359888200208',
        'email' => '',
        'website' => '',
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
                ["", "selska-salata", "Селска салата", "2,80", "350", ""],
["", "shopska-salata", "Шопска салата", "2,10", "250", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "200", ""],
["", "krastaviczi", "Краставици", "2,10", "200", ""],
["", "domati", "Домати", "2,10", "200", ""],
["", "salata-akropola", "Салата Акропола", "2,80", "300", ""],
["", "salata-s-riba-ton", "Салата с риба тон", "3,50", "350", ""],
["", "meshana-salata", "Мешана салата", "2,10", "200", ""],
["", "kopoolu", "Кьопоолу", "2,10", "150", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "350", ""],
["", "zelena-salata-s-yajcza", "Зелена салата с яйца", "2,80", "250", ""],
["", "snezhanka", "Снежанка", "2,10", "220", ""],
["", "meksikanska", "Мексиканска", "2,80", "350", ""],
["", "ruska-salata", "Руска салата", "2,10", "200", ""],
["", "salata-ot-midi", "Салата от миди", "2,80", "200", ""],
["", "salata-ot-marinovana-riba", "Салата от маринована риба", "2,10", "200", ""],
["", "salata-pechen-piper", "Салата печен пипер", "2,10", "200", ""],
["", "domati-s-plochka-sirene", "Домати с плочка сирене", "2,80", "300", ""],
["", "salata-prezident", "Салата Президент", "3,50", "450", ""]

            ],

            "soups": [
                ["", "supa-topcheta", "Супа топчета", "1,40", "300", ""],
["", "midena-supa", "Мидена супа", "2,10", "300", ""],
["", "teleshko-vareno", "Телешко варено", "2,10", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "ribena-chorba", "Рибена чорба", "2,10", "300", ""],
["", "supa-ot-gbi", "Супа от гъби", "1,40", "300", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "300", ""],
["", "bob-chorba", "Боб чорба", "1,40", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "Закуски": [
                ["", "zakuska-komple", "Закуска компле", "3,50", "300", ""],
["", "spageti", "Спагети", "2,80", "300", ""],
["", "picza-asorti", "Пица асорти", "4,90", "450", ""],
["", "picza-margarita", "Пица Маргарита", "4,90", "450", ""],
["", "picza-s-riba-ton", "Пица с риба тон", "5,60", "450", ""],
["", "sandvich-kombiniran", "Сандвич комбиниран", "2,10", "180", ""],
["", "vareni-yajcza", "Варени яйца", "0,70", "", ""],
["", "paketche-maslo", "Пакетче масло", "0,70", "", ""],
["", "konfityur", "Конфитюр", "0,00", "", ""],
["", "med", "Мед", "0,00", "", ""],
["", "lazaniya", "Лазания", "4,90", "200", ""]

            ],

            "starters": [
                ["", "ezik-v-maslo", "Език в масло", "5,60", "220", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "250", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "3,50", "250", ""],
["", "panirani-zhabeshki-bucheta-", "Панирани жабешки бучета (", "4,90", "180", ""],
["", "pile-v-palachinka", "Пиле в палачинка", "2,80", "150", ""],
["", "shunka-po-moskovski", "Шунка по московски", "3,50", "280", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "250", ""],
["", "sirene-orli", "Сирене орли", "3,50", "220", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "250", ""],
["", "ezik-pane", "Език пане", "4,90", "220", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "220", ""],
["", "chushka-byurek", "Чушка бюрек", "2,80", "150", ""],
["", "przheni-tikvichki", "Пържени тиквички", "2,80", "250", ""],
["", "pileshki-srcza-v-soev-sos", "Пилешки сърца в соев сос", "3,50", "300", ""]

            ],

            "alaminuti": [
                ["", "shniczel-po-vienski", "Шницел по виенски", "6,30", "300", ""],
["", "stek-kodon-blyu", "Стек кодон блю", "7,00", "300", ""],
["", "stek-antoaneta", "Стек Антоанета", "7,70", "300", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "7,00", "350", ""],
["", "ramstek-s-luk", "Рамстек с лук", "7,70", "300", ""],
["", "svinska-kavrma", "Свинска кавърма", "5,60", "350", ""],
["", "svinska-przhola-s-gbi", "Свинска пържола с гъби", "5,60", "350", ""],
["", "svinski-kareta-s-gbi", "Свински карета с гъби", "6,30", "", ""]

            ],

            "Омлети": [
                ["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "200", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "200", ""],
["", "omlet-asorti", "Омлет асорти", "4,20", "250", ""],
["", "brkani-yajcza-ss-sirene", "Бъркани яйца със сирене", "2,80", "200", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,80", "200", ""],
["", "omlet-s-gbi", "Омлет с гъби", "2,80", "200", ""],
["", "omlet-natyur", "Омлет натюр", "2,80", "150", ""],
["", "yajcza-s-bekon", "Яйца с бекон", "4,20", "200", ""],
["", "mish-mash", "Миш-маш", "3,50", "", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "3,50", "250", ""]

            ],

            "Свинска скара": [
                ["", "svinska-przhola-ot-vrat", "Свинска пържола от врат", "5,60", "220", ""],
["", "pleskavicza", "Плескавица", "4,20", "220", ""],
["", "rebrcza", "Ребърца", "4,90", "220", ""],
["", "meshana-skara", "Мешана скара", "9,80", "430", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "shishche", "Шишче", "1,40", "90", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,10", "160", ""],
["", "nevrozno-kyufte", "Неврозно кюфте", "0,70", "80", ""],
["", "gondola", "Гондола", "16,10", "480", ""],
["", "svinski-sach", "Свински сач", "12,60", "600", ""]

            ],

            "Морски плата": [
                ["", "plato-morski-dar", "Плато морски дар", "9,10", "500", ""],
["", "ribno-plato", "Рибно плато", "10,50", "500", ""]

            ],

            "fish": [
                ["", "karagoz-na-skara", "Карагьоз на скара", "5,60", "300", ""],
["", "palamud-na-skara", "Паламуд на скара", "11,20", "350", ""],
["", "lavrak", "Лаврак", "11,90", "300", ""],
["", "czipura", "Ципура", "11,90", "300", ""],
["", "chernokop", "Чернокоп", "6,30", "250", ""],
["", "popcheta", "Попчета", "3,50", "250", ""],
["", "safrid", "Сафрид", "5,60", "250", ""],
["", "czacza", "Цаца", "2,80", "250", ""],
["", "file-ot-akula", "Филе от акула", "4,90", "250", ""],
["", "file-ot-byala-riba", "Филе от бяла риба", "4,20", "250", ""],
["", "skumriya-na-skara", "Скумрия на скара", "4,20", "300", ""],
["", "kalkan", "Калкан", "22,40", "250", ""],
["", "zargan", "Зарган", "5,60", "200", ""],
["", "pstrva", "Пъстърва", "5,60", "", ""],
["", "barbun", "Барбун", "4,20", "300", ""],
["", "pipala-ot-oktopod", "Пипала от октопод", "8,40", "180", ""],
["", "kalmari-pane", "Калмари пане", "5,60", "150", ""],
["", "raczi", "Раци", "4,20", "", ""],
["", "midi-pane", "Mиди пане", "4,20", "200", ""],
["", "skaridi", "Скариди", "8,40", "180", ""],
["", "rapani-pane", "Рапани пане", "4,90", "150", ""],
["", "midi-natyur", "Миди натюр", "5,60", "800", ""]

            ],

            "Пилешки ястия": [
                ["", "pileshka-przhola", "Пилешка пържола", "4,90", "200", ""],
["", "pileshka-meshana-skara", "Пилешка мешана скара", "5,60", "320", ""],
["", "pileshki-sach", "Пилешки сач", "11,20", "600", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "4,90", "350", ""],
["", "pileshka-pleskavicza", "Пилешка плескавица", "3,50", "220", ""],
["", "krilcza-chudo", "Крилца  чудо", "4,20", "300", ""],
["", "pileshki-shniczel", "Пилешки шницел", "4,90", "300", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "90", ""],
["", "pile-na-gril-12", "Пиле на грил 1/2", "4,20", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "4,90", "350", ""]

            ],

            "Агнешка скара": [
                ["", "shishche", "Шишче", "2,80", "90", ""],
["", "agneshka-kavrma", "Агнешка кавърма", "7,70", "400", ""],
["", "agneshko-pecheno", "Агнешко печено", "12,60", "300", ""],
["", "agneshka-przhola", "Агнешка пържола", "11,20", "200", ""]

            ],

            "desserts": [
                ["", "bananov-split", "Бананов сплит", "2,80", "200", ""],
["", "plodova-salata", "Плодова салата", "2,80", "250", ""],
["", "sladoledeno-kiselo-mlyako", "Сладоледено кисело мляко", "3,50", "135", ""],
["", "palachinka", "Палачинка", "1,40", "100", ""],
["", "shokolad", "Шоколад", "2,10", "100", ""],
["", "sladoledena-torta", "Сладоледена торта", "2,80", "150", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,80", "300", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "2,10", "300", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,80", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "200", ""],
["", "vareni-kartofi-s-maslo", "Варени картофи с масло", "2,10", "200", ""],
["", "zadushen-oriz", "Задушен ориз", "1,40", "150", ""],
["", "przheni-kartofi-po-selski", "Пържени картофи по селски", "1,40", "180", ""],
["", "lyutenicza", "Лютеница", "1,40", "150", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "2,10", "300", ""]

            ],

            "sauces": [
                ["", "bolyarski-sos", "Болярски сос", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "gben-sos", "Гъбен сос", "1,40", "200", ""]

            ],

            "bread": [
                ["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "chesnova-prlenska", "Чеснова пърленска", "1,40", "110", ""],
["", "khlyab-prepechen", "Хляб препечен", "0,00", "", ""],
["", "khlyab-chesnov", "Хляб чеснов", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "2,10", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1005747.jpg?width=302"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "2,10", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1005748.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "2,10", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1005749.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "2,10", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1005750.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "2,10", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1005752.jpg?width=302"]

            ],

            "drinks": [
                ["", "mineralna-voda-devin", "Минерална вода Девин", "0,70", "500", ""],
["", "studen-chaj-nestea", "Студен чай Nestea", "1,40", "500", ""],
["", "ajryan", "Айрян", "0,70", "250", ""],
["", "energijna-napitka", "Енергийна напитка", "3,50", "330", ""]

            ]
        }', 
        'slug' => 'morsko-oko',
        'business_name' => 'Морско око',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Balchik',
        'region' => 'Balchik',
        'postal_code' => '9600',
        'address' => 'ул. „Приморска“ 8',
        'address_additional' => '',
        'coords_x' => '43.40552423',
        'coords_y' => '28.16608626',
        'phone' => '+359888198007',
        'email' => '',
        'website' => '',
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
            
            "Пица на пещ": [
                ["", "margarita", "Маргарита", "6,30", "", ""],
["", "kaprichoza", "Капричоза", "8,40", "", ""],
["", "peperoni", "Пеперони", "9,10", "", ""],
["", "chetiri-sirena", "Четири сирена", "8,40", "", ""],
["", "il-grasso", "Ил Грассо", "9,80", "", ""],
["", "vegateriana", "Вегатериана", "7,00", "", ""],
["", "domaten-sos-moczarela-chushki-maslini-kolbas", "Доматен сос, моцарела, чушки, маслини, колбас", "7,70", "", ""]

            ],

            "burgers": [
                ["", "rak-burger", "Рак бургер", "3,50", "", ""],
["", "teleshki-burger", "Телешки бургер", "4,20", "", ""],
["", "pileshki-burger", "Пилешки бургер", "3,50", "", ""],
["", "riben-burger", "Рибен бургер", "3,50", "", ""]

            ],

            "salads": [
                ["", "shopska", "Шопска", "4,20", "300", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "2,80", "", ""]

            ],

            "Основни ястия": [
                ["", "taliateli-ss-somga", "Талиатели със сьомга", "4,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/1172769.jpg?width=302"],
["", "taliateli-ss-skaridi", "Талиатели със скариди", "4,90", "400", ""],
["", "taliateli-s-morski-darove", "Талиатели с морски дарове", "4,90", "400", ""],
["", "taliateli-ss-sirena", "Талиатели със сирена", "4,90", "400", ""],
["", "przheni-kartofi", "Пържени картофи", "2,80", "200", ""],
["", "kartofi-ss-sirene", "Картофи със сирене", "4,20", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "4,20", "200", ""]

            ],

            "fish": [
                ["", "czacza", "Цаца", "3,50", "200", ""],
["", "safrid", "Сафрид", "6,30", "200", ""],
["", "popcheta", "Попчета", "4,90", "200", ""],
["", "barbun", "Барбун", "4,90", "200", ""],
["", "vatos", "Ватос", "8,40", "200", ""],
["", "lavrak", "Лаврак", "8,40", "", ""],
["", "czipura", "Ципура", "8,40", "", ""],
["", "paniran-khek", "Паниран хек", "7,00", "200", ""],
["", "panirani-kalmari", "Панирани калмари", "6,30", "200", ""],
["", "panirani-midi", "Панирани миди", "6,30", "200", ""],
["", "midi-s-cherupka-po-ribarski", "Миди с черупка по рибарски", "7,00", "800", ""],
["", "midi-s-chesn-i-byalo-vino", "Миди с чесън и бяло вино", "5,60", "500", ""],
["", "midi-s-domaten-sos", "Миди с доматен сос", "5,60", "500", ""],
["", "midi-ss-smetana", "Миди със сметана", "5,60", "500", ""],
["", "kralski-skaridi-s-byalo-vino", "Кралски скариди с бяло вино", "7,00", "150", "https://images.deliveryhero.io/image/fd-bg/Products/1172792.jpg?width=302"],
["", "skaridi-s-nakhut", "Скариди с нахут", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1172783.jpg?width=302"],
["", "saganaki-s-morski-darove", "Саганаки с морски дарове", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/1172784.jpg?width=302"]

            ]
        }', 
        'slug' => 'fish-point',
        'business_name' => 'Fish Point',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Ravda',
        'region' => 'Ravda',
        'postal_code' => '8238',
        'address' => 'Плаж Олимпийски надежди',
        'address_additional' => '',
        'coords_x' => '42.649657',
        'coords_y' => '27.688671',
        'phone' => '+359897884588',
        'email' => '',
        'website' => '',
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
                ["", "zelena-salata-s-rokfor-i-riba-ton", "Зелена салата с рокфор и риба тон", "3,50", "350", ""],
["", "ajsberg-s-rukola-rokfor-i-pecheni-orekhi", "Айсберг с рукола, рокфор и печени орехи", "3,50", "350", ""],
["", "salata-s-kinoa", "Салата с киноа", "3,50", "350", ""],
["", "sredizemnomorska", "Средиземноморска", "3,50", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "400", ""],
["", "vitaminozna-salata", "Витаминозна салата", "2,80", "280", ""],
["", "meshana-salata", "Мешана салата", "2,10", "250", ""],
["", "snezhanka", "Снежанка", "2,10", "200", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,10", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "380", ""],
["", "shopska-salata", "Шопска салата", "2,80", "320", ""],
["", "zele-s-morkovi", "Зеле с моркови", "1,40", "150", ""],
["", "maslini-kalamata", "Маслини Каламата", "2,80", "150", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "350", ""],
["", "salata-marinovani-chushki", "Салата мариновани чушки", "2,10", "200", ""],
["", "kartofena-salata", "Картофена салата", "1,40", "150", ""],
["", "lyutika-ss-sirene", "Лютика със сирене", "2,80", "300", ""],
["", "italianska-salata", "Италианска салата", "3,50", "400", ""],
["", "domati-pecheni-chushki-i-pecheno-koze-sirene", "Домати, печени чушки и печено козе сирене", "4,20", "320", ""],
["", "salata-czezar", "Салата Цезар", "3,50", "300", ""],
["", "salata-czezar-s-khrupkavo-pile", "Салата Цезар с хрупкаво пиле", "5,60", "400", ""],
["", "katk", "Катък", "2,10", "200", ""],
["", "avokado-burata-domati-pesto-i-rukola", "Авокадо, бурата, домати, песто и рукола", "5,60", "350", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "agneshka-supa", "Агнешка супа", "1,40", "300", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "300", ""]

            ],

            "Топли предястия": [
                ["", "gbi-v-maslo", "Гъби в масло", "2,80", "120", ""],
["", "brokoli-ss-sos-ot-sirena", "Броколи със сос от сирена", "4,20", "350", ""],
["", "chushki-s-domaten-sos", "Чушки с доматен сос", "2,80", "300", ""],
["", "plnena-chushka", "Пълнена чушка", "2,80", "180", ""],
["", "topeni-sirena-pane-s-borovinki", "Топени сирена пане с боровинки", "3,50", "150", ""],
["", "sirena-pane", "Сирена пане", "2,80", "120", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "170", ""],
["", "kashkaval-s-kornflejks", "Кашкавал с корнфлейкс", "3,50", "170", ""],
["", "sino-sirene-s-kornflejks", "Синьо сирене с корнфлейкс", "4,20", "170", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "170", ""],
["", "shunka-pane", "Шунка пане", "3,50", "150", ""],
["", "pecheni-aromatni-zelenchuczi", "Печени ароматни зеленчуци", "3,50", "300", ""],
["", "tikvichki-s-kiselo-mlyako", "Тиквички с кисело мляко", "2,80", "400", ""],
["", "ezik-pane", "Език пане", "4,90", "180", ""],
["", "tikvichki-s-kornflejks", "Тиквички с корнфлейкс", "2,80", "200", ""],
["", "paniran-domat-ss-sirene", "Паниран домат със сирене", "3,50", "250", ""],
["", "rizoto-ss-spanak-i-gbi", "Ризото със спанак и гъби", "2,80", "250", ""]

            ],

            "dry-appetizer": [
                ["", "sudzhuk", "Суджук", "3,50", "100", ""],
["", "shpek", "Шпек", "2,80", "100", ""],
["", "pastrma", "Пастърма", "5,60", "100", ""],
["", "shunka", "Шунка", "2,10", "100", ""],
["", "file-elena", "Филе Елена", "4,90", "100", ""]

            ],

            "Сирена": [
                ["", "kashkaval", "Кашкавал", "2,10", "100", ""],
["", "ovche-sirene", "Овче сирене", "2,10", "100", ""],
["", "emental", "Ементал", "2,80", "100", ""],
["", "sino-sirene", "Синьо сирене", "2,80", "100", ""],
["", "krave-sirene", "Краве сирене", "1,40", "100", ""],
["", "moczarela", "Моцарела", "2,10", "100", ""],
["", "kamember", "Камембер", "2,80", "100", ""],
["", "parmezan", "Пармезан", "3,50", "100", ""],
["", "grana-padano", "Грана падано", "4,20", "100", ""]

            ],

            "Ястия от яйца": [
                ["", "mish-mash", "Миш маш", "2,80", "200", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "170", ""],
["", "sirene-po-vrachanski", "Сирене по врачански", "3,50", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "3,50", "200", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "200", ""],
["", "omlet-asorti", "Омлет асорти", "4,20", "200", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "file-ot-pile-natyur", "Филе от пиле натюр", "4,20", "200", ""],
["", "kotlet-po-kievski-s-shunka-i-kashkaval", "Котлет по Киевски с шунка и кашкавал", "7,00", "300", ""],
["", "kotlet-po-milanski-s-topeno-sirene-spanak-i-bekon", "Котлет по Милански с топено сирене, спанак и бекон", "7,00", "300", ""],
["", "plneni-pileshki-grdi", "Пълнени пилешки гърди", "5,60", "280", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "4,20", "200", ""],
["", "file-na-tigan-s-kopr-i-chesn", "Филе на тиган с копър и чесън", "4,20", "200", ""],
["", "pecheno-pileshko-file-s-med-i-orekhi", "Печено пилешко филе с мед и орехи", "4,90", "200", ""],
["", "pileshko-file-ss-smetana", "Пилешко филе със сметана", "6,30", "400", ""],
["", "pileshko-file-ss-sos-ot-sirena", "Пилешко филе със сос от сирена", "7,00", "450", ""],
["", "pileshka-lyutika", "Пилешка лютика", "4,90", "230", ""],
["", "kavarma-ot-pileshko-meso", "Каварма от пилешко месо", "6,30", "280", ""],
["", "pileshki-shniczel-po-vienski", "Пилешки шницел по Виенски", "6,30", "300", ""],
["", "pileshki-filencza-s-parmezan-i-magdanoz", "Пилешки филенца с пармезан и магданоз", "4,90", "250", ""],
["", "kavarma-v-omlet-ot-pileshko-meso", "Каварма в омлет от пилешко месо", "7,00", "320", ""],
["", "pileshki-khapki-s-kashkaval", "Пилешки хапки с кашкавал", "5,60", "240", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,90", "200", ""],
["", "khrupkavi-pileshki-zhulieni-s-kornflejks", "Хрупкави пилешки жулиени с корнфлейкс", "4,90", "200", ""],
["", "marinovani-pileshki-krilcza-s-bbq-sos", "Мариновани пилешки крилца с BBQ сос", "2,80", "300", ""]

            ],

            "Ястия от патешко месо": [
                ["", "pateshko-magre-s-glazirani-zelenchuczi", "Патешко магре с глазирани зеленчуци", "9,80", "250", ""]

            ],

            "Ястия от телешко месо": [
                ["", "teleshko-bon-file-s-pepr-sos", "Телешко бон филе с пепър сос", "11,20", "300", ""],
["", "teleshki-stek-na-plocha", "Телешки стек на плоча", "11,20", "220", ""],
["", "teleshka-glava-v-gyuveche", "Телешка глава в гювече", "4,20", "300", ""],
["", "teleshko-bon-file-s-gbi", "Телешко бон филе с гъби", "11,20", "300", ""],
["", "teleshko-bon-file-s-manatarki", "Телешко бон филе с манатарки", "11,20", "400", ""],
["", "teleshko-bon-file-vreteno", "Телешко бон филе вретено", "11,90", "350", ""],
["", "teleshki-shniczel-po-vienski", "Телешки шницел по Виенски", "11,20", "300", ""],
["", "teleshko-bon-file-natyur", "Телешко бон филе натюр", "9,80", "130", ""],
["", "teleshko-bon-file-na-tigan-s-kopr-i-chesn", "Телешко бон филе на тиган с копър и чесън", "10,50", "130", ""],
["", "teleshko-bon-file-ss-sos-ot-sirena", "Телешко бон филе със сос от сирена", "11,20", "400", ""]

            ],

            "Ястия от агнешко месо": [
                ["", "agneshko-pecheno-po-gergovski", "Агнешко печено по гергьовски", "11,20", "450", ""]

            ],

            "Ястия от свинско месо": [
                ["", "kavarma-v-omlet", "Каварма в омлет", "7,70", "400", ""],
["", "kavarma-v-gyuveche", "Каварма в гювече", "7,00", "350", ""],
["", "lyutika-ot-svinsko-meso-s-gbi", "Лютика от свинско месо с гъби", "7,00", "300", ""],
["", "shniczel-po-vienski", "Шницел по Виенски", "7,70", "300", ""],
["", "svinski-dzholan-po-tirolski", "Свински джолан по тиролски", "11,20", "800", ""],
["", "svinsko-kare-na-tigan-s-chesn-i-kopr", "Свинско каре на тиган с чесън и копър", "5,60", "200", ""],
["", "svinsko-bon-file-na-tigan-s-chesn-i-kopr", "Свинско бон филе на тиган с чесън и копър", "7,00", "150", ""],
["", "svinsko-bon-file-natyur", "Свинско бон филе натюр", "7,00", "150", ""],
["", "svinsko-bon-file-vreteno", "Свинско бон филе вретено", "8,40", "350", ""],
["", "svinsko-bon-file-s-manatarki", "Свинско бон филе с манатарки", "8,40", "400", ""],
["", "svinsko-bon-file-ss-sos-ot-sirena", "Свинско бон филе със сос от сирена", "8,40", "400", ""],
["", "svinsko-bon-file-s-gbi", "Свинско бон филе с гъби", "7,70", "350", ""],
["", "obezkosten-vrat-na-plocha", "Обезкостен врат на плоча", "5,60", "260", ""],
["", "svinski-rebra-na-plocha", "Свински ребра на плоча", "7,00", "350", ""],
["", "svinsko-kare-s-limon", "Свинско каре с лимон", "5,60", "200", ""],
["", "zharen-bekon-na-plocha", "Жарен бекон на плоча", "3,50", "150", ""],
["", "svinsko-kyufte", "Свинско кюфте", "0,70", "60", ""],
["", "kyufte-pintata", "Кюфте Пинтата", "1,40", "100", ""],
["", "svinsko-kyufte-s-presen-luk-i-kashkaval", "Свинско кюфте с пресен лук и кашкавал", "1,40", "80", ""],
["", "przheni-mrvki-s-luk", "Пържени мръвки с лук", "7,00", "300", ""],
["", "svinski-t-boun-stek", "Свински Т-Боун стек", "6,30", "230", ""]

            ],

            "Ястия от риба": [
                ["", "przhena-byala-riba", "Пържена бяла риба", "4,90", "280", ""],
["", "somga-kotlet-ss-sos-bearnez", "Сьомга котлет със сос беарнез", "10,50", "200", ""],
["", "lavrak-na-plocha", "Лаврак на плоча", "9,10", "300", ""],
["", "czipura-na-plocha", "Ципура на плоча", "9,10", "300", ""],
["", "file-byala-riba-pane", "Филе бяла риба пане", "3,50", "200", ""],
["", "pstrva", "Пъстърва", "6,30", "280", ""],
["", "safrid", "Сафрид", "5,60", "250", ""],
["", "vatus", "Ватус", "7,00", "250", ""],
["", "tigrovi-skaridi-s-frenski-sos", "Тигрови скариди с френски сос", "10,50", "280", ""],
["", "tigrovi-skaridi-saganaki", "Тигрови скариди саганаки", "10,50", "280", ""],
["", "przheni-kalmari", "Пържени калмари", "7,00", "180", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "100", ""],
["", "pryasna-garnitura", "Прясна гарнитура", "1,40", "150", ""],
["", "topla-garnitura", "Топла гарнитура", "1,40", "150", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "140", ""],
["", "meshana-garnitura", "Мешана гарнитура", "1,40", "150", ""],
["", "domashni-przheni-kartofi", "Домашни пържени картофи", "2,80", "300", ""],
["", "kartofeno-pyure", "Картофено пюре", "2,10", "150", ""],
["", "kartofi-na-furna", "Картофи на фурна", "1,40", "150", ""]

            ],

            "bread": [
                ["", "byal-zemel-ss-susam", "Бял земел със сусам", "0,00", "60", ""],
["", "chabata-s-maslini", "Чабата с маслини", "0,00", "50", ""],
["", "czarevichno-khlebche", "Царевично хлебче", "0,00", "60", ""],
["", "plnozrnest-zemel", "Пълнозърнест земел", "0,00", "60", ""]

            ],

            "desserts": [
                ["", "palachinka-s-konfityur", "Палачинка с конфитюр", "2,10", "100", ""],
["", "torta-na-denya", "Торта на деня", "2,80", "100", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "2,10", "100", ""],
["", "krem-bryule", "Крем Брюле", "2,10", "150", ""],
["", "kombinirana-palachinka", "Комбинирана палачинка", "2,80", "100", ""],
["", "czedeno-kiselo-mlyako-s-borovinki", "Цедено кисело мляко с боровинки", "2,10", "150", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,10", "150", ""],
["", "panakota-s-domashno-malinovo-sladko", "Панакота с домашно малиново сладко", "2,10", "150", ""]

            ]
        }', 
        'slug' => 'restorant-pintata',
        'business_name' => 'Ресторант Пинтата',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vratsa',
        'region' => 'Vratsa',
        'postal_code' => '3000',
        'address' => 'ул. Софроний Врачански 17',
        'address_additional' => '',
        'coords_x' => '43.20627145',
        'coords_y' => '23.55123843',
        'phone' => '+359889632404',
        'email' => '',
        'website' => '',
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
                ["", "salata-czezar", "Салата Цезар", "7,70", "350", ""],
["", "salata-nicza", "Салата Ница", "7,00", "300", ""],
["", "salata-s-blgarsko-sirene-domati-krastaviczi-pecheni-chushki-maslini-magdanoz-i-pesto", "Салата с българско сирене, домати, краставици, печени чушки, маслини, магданоз и песто", "7,00", "350", ""],
["", "salata-s-rozovi-domati-pryasno-sirene-pecheni-chushki", "Салата с розови домати, прясно сирене, печени чушки", "6,30", "350", ""],
["", "salata-s-rukola-parmezan-i-cheri-domati-s-balsamov-dresing", "Салата с рукола, пармезан и чери домати с балсамов дресинг", "6,30", "350", ""],
["", "salata-vitamina-cherveno-czveklo-morkov-yablka", "Салата витамина червено цвекло, морков, ябълка", "5,60", "350", ""],
["", "grczka-salata", "Гръцка салата", "6,30", "350", ""],
["", "shopska-salata", "Шопска салата", "5,60", "350", ""],
["", "salata-kapreze", "Салата Капрезе", "7,00", "350", ""]

            ],

            "Стартери": [
                ["", "fokacha-ss-zekhtin-rozmarin-maslini", "Фокача със зехтин, розмарин, маслини", "4,20", "250", ""],
["", "fokacha-s-cheri-domati-i-blgarsko-siren", "Фокача с чери домати и българско сирен", "4,20", "250", ""],
["", "chabata-s-gauda-ili-chesnova", "Чабата с гауда или чеснова", "4,20", "150", ""],
["", "tarator", "Таратор", "2,10", "300", ""],
["", "marinovano-blgarsko-sirene-ss-susheni-domati", "Мариновано българско сирене със сушени домати", "4,20", "150", ""],
["", "marinovani-pecheni-chushki", "Мариновани печени чушки", "4,20", "200", ""],
["", "marinovani-maslini", "Мариновани маслини", "2,80", "100", ""]

            ],

            "Топли предястия": [
                ["", "pecheni-kartofi-s-podpravki-i-chesn", "Печени картофи с подправки и чесън", "4,90", "350", ""],
["", "pechen-kartof-s-bekon-kashkaval-i-smetanov-sos", "Печен картоф с бекон, кашкавал и сметанов сос", "6,30", "350", ""],
["", "kyuftencza-ot-tikvichki-servirani-s-mlechen-sos", "Кюфтенца от тиквички, сервирани с млечен сос", "6,30", "300", ""],
["", "panirani-pileshki-khapki-v-kornfleks-s-mlechen-sos", "Панирани пилешки хапки в корнфлекс с млечен сос", "7,70", "250", ""],
["", "zapekanka-s-kartofi-gauda-i-bekon", "Запеканка с картофи, гауда и бекон", "7,00", "200", ""],
["", "blanshirani-przheni-kartofi", "Бланширани пържени картофи", "2,80", "250", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "3,50", "250", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "6,30", "300", ""]

            ],

            "Риба и морски дарове": [
                ["", "lavrak-przhen", "Лаврак пържен", "14,70", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "13,30", "300", ""],
["", "somga-pechena", "Сьомга печена", "18,90", "250", ""],
["", "skaridi-po-ispanski", "Скариди по испански", "14,70", "200", ""],
["", "skaridi-saganaki-s-domaten-sos-i-sirene", "Скариди саганаки с доматен сос и сирене", "14,70", "250", ""],
["", "panirani-kalmari-servirani-s-chesnov-sos", "Панирани калмари сервирани с чеснов сос", "9,80", "150", ""],
["", "byala-riba-po-bavarski", "Бяла риба по баварски", "8,40", "400", ""],
["", "akula-kotlet-vrkhu-kanape-ot-sotirani-kartofi", "Акула котлет върху канапе от сотирани картофи", "14,70", "450", ""]

            ],

            "pizza": [
                ["", "khavaj", "Хавай", "7,00", "", ""],
["", "picza-praskova", "Пица праскова", "7,00", "", ""],
["", "picza-margarita", "Пица Маргарита", "6,30", "", ""]

            ],

            "Паста, ризото и пелмени": [
                ["", "spageti-boloneze", "Спагети болонезе", "7,00", "400", ""],
["", "spageti-karbonara", "Спагети карбонара", "7,00", "400", ""],
["", "paelya-s-morski-darove", "Паеля с морски дарове", "9,10", "320", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "7,00", "320", ""],
["", "pelmeni", "Пелмени", "8,40", "400", ""]

            ],

            "Месни ястия": [
                ["", "panirana-svinska-przhola-kartofeno-pyure-salata-ot-cherveno-czveklo", "Панирана свинска пържола, картофено пюре, салата от червено цвекло", "10,50", "400", ""],
["", "pileshki-grdi-na-skara-pechen-kartof-s-chesn-i-grilovan-domat", "Пилешки гърди на скара, печен картоф с чесън и грилован домат", "10,50", "400", ""],
["", "svinski-rebrcza-v-sos-barbekyu-s-pecheni-kartofi-i-kiseli-krastavichki", "Свински ребърца в сос барбекю с печени картофи и кисели краставички", "11,90", "350", ""],
["", "svinski-khapki-ss-sos-i-chabata", "Свински хапки със сос и чабата", "10,50", "350", ""],
["", "vratna-przhola-s-garnitura", "Вратна пържола с гарнитура", "13,30", "450", ""]

            ],

            "desserts": [
                ["", "beza-pavlova", "Беза павлова", "7,00", "250", ""],
["", "tiramisu", "Тирамису", "5,60", "150", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "7,00", "180", ""],
["", "shokoladova-picza-s-yagodi", "Шоколадова пица с ягоди", "7,00", "200", ""]

            ]
        }', 
        'slug' => 'vila-liviya',
        'business_name' => 'Вила Ливия',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Ravda',
        'region' => 'Ravda',
        'postal_code' => '8238',
        'address' => 'ул. Зорница 18',
        'address_additional' => '',
        'coords_x' => '42.643222',
        'coords_y' => '27.6809031',
        'phone' => '+359876966181',
        'email' => '',
        'website' => '',
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
                ["", "salata-ot-morkovi", "Салата от моркови", "1,40", "250", ""],
["", "salata-ot-zele", "Салата от зеле", "1,40", "250", ""],
["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "salata-ot-domati", "Салата от домати", "2,10", "200", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "350", ""],
["", "salata-ot-krastaviczi", "Салата от краставици", "2,10", "200", ""],
["", "salata-ot-vareni-kartofi", "Салата от варени картофи", "2,10", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "350", ""],
["", "salata-ot-midi", "Салата от миди", "3,50", "200", ""]

            ],

            "soups": [
                ["", "ribena-chorba", "Рибена чорба", "2,10", "400", ""],
["", "pacha", "Пача", "1,40", "400", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "400", ""],
["", "tarator", "Таратор", "1,40", "400", ""]

            ],

            "starters": [
                ["", "pileshki-krila-pane", "Пилешки крила пане", "2,80", "170", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "pileshki-krila-na-skara", "Пилешки крила на скара", "2,80", "170", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "350", ""],
["", "pileshki-krila-przheni", "Пилешки крила пържени", "2,80", "170", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "300", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "2,80", "250", ""],
["", "pileshki-srcza", "Пилешки сърца", "2,80", "300", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "3,50", "250", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "3,50", "250", ""]

            ],

            "Омлети и яйца": [
                ["", "omlet-asorti", "Омлет Асорти", "2,80", "300", ""],
["", "omlet-natyur", "Омлет натюр", "1,40", "200", ""]

            ],

            "pizza": [
                ["", "picza-dyavola", "Пица Дявола", "4,90", "600", ""],
["", "margarita", "Маргарита", "4,20", "550", ""],
["", "picza-sirena", "Пица сирена", "4,90", "600", ""],
["", "picza-fungi", "Пица Фунги", "4,90", "600", ""],
["", "chetiri-sezona", "Четири сезона", "4,90", "600", ""],
["", "picza-cherno-more", "Пица Черно море", "4,90", "600", ""]

            ],

            "Паста и спагети": [
                ["", "spageti-boloneze", "Спагети болонезе", "3,50", "450", ""],
["", "spageti-s-midi", "Спагети с миди", "5,60", "450", ""],
["", "pasta-karbonara", "Паста карбонара", "3,50", "450", ""]

            ],

            "Ястия от риба": [
                ["", "safrid", "Сафрид", "4,90", "250", ""],
["", "czacza", "Цаца", "2,80", "230", ""],
["", "khek", "Хек", "4,20", "250", ""],
["", "skumriya", "Скумрия", "4,20", "250", ""],
["", "akula", "Акула", "4,20", "250", ""],
["", "somga", "Сьомга", "4,90", "250", ""],
["", "barbun", "Барбун", "4,20", "200", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,80", "200", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "200", ""],
["", "svinsko-shishche", "Свинско шишче", "2,80", "200", ""],
["", "svinsko-file", "Свинско филе", "5,60", "220", ""],
["", "svinska-przhola", "Свинска пържола", "5,60", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "200", ""],
["", "svinski-kotlet", "Свински котлет", "5,60", "250", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "7,00", "400", ""],
["", "svinski-shashlik", "Свински шашлик", "7,00", "400", ""]

            ],

            "Основни ястия": [
                ["", "pileshka-kavrma", "Пилешка кавърма", "4,90", "300", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "3,50", "280", ""],
["", "pileshko-file-s-gben-sos", "Пилешко филе с гъбен сос", "5,60", "400", ""],
["", "svinski-shniczel", "Свински шницел", "5,60", "400", ""],
["", "svinska-kavrma", "Свинска кавърма", "5,60", "350", ""],
["", "file-natyur", "Филе натюр", "4,90", "350", ""],
["", "svinski-rebra", "Свински ребра", "3,50", "250", ""],
["", "svinski-grdi", "Свински гърди", "3,50", "250", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "300", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "200", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "300", ""],
["", "prlenka", "Пърленка", "1,40", "200", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "", ""]

            ],

            "drinks": [
                ["", "ajran", "Айран", "0,70", "", ""],
["", "soda", "Сода", "0,70", "500", ""],
["", "forza-energy-drink", "Forza Energy Drink", "1,40", "300", ""],
["", "studen-chaj", "Студен чай", "1,40", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""]

            ]
        }', 
        'slug' => 'picariya-chicho-toni-mamma-mia',
        'business_name' => 'ПИЦАРИЯ Chicho Toni Mamma Mia',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pomorie',
        'region' => 'Pomorie',
        'postal_code' => '8217',
        'address' => 'Къмпинг Ахелой',
        'address_additional' => '',
        'coords_x' => '42.6328147',
        'coords_y' => '27.6394445',
        'phone' => '+359897960706',
        'email' => '',
        'website' => '',
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
                ["", "margarita", "Маргарита", "1,40", "", ""],
["", "norma", "Норма", "2,10", "", ""],
["", "proshuto", "Прошуто", "2,10", "", ""],
["", "peperoni", "Пеперони", "2,10", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "2,80", "", ""],
["", "monta", "Монта", "2,80", "", ""],
["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "riba-ton", "Риба тон", "2,10", "", ""],
["", "santa", "Санта", "2,10", "", ""],
["", "maskata", "Маската", "2,80", "", ""],
["", "algara", "Алгара", "2,10", "", ""],
["", "barbekyu", "Барбекю", "2,80", "", ""],
["", "karuzo", "Карузо", "2,80", "", ""],
["", "na-baba", "На баба", "2,10", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "2,80", "", ""],
["", "piperliya", "Пиперлия", "2,80", "", ""],
["", "kolombo", "Коломбо", "2,80", "", ""],
["", "face", "Face", "2,80", "", ""],
["", "katani", "Катани", "2,80", "", ""],
["", "lombardi", "Ломбарди", "2,80", "", ""]

            ],

            "burgers": [
                ["", "chicken-burger", "Chicken Burger", "2,80", "", ""],
["", "chees-burger", "Chees Burger", "2,80", "", ""],
["", "face-burger", "Face Burger", "3,50", "", ""]

            ],

            "others": [
                ["", "pileshki-khapki", "Пилешки хапки", "2,10", "", ""],
["", "przheni-kartofki", "Пържени картофки", "1,40", "", ""]

            ],

            "Coca-cola продукти": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", ""],
["", "fanta-limon", "Fanta Лимон", "0,70", "500", ""],
["", "fanta-grozde", "Fanta Грозде", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", ""],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "500", ""],
["", "fuzetea-limon-i-limonena-treva-studen-chaj", "Fuzetea Лимон и лимонена трева, студен чай", "0,70", "500", ""],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "0,70", "500", ""],
["", "fuzetea-mango-i-ananas-studen-chaj", "Fuzetea Манго и ананас, студен чай", "0,70", "500", ""],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "0,70", "500", ""],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "0,70", "330", ""],
["", "cappy-pulpy-praskova", "Cappy Pulpy Праскова", "0,70", "330", ""]

            ],

            "drinks": [
                ["", "ajryan-olimpus", "Айрян Олимпус", "0,00", "500", ""],
["", "ajryan-balkan", "Айрян Балкан", "0,70", "500", ""],
["", "vvv-sok", "ВВВ сок", "0,70", "250", ""],
["", "shumensko-ken", "Шуменско кен", "0,70", "500", ""],
["", "ajryan-balkan", "Айрян Балкан", "0,00", "330", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна баня", "0,70", "", ""],
["", "boza", "Боза", "0,00", "300", ""],
["", "boza", "Боза", "0,00", "500", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна Баня", "0,00", "500", ""],
["", "vvv-sok-slamka", "ВВВ сок сламка", "0,00", "200", ""]

            ]
        }', 
        'slug' => 'pizza-face',
        'business_name' => 'Pizza Face',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kyustendil',
        'region' => 'Kyustendil',
        'postal_code' => '2503',
        'address' => 'ул. Димитър Беровски 3',
        'address_additional' => '',
        'coords_x' => '42.2832486',
        'coords_y' => '22.6797552',
        'phone' => '+359896601933',
        'email' => '',
        'website' => '',
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
                ["", "burgundska-salata", "Бургундска салата", "4,90", "", ""],
["", "czezar-s-pile", "Цезар с пиле", "5,60", "", ""],
["", "kapreze", "Капрезе", "4,20", "", ""],
["", "salata-s-kinoa-koze-sirene-i-karamelizirani-krushi", "Салата с киноа, козе сирене и карамелизирани круши", "7,00", "", ""],
["", "vkusna-salata", "Вкусна салата", "4,90", "", ""],
["", "salata-ot-domati-i-plnena-ss-sirena-chushka", "Салата от домати и пълнена със сирена чушка", "4,20", "", ""]

            ],

            "starters": [
                ["", "panirani-topeni-sirencza-ss-sladko-ot-borovinki", "Панирани топени сиренца със сладко от боровинки", "4,90", "", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "4,20", "", ""],
["", "khrupkavi-kalmari", "Хрупкави калмари", "5,60", "", ""],
["", "pileshki-prchiczi-s-kornflejks", "Пилешки пръчици с корнфлейкс", "4,90", "", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,90", "", ""],
["", "pikantni-kartofi-s-bekon", "Пикантни картофи с бекон", "4,20", "", ""],
["", "zapecheni-kartofi-ss-sirena", "Запечени картофи със сирена", "4,20", "", ""],
["", "pileshki-srchicza-s-rbi-i-parmezan", "Пилешки сърчица с rьби и пармезан", "4,20", "", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "", ""]

            ],

            "maindishes": [
                ["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,20", "", ""],
["", "pileshki-filencza-s-parmezanova-korichka", "Пилешки филенца с пармезанова коричка", "7,00", "", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "6,30", "", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "6,30", "", ""],
["", "pile-s-brokoli-i-sirena", "Пиле с броколи и сиренa", "6,30", "", ""],
["", "pstrva-na-tigan", "Пъстьрва на тиган", "6,30", "", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "11,20", "", ""],
["", "teleshki-kyufteta-na-skara", "Телешки кюфтета на скара", "4,90", "", ""],
["", "banski-sudzhuk", "Бански суджук", "6,30", "", ""],
["", "svinsko-bonfile-v-bekon", "Свинско бонфиле в бекон", "8,40", "", ""],
["", "svinski-rebra-na-skara", "Свински ребра на скара", "6,30", "", ""],
["", "svinski-vrat-na-skara", "Свински врат на скара", "6,30", "", ""],
["", "kyufteta-na-skara", "Кюфтета на скара", "4,20", "", ""],
["", "kebapcheta-na-skara", "Кебапчета на скара", "4,20", "", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "6,30", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "6,30", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "6,30", "", ""],
["", "vegetariana", "Вегетариана", "5,60", "", ""],
["", "di-polo", "Ди Поло", "6,30", "", ""],
["", "dyavolo", "Дяволо", "6,30", "", ""],
["", "peperoni", "Пеперони", "6,30", "", ""]

            ],

            "pasta": [
                ["", "pomodoro", "Помодоро", "3,50", "", ""],
["", "matrichana", "Матричана", "4,20", "", ""],
["", "boloneze", "Болонезе", "4,20", "", ""],
["", "karbonara", "Карбонара", "4,20", "", ""]

            ],

            "Сандвичи и бургери": [
                ["", "teleshki-chijzburger", "Телешки чийзбургер", "5,60", "", ""],
["", "burger-ot-svinsko-s-yajcze", "Бургер от свинско с яйце", "5,60", "", ""],
["", "burger-khrupkavo-pile", "Бургер Хрупкаво пиле", "5,60", "", ""],
["", "klub-sandvich", "Клуб сандвич", "4,90", "", ""],
["", "sandvich-ss-sirene", "Сандвич със сирене", "4,90", "", ""]

            ],

            "desserts": [
                ["", "domashen-techen-shokolad", "Домашен течен шоколад", "2,10", "", ""],
["", "krem-karamel", "Крем карамел", "1,40", "", ""],
["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "2,10", "", ""],
["", "palachinka-s-med", "Палачинка с мед", "1,40", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "", ""],
["", "shopska-salata", "Шопска салата", "3,50", "", ""],
["", "vitamina", "Витамина", "4,20", "", ""]

            ],

            "Червено вино": [
                ["", "kvantum-pino-noar-i-merlo", "Квантум Пино Ноар и Мерло", "7,00", "375", ""],
["", "rio-romans-merlo", "Рио Романс Мерло", "7,00", "375", ""],
["", "kvantum-pino-noar-i-merlo", "Квантум Пино Ноар и Мерло", "12,60", "750", ""],
["", "rio-romans-merlo", "Рио Романс Мерло", "12,60", "750", ""],
["", "chilensis-kaberne-sovinon-chili", "Чиленсис Каберне Совиньон, Чили", "9,10", "375", ""],
["", "chilensis-kaberne-sovinon-chili", "Чиленсис Каберне Совиньон, Чили", "18,20", "750", ""]

            ],

            "Бяло вино": [
                ["", "kvantum-sovinon-blan", "Квантум Совиньон Блан", "7,00", "375", ""],
["", "kvantum-sovinon-blan", "Квантум Совиньон Блан", "12,60", "750", ""],
["", "ryu-romans-sovino-blan", "Рю Романс Совиньоь Блан", "7,00", "375", ""],
["", "ryu-romans-sovino-blan", "Рю Романс Совиньоь Блан", "12,60", "750", ""],
["", "rive-di-venecziya-pino-gri-italiya", "Риве Ди Венеция Пино Гри, Италия", "7,00", "375", ""],
["", "rive-di-venecziya-pino-gri-italiya", "Риве Ди Венеция Пино Гри, Италия", "12,60", "750", ""],
["", "nelsn-klifs-sovinon-blan-nelsn-nova-zelandiya", "Нелсън Клифс Совиньон Блан, Нелсън, Нова Зеландия", "9,10", "375", ""],
["", "nelsn-klifs-sovinon-blan-nelsn-nova-zelandiya", "Нелсън Клифс Совиньон Блан, Нелсън, Нова Зеландия", "17,50", "750", ""],
["", "chilensis-sovinon-blan-chili", "Чиленсис Совиньон Блан, Чили", "9,10", "375", ""],
["", "chilensis-sovinon-blan-chili", "Чиленсис Совиньон Блан, Чили", "18,20", "750", ""],
["", "kvantum-roze-pino-noar-i-sira", "Квантум Розе Пино Ноар и Сира", "12,60", "750", ""],
["", "ryu-romans-roze-marselan", "Рю Романс Розе, Марселан", "7,00", "375", ""],
["", "ryu-romans-roze-marselan", "Рю Романс Розе, Марселан", "12,60", "750", ""],
["", "paradiso-mediterano-roze-grenazh-noar-francziya", "Парадисо Медитерано Розе Гренаж Ноар, Франция", "12,60", "750", ""]

            ]
        }', 
        'slug' => 'damyanica-bar-and-dinner',
        'business_name' => 'Дамяница Bar and Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Bansko',
        'region' => 'Bansko',
        'postal_code' => '2770',
        'address' => 'ул. цар Симеон 54',
        'address_additional' => '',
        'coords_x' => '41.83673248',
        'coords_y' => '23.49005594',
        'phone' => '+359888633520',
        'email' => '',
        'website' => '',
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
                ["", "shopka-salata", "Шопка салата", "3,50", "350", ""],
["", "ovcharska", "Овчарска", "4,20", "350", ""],
["", "redena", "Редена", "2,80", "350", ""],
["", "grczka", "Гръцка", "4,20", "350", ""],
["", "zelena-salata", "Зелена салата", "2,80", "300", ""],
["", "pecheni-chushki-s-chesn-i-kopr", "Печени чушки с чесън и копър", "3,50", "250", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "250", ""],
["", "gradinarska", "Градинарска", "5,60", "300", ""],
["", "zekhtindzhieva", "Зехтинджиева", "9,10", "450", ""],
["", "czezar-s-pile", "Цезар с пиле", "7,00", "300", ""],
["", "kopoolu", "Кьопоолу", "3,50", "250", ""]

            ],

            "Студени предястия": [
                ["", "banski-starecz", "Бански старец", "2,80", "50", ""],
["", "lukanka", "Луканка", "2,80", "50", ""],
["", "file-elena", "Филе Елена", "2,80", "50", ""],
["", "pastrma", "Пастърма", "2,80", "", ""],
["", "krave-sirene", "Краве сирене", "2,10", "100", ""],
["", "ovche-sirene", "Овче сирене", "3,50", "100", ""],
["", "koze-sirene", "Козе сирене", "3,50", "100", ""],
["", "kashkaval", "Кашкавал", "2,80", "100", ""]

            ],

            "Топли предястия": [
                ["", "kashkaval-pane", "Кашкавал пане", "5,60", "180", ""],
["", "panirani-topeni-sirencza-s-borovinki", "Панирани топени сиренца с боровинки", "5,60", "220", ""],
["", "chushka-byurek", "Чушка бюрек", "4,90", "", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "5,60", "200", ""],
["", "mish-mash", "Миш маш", "4,90", "250", ""],
["", "pileshki-khrupkavi-khapki", "Пилешки хрупкави хапки", "5,60", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,20", "270", ""],
["", "banski-starecz-na-tigan", "Бански старец на тиган", "8,40", "180", ""],
["", "omlet-po-izbor", "Омлет по избор", "4,20", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "pikantni-kartofki", "Пикантни картофки", "2,80", "250", ""]

            ],

            "soups": [
                ["", "domatena-supa", "Доматена супа", "2,10", "300", ""],
["", "gbena-supa", "Гъбена супа", "2,10", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "Паста и ризото": [
                ["", "spageti-boloneze", "Спагети Болонезе", "4,90", "300", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "300", ""],
["", "spageti-formadzho", "Спагети Формаджо", "4,90", "300", ""],
["", "spageti-vegetariana", "Спагети Вегетариана", "4,90", "300", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,90", "280", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "280", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "4,90", "280", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "7,00", "", ""],
["", "chetiri-sirena", "Четири сирена", "7,00", "", ""],
["", "picza-s-lukanka", "Пица с луканка", "7,00", "", ""],
["", "vegetariana", "Вегетариана", "5,60", "", ""],
["", "ekstra-kaprichoza", "Екстра Капричоза", "8,40", "", ""],
["", "peperoni", "Пеперони", "9,10", "", ""],
["", "makedonska", "Македонска", "9,80", "", ""],
["", "banska-picza", "Банска пица", "10,50", "", ""]

            ],

            "Бански ястия": [
                ["", "speczialitet-na-zekhtindzhieva-kshha", "Специалитет на Зехтинджиева къща", "27,30", "1300", ""],
["", "svinski-dzholan", "Свински джолан", "21,70", "1300", ""],
["", "kavrma-po-izbor", "Кавърма по избор", "7,70", "300", ""],
["", "katino-meze-po-izbor", "Катино мезе по избор", "8,40", "300", ""],
["", "bansko-meze", "Банско мезе", "8,40", "250", ""]

            ],

            "sachs": [
                ["", "svinski-sach", "Свински сач", "13,30", "400", ""],
["", "pileshki-sach", "Пилешки сач", "13,30", "400", ""],
["", "selski-sach", "Селски сач", "13,30", "400", ""],
["", "teleshki-sach", "Телешки сач", "20,30", "400", ""],
["", "vegetarianski-sach", "Вегетариански сач", "9,80", "300", ""]

            ],

            "fish": [
                ["", "pstrva", "Пъстърва", "9,10", "", ""],
["", "lavrak", "Лаврак", "14,00", "", ""],
["", "czipura", "Ципура", "14,00", "", ""],
["", "kalmari-pane", "Калмари пане", "7,70", "200", ""]

            ],

            "Ястия с пилешко": [
                ["", "pileshko-s-kri", "Пилешко с къри", "8,40", "300", ""],
["", "pile-rokfor", "Пиле Рокфор", "7,70", "300", ""],
["", "pileshki-shniczel-po-vienski", "Пилешки шницел по виенски", "9,10", "380", ""]

            ],

            "Ястия със свинско": [
                ["", "svinsko-bon-file-s-manatarki", "Свинско бон филе с манатарки", "14,70", "280", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "9,80", "320", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "9,10", "380", ""]

            ],

            "Ястия с телешко": [
                ["", "teleshko-s-pepr-sos", "Телешко с пепър сос", "20,30", "370", ""],
["", "teleshko-s-manatarki", "Телешко с манатарки", "20,30", "370", ""],
["", "teleshki-zhulieni-s-pikantni-zelenchuczi", "Телешки жулиени с пикантни зеленчуци", "20,30", "400", ""]

            ],

            "Меса на жар": [
                ["", "plato-zekhtindzhieva-kshha", "Плато Зехтинджиева къща", "48,30", "1500", ""],
["", "svinski-rebra", "Свински ребра", "7,70", "350", ""],
["", "banski-sudzhuk", "Бански суджук", "6,30", "230", ""],
["", "banska-krvavicza", "Банска кървавица", "6,30", "230", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "7,00", "250", ""],
["", "svinska-kralska-przhola", "Свинска кралска пържола", "11,20", "680", ""],
["", "svinsko-file", "Свинско филе", "8,40", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "3,50", "130", ""],
["", "svinsko-kyufte", "Свинско кюфте", "1,40", "80", ""],
["", "svinsko-kebapche", "Свинско кебапче", "1,40", "80", ""],
["", "teleshka-przhola---file", "Телешка пържола - филе", "18,20", "250", ""],
["", "pileshka-przhola---file", "Пилешка пържола - филе", "5,60", "250", ""],
["", "pileshka-przhola---butche", "Пилешка пържола - бутче", "5,60", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "5,60", "130", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,90", "200", ""]

            ],

            "sauces": [
                ["", "pepr-sos", "Пепър сос", "1,40", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""]

            ],

            "bread": [
                ["", "prlenka", "Пърленка", "1,40", "", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta-s-krem-bryule", "Бисквитена торта с крем брюле", "3,50", "220", ""],
["", "czedeno-kiselo-mlyako-ss-sladko", "Цедено кисело мляко със сладко", "3,50", "220", ""],
["", "sladoledeno-kiselo-mlyako", "Сладоледено кисело мляко", "3,50", "", ""],
["", "palachinka-po-izbor", "Палачинка по избор", "1,40", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1021431.jpg?width=302"]

            ],

            "Безалкохолни напитки": [
                ["", "studen-chaj", "Студен чай", "1,40", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""]

            ],

            "beer": [
                ["", "erdinger", "Ердингер", "4,20", "500", ""],
["", "pirinsko-ken", "Пиринско кен", "1,40", "", ""],
["", "tuborg-ken", "Туборг кен", "2,10", "", ""],
["", "shumensko-ken", "Шуменско кен", "1,40", "", ""]

            ],

            "wine": [
                ["", "aplauz-sandanski-misket", "AplauZ сандански мискет", "30,80", "750", ""],
["", "applauz-shardone-sur-lie", "ApplauZ Шардоне Sur Lie", "14,70", "750", ""],
["", "bergule-shardone-i-vionie", "Bergule Шардоне и Вионие", "10,50", "", ""],
["", "bergule-sovinon-blan-polusukho", "Bergule Совиньон блан, полусухо", "20,30", "750", ""],
["", "family-tradition-byalo-kyuve", "Family Tradition бяло Кюве", "13,30", "750", ""],
["", "aplauz-roze", "AplauZ розе", "14,70", "", ""],
["", "bergule-roze", "Bergule розе", "20,30", "750", ""],
["", "aplauz-rezerva-melnik-55", "AplauZ Резерва Мелник 55", "30,80", "750", ""],
["", "aplauz-rezerva-sira", "AplauZ Резерва Сира", "30,80", "750", ""],
["", "aplauz-rezerva-merlo", "AplauZ Резерва Мерло", "30,80", "750", ""],
["", "bergule-melnik-i-pino-noar", "Bergule Мелник и Пино ноар", "20,30", "750", ""],
["", "bergule-kyuve", "Bergule Кюве", "10,50", "", ""],
["", "bergule-mavrud", "Bergule Мавруд", "20,30", "750", ""]

            ]
        }', 
        'slug' => 'zehtindzhieva-kshch',
        'business_name' => 'Зехтинджиева къща',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Bansko',
        'region' => 'Bansko',
        'postal_code' => '2770',
        'address' => 'ул. Георги Ковачев 11',
        'address_additional' => '',
        'coords_x' => '41.8328214',
        'coords_y' => '23.4856853',
        'phone' => '+359899559599',
        'email' => '',
        'website' => '',
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
            
            "Комбо менюта": [
                ["", "plato-za-dvama", "Плато за двама", "9,80", "", ""],
["", "menyu-za-fenove", "Меню за фенове", "13,30", "", ""],
["", "praznichni-khapki-miks", "Празнични хапки микс", "20,30", "", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "salata-zele-s-morkovi", "Салата зеле с моркови", "1,40", "200", ""],
["", "salata-krastaviczi-s-kopr-i-plochka-sirene", "Салата краставици с копър и плочка сирене", "2,10", "300", ""],
["", "selska-salata", "Селска салата", "3,50", "400", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,10", "200", ""],
["", "salata-vitaminoza", "Салата Витаминоза", "2,10", "200", ""],
["", "chervena-marinovana-chushka-pryasno-izpechena-s-aromatni-podpravki-i-sirene", "Червена маринована чушка, прясно изпечена с ароматни подправки и сирене", "2,80", "", ""],
["", "pryasno-izpecheni-tikvichki-marinovani-i-s-aromatni-podpravki", "Прясно изпечени тиквички, мариновани и с ароматни подправки", "1,40", "200", ""],
["", "salata-midi", "Салата миди", "4,90", "200", ""]

            ],

            "Топли предястия": [
                ["", "domashni-przheni-kartofki", "Домашни пържени картофки", "1,40", "200", ""],
["", "aromatni-gbi-v-maslo-i-podpravki", "Ароматни гъби в масло и подправки", "2,10", "150", ""],
["", "pileshko-butche", "Пилешко бутче", "1,40", "", ""],
["", "pileshko-krilcze", "Пилешко крилце", "0,00", "", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "200", ""],
["", "mamino-kyuftencze", "Мамино кюфтенце", "0,70", "", ""],
["", "domashno-kartofeno-kyufte", "Домашно картофено кюфте", "0,70", "", ""],
["", "krenvirsh-s-kashklaval", "Кренвирш с кашклавал", "1,40", "", ""],
["", "pileshki-khapki-na-tigan", "Пилешки хапки на тиган", "4,90", "250", ""],
["", "shunka-i-kashkaval-miks-pane", "Шунка и кашкавал микс пане", "4,20", "200", ""],
["", "nadenicza-na-tigan", "Наденица на тиган", "2,10", "", ""],
["", "domashen-shniczel-na-tigan", "Домашен шницел на тиган", "2,10", "150", ""]

            ],

            "grill": [
                ["", "sochno-kyufte-80", "Сочно кюфте (80", "0,70", "", ""],
["", "sochno-kebapche-80", "Сочно кебапче (80", "0,70", "", ""],
["", "pileshka-przhola-ot-but-s-kozha", "Пилешка пържола от бут с кожа", "3,50", "200", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "3,50", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "3,50", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "", ""]

            ],

            "Риба и морски деликатеси": [
                ["", "czacza", "Цаца", "1,40", "", ""],
["", "safrid", "Сафрид", "1,40", "100", ""],
["", "popche", "Попче", "2,10", "150", ""],
["", "akula-file", "Акула филе", "2,10", "150", ""],
["", "skumriya", "Скумрия", "4,20", "250", ""],
["", "skumriya-file", "Скумрия филе", "2,80", "150", ""],
["", "savorin-na-skara", "Саворин на скара", "4,90", "250", ""],
["", "vatos", "Ватос", "4,90", "200", ""],
["", "midi-pane", "Миди пане", "4,90", "200", ""],
["", "kalmari-pane", "Калмари пане", "4,90", "200", ""],
["", "shhipki-ot-rak", "Щипки от рак", "4,90", "200", ""],
["", "skaridi-surimi", "Скариди сурими", "4,90", "200", ""]

            ],

            "additives": [
                ["", "plochka-sirene", "Плочка сирене", "0,70", "", ""],
["", "mlechno-chesnov-sos", "Млечно-чеснов сос", "0,70", "", ""],
["", "ketchup", "Кетчуп", "0,70", "", ""],
["", "majoneza", "Майонеза", "0,70", "", ""]

            ]
        }', 
        'slug' => 'restorant-familiya-fantastiko',
        'business_name' => 'Ресторант Фамилия Фантастико',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kiten',
        'region' => 'Kiten',
        'postal_code' => '8183',
        'address' => 'ул. Пирин 5',
        'address_additional' => '',
        'coords_x' => '42.23454401',
        'coords_y' => '27.77174031',
        'phone' => '+359878360896',
        'email' => '',
        'website' => '',
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
                ["", "zeleva-salata", "Зелева салата", "2,10", "250", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "450", ""],
["", "velikdenska-salata", "Великденска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "snezhanka", "Снежанка", "3,50", "350", ""],
["", "yajchena-salata", "Яйчена салата", "2,80", "250", ""],
["", "zhtvarska-salata", "Жътварска салата", "4,20", "450", ""],
["", "ruska-salata", "Руска салата", "2,80", "200", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "400", ""],
["", "salata-asorti", "Салата Асорти", "9,80", "600", ""],
["", "salata-asorti", "Салата Асорти", "11,20", "800", ""]

            ],

            "Сухи мезета": [
                ["", "lukanka", "Луканка", "2,10", "50", ""],
["", "plato-miks-sukhi-mezeta", "Плато микс сухи мезета", "10,50", "200", ""],
["", "file-elena", "Филе Елена", "3,50", "50", ""],
["", "sudzhuk", "Суджук", "2,10", "50", ""]

            ],

            "alaminuti": [
                ["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,20", "250", ""],
["", "kartofi-s-kopr-i-chesn", "Картофи с копър и чесън", "2,80", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "3,50", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "350", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,20", "250", ""],
["", "kashkavaleni-pukanki-s-chesnov-sos", "Кашкавалени пуканки с чеснов сос", "4,90", "250", ""],
["", "panirani-sirencza", "Панирани сиренца", "3,50", "250", ""],
["", "panirani-topeni-sirencza", "Панирани топени сиренца", "4,90", "250", ""],
["", "khrupkavi-topeni-sirencza-s-kornflejks", "Хрупкави топени сиренца с корнфлейкс", "4,20", "250", ""],
["", "pileshko-file-s-brokoli-i-smetana", "Пилешко филе с броколи и сметана", "6,30", "350", ""],
["", "pile-zhulien", "Пиле Жулиен", "7,00", "400", ""],
["", "svinski-kscheta", "Свински късчета", "8,40", "500", ""],
["", "vienski-shniczel", "Виенски шницел", "6,30", "460", ""]

            ],

            "Специалитети на готвача": [
                ["", "teleshki-ezik-pane", "Телешки език пане", "9,10", "300", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "7,70", "250", ""],
["", "svinska-vratna-przhola-po-selski", "Свинска вратна пържола по селски", "8,40", "400", ""],
["", "agneshka-glavichka-na-dska", "Агнешка главичка на дъска", "8,40", "400", ""],
["", "svinski-dzholan", "Свински джолан", "10,50", "700", ""],
["", "pileshka-przhola-ot-but-na-tigan", "Пилешка пържола от бут на тиган", "7,00", "350", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "4,90", "200", ""],
["", "slanina-natyur", "Сланина натюр", "2,80", "200", ""],
["", "plato-ot-sirena", "Плато от сирена", "15,40", "600", ""]

            ],

            "grill": [
                ["", "karnache", "Карначе", "2,80", "200", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "sudzhuk-na-skara", "Суджук на скара", "5,60", "300", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "karnache", "Карначе", "1,40", "100", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "500", ""],
["", "pileshka-przhola-ot-file", "Пилешка пържола от филе", "4,90", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "300", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "svinski-rebrcza-na-skara", "Свински ребърца на скара", "8,40", "", ""],
["", "ushi-na-skara", "Уши на скара", "3,50", "250", ""]

            ],

            "Плата и сачове": [
                ["", "kombinirano-plato-ot-pileshko-meso", "Комбинирано плато от пилешко месо", "11,20", "600", ""],
["", "kombinirano-plato-ot-svinsko-meso", "Комбинирано плато от свинско месо", "14,70", "600", ""],
["", "pileshki-sach", "Пилешки сач", "11,90", "600", ""],
["", "sach-chanovete", "Сач Чановете", "15,40", "700", ""],
["", "svinski-sach", "Свински сач", "13,30", "600", ""],
["", "kombinirano-plato-ot-pileshko-i-svinsko-meso", "Комбинирано плато от пилешко и свинско месо", "17,50", "", ""]

            ],

            "garnish": [
                ["", "domati-i-krastaviczi", "Домати и краставици", "1,40", "200", ""],
["", "smesena-garnitura", "Смесена гарнитура", "2,80", "300", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "lyuta-pukana-chushka", "Люта пукана чушка", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "plochka-sirene", "Плочка сирене", "1,40", "100", ""],
["", "plochka-kashkaval", "Плочка кашкавал", "2,10", "100", ""]

            ],

            "bread": [
                ["", "prlenka", "Пърленка", "0,70", "", ""],
["", "pechena-filiya-khlyab", "Печена филия хляб", "0,00", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "czedeno-mlyako-ss-sladko", "Цедено мляко със сладко", "2,10", "200", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "150", ""],
["", "czedeno-mlyako-s-med-i-orekhi", "Цедено мляко с мед и орехи", "2,10", "200", ""],
["", "domashna-torta-s-maskarpone", "Домашна торта с маскарпоне", "2,10", "200", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "1,40", "1500", ""],
["", "limonada-za-vino", "Лимонада за вино", "0,70", "500", ""],
["", "ajryan", "Айрян", "1,40", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "ajryan", "Айрян", "0,70", "500", ""]

            ],

            "beer": [
                ["", "shumensko", "Шуменско", "0,70", "330", ""],
["", "pirinsko", "Пиринско", "1,40", "500", ""],
["", "mlado-pivo", "Младо пиво", "0,70", "330", ""],
["", "tuborg", "Туборг", "1,40", "500", ""],
["", "shumensko", "Шуменско", "1,40", "500", ""],
["", "zhateczki", "Жатецки", "1,40", "500", ""],
["", "ledeno-pirinsko", "Ледено Пиринско", "1,40", "500", ""],
["", "samrsbi-dinya", "Самърсби диня", "2,10", "330", ""],
["", "samrsbi-yablka", "Самърсби ябълка", "2,10", "330", ""],
["", "samrsbi-krusha", "Самърсби круша", "2,10", "330", ""],
["", "samrsbi-borovinka", "Самърсби боровинка", "2,10", "330", ""]

            ],

            "Червено вино": [
                ["", "sajkl-sira", "Сайкъл Сира", "11,20", "750", ""],
["", "sajkl-chetvoren", "Сайкъл четворен", "14,00", "750", ""],
["", "sajkl-kaberne-fran", "Сайкъл Каберне Фран", "10,50", "750", ""],
["", "bratya-minkovi-kyuve", "Братя Минкови Кюве", "18,20", "750", ""],
["", "dezha-vyu-merlo", "Дежа Вю Мерло", "12,60", "750", ""],
["", "sajkl-troen", "Сайкъл троен", "5,60", "375", ""],
["", "ouk-trii", "Оук Трии", "54,60", "750", ""],
["", "gorchivka-kaberne-sovinon", "Горчивка Каберне Совиньон", "11,90", "750", ""],
["", "aureos-merlo", "Ауреос Мерло", "9,10", "750", ""],
["", "aueros-kaberne-sovinon", "Ауерос Каберне Совиньон", "9,10", "750", ""]

            ],

            "Бяло вино": [
                ["", "sajkl-sovinon-blan", "Сайкъл Совиньон Блан", "14,00", "750", ""],
["", "bratya-minkovi-kyuve", "Братя Минкови Кюве", "23,80", "750", ""],
["", "dezha-vyu-shardone", "Дежа Вю Шардоне", "12,60", "750", ""],
["", "sajkl-shardone-i-kolombara", "Сайкъл Шардоне и Коломбара", "11,20", "750", ""],
["", "enoteka-tamyanka", "Enoteka Tamyanka", "35,00", "750", ""],
["", "la-fotograf-pinot-grigio", "Ла Фотограф Pinot Grigio", "26,60", "750", ""],
["", "sajkl-sovinon-blan", "Сайкъл Совиньон Блан", "5,60", "375", ""],
["", "aueros-shardone", "Ауерос Шардоне", "9,10", "750", ""],
["", "le-vin-kaberne-i-sovinon-blan", "Ле Вин Каберне и Совиньон Блан", "18,90", "750", ""]

            ],

            "Вино розе": [
                ["", "la-fotograf-kaberne-i-kaberne-fran", "Ла Фотограф Каберне и Каберне Фран", "22,40", "750", ""],
["", "gorchivka-kaberne-sovinon-i-merlo", "Горчивка Каберне Совиньон и Мерло", "14,00", "750", ""],
["", "aureos-kaberne-sovinon-i-kaberne-fran", "Ауреос Каберне Совиньон и Каберне Фран", "10,50", "750", ""],
["", "sajkl-dvoen", "Сайкъл двоен", "14,00", "750", ""],
["", "dezha-vyu-kaberne-sovinon-i-karmenere", "Дежа Вю Каберне Совиньон и Карменере", "12,60", "750", ""],
["", "sajkl-dvoen", "Сайкъл двоен", "5,60", "375", ""]

            ]
        }', 
        'slug' => 'mehana-chanovete-svishchov',
        'business_name' => 'Механа Чановете (Свищов)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Svishtov',
        'region' => 'Svishtov',
        'postal_code' => '5250',
        'address' => 'ул. Цар Освободител 16',
        'address_additional' => '',
        'coords_x' => '43.6172113',
        'coords_y' => '25.3441856',
        'phone' => '+359886095953',
        'email' => '',
        'website' => '',
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
                ["", "kapreze", "Kaпрезе", "5,60", "350", ""],
["", "zelena-salata-s-riba-ton-i-cheri-domati", "Зелена салата с риба тон и чери домати", "4,90", "350", ""],
["", "klasicheska-shopska-salata", "Класическа шопска салата", "4,90", "350", ""],
["", "ajsberg-s-rukola-praskovi-orekhi-i-speczialen-dresing", "Айсберг с рукола, праскови, орехи и специален дресинг", "5,60", "350", ""],
["", "salata-ot-spanak-s-avokado-koze-sirene-sushen-domat-dresing", "Салата от спанак с авокадо, козе сирене, сушен домат, дресинг", "5,60", "350", ""]

            ],

            "appetizer": [
                ["", "tarama-khajver", "Тарама хайвер", "5,60", "240", ""],
["", "dzadziki", "Дзадзики", "4,20", "350", ""],
["", "miks-kopoolu-apetitka-khumus", "Микс кьопоолу, апетитка, хумус", "4,90", "250", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "2,10", "250", ""],
["", "ribena-supa", "Рибена супа", "3,50", "250", ""]

            ],

            "starters": [
                ["", "midi-v-maslo-s-bosilek-i-chesn", "Миди в масло с босилек и чесън", "6,30", "500", ""],
["", "khrupkavi-kalmari-po-grczki", "Хрупкави калмари по гръцки", "6,30", "250", ""],
["", "shishcheta-ot-skaridi-s-czitrusov-dresing", "Шишчета от скариди с цитрусов дресинг", "9,10", "300", ""],
["", "chiroz", "Чироз", "11,20", "200", ""],
["", "kalmari-po-sredizemnomorski", "Калмари по средиземноморски", "6,30", "250", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "3,50", "250", ""],
["", "kartofi-sote-s-kopr-i-chesn", "Картофи соте с копър и чесън", "2,80", "200", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,20", "250", ""],
["", "patladzhan-po-sredizemnomoski", "Патладжан по средиземномоски", "4,20", "250", ""],
["", "brokoli-v-maslo", "Броколи в масло", "2,80", "250", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "4,90", "250", ""]

            ],

            "fish": [
                ["", "czipura-na-skara", "Ципура на скара", "10,50", "350", ""],
["", "lavrak-na-skara", "Лаврак на скара", "11,90", "350", ""],
["", "lefer-na-skara", "Лефер на скара", "13,30", "350", ""],
["", "safrid-przhen", "Сафрид пържен", "9,10", "350", ""],
["", "popcheta-przheni", "Попчета пържени", "6,30", "350", ""],
["", "file-ot-somga-na-plocha-podnesensa-ss-sos-bearnez", "Филе от сьомга на плоча, поднесенса със сос Беарнез", "11,90", "250", ""],
["", "kalkan-przhen", "Калкан пържен", "28,00", "350", ""]

            ],

            "Ястия на грил": [
                ["", "pileshko-shishche-na-gril-podneseno-ss-zelenchuczi", "Пилешко шишче на грил, поднесено със зеленчуци", "4,90", "350", ""],
["", "svinsko-bon-file-na-gril-podneseno-s-pepr-sos", "Свинско бон филе на грил, поднесено с пепър сос", "10,50", "350", ""]

            ],

            "pasta": [
                ["", "spageti-boloneze", "Спагети Болонезе", "4,20", "400", ""]

            ],

            "bread": [
                ["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "170", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "2,10", "150", ""],
["", "koshnichka-pryasno-izpecheni-zemeli", "Кошничка прясно изпечени земели", "1,40", "100", ""],
["", "prlenka-s-maslo", "Пърленка с масло", "2,10", "150", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,80", "170", ""]

            ],

            "desserts": [
                ["", "presni-sezonni-filirani-plodove", "Пресни сезонни филирани плодове", "3,50", "200", ""],
["", "biskvitena-torta", "Бисквитена торта", "4,20", "200", ""]

            ],

            "Coca-Cola напиткa": [
                ["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "250", ""],
["", "schweppes-tonik", "Schweppes Тоник", "1,40", "250", ""],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "1,40", "250", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "250", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "250", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "2,80", "", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "500", ""]

            ],

            "beer": [
                ["", "kamenicza", "Каменица", "2,10", "500", ""],
["", "beks", "Бекс", "2,80", "500", ""],
["", "stela-artoa", "Стела Артоа", "2,80", "500", ""],
["", "burgasko", "Бургаско", "2,10", "500", ""],
["", "staropramen", "Старопрамен", "2,80", "500", ""]

            ],

            "wine": [
                ["", "villa-ponte---shardone-i-sovinon-blan", "Villa ponte - шардоне и совиньон блан", "15,40", "750", ""],
["", "pentagram---traminer", "Pentagram - траминер", "14,70", "750", ""],
["", "pentagram---roze-sira", "Pentagram - розе сира", "14,70", "750", ""],
["", "pentagram---merlo", "Pentagram - мерло", "14,70", "750", ""],
["", "pentagram---sovinon-blan", "Pentagram - совиньон блан", "14,70", "750", ""],
["", "villa-ponte---kaberne-sovinon-i-sira", "Villa ponte - каберне совиньон и сира", "15,40", "750", ""],
["", "gp-golden-rhythme---shardone", "GP Golden Rhythme - шардоне", "17,50", "750", ""],
["", "gp-golden-rhythme---roze", "GP Golden Rhythme - розе", "17,50", "750", ""],
["", "gp-golden-rhythme---kaberne-sovinon", "GP Golden Rhythme - каберне совиньон", "17,50", "750", ""],
["", "salty-hills---shardone", "Salty Hills - шардоне", "24,50", "750", ""],
["", "salty-hills---vionien-i-sovinon-blan", "Salty Hills - виониен и совиньон блан", "24,50", "750", ""],
["", "salty-hills---roze", "Salty Hills - розе", "24,50", "750", ""],
["", "salty-hills---kaberne-sovinon", "Salty Hills - каберне совиньон", "24,50", "750", ""]

            ]
        }', 
        'slug' => 'sunrise-seafood-restaurant',
        'business_name' => 'Sunrise Seafood Restaurant',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pomorie',
        'region' => 'Pomorie',
        'postal_code' => '8201',
        'address' => 'ул. Мусала 1',
        'address_additional' => '',
        'coords_x' => '42.5663888',
        'coords_y' => '27.6105899',
        'phone' => '+359879669027',
        'email' => '',
        'website' => '',
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
                ["", "rizoto-s-gbi", "Ризото с гъби", "3,50", "300", ""],
["", "katk", "Катък", "2,80", "200", ""],
["", "zelenchuczi-na-plocha", "Зеленчуци на плоча", "2,80", "250", ""],
["", "lazanya-spinadzhi", "Лазаня Спинаджи", "4,20", "300", ""],
["", "speczialitet-rolatini-prima-vera", "Специалитет Ролатини прима вера", "8,40", "350", ""],
["", "kalczone-nutela", "Калцоне Нутела", "2,80", "200", ""]

            ],

            "salads": [
                ["", "salata-sicziliya", "Салата Сицилия", "3,50", "250", ""],
["", "salata-amigo", "Салата Амиго", "3,50", "400", ""],
["", "salata-kapriz", "Салата Каприз", "4,20", "400", ""],
["", "salata-al-tono", "Салата Ал Тоно", "4,20", "180", ""],
["", "bavarska-salata", "Баварска салата", "2,80", "300", ""],
["", "salata-asorti", "Салата Асорти", "4,90", "500", ""],
["", "salata-venecziya", "Салата Венеция", "3,50", "300", ""],
["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "300", ""],
["", "meshana-salata", "Мешана салата", "2,10", "250", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "350", ""],
["", "selska-salata", "Селска салата", "2,80", "300", ""],
["", "salata-domati", "Салата домати", "2,10", "250", ""],
["", "salata-beleni-domati", "Салата белени домати", "2,80", "250", ""],
["", "salata-krastaviczi", "Салата краставици", "2,10", "250", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "snezhanka", "Снежанка", "2,80", "200", ""],
["", "podlucheni-pecheni-piperki", "Подлучени печени пиперки", "2,80", "150", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "3,50", "250", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,20", "300", ""],
["", "salata-zele-i-morkovi", "Салата зеле и моркови", "2,10", "200", ""],
["", "salata-morkovi", "Салата моркови", "2,80", "150", ""],
["", "salata-s-raczi", "Салата с раци", "2,80", "180", ""],
["", "midi-s-luk-i-maslini", "Миди с лук и маслини", "3,50", "200", ""],
["", "salata-maslini-s-luk", "Салата маслини с лук", "2,10", "130", ""],
["", "salata-morski-darove", "Салата морски дарове", "4,20", "250", ""],
["", "salata-czarevicza-s-piperki", "Салата царевица с пиперки", "2,80", "200", ""],
["", "kartofena-lyutika", "Картофена лютика", "2,80", "300", ""],
["", "kartofena-salata", "Картофена салата", "2,10", "200", ""],
["", "czveklo-i-morkovi", "Цвекло и моркови", "2,80", "150", ""],
["", "zelena-salata-ss-susheni-domati-parmezan-i-orekhi", "Зелена салата със сушени домати, пармезан и орехи", "4,20", "200", ""],
["", "zelena-salata-s-proshuto", "Зелена салата с прошуто", "4,20", "250", ""]

            ],

            "Топли предястия и аламинути": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "180", ""],
["", "sirene-na-khapki-pane", "Сирене на хапки пане", "2,80", "150", ""],
["", "kashkavaleni-khapki-pane", "Кашкавалени хапки пане", "2,80", "150", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "3,50", "150", ""],
["", "topeno-sirene-pane", "Топено сирене пане", "2,80", "150", ""],
["", "rulcza-ot-raczi-pane", "Рулца от раци пане", "2,10", "120", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "180", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "150", ""],
["", "kartofi-s-bekon-i-kashkaval-na-peshh", "Картофи с бекон и кашкавал на пещ", "2,80", "250", ""],
["", "bekon-s-yajcze", "Бекон с яйце", "2,80", "180", ""],
["", "sirene-po-vrachanski", "Сирене по врачански", "2,80", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "200", ""],
["", "khrupkavi-pileshki-zhulieni", "Хрупкави пилешки жулиени", "3,50", "150", ""]

            ],

            "pasta": [
                ["", "spageto-na-sedmoto-nebe", "Спагето на седмото небе", "4,90", "300", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "300", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,20", "300", ""],
["", "spageti-proshuto-fungi", "Спагети Прошуто фунги", "4,20", "300", ""],
["", "spageti-prima-vera", "Спагети Прима вера", "4,20", "300", ""],
["", "spageti-formadzho", "Спагети Формаджо", "4,90", "300", ""],
["", "lazanya", "Лазаня", "4,20", "250", ""],
["", "kaneloni", "Канелони", "4,90", "300", ""]

            ],

            "Пица на пещ": [
                ["", "margarita-klasik", "Маргарита класик", "4,90", "", ""],
["", "milevi", "Милеви", "7,00", "", ""],
["", "boromea", "Боромеа", "3,50", "", ""],
["", "piperoni", "Пиперони", "3,50", "", ""],
["", "sicziliano", "Сицилиано", "4,90", "", ""],
["", "gambareti", "Гамбарети", "6,30", "", ""],
["", "frudi-di-mare", "Фруди ди маре", "7,70", "", ""],
["", "dela-kaza", "Дела каза", "4,20", "", ""],
["", "prima-vera", "Прима вера", "3,50", "", ""],
["", "boloneze", "Болонезе", "3,50", "", ""],
["", "valentino", "Валентино", "4,20", "", ""],
["", "tuti-fruti", "Тути фрути", "3,50", "", ""],
["", "peskatore", "Пескаторе", "7,00", "", ""],
["", "kuatro-stadzhone", "Куатро стаджоне", "4,20", "", ""],
["", "roma", "Рома", "4,90", "", ""],
["", "kalczone-speczialna---zatvorena", "Калцоне специална - затворена", "5,60", "", ""],
["", "kalczone-zatvorena", "Калцоне затворена", "4,20", "", ""],
["", "fungi", "Фунги", "3,50", "", ""],
["", "pikante", "Пиканте", "4,90", "", ""],
["", "mafiozo", "Мафиозо", "4,90", "", ""],
["", "salami", "Салами", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "al-tono", "Ал тоно", "7,00", "", ""],
["", "romana", "Романа", "4,20", "", ""],
["", "neapolitana", "Неаполитана", "6,30", "", ""],
["", "byala-picza", "Бяла пица", "4,20", "", ""],
["", "gorgonzola", "Горгонзола", "3,50", "", ""],
["", "speczialna", "Специална", "6,30", "", ""],
["", "khavaj", "Хавай", "4,20", "", ""],
["", "romul-i-rem", "Ромул и Рем", "5,60", "", ""],
["", "spinadzhi", "Спинаджи", "4,20", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "4,90", "", ""],
["", "parmedzhano", "Пармеджано", "5,60", "", ""],
["", "karbonara", "Карбонара", "4,90", "", ""],
["", "iliano", "Илиано", "4,90", "", ""],
["", "picza-proshuto", "Пица прошуто", "8,40", "", ""],
["", "picza-peperoni---klasik", "Пица Пеперони - класик", "6,30", "", ""]

            ],

            "grill": [
                ["", "svinsko-file", "Свинско филе", "5,60", "200", ""],
["", "svinski-kareta", "Свински карета", "5,60", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "200", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "90", ""],
["", "svinsko-file---dzhob", "Свинско филе - джоб", "6,30", "", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,10", "130", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "200", ""],
["", "pileshka-pzhola-file", "Пилешка пъжола филе", "4,90", "200", ""]

            ],

            "Ястия от свинско месо": [
                ["", "speczialitet-filetni-de-la-kaza", "Специалитет Филетни де ла каза", "7,00", "300", ""],
["", "speczialitet-stek-milevi", "Специалитет Стек Милеви", "7,00", "250", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "6,30", "250", ""],
["", "svinsko-file-v-gben-sos", "Свинско филе в гъбен сос", "6,30", "320", ""],
["", "svinsko-file-v-smetanov-sos", "Свинско филе в сметанов сос", "6,30", "350", ""],
["", "svinsko-file-kalabriya", "Свинско филе Калабрия", "6,30", "280", ""],
["", "kavrma", "Кавърма", "6,30", "300", ""],
["", "kebap-s-yajcze", "Кебап с яйце", "6,30", "300", ""],
["", "mrvki-s-luk", "Мръвки с лук", "6,30", "350", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshka-przhola-ot-but-v-gben-sos", "Пилешка пържола от бут в гъбен сос", "5,60", "320", ""],
["", "pile-rokfor", "Пиле Рокфор", "5,60", "300", ""],
["", "pileshka-przhola-ot-but-v-chesnov-sos", "Пилешка пържола от бут в чеснов сос", "5,60", "300", ""],
["", "pile-bearnez", "Пиле Беарнез", "5,60", "300", ""],
["", "pile-lyutika", "Пиле лютика", "5,60", "350", ""],
["", "pileshka-przhola-ot-file-s-bekon-i-smetana", "Пилешка пържола от филе с бекон и сметана", "5,60", "350", ""],
["", "pile-moczarela", "Пиле моцарела", "5,60", "350", ""],
["", "meksikansko-pile", "Мексиканско пиле", "5,60", "350", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "3,50", "300", ""],
["", "pileshki-dobcheta-s-luk-i-gbi", "Пилешки добчета с лук и гъби", "4,20", "400", ""],
["", "pileshki-kscheta-vrkhu-spageti", "Пилешки късчета върху спагети", "4,90", "300", ""],
["", "speczialitet-filetini-de-la-kaza", "Специалитет Филетини де ла каза", "7,00", "400", ""],
["", "pileshka-przhola-v-pikanten-sos", "Пилешка пържола в пикантен сос", "5,60", "300", ""]

            ],

            "Рибни ястия": [
                ["", "file-ot-byala-riba-pane", "Филе от бяла риба пане", "3,50", "200", ""],
["", "khek", "Хек", "3,50", "180", ""],
["", "skumriya", "Скумрия", "3,50", "200", ""],
["", "skumriya-v-domaten-sos", "Скумрия в доматен сос", "3,50", "250", ""],
["", "pstrva", "Пъстърва", "5,60", "250", ""],
["", "pstrva-v-sos-bearnez", "Пъстърва в сос Беарнез", "6,30", "300", ""],
["", "czipura", "Ципура", "9,80", "350", ""],
["", "lavrak", "Лаврак", "9,80", "350", ""]

            ],

            "Сосове и други": [
                ["", "byal-chesnov-sos", "Бял чеснов сос", "0,70", "150", ""],
["", "domaten-sos", "Доматен сос", "0,70", "150", ""],
["", "pinko-smes", "Пинко смес", "0,70", "150", ""],
["", "ketchup", "Кетчуп", "0,70", "150", ""],
["", "majoneza", "Майонеза", "0,70", "150", ""],
["", "chili", "Чили", "0,70", "150", ""],
["", "gorchicza", "Горчица", "0,70", "150", ""],
["", "marinovani-lyuti-chushleta", "Мариновани люти чушлета", "1,40", "150", ""],
["", "lyuta-pasta", "Люта паста", "1,40", "100", ""],
["", "pesto", "Песто", "1,40", "", ""]

            ]
        }', 
        'slug' => 'picariya-milevi',
        'business_name' => 'Пицария Милеви',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vratsa',
        'region' => 'Vratsa',
        'postal_code' => '3000',
        'address' => 'ул. Булаир 3',
        'address_additional' => '',
        'coords_x' => '43.20024459',
        'coords_y' => '23.54658678',
        'phone' => '+359878555123',
        'email' => '',
        'website' => '',
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
                ["", "svezha-salata-s-avokado", "Свежа салата с авокадо", "7,00", "300", ""],
["", "kapreze-s-bosilekovo-pesto", "Капрезе с босилеково песто", "5,60", "300", ""],
["", "svezha-salata-ss-sino-sirene", "Свежа салата със синьо сирене", "7,00", "300", ""],
["", "kapreze-s-koze-sirene", "Капрезе с козе сирене", "6,30", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "350", ""],
["", "salata-s-takhini-dresing", "Салата с тахини дресинг", "6,30", "300", ""],
["", "midi-salata", "Миди салата", "4,20", "200", ""]

            ],

            "Брускети": [
                ["", "rikota-susheni-domati-i-bosilekovo-pesto", "Рикота, сушени домати и босилеково песто", "3,50", "120", ""],
["", "salcza", "Салца", "3,50", "120", ""],
["", "maslinova-pasta-cheri-domati-i-parmezan", "Маслинова паста, чери домати и пармезан", "3,50", "120", ""]

            ],

            "starters": [
                ["", "khrupkavi-pileshki-khapki", "Хрупкави пилешки хапки", "4,90", "300", ""],
["", "kashkaval-na-plocha-s-presni-domatki", "Кашкавал на плоча  с пресни доматки", "3,50", "250", ""],
["", "presni-przheni-kartofki", "Пресни пържени картофки", "2,80", "300", ""],
["", "przheni-kartofki", "Пържени картофки", "2,10", "250", ""],
["", "rulcza-ot-tikvichki-s-krave-sirene", "Рулца от тиквички с краве сирене", "4,20", "180", ""]

            ],

            "Риба и морски деликатеси": [
                ["", "chernomorski-vatus", "Черноморски Ватус", "9,10", "250", ""],
["", "czacza", "Цаца", "2,80", "150", ""],
["", "czipura-na-plocha-s-bilki-limon-i-zekhtin", "Ципура на плоча с билки,  лимон и зехтин", "9,80", "350", ""],
["", "safrid", "Сафрид", "4,90", "200", ""],
["", "chernokop", "Чернокоп", "9,10", "250", ""],
["", "tigrovi-skaridi-s-bilki-i-maslo", "Тигрови скариди с билки и масло", "8,40", "180", ""],
["", "midi-v-cherupka-zadusheni-v-byalo-vino-i-svezhi-bilki", "Миди в черупка задушени в бяло вино  и свежи билки", "5,60", "500", ""],
["", "kalmar-na-plocha-s-dresing-ladolemono", "Калмар на плоча с дресинг Ладолемоно", "7,00", "250", ""],
["", "midi-na-tigan-s-bilki", "Миди на тиган с билки", "4,90", "200", ""]

            ],

            "burgers": [
                ["", "vegetarianski-burger", "Вегетариански бургер", "5,60", "350", ""],
["", "burger-s-bekon-i-yajcze", "Бургер с бекон и яйце", "6,30", "350", ""],
["", "pileshki-burger", "Пилешки бургер", "6,30", "350", ""],
["", "teleshki-burger", "Телешки бургер", "7,00", "380", ""]

            ],

            "Месни ястия": [
                ["", "svinski-karencza-s-frenski-sos", "Свински каренца с френски сос", "7,00", "250", ""],
["", "pileshko-file-ss-sos-chimichuri", "Пилешко филе със сос Чимичури", "5,60", "200", ""],
["", "teleshki-kyufteta-ss-salcza", "Телешки кюфтета със салца", "6,30", "280", ""]

            ],

            "desserts": [
                ["", "domashen-desert-na-denya", "Домашен десерт на деня", "3,50", "200", ""]

            ]
        }', 
        'slug' => 'restorant-stela',
        'business_name' => 'Ресторант Stela',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Nessebar',
        'region' => 'Nessebar',
        'postal_code' => '8230',
        'address' => 'ул. Отец Паисий 37',
        'address_additional' => '',
        'coords_x' => '42.6439793',
        'coords_y' => '27.6757807',
        'phone' => '+359988744624',
        'email' => '',
        'website' => '',
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
            
            "Препоръчано": [
                ["", "meshana-skara-miks-za-chetirima", "Мешана скара микс за четирима", "32,20", "", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "7,00", "350", ""],
["", "meshana-skara-miks-za-dvama", "Мешана скара микс за двама", "26,60", "", ""]

            ],

            "salads": [
                ["", "tuna-salata", "Туна салата", "4,90", "350", ""],
["", "grczka", "Гръцка", "3,50", "350", ""],
["", "ovcharska", "Овчарска", "4,20", "450", ""],
["", "kapreze", "Капрезе", "4,90", "350", ""],
["", "shopska", "Шопска", "3,50", "350", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "350", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "250", ""]

            ],

            "soups": [
                ["", "gbena", "Гъбена", "2,80", "350", ""],
["", "tarator", "Таратор", "2,10", "350", ""],
["", "domatena", "Доматена", "2,80", "350", ""],
["", "pileshka", "Пилешка", "2,10", "350", ""]

            ],

            "Закуски": [
                ["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "4,90", "", ""],
["", "mekiczi-s-domashno-sladko", "Мекици с домашно сладко", "4,20", "", ""],
["", "anglijska-zakuska", "Английска закуска", "7,00", "", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "4,90", "", ""]

            ],

            "burgers": [
                ["", "burger-al-kapone-s-przheni-kartofi", "Бургер Ал Капоне с пържени картофи", "7,00", "350", ""],
["", "burger-blek-angs-s-przheni-kartofi", "Бургер Блек Ангъс с пържени картофи", "9,80", "350", ""],
["", "teleshki-burger-klasik-s-przheni-kartofi", "Телешки бургер класик с пържени картофи", "5,60", "300", ""],
["", "burger-nyu-jork-s-przheni-kartofi", "Бургер Ню Йорк с пържени картофи", "7,00", "350", ""],
["", "burger-kentki-s-przheni-kartofi", "Бургер Кентъки с пържени картофи", "5,60", "350", ""],
["", "fish-burger-s-przheni-kartofi", "Фиш Бургер с пържени картофи", "5,60", "350", ""],
["", "giros-porcziya", "Гирос порция", "7,00", "500", ""]

            ],

            "alaminuti": [
                ["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,80", "200", ""],
["", "pileshki-khapki-s-przheni-kartofi", "Пилешки хапки с пържени картофи", "5,60", "300", ""],
["", "kashkaval-pane-s-przheni-kartofi", "Кашкавал пане с пържени картофи", "7,00", "300", ""],
["", "pileshki-krilcza-kentki-s-przheni-kartofi", "Пилешки крилца Кентъки с пържени картофи", "5,60", "300", ""]

            ],

            "pasta": [
                ["", "amatrichana-lyuti", "Аматричана люти", "5,60", "350", ""],
["", "spageti-ss-somga-i-skaridi", "Спагети със сьомга и скариди", "5,60", "", ""],
["", "karbonara", "Карбонара", "5,60", "350", ""],
["", "boloneze", "Болонезе", "5,60", "350", ""]

            ],

            "pizza": [
                ["", "al-salmone", "Ал Салмоне", "8,40", "500", ""],
["", "kaprichoza", "Капричоза", "7,70", "500", ""],
["", "proshuto", "Прошуто", "8,40", "500", ""],
["", "margarita", "Маргарита", "6,30", "400", ""],
["", "tuna", "Туна", "7,70", "500", ""],
["", "khavaj", "Хавай", "7,70", "500", ""],
["", "peperoni", "Пеперони", "7,70", "500", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "8,40", "500", ""],
["", "byagashho-pile", "Бягащо пиле", "8,40", "500", ""],
["", "amatrichani", "Аматричани", "8,40", "500", ""],
["", "peperoni-bianko", "Пеперони Бианко", "7,70", "500", ""],
["", "salami", "Салами", "7,00", "500", ""],
["", "kalczone", "Калцоне", "8,40", "500", ""],
["", "kuatro-salami", "Куатро Салами", "8,40", "500", ""]

            ],

            "Сос": [
                ["", "grejvi", "Грейви", "1,40", "150", ""],
["", "gben", "Гъбен", "1,40", "150", ""],
["", "pepr", "Пепър", "1,40", "150", ""],
["", "kri", "Къри", "1,40", "150", ""]

            ],

            "Италиянски хляб": [
                ["", "fokacha-s-chesn", "Фокача с чесън", "2,80", "250", ""],
["", "fokacha-s-moczarela-i-chesn", "Фокача с моцарела и чесън", "2,80", "300", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "fish": [
                ["", "lavrak", "Лаврак", "14,00", "400", ""],
["", "skumriya", "Скумрия", "7,00", "350", ""],
["", "somga", "Сьомга", "15,40", "350", ""],
["", "czipura", "Ципура", "14,00", "400", ""],
["", "fish-chips", "Фиш чипс", "6,30", "300", ""],
["", "safrid-s-przheni-kartofi", "Сафрид с пържени картофи", "8,40", "350", ""],
["", "kalmari-po-grczki", "Калмари по Гръцки", "8,40", "200", ""],
["", "skaridi-po-sredizemnomorski", "Скариди по Средиземноморски", "8,40", "200", ""],
["", "plato-miks", "Плато микс", "12,60", "350", ""],
["", "midi-po-italiyanski", "Миди по Италиянски", "10,50", "", ""],
["", "zargan", "Зарган", "11,20", "200", ""],
["", "vatus", "Ватус", "11,20", "200", ""]

            ],

            "Ястия от пиле": [
                ["", "pileshki-stek-file", "Пилешки стек филе", "8,40", "350", ""],
["", "pile-kri-s-oriz", "Пиле Къри с ориз", "7,00", "300", ""],
["", "pile-chetiri-sirena", "Пиле Четири сирена", "7,00", "350", ""],
["", "pileshko-shishche", "Пилешко шишче", "6,30", "", ""],
["", "pecheno-pile", "Печено пиле", "8,40", "800", ""],
["", "pileshka-meshana-skara", "Пилешка мешана скара", "9,80", "500", ""]

            ],

            "Ястия свинско месо": [
                ["", "svinski-shishcheta", "Свински шишчета", "6,30", "", ""],
["", "shniczel-po-vienski", "Шницел по Виенски", "13,30", "300", ""],
["", "svinski-kralski-kotlet", "Свински кралски котлет", "9,80", "500", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "8,40", "300", ""],
["", "svinski-stek", "Свински стек", "9,80", "300", ""],
["", "svinska-meshana-skara", "Свинска мешана скара", "9,80", "500", ""],
["", "svinski-rebra-s-barbekyu-sos", "Свински ребра с барбекю сос", "18,20", "", ""],
["", "svinski-rebra-s-barbekyu-sos", "Свински ребра с барбекю сос", "7,70", "300", ""]

            ],

            "Ястия телешко месо": [
                ["", "teleshki-stek", "Телешки стек", "15,40", "350", ""],
["", "ti-bon", "Ти Бон", "17,50", "", ""],
["", "ribaj-stek-s-luk", "Рибай стек с лук", "18,90", "350", ""]

            ],

            "Ястия агнешко": [
                ["", "agneshka-przhola", "Агнешка пържола", "14,00", "", ""],
["", "agneshka-meshana-skara", "Агнешка мешана скара", "21,00", "", ""],
["", "agneshko-pecheno", "Агнешко печено", "12,60", "", ""],
["", "agneshki-kotleti", "Агнешки котлети", "15,40", "", ""]

            ],

            "Българска кухня": [
                ["", "sach-s-agneshko-meso", "Сач с агнешко месо", "15,40", "500", ""],
["", "sach-ss-svinsko-meso", "Сач със свинско месо", "12,60", "500", ""],
["", "sach-s-pileshko-meso", "Сач с пилешко месо", "12,60", "500", ""],
["", "kavrma", "Кавърма", "7,00", "350", ""]

            ],

            "Мексиканска кухня": [
                ["", "nachos", "Начос", "4,20", "150", ""],
["", "takos-s-pileshko", "Такос с пилешко", "10,50", "250", ""],
["", "borito-s-teleshko", "Борито с телешко", "10,50", "300", ""],
["", "borito-s-pile", "Борито с пиле", "10,50", "300", ""],
["", "takos-ss-skaridi", "Такос със скариди", "10,50", "250", ""]

            ],

            "desserts": [
                ["", "tiramisu", "Тирамису", "4,20", "", ""],
["", "sufle-s-topka-sladoled", "Суфле с топка сладолед", "6,30", "", ""]

            ]
        }', 
        'slug' => 'venera-steak-house',
        'business_name' => 'Venera Steak House',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Slanchev Bryag',
        'region' => 'Slanchev Bryag',
        'postal_code' => '8240',
        'address' => 'Арт Стрийт 8240',
        'address_additional' => '',
        'coords_x' => '42.69678014',
        'coords_y' => '27.71322968',
        'phone' => '+359899890138',
        'email' => '',
        'website' => '',
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
                ["", "shopska-salata", "Шопска салата", "3,50", "380", ""],
["", "trakijska-salata", "Тракийска салата", "3,50", "200", ""],
["", "bulgareze", "Булгарезе", "4,90", "350", ""],
["", "domashna-salata", "Домашна салата", "4,20", "350", ""],
["", "salata-s-meden-dresing-i-zapecheno-koze-sirene", "Салата с меден дресинг и запечено козе сирене", "7,00", "350", ""]

            ],

            "Морски закуски": [
                ["", "chiroz", "Чироз", "4,20", "70", ""],
["", "riben-mash", "Рибен маш", "4,90", "200", ""],
["", "tarama-khajver", "Тарама хайвер", "3,50", "200", ""]

            ],

            "starters": [
                ["", "guakamole", "Гуакамоле", "3,50", "180", ""],
["", "bajganeti", "Байганети", "4,20", "180", ""],
["", "brokoli-ss-sino-sirene", "Броколи със синьо сирене", "6,30", "220", ""],
["", "zadusheni-brokoli", "Задушени броколи", "4,90", "180", ""],
["", "piper-v-domaten-sos-ss-sirene", "Пипер в доматен сос със сирене", "4,90", "300", ""],
["", "tikvichki-po-solunski", "Тиквички по солунски", "4,20", "200", ""],
["", "pikantna-tiro-razyadka", "Пикантна тиро разядка", "4,90", "180", ""],
["", "pipala-ot-kalmari-i-oktopod", "Пипала от калмари и октопод", "14,00", "220", ""],
["", "zadusheni-kalmari-s-kopr-i-chesn", "Задушени калмари с копър и чесън", "11,20", "150", ""],
["", "kalmari-po-solunski", "Калмари по солунски", "11,20", "200", ""],
["", "miks-morski-izkusheniya", "Микс морски изкушения", "12,60", "200", ""]

            ],

            "Рибни ястия": [
                ["", "filetirani-popcheta", "Филeтирани попчета", "8,40", "280", ""],
["", "przhen-safrid", "Пържен сафрид", "5,60", "200", ""],
["", "kalkan-na-tigan", "Калкан на тиган", "22,40", "250", ""],
["", "byala-riba-s-cheri-domati-i-kapersi", "Бяла риба с чери домати и каперси", "9,80", "250", ""]

            ],

            "Месни ястия": [
                ["", "pileshki-krekhki-karencza", "Пилешки крехки каренца", "8,40", "280", ""],
["", "pileshki-khrupkavi-filencza", "Пилешки хрупкави филенца", "8,40", "220", ""],
["", "pileshki-prchiczi-ss-sosove", "Пилешки пръчици със сосове", "8,40", "220", ""],
["", "konsko-s-yajcza-i-luk-su-vid", "Конско с яйца и лук Су-вид", "11,20", "280", ""],
["", "teleshki-gulash-su-vid", "Телешки гулаш Су-вид", "9,80", "", ""],
["", "sukha-kavrma-bon-file", "Суха кавърма бон филе", "9,80", "200", ""],
["", "sukha-kavrma-vrat", "Суха кавърма врат", "8,40", "200", ""]

            ],

            "Балканска скара": [
                ["", "pileshko-bon-file", "Пилешко бон филе", "9,80", "280", ""],
["", "svinski-shishcheta", "Свински шишчета", "5,60", "180", ""],
["", "svinski-kebapcheta-s-garnitura", "Свински кебапчета с гарнитура", "4,90", "300", ""],
["", "svinski-yufteta-ankhialo-s-garnitura", "Свински юфтета Анхиало с гарнитура", "4,90", "300", ""],
["", "svinsko-bon-file", "Свинско бон филе", "13,30", "280", ""],
["", "svinski-shniczel-po-vienski", "Свински шницел по виенски", "11,20", "200", ""],
["", "svinski-rebrcza-s-barbekyu-sos", "Свински ребърца с барбекю сос", "9,10", "250", ""],
["", "svinsko-teleshka-pleskavicza-s-lyutenicza", "Свинско-телешка плескавица с лютеница", "7,00", "210", ""],
["", "svinska-meshana-skara", "Свинска мешана скара", "9,80", "400", ""],
["", "orientalski-kyufteta-s-grilovani-zelenchuczi-i-lyutenicza", "Ориенталски кюфтета с гриловани зеленчуци и лютеница", "9,80", "350", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "8,40", "200", ""],
["", "zelenchuczi-na-barbekyu", "Зеленчуци на барбекю", "4,90", "400", ""]

            ],

            "pizza": [
                ["", "kaprichoza", "Капричоза", "6,30", "540", ""],
["", "mafiozo", "Мафиозо", "2,80", "460", ""],
["", "margarita", "Маргарита", "4,90", "400", ""],
["", "dyavola", "Дявола", "6,30", "450", ""],
["", "san-dzhordzho", "Сан Джорджо", "7,00", "480", ""]

            ],

            "Безмесни ястия": [
                ["", "ogreten-patatnik", "Огретен пататник", "4,90", "300", ""],
["", "patladzhan-i-bamya-gratin", "Патладжан и бамя гратин", "6,30", "350", ""]

            ],

            "Ястия на уок тиган": [
                ["", "pekin-sladko-kiselo", "Пекин сладко-кисело", "9,10", "380", ""],
["", "imperatorsko-lyuto", "Императорско люто", "9,10", "380", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "2,80", "200", ""],
["", "przheni-presni-kartofi", "Пържени пресни картофи", "3,50", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "200", ""],
["", "miks", "Микс", "4,90", "150", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "2,80", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "2,10", "100", ""]

            ],

            "Пърленки": [
                ["", "ss-sirene", "Със сирене", "2,80", "210", ""],
["", "kombinirana", "Комбинирана", "2,80", "240", ""],
["", "s-kashkaval", "С кашкавал", "2,80", "210", ""],
["", "s-chesn", "С чесън", "2,80", "150", ""],
["", "klasicheska", "Класическа", "2,80", "150", ""]

            ],

            "desserts": [
                ["", "bananov-kejk-s-mus-ot-techen-shokolad", "Бананов кейк с мус от течен шоколад", "4,20", "150", ""],
["", "domashna-morkovena-torta", "Домашна морковена торта", "4,20", "150", ""],
["", "chijzkejk-s-domashno-sladko-ot-borovinki", "Чийзкейк с домашно сладко от боровинки", "4,20", "130", ""],
["", "biskvitena-torta-bambolino", "Бисквитена торта Бамболино", "3,50", "150", ""]

            ]
        }', 
        'slug' => 'saint-george-bar',
        'business_name' => 'Saint George Bar &amp; Grill',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pomorie',
        'region' => 'Pomorie',
        'postal_code' => '8200',
        'address' => 'бул. Пейо Крачолов Яворов 15',
        'address_additional' => '',
        'coords_x' => '42.5565813',
        'coords_y' => '27.6396969',
        'phone' => '+359887346925',
        'email' => '',
        'website' => '',
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
                ["", "tarator", "Таратор", "1,40", "350", ""]

            ],

            "salads": [
                ["", "salata-snezhanka", "Салата Снежанка", "2,80", "200", ""],
["", "vareni-kartofi-s-majoneza", "Варени картофи с майонеза", "2,80", "250", ""],
["", "domati", "Домати", "2,80", "200", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,80", "200", ""],
["", "krastaviczi", "Краставици", "2,80", "200", ""],
["", "salata-pecheni-chushki", "Салата печени чушки", "3,50", "200", ""],
["", "salata-morkovi", "Салата моркови", "2,80", "200", ""],
["", "salata-midi", "Салата миди", "3,50", "200", ""],
["", "ruska-salata", "Руска салата", "3,50", "200", ""],
["", "zele-s-morkovi-i-majoneza", "Зеле с моркови и майонеза", "2,80", "300", ""],
["", "meshana-salata", "Мешана салата", "2,80", "200", ""],
["", "selska-salata", "Селска салата", "3,50", "300", ""],
["", "meksikanska-salata", "Мексиканска салата", "3,50", "250", ""],
["", "salata-riba-ton", "Салата риба тон", "4,20", "300", ""],
["", "salata-slncze", "Салата Слънце", "6,30", "700", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "zhtvarska-salata", "Жътварска салата", "3,50", "300", ""],
["", "salata-lyatna", "Салата лятна", "3,50", "250", ""]

            ],

            "Топли предястия": [
                ["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "4,20", "250", ""],
["", "pileshki-przheni-drobcheta", "Пилешки пържени дробчета", "3,50", "200", ""],
["", "przheni-pileshki-srcza", "Пържени пилешки сърца", "3,50", "200", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "250", ""],
["", "pileshki-vodenichki", "Пилешки воденички", "3,50", "200", ""],
["", "ezik-pane", "Език пане", "6,30", "250", ""],
["", "pileshki-filencza-ss-susam", "Пилешки филенца със сусам", "5,60", "200", ""],
["", "pileshki-khapki", "Пилешки хапки", "5,60", "200", ""],
["", "pileshki-kscheta-s-gbi-chesn-i-soev-sos", "Пилешки късчета с гъби, чесън и соев сос", "6,30", "300", ""],
["", "pileshki-ezicheta", "Пилешки езичета", "5,60", "300", ""],
["", "ezik-v-maslo", "Език в масло", "5,60", "200", ""],
["", "sirene-pane", "Сирене пане", "4,20", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,90", "200", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,90", "150", ""],
["", "plneni-gbi", "Пълнени гъби", "5,60", "200", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "4,20", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "zapecheni-kartofi", "Запечени картофи", "5,60", "300", ""]

            ],

            "Постни мезета": [
                ["", "topeni-sirencza-s-kornflejks", "Топени сиренца с корнфлейкс", "4,90", "200", ""],
["", "topeni-sirencza-ss-susam", "Топени сиренца със сусам", "4,90", "200", ""]

            ],

            "alaminuti": [
                ["", "przheni-kartofi", "Пържени картофи", "2,80", "200", ""],
["", "chushki-byurek", "Чушки бюрек", "4,90", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "200", ""],
["", "omlet-asorti", "Омлет Асорти", "2,80", "200", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "200", ""],
["", "omlet-natyur", "Омлет натюр", "2,10", "150", ""],
["", "omlet-ss-shunka", "Омлет със шунка", "2,80", "200", ""]

            ],

            "specialties": [
                ["", "speczialitet-kukeri", "Специалитет Кукери", "11,20", "400", ""],
["", "speczialitet-slncze", "Специалитет Слънце", "11,90", "600", ""],
["", "svinsko-vreteno", "Свинско вретено", "7,00", "400", ""],
["", "speczialitet-kiten", "Специалитет Китен", "11,90", "600", ""],
["", "speczialitet-shpaga", "Специалитет Шпага", "11,90", "350", ""],
["", "shniczel-po-vienski", "Шницел по Виенски", "7,00", "300", ""],
["", "pileshko-vreteno", "Пилешко вретено", "7,00", "400", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "6,30", "300", ""],
["", "bof-stroganov", "Бьоф Строганов", "19,60", "300", ""],
["", "teleshki-stek", "Телешки стек", "19,60", "300", ""]

            ],

            "Кулинарни изкушения": [
                ["", "kombiniran-sach", "Комбиниран сач", "14,00", "800", ""],
["", "banski-sach", "Бански сач", "15,40", "800", ""],
["", "svinski-sach", "Свински сач", "14,00", "800", ""],
["", "sach-slncze", "Сач Слънце", "16,80", "800", ""],
["", "pileshki-sach", "Пилешки сач", "14,00", "800", ""],
["", "khajdushko-meze", "Хайдушко мезе", "15,40", "600", ""],
["", "speczialitet-gladiator", "Специалитет Гладиатор", "47,60", "", ""],
["", "shashlik-neptun", "Шашлик Нептун", "20,30", "1200", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "10,50", "600", ""],
["", "mekhandzhijski-shashlik", "Механджийски шашлик", "11,20", "800", ""]

            ],

            "Casseroles": [
                ["", "gyuveche-po-gradinarski", "Гювече по градинарски", "4,20", "300", ""],
["", "pileshko-gyuveche", "Пилешко гювече", "5,60", "350", ""],
["", "svinsko-gyuveche", "Свинско гювече", "5,60", "350", ""],
["", "sirene-po-shopski", "Сирене по шопски", "4,20", "350", ""],
["", "gyuveche-asorti", "Гювече асорти", "4,20", "350", ""],
["", "kavrma-po-radomirski", "Кавърма по радомирски", "5,60", "400", ""]

            ],

            "grill": [
                ["", "svinsko-bon-file-na-skara", "Свинско бон филе на скара", "7,00", "200", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "4,90", "250", ""],
["", "svinska-przhola-na-skara", "Свинска пържола на скара", "6,30", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,80", "150", ""],
["", "pileshka-przhola-na-skara", "Пилешка пържола на скара", "4,90", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "2,80", "150", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "srbska-pleskavicza", "Сръбска плескавица", "4,20", "300", ""],
["", "svinski-shashlik", "Свински шашлик", "11,20", "600", ""],
["", "nevrozno-kyufte", "Неврозно кюфте", "0,70", "100", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,10", "200", ""],
["", "bekon-na-skara", "Бекон на скара", "4,20", "150", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "5,60", "250", ""],
["", "svinski-kareta", "Свински карета", "6,30", "250", ""],
["", "pileshko-shishche-s-bekon", "Пилешко шишче с бекон", "2,80", "150", ""]

            ],

            "pasta": [
                ["", "fruti-di-mare", "Фрути ди маре", "5,60", "450", ""],
["", "neapolitana", "Неаполитана", "4,20", "450", ""],
["", "boloneze", "Болонезе", "4,90", "450", ""],
["", "kachatore", "Качаторе", "4,90", "450", ""],
["", "karbonara", "Карбонара", "4,90", "450", ""],
["", "laczio", "Лацио", "4,90", "450", ""]

            ],

            "Ястия с пилешко": [
                ["", "pile-zhulien", "Пиле Жулиен", "7,00", "400", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "6,30", "400", ""],
["", "pileshko-file-pane", "Пилешко филе пане", "5,60", "300", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "11,20", "600", ""],
["", "przheni-pileshki-krilcza", "Пържени пилешки крилца", "4,20", "250", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "6,30", "400", ""],
["", "pile-ss-smetanov-sos", "Пиле със сметанов сос", "7,00", "300", ""],
["", "pile-ss-zelenchuczi", "Пиле със зеленчуци", "6,30", "400", ""],
["", "pile-rokfor", "Пиле Рокфор", "7,00", "300", ""]

            ],

            "Ястия със свинско": [
                ["", "svinsko-bon-file-natyur", "Свинско бон филе натюр", "7,00", "250", ""],
["", "svinsko-file-zhulien", "Свинско филе Жулиен", "7,00", "400", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "7,00", "400", ""],
["", "svinska-kavrma", "Свинска кавърма", "6,30", "400", ""],
["", "svinsko-file-po-selski", "Свинско филе по селски", "7,00", "400", ""]

            ],

            "Риба и морски дарове": [
                ["", "popcheta-przheni", "Попчета пържени", "4,90", "200", ""],
["", "safrid-przhen", "Сафрид пържен", "6,30", "200", ""],
["", "skumriya-na-skara", "Скумрия на скара", "5,60", "200", ""],
["", "safrid-na-skara", "Сафрид на скара", "6,30", "200", ""],
["", "zargan-na-skara", "Зарган на скара", "12,60", "300", ""],
["", "khek-pane", "Хек пане", "5,60", "200", ""],
["", "akula-pane", "Акула пане", "5,60", "200", ""],
["", "vatos", "Ватос", "5,60", "200", ""],
["", "chernokop-na-skara", "Чернокоп на скара", "5,60", "200", ""],
["", "lavrak-na-skara", "Лаврак на скара", "9,80", "250", ""],
["", "czipura-na-skara", "Ципура на скара", "12,60", "250", ""],
["", "barbun-przhen", "Барбун пържен", "5,60", "200", ""],
["", "riba-na", "Риба на", "8,40", "", ""],
["", "rolcza-ot-raczi-s-maslo", "Ролца от раци с масло", "3,50", "150", ""],
["", "kalmari-pane", "Калмари пане", "8,40", "150", ""],
["", "midi-pane", "Миди пане", "5,60", "200", ""]

            ],

            "Пилешки мезета": [
                ["", "pileshki-khapki-s-presni-zelenchuczi", "Пилешки хапки с пресни зеленчуци", "5,60", "300", ""],
["", "pileshki-khapki-s-pikanten-sos", "Пилешки хапки с пикантен сос", "5,60", "300", ""],
["", "pileshki-khapki-s-gbi-i-luk", "Пилешки хапки с гъби и лук", "5,60", "300", ""],
["", "chesnovi-pileshki-khapki", "Чеснови пилешки хапки", "5,60", "300", ""],
["", "pileshki-khapki-v-sladko-kisel-sos", "Пилешки хапки в сладко-кисел сос", "5,60", "300", ""],
["", "pileshki-khapki-s-gben-sos", "Пилешки хапки с гъбен сос", "5,60", "300", ""]

            ],

            "Свински мезета": [
                ["", "svinski-khapki-po-selski", "Свински хапки по селски", "6,30", "300", ""],
["", "svinski-khapki-po-krchmarski", "Свински хапки по кръчмарски", "6,30", "300", ""],
["", "svinski-khapki-s-gbi-i-luk", "Свински хапки с гъби и лук", "6,30", "300", ""],
["", "svinski-khapki-s-gbi-i-kashkaval", "Свински хапки с гъби и кашкавал", "6,30", "300", ""],
["", "chesnovi-khapki-ot-svinsko-meso", "Чеснови хапки от свинско месо", "6,30", "300", ""]

            ],

            "garnish": [
                ["", "topla-garnitura", "Топла гарнитура", "2,10", "250", ""],
["", "studena-garnitura", "Студена гарнитура", "1,40", "250", ""],
["", "brokoli", "Броколи", "0,00", "50", ""],
["", "oriz", "Ориз", "0,00", "50", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,00", "50", ""],
["", "grakh", "Грах", "0,00", "50", ""],
["", "morkovi", "Моркови", "0,00", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""],
["", "garnitura-asorti", "Гарнитура Асорти", "2,10", "250", ""]

            ],

            "sauces": [
                ["", "gben-sos", "Гъбен сос", "0,70", "100", ""],
["", "sos-ketchup", "Сос кетчуп", "0,70", "100", ""],
["", "sos-majoneza", "Сос майонеза", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "sos-gorchicza", "Сос горчица", "0,70", "100", ""],
["", "zekhtin", "Зехтин", "0,70", "100", ""],
["", "balsamov-oczet", "Балсамов оцет", "0,70", "100", ""],
["", "chili-sos", "Чили сос", "0,70", "100", ""],
["", "soev-sos", "Соев сос", "0,70", "100", ""]

            ],

            "bread": [
                ["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "150", ""],
["", "chesnov-khlyab", "Чеснов хляб", "0,00", "50", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "50", ""],
["", "prlenka", "Пърленка", "1,40", "120", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "120", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "150", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "220", ""],
["", "prepechena-filiya-khlyab", "Препечена филия хляб", "0,00", "50", ""],
["", "lyuti-chushki", "Люти чушки", "0,70", "90", ""]

            ]
        }', 
        'slug' => 'bistro-slnce',
        'business_name' => 'Бистро Слънце',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kiten',
        'region' => 'Kiten',
        'postal_code' => '8183',
        'address' => 'ул. Здравец 7',
        'address_additional' => '',
        'coords_x' => '42.23578508',
        'coords_y' => '27.77336326',
        'phone' => '+359885865547',
        'email' => '',
        'website' => '',
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
            
            "Азиатска кухня": [
                ["", "54-soevi-klnove-ss-zele-i-morkovi", "54. Соеви кълнове със зеле и моркови", "4,90", "350", ""],
["", "55-salata-ot-soevi-klnove", "55. Салата от соеви кълнове", "5,60", "350", ""],
["", "56-salata-ot-tri-vida-gbi-i-zelenchuczi", "56. Салата от три вида гъби и зеленчуци", "5,60", "350", ""],
["", "57-salata-ot-vodorasli-i-zelenchuczi", "57. Салата от водорасли и зеленчуци", "4,90", "350", ""],
["", "50-lyutivo-zele-po-kitajski", "50. Лютиво зеле по китайски", "3,50", "350", ""],
["", "51-salata-fn-s", "51. Салата Фън Съ", "4,90", "350", ""],
["", "52-salata-ot-pileshko-zelenchuczi-i-fstczi", "52. Салата от пилешко, зеленчуци и фъстъци", "4,90", "350", ""],
["", "53-kitajska-salata", "53. Китайска салата", "4,90", "350", ""],
["", "58-salata-ot-morski-darove-i-zelenchuczi", "58. Салата от морски дарове и зеленчуци", "7,70", "350", ""],
["", "59-salata-ot-morski-darove-i-2-vida-gbi", "59. Салата от морски дарове и 2 вида гъби", "7,70", "350", ""],
["", "60-kiseli-krastavichki-i-lyuto-pile", "60. Кисели краставички и люто пиле", "4,90", "350", ""],
["", "91-pileshko-ss-zelenchuczi", "91. Пилешко със зеленчуци", "5,60", "400", ""],
["", "92-pileshko-4-vkusa", "92. Пилешко 4 вкуса", "6,30", "400", ""],
["", "93-pileshko-s-kitajski-gbi-zelenchuczi-i-bambuk", "93. Пилешко с китайски гъби, зеленчуци и бамбук", "6,30", "400", ""],
["", "94-pile-po-sechuanski---lyuto", "94. Пиле по Сечуански - люто", "6,30", "400", ""],
["", "95-pileshko-s-aromatni-kitajski-gbi-i-zelenchuczi", "95. Пилешко с ароматни китайски гъби и зеленчуци", "6,30", "400", ""],
["", "96-pileshko-s-oriz-i-zelenchuczi", "96. Пилешко с ориз и зеленчуци", "5,60", "400", ""],
["", "97-pileshko-s-kri-i-zelenchuczi", "97. Пилешко с къри и зеленчуци", "6,30", "400", ""],
["", "98-pileshko-s-kartofi", "98. Пилешко с картофи", "5,60", "400", ""],
["", "100-sladko-kiselo-pileshko-ss-susam", "100. Сладко-кисело пилешко със сусам", "7,00", "350", ""],
["", "101-pileshko-s-gbi-pechurki", "101. Пилешко с гъби печурки", "6,30", "400", ""],
["", "102-pileshko-s-ananas", "102. Пилешко с ананас", "6,30", "400", ""],
["", "103-khrupkavo-przheno-pileshko", "103. Хрупкаво пържено пилешко", "7,70", "400", "https://images.deliveryhero.io/image/fd-bg/Products/1096633.jpg?width=302"],
["", "104-kung-pao---lyuto", "104. Кунг Пао - люто", "6,30", "400", ""],
["", "105-pileshko-s-kartofi-i-gbi-pechurki", "105. Пилешко с картофи и гъби печурки", "6,30", "400", ""],
["", "120-svinsko-ss-zelenchuczi", "120. Свинско със зеленчуци", "5,60", "400", ""],
["", "121-svinsko-s-sladko-kisel-sos-ss-susam", "121. Свинско с сладко-кисел сос със сусам", "8,40", "350", ""],
["", "122-svinsko-po-sechuanski", "122. Свинско по Сечуански", "5,60", "400", ""],
["", "123-svinsko-s-patladzhan-i-zelenchuczi", "123. Свинско с патладжан и зеленчуци", "7,00", "400", ""],
["", "124-svinsko-s-kartofi", "124. Свинско с картофи", "5,60", "400", ""],
["", "125-svinsko-s-aromatni-gbi-i-zelenchuczi", "125. Свинско с ароматни гъби и зеленчуци", "6,30", "400", ""],
["", "126-svinski-rebra-po-kitajski", "126. Свински ребра по Китайски", "9,10", "350", ""],
["", "128-svinsko-s-kitajski-gbi-bambuk-i-zelenchuczi", "128. Свинско с китайски гъби, бамбук и зеленчуци", "6,30", "400", ""],
["", "129-svinsko-na-plocha-s-aromatni-gbi-i-luk", "129. Свинско на плоча с ароматни гъби и лук", "8,40", "350", ""],
["", "130-svinsko-4-vkusa", "130. Свинско 4 вкуса", "6,30", "400", ""],
["", "131-teleshko-ss-zelenchuczi", "131. Телешко със зеленчуци", "7,00", "400", ""],
["", "132-teleshko-s-aromatni-gbi-i-zelenchuczi", "132. Телешко с ароматни гъби и зеленчуци", "7,70", "400", ""],
["", "133-teleshko-po-sechuanski-lyuto", "133. Телешко по сечуански люто", "7,00", "400", ""],
["", "134-teleshko-s-kitajski-gbi-bambuk-i-zelenchuczi", "134. Телешко с китайски гъби, бамбук и зеленчуци", "7,70", "400", ""],
["", "135-teleshko-na-plocha-s-aromatni-gbi-i-luk", "135. Телешко на плоча с ароматни гъби и лук", "9,10", "350", ""],
["", "112-paticza-ss-zelenchuczi", "112. Патица със зеленчуци", "7,00", "400", ""],
["", "113-paticza-s-kitajski-gbi-i-bambuk", "113. Патица с китайски гъби и бамбук", "7,70", "400", ""],
["", "114-paticza-po-sechuanski", "114. Патица по Сечуански", "7,70", "400", ""],
["", "115-paticza-s-kartofi", "115. Патица с картофи", "7,70", "400", ""],
["", "116-khrupkava-przhena-paticza", "116. Хрупкава пържена патица", "8,40", "400", ""],
["", "117-paticza-na-plocha-s-aromatni-gbi-i-luk", "117. Патица на плоча с ароматни гъби и лук", "8,40", "350", ""],
["", "136-khrupkava-przhena-riba", "136. Хрупкава пържена риба", "7,00", "350", ""],
["", "137-riba-v-sladko-kisel-sos-ss-susam", "137. Риба в сладко кисел сос със сусам", "7,70", "350", ""],
["", "138-panirani-skaridi", "138. Панирани скариди", "11,90", "300", ""],
["", "139-kalmari-s-cherni-gbi-bambuk-i-zelenchuczi", "139. Калмари с черни гъби, бамбук и зеленчуци", "8,40", "400", ""],
["", "140-panirani-kalmari", "140. Панирани калмари", "9,10", "300", ""],
["", "varen-oriz", "Варен ориз", "1,40", "150", ""],
["", "61-przhen-oriz-ss-zelenchuczi-i-yajcze", "61. Пържен ориз със зеленчуци и яйце", "3,50", "400", ""],
["", "62-przhen-oriz-s-pileshko-meso-i-yajcze", "62. Пържен ориз с пилешко месо и яйце", "4,20", "400", ""],
["", "63-przhen-oriz-ss-svinsko-meso-i-yajcze", "63. Пържен ориз със свинско месо и яйце", "4,20", "400", ""],
["", "64-przhen-oriz-s-tekeshko-meso-i-yajcze", "64. Пържен ориз с текешко месо и яйце", "4,90", "400", ""],
["", "65-przhen-oriz-s-tri-vida-meso-i-yajcze", "65. Пържен ориз с три вида месо и яйце", "4,90", "400", ""],
["", "72-przheni-spageti-ss-zelenchuczi-i-yajcze", "72. Пържени спагети със зеленчуци и яйце", "3,50", "400", ""],
["", "73-przheni-spageti-s-pileshko-meso-zelenchuczi-i-yajcze", "73. Пържени спагети с пилешко месо, зеленчуци и яйце", "4,90", "400", ""],
["", "74-przheni-spageti-ss-svinsko-meso-zelenchuczi-i-yajcze", "74. Пържени спагети със свинско месо, зеленчуци и яйце", "4,90", "400", ""],
["", "75-przheni-spageti-s-teleshko-meso-zelenchuczi-i-yajcze", "75. Пържени спагети с телешко месо, зеленчуци и яйце", "4,90", "400", ""],
["", "76-przheni-spageti-s-tri-vida-meso-zelenchuczi-i-yajcze", "76. Пържени спагети с три вида месо, зеленчуци и яйце", "4,90", "400", ""],
["", "77-przheni-spageti-s-morski-darove-zelenchuczi-i-yajcze", "77. Пържени спагети с морски дарове, зеленчуци и яйце", "6,30", "400", ""],
["", "141-panirani-midi", "141. Панирани миди", "7,70", "300", ""],
["", "145-skaridi-v-sos", "145. Скариди в сос", "13,30", "300", ""],
["", "142-midi-s-cherni-gbi-bambuk-i-zelenchuczi", "142. Миди с черни гъби, бамбук и зеленчуци", "7,00", "400", ""],
["", "144-skaridi-s-cherni-gbi-bambuk-i-zelenchuczi", "144. Скариди с черни гъби, бамбук и зеленчуци", "11,20", "400", ""],
["", "143-skaridi-ss-zelenchuczi", "143. Скариди със зеленчуци", "10,50", "400", ""],
["", "146-skaridi-v-sladko-kisel-sos-ss-susam", "146. Скариди в сладко-кисел сос със сусам", "12,60", "300", ""],
["", "tri-vida-meso-ss-zelenchuczi", "Три вида месо със зеленчуци", "6,30", "400", ""],
["", "tri-vida-meso-s-aromatni-gbi-i-zelenchuczi", "Три вида месо с ароматни гъби и зеленчуци", "7,00", "400", ""],
["", "tri-vida-meso-kitajski-gbi-bambuk-i-zelenchuczi", "Три вида месо китайски гъби, бамбук и зеленчуци", "7,00", "400", ""],
["", "tri-vida-meso-po-sechuanski", "Три вида месо по Сечуански", "7,00", "400", ""]

            ],

            "Традиционни салати": [
                ["", "shopska", "Шопска", "3,50", "350", ""],
["", "grczka", "Гръцка", "4,20", "390", ""],
["", "ovcharska", "Овчарска", "4,90", "450", ""],
["", "blgarska-salata-s-pecheni-zelenchuczi", "Българска салата с печени зеленчуци", "4,90", "400", ""],
["", "dzadziki", "Дзадзики", "3,50", "250", ""],
["", "kapreze", "Капрезе", "4,90", "400", ""],
["", "kapreze-zuchini", "Капрезе зучини", "5,60", "450", ""],
["", "lyatna-salata", "Лятна салата", "5,60", "620", ""],
["", "czezar-s-pile", "Цезар с пиле", "6,30", "400", ""],
["", "czezar-s-khrupkavi-kalmari", "Цезар с хрупкави калмари", "7,00", "400", ""]

            ],

            "BBQ": [
                ["", "meshana-skara-s-garnitura", "Мешана скара с гарнитура", "7,70", "450", ""],
["", "svinsko-pileshko-i-nadenichka-s-pepechi-zelenchuczi", "Свинско, пилешко и наденичка с пепечи зеленчуци", "7,70", "450", ""],
["", "pileshka-przhola-s-garnitura", "Пилешка пържола с гарнитура", "7,00", "450", ""],
["", "trojka-kyufteta-s-garnitura", "Тройка кюфтета с гарнитура", "5,60", "450", ""],
["", "vratna-przhola-s-garnitura", "Вратна пържола с гарнитура", "7,00", "450", ""],
["", "pileshko-file-s-garnitura", "Пилешко филе с гарнитура", "7,00", "450", ""],
["", "pileshki-shishcheta-s-garnitura", "Пилешки шишчета с гарнитура", "7,00", "450", ""],
["", "pileshko-i-svinsko-s-garnitura", "Пилешко и свинско с гарнитура", "7,70", "450", ""],
["", "trojka-kebapcheta-s-garnitura", "Тройка кебапчета с гарнитура", "5,60", "450", ""],
["", "shareno-mescze-s-aromatni-kartofi", "Шарено месце с ароматни картофи", "7,70", "450", ""],
["", "plnena-pleskavicza-s-shunka-kashkaval-i-garnitura", "Пълнена плескавица с шунка, кашкавал и гарнитура", "7,00", "450", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "prlenka", "Пърленка", "0,70", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "", ""],
["", "pileshki-kareta-s-pecheni-zelenchuczi", "Пилешки карета с печени зеленчуци", "7,00", "450", ""],
["", "svinski-shishcheta-s-garnitura", "Свински шишчета с гарнитура", "7,00", "450", ""],
["", "pileshki-giros", "Пилешки гирос", "7,00", "450", ""],
["", "aromatni-pecheni-zelenchuczi", "Ароматни печени зеленчуци", "4,20", "310", ""]

            ],

            "Ястия": [
                ["", "svinska-przhola-s-gben-sos-i-pecheni-ovkuseni-kartofi", "Свинска пържола с гъбен сос и печени овкусени картофи", "7,00", "330", ""],
["", "brokoli-s-pile-i-sirene-chedr", "Броколи с пиле и сирене чедър", "6,30", "350", ""],
["", "pecheni-kartofi-s-chesnov-sos-i-topeno-sirene", "Печени картофи с чеснов сос и топено сирене", "4,90", "300", ""],
["", "paniran-kashkaval-s-przheni-kartofi", "Паниран кашкавал с пържени картофи", "5,60", "350", ""],
["", "pileshki-kscheta-s-przheni-kartofki-i-chesnov-sos", "Пилешки късчета с пържени картофки и чеснов сос", "6,30", "390", ""],
["", "babeni-kyuftencza-s-bekon-i-kashkaval-i-pecheni-ovkuseni-kartofi", "Бабени кюфтенца с бекон и кашкавал и печени овкусени картофи", "6,30", "390", ""],
["", "pileshka-przhola-s-gben-sos-i-pecheni-ovkuseni-kartofi", "Пилешка пържола с гъбен сос и печени овкусени картофи", "6,30", "390", ""],
["", "svinski-kscheta-s-przheni-kartofki-i-barbekyu-sos", "Свински късчета с пържени картофки и барбекю сос", "6,30", "390", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "200", ""],
["", "pileshki-khapki-ot-file-marinovano-v-bilkov-jogurt-v-khrupkava-panirovka", "Пилешки хапки от филе, мариновано в билков йогурт в хрупкава панировка", "4,90", "200", ""],
["", "khrupkavi-pikantni-krilcza", "Хрупкави пикантни крилца", "2,80", "", ""],
["", "panirani-topeni-sirencza", "Панирани топени сиренца", "5,60", "150", ""]

            ],

            "Риба и морски дарове": [
                ["", "czacza", "Цаца", "2,80", "200", ""],
["", "safrid", "Сафрид", "6,30", "200", ""],
["", "gavros", "Гаврос", "4,90", "200", ""],
["", "skumriya-na-skara", "Скумрия на скара", "5,60", "250", ""],
["", "lavrak-na-skara", "Лаврак на скара", "10,50", "280", ""],
["", "czipura-na-skara", "Ципура на скара", "10,50", "280", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "7,00", "280", ""],
["", "kalmari-po-grczki", "Калмари по Гръцки", "8,40", "180", ""],
["", "kalmari-i-skaridi-na-plocha", "Калмари и скариди на плоча", "9,80", "180", ""],
["", "khrupkavi-skaridi-po-grczki", "Хрупкави скариди по Гръцки", "6,30", "200", ""],
["", "file-ot-byala-riba-s-pecheni-zelenchuczi", "Филе от бяла риба с печени зеленчуци", "7,00", "", ""],
["", "khrupkava-pstrva-s-aromatni-kartofi", "Хрупкава пъстърва с ароматни картофи", "7,70", "", ""],
["", "file-ot-kheringa-s-pecheni-zelenchuczi", "Филе от Херинга с печени зеленчуци", "7,00", "", ""],
["", "midi-po-grczki-a-domati-i-bilki", "Миди по гръцки а домати и билки", "6,30", "800", ""],
["", "midi-s-maslo-i-vino", "Миди с масло и вино", "6,30", "800", ""],
["", "midi-po-sredizemnomorski-ss-smetana", "Миди по средиземноморски със сметана", "6,30", "800", ""],
["", "midi-s-chesn-i-uzo", "Миди с чесън и Узо", "6,30", "800", ""],
["", "skaridi-vv-vinen-sos", "Скариди във винен сос", "7,00", "200", ""]

            ],

            "pasta": [
                ["", "pomidoro", "Помидоро", "4,90", "350", ""],
["", "boloneze", "Болонезе", "5,60", "400", ""],
["", "karbonara", "Карбонара", "5,60", "400", ""],
["", "mefisto", "Мефисто", "5,60", "400", ""]

            ],

            "Гарнитури и сосове": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "kartofi-ss-sirene", "Картофи със сирене", "2,80", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "250", ""],
["", "kartofeno-pyure", "Картофено пюре", "2,10", "250", ""],
["", "studena-garnitura", "Студена гарнитура", "2,10", "200", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "sladko-kisel-sos", "Сладко-кисел сос", "0,70", "100", ""],
["", "chili", "Чили", "0,00", "50", ""],
["", "tartar", "Тартар", "0,00", "50", ""],
["", "klechki", "Клечки", "0,00", "", ""]

            ],

            "desserts": [
                ["", "torta-vanila-s-biskviti", "Торта ванила с бисквити", "2,10", "150", ""],
["", "tiramisu", "Тирамису", "2,80", "150", ""],
["", "yablkov-krmbl-ss-smokini-i-furmi", "Ябълков кръмбъл със смокини и фурми", "2,80", "150", ""],
["", "gofreta-s-byal-i-kafyav-shokolad", "Гофрета с бял и кафяв шоколад", "2,10", "150", ""],
["", "gofreta-s-shokolad", "Гофрета с шоколад", "2,10", "150", ""],
["", "gofreta-s-shokolad-i-banan", "Гофрета с шоколад и банан", "2,80", "200", ""],
["", "gofreta-s-plodove-i-shokolad", "Гофрета с плодове и шоколад", "3,50", "200", ""]

            ],

            "Детско меню": [
                ["", "pileshki-karencza-przheni-kartofi-krastvichki-igrachka", "Пилешки каренца, пържени картофи, краствички, играчка", "6,30", "400", ""],
["", "pileshki-khapki-przheni-kartofi-krastvichki-igrachka", "Пилешки хапки, пържени картофи, краствички, играчка", "6,30", "400", ""]

            ]
        }', 
        'slug' => 'kitayski-restorant-kiten-blgarska-i-aziatska-kuhnya',
        'business_name' => 'Китайски ресторант Китен - Българска и Азиатска кухня',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kiten',
        'region' => 'Kiten',
        'postal_code' => '8183',
        'address' => 'Северен Плаж Атлиман',
        'address_additional' => '',
        'coords_x' => '42.2416553',
        'coords_y' => '27.7726933',
        'phone' => '+359876537837',
        'email' => '',
        'website' => '',
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
                ["", "salata-vili", "Салата Вили", "3,50", "350", ""],
["", "bejbi-spanak-s-kinoa", "Бейби спанак с киноа", "4,90", "350", ""],
["", "ovcharska-salata", "Oвчарска салата", "4,20", "300", ""],
["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "dietichna-salata-s-riba-ton", "Диетична салата с риба тон", "4,90", "350", ""],
["", "domati-s-moczarela", "Домати с моцарела", "3,50", "300", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "350", ""],
["", "vitaminozna-salata", "Витаминозна салата", "2,80", "300", ""],
["", "zelena-salata", "Зелена салата", "2,80", "250", ""],
["", "salata-s-bejbi-spanak-i-rukola", "Салата с бейби спанак и рукола", "3,50", "300", ""],
["", "salata-miks-s-koze-sirene-avokado-i-cheri-domati", "Салата микс с козе сирене, авокадо и чери домати", "3,50", "300", ""],
["", "speczialna-salata-s-byal-sos", "Специална салата с бял сос", "4,20", "450", ""]

            ],

            "soups": [
                ["", "pileshka", "Пилешка", "1,40", "300", ""],
["", "topcheta", "Топчета", "1,40", "300", ""],
["", "shkembe", "Шкембе", "1,40", "300", ""]

            ],

            "starters": [
                ["", "sirene-pane", "Сирене пане", "3,50", "150", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "150", ""],
["", "topeno-sirene-s-kornflejks-i-borovinki", "Топено сирене с корнфлейкс и боровинки", "4,90", "200", ""],
["", "uedzhis-kartofi", "Уеджис картофи", "2,10", "300", ""],
["", "gbi-v-maslo", "Гъби в масло", "3,50", "250", ""],
["", "pileshko-file-s-kornflejks", "Пилешко филе с корнфлейкс", "4,90", "250", ""],
["", "krilcza-po-kitajski", "Крилца по китайски", "3,50", "300", ""],
["", "drobcheta-s-luk", "Дробчета с лук", "3,50", "250", ""],
["", "srcza-v-maslo", "Сърца в масло", "3,50", "200", ""],
["", "srcza-s-luk-i-gbi", "Сърца с лук и гъби", "3,50", "250", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "2,80", "150", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "250", ""]

            ],

            "Основни ястия": [
                ["", "pile-zhulien", "Пиле Жулиен", "5,60", "350", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "4,90", "250", ""],
["", "pileshki-dzhob-ss-smetanov-sos", "Пилешки джоб със сметанов сос", "5,60", "350", ""],
["", "pile-rokfor", "Пиле Рокфор", "5,60", "300", ""],
["", "pileshka-przhola-ot-but-na-skara", "Пилешка пържола от бут на скара", "4,90", "250", ""],
["", "pileshko-file-s-grejvi-sos-i-zelenchuczi", "Пилешко филе с грейви сос и зеленчуци", "5,60", "300", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""],
["", "khepi-kscheta-ss-sos-demi-glas", "Хепи късчета със сос деми глас", "5,60", "400", ""],
["", "svinski-kareta-s-med", "Свински карета с мед", "6,30", "300", ""],
["", "snezhno-pile", "Снежно пиле", "4,90", "300", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "6,30", "350", ""],
["", "svinski-kareta-s-limon", "Свински карета с лимон", "6,30", "300", ""],
["", "svinsko-file-s-gben-sos", "Свинско филе с гъбен сос", "7,00", "300", ""],
["", "svinsko-file-vreteno", "Свинско филе вретено", "7,00", "350", ""],
["", "svinski-grdi-ss-selski-kartofi", "Свински гърди със селски картофи", "7,00", "300", ""],
["", "svinsko-s-grejvi-sos", "Свинско с грейви сос", "6,30", "400", ""],
["", "teleshki-stek-ss-selski-kartofi", "Телешки стек със селски картофи", "11,90", "350", ""],
["", "teleshki-ram-stek-s-luk", "Телешки Рам стек с лук", "9,80", "250", ""],
["", "rizoto-pileshko", "Ризото пилешко", "4,20", "300", ""],
["", "rizoto-teleshko", "Ризото телешко", "4,90", "300", ""],
["", "rizoto-morski-darove", "Ризото морски дарове", "5,60", "300", ""]

            ],

            "pizza": [
                ["", "stni", "Стъни", "5,60", "450", ""],
["", "neapolitana", "Неаполитана", "5,60", "450", ""],
["", "marchela", "Марчела", "5,60", "450", ""],
["", "chikn-fijst", "Чикън фийст", "5,60", "450", ""],
["", "morski-darove", "Морски дарове", "5,60", "450", ""],
["", "margarita", "Маргарита", "4,20", "450", ""],
["", "kaprichoza", "Капричоза", "5,60", "450", ""],
["", "stela", "Стела", "5,60", "450", ""],
["", "vegetariana", "Вегетариана", "4,20", "450", ""],
["", "formadzhi", "Формаджи", "4,20", "450", ""],
["", "sopreseta", "Сопресета", "5,60", "450", ""],
["", "romana", "Романа", "4,20", "450", ""],
["", "valentino", "Валентино", "4,20", "450", ""],
["", "proshuto", "Прошуто", "4,20", "450", ""],
["", "kariola", "Кариола", "4,90", "450", ""],
["", "vlchi-kapan", "Вълчи капан", "6,30", "450", ""],
["", "picza-shef", "Пица шеф", "5,60", "450", ""],
["", "amiya", "Амия", "4,90", "450", ""],
["", "peperoni", "Пеперони", "4,90", "450", ""],
["", "italiya", "Италия", "5,60", "450", ""],
["", "salami-2", "Салами 2", "4,90", "450", ""],
["", "kuatro-formadzhi-luks", "Куатро формаджи лукс", "5,60", "405", ""],
["", "pikantna-picza", "Пикантна пица", "4,20", "450", ""],
["", "boloniya", "Болония", "4,20", "450", ""],
["", "riba-ton", "Риба тон", "4,90", "450", ""],
["", "picza-chikn", "Пица Чикън", "4,90", "450", ""],
["", "belisima", "Белисима", "4,90", "450", ""],
["", "barbekyu", "Барбекю", "4,90", "450", ""],
["", "khavai", "Хаваи", "4,90", "450", ""]

            ],

            "pasta": [
                ["", "pasta-boloneze", "Паста Болонезе", "2,80", "300", ""],
["", "pasta-karbonara", "Паста Карбонара", "3,50", "300", ""],
["", "nudli-s-teleshko", "Нудли с телешко", "4,90", "300", ""],
["", "nudli-s-pileshko", "Нудли с пилешко", "3,50", "300", ""],
["", "nudli-ss-zelenchuczi", "Нудли със зеленчуци", "3,50", "300", ""],
["", "taliateli", "Талиатели", "5,60", "350", ""]

            ],

            "Скара и BBQ": [
                ["", "konski-kyufteta", "Конски кюфтета", "4,90", "", ""],
["", "svinsko-kebapche", "Свинско кебапче", "0,70", "80", ""],
["", "svinsko-kyufte", "Свинско кюфте", "0,70", "80", ""],
["", "svinsko-karnache", "Свинско карначе", "2,10", "180", ""],
["", "svinski-rebra-s-kartofki", "Свински ребра с картофки", "7,00", "350", ""],
["", "teleshki-kyufteta", "Телешки кюфтета", "4,90", "", ""],
["", "kombiniran-sach", "Комбиниран сач", "6,30", "450", ""],
["", "pileshki-sach", "Пилешки сач", "6,30", "450", ""],
["", "svinski-sach", "Свински сач", "6,30", "450", ""]

            ],

            "fish": [
                ["", "czacza", "Цаца", "2,80", "250", ""],
["", "belovar", "Беловар", "2,80", "250", ""],
["", "safrid", "Сафрид", "2,80", "250", ""],
["", "sharan-przhen", "Шаран пържен", "4,20", "250", ""],
["", "sharan-s-mlechno-orekhov-sos", "Шаран с млечно-орехов сос", "4,90", "250", ""],
["", "przhen-khek", "Пържен хек", "2,80", "250", ""],
["", "panirana-byala-riba-s-panirani-bademi-vrkhu-czitrus", "Панирана бяла риба с панирани бадеми върху цитрус", "4,20", "250", ""],
["", "kalmari-na-plocha", "Калмари на плоча", "4,90", "250", ""],
["", "kalmari-pane", "Калмари пане", "5,60", "250", ""],
["", "midi-pane", "Миди пане", "2,80", "250", ""],
["", "skaridi-na-plocha", "Скариди на плоча", "7,00", "250", ""],
["", "skaridi-khrupkava-tempura", "Скариди хрупкава темпура", "7,70", "250", ""],
["", "skumriya-na-skara", "Скумрия на скара", "3,50", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "6,30", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "8,40", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "4,90", "300", ""],
["", "pstrva-vv-folio-s-rozmarin", "Пъстърва във фолио с розмарин", "4,90", "300", ""]

            ],

            "burgers": [
                ["", "teleshki-burger", "Телешки бургер", "4,90", "", ""],
["", "chijz-burger", "Чийз бургер", "4,90", "", ""],
["", "pileshki-burger", "Пилешки бургер", "4,20", "", ""],
["", "domashen-burger", "Домашен бургер", "4,90", "", ""],
["", "burger-shef", "Бургер Шеф", "4,90", "", ""],
["", "tortila-khrupkavo-pile", "Тортила хрупкаво пиле", "2,80", "", ""],
["", "tortila-s-teleshko", "Тортила с телешко", "3,50", "", ""],
["", "tortila-s-shunka", "Тортила с шунка", "2,10", "", ""],
["", "burger-s-klczano-meso", "Бургер с кълцано месо", "4,90", "", ""],
["", "klub-sandvich", "Клуб сандвич", "2,80", "", ""],
["", "dyuner", "Дюнер", "2,10", "", ""]

            ],

            "sushi": [
                ["", "filadelfiya-khrupkavo-pile-1", "Филаделфия хрупкаво пиле №1", "3,50", "90", ""],
["", "filadelfiya-somga-2", "Филаделфия сьомга №2", "4,20", "80", ""],
["", "khosomaki-krastavicza-i-filadelfiya-3", "Хосомаки краставица и Филаделфия №3", "2,10", "100", ""],
["", "khosomaki-pushena-somga-i-krastavicza-4", "Хосомаки пушена сьомга и краставица №4", "3,50", "110", ""],
["", "khosomaki-ton-5", "Хосомаки Тон №5", "3,50", "110", ""],
["", "futomaki-uakame-6", "Футомаки уакаме №6", "4,20", "130", ""],
["", "filadelfiya-khrupkava-riba-7", "Филаделфия хрупкава риба №7", "4,20", "90", ""],
["", "filadelfiya-ton-8", "Филаделфия Тон №8", "4,20", "80", ""],
["", "filadelfiya-somga-avokado-i-khrupkava-tempura-9", "Филаделфия, сьомга, авокадо и хрупкава темпура №9", "4,20", "", ""],
["", "khosomaki-filadelfiya-i-avokado-10", "Хосомаки филаделфия и авокадо №10", "2,80", "100", ""],
["", "khrupkava-tempura-skarida-11", "Хрупкава темпура скарида №11", "4,20", "", ""],
["", "chervena-skarida-12", "Червена скарида №12", "4,20", "", ""],
["", "sushi-zaprlena-somga-13", "Суши запърлена сьомга №13", "5,60", "", ""],
["", "filadelfiya-rak-14", "Филаделфия рак №14", "3,50", "", ""],
["", "rozovo-sushi-2-16", "Розово суши 2 №16", "3,50", "", ""],
["", "filadelfiya-s-panko-skarida-17", "Филаделфия с панко скарида №17", "4,20", "", ""],
["", "sushi-nomer-edno-18", "Суши Номер едно №18", "4,90", "", ""],
["", "khosomaki-somga-i-avokado", "Хосомаки сьомга и авокадо", "3,50", "", ""],
["", "khosomaki-krastavicza", "Хосомаки краставица", "2,10", "", ""],
["", "futomaki-pikanten-ton", "Футомаки пикантен тон", "2,80", "", ""],
["", "filadelfiya-somga-25", "Филаделфия сьомга №25", "4,20", "", ""],
["", "temari-ton", "Темари тон", "4,90", "", ""],
["", "temari-somga", "Темари сьомга", "5,60", "", ""],
["", "mango-filadelfiya", "Манго Филаделфия", "4,90", "", ""],
["", "fitnes-skarida", "Фитнес скарида", "4,90", "", ""],
["", "mango-snou", "Манго сноу", "4,20", "", ""],
["", "kajzen", "Кайзен", "5,60", "", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "", ""],
["", "palachinka-s-nutela", "Палачинка с нутела", "2,10", "", ""],
["", "palachinka-s-nutela-i-banan", "Палачинка с нутела и банан", "2,10", "", ""]

            ],

            "Хляб и питки": [
                ["", "pitka-s-kashkaval", "Питка с кашкавал", "1,40", "250", ""],
["", "chesnova-pitka", "Чеснова питка", "0,70", "200", ""],
["", "pitka-ss-sirene", "Питка със сирене", "1,40", "250", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene-350gr", "Пържени картофи със сирене (350гр)", "2,10", "", ""],
["", "zadusheni-kartofi", "Задушени картофи", "1,40", "200", ""],
["", "selski-kartofi", "Селски картофи", "1,40", "250", ""],
["", "krastaviczi-i-domati", "Краставици и домати", "0,70", "200", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "300", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "0,70", "200", ""],
["", "lyuti-chushleta", "Люти чушлета", "0,00", "", ""]

            ]
        }', 
        'slug' => 'restorant-vili',
        'business_name' => 'Ресторант Вили',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Vratsa',
        'region' => 'Vratsa',
        'postal_code' => '3002',
        'address' => 'ул. Панайот Волов 2',
        'address_additional' => '',
        'coords_x' => '43.2061042',
        'coords_y' => '23.5522199',
        'phone' => '+359882935844',
        'email' => '',
        'website' => '',
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
                ["", "kombo-pileshko-file-v-bulo-na-skara", "Комбо пилешко филе в було на скара", "4,90", "150", ""]

            ],

            "salads": [
                ["", "selska-salata", "Селска салата", "3,50", "350", ""],
["", "salata-bobi", "Салата Боби", "2,80", "250", ""],
["", "czarska-turshiya", "Царска туршия", "3,50", "250", ""],
["", "maslini-s-luk", "Маслини с лук", "2,80", "200", ""],
["", "salata-s-kiseli-krastavichki-kartofi-yajcze", "Салата с кисели краставички, картофи, яйце", "3,50", "300", ""],
["", "rodopska-salata", "Родопска салата", "4,90", "350", ""],
["", "dedova-salata", "Дедова салата", "3,50", "300", ""],
["", "zelena-salata", "Зелена салата", "3,50", "250", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "300", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "200", ""],
["", "katk", "Катък", "3,50", "200", ""],
["", "salatka-za-rakijka", "Салатка за ракийка", "4,90", "400", ""],
["", "pecheni-chushki-s-chesn", "Печени чушки с чесън", "3,50", "180", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,80", "250", ""],
["", "salata-mamin-kolo", "Салата Мамин Кольо", "7,00", "400", ""],
["", "domati", "Домати", "2,10", "250", ""],
["", "krastaviczi", "Краставици", "2,10", "250", ""],
["", "meshana-salata", "Мешана салата", "2,80", "250", ""],
["", "redena-s-plochka-sirene", "Редена с плочка сирене", "3,50", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,90", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "400", ""],
["", "zhtvarska-salata", "Жътварска салата", "3,50", "300", ""]

            ],

            "appetizer": [
                ["", "kopoolu", "Кьопоолу", "2,80", "150", ""],
["", "lyutenicza-po-selski", "Лютеница по селски", "2,80", "150", ""],
["", "yajchena-razyadka", "Яйчена разядка", "2,80", "150", ""],
["", "razyadka-ss-sirene", "Разядка със сирене", "2,80", "150", ""],
["", "tarama", "Тарама", "3,50", "150", ""]

            ],

            "Сухи мезета": [
                ["", "banski-starecz", "Бански старец", "4,90", "100", ""],
["", "banski-sushen-but", "Бански сушен бут", "5,60", "100", ""],
["", "lukanka", "Луканка", "4,90", "100", ""],
["", "sukh-sudzhuk", "Сух суджук", "5,60", "100", ""],
["", "file-elena", "Филе Елена", "4,90", "100", ""],
["", "pastrma", "Пастърма", "5,60", "100", ""],
["", "kashkaval", "Кашкавал", "2,80", "100", ""],
["", "sirene", "Сирене", "2,10", "100", ""],
["", "domashno-pryasno-sirene", "Домашно прясно сирене", "2,80", "100", ""],
["", "ovche-sirene", "Овче сирене", "2,80", "100", ""]

            ],

            "soups": [
                ["", "shkembe-chorba", "Шкембе чорба", "2,10", "", ""],
["", "pileshka-supa", "Пилешка супа", "2,10", "", ""],
["", "bob-chorba", "Боб чорба", "2,10", "", ""],
["", "tarator", "Таратор", "2,10", "", ""]

            ],

            "alaminuti": [
                ["", "omlet-ss-sirene", "Омлет със сирене", "3,50", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "3,50", "200", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,80", "180", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "3,50", "300", ""],
["", "mish-mash", "Миш маш", "3,50", "250", ""],
["", "ispanski-karotfen-omlet", "Испански каротфен омлет", "4,20", "300", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "3,50", "", ""]

            ],

            "Топли предястия": [
                ["", "panirano-sirene", "Панирано сирене", "3,50", "200", ""],
["", "sirene-na-plocha", "Сирене на плоча", "4,20", "200", ""],
["", "sirene-s-med-i-susam", "Сирене с мед и сусам", "5,60", "220", ""],
["", "khrupkavi-topeni-sirencza", "Хрупкави топени сиренца", "6,30", "200", ""],
["", "panirano-sino-sirene-ss-sladko", "Панирано синьо сирене със сладко", "7,00", "200", ""],
["", "paniran-kashkaval", "Паниран кашкавал", "4,90", "200", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "4,90", "200", ""],
["", "khapki-kashkaval-pane", "Хапки кашкавал пане", "5,60", "200", ""],
["", "chushka-byurek", "Чушка бюрек", "2,10", "", ""],
["", "gbi-v-maslo", "Гъби в масло", "4,90", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "350", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "kartofi-po-banski", "Картофи по бански", "5,60", "350", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "4,20", "300", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "4,90", "300", ""],
["", "sirene-po-shopski", "Сирене по шопски", "4,90", "350", ""],
["", "sirene-po-trakijski", "Сирене по тракийски", "5,60", "350", ""],
["", "ogreten-s-bekon-i-gbi", "Огретен с бекон и гъби", "5,60", "400", ""],
["", "khapki-sirene-pane", "Хапки сирене пане", "4,90", "200", ""],
["", "fish-fingrs", "Фиш фингърс", "3,50", "240", ""]

            ],

            "Основни ястия": [
                ["", "khrupkava-byala-riba-pane", "Хрупкава бяла риба пане", "3,50", "240", ""],
["", "pstrva", "Пъстърва", "6,30", "250", ""],
["", "spageti-boloneze", "Спагети Болонезе", "2,80", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "400", ""]

            ],

            "Ястия от телешко": [
                ["", "teleshko-file", "Телешко филе", "11,20", "200", ""],
["", "teleshki-sudzhuk", "Телешки суджук", "9,10", "250", ""],
["", "teleshki-shniczel-pane", "Телешки шницел пане", "4,90", "140", ""],
["", "teleshka-glava", "Телешка глава", "4,90", "300", ""],
["", "teleshko-kyufte", "Телешко кюфте", "0,70", "50", ""],
["", "ezik-v-maslo", "Език в масло", "5,60", "200", ""],
["", "ezik-pane", "Език пане", "6,30", "250", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "5,60", "200", ""]

            ],

            "Ястия от агнешко": [
                ["", "ovchi-przholi", "Овчи пържоли", "9,10", "300", ""],
["", "agneshki-drebolii-s-luk", "Агнешки дреболии с лук", "4,90", "300", ""],
["", "agneshki-drebolii-po-selski", "Агнешки дреболии по селски", "4,90", "400", ""],
["", "agneshko-pecheno-s-bogata-garnitura", "Агнешко печено с богата гарнитура", "20,30", "500", ""],
["", "agneshki-kotlet", "Агнешки котлет", "18,20", "300", ""],
["", "agneshki-sach", "Агнешки сач", "21,00", "700", ""]

            ],

            "Ястия с пилешко месо": [
                ["", "pileshki-flejki-ss-kornflejks", "Пилешки флейки със корнфлейкс", "6,30", "250", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "300", ""],
["", "pileshki-srchicza-s-luk", "Пилешки сърчица с лук", "3,50", "300", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "4,20", "400", ""],
["", "pileshki-srchicza-po-selski", "Пилешки сърчица по селски", "4,20", "400", ""],
["", "pileshko-gyuveche-s-topeno-sirene", "Пилешко гювече с топено сирене", "6,30", "450", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "5,60", "450", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "4,90", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "120", ""],
["", "pileshko-file-s-gben-sos", "Пилешко филе с гъбен сос", "6,30", "400", ""],
["", "sach-s-pileshko", "Сач с пилешко", "9,10", "700", ""],
["", "pile-rokfor", "Пиле Рокфор", "7,00", "300", ""],
["", "pile-kri-s-oriz", "Пиле къри с ориз", "7,00", "300", ""],
["", "pikantno-pile", "Пикантно пиле", "7,00", "300", ""],
["", "pile-zhulien", "Пиле Жулиен", "7,00", "300", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "7,70", "400", ""],
["", "obezkosteno-plneno-pileshko-butche-s-garnitura", "Обезкостено пълнено пилешко бутче с гарнитура", "6,30", "400", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,90", "250", ""],
["", "pileshki-flejki-ss-susam", "Пилешки флейки със сусам", "6,30", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "5,60", "300", ""],
["", "pileshko-shishche-v-bekon-na-skara", "Пилешко шишче в бекон на скара", "1,40", "", ""]

            ],

            "Ястия от свинско месо": [
                ["", "katino-meze", "Катино мезе", "7,00", "380", ""],
["", "cheren-drob", "Черен дроб", "4,20", "200", ""],
["", "svinski-drebolii-s-luk", "Свински дреболии с лук", "3,50", "300", ""],
["", "svinski-drebolii-po-selski", "Свински дреболии по селски", "4,20", "400", ""],
["", "svinska-kavrma", "Свинска кавърма", "6,30", "380", ""],
["", "svinska-przhola", "Свинска пържола", "6,30", "200", ""],
["", "kavrma-v-omlet", "Кавърма в омлет", "6,30", "450", ""],
["", "nervozno-kyufte", "Нервозно кюфте", "0,70", "85", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "190", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "svinski-ushi-na-skara", "Свински уши на скара", "4,20", "250", ""],
["", "dska-mamin-kolo", "Дъска Мамин Кольо", "57,40", "2800", ""],
["", "banska-meshana-skara", "Банска мешана скара", "21,00", "1200", ""],
["", "sache-ss-svinsko", "Саче със свинско", "11,20", "700", ""],
["", "kombiniran-sach", "Комбиниран сач", "12,60", "700", ""],
["", "svinski-dzholan-garniran-s-kartofi-sote", "Свински джолан гарниран с картофи соте", "14,70", "850", ""],
["", "svinsko-file", "Свинско филе", "9,10", "200", ""],
["", "svinsko-file-pane", "Свинско филе пане", "9,80", "200", ""],
["", "svinsko-file-s-gben-sos", "Свинско филе с гъбен сос", "9,80", "400", ""],
["", "svinski-shashlik", "Свински шашлик", "8,40", "400", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "svinski-rebra", "Свински ребра", "5,60", "350", ""],
["", "bekon-na-skara", "Бекон на скара", "6,30", "350", ""],
["", "sudzhuk", "Суджук", "5,60", "250", ""]

            ],

            "Печено пиле на грил": [
                ["", "pecheno-pile-na-gril-czyalo", "Печено пиле на грил цяло", "7,00", "", ""]

            ],

            "vegetarian": [
                ["", "domati-s-oriz", "Домати с ориз", "3,50", "250", ""],
["", "gbi-s-oriz", "Гъби с ориз", "3,50", "250", ""],
["", "ogreten-s-kartofi", "Огретен с картофи", "4,20", "180", ""],
["", "bob-na-furna", "Боб на фурна", "2,80", "300", ""],
["", "spanak-s-oriz", "Спанак с ориз", "3,50", "250", ""],
["", "kartofeni-kroketi", "Kартофени крокети", "2,80", "200", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "chetiri-sirena", "Четири сирена", "4,20", "", ""],
["", "amerikana", "Американа", "4,20", "", ""],
["", "salami", "Салами", "4,20", "", ""],
["", "byagashho-pile", "Бягащо пиле", "4,90", "", ""],
["", "asorti", "Асорти", "5,60", "", ""]

            ],

            "garnish": [
                ["", "domati-i-krastaviczi", "Домати и краставици", "1,40", "", ""],
["", "garnitura-przheni-kartofi", "Гарнитура пържени картофи", "1,40", "", ""],
["", "lyuti-chushki", "Люти чушки", "0,70", "", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "2,10", "", ""]

            ],

            "bread": [
                ["", "kombinirana-prlenka", "Комбинирана пърленка", "2,80", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "2,10", "", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "prepechena-filijka", "Препечена филийка", "0,00", "", ""],
["", "chesnova-filijka", "Чеснова филийка", "0,00", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,70", "80", ""],
["", "mlechno-chesnov-sos", "Млечно чеснов сос", "0,70", "80", ""],
["", "majoneza", "Майонеза", "0,70", "80", ""],
["", "soev-sos", "Соев сос", "0,70", "80", ""],
["", "chili-sos", "Чили сос", "0,70", "80", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "", ""],
["", "desert-mamin-kolo", "Десерт Мамин Кольо", "1,40", "", ""],
["", "krem-karamel", "Крем карамел", "1,40", "", ""],
["", "melba", "Мелба", "4,20", "", ""],
["", "plodova-salata", "Плодова салата", "2,80", "", ""],
["", "czedeno-mlyako", "Цедено мляко", "2,80", "", ""]

            ],

            "Сладоледени десерти": [
                ["", "red-velvet-kejk", "Ред велвет кейк", "4,20", "90", ""],
["", "biskotino-s-braunis", "Бискотино с браунис", "4,20", "90", ""],
["", "leshnik-s-shokolad", "Лешник с шоколад", "4,20", "100", ""],
["", "smetanov-sladoled-ss-sladko-ot-chereshi", "Сметанов сладолед със сладко от череши", "4,20", "", ""],
["", "vanilov-sladoled-s-shokolad-i-leshniczi", "Ванилов сладолед с шоколад и лешници", "4,20", "", ""]

            ],

            "Сладоледен йогурт": [
                ["", "jogurt-s-med-i-orekhi", "Йогурт с мед и орехи", "4,20", "110", ""],
["", "jogurt-s-borovinki", "Йогурт с боровинки", "4,20", "110", ""],
["", "jogryt-marakuya", "Йогрyт маракуя", "4,20", "", ""],
["", "dolche-late", "Долче лате", "4,20", "", ""],
["", "koko-i-shoko", "Коко и Шоко", "4,20", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", ""],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", ""]

            ],

            "beer": [
                ["", "kamenicza---ken", "Каменица - кен", "1,40", "500", ""],
["", "staropramen---ken", "Старопрамен - кен", "2,10", "500", ""]

            ]
        }', 
        'slug' => 'mamin-kolyo',
        'business_name' => 'Мамин Кольо',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Bansko',
        'region' => 'Bansko',
        'postal_code' => '2770',
        'address' => 'ул. България 8',
        'address_additional' => '',
        'coords_x' => '41.8403479',
        'coords_y' => '23.4909559',
        'phone' => '+359879873550',
        'email' => '',
        'website' => '',
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
                ["", "salata-lyato", "Салата Лято", "3,50", "350", ""],
["", "salata-s-kinoa", "Салата с киноа", "3,50", "350", ""],
["", "salata-s-kristalni-nudli", "Салата с кристални нудли", "2,80", "300", ""],
["", "zelena-salata-s-pdpdchi-yajcza-i-proshuto", "Зелена салата с пъдпъдъчи яйца и прошуто", "3,50", "250", ""],
["", "salata-s-koze-sirene-i-patladzhan", "Салата с козе сирене и патладжан", "3,50", "400", ""],
["", "salata-cheri", "Салата Чери", "4,20", "300", ""],
["", "staroselska-salata", "Староселска салата", "2,80", "350", ""],
["", "zelena-salata-s-marinovano-sirene", "Зелена салата с мариновано сирене", "3,50", "300", ""],
["", "salata-vrkh-ruen", "Салата връх Руен", "2,80", "350", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,80", "250", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "300", ""],
["", "salata-telsaloniki", "Салата Телсалоники", "3,50", "350", ""],
["", "salata-khalkhidiki", "Салата Халхидики", "3,50", "450", ""],
["", "salata-alokha", "Салата Алоха", "2,80", "400", ""],
["", "salata-tortila", "Салата Тортила", "3,50", "400", ""],
["", "salata-fetush", "Салата Фетуш", "2,80", "300", ""],
["", "salata-tabule", "Салата Табуле", "2,80", "300", ""],
["", "salata-rukola", "Салата Рукола", "4,20", "350", ""],
["", "salata-esen", "Салата Есен", "2,80", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "300", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "350", ""],
["", "salata-czezar", "Салата Цезар", "3,50", "300", ""],
["", "salata-priyatelska-sreshha", "Салата Приятелска среща", "8,40", "1650", ""],
["", "starobalkanska-salata", "Старобалканска салата", "13,30", "1750", ""]

            ],

            "appetizer": [
                ["", "domashna-salata-snezhanka", "Домашна салата Снежанка", "2,80", "300", ""],
["", "domashen-katk-s-kiseli-krastavichki", "Домашен катък с кисели краставички", "2,80", "300", ""],
["", "domashen-pastet", "Домашен пастет", "3,50", "250", ""],
["", "rodopska-razyadka", "Родопска разядка", "1,40", "100", ""],
["", "tarama-khajver", "Тарама хайвер", "1,40", "100", ""],
["", "kopoolu", "Кьопоолу", "2,80", "200", ""],
["", "plato-s-razyadki-s-grizini", "Плато с разядки с гризини", "3,50", "200", ""]

            ],

            "soups": [
                ["", "shkembe-chorba", "Шкембе чорба", "1,40", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "teleshko-vareno", "Телешко варено", "2,80", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "Студени предястия": [
                ["", "studen-teleshki-dzholan", "Студен телешки джолан", "4,20", "200", ""],
["", "studen-teleshki-ezik-s-gorchicza", "Студен телешки език с горчица", "4,20", "200", ""],
["", "salamureno-koze-sirene", "Саламурено козе сирене", "2,10", "100", ""],
["", "pusheno-svinsko", "Пушено свинско", "2,10", "350", ""],
["", "pushena-sharena-slanina", "Пушена шарена сланина", "1,40", "100", ""],
["", "ovche-sirene", "Овче сирене", "1,40", "100", ""],
["", "kashkaval", "Кашкавал", "1,40", "100", ""],
["", "moczarela", "Моцарела", "2,10", "100", ""],
["", "sino-sirene", "Синьо сирене", "2,10", "100", ""],
["", "emental", "Ементал", "2,80", "100", ""],
["", "lukanka", "Луканка", "2,80", "100", ""],
["", "proshuto", "Прошуто", "2,10", "100", ""],
["", "miks-ot-blgarski-sirena", "Микс от български сирена", "3,50", "200", ""]

            ],

            "Топли предястия": [
                ["", "panirani-khrupkavi-khapki-ss-sino-sirene", "Панирани хрупкави хапки със синьо сирене", "2,80", "200", ""],
["", "panirani-topeni-sirencza-s-kornflejks", "Панирани топени сиренца с корнфлейкс", "4,20", "220", ""],
["", "panirani-kashkavaleni-kyuftencza", "Панирани кашкавалени кюфтенца", "2,80", "250", ""],
["", "panirani-pileshki-khapki", "Панирани пилешки хапки", "3,50", "250", ""],
["", "pileshki-drobcheta-s-vino-i-soev-sos", "Пилешки дробчета с вино и соев сос", "2,80", "250", ""],
["", "panirani-pileshki-filencza", "Панирани пилешки филенца", "3,50", "250", ""],
["", "midi-po-grczki-s-kopr-i-chesn", "Миди по гръцки с копър и чесън", "4,90", "250", ""],
["", "svinski-fitilcheta-ss-smindukh", "Свински фитилчета със сминдух", "4,20", "200", ""],
["", "kalmari", "Калмари", "4,90", "200", ""],
["", "vegetarianski-kyuftencza", "Вегетариански кюфтенца", "2,80", "", ""],
["", "manatarki-v-zekhtin", "Манатарки в зехтин", "4,90", "200", ""],
["", "pechurki-v-maslo", "Печурки в масло", "2,80", "200", ""],
["", "pachi-krak-s-kopr-i-chesn", "Пачи крак с копър и чесън", "4,90", "200", ""],
["", "svinski-mrvki", "Свински мръвки", "3,50", "200", ""],
["", "kemberski-topki", "Кемберски топки", "2,80", "250", ""],
["", "teleshki-ezik-v-maslo-na-su-vid", "Телешки език в масло на су вид", "4,90", "200", ""]

            ],

            "Основни ястия": [
                ["", "kyufte-panko-s-czelina-i-gorchicza", "Кюфте Панко с целина и горчица", "4,90", "250", ""],
["", "kartofi-s-bekon-i-kashkaval-na-peshh", "Картофи с бекон и кашкавал на пещ", "2,80", "350", ""],
["", "kartofi-myunkhen", "Картофи Мюнхен", "2,80", "300", ""],
["", "kartofi-rokfor", "Картофи Рокфор", "2,80", "300", ""],
["", "brokoli-s-rokfor", "Броколи с Рокфор", "4,20", "300", ""],
["", "tikvichki-s-krema-sirene", "Тиквички с крема сирене", "2,80", "300", ""],
["", "patladzhan-s-krema-sirene", "Патладжан с крема сирене", "2,80", "300", ""]

            ],

            "Пици на пещ": [
                ["", "italianska-picza", "Италианска пица", "3,50", "", ""],
["", "amerikanska-picza", "Американска пица", "4,20", "", ""],
["", "vegetarianska-picza-", "Вегетарианска пица (", "3,50", "", ""],
["", "kalczone", "Калцоне", "4,20", "", ""],
["", "picza-s-manatarki", "Пица с манатарки", "4,20", "", ""],
["", "picza-s-pachi-krak", "Пица с пачи крак", "4,20", "", ""],
["", "picza-pdi", "Пица Пъди", "4,90", "", ""],
["", "picza-parma", "Пица Парма", "4,90", "", ""],
["", "picza-diablo", "Пица Диабло", "4,20", "", ""],
["", "balkanska", "Балканска", "3,50", "", ""],
["", "neapolitana", "Неаполитана", "4,20", "", ""],
["", "siromashka", "Сиромашка", "3,50", "", ""],
["", "di-montanya", "Ди Монтаня", "4,20", "", ""],
["", "chetiri-sezona", "Четири сезона", "4,20", "", ""],
["", "roma", "Рома", "4,20", "", ""],
["", "bel-ami", "Бел Ами", "4,90", "", ""],
["", "kaprezen", "Капрезен", "4,20", "", ""],
["", "peperone", "Пепероне", "4,90", "", ""],
["", "domashna-picza", "Домашна пица", "4,90", "", ""],
["", "san-siro", "Сан Сиро", "4,20", "", ""],
["", "margarita", "Маргарита", "2,80", "", ""],
["", "kalabreze", "Калабрезе", "3,50", "", ""],
["", "rustika", "Рустика", "3,50", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,20", "", ""],
["", "kuatro-formadzhi-luks", "Куатро Формаджи Лукс", "4,90", "", ""],
["", "kariola", "Кариола", "4,20", "", ""],
["", "san-vito", "Сан Вито", "4,20", "", ""],
["", "proshuto-krudo", "Прошуто Крудо", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "3,50", "", ""],
["", "polo", "Поло", "4,20", "", ""],
["", "toskana", "Тоскана", "4,20", "", ""],
["", "katani", "Катани", "4,20", "", ""],
["", "bonifacho", "Бонифачо", "4,20", "", ""],
["", "belisima", "Белисима", "4,90", "", ""],
["", "bianka", "Бианка", "4,20", "", ""]

            ],

            "Ястия от месо": [
                ["", "pileshki-skalopini-s-proshuto-i-parmezan", "Пилешки скалопини с прошуто и пармезан", "4,20", "300", ""],
["", "pileshki-skalopini-s-nudli-i-kri", "Пилешки скалопини с нудли и къри", "4,20", "350", ""],
["", "przheni-pileshki-krilcza-ss-sos-teriyaki-i-susam", "Пържени пилешки крилца със сос Терияки и сусам", "4,20", "400", ""],
["", "plnena-pileshka-przhola", "Пълнена пилешка пържола", "3,50", "300", ""],
["", "plnena-pileshka-przhola-panirana", "Пълнена пилешка пържола панирана", "3,50", "300", ""],
["", "pile-s-brokoli-i-sos-rokfor", "Пиле с броколи и сос Рокфор", "4,20", "350", ""],
["", "pileshki-shniczel", "Пилешки шницел", "3,50", "300", ""],
["", "pile-zhulien", "Пиле Жулиен", "3,50", "350", ""],
["", "pile-po-gradinarski", "Пиле по градинарски", "3,50", "350", ""],
["", "pile-po-meksikanski---pikantno", "Пиле по мексикански - пикантно", "4,20", "300", ""],
["", "pileshki-przholi-s-gbi-luk-i-morkov", "Пилешки пържоли с гъби, лук и морков", "4,20", "300", ""],
["", "fakhita---pikantno", "Фахита - пикантно", "3,50", "300", ""],
["", "dyuner-tikhiya-kt---v-khlebche-na-peshh", "Дюнер Тихия кът - в хлебче на пещ", "4,90", "450", ""]

            ],

            "pork": [
                ["", "pusheno-svinsko-meso-s-luk-i-morkov", "Пушено свинско месо с лук и морков", "4,90", "300", ""],
["", "shotlandsko-yajcze", "Шотландско яйце", "4,20", "300", ""],
["", "svinski-grdi-ss-sos-teriyaki-i-susam", "Свински гърди със сос Терияки и сусам", "4,90", "500", ""],
["", "panirano-svinsko-s-nudli-i-kri", "Панирано свинско с нудли и къри", "4,90", "350", ""],
["", "svinsko-ss-sushen-domat-i-krema-sirene", "Свинско със сушен домат и крема сирене", "5,60", "300", ""],
["", "svinsko-s-moczarela-i-bekon", "Свинско с моцарела и бекон", "5,60", "350", ""],
["", "mini-kyuftencza-ss-sos-i-przheni-kartofki", "Мини кюфтенца със сос и пържени картофки", "4,90", "400", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "4,20", "300", ""],
["", "svinsko-file-mozajka", "Свинско филе Мозайка", "4,20", "350", ""],
["", "svinsko-file-s-manatarki", "Свинско филе с манатарки", "7,00", "350", ""]

            ],

            "veal": [
                ["", "teleshki-ezik-na-su-vid-s-gbi-i-kashkaval-na-peshh", "Телешки език на су Вид с гъби и кашкавал на пещ", "4,90", "300", ""],
["", "telepko-kontra-file-s-ragu-ot-gbi", "Телепко контра филе с рагу от гъби", "7,00", "350", ""],
["", "avtentichen-teleshki-shniczel", "Автентичен телешки шницел", "6,30", "250", ""],
["", "teleshki-pepr-stek", "Телешки пепър стек", "9,80", "250", ""],
["", "teleshki-stek-s-manatarki", "Телешки стек с манатарки", "11,90", "300", ""],
["", "teleshki-t-boun-stek-s-domashni-przheni-kartofi-i-bbq-sos", "Телешки Т-боун стек с домашни пържени картофи и BBQ сос", "24,50", "600", ""]

            ],

            "fish": [
                ["", "panirana-byala-riba", "Панирана бяла риба", "4,90", "370", ""],
["", "byala-riba-ss-smetana-i-chesn", "Бяла риба със сметана и чесън", "4,90", "300", ""],
["", "file-ot-somga-progotveno-na-su-vid-ss-sos-teriyaki", "Филе от сьомга проготвено на су вид със сос Терияки", "7,00", "400", ""],
["", "stek-riba-ton", "Стек Риба тон", "7,70", "200", ""],
["", "lavrak-na-skara", "Лаврак на скара", "6,30", "350", ""],
["", "czipura-na-skara", "Ципура на скара", "6,30", "350", ""],
["", "filetirana-skumriya-na-skara", "Филетирана скумрия на скара", "3,50", "300", ""],
["", "somga-file-na-skara-s-kartofeno-pyure", "Сьомга филе на скара с картофено пюре", "6,30", "370", ""],
["", "pstvra", "Пъстъвра", "4,20", "300", ""],
["", "zlatna-pstrva-file", "Златна пъстърва филе", "4,90", "300", ""]

            ],

            "Ястия на жар": [
                ["", "khajdushka-skara", "Хайдушка скара", "16,10", "1700", ""],
["", "svinska-nadenicza", "Свинска наденица", "2,80", "300", ""],
["", "teleshki-t-boun-stek", "Телешки Т-боун стек", "24,50", "", ""],
["", "svinski-grdi", "Свински гърди", "4,20", "400", ""],
["", "obezkosteno-pile-na-zhar", "Обезкостено пиле на жар", "9,10", "1350", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "svinska-vratna-pezhola", "Свинска вратна пъежола", "3,50", "220", ""],
["", "svinsko-bon-file", "Свинско бон филе", "4,90", "250", ""],
["", "sinsko-kontra-file-s-rozmarin", "Синско контра филе с розмарин", "4,20", "250", ""],
["", "svinsko-vreteno-s-kartofeno-pyure", "Свинско вретено с картофено пюре", "5,60", "300", ""],
["", "plato-s-meso-podnesi-na-chesnov-khlyab", "Плато с месо поднеси на чеснов хляб", "13,30", "1100", ""]

            ],

            "specialties": [
                ["", "svinsko-na-plocha", "Свинско на плоча", "9,10", "400", ""],
["", "pileshko-na-plocha", "Пилешко на плоча", "7,70", "400", ""],
["", "teleshko-na-plocha", "Телешко на плоча", "11,90", "400", ""],
["", "tri-vida-mesa-na-plocha", "Три вида меса на плоча", "18,90", "600", ""],
["", "svinski-dzholan-po-selski", "Свински джолан по селски", "9,80", "950", ""],
["", "teleshki-dzholan-po-selski", "Телешки джолан по селски", "11,20", "950", ""],
["", "pileshko-butche-po-selski", "Пилешко бутче по селски", "9,10", "950", ""]

            ],

            "Азиатска кухня": [
                ["", "skaridi-s-nudli", "Скариди с нудли", "9,80", "350", ""],
["", "orizovi-nudli-ss-zelenchuczi", "Оризови нудли със зеленчуци", "3,50", "400", ""],
["", "orizovi-nudli-s-pileshki-kscheta-i-zelenchuczi", "Оризови нудли с пилешки късчета и зеленчуци", "4,20", "480", ""],
["", "orizovi-nudli-s-teleshki-kscheta-i-zelenchuczi", "Оризови нудли с телешки късчета и зеленчуци", "4,90", "480", ""],
["", "przhen-oriz-po-kitajski-ss-zelenchuczi", "Пържен ориз по китайски със зеленчуци", "2,80", "500", ""],
["", "przhen-oriz-po-kitajski-s-pile-i-zelenchuczi", "Пържен ориз по китайски с пиле и зеленчуци", "3,50", "500", ""],
["", "przhen-oriz-po-kitajski-ss-svinsko-i-zelenchuczi", "Пържен ориз по китайски със свинско и зеленчуци", "3,50", "500", ""],
["", "pile-v-slako-kisel-sos", "Пиле в слако-кисел сос", "3,50", "350", ""],
["", "pile-ss-zlenchuczi", "Пиле със зленчуци", "4,20", "500", ""],
["", "pile-s-bambuk", "Пиле с бамбук", "4,20", "500", ""],
["", "svinsko-ss-zelenchuczi", "Свинско със зеленчуци", "4,90", "500", ""],
["", "svinsko-s-bambuk", "Свинско с бамбук", "4,90", "500", ""]

            ],

            "garnish": [
                ["", "domapni-przheni-kartofi", "Домапни пържени картофи", "1,40", "250", ""],
["", "domashni-przheni-kartofi-ss-sirene", "Домашни пържени картофи със сирене", "1,40", "300", ""],
["", "domapno-prigotveno-kartofeno-pyure", "Домапно приготвено картофено пюре", "2,10", "250", ""],
["", "domashni-kartofi-sote", "Домашни картофи соте", "1,40", "250", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,80", "250", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "250", ""]

            ],

            "Хлебчета на пещ": [
                ["", "domashno-prigotven-khlyab", "Домашно приготвен хляб", "2,10", "500", ""],
["", "fokacha", "Фокача", "2,10", "350", ""],
["", "pikantna-fokacha", "Пикантна фокача", "1,40", "500", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "0,70", "", ""],
["", "grczko-khlebche-s-maslinova-pasta", "Гръцко хлебче с маслинова паста", "1,40", "290", ""],
["", "italiansko-khlebche", "Италианско хлебче", "1,40", "500", ""],
["", "plnozrnest-khlyab", "Пълнозърнест хляб", "2,10", "500", ""],
["", "plnozrnesto-khlebche-s-sharena-sol-i-zekhtin", "Пълнозърнесто хлебче с шарена сол и зехтин", "1,40", "290", ""]

            ],

            "desserts": [
                ["", "frenska-selska-torta", "Френска селска торта", "2,10", "180", ""],
["", "biskvitena-torta-s-maskarpone-i-shokolad", "Бисквитена торта с маскарпоне и шоколад", "2,10", "180", ""],
["", "domashna-biskvitena-torta-s-kokos-i-sladko-ot-zeleni-smokini", "Домашна бисквитена торта с кокос и сладко от зелени смокини", "2,10", "200", ""],
["", "jogurt-torta", "Йогурт торта", "2,10", "170", ""],
["", "krem-maskarpone-s-plodov-dip", "Крем маскарпоне с плодов дип", "2,10", "200", ""],
["", "torta-rafaelo", "Торта Рафаело", "2,10", "170", ""],
["", "torta-strachatela", "Торта Страчатела", "2,80", "180", ""],
["", "shokoladova-torta-s-glazura", "Шоколадова торта с глазура", "2,80", "180", ""],
["", "palachinka-s-shokolad-podnesena-s-plodove-i-smetana", "Палачинка с шоколад поднесена с плодове и сметана", "3,50", "", ""],
["", "palachinka-s-domashno-sladko-podnesena-s-plodove-i-smetana", "Палачинка с домашно сладко поднесена с плодове и сметана", "3,50", "", ""],
["", "czedeno-mlyako-s-med-i-orekhi", "Цедено мляко с мед и орехи", "1,40", "250", ""]

            ],

            "drinks": [
                ["", "mineralna-voda-bachkovo", "Минерална вода Бачково", "0,70", "", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна Баня", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "330", ""]

            ]
        }', 
        'slug' => 'restorant-tihiyat-kt',
        'business_name' => 'Ресторант Тихият кът',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Kyustendil',
        'region' => 'Kyustendil',
        'postal_code' => '2533',
        'address' => 'ул.Осоговска 10',
        'address_additional' => '',
        'coords_x' => '42.2658298',
        'coords_y' => '22.7049664',
        'phone' => '+359899936774',
        'email' => '',
        'website' => '',
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
                ["", "shopska", "Шопска", "4,20", "390", ""],
["", "ovcharska", "Овчарска", "5,60", "390", ""],
["", "grczka", "Гръцка", "4,90", "450", ""],
["", "salata-nicza", "Салата Ница", "6,30", "450", ""],
["", "dzadziki", "Дзадзики", "3,50", "250", ""],
["", "lyutivo-zele-po-kitajski", "Лютиво зеле по китайски", "4,20", "350", ""],
["", "salata-fn-s", "Салата Фън Съ", "5,60", "350", ""],
["", "kitajska-salata", "Китайска салата", "7,00", "350", ""],
["", "salata-ot-morski-darove-i-zelenchuczi", "Салата от морски дарове и зеленчуци", "7,70", "350", ""],
["", "salata-ot-morski-darove-i-dva-vida-gbi", "Салата от морски дарове и два вида гъби", "7,70", "350", ""],
["", "kiseli-krastavichki-i-lyuto-pile", "Кисели краставички и люто пиле", "6,30", "350", ""],
["", "kapreze", "Капрезе", "5,60", "400", ""],
["", "kapreze-zuchini", "Капрезе Зучини", "6,30", "450", ""],
["", "lyatna-salata", "Лятна салата", "5,60", "620", ""],
["", "czezar-s-pile", "Цезар с пиле", "6,30", "400", ""],
["", "czezar-s-khrupkavi-kalmari", "Цезар с хрупкави калмари", "7,70", "400", ""],
["", "soevi-klnove-ss-zele-i-morkovi", "Соеви кълнове със зеле и моркови", "5,60", "350", ""],
["", "salat-ot-soevi-klnove", "Салат от соеви кълнове", "7,00", "350", ""],
["", "salata-ot-tri-vida-gbi-i-zelenchuczi", "Салата от три вида гъби и зеленчуци", "7,00", "350", ""],
["", "salata-ot-vodorasli-i-zelenchuczi", "Салата от водорасли и зеленчуци", "6,30", "350", ""]

            ],

            "soups": [
                ["", "lyuto-kisela-supa-s-yajcze", "Люто кисела супа с яйце", "2,80", "350", ""],
["", "supa-ot-pileshko-meso-i-yajcze", "Супа от пилешко месо и яйце", "2,80", "350", ""],
["", "supa-ot-spageti-s-tri-vida-meso", "Супа от спагети с три вида месо", "3,50", "350", ""],
["", "supa-ot-spageti-s-pileshko-meso", "Супа от спагети с пилешко месо", "3,50", "350", ""],
["", "supa-ot-spageti-s-morski-darove", "Супа от спагети с морски дарове", "4,20", "350", ""]

            ],

            "starters": [
                ["", "pileshki-khapki", "Пилешки хапки", "5,60", "200", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "5,60", "200", ""],
["", "panirani-topeni-sirencza", "Панирани топени сиренца", "5,60", "150", ""]

            ],

            "Ястия": [
                ["", "svinska-przhola-s-gben-sos-i-pecheni-ovkuseni-kartofi", "Свинска пържола с гъбен сос и печени овкусени картофи", "7,70", "390", ""],
["", "babeni-kyuftencza-s-bekon-i-kashkaval-i-pecheni-ovkuseni-kartofi", "Бабени кюфтенца с бекон и кашкавал и печени овкусени картофи", "7,00", "390", ""],
["", "pileshka-przhola-s-gben-sos-i-pecheni-ovkuseni-kartofi", "Пилешка пържола с гъбен сос и печени овкусени картофи", "7,70", "390", ""],
["", "paniran-kashkaval-s-przheni-kartofi", "Паниран кашкавал с пържени картофи", "5,60", "350", ""],
["", "brokoli-ss-smetana-i-kashkaval", "Броколи със сметана и кашкавал", "5,60", "300", ""],
["", "pecheni-kartofi-s-chesno-sos-i-kashkaval", "Печени картофи с чесно сос и кашкавал", "4,90", "300", ""],
["", "pecheni-kartofi-s-bekon-smetana-i-kashkaval", "Печени картофи с бекон, сметана и кашкавал", "4,90", "300", ""]

            ],

            "Ястия със свинско месо": [
                ["", "svinsko-s-aromatni-gbi-i-zelenchiuczi", "Свинско с ароматни гъби и зеленчиуци", "7,70", "400", ""],
["", "svinski-rebra-po-kitajski", "Свински ребра по Китайски", "9,10", "350", ""],
["", "svinsko-s-kitajski-gbi-bambuk-i-zelenchuczi", "Свинско с китайски гъби, бамбук и зеленчуци", "7,70", "400", ""],
["", "svinsko-na-plocha-s-aromatni-gbi-i-luk", "Свинско на плоча с ароматни гъби и лук", "8,40", "350", ""],
["", "svinsko-chetiri-vkusa", "Свинско четири вкуса", "8,40", "400", ""],
["", "svinsko-ss-zelenchuczi", "Свинско със зеленчуци", "6,30", "400", ""],
["", "svinsko-v-sladko-kisel-sos-ss-zelenchuczi", "Свинско в сладко-кисел сос със зеленчуци", "8,40", "350", ""],
["", "svinsko-po-sechuanski", "Свинско по Сечуански", "7,00", "400", ""],
["", "svinsko-s-patladzhan-i-zelenchuczi", "Свинско с патладжан и зеленчуци", "7,70", "400", ""],
["", "svinsko-s-kartofi", "Свинско с картофи", "6,30", "400", ""]

            ],

            "Ястие с пилешко месо": [
                ["", "pileshki-kareta-s-pecheni-zelenchuczi", "Пилешки карета с печени зеленчуци", "7,70", "450", ""],
["", "pile-s-moczarela-i-pecheni-ovkuseni-kartofi", "Пиле с моцарела и печени овкусени картофи", "8,40", "400", ""],
["", "pileshko-s-oriz-i-zelenchuczi", "Пилешко с ориз и зеленчуци", "6,30", "400", ""],
["", "pileshko-s-kri-i-zelenchuczi", "Пилешко с къри и зеленчуци", "6,30", "400", ""],
["", "pileshko-s-kartofi", "Пилешко с картофи", "6,30", "400", ""],
["", "pileshko-na-plocha-s-aromatni-gbi-i-luk", "Пилешко на плоча с ароматни гъби и лук", "8,40", "350", ""],
["", "sladko-kiselo-pileshko-ss-susam", "Сладко-кисело пилешко със сусам", "8,40", "400", ""],
["", "pileshko-ss-zelenchuczi", "Пилешко със зеленчуци", "6,30", "400", ""],
["", "pileshko-chetiri-vkusa", "Пилешко четири вкуса", "7,00", "400", ""],
["", "pileshko-s-kitajski-gbi-zelenchuczi-i-bambuk", "Пилешко с китайски гъби, зеленчуци и бамбук", "7,00", "400", ""],
["", "pile-po-sechuanski", "Пиле по Сечуански", "7,00", "400", ""],
["", "pileshko-s-aromatni-kitajski-gbi-i-zelenchuczi", "Пилешко с ароматни китайски гъби и зеленчуци", "7,70", "400", ""],
["", "pileshko-s-gbi-pechurki", "Пилешко с гъби печурки", "7,00", "400", ""],
["", "pileshko-s-ananas", "Пилешко с ананас", "7,70", "400", ""],
["", "khrupkavo-przheno-pileshko", "Хрупкаво пържено пилешко", "8,40", "400", ""],
["", "kung-pao", "Кунг Пао", "8,40", "400", ""],
["", "pileshko-s-kartofi-i-gbi-pechurki", "Пилешко с картофи и гъби печурки", "8,40", "400", ""]

            ],

            "Ястия с патица": [
                ["", "paticza-ss-zelenchuczi", "Патица със зеленчуци", "8,40", "400", ""],
["", "paticza-s-kitajski-gbi-i-bambuk", "Патица с китайски гъби и бамбук", "9,10", "400", ""],
["", "paticza-po-sechuanski", "Патица по Сечуански", "9,10", "400", ""],
["", "paticza-s-kartofi", "Патица с картофи", "8,40", "400", ""],
["", "khrupkavo-przhena-paticza", "Хрупкаво пържена патица", "9,80", "400", ""],
["", "paticza-na-plocha-s-aromatni-gbi-i-luk", "Патица на плоча с ароматни гъби и лук", "9,10", "350", ""]

            ],

            "Ястия с телешко": [
                ["", "teleshko-ss-zelenchuczi", "Телешко със зеленчуци", "8,40", "400", ""],
["", "teleshko-s-aromatni-gbi-i-zelenchuczi", "Телешко с ароматни гъби и зеленчуци", "8,40", "400", ""],
["", "teleshko-po-sechuanski-lyuto", "Телешко по Сечуански люто", "8,40", "400", ""],
["", "teleshko-s-kitajski-gbi-bambuk-i-zelenchuczi", "Телешко с китайски гъби, бамбук и зеленчуци", "8,40", "400", ""],
["", "teleshko-na-plocha-s-aromatni-gbi-i-luk", "Телешко на плоча с ароматни гъби и лук", "9,10", "350", ""],
["", "tri-vida-meso-ss-zelenchuczi", "Три вида месо със зеленчуци", "7,00", "400", ""],
["", "tri-vida-meso-s-kitajski-gbi-bambuk-i-zelenchuczi", "Три вида месо с китайски гъби, бамбук и зеленчуци", "7,70", "400", ""],
["", "tri-vida-meso-na-plocha-s-aromatni-gbi-i-luk", "Три вида месо на плоча с ароматни гъби и лук", "8,40", "350", ""],
["", "tri-vida-meso-s-aromatni-gbi-i-zelenchuczi", "Три вида месо с ароматни гъби и зеленчуци", "8,40", "400", ""],
["", "tri-vida-meso-po-sechuanski", "Три вида месо по Сечуански", "7,70", "400", ""]

            ],

            "Ястия с риба": [
                ["", "panirani-midi", "Панирани миди", "8,40", "400", ""],
["", "midi-s-cherni-gbi-bambuk-i-zelenchuczi", "Миди с черни гъби, бамбук и зеленчуци", "7,70", "400", ""],
["", "skaridi-ss-zelenchuczi", "Скариди със зеленчуци", "9,80", "400", ""],
["", "skaridi-s-cherni-gbi-bambuk-i-zelenchuczi", "Скариди с черни гъби, бамбук и зеленчуци", "10,50", "400", ""],
["", "skaridi-v-sos", "Скариди в сос", "12,60", "300", ""],
["", "skaridi-v-sladko-kisel-sos-ss-susam", "Скариди в сладко-кисел сос със сусам", "11,20", "300", ""],
["", "khrupkavo-przhena-riba", "Хрупкаво пържена риба", "7,70", "350", ""],
["", "riba-v-sladko-kisel-sos-ss-susam", "Риба в сладко-кисел сос със сусам", "8,40", "350", ""],
["", "panirani-skaridi", "Панирани скариди", "9,80", "300", ""],
["", "kalmari-s-cherni-gbi-bambuk-i-zelenchuczi", "Калмари с черни гъби, бамбук и зеленчуци", "9,80", "400", ""],
["", "panirani-kalmari", "Панирани калмари", "9,80", "300", ""]

            ],

            "Риба и морски дарове": [
                ["", "barbun", "Барбун", "5,60", "150", ""],
["", "safrid", "Сафрид", "6,30", "200", ""],
["", "gavros", "Гаврос", "4,90", "200", ""],
["", "skumriya-na-skara", "Скумрия на скара", "6,30", "250", ""],
["", "khrupkavi-skaridi-po-grczki", "Хрупкави скариди по Гръцки", "7,70", "200", ""],
["", "file-ot-lavrak-ss-spanak-i-czelina", "Филе от лаврак със спанак и целина", "11,20", "280", ""],
["", "czipura-na-skara", "Ципура на скара", "10,50", "280", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "7,70", "280", ""],
["", "kalmari-po-grczki", "Калмари по Гръцки", "9,10", "180", ""],
["", "kalmari-i-skaridi-na-plocha", "Калмари и скариди на плоча", "9,80", "180", ""],
["", "midi-po-grczki-s-domati-i-bilki", "Миди по гръцки с домати и билки", "7,70", "1000", ""],
["", "midi-s-maslo-i-vino", "Миди с масло и вино", "7,70", "1000", ""],
["", "midi-po-sredizemnomorski-ss-smetana", "Миди по средиземноморски със сметана", "7,70", "1000", ""],
["", "midi-s-chesn-i-uzo", "Миди с чесън и узо", "7,70", "1000", ""]

            ],

            "barbecue": [
                ["", "meshena-skara-s-garnitura", "Мешена скара с гарнитура", "9,10", "450", ""],
["", "svinski-shishcheta-s-garnitura", "Свински шишчета с гарнитура", "7,70", "450", ""],
["", "pileshka-przhola-s-garnitura", "Пилешка пържола с гарнитура", "7,70", "450", ""],
["", "trojka-kyufteta-s-garnitura", "Тройка кюфтета с гарнитура", "6,30", "450", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "vratna-przhola-s-garnitura", "Вратна пържола с гарнитура", "7,70", "450", ""],
["", "pileshko-file-s-garnitura", "Пилешко филе с гарнитура", "7,70", "450", ""],
["", "pileshki-shishcheta-s-garnitura", "Пилешки шишчета с гарнитура", "7,70", "450", ""],
["", "pileshko-i-svinsko-s-garnitura", "Пилешко и свинско с гарнитура", "9,10", "450", ""],
["", "trojka-kebapcheta-s-garnitura", "Тройка кебапчета с гарнитура", "6,30", "450", ""],
["", "shareno-mescze-s-pecheni-aromatni-kartofi", "Шарено месце с печени ароматни картофи", "8,40", "450", ""],
["", "aromatni-pecheni-zelenchuczi", "Ароматни печени зеленчуци", "4,20", "450", ""],
["", "pileshki-giros-s-garnitura", "Пилешки гирос с гарнитура", "7,70", "450", ""],
["", "prlenka", "Пърленка", "1,40", "", ""]

            ],

            "Ястия с ориз": [
                ["", "przhen-oriz-s-pateshko-meso-i-yajcze", "Пържен ориз с патешко месо и яйце", "7,00", "400", ""],
["", "przhen-oriz-s-pileshko-kri-i-yajcze", "Пържен ориз с пилешко, къри и яйце", "6,30", "400", ""],
["", "przhen-oriz-s-morski-darove-i-yajcze", "Пържен ориз с морски дарове и яйце", "7,70", "400", ""],
["", "przhen-oriz-ss-skaridi-i-yajcze", "Пържен ориз със скариди и яйце", "7,70", "400", ""],
["", "przhen-oriz-s-kitajski-gbi-bambuk-i-yajcze", "Пържен ориз с китайски гъби, бамбук и яйце", "6,30", "400", ""],
["", "przhen-oriz-ss-zelenchuczi-i-yajcze", "Пържен ориз със зеленчуци и яйце", "4,90", "400", ""],
["", "przhen-oriz-s-pileshko-meso-i-yajcze", "Пържен ориз с пилешко месо и яйце", "5,60", "400", ""],
["", "przhen-oriz-ss-svinsko-meso-i-yajcze", "Пържен ориз със свинско месо и яйце", "5,60", "400", ""],
["", "przhen-oriz-s-teleshko-meso-i-yajcze", "Пържен ориз с телешко месо и яйце", "6,30", "400", ""],
["", "przhen-oriz-s-tri-vida-meso-i-yajcze", "Пържен ориз с три вида месо и яйце", "7,00", "400", ""]

            ],

            "Ястия със спагети": [
                ["", "przheni-spageti-ss-zelenchuczi-i-yajcze", "Пържени спагети със зеленчуци и яйце", "4,90", "400", ""],
["", "przheni-spageti-s-pileshko-meso-zelenchuczi-i-yajcze", "Пържени спагети с пилешко месо, зеленчуци и яйце", "5,60", "400", ""],
["", "przheni-spageti-ss-svinsko-meso-zelenchuczi-i-yajcze", "Пържени спагети със свинско месо, зеленчуци и яйце", "5,60", "400", ""],
["", "przheni-spageti-s-teleshko-meso-zelenchuczi-i-yajcze", "Пържени спагети с телешко месо, зеленчуци и яйце", "6,30", "400", ""],
["", "przheni-spageti-s-tri-vida-meso-zelenchuczi-i-yajcze", "Пържени спагети с три вида месо, зеленчуци и яйце", "6,30", "400", ""],
["", "przheni-spageti-s-morski-darove-zelenchuczi-i-yajcze", "Пържени спагети с морски дарове, зеленчуци и яйце", "7,70", "400", ""]

            ],

            "Ястия със оризови спагети": [
                ["", "orizovi-spageti-fan-kan-ss-zelenchuczi-i-yajcze", "Оризови спагети Фан Кан със зеленчуци и яйце", "5,60", "400", ""],
["", "orizovi-spageti-fan-kan-s-pileshko-meso-zelenchuczi-i-yajcze", "Оризови спагети Фан Кан с пилешко месо, зеленчуци и яйце", "6,30", "400", ""],
["", "orizovi-spageti-fan-kan-s-tri-vida-meso-zelenchuczi-i-yajcze", "Оризови спагети Фан Кан с три вида месо, зеленчуци и яйце", "7,00", "400", ""],
["", "orizovi-spageti-fan-kan-s-pateshko-meso-zelenchuczi-i-yajcze", "Оризови спагети Фан Кан с патешко месо, зеленчуци и яйце", "7,70", "400", ""],
["", "orizovi-spageti-fan-kan-s-morski-darove-zelenchuczi-i-yajcze", "Оризови спагети Фан Кан с морски дарове, зеленчуци и яйце", "8,40", "400", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "5,60", "400", ""],
["", "sicziliana", "Сицилиана", "7,00", "500", ""],
["", "veneto", "Венето", "7,70", "500", ""],
["", "piperona", "Пиперона", "7,70", "500", ""],
["", "proshuto", "Прошуто", "7,00", "500", ""],
["", "margarita-s-moczarela", "Маргарита с моцарела", "7,00", "400", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "7,70", "500", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "8,40", "500", ""],
["", "bene", "Бене", "8,40", "500", ""],
["", "fokacha-s-pesto-sos", "Фокача с песто сос", "2,10", "150", ""]

            ],

            "pasta": [
                ["", "pomodoro", "Помодоро", "4,90", "350", ""],
["", "boloneze", "Болонезе", "5,60", "400", ""],
["", "karbonara", "Карбонара", "5,60", "400", ""],
["", "alo-skolio", "Ало Сколио", "9,10", "400", ""],
["", "spageti-s-midi", "Спагети с миди", "7,70", "400", ""]

            ],

            "Пърленки": [
                ["", "naturalna-prlenka", "Натурална пърленка", "1,40", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "150", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "200", ""]

            ],

            "Гарнитури и сосове": [
                ["", "kartofi-sote", "Картофи Соте", "2,80", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "kartofi-ss-sirene", "Картофи със сирене", "2,80", "250", ""],
["", "studena-garnitura", "Студена гарнитура", "2,80", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "250", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "sladko-kisel-sos", "Сладко-кисел сос", "0,70", "50", ""],
["", "pikanten", "Пикантен", "0,00", "50", ""]

            ],

            "Детско меню": [
                ["", "detska-picza-przheni-kartofi-i-igrachka", "Детска пица, пържени картофи и играчка", "7,00", "400", ""],
["", "pileshki-khapki-przheni-kartofki-igrachka", "Пилешки хапки, пържени картофки, играчка", "7,00", "350", ""]

            ],

            "Тестени и десерти": [
                ["", "proletno-rolcze", "Пролетно ролце", "2,80", "", ""],
["", "przhen-khlyab", "Пържен хляб", "1,40", "", ""],
["", "paniran-sladoled", "Паниран сладолед", "3,50", "200", ""],
["", "paniran-ananas-s-med", "Паниран ананас с мед", "2,80", "120", ""],
["", "paniran-banan-s-med", "Паниран банан с мед", "2,80", "120", ""],
["", "varen-oriz", "Варен ориз", "1,40", "150", ""]

            ],

            "Гофрети": [
                ["", "gofreta-s-shokolad", "Гофрета с шоколад", "2,10", "150", ""],
["", "gofreta-s-shokolad-i-banan", "Гофрета с шоколад и банан", "2,80", "200", ""],
["", "gofreta-s-plodove-i-shokolad", "Гофрета с плодове и шоколад", "3,50", "200", ""],
["", "gofreta-s-byal-i-kafyav-shokolad", "Гофрета с бял и кафяв шоколад", "2,10", "150", ""]

            ]
        }', 
        'slug' => 'kitayski-restorant-bono',
        'business_name' => 'Китайски ресторант Боно',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Sozopol',
        'region' => 'Sozopol',
        'postal_code' => '8130',
        'address' => 'Централен плаж Арена',
        'address_additional' => '',
        'coords_x' => '42.41936373',
        'coords_y' => '27.69529255',
        'phone' => '+359897926662',
        'email' => '',
        'website' => '',
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
