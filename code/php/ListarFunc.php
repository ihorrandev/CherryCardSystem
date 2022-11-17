<?php
include "connect.php";
$dados_tipo = $connect->query("SELECT * FROM tbfuncionario");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icon_CC.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style-base.css">
    <link rel="stylesheet" href="../css/listar.css">
    <link rel="stylesheet" href="../css/responsive-listar.css">
    <title>Admin Page | CherryCard</title>
</head>
<body>
    <div class="div-main">
        <div class="div-right">
            <h1 class="tittle-base">Cherryadmin Listagem Funcionários</h1>
            <table class="table">
        <tr>
            <td>Nome</td>
            <td>CPF</td>
            <td>Email</td>
            <td>Gênero</td>
            <td>DDD</td>
            <td>Telefone</td>
            <td>Idade</td>
            <td>Senha</td>
            <td>Perfil</td>
            <td colspan="2">Ações</td>
        </tr>
        <tr>
            <?php
                while($user_data = mysqli_fetch_assoc($dados_tipo)){
                    
                    $nome = $user_data['Fun_Nome'];
                    $cpf = $user_data['Fun_CPF'];
                    $email = $user_data['Fun_Email'];
                    $genero = $user_data['Fun_Genero'];
                    $ddd = $user_data['Fun_DDD'];
                    $telefone = $user_data['Fun_Telefone'];
                    $idade = $user_data['Fun_Idade'];
                    $senha = $user_data['Fun_Senha'];
                    $foto = $user_data['Fun_Avatar'];



                    $codigo = <<<SCRIPT
                    <tr>
                    <td>$nome</td>
                    <td>$cpf</td>
                    <td>$email</td>
                    <td>$genero</td>
                    <td>$ddd</td>
                    <td>$telefone</td>
                    <td>$idade</td>
                    <td>$senha</td>
                    <td><img src= ../$foto height='60vh'></td>
                    <td><a href="alterarFun.php?cpf=$cpf">Alterar</a></td>
                    <td><a href="excluirFun.php?cpf=$cpf" onclick="return confirm('Quer Realmente Excluir')">Excluir</a></td>
                    </tr>
                    
                    SCRIPT;
                    echo "$codigo";

                        /* echo"<tr>";
                        echo"<td>".$user_data['Usu_Nome']."</td>";
                        echo"<td>".$user_data['Usu_CPF']."</td>";
                        echo"<td>".$user_data['Usu_Email']."</td>";
                        echo"<td>".$user_data['Usu_DDD']."</td>";
                        echo"<td>".$user_data['Usu_Telefone']."</td>";
                        echo"<td>".$user_data['Usu_Idade']."</td>";
                        echo"<td>".$user_data['Usu_Senha']."</td>";
                        echo"<td>"."<img src= ../".$user_data['Usu_Avatar']." height='60vh'>"."</td>";
                        echo"<td>"."<a href= 'alterarUsu.php'"."<button> Alterar"."</button>"."</td>";
                        echo"<td>"."<a href='excluirUsu.php'"."<button> Excluir"."</button>"."</td>";
                        echo"</tr>"; */
                }
            ?>
        </tr>
        </table>
        </div>
    </div>
</body>
</html>





