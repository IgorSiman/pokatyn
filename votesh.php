<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<meta property="og:title" content="Где? Когда? Катаем! Добро пожаловать на (ГКК) Где? Когда? Катаем! "/>
<meta property="og:type" content="article" />
<meta property="og:url" content="http://p99150ql.beget.tech/pokatushki/pokatyn.php" />
<meta property="og:description" content="Еще не добавили покатушку в поиске Яндекса? Стоит сделать это. Но только в том случае, если вы готовы быстро реагировать на вопросы  и вообще — разговаривать с вашими друзьями ))). Рассказываем в деталях, как и зачем подключать покатушку в поиске."/>
<meta property="og:site_name" content="Позвать всех на интересную покатушку!"/>
	
<link rel="stylesheet" type="text/css" href="stylen.css">
<title>Подробно о покатушке (ГКК)</title>
</head>

<body>
<div style="background-color:#FFF8DC;">
<header class="header" style="background-color:#FFF8DC; font-size: clamp(16px, 5vw, 50px);"><p>Покатушка на (ГКК) Где? Когда? Катаем! </p></header>
<?php
require 'connect.php';
$first_name = trim($_REQUEST['first_name']);
// $last_name = trim($_REQUEST['last_name']);

$sql_select = "SELECT id, type , start_finish, target , minimum , maximum , data , time , mamber , comments , tempo FROM pokatushki WHERE id='$first_name'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

$first_namber = $row['id'];
$sql_selectcom = "SELECT * FROM comments WHERE number='$first_namber'";
$resultcom = mysql_query($sql_selectcom);
$rowcom = mysql_fetch_array($resultcom);

$age = $row['age'];

if($row)
{
	printf("<p>Номер: " .$row['id'] . "<br/><br/>Автор: " . "<br/><br/>Дата: " .$row['data'] . "<br/><br/>Время: " .$row['time']  . "<br/><br/>Старт-Финиш: " .$row['start_finish'] . "<br/><br/>Цель: " .$row['target']
	. "<br/><br/>Темп: " .$row['tempo'] ."</p><p><i></i></p><p><br/>Дистанция от : " .$row['minimum'] . "&nbsp; до: " .$row['maximum'] . "</p>Количество участников: &nbsp;". $row['mamber']
	. "<br/><br/>Комментарии автора: &nbsp;<br/> " .$row['comments'] . "<br/><br/>Зарегистрированные участники: &nbsp; " . "<br/><br/>Коментарии участников: &nbsp;<br/> "  .$rowcom['comment']  ."<br/>----<br/>"	);
}
else{echo ("Нет такого номера<br/><br/>");}


?>
<form action="pokatyn.php?number=<?=$row['id'];?>" method="post" name="addmamber">
<input id="submit" type="submit" value="ПРОКАТИТЬСЯ">&nbsp;&nbsp;<br/>
</form>

<form action="addcoment.php?number=<?=$row['id'];?>" method="post" name="positiv">

<label for="comments ">Написать комментарий:</label><br/>
<textarea rows="10" cols="45" name="comments" type="text" value="Комментарии" ></textarea><br/>
<input id="submit" type="submit" value="Добавить КОММЕНТАРИЙ"><br/>
</form>

<form action="pokatyn.php" method="post" name="negotiv">

</form>

<a href="pokatyn.php">Вернуться к краткому списку</a><br/><br/>
</div>
</body>
</html>