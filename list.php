<?php
require_once 'News.php';
require_once 'function.php';

$countNews = getFilesId();
for($i=1;$i<$countNews;$i++) {
    $file = file_get_contents("news/$i.json");
    $title = substr(strstr(strstr($file, "title", false), "}", true), 8, -1);
    $content = substr(strstr(strstr($file, "content", false), ",", true), 10, -1);

    $first= new News("$title");
    $first->setContent($content);
}