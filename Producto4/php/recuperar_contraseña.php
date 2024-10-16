<?php
include ('Conexion.php');

$correo = $_POST['Correo'];

$queryusuario = mysqli_query($conexion,"select * from registro where Correo = '$correo'");
$nr = mysqli_num_rows($queryusuario);
if ($nr == 1) {
    $mostrar = mysqli_fetch_array($queryusuario);
    $enviar_pssw = $mostrar['Contraseña']; // Suponiendo que 'Contraseña' es el nombre de la columna donde se almacena la contraseña.

    $paracorreo = $correo;
    $titulo = "Recuperar Contraseña";
    $mensaje = $enviar_pssw;
    $tucorreo = "From: totis4132@gmail.com"; 

    if (mail($paracorreo, $titulo, $mensaje, $tucorreo)) {
        echo "<script>alert('Contraseña enviada a ".$correo."'); window.location='../index.php';</script>";
    } else {
        echo "<script>alert('Error'); window.location='index.html';</script>";
    }
} else {
    echo "<script>alert('Este correo no existe'); window.location='../Recuperacion_Contra.php';</script>";
}

?>