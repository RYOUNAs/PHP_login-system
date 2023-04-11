<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>会員ページ</title>
</head>

<body>
  <h1>会員</h1>
  <h2><?php echo $c_name; ?></h2>
  <form action="./index.php" method="POST">
    <p><input type="submit" name="logout" value="ログアウト" /></p>
  </form>
</body>

</html>