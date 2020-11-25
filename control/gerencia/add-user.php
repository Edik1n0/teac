<?php

include('db.php');

if(isset($_POST['add-user'])) {
    $username = $_POST['username'];
    $usercc = $_POST['usercc'];
    $userphone = $_POST['userphone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $userdesc = $_POST['userdesc'];
    
    $query = "INSERT INTO users(username, usercc, userphone, city, address, userdesc) VALUES ('$username', '$usercc', '$userphone', '$city', '$address', ' $userdesc')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Los datos han sido guardados exitosamente';
    $_SESSION['message_type'] = 'primary'; 

    header("Location: agregar-historia.php");
}

?>