<?php
require_once 'dao/DBManager.php';
$dbmnt = new DBManager();
$dbmnt->AddCartById($_POST['user_id'], $_POST['item_id'], $_SESSION['suuryo']);
echo $_POST['item_id'] . " | ". $_POST['suuryo']. " | ". $_SESSION['user_id'];
echo 'データベースインサート用ページです。';
// header('Location: kaihatuCART.php');
?>
