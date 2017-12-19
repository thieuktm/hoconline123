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
		<li>
			<a href="<?=base_url('admin/vieclam') ?>">Lớp học</a>
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Danh sách</a>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon list white"></i><span class="break"></span>Danh sách lớp học</h2>
				<div class="box-icon">
					<a href="<?=base_url('admin/lophoc/them')?>" class=""><i class="halflings-icon white plus"></i></a>
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Poster</th>
							<th>Tên lớp học</th>
							<th>Tên giáo viên</th>
							<th>Ngày bắt đầu</th>
							<th>Ngày kết thúc</th>
							<th>Số lượng</th>
							<th>Học phí</th>
							<th>Cấp</th>
							<th>Active</th>
							<th>Hot</th>
							<th>Chỉnh sửa</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($lophoc as $tmp)
						{
						?>
						<tr>
							<td><img src="<?=base_url($tmp['poster']) ?>" width="64px"></td>
							<td><?=$tmp['TenLH'] ?></td>
							<td><?=$tmp['TenGV'] ?></td>
							<td><?=$tmp['ngay_BD'] ?></td>
							<td><?=$tmp['ngay_KT'] ?></td>
							<td><?=$tmp['Soluong_HV'] ?></td>
							<td><?=$tmp['hoc_phi'] ?></td>
							<td><?=$tmp['cap'] ?></td>
							<td><input type="checkbox" id="active_<?=$tmp['MaLH'] ?>" value="1" <?php if($tmp['active'] == '1') echo "checked"; ?> onclick="return update_info(<?=$tmp['MaLH']?>)" ></td>
							<td><input type="checkbox" id="hot_<?=$tmp['MaLH'] ?>" value="1" <?php if($tmp['hot'] == '1') echo "checked"; ?> onclick="return lop_hot(<?=$tmp['MaLH']?>)" ></td>
							<td class="center">
								<a class="btn btn-info" href="<?=base_url('admin/lophoc/chinhsua/'.$tmp['MaLH'])?>">
									<i class="halflings-icon white edit"></i>  
								</a>
								<a class="btn btn-danger" onclick="return xoa_lophoc(<?=$tmp['MaLH']?>)" href="javascript:void(0)">
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
    function update_info(id){
        var value = 0;
        if($("#active_"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"<?=base_url('admin/lophoc/active'); ?>",
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
	function lop_hot(id){
        var value = 0;
        if($("#hot_"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"<?=base_url('admin/lophoc/lop_hot'); ?>",
            data:{id:id,hot:value},
			success: function(result)
			{
				if(result == 1)
					alert('Hoàn tất!');
				else
					alert('Lỗi!');
			}
        });
    }
	function xoa_lophoc(id){
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('admin/lophoc/xoa'); ?>",
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