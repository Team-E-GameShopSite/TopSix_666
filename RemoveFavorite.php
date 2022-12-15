<?php
require_once 'dao/DBManager.php';
$dbmnt = new DBManager();
$dbmnt->RemoveFavoritesById($_SESSION['user_id'], $_POST['item_id']);
header('Location: kaihatuOKINIIRI.php');
?>
