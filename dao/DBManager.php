<?php
class DBManager
{
  private function dbConnect()
  {
    $pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418145-topsix666;charset=utf8', 'LAA1418145', 'topsix666');

    return $pdo;
  }

  public function databaseTest()
  {
    $pdo = $this->dbConnect();
    $sql = 'INSERT INTO helloDB (text)
            VALUES (?)';
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1, $_POST['text'], PDO::PARAM_STR);
    $ps->execute();
  }

  public function getItemTblAll()
  {
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl";
    $ps = $pdo->prepare($sql);
    $ps->execute();
    $searchArray = $ps->fetchAll();
    return $searchArray;
  }

  public function user_insert($user_name, $user_name_furi, $email, $pass, $address, $post_no, $tell, $birthday, $femail)
  {
    $pdo = $this->dbConnect();
    $sql = "INSERT INTO user_tbl(user_name,user_name_furi,email,pass,address,post_no,tell,birthday,femail) VALUES (?,?,?,?,?,?,?,?,?)";
    $ps = $pdo->prepare($sql);
    $ps->bindvalue(1, $user_name, PDO::PARAM_STR);
    $ps->bindvalue(2, $user_name_furi, PDO::PARAM_STR);
    $ps->bindvalue(3, $email, PDO::PARAM_STR);
    $ps->bindvalue(4, password_hash($pass, PASSWORD_DEFAULT), PDO::PARAM_STR);
    $ps->bindvalue(5, $address, PDO::PARAM_STR);
    $ps->bindvalue(6, $post_no, PDO::PARAM_STR);
    $ps->bindvalue(7, $tell, PDO::PARAM_STR);
    $ps->bindvalue(8, $birthday, PDO::PARAM_STR);
    $ps->bindvalue(9, $femail, PDO::PARAM_STR);
    $ps->execute();
  }

  public function login($usermail, $userpass)
  {
    $ret = [];
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM user_tbl WHERE email=?";
    $ps = $pdo->prepare($sql);
    $ps->bindvalue(1, $usermail, PDO::PARAM_STR);
    $ps->execute();
    $userList = $ps->fetchAll();
    foreach ($userList as $row) {
      if (password_verify($userpass, $row['pass']) == true){
        $ret = $userList;
      }
    }
    return $ret;
  }

  public function GetItemInfoToID($item_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl WHERE item_id = ?";

    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$item_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;
  }

  public function GetItemInfoToID($item_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl WHERE item_id = ?";

    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$item_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;
  }

  public function GetItemInfoToGenreID($genre_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl WHERE genre_id = ?";

    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$genre_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;
  }
  //ジャンルIDを検索→商品情報を引っ張ってくる関数

  public function SortPriceASC(){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl ORDER BY item_price DESC";

    $ps = $pdo->prepare($sql);
    $ps->execute();
  }
  //金額高い順に並べ替え
  public function SortPriceDESC(){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl ORDER BY item_price";

    $ps = $pdo->prepare($sql);
    $ps->execute();
  }
  //金額安い順に並べ替え
  public function SortNew(){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl ORDER BY item_id DESC";

    $ps = $pdo->prepare($sql);
    $ps->execute();
  }
  //新着順に並べ替え
  public function carts($item_count){
    $pdo = $this->dbConnect();
    $sql = "INSERT INTO carts(item_count) VALUES (?)";
    $ps = $pdo->prepare($sql);
    $ps->bindvalue(1, $item_count, PDO::PARAM_INT);
    $ps->execute();
  }
}
?>
