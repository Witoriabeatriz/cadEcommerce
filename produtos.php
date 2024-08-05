<?php
include_once('controller/conexao.php'); // Inclui o arquivo de conexão com o banco de dados apenas uma vez
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define a codificação de caracteres como UTF-8 -->
    <meta charset="UTF-8">
    <!-- Configura a visualização da página para dispositivos móveis, garantindo que a largura da página corresponda à largura da tela -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Define o título da página que aparecerá na aba do navegador -->
    <title>Cadastrar Produto</title>
    <!-- Link para um arquivo CSS externo para aplicar estilos à página -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <div class="center">
            <!-- Título principal da página -->
            <h1>Cadastro de Produtos</h1>
            <!-- Link para a página inicial, abrindo na mesma aba -->
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <!-- Seção principal contendo o formulário de cadastro de produtos -->
    <section id="produtos">
        <!-- Formulário para inserir um novo produto -->
        <form action="insere-produto.php" method="post">
            <!-- Campo de entrada para o nome do produto -->
            Nome: <input type="text" name="nome"><br>
            <!-- Campo de entrada para a descrição do produto -->
            Descrição: <input type="text" name="descricao"><br>
            <!-- Campo de entrada para o estoque do produto -->
            Estoque: <input type="number" name="estoque"><br>
            <!-- Campo de entrada para o preço do produto, com valor mínimo, máximo e incremento de centavos -->
            Preço: <input type="number" name="preco" min="0.00" max="100000.00" step="0.01"><br>
            <!-- Campo de seleção para a categoria do produto -->
            Categoria:
            <select name="categoria" id="">
                <option value="">Selecione</option>
                <?php
                    // Query para selecionar todas as categorias
                    $resultado_categoria = "SELECT * FROM categoria";
                    // Executa a query
                    $resultcategoria = mysqli_query($mysqli, $resultado_categoria);
                    // Loop para preencher o dropdown com as categorias
                    while($row_categorias = mysqli_fetch_assoc($resultcategoria)){?>
                    <option value="<?php echo $row_categorias['IDCATEGORIA'];?>">
                    <?php echo $row_categorias['DESCRICAO']; ?>
                </option>
                    <?php
                    }
                ?>
            </select><br>
            <!-- Campo de seleção para a marca do produto -->
            Marca:
            <select name="marca" id="">
                <option value="">Selecione</option>
                <?php
                    // Query para selecionar todas as marcas
                    $resultado_marca = "SELECT * FROM marca";
                    // Executa a query
                    $resultado_marca = mysqli_query($mysqli, $resultado_marca);
                    // Loop para preencher o dropdown com as marcas
                    while($row_marca = mysqli_fetch_assoc($resultado_marca)){?>
                    <option value="<?php echo $row_marca['IDMARCA'];?>">
                    <?php echo $row_marca['DESCRICAO']; ?>
                </option>
                    <?php
                    }
                ?>
            </select>
            <br><br>
            <!-- Botão para submeter o formulário -->
            <input type="submit" value="Cadastrar">
        </form>
    </section>    
</body>
</html>
