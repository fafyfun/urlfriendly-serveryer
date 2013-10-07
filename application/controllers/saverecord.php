<?php
/**
 * Created by JetBrains PhpStorm.
 * User: user
 * Date: 5/11/13
 * Time: 6:38 PM
 * To change this template use File | Settings | File Templates.
 */
class Saverecord extends CI_Controller
{
    public function saver (){

        $answer1 = $_POST["ans1"];
        $answer2 = $_POST["ans2"];
        $answer3 = $_POST["ans3"];
        $answer4 = $_POST["ans4"];
        $answer5 = $_POST["ans5"];
        $answer6 = $_POST["ans6"];
        $answer7 = "-";
        $answer8 = "-";
        $answer9 = "-";
        $answer10 = $_POST["ans7"];
        $number = $_POST["num"];
        $email = $_POST["email"];
        $name = $_POST["name"];
        $lng = $_POST["lng"];

        $data = array(
            'question1' =>mysql_real_escape_string($answer1),
            'question2' =>mysql_real_escape_string($answer2),
            'question3' =>mysql_real_escape_string($answer3),
            'question4' =>mysql_real_escape_string($answer4),
            'question5' =>mysql_real_escape_string($answer5),
            'question6' =>mysql_real_escape_string($answer6),
            'question7' =>mysql_real_escape_string($answer7),
            'question8' =>mysql_real_escape_string($answer8),
            'question9' =>mysql_real_escape_string($answer9),
            'question10' =>mysql_real_escape_string($answer10),
            'name'=>mysql_real_escape_string($name),
            'email'=>mysql_real_escape_string($email),
            'phone'=>mysql_real_escape_string($number),
            'lng'=>mysql_real_escape_string($lng)

        );

        $this->load->model('save_model');
         $this->save_model->savedata($data);

         echo "true";
    }

    public function saver_new (){

        $answer1 = $_POST["ans1"];
        $answer2 = $_POST["ans2"];
        $answer3 = $_POST["ans3"];
        $answer4 = $_POST["ans4"];
        $answer5 = $_POST["ans5"];
        $answer6 = $_POST["ans6"];
        $answer7 = $_POST["ans7"];
        $answer8 = $_POST["ans8"];
        $answer9 = $_POST["ans9"];
        $answer10 = "-";
        $number = $_POST["num"];
        $email = $_POST["email"];
        $name = $_POST["name"];
        $lng = $_POST["lng"];

        $data = array(
            'question1' =>mysql_real_escape_string($answer1),
            'question2' =>mysql_real_escape_string($answer2),
            'question3' =>mysql_real_escape_string($answer3),
            'question4' =>mysql_real_escape_string($answer4),
            'question5' =>mysql_real_escape_string($answer5),
            'question6' =>mysql_real_escape_string($answer6),
            'question7' =>mysql_real_escape_string($answer7),
            'question8' =>mysql_real_escape_string($answer8),
            'question9' =>mysql_real_escape_string($answer9),
            'question10' =>mysql_real_escape_string($answer10),
            'name'=>mysql_real_escape_string($name),
            'email'=>mysql_real_escape_string($email),
            'phone'=>mysql_real_escape_string($number),
            'lng'=>mysql_real_escape_string($lng)

        );

        $this->load->model('save_model');
       $this->save_model->savedata($data);
            echo "true";

    }


}
