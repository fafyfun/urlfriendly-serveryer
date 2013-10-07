<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 5/11/13
 * Time: 2:05 PM
 * To change this template use File | Settings | File Templates.
 */
class Userdetails extends CI_Controller
{

    public function index($value1,$value2,$value3,$value4,$value5,$value6){

        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4,
            'ans5' => $value5,
            'ans6' => $value6,
        );


        $this->load->view('userdetails',$data);
    }


}
