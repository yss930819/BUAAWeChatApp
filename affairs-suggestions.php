<?php require './header.php';?>
<div data-role="page" data-title="意见">
  <div class="ui-content" role="main">
    <?php include './column.php';?>
    <h2>意见反馈</h2>
    <hr />
    <div class="ui-body ui-body-a ui-corner-all">
      <div class="ui-field-contain">
        <div class="ui-grid-a">
          <div class="ui-block-a" style="width:40%">
            <select name="selectmenu" id="selectmenu">
              <option value="dormitory">宿舍</option>
              <option value="internet">上网</option>
              <option value="card">学生卡／证</option>
              <option value="service">校园服务</option>
              <option value="classroom">教室</option>
              <option value="finance">财务</option>
              <option value="other">其它</option>
            </select>
          </div>
          <div class="ui-block-b" style="width:60%">
            <input type="text" name="title" id="title" value="" placeholder="标题" />
          </div>
        </div>
        <div class="ui-field-contain">
          <div data-role="fieldcontain">
            <textarea cols="40" rows="8" name="textarea" id="textarea" placeholder="具体内容"></textarea>
          </div>
        </div>
        <div class="ui-field-contain">
          <input type="submit" value="提交" />
        </div>
      </div>
      <div class="ui-field-contain">
        <p>热门问题汇总：（待议，可控出来，上面部分放大） </p>
        <p> 不规则方块表明常见问题 </p>
        <p> 可以不带链接，只是统计数据做图表</p>
      </div>
    </div>
    <div class="caption center">@Developed by Pride1952</div>
  </div>
</div>
<?php require './footer.php';?>
