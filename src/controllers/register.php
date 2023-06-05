<?php
  require "../../php/conexao.php";

  if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($con, $sql)) {
      echo "Usuário cadastrado com sucesso!";
      header("Location: ../pages/ListaFornecedores.php");
    } else {
      echo "Erro ao cadastrar usuário: " . mysqli_error($con);
    }
  }
?>