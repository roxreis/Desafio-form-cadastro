<?php include_once("variaveis.php")?>

<?php   
    
   

    // criando função
    function cadastrarProdutos($nomeVestuario, $precoVestuario, $descVestuario, $categVestuario, $quantVestuario, $imgVestuario){

        $produtosVestuario = "produtosVestuario.json";

        if (file_exists($produtosVestuario)) {
            
            // pegando dados do arquivo
            $arquivo = file_get_contents($produtosVestuario);
            // decodificando json
            $produtos = json_decode($arquivo, true);

            // adicionando produtos a array
            $produtos[] = ["nome"=>$nomeVestuario, "preco"=>$precoVestuario, "desc"=>$descVestuario, "categ"=>$categVestuario, "quant"=>$quantVestuario, "img"=>$imgVestuario];

            // tranformando em json
            $json = json_encode($produtos);
            
         

            // escrevendo no arquivo
            $deuCerto = file_put_contents($produtosVestuario, $json);
                if($deuCerto){
                    return "Produto cadastrado!";
                }else{
                    return "Produto não cadastrado!";
                }

        }else{
                $produtos = [];
                $produtos[] = ["nome"=>$nomeVestuario, "preco"=>$precoVestuario, "desc"=>$descVestuario, "categ"=>$categVestuario, "quant"=>$quantVestuario, "img"=>$imgVestuario];
                $json = json_encode($produtos);


                $deuCerto = file_put_contents($produtosVestuario, $json);
                    if($deuCerto) {
                        return "Produto cadastrado!";
                    }else{
                        return "Produto não cadastrado!";
                    }
                



        }






    }

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
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Preço Unitário</th>
                        <th scope="col">Quantidade</th>
                    </tr>
                </thead>
                                 
                <tbody> 
                    <?php foreach($produtos as $produto):?> 
                        <tr>
                            <td><?= $produto['nome']; ?></td>
                            <td><?= $produto['categ']; ?></td>
                            <td><?= 'R$'.$produto['preco']; ?></td>
                            <td><?= $produto['quant']; ?></td>
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
                    <select name="categ">
                    <?php foreach ($categVestuario as $categVestuario1): ?>
                        <option value="<?php echo $categVestuario1?>"> <?php echo $categVestuario1 ?> </option>
                    <?php endforeach; ?>
                   
                    </select>            
                </div>
                <div class="form-group">
                    <label for="desc">Descrição</label>
                    <input type="text" class= "form-control" name="desc" id="descProduto" rows="3">
                </div>
                <div class="form-group">
                    <label for="quant">Quantidade</label>
                    <input type="number" class="form-control" name="quant">             
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