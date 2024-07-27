<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }
        public function index($page = 'layout')
        {
            if ( ! file_exists(APPPATH.'views/main/'.$page.'.php'))
            {
                show_404();
            }

            $data['title'] = "Quill and Quire - Find your next favorite story today!";
            $data['homepage'] = $this->load->view('section/homepage', NULL, TRUE);
            $data['on_sale'] = $this->load->view('section/on-sale', NULL, TRUE);
            $data['about_us'] = $this->load->view('section/about-us', NULL, TRUE);
            $data['contact_us'] = $this->load->view('section/contact-us', NULL, TRUE);
            
            $this->load->view('main/'.$page, $data);
        }
    }