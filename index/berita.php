<!-- 960 Container -->
<div class="container">

	<!-- Recent News -->
	<div class="eight columns">

		<h3 class="margin-1">Berita  <span>Terbaru</span></h3>
		<?php
		$query_news1 = mysql_query("SELECT * FROM news_menu WHERE news_cat_id = 6 and active_status = '1' ORDER BY news_date DESC LIMIT 0,2");
			while($row_news1 = mysql_fetch_array($query_news1)){
		?>
		<div class="four columns alpha">
			<article class="recent-blog">
				<section class="date">
					<span class="day"><?= format_only_date($row_news1['news_date']); ?></span>
					<span class="month"><?= format_only_month($row_news1['news_date']); ?></span>
				</section>

				<h4><img src="<?php echo $row_news1['news_img'] ?>" class="news-img"><a href="blog-post.html"><?= $row_news1['news_title']?></a></h4>
				<p>
					<?php
						$a = explode(" ",$row_news1['news_desc_index']);
						for($c=0; $c<=50; $c++){
							if(isset($a[$c])){
								echo $a[$c]." ";
							}
						}echo "... "; 
					?>

				</p>
			</article>
		</div>
		<?php
		}
		?>
		

	</div>

	<div class="eight columns">

		<h3 class="margin-1">Peraturan  <span>Terkait</span></h3>

		<div class="eight columns alpha">
			<div class="pricing-table">
				<div class="color-1">
					<ul>
						<?php
						$query_news3 = mysql_query("SELECT * FROM news where news_cat_id = '4' and active_status = '1' ORDER BY news_id DESC LIMIT 0,10");
						while($row_news3 = mysql_fetch_array($query_news3)){
						?>                 
						<li class="sign-up"><i class="icon-check-circle"></i><?php echo $row_news3['news_title']; ?></li>
						<?php
						}
						?>
					</ul>
					<br>
				</div>
			</div>
		</div>


	</div>

	

</div>
<!-- 960 Container / End -->