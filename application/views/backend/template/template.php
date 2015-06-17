<?php 
defined('BASEPATH') or exit("Access Denied");
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php 
if($let == "contact"){	
?>
<title>Gemilang2 | Contact</title>	
<?php 
} 
else{
?>
<title>Gemilang2 
	<?php 
		if($title ==1)
			{
				if($read == 0)
					{
						echo " | Blog";
					}
				else {
					foreach ($isi as $r) {
						echo  "| ".$r->judul;
					}
				}
			} 
		else if($title == 2)
			{
				foreach ($isi as $r) {
					echo "| Users ".$r->fullname;
				}
			}
	?></title>
<?php 
}
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="<?=base_url()?>asset/ui/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?=base_url()?>asset/ui/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?=base_url()?>asset/ui/css/jcarousel.css" rel="stylesheet" />
<link href="<?=base_url()?>asset/ui/css/flexslider.css" rel="stylesheet" />
<link href="<?=base_url()?>asset/ui/css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="<?=base_url()?>asset/ui/skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<?php 
		echo $_header;
	 ?>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url()?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<?php if($let == "home"){}else{ ?><li class="active"><a href="<?php echo base_url().$let;?>" ><?php echo ucfirst($let); ?></a></li><?php } ?>
					<?php 
						if($pag != 1)
							{

							}
						else{
					?>
						<li class="active">
					<?php 
						foreach ($isi as $r) 
							{
								switch ($title) {
									case 2:
										$iss = "Users</li><li><a href=\"".base_url()."blog/users/".$r->uri."\"> ".$r->fullname;
										break;
									
									default:
										$iss = $r->judul;
										break;
								}
								echo ucfirst($iss);
							}
					?>
						</a></li>
					<?php 
							} 
					?>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<?php 
		if($let == "contact"){
	?>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.398711221063!2d106.604326!3d-6.211029000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fe964746e2ff%3A0x2ff63a1eeab5504c!2sSMPN+19+Tangerang!5e0!3m2!1sen!2s!4v1433342460182" width="800" height="600" frameborder="0" style="border:0"></iframe>
	</div>
	<?php 
		}
	if($let != "contact"){

	 ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php
					echo $_content;
				?>
			</div>
			<div class="col-lg-4">
				<?php 
					echo $_sidebar; 
				?>
			</div>
		</div>
	</div>
	<?php }
	else{
	 ?>
	 <div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Get in touch with us by filling <strong>contact form below</strong></h4>
				<form id="contactform" action="<?php echo base_url()."blog/cont_post" ?>" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* Enter your full name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="subject" placeholder="Enter your subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
								<span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	<?php 
		}
	?>
	</section>
	<footer>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Gemilang Selasta 2014 <?php $date = date("Y"); if($date != "2014"){echo " - ".$date;} ?> All right reserved. By </span><a href="http://allmywebstfn.blogspot.com" target="_blank">Allmywebstfn</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/profile.php?id=100006415789433&amp;fref=ts" target="_blank" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/gemilangselasta" data-placement="top" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>

						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=base_url()?>asset/ui/js/jquery.js"></script>
<script src="<?=base_url()?>asset/ui/js/jquery.easing.1.3.js"></script>
<script src="<?=base_url()?>asset/ui/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>asset/ui/js/jquery.fancybox.pack.js"></script>
<script src="<?=base_url()?>asset/ui/js/jquery.fancybox-media.js"></script>
<script src="<?=base_url()?>asset/ui/js/google-code-prettify/prettify.js"></script>
<script src="<?=base_url()?>asset/ui/js/portfolio/jquery.quicksand.js"></script>
<script src="<?=base_url()?>asset/ui/js/portfolio/setting.js"></script>
<script src="<?=base_url()?>asset/ui/js/jquery.flexslider.js"></script>
<script src="<?=base_url()?>asset/ui/js/animate.js"></script>
<script src="<?=base_url()?>asset/ui/js/custom.js"></script>
</body>
</html>