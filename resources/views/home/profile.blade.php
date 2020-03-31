<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<center>
	<h1>Profile Details</h1>
	<table border="1">
		<tr>
			<td>UserName :</td>
			<td>{{$username}}</td>
		</tr>
		<tr>
			<td>Email :</td>
			<td>{{$email}}</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>{{$type}}</td>
		</tr>
		<tr>
			<td colspan="2" align="center"><a href="/home">Back</a></td>
		</tr>
	</table>
</center>
</body>
</html>