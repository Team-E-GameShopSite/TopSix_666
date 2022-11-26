<!DOCTYPE html>
<html lang="ja">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
<style type="text/css"></style>
<link href="styleKOUNYU.css" rel="stylesheet" type="text/css">
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

<h1 class="sum">合計金額～円</h1>

<div class="row">
    <div class="col-sm-6">
      <div class="okyakusamamei">
      <div class="name">
      <p class="fs-2">お客様名</p>
      </div>
      </div>
      <div class="form">
      <input type="email" class="form-control" id="exampleFormControlInput1">
      </div>
    </div>
    <div class="col-sm-6">
      <p class="fs-2">お支払方法</p>
      <div class="form2">
      <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="お支払方法">
      </div>
      <datalist id="datalistOptions">
      
        <option value="コンビニ/銀行">
        <option value="クレジットカード">
        <option value="後払い">
        <option value="キャリア決済">
        <option value="スマホ決済サービス">
      </datalist>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="name">
      <p class="fs-2">メールアドレス</p>
      </div>
      <div class="form">
      <input type="email" class="form-control" id="exampleFormControlInput1" >
      </div>
    </div>
    <div class="col-sm-6">
      <p class="fs-2">電話番号</p>
      <div class="form2">
      <input type="email" class="form-control" id="exampleFormControlInput1">
      </div>
    </div>
    </div>


      <div class="yuubinotodoke">
      <p class="fs-2">郵便番号</p>
      <input type="email" class="form-control" id="exampleFormControlInput1">
      </div>


    <div class="yuubinotodoke">
      <p class="fs-2">お届け先住所</p>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="(例)東京都○○市△△町○○マンション△△号室"></textarea>
    </div>

  
        <div class="cart">
            <a href="kaihatuCART.php"  class="TOPNIMODORU"><button class="btn btn-outline-primary  me-2 btn-lg"   type="button">カートに戻る</button></a>
        </div>

        <div class="kounyu">
            <a href="kaihatuKOUNYUKANRYOU.php"  class="TOPNIMODORU"><button class="btn btn-outline-primary  me-2 btn-lg"   type="button">購入する</button></a>
        </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>