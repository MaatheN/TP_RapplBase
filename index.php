<?php
$index_val = 0;
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
while($index_val < 4){
    if($contacts['age'][$index_val] >=18){
        echo $contacts['prenom'][$index_val]."\n";
    }
    $index_val++;
}