<?php
 session_start(); 

include_once "datos/conexion.php"; 



function verificar_login($user,$password,&$result)

    {

        $sql =( "SELECT * FROM usuarios WHERE idusuario = ‘$user’ and ‘$password’ = ‘$password’”");

        $rec = mysql_query($sql);

        $count = 0;

        while($row = mysql_fetch_object($rec))

        {

            $count++;

            $result = $row;

        }

        if($count == 1)

        {

            return 1;

        }

        else

        {

            return 0;

        }

    }
    



if(!isset($_SESSION['userid'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee

{

    if(isset($_POST['login'])) //Si la primera condición no pasa, haremos otra preguntando si el boton de login fue presionado

    {

        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1) //Si el boton fue presionado llamamos a la función verificar_login() dentro de otra condición preguntando si resulta verdadero y le pasamos los valores ingresados como parámetros.

        {

            /*Si el login fue correcto, registramos la variable de sesión y al mismo tiempo refrescamos la pagina index.php.*/

            $_SESSION['userid'] = $result->idusuario;

            header("location:index2.php");

        }

        else

        {

            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; //Si la función verificar_login() no pasa, que se muestre un mensaje de error.

        }

    }

?>

<form action="" method="post" class="login">

    <div><label>Username</label><input name="user" type="text" ></div>

    <div><label>Password</label><input name="password" type="password"></div>

    <div><input name="login" type="submit" value="login"></div>

</form>

<?php

} else {


    echo 'Su usuario ingreso correctamente.';

    echo '<a href="logout.php">Logout</a>';

}

?>
?>

