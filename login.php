<?php 

if(isset($_POST['usuario'])){
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['password'] = $_POST['password'];
    header('location: index.html');
}else{
    header('location: login.html');
}
?>