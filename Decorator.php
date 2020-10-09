<?php

// sebuah class komentar. yang meiliki properti

class Comment {
    private $name;
    private $content = 'Senyum manis :)';

    // Mempunyai getter message, baca lagi tentang getter pada materi setter/getter
    public function getContent(){
        
        // Mengemblikan data pesan apa adanya
        return $this->content;
    }
}
class EmoticonParser {
    private $content;
    public function __construct($object)
    {
        $this->content = $object;
    }
    private function parseEmoticon($content)
    {
        // Ini hanya contoh ya, harusnya parser Emoticon lebih rumit dari ini. Kita hanya string replace senyuman jadi gambar aja.
        return str_replace(":)", "<img width='40' src='https://findicons.com/files/icons/360/emoticons/128/smile_1.png' />", $content);
    }
   
    public function getContent(){

        return $this->parseEmoticon($this->content->getContent());
    }
   

}
$comment= new Comment;

echo 'Sebelum Parsing  '.' '. $comment->getContent()."<br>";

$emotionparse = new EmoticonParser($comment);
echo 'Setelah Parsing '.' '.$emotionparse->getContent()."<br>";


?>