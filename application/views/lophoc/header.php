<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="<?=base_url('home'); ?>"><h1><img src="<?=base_url(); ?>images/logo.png" alt="" width="200px" /></h1></a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		<div class="top-search">
			<form class="navbar-form navbar-right form-search" action="#" method="get">
				<input type="text" name="tukhoa" id="tukhoa" class="form-control" placeholder="Search...">
				<input type="submit" value=" ">
				<div class="result" id="result">
					<a href="#">kết quả tìm kiếm</a>
				</div>
			</form>
		</div>
		 <div class="header-top-right">
			 <?php 
			 if(isset($_SESSION['login']))
			 {
			?> 
			<div class="dropdown">
				<button class="btn dropdown-toggle btn btn-info" type="button" id="dropdownMenu1" data-toggle="dropdown">
			<?=$_SESSION['login']; ?>
			<span class="caret"></span>
			</button>

				<ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Khóa Học</a>
					</li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url('menu'); ?>">Kích Hoạt hóa học</a>
					</li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url('capnhat'); ?>">Chỉnh sửa thông tin</a>
					</li>
					<li role="presentation" class="divider"></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="<?=base_url('home/dangxuat'); ?>">Đăng xuất</a>
					</li>
				</ul>
			</div>
			<?php	 
			 }
			 else
			 {
			 ?>
			<div class="signin">
				<a href="#small-dialog3" class="play-icon popup-with-zoom-anim">Đăng ký</a>
				<!-- pop-up-box -->
								<script type="text/javascript" src="<?=base_url(); ?>js/modernizr.custom.min.js"></script>    
								<link href="<?=base_url(); ?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
								<script src="<?=base_url(); ?>js/jquery.magnific-popup.js" type="text/javascript"></script>
								<!--//pop-up-box -->
								<div id="small-dialog2" class="mfp-hide">
									<h3>Tạo tài khoản</h3> 
									<div class="social-sits">
										<div class="facebook-button">
											<a href="#">Connect with Facebook</a>
										</div>
										<div class="chrome-button">
											<a href="#">Connect with Google</a>
										</div>
										<div class="button-bottom">
											<p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Đăng Nhập</a></p>
										</div>
									</div>
									<div class="signup">
										<form>
											<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
										</form>
										<div class="continue-button">
											<a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">CONTINUE</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>	
								<div id="small-dialog3" class="mfp-hide">
									<h3>Đăng ký tài khoản</h3> 
									<div class="social-sits">
										<div class="facebook-button">
											<a href="#">Connect with Facebook</a>
										</div>
										<div class="chrome-button">
											<a href="#">Connect with Google</a>
										</div>
										<div class="button-bottom">
											<p>Bạn đã có tài khoản chưa? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Đăng Nhập</a></p>
										</div>
									</div>
									<div class="signup">
										<form action="<?=base_url('home/dangky'); ?>" enctype="multipart/form-data" method="post">
											<input type="text" name="email" class="email" placeholder="Nhập email" required pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
											<input type="password" name="pass" placeholder="Mật khẩu" required pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
											<input type="password" name="repass" placeholder="Nhập lại mật khẩu" required pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
											<!--<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />-->
											<input type="submit" name="dangky"  value="Đăng ký"/>
										</form>
									</div>
									<div class="clearfix"> </div>
								</div>	
								<div id="small-dialog7" class="mfp-hide">
									<h3>Create Account</h3> 
									<div class="social-sits">
										<div class="facebook-button">
											<a href="#">Connect with Facebook</a>
										</div>
										<div class="chrome-button">
											<a href="#">Connect with Google</a>
										</div>
										<div class="button-bottom">
											<p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
										</div>
									</div>
									<div class="signup">
										<form action="upload.html">
											<input type="text" class="email" placeholder="Email" required pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
											<input type="password" placeholder="Password" required pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
											<input type="submit"  value="Sign In"/>
										</form>
									</div>
									<div class="clearfix"> </div>
								</div>		
								<!--<div id="small-dialog4" class="mfp-hide">
									<h3>Feedback</h3> 
									<div class="feedback-grids">
										<div class="feedback-grid">
											<p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
										</div>
										<div class="button-bottom">
											<p><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign in</a> to get started.</p>
										</div>
									</div>
								</div>
								<div id="small-dialog5" class="mfp-hide">
									<h3>Help</h3> 
										<div class="help-grid">
											<p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
										</div>
										<div class="help-grids">
											<div class="help-button-bottom">
												<p><a href="#small-dialog4" class="play-icon popup-with-zoom-anim">Feedback</a></p>
											</div>
											<div class="help-button-bottom">
												<p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Lorem ipsum dolor sit amet</a></p>
											</div>
											<div class="help-button-bottom">
												<p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Nunc vitae rutrum enim</a></p>
											</div>
											<div class="help-button-bottom">
												<p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris at volutpat leo</a></p>
											</div>
											<div class="help-button-bottom">
												<p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris vehicula rutrum velit</a></p>
											</div>
											<div class="help-button-bottom">
												<p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Aliquam eget ante non orci fac</a></p>
											</div>
										</div>
								</div>-->
								<div id="small-dialog6" class="mfp-hide">
									<div class="video-information-text">
										<h4>Video information & settings</h4>
										<p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
										<ol>
											<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
											<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
											<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
											<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
											<li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
										</ol>
									</div>
								</div>
								<script>
										$(document).ready(function() {
										$('.popup-with-zoom-anim').magnificPopup({
											type: 'inline',
											fixedContentPos: false,
											fixedBgPos: true,
											overflowY: 'auto',
											closeBtnInside: true,
											preloader: false,
											midClick: true,
											removalDelay: 300,
											mainClass: 'my-mfp-zoom-in'
										});

										});
								</script>	
			</div>
			<div class="signin">
				<a href="#small-dialog" class="play-icon popup-with-zoom-anim">Đăng nhập</a>
				<div id="small-dialog" class="mfp-hide">
					<h3>Login</h3>
					<div class="social-sits">
						<div class="facebook-button">
							<a href="#">Connect with Facebook</a>
						</div>
						<div class="chrome-button">
							<a href="#">Connect with Google</a>
						</div>
						<div class="button-bottom">
							<p>Tài khoản mới? <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Đăng ký</a></p>
						</div>
					</div>
					<div class="signup">
						<form action="<?=base_url('home/dangnhap'); ?>" enctype="multipart/form-data" method="post">
							<input type="text" name="email" class="email" placeholder="Enter email / mobile" required pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Bạn chưa nhập Email"/>
							<input type="password" name="pass" placeholder="Password" required pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
							<input type="submit" name="dangnhap"  value="LOGIN"/>
						</form>
						<div class="forgot">
							<a href="#">Quên mật khẩu ?</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
			 <?php
			 }
			 ?>
		</div>
	</div>
	<div class="clearfix"> </div>
  </div>
</nav>
<script type="text/javascript">
	$(document).ready(function(){
		$("#tukhoa").keyup(function(){
			var rong = $("#tukhoa").width();
			$("#result").css({'display': 'block', 'width' : rong});
			var tukhoa = $('#tukhoa').val();
			$.ajax({
				method:"POST",
				url:"<?=base_url('timkiem'); ?>",
				data:{tukhoa:tukhoa},
				success: function(result)
				{
					console.log(result);
					$('#result').html(result);
				}
			});
		});
		$(window).click(function(){
			$("#result").css('display', 'none');
		});
		
	});
</script>