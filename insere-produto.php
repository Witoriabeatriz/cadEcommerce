<?php
include_once('controller/conexao.php'); // Inclui o arquivo que contém a conexão com o banco de dados apenas uma vez

// Obtém os valores enviados via formulário utilizando o método POST e armazena nas respectivas variáveis
$categotia     = $_POST['categoria'];
$marca         = $_POST['marca'];
$nome_produto  = $_POST['nome'];
$descricao     = $_POST['descricao'];
$estoque       = $_POST['estoque'];
$preco         = $_POST['preco'];

// Cria a query SQL para inserir um novo produto no banco de dados com os valores obtidos do formulário
$grava_produto = "INSERT INTO produtos(IDCATEGORIA, IDMARCA, NOME, DESCRICAO, ESTOQUE, PRECO) VALUES ('$categotia', '$marca', '$nome_produto', '$descricao', '$estoque', '$preco')";

// Executa a query SQL e armazena o resultado
$result_gravacao = mysqli_query($mysqli, $grava_produto);

// Verifica se a inserção foi bem-sucedida verificando o número de linhas afetadas
if(mysqli_affected_rows($mysqli) != 0){
    // Se a inserção foi bem-sucedida, recarrega a página produtos.php e exibe um alerta de sucesso
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=produtos.php'>
        <script type=\"text/javascript\">
            alert('Produto cadastrado com sucesso');
        </script>
    ";
}else{
    // Se a inserção falhou, recarrega a página produtos.php e exibe um alerta de erro
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0; URL=produtos.php'>
    <script type=\"text/javascript\">
        alert('Produto não cadastrado');
    </script>
    ";
}
?>
