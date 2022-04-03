<html>
<head>
<title>User Login And Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
<linK rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>

<body>



<div class="container">

<div class="login-box">
<div class="row">


<!-- registration code -->
<div class="col-md-6 login-left">  
<h2>Register Here</h2>

<form action="registrationvalidation.php" method="post">
<div class="form-group">
<label>Email Address</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="conpassword" class="form-control" required>
</div>

<div class="form-group">
<label>Title</label>
<input type="text" name="title" class="form-control" required>
</div>

<div class="form-group">
<label>First Name</label>
<input type="text" name="first_name" class="form-control" required>
</div>

<div class="form-group">
<label>Last Name</label>
<input type="text" name="last_name" class="form-control" required>
</div>
<br>
<button type="submit" class="btn  btn-primary"> Done </button>

</form>
<a href="login.php"><button type="submit" class="btn  btn-primary"> Already have account </button></a>
</div>


</div>

</div>

</div>
</body>


</html>
