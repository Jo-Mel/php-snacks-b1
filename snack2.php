<!-- Snack 2
Passare come parametri GET name, mail ed age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 

che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una 
chiocciola e 
che age sia un numero. 

Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = isset($_GET['name']) ? $_GET['name'] : '';
$mail = isset($_GET['mail']) ? $_GET['mail'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';

if (empty($name) || empty($mail) || empty($age)) {
    echo 'Non hai inserito tutti i dati'; 

} else {

    if (
        strlen($name) > 3 
        && strpos($mail,'@') !== false
        && strpos($mail,'.') !== false
        && is_numeric($age)
    ) {
        echo 'Accesso Riuscito';
    } else {
        echo 'Accesso Negato';
    }
}
?>


<!-- //FALSE
    // if (false) {}
    // if (0) {}
    // if ("") {}
    // if (null) {}
    //TRUE
    // if (1)
    // if ("una stringa qualsiasi") {} -->