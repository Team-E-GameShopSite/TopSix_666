<form action = "raikukensaku3.php" method = "POST">
    <input type = "text" name = "ken"><br>
    <input type = "submit" value = "検索">
</form>

<?php
$pdo = new PDO('mysql:host=mysql209.phy.lolipop.lan;dbname=LAA1418145-topsix666;charset=utf8','LAA1418145','topsix666');
$sql = $sql = "SELECT * FROM item_tbl WHERE item_name LIKE ? ORDER BY item_id DESC";
$selectData = $pdo -> quary($sql);

foreach($selectData as $row){
    echo $row['item_name']."<br>";
    echo"----------------<br>";
}
?>