@extends("template")
@section("content")
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
        <br>
        <h2>Incidencias</h2>
        <hr>
        <form class="form">
            <div class="row">
                <label for="departamento" class="form-group col-lg-12">
                    <span>Departamento</span>
                    <select name="departamento" id="departamento" class="form-control">
                        <option value="">Managua</option>
                    </select>
                </label>                
            </div>
            <div class="row">
                <label for="municipio" class="form-group col-lg-12">
                    <span>Municipio</span>
                    <select name="municipio" id="municipio" class="form-control">
                        <option value="">Managua</option>
                    </select>
                </label>
            </div>
            <div class="row">
                <center>
                    <label for="tipo">
                        <label for="mayor" style="color:Red ">Urgencia Mayor</label>   <input id="mayor" type="radio" name="tipo" value="mayor">  |  
                        <label for="menor" style="color:Orange ">Urgencia Menor</label>   <input id="menor" type="radio" name="tipo" value="menor">  |  
                        <label for="sin" style="color:Green ">Sin Urgencia</label>   <input id="sin" type="radio" name="tipo" value="sin">

                    </label>              
                    
                </center>
            </div>
            <div class="row">
                <label for="obs" class="form-group col-lg-12">
                    <span>Observaciones</span><br>
                    <textarea name="abrio" id="abrio" cols="60" rows="10" placeholder="Detalle la incidencia, recuerde mencionar si está relacionanda con un Centro de Votaciones o una Junta Receptora de Votos"></textarea>
                </label>
            </div>
            <div class="row" >
                <button class="btn btn-success btn-block">
                    Enviar
                </button>
            </div>
        </form>
        
    </div>
    
</div>
<br>
<br>
@endsection