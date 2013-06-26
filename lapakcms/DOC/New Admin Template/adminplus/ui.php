<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
	<title>AdminPlus - Premium Bootstrap Admin Template</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	
	<!-- Bootstrap Extended -->
	<link href="bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
	<link href="bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	
	<!-- JQueryUI v1.9.2 -->
	<link rel="stylesheet" href="theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css" />
	
	<!-- Glyphicons -->
	<link rel="stylesheet" href="theme/css/glyphicons.css" />
	
	<!-- Bootstrap Extended -->
	<link rel="stylesheet" href="bootstrap/extend/bootstrap-select/bootstrap-select.css" />
	<link rel="stylesheet" href="bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	
	<!-- Uniform -->
	<link rel="stylesheet" media="screen" href="theme/scripts/pixelmatrix-uniform/css/uniform.default.css" />

	<!-- JQuery v1.8.2 -->
	<script src="theme/scripts/jquery-1.8.2.min.js"></script>
	
	<!-- Modernizr -->
	<script src="theme/scripts/modernizr.custom.76094.js"></script>
	
	<!-- MiniColors -->
	<link rel="stylesheet" media="screen" href="theme/scripts/jquery-miniColors/jquery.miniColors.css" />
	
	<!-- Theme -->
	<link rel="stylesheet" href="theme/css/style.min.css?1361279281" />
	
	
	<!-- LESS 2 CSS -->
	<script src="theme/scripts/less-1.3.3.min.js"></script>
	
</head>
<body>
	
	<!-- Start Content -->
	<div class="container-fluid fixed">
		
		<div class="navbar main">
			<a href="index.php" class="appbrand"><span>Admin+ <span>lovely headline here</span></span></a>
			
						<button type="button" class="btn btn-navbar">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
						
			<ul class="topnav pull-right">
				<li class="visible-desktop">
					<ul class="notif">
						<li><a href="" class="glyphicons envelope" data-toggle="tooltip" data-placement="bottom" data-original-title="5 new messages"><i></i> 5</a></li>
						<li><a href="" class="glyphicons shopping_cart" data-toggle="tooltip" data-placement="bottom" data-original-title="1 new orders"><i></i> 1</a></li>
						<li><a href="" class="glyphicons log_book" data-toggle="tooltip" data-placement="bottom" data-original-title="3 new activities"><i></i> 3</a></li>
					</ul>
				</li>
				<li class="dropdown visible-desktop">
					<a href="" data-toggle="dropdown" class="glyphicons cogwheel"><i></i>Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="">Some option</a></li>
						<li><a href="">Some other option</a></li>
						<li><a href="">Other option</a></li>
					</ul>
				</li>
								<li class="hidden-phone">
					<a href="#themer" data-toggle="collapse" class="glyphicons eyedropper"><i></i><span>Themer</span></a>
					<div id="themer" class="collapse">
						<div class="wrapper">
							<span class="close2">&times; close</span>
							<h4>Themer <span>color options</span></h4>
							<ul>
								<li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
								<li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
								<li>
									<span class="link" id="themer-custom-reset">reset theme</span>
									<span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
								</li>
							</ul>
							<div id="themer-getcode" class="hide">
								<hr class="separator" />
								<button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
								<button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</li>
								<li class="hidden-phone">
					<a href="#" data-toggle="dropdown"><img src="theme/images/lang/en.png" alt="en" /></a>
			    	<ul class="dropdown-menu pull-right">
			      		<li class="active"><a href="ui.php" title="English"><img src="theme/images/lang/en.png" alt="English"> English</a></li>
			      		<li><a href="ui.php" title="Romanian"><img src="theme/images/lang/ro.png" alt="Romanian"> Romanian</a></li>
			      		<li><a href="ui.php" title="Italian"><img src="theme/images/lang/it.png" alt="Italian"> Italian</a></li>
			      		<li><a href="ui.php" title="French"><img src="theme/images/lang/fr.png" alt="French"> French</a></li>
			      		<li><a href="ui.php" title="Polish"><img src="theme/images/lang/pl.png" alt="Polish"> Polish</a></li>
			    	</ul>
				</li>
				<li class="account">
										<a data-toggle="dropdown" href="form_demo.php" class="glyphicons logout lock"><span class="hidden-phone text">mosaicpro</span><i></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="form_demo.php" class="glyphicons cogwheel">Settings<i></i></a></li>
						<li><a href="form_demo.php" class="glyphicons camera">My Photos<i></i></a></li>
						<li class="highlight profile">
							<span>
								<span class="heading">Profile <a href="form_demo.php" class="pull-right">edit</a></span>
								<span class="img"></span>
								<span class="details">
									<a href="form_demo.php">Mosaic Pro</a>
									contact@mosaicpro.biz
								</span>
								<span class="clearfix"></span>
							</span>
						</li>
						<li>
							<span>
								<a class="btn btn-default btn-small pull-right" style="padding: 2px 10px; background: #fff;" href="login.php">Sign Out</a>
							</span>
						</li>
					</ul>
									</li>
			</ul>
		</div>
		
				<div id="wrapper">
		<div id="menu" class="hidden-phone">
			<div id="menuInner">
				<div id="search">
					<input type="text" placeholder="Quick search ..." />
					<button class="glyphicons search"><i></i></button>
				</div>
				<ul>
					<li class="heading"><span>Category</span></li>
					<li class="glyphicons home"><a href="index.php"><i></i><span>Dashboard</span></a></li>
					<li class="glyphicons cogwheels active"><a href="ui.php"><i></i><span>UI Elements</span></a></li>
					<li class="glyphicons charts"><a href="charts.php"><i></i><span>Charts</span></a></li>
					<li class="hasSubmenu">
						<a data-toggle="collapse" class="glyphicons show_thumbnails_with_lines" href="#menu_forms"><i></i><span>Forms</span></a>
						<ul class="collapse" id="menu_forms">
							<li class=""><a href="form_demo.php"><span>My Account</span></a></li>
							<li class=""><a href="form_elements.php"><span>Form Elements</span></a></li>
							<li class=""><a href="form_validator.php"><span>Form Validator</span></a></li>
							<li class=""><a href="file_managers.php"><span>File Managers</span></a></li>
						</ul>
					</li>
					<li class="">
						<a class="glyphicons table" href="tables.php"><i></i><span>Tables</span></a>
					</li>
					<li class="glyphicons calendar"><a href="calendar.php"><i></i><span>Calendar</span></a></li>
					<li class="glyphicons user"><a href="login.php"><i></i><span>Login</span></a></li>
				</ul>
				<ul>
					<li class="heading"><span>Sections</span></li>
					<li class="glyphicons coins"><a href="finances.php"><i></i><span>Finances</span></a></li>
					<li class="hasSubmenu">
						<a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_ecommerce"><i></i><span>Online Shop</span></a>
						<ul class="collapse" id="menu_ecommerce">
							<li class=""><a href="products.php"><span>Products</span></a></li>
							<li class=""><a href="product_edit.php"><span>Add product</span></a></li>
						</ul>
					</li>
					<li class="glyphicons sort"><a href="pages.php"><i></i><span>Site Pages</span></a></li>
					<li class="glyphicons picture"><a href="gallery.php"><i></i><span>Photo Gallery</span></a></li>
					<li class="glyphicons adress_book"><a href="bookings.php"><i></i><span>Bookings</span></a></li>
				</ul>
			</div>
		</div>
		<div id="content">
		<ul class="breadcrumb">
	<li><a href="index.php" class="glyphicons home"><i></i> AdminPlus</a></li>
	<li class="divider"></li>
	<li>UI Elements</li>
</ul>
<div class="separator"></div>

<div class="innerLR">
	<div class="widget widget-4">
		<div class="widget-head">
			<h3 class="heading">User Interface Elements</h3>
		</div>
		<div class="widget-body">
			<p>There are various user interface elements contained in AdminPlus, like navigation elements, different kind of buttons, with &amp; without icons, different sizes, accordions &amp; collapsibles, tabs &amp; pills, stacked &amp; regular, progress bars, sliders &amp; many more.</p>
		</div>
	
		<div class="widget-head">
			<h3 class="heading">Buttons</h3>
		</div>
		<div class="widget-body">
			<p>AdminPlus comes with over 400 Premium Glyphicons as a font, that can be easely customized by color, size and even CSS3 attributes like <code>text-shadow</code>. The Glyphicons can be used not only as standalone, but in addition to other elements, like buttons.</p>
		</div>

		<table class="table table-striped table-responsive swipe-horizontal table-vertical-center table-thead-simple">
			<thead>
				<tr>
					<th class="center">Regular Buttons</th>
					<th class="center">Buttons + Icons</th>
					<th class="center">Split Buttons</th>
					<th class="center">Disabled Buttons</th>
					<th class="center">Smaller Buttons</th>
					<!-- <th class="center">Big Buttons</th> -->
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="center"><button class="btn btn-block btn-default">Default</button></td>
					<td class="center"><button class="btn btn-block btn-default btn-icon glyphicons home"><i></i>Default</button></td>
					<td class="center">
						<div class="btn-group btn-block">
							<div class="leadcontainer">
								<button class="btn dropdown-lead btn-default">Default</button>
							</div>
							<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span> </a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
					</td>
					<td class="center"><button class="btn btn-block btn-default" disabled="">Default</button></td>
					<td class="center"><button class="btn btn-block btn-default btn-small">Default</button></td>
					<!-- <td class="center"><button class="btn btn-default btn-large btn-icon glyphicons home"><i></i>Default</button></td> -->
				</tr>
				<tr>
					<td class="center"><button class="btn btn-block btn-primary">Primary</button></td>
					<td class="center"><button class="btn btn-block btn-primary btn-icon glyphicons user"><i></i>Primary</button></td>
					<td class="center">
						<div class="btn-group btn-block">
							<div class="leadcontainer">
								<button class="btn dropdown-lead btn-primary">Primary</button>
							</div>
							<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span> </a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
					</td>
					<td class="center"><button class="btn btn-block btn-primary" disabled="">Primary</button></td>
					<td class="center"><button class="btn btn-block btn-primary btn-small">Primary</button></td>
					<!-- <td class="center"><button class="btn btn-primary btn-large btn-icon glyphicons user"><i></i>Primary</button></td> -->
				</tr>
				<tr>
					<td class="center"><button class="btn btn-block btn-success">Success</button></td>
					<td class="center"><button class="btn btn-block btn-success btn-icon glyphicons ok"><i></i>Success</button></td>
					<td class="center">
						<div class="btn-group btn-block">
							<div class="leadcontainer">
								<button class="btn dropdown-lead btn-success">Success</button>
							</div>
							<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span> </a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
					</td>
					<td class="center"><button class="btn btn-block btn-success" disabled="">Success</button></td>
					<td class="center"><button class="btn btn-block btn-success btn-small">Success</button></td>
					<!-- <td class="center"><button class="btn btn-success btn-large btn-icon glyphicons ok"><i></i>Success</button></td> -->
				</tr>
				<tr>
					<td class="center"><button class="btn btn-block btn-warning">Warning</button></td>
					<td class="center"><button class="btn btn-block btn-warning btn-icon glyphicons circle_exclamation_mark"><i></i>Warning</button></td>
					<td class="center">
						<div class="btn-group btn-block">
							<div class="leadcontainer">
								<button class="btn dropdown-lead btn-warning">Warning</button>
							</div>
							<a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span> </a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
					</td>
					<td class="center"><button class="btn btn-block btn-warning" disabled="">Warning</button></td>
					<td class="center"><button class="btn btn-block btn-warning btn-small">Warning</button></td>
					<!-- <td class="center"><button class="btn btn-warning btn-large btn-icon glyphicons circle_exclamation_mark"><i></i>Warning</button></td> -->
				</tr>
				<tr>
					<td class="center"><button class="btn btn-block btn-info">Info btn</button></td>
					<td class="center"><button class="btn btn-block btn-info btn-icon glyphicons circle_info"><i></i>Info btn</button></td>
					<td class="center">
						<div class="btn-group btn-block">
							<div class="leadcontainer">
								<button class="btn dropdown-lead btn-info">Info btn</button>
							</div>
							<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span> </a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
					</td>
					<td class="center"><button class="btn btn-block btn-info" disabled="">Info btn</button></td>
					<td class="center"><button class="btn btn-block btn-info btn-small">Info btn</button></td>
					<!-- <td class="center"><button class="btn btn-info btn-large btn-icon glyphicons circle_info"><i></i>Info btn</button></td> -->
				</tr>
				<tr>
					<td class="center"><button class="btn btn-block btn-inverse">Inverse</button></td>
					<td class="center"><button class="btn btn-block btn-inverse btn-icon glyphicons flash"><i></i>Inverse</button></td>
					<td class="center">
						<div class="btn-group btn-block">
							<div class="leadcontainer">
								<button class="btn dropdown-lead btn-inverse">Inverse</button>
							</div>
							<a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span> </a>
							<ul class="dropdown-menu pull-right">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
					</td>
					<td class="center"><button class="btn btn-block btn-inverse" disabled="">Inverse</button></td>
					<td class="center"><button class="btn btn-block btn-inverse btn-small">Inverse</button></td>
					<!-- <td class="center"><button class="btn btn-inverse btn-large btn-icon glyphicons flash"><i></i>Inverse</button></td> -->
				</tr>
			</tbody>
		</table><br/>

		<div class="widget-head">
			<h3 class="heading">Sliders</h3>
		</div>
		<div class="widget-body" style="padding: 20px 0;">

			<h4 class="heading-arrow">Simple Slider</h4>
			<div class="innerLR">
				<div class="slider-single slider-primary"></div>
			</div>	
			
			<div class="separator"></div>
			
			<h4 class="heading-arrow">Range Slider</h4>
			<div class="innerLR">
				<div class="range-slider row-fluid">
					<div class="span3"><input type="text" class="amount span12" /></div>
					<div class="span9" style="padding: 5px 0 0;"><div class="slider slider-primary"></div></div>
				</div>
			</div>
			
			<div class="separator"></div>
			
			<h4 class="heading-arrow">Range Fixed Minimum Slider</h4>
			<div class="innerLR">
				<div class="slider-range-min row-fluid">
					<div class="span3">
						<label class="span8">Maximum price:</label> 
						<input type="text" class="amount span4" />
					</div>
					<div class="span9" style="padding: 5px 0 0;">
						<div class="slider slider-primary"></div>
					</div>
				</div>
			</div>
			
			<div class="separator"></div>
			
			<h4 class="heading-arrow">Range Fixed Maximum Slider</h4>
			<div class="innerLR">
				<div class="slider-range-max row-fluid">
					<div class="span3">
					    <label class="span8">Maximum price:</label>
					    <input type="text" class="amount span4" />
					</div>
					<div class="span9" style="padding: 5px 0 0;"><div class="slider slider-primary"></div></div>
				</div>
			</div>
				
			<div class="separator"></div>
			
			<h4 class="heading-arrow">Snap to Increments Slider</h4>
			<div class="innerLR">
				<div class="increments-slider row-fluid">
					<div class="span3">
						 <label class="span8">$50 increments:</label>
					    <input type="text" class="span4 amount" />
				    </div>
				    <div class="span9" style="padding: 5px 0 0;">
						<div class="slider slider-primary"></div>
					</div>
				</div>
			</div>
			
			<div class="separator"></div>
			
			<h4 class="heading-arrow">Vertical Sliders</h4>
			<div class="innerLR">
				<div class="sliders-vertical">
				    <span class="slider-primary">77</span>
				    <span class="slider-warning">55</span>
				    <span class="slider-success">33</span>
				    <span class="slider-inverse">40</span>
				    <span class="slider-info">45</span>
				    <div class="clearfix"></div>
				</div>
			</div>
		</div>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Alerts</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="alert">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Warning!</strong> Best check yo self, you're not looking
							too good.
						</div>
						<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Oh snap!</strong> Change a few things up and try submitting
							again.
						</div>
					
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Well done!</strong> You successfully read this important
							alert message.
						</div>
					
						<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Heads up!</strong> This alert needs your attention, but
							it's not super important.
						</div>
					
						<div class="alert alert-block alert-error fade in">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<h4 class="alert-titleing">Oh snap! You got an error!</h4>
							<p>Change this and that and try again. Duis mollis, est non commodo
								luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
								elit. Cras mattis consectetur purus sit amet fermentum.</p>
							<p>
								<a class="btn btn-danger btn-icon glyphicons circle_arrow_right" href="#"><i></i>Take this action</a> 
								<a class="btn btn-success btn-icon glyphicons leaf" href="#"><i></i>Or do this</a>
							</p>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<br/>
		
		<table class="table table-bordered table-fill">
			<thead>
				<tr>
					<th class="shortRight">Progress Bars</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="shortRight">Default</td>
					<td>
						<div class="progress progress-striped">
							<div class="bar" style="width: 20%;"></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="shortRight">Info</td>
					<td>
						<div class="progress progress-striped  progress-info">
							<div class="bar" style="width: 40%;"></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="shortRight">Success</td>
					<td>
						<div class="progress progress-striped  progress-success">
							<div class="bar" style="width: 60%;"></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="shortRight">Warning</td>
					<td>
						<div class="progress progress-striped progress-warning">
							<div class="bar" style="width: 80%;"></div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="shortRight">Danger</td>
					<td>
						<div class="progress progress-striped progress-danger">
							<div class="bar" style="width: 20%;"></div>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<br/>
		
		<div class="well">
		<h4>Collapsible Accordions</h4>
		<div class="separator"></div>
		<div class="accordion" id="accordion2" style="margin-bottom: 0;">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
						Collapsible Group Item #1
					</a>
			    </div>
			    <div id="collapseOne" class="accordion-body collapse">
			      	<div class="accordion-inner">
			        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			      	</div>
			    </div>
		  	</div>
		  	<div class="accordion-group">
			    <div class="accordion-heading">
			      	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
			        	Collapsible Group Item #2
			      	</a>
			    </div>
			    <div id="collapseTwo" class="accordion-body collapse in">
			    	<div class="accordion-inner">
			        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			      	</div>
			    </div>
		  	</div>
		</div>
		</div>
		
		<div class="row-fluid">
			<div class="span6">
				<div class="relativeWrap">
					<div class="widget widget-gray widget-gray-white margin-bottom-none">
						<div class="widget-head">
							<h4 class="heading">Pagination</h4>
						</div>
						<div class="widget-body">
							<div class="pagination pagination-large" style="margin-top: 0; margin-bottom: 12px;">
								<ul>
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
							<div class="pagination" style="margin-top: 0; margin-bottom: 12px;">
								<ul>
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
							<div class="pagination pagination-small" style="margin-top: 0; margin-bottom: 12px;">
								<ul>
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
							<div class="pagination pagination-mini" style="margin: 0;">
								<ul>
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="span6">
				
				<div class="widget widget-gray widget-gray-white">
					<div class="widget-head">
						<h4 class="heading">Aligned right</h4>
					</div>
					<div class="widget-body">
						<div class="pagination pagination-right pagination-small" style="margin: 0;">
							<ul>
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="widget widget-gray widget-gray-white">
					<div class="widget-head">
						<h4 class="heading">Aligned center</h4>
					</div>
					<div class="widget-body">
						<div class="pagination pagination-centered pagination-small" style="margin: 0;">
							<ul>
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="widget widget-gray widget-gray-white margin-bottom-none">
					<div class="widget-head">
						<h4 class="heading">Pager</h4>
					</div>
					<div class="widget-body">
						<ul class="pager" style="margin: 0;">
							<li class="previous disabled"><a href="#">&larr; Older</a></li>
							<li class="next"><a href="#">Newer &rarr;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	
	</div>

	<h3 class="heading-arrow">Glyphicons CSS classes</h3>
<div id="docs_icons" style="text-align: center;">
	<a href="#" class="glyphicons no-js glass"><i></i>glass</a>
	<a href="#" class="glyphicons no-js leaf"><i></i>leaf</a>
	<a href="#" class="glyphicons no-js dog"><i></i>dog</a>
	<a href="#" class="glyphicons no-js user"><i></i>user</a>
	<a href="#" class="glyphicons no-js girl"><i></i>girl</a>
	<a href="#" class="glyphicons no-js car"><i></i>car</a>
	<a href="#" class="glyphicons no-js user_add"><i></i>user_add</a>
	<a href="#" class="glyphicons no-js user_remove"><i></i>user_remove</a>
	<a href="#" class="glyphicons no-js film"><i></i>film</a>
	<a href="#" class="glyphicons no-js magic"><i></i>magic</a>
	<a href="#" class="glyphicons no-js envelope"><i></i>envelope</a>
	<a href="#" class="glyphicons no-js camera"><i></i>camera</a>
	<a href="#" class="glyphicons no-js heart"><i></i>heart</a>
	<a href="#" class="glyphicons no-js beach_umbrella"><i></i>beach_umbrella</a>
	<a href="#" class="glyphicons no-js train"><i></i>train</a>
	<a href="#" class="glyphicons no-js print"><i></i>print</a>
	<a href="#" class="glyphicons no-js bin"><i></i>bin</a>
	<a href="#" class="glyphicons no-js music"><i></i>music</a>
	<a href="#" class="glyphicons no-js note"><i></i>note</a>
	<a href="#" class="glyphicons no-js heart_empty"><i></i>heart_empty</a>
	<a href="#" class="glyphicons no-js home"><i></i>home</a>
	<a href="#" class="glyphicons no-js snowflake"><i></i>snowflake</a>
	<a href="#" class="glyphicons no-js fire"><i></i>fire</a>
	<a href="#" class="glyphicons no-js magnet"><i></i>magnet</a>
	<a href="#" class="glyphicons no-js parents"><i></i>parents</a>
	<a href="#" class="glyphicons no-js binoculars"><i></i>binoculars</a>
	<a href="#" class="glyphicons no-js road"><i></i>road</a>
	<a href="#" class="glyphicons no-js search"><i></i>search</a>
	<a href="#" class="glyphicons no-js cars"><i></i>cars</a>
	<a href="#" class="glyphicons no-js notes_2"><i></i>notes_2</a>
	<a href="#" class="glyphicons no-js pencil"><i></i>pencil</a>
	<a href="#" class="glyphicons no-js bus"><i></i>bus</a>
	<a href="#" class="glyphicons no-js wifi_alt"><i></i>wifi_alt</a>
	<a href="#" class="glyphicons no-js luggage"><i></i>luggage</a>
	<a href="#" class="glyphicons no-js old_man"><i></i>old_man</a>
	<a href="#" class="glyphicons no-js woman"><i></i>woman</a>
	<a href="#" class="glyphicons no-js file"><i></i>file</a>
	<a href="#" class="glyphicons no-js coins"><i></i>coins</a>
	<a href="#" class="glyphicons no-js airplane"><i></i>airplane</a>
	<a href="#" class="glyphicons no-js notes"><i></i>notes</a>
	<a href="#" class="glyphicons no-js stats"><i></i>stats</a>
	<a href="#" class="glyphicons no-js charts"><i></i>charts</a>
	<a href="#" class="glyphicons no-js pie_chart"><i></i>pie_chart</a>
	<a href="#" class="glyphicons no-js group"><i></i>group</a>
	<a href="#" class="glyphicons no-js keys"><i></i>keys</a>
	<a href="#" class="glyphicons no-js calendar"><i></i>calendar</a>
	<a href="#" class="glyphicons no-js router"><i></i>router</a>
	<a href="#" class="glyphicons no-js camera_small"><i></i>camera_small</a>
	<a href="#" class="glyphicons no-js dislikes"><i></i>dislikes</a>
	<a href="#" class="glyphicons no-js star"><i></i>star</a>
	<a href="#" class="glyphicons no-js link"><i></i>link</a>
	<a href="#" class="glyphicons no-js eye_open"><i></i>eye_open</a>
	<a href="#" class="glyphicons no-js eye_close"><i></i>eye_close</a>
	<a href="#" class="glyphicons no-js alarm"><i></i>alarm</a>
	<a href="#" class="glyphicons no-js clock"><i></i>clock</a>
	<a href="#" class="glyphicons no-js stopwatch"><i></i>stopwatch</a>
	<a href="#" class="glyphicons no-js projector"><i></i>projector</a>
	<a href="#" class="glyphicons no-js history"><i></i>history</a>
	<a href="#" class="glyphicons no-js truck"><i></i>truck</a>
	<a href="#" class="glyphicons no-js cargo"><i></i>cargo</a>
	<a href="#" class="glyphicons no-js compass"><i></i>compass</a>
	<a href="#" class="glyphicons no-js keynote"><i></i>keynote</a>
	<a href="#" class="glyphicons no-js paperclip"><i></i>paperclip</a>
	<a href="#" class="glyphicons no-js power"><i></i>power</a>
	<a href="#" class="glyphicons no-js lightbulb"><i></i>lightbulb</a>
	<a href="#" class="glyphicons no-js tag"><i></i>tag</a>
	<a href="#" class="glyphicons no-js tags"><i></i>tags</a>
	<a href="#" class="glyphicons no-js cleaning"><i></i>cleaning</a>
	<a href="#" class="glyphicons no-js ruller"><i></i>ruller</a>
	<a href="#" class="glyphicons no-js gift"><i></i>gift</a>
	<a href="#" class="glyphicons no-js umbrella"><i></i>umbrella</a>
	<a href="#" class="glyphicons no-js book"><i></i>book</a>
	<a href="#" class="glyphicons no-js bookmark"><i></i>bookmark</a>
	<a href="#" class="glyphicons no-js wifi"><i></i>wifi</a>
	<a href="#" class="glyphicons no-js cup"><i></i>cup</a>
	<a href="#" class="glyphicons no-js stroller"><i></i>stroller</a>
	<a href="#" class="glyphicons no-js headphones"><i></i>headphones</a>
	<a href="#" class="glyphicons no-js headset"><i></i>headset</a>
	<a href="#" class="glyphicons no-js warning_sign"><i></i>warning_sign</a>
	<a href="#" class="glyphicons no-js signal"><i></i>signal</a>
	<a href="#" class="glyphicons no-js retweet"><i></i>retweet</a>
	<a href="#" class="glyphicons no-js refresh"><i></i>refresh</a>
	<a href="#" class="glyphicons no-js roundabout"><i></i>roundabout</a>
	<a href="#" class="glyphicons no-js random"><i></i>random</a>
	<a href="#" class="glyphicons no-js heat"><i></i>heat</a>
	<a href="#" class="glyphicons no-js repeat"><i></i>repeat</a>
	<a href="#" class="glyphicons no-js display"><i></i>display</a>
	<a href="#" class="glyphicons no-js log_book"><i></i>log_book</a>
	<a href="#" class="glyphicons no-js adress_book"><i></i>adress_book</a>
	<a href="#" class="glyphicons no-js building"><i></i>building</a>
	<a href="#" class="glyphicons no-js eyedropper"><i></i>eyedropper</a>
	<a href="#" class="glyphicons no-js adjust"><i></i>adjust</a>
	<a href="#" class="glyphicons no-js tint"><i></i>tint</a>
	<a href="#" class="glyphicons no-js crop"><i></i>crop</a>
	<a href="#" class="glyphicons no-js vector_path_square"><i></i>vector_path_square</a>
	<a href="#" class="glyphicons no-js vector_path_circle"><i></i>vector_path_circle</a>
	<a href="#" class="glyphicons no-js vector_path_polygon"><i></i>vector_path_polygon</a>
	<a href="#" class="glyphicons no-js vector_path_line"><i></i>vector_path_line</a>
	<a href="#" class="glyphicons no-js vector_path_curve"><i></i>vector_path_curve</a>
	<a href="#" class="glyphicons no-js vector_path_all"><i></i>vector_path_all</a>
	<a href="#" class="glyphicons no-js font"><i></i>font</a>
	<a href="#" class="glyphicons no-js italic"><i></i>italic</a>
	<a href="#" class="glyphicons no-js bold"><i></i>bold</a>
	<a href="#" class="glyphicons no-js text_underline"><i></i>text_underline</a>
	<a href="#" class="glyphicons no-js text_strike"><i></i>text_strike</a>
	<a href="#" class="glyphicons no-js text_height"><i></i>text_height</a>
	<a href="#" class="glyphicons no-js text_width"><i></i>text_width</a>
	<a href="#" class="glyphicons no-js text_resize"><i></i>text_resize</a>
	<a href="#" class="glyphicons no-js left_indent"><i></i>left_indent</a>
	<a href="#" class="glyphicons no-js right_indent"><i></i>right_indent</a>
	<a href="#" class="glyphicons no-js align_left"><i></i>align_left</a>
	<a href="#" class="glyphicons no-js align_center"><i></i>align_center</a>
	<a href="#" class="glyphicons no-js align_right"><i></i>align_right</a>
	<a href="#" class="glyphicons no-js justify"><i></i>justify</a>
	<a href="#" class="glyphicons no-js list"><i></i>list</a>
	<a href="#" class="glyphicons no-js text_smaller"><i></i>text_smaller</a>
	<a href="#" class="glyphicons no-js text_bigger"><i></i>text_bigger</a>
	<a href="#" class="glyphicons no-js embed"><i></i>embed</a>
	<a href="#" class="glyphicons no-js embed_close"><i></i>embed_close</a>
	<a href="#" class="glyphicons no-js table"><i></i>table</a>
	<a href="#" class="glyphicons no-js message_full"><i></i>message_full</a>
	<a href="#" class="glyphicons no-js message_empty"><i></i>message_empty</a>
	<a href="#" class="glyphicons no-js message_in"><i></i>message_in</a>
	<a href="#" class="glyphicons no-js message_out"><i></i>message_out</a>
	<a href="#" class="glyphicons no-js message_plus"><i></i>message_plus</a>
	<a href="#" class="glyphicons no-js message_minus"><i></i>message_minus</a>
	<a href="#" class="glyphicons no-js message_ban"><i></i>message_ban</a>
	<a href="#" class="glyphicons no-js message_flag"><i></i>message_flag</a>
	<a href="#" class="glyphicons no-js message_lock"><i></i>message_lock</a>
	<a href="#" class="glyphicons no-js message_new"><i></i>message_new</a>
	<a href="#" class="glyphicons no-js inbox"><i></i>inbox</a>
	<a href="#" class="glyphicons no-js inbox_plus"><i></i>inbox_plus</a>
	<a href="#" class="glyphicons no-js inbox_minus"><i></i>inbox_minus</a>
	<a href="#" class="glyphicons no-js inbox_lock"><i></i>inbox_lock</a>
	<a href="#" class="glyphicons no-js inbox_in"><i></i>inbox_in</a>
	<a href="#" class="glyphicons no-js inbox_out"><i></i>inbox_out</a>
	<a href="#" class="glyphicons no-js cogwheel"><i></i>cogwheel</a>
	<a href="#" class="glyphicons no-js cogwheels"><i></i>cogwheels</a>
	<a href="#" class="glyphicons no-js picture"><i></i>picture</a>
	<a href="#" class="glyphicons no-js adjust_alt"><i></i>adjust_alt</a>
	<a href="#" class="glyphicons no-js database_lock"><i></i>database_lock</a>
	<a href="#" class="glyphicons no-js database_plus"><i></i>database_plus</a>
	<a href="#" class="glyphicons no-js database_minus"><i></i>database_minus</a>
	<a href="#" class="glyphicons no-js database_ban"><i></i>database_ban</a>
	<a href="#" class="glyphicons no-js folder_open"><i></i>folder_open</a>
	<a href="#" class="glyphicons no-js folder_plus"><i></i>folder_plus</a>
	<a href="#" class="glyphicons no-js folder_minus"><i></i>folder_minus</a>
	<a href="#" class="glyphicons no-js folder_lock"><i></i>folder_lock</a>
	<a href="#" class="glyphicons no-js folder_flag"><i></i>folder_flag</a>
	<a href="#" class="glyphicons no-js folder_new"><i></i>folder_new</a>
	<a href="#" class="glyphicons no-js edit"><i></i>edit</a>
	<a href="#" class="glyphicons no-js new_window"><i></i>new_window</a>
	<a href="#" class="glyphicons no-js check"><i></i>check</a>
	<a href="#" class="glyphicons no-js unchecked"><i></i>unchecked</a>
	<a href="#" class="glyphicons no-js more_windows"><i></i>more_windows</a>
	<a href="#" class="glyphicons no-js show_big_thumbnails"><i></i>show_big_thumbnails</a>
	<a href="#" class="glyphicons no-js show_thumbnails"><i></i>show_thumbnails</a>
	<a href="#" class="glyphicons no-js show_thumbnails_with_lines"><i></i>show_thumbnails_with_lines</a>
	<a href="#" class="glyphicons no-js show_lines"><i></i>show_lines</a>
	<a href="#" class="glyphicons no-js playlist"><i></i>playlist</a>
	<a href="#" class="glyphicons no-js imac"><i></i>imac</a>
	<a href="#" class="glyphicons no-js macbook"><i></i>macbook</a>
	<a href="#" class="glyphicons no-js ipad"><i></i>ipad</a>
	<a href="#" class="glyphicons no-js iphone"><i></i>iphone</a>
	<a href="#" class="glyphicons no-js iphone_transfer"><i></i>iphone_transfer</a>
	<a href="#" class="glyphicons no-js iphone_exchange"><i></i>iphone_exchange</a>
	<a href="#" class="glyphicons no-js ipod"><i></i>ipod</a>
	<a href="#" class="glyphicons no-js ipod_shuffle"><i></i>ipod_shuffle</a>
	<a href="#" class="glyphicons no-js ear_plugs"><i></i>ear_plugs</a>
	<a href="#" class="glyphicons no-js phone"><i></i>phone</a>
	<a href="#" class="glyphicons no-js step_backward"><i></i>step_backward</a>
	<a href="#" class="glyphicons no-js fast_backward"><i></i>fast_backward</a>
	<a href="#" class="glyphicons no-js rewind"><i></i>rewind</a>
	<a href="#" class="glyphicons no-js play"><i></i>play</a>
	<a href="#" class="glyphicons no-js pause"><i></i>pause</a>
	<a href="#" class="glyphicons no-js stop"><i></i>stop</a>
	<a href="#" class="glyphicons no-js forward"><i></i>forward</a>
	<a href="#" class="glyphicons no-js fast_forward"><i></i>fast_forward</a>
	<a href="#" class="glyphicons no-js step_forward"><i></i>step_forward</a>
	<a href="#" class="glyphicons no-js eject"><i></i>eject</a>
	<a href="#" class="glyphicons no-js facetime_video"><i></i>facetime_video</a>
	<a href="#" class="glyphicons no-js download_alt"><i></i>download_alt</a>
	<a href="#" class="glyphicons no-js mute"><i></i>mute</a>
	<a href="#" class="glyphicons no-js volume_down"><i></i>volume_down</a>
	<a href="#" class="glyphicons no-js volume_up"><i></i>volume_up</a>
	<a href="#" class="glyphicons no-js screenshot"><i></i>screenshot</a>
	<a href="#" class="glyphicons no-js move"><i></i>move</a>
	<a href="#" class="glyphicons no-js more"><i></i>more</a>
	<a href="#" class="glyphicons no-js brightness_reduce"><i></i>brightness_reduce</a>
	<a href="#" class="glyphicons no-js brightness_increase"><i></i>brightness_increase</a>
	<a href="#" class="glyphicons no-js circle_plus"><i></i>circle_plus</a>
	<a href="#" class="glyphicons no-js circle_minus"><i></i>circle_minus</a>
	<a href="#" class="glyphicons no-js circle_remove"><i></i>circle_remove</a>
	<a href="#" class="glyphicons no-js circle_ok"><i></i>circle_ok</a>
	<a href="#" class="glyphicons no-js circle_question_mark"><i></i>circle_question_mark</a>
	<a href="#" class="glyphicons no-js circle_info"><i></i>circle_info</a>
	<a href="#" class="glyphicons no-js circle_exclamation_mark"><i></i>circle_exclamation_mark</a>
	<a href="#" class="glyphicons no-js remove"><i></i>remove</a>
	<a href="#" class="glyphicons no-js ok"><i></i>ok</a>
	<a href="#" class="glyphicons no-js ban"><i></i>ban</a>
	<a href="#" class="glyphicons no-js download"><i></i>download</a>
	<a href="#" class="glyphicons no-js upload"><i></i>upload</a>
	<a href="#" class="glyphicons no-js shopping_cart"><i></i>shopping_cart</a>
	<a href="#" class="glyphicons no-js lock"><i></i>lock</a>
	<a href="#" class="glyphicons no-js unlock"><i></i>unlock</a>
	<a href="#" class="glyphicons no-js electricity"><i></i>electricity</a>
	<a href="#" class="glyphicons no-js ok_2"><i></i>ok_2</a>
	<a href="#" class="glyphicons no-js remove_2"><i></i>remove_2</a>
	<a href="#" class="glyphicons no-js cart_out"><i></i>cart_out</a>
	<a href="#" class="glyphicons no-js cart_in"><i></i>cart_in</a>
	<a href="#" class="glyphicons no-js left_arrow"><i></i>left_arrow</a>
	<a href="#" class="glyphicons no-js right_arrow"><i></i>right_arrow</a>
	<a href="#" class="glyphicons no-js down_arrow"><i></i>down_arrow</a>
	<a href="#" class="glyphicons no-js up_arrow"><i></i>up_arrow</a>
	<a href="#" class="glyphicons no-js resize_small"><i></i>resize_small</a>
	<a href="#" class="glyphicons no-js resize_full"><i></i>resize_full</a>
	<a href="#" class="glyphicons no-js circle_arrow_left"><i></i>circle_arrow_left</a>
	<a href="#" class="glyphicons no-js circle_arrow_right"><i></i>circle_arrow_right</a>
	<a href="#" class="glyphicons no-js circle_arrow_top"><i></i>circle_arrow_top</a>
	<a href="#" class="glyphicons no-js circle_arrow_down"><i></i>circle_arrow_down</a>
	<a href="#" class="glyphicons no-js play_button"><i></i>play_button</a>
	<a href="#" class="glyphicons no-js unshare"><i></i>unshare</a>
	<a href="#" class="glyphicons no-js share"><i></i>share</a>
	<a href="#" class="glyphicons no-js chevron-right"><i></i>chevron-right</a>
	<a href="#" class="glyphicons no-js chevron-left"><i></i>chevron-left</a>
	<a href="#" class="glyphicons no-js bluetooth"><i></i>bluetooth</a>
	<a href="#" class="glyphicons no-js euro"><i></i>euro</a>
	<a href="#" class="glyphicons no-js usd"><i></i>usd</a>
	<a href="#" class="glyphicons no-js gbp"><i></i>gbp</a>
	<a href="#" class="glyphicons no-js retweet_2"><i></i>retweet_2</a>
	<a href="#" class="glyphicons no-js moon"><i></i>moon</a>
	<a href="#" class="glyphicons no-js sun"><i></i>sun</a>
	<a href="#" class="glyphicons no-js cloud"><i></i>cloud</a>
	<a href="#" class="glyphicons no-js direction"><i></i>direction</a>
	<a href="#" class="glyphicons no-js brush"><i></i>brush</a>
	<a href="#" class="glyphicons no-js pen"><i></i>pen</a>
	<a href="#" class="glyphicons no-js zoom_in"><i></i>zoom_in</a>
	<a href="#" class="glyphicons no-js zoom_out"><i></i>zoom_out</a>
	<a href="#" class="glyphicons no-js pin"><i></i>pin</a>
	<a href="#" class="glyphicons no-js albums"><i></i>albums</a>
	<a href="#" class="glyphicons no-js rotation_lock"><i></i>rotation_lock</a>
	<a href="#" class="glyphicons no-js flash"><i></i>flash</a>
	<a href="#" class="glyphicons no-js google_maps"><i></i>google_maps</a>
	<a href="#" class="glyphicons no-js anchor"><i></i>anchor</a>
	<a href="#" class="glyphicons no-js conversation"><i></i>conversation</a>
	<a href="#" class="glyphicons no-js chat"><i></i>chat</a>
	<a href="#" class="glyphicons no-js male"><i></i>male</a>
	<a href="#" class="glyphicons no-js female"><i></i>female</a>
	<a href="#" class="glyphicons no-js asterisk"><i></i>asterisk</a>
	<a href="#" class="glyphicons no-js divide"><i></i>divide</a>
	<a href="#" class="glyphicons no-js snorkel_diving"><i></i>snorkel_diving</a>
	<a href="#" class="glyphicons no-js scuba_diving"><i></i>scuba_diving</a>
	<a href="#" class="glyphicons no-js oxygen_bottle"><i></i>oxygen_bottle</a>
	<a href="#" class="glyphicons no-js fins"><i></i>fins</a>
	<a href="#" class="glyphicons no-js fishes"><i></i>fishes</a>
	<a href="#" class="glyphicons no-js boat"><i></i>boat</a>
	<a href="#" class="glyphicons no-js delete"><i></i>delete</a>
	<a href="#" class="glyphicons no-js sheriffs_star"><i></i>sheriffs_star</a>
	<a href="#" class="glyphicons no-js qrcode"><i></i>qrcode</a>
	<a href="#" class="glyphicons no-js barcode"><i></i>barcode</a>
	<a href="#" class="glyphicons no-js pool"><i></i>pool</a>
	<a href="#" class="glyphicons no-js buoy"><i></i>buoy</a>
	<a href="#" class="glyphicons no-js spade"><i></i>spade</a>
	<a href="#" class="glyphicons no-js bank"><i></i>bank</a>
	<a href="#" class="glyphicons no-js vcard"><i></i>vcard</a>
	<a href="#" class="glyphicons no-js electrical_plug"><i></i>electrical_plug</a>
	<a href="#" class="glyphicons no-js flag"><i></i>flag</a>
	<a href="#" class="glyphicons no-js credit_card"><i></i>credit_card</a>
	<a href="#" class="glyphicons no-js keyboard-wireless"><i></i>keyboard-wireless</a>
	<a href="#" class="glyphicons no-js keyboard-wired"><i></i>keyboard-wired</a>
	<a href="#" class="glyphicons no-js shield"><i></i>shield</a>
	<a href="#" class="glyphicons no-js ring"><i></i>ring</a>
	<a href="#" class="glyphicons no-js cake"><i></i>cake</a>
	<a href="#" class="glyphicons no-js drink"><i></i>drink</a>
	<a href="#" class="glyphicons no-js beer"><i></i>beer</a>
	<a href="#" class="glyphicons no-js fast_food"><i></i>fast_food</a>
	<a href="#" class="glyphicons no-js cutlery"><i></i>cutlery</a>
	<a href="#" class="glyphicons no-js pizza"><i></i>pizza</a>
	<a href="#" class="glyphicons no-js birthday_cake"><i></i>birthday_cake</a>
	<a href="#" class="glyphicons no-js tablet"><i></i>tablet</a>
	<a href="#" class="glyphicons no-js settings"><i></i>settings</a>
	<a href="#" class="glyphicons no-js bullets"><i></i>bullets</a>
	<a href="#" class="glyphicons no-js cardio"><i></i>cardio</a>
	<a href="#" class="glyphicons no-js t-shirt"><i></i>t-shirt</a>
	<a href="#" class="glyphicons no-js pants"><i></i>pants</a>
	<a href="#" class="glyphicons no-js sweater"><i></i>sweater</a>
	<a href="#" class="glyphicons no-js fabric"><i></i>fabric</a>
	<a href="#" class="glyphicons no-js leather"><i></i>leather</a>
	<a href="#" class="glyphicons no-js scissors"><i></i>scissors</a>
	<a href="#" class="glyphicons no-js bomb"><i></i>bomb</a>
	<a href="#" class="glyphicons no-js skull"><i></i>skull</a>
	<a href="#" class="glyphicons no-js celebration"><i></i>celebration</a>
	<a href="#" class="glyphicons no-js tea_kettle"><i></i>tea_kettle</a>
	<a href="#" class="glyphicons no-js french_press"><i></i>french_press</a>
	<a href="#" class="glyphicons no-js coffe_cup"><i></i>coffe_cup</a>
	<a href="#" class="glyphicons no-js pot"><i></i>pot</a>
	<a href="#" class="glyphicons no-js grater"><i></i>grater</a>
	<a href="#" class="glyphicons no-js kettle"><i></i>kettle</a>
	<a href="#" class="glyphicons no-js hospital"><i></i>hospital</a>
	<a href="#" class="glyphicons no-js hospital_h"><i></i>hospital_h</a>
	<a href="#" class="glyphicons no-js microphone"><i></i>microphone</a>
	<a href="#" class="glyphicons no-js webcam"><i></i>webcam</a>
	<a href="#" class="glyphicons no-js temple_christianity_church"><i></i>temple_christianity_church</a>
	<a href="#" class="glyphicons no-js temple_islam"><i></i>temple_islam</a>
	<a href="#" class="glyphicons no-js temple_hindu"><i></i>temple_hindu</a>
	<a href="#" class="glyphicons no-js temple_buddhist"><i></i>temple_buddhist</a>
	<a href="#" class="glyphicons no-js bicycle"><i></i>bicycle</a>
	<a href="#" class="glyphicons no-js life_preserver"><i></i>life_preserver</a>
	<a href="#" class="glyphicons no-js share_alt"><i></i>share_alt</a>
	<a href="#" class="glyphicons no-js comments"><i></i>comments</a>
	<a href="#" class="glyphicons no-js flower"><i></i>flower</a>
	<a href="#" class="glyphicons no-js baseball"><i></i>baseball</a>
	<a href="#" class="glyphicons no-js rugby"><i></i>rugby</a>
	<a href="#" class="glyphicons no-js ax"><i></i>ax</a>
	<a href="#" class="glyphicons no-js table_tennis"><i></i>table_tennis</a>
	<a href="#" class="glyphicons no-js bowling"><i></i>bowling</a>
	<a href="#" class="glyphicons no-js tree_conifer"><i></i>tree_conifer</a>
	<a href="#" class="glyphicons no-js tree_deciduous"><i></i>tree_deciduous</a>
	<a href="#" class="glyphicons no-js more_items"><i></i>more_items</a>
	<a href="#" class="glyphicons no-js sort"><i></i>sort</a>
	<a href="#" class="glyphicons no-js filter"><i></i>filter</a>
	<a href="#" class="glyphicons no-js gamepad"><i></i>gamepad</a>
	<a href="#" class="glyphicons no-js playing_dices"><i></i>playing_dices</a>
	<a href="#" class="glyphicons no-js calculator"><i></i>calculator</a>
	<a href="#" class="glyphicons no-js tie"><i></i>tie</a>
	<a href="#" class="glyphicons no-js wallet"><i></i>wallet</a>
	<a href="#" class="glyphicons no-js piano"><i></i>piano</a>
	<a href="#" class="glyphicons no-js sampler"><i></i>sampler</a>
	<a href="#" class="glyphicons no-js podium"><i></i>podium</a>
	<a href="#" class="glyphicons no-js soccer_ball"><i></i>soccer_ball</a>
	<a href="#" class="glyphicons no-js blog"><i></i>blog</a>
	<a href="#" class="glyphicons no-js dashboard"><i></i>dashboard</a>
	<a href="#" class="glyphicons no-js certificate"><i></i>certificate</a>
	<a href="#" class="glyphicons no-js bell"><i></i>bell</a>
    <!--
# ---------------------------------------------------
# ScriptGates.com - a very power script Source site! 
# ---------------------------------------------------
# This file has been downloaded from ScriptGates.com 
# Homepage: http://scriptgates.com/              
# ---------------------------------------------------
# You'll find your Updates everyday at ScriptGates.com
# ----------------------------------------------------

.    .  .. .. ,MMMMMMMMMMMMM.   .     .  .  .  .  .  .    .    .  ..  .DMMMMMMMMMMMM?              
..  .      8MMMMMMMMOI+?Z8MMMMMMM..                    .          MMMMMMMDZI+?ZNMMMMMMMM            
. .      +MMMMMMMMMMMMMMMMMMM$  . ,8+  .  .   .  .  .  .  .  ..N    .=MMMMMMMMMMMMMMMMMMMD          
. .  . .MMMMMMMMMMMMMMMMMMMMMMMMMM:            .  .             ,MMMMMMMMMMMMMMMMMMMMMMMMMM..  .  .
.......MMMMMM8$7ZNMMMMMMMMMMMMMMMMMMM=  ................. .. .MMMMMMMMMMMMMMMMMMMMO$7OMMMMMM .......
....................... .=MMMMMMMMMMMMMM ..................MMMMMMMMMMMMMM7. . .............   ......
.............................~MMMMMMMMMMMM...............NMMMMMMMMMMMO..............................
... ........ ....................MMMMMM.....................MMMMMM~ ................................
... ...............................MMMMM...................OMMMM....................................
..  .............. ,7DMMM..$:.   ....+MM8 ................:MMD....... ,I .MMMNZ:. ..................
...............~MMM~.. ..... .8MMM8....ZM..  ........... .MM ...IMMMN .  ....  .MMM8 ...............
....M .......7MM  NMMMMMMMMMMMMMM8.MMM. .M.O...........M.$ . MMM 7MMMMMMMMMMMMMMM..MMM .......?.....
. ...$ ....~MM,MMMMMMMMMMMMMMMMMMMMMMMM ...N ..........M....MMMMMMMMMMMMMMMMMMMMMMMM MM8 ....M......
.. ...,MMMMMMM+ .+MMMMMMMMMMMMMMMM$.MMM....M...........M ...$MM:+MMMMMMMMMMMMMMMM7. :MMMMMMM+ ......
.  .:.MN. . .,MMMMMMMMMMD. MMMMMMMMM.. ....M...........M..... .8MMMMMMMM..8MMMMMMMMMM? ... DM .I ...
.. M. ........... .. .::: .,.  ...........MM...........MM .......... . ...:::, .  ............ 8....
.  ...................................... MM...........MM$ .........................................
.. ..................................... MMM ..........MMM= ........................................
. .....................................,MMMM...........MMMMO .......................................
......................................MMMMMM...........MMMMMM ......................................
. ..................................+MM, =MM...........MMN  MMN ....................................
. ................................:MM  ..MMM ..........NMM....NMZ...................................
..  ....................... OMM .MM......MM~............MM .....NM .MMM  ..................... .....
. . .M=. ............ ..NMMMM$ ..M.......MM.............MM ......M...=MMMMM:   ........... ..MN.....
.   .MMMMMMM8ZODMMMMMMMM.  ....... ......DM ............MM.......? .....   DMMMMMMMN8ZZNMMMMMM......
..  ..MMMM..MMMM~ ...................,MMM..MMMI. . .+MMM~.MMMD ....................MMMM~.DMMM.......
.   ...MMMM .MMMMM  .......................  ....,, . .   . .................... MMMMM..NMMM........
.   ....MMMM..,MMMMM.................... MMMMMMMMMMMMMMMMM.................... MMMMMI .8MMM.........
.    ....MMMM . MMMMMM ................MMMMMMMMMMMMMMMMMMMMM ................MMMMMM  .MMMM. ........
.  .......MMMM  ..MMMMMM ..     .:?DMMMMMMMMMMM ....MMMMMMMMMMMD7~  . .   .MMMMMMI ..MMMM...........
.  ........:MMMN...8MMMMMMMMMMMMMMMMMMMMMMMMM ........MMMMMMMMMMMMMMMMMMMMMMMMMM...~MMMD ...........
. .......... MMMM= ..IMMMMMMMMMMMMMMMMMMMMMI...........,MMMMMMMMMMMMMMMMMMMMMD ...MMMM..............
.    .........=MMM~M   ..............MMMMMMMMMMMMMMMMMMMMMMMMM,..............  MONMMD...............
..  ............MMM  ZM...................  ... ..  ..  .  .................8N. MMM.................
.   ..............MM, ...=M~ .  ..................................... ..MO.....MM. .................
.   ...............~MM .............................................  .......ZM8....................
.   .................?M  ..................~MMMMMMMMMMMD....................MN......................
.    ................. 8M....................NMMMMMMMM  ..................8M  ......................
.    ....................I+ ..................MMMMMMM................... M .........................
.    ......................I .................MMMMMMM .................N ...........................
.  .......................... ...............IMMMMMMMM .............................................
. . .........................................MMMMMMMMM .............................................
.. ..........................................MMMMMMMMM .............................................
...  ........................................MMMMMMMMM .............................................
. . .........................................,MMMMMMMN..............................................
..............................................MMMMMMM ..............................................
..............................................NMMMMMM ..............................................
...............................................MMMMM+...............................................
...............................................OMMMM................................................
....................................................................................................
......... ..... .................... .  . .. .......... .. .  .  . .. ... .. .. ............... .. .
-->
	<a href="#" class="glyphicons no-js candle"><i></i>candle</a>
	<a href="#" class="glyphicons no-js pushpin"><i></i>pushpin</a>
	<a href="#" class="glyphicons no-js iphone_shake"><i></i>iphone_shake</a>
	<a href="#" class="glyphicons no-js pin_flag"><i></i>pin_flag</a>
	<a href="#" class="glyphicons no-js turtle"><i></i>turtle</a>
	<a href="#" class="glyphicons no-js rabbit"><i></i>rabbit</a>
	<a href="#" class="glyphicons no-js globe"><i></i>globe</a>
	<a href="#" class="glyphicons no-js briefcase"><i></i>briefcase</a>
	<a href="#" class="glyphicons no-js hdd"><i></i>hdd</a>
	<a href="#" class="glyphicons no-js thumbs_up"><i></i>thumbs_up</a>
	<a href="#" class="glyphicons no-js thumbs_down"><i></i>thumbs_down</a>
	<a href="#" class="glyphicons no-js hand_right"><i></i>hand_right</a>
	<a href="#" class="glyphicons no-js hand_left"><i></i>hand_left</a>
	<a href="#" class="glyphicons no-js hand_up"><i></i>hand_up</a>
	<a href="#" class="glyphicons no-js hand_down"><i></i>hand_down</a>
	<a href="#" class="glyphicons no-js fullscreen"><i></i>fullscreen</a>
	<a href="#" class="glyphicons no-js shopping_bag"><i></i>shopping_bag</a>
	<a href="#" class="glyphicons no-js book_open"><i></i>book_open</a>
	<a href="#" class="glyphicons no-js nameplate"><i></i>nameplate</a>
	<a href="#" class="glyphicons no-js nameplate_alt"><i></i>nameplate_alt</a>
	<a href="#" class="glyphicons no-js vases"><i></i>vases</a>
	<a href="#" class="glyphicons no-js bullhorn"><i></i>bullhorn</a>
	<a href="#" class="glyphicons no-js dumbbell"><i></i>dumbbell</a>
	<a href="#" class="glyphicons no-js suitcase"><i></i>suitcase</a>
	<a href="#" class="glyphicons no-js file_import"><i></i>file_import</a>
	<a href="#" class="glyphicons no-js file_export"><i></i>file_export</a>
	<a href="#" class="glyphicons no-js bug"><i></i>bug</a>
	<a href="#" class="glyphicons no-js crown"><i></i>crown</a>
	<a href="#" class="glyphicons no-js smoking"><i></i>smoking</a>
	<a href="#" class="glyphicons no-js cloud-upload"><i></i>cloud-upload</a>
	<a href="#" class="glyphicons no-js cloud-download"><i></i>cloud-download</a>
	<a href="#" class="glyphicons no-js restart"><i></i>restart</a>
	<a href="#" class="glyphicons no-js security_camera"><i></i>security_camera</a>
	<a href="#" class="glyphicons no-js expand"><i></i>expand</a>
	<a href="#" class="glyphicons no-js collapse"><i></i>collapse</a>
	<a href="#" class="glyphicons no-js collapse_top"><i></i>collapse_top</a>
	<a href="#" class="glyphicons no-js globe_af"><i></i>globe_af</a>
	<a href="#" class="glyphicons no-js global"><i></i>global</a>
	<a href="#" class="glyphicons no-js spray"><i></i>spray</a>
	<a href="#" class="glyphicons no-js nails"><i></i>nails</a>
	<a href="#" class="glyphicons no-js claw_hammer"><i></i>claw_hammer</a>
	<a href="#" class="glyphicons no-js classic_hammer"><i></i>classic_hammer</a>
	<a href="#" class="glyphicons no-js hand_saw"><i></i>hand_saw</a>
	<a href="#" class="glyphicons no-js riflescope"><i></i>riflescope</a>
	<a href="#" class="glyphicons no-js electrical_socket_eu"><i></i>electrical_socket_eu</a>
	<a href="#" class="glyphicons no-js electrical_socket_us"><i></i>electrical_socket_us</a>
	<a href="#" class="glyphicons no-js pinterest"><i></i>pinterest</a>
	<a href="#" class="glyphicons no-js dropbox"><i></i>dropbox</a>
	<a href="#" class="glyphicons no-js google_plus"><i></i>google_plus</a>
	<a href="#" class="glyphicons no-js jolicloud"><i></i>jolicloud</a>
	<a href="#" class="glyphicons no-js yahoo"><i></i>yahoo</a>
	<a href="#" class="glyphicons no-js blogger"><i></i>blogger</a>
	<a href="#" class="glyphicons no-js picasa"><i></i>picasa</a>
	<a href="#" class="glyphicons no-js amazon"><i></i>amazon</a>
	<a href="#" class="glyphicons no-js tumblr"><i></i>tumblr</a>
	<a href="#" class="glyphicons no-js wordpress"><i></i>wordpress</a>
	<a href="#" class="glyphicons no-js instapaper"><i></i>instapaper</a>
	<a href="#" class="glyphicons no-js evernote"><i></i>evernote</a>
	<a href="#" class="glyphicons no-js xing"><i></i>xing</a>
	<a href="#" class="glyphicons no-js zootool"><i></i>zootool</a>
	<a href="#" class="glyphicons no-js dribbble"><i></i>dribbble</a>
	<a href="#" class="glyphicons no-js deviantart"><i></i>deviantart</a>
	<a href="#" class="glyphicons no-js read_it_later"><i></i>read_it_later</a>
	<a href="#" class="glyphicons no-js linked_in"><i></i>linked_in</a>
	<a href="#" class="glyphicons no-js forrst"><i></i>forrst</a>
	<a href="#" class="glyphicons no-js pinboard"><i></i>pinboard</a>
	<a href="#" class="glyphicons no-js behance"><i></i>behance</a>
	<a href="#" class="glyphicons no-js github"><i></i>github</a>
	<a href="#" class="glyphicons no-js youtube"><i></i>youtube</a>
	<a href="#" class="glyphicons no-js skitch"><i></i>skitch</a>
	<a href="#" class="glyphicons no-js foursquare"><i></i>foursquare</a>
	<a href="#" class="glyphicons no-js quora"><i></i>quora</a>
	<a href="#" class="glyphicons no-js badoo"><i></i>badoo</a>
	<a href="#" class="glyphicons no-js spotify"><i></i>spotify</a>
	<a href="#" class="glyphicons no-js stumbleupon"><i></i>stumbleupon</a>
	<a href="#" class="glyphicons no-js readability"><i></i>readability</a>
	<a href="#" class="glyphicons no-js facebook"><i></i>facebook</a>
	<a href="#" class="glyphicons no-js twitter"><i></i>twitter</a>
	<a href="#" class="glyphicons no-js instagram"><i></i>instagram</a>
	<a href="#" class="glyphicons no-js posterous_spaces"><i></i>posterous_spaces</a>
	<a href="#" class="glyphicons no-js vimeo"><i></i>vimeo</a>
	<a href="#" class="glyphicons no-js flickr"><i></i>flickr</a>
	<a href="#" class="glyphicons no-js last_fm"><i></i>last_fm</a>
	<a href="#" class="glyphicons no-js rss"><i></i>rss</a>
	<a href="#" class="glyphicons no-js skype"><i></i>skype</a>
	<a href="#" class="glyphicons no-js e-mail"><i></i>e-mail</a>
</div>
	
</div>
<br/><br/>		
				<!-- End Content -->
		</div>
		<!-- End Wrapper -->
		</div>
		
		<!-- Sticky Footer -->
		<div id="footer">
	      	<div class="wrap">
	      		<ul>
	      			<li class="active"><span data-toggle="layout" data-layout="fixed" class="glyphicons show_big_thumbnails text" title=""><i></i><span class="hidden-phone">Fixed layout</span></span></li>
	      			<li><span data-toggle="layout" data-layout="fluid" class="glyphicons show_thumbnails text" title=""><i></i><span class="hidden-phone">Fluid layout</span></span></li>
	      			<li><a href="documentation.php" class="glyphicons circle_question_mark text" title=""><i></i><span class="hidden-phone">Documentation</span></a></li>
	      		</ul>
	      	</div>
	    </div>
				
	</div>
	
	<!-- JQueryUI v1.9.2 -->
	<script src="theme/scripts/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
	
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="theme/scripts/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- MiniColors -->
	<script src="theme/scripts/jquery-miniColors/jquery.miniColors.js"></script>
	
	<!-- Themer -->
	<script>
	var themerPrimaryColor = '#DA4C4C';
	</script>
	<script src="theme/scripts/jquery.cookie.js"></script>
	<script src="theme/scripts/themer.js"></script>
	
	
	
	<!-- Resize Script -->
	<script src="theme/scripts/jquery.ba-resize.js"></script>
	
	<!-- Uniform -->
	<script src="theme/scripts/pixelmatrix-uniform/jquery.uniform.min.js"></script>
	
	<!-- Bootstrap Script -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Bootstrap Extended -->
	<script src="bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
	<script src="bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script src="bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script src="bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
	<script src="bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js" type="text/javascript"></script>
	<script src="bootstrap/extend/bootbox.js" type="text/javascript"></script>
	<script src="bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js" type="text/javascript"></script>
	<script src="bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js" type="text/javascript"></script>
	
	<!-- Custom Onload Script -->
	<script src="theme/scripts/load.js"></script>
	
</body>
</html>