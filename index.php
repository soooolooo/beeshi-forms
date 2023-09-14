<?php
include 'head.php';
include 'header.php';
include_once 'dbconnect.php';
?>

<div class="mgreetings">
    <h1>مرحبا بك في موقع استبياناتي</h1>
    <p>تم ارسال لك هذا الرابط لتعبئة الاستبيان المطلوب لاكمال البحث العلمي الخاص بي</p>


<?php
    $sql = "SELECT ID, title from forms";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0){
        for($e = 1; $e <= $resultCheck; $e++){
            $row = $result->fetch_assoc();
            echo '
                <div class="asubmit">
                    <h2>استبيان '.$row['title'].'</h2>
                    <a href="form.php?id='.$row['ID'].'"><button>بدء</button></a>
                </div>
            ';
        }
    }
    else{
        echo '<h2>عفواً لا توجد اي استبيانات اليوم, الرجاء زيارتنا في وقت لاحق.</h2>';
    }
?>
</div>
<?php
include 'footer.php';
?>