<?php
include "connect.php";
include "comment.php";
$arr = $_POST;
$validates = Comment::validate($arr);
if ($validates) {
    $result = mysqli_query($link, "INSERT INTO comment(name, email, messageBody) VALUES ('" . $arr['name'] . "', '" . $arr['email'] . "', '" . $arr['messageBody'] . "')");
    $arr['date'] = date("Y-m-d H:i:s",time());
    $insertedComment = new Comment($arr);
    echo json_encode(array('success'=>1, 'html'=>$insertedComment->showComment()));
    die;
} else {
    echo '{"success":0,"errors":'.json_encode($arr).'}';
    die;
}




