<div class="col-sm-3 col-md-2 sidebar">
	<div class="top-navigation">
		<div class="t-menu">MENU</div>
		<div class="t-img">
			<img src="<?=base_url(); ?>images/img/lines.png" alt="" />
		</div>
		<div class="clearfix"> </div>
	</div>
		<div class="drop-navigation drop-navigation">
		  <ul class="nav nav-sidebar">
			<li <?php if($active == 1) echo('class="active"'); ?></l><a href="<?=base_url('lophoc'); ?>" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li <?php if($active == 2) echo('class="active"'); ?>><a href="<?=base_url('lophoc/giaovien1'); ?>" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Giáo Viên cấp 1</a></li>
			<li <?php if($active == 3) echo('class="active"'); ?>><a href="<?=base_url('lophoc/giaovien2'); ?>" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Giáo Viên Cấp 2</a></li>
		
			<li <?php if($active == 4) echo('class="active"'); ?>><a href="<?=base_url('lophoc/giaovien3'); ?>" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Giáo Viên Cấp 3</a></li>
				
			<li <?php if($active == 5) echo('class="active"'); ?>><a href="<?=base_url('lophoc/giaovien4'); ?>" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Giáo Viên Đào Tạo Nghề</a></li>
			<li><a href="news.html" class="news-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>Liên Kết Làm Việc</a></li>
		  </ul>
		  <!-- script-for-menu -->
				<script>
					$( ".top-navigation" ).click(function() {
					$( ".drop-navigation" ).slideToggle( 300, function() {
					// Animation complete.
					});
					});
				</script>
			<div class="side-bottom">
				<div class="side-bottom-icons">
					<ul class="nav2">
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="facebook twitter"> </a></li>
						<li><a href="#" class="facebook chrome"> </a></li>
						<li><a href="#" class="facebook dribbble"> </a></li>
					</ul>
				</div>
				<div class="copyright">
					<p>© 2017 doantotnghiep-NguyenVanThieu-10119052</p>
				</div>
			</div>
		</div>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">