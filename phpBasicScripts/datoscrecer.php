<?php

$con = mysql_connect("localhost","root","admin");
	   mysql_select_db("credito", $con);

$query = "SELECT id_municipio from ppc_c_municipio where id_estado = 7";
$result = mysql_query($query, $con) or die(mysql_error());
$total = mysql_num_rows($result);

while($row = mysql_fetch_assoc($result)){
        echo $row['id_municipio']." ,";
		
}

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

</body>
</html>