<?php
include "connect.php";
$id =$_POST['id'];
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$genero=$_POST['genero'];
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

$connect->query("UPDATE tbfuncionario SET Fun_Nome = '$nome', Fun_CPF = '$cpf', Fun_Email = '$email', Fun_Genero = '$genero', Fun_DDD = '$ddd', Fun_Telefone = '$numero', Fun_Senha = '$senha', Fun_Idade = '$idade', Fun_Avatar = '$fotobd' WHERE Id_funcionario ='$id' ");


header("Location: ListarFunc.php");

?>