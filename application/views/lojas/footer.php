	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					ENTRAR EM CONTATO
				</h4>

				<div>
					<p class="s-text7 w-size27">
						<?= $endereco ?>
					</p>

					<div class="flex-m p-t-30">
						<a href="" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="https://www.instagram.com/<= $instagram >/" target="_blank" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<!-- <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a> 
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a> -->
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categorias
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="<?= base_url() ?>listTodosCategoria/<?= $idLoja ?>/1" class="s-text7">
							Calçado
						</a>
					</li>

					<li class="p-b-9">
						<a href="<?= base_url() ?>listTodosCategoria/<?= $idLoja ?>/2" class="s-text7">
							Confecção
						</a>
					</li>

					<li class="p-b-9">
						<a href="<?= base_url() ?>listTodosCategoria/<?= $idLoja ?>/3" class="s-text7">
							Acessório
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="<?php echo base_url() ?>sobreNos/<?php echo $idLoja;?>" class="s-text7">
							Sobre nós
						</a>
					</li>

					<li class="p-b-9">
						<a href="<?php echo base_url() ?>contatos/<?php echo $idLoja;?>" class="s-text7">
							Contate-nos
						</a>
					</li>

					<li class="p-b-9">
						<a href="<?php echo base_url() ?>contatos/<?php echo $idLoja;?>" class="s-text7">
							Devoluções
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Ajuda
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Acompanhar Pedido
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Devolução
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Remessa
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>
	
			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Boletim de Notícias
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Se escrever
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="<?php echo base_url();?>assets/images/icons/express.png" alt="American Express">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url();?>assets/images/icons/queroquero.png" alt="Verdecard">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url();?>assets/images/icons/hipercard.png" alt="Hipercard">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url();?>assets/images/icons/mastercard.png" alt="Mastercard">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url();?>assets/images/icons/banricompras.png" alt="Banricompras">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url();?>assets/images/icons/maestro.png" alt="Maestro">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url();?>assets/images/icons/elo.png" alt="Elo">
			</a>

			<a href="#">
				<img class="h-size2" src="<?php echo base_url();?>assets/images/icons/visa.png" alt="Visa">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 Todos os direitos reservados. | Este modelo é feito com <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">OverSpace</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="<?= base_url()?>assets/images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->


<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>
</html>
