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
                    <a href="<?=base_url('admin/message'); ?>" class="btn btn-link btn-float has-text"><i class="icon-list2 text-primary"></i> <span><?=$this->lang->line('list'); ?></span></a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?=base_url("/admin")?>"><i class="icon-home2 position-left"></i> <?=$this->lang->line('home'); ?></a></li>
                <li><a href="<?=base_url("/admin/message")?>"><?=$this->lang->line('message'); ?></a></li>
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
                <h5 class="panel-title"><?=$title?></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
				<div class="row">
					<div class="col-md-12" style="border-bottom: 1px solid #B8B8B8">
						<div class="media" >
							<a class="pull-left" href="#">
								<img class="media-object" src="<?=base_url('/assets/admin/images/user.png'); ?>" width="64px" alt="">
							</a>

							<div class="media-body">
								<h4 class="media-heading"><?=$contact['con_name']; ?></h4> 
								<em><?=$contact['con_email']; ?></em><br>
								<em><?=$contact['con_date']; ?></em>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<h3><?=$contact['con_title']; ?></h3>
						<p><?=$contact['con_full']; ?></p>
						<a href="<?=base_url('admin/message'); ?>" class="btn btn-primary"><i class="fa fa-backward" aria-hidden="true"></i> Quay lại</a>
					</div>
				</div>
            </div>
        </div>
        <!-- /form horizontal -->
    </div>
    <!-- /content area -->

</div>
<!-- /main content -->