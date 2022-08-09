<?php

//Conexao
include("conexao.php");

//SQL
$sql = "SELECT * FROM cursos";

//Executar  o comando
$executar = mysqli_query($conexao, $sql);

//Exibir dados
while($indice = mysqli_fetch_assoc($executar)){
    echo $indice["curso"];
}




?>