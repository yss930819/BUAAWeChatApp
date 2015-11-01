<?php require './header.php';?>
<div data-role="page" data-title="成绩记录本" id="page_score_memos">
  <div class="ui-content" role="main">
    <?php include './column.php';?>
    <div data-role="fieldcontain" class="ui-body ui-body-a ui-corner-all">
      <p>这里我们可以帮你记录你想要记住的一些成绩，这样你点一下就可以随时看见了~需要的话还可以随时进行添加</p>
    </div>
    <div data-role="fieldcontain" class="ui-body ui-body-a ui-corner-all">
      <h3>添加新条目</h3>
      <label for="name">科目名称</label>
      <input type="text" name="name" id="name" value=""  />
      <label for="score">科目成绩</label>
      <input type="text" name="score" id="score" value=""  />
      <input type="submit" value="提交" />
    </div>
    <div data-role="fieldcontain" class="ui-body ui-body-a ui-corner-all">
      <ul>
        <li>科目1:</li>
        <li>科目2:</li>
        <li>科目3:</li>
      </ul>
    </div>
    <div class="caption center">@Developed by Pride1952</div>
  </div>
</div>
<?php require './footer.php';?>