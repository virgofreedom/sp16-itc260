
<?php


$this->load->view($this->config->item('theme').'header');

?>


<?php
/*
flickr-api-test.php

original from: http://lifesforlearning.com/connecting-to-the-flickr-api-with-php/

*/

$api_key = 'dac8933790fed6e92529bac3a16da2c4';
$tags = 'bears,polar';

$perPage = 25;

$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
$url.= '&api_key=' . $api_key;
$url.= '&tags=' . $tags;
$url.= '&per_page=' . $perPage;
$url.= '&format=json';
$url.= '&nojsoncallback=1';
 
$response = json_decode(file_get_contents($url));
$pics = $response->photos->photo;
 
/*
echo "<pre>";
echo var_dump($response);
echo "</pre>";
die;
*/
 
foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
 
}




$this->load->view($this->config->item('theme').'footer');

?>