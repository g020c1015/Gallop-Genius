<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GallopGenius</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
  <div align="right">
    <button onclick="location.href='login.php'">管理者ページ</button>
  </div>
  <button class="title" onclick="location.href='main.php'">GallopGenius</button>
  <div class="ue">
    <button onclick="location.href='yosou.php'" class="botan">AI予想</button>
    <button onclick="location.href='shutuba.php'" class="botan">出馬表</button>
    <button onclick="location.href='kaishu.php'" class="botan">AI回収率</button>
    <button onclick="location.href='baken.php'" class="botan">馬券の種類</button>
  </div>
  <div class="sita">
    <button onclick="location.href='nakayosou.php'" class="botan">中の人予想</button>
    <button onclick="location.href='calendaer.php'" class="botan">レース<br>カレンダー</button>
    <button onclick="location.href='gaiyou.php'" class="botan">概要</button>
    <button onclick="location.href='mame.php'" class="botan">競馬の豆知識</button>
  </div>
</body>
</html>
