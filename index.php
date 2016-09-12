<?php
include 'libraries/config.php';
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>BPM Jawa Timur</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css" id="colors">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Java Script
================================================== -->
<script src="scripts/jquery.js"></script>
<script src="scripts/jquery.migrate.js"></script>
<script src="scripts/jquery.flexslider.js"></script>
<script src="scripts/jquery.selectnav.js"></script>
<script src="scripts/jquery.twitter.js"></script>
<script src="scripts/jquery.modernizr.js"></script>
<script src="scripts/jquery.easing.1.3.js"></script>
<script src="scripts/jquery.contact.js"></script>
<script src="scripts/jquery.isotope.min.js"></script>
<script src="scripts/jquery.jcarousel.js"></script>
<script src="scripts/jquery.fancybox.min.js"></script>
<script src="scripts/jquery.transit-modified.js"></script>
<script src="scripts/jquery.layerslider-transitions.js"></script>
<script src="scripts/jquery.layerslider.min.js"></script>
<script src="scripts/jquery.shop.js"></script>
<script src="scripts/custom.js"></script>

</head>
<body>

<div id="background_img">
	<img class="bground" src="images/20140616130641kawah-ijen2a.jpg" width="100%" height="100%">
</div>

<!-- Wrapper / Start -->
<div id="wrapper">

<!-- Header
================================================== -->
<div id="top-line"></div>

<!-- 960 Container -->
<div class="container">

	<!-- Header -->
	<header id="header">

		<!-- Logo -->
		<div class="ten columns">
			<div id="logo">
				<h1><a href="#"><img src="images/judul_banner.png" alt="Nevia Premium Template" /></a></h1>
				
				<div class="clearfix"></div>
			</div>
		</div>

		<!-- Social / Contact -->
		<div class="six columns">



			
			<div class="social-icons">
				<?php //include 'index/flag.php'; ?>
				<!-- <li class="twitter"><a href="#">Twitter</a></li>
				<li class="facebook"><a href="#">Facebook</a></li>
				<li class="dribbble"><a href="#">Dribbble</a></li>
				<li class="linkedin"><a href="#">LinkedIn</a></li>
				<li class="rss"><a href="#">RSS</a></li> -->
			</div>

			<div class="clearfix"></div>

			
			<!-- <div class="contact-details">Contact Phone: +48 880 440 110</div>

			<div class="clearfix"></div> -->
			
			<!-- Search 
			<nav class="top-search">
				<form action="404-page.html" method="get">
					<button class="search-btn"></button>
					<input class="search-field" type="text" onblur="if(this.value=='')this.value='Search';" onfocus="if(this.value=='Search')this.value='';" value="Search" />
				</form>
			</nav>-->

		</div>
	</header>
	<!-- Header / End -->

	<div class="clearfix"></div>

</div>
<!-- 960 Container / End -->


<!-- Navigation
================================================== -->
<nav id="navigation" class="style-1">

<div class="left-corner"></div>
<div class="right-corner"></div>

<ul class="menu" id="responsive">
	<?php
	  $i = 1;
	  $q_menu = mysql_query("select * from menus where level = '1' order by index_id");
	  $jml = mysql_num_rows($q_menu);
	  while($r_menu = mysql_fetch_array($q_menu)){
		  
		  if($r_menu['id_menu'] == 1){
			  $link = $r_menu['link'];
		  }else if($r_menu['id_menu'] == 59){
				$link = "../ppid/";
		  }else if($r_menu['id_menu'] == 60){
				$link = "http://ejisc.bpm.jatimprov.go.id/app_ejisc/web/";
		  }else{
			  $link = "index.php?page=content_utama&id_menu=".$r_menu['id_menu']."";
		  }
		  
	  ?>
	<li><a href="<?php echo $link?>" <?php if($i==1){ ?>id="current"<?php }?>><?= $r_menu['name']?></a>
		<!-- Second Level / Start -->
		<?php
			
            $q_menu2 = mysql_query("select * from menus where level = '2' and id_parent ='".$r_menu['id_menu']."' and id_menu <> 5 and id_menu <> 12 and id_menu <> 29 and id_menu <> 4 order by id_menu");
            $jml2 = mysql_num_rows($q_menu2);
            if($jml2 > 0){ 
        ?>
		<ul>
			<?php
				$i2 = 1;
                while($r_menu2 = mysql_fetch_array($q_menu2)){
					
				  if($r_menu2['id_menu'] == 15 || $r_menu2['id_menu'] == 44 || $r_menu2['id_menu'] == 45 
				  || $r_menu2['id_menu'] == 46 || $r_menu2['id_menu'] == 43 || $r_menu2['id_menu'] == 53
				  || $r_menu2['id_menu'] == 31 || $r_menu2['id_menu'] == 32 || $r_menu2['id_menu'] == 33
				  || $r_menu2['id_menu'] == 68
				  ){
					  $link2 = $r_menu2['link'];
				  }else if($r_menu2['id_menu'] == 40 || $r_menu2['id_menu'] == 41){
					  $link2 = "index.php?page=content_utama&id_menu=".$r_menu2['id_menu'];
				  //}else if($r_menu2['id_menu'] == 35 || $r_menu2['id_menu'] == 36 || $r_menu2['id_menu'] == 37 || $r_menu2['id_menu'] == 38 || $r_menu2['id_menu'] == 39){
					  // $link2 = "index.php?page=investment_guide&ig_type=".$r_menu2['id_menu'];
				  }else if($r_menu2['id_parent']==59 && $r_menu2['id_menu']!=68){
					  $link2 = "index.php?page=content_utama&id_menu=".$r_menu2['id_menu'];
				  }else{
					  $link2 = "index.php?page=content&id_menu=".$r_menu2['id_menu']."";
				  }
					
            ?>
			<li><a href="<?php echo $link2?>"><?= $r_menu2['name']?></a>
			<?php
			$i2++;
            }
            ?>
		</ul>
		<?php 
        }
        ?>
		<!-- Second Level / End -->
	</li>
	<?php
    	$i++;
    }
    ?>

</ul>
</nav>
<div class="clearfix"></div>


<!-- Content
================================================== -->
<div id="content">

<div class="home-frame">
	<div class="slider-frame">
		<!-- FlexSlider  -->
		<section class="flexslider home">
			<ul class="slides">
				<li><img src="images/slide-03.jpg" alt="" />
					<article class="slide-caption">
						<h3>This is a caption</h3>
						<p>Donec scelerisque aliquet mi, non venenatis urnas iaculis. Utea id nila ante. Crasest lorem massa, interdum ateal imperdiet etean. </p>
					</article>
				</li>
				<li><img src="images/slide-04.jpg" alt="" /></li>
				<li><img src="images/slide-05.jpg" alt="" /></li>
			</ul>
		</section>
		<!-- FlexSlider / End -->
	</div>
	<div class="welcome-frame">
		<div class="content">

			<h3 class="margin-reset">Selamat datang di website BPM Jawa Timur</h3><br>
			<p><img class="image-right" src="images/20140930100929Pak Lili edit copy.jpg" style="width: 40%;" alt="">
			<span class="dropcap gray">D</span>
			engan mengucap puji syukur kehadirat Allah SWT, Web site Badan Pananaman Modal (BPMD) Provinsi Jawa Timur telah dapat ditampilkan. guna  menyajikan informasi kondisi dan potensi Provinsi Jawa Timur, khususnya dalam lebih memacu pembangunan penanaman modal di Jawa Timur.
		</div>
	</div>
</div>


<!-- 960 Container -->
<div class="container">

	<!-- Icon Boxes -->
	<section class="icon-box-container">

		<!-- Icon Box Start -->
		<div class="one-third column">
			<article class="icon-box">
				<i class="icon-bullhorn"></i>
				<h3>Clean Design</h3>
				<p>Incredibly clean design provides you powerful way to grow your business.</p>
			</article>
		</div>
		<!-- Icon Box End -->

		<!-- Icon Box Start -->
		<div class="one-third column">
			<article class="icon-box">
				<i class="icon-magic"></i>
				<h3>Responsive</h3>
				<p>This theme is responsive, so it will looks awesome on all mobile devices. </p>
			</article>
		</div>
		<!-- Icon Box End -->

		<!-- Icon Box Start -->
		<div class="one-third column">
			<article class="icon-box">
				<i class="icon-beaker"></i>
				<h3>Retina Ready</h3>
				<p>Nevia is ready for retina and looks fantastic on high-resolution displays.</p>
			</article>
		</div>
		<!-- Icon Box End -->

	</section>
	<!-- Icon Boxes / End -->

</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class="container floated">
	<div class="blank floated">

		<!-- Recent Work Entire -->
		<div class="four columns carousel-intro">

			<section class="entire">
				<h3>Recent Work</h3>
				<p>Adding portfolio entries with this shortcode is now easier then ever.</p>
			</section>

			<div class="carousel-navi">
				<div id="work-prev" class="arl jcarousel-prev"><i class="icon-chevron-left"></i></div>
				<div id="work-next" class="arr jcarousel-next"><i class="icon-chevron-right"></i></div>
			</div>
			<div class="clearfix"></div>

		</div>

		<!-- jCarousel -->
		<section class="jcarousel recent-work-jc">
			<ul>
				<!-- Recent Work Item -->
				<li class="four columns">
					<a href="single-project.html" class="portfolio-item">
						<figure>
							<img src="images/portfolio/portfolio-01.jpg" alt=""/>
							<figcaption class="item-description">
								<h5>Time Is Running Out</h5>
								<span>Photography</span>
							</figcaption>
						</figure>
					</a>
				</li>

				<!-- Recent Work Item -->
				<li class="four columns">
					<a href="single-project.html" class="portfolio-item">
						<figure>
							<img src="images/portfolio/portfolio-02.jpg" alt=""/>
							<figcaption class="item-description">
								<h5>Seeds of Growth</h5>
								<span>Architecture</span>
							</figcaption>
						</figure>
					</a>
				</li>

				<!-- Recent Work Item -->
				<li class="four columns">
					<a href="single-project.html" class="portfolio-item">
						<figure>
							<img src="images/portfolio/portfolio-03.jpg" alt=""/>
							<figcaption class="item-description">
								<h5>Beautiful Flowers</h5>
								<span>Identity</span>
							</figcaption>
						</figure>
					</a>
				</li>

				<!-- Recent Work Item -->
				<li class="four columns">
					<a href="single-project.html" class="portfolio-item">
						<figure>
							<img src="images/portfolio/portfolio-04.jpg" alt=""/>
							<figcaption class="item-description">
								<h5>Poppy Flower</h5>
								<span>Identity</span>
							</figcaption>
						</figure>
					</a>
				</li>

				<!-- Recent Work Item -->
				<li class="four columns">
					<a href="single-project.html" class="portfolio-item">
						<figure>
							<img src="images/portfolio/portfolio-05.jpg" alt=""/>
							<figcaption class="item-description">
								<h5>Death Valley</h5>
								<span>Photography</span>
							</figcaption>
						</figure>
					</a>
				</li>

				<!-- Recent Work Item -->
				<li class="four columns">
					<a href="single-project.html" class="portfolio-item">
						<figure>
							<img src="images/portfolio/portfolio-06.jpg" alt=""/>
							<figcaption class="item-description">
								<h5>Digital World</h5>
								<span>Technology</span>
							</figcaption>
						</figure>
					</a>
				</li>

				<!-- Recent Work Item -->
				<li class="four columns">
					<a href="single-project.html" class="portfolio-item">
						<figure>
							<img src="images/portfolio/portfolio-07.jpg" alt=""/>
							<figcaption class="item-description">
								<h5>American Football</h5>
								<span>Architecture</span>
							</figcaption>
						</figure>
					</a>
				</li>

				<!-- Recent Work Item -->
				<li class="four columns">
					<a href="single-project.html" class="portfolio-item">
						<figure>
							<img src="images/portfolio/portfolio-08.jpg" alt=""/>
							<figcaption class="item-description">
								<h5>Casual Shoes</h5>
								<span>Identity</span>
							</figcaption>
						</figure>
					</a>
				</li>
			</ul>
		</section>
		<!-- jCarousel / End -->

	</div>
</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class="container">

	<!-- Recent News -->
	<div class="eight columns">

		<h3 class="margin-1">Recent News <span>/ Stuff From Our Blog</span></h3>

		<div class="four columns alpha">
			<article class="recent-blog">
				<section class="date">
					<span class="day">28</span>
					<span class="month">Dec</span>
				</section>
				<h4><a href="blog-post.html">The Boating Life Begins With a Good Storm</a></h4>
				<p>Integer libero lectus, porta acean pulvinar ac, facilisis non arcu. <span class="cut">Maecenas enim orci, adipiscing dictum sit amet gusce dapibus.</span></p>
			</article>
		</div>

		<div class="four columns omega">
			<article class="recent-blog">
				<section class="date">
					<span class="day">15</span>
					<span class="month">Dec</span>
				</section>
				<h4><a href="blog-post.html">Visiting Tuscany Without the Crowds</a></h4>
				<p>Integer libero lectus, porta acean pulvinar ac, facilisis non arcu. <span class="cut">Maecenas enim orci, adipiscing dictum sit amet gusce dapibus.</span></p>
			</article>
		</div>

	</div>

	<!-- Testimonials -->
	<div class="eight columns">

		<h3 class="margin-1">Testimonials <span>/ What Our Clients Say</span></h3>

		<!-- Testimonial Rotator -->
		<section class="flexslider testimonial-slider">
			<ul class="slides">
				<li class="testimonial">
					<div class="testimonials">Integer eu libero sit amet nisl vestibulum semper. Fusce costant Proin sit amet mauris odio pellentesque iaculis posuer dapibus natoque penatibus et magnis dis parturient montes.</div>
					<div class="testimonials-bg"></div>
					<div class="testimonials-author">Michael, <span>Flash Developer</span></div>
				</li>

				<li class="testimonial">
					<div class="testimonials">Posuere erat a ante venenatis dapibus posuere velit aliquet. Proin sit amet mauris odio pellentesque iaculis. Cum sociis natoque penatibus et lorem magnis dis parturient montes, nascetur ridiculus mus. Duisean lorem llis noenan coeammodo luctus.</div>
					<div class="testimonials-bg"></div>
					<div class="testimonials-author">John, <span>Web Developer</span></div>
				</li>

				<li class="testimonial">
					<div class="testimonials">Cras sed odio est, sit amet porttitor elit. Vestibulum Proin sit amet mauris et odio pellentesque iaculis. Cum sociis natoque proin sit amet mauris odio pellentesque iaculis.</div>
					<div class="testimonials-bg"></div>
					<div class="testimonials-author">Peter, <span>Project Manager</span></div>
				</li>

				<li class="testimonial">
					<div class="testimonials">Elementum erat vitae ante venenatis dapibus. Maecenas cursus  cursus Proin sit amet mauris et odio pellentesque iaculis.</div>
					<div class="testimonials-bg"></div>
					<div class="testimonials-author">Kathy, <span>Art Director</span></div>
				</li>
			</ul>
		</section>
		<!-- Testomonial Rotator / End -->

	</div>

</div>
<!-- 960 Container / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->


<!-- Footer
================================================== -->

<!-- Footer / Start -->
<footer id="footer">
	<!-- 960 Container -->
	<div class="container">

		<!-- About -->
		<div class="four columns">
			<img id="logo-footer" src="images/logo-footer.png" alt="" />
			<p>Morbi gravida imperdiet rutrum fusce mattis, lectus consequat vestibulum, duinibh fermentum ligula.</p>

		</div>

		<!-- Contact Details -->
		<div class="four columns">
			<h4>Contact Details</h4>
			<ul class="contact-details-alt">
				<li><i class="halflings white map-marker"></i> <p><strong>Address:</strong> 123 Seward Street, Oklahoma City, USA</p></li>
				<li><i class="halflings white user"></i> <p><strong>Phone:</strong> +48 880 440 110</p></li>
				<li><i class="halflings white envelope"></i> <p><strong>Email:</strong> <a href="#"><span class="__cf_email__" data-cfemail="0a676b63664a6f726b677a666f24696567">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></p></li>
			</ul>
		</div>

		<!-- Photo Stream -->
		<div class="four columns">
			<h4>Photo Stream</h4>
			<div class="flickr-widget">
				<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=72179079@N00"></script>
				<div class="clearfix"></div>
			</div>
		</div>

		<!-- Twitter -->
		<div class="four columns">
			<h4>Twitter</h4>
			<ul id="twitter"></ul>
				<script type="text/javascript">
					jQuery(document).ready(function($){
					$.getJSON('twitter.php?url='+encodeURIComponent('statuses/user_timeline.json?screen_name=Vasterad&count=1'), function(tweets){
						$("#twitter").html(tz_format_twitter(tweets));
					}); });
				</script>
			<div class="clearfix"></div>
		</div>

	</div>
	<!-- 960 Container / End -->

</footer>
<!-- Footer / End -->


<!-- Footer Bottom / Start  -->
<footer id="footer-bottom">

	<!-- 960 Container -->
	<div class="container">

		<!-- Copyrights -->
		<div class="eight columns">
			<div class="copyright">
				© Copyright 2015 by <a href="#">Nevia</a>. All Rights Reserved.
			</div>
		</div>

		<!-- Menu -->
		<div class="eight columns">
			<nav id="sub-menu">
				<ul>
					<li><a href="#">FAQ's</a></li>
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>

	</div>
	<!-- 960 Container / End -->

</footer>
<!-- Footer Bottom / End -->




</body>
</html>