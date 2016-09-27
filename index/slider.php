<div class="home-frame">
	<div class="slider-frame">
		<!-- FlexSlider  -->
		<section class="flexslider home">
			<ul class="slides">
				<?php 
				$query = "SELECT * FROM slider where active_status = '1' ORDER BY date DESC LIMIT 0,7 ";
				$excute = mysql_query($query);
				$i = 1;
				while ($data = mysql_fetch_array($excute)){
				?>
				<li><img src="<?= $data['location']?>" alt="" />
					<article class="slide-caption">
						<div class="slide-description">
							<h3><?php echo $data['name'] ?></h3>
							<p><?php
							$a = explode(" ", $data['description']);
							for($c=0; $c<=12; $c++){
								if(isset($a[$c])){
									echo $a[$c]." ";
								}
							}echo "... ";
							?></p>
						</div>
					</article>
				</li>
				<?php
				$i++;
				}
				?>
			</ul>
		</section>
		<!-- FlexSlider / End -->
	</div>
	<div class="welcome-frame">
		<div class="content">
			<?php
			$query_wp = mysql_query("select welcome_page, welcome_page_photo, welcome_page_name from config");
			$jml_wp = mysql_num_rows($query_wp);
			$r_wp = mysql_fetch_object($query_wp);

			$welcome_page = "Website ini menyajikan informasi yang tersedia untuk mendukung investasi di Jawa Timur pada Morfologi melibatkan singkat, jelas, dan komprehensif, Geografis, Penduduk, Pertumbuhan Ekonomi, PDB, Struktur Ekonomi, Ketenagakerjaan, Inflasi, Pertumbuhan Investasi, Infrastruktur meliputi: Bandara, Pelabuhan, Terminal Tanah Transportasi, Listrik, Air, Telekomunikasi, Hotel, Perbankan dan lain-lain.";
			$welcome_page_photo = "img/images/kepala.jpg";
			$welcome_page_name = "Selamat datang di website BPM Provinsi Jawa Timur";

			if($r_wp->welcome_page_photo != ""){	
				$welcome_page_photo = $r_wp->welcome_page_photo;
			}
			if($r_wp->welcome_page != ""){	
				$welcome_page = $r_wp->welcome_page;
			}
			if($r_wp->welcome_page_name != ""){	
				$welcome_page_name = $r_wp->welcome_page_name;
			}
			//echo $gambar;
			?>

			<h3 class="margin-reset"><?= $welcome_page_name?></h3><br>
			<p><img class="image-right" src="<?= $welcome_page_photo?>" style="width: 40%;" alt="">
			<span class="dropcap gray">D</span>
			<?php
				$ad = explode(" ", $welcome_page);
				for($cd=0; $cd<=90; $cd++){
				echo $ad[$cd]." ";
				}echo "... ";
			?>
		</div>
	</div>
</div>