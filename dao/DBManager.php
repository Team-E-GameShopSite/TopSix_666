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

  // カートボタンを押すことでカートテーブルにuser_id,item_id,item_count,dateを保存する関数
  public function AddCartById($user_id,$item_id,$item_count){

    $pdo = $this->dbConnect();
    $spl = 'INSERT INTO carts (item_id,item_count,user_id,cart_date)
            VALUES (?,?,?,?)';
    $date = date('Ymdhis');

    $ps = $pdo->prepare($spl);
    $ps->bindValue(1,(int)$item_id,PDO::PARAM_INT);
    $ps->bindValue(2,(int)$item_count,PDO::PARAM_INT);
    $ps->bindValue(3,(int)$user_id,PDO::PARAM_INT);
    $ps->bindValue(4,$date,PDO::PARAM_STR);

    $ps->execute();

  }
  
  // カート画面でキャンセルを押すことでカートテーブルにから情報をを削除する関数
  public function RemoveCartById($user_id,$item_id){

    $pdo = $this->dbConnect();
    $spl = 'DELETE 
            FROM carts 
            WHERE item_id = ?
            AND user_id = ?';

    $ps = $pdo->prepare($spl);
    $ps->bindValue(1,(int)$item_id,PDO::PARAM_INT);
    $ps->bindValue(2,(int)$user_id,PDO::PARAM_INT);

    $ps->execute();

  }

  // user_idを渡すことでカートに登録されている商品のデータを取得することが出来る関数
  public function GetItemInfoForCartsByUserId($user_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT CT.item_id AS item_id,
            CT.item_count AS item_count,
            IT.image_path AS image_path,
            IT.item_name AS item_name,
            IT.item_price AS item_price,
            IT.sale_flag AS sale_flag,
            IT.sale_price AS sale_price
            FROM carts AS CT INNER JOIN items_tbl AS IT
            ON CT.item_id = IT.item_id
            WHERE CT.user_id = ?
            ORDER BY CT.cart_date DESC";
    
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$user_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;

  }

  // usae_idを渡すことでカートに保存されている商品のデータを消すことが出来る関数
  public function RemoveCartItemAll($user_id){
    $pdo = $this->dbConnect();

    $CartItemListByUserId = $this->GetItemByUserId($user_id);

    foreach($CartItemListByUserId as $row){
      $this->RemoveCartById($user_id,$row['item_id']);
    }

  }

  // user_idを渡すことでカートテーブルからitem_idとitem_countを取得する関数
  public function GetItemByUserId($user_id){
    $pdo = $this->dbConnect();

    $sql = 'SELECT *
            FROM carts
            WHERE user_id = ?';

    $ps = $pdo->prepare($sql);

    $ps->bindValue(1,$user_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();

    return $searchItem;
  }

  public function AddHstorysById($user_id){
    $pdo = $this->dbConnect();

    $sql = 'INSERT INTO hstorys (user_id,item_count,item_id,date)
            VALUES (?,?,?,?)';
    $date = date('Ymdhis');
    $CartItemListByUserId = $this->GetItemByUserId($user_id);

    foreach($CartItemListByUserId as $row){
      $ps = $pdo->prepare($sql);
      $ps->bindValue(1,$row['user_id'],PDO::PARAM_INT);
      $ps->bindValue(2,$row['item_count'],PDO::PARAM_INT);
      $ps->bindValue(3,$row['item_id'],PDO::PARAM_INT);
      $ps->bindValue(4,$date,PDO::PARAM_STR);

      $ps->execute();
    }

  }

  // user_idを渡すことでhstoryに登録されている商品のデータを取得することが出来る関数
  public function GetItemInfoForHstoryByUserId($user_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT HT.item_id AS item_id,
            HT.item_count AS item_count,
            HT.date AS date,
            IT.image_path AS image_path,
            IT.item_name AS item_name,
            IT.item_price AS item_price
            FROM hstorys AS HT INNER JOIN items_tbl AS IT
            ON HT.item_id = IT.item_id
            WHERE HT.user_id = ?
            ORDER BY HT.date";
    
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$user_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;

  }

  // お気に入りボタンを押すことでfavoritesテーブルにitem_id,user_id,favorite_dateを追加する関数
  public function AddFavoritesById($user_id,$item_id){

    $pdo = $this->dbConnect();
    $spl = 'INSERT INTO favorites (item_id,user_id,favorite_date)
            VALUES (?,?,?)';
    $date = date('Ymdhis');

    $ps = $pdo->prepare($spl);
    $ps->bindValue(1,(int)$item_id,PDO::PARAM_INT);
    $ps->bindValue(2,(int)$user_id,PDO::PARAM_INT);
    $ps->bindValue(3,$date,PDO::PARAM_STR);

    $ps->execute();
  }

  // お気に入り画面でお気に入り解除ボタンを押すことでお気に入りテーブルにから情報をを削除する関数
  public function RemoveFavoritesById($user_id,$item_id){

    $pdo = $this->dbConnect();
    $spl = 'DELETE 
            FROM favorites 
            WHERE item_id = ?
            AND user_id = ?';

    $ps = $pdo->prepare($spl);
    $ps->bindValue(1,(int)$item_id,PDO::PARAM_INT);
    $ps->bindValue(2,(int)$user_id,PDO::PARAM_INT);

    $ps->execute();

  }

  // user_idを渡すことでお気に入りに登録されている商品のデータを取得することが出来る関数
  public function GetItemInfoForFavoritesByUserId($user_id){
    $pdo = $this->dbConnect();
    $sql = "SELECT FV.item_id AS item_id,
            IT.image_path AS image_path,
            IT.item_name AS item_name,
            IT.item_price AS item_price,
            IT.sale_flag AS sale_flag,
            IT.sale_price AS sale_price
            FROM favorites AS FV INNER JOIN items_tbl AS IT
            ON FV.item_id = IT.item_id
            WHERE FV.user_id = ?
            ORDER BY FV.favorite_date DESC";
    
    $ps = $pdo->prepare($sql);
    $ps->bindValue(1,$user_id,PDO::PARAM_INT);
    $ps->execute();

    $searchItem = $ps->fetchAll();
    return $searchItem;

  }

  // user_idとitem_idを渡すことでその商品がお気に入りに登録されているか確認する関数
  public function HasFavoritesById($user_id,$item_id){

    $pdo = $this->dbConnect();
    $spl = 'SELECT *
            FROM favorites
            WHERE item_id = ?
            AND user_id = ?';

    $ps = $pdo->prepare($spl);
    $ps->bindValue(1,(int)$item_id,PDO::PARAM_INT);
    $ps->bindValue(2,(int)$user_id,PDO::PARAM_INT);

    $ps->execute();

    $hasItem = $ps->fetchAll();
    return empty($hasItem);
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
