<?php 

//Classe Avo
abstract class Mamiferos{
	protected $cor; // Caracteristicas / Propriedade / Tributo



	abstract function comer();  // Acao 
	
}
//Classe Filhas
class QuatroPatas extends Mamiferos
{
	public function comer(){
		echo "Quero comer Racao";
	}

}
//Classe Filhas
class DuasPatas extends Mamiferos
{

	public function comer(){
		echo "Quero comer Racao";
	}


}


//Classe Netas

class Cachorro extends QuatroPatas
{



}


$pitucha = new QuatroPatas();
$pitucha ->cor = "branco e cinza";
$pitucha ->comer();

print_r($pitucha);