<?php
  require "../../php/conexao.php";

  if (isset($_POST["product-code"])) {
    $productCode = $_POST["product-code"];
    $productName = $_POST["product-name"];
    $productDescription = $_POST["product-description"];
    $productInitialAmount = $_POST["product-initial-amount"];
    $productCurrentyAmount = $_POST["product-currenty-amount"];
    $productSupplierCode = $_POST["product-supplier-code"];
    $productBuyPrice = $_POST["product-buy-price"];
    $productSellPrice = $_POST["product-sell-price"];

    $isProductExists = mysqli_query($con, "SELECT * FROM products WHERE code=$productCode");

    if($isProductExists -> num_rows > 0) {
      $sql = 
        "UPDATE products
         SET
          name='$productName',
          description='$productDescription',
          initial_amount=$productInitialAmount,
          currenty_amount=$productCurrentyAmount,
          supplier_code=$productSupplierCode,
          buy_price=$productBuyPrice,
          sell_price='$productSellPrice'
        WHERE code=$productCode;
    ";
    } else {
      $sql = "INSERT INTO products (code, name, description, initial_amount, currenty_amount, supplier_code, buy_price, sell_price) 
            VALUES (
              $productCode,
              '$productName',
              '$productDescription',
              $productInitialAmount,
              $productCurrentyAmount,
              $productSupplierCode,
              $productBuyPrice,
              '$productSellPrice'
            )
    ";
    }

    if (mysqli_query($con, $sql)) {
      echo "Produto cadastrado com sucesso!";
      header("Location: ../pages/ListaProdutos.php");
    } else {
      echo "Erro ao cadastrar produto: " . mysqli_error($con);
    }
  }
?>