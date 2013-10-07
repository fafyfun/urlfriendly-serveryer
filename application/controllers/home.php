<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 5/21/13
 * Time: 11:00 PM
 * To change this template use File | Settings | File Templates.
 */
class Home extends CI_Controller
{
    public function index()
    {

        $this->load->view('mainpage');

    }
}
