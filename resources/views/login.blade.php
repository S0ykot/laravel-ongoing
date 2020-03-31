<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<center>
    <form method="POST">
        
        <table>
            <tr>
                <td>@csrf</td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>