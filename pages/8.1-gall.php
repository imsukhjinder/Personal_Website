  <?php include '3-arrays.php'; ?>
<link href="assets/css/swiper.min.css" rel="stylesheet">
<script src="assets/js/swiper.min.js"></script>
    <div class="swiper-container gallery-top " style="background-color:#f0f0f0;padding:21px;padding-top: 50px;"  id="Acheive">
        <center><h1 style="text-align: center;color:rgba(9, 47, 55, 0.99);font-family:'Montserrat', sans-serif;">- Achievements -</h1></center>
        <div class="swiper-wrapper">
          <?php                foreach ($gall as $pic) {           ?>
            <div class="swiper-slide" style='height:69vw;background-image:url(<?php echo $pic["img"]; ?>);'></div>
            <?php                  }             ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="swiper-container gallery-thumbs" style="background-color:#f0f0f0;" >
        <div class="swiper-wrapper">
          <?php              foreach ($gall as $pic) {           ?>
            <div class="swiper-slide fixthumb" style='height:15vh;background-image:url(<?php echo $pic["img"]; ?>)'></div>
            <?php                  }             ?>
          </div>
    </div>
</div>
    <!-- Initialize Swiper -->
    <script>
    var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
    </script>
