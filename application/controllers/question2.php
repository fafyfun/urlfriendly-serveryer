<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 5/9/13
 * Time: 11:21 PM
 * To change this template use File | Settings | File Templates.
 */
class Question2 extends CI_Controller
{
    public function index($value)
    {
        $data = array(
          'ans1' => $value
        );

        $this->load->view('question2',$data);

        //$this->load->view('home');
    }
}
