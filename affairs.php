<?php require './header.php';?>
<div data-role="page" data-title="相关事">
  <div class="ui-content" role="main">
    <?php include './column.php';?>
    <h2>校历日程</h2>
    <div class="ui-grid-a">
      <div class="ui-block-a" style="text-align:center">
          <a href="#" data-role="button">每日签到</a>
          <span>你已经连续签到xx天</span>
      </div>
      <div class="ui-block-b"><div class="ui-body ui-body-a ui-corner-all"><img src="http://images.apple.com/v/ios/m/images/overview/hero_large_2x.jpg" style="width: -webkit-fill-available"/></div></div>
      <hr />
      <div data-role="controlgroup">
    <a href="affairs-news.php" class="ui-btn ui-corner-all">相关－资讯</a>
<a href="affairs-calendar.php" class="ui-btn ui-corner-all">相关－校历</a>
<a href="affairs-suggestions.php" class="ui-btn ui-corner-all">相关－意见</a>
</div>
    </div> 
  </div>
  </div>
  <!-- /content --> 
  
</div>
<!-- /page -->

<?php require './footer.php';?>
