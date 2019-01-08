<?php
$contacts= [
    'contact_1' => ['Jean','Frouchard','23'],
    'contact_2' => ['Marie', 'Drucker', '10'],
    'contact_3' => ['Etienne','Carbonnier','53'],
    'contact_4' => ['Salommée','Leclerc','14'],
];
foreach ($contacts as $contact){
    foreach ($contact as $personne => $valeur){
        echo $valeur."\n";
    }
}