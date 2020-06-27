<?php 
	include 'header.php';
?>

	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Nossas Marcas
				</h3>
			</div>

					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<div class="row">
							<?php foreach($marcas as $marca) { ?>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="http://10.1.1.15:8080/ControleImagens/<?= $marca->imagem ?>" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<a href="<?= base_url() ?>listProdutosMarca/<?= $idLoja."/".$marca->codmarca ?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Ver
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php 
								} 
							?>
						</div>
					</div>
				
			</div>
		</div>
	</section>

<?php
	include 'footer.php';
?>