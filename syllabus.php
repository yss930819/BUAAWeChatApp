<?php require './header.php';?>
<div data-role="page" data-title="课表">
  <div class="ui-content" role="main">
    <?php include './column.php';?>
    <div class="ui-grid-a">
      <div class="ui-block-a"><div class="ui-field-contain ui-corner-all ui-body ui-body-a"><p>星期x（优先今天）</p></div></div>
      <div class="ui-block-b"><a href="#" data-role="button" data-icon="plus">同步到系统日历</a></div>
    </div>
    
    <script>prepareSwiper();</script>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            <div class="swiper-slide">Slide 10</div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    
  </div>
</div>
<script src="/js/swiper.jquery.min.js"></script>
<script>window.onload = function() {var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30
    });}</script>
<?php require './footer.php';?>
