
<?php $this->layout('master') ?>


    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container bg-black">
        <div class="formulario clearfix">
          <form class="form" action="index.html" method="post">
          <fieldset>
              <legend style="color:white;">Contacto</legend><br>

              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" required >
              <br><br>

              <label for="apellido">Apellido:</label>
              <input type="text" name="apellido" id="apellido" placeholder="Tu apellido" autocomplete="off" required>
              <br><br>


              <label for="asunto">Asunto: </label>
              <input type="text" name="asunto" id="asunto" placeholder="Asunto" autocomplete="off" required>
              <br><br>

              <label for="email">Correo Electronico: </label>
              <input type="email" name="email" id="email" placeholder="correo@dominio.com" required>
              <br><br>

              <label for="mensaje">Escribe tu mensaje: </label><br>
              <textarea type="text" aria-invalid="false" name= "mensaje" placeholder="Escribe aquí tu mensaje" cols="40" rows="10"></textarea>
              <br><br>

          </fieldset><br><br>
          <button type="button" name="button">Enviar</button>
          </form>

        </div><!--formulario.-->




        <div class="row redes">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Dirección</h4>
                <hr class="my-4">
                <div class="small text-black-50">Calle Federico del Toro 266-B, Cd Guzmán Centro, 49000 Cd Guzman, Jal. </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Correo</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">antoniohuerta@correo.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Telefono</h4>
                <hr class="my-4">
                <div class="small text-black-50">+52 (341) 104-8488</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-instagram"></i>
          </a>
        </div>

      </div>
    </section>
