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
//foreach ($contacts['age'] as $ages){
    //if($ages>='18'){
        //echo "majeur \n";
    //};
if ($contacts['age'][0] == 23){
    echo "ça marche!";
}
while($index_val < 4){
    if($contacts['age'][$index_val] >=18){
        echo $contacts['nom'][$index_val].$contacts['prenom'][$index_val].$contacts['age'][$index_val];
    }

    $index_val++;
}