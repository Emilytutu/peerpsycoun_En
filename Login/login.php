<?php
header("Content-type: text/html; charset=utf-8");
$userName='django';
$passWord='yt6871654';
$host='localhost';
$dataBase='django';
$conn=mysqli_connect($host,$userName,$passWord,$dataBase);
if (mysqli_connect_errno()) 
{ 
    echo "连接 MySQL 失败: " . mysqli_connect_error(); 
} 
 
//从登录页接受来的数据
$name=$_POST['username'];
$pwd=$_POST['password'];
$tbname='regist';
$sql="select username,password from {$tbname} where username='$name' AND password='$pwd';";
$result=mysqli_query($conn,$sql);
if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
        }
$row=mysqli_num_rows($result);
if(!$row)
    {
        echo "<script>alert('密码错误，请重新输入');location='login.html'</script>";
//  location='index.html'
    }
    else{
        
        echo "<script>alert('登录成功');location='http://www.peerpsycoun.com/index.html'</script>";
    };