<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Lists</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<body>

<nav class="navbar navbar-inverse" id="navcolor">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/admin">Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/register-user">Register</a></li>
        <li><a href="/userslist">Users</a></li>
        <li><a href="/roster">Roster</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form action="/logout" method="POST" id="logout-form">
                {{ csrf_field() }}
                <button class="btn btn-default">
                <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a></button>
              </form></a></li>
      </ul>
    </div>
  </div>
</nav>

<br>
<div class="container">
<table class="table table-sm">
  <thead>
    <tr>
      <th>id</th>
      <th>Email</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
                foreach ($users as $users) { ?>
                <tr>
                <td><?php echo $users->id ?></td>
                <td><?php echo $users->email ?></td>
                <td><?php echo $users->first_name ?></td>
                <td><?php echo $users->last_name ?></td>
                <td><?php echo $users->Action ?></td>
                </tr>
      <?php } ?>
    </tr>
  </tbody>
</table>
</div>


  

</div><br><br>

<footer class="container-fluid text-center" style="position: fixed; bottom: 0px; width:100%;">
  <p>Footer Text</p>
</footer>

</body>
</html>

