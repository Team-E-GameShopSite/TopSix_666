<!DOCTYPE html>
<html lang="ja">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
<style type="text/css"></style>
<link href="styleTOUROKU.css" rel="stylesheet" type="text/css">
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
  </body>
  <form method="post" action="TOUROKUkakunin.php" autocomplete="off">
  <p class="fs-1">会員登録</p>
    <div class="naiyou">
  <p class="fs-3">下記の内容をご入力の上、おすすめください</p>
  </div>
  <div class="name">
    <p class="fs-3">氏名</p>
  </div>
  <div class="text">
    <input type="text" size="100" maxlength="100"  placeholder="山田太郎" id="name" name="simei" autocomplete="off">
    <h3 id="name_chk" style="display: none; color: red;">名前が漢字になっていません</h3>
  </div>  
    <div class="name">
      <p class="fs-3">氏名（ふりがな）</p>
    </div>
  <div class="text">
    <input type="text" size="100" maxlength="200" placeholder="やまだたろう" id="name_huri" name="huri" autocomplete="off">
    <h3 id="name_huri_chk" style="display: none; color: red;">名前(ふりがな)がひらがなになっていません</h3>
  </div>
    <div class="name">
    <p class="fs-3">メールアドレス</p>
  </div>
  <div class="text">
  <input type="text"   size="100" maxlength="254" placeholder="aaaa@gmail.com" id="mail" name="meado"autocomplete="off">
  <h3 id="mail_chk" style="display: none; color: red;">メールアドレスが形式に沿っていません</h3>
  </div>
  <div class="name">
    <p class="fs-3">パスワード</p>
  </div>
  <div class="text">
  <input type="text" size="100" maxlength="20" placeholder="半角英数8文字以上" id="pass" name="pass"autocomplete="off">
  <h3 id="pass_chk" style="display: none; color: red;">パスワードが半角英数8文字以上になっていません</h3>
  </div>
  <div class="name">
    <p class="fs-3">パスワード再入力</p>
  </div>
  <div class="text">
    <input type="text" size="100" maxlength="20" placeholder="半角英数8文字以上" id="repass" autocomplete="off">
    <h3 id="repass_chk" style="display: none; color: red;">パスワードが最初と違っています</h3>
  </div>


  <div class="name">
    <p class="fs-3">郵便番号</p>
  </div>
  <div class="text">
    <input type="text" size="100" maxlength="7" placeholder="ハイフンなし" id="yuubin" name="yuubin" autocomplete="off">
    <h3 id="yuubin_chk" style="display: none; color: red;">郵便番号が7桁になっていません</h3>
  </div>

  <div class="name">
    <p class="fs-3">住所</p>
  </div>
    <div class="text">
      <input type="text" size="100" maxlength="200" id="address"name="jyusyo" autocomplete="off">
    </div>

    <div class="name">
    <p class="fs-3">電話番号</p>
  </div>
    <div class="text">
      <input type="text" size="100" maxlength="21" placeholder="ハイフンなし" id="phone" name="callnumber" autocomplete="off">
      <h3 id="phone_chk" style="display: none; color: red;">電話番号が形式に沿っていません</h3>
    </diV>

    <div class="name">
      <p class="fs-3">生年月日</p>
    </div>
    <div class="text">
      <input type="date"  size="100" max="9999-12-31" id="birth" name="birthday" autocomplete="off">
    </div>
    <div class="name">
        <p class="fs-3">性別</p>
      </div>
    <div class="text">
      <div class="form-check">
        <input type="radio" class="form-check-input" size="100"  value="男" name="flexRadioDefault" id="flexRadioDefault1">
        <p class="fs-3">男</p>
      </div>
      
      <div class="form-check">
        <input type="radio"class="form-check-input" size="100"  value="女" name="flexRadioDefault" id="flexRadioDefault2">
        <p class="fs-3">女</p>
      </div>
      <div class="form-check">
        <input type="radio" class="form-check-input" size="100"  value="答えたくない" name="flexRadioDefault" id="flexRadioDefault1" checked="checked">
        <p class="fs-3">答えたくない</p>
      </div>
    </div>
    <div class="touroku">
      <input type="submit"class="btn btn-primary btn-lg" size="100" value="会員登録を行う" id="touroku">
    </div>
</form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">


      </script>

<script>
document.getElementById("touroku").onclick = function() {
    const name = document.getElementById("name").value;
    const name_huri = document.getElementById("name_huri").value;
    const mail = document.getElementById("mail").value;
    const pass = document.getElementById("pass").value;
    const repass = document.getElementById("repass").value;
    const yuubin = document.getElementById("yuubin").value;
    const address = document.getElementById("address").value;
    const phone = document.getElementById("phone").value;
    const birth = document.getElementById("birth").value;

    var flag = 0;
    if(name.length == 0){flag = 1;}
    if(name_huri.length == 0){ flag = 1; }
    if(mail.length == 0){ flag = 1; }
    if(pass.length == 0){ flag = 1; }
    if(repass.length == 0){ flag = 1; }

    if(flag == 1){ alert('必須項目が未記入の箇所があります'); return false; }
    else{
        flag_chk = 0;

        var regexp = /[一-龠]/;
        if(regexp.test(name) != true){ document.getElementById('name_chk').style.display = "block"; flag_chk = 1; }
        else{ document.getElementById('name_chk').style.display = "none"; }

        var regexp = /^[\u{3000}-\u{301C}\u{3041}-\u{3093}\u{309B}-\u{309E}]+$/mu;
        if(regexp.test(name_huri) != true){ document.getElementById('name_huri_chk').style.display = "block"; flag_chk = 1; }
        else{ document.getElementById('name_huri_chk').style.display = "none"; }

        var regexp = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/;
        if(regexp.test(mail) != true){ document.getElementById('mail_chk').style.display = "block"; flag_chk = 1; }
        else{ document.getElementById('mail_chk').style.display = "none"; }

        var regexp = /^([a-zA-Z0-9]{8,})$/;
        if(regexp.test(pass) != true){ document.getElementById('pass_chk').style.display = "block"; flag_chk = 1; }
        else{ document.getElementById('pass_chk').style.display = "none"; }

        if(pass != repass){ document.getElementById('repass_chk').style.display = "block"; flag_chk = 1; }
        else{ document.getElementById('repass_chk').style.display = "none"; }

        var regexp = /^\d{7}$/;
        if(regexp.test(yuubin) != true){ document.getElementById('yuubin_chk').style.display = "block"; flag_chk = 1; }
        else{ document.getElementById('yuubin_chk').style.display = "none"; }

        var regexp = /^(0{1}\d{9,10})$/;
        if(regexp.test(phone) != true){ document.getElementById('phone_chk').style.display = "block"; flag_chk = 1; }
        else{ document.getElementById('phone_chk').style.display = "none"; }

        if(flag_chk == 1){ return false; }
        else{ return ture; }
    }
};

</script>

</html>