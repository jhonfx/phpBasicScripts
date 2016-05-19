<?php 
$dia = date(l);
$ip=$_SERVER['REMOTE_ADDR'];
$time = date("H:i"); 
$fecha = date("d/m/Y");
$nombre = gethostbyaddr($_SERVER['REMOTE_ADDR']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio 6</title>
</head>

<body>
<table width="500" border="1">
<tr>
    <td>Dia de La semana</td>
    <td>Dirección IP</td>
    <td>Hora Actual</td>
    <td>Fecha Actual</td>
    <td>Nombre Pc</td>
  </tr>
  <tr>
    <td><? echo $dia; ?></td>
    <td><? echo $ip; ?></td>
    <td><? echo $time; ?></td>
    <td><? echo $fecha; ?></td>
    <td><? echo $nombre; ?></td>
  </tr>
</table>
</body>
</html>