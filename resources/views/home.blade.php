@extends ( 'layout.app' )

@section ( 'title', '' )

@section ( 'content' )
      <div class="col-md-12 container-kid">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-6">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12 text-left">
                      {!! Form::open( [
                        'route'   => 'sendContact',
                        'method'  => 'POST',
                        'id'      => 'contact',
                        'class'   => 'contact'
                      ] ) !!}
                        <div class="row text-center">
                          <h2 class="col-md-8 message-descuento text-center">
                            <img src="assets/img/email/descuento.png" alt="Descuento" style="width:100%;"><br>
                            Sólo regístrate aquí y enviaremos un cupon a tu correo electrónico.
                          </h2>

                          <div class="col-md-4"></div>
                        </div>

                        Obt&eacute;n tu descuento aqu&iacute;:

                        <div class="form-group">
                          {!! Form::text( 'first_name', null, [
                            'placeholder'   => 'Nombre',
                            'autocomplete'  => 'false',
                            'autocorrect'   => 'on',
                            'required'      => '',
                            'tabindex'      => '1',
                            'class'         => 'contact_first-name',
                            'v-model.sync'  => 'newContact.first_name'
                          ] ) !!}
                          <div class="col-md-1 space-kd"></div>
                          {!! Form::text( 'last_name', null, [
                            'placeholder'   => 'Apellido',
                            'autocomplete'  => 'false',
                            'autocorrect'   => 'on',
                            'required'      => '',
                            'tabindex'      => '2',
                            'class'         => 'contact_last-name',
                            'v-model.sync'  => 'newContact.last_name'
                          ] ) !!}
                          <br />
                          {!! Form::email( 'email', null, [
                            'placeholder'   => 'Correo Electrónico',
                            'autocomplete'  => 'false',
                            'autocorrect'   => 'on',
                            'required'      => '',
                            'tabindex'      => '3',
                            'class'         => 'contact_email',
                            'v-model.sync'  => 'newContact.email'
                          ] ) !!}
                          <div class="col-md-3"></div>
                          &nbsp;
                          <div class="col-md-12 text-center">
                            {!! Form::checkbox( 'contact_privacy-policy', 1 ) !!}
                            {!! Form::label( 'contact_privacy-policy', 'Acepto las políticas de privacidad' ) !!}
                          </div>

                          @if ( Session::has( 'message' ) )
                          <div class="col-md-12 alert alert-info">
                            {{ Session::get( 'message' ) }}
                          </div>
                          @endif
                          @foreach( $errors->all( ) as $error )
                          <div class="alert alert-warning">
                            {{ $error }}
                          </div>
                          @endforeach

                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-1"></div>
                              <div class="btn-kd col-md-4 text-center">
                                {!! Form::submit( 'Enviar', [
                                  'aria-role'       => 'button',
                                  ':click.prevent'  => 'submitContact',
                                  'tabindex'        => '4'
                                ] ) !!}
                              </div>
                            </div>
                          </div>
                        </div>
                      {!! Form::close() !!}
                    </div>

                    <div class="col-md-6"></div>
                  </div>
                </div>
                &nbsp;

                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-9 text-left">
                      <p>
                        No aplica con otras promociones y/o descuentos. Promoción válida para la compra máxima de 5 boletos y donde por lo menos uno de ellos sea de niño. No válido para fiestas infantiles, cursos, eventos especiales, grupos, escuelas. No es canjeable por dinero en efectivo. Sujeto a cupo. Válido en KidZania Monterrey. Vigencia del 10 de junio al 19 de agosto del 2016.
                      </p>
                    </div>
                  </div>
                </div>
                &nbsp;

                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6 text-rigth rd-dk">
                      <ul class="row">
                        <li class="col-md-1 redes fb" onclick="window.open('https://www.facebook.com/KidZaniaMexico/?fref=ts')"></li>
                        <li class="col-md-1 redes tw" onclick="window.open('https://twitter.com/KidZaniaMexico')"></li>
                        <li class="col-md-1 redes ig" onclick="window.open('https://es.pinterest.com/kidzaniamexico/')"></li>
                        <li class="col-md-1 redes pt" onclick="window.open('https://www.instagram.com/kidzaniamexico/')"></li>
                      </ul>
                    </div>

                    <div class="col-md-6 text-rigth rd-mb">
                      <ul class="row">
                        <li class="col-md-1 redes fb"></li>
                        <li class="col-md-1 redes tw" style="margin-left:35px;"></li>
                        <li class="col-md-1 redes ig" style="margin-left:70px;"></li>
                        <li class="col-md-1 redes pt" style="margin-left:105px;"></li>
                      </ul>
                    </div>

                    <div class="col-md-6 text-left kd-address">
                      <img class="img-responsive" src="assets/img/kidzania-com.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>

        <footer class="row footer-dk">
          <div class="col-md-6"></div>
          <div class="col-md-6 text-center">
            <img class="img-doctor" src="assets/img/background.png" />
          </div>
        </footer>

        <footer class="row footer-mb">
          <div class="col-md-12 text-center">
            <img class="img-doctor" src="assets/img/footer_mobile.png" />
          </div>
        </footer>
      </div>
@endsection

@section ( 'scripts' )
  <script src="//cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.4/vue-resource.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/css/lib/checkbox/js/bootstrap-checkbox.js"></script>
  <script>
    var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,

    contact = new Vue( {
      el      : '#contact',
      data    : {
        send          : false,
        newContact    : {
          first_name  : '',
          last_name   : '',
          email       : ''
        }
      },
      methods : {
        /**
         * Submit contact form
         * @param  Event event Event object
         */
        submitContact : function ( event ) {
          this.send         = true;

          var data          = {
                '_token'      : $( 'input[type="hidden"]' ).val(),
                'first_name'  : this.newContact.first_name,
                'last_name'   : this.newContact.last_name,
                'email'       : this.newContact.email
              },

          if ( this.isValid ) {
            alert( 'Por favor, revisa que los datos estén correctos.' );
          }
        }
      },
      // computed property for form validation state
      computed: {
        validation: function () {
          return {
            first_name  : !!this.newContact.first_name.trim( ),
            last_name   : !!this.newContact.last_name.trim( ),
            email       : emailRE.test( this.newContact.email )
          }
        },
        isValid: function () {
          var validation = this.validation
          return Object.keys( validation ).every( function ( key ) {
            return validation[ key ];
          } );
        }
      },
    } );
  </script>
@endsection