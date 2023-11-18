<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar</title>
</head>
<body>
    
<form name="cliente" method = "POST" action = "">
    <div class="main-prod">
        <div class="left-prod">
            <h1>Cadastrar Produtos</h1>
            <img src="img-prod2.svg" class="img" alt="img">
        </div>
        <div class="right-prod">
            <div class="card-prod">
                <div class="textfield">
                    <label for="produto">Produto</label>
                    <input type="text" name="usuario" placeholder="Digite o nome do produto">
                </div>
                <div class="textfield">
                    <label for="estoque">Estoque</label>
                    <input type="number" name="estoque" placeholder="Digite a quantidade em estoque">
                </div>
                <input class="btnenviar" name="btnenviar" type="submit" value="Cadastrar">
                <input class="btnenviar" name="btnenviar" type="reset" value="Limpar">       
                <a href="../menu.html" class="btn-voltar">Voltar</a>
                <?php
                extract($_POST, EXTR_OVERWRITE);
                if(isset($btnenviar))
                {
                    include_once '../Produto.php';
                    $pro= new Produto();
                    $pro->setNome($usuario);
                    $pro->setEstoque($estoque);
                    echo "<h3 class = 'mensagem'>" . $pro->salvar() . "</h3>";
                }
                ?>    
                
            </div>
        </div>
    </div>

</form>


</body>
</html>

