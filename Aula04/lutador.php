<?php


class Lutador{
	
	//ATRIBUTOS
	private $nome;
	private $nacionalidade;
	private $idade, $altura, $peso;
	private $categoria, $vitorias, $derrotas, $empates;


	///METODOS
	public function apresentar(){

	}
	public function Status(){

	}
	public function ganharLuta(){

	}
	public function perderLuta(){

	}
	public function empatarLuta(){

	}

	//METODOS ESPECIAIS
	
	 function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
	 	$this->nome = $no;
	 	$this->nacionalidade = $na;
	 	$this->idade = $id;
	 	$this->altura = $al;
	 	$this->peso = $pe;
	 	$this->vitorias = $vi;
	 	$this->derrotas = $de;
	 	$this->empates = $em;
	

	 }
}



?>