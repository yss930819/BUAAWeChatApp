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
            <div class="swiper-slide">
				<table data-role="table" id="syllabus-table-1" class="table-stroke syllabus-table">
                    <thead>
                        <tr>
                          <th>时间</th>
                          <th>8:00~9:45</th>
                          <th>10:00~11:45</th>
                          <th>14:00~15:45</th>
                          <th>16:00~17:45</th>
                          <th>18:00~19:45</th>
                          <th>20:00~21:45</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>课程</th>
                          <td>数学分析(第1~17周 主M101)</td>
                          <td>无</td>
                          <td>无</td>
                          <td>英语</td>
                          <td>无</td>
                          <td>滚去睡觉</td>
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
