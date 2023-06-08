<?php
  header("Content-type: text/html; charset=utf-8");
    // $username = $_POST['username'];
    $password = $_POST['password'];
    // $repassword = $_POST['repassword'];
    // $telephone = $_POST['telephone'];
    // $email = $_POST['email'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $culture = $_POST['culture'];
    $income = $_POST['income'];
    if ($password == ''){
      echo '<script>alert("Please confirm your password");</script>';
      exit(0);
    }
    $userName='django';
    $passWord='yt6871654';
    $host='localhost';
    $dataBase='django';
    $conn=mysqli_connect($host,$userName,$passWord,$dataBase);
    if ($conn->connect_error){
        echo 'Fail to connect database！';
        exit(0);
    }else {
        $tbname='regist';
        //   $sql = "select username from {$tbname} where username = '$name'";
        // insert into {$tbname} (sex,age,address,culture,income) values('$sex','$age','$address','$culture','$income')  where (select username from {$tbname} where username = '$username')
        $sql_insert = "UPDATE {$tbname} SET sex='$sex', age='$age',address='$address',culture='$culture',income='$income' where password='$passWord'";
         
          $res_insert = $conn->query($sql_insert);
          if($res_insert) {
            echo "<script>alert('Submission done！');location='login.html';</script>";
          } 
          else{
              echo "<script>alert('There's something wrong...');location='regist2.html';</script>";
          }
    }
?>