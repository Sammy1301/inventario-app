<template>
    <div class="nav">
        <h2>Logo</h2>
        <div class="menu">
            <ul>
                <li>Inicio</li>
                <li>Clientes</li>
                <li>Productos</li>
                <li> <router-link to="/">Salir</router-link> </li>
            </ul>
        </div>
    </div>
</template>





<style scoped>
    *{
        text-decoration: none;
    }
    .nav{
        box-sizing: border-box;
        height: 60px;
        max-width: 100vw;
        background-color: cornflowerblue;
        color: #3b2f2e;
        font-family: sans-serif;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
    }
    .nav::after{
        content: "";
        display: table;
        clear: both;
    }
    ul li{
        display: inline-block;
        padding: 10px;
    }
    li:hover{
        background-color: cyan;
        color: darkred;
    }
</style>