<?php

class Users extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("user_model");
    }

    public function index(){

        $user_list = $this->session->userdata("user_list");
        if($user_list) { 

            $user = reset($user_list);

            redirect(base_url("anasayfa/".md5($user->email)));

        } else {
            redirect(base_url("giris"));
        }
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
                if($this->session->userdata("user_list")){
                    $user_list = $this->session->userdata("user_list");
                } else {
                    $user_list = array();
                }
                $user_list[md5($user->email)] = $user;

                $this->session->set_userdata("user_list",$user_list);
                print_r($user_list);
                redirect(base_url("anasayfa/".md5($user->email)));
            }else{
                $this->load->view('login_v');
            }
        }
        
    }

    public function logout($id){

        $user_list = $this->session->userdata("user_list");

        unset($user_list[$id]);

        $this->session->set_userdata("user_list",$user_list);

        redirect(base_url('giris'));
    }

    public function sil(){
        $this->session->unset_userdata("user_list");
    }

    public function list(){
        print_r($this->session->userdata("user_list"));
    }
}