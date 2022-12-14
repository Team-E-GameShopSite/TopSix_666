<?php
$session_start();
$dbm = new DBManager();
$userData = $dbm->checkLoginByMailAndPass($_POST['mail'],$_POST['pass']);
foreach($userData as $row){
  $_SESSION['user_id'] = $row['user_id'];
  $_SESSION['user_name'] = $row['user_name'];
  $_SESSION['user_email'] = $row['email'];
  header('Location: kaihatuTop.php')
}
if(count($userData) == 0){  header('Location: kaihatuLOGIN.php'); }
?>
