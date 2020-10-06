<?php
class StringMutator {
    protected $word;
    public function __construct($word)
    {
        $this->word=$word;
        
    }
    public function bold(){
        $this->word = '<b>'.$this->word.'</b>';
        // mengembalikan nilai object kemudian dioprasikan lagi ke method selanjutnya
        return $this;

    }
    public function italic(){
        $this->word = '<i>'.$this->word.'</i>';
        // mengembalikan nilai object kemudian dioprasikan lagi ke method selanjutnya
        return $this;

    }
    public function underscore(){
        // mengembalikan nilai object kemudian di oprasikan lagi ke method selanjutnya
        $this->word = '<u>'.$this->word.'</u>';

        return $this;  
    }
    public function get(){
        // mengembalika ilai akhirnya 
        return $this->word;
    }

}
$word='saya belajar Method Chaining ';
$string_mutator = new StringMutator($word);

$result = $string_mutator->bold()
->get();
echo $result."<br>";

$result = $string_mutator->bold()
->italic()
->get();
echo $result."<br>";

$result = $string_mutator->bold()
->italic()
->underscore()
->get();
echo $result."<br>";




?>