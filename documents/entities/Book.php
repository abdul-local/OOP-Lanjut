<?php
class Book extends BaseDocument {
    public function __construct($title,$author,$content)
    {
        $this->title = $title;
        $this->$author = $author;
        $this->content = $content;
    }
}



?>