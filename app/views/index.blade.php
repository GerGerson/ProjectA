<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Metronic | Layouts - Horzontal Menu 2</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="assets/css/4son.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-full-width">
<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
	  FB.init({
		appId      : '625779757441110', // App ID
		channelUrl : '//WWW.carkeyli.com/jasonpro', // Channel File
		status     : true, // check login status
		cookie     : true, // enable cookies to allow the server to access the session
		xfbml      : true  // parse XFBML
	  });

	  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
	  // for any authentication related change, such as login, logout or session refresh. This means that
	  // whenever someone who was previously logged out tries to log in again, the correct case below 
	  // will be handled. 
	  FB.Event.subscribe('auth.authResponseChange', function(response) {
		// Here we specify what we do with the response anytime this event occurs. 
		if (response.status === 'connected') {
		  // The response object is returned with a status field that lets the app know the current
		  // login status of the person. In this case, we're handling the situation where they 
		  // have logged in to the app.
		  
		  loginSuccess();
		} else if (response.status === 'not_authorized') {
		  // In this case, the person is logged into Facebook, but not into the app, so we call
		  // FB.login() to prompt them to do so. 
		  // In real-life usage, you wouldn't want to immediately prompt someone to login 
		  // like this, for two reasons:
		  // (1) JavaScript created popup windows are blocked by most browsers unless they 
		  // result from direct interaction from people using the app (such as a mouse click)
		  // (2) it is a bad experience to be continually prompted to login upon page load.
		  FB.login();
		} else {
		  // In this case, the person is not logged into Facebook, so we call the login() 
		  // function to prompt them to do so. Note that at this stage there is no indication
		  // of whether they are logged into the app. If they aren't then they'll see the Login
		  // dialog right after they log in to Facebook. 
		  // The same caveats as above apply to the FB.login() call here.
		  FB.login();
		}
	  });
	  };

	  // Load the SDK asynchronously
	  (function(d){
	   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	   if (d.getElementById(id)) {return;}
	   js = d.createElement('script'); js.id = id; js.async = true;
	   js.src = "//connect.facebook.net/en_US/all.js";
	   ref.parentNode.insertBefore(js, ref);
	  }(document));

	  // Here we run a very simple test of the Graph API after login is successful. 
	  // This testAPI() function is only called in those cases. 
	  function loginSuccess() {
		console.log('Welcome!  Fetching your information.... ');
		FB.api('/me', function(response) {
		  console.log("<img src='https://graph.facebook.com/" + response.id + "/picture'>");
		  $('#fb_login').empty();
		  $('#fb_login').prepend("<img style='margin-top:-5px;height:50%;width:50%' src='https://graph.facebook.com/" + response.id + "/picture'>");
		  //document.getElementById("fb_login").innerHtml = "<img src='https://graph.facebook.com/" + response.id + "/picture'>";
		  console.log('Good to see you, ' + response.name + '.');
		});
	  }
	</script>

	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.html">
					<img src="assets/img/logo.png" alt="logo" />
				</a>
				<!-- END LOGO -->
				
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="assets/img/menu-toggler.png" alt="" />
				</a>				
				<!-- END RESPONSIVE MENU TOGGLER -->  
				
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">
					<li>
						@yield('top_menu')
					</li>
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->   
	<div class="page-container row-fluid">
		<!-- BEGIN EMPTY PAGE SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse visible-phone visible-tablet">
			<ul class="page-sidebar-menu">
				<li class="visible-phone visible-tablet">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />            
							<input type="button" class="submit" value=" " />
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li>
					<a class="active" href="index.html">
					Dashboard                        
					</a>
				</li>
				<li  class="active">
					<a href="javascript:;">
					Layouts
					<span class="arrow open"></span>   
					<span class="selected"></span>   
					</a>
					<ul class="sub-menu">
						<li >
							<a href="layout_horizontal_sidebar_menu.html">
							Horzontal & Sidebar Menu                     </a>
						</li>
						<li >
							<a href="layout_horizontal_menu1.html">
							Horzontal Menu 1                    </a>
						</li>
						<li class="active">
							<a href="layout_horizontal_menu2.html">
							Horzontal Menu 2                    </a>
						</li>
						<li >
							<a href="layout_promo.html">
							Promo Page                    </a>
						</li>
						<li >
							<a href="layout_email.html">
							Email Templates                     </a>
						</li>
						<li >
							<a href="layout_ajax.html">
							Content Loading via Ajax</a>
						</li>
						<li >
							<a href="layout_sidebar_closed.html">
							Sidebar Closed Page                    </a>
						</li>
						<li >
							<a href="layout_blank_page.html">
							Blank Page                    </a>
						</li>
						<li >
							<a href="layout_boxed_page.html">Boxed Page</a>
						</li>
						<li >
							<a href="layout_boxed_not_responsive.html">
							Non-Responsive Boxed Layout                     </a>
						</li>
						<li>
							<a href="javascript:;">
							More options
							<span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li><a href="#">Second level link</a></li>
								<li>
									<a href="javascript:;">More options<span class="arrow"></span></a>
									<ul class="sub-menu">
										<li><a href="index.html">Third level link</a></li>
										<li><a href="index.html">Third level link</a></li>
										<li><a href="index.html">Third level link</a></li>
										<li><a href="index.html">Third level link</a></li>
										<li><a href="index.html">Third level link</a></li>
									</ul>
								</li>
								<li><a href="index.html">Second level link</a></li>
								<li><a href="index.html">Second level link</a></li>
								<li><a href="index.html">Second level link</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="">Tables</a>
				</li>
				<li>
					<a href="">Extra
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li><a href="index.html">About Us</a></li>
						<li><a href="index.html">Services</a></li>
						<li><a href="index.html">Pricing</a></li>
						<li><a href="index.html">FAQs</a></li>
						<li><a href="index.html">Gallery</a></li>
						<li><a href="index.html">Registration</a></li>
						<li><a href="index.html">2 Columns (Left)</a></li>
						<li><a href="index.html">2 Columns (Right)</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END EMPTY PAGE SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span3 sidebar-content ">
					</div>
					<div class="span9 ">
						<!-- BEGIN PAGE HEADER-->
						<div class="row-fluid">
							<div class="span12">
								<!-- BEGIN STYLE CUSTOMIZER -->
								
								<!-- END BEGIN STYLE CUSTOMIZER --> 
								<!-- BEGIN PAGE TITLE & BREADCRUMB-->
								
								<!-- END PAGE TITLE & BREADCRUMB-->
							</div>
						</div>
						<!-- END PAGE HEADER-->
						<!-- BEGIN PAGE CONTENT-->
						<div class="row-fluid margin-bottom-20">
							@yield('content')
						</div>
						
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER--> 
		</div>
		<!-- END PAGE -->    
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Metronic by keenthemes.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<script src="assets/scripts/app.js"></script>      
	<script>
		jQuery(document).ready(function() {    
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>