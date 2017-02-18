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

function utf8_urldecode($str) {
    $str = preg_replace("/%u([0-9a-f]{3,4})/i","&#x\\1;",urldecode($str));
    return html_entity_decode($str,null,'UTF-8');;
}

function createNews()
{
    if (isGet()) {

        $id = getFilesId();
        $content = $_GET['content'];
        $title = $_GET['title'];

        $news['time'] = date('H:i  Y.m');
        $news['content'] = utf8_urldecode($content);
        $news['title'] = utf8_urldecode($title);

        $json = json_encode($news, JSON_UNESCAPED_UNICODE);

        $f = fopen("news/$id.json", 'w');
        fwrite($f, $json);
        fclose($f);
    }
}