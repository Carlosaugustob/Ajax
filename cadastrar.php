<?php

//Incluir o arquivo de conexao
include("conexao.php");

//Obtendo valores
$curso = $_POST["curso"];
$valor = $_POST["valor"];

//SQL
$sql = "INSERT INTO cursos VALUE (null,'$curso',$valor)";


//Inserir dados
mysqli_query($conexao,$sql);



?>