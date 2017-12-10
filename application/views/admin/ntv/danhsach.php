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
			<a href="<?=base_url() ?>">Home</a>
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Người tìm việc</a>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon list white"></i><span class="break"></span>Danh sách người tìm việc</h2>
				<div class="box-icon">
					<a href="javascript:void(0)" data-toggle="modal" data-target="#modal_add_title"><i class="halflings-icon white plus"></i></a>
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Avatar</th>
							<th>Họ</th>
							<th>Tên</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Ngày sinh</th>
							<th>Địa chỉ</th>
							<th>Giới tính</th>
							<th>Active</th>
							<th>Chỉnh sửa</th>
							<th>Đổi mật khẩu</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($ntv as $tmp)
						{
						?>
						<tr>
							<td><img src="<?=base_url($tmp['avatar']) ?>" width="64px"></td>
							<td><?=$tmp['ho'] ?></td>
							<td><?=$tmp['ten'] ?></td>
							<td><?=$tmp['email'] ?></td>
							<td><?=$tmp['phone'] ?></td>
							<td><?=$tmp['ngay_sinh'] ?></td>
							<td><?=$tmp['dia_chi'] ?></td>
							<td><?=$tmp['gioi_tinh'] ?></td>
							<td><input type="checkbox" id="active_<?=$tmp['id_ntv'] ?>" value="1" <?php if($tmp['active'] == '1') echo "checked"; ?> onclick="return update_info(<?=$tmp['id_ntv']?>)" ></td>
							<td class="center">
								<a class="btn btn-info" href="<?=base_url('admin/ntv/hoso/'.$tmp['id_ntv']) ?>">
									<i class="icon-eye-open"></i>  
								</a>
								<a class="btn btn-danger" onclick="return xoa_ntv(<?=$tmp['id_ntv']?>)" href="javascript:void(0)">
									<i class="halflings-icon white trash"></i> 
								</a>
							</td>
							<td><button class="btn btn-warning" data-toggle="modal" data-target="#modal_pass" onclick="return chinhsua_ntv(<?=$tmp['id_ntv'] ?>);">Đổi mật khẩu</button></td>
							<di
						</tr>
						<?php
						}
			   			?>
					</tbody>
				</table>
			</div>
		</div>
		<!--/span-->

	</div>

</div> <!--/.fluid-container-->

<!-- end: Content -->
<script type="text/javascript">
	function chinhsua_ntv(id){
        $('.lis-data').attr('data-id',id);
    }
    function xoa_ntv(id){
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('admin/ntv/xoa'); ?>",
                data:{id:id},
                success: function(result){
                    if(result == 1){
                        alert("Xóa thành công");
                        setTimeout(function(){
                        	location.reload();
                        },1000);
                    }
					else{
						alert("Lỗi!");
					}
                }
            });
        }
    }
</script>
<script type="text/javascript">
	function update_info(id){
        var value = 0;
        if($("#active_"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"<?=base_url('admin/ntv/active'); ?>",
            data:{id:id,active:value},
			success: function(result)
			{
				if(result == 1)
					alert('Hoàn tất!');
				else
					alert('Lỗi!');
			}
        });
    }
</script>
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
                <button type="button" class="btn btn-info lis-data" onclick="return luu_pass();"> Lưu</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function luu_pass(){
        var id      = $('.lis-data').attr('data-id');
        var pass   = $('#pass').val();
        var repass   = $('#repass').val();
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/ntv/luu_pass'); ?>",
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
</script>