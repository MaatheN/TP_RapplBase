<?php
$contacts= [
    'nom' => ['Jean',
        'Marie',
        'Etienne',
        'Salommée'
        ],
    'prenom' => ['Frouchard',
        'Drucker',
        'Carbonnier',
        'Leclerc'
        ],
    'age'=> ['23',
        '10',
        '53',
        '14'
        ]
];
foreach ($contacts['age'] as $ages){
    if($ages>='18'){
        echo "majeur \n";
    };
}