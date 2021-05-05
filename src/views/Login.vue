<template>
  <div class="login">
    <div class="login-body">
    <h1>Login</h1>
    <form id="FrmLogin" autocomplete="off" @submit.prevent="login">
        <div class="content">
          <label for="user">User Name</label><br>
          <input type="text" name="user" v-model="user">
        </div>
        <div class="content">
          <label for="pass">Password</label><br>
          <input type="password" name="pass" v-model="pass">
        </div>
        <br><br>
        <hr>
        <div class="buttons">
          <input type="submit" />
          <router-link to="/Registro">Registrarse</router-link>
        </div>
    </form>
      </div>
  </div>
</template>

<script>
import axios  from 'axios'
export default {
  name:'Login',
  data() {
    return{
      user: '',
      pass: ''
    }
  },
  methods:{
      login(){
        const formulario = document.getElementById('FrmLogin')
        axios.post('http://localhost/app_inventario/api/Login.php', new FormData(formulario))
        .then( res => {
          if(res.data == 'success'){
            console.log(res.data)
            this.$router.push('Home')
          }else{
            console.log(res.data)

            alert("No se encuentra usuario")
          }
        })
      }
  }
}
</script>

<style scoped>
  *{
    margin: 0;
    padding: 0;
    /* box-sizing: border-box; */
  }
  .login{
    width: 100vw;
    height: 100vh;
    background: url('../imgs/login-bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }
  .login-body{
    background-color: cornflowerblue;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 400px;
    width: 300px;
    padding-top: 20px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
  }
  input[type="text"], input[type="password"]{
    background-color: transparent;
    color: black;
    border-bottom: 3px solid white;
    outline: none;
  }
</style>