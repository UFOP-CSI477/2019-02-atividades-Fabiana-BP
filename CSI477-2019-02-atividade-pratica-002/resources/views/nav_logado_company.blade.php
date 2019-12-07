<nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #6A5ACD;>
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
           <li class="nav-item dropdown">
               <h4 class="navbar-brand">{{ __('Escola A') }}</h4>
             </li>
             <li class="nav-item dropdown">
               <a class="navbar-brand" href="/index_company/1">{{ __('Tipos de Protocolos') }}</a>
             </li>

             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="navbar-brand dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Sair') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                 </div>
             </li>
           </ul>
         </div>
      </div>
    </nav>
