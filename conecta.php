<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$bd="escuela";

$conecta= mysqli_connect($servidor,$usuario,$contrasena,$bd);

if($conecta->connect_error){
    die("Error al conectar".$conecta->connect_error);
}
 



?>