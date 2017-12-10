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
			<a href="<?=base_url('admin/lophoc')?>">Lớp học</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="#">Thêm lớp học</a>
		</li>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm lớp học</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="<?=base_url('admin/lophoc/them')?>" method="post" enctype="multipart/form-data">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="TenLH">Tên lớp học</label>
							<div class="controls">
								<input name="TenLH" class="input-xlarge focused" id="TenLH" type="text">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="giaovien">Giáo viên</label>
							<div class="controls">
								<select id="giaovien" data-rel="chosen" name="magv">
									<?php
									foreach($giaovien as $gv)
									{
									?>
									<option value="<?=$gv['magv']?>"><?=$gv['TenGV']?></option>
									<?php
									}
			   						?>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="ngay_bd">Ngày bắt đầu</label>
							<div class="controls">
								<input name="ngay_BD" type="datetime-local" class="input-xlarge focused" id="ngay_bd">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="ngay_kt">Ngày kết thúc</label>
							<div class="controls">
								<input name="ngay_KT" type="datetime-local" class="input-xlarge focused" id="ngay_kt">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="Soluong_HV">Số lượng học viên</label>
							<div class="controls">
								<input name="Soluong_HV" class="input-xlarge focused" id="Soluong_HV" type="number">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="hoc_phi">Học phí</label>
							<div class="controls">
								<input name="hoc_phi" class="input-xlarge focused" id="hoc_phi" type="number">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="cap">Cấp</label>
							<div class="controls">
								<select id="cap" data-rel="chosen" name="cap">
									<option value="1">Cấp 1</option>
									<option value="2">Cấp 2</option>
									<option value="3">Cấp 3</option>
									<option value="4">Đào tạo nghề</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="active">Active</label>
							<div class="controls">
								<label class="checkbox">
									<input name="active" type="checkbox" id="active" value="1" checked> 
									Chọn để kích hoạt lớp học
								</label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="hot">Hot</label>
							<div class="controls">
								<label class="checkbox">
									<input name="hot" type="checkbox" id="hot" value="1">
									Lớp học hot
								</label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="poster">Poster</label>
							<div class="controls" hidden="">
								<input name="poster" id="poster" type="file" hidden>
							</div>
							<div class="controls">
								<label for="poster" onClick="return chonhinh()"><img src="<?=base_url('images/chonhinh.jpg')?>"  width="400px" class="img-responsive" name="imgupload" style="border-radius: 5px;border: 1px solid darkgray"></label>
								
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" name="them" class="btn btn-primary">Thêm</button>
							<a class="btn" href="<?=base_url('admin/lophoc')?>">Thoát</a>
						</div>
					</fieldset>
				</form>

			</div>
		</div><!--/span-->
	</div><!--/row-->
</div><!--/.fluid-container-->

<!-- end: Content -->
<script type="text/javascript">
	function chonhinh() 
	{
	$('[name = poster]').change(function () {
        if ( window.FileReader ) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('[name = imgupload]').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    })
	}
</script>