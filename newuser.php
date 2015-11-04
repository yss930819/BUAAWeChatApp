<?php require './header.php';?>
<div data-role="page" data-title="登录" id="newuser-page">
  <div class="ui-content" role="main">
    <?php include './column.php';?>
    
    <div class="caption center">
      <img src="/img/placeholder.png" style="width:30%" class="center" /><p>@Developed by Pride1952</p>
      </div>
    <div class="ui-body ui-body-c">           
      <div data-role="fieldcontain">
        <input data-role="none" type="text" name="username" id="username" placeholder="用户名" value=""  />
        <hr />
        <input data-role="none" type="password" name="password" id="password" placeholder="密码" value=""  />
        
      </div>
      </div>
      <input type="submit" value="登录" />
      <h5>注意事项:</h5>
      <ol data-role="listview">
        <li></li>
        <li></li>
        <li></li>
      </ol>
            
  </div>
</div>
<?php require './footer.php';?>