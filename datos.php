<?php 
if(isset($_POST['enviar'])){

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$ndoc = $_POST["documento"];
$cel = $_POST["telefono"];
$nya = $apellido." _ ".$nombre;
$tdoc = $_POST["tdoc"];
$sexo = $_POST["sexo"];
$estado= $_POST["estado"];
$domicilio =$_POST["domicilio"];
$cp = $_POST["cp"];  


$sql = "INSERT INTO personas( nya, sexo, estado, domicilio, cp, tdoc, ndoc, cel) 
VALUES ('$nya','$sexo','$estado','$domicilio','$cp','$tdoc','$ndoc','$cel')";

$guardarDatos = mysqli_query($conn, $sql);

if(!$guardarDatos){
  echo"hubo un error";
}

}
?>
