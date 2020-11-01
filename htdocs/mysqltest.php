<?php
$hostname = "173.30.1.48"; //아이피 혹은 도메인이름
$username= "root";   //아이디 (root)
$password = "MyNewPass"; //root 비번
$dbname = "test";   //데이터베이스 이름 중 하나
$mysqli = new mysqli($hostname, $username, $password, $dbname);

if(mysqli_connect_errno()){
    printf("실패");
    exit();
}else{
    printf("육재서 하이");
}
mysqli_close($mysqli);
?>