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

  // ログインしているかどうか、ログインできるuserがあるかどうか判断する関数
  public function checkLoginByMailAndPass($mail,$pass){
    $ret = [];
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM user_tbl WHERE email = ?";
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$mail,PDO::PARAM_STR);
    $ps->execute();
    $userList = $ps->fetchAll();

    foreach($userList as $row){
      if(password_verify($pass,$row['pass']) == true){
        $ret = $userList;
      }
    }
    return $ret;
  }

// item_idを一つ引数として渡すと商品情報を取ってきます
  public function GetItemInfoToID($item_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl WHERE item_id = ?";

    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$item_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;
  }

  public function GetItemToGenreID($genre_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl WHERE genre_id = ?";

    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$genre_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;
  }
  //ジャンルＩＤを検索→商品情報を引っ張ってくる関数

  public function GetItemToGenreIDDESC($genre_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl WHERE genre_id = ? ORDER BY item_price DESC";

    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$genre_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;
  }
  //ジャンルＩＤを検索→商品情報を引っ張ってくる関数＋金額高い順に並べ替え
  
  public function GetItemToGenreIDASC($genre_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl WHERE genre_id = ? ORDER BY item_price";

    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$genre_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;
  }
  //ジャンルＩＤを検索→商品情報を引っ張ってくる関数＋金額安い順に並べ替え

  public function GetItemToGenreIDNew($genre_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM items_tbl WHERE genre_id = ? ORDER BY item_id DESC";

    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$genre_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;
  }
  //ジャンルＩＤを検索→商品情報を引っ張ってくる関数＋新着順に並べ替え

//  public function carts($item_count){
//    $pdo = $this->dbConnect();
//    $sql = "INSERT INTO carts(item_count) VALUES (?)";
//    $ps = $pdo->prepare($sql);
//    $ps->bindvalue(1, $item_count, PDO::PARAM_INT);
//    $ps->execute();
//  }

  public function AddCartById($user_id,$item_id,$item_count){

    $pdo = $this->dbConnect();
    $spl = 'INSERT INTO carts (item_id,item_count,user_id,cart_date)
            VALUES (?,?,?,?)';
    $date = date('Yhis');

    $ps = $pdo->prepare($spl);
    $ps->bindValue(1,(int)$item_id,PDO::PARAM_INT);
    $ps->bindValue(2,(int)$item_id,PDO::PARAM_INT);
    $ps->bindValue(3,(int)$user_id,PDO::PARAM_INT);
    $ps->bindValue(4,$date,PDO::PARAM_STR);

    $ps->execute();

  }

  // ジャンルIDからジャンル名を検索するDAOだお
  public function GetGenretoGenreID($genre_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT * FROM genre WHERE genre_id = ?";

    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$genre_id,PDO::PARAM_INT);
    $ps->execute();

    $searchGenre = $ps->fetchAll();
    return $searchGenre;
  }
}
?>
