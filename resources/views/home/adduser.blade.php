<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
</head>
<body>
<center>
	<h1>Add user</h1>
	<form method="POST">
		<table border="1">
			@csrf
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td>
					<select name="type">
						<option value="">Select One</option>
						<option value="user">USER</option>
						<option value="admin">ADMIN</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="ADD"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><a href="/home">back</a></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>