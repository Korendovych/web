<?php
$host = 'localhost'; // адрес сервера 
$user = 'vita'; // имя пользователя
$password = 'Cfgs_dam0'; // пароль
$database = 'registro'; // имя базы данных

$mysqli = new mysqli("$host", "$user", "$password", "$database");


if ($mysqli->connect_errno) {
	require_once 'respuesta3.html';
   echo 'Connection error ('.mysqli_connect_errno().'): '.mysqli_connect_error();	
   
exit();
} else {
	
	} 


$evento = $_POST['evento'];
$nombre = $_POST['nombre']; 
$apellidos = $_POST['apellidos']; 
$nacimiento = $_POST['birthday'];        
$tel = $_POST['tel']; 
$email = $_POST['email'];

    
    //Підключаємо сторінку html до php
//Запрос на добавления пользователя в БД
//$insert ="INSERT INTO participantes (evento, nombre, apellidos, nacimiento, email, tel) VALUES ('$evento','$nombre', '$apellidos', '$nacimiento', '$email', '$tel')";
//$insert = "INSERT INTO participantes (evento, nombre, apellidos, nacimiento, email, tel) VALUES ('comic','Cler', 'Redfield', '12/23/2009', 'cler@gmail.com', '345-654-987')";


$sql = "SELECT evento FROM participantes WHERE evento='ComicCon'";
$sql2 = "SELECT evento FROM participantes WHERE evento='Gaming'";
$sql3 = "SELECT evento FROM participantes WHERE evento='JaponWeek'";

$result = $mysqli->query($sql);
$result2 = $mysqli->query($sql2);
$result3 = $mysqli->query($sql3);

if ($result->num_rows > 199) {
  require_once 'respuesta.html';
  exit();
} else {
  $insert = ("INSERT INTO `participantes` (evento, nombre, apellidos, nacimiento, email, tel) VALUES ('".$evento."','".$nombre."', '".$apellidos."', '".$nacimiento."', '".$email."', '".$tel."')") or die(mysql_error());
}


if ($result2->num_rows > 199) {
  require_once 'respuesta.html';
  exit();
} else {
  $insert = ("INSERT INTO `participantes` (evento, nombre, apellidos, nacimiento, email, tel) VALUES ('".$evento."','".$nombre."', '".$apellidos."', '".$nacimiento."', '".$email."', '".$tel."')") or die(mysql_error());
}


if ($result3->num_rows > 199) {
  require_once 'respuesta.html';
  exit();
} else {
  $insert = ("INSERT INTO `participantes` (evento, nombre, apellidos, nacimiento, email, tel) VALUES ('".$evento."','".$nombre."', '".$apellidos."', '".$nacimiento."', '".$email."', '".$tel."')") or die(mysql_error());
}


if($mysqli->query($insert) === TRUE){
	require_once 'respuesta2.html';
}else{
	
    
    require_once 'respuesta3.html';
    echo "Error: " . mysqli_error($mysqli);
}




//Закрываем подключение к БД

mysqli_close($mysqli);


    
 
//$insert = "INSERT INTO participantes (evento, nobmre, apellidos, nacimiento, email, tel) VALUES ('comic','Cler', 'Redfield', '12/23/2009', 'cler@gmail.com', '345-654-987')";


    ?> 



