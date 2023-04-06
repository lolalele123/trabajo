<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estudiando Ando | PRINCICAL</title>
</head>
<body>

<?php  

        $Conexion = mysqli_connect("localhost", "root", "", "pkv")or 
        die("Problemas con la Conexion");

        mysqli_query($Conexion, "insert into registro(Nombre, Apellido, Correo, Contrasena) 
        values ('$_REQUEST[Nombre]', '$_REQUEST[Apellido]', '$_REQUEST[Correo]', '$_REQUEST[Contrasena]')")

            or die("Problemas en el Select" . mysqli_error($Conexion));

        mysqli_close($Conexion);
        
        header("location:  ../verificacion/verificadoRegistrado.html");

?> 

</body>
</html>


