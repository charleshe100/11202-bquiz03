<?php include_once "db.php";
// 方法二：非巢狀迴圈
$movie=$_GET['id'];
$ondate=strtotime($Movie->find($movie)['ondate']);
$end=strtotime("+2 days",$ondate);
$today=strtotime(date("Y-m-d")); //不要用now, now會是現在的時間
$diff=($end-$today)/(60*60*24);
for($i=0;$i<=$diff;$i++){
    $date=date("Y-m-d",strtotime("+$i days"));   
    echo "<option value='$date'>$date</option>";
}

// 方法一：巢狀迴圈
// $movie=$_GET['id'];
// $ondate=$Movie->find($movie)['ondate'];
// $today=date("Y-m-d");
// for($i=0;$i<3;$i++){
//     $date=strtotime("+$i days",strtotime($ondate));
//     if($date>=strtotime($today)){
//         $str=date("Y-m-d",$date);
//         echo "<option value='{$str}'>$str</option>";
//     }
// }