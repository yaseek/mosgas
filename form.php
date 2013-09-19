<?php

header("Content-Type: application/json");

require_once 'core/class.phpmailer.php';

function Text($str){
    return iconv("utf-8", "windows-1251", $str);
};

if (count($_POST) > 0) {

    $mail = new PHPMailer();
    $mail->CharSet="windows-1251";
    $mail->Encoding="quoted-printable";
    $mail->Subject=Text("Новый заказ");
    $mail->AddAddress("ab@izh.com", Text("Андрей Бабкин"));
    $mail->AddAddress("e@bogatyreva.com", Text("Евгения Богатырёва"));
    $mail->From="do-not-reply@".$_SERVER["SERVER_NAME"];
    $mail->FromName=Text("Диспетчер МосГаз");
    ob_start();
    ?>
        Имя: <?=$_POST["name"].PHP_EOL?>
        Город: <?=$_POST["city"].PHP_EOL?>
        Телефон: <?=$_POST["phone"].PHP_EOL?>

С уважением,         
Служба поддержки сайта "МОСГАЗИФИКАЦИЯ.РФ"
http://<?=$_SERVER["SERVER_NAME"]?>       
        
    <?
    $body = ob_get_contents();
    ob_end_clean();
    
    //$mail->IsHTML(true);
    $mail->Body=Text($body);
    $mail->Send();

    echo json_encode(array(
            "result"=>"ok"
        )
    );
} else {
    echo json_encode(array(
            "result"=>"ok",
            "server"=>$_SERVER
        )
    );
};
