<?php
function isGet()
{
    if (!empty($_GET['title']&& $_GET['content'])) {
        return true;
    } else {
        return false;
    }
}
function getFilesId()
{
    $path = 'news';
    $dir = opendir("$path");
    $i = 1;
    while (false !== ($file = readdir($dir))) {
        if (strpos($file, '.json', 1)) {
            $i++;
        }
    }
    return $i;
}


function createNews()
{
    if (isGet()) {

        $id = getFilesId();
        $content = $_GET['content'];
        $title = $_GET['title'];

        $news['time'] = date('H:i  d.m');
        $news['content'] = ($content);
        $news['title'] = ($title);

        $json = json_encode($news, JSON_UNESCAPED_UNICODE);

        $f = fopen("news/$id.json", 'w');
        fwrite($f, $json);
        fclose($f);
    }
}