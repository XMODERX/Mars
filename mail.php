<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
   if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail']) 
   and !empty($_POST['message'])){
      $name = trim(strip_tags($_POST['name']));
      $phone = trim(strip_tags($_POST['phone']));
      $mail = trim(strip_tags($_POST['mail']));
      $message = trim(strip_tags($_POST['message']));
 
      mail('ashyrovsasha18@icloud.com', 'Письмо с адрес_вашего_сайта', 
      'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />
      Его сообщение: '.$message,"Content-type:text/html;charset=windows-1251");
 
      echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
 
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
</body>
</html>