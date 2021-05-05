<?php 
    include './connection.php';
    
    $usuario = $conn->real_escape_string(htmlentities($_POST['user']));
    $pass = $conn->real_escape_string(htmlentities($_POST['pass']));

    $query = $conn->query("SELECT usuario FROM usuarios WHERE usuario = '$usuario' and password = '$pass'");   

    if($query->fetch_assoc()){
        echo "success";
    }else{
        echo 'fail';
    }

?>