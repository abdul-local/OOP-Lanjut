<?php

class Blog extends BaseDocument {
    private $url="";
    public function __construct($title,$author,$content,$url)
    {
        $this->title=$title;
        $this->author=$author;
        $this->content=$content;
        $this->url=$url;
    }
    public function getUrl(){
        return $this->url;
    }
}



?>