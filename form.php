<?php

header("Content-Type: application/json");

require_once 'core/class.phpmailer.php';

function Text($str){
    return iconv("utf-8", "windows-1251", $str);
};

$config_path = $_SERVER["DOCUMENT_ROOT"]."/core/config.json";
$config = json_decode(file_get_contents($config_path));
$config->account++;
file_put_contents($config_path, json_encode($config));

if (count($_POST) > 0) {
    
    $mail = new PHPMailer();
    $mail->CharSet="windows-1251";
    $mail->Encoding="quoted-printable";
    $mail->Subject=Text($config->sitename.$_POST["title"]);
    for($i=0; $i<count($config->mailto); $i++) {
        $item = $config->mailto[$i];
        $mail->AddAddress($item->email, Text($item->name));
    };
    //$mail->AddAddress("e@bogatyreva.com", Text("Евгения Богатырёва"));
    $mail->From="do-not-reply@".$_SERVER["SERVER_NAME"];
    $mail->FromName=Text("Диспетчер МосГаз");
    ob_start();
    ?>
        Номер заявки: <?=sprintf("%06d", $config->account).PHP_EOL?>
        Дата: <?=date("H:i d.m.Y").PHP_EOL?>
        Сайт: http://<?=$_SERVER["SERVER_NAME"].PHP_EOL?>       
        Имя: <?=$_POST["name"].PHP_EOL?>
        Город: <?=$_POST["city"].PHP_EOL?>
        Телефон: <?=$_POST["phone"].PHP_EOL?>
        Заказ: <?=$_POST["title"].PHP_EOL?>
        Источник: <?=$_POST["referer"].PHP_EOL?>

С уважением,         
Служба поддержки сайта "<?=$config->sitename?>"
http://<?=$_SERVER["SERVER_NAME"]?>       
        
    <?
    $body = ob_get_contents();
    ob_end_clean();
    
    //$mail->IsHTML(true);
    $mail->Body=Text($body);
    $mail->Send();

    echo json_encode(array(
            "result"=>"ok",
            "post"=>$_POST
        )
    );
} else {
    echo json_encode(array(
            "result"=>"ok",
            "config"=>$config,
            "server"=>$_SERVER
        )
    );
};
