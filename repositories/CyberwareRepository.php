<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Cliente.php';
require_once __DIR__ . '/../interfaces/RepositoryInterface.php';

class ClienteRepository implements RepositoryInterface {

	private $conn;

	public function __construct() {
    	$this->conn = Database::conectar();
	}

	public function criar($cliente) {
    	$sql = "INSERT INTO cyberware (nome, categoria, fabricante, preco, compatibilidade) VALUES (:n, :cat, :f, :p, :com)";
    	$stmt = $this->conn->prepare($sql);
    	$stmt->execute([
        	':n' => $cliente->getNome(),
        	':cat' => $cliente->getCategoria(),
			':f' => $cliente->getFabricante(),
			':p' => $cliente-> getPreco(),
			':com' => $cliente->getCompatibilidade(),
    	]);
	}

    

	public function cyberware() {
    	$stmt = $this->conn->query("SELECT * FROM cyberware ORDER BY id");
    	return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function buscarPorId($id) {
    	$stmt = $this->conn->prepare("SELECT * FROM cyberware WHERE id = :id");
    	$stmt->execute([':id' => $id]);
    	return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	
public function atualizar($id, $cliente) {
    $sql = "UPDATE cyberware
            SET nome = :n,
                categoria = :cat,
                fabricante = :f,
                preco = :p,
                compatibilidade = :com
            WHERE id = :id";

    $stmt = $this->conn->prepare($sql);

    $stmt->execute([
        ':n' => $cliente->getNome(),
        ':cat' => $cliente->getCategoria(),
        ':f' => $cliente->getFabricante(),
        ':p' => $cliente->getPreco(),
        ':com' => $cliente->getCompatibilidade(),
        ':id' => $id
    ]);
}


	public function excluir($id) {
    	$stmt = $this->conn->prepare("DELETE FROM cyberware WHERE id = :id");
    	$stmt->execute([':id' => $id]);
	}

	
	}



?>
