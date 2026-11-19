<?php

class Cyberware {
	private $nome;
	private $categoria;
	private $fabricante;
	private $preco;
	private $compatibilidade;

	public function __construct($nome, $categoria, $fabricante,$preco, $compatibilidade) {
    	$this->nome = $nome;
    	$this->categoria = $categoria;
		$this->fabricante = $fabricante;
		$this-> preco = $preco;
		$this-> compatibilidade = $compatibilidade;
	}

	public function getNome() { return $this->nome; }
	public function getCategoria() { return $this->categoria; }
	public function getFabricante() { return $this->fabricante; }
	public function getPreco() { return $this->preco; }
	public function getCompatibilidade() { return $this->compatibilidade; }


	

}
?>
