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
		<li><a href="#">Giáo trình</a>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon list white"></i><span class="break"></span>Danh sách giáo trình</h2>
				<div class="box-icon">
					<a href="<?=base_url('admin/giaotrinh/them')?>"><i class="halflings-icon white plus"></i></a>
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Mã giáo trình</th>
							<th>Tên giáo trình</th>
							<th>Tên môn học</th>
							<th>Lớp học</th>
							<th>Giới thiệu</th>
							<th>Video</th>
							<th>Active</th>
							<th>Chỉnh sửa</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($giaotrinh as $tmp)
						{
						?>
						<tr>
							<td><?=$tmp['Ma_Giaotrinh'] ?></td>
							<td><?=$tmp['TenGiaotrinh'] ?></td>
							<td><?=$tmp['TenMH'] ?></td>
							<td><?=$tmp['TenLH'] ?></td>
							<td><?=$tmp['gioithieu'] ?></td>
							<td>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="<?=$tmp['video'] ?>"></iframe>
								</div>
							</td>
							<td><input type="checkbox" id="active_<?=$tmp['Ma_Giaotrinh'] ?>" value="1" <?php if($tmp['active_gt'] == '1') echo "checked"; ?> onclick="return update_info(<?=$tmp['Ma_Giaotrinh']?>)" ></td>
							<td class="center">
								<a class="btn btn-info" href="<?=base_url('admin/giaotrinh/chinhsua/'.$tmp['Ma_Giaotrinh']) ?>">
									<i class="halflings-icon white edit"></i>  
								</a>
								<a class="btn btn-danger" onclick="return xoa_giaotrinh(<?=$tmp['Ma_Giaotrinh']?>)" href="javascript:void(0)">
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
    function xoa_giaotrinh(id){
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('admin/giaotrinh/xoa_giaotrinh'); ?>",
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
            url:"<?=base_url('admin/giaotrinh/active'); ?>",
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