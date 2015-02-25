<div class="topheader">
	<h1><a href="#" class="logo">logo</a></h1>
	<a class="banner-header" href="#">
		<img alt="Banner Header" src="images/banner.jpg"></img>
	</a>
</div><!--End topheader-->
<div class="topmenu">
	<div role="navigation" class="navbar navbar-inverse">
		<div class="navbar-header">
			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand">Menu</span>
		</div>

		<div class="navbar-collapse collapse" style="height: 1px;">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="#"><i class="glyphicon glyphicon-home"></i>Trang Chủ</a></li>
				<li><a href="#">Tin Tức</a></li>
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">Dịch Vụ<span class="caret"></span></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="#"> Thuê Xe</a></li>
						<li><a href="#">Cafe-Bar</a></li>
						<li><a href="#">Nhà Hàng</a></li>
						<li><a href="#">Thuê Xe</a></li>
						<li><a href="#">Khuyến mãi</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">Tour Du Lịch<span class="caret"></span></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="#">Tour Tổng Hợp</a></li>
						<li><a href="#">Tour Mộc Châu</a></li>
						<li><a href="#">Tour Mường La</a></li>
						<li><a href="#">Tour Phù Yên</a></li>
					</ul>
				</li>
				<li><a href="#">Ẩm Thực</a></li>
				<li><a href="#">Liên Hệ</a></li>
				<li><a href="#">Thông Tin</a></li>
				<li class="form-search input-group">
					<div class="input-group">
						<form action="{{asset("search")}}" method="get" name="form-search">
							<input type="text" class="form-control" placeholder="Search for..." size="45" name="text-search">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</span>
						</form>

				    </div><!-- /input-group -->
				</li>
			</ul>
		</div>
	</div>
</div>
