<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	  <div class="container">
	  	<div class="row">
	  		<div class="col-xs-6">
	  			<form action="form.php" method="post">
	  				<div class="form-group">
	  					<label for="username">username</label>
	  					<input type="text" name="username" class="form-control">
	  				</div>
	  				<div class="form-group">
	  					<label for="password" name="password">password</label>
	  					<input type="password" name="password" class="form-control">
	  				</div>
	  				<input type="submit" name="submit" class="btn btn-primary">
	  			</form>
	  		</div>
	  	</div>
	  </div>
</body>
</html>