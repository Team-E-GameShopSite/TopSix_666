<?php
require_once 'dao/DBManager.php';
$dbmnt = new DBManager();
$dbmnt->RemoveCartById($_SESSION['user_id'], $_POST['item_id']);
header('Location: kaihatuCART.php');
?>
