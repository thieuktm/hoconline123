
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$this->lang->line('product'); ?></span> - <?=$this->lang->line('list_product'); ?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?php echo base_url("admin/product")?>/add" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=site_url("/admin")?>"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li><a href="<?=site_url("/admin/product")?>"><?=$this->lang->line('product'); ?></a></li>
                <li class="active"><?=$this->lang->line('list_product'); ?></li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">

        <!-- HTML sourced data -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?=$this->lang->line('list_product'); ?></h5>

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
                    <th><?=$this->lang->line('images'); ?></th>
                    <th>Menu</th>
                    <th>LangId</th>
                    <th><?=$this->lang->line('info'); ?></th>
                    <th><?=$this->lang->line('status'); ?></th>
                    <th class="text-center"><?=$this->lang->line('active'); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($product) && is_array($product)):?>
                    <?php foreach($product as $item):
                        if($item->pro_images != ""){
                            $images = unserialize($item->pro_images);
                        }else{
                            $images[0] = "";
                        }
                    ?>
                    <tr>
                        <td><?=$item->pro_id ?></td>
                        <td><?=$item->pro_name?></td>
                        <td><img src="<?=base_url("uploads/products/thumb/")?>/<?=$images[0]?>" width="100" /></td>
                        <td><?=$item->cate_id?></td>
                        <td><?=returnLangType($item->LangId) ?></td>
                        <td><input type="checkbox" id="pronew_<?=$item->pro_id?>" value="1" <?php if($item->pro_new == 1): echo"checked"; endif;?> onclick="return update_info('pronew_<?=$item->pro_id?>',<?=$item->pro_id?>,'pro_new')" > new
                            <br>
                            <input type="checkbox" id="prosale_<?=$item->pro_id?>" value="1" <?php if($item->pro_saleoff == 1): echo"checked"; endif;?> onclick="return update_info('prosale_<?=$item->pro_id?>',<?=$item->pro_id?>,'pro_saleoff')" > sale
                            <br>
                            <input type="checkbox" id="prohot_<?=$item->pro_id?>" value="1" <?php if($item->pro_hot == 1): echo"checked"; endif;?> onclick="return update_info('prohot_<?=$item->pro_id?>',<?=$item->pro_id?>,'pro_hot')" > hot
                            <br>
                            <input type="checkbox" id="prohome_<?=$item->pro_id?>" value="1" <?php if($item->pro_home == 1): echo"checked"; endif;?> onclick="return update_info('prohome_<?=$item->pro_id?>',<?=$item->pro_id?>,'pro_home')" > home
                            <br>
                            <input type="checkbox" id="provip<?=$item->pro_id?>" value="1" <?php if($item->pro_vip == 1): echo"checked"; endif;?> onclick="return update_info('provip<?=$item->pro_id?>',<?=$item->pro_id?>,'pro_vip')" > Vip
                            <br>
                            <input type="number" id="proqty_<?=$item->pro_id?>" value="<?=$item->pro_qty?>" style="width: 40px" onchange="return update_qty('proqty_<?=$item->pro_id?>',<?=$item->pro_id?>)" > SL
                            <br>
                        </td>
                        <td>
                            <input type="checkbox" id="prostatus_<?=$item->pro_id?>" value="1" <?php if($item->pro_status == 1): echo"checked"; endif;?> onclick="return update_info('prostatus_<?=$item->pro_id?>',<?=$item->pro_id?>,'pro_status')" >
                        </td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a onclick="return check_del()" href="<?=site_url()?>/admin/product/del/<?=$item->pro_id?>.html"><i class="icon-bin"></i> del</a></li>
                                        <li><a href="<?=base_url()?>admin/product/edit/<?=$item->pro_id?>"><i class="icon-pencil7"></i> edit</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach; endif;?>
                </tbody>
            </table>
        </div>
        <!-- /HTML sourced data -->
    </div>
    <!-- /content area -->
</div>
<script type="text/javascript">
    function update_info(id,id_pro,type){
        var value = 0;
        if($("#"+id).is(":checked") == true){
            value =1;
        };
        $.ajax({
            method:"POST",
            url:"<?=base_url('admin/product/update_info'); ?>",
            data:{id:id_pro,val:value,types:type},
			success: function(result)
			{
				if(result == '1')
					alert('Success!');
				else
					alert('Error!');
			}
        });
    }
    function update_qty(id,id_pro){
        var value = $("#"+id).val();

        $.ajax({
            method:"POST",
            url:"<?=base_url('admin/product/update_qty'); ?>",
            data:{id:id_pro,val:value},
			success: function(result)
			{
				if(result == '1')
					alert('Success!');
				else
					alert('Error!');
			}
        });
    }
</script>
