<nav class="navbar navbar-default">
  <center>
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">Inicio</a></li>
          @if(\Auth::check())
          @if(\Auth::user()->hasRole('campo'))
            {{-- @role('campo') --}}
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JRV<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Apertura</a></li>
                <li><a href="#">Cierre</a></li>
              </ul>
            </li>
            <li><a href="#">Movilización de Jóvenes<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="#">Incidencias</a></li>
            <li><a href="#">Procuradores</a></li>
            {{-- @endrole --}}
          @endif
          @endif
          @if(\Auth::check())
          @if(\Auth::user()->hasRole('monitoreo'))
            <li><a href="#">Monitoreo</a></li>
          @endif
          @endif
        </ul>
        
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    
  </center>
</nav>