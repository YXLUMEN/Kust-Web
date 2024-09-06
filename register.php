<?php
include_once('./conn.php');
header("content-type:text/html;charset=utf-8");
$conn = mysqli_connect("localhost","mu8th1shwn","5XAQuT","mu8th1shwn");
session_start();

//连接数据库

//接收$_POST用户名和密码
$account=$_POST['accountReg'];
$password=$_POST['passwordReg'];
$email=$_POST['email'];

if(!($account || $password)){
    echo "<script>alert('账号或密码不能为空');history.go(-1)</script>";
    return false;
}
//查看表user用户名是否存在
$sql_select = "SELECT * FROM users WHERE account = '$account'";
$res = $conn->query($sql_select);

if($res->num_rows>0){
    echo "<script>alert('已存在用户名');history.go(-1)</script>";
}
else{
    $_SESSION['user']=$account;
    $passHash = hash('sha256',$password);
    $sql_1="insert into users(account, password, email) VALUES ('$account','$passHash','$email')";
    $result = mysqli_query($conn,$sql_1);
    if($result){
        echo "<script>alert('注册成功');;history.go(-1);</script>";
    }
    else{
        echo "<script>alert('注册失败');history.go(-1)</script>";
    }
}