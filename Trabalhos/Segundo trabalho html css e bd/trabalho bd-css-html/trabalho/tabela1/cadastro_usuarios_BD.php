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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
	$campo2  = $_POST['campo2'] ?? '';
	$campo3   = $_POST['campo3'] ?? '';
	$campo4  = $_POST['campo4'] ?? '';
	$campo5 = $_POST['campo5'] ?? '';
	try{
		$sql = "INSERT INTO usuarios (nome, email, senha, data_cadastro) VALUES (:nome, :email, :senha, :data_cadastro)";
		$stmt = $conexao->prepare($sql);
		$stmt->execute([
			':nome'  => $campo2,
			':email'   => $campo3,
			':senha'  => $campo4,
			':data_cadastro' => $campo5
		]);

		echo "<p>Registro cadastrado com sucesso!</p>";
	} catch (PDOException $e) {
    echo "Erro ao cadastrar: " . $e->getMessage();
	}
}

else {
	echo "<p>Requisição inválida.</p>";
} 	

?>

