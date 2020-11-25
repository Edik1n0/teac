<?php

// session_start();

// $conn = mysqli_connect(
//    'localhost',
//    'ac0mpanamient0_edik1n0', /* Usuario */
//    '@CRohvU!g%Ec', /* Contraseña */
//    'ac0mpanamient0_suscritos' /* Base de datos */
// );

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'enfermeras');

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