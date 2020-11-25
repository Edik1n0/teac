<?php include('db.php') ?>
<?php include('includes/header.php') ?>
<?php include('includes/nav.php') ?><br>
<?php include('includes/wp.php') ?>
<?php
if (isset($_SESSION['message'])) { ?>
    <div class="container">
        <div class="alert alert-dismissible alert-primary" style="text-align: center;">
            <?= $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    </div>
<?php session_unset();
} ?>
<?php include('includes/slider.php') ?>

<!--Introducción-->
<div class="container">
    <div class="intro-content">
        <div class="logo-intro">
            <img src="img/nosotros2.png" alt="nosotros-teacompano" title="Teacompaño - Nosotros">
        </div>
        <div class="txt-intro">
            <div class="header">
                <h1>Teacompaño</h1>
                <h2>Cuidados de enfermería en la comodidad de su casa</h2>
            </div>
            <div class="intro-body">
                <p>Somos una empresa de salud en casa, registrados ante la dirección seccional de salud, contamos
                    con un gran equipo interdisciplinario que brinda cuidados de enfermería en el domicilio de forma
                    oportuna, responsable y eficiente, con calidad y calidez, aportando a la recuperación de los
                    pacientes y brindando apoyo integral a la familia.<br><br>
                </p>
            </div>
        </div>
    </div>
</div>
<!--Fin Introducción-->

<?php include('includes/nosotros.php') ?>
<?php include('includes/servicios.php') ?>
<?php include('includes/claims.php') ?>
<?php include('includes/mapa.php') ?>
<?php include('includes/subscribe.php') ?>
<?php include('includes/footer.php') ?>