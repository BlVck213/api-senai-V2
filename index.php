<?php

include('./connection.php');
include('./model/modelPessoa.php');


$conn = new Connection();
$modelPessoa = new modelPessoa($conn->returnConnection());

$dados = $modelPessoa->findAll();

echo '<pre>';
var_dump($dados);
echo '</pre>';

?>