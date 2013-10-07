<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 5/11/13
 * Time: 10:39 AM
 * To change this template use File | Settings | File Templates.
 */
class Question3 extends CI_Controller
{
    public function index($value1,$value2){

        $data = array(
            'ans1' => $value1,
            'ans2'=> $value2
        );


        $this->load->view('question3',$data);
    }

}
