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
                                Agrega un profe
                            </p>
                            <p class="subtitle">
                              Aqúí puedes agregar los datos del profe que quieres agregar
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
                            <li>
                              <a href="/trouble">Problemas?</a>
                            </li>
                            <li>
                                <a href="/top10">Top 10 !</a>
                              </li>
                              <li>
                                <a href="/starthere">Comienza Aqui!</a>
                              </li>
                              <li class="is-active">
                                <a href="/contact">Contactanos</a>
                              </li>
                              <li class="is-active">
                                <a href="/contact">Agrega un profe</a>
                              </li>
                          </ul>
                        </nav></div>
                      </div>
                    
                  </section>

                  <section class="section">
                        <div class="columns is-mobile">
                                <div class="column is-half is-offset-one-quarter">
                                        <div class="field">
                                                <label class="label">Nombre</label>
                                                <div class="control">
                                                  <input class="input" type="text" required>
                                                </div>
                                              </div>
                                              
                                              <div class="field">
                                                <div class="checkbox">
                                                <label>
                                                    
                                                </label>
                                              </div>
                                                <div class="control has-icons-left has-icons-right">
                                                  <input class="input" type="email" required>
                                                  <span class="icon is-small is-left">
                                                    <i class="fas fa-envelope"></i>
                                                  </span>
                                                  <span class="icon is-small is-right">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                  </span>
                                                </div>
                                              </div>
                                              
                                              <div class="field">
                                                <label class="label">Mensaje</label>
                                                <div class="control">
                                                  <textarea class="textarea" placeholder="Textarea"></textarea>
                                                </div>
                                              </div>
                                              
                                              <div class="field">
                                                <div class="control">
                                                  <label class="checkbox">
                                                    <input type="checkbox">
                                                    Estoy de acuerdo con los  <a href="#">terminos y condiciones</a>
                                                  </label>
                                                </div>
                                              </div>
                                              
                                              <div class="field is-grouped">
                                                <div class="control">
                                                  <button class="button is-link">Submit</button>
                                                </div>
                                                <div class="control">
                                                  <button class="button is-text">Cancel</button>
                                                </div>
                                              </div>
                                </div>
                        </div>

                    
                  </section>

    </body>
</html>
