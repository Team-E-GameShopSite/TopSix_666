<!DOCTYPE html>
<html lang="ja">

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
  <style type="text/css"></style>
  <link href="styleOKINIIRI.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <?php
  require 'Header.php';
  ?>

  <p class="fs-1">お気に入り<i class="bi bi-star"></i></p>
  <div class="TOPNIMODORU">
    <?php
    require_once 'dao/DBManager.php';
    $dbmng = new DBManager();

    $searchArray = $dbmng->getItemTblAll();
    foreach ($searchArray as $row) {
      echo "<img src=" . $row['image_path'] . " height='50'>";
      echo .$row['item_name'];
      echo .$row['item_price'];
      echo "<h3>-----------------------------------------------------------<br></h3>";
    }
    ?>
    <a href="kaihatuTOP.php" class="TOPNIMODORU"><button class="btn btn-outline-primary  btn-lg" type="button">TOPに戻る→</button></a>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>