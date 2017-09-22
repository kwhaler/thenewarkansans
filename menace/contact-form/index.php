<?php
	// Start session.
	session_start();

	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());

	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Fill in the form below to send me an email.';
	}

	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}

	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}

	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!doctype html>

<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />

		<title>Booking</title>
		<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/couture/consolidated-4.css?rwcache=494889738" />




		<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open Sans:400,300,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT Sans Narrow:400,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="../rw_common/themes/couture/javascript.js?rwcache=494889738"></script>

		<script type="text/javascript" src="../rw_common/themes/couture/scripts/function.js?rwcache=494889738"></script>
		<script type="text/javascript" src="../rw_common/themes/couture/scripts/retina.js?rwcache=494889738"></script>
		<script type="text/javascript" src="../rw_common/themes/couture/scripts/jquery.fittext.js?rwcache=494889738"></script>

  		<script>RwSet={pathto:"../rw_common/themes/couture/javascript.js?rwcache=494889738",baseurl:"http://thenewarkansans.com"};</script>
  		<script type="text/javascript" src="../rw_common/themes/couture/scripts/modernizr.min.js?rwcache=494889738"></script>

		<script type="text/javascript" src="../rw_common/themes/couture/scripts/stellar/js.js?rwcache=494889738"></script>
		<script type="text/javascript" src="../rw_common/themes/couture/scripts/stellar/jquery.stellar.min.js?rwcache=494889738"></script>
		<script type="text/javascript" src="../rw_common/themes/couture/scripts/stellar/waypoints.min.js?rwcache=494889738"></script>
		<script type="text/javascript" src="../rw_common/themes/couture/scripts/stellar/jquery.easing.1.3.js?rwcache=494889738"></script>

  		<script type="text/javascript" src="../rw_common/themes/couture/scripts/sidebar/right.js?rwcache=494889738"></script>
		<script type="text/javascript" src="../rw_common/themes/couture/scripts/banner/collapse.js?rwcache=494889738"></script>
		<script type="text/javascript" src="%pathto(scripts/banner/slide_none.js)%?rwcache=494889738"></script>
		<script type="text/javascript" src="../rw_common/themes/couture/scripts/slideshow/camera.js?rwcache=494889738"></script>



	    <link rel='stylesheet' type='text/css' media='all' href='../files/fixes.css' />


	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<style>.skiptonav, #menu {display:none;}</style>
	<![endif]-->

	<script>
		jQuery(function(){

			jQuery('#camera_wrap_1').camera({
				thumbnails: false
			});
		});
	</script>

	<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106747445-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106747445-1');
</script>


</head>

<body>

		<div id="collapsed">
			<div id="bttmHeader">
			<div class="apdiv"></div>
			<div class="container">
				<div class="sixteen columns over">
				<nav><ul class="nojs"><li><a href="../" rel="">Bio</a></li><li><a href="../page-2/" rel="">Shows</a></li><li><a href="../page-3/" rel="">Videos</a></li><li><a id="current" href="./" rel="" class="current">Booking</a></li><li><a href="../page/" rel="">Gallery</a></li><li><a href="../page-4/" rel="">Shop</a></li></ul></nav>
				<div id="extraContainer5"></div>
				<div class="skiptonav">
						<a href="#menu"><span>+</span>MENU</a>
					</div><!-- end skiptonav -->
				</div><!-- header-inner -->
			</div><!-- end container -->
			</div><!--end pageHeader-->
		</div><!--end collapsed-->

			<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">

			<div id="bttmHeader">
			<div class="apdiv"></div>
			<div class="container">
				<div class="sixteen columns over">
				<nav><ul class="nojs"><li><a href="../" rel="">Bio</a></li><li><a href="../page-2/" rel="">Shows</a></li><li><a href="../page-3/" rel="">Videos</a></li><li><a id="current" href="./" rel="" class="current">Booking</a></li><li><a href="../page/" rel="">Gallery</a></li><li><a href="../page-4/" rel="">Shop</a></li></ul></nav>
			<div id="extraContainer6"></div>
				<div class="skiptonav">
						<a href="#menu"><span>+</span>MENU</a>
					</div><!-- end skiptonav -->
				</div><!-- header-inner -->
			</div><!-- end container -->
			</div><!--end pageHeader-->

			<div class="centerWrapper">
				<a id="logo" href="http://thenewarkansans.com" title="Home"><img src="../rw_common/images/NewArk.png" width="720" height="144" alt=""/></a>
			</div><!--end centerWrapper-->
			<h1 id="title"></h1>
			<h2 id="slogan"></h2>
			<div id="freeStyle"></div>
				<div id="banner">
					<!-- #camera_wrap_1 -->
					<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
			            <div class="slide1" data-src="../resources/slide_1.jpg"></div>
			            <div class="slide2" data-src="../resources/slide_2.jpg"></div>
			            <div class="slide3" data-src="../resources/slide_3.jpg"></div>
			            <div class="slide4" data-src="../resources/slide_4.jpg"></div>
			            <div class="slide5" data-src="../resources/slide_5.jpg"></div>
			            <div class="slide6" data-src="../resources/slide_6.jpg"></div>
			            <div class="slide7" data-src="../resources/slide_7.jpg"></div>
			            <div class="slide8" data-src="../resources/slide_8.jpg"></div>
			        </div>
			        <!-- #camera_wrap_1 -->
		       	 <div id="extraContainer1"></div>
		</div><!-- end banner -->


			<div class="circle"><p>Scroll Down</p></div>
			<a class="button" data-slide="2" title=""></a>

			</div><!--End Slide 1-->

				<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">

	<header>
			<div id="headerWrapper">
				<div class="container">
					<div class="sixteen columns over">
						<h1 id="titleAlt"></h1>
						<h2 id="sloganAlt"></h2>
					</div><!-- header-inner -->
				</div><!-- end container -->
			</div><!--end headerWrapper-->
	</header>
	<section>
		<div class="wrapper_2">
			<div class="container">
				<div id="extraContainer2"></div>
			</div><!-- end container -->
		</div><!-- end wrapper -->
		<div id="wrapper_section">
			<div class="container">
				<div class="single twelve columns"  id="main" role="main">

<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
				</div><!-- end single twelve column -->
				<div class="sidebar four columns offset-by-one">
					<aside>

						<span id="asideTitle"></span>
						<span style="font:12px CourierNewPSMT; color:#191919;"><br /></span>
						<div id="asidePlug"></div>
					</aside>
				</div><!-- sidebar four columns offset-by-one -->
			</div><!-- end container -->
		</div><!-- end wrapper -->
		<div class="wrapper_3">
			<div class="container">
				<div id="extraContainer3"></div>
			</div><!-- end container -->
		</div><!-- end wrapper -->
		<div class="clear"></div>
	</section>
	<footer>
			<div class="container">
				<div id="extraContainer4"></div>
			</div><!-- end container -->
		<div class="container">
				<div id="extraContainer6"></div>
				<div id="left">&copy; 2016 The NewArkansans</div>
				<div id="breadcrumb"></div>
		</div><!-- end container -->
	</footer>
		<div id="menu">
			<ul class="nojs"><li><a href="../" rel="">Bio</a></li><li><a href="../page-2/" rel="">Shows</a></li><li><a href="../page-3/" rel="">Videos</a></li><li><a id="current" href="./" rel="" class="current">Booking</a></li><li><a href="../page/" rel="">Gallery</a></li><li><a href="../page-4/" rel="">Shop</a></li></ul>
		</div>

	</div><!--End Slide 2-->

	</body>
</html>
