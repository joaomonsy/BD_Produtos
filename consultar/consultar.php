
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>consultar</title>
</head>
<body>
    
<form name="cliente" method = "POST" action = "">
    <div class="main-prod">
        <div class="left-prod">
            <h1>Consultar Produtos</h1>
            <?php
                    extract ($_POST, EXTR_OVERWRITE);
                    if (isset($btnenviar))
                    {
                    include_once '../Produto.php';
                    $p= new Produto();
                    $p->setNome($txtNome . '%');
                    $pro_bd=$p->consultar();
                        foreach ($pro_bd as $pro_mostrar) 
                        {
                            ?> <br>
                            <?php echo '<div class="tabela">'; ?>
                            <b> <?php echo "ID: " ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "Nome: " ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "Estoque: " ?></b><br>
                            <b> <?php echo $pro_mostrar[0] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pro_mostrar[1] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pro_mostrar[2]; ?></b>
                            <?php echo '</div>'; ?>
                            <?php
                        }
                    }
                ?>
        </div>
        <div class="right-prod">
            <div class="card-prod">
                <div class="textfield">
                    <label for="produto">Nome:</label>
                    <input type="text" name="txtNome" placeholder="Digite o Nome do produto que será consultado">
                </div>
                <input class="btnenviar" name="btnenviar" type="submit" value="Consultar">
                <input class="btnenviar" name="btnLimpar" type="reset" value="Limpar">       
                <a href="../menu.html" class="btn-voltar">Voltar</a>    
                
            </div>
        </div>
    </div>

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>