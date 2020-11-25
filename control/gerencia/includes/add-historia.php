<div class="col-mx-8">
    <div class="container">
        <div class="card card border-primary mb-3">
            <div class="card-header">
                <h1>Formulario de usuarios</h1>
            </div>

            <div class="card-body">
                <div class="card-title">
                    <p>Ingrese los datos del paciente en los espacios en blanco.
                        <em>Los datos marcados con * son obligatorios</em>
                    </p>
                </div>

                <div class="aform">
                    <form action="add-user.php" class="formi" method="POST">
                        <div class="form-group">
                            <label>Nombre completo:</label>
                            <input type="text" name="username" placeholder="Fernando Contreras" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Número de Cédula:</label>
                            <input type="text" name="usercc" placeholder="1025700789" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Número de contacto:</label>
                            <input type="tel" name="userphone" placeholder="(4) 323 6548" class="form-control">
                        </div>
                        <div class="userlocation">
                            <label><strong>Ubicación del servicio:</strong></label>
                            <div class="form-group">
                                <label>Ciudad/Mpio:</label>
                                <input type="text" name="city" placeholder="Sabaneta, Antioquia" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Dirección:</label>
                                <input type="text" name="address" placeholder="Cll. 23 N° 66-45" class="form-control">
                            </div>
                            <div class="userInfo">
                                <label><strong>Observaciones</strong></label>
                                <textarea name="userdesc" cols="30" rows="10" placeholder="Máx. 740 Caracteres" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar" class="btn btn-primary" name="add-user">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>