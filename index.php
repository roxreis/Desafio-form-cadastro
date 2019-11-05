<?php   
    
    include_once("config/conexao.php");


    $db = conectarBanco();
    $query = $db->query('SELECT * FROM Produtos');

    $produtos = $query->fetchAll(PDO::FETCH_ASSOC);

    $categVestuarios = ["Camisetas" , "Calças" , "Bones", "Ôculos"];
  
   /*  var_dump($produtos); */
    
   

    if($_POST) {
        $nomeImg = $_FILES['img']['name'];
        $localTmp = $_FILES['img']['tmp_name'];
        $caminhoSalvo = 'img'.$nomeImg;
        $deucerto = move_uploaded_file($localTmp, $caminhoSalvo);
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro de Produto</title>
</head>
<body>


    <main class="container d-flex p-4  justify-content-center">
        <section class="col-6 mr-5 h-50">
            <h1 class="text-center">Todos os Produtos</h1>
            <table class="table" action="" method="post"  enctype ="multipart/form-data">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Preço Unitário</th>
                        <th scope="col">Quantidade</th>
                    </tr>
                </thead>
                                 
                <tbody> 
                    <?php foreach($produtos as $produto):?> 
                        <tr>
                            <td><?= $produto['id'] ?></td>
                            <td><?= $produto['nome']; ?></td>
                            <td><?= $produto['categoria']; ?></td>
                            <td><?= 'R$'." ".$produto['preco']; ?></td>
                            <td><?= $produto['quantidade']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                    
                   
            </table>
                
          
        </section>
        <section class="col-6 p-5" style="background-color: #e2e2e2" class="rounded">
            <h2 class="mb-3 text-center">Cadastrar Produtos</h2>
            <form   method="post"  enctype ="multipart/form-data">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome">                
                </div>
                <div class="form-group">
                    <label for="categ">Categoria</label>  
                    <select name="categoria">
                    <?php foreach ($categVestuarios as $categVestuario): ?>
                        <option value="<?php echo $categVestuario?>"> <?php echo $categVestuario ?> </option>
                    <?php endforeach; ?>
                   
                    </select>            
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class= "form-control" name="descricao" id="descProduto" rows="3">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade">             
                </div>
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="number" class="form-control" name="preco">               
                </div>
                <div class="form-group">
                    <label for="img">Foto do Produto</label>
                    <input type="file" class="form-control"
                     name="img">
                </div> 
                <div class= "d-flex justify-content-end">
                    <button type="submit"class= "btn btn-primary">Enviar</button>      
                </div>

           
            </form>

        
        
        </section>
    
    </main>




</body>
</html>