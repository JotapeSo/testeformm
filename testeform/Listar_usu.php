<?php

include("./conexao.php");

$consulta = "SELECT NOME_COMP, IDADE, PROFISSAO FROM testeform.tb_pessoa";
$result = $conn->query($consulta);

if($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
{

echo "<b> Nome completo:</b>" . $row["NOME_COMP"];
echo "<b> idade:</b>" .   $row ["IDADE"];
echo "<b> Profissao:</b>"  . $row ["PROFISSAO"]."<br><br> ";
}
}

?>