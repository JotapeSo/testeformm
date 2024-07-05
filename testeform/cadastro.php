<?php

include("./conexao.php");

$nome_comp = $_POST["nome_comp"];
$idade = $_POST["idade"];
$profissao = $_POST["profissao"];

echo $nome_comp;
echo $idade;
echo $profissao;

//COMANDO SQL PARA INSERÇÃO NO BANCO DE DADOS MYSQL (C DO CRUD)
$sql = "INSERT INTO testeform.tb_pessoa (NOME_COMP, IDADE, PROFISSAO) VALUES ('$nome_comp', $idade, '$profissao')";

//ENVIA A QUERY PARA O MYSQL COM O COMANDO DE INSERÇÃO
if ($conn->query($sql) === TRUE) {
  echo "Registro salvo com sucesso<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error; 
}
?>
