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
		<li>
			<a href="<?=base_url('admin/vieclam') ?>">Việc làm</a>
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Danh sách</a>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon list white"></i><span class="break"></span>Danh sách việc làm</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white plus"></i></a>
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
							<th>Nhà tuyển dụng</th>
							<th>Ngành nghề</th>
							<th>Địa điểm</th>
							<th>Ngày hết hạn</th>
							<th>Active</th>
							<th>Chỉnh sửa</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($vieclam as $vl)
						{
						?>
						<tr>
							<td><?=$vl['tieu_de'] ?></td>
							<td><?=$vl['ten_cty'] ?></td>
							<td><?=$vl['ten_nn'] ?></td>
							<td><?=$vl['ten_dd'] ?></td>
							<td><?=$vl['ngay_hh'] ?></td>
							<td><input type="checkbox" id="active_<?=$vl['id_vl'] ?>" value="1" <?php if($vl['active_vl'] == '1') echo "checked"; ?> onclick="return update_info(<?=$vl['id_vl']?>)" ></td>
							<td class="center">
								<a class="btn btn-info" href="#">
									<i class="halflings-icon white edit"></i>  
								</a>
								<a class="btn btn-danger" href="#">
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
            url:"<?=base_url('admin/vieclam/active_vl'); ?>",
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