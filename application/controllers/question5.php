<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 5/11/13
 * Time: 1:23 PM
 * To change this template use File | Settings | File Templates.
 */
class Question5 extends CI_Controller
{
    public function index($value1,$value2,$value3,$value4){

        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4
        );


        $this->load->view('question5',$data);
    }
}
