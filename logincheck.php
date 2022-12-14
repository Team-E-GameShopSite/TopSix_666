<?php
session_start();
require_once 'dao/DBManager.php';
$dbmng = new DBManager();
$userData = $dbmng->checkLoginByMailAndPass($_POST['mail'],$_POST['pass']);
foreach($userData as $row){
  $_SESSION['user_id'] = $row['user_id'];
  $_SESSION['user_name'] = $row['user_name'];
  $_SESSION['user_email'] = $row['email'];
  header('Location: kaihatuTop.php');
}
echo $_POST['mail'] . $_POST['pass'];
echo count($userData);
// if(count($userData) == 0){  header('Location: kaihatuLOGIN.php'); }
?>
