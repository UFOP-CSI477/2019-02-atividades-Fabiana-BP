<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #6A5ACD;>
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
          <h4 class="nav-link">{{ __('Sistema de Controle de TCC') }}</h4>
        </li>
        <li class="nav-item dropdown">
          <a class="navbar-brand" href="/">{{ __('Área Geral') }}</a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="navbar-brand dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
        </li>
        </div>

        </ul>
    </div>
  </div>
</nav>
