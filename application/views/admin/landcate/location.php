<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$this->lang->line('home'); ?></span> - <?=$title?></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#modal_add_title" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <!--<a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i><span>Export</span></a>-->
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url()?>l"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li class="active"><?=$title?></li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <div class="col-md-6">
            <!-- HTML sourced data -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"><?=$title?> VN</h5>

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
                        <th><?=$this->lang->line('location'); ?></th>
                        <th class="text-center"><?=$this->lang->line('action'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($location_vn as $key => $item) {?>
                            <tr>
                                <td><?=$item->id?></td>
                                <td><?=$item->name?></td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                <a onclick="return delTitle(<?=$item->id?>,1)" href="javascript:void(0)"><i class="icon-bin"></i> <?=$this->lang->line('del'); ?></a></li>
                                                <li><a onclick="return editTitle(<?=$item->id?>,1);" data-toggle="modal" data-target="#modal_theme_info"><i class="icon-pencil7"></i> <?=$this->lang->line('edit'); ?></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <?php if(isset($item->child) && $item->child != NULL):?>
                                <?php foreach ($item->child as $key => $child):?>
                                    <tr>
                                        <td><?=$child->id?></td>
                                        <td> -- <?=$child->name?></td>
                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a onclick="return delTitle(<?=$child->id?>,1)" href="javascript:void(0)"><i class="icon-bin"></i> <?=$this->lang->line('del'); ?></a></li>
                                                        <li><a onclick="return editTitle(<?=$child->id?>,1);" data-toggle="modal" data-target="#modal_theme_info"><i class="icon-pencil7"></i> <?=$this->lang->line('edit'); ?></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            <?php endif;?>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <!-- /HTML sourced data -->
        </div>

        <!-- eng -->
        <div class="col-md-6">
            <!-- HTML sourced data -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"><?=$title?> ENG</h5>

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
                        <th><?=$this->lang->line('location'); ?></th>
                        <th class="text-center"><?=$this->lang->line('action'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($location_eng as $key => $item) {?>
                            <tr>
                                <td><?=$item->id?></td>
                                <td><?=$item->name?></td>
                                <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                <a onclick="return delTitle(<?=$item->id?>,2)" href="javascript:void(0)"><i class="icon-bin"></i> <?=$this->lang->line('del'); ?></a></li>
                                                <li><a onclick="return editTitle(<?=$item->id?>,2);" data-toggle="modal" data-target="#modal_theme_info"><i class="icon-pencil7"></i> <?=$this->lang->line('edit'); ?></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <?php if(isset($item->child) && $item->child != NULL):?>
                                <?php foreach ($item->child as $key => $child):?>
                                    <tr>
                                        <td><?=$child->id?></td>
                                        <td> -- <?=$child->name?></td>
                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li>
                                                            <a onclick="return delTitle(<?=$child->id?>,2)" href="javascript:void(0)"><i class="icon-bin"></i> <?=$this->lang->line('del'); ?></a></li>
                                                        <li><a onclick="return editTitle(<?=$child->id?>,2);" data-toggle="modal" data-target="#modal_theme_info"><i class="icon-pencil7"></i> <?=$this->lang->line('edit'); ?></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                            <?php endif;?>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <!-- /HTML sourced data -->
        </div>
        <!--end eng -->
    </div>
    <!-- /content area -->
</div>

<!-- /main content -->
<script type="text/javascript">
    function editTitle(id,lang){
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/landcate/location_edit'); ?>",
            data:{id:id,lang:lang},
            success: function(result){
                var html        = '<form class="form-horizontal">';
                    html        +=  '<div class="form-group">';
                    html        +=      '<label for="Title" class="col-sm-2 control-label"><?=$this->lang->line('location'); ?></label>';
                    html        +=      '<div class="col-sm-10">';
                    html        +=          '<input type="text" class="form-control" id="Title" placeholder="<?=$this->lang->line('location'); ?>" value="'+result.location.name+'" required>';
                    html        +=          '<input type="text" class="hidden" id="id" value="'+result.location.id+'">';
                    html        +=          '<input type="text" class="hidden" id="lang" value="'+lang+'">';
                    html        +=      '</div>';
                    html        +=   '</div>';
                    html        +=  '<div class="form-group">';
                    html        +=      '<label for="parent_id" class="col-sm-2 control-label">Danh mục</label>';
                    html        +=      '<div class="col-sm-10">';
                    html        +=          '<select class="form-control" id="parent_id">';
                    html        +=          '<option value="0"> Là danh mục gốc </option>';
                    if(result.location_parent != '') {
                        $.each(result.location_parent, function (value) {
                            html += '<option value="' + result.location_parent[value].id + '"> ' + result.location_parent[value].name + ' </option>';
                        });
                    }
                    html        +=          '</select>';
                    html        +=      '</div>';
                    html        +=   '</div>';
                    html        +='</form>';
                $('#modal-body').html(html);
                $('.lis-data').attr('data-id',id);
                $('.lis-data').attr('data-lang',lang);
            }
        });
    }
    function delTitle(id,lang){
        if (confirm("are you ready?")) {
            $.ajax({
                dataType: "json",
                type:"POST",
                url:"<?=base_url('admin/landcate/location_del'); ?>",
                data:{id:id,lang:lang},
                success: function(result){
                    if(result == 1){
                        alert("del item success");
                        setTimeout(function(){
                            location.reload();
                        },1000);
                    }
                }
            });
        }
    }
    function saveTitle(){
        var id          = $('.lis-data').attr('data-id');
        var lang        = $('.lis-data').attr('data-lang');
        var title       = $('#Title').val();
        var parent_id   = $('#parent_id').val();

        $('.tag_i').html('<i class="icon-spinner2 spinner"></i> ');
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/landcate/location_update'); ?>",
            data:{id:id,lang:lang,title:title,parent_id:parent_id},
            success: function(result){
                if(result == 1){
                    $('.tag_i').html('<i class="fa fa-check text-success" aria-hidden="true"></i> ');
                    setTimeout(function(){
                        location.reload();
                    }, 1000);
                }else{
                    $('.tag_i').html('<i class="fa fa-ban text-danger" aria-hidden="true"></i>');
                }
            }
        });
    }

</script>

<div id="modal_theme_info" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h6 class="modal-title"><?=$this->lang->line('edit'); ?></h6>
            </div>
            <div class="modal-body" id="modal-body">
            </div>
            <div class="modal-footer">
                <a class="tag_i"></a><button type="button" data-id="" data-lang="" class="btn btn-info lis-data" onclick="saveTitle();"> <?=$this->lang->line('save'); ?></button>
                <button type="button" class="btn btn-link" data-dismiss="modal"><?=$this->lang->line('close'); ?></button>
            </div>
        </div>
    </div>
</div>
<?php
$location_eng_text = '<option value="0">Là Tỉnh - Thành phố</option>';
foreach ($location_eng as $key => $item) {
    $location_eng_text .= '<option value="'.$item->id.'">'.$item->name.'</option>';
}
$location_vn_text = '<option value="0">Là Tỉnh - Thành phố</option>';
foreach ($location_vn as $key => $item) {
    $location_vn_text .= '<option value="'.$item->id.'">'.$item->name.'</option>';
}
?>
<div id="modal_add_title" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h6 class="modal-title"><?=$this->lang->line('edit'); ?></h6>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="Title" class="col-sm-2 control-label"><?=$this->lang->line('location'); ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Title" placeholder="<?=$this->lang->line('location'); ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LangId" class="col-sm-2 control-label">LangId</label>
                        <div class="col-sm-10">
                            <select name="" class="form-control" id="LangId" placeholder="Title">
                                <option value="1">VN</option>
                                <option value="2">ENG</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="parent_id" class="col-sm-2 control-label"><?=$this->lang->line('parent'); ?></label>
                        <div class="col-sm-10">
                            <select name="" class="form-control" id="parent_id" placeholder="Title">
                                <?=$location_vn_text?>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a class="tag_i"></a><button type="button" class="btn btn-info lis-data" onclick="return addDataTitle();"> <?=$this->lang->line('save'); ?></button>
                <button type="button" class="btn btn-link" data-dismiss="modal"><?=$this->lang->line('close'); ?></button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#LangId').change(function(){
        var lang = $('#LangId').val();
        if(lang == 1){
            $('#parent_id').html('<?=$location_vn_text?>');
        }
        if(lang == 2){
            $('#parent_id').html('<?=$location_eng_text?>');
        }
    });
    function addDataTitle(){
        var lang        = $('#LangId').val();
        var title       = $('#Title').val();
        var parent_id   = $('#parent_id').val();
        $('.tag_i').html('<i class="icon-spinner2 spinner"></i> ');
        $.ajax({
            dataType: "json",
            type:"POST",
            url:"<?=base_url('admin/landcate/location_add'); ?>",
            data:{lang:lang,title:title,parent_id:parent_id},
            success: function(result){
                if(result == 1){
                    $('.tag_i').html('<i class="fa fa-check text-success" aria-hidden="true"></i> ');
                    setTimeout(function(){
                        location.reload();
                    }, 1000);
                }else{
                    $('.tag_i').html('<i class="fa fa-ban text-danger" aria-hidden="true"></i>');
                }
            }
        });
    }
</script>