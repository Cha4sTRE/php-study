<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession= new UserSession(); //llama a una nueva session
$user= new User(); //clase con metodos de usuario

if(isset($_SESSION['user'])){

    echo 'ya hay session abierta';
    $user-> setUser($userSession-> getCurrentUser());
    include_once 'vistas/home.php';

}else if(isset($_POST['username'])&&isset($_POST['password'])){

    $userForm=$_POST['username'];
    $passForm=$_POST['password'];

    $user= new User();
    if($user-> userExist($userForm,$passForm)){

        $userSession-> setCurrentUser($userForm);
        $user-> setUser($userForm);

        include_once 'vistas/home.php';
        
    }else{

        echo 'no existe el usuario';
        $errorLogin= "Nombre o Contraseña incorrecta";
        include_once 'vistas/login.php';
        
    }

}else{
    echo "no hay sesion";
    include_once 'vistas/login.php';
}

?>