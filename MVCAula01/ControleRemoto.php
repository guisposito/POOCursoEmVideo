<?php

class ControleRemoto{

	//Atributos
	private $volume;
	private $ligado;
	private $tocando;

	//METODOS ESPECIAIS


	 function __construct(){
		
		$this->volume = 50;
		$this->ligado = false;
		$this->tocando = false;

	}
	//GETters

	function getVolume(){

		return $this->volume;

	}
	function getLigado(){

		return $this->ligado;
	}
	function getTocando(){

		return $this->tocando;
	}

	//SEtters

	function setVolume($volume){

		$this->volume = $volume;

	}

	function setLigado($ligado){

		$this->ligado = $ligado;
	}

	function setTocando($tocando){

		$this->tocando = $tocando;
	}


	//METODOS NORMAIS

	public function ligar(){
		$this->setLigado(true);
		
	}

	public function desligar(){
		$this->setLigado(false);
	}

	public function abrirMenu(){	
		echo "está ligado?: ". ($this->getLigado()?"SIM":"NÃO");
		echo "<br>Está tocando?: ".($this->getTocando()?"SIM":"NÃO");

		echo "<br>Volume: ". $this->getVolume();

		for($i=0; $i <= $this->getVolume(); $i+=10){
			echo "|";
		}
		echo "<br><br>";
	}

	public function fecharMenu(){

	}

	public function maisVolume(){

	}

	public function menosVolume(){

	}

	public function ligarMudo(){

	}

	public function desligarMudo(){

	}

	public function play(){

	}

	public function pause(){

	}




}

?>
