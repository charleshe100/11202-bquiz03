<?php $movie=$Movie->find($_GET['id']);?>
<div style="background:#FFF; width:100%; color:#333; text-align:left">
        <video src="img/<?=$movie['trailer'];?>" width="300px" height="250px" controls="" style="float:right;"></video>
        <font style="font-size:24px"> 
          <img src="img/<?=$movie['poster'];?>" width="200px" height="250px" style="margin:10px; float:left">
        <p style="margin:3px">影片名稱 ：img/<?=$movie['name'];?>
          <input type="button" value="線上訂票" onclick="location.fref='?do=order&id=img/<?=$movie['id'];?>'" style="margin-left:50px; padding:2px 4px" class="b2_btu">
        </p>
        <p style="margin:3px">影片分級 ： <img src="icon/03C0img/<?=$movie['trailer'];?>.png" style="display:inline-block;">限制級 </p>
        <p style="margin:3px">影片片長 ： img/<?=$movie['length'];?>分鐘</p>
        <p style="margin:3px">上映日期 ： img/<?=$movie['ondate'];?></p>
        <p style="margin:3px">發行商 ： img/<?=$movie['publish'];?></p>
        <p style="margin:3px">導演 ： img/<?=$movie['director'];?></p>
        <br>
        <br>
        <p style="margin:10px 3px 3px 3px; word-break:break-all"> 劇情簡介：<br>
        </p>
        </font>
        <table width="100%" border="0">
          <tbody>
            <tr>
              <td align="center">
                <input type="button" value="院線片清單" onclick="location.href='index.php'">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>