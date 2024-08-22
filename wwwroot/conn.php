<?php
//数据库连接信息

$conn = mysqli_connect("localhost","mu8th1shwn","5XAQuT","mu8th1shwn");

//err
mysqli_query($conn,'set names utf8');
mysqli_query($conn,'set character set utf8');
if(mysqli_connect_error()){
    die("connect error".mysqli_connect_error());
}

//开启session
session_start();

