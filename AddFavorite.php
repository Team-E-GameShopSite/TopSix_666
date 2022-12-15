<?php
require_once 'dao/DBManager.php';
$dbmnt = new DBManager();
$dbmnt->AddFavoritesById($_SESSION['user_id'], $_POST['item_id']);
header('Location: kaihatuSYOSAI.php?item_id='.$_POST['item_id']);
?>
