<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta property="og:title" content="Где? Когда? Катаем! Добро пожаловать на (ГКК) Где? Когда? Катаем! Позвать всех на интересную покатушку!"/>
<meta property="og:type" content="article" />
<meta property="og:url" content="http://p99150ql.beget.tech/pokatushki/pokatyn.php" />
<meta property="og:description" content="Еще не добавили покатушку в поиске Яндекса? Стоит сделать это. Но только в том случае, если вы готовы быстро реагировать на вопросы  и вообще — разговаривать с вашими друзьями ))). Рассказываем в деталях, как и зачем подключать покатушку в поиске."/>
<meta property="og:site_name" content="Где? Когда? Катаем! (ГКК)"/>

<link rel="stylesheet" href="stylen.css"  type="text/css">

<title>Где? Когда? Катаем! (ГКК)</title>
</head>
<body>
<div style="background-color:#FFF8DC;">
<?php

//include("robo1.php");
//include("robo2.php");

session_set_cookie_params(180000, "/");
session_start();

/*if(isset($_COOKIE['mmmorpglogin']) or isset($_COOKIE['mmmorpgpassword'])) {
	header("Location: /minirpg/play.php");
	exit;
}*/

if(isset($_SESSION['mmmorpglogin']) or isset($_SESSION['mmmorpgpassword'])) {
	header("Location: pokatyn.php");
	exit;
}

$msg = '';
$msg2 = '';
if(isset($_GET['err']))	$err = (int)$_GET['err']; else $err = 0;
if($err == 1) {$msg = "Не правильный логин или пароль.";}
if($err == 2) {$msg = "Соединение разорвано.";}
if($err == 3) {$msg2 = "Пароли не совпадают.";}
if($err == 4) {$msg2 = "Имя или логин заняты.";}
if($err == 5) {$msg = "Косяк с количеством пользователей.";}

//echo $roboverh;
?>

<center><font size="3">
<font color="#FF0000">Покатаемся вместе!</font><br>
Новые маршруты<br> 
Новые путешествия...
		<div class="history">
			Покатаем!
		</div>
		</font></center>


<center><font color="#FF0000"><a href="pokatyn.php">Просмотр покатушек без авторизации.</a><?=$msg;?></font></center>

<table  align="center" width="90%">

<td width="50%">
<center><h3>Вход</h3></center>
<table width="160" align="center">
<tr>
<td>
<form action="pokatyn.php" method="POST">
	Логин:<br>
	<input name="m_login" type="text" style="width: 160px;"><br>
	Пароль:<br>
	<input name="m_password" type="password" style="width: 160px;"><br>
	<input name="m_submit" type="submit" value="Войти">
</form>
</td>
</tr>
</table>

</td><td width="50%">

<br><br>
<center><h3>Регистрация</h3></center>
<center><font color="#FF0000"><?=$msg2;?></font></center>
<table width="160" align="center">
<tr>
<td>
<form action="pokatyn.php" method="POST">
	Логин:<br>
	<input name="m_login" type="text" style="width: 160px;"><br>
	Пароль:<br>
	<input name="m_password" type="password" style="width: 160px;"><br>
	Повторите пароль:<br>
	<input name="m_password2" type="password" style="width: 160px;"><br>
	E-mail:<br>
	<input name="m_email" type="text" style="width: 160px;"><br>
	Имя или никнейм:<br>
	<input name="m_name" type="text" style="width: 160px;"><br>
	<input name="m_submit" type="submit" value="Регистрация">
</form>
</td>
</tr>
</table>
</td></table>
<br>
<center><a href="https://t.me/IgorSaber">Написать автору в Телеграм </a><font size="-2" color="#DDDDDD">(c)IgorSaber, 2022</font></center>
<script>
if (typeof m_login !== 'undefined') {
  // Теперь мы знаем, что foo определено.
document.getElementById('m_login').focus();
}
</script>
<?php echo $roboniz; ?>
</div>
</body>
</html>