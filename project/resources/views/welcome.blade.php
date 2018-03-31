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

            <nav class="navbar is-transparent">
                    <div class="navbar-brand">
                      <a class="navbar-item" href="{{ url('/') }}">
                      <img src="{{asset('img/logos/magnifierlogo.png')}}"  width="212" height="128">
                      </a>
                      <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                  
                    <div id="navbarExampleTransparentExample" class="navbar-menu">
                      <div class="navbar-start">
                        <a class="navbar-item" href="{{ url('/') }}">
                          Home
                        </a>
                        <div class="navbar-item has-dropdown is-hoverable">
                          <a class="navbar-link" href="/documentation/overview/start/">
                            Docs
                          </a>
                          <div class="navbar-dropdown is-boxed">
                            <a class="navbar-item" href="/documentation/overview/start/">
                              Overview
                            </a>
                            <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                              Modifiers
                            </a>
                            <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                              Columns
                            </a>
                            <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                              Layout
                            </a>
                            <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                              Form
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                              Elements
                            </a>
                            <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                              Components
                            </a>
                          </div>
                        </div>
                      </div>
                  
                      <div class="navbar-end">
                        <div class="navbar-item">
                          <div class="field is-grouped">
                            <p class="control">
                            <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="{{route('login')}}">
                                <span class="icon">
                                  <i class="fab fa-twitter"></i>
                                </span>
                                <span>
                                  Ingresar
                                </span>
                              </a>
                            </p>
                            <p class="control">
                            <a class="button is-primary" href="{{route('register')}}">
                                <span class="icon">
                                  <i class="fas fa-download"></i>
                                </span>
                                <span>Sign Up</span>
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </nav>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        
                        
                    @endauth
                </div>
            @endif

            
        </div>
    </body>
</html>
