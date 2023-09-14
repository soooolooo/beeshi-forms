<?php
require 'dbconnect.php';

function submit ($conn, $name, $sid, $isstudent, $formid, $answers, $title){
    $totalsql = "INSERT INTO answers (form, f_name, s_id, is_student, ";

    for ($c = 1; $c <= count($answers); $c++){
        if($c == count($answers)){
            $totalsql = $totalsql."a".$c.")";
        }
        else{
            $totalsql = $totalsql . "a".$c.", ";
        }
    }
    $totalsql = $totalsql." VALUES ('".$formid."', '".$name."', '".$sid."', '".$isstudent."', ";
    for ($d = 1; $d <= count($answers); $d++){
        $f = $d - 1;
        if ($d == count($answers)){
            $totalsql = $totalsql."'".$answers[$f]."');";
        }
        else{
            $totalsql = $totalsql."'".$answers[$f]."', ";
        }
    }
    mysqli_query($conn, $totalsql);
    mysqli_error($conn);
    header('location: success.php');
    mysqli_close($conn);
    session_start();
    $_SESSION["name"] = $name;
    $_SESSION["title"] = $title;
    exit();
}

?>