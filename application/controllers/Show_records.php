<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 5/20/13
 * Time: 12:16 AM
 * To change this template use File | Settings | File Templates.
 */
class Show_records extends CI_Controller
{
    public function index()
    {
        $this->load->model('save_model');
       $table = $this->save_model->show_records();
$data['table']= $table;
        //print_r(count($table));
         $this->load->view('showrecords',$data);

        //$this->load->view('home');
    }


}
