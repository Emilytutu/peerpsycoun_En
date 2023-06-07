<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>朋辈心理咨询</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>邮箱</label>
          <input type="text" name="email" placeholder="输入邮箱" required>
        </div>
        <div class="field input">
          <label>密码</label>
          <input type="password" name="password" placeholder="输入密码" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="点击登录">
        </div>
      </form>
      <div class="link">没有账号? <a href="index.php">点击注册</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
