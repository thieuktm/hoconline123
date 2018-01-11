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
			<a href="<?=base_url('admin') ?>">Home</a>
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="<?=base_url('admin/ntv'); ?>">Người tìm việc</a>
			<i class="icon-angle-right"></i>
		</li>
		<li>
			<a href="#">Hồ sơ tìm việc</a>
		</li>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon list white"></i><span class="break"></span>Danh sách hồ sơ của <?=$ntv['ho']?> <?=$ntv['ten']?></h2>
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
							<th>Tiêu đề</th>
							<th>Ngành nghề</th>
							<th>Địa điểm làm việc</th>
							<th>Kinh nghiệm</th>
							<th>Trình độ</th>
							<th>Mức lương</th>
							<th>Vip</th>
							<th>Xóa hồ sơ</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($hoso as $tmp)
						{
						?>
						<tr>
							<td><?=$tmp['tieu_de'] ?></td>
							<td><?=$tmp['ten_nn'] ?></td>
							<td><?=$tmp['ten_dd'] ?></td>
							<td><?=$tmp['ten_kn'] ?></td>
							<td><?=$tmp['trinh_do'] ?></td>
							<td><?=$tmp['muc_luong'] ?></td>
							<td><input type="checkbox" id="active_<?=$tmp['id_hoso'] ?>" value="1" <?php if($tmp['vip'] == '1') echo "checked"; ?> onclick="return update_info(<?=$tmp['id_hoso']?>)" ></td>
							<td class="center">
								<a class="btn btn-danger" onclick="return xoa_hoso(<?=$tmp['id_hoso']?>)" href="javascript:void(0)">
									<i class="halflings-icon white trash"></i> 
								</a>
							</td>
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
            url:"<?=base_url('admin/ntv/vip'); ?>",
            data:{id:id,vip:value},
			success: function(result)
			{
				if(result == 1)
					alert('Hoàn tất!');
				else
					alert('Lỗi!');
			}
        });
    }
	function xoa_hoso(id){
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('admin/ntv/xoa_hoso'); ?>",
                data:{id:id},
                success: function(result){
                    if(result == 1){
                        alert("Xóa thành công");
                        setTimeout(function(){
                        	location.reload();
                        },1000);
                    }
                }
            });
        }
    }
</script>
