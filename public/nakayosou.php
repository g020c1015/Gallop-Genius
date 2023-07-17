<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>中の人予想</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <script type="text/javascript" src="keiba.js"></script>
</head>
<body>
  
  <?php
  //追加(2023/07/17/tachi)
  //注意：まだローカル環境でしか動かない
  $dsn = "mysql:host=localhost;dbname=host_db;";
  $user = "root";
  $password = "root";

  try{
    $PDO = new PDO($dsn,$user,$password);
    
    //画面表示
    $sql2 = 'SELECT * FROM host_data';
    $stmt2 = $PDO->query($sql2);
  }catch(PDOException $e){
    echo'データベースにアクセスできません'.$e->getMessage();
    exit; 
  }
    
  ?>
  <button onclick="location.href='main.php'" class="title">GallopGenius</button>
  <div class="ue">
    <button onclick="location.href='yosou.php'" class="botan">AI予想</button>
    <button onclick="location.href='shutuba.php'" class="botan">出馬表</button>
    <button onclick="location.href='kaishu.php'" class="botan">AI回収率</button>
    <button onclick="location.href='baken.php'" class="botan">馬券の種類</button>
  </div>
  <div class="sita">
    <button class="botan">中の人予想</button>
    <button onclick="location.href='calendaer.php'" class="botan">レース<br>カレンダー</button>
    <button onclick="location.href='gaiyou.php'" class="botan">概要</button>
    <button onclick="location.href='mame.php'" class="botan">競馬の豆知識</button>
  </div>
  <div class="naka_yosou">
    <h2>中の人予想</h2>
    <div class="naka">
      <h3>中の人Aさん</h3></br>
      <p>
        馬番:5</br>
        馬名:コパノランサー</br>
        予想理由:ただただ強い。以上。
      </p>
    </div>
    <div class="naka">
      <h3>中の人Bさん</h3>
      <p>
        馬番:5</br>
        馬名:コパノランサー</br>
        予想理由:ただただ強い。以上。
      </p>
    </div>
    <div class="naka">
      <h3>中の人Cさん</h3>
      <p>
        馬番:5</br>
        馬名:コパノランサー</br>
        予想理由:ただただ強い。以上。
      </p>
    </div>
    <div class="naka">
      <h3>中の人Dさん</h3>
    <p>
        馬番:5</br>
        馬名:コパノランサー</br>
        予想理由:ただただ強い。以上。
      </p>
    </div>
  </div>
</body>
</html>
