<?php
require_once '../../config.php';
require_once './Model/func.php';
$error = '';
$i = '';
$str = '';
$cnt = '';
$hash = '';
$hash_now = '';
$g_pass = '';

if (isset($_COOKIE['id_name'])) {
    header('location:./index.php');
}

if (isset($_POST['new'])) {
    header('location:./register.php');
};
if (isset($_POST['add'])) {
    if ($_POST['id'] != '' && $_POST['pass'] != '') {
        $error = 'ログイン失敗';
        $id = $_POST['id'];
        $g_pass = $_POST['pass'];
        // echo '入力されたID：' . $id . '</br>';
        // echo '入力されたPASS：' . $g_pass . '</br>';
        $user_data = sql_arry(HOST, USER_ID, PASSWORD, DB_NAME, 'm_member');
        // print_r('<pre>');
        // print_r($user_data);
        // print_r('</pre>');
        foreach ($user_data as $key => $value) {
            if ($id == $value['login_id']) {
                $str = $value['password_str'];
                $cnt = $value['password_cnt'];
                $pass = $value['password'];
                // echo 'IDが見つかりました</br>';
                // echo 'str：' . $str . '</br>';
                // echo 'cnt：' . $cnt . '</br>';
                // echo 'pass：' . $pass . '</br>';


                $hash = $g_pass;
                while ($i < (int)$cnt) {

                    $hash_now = $hash . $str;
                    $hash = md5($hash_now);
                    // echo $hash_now . '</br>';
                    $i++;
                }
                // echo 'pass：' . $hash . '</br>';
                if ($pass == $hash) {
                    $error  =  'ログイン完了';
                    setcookie('id_name', $value['name'], time() + 600);
                    header('location:./index.php');
                    break;
                };
            };
        };
    } else {
        $error = '入力されていません';
    };
};
// echo $error . '</br>';
require_once './View/login.php';
