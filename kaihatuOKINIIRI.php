<!DOCTYPE html>
<html lang="ja">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
<style type="text/css"></style>
<link href="styleOKINIIRI.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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

  <p class="fs-1">お気に入り<i class="bi bi-star"></i></p>
  <div class="TOPNIMODORU">
  <?php
$pdo = new PDO('mysql:host=localhost;dbname=webdb;charset=utf8','webuser','abccsd2');

$sql="SELECT * FROM tweet_tbl";
$selectData =$pdo->query($sql);

foreach($selectData as $row){
    echo "<h1>".$row['tweat']."<br></h1>";
    echo"<h3>-------------------------------<br></h3>";
}
?>
  <a href="kaihatuTOP.php"  class="TOPNIMODORU"><button class="btn btn-outline-primary  btn-lg"   type="button">TOPに戻る→</button></a>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>