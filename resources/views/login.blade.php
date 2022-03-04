<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="/css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	@if(session()->has('berhasil'))
        <p> {{ session('berhasil') }} </p>
    @endif

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="/login" method="post">
				@csrf 
				<img src="img/avatar.svg">
				<h2 class="title">Welcome!</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" name="email" id="email" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" id="password" class="input">
            	   </div>
            	</div>
				@if(session()->has('error'))
        		<p class="error"> {{ session('error') }} </p>
   				@endif
            	<a href="#">Forgot Password?</a>
				<div class="btn-login">
					<button type="submit" value="Login">Login</button>
				</div>
				<span>Belum punya akun? </span><a class="regist" href="/regist">Register</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="/js/login.js"></script>
</body>
</html>
