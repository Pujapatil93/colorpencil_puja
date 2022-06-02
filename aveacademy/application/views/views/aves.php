<?php
$page = 'home';

?>
<!--
	Project Name       :	 Article website
	Project Done by    :     Team Cloudfoyo
	Framework OR Tools :     Bootstrap
	Design & UI/UX     :     Jayakrishnan T N
	Backend Developer  :	 Karthik S K
	Support Head       :     Anand Nair
--> 

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="keywords" content="">
		<meta name="description" content="Article description to make google serach access">
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/logo/favicon.jpg"/>
		<title>Article Website - Think,Smile,Explore your world.</title>
		
		<!--CSS files are linked here-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main-sheet.css" >
 
		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/revolution-slider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|BioRhyme:300|Rubik|Open+Sans" rel="stylesheet">
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="header" >
					<nav class="navbar navbar-default">
					    <div class="navbar-header">
					    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
					      	<a class="navbar-brand" href="/"><img src="<?php echo base_url();?>assets/images/logo/colorpencil.png" alt="article-logo" /></a>
					    </div>
					    <div class="collapse navbar-collapse" id="myNavbar">
						    <ul class="nav navbar-nav navbar-right">
								<!--<a href="https://app.engagespot.co/register" class="btn button-link caribbean-green" role="button">Sign Up</a>-->
								<a href="login.html" id ="login" class="btn button-link rose-madder" role="button">Login</a>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li <?php if($page === 'home') echo 'class="clicked"';?><a href="index.html">Home</a></li>
				  				<li <?php if($page === 'features') echo 'class="clicked"';?><a href="features.html">About Us</a></li>
				  				<li><a href="#/">Blog</a></li>
				  				<li <?php if($page === 'contact') echo 'class="clicked"';?><a href="contact-page.php">Contact Us</a></li>
				  				<li <?php if($page === 'pricing') echo 'class="clicked"';?><a href="explore.html">Explore</a></li>
						    </ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-slider" >
					<ul class="rslides" id="rslides">
					  <li><img src="<?php echo base_url();?>assets/images/slider/1.jpg" alt=""></li>
					  <li><img src="<?php echo base_url();?>assets/images/slider/2.jpg" alt=""></li>
					  <li><img src="<?php echo base_url();?>assets/images/slider/3.jpg" alt=""></li>
					  <li><img src="<?php echo base_url();?>assets/images/slider/4.jpg" alt=""></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="avees-description">
					<h2>EMPOWER STUDENTS AND ENGAGE FAMILIES WITH color pencil</h2>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 desc-column">
						<img src="<?php echo base_url();?>assets/images/1.png" alt="" />
						<h6>For Students</h6>
						<p>Colorpencil empowers students to independently document their learning and provides an audience for their work—their peers, parents, or the world. </p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 desc-column">
						<img src="<?php echo base_url();?>assets/images/2.png" alt="" />
						<h6>For Students</h6>
						<p>Colorpencil empowers students to independently document their learning and provides an audience for their work—their peers, parents, or the world. </p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 desc-column">
						<img src="<?php echo base_url();?>assets/images/3.png" alt="" />
						<h6>For Students</h6>
						<p>Colorpencil empowers students to independently document their learning and provides an audience for their work—their peers, parents, or the world. </p>
					</div>
				</div>
			</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 explore-more-article">
				<a href="explore.html" class="view-more-btn btn btn-danger">Explore More</a>
			</div>
		</div>
			<!--<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-article">
					<h2>Categories</h2>
					<p>Find out the Best in our dreams...Dreams always comes true.</p>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<a href="articles.html"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="assets/images/article/article1.jpg" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Short stories
									</div>
									<div class="article-rating">
									774 views
									</div>
									<div class="category-views">
									498 articles
									</div>
								</div>
								<button type="button" class=" view-more-btn btn">View More</button>
							</div>
						</div></a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<a href="articles.html"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="assets/images/article/article2.jpg" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Stories
									</div>
									<div class="article-rating">
									774 views
									</div>
									<div class="category-views">
									36 articles
									</div>
								</div>
								<button type="button" class=" view-more-btn btn">View More</button>
							</div>
						</div></a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<a href="articles.html"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="assets/images/article/article3.jpg" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Biography
									</div>
									<div class="article-rating">
									774 views
									</div>
									<div class="category-views">
									314 articles
									</div>
								</div>
								<button type="button" class=" view-more-btn btn">View More</button>
							</div>
						</div></a>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<a href="articles.html"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-box">
							<div class="article-card">
								<div class="article-image">
									<img src="assets/images/article/article4.jpg" alt="top-article" />
									<div class="article-image-overlay">
									</div>
								</div>
								<div class="article-details">
									<div class="article-name">
									Drawings
									</div>
									<div class="article-rating">
									774 views
									</div>
									<div class="category-views">
									107 articles
									</div>
								</div>
								<button type="button" class=" view-more-btn btn">View More</button>
							</div>
						</div></a>
					</div>
				</div>
			</div>-->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-categories" >
					<h2>Art Works</h2>
					<p>Find out the Best in our dreams...Dreams always comes true.</p>
					<?php 
					for($i=0;$i<12;$i++)
					{
						?>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
								<a href="<?php echo base_url('/index.php/Avesacademy_c/articledetail')."/".$post[$i]['article_id'];?>"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
									<div class="category-card">
										<div class="category-image">
										<?php
										
											if($post[$i]['article_filetype']=='image/jpeg')
											{
												
												?>
											<img src="<?php echo base_url("/upload/articleimage/".$post[$i]['article_file']);?>" alt="top-category" />
											<?php
											}
											else
											if($post[$i]['article_filetype']=='video/mp4')
											{
												
											?>
											<img src="<?php echo base_url("/upload/articleimage/videodefault.jpg");?>" alt="top-category" />
											<?php
											}
											else
											{
											?>
											<img src="<?php echo base_url("/upload/articleimage/pdfdefault.png");?>" alt="top-category" />
											<?php
											}
											?>
											<div class="category-image-overlay">
											</div>
											<!--<div class="popularity">
												<img src="assets/images/icons/like-dark.png" alt="thumbs-up" />77
											</div>-->
										</div>
										<div class="category-details">
											<div class="category-name">
											See My shadow
											</div>
											<!--<div class="category-rating">
											774 views
											</div>-->
											<div class="popularity">
												<img src="<?php echo base_url();?>assets/images/icons/like-dark.png" alt="thumbs-up" />
												<div class="like-count"><?php echo $post[$i]['article_like'];?></div>
											</div>
											<div class="publisher">
												<span class="publisher-round">P</span> <?php echo $post[$i]['student_name'];?>
											</div>
											<!--<div class="article-category">
												<div class="rounded-box">
													Drama
												</div>
												<div class="rounded-box">
													Fiction
												</div>
											</div>-->
											<!--<div class="category-update">
											54 min ago
											</div>-->
										</div>			
									</div>
								</div></a>
							</div>
							<?php
						}
						?>

					
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 load-more-article">
				<a href="<?php echo base_url("index.php/Avesacademy_c/articles/1")?>" class="view-more-btn btn btn-danger">View More</a>
			</div>
			<div class="row">
				<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 login-popup" id="login-popup" >
					<div class="popup-box">
						<div class="popup-header">
							Login
						</div>
						<div class="popup-body">
							<p>Enter your Email Id and password to login</p>
							<form>
								<div class="sminputs">
              						<div class="input full">
             						   <label class="string optional" for="user-name">Email*</label>
             						   <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
          						    </div>
            					 </div>
            					<div class="sminputs">
              						<div class="input string optional">
                						<label class="string optional" for="user-pw">Password *</label>
                						<input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="text" size="50" />
              						</div>
              						<div class="input string optional">
                						<label class="string optional" for="user-pw-repeat">Repeat password *</label>
                						<input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" type="text" size="50" />
              						</div>
            					</div>
            					<div class="simform__actions">
              						<input class="sumbit" name="commit" type="sumbit" value="Create Account" />
              						<span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            					</div> 
							</form>
						</div>
						<div class="popup-footer">
							<div class="facebook-login">
								Login with Facebook
							</div>
							<div class="google-login">
								Login with Google+
							</div>
						</div>
					</div>
				</div>-->
				<!--<div class="logmod">
  					<div class="logmod__wrapper">
    					<span class="logmod__close">Close</span>
    					<div class="logmod__container">
      						<ul class="logmod__tabs">
        						<li data-tabtar="lgm-2"><a href="#">Login</a></li>
        						<li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      						</ul>
      					<div class="logmod__tab-wrapper">
      						<div class="logmod__tab lgm-1">
        						<div class="logmod__heading">
          							<span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        						</div>
        						<div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="text" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" type="text" size="50" />
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Create Account" />
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            </div> 
          </form>
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Facebook</strong></span>
              </div>
            </a>
              
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
        </div> 
        <div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="password" size="50" />
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Log In" />
              <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Forgot your password?<br>Click here</a></span>
            </div> 
          </form>
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>-->
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer" id="footer" >
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-left">
						<img src="<?php echo base_url();?>assets/images/logo/colorpencil.png" alt="article-logo" />
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 categories">
						<h6>Categories</h6>
						<ul>
							<li><a href="articles.html">Writings</a></li>
							<li><a href="articles.html">Drawings</a></li>
							<li><a href="articles.html">Biography</a></li>
							<li><a href="articles.html">History</a></li>
							<li><a href="articles.html">Novel</a></li>
							<li><a href="articles.html">Stories</a></li>
							<li><a href="articles.html">Short Stories</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 authors">
						<h6>Aves support</h6>
						<ul>
							<li><a href="">Contact Us</a></li>
							<li><a href="">Privacy & Policy</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="">FeedBack</a></li>
							<li><a href="">Site map</a></li>
							<li><a href="">Need help</a></li>
						</ul>  
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 social-links">
						<h6>Social Links</h6>
						<div class="facebook col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://www.facebook.com/aves"><img src="<?php echo base_url();?>assets/images/icons/social/facebook-box.png" alt="facebook-icon" /></a>
						</div>
						<div class="twitter col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://youtube.com/aves"><img src="<?php echo base_url();?>assets/images/icons/social/twitter-box.png" alt="twitter-icon" /></a>
						</div>
						<div class="instagram col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="#"><img src="<?php echo base_url();?>assets/images/icons/social/instagram-box.png" alt="instagram-icon" /></a>
						</div>
						<div class="youtube col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="#"><img src="<?php echo base_url();?>assets/images/icons/social/youtube-box.png" alt="youtube-icon" /></a>
						</div>
					</div>
				</div>
			</div>
		

		<!--Javascript files are linked here-->

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<!-- jQuery REVOLUTION Slider  -->
		<script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/main-script.js"></script>
	</body>
</html>
