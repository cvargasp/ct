@extends('layouts.master')

@section('contenido')

  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(img/slider_1.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="slides-text probootstrap-animate">
                <h2>Contacto</h2>
                <p>Si estas interesado en alguno de nuestros servicios dejanos tus datos para ponernos en contacto</p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- END: slider  -->
  
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <form action="#" method="post" class="probootstrap-form mb60">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">Nombre</label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Apellido</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="message">Cuentanos tus necesidades</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Enviar">
            </div>
          </form>
        </div>
        <div class="col-md-3 col-md-push-1">
          <h4>Contact Details</h4>
          <ul class="with-icon colored">
            <li><i class="icon-mail"></i><span>crosstrainingchile@gmail.com</span></li>
            <li><i class="icon-phone2"></i><span>+569 5396 2405</span></li>
            <li><i class="icon-phone2"></i><span>+569 8901 3029</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>  
 @stop