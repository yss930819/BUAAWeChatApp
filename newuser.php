<?php require './header.php';?>
<div data-role="page" data-title="登录" id="page_new_user">
  <div class="ui-content" role="main">
    <?php include './column.php';?>
    <h3 class="ui-bar ui-bar-a ui-corner-all">xxx（名称）</h3>
    <div class="ui-body ui-body-a ui-corner-all">           
      <div data-role="fieldcontain">
        <label for="username">用户名</label>
        <input type="text" name="username" id="username" value=""  />
        <label for="password">密码</label>
        <input type="password" name="password" id="password" value=""  />
        <input type="submit" value="登录" />
      </div>
      <h3>注意事项</h3>
      <ol data-role="listview">
        <li></li>
        <li></li>
        <li></li>
      </ol>
            </div>
    <h3 class="ui-bar ui-bar-a ui-corner-all">Developed by XXX</h3>
  </div>
</div>
<!-- /page -->

<?php require './footer.php';?>