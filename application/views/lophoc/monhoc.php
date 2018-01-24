<div class="main-grids">
	<div class="recommended">
		<div class="recommended-grids">
			<div class="recommended-info">
				<h3><?=$monhoc[0]['TenLH'] ?></h3>
			</div>
			<?php
			foreach($monhoc as $tam)
			{
			?>
			<div class="col-md-3 resent-grid recommended-grid">
				<div class="resent-grid-img recommended-grid-img">
				<!-- load chủ yếu là cái hình ảnh trước video gọi từ file lop trong thư mục controller;-->
					<a href="<?=base_url('lop/'.$tam['MaMH']); ?>"><img src="<?=base_url($tam['poster']); ?>" alt="" /></a>
					<div class="time small-time">
						<p>2:34</p>
					</div>
					<div class="clck small-clck">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
				</div>
				<div class="resent-grid-info recommended-grid-info video-info-grid">
				<!---- load là cái tên trước video gọi từ file lop trong thư mục controller;-->
					<h5><a href="<?=base_url('lop/'.$tam['MaMH']); ?>" class="title"><?=$tam['TenMH']; ?></a></h5>
					<ul>
						<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
					<!--	-- load là cái tên trước video gọi từ file lop trong thư mục controller;-->
					</ul>
				</div>
			</div>
			<?php
			}
			?>
			<div class="clearfix"> </div>
		</div>
		
	</div>
</div>