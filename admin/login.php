<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title> Login Admin</title>
  
  
  
      <link rel="stylesheet" href="../asset/admin/css/style-login.css">
       <link rel="stylesheet" href="../asset/admin/css/style-of-me.css">

  
</head>

<body>
  <body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login Admin</h1>
			</div>
			<form action="process/process.php?action=login" method="post">
				<div class="login-form">
				<div class="control-group">
				<input type="text" name="username" class="login-field" value="" placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" name="password" class="login-field" value="" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>
				<p class="error-lg"><?php if(isset($_GET['error']))
				{
						if($_GET['error'] == 1){
						echo 'Đăng Nhập Thất Bại';
						}
				} ?></p>
				<button class="btn btn-primary btn-large btn-block"  name='submit'>login</button>

			</div>
			</form>
			
		</div>
	</div>
</body>
  
  
</body>
</html>
