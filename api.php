<?php

$request = 'home';

/** categories */
$categories = [];
$categories['kits'] = [
    [
        'name' => 'Kit gnc inyección',
        'route' => '#',
        'children' => [
            ['name' => 'kit inyección secuencial 4 cilindros para gnc', 'route' => '/'],
            ['name' => 'kit inyección secuencial 6 cilindros para gnc', 'route' => '/'],
            ['name' => 'kit inyección secuencial 8 cilindros para gnc', 'route' => '/'],
        ]
    ],
    [
        'name' => 'Kit gnc aspirados',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
        ]
    ],
    [
        'name' => 'Kit glp',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => 'home'],
            ['name' => 'link 2', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
            ['name' => 'link 4', 'route' => '/'],
        ]
    ],
];
$categories['valvulas'] = [
    [
        'name' => 'Válvulas de cilindro',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
            ['name' => 'link 3', 'route' => '/'],

        ]
    ],
    [
        'name' => 'Válvulas de carga',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
            ['name' => 'link 3', 'route' => '/'],
        ]
    ],
    [
        'name' => 'Electro válvulas',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
        ]
    ],
];
$categories['reductores'] = [
    [
        'name' => 'reductores gnc inyección',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
            ['name' => 'link 3', 'route' => '/'],
            ['name' => 'link 4', 'route' => '/'],
        ]
    ],
    [
        'name' => 'reductores gnc aspirados',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
        ]
    ],
    [
        'name' => 'reductores glp',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
        ]
    ],
];
$categories['otros'] = [
    [
        'name' => 'Sistema de inyección',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
            ['name' => 'link 3', 'route' => '/'],
            ['name' => 'link 4', 'route' => '/'],
            ['name' => 'link 5', 'route' => '/'],
        ]
    ],
    [
        'name' => 'Sistema de lazo cerrado',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
        ]
    ],
    [
        'name' => 'Sistema de avance',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
            ['name' => 'link 3', 'route' => '/'],
            ['name' => 'link 4', 'route' => '/'],
            ['name' => 'link 5', 'route' => '/'],
        ]
    ],
    [
        'name' => 'Sistema de inyectores',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
        ]
    ],
    [
        'name' => 'Llave selectora',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
            ['name' => 'link 2', 'route' => '/'],
        ]
    ],
    [
        'name' => 'Terminal de programación',
        'route' => '#',
        'children' => [
            ['name' => 'link 1', 'route' => '/'],
        ]
    ],
];

/** brands */
$brands = [
    [
        'name' => 'Chevrolet',
        'route' =>  'chevrolet',
        'children' => [
            ['name' => 'test'],
        ]
    ], [
        'name' => 'Citroen',
        'route' =>  'citroen',
        'children' => [
            ['name' => 'test'],
        ]
    ], [
        'name' => 'Dodge',
        'route' =>  'dodge',
        'children' => [
            ['name' => 'test'],
        ]
    ], [
        'name' => 'Fiat',
        'route' =>  'fiat',
        'children' => [
            ['name' => 'test'],
        ]
    ], [
        'name' => 'Ford',
        'route' =>  'ford',
        'children' => [
            ['name' => 'test'],
        ]
    ], [
        'name' => 'Jeep',
        'route' =>  'jeep',
        'children' => [
            ['name' => 'test'],
        ]
    ], [
        'name' => 'Kia',
        'route' =>  'kia',
        'children' => [
            ['name' => 'test'],
        ]
    ], [
        'name' => 'Peugeot',
        'route' =>  'peugeot',
        'children' => [
            ['name' => 'test'],
        ]
    ], [
        'name' => 'Renault',
        'route' =>  'renault',
        'children' => [
            ['name' => 'test'],
        ]
    ], [
        'name' => 'Toyota',
        'route' =>  'toyota',
        'children' => [
            ['name' => 'Corolla'],
            ['name' => 'Hilux'],
        ]
    ], [
        'name' => 'Volkswagen',
        'route' =>  'volkswagen',
        'children' => [
            ['name' => 'test'],
        ]
    ], ];

