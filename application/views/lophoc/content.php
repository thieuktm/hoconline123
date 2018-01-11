<div class="main-grids">
	<div class="top-grids">
		<div class="recommended-info">
			<h3>Khóa học mới</h3>
		</div>
		<?php
		foreach($lophoc_moi as $tmp)
		{
		?>
		<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
			<div class="resent-grid-img recommended-grid-img">
				<a href="<?=base_url('lop/'.$tmp['MaLH']); ?>"><img src="<?=base_url($tmp['poster']); ?>" alt="" /></a>
				<div class="time">
					<p>3:04</p>
				</div>
				<div class="clck">
					<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
				</div>
			</div>
			<div class="resent-grid-info recommended-grid-info">
				<h3><a href="<?=base_url('lop/'.$tmp['MaLH']); ?>" class="title title-info"><?=$tmp['TenLH']; ?></a></h3>
				<ul>
					<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
					<li class="right-list"><p class="views views-info"><?=$tmp['Soluong_HV']; ?> học viên</p></li>
				</ul>
			</div>
		</div>
		<?php
		}
		?>
		<div class="clearfix"> </div>
	</div>
	<div class="recommended">
		<div class="recommended-grids">
			<div class="recommended-info">
				<h3>Lớp học hot</h3>
			</div>
			<script src="<?=base_url(); ?>js/responsiveslides.min.js"></script>
			 <script>
				// You can also use "$(window).load(function() {"
				$(function () {
				  // Slideshow 4
				  $("#slider3").responsiveSlides({
					auto: true,
					pager: false,
					nav: true,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					  $('.events').append("<li>before event fired.</li>");
					},
					after: function () {
					  $('.events').append("<li>after event fired.</li>");
					}
				  });

				});
			  </script>
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="animated-grids">
							<?php
							$i = 0;
							$dem = count($lophoc_hot);
							foreach($lophoc_hot as $tam)
							{
							?>
							<div class="col-md-3 resent-grid recommended-grid slider-first">
								<div class="resent-grid-img recommended-grid-img">
									<a href="single.html"><img src="<?=base_url($tam['poster']); ?>" alt="" /></a>
									<div class="time small-time slider-time">
										<p>7:34</p>
									</div>
									<div class="clck small-clck">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="single.html" class="title"><?=$tam['TenLH']; ?></a></h5>
									<div class="slid-bottom-grids">
										<div class="slid-bottom-grid">
											<p class="author author-info"><a href="#" class="author">John Maniya</a></p>
										</div>
										<div class="slid-bottom-grid slid-bottom-right">
											<p class="views views-info"><?=$tam['Soluong_HV']; ?> học viên</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<?php
								$i++;
								if($i%4 == 0 && $i < $dem)
								{
									echo('
							<div class="clearfix"> </div>
						</div>
					</li>
					<li>
						<div class="animated-grids">
									');
								}
								elseif($i==$dem)
								{
									echo('
							<div class="clearfix"> </div>
						</div>
					</li>
									');
								}
							}
							?>		
				</ul>
			</div>
		</div>
	</div>
	<div class="recommended">
		<div class="recommended-grids">
			<div class="recommended-info">
				<h3>Cấp 1</h3>
			</div>
			<?php
			foreach($cap1 as $tam)
			{
			?>
			<div class="col-md-3 resent-grid recommended-grid">
				<div class="resent-grid-img recommended-grid-img">
					<a href="single.html"><img src="<?=base_url($tam['poster']); ?>" alt="" /></a>
					<div class="time small-time">
						<p>2:34</p>
					</div>
					<div class="clck small-clck">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
				</div>
				<div class="resent-grid-info recommended-grid-info video-info-grid">
					<h5><a href="single.html" class="title"><?=$tam['TenLH']; ?></a></h5>
					<ul>
						<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
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
	<div class="recommended">
		<div class="recommended-grids">
			<div class="recommended-info">
				<h3>Cấp 2</h3>
			</div>
			<?php
			foreach($cap2 as $tam)
			{
			?>
			<div class="col-md-3 resent-grid recommended-grid">
				<div class="resent-grid-img recommended-grid-img">
					<a href="single.html"><img src="<?=base_url($tam['poster']); ?>" alt="" /></a>
					<div class="time small-time">
						<p>2:34</p>
					</div>
					<div class="clck small-clck">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
				</div>
				<div class="resent-grid-info recommended-grid-info video-info-grid">
					<h5><a href="single.html" class="title"><?=$tam['TenLH']; ?></a></h5>
					<ul>
						<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
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
					<a href="single.html"><img src="<?=base_url($tam['poster']); ?>" alt="" /></a>
					<div class="time small-time">
						<p>2:34</p>
					</div>
					<div class="clck small-clck">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
				</div>
				<div class="resent-grid-info recommended-grid-info video-info-grid">
					<h5><a href="single.html" class="title"><?=$tam['TenLH']; ?></a></h5>
					<ul>
						<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
						<li class="right-list"><p class="views views-info"><?=$tam['Soluong_HV']; ?> học viên</p></li>
					</ul>
				</div>
			</div>
			<?php
			}
			?>
			<div class="clearfix"> </div>
		</div>
		<div class="recommended">
		<div class="recommended-grids">
			<div class="recommended-info">
				<h3>Đào Tạo Nghề</h3>
			</div>
			<?php
			foreach($cap4 as $tam)
			{
			?>
			<div class="col-md-3 resent-grid recommended-grid">
				<div class="resent-grid-img recommended-grid-img">
					<a href="single.html"><img src="<?=base_url($tam['poster']); ?>" alt="" /></a>
					<div class="time small-time">
						<p>2:34</p>
					</div>
					<div class="clck small-clck">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
				</div>
				<div class="resent-grid-info recommended-grid-info video-info-grid">
					<h5><a href="single.html" class="title"><?=$tam['TenLH']; ?></a></h5>
					<ul>
						<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
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
</div>