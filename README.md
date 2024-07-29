# CadEcomerce
Este projeto é uma aplicação web simples que permite o gerenciamento de um carrinho de compras, cadastro de categorias, marcas e produtos. Foi desenvolvido utilizando HTML, CSS, JavaScript e PHP com MySQL para a manipulação de dados.

# Estrutura do Projeto
A estrutura do projeto é a seguinte:

index.php: Página inicial que pode servir como a entrada para outras funcionalidades.
carrinho.php: Página que exibe o carrinho de compras e produtos disponíveis.  

produtos.php: Página que lista produtos e permite adicionar ao carrinho.  

cadastro-categorias.php: Página para cadastro de categorias de produtos.  

cadastro-marcas.php: Página para cadastro de marcas de produtos.  

cadastro-produtos.php: Página para cadastro de produtos.  

resumo-pedido.php: Página que mostra o resumo do pedido realizado.  

controller/
conexao.php: Arquivo responsável pela conexão com o banco de dados.    

carrinho-busca.php: Script para buscar e exibir produtos no carrinho.  

produtos-busca.php: Script para buscar e exibir produtos.  

produtos-resumo.php: Script para mostrar o resumo dos pedidos.  

css/
style.css: Folha de estilo para a aplicação.  

js/
jquery-2.1.4.min.js: Biblioteca jQuery.  

script.js: Script JavaScript personalizado.  

# Pré-requisitos
Antes de começar, certifique-se de ter o seguinte instalado:  
1. PHP  
2. MySQL  
3. Um servidor local como XAMPP ou WampServer  

# Configuração do Banco de Dados
1. Crie um banco de dados MySQL e importe o esquema apropriado para criar as tabelas necessárias (categoria, marca, produtos, etc.).  

2. Atualize o arquivo controller/conexao.php com suas credenciais de banco de dados.
Como Executar
Clone o repositório para seu ambiente local.  

3. Coloque os arquivos na pasta do seu servidor local (por exemplo, na pasta htdocs se estiver usando XAMPP).  

4. Acesse a aplicação através do seu navegador, apontando para http://localhost/index.php.  

# Funcionalidades
Cadastro de Categorias: Permite adicionar novas categorias ao banco de dados.  

Cadastro de Marcas: Permite adicionar novas marcas ao banco de dados.  

Cadastro de Produtos: Permite adicionar novos produtos, associando-os a categorias e marcas existentes.  

Carrinho de Compras: Permite visualizar e adicionar produtos ao carrinho.  

Resumo do Pedido: Exibe um resumo do pedido feito.  

# Referências

- [Documentação oficial do PHP: `mysqli_query()`](https://www.php.net/manual/pt_BR/mysqli.query.php)
- [Documentação oficial do PHP: `mysqli_affected_rows()`](https://www.php.net/manual/pt_BR/mysqli.affected-rows.php)
- [Documentação oficial do PHP: `mysqli_fetch_assoc()`](https://www.php.net/manual/pt_BR/mysqli-result.fetch-assoc.php)
