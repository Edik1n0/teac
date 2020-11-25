<div class="acc">
    <div class="container">
        <div class="acc__head">
            <h1>Bienvenid@ al Admin Teacompaño</h1>
        </div>

        <div class="f-acceso">
            <div class="card">
                <div class="container">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="fa__header">
                            <p>
                                Si hace parte del personal de enfermería, por favor <em>Ingrese Aquí</em>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="">Correo Asociado</label>
                            <input type="email" name="email" placeholder="andrea@teacompano.com.co" class="form-control">
                            <span class="msg-err"><?php echo $email_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="password" name="pass" placeholder="**********" class="form-control">
                            <span class="msg-err"><?php echo $email_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Ingresar" class="btn btn-primary" name="access">
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="container">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="fa__header">
                            <p>
                                Si hace parte del personal gerencial, por favor <em>Ingrese Aquí</em>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="">Correo Asociado</label>
                            <input type="email" name="email" placeholder="andrea@teacompano.com.co" class="form-control">
                            <span class="msg-err"><?php echo $email_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="password" name="pass" placeholder="**********" class="form-control">
                            <span class="msg-err"><?php echo $email_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Ingresar" class="btn btn-primary" name="access">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>