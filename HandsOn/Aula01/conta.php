<<?php 

abstract class Conta
{
	protected $saldo = 0;
	protected $titular;
	protected $nroConta;

	abstract function sacar($valor); 
	abstract function depositar($valor);
	abstract function verSaldo();
}

class ContaCorrente extends Conta
{
	private $taxa = 1;
	private $chequeEspecial = false;

	public function sacar($valor){
		$this->saldo -= $valor + $taxa; 
	}
	public function depositar($valor){
		$this->saldo += $valor;
	}

	public function verSaldo(){
		return $this->saldo;
	}
}

class ContaPoupanca extends Conta
{
	private $juros = 0.3;

	public function depositar($valor){
		$this->saldo += $valor + (($this->saldo * $this->juros)/100);
	}
	public function sacar($valor){
		$this->saldo -= $valor; 
	}
	public function verSaldo(){
		return $this->saldo;
	}
}

echo '<pre>';

$cp1 = new ContaPoupanca();
$cp1->depositar(100);
$cp1->depositar(100);
$cp1->depositar(100);

$cc1 = new ContaCorrente();
$cc1->depositar(100);
$cc1->depositar(100);
$cc1->depositar(100);

print_r($cp1);
print_r($cc1);