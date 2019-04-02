<?php
  header('content-type:text/html;charset=utf-8');
  include_once 'fn.php';

  $id = $_POST['id'];
  $username = $_POST['username'];
  $nickname = $_POST['nickname'];
  $age = $_POST['age'];
  $tel = $_POST['tel'];
  $sex = $_POST['sex'];
  $class = $_POST['class'];
  $photo = ""; 
  $flie = $_FILES['photo'];
  if($file['error']===0){
    $ftmp = $file['tmp_name'];
    $ext = strrchr($file['name'],'.');
    $newName = time().rand(1000,9999).$ext;
    move_uploaded_file($ftmp, './uploads/'.$newName);
    $photo = './uploads/'.$newName;

  }
  // 准备 sql 语句
  if ( empty( $photo ) ) {
    // 为空, 不需要更新图片
    $sql = "update stu set name='$username', nickname='$nickname', age=$age, tel='$tel', sex='$sex', classid=$class where id=$id";
  }
  else {
    // 需要更新图片, 多加了图片的更新字段
    $sql = "update stu set name='$username', nickname='$nickname', age=$age, tel='$tel', sex='$sex', classid=$class, photo='$photo' where id=$id";
  }
  // if(my_exec($sql)){
  //   header("localhost:list.php");
  // }
  // else{
  //   echo "执行失败";
  // }
  if ( my_exec( $sql ) ) {
    // 执行成功, 跳转到 list.php
    header("location: list.php");
  }
  else {
    echo "执行失败";
  }

?>