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
  <div class="header">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="kaihatuTOP.php">
          <img src="img/TopSix.png" alt="" width="85" height="70">
        </a>
        <form class="d-flex" action="kaihatuITIRAN.php">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary me-2" type="submit"><i class="bi bi-search"></i>Search</button>
          <a href="kaihatuCART.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-cart"></i>cart</button></a>
          <a href="kaihatuOKINIIRI.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-star"></i>favorite</button></a>
          <a href="kaihatuLOGIN.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-person-circle"></i>login</button></a>
        </form>
      </div>
    </nav>
  </div>

  <div class="itiran">
    <h5>セール品</h5>
    <div class="col-sm-9">
      <a href="kaihatuSYOUSAI_SALE.php">
        <div class="card text-white">
          <img src="img/game/nintendo.switch.jpg" class="card-img" alt="..." height="80">
        </div>
    </div>
    </a>
    <div class="col-sm-9">
      <a href="kaihatuSYOUSAI_SALE.php">
        <div class="card text-white">
          <img src="img/soft/pokemon/pokemon1.jpg" class="card-img" alt="..." height="80">
        </div>
    </div>
    </a>
    <div class="col-sm-9">
      <a href="kaihatuSYOUSAI_SALE.php">
        <div class="card text-white">
          <img src="img/game/ps5-buy-now-product-thumbnail-01-en-18mar22.webp" class="card-img" alt="..." height="80">
        </div>
    </div>
    </a>
    <h5>今月の人気商品</h5>
    <div class="col-sm-9">
      <a href="kaihatuSYOUSAI.php">
        <div class="card  text-white">
          <img src="img/soft/spra/spra.jpg" class="card-img" alt="..." height="100">
        </div>
    </div>
    </a>
    <div class="col-sm-9">
      <a href="kaihatuSYOUSAI.php">
        <div class="card  text-white">
          <img src="img/soft/pokemon/pokemon(2).jpg" class="card-img" alt="..." height="100">
        </div>
    </div>
    </a>
    <div class="col-sm-9">
      <a href="kaihatuSYOUSAI.php">
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
    <button type="button" class="btn btn-primary btn-sm">高い順</button>
    <button type="button" class="btn btn-primary btn-sm">安い順</button>
    <button type="button" class="btn btn-primary btn-sm">新着順</button>
  </div>


  <div class="btn-group me-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-primary">1</button>
    <button type="button" class="btn btn-primary">2</button>
    <button type="button" class="btn btn-primary">3</button>
    <button type="button" class="btn btn-primary">4</button>
    <button type="button" class="btn btn-primary">5</button>
    <button type="button" class="btn btn-primary">6</button>
    <button type="button" class="btn btn-primary">7</button>
    <button type="button" class="btn btn-primary">8</button>
  </div>
  <h1>ゲームソフト</h1>

  <div class="container">
    <div class="row mt-5 gy-3">
      <div class="col-md-2">
        <div class="card">
          <a class="cardimg" href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
            <img src="img/soft/pokemon/pokemon1.jpg" class="card-img " alt="..." height="170">
            <div class="card-body">
              <h5 class="card-title">ポケットモンスター バイオレット -Switch (【早期購入特典】プロモカード「ピカチュウ」 ×1 同梱)</h5>
              <h5 class="price">6578円</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
            <img src="img/soft/pokemon/pokemon(2).jpg" class="card-img" alt="..." height="170">
            <div class="card-body">
              <h5 class="card-title">ポケットモンスター スカーレット -Switch (【早期購入特典】プロモカード「ピカチュウ」 ×1 同梱)</h5>
              <h5 class="price">6578円</h5>
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="card">
        <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
          <img src="img/soft/smabra/smabra1.jpg" class="card-img" alt="..." height="170">
          <div class="card-body">
            <h5 class="card-title">大乱闘スマッシュブラザーズ SPECIAL - Switch
            </h5>
            <h5 class="price"><br><br>7920円</h5>
          </div>
        </a>
      </div>
    </div>


    <div class="col-md-2">
      <div class="card">
        <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
          <img src="img/soft/spra/spra.jpg" class="card-img" alt="..." height="170">
          <div class="card-body">
            <h5 class="card-title">スプラトゥーン3-Switch</h5>
            <h5 class="price"><br><br><br><br>6578円</h5>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-2">
      <div class="card">
        <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
          <img src="img/soft/yorha/YoRHa.jpg" class="card-img" alt="..." height="170">
          <div class="card-body">
            <h5 class="card-title">ニーア オートマタ ジ エンド オブ ヨルハ エディション
            </h5>
            <h5 class="price"><br><br><br>4555円</h5>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-2">
      <div class="card">
        <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
          <img src="img/soft/monhan/MONSTERHUNTER.jpg" class="card-img" alt="..." height="170">
          <div class="card-body">
            <h5 class="card-title">モンスターハンターライズ サンブレイク
            </h5>
            <h5 class="price"><br><br><br>8789円</h5>
          </div>
        </a>
      </div>
    </div>



  </div>
  </div>


  <div class="container">
    <div class="row mt-5 gy-3">

      <div class="col-md-2">
        <div class="card">
          <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
            <img src="img/soft/mario/Mario.jpg" class="card-img" alt="..." height="170">
            <div class="card-body">
              <h5 class="card-title">マリオカート8 デラックス - Switch
              </h5>
              <h5 class="price"><br><br><br>6570円</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
            <img src="img/soft/zerda/ZERDA.jpg" class="card-img" alt="..." height="170">
            <div class="card-body">
              <h5 class="card-title">ゼルダの伝説 ブレス オブ ザ ワイルド - Switch
              </h5>
              <h5 class="price"><br><br><br>7678円</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
            <img src="img/soft/monhanICEBORNE/monhan.jpg" class="card-img" alt="..." height="170">
            <div class="card-body">
              <h5 class="card-title">モンスターハンターワールド:アイスボーン マスターエディション - PS4
              </h5>
              <h5 class="price"><br><br>4390円</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
            <img src="img/soft/elden/ELDENRING.jpg" class="card-img " alt="..." height="170">
            <div class="card-body">
              <h5 class="card-title">PS5ゲームソフト ELDEN RING
              </h5>
              <h5 class="price"><br><br><br><br>8170円</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
            <img src="img/soft/bouei/bouei.jpg" class="card-img" alt="..." height="170">
            <div class="card-body">
              <h5 class="card-title">【PS5】地球防衛軍6
              </h5>
              <h5 class="price"><br><br><br><br>7079円</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-2">
        <div class="card">
          <a href="kaihatuSYOUSAI.php" style="text-decoration: none;color:black">
            <img src="img/soft/fifa/FIFA.jpg" class="card-img" alt="..." height="170">
            <div class="card-body">
              <h5 class="card-title">FIFA 23 - PS5
              </h5>
              <h5 class="price"><br><br><br><br><br>9700円</h5>
            </div>
          </a>
        </div>
      </div>


    </div>
  </div>

  <div class="next">
    <a href="kaihatuITIRAN.php" style="color:black">次へ>></a>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>