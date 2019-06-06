<!DOCTYPE HTML>
<html>

<head>
	<title>Cars Sale</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
</head>

<body>
	<div class="header">
		<div class="wrap">
			<div class="header-bot">
				<div class="logo">
					<a href="index.html">
						<img src="images/logo.png" alt="">
					</a>
				</div>
				<div class="cart">
					<ul class="ph-no">
						<li class="item  first_item">
							<div class="item_html">
								<span class="text1">Order delivery:</span>
								<span class="text2">+800-0005-5289</span>
							</div>
						</li>
					</ul>
					<div id="top-search">
						<form method="POST" action="./?buscar=true">
							<input type="text" placeholder="Digite o modelo" name="campoBusca" class="input-search" required>
							<input type="submit" value="Procurar" id="submit">
						</form>
					</div>
					<div class="menu-main">
						<ul class="dc_css3_menu">
							<li class="active">
								<a href="./">Home</a>
							</li>
							<li>
								<a href="./">About</a>
							</li>
							<li>
								<a href="./">Services</a>
							</li>
							<li>
								<a href="./administrativo.php?menu=listar">Painel de Controle</a>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<?php require_once 'main-banner.php'; ?>

	<div class="main-content">

		<div class="wrap">
			<div class="main-box">
				<div class="box_wrapper">
					 <h1>Featured Products</h1>
				</div>

				<?php 
					require_once 'featured-products.php';

				?>

<!-- 				<div class="section group">

					<div class="col_1_of_4 span_1_of_4">
						<img src="images/pic.jpg" alt="" />
						<div class="grid_desc">
							<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
							<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
							<div class="price1" style="height: 19px;">
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span>
							</div>
						</div>
						<div class="Details">
							<a href="single.html" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
								<span></span>
							</a>
						</div>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<img src="images/pic1.jpg" alt="" />
						<div class="grid_desc">
							<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
							<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
							<div class="price1" style="height: 19px;">
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span>
							</div>
						</div>
						<div class="Details">
							<a href="single.html" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
								<span></span>
							</a>
						</div>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<img src="images/pic2.jpg" alt="" />
						<div class="grid_desc">
							<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
							<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
							<div class="price1" style="height: 19px;">
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span>
							</div>
						</div>
						<div class="Details">
							<a href="single.html" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
								<span></span>
							</a>
						</div>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<img src="images/pic3.jpg" alt="" />
						<div class="grid_desc">
							<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
							<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
							<div class="price1" style="height: 19px;">
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span>
							</div>
						</div>
						<div class="Details">
							<a href="single.html" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
								<span></span>
							</a>
						</div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="section group">
					<div class="col_1_of_4 span_1_of_4">
						<img src="images/pic5.jpg" alt="" />
						<div class="grid_desc">
							<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
							<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
							<div class="price1" style="height: 19px;">
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span>
							</div>
						</div>
						<div class="Details">
							<a href="single.html" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
								<span></span>
							</a>
						</div>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<img src="images/pic4.jpg" alt="" />
						<div class="grid_desc">
							<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
							<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
							<div class="price1" style="height: 19px;">
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span>
							</div>
						</div>
						<div class="Details">
							<a href="single.html" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
								<span></span>
							</a>
						</div>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<img src="images/pic6.jpg" alt="" />
						<div class="grid_desc">
							<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
							<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
							<div class="price1" style="height: 19px;">
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span>
							</div>
						</div>
						<div class="Details">
							<a href="single.html" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
								<span></span>
							</a>
						</div>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<img src="images/pic7.jpg" alt="" />
						<div class="grid_desc">
							<p class="title">Lorem ipsum dolor sitconsectetueradipis</p>
							<p class="title1">Lorem ipsum dolor sitconsectetueradipis</p>
							<div class="price1" style="height: 19px;">
								<span class="reducedfrom">$66.00</span>
								<span class="actual">$12.00</span>
							</div>
						</div>
						<div class="Details">
							<a href="single.html" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details
								<span></span>
							</a>
						</div>
					</div>
					<div class="clear"></div>
				</div> -->
			</div>
		</div>
	</div>
	<div class="footer" style="clear: both;">
		<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Latest Tweets</h3>
						<p>
							<label>@Lorem ipsum</label>dolor sit amet, consectetur adipisicing elit.</p>
							<span>10 minutes ago</span>
							<p>
								<label>@consectetur</label>dolor sit amet, consectetur adipisicing elit.</p>
								<span>15 minutes ago</span>
							</div>
						</div>
						<div class="col_1_of_5 span_1_of_5">
							<div class="footer-grid center-grid">
								<h3>Recent posts</h3>
								<ul>
									<li>
										<a href="#">eiusmod temporinc</a>
									</li>
									<li>
										<a href="#">adipisicing elit, sed</a>
									</li>
									<li>
										<a href="#">mod tempor incididunt</a>
									</li>
									<li>
										<a href="#">dipisicing elit, sed do</a>
									</li>
									<li>
										<a href="#">eiusmod temporinc</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col_1_of_5 span_1_of_5">
							<div class="footer-grid twitts">
								<h3>Our Company</h3>
								<div class="f_menu">
									<ul>
										<li>About your Company Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui</li>
										<li>Terms &amp; conditions Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col_1_of_5 span_1_of_5">
							<div class="call_info">
								<p class="txt_3">Call us toll free:</p>
								<p class="txt_4">1 800 234 23456</p>
							</div>
						</div>
						<div class="col_1_of_5 span_1_of_5">
							<div class="footer-grid twitts">
								<h3>Get in touch</h3>
								<ul class="follow_icon">
									<li>
										<a href="#" style="opacity: 1;">
											<img src="images/follow_icon.png" alt="">
										</a>
									</li>
									<li>
										<a href="#" style="opacity: 1;">
											<img src="images/follow_icon1.png" alt="">
										</a>
									</li>
									<li>
										<a href="#" style="opacity: 1;">
											<img src="images/follow_icon2.png" alt="">
										</a>
									</li>
									<li>
										<a href="#" style="opacity: 1;">
											<img src="images/follow_icon3.png" alt="">
										</a>
									</li>
									<li>
										<a href="#" style="opacity: 1;">
											<img src="images/follow_icon4.png" alt="">
										</a>
									</li>
									<li>
										<a href="#" style="opacity: 1;">
											<img src="images/follow_icon5.png" alt="">
										</a>
									</li>
								</ul>
								<p>+1 111-111-1111</p>
								<span>
									<a href="mailto:info@example.com">support(at)carssale.com</a>
								</span>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="copy-right">
				<div class="wrap">
					<p>Copyright &copy; 2013 Car Sale. All Rights Reserved | Design by
						<a href="http://w3layouts.com/"> W3layouts</a>
					</p>
				</div>
			</div>
		</body>
		</html>