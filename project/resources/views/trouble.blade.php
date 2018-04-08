<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
        <!-- Styles -->

        
        
    </head>
    <body>

            @include('partials.header')

                  <section class="hero is-link">
                    <div class="hero-body">
                      <div class="container">
                        <div class="columns is-vcentered">
                          <div class="column">
                            <p class="title">
                              Tienes Preguntas?
                            </p>
                            <p class="subtitle">
                              Aqui tenemos la respuesta!
                            </p>
                          </div>
                          <div class="column is-narrow">
                            <div id="carboncontainer">
                  
                  </div>
                  
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="hero-foot">
                      <div class="container">
                        <nav class="tabs is-boxed">
                          <ul>
                            <li>
                              <a href="/">Como Funciona?</a>
                            </li>
                            <li class="is-active">
                              <a href="/trouble">Problemas?</a>
                            </li>
                            <li>
                              <a href="/top10">Top 10 !</a>
                            </li>
                            <li>
                              <a href="/starthere">Comienza Aqui!</a>
                            </li>
                            <li>
                              <a href="/contact">Contactanos</a>
                            </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                    <div class="container">
                      <h1 class="title"><b> Tienes problemas? </b></h1>
                      <p>Encuentra las respuestas mas comunes aqui :)</p>
                      <hr>

                      <hr style="margin-bottom: 0;">
                  
                      <div class="message is-danger">
                          <div class="message-header">
                            No encuentras tu profe?
                          </div>
                          <div class="message-body">
                            En caso que no encuentres tu profe, sigue el flujo de: <b> Ciudad > Universidad
                               > Facultad, encontraras un boton como este --> </b> <a class="button is-danger" href="/bulma-start/">Registrar un profe</a>
                          </div>
                        </div>

                        <div class="message is-danger">
                                <div class="message-header">
                                    Existe algun tipo de monitoreo?
                                </div>
                                <div class="message-body">
                                     R:/ Efectivamente, antes de ser posteado, cualquier tipo de calificación es supervisada
                                     por uno de los administradores de la pagina, <b>Ten en cuenta que cualquier comentario ofensivo sera 
                                         eliminado de la pagina
                                     </b>
                                </div>
                              </div>
                        <div class="message is-danger">
                                <div class="message-header">
                                    Tengo que crear cuenta para postear?
                                </div>
                                <div class="message-body">
                                     R:/ Si, solo puedes postear creando tu cuenta, de esta manera mantenemos el sitio
                                     seguro y mantenemos una comunidad organizada!
                                     </b>
                                </div>
                              </div>
                  
                      <hr style="margin-bottom: 0;">
                  
                    </div>
                  </section>

    </body>
</html>
