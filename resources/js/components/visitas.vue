<template>
    <div>
        <header class="header">
        <h1 class="title">Visitante</h1>
        <h2 class="subtitle">Progama la visita de un servicio o de un conocido</h2>
        <p>
            Por seguridad se debe registrar a cada visitante
        </p><br>
    </header>
    <section>
            <label for="">Buscar al visitante</label>
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
            </div><br>
            <div class="container-fluid">
            <article class="message is-link" v-if="!found">
                <div class="message-body">
                    No hay visitantes para mostrar
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
            <div class="field"><br>
                <label for="type_visitor" class="label">¿Qué casa visita?</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="type_visitor" id="type_visitor">
                            <option value="" disabled selected>-- Selecciona una opcion --</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>

            </div>

    </section>
    </div>
</template>
<script>
export default {
    data() {
        return {
            found:null,
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
    },
}
</script>