<?php
// praktek Tanpa Proxy
interface TwitterInterface {
    public function getTweets();
}
class Twitter implements TwitterInterface {

    public function getTweets()
    {
        echo " Conneting to server ..."."<br>";
        echo " Getting tweets ..."."<br>";
        echo " Done..."."<br>";

        $outputSample = [
            [
                'username'=>'@abdul',
                'tweet'=> 'Selamat pagi',
            ],
            [
                'username'=>'@aya',
                'tweet'=>'Selamat mala !',
            ],
        ];

        return $outputSample;
    }
}
class Redis {
    public function set($key,$value,$expiredTime){
        echo"Saving data to cache...."."<br>";
    }
    public function get($key){
        echo "Returning data from cache..."."<br>";
    }
}
class TwitterProxy implements TwitterInterface{

    protected $api;
    protected $cache;

    public function __construct(Twitter $twitter, Redis $redis)
    {
        $this->api = $twitter;
        $this->cache=$redis;
    }


    public function getTweets()
    {
        // cek dulu sudah ada data yang di cache ?
        // Ceritanya key nya adalah "Tweets"
        if($cached = $this->cache->get('Tweets')){
            // keluaran output simulasi
            echo " Getting from cache ..."."<br>";
            echo " Getting tweets ...","<br>";
            echo " Done .."."<br>";
            return $cached;
        }
        $result = $this->api->getTweets();

        $this->cache->set('Tweets',$result,3600);
        return $result;
        
    }
}
// instansiasi
$Twitter = new TwitterProxy(new Twitter, new Redis);
print_r($Twitter->getTweets());


?>