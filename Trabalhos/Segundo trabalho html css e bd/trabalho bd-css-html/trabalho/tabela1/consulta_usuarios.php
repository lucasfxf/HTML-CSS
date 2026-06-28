<!DOCTYPE html>
<html lang="pt-BR">
<head><meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="UTF-8">
  <title>Consulta da Tabela 1</title>
  <style>
	table,th,td{
		border: 1px solid black;
		border-collapse: collapse;
	}
  </style>
  
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php

/* >>> id_fallback_helper >>> */
// Safe extraction of an identifier from a DB row. Tries common names, then falls back to the first column.
if (isset($row) && is_array($row)) {
    $__id_fallback = null;
    if (isset(\$__id_fallback)) {
        $__id_fallback = \$__id_fallback;
    } elseif (isset(\$__id_fallback)) {
        $__id_fallback = \$__id_fallback;
    } elseif (isset(\$__id_fallback)) {
        $__id_fallback = \$__id_fallback;
    } else {
        // fallback to the first value in the row (if associative or numeric)
        foreach ($row as $k => $v) { $__id_fallback = $v; break; }
    }
    // ensure string safe for HTML output
    $__id_fallback = htmlspecialchars($__id_fallback ?? '');
}
/* <<< id_fallback_helper <<< */
 
	require_once "..\BD\conexaoBD.php";
	$stmt = $conexao->query("SELECT * FROM usuarios");
	$registros = $stmt->fetchAll();
?>

  <main>
    <h1>Lista de Registros</h1>
	<table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Data do Cadastro</th>
				<th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $r){ ?>
                <tr>
                    <td><?= htmlspecialchars($r['nome']) ?></td>
                    <td><?= htmlspecialchars($r['email']) ?></td>
                    <td><?= htmlspecialchars($r['senha']) ?></td>
					<td><?= htmlspecialchars($r['data_cadastro']) ?></td>
					<td><?= htmlspecialchars($r['id_usuarios']) ?></td>
                    <td>
                        <a href="editar_usuarios.php?id_usuarios=<?= $r['id_usuarios'] ?>">Editar</a>
                    </td>
                    <td>
                        <a href="excluir_usuarios.php?id_usuarios=<?= $r['id_usuarios'] ?>" onclick="return confirm('Tem certeza que deseja excluir este registro?');">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
  </main>

</body>
</html>

