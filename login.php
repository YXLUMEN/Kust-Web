<?php

header("content-type:text/html;charset=utf-8");
//接收$_POST用户名和密码
$account = $_POST['account'];
$password = $_POST['password'];
//连接数据库
include('./conn.php');
$conn = mysqli_connect("localhost","mu8th1shwn","5XAQuT","mu8th1shwn");
//免除部分警告
error_reporting(0);
//启动session
session_start();

if(!($account || $password)){
    echo "<script>alert('账号或密码不能为空');history.go(-1)</script>";
    return false;
}
//查看表user用户名与密码和传输值是否相等
$passHash = hash('sha256',$password);
$sql = "SELECT * FROM users WHERE account = '$account' AND password = '$passHash'";

$result = $conn->query($sql);
if ($result->num_rows>0){
    $_SESSION["user"]=$account;
    echo "<script> alert('登录成功');window.location = 'https://tritium.tia.ink/src/main.php';</script>";
}
else{
    echo "<script> alert('账号或密码有误');history.go(-1)</script>";
}
