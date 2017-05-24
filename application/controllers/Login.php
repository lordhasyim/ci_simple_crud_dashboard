<?php
/**
 * Created by PhpStorm.
 * User: hasyim
 * Date: 5/24/17
 * Time: 11:37 AM
 */
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'required|');
        $this->form_validation->set_rules('password', 'password', 'required|password');

        if ($this->form_validation->run($this) == FALSE ){
            $this->load->view('login');
        } else {
            $valid_user = $this->Users_model->checkCredential();

            if ($valid_user == FALSE) {
                //$this->session->set_flashdata('error', 'Wrong Username/Password');
                $this->form_validation->set_message('Wrong username and password');
                redirect('Login');
            } else {
                // if username password match
                //$this->session->set_userdata('username', $valid_user->username);
                redirect('Dashboard');
            }
        }


        $this->load->view('login');
    }



}