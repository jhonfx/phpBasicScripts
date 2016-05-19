<?php

$con = mysql_connect("localhost","root","admin");
	   mysql_select_db("usuario",$con);
	   
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];


	   mysql_query("INSERT INTO user(id,nombre,edad) VALUES('$id','$nombre','$edad')",$con);
$error = mysql_error($con);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Base</title>
<script language="javascript">

function verifica(){
	if(document.form.nombre.value == ""){
		alert("Es obligatorio ingresar un nombre");
		document.form.nombre.focus();
		return false;
	}
	var total=0;
	for(i=0; i<document.form.sexo.length; i++){
	if(document.form.sexo[i].checked){
		total++;
		}
	}if(total==0){
		alert("no ha seleccionado su sexo");
		return false;
	}if((document.form.email.value.indexOf('@')==-1)||(document.form.email.value.indexOf('.')==-1)||(document.form.email.value.indexOf	('@')>document.form.email.value.indexOf('.'))){
	alert("email incorrecto");
	return false;
	}else{
		alert("Formulario enviado correctamente");
		document.form.submit();
	}
}

</script>
</head>

<body>
<form id="form" name="form" method="POST" action="formulario.php" onSubmit="javascript:return verifica();">
<table width="500" border="1" align="center">
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name="id" />
	</td>
  </tr>
  <tr>
    <td>Nombre</td>
    <td>
      <input type="text" name="nombre"  />
   </td>
  </tr>
  <tr>
    <td>Edad</td>
    <td>
      <input type="text" name="edad" />
    </td>
  </tr>
    <td></td>
    <td>
      <input type="submit" name="submit"  value="Enviar" />
    </td>
  </tr>
</table>
</form>
</body>
</html>