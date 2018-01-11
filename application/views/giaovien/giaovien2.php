<div class="main-grids">
	<div class="recommended">
		<div class="recommended-grids">
			<div class="recommended-info">
				<h3>Giáo Viên Cấp 2</h3>
			</div>
			<?php
			foreach( $giaovien2 as $tam)
			{
			?>
			<div class="container-fluid">
				<div class="media">
					<a class="pull-left" href="#">
						<img class="media-object" src="<?=base_url($tam['Avatar']); ?>" alt="" width="100px">
					</a>
					<div class="media-body">
						<h4 class="media-heading">Ten Giao Vien:<b><?= ($tam['TenGV']);?></b></h4> 
						<h4 class="media-heading">mail giao vien:<?= ($tam['mail']);?></h4> 
						<h4 class="media-heading">SDT: <?= ($tam['SDT']);?></h4> 
					</div>
				</div>
	
			</div>


			<?php
			}
			?>
			<div class="clearfix"> </div>
		</div>
		
	</div>
</div>