<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="../controller/loginCheck.php">
			<center>
    <table border="1" width="500px">
	    <tr>
            <td>
                <table width="500px">
                    <tr>
						<td align="Left">
                <h3><b>PatientProfile</b></h3>
            </td>

            <td align="Right">
                <a href="../index.php">Home</a> |
                <a href="Login.php">Login</a> |
                <a href="Registration.php">Registration</a>
            </td>
                    </tr>
                    </table>
            </td>
        </tr>

        
        <tr>
            <td colspan="2">
			<fieldset>
			<legend>LOG IN</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
                
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
					
                <tr>
                    <td>
                        <input type="checkbox" name="remember me" value=""> Remember Me
					</td>
                </tr>

				<tr>
					<td><input type="submit" name="submit" value="Submit"><a href="forgot password.php">Forget password?</td>
                </tr>
			</table>
            </fieldset>
            </td>
        </tr>

       
    </table>
    </center>
		
	</form>
</body>
</html>