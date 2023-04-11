<?php
require_once '../../config.php';

$Cookie = '';
$data = '';

if (isset($_COOKIE['id_name'])) {
    $c_name = 'ようこそ' . $_COOKIE['id_name'] . 'さん';
    require_once './View/index.php';
} else {
    // セッションデータがが無い際に飛ばす処理。
    header('location:./register.php');
    exit;
}

if (isset($_POST['logout'])) {
    setcookie('id_name', '', time() - 600);
    header('location:./login.php');
    exit();
}
