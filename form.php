<!-- the form to login  -->

<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
	<fieldset>
		<legend>Login</legend>


			<label for='username'>UserName*:</label> 
			<input type="text"
			name=$userNameInput /> 
			<label for='password'>Password*:</label> 
			<input
			type="text" name=$userPassInput />
		<!--type can = password-->

		<input type="submit" value="Login!" name="subButton" />
	</fieldset>
</form>
