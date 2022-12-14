<!DOCTYPE html>
<html>

<head>
  <meta content="text/html; ;charset=utf-8" http-equiv="Content-Type">
  <title></title>
  <style>
  </style>
  <script type="text/javascript">
  </script>
  <link href="styleLOGIN.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

  <?php

  if (isset($_SESSION['user_name']) == true) {
    header('Location: kaihatuMYPAGE.php');
  }
  ?>

  <?php
  require 'Header.php';
  ?>

  <form action="logincheck.php" method="post" autocomplete="off">
    <div id="maindiv" class="container">
      <div class="row mt-5">
        <div class="offset-md-3 col-md-6">
          <h1 class="text-center mb-5">ログイン</h1>
          <p class="fs-3">会員登録がお済みのお客様</p>
          <label for="lastname">メールアドレス</label>
          <div class="row">
            <div class="col-md-12">
              <div class="form-floating">
                <input type="text" class="form-control" id="usermail" name="mail" placeholder="abc@abc.com" autocomplete="off">
              </div>
            </div>
          </div>
          <label for="lastname">パスワード</label>
          <div class="row">
            <div class="col-md-12 mt-2">
              <div class="form-floating">
                <input type="password" class="form-control" id="pass" name="pass" placeholder="abc@abc.com" autocomplete="off">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 mt-1 mb-1 alert-danger text-center" id="errorMsg">
            </div>
          </div>



          <div class="row">
            <div class="col-md-12 mt-3">
              <div class="d-grid gap-2">
                <input type="submit" class="btn btn-outline-primary" id="login" value="ログイン">
              </div>
            </div>
          </div>
        </div>
      </div>
  </form>

  <div class="owasure">
    <button class="btn btn-outline-dark  me-2 btn-sm" type="button">パスワードをお忘れですか？</button>
  </div>

  <div class="sinki">
    <a href="kaihatuTOUROKU.php" class="TOPNIMODORU"><button class="btn btn-outline-dark  me-2 btn-lg" type="button"> 新規会員登録</button></a>
  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <!-- エラー処理 -->
  <script language="javascript" type="text/javascript">
    document.getElementById("login").onclick = function() {
      const usermail = document.getElementById("usermail").value;
      const pass = document.getElementById("pass").value;
      var flag = 0;
      if (usermail.length == 0) {
        flag = 1;
      }
      if (pass.length == 0) {
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
