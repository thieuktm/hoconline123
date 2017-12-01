<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?=$title?></span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url("/admin")?>"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active"><?=$title?></li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        <!-- Form horizontal -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <?=$flagdata?$flagdata:""?>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo base_url('admin/setup/seo')?>" enctype="multipart/form-data" method="post">
                    <fieldset class="content-group">
                        <div class="col-md-6">
                            <h5 class="panel-title"><?=$title?> : </h5>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Title :</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="title" value="<?=set_value('title')?set_value('title'):$seo_title->value;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Keyword :</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="key" value="<?=set_value('key')?set_value('key'):$seo_key->value?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Description :</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="description"><?=set_value('description')?set_value('description'):$seo_description->value;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Images share:</label>
                                <div class="col-lg-10">
                                    <input type="file" class="" name="img_share">
                                    <?php if($seo_img_share->value != ''):?>
                                        <br>
                                        <img src="<?php echo base_url("uploads/seo/thumb/")."/".$seo_img_share->value?>" alt="" width="100">
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="panel-title">Info : </h5>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Mail :</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="email"><?=set_value('email')?set_value('email'):$seo_email->value;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Phone :</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="phone"><?=set_value('phone')?set_value('phone'):$seo_phone->value;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Address :</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="address"><?=set_value('address')?set_value('address'):$seo_address->value;?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">logo:</label>
                                <div class="col-lg-10">
                                    <input type="file" class="" name="logo">
                                    <?php if($seo_logo->value != ''):?>
                                        <br>
                                        <img src="<?php echo base_url("uploads/logo/thumb/")."/".$seo_logo->value?>" alt="" width="100">
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="text-left">
                                <button type="submit" name="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </fieldset>
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