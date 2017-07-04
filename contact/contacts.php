<?php
if($_POST)
    {
    $to = "targonsky97@gmail.com"; //куда отправлять письмо
    $from = 'почта@mail.ru'; // от кого
    $subject = "Проверка почты"; //тема
    $message = 'fullname: '.$_POST['name'].'; email: '.$_POST['email'].';';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <почта@mail.ru>\r\n";
    $result = mail($to, $subject, $message, $headers);
 
    if ($result){
        echo "success";
    }
    }
?>