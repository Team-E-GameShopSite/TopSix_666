<?php
require_once '../dao/DBManager.php';
$dbmng = new DBManager();

$sql = "SELECT * FROM item_tbl WHERE item_id = 1";

$ps = $pdo->prepare($sql);
$ps->execute();

$searchItem = $sp->fetchAll();

foreach($searchItem as $row){
  echo $row['item_id'];
}
?>
