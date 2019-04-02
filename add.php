<?php
  include_once './fn.php';
  $username = $_POST['username'];
  $nickname = $_POST['nickname'];
  $age = $_POST['age'];
  $tel = $_POST['tel'];
  $sex = $_POST['sex'];
  $class = $_POST['class'];
  $file = $_FILES['photo'];
  if($file['error'] === 0){
    $ext = strrchr($file['name'],'.');
    $newName = time().rand(1000,9999).$ext;
    $temp = $file['tmp_name'];
    $newFileUrl = './uploads/'.$newName;
    move_uploaded_file($temp,$newFileUrl);
    $photo =  $newFileUrl;
  }
  $sql = "insert into stu(name,nickname,age,tel,sex,photo,classid)
  values('$username','$nickname',$age,'$tel','$sex','$photo',$class)";
  if ( my_exec( $sql ) ) {
    echo "添加成功";
    header('location:list.php');
  }
  else {
    echo "添加失败";
  }
?>