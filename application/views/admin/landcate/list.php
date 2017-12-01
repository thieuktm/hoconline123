<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$this->lang->line('home'); ?></span> - <?=$this->lang->line('cate_land'); ?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?php echo base_url("admin/landcate")?>/add" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <!--<a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>-->
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url()?>"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li class="active"><?=$this->lang->line('cate_land'); ?></li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <!-- HTML sourced data -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?=$this->lang->line('cate_land'); ?></h5>

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
                    <th><?=$this->lang->line('name'); ?></th>
                    <th><?=$this->lang->line('order'); ?></th>
                    <th><?=$this->lang->line('lang'); ?></th>
                    <th><?=$this->lang->line('option'); ?></th>
                    <th class="text-center"><?=$this->lang->line('action'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php
                function showCategories($categories, $parent_id = 0, $char = '')
                {
                    $i=0;
                    foreach ($categories as $key => $item) {
                        // Nếu là chuyên mục con thì hiển thị
                        if ($item->cate_id_parent == $parent_id) {
                            ?>
                                <tr>
                                    <td><?=$item->cate_id?></td>
                                    <td><?=$char?> <?=htmlspecialchars_decode($item->cate_icon)?> <?=$item->cate_name?></td>
                                    <td><input type="number" size="5" min="0" id="cate_order_<?=$item->cate_id?>" value="<?=$item->cate_order?>" onchange="return update_qty('cate_order_<?=$item->cate_id?>',<?=$item->cate_id?>)"></td>
                                    <td><?php returnLangType($item->LangId) ?></td>
                                    <td>
                                        <input type="checkbox" id="cate_top_<?=$item->cate_id?>" value="1" <?php echo $item->cate_top?'checked':''?> onclick="return update_info('cate_top_<?=$item->cate_id?>',<?=$item->cate_id?>,'cate_top')"> : Top<br>
                                        <input type="checkbox" id="cate_home_<?=$item->cate_id?>" value="1" <?php echo $item->cate_home?'checked':''?> onclick="return update_info('cate_home_<?=$item->cate_id?>',<?=$item->cate_id?>,'cate_home')"> : Home<br>
                                        <input type="checkbox" id="cate_footer_<?=$item->cate_id?>" value="1" <?php echo $item->cate_footer?'checked':''?> onclick="return update_info('cate_footer_<?=$item->cate_id?>',<?=$item->cate_id?>,'cate_footer')"> : Footer<br>
                                        <input type="checkbox" id="cate_status_<?=$item->cate_id?>" value="1" <?php echo $item->cate_status?'checked':''?> onclick="return update_info('cate_status_<?=$item->cate_id?>',<?=$item->cate_id?>,'cate_status')"> : Active<br>
                                    </td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a onclick="return check_del()" href="<?=base_url("admin/landcate/del")."/".$item->cate_id; ?>"><i class="icon-bin"></i> del</a></li>
                                                    <li><a href="<?=base_url("admin/landcate/edit")."/".$item->cate_id; ?>"><i class="icon-pencil7"></i> edit</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php
                            showCategories($categories, $item->cate_id, $char . '--');
                        }
                    }
                }
                showCategories($cate,0,'');?>
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
            url:"<?=base_url('admin/landcate/update_info'); ?>",
            data:{id:id_pro,val:value,types:type},
			success: function(result)
			{
				if(result == 1)
					alert('Success!');
				else
					alert('Error');
			}
        });
    }
    function update_qty(id,id_pro){
        value = $("#"+id).val();

        $.ajax({
            method:"POST",
            url:"<?=base_url('admin/landcate/update_qty'); ?>",
            data:{id:id_pro,val:value},
			success: function(result)
			{
				if(result == 1)
					alert('Success!');
				else
					alert('Error');
			}
        });
    }
</script>
