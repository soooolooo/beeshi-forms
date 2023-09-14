<?php
include 'head.php';
include 'header.php';
?>

<div class="asubmit-container">
<?php
    if (isset($_POST['show'])){
        $id = $_POST['id'];
        include_once 'dbconnect.php';
        $sql = "SELECT * from answers WHERE form = '$id' ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
            for ($p = 1; $p <= $resultCheck; $p++){
                $row = $result->fetch_assoc();
                echo '
                    <div class="asubmit">
                        <h2>الزائر #'.$row['ID'].'</h2>
                ';
                if ($row['is_student'] == 0){
                    echo '<p>هل هو من الجامعة؟: لا</p>';
                }
                else{
                    echo '<p>هل هو من الجامعة؟: نعم</p>';
                    echo '<p>الرقم الجامعي: '.$row['s_id'].'<p>';
                }
                echo '
                    <details>
                        <summary>عرض الأجوبة</summary>
                ';
                for ($m = 1; $m <= 10; $m++){
                    $n = 'a'.$m;
                    if (isset($row[$n])){
                      echo '<p>السؤال #'.$m.': ';
                        if (strlen($n) != 0){
                            if ($row[$n] == 1){
                                echo 'اعارض بشدة';
                            }
                            else if ($row[$n] == 2){
                                echo 'لا اوافق';
                            }
                            else if ($row[$n] == 3){
                                echo 'محايد';
                            }
                            else if ($row[$n] == 4){
                                echo 'اوافق';
                            }
                            else if ($row[$n] == 5){
                                echo 'اوافق بشدة';
                            }
                        } 
                    }
                    else{
                        echo '';
                    }
                    echo '</p>';
                }
                echo '
                        </details>
                        </div>
                    ';
            }
        }
        else{
            echo '
                <div class="mgreetings">
                <h1>عفواً لا توجد اي نتائج للاستبيان هذا حالياً.</h1>
                </div>
            ';
        }
    }
    else{
        include_once 'dbconnect.php';
        $sql = "SELECT * from forms";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
            for ($v = 1; $v <= $resultCheck; $v++){
                $row = $result->fetch_assoc();
                echo '
                    <div class="asubmit">
                        <form action="admin.php" method="POST">
                            <h2>استبيان '.$row['title'].'.</h2>
                            <input type="hidden" name="id" value="'.$row['ID'].'">
                            <button type="submit" name="show">استطلاع</button>
                        </form>
                    </div>
                ';
            }
            
        }
    }
?>
</div>

<?php
include 'footer.php';
?>