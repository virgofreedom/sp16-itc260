<?php
//Pages.php
class Images extends CI_Controller {

        public function index()
        {
             

                
                $data['page_id'] = "My Clever Page ID"; 
                //$this->load->view('templates/header', $data);
                $this->load->view('images/index', $data);
                //$this->load->view('templates/footer', $data);
        }
}