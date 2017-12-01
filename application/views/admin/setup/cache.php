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
            <div class="panel-body">
                <a class="btn btn-danger" onclick="return cachefile();" href="javascript:void(0);">Cập nhật cache file</a> <b class="animate"></b>
                <a class="btn btn-danger" onclick="return delcachefile();" href="javascript:void(0);">Xóa cache file</a> <b class="animatedel"></b>

            </div>
        </div>
        <!-- /form horizontal -->
    </div>
    <!-- /content area -->

</div>
<!-- /main content -->
<style>
</style>
<script>
    function cachefile(){
        $('.animate').html('<i class="icon-spinner2 spinner text-info"></i>');
        $.ajax({
            type: "POST",
            dataType :'text',
            url : "cache_ajax",
            data : { type: 1},
            success : function(re) {
                if(re){
                    $('.animate').html('<i class="fa fa-check text-success" aria-hidden="true"></i>');
                    setTimeout(location.reload(),5000);
                }
            }
        });
    }
    function delcachefile(){
        $('.animatedel').html('<i class="icon-spinner2 spinner text-info"></i>');
        $.ajax({
            type: "POST",
            dataType :'text',
            url : "del_cachefile",
            data : { type: 1},
            success : function(re) {
                if(re){
                    $('.animatedel').html('<i class="fa fa-check text-success" aria-hidden="true"></i>');
                    setTimeout(location.reload(),5000);
                }
            }
        });
    }
</script>