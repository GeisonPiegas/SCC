<?php
	include 'header.php';
?>

	<?php foreach($product as $prod){ ?>

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="http://10.1.1.15:8080/ControleImagens/<?= $prod->imagem ?>">
							<div class="wrap-pic-w">
								<img src="http://10.1.1.15:8080/ControleImagens/<?= $prod->imagem ?>" alt="IMG-PRODUCT">
							</div>
						</div>

					<!--

						<div class="item-slick3" data-thumb="http://10.1.1.15:8080/ControleImagens/<?= $prod->imagem ?>">
							<div class="wrap-pic-w">
								<img src="http://10.1.1.15:8080/ControleImagens/<?= $prod->imagem ?>" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="http://10.1.1.15:8080/ControleImagens/<?= $prod->imagem ?>">
							<div class="wrap-pic-w">
								<img src="http://10.1.1.15:8080/ControleImagens/<?= $prod->imagem ?>" alt="IMG-PRODUCT">
							</div>
						</div>

					-->

					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?= $prod->descricao ?>
				</h4>

				<span class="m-text17">
					R$<?= number_format($prod->precovenda, 2, ',', '.'); ?>
				</span>
				<span class="m-text17">
					ARS: $<?= number_format(($prod->precovenda / 0.08), 2, ',', '.'); ?>
				</span>

				<!--  
				<p class="s-text8 p-t-10">
					Produto super vendido nos Estats.
				</p>
				-->

				
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Tamanhos:
						</div>

						<?php foreach($grade as $tamanho){ 
							$tmg = isset($tamanho->descricao) ? $tamanho->descricao : $tamanho->codtamanho;
							?>
							
							<div class=" bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<?php if($tamanho->qtd == 1){ ?>
									<span class="header-icons-noti" style="background-color: red" title="Ultimo"><?= $tamanho->qtd ?></span>
								<?php }else{ ?>
									<span class="header-icons-noti"><?= $tamanho->qtd ?></span>
								<?php } ?>
								<div class="flex-c-m size7 bg8 eff2" ><?= $tmg ?></div>
							</div>

						<?php } ?>
					
					</div>
				</div>

				<!-- 
					<div class="p-b-45">
						<span class="s-text8 m-r-35">SKU: MUG-01</span>
						<span class="s-text8">Categories: Mug, Design</span>
					</div>
 				-->
				
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Descrição
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?php if($prod->desctecnica == null){
									echo 'Sem descrição técnica no momento...';
								  }else{
									echo $prod->desctecnica;
								  }

							?>
						</p>
					</div>
				</div>
				<!--
				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>
				-->
			</div>
		</div>
	</div>

	<?php } ?>

	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Produtos Relacionados
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

				<?php foreach ($relacionado as $products){	?>

					<div class="item-slick2 p-l-15 p-r-15">
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative"> <!-- block2-labelnew -->
								<img src="http://10.1.1.15:8080/ControleImagens/<?= $products->imagem ?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
								

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a href="<?= base_url() ?>detailsProduct/<?= $idLoja."/".$products->codempitem."/".$products->coditem ?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Ver
										</a>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?= base_url() ?>detailsProduct/<?= $idLoja."/".$products->codempitem."/".$products->coditem ?>" class="block2-name dis-block s-text3 p-b-5">
									<?= $products->descricao ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									R$<?= number_format($prod->precovenda, 2, ',', '.'); ?>
								</span>
								<span class="block2-price m-text6 p-r-5">
									ARS: $<?= number_format(($prod->precovenda / 0.08), 2, ',', '.'); ?>
								</span>
							</div>
						</div>
					</div>
					
				<?php } ?>

				</div>
			</div>

		</div>
	</section>
	
<?php 
	include 'footer.php';
?>