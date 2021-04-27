
<body class= "hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>WELCOME</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Kindly provide the correct details</p>

    	<form action = "loginaction.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
         
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Login</button>
        		</div>
      		</div>
              <p>
          Don't have an account? <a href="register.php">Register</a>
          </p>
          
    	</form>
  	</div>
  	
</div>

</body>
</html>