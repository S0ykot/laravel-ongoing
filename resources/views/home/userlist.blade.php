<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
<center>
	<table>
		<tr>
			<th>ID</th>
			<th>UserName</th>
			<th>Email</th>
			<th>Type</th>
		</tr>
		@for($i=0;$i< count($data); $i++)
		<tr>
			<td>{{$data[$i]['id']}}</td>
			<td>{{$data[$i]['username']}}</td>
			<td>{{$data[$i]['email']}}</td>
			<td>{{$data[$i]['type']}}</td>
		</tr>
		@endfor
	</table>
	<a href="/home">back</a>
</center>
</body>
</html>