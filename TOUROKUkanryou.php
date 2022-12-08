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
session_start();
require_once 'dao/DBManager.php';
$dbm=new DBManager();
$userData=$dbm->login($_POST['mail'],$_POST['pass']);
foreach ($userData as $row){
      header('Location:kaihatuTOP.php');
    }
if(count($userData)==0){
    echo"アカウントが存在しません";
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>