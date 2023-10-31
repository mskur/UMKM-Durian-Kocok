<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutDURCOK extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelLogin');
        $this->modelLogin->protectVerifyLoginAdminController();
    }

    public function aboutDurianKocok()
    {
        $data = array(
            'title' => 'About Durian Kocok',
        );
        $this->load->view('Admin/viewAbout', $data);
    }
    
}