<?php
    require_once "function.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админка</title>
</head>
<body>

<form method="get">
    <label>Название новости</label>
    <input name="title" type="textarea"><br/>
    <label>Контент</label>
    <input name="content" type="textarea"><br/>
    <button>Создать новость</button>
</form>
    <?php
        createNews();
    ?>
</body>
</html>