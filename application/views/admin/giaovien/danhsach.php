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
			<a href="<?=base_url() ?>">Trang chủ</a>
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Giáo viên</a>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon list white"></i><span class="break"></span>Danh sách giáo viên</h2>
				<div class="box-icon">
					<a href="<?=base_url('admin/giaovien/them') ?>"><i class="halflings-icon white plus"></i></a>
					
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Mã giáo viên</th>
							<th>Avatar</th>
							<th>Tên giáo viên</th>
							<th>Email</th>
							<th>Số điện thoại</th>
							<th>Chỉnh sửa</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($giaovien as $tmp)
						{
						?>
						<tr>
							<td><?=$tmp['magv'] ?></td>
							<td><img src="<?=base_url($tmp['Avatar']) ?>" width="60px"></td>
							<td><?=$tmp['TenGV'] ?></td>
							<td><?=$tmp['mail'] ?></td>
							<td><?=$tmp['SDT'] ?></td>
							<td class="center">
								<a class="btn btn-info" href="<?=base_url('admin/giaovien/chinhsua/'.$tmp['magv']) ?>">
									<i class="halflings-icon white edit"></i>  
								</a>
								<a class="btn btn-danger" onclick="return xoa_giaovien(<?=$tmp['magv']?>)" href="javascript:void(0)">
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
    function xoa_giaovien(id){
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('admin/giaovien/xoa_giaovien'); ?>",
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
            url:"<?=base_url('admin/quantri/active'); ?>",
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
