<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $Contrasena = $_POST['Contrasena'];

    session_start();
    //Conectar base de datos

    $Conexion = mysqli_connect("localhost", "root", "", "pkv")or 
        die("Problemas con la Conexion");

    $Consulta = "Select * from registro where Nombre='$Nombre' and Correo='$Correo' and Contrasena='$Contrasena'";

    $Resultado = mysqli_query($Conexion, $Consulta);

    $Filas = mysqli_fetch_array($Resultado);


    if($Filas['Correo']=='PAULA12345@gmail.com')  { //administrador
        $_SESSION['Usuario'] = $Correo;
        header("location: ../paginaAdmin/paginaAdmin.php");
    }else
    if($Filas) {//usuario
        $_SESSION['Usuario'] = $Correo;
        header("location: ../paginaUsuario/paginaUsuario.php");
    }
    
    else{
        header("location: registro.html");
    }

    mysqli_close($Conexion);

  
?>
<script ></script>
</body>
</html>