<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>formulario de registro</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="wrapper">
    <div class="title"> 
      Formulario de registro CFL401
    </div>
    <form autocomplete="off" class="form" method="POST" onsubmit="return confirm('usted esta a punto de registrarse como: <?php verificar() ;?>. Desea continuar.');">
       <div class="inputfield">
          <label>Nombre</label>
          <input type="text" name="nombre" class="input" class="nombre" required>
       </div>  
        <div class="inputfield">
          <label>Apellido</label>
          <input type="text" name="apellido" class="input" required>
       </div>  
       <div class="inputfield">
          <label>Domicilio</label>
          <input type="text" name="domicilio" class="input" required>
       </div>  
      <div class="inputfield">
          <label>Codigo postal</label>
          <input type="number" name="cp" class="input" required>
       </div> 
       <div class="inputfield">
          <label>Tipo de documento</label>
          <div class="custom_select" >
            <select name="tdoc" required>
              <option value="">Elija un campo</option>
              <option value="DNI">DNI</option>
              <option value="DU">DU</option>
              <option value="PASAPORTE">PASAPORTE</option>
              <option value="LE">LE</option>
              <option value="OTROS">OTROS</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Numero de documento</label>
          <input type="number" name="documento" class="input" required>
       </div>  
       <div class="inputfield">
          <label>Telefono</label>
          <input type="number" name="telefono" class="input" required>
       </div> 
        <div class="inputfield">
          <label>Estado civil</label>
          <div class="custom_select">
            <select name="estado" required>
              <option value="">Elija un campo</option>
              <option value="Casado">CASADO</option>
              <option value="Soltero">SOLTERO</option>
              <option value="Viudo">VIUDO</option>
              <option value="Divorciado">DIVORCIADO</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Sexo</label>
          <div class="custom_select">
            <select name="sexo" required>
              <option value="">Elija un campo</option>
              <option value="masculino">MASCULINO</option>
              <option value="femenino">FEMENINO</option>
              <option value="no binario">NO BINARIO</option>
            </select>
          </div>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" required>
            <span class="checkmark"></span>
          </label>
          <p>Confirmo que todos los campos son correctos</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Registrarme" name="enviar" class="btn">
      </div>
  </form>
</div>	
</body>
</html>
<?php include("conexion.php"); ?>
<?php include("datos.php"); ?>

<?php function verificar(){
  if(isset($_POST['enviar'])){
 
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$ndoc = $_POST['documento'];
$cel = $_POST['telefono'];
$nya = $apellido." _ ".$nombre;
$tdoc = $_POST['tdoc'];
$sexo = $_POST['sexo'];
$estado= $_POST['estado'];
$domicilio =$_POST['domicilio'];
$cp = $_POST['cp'];  


echo $nya, $domicilio, $cp, $tdoc, $ndoc, $cel, $estado, $sexo;
};
}; ?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>