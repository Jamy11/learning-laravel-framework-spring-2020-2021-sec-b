<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1>Login Page</h1>
	
	<form method="post">
		@csrf
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td><a href="/">Back</a></td>
				</tr>
			</table>
		</fieldset>
	</form>

    {{session('msg')}}
	
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>
