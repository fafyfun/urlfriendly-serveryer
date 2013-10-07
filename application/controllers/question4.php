<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 5/11/13
 * Time: 11:47 AM
 * To change this template use File | Settings | File Templates.
 */
class Question4 extends CI_Controller
{

    public function index($value1,$value2,$value3){

        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3
        );

        $this->load->view('question4',$data);
    }


}
