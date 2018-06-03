<?php


//0. 설정
$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = 'bit123123';
$mysql_database = 'php_exam';
$mysql_port = '3306';
$mysql_charset = 'utf8';


//1. DB 연결
$connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);

if($connect->connect_errno){
	echo '[연결실패] : '.$connect->connect_error.'';
} else {
	//echo '[연결성공]';
}

//2. 문자셋 지정
if(! $connect->set_charset($mysql_charset))// (php >= 5.0.5)
{
	echo '[문자열변경실패] : '.$connect->connect_error;
}

//3. 쿼리 생성
$query = ' select \'complete\' as col from dual ';

//4. 쿼리 실행
$result = $connect->query($query) or die($this->_connect->error);

//5. 결과 처리
while($row = $result->fetch_array())
{
	echo $row['col'].'';
}

//6. 연결 종료
$connect->close();


?>
