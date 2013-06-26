<html>
<head>
<meta charset="utf-8">
<title>waikipay-confirm</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="<?php echo base_url();?>/_assets/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<style type="text/css">
body {
	font-family: 'Raleway', sans-serif;
	padding-top: 60px;
	padding-bottom: 40px;
	background-color: whiteSmoke;
}

.clear{
	clear: both;
	float: none;
}

body .navbar {
	font-size: 13px;
}

.navbar .navbar-inner {
	background-color: #272729 !important;
	background-image: none !important;
}

body>.navbar .brand {
	color: #DEDEDE;
	float: right;
	font-weight: bold;
	margin-left: 20px;
	padding-left: 0;
	padding-right: 0;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 0 30px
		rgba(255, 255, 255, 0.125);
	transition: all 0.2s linear 0s;
}

.form-signin-heading{
	color: #575655;
	border-bottom: 5px solid #999999;
	padding-bottom: 3px;
	max-width: 355px;
	margin: 0 auto 5px;
}

.form-signin {
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 0px 5px 0px 5px;
	-moz-border-radius: 0px 5px 0px 5px;
	border-radius: 0px 5px 0px 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
	-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
	box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
}

.form-signin .form-signin-heading,.form-signin .checkbox {
	margin-bottom: 10px;
}

.form-signin input[type="text"],.form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
}
</style>
<link
	href="<?php echo base_url();?>/_assets/bootstrap/css/bootstrap-responsive.css"
	rel="stylesheet">

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="<?php echo base_url();?>/_assets/bootstrap/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="<?php echo base_url();?>/_assets/bootstrap/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="<?php echo base_url();?>/_assets/bootstrap/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="<?php echo base_url();?>/_assets/bootstrap/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button data-target=".nav-collapse" data-toggle="collapse"
					class="btn btn-navbar" type="button">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a href="./index.html" class="brand">LAPAKCMS</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class=""><a href="./index.html">Home</a>
						</li>
						<li class="active"><a href="./getting-started.html">Get started</a>
						</li>
						<li class=""><a href="./scaffolding.html">Scaffolding</a>
						</li>
						<li class=""><a href="./base-css.html">Base CSS</a>
						</li>
						<li class=""><a href="./components.html">Components</a>
						</li>
						<li class=""><a href="./javascript.html">JavaScript</a>
						</li>
						<li class=""><a href="./customize.html">Customize</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="form-signin-heading">
			<h4 style="border-bottom: 5px solid #37A6CD;margin-bottom: -8px;float: left;padding-bottom: 3px;"><i class="icon-lock" style="margin-top: 4px;"></i> Panel</h4>
			<div class="clear"></div>
		</div>
		<form class="form-signin" method="post" action="<?php echo base_url();?>aksesroot/aksilogin">
			<input type="text" class="input-block-level" placeholder="Email" name="username">
			<input type="password" class="input-block-level" placeholder="Kata sandi" name="password">
			<label><?php echo $gbr_captcha; ?></label>
			<input type="password" class="input-block-level" placeholder="Isikan kode diatas" name="captcha">
			<label class="checkbox"> <input type="checkbox" value="remember-me">Ingat akun ini</label>
			<button class="btn btn-primary" type="submit">Masuk</button>
		</form>

	</div>
	<!-- /container -->
	<script src="<?php echo base_url();?>/_assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/_assets/bootsrap/js/bootstrap.min.js"></script>
</body>
</html>