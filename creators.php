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
	<link rel="stylesheet" type="text/css" href="resources/css/creators.css">
	<title>Equipe - Restaurante Bucho de Bode</title>
</head>
<body>

<?php 
	# Faz a requisição do arquivo footer.php 
	request_Header();
?>
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="imgBx">
        <img src="resources/images/profiles_creators/alex.jpg">
      </div>
      <div class="details">
        <h3>Alex Almeida<br><span>Web Designer</span></h3>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="imgBx">
        <img src="resources/images/profiles_creators/rafael.jpeg">
      </div>
      <div class="details">
        <h3>Rafael Magalhães<br><span>Conteúdo, mídia, divulgação e banco de dados</span></h3>
      </div>
    </div>
    
    <div class="swiper-slide">
      <div class="imgBx">
        <img src="resources/images/profiles_creators/henrique.jpg">
      </div>
      <div class="details">
        <h3>Henrique Silva<br><span>Banco de dados</span></h3>
      </div>
    </div>
    
    <div class="swiper-slide">
      <div class="imgBx">
        <img src="resources/images/profiles_creators/gabriel.jpg">
      </div>
      <div class="details">
        <h3>Gabriel Brito<br><span>PHP e Segurança</span></h3>
      </div>
    </div>
    
    <div class="swiper-slide">
      <div class="imgBx">
        <img src="resources/images/profiles_creators/bia.jpg">
      </div>
      <div class="details">
        <h3>Beatriz Santana<br><span>Conteúdo, mídia e divulgação</span></h3>
      </div>
    </div>
    
    <div class="swiper-slide">
      <div class="imgBx">
        <img src="resources/images/profiles_creators/italo.jpg">
      </div>
      <div class="details">
        <h3>Italo Marques<br><span>Web Designer</span></h3>
      </div>
    </div>
    
    <div class="swiper-slide">
      <div class="imgBx">
        <img src="resources/images/profiles_creators/esequiel.jpg">
      </div>
      <div class="details">
        <h3>Esequiel Santos<br><span>Web Designer</span></h3>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="imgBx">
        <img src="resources/images/profiles_creators/murilo.jpg">
      </div>
      <div class="details">
        <h3>Murilo Damasceno<br><span>Banco de dados</span></h3>
      </div>
    </div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>

 <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },

      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
<?php
	# Faz a requisição do arquivo footer.php 
	request_Footer();
?>