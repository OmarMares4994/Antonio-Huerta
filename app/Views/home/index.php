<!-- File: /app/Views/hola/index.php -->

<?php $this->layout('master') ?>

<!-- ¡Hola, = $this->e($nombre)  -->


    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Antonio Huerta</h2>
            <img class="imgantonio"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Giuliano_Parisi_Trio.jpg/271px-Giuliano_Parisi_Trio.jpg" alt="foto antonio">
            <p class="text-white-50  "> Biografía Corta , nacido en ..Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
        </div>
        <img src="img/ipad.png" class="img-fluid" alt="">
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row justify-content-center no-gutters" >
          <div class="col-lg-6">
            <img class="img-fluid" src="https://i.blogs.es/7e372b/grand-piano/450_1000.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Concierto</h4>
                  <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="row justify-content-center no-gutters martop-10">
          <div class="col-lg-6">
            <img class="img-fluid" src="https://i.blogs.es/7e372b/grand-piano/450_1000.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Presentación</h4>
                  <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Project One Row -->
        <!--<div class="row justify-content-center no-gutters mb-5 mb-lg-0 martop-10 ">
          <div class="col-lg-6">
            <img class="img-fluid" src="https://i.blogs.es/7e372b/grand-piano/450_1000.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Misty</h4>
                  <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>-->

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters martop-10">
          <div class="col-lg-6">
            <img class="img-fluid" src="https://i.blogs.es/7e372b/grand-piano/450_1000.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Mención</h4>
                  <p class="mb-0 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>


    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row redes">

            <div class="col-md-4 mb-3 mb-md-0 radius" >
              <div class="card py-4 h-100">
                <div class="card-body text-center">
                  <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                  <h4 class="text-uppercase m-0">Dirección</h4>
                  <hr class="my-4">
                  <div class="small text-black-50">Calle Federico del Toro 266-B, Cd Guzmán Centro, 49000 Cd Guzman, Jal. </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0 radius">
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

            <div class="col-md-4 mb-3 mb-md-0 radius">
              <div class="card py-4 h-100">
                <div class="card-body text-center">
                  <i class="fas fa-mobile-alt text-primary mb-2"></i>
                  <h4 class="text-uppercase m-0">Telefono</h4>
                  <hr class="my-4">
                  <div class="small text-black-50">+52 (341) 104-8488</div>
                </div>
              </div>
            </div>

        </div><!--redes-->
        <p style="color : #fff" class="social d-flex justify-content-center">Siguenos en:</p>
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
