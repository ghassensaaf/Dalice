<?php
include "../admin/inc/fonctions.php";
$f=new fonctions();
$carsItems=$f->get_car_item();
$home=$f->get_about_item("AR");
$home2=$f->get_Mis_Vis_item("AR");
$home3=$f->get_act_item("AR");
$home4=$f->get_Cor_item();
foreach ($home as $About){

}
foreach ($home2 as $About2){

}
foreach ($home3 as $About3){

}
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
<meta name="author" content="" />
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
<div id="wrapper" class="home-page">
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
							<li><span><a style="color: gray" href="mailto:info@ditcsrl.com"><i class="icon-info-blocks material-icons">question_answer</i> <?php echo $About4['email'] ?> </a></span></li>
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
                    <!-- <a class="navbar-brand" href="index.php"><img  width="60px" src="img/logo.png" alt=""> <span>Dalice</span> </a> -->
										<div id="logo" class="pull-left">
							        <img width="50px"style="margin-bottom: 15px; margin-right: 5px;" src="../img/logo.png" alt="Logo">
							        <h3 style="display: inline-block;"><a href="#intro" class="scrollto">Dalice</a></h3>
							      </div>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
						<li><a class="waves-effect waves-dark" href="contact.php">اتصل بنا</a></li>
                        <li class="active"><a class="waves-effect waves-dark" href="index.php">الصفحة الرئيسية</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="banner">

	<!-- Slider -->
        <div id="main-slider" class="flexslider">
			<ul class="slides">
				<li>
					<img src="../img/slides/1.jpg" alt="" />
					<div style="margin-left:25rem;" class="flex-caption">
						<h3 style="display: inline-block; background-color: rgba(255,255,255,0.4)">Dalice ITC SRL</h3>
						<p>National is Good, international is BETTER</p>

					</div>
				</li>
				<li>
					<img src="../img/slides/2.jpg" alt="" />
					<div class="flex-caption">
						<h3></h3>
						<p></p>

					</div>
				</li>
				<li>
					<img src="../img/slides/4.jpg" alt="" />
					<div class="flex-caption">
						<h3></h3>
						<p></p>

					</div>
				</li>
			</ul>
        </div>
	<!-- end slider -->
	</section>
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 style="color:#ce292c;">معلومات عنا</h2>
                        <?php
                        $values=explode("--",$About['intro']);
                        //                            var_dump($values);
                        for ($i=0;$i<sizeof($values);$i++)
                        {
                            echo'<p> '.$values[$i].'</p>';
                        }
                        ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="../img/<?php echo $About['img'] ?>" alt="About Images">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-text ">
						<p class="text-right">	<?php echo $About['p'] ?>

						</p>
						<h4 class="text-right" style="color:#ce292c; margin-top:15px;"> <b>قيمنا الأساسية</b> </h4>
						<ul class="withArrow">
                            <?php
                            $values=explode("--",$About['vals']);
                            //                            var_dump($values);
                            for ($i=0;$i<sizeof($values);$i++)
                            {
                                echo'<li class="text-right">'.$values[$i].'<span class="fa fa-angle-left"></span> </li>';
                            }
                            ?>

						</ul>

					</div>
				</div>

			</div>
			<div class="section-title text-center">
				<p> <?php echo $About['conc'] ?>
				</p>
			</div>

		</div>
	</section>

		<section class="dishes">
			<div class="container margintop30">
				<div class="row service-v1 margin-bottom-40">
					<div class="col-md-2"></div>
        	<div class="col-md-4   md-margin-bottom-40">
						<div class="card small">
        			<div class="card-image">
        				<img class="img-responsive" src="../img/<?php echo $About2['img_mis'] ?>" alt="">
        				<span class="card-title text-right">مهمتنا</span>
              </div>
              <div class="card-content carta">
                <ul style="margin-left:15px; direction: rtl;">
                    <?php
                    $values=explode("--",$About2['mis']);
                    //                            var_dump($values);
                    for ($i=0;$i<sizeof($values);$i++)
                    {
                        echo'<li  class="text-right" style="list-style-type: circle;"> '.$values[$i].'</li>';
                    }
                    ?>
                </ul>
              </div>
            </div>
          </div>

			   	<div class="col-md-4 md-margin-bottom-40">
						<div class="card small">
              <div class="card-image">
                <img class="img-responsive" src="../img/<?php echo $About2['img_vis'] ?>" alt="">
                <span class="card-title text-right">رؤيتنا</span>
              </div>
              <div class="card-content carta">
								<ul style="margin-left:15px; direction: rtl;">
                                    <?php
                                    $values=explode("--",$About2['vis']);
                                    //                            var_dump($values);
                                    for ($i=0;$i<sizeof($values);$i++)
                                    {
                                        echo'<li style="list-style-type: circle;"> '.$values[$i].'</li>';
                                    }
                                    ?>
								</ul>
              </div>
            </div>
            </div>
        </div>
		</div>
		</section>
		<section id="content">
			<div class="container">
				<section class="services">
	    	<div class="row">
					<div class="col-md-12">
						<div class="aligncenter">
							<h2 class="aligncenter">النشاطات </h2>
						</div>
						<br/>
					</div>
				</div>
	 			<div class="row">
        	<div class="col-sm-4 info-blocks">
            <div class="info-blocks-in" >
							<i class="icon-info-blocks material-icons">agriculture</i>
              <h3><?php echo $About3['titre'] ?></h3>
							<div class="line"></div>
              <ul style="direction: rtl">
                  <?php
                  $values=explode("--",$About3['val']);
                  //                            var_dump($values);
                  for ($i=0;$i<sizeof($values);$i++)
                  {
                      echo'<li> '.$values[$i].'</li>';
                  }
                  ?>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 info-blocks">
            <div class="info-blocks-in">
					 		<i class="icon-info-blocks material-icons">trending_up</i>
	            <h3><?php echo $About3['titre2'] ?></h3>
							<div class="line"></div>
	            <p class="text-right"><?php echo $About3['val2'] ?></p>
            </div>
          </div>
          <div class="col-sm-4 info-blocks">
            <div class="info-blocks-in">
              <i class="icon-info-blocks material-icons">card_travel</i>
              <h3><?php echo $About3['titre3'] ?></h3>
							<div class="line"></div>
              <ul style="direction: rtl">
                  <?php
                  $values=explode("--",$About3['val3']);
                  //                            var_dump($values);
                  for ($i=0;$i<sizeof($values);$i++)
                  {
                      echo'<li class="text-right"><span class="fa fa-angle-left"></span> '.$values[$i].'</li>';
                  }
                  ?>
								</li>
              </ul>
            </div>
          </div>
        </div>
		</section>
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
<script src="../js/jquery.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/jquery.fancybox-media.js"></script>
<script src="../js/jquery.flexslider.js"></script>
<script src="../js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="../js/modernizr.custom.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/animate.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>
