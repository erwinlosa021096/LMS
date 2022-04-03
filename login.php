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

<!-- login code design -->
<div class="col-md-6 login-left">  
<h2>Login Here</h2>
<form action="validation.php" method="post">

<div class=""form-group>
<label>Email Address</label>
<input type="text" name="email" class="form-control" required>
</div>

<div class=""form-group>
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<br>
<button type="submit" class="btn  btn-primary"> Login </button> </form>
<a href="registration.php"><button type="submit" class="btn  btn-primary"> Sign Up </button></a>
</div>


</div>

</div>

</div>
</body>


</html>