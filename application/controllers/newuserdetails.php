<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 5/11/13
 * Time: 2:05 PM
 * To change this template use File | Settings | File Templates.
 */
class Newuserdetails extends CI_Controller
{

    public function index($value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8){

        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4,
            'ans5' => $value5,
            'ans6' => $value6,
            'ans7' => $value7,
            'ans8' => $value8,
        );


        $this->load->view('newuserdetails',$data);
    }

}
