<?php
  session_start();
  require "../../php/conexao.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
      // Login bem-sucedido
      $_SESSION["username"] = $username;
      header("Location: ../pages/ListaFornecedores.php");
    } else {
      // Credenciais inválidas
      echo "Credenciais inválidas!";
    }
  }
?>