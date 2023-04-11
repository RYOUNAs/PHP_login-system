<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./Css/Style.css" />
  <title>ログインページ</title>
</head>

<body>
  <div class="form-wrapper">
    <h1>Sign In</h1>
    <form action="./login.php" method="POST">
      <div class="form-item">
        <input type="name" name="id" placeholder="IDを入力" /><br />
      </div>
      <div class="form-item">
        <input type="name" name="pass" placeholder="PASSを入力" /><br />
      </div>
      <div class="result">
        <p><?php echo $error; ?></p>
      </div>
      <div>
        <p>
          <input class="btn btn--orange" type="submit" name="add" value="送信" />
        </p>
        <p>
          <input class="btn btn--orange" type="submit" name="new" value="会員登録" />
        </p>
        <p><input class="btn btn--orange" type="reset" value="リセット" /></p>
        <br />
      </div>
    </form>
  </div>
</body>

</html>