<?php
require_once '../S5_R1_AT1/repositories/CyberwareRepository.php';

(new ClienteRepository())->excluir($_GET['id']);
header("Location: index.php");
?>
