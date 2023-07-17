<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>testPage</title>
</head>
<body><?php

$dsn = 'mysql:host=localhost;dbname=host_db;';
$user = "root";
$password = "root";

try{
    $PDO = new PDO($dsn,$user,$password);

    //値の取得
    $p_name = $_POST["p_name"];
    $h_number = $_POST["h_number"];
    $h_name = $_POST["h_name"];
    $p_reason = $_POST["p_reason"];

    $sql = "INSERT INTO host_data (P_name,H_number,H_name,P_reason) 
            VALUES (:P_name,:H_number,:H_name,:P_reason)
            ON DUPLICATE KEY UPDATE
            P_name = VALUES(P_name),
            H_number = VALUES(H_number),
            H_name = VALUES(H_name),
            P_reason = VALUES(P_reason)";
    $stmt = $PDO->prepare($sql);
    $params = array(':P_name'=>$p_name,':H_number'=>$h_number,':H_name'=>$h_name,':P_reason'=>$p_reason,);
    $stmt->execute($params);

    //画面表示
    //SQL文
    $sql2 = 'SELECT * FROM host_data';
    //SQL文の実行結果を「$stmt2」に代入
    $stmt2 = $PDO->query($sql2);

    echo"<table>\n";
    echo"\t<tr><th>P_name</th><th>H_number</th><th>H_name</th><th>P_reason</th></tr>\n";
    while($result = $stmt2->fetch(PDO::FETCH_ASSOC)){
        echo"\t<tr>\n";
        echo"\t\t<td>{$result['p_name']}</td>\n";
        echo"\t\t<td>{$result['h_number']}</td>\n";
        echo"\t\t<td>{$result['h_name']}</td>\n";
        echo"\t\t<td>{$result['p_reason']}</td>\n";
        echo"\t</tr>\n";
    }
    echo"</table>";

}catch(PDOException $e){
    echo'データベースにアクセスできませｎ'.$e->getMessage();
    exit;
}
?>
    <input type="button" value="確定" onclick="location.href='./nakayosou.php'">
</body>
</html>
