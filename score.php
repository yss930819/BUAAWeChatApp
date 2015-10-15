<?php require './header.php';?>
  <div data-role="page" data-title="成绩" id="page_score_main">
    <div class="ui-content" role="main">
      <?php include './column.php';?>
          
        <div data-role="fieldcontain" class="ui-body ui-body-a ui-corner-all">
              
          <p>
            称号
          </p>
        </div>
        <div data-role="fieldcontain" class="ui-body ui-body-a ui-corner-all">
              
          <p>
            能力分析区域
          </p>
        </div>
        <a href="score_gpa.php" class="ui-btn ui-corner-all navigate_to_subpage">
          GPA计算
        </a>
        <a href="score_latest.php" class="ui-btn ui-corner-all navigate_to_subpage">
          最新成绩
        </a>
        <a href="score_all.php" class="ui-btn ui-corner-all navigate_to_subpage">
          所有成绩
        </a>
        <a href="score_memos.php" class="ui-btn ui-corner-all navigate_to_subpage">
          成绩记录本
        </a>
    </div>
  </div>
  <!-- /page -->
  <?php require './footer.php';?>