<div class="main-grids">
	<div class="recommended">
		<div class="recommended-grids">
			<div class="recommended-info">
				<h3>Cấp 3</h3>
			</div>
			<?php
			foreach($cap3 as $tam)
			{
			?>
			<div class="col-md-3 resent-grid recommended-grid">
				<div class="resent-grid-img recommended-grid-img">
					<a href="<?=base_url('lop/'.$tam['MaLH']); ?>"><img src="<?=base_url($tam['poster']); ?>" alt="" /></a>
					<div class="time small-time">
						<p>2:34</p>
					</div>
					<div class="clck small-clck">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
				</div>
				<div class="resent-grid-info recommended-grid-info video-info-grid">
					<h5><a href="<?=base_url('lop/'.$tam['MaLH']); ?>" class="title"><?=$tam['TenLH']; ?></a></h5>
					<ul>
						<li><p class="author author-info"><a href="#" class="author">John </a></p></li>
						<li class="right-list"><p class="views views-info"><?=$tam['Soluong_HV']; ?> học viên</p></li>
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