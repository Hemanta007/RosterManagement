
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
   #navcolor
    {
      background-color: #515A5A;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body style="background-image: url('../img/background1.jpg');">
<body>

<nav class="navbar navbar-inverse" id="navcolor">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> Super Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/register-admin">Register</a></li>
        <li><a href="/userlist-superadmin">Users</a></li>
        <li><a href="#">Roster</a></li>
        
      </ul>
     <ul class="nav navbar-nav navbar-right">
        <form action="/logout" method="POST" id="logout-form">
                {{ csrf_field() }}
                <button class="btn btn-default">
                <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a></button>
        </form>
      </ul>
    </div>
  </div>
</nav>
<br>

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class=" panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"> Register </h3>
				</div>
				<div class="panel-body">
					<form action="/register-admin" method="POST">
						{{ csrf_field() }}
					
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" name="email" class="form-control" placeholder="example@example.com">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" name="first_name" class="form-control" placeholder="First Name">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" name="last_name" class="form-control" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" name="password" class="form-control" placeholder="Confirm Password">
							</div>
						</div>
						<div class="form-group">
								<input type="submit" value="Register" class="btn btn-success pull-right">
						</div>
					</form>
				</div>
		 	</div>
	  	 </div>
    </div>


<br>


  

</div><br><br>

<footer class="container-fluid text-center" style="position: fixed; bottom: 0px; width:100%;">
  <p>Footer Text</p>

</footer>

</body>
</html>



