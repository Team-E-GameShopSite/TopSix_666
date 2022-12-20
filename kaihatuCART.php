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
   if (isset($_SESSION['user_id']) == true) {
    require_once 'dao/DBManager.php';
  $dbmng = new DBManager();

  $sum_price = 0;
  $searchList = $dbmng->GetItemInfoForCartsByUserId($_SESSION['user_id']);
    echo "<div class='container'>";
    echo "<div class='row'>";
  if (!empty($searchList)) {
    foreach ($searchList as $row) {
      echo "<form action='RemoveCart.php' method='post'>";
      echo "<div class='col-sm-2'> <a href='kaihatuSYOUSAI.php?item_id=" . $row['item_id'] . "' style='text-decoration: none;color:black'><img src=" . $row['image_path'] . " class='img' width='65' height='65'></a></div>";
      echo "<div class='col-sm-3'>" . $row['item_name'] ."</div>";
      if($row['sale_flag']==1){
        echo "<div class='col-sm-2'>" . $row['sale_price']. "円</div>";
        $sum_price += $row['sale_price'] * $row['item_count'];
      }else{
        echo "<div class='col-sm-2'>" . $row['item_price']. "円</div>";
        $sum_price += $row['item_price'] * $row['item_count'];
      }
      echo "<div class='col-sm-3'>✖" . $row['item_count'] ."個</div>";
      echo "<input type='hidden' name='item_id' value=". $row['item_id'] .">";
      echo "<div class='col-sm-2'><input type='submit' class='btn btn-outline-danger btn-lg' value='キャンセル'></div>";
      echo "</form>";
      echo "<hr class='hr2'><br>";
      
    }
    echo "<form action='kaihatuKOUNYU.php' method='post'> 
            <input type='hidden' name='sum_price' value=". $sum_price .">
            <input type='submit' class='TOPNIMODORU btn btn-outline-primary  btn-lg' value='購入手続きへ→'>
          </form>";
  }else{
    echo "<div class='TOPNIMODORU'><p class='fs-1'>現在、カートには何も入っていません</p></div>";
    echo "</div>";
    echo "</div>";
  }
}else{
  echo "<div class='TOPNIMODORU'><p class='fs-2'>ログインしてご利用ください</p></div>";
}
  ?>
  </div>
  

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>
