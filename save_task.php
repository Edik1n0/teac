<?php

include('db.php');

if(isset($_POST['save_task'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO save_task(name, email, phone, description) VALUES ('$name', '$email', '$phone', '$description')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Sus datos han sido enviados correctamente. En unos momentos, nuestros asesores se pondrán en contacto para brindarle el mejor servicio. Gracias';
    $_SESSION['message_type'] = 'primary'; 

    header("Location: index.php");
}

?>