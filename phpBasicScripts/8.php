<?php
/*
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
$cad = "";
for($i=0;$i<8;$i++) {
$cad .= substr($str,rand(0,35),1);
}
print $cad;*/
?>

      <?php
   
      function password_rand_alt($longitud=8){   
   
          $num = array (1,2,3,4,5,6,7,8,9,0);
   
          $con = array (A,B,C,D,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z);
   
        //  $numeros =  range(1,9);
   
       //   $numeros_aleatorios = array_rand(2);
   
          $password = '';
   
          $inicio  = mt_rand(0,1);
   
          for ($n=0; $n<$longitud; $n++){
  
                  if ($inicio==1){
  
                          $inicio=0;
  
                          $password .= $num[mt_rand(0,count($con)-1)];
  
                  }
  
                  $password .= $num[mt_rand(0,count($num)-1)];
  
                  $password .= $con[mt_rand(0,count($con)-1)];
  
          }
  
          $password = substr($password,0,$longitud-0);
  
          return $password;
  
      }
  
      // pedimos una clave con 10 characteres
  
      $password = password_rand_alt(8);
  
      //devuelve algo como etopoyar36
  
      echo $password;
	  

	$archivo= "passwords.txt"; // el nombre de tu archivo	
	$valor .= $password . "\r\n" ; // valores pueden ser de base de datos...
	
	//$crea= fopen($archivo, "w"); // abrimos el archivo como escritura
		
	$crea = fopen($archivo, "a");
	fwrite($crea,"Password: $valor");
	fclose($crea); // Cerramos el archivo.
	
	//fwrite($crea, "$valor<br>"); // guardamos el valor
	
  

  
      ?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio 8</title>
</head>

<body>
</body>
</html>