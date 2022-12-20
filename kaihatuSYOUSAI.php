<!DOCTYPE html>
<html lang="ja">

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
  <style type="text/css"></style>
  <link href="styleSYOUSAI.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
</head>

<body>
  <?php
  require 'Header.php';
  ?>

  <div class="container">
    <div class='row'>
      <div class='col-sm-6'>

        <?php
        
        require_once 'dao/DBManager.php';
        $dbmng = new DBManager();

        $searchItem = $dbmng->GetItemInfoToID($_GET['item_id']);

        if (!empty($searchItem)) {
          foreach ($searchItem as $row) {
            echo "<div class='cartcheck'>
          <div class='img'>
            <img src=" . $row['image_path'] .  " class='d-block' alt='...'  weight='100' height='400'>
          </div>
      
          <div class='otoiawase'>
            <a href='kaihatuTOP.php#contactt'  class='TOPNIMODORU'><button class='btn btn-outline-primary btn-lg'   type='button'>お問い合わせ</button></a>
          </div>
      
          <div class='okiniiri'>";
          if (isset($_SESSION['user_id']) == true) {  
            if($dbmng->HasFavoritesById($_SESSION['user_id'],$_GET['item_id'])){
              echo "<form action='AddFavorite.php' method='post'>
                      <input type='hidden' name='item_id' value=". $_GET['item_id'] ." >
                      <input type='submit' class='btn btn-outline-primary btn-lg ' value='お気に入り'>
                    </form>";
            }else{
              echo "<form action='RemoveFavoriteSYOUSAI.php' method='post'>
                      <input type='hidden' name='item_id' value=". $_GET['item_id'] ." >
                      <input type='submit'  id='cart' class='CARTIRERU  btn btn btn-outline-warning  btn-lg' value='お気に入り'>
                    </form>";
            }
          }else{
            echo "<form action='' method='post'>
                      <input type='hidden' name='item_id' value=". $_GET['item_id'] ." >
                      <input type='submit' class='btn btn-outline-primary btn-lg ' value='お気に入り'>
                    </form>";
          }
          echo "</div>
          </div>
      </div> 
      
      <div class='col-sm-6'>
       <div class='syohin'>
         <h1 class='title'>" . $row['item_name'] . "</h1>
         <h1 class='price'>" . $row['item_price'] . "円</h1>
         <form action='AddCart.php' method='post'>
         <input type='hidden' name='item_id' value=". $_GET['item_id'] ." >
         <select name='suuryo'>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
          <option value='4'>4</option>
          <option value='5'>5</option>
          <option value='6'>6</option>
          <option value='7'>7</option>
          <option value='8'>8</option>
          <option value='9'>9</option>
          <option value='10'>10</option>
         </select>";
         if (isset($_SESSION['user_id']) == true) { 
         if($dbmng->HasFavoritesById($_SESSION['user_id'],$_GET['item_id'])){
          echo "<input type='submit'  id='cart' class='CARTIRERU  btn btn-outline-primary btn-lg' value='カートに入れる'>
          </form>";
         }
        }
        echo "<input type='submit'  id='cart' class='CARTIRERU  btn btn-outline-primary btn-lg' value='カートに入れる'>
        <div class='setumei'> 
              <p>" . $row['item_info'] . "														
              </p>
        </div>";
          }
        } else {
          echo $_GET['item_id'];
        }
        ?>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
