<?php
include "connect.php";
$dados_tipo = $connect->query("SELECT * FROM tbusuario");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icon_CC.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style-base.css">
    <link rel="stylesheet" href="../css/style-admin.css">
    <link rel="stylesheet" href="../css/responsive-admin.css">
    <title>Admin Page | CherryCard</title>
</head>
<body>
    <div class="div-main">
        <div class="div-right">
            <h1 class="tittle-base">Cherryadmin</h1>
            <a href="ListarUsu.php" class="link"><button class="btn-base-func">Listar Usuarios da CherryCard</button></a>
            <a href="ListarFunc.php" class="link"><button class="btn-base-func">Listar Funcionários da CherryCard</button></a>
        </div>

        <div class="div-left">
            <img src="../img/img_Cherrycard.png" alt="Cartao-cherry-card" class="img-card">
            <a href="cadastroFun.php" class="link"><button class="btn-base-func">Cadastrar funcionário</button></a>
        </div>

    </div>
</body>
</html>