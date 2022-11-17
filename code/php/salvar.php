<?php
include "connect.php";
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$ddd=$_POST['ddd'];
$numero=$_POST['numero'];
$idade=$_POST['idade'];
$senha=$_POST['senha'];
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


$connect->query("INSERT INTO tbusuario (Usu_Nome, Usu_CPF, Usu_Email, Usu_DDD, Usu_Telefone, Usu_Idade, Usu_Senha, Usu_Avatar) 
VALUES('$nome','$cpf','$email','$ddd','$numero','$idade','$senha','$fotobd')");
    header("Location: cadastroCheck.php");
?>