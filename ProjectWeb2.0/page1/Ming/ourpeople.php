<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="ming/swiper.min.css">
    <link rel="stylesheet" href="ming/stylem2.css">
    <title>Document</title>
</head>
<body class="a2">
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="../assets/images/eka.jpg" alt="">
            </div>
            <div class="detail">
                <h3>Eka Rahayu</h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="../assets/images/yumel.jpg" alt="">
            </div>
            <div class="detail">
                <h3>Yuliana Melita Pranoto, S.Kom., M.Kom.</h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="../assets/images/maryati.jpg" alt="">
            </div>
            <div class="detail">
                <h3>maryati</h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="../assets/images/baskoro.jpg" alt="">
            </div>
            <div class="detail">
                <h3>baskoro</h3>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="imgBx">
                <img src="../assets/images/hendrawan.jpg" alt="">
            </div>
            <div class="detail">
                <h3>hendrawan</h3>
            </div>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
    <script src="ming/swiper.min.js"></script>
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
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>
</html>