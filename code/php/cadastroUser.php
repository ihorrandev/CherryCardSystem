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
    <link rel="stylesheet" href="../css/style-cadastro.css">
    <link rel="stylesheet" href="../css/responsive-cadastro.css">
    <title>CherryCard | Cadastro User</title>
</head>

<body>

    <div class="body-main">

        <div class="div-right">
            <div class="div-itens-right">

                <div class="tittles-cadastro">
                    <h2 class="subtittle-base">Cadastro</h2>
                </div>
                
                <form action="salvar.php" method="POST" enctype="multipart/form-data">
                    <div class="div-inputs-cadastro">
                        <div class="div-container-inpt">
                            <input type="text" name="nome" id="inp-nome" placeholder="Digite seu Nome" class="inp-cadastro">
                            <input type="text" name="cpf" id="inp-cpf" placeholder="Digite seu CPF" class="inp-cadastro" required>
                            <input type="email" name="email" id="inp-email" placeholder="Digite seu Email" class="inp-cadastro" required>
                            

                            <div class="inp-cadastro-telefone">
                                <input type="text" name="ddd" id="inp-ddd" placeholder="DDD" maxlength="3" class="inp-cadastro">
                                <input type="text" name="numero" id="inp-numero" placeholder="Digite seu Telefone" maxlength="12" class="inp-cadastro">
                            </div>

                            <input type="date" name="idade" id="inp-idade" class="inp-cadastro">
                            <input type="file" name="foto" id="inp-foto" placeholder="Digite sua senha" class="inp-cadastro" required>
                            <input type="text" name="senha" id="inp-senha" placeholder="Digite sua senha" class="inp-cadastro" required>
                            
                            <button type="submit" class="btn-login" name="botao">próximo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="div-left">
            <img src="../img/img_Cadastro.png" alt="Imagem-Cadastro-Pessoal-cartão" class="img-cadastro">
        </div>

    </div>

</body>

</html> 