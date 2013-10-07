<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tam extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('tam/home');
	}

    public function question2($value){
        $data = array(
            'ans1' => $value
        );

        $this->load->view('tam/question2',$data);

        //$this->load->view('home');
    }

    public function question3($value1,$value2){
        $data = array(
            'ans1' => $value1,
            'ans2'=> $value2
        );


        $this->load->view('tam/question3',$data);
    }

    public function question4($value1,$value2,$value3){
        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3
        );

        $this->load->view('tam/question4',$data);
    }

    public function question5($value1,$value2,$value3,$value4){
        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4
        );


        $this->load->view('tam/question5',$data);
    }

    public function question6($value1,$value2,$value3,$value4,$value5){
        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4,
            'ans5'=>$value5
        );


        $this->load->view('tam/question6',$data);
    }

    public function question7($value1,$value2,$value3,$value4,$value5,$value6){
        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4,
            'ans5' => $value5,
            'ans6' => $value6
        );


        $this->load->view('tam/question7',$data);
    }
    public function question8($value1,$value2,$value3,$value4,$value5,$value6,$value7){
        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4,
            'ans5' => $value5,
            'ans6' => $value6,
            'ans7' => $value7
        );


        $this->load->view('tam/question8',$data);
    }
    public function question9($value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8){
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


        $this->load->view('tam/question9',$data);
    }

    public function question10($value1,$value2,$value3,$value4,$value5,$value6){
        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4,
            'ans5' => $value5,
            'ans6' => $value6
        );


        $this->load->view('tam/question10',$data);
    }

    public function newuserdetails($value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8,$value9){
        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4,
            'ans5' => $value5,
            'ans6' => $value6,
            'ans7' => $value7,
            'ans8' => $value8,
            'ans9' => $value9,
        );


        $this->load->view('tam/newuserdetails',$data);

    }

    public function userdetails($value1,$value2,$value3,$value4,$value5,$value6,$value7){
        $data = array(
            'ans1' => $value1,
            'ans2' => $value2,
            'ans3' => $value3,
            'ans4' => $value4,
            'ans5' => $value5,
            'ans6' => $value6,
            'ans7' => $value7,
        );


        $this->load->view('tam/userdetails',$data);
    }


}

/* End of file tam.php */
/* Location: ./application/controllers/tam.php */