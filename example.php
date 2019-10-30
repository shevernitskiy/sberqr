<?php

//подключаем классы
require_once __DIR__.'/vendor/autoload.php';

//создаем объект для qr в формате сбера
$sberqr = new \shevernitskiy\SberQr\SberQr([
    'ST00011',
    'Name' => 'Hulio',
    'PersonalAcc' => 123521352352,
]);

//из этого объекта данные можно получить в разных видах
print_r($sberqr->asArray());
print_r($sberqr->asStr());
print_r($sberqr->asObj()->Name);

//создаем объект для изображения qr
$qr = new \Endroid\QrCode\QrCode($sberqr->asStr());
//$qr->writeFile(__DIR__.'/qr.png'); //можно записать в файл
$qr->setSize(200); //можно поменять размер

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
</head>
<body>
    <p><?php echo $sberqr->asStr(); ?></p>
    <img src="data:image/png;base64, <?php echo base64_encode($qr->writeString()); ?>"/>    
</body>
</html>
