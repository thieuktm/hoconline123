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
			<a href="<?=base_url('admin/giaovien')?>">Giáo viên</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="#">Thêm giáo viên</a>
		</li>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm giáo viên</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="<?=base_url('admin/giaovien/them')?>" method="post" enctype="multipart/form-data">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="tengv">Tên giáo viên</label>
							<div class="controls">
								<input name="TenGV" class="input-xlarge focused" id="tengv" type="text">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="email">Email</label>
							<div class="controls">
								<input name="mail" type="email" class="input-xlarge focused" id="email">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="sdt">Số điện thoại</label>
							<div class="controls">
								<input name="SDT" type="text" class="input-xlarge focused" id="sdt">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="avatar">Avatar</label>
							<div class="controls" hidden="">
								<input name="Avatar" id="avatar" type="file" hidden>
							</div>
							<div class="controls">
								<label for="avatar" onClick="return chonhinh()"><img src="<?=base_url('images/img_avatar.png')?>"  width="200px" class="img-responsive" name="imgupload" style="border-radius: 5px;border: 1px solid darkgray"></label>
								
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
	$('[name = Avatar]').change(function () {
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