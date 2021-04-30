<template>
    <div>
        <div class="productos" v-for="productos in producto" :key="productos.id">
            <h2>{{ productos.titulo }}</h2>
            <p>{{ productos.vehiculo }}</p>
            <input type="button" value="Editar">
            <input type="button" value="Eliminar">
        </div>
    </div>
</template>


<script>
export default {
    name: 'ListaProductos',
    data: () => ({
        producto: [{
            id: 0,
            titulo: 'Motor de arranque',
            vehiculo: 'Toyota Corolla',
            existencia: 150
        },
        {
            id: 1,
            titulo: 'Alternador',
            vehiculo: 'Honda Accord',
            existencia: 100
        }
        ]
    })
}
</script>


<style scoped>
    h2{
        font-weight: 400;
    }
    .productos{
        width: 240px;
        height: 200px;
        background-color: darksalmon;
        margin: 10px;
        display: inline-block;
        border-radius: 5px;
    }
    input[type="button"]{
        background-color: darkviolet;
        margin: 10px;
        padding: 5px;
        position:relative;
        bottom: 0px;
        transition: all 0.5s;
        border-radius: 10px;
    }
    input:hover{
        background-color: dimgrey;
        color: gainsboro;
    }
</style>