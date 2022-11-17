<?php
include "connect.php";

$cpf= $_GET["cpf"];

mysqli_query($connect, "DELETE FROM tbfuncionario WHERE  Fun_CPF = '$cpf' ");


header("Location: ListarFunc.php");
?>