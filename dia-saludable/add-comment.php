<?php

include('db.php');

if(isset($_POST['comment'])) {
    $blname = $_POST['blname'];
    $blemail = $_POST['blemail'];
    $blplace = $_POST['blplace'];
    $bgdesc = $_POST['bgdesc'];
    
    $query = "INSERT INTO articulos(blname, blemail, blplace, bgdesc) VALUES ('$blname', '$blemail', '$blplace', '$bgdesc')";
    $result = mysqli_query($link, $query);
    if(!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Sus datos han sido enviados correctamente. En unos momentos, nuestros asesores se pondrán en contacto para brindarle el mejor servicio. Gracias';
    $_SESSION['message_type'] = 'primary'; 

    header("Location: /dia-saludable/");
}

?>