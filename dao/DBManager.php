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

  public function carts($item_count){
    $pdo = $this->dbConnect();
    $sql = "INSERT INTO carts(item_count) VALUES (?)";
    $ps = $pdo->prepare($sql);
    $ps->bindvalue(1, $item_count, PDO::PARAM_INT);
    $ps->execute();
  }

  public function login_session($mail,$pass){
    $pdo = $this->dbConnect();
    $sql=$pdo->prepare('select * from user_tbl  where email=? and pass=?');
    $sql->execute([$mail,$pass]);
    foreach($sql->fetchAll() as $row){
      $_SESSION['customer']=[
        'id'=>$row['user_id'],
        'name'=>$row['user_name'],
        'furi'=>$row['user_name_furi'],
        'email'=>$row['email'],
        'pass'=>$row['pass'],
        'address'=>$row['address'],
        'post'=>$row['post_no'],
        'tell'=>$row['tell'],
        'birthday'=>$row['birthday'],
        'femail'=>$row['femail']];
    }
    if(isset($_SESSION['customer'])){
      return $_SESSION['customer']['name'];
    }else{
      return "false";
    }
  }
}
