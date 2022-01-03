<?php

use Carbon\Carbon;

$restaurants = [

    [
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "salads": [
                ["", "shopska-350gr", "Шопска (350гр)", "2,10", "", ""],
["", "ovcharska-450gr", "Овчарска (450гр)", "2,80", "", ""],
["", "vareni-kartofi-200gr", "Варени картофи (200гр)", "0,70", "", ""]

            ],

            "soups": [
                ["", "shkembe", "Шкембе", "1,40", "", ""],
["", "pileshka", "Пилешка", "1,40", "", ""],
["", "topcheta", "Топчета", "1,40", "", ""],
["", "agneshka", "Агнешка", "1,40", "", ""],
["", "tarator", "Таратор", "0,70", "", ""]

            ],

            "Ястия от свинско": [
                ["", "svinsko-s-zryal-bob", "Свинско с зрял боб", "2,80", "", ""]

            ],

            "Ястия от кайма": [
                ["", "kyufteta-po-selski-s-cherven-sos", "Кюфтета по селски с червен сос", "2,10", "500", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "2,80", "250", ""],
["", "balkanska-klczana-nadenicza", "Балканска кълцана наденица", "0,70", "100", ""],
["", "plneneno-kyufte-s-shunka-i-kashkaval", "Пълненено кюфте с шунка и кашкавал", "2,10", "300", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "2,10", "250", ""]

            ],

            "garnish": [
                ["", "presni-przheni-kartofi", "Пресни Пържени картофи", "0,70", "150", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "domati-i-krastavicza", "Домати и краставица", "0,70", "200", ""],
["", "domati", "Домати", "0,70", "200", ""],
["", "krasaviczi", "Красавици", "0,70", "200", ""],
["", "zele-s-morkovi", "Зеле с моркови", "0,70", "200", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta", "Бисквитена торта", "0,70", "", ""],
["", "shokoladov-gris", "Шоколадов грис", "0,70", "", ""]

            ],

            "Хляб и други": [
                ["", "khlyab-byal", "Хляб бял", "0,00", "", ""],
["", "pribori", "Прибори", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/947391.jpg"]

            ],

            "drinks": [
                ["", "mineralna-voda-gorna-banya", "Минерална вода Горна баня", "0,00", "", ""],
["", "limonada-bbb", "Лимонада БББ", "0,70", "500", ""],
["", "oranzhada-bbb", "Оранжада БББ", "0,70", "500", ""],
["", "gorski-plodove-bbb", "Горски плодове БББ", "0,70", "500", ""],
["", "etr-bbb", "Етър БББ", "0,70", "500", ""],
["", "czitronada", "Цитронада", "0,70", "500", ""],
["", "studen-chaj-praskova-bbb", "Студен чай праскова БББ", "0,70", "", ""],
["", "ajran-balkan", "Айран Балкан", "0,70", "", ""]

            ]
        }', 
        'slug' => 'kaminkata',
        'business_name' => 'Каминката',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Козлуджа 3',
        'address_additional' => '',
        'coords_x' => '43.07676238',
        'coords_y' => '25.59663626',
        'phone' => '+359898520858',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-czezar", "Салата Цезар", "4,90", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "4,20", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "350", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "350", ""],
["", "miks-zeleni-salati-s-cheri--sino-sirene-i-limonov-dresing", "Микс зелени салати  с чери , синьо сирене и лимонов дресинг", "4,20", "300", ""],
["", "salata-kitajsko-zele", "Салата китайско зеле", "3,50", "300", ""],
["", "presen-spanak-s-ananas-nar-i-dresing", "Пресен спанак с ананас, нар и дресинг", "4,20", "300", ""],
["", "salata-pechen-patladzhan-s-orekhi-i-bosilekovo-pesto", "Салата печен патладжан с орехи и босилеково песто", "4,20", "300", ""],
["", "svezha-salata-proshuto", "Свежа салата Прошуто", "4,90", "300", ""],
["", "pikanten-katk-s-pileshko-file", "Пикантен катък с пилешко филе", "4,20", "300", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "0,70", "250", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "250", ""]

            ],

            "starters": [
                ["", "pileshki-filencza-s-kornflejks--susam", "Пилешки филенца с корнфлейкс / сусам", "4,20", "250", ""],
["", "mini-moczarelki-s-kornflejks", "Мини моцарелки с корнфлейкс", "4,20", "250", ""],
["", "topeni-sirencza-s-konfityur", "Топени сиренца с конфитюр", "4,20", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "panirani-brokoli-s-mlechen-sos", "Панирани броколи с млечен сос", "3,50", "250", ""],
["", "plneni-gbi-s-bekon-chesn-sino-sirene-i-kashkaval", "Пълнени гъби с бекон, чесън, синьо сирене и кашкавал", "4,20", "250", ""],
["", "khrupkavi-mini-butcheta-s-bbq-sos", "Хрупкави мини бутчета с BBQ сос", "4,20", "250", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "2,80", "300", ""]

            ],

            "pizza": [
                ["", "picza-sezoni", "Пица Сезони", "4,90", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "kuatro", "Куатро", "4,20", "", ""],
["", "tropikana", "Тропикана", "4,20", "", ""],
["", "primavera", "Примавера", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "meksikana", "Мексикана", "4,90", "", ""],
["", "czezar", "Цезар", "4,20", "", ""],
["", "brokoli", "Броколи", "4,20", "", ""],
["", "chorizo", "Чоризо", "4,90", "", ""]

            ],

            "risotto": [
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "300", ""],
["", "rizoto-s-pile", "Ризото с пиле", "4,90", "300", ""]

            ],

            "Гювечета": [
                ["", "gyuveche-s-pileshko", "Гювече с пилешко", "4,90", "400", ""],
["", "gyuveche-ss-svinsko", "Гювече със свинско", "4,90", "400", ""]

            ],

            "maindishes": [
                ["", "bilkovi-pileshki-filencza-s-karamelizirani-kartofki", "Билкови пилешки филенца с карамелизирани картофки", "4,20", "250", ""],
["", "zadusheno-pile-s-portokal", "Задушено пиле с портокал", "4,20", "300", ""],
["", "vienski-shniczel-s-khrupkavi-morkovcheta", "Виенски шницел с хрупкави морковчета", "5,60", "300", ""],
["", "svinsko-po-kasapski-podneseno-s-prlenka", "Свинско по касапски поднесено с пърленка", "6,30", "400", ""],
["", "vlchi-khapki-s-kartofi-sote", "Вълчи хапки с картофи соте", "5,60", "350", ""]

            ],

            "barbecue": [
                ["", "pileshko-shishche-s-ananas", "Пилешко шишче с ананас", "2,10", "100", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "100", ""],
["", "sudzhuk-na-skara-s-kartofki-i-lyutenicza", "Суджук на скара с картофки и лютеница", "4,20", "300", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "200", ""],
["", "pileshka-przhola-ot-file", "Пилешка пържола от филе", "4,90", "200", ""],
["", "svinski-rebra-v-meden-sos", "Свински ребра в меден сос", "6,30", "350", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "200", ""],
["", "teleshko-kyufte-s-karamelizirani-kartofki", "Телешко кюфте с карамелизирани картофки", "3,50", "200", ""],
["", "miks-sezoni", "Микс Сезони", "10,50", "550", ""],
["", "shashlik", "Шашлик", "7,70", "400", ""]

            ],

            "sachs": [
                ["", "sach-sezoni", "Сач Сезони", "8,40", "600", ""],
["", "pileshki-sach", "Пилешки сач", "6,30", "450", ""],
["", "svinski-sach", "Свински сач", "6,30", "450", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-brokoli-i-sirena", "Запеканка с броколи и сирена", "4,20", "300", ""],
["", "zapekanka-s-pileshko", "Запеканка с пилешко", "4,20", "350", ""],
["", "zapekanka-sezoni", "Запеканка Сезони", "4,20", "350", ""]

            ],

            "garnish": [
                ["", "domati-i-krastaviczi", "Домати и краставици", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "100", ""]

            ],

            "Пърленки": [
                ["", "prlenka-s-maslo", "Пърленка с масло", "0,70", "160", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "180", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "200", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "200", ""]

            ],

            "sauces": [
                ["", "mlechen-sos", "Млечен сос", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "", ""],
["", "bbq-sos", "BBQ сос", "0,70", "", ""],
["", "pesto-sos", "Песто сос", "0,70", "", ""],
["", "czezar-sos", "Цезар сос", "0,70", "", ""]

            ],

            "dry-appetizer": [
                ["", "sudzhuk", "Суджук", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,80", "50", ""],
["", "fstczi", "Фъстъци", "0,70", "50", ""],
["", "badem", "Бадем", "2,80", "50", ""]

            ],

            "desserts": [
                ["", "domashna-torta", "Домашна торта", "2,10", "200", ""],
["", "palachinka", "Палачинка", "1,40", "180", ""],
["", "gofreta", "Гофрета", "2,80", "250", ""],
["", "czedeno-mlyako", "Цедено мляко", "2,10", "200", ""]

            ]
        }', 
        'slug' => 'picariya-sezoni',
        'business_name' => 'Пицария Сезони',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5002',
        'address' => 'ул. Никола Габровски 30',
        'address_additional' => '',
        'coords_x' => '43.07556631',
        'coords_y' => '25.62202524',
        'phone' => '+359888539292',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "tarator", "Таратор", "1,40", "", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "tikvichki-s-mlechen-sos", "Тиквички с млечен сос", "2,80", "", ""],
["", "presen-sudzhuk-s-pecheni-kartofi", "Пресен суджук с печени картофи", "4,20", "", ""],
["", "grczka-musaka", "Гръцка мусака", "4,20", "", ""],
["", "siropirana-banicza-s-lokum", "Сиропирана баница с локум", "1,40", "", ""],
["", "domashna-biskvitena-torta-s-byal-shokolad-i-maskarpone", "Домашна бисквитена торта с бял шоколад и маскарпоне", "2,10", "", ""]

            ],

            "salads": [
                ["", "tradiczionna-shopska-salata", "Традиционна шопска салата", "4,20", "", ""],
["", "grczka-salata-khoriatiki", "Гръцка салата Хориатики", "6,30", "", ""],
["", "rozov-domat-s-katk-i-pechena-chushka", "Розов домат с катък и печена чушка", "5,60", "", ""],
["", "ovcharska-salata-s-khrupkav-bekon", "Овчарска салата с хрупкав бекон", "6,30", "", ""],
["", "domashno-kopolu-s-chesn-i-roneno-sirene", "Домашно кьополу с чесън и ронено сирене", "4,90", "", ""],
["", "miks-ot-zeleni-salati-s-domashna-majoneza-pileshko-file-i-mandradzhijski-kashkaval", "Микс от зелени салати с домашна майонеза, пилешко филе и мандраджийски кашкавал", "7,00", "", ""],
["", "gridinska-salata", "Гридинска салата", "4,90", "", ""],
["", "trio-razyadki-s-prepechen-khlyab", "Трио разядки с препечен хляб", "4,90", "", ""]

            ],

            "soups": [
                ["", "tarator", "Таратор", "1,40", "", ""],
["", "pileshka-supa", "Пилешка супа", "2,80", "", ""]

            ],

            "Топли предястия": [
                ["", "przheni-chorbadzhijski-chushki-s-krave-sirene-i-khrupkav-khlyab", "Пържени чорбаджийски чушки с краве сирене и хрупкав хляб", "4,90", "", ""],
["", "pileshki-drobcheta-s-luk-i-pechurki", "Пилешки дробчета с лук и печурки", "4,90", "", ""],
["", "omlet-s-khrupkavi-przhki-na-furna", "Омлет с хрупкави пръжки на фурна", "5,60", "", ""],
["", "zadusheni-gorski-gbi-s-kopr-i-chesn", "Задушени горски гъби с копър и чесън", "8,40", "", ""],
["", "domashni-przheni-kartofki-s-kozha", "Домашни пържени картофки с кожа", "3,50", "", ""],
["", "zalenchukovi-kyuftencza-s-kashkaval-i-mlechen-sos", "Заленчукови кюфтенца с кашкавал и млечен сос", "4,20", "", ""],
["", "kachamak-s-roneno-sirene-i-przhki", "Качамак с ронено сирене и пръжки", "4,90", "", ""],
["", "oriz-s-gbi-i-ronena-chubricza", "Ориз с гъби и ронена чубрица", "4,90", "", ""],
["", "tikvichki-s-kiselo-mlyako", "Тиквички с кисело мляко", "4,20", "", ""]

            ],

            "Основни ястия": [
                ["", "bolyarsko-kyufte-s-kartofeno-pyure-i-podluchena-lyutenicza", "Болярско кюфте с картофено пюре и подлучена лютеница", "7,00", "", ""],
["", "bavno-pechen-svinski-vrat-s-bilkovi-kartofi-na-furna-i-pechen-sos", "Бавно печен свински врат с билкови картофи на фурна и печен сос", "12,60", "", ""],
["", "zhareni-svinski-grdi-vrkhu-pechen-luk-i-lyutenicza", "Жарени свински гърди върху печен лук и лютеница", "8,40", "", ""],
["", "pileshko-file-s-maslo-i-rozmarin-vrkhu-kartofeno-pyure", "Пилешко филе с масло и розмарин върху картофено пюре", "7,70", "", ""],
["", "pileshka-przhola-ot-but-khrupkava-panirovka-domashni-przheni-kartofi-i-medeno-gorchichen-sos", "Пилешка пържола от бут хрупкава панировка, домашни пържени картофи и медено-горчичен сос", "8,40", "", ""],
["", "balkanska-pstrva-pechena-s-domati-i-presni-bilki", "Балканска пъстърва печена с домати и пресни билки", "9,10", "", ""],
["", "bolyarski-burger-s-govezhdo-meso-kashkaval-lyutenicza-i-pechen-luk", "Болярски бургер с говеждо месо, кашкавал, лютеница и печен лук", "9,10", "", ""],
["", "lyatna-bolyarska-mandzha-s-chushki-luk-i-sirene", "Лятна болярска манджа с чушки, лук и сирене", "4,90", "", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-zekhtin", "Пърленка със зехтин", "2,10", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "2,10", "", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "2,80", "", ""]

            ],

            "desserts": [
                ["", "bolyarska-katma-s-med-yablki-i-pecheni-orekhi", "Болярска катма с мед, ябълки и печени орехи", "3,50", "", ""],
["", "siropirana-banicza-s-lokum", "Сиропирана баница с локум", "4,20", "", ""],
["", "czedeno-mandradzhijsko-kiselo-mlyako-s-orekhovki", "Цедено мандраджийско кисело мляко с ореховки", "3,50", "", ""]

            ],

            "Вино и бира": [
                ["", "kamenicza", "Каменица", "1,40", "300", ""],
["", "beks-bezalkokholna", "Бекс безалкохолна", "2,10", "330", ""],
["", "kyuve---sovinon-blan", "Кюве - Совиньон блан", "18,20", "750", ""],
["", "shardone-zlatni-rcze", "Шардоне Златни ръце", "21,00", "750", ""],
["", "asamblazh---kaberne", "Асамблаж - Каберне", "17,50", "750", ""],
["", "asamblazh---pamid", "Асамблаж - Памид", "17,50", "750", ""],
["", "asamblazh---rubin", "Асамблаж - Рубин", "17,50", "750", ""],
["", "rubin-rezerva", "Рубин Резерва", "35,00", "750", ""],
["", "pino-nuar", "Пино Нуар", "28,00", "750", ""],
["", "mavrud-asenovgrad---ikona", "Мавруд Асеновград - икона", "15,40", "750", ""],
["", "merlo-enira", "Мерло Енира", "18,90", "750", ""],
["", "starosel---merlo", "Старосел - Мерло", "17,50", "750", ""]

            ]
        }', 
        'slug' => 'mehana-gurko',
        'business_name' => 'Механа Гурко',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул.Генерал Гурко 33',
        'address_additional' => '',
        'coords_x' => '43.0842758',
        'coords_y' => '25.6367991',
        'phone' => '+359888279494',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "svezha-zelena-salata", "Свежа зелена салата", "3,50", "400", ""],
["", "tarator-v-khalba", "Таратор в халба", "1,40", "330", ""],
["", "kolslo", "Колсло", "3,50", "400", ""],
["", "shopska", "Шопска", "3,50", "450", ""],
["", "kapreze", "Капрезе", "4,20", "400", ""]

            ],

            "Към Бирата": [
                ["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "300", ""],
["", "przhena-czacza", "Пържена цаца", "2,80", "250", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,90", "300", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,80", "350", ""],
["", "lucheni-krgcheta", "Лучени кръгчета", "1,40", "250", ""]

            ],

            "Тако": [
                ["", "tako-ss-svinsko", "Тако със свинско", "7,70", "450", ""],
["", "tako-s-pile", "Тако с пиле", "6,30", "450", ""],
["", "tago-vegi", "Таго Веги", "4,90", "400", ""]

            ],

            "grill": [
                ["", "svinska-przhola-vrat", "Свинска пържола врат", "6,30", "300", ""],
["", "kyufte", "Кюфте", "1,40", "120", ""],
["", "pileshka-przhola-but", "Пилешка пържола бут", "4,90", "300", ""]

            ],

            "fish": [
                ["", "pstrva-na-skara", "Пъстърва на скара", "7,00", "300", ""],
["", "skumriya-na-skara", "Скумрия на скара", "5,60", "300", ""]

            ],

            "sauces": [
                ["", "guakamole", "Гуакамоле", "0,70", "50", ""],
["", "lyut", "Лют", "0,70", "50", ""],
["", "tartar", "Тартар", "0,70", "50", ""],
["", "mlechen-chesnov", "Млечен чеснов", "0,70", "50", ""]

            ],

            "drinks": [
                ["", "korona", "Корона", "3,50", "330", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "beks-bezalkokholna", "Бекс безалкохолна", "1,40", "330", ""],
["", "redenberg", "Реденберг", "2,10", "330", ""],
["", "lefe", "Лефе", "3,50", "330", ""]

            ]
        }', 
        'slug' => 'maximus-summer-garden',
        'business_name' => 'Maximus Summer Garden',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Княз Дондуков-Корсаков 2-6',
        'address_additional' => '',
        'coords_x' => '43.08390282',
        'coords_y' => '25.63434771',
        'phone' => '+359889008234',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "2,80", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "salata-vitamina", "Салата Витамина", "2,80", "300", ""],
["", "salata-eksperiment", "Салата Експеримент", "3,50", "400", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "350", ""],
["", "selska-salata", "Селска салата", "3,50", "350", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""]

            ],

            "starters": [
                ["", "brusketi-eksperiment", "Брускети Експеримент", "2,80", "200", ""],
["", "brusketi-primavera", "Брускети Примавера", "2,80", "200", ""],
["", "brusketi-s-proshuto-krudo", "Брускети с прошуто Крудо", "3,50", "200", ""],
["", "gbi-v-maslo-i-soev-sos-na-tigan", "Гъби в масло и соев сос на тиган", "2,80", "250", ""],
["", "domashen-kartofen-chips", "Домашен картофен чипс", "1,40", "200", ""],
["", "miks-sirena", "Микс сирена", "3,50", "200", ""],
["", "palachinka-s-shunka", "Палачинка с шунка", "2,10", "", ""],
["", "panirani-kashkavalcheta-s-mlechen-sos", "Панирани кашкавалчета с млечен сос", "3,50", "250", ""],
["", "miks-sukhi-kolbasi", "Микс сухи колбаси", "3,50", "100", ""],
["", "panirani-lucheni-krgcheta", "Панирани лучени кръгчета", "2,10", "250", ""],
["", "panirani-maslini", "Панирани маслини", "3,50", "250", ""],
["", "pileshki-drobcheta-s-luk-na-tigan", "Пилешки дробчета с лук на тиган", "2,80", "300", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "300", ""],
["", "pileshki-srcza-v-soev-sos-na-tigan", "Пилешки сърца в соев сос на тиган", "3,50", "200", ""],
["", "panirani-sirencza", "Панирани сиренца", "2,80", "250", ""],
["", "pileshki-filenczas-kornflejks-i-sos-tartar", "Пилешки филенцас корнфлейкс и сос Тартар", "3,50", "250", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "3,50", "250", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "1,40", "200", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "250", ""],
["", "przhena-czacza-v-czarevichno-brashno", "Пържена цаца в царевично брашно", "2,80", "200", ""],
["", "topeni-sirencza-v-khrupkava-panirovka", "Топени сиренца в хрупкава панировка", "3,50", "250", ""],
["", "chips-ot-tikvichki-s-mlechen-sos", "Чипс от тиквички с млечен сос", "3,50", "250", ""]

            ],

            "soups": [
                ["", "domashna-pileshka-supa", "Домашна пилешка супа", "1,40", "300", ""],
["", "shkembe-chorba", "Шкембе чорба", "1,40", "300", ""]

            ],

            "maindishes": [
                ["", "zapekanka-s-bekon", "Запеканка с бекон", "3,50", "400", ""],
["", "zapekanka-s-brokoli", "Запеканка с броколи", "3,50", "400", ""],
["", "zapekanka-s-pileshko", "Запеканка с пилешко", "3,50", "400", ""],
["", "pile-eksperiment", "Пиле Експеримент", "4,20", "300", ""],
["", "pile-polo", "Пиле Поло", "4,20", "300", ""],
["", "teksaski-burger", "Тексаски бургер", "4,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/1091452.jpg"],
["", "shniczel-po-vienski", "Шницел по виенски", "4,90", "350", ""]

            ],

            "Скара - Тиган": [
                ["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "200", "https://images.deliveryhero.io/image/fd-bg/Products/1091437.jpg"],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pleskavicza", "Плескавица", "3,50", "200", ""],
["", "porcziya-kebapcheta", "Порция кебапчета", "2,80", "", ""],
["", "porcziya-kyufteta", "Порция кюфтета", "2,80", "", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "200", ""],
["", "svinsko-shishche-s-luk-i-chushka", "Свинско шишче с лук и чушка", "2,10", "100", ""],
["", "sudzhuk-na-skara", "Суджук на скара", "4,90", "200", ""]

            ],

            "sauces": [
                ["", "gorchicza", "Горчица", "0,00", "", ""],
["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "majonezen-sos", "Майонезен сос", "0,00", "", ""],
["", "mlechen-sos", "Млечен сос", "0,70", "", ""],
["", "soev-sos", "Соев сос", "0,00", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "", ""],
["", "chili", "Чили", "0,00", "", ""]

            ],

            "bread": [
                ["", "grczka-pitka", "Гръцка питка", "0,70", "", ""],
["", "pechena-filijka-s-podpravki", "Печена филийка с подправки", "0,00", "", ""],
["", "pechena-filijka-khlyab", "Печена филийка хляб", "0,00", "", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,70", "100", ""],
["", "domashni-przheni-kartofi", "Домашни пържени картофи", "0,70", "100", ""],
["", "zele-i-morkovi", "Зеле и моркови", "0,70", "100", ""],
["", "kartofi-sote", "Картофи соте", "0,70", "150", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "lyutenicza-s-luk", "Лютеница с лук", "0,70", "100", ""]

            ],

            "desserts": [
                ["", "palachinka-s-konfityur", "Палачинка с конфитюр", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "", ""],
["", "palachinka-s-shokolad-banan-i-topka-sladoled", "Палачинка с шоколад, банан и топка сладолед", "2,10", "", ""],
["", "panakota-s-techen-shokolad-nutela", "Панакота с течен шоколад Нутела", "2,10", "200", ""],
["", "torta-eksperiment", "Торта Експеримент", "2,10", "", ""]

            ],

            "drinks": [
                ["", "studen-chaj-san-benedetto", "Студен чай San Benedetto", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'xperiment-bar-and-grill',
        'business_name' => 'Xperiment Bar and Grill',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5004',
        'address' => 'ул. Райна Княгиня 2а',
        'address_additional' => '',
        'coords_x' => '43.06127744',
        'coords_y' => '25.59952209',
        'phone' => '+359893405264',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "svinsko-s-oriz", "Свинско с ориз", "2,80", "400", ""],
["", "pileshko-butche-ss-zele", "Пилешко бутче със зеле", "2,80", "400", ""],
["", "musaka", "Мусака", "2,80", "400", ""],
["", "agneshka-drob-sarma", "Агнешка дроб сарма", "2,80", "400", ""]

            ],

            "salads": [
                ["", "zele", "Зеле", "0,70", "400", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "400", ""],
["", "shopska", "Шопска", "2,10", "400", ""]

            ],

            "soups": [
                ["", "shkembe", "Шкембе", "1,40", "", ""],
["", "pileshka", "Пилешка", "1,40", "", ""],
["", "agneshka", "Агнешка", "1,40", "", ""]

            ],

            "maindishes": [
                ["", "bob-yakhniya", "Боб яхния", "1,40", "400", ""],
["", "przheno-kyufte", "Пържено кюфте", "0,70", "", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""]

            ],

            "burgers": [
                ["", "teleshki-burger", "Телешки бургер", "2,10", "200", ""],
["", "svinski-burger", "Свински бургер", "2,10", "200", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,70", "", ""],
["", "makaroni-na-furna", "Макарони на фурна", "0,70", "", ""],
["", "biskvitena-torta", "Бисквитена торта", "0,70", "", ""],
["", "mlyako-s-oriz", "Мляко с ориз", "0,70", "", ""]

            ]
        }', 
        'slug' => 'kapriz',
        'business_name' => 'Каприз',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Димитър Буйнозов 7',
        'address_additional' => '',
        'coords_x' => '43.0829683',
        'coords_y' => '25.614363',
        'phone' => '+359899165252',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "beleni-domati-s-moczarela-i-sos-pesto", "Белени домати с моцарела и сос песто", "4,20", "", ""],
["", "shopska", "Шопска", "2,80", "", ""],
["", "ovcharska", "Овчарска", "3,50", "", ""],
["", "grczka", "Гръцка", "3,50", "", ""],
["", "pechen-piper-s-chesn-i-kopr", "Печен пипер с чесън и копър", "3,50", "", ""],
["", "zele-i-morkovi", "Зеле и моркови", "2,10", "", ""],
["", "morkovi-s-kopr", "Моркови с копър", "2,80", "", ""],
["", "domashno-kopoolu", "Домашно кьопоолу", "4,20", "", ""],
["", "snezhanka", "Снежанка", "2,80", "", ""],
["", "katk", "Катък", "2,80", "", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,80", "", ""],
["", "proletna-salata-s-riba-ton", "Пролетна салата с риба тон", "4,20", "", ""]

            ],

            "Топли предястия": [
                ["", "sirene-po-shopski", "Сирене по шопски", "2,80", "", ""],
["", "sirene-panirano", "Сирене панирано", "2,80", "", ""],
["", "sirene-v-pergament", "Сирене в пергамент", "2,80", "", ""],
["", "khrupkavi-topeni-sirencza", "Хрупкави топени сиренца", "3,50", "", ""],
["", "paniran-kashkaval", "Паниран кашкавал", "3,50", "", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,80", "", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,90", "", ""],
["", "teleshki-ezik-paniran", "Телешки език паниран", "4,90", "", ""],
["", "rulcza-ot-raczi-pane", "Рулца от раци пане", "3,50", "", ""],
["", "mish-mash", "Миш-маш", "2,80", "", ""],
["", "tikvichki-podlucheni", "Тиквички подлучени", "3,50", "", ""],
["", "patladzhan-s-domaten-sos", "Патладжан с доматен сос", "3,50", "", ""],
["", "chushki-s-domaten-sos", "Чушки с доматен сос", "3,50", "", ""],
["", "chushki-byurek", "Чушки бюрек", "3,50", "", ""],
["", "kartofi-na-keremida-po-mikhalski", "Картофи на керемида по Михалски", "4,90", "", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,80", "", ""],
["", "zadusheni-brokoli-ss-sino-sirene", "Задушени броколи със синьо сирене", "4,20", "", ""],
["", "gbi-v-maslo", "Гъби в масло", "4,20", "", ""],
["", "manatarki-v-maslo", "Манатарки в масло", "7,70", "", ""],
["", "lozovi-postni-srmichki", "Лозови постни сърмички", "2,80", "", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "200", ""],
["", "khrupkavi-pileshki", "Хрупкави пилешки", "3,50", "", ""]

            ],

            "soups": [
                ["", "shkembe-chorba", "Шкембе чорба", "2,10", "", ""],
["", "agneshka-supa", "Агнешка супа", "2,10", "", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "", ""],
["", "tarator", "Таратор", "0,70", "", ""],
["", "ribena-supa", "Рибена супа", "2,10", "", ""],
["", "bob-chorba", "Боб чорба", "1,40", "", ""]

            ],

            "specialties": [
                ["", "gshi-drob-na-skara", "Гъши дроб на скара", "11,20", "", ""],
["", "agneshko-pecheno-po-gergovski", "Агнешко печено по Гергьовски", "9,10", "", ""],
["", "gornooryakhovsko-grne", "Горнооряховско гърне", "5,60", "", ""],
["", "agneshki-glavichki", "Агнешки главички", "4,20", "", ""],
["", "svinski-dzholan", "Свински джолан", "11,90", "850", ""]

            ],

            "fish": [
                ["", "somga", "Сьомга", "11,20", "", ""],
["", "lavrak", "Лаврак", "8,40", "", ""],
["", "pstrva", "Пъстърва", "5,60", "", ""],
["", "sharan", "Шаран", "5,60", "", ""],
["", "smadok", "Смадок", "5,60", "", ""],
["", "som", "Сом", "5,60", "", ""]

            ],

            "Ястия със свинско": [
                ["", "svinsko-file-s-gben-sos", "Свинско филе с гъбен сос", "5,60", "", ""],
["", "svinsko-file-v-keremidi", "Свинско филе в керемиди", "7,00", "", ""],
["", "svinska-kavarma", "Свинска каварма", "7,00", "", ""],
["", "drusan-kebap", "Друсан кебап", "5,60", "", ""],
["", "bolyarsko-vreteno", "Болярско вретено", "7,00", "", ""]

            ],

            "Ястия с пилешко": [
                ["", "pileshko-file-na-tigan", "Пилешко филе на тиган", "4,20", "", ""],
["", "pileshko-file-s-gben-sos", "Пилешко филе с гъбен сос", "4,90", "", ""],
["", "pileshka-przhola-ot-butche", "Пилешка пържола от бутче", "4,20", "", ""],
["", "pileshko-vreteno", "Пилешко вретено", "6,30", "", ""]

            ],

            "Ястия със заешко": [
                ["", "zaeshko-po-trakijski", "Заешко по Тракийски", "7,00", "500", ""]

            ],

            "Ястия на сач": [
                ["", "chiflishki-sach", "Чифлишки сач", "7,70", "", ""],
["", "zelenchukov-sach", "Зеленчуков сач", "4,90", "", ""],
["", "kasapski-sach", "Касапски сач", "7,00", "", ""]

            ],

            "Ястия ма скара": [
                ["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "", ""],
["", "svinsko-file", "Свинско филе", "5,60", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,80", "", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,90", "", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "", ""],
["", "pileshko-file", "Пилешко филе", "4,20", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "2,10", "", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "4,90", "", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "1,40", "", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,20", "", ""]

            ],

            "desserts": [
                ["", "baklava-s-lokum", "Баклава с локум", "2,80", "", ""],
["", "biskvitena-torta", "Бисквитена торта", "2,80", "", ""],
["", "palachinka", "Палачинка", "2,10", "", ""],
["", "czedeno-kiselo-mlyako", "Цедено кисело мляко", "2,10", "", ""]

            ]
        }', 
        'slug' => 'mehana-payaka',
        'business_name' => 'Механа Паяка',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5029',
        'address' => 'ул. Капитан Павел Грамадов 8',
        'address_additional' => '',
        'coords_x' => '43.0976286',
        'coords_y' => '25.6694252',
        'phone' => '+359887869013',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "pileshko-file", "Пилешко филе", "5,60", "250", ""],
["", "svinski-vrat-na-skara", "Свински врат на скара", "7,70", "300", ""],
["", "svinski-rebra-na-skara", "Свински ребра на скара", "9,10", "450", ""],
["", "teleshki-biftek-200gr-s-luk-i-chushki-na-skara-aromaten-sos-i-przheni-kartofi", "Телешки бифтек 200гр с лук и чушки на скара, ароматен сос и пържени картофи", "9,10", "600", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "7,00", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""]

            ],

            "specialties": [
                ["", "zaek-s-gbi", "Заек с гъби", "9,10", "550", ""],
["", "zadusheno-po-vodenicharski", "Задушено по воденичарски", "9,80", "550", ""],
["", "svinski-zhulieni-vrkhu-kanape-ot-przheni-kartofi", "Свински жулиени върху канапе от пържени картофи", "8,40", "400", ""],
["", "pileshki-zhulieni-vrkhu-kanape-ot-przheni-kartofi", "Пилешки жулиени върху канапе от пържени картофи", "8,40", "400", ""],
["", "tortila", "Тортила", "8,40", "450", ""]

            ],

            "additives": [
                ["", "sirene", "Сирене", "0,00", "50", ""],
["", "lyuti-chushki-5br", "Люти чушки (5бр)", "0,70", "", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""]

            ],

            "Крафт бира": [
                ["", "chisto-i-prosto---svetl-ejl", "Чисто и просто - Светъл Ейл", "3,50", "500", ""],
["", "unlackee-amerikanski-ambr", "UNLACKEE Американски Амбър", "3,50", "500", ""],
["", "black-head-staut", "BLACK HEAD STAUT", "3,50", "500", ""],
["", "enter-night-pilsner", "ENTER NIGHT PILSNER", "6,30", "500", ""]

            ],

            "wine": [
                ["", "mezek-byalo", "Мезек бяло", "12,60", "750", ""],
["", "mezek-cherveno", "Мезек червено", "12,60", "750", ""],
["", "mezek-roze", "Мезек розе", "12,60", "750", ""]

            ]
        }', 
        'slug' => 'architect-s-club',
        'business_name' => 'Architect&#039;s Club',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Велчо Джамджията 14',
        'address_additional' => '',
        'coords_x' => '43.08228398',
        'coords_y' => '25.6411761',
        'phone' => '+359898576855',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "amerikanski-khot-dog", "Американски хот дог", "2,80", "", ""],
["", "obiknoven-khot-dog", "Обикновен хот дог", "2,10", "", ""],
["", "sandvich-sc-svinska-vratna-przhola", "Сандвич съc свинска вратна пържола", "4,20", "", ""],
["", "sandvich-c-pileshka-przhola", "Сандвич c пилешка пържола", "3,50", "", ""],
["", "sandvich-cs-shniczel", "Сандвич cъс шницел", "3,50", "", ""],
["", "sandvich-c-teleshki-biftek", "Сандвич c телешки бифтек", "4,20", "", ""],
["", "sandvich-sc-svinski-biftek", "Сандвич съc свински бифтек", "3,50", "", ""],
["", "sandvich-c-shunka", "Сандвич c шунка", "2,80", "", ""],
["", "sandvich-c-kolbas", "Сандвич c колбас", "2,80", "", ""],
["", "porcziya-przheni-kartofki", "Порция пържени картофки", "2,10", "", ""]

            ],

            "dunners": [
                ["", "dyuner", "Дюнер", "2,10", "", ""],
["", "vegi-dyuner", "Веги дюнер", "3,50", "", ""]

            ],

            "Порция дюнер": [
                ["", "porcziya-dyuner", "Порция дюнер", "4,20", "", ""]

            ],

            "burgers": [
                ["", "burger-s-pileshka-przhola", "Бургер с пилешка пържола", "3,50", "", ""],
["", "burger-ss-svinska-vratna-przhola", "Бургер със свинска вратна пържола", "3,50", "", ""],
["", "burger-s-biftek", "Бургер с бифтек", "2,80", "", ""],
["", "burger-s-pileshki-shniczel", "Бургер с пилешки шницел", "2,80", "", ""],
["", "burger-s-pileshko-meso", "Бургер с пилешко месо", "2,80", "", ""],
["", "vegi-burger", "Веги бургер", "2,80", "", ""]

            ],

            "Порция бургери": [
                ["", "porcziya-burger-svinski-biftek-s-przheni-kartofi", "Порция бургер свински бифтек с пържени картофи", "5,60", "", ""],
["", "porcziya-burger-teleshki-biftek-s-przheni-kartofi", "Порция бургер телешки бифтек с пържени картофи", "5,60", "", ""],
["", "porcziya-burger-shniczel-s-przheni-kartofi", "Порция бургер шницел с пържени картофи", "5,60", "", ""],
["", "porcziya-burger-kordon-blyu-s-przheni-kartofi", "Порция бургер Кордон Блю с пържени картофи", "5,60", "", ""],
["", "porcziya-burger-svinska-przhola-s-przheni-kartofi", "Порция бургер свинска пържола с пържени картофи", "6,30", "", ""],
["", "porcziya-burger-pileshka-przhola-s-przheni-kartofi", "Порция бургер пилешка пържола с пържени картофи", "6,30", "", ""]

            ]
        }', 
        'slug' => 'shano-burger',
        'business_name' => 'Shano Burger',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5002',
        'address' => 'бул. Никола Габровски 74',
        'address_additional' => '',
        'coords_x' => '43.0724345',
        'coords_y' => '25.59828',
        'phone' => '+359897774413',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "domati", "Домати", "2,10", "300", ""],
["", "krastaviczi", "Краставици", "2,10", "300", ""],
["", "zele-s-morkovi", "Зеле с моркови", "1,40", "300", ""],
["", "pechen-piper", "Печен пипер", "2,80", "", ""],
["", "shopska", "Шопска", "2,80", "400", ""],
["", "domashno-kopoolu", "Домашно кьопоолу", "2,10", "250", ""],
["", "vareni-kartofi", "Варени картофи", "2,10", "400", ""],
["", "meshana-redena", "Мешана редена", "2,80", "450", ""]

            ],

            "starters": [
                ["", "kartofi-sote", "Картофи соте", "2,80", "400", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,80", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "350", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "3,50", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "300", ""],
["", "khrupkavi-parti-butcheta", "Хрупкави парти бутчета", "3,50", "500", ""]

            ],

            "soups": [
                ["", "shkembe", "Шкембе", "2,10", "", ""],
["", "tarator", "Таратор", "1,40", "", ""],
["", "pileshka-supa", "Пилешка супа", "2,10", "", ""],
["", "agneshka-supa", "Агнешка супа", "2,10", "", ""]

            ],

            "barbecue": [
                ["", "agne-na-cheverme", "Агне на чеверме", "11,20", "500", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "vratna-przhola", "Вратна пържола", "3,50", "200", ""],
["", "svinsko-kebapche", "Свинско кебапче", "0,70", "80", ""],
["", "prase-na-cheverme", "Прасе на чеверме", "11,20", "500", ""],
["", "svinski-grdi", "Свински гърди", "4,20", "250", ""],
["", "kontra-file-plneno-v-bulo", "Контра филе, пълнено в було", "5,60", "300", ""],
["", "teleshka-pleskavicza", "Телешка плескавица", "2,80", "200", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "250", ""],
["", "teleshki-drob-v-bulo", "Телешки дроб в було", "2,10", "300", ""]

            ],

            "Сосове и добавки": [
                ["", "lukanka", "Луканка", "1,40", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "domashna-lyutenicza", "Домашна лютеница", "1,40", "100", ""],
["", "sirene", "Сирене", "0,00", "50", ""],
["", "proshuto", "Прошуто", "2,80", "50", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", ""]

            ],

            "drinks": [
                ["", "mineralna-voda-devin", "Минерална вода Девин", "0,70", "", ""],
["", "mineralna-voda-devin", "Минерална вода Девин", "0,70", "500", ""]

            ],

            "beer": [
                ["", "pirinsko-ken", "Пиринско кен", "0,70", "500", ""],
["", "kamenicza-ken", "Каменица кен", "1,40", "500", ""],
["", "zlatna-praga-ken", "Златна Прага кен", "0,70", "500", ""],
["", "cheshka-korona-ken", "Чешка корона кен", "0,70", "500", ""],
["", "efes", "Ефес", "2,10", "500", ""],
["", "klaustaler-bezalkokholna-ken", "Клаусталер безалкохолна кен", "2,10", "500", ""],
["", "radeberger-ken", "Радебергер кен", "2,10", "500", ""],
["", "stela-artoa", "Стела Артоа", "2,10", "500", ""],
["", "khajneken-0", "Хайнекен 0%", "2,10", "", ""]

            ]
        }', 
        'slug' => 'bbq-king',
        'business_name' => 'BBQ King',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5002',
        'address' => 'ул. Магистрална 31',
        'address_additional' => '',
        'coords_x' => '43.0754106',
        'coords_y' => '25.60427025',
        'phone' => '+359878322725',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "golyam-dyuner", "Голям дюнер", "2,80", "", ""],
["", "dyuner-la-scalla", "Дюнер La Scalla", "4,20", "", ""],
["", "vegetarianski-dyuner", "Вегетариански дюнер", "2,10", "", ""],
["", "porcziya-dyuner", "Порция дюнер", "5,60", "", ""],
["", "vegetarianski-boks", "Вегетариански бокс", "2,10", "", ""],
["", "grczki-dyuner", "Гръцки дюнер", "3,50", "", ""],
["", "dyuner-boks", "Дюнер бокс", "4,20", "", ""]

            ],

            "burgers": [
                ["", "burger-s-pileshko-meso", "Бургер с пилешко месо", "2,80", "", ""],
["", "burger-s-pileshki-shniczel", "Бургер с пилешки шницел", "2,80", "", ""],
["", "burger-s-shunka", "Бургер с шунка", "2,10", "", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "2,10", "", ""]

            ],

            "Добавки и картофки": [
                ["", "przheni-kartofki-malki", "Пържени картофки малки", "0,70", "", ""],
["", "przheni-kartofki-golemi", "Пържени картофки големи", "2,10", "", ""],
["", "dobavka-yajcze", "Добавка яйце", "0,00", "", ""],
["", "dobavka-kashkaval", "Добавка кашкавал", "0,00", "", ""],
["", "dobavka-pileshko-meso", "Добавка пилешко месо", "0,70", "", ""]

            ]
        }', 
        'slug' => 'donerslascalla',
        'business_name' => 'Doners &amp; Burgers La Scalla',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5002',
        'address' => 'бул. Никола Габровски 38',
        'address_additional' => '',
        'coords_x' => '43.0754125',
        'coords_y' => '25.6206548',
        'phone' => '+359895545554',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "krem-supa-ot-morkovi-i-czelina", "Крем супа от моркови и целина", "0,70", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "tarator-s-orekhi-i-kopr", "Таратор с орехи и копър", "0,70", "300", ""],
["", "spageti-boloneze", "Спагети Болонезе", "2,80", "350", ""],
["", "pile-zhulien-monako-s-kartofeno-pyure-i-sos", "Пиле Жулиен Монако с картофено пюре и сос", "2,80", "350", ""],
["", "zelena-palachinka-ss-sirene-i-kashkaval", "Зелена палачинка със сирене и кашкавал", "2,10", "350", ""],
["", "salata-czezar-s-grilovano-pile", "Салата Цезар с гриловано пиле", "3,50", "300", ""],
["", "grczka-salata", "Гръцка салата", "2,10", "300", ""],
["", "domashna-salata-s-pechen-piper", "Домашна салата с печен пипер", "2,10", "300", ""],
["", "redena-salata", "Редена салата", "2,10", "300", ""],
["", "shopska-salata", "Шопска салата", "2,10", "", ""],
["", "dinya", "Диня", "0,00", "150", ""]

            ],

            "salads": [
                ["", "moczarelena-kula", "Моцарелена кула", "4,20", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "zelena-salata", "Зелена салата", "3,50", "400", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""]

            ],

            "На скара": [
                ["", "pileshki-filencza-s-grilovani-zelenchuczi", "Пилешки филенца с гриловани зеленчуци", "6,30", "400", ""],
["", "svinska-vratna-przhola-s-grilovani-zelenchuczi", "Свинска вратна пържола с гриловани зеленчуци", "7,00", "400", ""],
["", "tradiczionni-domashni-kebapcheta-2br-s-przheni-kartofi-i-lyutenicza", "Традиционни домашни кебапчета (2бр) с пържени картофи и лютеница", "3,50", "", ""],
["", "sudzhuk-na-greben-s-domashna-lyutenicza-i-przheni-kartofi", "Суджук на гребен с домашна лютеница и пържени картофи", "5,60", "400", ""]

            ],

            "fish": [
                ["", "kalmari-po-grczki-s-czitrusov-dresing", "Калмари по гръцки с цитрусов дресинг", "7,70", "300", ""],
["", "czacza", "Цаца", "2,80", "200", ""]

            ],

            "Мезенца": [
                ["", "korni-pileshki-khapki-s-chesnov-sos", "Корни пилешки хапки с чеснов сос", "4,20", "300", ""],
["", "mini-kashkavaleni-khapki", "Мини кашкавалени хапки", "4,20", "300", ""],
["", "sotirani-bejbi-kartofi-s-kopr-i-chesn", "Сотирани бейби картофи с копър и чесън", "3,50", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "2,80", "300", ""],
["", "tikvichki-s-chesnov-sos", "Тиквички с чеснов сос", "3,50", "300", ""],
["", "zadusheni-brokoli-ss-smetana-i-sirena", "Задушени броколи със сметана и сирена", "4,20", "300", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "500", ""],
["", "kaprichoza", "Капричоза", "5,60", "600", ""],
["", "polo", "Поло", "5,60", "600", ""],
["", "adriano", "Адриано", "5,60", "600", ""],
["", "vlcha", "Вълча", "5,60", "600", ""]

            ],

            "desserts": [
                ["", "torta-tiramisu", "Торта Тирамису", "2,80", "100", ""],
["", "torta-shokoladov-tryufel", "Торта шоколадов трюфел", "2,80", "100", ""],
["", "torta-rondine", "Торта Рондине", "2,80", "100", ""]

            ],

            "Прясно изцедени сокове": [
                ["", "portokal", "Портокал", "2,10", "", ""],
["", "grejpfrut", "Грейпфрут", "2,10", "", ""],
["", "yablka", "Ябълка", "2,10", "", ""],
["", "morkov", "Морков", "1,40", "", ""],
["", "portokal-i-grejpfrut", "Портокал и грейпфрут", "2,10", "", ""],
["", "portokal-i-yablka", "Портокал и ябълка", "2,10", "", ""],
["", "morkov-s-yablka", "Морков с ябълка", "2,10", "", ""],
["", "domashna-limonada-ot-bz", "Домашна лимонада от бъз", "2,80", "", ""],
["", "domashna-limona", "Домашна лимона", "2,80", "500", ""]

            ]
        }', 
        'slug' => 'fresh-2-go',
        'business_name' => 'Fresh 2 Go',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Марно поле 9',
        'address_additional' => '',
        'coords_x' => '43.08034528',
        'coords_y' => '25.63118768',
        'phone' => '+359887028288',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "vareni-kartofi", "Варени картофи", "1,40", "", ""],
["", "zele-s-morkovi", "Зеле с моркови", "1,40", "", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "2,10", "", ""],
["", "domati", "Домати", "1,40", "", ""],
["", "krastaviczi", "Краставици", "1,40", "", ""],
["", "shopska", "Шопска", "2,80", "", ""],
["", "zelena-salata", "Зелена салата", "2,10", "", ""],
["", "sirene", "Сирене", "0,70", "100", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""]

            ],

            "soups": [
                ["", "shkembe-chorba", "Шкембе чорба", "0,70", "", ""],
["", "pateshka", "Патешка", "1,40", "", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "nadenicza", "Наденица", "2,10", "", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "", ""],
["", "pileshka-przhola", "Пилешка пържола", "4,20", "", ""],
["", "svinska-przhola", "Свинска пържола", "4,20", "", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "3,50", "", ""]

            ],

            "Пане": [
                ["", "kashkaval-pane", "Кашкавал пане", "2,10", "", ""],
["", "shniczel", "Шницел", "2,10", "", ""],
["", "pileshki-khapki", "Пилешки хапки", "3,50", "", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,70", "", ""]

            ]
        }', 
        'slug' => 'snack-bar-sveta-gora',
        'business_name' => 'Snack bar Sveta Gora',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5002',
        'address' => 'Бул. Никола Габровски 74',
        'address_additional' => '',
        'coords_x' => '43.0731434',
        'coords_y' => '25.6035674',
        'phone' => '+359888532692',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Багети": [
                ["", "bageta-s-kebapche", "Багета с кебапче", "0,70", "200", ""],
["", "bageta-s-kyufte", "Багета с кюфте", "0,70", "200", ""],
["", "bageta-s-klczana-nadenicza", "Багета с кълцана наденица", "1,40", "220", ""],
["", "bageta", "Багета", "0,00", "120", ""]

            ],

            "sandwiches": [
                ["", "sandvich-esh-besh-s-kebapche", "Сандвич Еш-Беш с кебапче", "1,40", "250", ""],
["", "sandvich-esh-besh-s-kyufte", "Сандвич Еш-Беш с кюфте", "1,40", "250", ""],
["", "sandvich-esh-besh-s-klczana-nadenicza", "Сандвич Еш-Беш с кълцана наденица", "1,40", "270", "https://images.deliveryhero.io/image/fd-bg/Products/683855.jpg"],
["", "sandvich-s-kashkaval-i-kebapche", "Сандвич с кашкавал и кебапче", "1,40", "260", "https://images.deliveryhero.io/image/fd-bg/Products/683856.jpg"],
["", "sandvich-s-kashkaval-i-kyufte", "Сандвич с кашкавал и кюфте", "1,40", "260", ""],
["", "sandvich-s-kashkaval-i-klczana-nadenicza", "Сандвич с кашкавал и кълцана наденица", "1,40", "280", ""],
["", "grczki-sandvich-s-kebapche", "Гръцки сандвич с кебапче", "1,40", "290", ""],
["", "grczki-sandvich-s-kyufte", "Гръцки сандвич с кюфте", "1,40", "290", "https://images.deliveryhero.io/image/fd-bg/Products/683860.jpg"],
["", "grczki-sandvich-s-klczana-nadenicza", "Гръцки сандвич с кълцана наденица", "2,10", "310", ""],
["", "sandvich-vegetariana", "Сандвич Вегетариана", "1,40", "270", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "klczana-nadenicza", "Кълцана наденица", "0,70", "100", ""]

            ],

            "burgers": [
                ["", "svinski-burger", "Свински бургер", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/683863.jpg"],
["", "riben-burger", "Рибен бургер", "2,10", "300", "https://images.deliveryhero.io/image/fd-bg/Products/683866.jpg"],
["", "pileshki-burger", "Пилешки бургер", "2,10", "400", "https://images.deliveryhero.io/image/fd-bg/Products/683864.jpg"],
["", "teleshki-burger", "Телешки бургер", "3,50", "450", "https://images.deliveryhero.io/image/fd-bg/Products/683865.jpg"]

            ],

            "additives": [
                ["", "kashkaval", "Кашкавал", "0,00", "", ""],
["", "chedr", "Чедър", "0,00", "", ""],
["", "bekon", "Бекон", "0,00", "", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "kartofeno-kyufte", "Картофено кюфте", "0,00", "", ""],
["", "czarevicza", "Царевица", "0,00", "", ""],
["", "maslini", "Маслини", "0,00", "", ""],
["", "domat", "Домат", "0,00", "", ""],
["", "krastavicza", "Краставица", "0,00", "", ""],
["", "pitka", "Питка", "0,00", "", ""]

            ],

            "Coca-Cola  напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1077086.jpg"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1077087.jpg"],
["", "fanta-grozde", "Fanta Грозде", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1077088.jpg"]

            ],

            "drinks": [
                ["", "studen-chaj-san-benedetto", "Студен чай San Benedetto", "0,70", "", ""],
["", "ajryan-balkan", "Айрян Балкан", "0,00", "", ""],
["", "zagorka", "Загорка", "0,70", "500", ""]

            ]
        }', 
        'slug' => 'esh-besh',
        'business_name' => 'Еш - Беш',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул.Професор Илия Янулов 1а',
        'address_additional' => '',
        'coords_x' => '43.0777362',
        'coords_y' => '25.60696225',
        'phone' => '+359887879939',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Сладки катми": [
                ["", "katma-s-shokolad", "Катма с шоколад", "2,10", "", ""],
["", "katma-s-byal-shokolad", "Катма с бял шоколад", "2,10", "", ""],
["", "katma-s-yagoda", "Катма с ягода", "2,10", "", ""],
["", "katma-s-malina", "Катма с малина", "2,10", "", ""],
["", "katma-s-borovinka", "Катма с боровинка", "2,10", "", ""],
["", "katma-ss-smokinya", "Катма със смокиня", "2,10", "", ""],
["", "katma-s-med", "Катма с мед", "2,10", "", ""]

            ],

            "Сладки комбинации": [
                ["", "byal-shokolad-i-banan", "Бял шоколад и банан", "2,80", "", ""],
["", "kafyav-shokolad-i-banan", "Кафяв шоколад и банан", "2,80", "", ""],
["", "byal-shokolad-i-orekhi", "Бял шоколад и орехи", "2,10", "", ""],
["", "kafyav-shokolad-i-orekhi", "Кафяв шоколад и орехи", "2,10", "", ""],
["", "med-i-orekhi", "Мед и орехи", "2,10", "", ""],
["", "med-i-banan", "Мед и банан", "2,80", "", ""],
["", "sladko-i-sirene", "Сладко и сирене", "2,10", "", ""],
["", "byal-shokolad-i-biskviti", "Бял шоколад и бисквити", "2,10", "", ""],
["", "kafyav-shokolad-i-biskviti", "Кафяв шоколад и бисквити", "2,10", "", ""],
["", "byal-shokolad-banan-i-orekhi", "Бял шоколад, банан и орехи", "2,80", "", ""],
["", "kafyav-shokolad-banan-i-orekhi", "Кафяв шоколад, банан и орехи", "2,80", "", ""]

            ],

            "Солени катми": [
                ["", "katma-ss-sirene", "Катма със сирене", "2,10", "", ""],
["", "katma-ss-sirene-i-kashkaval", "Катма със сирене и кашкавал", "2,10", "", ""],
["", "katma-s-kashkaval", "Катма с кашкавал", "2,10", "", ""],
["", "katma-s-lukanka-i-kashkaval", "Катма с луканка и кашкавал", "2,80", "", ""],
["", "katma-s-shunka-i-kashkaval", "Катма с шунка и кашкавал", "2,80", "", ""],
["", "katma-ss-svinsko-file-i-kashkaval", "Катма със свинско филе и кашкавал", "2,80", "", ""]

            ]
        }', 
        'slug' => 'katmi-topi',
        'business_name' => 'Катми - Топи',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'бул. Васил Левски 33',
        'address_additional' => '',
        'coords_x' => '43.0786129',
        'coords_y' => '25.6277316',
        'phone' => '+359988930810',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "margarita", "Маргарита", "4,90", "400", "https://images.deliveryhero.io/image/fd-bg/Products/856270.JPG"],
["", "fungi", "Фунги", "5,60", "500", "https://images.deliveryhero.io/image/fd-bg/Products/856271.JPG"],
["", "vegetariana", "Вегетариана", "5,60", "500", "https://images.deliveryhero.io/image/fd-bg/Products/856272.JPG"],
["", "piczarela", "Пицарела", "6,30", "500", "https://images.deliveryhero.io/image/fd-bg/Products/856273.JPG"],
["", "bonifacho", "Бонифачо", "6,30", "500", ""],
["", "formadzhi", "Формаджи", "7,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/856278.JPG"],
["", "palermo", "Палермо", "7,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/856279.JPG"],
["", "verona", "Верона", "7,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/856280.JPG"],
["", "proshuto", "Прошуто", "7,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/856281.JPG"]

            ],

            "Зелена пици замесена със спанак, спирулина и квас": [
                ["", "zelena-picza-s-file-elena-i-susheni-domati", "Зелена пица с филе Елена и сушени домати", "7,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/856302.JPG"],
["", "zelena-picza-s-praskovi-i-maskarpone", "Зелена пица с праскови и маскарпоне", "7,70", "", "https://images.deliveryhero.io/image/fd-bg/Products/856303.JPG"]

            ],

            "desserts": [
                ["", "italianska-biskvitena-torta-s-maskarpone-i", "Италианска бисквитена торта с маскарпоне и", "2,10", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", ""]

            ],

            "Студени напитки": [
                ["", "bbb-sok-portokal", "BBB сок портокал", "0,70", "250", ""],
["", "bbb-sok-praskova", "BBB сок праскова", "0,70", "250", ""],
["", "bbb-sok-kajsiya", "BBB сок кайсия", "0,70", "250", ""],
["", "bbb-sok-yablka", "BBB сок ябълка", "0,70", "250", ""],
["", "bbb-sok-yagoda-banan", "BBB сок ягода-банан", "0,70", "250", ""],
["", "bbb-sok-banan", "BBB сок банан", "0,70", "250", ""],
["", "red-bul", "Ред Бул", "2,80", "250", ""],
["", "pepsi", "Пепси", "0,70", "330", ""],
["", "mirinda-portokal", "Миринда портокал", "0,70", "330", ""],
["", "7up", "7up", "0,70", "330", ""],
["", "mineralna-voda-goran-banya", "Минерална вода Горан баня", "0,70", "500", ""],
["", "mineralna-voda-goran-banya", "Минерална вода Горан баня", "1,40", "1500", ""],
["", "gazirana-voda-gorna-banya", "Газирана вода Горна баня", "0,70", "500", ""]

            ],

            "beer": [
                ["", "shumensko-svetlo", "Шуменско светло", "1,40", "500", ""],
["", "zagorka-speczialno", "Загорка специално", "1,40", "500", ""],
["", "khajneken", "Хайнекен", "2,10", "500", ""],
["", "stela-artoa", "Стела Артоа", "2,10", "500", ""]

            ]
        }', 
        'slug' => 'pizza-verona',
        'business_name' => 'Pizza Verona',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5008',
        'address' => 'ул. Георги Измирлиев 13',
        'address_additional' => '',
        'coords_x' => '43.06950052',
        'coords_y' => '25.60722105',
        'phone' => '+359888615252',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "sreden-dyuner", "Среден дюнер", "3,50", "", ""],
["", "golyam-dyuner", "Голям дюнер", "3,50", "", ""],
["", "grczki-dyuner", "Гръцки дюнер", "4,20", "", ""],
["", "malk-dyuner-v-kutiya", "Малък дюнер в кутия", "2,80", "", ""],
["", "sreden-dyuner-v-kutiya-s-dvojno-meso", "Среден дюнер в кутия с двойно месо", "7,00", "", ""],
["", "golyam-dyuner-v-kutiya", "Голям дюнер в кутия", "4,20", "", ""],
["", "grczki-dyuner-v-kutiya", "Гръцки дюнер в кутия", "4,20", "", ""],
["", "dyuner-xxl", "Дюнер XXL", "5,60", "", ""],
["", "koka-kola", "Кока Кола", "2,10", "500", ""]

            ],

            "burgers": [
                ["", "s-pileshko-meso", "С пилешко месо", "3,50", "", ""],
["", "s-pileshki-shniczel", "С пилешки шницел", "3,50", "", ""],
["", "ss-svinski-shniczel", "Със свински шницел", "3,50", "", ""],
["", "ss-teleshka-pleskavicza", "Със телешка плескавица", "3,50", "", ""],
["", "s-shunka", "С шунка", "3,50", "", ""],
["", "s-khrupkava-przhola", "С хрупкава пържола", "3,50", "", ""],
["", "s-pileshki-purichki", "С пилешки пурички", "3,50", "", ""],
["", "s-pileshki-khapki", "С пилешки хапки", "3,50", "", ""],
["", "ss-svinska-pleskavicza", "Със свинска плескавица", "3,50", "", ""],
["", "bon-file-ss-susam", "Бон филе със сусам", "3,50", "", ""],
["", "kordon-blo", "Кордон бльо", "3,50", "", ""],
["", "khapki-ss-sirene", "Хапки със сирене", "3,50", "", ""],
["", "kashkavaleni-stikleti", "Кашкавалени стиклети", "3,50", "", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "kashkaval", "Кашкавал", "0,00", "", ""]

            ],

            "Порции": [
                ["", "dyuner", "Дюнер", "7,70", "", ""],
["", "khrupkava-pileshka-przhola", "Хрупкава пилешка пържола", "5,60", "", ""],
["", "pileshki-purichki-ss-susam", "Пилешки пурички със сусам", "5,60", "", ""],
["", "pileshki-khapki", "Пилешки хапки", "5,60", "", ""],
["", "pileshko-bon-file-ss-susam", "Пилешко бон филе със сусам", "4,90", "", ""],
["", "kordon-blo", "Кордон бльо", "6,30", "", ""],
["", "khapki-ss-sirene", "Хапки със сирене", "4,20", "", ""],
["", "kashkavaleni-stikleti", "Кашкавалени стиклети", "4,20", "", ""],
["", "malki-kartofki", "Малки картофки", "2,10", "", ""],
["", "golemi-kartofki", "Големи картофки", "3,50", "", ""]

            ],

            "Комбо": [
                ["", "golyam-dyuner--koka-kola", "Голям дюнер + Кока Кола", "4,90", "500", ""],
["", "sreden-dyuner--koka-kola", "Среден дюнер + Кока Кола", "4,20", "330", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1010946.jpg"],
["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1010947.jpg"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1010949.jpg"]

            ]
        }', 
        'slug' => 'duner-and-burger-gyros',
        'business_name' => 'Duner and Burger Gyros',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'бул. Христо Ботев 12',
        'address_additional' => '',
        'coords_x' => '43.08073946',
        'coords_y' => '25.63325953',
        'phone' => '+359896166503 +359899181973',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "pileshki-giros", "Пилешки гирос", "2,80", "", ""],
["", "vegetarianski-giros", "Вегетариански гирос", "2,10", "", ""]

            ],

            "sandwiches": [
                ["", "klub-sandvich-s-pileshko-meso", "Клуб сандвич с пилешко месо", "9,80", "1000", ""],
["", "sandvich-s-grczka-nadenicza", "Сандвич с гръцка наденица", "3,50", "", ""]

            ],

            "Порции": [
                ["", "porcziya-pileshko-meso", "Порция пилешко месо", "7,00", "", ""],
["", "porcziya-grczka-nadenicza---lukaniko", "Порция гръцка наденица - луканико", "7,00", "", ""]

            ],

            "appetizer": [
                ["", "grczka-majoneza", "Гръцка майонеза", "1,40", "200", ""],
["", "tirokafteri", "Тирокафтери", "1,40", "200", ""],
["", "paprika", "Паприка", "1,40", "200", ""],
["", "przheni-presni-kartofi", "Пържени пресни картофи", "2,10", "200", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/975771.jpg"],
["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/975773.jpg"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,00", "500", "https://images.deliveryhero.io/image/fd-bg/Products/975774.jpg"]

            ],

            "beer": [
                ["", "ariana", "Ариана", "0,70", "", ""],
["", "pirinsko", "Пиринско", "0,70", "", ""]

            ]
        }', 
        'slug' => 'alek-s-gyros',
        'business_name' => 'Alek&#039;s Gyros',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Велчо Джамджията 9',
        'address_additional' => '',
        'coords_x' => '43.0826926',
        'coords_y' => '25.6412154',
        'phone' => '+359877508600',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "royal", "Роял", "4,20", "500", ""],
["", "zdrave", "Здраве", "3,50", "300", ""],
["", "kapreze", "Капрезе", "5,60", "500", ""],
["", "czezar", "Цезар", "5,60", "300", ""],
["", "fassoni", "Фассони", "4,90", "200", ""],
["", "zelena-salata", "Зелена салата", "3,50", "200", ""],
["", "rokfor-salata", "Рокфор салата", "4,20", "200", ""],
["", "shopska", "Шопска", "4,20", "500", ""],
["", "ovcharska", "Овчарска", "4,20", "500", ""],
["", "snezhanka", "Снежанка", "3,50", "200", ""],
["", "ordovrna-salata", "Ордьовърна салата", "5,60", "500", ""],
["", "balkanska", "Балканска", "4,20", "500", ""],
["", "khumus-s-domat-i-patladzhan", "Хумус с домат и патладжан", "4,20", "500", ""],
["", "natyur", "Натюр", "3,50", "500", ""],
["", "pechen-piper", "Печен пипер", "2,80", "300", ""]

            ],

            "Закуски": [
                ["", "przheni-filijki", "Пържени филийки", "3,50", "350", ""],
["", "palachinki", "Палачинки", "2,80", "250", ""],
["", "sandvich-s-shunka-i-kashkaval", "Сандвич с шунка и кашкавал", "2,80", "", ""],
["", "sandvich-s-kajma-i-kashkaval", "Сандвич с кайма и кашкавал", "2,80", "", ""],
["", "sandvich-s-file-i-kashkaval", "Сандвич с филе и кашкавал", "2,80", "", ""],
["", "sandvich-ss-sudzhuk-i-kashkaval", "Сандвич със суджук и кашкавал", "2,80", "", ""],
["", "sandvich-s-yajcze-sirene-i-kashkaval", "Сандвич с яйце, сирене и кашкавал", "2,80", "", ""],
["", "sandvich-s-maslini-ikashkaval", "Сандвич с маслини икашкавал", "2,80", "", ""],
["", "sandvich-s-kashkaval", "Сандвич с кашкавал", "2,80", "", ""],
["", "pitka-na-peshh-s-kashkaval-sirene-i-asorti", "Питка на пещ с кашкавал, сирене и асорти", "2,80", "", ""],
["", "pitka-na-peshh-s-shunka-i-kashkaval", "Питка на пещ с шунка и кашкавал", "2,80", "", ""],
["", "pitka-na-peshh-s-pileshko-i-kiseli-krastavichki", "Питка на пещ с пилешко и кисели краставички", "2,80", "", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,80", "", ""],
["", "venecziya", "Венеция", "4,90", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "piperone", "Пипероне", "4,20", "", ""],
["", "neapolitana", "Неаполитана", "3,50", "", ""],
["", "mankhatan", "Манхатан", "3,50", "", ""],
["", "toskana", "Тоскана", "4,90", "", ""],
["", "formadzho", "Формаджо", "3,50", "", ""],
["", "roma", "Рома", "4,20", "", ""],
["", "boloneze", "Болонезе", "4,90", "", ""],
["", "siczilianska", "Сицилианска", "7,00", "", ""],
["", "dzhenzano", "Джензано", "3,50", "", ""],
["", "amerikano", "Американо", "3,50", "", ""],
["", "verdi", "Верди", "3,50", "", ""],
["", "kuatro-formadzho", "Куатро Формаджо", "4,20", "", ""],
["", "kuatro-stadzhoni", "Куатро Стаджони", "3,50", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "400", ""],
["", "prlenaka-s-kashkaval", "Пърленака с кашкавал", "2,80", "400", ""],
["", "prlenka-kombinirana", "Пърленка комбинирана", "2,80", "400", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "2,10", "400", ""],
["", "prlenka-ss-susam", "Пърленка със сусам", "2,10", "400", ""]

            ],

            "Стартери": [
                ["", "sirencza-s-kornflejks-i-zelana-salata", "Сиренца с корнфлейкс и зелана салата", "4,20", "300", ""],
["", "sirene-na-tigan-s-med-i-orekhi", "Сирене на тиган с мед и орехи", "3,50", "150", ""],
["", "sirencza-panirani", "Сиренца панирани", "3,50", "200", ""],
["", "kashkavalcheta-panirani", "Кашкавалчета панирани", "5,60", "300", ""],
["", "brokoleni-kyuftencza", "Броколени кюфтенца", "4,90", "200", ""],
["", "omlet", "Омлет", "4,20", "280", ""],
["", "panirani-brokoli", "Панирани броколи", "4,20", "300", ""],
["", "panirani-pileshki-khapki", "Панирани пилешки хапки", "4,90", "250", ""],
["", "plato-miks-ot-sirena-i-plodove", "Плато микс от сирена и плодове", "16,10", "300", ""],
["", "brokoli-v-smetana-i-sirena", "Броколи в сметана и сирена", "4,90", "500", ""],
["", "brusketi-s-topki-ot-krema-sirene-i-magdanoz", "Брускети с топки от крема сирене и магданоз", "4,90", "250", ""],
["", "panirano-topeno-sirene", "Панирано топено сирене", "4,90", "300", ""]

            ],

            "Италиански специалитети": [
                ["", "spageti-boloneze", "Спагети Болонезе", "4,20", "400", ""],
["", "spageti-venecziya", "Спагети Венеция", "4,20", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,20", "400", ""],
["", "spageti-milano", "Спагети Милано", "4,20", "400", ""]

            ],

            "Специалитети с пилешко и патешко месо": [
                ["", "rizoto-s-khrupkavi-zelenchuczi-avokado-i-pileshko-file", "Ризото с хрупкави зеленчуци, авокадо и пилешко филе", "4,90", "300", ""],
["", "pileshki-flejki-s-kornflejks", "Пилешки флейки с корнфлейкс", "4,90", "400", ""],
["", "pile-chumerna", "Пиле Чумерна", "7,00", "400", ""],
["", "pileshki-flejki-na-skara", "Пилешки флейки на скара", "5,60", "300", ""],
["", "pileshko-file-na-skra", "Пилешко филе на скра", "5,60", "300", ""],
["", "pileshka-przhola-but-na-plocha", "Пилешка пържола бут на плоча", "5,60", "300", ""],
["", "pileshki-drobcheta-s-luk", "Пилешки дробчета с лук", "3,50", "300", ""],
["", "pile-luk-chushka-i-gbi-na-tigan", "Пиле, лук, чушка и гъби на тиган", "5,60", "400", ""],
["", "zapekanka-s-pile", "Запеканка с пиле", "5,60", "400", ""],
["", "panirano-pile-s-bekon-gbki-i-kashkaval", "Панирано пиле с бекон, гъбки и кашкавал", "6,30", "400", ""]

            ],

            "Свинско, телешко и мляно месо": [
                ["", "svinsko-file", "Свинско филе", "7,00", "300", ""],
["", "svinski-zhulieni", "Свински жулиени", "7,00", "300", ""],
["", "pecheni-svinski-rebrcza", "Печени свински ребърца", "7,70", "450", ""],
["", "svinsko-file-na-skara", "Свинско филе на скара", "7,00", "300", ""],
["", "svinski-kareta-na-plocha", "Свински карета на плоча", "7,00", "300", ""],
["", "svinski-rebrcza", "Свински ребърца", "7,00", "400", ""],
["", "svinski-vrat", "Свински врат", "7,00", "300", ""],
["", "ezik-v-maslo", "Език в масло", "5,60", "200", ""],
["", "teleshko-file", "Телешко филе", "11,90", "250", ""],
["", "kyufte", "Кюфте", "2,80", "150", ""],
["", "bolyarsko-kyufte", "Болярско кюфте", "3,50", "150", ""],
["", "pleskavicza-s-luk", "Плескавица с лук", "6,30", "400", ""]

            ],

            "fish": [
                ["", "czipura", "Ципура", "13,30", "300", ""],
["", "lavrak", "Лаврак", "13,30", "300", ""],
["", "pstrva", "Пъстърва", "8,40", "300", ""],
["", "stek-ot-somga", "Стек от сьомга", "9,10", "200", ""],
["", "kalmari", "Калмари", "7,70", "250", ""],
["", "lodki-pushena-rozova-somga", "Лодки пушена розова сьомга", "6,30", "300", ""]

            ],

            "Сухи мезета": [
                ["", "sudzhuk", "Суджук", "2,80", "50", ""],
["", "file-elena", "Филе Елена", "3,50", "50", ""]

            ]
        }', 
        'slug' => 'lounge-fassoni',
        'business_name' => 'Lounge Fassoni',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Славянска 2а',
        'address_additional' => '',
        'coords_x' => '43.0776078',
        'coords_y' => '25.6217388',
        'phone' => '+359878210795',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "shopska-salata", "Шопска салата", "2,80", "420", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "domashna-salata", "Домашна салата", "2,80", "400", ""],
["", "kapreze", "Капрезе", "3,50", "400", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "430", ""],
["", "svezha-salata", "Свежа салата", "2,80", "430", ""],
["", "buket-ot-svezhi-salati-s-riba-ton", "Букет от свежи салати с риба тон", "4,20", "400", ""],
["", "czezar-s-krekhko-pileshko", "Цезар с крехко пилешко", "4,90", "450", ""],
["", "kazablanka", "Казабланка", "4,20", "450", ""],
["", "buket-ot-svezhi-salati-s-khrupkav-bekon", "Букет от свежи салати с хрупкав бекон", "4,20", "450", ""],
["", "vitamina", "Витамина", "2,80", "400", ""],
["", "redena-salata", "Редена салата", "2,80", "420", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "350", ""],
["", "snezhanka", "Снежанка", "2,80", "300", ""],
["", "terin", "Терин", "2,80", "300", ""],
["", "spanak-s-kinoa", "Спанак с киноа", "3,50", "350", ""]

            ],

            "Топли предястия": [
                ["", "khrupkavi-pileshki-prchiczi", "Хрупкави пилешки пръчици", "2,80", "250", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "2,80", "250", ""],
["", "khrupkavi-sirencza", "Хрупкави сиренца", "2,80", "200", ""],
["", "khrupkavi-kashkavalcheta", "Хрупкави кашкавалчета", "2,80", "200", ""],
["", "kamember-vrkhu-kanape-ot-svezhi-salati-s-portokalovo-sladko", "Камембер върху канапе от свежи салати с портокалово сладко", "4,20", "270", ""],
["", "khrupkavi-topeni-sirencza-ss-sladko-ot-borovinki", "Хрупкави топени сиренца със сладко от боровинки", "3,50", "250", ""],
["", "khrupkavi-brokoli-s-topeno-sirene", "Хрупкави броколи с топено сирене", "3,50", "350", ""],
["", "gbi-v-bilkovo-maslo", "Гъби в билково масло", "2,80", "300", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "kartofi-po-selski", "Картофи по селски", "2,10", "250", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "300", ""],
["", "kartofeni-spirali-s-mlechno-zelenchukov-sos", "Картофени спирали с млечно-зеленчуков сос", "2,80", "300", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,10", "", ""],
["", "kaprichoza", "Капричоза", "2,80", "", ""],
["", "vegetariana", "Вегетариана", "2,80", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "2,80", "", ""],
["", "polo", "Поло", "4,20", "", ""],
["", "palermo", "Палермо", "4,20", "", ""],
["", "piperone", "Пипероне", "3,50", "", ""],
["", "kalczone", "Калцоне", "3,50", "", ""],
["", "asti", "Асти", "4,20", "", ""],
["", "picza-proshuto", "Пица прошуто", "5,60", "600", ""],
["", "vlcha-picza", "Вълча пица", "7,00", "600", ""]

            ],

            "Прясна паста": [
                ["", "pryasna-pasta-boloneze", "Прясна паста Болонезе", "2,80", "400", ""],
["", "pryasna-pasta-karbonara", "Прясна паста Карбонара", "3,50", "420", ""],
["", "pryasna-pasta-chetiri-sirena", "Прясна паста Четири сирена", "3,50", "450", ""]

            ],

            "rice": [
                ["", "oriz-s-pileshko", "Ориз с пилешко", "3,50", "450", ""],
["", "oriz-s-morski-darove", "Ориз с морски дарове", "4,20", "400", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "2,80", "400", ""]

            ],

            "Запеканки на пещ": [
                ["", "zapekanka-s-bekon", "Запеканка с бекон", "3,50", "400", ""],
["", "zapekanka-s-pusheno-pileshko-topeno-sirene-i-czarevicza", "Запеканка с пушено пилешко, топено сирене и царевица", "3,50", "460", ""],
["", "zapekanka-ss-zelenchuczi", "Запеканка със зеленчуци", "2,80", "400", ""],
["", "zapekanka-s-brokoli", "Запеканка с броколи", "2,80", "400", ""],
["", "kombinirana-zapekanka", "Комбинирана запеканка", "4,20", "420", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshki-ruladini", "Пилешки руладини", "4,20", "500", ""],
["", "pile-zhulien", "Пиле Жулиен", "4,20", "550", ""],
["", "khrupkavi-pileshki-bon-filencza", "Хрупкави пилешки бон филенца", "4,20", "450", ""],
["", "pile-teriyaki", "Пиле Терияки", "4,20", "400", ""],
["", "krekhki-pileshki-kscheta", "Крехки пилешки късчета", "4,20", "430", ""],
["", "pileshko-file-ss-susheni-domati", "Пилешко филе със сушени домати", "4,90", "450", ""]

            ],

            "Ястия със свинско месо": [
                ["", "sochna-vratna-przhola", "Сочна вратна пържола", "4,90", "450", ""],
["", "svinski-kareta-s-gbi", "Свински карета с гъби", "4,90", "400", ""],
["", "vlchi-khapki-ot-svinsko-bon-file", "Вълчи хапки от свинско бон филе", "5,60", "300", ""],
["", "kntri-rebra-bbq", "Кънтри ребра BBQ", "5,60", "550", ""],
["", "svinski-dzholan-na-peshh-bez-kost-s-gbi-i-bejbi-morkovi", "Свински джолан на пещ без кост с гъби и бейби моркови", "4,90", "450", ""]

            ],

            "Ястия без месо": [
                ["", "brokoli-ss-sos-rokfor", "Броколи със сос Рокфор", "3,50", "350", ""],
["", "zapecheni-presni-kartofi", "Запечени пресни картофи", "2,80", "300", ""],
["", "spanak-ss-sirene-i-yajcze", "Спанак със сирене и яйце", "3,50", "300", ""]

            ],

            "sachs": [
                ["", "pileshki-sach", "Пилешки сач", "5,60", "460", ""],
["", "svinski-sach", "Свински сач", "6,30", "460", ""],
["", "sach-s-teleshko-pileshko-i-svinsko", "Сач с телешко, пилешко и свинско", "10,50", "800", ""],
["", "sach-s-pileshko-i-svinsko", "Сач с пилешко и свинско", "9,10", "750", ""]

            ],

            "grill": [
                ["", "domashen-sudzhuk-s-grilovana-czarevicza-i-lyutenicza", "Домашен суджук с грилована царевица и лютеница", "4,90", "380", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "250", ""],
["", "svinsko-bon-file", "Свинско бон филе", "4,90", "200", ""],
["", "svinski-rebra", "Свински ребра", "4,90", "400", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "250", ""],
["", "pileshko-bon-file", "Пилешко бон филе", "3,50", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "350", ""],
["", "meshano-plato", "Мешано плато", "18,90", "1400", ""],
["", "domashni-kyufteta-s-przheni-kartofki-i-lyutenicza", "Домашни кюфтета с пържени картофки и лютеница", "3,50", "", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "2,80", "400", ""]

            ],

            "Топли мезета": [
                ["", "pileshki-drobcheta-na-tigan-s-luk", "Пилешки дробчета на тиган с лук", "2,80", "350", ""],
["", "pileshki-vodenichki-na-tigan-s-luk", "Пилешки воденички на тиган с лук", "2,80", "300", ""],
["", "panirani-pileshki-vodenichki", "Панирани пилешки воденички", "2,80", "250", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "3,50", "200", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "4,20", "250", ""],
["", "pileshki-srcza-v-soev-sos", "Пилешки сърца в соев сос", "3,50", "250", ""],
["", "pileshko-plato", "Пилешко плато", "7,70", "750", ""]

            ],

            "dry-appetizer": [
                ["", "sirene", "Сирене", "0,70", "100", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "100", ""],
["", "sudzhuk", "Суджук", "0,70", "50", ""],
["", "lukanka", "Луканка", "0,70", "50", ""],
["", "file-elena", "Филе Елена", "1,40", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "proshuto", "Прошуто", "2,10", "50", ""]

            ],

            "garnish": [
                ["", "svezha-garnitura", "Свежа гарнитура", "1,40", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "150", ""],
["", "grilovana-czarevicza", "Грилована царевица", "1,40", "180", ""]

            ],

            "Пърленки и хляб": [
                ["", "prlenka-s-maslo", "Пърленка с масло", "0,70", "250", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "300", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "300", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "300", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "prepechena-filiya-khlyab", "Препечена филия хляб", "0,00", "", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "250", ""],
["", "prlenka-s-yajcze-i-sirene", "Пърленка с яйце и сирене", "1,40", "300", ""]

            ],

            "sauces": [
                ["", "bbq-sos", "BBQ сос", "0,70", "50", ""],
["", "gben-sos", "Гъбен сос", "0,70", "120", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "50", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "pikanten-sos", "Пикантен сос", "0,00", "50", ""],
["", "sos-czezar", "Сос Цезар", "0,70", "50", ""],
["", "mlechno-zelenchukov-sos", "Млечно-зеленчуков сос", "0,70", "50", ""],
["", "med-i-gorchicza", "Мед и горчица", "0,70", "50", ""],
["", "demi-glas", "Деми-глас", "0,70", "120", ""]

            ],

            "additives": [
                ["", "sudzhuk", "Суджук", "0,70", "30", ""],
["", "lukanka", "Луканка", "0,70", "30", ""],
["", "pusheno-pileshko", "Пушено пилешко", "0,70", "30", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "bekon", "Бекон", "0,70", "50", ""],
["", "proshuto", "Прошуто", "1,40", "50", ""],
["", "file-elena", "Филе Елена", "1,40", "50", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "kashkaval", "Кашкавал", "0,00", "50", ""],
["", "sirene", "Сирене", "0,00", "50", ""],
["", "sino-sirene", "Синьо сирене", "0,70", "50", ""],
["", "topeno-sirene", "Топено сирене", "0,00", "50", ""],
["", "parmezan", "Пармезан", "1,40", "50", ""],
["", "maslini", "Маслини", "0,00", "30", ""],
["", "czarevicza", "Царевица", "0,00", "30", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "50", ""],
["", "chushki", "Чушки", "0,00", "50", ""],
["", "chesn", "Чесън", "0,00", "10", ""],
["", "luk", "Лук", "0,00", "50", ""],
["", "gbi", "Гъби", "0,00", "30", ""],
["", "brokoli", "Броколи", "0,00", "50", ""],
["", "chetvrt-limon", "Четвърт лимон", "0,00", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""]

            ],

            "desserts": [
                ["", "czedeno-kiselo-mlyako", "Цедено кисело мляко", "1,40", "", ""],
["", "torta-tri-shokolada", "Торта три шоколада", "2,80", "150", ""],
["", "krem-karamel", "Крем карамел", "0,70", "150", ""],
["", "torta-s-maskarpone-i-byal-shokolad", "Tорта с маскарпоне и бял шоколад", "2,10", "150", ""],
["", "biskvitena-torta", "Бисквитена торта", "1,40", "200", ""],
["", "torta-lindt", "Торта Линдт", "2,10", "150", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "", "https://images.deliveryhero.io/image/fd-bg/Products/691701.jpg"]

            ],

            "drinks": [
                ["", "mineralna-voda", "Минерална вода", "1,40", "1000", ""],
["", "studen-chaj", "Студен чай", "1,40", "330", ""],
["", "red-bul", "Ред Бул", "2,80", "250", ""]

            ],

            "Пиво": [
                ["", "radeberger", "Радебергер", "2,10", "330", ""],
["", "grolsh", "Гролш", "2,80", "330", ""],
["", "stolichno-vajs", "Столично Вайс", "2,10", "400", ""]

            ],

            "Винен лист": [
                ["", "pentagram-shardone---byalo-vino", "Пентаграм Шардоне - бяло вино", "8,40", "750", ""],
["", "solenite-khlmove-shardone-vionie-i-sovinon-blan---byalo-vino", "Солените хълмове Шардоне, Вионие и Совиньон Блан - бяло вино", "17,50", "750", ""],
["", "silvr-ejndzhl-sovinon-blan---byalo-vino", "Силвър Ейнджъл Совиньон Блан - бяло вино", "7,70", "", ""],
["", "babich-sovinon-blan-marlboro", "Бабич Совиньон Блан, Марлборо", "14,70", "", ""],
["", "pentagram-sira---roze", "Пентаграм Сира - розе", "8,40", "750", ""],
["", "solenite-khlmove-kaberne-sovinon-sira-i-kaberne-fran---roze", "Солените хълмове Каберне Совиньон, Сира и Каберне Фран - розе", "17,50", "750", ""],
["", "katarzhina-le-roze", "Катаржина Ле Розе", "16,80", "750", ""],
["", "pentagram-pino-noar---cherveno-vino", "Пентаграм Пино Ноар - червено вино", "8,40", "750", ""],
["", "solenite-khlmove-kaberne-sovinon-merlo-kaberne-fran-i-sira---cherveno-vino", "Солените хълмове Каберне Совиньон, Мерло, Каберне Фран и Сира - червено вино", "17,50", "750", ""],
["", "midalidare-merlo-i-kaberne-fran---cherveno-vino", "Мидалидаре Мерло и Каберне Фран - червено вино", "8,40", "", ""]

            ]
        }', 
        'slug' => 'az-i-ti',
        'business_name' => 'Аз и Ти',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Асти 10',
        'address_additional' => '',
        'coords_x' => '43.07950211',
        'coords_y' => '25.60808182',
        'phone' => '+359896433799',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-s-kinoa", "Салата с киноа", "4,20", "350", ""],
["", "salata-vitamina", "Салата Витамина", "2,80", "300", ""],
["", "shopska-salata", "Шопска салата", "3,50", "400", ""],
["", "zelena-salata", "Зелена салата", "3,50", "350", ""],
["", "grczka-salata-ss-sirene-feta", "Гръцка салата със сирене Фета", "4,90", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "salata-czezar-s-pileshko-meso", "Салата Цезар с пилешко месо", "6,30", "400", ""],
["", "domati-s-moczarela", "Домати с моцарела", "4,90", "350", ""]

            ],

            "soups": [
                ["", "kartofena-krem-supa", "Картофена крем супа", "2,10", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "gbena-supa", "Гъбена супа", "1,40", "300", ""],
["", "teleshko-vareno", "Телешко варено", "2,80", "300", ""],
["", "tarator", "Таратор", "1,40", "300", ""]

            ],

            "starters": [
                ["", "panirani-sirencza-na-khapki", "Панирани сиренца на хапки", "4,20", "200", ""],
["", "arbanashka-topenicza", "Арбанашка топеница", "4,90", "250", ""],
["", "sirene-na-plocha-s-med-i-orekhi", "Сирене на плоча с мед и орехи", "4,90", "160", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "4,20", "200", ""],
["", "panirani-kashkavaleni-khapki", "Панирани кашкавалени хапки", "4,20", "200", ""],
["", "pileshki-khapki", "Пилешки хапки", "4,90", "250", ""],
["", "pileshki-filencza-v-kornflejks-s-mlechen-sos", "Пилешки филенца в корнфлейкс с млечен сос", "5,60", "290", ""],
["", "kyuftencza-ot-kinoa-ss-spanak-i-sirena", "Кюфтенца от киноа със спанак и сирена", "4,90", "200", ""],
["", "ezik-v-maslo", "Език в масло", "6,30", "150", ""]

            ],

            "fish": [
                ["", "som-file-na-plocha-s-grilovani-zelenchuczi", "Сом филе на плоча с гриловани зеленчуци", "9,10", "350", ""],
["", "file-ot-somga-s-asperzhi", "Филе от сьомга с аспержи", "13,30", "350", ""],
["", "rulovana-pstrva", "Рулована пъстърва", "10,50", "350", ""],
["", "panirani-kalmari-po-grczki", "Панирани калмари по гръцки", "8,40", "200", ""],
["", "pstrva-na-plocha", "Пъстърва на плоча", "8,40", "350", ""],
["", "czipura-na-plocha", "Ципура на плоча", "11,90", "400", ""],
["", "lavrak-na-plocha", "Лаврак на плоча", "11,90", "400", ""],
["", "somga-file-na-plocha", "Сьомга филе на плоча", "13,30", "350", ""],
["", "przhen-sharan-s-garnitura-vareni-kartofi", "Пържен шаран с гарнитура варени картофи", "7,00", "400", ""]

            ],

            "Специалитети от пилешко месо": [
                ["", "pileshko-file-s-manatarki", "Пилешко филе с манатарки", "7,70", "300", ""],
["", "pileshko-file-zhulien", "Пилешко филе Жулиен", "6,30", "200", ""],
["", "pileshko-file-zapecheno-s-moczarela", "Пилешко филе, запечено с моцарела", "8,40", "350", ""],
["", "pileshki-kscheta-s-cheren-oriz", "Пилешки късчета с черен ориз", "7,00", "450", ""]

            ],

            "Специалитети от свинско месо": [
                ["", "drusan-kebap-ss-svinsko-bon-file-i-svinski-vrat", "Друсан кебап със свинско бон филе и свински врат", "9,80", "300", ""],
["", "arbanashko-meze", "Арбанашко мезе", "9,10", "300", ""],
["", "svinska-ribicza-s-manatarki", "Свинска рибица с манатарки", "9,10", "300", ""],
["", "svinsko-file-zhulien", "Свинско филе Жулиен", "7,70", "200", ""]

            ],

            "grill": [
                ["", "domashni-kyufteta-na-skara", "Домашни кюфтета на скара", "4,90", "", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "200", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "5,60", "250", ""],
["", "svinska-ribicza-na-plocha", "Свинска рибица на плоча", "6,30", "200", ""]

            ],

            "garnish": [
                ["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""],
["", "byal-oriz", "Бял ориз", "1,40", "200", ""],
["", "brokoli", "Броколи", "2,10", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "vareni-kartofi", "Варени картофи", "1,40", "300", ""],
["", "cheren-oriz", "Черен ориз", "2,10", "150", ""],
["", "zadusheni-kartofi-s-kopr-i-chesen", "Задушени картофи с копър и чесен", "2,10", "250", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "2,10", "300", ""],
["", "pikantni-kartofi-po-selski", "Пикантни картофи по селски", "2,10", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "200", ""],
["", "shareni-kartofi", "Шарени картофи", "2,80", "300", ""]

            ],

            "Специалитети на сач": [
                ["", "zelenchukov-sach", "Зеленчуков сач", "7,00", "400", ""],
["", "pile-ss-zelenchuczi-i-smetana", "Пиле със зеленчуци и сметана", "9,10", "400", ""],
["", "meshano-meso-na-sach", "Мешано месо на сач", "10,50", "350", ""]

            ],

            "Паста и ризото": [
                ["", "spageti-boloneze", "Спагети Болонезе", "5,60", "450", ""],
["", "spageti-karbonara", "Спагети Карбонара", "5,60", "450", ""],
["", "spageti-formadzhi", "Спагети Формаджи", "5,60", "300", ""],
["", "rizoto-s-tikvichki-i-skaridi", "Ризото с тиквички и скариди", "7,70", "", ""],
["", "rizoto-ss-somga", "Ризото със сьомга", "7,70", "350", ""],
["", "rizoto-ss-spanak-i-frenski-sirena", "Ризото със спанак и френски сирена", "7,00", "250", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "5,60", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "500", ""],
["", "vegetariana", "Вегетариана", "5,60", "500", ""],
["", "roma", "Рома", "6,30", "500", ""],
["", "piperone", "Пипероне", "6,30", "500", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "6,30", "500", ""],
["", "palermo", "Палермо", "6,30", "500", ""],
["", "milano", "Милано", "6,30", "500", ""],
["", "kaprichoza", "Капричоза", "6,30", "500", ""]

            ],

            "Хляб и хлебни изделия": [
                ["", "chabata", "Чабата", "0,70", "", ""],
["", "prlenka", "Пърленка", "1,40", "170", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "1,40", "170", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "200", ""],
["", "prlenka-s-yajcze-i-sirene", "Пърленка с яйце и сирене", "1,40", "250", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "250", ""]

            ],

            "Следястия и добавки": [
                ["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""]

            ],

            "desserts": [
                ["", "czedeno-mlyako", "Цедено мляко", "2,10", "", ""],
["", "domashna-medena-torta", "Домашна медена торта", "2,80", "", ""],
["", "shokoladovo-sufle-s-techen-czentr", "Шоколадово суфле с течен център", "4,20", "", ""],
["", "biskvitena-torta-s-maskarpone-i-sladko-ot-borovinki", "Бисквитена торта с маскарпоне и сладко от боровинки", "2,80", "", ""]

            ]
        }', 
        'slug' => 'alegro',
        'business_name' => 'Alegro',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Цар Тодор Светослав 15',
        'address_additional' => '',
        'coords_x' => '43.08047157',
        'coords_y' => '25.63290016',
        'phone' => '+35962602332',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "pileshka-supa", "Пилешка супа", "1,40", "400", ""],
["", "tarator", "Таратор", "1,40", "400", ""]

            ],

            "Яхния": [
                ["", "bob-yakhniya", "Боб яхния", "1,40", "300", ""]

            ],

            "Пържени ястия": [
                ["", "pileshki-shniczel-s-garnitura-zele-i-morkovi", "Пилешки шницел с гарнитура зеле и моркови", "2,10", "", ""],
["", "kartofeni-kyufteta-s-garnitura", "Картофени кюфтета с гарнитура", "2,10", "", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "kashkaval-pane--garnitura", "Кашкавал пане + гарнитура", "3,50", "150", ""]

            ],

            "grill": [
                ["", "pileshka-przhola-ot-but---bez-kozha", "Пилешка пържола от бут - без кожа", "2,80", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "120", ""],
["", "kebapche", "Кебапче", "0,70", "80", ""],
["", "kyufte", "Кюфте", "0,70", "80", ""]

            ],

            "Ястия с яйца": [
                ["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,80", "", ""],
["", "yajcza-natyur", "Яйца натюр", "1,40", "", ""],
["", "mish-mash-250", "Миш-маш (250", "2,10", "", ""]

            ],

            "Салати и гарнитури": [
                ["", "zele-s-morkovi", "Зеле с моркови", "1,40", "300", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""]

            ],

            "bread": [
                ["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/781969.jpg"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/781970.jpg"],
["", "fanta-limon", "Fanta Лимон", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/781971.jpg"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/781972.jpg"],
["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/781973.jpg"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/781974.jpg"]

            ]
        }', 
        'slug' => 'pri-naz',
        'business_name' => 'При НАЗ',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Ниш 1',
        'address_additional' => '',
        'coords_x' => '43.07550573',
        'coords_y' => '25.6150167',
        'phone' => '+359896919112',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "kapreze", "Капрезе", "4,20", "400", ""],
["", "shopska", "Шопска", "4,20", "400", ""],
["", "ovcharska", "Овчарска", "4,90", "400", ""],
["", "zele-i-morkovi", "Зеле и моркови", "2,80", "400", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "3,50", "400", ""]

            ],

            "pizza": [
                ["", "peperoni", "Пеперони", "6,30", "", ""],
["", "trubi", "Труби", "6,30", "", ""],
["", "margarita", "Маргарита", "4,90", "", ""],
["", "speczialna", "Специална", "6,30", "", ""],
["", "vegetariana", "Вегетариана", "5,60", "", ""],
["", "meksikana", "Мексикана", "6,30", "", ""],
["", "luchiano", "Лучиано", "6,30", "", ""],
["", "kaprichoza", "Капричоза", "6,30", "", ""],
["", "vlcha-picza", "Вълча пица", "6,30", "", ""],
["", "bella", "Белла", "6,30", "", ""],
["", "chetiri-sirena", "Четири сирена", "6,30", "", ""],
["", "dyuner-picza", "Дюнер пица", "6,30", "", ""]

            ],

            "dunners": [
                ["", "arabski-dyuner", "Арабски дюнер", "2,10", "", ""],
["", "grczki-dyuner", "Гръцки дюнер", "4,20", "", ""],
["", "porcziya-dyuner", "Порция дюнер", "8,40", "", ""]

            ],

            "sandwiches": [
                ["", "sandvich-trubi", "Сандвич Труби", "2,80", "", ""],
["", "sandvich-s-riba-ton", "Сандвич с риба тон", "2,80", "", ""],
["", "sandvich-ss-sirene", "Сандвич със сирене", "2,80", "", ""],
["", "vedzhi-sandvich", "Веджи сандвич", "2,80", "", ""],
["", "sandvich-s-kolbas", "Сандвич с колбас", "2,80", "", ""],
["", "toster-s-arabska-pitka-i-shunka", "Тостер с арабска питка и шунка", "2,80", "", ""],
["", "toster-s-arabska-pitka-i-bekon", "Тостер с арабска питка и бекон", "2,80", "", ""],
["", "khot-dog", "Хот дог", "2,10", "", ""],
["", "amerikanski-khot-dog", "Американски хот дог", "2,80", "", ""],
["", "klub-sandvich", "Клуб сандвич", "4,20", "400", ""],
["", "pita-klub", "Пита клуб", "8,40", "800", ""],
["", "sandvich-s-biftek", "Сандвич с бифтек", "4,90", "500", ""],
["", "sandvich-s-shniczel", "Сандвич с шницел", "4,90", "500", ""]

            ],

            "burgers": [
                ["", "pileshki-burger", "Пилешки бургер", "2,80", "", ""],
["", "vedzhi-burger", "Веджи бургер", "2,80", "", ""],
["", "burger-s-shniczel", "Бургер с шницел", "2,80", "", ""],
["", "burger-s-biftek", "Бургер с бифтек", "3,50", "", ""]

            ],

            "Порция бургери": [
                ["", "porcziya-klasicheski-burger", "Порция класически бургер", "5,60", "", ""],
["", "porcziya-chijz-burger", "Порция чийз бургер", "6,30", "", ""],
["", "porcziya-vedzhi-burger", "Порция веджи бургер", "5,60", "", ""],
["", "porcziya-chili-burger", "Порция чили бургер", "6,30", "", ""],
["", "porcziya-speczialen-burger", "Порция специален бургер", "7,00", "", ""],
["", "porcziya-big-burger", "Порция биг бургер", "8,40", "", ""]

            ],

            "Порция катми": [
                ["", "chiken", "Чикен", "6,30", "", ""],
["", "speczialni", "Специални", "6,30", "", ""],
["", "na-gotvacha", "На готвача", "6,30", "", ""],
["", "el-gusto", "Ел густо", "7,00", "", ""],
["", "meksikana", "Мексикана", "6,30", "", ""],
["", "korleone", "Корлеоне", "7,00", "", ""],
["", "vegetariana", "Вегетариана", "6,30", "", ""]

            ],

            "katmi": [
                ["", "solena-katma", "Солена катма", "2,10", "", ""]

            ],

            "Сладки катми": [
                ["", "sladka-katma", "Сладка катма", "2,10", "", ""]

            ],

            "pasta": [
                ["", "karbonara", "Карбонара", "4,20", "400", ""],
["", "boloneze", "Болонезе", "4,20", "400", ""],
["", "brokoli-s-bekon", "Броколи с бекон", "4,20", "400", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-ss-sirene", "Запеканка със сирене", "4,90", "450", ""],
["", "zapekanka-s-pileshko-mesto", "Запеканка с пилешко место", "4,90", "450", ""],
["", "zapekanka-s-3-vida-kolbas", "Запеканка с 3 вида колбас", "4,90", "450", ""]

            ],

            "garnish": [
                ["", "porcziya-blanshirani-przheni-kartofi", "Порция бланширани пържени картофи", "2,10", "250", ""]

            ],

            "sauces": [
                ["", "trubi", "Труби", "0,70", "", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "", ""],
["", "gorchicza", "Горчица", "0,70", "", ""],
["", "chili", "Чили", "0,70", "", ""],
["", "ketchup", "Кетчуп", "0,70", "", ""],
["", "bbq-sos", "BBQ сос", "0,70", "", ""]

            ]
        }', 
        'slug' => 'fast-food-trubi',
        'business_name' => 'Fast Food Trubi',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5008',
        'address' => 'ул. Христо Донев 10',
        'address_additional' => '',
        'coords_x' => '43.06993653',
        'coords_y' => '25.60770296',
        'phone' => '+359897774413',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Скара и риба": [
                ["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "nadenichka-luks", "Наденичка лукс", "2,10", "", ""],
["", "pileshka-przhola---file", "Пилешка пържола - филе", "2,10", "", ""]

            ],

            "Постни ястия": [
                ["", "bob-yakhniya", "Боб яхния", "0,70", "250", ""]

            ],

            "garnish": [
                ["", "byal-oriz", "Бял ориз", "0,00", "50", ""],
["", "domashno-kartofeno-pyure", "Домашно картофено пюре", "0,00", "50", ""],
["", "kiselo-mlyako", "Кисело мляко", "0,00", "50", ""],
["", "kopr", "Копър", "0,00", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "lyutenicza", "Лютеница", "0,00", "50", ""],
["", "magdanoz", "Магданоз", "0,00", "", ""],
["", "orekhi", "Орехи", "0,00", "10", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "0,70", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "rezen-limon", "Резен лимон", "0,00", "", ""],
["", "sirene", "Сирене", "0,00", "50", ""],
["", "filiya-byal-khlyab", "Филия бял хляб", "0,00", "", ""],
["", "filiya-plnozrnest-khlyab", "Филия пълнозърнест хляб", "0,00", "", ""]

            ],

            "desserts": [
                ["", "krem-karamel", "Крем карамел", "0,00", "", ""]

            ]
        }', 
        'slug' => 'blgarska-kuhnya-st',
        'business_name' => 'Българска кухня ST',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'Ул. Козлуджа 1',
        'address_additional' => '',
        'coords_x' => '43.07402796',
        'coords_y' => '25.59633967',
        'phone' => '+359888868131',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "shopska", "Шопска", "2,10", "400", ""],
["", "ovcharska", "Овчарска", "2,80", "500", ""],
["", "kapreze", "Капрезе", "2,10", "300", ""]

            ],

            "Топли предястия": [
                ["", "presni-przheni-kartofi", "Пресни пържени картофи", "1,40", "250", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "1,40", "300", ""],
["", "topeni-sirencza-s-borovinkovo-sladko", "Топени сиренца с боровинково сладко", "2,10", "250", ""],
["", "khrupkavi-kashkavaleni-khapki", "Хрупкави кашкавалени  хапки", "2,10", "250", ""],
["", "pileshki-khapki-s-khrupkava-panirovka", "Пилешки хапки с хрупкава панировка", "2,80", "250", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "2,80", "200", ""],
["", "pileshki-prchiczi-ss-susam--chesnov-sos", "Пилешки пръчици със сусам + чеснов сос", "3,50", "250", ""]

            ],

            "Основни ястия": [
                ["", "domashni-kebapi-na-skara--sos-bbq", "Домашни кебапи на скара + сос BBQ", "2,10", "250", ""],
["", "domashni-kyufteta-na-barbekyu--bbq-sauce", "Домашни кюфтета на барбекю + BBQ sauce", "2,10", "350", ""],
["", "pileshki-krilcza-na-skara--bbq-sauce", "Пилешки крилца на скара + BBQ sauce", "2,10", "300", ""],
["", "pileshki-shishcheta-na-skara--sos-bbq", "Пилешки шишчета на скара + сос BBQ", "3,50", "300", ""],
["", "svinska-vratna-przhola-na-skara--bbq-sos", "Свинска вратна пържола на скара + BBQ сос", "3,50", "350", ""],
["", "svinski-grdi-bez-kost-na-skara--bbq-sos", "Свински гърди без кост на скара + BBQ сос", "3,50", "", ""],
["", "sudzhuk-na-skara--bbq-sos", "Суджук на скара + BBQ сос", "3,50", "250", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "2,80", "", ""],
["", "chetiri-sirena", "Четири сирена", "3,50", "500", ""],
["", "byagashho-pile", "Бягащо пиле", "4,20", "600", ""],
["", "kaprichoza", "Капричоза", "4,20", "600", ""],
["", "peperone", "Пепероне", "4,20", "500", ""],
["", "vlcha-picza", "Вълча пица", "4,20", "600", ""],
["", "detska-picza", "Детска пица", "2,80", "500", ""],
["", "vegetariana", "Вегетариана", "3,50", "500", ""],
["", "fejms", "Феймъс", "4,90", "600", ""],
["", "khavaj", "Хавай", "4,20", "600", ""]

            ],

            "Пърленки": [
                ["", "prlenka---obiknovena", "Пърленка - обикновена", "0,70", "250", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "250", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "1,40", "300", ""]

            ],

            "additives": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "bbq-sos", "BBQ сос", "0,00", "50", ""]

            ]
        }', 
        'slug' => 'snack-bar-famous',
        'business_name' => 'Snack Bar Famous',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5008',
        'address' => 'ул. Константин Паница 4',
        'address_additional' => '',
        'coords_x' => '43.0684119',
        'coords_y' => '25.6060521',
        'phone' => '+359884889967; +359886780202',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "malk-dyuner", "Малък дюнер", "2,80", "", ""],
["", "sreden-dyuner", "Среден дюнер", "2,80", "", ""],
["", "golyam-dyuner", "Голям дюнер", "3,50", "", ""],
["", "vegetarianski-dyuner", "Вегетариански дюнер", "2,10", "", ""],
["", "grczki-dyuner", "Гръцки дюнер", "4,20", "", ""],
["", "shish-tauk", "Шиш таук", "4,20", "", ""],
["", "porcziya-dyuner", "Порция дюнер", "6,30", "", ""],
["", "boks-vegetarianski", "Бокс вегетариански", "2,80", "", ""],
["", "boks-s-pileshko-meso", "Бокс с пилешко месо", "4,90", "", ""]

            ],

            "burgers": [
                ["", "pileshki-burger", "Пилешки бургер", "2,80", "", ""],
["", "svinski-burger", "Свински бургер", "2,80", "", ""],
["", "teleshki-burger", "Телешки бургер", "3,50", "", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "2,10", "", ""],
["", "burger-s-shunka", "Бургер с шунка", "2,80", "", ""]

            ],

            "additives": [
                ["", "dobavka-meso", "Дoбавка месо", "0,70", "", ""],
["", "malki-przheni-kartofki", "Малки пържени картофки", "1,40", "", ""],
["", "golemi-przheni-kartofki", "Големи пържени картофки", "2,10", "", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "kashkaval", "Кашкавал", "0,00", "", ""]

            ]
        }', 
        'slug' => 'doner-mery-m-77',
        'business_name' => 'Doner Mery M 77',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Мармалийска 35',
        'address_additional' => '',
        'coords_x' => '43.07445592',
        'coords_y' => '25.62658097',
        'phone' => '+359894076014',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "arabski-sreden-dyuner-s-ajran", "Арабски Среден дюнер с айран", "3,50", "", ""],
["", "teleshki-burger--teleshki-burger", "Телешки бургер + Телешки бургер", "5,60", "", ""]

            ],

            "dunners": [
                ["", "mini-dyuner", "Мини дюнер", "1,40", "", ""],
["", "arabski-dyuner", "Арабски дюнер", "2,10", "", ""],
["", "khkhl-dyuner", "ХХL Дюнер", "4,90", "", ""],
["", "porcziya-dyuner", "Порция Дюнер", "6,30", "", ""],
["", "grczki-dyuner", "Гръцки дюнер", "2,10", "", ""],
["", "vegetarianski-dyuner", "Вегетариански Дюнер", "2,10", "", ""]

            ],

            "burgers": [
                ["", "teleshki-burger", "Телешки Бургер", "2,80", "", ""],
["", "burger-s-meso-ot-dyuner", "Бургер с месо от дюнер", "3,50", "", ""],
["", "teleshki-burger-s-yajcze", "Телешки бургер с яйце", "2,80", "", ""],
["", "dvoen-teleshki-burger", "Двоен телешки бургер", "4,20", "", ""],
["", "chijzburger", "Чийзбургер", "3,50", "", ""],
["", "chijzburger-s-yajcze", "Чийзбургер с яйце", "4,20", "", ""],
["", "dvoen-chijzburger", "Двоен Чийзбургер", "5,60", "", ""],
["", "vegetarianski-burger", "Вегетариански Бургер", "2,10", "", ""]

            ],

            "Хотдог": [
                ["", "obiknoven", "Обикновен", "1,40", "", ""],
["", "amerikanski", "Американски", "2,10", "", ""]

            ],

            "additives": [
                ["", "yajcze", "Яйце", "0,00", "", ""],
["", "kashkaval", "Кашкавал", "0,70", "", ""],
["", "kartofi", "Картофи", "1,40", "", ""],
["", "teleshko-kyufte", "Телешко кюфте", "1,40", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/906616.jpg"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/906617.jpg"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/906618.jpg"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/906620.jpg"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/906624.jpg"]

            ],

            "drinks": [
                ["", "soda", "Сода", "0,70", "500", ""],
["", "ajryan", "Айрян", "0,70", "", ""],
["", "plodovo-mlyako", "Плодово мляко", "0,70", "", ""]

            ]
        }', 
        'slug' => 'doner-and-burger-express',
        'business_name' => 'Doner and Burger Express',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5002',
        'address' => 'ул. Васил Левски 15',
        'address_additional' => '',
        'coords_x' => '43.08057311',
        'coords_y' => '25.63063827',
        'phone' => '+359888536939',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "ovcharska-salata", "Овчарска салата", "4,20", "400", ""],
["", "tradiczionna-blgarska-shopska-salata", "Традиционна българска Шопска салата", "3,50", "400", ""],
["", "salata-s-morski-darove", "Салата с морски дарове", "7,00", "300", ""],
["", "redena-salata-s-rozov-domat-pechena-chushka-i-sirene", "Редена салата с розов домат, печена чушка и сирене", "5,60", "500", ""],
["", "klasicheska-zelena-salata-s-cheri-domati-i-parmezan", "Класическа зелена салата с чери домати и пармезан", "5,60", "300", ""],
["", "salata-nisoaz-s-riba-ton", "Салата Нисоаз с риба тон", "6,30", "450", ""],
["", "domatena-salata-s-moczarela-i-bilkovo-pesto", "Доматена салата с моцарела и билково песто", "4,90", "350", ""],
["", "salata-v-grczki-stil", "Салата в гръцки стил", "4,90", "450", ""]

            ],

            "Студени стартери и разядки": [
                ["", "tarama-khajver", "Тарама Хайвер", "4,20", "250", ""],
["", "plato-antipasti-v-italianski-stil", "Плато Антипасти в италиански стил", "5,60", "250", ""],
["", "domashno-prigotven-katk", "Домашно приготвен катък", "2,80", "250", ""],
["", "trio-tapenadi-podneseni-s-domashno-prigotvena-fokacha", "Трио Тапенади поднесени с домашно приготвена фокача", "2,80", "250", ""],
["", "malko-plato-s-ppesh", "Малко плато с пъпеш", "3,50", "250", ""],
["", "malko-plato-s-brusketi", "Малко плато с брускети", "7,70", "450", ""],
["", "plato-sirena", "Плато сирена", "10,50", "350", ""],
["", "plato-kolbasi", "Плато колбаси", "11,20", "300", ""]

            ],

            "Топли стартери": [
                ["", "pikantni-pileshki-krilcza-s-barbekyu-sos", "Пикантни пилешки крилца с барбекю сос", "4,20", "200", ""],
["", "zapecheni-brokoli-ss-sos-beshamel-i-sirena", "Запечени броколи със сос Бешамел и сирена", "4,20", "300", ""],
["", "domashno-prigotveni-lucheni-krgcheta-s-majonezen-dip", "Домашно приготвени лучени кръгчета с майонезен дип", "3,50", "250", ""],
["", "orizovi-kyuftencza-aranchini", "Оризови кюфтенца Аранчини", "4,20", "250", ""],
["", "panirani-kyuftencza-ot-tri-vida-sirene", "Панирани кюфтенца от три вида сирене", "4,20", "250", ""],
["", "krekhki-pileshki-filencza-v-khrupkava-panirovka", "Крехки пилешки филенца в хрупкава панировка", "4,20", "300", ""],
["", "panirano-khalumi-s-med-i-susam", "Панирано халуми с мед и сусам", "4,90", "200", ""],
["", "gshi-drob-s-karamelizirani-plodove", "Гъши дроб с карамелизирани плодове", "11,90", "250", ""]

            ],

            "Ястия от риба и морски дарове": [
                ["", "safrid-przhen-ili-na-skara", "Сафрид пържен или на скара", "5,60", "350", ""],
["", "presen-przhen-sharan-s-kartofi-sote", "Пресен пържен шаран с картофи соте", "6,30", "500", ""],
["", "plnena-pstrva-s-aromatni-zelenchuczi", "Пълнена пъстърва с ароматни зеленчуци", "7,70", "450", ""],
["", "file-ot-skumriya-na-tigan", "Филе от скумрия на тиган", "4,90", "450", ""],
["", "pryasna-pstrva-na-skara", "Прясна пъстърва на скара", "5,60", "450", ""],
["", "file-ot-lavrak-ss-sotirani-zelenchuczi", "Филе от лаврак със сотирани зеленчуци", "10,50", "350", ""],
["", "file-ot-czipura-ss-sotirani-zelenchuczi", "Филе от ципура със сотирани зеленчуци", "11,20", "350", ""],
["", "file-ot-somga-s-asperzhi-i-sos-kholandez", "Филе от сьомга с аспержи и сос Холандез", "12,60", "350", ""],
["", "kalmari-pane-ss-svezha-salatka", "Калмари пане със свежа салатка", "9,10", "350", ""],
["", "skaridi-sambuka", "Скариди Самбука", "12,60", "350", ""],
["", "sotiran-oktopod-s-aromatni-bilki", "Сотиран октопод с ароматни билки", "16,10", "300", ""]

            ],

            "Пилешко и патешко месо": [
                ["", "variacziya-na-pileshka-kavrma-s-poshirano-yajcze", "Вариация на пилешка кавърма с поширано яйце", "5,60", "300", ""],
["", "pileshki-grdi-s-bogat-smetanov-sos-s-manatarki", "Пилешки гърди с богат сметанов сос с манатарки", "7,00", "300", ""],
["", "pileshko-file-s-brokoli", "Пилешко филе с броколи", "5,60", "300", ""],
["", "krekhka-pileshka-przhola", "Крехка пилешка пържола", "5,60", "300", ""],
["", "pileshko-file-s-pechurki-grejvi-sos-i-kartofeno-pyure", "Пилешко филе с печурки, грейви сос и картофено пюре", "5,60", "300", ""],
["", "pateshki-grdi-s-yablkov-sos-i-sotirani-zelenchuczi", "Патешки гърди с ябълков сос и сотирани зеленчуци", "11,90", "350", ""]

            ],

            "Ястия от телешко и агнешко месо": [
                ["", "krekhki-agneshki-kotleti-ss-sos-demi-glas", "Крехки агнешки котлети със сос Деми глас", "19,60", "350", ""],
["", "teleshki-pepr-stek-ss-sotirani-zelenchuczi", "Телешки пепър стек със сотирани зеленчуци", "12,60", "450", ""],
["", "teleshko-stroganof", "Телешко Строганоф", "11,90", "450", ""],
["", "teleshki-burger-s-domashni-kartofki-i-barbekyu-sos", "Телешки бургер с домашни картофки и барбекю сос", "6,30", "400", ""],
["", "teleshki-stek-ot-bonfile", "Телешки стек от бонфиле", "13,30", "450", ""]

            ],

            "Ястия от свинско месо": [
                ["", "sochen-svinski-kotlet-s-yablkov-sos", "Сочен свински котлет с ябълков сос", "7,00", "450", ""],
["", "bavno-pecheni-svinski-grdi", "Бавно печени свински гърди", "6,30", "350", ""],
["", "svinski-bonfilencza-s-gorchichen-sos", "Свински бонфиленца с горчичен сос", "7,70", "350", ""],
["", "svinski-karencza-na-plocha-s-gben-sos", "Свински каренца на плоча с гъбен сос", "7,00", "350", ""],
["", "krekhk-svinski-vrat-ss-sos-sotirani-zelenchuczi", "Крехък свински врат със сос сотирани зеленчуци", "6,30", "350", ""],
["", "krekhki-rebrcza-s-bbq-sos", "Крехки ребърца с BBQ сос", "8,40", "500", ""]

            ],

            "Паста и ризото": [
                ["", "pasta-karbonara", "Паста Карбонара", "4,90", "250", ""],
["", "rizoto-milaneze", "Ризото Миланезе", "4,20", "300", ""],
["", "pasta-marinara", "Паста Маринара", "3,50", "250", ""],
["", "pasta-boloneze", "Паста Болонезе", "4,20", "300", ""],
["", "rizoto-s-manatarki-i-parmezan", "Ризото с манатарки и пармезан", "4,90", "250", ""],
["", "rizoto-s-morski-darove-i-sos-kholandez", "Ризото с морски дарове и сос Холандез", "5,60", "300", ""]

            ],

            "garnish": [
                ["", "sotirani-zelenchuczi", "Сотирани зеленчуци", "1,40", "150", ""],
["", "domashni-przheni-kartofi-s-majonezen-dip", "Домашни пържени картофи с майонезен дип", "2,10", "200", ""],
["", "studena-garnitura-domati-i-krastaviczi", "Студена гарнитура домати и краставици", "1,40", "200", ""],
["", "byal-oriz", "Бял ориз", "1,40", "150", ""],
["", "domashni-przheni-kartofki-ss-sirene", "Домашни пържени картофки със сирене", "2,10", "150", ""],
["", "kartofi-sote", "Картофи соте", "2,80", "200", ""],
["", "miks-ot-pryasno-izpecheni-mini-khlebcheta", "Микс от прясно изпечени мини хлебчета", "1,40", "150", ""]

            ],

            "desserts": [
                ["", "brauni", "Брауни", "2,80", "", ""],
["", "domashna-biskvitena-torta", "Домашна бисквитена торта", "2,80", "", ""],
["", "tiramisu", "Тирамису", "2,80", "", ""],
["", "krem-panna-kota", "Крем Панна кота", "2,10", "", ""],
["", "krem-bryule", "Крем Брюле", "2,10", "", ""],
["", "pechen-chijzkejk", "Печен чийзкейк", "3,50", "", ""]

            ],

            "beer": [
                ["", "tuborg", "Туборг", "1,40", "330", ""],
["", "stolichno-bok", "Столично бок", "2,10", "330", ""],
["", "shumensko", "Шуменско", "1,40", "500", ""],
["", "pirinsko", "Пиринско", "1,40", "500", ""],
["", "khajneken-0-alk", "Хайнекен 0% алк", "2,10", "330", ""],
["", "radeberger", "Радебергер", "2,10", "330", ""],
["", "efes", "Ефес", "2,10", "330", ""],
["", "estrea", "Естреа", "2,10", "330", ""],
["", "khajneken", "Хайнекен", "2,10", "330", ""],
["", "kozel-tmen", "Козел тъмен", "2,80", "500", ""],
["", "grolsh", "Гролш", "2,80", "330", ""],
["", "lefe", "Лефе", "2,80", "330", ""],
["", "korona", "Корона", "3,50", "355", ""]

            ]
        }', 
        'slug' => 'restorant-algara',
        'business_name' => 'Ресторант Алгара',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Христо Ботев 1',
        'address_additional' => '',
        'coords_x' => '43.0827451',
        'coords_y' => '25.6331526',
        'phone' => '+359884842469',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "kapreze", "Капрезе", "3,50", "", ""],
["", "czezar", "Цезар", "3,50", "", ""],
["", "oushn", "Оушън", "3,50", "", ""],
["", "shhshh", "Щ+Щ", "3,50", "", ""]

            ],

            "starters": [
                ["", "przheni-kartofki", "Пържени картофки", "1,40", "", ""],
["", "przheni-kartofki-ss-sirene", "Пържени картофки със сирене", "1,40", "", ""],
["", "krekhko-teleshko-eziche-v-maslcze", "Крехко телешко езиче в масълце", "4,20", "", ""]

            ],

            "Вкусотийски на плоча": [
                ["", "kyufte-na-plocha-svinsko", "Кюфте на плоча свинско", "0,70", "", ""],
["", "kyufte-na-plocha-smes", "Кюфте на плоча смес", "1,40", "", ""],
["", "kyufte-na-plocha-teleshko-blek-angs", "Кюфте на плоча телешко Блек Ангъс", "1,40", "", ""],
["", "kebapche-na-plocha", "Кебапче на плоча", "0,70", "", ""],
["", "karnache", "Карначе", "0,70", "", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "", ""],
["", "meshana-skara", "Мешана скара", "9,80", "", ""]

            ],

            "Бургери и сандвичи": [
                ["", "gurme-sandvich-zlatnata-gska", "Гурме сандвич Златната гъска", "5,60", "", ""],
["", "gurme-sandvich-zlatnata-gska-s-manatarki", "Гурме сандвич Златната гъска с манатарки", "6,30", "", ""],
["", "teleshki-burger-blek-angs", "Телешки бургер Блек Ангъс", "6,30", "", ""],
["", "svinski-burger", "Свински бургер", "3,50", "", ""],
["", "pileshki-burger", "Пилешки бургер", "2,80", "", ""],
["", "burger-trimata-glupaczi", "Бургер Тримата глупаци", "9,10", "", ""],
["", "burger-s-shunka-i-kashkaval", "Бургер с шунка и кашкавал", "2,10", "", ""],
["", "burger-s-bekon", "Бургер с бекон", "2,10", "", ""],
["", "kilifarska-usukanicza", "Килифарска Усуканица", "2,10", "", ""],
["", "sandvich-baj-gano", "Сандвич Бай Ганьо", "2,10", "", ""],
["", "sandvicht-na-khitr-petr", "Сандвичът на Хитър Петър", "1,40", "", ""],
["", "burger-marko-totev", "Бургер Марко Тотев", "5,60", "", ""]

            ],

            "pizza": [
                ["", "viva-italiya", "Вива Италия", "6,30", "", ""],
["", "bachi-la-bianchi", "Бачи ла Бианчи", "4,90", "", ""],
["", "salsiche", "Салсиче", "4,90", "", ""],
["", "milano", "Милано", "7,00", "", ""],
["", "prego", "Прего", "6,30", "", ""],
["", "blu-oushn", "Блу Оушън", "5,60", "", ""],
["", "kuin", "Куин", "6,30", "", ""],
["", "kapitanska", "Капитанска", "5,60", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,90", "", ""],
["", "vegantino", "Вегантино", "4,20", "", ""],
["", "proshuto", "Прошуто", "4,90", "", ""],
["", "kalczone-oupn", "Калцоне Оупън", "4,20", "", ""],
["", "neapolitana", "Неаполитана", "4,20", "", ""],
["", "diablo", "Диабло", "4,90", "", ""]

            ],

            "Ляхмаджун": [
                ["", "lyakhmadzhun", "Ляхмаджун", "2,10", "", ""],
["", "lyakhmadzhun-s-teleshko-i-kartofki", "Ляхмаджун с телешко и картофки", "2,80", "", ""],
["", "lyakhmadzhun-s-teleshko-pileshko-i-kartofki", "Ляхмаджун с телешко, пилешко и картофки", "3,50", "", ""]

            ],

            "Следястия": [
                ["", "iztncheni-sirena-za-nishite-prekrasni-vina", "Изтънчени сирена за нишите прекрасни вина", "7,00", "200", ""],
["", "mesno-delikatesno-plato", "Месно деликатесно плато", "8,40", "200", ""],
["", "plato-ot-kolbasi-i-sirena", "Плато от колбаси и сирена", "7,70", "200", ""]

            ],

            "Съкровени желания": [
                ["", "yajcze", "Яйце", "0,00", "", ""],
["", "ketchup", "Кетчуп", "0,00", "", ""],
["", "majoneza", "Майонеза", "0,00", "", ""],
["", "gorchicza", "Горчица", "0,00", "", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "", ""],
["", "naryazani-maslini", "Нарязани маслини", "0,00", "", ""],
["", "luk", "Лук", "0,00", "", ""],
["", "domashna-chesnova-pasta", "Домашна чеснова паста", "0,00", "", ""],
["", "krem-ot-sirene-s-tryufeli", "Крем от сирене с трюфели", "0,00", "", ""],
["", "sladko-ot-lyuti-chushki-godzhi-beri-i-tikveni-semki", "Сладко от люти чушки, годжи бери и тиквени семки", "0,00", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""]

            ],

            "beer": [
                ["", "britos-ken", "Бритос кен", "0,70", "500", ""],
["", "britos-continental-lager", "Бритос Continental lager", "1,40", "500", ""],
["", "britos-hoppy-blond", "Бритос Hoppy blond", "1,40", "500", ""],
["", "britos-opushena", "Бритос Опушена", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'shch-shch',
        'business_name' => 'Щ+Щ',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'Ул. Бузлуджа 18',
        'address_additional' => '',
        'coords_x' => '43.084688',
        'coords_y' => '25.63182649',
        'phone' => '+359877361280',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
["", "grczka-salata", "Гръцка салата", "2,80", "400", ""],
["", "vlcha-salata", "Вълча салата", "4,20", "550", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "energijna-salata", "Енергийна салата", "2,80", "350", ""],
["", "snezhanka", "Снежанка", "2,80", "300", ""],
["", "kapreze", "Капрезе", "3,50", "300", ""],
["", "svezha-salata-s-kinoa-i-byala-riba", "Свежа салата с киноа и бяла риба", "4,20", "400", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "350", ""],
["", "domati-pechen-piper-i-katk", "Домати, печен пипер и катък", "2,80", "400", ""],
["", "spanak-s-kinoa", "Спанак с киноа", "4,20", "350", ""],
["", "salata-s-pushena-somga", "Салата с пушена сьомга", "4,90", "350", ""],
["", "salata-s-koze-sirene", "Салата с козе сирене", "4,90", "350", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "marchela", "Марчела", "4,90", "", ""],
["", "specziale", "Специале", "4,90", "", ""],
["", "byagashho-pile", "Бягащо пиле", "4,90", "", ""],
["", "papagala", "Папагала", "4,90", "", ""],
["", "francheska", "Франческа", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "prezident", "Президент", "4,90", "", ""],
["", "piperone", "Пипероне", "4,20", "", ""],
["", "italiana", "Италиана", "4,90", "", ""],
["", "dyavolska", "Дяволска", "4,90", "", ""],
["", "kalczone", "Калцоне", "4,90", "", ""],
["", "ivo", "Иво", "5,60", "", ""],
["", "neapolitana", "Неаполитана", "4,90", "", ""],
["", "vegetariana", "Вегетариана", "4,20", "", ""],
["", "picza-sirena", "Пица Сирена", "4,90", "", ""],
["", "picza-proshuto-fungi", "Пица Прошуто фунги", "4,90", "", ""]

            ],

            "Фамилна пица": [
                ["", "margarita", "Маргарита", "17,50", "1500", ""],
["", "marchela", "Марчела", "17,50", "1500", ""],
["", "specziale", "Специале", "17,50", "1500", ""],
["", "byagashho-pile", "Бягащо пиле", "17,50", "1500", ""],
["", "papagala", "Папагала", "17,50", "1500", ""],
["", "francheska", "Франческа", "17,50", "1500", ""],
["", "kaprichoza", "Капричоза", "17,50", "1500", ""],
["", "prezident", "Президент", "17,50", "1500", ""],
["", "piperone", "Пипероне", "17,50", "1500", ""],
["", "italiana", "Италиана", "17,50", "1500", ""],
["", "dyavolska", "Дяволска", "17,50", "1500", ""],
["", "kalczone", "Калцоне", "17,50", "1500", ""],
["", "ivo", "Иво", "17,50", "1500", ""],
["", "neapolitana", "Неаполитана", "17,50", "1500", ""],
["", "vegetariana", "Вегетариана", "17,50", "1500", ""],
["", "picza-sirena", "Пица Сирена", "17,50", "1500", ""],
["", "picza-s-riba-ton", "Пица с риба тон", "17,50", "1500", ""],
["", "picza-proshuto-fungi", "Пица Прошуто фунги", "17,50", "1500", ""]

            ],

            "Пърленки": [
                ["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "260", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "1,40", "280", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "prepechena-filijka", "Препечена филийка", "0,00", "", ""],
["", "gola-prlenka", "Гола пърленка", "0,70", "200", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "0,70", "200", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "260", ""]

            ],

            "sachs": [
                ["", "khajdushka-dska", "Хайдушка дъска", "20,30", "1500", ""],
["", "pileshki-sach", "Пилешки сач", "6,30", "600", ""],
["", "svinski-sach", "Свински сач", "6,30", "600", ""],
["", "kombiniran-sach", "Комбиниран сач", "7,00", "600", ""]

            ],

            "alaminuti": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "250", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "300", ""],
["", "teleshko-shkembe-i-ezik-s-gbi", "Телешко шкембе и език с гъби", "5,60", "350", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,90", "200", ""],
["", "tikvichki-po-grczki-s-chesnov-sos", "Тиквички по гръцки с чеснов сос", "2,80", "300", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "300", ""],
["", "brokoli-pane-s-topeno-sirene", "Броколи пане с топено сирене", "3,50", "300", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "200", ""],
["", "khrupkavi-kashkavalcheta", "Хрупкави кашкавалчета", "2,80", "200", ""],
["", "sirencza-pane", "Сиренца пане", "2,80", "200", ""],
["", "topeni-sirencza-s-khrupkava-panirovka-i-sladko", "Топени сиренца с хрупкава панировка и сладко", "3,50", "250", ""],
["", "gbi-v-maslo", "Гъби в масло", "2,80", "250", ""]

            ],

            "pasta": [
                ["", "spageti-ss-sirena", "Спагети със сирена", "3,50", "400", ""],
["", "korleone", "Корлеоне", "3,50", "500", ""],
["", "boloneze", "Болонезе", "3,50", "400", ""],
["", "karbonara", "Карбонара", "3,50", "450", ""]

            ],

            "Запеканки": [
                ["", "kartofi-s-pusheno-pile", "Картофи с пушено пиле", "4,20", "400", ""],
["", "kartofi-s-bekon", "Картофи с бекон", "4,20", "400", ""],
["", "kombinirana", "Комбинирана", "4,20", "400", ""],
["", "vegetarianska", "Вегетарианска", "3,50", "400", ""],
["", "brokoli-na-peshh", "Броколи на пещ", "4,20", "400", ""]

            ],

            "Свински вкусотии": [
                ["", "svinski-drob-na-tigan-s-presni-zelenchuczi-i-nakhut", "Свински дроб на тиган с пресни зеленчуци и нахут", "4,20", "350", ""],
["", "svinsko-s-pechurki-i-maskarpone", "Свинско с печурки и маскарпоне", "6,30", "350", ""],
["", "svinsko-meshano-v-tigan", "Свинско мешано в тиган", "6,30", "350", ""],
["", "suzhduk-na-greben", "Суждук на гребен", "4,20", "", ""],
["", "meshana-skara", "Мешана скара", "11,90", "700", ""],
["", "vlchi-khapki-s-kartofi-sote", "Вълчи хапки с картофи соте", "4,90", "400", ""],
["", "svinski-shishcheta-s-chushka-i-luk", "Свински шишчета с чушка и лук", "2,80", "", ""],
["", "svinski-kscheta-s-gbi-i-kashkaval-vrkhu-prlenka", "Свински късчета с гъби и кашкавал върху пърленка", "5,60", "550", ""],
["", "vratna-przhola-na-skara", "Вратна пържола на скара", "4,90", "250", ""],
["", "svinski-rebrcza-na-skara", "Свински ребърца на скара", "4,90", "350", ""],
["", "kyufte", "Кюфте", "0,70", "100", ""],
["", "kebapche", "Кебапче", "0,70", "100", ""],
["", "karnache", "Карначе", "2,10", "200", ""]

            ],

            "Рибни вкусотии": [
                ["", "czyal-lavrak-na-skara-s-garnitura-vareni-kartofi-s-luk", "Цял Лаврак на скара с гарнитура варени картофи с лук", "10,50", "600", ""],
["", "kalmari-pane", "Калмари пане", "4,90", "200", ""],
["", "safrid-przhen", "Сафрид пържен", "4,90", "200", ""],
["", "czyala-czipura-na-skara-s-garnitura-vareni-kartofi-s-luk", "Цяла ципура на скара с гарнитура варени картофи с лук", "10,50", "600", ""]

            ],

            "Пилешки вкусотии": [
                ["", "pileshka-przhenicza-v-stomna", "Пилешка пърженица в стомна", "4,90", "400", ""],
["", "przheni-aromatni-pileshki-drobcheta-s-rigan-vino-i-soev-sos", "Пържени ароматни пилешки дробчета с риган, вино и соев сос", "3,50", "350", ""],
["", "przheni-pileshki-srcza-v-keremida", "Пържени пилешки сърца в керемида", "4,20", "350", ""],
["", "vodenichki-na-tigan-s-luk", "Воденички на тиган с лук", "2,80", "300", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "2,80", "200", ""],
["", "filencza-s-kornflejks-i-pikanten-sos", "Филенца с корнфлейкс и пикантен сос", "3,50", "200", ""],
["", "pileshki-purichki", "Пилешки пурички", "3,50", "200", ""],
["", "pileshka-przhola-ot-file-na-skara", "Пилешка пържола от филе на скара", "3,50", "250", ""],
["", "pileshka-przhola-ot-but-na-skara", "Пилешка пържола от бут на скара", "3,50", "250", ""],
["", "rizoto-s-pileshki-kscheta-i-gbi", "Ризото с пилешки късчета и гъби", "4,20", "400", ""],
["", "pileshki-shishcheta-s-chushka-i-luk", "Пилешки шишчета с чушка и лук", "2,80", "", ""],
["", "vodenichki-pane", "Воденички пане", "2,80", "200", ""]

            ],

            "Пилешки специалитети": [
                ["", "pileshki-filenczana-tigan-s-med-i-rozmarin", "Пилешки филенцана тиган с мед и розмарин", "4,20", "350", ""],
["", "pile-zhulien-s-manatarki-i-krema-sirene", "Пиле Жулиен с манатарки и крема сирене", "4,90", "350", ""],
["", "aromatni-pileshki-khapki-s-menta-pryasna-mashherka-i-sladko-kisel-sos", "Ароматни пилешки хапки с мента, прясна мащерка и сладко кисел сос", "4,20", "300", ""],
["", "pile-s-brokoli-i-karfiol-sino-sirene-i-yadki", "Пиле с броколи и карфиол, синьо сирене и ядки", "4,90", "350", ""],
["", "bolyarsko-pile", "Болярско пиле", "4,90", "450", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "1,40", "", ""],
["", "shokoladovo-sufle", "Шоколадово суфле", "2,80", "", ""],
["", "torta-belgijski-shokolad-s-tryufeli", "Торта белгийски шоколад с трюфели", "2,80", "", ""],
["", "domashna-babina-torta", "Домашна бабина торта", "2,80", "", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,70", "100", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "lyutenicza-s-luk", "Лютеница с лук", "0,00", "100", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "0,70", "100", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "100", ""],
["", "vareni-kartofi", "Варени картофи", "0,00", "100", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,00", "100", ""]

            ],

            "sauces": [
                ["", "soev-sos", "Соев сос", "0,70", "", ""],
["", "chesnov", "Чеснов", "0,70", "", ""],
["", "mlechen", "Млечен", "0,70", "", ""],
["", "pikanten", "Пикантен", "0,70", "", ""]

            ],

            "additives": [
                ["", "kashkaval", "Кашкавал", "0,00", "50", ""],
["", "sirene", "Сирене", "0,00", "50", ""],
["", "topeno-sirene", "Топено сирене", "0,00", "50", ""],
["", "shpek", "Шпек", "0,00", "50", ""],
["", "shunka", "Шунка", "0,70", "50", ""],
["", "maslini", "Маслини", "0,00", "30", ""],
["", "bekon", "Бекон", "0,70", "50", ""],
["", "czarevicza", "Царевица", "0,00", "30", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "50", ""],
["", "gbi", "Гъби", "0,00", "30", ""],
["", "yajcze", "Яйце", "0,00", "", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""],
["", "pukani-marinovani-chushleta", "Пукани мариновани чушлета", "0,00", "", ""],
["", "moczarela", "Моцарела", "0,70", "50", ""],
["", "piper", "Пипер", "0,00", "50", ""],
["", "sudzhuk", "Суджук", "0,70", "30", ""],
["", "pusheno-pileshko-file", "Пушено пилешко филе", "0,70", "30", ""]

            ]
        }', 
        'slug' => 'papagala-pizza-bar',
        'business_name' => 'Папагала Pizza Bar &amp; Grill',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Асти 10',
        'address_additional' => '',
        'coords_x' => '43.07965795',
        'coords_y' => '25.60777709',
        'phone' => '+359889723070',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Сезонни предложения": [
                ["", "salata-miks", "Салата микс", "4,90", "400", ""],
["", "salata-s-yagodi-sirena-i-yadki", "Салата с ягоди, сирена и ядки", "4,90", "400", ""],
["", "salata-lyato", "Салата Лято", "4,20", "500", ""],
["", "slncheva-salata", "Слънчева салата", "4,20", "650", ""],
["", "vienski-shniczel", "Виенски шницел", "9,80", "500", ""],
["", "przhen-safrid", "Пържен сафрид", "6,30", "450", ""],
["", "fish-end-chips", "Фиш енд чипс", "6,30", "500", ""],
["", "teleshki-domashen-sudzhuk-na-skara", "Телешки домашен суджук на скара", "7,00", "300", ""],
["", "teleshki-kyuftencza", "Телешки кюфтенца", "6,30", "400", ""],
["", "pateshki-srcza-na-bbq", "Патешки сърца на BBQ", "4,20", "240", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,90", "400", ""],
["", "kyuftencza-ot-tikvichki-s-mlechen-sos", "Кюфтенца от тиквички с млечен сос", "4,20", "350", ""],
["", "magdanozeni-kyuftencza-s-mlechen-sos", "Магданозени кюфтенца с млечен сос", "4,20", "350", ""],
["", "dinya", "Диня", "2,10", "450", ""],
["", "ppesh", "Пъпеш", "2,10", "450", ""]

            ],

            "salads": [
                ["", "salata-italiya", "Салата Италия", "5,60", "350", ""],
["", "lobi", "Лоби", "4,90", "550", ""],
["", "fatush", "Фатуш", "4,90", "600", ""],
["", "grczka", "Гръцка", "4,20", "550", ""],
["", "kapreze", "Капрезе", "4,90", "450", ""],
["", "veliko-trnovo", "Велико Търново", "3,50", "500", ""],
["", "shopska", "Шопска", "3,50", "450", ""],
["", "selska", "Селска", "4,90", "750", ""],
["", "viktoriya", "Виктория", "3,50", "500", ""],
["", "ovcharska", "Овчарска", "4,20", "450", ""],
["", "kolorit", "Колорит", "3,50", "450", ""],
["", "fitnes", "Фитнес", "4,90", "560", ""],
["", "zelena-salata", "Зелена салата", "2,80", "400", ""],
["", "vitamina", "Витамина", "2,80", "450", ""],
["", "czezar", "Цезар", "5,60", "450", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "450", ""],
["", "mecho", "Мечо", "3,50", "500", ""],
["", "zelena-salata-s-avokado-i-pushena-somga", "Зелена салата с авокадо и пушена сьомга", "5,60", "450", ""],
["", "meksiko", "Мексико", "3,50", "500", ""],
["", "snezhanka", "Снежанка", "3,50", "450", ""]

            ],

            "Сухи мезета": [
                ["", "pastrma", "Пастърма", "4,20", "100", ""],
["", "lukanka", "Луканка", "3,50", "100", ""],
["", "file-elena", "Филе Елена", "4,20", "100", ""]

            ],

            "starters": [
                ["", "paniran-kamember", "Паниран камембер", "6,30", "250", ""],
["", "panirani-khapki-sirene", "Панирани хапки сирене", "3,50", "250", ""],
["", "panirani-kashkavaleni-prchiczi", "Панирани кашкавалени пръчици", "4,20", "280", ""],
["", "panirani-topeni-sirencza", "Панирани топени сиренца", "4,20", "280", ""],
["", "panirani-pileshki-khapki", "Панирани пилешки хапки", "3,50", "300", ""],
["", "panirani-pileshki-zhulieni-s-kornflejks", "Панирани пилешки жулиени с корнфлейкс", "4,20", "400", ""],
["", "panirani-pileshki-zhulieni-s-parmezan", "Панирани пилешки жулиени с пармезан", "5,60", "350", ""],
["", "zapecheni-gbki-s-kashkaval", "Запечени гъбки с кашкавал", "4,90", "450", ""],
["", "przheni-kartofi", "Пържени картофи", "2,10", "300", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "350", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "400", ""],
["", "chesnovi-kartofki-po-selski", "Чеснови картофки по селски", "2,80", "300", ""],
["", "domashen-chips", "Домашен чипс", "2,80", "400", ""],
["", "przheni-tikvichki-s-mlechen-sos", "Пържени тиквички с млечен сос", "3,50", "450", ""],
["", "chushki-s-domaten-sos-i-plochka-sirene", "Чушки с доматен сос и плочка сирене", "3,50", "450", ""],
["", "mish-mash", "Миш маш", "3,50", "350", ""],
["", "omlet", "Омлет", "2,80", "350", ""],
["", "sirene-po-shopski", "Сирене по шопски", "4,20", "400", ""],
["", "teleshki-ezik", "Телешки език", "6,30", "400", ""],
["", "brokoli-s-chetiri-vida-sirena", "Броколи с четири вида сирена", "6,30", "540", ""],
["", "manatarki-v-zekhtin-mashherka-i-byalo-vino", "Манатарки в зехтин, мащерка и бяло вино", "7,00", "300", ""]

            ],

            "Запеканки": [
                ["", "zapekanka-s-pile-i-moczarela", "Запеканка с пиле и моцарела", "6,30", "500", ""],
["", "zapkanka-s-shunka", "Запканка с шунка", "4,90", "450", ""],
["", "zapekanka-ss-svinsko-i-sudzhuk", "Запеканка със свинско и суджук", "7,70", "500", ""],
["", "zapekanka-popaj", "Запеканка Попай", "4,20", "500", ""]

            ],

            "BBQ": [
                ["", "svinska-vratna-przhola-bez-kost", "Свинска вратна пържола без кост", "6,30", "300", ""],
["", "svinski-rebrcza", "Свински ребърца", "7,00", "450", ""],
["", "kotlet-po-grczki", "Котлет по гръцки", "8,40", "450", ""],
["", "domashen-teleshki-sudzhuk", "Домашен телешки суджук", "7,00", "450", ""],
["", "pateshki-srcza-na-shish", "Патешки сърца на шиш", "4,20", "240", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "250", ""],
["", "pileshka-przhola-ot-file", "Пилешка пържола от филе", "4,90", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "3,50", "450", ""],
["", "pileshki-shashlik", "Пилешки шашлик", "7,00", "490", ""],
["", "svinski-shashlik", "Свински шашлик", "7,00", "490", ""],
["", "zelenchuczi-na-bbq", "Зеленчуци на BBQ", "3,50", "400", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""]

            ],

            "Ястия със свинско месо": [
                ["", "svinsko-bon-file-rokfor", "Свинско бон филе Рокфор", "10,50", "450", ""],
["", "tiganiki", "Тиганики", "8,40", "650", ""],
["", "vienski-shniczel", "Виенски шницел", "9,80", "500", ""],
["", "svinski-karencza-s-parmezan", "Свински каренца с пармезан", "9,10", "300", ""],
["", "svinski-dzholan", "Свински джолан", "10,50", "1100", ""],
["", "bavno-pecheni-svinski-rebrcza", "Бавно печени свински ребърца", "7,70", "450", ""],
["", "pecheni-svinski-rebrcza-za-priyateli", "Печени свински ребърца за приятели", "23,10", "1400", ""],
["", "svinski-kscheta-ss-sotirani-gbki", "Свински късчета със сотирани гъбки", "8,40", "450", ""],
["", "kombiniran-sach", "Комбиниран сач", "11,20", "700", ""]

            ],

            "Ястия с телешко месо": [
                ["", "pepr-stek", "Пепър стек", "20,30", "300", ""],
["", "shniczel-po-vienski", "Шницел по виенски", "20,30", "300", ""]

            ],

            "Ястия с риба": [
                ["", "somga-file", "Сьомга филе", "11,20", "250", ""],
["", "lavrak-na-bbq", "Лаврак на BBQ", "11,20", "350", ""],
["", "file-lavrak-s-khrupkava-korichka", "Филе лаврак с хрупкава коричка", "13,30", "250", ""],
["", "pstrva-na-bbq", "Пъстърва на BBQ", "7,00", "350", ""],
["", "przheni-kalmari", "Пържени калмари", "9,10", "300", ""],
["", "kalmari-na-plocha", "Калмари на плоча", "9,10", "300", ""]

            ],

            "Ястия с пиле": [
                ["", "pile-rokfor", "Пиле Рокфор", "9,10", "500", ""],
["", "pile-parmedzhano", "Пиле Пармеджано", "9,10", "600", ""],
["", "pile-bearnez", "Пиле Беарнез", "7,00", "500", ""],
["", "pikantni-pileshki-khapki-pomidoro", "Пикантни пилешки хапки Помидоро", "7,00", "500", ""],
["", "pile-meksiko", "Пиле Мексико", "7,00", "500", ""],
["", "pile-alfredo", "Пиле Алфредо", "7,00", "450", ""],
["", "pile-ss-sotirani-presni-zelenchuczi", "Пиле със сотирани пресни зеленчуци", "8,40", "500", ""],
["", "pile-ss-spanak-i-kinoa", "Пиле със спанак и киноа", "9,10", "500", ""],
["", "pileshka-supa", "Пилешка супа", "2,10", "300", ""]

            ],

            "Паста и ризото": [
                ["", "spageti-boloneze", "Спагети Болонезе", "5,60", "500", ""],
["", "spageti-karbonara", "Спагети Карбонара", "5,60", "450", ""],
["", "taliateli-s-morski-darove", "Талиатели с морски дарове", "8,40", "450", ""],
["", "taliateli-s-pile-i-gbi", "Талиатели с пиле и гъби", "7,70", "450", ""],
["", "taliateli-vegetariana", "Талиатели Вегетариана", "5,60", "450", ""],
["", "rizoto-s-teleshko-i-manatarki", "Ризото с телешко и манатарки", "9,80", "550", ""],
["", "rizoto-s-pile", "Ризото с пиле", "5,60", "580", ""],
["", "rizoto-ss-spanak", "Ризото със спанак", "4,20", "450", ""],
["", "rizoto-fruti-di-mare", "Ризото фрути ди маре", "7,00", "580", ""],
["", "oriz-ss-zelenchuczi", "Ориз със зеленчуци", "4,20", "400", ""]

            ],

            "pizza": [
                ["", "torino", "Торино", "4,90", "", ""],
["", "chetiri-sezona", "Четири сезона", "4,20", "", ""],
["", "bekon", "Бекон", "4,20", "", ""],
["", "napoli", "Наполи", "4,20", "", ""],
["", "piza", "Пиза", "4,20", "", ""],
["", "popaj-s-meso", "Попай с месо", "4,90", "", ""],
["", "rukola-i-cheri", "Рукола и чери", "4,20", "", ""],
["", "asorti", "Асорти", "4,20", "", ""],
["", "milano", "Милано", "4,20", "", ""],
["", "proshuto", "Прошуто", "6,30", "", ""],
["", "parmedzhano", "Пармеджано", "4,90", "", ""],
["", "dyavola", "Дявола", "4,20", "", ""],
["", "piperone", "Пипероне", "4,90", "", ""],
["", "lobi", "Лоби", "4,90", "", ""],
["", "margarita", "Маргарита", "2,80", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "majstorska", "Майсторска", "4,20", "", ""],
["", "chetiri-sirena", "Четири сирена", "4,20", "", ""],
["", "vegetariana", "Вегетариана", "4,20", "", ""],
["", "roma", "Рома", "4,20", "", ""],
["", "predlozhenie-na-piczarya", "Предложение на пицаря", "5,60", "", ""]

            ],

            "sandwiches": [
                ["", "klub-sandvich", "Клуб сандвич", "4,90", "600", ""],
["", "burger", "Бургер", "6,30", "750", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,70", "150", ""],
["", "krastaviczi", "Краставици", "0,70", "150", ""],
["", "zele-s-morkovi", "Зеле с моркови", "0,70", "150", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "0,70", "150", ""],
["", "lyutenicza", "Лютеница", "0,70", "150", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""]

            ],

            "Пърленки": [
                ["", "prlenka-naturalna", "Пърленка натурална", "1,40", "300", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "1,40", "300", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "2,10", "400", ""],
["", "prlenka-na-majstora", "Пърленка на майстора", "2,80", "450", ""],
["", "prlnka-s-bosilekovo-pesto", "Пърлнка с босилеково песто", "1,40", "300", ""],
["", "prlenka-ss-susam", "Пърленка със сусам", "1,40", "320", ""],
["", "brusketa-s-presen-domat-pesto-i-sirene", "Брускета с пресен домат, песто и сирене", "2,80", "500", ""],
["", "grizinim-podneseni-s-maslinova-pasta", "Гризиним поднесени с маслинова паста", "2,80", "350", ""],
["", "armenski-khlyab", "Арменски хляб", "1,40", "300", ""]

            ],

            "sauces": [
                ["", "sos-za-picza", "Сос за пица", "0,00", "", ""],
["", "chili-sos", "Чили сос", "0,00", "", ""],
["", "soev-sos", "Соев сос", "0,00", "", ""],
["", "sos-barbekyu", "Сос барбекю", "0,00", "", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "", ""],
["", "gben-sos", "Гъбен сос", "0,00", "", ""]

            ],

            "desserts": [
                ["", "plodova-salata-ss-smetana", "Плодова салата със сметана", "2,80", "300", ""],
["", "plodova-salata-s-med-i-orekhi", "Плодова салата с мед и орехи", "2,80", "300", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "1,40", "250", ""],
["", "palachinka-s-med-i-orekhi", "Палачинка с мед и орехи", "1,40", "250", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "1,40", "250", ""],
["", "czedeno-mlyako", "Цедено мляко", "2,80", "", ""],
["", "frenska-nuga-ss-zeleni-smokini", "Френска Нуга със зелени смокини", "3,50", "", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "250", ""],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "250", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "", ""],
["", "bankya-mineralna-voda", "Банкя минерална вода", "1,40", "", ""]

            ],

            "Безалкохолни напитки": [
                ["", "sok-ot-morkovi", "Сок от моркови", "1,40", "250", ""],
["", "sok-s-aloe-vera", "Сок с алое вера", "1,40", "250", ""],
["", "ajryan", "Айрян", "0,70", "250", ""],
["", "fresh", "Фреш", "2,10", "250", ""],
["", "energijna-napitka-monstr", "Енергийна напитка Монстър", "3,50", "500", ""],
["", "energijna-napitka-red-bull", "Енергийна напитка Red Bull", "3,50", "250", ""]

            ]
        }', 
        'slug' => 'lobby-bar-jardin',
        'business_name' => 'Lobby Bar Jardin',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'пл. Майка България 2',
        'address_additional' => '',
        'coords_x' => '43.0824515',
        'coords_y' => '25.6322337',
        'phone' => '+359888997030',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "teleshki-burger-s-przheni-kartofki", "Телешки бургер с пържени картофки", "4,90", "", ""],
["", "pileshki-burger-s-przheni-kartofki", "Пилешки бургер с пържени картофки", "4,20", "", ""],
["", "vegetarianski-burger-s-przheni-kartofki", "Вегетариански бургер с пържени картофки", "4,20", "", ""],
["", "svinski-burger-s-przheni-kartofki", "Свински бургер с пържени картофки", "4,20", "", ""]

            ],

            "Закуски": [
                ["", "bukhti-s-pudra-zakhar", "Бухти с пудра захар", "2,10", "250", ""],
["", "bukhti-ss-sladko-ot-borovinki-i-krave-sirene", "Бухти със сладко от боровинки и краве сирене", "2,80", "330", ""],
["", "przheni-filijki-ss-sladko-ot-borovinki-i-krave-sirene", "Пържени филийки със сладко от боровинки и краве сирене", "2,80", "300", ""],
["", "klub-sandvich-s-bekon-kashkaval-przheni-kartofki-ketchup-i-majoneza", "Клуб сандвич с бекон, кашкавал, пържени картофки кетчуп и майонеза", "2,80", "400", ""],
["", "klub-sandvich-ss-sudzhuk-kashkaval-przheni-kartofki-ketchup-i-majoneza", "Клуб сандвич със суджук, кашкавал, пържени картофки, кетчуп и майонеза", "2,80", "400", ""]

            ],

            "lunch": [
                ["", "tarator", "Таратор", "1,40", "300", ""],
["", "kartofena-krem-supa", "Картофена крем супа", "1,40", "300", ""],
["", "pileshka-supa", "Пилешка супа", "1,40", "300", ""],
["", "czyala-pechena-pstrva-s-bilkova-korichka", "Цяла печена пъстърва с билкова коричка", "5,60", "450", ""],
["", "pateshki-bonfilencza-v-medeno-soev-sos", "Патешки бонфиленца в медено-соев сос", "5,60", "450", ""],
["", "bavno-pecheno-obezkosteno-svinsko-dzholanche", "Бавно печено обезкостено свинско джоланче", "4,20", "400", ""],
["", "pile-zhulien-podneseno-s-domashno-prigotveno-kartofeno-pyure", "Пиле Жулиен, поднесено с домашно приготвено картофено пюре", "3,50", "400", ""],
["", "paniran-kashkaval", "Паниран кашкавал", "4,20", "300", ""],
["", "omlet-ss-spanak-kinoa-i-zelen-luk", "Омлет със спанак, киноа и зелен лук", "3,50", "400", ""],
["", "brkani-yajcza-ss-sudzhuk", "Бъркани яйца със суджук", "3,50", "400", ""],
["", "mish-mash", "Миш-маш", "2,80", "400", ""],
["", "kartofeni-kyufteta-s-mlechen-sos", "Картофени кюфтета с млечен сос", "2,80", "300", ""]

            ],

            "salads": [
                ["", "shopska", "Шопска", "3,50", "450", ""],
["", "selska", "Селска", "4,20", "450", ""],
["", "ovcharska", "Овчарска", "4,20", "500", ""],
["", "kinoa-s-avokado", "Киноа с авокадо", "4,90", "300", ""],
["", "spanak-s-kinoa", "Спанак с киноа", "4,90", "300", ""],
["", "ajsberg-s-avokado", "Айсберг с авокадо", "4,90", "300", ""],
["", "czezar-s-khrupkavo-pile", "Цезар с хрупкаво пиле", "5,60", "400", ""],
["", "zelena-s-domati-i-krastaviczi", "Зелена с домати и краставици", "4,90", "350", ""],
["", "grczka", "Гръцка", "4,20", "450", ""],
["", "kapreze", "Капрезе", "4,90", "450", ""],
["", "meshana", "Мешана", "4,20", "500", ""],
["", "zelena-salata", "Зелена салата", "3,50", "300", ""],
["", "rigoleto", "Риголето", "4,90", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "350", ""],
["", "fitnes", "Фитнес", "3,50", "300", ""],
["", "snezhanka", "Снежанка", "3,50", "350", ""],
["", "vitamina", "Витамина", "3,50", "350", ""],
["", "svezha-zelena-salata-s-morski-darove", "Свежа зелена салата с морски дарове", "6,30", "300", ""]

            ],

            "Аламинути и глезотийки": [
                ["", "sirencza-pane", "Сиренца пане", "3,50", "270", ""],
["", "topeni-sirencza-s-kornflejks-i-sladko-ot-borovinki", "Топени сиренца с корнфлейкс и сладко от боровинки", "4,90", "300", ""],
["", "kashkavalcheta-pane", "Кашкавалчета пане", "4,90", "270", ""],
["", "spanacheni-kyufteta-s-kinoa", "Спаначени кюфтета с киноа", "4,20", "300", ""],
["", "brokoli-pane", "Броколи пане", "3,50", "350", ""],
["", "tikvichki-po-grczki", "Тиквички по Гръцки", "4,20", "350", ""],
["", "pile-s-bekon", "Пиле с бекон", "6,30", "550", ""],
["", "meze-za-razbirachi", "Мезе за разбирачи", "7,00", "450", ""],
["", "svinski-vrat-s-bekon", "Свински врат с бекон", "6,30", "550", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "7,00", "270", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,90", "170", ""],
["", "pileshki-vodenichki-pane", "Пилешки воденички пане", "4,20", "250", ""],
["", "pileshki-drob", "Пилешки дроб", "3,50", "350", ""],
["", "pileshki-vodenichki", "Пилешки воденички", "4,20", "250", ""],
["", "pileshki-pukanki-s-parmezan-i-susam", "Пилешки пуканки с пармезан и сусам", "5,60", "270", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "4,20", "230", ""],
["", "pileshki-prchki-s-kornflejks-i-parmezan", "Пилешки пръчки с корнфлейкс и пармезан", "4,90", "270", ""],
["", "chesnova-razyadka", "Чеснова разядка", "3,50", "200", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "4,20", "400", ""],
["", "przheni-kartofi-po-selski-s-rigan", "Пържени картофи по селски с риган", "2,10", "200", ""]

            ],

            "pasta": [
                ["", "taliateli-karbonara", "Талиатели Карбонара", "4,90", "450", ""],
["", "taliateli-s-pile-i-manatarki", "Талиатели с пиле и манатарки", "7,00", "500", ""],
["", "taliateli-boloneze", "Талиатели Болонезе", "4,90", "450", ""]

            ],

            "risotto": [
                ["", "rizoto-s-morski-darove", "Ризото с морски дарове", "6,30", "430", ""],
["", "rizoto-s-presni-zelenchuczi", "Ризото с пресни зеленчуци", "4,20", "300", ""],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "5,60", "450", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "fungi", "Фунги", "3,50", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "4,90", "", ""],
["", "savona", "Савона", "4,90", "", ""],
["", "kuatro-formadzhi", "Куатро Формаджи", "4,90", "", ""],
["", "boticheli", "Ботичели", "6,30", "", ""],
["", "vegetariana", "Вегетариана", "4,90", "", ""],
["", "kalczone", "Калцоне", "5,60", "", ""],
["", "teramo", "Терамо", "4,90", "", ""],
["", "peperone", "Пепероне", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "5,60", "", ""],
["", "vlcha", "Вълча", "5,60", "", ""],
["", "dzhuzepe", "Джузепе", "5,60", "", ""],
["", "chorizo", "Чоризо", "4,90", "", ""],
["", "korsika", "Корсика", "4,90", "", ""]

            ],

            "Ястия с патешко и телешко": [
                ["", "gshi-drob", "Гъши дроб", "9,80", "250", ""],
["", "teleshko-bon-file-s-manatarki", "Телешко  бон филе с манатарки", "11,20", "400", ""],
["", "pateshko-bon-file-ss-zelenchuczi", "Патешко бон филе със зеленчуци", "9,10", "400", ""]

            ],

            "Ястия с пилешко": [
                ["", "pileshki-bon-filencza-v-kornflejks", "Пилешки бон филенца в корнфлейкс", "6,30", "500", ""],
["", "pile-ss-zelenchuczi", "Пиле със зеленчуци", "6,30", "450", ""],
["", "kariola", "Кариола", "7,00", "650", ""],
["", "pileshki-bon-filencza-na-bbq", "Пилешки бон филенца на BBQ", "7,00", "450", ""],
["", "pileshki-bon-filencza-s-manatarki", "Пилешки бон филенца с манатарки", "7,00", "500", ""],
["", "pileshka-przhola-na-bbq", "Пилешка пържола на BBQ", "6,30", "450", ""]

            ],

            "Ястия с пилешко и свинско": [
                ["", "toskana", "Тоскана", "7,00", "550", ""],
["", "antib", "Антиб", "6,30", "500", ""],
["", "arborio", "Арборио", "6,30", "450", ""]

            ],

            "Риба и морски дарове": [
                ["", "pstrva", "Пъстърва", "7,70", "450", ""],
["", "czipura", "Ципура", "9,10", "500", ""],
["", "lavrak", "Лаврак", "9,10", "500", ""],
["", "somga-s-brokoli", "Сьомга с броколи", "10,50", "400", ""],
["", "kalmari-po-grczki", "Калмари по Гръцки", "9,10", "250", ""],
["", "skaridi-v-maslo-s-chesn-i-mashherka", "Скариди в масло с чесън и мащерка", "9,80", "200", ""]

            ],

            "Ястия със свинско": [
                ["", "svinski-kareta-s-manatarki", "Свински карета с манатарки", "7,70", "500", ""],
["", "vlchi-khapki-s-domashno-kartofeno-pyure", "Вълчи хапки с домашно картофено пюре", "7,00", "450", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "5,60", "200", ""],
["", "svinski-vrat-na-bbq", "Свински врат на BBQ", "7,00", "500", ""],
["", "svinski-kareta-na-bbq", "Свински карета на BBQ", "7,70", "500", ""],
["", "svinski-rebra-na-bbq", "Свински ребра на BBQ", "7,70", "400", ""]

            ],

            "Сачове на пещ": [
                ["", "rodopski-sach", "Родопски сач", "10,50", "800", ""],
["", "zlatogradski-sach", "Златоградски сач", "11,20", "700", ""],
["", "kasapski-sach", "Касапски сач", "11,90", "700", ""],
["", "meraklijski-sach", "Мераклийски сач", "11,20", "750", ""]

            ],

            "Керемиди на пещ": [
                ["", "brokoli-na-keremida", "Броколи на керемида", "5,60", "500", ""],
["", "keremida-po-lovdzhijski", "Керемида по ловджийски", "7,00", "600", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-zekhtin", "Пърленка със зехтин", "0,70", "200", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "200", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "300", ""],
["", "kombinirana-prlenka", "Комбинирана пърленка", "2,10", "300", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,80", "300", ""],
["", "prlenka-na-zhar-s-sharena-sol", "Пърленка на жар с шарена сол", "1,40", "200", ""],
["", "prlenka-na-zhar-s-chesn", "Пърленка на жар с чесън", "1,40", "200", ""],
["", "filiya-khlyab", "Филия хляб", "0,00", "", ""],
["", "filiya-prepechen-khlyab", "Филия препечен хляб", "0,00", "", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "1,40", "200", ""],
["", "krastaviczi", "Краставици", "1,40", "200", ""],
["", "zelenchuczi-na-skara-ss-zekhtin-i-kopr", "Зеленчуци на скара със зехтин и копър", "2,10", "200", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "domashno-kartofeno-pyure-s-magdanoz", "Домашно картофено пюре с магданоз", "2,10", "", ""],
["", "vareni-kartofi-s-cherven-luk-i-zekhtin-200gr", "Варени картофи с червен лук и зехтин (200гр)", "1,40", "", ""]

            ],

            "sauces": [
                ["", "mlechen-sos", "Млечен сос", "0,70", "100", ""],
["", "chesnov-sos", "Чеснов сос", "0,70", "100", ""],
["", "pikanten-sos", "Пикантен сос", "0,70", "100", ""]

            ],

            "desserts": [
                ["", "domashna-torta", "Домашна торта", "2,10", "250", ""],
["", "biskvitena-torta-s-maskarpone", "Бисквитена торта с маскарпоне", "2,80", "200", ""]

            ]
        }', 
        'slug' => 'sps-pizza-bar',
        'business_name' => 'SPS Pizza Bar &amp; Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Ален Мак 2А',
        'address_additional' => '',
        'coords_x' => '43.07757703',
        'coords_y' => '25.61293019',
        'phone' => '+359896605900',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "308-grczka-salata", "308. Гръцка салата", "4,20", "400", ""],
["", "504-salata-czezar-ss-skaridi", "504. Салата Цезар със скариди", "6,30", "350", ""],
["", "300-shopska-salata", "300. Шопска салата", "3,50", "400", ""],
["", "506-salata-czezar", "506. Салата Цезар", "4,20", "350", ""],
["", "507-salata-s-rozov-domat-i-avokado", "507. Салата с розов домат и авокадо", "4,90", "400", ""],
["", "301-ovcharska-salata", "301. Овчарска салата", "4,90", "400", ""],
["", "405-zelena-salata-s-avokado-i-sino-sirene", "405. Зелена салата с авокадо и синьо сирене", "5,60", "400", ""],
["", "330-kapreze", "330. Капрезе", "5,60", "400", ""],
["", "311-zelena-salata", "311. Зелена салата", "4,20", "350", ""],
["", "441-zelena-salata-s-pecheno-sirene", "441. Зелена салата с печено сирене", "4,90", "350", ""],
["", "319-veganska-salata", "319. Веганска салата", "4,90", "350", ""],
["", "331-slavyanska-salata", "331. Славянска салата", "4,90", "350", ""],
["", "318-salata-ranch", "318. Салата Ранч", "4,90", "350", ""],
["", "329-zelena-salata-s-riba-ton", "329. Зелена салата с риба тон", "4,90", "350", ""],
["", "406-zelena-salata-s-avokado-i-sino-sirene", "406. Зелена салата с авокадо и синьо сирене", "5,60", "400", ""]

            ],

            "alaminuti": [
                ["", "449-takosi-s-krekhko-svinsko", "449. Такоси с крехко свинско", "7,00", "400", ""],
["", "354-anglijska-zakuska", "354. Английска закуска", "6,30", "400", ""],
["", "729-tortila-chips-s-chedr-i-khalapeno", "729. Тортила чипс с чедър и халапеньо", "4,90", "300", ""],
["", "430-topeni-sirencza-s-borovinkovo-sladko", "430. Топени сиренца с боровинково сладко", "5,60", "150", ""],
["", "766-pileshki-khapki-s-presen-luk", "766. Пилешки хапки с пресен лук", "5,60", "300", ""],
["", "753-skaridi-v-bekon", "753. Скариди в бекон", "9,10", "300", ""],
["", "824-fish-end-chips", "824. Фиш енд чипс", "7,00", "400", ""],
["", "360-pileshki-khapki", "360. Пилешки хапки", "5,60", "300", ""],
["", "720-panirani-kalmari", "720. Панирани калмари", "7,70", "300", ""],
["", "786-kralski-skaridi-s-khrupkava-panirovka", "786. Кралски скариди с хрупкава панировка", "9,80", "200", ""],
["", "779-panirani-morkovi", "779. Панирани моркови", "4,20", "300", ""],
["", "363-pikantni-pileshki-krilcza", "363. Пикантни пилешки крилца", "5,60", "300", ""],
["", "351-bireni-sirencza", "351. Бирени сиренца", "4,20", "300", ""],
["", "381-pecheni-gbi-s-pusheno-sirene-i-kashkaval", "381. Печени гъби с пушено сирене и кашкавал", "5,60", "300", ""],
["", "382-khrupkavi-pileshki-flejki", "382. Хрупкави пилешки флейки", "6,30", "300", ""],
["", "350-bireni-kashkavalcheta", "350. Бирени кашкавалчета", "5,60", "300", ""],
["", "446-pileshki-filencza-korni", "446. Пилешки филенца корни", "6,30", "300", ""],
["", "372-pileshki-drobcheta-s-bekon-i-gbi", "372. Пилешки дробчета с бекон и гъби", "5,60", "350", ""],
["", "444-teleshki-ezik-v-maslo", "444. Телешки език в масло", "7,70", "200", ""],
["", "379-pileshki-srcza-na-tigan", "379. Пилешки сърца на тиган", "4,90", "350", ""],
["", "752-pileshki-vodenichki-s-gbi", "752. Пилешки воденички с гъби", "5,60", "350", ""],
["", "369-pileshki-srcza-na-skara", "369. Пилешки сърца на скара", "5,60", "300", ""],
["", "448-pileshki-drobcheta-na-tigan", "448. Пилешки дробчета на тиган", "5,60", "350", ""],
["", "370-pileshki-srcza-s-bekon-i-gbi", "370. Пилешки сърца с бекон и гъби", "5,60", "400", ""],
["", "711-kartofi-po-selski", "711. Картофи по селски", "2,80", "200", ""],
["", "701-kartofi-sote", "701. Картофи соте", "2,80", "300", ""],
["", "340-przheni-kartofi", "340. Пържени картофи", "2,10", "200", ""],
["", "341-przheni-kartofi-ss-sirene", "341. Пържени картофи със сирене", "2,80", "250", ""],
["", "342-kartofeni-rbcheta", "342. Картофени ръбчета", "2,80", "200", ""],
["", "831-pstrva-na-plocha", "831. Пъстърва на плоча", "6,30", "250", ""],
["", "832-miks-ot-morski-darove", "832. Микс от морски дарове", "11,20", "400", ""]

            ],

            "burgers": [
                ["", "1217-teleshki-burger-s-yajcze-i-bekon", "1217. Телешки бургер с яйце и бекон", "5,60", "400", ""],
["", "774-burger-s-meso-ot-svinski-rebra-na-bbq", "774. Бургер с месо от свински ребра на BBQ", "5,60", "450", ""],
["", "395-teleshki-chijzburger", "395. Телешки чийзбургер", "5,60", "400", ""],
["", "1218-teleshki-burger-s-tri-vida-sirena", "1218. Телешки бургер с три вида сирена", "6,30", "", ""],
["", "1219-vegan-burger", "1219. Веган бургер", "4,90", "400", ""],
["", "840-pileshki-burger", "840. Пилешки бургер", "5,60", "400", ""]

            ],

            "sandwiches": [
                ["", "1208-kombiniran-sandvich", "1208. Комбиниран сандвич", "4,20", "250", ""],
["", "1203-sandvich-pepi", "1203. Сандвич Пепи", "4,20", "300", ""],
["", "1205-sandvich-kapreze", "1205. Сандвич Капрезе", "4,20", "250", ""],
["", "1204-sandvich-s-shunka-i-kashkaval", "1204. Сандвич с шунка и кашкавал", "3,50", "250", ""],
["", "1216-sandvich-s-bekon", "1216. Сандвич с бекон", "4,20", "350", ""],
["", "1212-sandvich-s-pileshko-file-pikanten-salam-bekon-i-kashkaval", "1212. Сандвич с пилешко филе, пикантен салам, бекон и кашкавал", "4,20", "350", ""]

            ],

            "pasta": [
                ["", "taliateli-kaza", "Талиатели Каза", "4,90", "400", ""],
["", "taliateli-pikante", "Талиатели Пиканте", "4,20", "300", ""],
["", "taliateli-amatrichana", "Талиатели Аматричана", "4,90", "400", ""],
["", "taliateli-karbonara", "Талиатели Карбонара", "5,60", "400", ""],
["", "taliateli-fruti-di-mare", "Талиатели фрути ди маре", "7,70", "400", ""]

            ],

            "grill": [
                ["", "404-svinski-rebra-na-bbq", "404. Свински ребра на BBQ", "8,40", "500", ""],
["", "802-plneno-svinsko-file-v-bulo", "802. Пълнено свинско филе в було", "7,70", "600", ""],
["", "716-sdzhuk-na-greben", "716. Съджук на гребен", "7,00", "300", ""],
["", "385-plneno-pileshko-file-v-bulo", "385. Пълнено пилешко филе в було", "7,00", "600", ""],
["", "830-meshana-skara", "830. Мешана скара", "16,80", "1100", ""],
["", "386-zelenchuczi-na-skara", "386. Зеленчуци на скара", "5,60", "400", ""],
["", "781-srbski-kebapcheta", "781. Сръбски кебапчета", "4,90", "300", ""],
["", "749-bireni-kyuftencza", "749. Бирени кюфтенца", "5,60", "300", ""],
["", "429-bireno-sushi", "429. Бирено суши", "6,30", "300", ""],
["", "1238-pikantni-nadenichki", "1238. Пикантни наденички", "6,30", "400", ""],
["", "457-teleshki-chikago-stek", "457. Телешки Чикаго стек", "9,80", "100", ""],
["", "380-svinski-karencza", "380. Свински каренца", "7,00", "300", ""],
["", "707-pileshki-krilcza", "707. Пилешки крилца", "5,60", "300", ""],
["", "401-svinski-vrat", "401. Свински врат", "7,00", "300", ""],
["", "823-somga-file", "823. Сьомга филе", "4,20", "100", ""],
["", "366-pileshka-przhola-ot-but", "366. Пилешка пържола от бут", "6,30", "300", ""],
["", "365-pileshka-przhola-ot-file", "365. Пилешка пържола от филе", "6,30", "300", ""]

            ],

            "specialties": [
                ["", "767-svinsko-bonfile-s-parmezanova-korichka", "767. Свинско бонфиле с пармезанова коричка", "9,10", "450", ""],
["", "428-aromatni-pileshki-kscheta", "428. Ароматни пилешки късчета", "7,70", "400", ""],
["", "417-shniczel-po-vienski", "417. Шницел по виенски", "7,70", "400", ""],
["", "816-kralski-kotlet", "816. Кралски котлет", "8,40", "500", ""],
["", "820-svinski-kareta-ramazoti", "820. Свински карета рамазоти", "8,40", "400", ""],
["", "805-svinski-dzholan-za-dvama", "805. Свински джолан за двама", "14,70", "", ""],
["", "421-pile-tako", "421. Пиле тако", "7,70", "400", ""],
["", "pile-montro", "Пиле Монтрьо", "8,40", "450", ""]

            ],

            "Сухо мезе": [
                ["", "455-file-elena", "455. Филе Елена", "4,20", "100", ""],
["", "454-role-trapezicza", "454. Роле Трапезица", "4,20", "100", ""],
["", "456-pastrma", "456. Пастърма", "4,90", "100", ""],
["", "452-sudzhuk", "452. Суджук", "3,50", "100", ""],
["", "453-lukanka", "453. Луканка", "2,80", "100", ""],
["", "450-sirene", "450. Сирене", "1,40", "100", ""],
["", "451-kashkaval", "451. Кашкавал", "2,10", "100", ""],
["", "375-sino-sirene", "375. Синьо сирене", "4,20", "100", ""]

            ],

            "bread": [
                ["", "471-filijka-khlyab", "471. Филийка хляб", "0,00", "", ""]

            ],

            "sauces": [
                ["", "1232-sos-bbq", "1232. Сос BBQ", "1,40", "", ""],
["", "1234-chesnov-sos", "1234. Чеснов сос", "0,70", "", ""],
["", "377-mlechen-sos", "377. Млечен сос", "0,70", "", ""],
["", "1318-sos-czezar", "1318. Сос Цезар", "1,40", "", ""],
["", "1153-sos-siti", "1153. Сос Сити", "1,40", "", ""]

            ],

            "desserts": [
                ["", "606-zamrazeno-mlyako", "606. Замразено мляко", "2,80", "200", ""]

            ],

            "drinks": [
                ["", "14-ajryan", "14. Айрян", "0,70", "200", ""],
["", "60-zhlta-limonada", "60. Жълта лимонада", "0,70", "500", ""],
["", "55-red-bul", "55. Ред Бул", "4,20", "250", ""],
["", "260-studen-chaj-san-benedeto", "260. Студен чай Сан Бенедето", "2,10", "500", ""]

            ],

            "beer": [
                ["", "82-erdinger-vajs", "82. Ердингер Вайс", "2,80", "500", ""],
["", "98-san-migel-freska", "98. Сан Мигел Фреска", "2,80", "330", ""],
["", "108-kozel", "108. Козел", "2,80", "500", ""],
["", "88-grolsh", "88. Гролш", "4,90", "450", ""],
["", "709-gines-ken", "709. Гинес кен", "4,20", "500", ""],
["", "135-korona-ekstra", "135. Корона екстра", "3,50", "330", ""],
["", "100-samrsbi-sajder", "100. Самърсби сайдер", "2,10", "330", ""]

            ],

            "Бяло вино": [
                ["", "161-piksel-sovinon-blan", "161. Пиксел Совиньон Блан", "13,30", "750", ""],
["", "106-piksel-sovinon-blan", "106. Пиксел Совиньон Блан", "7,70", "375", ""],
["", "107-piksel-roze", "107. Пиксел розе", "13,30", "750", ""],
["", "166-f2f-sovinon-blan", "166. Ф2Ф Совиньон Блан", "20,30", "750", ""],
["", "164-f2f-shardone", "164. Ф2Ф Шардоне", "20,30", "750", ""],
["", "162-el-koto-di-riokha-blanko", "162. Ел Кото Ди Риоха Бланко", "15,40", "750", ""],
["", "178-riczina-malamatina", "178. Рицина Маламатина", "6,30", "500", ""],
["", "160-frontiera-sovinon-blan", "160. Фронтиера Совиньон Блан", "13,30", "750", ""],
["", "180-santa-sara-sovinon-blan", "180. Санта Сара Совиньон блан", "26,60", "750", ""],
["", "kamarengo-pino-gridzho---italiya", "Камаренго Пино гриджо - Италия", "13,30", "750", ""],
["", "131-kamarengo-roze---italiya", "131. Камаренго розе - Италия", "13,30", "750", ""],
["", "163-el-koto-de-riokha-roze---ispaniya", "163. Ел Кото де Риоха розе - Испания", "15,40", "750", ""],
["", "130-el-koto-de-riokha-roze---ispaniya", "130. Ел Кото де Риоха розе - Испания", "6,30", "375", ""],
["", "132-pol-mas-sovinon-blan---grancziya", "132. Пол Мас Совиньон блан - Гранция", "14,00", "750", ""]

            ],

            "Червено вино": [
                ["", "257-piksel-kaberne-sovinon", "257. Пиксел Каберне Совиньон", "13,30", "750", ""],
["", "250-f2f-dornfelder", "250. Ф2Ф Дорнфелдер", "20,30", "750", ""],
["", "252-santa-sara---petit-sara", "252. Санта Сара - Петит Сара", "26,60", "750", ""],
["", "248-kamarengo-vino-roso", "248. Камаренго вино Росо", "13,30", "750", ""],
["", "172-pol-mas-sira", "172. Пол мас Сира", "14,00", "750", ""],
["", "170-f2f-kupazh", "170. Ф2Ф Купаж", "20,30", "750", ""]

            ]
        }', 
        'slug' => 'city-pub',
        'business_name' => 'City Pub',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'бул. Христо Ботев 15',
        'address_additional' => '',
        'coords_x' => '43.08110177',
        'coords_y' => '25.63336686',
        'phone' => '+359886725476',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Нашите нови предложения": [
                ["", "salata-inkanto", "Салата инканто", "4,20", "300", ""],
["", "salata-freya", "Салата фрея", "4,20", "300", ""],
["", "salata-bfalo", "Салата Бъфало", "4,90", "300", ""],
["", "picza-neapolitana", "Пица Неаполитана", "6,30", "700", ""],
["", "rizoto-ss-zelenchuczi-i-kalmari", "Ризото със зеленчуци и калмари", "4,90", "350", ""],
["", "spanacheni-kyufteta-s-mlechen-sos", "Спаначени кюфтета с млечен сос", "3,50", "300", ""],
["", "khrupkav-pileshki-burger", "Хрупкав пилешки бургер", "4,20", "400", ""],
["", "burger-kolata", "Бургер Колата", "4,20", "400", ""]

            ],

            "salads": [
                ["", "svezha-salata-s-zhareno-pile", "Свежа салата с жарено пиле", "2,80", "300", ""],
["", "staroselska-salata", "Староселска салата", "3,50", "450", ""],
["", "frenska-salata", "Френска салата", "2,80", "250", ""],
["", "shopska-salata", "Шопска салата", "2,80", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "2,80", "400", ""],
["", "czezar", "Цезар", "3,50", "400", ""],
["", "salata-s-rulcza-ot-raczi", "Салата с рулца от раци", "2,80", "300", ""],
["", "zelena-salata-s-kalmari", "Зелена салата с калмари", "4,20", "350", ""],
["", "salata-nikoziya", "Салата Никозия", "4,20", "350", ""],
["", "salata-formadzho", "Салата Формаджо", "4,20", "350", ""],
["", "salata-kolor", "Салата Колор", "2,80", "350", ""],
["", "salata-kapreze", "Салата Капрезе", "3,50", "300", ""],
["", "slavyanska-salata", "Славянска салата", "3,50", "400", ""],
["", "zelena-salata", "Зелена салата", "2,80", "300", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "3,50", "350", ""],
["", "grczka-salata", "Гръцка салата", "2,80", "350", ""],
["", "rodopska-salata", "Родопска салата", "2,80", "300", ""],
["", "snezhanka", "Снежанка", "2,80", "200", ""],
["", "salata-domati", "Салата домати", "2,80", "300", ""],
["", "salata-alyaska", "Салата Аляска", "2,80", "300", ""],
["", "zelena-salata-s-moczarela", "Зелена салата с моцарела", "3,50", "350", ""],
["", "grczka-salata-s-avokado", "Гръцка салата с авокадо", "3,50", "350", ""],
["", "gradinarska-salata", "Градинарска салата", "3,50", "350", ""]

            ],

            "Сухи мезета": [
                ["", "sudzhuk", "Суджук", "2,80", "100", ""],
["", "file-elena", "Филе Елена", "3,50", "100", ""],
["", "sirene", "Сирене", "1,40", "100", ""],
["", "kashkaval", "Кашкавал", "1,40", "100", ""],
["", "plato-ot-sirena", "Плато от сирена", "7,00", "350", ""]

            ],

            "starters": [
                ["", "pileshki-khapki", "Пилешки хапки", "2,80", "200", ""],
["", "pileshki-flejki", "Пилешки флейки", "3,50", "200", ""],
["", "brokoli-pane", "Броколи пане", "2,80", "250", ""],
["", "kashkavaleni-topki", "Кашкавалени топки", "3,50", "250", ""],
["", "kashkavalcheta", "Кашкавалчета", "2,80", "200", ""],
["", "sirencza", "Сиренца", "2,80", "200", ""],
["", "katino-meze", "Катино мезе", "4,20", "300", ""],
["", "chushka-byurek", "Чушка бюрек", "2,80", "200", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "2,80", "200", ""],
["", "gbi-s-kopr-i-chesn-v-maslo", "Гъби с копър и чесън в масло", "2,80", "200", ""],
["", "drobcheta-s-luk", "Дробчета с лук", "2,80", "300", ""],
["", "drobcheta-po-selski", "Дробчета по селски", "2,80", "300", ""],
["", "drobcheta-s-luk-gbi-bekon-chesn-i-soev-sos", "Дробчета с лук, гъби, бекон, чесън и соев сос", "2,80", "300", ""],
["", "ezik-v-maslo", "Език в масло", "2,80", "180", ""],
["", "ezik-pane", "Език пане", "2,80", "180", ""],
["", "ezik-natyur", "Език натюр", "2,80", "180", ""],
["", "vodenichki-s-luk", "Воденички с лук", "2,80", "250", ""],
["", "vodenichki-pane", "Воденички пане", "2,80", "250", ""],
["", "srcza-s-luk", "Сърца с лук", "2,80", "250", ""],
["", "pileshki-srcza-ss-zelenchuczi", "Пилешки сърца със зеленчуци", "2,80", "300", ""],
["", "pileshki-miks", "Пилешки микс", "2,80", "300", ""],
["", "kartofeni-purichki-s-topeno-sirene", "Картофени пурички с топено сирене", "2,80", "350", ""],
["", "tikveni-kyuftencza-ss-sos-ajoli", "Тиквени кюфтенца със сос айоли", "2,80", "200", ""],
["", "rulcza-ot-raczi", "Рулца от раци", "2,10", "180", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "1,40", "300", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "200", ""],
["", "presni-kartofi", "Пресни картофи", "1,40", "300", ""],
["", "kartofen-chips", "Картофен чипс", "2,10", "350", ""],
["", "kartofi-po-selski", "Картофи по селски", "1,40", "200", ""],
["", "marinovani-presni-zelenchuczi-na-skara", "Мариновани пресни зеленчуци на скара", "4,20", "300", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "300", ""],
["", "moczarela-s-kornflejks", "Моцарела с корнфлейкс", "3,50", "200", ""]

            ],

            "pizza": [
                ["", "picza-yuve", "Пица Юве", "4,90", "", ""],
["", "picza-al-fungi", "Пица Ал Фунги", "4,20", "", ""],
["", "vlcha", "Вълча", "5,60", "", ""],
["", "picza-kaprichoza", "Пица Капричоза", "4,90", "", ""],
["", "margarita", "Маргарита", "4,20", "", ""],
["", "margarita-2", "Маргарита 2", "4,90", "2", ""],
["", "byala-picza", "Бяла пица", "4,90", "", ""],
["", "picza-kuatro-formadzhi", "Пица Куатро Формаджи", "6,30", "", ""],
["", "kuatro-formadzhi-s-brokoli-i-tikvichka", "Куатро Формаджи с броколи и тиквичка", "6,30", "", ""],
["", "al-tomo", "Ал Томо", "5,60", "", ""],
["", "kolata", "Колата", "7,00", "", ""],
["", "picza-kariola", "Пица Кариола", "4,90", "", ""],
["", "picza-machianto", "Пица Мачианто", "4,90", "", ""],
["", "picza-monreale", "Пица Монреале", "4,90", "", ""],
["", "picza-moncza", "Пица Монца", "4,90", "", ""]

            ],

            "Ястия с пилешко": [
                ["", "pileshki-kscheta", "Пилешки късчета", "4,20", "350", ""],
["", "aromatni-pileshki-kscheta-s-presni-bilki", "Ароматни пилешки късчета с пресни билки", "4,20", "350", ""],
["", "pile-ss-zelenchuczi-i-smetana", "Пиле със зеленчуци и сметана", "4,20", "350", ""],
["", "pile-chetiri-sirena", "Пиле четири сирена", "4,20", "350", ""],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "4,20", "350", ""],
["", "pile-tasos", "Пиле Тасос", "4,20", "400", ""],
["", "pile-karibi", "Пиле Кариби", "4,20", "400", ""],
["", "pile-zhulien-vrkhu-kanape-ot-przheni-kartofi", "Пиле Жулиен върху канапе от пържени картофи", "4,90", "500", ""],
["", "pile-kapreze", "Пиле Капрезе", "5,60", "350", ""],
["", "pile-ss-smetana-i-ananas", "Пиле със сметана и ананас", "4,90", "350", ""],
["", "pile-s-brokoli-i-smetana", "Пиле с броколи и сметана", "4,20", "350", ""],
["", "pileshki-kscheta-ss-sos-teriyaki-i-susam", "Пилешки късчета със сос терияки и сусам", "4,20", "400", ""]

            ],

            "Ястия със свинско": [
                ["", "svinski-kareta-s-pechen-sos-i-kartofeno-pyure", "Свински карета с печен сос и картофено пюре", "4,20", "400", ""],
["", "drusan-kebap", "Друсан кебап", "4,20", "250", ""],
["", "svinski-zhulieni-na-tigan-s-gben-sos", "Свински жулиени на тиган с гъбен сос", "4,20", "400", ""],
["", "svinsko-s-bekon", "Свинско с бекон", "4,20", "400", ""],
["", "vratna-przhola-s-luk-gbi-i-smetana", "Вратна пържола с лук, гъби и сметана", "4,90", "400", ""],
["", "vlchi-khapki", "Вълчи хапки", "4,20", "200", ""],
["", "pikantni-kscheta-po-meksikanski", "Пикантни късчета по мексикански", "4,20", "400", ""],
["", "svinsko-s-kri", "Свинско с къри", "4,20", "350", ""]

            ],

            "grill": [
                ["", "kyufte", "Кюфте", "0,70", "80", ""],
["", "svinski-rebra", "Свински ребра", "4,20", "350", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "4,20", "250", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "4,20", "300", ""],
["", "pileshko-file", "Пилешко филе", "3,50", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "3,50", "200", ""],
["", "meshana-skara", "Мешана скара", "6,30", "460", ""]

            ],

            "Сачове и запеканки": [
                ["", "sach-s-pileshko-meso", "Сач с пилешко месо", "7,00", "700", ""],
["", "sach-ss-svinsko-i-zelenchuczi", "Сач със свинско и зеленчуци", "7,70", "700", ""],
["", "bolyarski-sach", "Болярски сач", "8,40", "800", ""],
["", "vegetarianski-sach-700gr", "Вегетариански сач (700гр)", "4,90", "", ""],
["", "mekhandzhijski-sach", "Механджийски сач", "7,00", "700", ""],
["", "kartofi-s-bekon-i-kashkaval", "Картофи с бекон и кашкавал", "3,50", "450", ""],
["", "kartofi-s-chetiri-sirena", "Картофи с четири сирена", "3,50", "450", ""],
["", "gbi-ala-krema", "Гъби ала крема", "3,50", "450", ""],
["", "brokoli-ss-sirena", "Броколи със сирена", "3,50", "450", ""],
["", "zapekanka-s-pile", "Запеканка с пиле", "3,50", "450", ""],
["", "zelenchukova-zapekanka", "Зеленчукова запеканка", "3,50", "450", ""]

            ],

            "fish": [
                ["", "khek", "Хек", "3,50", "200", ""]

            ],

            "Пърленки": [
                ["", "prlenka-s-maslo", "Пърленка с масло", "0,70", "250", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "250", ""]

            ],

            "desserts": [
                ["", "palachinka", "Палачинка", "0,70", "", ""],
["", "czedeno-kiselo-mlyako-s-borovinki", "Цедено кисело мляко с боровинки", "1,40", "150", ""],
["", "kazan-dibi", "Казан диби", "2,10", "150", ""],
["", "sufle-s-techen-czentr-ot-shokolad", "Суфле с течен център от шоколад", "2,80", "100", ""]

            ]
        }', 
        'slug' => 'bar-grill-kolata',
        'business_name' => 'Bar Grill Kolata',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Христо Донев',
        'address_additional' => '',
        'coords_x' => '43.07145581',
        'coords_y' => '25.60741847',
        'phone' => '+359886505292',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "tarator", "Таратор", "0,70", "", ""],
["", "supa-topcheta", "Супа топчета", "0,70", "", ""],
["", "pileshka-supa", "Пилешка супа", "0,70", "", ""],
["", "panirani-domati-s-chesnov-sos", "Панирани домати с чеснов сос", "2,10", "", ""],
["", "brkani-yajcza-ss-zelen-luk-i-sirene-garnirani-s-domatki-i-krastavichki", "Бъркани яйца със зелен лук и сирене, гарнирани с доматки и краставички", "2,10", "", ""],
["", "pileshki-kscheta-ss-zele-na-furna", "Пилешки късчета със зеле на фурна", "2,80", "", ""],
["", "zapechen-dzholan-s-gbi-i-kartofki-na-peshh", "Запечен джолан с гъби и картофки на пещ", "3,50", "", ""],
["", "plnena-tikvichka-s-kajma-i-zelenchuczi-zapechena-s-kashkaval-i-garnitura-krastavichki-i-domatki", "Пълнена тиквичка с кайма и зеленчуци, запечена с кашкавал и гарнитура краставички и доматки", "2,80", "", ""],
["", "svinski-tas-kebap-vrkhu-kanape-ot-oriz", "Свински тас кебап върху канапе от ориз", "2,80", "", ""],
["", "pileshko-vreteno-ss-sos-i-kartofeno-pyure", "Пилешко вретено със сос и картофено пюре", "2,80", "", ""],
["", "zapekanka-s-przhen-bekon-kiseli-krastavichki-i-smetana-garnirani-s-presni-zelenchuczi", "Запеканка с пържен бекон, кисели краставички и сметана, гарнирани с пресни зеленчуци", "2,80", "", ""],
["", "khrupkavi-parmezanovi-filencza-s-garnitura-presni-przheni-kartofki-i-zelena-salata", "Хрупкави пармезанови филенца с гарнитура пресни пържени картофки и зелена салата", "3,50", "", ""],
["", "domashno-kyufte", "Домашно кюфте", "0,70", "", ""],
["", "teleshko-kyufte", "Телешко кюфте", "1,40", "", ""],
["", "domashno-kebapche", "Домашно кебапче", "0,70", "", ""],
["", "domashna-nadenicza", "Домашна наденица", "2,80", "", ""],
["", "domashen-sudzhuk", "Домашен суджук", "4,20", "", ""],
["", "pitka-s-maslo-i-sharena-sol", "Питка с масло и шарена сол", "0,70", "", ""],
["", "pitka-s-mashherka-i-chesn", "Питка с мащерка и чесън", "0,70", "", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "0,70", "", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "0,70", "", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "1,40", "", ""],
["", "palachinka-s-shokolad", "Палачинка с шоколад", "0,70", "", ""],
["", "palachinka-ss-sladko", "Палачинка със сладко", "0,70", "", ""],
["", "czedeno-mlyako-ss-sladko-ot-borovinki", "Цедено мляко със сладко от боровинки", "1,40", "", ""]

            ],

            "salads": [
                ["", "ovcharska-salata", "Овчарска салата", "3,50", "450", ""],
["", "salata-niagara", "Салата Ниагара", "4,20", "450", ""],
["", "salata-czezar", "Салата Цезар", "4,20", "450", ""],
["", "selska-salata", "Селска салата", "3,50", "450", ""],
["", "shopska-salata", "Шопска салата", "2,80", "400", ""],
["", "gradinska-salata", "Градинска салата", "4,20", "450", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "450", ""],
["", "salata-s-riba-ton-i-rulcza-ot-raczi", "Салата с риба тон и рулца от раци", "4,20", "450", ""],
["", "kapreze", "Капрезе", "4,20", "400", ""],
["", "kartofena-s-lukanka", "Картофена с луканка", "4,20", "450", ""],
["", "salata-ot-presni-beleni-domati-pechena-chushka-i-plochka-sirene", "Салата от пресни белени домати, печена чушка и плочка сирене", "3,50", "400", ""],
["", "vitamina", "Витамина", "4,20", "350", ""],
["", "chikn", "Чикън", "4,20", "450", ""]

            ],

            "Мезета от пилешко месо": [
                ["", "bireno-meze-ot-pileshko-file", "Бирено мезе от пилешко филе", "2,80", "200", ""],
["", "pileshki-kscheta-s-mashherka-i-chesn", "Пилешки късчета с мащерка и чесън", "3,50", "250", ""],
["", "pileshki-drobcheta-s-luk-gbi-i-kashkaval", "Пилешки дробчета с лук, гъби и кашкавал", "2,80", "300", ""],
["", "pileshki-srcza-s-luk-gbi-i-kashkaval", "Пилешки сърца с лук, гъби и кашкавал", "3,50", "300", ""],
["", "panirani-vodenichki", "Панирани воденички", "3,50", "300", ""],
["", "panirani-pileshki-khapki-s-chesnov-sos", "Панирани пилешки хапки с чеснов сос", "3,50", "300", ""],
["", "pileshki-filencza-s-kornflejks-i-sladko-ot-borovinki", "Пилешки филенца с корнфлейкс и сладко от боровинки", "3,50", "300", ""],
["", "khrupkavi-pileshki-krilcza-s-kri-sos", "Хрупкави пилешки крилца с къри сос", "4,20", "300", ""],
["", "khrupkavi-pileshki-filencza-ss-sirene-parmezan", "Хрупкави пилешки филенца със сирене пармезан", "3,50", "250", ""]

            ],

            "alaminuti": [
                ["", "teleshki-ezik-v-maslo", "Телешки език в масло", "4,20", "200", ""],
["", "topeno-sirene-s-kornflejks-i-sladko-ot-borovinki", "Топено сирене с корнфлейкс и сладко от боровинки", "3,50", "300", ""],
["", "vlchi-khapki-ot-svinsko-bon-file", "Вълчи хапки от свинско бон филе", "4,20", "200", ""],
["", "zapechen-teleshki-ezik-s-kashkaval-i-dizhonska-gorchicza", "Запечен телешки език с кашкавал и дижонска горчица", "6,30", "300", ""],
["", "kashkavalcheta-pane", "Кашкавалчета пане", "3,50", "250", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "1,40", "250", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "250", ""],
["", "sirencza-pane", "Сиренца пане", "2,80", "250", ""],
["", "kartofeni-khapki-ss-sirene-i-mlechen-sos", "Картофени хапки със сирене и млечен сос", "2,80", "250", ""],
["", "panirani-domati-s-mlechen-sos", "Панирани домати с млечен сос", "2,80", "250", ""],
["", "brokoli-s-topeno-sirene-v-khrupkava-panirovka-i-chesnov-sos", "Броколи с топено сирене в хрупкава панировка и чеснов сос", "3,50", "350", ""],
["", "svinski-vrat-s-luk-gbi-pechena-chushka-i-kashkaval", "Свински врат с лук, гъби, печена чушка и кашкавал", "4,20", "350", ""],
["", "manatarki-v-maslo-s-chesn-i-kopr", "Манатарки в масло с чесън и копър", "5,60", "200", ""]

            ],

            "Ястия без месо": [
                ["", "zapecheni-brokoli-s-kartofi-i-kashkaval-v-smetanov-sos", "Запечени броколи с картофи и кашкавал в сметанов сос", "4,90", "350", ""],
["", "przheni-tikvichki-s-chesnov-sos", "Пържени тиквички с чеснов сос", "3,50", "350", ""]

            ],

            "Паста и Ризото": [
                ["", "spageti-boloneze", "Спагети Болонезе", "4,20", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,20", "400", ""],
["", "taliateli-s-manatarki-i-cheri-domati", "Талиатели с манатарки и чери домати", "4,90", "400", ""],
["", "taliateli-chetiri-sirena", "Талиатели Четири сирена", "4,90", "400", ""],
["", "rizoto-ss-svinsko-bon-file-i-zelenchuczi", "Ризото със свинско бон филе и зеленчуци", "4,20", "400", ""],
["", "rizoto-s-pile-i-zelenchuczi", "Ризото с пиле и зеленчуци", "4,20", "400", ""],
["", "rizoto-s-pileshko-svinsko-i-zelenchuczi", "Ризото с пилешко, свинско и зеленчуци", "4,20", "400", ""],
["", "rizoto-s-brokoli-i-morkovi", "Ризото с броколи и моркови", "3,50", "400", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "3,50", "400", ""]

            ],

            "Ястия с пилешко": [
                ["", "zapechena-pileshka-przhola", "Запечена пилешка пържола", "4,90", "450", ""],
["", "pile-zhulien", "Пиле Жулиен", "4,90", "450", ""],
["", "pile-shik", "Пиле Шик", "4,90", "450", ""],
["", "pile-pikata", "Пиле Пиката", "5,60", "450", ""],
["", "pile-prima", "Пиле Прима", "4,90", "450", ""],
["", "pile-s-manatarki-i-parmezan", "Пиле с манатарки и пармезан", "4,90", "450", ""],
["", "zapechena-palachinka-s-pileshko-file", "Запечена палачинка с пилешко филе", "4,90", "450", ""]

            ],

            "Ястия със свинско": [
                ["", "svinski-vrat-v-lovdzhijski-sos", "Свински врат в ловджийски сос", "4,90", "450", ""],
["", "shniczel-po-vienski-garniran-s-przheni-kartofi", "Шницел по Виенски, гарниран с пържени картофи", "4,90", "450", ""],
["", "chorbadzhijski-dzhob", "Чорбаджийски джоб", "5,60", "450", ""],
["", "svinski-medaloni-ss-sos-ot-manatarki-i-parmezan-garnirani-s-kartofeno-pyure", "Свински медальони със сос от манатарки и пармезан, гарнирани с картофено пюре", "4,90", "450", ""],
["", "kareta-teona", "Карета Теона", "4,90", "450", ""]

            ],

            "pizza": [
                ["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "verona", "Верона", "4,90", "", ""],
["", "don-vito", "Дон Вито", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "margarita", "Маргарита", "3,50", "", ""],
["", "miks-ot-sukhi-mezeta", "Микс от сухи мезета", "4,90", "", ""],
["", "parma", "Парма", "4,20", "", ""],
["", "peperoni", "Пеперони", "4,20", "", ""],
["", "proshuto-fungi", "Прошуто Фунги", "4,20", "", ""],
["", "chetiri-sirena", "Четири сирена", "4,20", "", ""],
["", "perfekto", "Перфекто", "4,90", "", ""],
["", "polo", "Поло", "4,90", "", ""]

            ],

            "sachs": [
                ["", "bolyarski-sach", "Болярски сач", "6,30", "500", ""],
["", "brokoli-ss-sirena-i-smetana", "Броколи със сирена и сметана", "6,30", "450", ""],
["", "svinski-sach-ss-zelenchuczi-bekon-i-kashkaval", "Свински сач със зеленчуци, бекон и кашкавал", "6,30", "450", ""],
["", "sach-s-pileshko-zelenchuczi-i-kashkaval", "Сач с пилешко, зеленчуци и кашкавал", "6,30", "450", ""],
["", "kombiniran-sach", "Комбиниран сач", "7,00", "500", ""]

            ],

            "Скара и гарнитури": [
                ["", "kartofeno-pyure", "Картофено пюре", "1,40", "150", ""],
["", "domashna-lyutenicza", "Домашна лютеница", "1,40", "150", ""],
["", "presni-zelenchuczi", "Пресни зеленчуци", "1,40", "150", ""],
["", "kartofi-sote", "Картофи соте", "1,40", "150", ""],
["", "zelenchuczi-na-skara", "Зеленчуци на скара", "3,50", "300", ""],
["", "marinovani-svinski-rebrcza", "Мариновани свински ребърца", "5,60", "450", ""],
["", "pileshka-przhola-ot-but-na-skara-garnirani-ss-sotirani-kartofi-i-zelena-salata", "Пилешка пържола от бут на скара, гарнирани със сотирани картофи и зелена салата", "4,20", "450", ""],
["", "pileshki-shishcheta-garnirani-ss-sotirani-kartofi-i-zelena-salata", "Пилешки шишчета, гарнирани със сотирани картофи и зелена салата", "4,20", "450", ""],
["", "pileshko-file-na-skara-garnirano-ss-sotirani-kartofi-i-zelena-salata", "Пилешко филе на скара, гарнирано със сотирани картофи и зелена салата", "4,20", "450", ""],
["", "svinski-vrat-na-skara-garniran-s-przheni-kartofi-i-zelena-salata", "Свински врат на скара, гарниран с пържени картофи и зелена салата", "4,90", "450", ""],
["", "tri-kebapcheta-na-skara-garnirani-s-presni-przheni-kartofi-i-zelena-salata", "Три кебапчета на скара, гарнирани с пресни пържени картофи и зелена салата", "4,20", "450", ""],
["", "tri-domashni-kyufteta-na-skara-garnirani-s-presni-przheni-kartofi-i-zelena-salata", "Три домашни кюфтета на скара, гарнирани с пресни пържени картофи и зелена салата", "4,20", "450", ""],
["", "svinski-kareta-garniran-s-przheni-kartofi-i-zelena-salata", "Свински карета гарниран с пържени картофи и зелена салата", "4,90", "450", ""],
["", "svinsko-shishche-garnirano-s-przheni-kartofi-i-zelena-salata", "Свинско шишче гарнирано с пържени картофи и зелена салата", "4,20", "", ""],
["", "srbska-pleskavicza-s-bekon-i-kashkaval-garnirana-ss-zelena-salata-i-presni-przheni-kartofi", "Сръбска плескавица с бекон и кашкавал, гарнирана със зелена салата и пресни пържени картофи", "4,20", "450", ""]

            ],

            "Бургери и сандвичи": [
                ["", "tost-s-lukanka-i-kashkaval", "Тост с луканка и кашкавал", "2,80", "350", ""],
["", "burger-s-pleskavicza", "Бургер с плескавица", "3,50", "350", ""],
["", "burger-s-khrupkavo-pileshko-file", "Бургер с хрупкаво пилешко филе", "3,50", "350", ""],
["", "tost-ss-sirene-i-kashkaval", "Тост със сирене и кашкавал", "2,80", "350", ""],
["", "tost-s-shunka-i-kashkaval", "Тост с шунка и кашкавал", "2,80", "350", ""],
["", "tost-s-kajma-i-kashkaval", "Тост с кайма и кашкавал", "2,80", "350", ""]

            ],

            "Пърленки": [
                ["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "150", ""],
["", "prlenka-s-maslo-i-sharena-sol", "Пърленка с масло и шарена сол", "1,40", "150", ""],
["", "pitka-s-mashherka-i-chesn", "Питка с мащерка и чесън", "0,70", "100", ""],
["", "filijka-khlyab", "Филийка хляб", "0,00", "", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "1,40", "200", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "200", ""],
["", "prlenka-s-kashkaval-i-sirene", "Пърленка с кашкавал и сирене", "2,80", "250", ""],
["", "pitka-s-maslo-i-sharena-sol", "Питка с масло и шарена сол", "0,70", "100", ""]

            ],

            "dry-appetizer": [
                ["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "role-trapezicza", "Роле Трапезица", "2,10", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "lukanka", "Луканка", "1,40", "50", ""]

            ],

            "desserts": [
                ["", "palachinka-po-izbor", "Палачинка по избор", "0,70", "", ""]

            ],

            "drinks": [
                ["", "pirinsko-svetlo", "Пиринско светло", "1,40", "500", ""],
["", "shumensko", "Шуменско", "1,40", "500", ""],
["", "tuborg", "Туборг", "2,10", "500", ""],
["", "karlsberg", "Карлсберг", "2,10", "500", ""],
["", "budvajzer", "Будвайзер", "2,10", "500", ""],
["", "khajneken", "Хайнекен", "2,10", "500", ""],
["", "khajneken-bezalkokholna", "Хайнекен безалкохолна", "2,10", "500", ""],
["", "bolyarka", "Болярка", "1,40", "500", ""]

            ]
        }', 
        'slug' => 'teona-bar-dinner',
        'business_name' => 'Теона Bar &amp; Dinner',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул.княз Александър Батенберг 2',
        'address_additional' => '',
        'coords_x' => '43.07889175',
        'coords_y' => '25.60913658',
        'phone' => '+359876911737',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "1-kitajska-bogata-salata", "1. Китайска богата салата", "3,50", "400", ""],
["", "3-salata-ot-kiseli-krastavichki-i-pileshko-meso", "3. Салата от кисели краставички и пилешко месо", "2,80", "350", ""],
["", "4-salata-ot-kitajski-gbi", "4. Салата от китайски гъби", "3,50", "350", ""],
["", "5-kitajska-selska-salata", "5. Китайска селска салата", "2,80", "350", ""],
["", "6-salata-ot-pateshko-meso", "6. Салата от патешко месо", "2,80", "350", ""],
["", "8-salata-rulcza-ot-raczi-i-orizovo-fide", "8. Салата рулца от раци и оризово фиде", "3,50", "300", ""],
["", "12-salata-ot-vodorasli", "12. Салата от водорасли", "3,50", "350", ""],
["", "13-pileshka-salata", "13. Пилешка салата", "2,80", "300", ""],
["", "14-shopska-salata", "14. Шопска салата", "2,80", "400", ""],
["", "15-salata-ot-domati-ss-sirene", "15. Салата от домати със сирене", "2,80", "300", ""],
["", "16-sezonna-salata", "16. Сезонна салата", "2,80", "300", ""],
["", "17-salata-ot-chukani-krastaviczi", "17. Салата от чукани краставици", "2,80", "300", ""],
["", "18-salata-pile-s-pet-aromata", "18. Салата пиле с пет аромата", "2,80", "300", ""],
["", "20-salata-ot-morski-darove", "20. Салата от морски дарове", "4,20", "350", ""]

            ],

            "soups": [
                ["", "22-kiselo-lyutiva-supa", "22. Кисело лютива супа", "1,40", "200", ""],
["", "23-pileshka-supa", "23. Пилешка супа", "1,40", "200", ""],
["", "24-zelenchukova-supa", "24. Зеленчукова супа", "0,70", "200", ""],
["", "25-supa-s-morski-darove", "25. Супа с морски дарове", "2,10", "200", ""]

            ],

            "starters": [
                ["", "30-pileshki-filencza-ss-susam", "30. Пилешки филенца със сусам", "3,50", "300", ""],
["", "31-khrupkavi-pileshki-filencza", "31. Хрупкави пилешки филенца", "3,50", "300", ""],
["", "78-osem-skrovishha", "78. Осем съкровища", "6,30", "500", ""],
["", "32-panirani-pileshki-khapki", "32. Панирани пилешки хапки", "3,50", "300", ""],
["", "33-pileshki-krilcza-po-pekinski", "33. Пилешки крилца по пекински", "2,80", "300", ""],
["", "36-panirani-pileshki-drobcheta-na-majstora", "36. Панирани пилешки дробчета на майстора", "3,50", "300", ""],
["", "37-pileshki-vodenichki-s-pikanten-sos", "37. Пилешки воденички с пикантен сос", "3,50", "300", ""],
["", "39-pileshki-srcza-po-schuanski", "39. Пилешки сърца по Съчуански", "3,50", "300", ""],
["", "40-proletni-rulcza", "40. Пролетни рулца", "2,10", "250", ""],
["", "41-pelmeni", "41. Пелмени", "4,20", "", ""],
["", "44-malki-kyuftencza-ot-svinsko-meso-po-pekinski", "44. Малки кюфтенца от свинско месо по пекински", "3,50", "300", ""],
["", "46-khrupkavi-pateshki-butcheta-po-pekinski", "46. Хрупкави патешки бутчета по пекински", "4,90", "300", ""],
["", "51-omlet-s-kitajski-cherni-gbi-i-zelenchuczi", "51. Омлет с китайски черни гъби и зеленчуци", "2,80", "300", ""],
["", "53-przheni-kartofi-ss-sirene", "53. Пържени картофи със сирене", "2,10", "300", ""],
["", "54-panirani-ribeni-filencza-po-pekinski", "54. Панирани рибени филенца по пекински", "4,90", "300", ""],
["", "55-pecheni-ribeni-filencza-na-skara", "55. Печени рибени филенца на скара", "4,90", "300", ""],
["", "56-panirani-kalmari---pikantni", "56. Панирани калмари - пикантни", "6,30", "300", ""],
["", "57-panirani-skaridi", "57. Панирани скариди", "7,70", "250", ""],
["", "58-chips-ot-skaridi", "58. Чипс от скариди", "1,40", "100", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "60-pileshko-gun-bao", "60. Пилешко Гун Бао", "4,90", "600", ""],
["", "61-pileshko-s-bambuk-i-kitajski-gbi", "61. Пилешко с бамбук и китайски гъби", "4,90", "600", ""],
["", "86-pile-s-ananas", "86. Пиле с ананас", "4,90", "500", ""],
["", "62-panirano-pileshko-s-kiselo-sladk-sos", "62. Панирано пилешко с кисело-сладък сос", "4,90", "500", ""],
["", "63-pileshko-ss-zelenchuczi", "63. Пилешко със зеленчуци", "4,90", "600", ""],
["", "64-pileshko-s-pechurki", "64. Пилешко с печурки", "4,90", "600", ""],
["", "65-panirano-pileshko-ss-zelenchuczi", "65. Панирано пилешко със зеленчуци", "4,90", "600", ""],
["", "66-pileshko-s-kartofi", "66. Пилешко с картофи", "4,90", "600", ""],
["", "67-lyutivo-pileshko-po-schuanski", "67. Лютиво пилешко по Съчуански", "4,90", "600", ""],
["", "68-pileshko-meso-po-pekinski-na-metalna-plocha", "68. Пилешко месо по пекински на метална плоча", "5,60", "500", ""],
["", "87-pile-s-kitajski-gbi", "87. Пиле с китайски гъби", "4,90", "600", ""]

            ],

            "Ястия от свинско месо": [
                ["", "70-svinsko-meso-yusian", "70. Свинско месо Юсиан", "5,60", "500", ""],
["", "71-svinsko-po-schuanski", "71. Свинско по Съчуански", "4,90", "600", ""],
["", "72-svinsko-s-bambuk-i-kitajski-cherni-gbi", "72. Свинско с бамбук и китайски черни гъби", "4,90", "600", ""],
["", "73-svinsko-meso-ss-zelenchuczi", "73. Свинско месо със зеленчуци", "4,90", "500", ""],
["", "74-svinski-rebrcza-s-pikanten-sos", "74. Свински ребърца с пикантен сос", "4,90", "600", ""],
["", "75-svinsko-s-kiselo-sladk-sos", "75. Свинско с кисело-сладък сос", "4,90", "500", ""],
["", "76-svinsko-meso-po-pekinski-na-metalna-plocha", "76. Свинско месо по пекински на метална плоча", "5,60", "500", ""],
["", "77-panirano-svinsko-ss-zelenchuczi", "77. Панирано свинско със зеленчуци", "4,90", "600", ""]

            ],

            "Ястия от патешко месо": [
                ["", "80-pikantno-pateshko-meso-s-pekinski-sos", "80. Пикантно патешко месо с пекински сос", "6,30", "600", ""],
["", "81-pateshko-ss-speczialen-sos-po-guandonski", "81. Патешко със специален сос по гуандонски", "6,30", "600", ""],
["", "82-pateshko-s-bambuk-i-kitajski-cherni-gbi", "82. Патешко с бамбук и китайски черни гъби", "6,30", "600", ""],
["", "83-pateshko-meso-po-pekinski-na-metalna-plocha", "83. Патешко месо по пекински на метална плоча", "6,30", "500", ""],
["", "84-pateshko-meso-s-kartofi-v-soev-sos", "84. Патешко месо с картофи в соев сос", "6,30", "600", ""]

            ],

            "Ястия от телешко месо": [
                ["", "90-teleshko-s-bambuk-i-kitajski-cherni-gbi", "90. Телешко с бамбук и китайски черни гъби", "6,30", "600", ""],
["", "91-teleshko-meso-s-kartofi-v-soev-sos", "91. Телешко месо с картофи в соев сос", "6,30", "600", ""],
["", "92-teleshko-s-pechurki", "92. Телешко с печурки", "6,30", "600", ""],
["", "93-teleshko-po-schuanski", "93. Телешко по Съчуански", "6,30", "600", ""],
["", "94-teleshko-s-kri-sos", "94. Телешко с къри сос", "6,30", "600", ""],
["", "96-teleshko-meso-po-pekinski-na-metalna-plocha", "96. Телешко месо по пекински на метална плоча", "7,00", "500", ""]

            ],

            "Ястия от зеленчуци": [
                ["", "100-brokoli-s-bambuk-i-malki-czarevichki", "100. Броколи с бамбук и малки царевички", "4,90", "500", ""],
["", "101-przhen-bambuk-s-kitajski-gbi-i-pechurki", "101. Пържен бамбук с китайски гъби и печурки", "4,90", "500", ""],
["", "102-patladzhan-po-schuanski-yusian", "102. Патладжан по Съчуански Юсиан", "3,50", "500", ""],
["", "103-patladzhan-s-kiselo-sladk-sos", "103. Патладжан с кисело-сладък сос", "3,50", "500", ""],
["", "105-yajcza-s-domati", "105. Яйца с домати", "3,50", "500", ""],
["", "106-kartofi-po-kitajski-yusian", "106. Картофи по китайски Юсиан", "3,50", "500", ""],
["", "108-zele-po-pekinski", "108. Зеле по Пекински", "3,50", "500", ""]

            ],

            "Ястия от риба и морски дарове": [
                ["", "120-panirana-riba-ss-soev-sos-po-pekinski", "120. Панирана риба със соев сос по пекински", "5,60", "600", ""],
["", "121-panirana-riba-po-schuanski", "121. Панирана риба по Съчуански", "5,60", "600", ""],
["", "122-panirana-riba-s-kiselo-sladk-sos", "122. Панирана риба с кисело-сладък сос", "5,60", "500", ""],
["", "123-ribeni-filencza-po-imperatorski", "123. Рибени филенца по императорски", "6,30", "500", ""],
["", "124-ribeni-filencza-po-pekinski-na-metalna-plocha", "124. Рибени филенца по пекински на метална плоча", "6,30", "500", ""],
["", "125-pikantni-kalmari-na-metalna-plocha", "125. Пикантни калмари на метална плоча", "8,40", "500", ""],
["", "126-pstrva-po-schuanski-s-leko-pikanten-sos", "126. Пъстърва по Съчуански с леко пикантен сос", "6,30", "500", ""],
["", "127-skaridi-po-imperatorski-gun-bao", "127. Скариди по императорски Гун Бао", "9,10", "500", ""]

            ],

            "rice": [
                ["", "150-byal-oriz", "150. Бял ориз", "0,70", "200", ""],
["", "151-kitajsko-khlebche", "151. Китайско хлебче", "0,70", "100", ""],
["", "152-pechena-kitajska-pitka", "152. Печена китайска питка", "0,70", "70", ""],
["", "154-oriz-s-yajcza", "154. Ориз с яйца", "2,80", "700", ""],
["", "155-oriz-yan-dzou", "155. Ориз Ян Дзоу", "3,50", "700", ""],
["", "156-oriz-s-pileshko-i-pechurki", "156. Ориз с пилешко и печурки", "3,50", "700", ""],
["", "157-oriz-s-bambuk-i-kitajski-gbi", "157. Ориз с бамбук и китайски гъби", "3,50", "700", ""],
["", "158-lyutiv-oriz-s-pileshko", "158. Лютив ориз с пилешко", "3,50", "700", ""],
["", "159-oriz-s-pileshko-i-kri", "159. Ориз с пилешко и къри", "3,50", "700", ""],
["", "160-oriz-s-pileshko-i-zelenchuczi", "160. Ориз с пилешко и зеленчуци", "3,50", "700", ""],
["", "161-oriz-ss-svinsko-i-zelenchuczi", "161. Ориз със свинско и зеленчуци", "3,50", "700", ""],
["", "162-oriz-s-teleshko-i-zelenchuczi", "162. Ориз с телешко и зеленчуци", "3,50", "700", ""],
["", "163-oriz-s-tri-vida-meso", "163. Ориз с три вида месо", "3,50", "700", ""],
["", "164-oriz-s-morski-darove", "164. Ориз с морски дарове", "4,20", "600", ""]

            ],

            "pasta": [
                ["", "165-spageti-ss-zelenchuczi", "165. Спагети със зеленчуци", "2,80", "700", ""],
["", "166-spageti-s-pileshko-meso-i-zelenchuczi", "166. Спагети с пилешко месо и зеленчуци", "3,50", "700", ""],
["", "167-spageti-ss-svinsko-meso-i-zelenchuczi", "167. Спагети със свинско месо и зеленчуци", "3,50", "700", ""],
["", "168-spageti-s-teleshko-meso-i-zelenchuczi", "168. Спагети с телешко месо и зеленчуци", "4,20", "700", ""],
["", "170-pikantni-spageti-s-yajcze-i-zelenchuczi", "170. Пикантни спагети с яйце и зеленчуци", "3,50", "700", ""],
["", "171-spageti-s-pileshko-meso-po-pekinski", "171. Спагети с пилешко месо по Пекински", "3,50", "600", ""],
["", "180-orizovi-spageti-ss-zelenchuczi", "180. Оризови спагети със зеленчуци", "3,50", "600", ""],
["", "181-orizovi-spageti-s-pileshko-meso-i-zelenchuczi", "181. Оризови спагети с пилешко месо и зеленчуци", "4,20", "600", ""],
["", "182-orizovi-spageti-ss-svinsko-meso-i-zelenchuczi", "182. Оризови спагети със свинско месо и зеленчуци", "4,20", "600", ""],
["", "183-orizovi-spageti-s-teleshko-meso-i-zelenchuczi", "183. Оризови спагети с телешко месо и зеленчуци", "4,90", "600", ""],
["", "184-orizovi-spageti-s-tri-vida-meso-i-zelenchuczi", "184. Оризови спагети с три вида месо и зеленчуци", "4,90", "", ""],
["", "185-orizovi-spageti-s-pileshko-zelenchuczi-i-kri", "185. Оризови спагети с пилешко, зеленчуци и къри", "4,20", "600", ""],
["", "186-orizovi-spageti-s-bekon-i-zelenchuczi", "186. Оризови спагети с бекон и зеленчуци", "4,20", "600", ""],
["", "187-orizovi-spageti-s-morski-darove", "187. Оризови спагети с морски дарове", "5,60", "600", ""]

            ],

            "desserts": [
                ["", "202-paniran-banan", "202. Паниран банан", "1,40", "100", ""],
["", "203-paniran-ananas", "203. Паниран ананас", "1,40", "100", ""],
["", "204-plodova-salata", "204. Плодова салата", "2,10", "200", ""]

            ],

            "sauces": [
                ["", "210-kiselo-sladk-sos", "210. Кисело-сладък сос", "0,00", "100", ""],
["", "211-pikanten-soev-sos", "211. Пикантен соев сос", "0,00", "100", ""],
["", "212-chili-sos", "212. Чили сос", "0,00", "50", ""],
["", "213-kri-sos", "213. Къри сос", "0,00", "100", ""],
["", "214-lyutiv-sos-pekin", "214. Лютив сос Пекин", "0,70", "50", ""],
["", "216-plastmasovi-pribori", "216. Пластмасови прибори", "0,00", "", ""],
["", "217-bambukovi-klechki-za-khranene", "217. Бамбукови клечки за хранене", "0,00", "", ""]

            ]
        }', 
        'slug' => 'pekinska-kuhnya',
        'business_name' => 'Пекинска кухня',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'бул. България 29В',
        'address_additional' => '',
        'coords_x' => '43.0801075',
        'coords_y' => '25.61460659',
        'phone' => '+359884087991 ,359892288200',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Солени палачинки": [
                ["", "cheesy-ham", "Cheesy ham", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056673.jpg"],
["", "hot-chick", "Hot chick", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056674.jpg"],
["", "bacon-twist", "Bacon twist", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056675.jpg"],
["", "4lunch", "4Lunch", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056676.jpg"],
["", "caprese", "Caprese", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056677.jpg"],
["", "veggie", "Veggie", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056678.jpg"],
["", "2cheesy", "2cheesy", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056679.jpg"],
["", "2big", "2big", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056686.jpg"],
["", "solena-palachinka-po-vash-izbor", "Солена палачинка по Ваш избор", "1,40", "", ""]

            ],

            "Сладки палачинки": [
                ["", "chocoholic", "Chocoholic", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056958.jpg"],
["", "oh-honey", "Oh, honey", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056959.jpg"],
["", "jam-it", "Jam it", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056960.jpg"],
["", "tella-fella", "Tella fella", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056961.jpg"],
["", "banana-treat", "Banana treat", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056962.jpg"],
["", "bee-happy", "Bee happy", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056963.jpg"],
["", "cheesecake", "Cheesecake", "2,80", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056964.jpg"],
["", "2crunchy", "2crunchy", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056965.jpg"],
["", "7days", "7days", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056966.jpg"],
["", "2sweet", "2sweet", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056967.jpg"],
["", "sladka-palachinka-po-vash-izbor", "Сладка палачинка по Ваш избор", "1,40", "", ""]

            ],

            "Тост в арабска питка": [
                ["", "ham-toast", "Ham toast", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056988.jpg"],
["", "chicken-toast", "Chicken toast", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056989.jpg"],
["", "bacon-toast", "Bacon toast", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056990.jpg"],
["", "salami-toast", "Salami toast", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056991.jpg"],
["", "veggie-toast", "Veggie toast", "2,10", "", "https://images.deliveryhero.io/image/fd-bg/Products/1056992.jpg"]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1075972.jpg"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1075973.jpg"],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1075975.jpg"],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1075976.jpg"],
["", "schweppes-biter-limon", "Schweppes Битер Лимон", "0,70", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1075977.jpg"],
["", "fanta-portokal", "Fanta Портокал", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1075978.jpg"],
["", "fanta-byala-praskova", "Fanta Бяла Праскова", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1075979.jpg"],
["", "fanta-madness-s-vkus-na-limon-i-bz", "Fanta Madness с вкус на лимон и бъз", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1075981.jpg"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1075982.jpg"],
["", "fuzetea-praskova-i-khibiskus-studen-chaj", "Fuzetea Праскова и хибискус, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1075984.jpg"],
["", "fuzetea-mango-i-ananas-studen-chaj", "Fuzetea Манго и ананас, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1075985.jpg"],
["", "fuzetea-gorski-plodove-studen-chaj", "Fuzetea Горски плодове, студен чай", "1,40", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1075986.jpg"],
["", "cappy-pulpy-portokal", "Cappy Pulpy Портокал", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1076017.jpg"],
["", "cappy-pulpy-praskova", "Cappy Pulpy Праскова", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1076018.jpg"],
["", "cappy-pulpy-grejpfrut", "Cappy Pulpy Грейпфрут", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/1076019.jpg"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1076020.jpg"],
["", "bankya-mineralna-voda", "Банкя минерална вода", "0,70", "750", "https://images.deliveryhero.io/image/fd-bg/Products/1076021.jpg"],
["", "rosa-izvorna-voda", "Роса изворна вода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1076022.jpg"],
["", "schweppes-klub-soda", "Schweppes Клуб Сода", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/1076023.jpg"]

            ],

            "drinks": [
                ["", "monster-energy-export", "Monster Energy export", "2,10", "355", ""],
["", "ajryan-balkan", "Айрян Балкан", "0,70", "330", ""]

            ],

            "beer": [
                ["", "pirinsko", "Пиринско", "1,40", "500", ""],
["", "kamenicza", "Каменица", "1,40", "500", ""],
["", "zagorka", "Загорка", "1,40", "500", ""],
["", "korona", "Корона", "2,10", "355", ""]

            ]
        }', 
        'slug' => '2go-crepes-and-coffee',
        'business_name' => '2GO Crepes and Coffee',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'бул. Независимост 48',
        'address_additional' => '',
        'coords_x' => '43.0829046',
        'coords_y' => '25.6327456',
        'phone' => '+359879541482',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "salata-khan-khadzhi-nikoli", "Салата Хан Хаджи Николи", "4,20", "370", ""],
["", "salata-ot-domati-bosilekovo-pesto-pecheni-zelenchuczi-krave-sirene-magdanoz", "Салата от домати, босилеково песто, печени зеленчуци, краве сирене, магданоз", "3,50", "370", ""],
["", "salata-ot-domati-krastavichki-tadzhaska-maslina-pechen-piper-i-krave-sirene", "Салата от домати, краставички, таджаска маслина, печен пипер и краве сирене", "4,20", "400", ""],
["", "domashna-salata", "Домашна салата", "4,20", "430", ""],
["", "salata-ot-domati-s-moczarela-burata-i-avokado", "Салата от домати с моцарела бурата и авокадо", "6,30", "300", ""],
["", "salata-ot-domati-s-moczarela-burata-i-proshuto", "Салата от домати с моцарела бурата и прошуто", "7,00", "300", ""],
["", "salata-kapreze", "Салата Капрезе", "4,90", "390", ""],
["", "salata-czezar", "Салата Цезар", "5,60", "270", ""],
["", "miks-ot-salatki-s-cheri-domati-parmezan-i-riba-ton", "Микс от салатки с чери домати, Пармезан и риба тон", "6,30", "350", ""],
["", "miks-ot-salatki-s-cheri-domati-i-parmezan-i-riba-ton", "Микс от салатки с чери домати и Пармезан и риба тон", "6,30", "320", ""],
["", "salata-vitamina", "Салата Витамина", "3,50", "300", ""],
["", "shopska-salata-s-pechen-piper-i-lyuta-chushka", "Шопска салата с печен пипер и люта чушка", "4,20", "410", ""],
["", "tradiczionna-mlechna-salata", "Традиционна млечна салата", "2,80", "220", ""],
["", "balkanska-salata-s-katk", "Балканска салата с катък", "4,20", "390", ""]

            ],

            "Студени предястия": [
                ["", "klasicheski-khumus-ss-zekhtin-i-sumak-po-vash-izbor-s", "Класически хумус със зехтин и сумак, по Ваш избор с:", "4,20", "", ""],
["", "klasicheski-ajvar-s-krave-sirene-i-pecheni-orekhi", "Класически Айвар с краве сирене и печени орехи", "5,60", "180", ""],
["", "domashno-kopoolu-s-pechen-patladzhan-cherven-piper-i-orekhi", "Домашно кьопоолу с печен патладжан, червен пипер и орехи", "3,50", "160", ""],
["", "zapechen-patladzhan", "Запечен патладжан", "4,20", "180", ""],
["", "tarama-khajver", "Тарама хайвер", "4,20", "270", ""],
["", "domashen-katk", "Домашен катък", "4,20", "150", ""]

            ],

            "Топли предястия": [
                ["", "khrupkavi-tikvichki-po-grczki-s-mlechen-sos", "Хрупкави тиквички по гръцки с млечен сос", "4,20", "300", ""],
["", "spanacheni-kyuftencza-ss-sirena-i-mlechen-sos", "Спаначени кюфтенца със сирена и млечен сос", "4,90", "220", ""],
["", "kyuftencza-ot-kinoa-s-miks-ot-sirena", "Кюфтенца от киноа с микс от сирена", "4,20", "170", ""],
["", "troyanska-manatarka-s-maslo-chesnova-pasta-i-bilki", "Троянска манатарка с масло, чеснова паста и билки", "8,40", "210", ""],
["", "pecheni-presni-kartofi-s-maslo-i-aromatni-podpravki", "Печени пресни картофи с масло и ароматни подправки", "4,20", "200", ""],
["", "pecheni-zelenchuczi-s-aromatni-podpravki", "Печени зеленчуци с ароматни подправки", "5,60", "250", ""],
["", "mlechen-teleshki-ezik", "Млечен телешки език", "9,10", "150", ""],
["", "khrupkavi-pileshki-filencza-s-przheni-kartofi-i-soevo-chesnova-majoneza", "Хрупкави пилешки филенца с пържени картофи и соево-чеснова майонеза", "5,60", "300", ""],
["", "khrupkavi-pileshki-prchiczi-s-przheni-kartofi-i-soevo-chesnova-majoneza", "Хрупкави пилешки пръчици с пържени картофи и соево-чеснова майонеза", "5,60", "250", ""],
["", "khrupkav-kamember", "Хрупкав камембер", "7,00", "200", ""]

            ],

            "soups": [
                ["", "domashna-pileshka-supa", "Домашна пилешка супа", "2,80", "300", ""],
["", "frenska-luchena-supa-s-kashkaval", "Френска лучена супа с кашкавал", "2,80", "300", ""],
["", "sezonna-krem-supa", "Сезонна крем супа", "2,80", "300", ""]

            ],

            "Основни месни ястия с пиле": [
                ["", "pileshko-file-s-pecheni-zelenchuczi-po-sredizemnomorski", "Пилешко филе с печени зеленчуци по средиземноморски", "7,70", "300", ""],
["", "pileshko-file-s-pecheni-kartofi-i-sos-ot-manatarki", "Пилешко филе с печени картофи и сос от манатарки", "10,50", "400", ""],
["", "pileshko-file-s-luk-i-vino-vrkhu-domashna-pitka", "Пилешко филе с лук и вино върху домашна питка", "8,40", "400", ""],
["", "pileshki-drusan-kebap", "Пилешки друсан кебап", "7,00", "290", ""]

            ],

            "Основни месни ястия със свинско": [
                ["", "obezkosteno-svinsko-dzholanche-su-vid", "Обезкостено свинско джоланче су-вид", "10,50", "400", ""],
["", "pechen-czyal-svinski-dzholan-su-vid-ss-sobstven-sos", "Печен цял свински джолан су-вид със собствен сос", "19,60", "900", ""],
["", "svinski-buzi-su-vid-s-kartof-aromatni-bilki-i-pechen-sos-350gr", "Свински бузи су-вид с картоф, ароматни билки и печен сос (350гр)", "10,50", "", ""],
["", "svinski-drusan-kebap-290gr", "Свински друсан кебап (290гр)", "8,40", "", ""],
["", "bon-filencza-s-pecheni-zelenchuczi-po-sredizemnomorski", "Бон филенца с печени зеленчуци по средиземноморски", "9,10", "300", ""],
["", "shniczel-ot-svinsko-bon-file", "Шницел от свинско бон филе", "9,10", "400", ""]

            ],

            "Основни местни ястия от телешко": [
                ["", "teleshki-dzholan-su-vid-400gr", "Телешки джолан су-вид (400гр)", "14,70", "", ""],
["", "teleshki-buzi", "Телешки бузи", "16,80", "400", ""],
["", "teleshki-opashki-ot-mlado-tele", "Телешки опашки от младо теле", "21,00", "550", ""]

            ],

            "Основни месни ястия от агнешко": [
                ["", "agneshko-po-gergovski", "Агнешко по Гергьовски", "12,60", "420", ""]

            ],

            "Ястия от риба": [
                ["", "file-ot-somga-po-vash-izbor-s", "Филе от сьомга, по Ваш избор с:", "14,00", "320", ""],
["", "file-ot-lavrak-po-vash-izbor-s", "Филе от лаврак, по Ваш избор с:", "11,90", "350", ""],
["", "file-ot-czipura-po-vash-izbor-s-350gr", "Филе от ципура, по Ваш избор с: (350гр)", "10,50", "", ""]

            ],

            "Безмесни ястия": [
                ["", "basmati-oriz-s-pecheni-zelenchuczi", "Басмати ориз с печени зеленчуци", "4,90", "400", ""],
["", "sspageti-s-pecheni-zelenchuczi", "Сспагети с печени зеленчуци", "5,60", "400", ""]

            ],

            "bread": [
                ["", "pryasno-izpecheno-khlebche", "Прясно изпечено хлебче", "0,70", "90", ""],
["", "rzheno-khlebche", "Ръжено хлебче", "0,70", "60", ""],
["", "prlenka", "Пърленка", "2,10", "160", ""],
["", "chabata", "Чабата", "2,80", "250", ""]

            ],

            "barbecue": [
                ["", "pileshko-file", "Пилешко филе", "7,00", "250", ""],
["", "svinski-rebrcza", "Свински ребърца", "11,20", "400", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "9,10", "250", ""],
["", "svinsko-shareno-mescze", "Свинско шарено месце", "7,00", "250", ""],
["", "teleshki-ribaj-stek", "Телешки рибай стек", "21,00", "250", ""],
["", "teleshki-rebra", "Телешки ребра", "14,00", "400", ""],
["", "agneshko-teleshko-kyufte", "Агнешко телешко кюфте", "6,30", "250", ""],
["", "teleshki-kyufteta-ot-zryalo-60-dni-meso", "Телешки кюфтета от зряло 60 дни месо", "9,10", "250", ""],
["", "bolyarski-kyufteta", "Болярски кюфтета", "8,40", "450", ""]

            ],

            "garnish": [
                ["", "pecheni-zelenchuczi-s-aromatni-podpravki", "Печени зеленчуци с ароматни подправки", "4,20", "150", ""],
["", "pecheni-presni-kartofi-s-maslo-i-aromatni-podpravki", "Печени пресни картофи с масло и ароматни подправки", "3,50", "150", ""],
["", "khrupkavi-sladki-kartofi", "Хрупкави сладки картофи", "3,50", "150", ""],
["", "khrupkavi-przheni-kartofi", "Хрупкави пържени картофи", "2,80", "200", ""],
["", "svezha-garnitura-ot-zeleni-salati-ss-zekhtinov-dresing", "Свежа гарнитура от зелени салати със зехтинов дресинг", "2,80", "150", ""]

            ],

            "desserts": [
                ["", "kadaif", "Кадаиф", "2,10", "150", ""],
["", "klasicheska-baklava", "Класическа баклава", "2,10", "200", ""],
["", "chijzkejk", "Чийзкейк", "3,50", "150", ""],
["", "shokoladov-mus-s-malini-i-koantro", "Шоколадов мус с малини и коантро", "3,50", "200", ""],
["", "yagodovo-malinovi-czeluvki", "Ягодово-малинови целувки", "4,20", "200", ""],
["", "domashno-shokoladovo-brauni-s-leshniczi-i-krem-ot-maskarpone", "Домашно шоколадово брауни с лешници и крем от маскарпоне", "5,60", "150", ""]

            ]
        }', 
        'slug' => 'han-hadzhi-nikoli',
        'business_name' => 'Хан Хаджи Николи',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'Ул. Георги Раковски 19',
        'address_additional' => '',
        'coords_x' => '43.08422878',
        'coords_y' => '25.63927027',
        'phone' => '+359879066455',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Гювечета": [
                ["", "sirene-po-shopski", "Сирене по шопски", "2,80", "300", ""]

            ],

            "barbecue": [
                ["", "zapecheni-zelenchuczi-porseni-s-pesto", "Запечени зеленчуци, поръсени с песто", "3,50", "300", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""],
["", "svinska-vratna-przhola-na-barbekyu", "Свинска вратна пържола на барбекю", "3,50", "200", ""],
["", "pileshka-przhola-ot-but-na-barbekyu", "Пилешка пържола от бут на барбекю", "2,80", "200", ""],
["", "teleshki-sudzhuk-na-barbekyu", "Телешки суджук на барбекю", "3,50", "", ""],
["", "klczana-nadenichka-na-barbekyu", "Кълцана наденичка на барбекю", "1,40", "120", ""],
["", "pleskavicza", "Плескавица", "2,80", "200", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,90", "300", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "2,10", "250", ""],
["", "przheni-kartofi-ss-sirene-300gr", "Пържени картофи със сирене (300гр)", "2,10", "", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,70", "50", ""],
["", "mlechen-sos", "Млечен сос", "0,70", "50", ""],
["", "sos-barbekyu", "Сос барбекю", "0,70", "50", ""]

            ],

            "Понеделник": [
                ["", "zapecheni-zelenchuczi-porseni-s-pesto", "Запечени зеленчуци поръсени с песто", "3,50", "300", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""],
["", "svinska-vratna-przhola-na-barbekyu", "Свинска вратна пържола на барбекю", "3,50", "200", ""],
["", "pileshka-przhola-ot-but-na-barbekyu", "Пилешка пържола от бут на барбекю", "2,80", "200", ""],
["", "teleshki-sudzhuk-na-barbekyu", "Телешки суджук на барбекю", "3,50", "", ""],
["", "klczana-nadenichka-na-barbekyu", "Кълцана наденичка на барбекю", "1,40", "120", ""],
["", "pleskavicza-200gr", "Плескавица (200гр", "2,80", "", ""],
["", "svinski-rebrcza-300gr", "Свински ребърца (300гр)", "4,90", "", ""],
["", "zelena-salata-s-krastaviczi-domati-i-morkovi", "Зелена салата с краставици, домати и моркови", "2,10", "300", ""],
["", "domashna-shopska-salata", "Домашна шопска салата", "2,10", "250", ""],
["", "prlenka-na-peshh", "Пърленка на пещ", "0,70", "300", ""],
["", "prlenka-na-peshh-ss-zekhtin-i-chesn", "Пърленка на пещ със зехтин и чесън", "0,70", "300", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "300", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "300", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "300", ""]

            ],

            "Вторник": [
                ["", "zapecheni-zelenchuczi-porseni-s-pesto", "Запечени зеленчуци поръсени с песто", "3,50", "300", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""],
["", "svinska-vratna-przhola-na-barbekyu", "Свинска вратна пържола на барбекю", "3,50", "200", ""],
["", "pileshka-przhola-ot-but-na-barbekyu", "Пилешка пържола от бут на барбекю", "2,80", "200", ""],
["", "teleshki-sudzhuk-na-barbekyu", "Телешки суджук на барбекю", "3,50", "", ""],
["", "klczana-nadenichka-na-barbekyu", "Кълцана наденичка на барбекю", "1,40", "120", ""],
["", "pleskavicza-200gr", "Плескавица (200гр", "2,80", "", ""],
["", "svinski-rebrcza-300gr", "Свински ребърца (300гр)", "4,90", "", ""],
["", "domati-i-krastaviczi", "Домати и краставици", "2,10", "250", ""],
["", "manastirska-salata", "Манастирска салата", "2,10", "250", ""],
["", "prlenka-na-peshh", "Пърленка на пещ", "0,70", "300", ""],
["", "prlenka-na-peshh-ss-zekhtin-i-chesn", "Пърленка на пещ със зехтин и чесън", "0,70", "300", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "300", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "300", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "300", ""]

            ],

            "Сряда": [
                ["", "zapecheni-zelenchuczi-porseni-s-pesto", "Запечени зеленчуци поръсени с песто", "3,50", "300", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""],
["", "svinska-vratna-przhola-na-barbekyu", "Свинска вратна пържола на барбекю", "3,50", "200", ""],
["", "pileshka-przhola-ot-but-na-barbekyu", "Пилешка пържола от бут на барбекю", "2,80", "200", ""],
["", "teleshki-sudzhuk-na-barbekyu", "Телешки суджук на барбекю", "3,50", "", ""],
["", "klczana-nadenichka-na-barbekyu", "Кълцана наденичка на барбекю", "1,40", "120", ""],
["", "pleskavicza-200gr", "Плескавица (200гр", "2,80", "", ""],
["", "svinski-rebrcza-300gr", "Свински ребърца (300гр)", "4,90", "", ""],
["", "zelena-salata-s-krastaviczi-domati-i-morkovi", "Зелена салата с краставици, домати и моркови", "2,10", "300", ""],
["", "domashna-shopska-salata", "Домашна шопска салата", "2,10", "250", ""],
["", "prlenka-na-peshh", "Пърленка на пещ", "0,70", "300", ""],
["", "prlenka-na-peshh-ss-zekhtin-i-chesn", "Пърленка на пещ със зехтин и чесън", "0,70", "300", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "300", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "300", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "300", ""]

            ],

            "thursday": [
                ["", "kashkaval-pane-s-garnitura-zele-s-morkovi-i-lyutenicza", "Кашкавал пане с гарнитура зеле с моркови и лютеница", "3,50", "350", ""],
["", "zapecheni-zelenchuczi-porseni-s-pesto", "Запечени зеленчуци поръсени с песто", "3,50", "300", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""],
["", "svinska-vratna-przhola-na-barbekyu", "Свинска вратна пържола на барбекю", "3,50", "200", ""],
["", "pileshka-przhola-ot-but-na-barbekyu", "Пилешка пържола от бут на барбекю", "2,80", "200", ""],
["", "teleshki-sudzhuk-na-barbekyu", "Телешки суджук на барбекю", "3,50", "", ""],
["", "klczana-nadenichka-na-barbekyu", "Кълцана наденичка на барбекю", "1,40", "120", ""],
["", "pleskavicza-200gr", "Плескавица (200гр", "2,80", "", ""],
["", "svinski-rebrcza-300gr", "Свински ребърца (300гр)", "4,90", "", ""],
["", "zelena-salata-s-krastaviczi-domati-i-morkovi", "Зелена салата с краставици, домати и моркови", "2,10", "300", ""],
["", "domashna-shopska-salata", "Домашна шопска салата", "2,10", "250", ""],
["", "prlenka-na-peshh", "Пърленка на пещ", "0,70", "300", ""],
["", "prlenka-na-peshh-ss-zekhtin-i-chesn", "Пърленка на пещ със зехтин и чесън", "0,70", "300", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "300", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "300", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "300", ""]

            ],

            "friday": [
                ["", "zapecheni-zelenchuczi-porseni-s-pesto", "Запечени зеленчуци поръсени с песто", "3,50", "300", ""],
["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "svinsko-shishche", "Свинско шишче", "2,10", "150", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "150", ""],
["", "svinska-vratna-przhola-na-barbekyu", "Свинска вратна пържола на барбекю", "3,50", "200", ""],
["", "pileshka-przhola-ot-but-na-barbekyu", "Пилешка пържола от бут на барбекю", "2,80", "200", ""],
["", "teleshki-sudzhuk-na-barbekyu", "Телешки суджук на барбекю", "3,50", "", ""],
["", "klczana-nadenichka-na-barbekyu", "Кълцана наденичка на барбекю", "1,40", "120", ""],
["", "pleskavicza-200gr", "Плескавица (200гр", "2,80", "", ""],
["", "svinski-rebrcza-300gr", "Свински ребърца (300гр)", "4,90", "", ""],
["", "zelena-salata-s-krastaviczi-domati-i-morkovi", "Зелена салата с краставици, домати и моркови", "2,10", "300", ""],
["", "domashna-shopska-salata", "Домашна шопска салата", "2,10", "250", ""],
["", "prlenka-na-peshh", "Пърленка на пещ", "0,70", "300", ""],
["", "prlenka-na-peshh-ss-zekhtin-i-chesn", "Пърленка на пещ със зехтин и чесън", "0,70", "300", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "300", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "1,40", "300", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "300", ""]

            ]
        }', 
        'slug' => 'restorant-menyu-veliko-trnovo',
        'business_name' => 'Ресторант Меню (Велико Търново)',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'Бул. България 21',
        'address_additional' => '',
        'coords_x' => '43.07874356',
        'coords_y' => '25.62075554',
        'phone' => '+359898550457',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "aziatska-salata-czezar", "Азиатска салата Цезар", "5,60", "350", ""],
["", "salata-vezuvij", "Салата Везувий", "5,60", "350", ""],
["", "salata-s-tri-semena", "Салата с три семена", "5,60", "360", ""],
["", "salata-chetiri-sirena", "Салата Четири сирена", "5,60", "350", ""],
["", "salata-prikazka", "Салата Приказка", "5,60", "350", ""],
["", "salata-rigoleto", "Салата Риголето", "5,60", "380", ""],
["", "spanak-s-imperatorski-oriz", "Спанак с императорски ориз", "6,30", "390", ""],
["", "spanachena-salata-s-morski-darove-i-burata", "Спаначена салата с морски дарове и бурата", "9,80", "350", ""],
["", "salata-czezar-s-khrupkavo-pile", "Салата Цезар с хрупкаво пиле", "6,30", "450", ""],
["", "salata-czezar-s-khrupkavi-kalmari", "Салата Цезар с хрупкави калмари", "8,40", "350", ""],
["", "moczarela-s-kedrovi-yadki", "Моцарела с кедрови ядки", "6,30", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "350", ""],
["", "shopska-salata", "Шопска салата", "4,20", "400", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "snezhanka", "Снежанка", "3,50", "250", ""],
["", "salata-morkovi", "Салата моркови", "2,80", "300", ""],
["", "salata-domati", "Салата домати", "2,80", "300", ""],
["", "salata-krastaviczi", "Салата краставици", "2,80", "300", ""],
["", "salata-beleni-domati", "Салата белени домати", "3,50", "300", ""],
["", "rulcza-ot-tikvichki", "Рулца от тиквички", "5,60", "260", ""],
["", "salata-ani", "Салата Ани", "5,60", "400", ""],
["", "salata-nicza", "Салата Ница", "5,60", "350", ""],
["", "spanak-s-limecz-i-avokado", "Спанак с лимец и авокадо", "5,60", "350", ""],
["", "salata-s-kinoa-i-byala-riba", "Салата с киноа и бяла риба", "6,30", "440", ""],
["", "salata-keti", "Салата Кети", "5,60", "380", ""],
["", "salata-s-kinoa-i-khrupkavo-pileshko", "Салата с киноа и хрупкаво пилешко", "6,30", "440", ""],
["", "salata-ss-spanak-i-kinoa", "Салата със спанак и киноа", "5,60", "350", ""],
["", "salata-fitnes", "Салата Фитнес", "4,90", "340", ""],
["", "salata-meraki", "Салата Мераки", "6,30", "380", ""],
["", "salata-s-rozov-domat-i-burata", "Салата с розов домат и бурата", "6,30", "340", ""],
["", "salata-ss-spanak-edamame-i-riba-ton", "Салата със спанак, едамаме и риба тон", "10,50", "380", ""],
["", "salata-s-tursko-sirene-tipdil-i-sos-feta", "Салата с турско сирене Типдил и сос Фета", "5,60", "360", ""],
["", "shefska-salata", "Шефска салата", "4,90", "350", ""],
["", "salata-ss-spanaksomga-i-edamame", "Салата със спанак,сьомга и едамаме", "9,80", "350", ""],
["", "lyatna-salata", "Лятна салата", "6,30", "450", ""],
["", "salata-rimini-s-burata", "Салата Римини с бурата", "7,00", "450", ""],
["", "salata-s-kajsii-i-koze-sirene", "Салата с кайсии и козе сирене", "7,70", "400", ""],
["", "panczanela-s-pryasna-moczarela", "Панцанела с прясна моцарела", "5,60", "350", ""],
["", "salata-s-bivolsko-sirene-i-mus-ot-patladzhan", "Салата с биволско сирене и мус от патладжан", "7,00", "350", ""],
["", "domashna-salata-nani", "Домашна салата Нани", "5,60", "400", ""],
["", "salata-s-rozov-domat-i-burata", "Салата с розов домат и бурата", "6,30", "350", ""],
["", "balkanska-salata", "Балканска салата", "6,30", "450", ""],
["", "kralski-miks-ot-morski-darove", "Кралски микс от морски дарове", "18,90", "400", ""]

            ],

            "soups": [
                ["", "kartofena-krem-supa", "Картофена крем супа", "2,10", "350", ""],
["", "krem-supa-ot-somga-i-skaridi", "Крем супа от сьомга и скариди", "2,80", "350", ""],
["", "gbena-krem-supa", "Гъбена крем супа", "2,10", "350", ""],
["", "spanachena-krem-supa-florentina", "Спаначена крем супа Флорентина", "2,10", "350", ""],
["", "domatena-krem-supa-malakov", "Доматена крем супа Малаков", "2,10", "350", ""],
["", "tarator", "Таратор", "1,40", "350", ""]

            ],

            "appetizer": [
                ["", "brusketi-s-proshuto", "Брускети с прошуто", "5,60", "", ""],
["", "brusketi-s-pusheno-file-ot-somga", "Брускети с пушено филе от сьомга", "6,30", "", ""],
["", "brusketi-ss-sushen-domat-i-parmezan", "Брускети със сушен домат и пармезан", "3,50", "", ""]

            ],

            "dry-appetizer": [
                ["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "proshuto-krudo", "Прошуто крудо", "2,80", "50", ""],
["", "proshuto", "Прошуто", "2,80", "50", ""],
["", "italianski-salam-shpianata", "Италиански салам Шпианата", "1,40", "50", ""],
["", "salam-ungareze", "Салам Унгарезе", "1,40", "50", ""],
["", "salam-napoli", "Салам Наполи", "1,40", "50", ""],
["", "salamela-kalabro-pikante", "Саламела Калабро пиканте", "1,40", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""],
["", "milano", "Милано", "1,40", "50", ""],
["", "proshuto-san-daniele", "Прошуто Сан Даниеле", "2,80", "50", ""]

            ],

            "starters": [
                ["", "plneno-avokado-s-mus-ot-filadelfiya", "Пълнено авокадо с мус от филаделфия", "7,70", "280", ""],
["", "kashkavaleni-kyuftencza", "Кашкавалени кюфтенца", "5,60", "300", ""],
["", "spanacheni-kyuftencza", "Спаначени кюфтенца", "4,90", "250", ""],
["", "khrupkavi-filencza", "Хрупкави филенца", "5,60", "300", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,90", "250", ""],
["", "zapecheni-brokoli-s-krem-ot-sirena-moczarela-i-parmezan-360gr", "Запечени броколи с крем от сирена, моцарела и пармезан (360гр", "5,60", "", ""],
["", "zapecheno-delikatesno-koze-sirene", "Запечено деликатесно козе сирене", "7,70", "180", ""],
["", "fini-topeni-sirencza-v-khrupkava-panirovka-ss-sladko-ot-borovinki", "Фини топени сиренца в хрупкава панировка със сладко от боровинки", "5,60", "200", ""],
["", "proletni-rulcza", "Пролетни рулца", "3,50", "250", ""],
["", "kinoa-kyuftencza", "Киноа кюфтенца", "4,90", "320", ""],
["", "pushena-skamorcza", "Пушена скаморца", "6,30", "180", ""],
["", "gshi-drob-na-plocha-s-ananas-krusha-i-sladko-ot-borovinki", "Гъши дроб на плоча с ананас, круша и сладко от боровинки", "12,60", "280", ""],
["", "khrupkavi-pileshki-prchiczi-i-kartofeni-spirali", "Хрупкави пилешки пръчици и картофени спирали", "5,60", "350", ""],
["", "tikveni-kyuftencza", "Тиквени кюфтенца", "4,20", "250", ""],
["", "plneno-avokado-s-mus-ot-filadelfiya", "Пълнено авокадо с мус от филаделфия", "7,70", "280", ""],
["", "plato-za-priyateli", "Плато за приятели", "11,90", "300", ""],
["", "grczki-razyadki", "Гръцки разядки", "3,50", "180", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "4,20", "450", ""],
["", "vegetariana", "Вегетариана", "6,30", "600", ""],
["", "salami", "Салами", "6,30", "600", ""],
["", "piperone", "Пипероне", "6,30", "600", ""],
["", "proshuto-fungi", "Прошуто фунги", "7,00", "600", ""],
["", "proshuto-rukola", "Прошуто рукола", "7,00", "600", ""],
["", "proshuto-koto", "Прошуто кото", "5,60", "600", ""],
["", "kuatro-formadzhi", "Куатро формаджи", "7,70", "600", ""],
["", "mortadela-pistachio", "Мортадела пистачио", "5,60", "600", ""],
["", "spek-koto", "Спек кото", "7,00", "600", ""],
["", "picza-sukhi-mezeta", "Пица сухи мезета", "7,70", "600", ""],
["", "picza-parma", "Пица Парма", "7,70", "600", ""],
["", "vegan-picza", "Веган пица", "4,90", "600", ""],
["", "kaprichoza", "Капричоза", "6,30", "600", ""],
["", "picza-bianka", "Пица Бианка", "6,30", "600", ""],
["", "picza-nani", "Пица Нани", "6,30", "600", ""],
["", "picza-toskana", "Пица Тоскана", "7,00", "600", ""],
["", "picza-organza", "Пица Органза", "6,30", "600", ""],
["", "palermo", "Палермо", "6,30", "600", ""],
["", "pancheta", "Панчета", "6,30", "600", ""],
["", "formadzho-special", "Формаджо Special", "7,70", "600", ""],
["", "picza-emiliyana", "Пица Емилияна", "7,00", "600", ""],
["", "picza-prima-vera", "Пица Прима Вера", "4,90", "600", ""],
["", "picza-salsiche", "Пица Салсиче", "7,00", "", ""]

            ],

            "Азиатско меню": [
                ["", "goza-s-pileshko-meso", "Гьоза с пилешко месо", "5,60", "240", ""],
["", "goza-ss-zelenchuczi", "Гьоза със зеленчуци", "5,60", "240", ""],
["", "proletni-rulcza-ss-zelenchuczi", "Пролетни рулца със зеленчуци", "3,50", "250", ""],
["", "krilcza-po-aziatski", "Крилца по азиатски", "6,30", "380", ""],
["", "yajcheni-spageti-s-meso-po-izbor", "Яйчени спагети с месо по избор", "5,60", "360", ""],
["", "oriz-ss-zelenchuczi-shijtake-i-manatarki", "Ориз със зеленчуци, шийтаке и манатарки", "5,60", "360", ""],
["", "kristalni-nudli", "Кристални нудли", "5,60", "380", ""],
["", "udon-nudli", "Удон нудли", "6,30", "380", ""],
["", "teriyaki-khapki", "Терияки хапки", "7,70", "300", ""],
["", "teleshko-po-kitajski", "Телешко по китайски", "8,40", "350", ""]

            ],

            "Паста и Ризото": [
                ["", "papardeli-s-teleshko-manatarki-i-parmezan", "Папардели с телешко, манатарки и пармезан", "6,30", "350", ""],
["", "taliateli-s-tryufel-manatarki-i-parmezan", "Талиатели с трюфел, манатарки и пармезан", "5,60", "300", ""],
["", "taliateli-fruti-di-mare", "Талиатели Фрути ди маре", "9,80", "350", ""],
["", "spageti-ss-somga", "Спагети със сьомга", "8,40", "", ""],
["", "spageti-amore-mio", "Спагети Аморе Мио", "5,60", "350", ""],
["", "spageti-boloneze", "Спагети Болонезе", "5,60", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "5,60", "400", ""],
["", "rizoto-s-kalmari", "Ризото с калмари", "8,40", "360", ""],
["", "rizoto-s-pile", "Ризото с пиле", "5,60", "320", ""],
["", "rizoto-parma", "Ризото Парма", "8,40", "300", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,90", "320", ""]

            ],

            "grill": [
                ["", "pileshko-file", "Пилешко филе", "5,60", "220", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "5,60", "220", ""],
["", "pileshki-bon-filencza", "Пилешки бон филенца", "5,60", "220", ""],
["", "svinsko-bon-file", "Свинско бон филе", "6,30", "200", ""],
["", "svinski-karencza", "Свински каренца", "6,30", "220", ""],
["", "svinski-vrat", "Свински врат", "5,60", "250", ""]

            ],

            "Ястия с птиче месо": [
                ["", "pile-s-bambuk-i-kashu", "Пиле с бамбук и кашу", "7,70", "300", ""],
["", "pile-gejsha", "Пиле Гейша", "6,30", "340", ""],
["", "panirani-pileshki-krilcza-s-bbq-sos-i-kartofeni-lodki", "Панирани пилешки крилца с BBQ сос и картофени лодки", "6,30", "350", ""],
["", "pikantno-pile", "Пикантно пиле", "7,70", "400", ""],
["", "pile-s-parmezan", "Пиле с пармезан", "5,60", "280", ""],
["", "pueshki-stek-s-yajchni-spageti-i-zelenchuczi", "Пуешки стек с яйчни спагети и зеленчуци", "9,80", "450", ""],
["", "aromatni-pileshki-kscheta-s-mashherka", "Ароматни пилешки късчета с мащерка", "6,30", "300", ""],
["", "pile-s-aromatni-zelenchuczi", "Пиле с ароматни зеленчуци", "6,30", "360", ""],
["", "tryufel-pile", "Трюфел пиле", "6,30", "380", ""],
["", "pileshki-kscheta-s-topeno-sirene", "Пилешки късчета с топено сирене", "6,30", "380", ""],
["", "pile-feliz", "Пиле Фелиз", "6,30", "350", ""],
["", "pile-s-imperatorski-oriz-i-brokoli", "Пиле с императорски ориз и броколи", "8,40", "450", ""],
["", "pueshko-s-vishni", "Пуешко с вишни", "9,10", "380", ""],
["", "pileshko-role-s-sham-fstk", "Пилешко роле с шам фъстък", "9,80", "450", ""],
["", "pueshki-stek-family", "Пуешки стек Family", "9,80", "400", ""],
["", "pateshko-magre", "Патешко магре", "13,30", "400", ""],
["", "khrupkavi-pileshki-prchiczi-i-kartofeni-spirali-podneseni-ss-soevo-chesnova-majoneza", "Хрупкави пилeшки пръчици и картофени спирали, поднесени със соево-чеснова майонеза", "5,60", "350", ""],
["", "burger-s-khrupkavo-pile", "Бургер с хрупкаво пиле", "6,30", "400", ""],
["", "pueshki-stek-ss-zelenchuczi", "Пуешки стек със зеленчуци", "9,80", "450", ""]

            ],

            "Ястия с телешко и агнешко": [
                ["", "teleshki-dzholan-s-kartofeno-pyure", "Телешки джолан с картофено пюре", "8,40", "340", ""],
["", "teleshki-kyufteta", "Телешки кюфтета", "7,00", "300", ""],
["", "agneshki-dzholan", "Агнешки джолан", "18,20", "450", ""],
["", "babini-kyuftencza", "Бабини кюфтенца", "7,00", "300", ""],
["", "teleshko-black-pepper", "Телешко Black Pepper", "9,80", "360", ""],
["", "churasko-black-angus", "Чураско Black Angus", "10,50", "400", ""],
["", "teleshki-filencza-s-chorizo", "Телешки филенца с чоризо", "11,20", "450", ""],
["", "burger-s-teleshko-meso", "Бургер с телешко месо", "6,30", "400", ""]

            ],

            "Ястия от свинско": [
                ["", "svinski-kareta-gejsha", "Свински карета Гейша", "8,40", "400", ""],
["", "vlchi-khapki", "Вълчи хапки", "8,40", "300", ""],
["", "svinski-stekcheta-s-bosilekovo-pesto", "Свински стекчета с босилеково песто", "9,10", "420", ""],
["", "kralski-kotlet-bianco", "Кралски котлет Bianco", "11,20", "450", ""],
["", "krekhki-svinski-rebrcza", "Крехки свински ребърца", "10,50", "450", ""],
["", "svinski-stek-vrat-na-bbq-s-gbi-shijtake", "Свински стек-врат на bbq с гъби шийтаке", "11,20", "450", ""],
["", "svinski-stek-family", "Свински стек Family", "9,80", "400", ""],
["", "svinski-buzi-prigotveni-na-sous-vide-s-grilovani-zelenchuczi-i-sos-zhu", "Свински бузи приготвени на Sous-vide с гриловани зеленчуци и сос Жу", "9,80", "400", ""],
["", "domashni-nadenichki-s-bilki", "Домашни наденички с билки", "8,40", "340", ""]

            ],

            "fish": [
                ["", "file-ot-lavrak-na-plocha", "Филе от Лаврак на плоча", "16,80", "350", ""],
["", "file-ot-somga", "Филе от сьомга", "14,00", "350", ""],
["", "somga-s-kinoa", "Сьомга с киноа", "14,00", "400", ""],
["", "file-ot-czipura", "Филе от ципура", "16,80", "250", ""],
["", "file-ot-pstrva", "Филе от пъстърва", "9,10", "250", ""],
["", "zapechena-pstrva-s-bilkova-korichka", "Запечена пъстърва с билкова коричка", "9,80", "400", ""],
["", "file-ot-lavrak-s-tikvichki", "Филе от лаврак с тиквички", "10,50", "350", ""],
["", "file-ot-czipura-podnesena-s-mini-zelen-fasul-v-khrupkava-tempura-i-zekhtinov-sos", "Филе от ципура ,поднесена с мини зелен фасул в хрупкава темпура и зехтинов сос", "9,80", "280", ""],
["", "file-ot-pstrva-podnesena-s-khrupkav-chips-ot-przheni-kartofki", "Филе от пъстърва, поднесена с хрупкав чипс от пържени картофки", "9,10", "380", ""]

            ],

            "Морски дарове": [
                ["", "kalmari-na-plocha-podneseni-ss-zekhtinov-sos", "Калмари на плоча поднесени със зехтинов сос", "9,80", "200", ""],
["", "kalmari-po-grczki", "Калмари по гръцки", "9,80", "250", ""],
["", "kalmari-v-sladko-kisel-sos", "Калмари в сладко-кисел сос", "9,80", "250", ""],
["", "skaridi-na-plocha", "Скариди на плоча", "11,20", "200", ""],
["", "shishcheta-ot-skaridi-ss-sladko-kisel-sos---lyuto", "Шишчета от скариди със сладко кисел сос - люто", "11,20", "250", ""],
["", "skaridi-s-cheren-oriz---lyuto", "Скариди с черен ориз - люто", "7,70", "300", ""],
["", "oktopod-ss-sos-ponzu", "Октопод със сос Понзу", "18,90", "240", ""],
["", "midi-bianko", "Миди Бианко", "6,30", "600", ""],
["", "midi-po-ribarski", "Миди по рибарски", "6,30", "600", ""]

            ],

            "sauces": [
                ["", "pechen-sos", "Печен сос", "0,70", "60", ""],
["", "sos-zhu", "Сос Жу", "0,70", "60", ""],
["", "sos-pepr", "Сос Пепър", "0,70", "60", ""],
["", "bbq-sos", "BBQ сос", "0,00", "60", ""],
["", "ketchup-sos", "Кетчуп сос", "0,00", "60", ""],
["", "majoneza", "Майонеза", "0,00", "60", ""],
["", "gorchicza", "Горчица", "0,00", "60", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "60", ""]

            ],

            "additives": [
                ["", "presni-gbi", "Пресни гъби", "0,00", "30", ""],
["", "manatarki", "Манатарки", "0,70", "30", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "30", ""],
["", "domati", "Домати", "0,00", "30", ""],
["", "maslini", "Маслини", "0,00", "30", ""],
["", "czarevicza", "Царевица", "0,00", "30", ""],
["", "yajcze", "Яйце", "0,00", "30", ""],
["", "riba-ton", "Риба тон", "0,70", "30", ""],
["", "pusheno-sirene", "Пушено сирене", "0,00", "30", ""],
["", "shunka", "Шунка", "0,70", "30", ""],
["", "mortadela", "Мортадела", "0,70", "30", ""],
["", "spek-koto", "Спек Кото", "0,70", "30", ""],
["", "kashkaval", "Кашкавал", "0,00", "30", ""],
["", "moczarela", "Моцарела", "0,00", "30", ""],
["", "topeno-sirene", "Топено сирене", "0,00", "30", ""],
["", "sirene", "Сирене", "0,00", "30", ""],
["", "bekon", "Бекон", "0,70", "30", ""],
["", "proshuto", "Прошуто", "0,70", "30", ""],
["", "pusheno-pileshko-file", "Пушено пилешко филе", "0,70", "30", ""],
["", "presen-piper", "Пресен пипер", "0,00", "30", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "250", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "300", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "250", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "250", ""],
["", "sladk-kartof", "Сладък картоф", "2,10", "250", ""],
["", "kartofi-bianko", "Картофи Бианко", "2,80", "250", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "studena-garnitura", "Студена гарнитура", "1,40", "220", ""],
["", "zadusheni-brokoli", "Задушени броколи", "2,10", "250", ""],
["", "kartofeno-pyure", "Картофено пюре", "1,40", "200", ""],
["", "czarevicza-v-maslo", "Царевица в масло", "1,40", "200", ""]

            ],

            "desserts": [
                ["", "shokoladovo-sufle-ss-sladoled", "Шоколадово суфле със сладолед", "3,50", "130", ""],
["", "torta-bianko", "Торта Бианко", "3,50", "200", ""],
["", "tofi-torta-s-pechen-shokolad", "Тофи торта с печен шоколад", "3,50", "150", ""],
["", "proteinov-desert-s-banan-i-krem-pistachio", "Протеинов десерт с банан и крем Пистачио", "2,80", "170", ""],
["", "tart-s-avokado", "Тарт с Авокадо", "2,80", "180", ""],
["", "torta-esterkhazi---bez-gluten", "Торта Естерхази - без глутен", "3,50", "160", ""],
["", "torta-chetiri-shokolada", "Торта Четири Шоколадa", "3,50", "180", ""]

            ],

            "Суши салати": [
                ["", "goma-uakame", "Гома уакаме", "5,60", "250", ""],
["", "edamame", "Едамаме", "2,80", "180", ""]

            ],

            "Нигири": [
                ["", "nigiri-somga", "Нигири сьомга", "3,50", "", ""],
["", "nigiri-ton", "Нигири тон", "3,50", "", ""],
["", "nigiri-skarida", "Нигири скарида", "2,80", "", ""],
["", "nigiri-anago", "Нигири анаго", "5,60", "", ""],
["", "nigiri-tamago", "Нигири тамаго", "4,20", "", ""],
["", "nigiri-tako", "Нигири Тако", "6,30", "", ""],
["", "nigiri-lavrak", "Нигири лаврак", "2,80", "", ""]

            ],

            "Хосомаки": [
                ["", "khosomaki-pushena-somga", "Хосомаки пушена сьомга", "3,50", "", ""],
["", "khosomaki-krastavicza", "Хосомаки краставица", "2,10", "", ""],
["", "khosomaki-krastavicza-i-filadelfiya", "Хосомаки краставица и филаделфия", "2,10", "", ""],
["", "khosomaki-filadelfiya-i-avokado", "Хосомаки филаделфия и авокадо", "2,80", "", ""],
["", "khosomaki-somga-i-avokado", "Хосомаки сьомга и авокадо", "3,50", "", ""],
["", "khosomaki-ton", "Хосомаки тон", "3,50", "", ""],
["", "khosomaki-uakame", "Хосомаки уакаме", "2,10", "", ""],
["", "khosomaki-avokado", "Хосомаки авокадо", "2,10", "", ""],
["", "khosomaki-skarida", "Хосомаки скарида", "3,50", "", ""],
["", "khosomaki-somga", "Хосомаки сьомга", "3,50", "", ""]

            ],

            "Сашими": [
                ["", "sashimi-somga", "Сашими сьомга", "4,90", "80", ""],
["", "sashimi-ton", "Сашими тон", "5,60", "80", ""],
["", "ton-tataki", "Тон татаки", "5,60", "85", ""],
["", "somga-tataki", "Сьомга татаки", "5,60", "85", ""]

            ],

            "Комбо предложения": [
                ["", "sashimi-kombo", "Sashimi Комбо", "23,80", "", ""],
["", "maki-kombo", "MAKI Комбо+", "15,40", "", ""],
["", "kombo-za-priyateli", "Комбо за приятели!", "18,20", "", ""],
["", "jumbo-philadelphia-combo", "Jumbo Philadelphia Combo", "27,30", "", ""],
["", "khosomaki-kombo", "Хосомаки Комбо", "7,70", "", ""],
["", "vegi-hoso-kombo", "Веги HOSO Комбо", "5,60", "", ""],
["", "family-kombo", "FAMILY Комбо", "19,60", "580", ""],
["", "salmon-kombo", "SALMON Комбо", "16,10", "", ""],
["", "osaka-kombo", "OSAKA Комбо", "12,60", "", ""],
["", "kabuki-kombo", "KABUKI Комбо", "18,20", "", ""],
["", "umami-kombo", "UMAMI Комбо", "16,80", "", ""],
["", "philadelphia-kombo", "Philadelphia Комбо", "13,30", "", ""]

            ],

            "Суши Комбо сетове": [
                ["", "salmon-kombo", "Салмон комбо", "16,10", "", ""],
["", "femili-kombo", "Фемили комбо", "19,60", "", ""],
["", "osaka-kombo", "Осака комбо", "12,60", "", ""],
["", "somga-set", "Сьомга сет", "18,20", "", ""],
["", "khosomaki-kombo", "Хосомаки комбо", "7,70", "", ""],
["", "vegi-khoso-kombo", "Веги Хосо комбо", "5,60", "", ""],
["", "kombo-za-priyateli", "Комбо за приятели", "18,20", "", ""],
["", "jumbo-filadelfiya-kombo", "Jumbo филаделфия комбо", "27,30", "", ""],
["", "sashimi-kombo", "Сашими комбо", "23,80", "380", ""],
["", "maki-kombo", "Маки комбо", "15,40", "", ""],
["", "filadelfiya-kombo", "Филаделфия комбо", "13,30", "", ""],
["", "paradise-kombo", "Paradise комбо", "14,00", "", ""],
["", "best-seller-kombo", "Best Seller комбо", "16,80", "", ""],
["", "umami-kombo", "Умами комбо", "16,80", "", ""],
["", "kabuki-kombo", "Кабуки комбо", "18,20", "", ""]

            ],

            "Суши MIAMI Style": [
                ["", "uramaki-krab", "Урамаки Краб", "3,50", "90", ""],
["", "chuka-ika", "CHUKA-IKA", "4,90", "120", ""],
["", "imperator", "Император", "4,90", "140", ""],
["", "dinamit", "Динамит", "2,80", "110", ""],
["", "alyaska", "Аляска", "2,80", "120", ""],
["", "krab-rol", "Краб Рол", "2,80", "120", ""],
["", "teriyaki-maguro", "Терияки магуро", "3,50", "120", ""],
["", "blek-mamba", "Блек Мамба", "4,20", "140", ""],
["", "red-tobiko", "Ред Тобико", "3,50", "110", ""],
["", "tobiko-rol", "Тобико Рол", "3,50", "110", ""],
["", "dga", "Дъга", "4,20", "130", ""],
["", "norvezhka-gora", "Норвежка гора", "4,20", "100", ""],
["", "inferno", "Инферно", "4,20", "110", ""],
["", "salmon-lov", "Салмон Лов", "4,20", "130", ""],
["", "salmon-ekzotik", "Салмон Екзотик", "4,20", "130", ""],
["", "krispi-salmon-rol", "Криспи Салмон Рол", "3,50", "125", ""],
["", "kalipso", "Калипсо", "4,20", "130", ""],
["", "vulkan", "Вулкан", "4,20", "155", ""],
["", "fresh-rol", "Фреш Рол", "3,50", "165", ""],
["", "vezuvij", "Везувий", "4,90", "180", ""],
["", "ichiban", "Ичибан", "4,90", "80", ""],
["", "krispi-maguro", "Криспи Магуро", "4,20", "80", ""],
["", "kajzen", "Кайзен", "5,60", "210", ""],
["", "krispi-salmon", "Криспи Салмон", "4,20", "80", ""],
["", "kanpeki", "Канпеки", "4,20", "105", ""]

            ],

            "Black Sushi": [
                ["", "futomaki-somga-i-avokado-black", "Футомаки сьомга и авокадо BLACK", "3,50", "110", ""],
["", "uramaki-black-ebi-fry", "Урамаки Black Ebi Fry", "4,20", "110", ""],
["", "filadelfiya-black-chicken", "Филаделфия Black Chicken", "3,50", "110", ""],
["", "futomaki-black-chicken", "Футомаки Black Chicken", "4,20", "110", ""],
["", "gunkan-s-opashki-ot-raczi", "Gunkan с опашки от раци", "5,60", "75", ""],
["", "gunkan-tobiko", "Gunkan Тобико", "4,20", "75", ""],
["", "kapitansko-plato", "Капитанско плато", "23,10", "350", ""]

            ],

            "Футомаки": [
                ["", "futomaki-somga-i-avokado", "Футомаки сьомга и авокадо", "4,20", "", ""],
["", "futomaki-pikanten-ton", "Футомаки пикантен тон", "4,20", "", ""],
["", "futomaki-uakame", "Футомаки уакаме", "4,20", "", ""],
["", "futomaki-kanimi", "Футомаки каними", "3,50", "", ""],
["", "futomaki-skarida", "Футомаки скарида", "4,90", "", ""]

            ],

            "Филаделфия": [
                ["", "filadelfiya-khrupkva-skarida", "Филаделфия хрупква скарида", "3,50", "", ""],
["", "filadelfiya-khrupkavo-pile", "Филаделфия хрупкаво пиле", "2,80", "", ""],
["", "filadelfiya-khrupkava-riba", "Филаделфия хрупкава риба", "3,50", "", ""],
["", "filadelfiya-krispi", "Филаделфия криспи", "2,80", "", ""],
["", "filadelfiya-khot", "Филаделфия хот", "3,50", "", ""],
["", "filadelfiya-paradajz", "Филаделфия парадайз", "4,20", "", ""],
["", "filadelfiya-pushena-somga", "Филаделфия пушена сьомга", "4,20", "", ""],
["", "filadelfiya-krab", "Филаделфия краб", "2,80", "", ""],
["", "filadelfiya-ton", "Филаделфия тон", "3,50", "", ""],
["", "filadelfiya-pikanten-ton", "Филаделфия пикантен тон", "4,20", "", ""],
["", "filadelfiya-kanimi", "Филаделфия каними", "2,80", "", ""],
["", "filadelfiya-khrupkava-somga", "Филаделфия хрупкава сьомга", "3,50", "", ""]

            ],

            "Калифорния": [
                ["", "kaliforniya-anago", "Калифорния Анаго", "5,60", "", ""],
["", "kaliforniya-red", "Калифорния Ред", "4,20", "", ""],
["", "kaliforniya-ton-avokado-i-susam", "Калифорния тон, авокадо и сусам", "3,50", "", ""],
["", "kaliforniya-kanimi", "Калифорния Каними", "3,50", "", ""],
["", "kaliforniya-khrupkava-somga", "Калифорния хрупкава сьомга", "4,20", "", ""]

            ],

            "Специално суши": [
                ["", "ichiban", "Ичибан", "4,90", "", ""],
["", "krispi-maguro", "Криспи магуро", "4,20", "", ""],
["", "kajzen", "Кайзен", "5,60", "", ""],
["", "vulkan", "Вулкан", "4,20", "", ""],
["", "fresh-rol", "Фреш рол", "3,50", "", ""],
["", "vezuvij", "Везувий", "4,90", "", ""],
["", "salmon-lov", "Салмон лов", "4,20", "", ""],
["", "salmon-ekzotik", "Салмон екзотик", "4,20", "", ""],
["", "krispi-salmon-rol", "Криспи салмон рол", "3,50", "", ""],
["", "kalipso", "Калипсо", "4,20", "", ""],
["", "red-tobiko", "Ред тобико", "3,50", "", ""],
["", "tobiko-rol", "Тобико рол", "3,50", "", ""],
["", "dga", "Дъга", "4,20", "", ""],
["", "norvezhka-gora", "Норвежка гора", "4,20", "", ""],
["", "inferono", "Инфероно", "4,20", "", ""],
["", "alyaska", "Аляска", "2,80", "", ""],
["", "krab-rol", "Краб рол", "2,80", "", ""],
["", "teriyaki-maguro", "Терияки магуро", "3,50", "", ""],
["", "khosomaki-skarida", "Хосомаки скарида", "3,50", "", ""],
["", "blek-mamba", "Блек мамба", "4,20", "", ""],
["", "dinamit", "Динамит", "2,80", "", ""],
["", "imperator", "Император", "4,20", "", ""],
["", "gunkan-s-opashka-ot-raczi", "Гункан с опашка от раци", "5,60", "75", ""],
["", "gunkan-tobiko", "Гункан тобико", "4,20", "75", ""],
["", "uramaki-krab", "Урамаки краб", "3,50", "", ""],
["", "chuka-ika", "Чука-Ика", "4,90", "", ""],
["", "futomaki-somga-i-avokado-blek", "Футомаки сьомга и авокадо блек", "3,50", "", ""],
["", "uramaki-blek-ebi-fraj", "Урамаки блек еби фрай", "4,20", "", ""],
["", "filadelfiya-blek-chikn", "Филаделфия блек чикън", "3,50", "", ""],
["", "tarantula", "Тарантула", "4,20", "", ""],
["", "futomaki-blek-chikn", "Футомаки блек чикън", "4,20", "", ""]

            ],

            "Оши": [
                ["", "oshi-lavrak-i-krab", "Оши лаврак и краб", "4,20", "", ""],
["", "oshi-pushena-somga", "Оши пушена сьомга", "4,20", "", ""],
["", "oshi-vegan", "Оши веган", "4,20", "", ""]

            ],

            "Фокачи и чабати": [
                ["", "fokacha-s-chesn", "Фокача с чесън", "2,10", "240", ""],
["", "fokacha-s-miks-ot-semena", "Фокача с микс от семена", "2,10", "240", ""],
["", "fokacha-ss-susam", "Фокача със сусам", "2,10", "240", ""],
["", "fokacha-ss-zekhtin-i-sol-maldon", "Фокача със зехтин и сол Малдон", "2,10", "240", ""],
["", "fokacha-s-rozmarin-i-sol-maldon", "Фокача с розмарин и сол Малдон", "2,10", "240", ""],
["", "chabata-s-chesn", "Чабата с чесън", "0,70", "120", ""],
["", "chabata-ss-sirene", "Чабата със сирене", "1,40", "120", ""],
["", "chabata-ss-sirene-i-kashkaval", "Чабата със сирене и кашкавал", "1,40", "120", ""],
["", "fokacha-s-kashkaval", "Фокача с кашкавал", "2,10", "240", ""],
["", "fokacha-ss-sirene", "Фокача със сирене", "2,10", "240", ""],
["", "fokacha-ss-sirene-i-kashkaval", "Фокача със сирене и кашкавал", "2,10", "240", ""],
["", "chabata-s-kashkaval", "Чабата с кашкавал", "1,40", "120", ""]

            ],

            "Coca-Cola напитки": [
                ["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "330", "https://images.deliveryhero.io/image/fd-bg/Products/798123.jpg"]

            ],

            "Винен лист": [
                ["", "korten-natura-roze", "Korten Natura Розе", "16,80", "750", ""],
["", "korten-sira", "Korten Сира", "27,30", "750", ""],
["", "pure-pink-rose", "Pure Pink Rose", "17,50", "750", ""],
["", "quantum-shardone", "Quantum Шардоне", "5,60", "", ""],
["", "quantum-sovinon-blan", "Quantum Совиньон Блан", "5,60", "", ""],
["", "quantum-pino-noar-i-merlo", "Quantum Пино Ноар и Мерло", "5,60", "", ""]

            ]
        }', 
        'slug' => 'bianco-family',
        'business_name' => 'Bianco Family',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5005',
        'address' => 'ул. Оборище 18',
        'address_additional' => '',
        'coords_x' => '43.079169',
        'coords_y' => '25.59983',
        'phone' => '+359886700736',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "prikazka", "Приказка", "6,30", "400", ""],
["", "salata-s-tri-semena", "Салата с три семена", "4,90", "380", ""],
["", "salata-s-kinoa-burata-i-avokado", "Салата с киноа, бурата и авокадо", "6,30", "320", ""],
["", "rigoleto", "Риголето", "5,60", "350", ""],
["", "salata-avokado-i-snezhni-topki", "Салата авокадо и снежни топки", "5,60", "300", ""],
["", "moczarela-s-kedrovi-yadki", "Моцарела с кедрови ядки", "5,60", "350", ""],
["", "salata-chetiri-sirena", "Салата Четири сирена", "5,60", "240", ""],
["", "spanachena-salata-s-morski-darove-i-burata", "Спаначена салaта с морски дарове и бурата", "9,10", "330", ""],
["", "salata-ss-spanak-i-kinoa", "Салата със спанак и киноа", "4,90", "380", ""],
["", "salata-fitnes", "Салата Фитнес", "4,20", "380", ""],
["", "slavyanska-salata", "Славянска салата", "4,20", "350", ""],
["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "350", ""],
["", "shopska-salata", "Шопска салата", "3,50", "350", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "300", ""],
["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "3,50", "300", ""],
["", "snezhanka", "Снежанка", "3,50", "300", ""],
["", "zele-s-morkovi", "Зеле с моркови", "2,10", "300", ""],
["", "morkovi", "Моркови", "2,10", "300", ""],
["", "domati", "Домати", "2,80", "300", ""],
["", "krastaviczi", "Краставици", "2,80", "300", ""],
["", "beleni-domati", "Белени домати", "2,80", "300", ""],
["", "aziatska-salata-czezar", "Азиатска салата Цезар", "5,60", "350", ""],
["", "salata-nicza", "Салата Ница", "5,60", "350", ""],
["", "salata-ani", "Салата Ани", "5,60", "400", ""],
["", "salata-ss-spanak-edamame-i-riba-ton", "Салата със спанак, едамаме и риба тон", "9,80", "400", ""],
["", "salata-s-kajsii-i-koze-sirene", "Салата с кайсии и козе сирене", "6,30", "400", ""],
["", "salata-s-kinoa-i-khrupkavo-pile", "Салата с киноа и хрупкаво пиле", "5,60", "400", ""],
["", "shefska-salata", "Шефска салата", "4,90", "350", ""],
["", "salata-s-tursko-sirene-tipdil-i-sos-feta", "Салата с турско сирене Типдил и сос фета", "5,60", "350", ""],
["", "salata-czezar-s-kalmari-na-plocha", "Салата Цезар с калмари на плоча", "8,40", "350", ""],
["", "salata-czezar-s-khrupkavo-pile", "Салата Цезар с хрупкаво пиле", "6,30", "350", ""],
["", "salata-spanak-s-imperatorski-oriz", "Салата спанак с императорски ориз", "6,30", "450", ""],
["", "balkanska-salata", "Балканска салата", "6,30", "450", ""],
["", "salata-tabule-s-kinoa", "Салата Табуле с киноа", "4,20", "250", ""],
["", "salata-ss-spanak-somga-i-edamame", "Салата със спанак, сьомга и едамаме", "9,10", "380", ""],
["", "salata-s-kinoa-i-byala-riba", "Салата с киноа и бяла риба", "5,60", "400", ""]

            ],

            "starters": [
                ["", "zapecheni-brokoli-s-krem-ot-sirena-moczarela-i-parmezan", "Запечени броколи с крем от сирена, моцарела и пармезан", "4,90", "300", ""],
["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,20", "300", ""],
["", "kashkavaleni-kyuftencza", "Кашкавалени кюфтенца", "4,90", "300", ""],
["", "miks-ot-gorski-gbi", "Микс от горски гъби", "6,30", "250", ""],
["", "gshi-drob-na-plocha-s-ananas-krusha-i-sladko-ot-borovinki", "Гъши дроб на плоча с ананас, круша и сладко от боровинки", "12,60", "220", ""],
["", "fini-topeni-sirencza", "Фини топени сиренца", "5,60", "200", ""],
["", "pileshki-krilcza-s-barbekyu-sos", "Пилешки крилца с барбекю сос", "6,30", "400", ""],
["", "zapecheno-delikatesno-koze-sirene", "Запечено деликатесно  козе сирене", "7,70", "200", ""],
["", "kinoa-kyuftencza", "Киноа кюфтенца", "4,90", "280", ""],
["", "chorbadzhijski-chushki-ss-sirene", "Чорбаджийски чушки със сирене", "4,20", "300", ""],
["", "plneno-avokado-s-mus-ot-filadelfiya", "Пълнено авокадо с мус от Филаделфия", "6,30", "280", ""],
["", "zelenchuczi-v-khrupkava-tempura", "Зеленчуци в хрупкава темпура", "4,20", "300", ""]

            ],

            "dry-appetizer": [
                ["", "salchichon", "Салчичон", "1,40", "50", ""],
["", "file-elena", "Филе Елена", "2,10", "50", ""],
["", "sudzhuk", "Суджук", "1,40", "50", ""],
["", "proshuto", "Прошуто", "1,40", "50", ""],
["", "pastrma", "Пастърма", "2,10", "50", ""],
["", "chorizo", "Чоризо", "1,40", "50", ""],
["", "kashkaval", "Кашкавал", "0,70", "50", ""],
["", "sino-sirene", "Синьо сирене", "1,40", "50", ""],
["", "emental", "Ементал", "1,40", "50", ""],
["", "skamorcza", "Скаморца", "1,40", "50", ""],
["", "moczarela", "Моцарела", "1,40", "50", ""],
["", "sirene", "Сирене", "0,70", "50", ""],
["", "koze-sirene", "Козе сирене", "0,70", "50", ""],
["", "bivolsko-sirene", "Биволско сирене", "1,40", "50", ""],
["", "sirene-khalumi", "Сирене Халуми", "1,40", "50", ""]

            ],

            "pizza": [
                ["", "margarita", "Маргарита", "3,50", "", ""],
["", "vegetariana", "Вегетариана", "3,50", "", ""],
["", "proshuto-fungi", "Прошуто фунги", "4,90", "", ""],
["", "kaprichoza", "Капричоза", "4,20", "", ""],
["", "formadzho", "Формаджо", "4,20", "", ""],
["", "formadzho-luks", "Формаджо Лукс", "4,90", "", ""],
["", "kapreze", "Капрезе", "4,90", "", ""],
["", "khavaj", "Хавай", "4,20", "", ""],
["", "toskana", "Тоскана", "4,90", "", ""],
["", "francziskana", "Францискана", "4,20", "", ""],
["", "bilbo-begins", "Билбо Бегинс", "4,90", "", ""],
["", "bianko", "Бианко", "4,90", "", ""],
["", "organza", "Органза", "4,90", "", ""],
["", "nani", "Нани", "4,90", "", ""],
["", "dzhak", "Джак", "4,90", "", ""],
["", "roma", "Рома", "4,90", "", ""],
["", "kalczone", "Калцоне", "4,20", "", ""],
["", "piperone", "Пипероне", "4,90", "", ""],
["", "dariya", "Дария", "4,90", "", ""],
["", "vlcha-picza", "Вълча пица", "5,60", "", ""],
["", "belisima", "Белисима", "4,90", "", ""],
["", "bonifacho", "Бонифачо", "4,90", "", ""],
["", "onasis", "Онасис", "4,20", "", ""]

            ],

            "pasta": [
                ["", "spageti-amore-mio", "Спагети Amore Mio", "5,60", "350", ""],
["", "taliateli-frutti-di-mare", "Талиатели Frutti di Mare", "9,80", "350", ""],
["", "yajchni-spageti-s-pileshko-meso-i-susamovo-olio", "Яйчни спагети с пилешко месо и сусамово олио", "5,60", "360", ""],
["", "spageti-boloneze", "Спагети Болонезе", "4,90", "400", ""],
["", "spageti-karbonara", "Спагети Карбонара", "4,90", "400", ""],
["", "taliateli-s-manatarki-i-parmezan", "Талиатели с манатарки и пармезан", "5,60", "", ""]

            ],

            "risotto": [
                ["", "rizoto-s-pile", "Ризото с пиле", "5,60", "320", ""],
["", "rizoto-parma-s-pile", "Ризото Парма с пиле", "7,70", "300", ""],
["", "rizoto-parma-ss-svinsko", "Ризото Парма със свинско", "7,70", "300", ""],
["", "rizoto-s-kalmari", "Ризото с калмари", "8,40", "360", ""],
["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "300", ""],
["", "rizoto-s-manatarki", "Ризото с манатарки", "5,60", "300", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pueshko-s-vishni-i-marsala", "Пуешко с вишни и марсала", "9,10", "400", ""],
["", "aromatni-pileshki-kscheta-s-mashherka", "Ароматни пилешки късчета с мащерка", "6,30", "380", ""],
["", "pile-felis", "Пиле Фелис", "6,30", "350", ""],
["", "pileshki-kscheta-s-topeno-sirene", "Пилешки късчета с топено сирене", "6,30", "380", ""],
["", "pileshki-kscheta-v-teriyaki-sos", "Пилешки късчета в Терияки сос", "7,00", "300", ""],
["", "pileshka-glezotijka", "Пилешка глезотийка", "5,60", "350", ""],
["", "pikantno-pile", "Пикантно пиле", "7,00", "350", ""],
["", "tryufel-pile", "Трюфел пиле", "6,30", "380", ""],
["", "pueshki-stek-teriyaki", "Пуешки стек Терияки", "9,10", "350", ""],
["", "pile-black-pepper", "Пиле Black Pepper", "6,30", "380", ""],
["", "aziatsko-pile", "Азиатско пиле", "6,30", "340", ""],
["", "zapechena-pileshka-przhola", "Запечена пилешка пържола", "6,30", "350", ""],
["", "pateshko-magre", "Патешко магре", "12,60", "380", ""],
["", "pile-viena", "Пиле Виена", "7,70", "350", ""],
["", "pile-tapas", "Пиле Тапас", "7,70", "350", ""],
["", "pueshki-stek-s-yajchni-spageti-i-zelenchuczi", "Пуешки стек с яйчни спагети и зеленчуци", "9,10", "400", ""],
["", "pueshki-stek-family", "Пуешки стек Family", "9,10", "400", ""],
["", "pueshki-stek-ss-zelenchuczi", "Пуешки стек със зеленчуци", "7,00", "380", ""]

            ],

            "Ястия от свинско месо": [
                ["", "svinski-stek-family", "Свински стек Family", "10,50", "480", ""],
["", "svinski-kareta-s-aziatski-sos", "Свински карета с азиатски сос", "8,40", "400", ""],
["", "svinski-dzholan-ss-sos-zhu", "Свински джолан със сос Жу", "11,20", "450", ""],
["", "svinski-stekcheta-s-bilkovo-pesto", "Свински стекчета с билково песто", "9,10", "350", ""],
["", "krekhki-svinski-rebrcza", "Крехки свински ребърца", "11,20", "400", ""],
["", "vlchi-khapki", "Вълчи хапки", "8,40", "300", ""],
["", "svinski-buzi-s-pecheni-zelenchuczi", "Свински бузи с печени зеленчуци", "9,10", "400", ""],
["", "svinski-stek-vrat-na-bbq-s-gbi-shijtake", "Свински стек-врат на BBQ с гъби шийтаке", "10,50", "400", ""],
["", "agneshko-dzholanche", "Агнешко джоланче", "16,80", "400", ""],
["", "agneshki-kyufteta", "Агнешки кюфтета", "6,30", "300", ""],
["", "domashni-nadenichki-s-bilki", "Домашни наденички с билки", "8,40", "450", ""]

            ],

            "Ястия с телешко месо": [
                ["", "new-york-steak", "New York Steak", "34,30", "300", ""],
["", "teleshki-dzholan-s-kartofeno-pyure-i-khrupkava-tempura", "Телешки джолан с картофено пюре и хрупкава темпура", "7,70", "340", ""],
["", "teleshki-kyufteta", "Телешки кюфтета", "6,30", "290", ""],
["", "stek-dayana", "Стек Даяна", "16,80", "350", ""],
["", "teleshki-pepr-stek", "Телешки пепър стек", "16,80", "350", ""],
["", "teleshki-ramstek", "Телешки рамстек", "16,80", "350", ""],
["", "teleshi-ezik-v-maslo", "Телеши език в масло", "7,00", "200", ""],
["", "teleshki-filencza-s-chorizo", "Телешки филенца с чоризо", "11,20", "400", ""],
["", "agneshki-dzhamurki", "Агнешки джамурки", "5,60", "350", ""]

            ],

            "fish": [
                ["", "file-ot-lavrak-na-plocha", "Филе от лаврак на плоча", "16,10", "350", ""],
["", "somga-s-imperatorski-oriz-i-brokoli", "Сьомга с императорски ориз и броколи", "14,00", "450", ""],
["", "file-ot-somga", "Филе от сьомга", "14,00", "350", ""],
["", "filetirana-pstrva", "Филетирана пъстърва", "8,40", "250", ""],
["", "file-ot-lavrak-s-tikvichki", "Филе от лаврак с тиквички", "10,50", "350", ""],
["", "somga-ss-sos-bearnez", "Сьомга със сос Беарнез", "14,70", "350", ""],
["", "oktopod-ss-sos-ponzu", "Октопод със сос Понзу", "17,50", "280", ""]

            ],

            "Морски дарове": [
                ["", "kalmari-po-grczki", "Калмари по гръцки", "9,80", "250", ""],
["", "kalmari-na-plocha", "Калмари на плоча", "9,80", "200", ""],
["", "kalmari-v-sladko---kisel-sos", "Калмари в сладко - кисел сос", "9,80", "250", ""],
["", "skaridi-na-plocha-ss-zekhtinov-sos", "Скариди на плоча със зехтинов сос", "10,50", "200", ""],
["", "skaridi-na-plocha-s-mango-sos", "Скариди на плоча с манго сос", "10,50", "200", ""],
["", "skaridi-s-cheren-oriz", "Скариди с черен ориз", "7,70", "380", ""],
["", "shishcheta-ot-skaridi-ss-sladko-kisel-sos", "Шишчета от скариди със сладко кисел сос", "10,50", "250", ""],
["", "kralski-skaridi-v-pikanten-sos-s-cheren-oriz-i-parmezan", "Кралски скариди в пикантен сос с черен ориз и пармезан", "11,20", "280", ""]

            ],

            "grill": [
                ["", "svinsko-bon-file", "Свинско бон филе", "6,30", "200", ""],
["", "pileshko-file", "Пилешко филе", "4,90", "300", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "300", ""],
["", "pileshki-bon-filencza", "Пилешки бон филенца", "5,60", "300", ""],
["", "svinski-kareta", "Свински карета", "6,30", "300", ""],
["", "svinski-vrat", "Свински врат", "5,60", "300", ""]

            ],

            "Пърленки": [
                ["", "prlenka", "Пърленка", "0,70", "300", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "300", ""],
["", "prlenka-ss-susam", "Пърленка със сусам", "0,70", "300", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "350", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "2,10", "350", ""],
["", "gabrovska-prlenka", "Габровска пърленка", "0,70", "350", ""],
["", "cheren-khlyab", "Черен хляб", "0,00", "", ""]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "presni-przheni-kartofi", "Пресни пържени картофи", "2,10", "200", ""],
["", "presni-przheni-kartofi-ss-sirene", "Пресни пържени картофи със сирене", "2,10", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "250", ""],
["", "kombinirana-garnitura", "Комбинирана гарнитура", "0,70", "200", ""],
["", "studena-garnitura", "Студена гарнитура", "0,70", "200", ""],
["", "oriz", "Ориз", "0,70", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "200", ""],
["", "kartofi-sote", "Картофи соте", "2,10", "250", ""],
["", "zadusheni-brokoli", "Задушени броколи", "1,40", "200", ""],
["", "czarevicza-v-maslo", "Царевица в масло", "1,40", "200", ""],
["", "bejbi-kartofki-s-kopr-i-chesn", "Бейби картофки с копър и чесън", "2,10", "250", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "60", ""],
["", "sos-bearnez", "Сос Беарнез", "0,00", "60", ""],
["", "sos-pepr", "Сос Пепър", "0,00", "60", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "60", ""],
["", "sos-bbq", "Сос BBQ", "0,00", "60", ""],
["", "pikanten-sos", "Пикантен сос", "0,00", "60", ""],
["", "sos-tartar", "Сос Тартар", "0,00", "60", ""],
["", "sos-demiglas", "Сос Демиглас", "0,00", "60", ""],
["", "pechen-sos", "Печен сос", "0,00", "60", ""]

            ],

            "additives": [
                ["", "shunka", "Шунка", "0,00", "30", ""],
["", "kashkaval", "Кашкавал", "0,00", "30", ""],
["", "moczarela", "Моцарела", "0,70", "30", ""],
["", "topeno-sirene", "Топено сирене", "0,00", "30", ""],
["", "sirene", "Сирене", "0,00", "30", ""],
["", "bekon", "Бекон", "0,00", "30", ""],
["", "lukankov-salam", "Луканков салам", "0,00", "30", ""],
["", "proshuto", "Прошуто", "0,70", "30", ""],
["", "shpek", "Шпек", "0,00", "30", ""],
["", "pusheno-pileshko-file", "Пушено пилешко филе", "0,00", "30", ""],
["", "presen-piper", "Пресен пипер", "0,00", "30", ""],
["", "presni-gbi", "Пресни гъби", "0,00", "30", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "30", ""],
["", "domati", "Домати", "0,00", "100", ""],
["", "maslini", "Маслини", "0,00", "30", ""],
["", "czarevicza", "Царевица", "0,00", "30", ""],
["", "kiseli-krastavichki", "Кисели краставички", "0,00", "30", ""],
["", "yajcze", "Яйце", "0,00", "30", ""],
["", "ananas", "Ананас", "0,00", "60", ""],
["", "riba-ton", "Риба тон", "0,70", "30", ""],
["", "manatarki", "Манатарки", "0,70", "60", ""],
["", "pusheno-sirene", "Пушено сирене", "0,00", "30", ""]

            ],

            "desserts": [
                ["", "domashna-biskvitena-torta-s-maskarpone", "Домашна бисквитена торта с маскарпоне", "3,50", "200", ""],
["", "torta-bianko", "Торта Бианко", "3,50", "180", ""],
["", "shokoladova-fantaziya", "Шоколадова Фантазия", "3,50", "200", ""],
["", "chijzkejk-s-borovinki", "Чийзкейк с боровинки", "2,80", "200", ""],
["", "limonov-tart", "Лимонов тарт", "2,80", "150", ""],
["", "domashna-orekhova-torta", "Домашна орехова торта", "2,80", "150", ""],
["", "karamelena-torta-s-bejlis", "Карамелена торта с Бейлис", "3,50", "200", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "0,70", "330", ""],
["", "schweppes-tonik", "Schweppes Тоник", "0,70", "330", ""],
["", "coca-cola-bez-zakhar", "Coca-Cola Без захар", "0,70", "330", ""],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "330", ""],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "0,70", "330", ""]

            ],

            "Безалкохолни напитки": [
                ["", "studen-chaj-balkan", "Студен чай Балкан", "0,70", "500", ""],
["", "fresh-grejpfrut", "Фреш Грейпфрут", "3,50", "500", ""],
["", "ajryan-balkan", "Айрян Балкан", "0,70", "", ""],
["", "fresh-portokal", "Фреш Портокал", "3,50", "500", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна баня", "0,70", "500", ""],
["", "fresh-bianko", "Фреш Бианко", "4,90", "500", ""],
["", "fresh-nar", "Фреш Нар", "5,60", "500", ""],
["", "fresh-mandarina", "Фреш Мандарина", "3,50", "500", ""]

            ],

            "beer": [
                ["", "kamenicza-ken", "Каменица кен", "1,40", "500", ""],
["", "staropramen-ken", "Старопрамен кен", "1,40", "500", ""]

            ],

            "Бяло вино": [
                ["", "bratya-minkovi-shardone", "Братя Минкови Шардоне", "16,80", "750", ""],
["", "sajkl", "Сайкъл", "10,50", "750", ""],
["", "sajkl-byalo-vino", "Сайкъл бяло вино", "5,60", "375", ""],
["", "sajkl-roze", "Сайкъл Розе", "10,50", "750", ""],
["", "le-photographe-sovinon-blan", "Le photographe Совиньон блан", "20,30", "750", ""]

            ],

            "Червено вино": [
                ["", "bratya-minkovi-kaberne-sovinon", "Братя Минкови Каберне Совиньон", "16,10", "750", ""],
["", "sajkl-merlo-i-pino-noar", "Сайкъл Мерло и Пино Ноар", "10,50", "750", ""],
["", "bratya-minkovi-merlo", "Братя Минкови Мерло", "17,50", "750", ""],
["", "le-photographe-pino-noar", "Le photographe Пино Ноар", "20,30", "750", ""],
["", "sajkl-cherveno-vino", "Сайкъл червено вино", "5,60", "375", ""]

            ],

            "Суши Калифорния": [
                ["", "kaliforniya---khrupkava-somga", "Калифорния - Хрупкава сьомга", "4,20", "", ""],
["", "kaliforniya---anago", "Калифорния - Анаго", "4,90", "", ""],
["", "kaliforniya---ton-avokado-i-susam", "Калифорния - Тон, авокадо и сусам", "3,50", "", ""],
["", "kaliforniya---kanimi", "Калифорния - Каними", "2,80", "", ""],
["", "kaliforniya---kaliforniya-red", "Калифорния - Калифорния ред", "4,20", "", ""]

            ],

            "Суши Филаделфия": [
                ["", "filadelfiya---khrupkava-somga", "Филаделфия - Хрупкава сьомга", "3,50", "", ""],
["", "filadelfiya---khrupkava-skarida", "Филаделфия - Хрупкава скарида", "3,50", "", ""],
["", "filadelfiya---khrupkavo-pile", "Филаделфия - Хрупкаво пиле", "2,80", "", ""],
["", "filadelfiya---fitnes-filadelfiya", "Филаделфия - Фитнес Филаделфия", "2,80", "", ""],
["", "filadelfiya---fitnes-skarida", "Филаделфия - Фитнес Скарида", "3,50", "", ""],
["", "filadelfiya---fitnes-khrupkavo-pile", "Филаделфия - Фитнес Хрупкаво пиле", "2,80", "", ""],
["", "filadelfiya---khrupkava-riba", "Филаделфия - Хрупкава риба", "2,80", "", ""],
["", "filadelfiya---krispi", "Филаделфия - Криспи", "2,80", "", ""],
["", "filadelfiya-khot", "Филаделфия Хот", "3,50", "", ""],
["", "filadelfiya---paradajz", "Филаделфия - Парадайз", "4,90", "", ""],
["", "filadelfiya-krab", "Филаделфия Краб", "2,80", "", ""],
["", "filadelfiya-ton", "Филаделфия Тон", "3,50", "", ""],
["", "filadelfiya-pikanten-ton", "Филаделфия пикантен тон", "3,50", "", ""],
["", "filadelfiya---kanimi", "Филаделфия - Каними", "2,80", "", ""]

            ],

            "Суши Футомаки": [
                ["", "futomaki-somga-i-avokado", "Футомаки Сьомга и авокадо", "4,20", "", ""],
["", "futomaki-pikanten-ton", "Футомаки Пикантен тон", "4,20", "", ""],
["", "futomaki-uakame", "Футомаки Уакаме", "4,20", "", ""],
["", "futomaki-kanimi", "Футомаки Каними", "2,80", "", ""],
["", "futomaki-skarida", "Футомаки скарида", "4,20", "", ""]

            ],

            "Суши Хосомаки": [
                ["", "khosomaki-somga", "Хосомаки сьомга", "2,80", "", ""],
["", "khosomaki-pushena-somga", "Хосомаки пушена сьомга", "3,50", "", ""],
["", "khosomaki-krastavicza", "Хосомаки краставица", "2,10", "", ""],
["", "khosomaki-krastavicza-i-filadelfiya", "Хосомаки Краставица и филаделфия", "2,10", "", ""],
["", "khosomaki-avokado", "Хосомаки авокадо", "2,10", "", ""],
["", "khosomaki-filadelfiya-i-avokado", "Хосомаки Филаделфия и авокадо", "2,10", "", ""],
["", "khosomaki-somga-i-avokado", "Хосомаки Сьомга и авокадо", "3,50", "", ""],
["", "khosomaki-ton", "Хосомаки тон", "3,50", "", ""],
["", "khosomaki-uakame", "Хосомаки Уакаме", "2,10", "", ""]

            ],

            "Суши Сашими и Нигири": [
                ["", "sashimi-somga", "Сашими сьомга", "4,90", "80", ""],
["", "sashimi-ton", "Сашими Тон", "4,90", "80", ""],
["", "ton-tataki", "Тон Татаки", "4,90", "85", ""],
["", "somga-tataki", "Сьомга Татаки", "4,90", "85", ""],
["", "nigiri-somga", "Нигири Сьомга", "2,80", "65", ""],
["", "nigiri-ton", "Нигири Тон", "2,80", "65", ""],
["", "nigiri-skarida", "Нигири Скарида", "2,80", "50", ""],
["", "nigiri-anago", "Нигири Анаго", "4,90", "55", ""]

            ],

            "Суши Маями стил": [
                ["", "mayami-stil---tobiko-rol", "Маями стил - Тобико Рол", "3,50", "", ""],
["", "mayami-stil---dga", "Маями стил - Дъга", "4,20", "", ""],
["", "mayami-stil---norvezhka-gora", "Маями стил - Норвежка гора", "4,20", "", ""],
["", "mayami-stil---inferno", "Маями стил - Инферно", "4,20", "", ""],
["", "mayami-stil---midori", "Маями стил - Мидори", "2,80", "", ""],
["", "mayami-stil---salmon-lov", "Маями стил - Салмон лов", "4,20", "", ""],
["", "mayami-stil---salmon-ekzotik", "Маями стил - Салмон екзотик", "4,20", "", ""],
["", "mayami-stil---krispi-salmon-rol", "Маями стил - Криспи салмон рол", "4,20", "", ""],
["", "mayami-stil---kalipso", "Маями стил - Калипсо", "4,20", "", ""],
["", "mayami-stil---vulkan", "Маями стил - Вулкан", "4,20", "", ""],
["", "mayami-stil---fresh-rol", "Маями стил - Фреш рол", "3,50", "", ""],
["", "mayami-stil---vezuvij", "Маями стил - Везувий", "4,20", "", ""],
["", "mayami-stil---ichiban", "Маями стил - Ичибан", "4,20", "", ""],
["", "mayami-stil---krispi-maguro", "Маями стил - Криспи магуро", "4,20", "", ""],
["", "mayami-stil---kajzen", "Маями стил - Кайзен", "5,60", "", ""],
["", "mayami-stil---krispi-salmon", "Маями стил - Криспи Салмон", "3,50", "", ""],
["", "mayami-stil---kanpeki", "Маями стил - Канпеки", "4,20", "", ""],
["", "mayami-stil---mango-krab", "Маями стил - Манго Краб", "2,80", "110", ""],
["", "mayami-stil---mango-filadelfiya", "Маями стил - Манго Филаделфия", "3,50", "", ""],
["", "mayami-stil---mango-fresh", "Маями стил - Манго Фреш", "3,50", "", ""],
["", "mayami-stil---imperator", "Маями стил - Император", "4,20", "", ""],
["", "mayami-stil---dinamit", "Маями стил - Динамит", "2,80", "", ""],
["", "mayami-stil---khosomaki-skaridi", "Маями стил - Хосомаки скариди", "3,50", "", ""],
["", "mayami-stil---alyaska", "Маями стил - Аляска", "2,80", "", ""],
["", "mayami-stil---red-tobiko", "Маями стил - Ред Тобико", "3,50", "", ""],
["", "mayami-stil---krab-rol", "Маями стил - Краб Рол", "2,80", "", ""],
["", "mayami-stil---teriyaki-maguro", "Маями стил - Терияки Магуро", "3,50", "", ""],
["", "mayami-stil---blek-mamba", "Маями стил - Блек Мамба", "4,20", "", ""]

            ],

            "Суши Салати": [
                ["", "goma-uakame", "Гома Уакаме", "4,90", "250", ""],
["", "edamame", "Едамаме", "2,80", "180", ""],
["", "edamame-s-miso-lajm-i-menta", "Едамаме с мисо, лайм и мента", "2,80", "200", ""]

            ],

            "Суши Комбо": [
                ["", "kombo---nigiri-klasik", "Комбо - Нигири Класик", "16,10", "", ""],
["", "smr-kombo", "Съмър Комбо", "10,50", "", ""],
["", "temari-kombo", "Темари Комбо", "13,30", "", ""],
["", "khosomaki-kombo", "Хосомаки комбо", "9,10", "", ""],
["", "somga-kombo", "Сьомга Комбо", "17,50", "", ""],
["", "kabuki-kombo", "Кабуки Комбо", "21,00", "", ""],
["", "osaka-kombo", "Осака Комбо", "14,00", "", ""],
["", "umami-kombo", "Умами Комбо", "18,20", "", ""],
["", "maki-kombo", "Маки Комбо+", "16,80", "", ""],
["", "filadelfiya-kombo", "Филаделфия Комбо", "14,70", "", ""],
["", "paradajz-kombo", "Парадайз Комбо", "15,40", "", ""],
["", "kombo-za-priyateli", "Комбо за приятели", "18,90", "", ""],
["", "dzhmbo-filadelfiya-kombo", "Джъмбо Филаделфия Комбо", "29,40", "", ""],
["", "best-seller-kombo", "Best Seller Комбо", "17,50", "", ""],
["", "vegi-khoso-kombo", "Веги Хосо Комбо", "7,00", "", ""],
["", "somga-set", "Сьомга сет", "20,30", "", ""]

            ],

            "Суши Темари и Тартари": [
                ["", "temari-teriyaki-ton", "Темари Терияки тон", "4,20", "", ""],
["", "temari-somga", "Темари сьомга", "4,20", "", ""],
["", "temari-skarida", "Темари скарида", "4,20", "", ""],
["", "tartari-spajsi-somga", "Тартари спайси сьомга", "2,80", "", ""],
["", "tartari-spajsi-krab", "Тартари спайси краб", "2,10", "", ""],
["", "tartari-spajsi-ton", "Тартари спайси тон", "4,20", "", ""]

            ]
        }', 
        'slug' => 'casa-di-bianco',
        'business_name' => 'Casa di Bianco',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'пл. Майка България 1',
        'address_additional' => '',
        'coords_x' => '43.08143553',
        'coords_y' => '25.63217557',
        'phone' => '+359882552661 ; 359882633772',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "binka", "Бинка", "4,20", "500", ""],
["", "vegetariana", "Вегетариана", "4,20", "500", ""],
["", "vlcha", "Вълча", "5,60", "500", ""],
["", "deni", "Дени", "4,90", "500", ""],
["", "kaprichoza", "Капричоза", "4,20", "500", ""],
["", "lyuta-picza", "Люта пица", "5,60", "500", ""],
["", "margarita", "Маргарита", "3,50", "400", ""],
["", "marchela", "Марчела", "4,20", "500", ""],
["", "na-shefa", "На шефа", "5,60", "500", ""],
["", "salami", "Салами", "4,90", "500", ""],
["", "selska-picza", "Селска пица", "5,60", "500", ""],
["", "chetiri-sezona", "Четири сезона", "5,60", "500", ""]

            ],

            "salads": [
                ["", "mekhandzhijska-salata", "Механджийска салата", "5,60", "550", ""],
["", "salatata-na-shefa", "Салатата на шефа", "5,60", "550", ""],
["", "balkanska-salata", "Балканска салата", "3,50", "450", ""],
["", "kalugerska-salata", "Калугерска салата", "3,50", "400", ""],
["", "karakachanska-salata", "Каракачанска салата", "3,50", "450", ""],
["", "manastirska-salata", "Манастирска салата", "4,20", "400", ""],
["", "zhtvarska-salata", "Жътварска салата", "2,80", "450", ""],
["", "babina", "Бабина", "2,80", "350", ""],
["", "dyadovata", "Дядовата", "3,50", "450", ""],
["", "rodopska", "Родопска", "2,80", "300", ""],
["", "siromashka", "Сиромашка", "2,10", "250", ""],
["", "pechen-piper", "Печен пипер", "2,80", "250", ""],
["", "salata-morkov", "Салата морков", "2,10", "300", ""],
["", "zele-i-morkovi", "Зеле и моркови", "2,10", "300", ""],
["", "vitaminozna-salata", "Витаминозна салата", "2,80", "300", ""],
["", "snezhanka", "Снежанка", "2,80", "200", ""],
["", "ovcharska", "Овчарска", "3,50", "450", ""],
["", "meshana", "Мешана", "2,80", "250", ""],
["", "domati", "Домати", "2,10", "250", ""],
["", "domati-ss-sirene", "Домати със сирене", "2,80", "300", ""],
["", "krastaviczi", "Краставици", "2,10", "250", ""],
["", "krastaviczi-ss-sirene", "Краставици със сирене", "2,80", "300", ""],
["", "vareni-kartofi-s-luk", "Варени картофи с лук", "2,10", "300", ""],
["", "maslini-s-luk", "Маслини с лук", "2,80", "250", ""],
["", "proletna-salata", "Пролетна салата", "2,80", "400", ""],
["", "grczka-salata", "Гръцка салата", "3,50", "450", ""],
["", "beleni-domati-s-moczarela", "Белени домати с моцарела", "4,90", "400", ""],
["", "salata-czezar", "Салата Цезар", "4,90", "450", ""],
["", "katk-s-pechen-piper", "Катък с печен пипер", "2,80", "250", ""]

            ],

            "alaminuti": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250", ""],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "200", ""],
["", "sotirani-kartofi", "Сотирани картофи", "2,80", "400", ""],
["", "domashni-kartofi", "Домашни картофи", "2,10", "300", ""],
["", "domashni-kartofi-ss-sirene", "Домашни картофи със сирене", "2,80", "350", ""],
["", "khrupkavi-topeni-sirencza-ss-sladko-ot-borovinki", "Хрупкави топени сиренца със сладко от боровинки", "3,50", "250", ""],
["", "khrupkavi-sirencza", "Хрупкави сиренца", "2,80", "200", ""],
["", "khrupkavi-kashkavalcheta", "Хрупкави кашкавалчета", "2,80", "200", ""],
["", "sirencza-ss-susam", "Сиренца със сусам", "2,80", "200", ""],
["", "pileshki-khapki-pane", "Пилешки хапки пане", "3,50", "200", ""],
["", "pileshki-khapki-ss-susam", "Пилешки хапки със сусам", "3,50", "200", ""],
["", "pileshki-khapki-s-kornflejks", "Пилешки хапки с корнфлейкс", "3,50", "200", ""],
["", "panirani-brokoli-s-kornflejks", "Панирани броколи с корнфлейкс", "2,80", "300", ""],
["", "brokoli-ss-sos-ot-sirena", "Броколи със сос от сирена", "3,50", "400", ""],
["", "brokoli-ss-sino-sirene-i-smetana", "Броколи със синьо сирене и сметана", "3,50", "350", ""],
["", "kashkaval-pane", "Кашкавал пане", "2,80", "200", ""],
["", "omlet-natyur", "Омлет натюр", "1,40", "150", ""],
["", "omlet-ss-sirene", "Омлет със сирене", "2,10", "200", ""],
["", "omlet-s-kashkaval", "Омлет с кашкавал", "2,10", "200", ""],
["", "omlet-s-shunka-i-kashkaval", "Омлет с шунка и кашкавал", "2,80", "250", ""]

            ],

            "Топли мезета": [
                ["", "pileshki-drobcheta-po-selski", "Пилешки дробчета по селски", "3,50", "550", ""],
["", "pileshki-drobcheta-s-shunka-gbi-i-kashkaval", "Пилешки дробчета с шунка, гъби и кашкавал", "3,50", "400", ""],
["", "pileshki-drobcheta-s-luk-i-gbi", "Пилешки дробчета с лук и гъби", "2,80", "400", ""],
["", "vodenichki-po-lovdzhijski", "Воденички по ловджийски", "3,50", "450", ""],
["", "vodenichki-pane", "Воденички пане", "2,80", "250", ""],
["", "vodenichki-s-luk", "Воденички с лук", "2,80", "300", ""],
["", "pileshki-srcza-na-tigan", "Пилешки сърца на тиган", "2,80", "300", ""],
["", "pileshki-srcza-s-luk-i-gbi", "Пилешки сърца с лук и гъби", "2,80", "300", ""],
["", "pileshka-meshanicza", "Пилешка мешаница", "4,90", "600", ""],
["", "pileshki-aromatni-khapki", "Пилешки ароматни хапки", "3,50", "250", ""],
["", "svinski-aromatni-khapki", "Свински ароматни хапки", "4,90", "250", ""],
["", "khrupkavi-pileshki-krilcza", "Хрупкави пилешки крилца", "3,50", "300", ""],
["", "marinovani-pileshki-krilcza-na-tigan", "Мариновани пилешки крилца на тиган", "3,50", "300", ""],
["", "svinski-ezik-v-maslo", "Свински език в масло", "4,90", "200", ""],
["", "svinski-ezik-pane", "Свински език пане", "5,60", "250", ""],
["", "teleshki-ezik-v-maslo", "Телешки език в масло", "7,70", "200", ""],
["", "teleshki-ezik-pane", "Телешки език пане", "7,70", "250", ""],
["", "presni-gbki-v-maslo", "Пресни гъбки в масло", "2,80", "250", ""],
["", "presni-gbki-s-bekon-i-kashkaval", "Пресни гъбки с бекон и кашкавал", "3,50", "350", ""],
["", "chobansko-meze", "Чобанско мезе", "5,60", "250", ""],
["", "shkembe-v-maslo", "Шкембе в масло", "4,90", "250", ""]

            ],

            "grill": [
                ["", "kebapche", "Кебапче", "0,70", "", ""],
["", "kyufte", "Кюфте", "0,70", "", ""],
["", "karnache", "Карначе", "2,10", "200", ""],
["", "klczana-nadenicza", "Кълцана наденица", "4,20", "300", ""],
["", "sudzhuk-na-greben", "Суджук на гребен", "4,20", "300", ""],
["", "pileshka-przhola-ot-file", "Пилешка пържола от филе", "2,80", "200", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "2,80", "250", ""],
["", "pileshko-shishche", "Пилешко шишче", "1,40", "100", ""],
["", "pileshki-srcza-na-shish", "Пилешки сърца на шиш", "0,70", "", ""],
["", "pileshki-flejki", "Пилешки флейки", "2,80", "200", ""],
["", "pileshki-krilcza", "Пилешки крилца", "2,80", "300", ""],
["", "svinski-vrat", "Свински врат", "3,50", "200", ""],
["", "svinski-karencza", "Свински каренца", "3,50", "200", ""],
["", "svinski-rebrcza", "Свински ребърца", "4,20", "300", ""],
["", "svinsko-shishche", "Свинско шишче", "1,40", "100", ""],
["", "svinsko-bon-file", "Свинско бон филе", "5,60", "300", ""],
["", "svinski-drob-s-luk", "Свински дроб /с лук/", "2,80", "350", ""],
["", "meshena-skara", "Мешена скара", "9,10", "700", ""],
["", "mekhandzhijsko-plato", "Механджийско плато", "19,60", "1500", ""],
["", "petlov-kol", "Петльов кол", "7,00", "500", ""]

            ],

            "Ястия от пилешко месо": [
                ["", "pileshko-vreteno", "Пилешко вретено", "6,30", "600", ""],
["", "speczialitet-patrashkiya", "Специалитет Патрашкия", "4,90", "400", ""],
["", "pile-bearnez", "Пиле Беарнез", "4,20", "450", ""],
["", "byalo-pile", "Бяло пиле", "4,20", "400", ""],
["", "pile-zhulien", "Пиле Жулиен", "4,90", "400", ""],
["", "bolyarsko-pile", "Болярско пиле", "4,20", "450", ""],
["", "pileshki-kscheta-s-gbi-i-topeno-sirene", "Пилешки късчета с гъби и топено сирене", "4,90", "400", ""],
["", "mandradzhijsko-pile", "Мандраджийско пиле", "5,60", "450", ""],
["", "zagrnato-pile", "Загърнато пиле", "4,90", "450", ""],
["", "pile-v-palachinka", "Пиле в палачинка", "4,90", "450", ""],
["", "selska-bokhcha", "Селска Бохча", "6,30", "", ""]

            ],

            "Ястия от свинско месо": [
                ["", "pecheno-svinsko-dzholanche", "Печено свинско джоланче", "14,00", "", ""],
["", "khajdushka-klczanicza", "Хайдушка кълцаница", "4,90", "500", ""],
["", "svinski-mrvki-na-tigan", "Свински мръвки на тиган", "5,60", "400", ""],
["", "svinsko-vreteno", "Свинско вретено", "8,40", "600", ""],
["", "svinski-karencza-s-pepr-sos", "Свински каренца с пепър сос", "4,90", "400", ""],
["", "drusan-kebap", "Друсан кебап", "4,20", "500", ""],
["", "svinsko-bon-file-s-manatarki-i-garnitura-domashni-kartofi", "Свинско бон филе с манатарки и гарнитура домашни картофи", "7,70", "400", ""],
["", "shopska-przhenicza", "Шопска пърженица", "4,20", "450", ""],
["", "przheni-rebrcza-s-vino-i-manatarki", "Пържени ребърца с вино и манатарки", "5,60", "350", ""],
["", "shniczel-po-vienski", "Шницел по Виенски", "7,00", "500", ""],
["", "svinska-bokhcha", "Свинска бохча", "7,00", "", ""]

            ],

            "Ястия в гювечета и керемиди": [
                ["", "sirene-po-shopski", "Сирене по шопски", "2,80", "300", ""],
["", "svinska-kavrma", "Свинска кавърма", "4,20", "450", ""],
["", "pileshka-kavrma", "Пилешка кавърма", "3,50", "450", ""],
["", "vlcho-meso", "Вълчо месо", "7,00", "600", ""],
["", "chili", "Чили", "4,90", "450", ""],
["", "zapecheni-kartofi-s-bekon", "Запечени картофи с бекон", "3,50", "500", ""],
["", "zapecheni-kartofi-s-brokoli", "Запечени картофи с броколи", "2,80", "500", ""],
["", "zapecheni-kartofi-ss-sirene", "Запечени картофи със сирене", "2,80", "500", ""],
["", "karakachansko-meze", "Каракачанско мезе", "4,20", "450", ""]

            ],

            "sachs": [
                ["", "sach-po-rodopski", "Сач по родопски", "5,60", "450", ""],
["", "pile-ss-smetanov-sos-i-zelenchuczi", "Пиле със сметанов сос и зеленчуци", "5,60", "500", ""],
["", "pileshki-kscheta-s-gbi-i-kashkaval", "Пилешки късчета с гъби и кашкавал", "4,90", "450", ""],
["", "manastirski-sach", "Манастирски сач", "5,60", "500", ""],
["", "kolarski-sach", "Коларски сач", "7,00", "450", ""],
["", "svinsko-meso-po-selski-na-sach", "Свинско месо по селски на сач", "5,60", "500", ""],
["", "chorbadzhijski-sach", "Чорбаджийски сач", "14,00", "", ""],
["", "lovdzhijski-sach", "Ловджийски сач", "6,30", "500", ""]

            ],

            "fish": [
                ["", "skumriya-na-skara", "Скумрия на скара", "3,50", "300", ""],
["", "pstrva-na-skara", "Пъстърва на скара", "4,90", "300", ""],
["", "przhen-sharan", "Пържен шаран", "4,90", "300", ""],
["", "kalmari-pane", "Калмари пане", "4,20", "200", ""],
["", "przheni-midi", "Пържени миди", "4,20", "200", ""],
["", "przhen-som", "Пържен сом", "6,30", "300", ""],
["", "czipura", "Ципура", "7,00", "300", ""],
["", "lavrak", "Лаврак", "9,80", "300", ""]

            ],

            "garnish": [
                ["", "domati", "Домати", "0,70", "100", ""],
["", "krastaviczi", "Краставици", "0,70", "100", ""],
["", "zele-i-morkovi", "Зеле и моркови", "0,70", "100", ""],
["", "lyutenicza", "Лютеница", "0,70", "100", ""],
["", "vareni-kartofi", "Варени картофи", "0,70", "150", ""],
["", "kartofeno-pyure", "Картофено пюре", "0,70", "150", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "150", ""],
["", "zadusheni-zelenchuczi", "Задушени зеленчуци", "1,40", "200", ""],
["", "lyuta-chushka", "Люта чушка", "0,00", "", ""]

            ],

            "Сухи мезета": [
                ["", "sudzhuk", "Суджук", "2,80", "100", ""],
["", "lukanka", "Луканка", "2,80", "100", ""],
["", "pastrma", "Пастърма", "4,20", "100", ""],
["", "file-elena", "Филе Елена", "3,50", "100", ""],
["", "role-trapezicza", "Роле Трапезица", "3,50", "100", ""],
["", "sirene-natyur", "Сирене натюр", "0,70", "100", ""],
["", "kashkaval-natyur", "Кашкавал натюр", "1,40", "100", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "50", ""],
["", "pikanten-sos", "Пикантен сос", "0,00", "50", ""],
["", "ketchup", "Кетчуп", "0,00", "50", ""],
["", "majoneza", "Майонеза", "0,00", "50", ""],
["", "gorchicza", "Горчица", "0,00", "50", ""],
["", "zekhtin", "Зехтин", "0,00", "50", ""],
["", "soev-sos", "Соев сос", "0,00", "50", ""],
["", "gben-sos", "Гъбен сос", "0,70", "150", ""]

            ],

            "Пърленки": [
                ["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "0,70", "250", ""],
["", "prlenka-s-chesn", "Пърленка с чесън", "0,70", "200", ""],
["", "prlenka-ss-zekhtin", "Пърленка със зехтин", "0,70", "200", ""],
["", "prlenka-ss-zekhtin-i-rigan", "Пърленка със зехтин и риган", "0,70", "200", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "0,70", "250", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "1,40", "", ""]

            ]
        }', 
        'slug' => 'mehana-petleto',
        'business_name' => 'Механа Петлето',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ул. Народни будители 24',
        'address_additional' => '',
        'coords_x' => '43.0721832',
        'coords_y' => '25.6119021',
        'phone' => '+359878778494; +359878640571',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
        'price_range' => '',
        'tables' => '',
        'description' => '',
        'agreement' => '0',
        'created_at' => Carbon::now(),
    ],
[
        'creator_id' => 1,
        'dishes_ids' => '{
            
            "Специални нови предложения от Его": [
                ["", "pecheno-pile-na-bbq-12", "Печено пиле на BBQ 1/2", "7,70", "800", ""],
["", "svinski-rebra-san-daniele", "Свински ребра Сан Даниеле", "8,40", "600", ""],
["", "svinski-grdi-na-plocha-vv-vakuumna-sreda-s-garnitura", "Свински гърди на плоча във вакуумна среда с гарнитура", "9,10", "650", ""],
["", "svinski-vrat-na-plocha-vv-vakuumna-sreda-s-garnitura", "Свински врат на плоча във вакуумна среда с гарнитура", "8,40", "450", ""],
["", "svinski-vrat-na-skara", "Свински врат на скара", "8,40", "500", ""],
["", "pechen-svinski-dzholan", "Печен свински джолан", "10,50", "900", ""],
["", "svinsko-shareno-mescze-na-skara", "Свинско шарено месце на скара", "7,70", "450", ""],
["", "svinski-ushichki-na-tigan", "Свински ушички на тиган", "6,30", "400", ""],
["", "svinski-ribichka-na-skara", "Свински рибичка на скара", "8,40", "450", ""],
["", "domashni-kyuftencza-na-skara", "Домашни кюфтенца на скара", "6,30", "400", ""],
["", "svinsko-bon-file-na-skara", "Свинско бон филе на скара", "8,40", "450", ""],
["", "domashen-sudzhuk", "Домашен суджук", "7,70", "280", ""],
["", "teleshki-pepr-stek", "Телешки пепър стек", "15,40", "300", ""],
["", "pecheni-zelenchuczi-na-skara", "Печени зеленчуци на скара", "5,60", "350", ""],
["", "przheni-kartofi", "Пържени картофи", "1,40", "200", ""],
["", "przheni-sladki-kartofi", "Пържени сладки картофи", "2,80", "200", ""],
["", "domashen-kartofen-chips", "Домашен картофен чипс", "2,80", "280", ""],
["", "kashkavalcheta-v-bekon-na-shish", "Кашкавалчета в бекон на шиш", "6,30", "350", ""],
["", "sirencza-v-bekon-na-shish", "Сиренца в бекон на шиш", "5,60", "300", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "6,30", "250", ""],
["", "bivolsko-sirene-na-plocha", "Биволско сирене на плоча", "4,90", "250", ""],
["", "pileshki-krilcza", "Пилешки крилца", "9,80", "800", ""],
["", "teleshki-chijzburger", "Телешки чийзбургер", "7,00", "450", ""],
["", "pileshki-burger", "Пилешки бургер", "7,00", "450", ""],
["", "burger-s-klczano-meso", "Бургер с кълцано месо", "7,00", "450", ""],
["", "vegetarianski-burger", "Вегетариански бургер", "7,00", "400", ""],
["", "vegan-burger", "Веган бургер", "7,00", "400", ""],
["", "przheni-kalmari", "Пържени калмари", "8,40", "250", ""],
["", "kalmari-na-plocha-s-kopr-i-chesn", "Калмари на плоча с копър и чесън", "8,40", "250", ""],
["", "pikantni-tirgrovi-skaridi", "Пикантни тиргрови скариди", "10,50", "200", ""],
["", "chernomorski-midi", "Черноморски миди", "5,60", "800", ""]

            ],

            "Целодневно седмично меню": [
                ["", "pile-moczarela-ss-svezha-salata-i-chesnov-sos", "Пиле Моцарела със свежа салата и чеснов сос", "4,20", "400", ""],
["", "trojka-kyufteta-s-garnitura", "Тройка кюфтета с гарнитура", "4,20", "400", ""],
["", "zapekanka-ss-svinski-dzholan-teleshki-ezik-gbki-i-kashkaval", "Запеканка със свински джолан, телешки език, гъбки и кашкавал", "4,90", "400", ""],
["", "shafranovo-rizoto-ss-sushen-domat-pesto-i-parmezan", "Шафраново ризото със сушен домат, песто и пармезан", "3,50", "400", ""],
["", "picza-s-domatena-pasta-pileshko-pusheno-file-gbi-topeno-sirene-i-kashkaval", "Пица с доматена паста, пилешко пушено филе, гъби, топено сирене и кашкавал", "4,20", "", ""],
["", "skumriya-na-furna-ss-zelenchuczi-i-zelena-salatka", "Скумрия на фурна със зеленчуци и зелена салатка", "4,20", "400", ""]

            ],

            "salads": [
                ["", "zelena-salata-s-riba-ton-i-anshoa", "Зелена салата с риба тон и аншоа", "4,90", "350", ""],
["", "salata-ss-somga-na-plocha", "Салата със сьомга на плоча", "7,00", "350", ""],
["", "zelena-salata-s-repichki", "Зелена салата с репички", "4,90", "300", ""],
["", "salata-s-koze-sirene", "Салата с козе сирене", "6,30", "400", ""],
["", "ranch", "Ранч", "5,60", "400", ""],
["", "salata-ss-sirene-rikota", "Салата със сирене рикота", "5,60", "400", ""],
["", "snezhanka", "Снежанка", "4,20", "300", ""],
["", "ovcharska-salata", "Овчарска салата", "4,90", "500", ""],
["", "shopska-salata", "Шопска салата", "4,20", "400", ""],
["", "grczka-salata", "Гръцка салата", "4,20", "400", ""],
["", "chetiri-sirena", "Четири сирена", "5,60", "300", ""],
["", "salata-iv", "Салата Ив", "4,90", "450", ""],
["", "salata-czezar-s-ebi-skaridi", "Салата Цезар с еби скариди", "6,30", "400", ""],
["", "kapreze", "Капрезе", "4,90", "300", ""],
["", "salata-czezar-s-khrupkavo-pileshko", "Салата Цезар с хрупкаво пилешко", "4,90", "400", ""],
["", "domashna-salata-s-burata", "Домашна салата с бурата", "6,30", "380", ""],
["", "salata-czezar-s-przheni-kalmari", "Салата Цезар с пържени калмари", "6,30", "400", ""],
["", "listni-salatki", "Листни салатки", "5,60", "400", ""],
["", "salata-s-morkov", "Салата с морков", "4,90", "380", ""],
["", "pikantna-salata-s-ajsberg", "Пикантна салата с айсберг", "5,60", "350", ""],
["", "retro", "Ретро", "5,60", "400", ""],
["", "salata-morski-dar", "Салата Морски дар", "7,00", "400", ""],
["", "salata-s-cherveno-czveklo", "Салата с червено цвекло", "5,60", "400", ""]

            ],

            "Предястия безмесни": [
                ["", "paniran-kamember-ss-sladko-ot-borovinki", "Паниран Камембер със сладко от боровинки", "7,70", "220", ""],
["", "zapecheno-koze-sirene-s-domashen-med-i-orekhi", "Запечено козе сирене с домашен мед и орехи", "7,70", "220", ""],
["", "panirano-pusheno-sirene-s-borovinkov-sos", "Панирано пушено сирене с боровинков сос", "4,90", "250.", ""],
["", "khrupkavi-kashkavalcheta-ss-sladko-ot-borovinki", "Хрупкави кашкавалчета със сладко от боровинки", "4,90", "250", ""],
["", "kartofeni-kyuftencza-s-mlechen-sos", "Картофени кюфтенца с млечен сос", "4,20", "", ""],
["", "pecheni-zelenchuczi-na-skara", "Печени зеленчуци на скара", "5,60", "350", ""],
["", "przheni-chushki-sevriya", "Пържени чушки Севрия", "5,60", "380", ""],
["", "miks-ot-gorski-gbki-s-mashherka-i-chesn", "Микс от горски гъбки с мащерка и чесън", "7,00", "250", ""],
["", "kashkaval-na-plocha", "Кашкавал на плоча", "6,30", "250", ""],
["", "kartofeni-kyuftencza-s-topeno-sirene", "Картофени кюфтенца с топено сирене", "4,90", "", ""],
["", "podlucheni-tikvichki-po-grczki", "Подлучени тиквички по гръцки", "4,90", "350", ""]

            ],

            "Предястия месни": [
                ["", "teleshki-ezik-s-maslo", "Телешки език с масло", "7,00", "300", ""],
["", "kentki-pileshki-filencza", "Кентъки пилешки филенца", "5,60", "250", ""],
["", "khrupkavi-pileshki-khapki-s-mlechen-sos", "Хрупкави пилешки хапки с млечен сос", "5,60", "300", ""],
["", "gshi-drob-s-karamelizirani-yablki-i-praskovi", "Гъши дроб с карамелизирани ябълки и праскови", "11,20", "300", ""],
["", "gshi-drob-s-bejbi-krushi-i-domashno-sladko-ot-dyuli", "Гъши дроб с бейби круши и домашно сладко от дюли", "11,20", "300", ""],
["", "gshi-drob-s-manatarki-i-presni-bilki", "Гъши дроб с манатарки и пресни билки", "11,20", "300", ""]

            ],

            "Брускети и разядки": [
                ["", "brusketi-filadelfiya", "Брускети Филаделфия", "5,60", "", ""],
["", "brusketi-pomodoro", "Брускети Помодоро", "4,20", "250", ""],
["", "guakamole-ss-zapechen-khlyab-puliya", "Гуакамоле със запечен хляб Пулия", "5,60", "200", ""],
["", "tartar-ot-somga-i-avokado", "Тартар от сьомга и авокадо", "7,00", "200", ""]

            ],

            "pizza": [
                ["", "picza-margarita", "Пица Маргарита", "4,90", "500", ""],
["", "picza-kaprichoza", "Пица Капричоза", "6,30", "500", ""],
["", "picza-parmedzhano", "Пица Пармеджано", "6,30", "500", ""],
["", "picza-chorizo", "Пица Чоризо", "6,30", "500", ""],
["", "picza-proshuto-krudo", "Пица Прошуто Крудо", "6,30", "500", ""],
["", "picza-san-dzhusto", "Пица Сан Джусто", "6,30", "500", ""],
["", "picza-vegetariana-s-brokoli", "Пица Вегетариана с броколи", "5,60", "500", ""],
["", "picza-pelegrino", "Пица Пелегрино", "5,60", "500", ""],
["", "picza-kuatro-formadzhi", "Пица Куатро Формаджи", "6,30", "500", ""],
["", "picza-kuoko", "Пица Куоко", "6,30", "500", ""],
["", "picza-rukola", "Пица Рукола", "6,30", "500", ""],
["", "picza-piperone", "Пица Пипероне", "6,30", "500", ""],
["", "picza-klasiko", "Пица Класико", "5,60", "500", ""],
["", "picza-salami", "Пица Салами", "7,00", "500", ""],
["", "picza-roma", "Пица Рома", "7,00", "500", ""],
["", "picza-bejkn", "Пица Бейкън", "6,30", "500", ""]

            ],

            "Пица Романа": [
                ["", "picza-ss-sirene-filadelfiya", "Пица със сирене Филаделфия", "9,80", "750", ""],
["", "picza-s-domatena-pasta-i-salam-ventrichina", "Пица с доматена паста и салам вентричина", "9,80", "750", ""],
["", "picza-s-domatena-pasta-i-sushen-domat", "Пица с доматена паста и сушен домат", "9,10", "750", ""]

            ],

            "burgers": [
                ["", "vegetarianski-burger", "Вегетариански бургер", "7,00", "400", ""],
["", "teleshki-burger", "Телешки бургер", "7,00", "450", ""],
["", "pileshki-burger", "Пилешки бургер", "7,00", "450", ""],
["", "teleshki-chijzburger", "Телешки чийзбургер", "7,00", "450", ""],
["", "vegan-burger", "Веган бургер", "7,00", "400", ""]

            ],

            "Пърленки": [
                ["", "prlenka-ss-zekhtin", "Пърленка със зехтин", "1,40", "300.", ""],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "2,10", "300.", ""],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "300", ""],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "300.", ""],
["", "chesnova-prlenka", "Чеснова пърленка", "1,40", "300", ""],
["", "khlyab-ot-puliya", "Хляб от пулия", "0,00", "", ""],
["", "prlenka-s-mak-i-susam", "Пърленка с мак и сусам", "1,40", "300", ""]

            ],

            "risotto": [
                ["", "rizoto-s-morski-darove", "Ризото с морски дарове", "7,00", "400", ""],
["", "rizoto-s-pateshko-file-tri-vida-gbi-i-parmezan", "Ризото с патешко филе, три вида гъби и пармезан", "6,30", "380", ""],
["", "rizoto-ss-skaridi-tikvichki-shafran-uzo-chesn-kopr-i-parmezan", "Ризото със скариди, тиквички, шафран, узо, чесън, копър и пармезан", "7,00", "380", ""],
["", "rizoto-ss-zelenchuczi-i-smetana", "Ризото със зеленчуци и сметана", "5,60", "350.", ""],
["", "rizoto-s-presen-spanak", "Ризото с пресен спанак", "5,60", "400", ""],
["", "rizoto-s-bekon", "Ризото с бекон", "7,00", "380", ""]

            ],

            "Спагети и Талиатели": [
                ["", "pasta-avrorra", "Паста Аврорра", "5,60", "400", ""],
["", "pasta-s-morski-darove", "Паста с морски дарове", "7,00", "400", ""],
["", "pasta-boloneze", "Паста Болонезе", "5,60", "400", ""],
["", "pasta-karbonara", "Паста Карбонара", "5,60", "400", ""],
["", "pasta-s-cheri-domati-bosilekovo-pesto-i-parmezan", "Паста с чери домати, босилеково песто и пармезан", "4,90", "400", ""],
["", "pasta-ss-sirena", "Паста със сирена", "6,30", "400", ""],
["", "pasta-s-pateshko-file-luk-morkov-selri-smetana-i-parmezan", "Паста с патешко филе, лук, морков, селъри, сметана и пармезан", "5,60", "400", ""],
["", "pikantno-khrupkavo-svinsko-file", "Пикантно хрупкаво свинско филе", "7,70", "500", ""],
["", "pasta-ss-somga-file", "Паста със сьомга филе", "5,60", "400", ""]

            ],

            "Вкусотии на пещ": [
                ["", "zapecheni-kartofi-s-kashkaval-chesn-i-smetana", "Запечени картофи с кашкавал, чесън и сметана", "4,90", "500.", ""],
["", "zapekanka-s-pileshko-file", "Запеканка с пилешко филе", "7,00", "450.", ""],
["", "brokoli-ss-sino-sirene", "Броколи със синьо сирене", "6,30", "400.", ""],
["", "domashni-kyuftencza-s-bekon-gbi-zelen-luk-sos-avrora-i-kashkaval", "Домашни кюфтенца с бекон, гъби, зелен лук, сос Аврора и кашкавал", "7,70", "430", ""],
["", "pileshki-zhulieni-s-gbi-pusheno-sirene", "Пилешки жулиени с гъби, пушено сирене", "8,40", "400", ""],
["", "svinski-zhulieni-s-gbi-i-pusheno-sirene", "Свински жулиени с гъби и пушено сирене", "9,80", "400.", ""],
["", "pileshki-zhulieni-s-luk-i-brokoli", "Пилешки жулиени с лук и броколи", "8,40", "500.", ""],
["", "svinski-kareta-s-manatarki-pecheni-kartofi-i-kashkaval", "Свински карета с манатарки, печени картофи и кашкавал", "9,80", "450.", ""],
["", "svinski-dzholan-s-gben-sos-i-kashkaval-na-tava", "Свински джолан с гъбен сос и кашкавал на тава", "9,80", "600", ""],
["", "svinski-dzholan-s-pecheni-kartofi-i-sos-v-tava", "Свински джолан с печени картофи и сос в тава", "10,50", "900", ""],
["", "svinski-vratni-przholi-chushki-sivriya-chabata-ot-puliya-i-zapecheno-yajcze", "Свински вратни пържоли, чушки сиврия, чабата от пулия и запечено яйце", "9,10", "450", ""],
["", "svinski-vrat", "Свински врат", "9,80", "500", ""],
["", "chorbadzhijska-tava", "Чорбаджийска тава", "14,70", "1000", ""]

            ],

            "Специалитети от свинско": [
                ["", "shniczel-po-vienski", "Шницел по Виенски", "8,40", "400", ""],
["", "svinski-medaloni", "Свински медальони", "8,40", "450", ""],
["", "stek-ot-svinski-vrat", "Стек от свински врат", "9,10", "450", ""],
["", "medaloni-ot-svinsko-bon-file", "Mедальони от свинско бон филе", "8,40", "400", ""],
["", "svinski-vratni-zhuliencheta-na-tigan", "Свински вратни жулиенчета на тиган", "8,40", "400", ""],
["", "svinski-vratni-zhuliencheta-na-tigan", "Свински вратни жулиенчета на тиган", "8,40", "400", ""],
["", "karencza-na-tigan", "Каренца на тиган", "8,40", "400", ""]

            ],

            "Специалитети от пилешко": [
                ["", "pateshko-magre-s-glazirani-bejbi-krushi", "Патешко магре с глазирани бейби круши", "10,50", "350", ""],
["", "pile-begin", "Пиле Бегин", "7,70", "400", ""],
["", "pileshko-file-s-maslo", "Пилешко филе с масло", "7,00", "400", ""],
["", "pile-bolyarka", "Пиле Болярка", "7,00", "400", ""],
["", "panirani-pileshki-filencza", "Панирани пилешки филенца", "7,00", "400", ""],
["", "pileshki-kscheta-ot-but", "Пилешки късчета от бут", "6,30", "400", ""],
["", "pileshko-rulovano-file", "Пилешко руловано филе", "7,00", "380", ""],
["", "rulovana-pileshka-przhola-ot-but", "Рулована пилешка пържола от бут", "8,40", "400", ""],
["", "pile-formadzho", "Пиле Формаджо", "7,00", "400", ""]

            ],

            "Специалитети от телешко": [
                ["", "pechen-teleshki-dzholan-ss-sos-i-pyure-ot-korenoplodni", "Печен телешки джолан със сос и пюре от кореноплодни", "12,60", "450", ""],
["", "butcher-stek", "Бутчер стек", "10,50", "100", ""],
["", "teleshki-pepr-stek", "Телешки пепър стек", "15,40", "300", ""]

            ],

            "Специалитети от агнешко": [
                ["", "agneshko-po-gergovski-s-drob-sarma", "Агнешко по гергьовски с дроб сарма", "11,20", "500", ""],
["", "agneshki-gorski-kebap", "Агнешки горски кебап", "12,60", "400", ""]

            ],

            "fish": [
                ["", "somga-file-s-pikanten-sos-ot-skaridi", "Сьомга филе с пикантен сос от скариди", "13,30", "350.", ""],
["", "pstrva-ss-sos-avrora-i-sladki-kartofi", "Пъстърва със сос Аврора и сладки картофи", "9,80", "380", ""],
["", "przhen-sharan", "Пържен шаран", "5,60", "300", ""],
["", "fish-end-chips", "Фиш енд чипс", "7,00", "350.", ""],
["", "filencza-ot-lavrak-na-plocha", "Филенца от лаврак на плоча", "9,80", "400", ""],
["", "plnen-lavrak", "Пълнен лаврак", "13,30", "400", ""]

            ],

            "Морски дарове": [
                ["", "kalmari-po-sredizemnomorski", "Калмари по средиземноморски", "9,10", "280", ""],
["", "pikantni-tigrovi-skaridi", "Пикантни тигрови скариди", "10,50", "200", ""],
["", "tigrovi-skaridi", "Тигрови скариди", "10,50", "200", ""],
["", "przheni-kalmari", "Пържени калмари", "8,40", "250", ""],
["", "kalmari-na-plocha-s-kopr-i-chesn", "Калмари на плоча с копър и чесън", "8,40", "250", ""]

            ],

            "barbecue": [
                ["", "svinski-rebra-na-plocha-vv-vakuumna-sreda-s-garnitura", "Свински ребра на плоча във вакуумна среда с гарнитура", "8,40", "600", ""],
["", "pileshko-file", "Пилешко филе", "5,60", "300", ""],
["", "svinski-kotlet-na-plocha", "Свински котлет на плоча", "9,80", "450", ""],
["", "svinsko-bon-file-s-garnitura", "Свинско бон филе с гарнитура", "8,40", "450", ""],
["", "svinska-vratna-przhola", "Свинска вратна пържола", "6,30", "300", ""],
["", "domashni-kyuftencza-na-skara", "Домашни кюфтенца на скара", "6,30", "", ""],
["", "svinski-grdi-na-plocha-vv-vakuumna-sreda-s-garnitura", "Свински гърди на плоча във вакуумна среда с гарнитура", "9,10", "650", ""],
["", "svinski-vrat-na-plocha-vv-vakuumna-sreda-s-garnitura", "Свински врат на плоча във вакуумна среда с гарнитура", "8,40", "450", ""],
["", "domashen-sudzhuk-na-greben", "Домашен суджук на гребен", "7,70", "280", ""],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "5,60", "300", ""],
["", "svinska-ribichka-na-skara", "Свинска рибичка на скара", "8,40", "450", ""],
["", "svinsko-shareno-mescze-na-skara", "Свинско шарено месце на скара", "8,40", "450", ""]

            ],

            "garnish": [
                ["", "garnitura-przheni-kartofi", "Гарнитура пържени картофи", "1,40", "200.", ""],
["", "garnitura-przheni-kartofi-ss-sirene", "Гарнитура пържени картофи със сирене", "2,10", "250.", ""],
["", "garnitura-domashen-kartofen-chip", "Гарнитура домашен картофен чип", "2,80", "280", ""],
["", "garnitura-przheni-sladki-kartofi", "Гарнитура пържени сладки картофи", "2,80", "200", ""],
["", "garnitura-kartofi-sote-s-kopr-i-chesn", "Гарнитура картофи соте с копър и чесън", "2,10", "250", ""],
["", "garnitura-zadusheni-brokoli", "Гарнитура задушени броколи", "2,10", "200", ""],
["", "garnitura-rizoto-ss-spanak", "Гарнитура ризото със спанак", "2,80", "200", ""],
["", "garnitura-presni-zelenchuczi", "Гарнитура пресни зеленчуци", "1,40", "200", ""],
["", "kartofeno-pyure", "Картофено пюре", "2,10", "250", ""]

            ],

            "sauces": [
                ["", "sos-mlechen", "Сос Млечен", "0,00", "60", ""],
["", "sos-chili", "Сос Чили", "0,00", "60", ""],
["", "chesnov-sos", "Чеснов сос", "0,00", "60.", ""],
["", "sos-czezar", "Сос Цезар", "0,70", "60.", ""],
["", "sos-bbq", "Сос BBQ", "0,70", "60.", ""],
["", "sos-ketchup", "Сос Кетчуп", "0,00", "60.", ""],
["", "sos-majoneza", "Сос Майонеза", "0,00", "60.", ""],
["", "sos-gorchicza", "Сос Горчица", "0,00", "60.", ""]

            ],

            "Сухи мезета": [
                ["", "pastrma", "Пастърма", "4,20", "100", ""],
["", "file-elena", "Филе Елена", "4,20", "100", ""],
["", "domashen-sudzhuk", "Домашен суджук", "4,20", "100", ""],
["", "proshuto-krudo", "Прошуто крудо", "4,90", "100", ""],
["", "role-trapezicza", "Роле Трапезица", "4,20", "100", ""]

            ],

            "desserts": [
                ["", "biskvitena-torta-s-maskarpone-i-malini-ili-nutela", "Бисквитена торта с маскарпоне и малини или Нутела", "2,80", "160", ""],
["", "torta-ego", "Торта Его", "2,80", "200", ""],
["", "chijzkejk", "Чийзкейк", "2,80", "150", ""]

            ]
        }', 
        'slug' => 'ego-pizza-and-grill',
        'business_name' => 'Ego Pizza and Grill',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'улица Независимост 17',
        'address_additional' => '',
        'coords_x' => '43.08387434',
        'coords_y' => '25.63406525',
        'phone' => '+35962601804',
        'email' => '',
        'website' => '',
        'fb_page' => '',
        'category' => 'restaurant',
        'cuisine' => '',
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
                ["", "picza-margarita", "Пица Маргарита", "3,50", "", "https://images.deliveryhero.io/image/fd-bg/Products/55573.jpg"],
                ["", "picza-vegetariana", "Пица Вегетaриана", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/55575.jpg"],
                ["", "picza-proshuto-fungi", "Пица Прошуто фунги", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/55577.jpg"],
                ["", "picza-kaprichoza", "Пица Капричоза", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/55579.jpg"],
                ["", "picza-kuatro-formadzho", "Пица Куатро Формаджо", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/55583.jpg"],
                ["", "picza-piperone", "Пица Пипероне", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/55591.jpg"],
                ["", "picza-vlcha", "Пица Вълча", "6,30", "", "https://images.deliveryhero.io/image/fd-bg/Products/55597.jpg"],
                ["", "picza-francziskana", "Пица Францискана", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/55605.jpg"],
                ["", "picza-bilbo-begins", "Пица Билбо Бегинс", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/55607.jpg"],
                ["", "picza-bianko", "Пица Бианко", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/55609.jpg"],
                ["", "picza-organza", "Пица Органза", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/55611.jpg"],
                ["", "picza-nani", "Пица Нани", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/55613.jpg"],
                ["", "picza-bonifacho", "Пица Бонифачо", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/156116.jpg"],
                ["", "picza-roma", "Пица Рома", "4,90", "", "https://images.deliveryhero.io/image/fd-bg/Products/277835.jpg"],
                ["", "picza-rustika", "Пица Рустика", "4,20", "", "https://images.deliveryhero.io/image/fd-bg/Products/330153.jpg"],
                ["", "picza-proshuto-krudo", "Пица Прошуто Крудо", "5,60", "", "https://images.deliveryhero.io/image/fd-bg/Products/330154.jpg"],
                ["", "kuatro-salami", "Куатро Салами", "6,30", "", ""],
                ["", "kalczone", "Калцоне", "4,90", "", ""],
                ["", "balkanska-picza", "Балканска пица", "7,70", "600", ""],
                ["", "picza-rimini", "Пица Римини", "7,00", "600", ""],
                ["", "picza-strachatela", "Пица Страчатела", "7,70", "600", ""],
                ["", "dyavolo", "Дяволо", "6,30", "600", ""],
                ["", "picza-spinata", "Пица Спината", "8,40", "600", ""],
                ["", "chelentano", "Челентано", "7,00", "600", ""]

            ],

            "salads": [
                ["", "salata-s-kinoa-burata-i-avokado", "Салата с киноа, Бурата и авокадо", "6,30", "320", "https://images.deliveryhero.io/image/fd-bg/Products/277827.jpg"],
                ["", "salata-ss-spanak-i-kinoa", "Салата със спанак и киноа", "4,90", "380", "https://images.deliveryhero.io/image/fd-bg/Products/277828.jpg"],
                ["", "ovcharska-salata", "Овчарска салата", "4,90", "400.", "https://images.deliveryhero.io/image/fd-bg/Products/55558.jpg"],
                ["", "zelena-salata-s-yajcze", "Зелена салата с яйце", "3,50", "300", "https://images.deliveryhero.io/image/fd-bg/Products/55562.jpg"],
                ["", "zelena-salata-s-riba-ton", "Зелена салата с риба тон", "4,90", "380", "https://images.deliveryhero.io/image/fd-bg/Products/55563.jpg"],
                ["", "shopska-salata", "Шопска салата", "3,50", "350", "https://images.deliveryhero.io/image/fd-bg/Products/55569.jpg"],
                ["", "salata-zele-s-morkovi", "Салата Зеле с моркови", "2,10", "300", "https://images.deliveryhero.io/image/fd-bg/Products/55570.jpg"],
                ["", "salata-morkovi", "Салата Моркови", "2,10", "300", "https://images.deliveryhero.io/image/fd-bg/Products/55571.jpg"],
                ["", "salata-czezar-s-khrupkavo-pile", "Салата Цезар с хрупкаво пиле", "6,30", "400", "https://images.deliveryhero.io/image/fd-bg/Products/156122.jpg"],
                ["", "salata-avokado-i-snezhni-topki", "Салата Авокадо и снежни топки", "5,60", "300", "https://images.deliveryhero.io/image/fd-bg/Products/156123.jpg"],
                ["", "salata-rigoleto", "Салата Риголето", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/156128.jpg"],
                ["", "salata-prikazka", "Салата Приказка", "6,30", "400", "https://images.deliveryhero.io/image/fd-bg/Products/376915.jpg"],
                ["", "spanachena-salata-s-morski-darove-i-burata", "Спаначена салата с морски дарове и бурата", "9,10", "330", "https://images.deliveryhero.io/image/fd-bg/Products/376916.jpg"],
                ["", "moczarela-s-kedrovi-yadki", "Моцарела с кедрови ядки", "5,60", "380", "https://images.deliveryhero.io/image/fd-bg/Products/376917.jpg"],
                ["", "slavyanska-salata", "Славянска салата", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/376935.jpg"],
                ["", "salata-czezar-s-kalmari-na-plocha", "Салата Цезар с калмари на плоча", "8,40", "350", ""],
                ["", "salata-s-tri-semena", "Салата с три семена", "4,90", "380", ""],
                ["", "salata-fitnes", "Салата Фитнес", "4,20", "380", ""],
                ["", "aziatska-salata-czezar", "Азиатска салата Цезар", "5,60", "350", ""],
                ["", "salata-ani", "Салата Ани", "5,60", "400", ""],
                ["", "salata-nicza", "Салата Ница", "5,60", "350", ""],
                ["", "salata-s-kinoa-i-khrupkavo-pile", "Салата с киноа и хрупкаво пиле", "6,30", "400", ""],
                ["", "shefska-salata", "Шефска салата", "4,90", "350", ""],
                ["", "salata-ss-spanak-edamame-i-riba-ton", "Салата със спанак, едамаме и риба тон", "8,40", "400", ""],
                ["", "salata-s-kajsii-i-koze-sirene", "Салата с кайсии и козе сирене", "7,00", "400", ""],
                ["", "salata-chetiri-sirena", "Салата Четири сирена", "5,60", "240", ""],
                ["", "salata-s-tursko-sirene-tipdil-i-sos-feta", "Салата с турско сирене Типдил и сос фета", "5,60", "350", ""],
                ["", "salata-spanak-s-imperatorski-oriz", "Салата спанак с императорски ориз", "6,30", "450", ""],
                ["", "balkanska-salata", "Балканска салата", "6,30", "450", ""],
                ["", "salata-s-pateshko-magre", "Салата с патешко магре", "5,60", "350", ""],
                ["", "salata-rimini-s-burata", "Салата Римини с бурата", "7,00", "450", ""],
                ["", "salata-tandur", "Салата Тандур", "5,60", "350", ""],
                ["", "salata-s-limecz-i-avokado", "Салата с лимец и авокадо", "4,90", "350", ""],
                ["", "domashna-salata-nani", "Домашна салата Нани", "5,60", "400", ""],
                ["", "panczanela-s-pryasna-moczarela", "Панцанела с прясна Моцарела", "4,90", "400", ""],
                ["", "lyatna-salata-s-bivolsko-sirene-i-mus-ot-patladzhan", "Лятна салата с биволско сирене и мус от патладжан", "6,30", "400", ""],
                ["", "salata-s-rozov-domat-i-grilovani-zelenchuczi", "Салата с розов домат и гриловани зеленчуци", "4,20", "400", ""],
                ["", "salata-gracziya", "Салата Грация", "4,90", "400", ""],
                ["", "salata-meraki", "Салата Мераки", "5,60", "400", ""],
                ["", "salata-tabule-s-kinoa", "Салата табуле с киноа", "4,20", "250", ""],
                ["", "salata-ss-spanak-somga-i-edamame", "Салата със спанак, сьомга и едамаме", "9,10", "380", ""],
                ["", "salata-s-kinoa-i-byala-riba", "Салата с киноа и бяла риба", "5,60", "400", ""]

            ],

            "starters": [
                ["", "spanacheni-kyuftencza", "Спаначени кюфтенца", "4,90", "250", "https://images.deliveryhero.io/image/fd-bg/Products/55621.jpg"],
                ["", "tikvichki-po-grczki", "Тиквички по гръцки", "4,20", "300", "https://images.deliveryhero.io/image/fd-bg/Products/55628.jpg"],
                ["", "kashkavaleni-kyuftencza", "Кашкавалени кюфтенца", "4,90", "300", "https://images.deliveryhero.io/image/fd-bg/Products/156151.jpg"],
                ["", "miks-ot-gorski-gbi", "Микс от горски гъби", "6,30", "250", ""],
                ["", "gshi-drob-na-plocha-s-ananas-krusha-i-sladko-ot-borovinki", "Гъши дроб на плоча с ананас, круша и сладко от боровинки", "12,60", "220", ""],
                ["", "zapecheni-brokoli-s-krem-ot-sirena-moczarela-i-parmezan", "Запечени броколи с крем от сирена, моцарела и пармезан", "4,90", "300", ""],
                ["", "pileshki-krilcza-s-bbq-sos", "Пилешки крилца с BBQ сос", "5,60", "400", ""],
                ["", "khrupkavi-pileshki-filencza", "Хрупкави пилешки филенца", "5,60", "300", ""],
                ["", "khrupkavi-prchiczi-ot-pileshko-file", "Хрупкави пръчици от пилешко филе", "4,90", "200", ""],
                ["", "fini-topeni-sirencza", "Фини топени сиренца", "5,60", "180", ""],
                ["", "zapecheno-delikatesno-koze-sirene", "Запечено деликатесно козе сирене", "7,70", "200", ""],
                ["", "grczki-razyadki", "Гръцки разядки", "4,90", "220", ""],
                ["", "chorbadzhijski-chushki-ss-sirene", "Чорбаджийски чушки със сирене", "4,20", "300", ""],
                ["", "tikveni-kyuftencza", "Тиквени кюфтенца", "4,90", "250", ""],
                ["", "plato-za-priyateli", "Плато за приятели", "13,30", "300", ""]

            ],

            "Паста и Ризото": [
                ["", "spageti-bolonez", "Спагети Болонез", "4,90", "450", "https://images.deliveryhero.io/image/fd-bg/Products/55544.jpg"],
                ["", "spageti-karbonara", "Спагети Карбонара", "4,90", "450", "https://images.deliveryhero.io/image/fd-bg/Products/55546.jpg"],
                ["", "yajchni-spageti-s-pileshko-meso-i-susamovo-olio", "Яйчни спагети с пилешко месо и сусамово олио", "5,60", "360", ""],
                ["", "taliateli-s-manatarki-i-parmezan", "Талиатели с манатарки и пармезан", "5,60", "300", ""],
                ["", "taliateli-s-manatarki-i-parmezan-i-pateshko-meso", "Талиатели с манатарки и пармезан и патешко месо", "6,30", "380", ""],
                ["", "taliateli-s-manatarki-parmezan-i-teleshko-meso", "Талиатели с манатарки, пармезан и телешко месо", "6,30", "380", ""],
                ["", "rizoto-parma-s-pileshko-meso", "Ризото Парма с пилешко месо", "7,00", "300", ""],
                ["", "rizoto-parma-ss-svinsko-meso", "Ризото Парма със свинско месо", "7,70", "300", ""],
                ["", "rizoto-s-kalmari", "Ризото с калмари", "8,40", "360", ""],
                ["", "rizoto-ss-zelenchuczi", "Ризото със зеленчуци", "4,20", "300", ""],
                ["", "rizoto-s-pile", "Ризото с пиле", "5,60", "360", ""],
                ["", "rizoto-s-manatarki", "Ризото с манатарки", "5,60", "300", ""],
                ["", "spageti-ss-somga", "Спагети със сьомга", "7,70", "400", ""],
                ["", "zapecheni-taliateli-s-pile", "Запечени талиатели с пиле", "5,60", "400", ""]

            ],

            "Ястия с пилешко и пуешко": [
                ["", "aromatni-pileshki-kscheta-s-mashherka", "Ароматни пилешки късчета с мащерка", "6,30", "300", "https://images.deliveryhero.io/image/fd-bg/Products/277850.jpg"],
                ["", "pile-feliz", "Пиле Фелиз", "6,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/277851.jpg"],
                ["", "pileshki-kscheta-s-topeno-sirene", "Пилешки късчета с топено сирене", "6,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/277859.jpg"],
                ["", "pileshka-glezotijka", "Пилешка глезотийка", "5,60", "350", "https://images.deliveryhero.io/image/fd-bg/Products/277869.jpg"],
                ["", "pikantno-pile", "Пикантно пиле", "6,30", "350", "https://images.deliveryhero.io/image/fd-bg/Products/277870.jpg"],
                ["", "pileshki-kscheta-s-teriyaki-sos", "Пилешки късчета с Терияки сос", "7,00", "300", "https://images.deliveryhero.io/image/fd-bg/Products/411701.jpg"],
                ["", "tryufel-pile", "Трюфел пиле", "6,30", "380", ""],
                ["", "pueshki-stek-femili", "Пуешки стек фемили", "9,10", "400", ""],
                ["", "aziatsko-pile", "Азиатско пиле", "6,30", "340", ""],
                ["", "pechena-pileshka-przhola", "Печена пилешка пържола", "6,30", "350", ""],
                ["", "pueshki-stek-teriyaki", "Пуешки стек терияки", "9,10", "350", ""],
                ["", "pile-black-pepper", "Пиле Black Pepper", "5,60", "350", ""],
                ["", "pateshko-magre", "Патешко магре", "12,60", "380", ""],
                ["", "pueshki-stek-s-yajchni-spageti-i-zelenchuczi", "Пуешки стек с яйчни спагети и зеленчуци", "8,40", "400", ""],
                ["", "pile-viena-ss-sos-ot-italiansko-sirne-fontal", "Пиле Виена със сос от италианско сирне Фонтал", "6,30", "350", ""],
                ["", "pile-tapas", "Пиле Тапас", "7,00", "350", ""],
                ["", "pueshki-stek-ss-zelenchuczi", "Пуешки стек със зеленчуци", "7,00", "380", ""]

            ],

            "Ястия от свинско и телешко": [
                ["", "svinski-stekcheta-s-bosilkovo-pesto", "Свински стекчета с босилково песто", "9,10", "380", "https://images.deliveryhero.io/image/fd-bg/Products/277875.jpg"],
["", "vlchi-khapki", "Вълчи хапки", "8,40", "300.", "https://images.deliveryhero.io/image/fd-bg/Products/277880.jpg"],
["", "teleshki-pepr-stek", "Телешки пепър стек", "16,80", "300", "https://images.deliveryhero.io/image/fd-bg/Products/277884.jpg"],
["", "teleshki-stek-dayana", "Телешки стек Даяна", "16,80", "300.", "https://images.deliveryhero.io/image/fd-bg/Products/411704.jpg"],
["", "teleshki-ramstek-s-luk", "Телешки Рамстек с лук", "16,80", "300.", "https://images.deliveryhero.io/image/fd-bg/Products/411705.jpg"],
["", "teleshki-dzholan-s-kartofeno-pyure-i-khrupkava-tempura", "Телешки джолан с картофено пюре и хрупкава темпура", "7,70", "340", "https://images.deliveryhero.io/image/fd-bg/Products/411708.jpg"],
["", "teleshki-kyufteta", "Телешки кюфтета", "6,30", "300.", "https://images.deliveryhero.io/image/fd-bg/Products/411710.jpg"],
["", "svinski-dzholan-ss-sos-zhu", "Свински джолан със сос Жу", "11,20", "650", ""],
["", "kralski-kotlet", "Кралски котлет", "10,50", "400", ""],
["", "agneshko-dzholanche", "Агнешко джоланче", "16,80", "500", ""],
["", "krekhki-svinski-rebrcza", "Крехки свински ребърца", "10,50", "450", ""],
["", "svinski-kareta-s-aziatski-sos", "Свински карета с Азиатски сос", "8,40", "380", ""],
["", "svinski-stek-femili", "Свински стек Фемили", "10,50", "400", ""],
["", "svinski-buzi-s-pecheni-zelenchuczi", "Свински бузи с печени зеленчуци", "9,10", "400", ""],
["", "teleshki-dzholan-s-orzo", "Телешки джолан с  орзо", "7,00", "400", ""],
["", "svinski-stek-vrat-na-bbq-s-gbi-shijtake", "Свински стек врат на BBQ с гъби шийтаке", "10,50", "400", ""],
["", "agneshki-dzhamurki", "Агнешки джамурки", "5,60", "300", ""],
["", "nyu-jork-stek", "Ню Йорк Стек", "34,30", "300", ""]

            ],

            "fish": [
                ["", "filetirana-pstrva", "Филетирана пъстърва", "8,40", "300", "https://images.deliveryhero.io/image/fd-bg/Products/163437.jpg"],
["", "kralski-skaridi-s-imperatorski-oriz", "Кралски скариди с императорски ориз", "11,20", "280.", "https://images.deliveryhero.io/image/fd-bg/Products/163441.jpg"],
["", "kalmari-po-grczki", "Калмари по гръцки", "9,80", "250.", "https://images.deliveryhero.io/image/fd-bg/Products/411714.jpg"],
["", "kalmari-na-plocha", "Калмари на плоча", "9,80", "220.", "https://images.deliveryhero.io/image/fd-bg/Products/411715.jpg"],
["", "kalmari-v-sladko-kisel-sos", "Калмари в сладко-кисел сос", "9,80", "250.", "https://images.deliveryhero.io/image/fd-bg/Products/411716.jpg"],
["", "skaridi-na-plocha-ss-zekhtinov-sos", "Скариди на плоча със зехтинов сос", "10,50", "200.", "https://images.deliveryhero.io/image/fd-bg/Products/411718.jpg"],
["", "skaridi-na-plocha-s-mango-sos", "Скариди на плоча с манго сос", "10,50", "200.", "https://images.deliveryhero.io/image/fd-bg/Products/411719.jpg"],
["", "file-ot-lavrak-na-plocha", "Филе от лаврак на плоча", "15,40", "350", ""],
["", "somga-s-imperatorski-oriz-i-brokoli", "Сьомга с императорски ориз и броколи", "14,00", "400", ""],
["", "file-ot-somga", "Филе от сьомга", "14,00", "350", ""],
["", "shishcheta-ot-skaridi-ss-sladko-kisel-sos", "Шишчета от скариди със сладко-кисел сос", "10,50", "250", ""],
["", "skaridi-s-cheren-oriz", "Скариди с черен ориз", "7,70", "380", ""],
["", "oktopod-ss-sos-ponzu", "Октопод със сос Понзу", "17,50", "280", ""],
["", "file-ot-lavrak-s-tikvichki", "Филе от лаврак с тиквички", "10,50", "350", ""],
["", "somga-ss-sos-bearnez", "Сьомга със сос Беарнез", "14,70", "350", ""],
["", "file-ot-czipura-s-mini-zelen-fasul", "Филе от ципура с мини зелен фасул", "9,80", "180", ""],
["", "kralski-miks-ot-morski-darove", "Кралски микс от морски дарове", "18,90", "400", ""]

            ],

            "grill": [
                ["", "pileshko-bon-file", "Пилешко бон филе", "4,90", "220.", "https://images.deliveryhero.io/image/fd-bg/Products/55688.jpg"],
["", "pileshko-file", "Пилешко филе", "4,90", "250.", "https://images.deliveryhero.io/image/fd-bg/Products/55689.jpg"],
["", "pileshka-przhola-ot-but", "Пилешка пържола от бут", "4,90", "250.", "https://images.deliveryhero.io/image/fd-bg/Products/55690.jpg"],
["", "svinski-kareta", "Свински карета", "5,60", "220.", "https://images.deliveryhero.io/image/fd-bg/Products/55691.jpg"],
["", "svinski-vrat", "Свински врат", "6,30", "250.", "https://images.deliveryhero.io/image/fd-bg/Products/55693.jpg"],
["", "svinsko-bon-file", "Свинско бон филе", "6,30", "200.", "https://images.deliveryhero.io/image/fd-bg/Products/55697.jpg"]

            ],

            "garnish": [
                ["", "przheni-kartofi", "Пържени картофи", "1,40", "200.", "https://images.deliveryhero.io/image/fd-bg/Products/55702.jpg"],
["", "przheni-kartofi-ss-sirene", "Пържени картофи със сирене", "2,10", "250.", "https://images.deliveryhero.io/image/fd-bg/Products/55705.jpg"],
["", "pikantni-kartofi", "Пикантни картофи", "2,10", "200.", "https://images.deliveryhero.io/image/fd-bg/Products/55706.jpg"],
["", "studena-garnitura", "Студена гарнитура", "1,40", "220.", "https://images.deliveryhero.io/image/fd-bg/Products/55708.jpg"],
["", "zadusheni-brokoli", "Задушени броколи", "2,10", "200", "https://images.deliveryhero.io/image/fd-bg/Products/163444.jpg"],
["", "kartofi-sote", "Картофи соте", "2,10", "220.", "https://images.deliveryhero.io/image/fd-bg/Products/277890.jpg"]

            ],

            "Пърленки": [
                ["", "prlenka", "Пърленка", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/55714.jpg"],
["", "chesnova-prlenka", "Чеснова пърленка", "0,70", "250", "https://images.deliveryhero.io/image/fd-bg/Products/55715.jpg"],
["", "prlenka-s-kashkaval", "Пърленка с кашкавал", "2,10", "250", "https://images.deliveryhero.io/image/fd-bg/Products/55717.jpg"],
["", "prlenka-ss-sirene-i-kashkaval", "Пърленка със сирене и кашкавал", "2,10", "250.", "https://images.deliveryhero.io/image/fd-bg/Products/55718.jpg"],
["", "prlenka-ss-sirene", "Пърленка със сирене", "2,10", "250", ""]

            ],

            "sauces": [
                ["", "chesnov-sos", "Чеснов сос", "0,00", "60.", ""],
["", "pepr-sos", "Пепър сос", "0,70", "60.", ""],
["", "mlechen-sos", "Млечен сос", "0,00", "60.", ""]

            ],

            "desserts": [
                ["", "shokoladova-fantaziya", "Шоколадова Фантазия", "3,50", "180", "https://images.deliveryhero.io/image/fd-bg/Products/55731.jpg"],
["", "torta-bianko", "Торта Бианко", "2,80", "180.", "https://images.deliveryhero.io/image/fd-bg/Products/55730.jpg"],
["", "domashna-biskvitena-torta-s-maskarpone", "Домашна бисквитена торта с маскарпоне", "3,50", "250", "https://images.deliveryhero.io/image/fd-bg/Products/55729.jpg"],
["", "chijzkejk-s-borovinki", "Чийзкейк с боровинки", "2,80", "200", ""],
["", "karamelena-torta-s-bejlis", "Карамелена торта с Бейлис", "3,50", "200", ""],
["", "shokoladovo-brauni-ss-sladoled", "Шоколадово брауни със сладолед", "3,50", "", ""],
["", "domashna-orekhova-torta", "Домашна орехова торта", "2,80", "150", ""]

            ],

            "Coca-Cola напитки": [
                ["", "fanta-portokal", "Fanta Портокал", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/330171.jpg"],
["", "sprite-s-vkus-na-limon-i-lajm", "Sprite с вкус на лимон и лайм", "0,70", "500", "https://images.deliveryhero.io/image/fd-bg/Products/330172.jpg"],
["", "coca-cola-original-taste", "Coca-Cola Original Taste", "1,40", "500", ""]

            ],

            "drinks": [
                ["", "ajran-balkan", "Айран Балкан", "0,70", "250.", ""],
["", "mineralna-voda-gorna-banya", "Минерална вода Горна Баня", "0,70", "500.", ""]

            ]
        }', 
        'slug' => 'pizza-bianco',
        'business_name' => 'pizza Bianco',
        'worktime' => '{"friday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"monday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"sunday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"tuesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"saturday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"thursday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}},"wednesday": {"to": {"hours": "24","minutes": "00"},"from": {"hours": "10","minutes": "00"}}}',
        'city' => 'Veliko Tarnovo',
        'region' => 'Veliko Tarnovo',
        'postal_code' => '5000',
        'address' => 'ж.к. „Картала”, ул. &quot;Моско Москов&quot; 15',
        'address_additional' => '',
        'coords_x' => '43.0836801',
        'coords_y' => '25.6215808',
        'phone' => '+359882552662;',
        'email' => '',
        'website' => '',
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
