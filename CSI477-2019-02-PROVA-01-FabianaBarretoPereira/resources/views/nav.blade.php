<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #6A5ACD;>
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
     @guest
      <li class="nav-item">
          <a class="nav-link" href="/">{{ __('Sistema de Controle de TCC') }}</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href='/areaestudante'>{{ __('Área Geral') }}</a>
        </li>
        <li class="nav-item">
            <a class="navbar-brand" href="{{ route('login') }}">{{ __('Área Administrativa') }}</a>
        </li>
        <!--@if (Route::has('register'))
        <li class="nav-item">
            <a class="navbar-brand" href="{{ route('register') }}">{{ __('Novo usuário') }}</a>
        </li>
          @endif-->

      @else
      <li class="nav-item">
          <a class="nav-link" href="/">{{ __('Sistema de Controle de TCC') }}</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href='/areaestudante'>{{ __('Área Geral') }}</a>
        </li>
        <li class="nav-item">
            <a class="navbar-brand" href="{{ route('projeto.index') }}">{{ __('Área Administrativa') }}</a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="navbar-brand dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </ul>
      @endguest
    </div>
  </div>
</nav>
