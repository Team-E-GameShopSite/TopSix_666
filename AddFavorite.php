<?php
require_once 'dao/DBManager.php';
$dbmnt = new DBManager();
$dbmnt->AddFavoritesById($_SESSION['user_id'], $_POST['item_id']);
echo '<h1>お気に入りに追加しました</h1>';
// header('Location: kaihatuSYOSAI.php?item_id='.$_POST['item_id']);
?>
