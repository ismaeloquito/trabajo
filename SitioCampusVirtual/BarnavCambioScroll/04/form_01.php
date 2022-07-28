<?php
if ($_POST['Message']) {
    mail(
        'ismaeloc.iesap@gmail.com',
        'Here is the sample subject line',
        $_POST['Insert Your Message'] . 'From: jane@janedoe.com'
    );
}
?>
