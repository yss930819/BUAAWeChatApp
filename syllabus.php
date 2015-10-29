<?php require './header.php';?>
<div data-role="page" data-title="课表">
  <div class="ui-content" role="main">
    <?php include './column.php';?>
     <table data-role="table" id="syllabus-table-1"  class="table-stroke syllabus-table">
      <thead>
        <tr>
          <th>时间</th>
          <th>课程</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>8:00~9:45</td>
          <td>数学分析(1~17周 主M101)</td>
        </tr>
        <tr>
          <td>10:00~11:45</td>
          <td> </td>
        </tr>
        <tr>
          <td>14:00~15:45</td>
          <td>线性代数(1~17周 主M101)</td>
        </tr>
		<tr>
          <td>16:00~17:45</td>
          <td>英语(1~17周 主M101)</td>
        </tr>
		<tr>
          <td>18:00~19:45</td>
          <td> </td>
        </tr> 
		<tr>
          <td>20:00~21:45</td>
          <td>随机过程(1~17周 主M101)</td>
        </tr> 
      </tbody>
    </table>
  </div>  
</div>


<?php require './footer.php';?>
