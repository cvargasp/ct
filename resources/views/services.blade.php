@extends('layouts.master')

@section('contenido')

  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/slider_1.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">
                <h2>Servicios</h2>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->

  <div id="nutricion" class="container">
    <div class="probootstrap-cta probootstrap-animate">
      <h2 class="mb20">Nutrición</h2>
      <p>Una buena nutrición es una de las CLAVES PARA EL ÉXITO tanto deportivo, como para llevar un estilo de vida saludable, sentirnos bien, con energía, prevenir enfermedades, etc.</p>
      <p>Los nutrientes que obtenemos de los alimentos nos proveen de energía, nos ayudan a regular procesos metabólicos, estructurales, como nos sentimos anímicamente, influyen en el rendimiento laboral, en la energía que tenemos para hacer las cosas, en cómo está tu composición corporal, etc.</p>
      <p>Una mala nutrición nos podría llevar a cualquier deficiencia nutricional y provocar una disminución tanto en la capacidad física como mental.</p>
    </div>
  </div>

  <div id="kinesiologia" class="container">
    <div class="probootstrap-cta probootstrap-animate">
      <h2 class="mb20">Kinesiología</h2>
      <p>Equipo multidisciplinario enfocado en el bienestar de nuestros alumnos.</p>
      <p>Nos preocupamos de forma personalizada e integral de la prevención y tratamiento de lesiones para lograr un reintegro deportivo óptimo y así mejorar la calidad y estilo de vida de nuestros deportistas.</p>
    </div>
  </div>

  <div id="acondicionamiento" class="container">
    <div class="probootstrap-cta probootstrap-animate">
      <h2 class="mb20">Acondicionamiento Físico</h2>
      <p> Somos una empresa dedicada al entrenamiento deportivo; mezclando diferentes disciplinas y entregando un servicio integral, con el fin de lograr de la mejor manera el objetivo propuesto junto al alumno. Contamos con un equipo de profesores y especialistas en diversas disciplinas.</p>
      <p>Nuestros servicios varían según estos 3 perfiles</p>
    </div>
    <div class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 probootstrap-animate" data-animate-effect="fadeInLeft">
            <div class="panel-group probootstrap-panel" id="accordion" role="tablist" aria-multiselectable="true">            
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h3 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Adultos
                    </a>
                  </h3>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <p>Estamos preparados para entrenar adultos de distintas caracteristicas y perfiles. Entregando distintos tipos de servicios, desde personal trainer a entrenamientos grupales.</p>                  
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h3 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Niños
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
                      Empresas
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
        </div>
      </div>
    </div>
  </div>

@stop