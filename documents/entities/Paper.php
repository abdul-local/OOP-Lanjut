<?php
class Paper extends BaseDocument {
    private $abstracts = "";
    public function __construct($title,$author,$content,$abstracts)
    {
        $this->title = $title;
        $this->author=$author;
        $this->content=$content;
        $this->abstracts=$abstracts;

    }
    public function getAbstracts(){
        return $this->abstracts;
    }
}



?>