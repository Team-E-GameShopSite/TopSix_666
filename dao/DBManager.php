<?php
class DBManager{
  private function dbConnect(){
    $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418145-topsix666;charset=utf8','LAA1418145','topsix666');

    return $pdo;
  }

  public function databaseTest(){
    $sql = 'INSERT INTO helloDB (text)
            VALUES (?)';
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$_POST['text'],PDO::PARAM_STR);
    $ps->execute();
  }

  public function getItemTblAll(){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl";
    $ps = $pdo->prepare($sql);
    $ps->execute();
    $searchArray = $ps->fetchAll();
    return $searchArray;
  }
}

?>
