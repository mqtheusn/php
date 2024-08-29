<?php



//criando função
function somar(){
	$num1=10;
	$num2=20;
	$resp = $num1 + $num2;
	echo $resp;
}

//criando função com dois parâmetros
function soma($num1,$num2,$num3){
	$resp = $num1 + $num2 - $num3;
	echo $resp . "<br />";

}


//executando função com dois parâmetros
soma (20,30,40);
//executando função
somar();


function somarvalores ($num1,$num2){
	return ($num1 + $num2);
}

echo "<br /> Somando valores: " . somarvalores(10,60);

?>