<!-- phần hiện thị-->
<div class="container-fluid">
	<?php
	foreach($giaovien as $gv) {
	?>
	<div class="media">
		<a class="pull-left" href="#">
			<img class="media-object" src="<?=base_url($gv['Avatar']); ?>" alt="" width="100px">
		</a>
		<div class="media-body">
			<h4 class="media-heading"><?=$gv['TenGV'] ?></h4> 
			<p>Email: <?=$gv['mail'] ?></p>
			<p>SĐT: <?=$gv['SDT'] ?></p>
		</div>
	</div>
	<?php
	}
	?>
</div>