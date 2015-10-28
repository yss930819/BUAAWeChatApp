<?php require './header.php';?>
<div data-role="page" data-title="成绩" id="page_score_main">
  <div class="ui-content" role="main">
    <?php include './column.php';?>
      
    <div data-role="fieldcontain" class="ui-body ui-body-a ui-corner-all">     
      <p>称号</p>
    </div>
    <div data-role="fieldcontain" class="ui-body ui-body-a ui-corner-all">     
      <p>能力分析区域</p>
    </div>
    <a href="score_gpa.php" class="ui-btn ui-corner-all">GPA计算</a> <a href="score_latest.php" class="ui-btn ui-corner-all">最新成绩</a> <a href="score_all.php" class="ui-btn ui-corner-all">所有成绩</a> <a href="score_memos.php" class="ui-btn ui-corner-all">成绩记录本</a> </div>
</div>


<?php require './footer.php';?>
