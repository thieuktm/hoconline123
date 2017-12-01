<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$title; ?></span></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?=base_url("/admin/land/add")?>" class="btn btn-link btn-float has-text"><i class="icon-add text-primary"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <a href="<?=base_url("/admin/land")?>" class="btn btn-link btn-float has-text"><i class="icon-list2 text-primary"></i> <span><?=$this->lang->line('list'); ?></span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url("/admin")?>"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li><a href="<?=base_url("/admin/land")?>"><?=$this->lang->line('land'); ?></a></li>
                <li class="active"><?=$title; ?></li>
            </ul>

            <ul class="breadcrumb-elements">

            </ul>
        </div>
    </div>
    <!-- /page header -->
    <?php
    function showCategories($categories, $parent_id = 0, $char = '',$id_cate,$html = '')
    {
        $html = '';
        $select ="";
        foreach ($categories as $key => $items) {
            if ($items->cate_id_parent == $parent_id) {
                if($id_cate != NULL){
                    if($id_cate == $items->cate_id){
                        $select = 'selected';
                    }
                }
                $html .= '<option '.$select.' value="'.$items->cate_id.'">'.$char.$items->cate_name.'</option>';
                $select = '';
                $html .=showCategories($categories, $items->cate_id, $char . '--',$id_cate,$html);
            }
        }
        return $html;
    }
    function showLocation($categories, $parent_id = 0, $char = '',$id_cate = NULL,$flag = 0,$html = '')
    {
        $select ="";
        $html = '';
        foreach ($categories as $key => $items) {

            if($flag == 1) {
                if ($items->parent_id == $parent_id) {
                    if ($id_cate != NULL) {
                        if ($id_cate == $items->id) {
                            $select = 'selected';
                        }
                    }
                    $html .= '<option ' . $select . ' value="' . $items->id . '">' . $char.' '. $items->name.'</option>';
                    $select = '';
                    $html .= showLocation($categories, $items->id, $char . '->', $id_cate, $flag,$html);
                }else{
                    continue;
                }
            }else {
                $html .= '<option ' . $select . ' value="' . $items->id . '">' . $char . $items->name . '</option>';
            }
        }
        return $html;
    }
    if(count($cate_vn > 0)){
        $cate_text_vn = showCategories($cate_vn,0,'',@$land->cate_id,'');
    }
    if(count($cate_eng > 0)){
        $cate_text_eng = showCategories($cate_eng,0,'',@$land->cate_id,'');
    }
    /**/
    if(count($location_vn > 0)){
        $location_text_vn = showLocation($location_vn,0,'',@$land->location_id,1,'');
    }
    if(count($location_eng > 0)){
        $location_text_eng = showLocation($location_eng,0,'',@$land->location_id,1,'');
    }
    /**/
    if(count($area_vn > 0)){
        $area_text_vn = showLocation($area_vn,0,'',@$land->area,0,'');
    }
    if(count($area_eng > 0)){
        $area_text_eng = showLocation($area_eng,0,'',@$land->area,0,'');
    }
    /**/
    if(count($price_vn > 0)){
        $price_text_vn = showLocation($price_vn,0,'',@$land->price,0,'');
    }
    if(count($price_eng > 0)){
        $price_text_eng = showLocation($price_eng,0,'',@$land->price,0,'');
    }

    ?>

    <!-- Content area -->
    <div class="content">
        <!-- Form horizontal -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><?=$title; ?></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo base_url($url_post)?>" enctype="multipart/form-data" method="post">
                    <fieldset class="content-group">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('lang'); ?>:</label>
                                <div class="col-lg-4">
                                    <select name="LangId" id="LangId" class="form-control">
                                        <option value="1" <?php if(@$land->LangId == 1) echo "selected";?>>VN</option>
                                        <option value="2" <?php if(@$land->LangId == 2) echo "selected";?>>ENG</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('title'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="pro_name" id="pro_name" value="<?=set_value('pro_name')?set_value('pro_name'):@$land->pro_name;?>">
                                </div>
                                <br>
                                <p class="text_test"></p>
                                <?php if(form_error('pro_name') != ''):?>
                                <br>
                                <label class="control-label col-lg-2"></label>
                                <div class="col-lg-4">
                                    <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('pro_name'); ?></span>
                                </div>
                                <?php endif;?>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Menu</label>
                                <div class="col-lg-10">
                                    <select name="cate_id_parent" id="cate_id_parent" class="form-control">
                                        <?php echo $cate_text_vn;?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('location'); ?></label>
                                <div class="col-lg-10">
                                    <select name="location_id" id="location_id" class="form-control">
                                        <?=$location_text_vn?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('area'); ?></label>
                                <div class="col-lg-10">
                                    <select name="area" id="area" class="form-control">
                                        <?=$area_text_vn?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Mức giá</label>
                                <div class="col-lg-10">
                                    <select name="price" id="price" class="form-control">
                                        <?php echo $price_text_vn;?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('price'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="number" class="form-control" name="pro_price" value="<?=set_value('pro_price')?set_value('pro_price'):@$land->pro_price;?>">
                                </div>
                                <?php if(form_error('pro_price') != ''):?>
                                    <br>
                                    <label class="control-label col-lg-2"></label>
                                    <div class="col-lg-4">
                                        <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('pro_price'); ?></span>
                                    </div>
                                <?php endif;?>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"><?=$this->lang->line('images'); ?> Avatar:</label>
                                <div class="col-lg-10">
                                    <input type="file" class="" name="pro_imgshare">
                                    <?php if(@$land->pro_img_seo != ''):?>
                                        <br>
                                        <img src="<?php echo base_url("uploads/lands/thumb/")."/".@$land->pro_img_seo?>" alt="" width="100">
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('price'); ?>/ m<sup>2</sup> :</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="price_m2" value="<?=set_value('price_m2')?set_value('price_m2'):@$land->price_m2?>">
                                    </div>
                                    <?php if(form_error('price_m2') != ''):?>
                                        <br>
                                        <label class="control-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                            <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('price_m2'); ?></span>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('area'); ?> ( m<sup>2</sup>) :</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="area_text" value="<?=set_value('area_text')?set_value('area_text'):@$land->area_text?>">
                                    </div>
                                    <?php if(form_error('area_text') != ''):?>
                                        <br>
                                        <label class="control-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                            <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('area_text'); ?></span>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('address'); ?> :</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="address_info" value="<?=set_value('address_info')?set_value('address_info'):@$land->address_info?>">
                                    </div>
                                    <?php if(form_error('address_info') != ''):?>
                                        <br>
                                        <label class="control-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                            <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('address_info'); ?></span>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>

                            <p><?=$this->lang->line('ceo_support'); ?>: </p>
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('keyword'); ?>:</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="pro_key" value="<?=set_value('pro_key')?set_value('pro_key'):@$land->pro_key?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('description'); ?>:</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="pro_des"><?=set_value('pro_des')?set_value('pro_des'):@$land->pro_des;?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label"></label>
                                        <div class="col-lg-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="pro_new" value="1" <?php if(@$land->pro_new == 1) echo "checked";?> <?php echo set_checkbox('pro_new', '1'); ?>> New
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="pro_hot" value="1" <?php if(@$land->hot == 1) echo "checked";?> <?php echo set_checkbox('pro_hot', '1'); ?>> Hot
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label"></label>
                                        <div class="col-lg-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="pro_status" value="1" <?php if(@$land->pro_status == 1) echo "checked";?> <?php echo set_checkbox('pro_status', '1'); ?>> Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label"></label>
                                        <div class="col-lg-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="pro_home" value="1" <?php if(@$land->pro_home == 1) echo "checked";?> <?php echo set_checkbox('pro_home', '1'); ?>> Home
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="pro_vip" value="1" <?php if(@$land->vip == 1) echo "checked";?> <?php echo set_checkbox('pro_vip', '1'); ?>> Vip
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="col-md-6">
                                <p>Thông tin người bán : </p>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Họ và tên :</label>
                                    <div class="col-lg-10">
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="user_name" value="<?=set_value('user_name')?set_value('user_name'):@$land->user_name?>">
                                        </div>
                                        <?php if(form_error('user_name') != ''):?>
                                            <br>
                                            <label class="control-label col-lg-2"></label>
                                            <div class="col-lg-4">
                                                <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('user_name'); ?></span>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Số điện thoại :</label>
                                    <div class="col-lg-10">
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="user_phone" value="<?=set_value('user_phone')?set_value('user_phone'):@$land->user_phone?>">
                                        </div>
                                        <?php if(form_error('user_phone') != ''):?>
                                            <br>
                                            <label class="control-label col-lg-2"></label>
                                            <div class="col-lg-4">
                                                <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('user_phone'); ?></span>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Email :</label>
                                    <div class="col-lg-10">
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="user_email" value="<?=set_value('user_email')?set_value('user_email'):@$land->user_email?>">
                                        </div>
                                        <?php if(form_error('user_email') != ''):?>
                                            <br>
                                            <label class="control-label col-lg-2"></label>
                                            <div class="col-lg-4">
                                                <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('user_email'); ?></span>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Địa chỉ :</label>
                                    <div class="col-lg-10">
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="user_address" value="<?=set_value('user_address')?set_value('user_address'):@$land->user_address?>">
                                        </div>
                                        <?php if(form_error('user_address') != ''):?>
                                            <br>
                                            <label class="control-label col-lg-2"></label>
                                            <div class="col-lg-4">
                                                <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('user_address'); ?></span>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Images:</label>
                            <div class="col-lg-10">
                                <input type="file" class="file-input-ajax-add" name="pro_img[]" multiple>
                                <?php $imgs = unserialize(@$land->pro_images);?>
                                <?php if($imgs[0] != ''): $i=0;?>
                                    <br>
                                    <?php for($i=0;$i<count($imgs);$i++):?>
                                        <img src="<?php echo base_url("uploads/lands/thumb")."/".$imgs[$i]?>" alt="" width="100" style="float: left;margin-left: 5px">
                                    <?php endfor;?>
                                <?php endif;?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Intro :</label>
                            <div class="col-lg-10">
                                <?=ckeditor("pro_info",set_value('pro_info')?set_value('pro_info'):@$land->pro_info);?>
                            </div>
                            <?php if(form_error('pro_info') != ''):?>
                                <br>
                                <label class="control-label col-lg-2"></label>
                                <div class="col-lg-4">
                                    <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('pro_info'); ?></span>
                                </div>
                            <?php endif;?>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Full :</label>
                            <div class="col-lg-10">
                                <?=ckeditor("pro_full",set_value('pro_full')?set_value('pro_full'):@$land->pro_full);?>
                            </div>
                            <?php if(form_error('pro_full') != ''):?>
                                <br>
                                <label class="control-label col-lg-2"></label>
                                <div class="col-lg-4">
                                    <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('pro_full'); ?></span>
                                </div>
                            <?php endif;?>
                        </div>

                    </fieldset>


                    <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-primary"><?=$this->lang->line('save'); ?> <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form horizontal -->
    </div>
    <!-- /content area -->

</div>
<!-- /main content -->
<script>

    $('#LangId').change(function(){
        var LangId     = $( this).val();
        if(LangId == 1){
            $('#cate_id_parent').html('<?=$cate_text_vn?>');
            $('#location_id').html('<?=$location_text_vn?>');
            $('#area').html('<?=$area_text_vn?>');
            $('#price').html('<?=$price_text_vn?>');
        }
        if(LangId == 2){
            $('#cate_id_parent').html('<?=$cate_text_eng?>');
            $('#location_id').html('<?=$location_text_eng?>');
            $('#area').html('<?=$area_text_eng?>');
            $('#price').html('<?=$price_text_eng?>');
        }
    });
</script>