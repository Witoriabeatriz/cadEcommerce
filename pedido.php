<!DOCTYPE html>
<html>
  <head>
    <!-- Define a codificação de caracteres como UTF-8 -->
    <meta charset="utf-8">
    <!-- Define o título da página que aparecerá na aba do navegador -->
    <title>Resumo de Pedido</title>
    <!-- Link para um arquivo CSS externo para aplicar estilos à página -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <!-- Inclui a biblioteca jQuery, versão 2.1.4, para manipulação do DOM e outras funcionalidades JavaScript -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Inclui um arquivo JavaScript externo com funções específicas para esta página -->
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <!-- Cabeçalho da página -->
    <header>
      <div class="center">
        <!-- Título principal da página -->
        <h1>Programação Web II - Resumo do Pedido</h1>
        <!-- Link para a página inicial -->
        <a href="index.php">Inicial</a>
      </div>
    </header>
    <!-- Seção principal contendo o resumo dos produtos -->
    <section id="produtos">
        <div class="center">
          <div>
            <!-- Inclui e executa o script PHP que gera o resumo dos produtos -->
            <?php require_once('controller/produtos-resumo.php'); ?>
          </div>
        </div>
    </section>
  </body>
</html>
