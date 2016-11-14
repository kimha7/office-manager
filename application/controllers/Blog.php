<?php
class Blog extends CI_Controller {

        public function index()
        {
                $this->load->view('Blogview');
        }
		public function comments()
        {
                echo 'Look at this!';
        }
}