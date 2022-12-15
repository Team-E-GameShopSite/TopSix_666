<!DOCTYPE html>
<html lang="ja">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
<style type="text/css"></style>
<link href="styleCART.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <?php
  require 'Header.php';
  ?>

  <p class="fs-1">ショッピングカート<i class="bi bi-cart"></i></p>
  <div class="TOPNIMODORU">
  <?php
  require_once 'dao/DBManager.php';
  $dbmng = new DBManager();

  $searchList = $dbmng->GetItemInfoForCartsByUserId($_SESSION['user_id']);
    echo "<div class='container'>";
    echo "<div class='row'>";
  if (!empty($searchList)) {
    foreach ($searchList as $row) {
      echo "<div class='col-sm-2'> <a href='kaihatuSYOUSAI.php?item_id=" . $row['item_id'] . "' style='text-decoration: none;color:black'><img src=" . $row['image_path'] . " class='img' width='65' height='65'></a></div>";
      echo "<div class='col-sm-3'>" . $row['item_name'] ."</div>";
      echo $row['item_price']. "円";
      echo "<div class='col-sm-2'>" . $row['item_price']. "円</div>";
    }
  }
    echo "</div>";
    echo "</div>";
  ?>
  <a href="kaihatuKOUNYU.php"  class="TOPNIMODORU"><button class="btn btn-outline-primary  btn-lg"   type="button">購入手続きへ→</button></a>
  </div>
  

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>
