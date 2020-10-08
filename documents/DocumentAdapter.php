<?php
class DocumentAdapter {
    private $document;
    public function __construct($doc)
    {
        $this->document=$doc;
    }
    public function createHeader(){
        $title = $this->document->getTitle();
        $author =$this->document->getAuthor();

        return "<h1>" .$title." ". "create by " .$author."</h1>";
    }
    public function createPreview($length){
        return substr($this->document->getContent(),0,$length);
    }
}



?>