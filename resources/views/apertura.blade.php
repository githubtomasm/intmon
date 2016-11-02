@extends("template")
@section("content")
{{-- {{dd(Auth::user()->hasRole("campo"))}} --}}

@if(Auth::check() && Auth::user()->hasRole("campo"))
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
        <br>
        <h2>Apertura JRV</h2>
        <hr>
        <form class="form" method="post" action="/jrv/apertura">
        {{-- {!! Form::model($jrv,['url' => route('jrv.apertura')]) !!} --}}
            {!! csrf_field() !!}
            <div class="row">
                <label for="dpto" class="form-group col-lg-12">
                    <span>Departamento</span>
                    <select name="dpto" id="dpto" class="form-control" >
                        <option value="Managua">Managua</option>
                    </select>
                </label>                
            </div>
            <div class="row">
                <label for="mun" class="form-group col-lg-12">
                    <span>Municipio</span>
                    <select name="mun" id="mun" class="form-control" >
                        <option value="Managua">Managua</option> 
                    </select>
                </label>
            </div>
            <div class="row">
                <label for="cv_num" class="form-group col-lg-12">
                    <span>Centro de Votaciones</span>
                    <input name="cv_num" id="cv_num" type="number" class="form-control"  value="">
                    {{-- {!! Form::number('nocv',null,['class'=>'form-control']); !!} --}}
                </label>
            </div>
            <div class="row">
                <label for="jrv_num" class="form-group col-lg-12">
                    <span>Junta Receptora de Votos</span>
                    <input name="jrv_num" id="jrv_num" type="number" class="form-control" value="">
                    {{-- {!! Form::number('nojrv',null,["class"=>'form-control']); !!} --}}
                </label>
            </div>
            <div class="row">
                <section class="form-group col-lg-12">
                    <label for="">¿Apertura Realizada?</label><br>
                    <label for="si">Si <input id="si" type="radio" name="apertura" value="1"></label>
                    <label for="no">No <input id="no" type="radio" name="apertura" value></label>
                </section>                
            </div>
            <div class="row">
                <label for="obs" class="form-group col-lg-12">
                    <span>Observaciones</span><br>
                    <textarea name="obs" id="obs" cols="60" rows="10"></textarea>
                </label>
            </div>
            <div class="row" >
                <button type="submit" class="btn btn-success btn-block" >
                    Enviar
                </button>
            </div>
        </form>
        {{-- {!! Form::close() !!}     --}}
        
    </div>
    
</div>
<br>
<br>
@else
    <div class="row">
        <center>
            <h1>No tienes permiso para esta Área</h1>
        </center>
    </div>
@endif
@endsection