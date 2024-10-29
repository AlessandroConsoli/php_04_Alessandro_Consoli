<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Maria', 'surname' => 'Sanfilippo', 'gender' => 'Female'],
    ['name' => 'Vercinge', 'surname' => 'Torige', 'gender' => 'Male'],
    ['name' => 'Anna', 'surname' => 'Fabri', 'gender' => 'Female']
  ];


foreach ($users as $user) {
    switch ($user) {
        case $user['gender'] == 'Male':
            echo("Buongiorno Sig." . " " . $user['name'] . " " . $user['surname'] . "\n");
            break;
    
        case $user['gender'] == 'Female':
            echo("Buongiorno Sig.ra" . " " . $user['name'] . " " . $user['surname'] . "\n");
            break;
    
        
        default:
            echo("Buongiorno" . " " . $user['name'] . " " . $user['surname'] . "\n");
            break;
    };
};