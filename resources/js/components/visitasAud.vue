<template>
    <div>
            <div class="container">
                    <div class="table-responsive-lg">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Condominio</th>
                                <th>Visitante</th>
                                <th>Fecha de la visiata</th>
                            </thead>
                            <br>
                            <article class="message is-link text-center" v-if="!found">
                                    <div class="message-body">
                                        No hay Visitas para mostrar
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