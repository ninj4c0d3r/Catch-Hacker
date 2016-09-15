<?php

// catch-hacker admin tool
//    By Jonatas Fil

// user guide
////////////////////////////////////////////////
//
// add this file in directory of your website
// with name of Admin Painel Fake: 
// --------------------------------------------
// administrador.php, admin.php, login.php
// login-page.php
//
// all log is saved in "log.txt"
////////////////////////////////////////////////



// função
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$porta = $_SERVER['REMOTE_PORT'];
$agente = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);

// dumping the log.txt with Ip Address, Hostame, Port Number, User Agent.

$fh = fopen('log.txt', 'a');
fwrite($fh, 'IP: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Porta: '."".$porta ."\n");
fwrite($fh, 'User Agent: '."".$agente ."\n");
fwrite($fh, 'Location: '."".$location ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fclose($fh);

// HTML
echo '
<title>HONEYPOT !!!</title>
<body style="background-color:black;">
<center>
<h1 style="color:red;">SCRIPTKIDDIE DETECT !!! </h1>
<br>
<img src="https://media.giphy.com/media/M4C0jeAkK12DK/giphy.gif">
<br>
<pre style="color:red;">Your information has been saved by admin !!! </pre>
<br>
<a href="http://www.shafou.com" target="_blank">you need help haxor ?</a> 
</center>
</body>
';
?>
