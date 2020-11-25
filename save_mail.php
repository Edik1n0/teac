<?php

include('db.php');

if(isset($_POST['save_mail'])) {
    $_email = $_POST['email'];
    
    $query = "INSERT INTO usuarios(name, email, phone, description) VALUES ('$_name', '$_email', '$_phone', '$_description')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Sus datos han sido enviados correctamente. En unos momentos, nuestros asesores se pondrán en contacto para brindarle el mejor servicio. Gracias';
    $_SESSION['message_type'] = 'primary'; 

    header("Location: index.php");
}

?>