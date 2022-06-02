<?php
$page = 'article';
$postsize=count($post);
$linkview=$count-$pageno*16;
$pageno=$pageno+1;
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="keywords" content="">
		<meta name="description" content="Article description to make google serach access">
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/logo/favicon.png"/>
		<title>Article Website - Think,Smile,Explore your world.</title>
		
		<!--CSS files are linked here-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main-sheet.css" >
 
		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/revolution-slider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jssocials.css" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jssocials-theme-flat.css" />
		<link href="https://fonts.googleapis.com/css?family=Lato|BioRhyme:300|Rubik|Open+Sans" rel="stylesheet">
	</head>

	<body class="art-works">
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
				  				<li <?php if($page === 'pricing') echo 'class="clicked"';?><a href="articles.html">Explore</a></li>
						    </ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="layout-nav">
						<div class="scrolling-tabs-container">
							<div class="fade-left">
								<i aria-hidden="true" class="fa fa-angle-left"></i>
							</div>
							<div class="fade-right">
								<i aria-hidden="true" class="fa fa-angle-right"></i>
							</div>
							<ul class="nav-links scrolling-tabs">
								<li class="home">
									<a title="all" href="#">
										<span>
										 All
										</span>
									</a>
								</li>

								<li class="active"><a title="Drawings" href="#">
									<span>
										 Drawings
									</span></a>
								</li>
								<li class=""><a title="Stories" href="#">
									<span>
										Stories
									</span></a>
								</li>
								<li class=""><a title="Short stories" href="#">
									<span>
										Short stories
									</span></a>
								</li>
								<li class=""><a title="Poems" href="#">
									<span>
										Poems
									</span></a>
								</li>
								<li class=""><a title="autobiography" href="#">
									<span>
										autobiography
									</span></a>
								</li>
								<li class=""><a title="Novels" href="#">
									<span>
										Novels
									</span></a>
								</li>
								<li class=""><a title="History" href="#">
									<span>
										History
									</span></a>
								</li>
							</ul>
						</div>
				</div>
				<div class="content-wrapper page-with-layout-nav">
					<div class="alert-wrapper">
						<div class="flash-container flash-container-page">
						</div>

					</div>
				</div>
			</div>
			<div class="row">
			
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id ="top-banner" >
					<h2>Art Works</h2>
					<p>Find out the Best in our dreams...Dreams always comes true.</p>
					<?php
			for($i=0;$i<$postsize;$i++)
			{
				?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 single-article-box">
							<!--<div class="single-article-image">
								<img src="assets/images/article/single-article1.jpg" alt="top-category" />
								<div class="single-article-image-overlay">
								</div>
								<div class="share"></div>
							</div>-->
							<a href="<?php echo base_url('/index.php/Avesacademy_c/articledetail')."/".$post[$i]['article_id'];?>"><div class="category-card">
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
									<!--<div class="publisher">
										<span class="publisher-round">P</span> Ajay Devadas
									</div>-->
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
							</div></a>
								<div class="single-article-details">
									<div class="profile-img">
										<img src="<?php echo base_url();?>assets/images/icons/user/female-teacher.png" alt="profile picture" />
									</div>
									<div class="like-btn">
										<div class="like-count"><?php echo $post[$i]['article_like'];?></div><img src="<?php echo base_url();?>assets/images/icons/like-dark.png" alt="share" />
									</div>
									<!--<div class="share-btn">
										<img src="assets/images/icons/share-lite.png" alt="share" />
									</div>-->
								</div>
						</div>
					</div>
					<?php
				}
				?>

					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 load-more-article">
					<?php
					if($postsize==16 && $linkview>0)
					{
					?>
					<a href="<?php echo base_url("index.php/Avesacademy_c/articles")."/".$pageno;?>" class="view-more-btn btn btn-danger">View More</a>
				<?php
				}
				
				?>
			</div>
			</div>
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
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/main-script.js"></script>
        <!-- jQuery REVOLUTION Slider  -->
        <script src="<?php echo base_url();?>assets/js/jssocials.min.js"></script>
        <script>
        	//$(".nav-links li").removeClass("active");
        	//$(this).addClass("active");
        	$(".like-count img").click(function{
        		this.attr("src","like-lite.png");
        		console.log("hai");
        	});
        </script>
	</body>
</html>