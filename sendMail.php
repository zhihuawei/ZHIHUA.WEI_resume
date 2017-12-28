<?php

/**
 * ===============================================
 * Created by ZHIHUA·WEI.
 * Author: ZHIHUA·WEI <zhihua_wei@foxmail.com>
 * Date: 2017/12/25 0003
 * Time: Pm 15:03
 * Project: ZHIHUA.WEI Resume
 * Version: 1.0.0
 * Power: Send Email
 * ===============================================
 */

//判断邮箱、姓名和信息内容不能为空
if (($_POST['email'] == "") || ($_POST['name'] == "") || ($_POST['message'] == "")) {

    echo "<html><body><p>The following fields are <strong>required</strong>.</p><ul>";

    if ($_POST['name'] == "") {
        echo "<li>Name</li>";
    }

    if ($_POST['email'] == "") {
        echo "<li>Email</li>";
    }

    if ($_POST['message'] == "") {
        echo "<li>Message</li>";
    }

    echo "</ul><p>Please use your browser's back button to complete the form.</p></body></html>";

} else {
    //拼接邮件信息
    $message = "";
    $message .= "Name: " . htmlspecialchars($_POST['name'], ENT_QUOTES) . "<br>\n";
    $message .= "Email: " . htmlspecialchars($_POST['email'], ENT_QUOTES) . "<br>\n";
    $message .= "Phone: " . htmlspecialchars($_POST['phone'], ENT_QUOTES) . "<br>\n";
    $message .= "Message: " . htmlspecialchars($_POST['message'], ENT_QUOTES) . "<br>\n";
    $subject = htmlspecialchars($_POST['subject'], ENT_QUOTES);
    $pagelink = htmlspecialchars($_POST['pagelink'], ENT_QUOTES);
    $repemail = htmlspecialchars($_POST['repemail'], ENT_QUOTES);
    $injection_strings = array("content-type:", "charset=", "mime-version:", "multipart/mixed", "bcc:", "cc:");

    foreach ($injection_strings as $suspect) {
        if ((eregi($suspect, $lowmsg)) || (eregi($suspect, strtolower($_POST['name']))) || (eregi($suspect, strtolower($_POST['email'])))) {
            die ('Illegal Input.  Go back and try again.  Your message has not been sent.');
        }
    }
	
    //拼接header
    $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: \"" . $_POST['name'] . "\" <" . $_POST['email'] . ">\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n\r\n";
    //发送邮件
    mail($repemail, $subject, $message, $headers);

    header("Location: " . $pagelink . "");
}