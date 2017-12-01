<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Modul</span> - Modul list</h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="<?php echo base_url('admin/modul/add'); ?>" class="btn btn-link btn-float has-text"><i class="icon-add"></i><span>Add</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-database-export"></i> <span>Export</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url('admin');?>"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">modul</li>
            </ul>

            <ul class="breadcrumb-elements">
                <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear position-left"></i>
                        Settings
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- HTML sourced data -->
        <div class="panel panel-flat">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Vietnames</a></li>
				<li><a data-toggle="tab" href="#menu1">English</a></li>
			</ul>
            <div class="panel-heading">
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
			<div class="tab-content">
           		<div id="home" class="tab-pane fade in active">
					<table class="table datatable-html">
						<thead>
						<tr>
							<th>#</th>
							<th>Tên</th>
							<th>Icon</th>
							<th>Start date</th>
							<th>Salary</th>
							<th class="text-center">Actions</th>
						</tr>
						</thead>
						<tbody>
						<?php
							if($cate_building_vn)
							{
								$i = 1;
								foreach($cate_building_vn as $item)
								{
									
						?>
						<tr>
							<td><?=$i; ?></td>
							<td><?=$item->cate_name; ?></td>
							<td><?=htmlspecialchars_decode($item->cate_icon)?></td>
							<td><a href="#">2011/04/25</a></td>
							<td><span class="label label-info">$320,800</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<?php
									if(count((array)$item->child) >0)
									{
										$j = 1;
										foreach($item->child as $ite)
										{
						?>
						<tr>
							<td><?=$i.'.'.$j; ?></td>
							<td><?=$ite->cate_name; ?></td>
							<td></td>
							<td><a href="#">2011/04/25</a></td>
							<td><span class="label label-info">$320,800</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<?php
											$j++;
										}
									}
									$i++;
								}
							}
						?>
						</tbody>
					</table>
        		</div>
        		<div id="menu1" class="tab-pane fade">
				  <table class="table datatable-html">
						<thead>
						<tr>
							<th>Tên</th>
							<th>Position</th>
							<th>Age</th>
							<th>Start date</th>
							<th>Salary</th>
							<th class="text-center">Actions</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>61</td>
							<td><a href="#">2011/04/25</a></td>
							<td><span class="label label-info">$320,800</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Garrett Winters</td>
							<td>Accountant</td>
							<td>63</td>
							<td><a href="#">2011/07/25</a></td>
							<td><span class="label label-danger">$170,750</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Ashton Cox</td>
							<td>Junior Technical Author</td>
							<td>66</td>
							<td><a href="#">2009/01/12</a></td>
							<td><span class="label label-default">$86,000</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Cedric Kelly</td>
							<td>Senior Javascript Developer</td>
							<td>22</td>
							<td><a href="#">2012/03/29</a></td>
							<td><span class="label label-success">$433,060</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Airi Satou</td>
							<td>Accountant</td>
							<td>33</td>
							<td><a href="#">2008/11/28</a></td>
							<td><span class="label label-danger">$162,700</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Brielle Williamson</td>
							<td>Integration Specialist</td>
							<td>61</td>
							<td><a href="#">2012/12/02</a></td>
							<td><span class="label label-info">$372,000</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Herrod Chandler</td>
							<td>Sales Assistant</td>
							<td>59</td>
							<td><a href="#">2012/08/06</a></td>
							<td><span class="label label-danger">$137,500</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Rhona Davidson</td>
							<td>Integration Specialist</td>
							<td>55</td>
							<td><a href="#">2010/10/14</a></td>
							<td><span class="label label-default">$97,900</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Colleen Hurst</td>
							<td>Javascript Developer</td>
							<td>39</td>
							<td><a href="#">2009/09/15</a></td>
							<td><span class="label label-success">$405,500</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Sonya Frost</td>
							<td>Software Engineer</td>
							<td>23</td>
							<td><a href="#">2008/12/13</a></td>
							<td><span class="label label-danger">$103,600</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Jena Gaines</td>
							<td>Office Manager</td>
							<td>30</td>
							<td><a href="#">2008/12/19</a></td>
							<td><span class="label label-danger">$90,560</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Quinn Flynn</td>
							<td>Support Lead</td>
							<td>22</td>
							<td><a href="#">2013/03/03</a></td>
							<td><span class="label label-info">$342,000</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Charde Marshall</td>
							<td>Regional Director</td>
							<td>36</td>
							<td><a href="#">2008/10/16</a></td>
							<td><span class="label label-success">$470,600</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Haley Kennedy</td>
							<td>Senior Marketing Designer</td>
							<td>43</td>
							<td><a href="#">2012/12/18</a></td>
							<td><span class="label label-danger">$113,500</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td>Tatyana Fitzpatrick</td>
							<td>Regional Director</td>
							<td>19</td>
							<td><a href="#">2010/03/17</a></td>
							<td><span class="label label-info">$385,750</span></td>
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
											<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
											<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
				<div id="menu2" class="tab-pane fade">
				  <h3>Menu 2</h3>
				  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				</div>
				<div id="menu3" class="tab-pane fade">
				  <h3>Menu 3</h3>
				  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
        	</div>
        </div>
        <!-- /HTML sourced data -->


        

    </div>
    <!-- /content area -->

</div>
<!-- /main content -->
