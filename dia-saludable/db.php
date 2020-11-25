<?php

session_start();

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'ac0mpana_ac0mpanamient0');
    define('DB_PASSWORD', '21464760LuzMaryBedoya=%&$');
    define('DB_NAME', 'ac0mpanamient0_articulos');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false) {
    die("ERROR EN LA CONEXIÓN" . mysqli_connect_error());
}

// $conn = mysqli_connect(
//     'localhost',
//     'root',
//     '',
//     'enfermeras'
// );

?>