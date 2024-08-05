<?php
include('controller/conexao.php'); // Inclui o arquivo que contém a conexão com o banco de dados

$descricao = $_POST['descricao']; // Obtém o valor do campo 'descricao' do formulário via método POST

echo "<h3>Descrição: $descricao </h3></br>"; // Exibe a descrição fornecida pelo usuário

// Cria a query SQL para inserir uma nova categoria no banco de dados
$cad_categoria = "INSERT INTO categoria(DESCRICAO) VALUES ('$descricao')";

// Executa a query e verifica se a inserção foi bem-sucedida
if(mysqli_query($mysqli, $cad_categoria)){
    echo "<h1>Nova categoria cadastrada com sucesso</h1></br>"; // Mensagem de sucesso
}else{
    // Exibe mensagem de erro com a query e o erro retornado pelo banco de dados
    echo "Erro: " . $cad_categoria . "</br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli); // Fecha a conexão com o banco de dados

?>
