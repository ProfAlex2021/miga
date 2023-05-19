<?php
require("conectar.php");
$dados = $conexao->query("SELECT * FROM tb_produto")->fetchAll(PDO::FETCH_NAMED);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        window.onload = function() {
            window.print();
        }
    </script>
    <style type="text/css" media="print">
        @media print {
            @page {
                margin-top: 0;
                margin-bottom: 0;
            }

            body {
                padding-top: 72px;
                padding-bottom: 72px;
            }
        }
    </style></head>

<body>
    <form action="cad_insumo.php" method="post">

        <table>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
            </tr>
            <?php foreach ($dados as $linha) { ?>
                <tr>
                    <td>
                        <?php echo $linha['pro_nome']; ?>
                    </td>
                    <td>
                        <input type="number" min="0" max="10000" name="codigo_<?php echo $linha['cod_produto']; ?>" />
                    </td>
                </tr>
            <?php } ?>
        </table>
        <input type="submit" value="Cadastrar" />
    </form>
</body>

</html>