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
<?php
    for ($j = 1; $j<$countNews;$j++)
    {
?>

<b>
    <?php
    echo $news[$j]->getTitle();
    ?>
</b><br/>
<?php
    echo $news[$j]->getTime();
?>
<br/>
<?php
    echo $news[$j]->getContent();
?>
        <br/>
<?php
    }
?>
</body>
</html>