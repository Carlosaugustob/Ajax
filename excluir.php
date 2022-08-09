<?php

//Conexao
include("conexao.php");

//Obter o codigo do curso
$codigo = $_GET["codigo"];

//SQL
$sql = "DELETE FROM cursos WHERE codigo = $codigo";

//Executar
mysqli_query($conexao, $sql);

?>