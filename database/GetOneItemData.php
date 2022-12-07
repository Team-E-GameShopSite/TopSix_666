<?php
$pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418145-topsix666;charset=utf8', 'LAA1418145', 'topsix666');

$sql = "SELECT * FROM item_tbl WHERE item_id = 1";

$ps = $pdo->prepare($sql);
$ps->execute();

$searchItem = $ps->fetchAll();

foreach($searchItem as $row){
  echo $row['item_id'];
}
?>
