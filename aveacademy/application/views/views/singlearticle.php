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
		<meta name="description" content="Article description to make google serach access">
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/logo/favicon.png"/>
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
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="" >
					<nav class="navbar navbar-default">
					    <div class="navbar-header">
					    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
					      	<a class="navbar-brand" href="/"><img src="<?php echo base_url();?>assets/images/logo/article-logo.png" alt="article-logo" /></a>
					    </div>
					    <div class="collapse navbar-collapse" id="myNavbar">
						    <ul class="nav navbar-nav navbar-right">
								<!--<a href="https://app.engagespot.co/register" class="btn button-link caribbean-green" role="button">Sign Up</a>
								<a href="https://app.engagespot.co" class="btn button-link rose-madder" role="button">Login</a>-->

								<a href="" class="btn profile-button" role="button" ><img class="prof-class" src="<?php echo base_url();?>assets/images/icons/user/profile_pic.png" alt="profile-picture" /></a>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li <?php if($page === 'home') echo 'class="clicked"';?><a href="index.php">Home</a></li>
				  				<li <?php if($page === 'pricing') echo 'class="clicked"';?><a href="pricing.php">Link 1</a></li>
				  				<li <?php if($page === 'features') echo 'class="clicked"';?><a href="features.php">Link 2</a></li>
				  				<li><a href="https://engagespot.co/blog/">Blog</a></li>
				  				<li <?php if($page === 'case_studies') echo 'class="clicked"';?><a href="case-studies.php">Reviews</a></li>
				  				<li <?php if($page === 'contact') echo 'class="clicked"';?><a href="contact-page.php">Contact</a></li>
						    </ul>
						</div>
					</nav>
				</div>
			</div>
			<div class-="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 show-article" id="show-article" >
					
					<div class="article-profile">
					<?php
					if($filetype=='video/mp4')
					{
					?>
						<video class="video-view" controls>
  							<source src="<?php echo base_url("/upload/articlevideo/".$file);?>" type="video/mp4">
  							Your browser does not support HTML5 video.
						</video>
						<?php
					}
					elseif($filetype=='application/pdf')
					{
						?>
						<div class='pdf-view embed-responsive'>
    						<object data='<?php echo base_url("/upload/articlepdf/".$file);?>' type='application/pdf'></object>
						</div>
						<?php
						}
						elseif($filetype=='image/jpeg')
						{
						?>
						<div class="image-view">
							<img src="<?php echo base_url("/upload/articleimage/".$file);?>" alt="" />
						</div>
						<?php
						}
						?>
						<div class="user-profile">
							<div class="user-image">
								<img src="<?php echo base_url();?>assets/images/icons/user/profile.png" alt="profile"/>
							</div>
							<div class="user-details">
								<h4><?php echo $studentname;?></h4>
									 <?php echo $studentclass;?>
									<br>
									<?php echo $studentschool;?>
									
								
							</div>
							<div class="user-status">
								"Make my wishes come true"
							</div>
							<div class="user-stat">
								<?php echo $totalarticles;?> Articles

							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 article-description" id="article-description" >
					
					<div class="user-review">
						
						<div class="article-share">
							<img src="<?php echo base_url();?>assets/images/icons/like-dark.png" alt="share" />
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
								<a href="single-article.html"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 category-box">
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

					
					</div>
					</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 footer" id="footer" >
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 footer-left">
						<img src="<?php echo base_url();?>assets/images/logo/article-logo.png" alt="article-logo" />
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 categories">
						<h6>Categories</h6>
						<ul>
							<li>Writings</li>
							<li>Drawings</li>
							<li>Biography</li>
							<li>History</li>
							<li>Novel</li>
							<li>Stories</li>
							<li>Short Stories</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 authors">
						<h6>Authors</h6>
						<ul>
							<li>Krishnan H</li>
							<li>Sarath M</li>
							<li>Rijaz Aliyar</li>
							<li>Sagar J</li>
							<li>Naveen</li>
							<li>Dineesh</li>
							<li>JK</li>
						</ul>  
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 social-links">
						<h6>Social Links</h6>	  
					</div>
				</div>
			</div>
	</body>
</html>
		            