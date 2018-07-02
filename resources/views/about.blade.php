@extends('layouts.master')

@section('contenido')

  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/slider_1.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">
                <h2>Nosotros</h2>
                <p>Somos un grupo multidisciplinario (bla)</p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->

  <div class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInLeft">

          <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h3 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                    Misión
                  </a>
                </h3>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p>Inspirados en nuestra historia y experiencia de vida, decidimos fomentar la actividad física y la interacción con la naturaleza, de manera responsable e integral, para mejorar la calidad de vida y contribuir a un futuro más saludable en nuestros alumnos y sus familias.</p>

                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Visión
                  </a>
                </h3>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  <p>Como la primera empresa de entrenamiento y salud deportiva a domicilio, nuestros esfuerzos se orientan a estar en la vanguardia, con el objetivo de entregar un servicio integral, profesional y de calidad, trabjando a diario para satisfacer todas las necesidades que tienen y que podrían tener nuestros alumnos.</p>
                  
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Nuestros valores
                  </a>
                </h3>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <ul>
                    <li>Transparencia: Para CT la confianza y lealtad son puntos básicos en un relación tanto con nuestro equipo, como con nuestros alumnos y pacientes.</li>
                    <li>Puntualidad: Respetar el tiempo de los demás es fundamental.</li>
                    <li>Diferencia: Buscamos ser líderes.</li>
                    <li>Excelencia: Servicio de calidad.</li>
                    <li>Responsabilidad: Debemos cumplir tanto a nuestros alumnos y pacientes, como al medio ambiente.</li>
                    <li>Emocionalidad: Saber que siente nuestro equipo o que sienten nuestros alumnos y pacientes, es básico para hacer bien nuestro trabajo.</li>
                    <li>Escucha: No sólo somos guías del deporte y de la salud para nuestros alumnos y pacientes, también somos sus psicólogos.</li>
                    <li>Pasión: Esto es parte del deporte y la actividad física, van de la mano.</li>
                    <li>Resolución: Parte importante de nuestros servicios es descubrir las problemáticas de las personas, para luego darles la solución.</li>
                    <li>Lealtad: La fidelidad es el resultado de nuestro trabajo.</li>
                  </ul>
                  <!-- <p>Transparencia: Para CT la confianza y lealtad son puntos básicos en un relación tanto con nuestro equipo, como con nuestros alumnos y pacientes.</p>
                  <p>Puntualidad: Respetar el tiempo de los demás es fundamental.</p>
                  <p>Diferencia: Buscamos ser líderes.</p>
                  <p>Excelencia: Servicio de calidad.</p>
                  <p>Responsabilidad: Debemos cumplir tanto a nuestros alumnos y pacientes, como al medio ambiente.</p>
                  <p>Emocionalidad: Saber que siente nuestro equipo o que sienten nuestros alumnos y pacientes, es básico para hacer bien nuestro trabajo.</p>
                  <p>Escucha: No sólo somos guías del deporte y de la salud para nuestros alumnos y pacientes, también somos sus psicólogos.</p>
                  <p>Pasión: Esto es parte del deporte y la actividad física, van de la mano.</p>
                  <p>Resolución: Parte importante de nuestros servicios es descubrir las problemáticas de las personas, para luego darles la solución.</p>
                  <p>Lealtad: La fidelidad es el resultado de nuestro trabajo.</p> -->
                </div>
              </div>
            </div>
          </div>
          <!-- END panel-group -->
        </div>
        <div class="col-md-6 probootstrap-animate" data-animate-effect="fadeInRight">

          <figure>
            <div class="probootstrap-video">
              <a href="https://vimeo.com/45830194" class="popup-vimeo probootstrap-video-play"><i class="icon-play3"></i></a>
              <img src="img/slider_2.jpg" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive img-border">
            </div>
            <figcaption>This is a caption. Far far away, behind the word mountains.</figcaption>
          </figure>

        </div>
      </div>
    </div>
  </div>
  <!-- END section -->

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading probootstrap-animate">
          <h2>Nuestro equipo</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/person_1.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">Jeremy Slater</h2>
              <p><small>Web Designer</small></p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <ul class="probootstrap-social">
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/person_2.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">James Butterly</h2>
              <p><small>Web Developer</small></p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <ul class="probootstrap-social">
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 probootstrap-animate">
          <div class="probootstrap-card probootstrap-person text-center">
            <div class="probootstrap-card-media">
              <img src="img/person_3.jpg" class="img-responsive" alt="Free HTML5 Template by uicookies.com">
            </div>
            <div class="probootstrap-card-text">
              <h2 class="probootstrap-card-heading mb0">James Smith</h2>
              <p><small>Web Designer</small></p>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <ul class="probootstrap-social">
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END section --> 

  @stop