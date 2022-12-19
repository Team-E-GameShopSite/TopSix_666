<!DOCTYPE html>
<html lang="ja">

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
  <style type="text/css"></style>
  <link href="styleITIRAN.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <?php
  require 'Header.php';
  ?>

  <div class="itiran">
    <h5>セール品</h5>
    <?php
    require_once 'dao/DBManager.php';
    $dbmng = new DBManager();
    $searchArray = $dbmng->getItemTblAll();
    if (!empty($searchArray)) {
      foreach ($searchArray as $row) {
        if ($row['sale_flag'] == 1 && $row['sale_price'] != 0) {
          echo "<div class='col-sm-9'>
            <a href='kaihatuSYOUSAI_SALE.php?item_id=" . $row['item_id'] . " '>
              <div class='card text-white'>
              <img src=" . $row['image_path'] . " class='card-img' alt='...' height='80'>
              </div>
            </a>
            </div>";
        }
      }
    }
    ?>


    <h5>人気商品</h5>
    <div class="col-sm-9">
      <a href="kaihatuSYOUSAI.php?item_id=4">
        <div class="card  text-white">
          <img src="img/soft/spra/spra.jpg" class="card-img" alt="..." height="100">
        </div>
    </div>
    </a>
    <div class="col-sm-9">
      <a href="kaihatuSYOUSAI.php?item_id=2">
        <div class="card  text-white">
          <img src="img/soft/pokemon/pokemon(2).jpg" class="card-img" alt="..." height="100">
        </div>
    </div>
    </a>
    <div class="col-sm-9">
      <a href="kaihatuSYOUSAI.php?item_id=28">
        <div class="card  text-white">
          <img src="img/otherproduct/procon/procon.jpg" class="card-img" alt="..." height="100">
        </div>
    </div>
    </a>
  </div>

  <div class="sort">
    <h6>並び替え</h6>
  </div>
  <div class="secondsort">
    <button type="button" class="btn btn-primary btn-sm" name="SortDESC">高い順</button>
    <button type="button" class="btn btn-primary btn-sm" name="SortASC">安い順</button>
    <button type="button" class="btn btn-primary btn-sm" name="SortNew">新着順</button>
  </div>


  
  <h1>
    <?php
    require_once 'dao/DBManager.php';
    $dbmng = new DBManager();
 if(isset($_GET['genre_id'])){
    $genre = $dbmng->GetGenretoGenreID($_GET['genre_id']);

    if (!empty($genre)) {
      foreach ($genre as $row) {
        echo $row['genre'];
      }
    }
  }else{
    echo '検索結果';
  }
    ?>
  </h1>

  <div class="container">
    <?php
    require_once 'dao/DBManager.php';
    $dbmng = new DBManager();

    $flag = 1;

    if (isset($_POST['SortDESC'])) {

      $searchArray = $dbmng->GetItemToGenreIDDESC($_GET['genre_id']);
    } else if (isset($_POST['SortASC'])) {

      $searchArray = $dbmng->GetItemToGenreIDASC($_GET['genre_id']);
    } else if (isset($_POST['SortNew'])) {

      $searchArray = $dbmng->GetItemToGenreIDNew($_GET['genre_id']);
    } else {

      $searchArray = $dbmng->GetItemToGenreID($_GET['genre_id']);
    }

    if (!empty($searchArray)) {
      foreach ($searchArray as $row) {
        if ($flag == 1) {
          echo "<div class='row mt-5 gy-3'>";
        }

        echo "
              <div class='col-md-2'>
                <div class='card'>
                  <a href='kaihatuSYOUSAI.php?item_id=" . $row['item_id'] . "' style='text-decoration: none;color:black'>
                    <img src=" . $row['image_path'] . " class='card-img' alt='...' weight='170' height='170'>
                    <div class='card-body'>
                      <h5 class='card-title'>" . $row['item_name'] . "</h5>
                      <h5 class='price'>" . $row['item_price'] . "円</h5>";

        if ($flag == 0) {
          echo "</div>";
        }
        echo "</a>
            </div>
          </div>";
        if ($flag == 1) {
          echo "</div>";
          $flag = 0;
        }
      }
    }
    ?>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
