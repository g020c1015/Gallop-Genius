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
      <?php
        $dsn = 'mysql:host=localhost;dbname=host_db;';
        $user = "root";
        $password = "root";
        $PDO = new PDO($dsn,$user,$password);
        //SQL文
        $sql = 'SELECT * FROM host_data WHERE p_name = "平野"';
        $stmt = $PDO->query($sql);
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo"馬番:{$result['h_number']}<br/>";
        echo"馬名:{$result['h_name']}<br/>";
        echo"予想理由:{$result['p_reason']}<br/>";
        }
      ?>
      </p>
    </div>
    <div class="naka">
      <h3>中の人Bさん</h3>
      <p>
      <?php
        $dsn = 'mysql:host=localhost;dbname=host_db;';
        $user = "root";
        $password = "root";
        $PDO = new PDO($dsn,$user,$password);
        //SQL文
        $sql = 'SELECT * FROM host_data WHERE p_name = "永島"';
        $stmt = $PDO->query($sql);
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo"馬番:{$result['h_number']}<br/>";
        echo"馬名:{$result['h_name']}<br/>";
        echo"予想理由:{$result['p_reason']}<br/>";
        }
      ?>
      </p>
    </div>
    <div class="naka">
      <h3>中の人Cさん</h3>
      <p>
      <?php
        $dsn = 'mysql:host=localhost;dbname=host_db;';
        $user = "root";
        $password = "root";
        $PDO = new PDO($dsn,$user,$password);
        //SQL文
        $sql = 'SELECT * FROM host_data WHERE p_name = "舘"';
        $stmt = $PDO->query($sql);
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo"馬番:{$result['h_number']}<br/>";
        echo"馬名:{$result['h_name']}<br/>";
        echo"予想理由:{$result['p_reason']}<br/>";
        }
      ?>
      </p>
    </div>
    <div class="naka">
      <h3>中の人Dさん</h3>
      <p>
      <?php
        $dsn = 'mysql:host=localhost;dbname=host_db;';
        $user = "root";
        $password = "root";
        $PDO = new PDO($dsn,$user,$password);
        //SQL文
        $sql = 'SELECT * FROM host_data WHERE p_name = "菊地"';
        $stmt = $PDO->query($sql);
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo"馬番:{$result['h_number']}<br/>";
        echo"馬名:{$result['h_name']}<br/>";
        echo"予想理由:{$result['p_reason']}<br/>";
        }
      ?>
      </p>
    </div>
  </div>
</body>
</html>
