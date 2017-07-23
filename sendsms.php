<?php

/**
 * @author Kingster
 * @author SuyashBansal
 * @category SMS
 * @copyright 2015
 * @description Request this page with get or post params
 * @param uid = Way2SMS Username
 * @param pwd = Way2SMS Password
 * @param phone = Number to send to. Multiple Numbers separated by comma (,). 
 * @param msg = Your Message ( Upto 140 Chars)
 */

include('way2sms-api.php');

if (isset($_REQUEST['uid']) && isset($_REQUEST['pwd']) && isset($_REQUEST['phone']) && isset($_REQUEST['msg'])) {
    $res = sendWay2SMS($_REQUEST['uid'], $_REQUEST['pwd'], $_REQUEST['phone'], $_REQUEST['msg']);
    if (is_array($res))
        echo $res[0]['result'] ? f(true):f(false);
    else
        echo $res;
    exit;
}
function f($p)
{
    if($p)
    {
        echo '<script language="javascript">alert("message successfully sent");document.location.href="index.php";</script>';
        
    }
    else
    {
        echo '<script language="javascript">alert("message not sent");document.location.href="index.php";</script>';
    }
}

?>

