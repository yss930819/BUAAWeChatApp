<?php require './header.php';?>
<html>
 <head></head>
 <body>
  <div data-role="page" data-title="课表" id="syllabus-page-dayview"> 
   <div class="ui-content" role="main"> 
    <div>
     <a href="#" data-role="button" class="ui-btn-inline ui-btn-mini" style="font-size:0.5em;float:right;">同步到系统日历</a>
    </div> 
    <div class="center">
     <h3 id="syllabus-dayview-title">星期x</h3>
    </div> 
    <script>prepareSwiperCSS();</script> 
    <div class="swiper-container"> 
     <div class="swiper-wrapper"> 
      <div class="swiper-slide" id="slide-sunday">
       <p>Placeholder</p>
      </div> 
      <div class="swiper-slide" id="slide-monday">
       <p>Placeholder</p>
      </div> 
      <div class="swiper-slide" id="slide-tuesday">
       <p>Placeholder</p>
      </div> 
      <div class="swiper-slide" id="slide-wednesday">
       <p>Placeholder</p>
      </div> 
      <div class="swiper-slide" id="slide-thursday">
       <p>Placeholder</p>
      </div> 
      <div class="swiper-slide" id="slide-friday">
       <p>Placeholder</p>
      </div> 
      <div class="swiper-slide" id="slide-saturday">
       <p>Placeholder</p>
      </div> 
     </div> 
     <div class="swiper-pagination"></div> 
    </div> 
   </div> 
   <div data-role="controlgroup" data-type="horizontal" data-mini="true" style="text-align:right">
    <input type="radio" name="radio-choice-h-6" id="radio-choice-h-6a" value="on" checked="checked" />
    <label for="radio-choice-h-6a">日</label>
    <input type="radio" name="radio-choice-h-6" id="radio-choice-h-6b" value="off" />
    <label for="radio-choice-h-6b">周</label>
   </div> 
   <script src="/js/swiper.jquery.min.js"></script> 
   <div class="caption center">
    @Developed by Pride1952
   </div> 
   <script>insertTables();</script> 
  </div> 
  <?php require './footer.php';?> 
 </body>
</html>