<?php
  header("Content-type: text/html; charset=utf-8");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    // $sex = $_POST['sex'];
    // $age = $_POST['age'];
    // $address = $_POST['address'];
    // $culture = $_POST['culture'];
    // $income = $_POST['income'];
    if ($username == ''){
      echo '<script>alert("请输入用户名");</script>';
      exit(0);
    }
    if ($password == ''){
      echo '<script>alert("请输入密码");</script>';
      exit(0);
    }
    if ($password != $repassword){
      echo '<script>alert("两次密码输入不一致");</script>';
      exit(0);
    }
    if($password == $repassword){
        $userName='django';
        $passWord='yt6871654';
        $host='localhost';
        $dataBase='django';
        $conn=mysqli_connect($host,$userName,$passWord,$dataBase);
      if ($conn->connect_error){
        echo '数据库连接失败！';
        exit(0);
      }else {
          $tbname='regist';
          $sql = "select username from {$tbname} where username = '$name'";
          $sql_insert = "insert into {$tbname} (username,password,telephone,email) values('$username','$password','$telephone','$email')";
          $res_insert = $conn->query($sql_insert);
          if($res_insert) {
            echo "<script>alert('注册成功！');location='register2.html';</script>";
          } 
        }
    }else{
      echo "<script>alert('提交未成功');location='register.html'; </script>";
    }
?>