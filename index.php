<?php
$index_val = 0;
$nb_contacts = 4;
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
//boucler chaque âge de tous les contacts
while($index_val < $nb_contacts){
    //si un âge est > = à 18
    if($contacts['age'][$index_val] >=18){
        //afficher le prenom de l'index du contact en question
        echo $contacts['prenom'][$index_val]."\n";
    }
    $index_val++;
}