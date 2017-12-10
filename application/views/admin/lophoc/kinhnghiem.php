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
		<li>
			<a href="<?=base_url('admin/vieclam') ?>">Việc làm</a>
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Kinh nghiệm</a>
	</ul>

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon list white"></i><span class="break"></span>Danh sách kinh nghiệm</h2>
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
							<th>ID</th>
							<th>Kinh nghiệm</th>
							<th>Chỉnh sửa</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($kinhnghiem as $kn)
						{
						?>
						<tr>
							<td><?=$kn['id_kn'] ?></td>
							<td><?=$kn['ten_kn'] ?></td>
							<td class="center">
								<a class="btn btn-info" onclick="return chinhsua_kn(<?=$kn['id_kn'] ?>);" data-toggle="modal" data-target="#modal_edit">
									<i class="halflings-icon white edit"></i>  
								</a>
								<a class="btn btn-danger" onclick="return xoa_kn(<?=$kn['id_kn']?>)" href="javascript:void(0)">
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
    function chinhsua_kn(id){
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('/admin/vieclam/chinhsua_kn'); ?>",
            data:{id:id},
            success: function(result){
                var html        = '<form class="form-horizontal">';
                    html        +=  '<div class="form-group">';
                    html        +=      '<label for="kinh_nghiem" class="col-sm-3 control-label">Kinh nghiệm</label>';
                    html        +=      '<div class="col-sm-9">';
                    html        +=          '<input type="text" class="form-control" id="kinh_nghiem" placeholder="Kinh nghiệm" value="'+result.ten_kn+'" required>';
                    html        +=          '<input type="text" class="hidden" id="id" value="'+result.id+'">';
                    html        +=      '</div>';
                    html        +=   '</div>';
                    html        +='</form>';
                $('#modal-body').html(html);
                $('.lis-data').attr('data-id',id);
            }
        });
    }
    function xoa_kn(id){
        if (confirm("Bạn có muốn xóa không?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('admin/vieclam/xoa_kn'); ?>",
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
    function luu_kn(){
        var id      = $('.lis-data').attr('data-id');
        var kinhnghiem   = $('#kinh_nghiem').val();
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('/admin/vieclam/luu_kn'); ?>",
            data:{id:id,kinhnghiem:kinhnghiem},
            success: function(result){
                if(result == 1){
                    alert("Lưu thành công");
                    setTimeout(function(){
                    	location.reload();
                    }, 1000);
                }else{
                    alert("Lỗi!");
                }
            }
        });
    }

</script>

<div id="modal_edit" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h6 class="modal-title">Chỉnh sửa Kinh nghiệm</h6>
            </div>
            <div class="modal-body" id="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" data-id="" data-lang="" class="btn btn-info lis-data" onclick="luu_kn();"> Lưu lại</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<div id="modal_add_title" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h6 class="modal-title">Thêm Kinh nghiệm</h6>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="kinhnghiem" class="col-sm-3 control-label">Kinh nghiệm</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kinhnghiem" placeholder="Kinh nghiệm" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info lis-data" onclick="return them_kn();"> Thêm</button>
                <button type="button" class="btn btn-link" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function them_kn(){
        var kinhnghiem   = $('#kinhnghiem').val();
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/vieclam/them_kn'); ?>",
            data:{kinhnghiem:kinhnghiem},
            success: function(result){
                if(result == 1){
                    alert("Thêm thành công");
                    setTimeout(function(){
                    	location.reload();
                    }, 1000);
                }else{
                    alert("Lỗi!");
                }
            }
        });
    }
</script>