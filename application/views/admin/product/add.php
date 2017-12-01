<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Add Product</span></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?=base_url("/admin/product/add")?>" class="btn btn-link btn-float has-text"><i class="icon-add text-primary"></i><span>Add</span></a>
                    <a href="<?=base_url("/admin/product")?>" class="btn btn-link btn-float has-text"><i class="icon-list2 text-primary"></i> <span>List</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url("/admin")?>"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="<?=base_url("/admin/product")?>">Product</a></li>
                <li class="active">add</li>
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
                <h5 class="panel-title">Add product</h5>
                <div class="heading-elements">
                    <ul class="icons-list"></ul>
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
                                <label class="control-label col-lg-2">Name :</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="pro_name" value="<?=set_value('pro_name')?set_value('pro_name'):@$product->pro_name;?>">
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
                                <label class="control-label col-lg-2">Code :</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="pro_code" value="<?=set_value('pro_code')?set_value('pro_code'):@$product->pro_code;?>">
                                </div>
                                <?php if(form_error('pro_code') != ''):?>
                                    <br>
                                    <label class="control-label col-lg-2"></label>
                                    <div class="col-lg-4">
                                        <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('pro_code'); ?></span>
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
                                        showCategories($cate,0,"",@$product->cate_id_parent?$product->cate_id_parent:NULL);
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Quantity :</label>
                                <div class="col-lg-10">
                                    <input type="number" class="form-control" name="pro_qty" value="<?=set_value('pro_qty')?set_value('pro_qty'):@$product->pro_qty;?>">
                                </div>
                                <?php if(form_error('pro_qty') != ''):?>
                                    <br>
                                    <label class="control-label col-lg-2"></label>
                                    <div class="col-lg-4">
                                        <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('pro_qty'); ?></span>
                                    </div>
                                <?php endif;?>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Price :</label>
                                <div class="col-lg-10">
                                    <input type="number" class="form-control" name="pro_price" value="<?=set_value('pro_price')?set_value('pro_price'):@$product->pro_price;?>">
                                </div>
                                <?php if(form_error('pro_price') != ''):?>
                                    <br>
                                    <label class="control-label col-lg-2"></label>
                                    <div class="col-lg-4">
                                        <span class="label label-block label-danger text-left" style="margin-top: 10px"><?php echo form_error('pro_price'); ?></span>
                                    </div>
                                <?php endif;?>
                            </div>
                        <!--<div class="form-group">
                            <label class="col-lg-2 control-label">Images Avatar:</label>
                            <div class="col-lg-10">
                                <input type="file" name="pro_avarta" class="" src="<?/*=$item['pro_avarta']*/?>">
                            </div>
                        </div>-->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-lg-2">LangID :</label>
                                <div class="col-lg-4">
                                    <select name="LangId" class="form-control">
                                        <option value="1" <?php if(@$product->LangId == 1) echo "selected";?>>VN</option>
                                        <option value="2" <?php if(@$product->LangId == 2) echo "selected";?>>ENG</option>
                                    </select>
                                </div>
                            </div>
                            <p>Hỗ trợ seo : </p>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Keyword :</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="pro_key" value="<?=set_value('pro_key')?set_value('pro_key'):@$product->pro_key?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Description :</label>
                                <div class="col-lg-10">
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="pro_des"><?=set_value('pro_des')?set_value('pro_des'):@$product->pro_des;?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Images share:</label>
                                <div class="col-lg-10">
                                    <input type="file" class="" name="pro_imgshare">
                                    <?php if(@$product->pro_img_seo != ''):?>
                                        <br>
                                        <img src="<?php echo base_url("uploads/products/thumb/")."/".@$product->pro_img_seo?>" alt="" width="100">
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="pro_new" value="1" <?php if(@$product->pro_new == 1) echo "checked";?> <?php echo set_checkbox('pro_new', '1'); ?>> New
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="pro_hot" value="1" <?php if(@$product->pro_hot == 1) echo "checked";?> <?php echo set_checkbox('pro_hot', '1'); ?>> Hot
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
                                                <input type="checkbox" name="pro_saleoff" value="1" <?php if(@$product->pro_saleoff == 1) echo "checked";?> <?php echo set_checkbox('pro_saleoff', '1') ?>> Sale
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="pro_status" value="1" <?php if(@$product->pro_status == 1) echo "checked";?> <?php echo set_checkbox('pro_status', '1'); ?>> Active
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
                                                <input type="checkbox" name="pro_home" value="1" <?php if(@$product->pro_home == 1) echo "checked";?> <?php echo set_checkbox('pro_home', '1'); ?>> Home
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="pro_vip" value="1" <?php if(@$product->pro_vip == 1) echo "checked";?> <?php echo set_checkbox('pro_vip', '1'); ?>> Vip
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Images:</label>
                            <div class="col-lg-10">
                                <input type="file" class="file-input-ajax-add" name="pro_img[]" multiple>
                                <?php $imgs = unserialize(@$product->pro_images);?>
                                <?php if($imgs[0] != ''): $i=0;?>
                                    <br>
                                    <?php for($i=0;$i<count($imgs);$i++):?>
                                        <img src="<?php echo base_url("uploads/products/thumb")."/".$imgs[$i]?>" alt="" width="100" style="float: left;margin-left: 5px">
                                    <?php endfor;?>
                                <?php endif;?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Info :</label>
                            <div class="col-lg-10">
                                <?=ckeditor("pro_info",set_value('pro_info')?set_value('pro_info'):@$product->pro_info);?>
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
                                <?=ckeditor("pro_full",set_value('pro_full')?set_value('pro_full'):@$product->pro_full);?>
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
                        <button type="submit" name="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
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