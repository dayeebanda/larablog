<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="{{asset('FrontEnd/images/woo1.jpg')}}" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{url('/men')}}">Clothing</a></li>
											<li><a href="{{url('/men')}}">Wallets</a></li>
											<li><a href="{{url('/men')}}">Footwear</a></li>
											<li><a href="{{url('/men')}}">Watches</a></li>
											<li><a href="{{url('/men')}}">Accessories</a></li>
											<li><a href="{{url('/men')}}">Bags</a></li>
											<li><a href="{{url('/men')}}">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{url('/men')}}">Jewellery</a></li>
											<li><a href="{{url('/men')}}">Sunglasses</a></li>
											<li><a href="{{url('/men')}}">Perfumes</a></li>
											<li><a href="{{url('/men')}}">Beauty</a></li>
											<li><a href="{{url('/men')}}">Shirts</a></li>
											<li><a href="{{url('/men')}}">Sunglasses</a></li>
											<li><a href="{{url('/men')}}">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{url('/women')}}">Clothing</a></li>
											<li><a href="{{url('/women')}}">Wallets</a></li>
											<li><a href="{{url('/women')}}">Footwear</a></li>
											<li><a href="{{url('/women')}}">Watches</a></li>
											<li><a href="{{url('/women')}}">Accessories</a></li>
											<li><a href="{{url('/women')}}">Bags</a></li>
											<li><a href="{{url('/women')}}">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="{{url('/women')}}">Jewellery</a></li>
											<li><a href="{{url('/women')}}">Sunglasses</a></li>
											<li><a href="{{url('/women')}}">Perfumes</a></li>
											<li><a href="{{url('/women')}}">Beauty</a></li>
											<li><a href="{{url('/women')}}">Shirts</a></li>
											<li><a href="{{url('/women')}}">Sunglasses</a></li>
											<li><a href="{{url('/women')}}">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="{{asset('FrontEnd/images/woo.jpg')}}" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="{{url('/electronics')}}">Electronics</a></li>
					<li class=" menu__item"><a class="menu__link" href="codes.html">Short Codes</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{url('/contact')}}">contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="{{url('/checkout')}}">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>

							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
