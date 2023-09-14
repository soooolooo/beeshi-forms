<?php
require 'dbconnect.php';

if (isset($_POST["submit"])){
    require 'functions/submit.php';
    $name;
    $sid;
    $isstudent;
    $title = $_POST['title'];
    if (strlen($_POST["name"]) != 0){
        $name = $_POST["name"];
    }
    else{
        $name = 'مجهول';
    }

    if (strlen($_POST['sid']) != 0){
        $sid = $_POST['sid'];
        $isstudent = 1;
    }
    else{
        $sid = 0;
        $isstudent = 0;
    }
    $formid = $_POST['formid'];
    
    $answers = array();
    for($h = 1; $h <= 7; $h++){
        $a = 'answer'.$h;
        $b = $h - 1;
        $answers[$b] = $_POST[$a];
    }

    submit($conn, $name, $sid, $isstudent, $formid, $answers, $title);
}

?>