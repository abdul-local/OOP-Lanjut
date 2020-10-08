<?php
spl_autoload_register(function($class){
    include "documents/entities/".$class.".php";

});
include "documents/DocumentAdapter.php";

$blog = new Blog("Hello world","Abdul","ini meruapakan sebuah konten","http://myblog.net/hello-word");
    
$documnetAdapter=new DocumentAdapter($blog);
echo $documnetAdapter->createHeader();
echo $documnetAdapter->createPreview(100);

$book = new Book("Abdul sang penakluk covid","abdul elektro","ini buku bercerita tentang abdul");
$documnetAdapter=new DocumentAdapter($book);
echo $documnetAdapter->createHeader();
echo $documnetAdapter->createPreview(100);

$paper = new Paper("Ini Title Web abdul","abdul elktro","Ini mrupakan sebuah content","hai I am electrical enggineering and i work sofware developer");
$documnetAdapter = new  DocumentAdapter($paper);
echo $documnetAdapter->createHeader();
echo $documnetAdapter->createPreview(100);

?>