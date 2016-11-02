<template>
    
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default" v-if="fields!=null && geo!=null">
        
        <div class="panel-heading" v-if="apertura=='true'">Aperturas de JRVs</div>
        <div class="panel-heading" v-if="apertura=='false'">Cierre de JRVs</div>
        
        <div class="panel-body">
            
            <div class="row form-group">
                <label for="" class="col-md-6 col-sm-6 col-lg-6 col-xs-12 form-group">
                    <span>Departamento</span>
                    <input type="text" disabled name="Dpto" v-model="fields.muni.departamento.name" class="form-control">
                </label>
                <label for="" class="col-md-6 col-sm-6 col-lg-6 col-xs-12 form-group">
                    <span>Municipio</span>
                    <input type="text" disabled name="Dpto" v-model="fields.muni.name" class="form-control">
                </label>
            </div>
            <div class="row form-group" >
                <label for="" class="col-md-12 col-sm-12 col-lg-12 col-xs-12 form-group">
                    <span>Código del Centro de Votación a Ingresar</span>
                    <select name="cv" id="" class="form-control" v-model='cvSelected'>
                        <option :value="index" v-for="(cv,index) in fields.muni.cvs">{{cv.cv_num}}</option>
                    </select>
                    <H6>Seleccione el Centro de Votaciones a Digitar</H6>
                </label>
            </div>
            <hr>
            <div class="row form-group" v-if="apertura=='true'">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label for="" class="col-md-6 col-sm-6 col-lg-6 col-xs-12 form-group">
                        <span>Procuradores Instalados</span><span> ( {{fields.muni.cvs[cvSelected].procs[0].cant_proc_ideal}} )</span>
                        <input type="number" name="procsInst" class="form-control" placeholder="Número de procuradores instalados" v-model="fields.muni.cvs[cvSelected].procs[0].cant_proc_real">
                    </label>
                    <label for="" class="col-md-6 col-sm-6 col-lg-6 col-xs-12 form-group">
                        <span>Observaciones Procuradores</span>
                        <input type="text" name="Dpto" class="form-control" placeholder="Detalles del o los procuradores faltantes" v-model="fields.muni.cvs[cvSelected].procs[0].obs" >
                    </label>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" v-if="apertura=='true'">
                        <span>JRVs Cerradas</span>
                        <input type="number" class="form-control" placeholder="Número de las JRVs cerradas" v-model="fields.muni.cvs[cvSelected].jrvsCerradas">
                    </label>
                    <label for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" v-if="apertura=='false'">
                        <span>JRVs Abiertas</span>
                        <input type="number" class="form-control" placeholder="Número de las JRVs cerradas" v-model="fields.muni.cvs[cvSelected].jrvsAbiertas">
                    </label>
                    <label for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <span>Observaciones</span>
                        <div v-if="apertura=='true'">
                            <input type="text" placeholder="Número(s) de JRV(s) Cerradas" name="obsJrvsApertura" class="form-control" v-model="fields.muni.cvs[cvSelected].objApertura">
                        </div>
                         <div v-if="apertura=='false'">
                            <input type="text" placeholder="Número(s) de JRV(s) aún Abiertas" name="obsJrvsCierre" class="form-control" v-model="fields.muni.cvs[cvSelected].objCierre">
                        </div>
                    </label>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-success pull-right">Enviar</button>
                </div>
            </div>            
        </div>
    </div>
</div>

</template>
<script>
    export default {
        mounted() {
            console.log('Apertura Ok');
            this.getGeo();
        },
        data(){
            return {
                geo:null,
                fields:null,
                cvSelected:0,
                currentValue:null,
            }
        },
        props:[
            'apertura',
        ],
        methods:{
            getGeo(){
                var vm=this;
                this.$http.get('/api/geo',Laravel.csrfToken).then((response)=>{
                    vm.geo=response;
                    vm.getFields();
                },(response)=>{
                    console.log(response);
                });
            },
            getFields(){
                var vm=this;
                this.$http.get('/api/fields',Laravel.csrfToken).then((response)=>{
                    // console.log(response);
                    vm.fields=response.body;
                },(response)=>{
                    console.log(response);
                });
            }
        }
    }
</script>
