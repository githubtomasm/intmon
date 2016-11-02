@extends("template")
@section("content")
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-lg-offset-3 col-md-offset-3">
        <br>
        <h2>Cierre JRV</h2>
        <hr>
        <form class="form" method="POST" action="/jrv/cierre">
            {!! csrf_field() !!}
            {{ method_field('PUT') }}
            <div class="row">
                <label for="jrv_num" class="form-group col-lg-12">
                    <span>Junta Receptora de Votos</span>
                    <input name="jrv_num" id="jrv_num" type="number" class="form-control">
                </label>
            </div>
            <div class="row">
                <section class="form-group col-lg-12">
                    <label for="">¿Cierre Realizado?</label>
                    <label for="si">Si <input type="radio" value="no" name="apertura"></label>
                    <label for="no">No <input type="radio" value="si" name="apertura"></label>
                </section>                
            </div>
            <div class="row">
                <label for="obs" class="form-group col-lg-12">
                    <span>Observaciones</span><br>
                    <textarea name="obs" id="abrio" cols="60" rows="10"></textarea>
                </label>
            </div>
                <div class="row" >
                <button class="btn btn-success btn-block" type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </div>

    
</div>
<br>
<br>
@endsection