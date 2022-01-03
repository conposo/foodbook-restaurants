<?php

use Carbon\Carbon;

$restaurants = [

    [
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Сандвичи и хот дог": [
                ["", "teleshki-burger", "Телешки бургер", "5,60", "450", ""],
["", "khot-dog", "Хот Дог", "2,10", "300", ""],
["", "dyuner-s-pileshko-shishche", "Дюнер с пилешко шишче", "3,50", "450", ""],
["", "dyuner-ss-svinsko-shishche", "Дюнер със свинско шишче", "3,50", "450", ""],
["", "dyuner-s-panseta", "Дюнер с пансета", "3,50", "450", ""],
["", "dyuner-s-nadenicza-peperoni", "Дюнер с наденица Пеперони", "3,50", "450", ""],
["", "dyuner-s-domashna-nadenicza", "Дюнер с домашна наденица", "3,50", "450", ""],
["", "dyuner-s-kyufte", "Дюнер с кюфте", "4,20", "500", ""],
["", "dyuner-s-kebapche", "Дюнер с кебапче", "4,20", "500", ""]

            ],

            "grill": [
                ["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "panseta", "Пансета", "1,40", "100", ""],
["", "nadenicza-peperoni", "Наденица Пеперони", "1,40", "100", ""],
["", "domashna-nadenicza", "Домашна наденица", "1,40", "100", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "porcziya-meso", "Порция месо", "6,30", "", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "salata-zelenchuczi", "Салата зеленчуци", "0,70", "100", ""],
["", "mlechna-salata", "Млечна салата", "0,70", "50", ""],
["", "ruska-salata", "Руска салата", "0,70", "50", ""],
["", "tirosalata", "Тиросалата", "0,70", "50", ""],
["", "grczka-pitka", "Гръцка питка", "0,00", "", ""],
["", "blgarska-pitka", "Българска питка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "portokalov-mfin", "Портокалов мъфин", "0,70", "70", ""],
["", "portokal", "Портокал", "0,70", "", ""],
["", "banan", "Банан", "0,70", "", ""],
["", "zelena-yablka", "Зелена ябълка", "0,70", "", ""],
["", "chervena-yablka", "Червена ябълка", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/940160.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/940162.jpg?width=302"]

            ],

            "drinks": [
                ["", "pirinsko", "Пиринско", "1,40", "500", ""],
["", "kafe-lavacza---crema-e-aroma", "Кафе Лаваца - Crema e Aroma", "0,70", "", ""],
["", "frape", "Фрапе", "1,40", "", ""],
["", "fredo-espreso", "Фредо еспресо", "2,10", "", ""],
["", "fredo-kapuchino", "Фредо капучино", "2,10", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "studen-chaj-nestij", "Студен чай Нестий", "2,10", "500", ""],
["", "naturalen-sok-kuins", "Натурален сок Куинс", "1,40", "250", ""],
["", "khajneken", "Хайнекен", "2,10", "500", ""],
["", "stela-artoa", "Стела Артоа", "2,80", "500", ""]

            ]
        }', 
        'slug' => 'kantina-em-kars',
        'business_name' => 'Кантина Ем Карс',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Зеленделско шосе Ем Карс',
        'address_additional' => '',
        'coords_x' => '42.0099668',
        'coords_y' => '23.0597047',
        'phone' => '+359898973165',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Фреш сокове": [
                ["", "yablka", "Ябълка", "2,10", "", ""],
["", "morkov", "Морков", "2,10", "", ""],
["", "portokal", "Портокал", "2,10", "", ""],
["", "fresh-miks", "Фреш микс", "2,10", "", ""],
["", "portokal-i-grejpfrut", "Портокал и грейпфрут", "2,80", "", ""],
["", "fresh-detoks", "Фреш детокс", "2,10", "", ""],
["", "prochistvashh-fresh", "Прочистващ фреш", "2,10", "", ""]

            ],

            "Смути напитки": [
                ["", "portokalova-svezhest", "Портокалова свежест", "2,10", "", ""],
["", "zdravoslovno-smuti", "Здравословно смути", "2,10", "", ""],
["", "smuti-ss-spanak", "Смути със спанак", "2,10", "", ""],
["", "smuti-naslada", "Смути наслада", "2,10", "", ""],
["", "cherveno-smuti", "Червено смути", "2,10", "", ""]

            ],

            "Шейкове": [
                ["", "podsilvashh-shejk", "Подсилващ шейк", "2,10", "", ""],
["", "shejk-s-oveseni-yadki", "Шейк с овесени ядки", "2,10", "", ""],
["", "zdravosloven-shejk", "Здравословен шейк", "2,10", "", ""],
["", "fitnes-myusli", "Фитнес мюсли", "2,10", "", ""],
["", "rozovo-izkushenie", "Розово изкушение", "2,10", "", ""],
["", "shokoladov-shejk", "Шоколадов шейк", "2,10", "", ""]

            ]
        }', 
        'slug' => 'fresh-bar-orkovi',
        'business_name' => 'Fresh Bar Orkovi',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Иван Михайлов 15',
        'address_additional' => '',
        'coords_x' => '42.02077737',
        'coords_y' => '23.09109505',
        'phone' => '+359898490390',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "snezhanka", "Снежанка", "1,40", "200", ""],
["", "vitaminozna-salata", "Витаминозна салата", "1,40", "200", ""]

            ],

            "soups": [
                ["", "agneshka-chorba", "Агнешка чорба", "1,40", "", ""],
["", "tarator", "Таратор", "1,40", "", ""]

            ],

            "starters": [
                ["", "spancheno-kyufte", "Спанчено кюфте", "0,70", "100", ""],
["", "pechen-bob", "Печен боб", "1,40", "350", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "350", ""],
["", "rizoto", "Ризото", "1,40", "350", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "0,70", "", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "0,70", "", ""]

            ],

            "grill": [
                ["", "pileshka-nadenichka-s-manatarka", "Пилешка наденичка с манатарка", "1,40", "120", ""],
["", "svinska-srbska-pleskavicza", "Свинска сръбска плескавица", "2,10", "200", ""],
["", "sudzhuk", "Суджук", "2,10", "150", ""],
["", "pileshka-nadenichka", "Пилешка наденичка", "1,40", "120", ""],
["", "pileshko-butche", "Пилешко бутче", "1,40", "", ""],
["", "svinska-nadenicza", "Свинска наденица", "1,40", "", ""]

            ],

            "chicken": [
                ["", "pile-oriz", "Пиле oриз", "2,80", "450", ""],
["", "pile-s-kartofi", "Пиле с картофи", "2,80", "450", ""],
["", "pileshka-drob-srma", "Пилешка дроб сърма", "2,80", "450", ""]

            ],

            "pork": [
                ["", "svinsko-ss-zele", "Свинско със зеле", "2,80", "450", ""]

            ],

            "bread": [
                ["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "malka-pitka", "Малка питка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta", "Бисквитена торта", "0,70", "150", ""],
["", "krem-karamel", "Крем карамел", "0,70", "150", ""],
["", "krem-feniks", "Крем Феникс", "0,70", "150", ""]

            ],

            "additives": [
                ["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "kiselo-mlyako", "Кисело мляко", "0,00", "", ""],
["", "oriz", "Ориз", "0,70", "", ""]

            ],

            "drinks": [
                ["", "ajryan", "Айрян", "0,70", "400", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "tarator", "Таратор", "1,40", "400", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/956543.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/956544.jpg?width=302"]

            ],

            "beer": [
                ["", "bira-ken", "Бира кен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'brzo-hranene-feniks',
        'business_name' => 'Бързо хранене Феникс',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'бул. Свети Свети Кирил и Методий 23',
        'address_additional' => '',
        'coords_x' => '42.01656983',
        'coords_y' => '23.0894425',
        'phone' => '+359899000432',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-ajsberg-s-meden-dresing", "Салата айсберг с меден дресинг", "2,10", "200", ""],
["", "salata-zele-i-morkovi", "Салата зеле и моркови", "1,40", "200", ""],
["", "salata-domati-i-krastaviczi", "Салата домати и краставици", "1,40", "200", ""],
["", "leskovachki-urnebes-topka", "Лесковачки урнебес топка", "0,70", "70", ""],
["", "czarski-urnebes-topka", "Царски урнебес топка", "0,70", "70", ""],
["", "pileshka-salata-ss-susam-topka", "Пилешка салата със сусам топка", "0,70", "80", ""],
["", "plnen-domat-ss-sirene-magdanoz-i-zekhtin", "Пълнен домат със сирене, магданоз и зехтин", "1,40", "", ""],
["", "snezhanka-topka", "Снежанка топка", "0,70", "80", ""],
["", "pecheni-lyuti-chushki", "Печени люти чушки", "0,00", "", ""],
["", "marinovani-pecheni-chushki", "Мариновани печени чушки", "0,00", "", ""],
["", "keto-rulo-s-tikvichka-krema-sirene-i-shunka", "Кето руло с тиквичка, крема сирене и шунка", "0,00", "70", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "400", ""]

            ],

            "Сръбска скара на дървени въглища": [
                ["", "gurmanska-pleskavicza", "Гурманска плескавица", "3,50", "180", ""],
["", "shpikovana-pleskavicza-s-kashkaval", "Шпикована плескавица с кашкавал", "3,50", "190", ""],
["", "plnena-pleskavicza-s-moczarela-i-shunka", "Пълнена плескавица с моцарела и шунка", "4,20", "220", ""],
["", "srbski-kebapcheta", "Сръбски кебапчета", "2,80", "", ""],
["", "pleskavicza-s-luk", "Плескавица с лук", "2,80", "180", ""],
["", "kebapcheta-s-kashkaval", "Кебапчета с кашкавал", "2,80", "", ""],
["", "peskovachki-ushhipczi", "Песковачки ущипци", "3,50", "", ""],
["", "shish-kebap-s-chushka-i-luk", "Шиш кебап с чушка и лук", "3,50", "180", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "svinska-vratna-na-skara", "Свинска вратна на скара", "3,50", "200", ""],
["", "svinski-grdi-na-skara", "Свински гърди на скара", "4,90", "300", ""],
["", "svinsko-bon-file-na-skara", "Свинско бон филе на скара", "5,60", "200", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "2,10", "200", ""],
["", "pileshki-shishcheta-s-chushka", "Пилешки шишчета с чушка", "2,10", "150", ""],
["", "shishcheta-ot-svinsko-bon-file", "Шишчета от свинско бон филе", "3,50", "150", ""]

            ],

            "1Ястия от домашна кайма": [
                ["", "plnen-patladzhan-s-domashna-kajma", "Пълнен патладжан с домашна кайма", "2,10", "", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshko-file-s-pyure-ot-brokoli-i-kashkaval-s-garnitura-zelena-salata", "Пилешко филе с пюре от броколи и кашкавал с гарнитура зелена салата", "4,20", "350", ""]

            ],

            "Ястия от риба": [
                ["", "file-ot-lavrak", "Филе от лаврак", "8,40", "200", ""]

            ],

            "Гарнитура варива": [
                ["", "oriz-basmati-s-gbi", "Ориз басмати с гъби", "1,40", "200", ""],
["", "przhenicza-ss-sirene", "Пърженица със сирене", "2,80", "200", ""],
["", "sotirani-morkov-pashhrnak-i-czelina", "Сотирани морков, пащърнак и целина", "2,80", "200", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,10", "", ""]

            ],

            "bread": [
                ["", "srbski-somun", "Сръбски сомун", "0,70", "150", ""],
["", "prlenka-na-skara", "Пърленка на скара", "0,70", "140", ""],
["", "komplekt-pribori", "Комплект прибори", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", ""]

            ],

            "drinks": [
                ["", "cherveno-vino-medivali-butilka", "Червено вино медивали бутилка", "2,80", "187", ""],
["", "byalo-vino-medivali-butilka", "Бяло вино медивали бутилка", "2,80", "187", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'soul-food',
        'business_name' => 'Soul Food',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Доктор Христо Татарчев 12',
        'address_additional' => '',
        'coords_x' => '42.02081788',
        'coords_y' => '23.09838857',
        'phone' => '+359877566541',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-pile", "Салата пиле", "2,10", "300", ""],
["", "grczka-salata", "Гръцка салата", "2,10", "300", ""],
["", "przhenni-kartofi-porcziya", "Пърженни картофи порция", "2,10", "300", ""]

            ],

            "Дюнер пилешки": [
                ["", "pileshki-dyuner-malk", "Пилешки дюнер малък", "1,40", "300", ""],
["", "pileshki-dyuner-sreden", "Пилешки дюнер среден", "2,10", "350", ""],
["", "pileshki-dyuner-golyam", "Пилешки дюнер голям", "2,80", "400", ""],
["", "pileshki-dyuner-gigant", "Пилешки дюнер гигант", "4,20", "900", ""],
["", "dyuner-miks", "Дюнер микс", "2,80", "350", ""],
["", "dyuner-golyam-miks", "Дюнер голям микс", "3,50", "400", ""],
["", "pileshki-dyuner-golyama-porcziya", "Пилешки дюнер голяма порция", "5,60", "900", ""],
["", "pileshki-dyuner-malka-porcziya", "Пилешки дюнер малка порция", "4,20", "700", ""],
["", "pileshki-dyuner-v-kutiya", "Пилешки дюнер в кутия", "2,10", "400", ""]

            ],

            "Дюнер свински": [
                ["", "svinski-dyuner-sreden", "Свински дюнер среден", "2,80", "350", ""],
["", "svinski-dyuner-golyam", "Свински дюнер голям", "3,50", "400", ""],
["", "svinski-dyuner-gigant", "Свински дюнер гигант", "4,90", "900", ""],
["", "svinski-dyuner-porcziya", "Свински дюнер порция", "6,30", "900", ""]

            ],

            "Дюнер телешки": [
                ["", "teleshki-dyuner-sreden", "Телешки дюнер среден", "2,80", "350", ""],
["", "teleshki-dyuner-golyam", "Телешки дюнер голям", "3,50", "400", ""],
["", "teleshki-dyuner-gigant", "Телешки дюнер гигант", "5,60", "900", ""],
["", "teleshki-dyuner-porcziya", "Телешки дюнер порция", "6,30", "900", ""]

            ],

            "Вегетариански дюнер": [
                ["", "malk-vegetarianski-dyuner", "Малък Вегетариански дюнер", "1,40", "300", ""],
["", "sreden-vegetarianski-dyuner", "Среден Вегетариански дюнер", "1,40", "350", ""],
["", "golyam-vegetarianski-dyuner", "Голям Вегетариански дюнер", "2,10", "400", ""]

            ],

            "Тостери": [
                ["", "tost-ekspres", "Тост Експрес", "2,10", "450", ""],
["", "dyuner-v-pitka", "Дюнер в питка", "2,10", "450", ""],
["", "tost-s-pile-pane", "Тост с пиле пане", "2,10", "450", ""],
["", "teleshki-tost", "Телешки тост", "2,80", "450", ""],
["", "tost-lukanka", "Тост луканка", "2,10", "450", ""],
["", "tost-shunka", "Тост шунка", "2,10", "450", ""],
["", "tost-krenvirsh", "Тост кренвирш", "2,10", "450", ""],
["", "tost-shniczel", "Тост шницел", "2,10", "450", ""],
["", "vegetarianski-tost", "Вегетариански тост", "1,40", "450", ""],
["", "khot-dog", "Хот-дог", "1,40", "", ""],
["", "policzejski-khot-dog", "Полицейски хот-дог", "2,10", "", ""],
["", "amerikanski-khot-dog", "Американски хот-дог", "1,40", "350", ""]

            ],

            "specialties": [
                ["", "speczialitet-na-majstora-porcziya", "Специалитет на Майстора порция", "7,70", "", ""],
["", "burger-mimas", "Бургер Мимас", "2,80", "450", ""],
["", "big-burger", "Биг Бургер", "3,50", "450", ""],
["", "super-burger", "Супер Бургер", "2,10", "450", ""],
["", "shish-tauk", "Шиш таук", "2,10", "450", ""],
["", "shish-tauk-porcziya", "Шиш таук порция", "5,60", "900", ""],
["", "pileshko-meso-ot-dyuner", "Пилешко месо от дюнер", "3,50", "200", ""],
["", "sudzhu", "Суджу", "2,80", "450", ""]

            ],

            "additives": [
                ["", "dobavka-meso", "Добавка месо", "0,70", "70", ""],
["", "arabska-pitka", "Арабска питка", "0,00", "", ""],
["", "byala-pitka", "Бяла питка", "0,00", "", ""],
["", "dobavka-topeno-sirene", "Добавка топено сирене", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/995534.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/995535.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/995536.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/995537.jpg?width=302"]

            ],

            "drinks": [
                ["", "pepsi", "Пепси", "0,70", "330", ""],
["", "pepsi", "Пепси", "1,40", "500", ""],
["", "ajryan-megle", "Айрян Мегле", "0,70", "300", ""],
["", "mineralna-voda-rilana", "Минерална вода Рилана", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'dyuner-ekspres',
        'business_name' => 'Дюнер Експрес',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. „Сандо и Петър Китанови“ 3',
        'address_additional' => '',
        'coords_x' => '42.02113988',
        'coords_y' => '23.10120746',
        'phone' => '+359894314793',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "beleni-domati-grilovani-zelenchuczi-menta-bosilek-sirena-i-orekhi", "Белени домати, гриловани зеленчуци, мента, босилек, сирена и орехи", "4,90", "400", ""],
["", "burata-s-avokado", "Бурата с авокадо", "5,60", "300", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "czezar", "Цезар", "4,90", "350", ""],
["", "salata-s-pechen-patladzhan-domati-sirene-i-magdanoz", "Салата с печен патладжан, домати, сирене и магданоз", "4,90", "450", ""],
["", "miks-zeleni-salatki-susheni-kajsii-zapecheni-orekhi-frenski-dresing-i-koze-sirene", "Микс зелени салатки, сушени кайсии, запечени орехи, френски дресинг и козе сирене", "5,60", "300", ""],
["", "salata-s-kinoa-i-skaridi", "Салата с киноа и скариди", "6,30", "300", ""],
["", "toskana", "Тоскана", "4,90", "400", ""],
["", "kapreze", "Капрезе", "4,90", "300", ""],
["", "domati-s-ovche-sirene-i-pechena-chushka", "Домати с овче сирене и печена чушка", "4,90", "450", ""],
["", "koze-sirene", "Козе сирене", "2,10", "100", ""],
["", "ovche-sirene", "Овче сирене", "2,10", "100", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "350", ""],
["", "tarator", "Таратор", "1,40", "350", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "1,40", "350", ""],
["", "krem-supa-ot-morkovi", "Крем супа от моркови", "1,40", "350", ""]

            ],

            "starters": [
                ["", "khrupkavi-spanacheni-kyuftencza-s-mlechen-sos-i-orekhi", "Хрупкави спаначени кюфтенца с млечен сос и орехи", "4,20", "300", ""],
["", "domashni-przheni-kartofki", "Домашни пържени картофки", "2,10", "300", ""],
["", "brokoli-ss-sino-sirene-smetana-i-yadki", "Броколи със синьо сирене, сметана и ядки", "4,20", "400", ""],
["", "marinovani-pileshki-krilcza", "Мариновани пилешки крилца", "4,20", "300", ""],
["", "ezik-v-maslo", "Език в масло", "4,20", "250", ""],
["", "zapechen-patladzhan-s-domati-i-moczarela-parmezan-i-svezha-salata", "Запечен патладжан с домати и моцарела, пармезан и свежа салата", "4,90", "300", ""],
["", "zapecheni-kartofi-ss-smetana-sirena-i-brokoli", "Запечени картофи със сметана, сирена и броколи", "4,20", "400", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,20", "250", ""]

            ],

            "Бургери и сандвичи": [
                ["", "burger-vips", "Бургер Випс", "4,90", "500", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "4,20", "500", ""],
["", "klub-sandvich-vips", "Клуб сандвич Випс", "4,90", "500", ""],
["", "bilkova-chabata", "Билкова чабата", "4,20", "400", ""],
["", "tost-sandvich", "Тост сандвич", "2,80", "350", ""],
["", "burito-s-pile-czarevicza-i-zelani-salatki", "Бурито с пиле, царевица и зелани салатки", "4,20", "", ""]

            ],

            "fish": [
                ["", "kalmari-s-maslo-i-kopr", "Калмари с масло и копър", "7,70", "200", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "7,70", "200", ""],
["", "skaridi-v-maslo", "Скариди в масло", "8,40", "200", ""]

            ],

            "Основни ястия": [
                ["", "glazirani-svinski-rebrcza", "Глазирани свински ребърца", "8,40", "400", ""],
["", "krekhko-teleshko", "Крехко телешко", "10,50", "350", ""]

            ],

            "Паста и ризото": [
                ["", "taliyateli-s-brokoli-pile-smetana-i-sino-sirene", "Талиятели с броколи, пиле, сметана и синьо сирене", "4,90", "250", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "250", ""],
["", "rizoto-s-pile-i-smetana", "Ризото с пиле и сметана", "4,90", "300", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,90", "300", ""]

            ],

            "Пърленки и хляб": [
                ["", "prlenka-s-chesn", "Пърленка с чесън", "1,40", "120", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "150", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "150", ""],
["", "prlenska-s-masli-i-podpravki", "Пърленска с масли и подправки", "1,40", "120", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "150", ""]

            ],

            "pizza": [
                ["", "picza-vips", "Пица Випс", "4,90", "", ""],
["", "picza-margarita", "Пица Маргарита", "3,50", "", ""],
["", "picza-klasik", "Пица Класик", "3,50", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,20", "", ""],
["", "picza-neapolitana", "Пица Неаполитана", "4,20", "", ""],
["", "picza-proshuto-krudo", "Пица Прошуто Крудо", "4,20", "", ""],
["", "picza-palermo", "Пица Палермо", "4,20", "", ""],
["", "picza-kuatro-stadzhoni", "Пица Куатро Стаджони", "4,20", "", ""],
["", "picza-kalczone", "Пица Калцоне", "4,20", "", ""],
["", "picza-polo", "Пица Поло", "4,20", "", ""],
["", "picza-vegetariana", "Пица Вегетариана", "3,50", "", ""],
["", "picza-peperoni", "Пица Пеперони", "4,20", "", ""],
["", "picza-chetiri-sirena", "Пица Четири сирена", "4,20", "", ""],
["", "picza-italiana", "Пица Италиана", "4,20", "", ""],
["", "picza-verona", "Пица Верона", "4,20", "", ""]

            ],

            "desserts": [
                ["", "tiramisu", "Тирамису", "2,80", "", ""],
["", "domashna-palachinka-s-plodove-i-frenska-nuga", "Домашна палачинка с плодове и френска нуга", "1,40", "", ""],
["", "gofreti", "Гофрети", "2,80", "", ""],
["", "torta-s-maskarpone", "Торта с маскарпоне", "2,80", "", ""]

            ]
        }', 
        'slug' => 'magnolia-garden',
        'business_name' => 'Magnolia Garden',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Секвоя 2',
        'address_additional' => '',
        'coords_x' => '42.0030668',
        'coords_y' => '23.1033051',
        'phone' => '+359878380393',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "appetizer": [
                ["", "tiro-kafteri", "Тиро кафтери", "2,80", "", ""],
["", "lyutika", "Лютика", "2,80", "", ""],
["", "maslinova-razyadka", "Маслинова разядка", "2,80", "", ""]

            ],

            "starters": [
                ["", "kartofi-sote", "Картофи соте", "2,80", "330", ""],
["", "kashkaval-pane-khapki", "Кашкавал пане хапки", "4,20", "250", ""],
["", "topeno-sirene-pane", "Топено сирене пане", "4,20", "250", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "250", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,20", "300", ""],
["", "zelenchuczi-na-plocha", "Зеленчуци на плоча", "5,60", "400", ""],
["", "kalmari", "Калмари", "9,80", "250", ""]

            ],

            "salads": [
                ["", "grczka-salata", "Гръцка салата", "4,90", "450", ""],
["", "zelena-salata", "Зелена салата", "3,50", "340", ""],
["", "spanak-s-kinoa-i-meden-dresing", "Спанак с киноа и меден дресинг", "6,30", "350", ""],
["", "salata-ajsberg-s-proshuto-krudo", "Салата айсберг с прошуто крудо", "6,30", "", ""],
["", "kapreze", "Капрезе", "4,90", "400", ""],
["", "rozov-domat-s-pechena-chushka-i-feta-sirene", "Розов домат с печена чушка и фета сирене", "5,60", "400", ""],
["", "czezar", "Цезар", "6,30", "460", ""],
["", "shopska-salata", "Шопска салата", "4,20", "450", ""],
["", "ovcharska-salata", "Овчарска салата", "5,60", "560", ""]

            ],

            "Пици с доматен сос": [
                ["", "margarita", "Маргарита", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "6,30", "", ""],
["", "kuatro-di-karne", "Куатро ди Карне", "7,70", "", ""],
["", "kalczone", "Калцоне", "6,30", "", ""],
["", "peperoni", "Пеперони", "6,30", "", ""],
["", "kariola", "Кариола", "6,30", "", ""],
["", "proshuto-krudo", "Прошуто Крудо", "7,70", "", ""],
["", "klasika", "Класика", "5,60", "", ""],
["", "feliche", "Феличе", "6,30", "", ""],
["", "marina", "Марина", "4,20", "", ""],
["", "picza-s-krenvirsh", "Пица с кренвирш", "5,60", "", ""],
["", "picza-s-pileshko-file", "Пица с пилешко филе", "5,60", "", ""],
["", "lyuta-picza", "Люта пица", "6,30", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "7,00", "", ""],
["", "vegetariana", "Вегетариана", "5,60", "", ""]

            ],

            "Пици с бял сос": [
                ["", "kuatro-formadzhi", "Куатро Формаджи", "7,70", "", ""],
["", "mortadela", "Мортадела", "7,70", "", ""],
["", "picza-s-nadenichka", "Пица с наденичка", "7,00", "", ""],
["", "picza-s-kyuftencze", "Пица с кюфтенце", "6,30", "", ""]

            ],

            "barbecue": [
                ["", "pileshko-file", "Пилешко филе", "4,90", "250", ""],
["", "svinski-vrat", "Свински врат", "4,90", "250", ""],
["", "rebrcza", "Ребърца", "5,60", "300", ""],
["", "teleshki-kyufteta", "Телешки кюфтета", "4,90", "240", ""],
["", "domashen-sudzhuk", "Домашен суджук", "3,50", "200", ""],
["", "srbski-pikanten-sudzhuk", "Сръбски пикантен суджук", "4,20", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "2,80", "", ""],
["", "bon-file", "Бон филе", "6,30", "250", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""]

            ],

            "Прясна паста и ризото": [
                ["", "spageti-boloneze", "Спагети Болонезе", "4,90", "300", ""],
["", "taliatele-karbonara", "Талиателе Карбонара", "4,90", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "350", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "4,20", "350", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "350", ""]

            ],

            "sandwiches": [
                ["", "teleshki-burger", "Телешки бургер", "5,60", "", ""],
["", "pileshki-burger", "Пилешки бургер", "5,60", "", ""],
["", "tortila-s-pileshko-file", "Тортила с пилешко филе", "4,90", "", ""],
["", "klub-sandvich-s-pileshko-file", "Клуб сандвич с пилешко филе", "4,20", "", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "4,90", "", ""],
["", "klub-sandvich-s-shunka", "Клуб сандвич с шунка", "4,20", "", ""],
["", "panini-s-shunka", "Панини с шунка", "5,60", "", ""],
["", "panini-s-proshuto-krudo", "Панини с прошуто крудо", "5,60", "", ""],
["", "vegetariansko-panini", "Вегетарианско панини", "5,60", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "chili", "Чили", "0,00", "", ""],
["", "barbekyu", "Барбекю", "0,00", "", ""],
["", "mlechen", "Млечен", "0,00", "", ""],
["", "chesnov", "Чеснов", "0,00", "", ""]

            ],

            "desserts": [
                ["", "picza-nutela", "Пица Нутела", "6,30", "", ""],
["", "pryasna-palachinka", "Прясна палачинка", "2,10", "", ""]

            ],

            "bread": [
                ["", "fokacha-s-chesn-rozmarin-i-zekhtin", "Фокача с чесън, розмарин и зехтин", "2,10", "250", ""],
["", "fokacha-s-kashkaval", "Фокача с кашкавал", "2,80", "300", ""],
["", "fokacha-ss-sirene", "Фокача със сирене", "2,80", "300", ""],
["", "kombinirana-fokacha", "Комбинирана фокача", "2,80", "300", ""],
["", "grizini", "Гризини", "2,80", "250", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/711787.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/711788.jpg?width=302"],
["", "fanta-limon", "Fanta Лимон", "1,40", "330", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/711790.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/711791.jpg?width=302"]

            ],

            "drinks": [
                ["", "mineralna-voda-devin", "Минерална вода Девин", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'arena-park-bar',
        'business_name' => 'Arena Park bar &amp; dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Даме Груев 19',
        'address_additional' => '',
        'coords_x' => '42.01235679',
        'coords_y' => '23.09228385',
        'phone' => '+359889404060',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "zelena-salata", "Зелена салата", "3,50", "300", ""],
["", "beleni-domati-s-katk", "Белени домати с катък", "4,20", "400", ""],
["", "zelena-salata-s-koze-sirene", "Зелена салата с козе сирене", "6,30", "350", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "kapreze", "Капрезе", "4,90", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "salata-verde", "Салата Верде", "5,60", "300", ""],
["", "salata-s-riba-ton", "Салата с риба тон", "5,60", "350", ""],
["", "vitaminozna-salata", "Витаминозна салата", "3,50", "300", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "350", ""]

            ],

            "appetizer": [
                ["", "dzadziki", "Дзадзики", "2,80", "", ""],
["", "patladzhanen-mus", "Патладжанен мус", "2,80", "", ""],
["", "katk", "Катък", "2,80", "", ""]

            ],

            "Брускети": [
                ["", "brusketi-klasiko", "Брускети класико", "2,10", "", ""],
["", "s-proshuto-i-gbi", "С прошуто и гъби", "3,50", "", ""],
["", "brusketi-ss-somga-i-krema-sirene", "Брускети със сьомга и крема сирене", "4,20", "", ""]

            ],

            "Топли предястия": [
                ["", "verdura-impanata", "Вердура импаната", "4,20", "350", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,20", "250", ""],
["", "przheni-domashni-kartofki", "Пържени домашни картофки", "2,10", "250", ""],
["", "przheni-domashni-kartofki-ss-sirene", "Пържени домашни картофки със сирене", "2,10", "300", ""],
["", "sotirani-chesnovi-kartofi-na-tigan-s-maslo-kurkuma-i-kopr", "Сотирани чеснови картофи на тиган с масло, куркума и копър", "2,10", "350", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "300", ""],
["", "teleshki-ezik-s-gbi-maslo-i-kashkaval", "Телешки език с гъби, масло и кашкавал", "5,60", "250", ""],
["", "spanak-v-italianski-sos", "Спанак в италиански сос", "4,20", "300", ""],
["", "khrupkavi-pileshki-khapki-s-chesnov-sos", "Хрупкави пилешки хапки с чеснов сос", "4,90", "250", ""],
["", "pileshki-krilcza-s-barbekyu-sos", "Пилешки крилца с барбекю сос", "4,20", "350", ""],
["", "pateshki-srcza-na-tigan", "Патешки сърца на тиган", "4,20", "250", ""],
["", "panirani-topeni-sirencza-v-kornflejks-s-borovinkovo-sladko", "Панирани топени сиренца в корнфлейкс с боровинково сладко", "3,50", "250", ""],
["", "panirani-brokoli-s-chesnov-sos", "Панирани броколи с чеснов сос", "3,50", "250", ""],
["", "melanzanya", "Меланзаня", "3,50", "250", ""],
["", "zapecheni-brokoli-ss-sirena-i-smetana", "Запечени броколи със сирена и сметана", "3,50", "300", ""],
["", "koze-sirene-na-plocha-s-med--orekhi-i-rukola", "Козе сирене на плоча  с мед , орехи и рукола", "5,60", "200", ""],
["", "kashkaval-pane-ss-smokinovo-sladko", "Кашкавал пане със смокиново сладко", "4,90", "200", ""],
["", "rumaki", "Румаки", "4,90", "250", ""]

            ],

            "pizza": [
                ["", "marinara", "Маринара", "2,80", "", ""],
["", "margarita-s-moczarela-i-svezh-bosilek", "Маргарита с моцарела и свеж босилек", "4,20", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "picza-s-anshoa", "Пица с аншоа", "4,20", "", ""],
["", "gradinarska", "Градинарска", "4,20", "", ""],
["", "proshuto", "Прошуто", "3,50", "", ""],
["", "proshuto-krudo", "Прошуто крудо", "4,90", "", ""],
["", "montanara", "Монтанара", "4,20", "", ""],
["", "fungi-proshuto", "Фунги прошуто", "4,20", "", ""],
["", "meksiko", "Мексико", "4,90", "", ""],
["", "peperoni", "Пеперони", "4,90", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "4,20", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "picza-s-riba-ton", "Пица с риба тон", "4,20", "", ""],
["", "kalczone-smes", "Калцоне смес", "4,90", "", ""],
["", "don-zhuan", "Дон Жуан", "5,60", "", ""],
["", "maska", "Маска", "5,60", "", ""],
["", "pikante", "Пиканте", "5,60", "", ""],
["", "dela-kaza", "Дела каза", "5,60", "", ""],
["", "mafiozo", "Мафиозо", "4,90", "", ""],
["", "khavaj", "Хавай", "4,20", "", ""],
["", "bianka", "Бианка", "5,60", "", ""],
["", "sicziliya", "Сицилия", "4,90", "", ""],
["", "verona", "Верона", "5,60", "", ""],
["", "roma", "Рома", "4,90", "", ""],
["", "femili-ekstra", "Фемили екстра", "18,20", "", ""],
["", "femili-luks", "Фемили Лукс", "20,30", "", ""]

            ],

            "pasta": [
                ["", "spageti-pomodoro", "Спагети Помодоро", "2,80", "300", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "350", ""],
["", "talyateli-rustikana", "Талятели Рустикана", "5,60", "400", ""],
["", "talyateli-primavera", "Талятели Примавера", "3,50", "400", ""],
["", "ravioli-s-byal-sos", "Равиоли с бял сос", "5,60", "400", ""],
["", "tortelini-pana-e-proshuto", "Тортелини Пана е прошуто", "5,60", "350", ""],
["", "talyateli-boskajola", "Талятели Боскайола", "4,90", "400", ""],
["", "talyateli-formadzhi", "Талятели Формаджи", "5,60", "400", ""],
["", "penne-arabiata", "Пенне Арабиата", "4,20", "350", ""],
["", "talyateli-s-domaten-sos-kashkaval-bekon-gbi-luk-maslini-i-magdanoz", "Талятели  с доматен сос, кашкавал, бекон, гъби, лук, маслини и магданоз", "4,90", "400", ""],
["", "kaneloni-rikota-e-spinachi", "Канелони рикота е спиначи", "4,90", "450", ""],
["", "kaneloni-po-kreolski", "Канелони по креолски", "4,90", "400", ""],
["", "lazanya-proshuto-e-spinachi", "Лазаня Прошуто е спиначи", "4,90", "", ""],
["", "lazanya-al-ragu", "Лазаня Ал Рагу", "4,90", "400", ""],
["", "lazanya-ss-zelenchuczi", "Лазаня със зеленчуци", "4,90", "400", ""]

            ],

            "risotto": [
                ["", "rizoto-ala-verdure", "Ризото ала вердуре", "4,20", "400", ""],
["", "rizoto-ala-paezana", "Ризото ала Паезана", "4,90", "400", ""],
["", "rizoto-s-gorski-gbi", "Ризото с горски гъби", "4,90", "", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "5,60", "400", ""]

            ],

            "burgers": [
                ["", "burger-s-teleshko", "Бургер с телешко", "5,60", "400", ""],
["", "burger-ss-svinsko", "Бургер със свинско", "5,60", "400", ""],
["", "burger-s-pileshko", "Бургер с пилешко", "5,60", "400", ""]

            ],

            "grill": [
                ["", "domashno-svinsko-kyufte", "Домашно свинско кюфте", "0,70", "80", ""],
["", "teleshko-kyufte", "Телешко кюфте", "1,40", "200", ""],
["", "agneshko-kyufte", "Агнешко кюфте", "1,40", "100", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "200", ""],
["", "domashen-sudzhuk", "Домашен суджук", "4,90", "200", ""],
["", "svinska-panseta", "Свинска пансета", "4,90", "300", ""],
["", "svinski-rebra", "Свински ребра", "5,60", "500", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "200", ""]

            ],

            "Ястия със свинско": [
                ["", "svinski-medaloni-s-manatarki-i-pyure-ot-morkovi", "Свински медальони с манатарки и пюре от моркови", "7,00", "350", ""],
["", "svinsko-bonfile-s-yablkov-sajder-kartofi-i-bejbi-morkovi", "Свинско бонфиле с ябълков сайдер, картофи и бейби моркови", "7,00", "350", ""],
["", "svinski-kotlet-s-barbekyu-sos-pechena-czarevicza-na-skara-i-polenta", "Свински котлет с барбекю сос, печена царевица на скара и полента", "7,00", "350", ""]

            ],

            "Ястия с пилешко": [
                ["", "pile-v-sladko-kisel-sos-podneseno-s-oriz-basmati", "Пиле в сладко кисел сос, поднесено с ориз Басмати", "5,60", "400", ""],
["", "pileshko-file-s-teriyaki-sos-i-sotirani-zelenchuczi", "Пилешко филе с терияки сос и сотирани зеленчуци", "5,60", "400", ""],
["", "pileshko-file-s-bilkova-korichka", "Пилешко филе с билкова коричка", "5,60", "350", ""]

            ],

            "Ястия с телешко": [
                ["", "teleshki-stek-s-pepr-sos", "Телешки стек с пепър сос", "11,20", "350", ""],
["", "teleshki-stek-s-vinen-sos", "Телешки стек с винен сос", "11,20", "350", ""],
["", "teleki-zhulieni-s-luk-gbi-smetana-i-gorchicza", "Телеки жулиени с лук, гъби, сметана и горчица", "11,20", "350", ""]

            ],

            "fish": [
                ["", "riba-pstrva-na-skara-ili-tigan-prigotvena-po-klasicheska-reczepta", "Риба Пъстърва на скара или тиган, приготвена по класическа рецепта", "6,30", "250", ""],
["", "riba-milaneze", "Риба Миланезе", "6,30", "300", ""],
["", "panirani-kalmari-podneseni-s-chesnov-sos", "Панирани Калмари, поднесени с чеснов сос", "8,40", "200", ""],
["", "skaridi-s-byalo-vino-chesn-kopr-i-limon", "Скариди с бяло вино, чесън, копър и лимон", "9,10", "200", ""],
["", "file-somga-ss-sos-bearnez-i-asperzhi", "Филе сьомга със сос беарнез и аспержи", "14,00", "300", ""],
["", "file-somga-s-teriyaki-sos-i-grilovani-zelenchuczi", "Филе сьомга с терияки сос и гриловани зеленчуци", "14,00", "300", ""]

            ],

            "desserts": [
                ["", "chijz-kejk", "Чийз кейк", "2,80", "150", ""],
["", "domashna-biskvitena-torta-s-maskarpone-i-byal-shokolad", "Домашна бисквитена торта с маскарпоне и бял шоколад", "2,80", "150", ""],
["", "palachinki", "Палачинки", "2,10", "", ""],
["", "torta-nuga", "Торта Нуга", "2,80", "150", ""],
["", "shokoladovo-sufle-ss-sladoled", "Шоколадово суфле със сладолед", "2,80", "", ""]

            ],

            "bread": [
                ["", "chesnovo-khlebche-s-bilki", "Чесново хлебче с билки", "0,70", "90", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "fokacha-ss-zekhtin-chesn-i-sharena-sol", "Фокача със зехтин, чесън и шарена сол", "1,40", "", ""]

            ]
        }', 
        'slug' => 'pizza-napoli',
        'business_name' => 'Pizza-Napoli',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'Христо Ботев 4',
        'address_additional' => '',
        'coords_x' => '42.02173591',
        'coords_y' => '23.09899485',
        'phone' => '+359889619233',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
            
            "salads": [
                ["", "domashna-salata", "Домашна салата", "3,50", "400", ""],
["", "marulya-s-yajcze", "Маруля с яйце", "2,10", "380", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "380", ""],
["", "domati-s-moczarela-i-pesto", "Домати с моцарела и песто", "4,20", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "salata-bar-82", "Салата Бар 82", "4,20", "380", ""],
["", "ajsberg-s-pileshko", "Айсберг с пилешко", "4,90", "380", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "teleshka-shkembe-chorba", "Телешка шкембе чорба", "1,40", "", ""]

            ],

            "alaminuti": [
                ["", "zapecheni-brokoli-ss-sino-sirene-i-kashkaval", "Запечени броколи със синьо сирене и кашкавал", "2,80", "400", ""],
["", "zapecheno-sirene", "Запечено сирене", "2,80", "280", ""],
["", "zapecheni-kartofi-s-pushen-bekon-kashkaval-i-smetana", "Запечени картофи с пушен бекон, кашкавал и сметана", "3,50", "400", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "270", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "320", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "khapki-s-kornflejks", "Хапки с корнфлейкс", "3,50", "250", ""],
["", "panirani-brokoli", "Панирани броколи", "3,50", "330", ""],
["", "brokoli-v-maslo", "Броколи в масло", "3,50", "330", ""],
["", "omlet-natyurbrkani-yajcza", "Омлет натюр/Бъркани яйца", "2,10", "", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "2,80", "", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "270", ""]

            ],

            "Сандвичи и бургери": [
                ["", "zapechen-sandvich-s-pusheno-file-i-kashkaval", "Запечен сандвич с пушено филе и кашкавал", "1,40", "300", ""],
["", "klub-sandvich-s-kartofki-i-bekon", "Клуб сандвич с картофки и бекон", "4,20", "400", ""],
["", "teleshki-burger-bar-82-s-chedr-ajsberg-i-kartofki", "Телешки бургер Бар 82 с чедър, айсберг и картофки", "4,20", "400", ""],
["", "teleshki-burger-s-bekon-i-yajcze-chedr-ajsberg-i-kartofki", "Телешки бургер с бекон и яйце, чедър, айсберг и картофки", "4,90", "400", ""],
["", "przheni-filijki-ss-sladko", "Пържени филийки със сладко", "2,10", "", ""],
["", "tortila-s-pileshko", "Тортила с пилешко", "4,90", "350", ""]

            ],

            "Ястия с пилешко": [
                ["", "bosilekovo-pileshko-file-s-kartofi-i-italianski-miks", "Босилеково пилешко филе с картофи и италиански микс", "4,20", "400", ""],
["", "pileshko-file-s-brokoli-i-mus-ot-sirena", "Пилешко филе с броколи и мус от сирена", "4,20", "380", ""],
["", "przhola-pileshko-file", "Пържола пилешко филе", "3,50", "270", ""],
["", "przhola-pileshki-but", "Пържола пилешки бут", "3,50", "270", ""]

            ],

            "Ястия със свинско": [
                ["", "svinski-filencza-s-grilovani-zelenchuczi-i-gorchicza", "Свински филенца с гриловани зеленчуци и горчица", "4,90", "390", ""],
["", "svinsko-bon-file-s-karameliziran-luk", "Свинско бон филе с карамелизиран лук", "4,90", "380", ""],
["", "svinski-vrat", "Свински врат", "4,90", "270", ""],
["", "sudzhuk-ss-salata-i-kartofi", "Суджук със салата и картофи", "4,20", "350", ""]

            ],

            "Ястия с кайма": [
                ["", "kyufte", "Кюфте", "0,70", "60", ""],
["", "teleshko-kyufte", "Телешко кюфте", "2,80", "110", ""]

            ],

            "fish": [
                ["", "somga-kotlet", "Сьомга котлет", "10,50", "370", ""],
["", "pstrva", "Пъстърва", "7,00", "400", ""],
["", "aromatni-khrupkavi-kalmari", "Ароматни хрупкави калмари", "6,30", "250", ""],
["", "lavrak-file", "Лаврак филе", "10,50", "400", ""]

            ],

            "pasta": [
                ["", "pasta-karbonara", "Паста Карбонара", "3,50", "330", ""],
["", "pasta-boloneze", "Паста Болонезе", "3,50", "330", ""],
["", "pasta-ss-zelenchuczi-i-kashkaval", "Паста със зеленчуци и кашкавал", "3,50", "330", ""],
["", "pelmeni", "Пелмени", "4,20", "300", ""],
["", "pasta-s-pile-brokoli-i-sirena", "Паста с пиле, броколи и сирена", "4,20", "", ""]

            ],

            "desserts": [
                ["", "morkovena-torta", "Морковена торта", "2,10", "", ""],
["", "torta-s-chereshi-i-maskarpone", "Торта с череши и маскарпоне", "2,10", "", ""],
["", "torta-s-rikota-i-shokoladov-ganash", "Торта с рикота и шоколадов ганаш", "2,10", "", ""]

            ],

            "drinks": [
                ["", "studen-chaj", "Студен чай", "0,70", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "fresh", "Фреш", "2,10", "250", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/832380.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/832381.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/832382.jpg?width=302"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/832383.jpg?width=302"]

            ],

            "beer": [
                ["", "pirinsko", "Пиринско", "0,70", "500", ""],
["", "pirinsko-mlado", "Пиринско младо", "0,70", "330", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "khajneken", "Хайнекен", "2,10", "500", ""],
["", "tuborg", "Туборг", "1,40", "500", ""]

            ],

            "wine": [
                ["", "mezek-merlo", "Мезек Мерло", "10,50", "750", ""],
["", "mezek-sovinon-blan", "Мезек Совиньон блан", "10,50", "750", ""],
["", "frnuej-sovinon-blan", "Фърнуей Совиньон блан", "12,60", "750", ""],
["", "insolo-shardone", "Инсоло Шардоне", "31,50", "750", ""],
["", "cherga-roze", "Черга розе", "10,50", "750", ""],
["", "penlivo-vino-proseko", "Пенливо вино просеко", "11,90", "750", ""]

            ],

            "garnish": [
                ["", "domati-krastaviczi-i-kartofi", "Домати, краставици и картофи", "1,40", "", ""]

            ],

            "bread": [
                ["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""]

            ]
        }', 
        'slug' => 'bar-dinner-82',
        'business_name' => 'Bar &amp; Dinner 82',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Иван Гарванов 12',
        'address_additional' => '',
        'coords_x' => '42.01467',
        'coords_y' => '23.0802503',
        'phone' => '+359898604917',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "tradiczionna-shopska-salata", "Традиционна шопска салата", "4,20", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "450", ""],
["", "vitaminozna-salata", "Витаминозна салата", "3,50", "320", ""],
["", "salata-verde", "Салата Верде", "4,90", "250", ""],
["", "zelena-salata", "Зелена салата", "3,50", "300", ""],
["", "beleni-domati-s-katk", "Белени домати с катък", "4,20", "400", ""],
["", "kapreze", "Капрезе", "4,90", "360", ""],
["", "czezar", "Цезар", "4,90", "350", ""],
["", "domashno-marinovano-czveklo-s-kiseli-krastavichki-orekhi-i-czedeno-mlyako", "Домашно мариновано цвекло с кисели краставички, орехи и цедено мляко", "3,50", "350", ""],
["", "kartofena-salata", "Картофена салата", "3,50", "350", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "450", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "200", ""]

            ],

            "Топли предястия": [
                ["", "przheni-presni-kartofki", "Пържени пресни картофки", "2,10", "300", ""],
["", "przheni-presni-kartofki-ss-sirene", "Пържени пресни картофки със сирене", "2,10", "350", ""],
["", "domashni-pikantni-przheni-kartofki", "Домашни пикантни пържени картофки", "2,80", "300", ""],
["", "sotirani-chesnovi-kartofi-na-tigan-s-maslo-presen-kopr-i-kurkuma", "Сотирани чеснови картофи на тиган с масло, пресен копър и куркума", "2,80", "300", ""],
["", "pileshki-flejki-s-kornflejks-i-mlechen-dip", "Пилешки флейки с корнфлейкс и млечен дип", "4,20", "250", ""],
["", "pileshki-khapki-s-filiran-badem-i-mlechen-dip", "Пилешки хапки с филиран бадем и млечен дип", "5,60", "250", ""],
["", "khrupkavi-topeni-sirencza-s-domashno-borovinkovo-sladko", "Хрупкави топени сиренца с домашно боровинково сладко", "4,20", "200", ""],
["", "sirene-na-plocha-s-med-i-orekhi", "Сирене на плоча с мед и орехи", "3,50", "200", ""],
["", "kashkaval-pane-s-rukola-i-smokinovo-sladko", "Кашкавал пане с рукола и смокиново сладко", "4,90", "200", ""],
["", "patladzhan-s-pushen-kashkaval-i-sirene-na-peshh", "Патладжан с пушен кашкавал и сирене на пещ", "4,90", "300", ""],
["", "zelenchuczi-na-skara-s-pesto-sos", "Зеленчуци на скара с песто сос", "4,20", "250", ""],
["", "pileshki-drobcheta-s-maslo-i-kashkaval", "Пилешки дробчета с масло и кашкавал", "3,50", "250", ""],
["", "przheni-pileshki-krilcza", "Пържени пилешки крилца", "4,20", "400", ""],
["", "svinski-mrvki-na-tigan-s-presen-luk", "Свински мръвки на тиган с пресен лук", "7,70", "400", ""],
["", "zapecheni-brokoli-ss-sirena", "Запечени броколи със сирена", "4,20", "350", ""],
["", "teleshki-ezik-s-gbi-i-chips-ot-luk", "Телешки език с гъби и чипс от лук", "5,60", "250", ""],
["", "przheni-kalmari-s-chesnov-sos", "Пържени калмари с чеснов сос", "8,40", "250", ""],
["", "teleshko-srcze-s-bekon-i-gbi", "Телешко сърце с бекон и гъби", "4,90", "300", ""],
["", "pateshki-srcza-na-plocha", "Патешки сърца на плоча", "4,90", "250", ""]

            ],

            "Разядки, брускети и бургери": [
                ["", "tirokafteri", "Тирокафтери", "2,80", "150", ""],
["", "katk", "Катък", "2,80", "150", ""],
["", "domashno-kopolu-s-koze-sirene", "Домашно кьополу с козе сирене", "2,80", "150", ""],
["", "patladzhanena-razyadka-s-feta-sirene-i-presen-luk", "Патладжанена разядка с фета сирене и пресен лук", "2,80", "150", ""],
["", "brusketi-proshuto-i-gbi", "Брускети прошуто и гъби", "4,20", "", ""],
["", "brusketi-somga-i-krema-sirene", "Брускети сьомга и крема сирене", "4,90", "", ""],
["", "brusketi-klasiko", "Брускети класико", "2,80", "", ""],
["", "burger-s-teleshko-kyufte", "Бургер  с телешко кюфте", "4,90", "400", ""],
["", "burger-s-khrupkavo-pileshko", "Бургер с хрупкаво пилешко", "4,90", "400", ""],
["", "burger-ss-svinsko-kyufte", "Бургер със свинско кюфте", "4,90", "400", ""]

            ],

            "pasta": [
                ["", "pasta-ss-sos-ot-sirena", "Паста със сос от сирена", "5,60", "350", ""],
["", "pasta-karbonara", "Паста Карбонара", "5,60", "350", ""],
["", "pasta-boloneze-s-parmezan", "Паста Болонезе  с пармезан", "5,60", "350", ""],
["", "pasta-s-krekhko-teleshko-bonfile-mlechna-smetana-i-parmezan", "Паста с крехко телешко бонфиле, млечна сметана и пармезан", "9,10", "400", ""]

            ],

            "risotto": [
                ["", "rizoto-primavera", "Ризото Примавера", "4,90", "400", ""],
["", "rizoto-s-pile-parmezan-i-asperzhi", "Ризото с пиле, пармезан и аспержи", "5,60", "400", ""],
["", "rizoto-s-gorski-gbi-tryufelov-zekhtin-i-parmezan", "Ризото с горски гъби, трюфелов зехтин и пармезан", "5,60", "400", ""],
["", "rizoto-s-pushena-somga-presen-kopr-i-limon", "Ризото с пушена сьомга, пресен копър и лимон", "6,30", "400", ""]

            ],

            "Ястия с пилешко месо": [
                ["", "pileshki-kscheta-ss-smetanovo-gorchichen-sos-i-sotirani-kartofki", "Пилешки късчета със сметаново горчичен сос и сотирани картофки", "5,60", "400", ""],
["", "pileshki-file-s-parmezan-i-sos-pesto-garnirani-ss-svezha-salata", "Пилешки филе с пармезан и сос песто, гарнирани със свежа салата", "6,30", "400", ""],
["", "pileshko-file-s-medeno-limonen-sos-i-machkani-kartofi-s-maslo-spanak-i-chesn", "Пилешко филе с медено лимонен сос и мачкани картофи с масло, спанак и чесън", "6,30", "400", ""],
["", "pileshki-shishcheta-s-przheni-kartofi-salata-kolslo-i-limonov-sos", "Пилешки шишчета с пържени картофи, салата Колсло и лимонов сос", "4,90", "400", ""],
["", "pileshko-file-ss-susheni-domati-i-sino-sirene", "Пилешко филе със сушени домати и синьо сирене", "6,30", "400", ""],
["", "pileshhko-file-s-manatarki-i-smetana-na-peshh", "Пилещко филе с манатарки и сметана на пещ", "6,30", "400", ""]

            ],

            "Ястия със свинско месо": [
                ["", "svinski-dzholan-ss-sotirani-kartofi-na-peshh", "Свински джолан със сотирани картофи на пещ", "7,70", "650", ""],
["", "svinski-rebra-na-skara-s-machkan-bob", "Свински ребра на скара с мачкан боб", "6,30", "500", ""],
["", "svinski-kareta-s-chedr-kartofeno-pyure-s-filadelfiya-i-zelena-salata", "Свински карета с чедър, картофено пюре с филаделфия и зелена салата", "6,30", "400", ""],
["", "svinski-shishcheta-s-przheni-kartofi-i-salata-kolslo", "Свински шишчета с пържени картофи и салата колсло", "4,90", "400", ""],
["", "svinski-stekcheta-s-gben-sos", "Свински стекчета с гъбен сос", "6,30", "500", ""],
["", "svinski-vrat-po-lovdzhijski", "Свински врат по ловджийски", "7,00", "500", ""]

            ],

            "Ястия с телешко месо": [
                ["", "teleshko-bon-file", "Телешко бон филе", "11,20", "400", ""],
["", "teleshki-medaloni-s-pushen-sos", "Телешки медальони с пушен сос", "11,20", "400", ""]

            ],

            "Ястия с риба": [
                ["", "pstrva-s-czitrusi", "Пъстърва с цитруси", "7,70", "400", ""],
["", "panirano-file-ot-khek", "Панирано филе от Хек", "6,30", "350", ""]

            ],

            "grill": [
                ["", "teleshko-kyufte", "Телешко кюфте", "1,40", "100", ""],
["", "domashno-svinsko-kyufte", "Домашно  свинско кюфте", "0,70", "80", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "200", ""],
["", "domashen-sudzhuk", "Домашен суджук", "5,60", "200", ""],
["", "svinska-panseta", "Свинска пансета", "5,60", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "svinski-rebra", "Свински ребра", "6,30", "450", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "120", ""],
["", "agneshko-kyufte", "Агнешко кюфте", "1,40", "100", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "", ""],
["", "margarita-s-moczarela-i-presen-bosilek", "Маргарита с моцарела и пресен босилек", "4,90", "", ""],
["", "proshuto", "Прошуто", "4,90", "", ""],
["", "proshuto-krudo", "Прошуто Крудо", "6,30", "", ""],
["", "peperoni", "Пеперони", "5,60", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "6,30", "", ""],
["", "fungi-proshuto", "Фунги Прошуто", "5,60", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "6,30", "", ""],
["", "meksiko", "Мексико", "5,60", "", ""],
["", "napoli", "Наполи", "6,30", "", ""],
["", "bianka", "Бианка", "6,30", "", ""],
["", "maska", "Маска", "7,00", "", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle-ss-sladoled", "Шоколадово суфле със сладолед", "2,80", "150", ""],
["", "frenska-selska-torta", "Френска селска торта", "2,10", "150", ""],
["", "domashna-biskvitena-torta-s-maskarpone", "Домашна бисквитена торта с маскарпоне", "2,80", "150", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "2,10", "", ""],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "2,10", "", ""],
["", "picza-nutela-s-banan", "Пица Нутела с банан", "3,50", "", ""]

            ]
        }', 
        'slug' => 'diverso',
        'business_name' => 'Diverso',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2704',
        'address' => 'ж.к. Еленово 1',
        'address_additional' => '',
        'coords_x' => '42.0020699',
        'coords_y' => '23.1051001',
        'phone' => '+359879043259',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "sredizemnomorska-pasta-salata", "Средиземноморска паста салата", "4,90", "350", ""],
["", "salata-czezar-s-pileshko", "Салата Цезар с пилешко", "5,60", "350", ""],
["", "salata-chivokado", "Салата Чивокадо", "5,60", "350", ""],
["", "salata-vitamina", "Салата Витамина", "4,90", "350", ""],
["", "salata-kinoa", "Салата киноа", "4,90", "350", ""],
["", "salata-tuna", "Салата Туна", "5,60", "350", ""],
["", "salata-s-pushena-somga", "Салата с пушена сьомга", "5,60", "350", ""]

            ],

            "Антипасти": [
                ["", "birena-nadenichka-servirana-s-dip-ot-gorchicza-s-kiseli-krastavichki", "Бирена наденичка сервирана с дип от горчица с кисели краставички", "3,50", "200", ""],
["", "domashno-prigotveni-panirani-prchiczi-moczarela-roots", "Домашно приготвени панирани пръчици моцарела Roots", "3,50", "200", ""],
["", "miks-brusketi", "Микс брускети", "2,80", "", ""],
["", "antipasti-klasiko", "Антипасти Класико", "4,90", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "2,80", "200", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "5,60", "", ""],
["", "kaprichoza", "Капричоза", "6,30", "", ""],
["", "pikantina", "Пикантина", "6,30", "", ""],
["", "proshuto-klasiko", "Прошуто Класико", "6,30", "", ""],
["", "kapersi-i-anshoa", "Каперси и аншоа", "6,30", "", ""],
["", "picza-lokale", "Пица Локале", "6,30", "", ""],
["", "kalabreze", "Калабрезе", "6,30", "", ""],
["", "marinara", "Маринара", "4,90", "", ""],
["", "polo-klasiko", "Поло Класико", "6,30", "", ""],
["", "festa-di-karne", "Феста ди Карне", "7,00", "", ""]

            ],

            "desserts": [
                ["", "domashen-shokoladov-mus-roots", "Домашен шоколадов мус Roots", "2,10", "100", ""],
["", "yog--hun", "Yog & Hun", "2,10", "150", ""],
["", "domashen-chijzkejk-roots", "Домашен чийзкейк Roots", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'roots',
        'business_name' => 'Roots',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Антим 1',
        'address_additional' => '',
        'coords_x' => '42.0206099',
        'coords_y' => '23.1011063',
        'phone' => '+359877553655',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "svinsko-shkembe", "Свинско шкембе", "1,40", "", ""],
["", "teleshko-shkembe", "Телешко шкембе", "1,40", "", ""],
["", "pacha", "Пача", "1,40", "", ""],
["", "tarator", "Таратор", "0,70", "", ""],
["", "krem-supa-ot-chervena-leshha", "Крем супа от червена леща", "1,40", "", ""],
["", "dzholan-chorba", "Джолан чорба", "1,40", "", ""],
["", "pile-s-grakh", "Пиле с грах", "2,80", "", ""],
["", "kyufteta-po-chirpanski", "Кюфтета по Чирпански", "2,80", "", ""],
["", "zadusheno-svinsko-kontrafile-v-gben-sos-i-topla-garnitura", "Задушено свинско контрафиле в гъбен сос и топла гарнитура", "3,50", "", ""],
["", "taliateli-s-pileshko-i-smetana", "Талиатели с пилешко и сметана", "2,80", "", ""],
["", "pile-makabi", "Пиле Макаби", "2,80", "", ""],
["", "shareni-kyufteta-s-garnitura", "Шарени кюфтета с гарнитура", "2,80", "", ""],
["", "svinsko-pecheno-s-garnitura", "Свинско печено с гарнитура", "2,80", "", ""],
["", "zapekanka-s-pileshko", "Запеканка с пилешко", "2,80", "", ""],
["", "pileshko-butche-s-garnitura", "Пилешко бутче с гарнитура", "2,80", "", ""],
["", "plneni-chushki-s-yajcze-i-sirene-na-furna", "Пълнени чушки с яйце и сирене на фурна", "2,80", "", ""]

            ],

            "salads": [
                ["", "salata-lozata", "Салата Лозата", "4,20", "600", ""],
["", "salata-ajsberg", "Салата Айсберг", "4,20", "400", ""],
["", "shopska", "Шопска", "2,80", "400", ""],
["", "ovcharska", "Овчарска", "3,50", "550", ""],
["", "selska", "Селска", "2,80", "450", ""],
["", "grczka", "Гръцка", "2,80", "400", ""],
["", "zhtvarska", "Жътварска", "3,50", "400", ""],
["", "salata-tono", "Салата тоно", "3,50", "400", ""],
["", "kapri", "Капри", "3,50", "450", ""],
["", "salata-czezar", "Салата Цезар", "3,50", "450", ""],
["", "redena-ss-sirene", "Редена със сирене", "2,80", "400", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "400", ""],
["", "zele-s-majoneza", "Зеле с майонеза", "2,80", "450", ""],
["", "mlechna", "Млечна", "2,80", "300", ""],
["", "kartofena-s-luk", "Картофена с лук", "2,10", "400", ""],
["", "pecheni-chushki", "Печени чушки", "2,10", "250", ""],
["", "pecheni-chushki-ss-sirene", "Печени чушки със сирене", "2,80", "300", ""],
["", "maslini-s-luk", "Маслини с лук", "2,10", "200", ""],
["", "domati-s-moczarela", "Домати с моцарела", "3,50", "400", ""],
["", "vitaminozna-salata", "Витаминозна салата", "2,80", "400", ""],
["", "czezar-s-ajsberg", "Цезар с айсберг", "4,20", "450", ""],
["", "tabule", "Табуле", "2,80", "", ""]

            ],

            "Сухи мезета": [
                ["", "lukanka", "Луканка", "2,80", "100", ""],
["", "shpek-salam", "Шпек салам", "2,10", "100", ""],
["", "shunka", "Шунка", "2,10", "100", ""],
["", "file-elena", "Филе Елена", "4,20", "100", ""],
["", "banski-starecz", "Бански старец", "2,80", "100", ""],
["", "pastrma", "Пастърма", "4,20", "100", ""],
["", "pushen-bekon", "Пушен бекон", "2,10", "100", ""],
["", "pusheno-file", "Пушено филе", "2,80", "100", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "1,40", "100", ""],
["", "sirene-natyur", "Сирене натюр", "1,40", "100", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "0,70", "350", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "350", ""],
["", "svinsko-shkembe", "Свинско шкембе", "1,40", "350", ""],
["", "teleshko-shkembe", "Телешко шкембе", "1,40", "350", ""],
["", "pacha", "Пача", "1,40", "350", ""]

            ],

            "alaminuti": [
                ["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "350", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,80", "350", ""],
["", "zadusheni-zelenchuczi-s-kashkaval", "Задушени зеленчуци с кашкавал", "2,80", "400", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,10", "400", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "2,10", "400", ""],
["", "rizoto-s-pileshko-meso", "Ризото с пилешко месо", "2,80", "400", ""],
["", "sirene-pane", "Сирене пане", "2,10", "200", ""],
["", "sirene-pane-s-kornflejks", "Сирене пане с корнфлейкс", "2,80", "250", ""],
["", "topeno-sirene-s-kornflejks", "Топено сирене с корнфлейкс", "3,50", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "200", ""],
["", "kashkaval-pane-s-kornflejks", "Кашкавал пане с корнфлейкс", "3,50", "250", ""],
["", "kavrma-v-omlet", "Кавърма в омлет", "3,50", "400", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,10", "250", ""],
["", "gbi-pane", "Гъби пане", "2,80", "300", ""],
["", "gbi-s-topeno-sirene", "Гъби с топено сирене", "3,50", "300", ""],
["", "gyuveche-s-lukanka", "Гювече с луканка", "2,80", "350", ""],
["", "plneni-maslini-pane", "Пълнени маслини пане", "2,80", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "350", ""],
["", "przheni-kartofi-ss-sisrene", "Пържени картофи със сисрене", "1,40", "400", ""],
["", "przheni-kartofi-ss-kashkaval", "Пържени картофи със кашкавал", "2,10", "400", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "kartofi-sote-s-czarevicza", "Картофи соте с царевица", "2,10", "350", ""],
["", "kartofi-sote-s-bekon", "Картофи соте с бекон", "2,80", "350", ""],
["", "kartofi-po-selski", "Картофи по селски", "2,10", "450", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "1,40", "200", ""],
["", "przheno-meso", "Пържено месо", "5,60", "350", ""],
["", "zadusheno-shkembe-s-gbi-i-kashkaval", "Задушено шкембе с гъби и кашкавал", "3,50", "350", ""],
["", "zadusheno-shkembe", "Задушено шкембе", "2,80", "300", ""],
["", "czarevicza-v-maslo", "Царевица в масло", "1,40", "250", ""],
["", "brokoli-s-topeno-sirene-i-smetana", "Броколи с топено сирене и сметана", "2,80", "350", ""],
["", "brokoli-ss-sino-sirene-i-smetana", "Броколи със синьо сирене и сметана", "2,80", "350", ""],
["", "brokoli-pane-300gr0", "Броколи пане (300гр0", "2,10", "", ""],
["", "sirene-pod-kapak", "Сирене под капак", "2,10", "150", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,10", "250", ""],
["", "sirene-po-lovdzhijski", "Сирене по ловджийски", "2,80", "300", ""],
["", "palachinka-ss-sirene", "Палачинка със сирене", "0,70", "", ""],
["", "palachinka-s-shunka-i-kashkaval", "Палачинка с шунка и кашкавал", "1,40", "", ""],
["", "omlet-natyur", "Омлет натюр", "0,70", "120", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "1,40", "150", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "1,40", "150", ""],
["", "omlet-s-shunka", "Омлет с шунка", "1,40", "150", ""],
["", "omlet-s-gbi", "Омлет с гъби", "1,40", "50", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "2,10", "200", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "250", ""],
["", "mish-mash", "Миш-маш", "2,10", "300", ""],
["", "chushka-byurek", "Чушка бюрек", "2,10", "", ""],
["", "agneshki-drebolii", "Агнешки дреболии", "2,80", "350", ""],
["", "topeno-sirene-pane", "Топено сирене пане", "2,80", "", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "2,80", "", ""],
["", "przheni-tikvichki", "Пържени тиквички", "2,80", "", ""],
["", "tikvichki-s-mlyako", "Тиквички с мляко", "2,80", "", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-po-czarski", "Запеканка по Царски", "3,50", "350", ""],
["", "zapekanka-ss-sirene", "Запеканка със сирене", "3,50", "350", ""],
["", "zapekanka-s-pileshko-file", "Запеканка с пилешко филе", "4,20", "350", ""],
["", "zapekanka-ss-zelenchuczi", "Запеканка със зеленчуци", "2,80", "350", ""],
["", "zapekanka-s-bekon", "Запеканка с бекон", "4,20", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,80", "", ""],
["", "kaprichoza", "Капричоза", "3,50", "", ""],
["", "milano", "Милано", "3,50", "", ""],
["", "neapolitana", "Неаполитана", "3,50", "", ""],
["", "klasik", "Класик", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "bekon", "Бекон", "3,50", "", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "", ""],
["", "picza-chetiri-sirena", "Пица четири сирена", "3,50", "", ""]

            ],

            "pasta": [
                ["", "spageti-ss-sirene", "Спагети със сирене", "2,80", "450", ""],
["", "spageti-s-domaten-sos", "Спагети с доматен сос", "2,10", "400", ""],
["", "karbonara", "Карбонара", "3,50", "450", ""],
["", "boloneze", "Болонезе", "3,50", "450", ""],
["", "vegetariana", "Вегетариана", "2,80", "450", ""],
["", "taliateli-s-pileshko-i-smetana", "Талиатели с пилешко и сметана", "2,80", "", ""]

            ],

            "Ястия от пилешко": [
                ["", "pileshki-drob", "Пилешки дроб", "2,10", "350", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "2,80", "400", ""],
["", "pileshki-srcza", "Пилешки сърца", "2,80", "350", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "3,50", "450", ""],
["", "pileshki-srcza-s-gbi", "Пилешки сърца с гъби", "3,50", "400", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "400", ""],
["", "pileshki-khapki", "Пилешки хапки", "2,80", "200", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "3,50", "200", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "3,50", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "3,50", "200", ""],
["", "pileshki-trtki", "Пилешки трътки", "2,10", "400", ""],
["", "pileshko-file-s-gben-sos", "Пилешко филе с гъбен сос", "3,50", "300", ""],
["", "pileshki-kscheta-fantaziya", "Пилешки късчета Фантазия", "4,20", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "3,50", "350", ""],
["", "pileshko-vreteno", "Пилешко вретено", "5,60", "400", ""],
["", "pile-sajmn", "Пиле Саймън", "4,20", "250", ""],
["", "pile-po-zhetvarski", "Пиле по Жетварски", "3,50", "400", ""],
["", "vkusno-pileshko-meze", "Вкусно пилешко мезе", "4,20", "350", ""],
["", "pile-po-grczki", "Пиле по гръцки", "4,20", "350", ""],
["", "pile-rokfor", "Пиле Рокфор", "4,20", "350", ""],
["", "meze-aleks", "Мезе Алекс", "3,50", "350", ""],
["", "pile-po-kralski", "Пиле по кралски", "4,20", "350", ""],
["", "pile-po-moskovski", "Пиле по Московски", "4,20", "350", ""],
["", "pile-v-sladko-kisel-sos", "Пиле в сладко кисел сос", "4,20", "350", ""],
["", "pile-ss-zelenchuczi", "Пиле със зеленчуци", "3,50", "350", ""],
["", "pile-v-palachinka", "Пиле в палачинка", "3,50", "350", ""],
["", "pile-zhulien", "Пиле Жулиен", "4,20", "", ""]

            ],

            "Ястия от свинско": [
                ["", "svinski-drob", "Свински дроб", "2,80", "300", ""],
["", "svinski-drob-po-selski", "Свински дроб по селски", "2,80", "400", ""],
["", "katino-meze", "Катино мезе", "4,20", "350", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kavrma-po-radomirski", "Кавърма по Радомирски", "3,50", "300", ""],
["", "svinski-drebolii", "Свински дреболии", "2,80", "300", ""],
["", "svinski-bekon", "Свински бекон", "3,50", "300", ""],
["", "svinski-rebra", "Свински ребра", "4,20", "400", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "svinska-przhola", "Свинска пържола", "3,50", "200", ""],
["", "svinsko-file-s-gben-sos", "Свинско филе с гъбен сос", "4,20", "300", ""],
["", "ezik-pane", "Език пане", "2,80", "250", ""],
["", "ezik-v-maslo", "Език в масло", "2,80", "200", ""],
["", "shniczel", "Шницел", "1,40", "", ""],
["", "svinski-srcza", "Свински сърца", "2,80", "", ""],
["", "svinsko-bonfile", "Свинско бонфиле", "4,20", "250", ""],
["", "teleshki-ezik", "Телешки език", "4,20", "200", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "4,20", "250", ""]

            ],

            "Сачета": [
                ["", "zelenchukov-sach", "Зеленчуков сач", "3,50", "400", ""],
["", "sache-s-pileshko-file", "Саче с пилешко филе", "4,90", "400", ""],
["", "sache-ss-svinsko-meso", "Саче със свинско месо", "5,60", "400", ""],
["", "vlchi-sach", "Вълчи сач", "9,80", "800", ""]

            ],

            "fish": [
                ["", "skumriya", "Скумрия", "2,80", "350", ""],
["", "khek-przhen", "Хек пържен", "2,80", "200", ""],
["", "khek-pane", "Хек пане", "2,80", "250", ""],
["", "pstrva", "Пъстърва", "4,20", "300", ""],
["", "rolcza-ot-raczi", "Ролца от раци", "1,40", "200", ""],
["", "kalmari-pane", "Калмари пане", "5,60", "250", ""],
["", "czacza", "Цаца", "2,10", "", ""],
["", "tilapiya", "Тилапия", "4,90", "200", ""],
["", "rolcza-ot-raczi-pane", "Ролца от раци пане", "2,10", "250", ""]

            ],

            "sandwiches": [
                ["", "sandvichi-s-kashkaval", "Сандвичи с кашкавал", "1,40", "", ""],
["", "sandvichi-s-kashkaval-i-shunka", "Сандвичи с кашкавал и шунка", "1,40", "", ""],
["", "sandvichi-s-kashkaval-i-lukanka", "Сандвичи с кашкавал и луканка", "1,40", "", ""],
["", "sandvichi-s-yajcze-i-sirene", "Сандвичи с яйце и сирене", "1,40", "", ""],
["", "princzesi-s-kajma-i-kashkaval", "Принцеси с кайма и кашкавал", "1,40", "", ""]

            ],

            "garnish": [
                ["", "studena-garnitura", "Студена гарнитура", "1,40", "200", ""],
["", "topla-garnitura", "Топла гарнитура", "1,40", "200", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "200", ""],
["", "garnitura-przheni-kartofi", "Гарнитура пържени картофи", "0,70", "200", ""],
["", "garnitura-zele-s-morkovi", "Гарнитура зеле с моркови", "0,70", "250", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,10", "", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "1,40", "150", ""],
["", "plodova-salata", "Плодова салата", "4,20", "300", ""],
["", "frenska-selska-torta", "Френска селска торта", "2,10", "", ""],
["", "krem-maskarpone", "Крем Маскарпоне", "1,40", "", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,10", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "1,40", "", ""],
["", "palachinka-ss-shokolad", "Палачинка със шоколад", "1,40", "", ""],
["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "1,40", "", ""],
["", "palachinka-s-med-i-orekhi", "Палачинка с мед и орехи", "1,40", "", ""]

            ],

            "sauces": [
                ["", "soev-sos", "Соев сос", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "", ""],
["", "sladko-kisel-sos", "Сладко-кисел сос", "0,00", "", ""],
["", "sladko-ot-borovinki", "Сладко от боровинки", "0,00", "", ""],
["", "zekhtin", "Зехтин", "0,00", "", ""],
["", "chili-sos", "Чили сос", "0,00", "", ""],
["", "sladko-ot-yagodi", "Сладко от ягоди", "0,00", "", ""]

            ],

            "Пърленки/хляб": [
                ["", "prlenka-s-chesn", "Пърленка с чесън", "1,40", "", ""],
["", "prlenka-s-maslo", "Пърленка с масло", "1,40", "", ""],
["", "prlenka-kombinirana-s-chesn", "Пърленка комбинирана с чесън", "2,10", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""],
["", "prlenka-kombinirana-s-kashkaval", "Пърленка комбинирана с кашкавал", "2,10", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "pechena-filiya", "Печена филия", "0,00", "", ""]

            ],

            "Препакетирани ядки": [
                ["", "sham-fstk", "Шам фъстък", "3,50", "", ""],
["", "biren-fstk", "Бирен фъстък", "1,40", "", ""],
["", "przhen-fstk", "Пържен фъстък", "1,40", "", ""],
["", "soleti", "Солети", "0,00", "", ""],
["", "chips", "Чипс", "1,40", "", ""],
["", "pukanki", "Пуканки", "0,70", "", ""],
["", "badem", "Бадем", "3,50", "", ""],
["", "leshnik", "Лешник", "3,50", "", ""],
["", "kashu", "Кашу", "3,50", "", ""]

            ]
        }', 
        'slug' => 'lozata',
        'business_name' => 'Лозата',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ж.к Еленово 2',
        'address_additional' => '',
        'coords_x' => '42.0023156',
        'coords_y' => '23.1114079',
        'phone' => '+359897820182',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "meatlove-burger", "Meatlove burger", "8,40", "700", ""],
["", "premium-angus-burger", "Premium Angus burger", "5,60", "450", ""],
["", "angus-becon-and-cheese-burger", "Angus becon and Cheese burger", "6,30", "500", ""],
["", "chrispy-chicken-burger", "Chrispy Chicken burger", "3,50", "500", ""],
["", "the-big-pork-burger", "The Big Pork burger", "3,50", "500", ""],
["", "royal-pork-panino", "Royal Pork Panino", "3,50", "400", ""],
["", "caprese-panino", "Caprese Panino", "3,50", "400", ""],
["", "fresh-chorizo-panino", "Fresh Chorizo Panino", "3,50", "400", ""],
["", "hot-burger", "Hot burger", "6,30", "500", ""],
["", "dirty-love-burger", "Dirty Love burger", "6,30", "500", ""],
["", "double-ml-burger", "Double ML burger", "9,10", "700", ""],
["", "veggie-spring-burger", "Veggie Spring burger", "3,50", "500", ""],
["", "corona-corn-panino", "Corona Corn Panino", "3,50", "", ""],
["", "mexican-corona-burger", "Mexican Corona burger", "6,30", "", ""]

            ]
        }', 
        'slug' => 'meat-love',
        'business_name' => 'Meat Love',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Сандо и Петър Китанови 5Б',
        'address_additional' => '',
        'coords_x' => '42.0209405',
        'coords_y' => '23.1012524',
        'phone' => '+359878827644',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "czezar", "Цезар", "5,60", "350", ""],
["", "roka", "Рока", "4,90", "300", ""],
["", "salata-s-riba-ton", "Салата с риба тон", "4,90", "250", ""],
["", "kapreze", "Капрезе", "5,60", "300", ""],
["", "lyatna-salata", "Лятна салата", "4,90", "350", ""],
["", "prima", "Прима", "4,90", "350", ""],
["", "pechen-piper-ss-sirene", "Печен пипер със сирене", "4,90", "300", ""],
["", "chetiri-sirena", "Четири сирена", "5,60", "300", ""],
["", "zelena-salata", "Зелена салата", "2,80", "250", ""],
["", "vitamina", "Витамина", "4,20", "350", ""],
["", "shopska", "Шопска", "4,20", "300", ""],
["", "ovcharska", "Овчарска", "5,60", "500", ""],
["", "selska", "Селска", "4,20", "400", ""],
["", "chorbadzhijska", "Чорбаджийска", "4,90", "350", ""],
["", "grczka", "Гръцка", "4,20", "350", ""],
["", "redena", "Редена", "4,20", "300", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,80", "250", ""],
["", "snezhanka", "Снежанка", "3,50", "250", ""],
["", "salata-s-avokado", "Салата с авокадо", "5,60", "300", ""],
["", "salata-s-pushena-somga", "Салата с пушена сьомга", "6,30", "300", ""],
["", "salata-s-khalumi-i-nakhut", "Салата с халуми и нахут", "5,60", "350", ""],
["", "salata-s-kotidzh", "Салата с котидж", "4,90", "350", ""]

            ],

            "starters": [
                ["", "panirani-sirencza", "Панирани сиренца", "3,50", "200", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "4,20", "200", ""],
["", "panirano-topeno-sirene-s-kornflejks", "Панирано топено сирене с корнфлейкс", "4,90", "200", ""],
["", "paniran-miks", "Паниран микс", "4,90", "200", ""],
["", "pap-pukanki-s-borovinki", "Пап пуканки с боровинки", "4,90", "300", ""],
["", "sirencza-v-bekon", "Сиренца в бекон", "3,50", "200", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,90", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "300", ""],
["", "pileshki-bon-filencza-v-parmezan", "Пилешки бон филенца в пармезан", "6,30", "300", ""],
["", "pileshki-prchiczi-ss-susam", "Пилешки пръчици със сусам", "4,90", "300", ""],
["", "drobcheta", "Дробчета", "3,50", "300", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "300", ""],
["", "pileshki-srcza", "Пилешки сърца", "4,20", "300", ""],
["", "gbi-v-maslo", "Гъби в масло", "4,20", "200", ""],
["", "ezik-v-maslo", "Език в масло", "3,50", "150", ""],
["", "brokoli-v-maslo", "Броколи в масло", "4,20", "250", ""],
["", "brokoli-pane", "Броколи пане", "4,20", "300", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "3,50", "250", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "2,80", "", ""],
["", "panirani-khrupkavi-tikvichki-s-mlechen-sos", "Панирани хрупкави тиквички с млечен сос", "4,20", "250", ""],
["", "zelenchuczi-na-gril", "Зеленчуци на грил", "4,20", "250", ""],
["", "koze-sirene-ss-susheni-kajsii", "Козе сирене със сушени кайсии", "4,90", "200", ""],
["", "patladzhan-kapreze", "Патладжан Капрезе", "5,60", "250", ""],
["", "brokoli-ines", "Броколи Инес", "6,30", "350", ""],
["", "kamember-na-plocha", "Камембер на плоча", "4,90", "200", ""]

            ],

            "Сандвичи и Закуски": [
                ["", "kombiniran-omlet", "Комбиниран омлет", "4,20", "250", ""],
["", "omlet-natyur", "Омлет натюр", "2,10", "150", ""],
["", "omlet-s-gbi", "Омлет с гъби", "2,80", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "170", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "170", ""],
["", "omlet-s-shunka", "Омлет с шунка", "2,80", "170", ""],
["", "yajcza-po-panagyurski", "Яйца по Панагюрски", "3,50", "", ""],
["", "khemendegs", "Хемендегс", "4,20", "350", ""],
["", "sandvich-s-peperoni", "Сандвич с Пеперони", "3,50", "300", ""],
["", "sandvich-s-riba-ton", "Сандвич с риба тон", "3,50", "300", ""],
["", "klub-sandvichi", "Клуб сандвичи", "4,20", "300", ""],
["", "tortila-s-pileshko-file", "Тортила с пилешко филе", "4,90", "350", ""],
["", "teleshki-burger", "Телешки бургер", "4,90", "350", ""],
["", "krispi-chikn-burger", "Криспи чикън бургер", "4,90", "350", ""],
["", "vedzhi-tortila", "Веджи тортила", "4,90", "300", ""]

            ],

            "Брускети": [
                ["", "brusketi-s-domati-i-moczarela", "Брускети с домати и моцарела", "2,80", "100", ""],
["", "brusketi-s-domati-i-maslini", "Брускети с домати и маслини", "2,80", "150", ""],
["", "brusketi-s-pesto-i-maslini", "Брускети с песто и маслини", "2,80", "100", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "chabata", "Чабата", "0,70", "", ""],
["", "brusketi-s-pushena-somga-i-sirene-filadelfiya", "Брускети с пушена сьомга  и сирене филаделфия", "4,20", "150", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "", ""],
["", "salsiche", "Салсиче", "4,20", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "5,60", "", ""],
["", "paparaczi", "Папараци", "5,60", "", ""],
["", "verona", "Верона", "5,60", "", ""],
["", "pikante", "Пиканте", "4,90", "", ""],
["", "peperoni", "Пеперони", "4,90", "", ""],
["", "karbonara", "Карбонара", "4,90", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "5,60", "", ""],
["", "gracziya", "Грация", "5,60", "", ""],
["", "tonno", "Тонно", "4,90", "", ""],
["", "stella-di-mare", "Стелла ди Маре", "5,60", "", ""],
["", "pollo", "Полло", "4,90", "", ""],
["", "kalczone", "Калцоне", "4,90", "", ""],
["", "san-siro", "Сан Сиро", "5,60", "", ""],
["", "ekzotiko", "Екзотико", "4,20", "", ""],
["", "bbq", "BBQ", "5,60", "", ""],
["", "bianka", "Бианка", "5,60", "", ""],
["", "detska", "Детска", "4,20", "", ""]

            ],

            "Паста и Ризото": [
                ["", "rizoto-s-pileshko-i-zelenchuczi", "Ризото с пилешко и зеленчуци", "4,20", "350", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "5,60", "300", ""],
["", "rizoto-s-pile-i-sino-sirene", "Ризото с пиле и синьо сирене", "4,90", "300", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "350", ""],
["", "spageti-melvina", "Спагети Мелвина", "4,90", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "5,60", "350", ""],
["", "spageti-parma", "Спагети Парма", "5,60", "350", ""],
["", "taliateli-s-pile-i-zelenchuczi", "Талиатели с пиле и зеленчуци", "5,60", "350", ""],
["", "taliateli-s-pushena-somga", "Талиатели с пушена сьомга", "7,00", "350", ""],
["", "taliateli-dzhenoveze", "Талиатели Дженовезе", "5,60", "350", ""],
["", "rizoto-s-gorski-gbi", "Ризото с горски гъби", "4,90", "350", ""],
["", "ravioli-ss-spanak-i-rikota", "Равиоли със спанак  и рикота", "5,60", "300", ""],
["", "ravioli-ss-sirena", "Равиоли със сирена", "5,60", "300", ""]

            ],

            "Ястия с пилешко": [
                ["", "pile-eliz", "Пиле Елиз", "6,30", "400", ""],
["", "pile-zhulien", "Пиле Жулиен", "6,30", "350", ""],
["", "pile-marite", "Пиле Марите", "6,30", "350", ""],
["", "pile-kri", "Пиле Къри", "6,30", "350", ""],
["", "pap-kscheta", "Пап късчета", "6,30", "350", ""],
["", "pile-v-chesnov-sos", "Пиле в чеснов сос", "6,30", "350", ""],
["", "medaloni-s-topeno-sirene", "Медальони с топено сирене", "6,30", "350", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "6,30", "350", ""],
["", "pile-s-moczarela-i-provansalski-bilki", "Пиле с моцарела и провансалски билки", "6,30", "300", ""],
["", "pile-teriyaki", "Пиле Терияки", "6,30", "350", ""],
["", "pile-v-sladko-kisel-sos", "Пиле в сладко-кисел сос", "6,30", "350", ""],
["", "pile-po-italianski", "Пиле по италиански", "6,30", "350", ""],
["", "pile-po-meksikanski", "Пиле по мексикански", "6,30", "350", ""],
["", "pileshko-file-s-estragonov-sos", "Пилешко филе с естрагонов сос", "6,30", "350", ""]

            ],

            "Ястия със свинско и телешко": [
                ["", "svinska-pleshka", "Свинска плешка", "7,00", "350", ""],
["", "svinski-kotlet", "Свински котлет", "7,00", "350", ""],
["", "svinski-dzholan", "Свински джолан", "7,00", "400", ""],
["", "teleshki-stek-s-gbi-i-sotirani-zelenchuczi", "Телешки стек с гъби и сотирани зеленчуци", "14,00", "350", ""],
["", "teleshki-stek-s-pepr-sos", "Телешки стек с пепър сос", "14,00", "350", ""],
["", "teleshki-stek-s-provansalski-bilki", "Телешки стек с провансалски билки", "14,00", "300", ""],
["", "kareta-v-pepr-sos", "Карета в Пепър сос", "7,00", "350", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "4,90", "300", ""],
["", "file-sent-etien", "Филе Сент Етиен", "7,00", "350", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "7,00", "350", ""],
["", "svinsko-bon-file-s-grejvi-sos", "Свинско бон филе с грейви сос", "7,00", "350", ""]

            ],

            "Картофи": [
                ["", "klasik", "Класик", "2,10", "180", ""],
["", "klasik-ss-sirene", "Класик със сирене", "2,80", "230", ""],
["", "noazeti", "Ноазети", "2,80", "180", ""],
["", "pikantni", "Пикантни", "2,80", "180", ""],
["", "zhulien", "Жулиен", "2,10", "180", ""],
["", "selski", "Селски", "2,10", "180", ""],
["", "sote", "Соте", "2,80", "180", ""],
["", "klasik-s-bekon-i-vegeta", "Класик с бекон и вегета", "2,80", "230", ""],
["", "zapecheni-kartofi-s-gbi-i-kashkaval", "Запечени картофи с гъби и кашкавал", "5,60", "400", ""],
["", "zapecheni-kartofi-s-shunka-i-smetana", "Запечени картофи с шунка и сметана", "5,60", "400", ""],
["", "zapecheni-kartofi-s-3-vida-sirena", "Запечени картофи с 3 вида сирена", "5,60", "400", ""]

            ],

            "Риба и Морски дарове": [
                ["", "miks-ot-morski-darove", "Микс от морски дарове", "9,80", "200", ""],
["", "panirani-kalmari", "Панирани калмари", "7,00", "250", ""],
["", "lavrak-na-skara", "Лаврак на скара", "9,80", "350", ""],
["", "kalmari-ss-sladko-chili", "Калмари със сладко чили", "9,80", "250", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "7,00", "300", ""],
["", "file-ot-skumriya", "Филе от скумрия", "4,90", "250", ""],
["", "somga-s-ravioli", "Сьомга с равиоли", "10,50", "250", ""],
["", "somga-ss-svezha-salata-s-nakhut", "Сьомга със свежа салата с нахут", "10,50", "250", ""]

            ],

            "Грил": [
                ["", "pileshka-przhola", "Пилешка пържола", "6,30", "350", ""],
["", "pileshka-tabakera", "Пилешка табакера", "6,30", "350", ""],
["", "pileshki-karencza", "Пилешки каренца", "6,30", "350", ""],
["", "karnacheta", "Карначета", "4,90", "300", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,80", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,80", "", ""],
["", "svinski-rebrcza-ss-sos-barbekyu", "Свински ребърца със сос Барбекю", "7,00", "350", ""],
["", "yastie-za-dvama", "Ястие за двама", "16,10", "800", ""],
["", "svinska-przhola", "Свинска пържола", "7,00", "300", ""],
["", "teleshki-kyufteta", "Телешки кюфтета", "4,90", "300", ""]

            ],

            "sachs": [
                ["", "pileshki-sach", "Пилешки сач", "10,50", "350", ""],
["", "svinski-sach", "Свински сач", "11,90", "350", ""],
["", "kombiniran-sach", "Комбиниран сач", "11,20", "350", ""],
["", "vlchi-sach", "Вълчи сач", "11,90", "350", ""],
["", "chorbadzhijska-przhenicza-na-sach", "Чорбаджийска пърженица на сач", "11,90", "350", ""]

            ],

            "garnish": [
                ["", "topla-garnitura", "Топла гарнитура", "1,40", "200", ""],
["", "plna-garnitura", "Пълна гарнитура", "2,10", "250", ""],
["", "domati", "Домати", "0,70", "100", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "zele", "Зеле", "0,70", "100", ""],
["", "oriz", "Ориз", "0,70", "100", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "czarevicza", "Царевица", "0,70", "100", ""]

            ],

            "Пърленки": [
                ["", "chista-prlenka", "Чиста пърленка", "1,40", "120", ""],
["", "prlenka-s-chesn-i-zekhtin", "Пърленка с чесън и зехтин", "2,10", "120", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "150", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,80", "150", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "2,80", "150", ""],
["", "prlenka-s-kashkaval-sirene-i-presni-domati", "Пърленка с кашкавал, сирене и пресни домати", "2,80", "200", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "chili", "Чили", "0,00", "50", ""],
["", "chesnov", "Чеснов", "0,00", "50", ""],
["", "mlechen", "Млечен", "0,00", "50", ""],
["", "roma", "Рома", "0,00", "50", ""],
["", "diablo", "Диабло", "0,00", "50", ""],
["", "siczialiana", "Сициалиана", "0,00", "50", ""],
["", "barbekyu", "Барбекю", "0,70", "50", ""],
["", "czezar", "Цезар", "0,70", "50", ""]

            ],

            "desserts": [
                ["", "palachinka-s-shokolad", "Палачинка с шоколад", "2,10", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "2,10", "", ""],
["", "czedeno-kiselo-mlyako", "Цедено кисело мляко", "2,10", "", ""],
["", "krem-bryule", "Крем брюле", "2,10", "", ""],
["", "shokoladovo-sufle-s-techen-czentr", "Шоколадово суфле с течен център", "3,50", "", ""],
["", "frenska-domashna-torta", "Френска домашна торта", "2,80", "", ""],
["", "misu-piczu-maskarpone", "Мису Пицу Маскарпоне", "2,80", "", ""],
["", "krem-karamel", "Крем карамел", "2,10", "", ""]

            ]
        }', 
        'slug' => 'paparaci-bar-grill',
        'business_name' => 'Папараци Бар &amp; Грил',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Райко Даскалов 8',
        'address_additional' => '',
        'coords_x' => '42.02147675',
        'coords_y' => '23.10009384',
        'phone' => '+359884544524',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
        'slug' => 'pile-na-zhar',
        'business_name' => 'Пиле на Жар',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'Пазара',
        'address_additional' => '',
        'coords_x' => '42.015325',
        'coords_y' => '23.097622',
        'phone' => '+359898700725',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "vezuvij", "Везувий", "3,50", "500", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "domati-ss-sirene", "Домати със сирене", "2,80", "350", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "zelena-salata", "Зелена салата", "2,80", "300", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,80", "300", ""],
["", "kapreze", "Капрезе", "4,20", "300", ""],
["", "krastaviczi-s-kopr", "Краставици с копър", "2,80", "350", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "300", ""],
["", "morkovi-ss-sino-sirene", "Моркови със синьо сирене", "3,50", "250", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "550", ""],
["", "pecheni-chushki-ss-sirene", "Печени чушки със сирене", "4,90", "250", ""],
["", "redena-salata-ss-sirene", "Редена салата със сирене", "3,50", "350", ""],
["", "salata-ajsberg", "Салата айсберг", "6,30", "450", ""],
["", "salata-kinoa", "Салата киноа", "6,30", "400", ""],
["", "slata-xs", "Слата XS", "6,30", "550", ""],
["", "czezar", "Цезар", "5,60", "400", ""],
["", "shopska-salata", "Шопска салата", "3,50", "350", ""]

            ],

            "starters": [
                ["", "brokoli-zapecheni-s-topeno-sirene-bekon-i-kashkaval", "Броколи запечени с топено сирене, бекон и кашкавал", "6,30", "300", ""],
["", "brokoli-pane", "Броколи пане", "4,20", "250", ""],
["", "brokoli-ss-sino-sirene", "Броколи със синьо сирене", "4,90", "200", ""],
["", "gbi-v-maslko", "Гъби в маслко", "4,90", "200", ""],
["", "zadusheni-zelenchuczi-s-topeno-sirene-i-parmezan", "Задушени зеленчуци с топено сирене и пармезан", "4,20", "350", ""],
["", "kashkaval-pane-khapki", "Кашкавал пане хапки", "4,90", "200", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "2,80", "300", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "400", ""],
["", "przheni-kartofi-s-kashkaval", "Пържени картофи с кашкавал", "2,80", "450", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "450", ""],
["", "sirene-pane-khapki", "Сирене пане хапки", "4,90", "200", ""],
["", "sotirani-kartofi", "Сотирани картофи", "2,10", "300", ""],
["", "sotirani-kartofi-ss-smetana-i-bekon", "Сотирани картофи със сметана и бекон", "4,20", "", ""],
["", "topeno-sirene-s-kornflejks", "Топено сирене с корнфлейкс", "4,90", "200", ""],
["", "chushki-byurek", "Чушки бюрек", "3,50", "300", ""],
["", "yajcza-na-ochi", "Яйца на очи", "1,40", "", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "250", ""]

            ],

            "soups": [
                ["", "gbena-krem-supa", "Гъбена крем супа", "2,10", "", ""],
["", "zelenchukova-krem-supa", "Зеленчукова крем супа", "2,10", "", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "2,10", "", ""],
["", "kartofena-krem-supa-s-bekon", "Картофена крем супа с бекон", "2,10", "", ""],
["", "lyatna-domatena-krem-supa", "Лятна доматена крем супа", "2,10", "", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "svinsko-shkembe", "Свинско шкембе", "2,10", "", ""],
["", "tarator", "Таратор", "1,40", "", ""]

            ],

            "Сирена": [
                ["", "zapechno-sirene-s-med-i-orekhi-vv-folio", "Запечно сирене с мед и орехи във фолио", "4,20", "150", ""],
["", "sirene-po-lovdzhijski", "Сирене по ловджийски", "4,20", "300", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "", ""],
["", "sirene-s-bilki-vv-folio", "Сирене с билки във фолио", "4,20", "150", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-xs", "Запеканка XS", "4,90", "500", ""],
["", "zapekanka-s-pusheno-file", "Запеканка с пушено филе", "4,20", "450", ""],
["", "zapekanka-ss-sirene", "Запеканка със сирене", "4,20", "450", ""]

            ],

            "pasta": [
                ["", "xs", "XS", "4,90", "450", ""],
["", "boloneze", "Болонезе", "3,50", "450", ""],
["", "vegetariana", "Вегетариана", "3,50", "400", ""],
["", "karbonara", "Карбонара", "4,20", "400", ""]

            ],

            "Ястия с пилешко": [
                ["", "pile-po-italianski", "Пиле по италиански", "4,90", "500", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "4,20", "200", ""],
["", "pileshki-dobcheta-po-selski", "Пилешки добчета по селски", "4,90", "400", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "3,50", "250", ""],
["", "pileshki-krilcza-ss-soev-sos", "Пилешки крилца със соев сос", "3,50", "300", ""],
["", "pileshki-kscheta-s-gbi-i-kashkaval", "Пилешки късчета с гъби и кашкавал", "5,60", "450", ""],
["", "pileshki-srcza", "Пилешки сърца", "3,50", "250", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,90", "250", ""],
["", "pileshki-khapki-s-kornflejks-i-susam", "Пилешки хапки с корнфлейкс и сусам", "4,90", "350", ""],
["", "pileshko-vreteno", "Пилешко вретено", "4,90", "400", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""],
["", "pileshko-shishche-s-bekon", "Пилешко шишче с бекон", "2,80", "100", ""],
["", "pleshki-kscheta-v-sos-bearnez", "Пълешки късчета в сос беарнез", "4,90", "450", ""]

            ],

            "Ястия със свинско": [
                ["", "kyufte", "Kюфте", "0,70", "70", ""],
["", "dska-ot-svinsko", "Дъска от свинско", "18,20", "600", ""],
["", "zadusheno-svinsko-shkembe", "Задушено свинско шкембе", "4,20", "350", ""],
["", "zapechen-bekon-plnen-s-kashkaval", "Запечен бекон пълнен с кашкавал", "1,40", "200", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "svinska-vratna-przhola-na-skara", "Свинска вратна пържола на скара", "4,90", "200", ""],
["", "svinska-vratna-przhola-na-tigan", "Свинска вратна пържола на тиган", "4,90", "200", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "3,50", "300", ""],
["", "svinski-ezik-v-maslko", "Свински език в маслко", "4,90", "200", ""],
["", "svinski-ezik-pane", "Свински език пане", "4,90", "250", ""],
["", "svinski-rebra-na-skara", "Свински ребра на скара", "7,70", "500", ""],
["", "svinsko-bon-file", "Свинско бон филе", "7,00", "250", ""],
["", "svinsko-meso-po-selski", "Свинско месо по селски", "7,00", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""]

            ],

            "fish": [
                ["", "czacza", "Цаца", "2,80", "250", ""]

            ],

            "risotto": [
                ["", "rizoto-s-pileshko-i-zelenchuczi", "Ризото с пилешко и зеленчуци", "4,90", "400", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,80", "400", ""]

            ],

            "sandwiches": [
                ["", "klub-sandvich", "Клуб сандвич", "3,50", "", ""],
["", "princzesa", "Принцеса", "2,10", "", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "1,40", "", ""],
["", "sandvich-s-kashkaval-i-lukanka", "Сандвич с кашкавал и луканка", "2,10", "", ""],
["", "sandvich-s-kashkaval-i-shunka", "Сандвич с кашкавал и шунка", "2,10", "", ""]

            ],

            "garnish": [
                ["", "kombinirana", "Комбинирана", "2,10", "250", ""],
["", "lyuti-chushki", "Люти чушки", "0,00", "", ""],
["", "topla-garnitura", "Топла гарнитура", "1,40", "200", ""]

            ],

            "bread": [
                ["", "prepechena-filiya", "Препечена филия", "0,00", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "palachinak", "Палачинак", "2,10", "", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "", ""]

            ]
        }', 
        'slug' => 'bar-and-dinner-xs',
        'business_name' => 'Bar and Dinner XS',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'Ул. Тодор александров 58 A',
        'address_additional' => '',
        'coords_x' => '42.016576',
        'coords_y' => '23.09344',
        'phone' => '+359895556676',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "svezhi-salatki", "Свежи салатки", "7,00", "300", ""],
["", "vitaminozna-salata", "Витаминозна салата", "4,90", "350", ""],
["", "parmezanova-koshnicza", "Пармезанова кошница", "7,00", "350", ""],
["", "italianski-ktk", "Италиански кътък", "5,60", "350", ""],
["", "tabule", "Табуле", "6,30", "300", ""],
["", "salata-czezar-s-pile", "Салата Цезар с пиле", "6,30", "300", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "7,00", "300", ""],
["", "salata-kobo", "Салата Кобо", "6,30", "350", ""],
["", "salata-kapreze", "Салата Капрезе", "6,30", "300", ""],
["", "zhtvarska-salata", "Жътварска салата", "4,90", "400", ""],
["", "rodopska", "Родопска", "4,20", "400", ""],
["", "shopska-salata", "Шопска салата", "4,20", "400", ""],
["", "redena-salata-ss-sirene", "Редена салата със сирене", "4,90", "350", ""],
["", "grczka-salata", "Гръцка салата", "5,60", "400", ""]

            ],

            "Топли предястия": [
                ["", "miks-sirena-s-khrupkava-korichka-i-borovinkovo-sladko", "Микс сирена с хрупкава коричка и боровинково сладко", "7,00", "200", ""],
["", "panirani-khapki", "Панирани хапки", "4,90", "200", ""],
["", "kartofki", "Картофки", "2,80", "300", ""],
["", "brokoli", "Броколи", "5,60", "300", ""],
["", "przheni-kartofki", "Пържени картофки", "2,80", "300", ""],
["", "panirani-topeni-sirena", "Панирани топени сирена", "6,30", "200", ""],
["", "tikvichki-i-patladzhan-pane-s-dzadziki", "Тиквички и патладжан пане с дзадзики", "6,30", "350", ""],
["", "zapecheno-sirene-s-med-i-orekhi-vrkhu-czitrusovo-kanape", "Запечено сирене с мед и орехи върху цитрусово канапе", "5,60", "200", ""],
["", "zadusheno-svinsko-shkembe", "Задушено свинско шкембе", "7,70", "300", ""],
["", "manatarki-v-maslo-i-chesn", "Манатарки в масло и чесън", "8,40", "200", ""],
["", "pileshki-zhulieni-ss-sos-4-sirena", "Пилешки жулиени със сос 4 сирена", "6,30", "320", ""],
["", "pileshki-zhulieni", "Пилешки жулиени", "7,00", "200", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,90", "300", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "4,20", "", ""],
["", "svinski-drobcheta", "Свински дробчета", "4,20", "", ""],
["", "ezik", "Език", "7,70", "200", ""]

            ],

            "Закуски": [
                ["", "klub-sandvich-ss-svinsko", "Клуб сандвич със свинско", "4,90", "400", ""],
["", "brkani-yajcza", "Бъркани яйца", "2,80", "", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,80", "", ""],
["", "klub-sandvich-s-pileshko", "Клуб сандвич с пилешко", "4,90", "400", ""],
["", "topl-sandvich", "Топъл сандвич", "3,50", "", ""]

            ],

            "Брускети": [
                ["", "domateno-konkase-maslini-i-zekhtin", "Доматено конкасе, маслини и зехтин", "3,50", "", ""],
["", "proshuto-i-sos-kholandez", "Прошуто и сос холандез", "4,20", "", ""],
["", "domateno-konkase-moczarela-i-svezho-pesto", "Доматено конкасе, моцарела и свежо песто", "5,60", "", ""],
["", "pushena-somga-i-maskarpone-ss-svezhi-podpravki", "Пушена сьомга и маскарпоне със свежи подправки", "4,90", "", ""],
["", "grilovana-tikvichka-i-filadelfiya-mus", "Грилована тиквичка и филаделфия мус", "4,20", "", ""],
["", "tri-vida-razyadki", "Три вида разядки", "4,20", "", ""],
["", "prlenka", "Пърленка", "2,10", "", ""]

            ],

            "risotto": [
                ["", "rizoto-s-pile-zelenchuczi-i-smetana", "Ризото с пиле, зеленчуци и сметана", "5,60", "300", ""],
["", "rizoto-s-manatarki-zekhtin-i-chesn", "Ризото с манатарки, зехтин и чесън", "7,00", "300", ""],
["", "rizoto-s-miks-ot-sirena", "Ризото с микс от сирена", "6,30", "300", ""],
["", "zhlto-rizoto-ss-stafidi-i-pile", "Жълто ризото със стафиди и пиле", "5,60", "300", ""]

            ],

            "Паста, талиатели и тортелини": [
                ["", "pasta-boloneze", "Паста Болонезе", "4,90", "300", ""],
["", "taliateli-afredo", "Талиатели Афредо", "6,30", "430", ""],
["", "pasta-karbonara", "Паста Карбонара", "4,90", "300", ""],
["", "tortelini-s-bekon-i-smetana", "Тортелини с бекон и сметана", "5,60", "300", ""],
["", "taliatele-ss-spanak-rokfor-i-chips-bekon", "Талиателе със спанак, рокфор и чипс бекон", "5,60", "350", ""]

            ],

            "maindishes": [
                ["", "pileshko-file-s-rokfor-smetana-i-sotirani-karofi", "Пилешко филе с рокфор, сметана и сотирани карофи", "7,70", "250", ""],
["", "katino-meze", "Катино мезе", "8,40", "400", ""],
["", "makedonska-pastrmanliya-s-pileshko", "Македонска пастърманлия с пилешко", "7,00", "350", ""],
["", "pileshko-file-ss-spanak-smetana-i-kratofeni-kroketi", "Пилешко филе със спанак, сметана и кратофени крокети", "7,70", "400", ""],
["", "makedonska-pastrmanliya-ss-svinsko", "Македонска пастърманлия със свинско", "8,40", "350", ""],
["", "sinsko-kontrafile-s-manatarki-pikantni-kartofki-i-svezhi-salatki", "Синско контрафиле с манатарки, пикантни картофки и свежи салатки", "11,20", "400", ""],
["", "svinski-karencza-s-balsamiko-gorchicza-kartofeni-kroketi-i-svezhi-salatki", "Свински каренца с балсамико, горчица, картофени крокети и свежи салатки", "8,40", "400", ""],
["", "rebrcza-na-furna-s-med-i-gorchicza-pikantni-karofki-i-salatki-miks", "Ребърца на фурна с мед и горчица, пикантни карофки и салатки микс", "9,10", "400", ""],
["", "svinski-domashni-kyuftencza-s-kartofena-salata-i-lyutenicza", "Свински домашни кюфтенца с картофена салата и лютеница", "5,60", "", ""],
["", "teleshki-domashni-kyuftencza-v-domatena-salcza-i-moczarela", "Телешки домашни кюфтенца в доматена салца и моцарела", "6,30", "", ""],
["", "rebrcza-na-furna-s-bbq-sos-panirani-lucheni-krgcheta-i-salatki-miks", "Ребърца на фурна с BBQ сос, панирани лучени кръгчета и салатки микс", "10,50", "", ""]

            ],

            "grill": [
                ["", "pileshko-shishche", "Пилешко шишче", "2,80", "100", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "2,80", "100", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "5,60", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "7,00", "250", ""],
["", "svinska-przhola-ot-kontra-file", "Свинска пържола от контра филе", "7,00", "250", ""],
["", "svinski-klczan-sudzhuk", "Свински кълцан суджук", "5,60", "200", ""],
["", "mecha-lapa", "Меча лапа", "4,90", "180", ""]

            ],

            "fish": [
                ["", "kalmari-v-sladko-kisel-sos", "Калмари в сладко кисел сос", "9,10", "250", ""],
["", "pstrva", "Пъстърва", "7,00", "300", ""],
["", "lavrak", "Лаврак", "9,80", "300", ""],
["", "czipura", "Ципура", "9,80", "300", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "7,70", "250", ""]

            ],

            "pizza": [
                ["", "peperoni", "Пеперони", "7,70", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "neapolitana", "Неаполитана", "7,70", "", ""],
["", "pileshka-s-bbq-sauce", "Пилешка с BBQ sauce", "7,70", "", ""],
["", "polo", "Поло", "7,70", "", ""],
["", "pet-sirena", "Пет сирена", "7,70", "", ""],
["", "dyavolo", "Дяволо", "7,70", "", ""],
["", "bejbi-moczarela", "Бейби моцарела", "7,70", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "7,70", "", ""],
["", "rio", "Рио", "9,10", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "detska", "Детска", "7,00", "", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "", ""],
["", "torta-rio", "Торта Рио", "1,40", "", ""],
["", "domashna-torta-s-maskarpone-i-borovinki", "Домашна торта с маскарпоне и боровинки", "3,50", "", ""],
["", "palachinka", "Палачинка", "2,80", "", ""]

            ],

            "lunch": [
                ["", "pile-s-oriz", "Пиле с ориз", "2,80", "", ""],
["", "svinsko-pecheno", "Свинско печено", "3,50", "", ""],
["", "svinski-karencza-s-garnitura", "Свински каренца с гарнитура", "3,50", "", ""],
["", "svinski-karencza-ss-sos-pepr", "Свински каренца със сос Пепър", "3,50", "", ""],
["", "kartofeni-kyufteta-s-garnitura", "Картофени кюфтета с гарнитура", "2,80", "", ""],
["", "rulo-stefani", "Руло Стефани", "3,50", "", ""],
["", "svinsko-s-oriz", "Свинско с ориз", "3,50", "", ""],
["", "svinski-dzholan-s-garnitura", "Свински джолан с гарнитура", "3,50", "", ""],
["", "svisnko-s-oriz-i-zelenchuczi", "Свиснко с ориз и зеленчуци", "4,20", "", ""]

            ]
        }', 
        'slug' => 'restorant-picariya-rio',
        'business_name' => 'Ресторант Пицария Рио',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Димитър Солунски 35',
        'address_additional' => '',
        'coords_x' => '42.0150133',
        'coords_y' => '23.084519',
        'phone' => '+359898432122',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "redena-salata", "Редена салата", "2,10", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "550", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "350", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "450", ""],
["", "vitaminozna-salata", "Витаминозна салата", "2,10", "350", ""],
["", "kartofena-salata", "Картофена салата", "2,10", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "2,80", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "300", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "400", ""],
["", "zelena-salata", "Зелена салата", "2,10", "350", ""],
["", "selska-salata", "Селска салата", "3,50", "", ""],
["", "redena-salata-ss-sirene", "Редена салата със сирене", "2,80", "400", ""],
["", "bobena-salata", "Бобена салата", "2,80", "", ""]

            ],

            "alaminuti": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "400", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "450", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "350", ""],
["", "svinski-drob", "Свински дроб", "3,50", "300", ""],
["", "pileshki-drob", "Пилешки дроб", "3,50", "300", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "350", ""],
["", "pileshki-srcza", "Пилешки сърца", "3,50", "300", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "150", ""],
["", "mish-mash", "Миш-маш", "2,80", "300", ""],
["", "ezik-v-maslo", "Език в масло", "3,50", "150", ""],
["", "tikvichki-s-mlyako", "Тиквички с мляко", "2,80", "300", ""],
["", "pileshki-shniczel", "Пилешки шницел", "2,80", "200", ""],
["", "zadusheno-shkembe", "Задушено шкембе", "3,50", "350", ""],
["", "katino-meze", "Катино мезе", "4,90", "", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "2,80", "", ""],
["", "topeno-sirene", "Топено сирене", "3,50", "", ""],
["", "yajcza-na-ochi", "Яйца на очи", "0,00", "", ""],
["", "pileshki-flejki-ss-susam", "Пилешки флейки със сусам", "3,50", "", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "400", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "400", ""],
["", "teleshki-kurban", "Телешки курбан", "1,40", "", ""],
["", "teleshko-shkembe", "Телешко шкембе", "1,40", "400", ""],
["", "svinska-pacha", "Свинска пача", "1,40", "400", ""],
["", "tarator", "Таратор", "1,40", "400", ""],
["", "svinsko-shkembe", "Свинско шкембе", "1,40", "400", ""],
["", "leshha", "Леща", "1,40", "400", ""],
["", "bob-chorba", "Боб чорба", "1,40", "400", ""],
["", "krem-supa-ot-spanak", "Крем супа от спанак", "1,40", "400", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "1,40", "400", ""],
["", "krem-supa-ot-cherveni-chushki", "Крем супа от червени чушки", "1,40", "400", ""],
["", "krem-supa-ot-brokoli-i-kartofi", "Крем супа от броколи и картофи", "1,40", "", ""],
["", "krem-supa-ot-grakh", "Крем супа от грах", "1,40", "", ""],
["", "krem-supa-ot-chervena-leshha", "Крем супа от червена леща", "1,40", "", ""],
["", "zelenchukova-supa", "Зеленчукова супа", "1,40", "", ""],
["", "ribena-chorba", "Рибена чорба", "1,40", "", ""],
["", "sharen-bob-v-grne", "Шарен боб в гърне", "1,40", "", ""],
["", "agneshki-kurban", "Агнешки курбан", "1,40", "", ""]

            ],

            "grill": [
                ["", "svinsko-kyufte", "Свинско кюфте", "0,70", "70", ""],
["", "svinsko-kebapche", "Свинско кебапче", "0,70", "70", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "3,50", "200", ""],
["", "svinsko-bon-file", "Свинско бон филе", "4,90", "250", ""],
["", "svinsko-tatarsko-kyufte", "Свинско татарско кюфте", "2,10", "", ""],
["", "svinski-sudzhuk", "Свински суджук", "2,80", "200", ""],
["", "svbrska-pileshka-pleskavicza", "Свъбрска пилешка плескавица", "2,10", "200", ""],
["", "teleshko-kyufte", "Телешко кюфте", "0,70", "70", ""],
["", "pileshko-file-przhola", "Пилешко филе пържола", "3,50", "300", ""],
["", "teleshko-bon-file", "Телешко бон филе", "7,00", "250", ""],
["", "teleshki-sudzhuk", "Телешки суджук", "4,20", "200", ""],
["", "teleshka-pleskavicza", "Телешка плескавица", "2,10", "", ""]

            ],

            "Готвено с телешко месо": [
                ["", "teleshko-vareno", "Телешко варено", "3,50", "400", ""],
["", "teleshki-vinen-kebap", "Телешки винен кебап", "3,50", "400", ""],
["", "teleshko-s-kartofi", "Телешко с картофи", "3,50", "400", ""],
["", "teleshko-s-grakh", "Телешко с грах", "3,50", "400", ""],
["", "teleshko-ss-zelen-bob", "Телешко със зелен боб", "3,50", "400", ""],
["", "teleshko-ss-spanak-i-oriz", "Телешко със спанак и ориз", "3,50", "400", ""],
["", "teleshko-po-makedonski", "Телешко по македонски", "3,50", "400", ""],
["", "teleshki-borsh", "Телешки борш", "3,50", "400", ""],
["", "teleshki-gulash", "Телешки гулаш", "3,50", "400", ""],
["", "zadushena-teleshka-glava", "Задушена телешка глава", "4,20", "400", ""],
["", "teleshko-zadusheno", "Телешко задушено", "4,20", "400", ""],
["", "teleshko-po-lovdzhijski", "Телешко по ловджийски", "3,50", "400", ""],
["", "teleshki-gyuvech", "Телешки гювеч", "4,20", "400", ""],
["", "teleshko-ss-zelenchuczi", "Телешко със зеленчуци", "4,20", "400", ""],
["", "teleshka-glava", "Телешка глава", "4,20", "400", ""]

            ],

            "Готвено със свинско месо": [
                ["", "svinski-gyuvech", "Свински гювеч", "3,50", "400", ""],
["", "svinski-gulash", "Свински гулаш", "3,50", "400", ""],
["", "svinsko-s-kartofi", "Свинско с картофи", "3,50", "400", ""],
["", "svinsko-s-bob", "Свинско с боб", "2,80", "400", ""],
["", "svinsko-ss-zelen-bob", "Свинско със зелен боб", "2,80", "400", ""],
["", "svinsko-s-grakh", "Свинско с грах", "2,80", "400", ""],
["", "svinski-vinen-kebap", "Свински винен кебап", "3,50", "400", ""],
["", "svinska-kavrma", "Свинска кавърма", "3,50", "400", ""],
["", "svinski-dzholan-s-kartofi-i-gbi", "Свински джолан с картофи и гъби", "3,50", "400", ""],
["", "zadushena-svinska-przhola-s-garnitura-i-gbi", "Задушена свинска пържола с гарнитура и гъби", "4,20", "400", ""],
["", "svinsko-ss-spanak-i-oriz", "Свинско със спанак и ориз", "3,50", "400", ""],
["", "svinski-kareta-s-gbi", "Свински карета с гъби", "4,20", "400", ""],
["", "svinsko-po-selski", "Свинско по селски", "3,50", "400", ""],
["", "svisnko-s-praz-i-oriz", "Свиснко с праз и ориз", "3,50", "400", ""],
["", "slavyanski-gyuvech-ss-svinsko-meso", "Славянски гювеч със свинско месо", "3,50", "400", ""],
["", "sultan-kebap", "Султан кебап", "3,50", "", ""],
["", "svinski-dzholan-s-oriz-i-zelenchuczi-i-bilkovi-kartofi", "Свински джолан с ориз и зеленчуци и билкови картофи", "3,50", "400", ""],
["", "svinsko-po-lovdzhijski", "Свинско по ловджийски", "3,50", "", ""],
["", "svinsko-shpikovano-s-kartofeno-pyure", "Свинско шпиковано с картофено пюре", "4,20", "", ""],
["", "zadushena-vratna-przhola-s-uedzhis-kartofki", "Задушена вратна пържола с уеджис картофки", "4,20", "", ""],
["", "katino-meze", "Катино мезе", "3,50", "", ""],
["", "svinski-manastirski-gyuvech", "Свински манастирски гювеч", "3,50", "", ""],
["", "zapekanka", "Запеканка", "3,50", "", ""]

            ],

            "Готвено с пилешко месо": [
                ["", "zadushena-pileshka-przhola-s-gben-sos", "Задушена пилешка пържола с гъбен сос", "3,50", "400", ""],
["", "pileshko-file-v-pikanten-sos", "Пилешко филе в пикантен сос", "2,80", "400", ""],
["", "pile-s-oriz-i-spanak", "Пиле с ориз и спанак", "2,80", "400", ""],
["", "pileshko-butche-pecheno", "Пилешко бутче печено", "1,40", "", ""],
["", "pile-s-kartofi", "Пиле с картофи", "2,80", "400", ""],
["", "pile-s-oriz", "Пиле с ориз", "2,80", "400", ""],
["", "pile-slavyanski-gyuvech-s-pileshko-meso", "Пиле славянски гювеч с пилешко месо", "2,80", "400", ""],
["", "pile-ss-zelenchuczi", "Пиле със зеленчуци", "2,80", "400", ""],
["", "pile-ss-zele", "Пиле със зеле", "2,80", "400", ""],
["", "pileshki-kebap", "Пилешки кебап", "2,80", "400", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "3,50", "400", ""],
["", "pile-s-topla-garnitura", "Пиле с топла гарнитура", "2,80", "400", ""],
["", "pile-s-grakh", "Пиле с грах", "2,80", "400", ""],
["", "pileshki-shniczel-s-garnitura", "Пилешки шницел с гарнитура", "3,50", "400", ""],
["", "pile-zhulien", "Пиле Жулиен", "3,50", "400", ""],
["", "pileshka-przhola-s-topeno-sirene-kashkaval-i-garnitura", "Пилешка пържола с топено сирене, кашкавал и гарнитура", "3,50", "400", ""],
["", "pile-s-brokoli-i-smetana", "Пиле с броколи и сметана", "3,50", "400", ""],
["", "pile-po-italiyanski", "Пиле по италиянски", "3,50", "400", ""],
["", "pileshki-flejki-s-gbi-i-topeno-sirene", "Пилешки флейки с гъби и топено сирене", "3,50", "400", ""],
["", "pile-v-palachinka-ss-svezha-salata-i-mlechen-sos", "Пиле в палачинка със свежа салата и млечен сос", "3,50", "400", ""],
["", "zapekanka", "Запеканка", "3,50", "400", ""],
["", "panirana-pileshka-przhola-s-garnitura", "Панирана пилешка пържола с гарнитура", "3,50", "400", ""],
["", "butche-s-topeno-sirene-i-smetana-i-kartofeno-pyure", "Бутче с топено сирене и сметана и картофено пюре", "3,50", "400", ""],
["", "rizoto-s-pile", "Ризото с пиле", "2,80", "400", ""],
["", "pile-po-meksikanski", "Пиле по мексикански", "3,50", "400", ""]

            ],

            "Готвено с агнешко": [
                ["", "agneshka-drob-sarma", "Агнешка дроб сарма", "3,50", "400", ""],
["", "agneshko-pecheno", "Агнешко печено", "6,30", "400", ""],
["", "agneshki-kebap", "Агнешки кебап", "4,20", "400", ""],
["", "agneshko-ss-spanak", "Агнешко със спанак", "4,20", "400", ""]

            ],

            "Готвено с кайма": [
                ["", "musaka", "Мусака", "2,80", "400", ""],
["", "rulo-stefani", "Руло Стефани", "3,50", "", ""],
["", "plneni-chushki-s-kajma-i-oriz", "Пълнени чушки с кайма и ориз", "2,80", "", ""],
["", "kyufteta-po-chirpanski", "Кюфтета по чирпански", "2,80", "", ""],
["", "babini-kyufteta-s-garnitura", "Бабини кюфтета с гарнитура", "2,80", "", ""],
["", "nadenicza-s-garnitura", "Наденица с гарнитура", "3,50", "", ""],
["", "roladini", "Роладини", "3,50", "", ""],
["", "kyufteta-s-byal-sos", "Кюфтета с бял сос", "2,80", "", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "3,50", "", ""],
["", "grczka-musaka", "Гръцка мусака", "3,50", "", ""],
["", "sudzhuk-s-garnitura", "Суджук с гарнитура", "4,20", "", ""],
["", "nadenicza-s-yajcza", "Наденица с яйца", "2,80", "", ""],
["", "sudzhuk-s-yajcza", "Суджук с яйца", "2,80", "", ""]

            ],

            "Рибни деликатеси": [
                ["", "skumriya-na-skara", "Скумрия на скара", "3,50", "300", ""],
["", "pstrva", "Пъстърва", "4,90", "350", ""],
["", "czacza", "Цаца", "2,10", "250", ""],
["", "somga", "Сьомга", "7,70", "", ""],
["", "czipura", "Ципура", "7,70", "", ""],
["", "safrid", "Сафрид", "5,60", "", ""],
["", "kalmari", "Калмари", "6,30", "", ""],
["", "lavrak", "Лаврак", "7,70", "", ""],
["", "gavros", "Гаврос", "5,60", "", ""]

            ],

            "garnish": [
                ["", "domati-i-krastaviczi", "Домати и краставици", "1,40", "", ""],
["", "zele", "Зеле", "0,70", "", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "", ""],
["", "lyutenicza", "Лютеница", "0,00", "", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "", ""],
["", "topla-garnitura", "Топла гарнитура", "1,40", "", ""]

            ],

            "others": [
                ["", "khlyab---filiya", "Хляб - филия", "0,00", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "chetvrt-khlyab", "Четвърт хляб", "0,00", "", ""],
["", "limon", "Лимон", "0,00", "", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,70", "", ""],
["", "makaroni-na-furna", "Макарони на фурна", "0,70", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "", ""],
["", "palachinka", "Палачинка", "1,40", "", ""],
["", "domashna-torta", "Домашна торта", "1,40", "", ""]

            ]
        }', 
        'slug' => 'pri-niki',
        'business_name' => 'При Ники',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул.Чакалица 6',
        'address_additional' => '',
        'coords_x' => '42.016352',
        'coords_y' => '23.095817',
        'phone' => '+359895489977',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "giros-sreden", "Гирос Среден", "2,80", "350", ""],
["", "giros-golyam", "Гирос Голям", "3,50", "450", ""],
["", "giros-byufteki", "Гирос Бюфтеки", "2,80", "400", ""],
["", "giros-lukaniko", "Гирос Луканико", "2,80", "400", ""],
["", "giros-ss-svinsko-shishche", "Гирос със Свинско шишче", "2,10", "350", ""],
["", "giros-ss-pileshko-shishche", "Гирос със Пилешко шишче", "2,10", "350", ""],
["", "porcziya-giros", "Порция гирос", "4,20", "550", ""]

            ],

            "beer": [
                ["", "pirinsko", "Пиринско", "1,40", "500", ""],
["", "shumensko", "Шуменско", "1,40", "500", ""]

            ],

            "drinks": [
                ["", "studen-chaj-san-benedeto", "Студен чай Сан Бенедето", "1,40", "", ""]

            ]
        }', 
        'slug' => 'giros-moli',
        'business_name' => 'Гирос Моли',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Свобода 26',
        'address_additional' => '',
        'coords_x' => '42.01004204',
        'coords_y' => '23.10435884',
        'phone' => '+359877839179',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "kapreze", "Капрезе", "4,90", "300", ""],
["", "czezar", "Цезар", "6,30", "300", ""],
["", "zelena-salata-s-riba-ton-i-avokado", "Зелена салата с риба тон и авокадо", "6,30", "300", ""],
["", "grczka-salata", "Гръцка салата", "6,30", "300", ""],
["", "tabule", "Табуле", "5,60", "280", ""]

            ],

            "starters": [
                ["", "plneni-tikvichki-s-domati-i-luk", "Пълнени тиквички с домати и лук", "4,90", "350", ""],
["", "domat-s-yajcze-i-sirene", "Домат с яйце и сирене", "4,90", "300", ""],
["", "avokado-s-riba-ton-i-zelena-chushka", "Авокадо с риба тон и зелена чушка", "6,30", "300", ""],
["", "czitrusova-somga", "Цитрусова сьомга", "7,70", "150", ""],
["", "kalmari-pane", "Калмари пане", "6,30", "200", ""],
["", "grilovana-tikvichka-s-krema-sirene", "Грилована тиквичка с крема сирене", "4,90", "250", ""]

            ],

            "Брускети": [
                ["", "domati-s-moczarela-i-pesto", "Домати с моцарела и песто", "4,90", "", ""],
["", "pechena-chushka-anshoa-i-parmezan", "Печена чушка, аншоа и пармезан", "5,60", "", ""],
["", "filadelfiya-s-domat-i-proshuto", "Филаделфия с домат и прошуто", "4,90", "", ""],
["", "brusketi-miks", "Брускети микс", "6,30", "", ""]

            ],

            "Хапки": [
                ["", "topeni-prchiczi-s-kornflejks-i-sladko-ot-borovinki", "Топени пръчици с корнфлейкс и сладко от боровинки", "5,60", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "5,60", "250", ""],
["", "kashkaval-pane---khapki", "Кашкавал пане - хапки", "4,90", "250", ""],
["", "sirene-pane---khapki", "Сирене пане - хапки", "4,90", "250", ""],
["", "khrupkavi-brokoli-s-kornflejks", "Хрупкави броколи с корнфлейкс", "4,90", "250", ""]

            ],

            "pasta": [
                ["", "taliateli-karbonara", "Талиатели Карбонара", "5,60", "400", ""],
["", "taliateli-rustikana-400gr", "Талиатели Рустикана (400гр", "5,60", "", ""],
["", "penne-arabiata-s-peperoni", "Пенне арабиата с пеперони", "4,90", "400", ""]

            ],

            "risotto": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,90", "400", ""],
["", "rizoto-s-gorski-gbi", "Ризото с горски гъби", "4,90", "400", ""],
["", "rizoto-s-pile", "Ризото с пиле", "5,60", "400", ""]

            ],

            "burgers": [
                ["", "teleshki-burger-s-kashkaval", "Телешки бургер с кашкавал", "5,60", "400", ""],
["", "teleshki-burger-s-bekon-i-yajcze", "Телешки бургер с бекон и яйце", "6,30", "400", ""],
["", "teleshki-dvoen-burger", "Телешки двоен бургер", "7,70", "400", ""]

            ],

            "Клуб сандвич": [
                ["", "shunka-i-kashkaval", "Шунка и кашкавал", "4,90", "350", ""],
["", "lukanka-kashkaval-i-yajcze", "Луканка, кашкавал и яйце", "4,90", "350", ""],
["", "pileshko-file-kashkaval-i-yajcze", "Пилешко филе, кашкавал и яйце", "5,60", "350", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "", ""],
["", "palachinki-po-izbor", "Палачинки по избор", "2,10", "", ""]

            ]
        }', 
        'slug' => 'the-white',
        'business_name' => 'The White',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Димитър Талев 2',
        'address_additional' => '',
        'coords_x' => '42.0208878',
        'coords_y' => '23.1002455',
        'phone' => '+359896797372',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "friday": [
                ["", "dzholan-s-oriz-i-zelenchuczi", "Джолан с ориз и зеленчуци", "3,50", "400", ""],
["", "musaka", "Мусака", "2,80", "350", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "3,50", "350", ""],
["", "pile-zhulien", "Пиле жулиен", "3,50", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "2,80", "350", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "2,80", "350", ""],
["", "tarator", "Таратор", "1,40", "400", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "400", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "400", ""],
["", "kurban-chorba", "Курбан чорба", "2,10", "400", ""],
["", "pileshko-butche-s-oriz", "Пилешко бутче с ориз", "2,80", "350", ""]

            ]
        }', 
        'slug' => 'pri-kiro',
        'business_name' => 'При Киро',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Менча Кърничева 31',
        'address_additional' => '',
        'coords_x' => '42.01589099',
        'coords_y' => '23.09003199',
        'phone' => '+359898373819',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "pileshka-supa", "Пилешка супа", "2,10", "", ""],
["", "krem-supa-ot-somga-i-skaridi", "Крем супа от сьомга и скариди", "2,80", "", ""],
["", "spanachena-supa", "Спаначена супа", "2,10", "", ""],
["", "tarator", "Таратор", "2,10", "", ""],
["", "gaspacho", "Гаспачо", "2,10", "", ""],
["", "kashkaval-pane-s-domati-i-krastaviczi", "Кашкавал пане с домати и краставици", "3,50", "", ""],
["", "kyuftencza-na-plocha-s-przheni-kartofi-i-lyutenicza", "Кюфтенца на плоча с пържени картофи и лютеница", "3,50", "", ""],
["", "pileshki-kscheta-s-kornflejsk-mlechen-sos-i-domashen-chips", "Пилешки късчета с корнфлейск, млечен сос и домашен чипс", "3,50", "", ""],
["", "zhlto-rizo-s-pile-i-gbi", "Жълто ризо с пиле и гъби", "5,60", "", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "", ""],
["", "biskvitena-torta-s-maskarpone", "Бисквитена торта с маскарпоне", "3,50", "", ""],
["", "chijzkejk-ss-sladko-ot-borovinki", "Чийзкейк със сладко от боровинки", "2,80", "", ""],
["", "svezha-dinya", "Свежа диня", "2,10", "", ""]

            ],

            "salads": [
                ["", "tradiczionna-salata", "Традиционна салата", "4,20", "400", ""],
["", "salata-czezar", "Салата Цезар", "6,30", "350", ""],
["", "salata-burata", "Салата Бурата", "7,00", "400", ""],
["", "miks-ot-salati-s-koze-sirene-prezident-cheri-domati-bademisezonni-plodove-i-malinov-drsing", "Микс от салати с козе сирене Президент, чери домати, бадеми,сезонни плодове и малинов дрсинг", "7,70", "350", ""],
["", "salata-s-ajsberg-i-marulya", "Салата с айсберг и маруля", "5,60", "350", ""],
["", "miks-ot-svezhi-salati-s-krusha-sino-sirene-i-karamelizirani-orekhi", "Микс от свежи салати с круша, синьо сирене и карамелизирани орехи", "5,60", "400", ""],
["", "salata-s-kinoa-sirene-pechena-chushka-tikvichka-rukola-i-medeno-gorchichen-dresing", "Салата с киноа, сирене, печена чушка, тиквичка, рукола и медено горчичен дресинг", "6,30", "400", ""],
["", "domati-s-pryasno-bivolsko-sirene-marinovan-patladzhan-i-orekhi", "Домати с прясно биволско сирене, маринован патладжан и орехи", "6,30", "350", ""],
["", "beleni-domati-s-moczarela-i-bosilek", "Белени домати с моцарела и босилек", "4,90", "350", ""],
["", "miks-zeleni-salati-s-patladzhan-zapecheno-sirene-khalumi-i-orekhi", "Mикс зелени салати с патладжан, запечено сирене Халуми и орехи", "6,30", "350", ""],
["", "miks-zeleni-salati-ss-skaridi-avokado-morkovi-i-czitrusov-dresing", "Микс зелени салати със скариди, авокадо, моркови и цитрусов дресинг", "7,70", "300", ""],
["", "zelena-salata-s-pikantna-riba-ton-domati-krotoni-i-bosilekov-dresing", "Зелена салата с пикантна риба тон, домати, кротони и босилеков дресинг", "5,60", "350", ""]

            ],

            "soups": [
                ["", "pileshka-bistra-supa", "Пилешка бистра супа", "2,10", "300", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "2,10", "300", ""],
["", "tarator", "Таратор", "2,10", "300", ""],
["", "krem-supa-ot-somga-i-skaridi", "Крем супа от сьомга и скариди", "2,80", "300", ""]

            ],

            "starters": [
                ["", "brusketa-s-domati-i-maslini-v-marinata-ot-presen-bosilek-rigan-chesn-zekhtin-i-balsamiko", "Брускета с домати и маслини в марината от пресен босилек, риган, чесън, зехтин и балсамико", "4,90", "300", ""],
["", "brusketa-s-guakamole-i-mus-ot-krema-sirene", "Брускета с гуакамоле и мус от крема сирене", "4,90", "350", ""],
["", "kartofen-chips-s-khimalajska-sol", "Картофен чипс с хималайска сол", "3,50", "200", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "6,30", "250", ""],
["", "pileshki-bon-filencza-s-khrupkava-parmezanova-korichka", "Пилешки бон филенца с хрупкава пармезанова коричка", "6,30", "250", ""],
["", "karpacho-ot-teleshko-bon-file---teleshko-meso-rukola-i-parmezan", "Карпачо от телешко Бон филе - телешко месо, рукола и пармезан", "10,50", "200", ""],
["", "panko-pile-ss-sladko-chili", "Панко пиле със сладко чили", "6,30", "250", ""],
["", "ratatuj-s-koze-sirene-prezident", "Рататуй с козе сирене Президент", "7,70", "350", ""],
["", "brusketa-ss-zapecheno-topeno-sirene-belen-domat-i-aromatni-podpravki", "Брускета със запечено топено сирене, белен домат и ароматни подправки", "5,60", "350", ""],
["", "brusketa-ss-sirene-filadelfiya-i-pushena-somga", "Брускета със сирене Филаделфия и пушена сьомга", "6,30", "200", ""],
["", "panirani-topeni-sirencza-s-kornflejks-i-sladko-ot-borovinki", "Панирани топени сиренца с корнфлейкс и сладко от боровинки", "5,60", "350", ""],
["", "razyadka-ot-maslini-khumus-i-guakamole", "Разядка от маслини, хумус и гуакамоле", "5,60", "300", ""],
["", "zelenchuczi-na-plocha-ss-zapecheno-sirene-khalumi", "Зеленчуци на плоча със запечено сирене Халуми", "6,30", "350", ""]

            ],

            "Яситя AQUA": [
                ["", "somga-teriyaki", "Сьомга Терияки", "13,30", "400", ""],
["", "somga-s-korichka-ot-aromatni-podpravki", "Сьомга с коричка от ароматни подправки", "13,30", "400", ""],
["", "oktopod-s-bosilkov-dresing", "Октопод с босилков дресинг", "11,90", "150", ""],
["", "byala-riba-s-khrupkava-bademova-korichka", "Бяла риба с хрупкава бадемова коричка", "9,10", "400", ""],
["", "file-ot-pstrva-na-plocha-garnirana-vrkhu-zeleno-rizoto", "Филе от пъстърва на плоча гарнирана върху зелено ризото", "9,10", "400", ""],
["", "beleni-skaridi-ss-sos-kri", "Белени скариди със сос къри", "10,50", "150", ""],
["", "panirani-kalmari-s-mlechen-chesnov-sos", "Панирани калмари с млечен чеснов сос", "7,70", "250", ""],
["", "plnen-kalmar-s-raznovidnost-ot-sirena-i-morski-darove-i-kapersi", "Пълнен калмар с разновидност от сирена и морски дарове и каперси", "10,50", "300", ""],
["", "file-ot-lavrak-ss-zalivka-ot-svezhi-zelenchuczi", "Филе от лаврак със заливка от свежи зеленчуци", "11,90", "300", ""],
["", "somga-ss-soba-nudli-i-salcza-ot-zeleni-gradinski-podpravki", "Сьомга със соба нудли и салца от зелени градински подправки", "13,30", "400", ""]

            ],

            "Основни ястия": [
                ["", "plneno-svinsko-bon-file-s-bekon-chedr-emental-presni-podpravki-i-kartofeno-pyure-s-pesto", "Пълнено свинско бон филе с бекон, чедър, ементал, пресни подправки и картофено пюре с песто", "9,80", "400", ""],
["", "shniczel-po-vienski-ot-teleshko-bon-file-s-garnitura-ot-przheni-kartofi", "Шницел по Виенски от телешко бон филе с гарнитура от пържени картофи", "11,90", "400", ""],
["", "svinsko-bon-file-s-manatarki", "Свинско бон филе с манатарки", "9,10", "400", ""],
["", "khrupkavo-pileshko-file-plneno-s-topeno-sirene", "Хрупкаво пилешко филе пълнено с топено сирене", "9,10", "400", ""],
["", "pateshko-magre-s-kartofeno-pyure", "Патешко магре с картофено пюре", "11,90", "400", ""],
["", "pileshko-file-v-kokosovo-mlyako-i-kri-s-chili-rizoto", "Пилешко филе в кокосово мляко и къри с чили ризото", "9,10", "400", ""],
["", "pileshko-file-s-irlandski-chedr-i-sotirani-kartofi", "Пилешко филе с ирландски чедър и сотирани картофи", "7,70", "400", ""],
["", "svinski-bon-filencza", "Свински бон филенца", "7,70", "400", ""],
["", "stek-ot-teleshko-bon-file-ss-zadusheni-zelenchuczi", "Стек от телешко бон филе със задушени зеленчуци", "14,00", "400", ""]

            ],

            "Ястия на плоча и тиган": [
                ["", "teleshko-bon-file", "Телешко бон филе", "12,60", "200", ""],
["", "svinski-bon-file", "Свински бон филе", "8,40", "200", ""],
["", "kyuftencza-blek-angs", "Кюфтенца Блек Ангъс", "5,60", "200", ""],
["", "svinski-kotlet-s-przheni-kartofki-i-barbekyu-sos", "Свински Котлет с пържени картофки и барбекю сос", "11,20", "400", ""],
["", "marinovana-przhola-ot-svinski-vrat", "Маринована пържола от свински врат", "7,70", "250", ""],
["", "przhola-ot-pileshki-grdi-na-plocha", "Пържола от пилешки гърди на плоча", "6,30", "250", ""],
["", "marinovani-svinski-rebrcza-s-bbq-sos", "Мариновани свински ребърца с bbq сос", "9,10", "400", ""]

            ],

            "Прясно приготвена паста": [
                ["", "pasta-alfredo-s-pile", "Паста Aлфредо с пиле", "6,30", "400", ""],
["", "pasta-arabiata", "Паста Арабиата", "4,90", "300", ""],
["", "pasta-boloneze", "Паста Болонезе", "5,60", "400", ""],
["", "pasta-s-pushena-somga-kapersi-cheri-domati-i-limonova-kora", "Паста с пушена сьомга, каперси, чери домати и лимонова кора", "6,30", "400", ""],
["", "pasta-karbonara-s-bekon", "Паста Карбонара с бекон", "6,30", "400", ""],
["", "pasta-s-pileshko-meso-i-gbi-s-domateno-konkase", "Паста с пилешко месо и гъби с доматено конкасе", "6,30", "400", ""],
["", "pasta-s-tikvichka-maskarpone-i-proshuto", "Паста с тиквичка, маскарпоне и прошуто", "6,30", "400", ""],
["", "pasta-s-teleshko-meso-i-tryufel-pasta", "Паста с телешко месо и трюфел паста", "7,00", "400", ""]

            ],

            "risotto": [
                ["", "rizoto-s-teleshko-meso-i-gbi", "Ризото с телешко месо и гъби", "6,30", "350", ""],
["", "shareno-rizoto-s-khrupkavo-file-ot-byala-riba", "Шарено ризото с хрупкаво филе от бяла риба", "5,60", "350", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "6,30", "350", ""],
["", "zhlto-rizoto-s-pileshko-meso-i-gbi", "Жълто ризото с пилешко месо и гъби", "5,60", "350", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,90", "350", ""],
["", "rizoto-s-gorski-gbi", "Ризото с горски гъби", "4,90", "350", ""],
["", "rizoto-alfredo-s-pile", "Ризото Алфредо с пиле", "6,30", "350", ""],
["", "rizoto-aida", "Ризото Аида", "6,30", "350", ""]

            ],

            "Закуски": [
                ["", "klub-sandvich-s-pusheno-file", "Клуб сандвич с пушено филе", "4,90", "400", ""],
["", "klub-sandvich-s-lukanka", "Клуб сандвич с луканка", "4,90", "400", ""],
["", "klub-sandvich-s-pileshko-bon-file", "Клуб сандвич с пилешко бон филе", "4,90", "400", ""],
["", "omlet-s-kashkaval-i-sirene", "Омлет с кашкавал и сирене", "4,20", "300", ""]

            ],

            "Гурме закуски": [
                ["", "krvavata-meri-burger", "Кървавата Мери бургер", "6,30", "500", ""],
["", "maslinova-fokacha-s-khrupkav-bekon-miks-salati-i-mus-ot-koze-sirene", "Маслинова фокача с хрупкав бекон, микс салати и мус от козе сирене", "5,60", "400", ""],
["", "klasicheski-teleshki-burger-black-angus-s-dobavka-ementaler-ili-bekon", "Класически телешки бургер Black Angus с добавка ементалер или бекон", "7,00", "530", ""],
["", "domashen-burger", "Домашен бургер", "5,60", "500", ""],
["", "meksikanska-kesadiya-s-pileshko-file-chushka-moczarela-kashkaval-bekon-koriandr-i-salcza-piko-de-gajo", "Мексиканска кесадия с пилешко филе, чушка, моцарела, кашкавал, бекон, кориандър и салца пико де гайо", "6,30", "500", ""],
["", "tortila-s-pileshko-moczarela-chedr-i-zelena-salata", "Тортила с пилешко, моцарела, чедър и зелена салата", "6,30", "400", ""]

            ],

            "Прясно изпечен хляб": [
                ["", "maslinova-fokacha", "Маслинова фокача", "1,40", "250", ""]

            ],

            "garnish": [
                ["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""],
["", "sotirani-kartofi-v-maslo", "Сотирани картофи в масло", "2,80", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "czarevicza-v-maslo-i-kopr", "Царевица в масло и копър", "2,10", "200", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "2,10", "200", ""],
["", "zelena-salata", "Зелена салата", "1,40", "200", ""],
["", "zele-i-morkovi", "Зеле и моркови", "2,10", "200", ""]

            ],

            "desserts": [
                ["", "domashen-chijzkejk", "Домашен Чийзкейк", "3,50", "180", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "200", ""],
["", "biskvitena-torta-s-maskarpone", "Бисквитена торта с маскарпоне", "3,50", "180", ""],
["", "avtentichna-frenska-selska-torta", "Автентична Френска селска торта", "3,50", "200", ""],
["", "frenski-sladoled-nuga", "Френски сладолед Нуга", "2,80", "120", ""]

            ],

            "Суши ястия": [
                ["", "maki-tempura-ss-somga-i-rolcza-ot-raczi", "Маки темпура със сьомга и ролца от раци", "7,00", "240", ""]

            ],

            "Суши сетове": [
                ["", "khosomaki-set---variant-1", "Хосомаки сет - вариант 1", "7,00", "", ""],
["", "khosomaki-set---variant-2", "Хосомаки сет - вариант 2", "7,00", "", ""],
["", "khosomaki-set---variant-3", "Хосомаки сет - вариант 3", "7,00", "", ""],
["", "uramaki-set---variant-1", "Урамаки сет - вариант 1", "8,40", "", ""],
["", "uramaki-set---variant-2", "Урамаки сет - вариант 2", "8,40", "", ""],
["", "uramaki-set---variant-3", "Урамаки сет - вариант 3", "8,40", "", ""],
["", "filadelfiya-kombo-set", "Филаделфия комбо сет", "16,10", "", ""],
["", "kombo-set---variant-1", "Комбо сет - вариант 1", "16,10", "", ""],
["", "kombo-set---variant-2", "Комбо сет - вариант 2", "16,10", "", ""],
["", "kombo-set---variant-3", "Комбо сет - вариант 3", "16,10", "", ""],
["", "kombo-set-speczialen---variant-1", "Комбо сет специален - вариант 1", "18,20", "", ""],
["", "kombo-set-speczialen---variant-2", "Комбо сет специален - вариант 2", "18,20", "", ""],
["", "kombo-set-speczialen---variant-3", "Комбо сет специален - вариант 3", "18,20", "", ""],
["", "kombo-set-maks---variant-1", "Комбо сет макс - вариант 1", "22,40", "", ""],
["", "kombo-set-maks---variant-2", "Комбо сет макс - вариант 2", "22,40", "", ""],
["", "kombo-set-maks---variant-3", "Комбо сет макс - вариант 3", "22,40", "", ""]

            ],

            "Хосомаки": [
                ["", "khosomaki-riba-ton", "Хосомаки Риба тон", "4,90", "", ""],
["", "khosomaki-somga", "Хосомаки Сьомга", "4,90", "", ""],
["", "khosomaki-pushena-somga-i-krastvicza", "Хосомаки Пушена сьомга и краствица", "4,90", "", ""],
["", "khosomaki-filadelfiya-i-krastavicza", "Хосомаки Филаделфия и краставица", "4,20", "", ""],
["", "khosomaki-vega", "Хосомаки Вега", "4,20", "", ""],
["", "khosomaki-vulkano", "Хосомаки Вулкано", "4,90", "", ""],
["", "khosomaki-kinoa-filadelfiya", "Хосомаки Киноа филаделфия", "4,90", "", ""],
["", "khosomaki-kinoa-pushena-somga", "Хосомаки Киноа пушена сьомга", "4,90", "", ""],
["", "khosomaki-spajsi-somga", "Хосомаки Спайси Сьомга", "4,90", "", ""],
["", "khosomaki-filadelfiya-i-avokado", "Хосомаки Филаделфия и авокадо", "4,90", "", ""]

            ],

            "Урамаки": [
                ["", "uramaki-kaliforniya-s-avokado-i-somga", "Урамаки Калифорния с авокадо и сьомга", "5,60", "", ""],
["", "uramaki-pileshki-czezar", "Урамаки Пилешки Цезар", "5,60", "", ""],
["", "uramaki-riba-ton-s-filadelfiya-i-krastavichka", "Урамаки Риба тон с филаделфия и краставичка", "5,60", "", ""],
["", "uramaki-filadelfiya-pushena-somga-i-khrupkava-tempura", "Урамаки Филаделфия, пушена сьомга и хрупкава темпура", "5,60", "", ""],
["", "uramaki-nyu-jork", "Урамаки Ню Йорк", "5,60", "", ""],
["", "uramaki-oktopod", "Урамаки Октопод", "5,60", "", ""],
["", "uramaki-filadelfiya", "Урамаки Филаделфия", "5,60", "", ""]

            ],

            "Нигири": [
                ["", "nigiri-somga", "Нигири Сьомга", "2,80", "", ""],
["", "nigiri-ton", "Нигири Тон", "2,80", "", ""],
["", "nigiri-pushena-somga-i-filadelfiya", "Нигири Пушена сьомга и филаделфия", "2,80", "", ""],
["", "nigiri-skarida", "Нигири Скарида", "2,80", "", ""],
["", "nigiri-uakame-i-mus-filadelfiya-s-meso-ot-rak", "Нигири Уакаме и мус филаделфия с месо от рак", "2,80", "", ""],
["", "nigiri-zapechena-somga", "Нигири Запечена сьомга", "2,80", "", ""]

            ],

            "Специални рула": [
                ["", "rejnbou", "Рейнбоу", "6,30", "", ""],
["", "zapechena-somga", "Запечена сьомга", "6,30", "", ""],
["", "ekzotik", "Екзотик", "6,30", "", ""],
["", "fresh-rol", "Фреш рол", "4,90", "", ""],
["", "bushido", "Бушидо", "6,30", "", ""],
["", "teriyaki", "Терияки", "6,30", "", ""],
["", "sakura-maki", "Сакура маки", "6,30", "", ""],
["", "futomaki-khrupkava-skarida", "Футомаки хрупкава скарида", "5,60", "", ""]

            ]
        }', 
        'slug' => 'frame-bar-and-food',
        'business_name' => 'Frame bar and Food',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Тракия 2',
        'address_additional' => '',
        'coords_x' => '42.02119127',
        'coords_y' => '23.10091513',
        'phone' => '+359899117373',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "przheni-filijki-ss-sirene-i-sladko", "Пържени филийки със сирене и сладко", "2,80", "", ""],
["", "omlet-s-bekon", "Омлет с бекон", "2,80", "300", ""],
["", "brkani-yajcza-dip-ot-avokado-bekon-i-prepecheni-filijki", "Бъркани яйца дип от авокадо, бекон и препечени филийки", "4,20", "300", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,80", "", ""]

            ],

            "salads": [
                ["", "salata-ss-zapecheno-koze-sirene-i-bademi", "Салата със запечено козе сирене и бадеми", "7,70", "300", ""],
["", "miks-ot-svezhi-salati-proshuto-i-bademi", "Микс от свежи салати, прошуто и бадеми", "7,00", "250", ""],
["", "pstra-zelena-salata-s-maslini-i-sirene-feta", "Пъстра зелена салата с маслини и сирене фета", "4,20", "300", ""],
["", "salata-kakheti", "Салата Кахети", "4,20", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "300", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "300", ""],
["", "zelena-salata-s-kinoa-domati-i-krastaviczi", "Зелена салата с киноа, домати и краставици", "4,20", "250", ""],
["", "salata-s-morkovi-krastaviczi-rukola-i-parmezan", "Салата с моркови, краставици, рукола и пармезан", "3,50", "300", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "350", ""],
["", "bejbi-salata-s-grilovani-tikvichki-cheri-domati-i-feta", "Бейби салата с гриловани тиквички, чери домати и фета", "7,00", "300", ""],
["", "bejbi-spanak-s-avokado", "Бейби спанак с авокадо", "7,00", "250", ""],
["", "sezonen-domat-vrkhu-dip-ot-patladzhan-i-chushka-s-natrosheno-sirene", "Сезонен домат върху дип от патладжан и чушка, с натрошено сирене", "4,20", "350", ""],
["", "kombo-salata", "Комбо салата", "3,50", "300", ""]

            ],

            "Брускети": [
                ["", "brusketi-s-avokado-krema-sirene-i-domati-i-presen-luk", "Брускети с авокадо, крема сирене и домати и пресен лук", "4,90", "250", ""],
["", "brusketi-s-domati-maslini-i-bosilek", "Брускети с домати, маслини и босилек", "3,50", "250", ""]

            ],

            "starters": [
                ["", "pileshki-filencza-s-ananas-chedr-salaviya-i-khamon", "Пилешки филенца с ананас, чедър, салавия и хамон", "7,70", "200", ""],
["", "mini-kyuftencza-s-barbekyu-sos", "Мини кюфтенца с барбекю сос", "5,60", "300", ""],
["", "zapechno-koze-sirene-ss-sladko-ot-smokini-i-orekhi", "Запечно козе сирене със сладко от смокини и орехи", "12,60", "200", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "8,40", "250", ""],
["", "khrupkavi-pileshki-khapki-s-mlechen-sos", "Хрупкави пилешки хапки с млечен сос", "4,90", "250", ""],
["", "presen-bekon-na-tigan", "Пресен бекон на тиган", "7,00", "400", ""]

            ],

            "Клуб сандвичи & Бургери": [
                ["", "kralski-burger", "Кралски бургер", "7,70", "450", ""],
["", "klub-sandvich-s-bekon-i-pileshko-file", "Клуб сандвич с бекон и пилешко филе", "5,60", "400", ""],
["", "klub-sandvich-s-yajcze-i-bekon", "Клуб сандвич с яйце и бекон", "4,20", "400", ""],
["", "amerikanski-burger", "Американски бургер", "7,00", "350", ""],
["", "pileshki-burger", "Пилешки бургер", "7,00", "350", ""],
["", "teleshki-burger", "Телешки бургер", "7,00", "350", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "5,60", "350", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "", ""],
["", "gorchicza", "Горчица", "0,00", "", ""],
["", "chili", "Чили", "0,70", "", ""],
["", "sladko-chili", "Сладко Чили", "0,00", "", ""],
["", "barbekyu-sos", "Барбекю сос", "0,70", "", ""]

            ],

            "pizza": [
                ["", "picza-chetiri-vkusa", "Пица Четири вкуса", "7,00", "", ""],
["", "picza-gorska", "Пица Горска", "5,60", "", ""],
["", "picza-fantaziya", "Пица Фантазия", "4,90", "", ""],
["", "picza-rimska", "Пица Римска", "5,60", "", ""],
["", "picza-proshuto-rukola-i-cheri-domati", "Пица Прошуто, рукола и чери домати", "8,40", "", ""],
["", "picza-margarita", "Пица Маргарита", "4,90", "", ""],
["", "picza-peperoni", "Пица Пеперони", "6,30", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "5,60", "", ""],
["", "picza-pile", "Пица Пиле", "4,90", "", ""],
["", "picza-shunka-i-gbi", "Пица Шунка и гъби", "5,60", "", ""],
["", "picza-vegetariana", "Пица Вегетариана", "4,90", "", ""],
["", "picza-kuatro-formadzhi", "Пица Куатро Формаджи", "5,60", "", ""],
["", "picza-ludo-pile", "Пица Лудо пиле", "7,00", "", ""],
["", "picza-vlcha", "Пица Вълча", "7,00", "", ""],
["", "picza-bekon-i-sos-pesto", "Пица Бекон и сос песто", "4,90", "", ""],
["", "picza-makedonska", "Пица Македонска", "7,00", "", ""],
["", "picza-largo", "Пица Ларго", "6,30", "", ""],
["", "picza-s-shunka", "Пица с шунка", "4,90", "", ""],
["", "picza-s-shunka-i-czarevicza", "Пица с шунка и царевица", "4,90", "", ""],
["", "picza-smetana-shunka-i-gbi", "Пица Сметана, шунка и гъби", "4,90", "", ""],
["", "picza-mama-mia", "Пица Мама Миа", "8,40", "", ""],
["", "picza-izvnzemna", "Пица Извънземна", "6,30", "", ""]

            ],

            "Прясна паста": [
                ["", "pasta-karbonara", "Паста Карбонара", "5,60", "350", ""],
["", "pasta-boloneze", "Паста Болонезе", "5,60", "350", ""],
["", "pasta-s-pileshko-brokoli-i-sino-sirene", "Паста с пилешко, броколи и синьо сирене", "5,60", "", ""],
["", "pasta-fruti-di-mare", "Паста фрути ди маре", "7,00", "350", ""],
["", "tortelini-ss-spanak-i-rikota-v-sos-alfredo", "Тортелини със спанак и рикота в сос Алфредо", "6,30", "350", ""],
["", "pasta-s-nadenicza-i-gbi-v-domaten-sos", "Паста с наденица и гъби в доматен сос", "5,60", "350", ""]

            ],

            "risotto": [
                ["", "zhlto-rizoto-s-chorizo-i-pileshko-file", "Жълто ризото с чоризо и пилешко филе", "5,60", "300", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,90", "300", ""],
["", "rizoto-ss-spanak-i-bekon", "Ризото със спанак и бекон", "4,90", "300", ""],
["", "rizoto-s-gorski-gbi", "Ризото с горски гъби", "4,90", "300", ""],
["", "rizoto-s-pile-i-stafidi", "Ризото с пиле и стафиди", "6,30", "300", ""]

            ],

            "Основни ястия": [
                ["", "pileshko-file-alfredo", "Пилешко филе Алфредо", "7,00", "350", ""],
["", "svinski-stek-podnesen-s-rizoto-i-maslo-ot-tryufel", "Свински стек поднесен с ризото и масло от трюфел", "7,70", "400", ""],
["", "stek-ot-svinsko-kontra-file-s-pyure-ot-grakh-i-poshirano-yaicze-ot-pdpdk", "Стек от свинско контра филе с пюре от грах и поширано яйце от пъдпъдък", "9,80", "400", ""],
["", "pileshko-file-ss-svezha-salata-i-kartofeno-pyure-s-brokoli", "Пилешко филе със свежа салата и картофено пюре с броколи", "7,70", "350", ""],
["", "file-ot-pstrva-s-miks-ot-zadusheni-zelenchuczi-v-limonov-sos", "Филе от пъстърва с микс от задушени зеленчуци в лимонов сос", "9,10", "350", ""],
["", "file-ot-czipura-s-maslinova-pasta-vrkhu-kanape-ot-grilovani-zelenchuczi", "Филе от ципура с маслинова паста върху канапе от гриловани зеленчуци", "10,50", "350", ""],
["", "khrupkavo-file-s-moczarela", "Хрупкаво филе с моцарела", "7,70", "", ""],
["", "domashni-kyufteta", "Домашни кюфтета", "5,60", "", ""]

            ],

            "Детско Меню": [
                ["", "pileshka-przhola", "Пилешка пържола", "4,20", "250", ""],
["", "panirani-filencza", "Панирани филенца", "5,60", "250", ""],
["", "svinski-karencza-na-tigan", "Свински каренца на тиган", "4,20", "250", ""],
["", "pasta-s-domaten-sos-i-kashkaval", "Паста с доматен сос и кашкавал", "3,50", "250", ""]

            ],

            "Хляб и пърленки": [
                ["", "domashno-khlebche", "Домашно хлебче", "0,70", "", ""],
["", "prlenka-ss-zekhtin-chesn-i-rozmarin", "Пърленка със зехтин, чесън и розмарин", "0,70", "", ""],
["", "prlenka-s-moczarela-i-rozmarin", "Пърленка с моцарела и розмарин", "2,10", "", ""],
["", "prlenka-s-moczarela-sirene-i-rozmarin", "Пърленка с моцарела, сирене и розмарин", "2,80", "", ""],
["", "prlenka-s-domaten-sos-i-pesto", "Пърленка с доматен сос и песто", "1,40", "", ""]

            ],

            "desserts": [
                ["", "semifredo-s-malinovo-kuli", "Семифредо с малиново кули", "2,80", "", ""],
["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "3,50", "400", ""]

            ],

            "Безалкохолни напитки": [
                ["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "mineralna-voda-perrier", "Минерална вода Perrier", "2,10", "330", ""],
["", "naturalen-sok-rauch", "Натурален сок Rauch", "1,40", "250", ""],
["", "redbull", "RedBull", "2,80", "250", ""]

            ]
        }', 
        'slug' => 'largo-s-view',
        'business_name' => 'Largo&#039;s view',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Тодор Александров 2',
        'address_additional' => '',
        'coords_x' => '42.0204943',
        'coords_y' => '23.100065',
        'phone' => '+359897200201',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Италянски сладолед собствено производство": [
                ["", "maskarpone--100-g", "Маскарпоне | 100 g", "0,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "techen-shokolad--100-g", "Течен шоколад | 100 g", "0,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "chijz-kejk--100-g", "Чийз кейк | 100 g", "0,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "jogurt--100-g", "Йогурт | 100 g", "0,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "ppesh--100-g", "Пъпеш | 100 g", "0,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "gorski-plod--100-g", "Горски плод | 100 g", "0,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "snikers--100-g", "Сникерс | 100 g", "0,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "kokos-s-shokolad--100-g", "Кокос с шоколад | 100 g", "0,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"],
["", "menta--100-g", "Мента | 100 g", "0,70", "", "https://images.deliveryhero.io/image/fd-BG/NV/products/0a4a9327837da48a61ebfcbc5e106d9a84ccf019.jpg?width=302"]

            ]
        }', 
        'slug' => 'dolce-spadi',
        'business_name' => 'Dolce Spadi',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'бул. Васил Левски 46',
        'address_additional' => '',
        'coords_x' => '42.0114246',
        'coords_y' => '23.0890594',
        'phone' => '+359897874929',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "portokal", "Портокал", "2,10", "", ""],
["", "grejpfrut", "Грейпфрут", "2,10", "", ""],
["", "limon", "Лимон", "2,80", "300", ""],
["", "dinya", "Диня", "0,70", "400", ""]

            ],

            "Шейкове": [
                ["", "shejk-shokolad", "Шейк Шоколад", "2,10", "", ""],
["", "shejk-banan-i-yagoda", "Шейк Банан и Ягода", "2,80", "", ""],
["", "shejk-miks", "Шейк Микс", "2,10", "250", ""],
["", "shejk-yagoda", "Шейк Ягода", "2,80", "", ""],
["", "shejk-oreo", "Шейк Орео", "2,80", "", ""],
["", "shejk-banan", "Шейк Банан", "2,80", "", ""]

            ],

            "Фрешове микс": [
                ["", "portokal-i-grejpfrut", "Портокал и Грейпфрут", "2,10", "300", ""],
["", "yablka-morkov-i-czveklo", "Ябълка, Морков и Цвекло", "2,10", "300", ""],
["", "yablka-dzhindzhifil-i-morkov", "Ябълка, Джинджифил и Морков", "2,10", "300", ""],
["", "ananas-morkov-i-dzhindzhifil", "Ананас, Морков и Джинджифил", "2,80", "300", ""],
["", "portokal-i-ananas", "Портокал и Ананас", "2,80", "300", ""]

            ],

            "Смути": [
                ["", "kokosov-detoks", "Кокосов детокс", "2,80", "", ""],
["", "ekzotik-lajm", "Екзотик лайм", "2,80", "", ""],
["", "portokalov-krem", "Портокалов крем", "2,80", "", ""],
["", "yagoda-i-banan", "Ягода и Банан", "2,10", "", ""],
["", "yagoda-i-mango", "Ягода и Манго", "2,10", "", ""],
["", "smuti-ss-semena", "Смути със семена", "2,10", "", ""],
["", "shokoladovo-smuti", "Шоколадово смути", "2,10", "", ""],
["", "smuti-s-oveseni-yadki", "Смути с овесени ядки", "2,10", "", ""]

            ],

            "Лимонади": [
                ["", "oranzhada", "Оранжада", "2,10", "", ""],
["", "czitronada", "Цитронада", "2,80", "", ""],
["", "yagoda-i-dinya", "Ягода и Диня", "2,80", "", ""]

            ]
        }', 
        'slug' => 'fresh-bar-blagoevgrad',
        'business_name' => 'Fresh Bar (Благоевград)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Васил Мечкуевски 11',
        'address_additional' => '',
        'coords_x' => '42.0199012',
        'coords_y' => '23.0988478',
        'phone' => '+359887069902',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "grczka", "Гръцка", "4,20", "400", ""],
["", "shopska", "Шопска", "2,80", "300", ""],
["", "ovcharska", "Овчарска", "4,20", "400", ""],
["", "domati-i-krastaviczi-ss-sirene", "Домати и краставици със сирене", "2,80", "300", ""],
["", "snezhanka", "Снежанка", "2,80", "250", ""],
["", "zele-morkovi-i-domati", "Зеле, моркови и домати", "2,80", "", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,80", "350", ""],
["", "bob-s-luk-i-lyutenicza", "Боб с лук и лютеница", "3,50", "350", ""],
["", "kopoolu", "Кьопоолу", "3,50", "250", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "agneshka-supa", "Агнешка супа", "1,40", "", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "", ""],
["", "kurban-chorba", "Курбан чорба", "1,40", "", ""],
["", "teleshko-vareno", "Телешко варено", "2,80", "", ""],
["", "bob", "Боб", "1,40", "", ""],
["", "bob-s-nadenicza", "Боб с наденица", "2,80", "", ""],
["", "zelenchukova-supa", "Зеленчукова супа", "1,40", "", ""]

            ],

            "starters": [
                ["", "sirene-s-med-i-orekhi", "Сирене с мед и орехи", "3,50", "240", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "250", ""],
["", "khapki-sirene", "Хапки сирене", "4,20", "250", ""],
["", "khapki-kashkaval", "Хапки кашкавал", "4,90", "250", ""],
["", "khapki-topeno-sirene", "Хапки топено сирене", "4,90", "250", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,90", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "230", ""],
["", "przheni-kartofi-s-kashkaval", "Пържени картофи с кашкавал", "2,80", "250", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "250", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "250", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "2,80", "300", ""],
["", "tikvichki", "Тиквички", "2,10", "", ""],
["", "tikvichki-s-mlyako", "Тиквички с мляко", "2,80", "", ""],
["", "przhenicza", "Пърженица", "2,80", "", ""]

            ],

            "sandwiches": [
                ["", "tost-s-shunka-i-kashkaval", "Тост с шунка и кашкавал", "2,80", "", ""],
["", "tost-s-pusheno-sirene-i-shunka", "Тост с пушено сирене и шунка", "2,80", "", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "0,70", "", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с  шунка и кашкавал", "1,40", "", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "1,40", "", ""]

            ],

            "Основни ястия": [
                ["", "pile-s-oriz", "Пиле с ориз", "2,80", "", ""],
["", "pileshko-file-s-oriz", "Пилешко филе с ориз", "2,80", "", ""],
["", "pileshki-kebap", "Пилешки кебап", "2,80", "", ""],
["", "pileshko-pecheno-butche", "Пилешко печено бутче", "2,10", "", ""],
["", "svinski-kebap", "Свински кебап", "2,80", "", ""],
["", "przheni-kyufteta-ss-studena-garnitura", "Пържени кюфтета със  студена гарнитура", "2,80", "", ""],
["", "musaka", "Мусака", "2,80", "", ""],
["", "kordon-blo", "Кордон бльо", "7,00", "450", ""],
["", "plneni-pileshki-grdi-monako", "Пълнени пилешки гърди Монако", "7,00", "300", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "200", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "4,90", "250", ""],
["", "pileshko-file-ss-smetana", "Пилешко филе със сметана", "4,90", "250", ""],
["", "pileshki-filencza-ss-susam-pikanten-sos", "Пилешки филенца със сусам (пикантен сос)", "4,90", "300", ""],
["", "pileshki-shniczel", "Пилешки шницел", "3,50", "200", ""],
["", "pileshki-srcza", "Пилешки сърца", "3,50", "200", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "200", ""],
["", "svinsko-po-makedonski", "Свинско  по Македонски", "6,30", "400", ""],
["", "svinska-przhola-s-gbi", "Свинска пържола с гъби", "4,90", "220", ""],
["", "svinsko-file", "Свинско филе", "5,60", "170", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "6,30", "250", ""],
["", "svinski-kareta-s-gbi", "Свински карета с гъби", "5,60", "250", ""],
["", "shniczel-po-vienski", "Шницел по Виенски", "8,40", "350", ""],
["", "svinsko-kyufte", "Свинско кюфте", "0,70", "", ""],
["", "svinsko-kebapche", "Свинско кебапче", "0,70", "", ""],
["", "svinska-przhola-ot-vrat", "Свинска пържола от врат", "4,20", "150", ""],
["", "shniczel-mlyano-meso", "Шницел мляно месо", "2,80", "150", ""],
["", "svinska-kavrma", "Свинска кавърма", "6,30", "300", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,20", "200", ""],
["", "teleshko-ss-zelenchuczi", "Телешко със зеленчуци", "13,30", "400", ""],
["", "tepanyaki", "Тепаняки", "14,70", "300", ""],
["", "teleshko-file-s-gbi", "Телешко филе с гъби", "12,60", "200", ""],
["", "teleshko-zadusheno", "Телешко задушено", "12,60", "200", ""],
["", "ramstek-s-luk", "Рамстек с лук", "12,60", "200", ""],
["", "teleshko-s-brokoli", "Телешко с броколи", "14,00", "300", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "5,60", "250", ""],
["", "pile-s-kartofi", "Пиле с картофи", "2,80", "", ""],
["", "svinsko-s-kartofi", "Свинско с картофи", "2,80", "", ""],
["", "teleshko-s-kartofi", "Телешко с картофи", "2,80", "", ""],
["", "pile-s-grakh", "Пиле с грах", "2,80", "", ""],
["", "svinsko-s-grakh", "Свинско с грах", "2,80", "", ""]

            ],

            "pizza": [
                ["", "vegetariana", "Вегетариана", "4,20", "", ""],
["", "princhipesa", "Принчипеса", "0,00", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "kariola", "Кариола", "5,60", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "6,30", "", ""]

            ],

            "pasta": [
                ["", "spageti-boloneze", "Спагети Болонезе", "3,50", "300", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "300", ""],
["", "spageti-ss-zelenchuczi", "Спагети със зеленчуци", "2,80", "300", ""],
["", "taliateli", "Талиатели", "4,20", "", ""]

            ],

            "Риби": [
                ["", "file-skumriya", "Филе скумрия", "2,80", "200", ""],
["", "khek-pane", "Хек пане", "3,50", "200", ""],
["", "pstrva", "Пъстърва", "6,30", "", ""],
["", "byala-riba-s-orekhi-i-bademi", "Бяла риба с  орехи и бадеми", "5,60", "250", ""],
["", "byala-riba-po-grczki", "Бяла риба по гръцки", "5,60", "200", ""],
["", "czipura", "Ципура", "11,90", "400", ""]

            ],

            "Топли и студени гарнитури": [
                ["", "topla-garnitura", "Топла гарнитура", "1,40", "150", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "250", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "1,40", "", ""],
["", "palachinka-s-med", "Палачинка с мед", "1,40", "", ""],
["", "palachinka-s-sladko", "Палачинка с сладко", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "plodova-salata", "Плодова салата", "2,10", "", ""]

            ],

            "bread": [
                ["", "filiya-khlyab---byal", "Филия хляб - бял", "0,00", "", ""],
["", "filiya-khlyab---cheren", "Филия хляб - черен", "0,00", "", ""],
["", "prlenka-s-maslo", "Пърленка с масло", "1,40", "", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "1,40", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "", ""]

            ],

            "Сос": [
                ["", "ketchup", "Кетчуп", "0,70", "100", ""],
["", "majoneza-100gr0", "Майонеза (100гр0", "0,70", "", ""],
["", "siczilianski", "Сицилиански", "0,70", "100", ""],
["", "bavariya", "Бавария", "0,70", "100", ""],
["", "vinegret", "Винегрет", "1,40", "100", ""],
["", "1000-ostrova", "1000 острова", "0,70", "100", ""]

            ]
        }', 
        'slug' => 'rusalka',
        'business_name' => 'Русалка',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул &quot;Цар Иван Шишман&quot; 2',
        'address_additional' => '',
        'coords_x' => '42.0200631',
        'coords_y' => '23.10064009',
        'phone' => '+359886202022',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "fresh-portokal", "Фреш Портокал", "1,40", "300", ""],
["", "fresh-grejpfrut", "Фреш Грейпфрут", "2,80", "300", ""],
["", "fresh-limon", "Фреш Лимон", "3,50", "300", ""],
["", "fresh-morkov", "Фреш Морков", "1,40", "300", ""]

            ],

            "salads": [
                ["", "tarator", "Таратор", "0,70", "", ""],
["", "salata-s-file-i-gauda", "Салата с филе и Гауда", "2,80", "400", ""],
["", "salata-czezar", "Салата Цезар", "2,80", "", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "", ""],
["", "salata-riba-ton", "Салата Риба тон", "3,50", "", ""],
["", "salata-s-proshuto", "Салата с прошуто", "2,80", "", ""]

            ],

            "sandwiches": [
                ["", "sandvich-ss-svinsko-file", "Сандвич със свинско филе", "2,10", "", ""],
["", "sandvich-s-pileshko-file", "Сандвич с пилешко филе", "2,80", "", ""],
["", "sandvich-s-moczarela", "Сандвич с моцарела", "2,10", "", ""],
["", "sandvich-s-riba-ton", "Сандвич с риба тон", "2,80", "", ""],
["", "sandvich-s-klczano-meso", "Сандвич с кълцано месо", "3,50", "", ""]

            ],

            "Смути": [
                ["", "smuti-banan", "Смути банан", "2,10", "", ""]

            ],

            "others": [
                ["", "myusli-s-presni-plodove-domashen-med-i-kiselo-mlyako", "Мюсли с пресни плодове, домашен мед и кисело мляко", "2,10", "400", ""]

            ],

            "desserts": [
                ["", "domashen-lokum", "Домашен локум", "2,10", "100", ""]

            ],

            "Топли напитки": [
                ["", "espreso-ot-pryasno-smleni-kafe-zrna", "Еспресо от прясно смлени кафе зърна", "0,70", "", ""],
["", "kafe-ot-zatvorimo-kafe", "Кафе от затворимо кафе", "0,00", "", ""],
["", "kafe-s-mlyako", "Кафе с мляко", "0,70", "", ""],
["", "kapuchino", "Капучино", "0,70", "", ""],
["", "neskafe-3v1", "Нескафе 3в1", "0,00", "", ""],
["", "mlyako-s-neskafe", "Мляко с Нескафе", "0,70", "", ""],
["", "mokachino", "Мокачино", "0,70", "", ""],
["", "toplo-kakao", "Топло какао", "0,00", "", ""],
["", "mlyako-s-kakao", "Мляко с какао", "0,70", "", ""]

            ]
        }', 
        'slug' => 'plna-kupa',
        'business_name' => 'Пълна Купа',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Тодор Александров 44',
        'address_additional' => '',
        'coords_x' => '42.0177374',
        'coords_y' => '23.0962494',
        'phone' => '+359895424440',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "svinska-pacha", "Свинска пача", "1,40", "300", ""],
["", "svinsko-shkembe", "Свинско шкембе", "1,40", "300", ""],
["", "supa-pileshka", "Супа пилешка", "1,40", "300", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""],
["", "teleshko-shkembe", "Телешко шкембе", "1,40", "300", ""]

            ],

            "alaminuti": [
                ["", "kashkaval-pane", "Кашкавал пане", "2,10", "100", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "2,80", "300", ""],
["", "omlet-ss-kashkaval", "Омлет със кашкавал", "2,10", "300", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "1,40", "300", ""],
["", "paniran-pileshki-shniczel", "Паниран пилешки шницел", "0,70", "150", ""],
["", "pileshki-khapki", "Пилешки хапки", "2,80", "150", ""],
["", "pileshko-butche-s-garnitura", "Пилешко бутче с гарнитура", "3,50", "100", ""],
["", "porcziya-przheni-kartofi", "Порция пържени картофи", "1,40", "300", ""],
["", "porcziya-przheni-kartofi-ss-sirene", "Порция пържени картофи със сирене", "2,10", "350", ""],
["", "sirene-pane", "Сирене пане", "1,40", "100", ""],
["", "shniczel-s-kajma", "Шницел с кайма", "2,10", "160", ""],
["", "yajcza-po-panagyurski", "Яйца по Панагюрски", "2,10", "160", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "mecha-lapa", "Меча лапа", "2,80", "", ""],
["", "pileshka-przhola-v-bulo", "Пилешка пържола в було", "2,10", "150", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "2,80", "200", ""],
["", "pileshka-srbska-pleskavicza", "Пилешка сръбска плескавица", "2,10", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "80", ""],
["", "svinska-przhola", "Свинска пържола", "2,80", "180", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "80", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,70", "", ""],
["", "makaroni-na-furna", "Макарони на фурна", "0,70", "200", ""],
["", "makaroni-na-furna-s-shokolad", "Макарони на фурна с шоколад", "1,40", "200", ""],
["", "palachinka-s-med", "Палачинка с мед", "0,70", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "0,70", "", ""],
["", "palachinka-ss-shokolad", "Палачинка със шоколад", "0,70", "", ""],
["", "solena-palachinka-ss-sirene-i-kashkaval", "Солена палачинка със сирене и кашкавал", "1,40", "", ""]

            ],

            "garnish": [
                ["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "", ""],
["", "domati-i-krastaviczi-ss-sirene", "Домати и краставици със сирене", "1,40", "", ""],
["", "kombinirana", "Комбинирана", "0,70", "", ""],
["", "przheni-kartofi-s-lyutenicza", "Пържени картофи с лютеница", "0,70", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "", ""],
["", "14-khlyab", "1/4 хляб", "0,00", "", ""]

            ]
        }', 
        'slug' => 'mrsnoto-kebapche',
        'business_name' => 'Мръсното кебапче',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'бул. Сан Стефано 3',
        'address_additional' => '',
        'coords_x' => '42.0210826',
        'coords_y' => '23.0903077',
        'phone' => '+359896859903',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "pileshki", "Пилешки", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204421.jpg?width=302"],
["", "svinski", "Свински", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204422.jpg?width=302"],
["", "teleshki", "Телешки", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204423.jpg?width=302"]

            ],

            "specialties": [
                ["", "burger-amigo", "Бургер Амиго", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204424.jpg?width=302"],
["", "teleshki-burger", "Телешки бургер", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204425.jpg?width=302"],
["", "burgerk-kebap-13", "Бургерк Кебап 13", "3,50", "13", ""],
["", "double-xx-burger", "Double XX Burger", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204427.jpg?width=302"],
["", "shish-tauk", "Шиш таук", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204428.jpg?width=302"],
["", "chikn-burger", "Чикън бургер", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204429.jpg?width=302"]

            ],

            "eXtra Бургер": [
                ["", "ekhtra-burger-yajcze", "еХтра Бургер яйце", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204430.jpg?width=302"],
["", "ekhtra-burger", "еХтра Бургер", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204431.jpg?width=302"],
["", "przheni-kartofki", "Пържени картофки", "0,70", "", ""],
["", "ekhtra-burger-kashkaval", "еХтра Бургер кашкавал", "2,10", "", ""]

            ],

            "Тост": [
                ["", "dyuner-pitka-pile", "Дюнер питка пиле", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204434.jpg?width=302"],
["", "tost-teleshko", "Тост телешко", "2,80", "", ""],
["", "dyuner-pitka-svinsko", "Дюнер питка свинско", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204436.jpg?width=302"],
["", "tost-shunka", "Тост шунка", "2,10", "", ""],
["", "tost-lukanka", "Тост луканка", "2,80", "", ""],
["", "tost-vegetarianski", "Тост вегетариански", "2,10", "", ""],
["", "khot-dog", "Хот-дог", "1,40", "", ""]

            ],

            "Клуб сандвич": [
                ["", "s-topeno-sirene-i-chedr", "С топено сирене и чедър", "3,50", "", ""],
["", "s-shunka", "С шунка", "3,50", "", ""],
["", "s-pileshko-file", "С пилешко филе", "3,50", "", ""],
["", "s-lukanka", "С луканка", "3,50", "", ""]

            ],

            "Порция": [
                ["", "porcziya-dyuner-telshko", "Порция дюнер телшко", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204459.jpg?width=302"],
["", "porcziya-dyuner-pile", "Порция дюнер пиле", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/1204460.jpg?width=302"]

            ],

            "desserts": [
                ["", "palachinki", "Палачинки", "1,40", "", ""]

            ]
        }', 
        'slug' => 'kebap13',
        'business_name' => 'Кебап 13',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Тодор Александров 14',
        'address_additional' => '',
        'coords_x' => '42.01995725',
        'coords_y' => '23.09994308',
        'phone' => '+359899874987',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "shopska", "Шопска", "3,50", "", ""],
["", "czezar", "Цезар", "4,90", "", ""],
["", "rukola", "Рукола", "4,90", "", ""],
["", "kapreze", "Капрезе", "4,90", "", ""],
["", "riba-ton", "Риба тон", "4,90", "", ""]

            ],

            "pizza": [
                ["", "picza-khot---dog", "Пица Хот - Дог", "8,40", "", ""],
["", "picza-margarita", "Пица Маргарита", "4,20", "", ""],
["", "picza-peperoni", "Пица Пеперони", "5,60", "", ""],
["", "picza-proshuto", "Пица Прошуто", "6,30", "", ""],
["", "picza-roma", "Пица Рома", "4,90", "", ""],
["", "picza-kuatro-formadzhi", "Пица Куатро Формаджи", "6,30", "", ""],
["", "picza-venecziya", "Пица Венеция", "4,90", "", ""],
["", "picza-burger", "Пица Бургер", "6,30", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,90", "", ""],
["", "picza-napoli", "Пица Наполи", "4,90", "", ""],
["", "picza-neapolitana", "Пица Неаполитана", "4,20", "", ""],
["", "picza-rimini", "Пица Римини", "4,20", "", ""],
["", "picza-kuatro-karne", "Пица Куатро карне", "7,70", "", ""],
["", "picza-vegetariana", "Пица Вегетариана", "4,90", "", ""],
["", "picza-kalczone", "Пица Калцоне", "5,60", "", ""],
["", "picza-toskana", "Пица Тоскана", "5,60", "", ""],
["", "picza-na-ludiya-piczar", "Пица на Лудия пицар", "9,10", "", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-shunka-chedr-i-salata", "Сандвич с шунка, чедър и салата", "3,50", "", ""],
["", "sandvich-s-pile-kiseli-krastavichki-i-salata", "Сандвич с пиле, кисели краставички и салата", "3,50", "", ""],
["", "sandvich-s-bekon-cherven-luk-i-salata", "Сандвич с бекон, червен лук и салата", "3,50", "", ""],
["", "sandvich-ss-salam-zeleni-chushki-i-salata", "Сандвич със салам, зелени чушки и салата", "3,50", "", ""],
["", "sandvich-kapreze", "Сандвич капрезе", "3,50", "", ""],
["", "khot-dog", "Хот-дог", "8,40", "", ""]

            ],

            "desserts": [
                ["", "kyunefe", "Кюнефе", "4,20", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/801570.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/801571.jpg?width=302"]

            ],

            "drinks": [
                ["", "monster", "Monster", "1,40", "", ""],
["", "ajryan", "Айрян", "0,70", "330", ""],
["", "ajryan", "Айрян", "0,70", "500", ""],
["", "ajryan-plodov", "Айрян плодов", "0,70", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "voda-baldaran", "Вода Балдаран", "0,00", "500", ""],
["", "tarator", "Таратор", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'pizza-boxx',
        'business_name' => 'Pizza Boxx',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул.Тодор Александров 54',
        'address_additional' => '',
        'coords_x' => '42.0175687',
        'coords_y' => '23.0953556',
        'phone' => '+359882852050',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-shamrok", "Салата Шамрок", "5,60", "400", ""],
["", "salata-markiza", "Салата Маркиза", "4,90", "400", ""],
["", "salata-nicza", "Салата Ница", "4,20", "350", ""],
["", "salata-czezar", "Салата Цезар", "3,50", "350", ""],
["", "salata-toskana", "Салата Тоскана", "4,20", "350", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "500", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "zhtvarska-salata", "Жътварска салата", "3,50", "350", ""],
["", "vitaminozna-salata", "Витаминозна салата", "3,50", "400", ""],
["", "salata-domati-ss-sirene", "Салата домати със сирене", "2,10", "350", ""],
["", "salata-krastaviczi-ss-sirene", "Салата краставици със сирене", "2,10", "350", ""],
["", "zelena-salata-s-yaicze", "Зелена салата с яице", "2,10", "350", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "350", ""],
["", "salata-morkovi", "Салата моркови", "2,10", "300", ""],
["", "salata-gracziya", "Салата Грация", "2,80", "300", ""],
["", "morkovi-ss-sino-sirene-i-orekhi", "Моркови със синьо сирене и орехи", "3,50", "350", ""],
["", "morkovi-s-riba-ron", "Моркови с риба рон", "2,80", "350", ""],
["", "salata-pecheni-chushki-ss-sirene", "Салата печени чушки със сирене", "2,80", "350", ""],
["", "katk", "Катък", "3,50", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "250", ""],
["", "salata-bavariya", "Салата Бавария", "2,80", "450", ""],
["", "salata-vezuvij", "Салата Везувий", "3,50", "450", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "0,70", "400", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "0,70", "400", ""],
["", "kartofena-krem-supa-ss-sirene", "Картофена крем супа със сирене", "1,40", "400", ""],
["", "kartofena-krem-supa-s-bekon", "Картофена крем супа с бекон", "1,40", "400", ""],
["", "pileshka-supa", "Пилешка супа", "0,70", "400", ""],
["", "svinska-shkembe-chorba", "Свинска шкембе чорба", "1,40", "400", ""]

            ],

            "alaminuti": [
                ["", "yajcza-na-ochi", "Яйца на очи", "1,40", "", ""],
["", "omlet-natyur", "Омлет натюр", "1,40", "200", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "1,40", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "1,40", "200", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "2,80", "300", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "300", ""],
["", "sirene-po-lovdzhijski", "Сирене по ловджийски", "3,50", "350", ""],
["", "pileshki-shniczel-s-kombinirana-garnitura", "Пилешки шницел с комбинирана гарнитура", "3,50", "400", ""],
["", "pleskavicza-s-kombinirana-garnitura", "Плескавица с комбинирана гарнитура", "3,50", "400", ""],
["", "shniczel-s-kombinirana-garnitura", "Шницел с комбинирана гарнитура", "2,80", "400", ""],
["", "sudzhuk-s-kombinirana-garnitura", "Суджук с комбинирана гарнитура", "3,50", "400", ""],
["", "plnen-kashkaval-s-shunka-i-kombinirana-garnitura", "Пълнен кашкавал с шунка и комбинирана гарнитура", "2,80", "400", ""],
["", "paniran-kashkaval-s-kombinirana-garnitura", "Паниран кашкавал с комбинирана гарнитура", "2,80", "400", ""],
["", "panirano-sirene-s-kombinirana-garnitura", "Панирано сирене с комбинирана гарнитура", "2,80", "400", ""],
["", "kartofen-shniczel-s-garnitura", "Картофен шницел с гарнитура", "2,80", "400", ""],
["", "mish-mash", "Миш-маш", "2,80", "300", ""]

            ],

            "starters": [
                ["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,20", "350", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,80", "350", ""],
["", "zadusheni-zelenchuczi-s-topeno-sirene-i-kashkaval", "Задушени зеленчуци с топено сирене и кашкавал", "3,50", "380", ""],
["", "zadusheni-zelenchuczi-ss-sino-sirene-i-brokoli", "Задушени зеленчуци със синьо сирене и броколи", "3,50", "380", ""],
["", "zadusheni-brokoli", "Задушени броколи", "2,80", "250", ""],
["", "panirani-brokoli", "Панирани броколи", "3,50", "300", ""],
["", "zapecheni-brokoli-ss-sino-sirene-i-smetana", "Запечени броколи със синьо сирене и сметана", "4,20", "350", ""],
["", "czarevicza-v-maslo", "Царевица в масло", "2,10", "300", ""],
["", "czarevicza-v-maslo-s-parmezan", "Царевица в масло с пармезан", "2,80", "330", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "250", ""],
["", "panirani-lucheni-ringove", "Панирани лучени рингове", "2,80", "250", ""],
["", "kashkaval-pane-khapki", "Кашкавал пане хапки", "3,50", "250", ""],
["", "sirene-pane-khapki", "Сирене пане хапки", "2,80", "250", ""],
["", "topeno-sirene-pane-ss-sladko-ot-borovinki", "Топено сирене пане със сладко от боровинки", "3,50", "250", ""],
["", "topeno-sirene-pane-s-kornflejks-i-sladko-ot-borovinki", "Топено сирене пане с корнфлейкс и сладко от боровинки", "4,20", "250", ""],
["", "topeno-sirene-ss-susam-i-sladko-ot-borovinki", "Топено сирене със сусам и сладко от боровинки", "4,20", "250", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "3,50", "250", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,20", "250", ""],
["", "pileshki-srcza", "Пилешки сърца", "2,80", "300", ""],
["", "pileshki-srcza-s-gbi", "Пилешки сърца с гъби", "3,50", "350", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "3,50", "400", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "2,80", "300", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "400", ""],
["", "svinski-drobcheta", "Свински дробчета", "2,80", "300", ""],
["", "svinski-drobcheta-po-selski", "Свински дробчета по селски", "3,50", "400", ""],
["", "zadusheno-svinsko-shkembe", "Задушено свинско шкембе", "3,50", "350", ""],
["", "ezik-v-maslo", "Език в масло", "3,50", "200", ""],
["", "paniran-ezik", "Паниран език", "4,20", "250", ""],
["", "razlozhko-meze", "Разложко мезе", "4,90", "300", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,80", "", ""],
["", "fungi", "Фунги", "3,50", "", ""],
["", "boloneziya", "Болонезия", "3,50", "", ""],
["", "klasik", "Класик", "3,50", "", ""],
["", "parma", "Парма", "4,20", "", ""],
["", "spanachena", "Спаначена", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "4,20", "", ""],
["", "salami", "Салами", "4,20", "", ""],
["", "morichi", "Моричи", "4,20", "", ""],
["", "proshuto", "Прошуто", "4,20", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "4,20", "", ""],
["", "tono", "Тоно", "4,20", "", ""],
["", "salsiche", "Салсиче", "4,90", "", ""],
["", "chikn", "Чикън", "4,90", "", ""],
["", "kuatro-stadzhone", "Куатро стаджоне", "4,90", "", ""],
["", "kalczone-zatvorena", "Калцоне затворена", "4,90", "", ""],
["", "neapolitana", "Неаполитана", "4,90", "", ""],
["", "kariola", "Кариола", "4,90", "", ""],
["", "pikantina", "Пикантина", "4,90", "", ""],
["", "sicziliana", "Сицилиана", "4,90", "", ""],
["", "bianka", "Бианка", "4,90", "", ""],
["", "milano", "Милано", "5,60", "", ""],
["", "primavera", "Примавера", "5,60", "", ""],
["", "venecziya", "Венеция", "5,60", "", ""],
["", "shamrok", "Шамрок", "6,30", "", ""]

            ],

            "Сачета": [
                ["", "sache-s-pileshko-file", "Саче с пилешко филе", "7,00", "400", ""],
["", "sache-ss-svinsko-meso", "Саче със свинско месо", "7,70", "400", ""],
["", "sache-shamrok", "Саче Шамрок", "9,10", "500", ""]

            ],

            "Картофени ястия": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "350", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "400", ""],
["", "przheni-kartofi-s-kashkaval", "Пържени картофи с кашкавал", "2,10", "400", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "350", ""],
["", "sotirani-kartofi", "Сотирани картофи", "2,10", "350", ""],
["", "zapecheni-kartofi-ss-sirene", "Запечени картофи със сирене", "2,80", "450", ""],
["", "zapecheni-kartofi-ss-spanak", "Запечени картофи със спанак", "3,50", "450", ""],
["", "zapecheni-kartofi-s-pusheno-svinsko-file", "Запечени картофи с пушено свинско филе", "3,50", "450", ""],
["", "zapecheni-kartofi-s-shunka", "Запечени картофи с шунка", "3,50", "500", ""],
["", "zapecheni-kartofi-ss-sino-sirene-i-brokoli", "Запечени картофи със синьо сирене и броколи", "4,20", "450", ""],
["", "zapecheni-kartofi-s-bekon", "Запечени картофи с бекон", "3,50", "500", ""],
["", "zapecheni-kartofi-s-pileshko-file", "Запечени картофи с пилешко филе", "4,20", "500", ""]

            ],

            "pasta": [
                ["", "spageti-vegetariana", "Спагети Вегетариана", "2,80", "500", ""],
["", "spageti-boloneze", "Спагети Болонезе", "2,80", "450", ""],
["", "spageti-italiana", "Спагети Италиана", "3,50", "500", ""],
["", "spageti-karbonara", "Спагети Карбонара", "3,50", "500", ""],
["", "spageti-verona", "Спагети Верона", "3,50", "500", ""],
["", "spageti-ss-sirene", "Спагети със сирене", "3,50", "500", ""],
["", "talyateli-s-pileshko-i-gbi", "Талятели с пилешко и гъби", "3,50", "400", ""],
["", "talyateli-s-bekon", "Талятели с бекон", "3,50", "400", ""],
["", "talyateli-s-pesto-rukola-parmezan-i-cheri-domati", "Талятели с песто, рукола, пармезан и чери домати", "4,20", "300", ""],
["", "talyateli-ss-sirene", "Талятели със сирене", "4,20", "400", ""],
["", "talyateli-ss-sino-sirene-i-brokoli", "Талятели със синьо сирене и броколи", "4,20", "400", ""]

            ],

            "risotto": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,80", "400", ""],
["", "rizoto-s-shunka", "Ризото с шунка", "2,80", "450", ""],
["", "rizoto-s-pileshko", "Ризото с пилешко", "3,50", "450", ""],
["", "rizoto-s-pusheno-svinsko-file", "Ризото с пушено свинско филе", "3,50", "450", ""],
["", "rizoto-s-presni-gbki", "Ризото с пресни гъбки", "2,80", "400", ""],
["", "rizoto-s-pileshko-smetana-i-gbi", "Ризото с пилешко, сметана и гъби", "3,50", "450", ""],
["", "rizoto-s-brokoli-i-sino-sirene", "Ризото с броколи и синьо сирене", "3,50", "450", ""]

            ],

            "Ястия от пилешко": [
                ["", "pileshki-krilcza", "Пилешки крилца", "2,80", "350", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshko-shishche-s-bekon", "Пилешко шишче с бекон", "1,40", "100", ""],
["", "pileshko-shishche-ss-zelenchuczi", "Пилешко шишче със зеленчуци", "1,40", "120", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "250", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "3,50", "200", ""],
["", "pileshko-file-v-gben-sos-i-garnitura", "Пилешко филе в гъбен сос и гарнитура", "4,90", "400", ""],
["", "pile-meksikano", "Пиле Мексикано", "4,20", "350", ""],
["", "pile-s-med-i-zelenchuczi", "Пиле с мед и зеленчуци", "3,50", "400", ""],
["", "pile-po-moskovski", "Пиле по московски", "4,20", "350", ""],
["", "pile-ss-sladko-kisel-sos", "Пиле със сладко-кисел сос", "4,20", "500", ""],
["", "pileshki-kscheta-s-gbi", "Пилешки късчета с гъби", "4,20", "300", ""],
["", "pile-zhulien", "Пиле Жулиен", "4,20", "400", ""],
["", "pile-leon", "Пиле Леон", "4,20", "400", ""],
["", "pile-mama-mia", "Пиле Мама миа", "4,20", "300", ""],
["", "pikantno-pile", "Пикантно пиле", "3,50", "300", ""],
["", "pile-asorti", "Пиле Асорти", "4,90", "400", ""],
["", "pile-shamrok", "Пиле Шамрок", "5,60", "400", ""]

            ],

            "Ястия от свинско": [
                ["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "svinsko-shishche-s-bekon", "Свинско шишче с бекон", "1,40", "100", ""],
["", "rebra-na-skara", "Ребра на скара", "4,20", "300", ""],
["", "svinski-rebra-s-med", "Свински ребра с мед", "4,90", "320", ""],
["", "svinsko-kontra-file-v-gben-sos-i-garnitura", "Свинско контра филе в гъбен сос и гарнитура", "6,30", "400", ""],
["", "svinsko-kontra-file-na-skara", "Свинско контра филе на скара", "4,20", "200", ""],
["", "svinska-vratna-przhola-na-skara-ili-tigan", "Свинска вратна пържола на скара или тиган", "4,20", "200", ""],
["", "marinovan-svinski-vrat-zapechen-s-bekon-i-presni-gbi", "Маринован свински врат запечен с бекон и пресни гъби", "5,60", "350", ""]

            ],

            "Мешана скара": [
                ["", "plato-s-marinovani-mesa-na-skara", "Плато с мариновани меса на скара", "21,70", "", ""],
["", "plato-za-dvama", "Плато за двама", "9,80", "", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-kashkaval", "Сaндвич с кашкавал", "0,70", "", ""],
["", "sandvich-s-kashkaval-i-shunka", "Сандвич с кашкавал и шунка", "0,70", "", ""],
["", "sandvich-s-kashkaval-i-lukanka", "Сандвич с кашкавал и луканка", "0,70", "", ""],
["", "klub-sandvich", "Клуб сандвич", "3,50", "400", ""]

            ],

            "fish": [
                ["", "byala-riba-pane", "Бяла риба пане", "2,80", "250", ""],
["", "panirani-kalmari", "Панирани калмари", "4,20", "250", ""],
["", "rulcza-ot-raczi-pane", "Рулца от раци пане", "2,80", "300", ""]

            ],

            "garnish": [
                ["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "300", ""],
["", "topla-garnitura", "Топла гарнитура", "1,40", "300", ""],
["", "domati", "Домати", "0,70", "150", ""],
["", "krastaviczi", "Краставици", "0,70", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "150", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "chili-sos", "Чили сос", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "czezar-sos", "Цезар сос", "0,00", "50", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "pesto", "Песто", "0,00", "50", ""]

            ],

            "bread": [
                ["", "filiya", "Филия", "0,00", "", ""],
["", "prepechena-filiya", "Препечена филия", "0,00", "", ""],
["", "przhena-filiya", "Пържена филия", "0,70", "", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "0,70", "", ""],
["", "prlenka-s-maslo-i-podpravki", "Пърленка с масло и подправки", "0,70", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "180", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "200", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "1,40", "200", ""],
["", "palachinka-s-med-i-orekhi", "Палачинка с мед и орехи", "1,40", "200", ""],
["", "czedeno-mlyako-s-med-i-orekhi", "Цедено мляко с мед и орехи", "1,40", "320", ""],
["", "czedeno-mlyako-ss-sladko", "Цедено мляко със сладко", "1,40", "320", ""],
["", "plodova-salata", "Плодова салата", "1,40", "180", ""]

            ]
        }', 
        'slug' => 'shamrok-pb',
        'business_name' => 'Шамрок Пъб',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Тодор Александров 21',
        'address_additional' => '',
        'coords_x' => '42.01933284',
        'coords_y' => '23.09939522',
        'phone' => '+359877323465',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Обедно": [
                ["", "mish-mash", "Миш-маш", "2,10", "400", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "350", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "3,50", "350", ""]

            ],

            "salads": [
                ["", "salata-czezar", "Салата Цезар", "5,60", "450", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "450", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "600", ""],
["", "salata-vitaminozna", "Салата Витаминозна", "2,80", "450", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "selska-salata", "Селска салата", "3,50", "450", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с  яйце", "2,80", "250", ""],
["", "salata-vulkan", "Салата Вулкан", "3,50", "400", ""],
["", "salata-morkovi", "Салата Моркови", "2,10", "250", ""]

            ],

            "alaminuti": [
                ["", "khrupkavi-pileshki-khapki", "Хрупкави пилешки хапки", "4,20", "300", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,20", "300", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "280", ""],
["", "topeno-sirene-khapki", "Топено сирене хапки", "4,20", "300", ""],
["", "plato-khapki-miks", "Плато хапки микс", "16,10", "", ""],
["", "kashkaval-khapki", "Кашкавал хапки", "3,50", "300", ""],
["", "sirene-khapki", "Сирене хапки", "3,50", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "przheni-kartofi-s-bekon", "Пържени картофи с бекон", "2,80", "300", ""],
["", "przheni-kartofi-s-kashkaval", "Пържени картофи с кашкавал", "2,80", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "280", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "gbi-v-maslo", "Гъби в масло", "3,50", "200", ""],
["", "pileshki-srcza", "Пилешки сърца", "3,50", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "4,20", "350", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "4,90", "500", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "4,90", "500", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "3,50", "250", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,80", "300", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "2,80", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "3,50", "300", ""],
["", "rizoto-s-pile-i-gbi", "Ризото с пиле и гъби", "4,20", "300", ""],
["", "solena-palachinka", "Солена палачинка", "2,80", "300", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "2,80", "300", ""],
["", "kartofi-s-bekon", "Картофи с бекон", "3,50", "400", ""],
["", "anglijska-zakusna", "Английска закусна", "4,20", "350", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "300", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "300", ""],
["", "omlet-nyatyur", "Омлет нятюр", "2,10", "280", ""],
["", "przhena-czacza", "Пържена Цаца", "1,40", "300", ""]

            ],

            "Основни ястия": [
                ["", "pile-zhulien", "Пиле Жулиен", "4,90", "350", ""],
["", "pileshko-ss-svezha-salata", "Пилешко със свежа салата", "4,90", "400", ""],
["", "svinski-flejki-v-speczialen-sos", "Свински флейки в специален сос", "4,20", "350", ""],
["", "pileshki-flejki-v-speczialen-sos", "Пилешки флейки в специален сос", "4,20", "350", ""],
["", "shniczel-s-garnitura", "Шницел с гарнитура", "3,50", "400", ""],
["", "domashni-kyuftencza-s-garnitura", "Домашни кюфтенца с гарнитура", "3,50", "400", ""],
["", "pileshki-karencza", "Пилешки каренца", "4,20", "400", ""],
["", "svinski-karencza", "Свински каренца", "4,20", "400", ""],
["", "pileshkaa-przhola-s-gben-sos", "Пилешкаа пържола с гъбен сос", "4,20", "350", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "250", ""],
["", "kyufte-na-skara", "Кюфте на скара", "0,70", "", ""],
["", "kebapche-na-skara", "Кебапче на скара", "0,70", "", ""],
["", "teleshko-kyufte-na-skara", "Телешко кюфте на скара", "0,70", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "", ""]

            ],

            "pasta": [
                ["", "taliateli-s-pile-i-brokoli", "Талиатели с пиле и броколи", "3,50", "400", ""],
["", "taliateli-boloneze", "Талиатели Болонезе", "3,50", "400", ""],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "3,50", "400", ""]

            ],

            "burgers": [
                ["", "burger-s-pileshko", "Бургер с пилешко", "3,50", "400", ""],
["", "teleshki-burger", "Телешки бургер", "4,20", "400", ""],
["", "burger-s-bekon", "Бургер с бекон", "3,50", "400", ""],
["", "burger-s-shunka", "Бургер с шунка", "2,80", "400", ""]

            ],

            "sandwiches": [
                ["", "klub-sandvich-s-shunka", "Клуб сандвич с шунка", "3,50", "400", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,10", "280", ""],
["", "klub-sandvich-s-lukanka", "Клуб сандвич с луканка", "3,50", "400", ""],
["", "klub-sandvich-s-kashkaval", "Клуб сандвич с кашкавал", "2,80", "350", ""],
["", "sandvich-s-lukanka", "Сандвич с луканка", "2,80", "280", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "2,10", "280", ""],
["", "princzesi-s-kashkaval", "Принцеси с кашкавал", "2,80", "280", ""],
["", "sandvich-s-yajcze-i-sirene", "Сандвич с яйце и сирене", "2,10", "280", ""],
["", "przheni-filijki-ss-sladko-i-sirene", "Пържени филийки със сладко и сирене", "2,10", "280", ""]

            ],

            "desserts": [
                ["", "palachinka-s-shokolad", "Палачинка с шоколад", "2,10", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "2,10", "", ""],
["", "palachinka-s-shokolad-i-banan", "Палачинка с шоколад и банан", "2,80", "", ""]

            ]
        }', 
        'slug' => 'q-caffe-bar-dinner',
        'business_name' => 'Q caffe Bar &amp; Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Иван Михайлов 13',
        'address_additional' => '',
        'coords_x' => '42.02071146',
        'coords_y' => '23.09129054',
        'phone' => '+359896062251',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "sirene-po-lovdzhijski", "Сирене по ловджийски", "2,10", "", ""],
["", "svisnki-gyuvech", "Свиснки гювеч", "2,80", "", ""],
["", "chorbadzhijska-przhenicza", "Чорбаджийска пърженица", "2,10", "", ""],
["", "skumriya-s-garnitura", "Скумрия с гарнитура", "2,80", "", ""]

            ],

            "salads": [
                ["", "redena-ss-sirene", "Редена със сирене", "2,10", "350", ""],
["", "shopska", "Шопска", "2,10", "400", ""],
["", "selska", "Селска", "2,10", "400", ""],
["", "ovcharska", "Овчарска", "3,50", "600", ""],
["", "mlechna", "Млечна", "2,10", "200", ""],
["", "ruska-salata", "Руска салата", "2,10", "200", ""],
["", "marulya", "Маруля", "2,10", "300", ""],
["", "marulya-s-yajcza", "Маруля с яйца", "2,10", "350", ""],
["", "zele-s-morkovi", "Зеле с моркови", "1,40", "350", ""],
["", "maslini-s-luk", "Маслини с лук", "2,80", "200", ""],
["", "morkovi", "Моркови", "1,40", "300", ""],
["", "kartofi-s-luk", "Картофи с лук", "1,40", "400", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "400", ""],
["", "salata-vulkan", "Салата Вулкан", "2,10", "400", ""],
["", "domati-s-moczarela", "Домати с моцарела", "3,50", "400", ""],
["", "balkanska-salata", "Балканска салата", "2,80", "350", ""],
["", "czezar", "Цезар", "5,60", "400", ""],
["", "slavyanska-salata", "Славянска салата", "2,80", "350", ""],
["", "vareno-yajcze", "Варено яйце", "0,00", "", ""],
["", "pecheni-chushki-ss-sirene", "Печени чушки със сирене", "2,10", "300", ""],
["", "katk", "Катък", "2,80", "200", ""]

            ],

            "Студени предястия": [
                ["", "sirene-natyur", "Сирене натюр", "1,40", "100", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "2,10", "100", ""],
["", "sino-sirene", "Синьо сирене", "2,80", "100", ""],
["", "topeno-sirene", "Топено сирене", "2,10", "100", ""],
["", "lukanka", "Луканка", "2,80", "100", ""],
["", "kajzer-pastrma", "Кайзер пастърма", "4,90", "100", ""],
["", "banski-starecz", "Бански старец", "4,20", "100", ""],
["", "file-elena", "Филе Елена", "4,90", "100", ""],
["", "pueshko-file", "Пуешко филе", "2,80", "100", ""],
["", "bekon", "Бекон", "2,10", "100", ""],
["", "sudzhuk", "Суджук", "3,50", "100", ""],
["", "shunka", "Шунка", "1,40", "100", ""]

            ],

            "Топли предястия": [
                ["", "kashkaval-pane---plochka", "Кашкавал пане - плочка", "3,50", "250", ""],
["", "kashkaval-pane---khapki", "Кашкавал пане - хапки", "2,80", "250", ""],
["", "paniran-kashkaval-s-med-i-orekhi", "Паниран кашкавал с мед и орехи", "3,50", "300", ""],
["", "kashkaval-pane-khapki-s-kornflejks", "Кашкавал пане хапки с корнфлейкс", "3,50", "300", ""],
["", "sirene-pane---plochka", "Сирене пане - плочка", "2,80", "250", ""],
["", "sirene-pane---khapki", "Сирене пане - хапки", "2,80", "250", ""],
["", "sirene-pane-khapki-ss-susam", "Сирене пане хапки със сусам", "2,80", "300", ""],
["", "sirene-pane-khapki-s-kornflejks", "Сирене пане хапки с корнфлейкс", "2,80", "300", ""],
["", "panirano-sirene-s-med-i-orekhi", "Панирано сирене с мед и орехи", "2,80", "300", ""],
["", "pileshki-khapki---pikantni", "Пилешки хапки - пикантни", "3,50", "250", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "250", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "3,50", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "3,50", "250", ""],
["", "topeni-sirencza-pane-s-kornflejks", "Топени сиренца пане с корнфлейкс", "3,50", "300", ""],
["", "pileshki-flejki", "Пилешки флейки", "3,50", "300", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "350", ""],
["", "svinski-drobcheta", "Свински дробчета", "2,80", "300", ""],
["", "svinski-drobcheta-po-selski", "Свински дробчета по селски", "2,80", "450", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "2,80", "350", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "2,80", "450", ""],
["", "pileshki-srcza", "Пилешки сърца", "2,80", "350", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "350", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "500", ""],
["", "przheni-kartofi-s-kashkaval", "Пържени картофи с кашкавал", "1,40", "500", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "500", ""],
["", "panirani-gbi", "Панирани гъби", "2,80", "250", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "200", ""],
["", "tikvichki-s-chesn", "Тиквички с чесън", "3,50", "200", ""],
["", "tikvichki-s-kiselo-mlyako", "Тиквички с кисело мляко", "3,50", "350", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,80", "400", ""],
["", "rizoto-s-pile", "Ризото с пиле", "2,80", "450", ""],
["", "zadusheno-shkembe-s-kashkaval", "Задушено шкембе с кашкавал", "3,50", "350", ""],
["", "pile-provans", "Пиле Прованс", "4,90", "350", ""],
["", "pile-red-korn", "Пиле Ред Корн", "4,20", "300", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,20", "350", ""],
["", "panirani-brokoli", "Панирани броколи", "2,80", "300", ""],
["", "kashkaval-pane-khapki-ss-susam", "Кашкавал пане хапки със сусам", "3,50", "300", ""]

            ],

            "alaminuti": [
                ["", "omlet-natyur", "Омлет натюр", "1,40", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "300", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "280", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "2,80", "350", ""],
["", "omlet-s-lukanka", "Омлет с луканка", "3,50", "300", ""],
["", "omlet-ss-zelenchuczi", "Омлет със зеленчуци", "2,10", "300", ""],
["", "yajcza-na-ochi", "Яйца на очи", "1,40", "", ""],
["", "yajcza-s-bekon", "Яйца с бекон", "2,80", "350", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "300", ""],
["", "sirene-po-shopski", "Сирене по шопски", "2,80", "300", ""],
["", "sirene-po-lovdzhijski", "Сирене по ловджийски", "3,50", "400", ""],
["", "mish-mash", "Миш маш", "2,80", "350", ""],
["", "chushki-byurek", "Чушки бюрек", "2,80", "350", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "0,70", "", ""]

            ],

            "soups": [
                ["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "supa-topcheta", "Супа топчета", "0,70", "300", ""],
["", "shkembe-chorba---svinska", "Шкембе чорба - свинска", "1,40", "300", ""],
["", "shkembe-chorba---teleshka", "Шкембе чорба - телешка", "1,40", "300", ""],
["", "tarator", "Таратор", "0,70", "300", ""],
["", "bob-chorba", "Боб чорба", "0,70", "300", ""],
["", "kurban-chorba", "Курбан чорба", "1,40", "300", ""],
["", "agneshka-supa", "Агнешка супа", "1,40", "300", ""]

            ],

            "specialties": [
                ["", "pileshki-speczialitet-v-bulo", "Пилешки специалитет в було", "10,50", "400", ""],
["", "pile-po-kralski", "Пиле по Кралски", "7,70", "500", ""],
["", "svinski-stek-kordon-blo", "Свински стек Кордон бльо", "12,60", "500", ""],
["", "speczialitet-na-majstora", "Специалитет на Майстора", "12,60", "600", ""],
["", "kombiniran-speczialitet-saragosa", "Комбиниран специалитет Сарагоса", "17,50", "", ""],
["", "speczialitet-prestizh", "Специалитет Престиж", "10,50", "500", ""]

            ],

            "Ястия от риба": [
                ["", "pstrva-na-skara", "Пъстърва на скара", "5,60", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "8,40", "200", ""],
["", "lavrak", "Лаврак", "7,00", "400", ""]

            ],

            "pan": [
                ["", "pileshka-przhola-na-tigan", "Пилешка пържола на тиган", "4,90", "200", ""],
["", "svinska-przhola-na-tigan", "Свинска пържола на тиган", "7,00", "200", ""],
["", "svinsko-bon-file-na-tigan", "Свинско бон филе на тиган", "8,40", "200", ""],
["", "svinski-kareta-na-tigan", "Свински карета на тиган", "6,30", "200", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "7,00", "300", ""],
["", "svinsko-bon-file", "Свинско бон филе", "9,80", "300", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "bekon-na-skara", "Бекон на скара", "7,00", "300", ""],
["", "meshana-skara", "Мешана скара", "12,60", "", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "pileshki-sach", "Пилешки сач", "12,60", "700", ""],
["", "svinski-sach", "Свински сач", "13,30", "700", ""],
["", "kombiniran-sach", "Комбиниран сач", "14,00", "700", ""],
["", "meraklijski-sach", "Мераклийски сач", "16,80", "700", ""],
["", "svinska-przhola", "Свинска пържола", "7,00", "200", ""],
["", "svinsko-bon-file-na-skara", "Свинско бон филе на скара", "8,40", "200", ""],
["", "pileshka-przhola---file", "Пилешка пържола - филе", "4,90", "200", ""],
["", "pileshko-shishche-s-bekon", "Пилешко шишче с бекон", "2,80", "150", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,10", "", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "1,40", "", ""],
["", "sandvich-princzesa", "Сандвич Принцеса", "2,10", "", ""],
["", "sandvich-s-lukanka", "Сандвич с луканка", "2,10", "", ""],
["", "sandvich-s-yajcze-i-sirene", "Сандвич с яйце и сирене", "1,40", "", ""],
["", "przhena-filiya", "Пържена филия", "0,00", "", ""]

            ],

            "pasta": [
                ["", "spageti-karbonara", "Спагети Карбонара", "4,20", "400", ""],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "400", ""],
["", "spageti-ss-sirene", "Спагети със сирене", "2,80", "400", ""],
["", "spageti-s-kashkaval", "Спагети с кашкавал", "2,80", "400", ""]

            ],

            "others": [
                ["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "khlyab---filiya", "Хляб - филия", "0,00", "", ""],
["", "pitka", "Питка", "0,00", "", ""],
["", "limon", "Лимон", "0,00", "", ""],
["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "kiselo-mlyako", "Кисело мляко", "0,00", "", ""],
["", "lyutenicza", "Лютеница", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "med", "Мед", "0,00", "", ""],
["", "sladko", "Сладко", "0,00", "", ""],
["", "soev-sos", "Соев сос", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "", ""],
["", "prepechen-khlyab", "Препечен хляб", "0,00", "", ""],
["", "cziganska-banicza", "Циганска баница", "2,10", "", ""]

            ],

            "garnish": [
                ["", "kombinirana", "Комбинирана", "2,10", "", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,00", "", ""],
["", "oriz", "Ориз", "0,00", "", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "1,40", "200", ""]

            ],

            "desserts": [
                ["", "krem-bryule", "Крем брюле", "2,10", "", ""],
["", "krem-karamel", "Крем карамел", "0,70", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "1,40", "", ""],
["", "plodova-salata", "Плодова салата", "2,10", "300", ""],
["", "frenska-selska-torta", "Френска селска торта", "2,10", "", ""],
["", "torta-tri-shokolada", "Торта Три шоколада", "2,10", "", ""],
["", "shokoladova-torta", "Шоколадова торта", "2,10", "", ""]

            ]
        }', 
        'slug' => 'santos-bar-and-dinner',
        'business_name' => 'Santos Bar and Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Освобождение 17',
        'address_additional' => '',
        'coords_x' => '41.98872103',
        'coords_y' => '23.08214331',
        'phone' => '+359876464664',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "400", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "400", ""],
["", "zelena-salata-s-yajcze-i-riba-ton", "Зелена салата с яйце и риба тон", "4,20", "400", ""],
["", "ajsberg-ss-zapecheno-sirene-i-med", "Айсберг със запечено сирене и мед", "5,60", "400", ""],
["", "ajsberg-s-moczarela-i-gbi-sote", "Айсберг с моцарела и гъби соте", "4,90", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,10", "200", ""],
["", "salata-urnabes", "Салата Урнабес", "3,50", "400", ""],
["", "makedonska-salata", "Македонска салата", "3,50", "400", ""],
["", "tiro-salata", "Тиро салата", "2,10", "200", ""]

            ],

            "appetizer": [
                ["", "brusketa-s-tiro-salata-i-podpravki", "Брускета с тиро салата и подправки", "2,80", "250", ""],
["", "brusketa-s-tarama-khajver", "Брускета с тарама хайвер", "3,50", "250", ""],
["", "brusketa-s-maslinova-pasta", "Брускета с маслинова паста", "2,80", "250", ""],
["", "brusketa-s-domaten-takos", "Брускета с доматен такос", "3,50", "250", ""]

            ],

            "Студени предястия": [
                ["", "plato-kolbasi", "Плато колбаси", "7,70", "200", ""],
["", "proshuto", "Прошуто", "6,30", "100", ""],
["", "plato-ot-sirena", "Плато от сирена", "7,00", "200", ""],
["", "ovche-sirene", "Овче сирене", "2,10", "100", ""],
["", "sirene-khalumi", "Сирене Халуми", "4,90", "100", ""]

            ],

            "Запеканки": [
                ["", "kartofi-saganaki", "Картофи саганаки", "4,20", "400", ""],
["", "zapechen-kartof-s-parmezan-i-somga", "Запечен картоф с пармезан и сьомга", "4,90", "400", ""],
["", "topen-patladzhan-s-moczarela", "Топен патладжан с моцарела", "4,20", "400", ""],
["", "sirene-saganaki", "Сирене саганаки", "2,80", "200", ""],
["", "kartofi-s-tri-vida-sirena", "Картофи с три вида сирена", "4,20", "400", ""],
["", "plnen-kartof-s-bekon-sirene-i-parmezan", "Пълнен картоф с бекон, сирене и пармезан", "4,90", "400", ""]

            ],

            "burgers": [
                ["", "teleshki-burger", "Телешки бургер", "5,60", "500", ""],
["", "pileshki-burger", "Пилешки бургер", "4,90", "500", ""],
["", "salami-burger", "Салами бургер", "4,20", "500", ""],
["", "svinski-burger", "Свински бургер", "4,20", "500", ""],
["", "klub-sandvich", "Клуб сандвич", "4,20", "", ""]

            ],

            "pizza": [
                ["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "proshuto-krudo", "Прошуто Крудо", "5,60", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "diablo", "Диабло", "4,90", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,90", "", ""],
["", "kuatro-stadzhione", "Куатро Стаджионе", "5,60", "", ""],
["", "picza-spanak", "Пица Спанак", "4,90", "", ""],
["", "agresti", "Агрести", "5,60", "", ""],
["", "jork", "Йорк", "4,90", "", ""],
["", "venecziya", "Венеция", "5,60", "", ""],
["", "rustika", "Рустика", "4,90", "", ""],
["", "kalczone", "Калцоне", "4,90", "", ""],
["", "vegetariana", "Вегетариана", "4,20", "", ""]

            ],

            "Основни ястия": [
                ["", "pileshko-file-ss-sos-rokfor", "Пилешко филе със сос Рокфор", "5,60", "450", ""],
["", "pileshko-file-ss-sos-ot-manatarki", "Пилешко филе със сос от манатарки", "5,60", "450", ""],
["", "pileshko-file-ss-sos-dizhon", "Пилешко филе със сос Дижон", "5,60", "450", ""],
["", "svinsko-bon-file-ss-sos-rokfor", "Свинско бон филе със сос Рокфор", "7,00", "450", ""],
["", "svinsko-bon-file-ss-sos-ot-manatarki", "Свинско бон филе със сос от манатарки", "7,00", "450", ""],
["", "pileshki-fakhitas", "Пилешки фахитас", "6,30", "450", ""],
["", "svinski-buritos", "Свински буритос", "7,00", "500", ""],
["", "svinski-rebrcza-s-medena-kozhichka", "Свински ребърца с медена кожичка", "7,00", "450", ""],
["", "teleshko-bon-file-s-pepr-sos", "Телешко бон филе с Пепър сос", "12,60", "350", ""],
["", "teleshko-bon-file-ss-sos-ot-borovinki-s-kanape-ot-portokal", "Телешко бон филе със сос от боровинки с канапе от портокал", "12,60", "350", ""]

            ],

            "Македонска скара": [
                ["", "meshana-skara", "Мешана скара", "20,30", "1300", ""],
["", "ushhipczi-na-skara", "Ущипци на скара", "4,20", "300", ""],
["", "makedonski-kebapcheta-na-skara", "Македонски кебапчета на скара", "4,20", "300", ""],
["", "svinski-rebra-lenta-na-skara", "Свински ребра лента на скара", "6,30", "400", ""],
["", "leskovachka-pleskavicza-na-skara", "Лесковачка плескавица на скара", "4,90", "350", ""],
["", "svinski-kotlet-na-skara", "Свински котлет на скара", "8,40", "450", ""],
["", "makedonska-dska-s-mesa", "Македонска дъска с меса", "14,70", "1100", ""],
["", "banski-sudzhuk", "Бански суджук", "6,30", "300", ""]

            ],

            "sachs": [
                ["", "kombiniran-sach", "Комбиниран сач", "8,40", "400", ""],
["", "banski-sach", "Бански сач", "9,10", "400", ""],
["", "svinski-sach", "Свински сач", "7,70", "400", ""],
["", "pileshki-sach", "Пилешки сач", "7,70", "400", ""],
["", "gyuveche-venecziya", "Гювече Венеция", "4,90", "400", ""],
["", "gyuveche-fines", "Гювече Финес", "4,90", "400", ""],
["", "gyuveche-stela", "Гювече Стела", "4,90", "400", ""]

            ],

            "Домашни картофи": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "pikantni-przheni-kartofi-po-selski", "Пикантни пържени картофи по селски", "2,10", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "", ""],
["", "pikantni-przheni-kartofi-na-shajbi", "Пикантни пържени картофи на шайби", "2,10", "350", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "230", ""]

            ],

            "Студени гарнитури": [
                ["", "domati-krastaviczi-zele-s-morkov", "Домати, краставици, зеле с морков", "0,70", "60", ""],
["", "kombinirana", "Комбинирана", "2,10", "150", ""],
["", "bobena-salata", "Бобена салата", "0,70", "100", ""]

            ],

            "Топли гарнитури": [
                ["", "oriz", "Ориз", "0,70", "60", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "60", ""]

            ],

            "Хлебчета": [
                ["", "orientalski-khlyab", "Ориенталски хляб", "2,10", "", ""],
["", "kashkavaleno-khlebche", "Кашкавалено хлебче", "2,10", "", ""],
["", "kombinirano-khlebche-ss-sino-sirene", "Комбинирано хлебче със синьо сирене", "2,10", "", ""]

            ],

            "desserts": [
                ["", "krem-venecziya", "Крем Венеция", "2,80", "", ""],
["", "shokoladova-torta", "Шоколадова торта", "1,40", "250", ""],
["", "krem-bryule", "Крем Брюле", "2,10", "", ""],
["", "sufle", "Суфле", "2,80", "200", ""],
["", "plodova-salata-za-dvama", "Плодова салата за двама", "2,80", "", ""]

            ],

            "Топли предястия": [
                ["", "pileshki-khapki-s-kornflejks-i-mlechen-sos", "Пилешки хапки с корнфлейкс и млечен сос", "4,90", "350", ""],
["", "khrupkavo-topeno-sirene-s-borovinki-i-portokal", "Хрупкаво топено сирене с боровинки и портокал", "4,20", "350", ""],
["", "zapechen-kartof-s-proshuto-i-bilki", "Запечен картоф с прошуто и билки", "4,20", "450", ""],
["", "khrupkav-paniran-miks", "Хрупкав паниран микс", "4,20", "450", ""],
["", "brokoli-pane-s-mlechen-sos", "Броколи пане с млечен сос", "4,20", "350", ""],
["", "pileshki-krilcza-v-khrupkava-panirovka", "Пилешки крилца в хрупкава панировка", "4,20", "300", ""],
["", "pileshki-srcza", "Пилешки сърца", "3,50", "300", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "3,50", "300", ""],
["", "svinski-drob-na-tigan", "Свински дроб на тиган", "3,50", "300", ""],
["", "svinski-srcza", "Свински сърца", "3,50", "350", ""],
["", "pileshki-srcza-s-gbi", "Пилешки сърца с гъби", "4,20", "350", ""],
["", "ezik-v-maslo", "Език в масло", "4,20", "150", ""],
["", "zapechen-kamember", "Запечен камембер", "7,00", "200", ""]

            ],

            "Багети": [
                ["", "bageta-ss-somga-avokado-i-cheri-domato", "Багета със сьомга, авокадо и чери домато", "4,90", "350", ""],
["", "bageta-s-proshuto-moczarela-i-domat", "Багета с прошуто, моцарела и домат", "4,20", "350", ""],
["", "bageta-s-domashna-moczarela-i-pesto", "Багета с домашна моцарела и песто", "4,20", "350", ""]

            ],

            "Паста и ризото": [
                ["", "talyateli-venecziya", "Талятели Венеция", "4,90", "400", ""],
["", "talyateli-s-chetiri-vida-sirena", "Талятели с четири вида сирена", "4,90", "400", ""],
["", "talyateli-grande", "Талятели Гранде", "5,60", "400", ""],
["", "talyateli-s-manatarki", "Талятели с манатарки", "4,90", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,20", "400", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "400", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "3,50", "400", ""],
["", "rizoto-s-pile-i-manatarki", "Ризото с пиле и манатарки", "4,90", "400", ""],
["", "rizoto-s-teleshko-i-gbi", "Ризото с телешко и гъби", "5,60", "400", ""],
["", "rizoto-s-morksi-darove", "Ризото с моркси дарове", "4,90", "400", ""]

            ],

            "Рибни предложения": [
                ["", "pstrva-na-skara", "Пъстърва на скара", "6,30", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "9,80", "300", ""],
["", "file-ot-pstrva-na-tigan", "Филе от пъстърва на тиган", "7,70", "350", ""],
["", "lavrak-na-skara", "Лаврак на скара", "9,80", "300", ""],
["", "file-ot-czipura", "Филе от ципура", "11,20", "350", ""],
["", "file-ot-lavrak", "Филе от лаврак", "11,20", "350", ""],
["", "kalmari-pane", "Калмари пане", "9,80", "300", ""],
["", "pipala-ot-kalmar-na-plocha", "Пипала от калмар на плоча", "9,10", "350", ""]

            ]
        }', 
        'slug' => 'pizza-venice',
        'business_name' => 'Pizza Venice',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Райко Даскалов 2',
        'address_additional' => '',
        'coords_x' => '42.0217303',
        'coords_y' => '23.10080761',
        'phone' => '+35973882666',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "pileshka-przhola-s-kombinirana-garnitura", "Пилешка пържола с комбинирана гарнитура", "4,90", "650", ""],
["", "svinska-przhola-s-kombinirana-garnitura", "Свинска пържола с комбинирана гарнитура", "4,90", "650", ""],
["", "meshana-skara-s-kombinirana-garnitura", "Мешана скара с комбинирана гарнитура", "7,00", "900", ""],
["", "trojka-kebapcheta-s-2-garnituri-po-izbor", "Тройка кебапчета с 2 гарнитури по избор", "2,80", "470", ""],
["", "trojka-kyufteta-s-2-garnituri-po-izbor", "Тройка кюфтета с 2 гарнитури по избор", "2,80", "470", ""],
["", "pikantna-pleskavicza-s-2-garnituri-po-izbor", "Пикантна плескавица с 2 гарнитури по избор", "2,80", "420", ""],
["", "karnache-s-2-garnituri-po-izbor", "Карначе с 2 гарнитури по избор", "2,80", "400", ""],
["", "khot-dog-2br--pepsi", "Хот дог (2бр) + Пепси", "2,80", "330", ""],
["", "pileshki-burger--pepsi", "Пилeшки бургер + Пепси", "3,50", "330", ""],
["", "pileshki-ili-svinski-dyuner--pepsi", "Пилешки или свински дюнер + Пепси", "3,50", "500", ""],
["", "svinska-ili-pileshka-przhola-s-garnitura--bira", "Свинска или пилешка пържола с гарнитура + бира", "6,30", "500", ""],
["", "2-porczii-kartofi--2-biri", "2 порции картофи + 2 бири", "5,60", "500", ""],
["", "pileshki-burger-2br--2br-pepsi", "Пилешки бургер (2бр) + 2бр Пепси", "9,10", "500", ""],
["", "parti-menyu", "Парти меню", "32,90", "", ""]

            ],

            "salads": [
                ["", "salata-czezar", "Салата Цезар", "2,80", "350", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "karnache", "Карначе", "2,10", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "3,50", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "3,50", "250", ""],
["", "pikantna-pleskavicza", "Пикантна плескавица", "2,10", "200", ""],
["", "pikantno-kyufte", "Пикантно кюфте", "0,70", "70", ""],
["", "gigantsko-kyufte", "Гигантско кюфте", "1,40", "150", ""],
["", "nadenichka-chorizo", "Наденичка чоризо", "0,70", "90", ""],
["", "nadenichki-chorizo-3br-s-2-garnituri-po-izbor", "Наденички чоризо (3бр) с 2 гарнитури по избор", "3,50", "450", ""]

            ],

            "Сандвичи и бургери": [
                ["", "svinski-burger", "Свински бургер", "2,80", "410", ""],
["", "teleshki-burger", "Телешки бургер", "2,80", "410", ""],
["", "pileshki-burger", "Пилешки бургер", "2,80", "410", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "1,40", "170", ""],
["", "sandvich-s-kajma-i-kashkaval", "Сандвич с кайма и кашкавал", "1,40", "190", ""],
["", "sandvich-s-file-i-kashkaval", "Сандвич с филе и кашкавал", "2,10", "190", ""]

            ],

            "pizza": [
                ["", "picza-s-peperoni-i-chushka", "Пица с пеперони и чушка", "2,10", "", ""],
["", "margarita", "Маргарита", "1,40", "", ""],
["", "picza-s-pileshko-file-i-czarevicza", "Пица с пилешко филе и царевица", "2,10", "", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,70", "100", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "zele-s-morkovi", "Зеле с моркови", "0,70", "100", ""],
["", "marulya", "Маруля", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "porcziya-przheni-kartofi", "Порция пържени картофи", "1,40", "200", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "2,80", "400", ""]

            ],

            "bread": [
                ["", "pitka", "Питка", "0,00", "120", ""]

            ],

            "drinks": [
                ["", "pepsi", "Пепси", "0,70", "", ""],
["", "mirinda", "Миринда", "0,70", "", ""],
["", "sevn-p", "Севън ъп", "0,70", "", ""],
["", "soda", "Сода", "0,70", "", ""],
["", "mineralna-voda-baldaran", "Минерална вода Балдаран", "0,70", "", ""],
["", "red-bul", "Ред Бул", "2,80", "250", ""],
["", "studen-chaj-liptn", "Студен чай Липтън", "0,70", "250", ""],
["", "naturalen-sok-prisan", "Натурален сок Присан", "0,70", "", ""]

            ],

            "Бири": [
                ["", "tuborg", "Туборг", "1,40", "500", ""],
["", "pirinsko", "Пиринско", "1,40", "500", ""],
["", "shumensko", "Шуменско", "1,40", "500", ""]

            ],

            "Пакетирани изделия": [
                ["", "soleti", "Солети", "0,00", "60", ""],
["", "kroasan-s-shokolad-7-days", "Кроасан с шоколад 7 days", "0,70", "80", ""],
["", "kroasan-s-krem-bryule-7-days", "Кроасан с крем брюле 7 days", "0,70", "80", ""],
["", "vafla", "Вафла", "0,00", "55", ""],
["", "shokolad-milka", "Шоколад Милка", "2,10", "100", ""]

            ]
        }', 
        'slug' => 'dzhumayska-skara',
        'business_name' => 'Джумайска скара',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Васил Левски 38',
        'address_additional' => '',
        'coords_x' => '42.00661461',
        'coords_y' => '23.08422712',
        'phone' => '+359888225179',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "mariya", "Мария", "4,20", "400", ""],
["", "sofiya", "София", "4,20", "400", ""],
["", "ivana", "Ивана", "4,20", "400", ""],
["", "katerina", "Катерина", "4,20", "400", ""],
["", "viktoriya", "Виктория", "4,20", "400", ""]

            ],

            "pizza": [
                ["", "pepito", "Пепито", "2,80", "", ""],
["", "khavana", "Хавана", "2,80", "", ""],
["", "chervena-shapchicza", "Червена шапчица", "2,80", "", ""],
["", "gradinska-picza", "Градинска пица", "2,80", "", ""],
["", "baj-gano", "Бай Ганьо", "2,80", "", ""],
["", "margarita", "Маргарита", "2,10", "", ""],
["", "vegetariana", "Вегетариана", "2,80", "", ""],
["", "khitr-petr", "Хитър Петър", "2,80", "", ""],
["", "kumcho-vlcho", "Кумчо Вълчо", "2,80", "", ""],
["", "san-marko", "Сан Марко", "2,80", "", ""],
["", "italiano", "Италианo", "2,80", "", ""],
["", "chetiri-sirena", "Четири сирена", "2,80", "", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-yajcze-i-sirene", "Сандвич с яйце и сирене", "2,10", "", ""],
["", "sandvich-s-kashkaval-i-shunka", "Сандвич с кашкавал и шунка", "2,10", "", ""],
["", "sandvich-s-yajcze-kashkaval-krema-sirene-zelenchuczi", "Сандвич с яйце, кашкавал, крема сирене, зеленчуци", "2,10", "", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "pirinsko-ken", "Пиринско кен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'picariya-san-marko',
        'business_name' => 'Пицария Сан Марко',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Blagoevgrad',
        'region' => 'Blagoevgrad',
        'postal_code' => '2700',
        'address' => 'ул. Тодор Александров 47',
        'address_additional' => '',
        'coords_x' => '42.0174003',
        'coords_y' => '23.0958586',
        'phone' => '+359896865204',
        'email' => '',
        'website' => '',
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
