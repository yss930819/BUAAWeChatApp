<?php require './header.php';?>
<html>
 <head></head>
 <body>
  <div data-role="page" data-title="成绩记录本" id="page_score_memos"> 
   <div class="ui-content" role="main"> 
    <div class="center"> 
     <p>这里我们可以帮你记录你想要记住的一些成绩</p>
     <p>这样你点一下就可以随时看见了~</p>
     <p>需要的话还可以随时进行添加</p> 
    </div> 
    <div data-role="fieldcontain" class="ui-body ui-body-c center"> 
     <h3>添加新条目</h3> 
     <br /> 
     <input data-role="none" type="text" name="name" id="name" placeholder="科目名称" value="" /> 
     <hr class="hr_gray" /> 
     <input data-role="none" type="text" name="score" id="score" placeholder="科目成绩" value="" /> 
     <hr class="hr_gray" /> 
    </div> 
    <input type="submit" value="提交" /> 
    <div data-role="fieldcontain" class="ui-body ui-body-a"> 
     <ul> 
      <li>科目1:</li> 
      <li>科目2:</li> 
      <li>科目3:</li> 
     </ul> 
    </div> 
    <div class="caption center">
     @Developed by Pride1952
    </div> 
   </div> 
  </div> 
  <?php require './footer.php';?>
 </body>
</html>