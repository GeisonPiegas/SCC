<?php
	include 'header.php';
?>


<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-color: rgb(0, 102, 255)">
		<h2 class="l-text2 t-center">
			<?= $nomeLoja ?>
		</h2>
		<!--
		<p class="m-text13 t-center">
			Nova Coleção para Homems 2019
		</p>
		-->
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4  class="m-text14 p-b-7">
							Categorias
						</h4>

						<ul class="p-b-54">
						<?php foreach($categorias as $categoria){ ?>
							<li class="p-t-4">
								<?php if(isset($codmarca) == ''){ ?>
									<a href="<?= base_url() ?>listTodosCategoria/<?= $idLoja ?>/<?= $categoria->codnivel ?>" class="s-text13 active1">
										<?= $categoria->descricao ?>
									</a>
								<?php }else{ ?>
									<a href="<?= base_url() ?>listMarcaNivel/<?= $idLoja ?>/<?= $codmarca ?>/<?= $categoria->codnivel ?>" class="s-text13 active1">
										<?= $categoria->descricao ?>
									</a>
								<?php } ?>
							</li>
						<?php } ?>
						</ul>
						<!--
						<h4  class="m-text14 p-b-7">
							Sexo
						</h4>
						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									Homem
								</a>
							</li>
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									Mulher
								</a>
							</li>
							<li class="p-t-4">
								<a href="#" class="s-text13 active1">
									Unisex
								</a>
							</li>
						</ul>

						
						<h4 class="m-text14 p-b-32">
							Filtros
						</h4>

						<div class="filter-price p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-17">
								Preço
							</div>

							<div class="slider-wrapper">
                                <input class="price_range" type="range" min="0" max="1200">
                            </div>

							<div class="flex-sb-m flex-w p-t-16">
								<div class="w-size11">
									
									<input type="button" value="FILTER" class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4"/>
								</div>

								<div class="s-text3 p-t-10 p-b-10">
									De R$0 até R$<span>100,00</span>
								</div>
							</div>
						</div>
                       
						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-12">
								Color
							</div>

							<ul class="flex-w">
								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
									<label class="color-filter color-filter1" for="color-filter1"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
									<label class="color-filter color-filter2" for="color-filter2"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
									<label class="color-filter color-filter3" for="color-filter3"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
									<label class="color-filter color-filter4" for="color-filter4"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
									<label class="color-filter color-filter5" for="color-filter5"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
									<label class="color-filter color-filter6" for="color-filter6"></label>
								</li>

								<li class="m-r-10">
									<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
									<label class="color-filter color-filter7" for="color-filter7"></label>
								</li>
							</ul>
						</div>
						-->
						<h4  class="m-text14 p-b-7">
							Pesquisar
						</h4>
						<div class="search-product pos-relative bo4 of-hidden">
							<form action="<?= base_url() ?>listTodaPesquisa/<?= $idLoja ?>" method="post">
								<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search" placeholder="Procurar produto...">
								<button type="submit" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
									<i class="fs-12 fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
                        </div>
                        
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
                            <!-- 
                                <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                                    <select class="selection-2" name="sorting">
                                        <option>Default Sorting</option>
                                        <option>Popularity</option>
                                        <option>Price: low to high</option>
                                        <option>Price: high to low</option>
                                    </select>
                                </div>
                            
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Valores</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>
							 -->
						</div>

						
					</div>


					<!-- PRODUTOS -->
					<div class="row">

                        <?php foreach($products as $product){ ?>

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img src="http://10.1.1.15:8080/ControleImagens/<?= $product->imagem ?>" alt="PRODUTO">

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
                                        ARS: $<?= number_format(($product->precovenda / 0.10), 2, ',', '.'); ?>
									</span>
								</div>
							</div>
                        </div>

                        <?php } ?>
					</div>

					<!-- Pagination -->
					<?php echo $paginacao ?>

				</div>
			</div>
		</div>
    </section>
    
<?php 
    include 'footer.php';
?>