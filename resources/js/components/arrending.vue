<template>
    <div><br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="">Indique el numero de habitantes</label><br>
                    <input type="number" class="form-control" v-model="habs">
                </div>
            </div><br>
            <label for="">Buscar al arrendatario</label>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" v-model="first" placeholder="Nombre">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" v-model="last" placeholder="Apellidos">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-md btn-primary" @click="getFound()">Buscar</button>
                </div>
            </div>
        </div><br>
        <div class="container-fluid">
            <article class="message is-link" v-if="!found">
                <div class="message-body">
                    No hay residnetes para mostrar
                </div>
            </article>
            <div class="container" v-else>
                <div class="table-responsive-lg">
                    <table class="table">
                      <thead>
                          <th>Nombre(s)</th>
                          <th>Apellidos</th>
                          <th>Numero telefonico</th>
                          <th>Opciones</th>
                      </thead>
                      <tbody>
                          <tr v-for="item in found">
                              <td>{{item.first_name}}</td>
                              <td>{{item.last_name}}</td>
                              <td>{{item.phone}}</td>
                              <td><button class="btn btn-primary btn-sm" @click="seleccionar(item.id)">Seleccionar</button></td>
                          </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['house'],
    data(){
        return{
            first:'',
            last:'',
            found:null,
            habs:0
        }
    },
    methods: {
        getFound(){
            axios.post(`/api/searchOwner`,{
                first:this.first,
                last:this.last,
            }).then(response => {
                console.log(response.data)
                this.found = response.data;
            }).catch(error => {
                console.log(error.response)
                this.found = null;
            })
        },
        seleccionar(id){
            axios.post(`/api/selectOwner`,{
                house:this.house,
                habs:this.habs,
                resident:id
            }).then(response => {
                console.log(response.data)
            }).catch(error => {
                console.log(error.response.data.message)
                let msg = error.response.data.message;
                if(msg.includes('ORA-02290')){
                    alert("El numero de habitantes debe ser menor  a 5")
                }
            })
        },

    },
}
</script>