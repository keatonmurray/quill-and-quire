<?php

    class ContactController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('email');
            $this->load->model('contact');
        }

        public function store()
        {
            $this->form_validation->set_rules([
                [
                    'field' => 'author_first_name',
                    'label' => 'first name',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'author_last_name',
                    'label' => 'last name',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'author_email_address',
                    'label' => 'email address',
                    'rules' => 'trim|required|valid_email'
                ],
                [
                    'field' => 'author_phone_number',
                    'label' => 'phone number',
                    'rules' => 'trim|required'
                ],
                [
                    'field' => 'author_message',
                    'label' => 'message',
                    'rules' => 'trim|required'
                ]
            ]);

            if ($this->form_validation->run() === FALSE) {
                $response = [
                    'status' => 'error',
                    'message' => strip_tags(validation_errors())
                ];

            } else {

                $data = [
                    'author_first_name' => $this->input->post('author_first_name'),
                    'author_last_name' => $this->input->post('author_last_name'),
                    'author_email_address' => $this->input->post('author_email_address'),
                    'author_phone_number' => $this->input->post('author_phone_number'),
                    'author_message' => $this->input->post('author_message')
                ];
                
                $this->email->from($data['author_email_address'], $data['author_first_name'] . ' '. $data['author_last_name']);
                $this->email->to('murraykeaton422@gmail.com');
                $this->email->subject('Contact Form Submission');
                $this->email->message($data['author_message']);

                if ($this->email->send()) {
                    $response = [
                        'status' => 'success',
                        'message' => 'Email sent successfully.'
                    ];
                } else {
                    $response = [
                        'status' => 'error',
                        'message' => 'Failed to send email. ' . $this->email->print_debugger()
                    ];
                }
            }

            echo json_encode($response);
        }
    }
