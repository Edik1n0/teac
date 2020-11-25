<?php include('db.php') ?>
<?php

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php");
    exit;
}

?>

<?php include('includes/header.php') ?>
<?php include('../includes/nav.php') ?>

<div class="panel">
    <?php include('includes/nav.php') ?>
    <?php include('includes/add-historia.php') ?>
</div>

<?php include('includes/footer.php') ?>