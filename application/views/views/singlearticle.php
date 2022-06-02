<?php
$page="singlearticle";
foreach ($val as $posts) {
	$file=$posts->article_file;
	$filetype=$posts->article_filetype;
	$studentimage=$posts->student_image;
	$studentname=$posts->student_name;
	$studentschool=$posts->student_school;
	$studentclass=$posts->student_class;
	$studentid=$posts->article_studentid;
	$totalarticles=$this->Avesacademy_m->getarticlecountstudent('article_db',$studentid);
}
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="keywords" content="">
		<meta name="description" content="View <?php echo $studentname ?>'s Work on ColorPencil">
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/logo/favicon.png"/>
		<title>ColorPencil - <?php echo $studentname?>'s Work</title>
		
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
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="" >
					<nav class="navbar navbar-default">
					    <div class="navbar-header">
					    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
					      	<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo/colorpencil.png" alt="article-logo" /></a>
					    </div>
					    <div class="collapse navbar-collapse" id="myNavbar">
						    <ul class="nav navbar-nav navbar-right">
								<!--<a href="https://app.engagespot.co/register" class="btn button-link caribbean-green" role="button">Sign Up</a>-->
								<?php
								if(!isset($_COOKIE['login'])) {
									?>
								<a href="<?php echo base_url();?>Avesacademy_c/login" id ="login" class="btn button-link rose-madder" role="button">Login</a>
								<?php
							}
							?>
							<?php
								if(isset($_COOKIE['login'])) {
									?>
				  			
									<li><a href="<?php echo base_url();?>app/dashboard/logout" id ="login" class="btn button-link rose-madder" role="button">Logout</a></li>
				  				<?php
				  			}
				  			?>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="/" style="color:#000 !important;">Home</a></li>
				  				<li><a href="http://avesacademy.org" style="color:#000 !important;">About Us</a></li>
				  			<li><a href="<?php echo base_url();?>Avesacademy_c/contactus" style="color:#000 !important;">Contact Us</a></li>
				  				<li><a href="<?php echo base_url();?>Avesacademy_c/articlesearch/1" style="color:#000 !important;">Explore</a></li>
				  				
						    </ul>
						</div>
					</nav>
				</div>
			</div>
			<div class-="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 show-article" id="show-article" >
					
					<div class="article-profile">
					<?php
					if($filetype=='video')
					{
					?>
						<video class="video-view" controls>
  							<source src="<?php echo base_url("/upload/articlevideo/".$file);?>" type="video/mp4">
  							Your browser does not support HTML5 video.
						</video>
						<?php
					}
					elseif($filetype=='pdf')
					{
						?>
						<div class='pdf-view embed-responsive'>
    						<object data='<?php echo base_url("/upload/articlepdf/".$file);?>' type='application/pdf'></object>
						</div>
						<?php
						}
						elseif($filetype=='image')
						{
						?>
						<div class="image-view" style="background:#eee;padding:10px;text-align:center;">
							<img style="max-height:800px; max-width:100%; width:auto;" src="<?php echo base_url("/upload/articleimage/".$file);?>" alt="" />
						</div>
						<?php
						}
						?>
						<div class="user-profile">
							<div class="user-image">
								<img src="<?php echo base_url();?>assets/images/icons/user/profile.png" alt="profile"/>
							</div>
							<div class="user-details">
								<h4><a href="/index.php/Avesacademy_c/portfolio/<?php echo $studentid?>"><?php echo $studentname;?></a></h4>
									 <?php echo $studentclass;?>
									<br>
									<?php echo $studentschool;?>
									
								
							</div>
							
							<div class="user-stat">
								<a href="/index.php/Avesacademy_c/portfolio/<?php echo $studentid?>"><?php echo $totalarticles;?> Articles</a>

							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-description" id="article-description" >
					
					<div class="user-review">
						
						<div class="article-share">
							<img class="likeBtn" data-article-id="<?php echo $val[0]->article_id ?>" src="<?php echo base_url();?>assets/images/icons/like-dark.png" alt="share" />
							<div class="like-count" style="font-size: 16px;
    padding-top: 5px;
    padding-left: 10px;" ><?php echo $val[0]->article_like;?></div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 related-articles" id="related-articles" >
					<h6>Related Articles</h6>

					<?php 
					for($i=0;$i<4;$i++)
					{
						?>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3" >
								<a href="<?php echo base_url()?>Avesacademy_c/articledetail/<?php echo $post[$i]['article_id']?>"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
									<div class="category-card">
										<div class="category-image">
										<?php
										
											if($post[$i]['article_filetype']=='image')
											{
												
												?>
											<img src="<?php echo base_url("/upload/articleimage/".$post[$i]['article_file']);?>" alt="top-category" />
											<?php
											}
											else
											if($post[$i]['article_filetype']=='video')
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
												
											</div>-->
										</div>
										<div class="category-details">
											<div class="category-name">
											<?php echo $post[$i]['student_name'];?>
											</div>
											<!--<div class="category-rating">
											774 views
											</div>-->
											<div class="popularity">
												<img class="likeBtn" data-article-id="<?php echo $post[$i]['article_id'] ?>" src="<?php echo base_url();?>assets/images/icons/like-dark.png" alt="Like" />
												<div class="like-count"><?php echo $post[$i]['article_like'];?></div>
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

					
					</div>
					</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer" id="footer" >
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-left">
						<img src="<?php echo base_url()?>assets/images/logo/colorpencil.png" alt="article-logo" />
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 categories">
						<h6>Aves academy</h6>
						<!--<ul>
							<li><a href="articles.html">Writings</a></li>
							<li><a href="articles.html">Drawings</a></li>
							<li><a href="articles.html">Biography</a></li>
							<li><a href="articles.html">History</a></li>
							<li><a href="articles.html">Novel</a></li>
							<li><a href="articles.html">Stories</a></li>
							<li><a href="articles.html">Short Stories</a></li>
						</ul>-->
						<p>Our Branches:</p>
						<p>Mumbai, Maharashtra</p>
 						<p>Kollam, Kerala</p>
						<p>E-mail:	info@imagiobox.com</p>
						<p>Phone: 7907713977</p>
						</p>
					</div>
					<!--<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 authors">
						<h6>Aves support</h6>
						<ul>
							<li><a href="">Contact Us</a></li>
							<li><a href="">Privacy & Policy</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="">FeedBack</a></li>
							<li><a href="">Site map</a></li>
							<li><a href="">Need help</a></li>
						</ul>  
					</div>-->
					<div class="col-xs-12 col-sm-12 col-md-offset-3 col-lg-offset-3 col-xl-offset-3 col-md-3 col-lg-3 col-xl-3 social-links">
						<h6>Social Links</h6>
						<div class="facebook col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://www.facebook.com/avesorganisation"><img src="<?php echo base_url()?>assets/images/icons/social/facebook-box.png" alt="facebook-icon" /></a>
						</div>
						<div class="twitter col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://twitter.com/imagiobox"><img src="<?php echo base_url()?>assets/images/icons/social/twitter-box.png" alt="twitter-icon" /></a>
						</div>
						<div class="instagram col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://instagram.com/avesorganisation"><img src="<?php echo base_url()?>assets/images/icons/social/instagram-box.png" alt="instagram-icon" /></a>
						</div>
						<div class="youtube col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
							<a href="https://youtube.com/channel/UCl8K-dvzQ1RtRG5V0e-AUEQ"><img src="<?php echo base_url()?>assets/images/icons/social/youtube-box.png" alt="youtube-icon" /></a>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.0.min.js"></script>
			<script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
			<script type="text/javascript" src="<?php echo base_url();?>assets/js/jscookie.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/main-script.js"></script>
	</body>
</html>
		            
