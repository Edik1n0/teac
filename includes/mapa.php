<!--Mapa y contacto-->
<div class="contacto" id="contacto">
    <div class="container">
        <div class="hcon">
            <h1>Contáctanos</h1>
            <h2>O pide una cita con nosotros hoy mismo</h2>
        </div>
        <div class="conintro">
            <p>Escríbenos un mensaje indicándonos los síntomas y el estado del paciente, incluyendo tu dirección y
                tus datos de contacto y una de nuestras enfermeras llegará a tu domicilio en el menor tiempo
                posible.
            </p>
        </div>
    </div>
    <div class="bmap">
        <div class="hform">
            <p>
                Estamos ubicados en el barrio guayabal, cerca a la Terminal de Transportes del Sur del Valle de
                Aburrá.<br><br>
            </p>
            <h5>Visítanos<br>
                O pide una cita con nosotros
            </h5>
            <p>* Rellene los datos a continuación y nos pondremos<br>en contacto con usted lo más pronto posible.</p>
        </div>
        <div class="formulario">
            <form action="save_task.php" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="Nombre completo" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Correo electrónico" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <input type="tel" placeholder="Teléfono" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <textarea cols="30" rows="10" placeholder="Comentarios" class="form-control" style="height: 100px;" name="description"></textarea>
                </div>
                <div class="boton">
                    <input type="submit" class="btn btn-secondary" name="save_task">
                </div>
            </form>
        </div>
    </div>
    <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.40179101689!2d-75.59214138528334!3d6.210620195504064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429970cef9547%3A0x8be802b3bf485af2!2sTeacompa%C3%B1o!5e0!3m2!1ses!2sco!4v1580331245372!5m2!1ses!2sco" style="width: 100%; height: 540px;" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>

<!--Fin Mapa y contacto-->