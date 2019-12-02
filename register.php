<html>
<head>
	<title>Welcome to Slotify!</title>
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="yourpassword" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>
		<form id="registerForm" action="register.php" method="POST">
			<h2>create your free account</h2>
			<p>
				<label for="Username">Username</label>
				<input id="Username" name="Username" type="text" placeholder="e.g. bartSimpson" required>
			</p>
                 
			<p>
				<label for="firstname">firstname</label>
				<input id="firstname" name="firstname" type="text" placeholder="e.g. bart" required>
			</p>

			<p>
				<label for="lastname">lastname</label>
				<input id="lastname" name="lastname" type="text" placeholder="e.g. Simpson" required>
			</p>

			<p>
				<label for="email">email</label>
				<input id="email" name="email" type="text" placeholder="e.g. bartSimpson@email.com" required>
			</p>

			<p>
				<label for="email2">confirmemail</label>
				<input id="email2" name="email2" type="text" placeholder="e.g. bartSimpson@email.com" required>
			</p>
                
			<p>
				<label for="Password">Password</label>
				<input id="Password" name="Password" type="password" placeholder="yourpassword" required>
			</p>
            
			<p>
				<label for="Password2">confirmPassword</label>
				<input id="Password2" name="Password2" type="password" placeholder="yourpassword" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>
	</div>

</body>
</html>