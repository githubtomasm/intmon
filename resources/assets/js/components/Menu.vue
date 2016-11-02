<template>
	<!-- <nav class="navbar navbar-default"> -->
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
              <li :class="{'active': ruta=='inicio'}"><a @click="ruta='inicio'">Inicio</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JRV<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li :class="{'active': ruta=='apertura'}"><a @click="ruta='apertura'" href="#">Apertura</a></li>
                  <li :class="{'active': ruta=='cierre'}"><a @click="ruta='cierre'" href="#">Cierre</a></li>
                </ul>
              </li>
              <li :class="{'active': ruta=='procs'}"><a href="#" @click="ruta='procs'">Procuradores</a></li>
              <li :class="{'active': ruta=='movi'}"><a href="#" @click="ruta='movi'">Plan de Movilización<span class="sr-only">(current)</span></a></li>
              <li :class="{'active': ruta=='incs'}"><a href="#" @click="ruta='incs'">Incidencias</a></li>
              <!-- <li><a href="#">Monitoreo</a></li> -->

            </ul>
            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        
      </center>
    <!-- </nav> -->
</template>


<script>
	export default{
		mounted(){
			console.log('menú listo');
		}
	}
</script>