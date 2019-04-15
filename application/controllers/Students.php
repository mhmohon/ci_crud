<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Students extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); //Must write
            $this->load->model('student');
        }

        public function index()
        {
            $data = [];
            $data['all_students'] = $this->student->get_all();
            $data['content'] = $this->load->view('template/backend/manage_student',$data,true);
            $this->load->view('template/master', $data);

        }

        public function create()
        {
            $data = [];
            $data['content'] = $this->load->view('template/backend/add_student','',true);
            $this->load->view('template/master', $data);
            
        }

        public function save()
        {
            $data =[];
            $data['name'] = $this->input->post('student_name', true);
            $data['phone'] = $this->input->post('student_phone', true);
            $data['roll'] = $this->input->post('student_roll', true);
            $this->student->insert($data);

            redirect(base_url('manage-student'));
        }

        public function edit($id)
        {
            $data=[];
            $data['student_info'] = $this->student->get_by_id($id);
            $data['content'] = $this->load->view('template/backend/edit_student',$data,true);
            $this->load->view('template/master', $data);

        }

        public function update($id)
        {
            $data=[];
            $data['name'] = $this->input->post('student_name', true);
            $data['phone'] = $this->input->post('student_phone', true);
            $data['roll'] = $this->input->post('student_roll', true);

            $this->student->update($id, $data);

            redirect(base_url('manage-student'));
        }
    }
?>