<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>注册确认连接</title>
</head>
<body>
	<h1>感谢您在 Sample 网站进行注册！</h1>

	<p>
		请点击下面的连接完成注册：
		<a href="{{ route('confirm_email', $user->activation_token) }}">
		{{ route('confirm_email', $user->activation_token) }}
		</a>
	</p>

	<p>
		如果不是本人的操作，请忽略此邮件。
	</p>
</body>
</html>