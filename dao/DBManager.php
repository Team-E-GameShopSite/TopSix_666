<?php
class DBManager{
  $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418145-topsix666;charset=utf8','LAA1418145','topsix666');

  return $pdo;
}

$sql = 'INSERT INTO helloDB (text)
        VALUES (?)';

$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_POST['text'],PDO::PARAM_STR);
$ps->execute();


?>
