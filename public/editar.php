<?php
require_once '../S5_R1_AT1/repositories/CyberwareRepository.php';

$repo = new ClienteRepository();

if ($_POST) {
	$cliente = new Cyberware(
    	$_POST['nome'],
    	$_POST['categoria'],
		$_POST['fabricante'],
		$_POST['preco'],
		$_POST['compatibilidade'],
	);

	$repo->atualizar($_POST['id'], $cliente);
	header("Location: index.php");
}

$cliente = $repo->buscarPorId($_GET['id']);
?>

<form method="post">
	<input type="hidden" name="id" value="<?= $cliente['id'] ?>">
	<input name="nome" value="<?= $cliente['nome'] ?>"><br>
	<input name="categoria" value="<?= $cliente['categoria'] ?>"><br>
	<input name="fabricante" value="<?= $cliente['fabricante'] ?>"><br>
	<input name="preco" value="<?= $cliente['preco'] ?>"><br>
	<input name="compatibilidade" value="<?= $cliente['compatibilidade'] ?>"><br>

	<button>Atualizar</button>
</form>
