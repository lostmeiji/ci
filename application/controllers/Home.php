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
        $this->load->view('home_view');
    }


}