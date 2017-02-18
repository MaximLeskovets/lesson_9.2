<?php
    require_once 'list.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
</head>
<body>

<b>
    <?php
    echo $first->getTitle();
    ?>
</b><br/>
<?php
    echo $first->getTime();
?>
<br/>
<?php
    echo $first->getContent();
?>
</body>
</html>