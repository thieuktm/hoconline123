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
			<a href="<?=base_url('admin/hocvien')?>">Học viên</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="#">Chỉnh sửa</a>
		</li>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Chỉnh sửa thông tin học viên</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="<?=base_url('admin/hocvien/chinhsua/'.$hocvien['MaHV'])?>" method="post" enctype="multipart/form-data">
					<fieldset>
					  <div class="control-group">
						<label class="control-label" for="ten">Họ tên</label>
						<div class="controls">
						  <input name="ho_ten" class="input-xlarge focused" id="ten" type="text" value="<?=$hocvien['ho_ten']?>">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="email">Email</label>
						<div class="controls">
						  <input name="email" class="input-xlarge focused" id="email" type="email" value="<?=$hocvien['email']?>">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="phone">Điện thoại</label>
						<div class="controls">
						  <input name="phone" class="input-xlarge focused" id="phone" type="text" value="<?=$hocvien['phone']?>">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="dia_chi">Địa chỉ</label>
						<div class="controls">
						  <input name="dia_chi" class="input-xlarge focused" id="diachi" type="text" value="<?=$hocvien['dia_chi']?>">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="ngay_sinh">Ngày sinh</label>
						<div class="controls">
						  <input name="ngay_sinh" class="input-xlarge focused" id="ngay_sinh" type="date" value="<?=$hocvien['ngay_sinh']?>">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="gioi_tinh">Giới tính</label>
						<div class="controls">
						  <select name="gioi_tinh" id="gioi_tinh">
						  	<option value="1" <?php if($hocvien['gioi_tinh'] == 1) echo 'selected'; ?>>Nam</option>
						  	<option value="0" <?php if($hocvien['gioi_tinh'] == 0) echo 'selected'; ?>>Nữ</option>
						  </select>
						</div>
					  </div>
					  <div class="control-group">
							<label class="control-label" for="ngay_dk">Ngày đăng ký</label>
							<div class="controls">
								<input name="ngay_dk" type="datetime-local" class="input-xlarge focused" id="ngay_dk" value="<?=$this->mtime->in_time($hocvien['ngay_dk'])?>">
							</div>
						</div>
					  <div class="control-group">
							<label class="control-label" for="avatar_hv">Avatar</label>
							<div class="controls" hidden="">
								<input name="avatar_hv" id="avatar_hv" type="file" hidden>
								<input name="images" type="text" value="<?=$hocvien['avatar_hv'] ?>">
							</div>
							<div class="controls">
								<label for="avatar_hv" onClick="return chonhinh()"><img src="<?=base_url($hocvien['avatar_hv'])?>"  width="200px" class="img-responsive" name="imgupload" style="border-radius: 5px;border: 1px solid darkgray"></label>
								
							</div>
						</div>
					  <div class="control-group">
						<label class="control-label" for="optionsCheckbox2">Active</label>
						<div class="controls">
						  <label class="checkbox">
							<input name="active" type="checkbox" id="optionsCheckbox2" value="1" <?php if($hocvien['active'] == 1) echo('checked'); ?> >
							Chọn để kích hoạt tài khoản
						  </label>
						</div>
					  </div>
					  <div class="control-group warning">
						<label class="control-label" for="inputWarning">Đổi Mật khẩu</label>
						<div class="controls">
							<button class="btn btn-warning" data-toggle="modal" data-target="#modal_pass">Đổi mật khẩu</button>
						</div>
					  </div>
					  <div class="form-actions">
						<button type="submit" name="luu" class="btn btn-primary">Lưu</button>
						<a class="btn" href="<?=base_url('admin/hocvien')?>">Thoát</a>
					  </div>
					</fieldset>
				  </form>

			</div>
		</div><!--/span-->
	</div><!--/row-->
</div><!--/.fluid-container-->

<!-- end: Content -->
<div id="modal_pass" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h6 class="modal-title">Đổi mật khẩu</h6>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
					<div class="form-group">
                        <label for="pass" class="control-label">Mật khẩu mới</label>
                        <div class="controls">
                            <input type="password" class="form-control" id="pass" placeholder="Mật khẩu mới" />
                        </div>
                    </div>
					<div class="form-group">
                        <label for="repass" class="control-label">Nhập lại mật khẩu mới</label>
                        <div class="controls">
                            <input type="password" class="form-control" id="repass" placeholder="Nhập lại mật khẩu mới" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info lis-data" onclick="return luu_pass(<?=$hocvien['MaHV']?>);"> Lưu</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function luu_pass(id){
        var pass   = $('#pass').val();
        var repass   = $('#repass').val();
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/hocvien/luu_pass'); ?>",
            data:{id:id,pass:pass,repass:repass},
            success: function(result){
                if(result == 1){
                    alert("Lưu thành công");
					setTimeout(function(){
                        	location.reload();
                        },1000);
                }else if(result == 2){
					alert("Mật khẩu mới không trùng khớp!");
				}
				else{
					alert("Lỗi!")
				}
            }
        });
    }

	function chonhinh() 
	{
	$('[name = avatar_hv]').change(function () {
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