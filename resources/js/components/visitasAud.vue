<template>
    <div>
        <label for="">Buscar por fecha</label>
        <div class="row">
            <div class="col-md-3">
                <input type="date" v-model="f1" class="form-control">
            </div>
            <div class="col-md-3">
                <input type="date" v-model="f2" class="form-control">
            </div>
            <div class="col-md-3"><button class="btn btn-primary" @click="getFound()">
                Buscar
            </button></div>
        </div><br>
            <div class="container">
                    <div class="table-responsive-lg">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Tipo de visita</th>
                                <th>Visitante</th>
                                <th>Visita a:</th>
                                <th>Fecha de la visiata</th>
                            </thead>
                            <br>
                            <article class="message is-link text-center" v-if="!found">
                                    <div class="message-body">
                                        No hay Visitas para mostrar
                                    </div>
                            </article>
                            <tbody v-else>
                                <tr v-for="(item,index) in found">
                                    <th>{{index+1}}</th>
                                    <td>{{item.tipo}}</td>
                                    <td>{{item.visitante}}</td>
                                    <td>{{item.residente}}</td>
                                    <td>{{item.fecha_visita}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                found:null,
                f1:'',
                f2:''
            }
        },
        methods: {
            getFound(){
                axios.post(`/api/getVisitas`,{
                    f1:this.f1,
                    f2:this.f2,
                }).then(response => {
                    console.log(response.data)
                    this.found = response.data;
                }).catch(error => {
                    console.log(error.response)
                    this.found = null;
                })
            },
        },
        mounted() {
            this.getFound();
        },
    }
</script>