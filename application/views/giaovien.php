<!DOCTYPE HTML>
<html><head>
<title><?=$title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="<?=base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="<?=base_url(); ?>css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="<?=base_url(); ?>css/style1.css" rel='stylesheet' type='text/css' media="all" />
<script src="<?=base_url(); ?>js/jquery-1.11.1.min.js"></script>
	<!--<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>-->
	<!--<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>-->
	<!--<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate-3.0.0.js"></script>-->
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
</head>
  <body>
<?php	
	/*<!-- load khung ở trên và menu, khung dưới -->*/
	$this->load->view('giaovien/header');
	$this->load->view('giaovien/menu');
	$this->load->view($content);
	$this->load->view('giaovien/footer');
?>	
		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url(); ?>js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>