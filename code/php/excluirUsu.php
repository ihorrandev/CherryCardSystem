<?php
include "connect.php";

$cpf= $_GET["cpf"];

mysqli_query($connect, "DELETE FROM tbusuario WHERE  Usu_CPF = '$cpf' ");


header("Location: ListarUsu.php");
?>