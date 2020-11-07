<?php namespace App\Libraries;

class PixabayAPI
{
    private $cURLConnection = null;
    private $key = null;
    
    public function __construct()
    {
        $this->cURLConnection = curl_init();
        $this->key = "18860435-3f6ac116c6fe19a8193fb5053";
    }

    public function test()
    {
        return 'hello';
    }
    
    public function getImages($keyword)
    {
        curl_setopt($this->cURLConnection, CURLOPT_URL, 'https://pixabay.com/api/?key='.$this->key.'&q='.$keyword.'&image_type=photo&pretty=true');
        curl_setopt($this->cURLConnection, CURLOPT_RETURNTRANSFER, true);
        
        $imagesList = curl_exec($this->cURLConnection);
        curl_close($this->cURLConnection);

        return json_decode($imagesList);
    }

    public function getVideos($keyword)
    {
        curl_setopt($this->cURLConnection, CURLOPT_URL, 'https://pixabay.com/api/videos/?key='.$this->key.'&q='.$keyword.'&image_type=photo&pretty=true');
        curl_setopt($this->cURLConnection, CURLOPT_RETURNTRANSFER, true);
        
        $videosList = curl_exec($this->cURLConnection);
        curl_close($this->cURLConnection);

        return json_decode($videosList);
    }

}

