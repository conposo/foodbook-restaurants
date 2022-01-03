<?php

use Carbon\Carbon;

$restaurants = [

    [
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Морски дарове": [
                ["", "presni-chernomorski-midi-kshhata", "Пресни черноморски миди КЪЩАТА", "4,20", "600", ""],
["", "presni-chernomorski-midi-po-moryashki", "Пресни черноморски миди по моряшки", "4,20", "600", ""],
["", "presen-safrid", "Пресен сафрид", "4,20", "200", ""],
["", "midi-pane", "Миди пане", "4,20", "180", ""],
["", "czacza", "Цаца", "2,10", "200", ""],
["", "file-ot-malk-karagoz-na-skara", "Филе от малък карагьоз на скара", "4,90", "200", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "selska-salata", "Селска салата", "2,80", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "salata-zele-i-morkovi", "Салата зеле и моркови", "2,10", "200", ""],
["", "salata-snezhanka", "Салата Снежанка", "2,80", "250", ""],
["", "salata-pechen-piper", "Салата печен пипер", "2,80", "250", ""],
["", "balkanska-salata", "Балканска салата", "3,50", "350", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "350", ""],
["", "supa-topcheta", "Супа топчета", "1,40", "350", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "350", ""],
["", "shkembe-chorba", "Шкембе чорба", "2,10", "350", ""]

            ],

            "starters": [
                ["", "drobcheta-v-maslo", "Дробчета в масло", "2,80", "250", ""],
["", "drobcheta-po-selski", "Дробчета по селски", "3,50", "300", ""],
["", "panirani-drobcheta", "Панирани дробчета", "3,50", "250", ""],
["", "pileshki-srcza-s-luk", "Пилешки сърца с лук", "2,80", "200", ""],
["", "pileshki-vodenichki-s-luk", "Пилешки воденички с лук", "2,80", "200", ""],
["", "2br-piperka-byurek-220gr", "2бр. Пиперка бюрек (220гр)", "3,50", "", ""],
["", "2br-piperka-byurek-s-garnitura", "2бр. Пиперка бюрек с гарнитура", "4,90", "420", ""],
["", "pateshki-srcza-v-maslo-s-luk", "Патешки сърца в масло с лук", "4,20", "200", ""],
["", "sirene-po-shopski", "Сирене по Шопски", "2,80", "300", ""],
["", "gbi-v-maslo", "Гъби в масло", "3,50", "200", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "5,60", "200", ""],
["", "zapekanka-s-pileshko-meso", "Запеканка с пилешко месо", "3,50", "400", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,20", "250", ""],
["", "pileshki-filencza-ss-semena", "Пилешки филенца със семена", "4,20", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "230", ""],
["", "przheni-kartofi-s-kashkaval", "Пържени картофи с кашкавал", "2,10", "230", ""],
["", "domashni-przheni-kartofi", "Домашни пържени картофи", "2,10", "200", ""],
["", "domashni-przheni-kartofi-ss-sirene", "Домашни пържени картофи със сирене", "2,10", "230", ""],
["", "domashni-przheni-kartofi-s-kashkaval", "Домашни пържени картофи с кашкавал", "2,10", "230", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "kashkavaleni-khapki", "Кашкавалени хапки", "3,50", "250", ""],
["", "panirani-sirencza", "Панирани сиренца", "3,50", "250", ""],
["", "kashkaval-pane", "Кашкавал пане", "4,20", "220", ""],
["", "pileshki-bonfilencza-s-tri-vida-sirena-i-mak", "Пилешки бонфиленца с три вида сирена и мак", "5,60", "250", ""],
["", "pileshki-khapki-ot-file-s-mak", "Пилешки хапки от филе с мак", "5,60", "250", ""],
["", "pileshki-prchiczi-s-kornflejks", "Пилешки пръчици с корнфлейкс", "4,20", "250", ""],
["", "panirani-purichki", "Панирани пурички", "3,50", "220", ""]

            ],

            "Закуски": [
                ["", "2br-sandvich-s-shunka-i-kashkaval", "2бр. Сандвич с шунка и кашкавал", "2,10", "180", ""],
["", "2br-sandvich-s-lukanka-i-kashkaval", "2бр. Сандвич с луканка и кашкавал", "2,10", "180", ""],
["", "2br-sandvich-s-yajcze-i-sirene", "2бр. Сандвич с яйце и сирене", "2,10", "180", ""],
["", "klub-sandvich", "Клуб сандвич", "3,50", "400", ""],
["", "2br-princzesi-s-kajma-i-kashkaval", "2бр. Принцеси с кайма и кашкавал", "2,10", "250", ""],
["", "yajcza-na-ochi", "Яйца на очи", "2,10", "180", ""],
["", "yajcza-po-panagyurski", "Яйца по Панагюрски", "2,80", "300", ""],
["", "vegetarianska-picza", "Вегетарианска пица", "3,50", "430", ""],
["", "picza-chervenata-shapchicza", "Пица Червената шапчица", "4,20", "430", ""],
["", "picza-miki-maus", "Пица Мики маус", "3,50", "430", ""]

            ],

            "Основни ястия": [
                ["", "svinsko-teriyaki", "Свинско терияки", "7,00", "450", ""],
["", "pileshki-kscheta-fantaziya", "Пилешки късчета Фантазия", "7,00", "450", ""],
["", "pikantno-pileshko-teriyaki", "Пикантно пилешко терияки", "7,00", "450", ""],
["", "kashkaval-pane-s-garnitura", "Кашкавал пане с гарнитура", "5,60", "450", ""],
["", "svinski-kareta-s-gben-sos", "Свински карета с гъбен сос", "6,30", "400", ""],
["", "krekhki-panirani-filencza-s-garnitura", "Крехки панирани филенца с гарнитура", "5,60", "450", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "pileshko-shishche-ot-file", "Пилешко шишче от филе", "2,10", "100", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "200", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "200", ""],
["", "pileshko-file-s-garnitura", "Пилешко филе с гарнитура", "6,30", "400", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "svinska-vratna-przhola-bez-kost", "Свинска вратна пържола без кост", "5,60", "200", ""],
["", "svinska-vratna-przhola-s-garnitura", "Свинска вратна пържола с гарнитура", "7,00", "400", ""],
["", "pateshki-srcza-na-shish", "Патешки сърца на шиш", "3,50", "150", ""],
["", "pileshki-srcza-na-shish", "Пилешки сърца на шиш", "2,80", "150", ""],
["", "grilovani-zelenchuczi", "Гриловани зeленчуци", "3,50", "300", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "zadushen-oriz-ss-zelenchuczi", "Задушен ориз със зеленчуци", "0,70", "150", ""],
["", "kartofi-sote", "Картофи соте", "0,70", "150", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "200", ""]

            ],

            "bread": [
                ["", "chesnova-filijka", "Чеснова филийка", "0,00", "", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "prlenka-chesnova", "Пърленка чеснова", "1,40", "150", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "180", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "180", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "180", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta", "Бисквитена торта", "1,40", "200", ""],
["", "palachinka-po-izbor", "Палачинка по избор", "1,40", "150", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "sos-barbekyu", "Сос Барбекю", "0,70", "50", ""]

            ]
        }', 
        'slug' => 'snek-bar-kshchata',
        'business_name' => 'Снек бар Къщата',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'ул. Любен Станчев 19',
        'address_additional' => '',
        'coords_x' => '43.55216211',
        'coords_y' => '27.82975328',
        'phone' => '+359878208525',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-fitnes", "Салата фитнес", "2,10", "300", ""],
["", "zadusheni-gbi-s-kopr", "Задушени гъби с  копър", "2,80", "300", ""],
["", "bobena-salata", "Бобена салата", "1,40", "300", ""]

            ],

            "soups": [
                ["", "supa-topcheta", "Супа топчета", "1,40", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "Постни ястия": [
                ["", "bob-yakhniya", "Боб яхния", "2,10", "400", ""],
["", "spanak-s-oriz", "Спанак с ориз", "2,10", "400", ""]

            ],

            "Вегетариански ястия": [
                ["", "zelenchuczi-na-gril", "Зеленчуци на грил", "2,10", "200", ""],
["", "mish-mash", "Миш Маш", "2,10", "400", ""],
["", "kinoa-ss-zelenchuczi", "Киноа със зеленчуци", "4,20", "400", ""],
["", "piperki-v-domaten-sos", "Пиперки в доматен сос", "2,80", "400", ""],
["", "taliateli-ss-spanak-i-sirena", "Талиатели със спанак и сирена", "2,80", "400", ""]

            ],

            "Месни ястия": [
                ["", "musaka", "Мусака", "2,80", "400", ""],
["", "svinsko-s-pryasno-zele", "Свинско с прясно зеле", "3,50", "400", ""],
["", "svinska-kavrma", "Свинска кавърма", "3,50", "350", ""],
["", "pileshki-filencza-v-speczialen-sos", "Пилешки филенца в специален сос", "3,50", "350", ""],
["", "pile-s-gbi-vrkhu-kanape-ot-kartofi", "Пиле с гъби върху канапе от картофи", "3,50", "350", ""]

            ],

            "specialties": [
                ["", "svinski-rebra-pecheni", "Свински ребра печени", "7,70", "400", ""]

            ],

            "alaminuti": [
                ["", "kyufte-na-skara", "Кюфте на скара", "0,00", "60", ""],
["", "kebapche-na-skara", "Кебапче на скара", "0,00", "60", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "120", ""],
["", "przheno-kyufte", "Пържено кюфте", "0,70", "70", ""],
["", "shniczel-ot-kajma", "Шницел от кайма", "0,70", "180", ""],
["", "svinski-dzholan-na-furna", "Свински джолан на фурна", "5,60", "300", ""],
["", "pileshki-filencza-s-kornflejks", "Пилешки филенца с корнфлейкс", "2,80", "200", ""],
["", "pileshko-file", "Пилешко филе", "1,40", "120", ""],
["", "pileshka-butna-przhola", "Пилешка бутна пържола", "1,40", "130", ""],
["", "kashkaval-pane", "Кашкавал пане", "1,40", "150", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "0,00", "80", ""],
["", "skumriya-file-na-skara", "Скумрия филе на скара", "2,80", "200", ""],
["", "spanacheno-kyufte", "Спаначено кюфте", "0,00", "100", ""]

            ],

            "garnish": [
                ["", "przheni-kartofki", "Пържени картофки", "0,70", "200", ""],
["", "selski-kartofki", "Селски картофки", "1,40", "200", ""],
["", "zadusheni-kartofi-s-kopr", "Задушени картофи с копър", "0,70", "200", ""]

            ],

            "bread": [
                ["", "khlebche", "Хлебче", "0,00", "100", ""]

            ],

            "desserts": [
                ["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "200", ""],
["", "zhito", "Жито", "0,70", "200", ""],
["", "biskvitena-torta", "Бисквитена торта", "1,40", "300", ""]

            ],

            "Кока Кола продукти": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/934582.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/934583.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/934584.jpg?width=302"]

            ],

            "drinks": [
                ["", "gazirana-voda", "Газирана вода", "0,70", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,00", "500", ""]

            ]
        }', 
        'slug' => 'k-express-dobrich',
        'business_name' => 'K-Express (Dobrich)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'ул. Дунав 55',
        'address_additional' => '',
        'coords_x' => '43.5665402',
        'coords_y' => '27.8395563',
        'phone' => '+359899184236',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "sandvich-proshuto-di-parma", "Сандвич Прошуто ди Парма", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/793806.JPG?width=302"],
["", "sandvich-ss-svinsko-file-i-moczarela", "Сандвич със свинско филе и моцарела", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/793807.JPG?width=302"],
["", "chikn-sandvich", "Чикън сандвич", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/793808.JPG?width=302"],
["", "sandvich-milano", "Сандвич Милано", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/793809.JPG?width=302"],
["", "vedzhi-avokado-sandvich", "Веджи Авокадо сандвич", "4,20", "280", "https://images.deliveryhero.io/image/fd-bg/Products/793810.JPG?width=302"],
["", "moczarela-sandvich", "Моцарела сандвич", "3,50", "280", "https://images.deliveryhero.io/image/fd-bg/Products/793811.JPG?width=302"],
["", "sandvich-brazeola", "Сандвич Бразеола", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/793812.JPG?width=302"],
["", "tortila-s-pileshko-i-guakamole", "Tортила с пилешко и гуакамоле", "2,80", "", ""],
["", "tortila-vedzhi-s-guakamole", "Тортила веджи с гуакамоле", "2,80", "", ""],
["", "tortila-ss-svinsko-file-i-guakamole", "Тортила със свинско филе и гуакамоле", "2,80", "", ""]

            ],

            "Фреш": [
                ["", "portokal", "Портокал", "2,10", "", ""],
["", "yablka", "Ябълка", "2,10", "", ""],
["", "morkov", "Морков", "2,10", "", ""],
["", "cherveno-czveklo", "Червено цвекло", "2,10", "", ""],
["", "grejpfrut", "Грейпфрут", "2,80", "", ""],
["", "limon", "Лимон", "2,80", "", ""]

            ],

            "Фреш микс": [
                ["", "yablka--morkov", "Ябълка + морков", "2,10", "", ""],
["", "portokal--yablka--morkov", "Портокал + ябълка + морков", "2,10", "", ""],
["", "portokal--grejpfrut", "Портокал + грейпфрут", "2,10", "", ""],
["", "yablka--czveklo--morkov", "Ябълка + цвекло + морков", "2,10", "", ""]

            ],

            "Детокс фреш": [
                ["", "dzhindzhr", "Джинджър", "2,10", "", ""],
["", "selri", "Селъри", "2,10", "", ""],
["", "cherven-detoks", "Червен детокс", "2,10", "", ""]

            ],

            "Анти-Грип фреш": [
                ["", "czitrus", "Цитрус", "2,80", "", ""],
["", "czitrus-2", "Цитрус 2", "2,80", "2", ""]

            ],

            "Смути": [
                ["", "shoko-menta", "Шоко мента", "2,10", "330", ""],
["", "smuti-ss-spirulina", "Смути със спирулина", "2,10", "330", ""],
["", "rozhkolada", "Рожколада", "2,10", "330", ""],
["", "konopeno-smuti", "Конопено смути", "2,10", "330", ""],
["", "smuti-leshnik-s-kokos", "Смути лешник с кокос", "2,10", "330", ""],
["", "proteinovo-smuti", "Протеиново смути", "2,10", "330", ""]

            ],

            "Сосове и дресинги": [
                ["", "pesto-dzhenoveze", "Песто Дженовезе", "0,00", "", ""],
["", "krema-sirene-filadelfiya", "Крема сирене Филаделфия", "0,00", "", ""],
["", "maslinova-pasta-del-alma", "Маслинова паста Дел Алма", "0,00", "", ""],
["", "domashen-khumus", "Домашен хумус", "0,00", "", ""],
["", "bilkov-sos", "Билков сос", "0,00", "", ""],
["", "majoneza-lajt", "Майонеза Лайт", "0,00", "", ""]

            ],

            "Сурови десерти без захар": [
                ["", "vegan-bonbon-rafaelo-s-kashu", "Веган бонбон Рафаело с кашу", "0,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/798316.JPG?width=302"],
["", "vegan-bonbon-orekhovo-vlshebstvo", "Веган бонбон Орехово Вълшебство", "0,00", "", "https://images.deliveryhero.io/image/fd-bg/Products/798317.JPG?width=302"],
["", "granola-shokolad", "Гранола шоколад", "2,80", "250", ""],
["", "granola-rom-i-stafidi", "Гранола ром и стафиди", "2,80", "250", ""],
["", "granola-banan-i-kokos", "Гранола банан и кокос", "2,80", "250", ""],
["", "vegan-bonbon-ferero-leshnik", "Веган бонбон Фереро лешник", "0,00", "", ""]

            ]
        }', 
        'slug' => 'natural',
        'business_name' => 'Natural &amp; Bio market Cactus',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'ул. Максим Горки 5',
        'address_additional' => '',
        'coords_x' => '43.5648891',
        'coords_y' => '27.82793554',
        'phone' => '+359878350070',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Мюслени енергийни закуски": [
                ["", "bananova-zakuska", "Бананова закуска", "1,40", "", ""],
["", "bananov-razkosh", "Бананов разкош", "1,40", "", ""]

            ],

            "Фрешове": [
                ["", "portokal", "Портокал", "1,40", "", ""],
["", "portokal-i-ananas", "Портокал и ананас", "1,40", "", ""],
["", "portokal-i-yagoda", "Портокал и ягода", "1,40", "", ""],
["", "grejpfrut", "Грейпфрут", "1,40", "", ""],
["", "grejpfrut-i-portokal", "Грейпфрут и портокал", "1,40", "", ""],
["", "grejpfrut-i-limon", "Грейпфрут и лимон", "1,40", "", ""],
["", "yablka", "Ябълка", "1,40", "", ""],
["", "yablka-i-limon", "Ябълка и лимон", "1,40", "", ""],
["", "fresh-svezhest", "Фреш Свежест", "1,40", "", ""],
["", "yablka-i-morkov", "Ябълка и морков", "1,40", "", ""],
["", "yablka-morkov-i-czveklo", "Ябълка, морков и цвекло", "1,40", "", ""],
["", "yablka-morkov-i-limon", "Ябълка, морков и лимон", "1,40", "", ""],
["", "portokal-grejpfrut-i-limon", "Портокал, грейпфрут и лимон", "1,40", "", ""],
["", "krastavicza-avokado-kejl", "Краставица, авокадо, кейл", "2,10", "", ""],
["", "yagoda-i-portokal", "Ягода и портокал", "1,40", "", ""],
["", "fresh-dinya", "Фреш диня", "1,40", "", ""],
["", "fresh-ppesh", "Фреш пъпеш", "1,40", "", ""],
["", "ppesh-i-limon", "Пъпеш и лимон", "1,40", "", ""],
["", "dinya-i-menta", "Диня и мента", "1,40", "", ""],
["", "dinya-menta-i-limon", "Диня, мента и лимон", "1,40", "", ""],
["", "fresh-detoks", "Фреш Детокс", "1,40", "", ""],
["", "fresh-vitamin", "Фреш Витамин", "1,40", "", ""]

            ],

            "Шейкове": [
                ["", "bananov-shejk", "Бананов шейк", "1,40", "330", ""],
["", "vegan-bananov-shejk", "Веган бананов шейк", "2,10", "330", ""],
["", "yagodov-shejk", "Ягодов шейк", "1,40", "330", ""],
["", "vegan-yagodov-shejk", "Веган ягодов шейк", "2,10", "330", ""],
["", "bananovo-yagodov-shejk", "Бананово-ягодов шейк", "1,40", "330", ""],
["", "vegan-bananovo-yagodov-shejk", "Веган бананово-ягодов шейк", "2,10", "330", ""],
["", "borovinkov-shejk", "Боровинков шейк", "1,40", "330", ""],
["", "vegan-borovinkov-shejk", "Веган боровинков шейк", "2,10", "330", ""],
["", "borovinkovo-yagodov-shejk", "Боровинково-ягодов шейк", "1,40", "330", ""],
["", "vegan-borovinkovo-yagodov-shejk", "Веган боровинково-ягодов шейк", "2,10", "330", ""],
["", "shejk-borovinki-i-banan", "Шейк боровинки и банан", "1,40", "330", ""],
["", "vegan-borovinki-i-banan", "Веган боровинки и банан", "2,10", "330", ""],
["", "malinov-shejk", "Малинов шейк", "1,40", "330", ""],
["", "vegan-malinov-shejk", "Веган малинов шейк", "2,10", "330", ""],
["", "malinovo-bananov-shejk", "Малиново-бананов шейк", "1,40", "330", ""],
["", "vegan-malini-i-banani-shejk", "Веган малини и банани шейк", "2,10", "330", ""],
["", "shejk-malina-i-yagoda", "Шейк малина и ягода", "1,40", "330", ""],
["", "vegan-shejk-malini-i-yagoda", "Веган шейк малини и ягода", "2,10", "330", ""],
["", "shejk-malina-i-sinya-borovinka", "Шейк малина и синя боровинка", "1,40", "330", ""],
["", "vegan-malina-i-sinya-borovinka", "Веган малина и синя боровинка", "2,10", "330", ""]

            ],

            "Смутита": [
                ["", "bananovo-maka-smuti", "Бананово Мака смути", "2,80", "330", ""],
["", "vegan-bananovo-smuti", "Веган бананово смути", "2,80", "330", ""],
["", "smuti-svezha-cheresha", "Смути Свежа череша", "1,40", "330", ""],
["", "smuti-chereshova-fantaziya", "Смути Черешова фантазия", "1,40", "330", ""],
["", "smuti-yagodova-cheresha", "Смути Ягодова череша", "1,40", "330", ""],
["", "smuti-vegan-yagodova-cheresha", "Смути Веган ягодова череша", "1,40", "330", ""],
["", "smuti-aromaten-shokolad", "Смути Ароматен шоколад", "2,10", "330", ""],
["", "smuti-vegan-aromaten-shokolad", "Смути Веган ароматен шоколад", "2,80", "330", ""],
["", "smuti-naslada", "Смути Наслада", "1,40", "330", ""],
["", "smuti-vegan-naslada", "Смути Веган наслада", "2,10", "330", ""],
["", "smuti-krem", "Смути Крем", "2,80", "330", ""],
["", "smuti-vegan-krem", "Смути Веган крем", "2,80", "330", ""],
["", "vegan-kajsievo-smuti-s-banan-i-chiya", "Веган кайсиево смути с банан и чия", "1,40", "330", ""],
["", "vegan-kajsievo-smuti-s-yagoda-i-banan", "Веган кайсиево смути с ягода и банан", "1,40", "330", ""],
["", "kajsievo-smuti-s-kanela-i-oveseni-yadki", "Кайсиево смути с канела и овесени ядки", "1,40", "330", ""],
["", "vegan-kajsievo-smuti-s-kanela-i-oveseni-yadki", "Веган кайсиево смути с канела и овесени ядки", "2,10", "330", ""],
["", "smuti-energiya", "Смути Енергия", "2,10", "330", ""]

            ],

            "Топли напитки": [
                ["", "kafe-bianchi-espresso-bar", "Кафе BIANCHI espresso bar", "0,70", "60", ""],
["", "kafe-bianchi-100--arabika", "Кафе BIANCHI 100 % арабика", "0,70", "60", ""],
["", "kafe-bianchi-hazelnut", "Кафе BIANCHI HAZELNUT", "0,70", "60", ""],
["", "kafe-bianchi-colombia", "Кафе BIANCHI COLOMBIA", "0,70", "60", ""],
["", "kafe-bianchi-etiopia", "Кафе BIANCHI ETIOPIA", "0,70", "60", ""],
["", "kafe-bianchi-gvatemala", "Кафе BIANCHI GVATEMALA", "0,70", "60", ""],
["", "kafe-bianchi-costa-rica", "Кафе BIANCHI COSTA RICA", "0,70", "60", ""],
["", "kafe-bianchi-macchiato", "Кафе BIANCHI MACCHIATO", "0,70", "180", ""],
["", "kafe-bianchi-late", "Кафе BIANCHI LATE", "0,70", "180", ""],
["", "kapuchino-s-czejlonska-kanela", "Капучино с цейлонска канела", "0,70", "180", ""],
["", "czikoriya-s-50--inulin-bezkofeinovo-kafe", "Цикория с 50 % инулин, безкофеиново кафе", "0,70", "100", ""],
["", "bezkofeinovo-kafe-bianchi-decaffe", "Безкофеиново кафе BIANCHI DECAFFE", "0,70", "", ""]

            ],

            "Топъл шоколад": [
                ["", "topl-shokolad-byal-bianchi", "Топъл шоколад бял BIANCHI", "0,70", "180", ""],
["", "topl-shokolad-kafyav-bianchi", "Топъл шоколад кафяв BIANCHI", "0,70", "180", ""],
["", "topl-shokolad-casa-cacao-klasik", "Топъл шоколад CASA CACAO класик", "1,40", "180", ""],
["", "topl-shokolad-casa-cacao-s-portokalovi-korichki", "Топъл шоколад CASA CACAO с портокалови корички", "1,40", "180", ""],
["", "topl-shokolad-casa-cacao-s-dzhindzhifil", "Топъл шоколад CASA CACAO с джинджифил", "1,40", "180", ""]

            ],

            "Топло мляко": [
                ["", "zlatno-mlyako", "Златно мляко", "1,40", "", ""],
["", "toplo-mlyako-s-kholandsko-alkalizirano-kakao-22-", "Топло мляко с холандско алкализирано какао 22 %", "0,70", "180", ""]

            ]
        }', 
        'slug' => 'divinity',
        'business_name' => 'Divinity',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'бул. 25 Сепрември',
        'address_additional' => '',
        'coords_x' => '43.5679512',
        'coords_y' => '27.83045711',
        'phone' => '+359897969154',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "mlechna-salata", "Млечна салата", "2,10", "200", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "salata-svezha", "Салата Свежа", "2,80", "400", ""],
["", "salata-beleni-domati-s-moczarela", "Салата Белени домати с моцарела", "2,80", "300", ""],
["", "salata-s-koze-sirene", "Салата с козе сирене", "3,50", "300", ""],
["", "salata-koktejl-ss-skaridi-i-pushena-somga", "Салата Коктейл със скариди и пушена сьомга", "5,60", "200", ""],
["", "italianska-salata", "Италианска салата", "3,50", "300", ""],
["", "salata-tuna", "Салата Туна", "4,20", "300", ""],
["", "salata-salmon", "Салата Салмон", "4,90", "400", ""],
["", "salata-vitamina", "Салата Витамина", "2,10", "300", ""],
["", "shishcheta-kapreze", "Шишчета Капрезе", "4,20", "250", ""],
["", "salata-ajsberg-s-barbekyu", "Салата Айсберг с барбекю", "4,20", "300", ""],
["", "shopska-salata", "Шопска салата", "2,10", "300", ""],
["", "selska-salata", "Селска салата", "2,80", "300", ""]

            ],

            "starters": [
                ["", "pileshki-prchiczi", "Пилешки пръчици", "4,90", "250", ""],
["", "khapki-s-pushena-somga", "Хапки с пушена сьомга", "4,90", "200", ""]

            ],

            "Основни ястия": [
                ["", "przhenicza", "Пърженица", "4,90", "400", ""],
["", "svinsko-po-czyurikhski", "Свинско по Цюрихски", "5,60", "400", ""],
["", "vienski-shniczel", "Виенски шницел", "5,60", "400", ""],
["", "svinski-vratni-karencza", "Свински вратни каренца", "6,30", "400", ""],
["", "agneshko-pecheno", "Агнешко печено", "10,50", "300", ""],
["", "plneno-pileshko-butche", "Пълнено пилешко бутче", "5,60", "300", ""],
["", "pile-arabska-noshh", "Пиле Арабска нощ", "6,30", "400", ""],
["", "pileshki-roladini-s-gbi-i-smetana", "Пилешки рoладини с гъби и сметана", "6,30", "300", ""],
["", "svinsko-bon-file-s-manatarki", "Свинско бон филе с манатарки", "10,50", "300", ""],
["", "teleshki-stek-s-manatarki", "Телешки стек с манатарки", "15,40", "300", ""],
["", "pileshka-przhola-s-topeno-sirene", "Пилешка пържола с топено сирене", "5,60", "300", ""]

            ],

            "pizza": [
                ["", "picza-margarita", "Пица Маргарита", "3,50", "", ""],
["", "picza-fruti-di-mare", "Пица Фрути ди Маре", "4,20", "", ""],
["", "picza-vegetariyana", "Пица Вегетарияна", "4,20", "", ""],
["", "picza-kalczone", "Пица Калцоне", "3,50", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "3,50", "", ""],
["", "picza-kuatro-formadzho", "Пица Куатро Формаджо", "4,20", "", ""],
["", "picza-splendid", "Пица Сплендид", "4,90", "", ""]

            ],

            "Ястия на сач": [
                ["", "czarski-sach", "Царски сач", "13,30", "700", ""],
["", "komitski-sach", "Комитски сач", "13,30", "700", ""],
["", "sach-splendid", "Сач Сплендид", "11,90", "700", ""],
["", "zlaten-damar", "Златен дамар", "6,30", "300", ""],
["", "pileshki-sach-po-lovdzhijski", "Пилешки сач по Ловджийски", "5,60", "300", ""],
["", "zelenchuczi-na-sach", "Зеленчуци на сач", "2,80", "300", ""],
["", "ezik-po-dobrudzhanski", "Език по Добруджански", "7,00", "300", ""]

            ],

            "Рибни ястия": [
                ["", "pstrva", "Пъстърва", "6,30", "250", ""],
["", "lavrak", "Лаврак", "9,80", "300", ""],
["", "somga", "Сьомга", "10,50", "250", ""]

            ],

            "grill": [
                ["", "pileshki-shish", "Пилешки шиш", "2,10", "150", ""],
["", "svinsko-bon-file", "Свинско бон филе", "6,30", "200", ""],
["", "svinski-shish-po-khajdushki", "Свински шиш по хайдушки", "7,00", "300", ""],
["", "svinsko-kare", "Свинско каре", "1,40", "70", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "", ""],
["", "svinska-vratna-kotletna-przhola", "Свинска вратна котлетна пържола", "4,90", "200", ""],
["", "svinski-rebra", "Свински ребра", "5,60", "300", ""]

            ],

            "desserts": [
                ["", "desert-splendid", "Десерт Сплендид", "2,10", "150", ""],
["", "plodova-salata", "Плодова салата", "2,10", "250", ""],
["", "palachinka", "Палачинка", "1,40", "", ""]

            ],

            "Хлебчета": [
                ["", "pitka-splendid", "Питка Сплендид", "11,90", "1500", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "1,40", "", ""]

            ],

            "garnish": [
                ["", "garnitura-przheni-kartofi", "Гарнитура Пържени картофи", "0,70", "100", ""],
["", "garnitura-vareni-kartofi", "Гарнитура Варени картофи", "0,70", "100", ""],
["", "garnitura-kartofeno-pyure", "Гарнитура Картофено пюре", "0,70", "100", ""],
["", "garnitura-karamelizirani-morkovi", "Гарнитура Карамелизирани моркови", "1,40", "100", ""],
["", "garnitura-pechen-piper", "Гарнитура Печен пипер", "1,40", "150", ""],
["", "garnitura-kartofi-sote", "Гарнитура Картофи соте", "1,40", "150", ""],
["", "garnitura-domati-i-krastaviczi", "Гарнитура Домати и краставици", "0,70", "100", ""],
["", "garnitura-zele", "Гарнитура Зеле", "0,70", "100", ""],
["", "garnitura-zadusheni-zelenchuczi", "Гарнитура Задушени зеленчуци", "0,70", "100", ""],
["", "garnitura-oriz", "Гарнитура Ориз", "0,70", "100", ""],
["", "garnitura-pechen-luk", "Гарнитура Печен лук", "0,70", "100", ""],
["", "garnitura-czarevicza", "Гарнитура Царевица", "0,70", "100", ""],
["", "garnitura-brokoli", "Гарнитура Броколи", "0,70", "150", ""]

            ]
        }', 
        'slug' => 'restorant-splendit',
        'business_name' => 'Ресторант Сплендид',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'ул. Охрид 8',
        'address_additional' => '',
        'coords_x' => '43.57014847',
        'coords_y' => '27.83234215',
        'phone' => '+058604265 , 0888518768',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "burger-el-classico--salata-czezar-s-pile", "Бургер El Classico + Салата Цезар с пиле", "9,80", "", ""],
["", "grczka-salata--kashkaval-pane-s-domashni-przheni-kartofki", "Гръцка салата + Кашкавал пане с домашни пържени картофки", "7,70", "", ""],
["", "spageti-boloneze--palachinka-s-techen-shokolad", "Спагети Болонезе + Палачинка с течен шоколад", "5,60", "", ""],
["", "salata-chetiri-sirena--domashen-chijz-kejk-s-borovinki", "Салата Четири сирена + Домашен чийз кейк с боровинки", "7,00", "", ""]

            ],

            "salads": [
                ["", "kapreze", "Капрезе", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/789233.JPG?width=302"],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/789234.JPG?width=302"],
["", "czezar-s-pile", "Цезар с пиле", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/789235.JPG?width=302"],
["", "vitamina", "Витамина", "2,80", "300", "https://images.deliveryhero.io/image/fd-bg/Products/789237.JPG?width=302"],
["", "chetiri-sirena", "Четири сирена", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/789238.JPG?width=302"],
["", "kinoa-tubule-s-avokado-mus", "Киноа Тубуле с авокадо мус", "4,90", "250", "https://images.deliveryhero.io/image/fd-bg/Products/789239.JPG?width=302"],
["", "kinoa-s-khrupkava-riba", "Киноа с хрупкава риба", "4,90", "350", "https://images.deliveryhero.io/image/fd-bg/Products/789240.JPG?width=302"],
["", "grczka-salata", "Гръцка салата", "3,50", "400", "https://images.deliveryhero.io/image/fd-bg/Products/789231.JPG?width=302"],
["", "tradiczionna-salata", "Традиционна салата", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/789232.JPG?width=302"],
["", "shopska-salata", "Шопска салата", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/789236.JPG?width=302"]

            ],

            "starters": [
                ["", "domashni-przheni-kartofi-s-burger-sos", "Домашни пържени картофи с бургер сос", "2,10", "350", ""],
["", "pile-v-palachinka", "Пиле в палачинка", "3,50", "200", ""],
["", "panirani-sirencza-ss-sos-ot-borovinki", "Панирани сиренца със сос от боровинки", "3,50", "250", ""],
["", "panirani-pileshki-khapki-ss-sos-teriaki", "Панирани пилешки хапки със сос Териаки", "3,50", "250", ""],
["", "domashni-prigotven-kartofen-chips", "Домашни приготвен картофен чипс", "2,10", "100", ""],
["", "domashni-przheni-kartofi-ss-sirene", "Домашни пържени картофи със сирене", "2,10", "350", "https://images.deliveryhero.io/image/fd-bg/Products/789367.JPG?width=302"],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""]

            ],

            "burgers": [
                ["", "bon-apetit", "Bon Apetit", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/789182.JPG?width=302"],
["", "taste-the-bomb", "Taste The Bomb", "6,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/789183.JPG?width=302"],
["", "the-big-buddy", "The Big Buddy", "5,60", "400", "https://images.deliveryhero.io/image/fd-bg/Products/789184.JPG?width=302"],
["", "christmas-gift", "Christmas Gift", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/789185.JPG?width=302"],
["", "el-classico", "El Classico", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/789186.JPG?width=302"],
["", "summer-breeze", "Summer Breeze", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/789187.JPG?width=302"],
["", "krok-madam", "Крок Мадам", "4,20", "300", ""],
["", "brusketi-s-moczarela-i-pesto", "Брускети с моцарела и песто", "3,50", "250", ""],
["", "klub-sandvich", "Клуб Сандвич", "4,20", "400", "https://images.deliveryhero.io/image/fd-bg/Products/789190.JPG?width=302"]

            ],

            "Основни ястия": [
                ["", "pileshki-shniczel-s-domashni-przheni-kartofki", "Пилешки шницел с домашни пържени картофки", "4,90", "300", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,20", "400", ""],
["", "kashkaval-pane-s-domashni-przheni-kartofki", "Кашкавал пане с домашни пържени картофки", "4,20", "300", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "400", ""]

            ],

            "desserts": [
                ["", "domashen-chijz-kejk-s-borovinki", "Домашен чийз кейк с боровинки", "2,10", "130", ""],
["", "palachinka", "Палачинка", "1,40", "150", "https://images.deliveryhero.io/image/fd-bg/Products/789202.JPG?width=302"],
["", "palachinka-ss-sladko-ot-borovinki", "Палачинка със сладко от боровинки", "1,40", "150", ""]

            ]
        }', 
        'slug' => 'burgers',
        'business_name' => 'Burgers &amp; Sport',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'ул. Независимост 2',
        'address_additional' => '',
        'coords_x' => '43.56985048',
        'coords_y' => '27.8287237',
        'phone' => '+359893305420',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Салати БГ стил": [
                ["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "550", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "450", ""],
["", "selska-salata", "Селска салата", "4,20", "500", ""],
["", "domashno-kopoolu-s-topka-katk", "Домашно кьопоолу с топка катък", "2,80", "300", ""],
["", "katk", "Катък", "3,50", "400", ""],
["", "sukh-tarator---tradiczionen-s-khrupkav-khlyab", "Сух таратор - традиционен с хрупкав хляб", "3,50", "250", ""]

            ],

            "Интересни свежи Салати": [
                ["", "salata-festo", "Салата Фесто", "4,90", "500", ""],
["", "kapreze", "Капрезе", "4,20", "350", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "350", ""],
["", "riba-ton", "Риба тон", "4,90", "350", ""],
["", "tabule", "Табуле", "4,90", "350", ""],
["", "salata-raviera", "Салата Равиера", "4,90", "400", ""],
["", "salata-pastrami", "Салата Пастрами", "4,90", "400", ""],
["", "salata-fyuzhn", "Салата Фюжън", "4,90", "400", ""]

            ],

            "Топли предястия": [
                ["", "grilovan-kamember-ss-sladko-ot-susheni-kajsii-i-filirani-bademi", "Грилован камембер със сладко от сушени кайсии и филирани бадеми", "6,30", "150", ""],
["", "zhareno-sirene-s-med-i-orekhi", "Жарено сирене с мед и орехи", "3,50", "250", ""],
["", "kashkaval-na-plocha-s-pushen-piper", "Кашкавал на плоча с пушен пипер", "4,20", "250", ""],
["", "panirani-topeni-sirena-v-panirana-tortila-chips-ss-sladko-ot-borovinki", "Панирани топени сирена в панирана тортила чипс със сладко от боровинки", "5,60", "180", ""],
["", "panirani-pileshki-mini-filencza-s-panirana-tortila-chips-i-mlechen-sos", "Панирани пилешки мини филенца с панирана тортила чипс и млечен сос", "5,60", "250", ""],
["", "zapekanka-s-brokoli-i-sino-sirene", "Запеканка с броколи и синьо сирене", "4,90", "350", ""],
["", "panirani-pileshki-krilcza-podneseni-s-chesnov-sos", "Панирани пилешки крилца, поднесени с чеснов сос", "4,20", "350", ""],
["", "grilovani-zelenchuczi", "Гриловани зеленчуци", "4,20", "200", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "2,10", "300", ""],
["", "pileshka-supa", "Пилешка супа", "2,10", "300", ""],
["", "dzholan-supa", "Джолан супа", "2,10", "300", ""]

            ],

            "Табиетлийски гъдели": [
                ["", "ezik-v-maslo-i-byalo-vino", "Език в масло и бяло вино", "5,60", "150", ""],
["", "pateshki-srcza-v-maslo-i-vino", "Патешки сърца в масло и вино", "4,90", "200", ""],
["", "pateshki-vodenichki-v-maslo-vino-i-gbi", "Патешки воденички в масло, вино и гъби", "4,90", "200", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "5,60", "200", ""],
["", "sirencza-v-bekon", "Сиренца в бекон", "3,50", "150", ""],
["", "kashkaval-v-bekon", "Кашкавал в бекон", "4,20", "150", ""],
["", "svinsko-s-luk-i-gbi", "Свинско с лук и гъби", "6,30", "250", ""],
["", "kasapski-sach", "Касапски сач", "14,70", "600", ""],
["", "kombiniran-sach", "Комбиниран сач", "13,30", "600", ""],
["", "svinski-sach-ss-zelenchuczi", "Свински сач със зеленчуци", "13,30", "600", ""],
["", "pileshki-sach", "Пилешки сач", "10,50", "600", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "6,30", "500", ""],
["", "gshi-drob-s-ananas-i-sladko-ot-susheni-kajsii", "Гъши дроб с ананас и сладко от сушени кайсии", "11,20", "150", ""]

            ],

            "Основни ястия": [
                ["", "pileshko-file-s-chetiri-vida-sirena", "Пилешко филе с четири вида сирена", "8,40", "350", ""],
["", "pile-saltimboka", "Пиле Салтимбока", "8,40", "300", ""],
["", "pile-parma", "Пиле Парма", "7,70", "450", ""],
["", "pileshka-przhola-czezar", "Пилешка пържола Цезар", "9,10", "450", ""],
["", "pateshki-bon-filencza", "Патешки бон филенца", "11,20", "400", ""],
["", "pechen-svinski-vrat-ss-sos-dizhon-i-kartofeno-pyure", "Печен свински врат със сос дижон и картофено пюре", "10,50", "400", ""],
["", "svinsko-bon-file-podneseno-vrkhu-prlenka-i-krem-filadelfiya", "Свинско бон филе, поднесено върху пърленка и крем Филаделфия", "10,50", "400", ""],
["", "svinski-rebra-rancho-podneseni-s-mango-sos-i-sotirani-zelenchuczi", "Свински ребра Ранчо поднесени с манго сос и сотирани зеленчуци", "9,80", "450", ""],
["", "pile-bearnez", "Пиле Беарнез", "6,30", "350", ""],
["", "svinski-dzholan-na-peshh-s-zhareni-kartofki-i-sos-zhu", "Свински джолан на пещ с жарени картофки и сос Жу", "9,10", "450", ""],
["", "teleshko-na-baven-ogn-s-machkani-kartofki-polyati-ss-sos-zhu", "Телешко на бавен огън с мачкани картофки, поляти със сос Жу", "12,60", "350", ""]

            ],

            "Ястия на барбекю с вулканични камъни": [
                ["", "domashno-prigotveni-kyufteta-ot-svinsko-i-teleshko-meso", "Домашно приготвени кюфтета от свинско и телешко месо", "5,60", "200", ""],
["", "domashna-nadenicza", "Домашна наденица", "5,60", "200", ""],
["", "svinski-karencza", "Свински каренца", "5,60", "200", ""],
["", "vratna-przhola", "Вратна пържола", "6,30", "250", ""],
["", "svinski-shish", "Свински шиш", "2,80", "150", ""],
["", "rebra-na-skara", "Ребра на скара", "8,40", "300", ""],
["", "kralski-kotlet-toma-khouk", "Кралски котлет Тома Хоук", "9,10", "280", ""],
["", "domashno-prigotveni-kokoshi-kyufteta", "Домашно приготвени кокоши кюфтета", "4,90", "200", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "4,90", "200", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "200", ""],
["", "pileshki-shish", "Пилешки шиш", "2,10", "120", ""],
["", "pateshki-srcza-na-shish", "Патешки сърца на шиш", "4,90", "200", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "10,50", "400", ""],
["", "svinski-shashlik", "Свински шашлик", "11,90", "400", ""],
["", "khajdushki-shashlik", "Хайдушки шашлик", "25,90", "1000", ""],
["", "kasapska-meshanicza-za-kompaniya", "Касапска мешаница за компания", "46,90", "2800", ""]

            ],

            "Риба и морски деликатеси": [
                ["", "kalmari-pane-s-limonova-majoneza", "Калмари пане с лимонова майонеза", "6,30", "200", ""],
["", "sotirani-kalmari-ss-smetanov-sos", "Сотирани калмари със сметанов сос", "6,30", "200", ""],
["", "lavrak", "Лаврак", "10,50", "250", ""],
["", "pstrva", "Пъстърва", "7,00", "250", ""],
["", "czipura", "Ципура", "9,80", "250", ""],
["", "safrid", "Сафрид", "6,30", "300", ""],
["", "chernokop", "Чернокоп", "7,00", "300", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "4,90", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "kuatro-formadzhio", "Куатро формаджио", "5,60", "", ""],
["", "chikn", "Чикън", "5,60", "", ""],
["", "fiore", "Фиоре", "5,60", "", ""],
["", "mimoza", "Мимоза", "4,90", "", ""],
["", "freska", "Фреска", "6,30", "", ""],
["", "peperoni", "Пеперони", "5,60", "", ""],
["", "vlcha", "Вълча", "6,30", "", ""],
["", "yunashka", "Юнашка", "6,30", "", ""],
["", "sladka-picza-raya", "Сладка пица Рая", "4,90", "", ""]

            ],

            "Пърленки": [
                ["", "prlenka-s-krem-filadelfiya-i-pecheni-semena", "Пърленка с крем Филаделфия и печени семена", "2,80", "300", ""],
["", "prlenka-ss-semena-i-yajcze", "Пърленка със семена и яйце", "2,10", "250", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "300", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "300", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "300", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "200", ""]

            ],

            "dry-appetizer": [
                ["", "pstr-vrat-trakiya", "Пъстър врат тракия", "2,80", "50", ""],
["", "file-elena", "Филе Елена", "2,80", "50", ""],
["", "sudzhuk", "Суджук", "2,80", "50", ""],
["", "lukanka", "Луканка", "2,10", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "1,40", "50", ""],
["", "plato-mezeta", "Плато мезета", "9,10", "200", ""],
["", "plato-sirena", "Плато сирена", "9,10", "200", ""],
["", "pateshko-pastrami", "Патешко пастрами", "2,10", "50", ""]

            ],

            "Меню за нашите малки клиенти": [
                ["", "pileshki-prchiczi-v-kornflejks", "Пилешки пръчици в корнфлейкс", "4,20", "250", ""],
["", "panirani-kashkavalcheta", "Панирани кашкавалчета", "4,20", "200", ""],
["", "panirani-sirencza-ss-sladko-ot-borovinki", "Панирани сиренца със сладко от боровинки", "4,20", "200", ""],
["", "chips", "Чипс", "2,80", "200", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "2,80", "270", ""],
["", "sandvich-s-lukanka-i-kashkaval", "Сандвич с луканка и кашкавал", "2,80", "300", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,80", "300", ""],
["", "krastaviczi-na-prchiczi", "Краставици на пръчици", "1,40", "150", ""],
["", "morkovcheta-na-prchiczi", "Морковчета на пръчици", "1,40", "150", ""],
["", "tortila-s-pileshko-meso-i-chedr", "Тортила с пилешко месо и чедър", "4,20", "250", ""]

            ],

            "desserts": [
                ["", "torta-tyulamor", "Торта Тюламор", "3,50", "250", ""],
["", "domashna-torta", "Домашна торта", "2,10", "200", ""],
["", "torta-nutela", "Торта Нутела", "3,50", "250", ""]

            ],

            "Десерти без глутен": [
                ["", "shokoladov-tryufel", "Шоколадов трюфел", "3,50", "120", ""],
["", "tiramisu", "Тирамису", "3,50", "120", ""]

            ],

            "Паста и Ризото": [
                ["", "taliateli-karbonara", "Талиатели Карбонара", "4,90", "400", ""],
["", "taliateli-di-polo", "Талиатели Ди Поло", "4,90", "400", ""],
["", "taliateli-czezar", "Талиатели Цезар", "5,60", "400", ""],
["", "taliateli-verde", "Талиатели Верде", "4,90", "400", ""],
["", "pene-boloneze", "Пене Болонезе", "4,20", "400", ""],
["", "pene-dzhenoveze", "Пене Дженовезе", "5,60", "400", ""],
["", "pene-rigate", "Пене Ригате", "4,90", "400", ""],
["", "rizoto-s-pile-i-tikvichki", "Ризото с пиле и тиквички", "4,90", "350", ""],
["", "rizoto-s-brokoli-i-parmezan", "Ризото с броколи и пармезан", "3,50", "", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "350", ""],
["", "rizoto-s-gbi-shijtake", "Ризото с гъби шийтаке", "4,20", "300", ""]

            ],

            "appetizer": [
                ["", "domashen-khumus-s-brusketi", "Домашен хумус с брускети", "2,80", "180", ""],
["", "maslinova-pasta-s-brusketi", "Маслинова паста с брускети", "2,80", "180", ""],
["", "ruska-razyadka-s-brusketi", "Руска разядка с брускети", "2,80", "180", ""]

            ],

            "garnish": [
                ["", "domashni-przheni-kartofi", "Домашни пържени картофи", "2,80", "250", ""],
["", "domashni-przheni-kartofi-ss-sirene", "Домашни пържени картофи със сирене", "3,50", "300", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "domati", "Домати", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "kartofi-po-selski", "Картофи по селски", "2,10", "200", ""],
["", "domashno-kartofeno-pyure", "Домашно картофено пюре", "2,10", "300", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "kartofi-chips", "Картофи чипс", "2,80", "250", ""],
["", "brokoli", "Броколи", "2,10", "200", ""],
["", "kopoolu", "Кьопоолу", "2,10", "150", ""],
["", "zharen-kartof", "Жарен картоф", "2,10", "200", ""],
["", "oriz-arborio", "Ориз Арборио", "1,40", "150", ""]

            ]
        }', 
        'slug' => 'gostilnica-festo',
        'business_name' => 'Гостилница Фесто',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'бул. Добруджа 4',
        'address_additional' => '',
        'coords_x' => '43.567766',
        'coords_y' => '27.847131',
        'phone' => '+359887353935',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "proshuto", "Прошуто", "3,50", "", ""],
["", "mama-mia", "Мама миа", "3,50", "", ""],
["", "polo", "Поло", "4,20", "", ""],
["", "frenska", "Френска", "3,50", "", ""],
["", "primavera", "Примавера", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "3,50", "", ""],
["", "kalczone", "Калцоне", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "oliv", "Олив", "4,20", "", ""],
["", "speczialna", "Специална", "4,20", "", ""],
["", "nashenska", "Нашенска", "3,50", "", ""],
["", "tradiczionna", "Традиционна", "3,50", "", ""],
["", "veselata-picza", "Веселата пица", "3,50", "", ""],
["", "luchano", "Лучано", "3,50", "", ""],
["", "klasicheska", "Класическа", "3,50", "", ""],
["", "shekherazada", "Шехеразада", "3,50", "", ""],
["", "spanachena", "Спаначена", "3,50", "", ""],
["", "picza-ali-baba", "Пица АЛИ БАБА", "4,20", "", ""],
["", "aladin", "Аладин", "4,20", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "chili", "Чили", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "salaten-dresing", "Салатен дресинг", "0,00", "50", ""],
["", "barbekyu", "Барбекю", "0,00", "50", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "izkushenie", "Изкушение", "3,50", "400", ""],
["", "czezar", "Цезар", "3,50", "400", ""],
["", "kartofena-salata", "Картофена салата", "3,50", "400", ""],
["", "redena-salata", "Редена салата", "3,50", "400", ""],
["", "meksikanska-salata", "Мексиканска салата", "3,50", "400", ""],
["", "salata-ali-baba", "Салата Али Баба", "3,50", "450", ""],
["", "selska-salata", "Селска салата", "3,50", "400", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-pusheno-meso", "Запеканка с пушено месо", "2,80", "500", ""],
["", "zapekanka-s-chetiri-vida-siren", "Запеканка с четири вида сирен", "2,80", "500", ""],
["", "zapekanka-s-meso-ot-dyuner", "Запеканка с месо от дюнер", "2,80", "500", ""],
["", "zapekanka-s-shunka", "Запеканка с шунка", "2,80", "500", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "2,10", "350", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "350", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "350", ""],
["", "zatvorena-prlenka", "Затворена пърленка", "2,10", "350", ""]

            ],

            "Принцеси": [
                ["", "shunka-i-kashkaval", "Шунка и кашкавал", "1,40", "150", ""],
["", "kajma-i-kashkaval", "Кайма и кашкавал", "1,40", "150", ""],
["", "sirene-i-kashkaval", "Сирене и кашкавал", "1,40", "150", ""],
["", "kashkaval", "Кашкавал", "1,40", "150", ""]

            ],

            "Coca-Cola напитки": [
                ["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "2,10", "", ""],
["", "fanta-portokal", "Fanta Портокал", "2,10", "", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "2,10", "", ""],
["", "cappy-100-portokal", "Cappy 100% Портокал", "2,10", "", ""]

            ],

            "Безалкохолни напитки": [
                ["", "tarator", "Таратор", "1,40", "500", ""],
["", "ajryan", "Айрян", "0,70", "", ""]

            ],

            "beer": [
                ["", "zagorka", "Загорка", "2,10", "", ""],
["", "ariana", "Ариана", "2,10", "", ""]

            ]
        }', 
        'slug' => 'pica-i-dyuner-ali-baba',
        'business_name' => 'Пица и Дюнер &quot;Али Баба&quot;',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'ул. 25-ти Септември, ЦГЧ А1',
        'address_additional' => '',
        'coords_x' => '43.57099005',
        'coords_y' => '27.82869937',
        'phone' => '+359892745575',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-koktejlna", "Салата Коктейлна", "3,50", "400", ""],
["", "salata-khumus", "Салата Хумус", "2,80", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "500", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "380", ""],
["", "salata-shopska", "Салата Шопска", "3,50", "430", ""],
["", "salata-zapecheno-koze-sirene-s-krushi", "Салата Запечено козе сирене с круши", "4,90", "400", ""],
["", "salata-zelena-ss-sochno-pileshko-file", "Салата Зелена със сочно пилешко филе", "5,60", "350", ""],
["", "salata-czezar-s-riba-ton", "Салата Цезар с риба тон", "6,30", "550", ""],
["", "salata-czezar-s-pileshko-file", "Салата Цезар с пилешко филе", "5,60", "500", ""],
["", "salata-pecheni-zelenchuczi", "Салата Печени зеленчуци", "3,50", "450", ""],
["", "salata-limecz", "Салата Лимец", "4,20", "550", ""],
["", "salata-uzaki", "Салата Узаки", "3,50", "550", ""]

            ],

            "Брускети": [
                ["", "brusketi-kapreze-s-chesn", "Брускети Капрезе с чесън", "2,80", "330", ""],
["", "brusketi-italiansko-proshuto", "Брускети Италианско прошуто", "4,20", "330", ""],
["", "brusketi-bekon-i-topeno-sirene", "Брускети Бекон и топено сирене", "3,50", "300", ""],
["", "brusketi-kapreze", "Брускети Капрезе", "3,50", "330", ""],
["", "brusketi-somga-i-filadelfiya", "Брускети Сьомга и Филаделфия", "4,20", "300", ""],
["", "brusketi-riba-ton-i-chedr", "Брускети Риба тон и Чедър", "4,20", "300", ""]

            ],

            "sandwiches": [
                ["", "klub-sandvich", "Клуб сандвич", "4,90", "600", ""],
["", "sandvich-arabska-pitka-s-kajma", "Сандвич Арабска питка с кайма", "4,90", "700", ""],
["", "sandvich-arabska-pitka-s-pileshko-file", "Сандвич Арабска питка с пилешко филе", "4,20", "600", ""],
["", "sandvich-arabska-pitka-s-krekhko-zapecheno-pileshko-filencze-gbi-i-moczarela", "Сандвич Арабска питка с крехко запечено пилешко филенце, гъби и моцарела", "4,90", "700", ""],
["", "sandvich-arabska-pitka-ss-svinsko-file", "Сандвич Арабска питка със свинско филе", "4,20", "600", ""],
["", "sandvich-bakardi-klub", "Сандвич Бакарди клуб", "4,20", "600", ""],
["", "sandvich-chabata-s-pileshko-file-i-topeno-sirene-emental", "Сандвич Чабата с пилешко филе и топено сирене Ементал", "3,50", "550", ""],
["", "sandvich-chabata-ss-svinsko-file-i-topeno-sirene-emental", "Сандвич Чабата със свинско филе и топено сирене Ементал", "3,50", "550", ""],
["", "sandvich-tirol", "Сандвич Тирол", "4,20", "350", ""]

            ],

            "Тост": [
                ["", "tost-pileshko-file-i-kashkavl", "Тост Пилешко филе и кашкавл", "4,20", "550", ""],
["", "tost-svinsko-file-i-kashkaval", "Тост Свинско филе и кашкавал", "4,20", "550", ""],
["", "tost-kashkaval", "Тост Кашкавал", "3,50", "500", ""],
["", "tost-sudzhuk-i-kashkaval", "Тост Суджук и кашкавал", "4,90", "550", ""],
["", "tost-sirene-i-kashkaval", "Тост Сирене и кашкавал", "3,50", "500", ""],
["", "tost-sirene-i-yajcze", "Тост Сирене и яйце", "3,50", "500", ""],
["", "tost-sirene", "Тост Сирене", "3,50", "500", ""]

            ],

            "Пици с класически Италиански тънък блат": [
                ["", "picza-kaprichoza---klasicheski-blat", "Пица Капричоза - класически блат", "4,20", "", ""],
["", "picza-proshuto-s-maskarpone---klasicheski-blat", "Пица Прошуто с маскарпоне - класически блат", "5,60", "", ""],
["", "picza-parma---klasicheski-blat", "Пица Парма - класически блат", "4,20", "", ""],
["", "picza-pollo-e-fungi---klasicheski-blat", "Пица Полло е Фунги - класически блат", "4,20", "", ""],
["", "picza-dyavola---klasicheski-blat", "Пица Дявола - класически блат", "4,20", "", ""],
["", "picza-margarita---klasicheski-blat", "Пица Маргарита - класически блат", "4,20", "", ""],
["", "picza-kuatro-salumi---klasicheski-blat", "Пица Куатро Салуми - класически блат", "5,60", "", ""],
["", "picza-parma-s-byal-sos---klasicheski-blat", "Пица Парма с бял сос - класически блат", "4,90", "", ""],
["", "picza-manatarki---klasicheski-blat", "Пица Манатарки - класически блат", "4,90", "", ""],
["", "picza-krenvirsh---klasicheski-blat", "Пица Кренвирш - класически блат", "4,20", "", ""],
["", "picza-vegetariana---klasicheski-blat", "Пица Вегетариана - класически блат", "4,20", "", ""],
["", "picza-salami---klasicheski-blat", "Пица Салами - класически блат", "5,60", "", ""],
["", "picza-tonata---klasicheski-blat", "Пица Тоната - класически блат", "4,90", "", ""],
["", "picza-norvedzheze---klasicheski-blat", "Пица Норведжезе - класически блат", "5,60", "", ""],
["", "picza-primavera---klasicheski-blat", "Пица Примавера - класически блат", "4,20", "", ""],
["", "picza-chetiri-sirena---klasicheski-blat", "Пица Четири сирена - класически блат", "5,60", "", ""],
["", "picza-nutela---sladka---klasicheski-blat", "Пица Нутела - сладка - класически блат", "4,20", "", ""],
["", "picza-kaprichoza---klasicheski-blat", "Пица Капричоза - класически блат", "4,90", "", ""],
["", "picza-proshuto-s-maskarpone---klasicheski-blat", "Пица Прошуто с маскарпоне - класически блат", "6,30", "", ""],
["", "picza-parma---klasicheski-blat", "Пица Парма - класически блат", "4,90", "", ""],
["", "picza-pollo-e-fungi---klasicheski-blat", "Пица Полло е Фунги - класически блат", "4,90", "", ""],
["", "picza-dyavola---klasicheski-blat", "Пица Дявола - класически блат", "4,90", "", ""],
["", "picza-margarita---klasicheski-blat", "Пица Маргарита - класически блат", "4,90", "", ""],
["", "picza-kuatro-salumi---klasicheski-blat", "Пица Куатро Салуми - класически блат", "6,30", "", ""],
["", "picza-parma-s-byal-sos---klasicheski-blat", "Пица Парма с бял сос - класически блат", "5,60", "", ""],
["", "picza-manatarki---klasicheski-blat", "Пица Манатарки - класически блат", "5,60", "", ""],
["", "picza-krenvirsh---klasicheski-blat", "Пица Кренвирш - класически блат", "4,90", "", ""],
["", "picza-vegetariana---klasicheski-blat", "Пица Вегетариана - класически блат", "4,90", "", ""],
["", "picza-salami---klasicheski-blat", "Пица Салами - класически блат", "6,30", "", ""],
["", "picza-tonata---klasicheski-blat", "Пица Тоната - класически блат", "5,60", "", ""],
["", "picza-norvedzheze---klasicheski-blat", "Пица Норведжезе - класически блат", "6,30", "", ""],
["", "picza-primavera---klasicheski-blat", "Пица Примавера - класически блат", "4,90", "", ""],
["", "picza-chetiri-sirena---klasicheski-blat", "Пица Четири сирена - класически блат", "6,30", "", ""],
["", "picza-nutela---sladka---klasicheski-blat", "Пица Нутела - сладка - класически блат", "4,20", "", ""],
["", "picza-nutela---sladka---klasicheski-blat", "Пица Нутела - сладка - класически блат", "11,90", "", ""],
["", "picza-vegetariana---klasicheski-blat", "Пица Вегетариана - класически блат", "11,90", "", ""],
["", "picza-dyavola---klasicheski-blat", "Пица Дявола - класически блат", "14,00", "", ""],
["", "picza-kaprichoza---klasicheski-blat-45sm-1700gr", "Пица Капричоза - класически блат (45см-1700гр", "11,90", "", ""],
["", "picza-krenvirsh---klasicheski-blat", "Пица Кренвирш - класически блат", "11,90", "", ""],
["", "picza-kuatro-salumi---klasicheski-blat", "Пица Куатро Салуми - класически блат", "14,70", "", ""],
["", "picza-manatarki---klasicheski-blat", "Пица Манатарки - класически блат", "14,70", "", ""],
["", "picza-margarita---klasicheski-blat", "Пица Маргарита - класически блат", "11,90", "", ""],
["", "picza-norvedzheze---klasicheski-blat", "Пица Норведжезе - класически блат", "14,70", "", ""],
["", "picza-parma-s-byal-sos---klasicheski-blat", "Пица Парма с бял сос - класически блат", "14,70", "", ""],
["", "picza-pollo-e-fungi---klasicheski-blat", "Пица Полло е Фунги - класически блат", "11,90", "", ""],
["", "picza-parma---klasicheski-blat", "Пица Парма - класически блат", "14,70", "", ""],
["", "picza-primavera---klasicheski-blat", "Пица Примавера - класически блат", "11,90", "", ""],
["", "picza-proshuto-s-maskarpone---klasicheski-blat", "Пица Прошуто с маскарпоне - класически блат", "14,70", "", ""],
["", "picza-salami---klasicheski-blat", "Пица Салами - класически блат", "15,40", "", ""],
["", "picza-chetiri-sirena---klasicheski-blat", "Пица Четири сирена - класически блат", "14,70", "", ""],
["", "picza-tonata---klasicheski-blat", "Пица Тоната - класически блат", "14,70", "", ""]

            ],

            "Пици с Римски висок блат": [
                ["", "picza-proshuto-s-maskarpone---rimski-blat", "Пица Прошуто с маскарпоне - римски блат", "16,10", "", ""],
["", "picza-salami---rimski-blat", "Пица Салами - римски блат", "16,80", "", ""],
["", "picza-tonata---rimski-blat", "Пица Тоната - римски блат", "16,10", "", ""],
["", "picza-primavera---rimski-blat", "Пица Примавера - римски блат", "14,70", "", ""],
["", "picza-chetiri-sirena---rimski-blat", "Пица Четири сирена - римски блат", "16,10", "", ""],
["", "picza-dyavola---rimski-blat", "Пица Дявола - римски блат", "15,40", "", ""],
["", "picza-kuatro-salumi---rimski-blat", "Пица Куатро Салуми - римски блат", "16,10", "", ""],
["", "picza-manatarki---rimski-blat", "Пица Манатарки - римски блат", "16,10", "", ""],
["", "picza-vegetariana---rimski-blat", "Пица Вегетариана - римски блат", "14,70", "", ""],
["", "picza-kaprichoza---rimski-blat", "Пица Капричоза - римски блат", "14,70", "", ""],
["", "picza-parma---rimski-blat", "Пица Парма - римски блат", "16,10", "", ""],
["", "picza-pollo-e-fungi---rimski-blat", "Пица Полло е Фунги - римски блат", "13,30", "", ""],
["", "picza-margarita---rimski-blat", "Пица Маргарита - римски блат", "14,70", "", ""],
["", "picza-parma-s-byal-sos---rimski-blat", "Пица Парма с бял сос - римски блат", "16,10", "", ""],
["", "picza-krenvirsh---rimski-blat", "Пица Кренвирш - римски блат", "14,70", "", ""],
["", "picza-norvedzheze---rimski-blat", "Пица Норведжезе - римски блат", "16,10", "", ""]

            ],

            "Фокачи": [
                ["", "fokacha-s-plnka-kapreze", "Фокача с плънка Капрезе", "4,20", "400", ""],
["", "fokacha-s-plnka-shevre", "Фокача с плънка Шевре", "5,60", "430", ""],
["", "fokacha-s-plnka-polo", "Фокача с плънка Поло", "5,60", "500", ""],
["", "fokacha-s-plnka-bri", "Фокача с плънка Бри", "4,20", "400", ""]

            ],

            "Сосове за пици": [
                ["", "sos-marinara", "Сос Маринара", "0,70", "100", ""],
["", "sos-sorento", "Сос Соренто", "0,70", "100", ""],
["", "sos-sredizemnomorski", "Сос Средиземноморски", "0,70", "100", ""],
["", "sos-chili-klasik", "Сос Чили Класик", "0,70", "100", ""],
["", "sos-chili-sladko-lyutiv", "Сос Чили сладко-лютив", "0,70", "100", ""],
["", "ketchup", "Кетчуп", "0,00", "30", ""],
["", "majoneza", "Майонеза", "0,00", "25", ""],
["", "gorchicza", "Горчица", "0,00", "25", ""]

            ],

            "Крокове": [
                ["", "krok-s-kashkaval", "Крок с кашкавал", "3,50", "450", ""],
["", "krok-s-pileshko-file-i-kashkaval", "Крок с пилешко филе и кашкавал", "4,20", "500", ""],
["", "krok-ss-svinsko-file-i-kashkaval", "Крок със свинско филе и кашкавал", "4,20", "500", ""],
["", "krok-ss-sirene", "Крок със сирене", "3,50", "450", ""],
["", "krok-ss-sirene-i-kashkaval", "Крок със сирене и кашкавал", "3,50", "450", ""],
["", "krok-ss-sudzhuk-i-kashkaval", "Крок със суджук и кашкавал", "4,90", "500", ""]

            ],

            "Пържени картофи": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""]

            ],

            "dry-appetizer": [
                ["", "plato-mezeta", "Плато мезета", "12,60", "200", ""],
["", "plato-sirena", "Плато сирена", "13,30", "325", ""]

            ],

            "burgers": [
                ["", "burger-king-kong", "Бургер Кинг Конг", "6,30", "750", ""],
["", "burger-s-teleshko-kyufte-yajcze-i-bekon", "Бургер с телешко кюфте, яйце и бекон", "7,00", "800", ""],
["", "burger-drakon", "Бургер Дракон", "5,60", "650", ""]

            ],

            "Хот Дог": [
                ["", "khot-dog-s-topeno-sirene-emental", "Хот Дог с топено сирене Ементал", "3,50", "600", ""],
["", "khot-dog", "Хот Дог", "2,80", "400", ""]

            ],

            "Гофрети": [
                ["", "gofreta-s-shokolad-nutela-i-leshniczi", "Гофрета с шоколад Нутела и лешници", "3,50", "300", ""],
["", "gofreta-s-med-orekhi-i-pukhkava-smetana", "Гофрета с мед, орехи и пухкава сметана", "2,80", "250", ""],
["", "gofreta-s-domashno-sladko-i-pukhkava-smetana", "Гофрета с домашно сладко и пухкава сметана", "3,50", "400", ""]

            ],

            "desserts": [
                ["", "jogurt-s-domashno-sladko", "Йогурт с домашно сладко", "2,80", "300", ""],
["", "krem-bryule", "Крем Брюле", "2,10", "120", ""],
["", "torta-nutela-s-domashno-sladko-parche", "Торта Нутела с домашно сладко парче", "3,50", "275", ""],
["", "torta-nutela-parche", "Торта Нутела парче", "2,80", "230", ""],
["", "mfin", "Мъфин", "0,70", "65", ""],
["", "ekler", "Еклер", "0,70", "30", ""],
["", "frenski-makaron", "Френски макарон", "0,70", "65", ""]

            ],

            "Торти": [
                ["", "torta-eklerova-malina-1", "Торта Еклерова малина (1", "2,80", "", ""],
["", "torta-eklerova-shokolad-1", "Торта Еклерова шоколад (1", "2,80", "", ""],
["", "torta-byala-nedelya-1", "Торта Бяла Неделя (1", "2,80", "", ""],
["", "torta-cherveno-kadife-1", "Торта Червено кадифе (1", "2,80", "", ""],
["", "torta-plodova-pita-1", "Торта Плодова пита (1", "2,80", "", ""],
["", "torta-sakher-1", "Торта Сахер (1", "2,80", "", ""],
["", "torta-yagodova-1", "Торта Ягодова (1", "2,80", "", ""],
["", "torta-shokoladova-biskvitka-1", "Торта Шоколадова бисквитка (1", "2,80", "", ""],
["", "torta-bavarska-1", "Торта Баварска (1", "2,80", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/901682.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/901683.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/901684.jpg?width=302"]

            ],

            "beer": [
                ["", "kamenicza", "Каменица", "2,80", "", ""]

            ]
        }', 
        'slug' => 'bacardi-club',
        'business_name' => 'Bacardi Club',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'ул. 25ти Септември 24',
        'address_additional' => '',
        'coords_x' => '43.5646291',
        'coords_y' => '27.8317653',
        'phone' => '+359885639566',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Прясно изцедени сокове": [
                ["", "domashna-limonada-ot-bz-s-limon-i-chiya", "Домашна лимонада от бъз с лимон и чия", "2,80", "", ""],
["", "portokal", "Портокал", "2,80", "", ""],
["", "chervena-yablka", "Червена Ябълка", "2,80", "", ""],
["", "morkov", "Морков", "2,80", "", ""],
["", "czveklo", "Цвекло", "2,80", "", ""],
["", "limon", "Лимон", "3,50", "", ""],
["", "grejpfrut", "Грейпфрут", "3,50", "", ""],
["", "morkov-yablka-czveklo", "Морков, ябълка, цвекло", "2,80", "", ""],
["", "zelena-yablka-i-ananas", "Зелена ябълка и Ананас", "3,50", "", ""],
["", "portokal-i-limon", "Портокал и Лимон", "2,80", "", ""],
["", "portokal-i-grejpfrut", "Портокал и Грейпфрут", "2,80", "", ""],
["", "morkov-i-yablka", "Морков и ябълка", "2,80", "", ""],
["", "portokal-i-yablka", "Портокал и Ябълка", "2,80", "", ""],
["", "morkov-i-czveklo", "Морков и Цвекло", "2,80", "", ""],
["", "portokal-i-ananas", "Портокал и Ананас", "3,50", "", ""],
["", "mistr-dzhindzhr", "Мистър джинджър", "3,50", "", ""]

            ],

            "Смути": [
                ["", "mistr-tropiczi", "Мистър Тропици", "3,50", "330", ""],
["", "mistr-zelen-1", "Мистър Зелен 1", "3,50", "330", ""],
["", "mistr-zelen-2", "Мистър Зелен 2", "3,50", "330", ""],
["", "mistr-obicham-go", "Мистър Обичам го", "3,50", "330", ""],
["", "mistr-rozov", "Мистър Розов", "3,50", "330", ""],
["", "mistr-beri", "Мистър Бери", "3,50", "330", ""],
["", "mistr-boss", "Мистър BOSS", "2,80", "330", ""],
["", "mistr-detoks", "Мистър Детокс", "3,50", "330", ""],
["", "mistr-khavaj", "Мистър Хавай", "3,50", "330", ""],
["", "bananov-shejk-s-pryasno-mlyako-i-yagodi", "Бананов шейк с прясно мляко и ягоди", "3,50", "330", ""]

            ],

            "Мюсли Закуски": [
                ["", "kiselo-mlyako-myusli-yablka-banan-i-portokal", "Кисело мляко, мюсли, ябълка, банан и портокал", "1,40", "", ""],
["", "plodova-salata", "Плодова салата", "3,50", "400", ""]

            ],

            "additives": [
                ["", "dzhindzhifil", "Джинджифил", "0,00", "", ""],
["", "maka", "Мака", "0,00", "3", ""],
["", "spirulina", "Спирулина", "0,00", "3", ""],
["", "czelina", "Целина", "0,70", "", ""]

            ]
        }', 
        'slug' => 'fresh-bar-mr-blend',
        'business_name' => 'Fresh Bar Mr. Blend',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'бул. 25-ти Септември 13',
        'address_additional' => '',
        'coords_x' => '43.56663584',
        'coords_y' => '27.83067917',
        'phone' => '+359887000214',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "paket-pile", "Пакет Пиле", "8,40", "", ""],
["", "paket-butcheta", "Пакет Бутчета", "9,10", "", ""],
["", "paket-przholi", "Пакет Пържоли", "11,20", "", ""],
["", "paket-krilcza", "Пакет Крилца", "7,00", "", ""]

            ],

            "Скара и Грил": [
                ["", "kebapcheta", "Кебапчета", "3,50", "", ""],
["", "kyufteta", "Кюфтета", "3,50", "", ""],
["", "shishcheta", "Шишчета", "4,20", "", ""],
["", "pile-na-gril", "Пиле на грил", "7,00", "", ""],
["", "2br-pile-na-gril", "2бр пиле на грил", "13,30", "", ""],
["", "butche-na-gril", "Бутче на грил", "2,10", "", ""],
["", "panirani-krilcza", "Панирани крилца", "0,00", "", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "1,40", "200", ""],
["", "kashkaval-pane", "Кашкавал пане", "3,50", "250", ""],
["", "pileshki-prchiczi-ss-susam", "Пилешки пръчици със сусам", "2,80", "250", ""],
["", "trtki-na-shish", "Трътки на шиш", "0,70", "100", ""],
["", "khrupkavi-przheni-kartofki", "Хрупкави пържени картофки", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "svinska-vratna-przhola-na-skara", "Свинска вратна пържола на скара", "2,80", "", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "", ""],
["", "rebrcza-na-skara", "Ребърца на скара", "1,40", "100", ""],
["", "karnache", "Карначе", "0,70", "", ""],
["", "khlebche", "Хлебче", "0,00", "", ""],
["", "paket-pile", "Пакет Пиле", "11,20", "", ""],
["", "paket-butcheta", "Пакет Бутчета", "11,90", "", ""],
["", "paket-krilcza", "Пакет Крилца", "9,80", "", ""],
["", "paket-przholi", "Пакет Пържоли", "14,70", "", ""]

            ],

            "Хамбургери": [
                ["", "khamburger-s-butche", "Хамбургер с бутче", "2,10", "", ""],
["", "khamburger-s-kebapche", "Хамбургер с кебапче", "0,70", "", ""],
["", "khamburger-s-kyufte", "Хамбургер с кюфте", "0,70", "", ""],
["", "khamburger-ss-shishche", "Хамбургер със шишче", "1,40", "", ""],
["", "khamburger-s-karnache", "Хамбургер с карначе", "1,40", "", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "30", ""],
["", "majoneza", "Майонеза", "0,00", "30", ""],
["", "gorchicza", "Горчица", "0,00", "30", ""],
["", "sladko-chili", "Сладко чили", "0,70", "50", ""],
["", "barbekyu", "Барбекю", "0,00", "50", ""],
["", "chesnov", "Чеснов", "0,00", "50", ""]

            ],

            "drinks": [
                ["", "kuins-portokal", "Куинс Портокал", "0,70", "200", ""],
["", "mineralna-voda-velena", "Минерална вода Велена", "0,00", "", ""],
["", "pirinsko", "Пиринско", "0,70", "500", ""],
["", "astika", "Астика", "1,40", "", ""],
["", "shumensko", "Шуменско", "1,40", "", ""]

            ]
        }', 
        'slug' => 'pile-na-gril-royal-chicken',
        'business_name' => 'Пиле на грил Royal Chicken',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'ул. Васил Левски 26',
        'address_additional' => '',
        'coords_x' => '43.56886836',
        'coords_y' => '27.82214766',
        'phone' => '+359895758821',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "balkanska", "Балканска", "4,90", "", ""],
["", "barbekyu", "Барбекю", "4,90", "", ""],
["", "boloneze", "Болонезе", "4,90", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "evita", "Евита", "4,20", "", ""],
["", "kalabreze", "Калабрезе", "4,90", "", ""],
["", "kalczone", "Калцоне", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "karbonara", "Карбонара", "4,90", "", ""],
["", "krabi", "Краби", "4,90", "", ""],
["", "kuatro-formadzhi-bianko", "Куатро Формаджи Бианко", "4,90", "", ""],
["", "kuatro-formadzhi-roso", "Куатро Формаджи Росо", "4,90", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "nemo", "Немо", "5,60", "", ""],
["", "peperoni", "Пеперони", "4,20", "", ""],
["", "pesto", "Песто", "4,20", "", ""],
["", "proshuto-i-maskarpone", "Прошуто и маскарпоне", "5,60", "", ""],
["", "proshuto-i-rukola", "Прошуто и рукола", "5,60", "", ""],
["", "salami", "Салами", "4,20", "", ""],
["", "san-vinchenczo", "Сан Винченцо", "4,90", "", ""],
["", "toskana", "Тоскана", "4,90", "", ""],
["", "tuna", "Туна", "4,90", "", ""],
["", "chetiri-sezona", "Четири сезона", "4,90", "", ""],
["", "chikn", "Чикън", "4,90", "", ""]

            ],

            "Добруджански катми": [
                ["", "banan-i-shokolad", "Банан и шоколад", "2,10", "320", ""],
["", "bekon-topeno-sirene-i-kashkaval", "Бекон, топено сирене и кашкавал", "2,80", "300", ""],
["", "biskviti-i-shokolad", "Бисквити и шоколад", "2,10", "310", ""],
["", "byal-i-kafyav-shokolad", "Бял и кафяв шоколад", "1,40", "260", ""],
["", "domashen-naturalen-med", "Домашен натурален мед", "1,40", "260", ""],
["", "konfityur", "Конфитюр", "1,40", "260", ""],
["", "konfityur-i-sirene", "Конфитюр и сирене", "2,10", "280", ""],
["", "lukanka-kashkaval-i-topeno-sirene", "Луканка кашкавал и топено сирене", "2,80", "300", ""],
["", "med-i-orekhi", "Мед и орехи", "2,10", "270", ""],
["", "pileshko-file-topeno-sirene-i-kashkaval", "Пилешко филе, топено сирене и кашкавал", "2,80", "300", ""],
["", "sirene-i-kashkaval", "Сирене и кашкавал", "2,10", "280", ""],
["", "shunka-kashkaval-i-topeno-sirene", "Шунка кашкавал и топено сирене", "2,80", "300", ""],
["", "shunka-topeno-sirene-i-kashkaval", "Шунка, топено сирене и кашкавал", "2,80", "300", ""]

            ],

            "sauces": [
                ["", "barbekyu", "Барбекю", "0,70", "50", ""],
["", "gorchicza", "Горчица", "0,70", "50", ""],
["", "ketchup", "Кетчуп", "0,70", "50", ""],
["", "leka-majoneza", "Лека майонеза", "0,70", "50", ""],
["", "medena-gorchicza", "Медена горчица", "0,70", "50", ""],
["", "pesto", "Песто", "0,70", "30", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "chili", "Чили", "0,70", "50", ""]

            ],

            "additives": [
                ["", "bekon", "Бекон", "0,00", "30", ""],
["", "gbi", "Гъби", "0,00", "30", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "30", ""],
["", "luk", "Лук", "0,00", "30", ""],
["", "lukanka", "Луканка", "0,70", "30", ""],
["", "maslini", "Маслини", "0,00", "30", ""],
["", "moczarela", "Моцарела", "0,00", "50", ""],
["", "pileshko-file", "Пилешко филе", "0,00", "30", ""],
["", "presen-piper", "Пресен пипер", "0,00", "30", ""],
["", "proshuto-krudo", "Прошуто крудо", "0,70", "30", ""],
["", "pusheno-svinsko-file", "Пушено свинско филе", "0,00", "30", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "30", ""],
["", "sudzhuk", "Суджук", "0,70", "30", ""],
["", "topeno-sirene", "Топено сирене", "0,70", "30", ""],
["", "czarevicza", "Царевица", "0,00", "30", ""],
["", "chedr", "Чедър", "0,70", "30", ""],
["", "chorizo", "Чоризо", "0,70", "30", ""],
["", "shunka", "Шунка", "0,00", "30", ""]

            ],

            "Домашен хляб": [
                ["", "domashno-prigotvena-prlenka-s-kashkaval", "Домашно приготвена пърленка с кашкавал", "1,40", "220", ""],
["", "domashno-prigotvena-prlenka-s-shunka-i-kashkaval", "Домашно приготвена пърленка с шунка и кашкавал", "1,40", "260", ""],
["", "domashno-prigotvena-prlenka-ss-sirene", "Домашно приготвена пърленка със сирене", "0,70", "220", ""],
["", "domashno-prigotvena-prlenka-ss-sirene-i-kashkaval", "Домашно приготвена пърленка със сирене и кашкавал", "1,40", "260", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/844835.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "1.5", "https://images.deliveryhero.io/image/fd-bg/Products/844838.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/844836.jpg?width=302"]

            ],

            "beer": [
                ["", "pirinsko", "Пиринско", "2,80", "", ""]

            ]
        }', 
        'slug' => 'pizza-italy',
        'business_name' => 'Pizza Italy',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'бул.Трети Март 2',
        'address_additional' => '',
        'coords_x' => '43.56493961',
        'coords_y' => '27.83101992',
        'phone' => '+359894232121; +359888878788',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "selska-salata", "Селска салата", "3,50", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "400", ""],
["", "salata-snezhanka", "Салата Снежанка", "2,80", "170", ""],
["", "salata-fantaziya", "Салата Фантазия", "3,50", "350", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "300", ""],
["", "domati-s-moczarela", "Домати с моцарела", "3,50", "300", ""]

            ],

            "pizza": [
                ["", "picza-vegetariana", "Пица Вегетариана", "4,20", "560", ""],
["", "picza-diablo", "Пица Диабло", "4,90", "560", ""],
["", "picza-kalczone", "Пица Калцоне", "4,90", "560", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,90", "560", ""],
["", "picza-kuatro-formadzhi", "Пица Куатро формаджи", "4,90", "560", ""],
["", "picza-kreola", "Пица Креола", "4,90", "560", ""],
["", "picza-margarita", "Пица Маргарита", "4,20", "560", ""],
["", "picza-proshuto", "Пица Прошуто", "4,90", "560", ""],
["", "picza-s-bekon", "Пица с бекон", "4,90", "560", ""],
["", "picza-s-lukankov-salam", "Пица с луканков салам", "4,90", "560", ""],
["", "picza-s-pileshko", "Пица с пилешко", "4,90", "560", ""],
["", "picza-chetiri-sezona", "Пица Четири сезона", "4,90", "560", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "120", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "120", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "120", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "120", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "12", ""],
["", "gorchicza", "Горчица", "0,00", "12", ""],
["", "majoneza", "Майонеза", "0,00", "12", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "80", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "80", ""],
["", "chili-sos", "Чили сос", "0,00", "80", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "80", ""]

            ],

            "Топли предястия": [
                ["", "agneshka-glavichka-obezkostena", "Агнешка главичка обезкостена", "4,90", "350", ""],
["", "teleshko-shkembe-lajf", "Телешко шкембе Лайф", "4,20", "250", ""],
["", "drobcheta-v-maslo", "Дробчета в масло", "3,50", "200", ""],
["", "ezik-v-maslo", "Език в масло", "3,50", "150", ""],
["", "pileshki-srcza-v-maslo", "Пилешки сърца в масло", "3,50", "150", ""],
["", "pateshki-srcza-v-maslo", "Патешки сърца в масло", "4,20", "150", ""],
["", "pateshki-srcza-na-skara", "Патешки сърца на скара", "4,20", "150", ""],
["", "pikantni-drobcheta-s-gbi-i-kashkaval", "Пикантни дробчета с гъби и кашкавал", "4,20", "250", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,10", "150", ""],
["", "pileshki-prchki", "Пилешки пръчки", "4,20", "200", ""],
["", "vlche-plato", "Вълче плато", "4,90", "300", ""],
["", "topeni-sirencza-s-kornflejks", "Топени сиренца с корнфлейкс", "4,20", "250", ""]

            ],

            "fish": [
                ["", "somga-kotlet-na-skara", "Сьомга котлет на скара", "9,80", "200", ""],
["", "kalmari-pane", "Калмари пане", "4,90", "200", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "5,60", "250", ""],
["", "skumriya-na-skara", "Скумрия на скара", "4,90", "250", ""],
["", "lavrak-na-skara", "Лаврак на скара", "9,10", "250", ""],
["", "czipura-na-skara", "Ципура на скара", "8,40", "250", ""]

            ],

            "Постни ястия": [
                ["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,80", "350", ""]

            ],

            "pasta": [
                ["", "s-domaten-sos-i-kashkaval", "С доматен сос и кашкавал", "2,10", "450", ""],
["", "spageti-karbonara", "Спагети Карбонара", "2,80", "450", ""],
["", "spageti-boloneze", "Спагети Болонезе", "2,80", "450", ""]

            ],

            "Пилешко": [
                ["", "pileshko-shishche", "Пилешко шишче", "1,40", "80", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,90", "200", ""],
["", "pileshko-file-s-gbi", "Пилешко филе с гъби", "5,60", "250", ""],
["", "pileshki-zhulien", "Пилешки Жулиен", "4,90", "350", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "250", ""],
["", "pileshki-shish-s-bekon", "Пилешки шиш с бекон", "2,80", "110", ""],
["", "pileshka-przhola-na-tigan", "Пилешка пържола на тиган", "4,90", "270", ""]

            ],

            "pork": [
                ["", "svinski-rebra", "Свински ребра", "4,90", "250", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "svinsko-kare", "Свинско каре", "2,10", "100", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "200", ""],
["", "svinsko-bon-file-s-gbi", "Свинско бон филе с гъби", "6,30", "250", ""],
["", "vlchi-khapki", "Вълчи хапки", "6,30", "250", ""],
["", "svinski-dzholan-na-peshh", "Свински джолан на пещ", "5,60", "300", ""]

            ],

            "sachs": [
                ["", "kombiniran-sach", "Комбиниран сач", "10,50", "550", ""],
["", "pileshka-przhola-na-sach", "Пилешка пържола на сач", "6,30", "400", ""],
["", "khajdushki-sach", "Хайдушки сач", "13,30", "1000", ""]

            ],

            "garnish": [
                ["", "domashni-przheni-kartofi", "Домашни пържени картофи", "2,80", "220", ""],
["", "domashni-przheni-kartofi-ss-sirene", "Домашни пържени картофи със сирене", "3,50", "250", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "180", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "250", ""],
["", "selski-kartofi", "Селски картофи", "2,10", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "100", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "180", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "150", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,10", "180", ""]

            ]
        }', 
        'slug' => 'restorant-life',
        'business_name' => 'Ресторант Life',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'Градски парк Свети Георги',
        'address_additional' => '',
        'coords_x' => '43.56436508',
        'coords_y' => '27.82935852',
        'phone' => '+359888422161',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "malk-dyuner", "Малък дюнер", "1,40", "250", ""],
["", "sreden-dyuner", "Среден дюнер", "2,10", "350", ""],
["", "golyam-dyuner", "Голям дюнер", "2,80", "400", ""],
["", "dyuner-boks", "Дюнер бокс", "2,10", "300", ""]

            ],

            "pizza": [
                ["", "maksi", "Макси", "2,80", "", ""],
["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "vegan", "Веган", "2,80", "", ""],
["", "prlenka", "Пърленка", "2,10", "300", ""]

            ],

            "sauces": [
                ["", "chili", "Чили", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""]

            ],

            "salads": [
                ["", "shopska-salata", "Шопска салата", "2,10", "300", ""],
["", "meksikanska-salata", "Мексиканска салата", "2,80", "400", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", ""]

            ],

            "Безалкохолни напитки": [
                ["", "gazirani-napitki-parti", "Газирани напитки Парти", "0,00", "500", ""],
["", "ajryan", "Айрян", "0,00", "", ""]

            ]
        }', 
        'slug' => 'pica-kadem',
        'business_name' => 'Пица Кадем',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'ул. Отец Паисий 34',
        'address_additional' => '',
        'coords_x' => '43.569054',
        'coords_y' => '27.833699',
        'phone' => '+359887139775',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
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
            
            "grill": [
                ["", "svinsko-shishche", "Свинско шишче", "1,40", "120", ""],
["", "pikantno-kyufte", "Пикантно кюфте", "0,70", "90", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""]

            ],

            "dunners": [
                ["", "malka-porcziya-dyuner", "Малка порция дюнер", "2,80", "", ""],
["", "malk-dyuner", "Малък дюнер", "1,40", "150", ""],
["", "golyam-dyuner", "Голям дюнер", "2,80", "380", ""],
["", "golyama-porcziya-dyuner", "Голяма порция дюнер", "3,50", "", ""],
["", "sreden-dyuner", "Среден дюнер", "2,10", "280", ""]

            ],

            "burgers": [
                ["", "teleshki-burger", "Телешки бургер", "2,80", "280", ""],
["", "svinski-burger", "Свински бургер", "2,80", "280", ""]

            ],

            "Комбо меню": [
                ["", "2br-kyufteta-s-malki-kartofki", "(2бр) Кюфтета с малки картофки", "2,10", "", ""],
["", "2br-kebapcheta-s-malki-kartofki", "(2бр) Кебапчета с малки картофки", "2,10", "", ""],
["", "10br-kebapcheta", "(10бр) Кебапчета", "8,40", "", ""],
["", "10br-kyufteta", "(10бр) Кюфтета", "8,40", "", ""]

            ],

            "Добавки и сосове": [
                ["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "gorchicza", "Горчица", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "przheni-kartofki", "Пържени картофки", "0,70", "150", ""],
["", "khlebche", "Хлебче", "0,00", "100", ""],
["", "chili-sos", "Чили сос", "0,00", "", ""],
["", "barbekyu-sos", "Барбекю сос", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", ""],
["", "fanta-grozde", "Fanta Грозде", "0,70", "500", ""],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", ""]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "0,00", "500", ""],
["", "mineralna-voda", "Минерална вода", "0,70", "1500", ""],
["", "soda", "Сода", "0,70", "", ""]

            ]
        }', 
        'slug' => 'la-skara-dobrich',
        'business_name' => 'La skara (Dobrich)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9302',
        'address' => 'бул. 25 Септември 8',
        'address_additional' => '',
        'coords_x' => '43.54917534',
        'coords_y' => '27.82538293',
        'phone' => '+359892788789',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "khot-dog-s-kebapche", "Хот дог с кебапче", "0,70", "", ""],
["", "khot-dog-s-kebapche-i-malki-kartofki", "Хот дог с кебапче и малки картофки", "1,40", "", ""],
["", "3-broya-kebapcheta-kartofki-khlebche-sos", "3 броя кебапчета, картофки, хлебче, сос", "3,50", "", ""],
["", "3-broya-kyufteta-kartofki-khlebche-sos", "3 броя кюфтета, картофки, хлебче, сос", "3,50", "", ""],
["", "khot-dog-s-krenvirsh", "Хот дог с кренвирш", "1,40", "", ""],
["", "kebapche", "Кебапче", "6,30", "", ""],
["", "kyufte", "Кюфте", "6,30", "", ""],
["", "meshana-skara", "Мешана скара", "4,90", "", ""],
["", "test", "test", "3,50", "", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "60", ""],
["", "kyufte", "Кюфте", "0,70", "60", ""],
["", "klczana-nadenichka", "Кълцана наденичка", "0,70", "100", ""],
["", "domashen-sudzhuk", "Домашен суджук", "1,40", "120", ""],
["", "svinska-przhola", "Свинска пържола", "1,40", "100", ""],
["", "rebrcza", "Ребърца", "1,40", "100", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""]

            ],

            "sauces": [
                ["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "lyutenicza", "Лютеница", "0,00", "", ""],
["", "gorchicza", "Горчица", "0,00", "", ""],
["", "chili", "Чили", "0,00", "", ""],
["", "barbekyu", "Барбекю", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "", ""]

            ],

            "garnish": [
                ["", "kartofki", "Картофки", "0,70", "150", ""],
["", "ruska-salata", "Руска салата", "2,10", "250", ""],
["", "mlechna-salata", "Млечна салата", "2,10", "250", ""],
["", "khlebche", "Хлебче", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/836614.jpg?width=302"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/836615.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/836616.jpg?width=302"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/836617.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/836618.jpg?width=302"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/836619.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/836621.jpg?width=302"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/836622.jpg?width=302"]

            ],

            "drinks": [
                ["", "kamenicza-ken", "Каменица кен", "0,70", "500", ""],
["", "astika-ken", "Астика кен", "0,70", "500", ""],
["", "burgasko-ken", "Бургаско кен", "0,70", "500", ""],
["", "staropramen-ken", "Старопрамен кен", "1,40", "500", ""],
["", "beks-ken", "Бекс кен", "2,10", "500", ""],
["", "gazirana-voda", "Газирана вода", "0,70", "500", ""],
["", "ajryan", "Айрян", "0,00", "250", ""],
["", "energijna-napitka-predator", "Енергийна напитка Predator", "0,70", "250", ""]

            ]
        }', 
        'slug' => 'blgarska-skara',
        'business_name' => 'Българска скара',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Dobrich',
        'region' => 'Dobrich',
        'postal_code' => '9300',
        'address' => 'ул. „Дунав“ 24',
        'address_additional' => '',
        'coords_x' => '43.56497287',
        'coords_y' => '27.83940356',
        'phone' => '+359888869699; +359876644488',
        'email' => '',
        'website' => '',
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
