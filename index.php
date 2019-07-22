<?php
include "connect.php";
include "comment.php";

$comments = array();
$sort_fields = [
    'name' => 'name ASC',
    'email' => 'email ASC',
    'date' => 'date DESC',
];

$sort = isset($sort_fields[$_GET['sort']]) ? $sort_fields[$_GET['sort']] : $sort_fields['date'];

$result = mysqli_query($link, "SELECT * FROM comment ORDER BY $sort");
while ($row = mysqli_fetch_assoc($result)) {
    $comments[] = new Comment($row);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Комментарии</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

<form action="" method="GET" id="formForSorted">
    <p>Сортировать по:</p>
    <select name="sort" method="GET" id="selectSort">
        <option value="name">Имени</option>
        <option value="email">E-mail</option>
        <option selected value="date">Дате добавления</option>
        <input type="submit" id="submit" value="Сортировать">
    </select>
</form>

<div id="addCommentContainer">
    <form id="addCommentForm" method="POST" action="">
        <label for="name">Имя</label>
        <input type="text" name="name" id="name">

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">

        <label for="messageBody">Текст сообщения</label>
        <textarea name="messageBody" id="messageBody" cols="30" rows="10"></textarea>
        <div class="buttons">
            <button id="preview" value="">Предворительный просмотр</button>
            <input type="submit" id="submit" value="Отправить">

        </div>
    </form>
</div>
<?php
foreach ($comments as $c) {
    echo $c->showComment();
}
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script>
    //изменение значение в форме сортировки, значение берётся из url
    var url = window.location;
    var captured = /sort=([^&]+)/.exec(url)[1];
    $("#selectSort").val(captured);

</script>
</body>
</html>
