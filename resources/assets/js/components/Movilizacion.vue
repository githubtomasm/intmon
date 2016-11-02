<template>
<div class="col-md-8 col-md-offset-2">
	<div class="panel panel-default" v-if="fields!=null">
        <div class="panel-heading">Plan de Movilización de Votantes</div>
        <div class="panel-body">
  			<div class="row form-group">
                <label for="" class="col-md-6 col-sm-6 col-lg-6 col-xs-12 form-group">
                    <span>Departamento</span>
                    <input type="text" disabled name="Dpto"  class="form-control" v-model="fields.muni.departamento.name">
                </label>
                <label for="" class="col-md-6 col-sm-6 col-lg-6 col-xs-12 form-group">
                    <span>Municipio</span>
                    <input type="text" disabled name="Dpto"  class="form-control" v-model="fields.muni.name">
                </label>
            </div>
            <div class="row form-group" >
                <label for="" class="col-md-6 col-sm-6 col-lg-6 col-xs-12 form-group">
                    <span>Código del Centro de Votación a Ingresar</span>
                    <select name="cv" id="" class="form-control" v-model='cvSelected'>
                        <option :value="index" v-for="(cv,index) in fields.muni.cvs">{{cv.cv_num}}</option>
                    </select>
                    <H6>Seleccione el Centro de Votaciones a Digitar</H6>
                </label>
                <label for="" class="col-md-6 col-sm-6 col-lg-6 col-xs-12 form-group">
					<span>Cantidad de Jovenes Movilizando:</span>
                	<input type="number" class="form-control" v-model="cantidad">
                </label>
            </div>
            <div class="row form-group">
                <label for="" class="col-md-12 col-sm-12 col-lg-12 col-xs-12 form-group">
                	<span>Observaciones:</span>
                	<input type="text" class="form-control" v-model="obs">
                </label>
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-success pull-right">Enviar</button>
                </div>
            </div>            
  		</div><!-- end body-->
  	</div>
</div>  

</template>

<script>
    export default {
        mounted() {
            console.log('Movilización Ok');
            this.getFields();
        },
        data(){
            return {
                fields:null,
                cvSelected:0,
                currentValue:null,
                cantidad:0,
                obs:null,
            }
        },
        methods:{
            getFields(){
                var vm=this;
                this.$http.get('/api/movi',Laravel.csrfToken).then((response)=>{
                    // console.log(response);
                    vm.fields=response.body;
                },(response)=>{
                    console.log(response);
                });
            }
        }
    }
</script>
