
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <?=$title?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?php echo base_url("admin/vieclam/them_vl")?>/add" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span>Thêm việc làm</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=site_url("admin")?>"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="<?=site_url("/admin/vieclam")?>">Việc làm</a></li>
                <li class="active"><?=$title?></li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">

        <!-- HTML sourced data -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?=$title?></h5>

                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
            </div>

            <table class="table datatable-html">
                <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Ngành nghề</th>
                    <th>Nhà tuyển dụng</th>
                    <th>Vị trí</th>
                    <th>Ngày hết hạn</th>
                    <th>active</th>
                    <th class="text-center">Chỉnh sửa</th>
                </tr>
                </thead>
                <tbody>
				<?php 
					foreach($vieclam as $vl)
					{
				?>
                    <tr>
                        <td><?=$vl['tieu_de'] ?></td>
                        <td><?=$vl['ten_nn'] ?></td>
                        <td><?=$vl['ten_cty'] ?></td>
                        <td><?=$vl['ten_dd'] ?></td>
                        <td><?=$vl['ngay_hh'] ?></td>
                        <td><input type="checkbox" id="pronew_<?=$vl['id_vl'] ?>" value="1" <?php if($vl['active'] == 1) echo "checked"; ?> onclick="return update_info(<?=$vl['id_vl']?>)" >
                        </td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a onclick="return check_del()" href="javascript:void(0)"><i class="icon-bin"></i> Xóa</a></li>
                                        <li><a href="<?=base_url()?>admin/vieclam/chinhsua/<?=$vl['id_vl'] ?>"><i class="icon-pencil7"></i> Chỉnh sửa</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php 
					}
				?>
                </tbody>
            </table>
        </div>
        <!-- /HTML sourced data -->
    </div>
    <!-- /content area -->
</div>
<script type="text/javascript">
    function update_info(id){
        var value = 0;
        if($("#"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"<?=base_url('admin/recruiter/update_info'); ?>",
            data:{id:id_pro,val:value,types:type},
			success: function(result)
			{
				if(result == 1)
					alert('Success!');
				else
					alert('Error!');
			}
        });
    }
    function update_qty(id,id_pro){
        value = $("#"+id).val();

        $.ajax({
            method:"POST",
            url:"/admin/recruiter/update_qty",
            data:{id:id_pro,val:value},
        });
    }
</script>
