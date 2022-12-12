<!DOCTYPE html>
<html lang="ja">

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
  <style type="text/css"></style>
  <link href="styleTOP.css" rel="stylesheet" type="text/css">
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
          <a href="kaihatuLOGIN.php"><button class="btn btn-outline-primary me-2" type="button"><i class="bi bi-person-circle"></i>
           <?php session_start();
                $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418145-topsix666;charset=utf8', 'LAA1418145', 'topsix666');
                $sql=$pdo->prepare('select * from user_tbl  where email=? and pass=?');
                $sql->execute(["前田大然","MAEDADAIZEN"]);
                foreach($sql->fetchAll() as $row){
                  $_SESSION['customer']=[
                    'id'=>$row['user_id'],
                    'name'=>$row['user_name'],
                    'furi'=>$row['user_name_furi'],
                    'email'=>$row['email'],
                    'pass'=>$row['pass'],
                    'address'=>$row['address'],
                    'post'=>$row['post_no'],
                    'tell'=>$row['tell'],
                    'birthday'=>$row['birthday'],
                    'femail'=>$row['femail']];
                }
                if(isset($_SESSION['customer'])){
                  echo $_SESSION['customer']['name'];
                }else{
                  echo "false";
                }
           ?>
          </button></a>
        </form>
      </div>
    </nav>
  </div>

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" width="">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2500">
        <a href="kaihatuSYOUSAI.php?item_id=15"><img src="img/game/switch.webp" alt="任天堂switch" width="1200" height="630" class="d-block w-100" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item " data-bs-interval="2500">
        <a href="kaihatuSYOUSAI.php?item_id=4"><img src="img/soft/spra/sns.webp" alt="スプラトゥーン" width="1200" height="630" class="d-block w-100" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item " data-bs-interval="2500">
        <a href="kaihatuSYOUSAI.php?item_id=21"><img src="img/game/ps5-buy-now-product-thumbnail-01-en-18mar22.webp" alt="PS5" width="1200" height="630" class="d-block w-100" class="d-block w-100" alt="..."></a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <p class="fs-2">商品について</p>
  <p class="fs-3">About product</p>


  <div class="row mb-3 gr-3">
    <div class="col-sm-6">
      <div class="card bg-dark text-white">
        <a href="kaihatuITIRAN.php?genre_id=1" style="color:whitesmoke"><img src="img/soft/pokemon/mainvisual_02_RGB._TTW_.png" class="card-img" alt="..." height="353%">
          <div class="card-img-overlay">
            <h5 class="card-title">ゲームソフト</h5>
            <p class="card-text">様々なジャンルのゲームソフトを取り扱っています</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card bg-dark text-white">
        <a href="kaihatuITIRAN.php?genre_id=3" style="color:white"><img src="img/otherproduct/gamingdevice1.jpg" class="card-img" alt="..." height="353%">
          <div class="card-img-overlay">
            <h5 class="card-title">その他周辺機器</h5>
            <p class="card-text">様々な周辺機器を取り扱っています</p>
          </div>
        </a>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-6">
      <div class="card bg-dark text-white">
        <a href="kaihatuITIRAN.php?genre_id=2" style="color:black"><img src="img/game/PS5.jpg" class="card-img" alt="..." height="353%">
          <div class="card-img-overlay">
            <h5 class="card-title">ゲーム機</h5>
            <p class="card-text">様々なゲーム機を取り扱っています</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card bg-dark text-white">
        <a href="kaihatuITIRAN.php?genre_id=4" style="color:white"><img src="img/gamingPC/gtunenextgearcase .png" class="card-img" alt="..." height="353%">
          <div class="card-img-overlay">
            <h5 class="card-title">ゲーミングPC</h5>
            <p class="card-text">様々なゲーミングPCを取り扱っています</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  </a>

  <div id="contactt"></div>
  <p class="fs-2">お問い合わせ</p>
  <p class="fs-3">contact</p>

  <div class="row">
    <div class="col-sm-6">
      <p class="fs-1">なんでもお気軽に</p>
      <p class="fs-1">ご相談ください。</p>
    </div>
    <div class="col-sm-6">
      <p class="fs-1">TEL:0120-000-0000</p>
    </div>
  </div>

  <div class="media">
    <div class="row">
      <div class="col-sm-4">
      <a href="https://twitter.com/twitterjp?lang=ja" style='text-decoration: none;color:black'><p class="fs-3"><i class="bi bi-twitter"></i></p></a>
      </div>
      <div class="col-sm-4">
      <a href="https://www.facebook.com/"><p class="fs-3" style='text-decoration: none;color:black'><i class="bi bi-facebook"></i></p></a>
      </div>
      <div class="col-sm-4">
      <a href="https://business.instagram.com/getting-started?locale=ja_JP" style='text-decoration: none;color:black'><p class="fs-3"><i class="bi bi-instagram"></i></p></a>
      </div>
    </div>
  </div>

  <p class="fs-3">お買い物ガイド|店舗について|実店舗のご案内</p>

  <div class="photo">
    <img src="img/TopSix.png" alt="" width="130" height="130">
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
