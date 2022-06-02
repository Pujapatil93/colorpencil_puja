<?php 
$page="";
if(!empty($msg))
{
	var_dump("haii");
	exit(0);
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
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
		<style>
  .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
  .toggle.ios .toggle-handle { border-radius: 20px; }
  .toggle.android { border-radius: 0px;}
  .toggle.android .toggle-handle { border-radius: 0px; }
  button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
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
								<li <?php if($page === 'home') echo 'class="clicked"';?><a href="index.html">Home</a></li>
				  				<li <?php if($page === 'pricing') echo 'class="clicked"';?><a href="articles.html">Category</a></li>
				  				<li <?php if($page === 'features') echo 'class="clicked"';?><a href="features.html">About Us</a></li>
				  				<li><a href="https://engagespot.co/blog/">Blog</a></li>
				  				<li <?php if($page === 'contact') echo 'class="clicked"';?><a href="contact-page.php">Contact Us</a></li>
						    </ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="art-sub-content">
					<h3>Submit Your Art work</h3>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form">
						<form id="article_form" name="article-form" action="<?php echo site_url('Avesacademy_c/articlesubmissioninsert');?>" method="post"  onsubmit="return validateForm()" enctype="multipart/form-data">
		                    <!--<div id="name" class="gap">
		                    <label id="name-label" for="name"> Article name : </label>
		                    	<input id="name-field" type="text" placeholder="Article name" name="name" value="">
		                    </div>-->
		                    <div class="form-group icon-set">
								<!--<label class="label-light white-text" for="art_title">Art work Title</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[title]" id="art_title"/>-->
								<label  class="image-input">
        							<a type="file" class="">
										<img  class="" src="<?php echo base_url();?>assets/images/icons/add-image.png" alt="" />
									</a>
    							</label>

    							<input id="image-input" name="image-input" type="file" title="select an image" accept=".jpg,.png,.jpeg"/>
								<!--<span class="help-block white-text">Give a name to your art work.So people can find it easily.</span>-->
							</div>
							 <div class="form-group icon-set">
								<!--<label class="label-light white-text" for="art_title">Art work Title</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[title]" id="art_title"/>-->
								<label  class="video-input">
        							<a type="file" class="">
										<img class="" src="<?php echo base_url();?>assets/images/icons/add-video.png" alt="" />
									</a>
    							</label>

    							<input id="video-input" name="video-input" type="file" title="select a video" accept=".mp4,.wmv"/>
								<!--<span class="help-block white-text">Give a name to your art work.So people can find it easily.</span>-->
							</div>
							 <div class="form-group icon-set">
								<!--<label class="label-light white-text" for="art_title">Art work Title</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[title]" id="art_title"/>-->
								<label  class="pdf-input">
        							<a type="file" class="">
										<img class="" src="<?php echo base_url();?>assets/images/icons/add-pdf.png" alt="" />
									</a>
    							</label>

    							<input id="pdf-input" name="pdf-input" type="file" title="select a pdf file" accept=".pdf"/>
								<!--<span class="help-block white-text">Give a name to your art work.So people can find it easily.</span>-->
							</div>
							<!--<div>
								<input type="checkbox" checked data-toggle="toggle" data-style="ios">
								<button class="accordion">Section 1</button>
								<div class="panel">
								  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>-->
							<!--<div class="form-group">
								<label class="label-light white-text" for="art_title">Art work Title</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[title]" id="art_title"/>
								<span class="help-block white-text">Give a name to your art work.So people can find it easily.</span>
							</div>-->
		                    <!--<div id="sh-desc" class="gap" >
		                    	<label id="sh-desc-field-label" for="sh-desc-field"> Description : </label>
		                    	<input id="sh-desc-field" type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Give a short description here" required name="short-description" value="">
		                    </div>-->
		                   	<!--<div class="form-group">
								<label class="label-light white-text" for="art_desc">Description</label>
								<textarea rows="5" class="form-control bg-transparent" maxlength="250" placeholder="Give a short description here" name="art[desc]" id="art_desc" required>
								</textarea>
								<span class="help-block white-text">Tell us about your art work in fewer than 250 characters.</span>
							</div>-->
							<!--<div class="form-group">
								<label class="label-light white-text" for="art_category">Category</label>
								<select class="select2 art-sub-input" name="art[category]" id="art_category">
									<option value="cat1">Drawing</option>
									<option value="cat2">Story</option>
									<option value="cat3">Short stories</option>
									<option value="cat4">Poem</option>
									<option value="cat5">Novel</option>
								</select>
								<span class="help-block white-text">select type of category.</span>
							</div>-->
							<!--<div class="form-group">
								<label class="label-light white-text" for="art_type">Upload type</label>
								<select class="select2 art-sub-input" name="art[type]" id="art_type">
									<option value="image">Image</option>
									<option value="pdf">PDF</option>
									<option value="video">video format</option>
								</select>
								<span class="help-block white-text">select format of upload</span>
							</div>-->
							<!--<div class="form-group">
								<label class="label-light white-text" for="art_file">Add File</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[file]" id="art_file"/>
									<a type="file" class="btn js-choose-user-avatar-button browse">
									Browse file...
									</a>
							</div>-->
							<!--<div class="form-group">
								<label class="label-light white-text" for="art_file">Add Thumbnail</label>
								<input class="form-control art-sub-input" type="text" value="" name="art[file]" id="art_file"/>
									<a class="btn js-choose-user-avatar-button browse">
									Browse file...
									</a>
									
									<span class="help-block white-text">For better presentation make the thumbnail in 314 *132 px format.</span>
							</div>-->
		                    <!--<div id="add-file gap" class="gap" >
		                    	<label ld="file-label" for="add-file-field"> Add file : </label>
		                    	<input id="add-file-field" type="text" placeholder="add article file" name="phone" value="">
		                    	<button id="browse-btn" class="btn caribbean-green filled" type="submit" name="browse btn" value="search" >Browse ..</button>
		                    </div>-->
		                    <div id="privacy" class="gap">
		                    	<label id="privacy-label" class="white-text" for="privacy"> Privacy : </label>
		                    	<div class="show white-text">
		                    		<input type="radio" name="public" value="public" checked>public
		                    		<br>
		                    		<input type="radio" name="public" value="private" >My class group 
		                    	</div>
		                    </div>
		                    <div class="gap">
		                        <button id="send" class="btn caribbean-green filled" type="submit" name="submitform" value="send" >Submit</button>
		                    </div>
		                    <div class="gap">
		                        <div id="submit-info"></div>
		                    </div>
		                </form>
					</div>
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
		</div>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
		<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>
	</body>
</html>
