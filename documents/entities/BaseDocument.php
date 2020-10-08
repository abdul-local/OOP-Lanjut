<?php

class BaseDocument {
    protected $title = "";
    protected $author="";
    protected $content="";

    public function getTitle(){
        return $this->title;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getContent(){
        return $this->content;
    }

}





?>