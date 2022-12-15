<!DOCTYPE html>
<html lang="ja">

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
  <style type="text/css"></style>
  <link href="styleKOUNYU.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <?php
  require 'Header.php';
  ?>

    <h1 class="sum">合計金額<?php echo $_POST['sum_price'];  ?>円</h1>

  <div class="row">
    <div class="col-sm-6">
      <div class="okyakusamamei">
        <div class="name">
          <p class="fs-2">お客様名</p>
        </div>
      </div>
      <div class="form">
        <input type="email" class="form-control" id="customer" autocomplete="off">
      </div>
    </div>
    <div class="col-sm-6">
      <p class="fs-2">お支払方法</p>
      <div class="form2">
        <input class="form-control" list="datalistOptions" id="howbuy" placeholder="お支払方法">
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
        <input type="email" class="form-control" id="mail" autocomplete="off">
      </div>
    </div>
    <div class="col-sm-6">
      <p class="fs-2">電話番号</p>
      <div class="form2">
        <input type="email" class="form-control" id="phone" autocomplete="off">
      </div>
    </div>
  </div>


  <div class="yuubinotodoke">
    <p class="fs-2">郵便番号</p>
    <input type="email" class="form-control" id="post" autocomplete="off">
  </div>


  <div class="yuubinotodoke">
    <p class="fs-2">お届け先住所</p>
    <textarea class="form-control" id="jyusyo" rows="3" autocomplete="off" placeholder="(例)東京都○○市△△町○○マンション△△号室"></textarea>
  </div>

  <div class="row">
    <div class="col-md-12 mt-1 mb-1 alert-danger text-center" id="errorMsg">
    </div>
  </div>

  <div class="cart">
    <a href="kaihatuCART.php" class="TOPNIMODORU"><button class="btn btn-outline-primary  me-2 btn-lg" type="button">カートに戻る</button></a>
  </div>

  <form action="kaihatuKOUNYUKANRYOU.php" method="post" autocomplete="off">
    <div class="kounyu">
      <input type="submit" class=" TOPNIMODORU btn btn-outline-primary  me-2 btn-lg" id="buy" value="購入する">
    </div>
  </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <!-- エラー処理 -->
  <script language="javascript" type="text/javascript">
    document.getElementById("buy").onclick = function() {
      const customer = document.getElementById("customer").value;
      const howbuy = document.getElementById("howbuy").value;
      const mail = document.getElementById("mail").value;
      const phone = document.getElementById("phone").value;
      const post = document.getElementById("post").value;
      const jyusyo = document.getElementById("jyusyo").value;

      var flag = 0;
      if (customer.length == 0) {
        flag = 1;
      }
      if (howbuy.length == 0) {
        flag = 1;
      }
      if (mail.length == 0) {
        flag = 1;
      }
      if (phone.length == 0) {
        flag = 1;
      }
      if (post.length == 0) {
        flag = 1;
      }
      if (jyusyo.length == 0) {
        flag = 1;
      }

      if (flag == 1) {

        document.getElementById("errorMsg").textContent = "未記入の項目があります";
        return false;
      }

    };
  </script>
</body>

</html>
