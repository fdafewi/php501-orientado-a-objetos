<?php 
class Pincel {


public function escrever(){
	echo "Eu so um pincel: ". $this->cor;
 	}

}
class Carro {

	public $acelerar;
	public $freio;
	public $parado;


public function escrever(){
	echo "Eu so um Carro: ". $this->acelerar;
 	}

}

if (Carro()) = $parado{
	echo "Carro Parado";
	}elseif (Carro()) = $acelerar {

			echo "$acelerar";

			}



$pincelAzul = new Pincel();
$pincelAzul->cor = 'Azul';

$pincelPreto = new Pincel();
$pincelPreto->cor = 'Preto';


$acelerar = new Carro();
$acelerar->velocidade = '100km';
$freio = new Carro();
$freio->freiar = '0km';


echo "<pre>";
var_dump($pincelAzul);
var_dump($pincelPreto);
$pincelAzul->escrever();
echo "<br>";
$pincelPreto->escrever();



var_dump($acelerar);
var_dump($freio);
$acelerar->escrever();
echo "<br>";
$freio->escrever();
