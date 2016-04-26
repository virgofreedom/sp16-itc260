<?php
//News_image.php
class News_image extends CI_Model {
            
        public function get_news($slug = FALSE)
        {
            if ($slug === FALSE)
            {
                
            $tags = 'bear';
            }else{
                $tags = $slug;
            }
            
            $api_key = 'dac8933790fed6e92529bac3a16da2c4';
            $perPage = 25;
            $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
            $url.= '&api_key=' . $api_key;
            $url.= '&tags=' . $tags;
            $url.= '&per_page=' . $perPage;
            $url.= '&format=json';
            $url.= '&nojsoncallback=1';
            
            $response = json_decode(file_get_contents($url));
            return $pics = $response->photos->photo;   
        }
}