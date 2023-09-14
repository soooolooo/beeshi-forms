<?php
include 'head.php';
include 'header.php';
session_start();
?>

<?php
    echo '
    <div class="mgreetings">
        <h1>شكرا لك '.$_SESSION["name"].'.</h1>
        <p>تم ارسال اجوبتك للاستبيان '.$_SESSION["title"].' بنجاح</p>
    </div>
    ';
?>

<?php
session_unset();
session_destroy();
include 'footer.php';
?>