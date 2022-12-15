<?php
require_once 'dao/DBManager.php';
$dbmnt = new DBManager();
$dbmnt->RemoveCartById($_SESSION['user_id'], $_POST['item_id']);
echo "<h1>カートから削除しました</h1>";
// header('Location: kaihatuCART.php');
?>
