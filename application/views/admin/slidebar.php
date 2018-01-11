<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li><a href="<?=base_url('admin') ?>"><i class="icon-home"></i><span class="hidden-tablet"> Trang chủ</span></a></li>	
			<li><a href="<?=base_url('admin/quantri') ?>"><i class="icon-user"></i><span class="hidden-tablet"> Admin</span></a></li>	
			<li>
				<a class="dropmenu" href="#"><i class="icon-reorder"></i><span class="hidden-tablet"> Lớp học</span><span class="label label-important"> 2 </span></a>
				<ul>
					<li><a class="submenu" href="<?=base_url('admin/lophoc') ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh sách</span></a></li>
					<li><a class="submenu" href="<?=base_url('admin/lophoc/them') ?>"><i class="icon-plus"></i><span class="hidden-tablet"> Thêm lớp học</span></a></li>
				</ul>	
			</li>
			<li><a href="<?=base_url('admin/giaovien') ?>"><i class="icon-group"></i><span class="hidden-tablet"> Giáo viên</span></a></li>
			<li><a href="<?=base_url('admin/hocvien') ?>"><i class="icon-group"></i><span class="hidden-tablet"> Học viên</span></a></li>
			<li><a href="<?=base_url('admin/monhoc') ?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Môn học</span></a></li>
			<li><a href="<?=base_url('admin/giaotrinh') ?>"><i class="icon-book"></i><span class="hidden-tablet"> Giáo trình</span></a></li>
			
		</ul>
	</div>
</div>
<!-- end: Main Menu -->