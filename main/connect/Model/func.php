<?php

function sql_arry($HOST, $USER_ID, $PASSWORD, $DB_NAME, $table)
{
    $link = mysqli_connect($HOST, $USER_ID, $PASSWORD, $DB_NAME);
    $user_data = $link->query("SELECT * FROM $table");
    mysqli_close($link);
    foreach ($user_data as $key => $value) {
        $data[] = $value;
    };
    return $data;
}
