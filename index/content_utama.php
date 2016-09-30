<?php
 $id_menu = abs((int)$_GET['id_menu']);
   
   $query_menu = "SELECT * FROM menus WHERE id_menu = $id_menu";
   $excute =  mysql_query($query_menu);
   $data = mysql_fetch_array($excute);
?>
<div id="content">

<!-- 960 Container -->
<div class="container floated">
	<div class="sixteen floated page-title">
		<h2><?= $data['name']?></h2>
	</div>
</div>
<!-- 960 Container / End -->

<!-- 960 Container -->
<div class="container">
	<div class="page-content">	
		<p><?= $data['content']?></p>
	</div>
</div>
<!-- End 960 Container -->

</div>
