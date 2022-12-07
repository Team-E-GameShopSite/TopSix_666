<?php
require_once '../dao/DBManager.php';
$dbmng = new DBManager();
$searchArray = $dbmng -> getItemTblAll();

$pdo = new PDO('mysql:host = hocalhost;dbname = webdb;charset = utf8' , 'webuser' , 'abccsd2');
$sql = "SELECT * FROM item_tbl WHERE item_name LIKE ? ORDER BY item_id DESC";
$ps = $pdo -> prepare($sql);
$ps -> bindValue(1, '%'.$_POST['ken'].'%',PDO::PARAM_STR);
$ps -> execute();
$searchtweet = $ps -> fetchALL();
echo '検索キーワード：'.$_POST['ken'].'<br>';

foreach($searchtweet as $row){
    echo '------------------<br>'.$row['item_name'];
    echo '<br>'.$row['item'].'<br>';
}
?>