<?php
include "../admin/inc/fonctions.php";
$f=new fonctions();
$home4=$f->get_Cor_item();
foreach ($home4 as $About4)
{

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dalice International Trading company</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://webthemez.com" />
	<!-- css -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection" />
	<link href="../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="../css/flexslider.css" rel="stylesheet" />
	<link href="../css/style.css" rel="stylesheet" />
	<link href="../img/logo.png" rel="icon">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type='text/javascript'>
		$(function() {
			$('#tip').popover('show');
		});
	</script>
</head>
<body>
<div id="wrapper">
	<header class="topbar">
		<div class="container">
			<div class="row">
				<!-- social icon-->
				<div class="col-sm-3">
					<ul class="social-network">
						<li><a style="color: #b0b0b0;" class="" href="../fr/index.php" id="tip" data-toggle="popover" data-placement="right" title="francais"><img width="15px" src="../img/lang/fr.png" alt=""></a></li>
						<li><a style="color: #b0b0b0;" class="" href="../it/index.php" id="tip" data-toggle="popover" data-placement="right" title="italiano"><img width="15px" src="../img/lang/it.png" alt=""></a></li>
						<li><a style="color: #b0b0b0;" class="" href="../en/index.php" id="tip" data-toggle="popover" data-placement="right" title="english"><img width="15px" src="../img/lang/en.png" alt=""></a></li>
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<ul class="info">
							<li><span><a style="color: gray" href="mailto:info@ditcsrl.com"><i class="icon-info-blocks material-icons">question_answer</i> <?php echo $About4['email'] ?></a></span></li>
							<li><span><a style="color: gray" href="tel:+393713729649"><i class="icon-info-blocks material-icons">perm_phone_msg</i><?php echo $About4['tel'] ?></a></span></li>
						</ul>
						<div class="clr"></div>
					</div>
				</div>
				<!-- info -->

			</div>
		</div>
	</header>

	<!-- start header -->
	<header>
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--                    <a class="navbar-brand" href="index.php"><img  width="40px" src="../img/logo.png" alt=""> Dalice</a>-->
					<div id="logo" class="pull-left">
						<img width="50px"style="margin-bottom: 15px; margin-right: 5px;" src="../img/logo.png" alt="Logo">
						<h3 style="display: inline-block;"><a href="#intro" class="scrollto">Dalice</a></h3>
					</div>
				</div>
				<div class="navbar-collapse collapse ">
					<ul class="nav navbar-nav">
						<li class="active"><a class="waves-effect waves-dark" href="contact.php">اتصل بنا</a></li>
						<li><a class="waves-effect waves-dark" href="index.php">الصفحة الرئيسية</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="pageTitle">اتصل بنا</h2>
				</div>
			</div>
		</div>
	</section>
	<section id="content">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="about-logo text-right">
						<h3><span class="color"> اتصل</span> بنا</h3>
						<p>Dalice International Trading Company
							كن دوليًا مع شركة <br>
							 لمزيد من المعلومات ، يرجى الاتصال بنا <br>

						</p>
						<div style="margin-top: 50px" class="container ">
							<div class="row">
								<div class="col-md-2 pull-right"><p style="color: #ce292c"> <b> الهاتف </b><span class="iconify" data-icon="mdi-phone" data-inline="true"></span></p></div>
								<div class="col-md-2 pull-right"><p><?php echo $About4['tel'] ?></p></div>
							</div>
							<div class="row">
								<div class="col-md-2 pull-right"><p style="color: #ce292c"> <b> الواتساب </b><span class="iconify" data-icon="ion-logo-whatsapp" data-inline="true"></span></p></div>
								<div class="col-md-2 pull-right"><p><?php echo $About4['tel'] ?></p></div>
							</div>
							<div class="row">
								<div class="col-md-2 pull-right"><p style="color: #ce292c"> <b> البريد الإلكتروني </b><span class="iconify" data-icon="mdi-email" data-inline="true"></span></p></div>
								<div class="col-md-2 pull-right"><p><?php echo $About4['email'] ?></p></div>
							</div>
						</div>
						<h3>أو أرسل لنا<span class="color">  رسالة</span></h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form role="form" name="sentMessage" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
						<div class="form-group input-field">
							<div class="controls ">
								<input type="text" id="name" class="form-control text-right"  minlength="4" required data-error="أدخل اسمك من فضلك">
								<label style="width: 100%" for="name" class="text-right">   الاسم </label>
								<div class="help-block with-errors pull-right"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="controls input-field">
								<input type="email" class="email form-control text-right" id="email" required data-error="أدخل بريدك الإلكتروني من فضلك">
								<label style="width: 100%" for="email" class="text-right">  البريد الإلكتروني </label>
								<div class="help-block with-errors pull-right"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="controls input-field">
								<input type="text" id="msg_subject" class="form-control text-right"  minlength="6" required data-error="الرجاء إدخال موضوع رسالتك (6 أحرف على الأقل)">
								<label style="width: 100%" for="msg_subject" class="text-right">   الموضوع </label>
								<div class="help-block with-errors pull-right"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="controls input-field">
								<textarea id="message" rows="7" class="form-control text-right materialize-textarea" minlength="20" required data-error="الرجاء إدخال رسالتك (20 حرفًا كحد أدنى)"></textarea>
								<label style="width: 100%" for="message" class="text-right">   الرسالة </label>
								<div class="help-block with-errors pull-right"></div>
							</div>
						</div>

						<button type="submit" id="submit" class="btn btn-success pull-right"></i> إرسال</button>
						<div id="msgSubmit" class="h5 text-center hidden pull-right"></div>
						<div class="clearfix"></div>

					</form>
				</div>
			</div>
		</div>

	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<img src="../img/logo1.png"  width="100%" alt="">
				</div>
				<div class="col-sm-3">

				</div>
				<div class="col-sm-3">
					<div class="widget text-right">
						<h5 class="widgetheading">تفاصيل الاتصال الخاصة بنا</h5>
						<address>
							<strong>Dalice ITC</strong><br>
                            <?php
                            $values=explode("--",$About4['adresse']);
                            //                            var_dump($values);
                            for ($i=0;$i<sizeof($values);$i++)
                            {
                                echo'<p>'.$values[$i].'</p>';
                            }
                            ?></address>
						<p>
							<i class="icon-phone"></i> <a href="tel:+393713729649"><?php echo $About4['tel'] ?></a>  <br>
							<i class="icon-envelope-alt"></i> <a href="mailto:info@ditcsrl.com"><?php echo $About4['email'] ?></a>
						</p>
					</div>
				</div>
				<div class="col-sm-3 text-right">
					<div class="widget">
						<h5 class="widgetheading">روابط سريعة</h5>
						<ul class="link-list">
							<li><a class="waves-effect waves-dark" href="index.php">الصفحة الرئيسية</a></li>
							<li><a class="waves-effect waves-dark" href="contact.php">اتصل بنا</a></li>
						</ul>
					</div>
					<div class="">
						<ul class="social-network">
							<li><a class="waves-effect waves-dark" target="_blank" href="<?php echo $About4['fb'] ?>" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a class="waves-effect waves-dark" target="_blank" href="<?php echo $About4['insta'] ?>" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a class="waves-effect waves-dark" target="_blank" href="<?php echo $About4['twitter'] ?>" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a class="waves-effect waves-dark" target="_blank" href="<?php echo $About4['linkedin'] ?>" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="copyright">
							<p>
								Copyright 2020 © Design & Developed with <i style="color:#e01e39;" class="fa fa-heart"></i> by <a href="https://lancersent.tn/" target="_blank">Lancers Entreprise</a>.
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="../js/jquery.js"></script>-->
<!--<script src="../js/jquery.easing.1.3.js"></script>-->
<script src="../js/jquery/jquery-migrate.min.js"></script>
<script src="../js/jquery/jquery.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="../js/modernizr.custom.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/animate.js"></script>
<script src="../js/custom.js"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<!-- Contact Form JavaScript Files -->
<script type="text/javascript" src="../assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="../assets/js/contact-form-script.js"></script>
</body>
</html>
