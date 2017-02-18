<?php


class News
{
    private $title;
    private $time;
    private $content;

    public function __construct($title)
    {
        $this->time = date('H:i  Y.m');
        $this->title = $title;
    }


    public function getTime()
    {
        return $this->time;
    }

    public function getTitle()
    {
        return $this->title;
    }


    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}