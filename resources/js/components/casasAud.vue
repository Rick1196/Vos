<template>
    <div>
        <div class="container">
            <div class="table-responsive-lg">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Condominio</th>
                        <th>Arrendador</th>
                        <th>Fecha de arrendamiento</th>
                        <th>Numero de habitantes</th>
                    </thead><br>
                    <article class="message is-link text-center" v-if="!found">
                            <div class="message-body">
                                No hay Arrendamientos para mostrar
                            </div>
                    </article>
                    <tbody v-else>
                        
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
        }
    },
}
</script>
