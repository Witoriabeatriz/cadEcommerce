<!DOCTYPE html>
<html lang="pt-br">
<!-- A seção <head> contém metadados sobre o documento e links para recursos externos -->
<head>
    <!-- Define a codificação de caracteres como UTF-8, que suporta a maioria dos caracteres em todos os idiomas -->
    <meta charset="UTF-8">
    <!-- Configura a visualização da página para dispositivos móveis, garantindo que a largura da página corresponda à largura da tela -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Define o título da página que aparecerá na aba do navegador -->
    <title>Cadastrar categorias</title>
    <!-- Link para um arquivo CSS externo para aplicar estilos à página -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <div class="center">
            <!-- Título principal da página -->
            <h1>Cadastro de categorias</h1>
            <!-- Link para a página inicial, abrindo na mesma aba -->
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <!-- Seção principal contendo o formulário de cadastro de categorias -->
    <section id="produtos">
        <!-- Formulário para inserir uma nova categoria -->
        <form action="insere-categoria.php" method="post">
           <!-- Rótulo para o campo de descrição -->
           <label for="">Descrição</label>
           <!-- Campo de entrada para a descrição da categoria -->
           <input type="text" name="descricao">
           <!-- Botão para submeter o formulário -->
           <input type="submit" value="Cadastrar">
        </form>
    </section>    
</body>
</html>
