<?php
  require "../../php/conexao.php";

  function remove($code, $type) {
    $sql = "DELETE FROM $type WHERE code='$code'";
    if(mysqli_query($con, $sql)) {
        header("Location: ListaFornecedores.php");
    }
  }
  
  if(
        isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
    ) {
    if(isset($_POST['code']) && isset($_POST['type'])) {
      $code = $_POST['code'];
      $type = $_POST['type'];
      
      echo 'AH';
      $resultado = remove($code, $type);
    }
  }
?>