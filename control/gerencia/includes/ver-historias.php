<div class="col-mx-8">
    <div class="histo_head">
        <h3>Repositorio de Historias clínicas</h3>
        <p>Desplácese hasta encontrar la historia que busca o escriba la palabra clave en el buscador</p>
    </div>

    <div class="histo__bd">
        <table class="table table-hover">
            <thead>
                <th scope="col">Cédula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Creado el</th>
                <th scope="col">Actualizar</th>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM users";
                $result = mysqli_query($link, $query);
                
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr class="usr__info">
                        <td style="padding-top: 16px;"><a href="user.php?id=<?php echo $row['id'] ?>"><?php echo $row['usercc'] ?></a></td>
                        <td style="padding-top: 16px;"><a href="user.php?id=<?php echo $row['id'] ?>"><?php echo $row['username'] ?></a></td>
                        <td style="padding-top: 16px;"><?php echo $row['created_at'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">
                                +
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>