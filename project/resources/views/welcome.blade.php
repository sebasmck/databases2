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
                              Bienvenido
                            </p>
                            <p class="subtitle">
                              Tu mismo califica a tu profesor!
                            </p>
                          </div>
                          <div class="column is-narrow">
                            <div id="carboncontainer">
                                <marquee >  Creado por: Santi, and sebas!  </marquee> <br>
                                <marquee behavior="down" direction="right"> Dirijido por Dr. Germán Vargas</marquee>
                            </div>  
                  
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="hero-foot">
                      <div class="container">
                        <nav class="tabs is-boxed">
                          <ul>
                            <li class="is-active">
                              <a href="/">Como Funciona?</a>
                            </li>
                            <li>
                              <a href="/trouble">Problemas?</a>
                            </li>
                            <li>
                                <a href="/top10">Top 10 !</a>
                              </li>
                              <li>
                                <a href="/starthere">Comienza Aqui!</a>
                              </li>
                              <li>
                                <a href="/contacto">Contactanos</a>
                              </li>
                           
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                    <div class="container">
                      <h1 class="title"><b> Simple! </b></h1>
                      <hr>
                  
                      <div class="content">
                        <ol>
                          <li>
                            Busca tu ciudad
                          </li>
                          <li>
                            Escoge tu Universidad
                          </li>
                          <li>
                            Elige tu carrera
                          </li>
                          <li>
                            Busca tu profe y cuentanos que te parece!
                          </li>
                        </ol>
                      </div>

                      <hr>
                  
                      <div class="message is-info">
                        <div class="message-header">
                          Nuestra Idea
                        </div>
                        <div class="message-body">
                              <li>Mejorar la calidad de nuestra educación</li>                              
                              <li>Construir una comunidad informativa</li>
                              <li>Facilitar la inscripcion de materias mensual!</li>
                        </div>
                      </div>
                  
                      <hr style="margin-bottom: 0;">  
                  
                    </div>
                  </section>

    </body>
</html>
