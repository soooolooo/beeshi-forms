<?php
include 'head.php';
include 'header.php';
include_once 'dbconnect.php';
?>

<?php
    if (isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "SELECT * from forms WHERE ID='$id'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0){
            $row = $result->fetch_assoc();
            echo '
            <div class="fgreetings">
                <h1>عنوان الاستبيان: '.$row['title'].'</h1>
                <p style="display: inline-block;">العلامة <p class="star">*</p> تعني ان الجواب اجباري</p>
            </div>

            <form action="handler.php" method="POST">
                <div class="qform">
                <label>الإسم</label><br>
                <input type="text" name="name"><br>
                <label>الرقم الجامعي</label><br>
                <input type="number" name="sid"><br>
                <input type="hidden" name="formid" value="'.$id.'">
                <input type="hidden" name="title" value="'.$row['title'].'">
                </div>
            ';
            for ($j = 1; $j <= 10; $j++){
                $q = 'q'.$j;
                if (isset($row[$q])){
                    echo '
                        <div class="qform">
                            <label><p class="star">*</p>'.$row[$q].'</label><br>
                            <div class="fanswer">
                            <input type="radio" name="answer'.$j.'" value="5">
                            <label>اوافق بشدة</label>
                            </div>
                            <div class="fanswer">
                                <input type="radio" name="answer'.$j.'" value="4">
                                <label>اوافق</label>
                            </div>
                            <div class="fanswer">
                                <input type="radio" name="answer'.$j.'" value="3">
                                <label>محايد</label>
                            </div>
                            <div class="fanswer">
                                <input type="radio" name="answer'.$j.'" value="2">
                                <label>ارفض</label>
                            </div>
                            <div class="fanswer">
                                <input type="radio" name="answer'.$j.'" value="1">
                                <label>ارفض بشدة</label>
                            </div>
                        </div>
                    ';
                }
            }
            echo '
                <button type="submit" name="submit">ارسال</button>
                </form>
                ';
        }

        else{
            echo '
            <div class="fgreetings">
                <h1>عذراً, هذا الاستبيان غير موجود</h1>
                <p>الرجاء التأكد من الرابط او اعلام المرسل عن العطل, وشكراً</p>
            </div> 
            ';
        }
    }
?>

<!--
<div class="fgreetings">
    <h1>عنوان الاستبيان: الاستطلاع الخطي</h1>
<p>العلامة * تعني ان الجواب اجباري</p>
</div>

<form>
    <div class="qform">
        <label>الإسم</label><br>
        <input type="text" name="name"><br>
        <label>الرقم الجامعي</label><br>
        <input type="number"><br>
    </div>
    <div class="qform">
        <label>السؤال الأول: هل تؤيد؟</label><br>
        <div class="fanswer">
            <input type="radio" name="a1" value="5">
            <label>اوافق بشدة</label>
        </div>
        <div class="fanswer">
            <input type="radio" name="a1" value="5">
            <label>اوافق بشدة</label>
        </div>
        <div class="fanswer">
            <input type="radio" name="a1" value="5">
            <label>اوافق بشدة</label>
        </div>
        <div class="fanswer">
            <input type="radio" name="a1" value="5">
            <label>اوافق بشدة</label>
        </div>
        <div class="fanswer">
            <input type="radio" name="a1" value="5">
            <label>اوافق بشدة</label>
        </div>
    </div>
    <div class="qform">
        <label>*السؤال الثاني: هل لا تؤيد؟</label><br>
        <div class="fanswer">
            <input type="radio" name="a1" value="5">
            <label>اوافق بشدة</label>
        </div>
        <div class="fanswer">
            <input type="radio" name="a1" value="5">
            <label>اوافق بشدة</label>
        </div>
    </div>
</form>-->
<?php
include 'footer.php';
?>