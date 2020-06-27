<?php 
	include 'header.php';
?>

<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				
				<?php foreach($banners as $banner){ ?>
					<div class="item-slick1 item1-slick1" style="background-image: url(<?php echo base_url();?>assets/images/banner/<?= $banner->imagem ?>);">
						<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
							<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
								<?= $banner->titulo ?>
							</h2>

							<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
								<?= $banner->descricao ?>
							</span>

						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?php echo base_url(); foreach ($loja as $value) { echo 'assets/images/'.$value->imageCalcados;} ?>" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="<?= base_url() ?>listTodosCategoria/<?= $idLoja ?>/1" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Calçados
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?php echo base_url(); foreach ($loja as $value) { echo 'assets/images/'.$value->imageConfeccao;}?>" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="<?= base_url() ?>listTodosCategoria/<?= $idLoja ?>/2" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Confecção
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?php echo base_url(); foreach ($loja as $value) { echo 'assets/images/'.$value->imageAcessorios;} ?>" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="<?= base_url() ?>listTodosCategoria/<?= $idLoja ?>/3" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Acessórios
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Nossos Produtos
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Novidades</a>
					</li>
					<!--
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sale" role="tab">Promoção</a>
					</li>
					-->
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-35">


					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<div class="row">
							<?php foreach($products as $product) { ?>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="http://10.1.1.15:8080/ControleImagens/<?= $product->imagem ?>" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<a class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" href="<?= base_url() ?>detailsProduct/<?= $idLoja."/".$product->codempitem."/".$product->coditem ?>">
													Ver
												</a>
											</div>
										</div>
									</div>
									<div class="block2-txt p-t-20">
										<a href="<?= base_url() ?>detailsProduct/<?= $idLoja."/".$product->codempitem."/".$product->coditem ?>" class="block2-name dis-block s-text3 p-b-5">
											<?= $product->descricao ?>
										</a>

										<span class="block2-price m-text6 p-r-5">
											R$<?= number_format($product->precovenda, 2, ',', '.'); ?>
										</span>
										<span class="block2-price m-text6 p-r-5">
											PESO: $<?= number_format(($product->precovenda / 0.10), 2, ',', '.'); ?>
										</span>
									</div>
								</div>
							</div>
							<?php } ?>

						</div>
					</div>

					<!--  -->
					<div class="tab-pane fade" id="sale" role="tabpanel">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img src="<?php echo base_url();?>assets/images/item-01.jpg" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											Herschel supply co 25l
										</a>

										<span class="block2-price m-text6 p-r-5">
											$75.00
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>


	<!-- Banner video -->
	<section class="parallax0 parallax100" style="background-image: url(<?php echo base_url();?>assets/images/color.jpg);">
		<div class="overlay0 p-t-190 p-b-200">
			<div class="flex-col-c-m p-l-15 p-r-15">
				<span class="m-text9 p-t-45 fs-20-sm">
					Grupo Santa Clara Calçados
				</span>
				<!--
				<h3 class="l-text1 fs-35-sm">
					Lookbook
				</h3>
				
				<span class="btn-play s-text4 hov5 cs-pointer p-t-25" data-toggle="modal" data-target="#modal-video-01">
					<i class="fa fa-play" aria-hidden="true"></i>
					Play Video
				</span>
				 -->
			</div>
		</div>
	</section>

	<!-- Blog 
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Nosso Blog
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
			
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo base_url();?>assets/images/blog-01.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									Black Friday Guide: Best Sales & Discount Codes
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

							<p class="s-text8 p-t-16">
								Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
				
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo base_url();?>assets/images/blog-02.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									The White Sneakers Nearly Every Fashion Girls Own
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

							<p class="s-text8 p-t-16">
								Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="<?php echo base_url();?>assets/images/blog-03.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									New York SS 2018 Street Style: Annina Mislin
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

							<p class="s-text8 p-t-16">
								Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
-->
	<!-- Instagram 
	<section class="instagram p-t-20">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				@ Siga-nos no Instagram
			</h3>
		</div>

		<div class="flex-w">
		
			<div class="block4 wrap-pic-w">
				<img src="<?php echo base_url();?>assets/images/gallery-03.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

		
			<div class="block4 wrap-pic-w">
				<img src="<?php echo base_url();?>assets/images/gallery-07.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			
			<div class="block4 wrap-pic-w">
				<img src="<?php echo base_url();?>assets/images/gallery-09.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

			
			<div class="block4 wrap-pic-w">
				<img src="<?php echo base_url();?>assets/images/gallery-13.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>

	
			<div class="block4 wrap-pic-w">
				<img src="<?php echo base_url();?>assets/images/gallery-15.jpg" alt="IMG-INSTAGRAM">

				<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

					<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
						<p class="s-text10 m-b-15 h-size1 of-hidden">
							Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
						</p>

						<span class="s-text9">
							Photo by @nancyward
						</span>
					</div>
				</a>
			</div>
		</div>
	</section>


	 -->
	<section class="shipping bgwhite p-t-62 p-b-46">
	<div class="flex-w p-l-15 p-r-15">
		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
			<h4 class="m-text12 t-center">
				Condicional
			</h4>
			<!--
			<a href="#" class="s-text11 t-center">
				Fazemos condicional de nossos produtos.
			</a>
			 -->
			<span class="s-text11 t-center">
			Fazemos condicional de nossos produtos.
			</span>
		</div>

		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
			<h4 class="m-text12 t-center">
				Cartões e Convênios
			</h4>

			<span class="s-text11 t-center">
				Aceitamos todos os tipos de cartão.
			</span>
			<span class="s-text11 t-center">
				E temos convênios com varias empreses da localidade de São Borja
			</span>
		</div>

		<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
			<h4 class="m-text12 t-center">
				Horários de Atendimento
			</h4>

			<span class="s-text11 t-center">
				Segunda a Sexta das 8:30 as 12:00 e 14:00 as 18:30.
			</span>
			<span class="s-text11 t-center">
				Sábado das 9:00 as 12:00 e 14:00 as 17:00.
			</span>
			
		</div>
	</div>
</section>

<?php
	include 'footer.php';
?>