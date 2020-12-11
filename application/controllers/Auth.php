<?php
    class Auth extends CI_Controller {
/*
This Function will show register page
*/
        public function register(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('fname','First Name','required');
            $this->form_validation->set_rules('lname','LastName','required');
            $this->form_validation->set_rules('pwd','Password','required');
            $this->form_validation->set_rules('phone','Phone','required');
            $this->form_validation->set_rules('email','Email Id','required');

            if($this->form_validation->run() == false){
                $this->load->view('register');
            } else {
                //Data will save in db
                //True
                $this->load->model('Auth_model');
                $formArray = array();
                $formArray['fname'] = $this->input->post('fname');
                $formArray['lname'] = $this->input->post('lname');
                $formArray['password'] = $this->input->post('pwd');
                $formArray['phone'] = $this->input->post('phone');
                $formArray['email'] = $this->input->post('email');
                $formArray['created_at'] = date('Y-m-d H:i:s');
                $this->Auth_model->create($formArray);
                $this->session->set_flashdata('msg','Account has been created successfully');
                redirect(base_url().'index.php/Auth/register');
            }
            
        }
    }



?>