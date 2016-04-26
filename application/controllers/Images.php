<?php
//Images.php
class Images extends CI_Controller {
       public function __construct()
        {
                parent::__construct();
                $this->load->model('news_image');
                
        }

        public function index()
        {
           
                    $data['images'] = $this->news_image->get_news();
                    $data['page_id'] = 'Images';
                    $data['title'] = 'News archive';

                    $this->load->view('templates/header', $data);
                    $this->load->view('images/index', $data);
                    $this->load->view('templates/footer');
           
        }
       public function view($slug = NULL)
        {
                $data['images'] = $this->news_image->get_news($slug);
                $data['page_id'] = 'News';
                if (empty($data['images']))
                {
                        show_404();
                }

                $data['title'] = "This is the image os $slug";

                $this->load->view('templates/header', $data);
                $this->load->view('images/view', $data);
                $this->load->view('templates/footer');
        }

        
}