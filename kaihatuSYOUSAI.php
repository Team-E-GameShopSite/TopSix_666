<!DOCTYPE html>
<html lang="ja">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
<style type="text/css"></style>
<link href="styleSYOUSAI.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
</head>

<body>
  <div class="header">
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
       <a class="navbar-brand" href="kaihatuTOP.php">
          <img src="img/TopSix.png" alt="" width="85" height="70">
       </a>
       <form class="d-flex" action="kaihatuITIRAN.php">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary me-2" type="submit"><i class="bi bi-search"></i>Search</button>
              <a  href="kaihatuCART.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-cart"></i>cart</button></a>
              <a  href="kaihatuOKINIIRI.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-star"></i>favorite</button></a>
              <a  href="kaihatuLOGIN.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-person-circle"></i>login</button></a>
            </form>
    </div>
    </nav>
  </div>


  <?php
      require_once 'dao/DBManager.php';
      $dbmng = new DBManager();
    
      $searchItem = $dbmng->GetItemInfoToID($_GET['item_id']);
    
      if(!empty($searchItem)){
        foreach($searchItem as $row){
          echo "<div class='cartcheck'>
          <div class='img'>
            <img src=".$row['image_path'].  " class='d-block' alt='...'  weight='100' height='400'>
          </div>
      
      
        <div class='row'>
          <div class='col-sm-6'>
            <a href='kaihatuTOP.php#contactt'  class='TOPNIMODORU'><button class='btn btn-outline-primary btn-lg'   type='button'>お問い合わせ</button></a>
          </div>
      
          <div class='col-sm-6'>
          <form action='kaihatuOKINIIRI.php' action='post'>
            <input type='submit'   class=' btn btn-outline-primary btn-lg ' value='お気に入り'>
          </form>
          </div>
        </div>
      </div> 
      
       <div class='syohin'>
         <h1 class='title'>".$row['item_name']."</h1>
         <h1 class='price'>".$row['item_price']."円</h1>
         <form action='kaihatuCART.php' method='post'>
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
          <option value=''>10</option>
         </select>
       <input type='submit'  id='cart' class='CARTIRERU  btn btn-outline-primary btn-lg' value='カートに入れる'>
      </form>
        <div class='setumei'> 
              <p>".$row['item_info']."														
              </p>
        </div>";
        }
      }else{
        echo $_GET['item_id'];
      }
      ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>
