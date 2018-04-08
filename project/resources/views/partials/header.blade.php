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
                    <span>Registrate</span>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </nav>