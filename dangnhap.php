
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DANG NHAP</title>
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="./css/stylelogin.css">
  
  
</head>
<body>
  <div class="login-wrap">
  <div class="login-html">
	<div class="signin">
		<label for="tab-1" class="tab">ĐĂNG NHẬP</label>
		<img src="https://icon-library.net/images/admin-login-icon/admin-login-icon-24.jpg" alt="" height="150px" width="300px"/>
    </div>
    <div class="login-form">
      <form action="controllers\loginAdmin.php" method="post">
        <div class="group">
          <label for="user" class="label">Tên đăng nhập</label>
          <input id="username" name="username" type="text" class="input"required>
        </div>
        <div class="group">
          <label for="pass" class="label">Mật khẩu </label>
          <input id="password" name="password" type="password" class="input" data-type="password"required>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Đăng nhập">
        </div>
        <div class="hr"></div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
