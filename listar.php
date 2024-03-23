<?php
$nomearquivo = "clientes.txt";
$arquivo = fopen($nomearquivo, "r");
echo "<table border=1>";
echo "<tr>";
echo "<td><strong>Nome</strong></td>";
echo "<td><strong>E-mail</strong></td>";
echo "</tr>";
while(!feof($arquivo)){
    $linha = fgets($arquivo, 1000);
    if($linha !=""){
        $conteudo = explode(";",$linha);
        echo "<tr>";
        echo "<td>$conteudo[0]</td>";
        echo "<td>$conteudo[1]</td>";
        echo "</tr>";
    }
}
echo "</table>";

fclose($arquivo);
?>