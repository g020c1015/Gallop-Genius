<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AI予想</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <script type="text/javascript" src="keiba.js"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1">
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
    <button onclick="location.href='nakayosou.php'" class="botan">中の人予想</button>
    <button onclick="location.href='calendaer.php'" class="botan">レース<br>カレンダー</button>
    <button onclick="location.href='gaiyou.php'" class="botan">概要</button>
    <button onclick="location.href='mame.php'" class="botan">競馬の豆知識</button>
  </div>
  <div class="yosou">
    <h2>今回の予想は</h2>
    <h2 class="resumei">宝塚記念 G1</h2>
    <p class="date">2023年6月25日（日）阪神11レース</p>
    <p class="honmei">本命馬はイクイノックス</p>
    <marquee behavior="alternate" direction="up" height="280"><marquee direction="left"><img src=img/so.png></marquee></marquee>

    <p class="honmei">AI指数0.8829</p>
    <p class="honmei">買い方は単勝のみ！</p>
    <p class="hatena">単勝とは？という方は <a href="gaiyou.php">概要</a>へ</p>
  </div>
  
</body>
</html>
