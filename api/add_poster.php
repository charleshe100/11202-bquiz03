<?php include_once "db.php";
if(isset($_FILES['poster']['tmp_name'])){
    move_uploaded_file($_FILES['poster']['tmp_name'],"../img/{$_FILES['poster']['name']}");
    $_POST['img']=$_FILES['poster']['name'];
}

$_POST['sh']=1;
$_POST['rank']=$Poster->max('id')+1;
// 第一筆rank值就會是 id 0+1，就會是1
$_POST['ani']=rand(1,3);
// rand 1到3的亂數

$Poster->save($_POST);
to("../back.php?do=poster");


?>