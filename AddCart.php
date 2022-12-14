<?php
require_once 'dao/DBManager.php';
$dbmnt = new DBManager();
$dbmnt->AddCartById($_SESSION['user_id'], $_POST['item_id'], $_POST['suuryo']);
echo "<h1>カートに追加しました</h1>";
// header('Location: kaihatuCART.php');
?>
