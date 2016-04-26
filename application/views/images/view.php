<?php


$this->load->view($this->config->item('theme').'header');

?>

<?php foreach ($images as $news_item): ?>
<?php
 $size = 'm';
    $photo_url = '
    http://farm'. $news_item->farm . '.staticflickr.com/' . $news_item->server . '/' . $news_item->id . '_' . $news_item->secret . '_' . $size . '.jpg';
     echo "<img title='" . $news_item->title . "' src='" . $photo_url . "' />";
     
?>

<?php endforeach; ?>
<?php 
$this->load->view($this->config->item('theme').'footer');
?>