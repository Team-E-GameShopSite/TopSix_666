<?php
require_once 'dao/DBManager.php';
$dbmnt = new DBManager();
$dbmnt->AddHstorysById($_SESSION['user_id']);
$dbmnt->RemoveCartItemAll($_SESSION['user_id']);
echo "<h1>ヒストリーにに追加しました</h1>";
// header('Location: kaihatuCART.php');
?>
