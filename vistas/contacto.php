<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
<div class="contenlogocontacto">

  <figure class="logo pull-left">
  <a href="index.php"><img src="../img/consedif.png" alt="" class="img-responsive"></a>
</figure>

<!-- <a href="vistas/contacto.php" class="boton"><button type="button" class="btn btn-danger pull-right">Contactar</button></a> -->
</div>

<nav>
<ul>
  <li><a href="../index.php">INDEX</a></li>
  <li><a href="nosotros.php">NOSOTROS</a></li>
  <li><a href="servicios.php">SERVICIOS</a></li>
  <li class="select"><a href="contacto.php">CONTACTO</a></li>
</ul>
</nav>

<h1 style="color: #F9921A; text-align: center; margin-top: 3%;">CONTACTO</h1>
<hr>

<h2 style="text-align: center; margin-top: 3%;">Constructora CONSEDIF</h2>

<p class="texton">Para más información acerca de nuestros servicios, contáctenos usando este formulario y nosotros nos comunicaremos con usted lo más pronto posible.</p>

<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="#">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Escribe tu nombre completo" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Escribe tu correo" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Escribe tu teléfono" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Escribe tu mensaje"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Enviar Mensaje</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <!-- <div class="clear"></div> -->
                    </form>

                    <!-- Your Mail Message -->
                    <!-- <div class="mail-message-area">
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div> -->

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
<br>
<div class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.4472945889315!2d-93.17907048569235!3d16.754407488460817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd97d977e5d03%3A0xf949657d7faf26d0!2sAgua+592%2C+La+Gloria%2C+29054+La+Gloria%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1496865383719" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="section datos">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <img src="../img/hora.png"
            class="img-responsive">
          </div>
          <div class="col-md-4">
            <h3 class="text-left">HORARIO</h3>
            <p class="text-left">Lunes a Viernes de 9am a 6pm.</p>
          </div>
          <div class="col-md-2">
            <img src="../img/tel.png"
            class="img-responsive">
          </div>
          <div class="col-md-4">
            <h3 class="text-left">TELEFONO</h3>
            <p class="text-left">9994-97-21-01</p>
          </div>
        </div> <br>
        <div class="row">
          <div class="col-md-2">
            <img src="../img/correo.png"
            class="img-responsive">
          </div>
          <div class="col-md-4">
            <h3 class="text-left">CORREO</h3>
            <p class="text-left">info@consedif.com.mx</p>
          </div>
          <div class="col-md-2">
            <img src="../img/direccion.png"
            class="img-responsive">
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-left">DIRECCION</h3>
            <p class="text-left">Priv. Agua #592-A entre C. Priv. Las Rosas 1 y Priv. Fuego Col. La Gloria, Tuxtla Gutierrez, Chiapas. C.P. 29038</p>
          </div>
        </div>
      </div>
    </div>
<br>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/funciondthc.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>