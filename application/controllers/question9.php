<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fawaz
 * Date: 5/17/13
 * Time: 3:03 PM
 * To change this template use File | Settings | File Templates.
 */
class Question9 extends CI_Controller
{
    public function index($value1,$value2,$value3,$value4,$value5,$value6,$value7){

        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4,
            'ans5' => $value5,
            'ans6' => $value6,
            'ans7' => $value7
        );


        $this->load->view('question9',$data);
    }
}
