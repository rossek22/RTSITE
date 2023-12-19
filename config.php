<?php

$config = [
    "site_name" => "WELFSINE",
    "anypay_project" => "9263",
    "anypay_secret" => "2420735Daad",
    "description" => "Официальный сайт сервера в Minecraft - WELFSINE. Здесь вы сможете найти всю нужную информацию для начала игры на сервере, а также получать последние новости о нас и о мире Minecraft в целом.", // Описание
    "keywords" => "WELFSINE, WELFSINE.RU, mc.welfsine.ru, tlauncher, гриферский сервер, сервер, сервер майнкрафт, сайт WELFSINE, купить донат", // Ключевые слова для поисковиков
    "server_ip" => "mc.WELFSINE.ru", // IP сервера
	"vk_group" => "https://vk.com/welfsine_mc",
    "vk_support" => "https://vk.me/welfsine_mc",
    "email" => "nekkastreim@gmail.com",
    "db" => [
        "host" => "rasasport.ml",
        "user" => "test",
        "password" => "2009Loop2009",
        "db" => "test_mgiver",
    ],
    "qiwi" => [ 
        "site_id" => "eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6Im16OHlici0wMCIsInVzZXJfaWQiOiIzNzUyOTI0MjA3MzUiLCJzZWNyZXQiOiI4Y2FhMDc3NjlkNjA2NDRlMzYwYmIzMzdlZDI3OWE1Njk1ODg1OGMzMjM3ODk4OTY0YmFiNjllM2I1MzViY2U4In19",
        "public_key" => "48e7qUxn9T7RyYE1MVZswX1FRSbE6iyCj2gCRwwF3Dnh5XrasNTx3BGPiMsyXQFNKQhvukniQG8RTVhYm3iPuhmF1roP2ABYYtvgixpY15BpP7NRHDHkec87YYQDevWae2wNFRYJYe9fbwSKmnu6ANjBghBwwXWsmUZAXBUhEzJmCfwpzJrKH1gbFMkWv",
    ],
    "enot" => [
        "public_key" => "",
        "secret_key" => "",
    ],
    "anypay" => [
        "project_id" => "
",
        "key" => "",
    ],
    "rcon" => [
        "ip" => "",
        "port" => "",
        "password" => ""
    ],
    "promo" => [
        "WELFSINE" => 20,
        "TABLETO4KA" => 20,
	],
    "categories1" => [
      "tab-1" => [
        "title" => "Привилегии",
        "default" => "true",
      ],
      "tab-2" => [
        "title" => "Донат Рубли",
      ],
      "tab-3" => [
        "title" => "Кейсы",
      ],
      "tab-5" => [
        "title" => "Прочее",
      ],
      ],
    "categories" => [
        "tab-1" => [
            "default" => true,
            "products" => [
                "lite" => [
                    "title" => "ЛАЙТ",
                    "text" => "Навсегда",
                    "price" => 19,
                    "image" => "/Themes/Main/images/35.png",
                    "command" => "lp user %user% parent set %group%",
                    "promo_use" => true,
                ],
                "beta" => [
                    "title" => "ВОЙН",
                    "text" => "Навсегда",
                    "price" => 65.00,
                    "image" => "/Themes/Main/images/31.png",
                    "command" => "lp user %user% parent set %group%",
                    "promo_use" => true,
                ],
				"delta" => [
                    "title" => "ФАНТОМ",
                    "text" => "Навсегда",
                    "price" => 250.00,
                    "image" => "/Themes/Main/images/32.png",
                    "command" => "lp user %user% parent set %group%",
                    "promo_use" => true,
                ],
				"sigma" => [
                    "title" => "ИМПЕРАТОР",
                    "text" => "Навсегда",
                    "price" => 540.00,
                    "image" => "/Themes/Main/images/34.png",
                    "command" => "lp user %user% parent set %group%",
                    "promo_use" => true,
                ],
				"omega" => [
                    "title" => "ВИЗАРТ",
                    "text" => "Навсегда",
                    "price" => 780.00,
                    "image" => "/Themes/Main/images/33.png",
                    "command" => "lp user %user% parent set %group%",
                    "promo_use" => true,
                ],
				"alpha" => [
                    "title" => "КОРОЛЬ",
                    "text" => "Навсегда",
                    "price" => 1190.00,
                    "image" => "/Themes/Main/images/38.png",
                    "command" => "lp user %user% parent set %group%",
                    "promo_use" => true,
                ],
				"legend" => [
                    "title" => "ЛЕГЕНД",
                    "text" => "Навсегда",
                    "price" => 1190.00,
                    "image" => "/Themes/Main/images/36.png",
                    "command" => "lp user %user% parent set %group%",
                    "promo_use" => true,
                ],
				"eternal" => [
				    "title" => "ГУНЕР",
                    "text" => "Навсегда",
                    "price" => 2950.00,
				    "image" => "/Themes/Main/images/37.png",
				    "command" => "lp user %user% parent set %group%",
                    "promo_use" => true,
                ]

            ]
        ],
		"tab-2" => [
            "products" => [
                "name8" => [
                    "title" => "250P",
                    "price" => 50.00,
                    "image" => "/Themes/Main/images/10.png",
                    "command" => "p give %user% 250",
                    "promo_use" => true,
                ],
				"name9" => [
				    "title" => "500P",
					"price" => 55.00,
					"image" => "/Themes/Main/images/10.png",
                    "command" => "p give %user% 500",
                    "promo_use" => true,
                ],
                "name1" => [
                    "title" => "750P",
                    "price" => 70.00,
                    "image" => "/Themes/Main/images/12.png",
                    "command" => "p give %user% 750",
                    "promo_use" => true,
                ],
                "name2" => [
                    "title" => "1000P",
                    "price" => 90.00,
                    "image" => "/Themes/Main/images/12.png",
                    "command" => "p give %user% 1000",
                    "promo_use" => true,
                ],
                "name3" => [
                    "title" => "1500P",
                    "price" => 125.00,
                    "image" => "/Themes/Main/images/15.png",
                    "command" => "p give %user% 1500",
                    "promo_use" => true,
                ],
                "name4" => [
                    "title" => "2000P",
                    "price" => 150.00,
                    "image" => "/Themes/Main/images/15.png",
                    "command" => "p give %user% 2000",
                    "promo_use" => true,
                ],
                "name5" => [
                    "title" => "5000P",
                    "price" => 200.00,
                    "image" => "/Themes/Main/images/15.png",
                    "command" => "p give %user% 5000",
                    "promo_use" => true,
                ],
                "name6" => [
                    "title" => "6000P + ГУНЕР",
                    "price" => 400.00,
                    "image" => "/Themes/Main/images/15.png",
                    "command" => "p give %user% 6000",
                    "promo_use" => true,
                ],
                "name48" => [
                    "title" => "15000Р + СПОНСОР",
                    "price" => 700.00,
                    "image" => "/Themes/Main/images/15.png",
                    "command" => "p give %user% 15000",
                    "promo_use" => true,
                ],
                "name40" => [
                    "title" => "50000P + СПОНСОР",
                    "price" => 1000.00,
                    "image" => "/Themes/Main/images/15.png",
                    "command" => "p give %user50000",
                    "promo_use" => true,
                ],
            ]
		],
        "tab-3" => [
            "products" => [
                "name7" => [
                    "title" => "Донат Кейс",
                    "text" => "1 шт.",
                    "price" => 59.00,
                    "image" => "/Themes/Main/images/dc.png",
                    "command" => "cases give %user% donat %amount%",
                    "promo_use" => true,
                ],
                "name" => [
                    "title" => "Донат Кейс",
                    "text" => "3 шт.",
                    "price" => 149.00,
                    "image" => "/Themes/Main/images/dc.png",
                    "command" => "cases give %user% donat %amount%",
                    "promo_use" => true,
                ],
                "1" => [
                    "title" => "Донат Кейс",
                    "text" => "10 шт.",
                    "price" => 499.00,
                    "image" => "/Themes/Main/images/dc.png",
                    "command" => "cases give %user% donat %amount%",
                    "promo_use" => true,
                ],
                "2" => [
                    "title" => "Кейс с Префиксами",
                    "text" => "1 шт.",
                    "price" => 25.00,
                    "image" => "/Themes/Main/images/title.png",
                    "command" => "cases give %user% prefix %amount%",
                    "promo_use" => true,
                ],
                "3" => [
                    "title" => "Кейс с Префиксами",
                    "text" => "10 шт.",
                    "price" => 85.00,
                    "image" => "/Themes/Main/images/title.png",
                    "command" => "cases give %user% prefix %amount%",
                    "promo_use" => true,
                ],
                "4" => [
                    "title" => "Кейс с Префиксами",
                    "text" => "25 шт.",
                    "price" => 125.00,
                    "image" => "/Themes/Main/images/title.png",
                    "command" => "cases give %user% prefix %amount%",
                    "promo_use" => true,
                ],
                "5" => [
                    "title" => "Кейс с Виртами",
                    "text" => "1 шт.",
                    "price" => 45.00,
                    "image" => "/Themes/Main/images/unit.png",
                    "command" => "cases give %user% virt %amount%",
                    "promo_use" => true,
                ],
                "6" => [
                    "title" => "Кейс с Виртами",
                    "text" => "5 шт.",
                    "price" => 199.00,
                    "image" => "/Themes/Main/images/unit.png",
                    "command" => "cases give %user% virt %amount%",
                    "promo_use" => true,
                ],
                "53" => [
                    "title" => "Кейс с Виртами",
                    "text" => "20 шт.",
                    "price" => 549.00,
                    "image" => "/Themes/Main/images/unit.png",
                    "command" => "cases give %user% virt %amount%",
                    "promo_use" => true,
                ]

            ]
        ],
		"tab-5" => [
            "products" => [
                "name16" => [
				    "title" => "Разбан",
                    "price" => 49.00,
	            "image" => "/Themes/Main/images/22.png",
                    "command" => "unban %user%",
                    "promo_use" => true,
                ],
                "name13" => [
				    "title" => "Размут",
                    "price" => 19.00,
	            "image" => "/Themes/Main/images/23.png",
                    "command" => "unmute %user%",
                    "promo_use" => true,
                ],
                "bp" => [
                    "title" => "Батл Пасс",
                    "price" => 85.00,
                    "image" => "/Themes/Main/images/50.png",
                    "command" => "bpa set pass premium %user%",
                    "promo_use" => true,
                ]
            ]
		]
    ]
];
$mysqli = @new mysqli($config['db']['host'], $config['db']['user'], $config['db']['password'], $config['db']['db']);
if($mysqli->connect_errno) return exit($mysqli->connect_error);
$mysqli->set_charset("utf8");


