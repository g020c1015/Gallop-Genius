<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GallopGenius</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <script type="text/javascript" src="keiba.js"></script>
</head>
<body>
    <h1>管理者画面</h1>
    <h2>中の人予想</h2>
    <form name="hostForm" action="nakayosou.php" method="post">
        <div>名前</div>
        <select name="p_name">
            <option value="平野">平野</option>
            <option value="永島">永島</option>
            <option value="舘">舘</option>
            <option value="菊地">菊地</option>
        </select>
        <br>
        <div>予想馬番：</div>
        <select name="h_number">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
        </select>
        <br>
        <div>予想馬名</div>
        <input type="text" name="h_name">
        <br>
        <div>予想理由</div>
        <br>
        <textarea id ="text" name="p_reason"></textarea>
        <br>
        <input type="submit" value="予想確定">
    </form>
</body>
</html>
