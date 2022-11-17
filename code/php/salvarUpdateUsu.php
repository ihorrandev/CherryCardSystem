<?php
include "connect.php";
$id =$_POST['id'];
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

$connect->query("UPDATE tbusuario SET Usu_Nome = '$nome', Usu_CPF = '$cpf', Usu_Email = '$email', Usu_DDD = '$ddd', Usu_Telefone = '$numero', Usu_Idade = '$idade', Usu_Senha = '$senha', Usu_Avatar = '$fotobd' WHERE Id_Usuario ='$id' ");

header("Location: ListarUsu.php");

?>