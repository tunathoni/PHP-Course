<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?=site_url('login/act_login')?>" method = "POST">
		<label>username</label>
		<input type="text" name="username">

		<label>password</label>
		<input type="password" name="password">

		<input type="submit" name="" value="login">
	</form>
</body>
</html>