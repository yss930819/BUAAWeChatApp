<?php require './header.php';?>
<div data-role="page" data-title="课表" id="syllabus-page">
  <div class="ui-content" role="main">
    <?php include './column.php';?>
    <div class="ui-grid-a">
      <div class="ui-block-a">
        <div class="ui-field-contain ui-corner-all ui-body ui-body-a">
          <p>星期x（优先今天）</p>
        </div>
      </div>
      <div class="ui-block-b"><a href="#" data-role="button" data-icon="plus">同步到系统日历</a></div>
    </div>
    <script>prepareSwiperCSS();</script>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <table data-role="table" id="syllabus-table" data-mode="columntoggle" class="ui-body-d ui-shadow table-stripe ui-responsive ui-corner-all" data-column-btn-theme="b" data-column-btn-text="Columns to display..." data-column-popup-theme="a">
            <thead>
              <tr class="ui-bar-d">
                <th scope="col">时间</th>
                <th scope="col">科目 地点</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>3</td>
                <td>4</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
  <script src="/js/swiper.jquery.min.js"></script>
</div>
<?php require './footer.php';?>
