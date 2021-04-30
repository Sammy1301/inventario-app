<template>
  <div class="login">
    <div class="login-body">
    <h1>Login</h1>
    <div class="content">
      <label for="userName">User Name</label><br>
      <input type="text" name="user">
      </div>
      <div class="content">
      <label for="userName">Password</label><br>
      <input type="password" name="pass">
      </div>
      <br><br>
      <hr>

      <span><router-link to="/Home">Login</router-link></span>
      <span><router-link to="/Registro">Registrarse</router-link></span>
    </div>
  </div>
</template>

<script>
export default {
  name:'Login'
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