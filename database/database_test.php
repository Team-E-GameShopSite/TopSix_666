<?php

// define('DSN', 'mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418145-topsix666;charset=utf8');
// define('DB_USERNAME','LAA1418145');
// define('DB_PASSWORD','topsix666');
// 
// $pdo = new PDO(DSN, DB_USERNAME, DB_PASSWORD);

$pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418145-topsix666;charset=utf8','LAA1418145','topsix666');

$sql = 'INSERT INTO helloDB (text)
        VALUES (?)';

$ps = $pdo->prepare($sql);
$ps->bindValue(1,$_POST['text'],PDO::PARAM_STR);
$ps->execute();

  echo "TEXTの登録完了ページ<br>";
  echo '送ったメッセージは「'. $_POST['text'] .'」です。';

?>
