<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
	<link href = "css/style.css" rel = "stylesheet" type = "text/css">
	</head>
	
<body>
<header class = "headerlogin">
</header>
    <div class="loginbox">
    <img src="registration/img/userIcon.png" class="avatar">
        <h1>LOGIN</h1>
        <form action = "signin.php" method = "POST">
            <p class = "psi">Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p class = "psi">Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="/register">Don't have an account?</a>
        </form>
        
    </div>

</body>

</html>