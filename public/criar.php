<?php
require_once '../S5_R1_AT1/repositories/CyberwareRepository.php';

if ($_POST) {
	$cliente = new Cyberware(
    	$_POST['nome'],
    	$_POST['categoria'],
    	$_POST['fabricante'],
		$_POST['preco'],
		$_POST['compatibilidade'],
	);

	(new ClienteRepository())->criar($cliente);
	header("Location: index.php");
}
?>

<form method="post">
	<input name="nome" placeholder="Nome" required><br>
	<input name="categoria" placeholder="categoria" required><br>
	<input name="fabricante" placeholder="fabricante" required><br>
	<input name="preco" placeholder="preco" required><br>
	<input name="compatibilidade" placeholder="compatibilidade" required><br>
	<button>Salvar</button>
</form>
