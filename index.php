<!DOCTYPE html>
<html>
  <head>
    <!-- Comentário: Material disponibilizado pelo professor Anderson Macedo -->
    <meta charset="utf-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <title>Produtos</title> <!-- Define o título da página que aparecerá na aba do navegador -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8"> <!-- Link para um arquivo CSS externo para aplicar estilos à página -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> <!-- Inclusão da biblioteca jQuery -->
    <script type="text/javascript" src="js/script.js"></script> <!-- Inclusão de um arquivo JavaScript personalizado -->
  </head>
  <body>
    <header>
      <div class="center">
        <h1 style="text-align: center">Programação Web II - Pedido de compra</h1> <!-- Título principal da página, centralizado -->
        <a href="carrinho.php" target="_blank">Carrinho</a> <!-- Link para a página do carrinho, abrindo em uma nova aba -->
      </div>
    </header>
    <section id="produtos">
        <div class="center">
          <?php require_once('controller/produtos-busca.php'); ?> <!-- Inclusão de um script PHP que provavelmente busca e exibe produtos -->
        </div>
    </section>
  </body>
</html>
