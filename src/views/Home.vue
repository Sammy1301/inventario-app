<template>
 <div class="home">
   <NavBar/>
    <ListaProductos/>
 </div>
</template>

<script>
 import NavBar from '../components/NavBar'
 import ListaProductos from '../components/ListaProductos'

  export default {
    components:{
      NavBar,
      ListaProductos
    },
    name: 'Home',

  }
</script>

<style scoped>
 
</style>
