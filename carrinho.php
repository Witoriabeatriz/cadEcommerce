<!DOCTYPE html>
<html>
  <!-- A seção <head> contém metadados sobre o documento e links para recursos externos -->
  <head>
    <!-- Define a codificação de caracteres como UTF-8, que suporta a maioria dos caracteres em todos os idiomas -->
    <meta charset="utf-8">
    <!-- Define o título da página que aparecerá na aba do navegador -->
    <title>Carrinho</title>
    <!-- Link para um arquivo CSS externo para aplicar estilos à página -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <!-- Inclusão da biblioteca jQuery -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- Inclusão de um arquivo JavaScript personalizado -->
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <!-- Cabeçalho da página -->
    <header>
      <div class="center">
        <!-- Título principal da página -->
        <h1>Programação Web II - Carrinho</h1>
        <!-- Link para a página inicial -->
        <a href="index.php">Inicial</a>
      </div>
    </header>
    <!-- Seção principal que exibirá os produtos -->
    <section id="produtos">
        <div class="center">
          <!-- Inclusão de um arquivo PHP que provavelmente busca e exibe produtos no carrinho -->
          <?php require_once('controller/carrinho-busca.php'); ?>
        </div>
    </section>
  </body>
</html>
