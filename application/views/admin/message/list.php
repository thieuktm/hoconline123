<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$this->lang->line('home'); ?></span> - <?=$this->lang->line('message'); ?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url()?>l"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li class="active"><?=$this->lang->line('message'); ?></li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <!-- HTML sourced data -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?=$this->lang->line('message'); ?></h5>

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
                    <th>ID</th>
                    <th><?=$this->lang->line('title'); ?></th>
					<th><?=$this->lang->line('name'); ?></th>
                    <th>Email</th>                    
                    <th><?=$this->lang->line('phone'); ?></th>
                    <th>Ngày gửi</th>
                    <th>Đã đọc</th>
                    <th class="text-center"><?=$this->lang->line('action'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php
                 foreach($contact as $key => $item) {
				?>	
					<tr>
						<td><?=$item['con_id'] ?></td>
						<td><a href="<?=base_url('admin/message/view/'.$item['con_id']); ?>"><?=$item['con_title']?></a></td>
						<td><?=$item['con_name']?></td>
						<td><?=$item['con_email']?></td>
						<td><?=$item['con_phone']?></td>
						<td><?=$item['con_date']?></td>
						<td>
							<input type="checkbox" id="con_status_<?=$item['con_id']?>" value="1" <?php if($item['con_status'] == 1){ echo 'checked'; } ?> onclick="return update_info('con_status_<?=$item['con_id']?>',<?=$item['con_id']?>,'con_status')">
						</td>
						<td class="text-center">
							<a href="<?php echo base_url("admin/message/del")."/".$item['con_id']?>"><i class="icon-bin"></i> del</a>
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

<!-- /main content -->
<script type="text/javascript">
    function update_info(id,id_pro,type){
        var value = 0;
        if($("#"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"<?=base_url('admin/message/update_info'); ?>",
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
            url:"/admin/cago/update_qty",
            data:{id:id_pro,val:value},
        });
    }
</script>
