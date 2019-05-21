<?php
	# Faz a requisição do arquivo functions.php
	# que contém as funções para o site
	require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="icon" type="image/png" href="resources/images/logo.png">
	<link rel="stylesheet" type="text/css" href="resources/css/reset.css">
	<link rel="stylesheet" type="text/css" href="resources/css/index.css">
	<link rel="stylesheet" type="text/css" href="resources/css/header.css">
	<link rel="stylesheet" type="text/css" href="resources/css/footer.css">
	<link rel="stylesheet" type="text/css" href="resources/css/sweetalert2.min.css">
	<script type="text/javascript" src="resources/js/sweetalert2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="resources/css/swiper.css">
	<script type="text/javascript" src="resources/js/swiper.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="resources/css/cardapio.css">
	<title>Cardápio - Restaurante Bucho de Bode</title>
</head>
<body>

<?php 
	# Faz a requisição do arquivo footer.php 
	request_Header();
?>
	<!-- Swiper -->
  <div class="swiper-container _modify">
  	<h1 class="products">Pratos</h1>
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="resources/images/cardapio/pratos/sarapatel.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/pratos/tapioca.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/pratos/cremedegalinha.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/pratos/baiaodedois.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/pratos/pacocacarneseca.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/pratos/pamonha.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/pratos/moqueca.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/pratos/canjica.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/pratos/carnedesol.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/pratos/acaraje.jpg"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

    <div class="swiper-container">
  	<h1 class="products">Bebidas</h1>
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="resources/images/cardapio/bebidas/aguadecoco.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/bebidas/cachaca.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/bebidas/cachacacravinho.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/bebidas/cajuina.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/bebidas/caldodecana.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/bebidas/drink-capeta.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/bebidas/guaranajesus.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/bebidas/licor.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/bebidas/sucodecaju.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/bebidas/tiquira.jpg"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

    <div class="swiper-container">
  	<h1 class="products">Sobemesas</h1>
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="resources/images/cardapio/sobremesas/bananafritacomcanela.jpeg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/sobremesas/bolodeaipim.jpeg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/sobremesas/cocada.jpeg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/sobremesas/espetinho.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/sobremesas/mugunza.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/sobremesas/pedemoleque.jpeg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/sobremesas/peta.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/sobremesas/rapadura.jpeg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/sobremesas/roscaqueijo.jpg"></div>
      <div class="swiper-slide"><img src="resources/images/cardapio/sobremesas/sequilho.jpeg"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 50,
      // init: false,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },

      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
    });
  </script>
<?php
	# Faz a requisição do arquivo footer.php 
	request_Footer();
?>