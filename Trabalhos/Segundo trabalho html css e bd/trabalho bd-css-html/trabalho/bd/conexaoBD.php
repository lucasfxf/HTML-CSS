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

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'trabalho';

try {
    $dsn = "mysql:host=$servidor;dbname=$banco;charset=utf8";
    $conexao = new PDO($dsn, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados '$banco' estabelecida com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
