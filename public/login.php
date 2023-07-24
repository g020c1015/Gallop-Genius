<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GallopGenius管理者専用ログイン</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <script type="text/javascript" src="keiba.js"></script>
</head>
<body>
  <?php
    if($_POST["pass"]=="admin"){
      header('Location: host.php');
      exit();
    }else{
      
    }
  ?>
  <h1>管理者専用ログイン画面</h1>
  <form method="POST" action="">
    <label>パスワードを入力してください</label></br>
      <input type="text" name="pass" value=""></br>
      <input type="submit" value="ログイン">
  </form>
</body>
</html>
