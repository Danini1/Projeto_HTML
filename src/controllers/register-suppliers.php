<?php
  require "../../php/conexao.php";

  if (isset($_POST["supplier-code"])) {
    $supplierCode = $_POST["supplier-code"];
    $supplierName = $_POST["supplier-name"];
    $supplierCNPJ = $_POST["supplier-cnpj"];
    $supplierPhone = $_POST["supplier-phone"];
    $supplierEmail = $_POST["supplier-email"];
    $supplierAddress = $_POST["supplier-address"];

    $isProductExists = mysqli_query($con, "SELECT * FROM suppliers WHERE code=$supplierCode");

    if($isProductExists -> num_rows > 0) {
      $sql = 
        "UPDATE suppliers
         SET
            name='$supplierName',
            email='$supplierEmail',
            phone=$supplierPhone,
            cnpj=$supplierCNPJ,
            address='$supplierAddress'
          WHERE code=$supplierCode;
        ";
    } else {
      $sql =
        "INSERT INTO suppliers (code, name, email, phone, cnpj, address)
          VALUES (
            $supplierCode, 
            '$supplierName',
            '$supplierEmail',
            $supplierPhone,
            $supplierCNPJ,
            '$supplierAddress'
          )
        ";
    }

    if (mysqli_query($con, $sql)) {
      echo "Fornercedor cadastrado com sucesso!";
      header("Location: ../pages/ListaFornecedores.php");
    } else {
      echo "Erro ao cadastrar fornecedor: " . mysqli_error($con);
    }
  }
?>