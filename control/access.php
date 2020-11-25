<?php

// Inicializar sesión
    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header('Location: gerencia/index.php');
        exit;
    }

require_once "db.php";

$email = $pass = "";
$email_err = $pass_err = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(empty(trim($_POST['email']))){
        $email_err = "Por favor, ingrese el correo electrónico";
    }else{
        $email = trim($_POST["email"]);
    }

    if(empty(trim($_POST['pass']))){
        $pass_err = "Por favor, ingrese la contraseña";
    }else{
        $pass = trim($_POST["pass"]);
    }

    // Validando credenciales
    if(empty($email_err) && empty($pass_err)){
        $sql = "SELECT id, name, email, pass FROM unidades WHERE email = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = $email;

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }

            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $name, $email, $hashed_pass);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($pass, $hashed_pass)){
                        session_start();

                        // Almacenar Datos en variables de sesión
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["email"] = $email;

                        header("Location: gerencia/index.php");
                    }else {
                        $pass_err = "La contraseña no es correcta";
                    }
                }
            }else{
                $email_err = "El correo electrónico no existe";
            }
            
        }else{
            echo "Algo ha salido mal, por favor inténtalo nuevamente.";
        }
    }

    mysqli_close($link);

}

?>