<?php

use Carbon\Carbon;

$restaurants = [

    [
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "salads": [
                ["", "tikvichki-s-chesn", "Тиквички с чесън", "2,10", "300", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,10", "400", ""],
["", "kartofena-salata", "Картофена салата", "1,40", "400", ""],
["", "zeleva-salata", "Зелева салата", "1,40", "400", ""],
["", "gbena-salata", "Гъбена салата", "2,10", "300", ""],
["", "zelenchuczi-s-domaten-sos", "Зеленчуци с доматен сос", "2,10", "300", ""]

            ],

            "alaminuti": [
                ["", "kartofeno-kyufte", "Картофено кюфте", "0,00", "", ""],
["", "przheno-kyufte", "Пържено кюфте", "0,00", "", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "350", ""],
["", "pileshko-czyalo-butche", "Пилешко цяло бутче", "2,80", "", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "", ""]

            ],

            "Готвено": [
                ["", "pile-s-oriz", "Пиле с ориз", "2,10", "", ""],
["", "leshha-yakhniya", "Леща яхния", "1,40", "400", ""]

            ],

            "grill": [
                ["", "pileshko-file", "Пилешко филе", "2,80", "", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "2,80", "", ""],
["", "svinsko-kebapche", "Свинско кебапче", "0,70", "100", ""],
["", "kyufte-na-skara", "Кюфте на скара", "0,70", "100", ""],
["", "nervozno-kyufte", "Нервозно кюфте", "0,70", "100", ""]

            ],

            "soups": [
                ["", "shkembe-chorba", "Шкембе чорба", "1,40", "", ""],
["", "pileshka-supa", "Пилешка супа", "0,70", "", ""],
["", "tarator", "Таратор", "1,40", "400", ""]

            ],

            "desserts": [
                ["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "", ""],
["", "biskvitena-torta", "Бисквитена торта", "0,70", "", ""],
["", "biskvitena-torta-s-krem-bryule", "Бисквитена  торта с крем брюле", "1,40", "", ""]

            ],

            "От пекарната на Foodbox": [
                ["", "khlyab-rchen", "Хляб ръчен", "0,70", "", ""]

            ]
        }', 
        'slug' => 'food-box',
        'business_name' => 'Food Box',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Поп Харитон 23',
        'address_additional' => '',
        'coords_x' => '43.41643243',
        'coords_y' => '23.22152388',
        'phone' => '+359888140155',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "parizhka-salata", "Парижка салата", "2,10", "170", ""],
["", "salata-s-pile", "Салата с пиле", "2,10", "170", ""],
["", "salata-s-riba-ton", "Салата с риба тон", "2,10", "170", ""],
["", "salata-ss-somga", "Салата със сьомга", "3,50", "170", ""]

            ],

            "soups": [
                ["", "zelenchukova-krem-supa", "Зеленчукова крем супа", "1,40", "300", ""]

            ],

            "Френски кросани": [
                ["", "mini-kroasan-s-shokolad", "Мини кроасан с шоколад", "0,00", "30", ""]

            ],

            "sandwiches": [
                ["", "sandvich-s-shunka---golyam", "Сандвич с шунка - голям", "2,10", "250", ""],
["", "sandvich-ss-svinsko-file---golyam", "Сандвич със свинско филе - голям", "2,10", "250", ""]

            ],

            "Торти": [
                ["", "markiza", "Маркиза", "2,10", "140", ""],
["", "domashna-torta", "Домашна торта", "2,10", "180", ""],
["", "torta-fiona", "Торта Фиона", "2,10", "160", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", ""]

            ],

            "Безалкохолни напитки": [
                ["", "ajryan", "Айрян", "0,70", "300", ""],
["", "limonada-s-dzhindzhifil", "Лимонада с джинджифил", "0,70", "250", ""],
["", "energijna-napitka-monster", "Енергийна напитка Monster", "2,10", "500", ""]

            ]
        }', 
        'slug' => 'frenska-pekarna',
        'business_name' => 'Френска Пекарна',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6300',
        'address' => 'ул. Марин Дринов 6',
        'address_additional' => '',
        'coords_x' => '41.93162183',
        'coords_y' => '25.55520085',
        'phone' => '+359889453845',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "balaton", "Балатон", "0,70", "", ""],
["", "gondola", "Гондола", "1,40", "", ""],
["", "zaek", "Заек", "0,70", "", ""],
["", "kri", "Къри", "0,70", "", ""],
["", "sozopolka", "Созополка", "0,70", "", ""]

            ],

            "Баници": [
                ["", "banicza-vita", "Баница вита", "2,80", "850", ""],
["", "banicza-vita-s-yablka", "Баница вита с ябълка", "0,70", "", ""],
["", "banicza-pura-ss-sirene", "Баница пура със сирене", "0,70", "", ""],
["", "banicza-ss-sirene-vita", "Баница със сирене вита", "0,70", "", ""],
["", "banicza-ss-sirene-triglna", "Баница със сирене триъгълна", "0,70", "", ""],
["", "banicza-ss-spanak-sirene-vita", "Баница със спанак  сирене вита", "0,70", "", ""],
["", "domashna-banicza-s-yajcza-i-sirene", "Домашна баница с яйца и сирене", "1,40", "", ""],
["", "makedonski-byurek-s-kajma", "Македонски бюрек с кайма", "0,70", "", ""],
["", "makedonski-byurek-ss-sirene", "Македонски бюрек със сирене", "0,70", "", ""]

            ],

            "pizza": [
                ["", "krgla-picza-s-shunka-i-kashkaval", "Кръгла пица с шунка и кашкавал", "1,40", "", ""],
["", "krgla-picza-s-shunka-kashkaval-i-gbi", "Кръгла пица с шунка, кашкавал и гъби", "1,40", "", ""]

            ],

            "sandwiches": [
                ["", "chabata-s-riba-ton", "Чабата с риба тон", "2,80", "", ""],
["", "chabata-ss-sirene", "Чабата със сирене", "2,10", "", ""],
["", "chabata-ss-somga-i-filadefiya", "Чабата със сьомга и филадефия", "2,80", "", ""]

            ],

            "others": [
                ["", "healthy-chasha-1", "Healthy чаша 1", "2,10", "1", ""],
["", "healthy-chasha-2", "Healthy чаша 2", "2,10", "2", ""],
["", "bezglutenov-kreker", "Безглутенов крекер", "1,40", "", ""]

            ],

            "desserts": [
                ["", "domashna-medena-torta", "Домашна медена торта", "2,10", "", ""],
["", "torta-cherveno-kadife", "Торта червено Кадифе", "2,10", "", ""],
["", "chijzkejk", "Чийзкейк", "2,10", "", ""],
["", "shokoladova-torta", "Шоколадова торта", "2,10", "", ""]

            ],

            "Понички": [
                ["", "ponichka-s-krem-i-byal-shokolad-malka", "Поничка с крем и бял шоколад малка", "0,70", "", ""],
["", "ponichka-s-krem-i-pudra-zakhar-golyama", "Поничка с крем и пудра захар голяма", "0,70", "", ""],
["", "ponichka-s-krem-i-pudra-zakhar-malka", "Поничка с крем и пудра захар малка", "0,70", "", ""],
["", "ponichka-s-shokolad-i-pudra-zakhar-golyama", "Поничка с шоколад и пудра захар голяма", "0,70", "", ""],
["", "ponichka-s-shokolad-i-pudra-zakhar-malka", "Поничка с шоколад и пудра захар малка", "0,70", "", ""],
["", "ponichka-s-shokolad-i-shokoladova-glazura-malka", "Поничка с шоколад и шоколадова глазура малка", "0,70", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/968137.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/968138.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/968139.jpg?width=302"]

            ],

            "drinks": [
                ["", "ajryan", "Айрян", "0,70", "500", ""],
["", "boza", "Боза", "0,70", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "plodov-ajryan", "Плодов айрян", "0,70", "", ""]

            ]
        }', 
        'slug' => 'stars-foods',
        'business_name' => 'Star foods',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3405',
        'address' => 'бул. Генерал Арнолди 28',
        'address_additional' => '',
        'coords_x' => '43.420264',
        'coords_y' => '23.21981619',
        'phone' => '+359887497068',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "porcziya-pileshko-file", "Порция пилешко филе", "4,90", "400", ""],
["", "porcziya-svinsko-file", "Порция свинско филе", "6,30", "400", ""],
["", "porcziya-black-angus-kyuftencza", "Порция Black Angus Кюфтенца", "7,70", "400", ""]

            ],

            "burgers": [
                ["", "pepper-jack", "Pepper Jack", "4,90", "350", ""],
["", "classic-american-burger", "Classic American Burger", "4,90", "320", ""],
["", "bbq-bacon", "BBQ Bacon", "4,90", "300", ""],
["", "chicken-bacon", "Chicken Bacon", "5,60", "380", ""],
["", "chicken-burger", "Chicken Burger", "4,90", "320", ""]

            ],

            "starters": [
                ["", "przheni-kartofi", "Пържени картофи", "2,80", "", ""]

            ],

            "sauces": [
                ["", "medena-gorchicza", "Медена горчица", "0,00", "40", ""],
["", "burger-sos", "Бургер сос", "0,00", "40", ""],
["", "ketchup", "Кетчуп", "0,00", "40", ""],
["", "majoneza", "Майонеза", "0,00", "40", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "40", ""],
["", "sladko-chili", "Сладко чили", "0,00", "40", ""],
["", "gorchicza", "Горчица", "0,00", "40", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "40", ""],
["", "pikantna-majoneza", "Пикантна майонеза", "0,00", "40", ""],
["", "tartar-sos", "Тартар сос", "0,00", "40", ""],
["", "khavaj", "Хавай", "0,00", "40", ""],
["", "pusheno-barbekyu", "Пушено Барбекю", "0,00", "40", ""],
["", "1000-ostrova", "1000 Острова", "0,00", "40", ""],
["", "salsa", "Салса", "0,00", "40", ""],
["", "limonova-majoneza", "Лимонова майонеза", "0,00", "40", ""],
["", "lyuto-barbekyu", "Люто Барбекю", "0,00", "40", ""],
["", "kri", "Къри", "0,00", "40", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/826430.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/826432.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/826431.jpg?width=302"]

            ]
        }', 
        'slug' => 'americano-burgers-grill-montana',
        'business_name' => 'Americano Burgers &amp; Grill (Монтана)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Анастас Стоянов 18',
        'address_additional' => '',
        'coords_x' => '43.42223009',
        'coords_y' => '23.22242353',
        'phone' => '+359894450016',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "zeleva-salata", "Зелева салата", "2,80", "350", ""],
["", "katk", "Катък", "2,80", "200", ""],
["", "shopska", "Шопска", "2,80", "400", ""],
["", "domati-pechena-chushka-i-sirene", "Домати, печена чушка и сирене", "3,50", "400", ""],
["", "redena-salata", "Редена салата", "2,80", "400", ""],
["", "salata-czezar", "Салата Цезар", "6,30", "350", ""],
["", "tabule-s-kinoa", "Табуле с киноа", "6,30", "300", ""],
["", "domati-s-mus-ot-sirena", "Домати с мус от сирена", "4,20", "350", ""],
["", "kapreze", "Капрезе", "5,60", "350", ""]

            ],

            "appetizer": [
                ["", "plato-razyadki", "Плато разядки", "7,00", "240", ""],
["", "katk", "Катък", "2,80", "100", ""],
["", "khumus", "Хумус", "2,80", "100", ""],
["", "takhini", "Тахини", "2,80", "100", ""],
["", "tirokafteri", "Тирокафтери", "2,80", "100", ""]

            ],

            "Студени предястия": [
                ["", "lukanka", "Луканка", "3,50", "100", ""],
["", "kashkaval", "Кашкавал", "1,40", "100", ""],
["", "file-elena", "Филе Елена", "4,90", "100", ""],
["", "sirene-natyur", "Сирене натюр", "0,70", "100", ""]

            ],

            "Топли предястия": [
                ["", "kashkaval-pane", "Кашкавал пане", "4,20", "250", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "250", ""],
["", "tikvichki-v-grczki-stil-podneseni-s-chesnov-sos", "Тиквички в Гръцки стил поднесени с чеснов сос", "6,30", "350", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "topeni-sirencza-ss-sladko-ot-borovinki", "Топени сиренца със сладко от боровинки", "5,60", "", ""],
["", "tikvichki-v-grczki-stil-podneseni-s-chesnov-sos", "Тиквички в гръцки стил, поднесени с чеснов сос", "4,90", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "sirencza-pane", "Сиренца пане", "3,50", "250", ""],
["", "pileshki-flejki-s-kornflejks", "Пилешки флейки с корнфлейкс", "4,90", "250", ""],
["", "pileshki-flejki-ss-susam", "Пилешки флейки със сусам", "4,90", "250", ""]

            ],

            "Ястия от пилешко": [
                ["", "pile-zhulien", "Пиле Жулиен", "5,60", "350", ""],
["", "pile-po-frenski", "Пиле по френски", "7,00", "300", ""],
["", "byalo-pile", "Бяло пиле", "6,30", "370", ""],
["", "pileshko-shishche-2br-s-kartofi-sote-domati-i-krastaviczi", "Пилешко шишче (2бр) с картофи соте, домати и краставици", "5,60", "", ""],
["", "pileshka-przhola-ot-but-na-skara-ili-na-tigan", "Пилешка пържола от бут на скара или на тиган", "4,90", "250", ""],
["", "pileshki-sach", "Пилешки сач", "10,50", "400", ""],
["", "pileshko-shishche-2br-s-kartofi-sote-domati-i-krastaviczi", "Пилeшко шишче (2бр) с картофи соте, домати и краставици", "7,70", "", ""],
["", "pileshki-sach", "Пилeшки сач", "9,80", "400", ""]

            ],

            "Ястия от свинско": [
                ["", "sheftalya", "Шефталя", "7,70", "", ""],
["", "obezkosteni-svinski-grdi-na-skara", "Обезкостени свински гърди на скара", "5,60", "250", ""],
["", "svinski-sach", "Свински сач", "9,80", "400", ""],
["", "svinski-kareta-s-luk-i-yajcze", "Свински карета с лук и яйце", "6,30", "250", ""],
["", "vratna-przhola-na-skara", "Вратна пържола на скара", "6,30", "250", ""],
["", "svinsko-shishche-2br-s-kartofi-sote-domati-i-krastaviczi", "Свинско шишче (2бр) с картофи соте, домати и краставици", "7,00", "", ""],
["", "kyufteta-na-skara", "Кюфтета на скара", "4,90", "", ""],
["", "kebapcheta-na-skara", "Кебапчета на скара", "4,90", "", ""]

            ],

            "Ястия от телешко": [
                ["", "pepr-stek", "Пепър стек", "18,90", "250", ""],
["", "teleshki-kyufteta-s-garnitura", "Телешки кюфтета с гарнитура", "6,30", "", ""]

            ],

            "Ястия от агнешко": [
                ["", "grilovani-agneshki-kotleti-podneseni-s-aromatno-bilkovo-maslo", "Гриловани агнешки котлети, поднесени с ароматно билково масло", "14,70", "300", ""]

            ],

            "Ястия от риба": [
                ["", "fileta-ot-morski-ezik-ss-sos-kholandez", "Филета от морски език със сос холандез", "13,30", "230", ""],
["", "fagri-czyala", "Фагри (цяла", "16,10", "", ""],
["", "skumriya-czyala", "Скумрия (цяла", "4,90", "", ""],
["", "pstrva-czyala", "Пъстърва (цяла", "6,30", "", ""],
["", "somga-na-plocha", "Сьомга на плоча", "9,80", "250", ""],
["", "lavrak-czyala", "Лаврак (цяла", "8,40", "", ""],
["", "czipura-czyala", "Ципура (цяла", "8,40", "", ""]

            ],

            "Морски деликатеси": [
                ["", "oktopod-na-plocha", "Октопод на плоча", "16,10", "180", ""],
["", "skaridi-na-plocha", "Скариди на плоча", "9,80", "250", ""],
["", "skarideni-shishcheta", "Скаридени шишчета", "9,80", "150", ""],
["", "kalmar-na-plocha", "Калмар на плоча", "14,70", "400", ""],
["", "kalmari-pane", "Калмари пане", "5,60", "250", ""]

            ],

            "garnish": [
                ["", "zadushen-oriz", "Задушен ориз", "1,40", "150", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "150", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "1,40", "150", ""],
["", "brokoli-ss-smetana", "Броколи със сметана", "2,80", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "150", ""]

            ],

            "Безмесни ястия": [
                ["", "brokoli-ss-smetana-i-topeno-sirene", "Броколи със сметана и топено сирене", "4,90", "300", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,20", "300", ""],
["", "omlet-natyur", "Омлет натюр", "2,10", "", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "", ""],
["", "omlet-asorti", "Омлет асорти", "3,50", "", ""]

            ],

            "bread": [
                ["", "prlenka", "Пърленка", "0,70", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "150", ""],
["", "domashni-czarevichni-khlebcheta", "Домашни царевични хлебчета", "1,40", "", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "", ""],
["", "picza-s-shunka-i-kashkaval", "Пица с шунка и кашкавал", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "5,60", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "6,30", "", ""],
["", "picza-s-morski-darove", "Пица с морски дарове", "15,40", "", ""],
["", "vegetarianska-picza", "Вегетарианска пица", "5,60", "", ""]

            ],

            "Паста и Ризото": [
                ["", "spageti-s-morski-darove", "Спагети с морски дарове", "8,40", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "350", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "7,70", "350", ""],
["", "rizoto-s-pile", "Ризото с пиле", "6,30", "350", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "5,60", "350", ""]

            ],

            "desserts": [
                ["", "czedeno-kiselo-mlyako-s-med", "Цедено кисело мляко с мед", "2,10", "", ""],
["", "czedeno-kiselo-mlyako-ss-sladko-ot-borovinki", "Цедено кисело мляко със сладко от боровинки", "2,10", "", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "", ""],
["", "chijzkejk-s-borovinki", "Чийзкейк с боровинки", "2,80", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "1,40", "", ""]

            ],

            "Червено вино": [
                ["", "verano-azur-merlo", "Verano Azur мерло", "16,10", "750", ""],
["", "kabile-merlo-i-kaberne-sovinon", "Кабиле Мерло и Каберне Совиньон", "15,40", "750", ""],
["", "kabile-mavrud-i-kaberne-sovinon", "Кабиле Мавруд и Каберне Совиньон", "15,40", "750", ""],
["", "vila-yambol-merlo", "Вила Ямбол Мерло", "11,20", "750", ""],
["", "vila-yambol-kaberne-sovinon", "Вила Ямбол Каберне Совиньон", "11,20", "750", ""],
["", "vila-yambol-mavrud", "Вила Ямбол Мавруд", "11,20", "750", ""],
["", "bratya-minkovi-kyuve", "Братя Минкови Кюве", "20,30", "750", ""],
["", "katarzhina-merlo-i-malbek", "Катаржина Мерло и Малбек", "7,70", "", ""],
["", "katarzhina-seven-grapes", "Катаржина Seven Grapes", "23,10", "750", ""],
["", "mezek-merlo", "Мезек Мерло", "13,30", "750", ""],
["", "sajkl-kaberne-i-merlo", "Сайкъл Каберне и Мерло", "14,70", "750", ""],
["", "starosel-mavrud", "Старосел Мавруд", "14,70", "750", ""],
["", "starosel-teroar", "Старосел Тероар", "18,20", "750", ""],
["", "lo-fotograf-sira", "Льо Фотограф Сира", "23,10", "750", ""],
["", "sajkl-sira", "Сайкъл Сира", "13,30", "750", ""]

            ],

            "rose": [
                ["", "piksels-roze", "Пикселс Розе", "17,50", "750", ""],
["", "verano-azur-roze", "Verano Azur Розе", "16,10", "750", ""],
["", "kabile-roze", "Кабиле Розе", "15,40", "750", ""],
["", "vila-yambol-roze", "Вила Ямбол Розе", "11,20", "750", ""],
["", "sajkl-roze", "Сайкъл Розе", "7,70", "", ""],
["", "lo-fotograf-roze", "Льо Фотограф Розе", "23,10", "750", ""],
["", "katarzhina-le-roze", "Катаржина Ле Розе", "20,30", "750", ""]

            ],

            "Бяло вино": [
                ["", "verano-azur-sovinon-blan-i-vionie", "Verano Azur Совиньон блан и Вионие", "16,10", "750", ""],
["", "kabile-shardone-i-sovinon-blan", "Кабиле Шардоне и Совиньон блан", "15,40", "750", ""],
["", "vila-yambol-muskat", "Вила Ямбол Мускат", "11,20", "750", ""],
["", "vila-yambol-shardone", "Вила Ямбол Шардоне", "11,20", "750", ""],
["", "babich-marlboro", "Бабич Марлборо", "30,10", "750", ""],
["", "katarzhina-shardone", "Катаржина Шардоне", "15,40", "750", ""],
["", "katarzhina-sovinon-blan", "Катаржина Совиньон блан", "16,80", "750", ""],
["", "mezek-shardone", "Мезек Шардоне", "13,30", "750", ""],
["", "mezek-sovinon-blan", "Мезек Совиньон блан", "7,70", "750", ""],
["", "sajkl-shardone-kolombar", "Сайкъл Шардоне Коломбар", "13,30", "750", ""],
["", "sajkl-sovinon-blan", "Сайкъл Совиньон блан", "13,30", "750", ""],
["", "starosel-muskat", "Старосел Мускат", "18,20", "750", ""]

            ]
        }', 
        'slug' => 'restorant-vesta',
        'business_name' => 'Ресторант Веста',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Цар Самуил 10',
        'address_additional' => '',
        'coords_x' => '43.4086567',
        'coords_y' => '23.2196891',
        'phone' => '+359888151418',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Домашна лимонада": [
                ["", "domashna-limonada", "Домашна лимонада", "1,40", "", ""],
["", "domashna-limonada-bez-zakhar", "Домашна лимонада без захар", "1,40", "", ""]

            ],

            "Фреш": [
                ["", "fresh-portokal", "Фреш Портокал", "2,10", "", ""],
["", "fresh-grejpfrut", "Фреш Грейпфрут", "2,80", "", ""],
["", "fresh-limon", "Фреш Лимон", "2,80", "", ""],
["", "fresh-czveklo", "Фреш Цвекло", "2,10", "", ""],
["", "fresh-morkov", "Фреш Морков", "2,10", "", ""],
["", "fresh-yablka", "Фреш Ябълка", "2,10", "", ""]

            ],

            "Препакетирани продукти": [
                ["", "golyama-kurabiya", "Голяма курабия", "0,00", "50", ""],
["", "vafla-moreni", "Вафла морени", "0,00", "36", ""],
["", "vafla-borovecz", "Вафла боровец", "0,00", "55", ""],
["", "vafla-borovecz-portokal", "вафла боровец портокал", "0,00", "52", ""],
["", "vafli-borovecz", "Вафли боровец", "0,00", "", ""],
["", "shoko-vafla-chofa", "Шоко вафла CHOFA", "0,00", "37", ""],
["", "myusli-biskviti-emso-borovinki", "Мюсли бисквити ЕМСО боровинки", "0,70", "60", ""],
["", "myusli-biskviti-emso-shokolad", "Мюсли бисквити ЕМСО шоколад", "0,70", "60", ""],
["", "saraliya-baklavichka-fedon", "Саралия баклавичка ФЕДОН", "0,70", "100", ""],
["", "tolumbichka-fedon", "Толумбичка ФЕДОН", "0,70", "100", ""],
["", "kinder-bueno", "Киндер Буено", "0,70", "43", ""],
["", "shokoladov-desert-millennium-menta-i-tmen-shokolad", "Шоколадов десерт Millennium мента и тъмен шоколад", "0,00", "38", ""],
["", "shokoladov-desert-millennium-leshnik-i-tmen-shokolad", "Шоколадов десерт Millennium лешник и тъмен шоколад", "0,00", "38", ""],
["", "shokoladov-desert-millennium-tiramisu", "Шоколадов десерт Millennium тирамису", "0,00", "38", ""],
["", "shokoladov-desert-millennium-leshnik-i-mlechen-shokolad", "Шоколадов десерт Millennium лешник и млечен шоколад", "0,00", "38", ""],
["", "shokoladov-desert-millennium-mlechen-shokolad-s-czyal-leshnik", "Шоколадов десерт Millennium млечен шоколад с цял лешник", "0,70", "40", ""],
["", "shokoladov-desert-millennium-tmen-shokolad-s-czyal-leshnik", "Шоколадов десерт Millennium тъмен шоколад с цял лешник", "0,70", "40", ""],
["", "karamelena-vafla-tago-tunkava-s-shokolad", "Карамелена вафла Таgo тункава с шоколад", "0,70", "50", ""],
["", "karamelena-vafla-tago", "Карамелена вафла Таgo", "0,70", "40", ""],
["", "soleti-velikovi", "Солети великови", "0,00", "55", ""],
["", "pomber-klasik", "Помбер класик", "0,70", "40", ""],
["", "drops-bonboni-sn-vishna", "Дропс бонбони С&Н вишна", "2,10", "200", ""],
["", "drops-bonboni-sn-plodov-miks", "Дропс бонбони С&Н плодов микс", "2,10", "200", ""],
["", "drops-bonboni-sn-gorski-plod", "Дропс бонбони С&Н горски плод", "2,10", "175", ""],
["", "drops-bonboni-sn-limon", "Дропс бонбони С&Н лимон", "2,10", "", ""],
["", "drops-bonboni-sn-portokal", "Дропс бонбони С&Н портокал", "2,10", "", ""],
["", "drops-bonboni-sn-bez-zakhar-vishna", "Дропс бонбони С&Н без захар вишна", "4,20", "175", ""],
["", "shokoladovi-bonboni-heidi-buket-tiramisu", "Шоколадови бонбони Heidi букет тирамису", "4,90", "120", ""],
["", "shokoladovi-bonboni-heidi-buket-leshnik", "Шоколадови бонбони Heidi букет лешник", "4,90", "120", ""],
["", "shokoladovi-bonboni-heidi-buket-vishna", "Шоколадови бонбони Heidi букет вишна", "4,90", "120", ""],
["", "shokoladovi-bonboni-mieszko-chocoladoro-gerber", "Шоколадови бонбони mieszko chocoladoro гербер", "2,80", "102", ""],
["", "shokoladovi-bonboni-mieszko-piyana-vishna", "Шоколадови бонбони mieszko пияна вишна", "2,80", "104", ""],
["", "bonboniera-roshen-chocolateria", "Бонбониера Roshen Chocolateria", "7,70", "256", ""],
["", "biskvitiera-mokate-asorti", "Бисквитиера MOKATE асорти", "3,50", "260", ""],
["", "biskvitiera-tago-asorti", "Бисквитиера TAGO асорти", "7,00", "240", ""],
["", "metalna-biskvitiera-biskviti-s-shokoladovi-parcheta", "Метална бисквитиера, бисквити с шоколадови парчета", "6,30", "454", ""],
["", "biskviti-borovecz-myusli-banan", "Бисквити Боровец мюсли банан", "0,70", "110", ""],
["", "biskviti-borovecz-myusli-yablka", "Бисквити Боровец мюсли ябълка", "0,70", "110", ""],
["", "biskviti-borovecz-myusli-portokal", "Бисквити Боровец мюсли  портокал", "0,70", "110", ""],
["", "biskviti-borovecz-myusli-chervena-borovinka", "Бисквити Боровец мюсли червена боровинка", "0,70", "110", ""],
["", "biskviti-borovecz-semena", "Бисквити Боровец семена", "0,70", "100", ""],
["", "biskviti-borovecz-tmen-shokolad", "Бисквити Боровец тъмен шоколад", "0,70", "100", ""],
["", "biskviti-borovecz-kokos", "Бисквити Боровец кокос", "0,70", "100", ""],
["", "biskviti-borovecz-karamel", "Бисквити Боровец карамел", "0,70", "100", ""],
["", "masleni-biskviti-sweet-plus", "Маслени бисквити Sweet plus", "1,40", "140", ""],
["", "biskviti-merba-chervena-borovinka-i-byal-shokolad", "Бисквити Merba червена боровинка и бял шоколад", "2,80", "150", ""],
["", "biskviti-kostlin-zakuska-chervena-borovinka", "Бисквити Kostlin закуска червена боровинка", "1,40", "160", ""],
["", "biskviti-sweet-plus-bez-zakhar-kokos", "Бисквити Sweet plus без захар кокос", "1,40", "100", ""],
["", "biskviti-sweet-plus-bez-zakhar-kakao", "Бисквити Sweet plus без захар какао", "1,40", "100", ""],
["", "biskviti-milka-kakaovi-s-shokoladov-plnezh", "Бисквити Milka Какаови с шоколадов пълнеж", "2,10", "", ""],
["", "biskviti-milka-vanilovi-s-shokoladov-plnezh", "Бисквити Milka ванилови с шоколадов пълнеж", "2,10", "156", ""],
["", "biskviti-milka-meki-tuknvani-s-shokoladov-plnezh", "Бисквити Milka меки, тукнвани с шоколадов пълнеж", "2,10", "150", ""],
["", "milka-brauni", "Milka брауни", "2,10", "150", ""],
["", "shokolad-milka", "Шоколад milka", "1,40", "100", ""],
["", "shokolad-heidi-dark-75-kakao", "Шоколад Heidi дарк 75% какао", "2,80", "65", ""],
["", "shokolad-heidi-dark", "Шоколад Heidi дарк", "2,10", "80", ""],
["", "kejk-napoleon", "Кейк Наполеон", "0,00", "90", ""],
["", "kejk-ideal", "Кейк ideal", "0,00", "90", ""],
["", "kejk-milkiss", "Кейк milkiss", "0,00", "50", ""],
["", "medena-pitka-zhelanie", "Медена питка желание", "0,00", "40", ""],
["", "akaov-linczer-zhelanie", "акаов линцер желание", "0,00", "60", ""],
["", "bejk-rols", "Бейк ролс", "0,70", "112", ""],
["", "kriczini-fedon", "Крицини Федон", "0,70", "120", ""],
["", "plnozrnesti-solenki-ss-susam", "Пълнозърнести соленки със сусам", "1,40", "180", ""],
["", "grizini-salza", "Гризини salza", "0,70", "", ""],
["", "krnch-zrnen", "Крънч зърнен", "0,70", "160", ""],
["", "kubeti-picza", "Кубети пица", "0,00", "35", ""],
["", "kubeti-stiks", "Кубети стикс", "0,00", "18", ""],
["", "lukcheta", "Лукчета", "0,70", "", ""],
["", "kroasan-patisserie-giga-leshnik", "Кроасан Patisserie гига лешник", "0,70", "180", ""],
["", "dvki-halls-drazhe", "Дъвки Halls драже", "0,00", "", ""],
["", "przhena-czarevicza-elit", "Пържена царевица Елит", "0,00", "80", ""],
["", "pechen-belen-fstk-elit", "Печен, белен фъстък Елит", "0,00", "80", ""],
["", "przhen-belen-fstk-elit", "Пържен, белен фъстък Елит", "0,00", "80", ""],
["", "biren-fstk-elit", "Бирен фъстък Елит", "0,00", "70", ""],
["", "fstk-pechen-elit", "Фъстък, печен Елит", "0,00", "70", ""],
["", "miks-luks-pecheni-yadki-elit", "Микс лукс печени ядки Елит", "2,10", "80", ""],
["", "miks-luks-pecheni-yadki-elit", "Микс лукс печени ядки Елит", "2,10", "70", ""],
["", "pecheno-kashu-elit", "Печено кашу Елит", "2,10", "70", ""],
["", "pechen-sham-fstk-elit", "Печен шам фъстък Елит", "2,80", "70", ""],
["", "pechen-leshnik-elit", "Печен лешник Елит", "2,10", "70", ""],
["", "pechen-badem-elit", "Печен бадем Елит", "2,10", "70", ""],
["", "surovo-kashu-elit", "Сурово кашу Елит", "2,10", "70", ""],
["", "surov-badem-elit", "Суров бадем Елит", "2,10", "70", ""]

            ]
        }', 
        'slug' => 'mr-fresh',
        'business_name' => 'Mr. Fresh',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6300',
        'address' => 'бул. България 152',
        'address_additional' => '',
        'coords_x' => '41.92981632',
        'coords_y' => '25.55790034',
        'phone' => '+359878716155',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "domati-s-mus-ot-sirena", "Домати с мус от сирена", "3,50", "300", ""],
["", "salata-ot-tikvichki-domati-i-moczarela", "Салата от тиквички, домати и моцарела", "3,50", "350", ""],
["", "czezar", "Цезар", "4,20", "350", ""],
["", "pstra-salata-s-pileshko-file", "Пъстра салата с пилешко филе", "4,20", "380", ""],
["", "ovcharska", "Овчарска", "3,50", "450", ""],
["", "zelena", "Зелена", "2,80", "300", ""],
["", "grczka", "Гръцка", "2,80", "380", ""],
["", "svezha-salata-ss-sino-sirene-i-borovinki", "Свежа салата със синьо сирене и боровинки", "4,90", "350", ""],
["", "cherveno-czveklo-yablka-i-morkov", "Червено цвекло, ябълка и морков", "2,80", "350", ""],
["", "shopska", "Шопска", "2,80", "350", ""],
["", "salata-ot-rukola-domati-i-moczarela", "Салата от рукола, домати и моцарела", "3,50", "350", ""]

            ],

            "Предястия и сандвичи": [
                ["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "1,40", "", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "zadusheni-domashni-kartofi-s-maslo-i-kopr", "Задушени домашни картофи с масло и копър", "2,10", "250", ""],
["", "zelenchuczi-na-bbq", "Зеленчуци на BBQ", "2,80", "200", ""],
["", "panirani-topeni-sirencza-ss-sladko-ot-borovinki", "Панирани топени сиренца със сладко от боровинки", "3,50", "250", ""],
["", "panirani-kashkavaleni-khapki", "Панирани кашкавалени хапки", "3,50", "250", ""],
["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "350", ""],
["", "zadusheni-presni-zelenchuczi", "Задушени пресни зеленчуци", "2,80", "250", ""],
["", "pileshki-flejki", "Пилешки флейки", "3,50", "250", ""],
["", "amerikanski-burger", "Американски бургер", "4,20", "350", ""],
["", "khapki-ot-svinsko-bon-file", "Хапки от свинско бон филе", "4,90", "250", ""],
["", "pikantni-pileshki-khapki-s-kitajski-sos", "Пикантни пилешки хапки с китайски сос", "4,90", "250", ""],
["", "czacza", "Цаца", "2,10", "150", ""]

            ],

            "pizza": [
                ["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "kalczone", "Калцоне", "3,50", "", ""],
["", "bianka", "Бианка", "3,50", "", ""],
["", "dzhovani", "Джовани", "3,50", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "3,50", "", ""],
["", "stiv", "Стив", "3,50", "", ""],
["", "peperoni", "Пеперони", "3,50", "", ""],
["", "margarita", "Маргарита", "2,10", "", ""]

            ],

            "Паста и Ризото": [
                ["", "taliyateli-s-pileshko", "Талиятели с пилешко", "4,20", "350", ""],
["", "taliyateli-ss-somga", "Талиятели със сьомга", "6,30", "350", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "400", ""],
["", "rizoto-s-gbi-i-bekon", "Ризото с гъби и бекон", "4,20", "400", ""],
["", "rizoto-s-pileshko", "Ризото с пилешко", "4,20", "400", ""],
["", "taliyateli-boloneze", "Tалиятели Болонезе", "4,20", "400", ""],
["", "taliyateli-karbonara", "Талиятели Карбонара", "4,20", "350", ""]

            ],

            "Основни ястия": [
                ["", "pile-kapreze", "Пиле Капрезе", "4,90", "400", ""],
["", "pileshki-skalopini", "Пилешки скалопини", "4,90", "", ""],
["", "pileshki-sach", "Пилешки сач", "5,60", "450", ""],
["", "krekhko-pileshko-file-s-topeno-sirene-i-zelenchuczi", "Крехко пилешко филе с топено сирене и зеленчуци", "5,60", "", ""],
["", "zapekanka-s-pileshko", "Запеканка с пилешко", "4,20", "450", ""],
["", "fish-end-chips-ss-sos-tartar", "Фиш енд чипс със сос тартар", "5,60", "350", ""],
["", "svinsko-bon-file-obvito-v-pushen-bekon", "Свинско бон филе обвито в пушен бекон", "6,30", "350", ""],
["", "zapecheni-kartofi-s-bekon", "Запечени картофи с бекон", "3,50", "350", ""],
["", "krekhko-svinsko-bon-file", "Крехко свинско бон филе", "5,60", "350", ""],
["", "svinsko-bon-file-plneno-s-topeno-sirene-i-podneseno-ss-zapecheni-kartofi-i-sos-barbekyu", "Свинско бон филе пълнено с топено сирене и поднесено със запечени картофи и сос барбекю", "5,60", "350", ""],
["", "somga-file-vrkhu-zelenukovo-kanape", "Сьомга филе върху зеленуково канапе", "9,10", "", ""],
["", "snezhno-pile", "Снежно пиле", "4,90", "350", ""],
["", "pileshko-s-presen-luk-lyuti-chushki-luk-kashu-i-oriz", "Пилешко с пресен лук, люти чушки, лук, кашу и ориз", "5,60", "", ""],
["", "pikantno-pileshko-s-kashu-i-oriz", "Пикантно пилешко с кашу и ориз", "4,90", "", ""]

            ],

            "BBQ": [
                ["", "svinski-rebrcza", "Свински ребърца", "4,90", "250", ""],
["", "domashen-surovo-pushen-teleshki-sudzhuk", "Домашен сурово пушен телешки суджук", "4,90", "400", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "250", ""],
["", "svinski-vrat", "Свински врат", "4,20", "250", ""],
["", "pstrva-1br", "Пъстърва (1бр", "4,20", "", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "", ""],
["", "chili-sos", "Чили сос", "0,00", "", ""],
["", "tartar-sos", "Тартар сос", "0,00", "", ""],
["", "ketchup-sos", "Кетчуп сос", "0,00", "", ""],
["", "majoneza-sos", "Майонеза сос", "0,00", "", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "", ""],
["", "tiramisu", "Тирамису", "1,40", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/928866.jpg?width=302"],
["", "coca-cola-cheresha", "Coca-Cola Череша", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/928867.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/928869.jpg?width=302"]

            ]
        }', 
        'slug' => 'restorant-stiv',
        'business_name' => 'Ресторант Stiv',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Александър Стамболийски 12',
        'address_additional' => '',
        'coords_x' => '43.40602399',
        'coords_y' => '23.22337082',
        'phone' => '+359898407081',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "tuna-rol-sushi-kioto-6-br---futomaki", "Туна рол суши киото (6 бр) - футомаки", "5,60", "", ""],
["", "inari-sushi-maczuyama-6br-khosomaki", "Инари суши мацуяма (6бр)-хосомаки", "4,90", "", ""],
["", "vedzhitabl-rol-sushi-okayama-4-br---uramaki", "Веджитабъл рол суши окаяма (4 бр) - урамаки", "4,90", "", ""],
["", "aburi-solomon-sushi-tokio-4-br---uramaki", "Абури соломон суши токио (4 бр) - урамаки", "4,90", "", ""],
["", "avokado-rol-sushi-okinava-6br-khosomaki", "Авокадо рол суши окинава (6бр)-хосомаки", "4,90", "", ""],
["", "smouk-salmon-rol-sushi-osaka-4br---uramaki", "Смоук салмон рол суши осака (4бр) - урамаки", "4,90", "", ""],
["", "yaki-saba-sushi-jokokhama-6-br---futomaki", "Яки саба суши йокохама (6 бр) - футомаки", "5,60", "", ""],
["", "ebimaio-rol-sushi-nagano-4-br---uramaki", "Ебимаио рол суши нагано (4 бр) - урамаки", "4,90", "", ""]

            ],

            "Суши сетове": [
                ["", "yaponiya-set", "Япония сет", "15,40", "", ""],
["", "izu-oshima-set", "Изу ошима сет", "10,50", "", ""],
["", "niidzhima-set", "Нииджима сет", "9,80", "", ""],
["", "okinava-set", "Окинава сет", "14,00", "", ""],
["", "khiroshima-set", "Хирошима сет", "20,30", "", ""]

            ]
        }', 
        'slug' => 'sushi-of-tokyo-montana',
        'business_name' => 'Sushi of Tokyo (Монтана)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3405',
        'address' => 'ул. Анастас Стоянов 18',
        'address_additional' => '',
        'coords_x' => '43.42232848',
        'coords_y' => '23.22224269',
        'phone' => '+359894450016',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-la-pikola", "Салата Ла Пикола", "4,20", "500", ""],
["", "salata-shopska", "Салата Шопска", "2,80", "500", ""],
["", "salata-kareolska", "Салата Кареолска", "3,50", "500", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "500", ""],
["", "makaronena-salata-s-bekon", "Макаронена салата с бекон", "3,50", "500", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "500", ""],
["", "makaronena-salata-s-rulcza-ot-raczi", "Макаронена салата с рулца от раци", "3,50", "500", ""],
["", "salata-tonno", "Салата Тонно", "3,50", "450", ""],
["", "salata-frenska", "Салата Френска", "2,80", "500", ""]

            ],

            "Картофени изкушения": [
                ["", "klasik", "Класик", "1,40", "200", ""]

            ],

            "pasta": [
                ["", "spageti-la-pikola", "Спагети Ла Пикола", "4,90", "500", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "500", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "500", ""],
["", "spageti-popaj", "Спагети Попай", "4,20", "500", ""],
["", "spageti-vegetariana", "Спагети Вегетариана", "4,20", "500", ""],
["", "spageti-khavaj", "Спагети Хавай", "4,90", "500", ""],
["", "spageti-tono", "Спагети Тоно", "4,90", "500", ""],
["", "spageti-kuatro-formadzho-luks", "Спагети Куатро Формаджо лукс", "5,60", "500", ""],
["", "spageti-verona", "Спагети Верона", "4,20", "500", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-roma", "Запеканка Рома", "3,50", "450", ""],
["", "zapekanka-ss-sirene", "Запеканка със сирене", "3,50", "450", ""],
["", "zapekanka-s-shunka", "Запеканка с шунка", "3,50", "450", ""],
["", "zapekanka-sicziliya", "Запеканка Сицилия", "3,50", "450", ""],
["", "zapekanka-gradinarska", "Запеканка Градинарска", "3,50", "450", ""],
["", "zapekanka-byagashho-pile", "Запеканка Бягащо пиле", "3,50", "450", ""]

            ],

            "risotto": [
                ["", "rizoto-ss-smetana-i-sirene", "Ризото със сметана и сирене", "4,20", "450", ""],
["", "rizoto-ss-spanak-i-zelenchuczi", "Ризото със спанак и зеленчуци", "3,50", "450", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "4,20", "450", ""],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "4,90", "450", ""]

            ],

            "pizza": [
                ["", "parneta", "Парнета", "2,80", "", ""],
["", "polo", "Поло", "2,80", "", ""],
["", "bekonita", "Беконита", "2,80", "", ""],
["", "sicziliana", "Сицилиана", "2,80", "", ""],
["", "mariana", "Мариана", "2,80", "", ""],
["", "ajda", "Айда", "2,80", "", ""],
["", "kalczone", "Калцоне", "2,80", "", ""],
["", "brza-picza", "Бърза пица", "2,80", "", ""]

            ],

            "Пици Де Лукс": [
                ["", "kuatro-formadzhi", "Куатро Формаджи", "3,50", "", ""],
["", "santa-mariya", "Санта Мария", "2,80", "", ""],
["", "khavaj", "Хавай", "2,80", "", ""],
["", "peperone", "Пепероне", "2,80", "", ""],
["", "lupo", "Лупо", "3,50", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "3,50", "", ""],
["", "tono", "Тоно", "2,80", "", ""],
["", "salsiche", "Салсиче", "2,80", "", ""],
["", "snrajs", "Сънрайс", "2,80", "", ""],
["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "4,90", "", ""]

            ],

            "Вегетариански пици": [
                ["", "fungi", "Фунги", "2,80", "", ""],
["", "popaj", "Попай", "2,80", "", ""],
["", "kapreze", "Капрезе", "3,50", "", ""],
["", "gradinska", "Градинска", "2,80", "", ""],
["", "spanachena", "Спаначена", "2,80", "", ""],
["", "margarita", "Маргарита", "2,80", "", ""]

            ],

            "Нови пици": [
                ["", "picza-s-kartofi-bekon-yajcze-sirene-presen-domat-i-smetana", "Пица с картофи, бекон, яйце, сирене, пресен домат и сметана", "3,50", "", ""],
["", "picza-maksi", "Пица Макси", "2,80", "", ""],
["", "picza-venecziya", "Пица Венеция", "2,80", "", ""],
["", "picza-bolonya", "Пица Болоня", "2,80", "", ""]

            ],

            "Семейни пици": [
                ["", "brza", "Бърза", "14,70", "", ""],
["", "bekonita", "Беконита", "14,70", "", ""],
["", "polo", "Поло", "14,70", "", ""],
["", "mariana", "Мариана", "14,70", "", ""],
["", "kaprichoza", "Капричоза", "16,80", "", ""],
["", "salsiche", "Салсиче", "16,80", "", ""],
["", "parneta", "Парнета", "17,50", "", ""],
["", "kalczone", "Калцоне", "18,90", "", ""]

            ],

            "Добавки и сосове": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "40", ""],
["", "frenski-sos", "Френски сос", "0,00", "40", ""],
["", "tartar", "Тартар", "0,00", "40", ""],
["", "proshuto", "Прошуто", "2,10", "50", ""],
["", "mesni", "Месни", "0,70", "50", ""],
["", "moczarela", "Моцарела", "0,70", "50", ""],
["", "sirene", "Сирене", "0,00", "50", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "50", ""],
["", "parmezan", "Пармезан", "0,70", "50", ""],
["", "zelenchuczi", "Зеленчуци", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "40", ""],
["", "majoneza", "Майонеза", "0,00", "40", ""],
["", "chili", "Чили", "0,00", "40", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "1,40", "100", ""]

            ],

            "desserts": [
                ["", "shoko-picza", "Шоко пица", "2,10", "", ""],
["", "palachinka", "Палачинка", "1,40", "", ""]

            ],

            "Хлебчета": [
                ["", "chesnovo-khlebche", "Чесново хлебче", "0,70", "170", ""],
["", "chesnovo-khlebche-s-kashkaval", "Чесново хлебче с кашкавал", "0,70", "230", ""],
["", "chesnovo-khlebche-s-kashkaval-i-sirene", "Чесново хлебче с кашкавал и сирене", "1,40", "280", ""]

            ],

            "drinks": [
                ["", "koka-kola", "Кока кола", "1,40", "", ""]

            ]
        }', 
        'slug' => 'la-piccola-pizzeria',
        'business_name' => 'La Piccola Pizzeria',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'бул. Цар Борис III 17',
        'address_additional' => '',
        'coords_x' => '43.40610564',
        'coords_y' => '23.22205586',
        'phone' => '+359884440220',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Основни ястия": [
                ["", "princzesi-s-kajma-i-kashkaval", "Принцеси с кайма и кашкавал", "2,10", "350", ""],
["", "frenski-sandvich-krok-mosyu", "Френски сандвич Крок Мосю", "2,80", "450", ""],
["", "sandvich-vegetariano", "Сандвич вегетариано", "3,50", "450", ""],
["", "the-corner-club-sandwich", "The Corner club sandwich", "4,90", "450", ""],
["", "tortilya-khrupkavo-kornflejks-pile", "Тортиля хрупкаво корнфлейкс пиле", "3,50", "400", ""],
["", "premium-burger", "Премиум Бургер", "5,60", "350", ""],
["", "babini-kyuftencza", "Бабини кюфтенца", "4,20", "400", ""],
["", "pstrva-ss-zelenchuczi-na-gril", "Пъстърва със зеленчуци на грил", "6,30", "400", ""],
["", "pstrva-ss-zapecheni-kartofi", "Пъстърва със запечени картофи", "6,30", "400", ""],
["", "pileshki-prchiczi-s-przheni-kartofi", "Пилешки пръчици с пържени картофи", "4,90", "450", ""],
["", "svinska-vratna-przhola-s-grilovani-zelenchuczi", "Свинска вратна пържола с гриловани зеленчуци", "5,60", "350", ""],
["", "pileshko-file-s-grilovani-zelenchuczi", "Пилешко филе с гриловани зеленчуци", "5,60", "350", ""],
["", "pileshka-przhola-ot-but-s-kartofi-uedzhis", "Пилешка пържола от бут с картофи уеджис", "5,60", "350", ""],
["", "pile-giros", "Пиле гирос", "3,50", "400", ""],
["", "przhen-safrid", "Пържен сафрид", "2,80", "300", ""],
["", "przhena-czacza", "Пържена цаца", "2,10", "300", ""],
["", "nachos", "Начос", "6,30", "500", ""]

            ],

            "starters": [
                ["", "kartofi-uedzhis", "Картофи уеджис", "2,10", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "250", ""],
["", "domashen-chips", "Домашен чипс", "2,10", "200", ""],
["", "khumus-s-grczka-pitka", "Хумус с гръцка питка", "3,50", "350", ""],
["", "trio-razyadki-s-grczka-pitka", "Трио разядки с гръцка питка", "3,50", "430", ""],
["", "zelenchuczi-na-gril", "Зеленчуци на грил", "3,50", "400", ""],
["", "tikvichki-panko", "Тиквички панко", "4,90", "250", ""],
["", "lucheni-krgcheta-s-mlechen-sos", "Лучени кръгчета с млечен сос", "2,10", "250", ""],
["", "moczareleni-prchiczi", "Моцарелени пръчици", "3,50", "250", ""],
["", "panirani-pusheni-sirencza", "Панирани пушени сиренца", "4,90", "250", ""]

            ],

            "pasta": [
                ["", "pasta-karbonara", "Паста Карбонара", "5,60", "350", ""],
["", "pasta-boloneze", "Паста Болонезе", "5,60", "500", ""]

            ],

            "salads": [
                ["", "spanak-s-kinoa", "Спанак с киноа", "3,50", "400", ""],
["", "burata-s-avokado", "Бурата с авокадо", "3,50", "400", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "450", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "shopska-salata-s-kinoa", "Шопска салата с киноа", "3,50", "450", ""],
["", "salata-riba-ton-i-nakhut", "Салата риба тон и нахут", "3,50", "450", ""],
["", "gril-salata", "Грил салата", "3,50", "450", ""]

            ],

            "soups": [
                ["", "krem-supa-ot-somga-i-skaridi", "Крем супа от сьомга и скариди", "2,10", "400", ""],
["", "krem-supa-ot-gbi", "Крем супа от гъби", "0,70", "400", ""]

            ],

            "bread": [
                ["", "byal-zemel", "Бял земел", "0,00", "", ""],
["", "plnozrnest-zemel", "Пълнозърнест земел", "0,00", "", ""],
["", "grczka-pitka-byala", "Гърцка питка бяла", "0,70", "", ""],
["", "grczka-pitka-czarevichna", "Гърцка питка царевична", "0,70", "", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "150", ""],
["", "shokoladovo-brauni", "Шоколадово брауни", "2,10", "250", ""],
["", "mus-tmen-shokolad", "Мус тъмен шоколад", "1,40", "130", ""],
["", "mus-byal-shokolad", "Мус бял шоколад", "1,40", "130", ""],
["", "gofreta-s-shokolad", "Гофрета с шоколад", "3,50", "300", ""],
["", "gofreta-s-gorski-plodove", "Гофрета с горски плодове", "3,50", "300", ""]

            ],

            "Лимонади": [
                ["", "czitronada", "Цитронада", "1,40", "", ""],
["", "oranzhada", "Оранжада", "1,40", "", ""],
["", "borovinka-i-mango", "Боровинка и манго", "2,10", "", ""],
["", "yagoda-s-menta", "Ягода с мента", "2,10", "", ""],
["", "malina-s-menta", "Малина с мента", "2,10", "", ""]

            ],

            "Домашни лимонади": [
                ["", "malina-s-menta", "Малина с мента", "2,10", "", ""],
["", "borovinka-i-mango", "Боровинка и манго", "2,10", "", ""],
["", "yagoda-s-menta", "Ягода с мента", "2,10", "", ""]

            ],

            "Безалкохолни напитки": [
                ["", "mineralna-voda-devin", "Минерална вода Девин", "0,70", "", ""],
["", "pepsi", "Пепси", "0,70", "330", ""],
["", "pepsi-max", "Пепси MAX", "0,70", "330", ""],
["", "pepsi-twist", "Пепси Twist", "0,70", "330", ""],
["", "mirinda-portokal", "Миринда Портокал", "0,70", "330", ""],
["", "7up", "7up", "0,70", "330", ""],
["", "energijna-napitka-red-bull", "Енергийна напитка Red Bull", "2,10", "250", ""],
["", "energijna-napitka-black", "Енергийна напитка Black", "0,70", "250", ""],
["", "ajryan", "Айрян", "0,70", "300", ""],
["", "studen-chaj-lipton-praskova", "Студен чай Lipton праскова", "0,70", "250", ""]

            ],

            "Фрешове": [
                ["", "portokal", "Портокал", "1,40", "250", ""],
["", "grejpfrut", "Грейпфрут", "1,40", "250", ""],
["", "yablka", "Ябълка", "1,40", "250", ""],
["", "morkov", "Морков", "1,40", "250", ""],
["", "yablka-i-morkov", "Ябълка и морков", "1,40", "250", ""],
["", "portokal-i-grejpfrut", "Портокал и грейпфрут", "1,40", "250", ""],
["", "dinya", "Диня", "1,40", "250", ""]

            ]
        }', 
        'slug' => 'the-corner-montana',
        'business_name' => 'The Corner (Монтана)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3403',
        'address' => 'ул. Върбан Пенов 1',
        'address_additional' => '',
        'coords_x' => '43.4002286',
        'coords_y' => '23.2358404',
        'phone' => '+359882470341',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "italiya", "Италия", "7,00", "", ""],
["", "napoli", "Наполи", "7,00", "", ""],
["", "peperoni", "Пеперони", "7,00", "", ""],
["", "proshuto-e-fungi", "Прошуто е фунги", "7,00", "", ""],
["", "dyavola", "Дявола", "8,40", "", ""],
["", "salami", "Салами", "8,40", "", ""],
["", "proshuto", "Прошуто", "7,70", "", ""],
["", "vegetariana", "Вегетариана", "7,00", "", ""],
["", "margarita", "Маргарита", "5,60", "", ""],
["", "formadzhi", "Формаджи", "7,70", "", ""]

            ]
        }', 
        'slug' => 'vkust-na-italiya',
        'business_name' => 'Вкусът на Италия',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Анастас Стоянов 18',
        'address_additional' => '',
        'coords_x' => '43.42227768',
        'coords_y' => '23.22236123',
        'phone' => '+359894450016',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "pile-s-oriz", "Пиле с ориз", "2,10", "400", ""]

            ],

            "salads": [
                ["", "zele-s-morkovi", "Зеле с моркови", "2,10", "", ""],
["", "vareni-kartofi", "Варени картофи", "2,10", "", ""],
["", "sladka-turshiya", "Сладка туршия", "2,10", "", ""],
["", "salata-tabule", "Салата Табуле", "0,70", "", ""],
["", "salata-domati-i-krastaviczi", "Салата домати и краставици", "2,80", "", ""],
["", "mlechna-salata", "Млечна салата", "0,70", "", ""],
["", "katk-s-chushka-i-sirene", "Катък с чушка и сирене", "0,70", "", ""],
["", "zelena-salata", "Зелена салата", "2,10", "", ""],
["", "shopska-salata", "Шопска салата", "2,80", "", ""],
["", "bob-s-lyutenicza", "Боб с лютеница", "0,70", "", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "2,80", "", ""]

            ],

            "soups": [
                ["", "supa-topcheta", "Супа топчета", "1,40", "", ""],
["", "teleshka-supa-3-v-1", "Телешка супа 3 в 1", "2,10", "1", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "1,40", "", ""],
["", "agneshka-drob-chorba", "Агнешка дроб чорба", "1,40", "", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "", ""],
["", "bob-chorba", "Боб чорба", "0,70", "", ""],
["", "leshha", "Леща", "0,70", "", ""],
["", "khlyam-s-limecz", "Хлям с лимец", "0,70", "", ""],
["", "tarator", "Таратор", "0,70", "", ""],
["", "mlechna-pitka", "Млечна питка", "0,70", "", ""],
["", "khlyab-na-peshh", "Хляб на пещ", "0,00", "", ""],
["", "khlebche-s-girosovo-brashno", "Хлебче с гиросово брашно", "0,00", "", ""]

            ],

            "alaminuti": [
                ["", "shniczel", "Шницел", "2,10", "", ""],
["", "svinsko-przheno-kyufte", "Свинско пържено кюфте", "0,70", "800", ""],
["", "kartofeno-kyufte-s-pileshko", "Картофено кюфте с пилешко", "0,70", "", ""],
["", "chushka-byurek", "Чушка бюрек", "1,40", "", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "0,70", "", ""],
["", "teleshko-przheno-kyufte", "Телешко пържено кюфте", "0,70", "80", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "1,40", "", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,10", "100", ""],
["", "spanacheno-kyufte", "Спаначено кюфте", "0,70", "", ""],
["", "tikvichka-byurek", "Тиквичка бюрек", "0,70", "", ""]

            ],

            "Основни ястия": [
                ["", "pile-s-oriz", "Пиле с ориз", "2,10", "350", ""],
["", "agneshko-pecheno", "Агнешко печено", "7,70", "500", ""],
["", "teleshko-s-oriz", "Телешко с ориз", "3,50", "350", ""],
["", "svinski-dzholan-na-furna", "Свински джолан на фурна", "4,20", "", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "svinska-przhola", "Свинска пържола", "4,20", "200", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "teleshko-kyufte", "Телешко кюфте", "0,70", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "teleshka-nadenicza", "Телешка наденица", "1,40", "", ""]

            ],

            "Млечни продукти": [
                ["", "ovche-kiselo-mlyako", "Овче кисело мляко", "0,70", "300", ""],
["", "ovche-kiselo-mlyako", "Овче кисело мляко", "1,40", "500", ""],
["", "ovche-sirene", "Овче сирене", "9,10", "", ""],
["", "ovche-katk", "Овче катък", "4,20", "500", ""],
["", "ovche-kashkaval", "Овче кашкавал", "18,90", "", ""]

            ],

            "desserts": [
                ["", "domashna-torta", "Домашна торта", "2,10", "", ""],
["", "chijzkejk-s-borovinka", "Чийзкейк с боровинка", "2,10", "", ""],
["", "portokalov-chijzkejk", "Портокалов чийзкейк", "2,80", "", ""],
["", "torta-izkushenie", "Торта Изкушение", "2,80", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "", ""],
["", "torta-fantaziya", "Торта Фантазия", "2,80", "", ""],
["", "shokoladov-desert", "Шоколадов десерт", "1,40", "", ""],
["", "plodova-krem-pita-s-banan", "Плодова крем пита с банан", "2,80", "", ""],
["", "shokoladova-torta-s-biskviti", "Шоколадова торта с бисквити", "2,80", "", ""],
["", "revane", "Реване", "0,70", "", ""],
["", "morkovena-torta", "Морковена торта", "2,10", "", ""],
["", "orekhova-torta", "Орехова торта", "2,80", "", ""]

            ]
        }', 
        'slug' => 'hrana-za-vkshchi-peshchite',
        'business_name' => 'Храна за вкъщи Пещите',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6303',
        'address' => 'бул. Георги С. Раковски 27',
        'address_additional' => '',
        'coords_x' => '41.9411445',
        'coords_y' => '25.55445178',
        'phone' => '+359888970777',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "klub-sandvich-regular", "Клуб сандвич Regular", "4,20", "", ""],
["", "klub-sandvich-s-riba-ton", "Клуб сандвич с риба тон", "4,90", "", ""],
["", "amerikanski-chijzburger", "Американски чийзбургер", "4,90", "", ""]

            ],

            "Гирос": [
                ["", "pileshki-giros", "Пилешки Гирос", "3,50", "", ""],
["", "giras-s-riba-ton", "Гирас с риба тон", "4,20", "", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,80", "", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "350", ""],
["", "salata-s-beleni-domati", "Салата с белени домати", "3,50", "350", ""],
["", "katk-s-pecheni-chushki", "Катък с печени чушки", "2,80", "250", ""],
["", "tikvichki-s-kiselo-mlyako", "Тиквички с кисело мляко", "2,80", "350", ""],
["", "zeleva-salata-s-morkovi", "Зелева салата с моркови", "2,10", "", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "2,80", "", ""],
["", "domati-s-moczarela", "Домати с моцарела", "3,50", "", ""],
["", "shiler", "Шилер", "3,50", "", ""]

            ],

            "Пърленки": [
                ["", "prlenka-s-lukanka-i-kashkaval", "Пърленка с луканка и кашкавал", "1,40", "", ""],
["", "prlenka-s-file-i-kashkaval", "Пърленка с филе и кашкавал", "0,70", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "", ""],
["", "dizajnerska-picza-po-vash-izbor", "Дизайнерска пица по ваш избор", "4,20", "", ""],
["", "prlenka-s-bekon-i-kashkaval", "Пърленка с бекон и кашкавал", "1,40", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "", ""],
["", "prepechena-filiya", "Препечена филия", "0,00", "", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "0,00", "", ""],
["", "prlenka-s-lukanka-i-kashkaval", "Пърленка с луканка и кашкавал", "1,40", "", ""]

            ],

            "Топли предястия": [
                ["", "rizoto-s-pile-i-gbi", "Ризото с пиле и гъби", "3,50", "450", ""],
["", "kashkaval-pane-na-khapki", "Кашкавал пане на хапки", "3,50", "200", ""],
["", "sirene-na-khapki-200gr0", "Сирене на хапки (200гр0", "2,80", "", ""],
["", "topeno-sirene-pane", "Топено сирене пане", "2,80", "200", ""],
["", "topeno-sirene-prezident-ss-sladko", "Топено сирене Президент със сладко", "4,20", "", ""],
["", "pileshki-flejki-khapki", "Пилешки флейки хапки", "3,50", "200", ""],
["", "vodenichki", "Воденички", "2,80", "200", ""],
["", "srchicza-v-maslo", "Сърчица в масло", "3,50", "200", ""],
["", "kartofi-sore", "Картофи соре", "2,10", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,10", "200", ""],
["", "domashni-kartofi", "Домашни картофи", "2,10", "", ""],
["", "domashni-kartofi-ss-sirene", "Домашни картофи със сирене", "2,10", "", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "5,60", "150", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "200", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "2,80", "", ""]

            ],

            "alaminuti": [
                ["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "", ""],
["", "omlet-asorti", "Омлет Асорти", "2,80", "", ""],
["", "mish-mash", "Миш Маш", "2,80", "", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,80", "", ""]

            ],

            "Гювечета": [
                ["", "sirene-po-shopski-250gr0", "Сирене по шопски (250гр0", "2,80", "", ""],
["", "gyuveche-starata-loza", "Гювече Старата Лоза", "4,20", "350", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,20", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "3,50", "", ""]

            ],

            "Болярски сач": [
                ["", "kombo-za-chetirima", "Комбо за Четирима", "16,10", "1400", ""]

            ],

            "fish": [
                ["", "przhena-pstrva-na-skara", "Пържена Пъстърва на скара", "5,60", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "9,10", "400", ""],
["", "skumriya-na-skara", "Скумрия на скара", "3,50", "300", ""],
["", "khek-pane", "Хек пане", "3,50", "300", ""],
["", "rulcza-ot-raczi-pane", "Рулца от раци пане", "2,80", "", ""],
["", "kalmari-pane", "Калмари пане", "6,30", "150", ""],
["", "czacza", "Цаца", "2,10", "200", ""],
["", "sharan", "Шаран", "5,60", "", ""]

            ],

            "barbecue": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "250", ""],
["", "pileshko-shishche-120gr0", "Пилешко шишче (120гр0", "1,40", "", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "120", ""],
["", "kyufte", "Кюфте", "0,70", "90", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "cherva", "Черва", "2,80", "300", ""],
["", "svinski-cheren-drob", "Свински черен дроб", "2,80", "400", ""],
["", "svinski-karencza", "Свински каренца", "5,60", "300", ""],
["", "svinski-rebrcza-na-skara", "Свински ребърца на скара", "4,90", "400", ""],
["", "pikanten-kukerski-shashlik", "Пикантен кукерски шашлик", "2,80", "200", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "4,20", "350", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "4,20", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "", ""],
["", "teleshko-kyufte", "Телешко кюфте", "1,40", "", ""],
["", "teleshki-sudzhuk", "Телешки суджук", "3,50", "", ""],
["", "teleshki-medaloni", "Телешки медальони", "5,60", "", ""]

            ],

            "pan": [
                ["", "pikepko-file-s-gben-sos", "Пикепко филе с гъбен сос", "4,90", "", ""],
["", "przheni-krilcza", "Пържени крилца", "3,50", "", ""],
["", "svinski-kareta-s-gben-sos-i-topeno-sirene", "Свински карета с гъбен сос и топено сирене", "5,60", "", ""],
["", "teleshki-medaloni-tigan", "Телешки медальони тиган", "5,60", "250", ""],
["", "teleshki-medaloni-s-gben-sos-i-topeno-sirene", "Телешки медальони с гъбен сос и топено сирене", "7,00", "300", ""],
["", "teleshki-sudzhuk-na-tigan", "Телешки суджук на тиган", "3,50", "200", ""]

            ],

            "bread": [
                ["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "", ""],
["", "prlenka-s-shunka-i-kashkaval", "Пърленка с шунка и кашкавал", "0,70", "", ""],
["", "prlenka-s-lukanka-i-kashkaval", "Пърленка с луканка и кашкавал", "1,40", "", ""]

            ],

            "garnish": [
                ["", "lyatna", "Лятна", "1,40", "", ""],
["", "zimna", "Зимна", "0,70", "", ""],
["", "topla", "Топла", "1,40", "", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "", ""],
["", "kartofi-s-luk", "Картофи с лук", "1,40", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "chesnov", "Чеснов", "0,00", "", ""],
["", "barbekyu", "Барбекю", "0,00", "", ""],
["", "chili", "Чили", "0,00", "", ""],
["", "limon", "Лимон", "0,70", "", ""],
["", "zekhtin", "Зехтин", "0,00", "", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "", ""],
["", "amerikanski-gofreti", "Американски гофрети", "1,40", "", ""],
["", "amerikanska-gofreta", "Американска гофрета", "1,40", "", ""]

            ]
        }', 
        'slug' => 'starata-loza',
        'business_name' => 'Старата Лоза',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'До Хотел Монтана',
        'address_additional' => '',
        'coords_x' => '43.4119329',
        'coords_y' => '23.2267159',
        'phone' => '+359878778805',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-posejdon", "Салата Посейдон", "6,30", "500", ""],
["", "klasicheska-grczka-salata", "Класическа гръцка салата", "5,60", "400", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "400", ""],
["", "salata-dzadziki", "Салата Дзадзики", "4,20", "300", ""],
["", "salata-s-pechen-patladzhan-chushka-i-sirene", "Салата с печен патладжан, чушка и сирене", "6,30", "400", ""],
["", "shopska-salata", "Шопска салата", "4,20", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "400", ""],
["", "salata-kale", "Салата Кале", "6,30", "400", ""],
["", "salata-del-mare", "Салата Дел Маре", "6,30", "400", ""],
["", "salata-midi-s-luk", "Салата миди с лук", "4,90", "300", ""],
["", "beleni-rozovi-domati-s-domashno-bivolsko-sirene-pesto-i-kedrovi-yadki", "Белени розови домати с домашно биволско сирене, песто и кедрови ядки", "6,30", "400", ""],
["", "miks-ot-svezhi-salati-s-khrupkavo-file-ot-treska", "Микс от свежи салати с хрупкаво филе от треска", "5,60", "500", ""],
["", "salata-amulet", "Салата Амулет", "5,60", "500", ""],
["", "proletna-salata", "Пролетна салата", "4,20", "400", ""]

            ],

            "appetizer": [
                ["", "tarama", "Тарама", "2,80", "300", ""],
["", "maslinova-pasta", "Маслинова паста", "2,80", "300", ""],
["", "domashno-kopoolu", "Домашно кьопоолу", "2,80", "300", ""],
["", "set-ot-razyadki", "Сет от разядки", "5,60", "600", ""],
["", "khumus", "Хумус", "2,80", "300", ""],
["", "tirokafteri", "Тирокафтери", "2,80", "300", ""],
["", "pushena-somga", "Пушена сьомга", "7,70", "150", ""]

            ],

            "Топли предястия": [
                ["", "pileshki-bon-filencza-panirani-s-parmidzhano-redzhano-i-leko-sladko-lyutiv-sos", "Пилешки бон филенца панирани с Пармиджано Реджано и леко сладко лютив сос", "5,60", "300", ""],
["", "zapecheno-koze-sirene-ribler", "Запечено козе сирене Риблер", "5,60", "250", ""],
["", "kalmari", "Калмари", "7,70", "300", ""],
["", "kartofki-uedzhis", "Картофки Уеджис", "2,80", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "350", ""],
["", "pileshki-filencza-s-bademova-korichka-i-mlechen-sos", "Пилешки филенца с бадемова коричка и млечен сос", "5,60", "300", ""],
["", "oktopod-stefado", "Октопод Стефадо", "20,30", "250", ""],
["", "oktopod-po-siczilianski", "Октопод по сицилиански", "17,50", "350", ""],
["", "plnen-kalmar-na-plocha", "Пълнен калмар на плоча", "8,40", "300", ""],
["", "moczarela-s-khrupkava-korichka-i-sladko-ot-borovinki", "Моцарела с хрупкава коричка и сладко от боровинки", "5,60", "250", ""],
["", "beleni-skaridi-s-maslo-kopr-i-chesn", "Белени скариди с масло, копър и чесън", "9,10", "200", ""],
["", "midi-yadka-s-maslo-chesn-i-kopr", "Миди ядка с масло, чесън и копър", "5,60", "200", ""],
["", "midi-yadka-s-domatena-pasta-sirene-bilkovo-pesto", "Миди ядка с доматена паста, сирене, билково песто", "6,30", "300", ""],
["", "midi-s-cherupki-po-nesebrski", "Миди с черупки по несебърски", "4,90", "600", ""]

            ],

            "pasta": [
                ["", "spageti-boloneze", "Спагети Болонезе", "4,90", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "350", ""],
["", "pene-arabiata", "Пене Арабиата", "4,90", "350", ""],
["", "spageti-morski-dar", "Спагети Морски дар", "6,30", "350", ""]

            ],

            "Прясна риба": [
                ["", "somga-s-presni-zeleni-asperzhi", "Сьомга с пресни зелени аспержи", "11,90", "400", ""],
["", "pstrva-na-plocha", "Пъстърва на плоча", "6,30", "", ""],
["", "lavrak-ili-czipura-s-pecheni-zelenchuczi", "Лаврак или ципура с печени зеленчуци", "7,70", "", ""],
["", "gavros-przhen", "Гаврос пържен", "5,60", "300", ""],
["", "chernokop-na-plocha", "Чернокоп на плоча", "6,30", "300", ""],
["", "safrid", "Сафрид", "4,90", "300", ""],
["", "palamud", "Паламуд", "7,70", "", ""],
["", "nilski-kostur", "Нилски костур", "7,00", "300", ""],
["", "file-ot-tolstolob", "Филе от толстолоб", "5,60", "500", ""],
["", "som", "Сом", "9,80", "500", ""],
["", "byala-riba", "Бяла риба", "7,70", "500", ""],
["", "sharan-kotlet", "Шаран котлет", "6,30", "500", ""],
["", "file-ot-lavrak", "Филе от лаврак", "9,10", "400", ""],
["", "file-ot-czipura", "Филе от ципура", "9,10", "400", ""],
["", "przhen-vatos-s-kartofi-sote", "Пържен ватос с картофи соте", "7,70", "400", ""],
["", "riba-v-sol", "Риба в сол", "13,30", "", ""],
["", "kalkan-przhen-ili-na-skara", "Калкан пържен или на скара", "16,80", "500", ""],
["", "file-ot-fagri", "Филе от фагри", "16,10", "500", ""],
["", "fagri-v-plik", "Фагри в плик", "15,40", "500", ""],
["", "file-ot-somgova-pstrva", "Филе от сьомгова пъстърва", "9,10", "500", ""],
["", "fagri-na-plocha", "Фагри на плоча", "14,70", "500", ""],
["", "kotlet-ot-esetra", "Котлет от есетра", "9,80", "500", ""],
["", "riben-shish-kebap", "Рибен шиш-кебап", "9,10", "500", ""],
["", "bireno-meze", "Бирено мезе", "15,40", "800", ""],
["", "barbun-przhen", "Барбун пържен", "6,30", "400", ""],
["", "file-ot-esetra", "Филе от есетра", "10,50", "500", ""],
["", "zargan", "Зарган", "11,20", "600", ""],
["", "sharanovi-yadki", "Шаранови ядки", "3,50", "300", ""],
["", "skaridi-saganaki", "Скариди Саганаки", "9,80", "300", ""],
["", "khrupkavo-file-ot-byala-riba", "Хрупкаво филе от бяла риба", "9,80", "500", ""],
["", "sardina-na-plocha", "Сардина на плоча", "4,20", "350", ""],
["", "sharan", "Шаран", "10,50", "", ""]

            ],

            "grill": [
                ["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""],
["", "svinsko-bon-file", "Свинско бон филе", "5,60", "250", ""],
["", "teleshki-karencza", "Телешки каренца", "12,60", "250", ""],
["", "teleshki-kyufteta", "Телешки кюфтета", "7,00", "300", ""],
["", "teleshki-kebapcheta", "Телешки кебапчета", "7,00", "300", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,70", "80", ""],
["", "gorchicza", "Горчица", "0,70", "80", ""],
["", "mlechno-majonezen-sos", "Млечно-майонезен сос", "0,70", "80", ""],
["", "majoneza", "Майонеза", "0,70", "80", ""]

            ],

            "bread": [
                ["", "grczka-pitka", "Гръцка питка", "0,70", "", ""],
["", "khlyab---filijka", "Хляб - филийка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "krem-maskarpone", "Крем Маскарпоне", "3,50", "250", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "4,20", "150", ""],
["", "yablkov-tart", "Ябълков тарт", "3,50", "", ""],
["", "oreo", "Орео", "3,50", "280", ""]

            ]
        }', 
        'slug' => 'riben-restorant-poseydon',
        'business_name' => 'Рибен ресторант Посейдон',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6305',
        'address' => 'ул. Перущица',
        'address_additional' => '',
        'coords_x' => '41.93124728',
        'coords_y' => '25.5117129',
        'phone' => '+359893690369',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "ovcharska-salata", "Овчарска салата", "6,30", "420", ""],
["", "grczka-salata", "Гръцка салата", "4,90", "350", ""],
["", "domati-s-borata", "Домати с бората", "7,70", "300", ""],
["", "balkanska-salata", "Балканска салата", "4,90", "350", ""],
["", "salata-s-riba-ton", "Салата с риба тон", "7,70", "350", ""],
["", "zelena-salata", "Зелена салата", "3,50", "300", ""],
["", "salata-snezhanka", "Салата Снежанка", "3,50", "240", ""],
["", "marinovani-lyuti-chushleta", "Мариновани Люти чушлета", "2,10", "50", ""],
["", "salata-morski-dar", "Салата морски дар", "8,40", "300", ""],
["", "asorti-salati", "Асорти салати", "7,00", "300", ""]

            ],

            "Топли предястия": [
                ["", "khrupkavi-pileshki-flejki-s-kornflejks", "Хрупкави пилешки флейки с корнфлейкс", "5,60", "250", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "5,60", "250", ""],
["", "panirani-kashkavaleni-khapki", "Панирани кашкавалени хапки", "5,60", "200", ""],
["", "panirani-topeni-sirencza-ss-sladko", "Панирани топени сиренца със сладко", "5,60", "200", ""],
["", "brokoli-v-sino-sirene", "Броколи в синьо сирене", "5,60", "350", ""],
["", "teleshki-ezik-s-praz-luk---pikanten", "Телешки език с праз лук - пикантен", "9,10", "200", ""]

            ],

            "Прясна Италианска паста": [
                ["", "boloneze", "Болонезе", "5,60", "350", ""],
["", "karbonara", "Карбонара", "5,60", "350", ""],
["", "taliateli-ot-sepiya-s-morski-darove", "Талиатели от сепия с морски дарове", "7,00", "", ""]

            ],

            "risotto": [
                ["", "rizoto-s-morski-darove", "Ризото с морски дарове", "7,00", "350", ""],
["", "rizoto-s-pile", "Ризото с пиле", "7,00", "350", ""],
["", "rizoto-ss-spanak", "Ризото със спанак", "7,00", "350", ""]

            ],

            "Сач": [
                ["", "kombiniran-sach", "Комбиниран сач", "11,20", "400", ""],
["", "pileshki-sach", "Пилешки сач", "7,00", "400", ""],
["", "svinski-sach", "Свински сач", "9,80", "400", ""]

            ],

            "Ястия с пилешко месо": [
                ["", "frensko-plneno-pecheno-petle-s-przheni-kartofi", "Френско пълнено печено петле с пържени картофи", "9,80", "600", ""],
["", "pile-rokfor", "Пиле Рокфор", "9,80", "400", ""],
["", "pileshka-file-przhola-s-gben-sos", "Пилешка филе пържола с гъбен сос", "7,70", "350", ""]

            ],

            "Ястия със свинско месо": [
                ["", "svinsko-sos-sirena", "Свинско сос сирена", "11,90", "350", ""],
["", "svinsko-vreteno", "Свинско вретено", "11,20", "350", ""],
["", "svinska-przhola-s-gben-sos", "Свинска пържола с гъбен сос", "9,10", "350", ""]

            ],

            "Ястия с риба": [
                ["", "czipura-na-plocha", "Ципура на плоча", "14,70", "400", ""],
["", "lavrak-s-aromatni-podpravki", "Лаврак с ароматни подправки", "13,30", "", ""],
["", "stek-ot-somga", "Стек от сьомга", "11,20", "200", ""],
["", "pstrva-na-plocha", "Пъстърва на плоча", "9,80", "", ""],
["", "pikantni-sredizemnomorski-skaridi", "Пикантни средиземноморски скариди", "9,80", "200", ""]

            ],

            "grill": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "7,00", "300", ""],
["", "svinski-kareta", "Свински карета", "8,40", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "4,90", "250", ""],
["", "pileshka-przhola", "Пилешка пържола", "5,60", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,80", "220", ""],
["", "teleshki-kareta", "Телешки карета", "15,40", "300", ""],
["", "kombiniran-shashlik", "Комбиниран шашлик", "16,10", "450", ""]

            ],

            "garnish": [
                ["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "livanski-oriz", "Ливански ориз", "4,20", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,80", "250", ""],
["", "pecheni-zelenchuczi", "Печени зеленчуци", "2,80", "250", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,80", "250", ""],
["", "maslini-riviera-ss-zekhtin-bez-kostilka", "Маслини ривиера със зехтин без костилка", "2,10", "50", ""]

            ],

            "Специалитети със свинско месо": [
                ["", "pushena-svinska-veshhalicza", "Пушена свинска вещалица", "8,40", "350", ""],
["", "plnena-svinska-veshhalicza", "Пълнена свинска вещалица", "9,80", "300", ""],
["", "krekhki-svinski-grdichki", "Крехки свински гърдички", "6,30", "300", ""],
["", "tnka-pushena-kolbasicza", "Тънка пушена колбасица", "2,10", "", ""],
["", "lyuta-pleskavicza", "Люта плескавица", "6,30", "300", ""],
["", "malki-kebapcheta", "Малки кебапчета", "6,30", "", ""],
["", "drpani-topki-ot-kajma-i-kashkaval", "Дърпани топки от кайма и кашкавал", "6,30", "250", ""],
["", "debela-pushena-nadenicza", "Дебела пушена наденица", "2,80", "", ""]

            ],

            "Специалитети с пилешко месо": [
                ["", "pileshko-plneno-file-v-bulo", "Пилешко пълнено филе в було", "7,00", "300", ""]

            ],

            "additives": [
                ["", "shunka", "Шунка", "1,40", "", ""],
["", "bekon", "Бекон", "0,70", "", ""],
["", "gbi", "Гъби", "0,70", "", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,70", "", ""],
["", "peperoni", "Пеперони", "1,40", "", ""],
["", "luk", "Лук", "0,70", "", ""],
["", "maslini", "Маслини", "0,70", "", ""],
["", "pileshko-role", "Пилешко роле", "0,70", "", ""],
["", "proshuto", "Прошуто", "1,40", "", ""]

            ],

            "sauces": [
                ["", "chesnovo-mlechen", "Чесново-млечен", "0,70", "", ""],
["", "domaten-s-chili", "Доматен с чили", "1,40", "", ""],
["", "ketchup", "Кетчуп", "0,70", "", ""],
["", "majoneza", "Майонеза", "0,70", "", ""],
["", "tartar", "Тартар", "0,70", "", ""]

            ],

            "bread": [
                ["", "prlenka-s-chesn", "Пърленка с чесън", "1,40", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "filijka-czarevichen-khlyab", "Филийка царевичен хляб", "0,00", "", ""],
["", "filijka-mnogozrnest-khlyab", "Филийка многозърнест хляб", "0,00", "", ""],
["", "selska-rchna-pitka", "Селска ръчна питка", "0,70", "100", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""]

            ],

            "desserts": [
                ["", "chijzkejk-s-borovinki", "Чийзкейк с боровинки", "2,80", "", ""],
["", "palachinka", "Палачинка", "2,80", "", ""]

            ]
        }', 
        'slug' => 'restorant-ring',
        'business_name' => 'Ресторант Ring',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'Язовир Огоста',
        'address_additional' => '',
        'coords_x' => '43.38927441',
        'coords_y' => '23.21684745',
        'phone' => '+359884507830',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "kapreze", "Капрезе", "4,20", "390", ""],
["", "salata-fitnes-s-miks-semena-i-yadki", "Салата Фитнес с микс семена и ядки", "3,50", "300", ""],
["", "salata-skorpio", "Салата Скорпио", "3,50", "220", ""],
["", "salata-czezar-s-pileshki-filencza", "Салата Цезар с пилешки филенца", "4,90", "280", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "karakachanska-salata", "Каракачанска салата", "3,50", "350", ""],
["", "pecheni-chushki-s-katk-presen-luk-maslini-i-chesn", "Печени чушки с катък, пресен лук, маслини и чесън", "3,50", "320", ""],
["", "kscheta-zapechen-kamember-s-miks-salatki-pecheni-orekhi-i-sladko-ot-borovinki", "Късчета запечен Камембер, с микс салатки, печени орехи и сладко от боровинки", "4,90", "220", ""]

            ],

            "starters": [
                ["", "topeni-sirencza-v-kornflejks-i-sladko-ot-borovinki", "Топени сиренца в корнфлейкс и сладко от боровинки", "4,20", "250", ""],
["", "pileshki-flejki-ss-susam", "Пилешки флейки със сусам", "4,90", "280", ""],
["", "pileshki-kscheta-fantaziya", "Пилешки късчета Фантазия", "4,90", "320", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "250", ""],
["", "kartofi-sote-s-chesn-i-kopr", "Картофи соте с чесън и копър", "2,80", "350", ""],
["", "przhen-svinski-drob-s-cheri-domatki", "Пържен свински дроб с чери доматки", "3,50", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,90", "250", ""],
["", "pukhkavi-zelenchukovi-kyuftencza-ss-sos", "Пухкави зеленчукови кюфтенца със сос", "3,50", "250", ""],
["", "plneni-gbki-s-miks-ot-sirena", "Пълнени гъбки с микс от сирена", "4,20", "260", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "4,20", "300", ""],
["", "khrupkavi-filencza-s-kornflejks", "Хрупкави филенца с корнфлейкс", "4,90", "320", ""],
["", "przheni-kalmari-ss-sos-skordalya", "Пържени калмари със сос Скордаля", "7,70", "350", ""]

            ],

            "Основни ястия и мезета": [
                ["", "teleshko-v-bira-ss-zelenchuczi-i-bilki-pyure-i-mentov-sos", "Телешко в бира със зеленчуци и билки, пюре и ментов сос", "7,70", "370", ""],
["", "teleshki-ezik-po-krchmarski-s-gbi-i-kashkaval", "Телешки език по кръчмарски с гъби и кашкавал", "5,60", "320", ""],
["", "svinski-ushi", "Свински уши", "4,20", "360", ""],
["", "pileshki-filencza-s-parmezanova-korichka-i-zelenchuczi-na-skara-s-pesto-sos", "Пилешки филенца с пармезанова коричка и зеленчуци на скара с песто сос", "6,30", "320", ""],
["", "kartofena-zapekanka-s-brokoli-i-smetana", "Картофена запеканка с броколи и сметана", "4,20", "390", ""],
["", "pileshki-khapki-v-sladko-kisel-sos-i-domashno-pyure-ot-kartofi", "Пилешки хапки в сладко-кисел сос и домашно пюре от картофи", "5,60", "330", ""],
["", "pileshki-kscheta-s-topeno-sirene-i-gbki", "Пилешки късчета с топено сирене и гъбки", "5,60", "380", ""],
["", "przheni-svinski-kscheta-s-kartofi-i-kopr", "Пържени свински късчета с картофи и копър", "4,90", "350", ""],
["", "bavno-gotveno-obezkosteno-svinsko-dzholanche-s-pechen-sos", "Бавно готвено, обезкостено свинско джоланче с печен сос", "4,90", "350", ""],
["", "somga-na-tigan-ss-sos-shampansko-i-kartofeno-pyure-s-tryufelov-sos", "Сьомга на тиган със сос шампанско и картофено пюре с трюфелов сос", "9,80", "430", ""],
["", "pstrva-na-skara-s-rozmarinovi-kartofki", "Пъстърва на скара с розмаринови картофки", "7,70", "430", ""],
["", "rolirano-pileshko-file-s-sham-fstk-i-orekhi-v-bekon-s-basmatov-oriz-s-manatarki-i-medeno-gorchichen-sos", "Ролирано пилешко филе с шам фъстък и орехи в бекон с басматов ориз с манатарки и медено горчичен сос", "6,30", "360", ""],
["", "svinsko-bon-file-s-kartofen-krem-s-tryufel-i-sos-shampansko", "Свинско бон филе с картофен крем с трюфел и сос шампанско", "6,30", "370", ""],
["", "svinski-kscheta-s-lyuta-chushka-i-maslo", "Свински късчета с люта чушка и масло", "5,60", "300", ""],
["", "teleshko-s-manatarka-i-kartofeno-pyure", "Телешко с манатарка и картофено пюре", "9,10", "350", ""],
["", "teleshko-shkembe-v-maslo", "Телешко шкембе в масло", "4,90", "320", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "7,70", "", ""],
["", "pileshki-sach", "Пилешки сач", "9,80", "", ""],
["", "svinski-sach", "Свински сач", "9,80", "", ""]

            ],

            "Паста и ориз": [
                ["", "lazanya-boloneze", "Лазаня Болонезе", "4,90", "400", ""],
["", "talyateli-s-brokoli-pile-i-topeno-sirene", "Талятели с броколи, пиле и топено сирене", "4,90", "400", ""],
["", "oriz-s-pileshko-manatarki-i-kri", "Ориз с пилешко, манатарки и къри", "4,90", "400", ""],
["", "oriz-ss-zelenchuczi-po-kitajski", "Ориз със зеленчуци по китайски", "2,80", "400", ""],
["", "basmatov-oriz-s-presni-zelenchuczi-manatarki-i-tryufelov-zekhtin", "Басматов ориз с пресни зеленчуци, манатарки и трюфелов зехтин", "3,50", "380", ""],
["", "talyateli-karbonara-s-bekon-i-pechurki", "Талятели Карбонара с бекон и печурки", "4,20", "360", ""]

            ],

            "grill": [
                ["", "retro-kebapcheta", "Ретро кебапчета", "4,90", "", ""],
["", "retro-kyufteta", "Ретро кюфтета", "4,90", "", ""],
["", "teleshki-kyuftencza", "Телешки кюфтенца", "6,30", "", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "3,50", "280", ""],
["", "sochna-przhola-ot-but-s-dzhindzhifil-med-i-limon", "Сочна пържола от бут с джинджифил, мед и лимон", "6,30", "320", ""],
["", "krekhko-svinsko-vratle", "Крехко свинско вратле", "7,00", "300", ""],
["", "domashen-teleshki-sudzhuk", "Домашен телешки суджук", "7,70", "260", ""],
["", "svinski-grdi-s-domashna-marinata", "Свински гърди с домашна марината", "7,00", "300", ""],
["", "yunashka-meshana-skara", "Юнашка мешана скара", "27,30", "1200", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "360", ""],
["", "peperoni", "Пеперони", "6,30", "360", ""],
["", "balkanska", "Балканска", "6,30", "360", ""],
["", "picza-s-shunka", "Пица с шунка", "5,60", "360", ""],
["", "picza-s-shunka-i-gbi", "Пица с шунка и гъби", "6,30", "360", ""],
["", "kaprichoza", "Капричоза", "6,30", "360", ""],
["", "kalczone", "Калцоне", "7,00", "360", ""],
["", "marko-polo", "Марко Поло", "6,30", "360", ""],
["", "skorpio", "Скорпио", "7,00", "360", ""],
["", "bianka", "Бианка", "6,30", "360", ""],
["", "vegetariana", "Вегетариана", "5,60", "360", ""],
["", "karbonara", "Карбонара", "6,30", "360", ""],
["", "napoli", "Наполи", "7,70", "360", ""],
["", "sedem-sirena", "Седем сирена", "7,00", "360", ""],
["", "formadzho", "Формаджо", "5,60", "360", ""],
["", "roma", "Рома", "6,30", "360", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "1,40", "150", ""],
["", "prlenka-kombinirana", "Пърленка комбинирана", "2,80", "200", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "170", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "170", ""]

            ],

            "desserts": [
                ["", "chijzkejk-s-techen-shokolad", "Чийзкейк с течен шоколад", "2,10", "150", ""],
["", "frenska-selska-torta", "Френска селска торта", "2,10", "150", ""],
["", "shokoladova-sufle", "Шоколадова суфле", "2,80", "", ""],
["", "biskvitena-torta-s-maskarpone", "Бисквитена торта с маскарпоне", "2,10", "", ""],
["", "krem-bryule", "Крем брюле", "2,80", "", ""]

            ]
        }', 
        'slug' => 'scorpio',
        'business_name' => 'Scorpio',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pazardzhik',
        'region' => 'Pazardzhik',
        'postal_code' => '4400',
        'address' => 'площад Възраждане',
        'address_additional' => '',
        'coords_x' => '42.18966542',
        'coords_y' => '24.33362333',
        'phone' => '+35934446016',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-s-pechen-patladzhan-domat-i-pechen-piper", "Салата с печен патладжан, домат и печен пипер", "4,20", "350", ""],
["", "zelena-salata-s-kinoa", "Зелена салата с киноа", "4,20", "370", ""],
["", "salata-s-cherven-bob-i-riba-ton", "Салата с червен боб и риба тон", "4,90", "400", ""],
["", "italianska", "Италианскa", "3,50", "400", ""],
["", "slavyanska", "Славянска", "3,50", "350", ""],
["", "vitamina", "Витамина", "3,50", "350", ""],
["", "salata-kopola", "Салата копола", "4,20", "350", ""],
["", "salata-s-riba-ton-i-dresing", "Салата с риба тон и дресинг", "4,20", "400", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "salata-s-proshuto-ajsberg-cheri-domatki-i-parmezan", "Салата с прошуто, айсберг, чери доматки и пармезан", "4,90", "350", ""],
["", "salata-ss-susheni-domati", "Салата със сушени домати", "4,20", "300", ""],
["", "grczka", "Гръцка", "3,50", "380", ""],
["", "tabule", "Табуле", "3,50", "300", ""],
["", "morkovi-s-riba-ton-i-maslini", "Моркови с риба тон и маслини", "4,20", "400", ""],
["", "zelena-salata-s-livansko-sirene", "Зелена салата с ливанско сирене", "4,20", "370", ""],
["", "fresh", "Фреш", "2,80", "350", ""],
["", "salata-s-cherveno-czveklo-i-sino-sirene", "Салата с червено цвекло и синьо сирене", "4,20", "350", ""],
["", "ajsberg", "Айсберг", "4,90", "350", ""],
["", "salata-s-file-ot-somga", "Салата с филе от сьомга", "6,30", "300", ""],
["", "czezar", "Цезар", "4,90", "300", ""]

            ],

            "Салати Класик": [
                ["", "shopska", "Шопска", "2,80", "350", ""],
["", "selska", "Селска", "3,50", "400", ""],
["", "ovcharska", "Овчарска", "3,50", "400", ""],
["", "snezhanka", "Снежанка", "2,80", "200", ""],
["", "domati", "Домати", "2,10", "250", ""],
["", "krastaviczi", "Краставици", "2,10", "250", ""],
["", "meshana", "Мешана", "2,10", "300", ""],
["", "zelena-s-yajcze", "Зелена с яйце", "2,80", "300", ""]

            ],

            "starters": [
                ["", "okhlyuvi-po-burgunski", "Охлюви по бургунски", "8,40", "180", ""],
["", "pikantni-pileshki-filencza", "Пикантни пилешки филенца", "4,20", "300", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "200", ""],
["", "susameni-pileshki-khapki", "Сусамени пилешки хапки", "3,50", "250", ""],
["", "khrupkavi-pileshki-filencza-s-kornflejks", "Хрупкави пилешки филенца с корнфлейкс", "3,50", "250", ""],
["", "pileshki-khapchiczi-s-filiran-badem", "Пилешки хапчици с филиран бадем", "4,20", "220", ""],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "2,80", "450", ""],
["", "gshi-drob-s-karameliziran-ananas", "Гъши дроб с карамелизиран ананас", "8,40", "180", ""],
["", "pikantni-svinski-filencza", "Пикантни свински филенца", "4,20", "200", ""],
["", "svinski-ushi", "Свински уши", "3,50", "", ""],
["", "pateshki-srcza-v-maslo", "Патешки сърца в масло", "3,50", "", ""],
["", "kasapsko-meze", "Касапско мезе", "5,60", "", ""],
["", "svinski-drob-na-zhar", "Свински дроб на жар", "2,80", "", ""],
["", "tarama-khajver", "Тарама хайвер", "3,50", "200", ""],
["", "aromatna-razyadka", "Ароматна разядка", "3,50", "200", ""],
["", "svinski-drob-po-odrinski", "Свински дроб по одрински", "3,50", "200", ""]

            ],

            "pizza": [
                ["", "selska", "Селска", "2,80", "", ""],
["", "fradyavolo", "Фрадяволо", "3,50", "", ""],
["", "kariola", "Кариола", "2,80", "", ""],
["", "antigua", "Антигуа", "2,80", "", ""],
["", "momo", "Момо", "3,50", "", ""],
["", "adriano", "Адриано", "3,50", "", ""],
["", "spinadzho", "Спинаджо", "2,80", "", ""],
["", "peperoni", "Пеперони", "2,80", "", ""],
["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "verona", "Верона", "3,50", "", ""],
["", "marinara", "Маринара", "4,20", "", ""],
["", "kuatro-stadzhoni", "Куатро стаджони", "3,50", "", ""],
["", "lorenczo", "Лоренцо", "2,80", "", ""],
["", "fruti-di-mare", "Фрути ди маре", "4,20", "", ""],
["", "kalczone-umbriya", "Калцоне Умбрия", "2,80", "", ""],
["", "padua", "Падуа", "3,50", "", ""],
["", "figaro", "Фигаро", "3,50", "", ""],
["", "kalczone", "Калцоне", "3,50", "", ""]

            ],

            "Ястия от месо": [
                ["", "pikantni-vratni-kscheta", "Пикантни вратни късчета", "4,20", "250", ""],
["", "kyuftenczata-na-baba", "Кюфтенцата на баба", "3,50", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "250", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,20", "280", ""],
["", "svinsko-bon-file-v-pechen-sos", "Свинско бон филе в печен сос", "6,30", "", ""],
["", "svinsko-file-s-gorchichen-sos", "Свинско филе с горчичен сос", "6,30", "", ""],
["", "pileshko-file-s-moczarela", "Пилешко филе с моцарела", "6,30", "", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "4,90", "", ""],
["", "svinski-kareta-vrkhu-zapechen-luk", "Свински карета върху запечен лук", "6,30", "", ""],
["", "selski-sudzhuk", "Селски суджук", "3,50", "", ""],
["", "plato-ot-kebapchencza-i-kyuftencza", "Плато от кебапченца и кюфтенца", "4,20", "400", ""],
["", "mecha-veshalicza", "Меча вешалица", "5,60", "300", ""],
["", "pleskavicza", "Плескавица", "3,50", "200", ""],
["", "ushhipczi", "Ущипци", "3,50", "200", ""],
["", "chebapcheta", "Чебапчета", "3,50", "180", ""],
["", "pileshki-butcheta", "Пилешки бутчета", "4,90", "350", ""]

            ],

            "Ястия от риба": [
                ["", "skaridi-na-plocha", "Скариди на плоча", "7,00", "150", ""],
["", "kalmari", "Калмари", "6,30", "200", ""],
["", "oktopod-na-plocha", "Октопод на плоча", "16,80", "200", ""],
["", "somga-file-ss-spanacheni-kartofki-i-sos-kholandes", "Сьомга филе със спаначени картофки и сос холандес", "11,20", "300", ""],
["", "czipura-na-skara", "Ципура на скара", "7,70", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "7,70", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "5,60", "200", ""],
["", "sharan-na-skara", "Шаран на скара", "5,60", "500", ""],
["", "somga-na-plocha", "Сьомга на плоча", "9,80", "200", ""],
["", "somga-na-plocha-s-kinoa", "Сьомга на плоча с киноа", "10,50", "300", ""],
["", "akula-pane", "Акула пане", "4,90", "250", ""],
["", "rizoto-s-morski-darove", "Ризото с морски дарове", "4,20", "320", ""],
["", "zargan-na-skara", "Зарган на скара", "6,30", "250", ""]

            ],

            "desserts": [
                ["", "czedeno-mlyako-s-borovinki-med-i-vishni", "Цедено мляко с боровинки, мед и вишни", "2,80", "220", ""],
["", "pechen-chijz-kejk-s-gorski-plodove", "Печен чийз кейк с горски плодове", "2,80", "120", ""]

            ],

            "Хлебчета": [
                ["", "chesnovo-khlebche", "Чесново хлебче", "0,70", "130", ""],
["", "chesnovo-khlebche-s-kashkaval", "Чесново хлебче с кашкавал", "1,40", "150", ""],
["", "khlebche-s-kashkaval-i-susam", "Хлебче с кашкавал и сусам", "1,40", "150", ""]

            ],

            "Пърленки": [
                ["", "prlenka", "Пърленка", "0,70", "130", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "150", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "150", ""]

            ],

            "sauces": [
                ["", "barbekyu", "Барбекю", "0,00", "50", ""]

            ],

            "additives": [
                ["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "sirene", "Сирене", "0,00", "50", ""],
["", "pusheno-sirene", "Пушено сирене", "0,70", "50", ""],
["", "parmezan", "Пармезан", "0,00", "10", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "30", ""],
["", "moczarela", "Моцарела", "0,70", "50", ""],
["", "shunka-bekon", "Шунка, бекон", "0,70", "50", ""],
["", "proshuto", "Прошуто", "1,40", "30", ""],
["", "pile", "Пиле", "0,70", "50", ""],
["", "lukanka", "Луканка", "0,70", "50", ""],
["", "riba-ton", "Риба тон", "0,70", "50", ""],
["", "pushena-somga", "Пушена сьомга", "2,10", "30", ""],
["", "morski-darove", "Морски дарове", "2,10", "50", ""],
["", "pryasna-chushka", "Прясна чушка", "0,70", "50", ""],
["", "pechena-chushka", "Печена чушка", "0,70", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "", ""],
["", "gbi", "Гъби", "0,00", "50", ""],
["", "brokoli", "Броколи", "0,70", "50", ""],
["", "maslini", "Маслини", "0,00", "50", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "domat-krastavicza", "Домат, краставица", "0,00", "50", ""]

            ]
        }', 
        'slug' => 'bbq-momo',
        'business_name' => 'BBQ Momo',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Yambol',
        'region' => 'Yambol',
        'postal_code' => '8602',
        'address' => 'ул. Търговска 164',
        'address_additional' => '',
        'coords_x' => '42.47566937',
        'coords_y' => '26.52821405',
        'phone' => '+359898504535',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "katk-s-pechena-chushka", "Катък с печена чушка", "4,20", "350", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "500", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "italianska-salata", "Италианска салата", "4,90", "350", ""],
["", "riba-ton", "Риба тон", "5,60", "350", ""],
["", "kapreze", "Капрезе", "4,90", "400", ""],
["", "czezar", "Цезар", "5,60", "400", ""],
["", "belomorska-salata", "Беломорска салата", "4,90", "350", ""],
["", "sredizemnomorska", "Средиземноморска", "4,20", "400", ""],
["", "kinoa---ajsberg", "Киноа - Айсберг", "4,20", "400", ""]

            ],

            "starters": [
                ["", "pikantni-kartofi", "Пикантни картофи", "4,20", "350", ""],
["", "pileshki-flejki-s-kornflejks", "Пилешки флейки с корнфлейкс", "4,20", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "4,20", "350", ""],
["", "khapki-topeno-sirene", "Хапки топено сирене", "4,20", "350", ""],
["", "khapki-formadzhi", "Хапки формаджи", "4,90", "250", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "3,50", "250", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "4,20", "350", ""],
["", "khrupkavi-pileshki-krilcza", "Хрупкави пилешки крилца", "5,60", "400", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,90", "300", ""],
["", "khrupkavi-kalmari", "Хрупкави калмари", "7,70", "250", ""],
["", "khapki-kashkaval", "Хапки кашкавал", "3,50", "200", ""],
["", "khapki-sirene", "Хапки сирене", "3,50", "200", ""],
["", "pile-parmedzhano", "Пиле пармеджано", "4,20", "250", ""],
["", "srbsko-meze", "Сръбско мезе", "6,30", "250", ""],
["", "pile-s-moczarela", "Пиле с моцарела", "5,60", "350", ""],
["", "patladzhan-s-moczarela", "Патладжан с моцарела", "4,20", "350", ""]

            ],

            "maindishes": [
                ["", "aromatno-pileshko-s-bilki", "Ароматно пилешко с билки", "4,90", "450", ""],
["", "pile-formadzhi", "Пиле формаджи", "6,30", "450", ""],
["", "teleshko-s-manatarki", "Телешко с манатарки", "12,60", "450", ""],
["", "svinski-skalopini-s-oriz", "Свински скалопини с ориз", "7,00", "450", ""],
["", "teleshki-biftek", "Телешки бифтек", "5,60", "450", ""],
["", "file-somga", "Филе сьомга", "11,90", "350", ""],
["", "pileshko-file-s-proshuto", "Пилешко филе с прошуто", "4,90", "400", ""],
["", "agneshki-kotleti", "Агнешки котлети", "14,70", "350", ""],
["", "brokoli-formadzhi", "Броколи формаджи", "3,50", "400", ""]

            ],

            "sachs": [
                ["", "kombiniran-sach", "Комбиниран сач", "9,80", "800", ""],
["", "svinski-sach", "Свински сач", "9,80", "800", ""],
["", "pileshki-sach", "Пилешки сач", "8,40", "800", ""]

            ],

            "grill": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "7,00", "400", ""],
["", "svinski-grdi", "Свински гърди", "7,00", "400", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "3,50", "300", ""],
["", "pileshko-shishche", "Пилешко шишче", "5,60", "", ""],
["", "svinsko-shishche", "Свинско шишче", "7,00", "", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "4,90", "400", ""],
["", "pateshki-srcza", "Патешки сърца", "4,20", "250", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "350", ""],
["", "kyuftencza-na-skara", "Кюфтенца на скара", "4,20", "", ""]

            ],

            "pizza": [
                ["", "rufo", "Руфо", "5,60", "", ""],
["", "salami", "Салами", "6,30", "", ""],
["", "menacza", "Менаца", "5,60", "", ""],
["", "khavaj", "Хавай", "6,30", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "vigos", "Вигос", "7,70", "", ""],
["", "meksikana", "Мексикана", "5,60", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "vegetariyana", "Вегетарияна", "4,90", "", ""],
["", "formadzhi", "Формаджи", "5,60", "", ""],
["", "bulgarian", "Булгариан", "7,00", "", ""],
["", "moczarela", "Моцарела", "7,00", "", ""],
["", "riba-ton", "Риба тон", "6,30", "", ""]

            ],

            "Риба на барбекю": [
                ["", "pstrva", "Пъстърва", "7,00", "", ""],
["", "czipura", "Ципура", "7,70", "", ""],
["", "lavrak", "Лаврак", "7,70", "", ""]

            ],

            "Тортила и бургери": [
                ["", "tortila-khrupkavo-pile", "Тортила хрупкаво пиле", "4,20", "500", ""],
["", "teleshki-burger", "Телешки бургер", "5,60", "470", ""],
["", "pileshki-burger", "Пилешки бургер", "4,90", "450", ""]

            ],

            "risotto": [
                ["", "morski-darove", "Морски дарове", "6,30", "350", ""],
["", "imperatorski-oriz", "Императорски ориз", "4,20", "350", ""],
["", "rizoto-pile", "Ризото пиле", "4,20", "350", ""],
["", "teleshko-rizoto", "Телешко ризото", "4,90", "350", ""]

            ],

            "pasta": [
                ["", "karbonara", "Карбонара", "4,20", "400", ""],
["", "spageti-s-pile", "Спагети с пиле", "4,20", "400", ""],
["", "boloneze", "Болонезе", "4,20", "400", ""]

            ],

            "Талиатели": [
                ["", "boloneze", "Болонезе", "4,20", "400", ""],
["", "karbonara", "Карбонара", "4,90", "400", ""],
["", "morski-darove", "Морски дарове", "5,60", "400", ""],
["", "alfredo", "Алфредо", "4,20", "400", ""]

            ],

            "Пърленки": [
                ["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "220", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "220", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "280", ""]

            ],

            "desserts": [
                ["", "frenska-torta", "Френска торта", "2,80", "", ""],
["", "shokoladov-garash", "Шоколадов гараш", "2,80", "", ""],
["", "chijzkejk", "Чийзкейк", "2,80", "", ""]

            ]
        }', 
        'slug' => 'vigos-bar-and-dinner',
        'business_name' => 'Vigos Bar and Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6300',
        'address' => 'ул. Преслав 25',
        'address_additional' => '',
        'coords_x' => '41.93125071',
        'coords_y' => '25.55422887',
        'phone' => '+359877444525',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "margarita", "Маргарита", "2,10", "", ""],
["", "kaprichosa", "Капричоса", "3,50", "", ""],
["", "peperoni", "Пеперони", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "2,80", "", ""],
["", "la-forchetta", "La Forchetta", "4,90", "", ""],
["", "verde-bbq", "Верде BBQ", "3,50", "", ""],
["", "karbonara", "Карбонара", "3,50", "", ""],
["", "greka", "Грека", "4,20", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,90", "", ""],
["", "tono", "Тоно", "4,20", "", ""],
["", "pesto", "Песто", "4,20", "", ""],
["", "4-vida-mesa", "4 вида меса", "4,90", "", ""]

            ],

            "Топла Паста": [
                ["", "pomodoro", "Помодоро", "2,10", "450", ""],
["", "salsicha", "Салсича", "2,80", "450", ""],
["", "bianka", "Бианка", "2,80", "450", ""],
["", "chetiri-sirena", "Четири сирена", "2,80", "450", ""],
["", "pesto", "Песто", "2,80", "450", ""]

            ],

            "Panini Сандвичи": [
                ["", "koto", "Кото", "2,80", "", ""],
["", "peperoni", "Пеперони", "2,80", "", ""],
["", "la-forchetta", "La Forchetta", "2,80", "", ""]

            ],

            "Италиански колбаси": [
                ["", "proshuto-koto", "Прошуто кото", "1,40", "100", ""],
["", "proshuto-krudo", "Прошуто крудо", "2,10", "100", ""],
["", "salam-napoli", "Салам Наполи", "1,40", "100", ""],
["", "salam-vetrichina", "Салам Ветричина", "1,40", "100", ""],
["", "pancheta", "Панчета", "2,10", "100", ""]

            ],

            "desserts": [
                ["", "gofreta-s-shokolad", "Гофрета с шоколад", "2,10", "", ""],
["", "gofreta-s-shokolad-i-banan", "Гофрета с шоколад и банан", "2,10", "", ""],
["", "gofreta-rika", "Гофрета Рика", "2,80", "", ""],
["", "krostata-1", "Кростата (1", "0,70", "", ""]

            ],

            "additives": [
                ["", "zelenchuczi", "Зеленчуци", "0,00", "", ""],
["", "kolbasi", "Колбаси", "0,70", "", ""],
["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "", ""]

            ]
        }', 
        'slug' => 'la-forchetta',
        'business_name' => 'La Forchetta',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pazardzhik',
        'region' => 'Pazardzhik',
        'postal_code' => '4400',
        'address' => 'ул. Пейо К. Яворов 1',
        'address_additional' => '',
        'coords_x' => '42.19205995',
        'coords_y' => '24.33285181',
        'phone' => '+359883309017',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "tarator", "Таратор", "1,40", "350", ""],
["", "teleshko-vareno", "Телешко варено", "1,40", "350", ""],
["", "yajcza-po-panagyurski", "Яйца по панагюрски", "2,10", "350", ""],
["", "pileshko-vreteno-s-garnitura", "Пилешко вретено с гарнитура", "3,50", "350", ""],
["", "musaka", "Мусака", "2,80", "350", ""],
["", "solena-palachinka-s-garnitura", "Солена палачинка с гарнитура", "2,80", "350", ""],
["", "pileshka-kasha-po-selski", "Пилешка каша по селски", "2,10", "350", ""],
["", "byala-riba-pane-s-garnitura", "Бяла риба пане с гарнитура", "2,80", "350", ""],
["", "2br-kebapcheta-s-garnituta", "2бр Кебапчета с гарнитута", "2,10", "", ""],
["", "2br-kyufteta-s-garnituta", "2бр Кюфтета с гарнитута", "2,10", "", ""],
["", "2br-pikantni-kyufteta-s-garnitura", "2бр Пикантни кюфтета с гарнитура", "2,80", "", ""],
["", "pileshka-przhola-file-s-garnitura", "Пилешка пържола филе с гарнитура", "3,50", "", ""],
["", "pileshka-przhola-ot-but-s-garnitura", "Пилешка пържола от бут с гарнитура", "2,80", "", ""],
["", "svinska-vratna-przhola-s-garnitura", "Свинска вратна пържола с гарнитура", "3,50", "", ""],
["", "zharena-srbska-pitka", "Жарена сръбска питка", "0,70", "", ""],
["", "prlenka", "Пърленка", "0,00", "", ""],
["", "krastaviczi-s-pileshko-file", "Краставици с пилешко филе", "2,80", "350", ""],
["", "chijzkejk", "Чийзкейк", "2,10", "", ""],
["", "yagodov-krem", "Ягодов крем", "1,40", "", ""]

            ],

            "grill": [
                ["", "kebapche-s-garnitura", "Кебапче с гарнитура", "2,10", "", ""],
["", "kyufte-s-garnitura", "Кюфте с гарнитура", "2,10", "", ""],
["", "pikantno-kyufte-s-garnitura", "Пикантно кюфте с гарнитура", "2,80", "", ""],
["", "pileshka-przhola-ot-but-na-skara-s-ganirtura", "Пилешка пържола от бут на скара с ганиртура", "3,50", "", ""]

            ]
        }', 
        'slug' => 'veseloto-kebapche',
        'business_name' => 'Веселото кебапче',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Климент Охридски 48',
        'address_additional' => '',
        'coords_x' => '43.41271967',
        'coords_y' => '23.22209407',
        'phone' => '+359878670668',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "malk-dyuner", "Малък дюнер", "0,70", "180", ""],
["", "sreden-dyuner", "Среден дюнер", "1,40", "270", ""],
["", "golyam-dyuner", "Голям дюнер", "2,10", "400", ""],
["", "xxl-dyuner", "XXL дюнер", "3,50", "650", ""],
["", "malka-porcziya-dyunr", "Малка порция дюнр", "2,80", "250", ""],
["", "golyama-porcziya-dyuner", "Голяма порция дюнер", "4,90", "400", ""]

            ],

            "burgers": [
                ["", "khamburger", "Хамбургер", "2,10", "300", ""],
["", "arabski-burger", "Арабски бургер", "2,10", "400", ""],
["", "mini-burger", "Мини бургер", "0,70", "", ""],
["", "mini-chijzburger", "Мини чийзбургер", "1,40", "", ""],
["", "teleshki-khamburger", "Телешки хамбургер", "2,10", "300", ""],
["", "khamburger-s-teleshko-kyufte", "Хамбургер с телешко кюфте", "2,10", "300", ""],
["", "rok-burger", "Рок бургер", "2,80", "300", ""]

            ],

            "Скара и Сандвичи": [
                ["", "areas", "Ареас", "1,40", "250", ""],
["", "areas-porcziya", "Ареас порция", "2,10", "300", ""],
["", "dzhob", "Джоб", "2,10", "300", ""],
["", "sudzhu", "Суджу", "1,40", "250", ""],
["", "princzesa", "Принцеса", "0,70", "100", ""],
["", "sandvich-s-kyufte", "Сандвич с кюфте", "1,40", "300", ""],
["", "procziya-v-tarelka-s-kyufte", "Проция в тарелка с кюфте", "2,10", "300", ""],
["", "procziya-v-tarelka-s-kebapche", "Проция в тарелка с кебапче", "2,10", "300", ""],
["", "pileshko-krilcze", "Пилешко крилце", "0,00", "", ""],
["", "svinsko-kebapche", "Свинско кебапче", "0,00", "50", ""],
["", "svinski-kyufte", "Свински кюфте", "0,00", "50", ""],
["", "pileshka-przhola", "Пилешка пържола", "1,40", "180", ""]

            ],

            "Сосове и други": [
                ["", "porcziya-kartofi", "Порция картофи", "0,70", "150", ""],
["", "sos", "Сос", "0,70", "", ""]

            ],

            "pizza": [
                ["", "picza-s-shunka-i-gbi", "Пица с Шунка и гъби", "0,70", "130", ""],
["", "picza-s-pile-i-gbi", "Пица с Пиле и гъби", "0,70", "130", ""],
["", "picza-s-bekon-i-gbi", "Пица с Бекон и гъби", "0,70", "130", ""],
["", "picza-s-shunka-i-czarevicza", "Пица с Шунка и царевица", "0,70", "130", ""],
["", "picza-s-bekon-i-czarevicza", "Пица с Бекон и царевица", "0,70", "130", ""],
["", "picza-margarita", "Пица Маргарита", "0,70", "130", ""],
["", "picza-peperoni", "Пица Пеперони", "0,70", "180", ""],
["", "picza-vegetariana", "Пица Вегетариана", "0,70", "130", ""],
["", "czyala-picza-po-izbor", "Цяла пица по избор", "9,10", "", ""]

            ],

            "beer": [
                ["", "kamenicza", "Каменица", "0,70", "500", ""],
["", "burgasko", "Бургаско", "0,70", "500", ""],
["", "astika", "Астика", "0,70", "500", ""],
["", "beks", "Бекс", "0,70", "500", ""],
["", "staropramen", "Старопрамен", "0,70", "500", ""],
["", "stela-artoa", "Стела Артоа", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "ajran", "Айран", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1103408.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1103409.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1103410.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1103411.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1103412.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1103413.jpg?width=302"]

            ]
        }', 
        'slug' => 'sindbad-car-osvoboditel',
        'business_name' => 'Sindbad (Цар Освободител)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Yambol',
        'region' => 'Yambol',
        'postal_code' => '8600',
        'address' => 'ул. Цар Освободител 3',
        'address_additional' => '',
        'coords_x' => '42.4844397',
        'coords_y' => '26.5044943',
        'phone' => '+359897809030',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "shlagera", "Шлагера", "5,60", "600", ""],
["", "zhtvarska-salata", "Жътварска салата", "3,50", "450", ""],
["", "kalugerska-salata", "Калугерска салата", "4,20", "450", ""],
["", "tuna", "Туна", "4,90", "500", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "500", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "kenanska-salata", "Кенанска салата", "4,20", "500", ""],
["", "rodopska-salata", "Родопска салата", "3,50", "450", ""],
["", "vlcha-salata", "Вълча салата", "4,90", "500", ""],
["", "kapreze", "Капрезе", "4,90", "350", ""],
["", "pecheni-chushki-shiroka-lka", "Печени чушки Широка лъка", "3,50", "400", ""],
["", "proletna-salata", "Пролетна салата", "2,80", "400", ""]

            ],

            "Мераклийски мезета": [
                ["", "makedonsko-tiganche", "Македонско тиганче", "5,60", "600", ""],
["", "svinski-vrat-s-rigan", "Свински врат с риган", "5,60", "400", ""],
["", "pileshki-drob-przhen", "Пилешки дроб пържен", "3,50", "300", ""],
["", "paskalevo-meze", "Паскалево мезе", "4,90", "400", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,20", "300", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "7,00", "250", ""],
["", "khapki-kashkaval", "Хапки кашкавал", "3,50", "250", ""],
["", "khapki-sirene", "Хапки сирене", "3,50", "250", ""],
["", "topeni-sirencza-s-borovinki", "Топени сиренца с боровинки", "4,20", "250", ""],
["", "pileshki-aromatni-khapki", "Пилешки ароматни хапки", "4,20", "300", ""],
["", "khrupkavi-pileshki-filencza", "Хрупкави пилешки филенца", "4,20", "300", ""],
["", "dyadovite-kartofi", "Дядовите картофи", "4,20", "500", ""],
["", "chorbadzhijski-kartofi", "Чорбаджийски картофи", "4,20", "500", ""],
["", "pikantni-kartofi-s-mlechen-sos", "Пикантни картофи с млечен сос", "2,80", "350", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "400", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "350", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "300", ""],
["", "babino-meze", "Бабино мезе", "5,60", "600", ""],
["", "yunashko-meze", "Юнашко мезе", "6,30", "600", ""],
["", "czarsko-meze", "Царско мезе", "5,60", "600", ""],
["", "khapki-pile", "Хапки пиле", "3,50", "250", ""],
["", "svinski-drob-przhen-na-zhulieni", "Свински дроб пържен на жулиени", "4,20", "300", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "3,50", "300", ""],
["", "kartofi-po-tarikatski", "Картофи по тарикатски", "4,20", "500", ""],
["", "mezeto-na-gotvacha", "Мезето на готвача", "6,30", "600", ""]

            ],

            "pizza": [
                ["", "picza-byagashho-pile", "Пица Бягащо пиле", "4,90", "700", ""],
["", "picza-shlagera", "Пица Шлагера", "6,30", "700", ""],
["", "picza-margarita", "Пица Маргарита", "3,50", "400", ""],
["", "picza-proshuto", "Пица Прошуто", "4,90", "550", ""],
["", "picza-kuatro-formadzhi", "Пица Куатро Формаджи", "6,30", "700", ""],
["", "picza-peperoni", "Пица Пеперони", "5,60", "600", ""],
["", "picza-bonifacho", "Пица Бонифачо", "4,90", "700", ""]

            ],

            "Жарени меса и шашлици": [
                ["", "svinski-shashlik", "Свински шашлик", "12,60", "600", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "11,90", "600", ""],
["", "kombiniran-shashlik", "Комбиниран шашлик", "13,30", "600", ""],
["", "banska-nadenicza-s-pecheni-zelenchuczi", "Банска наденица с печени зеленчуци", "6,30", "400", ""],
["", "pleskavicza", "Плескавица", "5,60", "350", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "250", ""],
["", "svinski-grdi-bekoncheta", "Свински гърди бекончета", "6,30", "500", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "ushhipczi-na-parchencza", "Ущипци на парченца", "5,60", "400", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "250", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "karnache", "Карначе", "0,70", "100", ""],
["", "teleshka-nadenicza", "Телешка наденица", "4,90", "250", ""],
["", "teleshko-bon-file", "Телешко бон филе", "10,50", "200", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "4,20", "300", ""],
["", "svinski-ushi-na-skara", "Свински уши на скара", "4,20", "300", ""],
["", "pileshki-krilcza-na-skara", "Пилешки крилца на скара", "4,20", "500", ""],
["", "pateshki-srcza-na-skara", "Патешки сърца на скара", "4,20", "300", ""],
["", "sochni-teleshki-kyuftencza", "Сочни телешки кюфтенца", "5,60", "300", ""],
["", "meshana-skara", "Мешана скара", "10,50", "750", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""]

            ],

            "specialties": [
                ["", "svinski-dzholan-s-garnitura-kartofi-sote", "Свински джолан с гарнитура картофи соте", "6,30", "600", ""],
["", "pileshki-karencza-ss-zelenchuczi-i-pusheno-sirene", "Пилешки каренца със зеленчуци и пушено сирене", "7,00", "500", ""],
["", "pile-s-chetiri-vida-sirene", "Пиле с четири вида сирене", "7,70", "500", ""],
["", "speczialitet-shlagera", "Специалитет Шлагера", "9,80", "700", ""],
["", "svinsko-file-po-rodopski", "Свинско филе по родопски", "8,40", "500", ""],
["", "pileshko-file-po-rodopski", "Пилешко филе по родопски", "7,70", "500", ""],
["", "aromatno-svinsko", "Ароматно свинско", "7,00", "500", ""]

            ],

            "Студени мезета": [
                ["", "sirene-natyur", "Сирене натюр", "0,70", "50", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "0,70", "50", ""],
["", "teleshka-lukanka", "Телешка луканка", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "babek", "Бабек", "2,10", "50", ""]

            ],

            "fish": [
                ["", "sharan---przhen", "Шаран - пържен", "6,30", "", ""],
["", "sharan---na-skara", "Шаран - на скара", "6,30", "", ""]

            ],

            "sauces": [
                ["", "chesnov-mlechen-sos", "Чеснов млечен сос", "0,00", "50", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "chili-sos", "Чили сос", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "zekhtin", "Зехтин", "0,70", "50", ""],
["", "balsamov-oczet", "Балсамов оцет", "0,70", "50", ""]

            ],

            "Гарнитури и хляб": [
                ["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "200", ""],
["", "lyuti-chushleta---porcziya", "Люти чушлета - порция", "0,70", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "prepechen-khlyab", "Препечен хляб", "0,00", "", ""],
["", "chesnova-filijka", "Чеснова филийка", "0,00", "", ""]

            ],

            "Прясно изпечени пърленки и гюзлеми": [
                ["", "gyuzlema", "Гюзлема", "1,40", "", ""],
["", "prlenka", "Пърленка", "1,40", "", ""]

            ],

            "desserts": [
                ["", "torta-maskarpone", "Торта Маскарпоне", "2,10", "150", ""],
["", "shokoladova-torta", "Шоколадова торта", "2,80", "", ""],
["", "palachinka", "Палачинка", "1,40", "", ""],
["", "sladoled", "Сладолед", "0,70", "", ""]

            ],

            "drinks": [
                ["", "pepsi-ken", "Пепси кен", "1,40", "", ""],
["", "mirinda-portokal-ken", "Миринда портокал кен", "1,40", "", ""]

            ]
        }', 
        'slug' => 'bistro-shlagera',
        'business_name' => 'Бистро Шлагера',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6301',
        'address' => 'ул. Видин 2',
        'address_additional' => '',
        'coords_x' => '41.94055557',
        'coords_y' => '25.54443246',
        'phone' => '+359898240322',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "khamburger-s-shunka-i-kashkaval", "Хамбургер с шунка и кашкавал", "1,40", "", ""],
["", "khamburger-s-lukanka-i-kashkaval", "Хамбургер с луканка и кашкавал", "2,10", "", ""],
["", "khamburger-s-shpek-i-kashkaval", "Хамбургер с шпек и кашкавал", "1,40", "", ""],
["", "sandvich-s-kajma-i-kashkaval", "Сандвич с кайма и кашкавал", "1,40", "", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "1,40", "", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "1,40", "", ""]

            ],

            "sandwiches": [
                ["", "dzhob-s-shunka", "Джоб с шунка", "1,40", "", ""],
["", "dzhob-s-shpek", "Джоб с шпек", "1,40", "", ""],
["", "dzhob-s-lukank", "Джоб с луканк", "2,10", "", ""],
["", "sandvich-s-kajma", "Сандвич с кайма", "1,40", "", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "1,40", "", ""],
["", "sandvich-s-shpek-i-kashkaval", "Сандвич с шпек и кашкавал", "1,40", "", ""],
["", "khot-dog", "Хот Дог", "1,40", "", ""]

            ],

            "additives": [
                ["", "khlyab", "Хляб", "0,00", "", ""],
["", "marinovani-gbi", "Мариновани гъби", "0,00", "", ""],
["", "topeno-sirene", "Топено сирене", "0,00", "", ""]

            ]
        }', 
        'slug' => 'uncle-g',
        'business_name' => 'Uncle G',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3403',
        'address' => 'бул. Александър Стамболийски 56',
        'address_additional' => '',
        'coords_x' => '43.4018307',
        'coords_y' => '23.2371688',
        'phone' => '+359876505141',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "margarita", "Маргарита", "2,10", "", ""],
["", "pile", "Пиле", "2,80", "", ""],
["", "pikantno-pile", "Пикантно Пиле", "2,80", "", ""],
["", "peperoni", "Пеперони", "2,80", "", ""],
["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "shunka-i-czarevicza", "Шунка и царевица", "2,80", "", ""],
["", "shunka-i-gbi", "Шунка и гъби", "2,80", "", ""],
["", "chetiri-sezona", "Четири сезона", "2,80", "", ""],
["", "proshuto", "Прошуто", "2,80", "", ""],
["", "boloneze", "Болонезе", "2,80", "", ""],
["", "chetiri-sirena", "Четири сирена", "2,80", "", ""],
["", "shunka-i-kashkaval", "Шунка и кашкавал", "2,80", "", ""],
["", "brokoli", "Броколи", "2,80", "", ""],
["", "picza-ton", "Пица Тон", "2,80", "", ""],
["", "ekstravaganza", "Екстраваганза", "3,50", "", ""]

            ],

            "burgers": [
                ["", "khamburger", "Хамбургер", "0,70", "110", ""],
["", "chijzburger", "Чийзбургер", "1,40", "110", ""],
["", "yammburger", "Яммбургер", "0,70", "110", ""],
["", "dvoen-chijzburger", "Двоен Чийзбургер", "2,10", "", ""],
["", "chikn-burger", "Чикън Бургер", "2,10", "", ""],
["", "big-burger", "Биг Бургер", "2,80", "", ""],
["", "premium-burger", "Премиум бургер", "2,80", "", ""],
["", "bejkn-strijt", "Бейкън стрийт", "2,10", "", ""],
["", "mega-burger", "Мега Бургер", "2,10", "", ""],
["", "gurme-burger", "Гурме Бургер", "3,50", "", ""],
["", "patato", "Патато", "2,10", "", ""],
["", "khamburger-s-1-pileshko-kyufte", "Хамбургер с 1 пилешко кюфте", "2,10", "200", ""],
["", "khamburger-s-2-pileshki-kyufteta", "Хамбургер с 2 пилешки кюфтета", "2,10", "250", ""],
["", "vegetarianski", "Вегетариански", "2,10", "200", ""]

            ],

            "salads": [
                ["", "gradinska-salata", "Градинска салата", "1,40", "350", ""],
["", "khrupkavo-pile", "Хрупкаво пиле", "2,10", "350", ""],
["", "czezar", "Цезар", "2,10", "350", ""],
["", "tuna", "Туна", "2,10", "350", ""],
["", "grczka-salata", "Гръцка салата", "2,10", "350", ""],
["", "tiro-salata", "Тиро Салата", "2,10", "350", ""],
["", "ruska-salata", "Руска Салата", "2,10", "350", ""]

            ],

            "starters": [
                ["", "krekhki-pileshki-kscheta", "Крехки пилешки късчета", "2,80", "200", ""],
["", "khrupkavi-pileshki-purichki", "Хрупкави пилешки Пурички", "2,80", "200", ""],
["", "susameni-pileshki-purichki", "Сусамени пилешки пурички", "2,80", "200", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "0,70", "200", ""]

            ],

            "От пекарната": [
                ["", "prlenka-s-kashkaval-i-shunka", "Пърленка с кашкавал и шунка", "1,40", "250", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "1,40", "280", ""],
["", "banichka-ss-sirene", "Баничка със сирене", "0,70", "160", ""],
["", "banichka-ss-spanak-i-sirene", "Баничка със спанак и сирене", "0,70", "160", ""],
["", "kroasan-s-maslo", "Кроасан с масло", "0,70", "", ""],
["", "kroasan-s-shokolad", "Кроасан с шоколад", "0,70", "", ""],
["", "panini", "Панини", "1,40", "300", ""],
["", "panini-s-meso", "Панини с месо", "2,10", "400", ""],
["", "panini-s-kartofki", "Панини с картофки", "1,40", "350", ""]

            ],

            "Фреш сандвич": [
                ["", "sandvich-toni", "Сандвич Тони", "2,10", "", ""],
["", "sandvich-tri-chijz", "Сандвич Три Чийз", "2,10", "", ""],
["", "sandvich-chiken-chijz", "Сандвич Чикен Чийз", "2,10", "", ""],
["", "sandvich-bejkn-blt", "Сандвич Бейкън BLT", "2,10", "", ""],
["", "sandvich-peperoni", "Сандвич Пеперони", "2,10", "", ""],
["", "sandvich-grczki", "Сандвич Гръцки", "2,10", "", ""],
["", "sandvich-frendski", "Сандвич Френдски", "2,10", "", ""],
["", "sandvich-salami", "Сандвич Салами", "2,10", "", ""],
["", "sandvich-pueshki", "Сандвич Пуешки", "2,10", "", ""],
["", "sandvich-vedzhi-lajt", "Сандвич Веджи Лайт", "2,10", "", ""],
["", "sandvich-shunkov", "Сандвич Шунков", "2,10", "", ""]

            ],

            "Меню Фреш сандвич": [
                ["", "menyu-sandvich-shunkov", "Меню Сандвич Шунков", "2,80", "", ""],
["", "menyu-sandvich-vedzhi-lajt", "Меню Сандвич Веджи Лайт", "2,80", "", ""],
["", "menyu-sandvich-pueshki", "Меню Сандвич Пуешки", "2,80", "", ""],
["", "menyu-sandvich-salami", "Меню Сандвич Салами", "2,80", "", ""],
["", "menyu-sandvich-frendski", "Меню Сандвич Френдски", "2,80", "", ""],
["", "menyu-sandvich-grczki", "Меню Сандвич Гръцки", "2,80", "", ""],
["", "menyu-sandvich-peperoni", "Меню Сандвич Пеперони", "2,80", "", ""],
["", "menyu-sandvich-bejkn-blt", "Меню Сандвич Бейкън BLT", "2,80", "", ""],
["", "menyu-sandvich-chiken-chijz", "Меню Сандвич Чикен Чийз", "2,80", "", ""],
["", "menyu-sandvich-tri-chijz", "Меню Сандвич Три Чийз", "2,80", "", ""],
["", "menyu-sandvich-toni", "Меню Сандвич Тони", "2,80", "", ""]

            ],

            "dunner": [
                ["", "malk-dyuner", "Малък Дюнер", "1,40", "150", ""],
["", "sreded-dyuner", "Средед Дюнер", "2,10", "300", ""],
["", "xxl-dyuner", "XXL Дюнер", "3,50", "500", ""],
["", "giros", "Гирос", "2,80", "250", ""],
["", "golyam-giros", "Голям Гирос", "3,50", "350", ""],
["", "porcziya-dyuner", "Порция Дюнер", "4,90", "400", ""],
["", "nemski-dyuner", "Немски Дюнер", "3,50", "300", ""],
["", "grczki-dzhob", "Гръцки джоб", "2,80", "300", ""]

            ],

            "Тортила дюнери": [
                ["", "tortila-dyuner-s-teleshko-meso", "Тортила дюнер с телешко месо", "2,80", "", ""],
["", "tortila-dyuner-s-pile-na-gril", "Тортила дюнер с пиле на грил", "2,80", "", ""],
["", "tortila-dyuner-s-khrupkavo-pile", "Тортила дюнер с хрупкаво пиле", "2,80", "", ""]

            ],

            "Пиле на грил": [
                ["", "polovin-pile", "Половин пиле", "4,20", "", ""],
["", "czyalo-pile", "Цяло пиле", "7,00", "", ""],
["", "pileshko-butche", "Пилешко бутче", "1,40", "", ""]

            ],

            "Картофки": [
                ["", "malki-przheni-kartofki", "Малки пържени картофки", "0,00", "70", ""],
["", "sredni-przheni-kartofki", "Средни пържени картофки", "0,70", "150", ""],
["", "golemi-przheni-kartofki", "Големи пържени картофки", "1,40", "200", ""],
["", "kartofki-miks", "Картофки Микс", "0,70", "150", ""]

            ],

            "sauces": [
                ["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "bbq-sos", "BBQ сос", "0,00", "50", ""],
["", "sos-gradinski-bilki", "Сос Градински билки", "0,00", "50", ""]

            ],

            "drinks": [
                ["", "zagorka-ken", "Загорка кен", "1,40", "500", ""],
["", "ajryan", "Айрян", "0,70", "", ""],
["", "pepsi", "Пепси", "0,70", "330", ""],
["", "pepsi", "Пепси", "1,40", "500", ""],
["", "sok-rauch", "Сок Rauch", "1,40", "500", ""],
["", "sok-rauch", "Сок Rauch", "0,70", "300", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'burger-point',
        'business_name' => 'Burger Point (Цар Освободител)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Yambol',
        'region' => 'Yambol',
        'postal_code' => '8600',
        'address' => 'ул. Цар Освободител 2',
        'address_additional' => '',
        'coords_x' => '42.48464457',
        'coords_y' => '26.5044336',
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
            
            "salads": [
                ["", "czezar", "Цезар", "5,60", "400", ""],
["", "parizh", "Париж", "4,20", "300", ""],
["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "redena-salata", "Редена салата", "2,80", "250", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "400", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,80", "300", ""],
["", "salata-s-pecheni-chushki-i-domati", "Салата с печени чушки и домати", "4,20", "300", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "snezhanka", "Снежанка", "2,80", "250", ""],
["", "domat-ss-sirene-i-yajcze", "Домат със сирене и яйце", "3,50", "350", ""],
["", "domati-s-moczarela", "Домати с моцарела", "4,90", "300", ""],
["", "zelena-salata-s-chetiri-sirena", "Зелена салата с четири сирена", "4,90", "420", ""],
["", "zelena-salata-yajcze", "Зелена салата яйце", "2,80", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "350", ""],
["", "zelena-salata-ss-sino-sirene", "Зелена салата със синьо сирене", "4,90", "350", ""],
["", "salata-orbita", "Салата Орбита", "3,50", "350", ""],
["", "italianska-salata", "Италианска салата", "2,80", "200", ""],
["", "meksikanska-salata", "Мексиканска салата", "3,50", "350", ""],
["", "evrejska-salata", "Еврейска салата", "2,80", "250", ""],
["", "tabietlijska-salata", "Табиетлийска салата", "4,90", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,10", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "3,50", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "3,50", "", ""],
["", "viola", "Виола", "2,80", "", ""],
["", "laczio", "Лацио", "2,80", "", ""],
["", "tuti-santi", "Тути Санти", "3,50", "", ""],
["", "la-skala", "Ла Скала", "4,20", "", ""],
["", "meksikana", "Мексикана", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "bella", "Белла", "3,50", "", ""],
["", "kapuleti", "Капулети", "3,50", "", ""],
["", "boloneze", "Болонезе", "2,80", "", ""],
["", "vegetariana-meksikana", "Вегетариана Мексикана", "2,80", "", ""],
["", "otvoreno-kalczone", "Отворено Калцоне", "3,50", "", ""],
["", "sicziliana", "Сицилиана", "3,50", "", ""],
["", "lombardiya", "Ломбардия", "4,20", "", ""],
["", "tonita", "Тонита", "3,50", "", ""],
["", "italiana", "Италиана", "2,80", "", ""],
["", "kaprichoza", "Капричоза", "3,50", "", ""],
["", "fiorela", "Фиорела", "3,50", "", ""],
["", "kalczone", "Калцоне", "3,50", "", ""],
["", "brokolina", "Броколина", "2,80", "", ""],
["", "lapiovra", "Лапиовра", "4,90", "", ""],
["", "orbita-hut", "Орбита Hut", "4,20", "", ""],
["", "italianska-pita", "Италианска пита", "2,10", "", ""],
["", "golyama-spanachena-pita", "Голяма спаначена пита", "4,90", "", ""],
["", "formadzhi-ss-smetana", "Формаджи със сметана", "3,50", "", ""]

            ],

            "Пици на пещ": [
                ["", "proshuto", "Прошуто", "7,00", "", ""],
["", "kariola", "Кариола", "5,60", "", ""],
["", "peperoni", "Пеперони", "7,00", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "7,00", "", ""],
["", "toskana", "Тоскана", "7,00", "", ""],
["", "moczarela", "Моцарела", "7,00", "", ""],
["", "stromboli---picza-na-rulo", "Стромболи - пица на руло", "6,30", "", ""]

            ],

            "Притурки за пици": [
                ["", "shunka", "Шунка", "0,70", "50", ""],
["", "bekon", "Бекон", "0,70", "50", ""],
["", "gbi", "Гъби", "0,70", "50", ""],
["", "chushki", "Чушки", "0,00", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "yajcze", "Яйце", "0,00", "50", ""],
["", "maslini", "Маслини", "0,00", "50", ""],
["", "luk", "Лук", "0,00", "50", ""]

            ],

            "sauces": [
                ["", "chili", "Чили", "0,70", "70", ""],
["", "ketchup", "Кетчуп", "0,00", "70", ""],
["", "tartar", "Тартар", "0,00", "70", ""],
["", "majoneza", "Майонеза", "0,00", "70", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "70", ""],
["", "gorchicza", "Горчица", "0,00", "70", ""]

            ],

            "pasta": [
                ["", "orbita", "Орбита", "5,60", "400", ""],
["", "boloneze", "Болонезе", "5,60", "400", ""],
["", "spageti-ss-smetana", "Спагети със сметана", "5,60", "400", ""],
["", "karbonara", "Карбонара", "5,60", "400", ""],
["", "spageti-ss-spanak", "Спагети със спанак", "5,60", "400", ""]

            ],

            "risotto": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "3,50", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "350", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "3,50", "300", ""]

            ],

            "Сухи мезета": [
                ["", "lukanka", "Луканка", "2,80", "100", ""],
["", "shunka", "Шунка", "1,40", "100", ""],
["", "kashkaval", "Кашкавал", "2,10", "100", ""],
["", "sirene", "Сирене", "1,40", "100", ""],
["", "file", "Филе", "2,10", "100", ""],
["", "plato-sukhi-mezeta", "Плато сухи мезета", "5,60", "300", ""]

            ],

            "alaminuti": [
                ["", "omlet-natyur", "Омлет натюр", "2,10", "", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "", ""],
["", "omlet-asorti", "Омлет Асорти", "3,50", "", ""],
["", "yajcza-na-ochi-3br", "Яйца на очи 3бр.", "2,10", "", ""],
["", "khemendeks", "Хемендекс", "4,20", "", ""]

            ],

            "Топли предястия": [
                ["", "panirano-topeno-sirene-s-borovinki", "Панирано топено сирене с боровинки", "4,90", "250", ""],
["", "svinski-drob-na-skara", "Свински дроб на скара", "2,80", "200", ""],
["", "tikvichki-s-kiselo-mlyako", "Тиквички с кисело мляко", "3,50", "200", ""],
["", "panirano-sino-sirene", "Панирано синьо сирене", "3,50", "250", ""],
["", "solena-palachinka-2br", "Солена палачинка 2бр.", "3,50", "", ""],
["", "midi-s-topeno-sirene", "Миди с топено сирене", "5,60", "200", ""],
["", "nemska-przhena", "Немска пържена", "3,50", "300", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "", ""]

            ],

            "Ястия с пиле": [
                ["", "pileshki-drobcheta-s-maslo", "Пилешки дробчета с масло", "3,50", "250", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,90", "250", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "200", ""],
["", "pileshka-przhola-na-tigan", "Пилешка пържола на тиган", "4,90", "200", ""],
["", "pileshko-shishche-but", "Пилешко шишче бут", "2,10", "100", ""],
["", "pileshka-przhola-file", "Пилешка пържола филе", "4,90", "200", ""],
["", "pileshki-karencza", "Пилешки каренца", "4,90", "200", ""],
["", "shishche-ot-file", "Шишче от филе", "2,10", "120", ""],
["", "pileshki-flejki-ss-susam", "Пилешки флейки със сусам", "4,90", "300", ""],
["", "marinovani-pileshki-krilcza", "Мариновани пилешки крилца", "4,20", "350", ""]

            ],

            "Основни ястия": [
                ["", "pile-s-pechurki", "Пиле с печурки", "7,00", "300", ""],
["", "kavrma-s-pile-v-omlet", "Кавърма с пиле в омлет", "4,90", "300", ""],
["", "byalo-pile", "Бяло пиле", "5,60", "300", ""],
["", "pile-s-brokoli", "Пиле с броколи", "5,60", "300", ""],
["", "pileshki-shishlk", "Пилешки шишлък", "4,20", "300", ""],
["", "pile-ss-zelenchuczi", "Пиле със зеленчуци", "5,60", "400", ""],
["", "pile-mekso", "Пиле Мексо", "5,60", "250", ""],
["", "pileshka-przhola-pane", "Пилешка пържола пане", "4,90", "200", ""],
["", "shniczel-ot-klczano-meso", "Шницел от кълцано месо", "5,60", "300", ""],
["", "pikantno-pile", "Пикантно пиле", "7,00", "300", ""],
["", "bolyarska-vecherya-na-sach", "Болярска вечеря на сач", "9,10", "500", ""],
["", "pile-s-ananas", "Пиле с ананас", "7,70", "500", ""],
["", "pile-s-proshuto", "Пиле с прошуто", "7,00", "250", ""],
["", "pile-na-gril-12", "Пиле на грил 1/2", "6,30", "", ""]

            ],

            "Рибни ястия": [
                ["", "khek-pane", "Хек пане", "4,90", "300", ""],
["", "skumriya-na-skara", "Скумрия на скара", "4,20", "400", ""],
["", "rulcza-ot-raczi-pane", "Рулца от раци пане", "2,80", "150", ""],
["", "kalmari-pane", "Калмари пане", "4,20", "180", ""],
["", "kralski-skaridi", "Кралски скариди", "11,20", "150", ""],
["", "pstrva", "Пъстърва", "6,30", "250", ""],
["", "czipura", "Ципура", "9,10", "250", ""]

            ],

            "grill": [
                ["", "svinska-przhola", "Свинска пържола", "4,90", "200", ""],
["", "shishche", "Шишче", "2,10", "100", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "nadenicza-lukaniki", "Наденица Луканики", "4,20", "250", ""],
["", "nadenichki-5br", "Наденички 5бр.", "4,20", "", ""],
["", "marinovani-rebrcza", "Мариновани ребърца", "4,20", "200", ""],
["", "marinovan-shish", "Маринован шиш", "4,20", "200", ""],
["", "marinovani-svinski-stekcheta", "Мариновани свински стекчета", "4,90", "200", ""],
["", "khajdushko-plato", "Хайдушко плато", "13,30", "650", ""],
["", "vlche-meze", "Вълче мезе", "9,10", "400", ""],
["", "svinski-grdi-na-skara-s-przheni-kartofi-i-sos", "Свински гърди на скара с пържени картофи и сос", "7,70", "400", ""]

            ],

            "garnish": [
                ["", "pryasna-garnitura", "Прясна гарнитура", "1,40", "250", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "", ""],
["", "garnitura-za-skara", "Гарнитура за скара", "1,40", "", ""],
["", "zadushen-oriz", "Задушен ориз", "1,40", "", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "", ""],
["", "marinovani-lyuti-chushleta", "Мариновани люти чушлета", "0,00", "", ""],
["", "chesnova-pitka", "Чеснова питка", "0,70", "", ""],
["", "kashkavalena-pitka", "Кашкавалена питка", "0,70", "", ""],
["", "khlyab", "Хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "bavarska-palachinka-za-dvama", "Баварска палачинка за двама", "4,90", "160", ""],
["", "plodova-salata", "Плодова салата", "2,80", "160", ""],
["", "czedeno-kiselo-mlyako", "Цедено кисело мляко", "2,10", "", ""],
["", "palachinka", "Палачинка", "2,10", "", ""],
["", "gofreta", "Гофрета", "2,10", "", ""],
["", "krem-karamel", "Крем карамел", "2,10", "", ""],
["", "krem-bryule", "Крем брюле", "2,10", "", ""],
["", "syurpriz", "Сюрприз", "2,80", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/483045.jpg?width=302"]

            ],

            "drinks": [
                ["", "shumensko", "Шуменско", "0,70", "", ""],
["", "tuborg", "Туборг", "1,40", "", ""],
["", "pirinsko", "Пиринско", "1,40", "500", ""],
["", "karlsberg", "Карлсберг", "2,10", "", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "pirinsko-radler", "Пиринско Радлер", "1,40", "500", ""],
["", "kamenicza", "Каменица", "1,40", "500", ""],
["", "beks", "Бекс", "2,10", "500", ""],
["", "staropramen", "Старопрамен", "2,10", "500", ""],
["", "studen-chaj", "Студен чай", "0,70", "250", ""],
["", "stela-artoya", "Стела Артоя", "2,10", "500", ""]

            ]
        }', 
        'slug' => 'pizza-grill-orbita',
        'business_name' => 'Pizza &amp; Grill Orbita',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Граф Игнатиев 20',
        'address_additional' => '',
        'coords_x' => '43.4054899',
        'coords_y' => '23.2270411',
        'phone' => '+359888009888',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "lakhmadzhun", "Лахмаджун", "2,10", "200", ""],
["", "picza-pileroni", "Пица Пилерони", "6,30", "500", ""],
["", "picza-salami", "Пица Салами", "6,30", "500", ""],
["", "brusketi-moczarelo", "Брускети Моцарело", "4,90", "", ""],
["", "zelenchuczi-s-khrupkavo-pile", "Зеленчуци с хрупкаво пиле", "4,90", "450", ""]

            ],

            "salads": [
                ["", "salata-czezar", "Салата Цезар", "4,90", "350", ""],
["", "salata-takos", "Салата Такос", "4,20", "350", ""],
["", "salata-korsika", "Салата Корсика", "4,90", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "salata-s-avokado-i-ajsberg", "Салата с авокадо и айсберг", "4,90", "350", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "300", ""]

            ],

            "alaminuti": [
                ["", "pileshki-khapki-s-mlechen-sos", "Пилешки хапки с млечен сос", "4,20", "250", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,20", "250", ""],
["", "pileshki-karencza-s-aromatni-zelenchuczi", "Пилешки каренца с ароматни зеленчуци", "4,90", "250", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "3,50", "200", ""],
["", "khapki-sirene", "Хапки сирене", "3,50", "200", ""],
["", "topeni-sirencza-s-kornflejks", "Топени сиренца с корнфлейкс", "4,20", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "kartofi-chips", "Картофи чипс", "2,80", "250", ""],
["", "kartofi-chips-ss-sirene", "Картофи чипс със сирене", "2,80", "300", ""],
["", "kartofeni-kyuftencza-s-mlechen-sos", "Картофени кюфтенца с млечен сос", "2,80", "300", ""],
["", "tortila-s-pileshko-meso", "Тортила с пилешко месо", "3,50", "400", ""],
["", "tortila-bijf", "Тортила Бийф", "4,90", "400", ""],
["", "brusketi-s-avokado-i-moczarela", "Брускети с авокадо и моцарела", "4,20", "250", ""],
["", "brusketi-s-tikvichki-domat-i-moczarela", "Брускети с тиквички, домат и моцарела", "4,20", "250", ""],
["", "panirana-moczarela-s-borovinkov-sos", "Панирана моцарела с боровинков сос", "4,20", "250", ""]

            ],

            "Тостери и сандвичи": [
                ["", "princzesa-s-kashkaval", "Принцеса с кашкавал", "2,10", "200", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "2,10", "200", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "2,10", "200", ""],
["", "tost-s-lukanka-i-kashkaval", "Тост с луканка и кашкавал", "2,10", "200", ""],
["", "tost-s-shunka-i-kashkaval", "Тост с шунка и кашкавал", "2,10", "200", ""],
["", "klub-sandvich", "Клуб сандвич", "3,50", "400", ""],
["", "teleshki-burger", "Телешки бургер", "4,20", "300", ""],
["", "pileshki-burger", "Пилешки бургер", "4,20", "300", ""],
["", "zdravoslovna-zakuska", "Здравословна закуска", "2,80", "250", ""],
["", "tortila-doritos", "Тортила Доритос", "4,20", "400", ""],
["", "solena-palachinka", "Солена палачинка", "4,20", "300", ""]

            ],

            "pizza": [
                ["", "picza-vegetar", "Пица Вегетар", "5,60", "", ""],
["", "picza-margarita", "Пица Маргарита", "4,90", "", ""],
["", "picza-sicziliya", "Пица Сицилия", "5,60", "", ""]

            ],

            "desserts": [
                ["", "palachinka-s-konfityur", "Палачинка с конфитюр", "1,40", "120", ""],
["", "palachinka-s-shokolad-i-topka-sladoled", "Палачинка с шоколад и топка сладолед", "2,10", "150", ""]

            ]
        }', 
        'slug' => 'restorant-bambolino',
        'business_name' => 'Ресторант Бамболино',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6300',
        'address' => 'ул. Добруджа 42',
        'address_additional' => '',
        'coords_x' => '41.9310592',
        'coords_y' => '25.5465154',
        'phone' => '+359889038043',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Класически пици на пещ": [
                ["", "margerita", "Маргерита", "2,80", "", ""],
["", "vegetariana", "Вегетариана", "2,80", "", ""],
["", "salsiche", "Салсиче", "3,50", "", ""],
["", "francziskana", "Францискана", "3,50", "", ""],
["", "kalabreze", "Калабрезе", "3,50", "", ""],
["", "kuatro-formadzho", "Куатро Формаджо", "4,20", "", ""],
["", "di-karne", "Ди Карне", "4,20", "", ""],
["", "kontandina", "Контандина", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "kalczone", "Калцоне", "3,50", "", ""],
["", "proshuto-krudo", "Прошуто Крудо", "3,50", "", ""],
["", "fruti-di-mare", "Фрути ди Маре", "4,20", "", ""],
["", "rustika", "Рустика", "4,20", "", ""],
["", "remini", "Ремини", "4,20", "", ""],
["", "tropikana", "Тропикана", "3,50", "", ""],
["", "toskana", "Тоскана", "4,20", "", ""],
["", "katani", "Катани", "3,50", "", ""],
["", "meksikana", "Мексикана", "3,50", "", ""],
["", "jork", "Йорк", "4,20", "", ""],
["", "piperone", "Пипероне", "3,50", "", ""],
["", "medichi", "Медичи", "4,90", "", ""],
["", "popaj", "Попай", "3,50", "", ""],
["", "gradinarska", "Градинарска", "4,20", "", ""],
["", "byagashho-pile", "Бягащо пиле", "4,20", "", ""],
["", "bianka", "Бианка", "4,20", "", ""],
["", "marchela", "Марчела", "3,50", "", ""],
["", "proshuto", "Прошуто", "4,20", "", ""],
["", "kapreze", "Капрезе", "4,20", "", ""],
["", "picza-pacheli", "Пица Пачели", "3,50", "", ""]

            ],

            "pasta": [
                ["", "montanara", "Монтанара", "4,20", "650", ""],
["", "bolonez", "Болонез", "4,20", "650", ""],
["", "karbonara", "Карбонара", "4,90", "600", ""],
["", "primavera", "Примавера", "4,90", "600", ""],
["", "vegetariana", "Вегетариана", "3,50", "600", ""]

            ],

            "Тортелини": [
                ["", "tortelini-viktoriya", "Тортелини Виктория", "5,60", "580", ""],
["", "tortelini-bolonez", "Тортелини Болонез", "4,90", "500", ""]

            ],

            "Талиатели": [
                ["", "vichencza", "Виченца", "4,90", "600", ""],
["", "florentina", "Флорентина", "4,20", "680", ""],
["", "lazanya-karbonara", "Лазаня Карбонара", "4,20", "500", ""]

            ],

            "salads": [
                ["", "kartofena-fiesta", "Картофена фиеста", "2,80", "420", ""],
["", "meshana-redena", "Мешана редена", "2,10", "350", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "400", ""],
["", "vulkan", "Вулкан", "3,50", "500", ""],
["", "ikhtimanska", "Ихтиманска", "3,50", "500", ""],
["", "salata-proshuto", "Салата Прошуто", "4,90", "320", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "400", ""],
["", "salata-kapreze", "Салата капрезе", "4,20", "360", ""],
["", "salata-ajsberg-s-riba-ton", "Салата айсберг с риба тон", "3,50", "270", ""]

            ],

            "Специалитети на пещ": [
                ["", "pile-s-bekon-na-keremida", "Пиле с бекон на керемида", "6,30", "600", ""],
["", "gbi-s-kashkaval", "Гъби с кашкавал", "3,50", "250", ""],
["", "kartofi-pikantni", "Картофи пикантни", "2,80", "300", ""],
["", "selski-kartofi-s-khrupkava-korichka", "Селски картофи с хрупкава коричка", "2,80", "250", ""],
["", "kartofi-ss-sirene-i-kashkaval", "Картофи със сирене и кашкавал", "3,50", "500", ""],
["", "gola-prlenka", "Гола пърленка", "0,70", "200", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "230", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "250", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "200", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,80", "300", ""],
["", "susamena-prlenka", "Сусамена пърленка", "1,40", "200", ""],
["", "pile-ss-zelenchuczi", "Пиле със зеленчуци", "4,90", "460", ""],
["", "kartofi-s-bekon-i-kashkaval", "Картофи с бекон и кашкавал", "3,50", "420", ""],
["", "svinski-rebra-na-peshh-s-garnitura-przheni-kartofi", "Свински ребра на пещ с гарнитура пържени картофи", "11,20", "950", ""],
["", "svinski-dzholan-na-peshh-s-garnitura-przheni-kartofi", "Свински джолан на пещ с гарнитура пържени картофи", "11,90", "900", ""],
["", "vlche-meze", "Вълче мезе", "10,50", "500", ""],
["", "pushena-nadenicza-na-sach", "Пушена наденица на сач", "4,90", "450", ""],
["", "svinsko-bonfile-na-sach", "Свинско бонфиле на сач", "7,70", "600", ""],
["", "svinski-kareta-na-sach-s-gben-sos", "Свински карета на сач с гъбен сос", "7,70", "450", ""],
["", "pileshka-przhola-na-sach", "Пилешка пържола на сач", "5,60", "350", ""],
["", "zadusheni-zelenchuczi-na-sach", "Задушени зеленчуци на сач", "4,90", "700", ""],
["", "svinska-przhola-na-sach", "Свинска пържола на сач", "6,30", "550", ""],
["", "sach-s-pileshko-meso", "Сач с пилешко месо", "8,40", "720", ""],
["", "katino-meze", "Катино мезе", "8,40", "700", ""],
["", "kombiniran-sach", "Комбиниран сач", "7,70", "650", ""],
["", "arabska-prlenka", "Арабска пърленка", "1,40", "200", ""],
["", "sach-ss-zelenchuczi-yajcza-i-kashkaval", "Сач със зеленчуци, яйца и кашкавал", "4,90", "550", ""]

            ],

            "alaminuti": [
                ["", "brokoli-ss-sino-sirene-i-smetana", "Броколи със синьо сирене и сметана", "4,20", "400", ""],
["", "gbi-s-maslo", "Гъби с масло", "2,80", "250", ""],
["", "ezik-s-maslo", "Език с масло", "3,50", "150", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "350", ""],
["", "kashkaval-orli", "Кашкавал орли", "3,50", "250", ""],
["", "oriz-khachimiczu", "Ориз Хачимицу", "2,80", "400", ""],
["", "panirani-topeni-sirencza", "Панирани топени сиренца", "4,20", "250", ""],
["", "pile-orli", "Пиле Орли", "4,20", "350", ""],
["", "pile-khachimiczu", "Пиле Хачимицу", "4,90", "500", ""],
["", "pileshki-vodenichki", "Пилешки воденички", "3,50", "450", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "3,50", "550", ""],
["", "pileshki-zhulieni", "Пилешки жулиени", "3,50", "200", ""],
["", "pileshki-zhulieni-ss-smetana", "Пилешки жулиени със сметана", "0,00", "450", ""],
["", "pileshki-kscheta-medichi", "Пилешки късчета Медичи", "5,60", "450", ""],
["", "pileshki-srcza-s-maslo", "Пилешки сърца с масло", "3,50", "230", ""],
["", "pileshki-srcza-po-selski", "Пилешки сърца по селски", "3,50", "500", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "180", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "230", ""],
["", "svinski-drob", "Свински дроб", "2,80", "200", ""],
["", "svinski-ushi", "Свински уши", "3,50", "180", ""],
["", "sirene-orli", "Сирене Орли", "2,80", "250", ""],
["", "khrupkavi-pileshki-zhulieni", "Хрупкави пилешки жулиени", "4,20", "320", ""],
["", "khrupkavi-pileshki-krilcza", "Хрупкави пилешки крилца", "3,50", "320", ""],
["", "khrupkavi-pileshki-filencza", "Хрупкави пилешки филенца", "4,20", "220", ""],
["", "pileshki-kscheta-s-kartofeno-pyure", "Пилешки късчета с картофено пюре", "5,60", "500", ""],
["", "pileshko-plato", "Пилешко плато", "4,20", "400", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "4,20", "250", ""],
["", "svinsko-bonfile-formadzho", "Свинско бонфиле Формаджо", "6,30", "400", ""],
["", "svinsko-bonfile-v-sladko-kisel-sos", "Свинско бонфиле в сладко-кисел сос", "5,60", "400", ""],
["", "zelenchuczi-tempura", "Зеленчуци темпура", "3,50", "400", ""],
["", "pile-po-italianski", "Пиле по италиански", "4,90", "450", ""],
["", "krilcza-tempura", "Крилца темпура", "3,50", "320", ""],
["", "kievski-kotlet", "Киевски котлет", "4,20", "350", ""],
["", "przheni-kyufteta", "Пържени кюфтета", "3,50", "350", ""],
["", "krekhko-svinsko-bonfile", "Крехко свинско бонфиле", "7,00", "600", ""]

            ],

            "Рибно меню": [
                ["", "paniran-khek", "Паниран хек", "6,30", "320", ""],
["", "przhen-som", "Пържен сом", "4,90", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "5,60", "250", ""],
["", "pstrva-przhena", "Пъстърва пържена", "5,60", "350", ""],
["", "som-na-keremida-s-kashkaval", "Сом на керемида с кашкавал", "5,60", "320", ""],
["", "amur-na-keremida", "Амур на керемида", "5,60", "320", ""]

            ],

            "garnish": [
                ["", "lyuti-chushki-po-grczki", "Люти чушки по гръцки", "1,40", "100", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "200", ""],
["", "kartofi-przheni", "Картофи пържени", "0,70", "200", ""],
["", "studena-garnitura", "Студена гарнитура", "1,40", "200", ""],
["", "zadushen-oriz", "Задушен ориз", "1,40", "180", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "100", ""]

            ],

            "Скара на жарава": [
                ["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,20", "200", ""],
["", "czarska-nadenicza-s-przheni-kartofi", "Царска наденица с пържени картофи", "4,90", "450", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "4,90", "300", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "3,50", "500", ""],
["", "kombiniran-shish", "Комбиниран шиш", "6,30", "450", ""],
["", "shashlik-s-przheni-kartofi", "Шашлик с пържени картофи", "6,30", "450", ""],
["", "pileshka-przhola-ot-file", "Пилешка пържола от филе", "4,20", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshki-krila-marinovani", "Пилешки крила мариновани", "2,80", "300", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,10", "240", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "120", ""],
["", "svinski-rebrcza-marinovani", "Свински ребърца мариновани", "4,90", "320", ""]

            ],

            "sauces": [
                ["", "gorchicza", "Горчица", "0,00", "60", ""],
["", "sos-medichi", "Сос Медичи", "0,70", "60", ""],
["", "tartar", "Тартар", "0,00", "60", ""],
["", "bristl", "Бристъл", "0,00", "60", ""],
["", "venecziya", "Венеция", "0,00", "60", ""],
["", "pikanten", "Пикантен", "0,00", "60", ""],
["", "pesto", "Песто", "0,70", "60", ""],
["", "ketchup", "Кетчуп", "0,00", "60", ""],
["", "majoneza", "Майонеза", "0,00", "60", ""],
["", "verona", "Верона", "0,00", "60", ""]

            ],

            "Омлети": [
                ["", "omlet-natyur", "Омлет натюр", "1,40", "220", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "250", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "250", ""],
["", "kombiniran-omlet", "Комбиниран омлет", "2,80", "300", ""]

            ],

            "additives": [
                ["", "bekon", "Бекон", "0,70", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "gbi", "Гъби", "0,00", "50", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "limon", "Лимон", "0,00", "50", ""],
["", "salam-lukankov", "Салам Луканков", "0,70", "50", ""],
["", "salam-shpek", "Салам Шпек", "0,70", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "chushki", "Чушки", "0,00", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""],
["", "spanak", "Спанак", "0,00", "50", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "50", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "maslini", "Маслини", "0,00", "", ""],
["", "domati", "Домати", "0,00", "50", ""],
["", "krastaviczi", "Краставици", "0,00", "50", ""],
["", "krutoni", "Крутони", "0,00", "50", ""],
["", "riba-ton", "Риба Тон", "0,70", "50", ""],
["", "topeno-pusheno-sirene", "Топено-пушено сирене", "0,70", "50", ""],
["", "lyuta-chushka", "Люта чушка", "0,70", "", ""],
["", "morkov", "Морков", "0,00", "50", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "zekhtin", "Зехтин", "0,00", "50", ""],
["", "grakh", "Грах", "0,00", "50", ""],
["", "ananas", "Ананас", "0,00", "50", ""],
["", "banan", "Банан", "0,00", "50", ""],
["", "techen-shokolad", "Течен шоколад", "0,00", "50", ""],
["", "pile", "Пиле", "0,70", "50", ""],
["", "proshuto", "Прошуто", "1,40", "50", ""],
["", "moczarela", "Моцарела", "0,70", "50", ""]

            ],

            "desserts": [
                ["", "chijz-kejk", "Чийз Кейк", "2,80", "180", ""],
["", "paniran-banan", "Паниран банан", "2,10", "150", ""],
["", "medichi", "Медичи", "2,10", "290", ""],
["", "plodova-salata", "Плодова салата", "2,80", "350", ""],
["", "czedeno-kiselo-mlyako-s-med-i-orekhi", "Цедено кисело мляко с мед и орехи", "2,80", "250", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "1,40", "180", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "180", ""]

            ],

            "Кока Кола продукти": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/770015.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/770016.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/770017.jpg?width=302"],
["", "schweppes-tonik", "Schweppes Тоник", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/770018.jpg?width=302"],
["", "cappy-portokal-nektar", "Cappy Портокал Нектар", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/770019.jpg?width=302"],
["", "cappy-yablka-nektar", "Cappy Ябълка Нектар", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/770020.jpg?width=302"],
["", "cappy-vishna-plodova-napitka", "Cappy Вишна Плодова напитка", "1,40", "250", "https://images.deliveryhero.io/image/fd-bg/Products/770021.jpg?width=302"]

            ],

            "Безалкохолни напитки": [
                ["", "sruden-chaj", "Сруден чай", "1,40", "250", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "500", ""]

            ],

            "beer": [
                ["", "beks", "Бекс", "1,40", "500", ""],
["", "staropramen", "Старопрамен", "1,40", "500", ""],
["", "stela-artoa", "Стела Артоа", "1,40", "500", ""],
["", "burgasko", "Бургаско", "1,40", "500", ""],
["", "kamenicza-svetlo", "Каменица светло", "1,40", "500", ""],
["", "kamenicza-tmno", "Каменица тъмно", "1,40", "500", ""],
["", "kamenicza-fresh-limon", "Каменица фреш лимон", "1,40", "500", ""]

            ],

            "Винен лист": [
                ["", "roze", "Розе", "9,10", "750", ""],
["", "traminer-trgovishhe-byalo-vino", "Траминер Търговище бяло вино", "9,80", "750", ""],
["", "shardone-trgovishhe-byalo-vino", "Шардоне Търговище бяло вино", "9,10", "750", ""],
["", "muskat-trgovishhe-byalo-vino", "Мускат Търговище бяло вино", "8,40", "750", ""],
["", "merlo-kaberne-sovinon-mavrud-cherveno-vino", "Мерло, Каберне Совиньон, Мавруд червено вино", "9,10", "750", ""],
["", "merlo-kaberne-sovinon-mavrud---rezerva-cherveno-vino", "Мерло, Каберне Совиньон, Мавруд - Резерва червено вино", "11,20", "750", ""]

            ]
        }', 
        'slug' => 'pizza-bar-medichi',
        'business_name' => 'Pizza Bar &amp; Grill Медичи',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Yambol',
        'region' => 'Yambol',
        'postal_code' => '8600',
        'address' => 'ул. Търговска 31',
        'address_additional' => '',
        'coords_x' => '42.48200858',
        'coords_y' => '26.51200936',
        'phone' => '+35946663549',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "shkembe", "Шкембе", "1,40", "300", ""],
["", "tarator", "Таратор", "0,70", "300", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,80", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "salata-prestizh", "Салата Престиж", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "400", ""],
["", "zelena-salata", "Зелена салата", "2,80", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "350", ""],
["", "sharena-salata", "Шарена салата", "3,50", "400", ""],
["", "salata-ajsberg-s-chetiri-vida-sirena", "Салата Айсберг с четири вида сирена", "4,20", "300", ""],
["", "salata-czezar", "Салата Цезар", "3,50", "300", ""],
["", "vitaminioza", "Витаминиоза", "3,50", "300", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,80", "300", ""],
["", "pechen-piper-ss-sirene", "Печен пипер със сирене", "2,80", "300", ""],
["", "snezhanka", "Снежанка", "2,80", "250", ""],
["", "katk", "Катък", "2,80", "250", ""],
["", "slavyanska-salata", "Славянска салата", "2,80", "300", ""]

            ],

            "Студени предястия": [
                ["", "grilovani-tikvichki", "Гриловани тиквички", "3,50", "300", ""],
["", "spanacheni-rolcza-ss-sirene", "Спаначени ролца със сирене", "2,80", "200", ""],
["", "sirene", "Сирене", "1,40", "100", ""],
["", "sino-sirene", "Синьо сирене", "2,80", "100", ""],
["", "kashkaval", "Кашкавал", "2,10", "100", ""],
["", "moczarela", "Моцарела", "2,80", "100", ""],
["", "lukanka", "Луканка", "2,80", "100", ""],
["", "sudzhuk", "Суджук", "2,80", "100", ""],
["", "pusheno-file", "Пушено филе", "2,10", "100", ""],
["", "file-elena", "Филе Елена", "4,90", "100", ""],
["", "koktejlno-plato", "Коктейлно плато", "15,40", "600", ""],
["", "czarevicza-v-maslo", "Царевица в масло", "1,40", "250", ""]

            ],

            "Топли предястия": [
                ["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "200", ""],
["", "pileshki-flejki-pane", "Пилешки флейки пане", "4,20", "200", ""],
["", "svinski-ezik-v-maslo", "Свински език в масло", "3,50", "250", ""],
["", "rolcza-ot-raczi-pane", "Ролца от раци пане", "3,50", "200", ""],
["", "kashkaval-khapki-pane", "Кашкавал хапки пане", "4,20", "200", ""],
["", "sirencza-pane", "Сиренца пане", "3,50", "200", ""],
["", "topeni-sirencza-s-borovinkov-sos", "Топени сиренца с боровинков сос", "4,20", "250", ""],
["", "rolcza-sliven", "Ролца Сливен", "3,50", "200", ""],
["", "sirene-v-bekon-na-shish", "Сирене в бекон на шиш", "3,50", "200", ""],
["", "plneni-gbki-s-bekon-i-kashkaval", "Пълнени гъбки с бекон и кашкавал", "3,50", "250", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "3,50", "200", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "2,80", "250", ""]

            ],

            "Ястия от пилешко": [
                ["", "snezhno-pile", "Снежно пиле", "4,90", "500", ""],
["", "plneni-pileshki-grdi-ss-spanak", "Пълнени пилешки гърди със спанак", "5,60", "400", ""],
["", "pileshki-grdi-ss-sos-ot-sirena", "Пилешки гърди със сос от сирена", "4,90", "350", ""],
["", "pileshko-file-ss-sos-ot-gorski-gbi", "Пилешко филе със сос от горски гъби", "4,90", "350", ""],
["", "pile-ss-zelenchuczi", "Пиле със зеленчуци", "4,90", "400", ""],
["", "pileshki-krilcza-ss-sos-barbekyu", "Пилешки крилца със сос Барбекю", "3,50", "300", ""],
["", "pileshko-vreteno", "Пилешко вретено", "7,00", "400", ""],
["", "pileshka-przhola-file-na-skara", "Пилешка пържола филе на скара", "4,90", "200", ""],
["", "pileshka-przhola-but-na-skara", "Пилешка пържола бут на скара", "4,90", "200", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""],
["", "pile-barbekyuche", "Пиле Барбекюче", "9,80", "500", ""]

            ],

            "Ястия от свинско": [
                ["", "dzholan-plaza", "Джолан Плаза", "9,10", "500", ""],
["", "gorska-przhola", "Горска пържола", "6,30", "400", ""],
["", "rebrcza", "Ребърца", "4,90", "400", ""],
["", "svinski-kareta-s-bekon", "Свински карета с бекон", "5,60", "350", ""],
["", "tirolski-shniczel", "Тиролски шницел", "5,60", "400", ""],
["", "svinska-przhola", "Свинска пържола", "4,90", "200", ""],
["", "svinski-kareta", "Свински карета", "4,90", "200", ""],
["", "svinsko-shishche-na-skara", "Свинско шишче на скара", "2,10", "100", ""],
["", "krnache", "Кърначе", "2,10", "200", ""],
["", "kyufte", "Кюфте", "0,70", "70", ""],
["", "kebapche", "Кебапче", "0,70", "70", ""],
["", "chrevcza-na-skara", "Чревца на скара", "3,50", "200", ""],
["", "svinski-drob", "Свински дроб", "2,80", "300", ""],
["", "svinsko-barbekyuche", "Свинско барбекюче", "10,50", "500", ""]

            ],

            "Ястия от телешко": [
                ["", "teleshki-stek-na-skara", "Телешки стек на скара", "10,50", "200", ""],
["", "teleshko-bok-chou", "Телешко Бок Чоу", "5,60", "350", ""],
["", "teleshko-s-manatarki", "Телешко с манатарки", "11,90", "300", ""],
["", "pepr-stek", "Пепър стек", "11,20", "200", ""]

            ],

            "Вегетариански ястия": [
                ["", "bum---bum", "Бум - бум", "3,50", "350", ""],
["", "chushki-byurek", "Чушки бюрек", "2,80", "250", ""],
["", "zelenchuczi-barbekyu", "Зеленчуци барбекю", "2,80", "300", ""],
["", "gbi-sote", "Гъби соте", "2,80", "200", ""],
["", "spanacheni-kyufteta-s-chesnov-sos", "Спаначени кюфтета с чеснов сос", "2,80", "250", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,80", "250", ""]

            ],

            "pasta": [
                ["", "spageti-arabyata", "Спагети Арабята", "3,50", "450", ""],
["", "spageti-boloneze", "Спагети Болонезе", "3,50", "450", ""],
["", "fetochini-karbonara", "Феточини Карбонара", "3,50", "450", ""],
["", "lazanya-s-shunka-i-gbi", "Лазаня с шунка и гъби", "4,20", "450", ""]

            ],

            "risotto": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "2,80", "300", ""],
["", "rizoto-s-manatarki", "Ризото с манатарки", "4,20", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "3,50", "300", ""]

            ],

            "Рибни изкушение": [
                ["", "pstrva", "Пъстърва", "5,60", "250", ""],
["", "somga-kotlet", "Сьомга котлет", "8,40", "250", ""],
["", "lavrak", "Лаврак", "7,00", "250", ""],
["", "czipura", "Ципура", "7,00", "250", ""],
["", "byala-riba-pane", "Бяла риба пане", "3,50", "300", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-kartofi-chikn", "Запеканка с картофи Чикън", "3,50", "400", ""]

            ],

            "sachs": [
                ["", "sach-plaza", "Сач Плаза", "7,70", "500", ""],
["", "rodopski-sach", "Родопски сач", "7,70", "500", ""],
["", "svinski-vrat-provansal", "Свински врат Провансал", "7,70", "500", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "4,90", "500", ""],
["", "plato-strandzha-za-kompaniya", "Плато Странджа за компания", "68,60", "3500", ""]

            ],

            "garnish": [
                ["", "kartofi-sote", "Картофи соте", "1,40", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "200", ""],
["", "kartofi-s-kozha", "Картофи с кожа", "1,40", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""],
["", "garnitura-za-skara", "Гарнитура за скара", "1,40", "200", ""],
["", "miks-zadusheni-zelenchuczi", "Микс задушени зеленчуци", "1,40", "200", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,80", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "3,50", "", ""],
["", "peperoni", "Пеперони", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "2,80", "", ""],
["", "chetiri-sezona", "Четири сезона", "3,50", "", ""],
["", "kaprizna", "Капризна", "3,50", "", ""],
["", "kalczone", "Калцоне", "3,50", "", ""],
["", "el-dorado", "Ел Дорадо", "3,50", "", ""],
["", "el-tonito", "Ел Тонито", "3,50", "", ""],
["", "spanachena-pita", "Спаначена пита", "3,50", "", ""]

            ],

            "Детско меню": [
                ["", "malka-picza-tom-i-dzheri", "Малка пица Том и Джери", "3,50", "500", ""]

            ],

            "Хлебчета": [
                ["", "chesnovo-khlebche-ss-sirene", "Чесново хлебче със сирене", "0,70", "140", ""],
["", "prlenka", "Пърленка", "0,70", "150", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "30", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "0,70", "100", ""],
["", "chesnovo-khlebche-s-kashkaval", "Чесново хлебче с кашкавал", "0,70", "140", ""]

            ],

            "sauces": [
                ["", "majonezen", "Майонезен", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "chesnov", "Чеснов", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "chili", "Чили", "0,00", "50", ""],
["", "tartar", "Тартар", "0,00", "50", ""]

            ],

            "desserts": [
                ["", "chijzkejk", "Чийзкейк", "1,40", "", ""]

            ]
        }', 
        'slug' => 'restorant-plaza',
        'business_name' => 'Ресторант Плаза',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Цар Борис III , 3',
        'address_additional' => '',
        'coords_x' => '43.40732038',
        'coords_y' => '23.22618506',
        'phone' => '+359885666277',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "pileshki-burger", "Пилешки бургер", "4,90", "320", ""],
["", "parliviya-jack", "Парливия Jack", "4,90", "350", ""],
["", "amerikanski-klasicheski-burger", "Американски Класически бургер", "4,90", "300", ""],
["", "barbekyu-bekon", "Барбекю бекон", "4,90", "300", ""],
["", "pileshki-burger-s-bekon", "Пилешки бургер с бекон", "5,60", "380", ""]

            ],

            "Ястия": [
                ["", "pileshko-file-porcziya-400gr", "Пилешко филе порция 400гр.", "4,90", "", ""],
["", "svinsko-file-porcziya-400gr", "Свинскo филе порция 400гр.", "6,30", "", ""],
["", "teleshki-kyuftencza-ot-black-angus-porcziya-440gr", "Телешки кюфтенца от Black Angus порция 440гр.", "7,70", "", ""]

            ],

            "starters": [
                ["", "przheni-kartofi", "Пържени картофи", "2,80", "200", ""]

            ],

            "sauces": [
                ["", "medena-gorchicza", "Медена горчица", "0,00", "40", ""],
["", "burger-sos", "Бургер сос", "0,00", "40", ""],
["", "ketchup", "Кетчуп", "0,00", "40", ""],
["", "majoneza", "Майонеза", "0,00", "40", ""],
["", "barbekyu", "Барбекю", "0,00", "40", ""],
["", "sladko-chili", "Сладко чили", "0,00", "40", ""],
["", "tartar", "Тартар", "0,00", "40", ""],
["", "gorchicza", "Горчица", "0,00", "40", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,70", "100", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "domashna-pitka", "Домашна Питка", "0,70", "120", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/820641.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/820643.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/820642.jpg?width=302"]

            ]
        }', 
        'slug' => 'yazh-brato-montana',
        'business_name' => 'Яж Брато (Монтана)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3405',
        'address' => 'ул. Анастас Стоянов 18',
        'address_additional' => '',
        'coords_x' => '43.42225639',
        'coords_y' => '23.22243165',
        'phone' => '+359894450016',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "tabule", "Табуле", "3,50", "300", ""],
["", "salata-kopola", "Салата Копола", "4,20", "350", ""],
["", "fresh", "Фреш", "2,80", "350", ""],
["", "salata-s-cherveno-czveklo-i-sino-sirene", "Салата с червено цвекло и синьо сирене", "4,20", "350", ""],
["", "ajsberg", "Айсберг", "4,90", "350", ""],
["", "salata-s-cherven-bob-i-riba-ton", "Салата с червен боб и риба тон", "4,90", "400", ""],
["", "zelena-salata-s-kinoa", "Зелена салата с киноа", "4,20", "370", ""],
["", "salata-s-pechen-patladzhan-piper-domat-kopr-i-magdanoz", "Салата с печен патладжан, пипер, домат, копър и магданоз", "4,20", "350", ""],
["", "italianska-salata", "Италианска салата", "3,50", "400", ""],
["", "slavyanska-salata", "Славянска салата", "3,50", "350", ""],
["", "vitamina", "Витамина", "3,50", "350", ""],
["", "salata-s-file-ot-somga", "Салата с филе от сьомга", "4,90", "250", ""],
["", "czezar", "Цезар", "4,90", "350", ""],
["", "salata-s-riba-ton-i-dresing", "Салата с риба тон и дресинг", "4,20", "400", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "salata-s-proshuto-ajsberg-cheri-domatki-i-parmezan", "Салата с прошуто, айсберг, чери доматки и пармезан", "4,90", "350", ""],
["", "salata-ss-susheni-domati", "Салата със сушени домати", "3,50", "300", ""],
["", "grczka", "Гръцка", "3,50", "380", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "selska-salata", "Селска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "snezhanka", "Снежанка", "2,80", "200", ""],
["", "domati", "Домати", "2,10", "250", ""],
["", "krastaviczi", "Краставици", "2,10", "250", ""],
["", "meshana", "Мешана", "2,10", "300", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,80", "300", ""]

            ],

            "Веган меню": [
                ["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,80", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "pechurki-v-zekhtin", "Печурки в зехтин", "2,80", "250", ""],
["", "zelenchukovo-rizoto-s-manatarki", "Зеленчуково ризото с манатарки", "3,50", "300", ""]

            ],

            "pizza": [
                ["", "kapreze", "Капрезе", "3,50", "", ""],
["", "margarita", "Маргарита", "2,10", "", ""],
["", "neapolitana", "Неаполитана", "2,80", "", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "3,50", "", ""],
["", "fungi", "Фунги", "3,50", "", ""],
["", "di-polo", "Ди Поло", "3,50", "", ""],
["", "kuatro-stadzhioni", "Куатро стаджиони", "3,50", "", ""],
["", "lorenczo", "Лоренцо", "2,80", "", ""],
["", "fruti-di-mare", "Фрути Ди Маре", "4,20", "", ""],
["", "kalczone-umbriya", "Калцоне Умбрия", "3,50", "", ""],
["", "padua", "Падуа", "3,50", "", ""],
["", "figaro", "Фигаро", "3,50", "", ""],
["", "momo", "Момо", "4,20", "", ""],
["", "adriano", "Адриано", "3,50", "", ""],
["", "karera", "Карера", "2,80", "", ""],
["", "spinadzho", "Спинаджо", "2,80", "", ""],
["", "peperoni", "Пеперони", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "3,50", "", ""],
["", "verona", "Верона", "3,50", "", ""],
["", "fradyavolo", "Фрадяволо", "3,50", "", ""],
["", "proshuto-fungi", "Прошуто фунги", "3,50", "", ""],
["", "kariola", "Кариола", "3,50", "", ""],
["", "antigua", "Антигуа", "2,80", "", ""],
["", "detsko-menyu", "Детско меню", "3,50", "300", ""],
["", "selska", "Селска", "3,50", "", ""]

            ],

            "Пърленки": [
                ["", "prlenka", "Пърленка", "0,70", "130", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "150", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "150", ""]

            ],

            "Паста и Спагети": [
                ["", "spageti-s-morski-darove", "Спагети с морски дарове", "4,90", "400", ""],
["", "spageti-s-tri-sirena", "Спагети с три сирена", "3,50", "400", ""],
["", "spageti-na-sedmoto-nebe", "Спагети На седмото небе", "3,50", "400", ""],
["", "spageti-ala-karbonara", "Спагети Ала Карбонара", "4,20", "400", ""],
["", "taliateli-spinadzhio", "Талиатели Спинаджио", "3,50", "400", ""],
["", "taliateli", "Талиатели", "4,20", "400", ""],
["", "spageti-verona", "Спагети Верона", "4,20", "400", ""]

            ],

            "starters": [
                ["", "khrupkavi-pileshki-khapki", "Хрупкави пилешки хапки", "2,80", "250", ""],
["", "khrupkavi-pileshki-filencza-s-kornflejks", "Хрупкави пилешки филенца с корнфлейкс", "4,20", "250", ""],
["", "pikantni-vratni-kscheta", "Пикантни вратни късчета", "4,90", "250", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,90", "280", ""],
["", "kyuftenczata-na-baba", "Кюфтенцата на баба", "4,20", "250", ""]

            ],

            "Ястия от месо": [
                ["", "pateshko-file-ss-sladko-ot-yablki-i-vishni", "Патешко филе със сладко от ябълки и вишни", "7,00", "250", ""],
["", "bejbi-rebrcza-vrkhu-kartofeno-kanape", "Бейби ребърца върху картофено канапе", "5,60", "400", ""],
["", "svinsko-s-maslini", "Свинско с маслини", "6,30", "400", ""],
["", "svinski-kareta-vrkhu-kanape-ot-zapechen-luk", "Свински карета върху канапе от запечен лук", "6,30", "350", ""],
["", "svinsko-s-kri-sos", "Свинско с къри сос", "6,30", "400", ""],
["", "teleshki-pepr-stek", "Телешки пепър стек", "12,60", "250", ""],
["", "svinski-dzholan-s-kartofki-i-aromatni-bilki", "Свински джолан с картофки и ароматни билки", "7,00", "400", ""]

            ],

            "Ястия от риба": [
                ["", "chernokop-na-skara", "Чернокоп на скара", "6,30", "200", ""],
["", "somga-na-plocha-s-kinoa", "Сьомга на плоча с киноа", "11,20", "300", ""],
["", "file-akula-s-kinoa", "Филе акула с киноа", "6,30", "200", ""],
["", "fish-end-chips", "Фиш енд чипс", "5,60", "300", ""],
["", "somga-na-plocha", "Сьомга на плоча", "10,50", "200", ""],
["", "czipura-na-skara", "Ципура на скара", "7,70", "300", ""],
["", "lavrak-na-skara", "Лаврак на скара", "7,70", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "5,60", "200", ""]

            ],

            "Изкушения на фурна": [
                ["", "zapecheni-kartofi-s-kashkaval-i-sirene", "Запечени картофи с кашкавал и сирене", "3,50", "400", ""],
["", "zapecheni-kartofi-ss-spanak-i-sirene", "Запечени картофи със спанак и сирене", "3,50", "400", ""],
["", "zapecheni-kartofi-s-bekon-i-kashkaval", "Запечени картофи с бекон и кашкавал", "3,50", "400", ""],
["", "zapecheni-kartofi-s-pileshko-file-i-kashkaval", "Запечени картофи с пилешко филе и кашкавал", "3,50", "400", ""]

            ],

            "desserts": [
                ["", "chijzkejk", "Чийзкейк", "2,80", "200", ""],
["", "palachinka", "Палачинка", "2,10", "80", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "150", ""],
["", "czedeno-mlyako-s-borovinki-med-i-vishni", "Цедено мляко с боровинки, мед и вишни", "2,80", "220", ""],
["", "pechen-chijzkejk-s-gorski-plodove", "Печен чийзкейк с горски плодове", "2,80", "120", ""]

            ],

            "Сосове и добавки": [
                ["", "italianski-sos", "Италиански сос", "0,00", "50", ""],
["", "frenski-sos", "Френски сос", "0,00", "50", ""],
["", "gorchicza-sos", "Горчица сос", "0,00", "50", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "50", ""],
["", "ognen-sos", "Огнен сос", "0,00", "50", ""],
["", "majoneza-sos", "Майонеза сос", "0,00", "50", ""],
["", "ketchup-sos", "Кетчуп сос", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "50", ""],
["", "kashkval", "Кашквал", "0,70", "50", ""],
["", "sirene", "Сирене", "0,00", "50", ""],
["", "pusheno-sirene", "Пушено сирене", "0,70", "50", ""],
["", "parmezan", "Пармезан", "0,00", "10", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "30", ""],
["", "moczarela", "Моцарела", "0,70", "50", ""],
["", "shunka-bekon", "Шунка, бекон", "0,70", "50", ""],
["", "proshuto", "Прошуто", "1,40", "30", ""],
["", "pile", "Пиле", "0,70", "50", ""],
["", "lukanka", "Луканка", "0,70", "50", ""],
["", "riba-ton", "Риба тон", "0,70", "50", ""],
["", "pushena-somga", "Пушена сьомга", "2,10", "30", ""],
["", "morski-darove", "Морски дарове", "2,10", "50", ""],
["", "pryasna-chushka", "Прясна чушка", "0,70", "50", ""],
["", "pechena-chushka", "Печена чушка", "0,70", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "50", ""],
["", "gbi", "Гъби", "0,00", "50", ""],
["", "maslini", "Маслини", "0,00", "50", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "domati-krastaviczi", "Домати, краставици", "0,00", "50", ""]

            ]
        }', 
        'slug' => 'bar-and-dinner-momo',
        'business_name' => 'Bar and Dinner Momo',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Yambol',
        'region' => 'Yambol',
        'postal_code' => '8600',
        'address' => 'ул. Цар Освободител 2',
        'address_additional' => '',
        'coords_x' => '42.48448959',
        'coords_y' => '26.50509562',
        'phone' => '+359893367151',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "svinski-burger", "Свински бургер", "2,80", "450", ""],
["", "teleshki-burger", "Телешки бургер", "2,80", "450", ""],
["", "konski-burger", "Конски бургер", "3,50", "450", ""],
["", "bivolski-burger", "Биволски бургер", "3,50", "450", ""],
["", "pileshki-burger", "Пилешки бургер", "2,10", "450", ""],
["", "burger-s-kartofeno-kyufte", "Бургер с картофено кюфте", "2,10", "450", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "2,10", "450", ""],
["", "burger-khrupkavo-pile", "Бургер хрупкаво пиле", "3,50", "450", ""]

            ],

            "Чийзбургер": [
                ["", "pileshki-chijzburger-s-chedr-i-kashkaval", "Пилешки чийзбургер с чедър и кашкавал", "2,80", "550", ""],
["", "teleshki-chijzburger-s-chedr-i-kashkaval", "Телешки чийзбургер с чедър и кашкавал", "3,50", "550", ""],
["", "konski-chijzburger-s-chedr-i-kashkaval", "Конски чийзбургер с чедър и кашкавал", "4,20", "550", ""],
["", "svinski-chijzburger-s-chedr-i-kashkaval", "Свински чийзбургер с чедър и кашкавал", "3,50", "550", ""],
["", "bivolski-chijzburger-s-chedr-i-kashkaval", "Биволски чийзбургер с чедър и кашкавал", "4,20", "550", ""],
["", "chijzburger-s-khrupkavo-pile-chedr-i-kashkaval", "Чийзбургер с хрупкаво пиле, чедър и кашкавал", "3,50", "550", ""]

            ],

            "Двоен бургер": [
                ["", "dvoen-svinski-burger", "Двоен свински бургер", "3,50", "550", ""],
["", "dvoen-bivolski-burger", "Двоен биволски бургер", "4,90", "550", ""],
["", "dvoen-konski-burger", "Двоен конски бургер", "4,90", "550", ""],
["", "dvoen-teleshki-burger", "Двоен телешки бургер", "3,50", "550", ""],
["", "dvoen-pileshki-burger", "Двоен пилешки бургер", "3,50", "550", ""],
["", "dvoen-burger-khrupkavo-pile", "Двоен бургер хрупкаво пиле", "4,90", "550", ""]

            ],

            "Мега бургер": [
                ["", "mega-konski-burger", "Мега конски бургер", "6,30", "650", ""],
["", "mega-svinski-burger", "Мега свински бургер", "4,90", "650", ""],
["", "mega-pileshki-burger", "Мега пилешки бургер", "4,20", "650", ""],
["", "mega-teleshki-burger", "Мега телешки бургер", "4,90", "650", ""],
["", "mega-bivolski-burger", "Мега биволски бургер", "6,30", "650", ""],
["", "mega-burger-khrupkavo-pile", "Мега бургер хрупкаво пиле", "5,60", "650", ""]

            ],

            "Принцеси": [
                ["", "princzesa-s-kajma-i-kavkaval", "Принцеса с кайма и кавкавал", "2,10", "250", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "2,10", "250", ""]

            ],

            "Хот дог": [
                ["", "khot-dog-s-krenvirsh", "Хот дог с кренвирш", "1,40", "200", ""]

            ],

            "Палачинки": [
                ["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "300", ""],
["", "palachinka-s-yagodi", "Палачинка с ягоди", "1,40", "300", ""],
["", "palachinka-s-gorski-plodove", "Палачинка с горски плодове", "1,40", "300", ""],
["", "palachinka-s-borovinki", "Палачинка с боровинки", "1,40", "300", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "2,10", "300", ""],
["", "palachinka-s-kashkaval", "Палачинка с кашкавал", "2,10", "300", ""],
["", "palachinka-s-shunka-i-kashkaval", "Палачинка с шунка и кашкавал", "2,80", "300", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "330", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""],
["", "fanta-grozde", "Fanta Грозде", "0,70", "330", ""],
["", "schweppes-biter-limon", "Schweppes Битер Лимон", "0,70", "330", ""],
["", "schweppes-limonada", "Schweppes Лимонада", "0,70", "330", ""],
["", "schweppes-oranzhada", "Schweppes Оранжада", "0,70", "330", ""]

            ],

            "drinks": [
                ["", "ajryan", "Айрян", "0,70", "", ""],
["", "energijna-napitka-monster", "Енергийна напитка Monster", "2,10", "500", ""],
["", "energijna-napitka-hell", "Енергийна напитка Hell", "0,70", "330", ""]

            ]
        }', 
        'slug' => 'burgerite',
        'business_name' => 'Бургерите',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6300',
        'address' => 'бул. Сан Стефано 7Б',
        'address_additional' => '',
        'coords_x' => '41.93198148',
        'coords_y' => '25.55936997',
        'phone' => '+359888667777',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "czezar", "Цезар", "4,90", "300", ""],
["", "kapreze", "Капрезе", "4,90", "350", ""],
["", "proletna-salata-s-kinoa", "Пролетна салата с киноа", "4,20", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "grczka-salata-s-kapersi-i-krutoni", "Гръцка салата с каперси и крутони", "4,20", "350", ""]

            ],

            "Топли предястия": [
                ["", "pileshki-filencza-s-kornflejks-ili-susam", "Пилешки филенца с корнфлейкс или сусам", "4,90", "250", ""],
["", "topeni-sirencza-ss-sladko-ot-borovinki", "Топени сиренца със сладко от боровинки", "4,90", "250", ""],
["", "kashkaval-pane-na-khapki", "Кашкавал пане на хапки", "3,50", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""]

            ],

            "Паста и Ризото": [
                ["", "rizoto-s-pileshko", "Ризото с пилешко", "4,90", "300", ""],
["", "rizoto-s-gbi", "Ризото с гъби", "4,20", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,20", "400", ""],
["", "spageti-ss-somga", "Спагети със сьомга", "4,90", "350", ""],
["", "spageti-chetiri-sirena", "Спагети четири сирена", "4,90", "400", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-bekon", "Запеканка с бекон", "3,50", "350", ""],
["", "zapekanka-s-pileshko", "Запеканка с пилешко", "3,50", "350", ""],
["", "zapekanka-ss-svinsko", "Запеканка със свинско", "4,20", "350", ""],
["", "zapekanka-s-brokoli-i-sirena", "Запеканка с броколи и сирена", "3,50", "350", ""],
["", "vlcha-zapekanka", "Вълча запеканка", "4,90", "400", ""]

            ],

            "Основни ястия": [
                ["", "svinsko-bon-file-s-aromatni-gbki", "Свинско бон филе с ароматни гъбки", "7,00", "350", ""],
["", "pile-zhulien-po-klasicheska-reczepta", "Пиле жулиен по класическа рецепта", "4,90", "350", ""],
["", "pile-ss-zelenchuczi-i-drakonov-sos", "Пиле със зеленчуци и драконов сос", "5,60", "350", ""],
["", "file-ot-somga-na-tigan-s-orekhov-sos", "Филе от сьомга на тиган с орехов сос", "9,10", "250", ""],
["", "svinsko-bonfile-s-kinoa", "Свинско бонфиле с киноа", "5,60", "300", ""],
["", "pstrva", "Пъстърва", "4,90", "", ""],
["", "svinski-kotlet-po-frenski", "Свински котлет по френски", "6,30", "350", ""]

            ],

            "garnish": [
                ["", "kartofi-sote", "Картофи соте", "0,70", "200", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""]

            ],

            "burgers": [
                ["", "burger-ss-svinsko-bon-file-i-przheni-kartofki", "Бургер със свинско бон филе и пържени картофки", "4,90", "450", ""],
["", "pileshki-burger-s-przheni-kartofki", "Пилешки бургер с пържени картофки", "4,20", "400", ""],
["", "amerikanski-burger-s-przheni-kartofki", "Американски бургер с пържени картофки", "4,90", "450", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "kapreze", "Капрезе", "5,60", "", ""],
["", "bianka", "Бианка", "4,90", "", ""],
["", "peperoni", "Пеперони", "4,90", "", ""],
["", "proshuto-krudo", "Прошуто Крудо", "7,00", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "5,60", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "kalczone", "Калцоне", "5,60", "", ""],
["", "dyavolska-picza", "Дяволска пица", "4,90", "", ""]

            ],

            "Скара и Барбекю": [
                ["", "domashno-prigotveni-kyuftencza", "Домашно приготвени кюфтенца", "0,70", "100", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "300", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "300", ""],
["", "svinsko-bon-file", "Свинско бон филе", "6,30", "300", ""],
["", "srbsko-kebapche", "Сръбско кебапче", "3,50", "", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "4,90", "400", ""],
["", "svinski-shashlik", "Свински шашлик", "7,00", "400", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,80", "450", ""]

            ],

            "In-House Rolls": [
                ["", "uramaki-khrupkava-somga", "Урамаки хрупкава сьомга", "4,20", "", ""],
["", "uramaki-somga-teriyaki", "Урамаки сьомга терияки", "4,20", "", ""],
["", "uramaki-ton-tataki", "Урамаки тон татаки", "4,90", "", ""],
["", "uramaki", "Урамаки", "4,90", "", ""]

            ],

            "Combo": [
                ["", "filadelfiya-set-460gr--", "Филаделфия сет (460гр -", "11,90", "", ""],
["", "filadelfiya-in-house-570gr--", "Филаделфия In-House (570гр -", "13,30", "", ""],
["", "somga-set-500gr--", "Сьомга сет (500гр -", "14,00", "", ""],
["", "set-26-690gr--", "Сет 26 (690гр -", "16,80", "", ""],
["", "in-house-set-990gr--", "In-House сет (990гр -", "22,40", "", ""]

            ],

            "Sashimi": [
                ["", "sashimi-ton-tataki", "Сашими тон татаки", "6,30", "190", ""],
["", "sashimi-ton", "Сашими тон", "6,30", "180", ""],
["", "sashimi-somga-tataki", "Сашими сьомга татаки", "6,30", "190", ""],
["", "sashimi-somga", "Сашими сьомга", "5,60", "165", ""]

            ],

            "Nigiri": [
                ["", "nigiri-ton-tataki", "Нигири тон татаки", "2,80", "", ""],
["", "nigiri-ton", "Нигири тон", "2,80", "", ""],
["", "nigiri-zmiorka", "Нигири змиорка", "3,50", "", ""],
["", "nigiri-surimi", "Нигири сурими", "2,10", "", ""],
["", "nigiri-skarida", "Нигири скарида", "2,10", "", ""],
["", "nigiri-somga-tataki", "Нигири сьомга татаки", "2,80", "", ""],
["", "nigiri-somga---sake", "Нигири сьомга - саке", "2,80", "", ""],
["", "nigiri-yaponski-omlet", "Нигири японски омлет", "2,80", "", ""],
["", "nigiri-pushena-somga-i-filadelfiya", "Нигири пушена сьомга и филаделфия", "2,80", "", ""],
["", "nigiri-avokado-i-filadelfiya", "Нигири авокадо и филаделфия", "2,10", "", ""]

            ],

            "Hosomaki": [
                ["", "khosomaki-ton", "Хосомаки тон", "4,20", "", ""],
["", "khosomaki-somga", "Хосомаки сьомга", "3,50", "", ""],
["", "khosomaki-pushena-somga", "Хосомаки пушена сьомга", "3,50", "", ""],
["", "khosomaki-tamago", "Хосомаки тамаго", "3,50", "", ""],
["", "khosomaki-mango-i-filadelfiya", "Хосомаки манго и филаделфия", "2,80", "", ""],
["", "khosomaki-krastavicza", "Хосомаки краставица", "2,10", "", ""],
["", "khosomaki-avokado-i-filadelfiya", "Хосомаки авокадо и филаделфия", "2,80", "", ""],
["", "khosomaki-avokado", "Хосомаки авокадо", "2,80", "", ""]

            ],

            "Uramaki": [
                ["", "uramaki-somga-tobiko", "Урамаки сьомга тобико", "4,20", "", ""],
["", "uramaki-skarida", "Урамаки скарида", "4,20", "", ""],
["", "uramaki-surimi", "Урамаки сурими", "2,80", "", ""],
["", "uramaki-pushena-somga", "Урамаки пушена сьомга", "3,50", "", ""],
["", "uramaki-pikanten-ton", "Урамаки пикантен тон", "3,50", "", ""],
["", "uramaki-pile", "Урамаки пиле", "2,80", "", ""],
["", "uramaki-vedzhi", "Урамаки веджи", "2,80", "", ""]

            ],

            "Futomaki": [
                ["", "futomaki-somga-i-avokado", "Футомаки сьомга и авокадо", "5,60", "", ""],
["", "futomaki-in-house", "Футомаки In-House", "5,60", "", ""]

            ],

            "Суши салати": [
                ["", "salata-uakame", "Салата уакаме", "2,10", "80", ""],
["", "uakame-s-nudli", "Уакаме с нудли", "2,80", "250", ""],
["", "salata-s-pushena-somga", "Салата с пушена сьомга", "3,50", "300", ""],
["", "salata-s-klnove-i-mango", "Салата с кълнове и манго", "2,80", "250", ""]

            ],

            "sauces": [
                ["", "chesnov", "Чеснов", "0,00", "80", ""],
["", "tartar", "Тартар", "0,00", "80", ""],
["", "majoneza", "Майонеза", "0,00", "80", ""],
["", "ketchup", "Кетчуп", "0,00", "80", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "80", ""],
["", "chili", "Чили", "0,00", "80", ""],
["", "chili--drakonov-sos", "Чили – Драконов сос", "0,00", "80", ""]

            ],

            "desserts": [
                ["", "shokoladov-tryufel", "Шоколадов трюфел", "2,10", "200", ""],
["", "czedeno-mlyako-s-med-i-orekhi", "Цедено мляко с мед и орехи", "2,10", "200", ""]

            ],

            "Пърленки и питки": [
                ["", "naturalna-prlenka", "Натурална пърленка", "0,70", "150", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "150", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "150", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "150", ""]

            ]
        }', 
        'slug' => 'in-house',
        'business_name' => 'In-House',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Анастас Стоянов 18',
        'address_additional' => '',
        'coords_x' => '43.42230098',
        'coords_y' => '23.22236887',
        'phone' => '+359894450016',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "malk-dyuner", "Малък дюнер", "0,70", "180", ""],
["", "sreden-dyuner", "Среден дюнер", "1,40", "270", ""],
["", "golyam-dyuner", "Голям дюнер", "2,10", "400", ""],
["", "xxl-dyuner", "XXL дюнер", "3,50", "650", ""],
["", "malka-porcziya-dyunr", "Малка порция дюнр", "2,80", "250", ""],
["", "golyama-porcziya-dyuner", "Голяма порция дюнер", "4,90", "400", ""]

            ],

            "burgers": [
                ["", "khamburger", "Хамбургер", "2,10", "300", ""],
["", "arabski-burger", "Арабски бургер", "2,10", "400", ""],
["", "mini-burger", "Мини бургер", "0,70", "", ""],
["", "mini-chijzburger", "Мини чийзбургер", "1,40", "", ""],
["", "teleshki-khamburger", "Телешки хамбургер", "2,10", "300", ""],
["", "khamburger-s-teleshko-kyufte", "Хамбургер с телешко кюфте", "2,10", "300", ""],
["", "rok-burger", "Рок бургер", "2,80", "300", ""]

            ],

            "Пиле на грил": [
                ["", "czyalo-pile-na-gril-s-garnitura", "Цяло пиле на грил с гарнитура", "7,00", "", ""],
["", "polovin-pile-na-gril-s-garnitura", "Половин пиле на грил с гарнитура", "4,20", "", ""]

            ],

            "Скара и Сандвичи": [
                ["", "areas", "Ареас", "1,40", "250", ""],
["", "areas-porcziya", "Ареас порция", "2,10", "300", ""],
["", "dzhob", "Джоб", "2,10", "300", ""],
["", "sudzhu", "Суджу", "1,40", "250", ""],
["", "princzesa", "Принцеса", "0,70", "100", ""],
["", "sandvich-s-kyufte", "Сандвич с кюфте", "1,40", "300", ""],
["", "sandvich-s-kebapche", "Сандвич с кебапче", "1,40", "300", ""],
["", "procziya-v-tarelka-s-kyufte", "Проция в тарелка с кюфте", "2,10", "300", ""],
["", "procziya-v-tarelka-s-kebapche", "Проция в тарелка с кебапче", "2,10", "300", ""],
["", "pileshko-krilcze", "Пилешко крилце", "0,00", "", ""],
["", "svinski-kebapche", "Свински кебапче", "0,00", "50", ""],
["", "svinski-kyufte", "Свински кюфте", "0,00", "50", ""],
["", "bekon", "Бекон", "1,40", "100", ""],
["", "pileshka-przhola", "Пилешка пържола", "1,40", "180", ""]

            ],

            "Сосове и други": [
                ["", "porcziya-kartofi", "Порция картофи", "0,70", "150", ""],
["", "sos", "Сос", "0,70", "", ""]

            ],

            "pizza": [
                ["", "picza-s-shunka-i-gbi", "Пица с Шунка и гъби", "0,70", "130", ""],
["", "picza-s-pile-i-gbi", "Пица с Пиле и гъби", "0,70", "130", ""],
["", "picza-s-bekon-i-gbi", "Пица с Бекон и гъби", "0,70", "130", ""],
["", "picza-s-shunka-i-czarevicza", "Пица с Шунка и царевица", "0,70", "130", ""],
["", "picza-s-bekon-i-czarevicza", "Пица с Бекон и царевица", "0,70", "130", ""],
["", "picza-margarita", "Пица Маргарита", "0,70", "130", ""],
["", "picza-peperoni", "Пица Пеперони", "0,70", "180", ""],
["", "picza-vegetariana", "Пица Вегетариана", "0,70", "130", ""],
["", "czyala-picza-po-izobor", "Цяла пица по изобор", "9,10", "", ""]

            ],

            "beer": [
                ["", "kamenicza", "Каменица", "0,70", "500", ""],
["", "burgasko", "Бургаско", "0,70", "500", ""],
["", "astika", "Астика", "0,70", "500", ""],
["", "beks", "Бекс", "0,70", "500", ""],
["", "staropramen", "Старопрамен", "0,70", "500", ""],
["", "stela-artoa", "Стела Артоа", "0,70", "500", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,70", "500", ""],
["", "ajran", "Айран", "0,00", "", ""],
["", "soda", "Сода", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/769035.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1094702.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1094703.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1094704.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1094705.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1094706.jpg?width=302"]

            ]
        }', 
        'slug' => 'sindbad-trgovska',
        'business_name' => 'Sindbad (Търговска)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Yambol',
        'region' => 'Yambol',
        'postal_code' => '8600',
        'address' => 'ул. Търговска 60',
        'address_additional' => '',
        'coords_x' => '42.48126996',
        'coords_y' => '26.51365169',
        'phone' => '+359897809032',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "dzadziki-mlechna-salata", "Дзадзики млечна салата", "3,50", "350", ""],
["", "tirosalata", "Тиросалата", "3,50", "350", ""],
["", "melidzano-salata-kopoolu", "Мелидзано салата кьопоолу", "4,20", "350", ""],
["", "taramo-salata", "Тарамо салата", "4,20", "350", ""],
["", "miks-ot-krem-salati", "Микс от крем салати", "4,20", "350", ""],
["", "pechen-patladzhan-ss-sirene-i-kashkaval", "Печен патладжан със сирене и кашкавал", "9,80", "500", ""],
["", "vareni-kartofi", "Варени картофи", "3,50", "400", ""],
["", "morkovi", "Моркови", "2,80", "400", ""],
["", "zele-morkovi-i-czelina", "Зеле, моркови и целина", "3,50", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "400", ""],
["", "rukola-marulya-morkov", "Рукола, маруля, морков", "8,40", "800", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "8,40", "700", ""],
["", "marulya-krastavicza-i-luk", "Маруля, краставица и лук", "3,50", "400", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "3,50", "500", ""],
["", "grczka-salata", "Гръцка салата", "8,40", "800", ""],
["", "cherveno-svareno-czveklo", "Червено сварено цвекло", "3,50", "400", ""],
["", "zapechena-lyuta-chushka", "Запечена люта чушка", "0,70", "", ""]

            ],

            "starters": [
                ["", "przheni-tikvichki-patladzhan-i-chushki", "Пържени тиквички, патладжан и чушки", "5,60", "500", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "5,60", "500", ""],
["", "przheni-presni-kartofi", "Пържени пресни картофи", "2,10", "400", ""],
["", "przheni-presni-kartofi-ss-sirene", "Пържени пресни картофи със сирене", "2,80", "400", ""],
["", "vareni-kartofi", "Варени картофи", "9,80", "600", ""],
["", "pecheni-pechurki", "Печени печурки", "4,20", "400", ""],
["", "pecheni-pechurki-plneni-s-kashkaval", "Печени печурки пълнени с кашкавал", "6,30", "400", ""],
["", "chushki-kapiya", "Чушки капия", "9,80", "600", ""]

            ],

            "Солени и пушени риби": [
                ["", "pushena-grczka-skumriya", "Пушена гръцка скумрия", "6,30", "150", ""],
["", "marinovana-anshoa", "Маринована аншоа", "6,30", "150", ""],
["", "lakerda", "Лакерда", "6,30", "150", ""]

            ],

            "Месо на скара": [
                ["", "svinska-przhola", "Свинска пържола", "6,30", "500", ""],
["", "svinsko-shishche", "Свинско шишче", "6,30", "", ""],
["", "svinski-rebrcza", "Свински ребърца", "6,30", "500", ""],
["", "teleshki-kebapcheta", "Телешки кебапчета", "6,30", "", ""],
["", "teleshki-biftek", "Телешки бифтек", "6,30", "500", ""],
["", "teleshka-przhola", "Телешка пържола", "9,80", "500", ""],
["", "pileshko-file", "Пилешко филе", "6,30", "500", ""],
["", "pileshko-shishche", "Пилешко шишче", "6,30", "", ""]

            ],

            "Готвени ястия": [
                ["", "musaka", "Мусака", "4,90", "450", ""],
["", "ribena-supa", "Рибена супа", "4,20", "400", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "500", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "500", ""],
["", "spageti-s-morski-darove", "Спагети с морски дарове", "12,60", "500", ""],
["", "kritaroto-s-morski-darove", "Критарото с морски дарове", "12,60", "500", ""],
["", "tortila-ss-skaridi", "Тортила със скариди", "12,60", "500", ""],
["", "tortila-s-pileshko", "Тортила с пилешко", "6,30", "500", ""],
["", "tiganya", "Тиганя", "8,40", "500", ""],
["", "przhen-kalmar", "Пържен калмар", "12,60", "400", ""],
["", "kalmar-na-skara", "Калмар на скара", "12,60", "400", ""],
["", "kalmar-na-skara-plen-ss-sirene-kashkaval-i-domat", "Калмар на скара пълен със сирене, кашкавал и домат", "19,60", "600", ""],
["", "surov-oktopod-na-skara", "Суров октопод на скара", "17,50", "500", ""],
["", "przheni-skaridi", "Пържени скариди", "14,00", "400", ""],
["", "skaridi-na-skara", "Скариди на скара", "14,00", "400", ""],
["", "skaridi-saganaki", "Скариди Саганаки", "16,80", "500", ""],
["", "przhen-gavros", "Пържен гаврос", "8,40", "400", ""],
["", "sardela-na-skara", "Сардела на скара", "8,40", "400", ""],
["", "bakalyaros", "Бакалярос", "13,30", "400", ""],
["", "vatos", "Ватос", "13,30", "400", ""],
["", "morska-akula", "Морска акула", "13,30", "400", ""],
["", "riba-mech", "Риба меч", "19,60", "500", ""],
["", "czipura", "Ципура", "14,00", "500", ""],
["", "lavrak", "Лаврак", "14,00", "500", ""],
["", "miks-ot-przheni-ribi-za-dvama", "Микс от пържени риби за двама", "28,00", "", ""],
["", "miks-ot-ribena-skara-za-dvama", "Микс от рибена скара за двама", "28,00", "", ""],
["", "file-ot-pstrva", "Филе от пъстърва", "8,40", "400", ""]

            ],

            "Сирена": [
                ["", "feta-sirene-natyur", "Фета сирене натюр", "4,20", "200", ""],
["", "feta-sirene-s-domat-i-lyuta-chushka", "Фета сирене с домат и люта чушка", "6,30", "300", ""],
["", "khapki-ot-nastrgano-sirene-i-kashkaval", "Хапки от настъргано сирене и кашкавал", "6,30", "300", ""],
["", "kefalotiri", "Кефалотири", "8,40", "200", ""],
["", "manuri", "Манури", "8,40", "200", ""],
["", "khalumi", "Халуми", "8,40", "200", ""],
["", "feta", "Фета", "6,30", "250", ""],
["", "ladotiri", "Ладотири", "8,40", "200", ""]

            ]
        }', 
        'slug' => 'restorant-city-park',
        'business_name' => 'Ресторант City park',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6301',
        'address' => 'ул. Ангел Кънчев 1',
        'address_additional' => '',
        'coords_x' => '41.93321855',
        'coords_y' => '25.5407239',
        'phone' => '+359888823223',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "desserts": [
                ["", "bonboni-s-morkovi-furmi-i-kokos", "Бонбони с моркови, фурми и кокос", "11,20", "160", ""],
["", "bonboni-s-bademi-lajm-i-med", "Бонбони с бадеми, лайм и мед", "11,20", "160", ""],
["", "bonboni-ss-smokini-kokos-i-kajsii", "Бонбони със смокини, кокос и кайсии", "11,20", "160", ""],
["", "bonboni-s-chereshi-i-bademi", "Бонбони с череши и бадеми", "11,20", "160", ""],
["", "paleo-bonboni-ss-smokini-i-chereshi", "Палео бонбони със смокини и череши", "11,20", "160", ""],
["", "proteinovi-bonboni-s-konopeni-semena-i-rozhkov", "Протеинови бонбони с конопени семена и рожков", "11,20", "160", ""],
["", "smokinovi-bonboni-s-sham-fstk-bademov-takhan-i-med", "Смокинови бонбони с шам фъстък, бадемов тахан и мед", "11,90", "160", ""]

            ],

            "Предварителна поръчка": [
                ["", "surovo-brauni-s-orekhi-kakaovi-zrna-i-rozi", "Сурово брауни с орехи, какаови зърна и рози", "9,80", "", ""],
["", "surovo-brauni-s-chereshi-kakovi-zrna-i-pchelen-prashecz", "Сурово брауни с череши, какови зърна и пчелен прашец", "9,80", "", ""],
["", "surovo-brauni-s-konopeni-semena-kakaovi-zrna-i-orekh", "Сурово брауни с конопени семена, какаови зърна и орех", "9,80", "", ""],
["", "proteinovo-brauni-ss-semena-i-yadki", "Протеиново брауни със семена и ядки", "9,10", "", ""]

            ]
        }', 
        'slug' => 'veggiebox',
        'business_name' => 'VEGGIEBOX',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Юрий Венелин 2-4',
        'address_additional' => '',
        'coords_x' => '43.41131057',
        'coords_y' => '23.22294667',
        'phone' => '+359890554733',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "500", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "proletna-salata", "Пролетна салата", "3,50", "400", ""],
["", "salata-italiana", "Салата Италиана", "5,60", "450", ""],
["", "redena-salata", "Редена салата", "2,80", "400", ""],
["", "mlechna-salata", "Млечна салата", "2,80", "200", ""],
["", "sladka-turshiya", "Сладка туршия", "2,80", "300", ""],
["", "salata-peshhite", "Салата Пещите", "7,00", "750", ""],
["", "salata-czezar", "Салата Цезар", "6,30", "500", ""],
["", "salata-top", "Салата Топ", "5,60", "350", ""],
["", "spanak-s-kinoa", "Спанак с киноа", "5,60", "400", ""],
["", "salata-mikonos", "Салата Миконос", "5,60", "500", ""],
["", "salata-kob", "Салата Коб", "6,30", "450", ""],
["", "rodopska-salata", "Родопска салата", "4,90", "450", ""],
["", "salata-kapreze", "Салата Капрезе", "5,60", "400", ""],
["", "salata-mer", "Салата Мер", "5,60", "500", ""],
["", "salata-ton-fish", "Салата Тон фиш", "6,30", "450", ""],
["", "salatata-na-vladi", "Салатата на Влади", "6,30", "600", ""],
["", "salatata-na-svetlo", "Салатата на Светльо", "6,30", "600", ""]

            ],

            "Топли предястия": [
                ["", "gbi-s-tri-vida-sirena", "Гъби с три вида сирена", "5,60", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "kartofi-s-shunka-smetana-i-kashkaval", "Картофи с шунка, сметана и кашкавал", "4,90", "450", ""],
["", "kartofi-po-rodopski", "Картофи по Родопски", "3,50", "200", ""],
["", "kartofite-na-dyado", "Картофите на дядо", "4,90", "400", ""],
["", "brokoli-s-tri-vida-sirena", "Броколи с три вида сирена", "6,30", "450", ""],
["", "trakijsko-gyuveche", "Тракийско гювече", "4,20", "300", ""],
["", "sirene-po-shopski", "Сирене по Шопски", "4,20", "300", ""],
["", "mish-mash", "Миш-маш", "3,50", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "350", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,90", "350", ""],
["", "zelenchukova-skara", "Зеленчукова скара", "6,30", "450", ""],
["", "pileshki-srcza-s-maslo", "Пилешки сърца с масло", "4,20", "250", ""],
["", "pileshki-drob-przhen", "Пилешки дроб пържен", "3,50", "250", ""],
["", "pateshki-srcza-na-zhar", "Патешки сърца на жар", "4,90", "250", ""],
["", "pileshki-drob-pane", "Пилешки дроб пане", "4,20", "300", ""],
["", "pileshki-drob-po-selski", "Пилешки дроб по селски", "4,90", "400", ""],
["", "mezeto-na-shefa", "Мезето на Шефа", "11,90", "500", ""],
["", "dushmansko-meze", "Душманско мезе", "7,00", "600", ""],
["", "plato-na-majstora", "Плато на майстора", "10,50", "500", ""],
["", "svinski-drob-przhen", "Свински дроб пържен", "4,20", "250", ""],
["", "patatnik", "Пататник", "7,00", "700", ""],
["", "topeni-sirencza-s-kornflejks", "Топени сиренца с корнфлейкс", "4,90", "200", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,20", "200", ""],
["", "khapki-sirene", "Хапки сирене", "3,50", "200", ""],
["", "khapki-kashkaval", "Хапки кашкавал", "4,20", "200", ""],
["", "pileshki-flejki-s-kornflejks", "Пилешки флейки с корнфлейкс", "4,90", "200", ""]

            ],

            "Ястия от пилешко": [
                ["", "pileshki-zhulieni", "Пилешки жулиени", "6,30", "350", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "7,00", "350", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "5,60", "350", ""],
["", "pileshki-karencza-ss-sos-ot-manatarki", "Пилешки каренца със сос от манатарки", "7,70", "350", ""],
["", "pile-rokfor", "Пиле Рокфор", "7,70", "350", ""],
["", "pileshka-przhola-na-zhar", "Пилешка пържола на жар", "4,90", "200", ""],
["", "pile-ss-zelenchuczi-na-tigan", "Пиле със зеленчуци на тиган", "6,30", "400", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "100", ""],
["", "pileshki-krilcza-na-skara", "Пилешки крилца на скара", "4,90", "500", ""]

            ],

            "Ястия от свинско": [
                ["", "svinsko-meze-na-tigan-s-rigan", "Свинско мезе на тиган с риган", "7,00", "380", ""],
["", "svinski-dzholan-na-furna", "Свински джолан на фурна", "7,00", "500", ""],
["", "svinska-przhola-s-gben-sos", "Свинска пържола с гъбен сос", "7,70", "450", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "200", ""],
["", "svinski-rebra-na-zhar", "Свински ребра на жар", "7,70", "500", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "svinska-nadenicza", "Свинска наденица", "1,40", "100", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "3,50", "250", ""]

            ],

            "Ястия от телешко": [
                ["", "krekhka-teleshka-przhola", "Крехка телешка пържола", "11,90", "200", ""],
["", "teleshki-ezik-na-sach", "Телешки език на сач", "10,50", "300", ""],
["", "teleshki-ezik-s-maslo", "Телешки език с масло", "7,70", "250", ""],
["", "teleshka-nadenicza", "Телешка наденица", "1,40", "100", ""],
["", "teleshko-shkembe-s-maslo", "Телешко шкембе с масло", "4,90", "300", ""],
["", "teleshko-kyufte", "Телешко кюфте", "0,70", "80", ""]

            ],

            "Ястия от агнешко": [
                ["", "agneshka-przhola", "Агнешка пържола", "14,00", "300", ""],
["", "agneshki-drebolii", "Агнешки дреболии", "9,10", "500", ""],
["", "agneshki-kotleti", "Агнешки котлети", "14,00", "400", ""]

            ],

            "sachs": [
                ["", "svinski-sach", "Свински сач", "11,90", "500", ""],
["", "kartofen-sach-s-tri-vida-sirena", "Картофен сач с три вида сирена", "7,00", "400", ""],
["", "kombiniran-sach", "Комбиниран сач", "14,70", "750", ""],
["", "pileshki-sach", "Пилешки сач", "9,80", "500", ""]

            ],

            "Шашлъци": [
                ["", "svinski-shashlk", "Свински шашлък", "11,90", "500", ""],
["", "pileshki-shashlk", "Пилешки шашлък", "11,20", "500", ""]

            ],

            "fish": [
                ["", "lavrak", "Лаврак", "11,20", "", ""],
["", "sharan", "Шаран", "4,90", "300", ""],
["", "pstrva", "Пъстърва", "11,20", "", ""],
["", "czipura", "Ципура", "11,20", "", ""],
["", "skumriya", "Скумрия", "4,90", "", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "", ""],
["", "kaprichoza", "Капричоза", "5,60", "", ""],
["", "kuatro-di-karne", "Куатро Ди Карне", "5,60", "", ""],
["", "alfredo", "Алфредо", "5,60", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "peshhite", "Пещите", "6,30", "", ""],
["", "belisima", "Белисима", "7,00", "", ""],
["", "kuatro-formadzho", "Куатро Формаджо", "5,60", "", ""],
["", "mondo", "Мондо", "5,60", "", ""],
["", "prlenka-kombinirana", "Пърленка комбинирана", "2,10", "", ""]

            ],

            "desserts": [
                ["", "domashna-torta", "Домашна торта", "2,80", "", ""],
["", "torta-fantaziya", "Торта Фантазия", "2,80", "", ""],
["", "chijz-kejk", "Чийз кейк", "2,80", "", ""],
["", "chia-s-maskarpone-i-yagoda", "Чиа с маскарпоне и ягода", "2,80", "", ""],
["", "sladko-izkushenie", "Сладко изкушение", "2,80", "", ""],
["", "plodova-krem-pita-s-banan", "Плодова крем пита с банан", "2,80", "", ""]

            ],

            "Палачинки": [
                ["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "1,40", "", ""],
["", "palachinka-ss-sirene-", "Палачинка със сирене-", "1,40", "", ""]

            ],

            "drinks": [
                ["", "pepsi-ken", "Пепси кен", "1,40", "330", ""],
["", "pepsi", "Пепси", "0,70", "250", ""],
["", "pepsi", "Пепси", "1,40", "500", ""],
["", "voda", "Вода", "0,70", "500", ""],
["", "voda", "Вода", "1,40", "", ""]

            ]
        }', 
        'slug' => 'restorant-peshchite',
        'business_name' => 'Ресторант пещите',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6303',
        'address' => 'бул. Георги С. Раковски 27',
        'address_additional' => '',
        'coords_x' => '41.9411445',
        'coords_y' => '25.55445178',
        'phone' => '+359888970777',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "italianska-salata", "Италианска салата", "3,50", "400", ""],
["", "ajsberg", "Айсберг", "4,20", "350", ""],
["", "vitamina", "Витамина", "3,50", "350", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "380", ""],
["", "zelena-salata-s-kinoa", "Зелена салата с киноа", "4,20", "370", ""],
["", "zelena-salata-s-livansko-sirene", "Зелена салата с ливанско сирене", "4,20", "370", ""],
["", "morkovi-s-riba-ton-i-maslini", "Моркови с риба тон и маслини", "4,20", "400", ""],
["", "pechen-patladzhan-s-domat-i-pechen-piper", "Печен патладжан с домат и печен пипер", "4,20", "350", ""],
["", "salata-s-riba-ton-i-dresing", "Салата с Риба тон и дресинг", "4,20", "400", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "350", ""],
["", "salata-kopola", "Салата Копола", "4,20", "350", ""],
["", "salata-s-file-ot-somga", "Салата с филе от сьомга", "4,90", "250", ""],
["", "salata-ss-susheni-domati", "Салата със сушени домати", "3,50", "300", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "350", ""],
["", "tabule", "Табуле", "3,50", "300", ""],
["", "fresh", "Фреш", "2,80", "350", ""],
["", "cherven-bob-s-riba-ton", "Червен боб с риба тон", "4,20", "400", ""],
["", "cherveno-czveklo-ss-sino-sirene", "Червено цвекло със синьо сирене", "3,50", "350", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "selska-salata", "Селска салата", "3,50", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "snezhanka", "Снежанка", "2,80", "200", ""],
["", "domati", "Домати", "2,10", "250", ""],
["", "krastaviczi", "Краставици", "2,10", "250", ""],
["", "meshena-salata", "Мешена салата", "2,10", "300", ""],
["", "zelena-s-yajcze", "Зелена с яйце", "2,80", "300", ""],
["", "proshuto-s-ajsberg-cheri-domati-i-parmezan", "Прошуто с айсберг, чери домати и пармезан", "4,90", "350", ""],
["", "slavyanska-salata", "Славянска салата", "3,50", "350", ""]

            ],

            "starters": [
                ["", "tarama-khajver", "Тарама хайвер", "3,50", "200", ""],
["", "aromatna-razyadka", "Ароматна разядка", "3,50", "200", ""],
["", "pecheni-zelenchuczi-s-chedr", "Печени зеленчуци с чедър", "3,50", "200", ""],
["", "spanacheno-sufle-s-nakhut", "Спаначено суфле с нахут", "3,50", "200", ""],
["", "razyadka-s-domashno-kopoolu", "Разядка с домашно кьопоолу", "3,50", "200", ""],
["", "brusketi-s-maslinova-pasta", "Брускети с маслинова паста", "2,80", "220", ""],
["", "spanacheni-kyuftenczi", "Спаначени кюфтенци", "3,50", "250", ""],
["", "sirene-s-med-orekhi-i-smokinovo-sladko", "Сирене с мед, орехи и смокиново сладко", "3,50", "180", ""],
["", "topeni-sirencza-pane-s-borovinkovo-sladko", "Топени сиренца пане с боровинково сладко", "3,50", "180", ""],
["", "panirani-sirencza", "Панирани сиренца", "2,80", "250", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "3,50", "250", ""],
["", "panirani-moczarelki", "Панирани моцарелки", "3,50", "200", ""],
["", "tikvichki-po-frenski", "Тиквички по френски", "3,50", "200", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,80", "250", ""],
["", "pechurki-v-zekhtin", "Печурки в зехтин", "2,80", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "300", ""],
["", "pileshki-filencza-ss-sladko-kisel-sos-i-glazura", "Пилешки филенца със сладко-кисел сос и глазура", "4,20", "300", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,90", "280", ""],
["", "kyuftenczata-na-baba", "Кюфтенцата на баба", "4,20", "250", ""],
["", "gshi-drob-s-karameliziran-ananas", "Гъши дроб с карамелизиран ананас", "9,10", "180", ""],
["", "pikantni-vratni-kscheta", "Пикантни вратни късчета", "4,90", "250", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "200", ""],
["", "pileshki-khapki-s-bademi", "Пилешки хапки с бадеми", "4,20", "250", ""],
["", "susameni-pileshki-khapki", "Сусамени пилешки хапки", "4,20", "250", ""],
["", "khrupkavi-pileshki-filencza-s-kornflejks", "Хрупкави пилешки филенца с корнфлейкс", "4,20", "250", ""]

            ],

            "Паста и спагети": [
                ["", "spageti-boloneze", "Спагети Болонезе", "4,20", "400", ""],
["", "taliateli-s-bekon-smetana-i-bosilek", "Талиатели с бекон, сметана и босилек", "4,20", "400", ""],
["", "lazanya-s-pile-i-zelenchuczi", "Лазаня с пиле и зеленчуци", "4,20", "400", ""],
["", "ala-karbonara", "Ала Карбонара", "4,20", "400", ""],
["", "lazanya-boloneze", "Лазаня Болонезе", "4,20", "400", ""],
["", "spageti-verona", "Спагети Верона", "4,20", "400", ""],
["", "spageti-s-morski-darove", "Спагети с морски дарове", "4,90", "400", ""],
["", "spageti-s-tri-sirena", "Спагети с три сирена", "4,20", "400", ""],
["", "taliateli-spinadzho", "Талиатели Спинаджо", "3,50", "400", ""],
["", "taliateli-s-rukola", "Талиатели с рукола", "3,50", "400", ""],
["", "spageti-na-sedmoto-nebe", "Спагети На седмото небе", "4,20", "400", ""]

            ],

            "risotto": [
                ["", "rizoto-s-morski-darove", "Ризото с морски дарове", "4,90", "320", ""],
["", "rizoto-pechurki-i-manatarki", "Ризото печурки и манатарки", "4,20", "300", ""],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "3,50", "450", ""]

            ],

            "Рибни ястия": [
                ["", "midi-cherupka", "Миди черупка", "5,60", "450", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "7,70", "200", ""],
["", "vatos", "Ватос", "6,30", "200", ""],
["", "chernokop-na-skara", "Чернокоп на скара", "6,30", "200", ""],
["", "somga-na-plocha", "Сьомга на плоча", "10,50", "200", ""],
["", "zargan-na-skara", "Зарган на скара", "6,30", "250", ""],
["", "kalmari", "Калмари", "6,30", "200", ""],
["", "lavrak-na-skara", "Лаврак на скара", "7,70", "300", ""],
["", "oktopod-na-plocha", "Октопод на плоча", "16,80", "200", ""],
["", "panirani-bejbi-kalmari", "Панирани бейби калмари", "7,00", "200", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "5,60", "200", ""],
["", "safrid", "Сафрид", "4,20", "250", ""],
["", "skaridi-na-plocha", "Скариди на плоча", "7,00", "150", ""],
["", "czipura-na-skara", "Ципура на скара", "7,70", "300", ""]

            ],

            "pizza": [
                ["", "karera", "Карера", "2,80", "", ""],
["", "padua", "Падуа", "3,50", "", ""],
["", "adriano", "Адриано", "3,50", "", ""],
["", "antigua", "Антигуа", "2,80", "", ""],
["", "verona", "Верона", "3,50", "", ""],
["", "detsko-menyu", "Детско меню", "3,50", "", ""],
["", "di-polo", "Ди Поло", "3,50", "", ""],
["", "kalczone-umbriya", "Калцоне Умбрия", "3,50", "", ""],
["", "kapreze", "Капрезе", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "3,50", "", ""],
["", "kariola", "Кариола", "3,50", "", ""],
["", "kuatro-stadzhioni", "Куатро Стаджиони", "3,50", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "3,50", "", ""],
["", "lorenczo", "Лоренцо", "2,80", "", ""],
["", "margarita", "Маргарита", "2,10", "", ""],
["", "neapolitana", "Неаполитана", "2,80", "", ""],
["", "peperoni", "Пеперони", "3,50", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "3,50", "", ""],
["", "rustika", "Рустика", "4,20", "", ""],
["", "selska", "Селска", "3,50", "", ""],
["", "spinadzho", "Спинаджо", "3,50", "", ""],
["", "figaro", "Фигаро", "3,50", "", ""],
["", "fradyavolo", "Фрадяволо", "3,50", "", ""],
["", "fruti-di-mare", "Фрути Ди Маре", "4,20", "", ""],
["", "fungi", "Фунги", "3,50", "", ""],
["", "momo", "Момо", "4,20", "", ""]

            ],

            "Изкушения на фурна": [
                ["", "zapecheni-gbi-s-kashkaval", "Запечени гъби с кашкавал", "3,50", "250", ""],
["", "zapecheni-kartofki-s-bekon-i-kashkaval", "Запечени картофки с бекон и кашкавал", "3,50", "400", ""],
["", "zapecheni-kartofki-ss-sirene-i-kashkaval", "Запечени картофки със сирене и кашкавал", "3,50", "400", ""],
["", "zapecheni-kartofki-s-pileshko-file-i-kashkaval", "Запечени картофки с пилешко филе и кашкавал", "3,50", "400", ""],
["", "zapecheni-kartofki-s-shunka-i-kashkaval", "Запечени картофки с шунка и кашкавал", "3,50", "400", ""],
["", "zapecheni-kartofki-ss-spanak-i-sirene", "Запечени картофки със спанак и сирене", "3,50", "400", ""]

            ],

            "Основни ястия": [
                ["", "pikantni-svinski-filencza", "Пикантни свински филенца", "4,90", "200", ""],
["", "pileshki-stekcheta-s-bekon-i-sos-sirena", "Пилешки стекчета с бекон и сос сирена", "5,60", "350", ""],
["", "pileshko-file-s-maslinova-pasta", "Пилешко филе с маслинова паста", "6,30", "450", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,90", "250", ""],
["", "svinski-kareta-vrkhu-kanape-ot-zapechen-luk", "Свински карета върху канапе от запечен лук", "5,60", "350", ""],
["", "svinsko-s-maslini", "Свинско с маслини", "6,30", "420", ""],
["", "pile-bianko", "Пиле Бианко", "6,30", "420", ""]

            ],

            "Добавки и сосове": [
                ["", "ognen", "Огнен", "0,00", "50", ""],
["", "frenski-sos", "Френски сос", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "czarevicza", "Царевица", "0,00", "50", ""]

            ],

            "Хлебчета и пърленки": [
                ["", "prlenka", "Пърленка", "0,70", "130", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "150", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "150", ""],
["", "khlebche-s-kashkaval-i-susam", "Хлебче с кашкавал и сусам", "1,40", "150", ""],
["", "chesnovo-khlebche", "Чесново хлебче", "0,70", "130", ""],
["", "chesnovo-khlebche-s-kashkaval", "Чесново хлебче с кашкавал", "1,40", "150", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "2,10", "80", ""],
["", "torta-garash", "Торта Гараш", "2,80", "120", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "3,50", "150", ""],
["", "czedeno-mlyako-s-borovinki-med-i-vishni", "Цедено мляко с боровинки, мед и вишни", "2,80", "220", ""],
["", "czedeno-mlyako-s-chia-i-yagodovo-sladko", "Цедено мляко с чиа и ягодово сладко", "3,50", "150", ""]

            ]
        }', 
        'slug' => 'pizza-momo',
        'business_name' => 'Pizza Momo',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Yambol',
        'region' => 'Yambol',
        'postal_code' => '8600',
        'address' => 'ул.Георги С Раковски 11',
        'address_additional' => '',
        'coords_x' => '42.48433799',
        'coords_y' => '26.51054518',
        'phone' => '+35946622010',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "shopska-salata", "Шопска салата", "2,10", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "400", ""],
["", "finna-salata", "Финна салата", "4,90", "350", ""],
["", "sboryanska-salata", "Сборянска салата", "2,10", "350", ""],
["", "zelena-salata", "Зелена салата", "2,10", "300", ""],
["", "kapreze", "Капрезе", "3,50", "250", ""],
["", "salata-ajsberg", "Салата Айсберг", "4,20", "350", ""],
["", "presen-pechen-piper", "Пресен печен пипер", "2,80", "250", ""],
["", "salata-ot-morkovi", "Салата от моркови", "2,10", "250", ""],
["", "selska-salata", "Селска салата", "3,50", "350", ""],
["", "spanachena-salata", "Спаначена салата", "4,20", "300", ""],
["", "snezhanka", "Снежанка", "2,10", "250", ""],
["", "trakijska-razyadka", "Тракийска разядка", "2,80", "250", ""],
["", "plato-salati-za-chetirima", "Плато салати за четирима", "11,90", "1300", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "350", ""],
["", "salata-happy", "Салата Happy", "2,10", "250", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "starters": [
                ["", "pileshki-flejki-s-parmezan", "Пилешки флейки с пармезан", "4,20", "200", ""],
["", "pileshki-medaloni-s-moczarela-i-proshuto", "Пилешки медальони с моцарела и прошуто", "5,60", "200", ""],
["", "pileshki-filencza-ss-sos-teriyaki", "Пилешки филенца със сос терияки", "4,20", "200", ""],
["", "pileshki-drobcheta-s-maslo", "Пилешки дробчета с масло", "2,80", "300", ""],
["", "plato-khapki", "Плато хапки", "11,90", "600", ""],
["", "bireno-plato", "Бирено плато", "10,50", "600", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "200", ""],
["", "topeni-sirencza-s-borovinki", "Топени сиренца с боровинки", "4,20", "200", ""],
["", "kamember-s-borovinki", "Камембер с боровинки", "5,60", "150", ""],
["", "pileshki-flejki-s-kornflejks-i-mlechen-sos", "Пилешки флейки с корнфлейкс и млечен сос", "3,50", "200", ""],
["", "tartar-ot-pushena-somga", "Тартар от пушена сьомга", "4,90", "150", ""],
["", "teleshki-ezik-s-presen-luk-i-vino", "Телешки език с пресен лук и вино", "4,90", "150", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,10", "200", ""],
["", "khrupkavi-tikvichki", "Хрупкави тиквички", "2,80", "200", ""],
["", "moczarela-pane", "Моцарела пане", "3,50", "200", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "3,50", "200", ""]

            ],

            "Свинско месо": [
                ["", "pleskavicza", "Плескавица", "3,50", "250", ""],
["", "veshalicza", "Вешалица", "3,50", "200", ""],
["", "domashna-nadenicza", "Домашна наденица", "3,50", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "250", ""],
["", "marinovani-svinski-rebrcza", "Мариновани свински ребърца", "4,90", "300", ""],
["", "orekhova-lapa", "Орехова лапа", "5,60", "250", ""],
["", "cherva-na-zhar", "Черва на жар", "2,80", "250", ""],
["", "khajdushko-kyufte", "Хайдушко кюфте", "2,80", "200", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "nervozno-kyufte", "Нервозно кюфте", "1,40", "160", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "plnena-veshalicza-s-bekon-i-kashkaval", "Пълнена вешалица с бекон и кашкавал", "4,90", "200", ""],
["", "svinski-drob-v-bulo", "Свински дроб в було", "2,10", "250", ""]

            ],

            "chicken": [
                ["", "pileshko-file-s-bekon-i-kashkaval-v-bulo", "Пилешко филе с бекон и кашкавал в було", "4,20", "200", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "200", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "3,50", "200", ""]

            ],

            "Телешко месо": [
                ["", "teleshko-mlyano", "Телешко мляно", "2,80", "200", ""],
["", "teleshki-sudzhuk", "Телешки суджук", "4,20", "250", ""]

            ],

            "Шашлици": [
                ["", "svinski-shashlik", "Свински шашлик", "6,30", "350", ""],
["", "kombiniran-shashlik", "Комбиниран шашлик", "6,30", "350", ""],
["", "teleshki-shashlik", "Телешки шашлик", "10,50", "350", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "6,30", "350", ""]

            ],

            "Комбинирани плата": [
                ["", "plato-2", "Плато 2", "13,30", "800", ""],
["", "plato-za-kompaniya", "Плато за компания", "26,60", "1600", ""],
["", "plato-1", "Плато 1", "13,30", "800", ""]

            ],

            "Сач": [
                ["", "sach-s-pileshko-meso", "Сач с пилешко месо", "7,00", "500", ""],
["", "sach-ss-svinsko-meso", "Сач със свинско месо", "7,70", "500", ""],
["", "kombiniran-sach", "Комбиниран сач", "7,70", "500", ""],
["", "sach-averite", "Сач Аверите", "9,10", "500", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "4,90", "500", ""]

            ],

            "Ястия": [
                ["", "shareno-svinsko", "Шарено свинско", "5,60", "300", ""],
["", "svinski-filencza-averite", "Свински филенца Аверите", "6,30", "300", ""],
["", "surf-and-turf", "Surf and Turf", "8,40", "300", ""],
["", "chorbadzhijsko-meze", "Чорбаджийско мезе", "6,30", "300", ""],
["", "khrupkavo-pile-s-mlechen-sos-i-chips-averite", "Хрупкаво пиле с млечен сос и чипс Аверите", "4,90", "350", ""],
["", "teleshki-stek", "Телешки стек", "11,20", "250", ""],
["", "teleshki-kyuftencza", "Телешки кюфтенца", "4,90", "300", ""],
["", "mandradzhijski-kartofi", "Мандраджийски картофи", "4,20", "350", ""],
["", "kartofi-s-bekon-i-kashkaval", "Картофи с бекон и кашкавал", "3,50", "350", ""],
["", "spanak-s-yajcza-i-sirene", "Спанак с яйца и сирене", "4,20", "300", ""]

            ],

            "fish": [
                ["", "somga-file-na-zhar", "Сьомга филе на жар", "9,10", "200", ""],
["", "czipura-na-zhar", "Ципура на жар", "8,40", "300", ""],
["", "lavrak-file-na-tigan", "Лаврак филе на тиган", "6,30", "200", ""],
["", "sharan", "Шаран", "5,60", "250", ""],
["", "pstrva-kotlet", "Пъстърва котлет", "6,30", "300", ""],
["", "skumriya-na-zhar", "Скумрия на жар", "2,80", "250", ""],
["", "gavros", "Гаврос", "4,20", "200", ""],
["", "kalmari-tuba-pane", "Калмари туба пане", "5,60", "200", ""],
["", "skaridi", "Скариди", "9,10", "200", ""],
["", "fish-and-chips", "Fish and chips", "6,30", "350", ""],
["", "khapki-somga", "Хапки сьомга", "8,40", "250", ""]

            ],

            "garnish": [
                ["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "chips-averite", "Чипс Аверите", "2,10", "200", ""],
["", "domashni-kartofi", "Домашни картофи", "1,40", "200", ""],
["", "domashni-kartofi-ss-sirene", "Домашни картофи със сирене", "2,10", "", ""],
["", "zelenchuczi-na-zhar", "Зеленчуци на жар", "3,50", "300", ""],
["", "domati-krastaviczi-i-przheni-kartofi-200gr", "Домати, краставици и пържени картофи (200гр)", "1,40", "", ""],
["", "kartofena-salata-bobena-salata-i-lyutenicza", "Картофена салата, бобена салата и лютеница", "0,70", "200", ""],
["", "kartofeno-pyure-chushki-s-oczet-i-chesn", "Картофено пюре, чушки с оцет и чесън", "1,40", "200", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "200", ""],
["", "marinovani-lyuti-chushleta", "Мариновани люти чушлета", "1,40", "", ""]

            ],

            "bread": [
                ["", "filijka", "Филийка", "0,00", "", ""],
["", "prlenka", "Пърленка", "0,00", "", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "bbq-sos", "BBQ сос", "0,70", "50", ""],
["", "chili-sos", "Чили сос", "0,70", "50", ""],
["", "ketchup-sos", "Кетчуп сос", "0,70", "50", ""],
["", "majoneza-sos", "Майонеза сос", "0,70", "50", ""]

            ],

            "desserts": [
                ["", "frenska-selska-torta", "Френска селска торта", "2,10", "", ""],
["", "czedeno-mlyako", "Цедено мляко", "1,40", "", ""],
["", "palachinka", "Палачинка", "1,40", "", ""]

            ],

            "Бяло вино": [
                ["", "shardone-trgovishhe", "Шардоне Търговище", "9,80", "750", ""],
["", "muskat-trgovishhe", "Мускат Търговище", "9,80", "750", ""],
["", "traminer-trgovishhe", "Траминер Търговище", "9,80", "750", ""],
["", "shardone-starosel", "Шардоне Старосел", "17,50", "750", ""],
["", "muskat-starosel", "Мускат Старосел", "17,50", "750", ""]

            ],

            "Червено вино": [
                ["", "merlo-trgovishhe", "Мерло Търговище", "9,80", "750", ""],
["", "kaberne-trgovishhe", "Каберне Търговище", "9,80", "750", ""],
["", "merlo-starosel", "Мерло Старосел", "17,50", "750", ""],
["", "kaberne-sovinon-starosel", "Каберне Совиньон Старосел", "17,50", "750", ""],
["", "mavrud-starosel", "Мавруд Старосел", "17,50", "750", ""]

            ],

            "drinks": [
                ["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "", ""],
["", "limonada", "Лимонада", "0,00", "", ""],
["", "ajryan", "Айрян", "0,70", "200", ""]

            ]
        }', 
        'slug' => 'steak-house-averite',
        'business_name' => 'Steak House Аверите',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'бул. Трети Март 27',
        'address_additional' => '',
        'coords_x' => '43.40486548',
        'coords_y' => '23.22279215',
        'phone' => '+359882072229',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Банички": [
                ["", "banichka", "Баничка", "0,70", "", ""],
["", "banichka-s-yablka", "Баничка с ябълка", "0,70", "", ""],
["", "banichka-ss-spanak-i-sirene", "Баничка със спанак и сирене", "0,70", "", ""],
["", "banichka-s-shunka-i-topeno-sirene", "Баничка с шунка и топено сирене", "0,70", "", ""]

            ],

            "Баници по поръчка на килограм": [
                ["", "banicza-ss-sirene", "Баница със сирене", "7,70", "", ""],
["", "banicza-s-yablka", "Баница с ябълка", "7,00", "", ""],
["", "banicza-ss-spanak-i-sirene", "Баница със спанак и сирене", "7,70", "", ""],
["", "banicza-s-shunka-i-topeno-sirene", "Баница с шунка и топено сирене", "8,40", "", ""]

            ],

            "others": [
                ["", "krgla-picza", "Кръгла пица", "1,40", "", ""],
["", "picza-parche-s-kolbas-kashkaval-kiseli-krastavichki-i-gbi", "Пица парче с колбас, кашкавал, кисели краставички и гъби", "1,40", "", ""],
["", "picza-s-kolbas-kashkaval-kiseli-krastavichki-i-gbi", "Пица с колбас, кашкавал, кисели краставички и гъби", "14,00", "", ""],
["", "picza-parche-s-kolbas-i-kashkaval", "Пица парче с колбас и кашкавал", "1,40", "", ""],
["", "pitka-s-krenvirsh", "Питка с кренвирш", "0,70", "", ""],
["", "pitka-s-kajma", "Питка с кайма", "0,70", "", ""],
["", "kashkavalka", "Кашкавалка", "0,70", "", ""],
["", "zakharinka", "Захаринка", "0,00", "", ""],
["", "zakuska-viena", "Закуска Виена", "0,70", "", ""]

            ],

            "Сладки изкушения": [
                ["", "ekler-golyam", "Еклер голям", "0,70", "", ""],
["", "revane", "Реване", "0,70", "", ""],
["", "pasti-vi-vi-an", "Пасти Ви Ви Ан", "1,40", "", ""],
["", "shoko-topki", "Шоко топки", "0,00", "", ""]

            ]
        }', 
        'slug' => 'banichkite-pri-yanka',
        'business_name' => 'Баничките при Янка',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Montana',
        'region' => 'Montana',
        'postal_code' => '3400',
        'address' => 'ул. Трети Март 68',
        'address_additional' => '',
        'coords_x' => '43.40515885',
        'coords_y' => '23.22399459',
        'phone' => '+359876484040',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-beleni-rozovi-domati-s-pecheni-chushki", "Салата белени розови домати с печени чушки", "3,50", "500", ""],
["", "miks-ot-salati-s-avokado", "Микс от салати с авокадо", "2,80", "500", ""],
["", "meksikanska-salata-s-pile", "Мексиканска салата с пиле", "3,50", "500", ""],
["", "meksikanska-salata-s-riba-ton", "Мексиканска салата с риба тон", "3,50", "500", ""],
["", "slavyanska-salata", "Славянска салата", "2,80", "500", ""]

            ],

            "Нови предложения": [
                ["", "pateshko-magre", "Патешко магре", "8,40", "400", ""],
["", "pile-mechta", "Пиле мечта", "7,00", "450", ""],
["", "pile-po-sredizemnomorski", "Пиле по средиземноморски", "6,30", "450", ""],
["", "svinski-rebrcza", "Свински ребърца", "9,80", "650", ""],
["", "svinski-pncheta-s-parmezan", "Свински пънчета с пармезан", "7,70", "400", ""],
["", "svinsko-file-s-kajsii-sino-sirene-i-cheri-domati", "Свинско филе с кайсии, синьо сирене и чери домати", "8,40", "400", ""],
["", "svinski-kscheta-s-manatarki-i-kartofeno-pyure", "Свински късчета с манатарки и картофено пюре", "8,40", "400", ""],
["", "rizoto-ss-svinsko-bon-file-i-manatarki", "Ризото със свинско бон филе и манатарки", "6,30", "350", ""],
["", "rizoto-s-pile-i-manatarki", "Ризото с пиле и манатарки", "5,60", "350", ""],
["", "rizoto-s-maslini-i-susheni-domati", "Ризото с маслини и сушени домати", "4,90", "350", ""],
["", "taliateli-s-pile-i-brokoli", "Талиатели с пиле и броколи", "4,90", "350", ""],
["", "taliateli-ss-somga-i-tikvichki", "Талиатели със сьомга и тиквички", "6,30", "350", ""],
["", "taliateli-karbonara", "Талиатели Карбонара", "4,20", "350", ""],
["", "zapecheno-koze-sirene-ss-sladko-ot-smokini-i-orekhi", "Запечено козе сирене със сладко от смокини и орехи", "6,30", "200", ""],
["", "melanzana", "Меланзана", "3,50", "300", ""],
["", "khrupkavi-kalmari-vrkhu-kanape-ot-avokado", "Хрупкави калмари върху канапе от авокадо", "7,00", "250", ""],
["", "skaridi-s-imperatorski-oriz", "Скариди с императорски ориз", "8,40", "300", ""],
["", "skaridi-s-kopr-i-chesn", "Скариди с копър и чесън", "7,00", "200", ""],
["", "somga-ss-sos-asperzhi-i-oriz", "Сьомга със сос, аспержи и ориз", "11,90", "450", ""],
["", "somga-s-khrupkava-korichka", "Сьомга с хрупкава коричка", "11,90", "400", ""]

            ],

            "salads": [
                ["", "salata-czezar-s-kinoa", "Салата Цезар с киноа", "3,50", "500", ""],
["", "bolyarska-salata", "Болярска салата", "2,10", "500", ""],
["", "babina-salata", "Бабина салата", "2,10", "300", ""],
["", "frenska-salata", "Френска салата", "3,50", "400", ""],
["", "proletna-salata", "Пролетна салата", "2,10", "500", ""],
["", "salata-fitnes", "Салата фитнес", "2,10", "450", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "400", ""],
["", "salata-rodopski-vrkh", "Салата родопски връх", "2,80", "400", ""],
["", "chobanska-salata", "Чобанска салата", "2,80", "500", ""],
["", "salata-s-panirano-sirene", "Салата с панирано сирене", "2,80", "550", ""],
["", "salata-golyamata-berta", "Салата голямата Берта", "3,50", "700", ""],
["", "selska-salata", "Селска салата", "2,80", "400", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "500", ""],
["", "gorska-salata-s-pecheni-gbi", "Горска салата с печени гъби", "2,80", "600", ""],
["", "chorbadzhijska-salata", "Чорбаджийска салата", "3,50", "700", ""],
["", "kmetska-salata", "Кметска салата", "2,80", "700", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "600", ""],
["", "mlechna-salata", "Млечна салата", "2,10", "300", ""],
["", "katk-s-krastaviczi-i-domati", "Катък с краставици и домати", "2,10", "400", ""],
["", "shopska-salata", "Шопска салата", "2,10", "400", ""]

            ],

            "Топли предястия": [
                ["", "drob-po-bolyarski", "Дроб по болярски", "2,10", "300", ""],
["", "domashen-chips", "Домашен чипс", "2,10", "200", ""],
["", "brokoli-obia", "Броколи Обиа", "4,20", "550", ""],
["", "babino-meze", "Бабино мезе", "4,20", "500", ""],
["", "dushmansko-meze", "Душманско мезе", "4,90", "700", ""],
["", "pile-po-meraklijski", "Пиле по мераклийски", "3,50", "300", ""],
["", "yunashko-meze", "Юнашко мезе", "5,60", "600", ""],
["", "srcza-po-khajdushki", "Сърца по хайдушки", "2,80", "400", ""],
["", "zapekanka-golemiya-shef", "Запеканка големия шеф", "2,80", "500", ""],
["", "brokoli-s-tri-vida-sirene", "Броколи с три вида сирене", "3,50", "400", ""],
["", "topeno-sirene-s-kornflejks", "Топено сирене с корнфлейкс", "2,80", "250", ""],
["", "przheni-tikvichki-s-chesnov-sos", "Пържени тиквички с чеснов сос", "2,10", "300", ""],
["", "pileshki-flejki-s-kornflejks", "Пилешки флейки с корнфлейкс", "3,50", "300", ""],
["", "khrupkavi-kashkavalcheta", "Хрупкави кашкавалчета", "2,80", "200", ""],
["", "khrupkavi-sirencza", "Хрупкави сиренца", "2,10", "200", ""],
["", "pileshki-khapki", "Пилешки хапки", "2,80", "300", ""],
["", "pileshki-drobcheta", "Пилешки дробчета", "1,40", "200", ""],
["", "pileshki-drobcheta-pane", "Пилешки дробчета пане", "2,10", "300", ""],
["", "pileshki-srcza-przheni", "Пилешки сърца пържени", "2,10", "200", ""],
["", "ezik-v-maslo", "Език в масло", "3,50", "200", ""],
["", "przheni-kartofi-presni", "Пържени картофи пресни", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "300", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "200", ""],
["", "pikantni-kartofi-ss-sos", "Пикантни картофи със сос", "1,40", "300", ""],
["", "pateshki-srcza", "Патешки сърца", "2,80", "200", ""],
["", "svinski-drob", "Свински дроб", "1,40", "200", ""]

            ],

            "Гозби от пилешко месце": [
                ["", "ptiche-gnezdo", "Птиче гнездо", "6,30", "400", ""],
["", "file-blgare", "Филе Българе", "7,00", "500", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "5,60", "300", ""]

            ],

            "Гозби от свинско месце": [
                ["", "svinski-dzholan-na-furna", "Свински джолан на фурна", "5,60", "300", ""],
["", "pikanten-dzholan-na-furna", "Пикантен джолан на фурна", "7,00", "450", ""],
["", "svinsko-file-s-gbi", "Свинско филе с гъби", "6,30", "300", ""]

            ],

            "pizza": [
                ["", "belisima", "Белисима", "4,20", "450", ""],
["", "proshuto", "Прошуто", "3,50", "450", ""],
["", "stela", "Стела", "4,20", "450", ""],
["", "kaprichoza", "Капричоза", "3,50", "450", ""],
["", "salsiche", "Салсиче", "3,50", "450", ""],
["", "toskana", "Тоскана", "4,20", "450", ""],
["", "bonifacho", "Бонифачо", "4,20", "450", ""],
["", "di-karne", "Ди Карне", "4,20", "450", ""],
["", "salami", "Салами", "4,20", "450", ""],
["", "margarita", "Маргарита", "3,50", "450", ""]

            ],

            "barbecue": [
                ["", "khajdushka-nadenicza", "Хайдушка наденица", "4,90", "400", ""],
["", "siromashka-sofra", "Сиромашка софра", "10,50", "", ""],
["", "pileshki-krilcza-na-barbekyu", "Пилешки крилца на барбекю", "3,50", "600", ""],
["", "svinski-grdichki-na-skara", "Свински гърдички на скара", "5,60", "450", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "250", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""]

            ],

            "Вкусотийки на сач": [
                ["", "khajdushki-sach", "Хайдушки сач", "9,10", "500", ""],
["", "sach-blgare", "Сач Българе", "12,60", "800", ""],
["", "pileshki-sach", "Пилешки сач", "9,80", "600", ""],
["", "svinski-sach", "Свински сач", "10,50", "600", ""],
["", "kombiniran-sach", "Комбиниран сач", "10,50", "600", ""],
["", "kartofen-sach-s-tri-vida-sirene", "Картофен сач с три вида сирене", "6,30", "600", ""],
["", "pikantno-meze", "Пикантно мезе", "8,40", "500", ""]

            ],

            "Рибни ястия": [
                ["", "kalmari-po-grczki", "Калмари по гръцки", "6,30", "300", ""],
["", "przhen-sharan", "Пържен шаран", "4,90", "300", ""],
["", "pstrva", "Пъстърва", "5,60", "300", ""]

            ],

            "Пърленки и хлебни продукти": [
                ["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "0,70", "250", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "200", ""],
["", "prlenka-s-kashkaval-i-chesn", "Пърленка с кашкавал и чесън", "0,70", "200", ""],
["", "rodopski-kolak", "Родопски колак", "0,70", "200", ""],
["", "rodopski-kolak-ss-sirene", "Родопски колак със сирене", "0,70", "250", ""],
["", "rodopski-kolak-s-kashkaval", "Родопски колак с кашкавал", "1,40", "250", ""],
["", "rodopski-kolak-ss-sirene-i-kashkaval", "Родопски колак със сирене и кашкавал", "1,40", "250", ""]

            ],

            "garnish": [
                ["", "kombinirana-garnitura", "Комбинирана гарнитура", "0,70", "150", ""],
["", "zelena-garnitura", "Зелена гарнитура", "0,70", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "lyuto-chushle", "Люто чушле", "0,00", "", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "0,70", "150", ""],
["", "kartofi-sore", "Картофи соре", "0,70", "150", ""]

            ],

            "desserts": [
                ["", "italianska-prevzkhodna-torta", "Италианска превъзходна торта", "1,40", "150", ""],
["", "torta-mskarpone-s-borovinki", "Торта мскарпоне с боровинки", "1,40", "200", ""],
["", "palachinka", "Палачинка", "0,70", "200", ""],
["", "frenska-czeluvka", "Френска целувка", "1,40", "180", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/934252.jpg?width=302"]

            ],

            "drinks": [
                ["", "limonada", "Лимонада", "0,00", "500", ""],
["", "zagorka-ken", "Загорка кен", "0,70", "500", ""],
["", "khajneken-ken", "Хайнекен кен", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'mehana-blgare',
        'business_name' => 'Механа Българе',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6304',
        'address' => 'ул. Хан Кубрат 2',
        'address_additional' => '',
        'coords_x' => '41.9317426',
        'coords_y' => '25.5535042',
        'phone' => '+359877140007',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "futomaki-avokado", "Футомаки авокадо", "2,80", "", ""],
["", "futomaki-krastavicza", "Футомаки краставица", "2,80", "", ""],
["", "futomaki-khrupkava-skarida", "Футомаки хрупкава скарида", "3,50", "", ""],
["", "filadelfiya-khrupkavo-pile", "Филаделфия хрупкаво пиле", "3,50", "", ""],
["", "filadelfiya-somga", "Филаделфия сьомга", "3,50", "", ""],
["", "filadelfiya-paradajs", "Филаделфия парадайс", "4,20", "", ""],
["", "kaliforniya-rol", "Калифорния рол", "4,20", "", ""],
["", "rejnbou", "Рейнбоу", "3,50", "", ""],
["", "kalipso", "Калипсо", "4,20", "", ""],
["", "futomaki-somga", "Футомаки сьомга", "3,50", "", ""]

            ],

            "salads": [
                ["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "domashna-mlechna-salata", "Домашна млечна салата", "4,20", "350", ""],
["", "meksikanska-salata---pikantna", "Мексиканска салата - пикантна", "4,90", "350", ""],
["", "svezha-salata", "Свежа салата", "4,90", "300", ""],
["", "italianska-salata", "Италианска салата", "4,90", "350", ""],
["", "czezar-ss-somga", "Цезар със сьомга", "6,30", "250", ""],
["", "salata-s-nakhut-avokado-i-riba-ton", "Салата с нахут, авокадо и риба тон", "5,60", "300", ""],
["", "salata-s-pecheni-zelenchuczi-i-sirene", "Салата с печени зеленчуци и сирене", "5,60", "550", ""],
["", "zelena-salata-s-maslen-bob-i-khrupkavi-tikvichki", "Зелена салата с маслен боб и хрупкави тиквички", "5,60", "400", ""],
["", "mus-ot-sirena-s-pecheni-chushki-brusketi-i-pesto", "Мус от сирена с печени чушки, брускети и песто", "4,20", "450", ""],
["", "zelena-salata-s-bivolski-katk-i-yajcze", "Зелена салата с биволски катък и яйце", "4,20", "400", ""],
["", "kapreze", "Капрезе", "6,30", "350", ""],
["", "salata-s-bivolski-katk-pecheni-chushki-i-zelenchuczi", "Салата с биволски катък, печени чушки и зеленчуци", "5,60", "450", ""],
["", "salata-s-riba-ton", "Салата с риба тон", "5,60", "350", ""],
["", "paezana", "Паезана", "6,30", "400", ""],
["", "salata-s-taliateli-i-riba-ton", "Салата с талиатели и риба тон", "5,60", "400", ""],
["", "salata-s-khrupkavo-pile", "Салата с хрупкаво пиле", "5,60", "400", ""],
["", "guakamole---pikantna", "Гуакамоле - пикантна", "5,60", "350", ""],
["", "salata-s-kinoa-i-byala-riba", "Салата с киноа и бяла риба", "7,00", "400", ""],
["", "sano", "Сано", "4,90", "350", ""],
["", "salata-s-kinoa-i-avokado", "Салата с киноа и авокадо", "5,60", "350", ""],
["", "salata-rukola", "Салата Рукола", "7,00", "400", ""],
["", "spanachena-salata-s-kinoa", "Спаначена салата с киноа", "5,60", "400", ""],
["", "salata-s-proshuto", "Салата с прошуто", "6,30", "250", ""],
["", "tabule-s-kinoa", "Табуле с киноа", "4,90", "", ""],
["", "czezar-s-pile", "Цезар с пиле", "5,60", "300", ""]

            ],

            "appetizer": [
                ["", "khumus-s-pecheni-chushki", "Хумус с печени чушки", "4,20", "220", ""],
["", "khumus-s-avokado", "Хумус с авокадо", "4,90", "220", ""],
["", "klasicheski-khumus-s-kedrovi-yadki", "Класически хумус с кедрови ядки", "4,90", "250", ""],
["", "tiro-salata---pikantna", "Тиро Салата - пикантна", "4,20", "250", ""],
["", "plato-ot-sirena-i-proshuto", "Плато от сирена и прошуто", "9,80", "320", ""]

            ],

            "starters": [
                ["", "presni-przheni-kartofki", "Пресни пържени картофки", "2,10", "300", ""],
["", "pikantni-kartofki-uedzhis-porseni-s-kashkaval", "Пикантни картофки уеджис, поръсени с кашкавал", "2,80", "300", ""],
["", "tikvichki-po-grczki---s-mlechen-sos", "Тиквички по гръцки - с млечен сос", "4,20", "250", ""],
["", "khapki-frends", "Хапки Френдс", "4,90", "250", ""],
["", "rulcza-ot-grilovani-tikvichki", "Рулца от гриловани тиквички", "4,90", "200", ""],
["", "pile-kentki", "Пиле Кентъки", "4,90", "350", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "4,90", "350", ""],
["", "pileshki-krilcza-teriyaki", "Пилешки крилца Терияки", "4,90", "300", ""],
["", "khrupkavi-topeni-sirencza", "Хрупкави топени сиренца", "4,90", "220", ""],
["", "pileshki-filencza-teriyaki", "Пилешки филенца Терияки", "4,90", "200", ""],
["", "kyuftencza-s-kinoa-i-magdanoz", "Кюфтенца с киноа и магданоз", "4,90", "", ""],
["", "fish--chips", "Фиш & Чипс", "5,60", "400", ""],
["", "khrupkavi-kalmari-po-grczki", "Хрупкави калмари по гръцки", "9,10", "300", ""],
["", "skaridi-provinchale", "Скариди Провинчале", "11,20", "250", ""]

            ],

            "Брускети": [
                ["", "brusketi-kapreze", "Брускети Капрезе", "4,90", "200", ""],
["", "brusketi-ss-somga", "Брускети със сьомга", "5,60", "200", ""],
["", "brusketi-s-proshuto", "Брускети с прошуто", "5,60", "200", ""]

            ],

            "Тортила": [
                ["", "tortila-s-khrupkavo-pile", "Тортила с хрупкаво пиле", "4,90", "400", ""],
["", "tortila-s-shunka-i-chedr", "Тортила с шунка и чедър", "4,90", "400", ""],
["", "tortila-s-riba-ton", "Тортила с риба тон", "5,60", "400", ""],
["", "tortila-s-pushena-somga", "Тортила с пушена сьомга", "7,00", "350", ""]

            ],

            "burgers": [
                ["", "teleshki-chijzburger", "Телешки чийзбургер", "5,60", "400", ""],
["", "teleshki-chijzburger-s-bekon-i-pusheno-sirene", "Телешки чийзбургер с бекон и пушено сирене", "6,30", "400", ""],
["", "pileshki-chijzburger", "Пилешки чийзбургер", "4,90", "400", ""]

            ],

            "Принцеси": [
                ["", "princzesa-s-kashkaval", "Принцеса с кашкавал", "2,80", "200", ""],
["", "princzesa-s-kajma-i-kashkaval", "Принцеса с кайма и кашкавал", "3,50", "200", ""],
["", "princzesa-s-shunka-i-kashkaval", "Принцеса с шунка и кашкавал", "2,80", "200", ""]

            ],

            "Прясна домашна паста и ризото": [
                ["", "taliateli-arabiata", "Талиатели Арабиата", "4,20", "300", ""],
["", "taliateli-formadzhi", "Талиатели Формаджи", "5,60", "300", ""],
["", "taliateli-s-teleshko-ragu", "Талиатели с телешко рагу", "5,60", "300", ""],
["", "taliateli-ss-spanak-i-riba-ton", "Талиатели със спанак и риба тон", "5,60", "350", ""],
["", "taliateli-ss-skaridi-moczarela-i-cheri-domati", "Талиатели със скариди, моцарела и чери домати", "7,00", "350", ""],
["", "spageti-polo-peperone", "Спагети Поло Пепероне", "5,60", "400", ""],
["", "taliateli-s-pileshko-file-i-manatarki", "Талиатели с пилешко филе и манатарки", "7,00", "350", ""],
["", "lazanya-delicziozo-s-penne", "Лазаня Делициозо с пенне", "5,60", "450", ""],
["", "penne-di-forno", "Пенне Ди Форно", "5,60", "450", ""],
["", "taliateli-proshuto", "Талиатели Прошуто", "7,00", "400", ""],
["", "ravioli-alfredo", "Равиоли Алфредо", "7,00", "350", ""],
["", "taliateli-s-teleshki-skalopini-i-rukola", "Талиатели с телешки скалопини и рукола", "8,40", "350", ""],
["", "ravioli-gamberetto", "Равиоли Гамберетто", "8,40", "400", ""],
["", "rizoto-verdure", "Ризото Вердуре", "4,20", "350", ""],
["", "rizoto-s-gorski-gbi", "Ризото с горски гъби", "5,60", "350", ""],
["", "cheren-oriz-ss-skaridi-i-kashu", "Черен ориз със скариди и кашу", "7,00", "350", ""],
["", "paelya", "Паеля", "8,40", "350", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "300", ""],
["", "rizoto-milaneze", "Ризото Миланезе", "4,90", "350", ""]

            ],

            "Постни ястия": [
                ["", "rizoto-s-tikvichki-i-domati", "Ризото с тиквички и домати", "4,20", "380", ""],
["", "rizoto-ss-spanak", "Ризото със спанак", "4,20", "260", ""],
["", "rizoto-s-praz-maslini-i-kedrovi-yadki", "Ризото с праз, маслини и кедрови ядки", "4,90", "280", ""],
["", "picza-vedzhi-kalczone", "Пица Веджи Калцоне", "6,30", "450", ""],
["", "penne-arabiata", "Пенне Арабиата", "4,20", "370", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "7,00", "", ""],
["", "picza-s-krenvirsh", "Пица с кренвирш", "7,00", "", ""],
["", "da-vega", "Да Вега", "7,00", "", ""],
["", "koshha", "Коща", "7,00", "", ""],
["", "vegetariana", "Вегетариана", "7,70", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "7,70", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "8,40", "", ""],
["", "kiavara", "Киавара", "8,40", "", ""],
["", "toskana", "Тоскана", "8,40", "", ""],
["", "kalabreze", "Калабрезе", "8,40", "", ""],
["", "kalczone", "Калцоне", "7,70", "", ""],
["", "kiara", "Киара", "8,40", "", ""],
["", "peperoni", "Пеперони", "8,40", "", ""],
["", "milano", "Милано", "8,40", "", ""],
["", "rukola", "Рукола", "9,10", "", ""],
["", "riba-ton", "Риба тон", "9,10", "", ""],
["", "polo", "Поло", "7,70", "", ""]

            ],

            "Запеканки": [
                ["", "zapecheni-kartofi-ss-sirene-i-kashkaval", "Запечени картофи със сирене и кашкавал", "4,20", "400", ""],
["", "zelenchuczi-ss-zapechena-moczarela", "Зеленчуци със запечена моцарела", "5,60", "400", ""],
["", "zapecheni-kartofi-asorti", "Запечени картофи Асорти", "4,90", "400", ""],
["", "zapecheni-brokoli-ss-sirena", "Запечени броколи със сирена", "5,60", "400", ""],
["", "zapekanka-s-pileshki-kscheta-i-spanak", "Запеканка с пилешки късчета и спанак", "5,60", "400", ""]

            ],

            "Фокачи": [
                ["", "chesnova-fokacha", "Чеснова фокача", "2,10", "", ""],
["", "susamena-fokacha", "Сусамена фокача", "2,10", "", ""],
["", "fokacha-s-rozmarin-i-morska-sol", "Фокача с розмарин и морска сол", "2,10", "", ""],
["", "kashkavalena-fokacha", "Кашкавалена фокача", "3,50", "", ""],
["", "kombinirana-fokacha", "Комбинирана фокача", "3,50", "", ""]

            ],

            "Основни ястия": [
                ["", "kalmar-na-plocha", "Калмар на плоча", "9,10", "300", ""],
["", "pstrva-na-plocha", "Пъстърва на плоча", "7,00", "400", ""],
["", "lavrak-na-plocha", "Лаврак на плоча", "8,40", "400", ""],
["", "czipura-na-plocha", "Ципура на плоча", "8,40", "400", ""],
["", "plnen-kalmar", "Пълнен калмар", "12,60", "350", ""],
["", "oktopod-na-plocha", "Октопод на плоча", "15,40", "160", ""],
["", "oktopod-po-sredizemnomorski", "Октопод по средиземноморски", "16,10", "200", ""],
["", "file-ot-lavrak-ss-skaridi-i-kalmari", "Филе от лаврак със скариди и калмари", "15,40", "400", ""],
["", "pileshko-file-s-praz-i-gbki", "Пилешко филе с праз и гъбки", "7,00", "300", ""],
["", "pileshki-kscheta-s-gbki-i-kartofki-uedzhis", "Пилешки късчета с гъбки и картофки Уеджис", "7,00", "300", ""],
["", "pile-kri", "Пиле Къри", "6,30", "400", ""],
["", "pile-formadzhi", "Пиле Формаджи", "7,00", "350", ""],
["", "pile-dzhenoveze", "Пиле Дженовезе", "8,40", "400", ""],
["", "pileshko-s-gbi-i-topeno-sirene", "Пилешко с гъби и топено сирене", "7,00", "350", ""],
["", "pileshko-file-marsala", "Пилешко филе Марсала", "9,10", "350", ""],
["", "pileshki-kscheta-v-domashna-pitka", "Пилешки късчета в домашна питка", "7,70", "350", ""],
["", "svinsko-bon-file-s-parmezanov-oriz-i-domateno-konkase", "Свинско бон филе с пармезанов ориз и доматено конкасе", "9,10", "400", ""],
["", "svinsko-file-s-divi-gbi", "Свинско филе с диви гъби", "9,80", "400", ""],
["", "svinsko-s-artishok-i-susheni-domati", "Свинско с артишок и сушени домати", "10,50", "300", ""],
["", "svinski-vratni-przholki-formadzhi", "Свински вратни пържолки Формаджи", "9,80", "350", ""],
["", "teleshki-kscheta-ss-sotirani-zelenchuczi-i-oriz", "Телешки късчета със сотирани зеленчуци и ориз", "12,60", "400", ""],
["", "teleshki-flejki-s-bilkov-sos", "Телешки флейки с билков сос", "13,30", "450", ""],
["", "teleshki-stek-ss-zapechena-moczarela", "Телешки стек със запечена моцарела", "14,70", "450", ""],
["", "teleshki-stek-s-manatarki-i-rukola", "Телешки стек с манатарки и рукола", "15,40", "350", ""],
["", "teleshki-stek-emiliyana", "Телешки стек Емилияна", "15,40", "450", ""],
["", "agneshki-kotletcheta-french-rak", "Агнешки котлетчета Френч Рак", "15,40", "400", ""],
["", "svinsko-za-cherveno-vino", "Свинско за червено вино", "8,40", "350", ""],
["", "marinovi-pileshki-krila", "Маринови пилешки крила", "4,20", "300", ""]

            ],

            "barbecue": [
                ["", "marinovi-pileshki-krila", "Маринови пилешки крила", "4,20", "300", ""],
["", "porcziya-domashni-kyuftencza", "Порция домашни кюфтенца", "5,60", "350", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "5,60", "400", ""],
["", "pileshko-file", "Пилешко филе", "6,30", "400", ""],
["", "domashni-nadenichki", "Домашни наденички", "7,00", "400", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "400", ""]

            ],

            "desserts": [
                ["", "karameleno-trileche", "Карамелено трилече", "2,80", "150", ""],
["", "malinovo-trileche", "Малиново трилече", "2,80", "150", ""],
["", "medena-torta", "Медена торта", "3,50", "150", ""],
["", "torta-tryufel", "Торта трюфел", "3,50", "150", ""],
["", "chijzkejk", "Чийзкейк", "3,50", "150", ""],
["", "brauni-chijzkejk", "Брауни чийзкейк", "3,50", "150", ""],
["", "domashna-pita-s-maskarpone", "Домашна пита с маскарпоне", "3,50", "180", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "4,20", "150", ""],
["", "picza-nutela-s-pudra-zakhar", "Пица Нутела с пудра захар", "6,30", "150", ""],
["", "torta-garash", "Торта Гараш", "3,50", "150", ""],
["", "topl-frenski-kroasan-s-nutela", "Топъл френски кроасан с Нутела", "4,20", "120", ""],
["", "gofreta-s-nutela", "Гофрета с Нутела", "2,80", "120", ""]

            ]
        }', 
        'slug' => 'deliciozo-bar',
        'business_name' => 'Deliciozo Bar &amp; Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6300',
        'address' => 'пл. Свобода 2',
        'address_additional' => '',
        'coords_x' => '41.9325019',
        'coords_y' => '25.55676215',
        'phone' => '+359886299351',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Класически ястия от османската кухня": [
                ["", "tandr-kebap", "Тандър Кебап", "16,80", "400", ""],
["", "et-sote", "Ет Соте", "10,50", "400", ""],
["", "ball-makhmudie", "Баллъ Махмудие", "11,90", "400", ""],
["", "fava", "Фава", "2,80", "200", ""],
["", "baba-ganush", "Баба Гануш", "2,80", "200", ""],
["", "khajdari", "Хайдари", "2,80", "200", ""],
["", "pide-s-kashkaval", "Пиде с кашкавал", "2,80", "240", ""],
["", "pide-ss-sudzhuk", "Пиде със суджук", "2,80", "240", ""],
["", "kyunefe", "Кюнефе", "3,50", "", ""],
["", "katmer", "Катмер", "4,90", "", ""],
["", "sutlyach-na-furna", "Сутляч на фурна", "0,70", "", ""]

            ],

            "salads": [
                ["", "salata-leten-grosh", "Салата летен Грошъ", "7,00", "700", ""],
["", "kukerska-salata", "Кукерска салата", "6,30", "400", ""],
["", "zhtvarska-salata", "Жътварска салата", "4,20", "500", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "500", ""],
["", "trakijska-salata", "Тракийска салата", "3,50", "300", ""],
["", "ovcharska-razyadka", "Овчарска разядка", "4,20", "400", ""],
["", "slavyanska-salata", "Славянска салата", "4,90", "400", ""],
["", "katk", "Катък", "3,50", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "500", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "500", ""],
["", "zelena-salata", "Зелена салата", "4,20", "300", ""],
["", "ajsberg-s-pileshko-file", "Айсберг с пилешко филе", "7,00", "400", ""],
["", "mlechna-salata", "Млечна салата", "3,50", "300", ""],
["", "czezar", "Цезар", "5,60", "400", ""],
["", "narodna-salata", "Народна салата", "3,50", "400", ""],
["", "lovdzhijska-salata", "Ловджийска салата", "7,00", "500", ""],
["", "samokovska-salata", "Самоковска салата", "2,80", "350", ""]

            ],

            "Салатни сосове, притурки и благинки": [
                ["", "sos-czezar", "Сос Цезар", "1,40", "50", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "orekhi", "Орехи", "0,70", "30", ""],
["", "magdanoz", "Магданоз", "0,00", "30", ""],
["", "vareno-yajcze", "Варено яйце", "0,00", "", ""],
["", "parmezan", "Пармезан", "1,40", "30", ""],
["", "varena-czarevicza", "Варена царевица", "0,00", "50", ""]

            ],

            "Харни мезелъци": [
                ["", "karabunarsko-tiganche", "Карабунарско тиганче", "5,60", "400", ""],
["", "kartofi-po-voevodski", "Картофи по воеводски", "3,50", "350", ""],
["", "teleshka-glava-s-shkembe", "Телешка глава с шкембе", "6,30", "400", ""],
["", "teleshki-drob-po-selski", "Телешки дроб по селски", "6,30", "400", ""],
["", "kasapsko-meze", "Касапско мезе", "7,00", "350", ""],
["", "shkembe-s-maslo-v-gyuveche", "Шкембе с масло в гювече", "5,60", "350", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "5,60", "350", ""],
["", "bolyarski-khapki", "Болярски хапки", "4,90", "300", ""],
["", "svinski-kracheta-s-chesn", "Свински крачета с чесън", "4,20", "300", ""],
["", "svinski-ushi-s-chesn", "Свински уши с чесън", "4,90", "350", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "5,60", "350", ""],
["", "przheni-pileshki-drobcheta", "Пържени пилешки дробчета", "4,90", "400", ""],
["", "pileshki-srchicza-v-maslo", "Пилешки сърчица в масло", "4,90", "400", ""],
["", "gornooryakhovska-tava", "Горнооряховска тава", "5,60", "500", ""],
["", "pileshki-vodenichki-s-maslo-v-gyuveche", "Пилешки воденички с масло в гювече", "4,90", "300", ""],
["", "agneshka-dzhigericza", "Агнешка джигерица", "5,60", "400", ""],
["", "agneshki-chrevcza-s-maslo", "Агнешки чревца с масло", "7,00", "250", ""],
["", "agneshki-glavichki-na-keremida", "Агнешки главички на керемида", "7,00", "400", ""]

            ],

            "Наблажни без дробень": [
                ["", "przheni-kartofi-ss-sirene---blanshirani", "Пържени картофи със сирене - бланширани", "2,10", "280", ""],
["", "domashni-kartofi-ss-sirene-i-merudiya", "Домашни картофи със сирене и мерудия", "2,80", "300", ""],
["", "kartofi-po-trakijski", "Картофи по тракийски", "2,80", "250", ""],
["", "khapki-kashkaval", "Хапки кашкавал", "4,20", "250", ""],
["", "khapki-sirene", "Хапки сирене", "3,50", "250", ""],
["", "panirani-topeni-sirencza", "Панирани топени сиренца", "4,20", "250", ""]

            ],

            "Гозби": [
                ["", "teleshko-s-div-oriz", "Телешко с див ориз", "11,20", "350", ""],
["", "teleshko-ss-zelenchuczi", "Телешко със зеленчуци", "10,50", "350", ""],
["", "teleshka-kavrma", "Телешка кавърма", "9,10", "400", ""],
["", "teleshko-s-manatarki", "Телешко с манатарки", "11,90", "400", ""],
["", "przhola-po-turlashki", "Пържола по турлашки", "8,40", "450", ""],
["", "dzholan-po-gushanski", "Джолан по гушански", "11,20", "450", ""],
["", "pileshka-przhola-s-gbi", "Пилешка пържола с гъби", "5,60", "350", ""],
["", "vodenicharska-kavrma", "Воденичарска кавърма", "9,10", "500", ""],
["", "pile-po-melnicharski", "Пиле по мелничарски", "7,00", "450", ""],
["", "bob-s-lukanka", "Боб с луканка", "5,60", "500", ""],
["", "ushmar---kachamak", "Ушмар - Качамак", "4,90", "400", ""],
["", "patatnik-po-madanski", "Пататник по мадански", "5,60", "400", ""],
["", "karencza-po-melnicharski", "Каренца по мелничарски", "7,00", "450", ""]

            ],

            "Запеканки": [
                ["", "keremida-grosh-s-shunka", "Керемида Грошъ с шунка", "4,90", "400", ""],
["", "keremida-grosh-s-pile", "Керемида Грошъ с пиле", "4,90", "400", ""],
["", "keremida-grosh-s-bekon", "Керемида Грошъ с бекон", "4,90", "400", ""],
["", "baj-grosh-ss-sirene", "Бай Грошъ със сирене", "4,90", "400", ""],
["", "brokoli-ss-sino-sirene", "Броколи със синьо сирене", "4,90", "400", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,90", "500", ""],
["", "bolyarska", "Болярска", "6,30", "700", ""],
["", "kolbasarska", "Колбасарска", "8,40", "700", ""],
["", "petlovi-meraczi", "Петльови мераци", "7,00", "700", ""],
["", "postna", "Постна", "6,30", "700", ""],
["", "mandradzhijska", "Мандраджийска", "7,00", "700", ""],
["", "imanyarska", "Иманярска", "6,30", "700", ""],
["", "parliva-kapicza", "Парлива капица", "6,30", "700", ""],
["", "zekhtindzhieva", "Зехтинджиева", "6,30", "700", ""],
["", "balkandzhijska", "Балканджийска", "6,30", "700", ""],
["", "deliormanska", "Делиорманска", "7,00", "700", ""],
["", "baj-grosh", "Бай Грошъ", "8,40", "700", ""],
["", "toskanska", "Тосканска", "6,30", "700", ""],
["", "ormadzhijska", "Ормаджийска", "7,00", "700", ""]

            ],

            "Пицени сосове, притурки и благинки": [
                ["", "ketchup", "Кетчуп", "0,70", "50", ""],
["", "majoneza", "Майонеза", "0,70", "50", ""],
["", "gorchicza", "Горчица", "0,70", "50", ""],
["", "mlechen-sos", "Млечен сос", "0,70", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "gbi", "Гъби", "0,00", "50", ""],
["", "divorastyashhi-gbi", "Диворастящи гъби", "0,70", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""],
["", "bekon", "Бекон", "0,70", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "proshuto", "Прошуто", "1,40", "50", ""],
["", "salami", "Салами", "0,70", "50", ""],
["", "topeno-sirene", "Топено сирене", "0,70", "50", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "30", ""],
["", "moczarela", "Моцарела", "2,10", "125", ""],
["", "sirene", "Сирене", "0,70", "30", ""],
["", "bivolsko-sirene", "Биволско сирене", "0,70", "30", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "parmezan", "Пармезан", "1,40", "30", ""]

            ],

            "Едене на сач": [
                ["", "pileshki-sach", "Пилешки сач", "13,30", "1500", ""],
["", "svinski-sach", "Свински сач", "13,30", "1500", ""],
["", "teleshki-sach", "Телешки сач", "15,40", "1500", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "9,80", "1500", ""],
["", "kasapski-sach", "Касапски сач", "13,30", "1500", ""],
["", "dzholan-meze-na-sach", "Джолан мезе на сач", "13,30", "600", ""],
["", "teleshki-ezik-na-sach", "Телешки език на сач", "13,30", "500", ""],
["", "agneshki-drebolijki-na-sach", "Агнешки дреболийки на сач", "13,30", "1000", ""]

            ],

            "Телешко месо от сукалче на жар": [
                ["", "sukalche-na-shish", "Сукалче на шиш", "14,00", "600", ""],
["", "teleshki-kotleti-na-zhar", "Телешки котлети на жар", "14,00", "500", ""],
["", "karencza-na-zhar", "Каренца на жар", "11,90", "400", ""],
["", "teleshki-drob-na-zhar", "Телешки дроб на жар", "4,90", "200", ""],
["", "teleshko-kyufte", "Телешко кюфте", "2,10", "80", ""]

            ],

            "Пилешко на жар": [
                ["", "pileshka-przhola", "Пилешка пържола", "4,20", "300", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "8,40", "", ""],
["", "pileshki-shashlk", "Пилешки шашлък", "9,10", "600", ""],
["", "pileshka-veyavicza", "Пилешка веявица", "8,40", "500", ""],
["", "pateshki-srcza-na-skara", "Патешки сърца на скара", "5,60", "350", ""]

            ],

            "Свинско на жар": [
                ["", "svinski-rebrcza", "Свински ребърца", "8,40", "500", ""],
["", "svinska-przhola", "Свинска пържола", "4,90", "250", ""],
["", "svinski-shashlk", "Свински шашлък", "10,50", "500", ""],
["", "kyufte", "Кюфте", "1,40", "80", ""],
["", "kebapche", "Кебапче", "1,40", "80", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""]

            ],

            "Агнешко на жар": [
                ["", "agneshki-kotleti", "Агнешки котлети", "14,00", "500", ""],
["", "agneshki-shashlk", "Агнешки шашлък", "13,30", "700", ""],
["", "agneshki-shishcheta", "Агнешки шишчета", "6,30", "180", ""],
["", "agneshki-mazni-cherva-na-skara", "Агнешки мазни черва на скара", "5,60", "400", ""]

            ],

            "Комбинирани софри на жар": [
                ["", "gondola", "Гондола", "25,90", "1000", ""],
["", "siniya", "Синия", "30,80", "2000", ""],
["", "czarski-shashlik", "Царски шашлик", "12,60", "800", ""],
["", "gankina-sofra-na-trizbczi", "Ганкина софра на тризъбци", "27,30", "1400", ""],
["", "vezirska-sofra", "Везирска софра", "62,30", "4700", ""]

            ],

            "Зеленчуци на жар": [
                ["", "presni-zelenchuczi-na-skara", "Пресни зеленчуци на скара", "3,50", "350", ""]

            ],

            "fish": [
                ["", "pstrva", "Пъстърва", "7,00", "", ""],
["", "czipura", "Ципура", "10,50", "", ""],
["", "lavrak", "Лаврак", "10,50", "", ""]

            ],

            "Мезе": [
                ["", "lukanka", "Луканка", "3,50", "100", ""],
["", "sudzhuk", "Суджук", "3,50", "100", ""],
["", "pastrma", "Пастърма", "5,60", "100", ""],
["", "file-elena", "Филе Елена", "5,60", "100", ""],
["", "kaloferski-babek", "Калоферски бабек", "4,20", "100", ""]

            ],

            "Подбрани сирена": [
                ["", "krave-sirene", "Краве сирене", "1,40", "100", ""],
["", "bivolsko-sirene", "Биволско сирене", "3,50", "100", ""],
["", "balkanski-kashkaval", "Балкански кашкавал", "3,50", "100", ""]

            ],

            "Хлебчета": [
                ["", "pitka", "Питка", "0,00", "", ""],
["", "gozleme", "Гьозлеме", "2,10", "180", ""],
["", "prlenka", "Пърленка", "2,80", "250", ""]

            ],

            "Coca-Cola напитки": [
                ["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/816407.jpg?width=302"]

            ],

            "drinks": [
                ["", "mineralna-voda-devin", "Минерална вода Девин", "1,40", "", ""],
["", "red-bull", "Red Bull", "3,50", "250", ""]

            ],

            "beer": [
                ["", "monster", "Monster", "3,50", "500", ""],
["", "shumensko-speczialno", "Шуменско специално", "1,40", "500", ""],
["", "pirinsko-svetlo", "Пиринско светло", "1,40", "500", ""],
["", "pirinsko-radler", "Пиринско радлер", "1,40", "500", ""],
["", "tuborg", "Туборг", "2,10", "500", ""],
["", "smrsbi", "Съмърсби", "1,40", "500", ""],
["", "erdinger", "Ердингер", "2,80", "500", ""]

            ]
        }', 
        'slug' => 'grosh',
        'business_name' => 'Грошъ',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Haskovo',
        'region' => 'Haskovo',
        'postal_code' => '6300',
        'address' => 'ул. Петко Р Славейков 7',
        'address_additional' => '',
        'coords_x' => '41.93139218',
        'coords_y' => '25.55136068',
        'phone' => '+359898439336',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "ajsber", "Айсбер", "3,50", "300", ""],
["", "kapriz", "Каприз", "3,50", "350", ""],
["", "italiana", "Италиана", "2,80", "400", ""],
["", "ovcharska", "Овчарска", "3,50", "450", ""],
["", "kitajska", "Китайска", "3,50", "350", ""],
["", "shopska", "Шопска", "2,80", "400", ""],
["", "kapreze", "Капрезе", "3,50", "350", ""],
["", "cheri-domati", "Чери домати", "4,20", "350", ""],
["", "kombinirana", "Комбинирана", "4,20", "500", ""],
["", "czezar", "Цезар", "4,20", "350", ""],
["", "roni", "Рони", "4,20", "450", ""],
["", "cheri-domati-marulya-i-rukola", "Чери домати, маруля и рукола", "3,50", "250", ""],
["", "grczka", "Гръцка", "3,50", "450", ""],
["", "kitajski-zelenchuczi", "Китайски зеленчуци", "3,50", "400", ""],
["", "mlechna", "Млечна", "2,80", "250", ""],
["", "pecheni-chushki", "Печени чушки", "4,20", "350", ""],
["", "pipericza", "Пиперица", "2,80", "250", ""],
["", "cherveno-czveklo", "Червено цвекло", "2,80", "300", ""],
["", "salata-s-marulya-i-riba-ton", "Салата с маруля и Риба тон", "3,50", "400", ""],
["", "meshana-s-plochka-sirene", "Мешана с плочка сирене", "2,80", "300", ""],
["", "ruska-salata", "Руска салата", "2,10", "250", ""],
["", "pikantna-kartofena", "Пикантна картофена", "2,10", "400", ""],
["", "sezonna-salata", "Сезонна салата", "2,10", "350", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "brokoli-ss-zelenchuczi", "Броколи със зеленчуци", "2,80", "400", ""]

            ],

            "Студени мезета": [
                ["", "lukanka", "Луканка", "1,40", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "babek", "Бабек", "1,40", "50", ""],
["", "pusheno-file", "Пушено филе", "1,40", "50", ""],
["", "kashkaval", "Кашкавал", "1,40", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""],
["", "sirene-bri", "Сирене Бри", "1,40", "50", ""],
["", "sirene-kamember", "Сирене Камембер", "1,40", "50", ""],
["", "kasapsko-sirene", "Касапско сирене", "2,10", "50", ""],
["", "pushena-somga", "Пушена сьомга", "4,20", "50", ""]

            ],

            "starters": [
                ["", "sirene-v-bekon", "Сирене в бекон", "2,80", "250", ""],
["", "sirene-ss-susam-i-med", "Сирене със сусам и мед", "2,80", "250", ""],
["", "plnen-kartof", "Пълнен картоф", "2,10", "250", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "2,80", "250", ""],
["", "topeno-sirene-s-kornflejks", "Топено сирене с корнфлейкс", "2,80", "250", ""],
["", "chushka-byurek", "Чушка бюрек", "2,80", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "zapecheni-kartofi-s-bekon-i-smetana", "Запечени картофи с бекон и сметана", "3,50", "400", ""],
["", "paniran-kashkaval", "Паниран кашкавал", "3,50", "200", ""],
["", "panirani-sirencza", "Панирани сиренца", "2,80", "300", ""],
["", "panirani-brokoli", "Панирани броколи", "2,10", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "280", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "300", ""],
["", "plnena-pechurka", "Пълнена печурка", "2,80", "200", ""],
["", "yaponska-palachinka", "Японска палачинка", "2,80", "200", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "250", ""],
["", "pecheni-zelenchiczi-na-skara", "Печени зеленчици на скара", "3,50", "300", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "300", ""],
["", "oriz-s-morski-darove", "Ориз с морски дарове", "2,80", "300", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,10", "400", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshka-przhola-na-metalna-chiniya", "Пилешка пържола на метална чиния", "4,90", "400", ""],
["", "pileshki-shishlik", "Пилешки шишлик", "4,90", "300", ""],
["", "khrupkavi-pileshki-rolcza", "Хрупкави пилешки ролца", "4,90", "300", ""],
["", "pileshka-purzhola-but", "Пилешка пуржола Бут", "4,20", "200", ""],
["", "pileshki-dzhob", "Пилешки джоб", "6,30", "300", ""],
["", "pileshki-kscheta-v-pikanten-sos", "Пилешки късчета в пикантен сос", "4,90", "400", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "300", ""],
["", "pileshki-kareta-na-skara", "Пилешки карета на скара", "4,90", "200", ""],
["", "pileshki-rulcza-s-bekon", "Пилешки рулца с бекон", "4,20", "250", ""],
["", "pileshki-flejki", "Пилешки флейки", "4,90", "250", ""],
["", "przheni-pileshki-krilcza", "Пържени пилешки крилца", "2,80", "300", ""],
["", "pileshki-kscheta-s-topeno-sirene", "Пилешки късчета с топено сирене", "4,90", "400", ""],
["", "pile-s-gbi-i-bambuk", "Пиле с гъби и бамбук", "5,60", "400", ""],
["", "pileshko-v-sladko---kisel-sos", "Пилешко в сладко - кисел сос", "4,90", "400", ""],
["", "pileshki-filencza-ss-susam", "Пилешки филенца със сусам", "4,90", "300", ""],
["", "pileshki-khapki-ss-sos-po-izbor", "Пилешки хапки със сос по избор", "3,50", "300", ""],
["", "pile-chetiri-sirena", "Пиле Четири сирена", "5,60", "400", ""],
["", "pileshko-file-ss-smetanov-sos", "Пилешко филе със сметанов сос", "5,60", "400", ""],
["", "pileshko-file-na-skara", "Пилешко филе на скара", "4,90", "300", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "3,50", "300", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "3,50", "300", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "120", ""],
["", "czipura", "Ципура", "7,00", "250", ""],
["", "lavrak", "Лаврак", "8,40", "250", ""],
["", "vatus", "Ватус", "8,40", "280", ""],
["", "sharan", "Шаран", "4,20", "250", ""],
["", "kalmari", "Калмари", "4,90", "250", ""],
["", "skaridi-po-sredizemnomorski", "Скариди по Средиземноморски", "6,30", "250", ""],
["", "pastrva", "Пастърва", "4,90", "250", ""],
["", "file-ot-riba", "Филе от риба", "5,60", "350", ""],
["", "oktopod", "Октопод", "9,80", "250", ""]

            ],

            "Паста и Пица": [
                ["", "byagashhoto-pile", "Бягащото пиле", "3,50", "", ""],
["", "margarita", "Маргарита", "2,10", "", ""],
["", "kalczone", "Калцоне", "3,50", "", ""],
["", "kaprichosa", "Капричоса", "3,50", "", ""],
["", "dzhenoveze", "Дженовезе", "3,50", "", ""],
["", "toskana", "Тоскана", "3,50", "", ""],
["", "proshuto-fungi", "Прошуто фунги", "2,80", "", ""],
["", "kuatro-formadzho", "Куатро Формаджо", "2,80", "", ""],
["", "picza-fantaziya-osnovna", "Пица Фантазия Основна", "2,10", "", ""]

            ],

            "pasta": [
                ["", "karbonara", "Карбонара", "4,20", "400", ""],
["", "vegetariana", "Вегетариана", "2,80", "400", ""],
["", "boloneze", "Болонезе", "3,50", "400", ""],
["", "spageti-s-pileshko-po-kitajski", "Спагети с пилешко по китайски", "4,20", "400", ""]

            ],

            "Ястия от свинско месо": [
                ["", "krekhko-svinsko-s-luk", "Крехко свинско с лук", "5,60", "450", ""],
["", "svinski-rebrcza-s-barbekyu-sos", "Свински ребърца с барбекю сос", "6,30", "500", ""],
["", "svinski-kareta-na-metalna-chiniya", "Свински карета на метална чиния", "6,30", "400", ""],
["", "vismena-na-skara", "Висмена на скара", "5,60", "300", ""],
["", "svinski-flejki-ss-zelenchuczi-na-skara", "Свински флейки със зеленчуци на скара", "6,30", "400", ""],
["", "svinski-vratni-kareta", "Свински вратни карета", "5,60", "200", ""],
["", "pleskavicza", "Плескавица", "3,50", "200", ""],
["", "svinska-przhola-na-skara", "Свинска пържола на скара", "5,60", "", ""],
["", "sochno-kyufte-s-kashkaval", "Сочно кюфте с кашкавал", "2,80", "", ""],
["", "tatarsko-kyufte", "Татарско кюфте", "2,80", "", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "shishche", "Шишче", "2,10", "", ""],
["", "plneno-svinsko-kontrafile", "Пълнено свинско контрафиле", "8,40", "", ""],
["", "bof-stroganov", "Бьоф Строганов", "7,00", "400", ""]

            ],

            "Топли мезета": [
                ["", "ezik-pane", "Език пане", "4,90", "300", ""],
["", "panirani-pileshki-krilcza", "Панирани пилешки крилца", "2,80", "300", ""],
["", "pileshki-drobcheta-v-maslo", "Пилешки дробчета в масло", "2,80", "", ""],
["", "pileshki-vodenichki-v-kavarma", "Пилешки воденички в каварма", "2,80", "300", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,90", "300", ""],
["", "svinski-ushi-na-skara-i-pane", "Свински уши (на скара и пане)", "4,20", "250", ""],
["", "ezik-v-maslo", "Език в масло", "4,90", "300", ""],
["", "pileshka-dreboliya-po-lovdzhijski", "Пилешка дреболия по ловджийски", "3,50", "400", ""],
["", "pileshki-srcza-v-soev-sos", "Пилешки сърца в соев сос", "3,50", "250", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,00", "100", ""],
["", "krastaviczi", "Краставици", "0,00", "100", ""],
["", "zele-s-morkovi", "Зеле с моркови", "0,00", "100", ""],
["", "lyutenicza", "Лютеница", "0,00", "100", ""],
["", "czarevicza", "Царевица", "0,00", "100", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "100", ""],
["", "zadusheni-brokoli", "Задушени броколи", "2,10", "100", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "0,70", "100", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "100", ""],
["", "miks-garnitura-topla", "МИКС Гарнитура Топла", "2,10", "300", ""],
["", "miks-garnitura-studena", "МИКС гарнитура Студена", "2,10", "300", ""]

            ],

            "Детско меню": [
                ["", "pileshki-khapki", "Пилешки хапки", "2,80", "200", ""],
["", "kyufte-i-kebapche-s-garnitura", "Кюфте и Кебапче с гарнитура", "2,80", "200", ""],
["", "pileshki-kareta-s-garnitura", "Пилешки карета с гарнитура", "2,80", "200", ""],
["", "pileshko-shishche-s-garnitura", "Пилешко шишче с гарнитура", "2,80", "180", ""],
["", "mini-picza", "Мини пица", "2,10", "250", ""]

            ],

            "Пърленка": [
                ["", "prlenka", "Пърленка", "0,70", "180", ""]

            ],

            "bread": [
                ["", "khrupkava-pitka-ss-susam", "Хрупкава питка със сусам", "0,70", "", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "filijka-prepechena", "Филийка препечена", "0,00", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "chesnov", "Чеснов", "0,00", "50", ""],
["", "pikanten", "Пикантен", "0,00", "50", ""],
["", "soev", "Соев", "0,00", "50", ""],
["", "zekhtin", "Зехтин", "0,00", "50", ""],
["", "balsamov-oczet", "Балсамов Оцет", "0,00", "50", ""],
["", "roni", "Рони", "0,00", "50", ""]

            ],

            "Choices": [
                ["", "shunka", "Шунка", "0,00", "30", ""],
["", "pusheno-file", "Пушено филе", "0,00", "30", ""],
["", "lukanka", "Луканка", "0,70", "30", ""],
["", "kolbas", "Колбас", "0,00", "30", ""],
["", "pileshko-meso", "Пилешко месо", "0,00", "30", ""],
["", "yajcze", "Яйце", "0,00", "30", ""],
["", "kashkaval", "Кашкавал", "0,70", "30", ""],
["", "topeno-sirene", "Топено Сирене", "0,00", "30", ""],
["", "czarevicza", "Царевица", "0,00", "30", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "30", ""],
["", "s-chesn", "С чесън", "0,70", "180", ""],
["", "s-kashkaval", "С кашкавал", "1,40", "200", ""],
["", "ss-sirene", "Със сирене", "1,40", "200", ""],
["", "kombinirana", "Комбинирана", "1,40", "220", ""]

            ]
        }', 
        'slug' => 'restorant-roni-bar-i-gril',
        'business_name' => 'Ресторант Рони бар и грил',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Pazardzhik',
        'region' => 'Pazardzhik',
        'postal_code' => '4400',
        'address' => 'Ул. Цар Самуил 3',
        'address_additional' => '',
        'coords_x' => '42.1916863',
        'coords_y' => '24.3317869',
        'phone' => '+359878103118',
        'email' => '',
        'website' => '',
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
