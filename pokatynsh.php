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
<div class="wrapper">
	<header class="header"><p style="font-family: annabelle, cursive;
  font-weight: bold;
  font-size: 1em;
  padding: 10px; 
  color: #F3CD26;
  text-shadow: 1px 1px 0 rgba(0,0,0,.3);">Добро пожаловать на (ГКК) Где? Когда? Катаем! </p></header>

<article class="main">
<h2>Покатушки:</h2>
   <?php 
 $host='localhost';
 $user='user_name';
 $password='pass';
 $db_name='db_name';
 
 $table = '<table class="table_blur" border="1">';

// Create connection
$conn = new mysqli($host, $user, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, type , start_finish, target , minimum , data , time , tempo FROM pokatushki";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $table .= ' <caption>Кликните на строку покатушки для подробного просмотра деталей.</caption><tr style="color:white;background-color:#FFF8DC;"><th style="color:white;background-color:#FFF8DC;">Темп</th><th>Тип</th><th>Дата</th><th>Старт-Финиш</th><th>Цель</th><th>Дистанция от:</th></tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $idtd = "vote.php?action=items&first_name=4"; //.$row["id"];
		$table .= '<tr id=" $row["id"]" onclick=window.location.replace("vote.php?action=items&first_name='.$row["id"].'")><td style="background-color:#FFF8DC;">'.$row["tempo"].'</td><td>'.$row["type"].'</td><td>'.$row["data"].'<br/>'.$row["time"].'</td><td>'.$row["start_finish"].'</td><td>'.$row["target"].'</td><td>'.$row["minimum"].'</td></tr>';
    }
	$table .= '</table>';
    echo $table;
} else {
    echo "0 results";
}
$conn->close();
?>
</article>
<aside class="aside aside-1">
<form action="pokatyn.php?action=lumove" method="post" name="forma">
<h4>Посмотреть покатушки (Ролики, Вело, Пешком): </h4><br/>
<fieldset>
    <select name="type" size="1">
        <option value="Вело">Вело</option>
        <option value="Ролики">Ролики</option>
        <option value="Пешая прогулка">Пешая прогулка</option>
        <option value="Вело и Ролики">Вело и Ролики</option>
    </select><br><br/>


<input id="submit" type="submit" value="Посмотреть">


</fieldset>
</form>

		<p>Будущие покатушки</p>
	<p>Сегодня катаются </p>
	<p>Прошлые покатушки </p><br/><br/>
	Топ 5 лучших авторов:<br/> Александр<br/> Ксения<br/> Олег<br/> Артем<br/> Алёна <br/><br/>
	Топ 5 активных участников:<br/> Александр<br/> Ксения<br/> Олег<br/> Артем<br/> Алёна 
</aside>

<aside class="aside aside-2">
<form action="add_form.html" method="post" name="offer">
<input    style="  white-space: pre-line;" id="submit" type="submit" value="Добавить Покатушку без регистрации"><br/>
</form>
<form action="index.php" method="post" name="regnew">
	<p><button type="submit" formmethod="post" formaction="index.php"> Зарегистрироваться </button></p>
	<p><button type="submit" formmethod="post" formaction="index.php">Войти</button> </p>
</form>
</aside>

<footer class="footer"><a href="https://t.me/IgorSaber">Написать автору в Телеграм </a><font size="-2" color="#DDDDDD">(c)IgorSaber, 2022</font> v0.3a</footer>
</div>

</body>
</html>