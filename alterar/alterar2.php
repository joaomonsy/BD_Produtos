<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>alterar</title>
</head>
<body>
    
<form name="cliente" method = "POST" action = "">
    <div class="main-prod">
        <div class="right-prod">
            <div class="card-prod">
            <?php
                $txtid = $_POST["txtid"];
                include_once '../produto.php';
                $p = new Produto();
                $p->setId($txtid);
                $pro_bd=$p->alterar();//chamada de método com retorno - o $p é o parâmetro enviado
            ?>

            <br><form action="" name="cliente2" method="POST">
                <?php
                foreach ($pro_bd as $pro_mostrar)
                {
                    ?>
                    <input type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0]?>'>
                    <b><?php echo "ID: " . $pro_mostrar[0];// como é matriz posição 0?> </b>
                    <br><br><b><?php echo "Nome:  " ; ?></b>
                    <input class="alterar" name="txtnome" type="text" size="25" value='<?php echo $pro_mostrar[1]?>'>
                    <br><br><b><?php echo "Estoque: " ; ?></b>
                    <input class="alterar" name="txtestoq" type="text" size="10" value='<?php echo $pro_mostrar[2]?>'>
                    <br><br><br>
                    <input class="btnenviar" name="btnenviar2" type="submit" value="Alterar">
                    <?php
                }
                ?>                          
            </form>
            <?php
            extract ($_POST, EXTR_OVERWRITE);
            if(isset($btnenviar2))
            {
            include_once '../Produto.php';
            $pro = new Produto();
            $pro->setNome($txtnome);
            $pro->setEstoque($txtestoq);
            $pro->setId($txtid);
            echo "<br><br><h3>". $pro->alterar2(). "</h3>";
            header("location:alterar.php");
            }
            ?>
            <br><br><br><br>
            <a href = "alterar.php" class="btn-voltar"> Voltar </a>
        </div>
        
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>