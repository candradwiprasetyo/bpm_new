<?php
$q_cat = mysql_query("select * from menus where id_menu ='".abs((int)$_GET['id_menu'])."'");
$r_cat = mysql_fetch_array($q_cat);

if($_GET['page'] == "content"){
	$link_search = "index.php?page=".$_GET['page']."&id_menu=".abs((int)$_GET['id_menu']);
}

?>
<div id="content">


<!-- 960 Container -->
<div class="container floated">

	<div class="sixteen floated page-title">

		<h2><?= $r_cat['name']?></h2>

		<nav id="breadcrumbs">
			<ul>
				<!-- <li>You are here:</li> -->
				
				<li><?= $r_cat['name']?></li>
			</ul>
		</nav>

	</div>

</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class="container floated">

	<!-- Page Content -->
	<div class="eleven floated">
		<div class="page-content">

		<?php
		if(!isset($_GET['news_id'])){
			$q_max = mysql_query("select max(news_id) as new_id from news_menu where news_cat_id = '".abs((int)$_GET['id_menu'])."' and active_status = '1'");
			$r_max = mysql_fetch_array($q_max);
			$news_id = $r_max['new_id'];
		}else{
	    	$news_id = $_GET['news_id'];
		}

		$query_pub = mysql_query("SELECT * FROM news_menu where news_id = '$news_id'");
	    $data_pub = mysql_fetch_array($query_pub);
		?>
			<h3 style="margin-top: -10px;"><?php echo $data_pub['news_title'] ?></h3>
			<br>
			<p>
			<?php
		    if($data_pub['news_img']){
			?> 
			<img class="image-left" src="<?= $data_pub['news_img']?>" style="width: 45%;" alt="">
			<?php
			}
			?>
			<?= $data_pub['news_content']?></p>

			<br>
	
		<a href="javascript: history.back()" class="button gray medium">Kembali</a>

		</div>
	</div>
	<!-- Page Content / End -->


	<!-- Sidebar -->
	<div class="four floated sidebar right">
		<aside class="sidebar">

			<!-- Search -->
			<nav class="widget-search">
				<form name="form1" method="post" enctype="multipart/form-data" action="<?php echo $link_search; ?>">
					<button class="search-btn-widget"></button>
					<input class="search-field" type="text" onblur="if(this.value=='')this.value='Search';" onfocus="if(this.value=='Search')this.value='';" value="Search" name="search_content">
				</form>
			</nav>
			<div class="clearfix"></div>

			<!-- Categories -->
			<nav class="widget">
				<h4>Categories</h4>
				<ul class="categories">
					<?php
					$where = '';
					if(isset($_POST['search_content'])){
					  	$where = "and news_title like '%".$_POST['search_content']."%'"; 
					}
					$query = "SELECT * FROM news_menu WHERE news_cat_id = '".abs((int)$_GET['id_menu'])."' and active_status = '1' $where ORDER BY news_lock_id desc, news_id DESC";
					$excute = mysql_query($query);
					while($data = mysql_fetch_array($excute)){
					?>
					<li><a href="index.php?page=content&id_menu=<?php echo abs((int)$_GET['id_menu'])?>&news_id=<?= $data['news_id']?>"><?= $data['news_title']?></a></li>
					<?php
					}
					?>
				</ul>
			</nav>

		
			
		</aside>
	</div>
	<!-- Sidebar / End -->

</div>
<!-- 960 Container / End -->

</div>