<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icon_CC.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style-base.css">
    <link rel="stylesheet" href="../css/style-check.css">
    <link rel="stylesheet" href="../css/responsive-verificationCheck.css">
    <title>CherryCard | Cadastro Incompleto! </title>
</head>
<body>

    <div class="body-main">

        <div class="div-right">
            <img src="../img/img_Error.png" alt="Simbolo-Verde-Check" class="img-Check">
        </div>

        <div class="div-left">
            <h1 class="tittle-base">OOPS!! cadastro incompleto</h1>
            <p class="subtittle">Por favor retorne a página anterior e reescreva os dados para completar seu cadastro.</p>
        </div>

    </div>

</body>
</html>

<?php
header("Refresh:3; url=cadastroUser.php");

?>