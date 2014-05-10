<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('homepage/homepage_model');
    }

    function index() {
         $data['title'] = 'D\'Crepes';
        
         $this->template
        ->set_layout('backend/index')
        ->build('backend/index', isset($data) ? $data : NULL);
    }

}
