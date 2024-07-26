<h1> Dados apresentados do formulário </h1>

<?php

foreach ($resultado as $row){
    echo "id:".$row['id']. "<br>";
    echo "nome:".$row['nome']."<br>";
    echo "marca:".$row['marca']."<br>";
    echo "preco".$row['preco']."<br>";
    echo "descricao".$row['descricao']."<br>";
    
}
?>


?>

<h2> Dados inseridos com sucesso! </h2>
<br>
<a href = "http://localhost:8080" >   Clique aqui para visualizar todos os dados </a>
