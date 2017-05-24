<?php
/**
 * Created by PhpStorm.
 * User: hasyim
 * Date: 5/24/17
 * Time: 11:59 AM
 */
class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        //template
        // header
        $this->load->view('themes/header');
        // nav, top menu
        $this->load->view('themes/nav');
        //nav, sidebar
        $this->load->view('themes/sidebar');
        // groups index content
        $this->load->view('dashboard');
        //footer
        $this->load->view('themes/footer');
    }

}