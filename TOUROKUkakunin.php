<!DOCTYPE html>
<html lang="ja">

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
  <style type="text/css"></style>
  <link href="stylekakunin.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <?php
  require 'Header.php';
  ?>

  <h1 class="touroku">以下の内容で登録しました。</h1>
  <h1 class="center">
    <?php
    echo "氏名<br>"
      . $_POST['simei'] . "<br><br>";

    echo "氏名(フリガナ)<br>"
      . $_POST['huri'] . "<br><br>";

    echo "メールアドレス<br>"
      . $_POST['meado'] . "<br><br>";

    echo "パスワード<br>"
      . $_POST['pass'] . "<br><br>";

    echo "郵便番号<br>"
      . $_POST['yuubin'] . "<br><br>";

    echo "住所<br>"
      . $_POST['jyusyo'] . "<br><br>";

    echo "電話番号<br>"
      . $_POST['callnumber'] . "<br><br>";

    echo "生年月日<br>"
      . $_POST['birthday'] . "<br><br>";

    echo "性別<br>";
    switch ($_POST['flexRadioDefault']) {
      case "男":
        echo "男<br>";
        break;
      case "女":
        echo "女<br>";
        break;
      case "答えたくない":
        echo "答えたくない<br>";
        break;
    }
    require_once 'dao/DBManager.php';
    $dbmng = new DBManager();
    $dbmng->user_insert($_POST['simei'], $_POST['huri'], $_POST['meado'], $_POST['pass'], $_POST['yuubin'], $_POST['jyusyo'], $_POST['callnumber'], $_POST['birthday'], $_POST['flexRadioDefault']);
    ?>

  </h1>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>