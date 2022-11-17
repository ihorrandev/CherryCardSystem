<?php
include "connect.php";
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$genero=$_POST['genero'];
$ddd=$_POST['ddd'];
$numero=$_POST['numero'];
$senha=$_POST['senha'];
$idade=$_POST['idade'];
$uploaddir = "imgbd/";
$arquivo = $_FILES["foto"]["name"];
$separa = explode(".", $arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];
$foto = $cpf . '.' . $tipo;
$fotobd = $uploaddir.$foto;
if (move_uploaded_file($_FILES['foto']['tmp_name'],'../'. $uploaddir. $foto)) {
    $uploadfile = $uploaddir . $foto;
}else {
    echo"não foi possivel concluir o upload da img";
}

$connect->query("INSERT INTO tbfuncionario (Fun_Nome, Fun_CPF, Fun_Email, Fun_Genero, Fun_DDD, Fun_Telefone, Fun_Senha, Fun_Idade, Fun_Avatar) 
VALUES('$nome','$cpf','$email','$genero','$ddd','$numero','$senha','$idade','$fotobd')");
    header("Location: cadastroCheckFun.php");
?>