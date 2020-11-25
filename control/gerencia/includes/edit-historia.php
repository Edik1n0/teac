<?php include('db.php');

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $username = $row['username'];
        $usercc = $row['usercc'];
        $userphone = $row['userphone'];
        $city = $row['city'];
        $address = $row['address'];
        $userdesc = $row['userdesc'];
        $created_at = $row['created_at'];
    }

    if (isset($_POST['update']) && isset($_GET['id'])) {
        $id = $_GET['id'];
        $updater = $_POST['updater'];
        $nurse = $_POST['nurse'];
        $query = "INSERT INTO updates(updater, nurse) VALUES ('$updater', '$nurse')";
        $result = mysqli_query($link, $query);
        if (!$result) {
            die("Query Failed");
        }
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM updates WHERE id = $id";
        $result = mysqli_query($link, $sql);
    
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $updater = $_POST['updater'];
            $nurse = $_POST['nurse'];
        }
    }
}

?>

<div class="user_ed">

    <div class="container">
        <div class="ui_head">
            <h3>Datos del paciente:</h3>
            <h4><?php echo $username ?></h4>
        </div>
        <div class="ui_bd">
            <div class="ua_head">
                <h3>Datos personales:</h3>
            </div>
            <div class="uisc">
                <div class="u_name">
                    <h4>Nombre completo:</h4>
                    <p><em><?php echo $username ?></em></p>
                </div>
                <div class="u_cc">
                    <h4>Número de cédula:</h4>
                    <p><em><?php echo $usercc ?></em></p>
                </div>
            </div>
            <div class="uisec">
                <div class="u_phone">
                    <h4>Número de contacto:</h4>
                    <p><em><?php echo $userphone ?></em></p>
                </div>
                <div class="u_address">
                    <h4>Residencia del servicio:</h4>
                    <p><em><?php echo $address ?></em></p>
                </div>
            </div>
            <div class="u_desc">
                <h4>Estado inicial del paciente:</h4>

                <p>
                    <div class="u_descri">
                        <em><?php echo $userdesc ?></em>
                    </div>
                </p>

                <div class="f_desc">
                    <p>
                        <strong>Ingresado el </strong>
                        <em><?php echo $created_at ?></em>
                    </p>
                </div>
            </div>

            <div class="ui_update">
                <div class="uptodate">
                    <h3>última actualización:</h3>
                    <em><?php echo $updater; ?></em>
                </div>
                <div class="up_by">
                    <p><strong>Actualizado el: </strong></p>
                    <em><?php echo $created_at; ?></em>
                    
                    <p><strong>A cargo de: </strong></p>
                    <em><?php echo $nurse; ?></em>
                </div>
            </div>

            <div class="ua_head">
                <h3>Actualice el estado del paciente:</h3>
                <div class="update">
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group">
                            <label>Describa el estado del paciente</label>
                            <textarea name="updater" placeholder="800 Caracteres Máx." cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div style="display: flex; justify-content: space-around">
                            <label style="color: black; padding-top: 10px;"><em>Personal a cargo:</em></label>
                            <input type="text" placeholder="Patricia Villegas" class="form-control" name="nurse">
                        </div>
                        <div style="display: flex; justify-content: space-around">
                            <label style="color: black; padding-top: 10px;">
                                <em>Los datos no podrán ser editados después de hacer clic en <strong>Actualizar</strong></em></label>
                            <input type="submit" value="Actualizar" class="btn btn-primary" name="update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>