<?php 

    include_once('config/conexao.php');

    $db = conectarBanco();

    $idProduto = $_POST['id'];
    $nomeProduto = $_POST['nome'];
    $categVestuarios = $_POST['categoria'];
    $descricaoProduto = $_POST['descricao'];
    $quantProduto = $_POST['quantidade'];
    $precoProduto = $_POST['preco'];
    $imgProduto = $_POST['img'];
  
    $query = $db->prepare('INSERT INTO Produtos (nome, categoria, descricao, quantidade, preco)
    values (:nome,:categoria,:descricao,:quantidade,:preco)');
  
    $resultado = $query ->execute([
          "nome" => $nomeProduto, 
          "categoria" => $categVestuarios, 
          "descricao" => $descricaoProduto,
          "quantidade" => $quantProduto,
          "preco" => $precoProduto ]);
  
    var_dump($resultado);
    
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>pagina cadastro</title>
  </head>
  <body>
      
  </body>
  </html>












?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>