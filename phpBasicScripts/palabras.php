<?php
/*
	class Palabras{
//variable de instancia
	private $arreglo;
	public function construct(){
	$this->arreglo=array();
	$archivos="prueba.txt";
	$fp=fopen($archivo,"r");
	$linea=fgets($fp,1024);
		while($line!=NULL){
		$palabra=explode(" ",$linea);
			for($i=0; $i<count($palabra); $i++){
			$this->arreglo[$indice++]=trim($palabra[$i]);
			}
	$this->arreglo[$indice++]=" ";
	$linea=pgets($fp,1024);
	}
	echo $linea;
}
metodo para recuperar un dato
	public function getArreglo($indice){
	return $this->arreglo[$indice];
	}
metodo para determinar el numero de palabras por renglon:
	public function numeroPalabras(){
	$np=array();
	for($i=0; $i<count($this->arreglo); $i++){
		if(stromp($this->getArreglo($i),"")==0){
		$np[$indice++]=$contador;
		$contador=0;
												 }
		else{
		$contador++;
			}
	return $np;
											}
	}
	

}
echo $arreglo;
echo $palabra;
echo $linea;
echo $indice;
echo $contador;
echo $np;

*/
?>

<?php
    echo str_word_count(file_get_contents("prueba.txt"));
?> 