<?php


$this->load->view($this->config->item('theme').'header');

?>
<h2><?php echo $title; ?></h2>

<?php echo $news_item['text'];




$this->load->view($this->config->item('theme').'footer');

?>