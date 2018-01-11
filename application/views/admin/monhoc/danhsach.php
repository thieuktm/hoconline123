<noscript>
	<div class="alert alert-block span10">
		<h4 class="alert-heading">Warning!</h4>
		<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
	</div>
	</div>
</noscript>

<!-- start: Content -->
<div id="content" class="span10">


	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="<?=base_url() ?>">Trang chủ</a>
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Môn học</a>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon list white"></i><span class="break"></span>Danh sách môn học</h2>
				<div class="box-icon">
					<a href="<?=base_url('admin/monhoc/them')?>"><i class="halflings-icon white plus"></i></a>
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Mã môn học</th>
							<th>Tên môn học</th>
							<th>Lớp</th>
							<th>Số tín chỉ</th>
							<th>Giáo viên</th>
							<th>Active</th>
							<th>Chỉnh sửa</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($monhoc as $tmp)
						{
						?>
						<tr>
							<td><?=$tmp['MaMH'] ?></td>
							<td><?=$tmp['TenMH'] ?></td>
							<td><?=$tmp['TenLH'] ?></td>
							<td><?=$tmp['sotinchi'] ?></td>
							<td><?=$tmp['TenGV'] ?></td>
							<td><input type="checkbox" id="active_<?=$tmp['MaMH'] ?>" value="1" <?php if($tmp['active_mh'] == '1') echo "checked"; ?> onclick="return update_info(<?=$tmp['MaMH']?>)" ></td>
							<td class="center">
								<a class="btn btn-info" href="<?=base_url('admin/monhoc/chinhsua/'.$tmp['MaMH']) ?>">
									<i class="halflings-icon white edit"></i>  
								</a>
								<a class="btn btn-danger" onclick="return xoa_monhoc(<?=$tmp['MaMH']?>)" href="javascript:void(0)">
									<i class="halflings-icon white trash"></i> 
								</a>
							</td>
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
    function xoa_monhoc(id){
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('admin/monhoc/xoa_monhoc'); ?>",
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
	function update_info(id){
        var value = 0;
        if($("#active_"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"<?=base_url('admin/monhoc/active'); ?>",
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
<div id="modal_add_title" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h6 class="modal-title">Thêm Quản trị viên</h6>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="ten" class="col-sm-3 control-label">Tên</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ten" placeholder="Tên" />
                        </div>
                    </div>
					<div class="form-group">
                        <label for="user" class="col-sm-3 control-label">Acount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="acount" placeholder="User" />
                        </div>
                    </div>
					<div class="form-group">
                        <label for="pass" class="col-sm-3 control-label">Mật khẩu</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="pass" placeholder="Mật khẩu" />
                        </div>
                    </div>
					<div class="form-group">
                        <label for="repass" class="col-sm-3 control-label">Nhập lại mật khẩu</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="repass" placeholder="Nhập lại mật khẩu" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info lis-data" onclick="return them_ad();"> Thêm</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function them_ad(){
        var ten   = $('#ten').val();
        var acount   = $('#acount').val();
        var pass   = $('#pass').val();
        var repass   = $('#repass').val();
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/quantri/them_ad'); ?>",
            data:{ten:ten,acount:acount,pass:pass,repass:repass},
            success: function(result){
                if(result == 1){
                    alert("Thêm thành công");
                    setTimeout(function(){
                    	location.reload();
                    }, 1000);
                }else if(result == 2){
                    alert("Mật khẩu không đúng!");
                }else if(result == 3){
					alert("Tài khoản đã tồn tại!");
				}
				else{
					alert("Lỗi!")
				}
            }
        });
    }
</script>