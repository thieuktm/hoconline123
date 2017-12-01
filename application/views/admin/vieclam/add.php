<?php
    $position_vn        = returnDataLang($position,1,@$re_info->id_position);
    $position_eng       = returnDataLang($position,2,@$re_info->id_position);

    $career_vn          = returnDataLang($career,1,@$re_info->id_career);
    $career_eng         = returnDataLang($career,2,@$re_info->id_career);

    $location_vn        = returnDataLang($location,1,@$re_info->id_location);
    $location_eng       = returnDataLang($location,2,@$re_info->id_location);

    $wage_vn            = returnDataLang($wage,1,@$re_info->id_wage);
    $wage_eng           = returnDataLang($wage,2,@$re_info->id_wage);

    $certificate_vn     = returnDataLang($certificate,1,@$re_info->id_certificate);
    $certificate_eng    = returnDataLang($certificate,2,@$re_info->id_certificate);

    $exp_vn             = returnDataLang($exp,1,@$re_info->id_exp);
    $exp_eng            = returnDataLang($exp,2,@$re_info->id_exp);
    function returnDataLang($ar,$LangId,$select_id = NULL){
        if($ar){
            $html ='';
            $select = '';
            foreach ($ar as $key => $item):
                if($item->LangId == $LangId){
                    if(isset($select_id) && $select_id != NULL){
                        if($select_id == $item->id){
                            $select = 'selected';
                        }
                    }
                    $html .= '<option value="'.$item->id.'" '.$select.'>'.$item->name.'</option>';
                    $select ='';
                }
            endforeach;
            return $html;
        }
    }
?>
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
                    <a href="<?=base_url("/admin/recruiter/add")?>" class="btn btn-link btn-float has-text"><i class="icon-add text-primary"></i><span><?=$this->lang->line('add_new'); ?></span></a>
                    <a href="<?=base_url("/admin/recruiter")?>" class="btn btn-link btn-float has-text"><i class="icon-list2 text-primary"></i> <span><?=$this->lang->line('list'); ?></span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url("/admin")?>"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li><a href="<?=base_url("/admin/recruiter")?>"><?=$this->lang->line('recruit'); ?></a></li>
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
                    <div class="col-md-8">
                        <fieldset class="content-group">
                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('lang'); ?>:</label>
                                <div class="col-lg-10">
                                    <select name="LangId" class="form-control" id="Langid" onchange="return change_form();">
                                        <option value="1" <?php if(@$recruiter->LangId == 1) echo "selected";?>>VN</option>
                                        <option value="2" <?php if(@$recruiter->LangId == 2) echo "selected";?>>ENG</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2"><?=$this->lang->line('title'); ?>:</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="pro_name" value="<?=set_value('pro_name')?set_value('pro_name'):@$recruiter->pro_name;?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Vị trí </label>
                                <div class="col-lg-10">
                                    <select name="position" class="form-control position" id="position">
                                        <option value="0">Vị trí tuyển dụng</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Ngành nghề</label>
                                <div class="col-lg-10">
                                    <select name="career" class="form-control career" id="career">
                                        <option value="0">Ngành nghề tuyển dụng</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Tỉnh - TP </label>
                                <div class="col-lg-10">
                                    <select name="location" class="form-control location" id="location">
                                        <option value="0">Tỉnh - Thành Phố làm việc</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Mức lương </label>
                                <div class="col-lg-10">
                                    <select name="wage" class="form-control wage" id="wage">
                                        <option value="0">Mức lương</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Bằng cấp </label>
                                <div class="col-lg-10">
                                    <select name="certificate" class="form-control certificate" id="certificate">
                                        <option value="0">Yêu bằng cấp</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Kinh nghiệm </label>
                                <div class="col-lg-10">
                                    <select name="exp" class="form-control exp" id="exp">
                                        <option value="0">Kinh nghiệm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Hạn nộp hồ sơ </label>
                                <div class="col-lg-10">
                                    <input type="date" class="form-control" name="deadline" value="<?=set_value('deadline')?set_value('deadline'):@$recruiter->deadline;?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Số lượng tuyển dụng </label>
                                <div class="col-lg-10">
                                    <input type="number" class="form-control" min="1" name="number" value="<?=set_value('number')?set_value('number'):@$recruiter->number;?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Tên người liên hệ </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="user_name" value="<?=set_value('user_name')?set_value('user_name'):@$recruiter->user_name;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Email người liên hệ </label>
                                <div class="col-lg-10">
                                    <input type="email" class="form-control" name="email" value="<?=set_value('email')?set_value('email'):@$recruiter->email;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Sđt người liên hệ </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="phone" value="<?=set_value('phone')?set_value('phone'):@$recruiter->phone;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Địa chỉ liên hệ</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="address" value="<?=set_value('address')?set_value('address'):@$recruiter->address;?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Tên công ty </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="company_name" value="<?=set_value('company_name')?set_value('company_name'):@$recruiter->company_name;?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Địa chỉ công ty </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="company_address" value="<?=set_value('company_address')?set_value('company_address'):@$recruiter->company_address;?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Website<i class="text-danger">(Nếu có)</i> </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="website" value="<?=set_value('website')?set_value('website'):@$recruiter->website;?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Tùy chỉnh </label>
                                <div class="col-lg-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="new" value="1" <?php if(@$recruiter->new == 1){ echo 'checked';}?> <?php echo set_checkbox('new', '1'); ?>> New
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="vip" value="1" <?php if(@$recruiter->vip == 1){ echo 'checked';}?> <?php echo set_checkbox('vip', '1'); ?>> Vip
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="hot" value="1" <?php if(@$recruiter->hot == 1){ echo 'checked';}?> <?php echo set_checkbox('hot', '1'); ?>> Hot
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="home" value="1" <?php if(@$recruiter->home == 1){ echo 'checked';}?> <?php echo set_checkbox('home', '1'); ?>> Home
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="status" value="1" <?php if(@$recruiter->pro_status == 1){ echo 'checked';}?> <?php echo set_checkbox('status', '1'); ?>> Kích hoạt
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Mô tả C.việc :</label>
                                <div class="col-lg-10">
                                    <?=ckeditor("pro_info",set_value('pro_info')?set_value('pro_info'):@$recruiter->pro_info);?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-lg-2">Yêu Cầu :</label>
                                <div class="col-lg-10">
                                    <?=ckeditor("pro_full",set_value('pro_full')?set_value('pro_full'):@$recruiter->pro_full);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Quyên lợi :</label>
                                <div class="col-lg-10">
                                    <?=ckeditor("benefit",set_value('benefit')?set_value('benefit'):@$recruiter->benefit);?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-2">Giơi thiệu :</label>
                                <div class="col-lg-10">
                                    <?=ckeditor("intro",set_value('intro')?set_value('intro'):@$recruiter->intro);?>
                                </div>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="submit" value="ok" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
                        </div>
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
    $( window ).on( "load", function() {
        var lang_id    = $('#Langid').val();
        if(lang_id == 2) {
            $('.position').html('<?php echo $position_eng?>');
            $('.career').html('<?php echo $career_eng?>');
            $('.location').html('<?php echo $location_eng?>');
            $('.wage').html('<?php echo $wage_eng?>');
            $('.certificate').html('<?php echo $certificate_eng?>');
            $('.exp').html('<?php echo $exp_eng?>');
        }else{
            $('.position').html('<?php echo $position_vn?>');
            $('.career').html('<?php echo $career_vn?>');
            $('.location').html('<?php echo $location_vn?>');
            $('.wage').html('<?php echo $wage_vn?>');
            $('.certificate').html('<?php echo $certificate_vn?>');
            $('.exp').html('<?php echo $exp_vn?>');
        }
    });

    function change_form(){
        var lang    = $('#Langid').val();
        if(lang == 1){
            $('.position').html('<?php echo $position_vn?>');
            $('.career').html('<?php echo $career_vn?>');
            $('.location').html('<?php echo $location_vn?>');
            $('.wage').html('<?php echo $wage_vn?>');
            $('.certificate').html('<?php echo $certificate_vn?>');
            $('.exp').html('<?php echo $exp_vn?>');
        }else{
            $('.position').html('<?php echo $position_eng ?>');
            $('.career').html('<?php echo $career_eng ?>');
            $('.location').html('<?php echo $location_eng ?>');
            $('.wage').html('<?php echo $wage_eng ?>');
            $('.certificate').html('<?php echo $certificate_eng ?>');
            $('.exp').html('<?php echo $exp_eng ?>');
        }
    }
</script>