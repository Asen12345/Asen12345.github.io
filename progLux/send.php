<?php

if($_POST['name'] == ''){

$_POST['status'] = 1;
print_r($_POST['status']);


}
else if($_POST['number'] == ''){

    $_POST['status'] = 2;
    print_r($_POST['status']);
    
    
    }

    else if($_POST['number'] != '' && $_POST['name'] != ''){
  

        $_POST['status'] = 3;
        print_r($_POST['status']);

        $title = 'Сообщение с сайта';
        $mess =  'Отправлено сообщение из блока "Контакты". Номер: ' . $_POST['number'] . ', Имя: ' . $_POST['name'] . ', Комментарии: ' . $_POST['message'];
        $to =  'andrey_yagin@mail.ru';
   
        // функция, которая отправляет наше письмо.
    // mail($to, $title, $mess, 'From:'.$from);
    mail("andrey_yagin@mail.ru", $title, $mess);
       

    }

?>