<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 13:26
 */
class Home extends CI_Controller
{
    /**
     * @return object
     */
    public function index()
    {
        $this->load->view('layout/header_view.php');
        $this->load->view('home_view');
    }
    public function test()
    {
        $this->load->view('layout/header_view.php');
        $this->load->view('test_view');
        $this->load->view('layout/footer_view.php');
    }

}