<!DOCTYPE html>
<html lang="ja">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content=Type">
<style type="text/css"></style>
<link href="styleERROR.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <h1 class="title">登録完了しました</h1>
  <?php
  $pdo = new PDO('mysql:host=localhost;dbname=fishing goods;charset=utf8',

  'webuser','abccsd2');

  $sql="INSERT INTO user_tbl(user_name,user_hurigana,user_pass,user_mail)VALUE(?,?,?,?)";

  $ps=$pdo->prepare($sql);

  $ps->bindValue(1,$_POST['simei'],PDO::PARAM_STR);

  $ps->bindValue(2,$_POST['huri'],PDO::PARAM_STR);

 //$ps->bindValue(3,password_hash($_POST['pass'],PASSWORD_DEFAULT),PDO::PARAM_STR);

 $ps->bindValue(3,$_POST['pass'],PDO::PARAM_STR);

  $ps->bindValue(4,$_POST['meado'],PDO::PARAM_STR);

  $ps->execute();

 ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>