<div class="main-grids">
	<div class="recommended">
		<div class="recommended-grids">
			<div class="recommended-info">
				<h4 style="color:brown" >Tham Gia Ngay</h4>
				
			</div>
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8">
				
					<form class="form-horizontal" role="form" action="<?=base_url('capnhat/chinhsua/'.$thongtin['MaHV']); ?>" enctype="multipart/form-data" method="post">
						<div class="form-group">
						<br>
							<label for="ten" class="col-sm-2 control-label" style="color:brown">Tên</label>
							<div class="col-sm-6">
								<input type="text" name="ten" class="form-control" id="ten" placeholder="Họ tên" value="<?=$thongtin['ho_ten']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="dchi" class="col-sm-2 control-label" style="color:brown">Địa chỉ</label>
							<div class="col-sm-6">
								<input type="text" name="dchi" class="form-control" id="dchi" placeholder="Địa Chỉ" value="<?=$thongtin['dia_chi'];?>">
							</div>
						</div>
						<div class="form-group">
							<label for="dchi" class="col-sm-2 control-label"style="color:brown">Ngày Sinh</label>
							<div class="col-sm-6">
								<input type="date" name="ngsinh" class="form-control" id="ngsinh" placeholder="Ngày Sinh" value="<?=$thongtin['ngay_sinh'];?>">
							</div>
						</div>
						<div class="form-group">
							<label for="gtinh" class="col-sm-2 control-label"style="color:brown">Giới Tính</label>
							<div class="col-sm-6">
								<select class="form-control">
									<option value="1" <?php if($thongtin['gioi_tinh'] == 1) echo 'selected'; ?> >Nam</option>
									<option value="2" <?php if($thongtin['gioi_tinh'] == 2) echo 'selected'; ?> >Nữ</option>
									<option value="3" <?php if($thongtin['gioi_tinh'] == 3) echo 'selected'; ?> >Khác</option>
								</select>
							</div>
						</div>
						</br>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="capnhat" class="btn btn-default">Đăng Ký</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		
	</div>
</div>