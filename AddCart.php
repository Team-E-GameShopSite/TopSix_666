<?php
require_once 'dao/DBManager.php';
$dbmnt = new DBManager();
$dbmnt->AddCartById($_POST['item_id'], $_POST['suuryo'], $_SESSION['user_id']);
echo $_POST['item_id'] . " | ". $_POST['suuryo']. " | ". $_SESSION['user_id']. " | ". date('Yhis');
echo "<br>";
echo var_dump(date('Yhis '));
echo "<br>";
echo 'データベースインサート用ページです。';
// header('Location: kaihatuCART.php');
?>
