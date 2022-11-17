<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icon_CC.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style-base.css">
    <link rel="stylesheet" href="../css/style-alterar.css">
    <link rel="stylesheet" href="../css/responsive-alterar.css">
    <link rel="stylesheet" href="../css/style-cadastro.css">
    <link rel="stylesheet" href="../css/responsive-cadastro.css">
    <title>Alterar Page | CherryCard</title>
</head>

<?php

include "connect.php";

$cpf = $_GET["cpf"];


$dados = $connect->query("SELECT * FROM tbusuario WHERE  Usu_CPF = '$cpf' ");

while ($user_data = mysqli_fetch_array($dados)){
    $id = $user_data['Id_Usuario'];
    $nome = $user_data['Usu_Nome'];
    $cpf = $user_data['Usu_CPF'];
    $email = $user_data['Usu_Email'];
    $ddd = $user_data['Usu_DDD'];
    $telefone = $user_data['Usu_Telefone'];
    $idade = $user_data['Usu_Idade'];
    $senha = $user_data['Usu_Senha'];
    $foto = $user_data['Usu_Avatar'];
}

$form = <<<SCRIPT

<div class="body-main">

<div class="div-right">
    <div class="div-itens-right">

        <div class="tittles-cadastro">
            <h2 class="subtittle-base">Alterar Cadastro</h2>
        </div>
        
        <form action="salvarUpdateUsu.php" method="POST" enctype="multipart/form-data">
            <div class="div-inputs-cadastro">
                <div class="div-container-inpt">
                <input type="hidden" name="id" value="$id" id="inp-id" class="inp-cadastro">
                    <input type="text" name="nome" value="$nome" id="inp-nome" placeholder="Digite seu Nome" class="inp-cadastro">
                    <input type="text" name="cpf" value="$cpf" readonly id="inp-cpf" placeholder="Digite seu CPF" class="inp-cadastro" required>
                    <input type="email" name="email"  value="$email" id="inp-email" placeholder="Digite seu Email" class="inp-cadastro" required>
                    

                    <div class="inp-cadastro-telefone">
                        <input type="text" name="ddd" id="inp-ddd" value="$ddd"placeholder="DDD" maxlength="3" class="inp-cadastro">
                        <input type="text" name="numero" id="inp-numero" value="$telefone" placeholder="Digite seu Telefone" maxlength="12" class="inp-cadastro">
                    </div>

                    <input type="date" name="idade" id="inp-idade" value="$idade" class="inp-cadastro">
                    <input type="file" name="foto" id="inp-foto" value="" placeholder="Digite sua senha" class="inp-cadastro" required>
                    <input type="text" name="senha" id="inp-senha"  value ="$senha" placeholder="Digite sua senha" class="inp-cadastro" required>
                    
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

SCRIPT;

echo"$form";
?>