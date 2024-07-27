<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class HomeController extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('home');
        }
        public function index($page = 'layout')
        {
            if ( ! file_exists(APPPATH.'views/main/'.$page.'.php'))
            {
                show_404();
            }
            
            $data['title'] = "Quill and Quire - Find your next favorite story today!";
            $data['books'] = $this->home->get_books();
            $data['homepage'] = $this->load->view('section/homepage', $data, TRUE);
            $data['on_sale'] = $this->load->view('section/on-sale', $data, TRUE);
            $data['about_us'] = $this->load->view('section/about-us', $data, TRUE);
            $data['contact_us'] = $this->load->view('section/contact-us', $data, TRUE);
            
            $this->load->view('main/' . $page, $data);
        }

    }