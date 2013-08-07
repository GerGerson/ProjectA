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
		  
		  var sess = <?php echo $_SESSION['f_id'];?>;
		  console.log(sess);
		  
		  if (sess == "" || sess == null){
			$.post("/setSession", {
				sessName : 'f_id',
				sessVal : response.id,
			})
			.done(function(data){console.log(data + " : done");})
			.fail(function(){console.log("fail");});
			  
			window.location.href = "/Main";
		  }
		  
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
						<div class="login" id="fb_login">
							<img class='fbPicture' src='/assets/img/login.png'>
							<a class="link" href="#" onclick="FB.login()">Login</a>
						</div>
					</li>
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	
	
