<?php

    class ContactController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }

        //send email
        public function store()
        {
            
        }
    }