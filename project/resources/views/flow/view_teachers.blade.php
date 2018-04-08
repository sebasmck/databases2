<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profesores</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">

        
    </head>
    <body>

           @include('partials.header')

                  <section class="hero is-link">
                    <div class="hero-body">
                      <div class="container">
                        <div class="columns is-vcentered">
                          <div class="column">
                            <p class="title">
                              Comienza Aqui!
                            </p>
                            <p class="subtitle">
                              Empieza seleccionando tu ciudad
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
                              <li class="is-active">
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
                      <h1 class="title"><b> {{$course->course_name}} </b></h1>                  
                      <hr style="margin-bottom: 0;">
                      <table id="programs" class="display">
                            <thead>
                                <tr>
                                    <th>Profesor</th>
                                    <th>calificación actual</th>
                                    <th>Calificar</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{$teacher->name}}</td>
                                    <td>relacion</td>
                                    <td>button</td>
                                </tr>
                            @endforeach
                            </tbody>
                            
                        </table>


                    </div>
                  </section>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    
    <script>
        
        $(document).ready( function () {
            $('#programs').DataTable();
        } );
        
    </script>


</html>
