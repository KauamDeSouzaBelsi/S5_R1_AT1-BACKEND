<?php
require_once __DIR__ . '/../repositories/CyberwareRepository.php';

$repo = new ClienteRepository();
$clientes = $repo->cyberware();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cyberware</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        margin: 40px;
    }
    nav a{
        margin-right: 15px;
        text-decoration: none;
        font-weight: bold;
    }
    table{
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }
    th, td{
        border: 1px solid #ccc;
        padding: 8px;
    }
    th{
        background: #ccc;
    }
</style>

<body>
    <h1>Sistema de cadastro de clientes</h1>
    <nav>
        <a href="index.php">📝 listar clientes</a>
        <a href="criar.php">➕ Novo Cliente</a>
    </nav>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>categoria</th>
            <th>fabricante</th>
            <th>preco</th>
            <th>compatibilidade</th>
            <th>Ações</th>
        </tr>
        <?php foreach($clientes as $c):?>
            <tr>
                <td><?= $c ['id'] ?></td>
                <td><?= $c ['nome'] ?></td>
                <td><?= $c ['categoria'] ?></td>
                <td><?= $c ['fabricante'] ?></td>
                <td><?= $c ['preco'] ?></td>
                <td><?= $c ['compatibilidade'] ?></td>
                <td><a href="editar.php?id=<?= $c['id'] ?>">✏️Editar <a href="excluir.php?id=<?= $c['id'] ?>" onclick="return confirm('Deseja Excluir')">🗑️ excluir</a></a></td>
            </tr>
        <?php endforeach?>    
    </table>
</body>
</html>