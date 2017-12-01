<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$title?></span></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?=base_url("/admin/post/add")?>" class="btn btn-link btn-float has-text"><i class="icon-add text-primary"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <a href="<?=base_url("/admin/post")?>" class="btn btn-link btn-float has-text"><i class="icon-list2 text-primary"></i> <span><?=$this->lang->line('list'); ?></span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url("/admin")?>"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li><a href="<?=base_url("/admin/post")?>"><?=$this->lang->line('news'); ?></a></li>
                <li class="active"><?=$title?></li>
            </ul>

            <ul class="breadcrumb-elements">

            </ul>
        </div>
    </div>
    <!-- /page header -->


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
            <?=@$flagdata?$flagdata:""?>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo base_url($url_post)?>" enctype="multipart/form-data" method="post">
                    <fieldset class="content-group">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('name'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="pro_name" value="<?=set_value('pro_name')?set_value('pro_name'):@$post->pro_name;?>">
                                </div>
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
                                    <select name="cate_id_parent" class="form-control">
                                        <?php
                                        function showCategories($categories, $parent_id = 0, $char = '',$id_cate)
                                        {
                                            $select ="";
                                            foreach ($categories as $key => $items) {
                                                if ($items->cate_id_parent == $parent_id) {
                                                    if($id_cate != NULL){
                                                        if($id_cate == $items->cate_id){
                                                            $select = 'selected';
                                                        }
                                                    }
                                                    echo '<option '.$select.' value="'.$items->cate_id.'">'.$char.$items->cate_name.'</option>';
                                                    $select = '';
                                                    showCategories($categories, $items->cate_id, $char . '--',$id_cate);
                                                }
                                            }
                                        }
                                        showCategories($cate,0,"",@$post->cate_id_parent?$post->cate_id_parent:NULL);
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label"></label>
                                        <div class="col-lg-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="pro_new" value="1" <?php if(@$post->pro_new == 1) echo "checked";?> <?php echo set_checkbox('pro_new', '1'); ?>> New
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
                                                    <input type="checkbox" name="pro_status" value="1" <?php if(@$post->pro_status == 1) echo "checked";?> <?php echo set_checkbox('pro_status', '1'); ?>> Active
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
                                                    <input type="checkbox" name="pro_home" value="1" <?php if(@$post->pro_home == 1) echo "checked";?> <?php echo set_checkbox('pro_home', '1'); ?>> Home
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
                                                    <input type="checkbox" name="vip" value="1" <?php if(@$post->vip == 1) echo "checked";?> <?php echo set_checkbox('vip', '1'); ?>> Vip
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2">LangID :</label>
                                <div class="col-lg-4">
                                    <select name="LangId" class="form-control">
                                        <option value="1" <?php if(@$post->LangId == 1) echo "selected";?>>VN</option>
                                        <option value="2" <?php if(@$post->LangId == 2) echo "selected";?>>ENG</option>
                                    </select>
                                </div>
                            </div>
                            <p><?=$this->lang->line('ceo_support'); ?>: </p>
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('keyword'); ?>:</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="pro_key" value="<?=set_value('pro_key')?set_value('pro_key'):@$post->pro_key?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('description'); ?>:</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="pro_des"><?=set_value('pro_des')?set_value('pro_des'):@$post->pro_des;?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"><?=$this->lang->line('images'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="file" class="" name="pro_imgshare">
                                    <?php if(@$post->pro_img_seo != ''):?>
                                        <br>
                                        <img src="<?php echo base_url("uploads/posts/thumb/")."/".@$post->pro_img_seo?>" alt="" width="100">
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="control-label col-lg-2"><?=$this->lang->line('info'); ?>:</label>
                            <div class="col-lg-10">
                                <?=ckeditor("pro_info",set_value('pro_info')?set_value('pro_info'):@$post->pro_info);?>
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
                            <label class="control-label col-lg-2"><?=$this->lang->line('fullinfo'); ?>:</label>
                            <div class="col-lg-10">
                                <?=ckeditor("pro_full",set_value('pro_full')?set_value('pro_full'):@$post->pro_full);?>
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

</script>