<?php
if(isset($thongbao)) echo $thongbao;
?>
<noscript>
	<div class="alert alert-block span10">
		<h4 class="alert-heading">Warning!</h4>
		<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
	</div>
</noscript>

<!-- start: Content -->
<div id="content" class="span10">


	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?=base_url('admin')?>">Trang chủ</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="<?=base_url('admin/monhoc')?>">Môn học</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="#">Thêm môn học mới</a>
		</li>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm môn học mới</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="<?=base_url('admin/monhoc/them')?>" method="post" enctype="multipart/form-data">
					<fieldset>
					  <div class="control-group">
						<label class="control-label" for="TenMH">Tên môn học</label>
						<div class="controls">
						  <input name="TenMH" class="input-xlarge focused" id="TenMH" type="text" value="">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="sotinchi">Số tín chỉ</label>
						<div class="controls">
						  <input name="sotinchi" class="input-xlarge focused" id="sotinchi" type="number" value="">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="MaLH">Lớp học</label>
						<div class="controls">
						  <select name="MaLH" id="MaLH">
						  <?php
							foreach($lophoc as $tmp)
							{
						  ?>
						  	<option value="<?=$tmp['MaLH']?>"><?=$tmp['TenLH']?></option>
						  <?php
							}
			   			  ?>
						  </select>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="MaLH">Giáo viên</label>
						<div class="controls">
						  <select name="magv" id="magv">
						  <?php
							foreach($giaovien as $tmp)
							{
						  ?>
						  	<option value="<?=$tmp['magv']?>" ><?=$tmp['TenGV']?></option>
						  <?php
							}
			   			  ?>
						  </select>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="optionsCheckbox2">Active</label>
						<div class="controls">
						  <label class="checkbox">
							<input name="active_mh" type="checkbox" id="optionsCheckbox2" value="1" checked >
							Chọn để kích hoạt môn học
						  </label>
						</div>
					  </div>
					  <div class="form-actions">
						<button type="submit" name="them" class="btn btn-primary">Thêm</button>
						<a class="btn" href="<?=base_url('admin/monhoc')?>">Thoát</a>
					  </div>
					</fieldset>
				  </form>
			</div>
		</div><!--/span-->
	</div><!--/row-->
</div><!--/.fluid-container-->

<!-- end: Content -->