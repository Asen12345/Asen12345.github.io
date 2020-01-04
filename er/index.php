<?php

$for = $_POST;
$message = "Самый простой текст";
$to = $for['Email'];
$from = "lolipo2k@gmail.com";
$subject = "Тема сообщения";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n;";
if(isset($for['sub'])){
mail($to, $subject, $message, $headers);

}
?>


<form action="index.php" method="post">
 
 <input name="Email" placeholder="Email" type="text">
<input name="Name" placeholder="Name" type="text">
<input  value="отправить" type="submit" name="sub">

</form>