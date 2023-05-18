<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    foreach ($_REQUEST as $campo => $valor) {
        if($valor > 0 ){
            $cod_produto = substr($campo,7,strlen($campo)-7);
            $sql = "INSERT INTO `tb_insumo`(`cod_produto`, `cod_receita`, `ins_quantidade`) VALUES ('$cod_produto','[value-2]','$valor')";
            echo $sql . "<br />";
        }
    }
    ?>
</body>
</html>