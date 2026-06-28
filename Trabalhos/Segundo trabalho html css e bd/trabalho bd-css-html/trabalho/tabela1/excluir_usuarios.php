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
	if (isset($_GET['id_usuarios'])) {
		$id = $_GET['id_usuarios'];

		$stmt = $conexao->prepare("DELETE FROM usuarios WHERE id_usuarios = :id_usuarios");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);

		if ($stmt->execute()) {
			header("Location: consulta_usuarios.php"); 
			exit;
		} else {
			echo "Erro ao excluir o registro.";
		}
	} else {
		echo "ID não fornecido.";
	}
?>

