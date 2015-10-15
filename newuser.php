<?php require './header.php';?>
    <div data-role="page" data-title="登录">
      <div class="ui-content" role="main">
        <?php include './column.php';?>
        <h3 class="ui-bar ui-bar-a ui-corner-all">xxx（名称）</h3>
        <div class="ui-body ui-body-a ui-corner-all">           
          <div data-role="fieldcontain">
            <label for="textinput">用户名</label>
            <input type="text" name="textinput" id="textinput" value=""  />
            <label for="passwordinput">密码</label>
            <input type="password" name="passwordinput" id="passwordinput" value=""  />
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
      <!-- /content --> 
      
    </div>
    <!-- /page -->

    <?php require './footer.php';?>