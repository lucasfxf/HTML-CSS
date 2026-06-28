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

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'trabalho';

try 
{
    $dsn = "mysql:host=$servidor;dbname=$banco;charset=utf8"; 
    $conexao = new PDO($dsn, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "
        CREATE TABLE IF NOT EXISTS usuarios (
              id INT AUTO_INCREMENT PRIMARY KEY,
              nome VARCHAR(100) NOT NULL,
              email VARCHAR(150) NOT NULL UNIQUE,
              senha VARCHAR(255) NOT NULL,
              data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        );
    ";
    $conexao->exec($sql);
    echo "Tabela 'usuarios' criada com sucesso (ou já existia).<br>";

    $sql = "
        CREATE TABLE IF NOT EXISTS tabela2 (
            id INT AUTO_INCREMENT PRIMARY KEY,
            campo2 VARCHAR(100) NOT NULL,
            campo3 VARCHAR(150) NOT NULL,
            campo4 VARCHAR(20),
            campo5 TEXT
        );
    ";
    $conexao->exec($sql);
    echo "Tabela 'tabela2' criada com sucesso (ou já existia).<br>";

} catch (PDOException $e) {
    echo "Erro ao criar a tabela: " . $e->getMessage();
}
?>

