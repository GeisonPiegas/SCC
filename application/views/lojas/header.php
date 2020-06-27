<?php
	foreach ($loja as $dados) {
		$nomeLoja = $dados->nome;
		$logoLoja = $dados->logo;
		$imageCalcados = $dados->imageCalcados;
		$imageConfeccao = $dados->imageConfeccao;
		$imageAcessorios = $dados->imageAcessorios;
		$endereco = $dados->endereco;
		$facebook = $dados->facebook;
		$instagram = $dados->instagram;
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?php echo $nomeLoja ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<?= link_tag(base_url().'assets/images/'.$logoLoja, "icon")?>
<!--===============================================================================================-->
	<?= link_tag('assets/vendor/bootstrap/css/bootstrap.min.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/fonts/themify/themify-icons.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/fonts/elegant-font/html-css/style.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/vendor/animate/animate.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/vendor/css-hamburgers/hamburgers.min.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/vendor/animsition/css/animsition.min.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/vendor/select2/select2.min.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/vendor/daterangepicker/daterangepicker.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/vendor/slick/slick.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/vendor/lightbox2/css/lightbox.min.css')?>
<!--===============================================================================================-->
	<?= link_tag('assets/css/util.css')?>
	<?= link_tag('assets/css/main.css')?>
	
<!--===============================================================================================-->

</head>

<body class="animsition">

	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="#" class="logo">
			<img src="<?php echo base_url()?>assets/images/<?php echo $logoLoja;?>" alt="Logo">
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li class="sale-noti dropdown show">
						<a class="btn dropdown-toggle" href="#" role="button" id="dropInicio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nomeLoja ?></a>
						<ul class="dropdown-menu" aria-labelledby="dropInicio">
							<a class="dropdown-item" href="<?php echo base_url() ?>matrizHome">Santa Clara Matriz</a>
							<a class="dropdown-item" href="<?php echo base_url() ?>filialHome">Santa Clara Filial</a>
							<a class="dropdown-item" href="<?php echo base_url() ?>onlyUpHome">Only You | Up</a>
						</ul>
					</li>

					<li>
						<a href="<?php echo base_url() ?>listProdutos/<?php echo $idLoja;?>">Produtos</a>
					</li>

					<li>
						<a href="<?php echo base_url() ?>listMarcas/<?php echo $idLoja;?>">Marcas</a>
					</li>

					<li>
						<a href="<?php echo base_url() ?>sobreNos/<?php echo $idLoja;?>">Sobre</a>
					</li>

					<li>
						<a href="<?php echo base_url() ?>contatos/<?php echo $idLoja;?>">Contatos</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
  
	<div class="flex-c-m size22 bg0 s-text21 pos-relative">
		Site em construção, caso ocorra erros entre em contato com os desenvolvedores. Obrigado!!!

		<button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
			<i class="fa fa-remove fs-13" aria-hidden="true"></i>
		</button>
	</div>

	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<!-- Logo2 -->
				<a href="#" class="logo2">
					<img src="<?php echo base_url()?>assets/images/<?php echo $logoLoja;?>" alt="Logo">
				</a>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
						
							<li class="sale-noti dropdown show">
								<a class="btn dropdown-toggle" href="#" role="button" id="dropInicio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nomeLoja ?></a>
								<ul class="dropdown-menu" aria-labelledby="dropInicio">
									<a class="dropdown-item" href="<?php echo base_url() ?>matrizHome">Santa Clara Matriz</a>
									<a class="dropdown-item" href="<?php echo base_url() ?>filialHome">Santa Clara Filial</a>
									<a class="dropdown-item" href="<?php echo base_url() ?>onlyUpHome">Only You | Up</a>
								</ul>
							</li>

							<li>
								<a href="<?php echo base_url() ?>listProdutos/<?php echo $idLoja;?>">Produtos</a>
							</li>

							<li>
								<a href="<?php echo base_url() ?>listMarcas/<?php echo $idLoja;?>">Marcas</a>
							</li>

							<li>
								<a href="<?php echo base_url() ?>sobreNos/<?php echo $idLoja;?>">Sobre</a>
							</li>

							<li>
								<a href="<?php echo base_url() ?>contatos/<?php echo $idLoja;?>">Contatos</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="#" class="logo-mobile">
				<img src="<?php echo base_url()?>assets/images/<?php echo $logoLoja;?>" alt="Logo">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<!-- 
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Site em construção, caso ocorra erros entre em contato com os desenvolvedores. Obrigado!!!
						</span>
					</li>
					-->
					<li class="sale-noti dropdown show">
						<a class="btn dropdown-toggle" href="#" role="button" id="dropInicio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nomeLoja ?></a>
						<ul class="dropdown-menu" aria-labelledby="dropInicio">
							<a class="dropdown-item" href="<?php echo base_url() ?>matrizHome">Santa Clara Matriz</a>
							<a class="dropdown-item" href="<?php echo base_url() ?>filialHome">Santa Clara Filial</a>
							<a class="dropdown-item" href="<?php echo base_url() ?>onlyUpHome">Only You | Up</a>
						</ul>
					</li>

					<li> 
						<a href="<?php echo base_url() ?>listProdutos/<?php echo $idLoja;?>">Produtos</a>
					</li>

					<li>
						<a href="<?php echo base_url() ?>listMarcas/<?php echo $idLoja;?>">Marcas</a>
					</li>

					<li>
						<a href="<?php echo base_url() ?>sobreNos/<?php echo $idLoja;?>">Sobre</a>
					</li>

					<li>
						<a href="<?php echo base_url() ?>contatos/<?php echo $idLoja;?>">Contatos</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
