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
			<a href="<?=base_url('admin/giaotrinh')?>">Giáo trình</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="#">Chỉnh sửa giáo trình</a>
		</li>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Chỉnh sửa giáo trình</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="<?=base_url('admin/giaotrinh/chinhsua/'.$giaotrinh['Ma_Giaotrinh'])?>" method="post" enctype="multipart/form-data">
					<fieldset>
					  <div class="control-group">
						<label class="control-label" for="MaMH">Môn học</label>
						<div class="controls">
						  <select name="MaMH" id="MaMH" data-rel="chosen">
						  <?php
							foreach($monhoc as $tmp)
							{
						  ?>
						  	<option value="<?=$tmp['MaMH']?>" <?php if($tmp['MaMH'] == $giaotrinh['MaMH']) echo 'selected'; ?>><?=$tmp['TenMH']?> - <?=$tmp['TenLH'] ?></option>
						  <?php
							}
			   			  ?>
						  </select>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="TenGiaotrinh">Tên giáo trình</label>
						<div class="controls">
						  <input name="TenGiaotrinh" class="input-xlarge focused" id="TenGiaotrinh" type="text" value="<?=$giaotrinh['TenGiaotrinh'] ?>">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="video">Link video</label>
						<div class="controls">
						  <input name="video" class="input-xlarge focused" id="video" type="text" value="<?=$giaotrinh['video'] ?>">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="noidungchinh">Nội dung chính</label>
						<div class="controls">
						  <textarea class="cleditor" name="noidungchinh" id="noidungchinh" rows="3"><?=$giaotrinh['noidungchinh'] ?></textarea>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="noidungfull">Nội dung đầy đủ</label>
						<div class="controls">
						  <textarea class="cleditor" name="noidungfull" id="noidungfull" rows="3"><?=$giaotrinh['noidungfull'] ?></textarea>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="gioithieu">Giới thiệu</label>
						<div class="controls">
						  <textarea class="cleditor" name="gioithieu" id="gioithieu" rows="3"><?=$giaotrinh['gioithieu'] ?></textarea>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="optionsCheckbox2">Active</label>
						<div class="controls">
						  <label class="checkbox">
							<input name="active_gt" type="checkbox" id="optionsCheckbox2" value="1" <?php if($giaotrinh['active_gt'] == 1) echo 'checked'; ?> >
							Chọn để kích hoạt giáo trình
						  </label>
						</div>
					  </div>
					  <div class="form-actions">
						<button type="submit" name="luu" class="btn btn-primary">Lưu</button>
						<a class="btn" href="<?=base_url('admin/giaotrinh')?>">Thoát</a>
					  </div>
					</fieldset>
				  </form>
			</div>
		</div><!--/span-->
	</div><!--/row-->
</div><!--/.fluid-container-->

<!-- end: Content -->