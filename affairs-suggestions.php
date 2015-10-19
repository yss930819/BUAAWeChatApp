<?php require './header.php';?>
<div data-role="page" data-title="意见">
  <div class="ui-content" role="main">
    <?php include './column.php';?>
    <h2>意见反馈</h2>
    <hr />
    <div class="ui-body ui-body-a ui-corner-all">
      <div class="ui-field-contain">
        <div class="ui-grid-a">
          <div class="ui-block-a" style="width:30%">
            <select name="selectmenu" id="selectmenu">
              <option value="option1">Option 1</option>
              <option value="option2">Option 2</option>
              <option value="option3">Option 3</option>
            </select>
          </div>
          <div class="ui-block-b" style="width:70%">
            <input type="text" name="title" id="title" value="" />
          </div>
        </div>
        <div class="ui-field-contain">
          <p>具体内容</p>
        </div>
        <div class="ui-field-contain">
          <input type="submit" value="提交" />
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /content -->

</div>
<!-- /page -->

<?php require './footer.php';?>
