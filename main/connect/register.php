<?php
require_once '../../config.php';
$name = "";
$id = "";
$pass = "";
$name_error = "";
$id_error = "";
$pass_error = "";
$str = "";
$cnt = "";
$i = "";

if (isset($_COOKIE['id_name'])) {
    header('location:./index.php');
}

require_once './View/register.php';


if (isset($_POST['name']) && $_POST['name'] != '') {
    $name = $_POST['name'];
    // echo $_POST['name'] . '：名前入力確認OK</br>';
    if (isset($_POST['id']) && $_POST['id'] != '') {
        $id = $_POST['id'];
        // echo $_POST['id'] . '：ID入力確認OK</br>';
        if (isset($_POST['pass']) && $_POST['pass'] != '') {
            $pass = $_POST['pass'];
            // echo $_POST['pass'] . '：パスワード入力確認OK</br>';



            $str = substr(str_shuffle("ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz0123456789"), 0, 4);
            $cnt = mt_rand(10000, 100000);
            $hash = $_POST['pass'];
            while ($i < (int)$cnt) {
                $hash_now = $hash . $str;
                $hash = md5($hash_now);
                // echo $hash_now . '</br>';
                $i++;
            }


            $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
            mysqli_set_charset($link, 'utf8');
            mysqli_query(
                $link,
                "INSERT INTO m_member (`name`, `login_id`,`password`,`password_str`,`password_cnt`) VALUES('" . $name . "', '" . $id . "', '" . $hash . "', '" . $str . "', '$cnt');"
            );
            mysqli_close($link);
            header("Location: ./View/cmp_regi.html");
        } else {
            $pass_error = 'パスワードを入力してください';
        }
    } else {
        $id_error = 'IDを入力してください。';
    }
} else {
    $name_error = '名前を入力してください。';
}
