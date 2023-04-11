<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./Css/Style.css" />
  <title>新規登録</title>
</head>

<body>
  <div class="form-wrapper">
    <h1>Create account</h1>
    <form action="./register.php" method="POST">
      <input type="hidden" name="post_id" value="<?php echo $c_post_id; ?>" />
      <div class="form-item">
        <input type="name" name="name" value="<?php echo $name; ?>" placeholder="氏名を入力" /><br />
        <?php echo $name_error ?>
      </div>
      <div class="form-item">
        <input type="name" name="id" value="<?php echo $id; ?>" placeholder="IDを入力" /><br />
        <?php echo $id_error ?>
      </div>
      <div class="form-item">
        <input type="name" name="pass" value="<?php echo $pass; ?>" placeholder="PASSを入力" /><br />
        <?php echo $pass_error ?>
      </div>
      <div class="submit">
        <p>
          <input class="btn btn--orange" type="submit" name="req" value="送信" />
        </p>
        <p>
          <input class="btn btn--orange" type="submit" name="reset" value="リセット" />
        </p>
        <br />
      </div>
    </form>
  </div>
</body>

</html>