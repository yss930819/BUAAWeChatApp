<?php require './header.php';?>
<html>
 <head></head>
 <body>
  <div data-role="page" data-title="成绩" id="page_score_main"> 
   <div class="ui-content" role="main"> 
    <?php include './column.php';?>
    <div data-role="fieldcontain" class="ui-body ui-body-a center">
     <h3>经测试，您的称号为：</h3> 
     <h1>学霸</h1> 
    </div>
    <div data-role="fieldcontain" class="ui-body ui-body-a center">
     <p>少年</p> 
     <p>看你骨骼清秀奇特</p> 
     <p>课表类目繁多、种类齐全</p> 
     <p>日后必能成大器</p> 
     <p>目前 请继续滚去复习</p> 
     <p><span style="color:#ababab">身体指数：</span>★★★★★★</p> 
     <p><span style="color:#ababab">体能综合：</span>★★★★</p> 
     <p><span style="color:#ababab">搞笑指数：</span>★★★★★</p> 
    </div> 
    <div data-role="fieldcontain" class="ui-body ui-body-a">
     <div class="ui-grid-a">
      <div class="ui-block-a">
       <a href="score_gpa.php" class="ui-btn ui-btn-b">GPA计算</a>
      </div>
      <div class="ui-block-b">
       <a href="score_latest.php" class="ui-btn ui-btn-b">最新成绩</a>
      </div>
      <div class="ui-block-a">
       <a href="score_all.php" class="ui-btn ui-btn-b">所有成绩</a>
      </div>
      <div class="ui-block-b">
       <a href="score_memos.php" class="ui-btn ui-btn-b">成绩记录本</a>
      </div>
     </div> 
    </div> 
    <div class="caption center">
     @Developed by Pride1952
    </div> 
   </div> 
  </div> 
  <?php require './footer.php';?> 
 </body>
</html>