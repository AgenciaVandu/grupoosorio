<nav class="navbar navbar-expand-lg navbar-light bg-osorio fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      @stack('logo')
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('inicio')}}">Inicio </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route ('inflables-osorio') }}">Inflables Osorio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route ('obsa')}}">OBSA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route ('inflables-osorio-kids')}}">Osorio Kids</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route ('contacto')}}">Contacto</a>
        </li>
      </ul>

    </div>
  </div>
</nav>