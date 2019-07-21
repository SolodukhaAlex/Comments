<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password ='';
    $dbname = 'Comments';
    $link = new mysqli($db_host, $db_user, $db_password) or die('Не могу установить соединение с базой данных');

    mysqli_select_db ($link, $dbname);


