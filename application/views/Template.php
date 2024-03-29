<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Intelligence Artificielle</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css") ?>">
<!-- Responsive-->
<link rel="stylesheet" href="<?php echo base_url("assets/css/responsive.css") ?>">
<!-- fevicon -->
<link rel="icon" href="<?php echo base_url("assets/images/fevicon.png") ?>" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.mCustomScrollbar.min.css") ?>">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.min.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/owl.theme.default.min.css") ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
	<!-- header section start -->
	<div class="header_section">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src="<?php echo base_url("assets/images/logo.png") ?>"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">OUR PRODUCTS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">VIDEO GAMES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">REMOT CONTROL</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CONTACT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><img src="<?php echo base_url("assets/images/search-icon.png") ?>"></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">SIGN IN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">REGISTER</a>
                </li>
              </ul>
            </div>
        </nav>
	</div>
	<!-- header section end -->
  

    <?php $this->load->view($contenu); ?>


  <!-- footer section start -->
    <div class="section_footer ">
      <div class="social_icon">
        <ul>
          <li><a href="#"><img src="<?php echo base_url("assets/images/fb-icon.png") ?>"></a></li>
          <li><a href="#"><img src="<?php echo base_url("assets/images/twitter-icon.png") ?>"></a></li>
          <li><a href="#"><img src="<?php echo base_url("assets/images/linkdin-icon.png") ?>"></a></li>
          <li><a href="#"><img src="<?php echo base_url("assets/images/instagram-icon.png") ?>"></a></li>
        </ul>
      </div>
    </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">Copyright 2020 All Right Reserved By <a href="https://html.design/"> Free html Templates</p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
    <script src="<?php echo base_url("assets/js/jquery.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/popper.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/jquery-3.0.0.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/plugin.js")?>"></script>
    <!-- sidebar -->
    <script src="<?php echo base_url("assets/js/jquery.mCustomScrollbar.concat.min.js")?>"></script>
    <script src="<?php echo base_url("assets/js/custom.js")?>"></script>
    <!-- javascript --> 
    <script src="<?php echo base_url("assets/js/owl.carousel.js")?>"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
        });
    </script>
</body>
</html>