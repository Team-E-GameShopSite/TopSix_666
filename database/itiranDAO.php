<?php
  require_once '../dao/DBManager.php';
  $dbmng = new DBManager();

  $searchArray = $dbmng->getItemTblAll();

  if(!empty($searchArray)){
    foreach($searchArray as $row){
      echo "-----------------------<br>";
      echo $row['item_name']."<br>";
    }
  }
?>
