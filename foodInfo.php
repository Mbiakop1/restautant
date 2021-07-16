<?php
include_once "header.php";
$connect = mysqli_connect("localhost", "root", "", "cart");
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM cart_items WHERE id='$id'");

 $row = mysqli_fetch_array($query);
 if($row != NULL){
     $name = $row['nom'];
     $price = $row['price'];
     $description = $row['descrire'];
     $pic = $row['photo'];
 }
 else {
     header("Location: 404.php");
 }
?>

<head>
    <title><?= $name . " a Lafourchette" ?></title>
    <style>
    body {
        background-color: #938f8f;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    img.card-img-top {
        height: 60vh;
        width: 70vw !important;
    }

    .cart.mb-3 {
        float: bottom;
        margin-bottom: 20px;
    }
    </style>
</head>

<br><br><br>
<div class="card mb-3">
    <img src="./assets/images/<?= $pic?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $name?></h5>
        <p class="card-text"><?= $description?></p>
        <p class="card-text"><small class="text-muted">Prix: <?= $price?></small></p>
    </div>
</div>
</body>

</html>