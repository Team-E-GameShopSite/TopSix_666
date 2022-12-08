<!DOCTYPE html>
<html lang="ja">

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
    <style type="text/css">
        .cart .bi-cart {
            font-size: 150px;
        }
        .favorite .bi-star{
            font-size: 150px;
        }
        .history .bi-book{
            font-size: 150px;
        }
        .logout .bi-box-arrow-right{
            font-size: 150px;
        }
    </style>
    <link href="styleMYPAGE.css" rel="stylesheet" type="text/css">
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
                    <a href="kaihatuCART.php"><button class="btn btn-outline-primary me-2" type="button"><i
                                class="bi bi-cart"></i>cart</button></a>
                    <a href="kaihatuOKINIIRI.php"><button class="btn btn-outline-primary me-2" type="button"><i
                                class="bi bi-star"></i>favorite</button></a>
                    <a href="kaihatuLOGIN.php"><button class="btn btn-outline-primary me-2" type="button"><i
                                class="bi bi-person-circle"></i>login</button></a>
                </form>
            </div>
        </nav>
    </div>
    <div class="cart">
    <a href="kaihatuCART.php" style="color:black">
        <p class="fs-1">CART</p>
        <i class="bi bi-cart"></i>
    </a>
    </div>
    <div class="favorite">
    <a href="kaihatuOKINIIRI.php" style="color:black">
        <p class="fs-1">FAVORITE</p>
        <i class="bi bi-star"></i>
    </a>
    </div>
    <div class="history">
    <a href="kaihatuRIREKI.php" style="color:black">
        <p class="fs-1">HISTORY</p>
        <i class="bi bi-book"></i>
    </a>
    </div>
    <div class="logout">
    <a href="kaihatuTOP.php" style="color:black">
        <p class="fs-1">LOG OUT</p>
        <i class="bi bi-box-arrow-right"></i>
    </a>
    </div>
    <div class="button">
    <a href="kaihatuTOP.php"  class="TOPNIMODORU"><button class="btn btn-outline-primary  me-2 btn-lg"   type="button">トップへ</button></a>
    <a href="kaihatuTOP.php#contactt"  class="TOPNIMODORU"><button class="btn btn-outline-primary  me-2 btn-lg"   type="button">お問い合わせ</button></a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</html>