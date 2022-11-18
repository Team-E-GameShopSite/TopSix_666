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
  <?php

    echo "　　　　　名前　　　　　　　　　　　　　".$_POST['simei']."<br><br>";

    echo "　　　　フリガナ　　　　　　　　　　　".$_POST['huri']."<br><br>";

    echo "メールアドレス　　　　　　　　".$_POST['meado']."<br><br>";

    echo "　　パスワード　　　　　　　　　　".$_POST['pass']."<br><br>";

    echo "パスワード（確認用）　　　　　".$_POST['pass2']."<br><br>";

   ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>