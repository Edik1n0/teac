<div class="ger">
    <div class="ger__intro">
        <h1>
            Bienvenid@<br>
            <?php
            $query = "SELECT * FROM unidades";
            $result = mysqli_query($link, $query);

            while ($row = mysqli_fetch_array($result)) { ?>

                <div class="n_unidad">
                    <?php echo $row['name'] ?>
                </div>
            <?php } ?>
        </h1>
    </div>
    
    <div class="ger__img">
        <img src="../img/img-perfil-intro.jpg" alt="">
    </div>
</div>