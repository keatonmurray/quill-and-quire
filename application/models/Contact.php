<?php

    class Contact extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
            $this->load->helper('url');
        }

        public function send_message()
        {
            $data = [
                'author_first_name' => $this->input->post('author_first_name'),
                'author_last_name' => $this->input->post('author_last_name'),
                'author_email_address' => $this->input->post('author_email_address'),
                'author_phone_number' => $this->input->post('author_phone_number'),
                'author_message' => $this->input->post('author_message')
            ];

            return $this->db->insert('messages', $data);
        }
    }