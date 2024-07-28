<?php

    class ContactController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('contact');
        }

        public function store()
        {
            $validate = $this->form_validation->set_rules([
                [
                    'field' => 'author_first_name',
                    'label' => 'First name',
                    'rules' => 'required'
                ],
                [
                    'field' => 'author_last_name',
                    'label' => 'Last name',
                    'rules' => 'required'
                ],
                [
                    'field' => 'author_email_address',
                    'label' => 'Email address',
                    'rules' => 'required|valid_email'
                ],
                [
                    'field' => 'author_phone_number',
                    'label' => 'Phone number',
                    'rules' => 'required'
                ],
                [
                    'field' => 'author_message',
                    'label' => 'Message',
                    'rules' => 'required'
                ]
            ]);

            if ($this->form_validation->run() === FALSE) {
                $response = [
                    'status' => 'error',
                    'message' => validation_errors()
                ];
            } else {
                if ($this->contact->send_message()) {
                    $response = [
                        'status' => 'success',
                        'message' => 'Message sent successfully'
                    ];
                } 
            }
            
            echo json_encode($response);
        }
    }