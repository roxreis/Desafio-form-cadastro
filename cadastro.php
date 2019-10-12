

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <main class="container d-flex p-4  justify-content-center">
        <section class="col-6 mr-5 h-50">
            <h1 class="text-center">Todos os Produtos</h1>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Preço</th>
                    </tr>
                </thead>
            </table>
        </section>
        <section class="col-6 p-5" style="background-color: #e2e2e2" class="rounded">
            <h2 class="mb-3 text-center">Cadastrar Produtos</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nomeProduto">Nome</label>
                    <input type="text" class="form-control" name="nomeProduto">                
                </div>
                <div class="form-group">
                    <label for="categProduto">Categoria</label>  
                    <select class="form-control" id="selecCategoria">
                    <option>Exemplo1</option>
                    <option>Exemplo2</option>
                    <option>Exemplo3</option>
                    <option>Exemplo4</option>
                    <option>Exemplo5</option>
                    </select>            
                </div>
                <div class="form-group">
                    <label for="descProduto">Descrição</label>
                    <textarea class="form-control" id="descProduto" rows="3"></textarea>         
                </div>
                <div class="form-group">
                    <label for="quantProduto">Quantidade</label>
                    <input type="number" class="form-control" name="quantProduto">             
                </div>
                <div class="form-group">
                    <label for="precoProduto">Preço</label>
                    <input type="number" class="form-control" name="precoProduto">               
                </div>
                <div class="form-group">
                    <label for="imgProduto">Foto do Produto</label>
                    <input type="file" class="form-control" name="imgProduto">
                </div> 
                       
            </form>

        
        
        </section>
    
    </main>




</body>
</html>

