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
			<a href="#">Chỉnh sửa</a>
		</li>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Chỉnh sửa môn học</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="<?=base_url('admin/monhoc/chinhsua/'.$monhoc['MaMH'])?>" method="post" enctype="multipart/form-data">
					<fieldset>
					  <div class="control-group">
						<label class="control-label" for="TenMH">Tên môn học</label>
						<div class="controls">
						  <input name="TenMH" class="input-xlarge focused" id="TenMH" type="text" value="<?=$monhoc['TenMH']?>">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="sotinchi">Số tín chỉ</label>
						<div class="controls">
						  <input name="sotinchi" class="input-xlarge focused" id="sotinchi" type="number" value="<?=$monhoc['sotinchi']?>">
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
						  	<option value="<?=$tmp['MaLH']?>" <?php if($monhoc['MaLH'] == $tmp['MaLH']) echo 'selected'; ?>><?=$tmp['TenLH']?></option>
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
						  	<option value="<?=$tmp['magv']?>" <?php if($tmp['magv'] == $monhoc['magv']) echo 'selected'; ?> ><?=$tmp['TenGV']?></option>
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
							<input name="active_mh" type="checkbox" id="optionsCheckbox2" value="1" <?php if($monhoc['active_mh'] == 1) echo('checked'); ?> >
							Chọn để kích hoạt môn học
						  </label>
						</div>
					  </div>
					  <div class="form-actions">
						<button type="submit" name="luu" class="btn btn-primary">Lưu</button>
						<a class="btn" href="<?=base_url('admin/monhoc')?>">Thoát</a>
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
                <button type="button" class="btn btn-info lis-data" onclick="return luu_pass(<?=$monhoc['MaMH']?>);"> Lưu</button>
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
            url:"<?=base_url('admin/monhoc/luu_pass'); ?>",
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