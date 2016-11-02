@extends('layouts.app')

@section('content')
<script>
    window.CurrentUser = <?php echo json_encode($user); ?>
 </script>

<div class="container">
    <div class="row" v-if="ruta=='inicio'">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body">
                    
                    <strong>Seleccione en el Menú la herramienta correspondiente</strong>
                    <hr><section>
                        <p><strong>JRV->Apertura:</strong></p>
                        <p>Juntas Receptora de Votos: esta sección está destinada a reportar la apertura y el cierre de las Juntas Receptoras de Votos en cada Centro de Votación.</p>
                        <p>Así mismo en esta sección se reportará la asistencia de los Procuradores Electorales en cada Centro de Votación.</p>
                        <br><p><strong>JRV->Cierre:</strong></p>
                        <p>En esta sección se reportará únicamente el cierre de las Juntas Receptoras de Voto.</p>
                        <br><p><strong>Plan de Movilización:</strong></p>
                        <p>Esta sección está destinada a reportar la cantidad de Jóvenes que están Movilizando a los Votantes a cada Centro de Votación.</p>
                        <br><p><strong>Incidencias</strong></p>
                        <p>Esta sección está destinada a reportar las Insidencias por Centro de Votación en 3 Categorias diferentes: <strong> <span style="color:red">Urgencia Mayor</span>, <span style="color:orange">Urgencia Menor</span> y <span style="color:green">Sin Urgencia.</span></strong></p>
                    </section>
                </div>  
            </div>
        </div>
    </div>
    <div class="row" v-if="ruta=='apertura'">
    	<apertura apertura="true"></apertura>
    </div>
    <div class="row" v-if="ruta=='cierre'">
    	<apertura apertura="false"></apertura>
    </div>
    <div class="row" v-if="ruta=='movi'">
        <movilizacion></movilizacion>
    </div>
    <div class="row" v-if="ruta=='incs'">
        <incidencias></incidencias>
    </div>
    
</div>
@endsection
