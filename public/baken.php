<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>馬券の種類</title>
  <link rel="stylesheet" href="second.css">
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
    <button onclick="location.href='nakayosou.php'" class="botan">中の人予想</button>
    <button onclick="location.href='calendaer.php'" class="botan">レース<br>カレンダー</button>
    <button onclick="location.href='gaiyou.php'" class="botan">概要</button>
    <button onclick="location.href='mame.php'" class="botan">競馬の豆知識</button>
  </div>
  <div>
    <h1 class="hyoudai">馬券の種類</h1>
    <p class="nakami">単勝に慣れてきたら他の券種にも挑戦してみましょう</p>
    <p class="nakami">馬券の種類は全9種類あります</p>
      <ul class="bakenList">
        <li class="item">単勝</li>
        <li class="item">複勝</li>
        <li class="item">馬連</li>
        <li class="item">馬単</li>
        <li class="item">枠連</li>
        <li class="item">ワイド</li>
        <li class="item">3連複</li>
        <li class="item">3連単</li>
        <li class="item">WIN5</li>
    </ul>
  </div>
  <div class="setumei">
    <p class="kaime">複勝とは・・・</p>
    <p>3着以内に入る馬番を当てる馬券です。</p>
    <p class="kaime">馬連とは・・・</p>
    <p>1,2着の2頭の馬番を順位関係なく当てる馬券です。</p>
    <p class="kaime">馬単とは・・・</p>
    <p>1,2着の2頭の馬番を順位どおりに当てる馬券です。</p>
    <p class="kaime">枠連とは・・・</p>
    <p>1,2着の2頭の枠番を順番関係なく当てる馬券です。</p>
    <p class="kaime">ワイドとは・・・</p>
    <p>3着以内に入る2頭の馬番を当てる馬券です。<br>例えば、1着-3着、1着-2着、2着-3着でもあたりです。</p>
    <p class="kaime">3連複</p>
    <p>3着以内にはいるすべての馬番を着順関係なく当てる馬券です。</p>
    <p class="kaime">3連単とは・・・</p>
    <p>3着以内に入るすべての馬番を着順通りに当てる馬券です。</p>
    <p class="kaime">WIN5とは・・・</p>
    <p>日曜日の対象の5レースの単勝をあてる馬券です<br>※ネット投票のみでの投票です。</p>
  </div>
</body>
</html>
