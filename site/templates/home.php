<?php namespace ProcessWire;

// Template file for “home” template used by the homepage
// ------------------------------------------------------
// The #content div in this file will replace the #content div in _main.php
// when the Markup Regions feature is enabled, as it is by default. 
// You can also append to (or prepend to) the #content div, and much more. 
// See the Markup Regions documentation:
// https://processwire.com/docs/front-end/output/markup-regions/

?>

<!-- <div id="content">
	Homepage content 
</div>	 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title>SKKS | Nordheide GbR</title>
    <?php $assets = $config->urls->templates . 'bliize/assets'; ?>

<link href="<?= $assets ?>/css/themify-icons.css" rel="stylesheet">
<link href="<?= $assets ?>/css/flaticon.css" rel="stylesheet">
<link href="<?= $assets ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= $assets ?>/css/animate.css" rel="stylesheet">
<link href="<?= $assets ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?= $assets ?>/css/owl.theme.css" rel="stylesheet">
<link href="<?= $assets ?>/css/slick.css" rel="stylesheet">
<link href="<?= $assets ?>/css/slick-theme.css" rel="stylesheet">
<link href="<?= $assets ?>/css/swiper.min.css" rel="stylesheet">
<link href="<?= $assets ?>/css/owl.transitions.css" rel="stylesheet">
<link href="<?= $assets ?>/css/jquery.fancybox.css" rel="stylesheet">
<link href="<?= $assets ?>/css/odometer-theme-default.css" rel="stylesheet">
<link href="<?= $assets ?>/sass/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>

    <!--=====start page-wrapper =====-->
    <div class="page-wrapper">
         <!--===== start preloader =====-->
         <div class="preloader">
    <div class="vertical-centered-box">
        <div class="content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
                <div class="loader-line"></div>
            </div>
            <img src="<?= $assets ?>/images/preloader.png" alt="">
            </div>
        </div>
    </div>

        <!--===== end preloader =====-->

        <!--  cursor style -->
        <div class="cursor"></div>
        <div class="cursor2"></div>

        <!--===== Start header =====-->
        <header id="header">
            <div class="wpo-site-header wpo-header-style">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center g-0">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="<?= $pages->get('/')->url ?>">
                                        <img src="<?= $assets ?>/images/logo-skks.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children image-style-item">
                                            <a href="#">Home</a>
                                            <ul class="sub-menu image-style">
                                                <li>
                                                    <a href="<?= $pages->get('/')->url ?>">
                                                        <small class="inner">
                                                            <img src="<?= $assets ?>/images/home/modern-architecture.jpg" alt="">
                                                        </small>
                                                        <span>Modern Architecture</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <small class="inner">
                                                            <img src="<?= $assets ?>/images/home/classic-architecture.jpg" alt="">
                                                        </small>
                                                        <span>Classic Architecture</span>
                                                    </a>
                                                </li>
                                                <!-- Repeat pattern for other submenu items -->
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= $pages->get('/about/')->url ?>">About Us</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Services</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="<?= $pages->get('/services/')->url ?>">Services</a></li>
                                                        <li><a href="#">Service Single</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Team</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Team</a></li>
                                                        <li><a href="#">Team single</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Pricing</a></li>
                                                <li><a href="<?= $pages->get('/login/')->url ?>">Login</a></li>
                                                <li><a href="<?= $pages->get('/contact/')->url ?>">Contact Us</a></li>
                                                <li><a href="#">Privacy</a></li>
                                                <li><a href="#">Terms</a></li>
                                                <li><a href="#">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <!-- Repeat same structure for other menu sections -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn"><i class="fi flaticon-loupe"></i></button>
                                            <div class="header-search-form">
                                                <form>
                                                    <div>
                                                        <input type="text" class="form-control" placeholder="Search here...">
                                                        <button type="submit"><i class="fi flaticon-loupe"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="close-form">
                                        <a class="theme-btn" href="<?= $pages->get('/contact/')->url ?>">Contact Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!--===== end of header =====-->

        <!--===== start wpo-hero-slider =====-->
        <section class="wpo-hero-slider">
        <div class="swiper-container">
            <!-- <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="<?= $assets ?>/images/slider/landing-slider2.png">
                        <div class="container">
                            <div class="slide-content">
                                <div data-swiper-parallax="400" class="slide-sub-title">
                                    <h2>
                                        Innovation in Every Line, Strength 
                                        <span>
                                            <img src="<?= $assets ?>/images/slider/hero-text.jpg" alt="">
                                        </span> 
                                        in Every Build
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="<?= $assets ?>/images/slider/landing-slider1.png">
                        <div class="container">
                            <div class="slide-content">
                                <div data-swiper-parallax="400" class="slide-sub-title">
                                    <h2>
                                        Innovation in Every Line, Strength 
                                        <span>
                                            <img src="<?= $assets ?>/images/slider/hero-text.jpg" alt="">
                                        </span> 
                                        in Every Build
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
			<div class="relative w-full h-screen overflow-hidden">
				<video
					class="absolute top-0 left-0 w-full h-full object-cover"
					autoplay
					loop
					muted
					playsinline
				>
					<source src="<?= $assets ?>/videos/landing-video.mp4" type="video/mp4" />
					Your browser does not support the video tag.
				</video>

				<!-- Overlay content similar to slider text -->
				<!-- <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
					<div class="text-center text-white px-4">
					<h2 class="text-3xl md:text-5xl font-bold leading-tight">
						Innovation in Every Line, Strength 
						<span class="inline-block align-middle">
						<img src="<?= $assets ?>/images/slider/hero-text.jpg" alt="" class="inline w-28 md:w-36" />
						</span> 
						in Every Build
					</h2>
					</div>
				</div> -->
			</div>

            <!-- <div class="swiper-pagination"></div> -->
        </div>
            <a href="#about" class="scroll-btn">
                <span>Scroll For More</span>
                <div class="scroll-befor">
                    <img src="<?= $assets ?>/images/down-arrow.svg" alt="">
                </div>
            </a>
        </section>

        <!--===== start wpo-about-section =====-->
        <section id="about" class="wpo-about-section section-padding pt-10 pb-0">
            <div class="about-wrap">
                <div class="content">
                    <h2 class="poort-text poort-in-right">ABOUT</h2>
					<h3>Einzigartige Wohnqualität in Handeloh</h3>
                    <p class="fade_bottom">
					Überzeugende Ausstattung mit guter Wärmedämmung, attraktiver Klinkerfassade, bodentiefe Fenster, hochwertigen Materialien und großzügigen Balkonen.
                    </p>
					<p>
						<i class="fas fa-house-user" style="margin-right:30px;color:#416239;font-size:17px"></i>
						4 Doppelhaushälften, jeweils mit Terrasse oder Balkon
					</p>
					<p>
					<i class="fas fa-ruler-combined" style="margin-right:30px;color:#416239;font-size:17px"></i>
						Wohnflächen: ca. 135 m²
					</p>
					<p>
					<i class="material-icons" style="margin-right:30px; color:#416239; font-size:17px;">photo_size_select_small</i>
						Ab 4.437 € pro Quadratmeter
					</p>
					<p>
						<i class="fas fa-euro-sign" style="margin-right:30px;color:#416239;font-size:19px"></i>
						Kaufpreise: 599.000 € - 645.000 € (provisionsfrei)
					</p>
					<p>
						<i class="fas fa-car" style="margin-right:30px;color:#416239;font-size:17px"></i>
						Inklusive Carport und Stellplatz (zweiter Carport gegen Aufpreis möglich)
					</p>
					<p>
						<i class="fas fa-seedling" style="margin-right:30px;color:#416239;font-size:18px"></i>
						Eigene Gärten von 370 bis 530 m² plus 150 m² Gemeinschaftsfläche je Einheit
					</p>
					<p>
					<i class="material-icons" style="margin-right:30px; color:#416239; font-size:21px;">place</i>
						Adresse: Sültenkamp 4, 21256 Handeloh
					</p>
					<p>
					<i class="material-icons" style="margin-right:30px; color:#416239; font-size:20px;">view_compact</i>
						Robustes Verblendmauerwerk – pflegeleicht und langlebig
					</p>
					<p>
						<i class="fas fa-calendar-check" style="margin-right:30px;color:#416239;font-size:17px"></i>
						Bezugsfertig innerhalb eines Jahres ab Kauf
					</p>
                    <div class="about-btn fade_bottom">
                        <a href="<?= $pages->get('/about/')->url ?>" class="theme-btn">
                            <span class="rolling-text">EXPOSÉ ANFORDERN</span>
                        </a>

                        <div class="video-wrap">
                            <div class="video-holder">
                                <a href="https://www.youtube.com/embed/uySn1BZiWWs?si=XcM3FYqzlXkJaB0v"
                                class="video-btn" data-type="iframe">
                                    <svg width="24" height="27" viewBox="0 0 24 27" fill="none">
                                        <path
                                            d="M22.25 15.665L4.99999 25.6243C3.33333 26.5865 1.25 25.3837 1.25 23.4592L1.25 3.54063C1.25 1.61613 3.33333 0.413319 5 1.37557L22.25 11.3349C23.9167 12.2971 23.9167 14.7027 22.25 15.665Z"
                                            stroke="black" />
                                    </svg>
                                </a>
                            </div>
                            <span>Watch Videos</span>
                        </div>
                    </div>

                    <div class="about-funfact fade_bottom">
                        <h3><span class="odometer" data-count="23">00</span> <span class="icon">+</span></h3>
                        <h4>Years Of <br> Experience</h4>
                    </div>
                </div>
            </div>

            <div class="image">
                <div class="image-1 poort-in-right">
                    <img src="<?= $assets ?>/images/about/building_1.png" width="711" height="1037" alt="">
                </div>
                <div class="image-2 poort-in-right">
                    <img src="<?= $assets ?>/images/about/bathroom_1.png" width="520" height="800" alt="">
                </div>
            </div>
        </section>
     <!--===== start wpo-product-section =====-->
	 <section class="wpo-product-section section-padding pt-0">
            <div class="container-fluid">
                <div class="title">
                    <h2 class="poort-text poort-in-right">UMGEBUNG</h2>
                    <p class="poort-text poort-in-right">Einige der schönsten Ausflugsziele</p>
                </div>
			<?php
			$places = [
			['img' => 'natural_1.jpg', 'title' => 'Hamburg', 'time' => 'ca. 45 min. mit dem Auto', 'link' => '#'],
			['img' => 'natural_2.jpg', 'title' => 'Lüneburg', 'time' => 'ca. 45 min. mit dem Auto', 'link' => '#'],
			['img' => 'natural_3.jpg', 'title' => 'Heide Park Resort', 'time' => 'ca. 30 min. mit dem Auto', 'link' => '#'],
			['img' => 'natural_4.jpg', 'title' => 'Wilseder Berg', 'time' => 'ca. 19 min. mit dem Auto', 'link' => '#'],
			['img' => 'natural_5.jpg', 'title' => 'Büsenbachtal', 'time' => 'ca. 3 min. mit dem Auto', 'link' => '#'],
			['img' => 'natural_6.jpg', 'title' => 'Brunsberg', 'time' => 'ca. 14 min. mit dem Auto', 'link' => '#'],
			['img' => 'natural_7.jpg', 'title' => 'Jod-Sole-Therme Bad Bevensen', 'time' => 'ca. 60 min. mit dem Auto', 'link' => '#'],
			['img' => 'natural_8.jpg', 'title' => 'Heide Kanu', 'time' => 'ca. 30 min. mit dem Auto', 'link' => '#'],
			];
			?>
			<div class="row">
			<?php foreach ($places as $place): ?>
				<div class="col col-lg-3 col-md-6 col-12 fade_bottom">
				<div class="shop-card">
					<div class="image">
					<img src="<?= $assets ?>/images/shop/<?= $place['img'] ?>" alt="<?= htmlspecialchars($place['title']) ?>">
					</div>
					<div class="content">
					<h2><a href="<?= $place['link'] ?>"><?= $place['title'] ?></a></h2>
					<span><?= $place['time'] ?></span>
					</div>
				</div>
				</div>
			<?php endforeach; ?>
			</div>
			<div class="project-allBtn fade_bottom">
						<a href="#" class="theme-btn"><span class="rolling-text">EXPOSÉ ANFORDERN</span> <img
								src="assets/images/right-arrow-2.svg" alt=""></a>
					</div>
				</div>
        </section>

		<!--===== start wpo-project-section =====-->
        <section class="wpo-project-section section-padding">
            <div class="container-fulid">
                <div class="title">
                    <h2 class="poort-text poort-in-right">Onze projecten</h2>
                </div>
                <div class="project-wrap">
                    <?php 
                    $projects = [
                        ['img' => 'building_1.png', 'title' => 'Robust und schön: Klinker', 'width'=>'740', 'height'=>'560'],
                        ['img' => 'building_2.png', 'title' => 'Schöne Architektur','width'=>'940', 'height'=>'560'],
                        ['img' => 'building_3.png', 'title' => 'energie-efficiëntie','width'=>'940', 'height'=>'560'],
                        ['img' => 'bathroom_1.png', 'title' => 'wertige Ausstattung','width'=>'740', 'height'=>'560']
                    ];
                    foreach ($projects as $project): 
                    ?>
                        <div class="project-card fade_bottom">
                            <img src="<?= $assets ?>/images/project/project-1/<?= $project['img'] ?>" width =" <?= $project['width'] ?>" height =" <?= $project['height'] ?>" alt="project-1">
                            <img src="<?= $assets ?>/images/project/project-1/<?= $project['img'] ?>" width =" <?= $project['width'] ?>" height =" <?= $project['height'] ?>" alt="project-1">
                            <div class="content">
                                <h2><a href="<?= $pages->get('/project-single/')->url ?>"><?= $project['title'] ?></a></h2>
                                <span>Gebouw, kamer</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="project-allBtn fade_bottom">
                    <a href="<?= $pages->get('/projects/')->url ?>" class="theme-btn">
                        <span class="rolling-text">Bekijk alle projecten</span>
                        <img src="<?= $assets ?>/images/right-arrow-2.svg" alt="">
                    </a>
                </div>
            </div>
        </section>

        <!--===== start wpo-service-section =====-->
        <section class="wpo-service-section">
            <div class="container-fluid p-0">
                <div class="service-top">
                    <div class="image">
                        <img src="<?= $assets ?>/images/service/room_1.png" alt="service-bg">
                    </div>
                    <div class="content">
                        <h2 class="poort-text poort-in-right"></h2>
                        <p class="fade_bottom">
						Vier exklusive Doppelhaushälften in idyllischer Lage in Handeloh bei Buchholz in der Nordheide
                        </p>
                    </div>
                </div>
                <div class="service-wrap">
                    <div class="row">
                        <?php 
                        $services = [
                            ['icon' => 'icon_units.png', 'title' => 'EINHEITEN','content'=>'4 Doppelhaushälften inkl. Carport und Stellplatz'],
                            ['icon' => 'icon_size.png', 'title' => 'GRÖßE','content'=>'Wohnfläche rund 135 m²
							4,5 Zimmer'],
                            ['icon' => 'icon_garden.png', 'title' => 'GARTENANTEIL','content'=>'Zwischen ca. 370 - 530 m² Grünfläche'],
                            ['icon' => 'icon_top_price.png', 'title' => 'TOP-PREISE','content'=>'ab 599.000 € pro Doppelhaushälfte'],
                        ];
                        foreach ($services as $service): 
                        ?>
                            <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                                <div class="service-card">
                                    <div class="icon">
                                        <img src="<?= $assets ?>/images/service/icon/<?= $service['icon'] ?>" alt="icon" width="45" height="45">
                                    </div>
                                    <h2><a href="<?= $pages->get('/service-single/')->url ?>"><?= $service['title'] ?></a></h2>
                                    <p><?= $service['content']?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

      <!--===== start wpo-funfact-section =====-->
        <section class="wpo-funfact-section">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    $funfacts = [
                        ['count' => 215, 'label' => 'CURRENT CLIENTS'],
                        ['count' => 550, 'label' => 'PROJECTS COMPLETE'],
                        ['count' => 23, 'label' => 'YEARS OF EXPERIENCE'],
                        ['count' => 25, 'label' => 'OFFICES WORLDWIDE'],
                    ];
                    foreach ($funfacts as $fact):
                    ?>
                        <div class="col-lg-3 col-md-6 col-12 fade_bottom">
                            <div class="item">
                                <h2><span class="odometer" data-count="<?= $fact['count'] ?>">00</span> <span class="icon">+</span></h2>
                                <h3><?= $fact['label'] ?></h3>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
   <!--===== start wpo-page-title =====-->
   <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <ol>
                                <li><img src="<?= $assets ?>/images/logo-skks.png" alt="logo"></li>
                            </ol>
                            <h2 class="poort-text poort-in-right">Willkommen daheim!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===== start wpo-service-section =====-->
        <section class="wpo-blog-pg-section blog-pg-fullwidth section-padding pt-0">
            <div class="container-fluid">
                <div class="wpo-blog-wraper">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image scroll-text-animation" data-animation="fade_from_bottom">
                            <div class="entry-media">
								<img src="<?= $assets ?>/images/home/founder.jpg" alt="logo">
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <!-- <li>By:<a href="#">admin </a> </li> -->
                                        <li>Klaus Stora & Sebastian Kröger</li>
                                    </ul>
                                </div>
                                <h3><a href="#">SKKS-Nordheide GbR</a>
                                </h3>
                                <p>Ihre Zufriedenheit ist unsere Motivation. Darum sorgen wir vom ersten Tag der Planung an dafür, dass unser Bauprojekt all Ihre Erwartungen erfüllt. Solide Bauweise, gut funktionierende Grundrisse, modernes Design, hochwertige Ausstattung und unbedingte Energieeffizienz: Für Ihren Komfort gehen wir weiter als andere. Wir sind überzeugt, dass Sie sich in Ihrem neuen Eigenheim auf Anhieb zu Hause fühlen. Melden Sie sich gern, wir freuen uns auf Sie!

Ihre</p>
                                <!-- <a href="blog-single.html" class="read-more">Read More..</a> -->
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</section>		

        <!--===== start wpo-testimonial-section =====-->
        <section class="wpo-testimonial-section">
            <div class="testimonial-slider owl-carousel">
                <?php
                $testimonials = [
                    ['img' => 'img-1.jpg', 'name' => 'Leslie Alexander', 'role' => 'Marketing Coordinator'],
                    ['img' => 'img-2.jpg', 'name' => 'Sarah Krause', 'role' => 'Marketing Coordinator'],
                    ['img' => 'img-3.jpg', 'name' => 'Lavonne Smith', 'role' => 'Marketing Coordinator'],
                ];
                foreach ($testimonials as $item):
                ?>
                    <div class="item">
                        <div class="bg-image">
                            <img src="<?= $assets ?>/images/testimonial/<?= $item['img'] ?>" alt="testimonial">
                        </div>
                        <div class="content fade_bottom">
                            <div class="icon">
                                <img src="<?= $assets ?>/images/testimonial/quote.svg" alt="quote">
                            </div>
                            <h3>
                                Ac sollicitudin euismod ut luctus felis lacus sed pellentesque. Purus eget consectur massa amet.
                                Hac diam suspendisse faucibus posuere dignissim magna condimentum tristique.
                            </h3>
                            <h4><?= $item['name'] ?></h4>
                            <span><?= $item['role'] ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


 
		<!--===== start wpo-team-section =====-->
        <section class="wpo-team-section">
            <div class="container-fluid">
                <div class="title">
                    <h2 class="poort-text poort-in-right">Our Team</h2>
                </div>
                <div class="team-slider owl-carousel">
                    <?php
                    $team = [
                        ['img' => '1.jpg', 'name' => 'Robert Fox', 'role' => 'Senior Architect'],
                        ['img' => '2.jpg', 'name' => 'Harvard Bunion', 'role' => 'Partner & CEO'],
                        ['img' => '3.jpg', 'name' => 'Benzamin Simon', 'role' => 'Interior Designer'],
                    ];
                    foreach ($team as $member):
                    ?>
                        <div class="col">
                            <div class="team-card">
                                <div class="image">
                                    <img src="<?= $assets ?>/images/team/<?= $member['img'] ?>" alt="team">
                                    <img src="<?= $assets ?>/images/team/<?= $member['img'] ?>" alt="team">
                                </div>
                                <h2><a href="<?= $pages->get('/team-single/')->url ?>">
                                    <span class="rolling-text"><?= $member['name'] ?></span></a>
                                </h2>
                                <span><?= $member['role'] ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!--===== start wpo-partners-section =====-->
        <section class="wpo-partners-section fade_bottom">
            <h2 class="d-none">No Content</h2>
            <ul class="partners-slider">
                <?php
                $partners = ['1.png', '2.png', '3.png', '4.png', '5.png', '2.png'];
                foreach ($partners as $logo):
                ?>
                    <li>
                        <div>
                            <img src="<?= $assets ?>/images/partners/<?= $logo ?>" alt="partner logo">
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>

      <!--===== start wpo-site-footer-section =====-->
        <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12 fade_bottom">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="<?= $assets ?>/images/logo-skks.png" alt="logo">
                                </div>
                                <p>
                                    Elit commodo nec urna erat morbi at hac turpis aliquam. In tristique elit nibh
                                    turpis. Lacus volutpat ipsum convallis tellus pellentesque etiam.
                                </p>
                                <div class="social-widget">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="ti-facebook"></i></a>
                                            <a href="#"><i class="ti-twitter-alt"></i></a>
                                            <a href="#"><i class="ti-linkedin"></i></a>
                                            <a href="#"><i class="ti-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12 fade_bottom">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Kontakt</h3>
                                </div>
                                <ul>
                                    <li>info@skks-nordheide.de</li>
                                    <li>04181 / 999 123</li>
                                    <li>Poststraße 13</li>
                                    <li>21244 Buchholz</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12 fade_bottom">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Schnellzugriff</h3>
                                </div>
                                <ul>
                                    <li><a href="<?= $pages->get('/home/')->url ?>"><span class="rolling-text">Startseite</span></a></li>
                                    <li><a href="<?= $pages->get('/about/')->url ?>"><span class="rolling-text">Über uns</span></a></li>
                                    <li><a href="<?= $pages->get('/currentpro/')->url ?>"><span class="rolling-text">Aktuelles Projekt</span></a></li>
                                    <li><a href="<?= $pages->get('/projects/')->url ?>"><span class="rolling-text">Projekte</span></a></li>
                                    <li><a href="<?= $pages->get('/contact/')->url ?>"><span class="rolling-text">Kontakt</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-lg-3 col-md-6 col-sm-12 col-12 fade_bottom">
                            <div class="widget newsletter-widget">
                                <div class="widget-title">
                                    <h3>Newsletter</h3>
                                </div>
                                <form>
                                    <input type="email" class="input-fild" placeholder="Your Email...">
                                    <button>Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wpo-lower-footer">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col col-lg-6 col-12">
                            <p class="copyright">
                                &copy; 2025 SKKS-Nordheide GbR
                            </p>
                        </div>
                        <div class="col col-lg-6 col-12">
                            <ul class="right">
                                <li><a href="<?= $pages->get('/privacy/')->url ?>"><span class="rolling-text">Impressum</span></a>-<a href="<?= $pages->get('/privacy/')->url ?>"><span class="rolling-text">Datenschutzerklärung</span></a></li>
                                <li><span>Webauftritt gestaltet von</span><a href="<?= $pages->get('/login/')->url ?>"><span class="rolling-text">Vision Reality</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </div>
	
    <!--===== end page-wrapper =====-->

<!--===== All JavaScript files =====-->
<script src="<?= $assets ?>/js/jquery.min.js"></script>
<script src="<?= $assets ?>/js/bootstrap.bundle.min.js"></script>

<!--===== Plugins for this template =====-->
<script src="<?= $assets ?>/js/modernizr.custom.js"></script>
<script src="<?= $assets ?>/js/jquery-plugin-collection.js"></script>
<script src="<?= $assets ?>/js/gsap.js"></script>
<script src="<?= $assets ?>/js/gsap-scroll-smoother.js"></script>
<script src="<?= $assets ?>/js/SmoothScroll.js"></script>
<script src="<?= $assets ?>/js/gsap-scroll-trigger.js"></script>
<script src="<?= $assets ?>/js/gsap-split-text.js"></script>
<script src="<?= $assets ?>/js/simpleParallax.js"></script>

<!--===== Custom script for this template =====-->
<script src="<?= $assets ?>/js/script.js"></script>
<script src="<?= $assets ?>/js/gsap-script.js"></script>

</body>

</html>