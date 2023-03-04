<?php

class Users extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("user_model");
    }

    public function login_form(){
        $this->load->view('login_v');
    }

    public function login(){

        $this->load->library("form_validation");

        $this->form_validation->set_rules("email","E-Posta","required|trim|valid_email");
        $this->form_validation->set_rules("password","Şifre","required|trim");

        $this->form_validation->set_message([
            "required" => "{field} Boş Bırakılamaz",
            "valid_email" => "Geçersiz E-Posta",
        ]);

        if($this->form_validation->run() === FALSE){
            $viewData = new stdClass();
            $viewData->form_error = true;
            $this->load->view('login_v',$viewData);
        }else{
            
            $user = $this->user_model->get([
                'email' => $this->input->post("email"),
                'password' => md5($this->input->post("password")),
            ]);

            if($user){

            }else{
                
            }
        }

        
    }
}